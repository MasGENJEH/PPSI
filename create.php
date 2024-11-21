<?php include 'template/header.php' ; ?>

<body>
    <?php include 'template/navbar.php' ; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>List Barang Baru</h2>
                <form action="insert.php" method="post">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                        placeholder="Masukan nama" required><br>

                    <label for="jenis_barang" class="form-label">Jenis Barang</label>
                    <input type="text" class="form-control" id="jenis_barang" name="jenis_barang"
                        placeholder="Masukan Jenis Barang" required><br>

                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan Harga"
                        required><br>

                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukan Stok"
                        required><br>

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