<?php
    require '../functions.php';
    $mahasiswa = cari($_GET['keyword']);
?>

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