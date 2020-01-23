-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2019 at 09:44 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `dnote`
--

CREATE TABLE `dnote` (
  `id` varchar(20) NOT NULL,
  `note` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dnote`
--

INSERT INTO `dnote` (`id`, `note`) VALUES
('54554', 'sdfsdfsdfdsfsd'),
('S1FNCX', 'sdsfdsfdsfdsfdsfdsf'),
('9H8TVX', '<span style="font-weight: bold; background-color: rgb(255, 204, 102);">fdsfdsfsdfdsf</span>'),
('FT0J3Q', '              <span style="background-color: rgb(102, 0, 204);">                            dedarsasaddsfd            </span>            '),
('7575', '              Yo!<div>This is a complete <span style="background-color: rgb(255, 255, 0);">note taker</span></div><div><span style="background-color: rgb(255, 255, 0);"><br></span></div><div><span style="background-color: rgb(255, 204, 255);">ThankYou</span></div>            ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
