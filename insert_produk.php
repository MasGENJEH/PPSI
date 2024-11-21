<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaProduk = $_POST["nama_produk"];
    $harga = $_POST["harga"];
    $deskripsi = $_POST["deskripsi"];

    $sql = "INSERT INTO produk (nama_produk, harga, deskripsi) VALUES ('$namaProduk', $harga, '$deskripsi')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Produk Berhasil di Masukan!');
                window.location.href='admin.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>