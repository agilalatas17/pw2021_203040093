<?php
    function koneksi() {
       return  $conn = mysqli_connect('localhost', 'root', '', 'pw_203040093'); 
    }

    function query($query) {
        $conn = koneksi();
        $result = mysqli_query($conn, $query);

        $rows = [];
        while ($row = mysqli_fetch_assoc($result) == 1) {
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data) {
        $conn = koneksi();

        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar'";

        mysqli_query($conn, $query);

        echo mysqli_error($conn);

        return mysqli_affected_rows($conn);
    }
?>