-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 11:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecthotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(2, 'restika', 'fab3d8a979ed09cdb0fef09b705d3717', 'Dinda Putri '),
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Dinda Putri Restika'),
(7, 'd', '8277e0910d750195b448797616e091ad', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `jeniskamar`
--

CREATE TABLE `jeniskamar` (
  `id_jenis` varchar(5) NOT NULL,
  `nama_jenis` varchar(100) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `pelayanan` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jeniskamar`
--

INSERT INTO `jeniskamar` (`id_jenis`, `nama_jenis`, `fasilitas`, `pelayanan`, `harga`) VALUES
('STD', 'Standar Room', 'Kasur Standar, TV, Meja, Kamar Mandi, Kulkas', 'CS, Breakfast, Dinner', 600000),
('SUP', 'Superior Room', 'Kasur Besar, TV, Meja, Kamar Mandi, Kulkas', 'CS, Breakfast, Dinner', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomor_kamar` int(11) DEFAULT NULL,
  `jenis_kamar` varchar(5) DEFAULT NULL,
  `status_kamar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nomor_kamar`, `jenis_kamar`, `status_kamar`) VALUES
(7, 2, 'STD', 'Used'),
(8, 3, 'STD', 'Used'),
(9, 4, 'STD', 'Not Used'),
(10, 5, 'SUP', 'Not Used'),
(11, 6, 'SUP', 'Not Used');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nomor_hp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `username`, `password`, `status`, `alamat`, `nomor_hp`) VALUES
(1, 'Dinda Putri', 'restika', '202cb962ac59075b964b07152d234b70', 'Belum Menikah', 'Tangen', '081216213301');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_pengunjung` int(11) DEFAULT NULL,
  `id_jeniskamar` varchar(5) DEFAULT NULL,
  `check_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `total_hari` int(11) DEFAULT NULL,
  `jumlah_dewasa` int(11) DEFAULT NULL,
  `jumlah_anak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_pengunjung`, `id_jeniskamar`, `check_in`, `check_out`, `total_hari`, `jumlah_dewasa`, `jumlah_anak`) VALUES
(1, 1, 'STD', '2021-06-18', '2021-06-21', 3, 2, 1),
(2, 1, 'SUP', '2021-06-19', '2021-06-21', 2, 1, 1),
(3, 1, 'SUP', '2021-06-18', '2021-06-22', 4, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jeniskamar`
--
ALTER TABLE `jeniskamar`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`),
  ADD KEY `keyjenis` (`jenis_kamar`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `keypengunjung` (`id_pengunjung`),
  ADD KEY `keyjeniskamar` (`id_jeniskamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`jenis_kamar`) REFERENCES `jeniskamar` (`id_jenis`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`id_pengunjung`) REFERENCES `pengunjung` (`id_pengunjung`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_3` FOREIGN KEY (`id_jeniskamar`) REFERENCES `jeniskamar` (`id_jenis`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
