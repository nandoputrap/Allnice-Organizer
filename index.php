<?php
  require_once "view/header.php";
?>

      <div id="myCarousel" class="carousel slide" data-ride="carousel">


        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="assets/img/bg-marriage-1.jpg" alt="bg-marriage-1">
            <div class="carousel-caption">
              <h1>ALLNICE ORGANIZER</h1>
              <p>Stop complaining & start your best moments with us.</p>
            </div>
          </div>

          <div class="item">
            <img src="assets/img/bg-marriage-2.jpg" alt="bg-birthday-1">
            <div class="carousel-caption">
              <h1>WEDDING PARTY</h1>
              <p>Unforgettable wedding concept. Makes your days happier.</p>
            </div>
          </div>


          <div class="item">
            <img src="assets/img/bg-birthday-1.jpg" alt="bg-birthday-1">
            <div class="carousel-caption">
              <h1>BIRTHDAY PARTY</h1>
              <p>Feels like reborn with our Birthday Party concept.</p>
            </div>
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

    <div class="container-fluid bg-2" id="Services">
      <h2 class="text-center">Our Services</h2>
      <hr>

      <div class="container">
        <div class="col-md-6">
          <center>
          <div class="card">
            <img class="card-img-top img-rounded" id="marriage-service" src="assets/img/marriage-service.jpg" alt="Card image cap">
            <div class="card-block">
              <h3 class="card-title"><a href="#">Wedding Party</a></h3>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </center>
        </div>

        <div class="col-md-6">
          <center>
          <div class="card">
            <img class="card-img-top img-rounded" id="birthday-service" src="assets/img/birthday-service.jpg" alt="Card image cap">
            <div class="card-block">
              <h3 class="card-title"><a href="#">Birthday Party</a></h3>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          </center>
        </div>
      </div>


    </div>

    <!--BAGIAN REVIEW-->
    <div class="container-fluid bg-3">
      <h2 class="text-center">Reviews</h2>
      <hr id="hr-reviews">

      <div class="container">

        <center>
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top img-circle" id="birthday-service" src="assets/img/avatar-example.png" alt="Card image cap">
            <div class="card-block">
              <h3 class="card-title">Ario Bima</h3>
              <h5>IT Consultan</h5>
              <p class="card-text blockquote-reverse"><i>&#34;Waah acara wedding saya sangat keren sekali. Allnice terbaik!!&#34;</i></p>
            </div>
          </div>
        </div>
        </center>

        <center>
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top img-circle" id="birthday-service" src="assets/img/avatar-example.png" alt="Card image cap">
            <div class="card-block">
              <h3 class="card-title">Nando P. Pratama</h3>
              <h5>CEO PT. NDO</h5>
              <p class="card-text blockquote-reverse"><i>&#34;Tidak ada event organizer yang lebih nice selain Allnice!!&#34;</i></p>
            </div>
          </div>
        </div>
        </center>

        <center>
        <div class="col-sm-4">
          <div class="card">
            <img class="card-img-top img-circle" id="birthday-service" src="assets/img/avatar-example.png" alt="Card image cap">
            <div class="card-block">
              <h3 class="card-title">Dimas Kukuh</h3>
              <h5>IT Manager</h5>
              <p class="card-text blockquote-reverse"><i>&#34;Seandainya aku bisa nikah lagi, aku akan memilih Allnice sebagai EO nya!!!&#34;</i></p>
            </div>
          </div>
        </div>
        </center>


      </div>
    </div>




<?php
  require_once "view/footer-with-service.php";
?>
