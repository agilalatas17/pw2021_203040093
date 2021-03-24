<?php 
/*
    R.S AHMAD AGIL ALATAS
    203040093
    https://github.com/agilalatas17/pw2021_203040093
    Pertemuan 2 (18 Februari 2021)
    Materi minggu ini mempelajari mengenai penggunaan sintaks PHP Dasar
*/

// Sintaks Dasar PHP
    /* 
    Standar Output
    echo, print ==> mencetak tulisan, variabel.
    print_r ==> mencetak isi array.
    var_dump ==> melihat isi dari variabel, yang nantinya akan menampilkan informasi dari variabel tsb.

    print_r dan var_dump digunakan pada saat tahap Development (debugging).
    */


    var_dump ("Agil Alatas"); // menghasilkan hasil String(11) ==> tipe data String dan panjangnya 11 karakter.
    var_dump (123); // menghasilkan hasil int(123).
    var_dump (true); // menghasilkan hasil boolean(true).

//Penulisan sintaks PHP
    // 1. PHP didalam HTML
        /*
        <!DOCTYPE html>
            <head>
                <title>PHP didalam HTML</title>
            </head>
            <body>
                <h1>Selamat Datang <?php echo "Ahmad Agil Alatas"; ?></h1>   
            </body>
        </html>
        */


    // 2. HTML didalam PHP
        /*
        <?php echo "<h1>Selamat Datang, Ahmad Agil Alatas</h1>" ?>
        */

// Variabel dan Tipe Data
    // Variabel
    // diawali dengan tanda dollar ($).
    // tidak boleh diawali angka tapi boleh mengandung angka.
    // tidak boleh menggunakan spasi dan tanda mines (-).
    // $1nama //tidak boleh diawali dengan angka.
    // $nama1;

    // Operator
    // aritmatika
    // + - * / % 
        $x = 10;
        $y = 10;
        
        echo $x + $y;

    // Penggabungan string / Concatenation / Concat
    // menggunakan titik (.)
        $nama_depan = "Agil";
        $nama_belakang = "Alatas";

        echo $nama_depan . " " . $nama_belakang;

    // ASSIGNMENT
    // operator penugasan
    // =, +=,-=, *=, /=, %=, .=
        $x = 10;
        $x += 7;

        echo $x;

    // PERBANDINGAN
    // <, >, <=, >=, ==, !=
    // var_dumb (1 == "1"); ==> akan menghasilkan bool true, karena operator perbandingan hanya mengecek nilai bukan tipe data nya.

    // IDENTITAS
    // ===, !==
    // var_dumb (1 === "1"); ==> akan menghasilkan boolen false.

    // LOGIKA
    // &&, ||, ! (and, or, not)
    // $a = 10;
    // var_dumb ($a < 20 && $a % 2 == 0); ==> menghasilkan bool true
?>