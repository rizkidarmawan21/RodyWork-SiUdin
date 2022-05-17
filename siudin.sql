-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2022 at 01:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

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

DROP TABLE IF EXISTS `pesan`;
CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` varchar(255) NOT NULL,
  `waktu` varchar(255) DEFAULT NULL,
  `btnlike` int(11) DEFAULT '0',
  `btndislike` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `isi`, `waktu`, `btnlike`, `btndislike`) VALUES
(1, 'haiii', '05/16/2022 01:37:27 pm', 19, 0),
(2, 'saya', '05/16/2022 01:37:32 pm', 19, 0),
(3, 'sedang', '05/16/2022 01:37:37 pm', 19, 0),
(4, 'testing', '05/16/2022 01:37:43 pm', 19, 0),
(5, 'testing', '05/16/2022 01:42:49 pm', 19, 0),
(6, 'tes', '05/16/2022 01:44:48 pm', 19, 0),
(7, 'trrr', '05/16/2022 01:45:12 pm', 19, 0),
(8, 'test', '05/16/2022 01:47:15 pm', 19, 0),
(9, 'berhasil??', '05/16/2022 01:47:23 pm', 20, 0),
(10, 'mantappp', '05/16/2022 01:47:29 pm', 21, 0),
(11, 'testing lagiii', '05/16/2022 01:48:47 pm', 23, 0),
(23, 'hai', '05/16/2022 10:27:26 pm', 24, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
