<?php include 'template/header.php' ; ?>

<body>
    <?php include 'template/navbar.php' ; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Masukan Pelanggan Baru</h2>
                <form action="insert_pelanggan.php" method="post">
                    <label for="nama" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama"
                        required><br>

                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat"
                        required><br>

                    <label for="telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon"
                        placeholder="Masukan Nomor Telepon" required><br>

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