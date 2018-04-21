-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 06:37 PM
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
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL,
  `company_sss_id` varchar(30) NOT NULL,
  `company_pagibig_id` varchar(30) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(1000) NOT NULL,
  `company_tax_id` varchar(30) NOT NULL,
  `company_contact_info` varchar(255) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_representative` varchar(255) NOT NULL,
  `company_rep_pos` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_sss_id`, `company_pagibig_id`, `company_name`, `company_address`, `company_tax_id`, `company_contact_info`, `company_email`, `company_representative`, `company_rep_pos`) VALUES
(1, '1234567890', '1111', 'Toy Story', '{"room_no":"126","bldg_name":"gdgdg","house":"gdgd","street_name":"gdgd","subdivision":"ggdg","barangay":"dgdg","city":"dggdg","province":"gddgd","zip_code":"121212"}', '121205', '{"company_tel_no":"1121221","company_cel_no":"212122"}', 'dgsdg@gvdkjsdsf', 'Juan Dela Cruz', 'HR Head');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_Id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

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
(13, 'tt', 1),
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
  `emp_id` varchar(255) NOT NULL,
  `emp_dept` int(11) NOT NULL,
  `emp_first_name` varchar(255) NOT NULL,
  `emp_middle_name` varchar(255) NOT NULL,
  `emp_last_name` varchar(255) NOT NULL,
  `emp_ext_name` varchar(255) NOT NULL,
  `emp_birthday` date NOT NULL DEFAULT '1970-01-01',
  `emp_email` varchar(255) NOT NULL,
  `emp_salary` int(11) NOT NULL,
  `emp_username` varchar(255) NOT NULL,
  `emp_password` varchar(255) NOT NULL,
  `emp_position` varchar(255) NOT NULL,
  `emp_deleted` tinyint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_dept`, `emp_first_name`, `emp_middle_name`, `emp_last_name`, `emp_ext_name`, `emp_birthday`, `emp_email`, `emp_salary`, `emp_username`, `emp_password`, `emp_position`, `emp_deleted`) VALUES
('1234', 4, '{"last_name":"juan","first_name":"ju","middle_name":"juan","ext_name":""}', '', '', '', '0000-00-00', '', 0, 'juan', 'juan', 'employee', 1),
('1235', 4, '{"last_name":"juan","first_name":"juan","middle_name":"juan","ext_name":""}', '', '', '', '0000-00-00', '', 0, 'muanih', 'knkjsdosfw', 'employee', 1),
('1763', 17, '{"last_name":"Reyes","first_name":"Sandra","middle_name":"Duaz","ext_name":""}', '', '', '', '0000-00-00', '', 0, 'sandra', 'sandra', 'admin', 1),
('181234', 4, 'Kindia', 'Luiz', 'Baston', '', '0000-00-00', 'kindia@email.com', 0, 'kindia', '$2y$10$QDn8kpkJOyTRj8wnefxEbewgtjdj42ad7V8g9L7FRTaEGsMUCysiG', 'employee', 0),
('181235', 4, 'Hanji', 'Ruiz', 'Estilia', '', '0000-00-00', 'hanji@email.com', 0, 'hanji', '$2y$10$4JmJdxcMVP7sKZyY.2UNuOWdno6.yEomr7jQ0Hog5vZ2h7agKayYe', 'employee', 0),
('181236', 2, 'Miandi', 'Dinaz', 'Findilia', '', '0000-00-00', 'miandi@email.com', 0, 'miandi', '$2y$10$uC3CSab65m.qGUD1pJc2beLORLcsQzD/ff4WLkHRrHJ3w1ibgo2VG', 'employee', 0),
('181237', 4, 'Clin', 'Miando', 'Vindian', '', '0000-00-00', 'clin@email.com', 0, 'clin', '$2y$10$TMaw6jRgGqsOXMF.Plvgn.z9J/aawEw0.guiUF4ixtgfzR6zygN.S', 'employee', 0),
('181239', 2, 'Rindiana', 'Binsa', 'Pintian', '', '0000-00-00', 'rindiana@email.com', 0, 'rindiana', '$2y$10$mlHemIdS3Rla0Y2w3dz/jOh.CPKhmJkOIo3fEHWeZU2sLFrjaIBuy', 'employee', 0),
('181245', 1, 'Ferndi', 'Sintma', 'Trinfy', '', '0000-00-00', 'ferndi@email.com', 0, 'ferndi', '$2y$10$hDNk9xZGd4fFMqmkVCtw1OhNYECnUH7OgZ69tn52qhIs5h5axAC0e', 'employee', 0),
('181246', 1, 'Erlynd', 'Gandri', 'Santin', '', '0000-00-00', 'erlynd@email.com', 0, 'erlynd', '$2y$10$5mUa0vrHqW34PVAN2gupjuH1V1pPNqdlh4i6kZKJCrrfgWMDBweiW', 'employee', 0),
('181248', 2, 'Nyko', 'Marfin', 'Limian', 'Jr', '0000-00-00', 'nyko@email.com', 0, 'nyko', '$2y$10$C.E/HIjme6DNc0r5KXtHb.m/gwvu.9T4zfBpmMisjZmFQVscd6.yu', 'employee', 0),
('181253', 4, 'lyn', 'gunti', 'huana', '', '0000-00-00', 'lyn@email.com', 0, 'lyn', '$2y$10$QN3MyCkpy5EiTqP3tom7iOtOD3DnXHvjcSXSzwGE1CViC8v8EYbeC', 'employee', 0),
('181254', 6, 'yuindia', 'maylin', 'kindia', '', '0000-00-00', 'yuindia@email.com', 0, 'yuindia', '$2y$10$w6HlDFqAK8/nxYa1imuKn.LcD8tDvGaFeIrBBT792k2qs4glMUCs2', 'employee', 0),
('181255', 1, 'Riantia', 'Nartin', 'Bindia', '', '0000-00-00', 'riantia@email.com', 0, 'Riantia', '$2y$10$RejreNqXuzYPU2YU7REuU.2ORWXeMFJTxQxWelmdMSmo.O1Dl3BTG', 'employee', 0),
('181256', 1, 'Jinthia', 'Gintyan', 'Englita', '', '0000-00-00', 'jinthia@email.com', 0, 'jinthia', '$2y$10$00BLHc43Ujd08Up76bJ8ReEFpXWrjC7zXEVX8OgeyhCvQggGsRYUi', 'employee', 0),
('181257', 1, 'Roberto', 'Binta', 'Lima', 'Jr', '0000-00-00', 'roberto@email.com', 0, 'roberto', '$2y$10$aVLantxCgOmz632C39QNy.bfZicXY9OYETObg5IxOCI3r7P./R./W', 'employee', 0),
('181259', 1, 'Guiny', 'Ruz', 'Rintay', '', '0000-00-00', 'guiny@email.com', 0, 'guiny', '$2y$10$DrDlmcyKbCd1daxYijnedeMSO4Fi2yTGWW8r8R1ntvSjwZDFEwtKy', 'employee', 0),
('181261', 1, 'Kenzer', 'Santos', 'Ruiz', '', '0000-00-00', 'kenzer@email.com', 0, 'kenzer', '$2y$10$JgTgfOk/mTCymH0YgrNCq.1PgIKmXm33M6ljLzGTDg6Ay654Ea96C', 'employee', 0),
('181262', 1, 'Himjun', 'Juint', 'Santiago', '', '0000-00-00', 'himjun@email.com', 0, 'himjun', '$2y$10$NLe96/C3YX2.yWrS6ZZZ9OhH3WTCxDdwP5LJ9OlSi9Ob2kbrwwdty', 'employee', 0),
('181263', 1, 'Duixon', 'Ferdin', 'Lintio', '', '0000-00-00', 'duixon@email.com', 0, 'duixon', '$2y$10$aTUcXuMaBBMSVDEGuYYUjeXP2jpKxzP/6kE8Qt2Fr5ZwqOrtKcreW', 'employee', 0),
('181264', 1, 'zxywykx ', 'Pedyero', 'Gonzales', '', '0000-00-00', 'zxywykx', 0, 'zxywykx', '$2y$10$a7ANODQbjFWAQYe/Mw1cJ.O5eyTb0SpkNo6AH499wqqta5mVWiggK', 'admin', 0),
('181265', 1, 'Zytyzhia', 'Munyar', 'Guimaz', '', '0000-00-00', 'zytyzhia', 0, 'zytyzhia', '$2y$10$GnTgjrJWnfvuc.uu0IjJ2.2yEJWEJxG3wLUGos2hCXOjTvF3FooaC', 'admin', 0),
('181266', 1, 'Mintroz', 'Huizon', 'Antolim', '', '0000-00-00', 'mintroz@email.com', 0, 'mintroz', '$2y$10$kiR/qwuGEP5b0dDRI5vshO/8hHAIedX9rl4kPuc7JMB.mWmi2hvJu', 'employee', 0),
('181268', 1, 'Ramon', 'Arroyo', 'Macapagal', 'III', '0000-00-00', 'ramon@email.com', 0, 'ramon', '$2y$10$lQeoOoXM7qKcoo41BRN7r.yi8TOe334Tt9.hCh9tdSdXB.JBjxl0O', 'employee', 0),
('181269', 1, 'andres', 'Lipa', 'Bonifacio', '', '0000-00-00', 'andres@email.com', 0, 'andres', '$2y$10$X.9q2kIhykAs5Ltvba16E.DLluhPGV0DxHaImyN9Rrpz0mBGH.H8e', 'employee', 0),
('181271', 1, 'Elpidio', 'Quezon', 'Quirino', '', '0000-00-00', 'elpidio@email.com', 0, 'elpidio', '$2y$10$0r1tOgTqfKs2Rhe1kifKE.ym4ag54tq8UaXB5.od6Z738Sgpy3tcy', 'employee', 0),
('181272', 1, 'Jose', 'Protacio', 'Rizal', '', '0000-00-00', 'rizal@email.com', 0, 'jose', '$2y$10$jRcv7k7KSg7elxKGC1VpCOoWmpTFsy.o5Wp7vVp24JGxoCYKCZIbO', 'employee', 0),
('181273', 1, 'kinjo', 'finday', 'Linton', '', '0000-00-00', 'kinjo', 0, 'kinjo', '$2y$10$uu7QAMdizpabQfTPU.n1dOgSv.Xu6WrL8Ex8xzfwisUNtvFv5lDpG', 'employee', 0),
('181782', 0, 'Ferdinand', 'Magelan', 'Juinty', '', '0000-00-00', 'ferdinad@email.com', 0, 'ferdinand', '$2y$10$am5/8xZdFY1DIRCn.FU3je7EXYOm4NMABMVC3blBh.00eaeW3iyey', 'employee', 0),
('182347', 1, 'Marie', 'Junti', 'Yuntayaw', '', '0000-00-00', 'marie', 0, 'marie', '$2y$10$H6WHdGXGLgxP6cuKJ4lKoe0aQsoCjwhPJ09aHPwEH0cEPLvg44J02', 'employee', 0),
('1865', 2, '{"last_name":"Santos","first_name":"Lino","middle_name":"Landi","ext_name":"Jr"}', '', '', '', '0000-00-00', '', 12345, 'lino_landi', 'linao', 'employee', 1),
('190862', 2, 'Marie', 'Celine', 'Bondilia', '', '0000-00-00', 'a@', 0, 'marieCeline', '$2y$10$7j5jVOMmxu8kkox4k/g6Muo4usElFDl4iBa69sYbr.R9KmuWAlnZK', 'employee', 0),
('191234', 0, 'Kyndo', 'Aquino', 'Ferdinand', '', '1997-07-10', '@2', 12000, 'kyndo', '$2y$10$j6JVNq5CMd6MuO7LUlvYBe6ce6gLed8YMWlQ4wG8RUSXcYUTK5tie', 'employee', 0),
('1987', 6, 'Nino', 'Mandin', 'Antolin', 'III', '0000-00-00', '', 0, 'Nino', 'nino', 'employee', 0),
('24', 1, 'Paulo', 'Miranda', 'Gutierrez', '', '0000-00-00', '', 0, 'Paulo020', '$2y$10$KnEDjADxJa4EcCCQneZMHOyTrAg0L1.VAX9q3//gCkhEHbWTxPQRy', 'admin', 0),
('361', 1, 'Ren', 'Solo', 'Kylo', '', '0000-00-00', '', 0, 'Kylo', '$2y$10$/D7w77oG/s3tZn38oZE1mes1ezKmnx9a65FU75S44JW6S4gpUp4li', 'employee', 0),
('41297', 2, 'amiel', 'dela cruz', 'gonzales', '', '1997-12-05', '', 18002, 'amiel', '$2y$10$p3jVBnvKlbreBS7rRJnGj.1kowWLS7SWs6kPEBRxs0/SLuB91CAN6', 'admin', 0),
('4356', 6, 'James', 'Ninday', 'Loson', '', '0000-00-00', '', 0, 'James', 'james', 'employee', 0),
('63', 0, 'John', 'Smith', 'Cruz', '', '0000-00-00', '', 19560, 'John', 'john', 'employee', 0),
('9864', 4, '{"last_name":"Ruz","first_name":"Martina","middle_name":"Maldita","ext_name":""}', '', '', '', '0000-00-00', '', 0, 'Martina', 'martina', 'employee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pag_ibig`
--

