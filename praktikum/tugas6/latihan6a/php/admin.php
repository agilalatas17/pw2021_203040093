<?php
    // Menghubungkan dengan file PHP lainnya
    require 'functions.php';

    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $toko_buku = query ("SELECT * FROM daftar_buku WHERE
                    judul_buku LIKE '%$keyword%' OR        
                    penulis LIKE '%$keyword%' OR        
                    tahun_terbit LIKE '%$keyword%' OR        
                    penerbit LIKE '%$keyword%' ");
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

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css" />

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../css/fontawesome.min.css" />

    <!-- my css -->
    <link rel="stylesheet" href="../css/admin.css?v2" />
    <title>Halaman Admin</title>
</head>

<body>
    <div class="container-lg">
        <div class="add">
            <a href="tambah.php" class="btn btn-outline-info"><i class="fas fa-plus-circle"></i> Tambah Data</a>
        </div>

        <form class="search" action="" method="get">
            <div class="form-group">
                <input type="text" class="form-control" name="keyword" autofocus>
                <button type="submit" class="btn btn-info" name="cari"><i class="fas fa-search"></i></button>

            </div>
        </form>


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Opsi</th>
                    <th>Gambar</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Penerbit</th>
                    <th>Stok Buku</th>
                    <th>Harga</th>
                </tr>
            </thead>

            <!-- cek data di cari atau tidak -->
            <?php if (empty($toko_buku)) : ?>
            <tr>
                <td colspan="9">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($toko_buku as $buku) : ?>
            <tbody>
                <tr>
                    <td>
                        <b><?= $i; ?></b>
                    </td>
                    <td>
                        <div class=" wrapper-opt-btn">
                            <a href="ubah.php?id=<?= $buku['id']; ?>">
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i><br>Ubah
                                </button>
                            </a>
                            <a href="hapus.php?id=<?= $buku['id'] ?>" onclick="return confirm('Hapus Data?')">
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i><br>Hapus
                                </button>
                            </a>
                        </div>
                    </td>
                    <td>
                        <img src="../assets/img/<?= $buku["gambar"]; ?>" alt="">
                    </td>
                    <td><?= $buku["judul_buku"]; ?></td>
                    <td><?= $buku["penulis"]; ?></td>
                    <td><?= $buku["tahun_terbit"]; ?></td>
                    <td><?= $buku["penerbit"]; ?></td>
                    <td><?= $buku["stok"]; ?></td>
                    <td><?= $buku["harga"]; ?></td>
                </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>

    <!-- Fontawesome Js -->
    <script src="../js/fontawesome.min.js"></script>
</body>

</html>