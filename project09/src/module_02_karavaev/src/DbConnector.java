package module_02_karavaev.src;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DbConnector {
    private static final String URL = "jdbc:mysql://localhost:3306/partner_management_system?serverTimezone=UTC";
    private static final String USER = "admin";
    private static final String PASSWORD = "secure_pass_2024";

    public static Connection connect() {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            return DriverManager.getConnection(URL, USER, PASSWORD);
        } catch (ClassNotFoundException | SQLException e) {
            System.out.println("Ошибка подключения к БД: " + e.getMessage());
            return null;
        }
    }
}