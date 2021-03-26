<?php
// R.S AHMAD AGIL ALATAS
// 203040093
// https://github.com/agilalatas17/pw2021_203040093
// Pertemuan 3, 18 Februari 2021
// Materi minggu ini mengenai Array Associative. latihan1
// =========================================================

// Array Numerik
// key-nya (index) berupa angka dimulai dari 0.
// $mahasiswa = [
//     ["Agil Alatas", "203040093", "Teknik Informatika", "agilalatas17@gmail.com"],
//     ["Sediana Ahmad", "203040094", "Teknik Industri", "sedianaahmad@gmail.com"]
// ];

// Array Associative
// key-nya berupa string yang kita buat sendiri.
$mahasiswa = [
    [
        "nama"      => "Agil Alatas",
        "nrp"       => "203040093",
        "jurusan"   => "Teknik Informatika",
        "email"     => "agilalatas17@gmail.com",
        "gambar"    => "agilalatas.jpg"
    ],
    [
        "nama"      => "Sediana Ahmad",
        "nrp"       => "203010001",
        "jurusan"   => "Teknik Industri",
        "email"     => "sedianaahmad@gmail.com",
        "gambar"    => "ahmad.jpg"
    ]
];

// echo $mahasiswa[1]["email"];
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

    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="./img/<?= $mhs["gambar"]; ?>"</li>
        <li><?= $mhs["nama"]; ?></li>
        <li><?= $mhs["nrp"]; ?></li>
        <li><?= $mhs["jurusan"]; ?></li>
        <li><?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach ?>
</body>
</html>