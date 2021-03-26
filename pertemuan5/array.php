<?php
/*
    R.S AHMAD AGIL ALATAS
    203040093
    https://github.com/agilalatas17/pw2021_203040093
    Pertemuan 3, 18 Februari 2021
    Materi minggu ini mengenai Array
*/

// Array ==> variabel yang dapat memiliki banyak nilai.
// Element pada array boleh memiliki tipe data berbeda.
// Pasangan antara Key dan Value.
// Key adalah Index, yang dimulai dari 0.
$array1 = [123, "tulisan", false];
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat",];

// Menampilkan Array
// menggunakan var_dump() atau print_r()    
var_dump($array1);   // Menampilkan index dan tipe datanya. pada tipe data string menampilkan jumlah karakternya.
echo "<br>";
print_r($array1);    // Hanya menampilkan index.

// Menampilkan 1 Elemen pada Array
echo "<br>", $hari[3]; // Menampilkan hari Kamis dari index ke-3 pada variabel hari.

// Menambahkan elemen baru pada Array
var_dump($hari);

$hari[] = "Sabtu";
$hari[] = "Minggu";

echo "<br>";

var_dump($hari);

?>