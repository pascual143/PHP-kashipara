-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 08:30 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `pwd`, `email`) VALUES
(1, 'pra', '609', 'prashanthacharya96@g');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE IF NOT EXISTS `applicant` (
  `cust_id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pin` int(7) NOT NULL,
  `username` varchar(10) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `resume` varchar(10000) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`cust_id`, `fname`, `lname`, `dob`, `gender`, `address`, `mobile`, `email`, `pin`, `username`, `photo`, `resume`, `pwd`) VALUES
(7, 'Prashanth', 'Acharya', '1996-12-01', 'Male', 'Padur', '7259731478', 'prashanthacharya96@gmail.com', 574106, 'prash', 'C:xampp	mpphp50B.tmp', 'C:xampp	mpphp50C.tmp', '19961996'),
(8, 'Manoj', 'BT', '1997-01-02', 'Male', 'Madikeri', '8989895675', 'manoj@gmail.com', 574116, 'manojbt', 'C:xampp	mpphp273E.tmp', 'C:xampp	mpphp274E.tmp', '00000000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(15) NOT NULL,
  `pin` int(7) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `fname`, `lname`, `dob`, `gender`, `address`, `mobile`, `email`, `pin`, `username`, `pwd`) VALUES
(1, 'Glavis', 'C', '1996-12-01', 'Male', 'Shirva', 2147483647, 'glavi.gm@gmail.', 574110, 'glav', '12345678'),
(2, 'Prashanth', 'Acharya', '1996-12-01', 'Male', 'Padur', 2147483647, 'prashanthachary', 574116, 'prashanth', '148080609'),
(3, 'Manoj', 'B', '1996-02-01', 'Male', 'sfdsdfsdf', 2147483647, 'dssd@gg.com', 0, 'dgsg', '11111111'),
(4, 'dfsdf', 'dfsfds', '2018-01-19', 'Male', 'dssd', 2147483647, 'dfdf@fdfd.com', 444444, 'ppp', '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
