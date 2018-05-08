-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 02:41 PM
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
(1, '12-3456789-1-000', '1232-2121-5686', 'Toy Story', '{"room_no":"126","bldg_name":"Ramon Bldg.","house":"","street_name":"San Antonio","subdivision":"Luna","barangay":"Valenzuela","city":"Makati","province":"NCR","zip_code":"3121"}', '', '{"company_tel_no":"","company_cel_no":"091756398"}', 'toyStory@email.com', 'Juan Dela Cruz', 'HR Head');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_Id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `dept_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_Id`, `dept_name`, `dept_deleted`) VALUES
(1, 'Business Department', 0),
(2, 'IT Department', 0),
(3, 'Accounting Department', 0),
(4, 'Editing Department', 0),
(5, 'Training Department', 1),
(6, 'Editing Department', 1);

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
  `emp_notification` tinyint(4) NOT NULL,
  `emp_hint_question` varchar(500) NOT NULL,
  `emp_hint_answer` varchar(500) NOT NULL,
  `emp_deleted` tinyint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_dept`, `emp_first_name`, `emp_middle_name`, `emp_last_name`, `emp_ext_name`, `emp_birthday`, `emp_email`, `emp_salary`, `emp_username`, `emp_password`, `emp_position`, `emp_notification`, `emp_hint_question`, `emp_hint_answer`, `emp_deleted`) VALUES
('181234', 4, 'Kindia', 'Luiz', 'Baston', '', '0000-00-00', 'kindia@email.com', 0, 'kindia', '$2y$10$QDn8kpkJOyTRj8wnefxEbewgtjdj42ad7V8g9L7FRTaEGsMUCysiG', 'employee', 0, '', '', 0),
('181235', 4, 'Hanji', 'Ruiz', 'Estilia', '', '0000-00-00', 'hanji@email.com', 0, 'hanji', '$2y$10$4JmJdxcMVP7sKZyY.2UNuOWdno6.yEomr7jQ0Hog5vZ2h7agKayYe', 'employee', 0, '', '', 1),
('181236', 2, 'Miandi', 'Dinaz', 'Findilia', '', '0000-00-00', 'miandi@email.com', 0, 'miandi', '$2y$10$uC3CSab65m.qGUD1pJc2beLORLcsQzD/ff4WLkHRrHJ3w1ibgo2VG', 'employee', 0, '', '', 0),
('181237', 4, 'Clin', 'Miando', 'Vindian', '', '0000-00-00', 'clin@email.com', 0, 'clin', '$2y$10$TMaw6jRgGqsOXMF.Plvgn.z9J/aawEw0.guiUF4ixtgfzR6zygN.S', 'employee', 0, '', '', 0),
('181239', 2, 'Rindiana', 'Binsa', 'Pintian', '', '0000-00-00', 'rindiana@email.com', 0, 'rindiana', '$2y$10$mlHemIdS3Rla0Y2w3dz/jOh.CPKhmJkOIo3fEHWeZU2sLFrjaIBuy', 'employee', 0, '', '', 0),
('181245', 1, 'Ferndi', 'Sintma', 'Trinfy', '', '0000-00-00', 'ferndi@email.com', 0, 'ferndi', '$2y$10$hDNk9xZGd4fFMqmkVCtw1OhNYECnUH7OgZ69tn52qhIs5h5axAC0e', 'employee', 0, '', '', 0),
('181246', 1, 'Erlynd', 'Gandri', 'Santin', '', '0000-00-00', 'erlynd@email.com', 0, 'erlynd', '$2y$10$5mUa0vrHqW34PVAN2gupjuH1V1pPNqdlh4i6kZKJCrrfgWMDBweiW', 'employee', 0, '', '', 0),
('181248', 2, 'Nyko', 'Marfin', 'Limian', 'Jr', '0000-00-00', 'nyko@email.com', 0, 'nyko', '$2y$10$C.E/HIjme6DNc0r5KXtHb.m/gwvu.9T4zfBpmMisjZmFQVscd6.yu', 'employee', 0, '', '', 0),
('181253', 4, 'lyn', 'gunti', 'huana', '', '0000-00-00', 'lyn@email.com', 0, 'lyn', '$2y$10$QN3MyCkpy5EiTqP3tom7iOtOD3DnXHvjcSXSzwGE1CViC8v8EYbeC', 'employee', 0, '', '', 0),
('181254', 6, 'yuindia', 'maylin', 'kindia', '', '0000-00-00', 'yuindia@email.com', 0, 'yuindia', '$2y$10$w6HlDFqAK8/nxYa1imuKn.LcD8tDvGaFeIrBBT792k2qs4glMUCs2', 'employee', 0, '', '', 0),
('181255', 1, 'Riantia', 'Nartin', 'Bindia', '', '0000-00-00', 'riantia@email.com', 0, 'Riantia', '$2y$10$RejreNqXuzYPU2YU7REuU.2ORWXeMFJTxQxWelmdMSmo.O1Dl3BTG', 'employee', 0, '', '', 0),
('181256', 1, 'Jinthia', 'Gintyan', 'Englita', '', '0000-00-00', 'jinthia@email.com', 0, 'jinthia', '$2y$10$00BLHc43Ujd08Up76bJ8ReEFpXWrjC7zXEVX8OgeyhCvQggGsRYUi', 'employee', 0, '', '', 0),
('181257', 1, 'Roberto', 'Binta', 'Lima', 'Jr', '0000-00-00', 'roberto@email.com', 0, 'roberto', '$2y$10$aVLantxCgOmz632C39QNy.bfZicXY9OYETObg5IxOCI3r7P./R./W', 'employee', 0, '', '', 0),
('181259', 1, 'Guiny', 'Ruz', 'Rintay', '', '0000-00-00', 'guiny@email.com', 0, 'guiny', '$2y$10$DrDlmcyKbCd1daxYijnedeMSO4Fi2yTGWW8r8R1ntvSjwZDFEwtKy', 'employee', 0, '', '', 0),
('181261', 1, 'Kenzer', 'Santos', 'Ruiz', '', '0000-00-00', 'kenzer@email.com', 0, 'kenzer', '$2y$10$JgTgfOk/mTCymH0YgrNCq.1PgIKmXm33M6ljLzGTDg6Ay654Ea96C', 'employee', 0, '', '', 0),
('181262', 1, 'Himjun', 'Juint', 'Santiago', '', '0000-00-00', 'himjun@email.com', 0, 'himjun', '$2y$10$NLe96/C3YX2.yWrS6ZZZ9OhH3WTCxDdwP5LJ9OlSi9Ob2kbrwwdty', 'employee', 0, '', '', 0),
('181263', 1, 'Duixon', 'Ferdin', 'Lintio', '', '0000-00-00', 'duixon@email.com', 0, 'duixon', '$2y$10$aTUcXuMaBBMSVDEGuYYUjeXP2jpKxzP/6kE8Qt2Fr5ZwqOrtKcreW', 'employee', 0, '', '', 0),
('181264', 1, 'zxywykx ', 'Pedyero', 'Gonzales', '', '0000-00-00', 'zxywykx', 0, 'zxywykx', '$2y$10$a7ANODQbjFWAQYe/Mw1cJ.O5eyTb0SpkNo6AH499wqqta5mVWiggK', 'admin', 0, '', '', 0),
('181265', 1, 'Zytyzhia', 'Munyar', 'Guimaz', '', '0000-00-00', 'zytyzhia', 0, 'zytyzhia', '$2y$10$GnTgjrJWnfvuc.uu0IjJ2.2yEJWEJxG3wLUGos2hCXOjTvF3FooaC', 'admin', 0, '', '', 0),
('181266', 1, 'Mintroz', 'Huizon', 'Antolim', '', '0000-00-00', 'mintroz@email.com', 0, 'mintroz', '$2y$10$kiR/qwuGEP5b0dDRI5vshO/8hHAIedX9rl4kPuc7JMB.mWmi2hvJu', 'employee', 0, '', '', 0),
('181268', 1, 'Ramon', 'Arroyo', 'Macapagal', 'III', '0000-00-00', 'ramon@email.com', 0, 'ramon', '$2y$10$lQeoOoXM7qKcoo41BRN7r.yi8TOe334Tt9.hCh9tdSdXB.JBjxl0O', 'employee', 0, '', '', 0),
('181269', 1, 'andres', 'Lipa', 'Bonifacio', '', '0000-00-00', 'andres@email.com', 0, 'andres', '$2y$10$X.9q2kIhykAs5Ltvba16E.DLluhPGV0DxHaImyN9Rrpz0mBGH.H8e', 'employee', 0, '', '', 0),
('181271', 1, 'Elpidio', 'Quezon', 'Quirino', '', '0000-00-00', 'elpidio@email.com', 0, 'elpidio', '$2y$10$0r1tOgTqfKs2Rhe1kifKE.ym4ag54tq8UaXB5.od6Z738Sgpy3tcy', 'employee', 0, '', '', 0),
('181272', 1, 'Jose', 'Protacio', 'Rizal', '', '0000-00-00', 'rizal@email.com', 0, 'jose', '$2y$10$jRcv7k7KSg7elxKGC1VpCOoWmpTFsy.o5Wp7vVp24JGxoCYKCZIbO', 'employee', 0, '', '', 0),
('181273', 1, 'kinjo', 'finday', 'Linton', '', '0000-00-00', 'kinjo', 0, 'kinjo', '$2y$10$uu7QAMdizpabQfTPU.n1dOgSv.Xu6WrL8Ex8xzfwisUNtvFv5lDpG', 'employee', 0, '', '', 0),
('181782', 0, 'Ferdinand', 'Magelan', 'Juinty', '', '0000-00-00', 'ferdinad@email.com', 0, 'ferdinand', '$2y$10$am5/8xZdFY1DIRCn.FU3je7EXYOm4NMABMVC3blBh.00eaeW3iyey', 'employee', 0, '', '', 0),
('182309', 2, 'Velinda', 'Santos', 'Ruz', '', '1970-01-01', 'velinda@a', 0, 'velinda', '$2y$10$98s.yrkjFZYjeegYy9OXd.m0sh8OpIE..u4zoSvw6rlNu1wDN3mOu', 'employee', 0, '', '', 0),
('182347', 1, 'Marie', 'Junti', 'Yuntayaw', '', '0000-00-00', 'marie', 0, 'marie', '$2y$10$H6WHdGXGLgxP6cuKJ4lKoe0aQsoCjwhPJ09aHPwEH0cEPLvg44J02', 'employee', 0, '', '', 0),
('187646', 1, 'Amiel', 'Dela Cruz', 'Gonzales', '', '1970-01-01', 'amiel@g', 0, 'amiel', '$2y$10$/B45OJOyU5ZLfJWuegXlau6Dswyrr45XIDTCYJNZ9G9ZMH6Jc90bm', 'admin', 0, '', '', 0),
('189814', 1, 'Amiel', 'Gonzales', 'Dela Cruz', '', '1970-01-01', 'amiel@nmgresources.ph', 18000, 'anthony', '$2y$10$3TRag1cRlm.pwzfN6xNDPO4visDKzbszo4WHBa3MbubC9uQFShABm', 'admin', 0, 'Mother maiden''s name', 'valencia', 0),
('190862', 2, 'Marie', 'Celine', 'Bondilia', '', '0000-00-00', 'a@', 0, 'marieCeline', '$2y$10$7j5jVOMmxu8kkox4k/g6Muo4usElFDl4iBa69sYbr.R9KmuWAlnZK', 'employee', 0, '', '', 0),
('191234', 1, 'Kyndo', 'Dela Rosa', 'Aquina', '', '1997-03-07', '@2', 12000, 'kyndo', '$2y$10$5q72ic7v4ZGrbZK70FpRNOoeh9on7VEG7bL4fg09dFz7B4oqEXdoS', 'employee', 0, 'Father''s middle name', 'Dela Rosa', 0),
('201814', 3, 'Rafael', 'Miranda', 'Gutierrez', '', '1970-01-01', 'paulo@nmgresources.ph', 1100, 'Rafael', '$2y$10$FbwocFGk4ftYCo.39cmIFeVUz83sYkheBrmzRHS92WYvv7xUv4yey', 'admin', 0, '', '', 0),
('24', 1, 'Paulo', 'Miranda', 'Gutierrez', '', '0000-00-00', '', 0, 'Paulo020', '$2y$10$KnEDjADxJa4EcCCQneZMHOyTrAg0L1.VAX9q3//gCkhEHbWTxPQRy', 'admin', 0, '', '', 0),
('361', 1, 'Ren', 'Solo', 'Kylo', '', '0000-00-00', '', 0, 'Kylo', '$2y$10$/D7w77oG/s3tZn38oZE1mes1ezKmnx9a65FU75S44JW6S4gpUp4li', 'employee', 0, '', '', 0);

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
  `pagibig_ee_share_mp_two` int(11) NOT NULL,
  `pagibig_er_share_mp_two` int(11) NOT NULL,
  `pagibig_mem_prog_two` varchar(20) NOT NULL,
  `monthly_compen` varchar(255) NOT NULL,
  `pagibig_remarks` varchar(255) NOT NULL,
  `pagibig_remarks_date` varchar(255) NOT NULL,
  `pagibig_deleted` tinyint(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pag_ibig`
