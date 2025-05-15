<?php
ob_start();
session_start();

require 'partials/header.php';
require '_inc/database.php';
require '_inc/Transaction.php';

class TransactionEdit {
    private PDO $pdo;
    private Transaction $transaction;
    public ?array $currentTransaction = null;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
        $this->transaction = new Transaction($pdo);
    }

    public function handleRequest(?int $id): void {
        if (!$id) {
            $_SESSION['error'] = "Invalid transaction ID.";
            $this->redirect("index.php");
        }

        $this->currentTransaction = $this->transaction->getTransactionById($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $type = $_POST['type'] ?? '';
            $description = $_POST['description'] ?? '';
            $amount = $_POST['amount'] ?? '';

            if ($this->transaction->updateTransaction($id, $type, $description, $amount)) {
                $_SESSION['message'] = "Transaction updated successfully!";
                $this->redirect("index.php", true);
            } else {
                $_SESSION['error'] = "Failed to update transaction.";
            }
        }
    }

    private function redirect(string $url, bool $cleanOutput = false): void {
        if ($cleanOutput) {
            ob_clean();
        }
        header("Location: $url");
        exit();
    }
}

$id = isset($_GET['id']) && is_numeric($_GET['id']) ? (int)$_GET['id'] : null;
$controller = new TransactionEdit($pdo);
$controller->handleRequest($id);

$currentTransaction = $controller->currentTransaction;

ob_end_flush();
?>

<div class="container mt-5">
    <h1>Edit Transaction</h1>

    <?php if ($currentTransaction): ?>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?= htmlspecialchars($currentTransaction['id']) ?>">
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <select class="form-select" name="type" required>
                    <option value="income" <?= ($currentTransaction['type'] === 'income') ? 'selected' : '' ?>>Income</option>
                    <option value="expense" <?= ($currentTransaction['type'] === 'expense') ? 'selected' : '' ?>>Expense</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="<?= htmlspecialchars($currentTransaction['description']) ?>" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" value="<?= htmlspecialchars($currentTransaction['amount']) ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Update Transaction</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    <?php else: ?>
        <div class="alert alert-danger">Transaction not found.</div>
    <?php endif; ?>
</div>

<?php include('partials/footer.php'); ?>
