-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2021 pada 07.36
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_member`
--

CREATE TABLE `tabel_member` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `hp` int(15) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `bayar` varchar(10) NOT NULL,
  `paket` varchar(10) NOT NULL,
  `jangka` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_member`
--

INSERT INTO `tabel_member` (`id`, `nama`, `email`, `alamat`, `hp`, `pekerjaan`, `jk`, `agama`, `bayar`, `paket`, `jangka`) VALUES
(10, 'Muhammad Althaf Firdaus', 'muhalthaf31@gmail.com', 'Perumahan Oma Indah Menganti, Blok C4-02', 982, 'Pegawai Negeri Sipil', 'Perempuan', 'islam', 'Tunai', 'Gold', '3 Bulan'),
(12, 'Sigitt', 'aaa@aa', 'Gresik', 8748842, 'Bank', 'Laki Laki', 'islam', 'Debit', 'Gold', '6 Bulan'),
(16, 'Yovie endrien', 'yopi@gmail.com', 'Nganjuk', 89895, 'Sales', 'laki-laki', 'islam', 'Pilih', 'diamond', '6'),
(17, 'Muhammad Althaf', 'muhalthaf31@gmail.com', 'Ngandong', 87846482, 'Pilot', 'laki-laki', 'islam', 'debit', 'platinum', '6'),
(19, 'fifi', 'muhalthaf31@gmail.com', 'Perum. Oma Indah Menganti', 878356261, 'Mahasiswa', 'Perempuan', 'islam', 'Tunai', 'Diamond', '3 Bulan'),
(20, 'Yovie', 'yovie@gmail.com', 'menganti', 878635613, 'Mahasiswa', 'laki-laki', 'islam', 'kredit', 'diamond', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_member`
--
ALTER TABLE `tabel_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_member`
--
ALTER TABLE `tabel_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
