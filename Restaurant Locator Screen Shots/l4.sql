-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2014 at 06:27 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `l4`
--
CREATE DATABASE IF NOT EXISTS `l4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `l4`;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `detail_id` int(255) NOT NULL,
  `comment_id` int(255) NOT NULL AUTO_INCREMENT,
  `details` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`detail_id`, `comment_id`, `details`) VALUES
(1, 1, 'This Restaurant is super....'),
(2, 2, 'Here foods are much costly...');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `spl_item` text NOT NULL,
  `body` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `acode` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `spl_item`, `body`, `city`, `area`, `acode`) VALUES
(1, 'AAA Restaurant', 'Grilled Chicken ', 'We provide great foods here.', 'Bangalore', 'Madiwala', 560068),
(2, 'BBB Restaurant', 'Chicken Thanduri', 'We provide great foods here.', 'Bangalore', 'Bommanahalli', 560068),
(3, 'CCC Restaurant', 'Pure Veg', 'We provide great foods here.', 'Bangalore', 'Madiwala', 560068),
(4, 'DDD Restaurant', 'Veg Sandwitch', 'We provide great foods here.', 'Bangalore', 'Indira Nagar', 560038),
(5, 'EEE Restaurant', 'Sweet Corn Pizza', 'We provide great foods here.', 'Bangalore', 'Jayanagar', 560041),
(6, 'FFF Restaurant ', 'Chicken Biryani', 'We provide great foods here.', 'Bangalore', 'Electronic City', 560100),
(7, 'GGG Restaurant', 'Pepper Chicken', 'We provide great foods here.', 'Bangalore', 'Jayanagar', 560041),
(8, 'HHH Restaurant', 'Chicken 65', 'We provide great foods here.', 'Bangalore', 'Indira Nagar', 560038),
(9, 'III Restaurant', 'Rava Dosa', 'We provide great foods here.', 'Bangalore', 'Electronic City ', 560100),
(10, 'JJJ Restaurant', 'Fish Chilli', 'We provide great foods here.', 'Bangalore', 'Madiwala', 560068),
(11, 'KKK Restaurant', 'Gobi Chilli', 'We provide great foods here.', 'Bangalore', 'Jayanagar', 560041),
(12, 'LLL Restaurant', 'Curd Vada', 'We provide grate foods here.', 'Bangalore', 'Domlur', 560038);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `acode` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `email`, `password`, `city`, `area`, `contact`, `acode`) VALUES
(1, 'Murali', 's.murali@live.in', 'msm123', 'Bangalore', 'Madiwala', 2147483647, 560068),
(2, 'Kadhir', 'kkadhir10@gmail.com', '123456', 'Bangalore', 'Electronic City', 2147483647, 560100),
(3, 'Harish', 's.murali@outlook.in', '12345', 'Bangalore', 'Madiwala', 2147483647, 560068),
(5, 'Thangaraj', 'thangaraj@gmail.com', '12345', 'Bangalore', 'Bommanahalli', 2147483647, 560068),
(7, 'Chandru', 'chandru@gmail.com', '12345', 'Bangalore', 'Indira Nagar', 1234567890, 560038),
(8, 'Siva Guru', 'siva@gmail.com', '12345', 'Bangalore', 'Bommanahalli', 2147483647, 560068),
(11, 'Raj', 'raj@gmail.com', '12345', 'Bangalore', 'Indira Nagar', 2147483647, 560038),
(12, 'aaaaa', 'aaaaa@gmail.com', '12345', 'Bangalore', 'Electronic City', 2147483647, 560100),
(14, 'BBBBB', 'bbbb@live.in', '12345', 'Bangalore', 'Madiwala', 2147483647, 560068),
(16, 'ssssss', 'ssss@gmail.com', '12345', 'Bangalore', 'Indira Nagar', 2147483647, 560038),
(17, 'Farukh', 'farukh@hootra.com', '12345', 'Bangalore', 'Madiwala', 1234567890, 560068),
(18, 'Raja', 'raja@gmail.com', '12345', 'Bangalore', 'Madiwala', 2147483647, 560068);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
