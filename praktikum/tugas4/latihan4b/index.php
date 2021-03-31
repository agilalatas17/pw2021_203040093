<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $toko_buku = query("SELECT * FROM daftar_buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Toko Buku</title>
</head>
<body>
<div class="buku">
  <h2>Toko Buku<h2>
  <table cellpadding="10" cellspacing="0" border="1">
    <tr>
    <th>No.</th>
      <th class="table-head">Gambar</th>
      <th class="table-head">Judul Buku</th>
      <th class="table-head">Deskripsi</th>
      <th class="table-head">Penulis</th>
      <th class="table-head">Penerbit</th>
      <th class="table-head">Tahun Terbit</th>
      <th class="table-head">Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach($toko_buku as $buku) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><img src="./assets/img/<?= $buku["gambar"]; ?>"></td>    
      <td><?= $buku["judul_buku"]; ?></td>
      <td><?= $buku["deskripsi"]; ?></td>
      <td><?= $buku["penulis"]; ?></td>
      <td><?= $buku["penerbit"]; ?></td>
      <td><?= $buku["tahun_terbit"]; ?></td>
      <td><?= $buku["harga"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>

</body>
</html>