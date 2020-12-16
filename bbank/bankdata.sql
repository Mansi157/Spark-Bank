-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2020 at 03:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini`
--

DROP TABLE IF EXISTS `mini`;
CREATE TABLE IF NOT EXISTS `mini` (
  `sender` varchar(50) CHARACTER SET utf8 NOT NULL,
  `receiver` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `amount` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mini`
--

INSERT INTO `mini` (`sender`, `receiver`, `amount`) VALUES
('Alex', 'Amoli', 643),
('Aarush', 'Kavita', 200),
('Rajat', 'Amoli', 700),
('Kavita', 'Rani', 400),
('Hiya', 'Rajat', 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET ucs2 NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Riya', 'Riya@gmail.com', 766032),
('Hiya', 'Hiya@gmail.com', 765056),
('Alex', 'Alex@gmail.com', 876000),
('Aayushi', 'Aayushi@gmail.com', 998162),
('Kavita', 'Kavita@gmail.com', 776343),
('Amoli', 'Amoli@gmail.com', 888666),
('Aditya', 'Aditya@gmail.com', 887052),
('Aarush', 'Aarush@gmail.com', 986952),
('Rani', 'Rani@gmail.com', 777543),
('Rajat', 'Rajat@gmail.com', 887652);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
