package module_02_karavaev.src.ui;

import module_02_karavaev.src.DbConnector;
import javax.swing.*;
import java.awt.*;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.text.SimpleDateFormat;
import java.util.Date;

public class SalesHistoryUI extends JPanel {
    private final DbConnector db;
    private JPanel historyPanel;

    public SalesHistoryUI(DbConnector dbConnector) {
        this.db = dbConnector;
        setLayout(new BorderLayout());

        // Control Panel
        JPanel controlPanel = new JPanel();
        JButton addButton = new JButton("➕ Add Transaction");
        JButton editButton = new JButton("✏ Edit");
        JButton deleteButton = new JButton("❌ Delete");

        controlPanel.add(addButton);
        controlPanel.add(editButton);
        controlPanel.add(deleteButton);
        add(controlPanel, BorderLayout.NORTH);

        addButton.addActionListener(e -> addTransaction());
        editButton.addActionListener(e -> editTransaction());
        deleteButton.addActionListener(e -> deleteTransaction());

        // History Panel
        historyPanel = new JPanel();
        historyPanel.setLayout(new GridLayout(0, 1, 10, 10));
        add(new JScrollPane(historyPanel), BorderLayout.CENTER);

        loadTransactions();
    }

    private void loadTransactions() {
        Connection connection = db.connect();
        if (connection == null) return;

        try {
            String sql = "SELECT transaction_id, product_name, partner_name, quantity, transaction_date FROM transaction_history ORDER BY transaction_date DESC";
            PreparedStatement stmt = connection.prepareStatement(sql);
            ResultSet rs = stmt.executeQuery();

            historyPanel.removeAll();

            while (rs.next()) {
                JPanel card = new JPanel(new BorderLayout());
                card.setBorder(BorderFactory.createLineBorder(Color.GRAY, 2));
                card.setBackground(new Color(240, 240, 240));
                card.setPreferredSize(new Dimension(850, 80));

                JLabel productLabel = new JLabel(rs.getString("product_name"));
                productLabel.setFont(new Font("Arial", Font.BOLD, 16));

                JLabel partnerLabel = new JLabel("<html><b>Partner:</b> " + rs.getString("partner_name") + "</html>");
                JLabel quantityLabel = new JLabel("<html><b>Quantity:</b> " + rs.getInt("quantity") + "</html>");
                JLabel dateLabel = new JLabel("<html><b>Date:</b> " + rs.getDate("transaction_date") + "</html>");

                JPanel textPanel = new JPanel(new GridLayout(3, 1));
                textPanel.setBackground(new Color(240, 240, 240));
                textPanel.add(productLabel);
                textPanel.add(partnerLabel);
                textPanel.add(quantityLabel);

                dateLabel.setHorizontalAlignment(SwingConstants.RIGHT);

                card.add(textPanel, BorderLayout.WEST);
                card.add(dateLabel, BorderLayout.EAST);

                historyPanel.add(card);
            }

            historyPanel.revalidate();
            historyPanel.repaint();
            connection.close();

        } catch (Exception e) {
            System.out.println("Error loading transactions: " + e.getMessage());
        }
    }

    private void addTransaction() {
        String product = JOptionPane.showInputDialog(this, "Enter product name:");
        if (product == null || product.trim().isEmpty()) return;

        String partner = selectPartner("Select partner:");
        if (partner == null) return;

        String quantityStr = JOptionPane.showInputDialog(this, "Enter quantity:");
        if (quantityStr == null || quantityStr.trim().isEmpty()) return;

        int quantity = Integer.parseInt(quantityStr);

        Connection connection = db.connect();
        if (connection != null) {
            try {
                String sql = "INSERT INTO transaction_history (product_name, partner_name, quantity, transaction_date) VALUES (?, ?, ?, ?)";
                PreparedStatement stmt = connection.prepareStatement(sql);
                stmt.setString(1, product);
                stmt.setString(2, partner);
                stmt.setInt(3, quantity);
                stmt.setDate(4, new java.sql.Date(new Date().getTime()));
                stmt.executeUpdate();
                loadTransactions();
                connection.close();
            } catch (Exception e) {
                System.out.println("Error adding transaction: " + e.getMessage());
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

    private void editTransaction() {
        String selectedTransaction = selectTransaction("Select transaction to edit:");
        if (selectedTransaction == null) return;

        String product = JOptionPane.showInputDialog(this, "Enter new product name:");
        String partner = selectPartner("Select new partner:");
        String quantityStr = JOptionPane.showInputDialog(this, "Enter new quantity:");
        if (quantityStr == null || quantityStr.trim().isEmpty()) return;

        int quantity = Integer.parseInt(quantityStr);

        Connection connection = db.connect();
        if (connection != null) {
            try {
                String sql = "UPDATE transaction_history SET product_name = ?, partner_name = ?, quantity = ? WHERE transaction_id = ?";
                PreparedStatement stmt = connection.prepareStatement(sql);
                stmt.setString(1, product);
                stmt.setString(2, partner);
                stmt.setInt(3, quantity);
                stmt.setInt(4, Integer.parseInt(selectedTransaction));
                stmt.executeUpdate();
                loadTransactions();
                connection.close();
            } catch (Exception e) {
                System.out.println("Error editing transaction: " + e.getMessage());
            }
        }
    }

    private String selectTransaction(String message) {
        Connection connection = db.connect();
        if (connection == null) return null;

        try {
            String sql = "SELECT transaction_id, product_name, transaction_date FROM transaction_history";
            PreparedStatement stmt = connection.prepareStatement(sql);
            ResultSet rs = stmt.executeQuery();

            DefaultListModel<String> model = new DefaultListModel<>();
            while (rs.next()) {
                model.addElement(rs.getInt("transaction_id") + " - " + rs.getString("product_name") + " (" + rs.getDate("transaction_date") + ")");
            }
            connection.close();

            JList<String> list = new JList<>(model);
            int option = JOptionPane.showConfirmDialog(this, new JScrollPane(list), message, JOptionPane.OK_CANCEL_OPTION);

            if (option == JOptionPane.OK_OPTION && list.getSelectedValue() != null) {
                return list.getSelectedValue().split(" - ")[0];
            }
            return null;

        } catch (Exception e) {
            System.out.println("Error loading transaction list: " + e.getMessage());
            return null;
        }
    }

    private void deleteTransaction() {
        String selectedTransaction = selectTransaction("Select transaction to delete:");
        if (selectedTransaction == null) return;

        Connection connection = db.connect();
        if (connection != null) {
            try {
                String sql = "DELETE FROM transaction_history WHERE transaction_id = ?";
                PreparedStatement stmt = connection.prepareStatement(sql);
                stmt.setInt(1, Integer.parseInt(selectedTransaction));
                int rowsAffected = stmt.executeUpdate();
                connection.close();

                if (rowsAffected == 0) {
                    JOptionPane.showMessageDialog(this, "❌ Transaction not found!", "Error", JOptionPane.ERROR_MESSAGE);
                } else {
                    JOptionPane.showMessageDialog(this, "✅ Transaction deleted successfully!", "Success", JOptionPane.INFORMATION_MESSAGE);
                    loadTransactions();
                }
            } catch (Exception e) {
                System.out.println("Error deleting transaction: " + e.getMessage());
            }
        }
    }
}

