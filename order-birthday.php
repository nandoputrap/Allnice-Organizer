<?php
  require_once "core/init.php";
?>

<?php
/*
/////////////*
BEGIN BAGIAN FUNGSI
/////////////*
*/

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
function add_data($nama,$email,$no_telp,$jenis_kelamin,$jasa,$paket,$tgl_event,$daerah,$catatan){

  $nama          = escape($nama);
  $email         = escape($email);
  $no_telp       = escape($no_telp);
  $jenis_kelamin = escape($jenis_kelamin);
  $jasa          = escape($jasa);
  $paket         = escape($paket);
  $tgl_pemesanan = date('Y-m-d');
  date_default_timezone_set('Asia/Jakarta');
  $waktu_pemesanan = date('H:i:s');
  $tgl_event       = escape($tgl_event);
  $daerah          = escape($daerah);
  $catatan         = escape($catatan);


  $query = "INSERT INTO pesanan(nama,email,no_telp,jenis_kelamin,jasa,paket,tgl_pemesanan,waktu_pemesanan,tgl_event,daerah,catatan)
  VALUES ('$nama','$email','$no_telp','$jenis_kelamin','$jasa','$paket','$tgl_pemesanan','$waktu_pemesanan','$tgl_event','$daerah','$catatan')";
  return run($query);
}
?>

<?php
  $error = "";

  if(isset($_POST['submit'])){
    $nama          = $_POST['nama'];
    $email         = $_POST['email'];
    $no_telp       = $_POST['no_telp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jasa          = "Birthday";
    $paket         = $_POST['paket'];
    $tgl_event     = $_POST['tgl_event'];
    $tgl_event     = date('Y-m-d', strtotime($tgl_event));
    $daerah        = $_POST['daerah'];
    $catatan       = $_POST['catatan'];

    if (add_data($nama,$email,$no_telp,$jenis_kelamin,$jasa,$paket,$tgl_event,$daerah,$catatan)){
      echo "<script>alert('berhasil')</script>";
      echo "<script>Location='index.php';</script>";
    }else{
      $error = "Ada masalah ketika input data";
    }
  }


/*
/////////////*
END BAGIAN FUNGSI
/////////////*
*/
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
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-6 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="nama" maxlength="50" placeholder="Enter Name..." class="form-control"  type="text">
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
            <input name="email" maxlength="50" placeholder="Enter Mail..." class="form-control"  type="email">
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
            <input name="no_telp" onkeypress="return isNumberKey(event)" maxlength="13" placeholder="Enter Phone Number..." class="form-control"  type="text">
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
              <select name="jenis_kelamin" class="form-control selectpicker" >
                  <option value="Laki-laki"><p>Male</p></option>
            		  <option value="Perempuan"><p>Female</p></option>
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
            <label class="col-md-3 control-label">Packet</label>
              <div class="col-md-6 selectContainer">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
              <select name="paket" class="form-control selectpicker" >
                <option value="Gold"><p>Gold</p></option>
          		  <option value="Silver"><p>Silver</p></option>
                <option value="Bronze"><p>Bronze</p></option>
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
              <label class="col-md-3 control-label">Date</label>
                <div class="col-md-6 selectContainer">
                <div class="input-group date" id='datetimepicker1'>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <input type='date' name="tgl_event" class="form-control">
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
                <select class="form-control" name="daerah">
                  <option value="Jakarta">Jakarta</option>
                  <option value="Bogor">Bogor</option>
                  <option value="Depok">Depok</option>
                  <option value="Tangerang">Tanggerang</option>
                  <option value="Bekasi">Bekasi</option>
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
                	<textarea class="form-control" name="catatan" maxlength="180" rows="5" placeholder="Enter Message.."></textarea>
          </div>
          </div>
        </div>
    	  <!-- end of catatan -->

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

<?php
  require_once "view/footer-with-service.php";
?>
