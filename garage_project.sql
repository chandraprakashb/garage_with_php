-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2023 at 07:36 AM
-- Server version: 5.7.36-log
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `colour_id` int(255) NOT NULL,
  `colour_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`colour_id`, `colour_name`) VALUES
(1, 'Matt Black with Milled Holes\r\n'),
(2, 'Full Gloss Black\r\n'),
(3, 'Matt Black M/Hole\r\n'),
(4, 'Machined Matt Black Chrome Rivets\r\n'),
(5, 'Matte Black Milling Windows\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `wheels`
--

CREATE TABLE `wheels` (
  `wheel_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `subcategory_id` int(255) NOT NULL,
  `colour` int(10) NOT NULL,
  `wheel_width_front` varchar(255) NOT NULL,
  `tyre_diameter` int(10) NOT NULL,
  `sku` varchar(20) NOT NULL,
  `rimsizes` varchar(255) NOT NULL,
  `pcds` varchar(255) NOT NULL,
  `offsets` varchar(25) NOT NULL,
  `offsetsr` varchar(25) NOT NULL,
  `price` int(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(50) NOT NULL,
  `type_description` varchar(50) NOT NULL,
  `visible` varchar(2) NOT NULL,
  `isstaggered` varchar(2) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wheels`
--

INSERT INTO `wheels` (`wheel_id`, `name`, `category_id`, `subcategory_id`, `colour`, `wheel_width_front`, `tyre_diameter`, `sku`, `rimsizes`, `pcds`, `offsets`, `offsetsr`, `price`, `image`, `description`, `type_description`, `visible`, `isstaggered`, `qty`) VALUES
(1, '20x9.0 Grudge Offroad ROGUE 5/150 P10', 1, 1, 1, '[20x9.0]\r\n', 20, 'SKU001', '[20x9.0]\r\n', '[5/150]\r\n', '[10]', '', 399, 'assult1.PNG', '', 'PASSENGER ALLOY WHEEL', 'Y', 'N', 21),
(2, '18x9.0 Grudge Offroad AMBUSH 6/139.7 P12\r\n', 1, 2, 2, '[18x9.0]', 18, 'SKU002', '[18x9.0]\r\n', '[6/139.7]\r\n', '[12]', '', 399, 'assult2.PNG', '', 'PASSENGER ALLOY WHEEL', 'Y', 'N', 21),
(3, '17x9.0 Grudge Offroad HAMMER 6/139.7 P12\r\n', 1, 3, 3, '[17x9.0]\r\n', 17, 'SKU003', '[17x9.0]\r\n', '[6/139.7]\r\n', '[12]', '', 399, 'assult3.PNG', '', 'PASSENGER ALLOY WHEEL', 'Y', 'N', 22),
(4, '18x9.0 Grudge Offroad RAMPAGE 6/139.7 P12\r\n', 1, 4, 3, '[18x9.0]\r\n', 18, 'SKU004', '[18x9.0]\r\n', '[6/139.7]\r\n', '[12]', '', 399, 'demon1.PNG', '', 'PASSENGER ALLOY WHEEL', 'Y', 'N', 23),
(5, '17x9.0 Grudge Offroad SCAR 6/139.7 P12\r\n', 1, 5, 5, '[17x9.0]\r\n', 17, 'SKU005', '[17x9.0]\r\n', '[6/139.7]\r\n', '[12]', '', 399, 'demon2.PNG', '', 'PASSENGER ALLOY WHEEL', 'Y', 'N', 24),
(6, '17x8.5 Grudge Offroad ASYLUM 6/139.7 P10\r\n', 2, 5, 5, '[17x9.0]\r\n', 17, 'SKU006', '[17x8.5]\r\n', '[6/139.7]\r\n', '[10]', '', 399, 'hammer1.PNG', '', 'PASSENGER ALLOY WHEEL', 'Y', 'N', 25);

-- --------------------------------------------------------

--
-- Table structure for table `wheel_category`
--

CREATE TABLE `wheel_category` (
  `cat_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wheel_category`
--

INSERT INTO `wheel_category` (`cat_id`, `name`) VALUES
(1, 'Grudge Offroad Wheels'),
(2, 'cat2');

-- --------------------------------------------------------

--
-- Table structure for table `wheel_sub_category`
--

CREATE TABLE `wheel_sub_category` (
  `sub_cat_id` int(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wheel_sub_category`
--

INSERT INTO `wheel_sub_category` (`sub_cat_id`, `cat_id`, `name`) VALUES
(1, 1, '20x9.0 Grudge Offroad ROGUE'),
(2, 1, '18x9.0 Grudge Offroad AMBUSH'),
(3, 1, '17x9.0 Grudge Offroad HAMMER'),
(4, 1, '18x9.0 Grudge Offroad RAMPAGE'),
(5, 1, '17x9.0 Grudge Offroad SCAR'),
(6, 1, '17x8.5 Grudge Offroad ASYLUM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`colour_id`);

--
-- Indexes for table `wheels`
--
ALTER TABLE `wheels`
  ADD PRIMARY KEY (`wheel_id`);

--
-- Indexes for table `wheel_category`
--
ALTER TABLE `wheel_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `wheel_sub_category`
--
ALTER TABLE `wheel_sub_category`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `colour_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wheels`
--
ALTER TABLE `wheels`
  MODIFY `wheel_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wheel_category`
--
ALTER TABLE `wheel_category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wheel_sub_category`
--
ALTER TABLE `wheel_sub_category`
  MODIFY `sub_cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
