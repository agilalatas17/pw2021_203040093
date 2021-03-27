<?php
// R.S AHMAD AGIL ALATAS
// 203040093
// https://github.com/agilalatas17/pw2021_203040093
// Pertemuan 3, 18 Februari 2021
// Materi minggu ini mengenai POST & GET
// =============================================================


// Variabel Scope
// $x = 10; // Variabel scope untuk halamannya.

// function tampilX() {
    // $x = 20; ==> variabel scope untuk function

    // global $x; // mengambil variabel x yang berada diluar function atau disebut variabel global.
//     echo $x; 
// }

// tampilX();
// echo "<br>";

// =============================================================================================================

// SUPERGLOBALS
// variabel milik PHP yang bisa kita akses dimanapun dan kapanpun didalam halaman PHP yang kita buat.
// merupakan Array Associative

// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_COOKIE
// $_ENV


// $_GET
// metode request GET dengan variabel superglobal $_GET itu berbeda
// var_dump($_GET); // Berisi array associative yang kosong

//cara mengisi nilai array associative
// $_GET ["nama"] = "Agil Alatas";
// $_GET ["nrp"] = "203040093";
// $_GET ["jurusan"] = "Teknik Informatika";

// echo "<br>";
// var_dump($_GET);

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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&email=<?= $mhs["email"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>