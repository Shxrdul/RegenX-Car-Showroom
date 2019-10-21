-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 07:36 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regenxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_product`
--

CREATE TABLE `car_product` (
  `id` int(11) NOT NULL,
  `carname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mileage` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `fueltype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `colour` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_product`
--

INSERT INTO `car_product` (`id`, `carname`, `img`, `mileage`, `price`, `fueltype`, `colour`) VALUES
(2, 'BMW i8', 'img\\car-img\\bmw-i8.jpg', 100, 999, 'Petrol/Diesel', 'Black, Brown, Red'),
(3, 'Rover Range Evoque', 'img\\car-img\\land-rover-range-evoque.jpg', 101, 1000, 'Petrol/Diesel/Electric', 'Orange, Black, Red, White.'),
(4, 'mercedes amg c43', 'img\\car-img\\mercedes-amg-c43.jpg', 102, 10002, 'Petrol/Hybrid/Electric/Diesel', 'Black, White, Orange, Red, Blue'),
(5, 'Mini Cooper', 'img\\car-img\\mini-cooper.jpg', 103, 10004, 'Petrol/Hybrid/Electric/Diesel', 'Black, White, Orange, Red, Blue, Green'),
(6, 'Porsche Cannye', 'img\\car-img\\porsche-cannye.jpg', 100, 2144, 'Petrol', 'Red');

-- --------------------------------------------------------

--
-- Table structure for table `contact_table`
--

CREATE TABLE `contact_table` (
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `emailid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` char(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_table`
--

INSERT INTO `contact_table` (`name`, `phoneno`, `emailid`, `subject`, `message`) VALUES
('Siddharth Byale', 8819017105, 'sidddharth.byale@gmail.com', 'testte', 'PLIS WORK'),
('Siddharth Byale', 9819017105, 'sidddharth.byale@gmail.com', 'test', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `sell_table`
--

CREATE TABLE `sell_table` (
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` bigint(14) NOT NULL,
  `emailid` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `make` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `intcol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `extcol` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `own` int(5) NOT NULL,
  `insc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sell_table`
--

INSERT INTO `sell_table` (`name`, `phoneno`, `emailid`, `year`, `make`, `model`, `intcol`, `extcol`, `own`, `insc`, `mile`, `message`) VALUES
('Siddharth Byale', 8919017105, 'sidddharth.byale@gmail.com', 2013, 'Great', 'Mercedes CX', 'INTCOL', 'extcol', 1, '2020', '30km/hr', 'PLIS WORk'),
('Siddharth Byale', 9819017105, 'sidddharth.byale@gmail.com', 2013, 'Make', 'Mercedes CX', 'black', 'blue', 1, '2020', '30km/hr', 'djlfwjlf');

-- --------------------------------------------------------

--
-- Table structure for table `test_table`
--

CREATE TABLE `test_table` (
  `name` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test_table`
--

INSERT INTO `test_table` (`name`) VALUES
('Siddharth Byale'),
('Siddharth Byale'),
('Siddharth Byale'),
('Siddharth Byale'),
('Siddharth Byale'),
('Siddharth Byale'),
('Siddharth Byale'),
('Siddharth Byale'),
(''),
('Siddharth Bya'),
('Siddharth Byale'),
('9819017105'),
('Make'),
('Mercedes CX');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_product`
--
ALTER TABLE `car_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_table`
--
ALTER TABLE `contact_table`
  ADD PRIMARY KEY (`phoneno`);

--
-- Indexes for table `sell_table`
--
ALTER TABLE `sell_table`
  ADD PRIMARY KEY (`phoneno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_product`
--
ALTER TABLE `car_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
