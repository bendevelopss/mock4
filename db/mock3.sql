
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
  `station` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `agenda_id` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`no`, `agenda_id`, `description`, `status`) VALUES
(0001, 'AG-0001', 'Project Information Sheet', 'ACTIVE'),
(0002, 'AG-0002', 'Introduction of Project Team Members', 'ACTIVE'),
(0003, 'AG-0003', 'Discussion of Project Schedule', 'ACTIVE'),
(0004, 'AG-0004', 'Report Submission Schedule/Inspection Schedule', 'ACTIVE'),
(0005, 'AG-0005', 'Quality Policy', 'ACTIVE'),
(0006, 'AG-0006', 'Safety/Environmental Guidelines', 'ACTIVE'),
(0007, 'AG-0007', 'House Rules', 'ACTIVE'),
(0008, 'AG-0008', 'Use of Forms', 'ACTIVE');

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
(0003, '0000', '0000', '0000', 'INACTIVE'),
(0004, 'CT0003', 'material 1', 'material', 'ACTIVE'),
(0005, 'CT0004', 'material 2', 'material', 'ACTIVE'),
(0006, 'CT0005', 'skilled', 'labor', 'ACTIVE'),
(0007, 'CT0006', 'unskilled', 'labor', 'ACTIVE'),
(0008, 'CT0007', 'foreman', 'labor', 'ACTIVE'),
(0010, 'CT0008', 'equipment 1', 'equipment', 'ACTIVE'),
(0011, 'CT0010', 'Equipment', 'equipment', 'ACTIVE'),
(0012, 'CT0011', '11', 'equipment', 'ACTIVE'),
(0013, 'CT0012', '1123', 'undefined', 'ACTIVE'),
(0014, 'CT0013', 'undefined', '12', 'ACTIVE'),
(0015, 'CT0014', '0000', '10', 'ACTIVE'),
(0016, 'CT0015', 'PT0001', '12', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `checkpoints`
--

CREATE TABLE `checkpoints` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `checkpoints_id` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkpoints`
--

INSERT INTO `checkpoints` (`no`, `checkpoints_id`, `description`, `status`) VALUES
(0001, '1', 'Project Information Sheet', 'ACTIVE'),
(0010, '10', 'Safety and Health Program', 'ACTIVE'),
(0011, '11', 'Quality Control Program', 'ACTIVE'),
(0012, '12', 'Complete Project Team', 'ACTIVE'),
(0013, '13', 'All needed project workers', 'ACTIVE'),
(0014, '14', 'Heavy and Light Equipment', 'ACTIVE'),
(0015, '15', 'Tools', 'ACTIVE'),
(0016, '16', 'Subcontractors', 'ACTIVE'),
(0017, '17', 'Suppliers', 'ACTIVE'),
(0018, '18', 'Consultants', 'ACTIVE'),
(0019, '19', 'Materials Needed for the temporary facilities', 'ACTIVE'),
(0002, '2', 'Notice to Proceed (NTP)', 'ACTIVE'),
(0020, '20', 'Planning and Construction of Temporary Facilities', 'ACTIVE'),
(0021, '21', 'Location of the Temporary Facilities has been cleared', 'ACTIVE'),
(0022, '22', 'Field Office', 'ACTIVE'),
(0023, '23', 'Warehouse', 'ACTIVE'),
(0024, '24', 'Motorpool', 'ACTIVE'),
(0025, '25', 'Bunk house/Locker Room', 'ACTIVE'),
(0026, '26', 'Toilet and Bathroom', 'ACTIVE'),
(0027, '27', 'Kitchen, Dining, Washing Area', 'ACTIVE'),
(0028, '28', 'Drinking Water Supply', 'ACTIVE'),
(0029, '29', 'Water and Power Supply', 'ACTIVE'),
(0003, '3', 'Contract Agreement', 'ACTIVE'),
(0030, '30', 'Fire Extinguishers', 'ACTIVE'),
(0031, '31', 'Material Safety Data Sheets', 'ACTIVE'),
(0032, '32', 'Safety Signs and Barricades', 'ACTIVE'),
(0033, '33', 'First Aid Kit', 'ACTIVE'),
(0034, '34', 'Personal Protective Equipment', 'ACTIVE'),
(0035, '35', 'Project Implementation', 'ACTIVE'),
(0036, '36', 'Purchasing', 'ACTIVE'),
(0037, '37', 'Warehousing', 'ACTIVE'),
(0038, '38', 'Equipment/Facilities Maintenance', 'ACTIVE'),
(0039, '39', 'Document and Records Control', 'ACTIVE'),
(0004, '4', 'Performance Bond', 'ACTIVE'),
(0040, '40', 'Pre-construction Orientation', 'ACTIVE'),
(0041, '41', 'Courtesy call to the local government', 'ACTIVE'),
(0005, '5', 'Project Specifications/Drawings', 'ACTIVE'),
(0006, '6', 'Construction Schedule', 'ACTIVE'),
(0007, '7', 'Manpower Utilization Schedule', 'ACTIVE'),
(0008, '8', 'Equipment Utilization Schedule', 'ACTIVE'),
(0009, '9', 'Materials Quantity Take-off', 'ACTIVE');

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
(0002, '0000', '0000', '0000', '', '0000', '0000', '', 'INACTIVE'),
(0007, 'CLI-0006', 'client 2', 'client 2', '', 'client 2', 'client 2', '', 'ACTIVE'),
(0008, 'CLI-0007', 'person', '', 'company', 'adress', 'email', 'contactp', 'ACTIVE'),
(0009, 'CLI-0008', 'person', '', 'company', 'address', 'email', 'contactp', 'ACTIVE'),
(0010, 'CLI-0009', 'ko', '10', 'bebe', '10', '01', '01', 'ACTIVE'),
(0011, 'CLI-0010', 'we', 'we', 'we', 'we', 'we', 'we', 'ACTIVE'),
(0012, 'CLI-0011', 'beta person', 'beta comp no', 'beta', 'add', 'email', 'beta number', 'ACTIVE'),
(0006, 'CLI-CLI2', 'Eunice', '123432', '', 'SJ', 'eu@yc', '', 'ACTIVE');

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
(4, '12345', 'emp-0001', 'CLI-0010', '12345', '0005-12-31', 1234, '0005-12-31', '0005-12-31', '23456.00', 'ACTIVE'),
(39, '123456700', 'emp-0001', 'CLI-0009', '67890', '2017-12-31', 6789, '2017-12-31', '2017-10-31', '999.00', 'ACTIVE'),
(40, '12345670000', 'emp-0001', 'CLI-0008', '67890', '2017-12-31', 6789, '2017-12-31', '2017-10-31', '999.00', 'ACTIVE'),
(55, 'bernie', 'emp-0002', 'CLI-0009', '1234567', 'lalakokaori', 23456, '0000-00-00', '0000-00-00', '23456.00', 'ACTIVE'),
(41, 'beta', 'emp-0001', 'CLI-0011', 'beta', '0001-01-01', 0, '0001-01-01', '0001-01-01', '0.00', 'ACTIVE'),
(1, 'contract beta', 'emp-0001', 'CLI-0006', 'beta', 'beta', 100, '2017-09-27', '2017-09-20', '10000.00', 'ACTIVE'),
(45, 'emo metal', 'emp-0001', 'CLI-0009', 'lalaokaori', 'lalakokaori', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),
(50, 'emo metal18', 'emp-0001', 'CLI-0008', 'lalaokaori', 'lalakokaoris', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),
(51, 'emo metal19', 'emp-0001', 'CLI-0009', 'lalaokaori', 'lalakokaoris', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),
(49, 'emo metal2', 'emp-0001', 'CLI-0009', 'lalaokaori', 'lalakokaori', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),
(52, 'emo metal21', 'emp-0001', 'CLI-0011', 'lalaokaori', 'lalakokaoris', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),
(54, 'emo metal22', 'emp-0001', 'CLI-0008', 'lalaokaori', 'luck', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),
(47, 'emo metal27', 'emp-0001', 'CLI-0011', 'lalaokaori', 'lalakokaori', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),
(43, 'lalakokaori', 'emp-0001', 'CLI-0011', 'lalaokaori', 'lalakokaori', 0, '0001-01-01', '0001-01-01', '10000000000.00', 'ACTIVE'),
(56, 'no_space', 'emp-0001', 'CLI-0008', 'no_space', 'no_space', 123, '0012-12-12', '0000-00-00', '12132.00', 'ACTIVE'),
(34, 'qwertyQ', 'emp-0001', 'CLI-0008', '34567', '5678-12-31', 5, '5678-12-31', '0089-06-07', '234567.00', 'ACTIVE'),
(38, 'qwertyuiop[', 'emp-0001', 'CLI-0010', 'qwertyui', '56789-03-04', 23456789, '0000-00-00', '0000-00-00', '34567.00', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `dailyacco`
--

CREATE TABLE `dailyacco` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `dailyacco_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `day` enum('MONDAY','TUESDAY','WEDNESDAY','THURSDAY','FRIDAY','SATURDAY','SUNDAY') NOT NULL,
  `activities_id` varchar(100) NOT NULL,
  `weather_am` varchar(50) NOT NULL,
  `weather_pm` varchar(50) NOT NULL,
  `meeting_conducted` enum('YES','NO') NOT NULL,
  `dlabor_id` varchar(50) NOT NULL,
  `dmat_id` varchar(50) NOT NULL,
  `deqpt_id` varchar(50) NOT NULL,
  `received_id` varchar(100) NOT NULL,
  `prob_id` varchar(100) NOT NULL,
  `visitors_id` varchar(100) NOT NULL,
  `prepared_by` varchar(100) NOT NULL,
  `approved_by` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dailyeqpt`
--

CREATE TABLE `dailyeqpt` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `deqpt_id` varchar(50) NOT NULL,
  `eqpt_id` varchar(50) NOT NULL,
  `utilization` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dailylabor`
--

CREATE TABLE `dailylabor` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `dlabor_id` varchar(50) NOT NULL,
  `labor_id` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dailymat`
--

CREATE TABLE `dailymat` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `dmat_id` varchar(50) NOT NULL,
  `material_id` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
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
(0001, 'emp-0001', 'Eunice Saus Beltran', 'Engineer', 'er', 'er', 'er', 'ACTIVE'),
(0002, 'emp-0002', 'Bernie Zabala Remollo', '', 'san juan', 'my no', 'b.z@r.com', 'ACTIVE');

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
(0002, 'EQ0001', 'CT0008', 'SB0002', 'none', 'none', 'none', 'none', 'none', 'active'),
(0003, 'EQ0002', 'CT0010', 'SB0003', '12', '12', '21', '12', '12', 'active'),
(0004, 'EQ0003', 'CT0011', 'SB0004', '11', '11', '11', '11', '11', 'active');

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
(0002, 'LB0001', 'CT0006', 'labor 111', 0, 'active'),
(0003, 'LB0002', 'CT0007', 'wew', 0, 'inactive'),
(0004, 'LB0003', 'CT0006', 'wala', 0, 'inactive'),
(0005, 'LB0004', 'CT0005', 'wew', 0, 'inactive'),
(0006, 'LB0005', 'CT0005', 'Mason', 0, 'active'),
(0012, 'LB0006', 'CT0006', '1', 0, 'active');

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
(0002, 'MT0001', 'CT0003', 'tao', 0, 'active'),
(0003, 'MT0002', 'CT0003', 'qwe', 0, 'active');

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

-- --------------------------------------------------------

--
-- Table structure for table `mobilization`
--

CREATE TABLE `mobilization` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `mobi_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) NOT NULL,
  `checkpoints_id` varchar(100) NOT NULL,
  `remarks_id` varchar(20) NOT NULL,
  `timesubmitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `orientation`
--

CREATE TABLE `orientation` (
  `no` int(10) UNSIGNED ZEROFILL NOT NULL,
  `orient_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) NOT NULL,
  `agenda_id` varchar(100) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `date_conducted` datetime NOT NULL,
  `attendees_id` varchar(100) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(0002, 'PT0001', 'qwe', 'qwe', 'ACTIVE'),
