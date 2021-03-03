<!-- 
    R.S AHMAD AGIL ALATAS
    203040093
    Praktikum Web Programming, Kamis jam 8 
 -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

     <style>
        .warna-lightblue {
            background-color: lightblue;
        }

        .warna-salmon {
            background-color: salmon;
        }
     </style>
 </head>
 <body>
     <table border="1" cellspacing="5" cellpadding="10">
        <?php for($baris = 1; $baris <= 6; $baris++) : ?>
            <tr>
                <?php for($kolom = 1; $kolom <= 6; $kolom++) : ?>
                    <?php if(($baris + $kolom) % 2 == 1) { ?>
                        <td class="warna-lightblue"></td>
                    <?php } else if(($baris + $kolom) % 2 == 0) { ?>
                        <td class="warna-salmon"></td>
                    <?php } ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
     </table>
 </body>
 </html>