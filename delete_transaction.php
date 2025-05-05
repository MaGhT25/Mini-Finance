<?php
session_start();
require '_inc/database.php';
require '_inc/Transaction.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    $_SESSION['error'] = "Invalid transaction ID.";
    header("Location: index.php");
    exit();
}

$transaction = new Transaction($pdo);
if ($transaction->deleteTransaction($id)) {
    $_SESSION['message'] = "Transaction deleted successfully!";
} else {
    $_SESSION['error'] = "Failed to delete transaction.";
}

header("Location: index.php");
exit();
?>