-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 08:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spims`
--

-- --------------------------------------------------------

--
-- Table structure for table `recordtbl`
--

CREATE TABLE `recordtbl` (
  `productID` int(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `user` varchar(255) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `quantity` int(200) NOT NULL,
  `availStockValue` int(200) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recordtbl`
--

INSERT INTO `recordtbl` (`productID`, `category`, `user`, `productName`, `quantity`, `availStockValue`, `date_time`) VALUES
(2, 'Stockout', 'Chin', 'Mongol 1', 3060, 480, '2022-12-08 14:14:15'),
(3, 'Stockout', 'Chin', 'Mongol 1', 3060, 480, '2022-12-08 14:14:32'),
(4, 'Stockout', 'Chin', 'Mongol 1', 3060, 480, '2022-12-08 14:14:38'),
(5, 'Stockout', 'Chin', 'Mongol 2', 3060, 480, '2022-12-08 14:15:20'),
(6, 'Stockout', 'mdc', 'Mongol 3', 3000, 400, '2022-12-08 14:16:53'),
(7, 'Stockout', 'Chin', 'Mongol 3', 100, 100, '2022-12-08 14:17:38'),
(10, 'Stockin', 'Chin', 'Mongol 1', 1000, 480, '2022-12-08 14:28:52'),
(11, 'Stockin', 'Chin', 'A4 Bond Paper', 2, 2, '2022-12-08 15:41:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recordtbl`
--
ALTER TABLE `recordtbl`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recordtbl`
--
ALTER TABLE `recordtbl`
  MODIFY `productID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
