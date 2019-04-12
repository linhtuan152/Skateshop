-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2019 lúc 11:30 AM
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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `name_cat` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cat`, `name_cat`, `created_at`, `updated_at`, `status`) VALUES
(1, 'deck', '2019-01-15 17:00:00', NULL, 1),
(2, 'truck', '2019-01-15 17:00:00', '2019-03-05 09:47:03', 1),
(3, 'wheels', '2019-01-15 17:00:00', NULL, 1),
(4, 'bearings', '2019-01-15 17:00:00', NULL, 1),
(5, 'griptape', '2019-01-15 17:00:00', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id_cus` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `status_cus` tinyint(2) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id_cus`, `fullname`, `email`, `phone`, `address`, `password`, `status_cus`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'Tuấn Linh', 'linhtuan152@gmail.com', '0376895670', 'HaiPhong', '$2y$10$exAapS78t0X1iL0kD4QYZe0bFG3J0bUSlx1/ADEkNR3izgpgMcdSG', 1, '2019-03-07 13:58:07', '2019-03-15 18:27:21', '8hJ6EDUnFP5bXkN8bZZ07xoZqiiZdH6QbpCTVJro9uiLyfVX8RHAFdz3GKky'),
(2, 'linhtuan', 'linh@gmail.com', '0123456789', NULL, '$2y$10$dtyGkZjaJ94L./Amw3hSXOxiVdlu39xN5Vt0uPaBONEu7j27lTlqC', 1, '2019-03-14 05:40:22', '2019-03-15 18:31:40', 'S3JyfnIMBS2p129CL35n1CSfQZek2fMFvy8zW2RKBhJ8M2uNcma6lig7qJDC'),
(3, 'tuan linh', 'tuan@gmail.com', '0156798543', 'Ha Noi', '$2y$10$7qcWhbfNJMlpVWZvbHqXzOelv2kprf6vEzQdx3xuFDuB3W.VjEmM2', 1, '2019-04-07 01:54:47', '2019-04-07 01:54:47', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id_ord` int(11) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `total_price` decimal(15,0) NOT NULL,
  `status_ord` int(2) NOT NULL DEFAULT '1',
  `payment` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `delivery` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id_ord`, `id_cus`, `total_price`, `status_ord`, `payment`, `created_at`, `updated_at`, `delivery`) VALUES
(1, 1, '1520000', 1, 'bank', '2019-03-15 09:37:24', '2019-03-15 09:37:24', NULL),
(10, 2, '2150000', 1, 'bank', '2019-03-15 11:28:37', '2019-03-15 11:28:37', NULL),
(14, 2, '1550000', 1, 'cheque', '2019-03-16 00:01:55', '2019-03-16 00:01:55', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ord_detail`
--

