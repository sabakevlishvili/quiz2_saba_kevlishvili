-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 06:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `flight_name` varchar(50) NOT NULL,
  `flight_time` int(11) NOT NULL,
  `flight_price` float NOT NULL,
  `flight_code` varchar(13) NOT NULL,
  `flight_company_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `flight_name`, `flight_time`, `flight_price`, `flight_code`, `flight_company_name`) VALUES
(2, 'dsdssdasdasdasdasdasd', 4, 200, 'CMNTLSBUWGKJG', 'dsdsdasdasdasdasdasdasd'),
(3, 'asdasdasdasdasdasdas', 4, 200, 'RKBCOCHEPGNVB', 'asdasdasdasdasdasdas'),
(4, 'dasdasssssssasdasdasdas', 1, 50, 'NYYUKUBBBSGTI', 'asdasdasdasdasdasdas'),
(5, 'asdasdasdasdbhkasdjaiskbdkij', 3, 150, 'XCMKULQQFWWXT', 'asdasdasdasdasdasdas'),
(6, 'asdoibhasdbhasdoisdhoaisd', 5, 250, 'XTCDGDYOZQLCF', 'aaaaaaaaaaaaaaaaaaaaaaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
