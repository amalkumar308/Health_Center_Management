-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 07:14 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helthcenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `password`) VALUES
('choubeyji', 'amal');

-- --------------------------------------------------------

--
-- Table structure for table `apoint`
--

CREATE TABLE IF NOT EXISTS `apoint` (
  `duser_id` varchar(20) NOT NULL,
  `cuser_id` varchar(30) NOT NULL,
  `date1` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `apoint`
--

INSERT INTO `apoint` (`duser_id`, `cuser_id`, `date1`) VALUES
('amal', 'mnnit', '03/04/2018'),
('amal2', 'choubeyji', '03/04/2018'),
('amal2', 'ankur', '04/04/2018'),
('amal2', '6785', '04/04/2018'),
('amal', '4875', '04/04/2018'),
('amal2', 'hngfd', '04/04/2018'),
('', '225', '04/04/2018'),
('amal', 'sdgtfdfytrgfafd', '04/04/2018'),
('amal', 'sdgtfdfytrgfafd', '04/04/2018'),
('amal2', '1212', '04/04/2018'),
('', 'erew', '04/04/2018'),
('amal2', '9874', '04/04/2018'),
('amal', '', '04/04/2018'),
('amal', '12345', '04/04/2018'),
('amal', '123595', '04/04/2018');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `user_id` varchar(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) DEFAULT NULL,
  `address_line3` varchar(50) DEFAULT NULL,
  `diesis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `first_name`, `middle_name`, `last_name`, `email`, `mob`, `address_line1`, `address_line2`, `address_line3`, `diesis`) VALUES
('', 'gau', '', '', '', '', '', '', '', 'Choice'),
('1212', 'sd', 'sdsa', 'assas', 'amalkumar308@gmail.com', '8298329775', '', '', '', 'Allergy'),
('12345', 'gaurav', '', 'mishra', 'ddeepak9501@gmail.com', '8298329775', '710 svbh', 'juhi lal colony', '', 'Acne'),
('123595', 'dfdf', 'dsg', 'dsg', 'ddeepak9501@gmail.com', '5654658919', 'e', 'd', 'g', 'Acne'),
('225', 'gaurav', 'MISHRA', '', 'mishra9817@gmail.com', '9044092209', '188/6', 'mnnit,Allahabad india', '', 'Acne'),
('4875', 'amal', 'dsg', 'mishra', 'amalkumar308@gmail.com', '8726447424', '711 svbh', 'mnnit Allahabad', '', 'Acne'),
('6785', 'gaurav', 'kumar', 'choubey', 'amalkumar308@gmail.com', '8298329775', '710 svbh', 'mnnit Allahabad', '', 'Allergy'),
('9874', 'gaurav', '', 'mishra', 'mishra9817@gmail.com', '9044092209', '710 svbh', 'mnnit Allahabad', '', 'Allergy'),
('ankur', 'gaurav', 'kumar', 'mishra', 'amalkumar308@gmail.com', '8298329775', '710 svbh', 'mnnit Allahabad', '', 'Allergy'),
('choubeyji', 'gaurav', 'kumar', '', 'amalkumar308@gmail.com', '8298329775', '710 svbh', 'mnnit Allahabad', '', 'Allergy'),
('erew', 'wads', 'dsa', 'ads', 'amalkumar308@gmail.com', '8298329775', '188/6', 'sumerpur', '', 'Allergy'),
('hngfd', 'gaurav', '', 'mishra', 'mishra9817@gmail.com', '9044092209', '711 svbh', 'mnnit Allahabad', '', 'Allergy'),
('mnnit', 'amal', 'kumar', 'choubey', 'amalkumar308@gmail.com', '8298329775', '710 svbh', 'mnnit Allahabad', '', 'Acne'),
('sdgtfdfytrg', 'dfdf', 'df', 'dfdd', 'mishra9817@gmail.com', '9044092209', '188/6', 'juhi lal colony', '', 'Acne');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) DEFAULT NULL,
  `address_line3` varchar(50) DEFAULT NULL,
  `diesis1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`user_id`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `mob`, `address_line1`, `address_line2`, `address_line3`, `diesis1`) VALUES
('amal', '123456', 'Amal', 'kumar', 'choubey', 'amal@gmail.com', '82147483647', ' 710 svbh', ' mnnit,india', ' ', 'Acne'),
('amal2', '123456', 'amal', 'choubey', '', 'amal@gmail.com', '8496668747', ' 710 svbh', ' mnnit,Allahabad', ' ', 'Allergy'),
('mishresh', '12345', 'gaurav', '', 'mishra', 'mishra9817@gmail.com', '8604828396', 'telliyar ganj', 'allahabad', 'up', 'Muscle Pain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
