-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 08:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bounthunt`
--

-- --------------------------------------------------------

--
-- Table structure for table `huntinfo`
--

CREATE TABLE `huntinfo` (
  `huntid` int(11) NOT NULL,
  `taskid` int(11) NOT NULL,
  `h_userid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `huntinfo`
--

INSERT INTO `huntinfo` (`huntid`, `taskid`, `h_userid`) VALUES
(9, 7, 'jaynigam'),
(14, 8, 'tgtt');

-- --------------------------------------------------------

--
-- Table structure for table `taskinfo`
--

CREATE TABLE `taskinfo` (
  `taskid` int(11) NOT NULL,
  `t_userid` varchar(100) NOT NULL,
  `w_desc` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `money` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'UNDONE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taskinfo`
--

INSERT INTO `taskinfo` (`taskid`, `t_userid`, `w_desc`, `date`, `state`, `city`, `money`, `status`) VALUES
(7, 'tgtt', 'food delivery ', '2020-10-12', 'Tamil nadu', 'chennai', 500, 'UNDONE'),
(8, 'jaynigam', 'package delivery', '2020-10-12', 'Tamil nadu', 'chennai', 1000, 'UNDONE'),
(9, 'tgtt', 'baby sitting ', '2020-10-12', 'TamilNadu', 'Chennai', 200, 'UNDONE'),
(12, 'tgtt', 'grocery ', '2020-10-13', 'TamilNadu', 'Chennai', 1000, 'UNDONE');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `cntnumber` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `lname`, `age`, `gen`, `cntnumber`, `email`, `aadhar`, `userid`, `pass`) VALUES
('hasnain', 'sikora', 55, 'male', '5698742154', 'hs@gmail.com', '456185239517', 'hsk', 'tgt'),
('jayant', 'nigam', 77, 'male', '2147483647', 'nigam.jayant@gmail.com', '2147483647', 'jaynigam', 'tgt'),
(' sam', 'gupta', 33, 'male', '7798742154', 'sam@gmail.com', '999999666654', 'ssaamm', 'tgt'),
('tanay', 'sharma', 22, 'male', '2147483647', 'tanaybhadula2002@gmail.com', '2147483647', 'tgtt', 'tgt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `huntinfo`
--
ALTER TABLE `huntinfo`
  ADD PRIMARY KEY (`huntid`);

--
-- Indexes for table `taskinfo`
--
ALTER TABLE `taskinfo`
  ADD PRIMARY KEY (`taskid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `huntinfo`
--
ALTER TABLE `huntinfo`
  MODIFY `huntid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `taskinfo`
--
ALTER TABLE `taskinfo`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
