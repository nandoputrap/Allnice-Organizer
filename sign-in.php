<?php
 require_once "core/init.php";
?>

<?php

session_start(); // Menciptakan session

if(cek_login($mysqli) == true){
header('Location: admin.php');
exit();
}else{
//echo "<script>alert('Salah')</script>";
echo "<script>Location: sign-in.php</script>";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['username']) and isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  if(login($username, $password, $mysqli) == true){
    // Berhasil login
    header('Location: admin.php');
    exit();
  }else{
    echo "<script>alert('gagal login woy')</script>";
    header('Location: sign-in.php');
    exit();
  }
}
}

?>

<div class="container-fluid bg bg-sign-in">
  <div class="container">
    <div class="content-sign-in">
      <div class="item-sign-in">
        <div class="title-sign-in">
          <h1 class="text-center">SIGN IN</h1>
        </div>

        <div class="form-sign-in">
          <form method="post" action="sign-in-function.php">
            <div class="input-group input-sign-in">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input id="username" type="text" class="form-control" name="username" placeholder="Username...">
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
