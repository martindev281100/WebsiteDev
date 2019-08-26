-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 04:59 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoesstore`
--
CREATE DATABASE IF NOT EXISTS `shoesstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shoesstore`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `usernames` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `usernames`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `ProductId` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ProductId`, `quantity`) VALUES
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `CatId` int(11) NOT NULL,
  `CatName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatId`, `CatName`) VALUES
(1, 'Adidas'),
(2, 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE `color` (
  `colorid` int(11) NOT NULL,
  `color` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`colorid`, `color`) VALUES
(1, 'black'),
(2, 'white');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `CusId` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CusId`, `FullName`, `Address`, `Phone`, `Email`) VALUES
(1, 'Dao Khac Manh', 'Hanoi', '123456789', 'manhdaokhacmanh@gmail.com'),
(2, 'Thomas Shaw', 'London', '19001000', 'thomasshaw@gmail.com'),
(3, 'Phil', 'London', '987654321', 'phil@gmail.com'),
(4, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(5, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(6, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(7, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(8, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(9, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(10, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(11, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(12, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(13, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(14, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(15, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(16, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(17, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(18, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(19, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(20, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(21, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(22, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(23, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(24, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(25, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(26, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(27, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn'),
(28, 'jfaklshfklasfhdsjkfshdijalfksasf', 'sda', '13', 'manhdkgch18056@fpt.edu.vn');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

DROP TABLE IF EXISTS `orderdetail`;
CREATE TABLE `orderdetail` (
  `OrderId` int(11) NOT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`OrderId`, `ProductId`, `Quantity`) VALUES
(1, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `OrderId` int(11) NOT NULL,
  `CusId` int(11) DEFAULT NULL,
  `Total` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderId`, `CusId`, `Total`) VALUES
(1, 1, '100');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `ProductId` int(11) NOT NULL,
  `colorid` int(20) DEFAULT NULL,
  `ProductName` varchar(200) NOT NULL,
  `Image1` varchar(100) NOT NULL,
  `Image2` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `descriptions` varchar(500) DEFAULT NULL,
  `CatId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductId`, `colorid`, `ProductName`, `Image1`, `Image2`, `Price`, `descriptions`, `CatId`) VALUES
(3, 2, 'ADIDAS OZWEEGO (BLACK)', 'image/shoes/B_ozweego.png', 'image/shoes/B_OzweegoStory.jpg', 100, 'Inspired by the original 1998 model, OZWEEGO reinvents iconic design elements for the present. This silhouette pays homage to the lightweight and comfortable 90?s cushion runner, offering a new interpretation from the adidas archive.', 1),
(4, 1, 'ADIDAS OZWEEGO (BLACK LIGHT)', 'image\\shoes\\BL_ozweego.jfif', 'image\\shoes\\BL_Ozweego.jpg', 100, 'Inspired by the original 1998 model, OZWEEGO reinvents iconic design elements for the present. This silhouette pays homage to the lightweight and comfortable 90’s cushion runner, offering a new interpretation from the adidas archive.', 1),
(5, 1, 'NIKE CORTEZ (BLACK)', 'image\\shoes\\B_NikeCortez.jpg', 'image\\shoes\\NikeCortezStory.jpg', 100, 'The Nike Classic Cortez Shoe is Nike original running shoe, designed by Bill Bowerman and released in 1972. This version features a leather and synthetic leather construction for added durability.', 2),
(6, 1, 'NIKE PRESTO (BLACK)', 'image\\shoes\\BW_NikeReact.jpg', 'image\\shoes\\NikeReactStory.jpg', 300, 'Back in early 2000, “Shady Milkman” and “Rogue Kielbasa” read more as eccentric menu items than monikers for groundbreaking running shoes. But that was before an irreverent advertising campaign, designed to underscore the disruptive nature of the newly released Nike Air Presto, turned notions of performance footwear on their heads.', 2),
(7, 2, 'NIKE AIR MAX 98 (WHITE) ', 'image\\shoes\\BW_NikeReact.jpg', 'image\\shoes\\NikeReactStory.jpg', 300, 'The Air Max 98 rode the wave of its legendary predecessor, debuting with full-length visible Air and fluid design lines. Now it returns, sporting the same signature look and a new run of colours.', 2),
(8, 2, 'NIKE AIRMAX 270 (WHITE) ', 'image\\shoes\\W_NikeAir.jpg', 'image\\shoes\\NikeAirMax270Story.jpg', 180, 'The Nike Air Max 270 Men Shoe is inspired by two icons of big Air: the Air Max 180 and Air Max 93. It features Nike biggest heel Air unit yet for a super-soft ride that feels as impossible as it looks', 2),
(9, 2, 'ADIDAS OZWEEGO (WHITE&BLACK) ', 'image\\shoes\\WB_ozweego.jpg', 'image\\shoes\\WB_ozweegoStory.jpg', 100, 'Inspired by the original 1998 model, OZWEEGO reinvents iconic design elements for the present. This silhouette pays homage to the lightweight and comfortable 90’s cushion runner, offering a new interpretation from the adidas archive.', 1),
(10, 2, 'ADIDAS OZWEEGO (WHITE&PINK) ', 'image\\shoes\\WP_ozwegoo.jpg', 'image\\shoes\\WP_AdidasOzwegooStory.jpg', 100, 'Inspired by the original 1998 model, OZWEEGO reinvents iconic design elements for the present. This silhouette pays homage to the lightweight and comfortable 90’s cushion runner, offering a new interpretation from the adidas archive.', 1),
(11, 2, 'ULTRABOOST UNCAGED (White)', 'image\\shoes\\W_ultraboost.jpg', 'image\\shoes\\W_ultraboostStory.jpg', 220, 'These running shoes have a simplified design to give you a feeling of free and unrestricted movement. The shoes are built with an internally reinforced knit upper for a supportive fit. The responsive midsole and flexible outsole deliver a smooth and comfortable ride.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatId`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`colorid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CusId`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `CusId` (`CusId`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductId`),
  ADD KEY `CatId` (`CatId`),
  ADD KEY `colorid` (`colorid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `colorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`OrderId`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`ProductId`),
  ADD CONSTRAINT `orderdetail_ibfk_3` FOREIGN KEY (`OrderId`) REFERENCES `orders` (`OrderId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CusId`) REFERENCES `customer` (`CusId`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CatId`) REFERENCES `category` (`CatId`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`colorid`) REFERENCES `color` (`colorid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
