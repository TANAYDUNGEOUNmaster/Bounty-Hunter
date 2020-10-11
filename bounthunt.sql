-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2020 at 04:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

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
(1, 1, 'jaynigam'),
(2, 2, 'tgtt'),
(3, 2, 'dikshash'),
(4, 3, '123'),
(5, 4, 'apar'),
(6, 5, 'apar'),
(7, 2, 'paras'),
(8, 6, 'apar');

-- --------------------------------------------------------

--
-- Table structure for table `taskinfo`
--

CREATE TABLE `taskinfo` (
  `taskid` int(11) NOT NULL,
  `t_userid` varchar(100) NOT NULL,
  `w_desc` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `city` varchar(100) NOT NULL,
  `money` int(11) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'UNDONE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taskinfo`
--

INSERT INTO `taskinfo` (`taskid`, `t_userid`, `w_desc`, `date`, `city`, `money`, `status`) VALUES
(1, 'tgtt', 'baby sitting ', '2020-10-08', 'chennai', 4000, 'DONE'),
(2, 'jaynigam', 'food delivery ', '2020-10-10', 'chennai', 3000, 'UNDONE'),
(3, '123', 'baby sitting', '2020-10-29', 'Chennai', 5000, 'UNDONE'),
(4, 'apar', 'pet sitting', '2020-10-31', 'Gwalior', 2000, 'DONE'),
(5, 'paras', 'App development', '2020-10-27', 'Chennai', 15000, 'DONE'),
(6, 'paras', 'web development', '2020-10-23', 'Delhi', 5000, 'UNDONE');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `cntnumber` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aadhar` int(12) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `lname`, `age`, `gen`, `cntnumber`, `email`, `aadhar`, `userid`, `pass`) VALUES
('Amogh', 'Saxena', 19, 'male', 2147483647, 'amoghsaxena9604@gmail.com', 123456789, 'amogh', 'amogh123'),
('Apar', 'Saxena', 20, 'male', 2147483647, 'amoghsaxena2702@gmail.com', 123456789, 'apar', 'aa'),
('diksha', 'sharma', 22, 'female', 2147483647, 'dikshar@gmail.com', 2147483647, 'dikshash', 'tgt'),
('jayant', 'nigam', 22, 'male', 2147483647, 'nigam.jayant@gmail.com', 2147483647, 'jaynigam', 'tgt'),
('paras', 'garg', 19, 'male', 123465789, 'xyz@mail.com', 456789132, 'paras', 'pg'),
('tanay', 'sharma', 77, 'male', 2147483647, 'tanaybhadula2202@gmail.com', 2147483647, 'tgtt', 'tgt');

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
  MODIFY `huntid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `taskinfo`
--
ALTER TABLE `taskinfo`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
