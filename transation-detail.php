        <?php
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
                                    <i class="bi-question-circle me-2"></i>
                                    Login
                                </a>
                            </li>

                            <li class="nav-item featured-box mt-lg-5 mt-4 mb-4">
                                <img src="images/credit-card.png" class="img-fluid" alt="">

                                <a class="btn custom-btn" href="#">Upgrade</a>
                            </li>

                            <li class="nav-item border-top mt-auto pt-2">
                                <a class="nav-link" href="#">
                                    <i class="bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                    <div class="title-group mb-3">
                        <h1 class="h2 mb-0">Transations Detail</h1>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-12 col-12">
                            <div class="custom-block custom-block-transation-detail bg-white">
                                <div class="d-flex flex-wrap align-items-center border-bottom pb-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <img src="images/profile/young-woman-with-round-glasses-yellow-sweater.jpg" class="profile-image img-fluid" alt="">

                                        <div>
                                            <p>Store</p>

                                            <small class="text-muted">Payment Received</small>
                                        </div>
                                    </div>

                                    <div class="ms-auto">
                                        <small>22/8/2023</small>
                                        <strong class="d-block text-success"><span class="me-1">+</span> $280</strong>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="custom-block-transation-detail-item mt-4">
                                        <h6>Transation ID</h6>

                                        <p>283J3S0EL023</p>
                                    </div>

                                    <div class="custom-block-transation-detail-item mt-4 mx-auto px-4">
                                        <h6>Description</h6>

                                        <p>Shopee</p>
                                    </div>

                                    <div class="custom-block-transation-detail-item mt-4 ms-lg-auto px-lg-3 px-md-3">
                                        <h6>Payment Type</h6>

                                        <p>C2C Transfer</p>
                                    </div>

                                    <div class="custom-block-transation-detail-item mt-4 ms-auto me-auto">
                                        <h6>Amounts</h6>

                                        <p>$280</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <?php
                    include('partials/footer.php');
                    ?>