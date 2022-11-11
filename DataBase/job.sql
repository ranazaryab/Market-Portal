-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 03:05 PM
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
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE `employer_reg` (
  `EmployerId` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Experience` varchar(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `fname`, `lname`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Experience`, `Status`, `UserName`, `Password`) VALUES
(7, 'rana', 'zaryab', 'punjab lahore', 'lahore', 'zaryab@gmail.com', 3030422594, 'mechanic', '3', 'Confirm', 'zaryab', 'zaryab');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `fname`, `lname`, `Address`, `City`, `Email`, `Mobile`, `Gender`, `Status`, `UserName`, `Password`) VALUES
(9, 'rana', 'ali', 'punajb pakistan', 'lahore', 'zaryab@gami.com', 3000000000, 'Male', 'Confirm', 'ali', '123'),
(10, 'rana', 'zaryab', 'lahore,punjab,Pakistan', 'Lahore', 'zaryab@gmail.com', 3000000000, 'Male', 'Confirm', 'zaryab', 'zaryab');

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `PropId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `WId` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Days` varchar(20) NOT NULL,
  `Budget` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_work` varchar(20) NOT NULL,
  `Experience` varchar(11) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`PropId`, `UserId`, `WId`, `Name`, `Days`, `Budget`, `City`, `Email`, `Mobile`, `Area_work`, `Experience`, `Description`) VALUES
(7, 10, 7, 'zaryab', '1', '10', 'lahore', 'rana@gmail.com', 3000303030, 'engineer', '3', 'Hello sir Yes I will Do your work.'),
(8, 10, 7, 'zaryab', '1', '6', 'lahore', 'rana@gmail.com', 3000303030, 'engineer', '3', 'Hello Sir! Yes I will do your Work.');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(6, 'admin', 'admin'),
(10, 'xyz', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `ID` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `Posted_by` varchar(20) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Experience` varchar(20) NOT NULL,
  `Days` varchar(20) NOT NULL,
  `Budget` int(11) NOT NULL,
  `Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`ID`, `UserId`, `Posted_by`, `Area`, `City`, `Experience`, `Days`, `Budget`, `Detail`) VALUES
(6, 10, 'zaryab', 'engineer', 'lahore', '3', '2', 10, 'i want an engineer in lahore'),
(7, 10, 'zaryab', 'plumber', 'lahore', '2', '1', 15, 'I want plumber in Lahore for my sanitory work.'),
(8, 9, 'ali', 'mechanic', 'lahore', '2', '1', 14, 'I want mechanic in Lahore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer_reg`
--
ALTER TABLE `employer_reg`
  ADD PRIMARY KEY (`EmployerId`);

--
-- Indexes for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  ADD PRIMARY KEY (`JobSeekId`),
  ADD KEY `JobSeekId` (`JobSeekId`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`PropId`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employer_reg`
--
ALTER TABLE `employer_reg`
  MODIFY `EmployerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobseeker_reg`
--
ALTER TABLE `jobseeker_reg`
  MODIFY `JobSeekId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `PropId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
