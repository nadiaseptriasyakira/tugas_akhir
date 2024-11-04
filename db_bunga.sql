-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2024 pada 09.46
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bunga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bunga`
--

CREATE TABLE `tb_bunga` (
  `id_bunga` int(11) NOT NULL,
  `nama_bunga` varchar(200) NOT NULL,
  `macam_pupuk` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bunga`
--

INSERT INTO `tb_bunga` (`id_bunga`, `nama_bunga`, `macam_pupuk`) VALUES
(4, 'Kamboja', 'melarutkan bawang merah & putih,NPK'),
(5, 'Lily', 'ampas kopi,pupuk glanular'),
(6, 'Tulip', 'kompos,pupuk lepas lambat berimbang 10-10-10'),
(7, 'Anggrek', 'garam epsom,pupuk dekastar'),
(8, 'Telang', 'pupuk organik dan pupuk kalsium.'),
(9, 'Peony', 'Pupuk rendah nitrogen '),
(10, 'Kertas', 'pupuk NPK 5-5-5 atau pupuk NPK 10-10-10.'),
(11, 'matahari', 'organik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`) VALUES
(11, 'lily', 'lily', 1111),
(24, 'rifki', 'rifki', 2222),
(25, 'nadia', 'nadia', 3333),
(33, 'yaya', 'yaya', 4444),
(71, 'aya', 'aya', 5555),
(75, 'aulya', 'aulya', 6666),
(88, 'laura', 'laura', 7777);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bunga`
--
ALTER TABLE `tb_bunga`
  ADD PRIMARY KEY (`id_bunga`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bunga`
--
ALTER TABLE `tb_bunga`
  MODIFY `id_bunga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12986764;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11886701;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
