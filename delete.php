<?php
include 'functions/config.php';
// menyimpan data id kedalam variabel
$kode_pesanan   = $_GET['kode_pesanan'];

// query SQL untuk insert data
$mysqli->query("DELETE FROM pesanan where kode_pesanan = '$kode_pesanan'");
// mengalihkan ke halaman tabel
header("Location:admin.php");
?>
