package module_02_karavaev.src.ui;

import module_02_karavaev.src.DbConnector;
import javax.swing.*;
import java.awt.*;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

public class DiscountCalculatorUI extends JPanel {
    private final DbConnector db;
    private JPanel discountPanel;
    private JComboBox<String> partnerComboBox;
    private JSpinner basePriceSpinner;
    private JLabel resultLabel;

    public DiscountCalculatorUI(DbConnector dbConnector) {
        this.db = dbConnector;
        setLayout(new BorderLayout());

        // Control Panel
        JPanel controlPanel = new JPanel(new GridLayout(2, 2, 10, 10));
        controlPanel.setBorder(BorderFactory.createEmptyBorder(10, 10, 10, 10));

        // Partner Selection
        JLabel partnerLabel = new JLabel("Select Partner:");
        partnerComboBox = new JComboBox<>();
        loadPartners();
        controlPanel.add(partnerLabel);
        controlPanel.add(partnerComboBox);

        // Base Price Input
        JLabel priceLabel = new JLabel("Base Price:");
        SpinnerNumberModel priceModel = new SpinnerNumberModel(100.0, 0.0, 1000000.0, 10.0);
        basePriceSpinner = new JSpinner(priceModel);
        controlPanel.add(priceLabel);
        controlPanel.add(basePriceSpinner);

        // Calculate Button
        JButton calculateButton = new JButton("Calculate Discount");
        calculateButton.addActionListener(e -> calculateDiscount());

        // Result Display
        resultLabel = new JLabel("Select a partner and enter base price to calculate discount");
        resultLabel.setHorizontalAlignment(SwingConstants.CENTER);
        resultLabel.setFont(new Font("Arial", Font.BOLD, 14));

        // Layout
        JPanel topPanel = new JPanel(new BorderLayout());
        topPanel.add(controlPanel, BorderLayout.CENTER);
        topPanel.add(calculateButton, BorderLayout.SOUTH);

        add(topPanel, BorderLayout.NORTH);
        add(resultLabel, BorderLayout.CENTER);

        // Discount History Panel
        discountPanel = new JPanel();
        discountPanel.setLayout(new GridLayout(0, 1, 10, 10));
        add(new JScrollPane(discountPanel), BorderLayout.SOUTH);

        loadDiscountHistory();
    }

    private void loadPartners() {
        Connection connection = db.connect();
        if (connection == null) return;

        try {
            String sql = "SELECT company_name, performance_score FROM business_partners ORDER BY company_name";
            PreparedStatement stmt = connection.prepareStatement(sql);
            ResultSet rs = stmt.executeQuery();

            partnerComboBox.removeAllItems();
            while (rs.next()) {
                partnerComboBox.addItem(rs.getString("company_name") + " (Score: " + rs.getInt("performance_score") + ")");
            }
            connection.close();
        } catch (Exception e) {
            System.out.println("Error loading partners: " + e.getMessage());
        }
    }

    private void calculateDiscount() {
        String selectedPartner = (String) partnerComboBox.getSelectedItem();
        if (selectedPartner == null) {
            JOptionPane.showMessageDialog(this, "Please select a partner", "Error", JOptionPane.ERROR_MESSAGE);
            return;
        }

        double basePrice = (Double) basePriceSpinner.getValue();
        String partnerName = selectedPartner.split(" \\(")[0];

        Connection connection = db.connect();
        if (connection == null) return;

        try {
            String sql = "SELECT performance_score FROM business_partners WHERE company_name = ?";
            PreparedStatement stmt = connection.prepareStatement(sql);
            stmt.setString(1, partnerName);
            ResultSet rs = stmt.executeQuery();

            if (rs.next()) {
                int performanceScore = rs.getInt("performance_score");
                double discountRate = calculateDiscountRate(performanceScore);
                double discountAmount = basePrice * discountRate;
                double finalPrice = basePrice - discountAmount;

                String result = String.format(
                    "Partner: %s\nPerformance Score: %d\nBase Price: $%.2f\nDiscount Rate: %.1f%%\nDiscount Amount: $%.2f\nFinal Price: $%.2f",
                    partnerName, performanceScore, basePrice, discountRate * 100, discountAmount, finalPrice
                );
                resultLabel.setText("<html>" + result.replace("\n", "<br>") + "</html>");

                // Save to history
                saveDiscountCalculation(partnerName, basePrice, discountRate, discountAmount, finalPrice);
                loadDiscountHistory();
            }
            connection.close();
        } catch (Exception e) {
            System.out.println("Error calculating discount: " + e.getMessage());
        }
    }

    private double calculateDiscountRate(int performanceScore) {
        if (performanceScore >= 9) return 0.15;  // 15% discount
        if (performanceScore >= 7) return 0.10;  // 10% discount
        if (performanceScore >= 5) return 0.05;  // 5% discount
        return 0.02;  // 2% discount
    }

    private void saveDiscountCalculation(String partnerName, double basePrice, double discountRate, double discountAmount, double finalPrice) {
        Connection connection = db.connect();
        if (connection == null) return;

        try {
            String sql = "INSERT INTO discount_history (partner_name, base_price, discount_rate, discount_amount, final_price, calculation_date) VALUES (?, ?, ?, ?, ?, NOW())";
            PreparedStatement stmt = connection.prepareStatement(sql);
            stmt.setString(1, partnerName);
            stmt.setDouble(2, basePrice);
            stmt.setDouble(3, discountRate);
            stmt.setDouble(4, discountAmount);
            stmt.setDouble(5, finalPrice);
            stmt.executeUpdate();
            connection.close();
        } catch (Exception e) {
            System.out.println("Error saving discount calculation: " + e.getMessage());
        }
    }

    private void loadDiscountHistory() {
        Connection connection = db.connect();
        if (connection == null) return;

        try {
            String sql = "SELECT partner_name, base_price, discount_rate, discount_amount, final_price, calculation_date FROM discount_history ORDER BY calculation_date DESC LIMIT 10";
            PreparedStatement stmt = connection.prepareStatement(sql);
            ResultSet rs = stmt.executeQuery();

            discountPanel.removeAll();

            while (rs.next()) {
                JPanel card = new JPanel(new BorderLayout());
                card.setBorder(BorderFactory.createLineBorder(Color.GRAY, 2));
                card.setBackground(new Color(240, 240, 240));
                card.setPreferredSize(new Dimension(850, 100));

                JLabel partnerLabel = new JLabel(rs.getString("partner_name"));
                partnerLabel.setFont(new Font("Arial", Font.BOLD, 16));

                String details = String.format(
                    "<html><b>Base Price:</b> $%.2f<br><b>Discount Rate:</b> %.1f%%<br><b>Final Price:</b> $%.2f</html>",
                    rs.getDouble("base_price"),
                    rs.getDouble("discount_rate") * 100,
                    rs.getDouble("final_price")
                );
                JLabel detailsLabel = new JLabel(details);

                JLabel dateLabel = new JLabel(rs.getTimestamp("calculation_date").toString());
                dateLabel.setHorizontalAlignment(SwingConstants.RIGHT);

                card.add(partnerLabel, BorderLayout.NORTH);
                card.add(detailsLabel, BorderLayout.CENTER);
                card.add(dateLabel, BorderLayout.SOUTH);

                discountPanel.add(card);
            }

            discountPanel.revalidate();
            discountPanel.repaint();
            connection.close();
        } catch (Exception e) {
            System.out.println("Error loading discount history: " + e.getMessage());
        }
    }
}
