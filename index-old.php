<?php
  require_once "core/init.php";
?>

    <!--BEGIN INTRO-->
    <div class="bg bg-intro"><!--bg = bagian. untuk memisah setiap bagian pada web-->
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
              <h1 class="title-intro">ALLNICE ORGANIZER</h1>
              <p class="caption-intro">Stop complaining & start your best moments with us.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/img/bg-intro-wedding.jpg" alt="wedding">
            <div class="carousel-caption">
              <h1 class="title-intro">WEDDING PARTY</h1>
              <p class="caption-intro">Unforgettable wedding concept. Makes your days happier.</p>
            </div>
          </div>
          <div class="item">
            <img src="assets/img/bg-intro-birthday.jpg" alt="birthday">
            <div class="carousel-caption">
              <h1 class="title-intro">BIRTHDAY PARTY</h1>
              <p class="caption-intro">Feels like reborn with our Birthday Party concept.</p>
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
    <!--END INTRO-->

    <!--BEGIN OUR SERVICES-->
    <div class="container-fluid bg bg-our-services">
      <div class="content-our-services">
        <h2 class="text-center">Our Services</h2>
        <hr id="hr-our-services">

        <div class="item-our-services">
          <div class="container">
            <div class="col-md-6">
              <img class="img-services img-rounded" id="marriage-service" src="assets/img/marriage-service.jpg" alt="Card image cap">
              <a href="#"><h3 class="text-center index-services">Wedding Party</h3></a>
              <p class="text-center">
                Pernikahan adalah acara yang tak terlupakan. Buatlah acara pernikahanmu sesuai dengan keinginamu. Jadilah raja ratu dalam sehari!
              </p>
            </div>

            <div class="col-md-6">
              <img class="img-services img-rounded" id="birthday-service" src="assets/img/birthday-service.jpg" alt="Card image cap">
              <a href="#"><h3 class="text-center index-services">Birthday Party</h3></a>
              <p class="text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END OUR SERVICES-->

    <!--BEGIN WHY US-->
    <div class="container-fluid bg bg-why-us">
      <div class="content-why-us">
        <div class="container">
          <h1 class="text-center">"Kenapa harus memilih ALLNICE?"</h1>
        </div>
      </div>
    </div>
    <!--END WHY US-->

    <!--BEGIN SERVICES-->
    <div class="container-fluid bg bg-services">
      <div class="content-services">
        <center>
        <div class="item-services">
          <div class="col-md-4">
            <i class="fa fa-thumbs-o-up text-center"></i>
            <h3 class="def-services">Pelayanan</h3>
            <p class="def-services text-center">Memiliki pelayanan terbaik di bidangnya. Memakai sumber daya terpilih dan original.</p>
          </div>
        </div>

        <div class="item-services">
          <div class="col-md-4">
            <i class="fa fa-certificate text-center"></i>
            <h3 class="def-services">Sertifikat</h3>
            <p class="def-services text-center">Sudah teruji dan memiliki sertifikat taraf Internasional.</p>
          </div>
        </div>

        <div class="item-services">
          <div class="col-md-4">
            <i class="fa fa-gears text-center"></i>
            <h3 class="def-services">Garansi</h3>
            <p class="def-services text-center">Memberikan garansi all-item selama 1 tahun. Kualitas barang terjamin.</p>
          </div>
        </div>
      </center>
      </div>
    </div>
    <!--END SERVICES-->

    <!--BEGIN REVIEWS-->
    <div class="container-fluid bg bg-reviews">
      <div class="content-reviews">
        <h2 class="text-center">Reviews</h2>
        <hr id="hr-reviews">

        <div class="item-reviews">
          <div class="container">
            <div class="col-sm-4">
              <img class="card-img-top img-circle" id="birthday-service" src="assets/img/avatar-example.png" alt="Card image cap">
              <h3 class="text-center">Ario Bima</h3>
              <h5 class="text-center">IT Consultan</h5>
              <p class="card-text blockquote-reverse"><i>&#34;Waah acara wedding saya sangat keren sekali. Allnice terbaik!!&#34;</i></p>
            </div>

            <div class="col-sm-4">
              <img class="card-img-top img-circle" id="birthday-service" src="assets/img/avatar-example.png" alt="Card image cap">
              <h3 class="text-center">Nando P. Pratama</h3>
              <h5 class="text-center">CEO PT. NDO</h5>
              <p class="card-text blockquote-reverse"><i>&#34;Tidak ada event organizer yang lebih nice selain Allnice!!&#34;</i></p>
            </div>

            <div class="col-sm-4">
              <img class="card-img-top img-circle" id="birthday-service" src="assets/img/avatar-example.png" alt="Card image cap">
              <h3 class="text-center">Dimas Kukuh</h3>
              <h5 class="text-center">IT Manager</h5>
              <p class="card-text blockquote-reverse"><i>&#34;Seandainya aku bisa nikah lagi, aku akan memilih Allnice sebagai EO nya!!!&#34;</i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--END REVIEWS-->

    <!--BEGIN STICKY-->
    <div class="sticky">
      <div class="box">
        <div class="content-box">
          <a href="pilih-jasa.php" class="text-center">
            <p id="i-want-a-service">Order a service!</p>
          </a>
        </div>
      </div>
    </div>
    <!--END STICKY-->


<?php
  require_once "view/footer-with-service.php";
?>
