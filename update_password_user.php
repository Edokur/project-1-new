<?php 
include "conection_database.php";
session_start();
$usernameUser = $_POST['username'];
$passwordUser = md5($_POST['password']);
$konfirmasiPassUser = md5($_POST['konfirmasi_password']);

$cek = mysqli_query($con, "SELECT * FROM users where username='$_POST[username]'");
  if (mysqli_num_rows($cek)>=1){ 
    if ($passwordUser == $konfirmasiPassUser) {
      $sql = "UPDATE users SET password='$passwordUser' WHERE username='$usernameUser'";
      mysqli_query($con, $sql);
      header("location:login.php");
    }else{
      echo "<script>alert('Mohon cek kembali Password');
      window.location='forgot_pass_two.php';</script>";
    }
  }else{
    echo "<script>alert('username tidak terdaftar');
    window.location='forgot_pass_one.php';</script>";
  }
?>