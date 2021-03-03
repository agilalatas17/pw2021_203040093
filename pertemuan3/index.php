<?php
/*
    R.S AHMAD AGIL ALATAS
    203040093
    https://github.com/agilalatas17/pw2021_203040093
    Pertemuan 3, 18 Februari 2021
    Materi minggu ini mengenai Pengulangan
*/

// PENGULANGAN
    //  for
        // Sintaks : for (inisialisasi; kondisi terminasi; ++/--)
        for  ($i = 0; $i < 5; $i++) {
            echo "Hello, World! <br>";
        }

    //  while
        // Sintaks : while (kondisi) {lakukan..}
        $a = 0;
        while ($a <= 8) {
            echo "Nama saya Agil Alatas <br>";
            $a++;
        }

    // do.. while
        $i = 0;
        do {
            echo "Hello World!";
            $i++;
        } while ($i < 5);
        
    // foreach : pengulangan khusus array

?>

<!-- LATIHAN -->
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Pertemuan 3, Latihan1</title>

     <style>
        .ubah-warna {
            background-color: grey;
        }
     </style>
 </head>
 <body>
    <table border="1" cellspacing="0" cellpadding="10">
    <?php for($baris = 1; $baris <= 5; $baris++) : ?>
        <?php if($baris % 2 == 1) : ?>
            <tr class="ubah-warna">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for($kolom = 1; $kolom <= 5; $kolom++) : ?>
                <td><?= $baris ?>, <?= $kolom ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
    </table>
 </body>
 </html>