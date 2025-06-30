package module_02_karavaev.src.ui;

import module_02_karavaev.src.DbConnector;
import javax.swing.*;
import java.awt.*;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

public class PartnerUI extends JFrame {
    private final DbConnector db;
    private JPanel partnerListPanel;
    private JTabbedPane tabbedPane;

    public PartnerUI(DbConnector dbConnector) {
        setTitle("Business Partner Management System");
        setIconImage(Toolkit.getDefaultToolkit().getImage("src/img/logo.png"));
        this.db = dbConnector;
        setSize(900, 600);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        setLayout(new BorderLayout());

        tabbedPane = new JTabbedPane();
        add(tabbedPane, BorderLayout.CENTER);

        // Control Panel
        JPanel controlPanel = new JPanel();
        JButton addButton = new JButton("➕ Add New");
        JButton editButton = new JButton("✏ Edit");
        JButton deleteButton = new JButton("❌ Delete");

        controlPanel.add(addButton);
        controlPanel.add(editButton);
        controlPanel.add(deleteButton);
        add(controlPanel, BorderLayout.NORTH);

        addButton.addActionListener(e -> addPartner());
        editButton.addActionListener(e -> editPartner());
        deleteButton.addActionListener(e -> deletePartner());

        // Partner List Panel
        partnerListPanel = new JPanel();
        partnerListPanel.setLayout(new GridLayout(0, 1, 10, 10));
        tabbedPane.add("Partners", new JScrollPane(partnerListPanel));

        tabbedPane.addTab("Transaction History", new module_02_karavaev.src.ui.SalesHistoryUI(db));
        tabbedPane.addTab("Discount Management", new DiscountCalculatorUI(db));

        tabbedPane.addChangeListener(e -> {
            int selectedIndex = tabbedPane.getSelectedIndex();
            String selectedTab = tabbedPane.getTitleAt(selectedIndex);

            if ("Transaction History".equals(selectedTab) || "Discount Management".equals(selectedTab)) {
                controlPanel.setVisible(false);
            } else {
                controlPanel.setVisible(true);
            }
        });

        loadPartners();
        setVisible(true);
    }

    private void loadPartners() {
        Connection connection = db.connect();
        if (connection == null) return;

        try {
            String sql = "SELECT partner_id, company_type, company_name, ceo_name, contact_phone, performance_score FROM business_partners";
            PreparedStatement stmt = connection.prepareStatement(sql);
            ResultSet rs = stmt.executeQuery();

            partnerListPanel.removeAll();

            while (rs.next()) {
                JPanel card = new JPanel(new BorderLayout());
                card.setBorder(BorderFactory.createLineBorder(Color.GRAY, 2));
                card.setBackground(new Color(240, 240, 240));
                card.setPreferredSize(new Dimension(850, 100));

                JLabel typeLabel = new JLabel(rs.getString("company_type") + " | " + rs.getString("company_name"));
                typeLabel.setFont(new Font("Arial", Font.BOLD, 16));

                JLabel ceoLabel = new JLabel("<html><b>CEO:</b> " + rs.getString("ceo_name") + "</html>");
                JLabel phoneLabel = new JLabel("<html><b>Phone:</b> " + rs.getString("contact_phone") + "</html>");
                JLabel scoreLabel = new JLabel("<html><b>Performance Score:</b> " + rs.getInt("performance_score") + "</html>");

                JPanel textPanel = new JPanel(new GridLayout(3, 1));
                textPanel.setBackground(new Color(240, 240, 240));
                textPanel.add(typeLabel);
                textPanel.add(ceoLabel);
                textPanel.add(phoneLabel);

                scoreLabel.setHorizontalAlignment(SwingConstants.RIGHT);

                card.add(textPanel, BorderLayout.WEST);
                card.add(scoreLabel, BorderLayout.EAST);

                partnerListPanel.add(card);
            }

            partnerListPanel.revalidate();
            partnerListPanel.repaint();
            connection.close();

        } catch (Exception e) {
            System.out.println("Error loading data: " + e.getMessage());
        }
    }

