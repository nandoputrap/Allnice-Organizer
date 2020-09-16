<?php
  require_once "core/init.php";
  echo "<br/><br/><br/>"
?>
<?php


//show data
$kode_pesanan   = $_GET['kode_pesanan'];

// query SQL untuk show data
$show = "SELECT kode_pesanan,nama,email,no_telp,jenis_kelamin,jasa,paket,tgl_pemesanan,waktu_pemesanan,tgl_event,daerah,catatan FROM pesanan where kode_pesanan=$kode_pesanan";
$result_show = $mysqli->query($show);
// mengalihkan ke halaman tabel
while ($data=$result_show->fetch_array()) {
  $old_kode_pesanan = "$data[kode_pesanan]";
  $old_nama            = "$data[nama]";
  $old_email           = "$data[email]";
  $old_no_telp         = "$data[no_telp]";
  $old_jenis_kelamin   = "$data[jenis_kelamin]";
  $old_jasa            = "$data[jasa]";
  $old_paket           = "$data[paket]";
  $old_tgl_pemesanan   = "$data[tgl_pemesanan]";
  $old_waktu_pemesanan = "$data[waktu_pemesanan]";
  $old_tgl_event       = "$data[tgl_event]";
  $old_daerah          = "$data[daerah]";
  $old_catatan         = "$data[catatan]";
}
//end of show data

//update data
  if(isset($_POST['submit'])){
    $kode_pesanan    = $kode_pesanan;
    $nama            = $_POST['nama'];
    $email           = $_POST['email'];
    $no_telp         = $_POST['no_telp'];
    $jenis_kelamin   = $_POST['jenis_kelamin'];
    $jasa            = $_POST['jasa'];
    $paket           = $_POST['paket'];
    $tgl_pemesanan   = $old_tgl_pemesanan;
    $waktu_pemesanan = $old_waktu_pemesanan;
    $tgl_event       = $_POST['tgl_event'];
    $tgl_event       = date('Y-m-d', strtotime($tgl_event));
    $daerah          = $_POST['daerah'];
    $biaya           = $_POST['biaya'];
    $catatan         = $_POST['catatan'];
    $catatan_admin   = $_POST['catatan_admin'];

    $update = "INSERT INTO pesanan_selesai(kode_pesanan,nama,email,no_telp,jenis_kelamin,jasa,paket,tgl_pemesanan,waktu_pemesanan,tgl_event,daerah,catatan,pembayaran,catatan_admin) VALUES ('$kode_pesanan','$nama','$email','$no_telp','$jenis_kelamin','$jasa','$paket','$tgl_pemesanan','$waktu_pemesanan','$tgl_event','$daerah','$catatan','$biaya','$catatan_admin')";
    $mysqli->query($update);


    if ($mysqli){
      $mysqli->query("DELETE FROM pesanan where kode_pesanan = '$kode_pesanan'");
      echo "<script>alert('berhasil')</script>";
      header("Location:admin.php");
    }else{
      $error = "Ada masalah ketika update data";
    }
  }
//end of update data

