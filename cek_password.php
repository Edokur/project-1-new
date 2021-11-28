<?php 
include "conection_database.php";
session_start();
$emailUser = $_POST['email_user'];
function randomPassword()
{
// function untuk membuat password random 6 digit karakter
  $digit = 6;
  $karakter = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
  srand((double)microtime()*1000000);
  $i = 0;
  $pass = "";
  while ($i <= $digit-1)
  {
    $num = rand() % 32;
    $tmp = substr($karakter,$num,1);
    $pass = $pass.$tmp;
    $i++;
}
return $pass;
}
$newPassword = randomPassword();

// mengenkripsi password dengan md5()
$newPasswordEnkrip = md5($newPassword);
$sql = "SELECT * FROM users WHERE email ='$emailUser'";
$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$data  = mysqli_fetch_array($login);

$alamatEmail = $data['email'];

// title atau subject email
$title  = "New Password";
// isi pesan email disertai password
$pesan  = "Email anda : ".$emailUser.". \nPassword Anda yang baru adalah ".$newPassword;
// header email berisi alamat pengirim
$header = "From: admin@situsku.com";
// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
// cek status pengiriman email
if ($kirimEmail) {
    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE users SET password = '$newPasswordEnkrip' WHERE email ='$emailUser'";
    $hasil = mysql_query($query);

    if ($hasil) echo "Password baru telah direset dan sudah dikirim ke email Anda";
}else {
  echo "Pengiriman password baru ke email gagal";
}

mysqli_close($con);
?>