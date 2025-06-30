package module_02_karavaev.src.utils;

import module_02_karavaev.src.models.Partner;
import module_02_karavaev.src.services.PartnerService;
import org.apache.poi.ss.usermodel.*;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.util.Date;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

public class ExcelUtil {
    private static final Logger LOGGER = Logger.getLogger(ExcelUtil.class.getName());
    private static final PartnerService partnerService = new PartnerService();

    public static void importFromExcel(File file) {
        try (FileInputStream fis = new FileInputStream(file);
             Workbook workbook = WorkbookFactory.create(fis)) {
            
            Sheet sheet = workbook.getSheetAt(0);
            
            // Пропускаем заголовок
            for (int i = 1; i <= sheet.getLastRowNum(); i++) {
                Row row = sheet.getRow(i);
                if (row != null) {
                    Partner partner = new Partner();
                    
                    // Заполняем данные партнера из Excel
                    partner.setName(getCellStringValue(row.getCell(0)));
                    partner.setRegistrationDate(getCellDateValue(row.getCell(1)));
                    partner.setPartnerType(getCellStringValue(row.getCell(2)));
                    partner.setDirector(getCellStringValue(row.getCell(3)));
                    partner.setEmail(getCellStringValue(row.getCell(4)));
                    partner.setPhone(getCellStringValue(row.getCell(5)));
                    partner.setLegalAddress(getCellStringValue(row.getCell(6)));
                    partner.setInn(getCellStringValue(row.getCell(7)));
                    partner.setKpp(getCellStringValue(row.getCell(8)));
                    partner.setOgrn(getCellStringValue(row.getCell(9)));
                    
                    // Создаем партнера в базе данных
                    partnerService.createPartner(partner);
                }
            }
        } catch (Exception e) {
            LOGGER.log(Level.SEVERE, "Error importing from Excel", e);
            throw new RuntimeException("Error importing from Excel: " + e.getMessage());
        }
    }

    public static void exportToExcel(List<Partner> partners, File file) {
        try (Workbook workbook = new XSSFWorkbook()) {
            Sheet sheet = workbook.createSheet("Partners");
            
            // Создаем стили для заголовков
            CellStyle headerStyle = workbook.createCellStyle();
            Font headerFont = workbook.createFont();
            headerFont.setBold(true);
            headerStyle.setFont(headerFont);
            
            // Создаем заголовки
            Row headerRow = sheet.createRow(0);
            String[] headers = {
                "Название", "Дата регистрации", "Тип", "Директор", "Email", 
                "Телефон", "Юр. адрес", "ИНН", "КПП", "ОГРН", "Рейтинг", "Статус"
            };
            
            for (int i = 0; i < headers.length; i++) {
                Cell cell = headerRow.createCell(i);
                cell.setCellValue(headers[i]);
                cell.setCellStyle(headerStyle);
            }
            
            // Заполняем данные
            int rowNum = 1;
            for (Partner partner : partners) {
                Row row = sheet.createRow(rowNum++);
                
                row.createCell(0).setCellValue(partner.getName());
                if (partner.getRegistrationDate() != null) {
                    Cell dateCell = row.createCell(1);
                    CellStyle dateStyle = workbook.createCellStyle();
                    dateStyle.setDataFormat(workbook.createDataFormat().getFormat("dd.mm.yyyy"));
                    dateCell.setCellStyle(dateStyle);
                    dateCell.setCellValue(partner.getRegistrationDate());
                }
                row.createCell(2).setCellValue(partner.getPartnerType());
                row.createCell(3).setCellValue(partner.getDirector());
                row.createCell(4).setCellValue(partner.getEmail());
                row.createCell(5).setCellValue(partner.getPhone());
                row.createCell(6).setCellValue(partner.getLegalAddress());
                row.createCell(7).setCellValue(partner.getInn());
                row.createCell(8).setCellValue(partner.getKpp());
                row.createCell(9).setCellValue(partner.getOgrn());
                if (partner.getRating() != null) {
                    row.createCell(10).setCellValue(partner.getRating());
                }
                row.createCell(11).setCellValue(partner.getStatus().name());
            }
            
            // Автоматически регулируем ширину колонок
            for (int i = 0; i < headers.length; i++) {
                sheet.autoSizeColumn(i);
            }
            
            // Сохраняем файл
            try (FileOutputStream fileOut = new FileOutputStream(file)) {
                workbook.write(fileOut);
            }
        } catch (Exception e) {
            LOGGER.log(Level.SEVERE, "Error exporting to Excel", e);
            throw new RuntimeException("Error exporting to Excel: " + e.getMessage());
        }
    }

    private static String getCellStringValue(Cell cell) {
        if (cell == null) {
            return null;
        }
        switch (cell.getCellType()) {
            case STRING:
                return cell.getStringCellValue();
            case NUMERIC:
                return String.valueOf((long) cell.getNumericCellValue());
            default:
                return null;
        }
    }

    private static Date getCellDateValue(Cell cell) {
        if (cell == null) {
            return null;
        }
        switch (cell.getCellType()) {
            case NUMERIC:
                if (DateUtil.isCellDateFormatted(cell)) {
                    return cell.getDateCellValue();
                }
                return null;
            default:
                return null;
        }
    }
} 