<?php 
include "conection_database.php";
$idProduk = $_POST['id_produk'];
$namaProduk = $_POST['nama_produk'];
$hargaProduk = $_POST['harga_produk'];
$stockProduk = $_POST['stock_produk'];
$deskripsiProduk = $_POST['deskripsi_produk'];

mysqli_query($con,"UPDATE produk SET nama_produk='$namaProduk', harga_produk='$hargaProduk', stock_produk='$stockProduk', deskripsi_produk='$deskripsiProduk' WHERE id_produk='$idProduk'");

header('location:katalog_data.php');
?>