-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 08:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_sss_id` varchar(30) NOT NULL,
  `company_pagibig_id` varchar(30) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(1000) NOT NULL,
  `company_tax_id` varchar(30) NOT NULL,
  `company_contact_info` varchar(255) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_sss_id`, `company_pagibig_id`, `company_name`, `company_address`, `company_tax_id`, `company_contact_info`, `company_email`) VALUES
(1, '11111', '1111', 'dgdg', '{"bldg_name":"gdgdg","house":"gdgd","street_name":"gdgd","subdivision":"ggdg","barangay":"dgdg","city":"dggdg","province":"gddgd","zip_code":"121212"}', '121205', '{"company_tel_no":"1121221","company_cel_no":"212122"}', 'dgsdg@gvdkjsdsf'),
(2, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(3, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(4, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(5, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(6, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(7, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(8, 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL'),
(9, '4444', '242424', 'dfgdg', '{"bldg_name":"fhdfh","house":"hdfhd","street_name":"fhdfhdfh","subdivision":"ddfdf","barangay":"dfhdf","city":"hdfh","province":"dfhdfh","zip_code":"3355"}', '53535', '{"company_tel_no":"3535","company_cel_no":"535"}', 'xgsg@xgdffh'),
(10, '4794', '424224', 'gfgfdggd', '{"bldg_name":"2l;foidhgf","house":"jk;ugg","street_name":"hvjhff","subdivision":"flyflg","barangay":"giuguig","city":"vkg;uig;","province":"ugugg","zip_code":"4567890"}', '3456789', '{"company_tel_no":"45689","company_cel_no":"345678"}', 'yfulk@ucuiho''ij');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_Id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) NOT NULL,
  `dept_deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`dept_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_Id`, `dept_name`, `dept_deleted`) VALUES
(1, 'Development', 0),
(2, 'human resources department', 0),
(3, 'ddd', 1),
(4, 'research department', 0),
(5, 'a', 1),
(6, 'human humana', 0),
(7, 'jh', 1),
(8, 'ssss', 1),
(9, 'begin and done', 0),
(10, 'fff', 1),
(11, 'sff', 0),
(12, 'eee', 1),
(13, 'tt', 0),
(14, 't', 0),
(15, 'gg', 0),
(16, 'fdd', 0),
(17, 'ddddddd', 0),
(18, 'ojj', 0),
(19, 'sssdfsf', 0),
(20, 'jhh', 0),
(21, 'jjjjjjjj', 0),
(22, '', 0),
(23, 'ssndbflkjbf', 0),
(24, 'kjh', 0),
(25, '', 0),
(26, '', 0),
(27, '', 0),
(28, '', 0),
(29, '', 0),
(30, 'dddddsfasfs', 0),
(31, 'juan', 0),
(32, 'juana', 0),
(33, 'reee', 0),
(34, 'john', 0),
(35, 'johna', 0),
(36, 'ggg', 1),
(37, 'hello', 0),
(38, '', 0),
(39, '', 0),
(40, '', 0),
(41, 'business Department', 0),
(42, 'panning department', 0),
(43, 'human human', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_dept` int(11) NOT NULL,
  `emp_first_name` varchar(255) NOT NULL,
  `emp_middle_name` varchar(255) NOT NULL,
  `emp_last_name` varchar(255) NOT NULL,
  `emp_ext_name` varchar(255) NOT NULL,
  `emp_birthday` date NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_salary` int(11) NOT NULL,
  `emp_username` varchar(255) NOT NULL,
  `emp_password` varchar(255) NOT NULL,
  `emp_position` varchar(255) NOT NULL,
  `emp_deleted` tinyint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_dept`, `emp_first_name`, `emp_middle_name`, `emp_last_name`, `emp_ext_name`, `emp_birthday`, `emp_email`, `emp_salary`, `emp_username`, `emp_password`, `emp_position`, `emp_deleted`) VALUES
(24, 1, 'Paulo', 'Miranda', 'Gutierrez', '', '0000-00-00', '', 0, 'Paulo020', '$2y$10$KnEDjADxJa4EcCCQneZMHOyTrAg0L1.VAX9q3//gCkhEHbWTxPQRy', 'admin', 0),
(63, 1, 'John', 'Smith', 'Cruz', '', '0000-00-00', '', 0, 'John', 'john', 'employee', 0),
(361, 1, 'Ren', 'Solo', 'Kylo', '', '0000-00-00', '', 0, 'Kylo', '$2y$10$/D7w77oG/s3tZn38oZE1mes1ezKmnx9a65FU75S44JW6S4gpUp4li', 'employee', 0),
(1234, 4, '{"last_name":"juan","first_name":"ju","middle_name":"juan","ext_name":""}', '', '', '', '0000-00-00', '', 0, 'juan', 'juan', 'employee', 1),
(1235, 4, '{"last_name":"juan","first_name":"juan","middle_name":"juan","ext_name":""}', '', '', '', '0000-00-00', '', 0, 'muanih', 'knkjsdosfw', 'employee', 1),
(1763, 17, '{"last_name":"Reyes","first_name":"Sandra","middle_name":"Duaz","ext_name":""}', '', '', '', '0000-00-00', '', 0, 'sandra', 'sandra', 'admin', 1),
(1865, 2, '{"last_name":"Santos","first_name":"Lino","middle_name":"Landi","ext_name":"Jr"}', '', '', '', '0000-00-00', '', 12345, 'lino_landi', 'linao', 'employee', 1),
(1987, 6, 'Nino', 'Mandin', 'Antolin', 'III', '0000-00-00', '', 0, 'Nino', 'nino', 'employee', 0),
(4356, 6, 'James', 'Ninday', 'Loson', '', '0000-00-00', '', 0, 'James', 'james', 'employee', 0),
(9864, 4, '{"last_name":"Ruz","first_name":"Martina","middle_name":"Maldita","ext_name":""}', '', '', '', '0000-00-00', '', 0, 'Martina', 'martina', 'employee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pag_ibig`
--

CREATE TABLE IF NOT EXISTS `pag_ibig` (
  `pagibig_id` int(11) NOT NULL AUTO_INCREMENT,
  `pagibig_emp_id` int(11) NOT NULL,
  `pagibig_mid_no` int(11) NOT NULL,
  `pagibig_no` int(11) NOT NULL,
  `pagibig_member_prog` varchar(255) NOT NULL,
  `pagibig_period_cov` int(11) NOT NULL,
  `pagibig_monthly_compen` int(11) NOT NULL,
  `pagibig_ee_share` int(11) NOT NULL,
  `pagibig_er_share` int(11) NOT NULL,
  `pagibig_deleted` tinyint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pagibig_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pag_ibig`
--

INSERT INTO `pag_ibig` (`pagibig_id`, `pagibig_emp_id`, `pagibig_mid_no`, `pagibig_no`, `pagibig_member_prog`, `pagibig_period_cov`, `pagibig_monthly_compen`, `pagibig_ee_share`, `pagibig_er_share`, `pagibig_deleted`) VALUES
(1, 1235, 0, 0, '', 0, 0, 0, 0, 1),
(2, 9864, 0, 0, '', 0, 0, 0, 0, 1),
(3, 1865, 123, 123456789, '', 32, 23, 100, 100, 1),
(4, 1763, 0, 0, '', 0, 0, 100, 100, 1),
(5, 1987, 0, 0, '', 0, 0, 0, 0, 1),
(6, 4356, 0, 0, '', 0, 0, 0, 0, 1),
(7, 24, 0, 0, '', 0, 0, 0, 0, 0),
(8, 63, 0, 0, '', 0, 0, 0, 0, 0),
(9, 361, 0, 0, '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sss`
--

CREATE TABLE IF NOT EXISTS `sss` (
  `sss_id` int(11) NOT NULL AUTO_INCREMENT,
  `sss_emp_id` int(11) NOT NULL,
  `sss_no` int(11) NOT NULL,
  `ss_contribution` int(11) NOT NULL,
  `ec_contribution` int(11) NOT NULL,
  `sss_deleted` tinyint(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sss_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sss`
--

INSERT INTO `sss` (`sss_id`, `sss_emp_id`, `sss_no`, `ss_contribution`, `ec_contribution`, `sss_deleted`) VALUES
(1, 1235, 0, 0, 0, 1),
(2, 9864, 0, 0, 0, 1),
(3, 1865, 1874543, 1375, 10, 1),
(4, 1763, 0, 0, 0, 1),
(5, 1987, 0, 0, 0, 1),
(6, 4356, 0, 0, 0, 1),
(7, 24, 0, 0, 0, 0),
(8, 63, 0, 0, 0, 0),
(9, 361, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
