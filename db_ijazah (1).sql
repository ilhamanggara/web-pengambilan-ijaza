-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2019 at 03:16 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ijazah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`, `status`) VALUES
('admin_baa', '$2y$10$P.8tIaYMUoUfItmtfXpfderaeb6n7V4v6ax0BNE9EGDWwPuiZs4su', 'baa'),
('admin_perpus', '$2y$10$Yd2.wNEf1RhI.wpuZMrBluDzGj6CphmcfFPLAYq8W/ymDcuAoiQW6', 'perpus');

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` int(5) NOT NULL,
  `npm` text NOT NULL,
  `skripsi` text NOT NULL,
  `poster` text NOT NULL,
  `jurnal` text NOT NULL,
  `ebook` text NOT NULL,
  `kwitansi` text NOT NULL,
  `buku` text NOT NULL,
  `verf_perpus` varchar(1) NOT NULL DEFAULT 't',
  `ver_baa` varchar(1) NOT NULL DEFAULT 't',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `npm`, `skripsi`, `poster`, `jurnal`, `ebook`, `kwitansi`, `buku`, `verf_perpus`, `ver_baa`, `created_at`) VALUES
(4, '14411036', '15503127841.pdf', '15503127842.pdf', '15503127843.pdf', '15503127844.pdf', '15503127845.pdf', '15503127846.pdf', 'y', 'y', '2019-02-16 17:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `npm` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `prodi` varchar(30) DEFAULT NULL,
  `faklutas` varchar(30) DEFAULT NULL,
  `angkatan` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`npm`, `password`, `nama`, `prodi`, `faklutas`, `angkatan`) VALUES
('14411036', '$2y$10$Z0lPMInTL/0QFLOupUcKT.Z2GnFWlqZZ8tVgvx2tS2gl5SynaXXcu', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
