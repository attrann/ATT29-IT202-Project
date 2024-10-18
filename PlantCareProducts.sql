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
-- Table structure for table `PlantCareProducts`
--

CREATE TABLE IF NOT EXISTS `PlantCareProducts` (
  `PlantCareProductID` int(11) NOT NULL,
  `PlantCareProductCode` varchar(10) NOT NULL,
  `PlantCareProductName` varchar(255) NOT NULL,
  `PlantCareDescription` text NOT NULL,
  `PlantCareColor` varchar(255) NOT NULL,
  `PlantCareCategoryID` int(11) NOT NULL,
  `PlantCareWholesalePrice` decimal(10,2) NOT NULL,
  `PlantCareListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PlantCareProducts`
--

INSERT INTO `PlantCareProducts` (`PlantCareProductID`, `PlantCareProductCode`, `PlantCareProductName`, `PlantCareDescription`, `PlantCareColor`, `PlantCareCategoryID`, `PlantCareWholesalePrice`, `PlantCareListPrice`, `DateCreated`) VALUES
(1000, 'SUC', 'SUCCULENTS', 'Indoor, drought-resistant plants with charming colors and exotic foliage.\nEasy to handle plants that do not require intense care.', 'Variety', 100, 12.99, 29.99, '2024-10-17 21:01:35'),
(1001, 'ANT', 'ANTHURIUM', 'Anthurium Red, also known as the Flamingo Lily, is a tropical plant known for its bright red flowers. \nIt can grow up to 4 feet tall and requires bright sunlight.', 'Red', 100, 24.97, 32.98, '2024-10-18 12:25:47'),
(2000, 'CCP', 'CLAY POT', 'Clay pot made to withhold your choice of dirt and plant. \nBeautifully crafted from experts that will give your home an authentic feel.', 'TerraCotta', 200, 13.00, 16.00, '2024-10-17 21:01:36'),
(2001, 'COS', 'COSAPOTS SEMPLITO', 'The Cosapots Semplito is a wide rectangle tailored to those who want a modern look.\nIt is frost resistant and is perfect to be used to hold your plants.', 'White Stone', 200, 1190.00, 1199.00, '2024-10-18 12:32:01'),
(2002, 'CRE', 'CRESCENT GARDEN MADISON', 'The Crescent Garden Madison Round Planter is heavy-duty and designed to be lightweight.\nIt duplicates the look of an authentic clay planter and transforms your house beautifully.', 'Rust', 200, 299.00, 359.00, '2024-10-18 12:37:01'),
(3000, 'BLOEM', 'BLOEM SPARROW WATERING CAN', 'User-friendly and easy watering Bloem Sparrow Watering Can to help with gardening needs.\nIts beginner friendly manual makes this watering can perfect for first time planters.', 'Blue', 300, 3.97, 5.99, '2024-10-17 21:01:38'),
(3001, 'HAW', 'HAWS BOSMERE', 'Despite being smaller in size compared to most watering cans, it helps water your plants more carefully which prevents leaf fungus.\nIt holds one quart of water and has a fine rosette nozzle for gentle watering.', 'Green', 300, 26.00, 32.00, '2024-10-18 12:44:23'),
(3002, 'DRAM', 'DRAMM LONG-SPOUT', 'The Dramm  Long-Spout Watering Can can hold up to 7 liters and has a sprinkler nozzle.\nIt is made out of durable plastic which will not allow it to rust or leak.', 'Teal', 300, 41.99, 52.00, '2024-10-18 12:47:07'),
(4000, 'ROSS', 'ROSSNY PLANT STAND', 'Rossny Plant Stand allows 7 potted plants to be on display and is perfect for an indoor space.', 'Light Brown', 400, 25.49, 36.99, '2024-10-17 21:01:39'),
(4001, 'MAG', 'MAGSHION BAMBOO STAND', 'The Magshion Bamboo Stand is a three tier plant stand that can hold a few medium sized plants.\nIts bottom shelf is 12.6 inches square with narrower middle and top shelves.', 'Oak-Brown', 400, 35.99, 43.89, '2024-10-18 12:58:52'),
(4002, 'UNH', 'UNHO CORNER STAND', 'This six tier corner plant stand will fit perfectly into the corner of your room.\nWith six shelves, all at different heights, you can experiment with various arrangements.', 'Brown', 400, 50.00, 64.87, '2024-10-18 13:02:38'),
(5000, 'GRO', 'MIRACLE-GRO', 'Miracle Gro is a must-have fertilizer for all indoor plant use. It instantly feeds your plants and can be able to apply directly to the soil.\n', 'Green', 500, 15.82, 21.00, '2024-10-17 21:01:40'),
(5001, 'ESP', 'ESPOMA ORGANIC', 'The Espoma Organic is made from the finest quality organics available.\nThis fertilizer ensures great plant growth and provides a long lasting food resevoir.', 'White-Brown', 500, 12.99, 16.47, '2024-10-18 13:07:43'),
(5002, 'SUP', 'SUPERTHRIVE GROW PLANT FOOD', 'SuperThrives formula contains calcium which reduces the risk of infection for your plants.\nIts nitrogen levels are lower than your average fertilizer which results in less stretchy growth.', 'White', 500, 15.00, 20.99, '2024-10-18 13:12:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PlantCareProducts`
--
ALTER TABLE `PlantCareProducts`
 ADD PRIMARY KEY (`PlantCareProductID`), ADD UNIQUE KEY `PlantCareProductCode` (`PlantCareProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
