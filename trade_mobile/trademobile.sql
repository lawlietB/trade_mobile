-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 04:42 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trademobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(8) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `idphone` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `phone`, `email`, `address`, `idphone`) VALUES
(23, 'BuiLeHuynh', '0973154950', 'binhnguyen2805@gmail.com', 'Ho Chi Minh', 'Nok1611171479397440'),
(30, 'Dau Thi Kim Oanh', '0987554394', 'kimoanh@gmail.com', 'Ha Tinh', 'HTC1611181479431025'),
(31, 'Bui Thanh Thien', '0123456789', 'thien@gmail.com', 'BÃ¬nh DÆ°Æ¡ng', 'Sam1611181479431301'),
(32, 'BuiLeHuynh', '0973154950', 'binhnguyen2805@gmail.com', 'Ho Chi Minh', 'Nok1611191479520994'),
(33, 'Huynh', '0973154950', 'binhnguyen2805@gmail.com', 'Ho Chi Minh', 'Nok1611191479521238'),
(34, 'Huynh', '0973154950', 'binhnguyen2805@gmail.com', 'Ho Chi Minh', 'Nok1611191479521374'),
(35, 'Huynh', '0973154950', 'binhnguyen2805@gmail.com', 'Ho Chi Minh', 'Nok1611191479521764'),
(36, 'Huynh', '0973154950', 'binhnguyen2805@gmail.com', 'Ho Chi Minh', 'Nok1611191479521842'),
(37, 'KimOanh', '0987554394', 'kimoanh@gmail.com', 'Ha Tinh', 'HTC1611191479521889'),
(38, 'KimOanh', '0987554394', 'kimoanh@gmail.com', 'Ha Tinh', 'HTC1611191479522127'),
(39, 'Bui Thanh Thien', '01695976001', 'Creeperthien@gmail.com', 'Binh Duong', 'Nok1611191479526421'),
(40, 'Bui Khac Han', '0984662403', 'buikhachan@gmail.com', 'Binh Duong', 'Asu1611191479526726'),
(41, 'Le Thi Quyen', '01654541595', 'quyenle@gmail.com', 'Binh Duong', 'Opp1611191479526797');

-- --------------------------------------------------------

--
-- Table structure for table `_product`
--

CREATE TABLE `_product` (
  `phonename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `imglink` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `idphone` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `_product`
--

INSERT INTO `_product` (`phonename`, `brand`, `price`, `quality`, `age`, `imglink`, `idphone`) VALUES
('Asus Zenfone 2', 'Asus', 300, 3, 4, './image/asus-zenfone-max-200x200.jpg', 'Asu1611191479526726'),
('HTC one M8', 'HTC', 300, 2, 6, './image/htc-one-me-600-277-4.jpg', 'HTC1611191479521889'),
('HTC one M8', 'HTC', 300, 2, 6, './image/htc-one-me-600-277-4.jpg', 'HTC1611191479522127'),
('Lumia Nokia 625', 'Nokia', 200, 4, 6, './image/lumia.jpg', 'Nok1611191479521374'),
('Nokia Lumia H625', 'Nokia', 200, 4, 4, './image/lumia.jpg', 'Nok1611191479521842'),
('Nokia Dap Da', 'Nokia', 100, 1, 6, './image/Nokia_130.jpg', 'Nok1611191479526421'),
('Oppo new', 'Oppo', 150, 3, 4, './image/oppo-f1s-600-277-1.jpg', 'Opp1611191479526797');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_seller_product` (`idphone`);

--
-- Indexes for table `_product`
--
ALTER TABLE `_product`
  ADD PRIMARY KEY (`idphone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
