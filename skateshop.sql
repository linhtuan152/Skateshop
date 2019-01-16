/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : skateshop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-01-16 20:58:31
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(100) NOT NULL,
  `ad_email` varchar(100) NOT NULL,
  `ad_phone` text,
  `ad_username` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL,
  `ad_status` int(2) NOT NULL DEFAULT '1',
  `created_ad` date NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(100) NOT NULL,
  `created_cat` date DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_cat`),
  UNIQUE KEY `uniq` (`name_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO category VALUES ('1', 'deck', '2019-01-16', '1');
INSERT INTO category VALUES ('2', 'truck', '2019-01-16', '1');
INSERT INTO category VALUES ('3', 'wheels', '2019-01-16', '1');
INSERT INTO category VALUES ('4', 'bearings', '2019-01-16', '1');
INSERT INTO category VALUES ('5', 'griptape', '2019-01-16', '1');

-- ----------------------------
-- Table structure for `customer`
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id_cus` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `status_cus` tinyint(2) NOT NULL DEFAULT '1',
  `created_cus` date NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id_ord` int(11) NOT NULL AUTO_INCREMENT,
  `id_cus` int(11) NOT NULL,
  `total_amout` int(11) NOT NULL,
  `total_price` decimal(15,0) NOT NULL,
  `status_ord` int(2) NOT NULL DEFAULT '1',
  `payment` varchar(200) NOT NULL,
  `created_ord` date NOT NULL,
  `delivery` varchar(200) NOT NULL,
  PRIMARY KEY (`id_ord`),
  UNIQUE KEY `uniq` (`id_cus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order
-- ----------------------------

-- ----------------------------
-- Table structure for `ord_detail`
-- ----------------------------
DROP TABLE IF EXISTS `ord_detail`;
CREATE TABLE `ord_detail` (
  `id_pro` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `price_pro` int(11) NOT NULL,
  `price_sale_pro` int(11) DEFAULT NULL,
  KEY `pro_orddt` (`id_pro`),
  KEY `cat_orddt` (`id_cat`),
  CONSTRAINT `cat_orddt` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`),
  CONSTRAINT `pro_orddt` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id_pro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ord_detail
-- ----------------------------

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id_pro` int(11) NOT NULL AUTO_INCREMENT,
  `name_pro` varchar(255) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `price_pro` int(15) NOT NULL,
  `sale_price_pro` int(15) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `description` text,
  `created_pro` date DEFAULT NULL,
  `status_pro` tinyint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_pro`),
  UNIQUE KEY `uniq` (`name_pro`),
  KEY `pro_cat` (`id_cat`),
  CONSTRAINT `pro_cat` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
