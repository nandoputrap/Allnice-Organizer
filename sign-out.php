<?php
session_start();
session_destroy();
header('location:sign-in.php');//jika berhasil maka akan kembali ke login form
?>
