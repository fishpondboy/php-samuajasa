-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 06:04 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_samuajasa`
--
CREATE DATABASE IF NOT EXISTS `db_samuajasa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_samuajasa`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `id_client` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` bigint(13) NOT NULL,
  `alamat` longtext NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jasa`
--

CREATE TABLE IF NOT EXISTS `tbl_jasa` (
  `id_jasa` varchar(7) NOT NULL,
  `jasa` varchar(50) NOT NULL,
  `rating` int(3) DEFAULT NULL,
  `harga` bigint(255) DEFAULT NULL,
  `eta_pengerjaan` int(10) DEFAULT NULL,
  `ket` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jasa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jasa`
--

INSERT INTO `tbl_jasa` (`id_jasa`, `jasa`, `rating`, `harga`, `eta_pengerjaan`, `ket`) VALUES
('SJ0001', 'Catering', NULL, 50000, NULL, 'Menyedia katering untuk acara'),
('SJ0002', 'Instalasi CCTV dan PUBX', NULL, 25000, NULL, 'Membantu pemasangan CCTV '),
('SJ0003', 'Reparasi AC', NULL, 75000, NULL, 'Memperbaiki AC yang rusak'),
('SJ0004', 'Tes Psikotes', NULL, 100000, NULL, 'Menyediakan Tes Psikotes'),
('SJ0005', 'Potong Rambut', NULL, 30000, NULL, 'Memotong Rambut dimanapun anda berada'),
('SJ0006', 'Pemasangan Ubin Tehel', NULL, 50000, NULL, 'Memasang Ubin atau Tehel di Rumah anda');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE IF NOT EXISTS `tbl_pesan` (
  `id_pesan` varchar(7) NOT NULL,
  `id_jasa` varchar(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trx`
--

CREATE TABLE IF NOT EXISTS `tbl_trx` (
  `id_trx` varchar(7) NOT NULL,
  `id_client` varchar(7) NOT NULL,
  `id_vendor` varchar(7) NOT NULL,
  `waktu` date NOT NULL,
  `feedback` longtext NOT NULL,
  PRIMARY KEY (`id_trx`),
  KEY `id_client` (`id_client`),
  KEY `id_vendor` (`id_vendor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE IF NOT EXISTS `tbl_vendor` (
  `id_vendor` varchar(7) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `id_jasa` varchar(7) NOT NULL,
  `kontak` varchar(13) DEFAULT NULL,
  `alamat` longtext,
  PRIMARY KEY (`id_vendor`),
  KEY `id_jasa` (`id_jasa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`id_vendor`, `vendor`, `id_jasa`, `kontak`, `alamat`) VALUES
('VND001', 'Telly Catering', 'SJ0001', '08526023593', NULL),
('VND002', 'Esther Catering', 'SJ0001', NULL, NULL),
('VND003', 'Tuti & Friends', 'SJ0002', '082189819095', NULL),
('VND004', 'Yap and Team', 'SJ0003', '085299973833', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_trx`
--
ALTER TABLE `tbl_trx`
  ADD CONSTRAINT `tbl_trx_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `tbl_client` (`id_client`),
  ADD CONSTRAINT `tbl_trx_ibfk_2` FOREIGN KEY (`id_vendor`) REFERENCES `tbl_vendor` (`id_vendor`);

--
-- Constraints for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD CONSTRAINT `tbl_vendor_ibfk_1` FOREIGN KEY (`id_jasa`) REFERENCES `tbl_jasa` (`id_jasa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
