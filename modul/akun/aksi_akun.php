<?php
session_start();
include_once('../../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_akun = $_POST['nama_akun'];
    $jenis_akun = $_POST['jenis_akun'];
    $tipe_saldo = $_POST['tipe_saldo'];
    
    if ($_GET['act'] == "insert") {
        $query = "INSERT INTO akun (nama_akun, jenis_akun, tipe_saldo) VALUES ('$nama_akun', '$jenis_akun', '$tipe_saldo')";
        $exec = mysqli_query($koneksi, $query);
        
        if ($exec) {
            $_SESSION['pesan'] = "Data akun telah ditambahkan";
            header('location:../../dashboard.php?modul=akun');
        } else {
            $_SESSION['pesan'] = "Data akun gagal ditambahkan";
            header('location:../../dashboard.php?modul=akun');
        }
    } elseif ($_GET['act'] == "update") {
        $id = $_GET['id'];
        $query = "UPDATE akun SET nama_akun='$nama_akun', jenis_akun='$jenis_akun', tipe_saldo='$tipe_saldo' WHERE id='$id'";
        $exec = mysqli_query($koneksi, $query);
        
        if ($exec) {
            $_SESSION['pesan'] = "Data akun telah diubah";
            header('location:../../dashboard.php?modul=akun');
        } else {
            $_SESSION['pesan'] = "Data akun gagal diubah";
            header('location:../../dashboard.php?modul=akun');
        }
    }
} else {
    if ($_GET['act'] == "delete") {
        $id = $_GET['id'];
        $query = "DELETE FROM akun WHERE id='$id'";
        $exec = mysqli_query($koneksi, $query);
        
        if ($exec) {
            $_SESSION['pesan'] = "Data akun telah dihapus";
            header('location:../../dashboard.php?modul=akun');
        } else {
            $_SESSION['pesan'] = "Data akun gagal dihapus";
            header('location:../../dashboard.php?modul=akun');
        }
    } else {
        header('location:../../login.php');
    }
}
?>
