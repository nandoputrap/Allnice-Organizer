<?php require_once "core/init.php" ?>

<div class="container-fluid bg bg-gallery">
	<div class="container">
		<div class="content-gallery">
			<div class="title-gallery">
				<h1 class="text-center">GALLERY</h1>
			</div>

			<div class="item-gallery">
				<div id="fh5co-portfolio" data-section="portfolio">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<p class="fh5co-lead animate-box"> Wedding Gallery </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/emerald_1.jpg" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="emeraldpackage.php" class="transition">
								<div>
								<?php 
									include "functions/config.php"; 
									$jumgambar = 0;
									$sql = "select * FROM gambar where paket = 'Emerald'";
									$tampil = mysqli_query($link,$sql);
									while ($data = mysqli_fetch_array($tampil)){
									$jumgambar +=1;						
									}
									echo "<span class='fh5co-meta'>$jumgambar Images</span>
									<h2 class='fh5co-title'>Emerald Package</h2>";
								?>

									<!-- <span class="fh5co-meta"> <?php $jumemerald ?> </span>
									<h2 class="fh5co-title">Emerald Package</h2> -->
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/pearl_2.jpg" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="pearlpackage.php" class="transition">
								<div><?php 
									include "functions/config.php"; 
									$jumgambar = 0;
									$sql = "select * FROM gambar where paket = 'Pearl'";
									$tampil = mysqli_query($link,$sql);
									while ($data = mysqli_fetch_array($tampil)){
									$jumgambar +=1;						
									}
									echo "<span class='fh5co-meta'>$jumgambar Images</span>
									<h2 class='fh5co-title'>Pearl Package</h2>";
								?>
									<!-- <span class="fh5co-meta">15 images</span>
									<h2 class="fh5co-title">Pearl Package</h2> -->
								</div>
							</a>
						</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/diamond_2.jpg" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="diamondpackage.php" class="transition">
								<div>
								<?php 
									include "functions/config.php"; 
									$jumgambar = 0;
									$sql = "select * FROM gambar where paket = 'Diamond'";
									$tampil = mysqli_query($link,$sql);
									while ($data = mysqli_fetch_array($tampil)){
									$jumgambar +=1;						
									}
									echo "<span class='fh5co-meta'>$jumgambar Images</span>
									<h2 class='fh5co-title'>Diamond Package</h2>";
								?>
									<!-- <span class="fh5co-meta">15 images</span>
									<h2 class="fh5co-title">Diamond Package</h2> -->
								</div>
							</a>
						</div>
					</div>

				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						<p class="fh5co-lead animate-box"> Birthday Gallery </p>
					</div>
				</div>

					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/bd1_2.jpg" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="goldenpackage.php" class="transition">
								<div>
								<?php 
									include "functions/config.php"; 
									$jumgambar = 0;
									$sql = "select * FROM gambar where paket = 'Golden'";
									$tampil = mysqli_query($link,$sql);
									while ($data = mysqli_fetch_array($tampil)){
									$jumgambar +=1;						
									}
									echo "<span class='fh5co-meta'>$jumgambar Images</span>
									<h2 class='fh5co-title'>Golden Package</h2>";
								?>
									<!-- <span class="fh5co-meta">5 images</span>
									<h2 class="fh5co-title">Golden Package</h2> -->
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/bd2_1.jpg" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="silverpackage.php" class="transition">
								<div>
								<?php 
									include "functions/config.php"; 
									$jumgambar = 0;
									$sql = "select * FROM gambar where paket = 'Silver'";
									$tampil = mysqli_query($link,$sql);
									while ($data = mysqli_fetch_array($tampil)){
									$jumgambar +=1;						
									}
									echo "<span class='fh5co-meta'>$jumgambar Images</span>
									<h2 class='fh5co-title'>Silver Package</h2>";
								?>
									<!-- <span class="fh5co-meta">5 images</span>
									<h2 class="fh5co-title">Silver Package</h2> -->
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 col-xxs-12 animate-box">
						<div class="img-grid">
							<img src="images/bd3_1.jpg" alt="Free HTML5 template by FREEHTML5.co" class="img-responsive">
							<a href="bronzepackage.php" class="transition">
								<div>
								<?php 
									include "functions/config.php"; 
									$jumgambar = 0;
									$sql = "select * FROM gambar where paket = 'Bronze'";
									$tampil = mysqli_query($link,$sql);
									while ($data = mysqli_fetch_array($tampil)){
									$jumgambar +=1;						
									}
									echo "<span class='fh5co-meta'>$jumgambar Images</span>
									<h2 class='fh5co-title'>Bronze Package</h2>";
								?>
									<!-- <span class="fh5co-meta">5 images</span>
									<h2 class="fh5co-title">Bronze Package</h2> -->
								</div>
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
				
			</div>
		</div>
	</div>
</div>


<?php require_once "view/footer-with-service.php" ?>