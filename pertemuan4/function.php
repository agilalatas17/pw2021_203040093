<?php
/*
    R.S AHMAD AGIL ALATAS
    203040093
    https://github.com/agilalatas17/pw2021_203040093
    Pertemuan 3, 18 Februari 2021
    Materi minggu ini mengenai Konsep Function
*/

// Function adalah potongan program atau baris-baris kode untuk mempermudah dalam membuat suatu program.
// Function yang kita buat bisa di beri nama dan dipakai berulang-ulang.

// Ada 2 jenis function
// 1.Function Built-in Function ==> fungsi yang disediakan oleh PHP.
// 2.User-Defined Function ==> fungsi yang dibuat sendiri.

// CONTOH BUILT-IN FUNCTION
    // Date ==> untuk menampilkan tanggal tertentu.
    echo date("l, d-M-Y");

    // Time ==> untuk menampilkan waktu.
    echo "<br>";
    echo date("l", time() + 60 * 60 * 24 * 100);  // Menghitung 100 hari kedepan.

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0);
    // jam, menit, detik, bulan, tanggal, tahun
    echo "<br>";
    echo mktime(0, 0, 0, 8, 25, 2001), " detik yang sudah berlalu dari 1 Januari 1970";
    
    // strtotime
    echo "<br>";
    echo date("l", strtotime("17 sept 2001")); // kebalikan dari mktime perbedaan nya adalah menggunakan string.

// STRING
// strlen() ==> menghitung panjang sebuah string.
// strcmp() ==> menggabungkan 2 buah string.
// explode() ==> memecah sebuah string menjadi Array.
// htmlspecialchars() ==> function khusus untuk menjaga web dari orang jahat (hacker).

// UTILITY
// var_dump() ==> function untuk mencetak isi dari sebuah variabel, array, objek.
// isset() ==> mengecek sebuah variabel apakah sudah pernah dibuat atau belum (mengembalikan nilai true/false).
// empty() ==> mengecek sebuah variabel mempunyai nilai atau tidak.
// die()  ==> memberhentikan program yang dibuat.
// sleep() ==> memberhentikan program yang dibuat beberapa saat.


// CONTOH USER-DEFINED FUNCTION
// langkah membuat user-defined function :
// function didefinisikan terlebih dahulu lalu panggil function nya.
    function salam($nama) {
        return "Selamat Datang, $nama!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh dari user-defined function</title>
</head>
<body>
    <p>text dibawah dibuat dengan user defined function</p>
    <h2><?= salam("Agil Alatas"); ?></h2>
</body>
</html>
