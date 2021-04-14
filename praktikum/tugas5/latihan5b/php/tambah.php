<?php
    require 'functions.php';

    if(isset($_POST["tambah"])) {
        var_dump($_POST); die;

        if(tambah($_POST) > 0) {
            echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
        </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/tambah.css" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <title>Tambah Data Buku</title>
</head>

<body>
    <div class="form-wrapper">
        <h3>Form Tambah Data Buku</h3>

        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="gambar">Gambar</label>
                    <input type="file" class="custom-file-input" name="gambar" id="gambar" required>
                </li>
                <li>
                    <label for="judul-buku">Judul Buku</label>
                    <input type="text" name="judul_buku" id="judul-buku">
                </li>
                <li>
                    <label for="desk">Deskripsi</label>
                    <textarea name="deskripsi" id="desk" cols="30" rows="10"></textarea>
                </li>
                <li>
                    <label for="penulis">Penulis</label>
                    <input type="text" name="penulis" id="penulis">
                </li>
                <li>
                    <label for="tahun-terbit">Tahun Terbit</label>
                    <input type="text" name="tahun_terbit" id="tahun-terbit">
                </li>
                <li>
                    <label for="penerbit">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit">
                </li>
                <li>
                    <label for="stok">Stok Buku</label>
                    <input type="text" name="stok" id="stok">
                </li>
                <li>
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga">
                </li>
                <br>
                <button type="submit" name="tambah">Tambah Data!</button>
                <button type="submit">
                    <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>
</body>

</html>