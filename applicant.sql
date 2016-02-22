-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2016 at 02:45 PM
-- Server version: 5.6.14   EDIT222
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tes_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `A_ID` int(11) NOT NULL AUTO_INCREMENT,
  `A_NAMA` varchar(30) NOT NULL,
  `A_INST` varchar(100) NOT NULL,
  `A_DEPT` varchar(100) NOT NULL,
  `A_ALAMAT` varchar(255) NOT NULL,
  `A_KOTA` varchar(20) NOT NULL,
  `A_PROVINSI` varchar(25) NOT NULL,
  `A_KODE_POS` int(15) NOT NULL,
  `A_EMAIL` varchar(50) NOT NULL,
  `A_HP` varchar(20) NOT NULL,
  `A_GENDER` varchar(15) NOT NULL,
  `A_BIDANG` varchar(1000) NOT NULL,
  PRIMARY KEY (`A_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`A_ID`, `A_NAMA`, `A_INST`, `A_DEPT`, `A_ALAMAT`, `A_KOTA`, `A_PROVINSI`, `A_KODE_POS`, `A_EMAIL`, `A_HP`, `A_GENDER`, `A_BIDANG`) VALUES
(1, 'ewew', '', '', 'wew', '', '', 0, '', '345678', '', ''),
(2, 'wew', 'qweqweq', 'ewewew', 'asfgsvcxasf', 'asdas', 'asda', 123123, 'adgfscsgadf', '12351512314', 'Perempuan', 'sadfasdad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
