<!-- 
    R.S AHMAD AGIL ALATAS
    203040093
    Praktikum Web Programming, Kamis jam 8
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Latihan3e_203040092</title>
</head>
<style>
* {
  margin: 0;
  padding: 0;
  text-align: center;
}

h2 {
  margin: 20px 0;
}

table {
  display: inline-flexbox;
  font-size: 15px;
  padding-right: 50px;
}

img {
  width: 200px;
}
</style>
<body>
    <?php
    $toko_buku = [
      [
        "no" => "1",
        "gambar" => "Fungsi_Statistika.jpg",
        "judul_buku" => "Fungsi Statistika untuk Menganalisis Data",
        "deskripsi" => "Bukan hanya berisi fungsi-fungsi statistik saja, tetapi juga keseluruhan fungsi-fungsi pendukung yang memungkinkan kita bekerja dalam bidang statistik. Meliputi persiapan data dan pengolahan data sebelum dilakukan perhitungan menggunakan fungsi-fungsi statistik.",
        "penulis" => "Adi Kusrianto",
        "penerbit" => "ELEX MEDIA KOMPUTINDO",
        "tahun_terbit" => "2019",
        "harga" => "56.999"
      ],

      [
        "no" => "2",
        "gambar" => "Microcontroller_Menguasai_Arduino.jpg",
        "judul_buku" => "Microcontroller Menguasai Arduino",
        "deskripsi" => "Membuat perangkat elektronik super canggih dijaman sekarang tidaklah harus repot-repot belajar selama bertahun-tahun.",
        "penulis" => "Indra Susanto, S.Kom.",
        "penerbit" => "TEKNOSAIN",
        "tahun_terbit" => "2018",
        "harga" => "129.999"
      ],

      [
        "no" => "3",
        "gambar" => "PHP_Gila_2.jpg",
        "judul_buku" => "PHP Gila 2! 65 TRIK APLIKATIF MASTER PHP",
        "deskripsi" => "Berbeda konsep dari buku PHP Gila yang sudah diterbitkan sebelumnya yang menyertakan bonus proyek pada buku, pada buku kali ini tidak ada bonus Proyek, tetapi hanya menyertakan bonus Full Source Code yang dibahas dalam buku ini.",
        "penulis" => "Agus Saputra",
        "penerbit" => "CV. ASFA SOLUTION",
        "tahun_terbit" => "2017",
        "harga" => "84.999"
      ],

      [
        "no" => "4",
        "gambar" => "Belajar_Pemrograman_Android.jpg",
        "judul_buku" => "Belajar Pemrograman Android Untuk Semua Kebutuhan",
        "deskripsi" => "Buku dengan Judul “Belajar Pemrograman Android untuk Semua Kebutuhan” ini berisi bagaimana membuat program Android dengan bahasa Java.⁣",
        "penulis" => "Ir. Yanuar Supardi",
        "penerbit" => "ELEX MEDIA KOMPUTINDO",
        "tahun_terbit" => "2019",
        "harga" => "79.999"
      ],

      [
        "no" => "5",
        "gambar" => "Perancangan_Basis_Data.jpg",
        "judul_buku" => "Perancangan Basis Data",
        "deskripsi" => "Saat ini kita hidup di era informasi di mana keberadaan informasi begitu melimpah dan mudah diakses oleh siapa saja melalui internet. Hal ini tidak terkecuali informasi terkait perancangan basis data di media internet yang berbahasa Indonesia.",
        "penulis" => "Raden Budiarto",
        "penerbit" => "TEKNOSAIN",
        "tahun_terbit" => "2019",
        "harga" => "206.999"
      ],

      [
        "no" => "6",
        "gambar" => "Desain_Database.jpg",
        "judul_buku" => "Desain Database dengan ERD dan LRS",
        "deskripsi" => "Buku ini berisi konsep database yang di dalamnya dibahas tentang definisi, manfaat, kelebihan dan kekurangan database sampai pada konsep penggunaan tipe data. Konsep dari database system dan database relasional dijelaskan dalam buku ini.",
        "penulis" => "Anik Andriani, dkk",
        "penerbit" => "TEKNOSAIN",
        "tahun_terbit" => "2019",
        "harga" => "134.999"
      ],
    ];
?>
<div class="buku">
    <h2>Toko Buku<h2>
    <table class="table table-bordered table-info table-hover "  >
  <thead>
  <tbody>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Harga</th>
    </tr>
    <?php foreach ($toko_buku as $buku) { ?>
        <tr>
            <td><?= $buku["no"]; ?></td>
            <td><img src="img/<?= $buku["gambar"]?>"></td>    
            <td><?= $buku["judul_buku"]; ?><br></td>
            <td><?= $buku["deskripsi"]; ?><br></td>
            <td><?= $buku["penulis"]; ?><br></td>
            <td><?= $buku["penerbit"]; ?><br></td>
            <td><?= $buku["tahun_terbit"]; ?><br></td>
            <td><?= $buku["harga"]; ?><br></td>

        </tr>   
      </tbody>
  </thead>
  <?php } ?>
</table>
</body>
</html>