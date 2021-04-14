<?php
    // Menghubungkan dengan file PHP lainnya
    require 'functions.php';

    // Melakukan Query
    $toko_buku = query("SELECT * FROM daftar_buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css" />

    <!-- my css -->
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Halaman Admin</title>
</head>

<body>
    <div class="container-fluid">
        <table class="table-bordered flex-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Opsi</th>
                    <th>Gambar</th>
                    <th>Judul Buku</th>
                    <!-- <th>Deskripsi</th> -->
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>Stok Buku</th>
                    <th>Harga</th>
                </tr>
            </thead>

            <?php $i = 1; ?>
            <?php foreach ($toko_buku as $buku) : ?>
            <tbody>
                <tr>
                    <td>
                        <?= $i; ?>
                    </td>
                    <td>
                        <div class=" wrapper-option-btn">
                            <a href=""><button type="button" class="btn btn-primary btn-sm">Ubah</button></a>
                            <a href=""><button type="button" class="btn btn-secondary btn-sm">Hapus</button></a>
                        </div>
                    </td>
                    <td>
                        <img src="../assets/img/<?= $buku["gambar"]; ?>" alt="">
                    </td>
                    <td><?= $buku["judul_buku"]; ?></td>
                    <!-- <td><?= $buku["deskripsi"]; ?></td> -->
                    <td><?= $buku["penulis"]; ?></td>
                    <td><?= $buku["tahun_terbit"]; ?></td>
                    <td><?= $buku["penerbit"]; ?></td>
                    <td><?= $buku["stok"]; ?></td>
                    <td><?= $buku["harga"]; ?></td>
                </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>