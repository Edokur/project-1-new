<?php 
include "../conection_database.php";

$kodeProduk = $_POST['kode_Produk'];
$namaProduk = $_POST['nama_Produk'];
$hargaProduk = $_POST['harga_Produk'];
$stockProduk = $_POST['stock_Produk'];
$detailProduk = $_POST['detail_Produk'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$lokasiFile = $_FILES['gambar_Produk']['tmp_name'];
$filename = $_FILES['gambar_Produk']['name'];
$ukuran = $_FILES['gambar_Produk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext, $ekstensi) ) {
	header("location:dashboard2.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 10000000){		
		$xx = $rand.'_'.$filename;
    $sql = "INSERT INTO produk (kode_produk, nama_produk, harga_produk, stock_produk, detail_produk, foto_produk) VALUES ('$kodeProduk','$namaProduk','$hargaProduk','$stockProduk','$detailProduk','$xx')";
		move_uploaded_file($lokasiFile, 'gambar/'.$rand.'_'.$filename);
    mysqli_query($con, $sql);
		header("location:dashboard2.php?alert=berhasil");
	}else{
		header("location:dashboard2.php?alert=gagal_ukuran");
	}
}
?>