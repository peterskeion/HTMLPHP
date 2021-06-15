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
-- Database: `customermanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerlist`
--

CREATE TABLE `customerlist` (
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `postalCode` varchar(60) NOT NULL,
  `countryCode` varchar(60) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerlist`
--

INSERT INTO `customerlist` (`firstName`, `lastName`, `address`, `city`, `state`, `postalCode`, `countryCode`, `phone`, `email`, `password`) VALUES
('Vance', 'Smith', '9 River Pk Pl E 400', 'Boston', 'MA', '02134', 'US', '508-555-8737', 'vsmith@example.com', 'sesame'),
('Jenny', 'Booth', '557 H Street', 'Mont Hellen', 'AL', '99564', 'US', '508-533-7437', 'jbooth@example.com', 'sesame'),
('Priscilla', 'Smith', '123 Check Street', 'Marion', 'MA', '02134', 'US', '800-555-0443', 'p.smith@example.com', 'sesame'),
('Priscilla', 'Smith', '123 Check Street', 'Marion', 'MA', '02134', 'US', '800-555-0443', 'p.smith@example.com', 'sesame'),
('Kelly', 'Irvin', '123 forth street', 'Tennis', 'WY', '13546', 'US', '123-123-1234', 'kelly@example.com', 'se');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
