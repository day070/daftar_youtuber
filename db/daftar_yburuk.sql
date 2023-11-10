-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2023 pada 07.21
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_yburuk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_youtuber` int(10) NOT NULL,
  `Nama` varchar(60) NOT NULL,
  `Negara` varchar(60) NOT NULL,
  `J_konten` varchar(255) NOT NULL,
  `Rating` int(10) NOT NULL,
  `Deskripsi` text NOT NULL,
  `J_Subcriber` int(11) NOT NULL,
  `Nm_chanel` varchar(120) NOT NULL,
  `kasus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_youtuber`, `Nama`, `Negara`, `J_konten`, `Rating`, `Deskripsi`, `J_Subcriber`, `Nm_chanel`, `kasus`) VALUES
(1014, 'Gregory Chism', 'Amerika', 'Anak anak', 0, 'Gregory Chism adalah seorang ayah yang mendirikan channel \"Toy Freaks\", nah dari namanya aja udah aneh.\r\nDalam videonya memperlihatkan kebiasaannya mengerjai kedua putrinya, padahal usia putrinya masih di bawah 10 tahun lho bre.', 8500000, 'Toy Freaks', 'Merusak Psikologi Anak kecil.\r\n'),
(1015, 'Austin Jones', 'Amerika', 'MUsik', 0, 'Orang ini adalah penyanyi yang sudah mengumpulkan jutaan view di YouTube. Video yang di produksinya adalah cover music, sering kali yang di cover nya adalah lagu Justin Bieber.\r\nDia di tangkap di Bandara Chicago atas tuduhan terlibat pornografi anak di bawah umur yang membuatnya di tuntut penjara kurang lebih 15 tahun. ', 534359, 'Austin Jones', 'Pornografi Anak di bawah Umur.'),
(1016, 'Michael Martin', '', 'Anak Anak', 0, ' yang membuat Channel YouTube  \"DaddyOfive\". Sebagian besar videonya nunjukkin video yang seharusnya lucu, tapi itu sebenarnya cukup kejam bagi anak-anak.', 0, 'DaddyOfive ', ' Menyalahgunakan anak-anaknya demi viewer.'),
(1017, 'Logan Paul ', '', 'Horor', 0, 'Logan Paul merupakan salah satu vlogger paling sensasional di Youtube. Pelanggan channel nya sudah mencapai belasan juta dan sebagian besar di antaranya adalah remaja. Logan Paul menjadi sangat di benci setelah merekam dan menyebarkan video yang melibatkan mayat yang bunuh diri di Hutan Aokigahara Jepang yang di kenal sebagai \"Hutan Bunuh diri\".', 0, 'Logan Paul', 'Merekam Mayat orang yang Bunuh diri.\r\n'),
(1018, 'Daniel Keem', '', 'Pembahasan', 0, 'Daniel Keem adalah orang yang mendirikan channel DramaAlert, sejenis channel yang memberitakan pertikaian atau kesalahan2 yang dilakukan oleh Youtuber terkenal lainnya. \r\nDia menjadi sangat di benci karena menyebarkan kebencian dan menimbulkan komentar2 berbau rasis. \r\n', 0, 'DramaAlert', ' Sembarangan Menuduh orang Pedofilia.'),
(1019, ' Calvin Vail', '', 'Gamer', 0, 'Pada Maret 2016, Leafy membuat video yang menyinggung Youtuber TommyN2010 yang merupakan penyandang autis. Leafy mulai menyinggung dengan Lelucon Hitler dan menyebut bahwa Tommy kelihatan seperti orang yang kena penyakit Stroke.', 0, 'LeafyIsHere', 'Membuat penyandang disabilitas sebagai bahan tertawaan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', '$2y$10$PgUVxct2vL6ObupQCvJklezM/CKgLk9.LQ0jQZAmZeBg2WTcdyLKG', 'hidayat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_youtuber`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_youtuber` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
