-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2020 at 08:09 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bcs350`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ProductID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ProductTypeID` int(11) NOT NULL,
  `ProductName` varchar(80) NOT NULL,
  `ProductDescription` varchar(200) NOT NULL,
  `ProductPrice` int(11) NOT NULL,
  `ProductImage` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductTypeID`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductImage`) VALUES
(33, 2, 'Iphone X', '4GB 64GB A12', 849, 'iphone.jpg'),
(32, 2, 'Galaxy Note 9', '6GB 512GB Snapdragon 835', 1099, 'note.jpg'),
(31, 3, 'Sony', '75\" 4K UHD HDR', 4499, 'sony.jpg'),
(29, 1, 'Lenovo', '6GB 512GB Core i5', 599, 'lenovo.jpg'),
(28, 1, 'HP', '8GB 512 GB Core i7', 800, 'hp.jpg'),
(27, 1, 'HP', '8GB 512 GB Core i7', 800, 'hp.jpg'),
(26, 2, 'Samsung Galaxy S9', '4GB 64GB SNAPDRAGON 835 ', 599, 'galaxy.jpg'),
(19, 1, 'Alienware', '8GB 512 GB Core i7', 700, 'alienware.jpg'),
(35, 3, 'Sharp', '55\" 4K HDR Roku', 429, 'sharp.jpg'),
(22, 1, 'Asus', '16GB 1TB Core i9', 2200, 'asus.jpg'),
(34, 2, 'Sony Xperia', '4GB 64GB SNAPDRAGON 835 ', 849, 'xperia.jpg'),
(24, 2, 'Motorola G5', '3GB 32GB Snapdragon 625', 200, 'motorola.jpg'),
(25, 3, 'Samsung', '65\" 4K HDR', 649, 'samsung1.jpg'),
(36, 2, 'LG G6', '3GB 32GB Snapdragon 625', 699, 'lgg6.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
