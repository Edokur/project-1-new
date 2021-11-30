<?php 
include "conection_database.php";

$idProduk = $_GET['id_produk'];

mysqli_query($con,"DELETE FROM produk WHERE id_produk='$idProduk'");

header('location:katalog_data.php');
?>