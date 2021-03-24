<!-- 
    R.S AHMAD AGIL ALATAS
    203040093
    Praktikum Web Programming, Kamis jam 8
 -->

<?php
    $pemain = [[ "nama"   => "Cristiano Ronaldo",
                 "klub"   => "Juventus",
                 "Main"   => "100",
                 "Gol"    => "76",
                 "Assist" => "30"],
                
                 ["nama"   => "Lionel Messi",
                  "klub"   => "Barcelona",
                  "Main"   => "120",
                  "Gol"    => "80",
                  "Assist" => "12"],

                ["nama"   => "Luca Modric",
                 "klub"   => "Real Madrid",
                 "Main"   => "87",
                 "Gol"    => "12",
                 "Assist" => "48"],

                ["nama"  => "Mohammad Salah",
                "klub"   => "Liverpool",
                "Main"   => "90",
                "Gol"    => "103",
                "Assist" => "8"],

                ["nama"  => "Neymar Jr",
                "klub"   => "Paris Saint Germain",
                "Main"   => "109",
                "Gol"    => "56",
                "Assist" => "15"],

                ["nama"  => "Sadio Mane",
                "klub"   => "Liverpool",
                "Main"   => "63",
                "Gol"    => "30",
                "Assist" => "70"],

                ["nama"  => "Zlatan Ibrahimovic",
                "klub"   => "Ac Milan",
                "Main"   => "100",
                "Gol"    => "10",
                "Assist" => "12"]
            ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>   
    <?php
    $no = 1; $assist = 0;

    $goal = 0; $main = 0;
    ?>

        <table border="2px" cellpadding="8px" cellspacing="0px">

            <tr>
            <td><h3>No</h3></td>
            <td><h3>Nama</h3></td>
            <td><h3>Klub</h3></td>
            <td><h3>Main</h3></td>
            <td><h3>Gol</h3></td>
            <td><h3>Assist</h3></td>
            </tr>

                <?php foreach ($pemain as $bola) :?>
                    <tr>
                       
                        <td><?php echo $no;?></td>
                        <?php $no++ ?>
                        <td><?php echo "$bola[nama]" ; ?></td>
                        <td><?php echo "$bola[klub]" ; ?></td>
                        <td><?php echo "$bola[Main]" ; ?></td>
                        <td><?php echo "$bola[Gol]" ; ?></td>
                        <td><?php echo "$bola[Assist]" ; ?></td>

                        <?php $main+="$bola[Main]"?>
                        <?php $goal+="$bola[Gol]"?>
                        <?php $assist+="$bola[Assist]"?>
                    </tr>
                <?php endforeach; ?>

                <tr>
                <td>#</td>
                <td colspan="2" text-align="center">Jumlah</td>
                <td><?php echo $main;?></td>
                <td><?php echo $goal;?></td>
                <td><?php echo $assist;?></td>
                </tr>
        </table>
</body>
</html>