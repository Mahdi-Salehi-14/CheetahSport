-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2023 at 06:47 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheetah_sport`
--
CREATE DATABASE IF NOT EXISTS `cheetah_sport` DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci;
USE `cheetah_sport`;

-- --------------------------------------------------------

--
-- Table structure for table `bookmark_product`
--

DROP TABLE IF EXISTS `bookmark_product`;
CREATE TABLE IF NOT EXISTS `bookmark_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `bookmarkstatus` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bookmark_product`
--

INSERT INTO `bookmark_product` (`id`, `userid`, `productid`, `bookmarkstatus`) VALUES
(1, 1, 1, 'bookmark-on'),
(2, 1, 2, 'bookmark-off'),
(3, 1, 4, 'bookmark-on'),
(4, 5, 3, 'bookmark-on'),
(5, 5, 4, 'bookmark-on'),
(6, 5, 7, 'bookmark-on');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `productid` int(11) NOT NULL,
  `commenttext` text COLLATE utf8_persian_ci NOT NULL,
  `confirmation` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `productid`, `commenttext`, `confirmation`) VALUES
(1, 'Mahdi', 2, 'خوب بود راضی بودم', 'confirmed'),
(2, 'Ali', 2, 'خوشم نیومد', 'confirmed'),
(3, 'Aria', 4, 'قیمتش یکم بالاس', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `like_product`
--

DROP TABLE IF EXISTS `like_product`;
CREATE TABLE IF NOT EXISTS `like_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `likestatus` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `like_product`
--

