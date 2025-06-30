package module_01_karavaev.src;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.Date;
import java.sql.ResultSet;
import java.time.LocalDate;
import java.util.Random;
import java.io.File;
import java.io.FileInputStream;
import org.apache.poi.ss.usermodel.*;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

import javax.swing.*;

public class ExcelToDB {
    public static void importExcel(Connection connection) {
        String filePath = "D:\\projects\\partner_system\\src\\main\\java\\module_01_karavaev\\import_data\\partners_import.xlsx";

        try (FileInputStream fis = new FileInputStream(new File(filePath));
             Workbook workbook = new XSSFWorkbook(fis)) {

            Sheet sheet = workbook.getSheetAt(0);
            String sql = "INSERT INTO business_partners (company_type, company_name, ceo_name, contact_email, contact_phone, " +
                        "registered_address, tax_id, performance_score, registration_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            PreparedStatement preparedStatement = connection.prepareStatement(sql);

            Random random = new Random();
            LocalDate today = LocalDate.now();

            for (Row row : sheet) {
                if (row.getRowNum() == 0) continue;  // Пропускаем заголовок

                String companyType = getCellValue(row.getCell(0));
                String companyName = getCellValue(row.getCell(1));
                String ceoName = getCellValue(row.getCell(2));
                String contactEmail = getCellValue(row.getCell(3));
                String contactPhone = getCellValue(row.getCell(4));
                String registeredAddress = getCellValue(row.getCell(5));
                String taxId = getCellValue(row.getCell(6));
                String performanceScoreStr = getCellValue(row.getCell(7));

                if (companyType.isEmpty()) companyType = "Not Specified";
                if (performanceScoreStr.isEmpty()) performanceScoreStr = "0";

                int performanceScore = Integer.parseInt(performanceScoreStr);

                LocalDate registrationDate;
                if (row.getCell(8) == null || row.getCell(8).getCellType() == CellType.BLANK) {
                    int year = random.nextInt(today.getYear() - 2018 + 1) + 2018;
                    int month = random.nextInt(12) + 1;
                    int day = random.nextInt(28) + 1;
                    registrationDate = LocalDate.of(year, month, day);
                } else {
                    registrationDate = today;
                }

                preparedStatement.setString(1, companyType);
                preparedStatement.setString(2, companyName);
                preparedStatement.setString(3, ceoName);
                preparedStatement.setString(4, contactEmail);
                preparedStatement.setString(5, contactPhone);
                preparedStatement.setString(6, registeredAddress);
                preparedStatement.setString(7, taxId);
                preparedStatement.setInt(8, performanceScore);
                preparedStatement.setDate(9, Date.valueOf(registrationDate));
                preparedStatement.executeUpdate();
            }

            System.out.println("✅ Data successfully imported to database!");

        } catch (Exception e) {
            System.out.println("❌ Error importing Excel: " + e.getMessage());
        }
    }

    public static boolean importSalesHistory(Connection connection, String filePath) {
        boolean success = true;
        boolean duplicateWarningShown = false;

        try (FileInputStream fis = new FileInputStream(new File(filePath));
             Workbook workbook = new XSSFWorkbook(fis)) {

            Sheet sheet = workbook.getSheetAt(0);
            String sql = "INSERT INTO transaction_history (product_name, partner_name, quantity, transaction_date) VALUES (?, ?, ?, ?)";
            PreparedStatement preparedStatement = connection.prepareStatement(sql);

            for (Row row : sheet) {
                if (row.getRowNum() == 0) continue;

                String productName = getCellValue(row.getCell(0));
                String partnerName = getCellValue(row.getCell(1));
                String quantityStr = getCellValue(row.getCell(2));
                String transactionDateStr = getCellValue(row.getCell(3));

                if (productName.isEmpty() || partnerName.isEmpty() || quantityStr.isEmpty() || transactionDateStr.isEmpty()) {
                    JOptionPane.showMessageDialog(null, "❌ Error: Empty values found in file!", "Import Error", JOptionPane.ERROR_MESSAGE);
                    success = false;
                    break;
                }

                int quantity = Integer.parseInt(quantityStr);
                LocalDate transactionDate = LocalDate.parse(transactionDateStr);

                if (isDuplicate(connection, productName, partnerName, transactionDate, quantity)) {
                    if (!duplicateWarningShown) {
                        JOptionPane.showMessageDialog(null, "⚠️ Warning: Duplicate record found!", "Warning", JOptionPane.WARNING_MESSAGE);
                        duplicateWarningShown = true;
                    }
                    updateRecord(connection, productName, partnerName, quantity, transactionDate);
                    continue;
                }

                preparedStatement.setString(1, productName);
                preparedStatement.setString(2, partnerName);
                preparedStatement.setInt(3, quantity);
                preparedStatement.setDate(4, Date.valueOf(transactionDate));
                preparedStatement.executeUpdate();
            }

        } catch (Exception e) {
            JOptionPane.showMessageDialog(null, "❌ Error importing Excel: " + e.getMessage(), "Error", JOptionPane.ERROR_MESSAGE);
            success = false;
        }

        return success;
    }

