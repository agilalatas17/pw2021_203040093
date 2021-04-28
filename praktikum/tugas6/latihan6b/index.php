<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $toko_buku = query ("SELECT * FROM daftar_buku WHERE judul_buku LIKE '%$keyword%' ");
    } else {
        $toko_buku = query ("SELECT * FROM daftar_buku");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="./css/fontawesome.min.css" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- my css -->
    <link rel="stylesheet" href="./css/index.css?v2">
    <title>Daftar Buku</title>
</head>

<body>
    <div class="container">
        <div class="wrapper-cta">
            <div class="go-to-admin-page">
                <a href="./php/login.php" class="btn btn-success">Masuk Ke Halaman
                    Admin</a>
            </div>
            <form class="search" action="" method="get">
                <div class="form-group">
                    <input type="text" class="form-control" name="keyword" autofocus>
                    <button type="submit" class="btn btn-info" name="cari"><i class="fas fa-search"></i></button>

                </div>
            </form>
        </div>



        <table class="table table-striped">
            <thead>
                <tr class="bg-success text-center text-white">
                    <th scope="col">No.</th>
                    <th scope="col" colspan="2">Buku</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($toko_buku)) : ?>
                <tr>
                    <td colspan="2" class="text-center">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
                <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach($toko_buku as $buku) : ?>
                <tr>
                    <td>
                        <div class="id-buku">
                            <p class="text-center"><?= $i; ?>.</p>
                        </div>
                    </td>
                    <td class="d-flex justify-content-between align-items-center">
                        <div class="judul-buku">
                            <p><?= $buku["judul_buku"]; ?></p>
                        </div>
                        <div class="btn-detail-buku">
                            <a class="btn btn btn-info btn-sm" href="./php/detail.php?id=<?= $buku["id"]; ?>">Lihat
                                Detail Buku</a>
                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

<!-- fontawesome js -->
<script src="./js/fontawesome.min.js"></script>

</html>