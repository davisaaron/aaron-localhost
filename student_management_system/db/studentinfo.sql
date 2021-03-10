-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 10, 2021 at 04:16 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `stdata`
--

DROP TABLE IF EXISTS `stdata`;
CREATE TABLE IF NOT EXISTS `stdata` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `gname` varchar(110) NOT NULL,
  `gcolour` varchar(110) NOT NULL,
  `gorder` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stdata`
--

INSERT INTO `stdata` (`id`, `gname`, `gcolour`, `gorder`) VALUES
(49, 'jldl', 'juhlf', '12'),
(45, '7', 'red', ''),
(44, '6', 'red', ''),
(43, '5', 'red', ''),
(42, '4', 'red', ''),
(41, '3', 'red', ''),
(40, '2', 'red', ''),
(36, '10', 'red', 'A'),
(39, '1', 'red', 'D'),
(38, '12', 'red', 'C'),
(37, '11', 'red', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `stdata_subjects`
--

DROP TABLE IF EXISTS `stdata_subjects`;
CREATE TABLE IF NOT EXISTS `stdata_subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=478 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stdata_subjects`
--

INSERT INTO `stdata_subjects` (`id`, `studentid`, `subjectid`) VALUES
(1, 1, 3),
(2, 1, 4),
(3, 1, 6),
(4, 1, 7),
(273, 68, 3),
(272, 67, 11),
(271, 67, 8),
(270, 67, 7),
(284, 0, 4),
(474, 73, 9),
(278, 68, 9),
(269, 67, 6),
(477, 74, 6),
(268, 67, 4),
(476, 74, 4),
(475, 74, 3),
(401, 70, 8),
(377, 65, 12),
(376, 65, 8),
(375, 65, 3),
(473, 73, 8),
(472, 73, 7),
(471, 73, 6),
(470, 73, 4),
(469, 73, 3),
(339, 72, 7),
(338, 72, 6),
(337, 72, 4),
(400, 70, 6),
(336, 72, 3),
(285, 0, 6),
(399, 70, 4),
(398, 70, 3),
(275, 68, 6),
(283, 0, 3),
(267, 67, 3);

-- --------------------------------------------------------

--
-- Table structure for table `studentdeatils`
--

DROP TABLE IF EXISTS `studentdeatils`;
CREATE TABLE IF NOT EXISTS `studentdeatils` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gender` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subject` varchar(110) NOT NULL,
  `grade` varchar(110) NOT NULL,
  `section` varchar(110) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentdeatils`
--

INSERT INTO `studentdeatils` (`id`, `firstname`, `lastname`, `gender`, `subject`, `grade`, `section`, `address`) VALUES
(59, 'as', 'jhgfds', 'male', '3,4,6', '33', 'A', 'gfds'),
(61, 'FDS', 'FDS', 'male', '3,4,6,7', '38', '38', 'BVCX'),
(62, 'Don', 'davis1', 'male', '3,4,6', '39', '36', 'Nas St Jaffna\r\nJaffna'),
(63, 'Don', 'asdf', 'male', '', '47', '39', 'Nas St Jaffna\r\nJaffna'),
(64, 'Don', 'asdfghjkl', 'male', '', '47', '47', 'Nas St Jaffna\r\nJaffna'),
(65, 'hbgf', 'hgf', 'male', '', '44', '38', 'bvc'),
(66, 'Don', 'asdfghjk', 'male', '', '47', '36', 'Nas St Jaffna\r\nJaffna'),
(67, 'asdfghjk', 'sdfghjk', 'male', '', '47', '39', 'asdfghjk'),
(74, 'wertyu', 'werty', 'male', '', '45', '37', 'asdfghjk'),
(72, 'aron', 'david', 'male', '', '42', '36', 'jaffna'),
(70, 'asdfghkjl;', 'asdfgjkl;', 'male', '', '42', '39', 'zxdcfvbghnjmnbvcxzsdfghjkjhgfd'),
(73, 'aron', 'david', 'male', '', '42', '36', 'jaffna'),
(57, 'aaron', 'davis1', 'male', '3,4,6,7', '34', 'A', 'Nas St Jaffna\r\nJaffna'),
(58, 'as', 'jhgfds', 'male', '3,4,6', '33', 'A', 'gfds'),
(56, 'aaron', 'davis1', 'male', '3,4,6,7,8', '34', 'A', 'Nas St Jaffna\r\nJaffna');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `subjectname` varchar(110) NOT NULL,
  `subjectindex` varchar(110) NOT NULL,
  `suborder` varchar(110) NOT NULL,
  `subcolour` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectname`, `subjectindex`, `suborder`, `subcolour`) VALUES
(3, 'Maths', 'MTS', '1', 'RED'),
(4, 'Tamil', 'TAM', '2', 'BLUE'),
(6, 'Science', 'SCI', '3', 'RED'),
(7, 'English', 'ENG', '4', 'GREEN'),
(8, 'History', 'HIS', '5', 'BLACK'),
(9, 'Physics', 'PHY', '6', 'RED'),
(11, 'Chemistry', 'CHE', '7', 'RED'),
(12, 'Combined Maths', 'CMAT', '8', 'RED');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
