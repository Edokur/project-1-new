<!DOCTYPE html>
<html lang="en">

<head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin 2 - Blank</title>

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">
        
        <!-- Custom styles for this template-->
        <link href="../css/sb-admin-2.min.css" rel="stylesheet">
        <?php
                include "../conection_database.php";
                session_start();
                if($_SESSION['status'] !="login"){
                header("location:../login.php");
                }
        ?>

<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>

        </head>

        <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <!-- <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                        </div> -->
                        <div class="sidebar-brand-text mx-3">Toko Az Zahra</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item ">
                        <a class="nav-link " href="dashboard2.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                        Katalog Product
                </div>

                <li class="nav-item active">
                        <a class="nav-link" href="new_product.php">
                        <i class="fas fa-tags"></i>
                        <span>New Product</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="discount_product.php">
                        <i class="fas fa-percent"></i>
                        <span>Discount Product</span></a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="old_product.php">
                        <i class="fas fa-tools"></i>
                        <span>Old Product</span></a>
                </li>
                
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                        <!-- Topbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        
                        <form action="new_product.php" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                        </button>
                                </div>
                                </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['emailUser'];?></span>
                                        <img class="img-profile rounded-circle"
                                        src="../img/undraw_profile.svg">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                        </a>
                                        <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                        </a>
                                </div>
                                </li>

                        </ul>

                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                        <!-- Form Inputan -->
                        <h3 class="my-3">
                                Form Data
                        </h3>
                        <div class="col bg-white p-5 rounded">
                        <form action="new_proses.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kode Produk</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="kode_Produk" placeholder="Masukan Kode Produk">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_Produk" placeholder="Masukan Nama Produk">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Harga Produk</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="harga_Produk" placeholder="Masukan Harga Produk">
                                </div>
                                <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Stock Produk</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="stock_Produk" placeholder="Masukan Stock Produk">
                                </div>
                                <div class="form-floating mb-3">
                                        <label for="floatingTextarea2">Detail Produk</label>
                                        <textarea class="form-control" placeholder="Masukan Detail Produk" name="detail_Produk" id="floatingTextarea2" style="height: 200px"></textarea>
                                </div>
                                <div class="mb-3">
                                        <label for="formFile" class="form-label">Gambar Produk</label>
                                        <input class="form-control text-center" type="file" id="formFile" name="gambar_Produk" >
                                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
                                </div>
                                <div class="row">
                                        <div class="col-6 text-center">
                                                <button type="Reset" class="btn btn-danger my-3 text-center px-5">Reset Data</button>
                                        </div>
                                        <div class="col-6 text-center">
                                                <input type="submit" value="Kirim data" class="btn btn-primary my-3 text-center px-5">
                                        </div>
                                </div>
                        </form>
                        </div>
                        <!-- Page Heading -->
                        <div class="col mt-5">
                                <div class="row">
                                        <div class="col-6">
                                                <h3 class="my-3">
                                                        New Product
                                                </h3>
                                        </div>
                                        <div class="col-6 text-right">
                                                <a href="">
                                                        <button type="button" class="btn btn-primary my-3 text-right"><i class="fas fa-plus pr-2"></i>  Tambah Data</button>
                                                </a>
                                        </div>
                                </div>
                        </div>
                        
                        
                        <table class="table border bg-white text-center">
                        <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Foto Produk</th>
                                <th scope="col">Kode Produk</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga Produk</th>
                                <th scope="col">Stock Produk</th>
                                <th scope="col">Detail Produk</th>
                                <th scope="col">Action</th>
                                </tr>
                        </thead>
                        <tbody>
                                <?php 
                                $batas = 10;
                                $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
                                $halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
                                $previous = $halaman - 1;
                                $next = $halaman + 1;
                                $data = mysqli_query($con, "SELECT * FROM produk");
                                $jumlah_data = mysqli_num_rows($data);
                                $total_halaman = ceil($jumlah_data / $batas);

                                if(isset($_GET['cari'])){
                                        $cari = $_GET['cari'];
                                        $data = mysqli_query($con, "SELECT * FROM produk WHERE nama_produk like '%".$cari."%'");				
                                }else{
                                        $data = mysqli_query($con, "SELECT * FROM produk");		
                                }

                                $sql = "SELECT * FROM produk LIMIT $halaman_awal, $batas";
                                $no = $halaman_awal+1;
                                $data = mysqli_query($con, $sql);
                                while($x = mysqli_fetch_array($data)){
                                        
                                ?>
                                <tr>
                                <th scope="row"><?php echo $no++; ?></th>
                                <td><img src="gambar/<?php echo $x['foto_produk']; ?>" class="img-thumbnail" width="100px" alt=""></td>
                                <td><?php echo $x['kode_produk']; ?></td>
                                <td><?php echo $x['nama_produk']; ?></td>
                                <td><?php echo "Rp. ".number_format($x['harga_produk']); ?></td>
                                <td><?php echo $x['stock_produk']; ?></td>
                                <td><?php echo $x['detail_produk']; ?></td>
                                <td>
                                        <a href="update_produk.php?id_produk=<?php echo $x['id_produk']; ?>">EDIT</a>
					<a href="hapus_produk.php?id_produk=<?php echo $x['id_produk']; ?>">HAPUS</a>
                                </td>
                                </tr>
                                <?php 
                                }
                                ?>
                        </tbody>
                        </table>`
                        <nav>
                                <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                                <a class="page-link" <?php if($halaman > 1){ echo "href='?halaman=$Previous'"; } ?>>Previous</a>
                                        </li>
                                        <?php 
                                        for($x=1;$x<=$total_halaman;$x++){
                                                ?> 
                                                <li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                                <?php
                                        }
                                        ?>				
                                        <li class="page-item">
                                                <a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='?halaman=$next'"; } ?>>Next</a>
                                        </li>
                                </ul>
		        </nav>
                        </div>
                        <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Your Website 2021</span>
                        </div>
                        </div>
                </footer>
                <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                        </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="../logout.php">Logout</a>
                        </div>
                </div>
                </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>