-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2016 at 04:26 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `schoolmanagementsystemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `dob`, `hiredate`, `address`, `sex`) VALUES
('admin', 'Chinbat', '123', '99177472', 'chinbasaraa@gmail.com', '2019-11-20', '2020-01-01', 'Ulaanbaatar', 'male'),
('admin1', 'Aagii', '123', '88989541', 'altngrl4@gmail.com', '2019-05-12', '2020-04-24', 'Ulaanbaatar', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `attendedid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `attendedid`) VALUES
(18, '2020-05-04', 'Dorjoo1'),
(20, '2020-05-01', 'Dorjoo1'),
(21, '2020-04-12', 'Dorjoo1'),
(22, '2020-05-04', 'Munkhuu2'),
(23, '2020-04-19', 'Munkhuu2'),
(24, '2020-05-02', 'Munkhuu2');


-- --------------------------------------------------------

--
-- Table structure for table `availablecourse`
--

CREATE TABLE IF NOT EXISTS `availablecourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `classid` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `availablecourse`
--

INSERT INTO `availablecourse` (`id`, `name`, `classid`) VALUES
(1, 'Algorithm', '1'),
(2, 'c+', '2'),
(3, 'Мэдээлэл технологи', '3'),
(4, 'Обьект', '4'),
(5, 'Обьект', '5'),
(6, 'Обьект', '6'),
(7, 'Обьект', '7'),
(8, 'Обьект', '8'),
(9, 'Обьект', '9'),
(10, 'Обьект дэд', '10'),
(11, 'Обьект дэд', '1'),
(12, 'Обьект дэд', '2'),
(13, 'Обьект дэд', '3'),
(14, 'Обьект дэд', '4'),
(15, 'Обьект дэд', '5'),
(16, 'Обьект дэд', '6'),
(17, 'Обьект дэд', '7'),
(18, 'Обьект дэд', '8'),
(19, 'Обьект дэд', '9'),
(20, 'Обьект дэд', '10'),
(21, 'English ', '1'),
(22, 'English ', '2'),
(23, 'English ', '3'),
(24, 'English ', '4'),
(25, 'English ', '5'),
(26, 'English ', '6'),
(27, 'English ', '7'),
(28, 'English ', '8'),
(29, 'English ', '9'),
(30, 'English ', '10'),
(31, 'English 2', '1'),
(32, 'English 2', '2'),
(33, 'English 2', '3'),
(34, 'English 2', '4'),
(35, 'English 2', '5'),
(36, 'English 2', '6'),
(37, 'English 2', '7'),
(38, 'English 2', '8'),
(39, 'English 2', '9'),
(40, 'English 2', '10');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `room` varchar(20) NOT NULL,
  `section` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `room`, `section`) VALUES
('1A', 'One', '101', '3-р байр'),
('1B', 'One', '101', '3-р байр'),
('2A', 'Two', '201', '2-р байр'),
('2B', 'Two', '202', '3-р байр'),
('3A', 'Three', '301', '1-р байр'),
('3B', 'Three', '302', '2-р байр'),
('4A', 'Four', '401', '5-р байр'),
('4B', 'Four', '402', '8-р байр'),
('5A', 'Five', '501', '7-р байр'),
('5B', 'Five', '502', '5-р байр'),
('6A', 'Six', '601', '4-р байр'),
('6B', 'Six', '602', '3-р байр'),
('7A', 'Seven', '701', '2-р байр'),
('7B', 'Seven', '702', '1-р байр'),
('8A', 'Eight', '801', '1-р байр'),
('8B', 'Eight', '802', '1-р байр'),
('9A', 'Nine', '901', '1-р байр'),
('9B', 'Nine', '902', '4-р байр'),
('10S', 'Ten', '1001', '3-р байр'),
('10A', 'Ten', '1002', '1-р байр'),
('10C', 'Ten', '1002', '2-р байр');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `teacherid`, `studentid`, `classid`) VALUES
('1', 'Обьект дэд', 'Dorjoo1', '16b1sas1076', '1A'),
('1', 'Обьект дэд', 'Dorjoo1', '16b1sas1077', '1A');

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE IF NOT EXISTS `examschedule` (
  `id` varchar(20) NOT NULL,
  `examdate` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `courseid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `examdate`, `time`, `courseid`) VALUES
