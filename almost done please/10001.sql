-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 05:32 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10001`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` char(150) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL,
  `profile_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `Timestamp`, `profile_id`, `post_id`, `date`) VALUES
(1, 'hola', NULL, 123456, 77777, '2018-11-27'),
(2, 'hola two', NULL, 123456, 77777, '2018-11-27'),
(3, 'hola three', NULL, 22, 77777, '2018-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL DEFAULT '0',
  `name` char(30) NOT NULL,
  `description` char(100) DEFAULT NULL,
  `category` char(30) NOT NULL,
  `views` int(11) DEFAULT NULL,
  `image` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `name`, `description`, `category`, `views`, `image`) VALUES
(1001, 'page 1', 'this is page 1', 'pages', NULL, NULL),
(1002, 'page 2', 'this is page 2', 'pages', NULL, NULL),
(1003, 'page 3', 'this is page 3', 'pages', NULL, NULL),
(1004, 'page 4', 'this is page 4', 'pages', NULL, NULL),
(1005, 'page 5', 'this is page 5', 'pages', NULL, NULL),
(1006, 'page 6', 'this is page 6', 'pages', NULL, NULL),
(1007, 'page 7', 'this is page 7', 'pages', NULL, NULL),
(1010, 'page10', 'this is page 10', 'pages', NULL, NULL),
(34456, 'hi', 'adfasdfa', 'school', NULL, NULL),
(56789, 'uta', 'kdjfalsdkfjald', 'school', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `profile_id` int(11) NOT NULL,
  `type` char(30) NOT NULL,
  `page_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `description`, `profile_id`, `type`, `page_id`) VALUES
(1001, 'post1', 125, '', 1010),
(1002, 'post 2', 1012, '', 1010),
(1003, '3', 1012, '', 1010),
(1004, '4', 1012, '', 1010),
(1005, '5', 1012, '', 1010),
(1006, '6', 1012, '', 1010),
(1007, '7', 1012, '', 1010),
(1008, '8', 1012, '', 1010),
(1009, '9', 1012, '', 1010),
(1010, NULL, 1012, '10', 1010),
(1011, NULL, 1020, '', 1001),
(1012, NULL, 1020, '', 1001),
(1013, NULL, 1012, '', 1010),
(1014, NULL, 1012, '', 1010),
(1015, NULL, 1012, '', 1010),
(1016, NULL, 1012, '', 1010),
(1017, NULL, 1012, '', 1010),
(1018, NULL, 1012, '', 1010),
(1019, NULL, 1012, '', 1010),
(1020, NULL, 1012, '', 1010),
(1021, NULL, 1019, '', 1002),
(1022, NULL, 1019, '', 1002),
(1023, NULL, 1012, '', 1010),
(1024, NULL, 1012, '', 1010),
(1025, NULL, 1012, '', 1010),
(1026, NULL, 1012, '', 1010),
(1027, NULL, 1012, '', 1010),
(1028, NULL, 1012, '', 1010),
(1029, NULL, 1012, '', 1010),
(1030, NULL, 1020, '', 1002),
(1031, NULL, 1019, '', 1003),
(1032, NULL, 1019, '', 1003),
(1033, NULL, 1019, '', 1003),
(1034, NULL, 1019, '', 1003),
(1035, NULL, 1019, '', 1003),
(1036, NULL, 1019, '', 1003),
(1037, NULL, 1019, '', 1003),
(1038, NULL, 1019, '', 1003),
(1039, NULL, 1019, '', 1003),
(1040, NULL, 1019, '', 1003),
(1041, NULL, 125, '', 1004),
(1042, NULL, 125, '', 1004),
(1043, NULL, 125, '', 1004),
(1044, NULL, 125, '', 1004),
(1045, NULL, 125, '', 1004),
(1046, NULL, 125, '', 1004),
(1047, NULL, 125, '', 1004),
(1048, NULL, 125, '', 1004),
(1049, NULL, 125, '', 1004),
(1050, NULL, 125, '', 1004),
(1051, NULL, 1005, '', 1005),
(1052, NULL, 1005, '', 1005),
(1053, NULL, 1005, '', 1005),
(1054, NULL, 1005, '', 1005),
(1055, NULL, 1005, '', 1005),
(1056, NULL, 1005, '', 1005),
(1057, NULL, 1005, '', 1005),
(1058, NULL, 1005, '', 1005),
(1059, NULL, 1005, '', 1005),
(1060, NULL, 1005, '', 1005),
(1061, NULL, 1018, '', 1006),
(1062, NULL, 1018, '', 1006),
(1063, NULL, 1018, '', 1006),
(1064, NULL, 1018, '', 1006),
(1065, NULL, 1018, '', 1006),
(1066, NULL, 1018, '', 1006),
(1067, NULL, 1018, '', 1006),
(1068, NULL, 1018, '', 1006),
(1069, NULL, 1018, '', 1006),
(1070, NULL, 1018, '', 1006),
(1071, NULL, 1004, '', 1007),
(1072, NULL, 1004, '', 1007),
(1073, NULL, 1004, '', 1007),
(1074, NULL, 1004, '', 1007),
(1075, NULL, 1004, '', 1007),
(1076, NULL, 1004, '', 1007),
(1077, NULL, 1004, '', 1007),
(1078, NULL, 1004, '', 1007),
(1079, NULL, 1004, '', 1007),
(1080, NULL, 1004, '', 1007),
(1081, NULL, 1013, '', 1008),
(1082, NULL, 1013, '', 1008),
(1083, NULL, 1013, '', 1008),
(1084, NULL, 1013, '', 1008),
(1085, NULL, 1013, '', 1008),
(1086, NULL, 1013, '', 1008),
(1087, NULL, 1013, '', 1008),
(1088, NULL, 1013, '', 1008),
(1089, NULL, 1013, '', 1008),
(1090, NULL, 1013, '', 1008),
(1091, NULL, 1016, '', 1009),
(1092, NULL, 1016, '', 1009),
(1093, NULL, 1016, '', 1009),
(1094, NULL, 1016, '', 1009),
(1095, NULL, 1016, '', 1009),
(1096, NULL, 1016, '', 1009),
(1097, NULL, 1016, '', 1009),
(1098, NULL, 1016, '', 1009),
(1099, NULL, 1016, '', 1009),
(1100, NULL, 1016, '', 1009),
(1101, NULL, 1006, '', 1011),
(1102, NULL, 1006, '', 1011),
(1103, NULL, 1006, '', 1011),
(1104, NULL, 1006, '', 1011),
(1105, NULL, 1006, '', 1011),
(1106, NULL, 1006, '', 1011),
(1107, NULL, 1006, '', 1011),
(1108, NULL, 1006, '', 1011),
(1109, NULL, 1006, '', 1011),
(1110, NULL, 1006, '', 1011),
(77777, '', 1234, 'school', 34456);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `profile_id` int(11) NOT NULL,
  `Fname` char(30) NOT NULL,
  `Lname` char(30) DEFAULT NULL,
  `username` char(30) NOT NULL,
  `password` char(30) NOT NULL,
  `email` char(50) NOT NULL,
  `phone_num` int(11) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `Fname`, `Lname`, `username`, `password`, `email`, `phone_num`, `country`, `city`, `timestamp`) VALUES
