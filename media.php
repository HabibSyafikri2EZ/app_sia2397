<?php
if (!isset($_GET['modul'])) {
    include_once('modul/home/index.php');
} else {
    switch ($_GET['modul']) {
        case "transaksi":
            include_once('modul/transaksi/index.php');
            break;
        case "akun":
            include_once('modul/akun/index.php');
            break;
        case "pembelian":
            include_once('modul/pembelian/index.php');
            break;
        case "pembayaran":
            include_once('modul/pembayaran/index.php');
            break;
        case "penjualan":
            include_once('modul/penjualan/index.php');
            break;
        case "pelanggan":
            include_once('modul/pelanggan/index.php');
            break;
        case "barang":
            include_once('modul/barang/index.php');
            break;
        case "suplier":
            include_once('modul/suplier/index.php');
            break;
        case "pengguna":
            include_once('modul/pengguna/index.php');
            break;
        case "jurnal":
            include_once('modul/jurnal/index.php');
            break;
        case "profile":
            include_once('modul/profile/index.php');
            break;
        default:
            ?>
            <div class="alert alert-info">
                <strong>Perhatian:</strong>
                Modul yang anda request tidak ada!!!
            </div>
            <?php
            break;
    }
}
?>
