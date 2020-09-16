<?php
require_once "core/init.php";

/*session_start();*/

if(cek_login($mysqli) == false){ // Jika user tidak login
    header('Location: sign-in.php'); // Alihkan ke halaman login (sign-in.php)
    exit();
}

$stmt = $mysqli->prepare("SELECT adminname FROM admin WHERE id = ?");
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$stmt->fetch();

//session_start();
/*if(empty($_SESSION['username'])){
    echo "<center>TAMPILAN SEBELUM LOGIN</center><br/>Maaf sepertinya anda belum Login,silahkan tekan link login dibawah <br/>
    <a href='signin.php'><center>Login</center></a>";
}else{
    echo "<center>TAMPILAN SETELAH LOGIN<br/>Selamat Anda Berhasil Login<br/><a href='logout.php'>Logout</a></center>";
}*/

//str_replace("IN","OUT", "SIGN IN");

?>
  <div class="container-fluid bg bg-admin">
    <div class="container">
      <div class="content-admin">
        <!--title admin-->
        <div class="title-admin">
          <h1 class = "text-center signin">ORDERS</h1>
        </div>

      </div>
        <!--tabel order-->
        <div class="item-admin">
          <div class="row">
                <div class="row">
                      <!--<div class="col-md-12">-->
                      <div class="panel panel-default">
                              <div class="panel-heading">
                                  <p>Data Pemesanan</p>
                              </div>
                              <!-- /.panel-heading -->
                              <div class="panel-body">
                                <div class="col-md-12">
                                  
                                  <!-- /.table-responsive -->
                                  </div>

                              </div>
                              <!-- /.panel-body -->
                          </div>
                          <!-- /.panel -->
                      <!--</div>-->
                      <!-- /.col-lg-12 -->
                  </div>

            </div>
        </div>

      </div>
    </div>

<!-- footer -->
<?php include "view/footer-with-service.php";?>

    <!-- <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

    <!-- DataTables JavaScript -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/dataTables.responsive.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
