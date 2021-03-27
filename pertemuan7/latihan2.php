<!--
R.S AHMAD AGIL ALATAS
203040093
https://github.com/agilalatas17/pw2021_203040093
Pertemuan 3, 18 Februari 2021
Materi minggu ini mengenai POST & GET
============================================================= -->

<?php
if (!isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"])) {
    //redirect
    header("location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        img {
            width: 100px;
            border-radius: 50%;
        }
    </style>

    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li>
            <img src="./img/<?= $_GET["gambar"]; ?>">
        </li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali ke daftar mahasiswa</a>
</body>
</html>