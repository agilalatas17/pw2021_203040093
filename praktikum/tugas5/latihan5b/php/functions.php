<?php
    //melakukan koneksi ke database
    function koneksi_db() {
        $conn = mysqli_connect ("localhost", "root", "");
        mysqli_select_db ($conn, "pw_tubes_203040093");

        return $conn;
    }

    // melakukan query dan memasukkan ke dalam array
    function query($sql) {
        $conn = koneksi_db();
        $result = mysqli_query($conn, "$sql");
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // fungsi untuk menambahkan data didalam database
    function tambah($data) {
        $conn = koneksi_db();

        $gambar = htmlspecialchars($data['gambar']);
        $judul_buku = htmlspecialchars($data['judul_buku']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $penulis = htmlspecialchars($data['penulis']);
        $tahun_terbit = htmlspecialchars($data['tahun_terbit']);
        $penerbit = htmlspecialchars($data['penerbit']);
        $stok = htmlspecialchars($data['stok']);
        $harga = htmlspecialchars($data['harga']);

        $query = "INSERT INTO daftar_buku VALUES
                    ('', '$gambar', '$judul_buku', '$deskripsi', '$penulis', '$tahun_terbit', '$penerbit', '$stok', '$harga')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>