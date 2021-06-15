-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 03:07 AM
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
-- Database: `registermanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `incidentlist`
--

CREATE TABLE `incidentlist` (
  `name` varchar(30) NOT NULL,
  `product` varchar(60) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incidentlist`
--

INSERT INTO `incidentlist` (`name`, `product`, `title`, `description`) VALUES
('Kelly Irvin', 'Draft Manager 1.0', 'Problem', 'ddasdaseasdasda'),
('Jenny Booth', 'Draft Manager 1.0', 'Problem', 'Test test test');

-- --------------------------------------------------------

--
-- Table structure for table `registerlist`
--

CREATE TABLE `registerlist` (
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `registeredproducts` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registerlist`
--

INSERT INTO `registerlist` (`name`, `email`, `registeredproducts`) VALUES
('Kelly Irvin', 'kelly@example.com', 'Draft Manager 1.0'),
('Kelly Irvin', 'kelly@example.com', 'Leauge Scheduler 1.0'),
('Jenny Booth', 'jbooth@example.com', 'Draft Manager 1.0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
