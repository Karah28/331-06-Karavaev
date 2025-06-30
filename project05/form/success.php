<?php
session_start(); // Важный вызов в начале
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Успешный вход</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <h2>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['login']); ?>!</h2>
        <p>Вы успешно вошли в систему.</p>
    </form>
</body>
</html>
