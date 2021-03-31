<?php
    // Melakukan koneksi ke Database
    $connect = mysqli_connect("localhost", "root", "");

    // Memilih Database
    mysqli_select_db($connect, "pw_tubes_203040093");

    // Melakukan Query dari database
    $result = mysqli_query($connect, "SELECT * FROM daftar_buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        text-align: center;
      }
      
      img {
        width: 200px;
      }
    </style>
    <title>Toko Buku</title>
</head>
<body>
<div class="buku">
  <h2>Toko Buku<h2>
  <table cellpadding="15" cellspacing="0" border="1">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Judul Buku</th>
      <th>Deskripsi</th>
      <th>Penulis</th>
      <th>Penerbit</th>
      <th>Tahun Terbit</th>
      <th>Harga</th>
    </tr>

    <?php $i = 1; while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><img src="./assets/img/<?= $row["gambar"]; ?>"></td>    
      <td><?= $row["judul_buku"]; ?></td>
      <td><?= $row["deskripsi"]; ?></td>
      <td><?= $row["penulis"]; ?></td>
      <td><?= $row["tahun_terbit"]; ?></td>
      <td><?= $row["penerbit"]; ?></td>
      <td><?= $row["harga"]; ?></td>
    </tr>
    <?php $i++; endwhile; ?>
  </table>
</body>
</html>