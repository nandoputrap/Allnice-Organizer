<?php
require_once "view/header.php";

session_start();

if(cek_login($mysqli) == false){ // Jika user tidak login
    header('location: signin.php'); // Alihkan ke halaman login (index.php)
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
  <div class="container-fluid bg-2">
  <div class="container">
    <h1 class = "text-center signin">ORDERS</h1>
    <div class="row">
      <div class="col-md-12">
          <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pemesanan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>email</th>
                                        <th>Jenis Kelamin</th>
                                        <th>jasa</th>
                                        <th>paket</th>
                                        <th>daerah</th>
                                        <th>tanggal</th>
                                        <th>catatan</th>
                                        <th>DELETE</th>                              
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                $sql = "SELECT nama, email, jenis_kelamin, jasa, paket, daerah, tanggal, catatan FROM pendaftaran ";
                                $hasil = $mysqli->query($sql);
                                $no=0;

                                while ($data=$hasil->fetch_array()) {                                  
                                    echo "<tr>";

                                    $no+=1;
                                    echo "<td>$no</td>";
                                    echo "<td>$data[nama]</td>";
                                    echo "<td>$data[email]</td>";
                                    
                                    if (@$data[jenis_kelamin]==0){
                                        $jenisk="Laki-laki";
                                    }else{
                                        $jenisk="Perempuan";
                                    }
                                    echo "<td>$jenisk</td>";
                                   
                                    if (@$data[jasa]==0){
                                        $jasa="Wedding";
                                    }else{
                                        $jasa="Birthday";
                                    }
                                    echo "<td>$jasa</td>";
                                    echo "<td>$data[paket]</td>";
                                    echo "<td>$data[daerah]</td>";
                                    echo "<td>$data[tanggal]</td>";
                                    echo "<td>$data[catatan]</td>";
                                    echo "<td><a href='delete.php?email=$data[email]' onclick='return confirm(Yakin mau di hapus?);'><u>DELETE</u></a>
                                        </td>";
                                }
                                ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                          
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
      </div>
      <a href="signout.php">SIGN OUT</a>
    </div>
  </div>

<!-- footer -->
<?php include "view/footer.php";?>
    
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