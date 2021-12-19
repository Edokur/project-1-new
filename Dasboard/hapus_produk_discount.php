<?php 
include "../conection_database.php";

$idProduk = $_GET['id_produk'];

$query = "DELETE FROM discount_produk WHERE id_produk = '$idProduk'";
$hasil = mysqli_query($con, $query);

if ($hasil ) {
  header('location:discount_product.php');
}else{
  echo "<script>Alert('Hapus data gagal');</script>";
}
?>