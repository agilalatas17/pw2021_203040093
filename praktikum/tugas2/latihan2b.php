<!-- 
    R.S AHMAD AGIL ALATAS
    203040093
    Praktikum Web Programming, Kamis jam 8
 -->

<?php
$jawabanIsset = "Isset adalah = untuk memeriksa apakah variabel disetel dengan nilai atau tidak, mengembalikan nilai true ketika variabel tidak null sedangkan Empty. <br><br>";

$jawabanEmpty = "Empty adalah = untuk memeriksa apakah variabel yang diberikan kosong atau tidak,  mengembalikan true jika variabel adalah string kosong.";

function soal($style) {
    global $jawabanIsset, $jawabanEmpty;
    return "<p class='$style'>$jawabanIsset, $jawabanEmpty</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .style {
            border: 2px solid black;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <?= soal('style'); ?>;
</body>
</html>

