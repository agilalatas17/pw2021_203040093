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
    <!-- my css -->
    <link rel="stylesheet" href="./css/index.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Daftar Buku</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr class="bg-success text-center text-white">
                    <th scope="col">No.</th>
                    <th scope="col" colspan="2">Buku</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($toko_buku as $buku) : ?>
                <tr>
                    <td>
                        <div class="id-buku">
                            <p class="text-center"><?= $buku["id"]; ?>.</p>
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
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>