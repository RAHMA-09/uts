<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

$username = $_SESSION['username'];

// Data barang (belum ada logika pembelian)
$kode_barang  = ["K001", "K002", "K003", "K004", "K005"];
$nama_barang  = ["Chitato", "Teh Pucuk", "Indomie", "Sprite", "Susu UHT"];
$harga_barang = [12000, 5000, 3000, 8000, 7500];
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>

<h2>-- POLGAN MART --</h2>
<p>Selamat datang, <?= $username ?>!</p>
<a href="logout.php">Logout</a>

<h3>Daftar Barang</h3>
<ul>
    <?php for ($i=0;$i<count($kode_barang);$i++) { ?>
        <li><?= $kode_barang[$i] ?> - <?= $nama_barang[$i] ?></li>
    <?php } ?>
</ul>

</body>
</html>