    private void addPartner() {
        String[] companyTypes = {"LLC", "Corp", "Sole Proprietor", "JSC", "State Corporation"};
        JComboBox<String> typeBox = new JComboBox<>(companyTypes);
        JOptionPane.showMessageDialog(this, typeBox, "Select Company Type", JOptionPane.QUESTION_MESSAGE);
        String companyType = (String) typeBox.getSelectedItem();

        String name = JOptionPane.showInputDialog(this, "Enter company name:");
        if (name == null || name.trim().isEmpty()) return;

        String ceo = JOptionPane.showInputDialog(this, "Enter CEO name:");
        if (ceo == null || ceo.trim().isEmpty()) return;

        String phone = JOptionPane.showInputDialog(this, "Enter phone number:");
        if (phone == null || phone.trim().isEmpty()) return;

        String scoreStr = JOptionPane.showInputDialog(this, "Enter performance score (1-10):");
        if (scoreStr == null || scoreStr.trim().isEmpty()) return;

        int score = Integer.parseInt(scoreStr);

        Connection connection = db.connect();
        if (connection != null) {
            try {
                String sql = "INSERT INTO business_partners (company_type, company_name, ceo_name, contact_phone, performance_score) VALUES (?, ?, ?, ?, ?)";
                PreparedStatement stmt = connection.prepareStatement(sql);
                stmt.setString(1, companyType);
                stmt.setString(2, name);
                stmt.setString(3, ceo);
                stmt.setString(4, phone);
                stmt.setInt(5, score);
                stmt.executeUpdate();
                loadPartners();
                connection.close();
            } catch (Exception e) {
                System.out.println("Error adding partner: " + e.getMessage());
            }
        }
    }

    private String selectPartner(String message) {
        Connection connection = db.connect();
        if (connection == null) return null;

        try {
            String sql = "SELECT company_name FROM business_partners";
            PreparedStatement stmt = connection.prepareStatement(sql);
            ResultSet rs = stmt.executeQuery();

            DefaultListModel<String> model = new DefaultListModel<>();
            while (rs.next()) {
                model.addElement(rs.getString("company_name"));
            }
            connection.close();

            JList<String> list = new JList<>(model);
            int option = JOptionPane.showConfirmDialog(this, new JScrollPane(list), message, JOptionPane.OK_CANCEL_OPTION);

            return (option == JOptionPane.OK_OPTION) ? list.getSelectedValue() : null;

        } catch (Exception e) {
            System.out.println("Error loading partner list: " + e.getMessage());
            return null;
        }
    }

    private void editPartner() {
        String selectedPartner = selectPartner("Select partner to edit:");
        if (selectedPartner == null) return;

        String[] companyTypes = {"LLC", "Corp", "Sole Proprietor", "JSC", "State Corporation"};
        JComboBox<String> typeBox = new JComboBox<>(companyTypes);
        JOptionPane.showMessageDialog(this, typeBox, "Select new company type", JOptionPane.QUESTION_MESSAGE);
        String companyType = (String) typeBox.getSelectedItem();

        String name = JOptionPane.showInputDialog(this, "Enter new company name:");
        String ceo = JOptionPane.showInputDialog(this, "Enter CEO name:");
        String phone = JOptionPane.showInputDialog(this, "Enter new phone number:");
        String scoreStr = JOptionPane.showInputDialog(this, "Enter new performance score (1-10):");
        if (scoreStr == null || scoreStr.trim().isEmpty()) return;

        int score = Integer.parseInt(scoreStr);

        Connection connection = db.connect();
        if (connection != null) {
            try {
                String sql = "UPDATE business_partners SET company_type = ?, company_name = ?, ceo_name = ?, contact_phone = ?, performance_score = ? WHERE company_name = ?";
                PreparedStatement stmt = connection.prepareStatement(sql);
                stmt.setString(1, companyType);
                stmt.setString(2, name);
                stmt.setString(3, ceo);
                stmt.setString(4, phone);
                stmt.setInt(5, score);
                stmt.setString(6, selectedPartner);
                stmt.executeUpdate();
                loadPartners();
                connection.close();
            } catch (Exception e) {
                System.out.println("Error editing partner: " + e.getMessage());
            }
        }
    }

    private void deletePartner() {
        String selectedPartner = selectPartner("Select partner to delete:");
        if (selectedPartner == null) return;

        Connection connection = db.connect();
        if (connection != null) {
            try {
                String sql = "DELETE FROM business_partners WHERE company_name = ?";
                PreparedStatement stmt = connection.prepareStatement(sql);
                stmt.setString(1, selectedPartner);
                int rowsAffected = stmt.executeUpdate();
                connection.close();

                if (rowsAffected == 0) {
                    JOptionPane.showMessageDialog(this, "❌ Partner not found!", "Error", JOptionPane.ERROR_MESSAGE);
                } else {
                    JOptionPane.showMessageDialog(this, "✅ Partner deleted successfully!", "Success", JOptionPane.INFORMATION_MESSAGE);
                    loadPartners();
                }
            } catch (Exception e) {
                System.out.println("Error deleting partner: " + e.getMessage());
            }
        }
    }
}