(0003, 'PT0002', 'qwer', 'qwer', 'ACTIVE');

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
(0003, 'PT0002', 'no_space', '10.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `pay_item`
--

CREATE TABLE `pay_item` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `part_id` varchar(50) NOT NULL,
  `pay_item_id` varchar(50) NOT NULL,
  `pay_item_code` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_item`
--

INSERT INTO `pay_item` (`no`, `part_id`, `pay_item_id`, `pay_item_code`, `description`, `status`) VALUES
(0001, '0000', '0000', '', '0000', 'inactive'),
(0004, 'PT0002', 'PI0001', 'qwer', 'qwer', 'active'),
(0005, 'PT0001', 'PI0004', '303', '11', 'active');

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
  `qty` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `photo_id` varchar(20) NOT NULL,
  `proj_id` varchar(20) NOT NULL,
  `period_covered` datetime NOT NULL,
  `photo` longblob NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(0002, 'PJ0001', 'emo metal22', '12345', '12342345', '1234', '0078-05-06', '0000-00-00', '0005-12-31', '0789-05-06', 'ACTIVE'),
(0003, 'PJ0002', 'no_space', 'no_space', '123', '132', '0003-12-21', '0002-12-23', '0000-00-00', '0032-03-21', 'ACTIVE'),
(0001, 'proj beta', 'contract beta', 'beta', 'beta', 'beta', '2017-09-19', '2017-09-20', '2017-09-27', '2017-09-20', 'active');

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

-- --------------------------------------------------------

--
-- Table structure for table `safetychecklist`
--

CREATE TABLE `safetychecklist` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `safetychecklist_id` varchar(20) NOT NULL,
  `proj_id` varchar(50) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `safetychecklist`
--

INSERT INTO `safetychecklist` (`no`, `safetychecklist_id`, `proj_id`, `description`, `status`) VALUES
(0001, '1', NULL, 'Office trailer with power, secure site location and neat?', 'ACTIVE'),
(0010, '10', NULL, 'Office equipment ( telephone, fax machine, copier, etc. )', 'ACTIVE'),
(0011, '11', NULL, 'Office furnishings ( desk, chair\'s, filing cabinet, print table, etc. )', 'ACTIVE'),
(0012, '12', NULL, 'Permits/licenses/Certificate of Insurance', 'ACTIVE'),
(0013, '13', NULL, 'Nail, boards, debris removed?', 'ACTIVE'),
(0014, '14', NULL, 'Regular disposal of wastes? Waste containers provided?', 'ACTIVE'),
(0015, '15', NULL, 'Warnings signs and safety signs complete and posted?', 'ACTIVE'),
(0016, '16', NULL, 'Hazard lights utilized?', 'ACTIVE'),
(0017, '17', NULL, 'Delivery address and unloading point for material.', 'ACTIVE'),
(0018, '18', NULL, 'Safety needs ( please check first aid kits, medical facilities location)', 'ACTIVE'),
(0019, '19', NULL, 'Open ditches, drop offs protected? Ladders lowered?', 'ACTIVE'),
(0002, '2', NULL, 'Storage trailer(s) or Warehouse, secure site location and neat?', 'ACTIVE'),
(0020, '20', NULL, 'MSDS for received hazardous wastes? Control/disposal established?', 'ACTIVE'),
(0021, '21', NULL, 'Fire extinguishers available and inspected?', 'ACTIVE'),
(0022, '22', NULL, 'Flammable liquids in secure container/storage?', 'ACTIVE'),
(0023, '23', NULL, 'Established equipment fueling method (turn off/grounded)?', 'ACTIVE'),
(0024, '24', NULL, 'PPEs adequate and utilized? (face, head, eye, hand, foot protection)?', 'ACTIVE'),
(0025, '25', NULL, 'Safety orientations conducted to all employees', 'ACTIVE'),
(0026, '26', NULL, 'Equipment had undergone preventive maintenance?', 'ACTIVE'),
(0027, '27', NULL, 'Materials properly stored/stacked? Inventories updated?', 'ACTIVE'),
(0028, '28', NULL, 'Proper tool being used? Stored after use? Grounded properly?', 'ACTIVE'),
(0029, '29', NULL, 'All operators qualified? Complies with local laws and ordinances?', 'ACTIVE'),
(0003, '3', NULL, 'Injury records being kept? ', 'ACTIVE'),
(0030, '30', NULL, 'Roads sidewalks protected? Adjacent structures properly shored?', 'ACTIVE'),
(0031, '31', NULL, 'Barricades or covers installed?', 'ACTIVE'),
(0032, '32', NULL, 'Excavation barricaded and lighting provided?', 'ACTIVE'),
(0033, '33', NULL, 'Seat belts available? Lights, brakes, warning signals operative?', 'ACTIVE'),
(0034, '34', NULL, 'Oily rag containers used and emptied daily at garage/repair shops?', 'ACTIVE'),
(0035, '35', NULL, 'Adequate lighting and ventilation for repair shop and warehouse?', 'ACTIVE'),
(0004, '4', NULL, 'Injury handling procedures established?', 'ACTIVE'),
(0005, '5', NULL, 'Temp power for construction and equipment?', 'ACTIVE'),
(0006, '6', NULL, 'Telephone, fax line & dedicated computer line? ', 'ACTIVE'),
(0007, '7', NULL, 'Sanitary facilities are well maintained?', 'ACTIVE'),
(0008, '8', NULL, 'Water available? (drinking, testing, dust control, personal use )', 'ACTIVE'),
(0009, '9', NULL, 'Site communications ( radios, etc.)', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `safetymain`
--

CREATE TABLE `safetymain` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `safetymain_id` varchar(20) NOT NULL,
  `proj_id` varchar(100) NOT NULL,
  `month` enum('JANUARY','FEBRUARY','MARCH','APRIL','MAY','JUNE','JULY','AUGUST','SEPTEMBER','OCTOBER','NOVEMBER','DECEMBER') NOT NULL,
  `client_id` varchar(100) NOT NULL,
  `conducted_by` varchar(100) NOT NULL,
  `timesubmitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `acknowledged_by` varchar(100) NOT NULL,
  `safetyremarks_id` varchar(20) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `safetyremarks`
--

CREATE TABLE `safetyremarks` (
  `no` int(4) UNSIGNED ZEROFILL NOT NULL,
  `safetyremarks_id` varchar(20) NOT NULL,
  `safetychecklist_id` varchar(20) NOT NULL,
  `answer` enum('COMPLIANT','NEEDS IMPROVEMENT','NON-COMPLIANT','NOT APPLICABLE') NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status` enum('ACTIVE','INACTIVE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(0002, 'SC0001', 'brige', 'ACTIVE'),
(0003, 'SC0002', 'qwer', 'ACTIVE'),
(0004, 'SC0003', 'red', 'ACTIVE');

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
(0003, 'SB0002', 'CT0008', 'sub equipment 2', 'EQUIPMENT', 'ACTIVE'),
(0004, 'SB0003', 'CT0010', 'Subcat', 'EQUIPMENT', 'ACTIVE'),
(0005, 'SB0004', 'CT0011', '11', 'EQUIPMENT', 'ACTIVE'),
(0002, 'SBSBS1', 'CT0008', 'sub equipment', 'EQUIPMENT', 'ACTIVE');

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
(0002, 'SB0001', 'name', 'comp no', 'person', 'no', 'SC0001', 'ACTIVE');

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
  ADD KEY `activities` (`no`),
  ADD KEY `description` (`description`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`agenda_id`),
  ADD KEY `no` (`no`),
  ADD KEY `description` (`description`);

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
-- Indexes for table `checkpoints`
--
ALTER TABLE `checkpoints`
  ADD PRIMARY KEY (`checkpoints_id`),
  ADD KEY `no` (`no`),
  ADD KEY `description` (`description`);

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
  ADD KEY `no` (`no`),
  ADD KEY `received_id` (`received_id`),
  ADD KEY `dailyacco_ibfk_1` (`proj_id`),
  ADD KEY `dailyacco_ibfk_2` (`activities_id`),
  ADD KEY `dailyacco_ibfk_8` (`prob_id`),
  ADD KEY `dailyacco_ibfk_7` (`prepared_by`),
  ADD KEY `dailyacco_ibfk_9` (`visitors_id`),
  ADD KEY `dailyacco_ibfk_10` (`approved_by`),
  ADD KEY `FK_dailyacco_dailylabor` (`dlabor_id`),
  ADD KEY `FK_dailyacco_dailymat` (`dmat_id`),
  ADD KEY `FK_dailyacco_dailyeqpt` (`deqpt_id`);

--
-- Indexes for table `dailyeqpt`
--
ALTER TABLE `dailyeqpt`
  ADD PRIMARY KEY (`deqpt_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_dailyeqpt_equipment` (`eqpt_id`);

--
-- Indexes for table `dailylabor`
--
ALTER TABLE `dailylabor`
  ADD PRIMARY KEY (`dlabor_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_dailylabor_labor` (`labor_id`);

--
-- Indexes for table `dailymat`
--
ALTER TABLE `dailymat`
  ADD PRIMARY KEY (`dmat_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_dailymat_materials` (`material_id`);

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
-- Indexes for table `mobilization`
--
ALTER TABLE `mobilization`
  ADD PRIMARY KEY (`mobi_id`),
  ADD KEY `no` (`no`),
  ADD KEY `remarks_id` (`remarks_id`),
  ADD KEY `mobilization_ibfk_1` (`proj_id`),
  ADD KEY `FK_mobilization_checkpoints` (`checkpoints_id`);

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
-- Indexes for table `orientation`
--
ALTER TABLE `orientation`
  ADD PRIMARY KEY (`orient_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_orientation_employee` (`emp_id`),
  ADD KEY `orientation_ibfk_2` (`agenda_id`),
  ADD KEY `FK_orientation_attendees` (`attendees_id`),
  ADD KEY `FK_orientation_project` (`proj_id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_photos_project` (`proj_id`);

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
-- Indexes for table `safetychecklist`
--
ALTER TABLE `safetychecklist`
  ADD PRIMARY KEY (`safetychecklist_id`),
  ADD KEY `no` (`no`),
  ADD KEY `description` (`description`),
  ADD KEY `FK_safetychecklist_project` (`proj_id`);

--
-- Indexes for table `safetymain`
--
ALTER TABLE `safetymain`
  ADD PRIMARY KEY (`safetymain_id`),
  ADD KEY `no` (`no`),
  ADD KEY `FK_safetymain_engineer_2` (`acknowledged_by`),
  ADD KEY `FK_safetymain_project` (`proj_id`),
  ADD KEY `FK_safetymain_client` (`client_id`),
  ADD KEY `FK_safetymain_employee` (`conducted_by`),
  ADD KEY `FK_safetymain_safetyremarks` (`safetyremarks_id`);

--
-- Indexes for table `safetyremarks`
--
ALTER TABLE `safetyremarks`
  ADD PRIMARY KEY (`safetyremarks_id`),
  ADD KEY `no` (`no`),
  ADD KEY `safetychecklist` (`safetychecklist_id`);

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
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `checkpoints`
--
ALTER TABLE `checkpoints`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `consultant`
--
ALTER TABLE `consultant`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contract`
--
ALTER TABLE `contract`
  MODIFY `no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `dailyacco`
--
ALTER TABLE `dailyacco`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dailyeqpt`
--
ALTER TABLE `dailyeqpt`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dailylabor`
--
ALTER TABLE `dailylabor`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dailymat`
--
ALTER TABLE `dailymat`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `eqptdep`
--
ALTER TABLE `eqptdep`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `eqptreq`
--
ALTER TABLE `eqptreq`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `labor`
--
ALTER TABLE `labor`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `laborreq`
--
ALTER TABLE `laborreq`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `majoract`
--
ALTER TABLE `majoract`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `matreq`
--
ALTER TABLE `matreq`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mobilization`
--
ALTER TABLE `mobilization`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monthlyacco`
--
ALTER TABLE `monthlyacco`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monthlymat`
--
ALTER TABLE `monthlymat`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monthlysched`
--
ALTER TABLE `monthlysched`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orientation`
--
ALTER TABLE `orientation`
  MODIFY `no` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `part-trans`
--
ALTER TABLE `part-trans`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pay_item`
--
ALTER TABLE `pay_item`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pay_item-trans`
--
ALTER TABLE `pay_item-trans`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `received`
--
ALTER TABLE `received`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receiveddocu`
--
ALTER TABLE `receiveddocu`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receivedeqpt`
--
ALTER TABLE `receivedeqpt`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `receivedmat`
--
ALTER TABLE `receivedmat`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `safetychecklist`
--
ALTER TABLE `safetychecklist`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `safetymain`
--
ALTER TABLE `safetymain`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `safetyremarks`
--
ALTER TABLE `safetyremarks`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scope`
--
ALTER TABLE `scope`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subcontractor`
--
ALTER TABLE `subcontractor`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `workacco`
--
ALTER TABLE `workacco`
  MODIFY `no` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `actions`
--
ALTER TABLE `actions`
  ADD CONSTRAINT `FK_actions_problems` FOREIGN KEY (`prob_id`) REFERENCES `problems` (`prob_id`);

--
-- Constraints for table `audit`
--
ALTER TABLE `audit`
  ADD CONSTRAINT `FK_audit_user` FOREIGN KEY (`name`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `consultant`
--
ALTER TABLE `consultant`
  ADD CONSTRAINT `FK_consultant_project` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`),
  ADD CONSTRAINT `consultant_ibfk_1` FOREIGN KEY (`scope_id`) REFERENCES `scope` (`scope_id`);

--
-- Constraints for table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `contract_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `contract_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`);

--
-- Constraints for table `dailyacco`
--
ALTER TABLE `dailyacco`
  ADD CONSTRAINT `FK_dailyacco_dailyeqpt` FOREIGN KEY (`deqpt_id`) REFERENCES `dailyeqpt` (`deqpt_id`),
  ADD CONSTRAINT `FK_dailyacco_dailylabor` FOREIGN KEY (`dlabor_id`) REFERENCES `dailylabor` (`dlabor_id`),
  ADD CONSTRAINT `FK_dailyacco_dailymat` FOREIGN KEY (`dmat_id`) REFERENCES `dailymat` (`dmat_id`),
  ADD CONSTRAINT `dailyacco_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`),
  ADD CONSTRAINT `dailyacco_ibfk_10` FOREIGN KEY (`approved_by`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `dailyacco_ibfk_2` FOREIGN KEY (`activities_id`) REFERENCES `activities` (`activities_id`),
  ADD CONSTRAINT `dailyacco_ibfk_6` FOREIGN KEY (`received_id`) REFERENCES `received` (`received_id`),
  ADD CONSTRAINT `dailyacco_ibfk_7` FOREIGN KEY (`prepared_by`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `dailyacco_ibfk_8` FOREIGN KEY (`prob_id`) REFERENCES `problems` (`prob_id`),
  ADD CONSTRAINT `dailyacco_ibfk_9` FOREIGN KEY (`visitors_id`) REFERENCES `visitors` (`visitors_id`);

--
-- Constraints for table `dailyeqpt`
--
ALTER TABLE `dailyeqpt`
  ADD CONSTRAINT `FK_dailyeqpt_equipment` FOREIGN KEY (`eqpt_id`) REFERENCES `equipment` (`eqpt_id`);

--
-- Constraints for table `dailylabor`
--
ALTER TABLE `dailylabor`
  ADD CONSTRAINT `FK_dailylabor_labor` FOREIGN KEY (`labor_id`) REFERENCES `labor` (`labor_id`);

--
-- Constraints for table `dailymat`
--
ALTER TABLE `dailymat`
  ADD CONSTRAINT `FK_dailymat_materials` FOREIGN KEY (`material_id`) REFERENCES `materials` (`material_id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `eqptdep`
--
ALTER TABLE `eqptdep`
  ADD CONSTRAINT `FK_eqptdep_equipment` FOREIGN KEY (`eqpt_id`) REFERENCES `equipment` (`eqpt_id`),
  ADD CONSTRAINT `FK_eqptdep_project` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`);

--
-- Constraints for table `eqptreq`
--
ALTER TABLE `eqptreq`
  ADD CONSTRAINT `eqptreq_ibfk_1` FOREIGN KEY (`eqpt_id`) REFERENCES `equipment` (`eqpt_id`);

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk-1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`subcat_id`) REFERENCES `subcategories` (`subcat_id`);

--
-- Constraints for table `labor`
--
ALTER TABLE `labor`
  ADD CONSTRAINT `labor_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `laborreq`
--
ALTER TABLE `laborreq`
  ADD CONSTRAINT `laborreq_ibfk_1` FOREIGN KEY (`labor_id`) REFERENCES `labor` (`labor_id`);

--
-- Constraints for table `majoract`
--
ALTER TABLE `majoract`
  ADD CONSTRAINT `FK_majoract_activities` FOREIGN KEY (`activities_id`) REFERENCES `activities` (`activities_id`);

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `materials_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `matreq`
--
ALTER TABLE `matreq`
  ADD CONSTRAINT `matreq_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `materials` (`material_id`);

--
-- Constraints for table `mobilization`
--
ALTER TABLE `mobilization`
  ADD CONSTRAINT `FK_mobilization_checkpoints` FOREIGN KEY (`checkpoints_id`) REFERENCES `checkpoints` (`checkpoints_id`),
  ADD CONSTRAINT `mobilization_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`),
  ADD CONSTRAINT `mobilization_ibfk_2` FOREIGN KEY (`remarks_id`) REFERENCES `remarks` (`remarks_id`);

