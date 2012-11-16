-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2012 at 09:40 AM
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
-- Table structure for table `image`
--
-- Creation: Nov 08, 2012 at 11:17 AM
--

CREATE TABLE IF NOT EXISTS `image` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('p','r','a') NOT NULL DEFAULT 'p',
  PRIMARY KEY (`pid`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- RELATIONS FOR TABLE `image`:
--   `user_id`
--       `user` -> `id`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Oct 31, 2012 at 10:19 AM
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
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- RELATIONS FOR TABLE `user`:
--   `id`
--       `user` -> `id`
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
