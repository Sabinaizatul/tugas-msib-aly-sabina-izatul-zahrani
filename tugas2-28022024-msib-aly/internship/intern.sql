-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Mar 2024 pada 15.21
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jobdesc` text NOT NULL,
  `jobstart` date NOT NULL,
  `jobend` date NOT NULL,
  `registerend` date NOT NULL,
  `jobadded` timestamp NOT NULL DEFAULT current_timestamp(),
  `lokasi` text NOT NULL,
  `workingtype` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `job`
--

INSERT INTO `job` (`id`, `nama`, `jobdesc`, `jobstart`, `jobend`, `registerend`, `jobadded`, `lokasi`, `workingtype`) VALUES
(1, 'Graphic Design', 'Berpengalaman dengan adobe illustrator, photoshop, dan bagus dalam mendesain.', '2024-04-01', '2024-06-01', '2024-03-28', '2024-03-13 07:31:39', 'Jakarta Pusat', 'WFH'),
(2, 'Bussiness analyst', 'Keahlian kuat dalam analisis data dan penggunaan alat analitik seperti SQL, Excel, R, atau Python.', '2024-03-15', '2024-05-22', '2024-03-10', '2024-03-15 06:51:52', 'Bandung', 'WFO'),
(3, 'Data Analyst', 'Memiliki kemampuan mengolah dan menganalisa data, mampu menggunakan Power BI / Google Looker Studio.', '2024-03-20', '2024-06-20', '2024-03-18', '2024-03-16 05:09:32', 'Yogyakarta', 'WFO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `idpendaftar` int(11) NOT NULL,
  `idjob` int(11) NOT NULL,
  `namapendaftar` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `portofolio` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`idpendaftar`, `idjob`, `namapendaftar`, `email`, `ttl`, `jenkel`, `alamat`, `telp`, `linkedin`, `portofolio`, `tanggal`) VALUES
(6, 3, 'Sabina', 'sabina@gmail.com', '2003-09-12', 'Perempuan', 'Brebes', '08987654321', 'www.linkedin.com', 'portofolio.my.id', '2024-03-16 05:16:24'),
(7, 1, 'Nana', 'nana@gmail.com', '2000-06-07', 'Perempuan', 'Semarang', '0812345678900', 'www.linkedin.com', 'portofolio.my.id', '2024-03-16 05:18:39'),
(8, 2, 'Dodi', 'dodi@gmail.com', '2000-03-12', 'Laki-Laki', 'Yogyakarta', '0812341234123', 'www.linkedin.com', 'portofolio.my.id', '2024-03-16 05:20:28'),
(9, 1, 'Lala', 'lala@gmail.com', '2002-06-03', 'Perempuan', 'Jakarta', '0812345678912', 'www.linkedin.com', 'portofolio.my.id', '2024-03-16 05:29:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`idpendaftar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `idpendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
