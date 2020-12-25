-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 24, 2020 at 08:37 PM
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
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `rowid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `coursecode` varchar(10) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `days` varchar(8) NOT NULL,
  `time` varchar(16) NOT NULL,
  `credits` int(11) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`rowid`, `coursecode`, `coursename`, `days`, `time`, `credits`) VALUES
(1, 'BCS102', 'Computer Concepts and Applications', 'MWF', '9 - 9:50am', 3),
(2, 'BCS109', 'Introduciton to Programming', 'NW', '8 - 9:15am', 3),
(3, 'BCS120', 'Foundations of Computer Programming I', 'MW', '9:25 - 10:40am', 3),
(4, 'BCS130', 'Website Development', 'TR', '8 - 9:15am', 3),
(5, 'BCS160', 'Computers, Society and Technology', 'MW', '10:50 - 12:15pm', 3),
(6, 'BCS208', 'Networking Foundations I', 'TR', '5:55 - 7:35pm', 3),
(7, 'BCS209', 'Routing & Switching Essentials', 'R', '8:30 - 10:35am', 3),
(8, 'BCS215', 'UNIX Operation Systems', 'RMTE', '9 - 11:40am', 3),
(9, 'BCS230', 'Foundations of Computer Programming II', 'RMTE', '9:25 - 10:40am', 3),
(10, 'BCS260', 'Introduciton to Database Systems', 'TR', '7:20 - 8:35pm', 3);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
CREATE TABLE IF NOT EXISTS `enrollment` (
  `rowid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `student` int(10) UNSIGNED NOT NULL,
  `class` int(10) UNSIGNED NOT NULL,
  `status` char(12) NOT NULL,
  `grade` char(2) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`rowid`, `student`, `class`, `status`, `grade`) VALUES
(1, 1, 2, 'Passed', 'B'),
(2, 3, 7, 'Failed', 'F'),
(3, 3, 5, 'Failed', 'I'),
(4, 8, 5, 'Passed', 'C'),
(5, 8, 9, 'Passed', 'D'),
(6, 4, 1, 'Passed', 'B'),
(7, 4, 7, 'Passed', 'C'),
(8, 4, 9, 'Failed', 'F'),
(9, 2, 7, 'Passed', 'A'),
(10, 5, 6, 'Passed', 'A'),
(11, 9, 7, 'Passed', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `midterm` int(11) NOT NULL,
  `final` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`firstname`, `lastname`, `email`, `midterm`, `final`) VALUES
('John', 'Smith', 'john.smith@yahoo.com', 100, 95),
('Mary', 'Smith', 'mary.smith@optonline.net', 90, 90),
('Frank', 'Smith', 'frank.smith@msn.com', 80, 85),
('Alice', 'Smith', 'alice.smith@gmail.com', 70, 80),
('Robert', 'Jones', 'robert.jones@jones.com', 60, 85),
('Sara', 'Watson', 'sara.watson@watson.com', 50, 90),
('Emma', 'Fields', 'emma.fields@msn.com', 95, 95),
('Harry', 'Burns', 'harry@burns.com', 90, 100),
('Lisa', 'Freeman', 'lisa@freeman.com', 85, 95),
('Steve', 'Green', 'steve.green@plumbers.com', 80, 90),
('Jane', 'Doe', 'jane.doe@gmail.com', 75, 85),
('John', 'Doe', 'john.dow@optimum.net', 70, 80),
('Barry', 'Bailey', 'bbailey@yahoo.com', 65, 75),
('Carol', 'Potter', 'carol.potter@mlb.com', 60, 70),
('Doug', 'Davies', 'dougd@aol.com', 55, 65);

-- --------------------------------------------------------

--
-- Table structure for table `phonebook`
--

