-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 10:00 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `budget_id` int(11) NOT NULL,
  `expense_type` varchar(32) NOT NULL,
  `budget_entry_date` varchar(32) NOT NULL,
  `no_of_days` varchar(64) NOT NULL,
  `budget_amount` varchar(64) NOT NULL,
  `budget_note` varchar(64) NOT NULL,
  `approve_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`budget_id`, `expense_type`, `budget_entry_date`, `no_of_days`, `budget_amount`, `budget_note`, `approve_status`) VALUES
(5, '8', '2019-05-10', '25', '2365', 'Refreshment', 1),
(12, '10', '2019-05-02', '13', '2365', 'snacks', 1),
(13, '10', '2019-05-02', '28', '28', 'snacks', 1);

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `expenditure_id` int(11) NOT NULL,
  `expenditure_date` varchar(32) NOT NULL,
  `expense_type` varchar(32) NOT NULL,
  `expenditure_amount` varchar(64) NOT NULL,
  `voucher_no` varchar(64) NOT NULL,
  `voucher_image` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`expenditure_id`, `expenditure_date`, `expense_type`, `expenditure_amount`, `voucher_no`, `voucher_image`) VALUES
(13, '2019-05-02', '9', '2500', '25', 'budget-illust.jpg'),
(16, '2019-05-01', '9', '2500', '10', 'download (1).jpg'),
(17, '2019-05-09', '11', '2500', '25', '3R==-=-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `user_password`) VALUES
(7, 'tareq', '123'),
(8, 'shajjadhossain81@gmail.com', '123'),
(9, 'promalisa', '456'),
(10, 'megha', '789');

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE `organization` (
  `organization_id` int(11) NOT NULL,
  `organization_name` varchar(32) NOT NULL,
  `organization_address` varchar(32) NOT NULL,
  `organization_website` varchar(32) NOT NULL,
  `organization_email` varchar(32) NOT NULL,
  `organization_contact_no` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`organization_id`, `organization_name`, `organization_address`, `organization_website`, `organization_email`, `organization_contact_no`) VALUES
(2, 'Bangladesh Air Force', 'Dhaka Cantt', 'baf.mil.bd', 'baf@gmail.com', '0168956552'),
(3, 'Bangladesh navy', 'Dhaka Cantt', 'navy.mil.bd', 'navy@gmail.com', '0185698958'),
(4, 'star tech', 'idb', 'startech.com', 'startech@gmail.com', '01785659565'),
(5, 'Bangladesh Air Force', 'Dhaka Cantt', 'navy.mil.bd', 'baf@gmail.com', '0185698958');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(32) NOT NULL,
  `staff_designation` varchar(32) NOT NULL,
  `staff_id_no` varchar(32) NOT NULL,
  `staff_password` varchar(32) NOT NULL,
  `staff_email` varchar(32) NOT NULL,
  `staff_address` varchar(64) NOT NULL,
  `staff_contact_no` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_designation`, `staff_id_no`, `staff_password`, `staff_email`, `staff_address`, `staff_contact_no`) VALUES
(2, 'Shajjad Hossain Khan', 'Officer', 'shajjad', '123', 'shajjadhossain81@gmail.com', 'Dhaka', '01911367868'),
(3, 'Tareq', 'cpl', '15', '456', 'tareq026@gmail.com', 'Dhaka Cantt', '01678054561'),
(5, 'Tareq', 'cpl', '12', '258', 'nasir@gmail.com', 'uttora', '0169895659');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(32) NOT NULL,
  `supplier_address` varchar(32) NOT NULL,
  `supplier_contact_no` varchar(32) NOT NULL,
  `supplier_website` varchar(32) NOT NULL,
  `supplier_email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_contact_no`, `supplier_website`, `supplier_email`) VALUES
(3, 'Tareq', 'Dhaka Cantt', '01829231926', 'baf.mil.bd', 'tareq026@yahoo.com'),
(4, 'Alom', 'Dhaka Cantt', '01698656984', 'baf.mil.bd', 'alom@gmail.com'),
(5, 'Rana', 'Dhaka Cantt', '01785656985', 'baf.mil.bd', 'rana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `training_id` int(11) NOT NULL,
  `expense_type` varchar(32) NOT NULL,
  `training_start_date` varchar(32) NOT NULL,
  `training_end_date` varchar(32) NOT NULL,
  `training_coordinator_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`training_id`, `expense_type`, `training_start_date`, `training_end_date`, `training_coordinator_name`) VALUES
(8, 'DICT 20', '2019-05-01', '2019-06-29', 'momtaz'),
(9, 'DICT 23', '2019-05-16', '2019-05-15', 'taher'),
(10, 'DICT 21', '2019-05-01', '2019-05-15', 'KADER'),
(11, 'DICT 21', '2019-05-08', '2019-05-23', 'taher'),
(13, 'DICT 15', '2019-05-01', '2019-05-31', 'KADER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budget_id`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`expenditure_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`organization_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`training_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `expenditure_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `organization_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `training_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
