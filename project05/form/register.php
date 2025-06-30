<?php
// Включение вывода ошибок для отладки (уберите в продакшене)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login']);
    $pass = $_POST['pass'];
    $agreement = isset($_POST['agreement']);

    // Валидация данных
    if (!$agreement) {
        die("Вы должны согласиться с пользовательским соглашением.");
    }

    if (!preg_match('/^[a-zA-Z0-9]{2,32}$/', $login)) {
        die("Имя пользователя должно содержать только латинские буквы и цифры (2-32 символа).");
    }

    if (!preg_match('/^(?=.*[A-Z])(?=.*\d)(?=.*[^a-zA-Z\d]).{4,16}$/', $pass)) {
        die("Пароль должен содержать 4-16 символов, минимум одну заглавную букву, цифру и спецсимвол.");
    }

    // Проверка существующего пользователя
    $stmt = $conn->prepare("SELECT id FROM users WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("Пользователь с таким именем уже существует.");
    }
    $stmt->close();

    // Регистрация нового пользователя
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO users (login, pass) VALUES (?, ?)");
    $stmt->bind_param("ss", $login, $hashed_pass);

    if ($stmt->execute()) {
        // Успешная регистрация - перенаправляем
        $stmt->close();
        $conn->close();
        header("Location: login.php"); // Перенаправление на страницу входа
        exit();
    } else {
        die("Ошибка регистрации: " . $stmt->error);
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
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
        <h2>Регистрация</h2>

        <label for="login">Имя пользователя:</label>
        <input type="text" id="login" name="login" required>

        <label for="pass">Пароль:</label>
        <div style="position: relative;">
            <input type="password" id="pass" name="pass" required>
            <img id="eye-icon" src="eye-closed-icon.png" alt="Toggle Password" onclick="togglePassword()" 
                 style="position: absolute; right: 10px; top: 10px; cursor: pointer; width: 20px; height: 20px;">
        </div>

        <label for="agreement">
            <input type="checkbox" name="agreement" required> Я согласен с пользовательским соглашением
        </label>

        <button type="submit">Зарегистрироваться</button>

        <p>Уже есть аккаунт? <a href="login.php">Войти</a></p> <!-- Кнопка для перехода на страницу входа -->
    </form>
</body>
</html>
