<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <a href="katalog_data.php" class="btn btn-primary">Kembali</a>
    <h1>Update Data</h1>
    <?php
      include "conection_database.php";
      $idProduk = $_GET['id_produk'];
      $data = mysqli_query($con, "SELECT * FROM produk WHERE id_produk='$idProduk'");
      while ($x = mysqli_fetch_array($data)) {
    ?>


    <form method="POST" action="proses_update_data.php">
      <div class="mb-3">
        <label  class="form-label">Nama Produk</label>
        <input name="nama_produk" type="text" class="form-control" id="nama_produk" aria-describedby="emailHelp" value="<?php echo $x['nama_produk']; ?>" >
      </div>
      <div class="mb-3">
        <label class="form-label">Harga Produk</label>
        <input name="harga_produk" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $x['harga_produk']; ?>" >
      </div>
      <div class="mb-3">
        <label  class="form-label">Stock Produk</label>
        <input name="stock_produk" type="text" class="form-control" id="stock_produk" aria-describedby="emailHelp" value="<?php echo $x['stock_produk']; ?>" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
        <textarea name="deskripsi_produk" class="form-control" id="exampleFormControlTextarea1" rows="3" value="<?php echo $x['deskripsi_produk']; ?>" ></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php 
      }
    ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>