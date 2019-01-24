-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 24, 2019 lúc 11:23 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `skateshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(100) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_phone` text,
  `ad_username` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL,
  `ad_status` int(2) NOT NULL DEFAULT '1',
  `created_ad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `name_cat` varchar(100) NOT NULL,
  `created_cat` date DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cat`, `name_cat`, `created_cat`, `status`) VALUES
(1, 'deck', '2019-01-16', 1),
(2, 'truck', '2019-01-16', 1),
(3, 'wheels', '2019-01-16', 1),
(4, 'bearings', '2019-01-16', 1),
(5, 'griptape', '2019-01-16', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id_cus` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `status_cus` tinyint(2) NOT NULL DEFAULT '1',
  `created_cus` date NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_ord` int(11) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `total_amout` int(11) NOT NULL,
  `total_price` decimal(15,0) NOT NULL,
  `status_ord` int(2) NOT NULL DEFAULT '1',
  `payment` varchar(200) NOT NULL,
  `created_ord` date NOT NULL,
  `delivery` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ord_detail`
--

CREATE TABLE `ord_detail` (
  `id_pro` int(11) NOT NULL,
  `id_ord` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price_pro` int(11) NOT NULL,
  `price_sale_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_pro` int(11) NOT NULL,
  `name_pro` varchar(255) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `price_pro` int(15) NOT NULL,
  `sale_price_pro` int(15) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `description` text,
  `created_pro` date DEFAULT NULL,
  `status_pro` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`),
  ADD UNIQUE KEY `uniq` (`name_cat`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_ord`),
  ADD UNIQUE KEY `uniq` (`id_cus`);

--
-- Chỉ mục cho bảng `ord_detail`
--
ALTER TABLE `ord_detail`
  ADD KEY `pro_orddt` (`id_pro`),
  ADD KEY `cat_orddt` (`id_ord`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pro`),
  ADD UNIQUE KEY `uniq` (`name_pro`),
  ADD KEY `pro_cat` (`id_cat`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_ord` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_cus`) REFERENCES `customer` (`id_cus`);

--
-- Các ràng buộc cho bảng `ord_detail`
--
ALTER TABLE `ord_detail`
  ADD CONSTRAINT `ord_orddt` FOREIGN KEY (`id_ord`) REFERENCES `order` (`id_ord`),
  ADD CONSTRAINT `pro_orddt` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_pro`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `pro_cat` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
