-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 09:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siudin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `waktu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `isi`, `waktu`) VALUES
(1, 'haiii', '05/16/2022 01:37:27 pm'),
(2, 'saya', '05/16/2022 01:37:32 pm'),
(3, 'sedang', '05/16/2022 01:37:37 pm'),
(4, 'testing', '05/16/2022 01:37:43 pm'),
(5, 'testing', '05/16/2022 01:42:49 pm'),
(6, 'tes', '05/16/2022 01:44:48 pm'),
(7, 'trrr', '05/16/2022 01:45:12 pm'),
(8, 'test', '05/16/2022 01:47:15 pm'),
(9, 'berhasil??', '05/16/2022 01:47:23 pm'),
(10, 'mantappp', '05/16/2022 01:47:29 pm'),
(11, 'testing lagiii', '05/16/2022 01:48:47 pm'),
(12, 'masih good gan', '05/16/2022 01:48:52 pm'),
(13, 'aaa udinus mantap djiwa nilai selalu a berkat teman teman yang membantu mengerjakan hingga akhir.', '05/16/2022 02:16:45 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
