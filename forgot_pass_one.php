<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    </head>

    <section class="h-100 w-100 p-3" style="box-sizing: border-box; background-color:#252332">
                <div class="content-3-6 d-flex flex-column align-items-center h-100 flex-lg-row"
        style="font-family: 'Poppins', sans-serif;">
        <div class="position-relative d-none d-lg-block h-100 width-left">
            <img class="position-absolute img-fluid centered" width="100%"
            src="img/welcome.png"
            alt="">
        </div>
        <div class="d-flex mx-auto align-items-left justify-content-left width-right mx-lg-0">
            <div class="right mx-lg-0 mx-auto">
            <div class="align-items-center justify-content-center d-lg-none d-flex">
                <img class="img-fluid"
                src="img/welcome.png"
                alt="">
            </div>
            <h3 class="title-text">Forgot Password</h3>
            <p class="caption-text">Please input your username and email</p>
            <form style="margin-top: 1.5rem;" action="cek_password.php" method="post">
                <div style="margin-bottom: 1.75rem;">
                <label for="exampleInputEmail1" class="d-block input-label">Username</label>
                <div class="d-flex w-100 div-input">
                    <svg class="icon" style="margin-right: 1rem;" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z"
                        fill="#4E4B62" />
                    </svg>
                    <input class="input-field" type="text" value="" name="username" id="exampleInputEmail1" placeholder="Your Username" autocomplete="on"
                    >
                </div>
                </div>
                <div style="margin-bottom: 1.75rem;">
                <label for="exampleInputEmail1" class="d-block input-label">Email Address</label>
                <div class="d-flex w-100 div-input">
                    <svg class="icon" style="margin-right: 1rem;" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5 5C3.34315 5 2 6.34315 2 8V16C2 17.6569 3.34315 19 5 19H19C20.6569 19 22 17.6569 22 16V8C22 6.34315 20.6569 5 19 5H5ZM5.49607 7.13174C5.01655 6.85773 4.40569 7.02433 4.13168 7.50385C3.85767 7.98337 4.02427 8.59422 4.50379 8.86823L11.5038 12.8682C11.8112 13.0439 12.1886 13.0439 12.4961 12.8682L19.4961 8.86823C19.9756 8.59422 20.1422 7.98337 19.8682 7.50385C19.5942 7.02433 18.9833 6.85773 18.5038 7.13174L11.9999 10.8482L5.49607 7.13174Z"
                        fill="#4E4B62" />
                    </svg>
                    <input class="input-field" type="email" value="" name="email" id="exampleInputEmail1" placeholder="Your Email Address" autocomplete="on"
                    >
                </div>
                </div>
                <input type="submit" value="Submit" class="btn btn-fill text-white d-block w-100" name="submit">
            </form>
            
            </div>
        </div>


        </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
