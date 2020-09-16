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
  <div class="bg bg-admin">
  <div class="content-admin">
    <div class="title-admin">
      <h1 class = "text-center signin">ORDERS</h1>
    </div>
    <div class="row">
      <div class="col-lg-12">
          <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Pemesanan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                            <table width="100%" class="table table-allnice table-striped table-bordered table-hover table-responsive" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th><p><center>No.</center></p></th>
                                        <th><p><center>Kode</center></p></th>
                                        <th><p><center>Nama</center></p></th>
                                        <th><p><center>Email</center></p></th>
                                        <th><p><center>No. Handphone</center></p></th>
                                        <th><p><center>Jenis Kelamin</center></p></th>
                                        <th><p><center>Jasa</center></p></th>
                                        <th><p><center>Paket</center></p></th>
                                        <th><p><center>Tgl Pemesanan</center></p></th>
                                        <th><p><center>Waktu Pemesanan</center></p></th>
                                        <th><p><center>Tgl Acara</center></p></th>
                                        <th><p><center>Daerah</center></p></th>
                                        <th><p><center>Catatan</center></p></th>
                                        <th><p><center>Aksi</center></p></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                $sql = "SELECT kode_pesanan,nama,email,no_telp,jenis_kelamin,jasa,paket,tgl_pemesanan,waktu_pemesanan,tgl_event,daerah,catatan FROM pesanan";
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


                                    /*echo "<td><a href=""></a></td>";*/
                                    echo "<td>
                                          <a href='delete.php?kode_pesanan=$data[kode_pesanan]'><u><center>DELETE<center></u></a>
                                          <a href='update.php?kode_pesanan=$data[kode_pesanan]'><u><center>FINISH<center></u></a>
                                        </td>";
                                    /*echo "<td>
                                        </td>";*/
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
