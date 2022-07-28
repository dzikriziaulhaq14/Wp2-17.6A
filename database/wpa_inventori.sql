-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 08:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpa_inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(8) DEFAULT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `satuan` enum('Pcs','Unit','Box') DEFAULT 'Pcs',
  `id_operator` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga_barang`, `satuan`, `id_operator`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'a1', 'tas', 10000, 'Pcs', 1, '2022-06-20 17:17:33', '2022-06-20 17:17:33', NULL),
(5, 'a2', 'jas', 15000, 'Pcs', 1, '2022-06-20 17:19:36', '2022-06-20 17:19:36', NULL),
(6, 'a3', 'sendal', 20000, 'Pcs', 1, '2022-06-20 17:22:18', '2022-06-20 17:22:18', NULL),
(7, '14', 'pensil', 2000, 'Pcs', 1, '2022-06-20 18:06:06', '2022-06-20 18:06:06', '2022-06-23 19:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_keluar`
--

CREATE TABLE `tbl_barang_keluar` (
  `id_barang_keluar` int(11) NOT NULL,
  `qty_keluar` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_operator` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_keluar`
--

INSERT INTO `tbl_barang_keluar` (`id_barang_keluar`, `qty_keluar`, `id_barang`, `id_operator`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 4, 1, '2022-06-20 17:20:31', '2022-06-20 17:20:31', NULL),
(2, 0, 4, 1, '2022-06-20 17:21:50', '2022-06-20 17:21:50', NULL),
(3, 2, 4, 1, '2022-07-25 13:46:07', '2022-07-25 13:46:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang_masuk`
--

CREATE TABLE `tbl_barang_masuk` (
  `id_barang_masuk` int(11) NOT NULL,
  `qty_masuk` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_operator` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang_masuk`
--

INSERT INTO `tbl_barang_masuk` (`id_barang_masuk`, `qty_masuk`, `id_barang`, `id_operator`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 4, 1, '2022-06-20 17:20:04', '2022-06-20 17:20:04', NULL),
(2, 2, 6, 1, '2022-06-23 19:31:39', '2022-06-23 19:31:39', NULL),
(3, 7, 6, 3, '2022-06-23 19:48:25', '2022-06-23 19:48:25', NULL),
(4, 100, 4, 3, '2022-07-25 13:37:48', '2022-07-25 13:37:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operator`
--

CREATE TABLE `tbl_operator` (
  `id_operator` int(11) NOT NULL,
  `nama_operator` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `created_at` datetime DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_operator`
--

INSERT INTO `tbl_operator` (`id_operator`, `nama_operator`, `username`, `password`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'kim sunwoo', 'lsnwoo', '', 'lwnsoo@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(3, 'kim sunwoo', 'kimsunwoo', '', 'meirynda31@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(5, 'admin', 'root', '', 'admin@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2022-06-23 19:31:08'),
(6, 'ilham', 'dzikri14', '636256', 'dzikriiskandar14@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(7, 'meirynda', 'admin', 'admin', 'meirynda31@gmail.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_barang_keluar`
--
ALTER TABLE `tbl_barang_keluar`
  ADD PRIMARY KEY (`id_barang_keluar`);

--
-- Indexes for table `tbl_barang_masuk`
--
ALTER TABLE `tbl_barang_masuk`
  ADD PRIMARY KEY (`id_barang_masuk`);

--
-- Indexes for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_barang_keluar`
--
ALTER TABLE `tbl_barang_keluar`
  MODIFY `id_barang_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_barang_masuk`
--
ALTER TABLE `tbl_barang_masuk`
  MODIFY `id_barang_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  MODIFY `id_operator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
