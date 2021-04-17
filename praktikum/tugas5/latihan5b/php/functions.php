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

    // Menambahkan data didalam database
    function tambah($data) {
        $conn = koneksi_db();

        // Upload Gambar
        $gambar = upload();
        if (!$gambar) {
            return false;
        }

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

    // Fungsi Upload Gambar
    function upload () {
        $fileName = $_FILES['gambar']['name'];
        $fileSize = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // cek gambar yang di upload
        if($error === 4) {
            echo "<script>
                    alert('Gambar belum di Masukkan!');    
                </script>";
            return false;
        }

        // cek upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $fileName);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('Yang Anda upload bukan gambar');
                </script>";
            return false;
        }

        //cek ukuran gambar 
        if($fileSize > 1000000) {
            echo "<script>
                    alert('Ukuran terlalu Besar, Maksimal 2MB');
                </script>";
            return false;
        }

        //generate nama gambar baru
        $newFileName = uniqid();
        $newFileName .= '.';
        $newFileName .= $ekstensiGambar;

        // gambar siap di upload
        move_uploaded_file($tmpName, '../assets/img/' . $fileName);
        return $fileName;
    }
?>