CREATE TABLE `ord_detail` (
  `id_pro` int(11) NOT NULL,
  `id_ord` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_pro` int(11) NOT NULL,
  `sale_price_pro` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ord_detail`
--

INSERT INTO `ord_detail` (`id_pro`, `id_ord`, `quantity`, `price_pro`, `sale_price_pro`, `created_at`, `updated_at`) VALUES
(22, 1, 1, 720000, NULL, '2019-03-15 17:37:28', NULL),
(26, 1, 1, 800000, NULL, '2019-03-15 17:37:28', NULL),
(22, 1, 1, 720000, NULL, '2019-03-15 17:40:32', NULL),
(26, 1, 1, 800000, NULL, '2019-03-15 17:40:32', NULL),
(4, 1, 1, 750000, NULL, '2019-03-15 17:58:13', NULL),
(23, 1, 1, 720000, NULL, '2019-03-15 17:58:13', NULL),
(23, 1, 1, 720000, NULL, '2019-03-15 18:02:53', NULL),
(18, 10, 1, 750000, NULL, '2019-03-15 18:28:37', NULL),
(20, 10, 1, 1400000, NULL, '2019-03-15 18:28:37', NULL),
(25, 14, 1, 800000, NULL, '2019-03-16 07:01:55', NULL),
(18, 14, 1, 750000, NULL, '2019-03-16 07:01:55', NULL);

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status_pro` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_pro`, `name_pro`, `id_cat`, `price_pro`, `sale_price_pro`, `img`, `description`, `created_at`, `updated_at`, `status_pro`) VALUES
(1, 'DROSHKY DECK- MIL CAMO', 1, 750000, NULL, 'http://localhost:4567/demo/public/admin/uploads/deck1.jpg', 'SUPREME', '2019-01-30 17:00:00', '2019-03-09 17:00:05', 1),
(2, 'DROSHKY DECK- GUCCCI', 1, 750000, NULL, 'http://localhost:4567/demo/public/admin/uploads/deck2.jpg', 'SUPREME', '2019-01-30 17:00:00', '2019-03-09 17:00:16', 1),
(3, 'DROSHKY DECK- GOLD', 1, 750000, NULL, 'http://localhost:4567/demo/public/admin/uploads/deck3.jpg', 'SUPREME', '2019-01-30 17:00:00', '2019-03-09 17:00:25', 1),
(4, 'DROSHKY DECK- PORCSHE', 1, 750000, NULL, 'http://localhost:4567/demo/public/admin/uploads/deck4.jpg', 'SUPREME', '2019-01-30 17:00:00', '2019-03-09 17:00:34', 1),
(17, 'BLANK TRUCKS', 2, 500000, NULL, 'http://localhost:4567/demo/public/admin/uploads/truck1.jpg', 'BLANK', '2019-03-06 05:23:06', '2019-03-09 16:58:51', 1),
(18, 'BDSkate - LOGO BLUE', 2, 750000, NULL, 'http://localhost:4567/demo/public/admin/uploads/truck2.jpg', 'BD SKATE', '2019-03-06 05:24:08', '2019-03-06 05:24:08', 1),
(19, 'BDSkate - LOGO BLACK YELLOW', 2, 750000, NULL, 'http://localhost:4567/demo/public/admin/uploads/truck3.jpg', 'BD SKATE', '2019-03-06 05:24:50', '2019-03-06 05:24:50', 1),
(20, 'IDEPENDENT - ANDREW REYNOLDS', 2, 1400000, NULL, 'http://localhost:4567/demo/public/admin/uploads/truck4.jpg', 'INDEPENDENT', '2019-03-06 05:25:59', '2019-03-06 05:25:59', 1),
(21, 'BONES STF HOMOKI FORBIDDEN', 3, 720000, NULL, 'http://localhost:4567/demo/public/admin/uploads/wheel1.jpg', 'BONES', '2019-03-06 06:27:26', '2019-03-07 13:35:11', 1),
(22, 'BONES STF DEEP EYE', 3, 720000, NULL, 'http://localhost:4567/demo/public/admin/uploads/wheel2.jpg', 'BONES', '2019-03-06 22:22:11', '2019-03-06 22:22:11', 1),
(23, 'BONES STF DECENZO', 3, 720000, NULL, 'http://localhost:4567/demo/public/admin/uploads/wheel3.jpg', 'BONES', '2019-03-06 22:22:48', '2019-03-06 22:22:48', 1),
(24, 'BONES 100S OG BLACK', 3, 680000, NULL, 'http://localhost:4567/demo/public/admin/uploads/wheel4.jpg', 'BONES', '2019-03-06 22:24:11', '2019-03-06 22:24:11', 1),
(25, 'DAEWON SONG DONUT BOX', 4, 800000, NULL, 'http://localhost:4567/demo/public/admin/uploads/bearing1.jpg', 'ANDALE', '2019-03-06 22:35:06', '2019-03-07 13:31:47', 1),
(26, 'MARC JOHNSON PRO', 4, 800000, NULL, 'http://localhost:4567/demo/public/admin/uploads/bearing2.jpg', 'ANDALE', '2019-03-06 22:36:06', '2019-03-07 13:31:17', 1),
(27, 'SWISS', 4, 850000, NULL, 'http://localhost:4567/demo/public/admin/uploads/bearing3.jpg', 'ANDALE', '2019-03-06 22:36:39', '2019-03-07 13:31:38', 1),
(28, 'SWISS CERAMIC', 4, 2200000, NULL, 'http://localhost:4567/demo/public/admin/uploads/bearing4.jpg', 'BONES', '2019-03-06 22:39:10', '2019-03-06 22:39:10', 1);

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
  ADD KEY `uniq` (`id_cus`) USING BTREE;

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
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id_ord` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
