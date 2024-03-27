-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 06:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'nisan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(20) NOT NULL,
  `b_roll` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fa_name` varchar(50) NOT NULL,
  `mo_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` text NOT NULL,
  `school` text NOT NULL,
  `ssc_gpa` decimal(4,2) NOT NULL,
  `pass_year` int(4) NOT NULL,
  `board` varchar(10) NOT NULL,
  `version` varchar(7) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `b_roll`, `name`, `fa_name`, `mo_name`, `dob`, `phone`, `email`, `address`, `school`, `ssc_gpa`, `pass_year`, `board`, `version`, `dept`, `message`) VALUES
(87, 234, 'Nisan', 'Jogodish', 'Alo', '2002-02-22', 2147483647, 'nisanray2020.5@gmail.com', 'Dumki', 'NPHS', 5.00, 2023, 'Dhaka', 'eng', 'science', ''),
(88, 234, 'Karim', 'Rahim', 'Amena', '2002-02-22', 2147483647, 'nisanray2020.5@gmail.com', 'Dumki', 'SPHS', 4.98, 2023, 'Dhaka', 'eng', 'science', ''),
(89, 234, 'MIM', 'KARIM', 'AMENA', '2001-02-22', 2147483647, 'mim5@gmail.com', 'Dumki', 'SPHS', 4.93, 2023, 'Dhaka', 'eng', 'science', ''),
(90, 234, 'SOHAN', 'MEHDI', 'SMRITY', '2001-05-07', 2147483647, 'sohan5@gmail.com', 'Dumki', 'SPHS', 3.50, 2023, 'Dhaka', 'eng', 'science', ''),
(91, 777570, 'Sumaiya Ahmed', 'Akhtar Begum Sumaiya Ali', 'Hasan Rahman Parveen Ali', '1999-03-09', 1785563909, 'sumaiya.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 3.57, 2015, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(92, 349554, 'Hasan Khan', 'Akhtar Hossain Ali Ahmed', 'Ali Begum Akhtar Ahmed', '1980-12-14', 1824398834, 'hasan.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.58, 2017, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(93, 657518, 'Tajul Siddique', 'Abdul Akhtar Hasan Siddique', 'Ali Ahmed Parveen Ahmed', '1981-05-21', 1124948663, 'tajul.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 4.74, 2023, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(94, 431096, 'Fatima Hossain', 'Ali Khan Jahan Siddique', 'Tajul Jahan Fatima Jahan', '1989-02-20', 1562172948, 'fatima.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 3.17, 2019, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(95, 304899, 'Hasan Ali', 'Hasan Ahmed Sumaiya Begum', 'Mohammad Siddique Abdul Ahmed', '2001-04-08', 1478254845, 'hasan.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 3.16, 2017, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(96, 314628, 'Abdul Siddique', 'Mohammad Ahmed Jahan Hossain', 'Ali Siddique Parveen Ahmed', '1997-09-04', 1213568950, 'abdul.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 4.93, 2018, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(97, 356622, 'Mohammad Khan', 'Parveen Rahman Jahan Khan', 'Parveen Hossain Jahan Karim', '2005-06-26', 1467914729, 'mohammad.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.88, 2020, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(98, 191564, 'Hasan Ali', 'Fatima Siddique Akhtar Hossain', 'Hasan Karim Abdul Khan', '1984-10-31', 1516707163, 'hasan.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 4.66, 2020, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(99, 839380, 'Ali Khan', 'Jahan Akhtar Fatima Hossain', 'Hasan Ahmed Hasan Ali', '1995-04-08', 1734173992, 'ali.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.29, 2023, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(100, 547521, 'Hasan Karim', 'Fatima Siddique Abdul Rahman', 'Karim Khan Abdul Khan', '1999-04-08', 1592069809, 'hasan.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 4.96, 2015, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(101, 349039, 'Ali Rahman', 'Parveen Karim Tajul Jahan', 'Mohammad Rahman Fatima Siddique', '1983-01-09', 1259514365, 'ali.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 3.79, 2020, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(102, 573904, 'Ali Ahmed', 'Tajul Rahman Jahan Ali', 'Jahan Karim Hasan Karim', '1994-01-02', 1317923672, 'ali.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 3.93, 2023, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(103, 307391, 'Hasan Jahan', 'Mohammad Siddique Fatima Akhtar', 'Karim Rahman Akhtar Akhtar', '2003-04-01', 1958357793, 'hasan.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.73, 2017, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(104, 304712, 'Sumaiya Ahmed', 'Tajul Siddique Hasan Jahan', 'Fatima Jahan Mohammad Ali', '2005-11-29', 1355541428, 'sumaiya.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 4.37, 2016, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(105, 931174, 'Karim Rahman', 'Ali Ahmed Tajul Rahman', 'Mohammad Ahmed Tajul Begum', '1987-07-24', 1666180745, 'karim.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 3.27, 2017, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(106, 644673, 'Ali Karim', 'Parveen Akhtar Jahan Ahmed', 'Parveen Karim Karim Begum', '1980-03-10', 1138345809, 'ali.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 3.46, 2023, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(107, 935275, 'Jahan Begum', 'Abdul Ahmed Karim Ahmed', 'Jahan Hossain Mohammad Karim', '1983-03-20', 1972084458, 'jahan.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 4.73, 2023, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(108, 978756, 'Tajul Rahman', 'Abdul Hossain Tajul Akhtar', 'Jahan Karim Mohammad Hossain', '2003-04-18', 1788487872, 'tajul.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 4.60, 2017, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(109, 594899, 'Parveen Hossain', 'Sumaiya Siddique Akhtar Ahmed', 'Mohammad Karim Jahan Akhtar', '1998-12-05', 1136179961, 'parveen.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 3.84, 2023, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(110, 567390, 'Karim Hossain', 'Rahman Akhtar Jahan Siddique', 'Parveen Jahan Hasan Akhtar', '2002-07-03', 1642307646, 'karim.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 4.80, 2017, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(111, 876535, 'Karim Khan', 'Ali Siddique Sumaiya Hossain', 'Parveen Karim Sumaiya Ali', '1999-07-26', 1758491679, 'karim.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.09, 2015, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(112, 528237, 'Tajul Hossain', 'Abdul Karim Tajul Begum', 'Jahan Jahan Rahman Siddique', '1987-12-30', 1936647411, 'tajul.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 3.56, 2016, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(113, 116453, 'Ali Ahmed', 'Tajul Akhtar Parveen Ahmed', 'Mohammad Rahman Parveen Hossain', '1997-01-20', 1189391921, 'ali.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 3.24, 2018, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(114, 390448, 'Akhtar Karim', 'Ali Begum Hasan Jahan', 'Parveen Karim Abdul Rahman', '1995-08-23', 1187841965, 'akhtar.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 4.45, 2015, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(115, 310293, 'Jahan Hossain', 'Sumaiya Rahman Mohammad Jahan', 'Ali Siddique Karim Karim', '1999-02-15', 1872780711, 'jahan.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 4.53, 2023, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(116, 680789, 'Karim Hossain', 'Fatima Jahan Fatima Siddique', 'Hasan Hossain Jahan Ali', '1985-03-13', 1643731191, 'karim.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 4.54, 2022, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(117, 739148, 'Tajul Rahman', 'Parveen Siddique Abdul Akhtar', 'Rahman Khan Rahman Jahan', '1989-07-03', 1732904143, 'tajul.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 3.89, 2016, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(118, 760106, 'Tajul Siddique', 'Hasan Khan Jahan Hossain', 'Parveen Siddique Mohammad Khan', '1987-09-23', 1613917879, 'tajul.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 4.44, 2020, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(119, 456977, 'Parveen Siddique', 'Rahman Akhtar Sumaiya Karim', 'Rahman Siddique Fatima Akhtar', '1991-10-05', 1396521740, 'parveen.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 4.98, 2022, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(120, 598403, 'Jahan Jahan', 'Fatima Khan Abdul Rahman', 'Akhtar Begum Tajul Rahman', '2002-02-22', 1775472817, 'jahan.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.60, 2022, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(121, 648419, 'Rahman Ahmed', 'Hasan Begum Fatima Karim', 'Jahan Begum Jahan Akhtar', '1987-08-24', 1187789856, 'rahman.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 4.88, 2022, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(122, 627248, 'Parveen Siddique', 'Karim Hossain Mohammad Hossain', 'Parveen Begum Tajul Rahman', '2001-02-07', 1963924160, 'parveen.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 3.52, 2021, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(123, 441537, 'Hasan Hossain', 'Mohammad Ahmed Ali Jahan', 'Tajul Akhtar Sumaiya Ali', '1999-02-15', 1842280660, 'hasan.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 3.68, 2016, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(124, 864170, 'Tajul Ali', 'Parveen Ahmed Akhtar Siddique', 'Fatima Siddique Jahan Rahman', '1991-02-24', 1918521019, 'tajul.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 4.68, 2022, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(125, 619532, 'Hasan Karim', 'Abdul Ahmed Hasan Akhtar', 'Sumaiya Karim Parveen Hossain', '1994-03-02', 1276874316, 'hasan.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 3.69, 2020, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(126, 889902, 'Fatima Begum', 'Abdul Siddique Ali Khan', 'Mohammad Jahan Sumaiya Jahan', '2004-09-02', 1821411318, 'fatima.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 3.55, 2022, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(127, 446181, 'Mohammad Karim', 'Sumaiya Rahman Hasan Rahman', 'Fatima Siddique Sumaiya Ali', '2004-08-22', 1378243375, 'mohammad.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 3.23, 2018, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(128, 308161, 'Mohammad Khan', 'Ali Begum Hasan Hossain', 'Fatima Begum Fatima Akhtar', '2002-01-11', 1294006351, 'mohammad.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.98, 2022, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(129, 167210, 'Fatima Ali', 'Ali Ali Rahman Akhtar', 'Abdul Begum Rahman Khan', '1988-02-09', 1591353595, 'fatima.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 4.97, 2016, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(130, 214521, 'Ali Rahman', 'Abdul Khan Ali Ali', 'Karim Khan Abdul Rahman', '1981-03-30', 1564484738, 'ali.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 4.97, 2015, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(131, 767667, 'Fatima Rahman', 'Mohammad Begum Sumaiya Hossain', 'Ali Begum Sumaiya Rahman', '2002-03-26', 1499293010, 'fatima.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 3.70, 2021, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(132, 131085, 'Sumaiya Karim', 'Akhtar Akhtar Fatima Begum', 'Karim Begum Mohammad Ali', '1996-05-02', 1641080854, 'sumaiya.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 4.25, 2018, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(133, 140684, 'Fatima Siddique', 'Karim Jahan Karim Begum', 'Hasan Karim Karim Jahan', '1995-04-11', 1759263244, 'fatima.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 3.33, 2020, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(134, 739196, 'Fatima Akhtar', 'Tajul Khan Karim Ali', 'Ali Rahman Abdul Rahman', '2005-12-15', 1523465466, 'fatima.akhtar@example.com', 'Dhaka, Bangladesh', 'Random School', 4.08, 2019, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(135, 375734, 'Mohammad Karim', 'Mohammad Siddique Akhtar Akhtar', 'Mohammad Ahmed Karim Khan', '1984-11-12', 1961219698, 'mohammad.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 4.93, 2020, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(136, 799502, 'Mohammad Khan', 'Parveen Karim Sumaiya Begum', 'Fatima Khan Jahan Rahman', '1998-07-17', 1226780205, 'mohammad.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.88, 2016, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(137, 736103, 'Karim Akhtar', 'Abdul Hossain Ali Hossain', 'Hasan Hossain Ali Ahmed', '1993-11-01', 1329805196, 'karim.akhtar@example.com', 'Dhaka, Bangladesh', 'Random School', 3.17, 2023, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(138, 754309, 'Karim Ali', 'Ali Begum Fatima Ali', 'Sumaiya Begum Mohammad Karim', '1994-01-12', 1472252613, 'karim.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 3.21, 2023, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(139, 820787, 'Rahman Jahan', 'Ali Siddique Tajul Ali', 'Rahman Begum Rahman Jahan', '1986-09-13', 1790596125, 'rahman.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.80, 2022, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(140, 662944, 'Jahan Begum', 'Ali Rahman Parveen Akhtar', 'Fatima Rahman Abdul Rahman', '1993-02-21', 1976365601, 'jahan.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 3.90, 2016, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(141, 288907, 'Karim Khan', 'Hasan Begum Akhtar Ahmed', 'Hasan Ahmed Jahan Karim', '1981-06-13', 1610065811, 'karim.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.45, 2022, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(142, 489012, 'Jahan Ali', 'Ali Jahan Sumaiya Siddique', 'Akhtar Karim Tajul Akhtar', '1982-09-19', 1638426910, 'jahan.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 3.49, 2016, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(143, 219517, 'Ali Jahan', 'Parveen Khan Sumaiya Begum', 'Fatima Hossain Mohammad Rahman', '1997-01-16', 1942397487, 'ali.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.87, 2019, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(144, 867301, 'Jahan Jahan', 'Jahan Hossain Mohammad Akhtar', 'Ali Begum Tajul Jahan', '1999-11-29', 1762492448, 'jahan.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.98, 2020, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(145, 536039, 'Abdul Siddique', 'Tajul Jahan Mohammad Karim', 'Hasan Jahan Tajul Khan', '1980-06-22', 1427152398, 'abdul.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 3.49, 2016, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(146, 454543, 'Akhtar Khan', 'Hasan Akhtar Abdul Rahman', 'Rahman Begum Hasan Khan', '1993-04-19', 1130425746, 'akhtar.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.01, 2021, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(147, 543095, 'Fatima Ali', 'Mohammad Ali Sumaiya Khan', 'Fatima Khan Mohammad Hossain', '1994-03-05', 1288480912, 'fatima.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 3.93, 2023, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(148, 460004, 'Rahman Rahman', 'Jahan Ahmed Parveen Rahman', 'Jahan Khan Parveen Rahman', '1983-10-30', 1317069862, 'rahman.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 4.79, 2016, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(149, 877649, 'Parveen Jahan', 'Parveen Jahan Parveen Akhtar', 'Ali Ali Mohammad Rahman', '1990-09-11', 1798533226, 'parveen.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.23, 2021, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(150, 506780, 'Tajul Jahan', 'Parveen Hossain Mohammad Rahman', 'Jahan Rahman Parveen Ali', '2004-02-28', 1577379397, 'tajul.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.72, 2016, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(151, 514684, 'Abdul Ali', 'Abdul Ahmed Ali Hossain', 'Abdul Begum Hasan Khan', '1980-05-31', 1780528532, 'abdul.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 3.09, 2016, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(152, 392833, 'Rahman Jahan', 'Abdul Siddique Sumaiya Begum', 'Ali Rahman Fatima Ahmed', '1981-11-05', 1240428182, 'rahman.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.53, 2017, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(153, 550807, 'Hasan Khan', 'Mohammad Ali Akhtar Begum', 'Hasan Karim Hasan Akhtar', '1985-06-22', 1468434071, 'hasan.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.95, 2019, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(154, 627240, 'Karim Ahmed', 'Karim Rahman Karim Karim', 'Sumaiya Karim Akhtar Ali', '1982-03-10', 1196035407, 'karim.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 3.25, 2019, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(155, 837552, 'Ali Khan', 'Mohammad Jahan Jahan Ali', 'Tajul Rahman Hasan Ali', '1991-03-16', 1547801692, 'ali.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.06, 2015, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(156, 316021, 'Akhtar Hossain', 'Sumaiya Siddique Hasan Khan', 'Mohammad Begum Akhtar Akhtar', '2000-10-20', 1554604157, 'akhtar.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 3.51, 2021, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(157, 187761, 'Abdul Khan', 'Ali Rahman Rahman Begum', 'Sumaiya Khan Hasan Hossain', '1983-05-09', 1838332849, 'abdul.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.17, 2022, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(158, 987032, 'Abdul Ahmed', 'Parveen Hossain Rahman Hossain', 'Parveen Rahman Mohammad Khan', '2002-01-03', 1951982619, 'abdul.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 4.86, 2017, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(159, 703706, 'Jahan Begum', 'Sumaiya Rahman Abdul Rahman', 'Sumaiya Ali Parveen Siddique', '2000-01-01', 1890252334, 'jahan.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 3.43, 2020, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(160, 976946, 'Karim Khan', 'Akhtar Akhtar Fatima Ali', 'Rahman Hossain Rahman Ahmed', '2004-12-03', 1233094661, 'karim.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.89, 2021, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(161, 522778, 'Parveen Ali', 'Parveen Jahan Tajul Jahan', 'Abdul Rahman Hasan Jahan', '2000-01-09', 1471789425, 'parveen.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 4.35, 2017, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(162, 395297, 'Parveen Siddique', 'Tajul Hossain Abdul Siddique', 'Karim Khan Mohammad Rahman', '1989-03-26', 1467485420, 'parveen.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 3.44, 2022, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(163, 993772, 'Tajul Karim', 'Rahman Jahan Abdul Rahman', 'Mohammad Karim Jahan Ahmed', '1982-10-27', 1872733599, 'tajul.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 4.16, 2019, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(164, 663795, 'Hasan Jahan', 'Jahan Khan Hasan Ali', 'Akhtar Hossain Ali Siddique', '1990-07-05', 1766192592, 'hasan.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.50, 2021, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(165, 485753, 'Hasan Akhtar', 'Ali Karim Akhtar Siddique', 'Rahman Ahmed Mohammad Ahmed', '2004-05-12', 1996383386, 'hasan.akhtar@example.com', 'Dhaka, Bangladesh', 'Random School', 4.78, 2022, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(166, 111315, 'Parveen Khan', 'Rahman Khan Tajul Hossain', 'Hasan Hossain Abdul Hossain', '1993-02-19', 1241353873, 'parveen.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.78, 2019, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(167, 983373, 'Jahan Begum', 'Fatima Rahman Abdul Karim', 'Parveen Siddique Rahman Ahmed', '1980-09-25', 1172014093, 'jahan.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 3.73, 2023, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(168, 452306, 'Akhtar Begum', 'Jahan Siddique Karim Karim', 'Rahman Karim Akhtar Hossain', '1980-10-31', 1619385822, 'akhtar.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 3.96, 2015, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(169, 224536, 'Jahan Ali', 'Rahman Akhtar Jahan Hossain', 'Abdul Ali Karim Ali', '2004-04-01', 1938110460, 'jahan.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 4.06, 2015, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(170, 188407, 'Ali Begum', 'Tajul Akhtar Abdul Ali', 'Rahman Khan Fatima Ali', '1989-10-30', 1854706591, 'ali.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 3.36, 2017, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(171, 739011, 'Rahman Ahmed', 'Parveen Siddique Akhtar Jahan', 'Jahan Ahmed Hasan Hossain', '1988-01-04', 1454899224, 'rahman.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 4.42, 2019, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(172, 691257, 'Akhtar Khan', 'Akhtar Jahan Hasan Rahman', 'Abdul Ali Mohammad Rahman', '2005-11-07', 1974246178, 'akhtar.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.03, 2015, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(173, 172257, 'Sumaiya Karim', 'Rahman Ahmed Abdul Ahmed', 'Hasan Begum Abdul Ahmed', '2005-07-06', 1873692928, 'sumaiya.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 4.67, 2018, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(174, 420469, 'Abdul Jahan', 'Hasan Ali Fatima Rahman', 'Fatima Karim Akhtar Karim', '1989-01-28', 1670706530, 'abdul.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.48, 2022, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(175, 589481, 'Abdul Begum', 'Ali Khan Mohammad Akhtar', 'Parveen Jahan Jahan Jahan', '2000-08-13', 1823205785, 'abdul.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 3.69, 2020, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(176, 833421, 'Ali Hossain', 'Jahan Karim Ali Ahmed', 'Tajul Akhtar Akhtar Ahmed', '2002-06-22', 1516063934, 'ali.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 4.08, 2018, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(177, 435919, 'Karim Hossain', 'Sumaiya Hossain Tajul Ali', 'Sumaiya Khan Akhtar Ahmed', '1998-02-25', 1328642946, 'karim.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 4.47, 2022, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(178, 220200, 'Karim Akhtar', 'Ali Karim Fatima Rahman', 'Jahan Begum Akhtar Siddique', '1980-02-03', 1748096511, 'karim.akhtar@example.com', 'Dhaka, Bangladesh', 'Random School', 3.59, 2019, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(179, 916220, 'Karim Ali', 'Rahman Khan Ali Rahman', 'Ali Akhtar Fatima Akhtar', '1995-08-29', 1957227207, 'karim.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 4.40, 2023, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(180, 119392, 'Rahman Akhtar', 'Karim Hossain Parveen Ahmed', 'Mohammad Jahan Ali Hossain', '2002-09-05', 1734057629, 'rahman.akhtar@example.com', 'Dhaka, Bangladesh', 'Random School', 4.74, 2019, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(181, 951448, 'Abdul Karim', 'Parveen Akhtar Sumaiya Begum', 'Akhtar Akhtar Rahman Siddique', '1987-10-16', 1140111140, 'abdul.karim@example.com', 'Dhaka, Bangladesh', 'Random School', 3.55, 2015, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(182, 197576, 'Ali Siddique', 'Fatima Akhtar Jahan Siddique', 'Tajul Rahman Ali Siddique', '1996-03-04', 1851716595, 'ali.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 3.75, 2020, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(183, 623356, 'Parveen Jahan', 'Hasan Rahman Abdul Rahman', 'Abdul Karim Karim Ahmed', '1996-11-04', 1864648827, 'parveen.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.84, 2018, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(184, 365554, 'Mohammad Akhtar', 'Ali Jahan Ali Ahmed', 'Hasan Karim Jahan Siddique', '1981-06-21', 1136841920, 'mohammad.akhtar@example.com', 'Dhaka, Bangladesh', 'Random School', 4.67, 2015, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(185, 898016, 'Mohammad Siddique', 'Hasan Siddique Akhtar Ahmed', 'Abdul Hossain Akhtar Hossain', '2001-08-12', 1360656811, 'mohammad.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 3.74, 2018, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(186, 640150, 'Sumaiya Siddique', 'Hasan Siddique Fatima Begum', 'Ali Ahmed Karim Akhtar', '1981-03-05', 1621509314, 'sumaiya.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 3.21, 2022, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(187, 985623, 'Parveen Hossain', 'Mohammad Siddique Sumaiya Ahmed', 'Ali Ahmed Jahan Jahan', '1995-10-13', 1555353858, 'parveen.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 4.43, 2019, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(188, 574143, 'Tajul Ahmed', 'Abdul Siddique Ali Khan', 'Ali Siddique Parveen Ali', '1987-03-22', 1517553172, 'tajul.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 3.42, 2019, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(189, 833170, 'Jahan Jahan', 'Hasan Ali Ali Khan', 'Sumaiya Khan Tajul Rahman', '1989-04-10', 1694397320, 'jahan.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.81, 2018, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(190, 328351, 'Mohammad Ahmed', 'Ali Hossain Karim Karim', 'Karim Hossain Sumaiya Ali', '1995-01-17', 1969354223, 'mohammad.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 3.96, 2015, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(191, 151645, 'Hasan Jahan', 'Fatima Ahmed Ali Ali', 'Hasan Hossain Fatima Akhtar', '1998-08-06', 1860421359, 'hasan.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.60, 2021, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(192, 397121, 'Jahan Khan', 'Fatima Ahmed Parveen Akhtar', 'Ali Hossain Jahan Begum', '1997-05-13', 1736672981, 'jahan.khan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.36, 2019, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(193, 818498, 'Hasan Ahmed', 'Rahman Karim Karim Rahman', 'Karim Rahman Akhtar Rahman', '1990-11-06', 1944301309, 'hasan.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 3.14, 2017, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(194, 807777, 'Karim Jahan', 'Mohammad Jahan Mohammad Begum', 'Akhtar Akhtar Mohammad Khan', '1989-08-31', 1840796314, 'karim.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 3.81, 2022, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(195, 519449, 'Sumaiya Rahman', 'Mohammad Begum Parveen Khan', 'Mohammad Akhtar Jahan Akhtar', '1984-01-25', 1681201900, 'sumaiya.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 4.42, 2023, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(196, 665257, 'Karim Begum', 'Akhtar Hossain Ali Hossain', 'Parveen Hossain Parveen Akhtar', '1994-03-17', 1119664973, 'karim.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 4.91, 2016, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(197, 933652, 'Mohammad Rahman', 'Karim Ali Jahan Ahmed', 'Mohammad Akhtar Mohammad Begum', '1983-02-11', 1248003615, 'mohammad.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 3.02, 2021, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(198, 739198, 'Ali Akhtar', 'Abdul Ahmed Rahman Siddique', 'Akhtar Ahmed Abdul Akhtar', '1992-03-02', 1490147583, 'ali.akhtar@example.com', 'Dhaka, Bangladesh', 'Random School', 3.50, 2015, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(199, 165733, 'Karim Hossain', 'Fatima Akhtar Karim Begum', 'Mohammad Jahan Ali Hossain', '1981-07-21', 1128106602, 'karim.hossain@example.com', 'Dhaka, Bangladesh', 'Random School', 4.08, 2017, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(200, 690668, 'Parveen Ali', 'Sumaiya Jahan Ali Ahmed', 'Abdul Ali Rahman Rahman', '1981-06-11', 1397513379, 'parveen.ali@example.com', 'Dhaka, Bangladesh', 'Random School', 4.79, 2017, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(201, 922014, 'Fatima Ahmed', 'Sumaiya Ahmed Rahman Ali', 'Ali Hossain Abdul Akhtar', '1983-07-13', 1835228982, 'fatima.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 4.00, 2016, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(202, 995841, 'Akhtar Jahan', 'Ali Rahman Ali Ahmed', 'Hasan Jahan Mohammad Hossain', '1980-05-07', 1128790721, 'akhtar.jahan@example.com', 'Dhaka, Bangladesh', 'Random School', 4.87, 2020, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(203, 679512, 'Parveen Siddique', 'Abdul Jahan Tajul Jahan', 'Ali Hossain Abdul Ahmed', '2001-05-22', 1290226888, 'parveen.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 3.61, 2019, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(204, 591559, 'Abdul Rahman', 'Akhtar Ali Fatima Karim', 'Hasan Begum Karim Begum', '1982-09-03', 1670059963, 'abdul.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 3.31, 2022, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(205, 401370, 'Rahman Begum', 'Fatima Karim Abdul Rahman', 'Hasan Khan Abdul Rahman', '2002-02-22', 1398755114, 'rahman.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 3.56, 2021, 'Dhaka', 'eng', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(206, 569236, 'Hasan Ahmed', 'Parveen Ali Jahan Ahmed', 'Hasan Ahmed Sumaiya Jahan', '1986-06-17', 1841679239, 'hasan.ahmed@example.com', 'Dhaka, Bangladesh', 'Random School', 3.32, 2016, 'Dhaka', 'ban', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(207, 811004, 'Hasan Siddique', 'Sumaiya Khan Karim Begum', 'Parveen Jahan Sumaiya Jahan', '2000-12-15', 1713578172, 'hasan.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 4.99, 2020, 'Dhaka', 'eng', 'science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(208, 945978, 'Rahman Siddique', 'Rahman Khan Rahman Akhtar', 'Jahan Rahman Rahman Ali', '1988-01-28', 1946956739, 'rahman.siddique@example.com', 'Dhaka, Bangladesh', 'Random School', 4.32, 2019, 'Dhaka', 'ban', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(209, 401173, 'Jahan Begum', 'Abdul Jahan Ali Jahan', 'Akhtar Hossain Mohammad Khan', '1981-03-13', 1113121219, 'jahan.begum@example.com', 'Dhaka, Bangladesh', 'Random School', 4.05, 2021, 'Dhaka', 'eng', 'commerce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
(210, 547614, 'Tajul Rahman', 'Mohammad Akhtar Karim Siddique', 'Mohammad Ahmed Hasan Khan', '2002-02-09', 1899887590, 'tajul.rahman@example.com', 'Dhaka, Bangladesh', 'Random School', 4.70, 2017, 'Dhaka', 'ban', 'arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.');

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `RollNumber` int(11) NOT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Bangla` int(11) DEFAULT NULL,
  `English` int(11) DEFAULT NULL,
  `HigherMath` int(11) DEFAULT NULL,
  `ICT` int(11) DEFAULT NULL,
  `Physics` int(11) DEFAULT NULL,
  `Chemistry` int(11) DEFAULT NULL,
  `Biology` int(11) DEFAULT NULL,
  `Total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `std_result`
--

CREATE TABLE `std_result` (
  `result_id` int(11) NOT NULL,
  `roll_number` int(11) DEFAULT NULL,
  `bangla` int(11) DEFAULT NULL,
  `english` int(11) DEFAULT NULL,
  `ict` int(11) DEFAULT NULL,
  `higher_math` int(11) DEFAULT NULL,
  `physics` int(11) DEFAULT NULL,
  `chemistry` int(11) DEFAULT NULL,
  `biology` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_result`
