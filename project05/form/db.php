<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karavaev_1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
// Добавьте эту строку для отображения ошибок
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);