-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3000
-- Generation Time: May 25, 2022 at 06:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
  `id` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `adminname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `email`, `password`, `adminname`) VALUES
(1, '1000017311@dit.edu.in', 'admin', 'Himanshu');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `branch` text NOT NULL,
  `sap` bigint(20) NOT NULL,
  `rollno` bigint(30) NOT NULL,
  `pos` int(3) NOT NULL,
  `java` int(3) NOT NULL,
  `javaprac` int(3) NOT NULL,
  `dbms` int(3) NOT NULL,
  `dbmsprac` int(3) NOT NULL,
  `human` int(3) NOT NULL,
  `evs` int(3) NOT NULL,
  `percentage` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`firstname`, `lastname`, `branch`, `sap`, `rollno`, `pos`, `java`, `javaprac`, `dbms`, `dbmsprac`, `human`, `evs`, `percentage`) VALUES
('Himanshu', 'verma', 'cse', 1000017311, 210102926, 67, 78, 96, 75, 95, 90, 90, 88),
('priyanshu', 'verma', 'cse', 1000017312, 211321312, 67, 87, 76, 56, 77, 76, 89, 78),
('hgfhg', 'ghf', 'ngfvn', 21364213212541, 13542135215, 100, 122, 122, 101, 100, 100, 100, 106),
('priyanshu', 'Verma', 'ngfvn', 1000017311, 210102926, 65, 64, 78, 75, 89, 45, 78, 69);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`firstname`, `lastname`, `mothername`, `fathername`, `pincode`, `branch`, `sap`, `email`, `password`) VALUES
('Himanshu', 'Verma', 'suman verma', 'shiv shankar verma', 248002, 'CSE', 1000017311, '1000017311@dit.edu.in', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
