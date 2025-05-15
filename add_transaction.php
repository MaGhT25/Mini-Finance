<?php
ob_start();
session_start();

require 'partials/header.php';
require '_inc/database.php';
require '_inc/Transaction.php';

class TransactionADD {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function handleRequest(): void {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $type = $_POST['type'] ?? '';
            $description = $_POST['description'] ?? '';
            $amount = $_POST['amount'] ?? '';

            $transaction = new Transaction($this->pdo);

            if ($transaction->addTransaction($type, $description, $amount)) {
                $_SESSION['message'] = "Transaction added successfully!";
                $this->redirect("index.php");
            } else {
                $_SESSION['error'] = "Failed to add transaction.";
            }
        }
    }

    private function redirect(string $url): void {
        ob_clean();
        header("Location: $url");
        exit();
    }
}

$controller = new TransactionADD($pdo);
$controller->handleRequest();

ob_end_flush();
?>


<div class="container mt-5">
    <h1>Add New Transaction</h1>
    <form method="POST" action="">
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select" name="type" required>
                <option value="income">Income</option>
                <option value="expense">Expense</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Amount</label>
            <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Transaction</button>
    </form>
</div>

<?php include('partials/footer.php'); ?>