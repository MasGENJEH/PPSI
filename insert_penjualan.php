<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idPelanggan = $_POST["id_pelanggan"];
    $idKasir = $_POST["idKasir"];
    $totalHarga = $_POST["totalHarga"];

    $sql = "INSERT INTO penjualan (id_pelanggan, id_kasir, tanggal_penjualan, totalHarga) VALUES ('$idPelanggan', $idKasir, CURRENT_TIMESTAMP() , '$totalHarga')";

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