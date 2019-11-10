-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2019 pada 08.37
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siabi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(5) NOT NULL,
  `kode_brg` varchar(5) NOT NULL,
  `tgl_msk` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nm_brg` varchar(50) NOT NULL,
  `nm_kantor` varchar(100) NOT NULL,
  `jml_brg` int(100) NOT NULL,
  `sat_brg` varchar(100) NOT NULL,
  `tot_hrg` int(100) NOT NULL,
  `hrg_brg` int(10) NOT NULL,
  `status_brg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `kode_brg`, `tgl_msk`, `nm_brg`, `nm_kantor`, `jml_brg`, `sat_brg`, `tot_hrg`, `hrg_brg`, `status_brg`) VALUES
(15, 'KPPP', '2019-10-17 17:00:00', 'Pulpen', 'Kantor Pusat Semarang', 100, 'pcs', 350000, 3500, 'Aktif'),
(16, 'AH254', '2019-10-24 17:00:00', 'ff', 'Kantor Kas Cepiring', 6, 'pcs', 36000, 6000, 'Aktif'),
(17, 'A205', '2019-10-31 16:48:30', 'hhhhg', 'Kantor Kas Ngaliyan', 2, 'pcs', 10000, 5000, 'Aktif'),
(24, 'A1OR2', '2019-11-04 05:00:14', 'tv', 'Kantor Kas Klaten', 8, 'unit', 72000, 9000, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'dian', '123', 'hrd'),
(2, 'lala', '321', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_brg`
--

CREATE TABLE `pengajuan_brg` (
  `id_pengajuan` int(5) NOT NULL,
  `tgl_pengajuan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nm_brg_pgj` varchar(50) NOT NULL,
  `nm_kantor_pgj` varchar(50) NOT NULL,
  `jml_brg_pgj` int(100) NOT NULL,
  `sat_brg_pgj` varchar(100) NOT NULL,
  `hrg_brg_pgj` int(20) NOT NULL,
  `tot_hrg_pgj` int(100) NOT NULL,
  `ket_pgj` text NOT NULL,
  `notif_pgj` varchar(100) NOT NULL DEFAULT 'Proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_brg`
--

INSERT INTO `pengajuan_brg` (`id_pengajuan`, `tgl_pengajuan`, `nm_brg_pgj`, `nm_kantor_pgj`, `jml_brg_pgj`, `sat_brg_pgj`, `hrg_brg_pgj`, `tot_hrg_pgj`, `ket_pgj`, `notif_pgj`) VALUES
(7, '2019-10-13 17:00:00', 'Pulpen', 'Kantor kas Kudus', 100, 'pack', 2000, 200000, 'edisi terbaru', 'Terima'),
(10, '2019-11-02 05:53:51', 'uuuuu', 'Kantor Kas Ketileng', 90, 'unit', 8000000, 720000000, 'ryrytfhg', 'Tolak'),
(11, '2019-11-04 05:06:59', 'uuuuu', 'Kantor Cabang Kendal', 1, 'unit', 10000, 10000, '', 'view');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `pengajuan_brg`
--
ALTER TABLE `pengajuan_brg`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_brg`
--
ALTER TABLE `pengajuan_brg`
  MODIFY `id_pengajuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
