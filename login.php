
        <?php
        session_start();
        ?>
    <?php
     include('partials/header.php');
    ?>
</head>
<body>
    <div class="container mt-5">
        <h2>Log in</h2>


        <form action="_inc/functions.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
            <a href="index.php" class="btn btn-secondary">Home</a>
        </form>
    </div>

    <?php
    include('partials/footer.php');
    ?>
