-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 08:47 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User`, `Password`) VALUES
('Admin', 'spims');

-- --------------------------------------------------------

--
-- Table structure for table `cashietbl`
--

CREATE TABLE `cashietbl` (
  `User` varchar(25) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `Mname` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Age` int(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Cnum` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cashietbl`
--

INSERT INTO `cashietbl` (`User`, `Fname`, `Mname`, `Lname`, `Age`, `Gender`, `Cnum`, `Password`) VALUES
('Chin', 'Rosemarie', 'Zuniga', 'Legaspi', 20, 'Female', '639', 'marie'),
('mdc', 'Mark David', 'Santos', 'Castillo', 20, 'Male', '09', 'qweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ProductId` int(255) NOT NULL,
  `ProdName` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `PurPrice` int(255) NOT NULL,
  `RetailPrice` int(255) NOT NULL,
  `IdealStocks` int(255) NOT NULL,
  `AvailStocks` int(255) NOT NULL,
  `AvailStockVal` int(255) NOT NULL,
  `PurchasedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ProductId`, `ProdName`, `Category`, `PurPrice`, `RetailPrice`, `IdealStocks`, `AvailStocks`, `AvailStockVal`, `PurchasedAt`) VALUES
(4, 'Panda Black', 'Ballpen', 120, 7, 150, 100, 700, '2022-12-01 06:32:01'),
(5, 'Panda Red', 'Ballpen', 120, 7, 150, 125, 875, '2022-12-01 06:33:34'),
(6, 'FlexSticks', 'Ballpen', 70, 8, 72, 60, 200, '2022-12-01 06:34:53'),
(7, 'Gel Pen', 'Ballpen', 96, 10, 72, 60, 250, '2022-12-01 06:35:52'),
(8, 'Coloring Pen', 'Ballpen', 96, 12, 72, 36, 144, '2022-12-01 06:36:48'),
(9, 'Hard Copy Long', 'BondPaper', 250, 1, 2500, 2500, 1250, '2022-12-01 06:38:35'),
(10, 'Hard Copy Short', 'BondPaper', 220, 1, 3000, 2500, 1250, '2022-12-01 06:48:05'),
(11, 'Daichi Long', 'BondPaper', 190, 1, 3000, 1500, 750, '2022-12-01 06:52:12'),
(12, 'Colored Paper', 'BondPaper', 180, 1, 1500, 1000, 1000, '2022-12-01 06:53:21'),
(13, 'A4 Bond Paper', 'BondPaper', 220, 1, 3000, 2000, 2000, '2022-12-01 06:55:20'),
(14, 'Mongol 1', 'Pencil', 96, 8, 72, 60, 480, '2022-12-01 06:57:18'),
(15, 'Mongol 2', 'Pencil', 96, 8, 72, 60, 480, '2022-12-01 06:58:40'),
(16, 'Mongol 3', 'Pencil', 96, 8, 72, 60, 480, '2022-12-01 06:59:17'),
(17, 'Black Pencil', 'Pencil', 96, 10, 72, 60, 600, '2022-12-01 07:00:07'),
(18, 'Daichi Short', 'BondPaper', 180, 1, 3000, 1500, 750, '2022-12-03 06:00:00'),
(19, 'Oslo Paper', 'BondPaper', 180, 1, 1500, 1000, 1000, '2022-12-03 06:00:45'),
(20, 'Graphing Paper', 'BondPaper', 180, 1, 2500, 2500, 2500, '2022-12-03 06:01:24'),
(22, 'Composition', 'Notebook', 170, 17, 600, 200, 3400, '2022-12-03 06:05:49'),
(23, 'Writing', 'Notebook', 170, 17, 600, 200, 3400, '2022-12-03 06:06:36'),
(24, 'Spring Leaf', 'Notebook', 350, 35, 600, 200, 7000, '2022-12-03 06:07:15'),
(25, 'Spiral', 'Notebook', 170, 17, 600, 200, 3400, '2022-12-03 06:10:34'),
(26, 'Notebook with Yarn', 'Notebook', 180, 18, 600, 200, 3600, '2022-12-03 06:14:35'),
(27, 'Small Notebook', 'Notebook', 100, 10, 600, 200, 2000, '2022-12-03 06:15:44'),
(28, 'Spiral Big Notebook', 'Notebook', 300, 30, 600, 200, 6000, '2022-12-03 06:17:16'),
(29, 'Big Notebook with Yarn', 'Notebook', 350, 35, 600, 200, 7000, '2022-12-03 06:22:02'),
(30, 'Math Notebook Spiral', 'Notebook', 300, 30, 600, 200, 6000, '2022-12-03 06:22:35'),
(31, 'Math Notebook with Yarn', 'Notebook', 350, 35, 600, 200, 7000, '2022-12-03 06:23:15'),
(32, 'Intermediate Pad', 'Paper', 250, 1, 4000, 4000, 2000, '2022-12-03 06:25:11'),
(33, 'Grade 1', 'Paper', 150, 1, 4000, 4000, 2000, '2022-12-03 06:26:18'),
(34, 'Grade 2', 'Paper', 150, 1, 4000, 4000, 2000, '2022-12-03 06:27:19'),
(35, 'Grade 3', 'Paper', 150, 1, 4000, 4000, 2000, '2022-12-03 06:27:47'),
(36, 'Grade 4', 'Paper', 150, 1, 4000, 4000, 2000, '2022-12-03 06:28:31'),
(37, 'Victory Yellow Pad', 'Paper', 650, 1, 4000, 4000, 4000, '2022-12-03 06:29:28'),
(38, 'Sketch Pad Long', 'Paper', 540, 45, 12, 8, 360, '2022-12-03 06:31:34'),
(39, 'Sketch Pad Short', 'Paper', 420, 40, 12, 8, 320, '2022-12-03 06:34:33'),
(40, 'Cartolina', 'Paper', 450, 8, 600, 600, 4800, '2022-12-03 06:35:23'),
(41, 'Carbon Paper', 'Paper', 600, 12, 300, 300, 3600, '2022-12-03 06:36:43'),
(42, 'Photo Paper', 'Paper', 200, 10, 120, 120, 1200, '2022-12-03 06:37:33'),
(43, 'Sticky Notes', 'Paper', 240, 20, 12, 6, 120, '2022-12-03 06:38:24'),
(44, 'Paper Sticker', 'Paper', 96, 8, 60, 60, 480, '2022-12-03 06:39:00'),
(45, 'Pencil Eraser', 'Eraser', 120, 5, 144, 144, 720, '2022-12-03 06:46:44'),
(46, 'Correction Pen', 'Eraser', 240, 20, 72, 72, 1440, '2022-12-03 06:47:56'),
(47, 'Correction Tape', 'Eraser', 300, 25, 72, 72, 1800, '2022-12-03 06:49:05'),
(48, 'Board Eraser', 'Eraser', 180, 15, 12, 5, 75, '2022-12-03 06:49:42'),
(49, 'Folder Long', 'Folder', 700, 8, 600, 600, 4800, '2022-12-03 06:50:34'),
(50, 'Folder Short', 'Folder', 600, 7, 600, 600, 4200, '2022-12-03 06:51:12'),
(51, 'Colored Folder', 'Folder', 600, 12, 600, 600, 7200, '2022-12-03 06:52:11'),
(52, 'Folder Jacket', 'Folder', 1400, 14, 600, 600, 8400, '2022-12-03 06:55:25'),
(53, 'Sliding Folder Long', 'Folder', 96, 10, 600, 600, 6000, '2022-12-03 06:56:20'),
(54, 'Sliding Folder Short', 'Folder', 84, 8, 600, 600, 4800, '2022-12-03 06:57:38'),
(55, 'Expanded Folder', 'Folder', 240, 20, 600, 600, 12000, '2022-12-03 06:58:14'),
(56, 'Brown Envelope Long', 'Envelope', 500, 5, 600, 600, 3000, '2022-12-03 07:00:06'),
(57, 'Brown Envelope Short', 'Envelope', 400, 4, 600, 600, 2400, '2022-12-03 07:06:36'),
(58, 'Plastic Envelope Long', 'Envelope', 300, 12, 150, 150, 1800, '2022-12-03 07:07:21'),
(59, 'Plastic Envelope Short', 'Envelope', 250, 10, 150, 150, 1500, '2022-12-03 07:09:54'),
(60, 'Expanded Envelope', 'Envelope', 216, 18, 72, 72, 1296, '2022-12-03 07:10:38'),
(61, 'Scotch Tape', 'Tapes', 60, 5, 72, 72, 360, '2022-12-03 07:31:53'),
(62, 'Masking Tape', 'Tapes', 240, 15, 72, 72, 1080, '2022-12-03 07:32:50'),
(63, 'Packing Tape', 'Tapes', 504, 44, 72, 72, 3168, '2022-12-03 07:33:24'),
(64, 'Double-sided Tape', 'Tapes', 216, 20, 72, 72, 1440, '2022-12-03 07:34:02'),
(65, 'Illustration Board 1/2', 'Board', 2100, 42, 300, 300, 12600, '2022-12-03 07:35:24'),
(66, 'Illustration Board 1/4', 'Board', 700, 15, 300, 300, 4500, '2022-12-03 07:39:35'),
(67, 'Illustration Board 1/8', 'Board', 350, 8, 300, 300, 2400, '2022-12-03 07:40:10'),
(68, 'Cardboard 1/2', 'Board', 300, 25, 300, 300, 7500, '2022-12-03 07:40:53'),
(69, 'Whiteboard', 'Board', 450, 40, 12, 4, 160, '2022-12-03 07:41:58'),
(70, 'Chalk', 'Board', 110, 1, 300, 300, 300, '2022-12-03 07:42:27'),
(71, 'Crayons x8', 'ColoringMaterials', 264, 28, 72, 72, 2016, '2022-12-03 07:43:32'),
(72, 'Crayons x16', 'ColoringMaterials', 504, 48, 72, 72, 3456, '2022-12-03 07:44:19'),
(73, 'Crayons x24', 'ColoringMaterials', 768, 72, 72, 72, 5184, '2022-12-03 07:45:03'),
(74, 'Pastel Crayons x8', 'ColoringMaterials', 444, 42, 72, 72, 3024, '2022-12-03 07:45:43'),
(75, 'Pastel Crayons x12', 'ColoringMaterials', 660, 65, 72, 72, 4680, '2022-12-03 07:46:24'),
(76, 'Pastel Crayons x24', 'ColoringMaterials', 240, 130, 72, 72, 9360, '2022-12-03 07:47:10'),
(77, 'Jumbo Crayons', 'ColoringMaterials', 1140, 105, 72, 72, 7650, '2022-12-03 07:47:39');

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
-- Indexes for table `cashietbl`
--
ALTER TABLE `cashietbl`
  ADD UNIQUE KEY `User` (`User`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ProductId`),
  ADD UNIQUE KEY `ProdName` (`ProdName`);

--
-- Indexes for table `recordtbl`
--
ALTER TABLE `recordtbl`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `ProductId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `recordtbl`
--
ALTER TABLE `recordtbl`
  MODIFY `productID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
