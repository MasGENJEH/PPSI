<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $role = $_POST["role"];

    $sql = "INSERT INTO karyawan (nama, username, role) VALUES ('$nama', '$username', '$role')";
    

    

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