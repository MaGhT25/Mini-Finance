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
                                <a class="nav-link active" href="help-center.php">
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
                        <h1 class="h2 mb-0">How can we help?</h1>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-7 col-12">
                            <div class="custom-block bg-white">
                                <form class="custom-form search-form" action="#" method="post" role="form">
                                    <div class="row">
                                        <div class="col-lg-12 mb-2">
                                            <h6>Search for the topics</h6>
                                        </div>

                                        <div class="col-lg-8 col-md-8 col-12">
                                            <input class="form-control mb-lg-0 mb-md-0" name="search" type="text" placeholder="Search" aria-label="Search">
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-12">
                                            <button type="submit" class="form-control">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="custom-block custom-block-faq">
                                <h5 class="mb-4">Frequently Asked Questions</h5>

                                <strong class="d-block mb-2">What is Mini Finance Template?</strong>

                                <p>Mini Finance Template includes total 6 HTML pages for your customizations. It is free of charge provided by Tooplate website.</p>
                                
                                <strong class="d-block mt-3 mb-2">What is Free HTML Template?</strong>

                                <p>Free HTML Template is a ready-made web page based on HTML CSS codes.</p>

                                <strong class="d-block mt-3 mb-2">What is the best code editor?</strong>

                                <p>Popular code editors are Dreamweaver, Notepad++, Visual Studio Code, Rapid CSS, Sublime Text and Atom to edit HTML CSS JS codes and put in your own web contents.</p>

                                 <strong class="d-block mt-3 mb-2">Are all templates free to download?</strong>

                                 <p>Yes, all CSS templates are 100% free to download and use for your websites. You can also use them for learning HTML, CSS, and JavaScripts.</p>
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
                    include('partials/footer.php');
                    ?>