<?php
  require_once "view/header.php";
?>

<div class="container-fluid bg-2">
	<div class="container">
		<h1 class = "text-center"> FORM PEMESANAN </h1>

	<form class="form-horizontal">

 	<!-- nama -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="nama">Nama:</label>
    <div class="col-sm-6">
      <input type="nama" class="form-control" id="nama" placeholder="Enter Name">
    </div>
  </div>
  	<!-- end of nama -->
	<!-- email -->
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">E-Mail:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="email" placeholder="Enter E-Mail">
    </div>
  </div>
	<!-- end of email -->
	<!-- Jenis Kelamin -->
  <div class="form-group">
  	<label class="control-label col-sm-2" for="gender">Jenis Kelamin:</label>
  	<div class="col-sm-6">
  		<select class="form-control" id="gender">
    		<option>Laki-laki</option>
    		<option>Perempuan</option>
  		</select>
  	</div> 
  </div>
	<!-- end of jenis kelamin -->
	<!-- Paket -->
  <div class="form-group">
	<label class="control-label col-sm-2" for="paket">Paket:</label>
	<div class="col-sm-6">
		<div class="radio">
  			<label><input type="radio" name="optradio">Paket 1</label>
		</div>
		<div class="radio">
  			<label><input type="radio" name="optradio">Paket 2</label>
		</div>
		<div class="radio">
  			<label><input type="radio" name="optradio">Paket 3</label>
		</div> 
	</div>
  </div>
	<!-- end of paket -->

	<!-- tanggal -->
<!-- <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div> -->
<!-- end of tanggal -->

	<!-- daerah -->
  <div class="form-group">
  	<label class="control-label col-sm-2" for="daerah">Daerah:</label>
  		<div class="col-sm-6">
  			<select class="form-control" id="daerah">
    			<option>Jakarta</option>
    			<option>Bogor</option>
    			<option>Depok</option>
    			<option>Tanggerang</option>
    			<option>Bekasi</option>
  			</select>
  		</div> 
  </div>
	<!-- end of daerah -->
	<!-- Catatan -->
  <div class="form-group">
  	<label class="control-label col-sm-2" for="catatan">Catatan:</label>
  	<div class="col-sm-6">
  		<textarea class="form-control" rows="5" id="catatan"></textarea>
  	</div>
  </div> 
	<!-- end of catatan -->
  <!-- button submit -->
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-6">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
  <!-- end button submit -->
</form>
	</div>
</div>

<?php
  require_once "view/footer.php";
?>s