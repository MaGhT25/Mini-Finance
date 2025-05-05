<?php
$host = 'localhost';
$db_name = 'mini_finance'; // Замените на имя вашей базы данных
$username = 'root';        // Замените на имя пользователя MySQL
$password = '';            // Замените на пароль (если используется XAMPP, оставьте пустым)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>