<?php require_once "core/init.php" ?>
<div id="fh5co-main">


		<div id="fh5co-content">
			<div class="container bg">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h1 class="text-center">Silver Package</h1><br>
						<p class="fh5co-lead animate-box">Humanity appreciates truth about as much as a squirrel appreciates silver.</p>
						<p> - Vernon Howard </p>
					</div>
				</div>

				<div class="row">
				<center>
				<?php
					include "functions/config.php";
					$sql = "select * FROM gambar where paket='Silver'";
					$tampil = mysqli_query($link,$sql);
					while ($data = mysqli_fetch_array($tampil)){
					// Tampilkan Gambar

					echo "<figure class='animate-box'>
						<img src='images/".$data['gambar']."' alt='Free HTML5 Template by FREEHTML5.co' class='img-responsive'>
					</figure>";

					}
				?>


				</center>

				</div>

			</div>
		</div>

<?php require_once "view/footer-with-service.php" ?>
