<!-- 
    R.S AHMAD AGIL ALATAS
    203040093
    https://github.com/agilalatas17/pw2021_203040093
    Pertemuan 3, 18 Februari 2021
    Materi minggu ini mengenai Array Associative. latihan1
    -->

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
            margin: 5px;
            background-color: lightblue;
            text-align: center;
            line-height: 50px;
            float: left;
            transition: 1s;
        }

        .box:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>

    <title>Document</title>
</head>
<body>
    <?php
    $angka = [ [1, 2, 3], [4, 5, 6], [7, 8, 9] ];
    //echo $angka[1][1];  // menampilkan angka 5 pada array multidimensi 
    ?>

    <?php foreach($angka as $a) : ?>
        <?php foreach($a as $i) : ?>
            <div class="box"><?= $i; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>