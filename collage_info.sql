-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2023 at 04:19 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `collage_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `password`) VALUES
(23, 'anis12', 'anis1212'),
(24, 'masud12', 'masud1212'),
(27, 'shilpi', 'shilpi1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `f_name` (`f_name`,`l_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `f_name`, `l_name`, `father_name`, `mother_name`, `class`, `roll`, `number`, `image`, `password`, `c_password`, `username`) VALUES
(42, 'Md Anisur ', 'Rahman', 'Mofizul Hoque', 'Sahera Begum', 'Diploma', '2342', '01580970971', 'user2.jpg', '111', '111', ''),
(43, 'Masud', 'Rana', 'Mahabub  Rahman', 'Morium Begum', 'Intermidiate', '111', '0162458123', 'banner2.jpg', '123456', '123455', 'masud12'),
(44, 'Hiron', 'Mia', 'Mofizul Hoque', 'Sahera Begum', 'Intermidiate', '1111', '01624581233', 'library.png', '3333', '3333', 'hiron12'),
(45, 'shilpi', 'khatun', 'asdfdff', 'sdscvv', 'asmdlad', '32223', 'e3232343', '29956 ANIS.jpg', 'sasasasasa', 'asasasaas', 'assasda'),
(46, 'shilpi1', 'khatun', 'asdfdff', 'sdscvv', 'asmdlad', '32223', 'e3232343', '20210514_170410.jpg', '12223', '1234', 'assasda');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
