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
                                <a class="nav-link active" href="profile.php">
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
                        <h1 class="h2 mb-0">Profile</h1>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-7 col-12">
                            <div class="custom-block custom-block-profile">
                                <div class="row">
                                    <div class="col-lg-12 col-12 mb-3">
                                        <h6>General</h6>
                                    </div>

                                    <div class="col-lg-3 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block-profile-image-wrap">
                                            <img src="images/medium-shot-happy-man-smiling.jpg" class="custom-block-profile-image img-fluid" alt="">

                                            <a href="setting.php" class="bi-pencil-square custom-block-edit-icon"></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-9 col-12">
                                        <p class="d-flex flex-wrap mb-2">
                                            <strong>Name:</strong>

                                            <span>Maksym Dohomaz</span>
                                        </p>

                                        <p class="d-flex flex-wrap mb-2">
                                            <strong>Email:</strong>
                                            
                                            <a href="#">
                                                maksymbg07@site.com
                                            </a>
                                        </p>

                                        <p class="d-flex flex-wrap mb-2">
                                            <strong>Phone:</strong>

                                            <a href="#">
                                                (60) 12 345 6789
                                            </a>
                                        </p>

                                        <p class="d-flex flex-wrap mb-2">
                                            <strong>Birthday:</strong>

                                            <span>March 8, 2007</span>
                                        </p>

                                        <p class="d-flex flex-wrap">
                                            <strong>Address:</strong>

                                            <span>551 Swanston Street, Melbourne</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block custom-block-profile bg-white">
                                <h6 class="mb-4">Card Information</h6>

                                <p class="d-flex flex-wrap mb-2">
                                    <strong>User ID:</strong>

                                    <span>012 395 8647</span>
                                </p>

                                <p class="d-flex flex-wrap mb-2">
                                    <strong>Type:</strong>

                                    <span>Personal</span>
                                </p>

                                <p class="d-flex flex-wrap mb-2">
                                    <strong>Created:</strong>

                                    <span>July 19, 2020</span>
                                </p>

                                <p class="d-flex flex-wrap mb-2">
                                    <strong>Valid Date:</strong>

                                    <span>July 18, 2032</span>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="custom-block custom-block-contact">
                                <h6 class="mb-4">Still can’t find what you looking for?</h6>

                                <p>
                                    <strong>Call us:</strong>
                                    <a href="tel: 305-240-9671" class="ms-2">
                                        (60) 
                                        305-240-9671
                                    </a>
                                </p>

                                <a href="#" class="btn custom-btn custom-btn-bg-white mt-3">
                                    Chat with us
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php
                    ('partials/footer.php');
                    ?>