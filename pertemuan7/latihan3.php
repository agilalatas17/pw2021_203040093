<!--
R.S AHMAD AGIL ALATAS
203040093
https://github.com/agilalatas17/pw2021_203040093
Pertemuan 3, 18 Februari 2021
Materi minggu ini mengenai POST & GET
============================================================= -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if(isset($_POST["submit"])) : ?>
        <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?> </h1>
    <?php endif; ?>

    <form action="" method="post">
        <label for="nama">Masukkan Nama</label>
        <input type="text" name="nama" id="nama">

        <button type="submit" name="submit">KIRIM</button>
    </form>
</body>
</html>