--
-- Constraints for table `monthlyacco`
--
ALTER TABLE `monthlyacco`
  ADD CONSTRAINT `FK_monthlyacco_actions` FOREIGN KEY (`actions_id`) REFERENCES `actions` (`actions_id`),
  ADD CONSTRAINT `FK_monthlyacco_activities` FOREIGN KEY (`activities_id`) REFERENCES `activities` (`activities_id`),
  ADD CONSTRAINT `FK_monthlyacco_client` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `FK_monthlyacco_contract` FOREIGN KEY (`contract_id`) REFERENCES `contract` (`contract_id`),
  ADD CONSTRAINT `FK_monthlyacco_employee` FOREIGN KEY (`prepared_by`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `FK_monthlyacco_employee_2` FOREIGN KEY (`noted_by`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `FK_monthlyacco_majoract` FOREIGN KEY (`majoract_id`) REFERENCES `majoract` (`majoract_id`),
  ADD CONSTRAINT `FK_monthlyacco_monthlymat` FOREIGN KEY (`mmat_id`) REFERENCES `monthlymat` (`mmat_id`),
  ADD CONSTRAINT `FK_monthlyacco_problems` FOREIGN KEY (`prob_id`) REFERENCES `problems` (`prob_id`),
  ADD CONSTRAINT `FK_monthlyacco_project` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`),
  ADD CONSTRAINT `FK_monthlyacco_workacco` FOREIGN KEY (`workacco_id`) REFERENCES `workacco` (`workacco_id`);

--
-- Constraints for table `monthlymat`
--
ALTER TABLE `monthlymat`
  ADD CONSTRAINT `FK_monthlymat_materials` FOREIGN KEY (`material_id`) REFERENCES `materials` (`material_id`);

--
-- Constraints for table `monthlysched`
--
ALTER TABLE `monthlysched`
  ADD CONSTRAINT `FK_monthlysched_engineer` FOREIGN KEY (`approved_by`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `monthlysched_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`),
  ADD CONSTRAINT `monthlysched_ibfk_2` FOREIGN KEY (`prepared_by`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `monthlysched_ibfk_3` FOREIGN KEY (`laborreq_id`) REFERENCES `laborreq` (`laborreq_id`),
  ADD CONSTRAINT `monthlysched_ibfk_4` FOREIGN KEY (`matreq_id`) REFERENCES `matreq` (`matreq_id`),
  ADD CONSTRAINT `monthlysched_ibfk_5` FOREIGN KEY (`eqptreq_id`) REFERENCES `eqptreq` (`eqptreq_id`);

--
-- Constraints for table `orientation`
--
ALTER TABLE `orientation`
  ADD CONSTRAINT `FK_orientation_attendees` FOREIGN KEY (`attendees_id`) REFERENCES `attendees` (`attendees_id`),
  ADD CONSTRAINT `FK_orientation_employee` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `FK_orientation_project` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`),
  ADD CONSTRAINT `orientation_ibfk_2` FOREIGN KEY (`agenda_id`) REFERENCES `agenda` (`agenda_id`);

--
-- Constraints for table `part-trans`
--
ALTER TABLE `part-trans`
  ADD CONSTRAINT `part-trans_ibfk_1` FOREIGN KEY (`contract_id`) REFERENCES `contract` (`contract_id`),
  ADD CONSTRAINT `part-trans_ibfk_2` FOREIGN KEY (`part_id`) REFERENCES `part` (`part_id`);

--
-- Constraints for table `pay_item`
--
ALTER TABLE `pay_item`
  ADD CONSTRAINT `FK_pay_item_part` FOREIGN KEY (`part_id`) REFERENCES `part` (`part_id`);

--
-- Constraints for table `pay_item-trans`
--
ALTER TABLE `pay_item-trans`
  ADD CONSTRAINT `pay_item-trans_ibfk_1` FOREIGN KEY (`contract_id`) REFERENCES `contract` (`contract_id`),
  ADD CONSTRAINT `pay_item-trans_ibfk_2` FOREIGN KEY (`part_id`) REFERENCES `part-trans` (`part_id`),
  ADD CONSTRAINT `pay_item-trans_ibfk_3` FOREIGN KEY (`pay_item_id`) REFERENCES `pay_item` (`pay_item_id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `FK_photos_project` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_project_contract` FOREIGN KEY (`contract_id`) REFERENCES `contract` (`contract_id`);

--
-- Constraints for table `received`
--
ALTER TABLE `received`
  ADD CONSTRAINT `received_ibfk_1` FOREIGN KEY (`receivedeqpt_id`) REFERENCES `receivedeqpt` (`receivedeqpt_id`),
  ADD CONSTRAINT `received_ibfk_2` FOREIGN KEY (`receiveddocu_id`) REFERENCES `receiveddocu` (`receiveddocu_id`),
  ADD CONSTRAINT `received_ibfk_3` FOREIGN KEY (`receivedmat_id`) REFERENCES `receivedmat` (`receivedmat_id`);

--
-- Constraints for table `receiveddocu`
--
ALTER TABLE `receiveddocu`
  ADD CONSTRAINT `receiveddocu_ibfk_1` FOREIGN KEY (`docu_id`) REFERENCES `documents` (`docu_id`);

--
-- Constraints for table `receivedeqpt`
--
ALTER TABLE `receivedeqpt`
  ADD CONSTRAINT `receivedeqpt_ibfk_1` FOREIGN KEY (`eqpt_id`) REFERENCES `equipment` (`eqpt_id`);

--
-- Constraints for table `receivedmat`
--
ALTER TABLE `receivedmat`
  ADD CONSTRAINT `receivedmat_ibfk_1` FOREIGN KEY (`material_id`) REFERENCES `materials` (`material_id`);

--
-- Constraints for table `remarks`
--
ALTER TABLE `remarks`
  ADD CONSTRAINT `remarks_ibfk_1` FOREIGN KEY (`checkpoints_id`) REFERENCES `checkpoints` (`checkpoints_id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `FK_reports_project` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`),
  ADD CONSTRAINT `at_fk` FOREIGN KEY (`assigned_to`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `st_fk` FOREIGN KEY (`submitted_to`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `safetychecklist`
--
ALTER TABLE `safetychecklist`
  ADD CONSTRAINT `FK_safetychecklist_project` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`);

--
-- Constraints for table `safetymain`
--
ALTER TABLE `safetymain`
  ADD CONSTRAINT `FK_safetymain_client` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `FK_safetymain_employee` FOREIGN KEY (`conducted_by`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `FK_safetymain_project` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`),
  ADD CONSTRAINT `FK_safetymain_safetyremarks` FOREIGN KEY (`safetyremarks_id`) REFERENCES `safetyremarks` (`safetyremarks_id`);

--
-- Constraints for table `safetyremarks`
--
ALTER TABLE `safetyremarks`
  ADD CONSTRAINT `safetyremarks_ibfk_1` FOREIGN KEY (`safetychecklist_id`) REFERENCES `safetychecklist` (`safetychecklist_id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Constraints for table `subcontractor`
--
ALTER TABLE `subcontractor`
  ADD CONSTRAINT `subcontractor_ibfk_1` FOREIGN KEY (`scope_id`) REFERENCES `scope` (`scope_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`);

--
-- Constraints for table `workacco`
--
ALTER TABLE `workacco`
  ADD CONSTRAINT `workacco_ibfk_1` FOREIGN KEY (`proj_id`) REFERENCES `project` (`proj_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
