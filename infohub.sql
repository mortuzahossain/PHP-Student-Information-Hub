-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 18, 2017 at 10:52 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infohub`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentName` varchar(1000) NOT NULL,
  `fatherName` varchar(1000) NOT NULL,
  `university` varchar(10000) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `semister` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `bloodGroup` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `studentName`, `fatherName`, `university`, `roll`, `semister`, `district`, `contact`, `bloodGroup`) VALUES
(3, 'Md Mortuza Hossain', 'Mahmud Hossain', 'BAUST', '1111', '5th', 'Joypurhat', '00000000', 'B+'),
(5, 'Md Mortuza Hossain', 'Mahmud Hossain', 'BAUST', 'ascas', '5th', 'asc', 'a', 'B+a'),
(6, 'Labu', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
