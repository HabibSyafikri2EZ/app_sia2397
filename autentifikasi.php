<?php
session_start();

// Koneksi ke database
$host = "localhost";
$username = "root";
$password = "";
$database = "akuntansi";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari pengguna dengan username dan password yang sesuai
$query = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // Jika data ditemukan, redirect ke dashboard.php
  $_SESSION['username'] = $username;
  header("Location: dashboard.php");
} else {
  // Jika tidak ditemukan, kembali ke halaman login dengan pesan error
  $_SESSION['error'] = "Username atau password salah";
  header("Location: login.php");
}

$conn->close();
?>
