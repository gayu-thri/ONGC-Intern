-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 12:20 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `Issue_no` int(255) DEFAULT NULL,
  `Message_id` int(20) NOT NULL,
  `Request_given_date` datetime(6) DEFAULT NULL,
  `request_given_by` varchar(255) DEFAULT NULL,
  `Request_given_name` varchar(255) DEFAULT NULL,
  `Action_description` varchar(255) DEFAULT NULL,
  `Replied_date` datetime(6) DEFAULT NULL,
  `replied_by` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `Department_from` varchar(255) DEFAULT NULL,
  `Department_to` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Issue_no`, `Message_id`, `Request_given_date`, `request_given_by`, `Request_given_name`, `Action_description`, `Replied_date`, `replied_by`, `Department`, `Department_from`, `Department_to`) VALUES
(1, 35, NULL, NULL, 'abcd', 'action description ', '2019-05-28 21:42:23.000000', NULL, NULL, 'Hardware', 'Hardware'),
(1, 36, '2019-05-28 20:42:38.000000', '1994', 'abcd', 'Action description', '2019-05-28 21:43:05.000000', 'abcd', 'Hardware', NULL, NULL),
(2, 37, '2019-05-28 21:35:56.000000', '1994', 'abcd', 'Action description', '2019-05-28 21:43:38.000000', 'abcd', 'Hardware', NULL, NULL),
(4, 38, '2019-05-29 13:15:34.000000', '1994', 'abcd', 'Action description', '2019-05-29 13:16:14.000000', 'abcd', 'Hardware', NULL, NULL),
(3, 39, '2019-05-29 13:06:01.000000', '1994', 'abcd', 'Action description', '2019-05-29 13:21:22.000000', 'abcd', 'Hardware', NULL, NULL),
(2, 40, '2019-05-28 21:43:46.000000', '1994', 'abcd', 'Action description', '2019-05-29 13:51:29.000000', 'abcd', 'Hardware', NULL, NULL),
(4, 41, '2019-05-29 13:17:43.000000', '1994', 'Nivedha', 'Action description', '2019-05-29 15:08:43.000000', 'Nivedha', 'Hardware', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `Issue_no` int(255) NOT NULL,
  `Summary` varchar(255) DEFAULT NULL,
  `Issue_Description` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Request_Date` datetime DEFAULT CURRENT_TIMESTAMP,
  `Request_given_by` int(255) NOT NULL,
  `Request_given_name` varchar(255) DEFAULT NULL,
  `issue_in` varchar(50) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Pending',
  `Action_taken_description` varchar(255) DEFAULT NULL,
  `Action_taken_by` varchar(255) DEFAULT NULL,
  `Action_taken_Date` datetime DEFAULT NULL,
  `Solutionstatus` varchar(255) NOT NULL DEFAULT 'Unsolved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`Issue_no`, `Summary`, `Issue_Description`, `Department`, `Request_Date`, `Request_given_by`, `Request_given_name`, `issue_in`, `Status`, `Action_taken_description`, `Action_taken_by`, `Action_taken_Date`, `Solutionstatus`) VALUES
(1, 'issue not', 'Disk Broken', 'Hardware', '2019-05-28 20:42:38', 1994, 'abcd', 'ram', 'Completed', 'Action description', 'abcd', '2019-05-28 21:43:05', 'Solved'),
(2, '', '', 'Hardware', '2019-05-28 21:43:46', 1994, 'abcd', 'cgg', 'Pending', 'Action description', 'abcd', '2019-05-29 13:51:29', 'Solved'),
(3, '', '', 'Hardware', '2019-05-29 13:06:01', 1994, 'abcd', 'cgg', 'Completed', 'Action description', 'abcd', '2019-05-29 13:21:22', 'Solved'),
(4, 'issue not', 'issue issue', 'Hardware', '2019-05-29 15:09:04', 1994, 'abcd', 'ram', 'Pending', 'Action description', 'Nivedha', '2019-05-29 15:08:42', 'Unsolved'),
(5, 'issue not', 'Disk not working properly not functioning', 'Hardware', '2019-05-29 15:08:15', 1994, 'Nivedha', 'disk', 'Pending', NULL, NULL, NULL, 'Unsolved');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_id` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Employee_name` varchar(255) NOT NULL,
  `Group` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Privilege` varchar(255) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_id`, `Password`, `Employee_name`, `Group`, `Designation`, `Privilege`) VALUES
('1234', '4567', 'Ravinder Nath', 'Software', 'Head', 'User'),
('1294', '4567', 'Gayathri', 'Software', 'Head', 'User'),
('1994', '4567', 'Nivedha', 'Hardware', 'Head', 'User'),
('2000', '4567', 'Harini', 'Hardware', 'Head\r\n', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`Message_id`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`Issue_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `Message_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `Issue_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
