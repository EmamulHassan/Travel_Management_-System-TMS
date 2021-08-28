-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 03:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelroombooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'emam', 'admin'),
(2, 'tasnim', 'admin'),
(3, 'shukdev', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `archivedorder`
--

CREATE TABLE `archivedorder` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateorder` date NOT NULL,
  `checkinTime` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archivedorder`
--

INSERT INTO `archivedorder` (`id`, `name`, `phone`, `email`, `dateorder`, `checkinTime`, `price`) VALUES
(4, 'Emamul Hassan', '01629830159', '', '2021-05-20', '02.00pm', 'Double Room - 10000BDT'),
(5, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '2021-05-30', '12.00pm', 'Deluxe Room - 8000BDT');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackwrite`
--

CREATE TABLE `feedbackwrite` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `service` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbackwrite`
--

INSERT INTO `feedbackwrite` (`id`, `name`, `email`, `service`, `feedback`) VALUES
(1, 'Emamul', 'emamulhassan420@gmail.com', 'Deluxe Room', 'Nice Service'),
(2, 'Tasnim', 'Tasnim@gmail.com', 'Single Room', 'Nice view and Good Service.'),
(3, 'Shukdev', 'Shukdev@gmail.com', 'Deluxe Room', 'Good place.');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dateorder` date NOT NULL,
  `checkinTime` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `name`, `phone`, `email`, `dateorder`, `checkinTime`, `price`) VALUES
(1, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '2021-05-20', '08.00am', 'Single Room - 6000BDT'),
(2, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '2021-05-20', '12.00pm', 'Deluxe Room - 8000BDT'),
(3, 'Emamul Hassan', '01629830159', 'emamulhassan420@gmail.com', '2021-05-24', '12.00pm', 'Double Room - 10000BDT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackwrite`
--
ALTER TABLE `feedbackwrite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbackwrite`
--
ALTER TABLE `feedbackwrite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
