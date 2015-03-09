-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Mar 07, 2015 at 11:09 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `login`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `feedback`
-- 

CREATE TABLE `feedback` (
  `Name` varchar(30) NOT NULL,
  `E-mail` varchar(30) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `feedback`
-- 

INSERT INTO `feedback` (`Name`, `E-mail`, `Subject`, `Message`) VALUES 
('kjkejlk', '', 'kjlkjlk', ''),
('kjkejlk', '', 'kjlkjlk', ''),
('kjkejlk', '', 'kjlkjlk', ''),
('kjkejlk', '', 'kjlkjlk', ''),
('kjkejlk', '', 'kjlkjlk', ''),
('kjkejlk', '', 'kjlkjlk', ''),
('kjkejlk', '', 'kjlkjlk', ''),
('kjkejlk', '', 'kjlkjlk', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('nouman1', '', 'nouman3', ''),
('irfan', '', 'sjhshjs', 'uhekjdedejhe');

-- --------------------------------------------------------

-- 
-- Table structure for table `mytable`
-- 

CREATE TABLE `mytable` (
  `surname` text NOT NULL,
  `name` text NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `father` text NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `mytable`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `register`
-- 

CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `register`
-- 

INSERT INTO `register` (`username`, `email`, `password`, `mobile`) VALUES 
('', '', '', 0),
('nouman', 'zestfulnouman@gmail.com', 'nouman', 2147483647);

-- --------------------------------------------------------

-- 
-- Table structure for table `signup`
-- 

CREATE TABLE `signup` (
  `surname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `father` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobileno` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `signup`
-- 

INSERT INTO `signup` (`surname`, `name`, `father`, `email_id`, `password`, `mobileno`) VALUES 
('khateeb', 'nouman', 'sdlfkjq', 'aslkdj@sslkdf', 'akd123', 0),
('hgjhgk', '', '', 'a@b.com', 'a', 6567576),
('hgjhgk', '', '', 'a@b.com', 'JUNEJA', 6567576),
('khatib', '', '', 'zestfulsj@gmail.com', 'jkhkjhk', 2827626),
('khatib', '', '', 'zestfulsj@gmail.com', '656576', 2827626),
('khatib', '', '', 'zestfulsj@gmail.com', '656576', 2827626),
('khatib', '', '', 'zestfulsj@gmail.com', '656576', 2827626),
('khatib', 'nouman', 'hafiz', 'snjkhs@gah', 'jhkjhkj', 238627),
('khatib', 'asim', 'bdnbd', 'zesgf@ghah', 'asim', 7687687),
('kjkjk', 'nm', 'mnmn', 'jkjkjhjjh@gsfg', 'hhjhj', 8198918),
('khatib', 'nouman', 'hafiz', 'zestfulnouman@gmail.com', 'kjkjkjkj', 2147483647),
('khatib', 'asim', 'ahaj', 'asim@gmail.com', 'wwww', 233444),
('rizvi', 'irfan', 'sh', 'nsjjw@gmail.com', 'rizvi', 865556851),
('asdfsd', 'sdfds', 'dsfs', 'yahoo@yahho.com', 'hello', 781),
('asdfsd', 'sdfds', 'dsfs', 'yahoo@yahho.com', 'hello', 781),
('asdfsd', 'sdfds', 'dsfs', 'yahoo@yahho.com', 'hello', 781);

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `user` text NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` (`user`, `password`) VALUES 
('nouman', 'nouman'),
('', ''),
('nouman12', 'noumankhateeb'),
('nouman', 'nouman'),
('furkan', 'furkan123'),
('furkan', 'furkan123'),
('furkan', 'furkan123');
