<?php
/*
    R.S AHMAD AGIL ALATAS
    203040093
    https://github.com/agilalatas17/pw2021_203040093
    Pertemuan 3, 18 Februari 2021
    Materi minggu ini mengenai Array (Latihan1 menampilkan element array menggunakan perulangan).
*/



// Pengulangan pada Array
// for / foreach
$angka = [3, 2, 15, 20, 11, 77, 89];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .box {
            width: 50px;
            height: 50px;
            margin: 3px;
            background-color: lightblue;
            line-height: 50px;
            text-align: center;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>

    <title>Document</title>
</head>
<body>
<?php for($i = 0; $i < count($angka); $i++) : ?>
    <div class="box"> <?= $angka[$i]; ?> </div>
<?php endfor; ?>

<div class="clear"></div>

<?php foreach($angka as $a) : ?>
    <div class="box"> <?= $a; ?> </div>
<?php endforeach; ?>
</body>
</html>