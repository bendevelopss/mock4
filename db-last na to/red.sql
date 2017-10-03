-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 06:38 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `red`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `activities_id` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `pay_item_id` varchar(20) NOT NULL,
  `station` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`activities_id`),
  KEY `activities` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`no`, `activities_id`, `description`, `pay_item_id`, `station`, `qty`, `date`, `status`) VALUES
(0001, 'ACT0001', 'Subgrade Preparation', 'PI0001', '0+036 7-0+150.4', '113.7', '2017-10-11', 'ACTIVE'),
(0002, 'ACT0002', 'Formworks Installation', '', '', '', '2017-10-18', ''),
(0003, 'ACT0003', 'Trifle Barrel', 'PI0006', 'Sidings', '5', '2017-10-12', 'ACTIVE'),
(0004, 'ACT0004', 'Waterworks', '', NULL, '4', '2017-10-27', 'ACTIVE'),
(0005, 'ACT0005', 'WATERWORKS', 'PI0006', NULL, '10', '2017-10-11', 'ACTIVE'),
(0006, 'ACT0006', 'Site Clearing', 'PI0008', NULL, '8', '2017-10-13', 'ACTIVE'),
(0007, 'ACT0007', 'Removal of Trees', 'PI0012', NULL, '7', '2017-10-14', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE IF NOT EXISTS `audit` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '0',
  `type` enum('INSERT','UPDATE','DELETE') DEFAULT NULL,
  `description` varchar(255) DEFAULT '0',
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`no`),
  KEY `FK_audit_user` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `category_id` varchar(50) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `no` (`no`),
  KEY `category_name` (`category_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`no`, `category_id`, `category_name`, `description`, `status`) VALUES
(0000, '0000', '0000', '0000', 'INACTIVE'),
(0006, 'CT0005', 'skilled', 'labor', 'ACTIVE'),
(0007, 'CT0006', 'unskilled', 'labor', 'ACTIVE'),
(0008, 'CT0007', 'foreman', 'labor', 'ACTIVE'),
(0017, 'CT0008', 'Heavy Equipment', 'equipment', 'ACTIVE'),
(0018, 'CT0017', 'Trucks', 'equipment', 'ACTIVE'),
(0019, 'CT0018', 'Cement', 'material', 'ACTIVE'),
(0020, 'CT0019', 'Wood', 'material', 'ACTIVE'),
(0021, 'CT0020', 'Plastic', 'material', 'ACTIVE'),
(0022, 'CT0021', 'Steel', 'material', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `client_id` varchar(20) NOT NULL,
  `client_person` varchar(255) NOT NULL,
  `client_contact` varchar(20) NOT NULL,
  `client_company` varchar(100) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_personno` varchar(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`client_id`),
  KEY `no` (`no`),
  KEY `client_name` (`client_person`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`no`, `client_id`, `client_person`, `client_contact`, `client_company`, `client_address`, `client_email`, `client_personno`, `status`) VALUES
(0000, '0000', '0000', '0000', '', '0000', '0000', '', 'INACTIVE'),
(0001, 'CLI-0000', 'Eunice Beltran', '123-123', 'EB Music Studio', 'San Juan City', 'eunicesausbeltran@yahoo.com', '09157161253', 'ACTIVE'),
(0002, 'CLI-0001', 'Jaja Pabatao', '123-2132133-12', 'Jaja''s Cupcake', 'Pineda, Pasig City', 'jaja123@yahoo.com', '09179898322', 'ACTIVE'),
(0015, 'CLI-0002', 'Bernie Remollo', '123-123', 'DPWH Region IV-B', 'MIMAROPA', 'bernie@dpwh.gov', '123-123', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `completion`
--

CREATE TABLE IF NOT EXISTS `completion` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `completion_id` varchar(100) NOT NULL,
  `contract_id` varchar(100) NOT NULL,
  `team_id` varchar(100) NOT NULL,
  `monthlyacco_id` varchar(100) NOT NULL,
  `issues` varchar(300) NOT NULL,
  `lessons` varchar(1000) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  `prepared_by` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `reviewed_by` varchar(100) NOT NULL,
  `date2` date NOT NULL,
  PRIMARY KEY (`completion_id`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE IF NOT EXISTS `consultant` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `consult_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) DEFAULT NULL,
  `consult_name` varchar(255) NOT NULL,
  `consult_company` varchar(255) NOT NULL,
  `consult_contact` char(11) NOT NULL,
  `consult_address` varchar(100) NOT NULL,
  `consult_email` varchar(100) NOT NULL,
  `scope_id` varchar(20) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`consult_id`),
  UNIQUE KEY `no_2` (`no`),
  KEY `scope_id` (`scope_id`),
  KEY `consult_name` (`consult_name`),
  KEY `FK_consultant_project` (`proj_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`no`, `consult_id`, `proj_id`, `consult_name`, `consult_company`, `consult_contact`, `consult_address`, `consult_email`, `scope_id`, `status`) VALUES
(1, '0000', '0000', '0000', '0000', '0000', '0000', '0000', '0000', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE IF NOT EXISTS `contract` (
  `no` int(4) NOT NULL AUTO_INCREMENT,
  `contract_id` varchar(20) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `contract_name` varchar(255) NOT NULL,
  `contract_refnum` varchar(50) NOT NULL,
  `contract_days` int(11) NOT NULL,
  `contract_start` date NOT NULL,
  `contract_period` date NOT NULL,
  `contract_amt` decimal(30,2) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`contract_id`),
  UNIQUE KEY `no_2` (`no`),
  KEY `user_id` (`emp_id`),
  KEY `client_id` (`client_id`),
  KEY `contract_name` (`contract_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`no`, `contract_id`, `emp_id`, `client_id`, `contract_name`, `contract_refnum`, `contract_days`, `contract_start`, `contract_period`, `contract_amt`, `status`) VALUES
(0, '0000', '0000', '0000', '0000', '0000', 0, '2017-09-13', '2017-09-04', '1000000.00', 'INACTIVE'),
(59, '16E00021', 'emp-0001', 'CLI-0002', 'Construction/Improvement of Access Road leading to Mt. Iglit-Baco National Park Sta. 0 000 - Sta. 5 180.00', '123-123', 210, '2017-09-22', '0000-00-00', '46808229.31', 'ACTIVE'),
(60, 'lalakokaorit', 'emp-0001', 'CLI-0000', 'nex', 'nex', 1000, '2017-12-31', '0000-00-00', '1000.00', 'ACTIVE'),
(63, 'qwertyu', 'emp-0001', 'CLI-0001', 'wertyu', 'werty', 234567, '0000-00-00', '0000-00-00', '23456.00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailyacco`
--

CREATE TABLE IF NOT EXISTS `dailyacco` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `dailyacco_id` varchar(20) NOT NULL,
  `contract_id` varchar(100) NOT NULL,
  `reports_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `day` enum('MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY','SUNDAY') NOT NULL,
  `weather_am` varchar(50) NOT NULL,
  `weather_pm` varchar(50) NOT NULL,
  `meeting_conducted` enum('YES','NO') NOT NULL,
  `dlabor_id` varchar(50) NOT NULL,
  `dmat_id` varchar(50) NOT NULL,
  `deqpt_id` varchar(50) NOT NULL,
  `received_id` varchar(100) NOT NULL,
  `problems` varchar(3000) DEFAULT NULL,
  `visitors` varchar(1000) DEFAULT NULL,
  `prepared_by` varchar(100) NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`dailyacco_id`),
  KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dailyacco`
--

INSERT INTO `dailyacco` (`no`, `dailyacco_id`, `contract_id`, `reports_id`, `date`, `day`, `weather_am`, `weather_pm`, `meeting_conducted`, `dlabor_id`, `dmat_id`, `deqpt_id`, `received_id`, `problems`, `visitors`, `prepared_by`, `approved_by`, `status`) VALUES
(0002, 'DR0001', 'PR0001', '', '2017-10-06', 'THURSDAY', 'FAIR', 'FAIR', 'NO', '0001', '0001', '0002', '0002', NULL, NULL, 'USER-0001', 'USER-0002', 'ACTIVE'),
(0003, 'DR0002', '16E00021', '', '2017-10-03', '', 'FAIR', 'CLOUDY', 'NO', '0001', '0001', '0001', '', '', '', '', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailyeqpt`
--

CREATE TABLE IF NOT EXISTS `dailyeqpt` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `deqpt_id` varchar(50) NOT NULL,
  `eqpt_name` varchar(300) NOT NULL,
  `utilization` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`deqpt_id`),
  KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dailyeqpt`
--

INSERT INTO `dailyeqpt` (`no`, `deqpt_id`, `eqpt_name`, `utilization`, `date`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000-00-00', 'ACTIVE'),
(0002, '0002', 'EQ0001', 'EQ0002', '0000-00-00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailylabor`
--

CREATE TABLE IF NOT EXISTS `dailylabor` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `dlabor_id` varchar(50) NOT NULL,
  `mason` int(11) NOT NULL,
  `foreman` int(11) NOT NULL,
  `timekeeper` int(11) NOT NULL,
  `driver` int(11) NOT NULL,
  `operator` int(11) NOT NULL,
  `labor` int(11) NOT NULL,
  `guard` int(11) NOT NULL,
  `subcon` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`dlabor_id`),
  KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `dailylabor`
--

INSERT INTO `dailylabor` (`no`, `dlabor_id`, `mason`, `foreman`, `timekeeper`, `driver`, `operator`, `labor`, `guard`, `subcon`, `date`, `status`) VALUES
(0001, '0000', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 'ACTIVE'),
(0003, '0001', 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailymat`
--

CREATE TABLE IF NOT EXISTS `dailymat` (
  `no` int(4) unsigned zerofill NOT NULL,
  `dmat_id` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `type` enum('MATERIAL','LUBRICANT','FUEL') NOT NULL,
  `date` date NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`dmat_id`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `docu_id` varchar(20) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `docu_name` varchar(100) NOT NULL,
  `docu_description` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`docu_id`),
  KEY `no` (`no`),
  KEY `category_id` (`category_id`),
  KEY `docu_name` (`docu_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`no`, `docu_id`, `category_id`, `docu_name`, `docu_description`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `no` (`no`),
  KEY `engr_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`no`, `emp_id`, `name`, `position`, `address`, `contact`, `email`, `status`) VALUES
(0001, 'emp-0001', 'Eunice Saus Beltran', 'Engineer', 'San Juan City', 'dapat numbe', 'eunicesausbeltran@yahoo.com', 'ACTIVE'),
(0002, 'emp-0002', 'Bernie Zabala Remollo', '', 'san juan', 'my no', 'b.z@r.com', 'ACTIVE'),
(0003, 'PCI-2014-0', 'Carmina  Escobinas', '', 'San Juan City', '09751546213', 'carms@yahoo.com', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `eqptdep`
--

CREATE TABLE IF NOT EXISTS `eqptdep` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `eqptdep_id` varchar(50) NOT NULL,
  `contract_id` varchar(50) NOT NULL,
  `eqpt_id` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`eqptdep_id`),
  KEY `no` (`no`),
  KEY `FK_eqptdep_equipment` (`eqpt_id`),
  KEY `FK_eqptdep_project` (`contract_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `eqptreq`
--

CREATE TABLE IF NOT EXISTS `eqptreq` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `eqptreq_id` varchar(20) NOT NULL,
  `eqpt_id` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `duration` date NOT NULL,
  `w1` int(11) NOT NULL,
  `w2` int(11) NOT NULL,
  `w3` int(11) NOT NULL,
  `w4` int(11) NOT NULL,
  `w5` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`eqptreq_id`),
  KEY `no` (`no`),
  KEY `eqptreq_ibfk_1` (`eqpt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eqptreq`
--

INSERT INTO `eqptreq` (`no`, `eqptreq_id`, `eqpt_id`, `qty`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5`, `status`) VALUES
(0001, '0000', '0000', 0, '2017-09-13', 0, 0, 0, 0, 0, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `eqpt_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `subcat_id` varchar(50) NOT NULL,
  `eqpt_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`eqpt_id`),
  UNIQUE KEY `no` (`no`),
  KEY `subcat_id` (`subcat_id`),
  KEY `equipment_ibfk-1` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`no`, `eqpt_id`, `category_id`, `subcat_id`, `eqpt_name`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', 'inactive'),
(0005, 'EQ0001', 'CT0017', 'SB0003', 'Cargo Truck with Crane', 'active'),
(0006, 'EQ0005', 'CT0017', 'SB0003', 'Cargo Truck with Boom', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `laborreq`
--

CREATE TABLE IF NOT EXISTS `laborreq` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `laborreq_id` varchar(20) NOT NULL,
  `labor_id` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `duration` date NOT NULL,
  `w1` int(11) NOT NULL,
  `w2` int(11) NOT NULL,
  `w3` int(11) NOT NULL,
  `w4` int(11) NOT NULL,
  `w5` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`laborreq_id`),
  KEY `no` (`no`),
  KEY `laborreq_ibfk_1` (`labor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `laborreq`
--

INSERT INTO `laborreq` (`no`, `laborreq_id`, `labor_id`, `qty`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5`, `status`) VALUES
(0001, '0000', '0000', 0, '2017-09-28', 0, 0, 0, 0, 0, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `material_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`material_id`),
  UNIQUE KEY `no` (`no`),
  KEY `category_id` (`category_id`),
  KEY `material_name` (`material_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`no`, `material_id`, `category_id`, `material_name`, `qty`, `status`) VALUES
(0001, '0000', '0000', '0000', 0, 'inactive'),
(0002, 'MT0001', 'CT0018', 'Posoland', 0, 'active'),
(0003, 'MT0002', 'CT0021', 'Iron Rod', 0, 'active'),
(0007, 'MT0003', 'CT0018', 'Portland', 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `matreq`
--

CREATE TABLE IF NOT EXISTS `matreq` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `matreq_id` varchar(20) NOT NULL,
  `material_id` varchar(100) NOT NULL,
  `mat_balance` int(11) NOT NULL,
  `mat_projected` int(11) NOT NULL,
  `work_desc` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `w1` int(11) NOT NULL,
  `w2` int(11) NOT NULL,
  `w3` int(11) NOT NULL,
  `w4` int(11) NOT NULL,
  `w5` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`matreq_id`),
  KEY `no` (`no`),
  KEY `matreq_ibfk_1` (`material_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `matreq`
--

INSERT INTO `matreq` (`no`, `matreq_id`, `material_id`, `mat_balance`, `mat_projected`, `work_desc`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5`, `status`) VALUES
(0001, '0000', '0000', 0, 0, '0000', 0, 0, 0, 0, 0, 0, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `monthlyacco`
--

CREATE TABLE IF NOT EXISTS `monthlyacco` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `monthlyacco_id` varchar(20) NOT NULL,
  `prepared_by` varchar(100) NOT NULL,
  `noted_by` varchar(100) NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `contract_id` varchar(100) NOT NULL,
  `acco_cutoff` date NOT NULL,
  `start_date` date NOT NULL,
  `target_date` date NOT NULL,
  `proj_cost` decimal(30,2) NOT NULL,
  `cost_change` decimal(30,2) NOT NULL,
  `cost_variance` enum('ADDITION','DEDUCTION') NOT NULL,
  `total_proj_cost` decimal(30,2) NOT NULL,
  `exp_projected` decimal(30,2) NOT NULL,
  `exp_actual` decimal(30,2) NOT NULL,
  `exp_variance` enum('ADDITION','DEDUCTION') NOT NULL,
  `variance` decimal(30,2) NOT NULL,
  `schedule` decimal(30,2) NOT NULL,
  `percent_actual` decimal(30,2) NOT NULL,
  `percent_variance` decimal(30,2) NOT NULL,
  `ahead_or_delay` enum('AHEAD','DELAY') NOT NULL,
  `days` int(11) NOT NULL,
  `completed_days` int(11) NOT NULL,
  `remaining_days` int(11) NOT NULL,
  `time_extension` int(11) NOT NULL,
  `activities_id` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `workacco_id` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`monthlyacco_id`),
  KEY `no` (`no`),
  KEY `FK_monthlyacco_project_3` (`target_date`),
  KEY `FK_monthlyacco_employee` (`prepared_by`),
  KEY `FK_monthlyacco_employee_2` (`noted_by`),
  KEY `FK_monthlyacco_client` (`client_id`),
  KEY `FK_monthlyacco_contract` (`contract_id`),
  KEY `FK_monthlyacco_activities` (`activities_id`),
  KEY `FK_monthlyacco_workacco` (`workacco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `monthlyacco`
--

INSERT INTO `monthlyacco` (`no`, `monthlyacco_id`, `prepared_by`, `noted_by`, `client_id`, `contract_id`, `acco_cutoff`, `start_date`, `target_date`, `proj_cost`, `cost_change`, `cost_variance`, `total_proj_cost`, `exp_projected`, `exp_actual`, `exp_variance`, `variance`, `schedule`, `percent_actual`, `percent_variance`, `ahead_or_delay`, `days`, `completed_days`, `remaining_days`, `time_extension`, `activities_id`, `remarks`, `workacco_id`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', '0000', '2017-09-07', '2017-09-07', '2017-09-14', '0.00', '0.00', 'ADDITION', '0.00', '0.00', '0.00', 'DEDUCTION', '0.00', '0.00', '0.00', '0.00', 'DELAY', 0, 0, 0, 0, '0000', '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `monthlysched`
--

CREATE TABLE IF NOT EXISTS `monthlysched` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `monthlysched_id` varchar(20) NOT NULL,
  `contract_id` varchar(100) NOT NULL,
  `month` enum('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER') NOT NULL,
  `cumulative_month` enum('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER') NOT NULL,
  `laborreq_id` varchar(20) NOT NULL,
  `matreq_id` varchar(20) NOT NULL,
  `eqptreq_id` varchar(20) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `prepared_by` varchar(100) NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`monthlysched_id`),
  KEY `no` (`no`),
  KEY `proj_id` (`contract_id`),
  KEY `laborreq_id` (`laborreq_id`),
  KEY `matreq_id` (`matreq_id`),
  KEY `eqptreq_id` (`eqptreq_id`),
  KEY `FK_monthlysched_engineer` (`approved_by`),
  KEY `monthlysched_ibfk_2` (`prepared_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `monthlysched`
--

INSERT INTO `monthlysched` (`no`, `monthlysched_id`, `contract_id`, `month`, `cumulative_month`, `laborreq_id`, `matreq_id`, `eqptreq_id`, `remarks`, `prepared_by`, `approved_by`, `status`) VALUES
(0001, '0000', '0000', 'JANUARY', 'JANUARY', '0000', '0000', '0000', '0000', '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE IF NOT EXISTS `part` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `part_id` varchar(50) NOT NULL,
  `part_code` varchar(50) NOT NULL,
  `part_desc` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`part_id`),
  KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `part`
--

INSERT INTO `part` (`no`, `part_id`, `part_code`, `part_desc`, `status`) VALUES
(0001, '0000', '', '0000', 'INACTIVE'),
(0004, 'PT0001', 'A', 'Facilities for the Engineer', 'ACTIVE'),
(0005, 'PT0004', 'B', 'Other General Requirements', 'ACTIVE'),
(0006, 'PT0005', 'C', 'Earthworks', 'ACTIVE'),
(0007, 'PT0006', 'D', 'Subbase and Base Course', 'ACTIVE'),
(0008, 'PT0007', 'E', 'Surface Course', 'ACTIVE'),
(0009, 'PT0008', 'F', 'Bridge Structure(Lined Canal)', 'ACTIVE'),
(0010, 'PT0009', 'G', 'Drainage & Scope Protection Structure', 'ACTIVE'),
(0011, 'PT0010', 'H', 'Miscellaneous Structure', 'ACTIVE'),
(0012, 'PT0011', 'I', 'Mobilization & Demobilization', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `part-trans`
--

CREATE TABLE IF NOT EXISTS `part-trans` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `part-trans_id` varchar(50) NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `percent` decimal(10,2) NOT NULL,
  `progress` decimal(10,2) NOT NULL,
  UNIQUE KEY `no` (`no`),
  KEY `contract_id` (`contract_id`),
  KEY `part_id` (`part-trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `part-trans`
--

INSERT INTO `part-trans` (`no`, `part-trans_id`, `contract_id`, `percent`, `progress`) VALUES
(0001, 'PT0001', 'contract beta', '10.00', '0.00'),
(0003, 'PT0002', 'no_space', '10.00', '0.00'),
(0004, 'PT0001', '16E00021', '7.33', '0.00'),
(0005, 'PT0004', '16E00021', '0.61', '0.00'),
(0010, 'PT0010', '16E00021', '12.00', '0.00'),
(0011, 'PT0005', '16E00021', '11.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `pay_item`
--

CREATE TABLE IF NOT EXISTS `pay_item` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `contract_id` varchar(20) NOT NULL,
  `part-trans_id` varchar(50) NOT NULL,
  `pay_item_id` varchar(50) NOT NULL,
  `pay_item_code` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `percent` decimal(10,2) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `unit_cost` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`pay_item_id`),
  KEY `no` (`no`),
  KEY `FK_pay_item_part` (`part-trans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pay_item`
--

INSERT INTO `pay_item` (`no`, `contract_id`, `part-trans_id`, `pay_item_id`, `pay_item_code`, `description`, `percent`, `qty`, `unit_cost`, `amount`, `unit`, `status`) VALUES
(0001, '16E00021', '0000', '0000', '0000', '0000', '0.00', '0.00', '0.00', '0.00', '', 'inactive'),
(0006, '16E00021', 'PT0001', 'PI0001', 'A.1', 'Engineer''s Facilities and Others', '20.00', '200.00', '0.00', '0.00', '', 'active'),
(0007, '16E00021', 'PT0001', 'PI0006', 'A.2', 'Vehicles for the Engineer', '20.00', '20.00', '0.00', '0.00', '', 'active'),
(0008, '16E00021', 'PT0004', 'PI0007', 'B-1', 'General Requirements', '20.00', '0.00', '0.00', '0.00', '', 'active'),
(0009, '16E00021', 'PT0005', 'PI0008', '103-3', 'Foundation Fill', '20.00', '9.00', '0.00', '0.00', '', 'active'),
(0013, '16E00021', 'PT0010', 'PI0012', '1', 'Waterworks', '20.00', '10.00', '0.00', '0.00', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE IF NOT EXISTS `progress` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `prog_id` varchar(20) NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `expected` varchar(100) NOT NULL,
  `current` varchar(100) NOT NULL,
  UNIQUE KEY `no` (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`no`, `prog_id`, `contract_id`, `expected`, `current`) VALUES
(0001, 'pg-0000', '16E00021', '0-10-20-30-40-50-100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `proj_id` varchar(20) NOT NULL,
  `contract_id` varchar(100) NOT NULL,
  `proj_name` varchar(255) NOT NULL,
  `proj_code` varchar(255) NOT NULL,
  `proj_location` varchar(255) NOT NULL,
  `award_date` date NOT NULL,
  `ntp_date` date NOT NULL,
  `start_date` date DEFAULT NULL,
  `target_date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`proj_id`),
  KEY `no` (`no`),
  KEY `contract_id` (`contract_id`),
  KEY `proj_name` (`proj_name`),
  KEY `proj_location` (`proj_location`),
  KEY `proj_code` (`proj_code`),
  KEY `target_date` (`target_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`no`, `proj_id`, `contract_id`, `proj_name`, `proj_code`, `proj_location`, `award_date`, `ntp_date`, `start_date`, `target_date`, `status`) VALUES
(0001, 'PJ0000', '0000', 'undefined', 'undefined', 'undefined', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'INACTIVE'),
(0012, 'PJ0001', '16E00021', 'Construction/Improvement of Access Road leading to Mt. Iglit-Baco National Park Sta. 0 000 - Sta. 5 180.00', 'Road-Iglit-Baco', 'Calintaan, Occidental Mindoro', '2017-09-14', '2017-09-21', '0000-00-00', '2017-12-31', 'ACTIVE'),
(0013, 'PJ0012', 'lalakokaorit', 'nex', 'nez', 'nez', '0000-00-00', '2017-12-31', '0000-00-00', '2017-12-31', 'ACTIVE'),
(0016, 'PJ0013', 'qwertyu', 'wertyu', '3456734567', '3456', '0056-03-04', '0567-03-04', '0000-00-00', '0567-03-04', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `proj_team`
--

CREATE TABLE IF NOT EXISTS `proj_team` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `team_id` varchar(100) NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `opt_mgr` varchar(255) NOT NULL,
  `field_engr` varchar(255) NOT NULL,
  `mtrls_engr` varchar(255) NOT NULL,
  `foreman` varchar(255) NOT NULL,
  `wrh_incharge` varchar(255) NOT NULL,
  `eqpt_incharge` varchar(255) NOT NULL,
  `safety_officer` varchar(255) NOT NULL,
  `timekeeper` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE','','') NOT NULL,
  UNIQUE KEY `no` (`no`),
  KEY `proj_id` (`contract_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `proj_team`
--

INSERT INTO `proj_team` (`no`, `team_id`, `contract_id`, `opt_mgr`, `field_engr`, `mtrls_engr`, `foreman`, `wrh_incharge`, `eqpt_incharge`, `safety_officer`, `timekeeper`, `status`) VALUES
(0003, '0000', '0000', '0000', '0000', '000', '0000', '0000', '0000', '0000', '0000', 'INACTIVE'),
(0006, 'TM0003', '16E00021', 'emp-0001', 'emp-0002', 'PCI-2014-0', 'emp-0001', 'emp-0002', 'PCI-2014-0', 'PCI-2014-0', 'emp-0002', 'ACTIVE'),
(0007, 'TM0006', 'lalakokaorit', 'emp-0002', 'emp-0001', 'emp-0001', 'PCI-2014-0', 'PCI-2014-0', 'emp-0002', 'emp-0002', 'PCI-2014-0', 'ACTIVE'),
(0008, 'TM0007', 'qwertyu', 'PCI-2014-0', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'ACTIVE'),
(0009, 'TM0008', 'undefined', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'emp-0001', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `received`
--

CREATE TABLE IF NOT EXISTS `received` (
  `no` int(4) unsigned zerofill NOT NULL,
  `received_id` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` enum('MATERIAL','EQUIPMENT','DOCUMENT') NOT NULL,
  `qty` int(10) NOT NULL,
  `date` date NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`received_id`),
  KEY `no` (`no`),
  KEY `receivedeqpt_id` (`type`),
  KEY `receiveddocu_id` (`description`),
  KEY `receivedmat_id` (`qty`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `received`
--

INSERT INTO `received` (`no`, `received_id`, `description`, `type`, `qty`, `date`, `status`) VALUES
(0000, '0000', '0000', 'EQUIPMENT', 0, '2017-10-01', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `no` int(4) unsigned zerofill NOT NULL,
  `reports_id` varchar(30) NOT NULL,
  `contract_id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `assigned_to` varchar(30) NOT NULL COMMENT 'user_id',
  `submitted_to` varchar(30) NOT NULL,
  `frequency` enum('DAILY','WEEKLY','MONTHLY') NOT NULL,
  `submission` date NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`reports_id`),
  KEY `no` (`no`),
  KEY `a_t_key` (`assigned_to`),
  KEY `s_t_key` (`submitted_to`),
  KEY `FK_reports_project` (`contract_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`no`, `reports_id`, `contract_id`, `name`, `assigned_to`, `submitted_to`, `frequency`, `submission`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', '0000', 'DAILY', '0000-00-00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `scope`
--

CREATE TABLE IF NOT EXISTS `scope` (
  `no` int(4) unsigned zerofill NOT NULL,
  `scope_id` varchar(20) NOT NULL,
  `scope_name` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`scope_id`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scope`
--

INSERT INTO `scope` (`no`, `scope_id`, `scope_name`, `status`) VALUES
(0001, '0000', '0000', 'INACTIVE'),
(0000, 'SC0001', 'Electrical Works', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
  `no` int(4) unsigned zerofill NOT NULL,
  `subcat_id` varchar(20) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `description` enum('EQUIPMENT','LABOR','MATERIAL') NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`subcat_id`),
  UNIQUE KEY `no` (`no`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`no`, `subcat_id`, `category_id`, `subcat_name`, `description`, `status`) VALUES
(0001, '0000', '0000', '0000', '', 'INACTIVE'),
(0002, 'SB0001', 'CT0008', 'Excavator', 'EQUIPMENT', 'ACTIVE'),
(0003, 'SB0002', 'CT0017', 'Water Truck', 'EQUIPMENT', 'ACTIVE'),
(0006, 'SB0003', 'CT0017', 'Cargo Truck', 'EQUIPMENT', 'ACTIVE'),
(0000, 'SB0006', '', '', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `subcontractor`
--

CREATE TABLE IF NOT EXISTS `subcontractor` (
  `no` int(4) unsigned zerofill NOT NULL,
  `subcon_id` varchar(20) NOT NULL,
  `subcon_comp_name` varchar(255) NOT NULL,
  `subcon_comp_contact` varchar(20) NOT NULL,
  `subcon_person` varchar(255) NOT NULL,
  `subcon_personno` varchar(20) NOT NULL,
  `scope_id` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`subcon_id`),
  KEY `no` (`no`),
  KEY `scope_id` (`scope_id`),
  KEY `subcon_name` (`subcon_comp_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcontractor`
--

INSERT INTO `subcontractor` (`no`, `subcon_id`, `subcon_comp_name`, `subcon_comp_contact`, `subcon_person`, `subcon_personno`, `scope_id`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', '0000', '0000', 'INACTIVE'),
(0000, 'SB0001', 'CJ Electrical Services', '321-321', 'CJ Sarabia', '123-213', 'SC0001', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `subcon_trans`
--

CREATE TABLE IF NOT EXISTS `subcon_trans` (
  `no` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `contract_id` varchar(100) NOT NULL,
  `amt` decimal(10,2) NOT NULL,
  `duration` date NOT NULL,
  `no_personnel` int(11) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `billing` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `no` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_type` enum('ADMIN','TOP MANAGER','SAFETY OFFICER','PROJECT MANAGER','PROJECT ENGINEER') NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `no` (`no`),
  KEY `user_name` (`user_name`),
  KEY `user_ibfk_1` (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `user_id`, `emp_id`, `user_name`, `user_pass`, `user_type`, `status`) VALUES
(1, 'user-0001', 'emp-0001', 'belts', '21232f297a57a5a743894a0e4a801fc3', 'PROJECT ENGINEER', 'ACTIVE'),
(2, 'user-0002', 'emp-0002', 'lalakokaori', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `workacco`
--

CREATE TABLE IF NOT EXISTS `workacco` (
  `no` int(4) unsigned zerofill NOT NULL,
  `workacco_id` varchar(20) NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `item_no` int(10) NOT NULL,
  `work_desc` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `total_unit` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `unit_cost` decimal(30,2) NOT NULL,
  `total_unitcost` decimal(30,2) NOT NULL,
  `amt` decimal(30,2) NOT NULL,
  `total_amt` decimal(30,2) NOT NULL,
  `weight` decimal(30,2) NOT NULL,
  `total_weight` decimal(30,2) NOT NULL,
  `accoprev` int(11) NOT NULL,
  `total_accoprev` int(11) NOT NULL,
  `accothis` int(11) NOT NULL,
  `total_accothis` int(11) NOT NULL,
  `accotodate` int(11) NOT NULL,
  `total_accotodate` int(11) NOT NULL,
  `amtprev` decimal(30,2) NOT NULL,
  `total_amtprev` decimal(30,2) NOT NULL,
  `amtthis` decimal(30,2) NOT NULL,
  `total_amtthis` decimal(30,2) NOT NULL,
  `amttodate` decimal(30,2) NOT NULL,
  `total_amttodate` decimal(30,2) NOT NULL,
  `weightacco` decimal(30,2) NOT NULL,
  `total_weightacco` decimal(30,2) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL,
  PRIMARY KEY (`workacco_id`),
  KEY `no` (`no`),
  KEY `workacco_ibfk_1` (`contract_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workacco`
--

INSERT INTO `workacco` (`no`, `workacco_id`, `contract_id`, `item_no`, `work_desc`, `unit`, `total_unit`, `qty`, `total_qty`, `unit_cost`, `total_unitcost`, `amt`, `total_amt`, `weight`, `total_weight`, `accoprev`, `total_accoprev`, `accothis`, `total_accothis`, `accotodate`, `total_accotodate`, `amtprev`, `total_amtprev`, `amtthis`, `total_amtthis`, `amttodate`, `total_amttodate`, `weightacco`, `total_weightacco`, `status`) VALUES
(0000, '0000', '0000', 0, '0000', 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'ACTIVE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
