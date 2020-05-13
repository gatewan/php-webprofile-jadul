-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2014 at 02:54 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rekayasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE IF NOT EXISTS `mhs` (
  `id_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(80) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jurusan` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hobi` varchar(80) NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`id_mhs`, `nama`, `jk`, `jurusan`, `alamat`, `hobi`) VALUES
(1, 'kharisma', 'L', 'Teknik Informatika', 'Jogja', 'Renang,Baca Buku,Touring'),
(2, 'ok', 'L', 'Teknik Informatika', 'ok', 'Renang,Baca Buku'),
(3, 'dodolan', 'L', 'Teknik Informatika', 'oke', 'Renang'),
(4, 'aku rapopo', 'L', 'Teknik Komputer', 'okokok', 'Renang,Baca Buku,Touring');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
