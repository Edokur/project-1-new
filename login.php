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
            $emailErr = $passErr = $captErr = "";
            $email = $pass = $capt = "";
            
            //Digunakan untuk  memvalidasi semua data supaya data tidak kosong
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["email_user"]) | empty($_POST["password_user"]) |  (empty($_POST["captcha_code"]))) 
                {
                    if (empty($_POST["email_user"])) {   //digunakan untuk mengecek email supaya tidak kosong 
                        $emailErr = "Email harus diisi";
                    }else {
                        $email = $_POST["email_user"];
                
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
            
                    
                    if (empty($_POST["captcha_code"])) {      //mengecek supaya gender wajib dipilih salah satu
                        $captErr = "Harus di isi";
                    }else {
                        $capt = md5($_POST["captcha_code"]);
                    }
                }
              }
              // else if (!(empty($_POST["captcha_code"]))){
              //   $captErr = "Captcha tidak sesuai";
              // }
              
                include "conection_database.php";
                
                $sql="SELECT * FROM users WHERE email='$email' AND password='$pass'";
                $sql2="UPDATE users SET captcha ='$capt' where email ='$email'";
            
                $update=mysqli_query($con, $sql2);
                $login=mysqli_query($con,$sql);
                $ketemu=mysqli_num_rows($login);
                $r= mysqli_fetch_array($login);
                if ($ketemu > 0){
                    session_start();
                    $_SESSION['emailUser'] = $emailUser;
                    $_SESSION['status'] = "login";
                    echo"USER BERHASIL LOGIN<br>";
                    header("location:dashboard.php");
                }
                mysqli_close($con);
                function test_input($data) {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
              }  
            
        ?>

  </head>
  <body>
    
  <table>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="d-block input-label">Email Address</label>
      <input class="input-field" type="email" name="email_user" id="exampleInputEmail1" placeholder="Your Email Address" autocomplete="on" value="<?php echo $email; ?>" >
      <span class = "text-warning"><?php echo $emailErr;?></span>
    </div>
      <div class="mb-3">
      <label for="password-content-3-6" class="d-block input-label">Password</label>
      <input class="input-field" type="password" name="password_user" id="password-content-3-6" placeholder="Your Password">
        <span class = "text-warning"><?php echo $passErr;?></span>
    </div>
    <div class="mb-3">
      <label for="captcha_code" class="d-block input-label">Captcha</label>
      <img src="captcha.php" />
        <input type="text" class="input-field" name="captcha_code" id="captcha_code"/>
        <span class = "text-warning"><?php echo $captErr;?></span>
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </table>
  <a href="registration.php" >Register Here</a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>