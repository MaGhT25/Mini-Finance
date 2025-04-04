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
                                                <th scope="col">Date</th>

                                                <th scope="col">Time</th>

                                                <th scope="col">Description</th>

                                                <th scope="col">Payment Type</th>

                                                <th scope="col">Amount</th>

                                                <th scope="col">Balance</th>

                                                <th scope="col">Status</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td scope="row">July 5, 2023</td>

                                                <td scope="row">10:00 PM</td>

                                                <td scope="row">Shopping</td>

                                                <td scope="row">C2C Transfer</td>

                                                <td class="text-danger" scope="row">
                                                    <span class="me-1">-</span>
                                                    $100.00
                                                </td>

                                                <td scope="row">$5,500.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-danger">
                                                        Pending
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">July 2, 2023</td>

                                                <td scope="row">10:42 AM</td>

                                                <td scope="row">Food Delivery</td>

                                                <td scope="row">Mobile Reload</td>

                                                <td class="text-success" scope="row">
                                                    <span class="me-1">+</span>
                                                    $250
                                                </td>

                                                <td scope="row">$5,600.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">June 28, 2023</td>

                                                <td scope="row">8:20 PM</td>

                                                <td scope="row">Billing</td>

                                                <td scope="row">Goverment</td>

                                                <td class="text-success" scope="row">
                                                <span class="me-2">+</span>$50</td>

                                                <td scope="row">$5,350.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">June 24, 2023</td>

                                                <td scope="row">10:48 PM</td>

                                                <td scope="row">Shopee</td>

                                                <td scope="row">QR Code</td>

                                                <td class="text-danger" scope="row">
                                                <span class="me-2">-</span>$380</td>

                                                <td scope="row">$5,300.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-dark">
                                                        Cancelled
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">June 12, 2023</td>

                                                <td scope="row">12:30 AM</td>

                                                <td scope="row">Food Delivery</td>

                                                <td scope="row">Mobile Reload</td>

                                                <td class="text-success" scope="row">
                                                <span class="me-2">+</span>$250</td>

                                                <td scope="row">$4,920.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">May 31, 2023</td>

                                                <td scope="row">2:40 PM</td>

                                                <td scope="row">Food Delivery</td>

                                                <td scope="row">Mobile Reload</td>

                                                <td class="text-success" scope="row">
                                                <span class="me-2">+</span>$50</td>

                                                <td scope="row">$4,920.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">May 22, 2023</td>

                                                <td scope="row">8:50 AM</td>

                                                <td scope="row">Food Delivery</td>

                                                <td scope="row">Mobile Reload</td>

                                                <td class="text-success" scope="row">
                                                <span class="me-2">+</span>$50</td>

                                                <td scope="row">$4,920.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">May 20, 2023</td>

                                                <td scope="row">6:45 PM</td>

                                                <td scope="row">Food Delivery</td>

                                                <td scope="row">Mobile Reload</td>

                                                <td class="text-danger" scope="row">
                                                <span class="me-2">-</span>$500</td>

                                                <td scope="row">$4,920.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-danger">
                                                        Pending
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">April 28, 2023</td>

                                                <td scope="row">11:20 AM</td>

                                                <td scope="row">Food Delivery</td>

                                                <td scope="row">Mobile Reload</td>

                                                <td class="text-success" scope="row">
                                                <span class="me-2">+</span>$856</td>

                                                <td scope="row">$4,920.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-success">
                                                        Success
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td scope="row">April 16, 2023</td>

                                                <td scope="row">11:00 PM</td>

                                                <td scope="row">Food Delivery</td>

                                                <td scope="row">Mobile Reload</td>

                                                <td class="text-success" scope="row">
                                                <span class="me-2">+</span>$50</td>

                                                <td scope="row">$4,920.00</td>

                                                <td scope="row">
                                                    <span class="badge text-bg-danger">
                                                        Pending
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-center mb-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">Prev</span>
                                                </a>
                                            </li>

                                            <li class="page-item active" aria-current="page">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>

                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                            </div>
                        </div>

                        <div class="col-lg-7 col-12">
                            <div class="custom-block custom-block-balance">
                                <small>Your Balance</small>

                                <h2 class="mt-2 mb-3">$254,800</h2>

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
                                        <p>Thomas</p>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-block custom-block-bottom d-flex flex-wrap">
                                <div class="custom-block-bottom-item">
                                    <a href="#" class="d-flex flex-column">
                                        <i class="custom-block-icon bi-wallet"></i>

                                        <small>Top up</small>
                                    </a>
                                </div>

                                <div class="custom-block-bottom-item">
                                    <a href="#" class="d-flex flex-column">
                                        <i class="custom-block-icon bi-upc-scan"></i>

                                        <small>Scan & Pay</small>
                                    </a>
                                </div>

                                <div class="custom-block-bottom-item">
                                    <a href="#" class="d-flex flex-column">
                                        <i class="custom-block-icon bi-send"></i>

                                        <small>Send</small>
                                    </a>
                                </div>

                                <div class="custom-block-bottom-item">
                                    <a href="#" class="d-flex flex-column">
                                        <i class="custom-block-icon bi-arrow-down"></i>

                                        <small>Request</small>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="custom-block custom-block-transations">
                                <h5 class="mb-4">Recent Transations</h5>

                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="images/profile/senior-man-white-sweater-eyeglasses.jpg" class="profile-image img-fluid" alt="">

                                        <div>
                                            <p>
                                                <a href="transation-detail.php">Daniel Jones</a>
                                            </p>

                                            <small class="text-muted">C2C Transfer</small>
                                        </div>
                                    </div>

                                    <div class="ms-auto">
                                        <small>05/12/2023</small>
                                        <strong class="d-block text-danger"><span class="me-1">-</span> $250</strong>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <div class="d-flex align-items-center">
                                        <img src="images/profile/young-beautiful-woman-pink-warm-sweater.jpg" class="profile-image img-fluid" alt="">

                                        <div>
                                            <p>
                                                <a href="transation-detail.php">Public Bank</a>
                                            </p>

                                            <small class="text-muted">Mobile Reload</small>
                                        </div>
                                    </div>

                                    <div class="ms-auto">
                                        <small>22/8/2023</small>
                                        <strong class="d-block text-success"><span class="me-1">+</span> $280</strong>
                                    </div>
                                </div>

                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="images/profile/young-woman-with-round-glasses-yellow-sweater.jpg" class="profile-image img-fluid" alt="">

                                        <div>
                                            <p><a href="transation-detail.php">Store</a></p>

                                            <small class="text-muted">Payment Received</small>
                                        </div>
                                    </div>

                                    <div class="ms-auto">
                                        <small>22/8/2023</small>
                                        <strong class="d-block text-success"><span class="me-1">+</span> $280</strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php
                    include('partials/footer.php');
                    ?>