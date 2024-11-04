<?php
session_start();
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$db_name = "db_bunga";

$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$user = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tb_user WHERE username='$user' LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['password'] === $password) {
        $_SESSION['username'] = $username;
        echo "Login berhasil! Selamat datang, " . $user;
        header("Location: galery.php");
    } else {
        echo "Password salah!";
    }
} else {
    echo "Username tidak ditemukan!";
}

$conn->close();
?>