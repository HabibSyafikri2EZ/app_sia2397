<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php
    // Mulai session
    session_start();

    // Koneksi ke database (sesuaikan dengan settingan database Anda)
    $db = new mysqli('localhost', 'root', '', 'sia');

    if ($db->connect_error) {
        die("Koneksi ke database gagal: " . $db->connect_error);
    }

    // Mendapatkan data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mencari user di database
    $result = $db->query("SELECT * FROM Pengguna WHERE username = '$username'");

     // Cek apakah user ditemukan
     if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Cek password
        if ($password == $user['password']) {
            // Jika password benar, set session dan redirect ke halaman utama
            $_SESSION['username'] = $username;
            header('Location: index.php');
        } else {
            // Jika password salah, tampilkan pesan error
            echo "<div class='alert alert-danger text-center'>Password salah</div>";
        }
    } else {
        // Jika user tidak ditemukan, tampilkan pesan error
        echo "<div class='alert alert-danger text-center'>User tidak ditemukan</div>";
    }
?>
</body>
</html>