INSERT INTO `like_product` (`id`, `userid`, `productid`, `likestatus`) VALUES
(1, 1, 1, 'dislike'),
(2, 1, 2, 'like'),
(3, 1, 4, 'like'),
(4, 1, 3, 'like'),
(5, 5, 1, 'like'),
(6, 5, 2, 'like'),
(7, 5, 7, 'like'),
(8, 1, 22, 'like');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `textarea` text COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `title`, `email`, `number`, `textarea`) VALUES
(1, 'مشکل ورود به سایت', 'Mahdi2015GAD@Gmail.com', '09162422880', 'سلام، من نمیتونم به سایت وارد بشم');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productnumber` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `orderid`, `productid`, `productnumber`) VALUES
(1, 3, 1, 3),
(2, 3, 2, 2),
(3, 3, 4, 1),
(4, 4, 3, 3),
(5, 4, 2, 2),
(6, 5, 2, 2),
(7, 5, 3, 1),
(8, 6, 7, 2),
(9, 6, 8, 1),
(10, 7, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `postalcode` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `transport` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `userid`, `address`, `postalcode`, `transport`, `payment`) VALUES
(5, 1, 'Esfahan', '1234567895', 'in-person', 'door-to-door'),
(4, 1, 'اصفهان', '1234567895', 'mail', 'internet'),
(3, 1, 'اصفهان', '1234567895', 'mail', 'internet'),
(6, 5, 'esfahan', '1254873695', 'mail', 'door-to-door'),
(7, 3, 'اصفهان', '1234567895', 'mail', 'internet');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producttitle` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `productname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `productdescription` text COLLATE utf8_persian_ci NOT NULL,
  `productquantity` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `productprice` int(11) NOT NULL,
  `productimg` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `producttitle`, `productname`, `productdescription`, `productquantity`, `category`, `brand`, `productprice`, `productimg`) VALUES
(1, 'Adidas 2021 UCL Ball', 'Adidas 2021 UCL Ball', 'توپ آدیداس\r\n\r\nاصل\r\n\r\nمدل لیگ قهزمانان اروپا\r\n', 20, 'sportsequipment', 'adidas', 2000000, 'Images/Adidas 2021 UCL Ball - 4.jpg'),
(2, 'Adidas Men Badge Of Sport Tee', 'Adidas Men Badge Of Sport Tee', 'تیشرت آدیداس خاکستری\r\n\r\nاصل', 20, 'mensportswear', 'adidas', 3500000, 'Images/Adidas Men Badge Of Sport Tee - 1.jpg'),
(3, 'Adidas Multix Shose', 'Adidas Multix Shose', 'کفش ورزشی آدیداس\r\n\r\nمناسب دویدن و پیاده روی', 20, 'sportshoes', 'adidas', 4000000, 'Images/Adidas Multix Shose - 3.jpg'),
(4, 'Adidas Women Aeroready Lightweight Long Sleeve Hooded Tee', 'Adidas Women Aeroready Lightweight Long Sleeve Hooded Tee', 'پیراهن زنانه آدیداس\r\n\r\nجنس نخی', 20, 'womensportswear', 'adidas', 3500000, 'Images/Adidas Women Aeroready Lightweight Long Sleeve Hooded Tee - 1.jpg'),
(8, 'Nike Dri-FIT', 'Nike Dri-FIT', 'هودی نایک\r\n\r\nجنس نخ و پلی استر', 20, 'mensportswear', 'nike', 5000000, 'Images/Nike Dri-FIT - 1.jpg'),
(7, 'Nike Air Presto', 'Nike Air Presto', 'کفش وزرشی نایک\r\n\r\nمناسب دویدن و پیاده روی', 20, 'sportshoes', 'nike', 7500000, 'Images/Nike Air Presto - 5.jpg'),
(9, 'Nike Dri-FIT Academy', 'Nike Dri-FIT Academy', 'شلوار ورزشی مردانه\r\n\r\nجنس نخ و پلی استر\r\n\r\n', 20, 'mensportswear', 'nike', 5500000, 'Images/Nike Dri-FIT Academy - 1.jpg'),
(10, 'Nike Free Metcon 3 Shose', 'Nike Free Metcon 3 Shose', 'کفش وزرشی نایک\r\n\r\nمناسب دویدن و پیاده روی', 20, 'sportshoes', 'nike', 8000000, 'Images/Nike Free Metcon 3 Shose - 4.jpg'),
(11, 'Nike Futsal Pro', 'Nike Futsal Pro', 'توپ فوتسال نایک\r\n\r\nمناسب سالن و چمن مصنوعی', 20, 'sportsequipment', 'nike', 2000000, 'Images/Nike Futsal Pro - 1.jpg'),
(12, 'Nike Sportswear', 'Nike Sportswear', 'تی شرت نایک\r\n\r\nجنس نخی', 20, 'mensportswear', 'nike', 3500000, 'Images/Nike Sportswear - 1.jpg'),
(13, 'Nike Sportswear Gym Vintage', 'Nike Sportswear Gym Vintage', 'هودی نایک زنانه\r\n\r\nجنس نخ و پلی استر', 20, 'womensportswear', 'nike', 5000000, 'Images/Nike Sportswear Gym Vintage - 1.jpg'),
(14, 'Reebok FX1626 Shose', 'Reebok FX1626 Shose', 'کفش وزرشی ریبوک\r\n\r\nمناسب دویدن و پیاده روی', 20, 'sportshoes', 'reebok', 7000000, 'Images/Reebok FX1626 Shose - 3.jpg'),
(15, 'Reebok Men Jersey Tee', 'Reebok Men Jersey Tee', 'تی شرت ریبوک\r\nجنس نخی', 20, 'mensportswear', 'reebok', 3000000, 'Images/Reebok Men Jersey Tee - 1.jpg'),
(16, 'Reebok One Series Wrist Gloves', 'Reebok One Series Wrist Gloves', 'دستکش ریبوک\r\n\r\nاصل\r\n\r\nنخی تو پنبه ای', 20, 'sportsequipment', 'reebok', 1000000, 'Images/Reebok One Series Wrist Gloves - 1.jpg'),
(17, 'Reebok Women Retro Overdize Hoodie', 'Reebok Women Retro Overdize Hoodie', 'هودی ریبوک زنانه\r\nجنس نخ و پلی استر', 20, 'womensportswear', 'reebok', 5500000, 'Images/Reebok Women Retro Overdize Hoodie - 1.jpg'),
(18, 'UA Camo 2.0 Cap', 'UA Camo 2.0 Cap', 'کلاه نقاب دار آندر آرمور\r\n\r\nجنس پارچه نخی', 20, 'sportsequipment', 'underarmour', 1500000, 'Images/UA Camo 2.0 Cap - 1.png'),
(19, 'UA Legacy Windbreaker Jacket', 'UA Legacy Windbreaker Jacket', 'ژاکت ورزشی آندر آرمور\r\n\r\nجنس نخ و پلی استر', 20, 'mensportswear', 'underarmour', 4500000, 'Images/UA Legacy Windbreaker Jacket - 1.png'),
(20, 'UA Phantom 2 ABC Shose', 'UA Phantom 2 ABC Shose', 'کفش وزرشی آندر آرمور\r\n\r\nمناسب دویدن و پیاده روی', 20, 'sportshoes', 'underarmour', 7000000, 'Images/UA Phantom 2 ABC Shose - 4.png'),
(21, 'UA Team Issue Graphic T-Shirt', 'UA Team Issue Graphic T-Shirt', 'تی شرت آندر آرمور\r\n\r\nجنس نخی', 20, 'mensportswear', 'underarmour', 3000000, 'Images/UA Team Issue Graphic T-Shirt - 1.png'),
(22, 'UA Undeniable Duffel 4.0 Small Duffle Bag', 'UA Undeniable Duffel 4.0 Small Duffle Bag', 'کیف ورزشی آندر آرمور\r\n\r\nمناسب استخر و دیگر مکان های ورزشی', 20, 'sportsequipment', 'underarmour', 2500000, 'Images/UA Undeniable Duffel 4.0 Small Duffle Bag - 1.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_basket`
--

