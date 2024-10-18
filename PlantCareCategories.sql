-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 18, 2024 at 05:43 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `att29`
--

-- --------------------------------------------------------

--
-- Table structure for table `PlantCareCategories`
--

CREATE TABLE IF NOT EXISTS `PlantCareCategories` (
  `PlantCareCategoryID` int(11) NOT NULL,
  `PlantCareCategoryCode` varchar(10) NOT NULL,
  `PlantCareCategoryName` varchar(255) NOT NULL,
  `PlantCareAisle` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PlantCareCategories`
--

INSERT INTO `PlantCareCategories` (`PlantCareCategoryID`, `PlantCareCategoryCode`, `PlantCareCategoryName`, `PlantCareAisle`, `DateCreated`) VALUES
(100, 'IDP', 'INDOOR PLANTS', '1', '2024-10-17 21:01:24'),
(200, 'PLP', 'PLANT POTS', '3', '2024-10-17 21:01:26'),
(300, 'WTC', 'WATERING CANS', '5', '2024-10-17 21:01:27'),
(400, 'PLS', 'PLANT STAND', '7', '2024-10-17 21:01:29'),
(500, 'FTL', 'FERTILIZER', '9', '2024-10-17 21:01:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PlantCareCategories`
--
ALTER TABLE `PlantCareCategories`
 ADD PRIMARY KEY (`PlantCareCategoryID`), ADD UNIQUE KEY `PlantCareCategoryCode` (`PlantCareCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
