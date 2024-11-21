<?php include 'template/header.php' ; ?>

<body>
    <?php include 'template/navbar.php' ; ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Masukan Produk Baru</h2>
                <form action="insert_user.php" method="post">
                    <label for="nama" class="form-label">Nama User</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama"
                        required><br>

                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username"
                        required><br>

                    <label for="role" class="form-label">Role User</label>
                    <select class="form-select" aria-label="Default select example" name="role">
                        <option selected>Pilih Role User</option>
                        <option value="admin">Admin</option>
                        <option value="manager">Manager</option>
                        <option value="kasir">Kasir</option>
                    </select><br>

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