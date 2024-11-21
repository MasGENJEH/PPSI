<?php
include 'config.php'; // Koneksi ke database

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa username dan password
$sql = "SELECT id, nama, username, password, role FROM karyawan WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login berhasil
    $row = $result->fetch_assoc();
    session_start();
    
    // Simpan informasi pengguna ke dalam sesi
    $_SESSION['id'] = $row['id'];
    $_SESSION['nama'] = $row['nama'];
    $_SESSION['role'] = $row['role'];
    
    // Redirect berdasarkan role
    if ($row['role'] === 'admin') {
        header("Location: admin.php");
    } elseif ($row['role'] === 'manager') {
        header("Location: manager.php");
    } elseif ($row['role'] === 'kasir') {
        header("Location: kasir.php");
    } else {
        echo "Role tidak valid.";
    }
} else {
    // Login gagal
    echo "<script>
            alert('Username atau password salah!');
            window.location.href='login.php';
          </script>";
}

$conn->close();
?>