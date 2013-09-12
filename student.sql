-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 10:49 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `1cs`
--

CREATE TABLE IF NOT EXISTS `1cs` (
  `college_name` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `USN` varchar(50) NOT NULL,
  `10 MAT-11` int(11) DEFAULT NULL,
  `10 PHY-12` int(11) DEFAULT NULL,
  `10 CIV-13` int(11) DEFAULT NULL,
  `10 EME-14` int(11) DEFAULT NULL,
  `10 ELE-15` int(11) DEFAULT NULL,
  `10 CIP-18` int(11) DEFAULT NULL,
  `10 PHYL-17` int(11) DEFAULT NULL,
  `10 WSL-16` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1cs`
--

INSERT INTO `1cs` (`college_name`, `student_name`, `USN`, `10 MAT-11`, `10 PHY-12`, `10 CIV-13`, `10 EME-14`, `10 ELE-15`, `10 CIP-18`, `10 PHYL-17`, `10 WSL-16`, `total`, `result`) VALUES
('gech', 'thomas', '4gh08cs052', 102, 116, 118, 125, 123, 70, 74, 74, 802, 'FCD'),
('gech', 'ashok', '4gh09cs008', 79, 65, 69, 80, 98, 65, 64, 56, 576, 'FC'),
('gech', 'test5', '4gh09cs042', 102, 59, 100, 58, 95, 65, 69, 63, 611, 'FC'),
('gech', 'test4', '4gh09cs058', 102, 115, 100, 99, 69, 44, 59, 67, 655, 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `2cs`
--

CREATE TABLE IF NOT EXISTS `2cs` (
  `csollege_name` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `USN` varchar(50) NOT NULL,
  `06CS21` int(11) DEFAULT NULL,
  `06CS22` int(11) DEFAULT NULL,
  `06CS23` int(11) DEFAULT NULL,
  `06CS24` int(11) DEFAULT NULL,
  `06CS25` int(11) DEFAULT NULL,
  `06CS26` int(11) DEFAULT NULL,
  `06CSL27` int(11) DEFAULT NULL,
  `06CSL28` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2cs`
--

INSERT INTO `2cs` (`csollege_name`, `student_name`, `USN`, `06CS21`, `06CS22`, `06CS23`, `06CS24`, `06CS25`, `06CS26`, `06CSL27`, `06CSL28`, `total`, `result`) VALUES
('gech', 'thomas', '4gh08cs052', 124, 59, 109, 58, 91, 91, 69, 64, 665, 'PASS'),
('gech', 'test5', '4gh09cs001', 102, 116, 117, 90, 93, 65, 69, 67, 719, 'PASS'),
('gech', 'test2', '4gh09cs004', 125, 43, 92, 99, 96, 100, 59, 67, 681, 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `3cs`
--

CREATE TABLE IF NOT EXISTS `3cs` (
  `college_name` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `USN` varchar(50) NOT NULL,
  `06CS31` int(11) DEFAULT NULL,
  `06CS32` int(11) DEFAULT NULL,
  `06CS33` int(11) DEFAULT NULL,
  `06CS34` int(11) DEFAULT NULL,
  `06CS35` int(11) DEFAULT NULL,
  `06CS36` int(11) DEFAULT NULL,
  `06CSL37` int(11) DEFAULT NULL,
  `06CSL38` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3cs`
--

INSERT INTO `3cs` (`college_name`, `student_name`, `USN`, `06CS31`, `06CS32`, `06CS33`, `06CS34`, `06CS35`, `06CS36`, `06CSL37`, `06CSL38`, `total`, `result`) VALUES
('gech', 'thomas', '4gh08cs005', 125, 43, 0, 0, 0, 0, 0, 0, 168, 'FAIL'),
('gech', 'thomas', '4gh08cs052', 60, 67, 99, 55, 91, 91, 70, 67, 600, 'PASS');

-- --------------------------------------------------------

--
-- Table structure for table `4cs`
--

CREATE TABLE IF NOT EXISTS `4cs` (
  `college_name` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `USN` varchar(50) NOT NULL,
  `06CS41` int(11) DEFAULT NULL,
  `06CS42` int(11) DEFAULT NULL,
  `06CS43` int(11) DEFAULT NULL,
  `06CS44` int(11) DEFAULT NULL,
  `06CS45` int(11) DEFAULT NULL,
  `06CS46` int(11) DEFAULT NULL,
  `06CSL47` int(11) DEFAULT NULL,
  `06CSL48` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4cs`
--

INSERT INTO `4cs` (`college_name`, `student_name`, `USN`, `06CS41`, `06CS42`, `06CS43`, `06CS44`, `06CS45`, `06CS46`, `06CSL47`, `06CSL48`, `total`, `result`) VALUES
('gech', 'thomas', '4gh08cs052', 117, 102, 109, 96, 78, 87, 66, 67, 722, 'PASS'),
('gech', 'ashvini', '4gh09cs015', 95, 115, 101, 87, 68, 64, 67, 71, 668, 'FCD');

-- --------------------------------------------------------

--
-- Table structure for table `5cs`
--

CREATE TABLE IF NOT EXISTS `5cs` (
  `college_name` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `USN` varchar(50) NOT NULL,
  `06CS51` int(11) DEFAULT NULL,
  `06CS52` int(11) DEFAULT NULL,
  `06CS53` int(11) DEFAULT NULL,
  `06CS54` int(11) DEFAULT NULL,
  `06CS55` int(11) DEFAULT NULL,
  `06CS26` int(11) DEFAULT NULL,
  `06CSL57` int(11) DEFAULT NULL,
  `06CSL58` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5cs`
--

INSERT INTO `5cs` (`college_name`, `student_name`, `USN`, `06CS51`, `06CS52`, `06CS53`, `06CS54`, `06CS55`, `06CS26`, `06CSL57`, `06CSL58`, `total`, `result`) VALUES
('gech', 'thomas', '4gh08cs052', 125, 43, 92, 99, 96, 100, 47, 67, 669, 'FAIL');

-- --------------------------------------------------------

--
-- Table structure for table `6cs`
--

CREATE TABLE IF NOT EXISTS `6cs` (
  `college_name` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `USN` varchar(50) NOT NULL,
  `06CS61` int(11) DEFAULT NULL,
  `06CS62` int(11) DEFAULT NULL,
  `06CS63` int(11) DEFAULT NULL,
  `06CS64` int(11) DEFAULT NULL,
  `06CS65` int(11) DEFAULT NULL,
  `06CS66` int(11) DEFAULT NULL,
  `06CSL67` int(11) DEFAULT NULL,
  `06CSL68` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6cs`
--

INSERT INTO `6cs` (`college_name`, `student_name`, `USN`, `06CS61`, `06CS62`, `06CS63`, `06CS64`, `06CS65`, `06CS66`, `06CSL67`, `06CSL68`, `total`, `result`) VALUES
('gech', 'thomas', '4gh08cs052', 102, 123, 92, 58, 91, 90, 70, 75, 701, 'PASS');

-- --------------------------------------------------------

--
-- Table structure for table `7cs`
--

CREATE TABLE IF NOT EXISTS `7cs` (
  `college_name` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `USN` varchar(50) NOT NULL,
  `06CS71` int(11) DEFAULT NULL,
  `06CS72` int(11) DEFAULT NULL,
  `06CS73` int(11) DEFAULT NULL,
  `06CS74` int(11) DEFAULT NULL,
  `06CS75` int(11) DEFAULT NULL,
  `06CS76` int(11) DEFAULT NULL,
  `06CSL77` int(11) DEFAULT NULL,
  `06CSL78` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `7cs`
--

INSERT INTO `7cs` (`college_name`, `student_name`, `USN`, `06CS71`, `06CS72`, `06CS73`, `06CS74`, `06CS75`, `06CS76`, `06CSL77`, `06CSL78`, `total`, `result`) VALUES
('gech', 'thomas', '4gh08cs052', 125, 59, 98, 99, 96, 100, 59, 47, 683, 'PASS'),
('gech', 'test2', '4gh09cs007', 60, 79, 100, 85, 69, 65, 69, 47, 574, 'PASS'),
('gech', 'test3', '4gh09cs013', 102, 59, 69, 96, 69, 91, 69, 73, 628, 'PASS');

-- --------------------------------------------------------

--
-- Table structure for table `8cs`
--

CREATE TABLE IF NOT EXISTS `8cs` (
  `college_name` varchar(50) DEFAULT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `USN` varchar(50) NOT NULL,
  `06CS81` int(11) DEFAULT NULL,
  `06CS82` int(11) DEFAULT NULL,
  `06CS83` int(11) DEFAULT NULL,
  `06CS84` int(11) DEFAULT NULL,
  `06CS85` int(11) DEFAULT NULL,
  `06CS86` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8cs`
--

INSERT INTO `8cs` (`college_name`, `student_name`, `USN`, `06CS81`, `06CS82`, `06CS83`, `06CS84`, `06CS85`, `06CS86`, `total`, `result`) VALUES
('gech', 'thomas', '4gh08cs052', 125, 59, 100, 99, 69, 65, 517, 'PASS'),
('gech', 'nidhi', '4gh09cs026', 125, 116, 92, 99, 73, 70, 575, 'PASS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
