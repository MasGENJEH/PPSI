<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM produk WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Barang Berhasil Dihapus!');
                window.location.href='admin.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>