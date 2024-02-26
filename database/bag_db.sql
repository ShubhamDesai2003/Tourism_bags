-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2024 at 02:52 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bag_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`name`,`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'admin'),
('shubham', '123');

-- --------------------------------------------------------

--
-- Table structure for table `bags`
--

DROP TABLE IF EXISTS `bags`;
CREATE TABLE IF NOT EXISTS `bags` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `price` decimal(6,2) NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `bags`
--

INSERT INTO `bags` (`book_id`, `title`, `image`, `price`, `quantity`) VALUES
(1, 'School Bag', 'image3.webp', '20.00', 20),
(2, 'College Bag', 'bag01.jpg', '20.00', 19),
(3, 'Tourist Bag', 'bag01.jpg', '20.00', 20),
(8, 'School Bag', './image', '20.00', 20),
(9, 'School Bag', './image', '20.00', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int UNSIGNED NOT NULL,
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `name`, `date`) VALUES
(12, 1, 'Learning Mobile App ', '2024-02-25 16:39:04'),
(13, 2, 'Doing Good By Doing ', '2024-02-25 16:52:56'),
(14, 2, 'College Bag', '2024-02-25 17:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

DROP TABLE IF EXISTS `personal_info`;
CREATE TABLE IF NOT EXISTS `personal_info` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`ID`, `name`, `email`, `phone`, `address`) VALUES
(26, 'Shubham Desai', 'shubhamdesai20003@gmail.com', 7655665, 'ss'),
(27, 'Shubham Desai', 'shubhamdesai20003@gmail.com', 7655665, 'ss'),
(28, 'Shubham Desai', 'shubhamdesai20003@gmail.com', 7655665, 'ss'),
(29, 'Shubham Desai', 'shubhamdesai20003@gmail.com', 7655665, 'ss'),
(30, 'Shubham Desai', 'shubhamdesai20003@gmail.com', 7655665, 'ss'),
(31, 'Shubham Desai', 'shubhamdesai20003@gmail.com', 7655665, 'ss'),
(32, 'Shubham Desai', 'shubhamdesai20003@gmail.com', 7655665, 'ss');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
