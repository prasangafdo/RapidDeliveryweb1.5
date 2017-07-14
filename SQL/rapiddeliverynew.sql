-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2017 at 07:58 AM
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
  `address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `vehicle_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`id`, `username`, `password`, `address`, `telephone`, `vehicle_ID`) VALUES
(3, 'PrasangaCour', 'pss', 'Katunayake', 776655423, 1),
(4, 'Prasanga_cur', 'courier', '56 Temple Road Negombo', 776655422, 4);

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
(1, 'Prasanga_cus', 'customer', 'prasangafdz@gmail.com', '102 Andiambalama', '0766492254');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `vehicle_ID` int(11) NOT NULL,
  `Longitude` text NOT NULL,
  `Latitude` text NOT NULL,
  `parcel_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`vehicle_ID`, `Longitude`, `Latitude`, `parcel_status`) VALUES
(4, '79.9043161\r\n', '7.1824794', 'pickedup');

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
  `parcel_ID` int(11) NOT NULL,
  `courier_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel_reports`
--

INSERT INTO `parcel_reports` (`id`, `customer_ID`, `pickup_address`, `delivery_address`, `package_type`, `contact_no`, `state_address`, `note`, `parcel_ID`, `courier_ID`) VALUES
(1, 1, 'Katunayake', 'Negombo', 'Parcel', 1122541126, 'Colombo', 'Nothing special', 5, 0),
(2, 1, 'Pickup', 'Delivery', 'Beverage', 73532121, 'State', 'Nothing Special', 1, 0),
(3, 1, 'pp', 'dd', 'ty', 34342, 'ffdsfsf', 'ggfcnfgnjfgn', 6, 0),
(4, 1, 'pp', 'dsfds', 'sdfds', 6756, 'fsfs', 'sfsdg', 7, 0),
(5, 1, 'll', 'dd', 'ftrt', 564, 'gdgdrgdtr', 'sfsdfser', 8, 4);

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
(2, 4, 1, 'Delivered', 45, 5),
(3, 4, 1, 'Pickedup', 4, 1),
(4, 4, 1, 'Pickedup', 4, 6),
(5, 4, 1, 'Delivered', 4, 7),
(6, 4, 1, 'Pickedup', 4, 8);

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
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`vehicle_ID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
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
