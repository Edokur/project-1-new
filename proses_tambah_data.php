<?php
include "conection_database.php";
$namaProduk = $_POST['nama_produk'];
$hargaProduk = $_POST['harga_produk'];
$stockProduk = $_POST['stock_produk'];
$deskripsiProduk = $_POST['deskripsi_produk'];

mysqli_query($con, "INSERT INTO produk VALUES ('', '$namaProduk', '$hargaProduk', '$stockProduk', '$deskripsiProduk')");

header('location:katalog_data.php');
?>