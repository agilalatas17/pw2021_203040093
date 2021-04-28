<?php
    session_start();

    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit;
    }

    require 'functions.php';

    if(isset($_POST["tambah"])) {
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
    <link rel="stylesheet" href="../css/bootstrap.css?v2" />
    <title>Tambah Data Buku</title>
</head>

<body>
    <h1>Form Tambah Data Buku</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <div>
                <input type="file" class="form-control-file " name="gambar" id="gambar" required>
            </div>
        </div>
        </div>
        <div class="form-group">
            <label for="judul-buku">Judul Buku</label>
            <div>
                <input type="text" class="form-control" name="judul_buku" id="judul-buku" required>
            </div>
        </div>
        <div class="form-group">
            <label for="desk">Deskripsi</label>
            <div>
                <textarea class="form-control input-textarea" name="deskripsi" id="desk" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="penulis">Penulis</label>
            <div>
                <input type="text" class="form-control" name="penulis" id="penulis" required>
            </div>
        </div>
        <div class="form-group">
            <label for="tahun-terbit">Tahun Terbit</label>
            <div>
                <input type="number" class="form-control" name="tahun_terbit" id="tahun-terbit" required>
            </div>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <div>
                <input type="text" class="form-control" name="penerbit" id="penerbit" required>
            </div>
        </div>
        <div class="form-group">
            <label for="stok">Stok Buku</label>
            <div>
                <input type="number" class="form-control" name="stok" id="stok" required>
            </div>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <div>
                <input type="text" class="form-control" name="harga" id="harga" required>
            </div>
        </div>
        <div class="form-btn text-center">
            <button type="submit" class="add-btn btn btn-primary btn-lg btn-block mb-1 mt-6" name="tambah">Tambah
                Data!</button>
            <br>
            <button class="btn btn-secondary btn-lg">
                <a href="../index.php" class="text-white" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </div>

    </form>
</body>

</html>