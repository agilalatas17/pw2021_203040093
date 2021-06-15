<?php
    session_start();
    require 'functions.php';

    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }

    $mahasiswa = query("SELECT * FROM mahasiswa");

    // ketika tombol cari diklik
    if(isset($_POST['cari'])) {
        $mahasiswa = cari($_POST['keyword']);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <a href="logout.php">Logout</a>
    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" autocomplete="off" placeholder="Masukkan Keyword Pencarian"
            autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php if(empty($mahasiswa)) : ?>
        <tr>
            <td colspan="4">
                <h1>Data Mahasiswa Tidak Ditemukan!</h1>
            </td>
        </tr>
        <?php endif; ?>

        <?php $i = 1;
        foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="120"></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a></td>
        </tr>
        <?php $i ++;
        endforeach; ?>
    </table>
</body>

</html>