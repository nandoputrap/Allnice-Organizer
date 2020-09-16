<?php
require_once "core/init.php";

if(cek_login($mysqli) == false){ // Jika user tidak login
    header('Location: sign-in.php'); // Alihkan ke halaman login (sign-in.php)
    exit();
}/*

$stmt = $mysqli->prepare("SELECT adminname FROM admin WHERE id = ?");
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($username);
$stmt->fetch();
*/
//session_start();
/*if(empty($_SESSION['username'])){
    echo "<center>TAMPILAN SEBELUM LOGIN</center><br/>Maaf sepertinya anda belum Login,silahkan tekan link login dibawah <br/>
    <a href='signin.php'><center>Login</center></a>";
}else{
    echo "<center>TAMPILAN SETELAH LOGIN<br/>Selamat Anda Berhasil Login<br/><a href='logout.php'>Logout</a></center>";
}*/

//str_replace("IN","OUT", "SIGN IN");

?>
   <div class="bg-admin">
  <!--<div class="container"> -->
    <br/>
    <h1 class = "text-center signin">FINISHED ORDERS</h1>
    <div class="row">
      <div class="col-lg-12">
          <div class="row">
                <div class="col-lg-12">
                    <div class="panel-default">
                        <div class="panel-heading">
                            Data Pemesanan Selesai
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><center>No.</center></th>
                                        <th><center>Kode</center></th>
                                        <th><center>Nama</center></th>
                                        <th><center>Email</center></th>
                                        <th><center>No. Handphone</center></th>
                                        <th><center>Jenis Kelamin</center></th>
                                        <th><center>Jasa</center></th>
                                        <th><center>Paket</center></th>
                                        <th><center>Tgl Pemesanan</center></th>
                                        <th><center>Waktu Pemesanan</center></th>
                                        <th><center>Tgl Acara</center></th>
                                        <th><center>Daerah</center></th>
                                        <th><center>Catatan</center></th>
                                        <th><center>Harga</center></th>
                                        <th><center>Catatan Admin</center></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                $sql = "SELECT kode_pesanan,nama,email,no_telp,jenis_kelamin,jasa,paket,tgl_pemesanan,waktu_pemesanan,tgl_event,daerah,catatan,pembayaran,catatan_admin FROM pesanan_selesai";
                                $hasil = $mysqli->query($sql);
                                $no=0;



                                while ($data=$hasil->fetch_array()) {
                                  $tgl_pemesanan = date('d-m-Y',strtotime($data['tgl_pemesanan']));
                                  $tgl_event = date('d-m-Y',strtotime($data['tgl_event']));


                                    echo "<tr>";

                                    $no+=1;
                                    echo "<td><center>$no</center></td>";
                                    echo "<td><center>$data[kode_pesanan]</center></td>";
                                    echo "<td><center>$data[nama]</center></td>";
                                    echo "<td><center>$data[email]</center></td>";
                                    echo "<td><center>$data[no_telp]</center></td>";

                                    /*if (@$data[jenis_kelamin]==0){
                                        $jenisk="Laki-laki";
                                    }else{
                                        $jenisk="Perempuan";
                                    }*/
                                    echo "<td><center>$data[jenis_kelamin]</center></td>";

                                    /*if (@$data[jasa]==0){
                                        $jasa="Wedding";
                                    }else{
                                        $jasa="Birthday";
                                    }*/
                                    echo "<td><center>$data[jasa]</center></td>";
                                    echo "<td><center>$data[paket]</center></td>";
                                    echo "<td><center>$tgl_pemesanan</center></td>";
                                    echo "<td><center>$data[waktu_pemesanan]<center></td>";
                                    echo "<td><center>$tgl_event</center></td>";
                                    echo "<td><center>$data[daerah]</center></td>";
                                    echo "<td><center>$data[catatan]</center></td>";
                                    echo "<td><center>$data[pembayaran]</center></td>";
                                    echo "<td><center>$data[catatan_admin]</center></td>";
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
   <!--  </div>-->
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