DROP TABLE IF EXISTS `phonebook`;
CREATE TABLE IF NOT EXISTS `phonebook` (
  `rowid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `category` varchar(12) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `photo` char(20) DEFAULT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phonebook`
--

INSERT INTO `phonebook` (`rowid`, `firstname`, `lastname`, `category`, `email`, `phone`, `city`, `photo`) VALUES
(1, 'John', 'Smith', 'Family', 'john.smith@yahoo.com', '516-123-4567', 'Woodmere', NULL),
(2, 'Mary', 'Smith', 'Family', 'mary.smith@optonline.net', '516-123-4567', 'Woodmere', NULL),
(3, 'Frank', 'Smith', 'Family', 'frank.smith@msn.com', '631-987-6543', 'Smithtown', NULL),
(4, 'Alice', 'Smith', 'Family', 'alice.smith@gmail.com', '631-987-6544', 'Smithtown', NULL),
(5, 'Robert', 'Jones', 'Friend', 'robert.jones@jones.com', '718-897-2244', 'Queens', NULL),
(6, 'Sara', 'Watson', 'Friend', 'sara.watson@watson.com', '212-555-1212', 'Manhattan', NULL),
(7, 'Emma', 'Fields', 'Friend', 'emma.fields@msn.com', '201-456-7890', 'Bayonne', NULL),
(8, 'Harry', 'Burns', 'Business', 'harry@burns.com', '516-333-1130', 'Garden City', 'images/8.jpeg'),
(9, 'Lisa', 'Freeman', 'Other', 'lisa@freeman.com', '516-333-9898', 'Garden City', NULL),
(10, 'Steve', 'Green', 'Business', 'steve.green@plumbers.com', '516-654-4332', 'Lynbrook', NULL),
(11, 'Jane', 'Doe', 'Business', 'jane.doe@gmail.com', '123-456-7890', 'NYC', NULL),
(12, 'John', 'Doe', 'Business', 'john.dow@optimum.net', '914-555-5555', 'Westchester', NULL),
(13, 'Barry', 'Bailey', 'Friend', 'bbailey@yahoo.com', '718-555-1234', 'Brooklyn', 'images/13.jpg'),
(14, 'Carol', 'Potter', 'Other', 'carol.potter@mlb.com', '718-678-3434', 'Staten Island', NULL),
(15, 'Doug', 'Davies', 'Family', 'dougd@aol.com', '631-443-5656', 'Farmingdale', NULL),
(17, 'Luis', 'Fuentes', 'Family', 'fuenla@farmingdale.edu', '555-555-5555', 'Huntington', NULL),
(18, 'John', 'Smith', 'Family', 'john.smith@yahoo.com', '516-123-4567', 'Woodmere', NULL),
(19, 'Mark', 'Sart', 'Family', 'mark.sart@yahoo.com', '516-123-4567', 'Woodmere', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductTypeID`, `ProductName`, `ProductDescription`, `ProductPrice`, `ProductImage`) VALUES
(33, 2, 'Iphone X', '4GB 64GB A12', 850, 'iphone.jpg'),
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
(36, 2, 'LG G6', '3GB 32GB Snapdragon 625', 699, 'lgg6.jpg'),
(37, 1, 'Samsung', ' 6GB 512 GB Core i3', 499, 'samsung.jpg'),
(38, 1, 'HP', '12 GB 512GB Core I7', 999, 'hp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

DROP TABLE IF EXISTS `producttype`;
CREATE TABLE IF NOT EXISTS `producttype` (
  `ProductTypeID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ProductTypeName` varchar(20) NOT NULL,
  PRIMARY KEY (`ProductTypeID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`ProductTypeID`, `ProductTypeName`) VALUES
(1, 'Computer'),
(2, 'Cellphone'),
(3, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `roster`
--

DROP TABLE IF EXISTS `roster`;
CREATE TABLE IF NOT EXISTS `roster` (
  `rowid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(120) NOT NULL,
  `password` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `userid` varchar(80) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roster`
--

INSERT INTO `roster` (`rowid`, `firstname`, `lastname`, `password`, `email`, `userid`) VALUES
(1, 'Luis', 'Fuentes', 1051998, 'fuenla@farmingdale.edu', 'fuenla2020'),
(2, 'Juan', 'Fuentes', 1967, 'angelcomingfuentes@gmail.com', 'jfuentes'),
(3, 'Linda ', 'Fuentes', 12345, 'fuentes@gmail.com', 'lalala'),
(4, 'Luis', 'Fuentes', 12345, 'lll@farmingdale.edu', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

DROP TABLE IF EXISTS `specials`;
CREATE TABLE IF NOT EXISTS `specials` (
  `day` char(10) NOT NULL,
  `title` varchar(80) CHARACTER SET utf8mb4 NOT NULL,
  `descr` varchar(2048) CHARACTER SET utf8mb4 NOT NULL,
  `photo` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `price` char(25) NOT NULL,
  `calories` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`day`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`day`, `title`, `descr`, `photo`, `price`, `calories`) VALUES
('Sunday', 'Spaghetti and Sunday Sauce', 'Family style platter of spaghetti and Sunday sauce with meatballs and sausage.  Can feed a family of four.', 'images/Sunday.jpg', '$19.99', '700'),
('Saturday', 'Date Night Special', 'A free bottle of wine with an order for two appetizers and two entrees.', 'images/Saturday.jpg', 'Free Bottle of Wine', '625'),
('Monday', 'Pizza BOGO Half Off', 'Buy any whole pizza, get a second pizza at half price.  Second pizza must be of equal or lower price.', 'images/Monday.jpg', 'BOGO 50%', '285'),
('Tuesday', 'Terrific Tuesdays', 'Buy any entree or whole pizza and get a free appetizer (under $10.00).', 'images/Tuesday.jpg', 'Free Appetizer', '200 ~ 500'),
('Wednesday', 'Baked Ziti Special', 'Get free side order of meatballs when you order a Baked Ziti entree. ', 'images/Wednesday.jpg', 'Free Meatballs', '200 ~ 400'),
('Thursday', 'Eggplant Hero', 'These heavenly Eggplant Parmesan Sandwiches make for an easy and delicious hot lunch.  Crispy fried eggplant is layered on a ciabatta roll with parmesan and mozzarella cheeses, marinara sauce, and fresh basil.', 'images/Thursday.jpg', '$8.99', '425'),
('Friday', 'Fabulous Friday Fish Special', 'Branzino is a mild white fish popular in Italian cuisine and roasted whole and served with lemon. Also called European bass, the fish has been showing up on menus around the country and world as chefs and diners enjoy the sweet, flaky meat.', 'images/Friday.jpg', '$19.99', '410'),
('Birthday', 'Birthday Special', 'Free dessert with any entrÃ©e or whole pizza order during your birthday week.', 'images/Birthday.jpg', '19.99', '400 ~ 600');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `rowid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  PRIMARY KEY (`rowid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`rowid`, `firstName`, `lastName`, `email`) VALUES
(1, 'Felipe', 'Alvarez Vidal', 'alvafb@farmingdale.edu'),
(2, 'Ana', 'Collantes', 'colla4@farmingdale.edu'),
(3, 'Luc', 'Daniel', 'danilc@farmingdale.edu'),
(4, 'Vincent', 'Ewart', 'ewarvj@farmingdale.edu'),
(5, 'Luis', 'Fuentes', 'fuenla@farmingdale.edu'),
(6, 'Megan', 'Genova', 'genome@farmingdale.edu'),
(7, 'Jake', 'Gusew', 'guseja@farmingdale.edu'),
(8, 'Jenna', 'Hernandez', 'hernja14@farmingdale.edu'),
(9, 'Brett', 'Hirschberger', 'hirsbi@farmingdale.edu'),
(10, 'Ronald', 'Hiscock', 'hiscr@farmingdale.edu'),
(11, 'Areeb', 'Hussain', 'hussa4@farmingdale.edu'),
(12, 'Arslan', 'Khurram', 'khura6@farmingdale.edu'),
(13, 'Steven', 'Lannon', 'lanns@farmingdale.edu'),
(14, 'Juan', 'Marrero', 'marrjf6@farmingdale.edu'),
(15, 'Devante', 'McLeod', 'mclede@farmingdale.edu'),
(16, 'Aayushma', 'Pal', 'palaj11@farmingdale.edu'),
(17, 'Akshar', 'Patel', 'pateaa@farmingdale.edu'),
(18, 'Blesson', 'Raju', 'rajubs@farmingdale.edu'),
(19, 'Harry', 'Stergakos', 'sterhk@farmingdale.edu'),
(20, 'Emily', 'Stock', 'stoce@farmingdale.edu'),
(21, 'Diego', 'Taveras', 'taved@farmingdale.edu'),
(22, 'Orges', 'Velia', 'velio@farmingdale.edu'),
(23, 'Daniel', 'Veliz', 'velida26@farmingdale.edu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
