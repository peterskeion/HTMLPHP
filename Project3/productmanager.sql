-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 03:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `Code` varchar(30) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Version` varchar(70) NOT NULL,
  `ReleaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`Code`, `Name`, `Version`, `ReleaseDate`) VALUES
('DRAFT10', 'Draft Manager 1.0', '1', '2015-03-01'),
('DRAFT20', 'Draft Manager 2.0', '2', '2017-08-15'),
('LEAG10', 'Leauge Scheduler 1.0', '1', '2014-06-01'),
('LEAUGD10', 'Leauge Scheduler Deluxe 1.0', '1', '2014-09-01'),
('TEAM10', 'Team Manager Version 1.0', '1', '2015-06-01'),
('TRNY10', 'Tournament Master Version 1.0', '1', '2014-01-01'),
('TRNY20', 'Tournament Master Version 2.0', '2', '2016-03-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
