<!-- 
    R.S AHMAD AGIL ALATAS
    203040093
    Praktikum Web Programming, Kamis jam 8
 -->

<?php
$pemain = [
    "Mohammad Salah",
    "Ronaldo Wati",
    "Lionel Messi",
    "Zlatan Ibramovic",
    "Neymar"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Pemain bola terkenal</h3>
    <ol>
        <?php foreach ($pemain as $bola) : ?>
            <li><?php echo $bola; ?></li>
        <?php endforeach; ?>
    </ol>
    <br>

    <?php
    $pemain [] = "Luca Modric";
    $pemain [] = "Sadio Mane";
    sort($pemain);
    ?>

<h3>Daftar Pemain bola terkenal baru</h3>
    <ol>
        <?php foreach ($pemain as $bola) : ?>
            <li><?php echo $bola; ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>