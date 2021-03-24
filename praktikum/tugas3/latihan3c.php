<!-- 
    R.S AHMAD AGIL ALATAS
    203040093
    Praktikum Web Programming, Kamis jam 8
 -->

<?php
$pemain = [
    ["Mohammad Salah", "Liverpool"],
    ["Cristiano Ronaldo", "Juventus"], 
    ["Lionel Messi", "Barcelona"],
    ["Zlatan Ibramovic", "Ac Milan"],
    ["Neymar", "Paris Saint Germain"],
    ["Sadio Mane", "Liverpool"],
    ["Luca Modric", "Real Madrid"]
];
sort($pemain);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Pemain bola terkenal dan clubnya</h1>

    <table>
    
    <?php foreach ($pemain as $bola) : ?>
    <tr>
        <td><?= $bola [0]; ?></td>
        <td>:</td>
        <td><?= $bola [1]; ?></td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>