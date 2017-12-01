<?php

  require_once "config.php"


  /*FUNGSI MENJALANKAN TAMBAH/UPDATE*/
  function run($query){
    global $link;
    if(mysqli_query($link, $query)){
      return true;
    }else{
      return false;
    }
  }

  /*FUNGSI ESCAPE STRING*/
  function escape($string_to_escape){
    global $link;
    return mysqli_real_escape_string($link, $string_to_escape);
  }

  /*FUNGSI ADD DATA*/
  function add_data($nama, $email, $jenis_kelamin, $jasa){

    global $link;

    $nama  = escape($nama);
    $email = escape($email);
    $jenis_kelamin = escape($jenis_kelamin);
    $jasa = escape($jasa);

    $query = "INSERT INTO pesanan(nama,email,jenis_kelamin,jasa) VALUES ('$nama','$email','$jenis_kelamin','$jasa')";
    return run($query);
  }


?>
