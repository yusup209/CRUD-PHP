-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 06:12 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_kakarief`
--
CREATE DATABASE IF NOT EXISTS `crud_kakarief` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crud_kakarief`;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

DROP TABLE IF EXISTS `sekolah`;
CREATE TABLE IF NOT EXISTS `sekolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id`, `nama`, `alamat`, `logo`) VALUES
(3, 'test', 'tesg', '1-CBR150R-BLACK-RED.jpg'),
(4, 'Alexi Anugrah Sanchez', 'Gang H.Otong', 'detektif-conan-versi-indonesia.png'),
(5, 'Geo panjat tebing', 'Elang terbang rendah', 'java.png'),
(6, 'robot', 'Jonggol', 'tmp-cam--629757209.jpg'),
(7, 'Ossas', 'Jongool', '20171118_095716.jpg'),
(8, 'sQL InJection', 'Rusia', 'sQlInjection.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
