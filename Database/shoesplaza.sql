-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 05:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoesplaza`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pro_id` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `qty` int(3) NOT NULL,
  `size` int(2) NOT NULL,
  `pro_img` varchar(100) NOT NULL,
  `price` float(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(2) NOT NULL,
  `name` varchar(6) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `name`, `image`) VALUES
(1, 'MEN', 'man.png'),
(2, 'WOMEN', 'woman.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(3) NOT NULL,
  `pro_name` varchar(10) NOT NULL,
  `cid` int(2) NOT NULL,
  `sc_id` int(2) NOT NULL,
  `size` int(2) NOT NULL,
  `des` varchar(500) NOT NULL,
  `price` float(8,2) NOT NULL,
  `pro_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `cid`, `sc_id`, `size`, `des`, `price`, `pro_img`) VALUES
(1, 'Puma', 1, 1, 7, 'A pair of round toe casual sneakers with regular styling has a lace-up closure\r\nSynthetic upper\r\nCushioned footbed\r\nRubber outsole\r\nWarranty: 3 Months\r\nWarranty provided by brand/manufacturer', 2000.00, '1.webp'),
(2, 'Puma', 1, 1, 8, 'A pair of round toe casual sneakers with regular styling has a lace-up closure\r\nSynthetic upper\r\nCushioned footbed\r\nRubber outsole\r\nWarranty: 3 Months\r\nWarranty provided by brand/manufacturer', 400.00, '2.webp'),
(3, 'Puma', 1, 1, 9, 'A pair of round toe casual sneakers with regular styling has a lace-up closure\r\nSynthetic upper\r\nCushioned footbed\r\nRubber outsole\r\nWarranty: 3 Months\r\nWarranty provided by brand/manufacturer', 600.00, '3.webp'),
(4, 'Puma', 2, 1, 6, 'A pair of round toe casual sneakers with regular styling has a lace-up closure\r\nSynthetic upper\r\nCushioned footbed\r\nRubber outsole\r\nWarranty: 3 Months\r\nWarranty provided by brand/manufacturer', 500.00, '1.webp'),
(5, 'Puma', 2, 1, 7, 'A pair of round toe casual sneakers with regular styling has a lace-up closure\r\nSynthetic upper\r\nCushioned footbed\r\nRubber outsole\r\nWarranty: 3 Months\r\nWarranty provided by brand/manufacturer', 350.00, '2.webp'),
(6, 'Puma', 2, 1, 8, 'A pair of round toe casual sneakers with regular styling has a lace-up closure\r\nSynthetic upper\r\nCushioned footbed\r\nRubber outsole\r\nWarranty: 3 Months\r\nWarranty provided by brand/manufacturer', 550.00, '3.webp'),
(7, 'Adidas', 1, 2, 8, 'Main material: Textile upper/ rubber outsole\r\nWhite / Solar Red\r\nClassic 3-stripe detail\r\nLace-up closure\r\nCushioned footbed\r\nTextured and patterned non-marking outsole\r\nWarranty: 30 days\r\nWarranty provided by the brand owner/ manufacturer', 450.00, '1.webp'),
(8, 'Adidas', 1, 2, 9, 'Main material: Textile upper/ rubber outsole\r\nWhite / Solar Red\r\nClassic 3-stripe detail\r\nLace-up closure\r\nCushioned footbed\r\nTextured and patterned non-marking outsole\r\nWarranty: 30 days\r\nWarranty provided by the brand owner/ manufacturer', 550.00, '2.webp'),
(9, 'Adidas', 1, 2, 10, 'Main material: Textile upper/ rubber outsole\r\nWhite / Solar Red\r\nClassic 3-stripe detail\r\nLace-up closure\r\nCushioned footbed\r\nTextured and patterned non-marking outsole\r\nWarranty: 30 days\r\nWarranty provided by the brand owner/ manufacturer', 650.00, '3.webp'),
(10, 'Adidas', 2, 2, 7, 'Main material: Textile upper/ rubber outsole\r\nWhite / Solar Red\r\nClassic 3-stripe detail\r\nLace-up closure\r\nCushioned footbed\r\nTextured and patterned non-marking outsole\r\nWarranty: 30 days\r\nWarranty provided by the brand owner/ manufacturer', 350.00, '1.webp'),
(11, 'Adidas', 2, 2, 8, 'Main material: Textile upper/ rubber outsole\r\nWhite / Solar Red\r\nClassic 3-stripe detail\r\nLace-up closure\r\nCushioned footbed\r\nTextured and patterned non-marking outsole\r\nWarranty: 30 days\r\nWarranty provided by the brand owner/ manufacturer', 450.00, '2.webp'),
(12, 'Adidas', 2, 2, 9, 'Main material: Textile upper/ rubber outsole\r\nWhite / Solar Red\r\nClassic 3-stripe detail\r\nLace-up closure\r\nCushioned footbed\r\nTextured and patterned non-marking outsole\r\nWarranty: 30 days\r\nWarranty provided by the brand owner/ manufacturer', 550.00, '3.webp'),
(13, 'Campus', 1, 3, 8, 'A pair of black running sports shoes, has regular styling, lace-up detail\r\nMesh upper\r\nCushioned footbed\r\nTextured and patterned outsole\r\nWarranty: 30 days\r\nWarranty provided by brand/manufacturer', 450.00, '1.webp'),
(14, 'Campus', 1, 3, 9, 'A pair of black running sports shoes, has regular styling, lace-up detail\r\nMesh upper\r\nCushioned footbed\r\nTextured and patterned outsole\r\nWarranty: 30 days\r\nWarranty provided by brand/manufacturer', 550.00, '2.webp'),
(15, 'Campus', 1, 3, 10, 'A pair of black running sports shoes, has regular styling, lace-up detail\r\nMesh upper\r\nCushioned footbed\r\nTextured and patterned outsole\r\nWarranty: 30 days\r\nWarranty provided by brand/manufacturer', 650.00, '3.webp'),
(16, 'Campus', 2, 3, 6, 'A pair of black running sports shoes, has regular styling, lace-up detail\r\nMesh upper\r\nCushioned footbed\r\nTextured and patterned outsole\r\nWarranty: 30 days\r\nWarranty provided by brand/manufacturer', 350.00, '1.webp'),
(17, 'Campus', 2, 3, 7, 'A pair of black running sports shoes, has regular styling, lace-up detail\r\nMesh upper\r\nCushioned footbed\r\nTextured and patterned outsole\r\nWarranty: 30 days\r\nWarranty provided by brand/manufacturer', 450.00, '2.webp'),
(18, 'Campus', 2, 3, 8, 'A pair of black running sports shoes, has regular styling, lace-up detail\r\nMesh upper\r\nCushioned footbed\r\nTextured and patterned outsole\r\nWarranty: 30 days\r\nWarranty provided by brand/manufacturer', 550.00, '3.webp'),
(19, 'Tokyo', 1, 4, 8, 'A pair of round toe white sneakers ,has regular styling,\r\nLace-ups detail\r\nPu upper\r\nCushioned footbed\r\nTextured and patterned outsole', 400.00, '1.webp'),
(20, 'Tokyo', 1, 4, 9, 'A pair of round toe white sneakers ,has regular styling,\r\nLace-ups detail\r\nPu upper\r\nCushioned footbed\r\nTextured and patterned outsole', 500.00, '2.webp'),
(21, 'Tokyo', 1, 4, 10, 'A pair of round toe white sneakers ,has regular styling,\r\nLace-ups detail\r\nPu upper\r\nCushioned footbed\r\nTextured and patterned outsole', 600.00, '3.webp'),
(22, 'Tokyo', 2, 4, 6, 'A pair of round toe white sneakers ,has regular styling,\r\nLace-ups detail\r\nPu upper\r\nCushioned footbed\r\nTextured and patterned outsole', 250.00, '1.webp'),
(23, 'Tokyo', 2, 4, 7, 'A pair of round toe white sneakers ,has regular styling,\r\nLace-ups detail\r\nPu upper\r\nCushioned footbed\r\nTextured and patterned outsole', 350.00, '2.webp'),
(24, 'Tokyo', 2, 4, 8, 'A pair of round toe white sneakers ,has regular styling,\r\nLace-ups detail\r\nPu upper\r\nCushioned footbed\r\nTextured and patterned outsole', 450.00, '3.webp'),
(25, 'Reebok', 1, 5, 8, 'A pair of GS Running Stride Runner K shoes, has regular Styling, lace-ups detail\r\nUpper synthetic\r\nCushioned footbed\r\nTextured and patterned outsole', 550.00, '1.webp'),
(26, 'Reebok', 1, 5, 9, 'A pair of GS Running Stride Runner K shoes, has regular Styling, lace-ups detail\r\nUpper synthetic\r\nCushioned footbed\r\nTextured and patterned outsole', 650.00, '2.webp'),
(27, 'Reebok', 1, 5, 10, 'A pair of GS Running Stride Runner K shoes, has regular Styling, lace-ups detail\r\nUpper synthetic\r\nCushioned footbed\r\nTextured and patterned outsole', 750.00, '3.webp'),
(28, 'Reebok', 2, 5, 6, 'A pair of GS Running Stride Runner K shoes, has regular Styling, lace-ups detail\r\nUpper synthetic\r\nCushioned footbed\r\nTextured and patterned outsole', 400.00, '1.webp'),
(29, 'Reebok', 2, 5, 7, 'A pair of GS Running Stride Runner K shoes, has regular Styling, lace-ups detail\r\nUpper synthetic\r\nCushioned footbed\r\nTextured and patterned outsole', 500.00, '2.webp'),
(30, 'Reebok', 2, 5, 8, 'A pair of GS Running Stride Runner K shoes, has regular Styling, lace-ups detail\r\nUpper synthetic\r\nCushioned footbed\r\nTextured and patterned outsole', 600.00, '3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `name` varchar(50) NOT NULL,
  `addr` varchar(200) NOT NULL,
  `city` varchar(15) NOT NULL,
  `pin` bigint(6) NOT NULL,
  `cno` bigint(10) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(25) NOT NULL,
  `types` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`name`, `addr`, `city`, `pin`, `cno`, `gender`, `email`, `pwd`, `types`) VALUES
('aayushi', 'devaliya', 'babra', 365410, 9852134677, 'f', 'a@gmail.com', '456', 'U'),
('fency', 'pipaliya', 'babra', 365410, 1234567890, 'f', 'f@gmail.com', '123', 'U'),
('Jenisha', 'devaliya', 'babra', 365410, 9876543210, 'f', 'j@gmail.com', 'asd', 'U'),
('Jagu', 'devaliya', 'babra', 365410, 9876543210, 'F', 'jp@gmail.com', 'asd', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sc_id` int(2) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sc_id`, `name`) VALUES
(1, 'PUMA'),
(2, 'ADIDAS'),
(3, 'CAMPUS'),
(4, 'TOKYO'),
(5, 'REEBOK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `ID` (`cid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_ID` (`pro_id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sc_id` (`sc_id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sc_id`),
  ADD KEY `ID` (`sc_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`sc_id`) REFERENCES `subcategory` (`sc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
