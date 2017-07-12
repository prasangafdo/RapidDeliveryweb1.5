-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 01:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapiddeliverynew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `age` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `surname`, `age`, `username`, `password`) VALUES
(1, 'Prasanga', 'Fernando', '21', 'usr', 'pss');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parcel_ID` int(11) NOT NULL,
  `address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `vehicle_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`id`, `username`, `password`, `parcel_ID`, `address`, `telephone`, `vehicle_ID`) VALUES
(1, 'prasangacourier', '1111', 2, '', 0, 2),
(3, 'PrasangaCour', 'pss', 0, 'Katunayake', 776655423, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `email`, `address`, `tel`) VALUES
(1, 'Customer', '1111', 'customer@gmail.com', 'customer address', '11223344'),
(8, 'Prasanga', 'aaaa', 'prasangafdz@gmail.com', 'addr1', '0776655423'),
(11, 'uname', 'pss', 'email', 'address', 'telephone'),
(13, 'Prasangacus', '12321312', 'asda', 'Katunayake', '0776655422');

-- --------------------------------------------------------

--
-- Table structure for table `employee_data`
--

CREATE TABLE `employee_data` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `age` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_data`
--

INSERT INTO `employee_data` (`id`, `name`, `surname`, `age`, `username`, `password`) VALUES
(12, 'Prasanga', 'Fernando', '21', 'usr', 'pss'),
(14, 'Prasanga', 'Fernando', '21', 'prasangafdo', '12345678'),
(15, 'Prasanga', 'Fernando', '18', 'prasangafdo', '1234@7'),
(16, 'Prasanga', 'Fernando', '18', 'prasangafdo', '1234@7'),
(17, 'prasanga', 'Fernando', '19', 'fdo', 'passwordtst');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `parcel_ID` int(11) NOT NULL,
  `Longitude` text NOT NULL,
  `Latitude` text NOT NULL,
  `parcel_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`parcel_ID`, `Longitude`, `Latitude`, `parcel_status`) VALUES
(0, '79.9043215', '7.1824795', 'pickedup'),
(2, '79.878045', '6.972629', 'pickedup');

-- --------------------------------------------------------

--
-- Table structure for table `locationold`
--

CREATE TABLE `locationold` (
  `Latitude` text COLLATE utf8_unicode_ci NOT NULL,
  `Longitude` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `locationold`
--

INSERT INTO `locationold` (`Latitude`, `Longitude`) VALUES
('aaaa', 'bbbb'),
('lati', 'long'),
('', ''),
('', ''),
('2435', '8535'),
('gih', 'jhj'),
('lat', 'long'),
('468866', '111111'),
('555', '777'),
('', ''),
('', ''),
('7.182505', '79.90427333333334'),
('7.182513333333333', '79.90434666666667'),
('7.182474', '79.9043079'),
('7.1824897', '79.9043133'),
('7.1824897', '79.9043133'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'prasanga', '1111'),
(2, 'newUser', 'password'),
(3, 'newUser', 'password'),
(4, 'newUser', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pickup_address` varchar(45) DEFAULT NULL,
  `delivery_address` varchar(45) DEFAULT NULL,
  `package_type` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `state_address` varchar(45) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`id`, `customer_id`, `pickup_address`, `delivery_address`, `package_type`, `contact_no`, `state_address`, `note`) VALUES
(1, 123, 'ad', 'asd', 'dfasd', '1234', '3123', '43we'),
(2, 123, 'ad', 'asd', 'dfasd', '1234', '3123', '43we'),
(3, 123, 'ad', 'asd', 'dfasd', '1234', '3123', '43we'),
(10, 4, '234', '234', '234', '54', '324', '12312'),
(11, 4, '234', '234', '234', '54', '324', '12312');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_reports`
--

CREATE TABLE `parcel_reports` (
  `id` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `pickup_address` varchar(50) NOT NULL,
  `delivery_address` varchar(60) NOT NULL,
  `package_type` varchar(20) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `state_address` varchar(60) NOT NULL,
  `note` varchar(90) NOT NULL,
  `parcel_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel_reports`
--

INSERT INTO `parcel_reports` (`id`, `customer_ID`, `pickup_address`, `delivery_address`, `package_type`, `contact_no`, `state_address`, `note`, `parcel_ID`) VALUES
(1, 8, 'ad', 'asd', 'dfasd', 1234, '3123', '43we', 0),
(2, 11, 'ad', 'asd', 'dfasd', 1234, '3123', '43we', 0),
(3, 8, 'ad', 'asd', 'dfasd', 1234, '3123', '43we', 0),
(4, 11, 'ad', 'asd', 'dfasd', 1234, '3123', '43we', 2),
(5, 8, 'ad', 'asd', 'dfasd', 1234, '3123', '43we', 5);

-- --------------------------------------------------------

--
-- Table structure for table `parcel_status`
--

CREATE TABLE `parcel_status` (
  `id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `Vehicle_ID` int(11) NOT NULL,
  `parcel_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel_status`
--

INSERT INTO `parcel_status` (`id`, `courier_id`, `customer_id`, `status`, `Vehicle_ID`, `parcel_ID`) VALUES
(4, 1, 11, 'Pickedup', 2, 2),
(5, 1, 8, 'Pickedup', 2, 6),
(6, 1, 8, 'Pickedup', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_ID` int(11) NOT NULL,
  `Parcel_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `employee_data`
--
ALTER TABLE `employee_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`parcel_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_reports`
--
ALTER TABLE `parcel_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_status`
--
ALTER TABLE `parcel_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `employee_data`
--
ALTER TABLE `employee_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `parcel_reports`
--
ALTER TABLE `parcel_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `parcel_status`
--
ALTER TABLE `parcel_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
