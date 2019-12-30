-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 08:07 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busreservee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneNo` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `name`, `email`, `password`, `phoneNo`, `age`, `gender`) VALUES
(4, 'fahmida', 'fahmida@gmail.com', 'fh1234', '01950731997', '22', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `busroot`
--

CREATE TABLE `busroot` (
  `root` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busroot`
--

INSERT INTO `busroot` (`root`) VALUES
('Dhaka'),
('Chittagong'),
('Shylhet'),
('Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `busrootd`
--

CREATE TABLE `busrootd` (
  `Desti` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busrootd`
--

INSERT INTO `busrootd` (`Desti`) VALUES
('Dhaka'),
('Chittagong'),
('Shylhet'),
('Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `busseat1`
--

CREATE TABLE `busseat1` (
  `s1` varchar(10) NOT NULL,
  `s2` varchar(10) NOT NULL,
  `s3` varchar(10) NOT NULL,
  `s4` varchar(10) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busseat1`
--

INSERT INTO `busseat1` (`s1`, `s2`, `s3`, `s4`, `id`) VALUES
('', '', '', 'A4', 1),
('', 'B2', 'B3', 'B4', 2),
('C1', '', 'C3', '', 3),
('D1', 'D2', 'D3', 'D4', 4),
('E1', 'E2', 'E3', 'E4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `busseatno`
--

CREATE TABLE `busseatno` (
  `s1` varchar(10) NOT NULL,
  `s2` varchar(10) NOT NULL,
  `s3` varchar(10) NOT NULL,
  `s4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busseatno`
--

INSERT INTO `busseatno` (`s1`, `s2`, `s3`, `s4`) VALUES
('A1', 'A2', 'A3', 'A4'),
('B1', 'B2', 'B3', 'B4'),
('C1', 'C2', 'C3', 'C4'),
('D1', 'D2', 'D3', 'D4'),
('E1', 'E2', 'E3', 'E4'),
('F1', 'F2', 'F3', 'F4');

-- --------------------------------------------------------

--
-- Table structure for table `ctgshylet`
--

CREATE TABLE `ctgshylet` (
  `Bus_Name` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Taka` int(30) NOT NULL,
  `Time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ctgshylet`
--

INSERT INTO `ctgshylet` (`Bus_Name`, `Class`, `Taka`, `Time`) VALUES
('Hanif', 'Ac', 1300, '12pm'),
('Hanif', 'Non ac', 750, '11pm');

-- --------------------------------------------------------

--
-- Table structure for table `dhakactg`
--

CREATE TABLE `dhakactg` (
  `Bus_Name` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Taka` int(30) NOT NULL,
  `Time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dhakactg`
--

INSERT INTO `dhakactg` (`Bus_Name`, `Class`, `Taka`, `Time`) VALUES
('Hanif', 'Ac', 1200, '12pm'),
('Hanif', 'Non ac', 480, '11pm');

-- --------------------------------------------------------

--
-- Table structure for table `dhakashylet`
--

CREATE TABLE `dhakashylet` (
  `Bus_Name` varchar(30) NOT NULL,
  `Class` varchar(30) NOT NULL,
  `Taka` int(30) NOT NULL,
  `Time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dhakashylet`
--

INSERT INTO `dhakashylet` (`Bus_Name`, `Class`, `Taka`, `Time`) VALUES
('Hanif', 'Ac', 1000, '12pm'),
('Hanif', 'Non ac', 500, '11pm');

-- --------------------------------------------------------

--
-- Table structure for table `ticketinfo`
--

CREATE TABLE `ticketinfo` (
  `Id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `origin` varchar(30) DEFAULT NULL,
  `destination` varchar(30) DEFAULT NULL,
  `busName` varchar(30) DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `date` varchar(30) NOT NULL,
  `seatno` varchar(30) NOT NULL,
  `s1` varchar(30) NOT NULL,
  `s2` varchar(30) NOT NULL,
  `s3` varchar(30) NOT NULL,
  `s4` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketinfo`
--

INSERT INTO `ticketinfo` (`Id`, `name`, `origin`, `destination`, `busName`, `class`, `price`, `time`, `date`, `seatno`, `s1`, `s2`, `s3`, `s4`) VALUES
(40, 'Bidita', 'Dhaka', 'Chittagong', 'Hanif', 'Ac', '1200', '12pm', '2019-03-02', '1', 'A1', '', '', ''),
(41, 'fahmida', 'Dhaka', 'Chittagong', 'Hanif', 'Non ac', '1728', '11pm', '2019-03-03', '4', 'A1', 'C4', 'F3', 'A4'),
(42, 'arif', 'Chittagong', 'Shylhet', 'Hanif', 'Non ac', '2250', '11pm', '2019-03-04', '3', 'c1', 'c2', 'c3', '');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `password`, `phoneNo`, `age`, `gender`) VALUES
(11, 'n', 'joy@gmail.com', '1234', '12345', 11, 'male'),
(12, 'fahmida', 'fahmida@gmail.com', 'fh1234', '01950731997', 18, 'female'),
(13, 'Bidita', 'bidita@gmail.com', '1234', '01622866878', 16, 'female'),
(14, 'arif', 'arifshumon.ewu@gmail.com', 'arif', '1234567890', 22, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketinfo`
--
ALTER TABLE `ticketinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticketinfo`
--
ALTER TABLE `ticketinfo`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
