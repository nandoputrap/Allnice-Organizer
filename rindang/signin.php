 <?php
  require_once "view/header.php";
?>

<div class="container-fluid bg-2">
  <div class="container">
    <h1 class = "text-center signin"> SIGN IN ADMIN </h1>
    <form class="form-horizontal">

<!-- form sign in admin -->
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
</div>

<?php
  require_once "view/footer.php";
?>