    private static boolean isDuplicate(Connection connection, String productName, String partnerName, LocalDate transactionDate, int quantity) {
        try {
            String checkSql = "SELECT quantity FROM transaction_history WHERE product_name = ? AND partner_name = ? AND transaction_date = ?";
            PreparedStatement checkStmt = connection.prepareStatement(checkSql);
            checkStmt.setString(1, productName);
            checkStmt.setString(2, partnerName);
            checkStmt.setDate(3, Date.valueOf(transactionDate));
            ResultSet rs = checkStmt.executeQuery();

            if (rs.next()) {
                int existingQuantity = rs.getInt("quantity");
                return existingQuantity == quantity;
            }
        } catch (Exception e) {
            System.out.println("❌ Error checking duplicates: " + e.getMessage());
        }
        return false;
    }

    private static void updateRecord(Connection connection, String productName, String partnerName, int newQuantity, LocalDate transactionDate) {
        try {
            String checkSql = "SELECT product_name, partner_name, quantity, transaction_date FROM transaction_history WHERE product_name = ? AND partner_name = ? AND transaction_date = ?";
            PreparedStatement checkStmt = connection.prepareStatement(checkSql);
            checkStmt.setString(1, productName);
            checkStmt.setString(2, partnerName);
            checkStmt.setDate(3, Date.valueOf(transactionDate));
            ResultSet rs = checkStmt.executeQuery();

            if (rs.next()) {
                String existingProduct = rs.getString("product_name");
                String existingPartner = rs.getString("partner_name");
                int existingQuantity = rs.getInt("quantity");
                LocalDate existingDate = rs.getDate("transaction_date").toLocalDate();

                if (!existingProduct.equals(productName) || !existingPartner.equals(partnerName) || existingQuantity != newQuantity || !existingDate.equals(transactionDate)) {
                    String updateSql = "UPDATE transaction_history SET product_name = ?, partner_name = ?, quantity = ?, transaction_date = ? WHERE product_name = ? AND partner_name = ? AND transaction_date = ?";
                    PreparedStatement updateStmt = connection.prepareStatement(updateSql);
                    updateStmt.setString(1, productName);
                    updateStmt.setString(2, partnerName);
                    updateStmt.setInt(3, newQuantity);
                    updateStmt.setDate(4, Date.valueOf(transactionDate));
                    updateStmt.setString(5, existingProduct);
                    updateStmt.setString(6, existingPartner);
                    updateStmt.setDate(7, Date.valueOf(existingDate));
                    updateStmt.executeUpdate();

                    System.out.println("✅ Updated: " + productName + " (" + partnerName + ") → " + newQuantity + " on " + transactionDate);
                } else {
                    System.out.println("⚠️ No changes: " + productName + " (" + partnerName + ")");
                }
            }
        } catch (Exception e) {
            System.out.println("❌ Error updating record: " + e.getMessage());
        }
    }

    private static String getCellValue(Cell cell) {
        if (cell == null) return "";

        switch (cell.getCellType()) {
            case STRING:
                return cell.getStringCellValue().trim();
            case NUMERIC:
                if (DateUtil.isCellDateFormatted(cell)) {
                    return cell.getLocalDateTimeCellValue().toLocalDate().toString();
                } else {
                    return String.valueOf((int) cell.getNumericCellValue());
                }
            case BOOLEAN:
                return String.valueOf(cell.getBooleanCellValue());
            case FORMULA:
                try {
                    return cell.getStringCellValue();
                } catch (Exception e) {
                    return String.valueOf(cell.getNumericCellValue());
                }
            case BLANK:
                return "";
            default:
                return "";
        }
    }
}
