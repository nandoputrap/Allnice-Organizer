<?php
session_start();
include "functions/config.php";
include "fungsi.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Allnice Organizer. Created by Kelompok 7 PBW 4KA01 - 2017">
    <meta name="author" content="Nando P. Pratama, Ario Bima A., Dimas Kukuh P., Gemala Santri R., Natasya Irani P., Rindang Rahastri P., Vicky D. Putra">
    <title>Allnice Organizer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="view/master.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    

    <SCRIPT language=Javascript>

function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</SCRIPT>
  </head>

  <body>

    <div class="container-fluid" id="header-allnice">

      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">ALLNICE</a>
          </div>
          <div class="navbar-collapse collapse navbar-right">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">HOME</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#Services">WEDDING</a></li>
                  <li><a href="birthday.php">BIRTHDAY</a></li>
                </ul>
              </li>
              <li><a href="gallery.php">GALLERY</a></li>
              <li><a href="about.php">ABOUT</a></li>
              <li><a href="faq.php">FAQ</a></li>

              <!--BEGIN CEK LOGIN-->
              <?php
              if(cek_login($mysqli) == true){ // Jika user tidak login
                  echo('<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ADMIN <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="admin.php">ORDERS</a></li>
                  <li><a href="sign-out.php">SIGN OUT</a></li>
                </ul>');
              }else{
              echo('<li><a href="sign-in.php">SIGN IN</a></li>');
              }
              ?>
              <!--END CEK LOGIN-->

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
