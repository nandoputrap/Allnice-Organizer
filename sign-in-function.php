<?php
include "functions/config.php";
include "sign-in.php";

if(isset($_POST['submit'])){
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql="SELECT * FROM admin WHERE adminname='$username'AND password='$password'";
    $result=mysqli_query($mysqli, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    //$row=mysqli_fetch_array($result);
    //if($row['username'] == $username){
    if($num_rows>0){
        session_start();
        $_SESSION['username']=$row['username'];
        //$_SESSION['username']=$row['password'];
        //echo $sql;
        //header('location:admin.php');
        echo "<script>Location='admin.php';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>Location='sign-in.php';</script>";
    }
}

?>