(22, 'michael', 'omordia', 'mic', '1234', '1234@gmail.com', 1234567, 'usa', 'usa', NULL),
(125, 'diane', 'calderon', 'diane', '1234', 'dia@gmail.com', 123456, 'usa', NULL, NULL),
(1000, 'qwerty', 'uiop', 'qwui', '123456666', 'qwerty@gmail.com', 123456789, 'usa', 'arlington', NULL),
(1001, 'Jon', 'Snow', 'King_of_the_north', '123456666', 'jsnow@gmail.com', 123456789, 'the_wall', 'arlington', NULL),
(1002, 'sasuske', 'uchiha', 'anbu_at_age9', '123456666', '666@gmail.com', 123456789, 'Konoha', 'arlington', NULL),
(1003, 'spike', 'spiegel', 'angel', '123456666', 'pewpew@gmail.com', 123456789, 'mars', 'arlington', NULL),
(1004, 'Faye', 'Valentine', 'tomboy', '123456666', 'qwerty@gmail.com', 123456789, 'Earth', 'arlington', NULL),
(1005, 'ED', 'Wong', 'trans', '123456666', 'shortgirl@gmail.com', 123456789, 'earth', 'arlington', NULL),
(1006, 'Jet', 'Black', 'crybaby', '123456666', 'black@gmail.com', 123456789, 'earth', 'arlington', NULL),
(1007, 'Usopp', 'Sniper', 'sunny', '123456666', 'usopp@gmail.com', 123456789, 'West_blue', 'arlington', NULL),
(1008, 'zoro', 'roronoa', 'BIGBLACKSWORD', '123456666', '3swords@gmail.com', 123456789, 'idk', 'arlington', NULL),
(1009, 'Riley', 'Reid', 'RxR', '123456666', 'uknow@gmail.com', 123456789, 'usa', 'arlington', NULL),
(1010, 'L', 'unknown', 'smartass', '123456666', 'puzzles@gmail.com', 123456789, 'Japan', 'arlington', NULL),
(1011, 'Yagami', 'Light', 'Kira', '123456666', 'blackbook@gmail.com', 123456789, 'Japan', 'arlington', NULL),
(1012, 'Alphonso', 'Eric', 'metalman', '123456666', 'tincan@gmail.com', 123456789, 'usa', 'arlington', NULL),
(1013, 'goku', 'son', 'kamemameeee', '123456666', 'haaaaaa@gmail.com', 123456789, 'usa', 'arlington', NULL),
(1014, 'Picollo', 'Namekian', 'i_like_flutes', '123456666', 'Hulk@gmail.com', 123456789, 'somewhere', 'arlington', NULL),
(1015, 'Leleuch', 'forgot', 'sharingan', '123456666', 'mecha@gmail.com', 123456789, 'britannia', 'arlington', NULL),
(1016, 'Gon', 'gon', 'gon', '123456666', 'strong@gmail.com', 123456789, 'japan', 'arlington', NULL),
(1017, 'killua', 'killer', 'elektrigga', '123456666', 'assasin@gmail.com', 123456789, 'usa', 'arlington', NULL),
(1018, 'Eren', 'Yaeger', 'Titan', '123456666', 'Big@gmail.com', 123456789, 'Wall_maria', 'arlington', NULL),
(1019, 'boruto', 'uzumaki', 'pooik', '123456666', 'rase@gmail.com', 123456789, 'konoha', 'arlington', NULL),
(1020, 'Asta', 'orphan', 'asta', '123456666', 'asta@gmail.com', 123456789, 'usa', 'arlington', NULL),
(1234, 'paco', 'lopez', 'paco1', '4567', 'paco@gmail.com', 3456789, 'usa', NULL, NULL),
(123456, 'lucas', 'nieto', 'lucass', '1234', 'lucas@gmail.com', 12345678, 'usa', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `profile_id` (`profile_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`profile_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`profile_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