--

INSERT INTO `pag_ibig` (`pagibig_id`, `pagibig_emp_id`, `pagibig_mid_no`, `pagibig_no`, `pagibig_ee_share`, `pagibig_er_share`, `pagibig_mem_prog`, `pagibig_ee_share_mp_two`, `pagibig_er_share_mp_two`, `pagibig_mem_prog_two`, `monthly_compen`, `pagibig_remarks`, `pagibig_remarks_date`, `pagibig_deleted`) VALUES
(1, '1235', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 1),
(2, '9864', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 1),
(3, '1865', '123', '123456789', 100, 100, '', 0, 0, '', '', '', '', 1),
(4, '1763', '0', '0', 100, 100, '', 0, 0, '', '', '', '', 1),
(5, '1987', '1234-5678-5678', '1234-5678-5678', 124, 198, '', 0, 0, '', '', '', '', 1),
(6, '4356', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 1),
(7, '24', '0--', '0--', 380, 290, '', 0, 0, '', '', '', '', 0),
(8, '63', '--', '0', 0, 0, '', 0, 0, '', '', 'N', '04/23/2018', 0),
(9, '361', '--', '6808-8468-2085', 768, 879, 'MP1', 0, 0, 'MP2', '', '', '', 0),
(11, '181234', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(12, '181235', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 1),
(13, '181236', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(14, '181237', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(15, '181239', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(16, '181245', '3846-8463-4849', '6784-6378-3387', 100, 100, 'MP1', 100, 100, 'MP2', '', '', '', 0),
(17, '181246', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(18, '182347', '2333-3333-3333', '0--', 390, 180, 'MP1', 0, 0, 'MP2', '', '', '', 0),
(19, '181248', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(20, '181253', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(21, '181254', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(22, '181255', '5678', '5678', 0, 0, '', 0, 0, '', '', '', '', 0),
(23, '181256', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(24, '181257', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(25, '181259', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(26, '181261', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(27, '181262', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(28, '181263', '1234-1234-1234', '1234-1234-1234', 0, 0, '', 0, 0, '', '', '', '', 0),
(29, '181264', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(30, '181265', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(31, '181266', '1234-1234-1234', '1234-1234-1234', 0, 0, '', 0, 0, '', '', '', '', 0),
(32, '181782', '9678-9374-5839', '--', 396, 100, 'MP1', 560, 490, 'MP2', '123', '', '', 0),
(33, '181271', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(34, '181268', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(35, '181269', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(36, '181272', '--', '--', 0, 0, '', 0, 0, '', '', '', '', 0),
(37, '181273', '0', '0', 0, 0, '', 0, 0, '', '', '', '', 0),
(38, '190862', '', '', 0, 0, '', 0, 0, '', '', '', '', 0),
(39, '191234', '', '', 0, 0, '', 0, 0, '', '', '', '', 0),
(40, '201814', '2323-3231-1212', '0000-0000-0000', 250, 250, 'MP2', 0, 0, '', '500', 'N', '04/20/2018', 0),
(41, '189814', '6385-3858-3858', '--', 0, 0, 'MP1', 542, 450, 'MP2', '', '', '', 0),
(42, '187646', '', '', 0, 0, '', 0, 0, '', '', '', '', 0),
(43, '182309', '', '', 0, 0, '', 0, 0, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paid_contribution`
--

CREATE TABLE IF NOT EXISTS `paid_contribution` (
  `id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `gov_agency` varchar(255) NOT NULL,
  `paid_employee` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid_contribution`
--

INSERT INTO `paid_contribution` (`id`, `month`, `year`, `amount`, `gov_agency`, `paid_employee`) VALUES
(17, 4, '2018', 2980, 'Pag-Ibig', '[{"pagibig_emp_id":"181266","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181234","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181255","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"190862","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181269","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181256","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"191234","pagibig_ee_share":"11","pagibig_er_share":"41"},{"pagibig_emp_id":"181236","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181264","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"41297","pagibig_ee_share":"500","pagibig_er_share":"300"},{"pagibig_emp_id":"181265","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"201814","pagibig_ee_share":"250","pagibig_er_share":"250"},{"pagibig_emp_id":"24","pagibig_ee_share":"380","pagibig_er_share":"290"},{"pagibig_emp_id":"181253","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181782","pagibig_ee_share":"396","pagibig_er_share":"100"},{"pagibig_emp_id":"181254","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"361","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181257","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181248","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181263","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181273","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181268","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181239","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181271","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181259","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181272","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181261","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181262","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181246","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181245","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181237","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"182347","pagibig_ee_share":"390","pagibig_er_share":"180"}]'),
(18, 4, '2019', 2566, 'Pag-Ibig', '[{"pagibig_emp_id":"181266","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181234","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181255","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"190862","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181269","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181256","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"191234","pagibig_ee_share":"21","pagibig_er_share":"51"},{"pagibig_emp_id":"181236","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181264","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"41297","pagibig_ee_share":"500","pagibig_er_share":"300"},{"pagibig_emp_id":"181265","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"201814","pagibig_ee_share":"250","pagibig_er_share":"250"},{"pagibig_emp_id":"24","pagibig_ee_share":"380","pagibig_er_share":"290"},{"pagibig_emp_id":"181253","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181782","pagibig_ee_share":"396","pagibig_er_share":"100"},{"pagibig_emp_id":"181254","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"361","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181257","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181248","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181263","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181273","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181268","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181239","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181271","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181259","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181272","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181261","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181262","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181246","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181245","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181237","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"182347","pagibig_ee_share":"390","pagibig_er_share":"180"}]'),
(19, 5, '2019', 2879, 'Pag-Ibig', '[{"pagibig_emp_id":"181266","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181234","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181255","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"190862","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181269","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181256","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"191234","pagibig_ee_share":"31","pagibig_er_share":"71"},{"pagibig_emp_id":"181236","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181264","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"41297","pagibig_ee_share":"500","pagibig_er_share":"300"},{"pagibig_emp_id":"181265","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"201814","pagibig_ee_share":"250","pagibig_er_share":"250"},{"pagibig_emp_id":"24","pagibig_ee_share":"380","pagibig_er_share":"290"},{"pagibig_emp_id":"181253","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181782","pagibig_ee_share":"396","pagibig_er_share":"100"},{"pagibig_emp_id":"181254","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"361","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181257","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181248","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181263","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181273","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181268","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181239","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181271","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181259","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181272","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181261","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181262","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181246","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181245","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"181237","pagibig_ee_share":"0","pagibig_er_share":"0"},{"pagibig_emp_id":"182347","pagibig_ee_share":"390","pagibig_er_share":"180"}]'),
(21, 5, '2019', 1340, 'SSS', '[{"sss_emp_id":"181266","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181234","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181255","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"190862","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181269","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181256","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"191234","sss_ss_contribution":"1100","sss_ec_contribution":"10"},{"sss_emp_id":"181236","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"41297","sss_ss_contribution":"110","sss_ec_contribution":"10"},{"sss_emp_id":"181264","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181265","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"201814","sss_ss_contribution":"110","sss_ec_contribution":"10"},{"sss_emp_id":"24","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181253","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181782","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181254","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"361","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181257","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181248","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181263","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181273","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181268","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181239","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181271","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181259","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181272","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181261","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181262","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181246","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181245","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181237","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"182347","sss_ss_contribution":"0","sss_ec_contribution":"0"}]'),
(22, 4, '2018', 1478, 'SSS', '[{"sss_emp_id":"181266","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181234","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181255","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"190862","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181269","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181256","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"191234","sss_ss_contribution":"1220","sss_ec_contribution":"10"},{"sss_emp_id":"181236","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"41297","sss_ss_contribution":"110","sss_ec_contribution":"10"},{"sss_emp_id":"181264","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181265","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"201814","sss_ss_contribution":"110","sss_ec_contribution":"10"},{"sss_emp_id":"24","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181253","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181782","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181254","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"361","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181257","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181248","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181263","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181273","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181268","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181239","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181271","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181259","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181272","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181261","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181262","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181246","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181245","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181237","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"182347","sss_ss_contribution":"0","sss_ec_contribution":"0"}]'),
(26, 5, '2018', 3240, 'SSS', '[{"sss_emp_id":"181266","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"191234","sss_ss_contribution":"1320","sss_ec_contribution":"10"},{"sss_emp_id":"181234","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181255","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"190862","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181269","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"189814","sss_ss_contribution":"1760","sss_ec_contribution":"30"},{"sss_emp_id":"181256","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181236","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"187646","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181264","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181265","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"24","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"201814","sss_ss_contribution":"110","sss_ec_contribution":"10"},{"sss_emp_id":"181253","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181782","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181254","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"361","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181257","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181248","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181263","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181273","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181268","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181239","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181271","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181259","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181272","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181261","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181262","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181246","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181245","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"181237","sss_ss_contribution":"0","sss_ec_contribution":"0"},{"sss_emp_id":"182347","sss_ss_contribution":"0","sss_ec_contribution":"0"}]'),
(28, 5, '2018', 4083, 'Pag-Ibig', '[{"pagibig_emp_id":"181266","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"191234","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181234","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181255","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"190862","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181269","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"189814","pagibig_ee_share":542,"pagibig_er_share":450},{"pagibig_emp_id":"181256","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181236","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181264","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"187646","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181265","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"24","pagibig_ee_share":380,"pagibig_er_share":290},{"pagibig_emp_id":"201814","pagibig_ee_share":250,"pagibig_er_share":250},{"pagibig_emp_id":"181253","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181782","pagibig_ee_share":956,"pagibig_er_share":590},{"pagibig_emp_id":"181254","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"361","pagibig_ee_share":768,"pagibig_er_share":879},{"pagibig_emp_id":"181257","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181248","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181263","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181273","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181268","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181239","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181271","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181259","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181272","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181261","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181262","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181246","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"181245","pagibig_ee_share":200,"pagibig_er_share":200},{"pagibig_emp_id":"181237","pagibig_ee_share":0,"pagibig_er_share":0},{"pagibig_emp_id":"182347","pagibig_ee_share":390,"pagibig_er_share":180}]');

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

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
(7, '24', '11-0987654-1', 0, 0, 0, 0, 0),
(9, '361', '0--', 0, 0, 0, 0, 0),
(11, '181234', '0', 0, 0, 0, 0, 0),
(12, '181235', '0', 0, 0, 0, 0, 1),
(13, '181236', '0', 0, 0, 0, 0, 0),
(14, '181237', '0', 0, 0, 0, 0, 0),
(15, '181239', '0', 0, 0, 0, 0, 0),
(16, '181245', '0--', 0, 0, 0, 0, 0),
(17, '181246', '0', 0, 0, 0, 0, 0),
(18, '182347', '0--', 0, 0, 0, 0, 0),
(19, '181248', '0', 0, 0, 0, 0, 0),
(20, '181253', '0', 0, 0, 0, 0, 0),
(21, '181254', '0', 0, 0, 0, 0, 0),
(22, '181255', '0', 0, 0, 0, 0, 0),
(23, '181256', '0', 0, 0, 0, 0, 0),
(24, '181257', '0', 0, 0, 0, 0, 0),
(25, '181259', '0', 0, 0, 0, 0, 0),
(26, '181261', '0', 0, 0, 0, 0, 0),
(27, '181262', '0', 0, 0, 0, 0, 0),
(28, '181263', '12-1234567-1', 0, 0, 0, 0, 0),
(29, '181264', '0', 0, 0, 0, 0, 0),
(30, '181265', '0', 0, 0, 0, 0, 0),
(31, '181266', '0', 0, 0, 0, 0, 0),
(32, '181782', '0--', 0, 0, 0, 0, 0),
(33, '181271', '0', 0, 0, 0, 0, 0),
(34, '181268', '0', 0, 0, 0, 0, 0),
(35, '181269', '0', 0, 0, 0, 0, 0),
(36, '181272', '0--', 0, 0, 0, 0, 0),
(37, '181273', '0', 0, 0, 0, 0, 0),
(38, '190862', '', 0, 0, 0, 0, 0),
(39, '191234', '', 1320, 10, 0, 0, 0),
(40, '201814', '23-3232323-3', 110, 10, 73.7, 36.3, 0),
(41, '189814', '66-3353566-7', 1760, 30, 1178.7, 581.3, 0),
(42, '187646', '', 0, 0, 0, 0, 0),
(43, '182309', '', 0, 0, 0, 0, 0);

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
  `ref_deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sss_reference`
--

INSERT INTO `sss_reference` (`ref_id`, `ref_range_start`, `ref_range_end`, `ref_monthly_salary`, `ref_er`, `ref_ee`, `ref_ec`, `ref_deleted`) VALUES
(1, 2, '2', 2, 2, 2, 2, 1),
(2, 56, '78', 344, 343, 4334, 4, 1),
(3, 12, '45', 43, 43, 443, 43, 1),
(4, 56, '0', 0, 0, 0, 0, 1),
(5, 1000, '1249.99', 1100, 73.7, 36.3, 10, 0),
(7, 15000, 'over', 16000, 1178.7, 581.3, 30, 0),
(8, 7250, '7749.99', 7500, 552.5, 272.5, 10, 0),
(9, 8750, '9249.99', 9000, 663, 327, 10, 0),
(10, 1250, '1749.99', 1500, 110.5, 54.5, 10, 0),
(11, 1750, '2249.99', 2000, 147.3, 72.7, 10, 0),
(12, 2250, '2749.99', 2500, 184.2, 90.8, 10, 0),
(13, 2750, '3249.99', 3000, 221, 109, 10, 0),
(14, 3250, '3749.99', 3500, 257.8, 127.2, 10, 0),
(15, 3750, '4249.99', 4000, 294.7, 145.3, 10, 0),
(16, 4250, '4749.99', 4500, 331.5, 163.5, 10, 0),
(17, 4750, '5249.99', 5000, 368.3, 181.7, 10, 0),
(18, 5250, '5749.99', 5500, 405.2, 199.8, 10, 0),
(19, 5750, '6249.99', 6000, 442, 218, 10, 0),
(20, 6250, '6749.99', 6500, 478.8, 236.2, 10, 0),
(21, 6750, '7249.99', 7000, 515.7, 254.3, 10, 0),
(22, 7750, '8249.99', 8000, 589.3, 290.7, 10, 0),
(23, 8250, '8749.99', 8500, 626.2, 308.8, 10, 0),
(24, 9250, '9749.99', 9500, 699.8, 345.2, 10, 0),
(25, 10250, '10749.99', 10500, 773.5, 381.5, 10, 0),
(26, 10750, '11249.99', 11000, 810.3, 399.7, 10, 0),
(27, 11250, '11749.99', 11500, 847.2, 417.8, 10, 0),
(28, 11750, '12249.99', 12000, 884, 436, 10, 0),
(29, 12250, '12749.99', 12500, 920.8, 454.2, 10, 0),
(30, 12750, '13249.99', 13000, 957.7, 472.3, 10, 0),
(31, 13250, '13749.99', 13500, 994.5, 490.5, 10, 0),
(32, 13750, '14249.99', 14000, 1031.3, 508.7, 10, 0),
(33, 14250, '14749.99', 14500, 1068.2, 526.8, 10, 0),
(34, 14750, '15249.99', 15000, 1105, 545, 30, 0);

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
-- Indexes for table `sss_reference`
--
ALTER TABLE `sss_reference`
  ADD PRIMARY KEY (`ref_id`);

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
  MODIFY `dept_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pag_ibig`
--
ALTER TABLE `pag_ibig`
  MODIFY `pagibig_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `paid_contribution`
--
ALTER TABLE `paid_contribution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `sss`
--
ALTER TABLE `sss`
  MODIFY `sss_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `sss_reference`
--
ALTER TABLE `sss_reference`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
