<?php
    session_start();
    
    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
        exit;
    }
    require "functions.php";

    // ambil id dari url
    $id = $_GET['id'];

    // query mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
    

    // cek tombol ditekan atau belum
    if(isset($_POST["ubah"])) {
        if(ubah($_POST) > 0) {
            echo "<script> alert ('data berhasil diubah!');document.location.href='index.php';</script>";
        } else {
            echo "<script> alert ('data gagal diubah!');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <input type="hidden" name="id" id="nama" required value="<?= $mhs['id']; ?>">
            </li>
            <li>
                <label for="nama">Nama :
                    <input type="text" name="nama" id="nama" required value="<?= $mhs['nama']; ?>">
                </label>
            </li>
            <li>
                <label for="nrp">NRP :
                    <input type="text" name="nrp" id="nrp" required value="<?= $mhs['nrp']; ?>">
                </label>
            </li>
            <li>
                <label for="email">Email :
                    <input type="text" name="email" id="email" required value="<?= $mhs['email']; ?>">
                </label>
            </li>
            <li>
                <label for="jurusan">Jurusan :
                    <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs['jurusan']; ?>">
                </label>
            </li>
            <li>
                <label for="gambar">Gambar :
                    <input type="text" name="gambar" id="gambar" required value="<?= $mhs['gambar']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>

</html>