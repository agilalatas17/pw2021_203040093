<?php
    require 'functions.php';

    // cek tombol ditekan atau belum
    if(isset($_POST["tambah"])) {
        if(tambah($_POST) > 0) {
            echo "<script> alert ('data berhasil ditambahkan!');document.location.href='index.php';</script>";
        } else {
            echo "<script> alert ('data gagal ditambahkan!');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama :
                    <input type="text" name="nama" id="nama" required>
                </label>
            </li>
            <li>
                <label for="nrp">NRP :
                    <input type="text" name="nrp" id="nrp" required>
                </label>
            </li>
            <li>
                <label for="email">Email :
                    <input type="text" name="email" id="email" required>
                </label>
            </li>
            <li>
                <label for="jurusan">Jurusan :
                    <input type="text" name="jurusan" id="jurusan" required>
                </label>
            </li>
            <li>
                <label for="gambar">Gambar :
                    <input type="text" name="gambar" id="gambar" required>
                </label>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>