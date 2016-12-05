-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 03:58 AM
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
('Asus Zenfone 2', 'Asus', 300, 3, 4, './image/83201561656PM_635_asus_zenfone_2_laser_ze550kl.jpeg', 'Asu1612031480770037'),
('HTC one M8', 'HTC', 400, 2, 6, './image/htc-one-me-600-277-4.jpg', 'HTC1612031480768051'),
('Huawei y5', 'Huewei', 470, 2, 6, './image/huawei-y5-ii-6-300x300.jpg', 'Hue1612041480815300'),
('Huawei', 'Huewei', 178, 3, 4, './image/huawei.jpg', 'Hue1612041480815392'),
('iphone 5', 'Iphone', 450, 3, 4, './image/topic_iphone_5.png', 'Iph1612031480768386'),
('iphone 6', 'Iphone', 430, 2, 4, './image/iphone 6.png', 'Iph1612031480770642'),
('iphone 6 plus', 'Iphone', 6700000, 2, 1, './image/iphone 6.png', 'Iph1612031480770804'),
('Iphone 7', 'Iphone', 600, 1, 6, './image/iphone 7.jpg', 'Iph1612041480815447'),
('Iphone 4 new', 'Iphone', 120, 1, 1, './image/iPhone4.4e852.jpg', 'Iph1612041480815595'),
('lg', 'LG', 370, 4, 4, './image/lg.jpg', 'LG1612031480768657'),
('Spirt', 'LG', 420, 2, 6, './image/LG_Spirt.jpg', 'LG1612041480815690'),
('Lumia Nokia 625', 'Nokia', 20, 4, 6, './image/lumia.jpg', 'Nok1612031480767704'),
('Nokia Dap Da', 'Nokia', 120, 2, 6, './image/nokia-105-id19476.jpg', 'Nok1612031480768499'),
('lumia 730', 'Nokia', 230, 1, 1, './image/lumia 730.jpg', 'Nok1612031480770547'),
('Motorola', 'Nokia', 50, 2, 6, './image/motorolat28_141739064897_640x360.jpg', 'Nok1612041480816350'),
('Oppo new', 'Oppo', 123, 3, 6, './image/oppo-a33.jpg', 'Opp1612031480770305'),
('sumsung galaxy', 'Samsung', 300, 3, 6, './image/sumsung.jpg', 'Sam1612031480768622'),
('sumsung galaxy tab 2', 'Samsung', 311, 2, 6, './image/', 'Sam1612031480770385'),
('sumsung galaxy tab 2', 'Samsung', 240, 2, 6, './image/sumsung tab.jpg', 'Sam1612031480770900'),
('Sam Sung note 7', 'Samsung', 560, 2, 1, './image/samsung note 7spiralbinder-2016-18.jpg', 'Sam1612041480815248'),
('Sam Sung note 7', 'Samsung', 440, 1, 6, './image/samsung note 7spiralbinder-2016-18.jpg', 'Sam1612041480815557'),
('Viettel', 'Samsung', 140, 3, 4, './image/samsungfwm1380275057.jpg', 'Sam1612041480816515'),
('Sony xperia c5', 'Sony', 400, 2, 6, './image/sony-xperia-c5-ultra-2.jpg', 'Son1612041480815512'),
('Xperia', 'Sony', 510, 1, 6, './image/sony-xperia-m5-single-sim-300x300.jpg', 'Son1612041480816149'),
('Erisson', 'Sony', 100, 2, 6, './image/Sony-Ericsson-W900-7.jpg', 'Son1612041480816415');

-- --------------------------------------------------------

--
-- Table structure for table `_trade`
--

CREATE TABLE `_trade` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idphone` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `_trade`
--

INSERT INTO `_trade` (`username`, `idphone`) VALUES
('BuiKhacHan', 'Asu1612031480770037'),
('BuiKhacHan', 'Son1612041480816149'),
('BuiLeHuynh', 'Nok1612031480767704'),
('BuiLeHuynh', 'Sam1612031480770900'),
('BuiLeHuynh', 'Sam1612041480815248'),
('BuiThienHao', 'Iph1612031480768386'),
('DuongThiThao', 'Hue1612041480815300'),
('DuongThiThao', 'Sam1612031480768622'),
('heo con', 'Iph1612031480770804'),
('heo con', 'Sam1612041480816515'),
('KimOanh', 'HTC1612031480768051'),
('LeThiQuyen', 'Opp1612031480770305'),
('LyTieuLong', 'Nok1612041480816350'),
('LyTieuLong', 'Son1612041480816415'),
('NguyenVanThong', 'LG1612031480768657'),
('NguyenVanThong', 'Sam1612041480815557'),
('NguyenVanThong', 'Son1612041480815512'),
('thien', 'Iph1612041480815595'),
('thien', 'LG1612041480815690'),
('thien', 'Nok1612031480768499'),
('trinhtrongtin', 'Iph1612031480770642'),
('trinhtrongtin', 'Iph1612041480815447'),
('TruongVinhTrong', 'Nok1612031480770547'),
('TruongVoKy', 'Hue1612041480815392'),
('TruongVoKy', 'Sam1612031480770385');

-- --------------------------------------------------------

--
-- Table structure for table `_user`
--

CREATE TABLE `_user` (
  `id` int(6) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `_user`
--

INSERT INTO `_user` (`id`, `username`, `password`, `phone`, `email`, `address`) VALUES
(18, 'BuiLeHuynh', '1234567890', '0973154950', 'binhnguyen2805@gmail.com', 'Binh Duong'),
(20, 'KimOanh', '1234567890', '0987554394', 'kimoanh@gmail.com', 'Ha Tinh'),
(21, 'thien', 'thien123', '01695976001', 'Creeperthien@gmail.com', 'Binh Duong'),
(22, 'BuiThienHao', '123456', '0123342423', 'haomap@gmail.com', 'New York'),
(23, 'BuiKhacHan', 'hanbuikhac', '0984662403', 'buikhachan@gmail.com', 'Nghe An'),
(24, 'LeThiQuyen', 'quyenle', '01654541595', 'quyenle@gmail.com', 'Nghe An'),
(25, 'TruongVinhTrong', 'trongtruong', '0987654321', 'truongtrong@gmail.com', 'Tay Ha'),
(26, 'TruongVoKy', '1234567890', '0432134353', 'kytruong@gmail.com', 'Y Thien Do Long Ky'),
(27, 'DuongThiThao', 'thaoduong', '0967321423', 'duongthao@gmail.com', 'Nghe An'),
(28, 'NguyenVanThong', 'thongthao', '09734132569', 'thongnguyen@gmail.com', 'Nghe An'),
(29, 'trinhtrongtin', 'tintrinh', '08765356643', 'trinhtt@uit.edu.vn', 'Ho Chi Minh'),
(30, 'heo con', '@123456', '09888888', '14520650@gm.uit.edu.vn', 'ahihi'),
(31, 'LyTieuLong', 'lytieulong', '05431234572', 'lytieulong@longmail.com', 'America');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `_product`
--
ALTER TABLE `_product`
  ADD PRIMARY KEY (`idphone`);

--
-- Indexes for table `_trade`
--
ALTER TABLE `_trade`
  ADD PRIMARY KEY (`username`,`idphone`);

--
-- Indexes for table `_user`
--
ALTER TABLE `_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_user`
--
ALTER TABLE `_user`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
