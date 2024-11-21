<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaBarang = $_POST["nama_barang"];
    $jenisBarang = $_POST["jenis_barang"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    $sql = "INSERT INTO barang (id, nama_barang, jenis_barang, harga, stok) VALUES (UUID(),'$namaBarang', '$jenisBarang', $harga, $stok)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Barang Berhasil di Masukan!');
                window.location.href='index.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>