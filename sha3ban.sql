-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 10:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sha3ban`
--

-- --------------------------------------------------------

--
-- Table structure for table `favs`
--

CREATE TABLE `favs` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favs`
--

INSERT INTO `favs` (`id`, `name`, `price`, `image`) VALUES
(0, 'new product2', 'xxx', 'assets2PHOTO-2023-04-29-21-48-17.jpg'),
(0, 'new product5', 'xxx', 'assets2PHOTO-2023-04-29-21-48-22.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(100, 'new product1', 'xxx', 'assets2\\PHOTO-2023-04-29-21-48-12.jpg'),
(200, 'new product2', 'xxx', 'assets2\\PHOTO-2023-04-29-21-48-17.jpg'),
(300, 'new product3', 'xxx', 'assets2\\PHOTO-2023-04-29-21-48-19.jpg'),
(400, 'new product4', 'xxx', 'assets2\\PHOTO-2023-04-29-21-48-21.jpg'),
(500, 'new product5', 'xxx', 'assets2\\PHOTO-2023-04-29-21-48-22.jpg'),
(600, 'new product6', 'xxx', 'assets2\\PHOTO-2023-04-29-21-48-22(1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=601;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;