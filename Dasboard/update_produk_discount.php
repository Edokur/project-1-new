<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update-Produk-Discount</title>
  </head>
  <body>
  <div class="container-fluid">

<!-- Form Inputan -->
<?php
      include "../conection_database.php";
      if (isset($_GET['id_produk'])){
        if($_GET['id_produk'] != ""){
          $idProduk = $_GET['id_produk'];
          $query = "SELECT * FROM discount_produk WHERE id_produk='$idProduk'";
          $data = mysqli_query($con, $query);
          $x = mysqli_fetch_array($data);
        }else{
          header("location:discount_product.php");
        }
      }else{
        header("location:discount_product.php");
      }
  ?>
  <div class="col bg-white p-5 rounded">
    <a href="discount_product.php" class="btn btn-primary my-3">Kembali</a>
    <h3 class="my-3">Update Data</h3>
    <form method="POST" action="proses_update_data_discount.php" enctype="multipart/form-data">
    <input type="hidden" name="id_Produk" value="<?php echo $x['id_produk']; ?>">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Kode Produk</label>
        <input name="kode_Produk" type="text" class="form-control" id="nama_produk" aria-describedby="emailHelp" value="<?php echo $x['kode_produk']; ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
        <input name="nama_Produk" type="text" class="form-control" id="nama_produk" aria-describedby="emailHelp" value="<?php echo $x['nama_produk']; ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga Sebelum Diskon</label>
        <input name="harga_awal" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $x['harga_awal']; ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Harga Sesudah Diskon</label>
        <input name="harga_Produk" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $x['harga_produk']; ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Diskon Produk</label>
        <input name="diskon_produk" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $x['diskon_produk']; ?>">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stock Produk</label>
        <input name="stock_Produk" type="text" class="form-control" id="stock_produk" aria-describedby="emailHelp" value="<?php echo $x['stock_produk']; ?>">
      </div>
      <div class="mb-3">
        <label for="floatingTextarea2">Deskripsi Produk</label>
        <textarea class="form-control" name="detail_Produk" id="floatingTextarea2" style="height: 200px"><?php echo $x['detail_produk']; ?></textarea>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Gambar Produk</label>
        <img src="gambar_diskon/<?php echo $x['foto_produk']; ?>" width="40" class="mb-2">
        <input class="form-control text-center" type="file" id="formFile" name="gambar_Produk">
        <p class="text-danger p-3">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
      </div>
      <div class="mb-3">
        <button type="Submit" class="btn btn-primary my-3 text-center px-5">Update Data</button>
      </div>
    </form>
  </div>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>