-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2015 at 07:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE sideliner;
USE sideliner;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sideliner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admino` int(4) unsigned zerofill NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admino`, `username`, `password`) VALUES
(0001, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
`bidno` int(4) unsigned zerofill NOT NULL,
  `biddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `bidprice` decimal(9,2) DEFAULT NULL,
  `estworkday` int(11) DEFAULT NULL,
  `bidmsg` varchar(500) DEFAULT NULL,
  `userno` int(4) unsigned zerofill DEFAULT NULL,
  `prjctno` int(4) unsigned zerofill DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`bidno`, `biddate`, `bidprice`, `estworkday`, `bidmsg`, `userno`, `prjctno`) VALUES
(0022, '2015-03-17 06:28:05', '2000.00', 5, NULL, 0010, 0011);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
`notifno` int(4) unsigned zerofill NOT NULL,
  `client` varchar(30) NOT NULL,
  `bidder` varchar(30) NOT NULL,
  `msg` varchar(300) NOT NULL,
  `datercvd` datetime NOT NULL,
  `prjctno` int(4) NOT NULL,
  `viewed` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notifno`, `client`, `bidder`, `msg`, `datercvd`, `prjctno`, `viewed`) VALUES
(0008, 'kathybartolome', 'juan', 'Please contact me at my email', '2015-03-17 14:29:09', 11, 'true');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`prjctno` int(4) unsigned zerofill NOT NULL,
  `dateposted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deadlinedate` date NOT NULL DEFAULT '0000-00-00',
  `title` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `prjctdesc` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `minbudget` decimal(9,2) DEFAULT NULL,
  `maxbudget` decimal(9,2) DEFAULT NULL,
  `userno` int(4) unsigned zerofill DEFAULT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`prjctno`, `dateposted`, `deadlinedate`, `title`, `skills`, `prjctdesc`, `category`, `minbudget`, `maxbudget`, `userno`, `status`) VALUES
(0011, '2015-03-17 06:29:09', '2015-07-16', 'ssss', 'php ', 'sss', 'Sales & Marketing', '2000.00', '4000.00', 0011, 'Working in progress');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userno` int(4) unsigned zerofill NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `zipcode` char(4) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `contactno` varchar(15) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `skills` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userno`, `fname`, `mname`, `lname`, `bday`, `address`, `zipcode`, `email`, `contactno`, `username`, `password`, `type`, `status`, `skills`) VALUES
(0010, 'Juan', NULL, 'dela cruz', '1993-08-08', '', '', 'juan@gmail.com', '+63927584867', 'juan', '12345', 'user', 'banned', 'programming'),
(0011, 'Katrina ', NULL, 'Bartolome', '1995-11-27', 'Munting Batngas', '2100', 'katrinabartolome747@yahoo.com', '+639277957992', 'kathybartolome', 'kisses15', 'user', 'registered', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admino`);

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
 ADD PRIMARY KEY (`bidno`), ADD KEY `userno` (`userno`), ADD KEY `prjctno` (`prjctno`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
 ADD PRIMARY KEY (`notifno`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`prjctno`), ADD KEY `userno` (`userno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admino` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
MODIFY `bidno` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
MODIFY `notifno` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `prjctno` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userno` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
ADD CONSTRAINT `bids_ibfk_1` FOREIGN KEY (`userno`) REFERENCES `users` (`userno`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `bids_ibfk_2` FOREIGN KEY (`prjctno`) REFERENCES `projects` (`prjctno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`userno`) REFERENCES `users` (`userno`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
