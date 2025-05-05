<?php
ob_start();
session_start();
include('partials/header.php');
require '_inc/database.php';
require '_inc/Transaction.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $type = $_POST['type'];
    $description = $_POST['description'];
    $amount = $_POST['amount'];

    $transaction = new Transaction($pdo);
    if ($transaction->addTransaction($type, $description, $amount)) {
        $_SESSION['message'] = "Transaction added successfully!";

        ob_clean();
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Failed to add transaction.";
    }
}
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