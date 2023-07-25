-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 05:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `aid` int(4) NOT NULL,
  `adminemail` varchar(40) NOT NULL,
  `adminpw` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aid`, `adminemail`, `adminpw`) VALUES
(2, 'baig@gmail.com', 'tae');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `docemail` varchar(50) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `aemail` varchar(40) NOT NULL,
  `aphone` varchar(11) NOT NULL,
  `adate` varchar(50) NOT NULL,
  `atime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`docemail`, `aname`, `aemail`, `aphone`, `adate`, `atime`) VALUES
('kook@gmail.com', 'abeer', 'abeer@gmail.com', '82740199', '30/1/2023', '2:30pm'),
('kook@gmail.com', 'Hafsa', 'timyung@gmail.com', '13871287', '7/9/23', '8:30');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `docemail` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `week` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(5) NOT NULL,
  `start` text NOT NULL,
  `end` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`docemail`, `day`, `week`, `month`, `year`, `start`, `end`) VALUES
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('', '', '', '', '', '', ''),
('kook@gmail.com', 'Friday', '4', 'feb', '2023', '7:00', '9:00'),
('sumi@gmail.com', 'Monday', '2', 'december', '2023', '7:00pm', '8:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cid` int(4) NOT NULL,
  `cityname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cid`, `cityname`) VALUES
(2, 'seoul'),
(3, 'busan');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `dis_id` int(5) NOT NULL,
  `disease` varchar(100) NOT NULL,
  `prevention` varchar(200) NOT NULL,
  `cure` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`dis_id`, `disease`, `prevention`, `cure`) VALUES
(1, 'typhoid', 'use insect repellent', ''),
(3, 'asthama', 'care', 'medicines');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `did` int(3) NOT NULL,
  `docemail` varchar(40) NOT NULL,
  `docpw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`did`, `docemail`, `docpw`) VALUES
(1, 'kook@gmail.com', 'kook'),
(2, 'tata@gmail.com', 'tata'),
(3, 'sumi@gmail.com', 'sumi');

-- --------------------------------------------------------

--
-- Table structure for table `doctorprofile`
--

CREATE TABLE `doctorprofile` (
  `docname` varchar(40) NOT NULL,
  `docemail` varchar(40) NOT NULL,
  `docaddr` varchar(100) NOT NULL,
  `docphoneno` varchar(11) NOT NULL,
  `doccity` varchar(50) NOT NULL,
  `specialization` varchar(100) NOT NULL,
  `experince` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorprofile`
--

INSERT INTO `doctorprofile` (`docname`, `docemail`, `docaddr`, `docphoneno`, `doccity`, `specialization`, `experince`) VALUES
('kookie', 'kook@gmail.com', 'busankorea', '14343578', 'busan', 'dpharmacy', '2yrs'),
('tata', 'tata@gmail.com', 'korea', '87897987', 'seoul', 'bds', '2 years'),
('sumi', 'sumi@gmail.com', 'seoul', '948308', 'las vegas', 'mbbs', '7 years');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `nid` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `title`, `content`, `date`, `link`) VALUES
(2, 'Covid', 'Currently, the dominant variant nationwide is XBB.1.5, with 87.9% of cases, followed by XBB.1.9.1, with 4.6% of cases. \"The original omicron variant is gone now,\" says Dr. Rupp.', '2023-04-28', 'www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pid` int(3) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `name`, `email`, `address`, `phoneno`) VALUES
(10, 'hobi', 'hobi@gmail.com', 'daegu', '8374918743'),
(28, 'suga', 'suga@gmail.com', 'lahore', '103892839');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD UNIQUE KEY `dis_id` (`dis_id`);

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `doctorprofile`
--
ALTER TABLE `doctorprofile`
  ADD UNIQUE KEY `docphoneno` (`docphoneno`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `aid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `dis_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  MODIFY `did` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
