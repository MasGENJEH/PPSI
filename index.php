<?php
include 'config.php';
?>

<?php include 'template/header.php'; ?>

<body>

    <?php include 'template/navbar.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="mb-4" style="text-align:center;">Halaman Login</h1>
                <div class="container">
                    <form action="proses.php" method="POST">


                        <label for="username" class="form-label">Username</label>
                        <input class="form-control" type="text" id="username" name="username"
                            placeholder="Masukkan Username" required><br>

                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" name="password"
                            placeholder="Masukkan Password" required><br>

                        <button class="btn btn-primary">Login</button>
                </div>
</body>

</html>

<?php
$conn->close();
?>