<?php require_once "core/init.php"; ?>


<div class="container-fluid bg bg-pilih-jasa">
  <div class="container">
    <div class="content-pilih-jasa">
      <div class="title-pilih-jasa">
        <h1 class="text-center">Choose your service!</h1>
      </div>

      <div class="item-pilih-jasa">
        <!--wedding-->
        <div class="col-md-6">
          <div class="box-jasa">
            <center><i class="fa fa-jasa fa-diamond text-center"></i></center>
            <a href="order-wedding.php"><h2 class="text-center">Wedding Party</h2></a>
          </div>
        </div>

        <!--birthday-->
        <div class="col-md-6">
          <div class="box-jasa">
            <center><i class="fa fa-jasa fa-birthday-cake text-center"></i></center>
            <a href="order-birthday.php"><h2 class="text-center">Birthday Party</h2></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


<?php require_once "view/footer-with-service.php"; ?>
