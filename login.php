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

                        <input class="form-control" type="email" id="email" name="email" placeholder="Masukkan Email"
                            required><br><br>

                        <input class="form-control" type="password" id="password" name="password"
                            placeholder="Masukkan Password" required><br><br>

                        <a href="#">Buat Akun</a><br>

                        <button class="btn btn-primary">Login</button>

                </div>
</body>

</html>

<?php
$conn->close();
?>