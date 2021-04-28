<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // PAGINATION
    // Konfigurasi
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM daftar_buku"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

    $halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;

    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $toko_buku = query ("SELECT * FROM daftar_buku WHERE judul_buku LIKE '%$keyword%'");
    } else {
        $toko_buku = query ("SELECT * FROM daftar_buku LIMIT $awalData, $jumlahDataPerHalaman");
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

        <!-- NAVIGASI -->
        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <!-- Previous -->
                <?php if($halamanAktif > 1) : ?>
                <li class="page-item">
                    <a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php endif ?>


                <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if ($i == $halamanAktif): ?>
                <li class="page-item active">
                    <a class="page-link" href="?halaman=<?= $i; ?>">
                        <?= $i; ?>
                    </a>
                </li>
                <?php else : ?>
                <li class="page-item">
                    <a class="page-link" href="?halaman=<?= $i; ?>">
                        <?= $i; ?>
                    </a>
                </li>
                <?php endif; ?>
                <?php endfor; ?>

                <!-- Next -->
                <?php if($halamanAktif < $jumlahHalaman) : ?>
                <li class="page-item">
                    <a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
        <!-- End Navigation -->

    </div>
</body>

<!-- fontawesome js -->
<script src="./js/fontawesome.min.js"></script>

</html>