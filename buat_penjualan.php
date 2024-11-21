<?php include 'template/header.php' ; ?>

<body>
    <?php include 'template/navbar.php' ; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Masukan Penjualan Baru</h2>
                <form action="insert_penjualan.php" method="post">
                    <label for="id_pelanggan" class="form-label">Id Pelanggan</label>
                    <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan"
                        placeholder="Masukan Id Pelanggan" required><br>

                    <label for="id_kasir" class="form-label">Id Kasir</label>
                    <input type="text" class="form-control" id="id_kasir" name="id_kasir" placeholder="Masukan Id Kasir"
                        required><br>

                    <label for="total_harga" class="form-label">Total Harga</label>
                    <input type="number" class="form-control" id="total_harga" name="total_harga"
                        placeholder="Masukan Total Harga" required><br>

                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>