-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 09:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homteq_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Asus', 'asus_small.png', 'asus_large.png', 'One of the best things about Asus laptops is that there are premium laptops and powerful gaming devices.', 'One of the best things about Asus laptops is that there are premium laptops and powerful gaming devices. Yet for budget buyers, Asus also designs some brilliant budget and affordable laptops as well. The Asus VivoBook S15 is the best budget Asus laptop that runs Windows 10, boasting decent specs – including an Intel Core i7 processor – considering the price, making it a great productivity tool. Meanwhile, its 15-inch screen offers full 1080p for enjoying movies and TV shows on.', '1546.65', 10),
(2, 'Dell', 'dell_small.png', 'dell_large.png', 'The highest-resolution 15\" laptop on the planet features an optional Quad HD+ (3200x1800) touch display that is 5x the resolution of a standard HD display.', 'The XPS 15 2-in-1 is built with ultra-thin GORE™ Thermal Insulation, which provides thermal conductivity levels lower than air in a thin, flexible format, to keep your system cool while it works hard. Dual large aspect ratio liquid crystal polymer fans maximize airflow in your 2-in-1, while three composite heat pipes are utilized to quickly cool the CPU under intense workloads. To keep the user cool, synthetic graphite heat spreaders help spread heat across the device while GORE Thermal Insulation helps to insulate that heat from the end user. These advanced thermal solutions maximize performance in the thinnest form factor possible', '1004.54', 7),
(3, 'Lenovo', 'dell_small.png', 'dell_large.png', 'The best Lenovo laptops consistently rank near the top of our overall best laptops rankings. From the excellent ThinkPad business laptops to the sleek Yoga notebook and affordable Ideapad laptops, Lenovo offers something for all types of users. ', 'The ThinkPad X1 Carbon (7th Gen) is a an excellent laptop for anyone on the go, not just business users. In fact, the X1 Carbon isn\'t just the best Lenovo laptop, it is also one of the best laptops of 2020 and the best overall business laptop. This extremely-light yet durable laptop lasts nearly 10 hours on a charge and has one of the best keyboards you\'ll find on any device. \r\n\r\nAn optional 4K display is absolutely stunning, but takes a toll on battery life. This 14-inch Ultrabook also packs a powerful, Intel 8th Gen Core series CPU and the latest model has seriously improved speakers and some nifty security features, like a webcam cover. ', '985.99', 4),
(4, 'Macbook', 'macbook_small.png', 'macbook_large.png', 'It features a touch-sensitive OLED display strip located in place of the function keys, a Touch ID sensor integrated with the power button, a butterfly mechanism keyboard similar to the MacBook, and four USB-C ports that also serve as Thunderbolt 3 ports.', 'The entry-level 13-inch MacBook Pro is among the best MacBooks you can buy today. It packs a fast 8th-gen Core i5 processor and more than 10 hours of battery life in a fairly light 3-pound design. You also get a Touch ID sensor for unlocking your Mac with ease, a bright and sharp display and powerful speakers. \r\n\r\nYes, we\'d like to see more Thunderbolt ports than just two, but you\'ll need to step up to the $1,799 configuration for that perk. ', '1845.35', 5),
(5, 'MSI', 'msi_small.png', 'msi_large.png', 'MSI Gaming laptops offer you an unrivaled experience when it comes to PC gaming.\r\nUtilizing the latest processors and graphics, you’ll have over the top performance to take your game to the next level.\r\nWith MSI’s exclusive technologies like our renowned cooling system, Cooler Boost, and all-inclusive Dragon Center software,\r\nyou’ll have all the tools you need to conquer your enemies.', 'MSI\'s Stealth has long been one of the closest things to a proper gaming Ultrabook, and the GS65 is an absolute marvel of engineering. It offers an 8th Gen Intel six-core i7 processor, up to 32GB of RAM, GPUs from the GTX 1060 up to the RTX 2070 from NVIDIA, and a useful Thunderbolt 3 port. Gamers will also love the 144Hz refresh rate display. It\'s certainly a piece of laptop eye candy to look at.', '2199.99', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(4) NOT NULL,
  `userType` varchar(1) NOT NULL,
  `userFName` varchar(50) NOT NULL,
  `userSName` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userPostCode` varchar(50) NOT NULL,
  `userTelNo` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) VALUES
(1, '', 'Akshaan', 'Bandara', '275/6, Makola South', '11640', '0770502135', 'akshaanbandara@gmail.com', '123'),
(2, '', 'Dileesha', 'Bandara', '275/6, Makola South', '11640', '0770502135', 'akshan.2018597@iit.ac.lk', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
