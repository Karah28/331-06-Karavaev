<?php
// Включение вывода ошибок для отладки (уберите в продакшене)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login']);
    $pass = $_POST['pass'];
    $remember = isset($_POST['remember']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($pass, $user['pass'])) {
            session_start();
            $_SESSION['login'] = $user['login'];
            if ($remember) {
                setcookie("login", $user['login'], time() + 3600 * 24 * 30, "/");
            }
            header("Location: success.php"); exit;
        } else {
            echo "Неверный пароль.";
        }
    } else {
        echo "Пользователь не найден.";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
    <link rel="stylesheet" href="style.css">
    <script>
        // Функция для переключения видимости пароля
        function togglePassword() {
            var passField = document.getElementById("pass");
            var eyeIcon = document.getElementById("eye-icon");

            // Меняем тип поля с "password" на "text"
            if (passField.type === "password") {
                passField.type = "text";
                eyeIcon.src = "eye-open-icon.png";  // иконка открытого глаза
            } else {
                passField.type = "password";
                eyeIcon.src = "eye-closed-icon.png";  // иконка закрытого глаза
            }
        }
    </script>
</head>
<body>
    <form method="POST">
        <h2>Вход</h2>

        <label for="login">Имя пользователя:</label>
        <input type="text" id="login" name="login" required>

        <label for="pass">Пароль:</label>
        <div style="position: relative;">
            <input type="password" id="pass" name="pass" required>
            <img id="eye-icon" src="eye-closed-icon.png" alt="Toggle Password" onclick="togglePassword()" 
                 style="position: absolute; right: 10px; top: 10px; cursor: pointer; width: 20px; height: 20px;">
        </div>

        <label for="remember">
            <input type="checkbox" name="remember"> Запомнить меня
        </label>

        <button type="submit">Войти</button>

        <p>Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p> <!-- Кнопка для перехода на страницу регистрации -->
    </form>
</body>
</html>
