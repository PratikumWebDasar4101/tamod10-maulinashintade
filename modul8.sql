-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2018 pada 04.15
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul8`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta9_mahasiswa`
--

CREATE TABLE `ta9_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_depan` text NOT NULL,
  `nama_belakang` text NOT NULL,
  `kelas` text NOT NULL,
  `hobi` text NOT NULL,
  `film` text NOT NULL,
  `wisata` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ta9_mahasiswa`
--

INSERT INTO `ta9_mahasiswa` (`nim`, `nama_depan`, `nama_belakang`, `kelas`, `hobi`, `film`, `wisata`, `tgl_lahir`, `email`) VALUES
('1502184058', 'Arif', 'Wijaya', 'MI-4101', 'Membaca', 'Action', 'Bali', '2018-10-31', 'arif@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ta9_user`
--

CREATE TABLE `ta9_user` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ta9_user`
--

INSERT INTO `ta9_user` (`username`, `password`) VALUES
('Ariefwjy__', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ta9_mahasiswa`
--
ALTER TABLE `ta9_mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