('145', '2020-06-02', '2:00-4:00', '4');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(20) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `studentid`, `grade`, `courseid`) VALUES
(1, '16b1sas1076', 'C', '1'),
(2, '16b1sas1077', 'F', '2');

-- --------------------------------------------------------





--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(20) NOT NULL,
  `amount` double NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `studentid`, `amount`, `month`, `year`) VALUES
(1, '16b1sas1076', 500, '1', '2020'),
(2, '16b1sas1077', 500, '1', '2020');


-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `reportid` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  `message` varchar(500) NOT NULL,
  `courseid` varchar(20) NOT NULL,
  PRIMARY KEY (`reportid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `studentid`, `teacherid`, `message`, `courseid`) VALUES
(1, '16b1sas1076', 'Dorjoo1', 'arai l suga bn ', '2'),
(2, '16b1sas1077', 'Munkhuu2', 'Gants grey goose avaad ir ', '1');


-- --------------------------------------------------------


--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `addmissiondate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `parentid` varchar(20) NOT NULL,
  `classid` varchar(20) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `password`, `phone`, `email`, `sex`, `dob`, `addmissiondate`, `address`, `classid`) VALUES
('16b1sas1076', 'Bayartogtokh', '123', '95178141', 'bayaraa8141@gmail.com', 'male', '1999-06-17', '2016-09-01', 'Ulaanbaatar','1A'),
('16b1sas1077', 'Baatar', '123', '99778141', 'batka@gmail.com', 'male', '1994-01-14', '2016-09-01', 'Ulaanbaatar',  '1A');

-- --------------------------------------------------------

--
-- Table structure for table `takencoursebyteacher`
--

CREATE TABLE IF NOT EXISTS `takencoursebyteacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `courseid` varchar(20) NOT NULL,
  `teacherid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `takencoursebyteacher`
--

INSERT INTO `takencoursebyteacher` (`id`, `courseid`, `teacherid`) VALUES
(1, '4', 'Dorjoo1'),
(2, '8', 'Dorjoo1'),
(3, '1', 'Dorjoo1'),
(4, '2', 'Dorjoo1'),
(5, '18', 'Munkhuu2'),
(6, '19', 'Munkhuu2'),
(7, '11', 'Munkhuu2'),
(8, '24', 'Munkhuu2'),
(9, '23', 'Munkhuu2'),
(10, '22', 'Munkhuu2'),
(11, '4', 'Dorjoo1'),
(12, '5', 'Dorjoo1'),
(13, '6', 'Dorjoo1'),
(14, '7', 'Dorjoo1'),
(15, '9', 'Dorjoo1'),
(16, '10', 'Dorjoo1'),
(17, '17', 'Munkhuu2'),
(18, '16', 'Dorjoo1'),
(19, '15', 'Munkhuu2'),
(20, '14', 'Dorjoo1'),
(21, '13', 'Munkhuu2'),
(22, '12', 'Dorjoo1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `dob` date NOT NULL,
  `hiredate` date NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `password`, `phone`, `email`, `address`, `sex`, `dob`, `hiredate`) VALUES
('Dorjoo1', 'Dorjoo', '123', '99889988', 'dorj@seas.numedu.com', 'Darkhan', 'male', '1977-12-23', '2016-01-01' ),
('Munkhuu2', 'Munkhu', '123', '99890755', 'munkhu@seas.edu.mn', 'Ulaanbaatar', 'male', '1975-12-18', '2015-05-04');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `password`, `usertype`) VALUES
('admin', '123', 'admin'),
('admin1', '123', 'admin'),
('16b1sas1076', '123', 'student'),
('16b1sas1077', '123', 'student'),
('Dorjoo1', '123', 'teacher'),
('Munkhuu2', '123', 'teacher');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