DROP TABLE IF EXISTS `product_basket`;
CREATE TABLE IF NOT EXISTS `product_basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productnumber` int(11) NOT NULL,
  `basketstatus` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product_basket`
--

INSERT INTO `product_basket` (`id`, `userid`, `productid`, `productnumber`, `basketstatus`) VALUES
(1, 1, 1, 3, 'completed'),
(2, 1, 2, 2, 'completed'),
(3, 1, 4, 1, 'completed'),
(4, 1, 3, 3, 'completed'),
(5, 1, 2, 2, 'completed'),
(6, 1, 2, 2, 'completed'),
(7, 1, 3, 1, 'completed'),
(8, 5, 7, 2, 'completed'),
(9, 5, 8, 1, 'completed'),
(26, 3, 1, 4, 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `site_visit`
--

DROP TABLE IF EXISTS `site_visit`;
CREATE TABLE IF NOT EXISTS `site_visit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=324 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `site_visit`
--

INSERT INTO `site_visit` (`id`, `visit_count`) VALUES
(1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `kodmeli` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kodmeli` (`kodmeli`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `number` (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `gender`, `kodmeli`, `email`, `number`, `password`, `role`) VALUES
(1, 'Mohammad Mahdi', 'Salehi', 'male', '1273935071', 'Mahdi2015GAD@Gmail.com', '09162422880', '13811206mahdi14', 'adminuser'),
(2, 'Ali', 'Torkashvand', 'male', '1284953669', 'AliTor@Yahoo.com', '09309831188', '1234', 'blockuser'),
(3, 'Melika', 'Farbod', 'female', '1275896653', 'Melika@Gmail.com', '09135844636', '123456', 'normaluser'),
(4, 'Ario', 'Hoseini', 'male', '1235465461', 'Ario@Gmail.com', '09162544585', '1234', 'normaluser'),
(5, 'hgdsfs', 'sdfsf', 'female', '12356', 'user@Gmail.com', '09162522555', '1234', 'deleteuser');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
