-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 01:12 PM
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
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`username`, `pwd`) VALUES
('shardul', 'shardul');

-- --------------------------------------------------------

--
-- Table structure for table `car_product`
--

CREATE TABLE `car_product` (
  `id` int(11) NOT NULL,
  `carname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `mileage` int(11) NOT NULL,
  `price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fueltype` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `colour` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car_product`
--

INSERT INTO `car_product` (`id`, `carname`, `img`, `mileage`, `price`, `fueltype`, `colour`) VALUES
(1, 'Aston Martin Rapide', 'img\\car-img\\aston-martin-rapide-amr-porsche-panamera.jpg', 11, '3.29CR', 'Petrol', 'Divine Red'),
(7, 'Aston Martin V8 Vantage', 'img\\car-img\\aston-martin-v8-vantage.jpg', 11, '2.55CR', 'Petrol', ' Onyx Black'),
(8, 'Aston Martin DB 11', 'img\\car-img\\astonmartin-db11.jpg', 12, '4.99CR', 'Petrol', 'Divine Red'),
(9, 'Audi A4', 'img\\car-img\\audi -A4.jpg', 19, '40.84L', 'Pertrol/ Diesel', 'Moonshine Blue'),
(10, 'Audi  A1', 'img\\car-img\\audi- A1.jpg', 18, '50.94L', 'Pertrol/ Diesel', 'Shell White'),
(11, 'Audi A3 Sportback E-tron', 'img\\car-img\\Audi a3 etron.jpg', 22, '1.5CR', 'Electric', 'Glacier White'),
(12, 'Bentley Mulsanne', 'img\\car-img\\bentley mulsanne.jpg', 10, '5.55CR', 'Petrol', 'Azure Purple'),
(13, 'Bentley Continental-GT', 'img\\car-img\\bentley-continental-gt.jpg', 10, '3.57CR', 'Petrol', 'Amber Burnt Oak'),
(14, 'Bentley Flying Spur', 'img\\car-img\\bentley-flying-spur.jpg', 10, '3.21CR', 'Petrol', 'Dark Cashmere'),
(15, 'Ferrari-812', 'img\\car-img\\ferrari 812.jpg', 7, '5.2CR', 'Petrol', 'Nero'),
(16, 'Ferrari F8 Tributo', 'img\\car-img\\Ferrari-F8-Tributo.jpg', 18, '1.94CR', 'Gasoline', 'Racing Red'),
(17, 'Ferrari Monza', 'img\\car-img\\Ferrari-Monza-SP1.jpg', 16, '2.25CR', 'Petrol', 'Black'),
(18, 'Ford  Mustang', 'img\\car-img\\ford -mustang.jpg', 13, '74.63L', 'Petrol', 'Ingot Silver'),
(19, 'Ford Aspire', 'img\\car-img\\ford aspire.jpg', 16, '9.0L', 'Pertrol/ Diesel', 'Moondust Silver'),
(20, 'Ford Endeavour', 'img\\car-img\\ford-endeavour.jpg', 12, '33.70L', 'Diesel', 'Diffused Silver'),
(21, 'Jaguar F Pace ', 'img\\car-img\\jaguar f pace 25t-prestige.jpg', 20, '41.85L', 'Gasoline', 'Fuji White'),
(22, 'Jaguar F-Type', 'img\\car-img\\jaguar f type.jpg', 13, '2.21CR', 'Petrol', 'Corris Grey '),
(23, 'Jaguar XF', 'img\\car-img\\jaguar-xf.jpg', 19, '54.37L', 'Petrol/Diesel', 'Napoli Black'),
(24, 'Lamborghini Huracan Evo', 'img\\car-img\\lamborghini hurracan evo.jpg', 7, '3.73CR', 'Petrol', 'Pearl White'),
(25, 'Lamborghini Spyder', 'img\\car-img\\lamborghini hurracan spyder.jpg', 11, '3.97CR', 'Petrol', 'Midnight Black'),
(26, 'Lamorghini Avendator', 'img\\car-img\\lamorghini avendator.jpg', 8, '6.25CR', 'Petrol', 'Giallo Spica'),
(27, 'Mercedes-AMG GT', 'img\\car-img\\Mercedes benz -AMG GT C.jpg', 13, '2.32CR', 'Petrol', 'Black'),
(28, 'Mercedez Benz-C', 'img\\car-img\\mercedez benz-C class.jpg', 12, '75L', 'Petrol', 'Selenite Grey'),
(29, 'Mercedez Benz-E', 'img\\car-img\\mercedez benz-E class.jpg', 11, '1.05CR', 'Petrol', 'Iridium Silver'),
(30, 'Porche Maccan', 'img\\car-img\\porche macan.jpg', 11, '85.0L', 'Petrol', 'Mamba Green'),
(31, 'Porche Panamera', 'img\\car-img\\porche panamera.jpg', 11, '2.52CR', 'Petrol', 'Black, Night'),
(32, 'Porsche Cayenne', 'img\\car-img\\porche cayenne.jpg', 11, '1.92CR', 'Petrol', 'White'),
(33, 'Toyota Supra', 'img\\car-img\\Toyota -supra.jpg', 22, '40.65L', 'Gasoline', 'Tungsten Silver'),
(34, 'Toyota Yaris', 'img\\car-img\\toyota_yaris.jpg', 18, '14.07L', 'Petrol', 'Red, Phantom'),
(35, 'Toyota Fortuner', 'img\\car-img\\toyota-fortuner.jpg', 15, '33.25L', 'Petrol', 'Phantom Brown'),
(36, 'Volkswagon', 'img/car-img/volkswagon-Polo.jpg', 21, '0L', 'Diesel', 'Carbon'),
(46, 'Porsche Taycan', 'img/car-img/porche cayenne.jpg', 30, '3.34CR', 'Petrol', 'Blue');

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
('ShardulD', 8234567890, 'shardyl.D@gmail.com', 'Booking Car', 'I would like to test drive your car'),
('Siddharth Byale', 8819017105, 'sidddharth.byale@gmail.com', 'Price', 'I wanted to ask if prices are negotiable?'),
('Piyush', 9819017109, 'piyush872@gmail.com', 'Drive', 'Test Drive timing?');

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
  `mile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sell_table`
--

INSERT INTO `sell_table` (`name`, `phoneno`, `emailid`, `year`, `make`, `model`, `intcol`, `extcol`, `own`, `mile`, `message`, `img`) VALUES
('Siddharth Byale', 9819017105, 'siddharth.byale@gmail.com', 2019, 'Jaguar', 'CVF', 'Black', 'Black', 1, '30MPL', 'sfas', 'img/sell-img/aston-martin-rapide-amr-porsche-panamera.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
