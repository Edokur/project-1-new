<?php 
include "conection_database.php";
session_start();
$usernameUser = $_POST['username'];
$emailUser = $_POST['email'];
  // Cek alamat email yang di input ke table users
  $cek = mysqli_query($con, "SELECT * FROM users where username='$_POST[username]' AND email='$_POST[email]'");
  if (mysqli_num_rows($cek)>=1){ // jika pengecekan bernilai 1 atau lebih (ditemukan)
    // Kirimkan password ke alamat email terkait
    header ("location:forgot_pass_two.php");
  }else{
    echo "<script>alert('username dan email tidak terdaftar');
          window.location='forgot_pass_one.php';
          </script>";
  }
?>