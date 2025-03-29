<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? ''; 
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        $_SESSION['message'] = "Welcome, " . htmlspecialchars($name) . "!";
        header("Location: ../index.php"); 
        exit();
    } else {
        $_SESSION['error'] = "Enter email and password";
        header("Location: ../index.php");
        exit();
    }
}

?>
