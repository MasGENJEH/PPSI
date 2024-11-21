<?php include 'template/header.php'; ?>

<body>
    <?php include 'template/navbar.php'; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="mb-4" style="text-align:center;">Admin</h1>
                <div class="container">
                    <form action="proses.php" method="POST">
                        <a href="buat_produk.php" class="btn btn-primary">Buat Produk</a><br>
                        <a href="buat_user.php" class="btn btn-primary">Buat User Baru</a><br>
                        <a href="laporan_inventori.php" class="btn btn-primary">Laporan Inventori</a><br>

                        <a href="laporan_penjualan.php" class="btn btn-primary">Laporan Penjualan</a><br>
                </div>
</body>

</html>