-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2018 at 07:39 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
CREATE TABLE IF NOT EXISTS `game` (
  `gameid` int(6) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`gameid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gameid`, `type`) VALUES
(1, 'math'),
(2, 'picture');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

DROP TABLE IF EXISTS `score`;
CREATE TABLE IF NOT EXISTS `score` (
  `scoreid` int(6) NOT NULL AUTO_INCREMENT,
  `points` varchar(50) DEFAULT NULL,
  `gameid` int(6) DEFAULT NULL,
  `userid` int(6) DEFAULT NULL,
  PRIMARY KEY (`scoreid`),
  KEY `gameid` (`gameid`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`scoreid`, `points`, `gameid`, `userid`) VALUES
(1, '2', 1, 9),
(2, '5', 1, 10),
(3, '5', 1, 10),
(4, '5', 1, 10),
(5, '5', 1, 10),
(6, '5', 1, 10),
(7, '5', 1, 10),
(8, '5', 1, 10),
(9, '5', 1, 10),
(10, '5', 1, 10),
(11, '5', 1, 10),
(12, '5', 1, 10),
(13, '5', 1, 10),
(14, '5', 1, 10),
(15, '5', 1, 10),
(16, '5', 1, 10),
(17, '5', 1, 10),
(18, '5', 1, 10),
(19, '5', 1, 10),
(20, '5', 1, 10),
(21, '5', 1, 10),
(22, '5', 1, 10),
(23, '5', 1, 10),
(24, '5', 1, 10),
(25, '4', 1, 11),
(26, '5', 1, 12),
(27, '5', 1, 16),
(28, '2', 1, 17),
(29, '2', 1, 18),
(30, '0', 1, 19),
(31, '0', 1, 19),
(32, '0', 1, 19),
(33, '0', 1, 20),
(34, '0', 1, 20),
(35, '0', 1, 21),
(36, '0', 1, 21),
(37, '5', 1, 22),
(38, '5', 1, 22),
(39, '5', 1, 22),
(40, '0', 1, 23),
(41, '3', 1, 24),
(42, '0', 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(6) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `email`) VALUES
(1, 'w', 'Chapman', 'ernst.chapman@gmail.com'),
(2, 'erert', 's', 'ernst.chapman@gmail.com'),
(3, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(4, 'w', 's', 'ernst.chapman@gmail.com'),
(5, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(6, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(7, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(8, 'erert', 's', 'ernst.chapman@gmail.com'),
(9, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(10, 'Ernst', 'Chapman', 'er@gmail.com'),
(11, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(12, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(13, 'test', 'cha', 'ernst.chapman@gmail.com'),
(14, 'test', 'cha', 'ernst.chapman@gmail.com'),
(15, 'test', 'cha', 'ernst.chapman@gmail.com'),
(16, 'test', 'cha', 'ernst.chapman@gmail.com'),
(17, 'Erns', 'Chapman', 'er@gmail.com'),
(18, 'erert', 's', 'ernst.chapman@gmail.com'),
(19, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(20, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(21, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(22, 'Ernst', 'Chapman', 'ernst.chapman@gmail.com'),
(23, 'Ernst', 'dscx', 'er@gmail.com'),
(24, 'erert', 'Chapman', 'ernst.chapman@gmail.com'),
(25, 'erert', 'Chapman', 'er@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
