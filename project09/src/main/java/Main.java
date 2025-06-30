package module_02_karavaev.src;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class Main extends Application {
    private static final Logger LOGGER = Logger.getLogger(Main.class.getName());

    @Override
    public void start(Stage primaryStage) {
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("/fxml/main.fxml"));
            Parent root = loader.load();
            
            Scene scene = new Scene(root);
            scene.getStylesheets().add(getClass().getResource("/styles/main.css").toExternalForm());
            
            primaryStage.setTitle("Система управления партнерами");
            primaryStage.setScene(scene);
            primaryStage.show();
            
            LOGGER.info("Application started successfully");
        } catch (IOException e) {
            LOGGER.log(Level.SEVERE, "Error starting application", e);
        }
    }

    public static void main(String[] args) {
        launch(args);
    }
}

