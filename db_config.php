<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "project2024";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>
