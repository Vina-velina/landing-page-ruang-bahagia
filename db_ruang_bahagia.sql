-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Mar 2021 pada 13.56
-- Versi server: 5.7.24
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ruang_bahagia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `browser` varchar(50) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `daerah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `ip_address`, `browser`, `platform`, `daerah`) VALUES
(1, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(2, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(3, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(4, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(5, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(6, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(7, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(8, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(9, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(10, '127.0.0.1', 'Firefox 86.0', 'Windows 10', ''),
(12, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'Mataram'),
(13, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'Mataram, West Nusa Tenggara'),
(14, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'Mataram, West Nusa Tenggara'),
(15, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(16, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(17, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(18, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(19, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(20, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(21, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(22, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(23, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(24, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(25, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(26, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(27, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(28, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(29, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(30, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(31, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(32, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(33, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(34, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null'),
(35, '127.0.0.1', 'Firefox 86.0', 'Windows 10', 'null, null');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
