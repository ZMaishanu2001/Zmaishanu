-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2015 at 10:18 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `xpertsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'expert', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(10) unsigned NOT NULL auto_increment,
  `user_id` varchar(50) NOT NULL,
  `ill` varchar(50) NOT NULL,
  `vommitted` varchar(50) NOT NULL,
  `frequent` varchar(50) NOT NULL,
  `medication` varchar(50) NOT NULL,
  PRIMARY KEY  (`question_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `user_id`, `ill`, `vommitted`, `frequent`, `medication`) VALUES
(1, 'kifayas', 'No', 'No', 'Last 6 hours', 'No'),
(2, 'kifayas', 'No', 'No', 'Last 6 hours', 'No'),
(3, 'kifayas', 'No', 'No', 'Last 6 hours', 'No'),
(4, 'kifayas', 'No', 'No', 'Last 6 hours', 'No'),
(5, '@abdul', 'No', 'Yes', 'Last 6 hours', 'Yes'),
(6, '@abdul', 'No', 'Yes', 'Last 6 hours', 'Yes'),
(7, '@abdul', 'No', 'Yes', 'Last 6 hours', 'Yes'),
(8, 'bello', 'Yes', 'No', 'Last 6 hours', 'Yes'),
(9, '@abdul', 'Yes', 'No', 'Later than that', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date` varchar(50) NOT NULL,
  `suggestion` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`id`, `date`, `suggestion`) VALUES
(1, '2015-10-0815:45:05', 'I Like the interface, but I think you should improve on the user experience so that it will look like the one we do receive in the hospital'),
(2, '2015-10-2719:00:53', 'This system needs to be improved');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL auto_increment,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `username_2` (`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Abdulbasit', 'Alkhamis', '@abdul', 'idris'),
(4, 'Khadiah', 'Bello', 'deejah', 'dj'),
(5, 'Jimoh', 'Kafayat', 'kifayas', '2772'),
(6, 'Isa', 'Muhammad Kabir', 'aburufaidah', 'kabir'),
(7, 'Hamman- Adama', 'Bello', 'bello', 'bello');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
