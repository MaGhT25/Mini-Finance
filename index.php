<?php
session_start();
include('partials/header.php');

require '_inc/database.php';
require '_inc/Transaction.php';
require '_inc/TransactionTable.php';

$transaction = new Transaction($pdo);
$transactions = $transaction->getAllTransactions();
$currentBalance = $transaction->calculateRunningBalance();

$table = new TransactionTable($transactions);

if (isset($_SESSION['message'])) {
    echo '<div style="
        position: fixed;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1050;
        width: 80%;
        max-width: 500px;
        padding: 15px;
        border-radius: 5px;
        text-align: center;
        font-size: 16px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    ">'.htmlspecialchars($_SESSION['message']).'</div>';
    unset($_SESSION['message']);
}

if (isset($_SESSION['error'])) {
    echo '<div style="
        position: fixed;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1050;
        width: 80%;
        max-width: 500px;
        padding: 15px;
        border-radius: 5px;
        text-align: center;
        font-size: 16px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    ">'.htmlspecialchars($_SESSION['error']).'</div>';
    unset($_SESSION['error']);
}
?>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
            <div class="position-sticky py-4 px-3 sidebar-sticky">
                <ul class="nav flex-column h-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <i class="bi-house-fill me-2"></i>
                            Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wallet.php">
                            <i class="bi-wallet me-2"></i>
                            My Wallet
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">
                            <i class="bi-person me-2"></i>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="setting.php">
                            <i class="bi-gear me-2"></i>
                            Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help-center.php">
                            <i class="bi-question-circle me-2"></i>
                            Help Center
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <i class="bi-person-circle me-2"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item featured-box mt-lg-5 mt-4 mb-4">
                        <img src="images/credit-card.png" class="img-fluid" alt="">
                        <a class="btn custom-btn" href="#">Upgrade</a>
                    </li>
                    <li class="nav-item border-top mt-auto pt-2">
                        <a class="nav-link" href="login.php">
                            <i class="bi-box-arrow-left me-2"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
            <div class="title-group mb-3">
                <h1 class="h2 mb-0">Overview</h1>
                <small class="text-muted">Hello Maksym, welcome back!</small>
            </div>

            <div class="row my-4">
                <div class="col-lg-7 col-12">
                    <div class="custom-block custom-block-balance">
                        <small>Your Balance</small>
                        <h2 class="mt-2 mb-3">$<?= number_format($currentBalance, 2) ?></h2>
                        <div class="custom-block-numbers d-flex align-items-center">
                            <span>****</span>
                            <span>****</span>
                            <span>****</span>
                            <p>2560</p>
                        </div>
                        <div class="d-flex">
                            <div>
                                <small>Valid Date</small>
                                <p>12/2028</p>
                            </div>
                            <div class="ms-auto">
                                <small>Card Holder</small>
                                <p>Maksym</p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-block custom-block-exchange">
                        <h5 class="mb-4">Exchange Rate</h5>
                        <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                            <div class="d-flex align-items-center">
                                <img src="images/flag/united-states.png" class="exchange-image img-fluid" alt="">
                                <div>
                                    <p>USD</p>
                                    <h6>1 US Dollar</h6>
                                </div>
                            </div>
                            <div class="ms-auto me-4">
                                <small>Sell</small>
                                <h6>1.0931</h6>
                            </div>
                            <div>
                                <small>Buy</small>
                                <h6>1.0821</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                        <div class="custom-block-profile-image-wrap mb-4">
                            <img src="images/medium-shot-happy-man-smiling.jpg" class="custom-block-profile-image img-fluid" alt="">
                            <a href="setting.php" class="bi-pencil-square custom-block-edit-icon"></a>
                        </div>
                        <p class="d-flex flex-wrap mb-2">
                            <strong>Name:</strong>
                            <span>Maksym Bohomaz</span>
                        </p>
                        <p class="d-flex flex-wrap mb-2">
                            <strong>Email:</strong>
                            <a href="#">
                                maksymbg07@site.com
                            </a>
                        </p>
                        <p class="d-flex flex-wrap mb-0">
                            <strong>Phone:</strong>
                            <a href="#">
                                (60) 12 345 6789
                            </a>
                        </p>
                    </div>

                    <div class="custom-block custom-block-transations">
                        <h5 class="mb-4">Recent Transactions</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?= $table->render(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="border-top pt-4 mt-4 text-center">
                            <a class="btn custom-btn" href="add_transaction.php">
                                Add New Transaction
                                <i class="bi-plus-circle-fill ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="js/index.js"></script>
<?php include('partials/footer.php'); ?>