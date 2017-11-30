<?php
 require_once "view/header.php";
?>

<div class="container-fluid bg bg-sign-in">
  <div class="container">
    <div class="content-sign-in">
      <div class="item-sign-in">
        <div class="title-sign-in">
          <h1 class="text-center">SIGN IN</h1>
        </div>
        <div class="form-sign-in">

          <form>
            <div class="input-group input-sign-in">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="email" type="text" class="form-control" name="email" placeholder="Username...">
            </div>
            <div class="input-group input-sign-in">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
              <input id="password" type="password" class="form-control" name="password" placeholder="Password...">
            </div>
            <center>
              <button type="submit" class="btn btn-success btn-allnice">Sign In</button>
            </center>
          </form>
          <a href="lupapassword.php"><p class="text-center lupa-password">Forgot Password?</p></a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
 require_once "view/footer-with-service.php";
?>