CREATE TABLE IF NOT EXISTS `pag_ibig` (
  `pagibig_id` int(11) NOT NULL,
  `pagibig_emp_id` varchar(255) NOT NULL,
  `pagibig_mid_no` varchar(255) NOT NULL,
  `pagibig_no` varchar(255) NOT NULL,
  `pagibig_ee_share` int(11) NOT NULL,
  `pagibig_er_share` int(11) NOT NULL,
  `pagibig_mem_prog` varchar(255) NOT NULL,
  `monthly_compen` varchar(255) NOT NULL,
  `pagibig_remarks` varchar(255) NOT NULL,
  `pagibig_remarks_date` varchar(255) NOT NULL,
  `pagibig_deleted` tinyint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pag_ibig`
--

INSERT INTO `pag_ibig` (`pagibig_id`, `pagibig_emp_id`, `pagibig_mid_no`, `pagibig_no`, `pagibig_ee_share`, `pagibig_er_share`, `pagibig_mem_prog`, `monthly_compen`, `pagibig_remarks`, `pagibig_remarks_date`, `pagibig_deleted`) VALUES
(1, '1235', '0', '0', 0, 0, '', '', '', '', 1),
(2, '9864', '0', '0', 0, 0, '', '', '', '', 1),
(3, '1865', '123', '123456789', 100, 100, '', '', '', '', 1),
(4, '1763', '0', '0', 100, 100, '', '', '', '', 1),
(5, '1987', '1234-5678-5678', '1234-5678-5678', 124, 198, '', '', '', '', 1),
(6, '4356', '0', '0', 0, 0, '', '', '', '', 1),
(7, '24', '0', '0', 380, 290, '', '', '', '', 0),
(8, '63', '--', '0', 0, 0, '', '', 'N', '04/23/2018', 0),
(9, '361', '0', '0', 0, 0, '', '', '', '', 0),
(10, '41297', '--', '0', 500, 300, 'MP1', '', 'RS', '04/18/2018', 0),
(11, '181234', '0', '0', 0, 0, '', '', '', '', 0),
(12, '181235', '0', '0', 0, 0, '', '', '', '', 0),
(13, '181236', '0', '0', 0, 0, '', '', '', '', 0),
(14, '181237', '0', '0', 0, 0, '', '', '', '', 0),
(15, '181239', '0', '0', 0, 0, '', '', '', '', 0),
(16, '181245', '0', '0', 0, 0, '', '', '', '', 0),
(17, '181246', '0', '0', 0, 0, '', '', '', '', 0),
(18, '182347', '0', '0', 390, 180, '', '', '', '', 0),
(19, '181248', '0', '0', 0, 0, '', '', '', '', 0),
(20, '181253', '0', '0', 0, 0, '', '', '', '', 0),
(21, '181254', '0', '0', 0, 0, '', '', '', '', 0),
(22, '181255', '5678', '5678', 0, 0, '', '', '', '', 0),
(23, '181256', '0', '0', 0, 0, '', '', '', '', 0),
(24, '181257', '0', '0', 0, 0, '', '', '', '', 0),
(25, '181259', '0', '0', 0, 0, '', '', '', '', 0),
(26, '181261', '0', '0', 0, 0, '', '', '', '', 0),
(27, '181262', '0', '0', 0, 0, '', '', '', '', 0),
(28, '181263', '0', '0', 0, 0, '', '', '', '', 0),
(29, '181264', '0', '0', 0, 0, '', '', '', '', 0),
(30, '181265', '0', '0', 0, 0, '', '', '', '', 0),
(31, '181266', '1234-1234-1234', '1234-1234-1234', 0, 0, '', '', '', '', 0),
(32, '181782', '0', '0', 396, 100, 'pagibig 2', '123', 'Good', '', 0),
(33, '181271', '0', '0', 0, 0, '', '', '', '', 0),
(34, '181268', '0', '0', 0, 0, '', '', '', '', 0),
(35, '181269', '0', '0', 0, 0, '', '', '', '', 0),
(36, '181272', '0', '0', 0, 0, '', '', '', '', 0),
(37, '181273', '0', '0', 0, 0, '', '', '', '', 0),
(38, '190862', '', '', 0, 0, '', '', '', '', 0),
(39, '191234', '', '', 0, 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paid_contribution`
--

CREATE TABLE IF NOT EXISTS `paid_contribution` (
  `id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `gov_agency` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid_contribution`
--

INSERT INTO `paid_contribution` (`id`, `month`, `year`, `amount`, `gov_agency`) VALUES
(3, 12, '2018', 2111, 'pag-Ibig'),
(4, 5, '2019', 7612, 'pag-ibig'),
(10, 4, '2018', 4910, 'SSS'),
(11, 10, '2018', 3744, 'SSS'),
(12, 4, '2018', 2536, 'Pag-Ibig');

-- --------------------------------------------------------

--
-- Table structure for table `sss`
--

CREATE TABLE IF NOT EXISTS `sss` (
  `sss_id` int(11) NOT NULL,
  `sss_emp_id` varchar(255) NOT NULL,
  `sss_no` varchar(255) NOT NULL,
  `ss_contribution` int(11) NOT NULL,
  `ec_contribution` double NOT NULL,
  `er_contribution` double NOT NULL,
  `ee_contribution` double NOT NULL,
  `sss_deleted` tinyint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss`
--

INSERT INTO `sss` (`sss_id`, `sss_emp_id`, `sss_no`, `ss_contribution`, `ec_contribution`, `er_contribution`, `ee_contribution`, `sss_deleted`) VALUES
(1, '1235', '0', 0, 0, 0, 0, 1),
(2, '9864', '0', 0, 0, 0, 0, 1),
(3, '1865', '1874543', 1375, 10, 0, 0, 1),
(4, '1763', '0', 0, 0, 0, 0, 1),
(5, '1987', '0', 0, 0, 0, 0, 1),
(6, '4356', '0', 0, 0, 0, 0, 1),
(7, '24', '0', 0, 0, 0, 0, 0),
(8, '63', '0', 1760, 30, 1178.7, 581.3, 0),
(9, '361', '0', 0, 0, 0, 0, 0),
(10, '41297', '0', 1760, 30, 0, 0, 0),
(11, '181234', '0', 0, 0, 0, 0, 0),
(12, '181235', '0', 0, 0, 0, 0, 0),
(13, '181236', '0', 0, 0, 0, 0, 0),
(14, '181237', '0', 0, 0, 0, 0, 0),
(15, '181239', '0', 0, 0, 0, 0, 0),
(16, '181245', '0', 0, 0, 0, 0, 0),
(17, '181246', '0', 0, 0, 0, 0, 0),
(18, '182347', '0', 0, 0, 0, 0, 0),
(19, '181248', '0', 0, 0, 0, 0, 0),
(20, '181253', '0', 0, 0, 0, 0, 0),
(21, '181254', '0', 0, 0, 0, 0, 0),
(22, '181255', '0', 0, 0, 0, 0, 0),
(23, '181256', '0', 0, 0, 0, 0, 0),
(24, '181257', '0', 0, 0, 0, 0, 0),
(25, '181259', '0', 0, 0, 0, 0, 0),
(26, '181261', '0', 0, 0, 0, 0, 0),
(27, '181262', '0', 0, 0, 0, 0, 0),
(28, '181263', '0', 0, 0, 0, 0, 0),
(29, '181264', '0', 0, 0, 0, 0, 0),
(30, '181265', '0', 0, 0, 0, 0, 0),
(31, '181266', '0', 0, 0, 0, 0, 0),
(32, '181782', '0', 0, 0, 0, 0, 0),
(33, '181271', '0', 0, 0, 0, 0, 0),
(34, '181268', '0', 0, 0, 0, 0, 0),
(35, '181269', '0', 0, 0, 0, 0, 0),
(36, '181272', '0', 0, 0, 0, 0, 0),
(37, '181273', '0', 0, 0, 0, 0, 0),
(38, '190862', '', 0, 0, 0, 0, 0),
(39, '191234', '', 1320, 10, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_Id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `pag_ibig`
--
ALTER TABLE `pag_ibig`
  ADD PRIMARY KEY (`pagibig_id`);

--
-- Indexes for table `paid_contribution`
--
ALTER TABLE `paid_contribution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`sss_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `pag_ibig`
--
ALTER TABLE `pag_ibig`
  MODIFY `pagibig_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `paid_contribution`
--
ALTER TABLE `paid_contribution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `sss`
--
ALTER TABLE `sss`
  MODIFY `sss_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
