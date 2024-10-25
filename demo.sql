-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 01:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `district` varchar(100) NOT NULL,
  `block_name` varchar(40) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `created_at`) VALUES
(1, 'Anugul', '2024-10-25 10:13:05');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `block` varchar(20) DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `mail`, `phone`, `address`, `district`, `block`, `gender`, `created_at`) VALUES
(1, 'Shubhashree paikaray ', 'shubhashree@gmail.com', 9090503764, 'BBSR', '1', '2', 'female', '2024-10-24 09:44:43'),
(2, 'shubu', 'shubu@gmail.com', 9090503764, 'bbsr', '2', '2', 'female', '2024-10-24 18:15:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
