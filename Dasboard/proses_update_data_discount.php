<?php 
include "../conection_database.php";

$idProduk = $_POST['id_Produk'];
$kodeProduk = $_POST['kode_Produk'];
$namaProduk = $_POST['nama_Produk'];
$hargaProduk = $_POST['harga_Produk'];
$diskonProduk = $_POST['diskon_Produk'];
$stockProduk = $_POST['stock_Produk'];
$detailProduk = $_POST['detail_Produk'];

$rand = rand();
$ekstensi = array('png','jpg','jpeg','gif');
$lokasiFile = $_FILES['gambar_Produk']['tmp_name'];
$filename = $_FILES['gambar_Produk']['name'];
$ukuran = $_FILES['gambar_Produk']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if ($diskonProduk > 10) {
	header("location:discount_product.php?alert=gagal_ukuran");
} else{
	$nilaiDiskon = ($diskonProduk/100)*$hargaProduk;
	$hargaProduk = $hargaProduk - $nilaiDiskon;

  if(!in_array($ext, $ekstensi) ) {
    header("location:discount_product.php?alert=gagal_ekstensi");
  }else{
    if($ukuran < 10000000){		
      $xx = $rand.'_'.$filename;
      $sql = "UPDATE discount_produk SET kode_produk='$kodeProduk', nama_produk='$namaProduk', harga_produk='$hargaProduk',diskon_produk='$diskonProduk', stock_produk='$stockProduk', detail_produk='$detailProduk', foto_produk='$xx' WHERE id_produk='$idProduk'";
      move_uploaded_file($lokasiFile, 'gambar_diskon/'.$rand.'_'.$filename);
      mysqli_query($con, $sql);
      header("location:discount_product.php?alert=berhasil");
    }else{
      header("location:discount_product.php?alert=gagal_ukuran");
    }
  }
}
?>