<?php
include 'koneksi.php';
// menyimpan data id kedalam variabel
$email   = $_GET['email'];

// query SQL untuk insert data
$mysqli->query("DELETE FROM pendaftaran where email = '$email'");
// mengalihkan ke halaman tabel
header("location:admin.php");
?>