-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2012 at 05:32 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pic_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(20) NOT NULL DEFAULT 'none.jpg',
  `type` enum('n','a') NOT NULL,
  `isActive` enum('p','r','a') NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `marital_status` enum('s','m') NOT NULL DEFAULT 's',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` VALUES(38, 'admin', 'user', 'm', 'pass', 'admin@test.com', 'none.jpg', 'a', 'p', '1234567890', 'jaipur', 's');
INSERT INTO `user` VALUES(39, 'devesh', 'singhal', 'm', 'pass', 'devesh@test.com', 'none.jpg', 'n', 'a', '1234567890', 'jaipur', 's');
INSERT INTO `user` VALUES(44, '', '', '', 'sfgdfgdfgdfgdfsgsd', 'admin@test.com', 'none.jpg', 'n', 'p', '1234567890', 'dfgdfgdg', '');
