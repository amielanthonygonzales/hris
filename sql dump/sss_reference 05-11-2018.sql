-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 06:11 PM
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
-- Table structure for table `sss_reference`
--

CREATE TABLE IF NOT EXISTS `sss_reference` (
  `ref_id` int(11) NOT NULL,
  `ref_range_start` double NOT NULL,
  `ref_range_end` varchar(255) NOT NULL,
  `ref_monthly_salary` double NOT NULL,
  `ref_er` double NOT NULL,
  `ref_ee` double NOT NULL,
  `ref_ec` double NOT NULL,
  `ref_max` tinyint(4) NOT NULL,
  `ref_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss_reference`
--

INSERT INTO `sss_reference` (`ref_id`, `ref_range_start`, `ref_range_end`, `ref_monthly_salary`, `ref_er`, `ref_ee`, `ref_ec`, `ref_max`, `ref_deleted`) VALUES
(1, 2, '2', 2, 2, 2, 2, 0, 1),
(2, 56, '78', 344, 343, 4334, 4, 0, 1),
(3, 12, '45', 43, 43, 443, 43, 0, 1),
(4, 56, '0', 0, 0, 0, 0, 0, 1),
(5, 1000, '1249.99', 1100, 73.7, 36.3, 10, 0, 0),
(8, 7250, '7749.99', 7500, 552.5, 272.5, 10, 0, 0),
(9, 8750, '9249.99', 9000, 663, 327, 10, 0, 0),
(10, 1250, '1749.99', 1500, 110.5, 54.5, 10, 0, 0),
(11, 1750, '2249.99', 2000, 147.3, 72.7, 10, 0, 0),
(12, 2250, '2749.99', 2500, 184.2, 90.8, 10, 0, 0),
(13, 2750, '3249.99', 3000, 221, 109, 10, 0, 0),
(14, 3250, '3749.99', 3500, 257.8, 127.2, 10, 0, 0),
(15, 3750, '4249.99', 4000, 294.7, 145.3, 10, 0, 0),
(16, 4250, '4749.99', 4500, 331.5, 163.5, 10, 0, 0),
(17, 4750, '5249.99', 5000, 368.3, 181.7, 10, 0, 0),
(18, 5250, '5749.99', 5500, 405.2, 199.8, 10, 0, 0),
(19, 5750, '6249.99', 6000, 442, 218, 10, 0, 0),
(20, 6250, '6749.99', 6500, 478.8, 236.2, 10, 0, 0),
(21, 6750, '7249.99', 7000, 515.7, 254.3, 10, 0, 0),
(22, 7750, '8249.99', 8000, 589.3, 290.7, 10, 0, 0),
(23, 8250, '8749.99', 8500, 626.2, 308.8, 10, 0, 0),
(24, 9250, '9749.99', 9500, 699.8, 345.2, 10, 0, 0),
(25, 10250, '10749.99', 10500, 773.5, 381.5, 10, 0, 0),
(26, 10750, '11249.99', 11000, 810.3, 399.7, 10, 0, 0),
(27, 11250, '11749.99', 11500, 847.2, 417.8, 10, 0, 0),
(28, 11750, '12249.99', 12000, 884, 436, 10, 0, 0),
(29, 12250, '12749.99', 12500, 920.8, 454.2, 10, 0, 0),
(30, 12750, '13249.99', 13000, 957.7, 472.3, 10, 0, 0),
(31, 13250, '13749.99', 13500, 994.5, 490.5, 10, 0, 0),
(32, 13750, '14249.99', 14000, 1031.3, 508.7, 10, 0, 0),
(33, 14250, '14749.99', 14500, 1068.2, 526.8, 10, 0, 0),
(34, 14750, '15249.99', 15000, 1105, 545, 30, 0, 0),
(39, 15750, 'Over', 16000, 1178.7, 581.3, 30, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sss_reference`
--
ALTER TABLE `sss_reference`
  ADD PRIMARY KEY (`ref_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sss_reference`
--
ALTER TABLE `sss_reference`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
