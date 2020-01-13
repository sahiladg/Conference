-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2018 at 06:23 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cu`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `cid` varchar(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `timing` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `pname`, `timing`, `department`) VALUES
('soen6441', 'Advanced programming practice', 'aaa', 'Mon 5:30-8:30', 'soen'),
('soen6431', 'software comprehension', 'bbb', 'Wed 5:45-8:15', 'soen'),
('comp6231', 'distributed system', 'ddd', 'Mon 5:30-8:30', 'comp'),
('inse6481', 'computer network', 'aaa', 'Mon 5:45-8:15', 'inse'),
('inse123', 'software quality', 'eee', 'Fri 5:45-8:15', 'inse'),
('inse456', 'information security', 'fff', 'Th 5:45-8:15', 'inse'),
('soen6481', 'Software project management', 'bbb', 'wed 5:45-8:15', 'soen'),
('comp123', 'algorithm design', 'aaa', 'Mon 5:30-8:30', 'comp'),
('soen123', 'software refactoring', 'bbb', 'Fri 5:45-8:15', 'soen'),
('comp987', 'computer science', 'aaa', 'Th 5:45-8:15', 'comp'),
('soen111', 'software measurement', 'bbb', 'Mon 5:30-8:30', 'soen'),
('comp456', 'advanced database', 'ddd', 'Fri 5:45-8:15', 'comp');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `cid1` varchar(50) DEFAULT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sname`, `email`, `id`, `cid1`, `department`) VALUES
('deep', 'd@gmail.com', '123', 'comp987', 'comp'),
('jemish', 'j@gmail.com', '111', 'encs691k', 'soen'),
('yash1', 'yash@gmail.com', '555', 'inse456', 'inse'),
('yash', 'yash@gmail.com', '444', 'inse6481', 'inse'),
('jemish', 'jemish.paghadar27@gmail.com', '111', 'soen6441', 'soen'),
('jemish', 'jemish.paghadar27@gmail.com', '111', 'soen111', 'soen'),
('raj', 'rajp1908@gmail.com', '333', 'soen111', 'soen'),
('raj', 'rajp1908@gmail.com', '333', 'soen6441', 'soen'),
('deep', 'deeppatel2223@gmail.com', '123', 'comp6231', 'comp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `flag` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profilepic` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`flag`, `department`, `name`, `id`, `password`, `email`, `profilepic`) VALUES
('student', 'soen', 'jemish', '111', '123', 'jemish.paghadar27@gmail.com', NULL),
('student', 'comp', 'deep', '123', '123', 'deeppatel2223@gmail.com', ''),
('student', 'comp', 'jems', '222', '123', 'jemish.paghadar275@gmail.com', NULL),
('student', 'soen', 'raj', '333', '123', 'rajp1908@gmail.com', NULL),
('student', 'inse', 'yash', '444', '123', 'golwalayash@gmail.com`', NULL),
('professor', 'comp', 'aaa', 'aaa', 'aaa', 'aaa@gmail.com', NULL),
('professor', 'inse', 'bbb', 'bbb', 'aaa', 'bbb@gmail.com', NULL),
('professor', 'comp', 'ddd', 'ddd', 'aaa', 'ddd@gmail.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
