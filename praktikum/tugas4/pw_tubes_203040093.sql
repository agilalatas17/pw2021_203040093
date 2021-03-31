-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 03:15 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

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
  `id_buku` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `penulis` varchar(100) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `harga` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_buku`
--

INSERT INTO `daftar_buku` (`id_buku`, `gambar`, `judul_buku`, `deskripsi`, `penulis`, `tahun_terbit`, `penerbit`, `harga`) VALUES
(1, 'Microcontroller_Menguasai_Arduino.jpg', 'Microcontroller Menguasai Arduino', 'Membuat perangkat elektronik super canggih dijaman sekarang tidaklah harus repot-repot belajar selama bertahun-tahun.', 'Indra Susanto, S.Kom.', 2018, 'TEKNOSAIN', '129.999'),
(2, 'Fungsi_Statistika.jpg', 'Fungsi Statistika untuk Menganalisis Data', 'Bukan hanya berisi fungsi-fungsi statistik saja, tetapi juga keseluruhan fungsi-fungsi pendukung yang memungkinkan kita bekerja dalam bidang statistik. Meliputi persiapan data dan pengolahan data sebelum dilakukan perhitungan menggunakan fungsi-fungsi statistik.', 'Adi Kusrianto', 2019, 'ELEX MEDIA KOMPUTINDO', '56.999'),
(3, 'PHP_Gila_2.jpg', 'PHP Gila 2! 65 TRIK APLIKATIF MASTER PHP', 'Berbeda konsep dari buku PHP Gila yang sudah diterbitkan sebelumnya yang menyertakan bonus proyek pada buku, pada buku kali ini tidak ada bonus Proyek, tetapi hanya menyertakan bonus Full Source Code yang dibahas dalam buku ini.', 'Agus Saputra', 2017, 'CV. ASFA SOLUTION', '84.999'),
(4, 'Belajar_Pemrograman_Android.jpg', 'Belajar Pemrograman Android Untuk Semua Kebutuhan', 'Buku dengan Judul “Belajar Pemrograman Android untuk Semua Kebutuhan” ini berisi bagaimana membuat program Android dengan bahasa Java.', 'Ir. Yanuar Supardi', 2019, 'ELEX MEDIA KOMPUTINDO', '79.999'),
(5, 'Perancangan_Basis_Data.jpg', 'Perancangan Basis Data', 'Saat ini kita hidup di era informasi di mana keberadaan informasi begitu melimpah dan mudah diakses oleh siapa saja melalui internet. Hal ini tidak terkecuali informasi terkait perancangan basis data di media internet yang berbahasa Indonesia.', 'Raden Budiarto', 2019, 'TEKNOSAIN', '206.999'),
(6, 'Desain_Database.jpg', 'Desain Database dengan ERD dan LRS', 'Buku ini berisi konsep database yang di dalamnya dibahas tentang definisi, manfaat, kelebihan dan kekurangan database sampai pada konsep penggunaan tipe data. Konsep dari database system dan database relasional dijelaskan dalam buku ini.', 'Anik Andriani, dkk', 2019, 'TEKNOSAIN', '134.999'),
(7, 'membuat_website.jpg', 'Cepat, Praktis dan Gratis Membuat Website', 'Buku ini hadir untuk memandumu membuat website dengan cepat, mudah, praktis, dan pastinya gratis. Melalui buku ini, kamu akan dipandu untuk membuat website memakai platform gratis di internet.', 'Jefferly Helianthusonfri', 2019, 'ELEX MEDIA KOMPUTINDO', '67.999'),
(8, 'hacking_carding.jpg', 'Bongkar Rahasia Security dengan TEKNIK HACKING dan CARDING', 'Buku ini akan menunjukkan kepada kamu bagaimana sistem E-Banking dilakukan, mulai dari cara kerja, sistem keamanan beserta kelemahannya, termasuk pula cara mengeksploitasinya.', 'Vyctoria', 2013, 'ANDI', '79.999'),
(9, 'framework_laravel_6.jpg', 'PANDUAN PRAKTIS DAN JITU FRAMEWORK LARAVEL 6', 'Membuat program aplikasi di Windows memang sudah biasa, namun bagaimana bila kita membuatnya di OS linux? Tentu inilah adalah hal yang sangat luar biasa.⁣', 'Anton Subagia', 2020, 'CV. ASIA SOLUTION', '64.999'),
(10, 'belajar_mudah_python.jpg', 'Belajar Mudah Python dengan Package Open Source', 'Python merupakan bahasa intrepreter yang banyak digunakan untuk kepentingan akademis, riset, bahkan para praktisi umum dikarenakan tersedianya package-package yang siap pakai mulai dari untuk komputasi numerik, array, olah grafik, sinyal, machine learning, dan computer vision.', 'Mulkan Syarif', 2018, 'TEKNOSAIN', '110.999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_buku`
--
ALTER TABLE `daftar_buku`
  MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
