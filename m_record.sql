-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2017 at 06:03 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nur1`
--

CREATE TABLE `nur1` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` int(8) NOT NULL,
  `address` varchar(50) NOT NULL,
  `workPhone` int(10) NOT NULL,
  `weight` int(5) NOT NULL,
  `height` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nur1`
--

INSERT INTO `nur1` (`username`, `password`, `name`, `gender`, `dob`, `address`, `workPhone`, `weight`, `height`) VALUES
('Tina Sharma', 'aa', 'Tina Sharma', 'Female', 4, 'Ravangla', 1236547895, 40, 5),
('', 'aa', 'aa ', 'Female', 1998, '', 0, 0, 0),
('', 'aa', 'rp ', 'Female', 1997, '', 1239874562, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `name` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `address` varchar(60) NOT NULL,
  `workPhone` int(10) NOT NULL,
  `consultingDoctor` varchar(20) NOT NULL,
  `disease` varchar(11) NOT NULL,
  `medicineName` varchar(50) NOT NULL,
  `visitingDate` varchar(10) NOT NULL,
  `visitingTime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`name`, `dob`, `gender`, `address`, `workPhone`, `consultingDoctor`, `disease`, `medicineName`, `visitingDate`, `visitingTime`) VALUES
('Tina Sharma', '12/04/1998', 'Female', 'Ravangla,Sikkim', 2147483647, 'Dr. K P', 'Fever', 'Flexon', '04/11/2017', 10),
('aa ', '', 'Female', '', 0, 'Dr. Pankaj Garg', '', '', '', 10),
('aa ', '2017-11-08', '', '', 0, 'Dr. Soumitra Roy', '', '', '', 0),
('rp ', '2017-11-14', 'Female', 'Ravangla,Sikkim', 1236547895, 'Dr. Sanjay Borude', 'Fever', '', '', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
