<?php
ob_start();
session_start();
include('partials/header.php');
require '_inc/database.php';
require '_inc/Transaction.php';

$id = $_GET['id'] ?? null;

if (!$id) {
    $_SESSION['error'] = "Invalid transaction ID.";
    header("Location: index.php");
    exit();
}

$transaction = new Transaction($pdo);
$currentTransaction = $transaction->getTransactionById($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    if ($transaction->updateTransaction($id, $type, $description, $amount)) {
        $_SESSION['message'] = "Transaction updated successfully!";
        ob_clean();
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to update transaction.";
    }
}
ob_end_flush();
?>

<div class="container mt-5">
    <h1>Edit Transaction</h1>
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
</div>

<?php include('partials/footer.php'); ?>