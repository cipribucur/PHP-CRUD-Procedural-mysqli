-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2017 at 05:47 AM
-- Server version: 5.5.55-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `jenkel` enum('laki-laki','perempuan') DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` enum('admin','user') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `kelas`, `jenkel`, `password`, `level`) VALUES
(1, 'arafik', 'tkj', 'laki-laki', 'bojes123', 'admin'),
(2, 'putri', 'mm', 'perempuan', 'putri94', 'user'),
(6, 'bojes', 'rpl', 'laki-laki', '123', 'user'),
(7, 'lukman', 'tkj', 'laki-laki', 'lukman94', 'user'),
(8, 'kukuh', 'pm', 'laki-laki', 'kukuhmah', 'user'),
(9, 'aditya', 'rpl', 'laki-laki', 'adit08', 'user'),
(10, 'barkah', 'tkj', 'laki-laki', 'kama123', 'user'),
(11, 'anjas', 'tkj', 'laki-laki', '123req', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