--

INSERT INTO `std_result` (`result_id`, `roll_number`, `bangla`, `english`, `ict`, `higher_math`, `physics`, `chemistry`, `biology`) VALUES
(2, 12345, 75, 75, 75, 75, 75, 75, 75),
(3, 23456, 85, 88, 92, 78, 90, 75, 85),
(4, 34567, 92, 78, 85, 88, 75, 80, 90),
(5, 45678, 78, 90, 75, 92, 85, 88, 92),
(7, 123, 50, 58, 67, 78, 86, 45, 68);

-- --------------------------------------------------------

--
-- Table structure for table `std_user`
--

CREATE TABLE `std_user` (
  `user_id` int(11) NOT NULL,
  `roll_number` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `std_user`
--

INSERT INTO `std_user` (`user_id`, `roll_number`, `username`, `password`, `student_name`) VALUES
(3, 12345, 'nisan', '1234', 'Nisan Ray\r\n'),
(4, 23456, 'sample_user2', 'sample_password2', 'Student Two'),
(5, 34567, 'sample_user3', 'sample_password3', 'Student Three'),
(6, 45678, 'sample_user4', 'sample_password4', 'Student Four'),
(8, 123, 'mim', '1234', 'MiM');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `description`, `image`) VALUES
(12, 'Nisan', 'Subject: ICT', 'image/rsz_nis.jpg'),
(13, 'Mojammel Haque', 'Subject:Bangla', 'image/principal.jpg'),
(16, 'Mehedi Hasan', 'Subject:Finance', 'image/mehedi.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `usertype`, `password`) VALUES
(1, 'nisan', 1292776712, 'admin@admin.com', 'admin', '1234'),
(6, 'john_doe', 214748, 'john.doe@email.com', 'student', 'password123'),
(7, 'alice_smith', 1234567890, 'alice.smith@email.com', 'teacher', 'securepass'),
(8, 'bob_jones', 2147483647, 'bob.jones@email.com', 'student', 'pass123word'),
(9, 'emma_watson', 2147483647, 'emma.watson@email.com', 'teacher', 'mysecretpass'),
(10, 'david_miller', 2147483647, 'david.miller@email.com', 'admin', 'adminpass'),
(11, 'sara_harris', 1112223333, 'sara.harris@email.com', 'student', 'sara_pass'),
(12, 'robert_white', 2147483647, 'robert.white@email.com', 'teacher', 'teacherpass'),
(13, 'grace_lee', 2147483647, 'grace.lee@email.com', 'student', 'gracepass'),
(14, 'peter_brown', 2147483647, 'peter.brown@email.com', 'admin', 'peter_admin'),
(15, 'linda_davis', 2147483647, 'linda.davis@email.com', 'student', 'linda123'),
(16, 'kevin_wright', 2147483647, 'kevin.wright@email.com', 'teacher', 'kevinpass'),
(17, 'sophie_hill', 1239876543, 'sophie.hill@email.com', 'student', 'sophiepass'),
(18, 'alex_carter', 2147483647, 'alex.carter@email.com', 'admin', 'alexadm1n'),
(19, 'olivia_baker', 2147483647, 'olivia.baker@email.com', 'teacher', 'oliviapass'),
(20, 'michael_clark', 2147483647, 'michael.clark@email.com', 'student', 'michael123'),
(21, 'natalie_turner', 2147483647, 'natalie.turner@email.com', 'teacher', 'nataliepass'),
(22, 'ryan_morris', 2147483647, 'ryan.morris@email.com', 'admin', 'ryanadmin'),
(23, 'laura_king', 2147483647, 'laura.king@email.com', 'student', 'laurapass'),
(24, 'jason_hughes', 1112223333, 'jason.hughes@email.com', 'teacher', 'jasonpass'),
(25, 'amanda_cooper', 2147483647, 'amanda.cooper@email.com', 'admin', 'amandaadmin'),
(26, 'nisan1234', 121333334, 'djklfkn@jjdejc.com', 'student', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user_std`
--

CREATE TABLE `user_std` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `RollNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_std`
--

INSERT INTO `user_std` (`id`, `username`, `phone`, `email`, `usertype`, `password`, `RollNumber`) VALUES
(0, 'nisan1234', 123456, 'skldfjsj@ghdjk.com', 'student', '1234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`RollNumber`);

--
-- Indexes for table `std_result`
--
ALTER TABLE `std_result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `roll_number` (`roll_number`);

--
-- Indexes for table `std_user`
--
ALTER TABLE `std_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `roll_number` (`roll_number`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;

--
-- AUTO_INCREMENT for table `std_result`
--
ALTER TABLE `std_result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `std_user`
--
ALTER TABLE `std_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `std_result`
--
ALTER TABLE `std_result`
  ADD CONSTRAINT `std_result_ibfk_1` FOREIGN KEY (`roll_number`) REFERENCES `std_user` (`roll_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
