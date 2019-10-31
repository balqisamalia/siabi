-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2019 at 03:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(5) NOT NULL,
  `kode_brg` varchar(5) NOT NULL,
  `tgl_msk` date NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `nm_kantor` varchar(100) NOT NULL,
  `jml_brg` int(100) NOT NULL,
  `sat_brg` varchar(100) NOT NULL,
  `tot_hrg` int(100) NOT NULL,
  `hrg_brg` int(10) NOT NULL,
  `status_brg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `kode_brg`, `tgl_msk`, `nm_brg`, `nm_kantor`, `jml_brg`, `sat_brg`, `tot_hrg`, `hrg_brg`, `status_brg`) VALUES
(4, 'AO18', '0000-00-00', 'Kompor', 'Kantor Kas Gang Besen', 5, '', 0, 1900000, 'Penyusutan'),
(5, 'BP30', '0000-00-00', 'Printer', '', 2, '', 0, 1000000, 'ya'),
(7, 'KOP89', '2019-06-29', 'kursi', 'mijen', 70, '', 0, 90000, 'aktif'),
(8, 'KOP89', '2019-06-12', 'ac', 'smg4', 90, '', 0, 80000, 'aktif'),
(13, 'A0123', '2019-10-10', 'HP', 'Kantor Pusat Semarang', 9, 'unit', 0, 100000, ''),
(14, 'lk0', '2019-10-24', 'hp', 'smg walter mangonsidi', 900, 'pack', 0, 8000, 'Aktif'),
(15, 'KP8', '2019-10-18', 'Pulpen', 'kds1 cbg kudus', 100, 'pcs', 350000, 3500, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`) VALUES
(1, 'dian', '123', 'hrd'),
(2, 'lala', '321', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_brg`
--

CREATE TABLE `pengajuan_brg` (
  `id_pengajuan` int(5) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nm_brg` varchar(50) NOT NULL,
  `nm_kantor` varchar(50) NOT NULL,
  `jml_brg` int(100) NOT NULL,
  `sat_brg` varchar(100) NOT NULL,
  `hrg_brg` int(20) NOT NULL,
  `tot_hrg` int(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengajuan_brg`
--

INSERT INTO `pengajuan_brg` (`id_pengajuan`, `tgl_pengajuan`, `nm_brg`, `nm_kantor`, `jml_brg`, `sat_brg`, `hrg_brg`, `tot_hrg`, `ket`) VALUES
(1, '2019-06-08', 'Kipas angin kosmos', '', 3, '0', 800000, 0, 'untuk kantor pusat'),
(2, '0000-00-00', 'kjkjhka', 'smg ketileng', 4, '0', 80000, 0, ''),
(6, '2019-06-06', 'laptop', 'smg ketileng', 8, '0', 9000000, 0, ''),
(7, '2019-10-14', 'Pulpen', 'Kantor kas Kudus', 100, 'pack', 2000, 200000, 'edisi terbaru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pengajuan_brg`
--
ALTER TABLE `pengajuan_brg`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan_brg`
--
ALTER TABLE `pengajuan_brg`
  MODIFY `id_pengajuan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
