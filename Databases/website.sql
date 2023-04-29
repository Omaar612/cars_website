-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 04:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Type2` varchar(255) NOT NULL,
  `Speed` varchar(255) NOT NULL,
  `Name` text NOT NULL,
  `Image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `Year`, `Type`, `Type2`, `Speed`, `Name`, `Image_path`) VALUES
(1, 2023, 'Manual', 'Petrol', '220mph', 'Audi R3', 'assets\\car-png-39063.png'),
(2, 2022, 'Automatic', 'Petrol', '200mph', 'Audi R5', 'assets\\red-sports-car-png-1.png'),
(3, 2014, 'Manual', 'Petrol', '185mph', 'Mercedes-Benz', 'assets\\car-png-16841.png'),
(4, 2021, 'Automatic', 'Electric', '160mph', 'Hyundai Elentra', 'assets\\car-png-39061.png'),
(5, 2018, 'Automatic', 'Petrol', '170mph', 'Mercedes SUV', 'assets\\car-png-16834.png'),
(6, 2023, 'Automatic', 'Petrol', '170mph', 'Ford Fiesta', 'assets\\car-png-39072.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
