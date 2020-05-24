-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2020 at 08:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `apwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apwd`) VALUES
(1, 'srijan', 'srijan'),
(2, 'tejash', 'tejash'),
(3, 'kkr', 'kkr');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `anid` int(11) NOT NULL,
  `ans` varchar(20) NOT NULL,
  `testid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`anid`, `ans`, `testid`, `sid`) VALUES
(17, '1', 17, 1),
(18, '3', 17, 1),
(19, '4', 17, 1),
(20, '2', 17, 1),
(21, '1', 18, 4),
(22, '2', 18, 4),
(23, '3', 18, 4),
(24, '2', 19, 10),
(25, '4', 19, 10),
(26, '1', 20, 6),
(27, '2', 20, 6),
(28, '4', 21, 6),
(29, '1', 21, 6),
(30, '1', 22, 1),
(31, '1', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `dno` int(11) NOT NULL,
  `tid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `dno`, `tid`) VALUES
(1, 'dbms', 1, 1),
(2, 'mpmc', 3, 7),
(4, 'metalurgy', 4, 11),
(5, 'DS', 1, 10),
(6, 'CTPS', 1, 9),
(7, 'CTPS', 1, 12),
(8, 'motors', 2, 13),
(9, 'acmotor', 2, 13),
(10, 'motors', 2, 8),
(11, 'electrical', 2, 15),
(12, 'cad', 4, 17),
(13, 'coa', 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dno` int(11) NOT NULL,
  `dname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dno`, `dname`) VALUES
(1, 'cse'),
(2, 'eee'),
(3, 'ece'),
(4, 'mee'),
(5, 'civ');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `testid` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `testid`, `question`, `q1`, `q2`, `q3`, `q4`, `answer`) VALUES
(35, 17, 'hi', 'me', 'no', 'no', 'no', 1),
(36, 17, 'hi', 'no', 'no', 'me', 'no', 3),
(37, 17, 'hi', 'no ', 'no', 'no', 'me', 4),
(38, 17, 'hi', 'no', 'me', 'no', 'no', 2),
(39, 18, 'find ans', 'me', 'no', 'no', 'no', 1),
(40, 18, '123', '0', '1', '0', '0', 2),
(41, 18, 'swa', '1', '0', '0', '0', 1),
(42, 19, '123', '0', '1', '0', '0', 2),
(43, 19, 'find me', 'me', 'no', 'no', 'no', 1),
(44, 20, 'what is db?', 'database', 'databus', 'databytes', 'decibels', 1),
(45, 20, 'what is pk', 'present key', 'primary key', 'primal key', 'prime key', 2),
(46, 21, '123', '0', '0', '0', '1', 4),
(47, 21, 'sdf', '1', '00', '0', '0', 1),
(48, 22, 'db', 'database', 'databit', 'databytes', 'databox', 1),
(49, 22, 'pk', 'primary', 'primary key', 'key', 'part', 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rid` int(11) NOT NULL,
  `testid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `score` int(100) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `testid`, `sid`, `score`, `cid`) VALUES
(9, 17, 1, 4, 1),
(10, 18, 4, 2, 2),
(11, 19, 10, 1, 12),
(12, 20, 6, 2, 5),
(13, 21, 6, 2, 6),
(14, 22, 1, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `spwd` varchar(20) NOT NULL,
  `dno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `sname`, `spwd`, `dno`) VALUES
(1, 'mahesh', 'mahesh', 1),
(4, 'ramesh', 'ramesh', 3),
(5, 'meestudent', 'meestudent', 4),
(6, 'csestud', 'csestud', 1),
(7, 'csestud', 'csestud', 1),
(8, 'saradhi', 'saradhi', 2),
(9, 'ameer', 'ameer', 2),
(10, 'sanjay', 'sanjay', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tpwd` varchar(20) NOT NULL,
  `dno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `tname`, `tpwd`, `dno`) VALUES
(1, 'sasikala', 'sasikala', 1),
(7, 'bhavana', 'bhavana', 3),
(8, 'bharathi', 'bharathi', 2),
(9, 'rajesh', 'rajesh', 1),
(10, 'jyotsna', 'jyotsna', 1),
(11, 'shashi', 'shashi', 4),
(12, 'shetty', 'shetty', 1),
(13, 'sameera', 'sameera', 2),
(14, 'raveena', 'raveena', 2),
(15, 'rajini', 'rajini', 2),
(17, 'karthik', 'karthik', 4),
(18, 'xyz', 'xyz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `testid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` date NOT NULL,
  `start` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `now` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `cid`, `date`, `start`, `code`, `now`) VALUES
(17, 1, '2019-12-11', 3, '54321', 0),
(18, 2, '2019-12-11', 3, 'amma', 0),
(19, 12, '2019-12-11', 3, 'apple', 0),
(20, 5, '2019-12-11', 1, 'ds', 0),
(21, 6, '2019-12-11', 1, 'ss', 0),
(22, 13, '2019-12-11', 3, 'quiz', 0),
(23, 1, '2000-05-02', 0, '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`anid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `dno` (`dno`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dno`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `testid` (`testid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `testid` (`testid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `dno` (`dno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `dno` (`dno`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`testid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `anid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `testid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dno`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`testid`) REFERENCES `test` (`testid`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`testid`) REFERENCES `test` (`testid`),
  ADD CONSTRAINT `result_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dno`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`dno`) REFERENCES `department` (`dno`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
