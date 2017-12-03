<?php

$host_db     = 'localhost';
$user_db     = 'root';
$password_db = '';
$database    = 'allnice';
$mysqli = new mysqli($host_db,$user_db,$password_db,$database);

$link = mysqli_connect($host_db, $user_db, $password_db, $database);

?>
