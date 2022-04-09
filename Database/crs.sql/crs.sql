-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2017 at 01:06 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `postvac`
--

CREATE TABLE `postvac` (
  `cname` varchar(50) NOT NULL,
  `job` varchar(30) NOT NULL,
  `sal` varchar(10) NOT NULL,
  `elb` varchar(20) NOT NULL,
  `emaa` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postvac`
--

INSERT INTO `postvac` (`cname`, `job`, `sal`, `elb`, `emaa`) VALUES
('', 'd', 'hjhg', 'jgjg', 'jkhjb'),
('', 'Java Developer', '17000', 'BCA', 'hyam@gmail.com'),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', 'php developoer', '20000', 'MCA', 'kjhgfc'),
('rsb international', 'Dotnet developer', '23000', 'MCA with 2 Year Expe', 'shyam@gmail.com'),
('rudra infotech', 'Java Developer', '21000', 'M.Tech', 'rudra@gmail.com'),
('rudra infotech', 'Java Developer', '21000', 'M.Tech', 'rudra@gmail.com'),
('shudha infotech', 'Java Developer', '17000', 'B.Tech, BCA, MCA', 'shudha@gmail.com'),
('vikram pvt. ltd.', 'java developer', '10000', 'BCA, MCA', 'vikram@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `regadm`
--

CREATE TABLE `regadm` (
  `aname` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `conn` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regadm`
--

INSERT INTO `regadm` (`aname`, `email`, `conn`, `uname`, `pass`) VALUES
('shyam', 'hsyakkskj', '0987654', 'kjhgfdghjk', 'jkjk'),
('Shyam Sundar', 'shyam@gmail.com', '987654321', 'shyamaaa', 'shyam1');

-- --------------------------------------------------------

--
-- Table structure for table `regcmp`
--

CREATE TABLE `regcmp` (
  `cid` int(11) NOT NULL auto_increment,
  `cn` varchar(30) NOT NULL,
  `et` varchar(32) NOT NULL,
  `em` varchar(34) NOT NULL,
  `ct` varchar(12) NOT NULL,
  `hr` varchar(34) NOT NULL,
  `us` varchar(34) NOT NULL,
  `ps` varchar(34) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `regcmp`
--

INSERT INTO `regcmp` (`cid`, `cn`, `et`, `em`, `ct`, `hr`, `us`, `ps`) VALUES
(1, 'd', 'd', 'dd', 'd', 'd', 'd', 'd'),
(2, 'shine skill', '2011', 'shyam@gmail.com', '9546163242', 'Shyam', 'Shyamaa', 'sssss'),
(3, 'shyam', '2003', 'shyam@gmail.com', '9393939939', 'Prakash', 'shyam11', 'shyam'),
(4, '', '', '', '', '', '', ''),
(5, 'sumit', '2001', 'poraon@gmail', '7978824677', 'pradip munda', 'prakash', 'zxcvb'),
(6, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regstu`
--

CREATE TABLE `regstu` (
  `uid` int(11) NOT NULL auto_increment,
  `fna` varchar(30) NOT NULL,
  `gen` varchar(7) NOT NULL,
  `em` varchar(32) NOT NULL,
  `con` varchar(10) NOT NULL,
  `cty` varchar(20) NOT NULL,
  `addr` varchar(159) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `scho` varchar(20) NOT NULL,
  `yp1` varchar(20) NOT NULL,
  `pr1` varchar(10) NOT NULL,
  `coll` varchar(30) NOT NULL,
  `yp2` varchar(20) NOT NULL,
  `pr2` varchar(10) NOT NULL,
  `uni1` varchar(30) NOT NULL,
  `yp3` varchar(20) NOT NULL,
  `pr3` varchar(10) NOT NULL,
  `oqa` varchar(150) NOT NULL,
  `una` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `regstu`
--

INSERT INTO `regstu` (`uid`, `fna`, `gen`, `em`, `con`, `cty`, `addr`, `dob`, `scho`, `yp1`, `pr1`, `coll`, `yp2`, `pr2`, `uni1`, `yp3`, `pr3`, `oqa`, `una`, `pwd`) VALUES
(8, 'Vikram', 'Male', 'vikram@gmail.com', '9845726677', 'Haza', 'bwhjj', '1995-06-12', 'Matric', '2010', '60', 'I.Sc.', '2012', '56', 'BCA', '2017', '70', 'DEO', 'vikram', '12345'),
(6, 'Shyam Sundar Pradhan', 'Male', 'shyam@gmail.com', '9835012978', 'Jamshedpur', 'Kharsawan', '1994-02-12', 'Matric', '2010', '56.4', 'I.A', '2012', '54.2', 'BCA', '2017', '70', 'ITI', 'shyamsundar', '12021994');