/*
echo "<br/><br/><br/><br/><br/>"
echo $old_kode_pesanan;
echo $old_nama;
echo $old_email;
echo $old_no_telp;
echo $old_jenis_kelamin;
echo $old_jasa;
echo $old_paket;
echo $old_tgl_pemesanan;
echo $old_waktu_pemesanan;
echo $old_tgl_event;
echo $old_daerah;
echo $old_catatan;*/
?>
<div class="container-fluid bg bg-order">
  <div class="container">
    <div class="content-order">
      <!--TITLE ORDER-->
      <div class="title-order">
        <h1 class = "text-center"> FORM PEMESANAN </h1>
      </div>

      <!--FORM PESANAN-->
      <div class="form-pesanan">
        <form class="form-horizontal" action="" method="post">
          <!-- nama -->
          <!--<div class="form-group">
            <div class="col-md-2">
              <label class="control-label" for="nama"><p>Nama :</p></label>
            </div>
            <div class="col-md-6">
              <input type="text" maxlength="50" name="nama" class="form-control" id="nama" placeholder="Enter Name">
            </div>
          </div>-->
          <div class="form-group">
            <label class="col-md-3 control-label">Code of Order</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
            <input disabled name="kode_pesanan" placeholder="enter name" <?php echo "value='$old_kode_pesanan'";?> class="form-control disabled"  type="text">
              </div>
            </div>
          </div>
          <!-- end of kode_pesanan -->

          <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="nama" placeholder="enter name" <?php echo "value='$old_nama'";?> class="form-control"  type="text">
              </div>
            </div>
          </div>
          <!-- end of nama -->

          <!-- email -->
          <!--<div class="form-group">
            <label class="control-label col-sm-2" for="email"><p>E-Mail:</p></label>
            <div class="col-sm-6">
              <input type="email" maxlength="50" name="email" class="form-control" id="email" placeholder="Enter E-Mail">
            </div>
          </div>-->

          <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email" maxlength="50" placeholder="Enter Mail..." <?php echo "value='$old_email'";?> class="form-control"  type="email">
              </div>
            </div>
          </div>
          <!-- end of email -->

          <!-- no telp -->
          <!--<div class="form-group">
            <label class="control-label col-sm-2" for="no_telp"><p>No Handphone:</p></label>
            <div class="col-sm-6">
              <input type="text" maxlength="13" onkeypress="return isNumberKey(event)" name="no_telp" class="form-control" id="no_telp" placeholder="Enter No. Handphone..">
            </div>
          </div>-->
          <div class="form-group">
            <label class="col-md-3 control-label">Phone</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="no_telp" onkeypress="return isNumberKey(event)" maxlength="13" placeholder="Enter Phone Number..." <?php echo "value='$old_no_telp'";?> class="form-control"  type="text">
              </div>
            </div>
          </div>
          <!-- end of no telp -->

          <!-- Jenis Kelamin -->
          <!--<div class="form-group">
            <label class="control-label col-sm-2" for="jenis_kelamin"><p>Jenis Kelamin:</p></label>
            <div class="col-sm-6">
             <select class="form-control" name="jenis_kelamin">
              <optgroup>
                <option value="Laki-laki"><p>Laki-laki</p></option>
                <option value="Perempuan"><p>Perempuan</p></option>
              </optgroup>
             </select>
            </div>
          </div>-->
          <div class="form-group">
            <label class="col-md-3 control-label">Gender</label>
              <div class="col-md-6 selectContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <select class="form-control selectpicker" name="jenis_kelamin"><?php 
              if ($old_jenis_kelamin=="Laki-laki")
                {
                  $laki_laki = "selected='selected'";
                  $perempuan = "";
                }else{
                  $laki_laki = "";
                  $perempuan = "selected='selected'";
                }
              echo "<option $laki_laki value='Laki-laki'><p>Male</p></option>
              <option $perempuan value='Perempuan'><p>Female</p></option>";?>
              </select>
            </div>
          </div>
          </div>
          <!-- end of jenis kelamin -->


          <!-- Paket -->
          <!--<div class="form-group">
            <label class="control-label col-sm-2" for="paket"><p>Paket:</p></label>
            <div class="col-sm-6">
             <select class="form-control" name="paket">
              <option value="Gold"><p>Gold</p></option>
              <option value="Silver"><p>Silver</p></option>
              <option value="Bronze"><p>Bronze</p></option>
             </select>
            </div>
          </div>-->
          <div class="form-group">
            <label class="col-md-3 control-label">Services</label>
              <div class="col-md-6 selectContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-star"></i></span>
              <select name="jasa" class="form-control selectpicker" ><?php
              if ($old_jasa=="Wedding")
                {
                  $wedding = "selected='selected'";
                  $birthday = "";
                }else{
                  $wedding = "";
                  $birthday = "selected='selected'";
                }
              echo "<option $wedding value='Wedding'>
                  <p>Wedding</p>
                </option>
                <option $birthday value='Birthday'>
                  <p>Birthday</p>
                </option>";
              ?>
              </select>
            </div>
          </div>
          </div>
          <!--end paket-->

          <div class="form-group">
            <label class="col-md-3 control-label">Packet</label>
              <div class="col-md-6 selectContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
              <select name="paket" class="form-control selectpicker"> <?php 
              if ($old_jasa == "Wedding"){
                if ($old_paket == "Emerald"){
                  $emerald = "selected='selected'";
                  $pearl = "";
                  $diamond = "";
                }elseif($old_paket=="Pearl"){
                  $emerald = "";
                  $pearl = "selected='selected'";
                  $diamond = "";
                }else{
                  $emerald = "";
                  $pearl = "";
                  $diamond = "selected='selected'";
                }
                echo "<option $emerald value='Emerald'>
                      <p>Emerald</p>
                    </option>
                    <option $pearl value='Pearl'>
                      <p>Pearl</p>
                    </option>
                    <option $diamond value='Diamond'>
                      <p>Diamond</p>
                    </option>";
                
              }elseif ($old_jasa == "Birthday"){
                if ($old_paket == "Gold"){
                  $gold = "selected='selected'";
                  $silver = "";
                  $bronze = "";
                }elseif($old_paket=="Silver"){
                  $gold = "";
                  $silver = "selected='selected'";
                  $bronze = "";
                }else{
                  $gold = "";
                  $silver = "";
                  $bronze = "selected='selected'";
                }
                echo "<option $gold value='Gold'>
                      <p>Gold</p>
                    </option>
                    <option $silver value='Silver'>
                      <p>Silver</p>
                    </option>
                    <option $bronze value='Bronze'>
                      <p>Bronze</p>
                    </option>";
              }

              ?>
              </select>
            </div>
          </div>
          </div>
          <!--end paket-->



    <!-- tanggal event-->
    <!--<div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='date' name="tgl_event" class="form-control">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
            </div>-->

            <div class="form-group">
              <label class="col-md-3 control-label">Date of Order</label>
                <div class="col-md-6 selectContainer">
                <div class="input-group date" id='datetimepicker1'>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type='date' name="tgl_pemesanan" <?php echo "value='$old_tgl_pemesanan'";?>class="form-control">
              </div>
            </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.id.min.js">
            $(function() {
              $('#datetimepicker1').datetimepicker();
            });
            </script>
            <!-- end of tanggal event -->

          <div class="form-group">
            <label class="col-md-3 control-label">Time of Order</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            <input name="waktu_pemesanan" placeholder="enter name" <?php echo "value='$old_waktu_pemesanan'";?> class="form-control"  type="text">
              </div>
            </div>
          </div>
          <!-- end of waktu_pemesanan -->

            <div class="form-group">
              <label class="col-md-3 control-label">Date of Event</label>
                <div class="col-md-6 selectContainer">
                <div class="input-group date" id='datetimepicker1'>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type='date' name="tgl_event" <?php echo "value='$old_tgl_event'";?>class="form-control">
              </div>
            </div>
            </div>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/locales/bootstrap-datepicker.id.min.js">
            $(function() {
              $('#datetimepicker1').datetimepicker();
            });
            </script>
            <!-- end of tanggal event -->

        <!-- daerah -->
        <!--<div class="form-group">
          <label class="control-label col-sm-2" for="daerah">Daerah:</label>
            <div class="col-sm-6">
              <select class="form-control" name="daerah">
                <option value="Jakarta">Jakarta</option>
                <option value="Bogor">Bogor</option>
                <option value="Depok">Depok</option>
                <option value="Tangerang">Tanggerang</option>
                <option value="Bekasi">Bekasi</option>
              </select>
            </div>
        </div>-->
        <div class="form-group">
          <label class="col-md-3 control-label">Region</label>
            <div class="col-md-6 selectContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                <select class="form-control" name="daerah"><?php 
                if ($old_daerah == "Jakarta"){
                  $jakarta = "selected='selected'";
                  $depok = "";
                  $bogor = "";
                  $tanggerang = "";
                  $bekasi = "";
                }elseif($old_daerah=="Depok"){
                  $jakarta = "";
                  $depok = "selected='selected'";
                  $bogor = "";
                  $tanggerang = "";
                  $bekasi = "";
                }elseif($old_daerah=="Bogor"){
                  $jakarta = "";
                  $depok = "selected='selected'";
                  $bogor = "";
                  $tanggerang = "";
                  $bekasi = "";
                }elseif($old_daerah=="Tanggerang"){
                  $jakarta = "";
                  $depok = "";
                  $bogor = "";
                  $tanggerang = "selected='selected'";
                  $bekasi = "";
                }else{
                  $jakarta = "";
                  $depok = "";
                  $bogor = "";
                  $tanggerang = "";
                  $bekasi = "selected='selected'";
                }
                
                echo "<option $jakarta value='Jakarta'>
                    <p>Jakarta</p>
                  </option>
                  <option $bogor value='Bogor'>
                    <p>Bogor</p>
                  </option>
                  <option $depok value='Depok'>
                    <p>Depok</p>
                  </option>
                  <option $tanggerang value='Tangerang'>
                    </p>Tanggerang<p>
                  </option>
                  <option $bekasi value='Bekasi'>
                    <p>Bekasi</p>
                  </option>";
                ?>
                </select>
          </div>
        </div>
        </div>
        <!-- end of daerah -->

        <!-- Catatan -->
        <!--<div class="form-group">
          <label class="control-label col-sm-2" for="catatan">Catatan:</label>
          <div class="col-sm-6">
            <textarea maxlength="180" class="form-control" rows="5" name="catatan" id="catatan"></textarea>
          </div>
        </div>-->
        

        <div class="form-group">
          <label class="col-md-3 control-label">Note</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <textarea class="form-control" name="catatan" maxlength="20" rows="5"  placeholder="Enter Message.."><?php echo "$old_catatan";?></textarea>
          </div>
          </div>
        </div>
        <!-- end of catatan -->

        <div class="form-group">
            <label class="col-md-3 control-label">Price</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
            <input name="biaya" class="form-control" onkeypress="return isNumberKey(event)" type="text">
              </div>
            </div>
          </div>
          <!-- end of nama -->

        <div class="form-group">
          <label class="col-md-3 control-label">Admin's Note</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                  <textarea class="form-control" name="catatan_admin" maxlength="200" rows="5"  placeholder="Enter Message.."></textarea>
          </div>
          </div>
        </div>
        <!-- end of catatan admin -->

        <!-- button submit -->
        <div class="form-group">
          <div class="col-md-3">            
          </div>
          <div class="col-md-6">
            <button type="submit" class="btn btn-success btn-allnice" name="submit">Submit</button>
          </div>
        </div>
        <!-- end button submit -->
      </form>
      </div>
    </div>
  </div>
</div>
<?php include "view/footer-with-service.php";?>