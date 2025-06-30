package module_02_karavaev.src;

import module_02_karavaev.src.ui.PartnerUI;
import javax.swing.*;

public class Main {
    public static void main(String[] args) {
        try {
            // Set system look and feel
            UIManager.setLookAndFeel(UIManager.getSystemLookAndFeelClassName());
            
            // Create database connector
            DbConnector db = new DbConnector();
            
            // Launch UI
            SwingUtilities.invokeLater(() -> {
                PartnerUI ui = new PartnerUI(db);
                ui.setLocationRelativeTo(null); // Center on screen
            });
            
        } catch (Exception e) {
            System.err.println("Error starting application: " + e.getMessage());
            e.printStackTrace();
        }
    }
} 