 <?php
  require_once "view/header.php";
?>

<div class="container-fluid bg bg-sign-in">
  <div class="container">
    <h1 class = "text-center sign-in"> SIGN IN ADMIN </h1>

<div class="col-md-2"></div>
<!-- form sign in admin -->
<div class="col-md-8">

 <form class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Username:</label>
    <div class="col-sm-10">
      <input type="username" class="form-control" id="username" placeholder="Enter username">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">SIGN IN</button>
    </div>
  </div>
</form>
<!-- end form sign in admin -->
</div>
<div class="col-md-2"></div>

</div>
</div>

<?php
  require_once "view/footer-with-services.php";
?>
