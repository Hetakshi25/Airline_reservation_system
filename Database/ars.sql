-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 05:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ars`
--

-- --------------------------------------------------------

--
-- Table structure for table `airline`
--

CREATE TABLE `airline` (
  `airlineid` int(3) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airline`
--

INSERT INTO `airline` (`airlineid`, `name`) VALUES
(1, 'Air india'),
(2, 'Go First'),
(3, 'Indigo'),
(4, 'Spice Jet'),
(5, 'Alliance Air');

-- --------------------------------------------------------

--
-- Table structure for table `bookflight`
--

CREATE TABLE `bookflight` (
  `bid` int(3) NOT NULL,
  `trip` varchar(25) NOT NULL,
  `ardate` date NOT NULL DEFAULT current_timestamp(),
  `dedate` date NOT NULL,
  `source` varchar(25) NOT NULL,
  `destination` varchar(25) NOT NULL,
  `fclass` varchar(20) NOT NULL,
  `passenger` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookflight`
--

INSERT INTO `bookflight` (`bid`, `trip`, `ardate`, `dedate`, `source`, `destination`, `fclass`, `passenger`) VALUES
(1, '', '2023-03-25', '2023-03-24', 'ahmedabad', 'vadodara', 'E', 2),
(23, '', '2023-03-22', '2023-03-19', 'mumbai', 'bhavnagar', 'E', 3),
(31, 'R', '2023-03-31', '2023-03-30', 'ahmedabad', 'vadodara', 'E', 2),
(32, 'R', '2023-04-04', '2023-04-01', 'mumbai', 'indore', 'E', 1),
(33, 'O', '2023-03-31', '2023-03-31', 'mumbai', 'ahmedabad', 'E', 1),
(34, 'R', '2023-04-06', '2023-04-05', 'ahmedabad', 'bhavnagar', 'E', 2),
(35, 'R', '2023-04-06', '2023-04-04', 'ahmedabad', 'indore', 'E', 1),
(36, 'O', '1970-01-01', '2023-09-04', 'bhavnagar', 'surat', 'E', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city`) VALUES
('mumbai'),
('ahmedabad'),
('vadodara'),
('indore'),
('surat'),
('bhavnagar');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedid` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `review` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedid`, `name`, `email`, `review`) VALUES
(1, 'abc', 'abc@gmail.com', 'nice'),
(2, 'pqr', 'pqr@gmail.com', 'good'),
(3, 'hetu', 'hetu@gmail.com', 'very nice website'),
(4, 'pqr', 'hd@gmail.com', 'niceeeee');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flightid` int(3) NOT NULL,
  `adminid` int(2) NOT NULL DEFAULT 1,
  `dedate` date NOT NULL,
  `ardate` date NOT NULL,
  `detime` time NOT NULL,
  `artime` time NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `airline` varchar(30) NOT NULL,
  `seats` int(4) NOT NULL,
  `duration` int(3) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flightid`, `adminid`, `dedate`, `ardate`, `detime`, `artime`, `source`, `destination`, `airline`, `seats`, `duration`, `price`) VALUES
