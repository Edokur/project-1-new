<!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
        <section class="h-100 w-100" style="box-sizing: border-box; position: relative;background-color:#211F2D;">
        <div class="header-3-2 container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
                <nav class="navbar navbar-expand-lg navbar-light">
                <a class="nav-link modal-title href="#">
                        <h4 class="text-center " style="color: rgba(91, 203, 173, 1)">
                                <strong>
                                        Az Zahra
                                </strong>
                        </h4>
                </a>
                <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
                        <span   span class="navbar-toggler-icon "></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog" aria-labelledby="targetModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                        <div class="modal-content bg-white border-0">
                                <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                <a class="nav-link modal-title" id="targetModalLabel">
                                        <h4 class="text-center " style="color: rgba(91, 203, 173, 1)">
                                                <strong>
                                                Az Zahra
                                                </strong>
                                        </h4>
                                </a>
                                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                        <li class="nav-item active position-relative">
                                        <a class="nav-link main" style="color: #243142;" href="Index.php">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Catalog Product 
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                                <li><a class="dropdown-item " href="Home-new_product.php">New Product</a></li>
                                                <li><a class="dropdown-item " href="Home-discount_product.php">Discount Product</a></li>
                                                <li><a class="dropdown-item " href="">Old Product</a></li>
                                                </ul>
                                        </li>
                                        <li class="nav-item position-relative">
                                                <a class="nav-link text-dark" href="Index.php">About</a>
                                        </li>
                                        <li class="nav-item position-relative">
                                                <a class="nav-link text-dark" href="Index.php">Contact</a>
                                        </li>
                                        <!-- <li class="nav-item position-relative">
                                        <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button"aria-expanded="false" aria-controls="collapse">
                                                <svg width="15" height="15" viewBox="0 0 15 15"  fill="none"xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                                        fill="#303030" />
                                                <path fill-rule="evenodd"clip-rule="evenodd"
                                                d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                                                fill="#303030" />
                                        </svg>
                                        </a>
                                        <form method class="collapse position-absolute form center-search border-0"
                                        id="collapse">
                                                <div class="d-flex">
                                                <input type="text" class="rounded-full border-0 focus:outline-none"
                                                        placeholder="Search" />
                                                <button class="btn btn-white" type="button">
                                                        <svg style="width: 20px; height: 20px" data-bs-toggle="collapse"
                                                        href="#collapse" role="button" aria-expanded="false"
                                                        aria-controls="collapse" fill="none" stroke="#273B56"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                        </svg>
                                                </button>
                                                </div>
                                        </form>
                                        </li> -->
                                </ul>
                                </div>
                                <div class="modal-footer border-0" style="padding: 2rem; padding-top: 0.75rem">
                                <a href="login.php" class="nav-link">
                                        <button class="btn btn-fill text-white">
                                                Sign In
                                        </button>
                                </a>
                                </div>
                        </div>
                        </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item  position-relative">
                                <a class="nav-link main="  href="Index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Catalog Product
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li class="">
                                                <a class="dropdown-item" href="Home-new_product.php" >New Product</a>
                                        </li>
                                        <li>
                                                <a class="dropdown-item" href="Home-discount_product.php">Discount Product</a>
                                        </li>
                                        <li>
                                                <a class="dropdown-item" href="" style="color: rgba(91, 203, 173, 1);">Old Product</a>
                                        </li>
                                </ul>
                        </li>
                        <li class="nav-item position-relative">
                                <a class="nav-link" href="Index.php">About</a>
                        </li>
                        <li class="nav-item position-relative">
                                <a class="nav-link" href="Index.php">Contact</a>
                        </li>
                        <!-- <li class="nav-item my-auto">
                                <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button"
                                aria-expanded="false" aria-controls="collapse">
                                <svg class="text-white" width="15" height="15" viewBox="0 0 15 15" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                                        fill="#303030" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                                        fill="#303030" />
                                </svg>
                                </a>
                                <form class="collapse position-absolute form center-search border-0" id="collapse">
                                <div class="d-flex">
                                        <input type="text" class="rounded-full border-0 focus:outline-none"
                                        placeholder="Search" />
                                        <button class="btn" type="button">
                                        <svg style="width: 20px; height: 20px" data-bs-toggle="collapse"
                                                href="#collapse" role="button" aria-expanded="false"
                                                aria-controls="collapse" fill="none" stroke="#273B56" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12">
                                                </path>
                                        </svg>
                                        </button>
                                </div>
                                </form>
                        </li> -->
                        </ul>
                        <a href="login.php" class="nav-link">
                                <button class="btn btn-fill text-white">
                                        Sign In
                                </button>
                        </a>
                </div>
                </nav>
        </div>
        </section>
        <section class="h-100 w-100 bg-white my-5 px-3" >
                <div class="container container-xxl mx-auto p-0 position-relative" style="font-family: 'Poppins', sans-serif">
                <form action="" method="GET">
                                <div class="input-group mb-3">
                                <input type="text" name="cari" class="form-control" placeholder="Seaching..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                                </div>
                        </form>
                        <?php
                                include "conection_database.php";
                                if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                echo "<b>Hasil pencarian : ".$cari."</b>";
                                }
                        ?>
                        <h2 class="text-center border-bottom p-3">
                        Old Product
                </h2>
                <div class="row row-cols-1 row-cols-md-3 g-4 my-3 px-3">
                        <?php
                                if(isset($_GET['cari'])){
                                $cari = $_GET['cari'];
                                $sql="SELECT * FROM produk WHERE nama_produk LIKE'%".$cari."%'";
                                $tampil = mysqli_query($con,$sql);
                                }else{
                                $sql="SELECT * FROM produk";
                                $tampil = mysqli_query($con, $sql);
                                }
                                $no = 1;
                                while($r = mysqli_fetch_array($tampil)){
                        ?>
                                <?php $no++; ?>
                        <div class="col">
                                <div class="card">
                                <p class="mt-4 px-5 p-2 rounded position-absolute text-white bg-danger">Old </p>
                                <div class="text-center p-3 border-bottom">
                                        <img src="Dasboard/gambar/<?php echo $r['foto_produk']; ?>" width="200px" class=" img-thumbnail border-0" alt="...">
                                </div>
                                <div class="card-body mt-3">
                                        <h5 class="card-title"><?php echo $r['nama_produk']; ?></h5>
                                        <p class="card-text text-secondary"><?php echo $r['detail_produk']; ?>
                                        </p>
                                        <p class="card-text fs-5 text-danger">
                                        <?php echo "Rp. ".number_format($r['harga_produk']); ?>
                                        </p>
                                        <a href="https://api.whatsapp.com/send?phone=+6282135649141" target="blank" class="nav-link px-5  rounded mt-5 text-center text-white" style="background-color:rgb(91, 203, 173, 1);">
                                                Beli Sekarang
                                        </a>
                                </div>
                                </div>
                        </div>
                        <?php } ?>
                </div>
                </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        </body>
        </html>