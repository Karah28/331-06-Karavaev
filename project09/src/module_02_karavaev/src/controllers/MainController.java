package module_02_karavaev.src.controllers;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.FileChooser;
import module_02_karavaev.src.models.Partner;
import module_02_karavaev.src.models.PartnerContact;
import module_02_karavaev.src.services.PartnerService;
import module_02_karavaev.src.utils.ExcelUtil;

import java.io.File;
import java.net.URL;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;

public class MainController implements Initializable {
    private static final Logger LOGGER = Logger.getLogger(MainController.class.getName());
    private final PartnerService partnerService = new PartnerService();

    @FXML private TextField searchField;
    @FXML private ComboBox<String> categoryFilter;
    @FXML private ComboBox<Partner.PartnerStatus> statusFilter;
    
    @FXML private TableView<Partner> partnersTable;
    @FXML private TableColumn<Partner, Integer> idColumn;
    @FXML private TableColumn<Partner, String> nameColumn;
    @FXML private TableColumn<Partner, String> categoryColumn;
    @FXML private TableColumn<Partner, String> innColumn;
    @FXML private TableColumn<Partner, String> directorColumn;
    @FXML private TableColumn<Partner, String> phoneColumn;
    @FXML private TableColumn<Partner, Partner.PartnerStatus> statusColumn;
    @FXML private TableColumn<Partner, Integer> ratingColumn;

    @FXML private TableView<PartnerContact> contactsTable;
    @FXML private TableColumn<PartnerContact, String> contactNameColumn;
    @FXML private TableColumn<PartnerContact, String> contactPositionColumn;
    @FXML private TableColumn<PartnerContact, String> contactPhoneColumn;
    @FXML private TableColumn<PartnerContact, String> contactEmailColumn;
    @FXML private TableColumn<PartnerContact, Boolean> contactPrimaryColumn;

    @FXML private TextArea notesArea;

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        initializeColumns();
        initializeFilters();
        loadPartners();
        