(1, 1, '2023-03-20', '2023-03-20', '09:00:00', '10:03:00', 'bhavnagar', 'vadodara', 'indigo', 77, 1, 2500),
(2, 1, '2023-03-25', '2023-03-25', '10:10:00', '11:14:00', 'kandla', 'bhavnagar', 'spice jet', 60, 1, 2700),
(3, 1, '2023-03-25', '2023-03-25', '10:13:00', '12:13:00', 'rajkot', 'pune', 'Go first', 80, 2, 3000),
(4, 1, '2023-03-28', '2023-03-28', '15:30:00', '16:30:00', 'mumbai', 'jammu', 'Go First', 98, 2, 3500),
(5, 1, '2023-03-28', '2023-03-28', '12:30:00', '15:30:00', 'vadodara', 'udaipur', 'indigo', 88, 2, 3800),
(6, 1, '2023-03-25', '2023-03-25', '15:30:00', '17:55:00', 'pune', 'rajkot', 'Air india', 125, 3, 4000),
(7, 1, '2023-04-02', '2023-04-03', '17:00:00', '06:10:00', 'jamnagar', 'rajkot', 'Air india', 120, 1, 3500),
(8, 1, '2023-04-05', '2023-04-05', '11:05:00', '13:10:00', 'udaipur', 'nasik', 'Indigo', 78, 2, 3500),
(9, 1, '2023-04-05', '2023-04-05', '18:05:00', '19:10:00', 'jodhpur', 'vadodara', 'Air india', 100, 1, 2800),
(10, 1, '2023-04-05', '2023-04-05', '16:09:00', '18:10:00', 'bhavnagar', 'pune', 'Air india', 80, 1, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `flight1`
--

CREATE TABLE `flight1` (
  `flightid` int(3) NOT NULL,
  `adminid` int(3) NOT NULL DEFAULT 1,
  `dedate` date NOT NULL,
  `ardate` date NOT NULL,
  `detime` time NOT NULL,
  `artime` time NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `airline` varchar(25) NOT NULL,
  `seats` int(4) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` int(5) NOT NULL,
  `PASSENGER` int(3) DEFAULT NULL,
  `CLASS` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight1`
--

INSERT INTO `flight1` (`flightid`, `adminid`, `dedate`, `ardate`, `detime`, `artime`, `source`, `destination`, `airline`, `seats`, `duration`, `price`, `PASSENGER`, `CLASS`) VALUES
(1, 1, '2023-03-23', '2023-03-23', '09:45:00', '14:15:00', 'ahmedabad', 'vadodara', 'Indigo', 77, 5, 5700, NULL, ''),
(2, 1, '2023-03-27', '2023-03-27', '19:10:00', '23:20:00', 'indore', 'ahmedabad', 'Indigo', 68, 4, 4800, NULL, ''),
(3, 1, '2023-03-28', '2023-03-28', '11:30:00', '12:30:00', 'mumbai', 'bhavnagar', 'Spice Jet', 63, 1, 5000, NULL, ''),
(4, 1, '2023-03-30', '2023-03-30', '22:30:00', '23:30:00', 'ahmedabad', 'indore', 'Indigo', 63, 1, 2800, NULL, ''),
(5, 1, '2023-04-03', '2023-04-03', '16:30:00', '18:30:00', 'ahmedabad', 'udaipur', 'Air india', 70, 2, 6000, NULL, ''),
(6, 1, '2023-04-04', '2023-04-04', '18:10:00', '19:10:00', 'surat', 'udaipur', 'Air india', 55, 1, 6000, NULL, ''),
(7, 1, '2023-03-30', '2023-03-30', '07:00:00', '08:00:00', 'vadodara', 'ahmedabad', 'Indigo', 67, 1, 4000, NULL, ''),
(8, 1, '2023-04-06', '2023-04-06', '16:50:00', '17:50:00', 'udaipur', 'ahmedabad', 'Alliance Air', 68, 1, 2500, NULL, ''),
(9, 1, '2023-04-03', '2023-04-03', '09:15:00', '10:15:00', 'ahmedabad', 'mumbai', 'Go First', 70, 1, 2800, NULL, ''),
(10, 1, '2023-03-31', '2023-03-31', '20:38:00', '22:38:00', 'udaipur', 'surat', 'Air india', 80, 2, 3800, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`, `usertype`) VALUES
(1, 'pqr', '1234', 'user'),
(2, 'aaa', '111', 'user'),
(3, 'dfg', '4444', 'user'),
(4, 'jkl', '555', 'user'),
(5, 'xyz', '5555', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `pid` int(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pid`, `fname`, `mname`, `lname`, `mobileno`, `age`) VALUES
(3, 'abc', 'def', 'manek', 2147483647, 20010606),
(6, 'kapoor', 'raj', 'ramlal', 1234567891, 20040609),
(7, 'gada', 'jethalal', 'champaklal', 1234567891, 19960110),
(8, 'gada', 'jethalal', 'champaklal', 1234567891, 19960110),
(10, 'abc', 'def', 'manek', 1234567891, 19950620),
(18, '', '', '', 0, 0),
(19, 'abc', 'def', 'manek', 1234567891, 23),
(20, 'abc', 'raj', 'a', 1234567891, 23),
(21, 'hetvi', 'raj', 'manek', 2147483647, 23),
(22, 'jjj', 'jjj', 'jjj', 2147483647, 35),
(23, 'j', 'j', 'j', 1234567891, 35),
(24, 'abhi', 'hetaxi', 'davda', 1234567891, 35);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `uid` int(3) NOT NULL,
  `flightid` int(3) NOT NULL,
  `cardno` int(12) NOT NULL,
  `expirydate` varchar(25) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`uid`, `flightid`, `cardno`, `expirydate`, `amount`) VALUES
(17, 0, 2147483647, '23-03-29', 0),
(18, 0, 2147483647, '23-03-29', 0),
(19, 0, 2147483647, '2024', 0),
(20, 0, 2147483647, '2026', 0),
(21, 0, 2147483647, '2025', 0),
(22, 0, 2147483647, '2025', 0),
(23, 0, 2147483647, '2026', 0),
(24, 0, 2147483647, '2025', 0),
(25, 0, 2147483647, '2025', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(50) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `usertype` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `firstname`, `lastname`, `email`, `username`, `password`, `mobileno`, `city`, `usertype`) VALUES
(1, 'pqr', 'manek', 'pqr@gmail.com', '', '', 1234567891, 'bhavnagar', ''),
(2, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', 1234567891, 'bhavnagar', 'admin'),
(3, 'zala', 'poojaba', 'poojaba@gmail.com', 'poojaba', 'poojaba', 2147483647, 'bhavnagar', 'user'),
(4, 'hetaxi', 'davda', 'hdavda@gmail.com', 'hetu', '12345', 1234567891, 'bhavnagar', 'user'),
(5, 'a', 'a', 'a@a.com', 'a', '123', 2147483647, 'bhavnagar', 'user'),
(6, 'b', 'b', 'b@b.com', 'b', '456', 2147483647, 'b', 'user'),
(7, 'c', 'c', 'c@c.com', 'c', '789', 2147483647, 'c', 'user'),
(8, 'd', 'd', 'd@d.com', 'd', '159', 2147483647, 'd', 'user'),
(9, 'z', 'z', 'z@z.com', 'z', '555', 2147483647, 'z', 'user'),
(10, 'a', 'manek', 'a@a.com', 'dishu', '56789', 1234567891, 'bhavnagar', 'user'),
(11, 'abhi', 'davda', 'a@a.com', 'abhi', '45678', 2147483647, 'bhavnagar', 'user'),
(12, 'pranali', 'd', 'pranali@gmail.com', 'pranali', 'davda', 1234567891, 'bhavnagar', 'user'),
(20, 'aaa', 'aaa', 'aaa@gmail', 'aaa', '1211', 1234567891, 'ahemdabad', 'user'),
(21, 'bbb', 'bbb', 'b@gmail.com', 'bbb', '2345', 2147483647, 'rajkot', 'user'),
(22, 'a', 'a', 'a@a.com', 'a', '111', 1234567891, 'bhavnagar', 'user'),
(23, 'a', 'a', 'a@a.com', 'a', '1111', 1234567891, 'bhavnagar', 'user'),
(24, 'abc', 'manek', 'abc@gmail.com', 'abc', '3333', 2147483647, 'rajkot', 'user'),
(25, 'a', 'a', 'a@a.com', 'a', '222', 1234567891, 'ahemdabad', 'user'),
(26, 'a', 'a', 'a@a.com', 'a', '222', 1234567891, 'ahemdabad', 'user'),
(27, 'a', 'davda', 'a@a.com', 'a', '1111', 1234567891, 'bhavnagar', 'user'),
(28, 'j', 'j', 'j@gamail.com', 'j', '1111', 2147483647, 'ahemdabad', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `tid` int(3) NOT NULL,
  `flightno` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `airline` varchar(20) NOT NULL,
  `duration` int(3) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airline`
--
ALTER TABLE `airline`
  ADD PRIMARY KEY (`airlineid`);

--
-- Indexes for table `bookflight`
--
ALTER TABLE `bookflight`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedid`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flightid`);

--
-- Indexes for table `flight1`
--
ALTER TABLE `flight1`
  ADD PRIMARY KEY (`flightid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airline`
--
ALTER TABLE `airline`
  MODIFY `airlineid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookflight`
--
ALTER TABLE `bookflight`
  MODIFY `bid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `flightid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `flight1`
--
ALTER TABLE `flight1`
  MODIFY `flightid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `tid` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
