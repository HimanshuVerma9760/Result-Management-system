-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 06:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `adminname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`email`, `password`, `adminname`) VALUES
('himanshuverma@gmail.com', 'admin', 'Himanshu');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `branch` text NOT NULL,
  `sap` bigint(20) NOT NULL,
  `pos` int(3) NOT NULL,
  `java` int(3) NOT NULL,
  `javaprac` int(3) NOT NULL,
  `dbms` int(3) NOT NULL,
  `human` int(3) NOT NULL,
  `evs` int(3) NOT NULL,
  `percentage` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`firstname`, `lastname`, `branch`, `sap`, `pos`, `java`, `javaprac`, `dbms`, `human`, `evs`, `percentage`) VALUES
('Himanshu', 'Verma', 'cse', 1000017311, 95, 94, 88, 75, 74, 65, 76);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `mothername` text NOT NULL,
  `fathername` text NOT NULL,
  `pincode` bigint(10) NOT NULL,
  `branch` text NOT NULL,
  `sap` int(11) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`firstname`, `lastname`, `mothername`, `fathername`, `pincode`, `branch`, `sap`, `email`, `password`) VALUES
('Himanshu', 'verma', 'Suman', 'Verma', 248001, 'CSE', 1000017311, 'humnavaverma@gmail.com', 'admin'),
('shiv', 'shankar', 'Sumanutra', 'ramesh chandra', 248001, 'CSE', 212423698, 'shivshiv@gmail.com', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
