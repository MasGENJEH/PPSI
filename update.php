<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM barang WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No user found";
        exit();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $namaBarang = $_POST['nama_barang'];
    $jenisBarang = $_POST['jenis_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $sql = "UPDATE barang SET nama_barang='$namaBarang', jenis_barang='$jenisBarang', harga=$harga, stok=$stok WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Barang Berhasil di update!');
                window.location.href='index.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    exit();
} else {
    echo "Invalid request";
    exit();
}
?>

<?php include 'template/header.php' ; ?>

<body>
    <?php include 'template/navbar.php' ; ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h2>Edit Barang</h2>
                <form action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                    <label for="nama_barang" class="form-label">Nama Barang:</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                        value="<?php echo $row['nama_barang']; ?>" required><br>

                    <label for="jenis_barang" class="form-label">Jenis Barang:</label>
                    <input type="text" class="form-control" id="jenis_barang" name="jenis_barang"
                        value="<?php echo $row['jenis_barang']; ?>" required><br>

                    <label for="harga" class="form-label">Harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga"
                        value="<?php echo $row['harga']; ?>" required><br>

                    <label for="stok" class="form-label">stok:</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $row['stok']; ?>"
                        required><br>

                    <input type="submit" class="btn btn-primary" value="Update User">
                </form>
            </div>
        </div>
    </div>

</body>

</html>