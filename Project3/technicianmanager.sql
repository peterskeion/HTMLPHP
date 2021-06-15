-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 03:08 AM
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
-- Database: `technicianmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `technicianlist`
--

CREATE TABLE `technicianlist` (
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `technicianlist`
--

INSERT INTO `technicianlist` (`firstName`, `lastName`, `email`, `phone`, `password`) VALUES
('Gina', 'Fiori', 'gfiori@sportspro.com', '800-555-0459', 'sesame'),
('Jason', 'Lee', 'jason@sportspro.com', '800-555-0444', 'sesame'),
('Gunter', 'Wendt', 'gunter@sportspro.com', '800-555-0400', 'sesame'),
('Andrew', 'Wilson', 'awilson@sportspro.com', '800-555-0449', 'sesame'),
('Alison', 'Diaz', 'alison@sportspro.com', '800-555-0443', 'sesame');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
