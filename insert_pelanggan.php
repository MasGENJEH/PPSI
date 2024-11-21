<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];

    $sql = "INSERT INTO pelanggan (nama, alamat, telepon) VALUES ('$nama', '$alamat', '$telepon')";
    

if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Pelanggan Berhasil di Masukan!');
                window.location.href='admin.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>