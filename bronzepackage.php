<?php require_once "core/init.php" ?>
<div id="fh5co-main">


		<div id="fh5co-content">
			<div class="container bg">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<h1 class="text-center">Bronze Package</h1><br>
						<p class="fh5co-lead animate-box">When you have a bunch of comfortable upholstered pieces, a single bronze or brass chair really turns the energy up.</p>
						<p> - Nate Berkus </p>
					</div>
				</div>

				<div class="row">
				<center>



				<?php
					include "functions/config.php";
					$sql = "select * FROM gambar where paket='Bronze'";
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
