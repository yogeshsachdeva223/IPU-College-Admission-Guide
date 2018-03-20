-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 09:06 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `predictor`
--

-- --------------------------------------------------------

--
-- Table structure for table `predictor`
--

CREATE TABLE `predictor` (
  `Sno` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `GND` int(11) NOT NULL,
  `GEN` int(11) NOT NULL,
  `SC` int(11) NOT NULL,
  `ST` int(11) NOT NULL,
  `OBC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `predictor`
--

INSERT INTO `predictor` (`Sno`, `Name`, `Course`, `GND`, `GEN`, `SC`, `ST`, `OBC`) VALUES
(1, 'University School of Information Technology', 'CSE', 306, 143, 6282, 0, 0),
(2, 'University School of Information Technology', 'ECE', 681, 266, 10114, 0, 0),
(3, 'University School of Information Technology', 'IT', 715, 385, 12202, 0, 0),
(4, 'Maharaja Agrasen Institute Of Technology', 'CSE', 962, 352, 17964, 0, 0),
(5, 'Bharati Vidyapeeth College Of Engineering', 'CSE', 1203, 507, 18012, 0, 0),
(6, 'Ambedkar Institute of Technoogy', 'CSE', 2171, 420, 13210, 0, 0),
(7, 'Maharaja Agrasen Institute Of Technology', 'ECE', 1962, 626, 21476, 0, 0),
(8, 'Maharaja Surajmal Institute Of Technology', 'CSE', 2658, 925, 23788, 0, 0),
(9, 'Maharaja Agrasen Institute Of Technology', 'IT', 2275, 787, 31151, 0, 0),
(10, 'Bharati Vidyapeeth College Of Engineering', 'ECE', 3221, 1111, 27879, 0, 0),
(11, 'Bharati Vidyapeeth College Of Engineering', 'IT', 2820, 1016, 30285, 0, 0),
(12, 'Maharaja Agrasen Institute Of Technology', 'MAE', 3077, 771, 24446, 0, 0),
(13, 'University School Of Chemical Technology', 'CHEMENG', 3499, 639, 18626, 0, 0),
(14, 'Maharaja Surajmal Institute Of Technology', 'IT', 4155, 1343, 32600, 0, 0),
(15, 'Ambedkar Institute of Technology', 'ECE', 4470, 1141, 18396, 0, 0),
(16, 'National Power Training Institute', 'PE', 3971, 1061, 22798, 0, 0),
(17, 'Maharaja Surajmal Institute Of Technology', 'ECE', 4437, 1404, 32211, 0, 0),
(18, 'Maharaja Agrasen Institute Of Technology', 'EEE', 3670, 902, 27687, 0, 0),
(19, 'Bharati Vidyapeeth College Of Engineering', 'EEE', 4719, 1205, 29491, 0, 0),
(20, 'Bhagwan Parshuram Institute Of Technology', 'CSE', 5897, 1784, 36088, 0, 0),
(21, 'Maharaja Surajmal Institute Of Technology', 'EEE', 5435, 1459, 30281, 0, 0),
(22, 'Northern India Engg. College', 'CSE', 6841, 2629, 37635, 0, 0),
(23, 'Bharati Vidyapeeth\'s College Of Engineering', 'ICE', 6434, 1782, 40642, 0, 0),
(24, 'Amity School Of Engg. & Technology', 'CSE', 6960, 2134, 41846, 0, 0),
(25, 'Bhagwan Parshuram Institute Of Technology', 'IT', 7096, 2482, 44335, 0, 0),
(26, 'Bhagwan Parshuram Institute Of Technology', 'ECE', 7818, 2124, 42785, 0, 0),
(27, 'Bhagwan Parshuram Institute Of Technology', 'EEE', 8315, 2315, 40633, 0, 0),
(28, 'Northern India Engg. College', 'IT', 9563, 3261, 50603, 0, 0),
(29, 'Delhi Technical Campus', 'CSE', 8475, 2245, 52122, 0, 0),
(30, 'Northern India Engg. College', 'ECE', 9396, 3351, 45329, 0, 0),
(31, 'Delhi Institute Of Tool Engineering', 'MECH', 10180, 2211, 35637, 0, 0),
(32, 'Northern India Engg. College', 'CIVIL', 11224, 2917, 0, 0, 0),
(33, 'JIMS Engg. Management Technical Campus', 'CSE', 10496, 3633, 0, 0, 0),
(34, 'Amity School Of Engg. & Technology', 'ECE', 9570, 2830, 0, 0, 0),
(35, 'Amity School Of Engg. & Technology', 'IT', 9942, 3294, 0, 0, 0),
(36, 'Northern India Engg. College', 'EEE', 11315, 3310, 0, 0, 0),
(37, 'Amity School Of Engg. & Technology', 'MAE', 10767, 2940, 0, 0, 0),
(38, 'Delhi Institute Of Tool Engineering', 'TE', 12684, 2772, 0, 0, 0),
(39, 'Amity School Of Engg. & Technology	', 'ICE', 12958, 4453, 0, 0, 0),
(40, 'Delhi Technical Campus', 'CIVIL', 13407, 2923, 0, 0, 0),
(41, 'Delhi Technical Campus', 'ECE', 12298, 2868, 0, 0, 0),
(42, 'Delhi Technical Campus', 'MAE', 13148, 2539, 0, 0, 0),
(43, 'JIMS Engg. Management Technical Campus', 'ME', 14247, 3681, 0, 0, 0),
(44, 'JIMS Engg. Management Technical Campus', 'ECE', 13339, 3913, 0, 0, 0),
(45, 'Delhi Technical Campus	', 'EEE', 13846, 2707, 0, 0, 0),
(46, 'JIMS Engg. Management Technical Campus', 'CIVIL', 15052, 4450, 0, 0, 0),
(47, 'JIMS Engg. Management Technical Campus', 'EE', 15112, 4216, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `predictor`
--
ALTER TABLE `predictor`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `predictor`
--
ALTER TABLE `predictor`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