        // Добавляем слушатель выбора партнера
        partnersTable.getSelectionModel().selectedItemProperty().addListener(
            (observable, oldValue, newValue) -> onPartnerSelected(newValue));
    }

    private void initializeColumns() {
        // Инициализация колонок таблицы партнеров
        idColumn.setCellValueFactory(new PropertyValueFactory<>("partnerId"));
        nameColumn.setCellValueFactory(new PropertyValueFactory<>("name"));
        categoryColumn.setCellValueFactory(new PropertyValueFactory<>("categoryId"));
        innColumn.setCellValueFactory(new PropertyValueFactory<>("inn"));
        directorColumn.setCellValueFactory(new PropertyValueFactory<>("director"));
        phoneColumn.setCellValueFactory(new PropertyValueFactory<>("phone"));
        statusColumn.setCellValueFactory(new PropertyValueFactory<>("status"));
        ratingColumn.setCellValueFactory(new PropertyValueFactory<>("rating"));

        // Инициализация колонок таблицы контактов
        contactNameColumn.setCellValueFactory(new PropertyValueFactory<>("fullName"));
        contactPositionColumn.setCellValueFactory(new PropertyValueFactory<>("position"));
        contactPhoneColumn.setCellValueFactory(new PropertyValueFactory<>("phone"));
        contactEmailColumn.setCellValueFactory(new PropertyValueFactory<>("email"));
        contactPrimaryColumn.setCellValueFactory(new PropertyValueFactory<>("primary"));
    }

    private void initializeFilters() {
        // Инициализация фильтров
        statusFilter.setItems(FXCollections.observableArrayList(Partner.PartnerStatus.values()));
        // TODO: Загрузить категории из базы данных
        categoryFilter.setItems(FXCollections.observableArrayList("Bronze", "Silver", "Gold", "Platinum"));
    }

    private void loadPartners() {
        try {
            List<Partner> partners = partnerService.getAllPartners();
            partnersTable.setItems(FXCollections.observableArrayList(partners));
        } catch (Exception e) {
            LOGGER.log(Level.SEVERE, "Error loading partners", e);
            showError("Ошибка загрузки", "Не удалось загрузить список партнеров");
        }
    }

    private void onPartnerSelected(Partner partner) {
        if (partner != null) {
            try {
                // Загружаем контакты
                List<PartnerContact> contacts = partnerService.getPartnerContacts(partner.getPartnerId());
                contactsTable.setItems(FXCollections.observableArrayList(contacts));
                
                // Загружаем заметки
                notesArea.setText(partner.getManagerNotes());
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error loading partner details", e);
                showError("Ошибка", "Не удалось загрузить детали партнера");
            }
        } else {
            contactsTable.getItems().clear();
            notesArea.clear();
        }
    }

    @FXML
    private void handleSearch() {
        String searchText = searchField.getText();
        if (searchText != null && !searchText.trim().isEmpty()) {
            try {
                List<Partner> partners = partnerService.searchPartners(searchText);
                partnersTable.setItems(FXCollections.observableArrayList(partners));
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error searching partners", e);
                showError("Ошибка поиска", "Не удалось выполнить поиск");
            }
        }
    }

    @FXML
    private void handleAddPartner() {
        // TODO: Реализовать диалог добавления партнера
        showInfo("Информация", "Функция добавления партнера будет доступна в следующей версии");
    }

    @FXML
    private void handleEditPartner() {
        Partner selected = partnersTable.getSelectionModel().getSelectedItem();
        if (selected != null) {
            // TODO: Реализовать диалог редактирования партнера
            showInfo("Информация", "Функция редактирования партнера будет доступна в следующей версии");
        } else {
            showWarning("Предупреждение", "Выберите партнера для редактирования");
        }
    }

    @FXML
    private void handleDeletePartner() {
        Partner selected = partnersTable.getSelectionModel().getSelectedItem();
        if (selected != null) {
            Optional<ButtonType> result = showConfirmation(
                "Подтверждение удаления",
                "Вы действительно хотите удалить партнера " + selected.getName() + "?"
            );
            
            if (result.isPresent() && result.get() == ButtonType.OK) {
                try {
                    partnerService.deletePartner(selected.getPartnerId());
                    loadPartners();
                } catch (Exception e) {
                    LOGGER.log(Level.SEVERE, "Error deleting partner", e);
                    showError("Ошибка удаления", "Не удалось удалить партнера");
                }
            }
        } else {
            showWarning("Предупреждение", "Выберите партнера для удаления");
        }
    }

    @FXML
    private void handleRefresh() {
        loadPartners();
    }

    @FXML
    private void handleImportExcel() {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Выберите файл Excel");
        fileChooser.getExtensionFilters().add(
            new FileChooser.ExtensionFilter("Excel Files", "*.xlsx", "*.xls")
        );
        
        File file = fileChooser.showOpenDialog(null);
        if (file != null) {
            try {
                ExcelUtil.importFromExcel(file);
                loadPartners();
                showInfo("Успех", "Данные успешно импортированы");
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error importing from Excel", e);
                showError("Ошибка импорта", "Не удалось импортировать данные из Excel");
            }
        }
    }

    @FXML
    private void handleExportExcel() {
        FileChooser fileChooser = new FileChooser();
        fileChooser.setTitle("Сохранить как Excel");
        fileChooser.getExtensionFilters().add(
            new FileChooser.ExtensionFilter("Excel Files", "*.xlsx")
        );
        
        File file = fileChooser.showSaveDialog(null);
        if (file != null) {
            try {
                ExcelUtil.exportToExcel(partnersTable.getItems(), file);
                showInfo("Успех", "Данные успешно экспортированы");
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error exporting to Excel", e);
                showError("Ошибка экспорта", "Не удалось экспортировать данные в Excel");
            }
        }
    }

    @FXML
    private void handleSaveNotes() {
        Partner selected = partnersTable.getSelectionModel().getSelectedItem();
        if (selected != null) {
            selected.setManagerNotes(notesArea.getText());
            try {
                partnerService.updatePartner(selected);
                showInfo("Успех", "Заметки сохранены");
            } catch (Exception e) {
                LOGGER.log(Level.SEVERE, "Error saving notes", e);
                showError("Ошибка", "Не удалось сохранить заметки");
            }
        }
    }

    @FXML
    private void handleExit() {
        System.exit(0);
    }

    @FXML
    private void handleManageCategories() {
        // TODO: Реализовать управление категориями
        showInfo("Информация", "Функция управления категориями будет доступна в следующей версии");
    }

    @FXML
    private void handleSalesStatistics() {
        // TODO: Реализовать отчет по статистике продаж
        showInfo("Информация", "Функция просмотра статистики продаж будет доступна в следующей версии");
    }

    @FXML
    private void handlePartnerActivity() {
        // TODO: Реализовать отчет по активности партнеров
        showInfo("Информация", "Функция просмотра активности партнеров будет доступна в следующей версии");
    }

    @FXML
    private void handleAbout() {
        showInfo("О программе",
                "Система управления партнерами\n" +
                "Версия 1.0\n\n" +
                "Разработано в рамках проекта модернизации");
    }

    private void showError(String title, String content) {
        Alert alert = new Alert(Alert.AlertType.ERROR);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    private void showWarning(String title, String content) {
        Alert alert = new Alert(Alert.AlertType.WARNING);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    private void showInfo(String title, String content) {
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        alert.showAndWait();
    }

    private Optional<ButtonType> showConfirmation(String title, String content) {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle(title);
        alert.setHeaderText(null);
        alert.setContentText(content);
        return alert.showAndWait();
    }
} 