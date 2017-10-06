-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 09:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mock3-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE `actions` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `actions_id` varchar(50) NOT NULL,
  `prob_id` varchar(50) DEFAULT NULL,
  `actions_taken` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `activities_id` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `station` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`no`, `activities_id`, `description`, `station`, `qty`, `status`) VALUES
(0001, 'ACT0001', 'Subgrade Preparation', '0+036 7-0+150.4', '113.7m', 'ACTIVE'),
(0002, 'ACT0002', 'Formworks Installation', '', '', ''),
(0003, 'ACT0003', 'Trifle Barrel', 'Sidings', '5m', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `attendees`
--

CREATE TABLE `attendees` (
  `no` int(4) NOT NULL,
  `attendees_id` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `no` int(11) NOT NULL,
  `name` varchar(100) DEFAULT '0',
  `type` enum('INSERT','UPDATE','DELETE') DEFAULT NULL,
  `description` varchar(255) DEFAULT '0',
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `client` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `client_person` varchar(255) NOT NULL,
  `client_contact` varchar(20) NOT NULL,
  `client_company` varchar(100) NOT NULL,
  `client_address` varchar(255) NOT NULL,
  `client_email` varchar(50) NOT NULL,
  `client_personno` varchar(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`no`, `client_id`, `client_person`, `client_contact`, `client_company`, `client_address`, `client_email`, `client_personno`, `status`) VALUES
(0000, '0000', '0000', '0000', '', '0000', '0000', '', 'INACTIVE'),
(0001, 'CLI-0000', 'Eunice Beltran', '123-123', 'EB Music Studio', 'San Juan City', 'eunicesausbeltran@yahoo.com', '09157161253', 'ACTIVE'),
(0002, 'CLI-0001', 'Jaja Pabatao', '123-2132133-12', 'Jaja\'s Cupcake', 'Pineda, Pasig City', 'jaja123@yahoo.com', '09179898322', 'ACTIVE'),
(0015, 'CLI-0002', 'Bernie Remollo', '123-123', 'DPWH Region IV-B', 'MIMAROPA', 'bernie@dpwh.gov', '123-123', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `no` int(4) NOT NULL,
  `consult_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) DEFAULT NULL,
  `consult_name` varchar(255) NOT NULL,
  `consult_company` varchar(255) NOT NULL,
  `consult_contact` char(11) NOT NULL,
  `consult_address` varchar(100) NOT NULL,
  `consult_email` varchar(100) NOT NULL,
  `scope_id` varchar(20) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultant`
--

INSERT INTO `consultant` (`no`, `consult_id`, `proj_id`, `consult_name`, `consult_company`, `consult_contact`, `consult_address`, `consult_email`, `scope_id`, `status`) VALUES
(1, '0000', '0000', '0000', '0000', '0000', '0000', '0000', '0000', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `no` int(4) NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `client_id` varchar(20) NOT NULL,
  `contract_name` varchar(255) NOT NULL,
  `contract_refnum` varchar(50) NOT NULL,
  `contract_days` int(11) NOT NULL,
  `contract_start` date NOT NULL,
  `contract_period` date NOT NULL,
  `contract_amt` decimal(30,2) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `dailyacco` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `dailyacco_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `day` enum('MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY','SUNDAY') NOT NULL,
  `dact_id` varchar(100) NOT NULL,
  `weather_am` varchar(50) NOT NULL,
  `weather_pm` varchar(50) NOT NULL,
  `meeting_conducted` enum('YES','NO') NOT NULL,
  `dlabor_id` varchar(50) NOT NULL,
  `dmat_id` varchar(50) NOT NULL,
  `deqpt_id` varchar(50) NOT NULL,
  `received_id` varchar(100) NOT NULL,
  `prob_id` varchar(100) DEFAULT NULL,
  `visitors_id` varchar(100) DEFAULT NULL,
  `prepared_by` varchar(100) NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyacco`
--

INSERT INTO `dailyacco` (`no`, `dailyacco_id`, `proj_id`, `date`, `day`, `dact_id`, `weather_am`, `weather_pm`, `meeting_conducted`, `dlabor_id`, `dmat_id`, `deqpt_id`, `received_id`, `prob_id`, `visitors_id`, `prepared_by`, `approved_by`, `status`) VALUES
(0002, 'DR0001', 'PR0001', '2017-10-06', 'THURSDAY', '0000', 'FAIR', 'FAIR', 'NO', '0001', '0001', '0002', '0002', NULL, NULL, 'USER-0001', 'USER-0002', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailyact`
--

CREATE TABLE `dailyact` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `dact_id` varchar(50) NOT NULL,
  `act1` varchar(100) DEFAULT NULL,
  `act2` varchar(100) DEFAULT NULL,
  `act3` varchar(100) DEFAULT NULL,
  `act4` varchar(100) DEFAULT NULL,
  `act5` varchar(100) DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyact`
--

INSERT INTO `dailyact` (`no`, `dact_id`, `act1`, `act2`, `act3`, `act4`, `act5`, `status`) VALUES
(0001, '0000', '0001', '0002', '0003', NULL, NULL, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailyeqpt`
--

CREATE TABLE `dailyeqpt` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `deqpt_id` varchar(50) NOT NULL,
  `eqpt1` varchar(50) NOT NULL,
  `eqpt2` varchar(255) NOT NULL,
  `eqpt3` varchar(255) NOT NULL,
  `eqpt4` varchar(255) NOT NULL,
  `eqpt5` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailyeqpt`
--

INSERT INTO `dailyeqpt` (`no`, `deqpt_id`, `eqpt1`, `eqpt2`, `eqpt3`, `eqpt4`, `eqpt5`, `status`) VALUES
(0001, '0000', '0000', '0000', '', '', '', 'ACTIVE'),
(0002, '0002', 'EQ0001', 'EQ0002', '', '', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailylabor`
--

CREATE TABLE `dailylabor` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `dlabor_id` varchar(50) NOT NULL,
  `labor1` varchar(50) NOT NULL,
  `labor2` varchar(255) NOT NULL,
  `labor3` varchar(100) NOT NULL,
  `labor4` varchar(100) NOT NULL,
  `labor5` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailylabor`
--

INSERT INTO `dailylabor` (`no`, `dlabor_id`, `labor1`, `labor2`, `labor3`, `labor4`, `labor5`, `status`) VALUES
(0001, '0000', '0000', '', '', '', '', 'ACTIVE'),
(0003, '0001', 'LB0001', 'LB0002', '', '', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailymat`
--

CREATE TABLE `dailymat` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `dmat_id` varchar(50) NOT NULL,
  `mat1` varchar(50) NOT NULL,
  `mat2` varchar(100) NOT NULL,
  `mat3` varchar(100) NOT NULL,
  `mat4` varchar(100) NOT NULL,
  `mat5` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `docu_id` varchar(20) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `docu_name` varchar(100) NOT NULL,
  `docu_description` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`no`, `docu_id`, `category_id`, `docu_name`, `docu_description`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `eqptdep` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `eqptdep_id` varchar(50) NOT NULL,
  `proj_id` varchar(50) NOT NULL,
  `eqpt_id` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eqptreq`
--

CREATE TABLE `eqptreq` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `eqptreq_id` varchar(20) NOT NULL,
  `eqpt_id` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `duration` datetime NOT NULL,
  `w1` int(11) NOT NULL,
  `w2` int(11) NOT NULL,
  `w3` int(11) NOT NULL,
  `w4` int(11) NOT NULL,
  `w5` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eqptreq`
--

INSERT INTO `eqptreq` (`no`, `eqptreq_id`, `eqpt_id`, `qty`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5`, `status`) VALUES
(0001, '0000', '0000', 0, '2017-09-13 00:00:00', 0, 0, 0, 0, 0, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `eqpt_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `subcat_id` varchar(50) NOT NULL,
  `eqpt_name` varchar(255) NOT NULL,
  `model` varchar(50) NOT NULL,
  `serial_no` varchar(50) NOT NULL,
  `cp_size` varchar(50) NOT NULL,
  `plate_no` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`no`, `eqpt_id`, `category_id`, `subcat_id`, `eqpt_name`, `model`, `serial_no`, `cp_size`, `plate_no`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', '0000', '0000', '0000', '0000', 'inactive'),
(0005, 'EQ0001', 'CT0017', 'SB0003', 'Cargo Truck with Crane', '', '', '', '', 'active'),
(0006, 'EQ0005', 'CT0017', 'SB0003', 'Cargo Truck with Boom', '', '', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `labor`
--

CREATE TABLE `labor` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `labor_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `labor_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labor`
--

INSERT INTO `labor` (`no`, `labor_id`, `category_id`, `labor_name`, `qty`, `status`) VALUES
(0001, '0000', '0000', '0000', 0, 'inactive'),
(0013, 'LB0001', 'CT0007', 'Foreman', 0, 'active'),
(0014, 'LB0013', 'CT0006', 'Traffic Aide', 0, 'active'),
(0015, 'LB0014', 'CT0005', 'Carpenter', 0, 'active'),
(0016, 'LB0015', 'CT0005', 'Mason', 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `laborreq`
--

CREATE TABLE `laborreq` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `laborreq_id` varchar(20) NOT NULL,
  `labor_id` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `duration` datetime NOT NULL,
  `w1` int(11) NOT NULL,
  `w2` int(11) NOT NULL,
  `w3` int(11) NOT NULL,
  `w4` int(11) NOT NULL,
  `w5` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laborreq`
--

INSERT INTO `laborreq` (`no`, `laborreq_id`, `labor_id`, `qty`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5`, `status`) VALUES
(0001, '0000', '0000', 0, '2017-09-28 00:00:00', 0, 0, 0, 0, 0, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `majoract`
--

CREATE TABLE `majoract` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `majoract_id` varchar(20) NOT NULL,
  `activities_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majoract`
--

INSERT INTO `majoract` (`no`, `majoract_id`, `activities_id`, `description`, `status`) VALUES
(0001, '0000', '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `material_id` varchar(50) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `matreq` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
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
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matreq`
--

INSERT INTO `matreq` (`no`, `matreq_id`, `material_id`, `mat_balance`, `mat_projected`, `work_desc`, `duration`, `w1`, `w2`, `w3`, `w4`, `w5`, `status`) VALUES
(0001, '0000', '0000', 0, 0, '0000', 0, 0, 0, 0, 0, 0, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `monthlyacco`
--

CREATE TABLE `monthlyacco` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `monthlyacco_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) NOT NULL,
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
  `prob_id` varchar(100) NOT NULL,
  `actions_id` varchar(100) NOT NULL,
  `majoract_id` varchar(100) NOT NULL,
  `mmat_id` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `workacco_id` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthlyacco`
--

INSERT INTO `monthlyacco` (`no`, `monthlyacco_id`, `proj_id`, `prepared_by`, `noted_by`, `client_id`, `contract_id`, `acco_cutoff`, `start_date`, `target_date`, `proj_cost`, `cost_change`, `cost_variance`, `total_proj_cost`, `exp_projected`, `exp_actual`, `exp_variance`, `variance`, `schedule`, `percent_actual`, `percent_variance`, `ahead_or_delay`, `days`, `completed_days`, `remaining_days`, `time_extension`, `activities_id`, `prob_id`, `actions_id`, `majoract_id`, `mmat_id`, `remarks`, `workacco_id`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', '0000', '0000', '2017-09-07', '2017-09-07', '2017-09-14', '0.00', '0.00', 'ADDITION', '0.00', '0.00', '0.00', 'DEDUCTION', '0.00', '0.00', '0.00', '0.00', 'DELAY', 0, 0, 0, 0, '0000', '0000', '0000', '0000', '0000', '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `monthlymat`
--

CREATE TABLE `monthlymat` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `mmat_id` varchar(50) NOT NULL,
  `material_id` varchar(50) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthlymat`
--

INSERT INTO `monthlymat` (`no`, `mmat_id`, `material_id`, `status`) VALUES
(0001, '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `monthlysched`
--

CREATE TABLE `monthlysched` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `monthlysched_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) NOT NULL,
  `month` enum('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER') NOT NULL,
  `cumulative_month` enum('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER') NOT NULL,
  `laborreq_id` varchar(20) NOT NULL,
  `matreq_id` varchar(20) NOT NULL,
  `eqptreq_id` varchar(20) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `prepared_by` varchar(100) NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monthlysched`
--

INSERT INTO `monthlysched` (`no`, `monthlysched_id`, `proj_id`, `month`, `cumulative_month`, `laborreq_id`, `matreq_id`, `eqptreq_id`, `remarks`, `prepared_by`, `approved_by`, `status`) VALUES
(0001, '0000', '0000', 'JANUARY', 'JANUARY', '0000', '0000', '0000', '0000', '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `part_id` varchar(50) NOT NULL,
  `part_code` varchar(50) NOT NULL,
  `part_desc` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `part-trans` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `part_id` varchar(50) NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `percent` decimal(10,2) NOT NULL,
  `progress` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `part-trans`
--

INSERT INTO `part-trans` (`no`, `part_id`, `contract_id`, `percent`, `progress`) VALUES
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

CREATE TABLE `pay_item` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `part_id` varchar(50) NOT NULL,
  `pay_item_id` varchar(50) NOT NULL,
  `pay_item_code` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `percent` decimal(10,2) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `progress` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_item`
--

INSERT INTO `pay_item` (`no`, `contract_id`, `part_id`, `pay_item_id`, `pay_item_code`, `description`, `percent`, `qty`, `progress`, `status`) VALUES
(0001, '16E00021', '0000', '0000', '0000', '0000', '0.00', '0.00', '0.00', 'inactive'),
(0006, '16E00021', 'PT0001', 'PI0001', 'A.1', 'Engineer\'s Facilities and Others', '0.00', '0.00', '0.00', 'active'),
(0007, '16E00021', 'PT0001', 'PI0006', 'A.2', 'Vehicles for the Engineer', '0.00', '0.00', '0.00', 'active'),
(0008, '16E00021', 'PT0004', 'PI0007', 'B-1', 'General Requirements', '0.00', '0.00', '0.00', 'active'),
(0009, '16E00021', 'PT0005', 'PI0008', '103-3', 'Foundation Fill', '0.00', '0.00', '0.00', 'active'),
(0013, '16E00021', 'PT0010', 'PI0012', '1', '1', '1.00', '1.00', '0.00', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `pay_item-trans`
--

CREATE TABLE `pay_item-trans` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `part_id` varchar(50) NOT NULL,
  `pay_item_id` varchar(50) NOT NULL,
  `contract_id` varchar(20) NOT NULL,
  `percent` decimal(10,2) NOT NULL,
  `progress` decimal(10,2) NOT NULL,
  `qty` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_item-trans`
--

INSERT INTO `pay_item-trans` (`no`, `part_id`, `pay_item_id`, `contract_id`, `percent`, `progress`, `qty`, `status`) VALUES
(0000, '0000', '0000', '0000', '0.00', '0.00', '0.00', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `prob_id` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`no`, `prob_id`, `description`, `status`) VALUES
(0001, '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `proj_id` varchar(20) NOT NULL,
  `contract_id` varchar(100) NOT NULL,
  `proj_name` varchar(255) NOT NULL,
  `proj_code` varchar(255) NOT NULL,
  `proj_location` varchar(255) NOT NULL,
  `award_date` date NOT NULL,
  `ntp_date` date NOT NULL,
  `start_date` date DEFAULT NULL,
  `target_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `proj_team` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
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
  `status` enum('ACTIVE','INACTIVE','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `received` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `received_id` varchar(20) NOT NULL,
  `receiveddocu_id` varchar(20) NOT NULL,
  `receivedeqpt_id` varchar(20) NOT NULL,
  `receivedmat_id` varchar(20) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiveddocu`
--

CREATE TABLE `receiveddocu` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `receiveddocu_id` varchar(20) NOT NULL,
  `docu_id` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `timereceived` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiveddocu`
--

INSERT INTO `receiveddocu` (`no`, `receiveddocu_id`, `docu_id`, `qty`, `timereceived`, `status`) VALUES
(0001, '0000', '0000', 0, '2017-09-20 23:40:47', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `receivedeqpt`
--

CREATE TABLE `receivedeqpt` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `receivedeqpt_id` varchar(20) NOT NULL,
  `eqpt_id` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `timereceived` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receivedeqpt`
--

INSERT INTO `receivedeqpt` (`no`, `receivedeqpt_id`, `eqpt_id`, `qty`, `timereceived`, `status`) VALUES
(0001, '0000', '0000', 0, '2017-09-20 23:41:04', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `receivedmat`
--

CREATE TABLE `receivedmat` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `receivedmat_id` varchar(20) NOT NULL,
  `material_id` varchar(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `timereceived` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receivedmat`
--

INSERT INTO `receivedmat` (`no`, `receivedmat_id`, `material_id`, `qty`, `timereceived`, `status`) VALUES
(0001, '0000', '0000', 0, '2017-09-20 23:41:18', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `remarks_id` varchar(20) NOT NULL,
  `checkpoints_id` varchar(100) NOT NULL,
  `answer` enum('YES','NO','N/A') NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`no`, `remarks_id`, `checkpoints_id`, `answer`, `remarks`, `status`) VALUES
(0001, '0000', '0000', 'YES', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `reports_id` varchar(30) NOT NULL,
  `proj_id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `assigned_to` varchar(30) NOT NULL COMMENT 'user_id',
  `submitted_to` varchar(30) NOT NULL,
  `frequency` enum('DAILY','WEEKLY','MONTHLY') NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`no`, `reports_id`, `proj_id`, `name`, `assigned_to`, `submitted_to`, `frequency`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', '0000', 'DAILY', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `scope`
--

CREATE TABLE `scope` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `scope_id` varchar(20) NOT NULL,
  `scope_name` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
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

CREATE TABLE `subcategories` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `subcat_id` varchar(20) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `subcat_name` varchar(255) NOT NULL,
  `description` enum('EQUIPMENT','LABOR','MATERIAL') NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
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

CREATE TABLE `subcontractor` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `subcon_id` varchar(20) NOT NULL,
  `subcon_comp_name` varchar(255) NOT NULL,
  `subcon_comp_contact` varchar(20) NOT NULL,
  `subcon_person` varchar(255) NOT NULL,
  `subcon_personno` varchar(20) NOT NULL,
  `scope_id` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcontractor`
--

INSERT INTO `subcontractor` (`no`, `subcon_id`, `subcon_comp_name`, `subcon_comp_contact`, `subcon_person`, `subcon_personno`, `scope_id`, `status`) VALUES
(0001, '0000', '0000', '0000', '0000', '0000', '0000', 'INACTIVE'),
(0000, 'SB0001', 'CJ Electrical Services', '321-321', 'CJ Sarabia', '123-213', 'SC0001', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no` int(11) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_type` enum('ADMIN','TOP MANAGER','SAFETY OFFICER','PROJECT MANAGER','PROJECT ENGINEER') NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `user_id`, `emp_id`, `user_name`, `user_pass`, `user_type`, `status`) VALUES
(1, 'user-0001', 'emp-0001', 'belts', '21232f297a57a5a743894a0e4a801fc3', 'PROJECT ENGINEER', 'ACTIVE'),
(2, 'user-0002', 'emp-0002', 'lalakokaori', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `visitors_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`no`, `visitors_id`, `name`, `status`) VALUES
(0000, '0000', '0000', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `workacco`
--

CREATE TABLE `workacco` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `workacco_id` varchar(20) NOT NULL,
  `proj_id` varchar(20) NOT NULL,
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
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workacco`
--

INSERT INTO `workacco` (`no`, `workacco_id`, `proj_id`, `item_no`, `work_desc`, `unit`, `total_unit`, `qty`, `total_qty`, `unit_cost`, `total_unitcost`, `amt`, `total_amt`, `weight`, `total_weight`, `accoprev`, `total_accoprev`, `accothis`, `total_accothis`, `accotodate`, `total_accotodate`, `amtprev`, `total_amtprev`, `amtthis`, `total_amtthis`, `amttodate`, `total_amttodate`, `weightacco`, `total_weightacco`, `status`) VALUES
(0000, '0000', '0000', 0, '0000', 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 0, 0, 0, 0, 0, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'ACTIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`actions_id`),
  ADD KEY `no` (`no`),
  ADD KEY `actions_taken` (`actions_taken`),
  ADD KEY `FK_actions_problems` (`prob_id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activities_id`),
  ADD KEY `activities` (`no`);

--
-- Indexes for table `attendees`
--
ALTER TABLE `attendees`
  ADD PRIMARY KEY (`attendees_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`no`),
  ADD KEY `FK_audit_user` (`name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `category_name` (`category_name`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `no` (`no`),
  ADD KEY `client_name` (`client_person`);

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`consult_id`),
  ADD UNIQUE KEY `no_2` (`no`),
  ADD KEY `scope_id` (`scope_id`),
  ADD KEY `consult_name` (`consult_name`),
  ADD KEY `FK_consultant_project` (`proj_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`),
  ADD UNIQUE KEY `no_2` (`no`),
  ADD KEY `user_id` (`emp_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `contract_name` (`contract_name`);

--
-- Indexes for table `dailyacco`
--
ALTER TABLE `dailyacco`
  ADD PRIMARY KEY (`dailyacco_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `dailyact`
--
ALTER TABLE `dailyact`
  ADD PRIMARY KEY (`dact_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `dailyeqpt`
--
ALTER TABLE `dailyeqpt`
  ADD PRIMARY KEY (`deqpt_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `dailylabor`
--
ALTER TABLE `dailylabor`
  ADD PRIMARY KEY (`dlabor_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `dailymat`
--
ALTER TABLE `dailymat`
  ADD PRIMARY KEY (`dmat_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`docu_id`),
  ADD KEY `no` (`no`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `docu_name` (`docu_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `engr_name` (`name`);

--
-- Indexes for table `eqptdep`
--
ALTER TABLE `eqptdep`
  ADD PRIMARY KEY (`eqptdep_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_eqptdep_equipment` (`eqpt_id`),
  ADD KEY `FK_eqptdep_project` (`proj_id`);

--
-- Indexes for table `eqptreq`
--
ALTER TABLE `eqptreq`
  ADD PRIMARY KEY (`eqptreq_id`),
  ADD KEY `no` (`no`),
  ADD KEY `eqptreq_ibfk_1` (`eqpt_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`eqpt_id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `equipment_ibfk-1` (`category_id`);

--
-- Indexes for table `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`labor_id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `labor_name` (`labor_name`);

--
-- Indexes for table `laborreq`
--
ALTER TABLE `laborreq`
  ADD PRIMARY KEY (`laborreq_id`),
  ADD KEY `no` (`no`),
  ADD KEY `laborreq_ibfk_1` (`labor_id`);

--
-- Indexes for table `majoract`
--
ALTER TABLE `majoract`
  ADD PRIMARY KEY (`majoract_id`),
  ADD KEY `no` (`no`),
  ADD KEY `description` (`description`),
  ADD KEY `FK_majoract_activities` (`activities_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`material_id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `material_name` (`material_name`);

--
-- Indexes for table `matreq`
--
ALTER TABLE `matreq`
  ADD PRIMARY KEY (`matreq_id`),
  ADD KEY `no` (`no`),
  ADD KEY `matreq_ibfk_1` (`material_id`);

--
-- Indexes for table `monthlyacco`
--
ALTER TABLE `monthlyacco`
  ADD PRIMARY KEY (`monthlyacco_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_monthlyacco_project_3` (`target_date`),
  ADD KEY `FK_monthlyacco_project` (`proj_id`),
  ADD KEY `FK_monthlyacco_employee` (`prepared_by`),
  ADD KEY `FK_monthlyacco_employee_2` (`noted_by`),
  ADD KEY `FK_monthlyacco_client` (`client_id`),
  ADD KEY `FK_monthlyacco_contract` (`contract_id`),
  ADD KEY `FK_monthlyacco_activities` (`activities_id`),
  ADD KEY `FK_monthlyacco_problems` (`prob_id`),
  ADD KEY `FK_monthlyacco_actions` (`actions_id`),
  ADD KEY `FK_monthlyacco_majoract` (`majoract_id`),
  ADD KEY `FK_monthlyacco_workacco` (`workacco_id`),
  ADD KEY `FK_monthlyacco_monthlymat` (`mmat_id`);

--
-- Indexes for table `monthlymat`
--
ALTER TABLE `monthlymat`
  ADD PRIMARY KEY (`mmat_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_monthlymat_materials` (`material_id`);

--
-- Indexes for table `monthlysched`
--
ALTER TABLE `monthlysched`
  ADD PRIMARY KEY (`monthlysched_id`),
  ADD KEY `no` (`no`),
  ADD KEY `proj_id` (`proj_id`),
  ADD KEY `laborreq_id` (`laborreq_id`),
  ADD KEY `matreq_id` (`matreq_id`),
  ADD KEY `eqptreq_id` (`eqptreq_id`),
  ADD KEY `FK_monthlysched_engineer` (`approved_by`),
  ADD KEY `monthlysched_ibfk_2` (`prepared_by`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `part-trans`
--
ALTER TABLE `part-trans`
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `contract_id` (`contract_id`),
  ADD KEY `part_id` (`part_id`);

--
-- Indexes for table `pay_item`
--
ALTER TABLE `pay_item`
  ADD PRIMARY KEY (`pay_item_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_pay_item_part` (`part_id`);

--
-- Indexes for table `pay_item-trans`
--
ALTER TABLE `pay_item-trans`
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `contract_id` (`contract_id`),
  ADD KEY `part_id` (`part_id`),
  ADD KEY `pay_item_id` (`pay_item_id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`prob_id`),
  ADD KEY `no` (`no`),
  ADD KEY `description` (`description`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`proj_id`),
  ADD KEY `no` (`no`),
  ADD KEY `contract_id` (`contract_id`),
  ADD KEY `proj_name` (`proj_name`),
  ADD KEY `proj_location` (`proj_location`),
  ADD KEY `proj_code` (`proj_code`),
  ADD KEY `target_date` (`target_date`);

--
-- Indexes for table `proj_team`
--
ALTER TABLE `proj_team`
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `proj_id` (`contract_id`);

--
-- Indexes for table `received`
--
ALTER TABLE `received`
  ADD PRIMARY KEY (`received_id`),
  ADD KEY `no` (`no`),
  ADD KEY `receivedeqpt_id` (`receivedeqpt_id`),
  ADD KEY `receiveddocu_id` (`receiveddocu_id`),
  ADD KEY `receivedmat_id` (`receivedmat_id`);

--
-- Indexes for table `receiveddocu`
--
ALTER TABLE `receiveddocu`
  ADD PRIMARY KEY (`receiveddocu_id`),
  ADD KEY `no` (`no`),
  ADD KEY `receiveddocu_ibfk_1` (`docu_id`);

--
-- Indexes for table `receivedeqpt`
--
ALTER TABLE `receivedeqpt`
  ADD PRIMARY KEY (`receivedeqpt_id`),
  ADD KEY `no` (`no`),
  ADD KEY `receivedeqpt_ibfk_1` (`eqpt_id`);

--
-- Indexes for table `receivedmat`
--
ALTER TABLE `receivedmat`
  ADD PRIMARY KEY (`receivedmat_id`),
  ADD KEY `no` (`no`),
  ADD KEY `receivedmat_ibfk_1` (`material_id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`remarks_id`),
  ADD KEY `no` (`no`),
  ADD KEY `remarks_ibfk_1` (`checkpoints_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reports_id`),
  ADD KEY `no` (`no`),
  ADD KEY `a_t_key` (`assigned_to`),
  ADD KEY `s_t_key` (`submitted_to`),
  ADD KEY `FK_reports_project` (`proj_id`);

--
-- Indexes for table `scope`
--
ALTER TABLE `scope`
  ADD PRIMARY KEY (`scope_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`subcat_id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `subcontractor`
--
ALTER TABLE `subcontractor`
  ADD PRIMARY KEY (`subcon_id`),
  ADD KEY `no` (`no`),
  ADD KEY `scope_id` (`scope_id`),
  ADD KEY `subcon_name` (`subcon_comp_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `no` (`no`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_ibfk_1` (`emp_id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`visitors_id`),
  ADD KEY `no` (`no`);

--
-- Indexes for table `workacco`
--
ALTER TABLE `workacco`
  ADD PRIMARY KEY (`workacco_id`),
  ADD KEY `no` (`no`),
  ADD KEY `workacco_ibfk_1` (`proj_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `attendees`
--
ALTER TABLE `attendees`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `dailyacco`
--
ALTER TABLE `dailyacco`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dailyact`
--
ALTER TABLE `dailyact`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dailyeqpt`
--
ALTER TABLE `dailyeqpt`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dailylabor`
--
ALTER TABLE `dailylabor`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `eqptdep`
--
ALTER TABLE `eqptdep`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eqptreq`
--
ALTER TABLE `eqptreq`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `labor`
--
ALTER TABLE `labor`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `laborreq`
--
ALTER TABLE `laborreq`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `majoract`
--
ALTER TABLE `majoract`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `matreq`
--
ALTER TABLE `matreq`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `monthlyacco`
--
ALTER TABLE `monthlyacco`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `monthlymat`
--
ALTER TABLE `monthlymat`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `monthlysched`
--
ALTER TABLE `monthlysched`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `part-trans`
--
ALTER TABLE `part-trans`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pay_item`
--
ALTER TABLE `pay_item`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `proj_team`
--
ALTER TABLE `proj_team`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
