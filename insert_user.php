<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $role = $_POST["role"];

    if ($role === "admin") {
    $sql = "INSERT INTO admin (nama, username) VALUES ('$nama', '$username')";
    } elseif ($role === "manager") {
    $sql = "INSERT INTO manager (nama, username) VALUES ('$nama', '$username')";
    } elseif ($role === "kasir") {
    $sql = "INSERT INTO kasir (nama, username) VALUES ('$nama', '$username')";
    }

    

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('User Berhasil di Masukan!');
                window.location.href='admin.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>