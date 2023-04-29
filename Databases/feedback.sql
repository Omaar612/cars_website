-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 12:05 AM
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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `comments` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `comments`) VALUES
('Omar mohamed mahmoud', 'gameromar483@gmail.c', 'omar'),
('Omar mohamed mahmoud', 'gameromar473@gmail.c', 'omar'),
('Omar mohamed mahmoud', 'gameromar473@gmail.c', 'website gamd'),
('Omar', 'omar4@gmail.com', 'perfecto'),
('Omar', 'omar4@gmail.com', 'perfecto'),
('Omar', 'ali733@gmail.com', 'great website'),
('Omar', 'ali733@gmail.com', 'great website'),
('Omar mohamed mahmoud', 'gameromar473@gmail.c', 'awesome'),
('Omar mohamed mahmoud', 'gameromar473@gmail.c', 'awesome'),
('Omar', 'gameromar483@gmail.c', 'well done'),
('Omar', 'gameromar483@gmail.c', 'well done'),
('Omar', 'gameromar483@gmail.c', 'well done'),
('Omar', 'gameromar483@gmail.c', 'well done'),
('Omar', 'gameromar483@gmail.c', 'well done'),
('Omar mohamed', 'gameromar483@gmail.c', 'mmm'),
('amr', 'amr@gmail.com', 'woow'),
('amr', 'amr@gmail.com', 'woow'),
('amr', 'amr@gmail.com', 'woow'),
('amr', 'amr@gmail.com', 'woow'),
('Crushers ', 'kavindakusal517@gmai', '..'),
('Omar mohamed mahmoud', 'kavindakusal517@gmai', '123'),
('Omar mohamed mahmoud', 'kavindakusal517@gmai', '123'),
('ahd', 'omar15@hotmail.com', 'thanks '),
('Omar', 'gameromar483@gmail.c', '123'),
('Omar', 'gameromar483@gmail.c', 'good');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
