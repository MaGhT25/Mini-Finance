<?php
session_start();

require '_inc/database.php';
require '_inc/Transaction.php';

class TransactionDelete {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function delete(int $id): void {
        $transaction = new Transaction($this->pdo);

        if ($transaction->deleteTransaction($id)) {
            $_SESSION['message'] = "Transaction deleted successfully!";
        } else {
            $_SESSION['error'] = "Failed to delete transaction.";
        }

        $this->redirect("index.php");
    }

    private function redirect(string $url): void {
        header("Location: $url");
        exit();
    }
}

$id = $_GET['id'] ?? null;

if (!$id || !is_numeric($id)) {
    $_SESSION['error'] = "Invalid transaction ID.";
    header("Location: index.php");
    exit();
}

$controller = new TransactionDelete($pdo);
$controller->delete((int)$id);
?>
