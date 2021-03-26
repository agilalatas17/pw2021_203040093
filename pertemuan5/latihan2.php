<?php
/*
    R.S AHMAD AGIL ALATAS
    203040093
    https://github.com/agilalatas17/pw2021_203040093
    Pertemuan 3, 18 Februari 2021
    Materi minggu ini mengenai Array (Latihan2 Membuat sebuah data mahasiswa).
*/


$mahasiswa = [
    ["Agil Alatas", "203040093", "Teknik Informatika", "agilalatas17@gmail.com"],
    ["Dodot Jawa", "203040094", "Teknik Informatika", "dodotjawa123@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs[0] ?></li>
        <li><?= $mhs[1] ?></li>
        <li><?= $mhs[2] ?></li>
        <li><?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>