-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 09:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_0039`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_users_0039`
--

CREATE TABLE `tb_users_0039` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jns_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` char(13) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users_0039`
--

INSERT INTO `tb_users_0039` (`id`, `nama`, `jns_kelamin`, `alamat`, `nohp`, `gambar`) VALUES
(3, 'nemo', 'Laki-laki', 'samudra pasifik', '0852', 0x75706c6f6164732f363731343938373464626564622e6a706567),
(5, 'dory', 'Laki-laki', 'pantai utara california', '0857', 0x75706c6f6164732f363731343938643063376566352e6a706567),
(6, 'mcqueen', 'Laki-laki', 'amerika', '0851', 0x75706c6f6164732f363731343961333833346466342e6a706567);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_users_0039`
--
ALTER TABLE `tb_users_0039`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_users_0039`
--
ALTER TABLE `tb_users_0039`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
