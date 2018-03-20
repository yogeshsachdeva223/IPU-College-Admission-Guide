-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 09:07 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `text` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`) VALUES
(1, 'home', 'You Will be redirected to Home page by clicking on this'),
(2, 'entrance exam', 'This option gives you information regarding GGSIPU CET and the eligibility critaria'),
(3, 'engineering colleges', 'this option gives you information regarding\r\nvarious engineering colleges, their location and streams offered by them'),
(4, 'news', 'this option gives you information regarding the news events of GGSIPU'),
(5, 'tool', 'this option gives you information regarding the various tools offered by our site'),
(6, 'placement cell', 'this option gives you information regarding the placement cell'),
(7, 'alumni', 'this option gives you information regarding the alumni of GGSIPU '),
(8, 'fest', 'this option gives you information regarding the annual fest \'ANUGOONJ\''),
(9, 'MAPS', 'this option gives you information regarding the location of various engineering colleges'),
(10, 'counselling', 'this option gives you information regarding the various rounds of counselling i.e. 1st, 2nd, 3rd and spot counselling'),
(11, 'streams', 'this option gives you information regarding\r\nthe streams offered by GGSUPU'),
(12, 'rank predictor', 'this tool helps you predict your rank '),
(13, 'college predictor', 'this tool helps you predict a college based on your rank in CET'),
(14, 'sign up', 'this option directs you to our sign up page'),
(15, 'rankings', 'this option gives you information regarding the rankings of various engineering colleges'),
(16, 'about us', 'it gives you information regarding the developers of this website'),
(17, 'facebook', 'this option gives you information regarding\r\nour Facebook page. Don\'t forget to hit like'),
(18, 'instagram', 'this option gives you information regarding our instagram page, stay connected with us'),
(19, 'Linkedin', 'this option gives you information regarding our linkedin account'),
(20, 'search', 'this option gives you information regarding most common features of our website');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
