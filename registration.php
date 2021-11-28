<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <?php
// define variables and set to empty values
$namaErr = $userErr = $emailErr = $passErr = $pass2Err = $captErr = "";
$nama = $user = $email = $pass = $pass2 = $capt = "";
//Digunakan untuk  memvalidasi semua data supaya data tidak kosong
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama_user"]) | empty($_POST["username_user"]) | empty($_POST["email_user"]) | empty($_POST["password_user"]) | empty($_POST["password_user2"]) | (empty($_POST["captcha_code"]))) 
    {
        if (empty($_POST["nama_user"])) {        //digunakan untuk memvalidasi nama supaya tidak kosong
            $namaErr = "Nama harus diisi";
        }else {
            $nama = test_input($_POST["nama_user"]);
        }
    
        if (empty($_POST["username_user"])) {        //digunakan untuk memvalidasi nama supaya tidak kosong
            $userErr = "username harus diisi";
        }else {
            $user = test_input($_POST["username_user"]);
        }
    
        if (empty($_POST["email_user"])) {   //digunakan untuk mengecek email supaya tidak kosong 
            $emailErr = "Email harus diisi";
        }else {
            $email = test_input($_POST["email_user"]);
    
        // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Email tidak sesuai format"; 
            }
        }
    
        if (empty($_POST["password_user"])) {     //mengecek supaya website user tidak kosong
            $passErr = "Password tidak boleh kosong";
        }else {
            $pass = md5($_POST["password_user"]);
        }
        
        if (empty($_POST["password_user2"])) {     //mengecek supaya komentar tidak kosong
          $pass2Err = "Password tidak boleh kosong";
            if ($pass2 !== $pass) {
                $pass2Err = "Password tidak sama";
            }
        }else {
            $pass2 = test_input($_POST["password_user2"]);
        }
        
        if (empty($_POST["captcha_code"])) {      //mengecek supaya gender wajib dipilih salah satu
            $captErr = "Harus di isi";
        }else {
            $capt = md5($_POST["captcha_code"]);
        }
    }else{
      include "conection_database.php";
      $namaUser = $_POST['nama_user'];
      $usernameUser = $_POST['username_user'];
      $emailUser = $_POST['email_user'];
      $passwordUser = md5($_POST['password_user']);
      $capt = md5($_POST['captcha_code']);
  
      $sql = "INSERT INTO users(username, nama_lengkap, email, password, captcha) VALUES ('$usernameUser', '$namaUser','$emailUser', '$passwordUser', '$capt')";
      $query=mysqli_query($con, $sql);
      mysqli_close($con);
      header('location:login.php');
    }
    
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

  </head>
  <body>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="d-block input-label">Fullname</label>
      <input class="input-field" type="text" name="nama_user" id="exampleInputEmail1" placeholder="Your Fullname" autocomplete="on" value="<?php echo $nama; ?>">
      <span class = "text-warning"><?php echo $namaErr;?></span>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="d-block input-label">Username</label>
      <input class="input-field" type="text" name="username_user" id="exampleInputEmail1" placeholder="Your Username" autocomplete="on" value="<?php echo $user; ?>">
      <span class = "text-warning"><?php echo $userErr;?></span>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="d-block input-label">Email Address</label>
      <input class="input-field" type="email" name="email_user" id="exampleInputEmail1" placeholder="Your Email Address" autocomplete="on" value="<?php echo $email; ?>">
      <span class = "text-warning"><?php echo $emailErr;?></span>
    </div>
    <div class="mb-3">
      <label for="password-content-3-6" class="d-block input-label">Password</label>
      <input class="input-field" type="password" name="password_user" id="password-content-3-6" placeholder="Your Password">
        <span class = "text-warning"><?php echo $passErr;?></span>
    </div>
    <div class="mb-3">
      <label for="password-content-3-6" class="d-block input-label">Confirm Password</label>
      <input class="input-field" type="password" name="password_user2" id="password-content-3-6" placeholder="Confirm Your Password">
        <span class = "text-warning"><?php echo $pass2Err;?></span>
    </div>
    <div class="mb-3">
      <label for="captcha_code" class="d-block input-label">Captcha</label>
      <img src="captcha.php" />
        <input type="text" class="input-field" name="captcha_code" id="captcha_code"/>
        <span class = "text-warning"><?php echo $captErr;?></span>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="login.php">login akun</a>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>