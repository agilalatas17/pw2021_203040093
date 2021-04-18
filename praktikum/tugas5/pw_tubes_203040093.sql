-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 09:11 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040093`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id` int(10) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `judul_buku` varchar(150) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `stok` int(4) DEFAULT NULL,
  `harga` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_buku`
--

INSERT INTO `daftar_buku` (`id`, `gambar`, `judul_buku`, `deskripsi`, `penulis`, `tahun_terbit`, `penerbit`, `stok`, `harga`) VALUES
(1, 'belajar_mudah_python.jpg', 'Belajar Mudah Python dengan Package Open Source', 'Python merupakan bahasa intrepreter yang banyak digunakan untuk kepentingan akademis, riset, bahkan para praktisi umum dikarenakan tersedianya package-package yang siap pakai mulai dari untuk komputasi numerik, array, olah grafik, sinyal, machine learning, dan computer vision.', 'Mulkan Syarif', 2018, 'TEKNOSAIN', 15, '110.999'),
(2, 'Belajar_Pemrograman_Android.jpg', 'Belajar Pemrograman Android Untuk Semua Kebutuhan', 'Keunggulan buku ini, yaitu memandu kamudengan mudah dan cepat belajar membuat program Android yang dapat dipakai semua kalangan, termasuk untuk mahasiswa. Buku ini juga mempunyai nilai lebih, yakni pembahasan yang detail atau rinci. Dengan banyaknya contoh aplikasi, kamu akan semakin memahami cara membuat program Android dengan mudah.⁣', 'Ir. Yanuar Supardi', 2019, 'ELEX MEDIA KOMPUTINDO', 12, '79.999'),
(3, 'Desain_Database.jpg', 'Desain Database dengan ERD dan LRS', 'Buku ini berisi konsep database yang di dalamnya dibahas tentang definisi, manfaat, kelebihan dan kekurangan database sampai pada konsep penggunaan tipe data. Konsep dari database system dan database relasional dijelaskan dalam buku ini. Buku berisi pembahasan utama tentang perancangan database menggunakan ERD dan LRS dimana sebelumnya dijelaskan terlebih dahulu konsep dari ERD dan LRS, simbol-simbol yang digunakan dalam ERD dan LRS yang diikuti dengan contoh penggunaannya.', 'Anik Andriani, dkk', 2019, 'TEKNOSAIN', 15, '134.999'),
(4, 'framework_laravel_6.jpg', 'Panduan Praktis Dan Jitu Menguasai Framework Laravel 6', 'Buku ini membahas tentang secara step by step dari mulai melakukan instalasi PostgreSQL dan PgAdmin, instalasi Composer dan Laravel 6, operasi CRUD, implementasi CRUD dengan AJAX, membuat PDF, barcode, import dan export file Excel, konversi tanggal dan mata uang, dan berbagai macam trik Laravel 6 lainnya. Menariknya buku ini disertai Bonus Source Code sebagai Referensi belajar kamu.⁣', 'Anton Subagia', 2020, 'CV. ASFA SOLUTION', 20, '64.999'),
(5, 'Fungsi_Statistika.jpg', 'Fungsi Statistika untuk Menganalisis Data', 'Perlu Anda ketahui pula bahwa bila Anda bekerja dengan Excel 2010 ternyata banyak nama-nama fungsi Excel yang diubah; lebih disesuaikan agar nama konsisten dengan kegunaannya. Fungsi-fungsi statistik adalah salah satu kelompok yang banyak memperoleh pembenahan. Jelas ini sangat mempermudah bagi para pemakai Excel karena nama-nama yang semula terasa janggal dan sulit dikenali serta dihafal sekarang menjadi nama yang lebih konsisten dengan gunanya.', 'Adi kusrianto', 2019, 'ELEX MEDIA KOMPUTINDO', 14, '56.999'),
(6, 'hacking_carding.jpg', 'Bongkar Rahasia E-Banking Security dengan Teknik Hacking dan Carding', 'Buku ini akan menunjukkan kepada kamu bagaimana sistem E-Banking dilakukan, mulai dari cara kerja, sistem keamanan beserta kelemahannya, termasuk pula cara mengeksploitasinya. Begitu pula dengan pembahasan Carding, juga akan menjelaskan cara kerja, bagaimana mendapatkannya dan sebagainya.⁣', 'Vyctoria', 2013, 'ANDI', 13, '79.999'),
(7, 'membuat_website.jpg', 'Cepat, Praktis dan Gratis Membuat Website', 'Buku ini hadir untuk memandumu membuat website dengan cepat, mudah, praktis, dan pastinya gratis. Melalui buku ini, kamu akan dipandu untuk membuat website memakai platform gratis di internet. Dijamin kamu bisa membuat web bisnis yang keren dengan mudah dan cepat.', 'Jefferly Helianthusonfri', 2019, 'ELEX MEDIA KOMPUTINDO', 18, '67.999'),
(8, 'Microcontroller_Menguasai_Arduino.jpg', 'Microcontroller Menguasai Arduino', 'Di dalam buku ini kamu akan di perkenalkan dengan Arduino, bagaimana menyambungnya dengan komponen-komponen elektronik (LED, transistor, Resistor, dll), sensor, shield ekstended, Motor Stepper, Layar LCD, Layar TV, menguasai Code Sketch dan komunikasi antar perangkat Arduino melalui standar yang sudah ditentukan.', 'Indra Susanto S.Kom.', 2018, 'TEKNOSAIN', 8, '129.999'),
(9, 'Perancangan_Basis_Data.jpg', 'PERANCANGAN BASIS DATA', 'Saat ini kita hidup di era informasi di mana keberadaan informasi begitu melimpah dan mudah diakses oleh siapa saja melalui internet. Hal ini tidak terkecuali informasi terkait perancangan basis data di media internet yang berbahasa Indonesia. Bagaimana pun berdasarkan penelitian membuktikan lebih dari 90% sumber informasi tersebut ternyata tidak akurat, tidak lengkap atau tidak jelas. Ditambah lagi keberadaan buku teks seputar basis data saat ini masih cenderung menjelaskan apa atau bagaimana t', 'Raden Budiarto', 2019, 'TEKNOSAIN', 11, '206.999'),
(10, 'PHP_Gila_2.jpg', 'PHP Gila 2! 65 Trik Aplikatif Master PHP Paling Dicari!', 'uku ini membahas berbagai hal yang dihadapi oleh para developer, bisa dikatakan ini adalah Trik Ampuh para Master PHP, dibahas berbagai macam trik yang dibagi dalam 11 konsentrasi, dimulai dari Trik Menguasai PHP Excel, Editor WYSIWYG, PHP PDF, PHP Pagination, PHP Email, PHP Barcode, PHP Ekspedisi Online, Tracking Online, Google Maps API, GitHub (Sharing Version Control), hingga kepada Trik Menguasai PHP Payment Online, yaitu bagaimana membuat pembayaran secara online menggunakan PayPal, iPayMu,', 'Agus Saputra', 2017, 'CV. ASFA SOLUTION', 18, '84.999'),
(13, '607b013fdfc9c.jpg', 'Teknologi Jaringan Wireless', 'Jaringan Wireless adalah teknologi yang saat ini banyak diperbincangkan, Jaringan Wireless atau sering disebut Jaringan Tanpa Kabel atau Jaringan Nirkabel adalah jaringan yang memungkinkan orang-orang untuk berkomunikasi, mengakses aplikasi dan informasi tanpa menggunakan kabel.⁣\r\n⁣\r\nWireless Local Area Network (W-LAN) yang lebih dikenal dengan sebutan Wi-Fi (wireless fidelity), bahkan telah menjadi suatu brand name baru yang dikenal luas, terutama kalau berbicara mengenai hotspot Wi-Fi – tempat', 'Janner Simmarmata, dkk', 2019, 'TEKNOSAIN', 21, '139.999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
