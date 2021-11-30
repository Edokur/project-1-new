<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
    <h1>Katalog data</h1>
    <a href="tambah_data.php" class="btn btn-primary">Tambah Data</a>

    <table border="1">
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Jumlah Stock</th>
        <th>Deskripsi Produk</th>
        <th>OPSI</th>
      </tr>
        <?php 
        include "conection_database.php";
        $no = 1;
        $data = mysqli_query($con, "SELECT * FROM Produk");
        while ($x = mysqli_fetch_array($data)) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nama_produk']; ?></td>
        <td><?php echo $x['harga_produk']; ?></td>
        <td><?php echo $x['stock_produk']; ?></td>
        <td><?php echo $x['deskripsi_produk']; ?></td>
        <td>
					<a href="edit.php?id=<?php echo $x['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $x['id']; ?>">HAPUS</a>
				</td>
      </tr>
      <?php
        }
        ?>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>