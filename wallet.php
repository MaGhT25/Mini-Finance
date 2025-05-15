<?php
require_once '_inc/database.php';
require_once '_inc/Transaction.php';

$database = new Database();
$pdo = $database->connect();

$transaction = new Transaction($pdo);
$transactions = $transaction->getAllTransactions();
$currentBalance = $transaction->calculateRunningBalance();

include('partials/header.php');
?>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
            <div class="position-sticky py-4 px-3 sidebar-sticky">
                <ul class="nav flex-column h-100">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">
                            <i class="bi-house-fill me-2"></i>
                            Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="wallet.php">
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
                            <i class="bi-question-circle me-2"></i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item featured-box mt-lg-5 mt-4 mb-4">
                        <img src="images/credit-card.png" class="img-fluid" alt="Credit Card">
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
                <h1 class="h2 mb-0">Wallet</h1>
            </div>

            <div class="row my-4">
                <div class="col-lg-12 col-12">
                    <div class="custom-block bg-white">
                        <h5 class="mb-4">Account Activities</h5>
                        <div class="table-responsive">
                            <table class="account-table table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($transactions)): 
                                        $runningBalance = $currentBalance;
                                        foreach (array_reverse($transactions) as $tx): 
                                            $runningBalance = $tx['type'] === 'income' 
                                                ? $runningBalance - $tx['amount'] 
                                                : $runningBalance + $tx['amount'];
                                    ?>
                                        <tr>
                                            <td><?= date("F j, Y", strtotime($tx['created_at'])) ?></td>
                                            <td><?= date("H:i A", strtotime($tx['created_at'])) ?></td>
                                            <td><?= htmlspecialchars($tx['description']) ?></td>
                                            <td><?= htmlspecialchars($tx['type']) ?></td>
                                            <td class="<?= $tx['type'] === 'income' ? 'text-success' : 'text-danger' ?>">
                                                <?= $tx['type'] === 'income' ? '+' : '-' ?>
                                                $<?= number_format($tx['amount'], 2) ?>
                                            </td>
                                            <td>$<?= number_format($runningBalance, 2) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6" class="text-center">No transactions found.</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-12">
                    <div class="custom-block custom-block-balance">
                        <small>Your Balance</small>
                        <h2 class="mt-2 mb-3">$<?= number_format($currentBalance, 2) ?></h2>
                        <div class="custom-block-numbers d-flex align-items-center">
                            <span>****</span><span>****</span><span>****</span><p>2560</p>
                        </div>
                        <div class="d-flex">
                            <div><small>Valid Date</small><p>12/2028</p></div>
                            <div class="ms-auto"><small>Card Holder</small><p>Maksym</p></div>
                        </div>
                    </div>
                    <div class="custom-block custom-block-bottom d-flex flex-wrap">
                        <div class="custom-block-bottom-item">
                            <a href="#" class="d-flex flex-column"><i class="custom-block-icon bi-wallet"></i><small>Top up</small></a>
                        </div>
                        <div class="custom-block-bottom-item">
                            <a href="#" class="d-flex flex-column"><i class="custom-block-icon bi-upc-scan"></i><small>Scan & Pay</small></a>
                        </div>
                        <div class="custom-block-bottom-item">
                            <a href="#" class="d-flex flex-column"><i class="custom-block-icon bi-send"></i><small>Send</small></a>
                        </div>
                        <div class="custom-block-bottom-item">
                            <a href="#" class="d-flex flex-column"><i class="custom-block-icon bi-arrow-down"></i><small>Request</small></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12">
                    <div class="custom-block custom-block-transations">
                        <h5 class="mb-4">Recent Transactions</h5>
                        <?php if (!empty($transactions)): ?>
                            <?php foreach (array_slice($transactions, 0, 3) as $tx): ?>
                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="images/profile/senior-man-white-sweater-eyeglasses.jpg" 
                                             class="profile-image img-fluid me-2" 
                                             alt="<?= htmlspecialchars($tx['description']) ?>">
                                        <div>
                                            <p>
                                                <a href="transaction-detail.php?id=<?= $tx['id'] ?>">
                                                    <?= htmlspecialchars($tx['description']) ?>
                                                </a>
                                            </p>
                                            <small class="text-muted">
                                                <?= htmlspecialchars($tx['type']) ?>
                                            </small>
                                        </div>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <small><?= date("d/m/Y", strtotime($tx['created_at'])) ?></small>
                                        <strong class="d-block <?= $tx['type'] === 'expense' ? 'text-danger' : 'text-success' ?>">
                                            <span class="me-1"><?= $tx['type'] === 'expense' ? '-' : '+' ?></span>
                                            $<?= number_format(abs($tx['amount']), 2) ?>
                                        </strong>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No recent transactions.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php include('partials/footer.php'); ?>