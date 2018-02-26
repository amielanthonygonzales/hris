-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 03:20 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `pag_ibig`
--

CREATE TABLE IF NOT EXISTS `pag_ibig` (
  `id` int(11) NOT NULL,
  `information` varchar(255) NOT NULL,
  `active` tinyint(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pag_ibig`
--

INSERT INTO `pag_ibig` (`id`, `information`, `active`) VALUES
(1, '{"midNo":"","pagibigNo":"","membershipProgram":"","firstName":"Juan","middleName":"Dela","lastName":"Cruz","extName":"Jr","periodCov":"","monthlyCompen":"","eeShare":"","erShare":""}', 1),
(2, '{"midNo":"","pagibigNo":"","membershipProgram":"","firstName":"linda","middleName":"Minda","lastName":"Ruz","extName":"","periodCov":"","monthlyCompen":"","eeShare":"","erShare":""}', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pag_ibig`
--
ALTER TABLE `pag_ibig`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pag_ibig`
--
ALTER TABLE `pag_ibig`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
