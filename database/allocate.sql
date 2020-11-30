-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 06, 2018 at 09:17 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8*/;

--
-- Database: `allocate`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

DROP TABLE IF EXISTS `auth`;
CREATE TABLE IF NOT EXISTS `auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'admin', 'password'),
(2, 'demo', 'password'),
(3, 'stephen', '11tomtom'),
(4, 'bonifacedennis99@gmail.com', 'denco'),
(6, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `project_case` varchar(255) COLLATE utf8_bin NOT NULL,
  `project_level` varchar(50) COLLATE utf8_bin NOT NULL,
  `allocation` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_case`, `project_level`, `allocation`) VALUES
(1, 'Design and Implementation of Loan disbursement system', 'A case study of GT Bank Plc', 'HND', 1),
(5, 'Loan saving system', 'Guiness Nigeria', 'HND', 1),
(7, 'Bank ATM System', 'Diamond Bank', 'HND', 1),
(6, 'Login Registration System', 'Guiness Nigeria', 'ND', 1),
(8, 'Student Project Allocation and Management System', 'A case study of The Polytechnic,Ibadan', 'HND', 1),
(9, 'Inventory System', 'XYZ limited', 'ND', 1),
(10, 'ikechukwu', 'design and implementation of hotel', 'ND', 1),
(11, 'ikechukwu', 'Diamond Bank', 'ND', 0),
(12, 'ikechukwu', 'Guiness Nigeria', 'ND', 0),
(13, 'ikechukwu', 'design and implementation of hotel', 'ND', 0),
(14, 'ikechukwu', 'design and implementation of hotel', 'ND', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `department` varchar(50) COLLATE utf8_bin NOT NULL,
  `level` varchar(50) COLLATE utf8_bin NOT NULL,
  `matric` varchar(50) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `project_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `department`, `level`, `matric`, `date`, `project_id`) VALUES
(3, 'Omolewa Stephen', 'Computer Studies', 'ND 2', '2014235020038', '2017-09-23', 7),
(2, 'Ayub Lekan', 'Computer Studies', 'HND 2', '2014235020036', '2017-09-21', 5),
(4, 'Ade', 'Mechanical Eng', 'HND 1', '2014235020050', '2017-09-23', 1),
(5, 'Demo', 'Civil Engineering', 'ND', '2014235020039', '2017-09-23', 8),
(6, 'Ayobami', 'Slt', 'ND 3', '2014235020031', '2017-09-23', 6),
(7, 'Omolewa ', 'Slt', 'ND 2', '2014235020033', '2017-09-23', 9),
(8, 'ikechukwu', 'computer science', 'ND', '2014235020444', '2018-03-03', 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
