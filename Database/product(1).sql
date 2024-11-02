-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 05:49 AM
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(3) NOT NULL,
  `pro_name` varchar(10) NOT NULL,
  `cid` int(2) NOT NULL,
  `sc_id` int(2) NOT NULL,
  `size` int(2) NOT NULL,
  `lo_des` varchar(500) NOT NULL,
  `price` int(8) NOT NULL,
  `pro_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `cid`, `sc_id`, `size`, `lo_des`, `price`, `pro_img`) VALUES
(1, 'puma', 1, 1, 7, 'puma shoes', 200, 'image\\MEN\\PUMA\\1.webp'),
(2, 'puma', 1, 1, 8, 'puma shoes', 400, 'image\\MEN\\PUMA\\2.webp'),
(3, 'puma', 1, 1, 9, 'puma shoes', 600, 'image\\MEN\\PUMA\\3.webp'),
(4, 'puma', 2, 1, 6, 'puma shoes', 250, 'image\\WOMEN\\PUMA\\1.webp'),
(5, 'puma', 2, 1, 7, 'puma shoes', 350, 'image\\WOMEN\\PUMA\\2.webp'),
(6, 'puma', 2, 1, 8, 'puma shoes', 550, 'image\\WOMEN\\PUMA\\3.webp'),
(7, 'adidas', 1, 2, 8, 'adidas shoes', 450, 'image\\MEN\\ADIDAS\\1.webp'),
(8, 'adidas', 1, 2, 9, 'adidas shoes', 550, 'image\\MEN\\ADIDAS\\2.webp'),
(9, 'adidas', 1, 2, 10, 'adidas shoes', 650, 'image\\MEN\\ADIDAS\\3.webp'),
(10, 'adidas', 2, 2, 7, 'adidas shoes', 350, 'image\\WOMEN\\ADIDAS\\1.webp'),
(11, 'adidas', 2, 2, 8, 'adidas shoes', 450, 'image\\WOMEN\\ADIDAS\\2.webp'),
(12, 'adidas', 2, 2, 9, 'adidas shoes', 550, 'image\\WOMEN\\ADIDAS\\3.webp'),
(13, 'campus', 1, 3, 8, 'campus shoes', 450, 'image\\MEN\\CAMPUS\\1.webp'),
(14, 'campus', 1, 3, 9, 'campus shoes', 550, 'image\\MEN\\CAMPUS\\2.webp'),
(15, 'campus', 1, 3, 10, 'campus shoes', 650, 'image\\MEN\\CAMPUS\\3.webp'),
(16, 'campus', 2, 3, 6, 'campus shoes', 350, 'image\\WOMEN\\CAMPUS\\1.webp'),
(17, 'campus', 2, 3, 7, 'campus shoes', 450, 'image\\WOMEN\\CAMPUS\\2.webp'),
(18, 'campus', 2, 3, 8, 'campus shoes', 550, 'image\\WOMEN\\CAMPUS\\3.webp'),
(19, 'tokyo', 1, 4, 8, 'tokyo shoes', 400, 'image\\MEN\\TOKYO\\1.webp'),
(20, 'tokyo', 1, 4, 9, 'tokyo shoes', 500, 'image\\MEN\\TOKYO\\2.webp'),
(21, 'tokyo', 1, 4, 10, 'tokyo shoes', 600, 'image\\MEN\\TOKYO\\3.webp'),
(22, 'tokyo', 2, 4, 6, 'tokyo shoes', 250, 'image\\WOMEN\\TOKYO\\1.webp'),
(23, 'tokyo', 2, 4, 7, 'tokyo shoes', 350, 'image\\WOMEN\\TOKYO\\2.webp'),
(24, 'tokyo', 2, 4, 8, 'tokyo shoes', 450, 'image\\WOMEN\\TOKYO\\3.webp'),
(25, 'reebok', 1, 5, 8, 'reebok shoes', 550, 'image\\MEN\\REEBOK\\1.webp'),
(26, 'reebok', 1, 5, 9, 'reebok shoes', 650, 'image\\MEN\\REEBOK\\2.webp'),
(27, 'reebok', 1, 5, 10, 'reebok shoes', 750, 'image\\MEN\\REEBOK\\3.webp'),
(28, 'reebok', 2, 5, 6, 'reebok shoes', 400, 'image\\WOMEN\\REEBOK\\1.webp'),
(29, 'reebok', 2, 5, 7, 'reebok shoes', 500, 'image\\WOMEN\\REEBOK\\2.webp'),
(30, 'reebok', 2, 5, 8, 'reebok shoes', 600, 'image\\WOMEN\\REEBOK\\3.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_ID` (`pro_id`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sc_id` (`sc_id`);

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
