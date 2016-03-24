-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2016 at 03:45 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL,
  `created_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`id`, `category_name`, `created_date`) VALUES
(1, 'Women''s Clothing', 1203116400),
(2, 'Men''s Clothing', 1203116400),
(3, 'Women''s Accessories', 1203116400),
(4, 'Footwear', 1203116400),
(5, 'Kids', 1203116400),
(6, 'Valentine Special', 1234738800),
(7, 'Winter Collection', 1234738800),
(8, 'Women''s Clothing', 1363388400);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `product_title` varchar(60) NOT NULL,
  `product_summary` varchar(256) NOT NULL,
  `product_descripton` text NOT NULL,
  `product_size` varchar(15) NOT NULL,
  `product_color` varchar(10) NOT NULL,
  `product_price` float NOT NULL,
  `product_weight` float NOT NULL,
  `product_thumb_image` varchar(60) NOT NULL,
  `product_image` varchar(60) NOT NULL,
  `product_isActive` tinyint(4) NOT NULL,
  `product_stock` float NOT NULL,
  `updated_date` int(11) NOT NULL,
  `created_date` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `main_category_id`, `sub_category_id`, `product_title`, `product_summary`, `product_descripton`, `product_size`, `product_color`, `product_price`, `product_weight`, `product_thumb_image`, `product_image`, `product_isActive`, `product_stock`, `updated_date`, `created_date`, `created_by`) VALUES
(1, 1, 3, 'test', 'test', 'test', '40', 'red', 450, 0, '', '2.png', 1, 10, 1234738800, 1234738800, 0),
(2, 1, 6, 'Full slive', 'Ben-Sherman', 'Ben-Sherman', '', 'blue', 750, 0, '', 'smallImage1.jpg', 1, 10, 1234738800, 1234738800, 0),
(3, 1, 6, 'Polo shirts', 'Superman polo berry', 'Superman polo berry', '', 'Black', 350, 0, '', '', 1, 5, 1234738800, 1234738800, 0),
(4, 6, 9, 'Bangla Special', 'Stylish kurti', 'Stylish kurti', '', 'Gray', 955, 0, '', 'stylish-kurti.jpg', 1, 20, 1234738800, 1234738800, 0),
(5, 6, 9, 'Bangla Special', 'Multi color stylish kurti', 'Multi color stylish kurti', '', 'Black', 799, 400, '', 'multi-color-ladis-kurti.jpg', 1, 25, 1234738800, 1234738800, 0),
(6, 6, 9, 'Jamdani aplic', 'Jamdani aplic shari', 'Jamdani aplic shari', '', 'Yellow', 3899, 400, '', 'jamdani-aplic.jpg', 1, 5, 1234738800, 1234738800, 0),
(7, 6, 9, 'Aplic butic shari', 'Aplic butic shari', 'Aplic butic shari', '', 'Red', 1899, 0, '', 'aplic-butic-shari.jpg', 1, 15, 1234738800, 1234738800, 0),
(8, 6, 9, 'Stylish long kurti', 'Stylish long kurti', 'Stylish long kurti', '', 'Red', 1316, 0, '', 'stylish-long-kurti.jpg', 1, 12, 1234738800, 1234738800, 0),
(9, 6, 9, 'Exclusive western top', 'Exclusive western top', 'Exclusive western top', '', 'White', 1900, 0, '', 'exclusive-western-top.jpg', 1, 10, 1234738800, 1234738800, 0),
(10, 6, 9, 'Forever love', 'Forever love', 'Forever love', '', 'Magento', 250, 0, '', 'forever-love.jpg', 1, 30, 1234738800, 1234738800, 0),
(11, 1, 6, 'Ferrari replica', 'Ferrari replica', 'Ferrari replica', '', 'Red', 450, 0, '', 'ferrari-replica.jpg', 1, 20, 1234738800, 1234738800, 0),
(12, 1, 6, 'X star devil', 'X star devil', 'X star devil', '', 'Deep blue', 580, 0, '', 'x-star-devil.jpg', 1, 50, 1234738800, 1234738800, 0),
(13, 1, 6, 'SUPERMAN Polo Shirt', 'SUPERMAN Polo Shirt', 'SUPERMAN Polo Shirt', '', 'Deep blue', 380, 0, '', 'superman-polo-shirt.jpg', 1, 30, 1234738800, 1234738800, 0),
(14, 1, 6, 'Fitch polo shirt', 'Fitch polo shirt', 'Fitch polo shirt', '', 'Yellow', 450, 0, '', 'fitch-polo-shirt.jpg', 1, 10, 1234738800, 1234738800, 0),
(15, 1, 6, 'Hulk polo shirt', 'Hulk polo shirt', 'Hulk polo shirt', '', 'Red', 380, 0, '', 'hulk-polo-shirt.jpg', 1, 15, 1234738800, 1234738800, 0),
(16, 1, 1, 'Moslin silk sharri', 'Moslin silk sharri', 'Moslin silk sharri', '', 'Red', 1650, 0, '', 'Moslin-silk-sharri.jpg', 1, 10, 1234738800, 1234738800, 0),
(17, 1, 1, 'Pure silk sharri', 'Pure silk sharri', 'Pure silk sharri', '', 'Red', 3650, 500, '', 'Pure-silk.jpg', 1, 5, 1234738800, 1234738800, 0),
(18, 6, 9, 'Stylish neclesh', 'Stylish neclesh', 'Stylish neclesh', '', 'Red', 459, 0, '', 'stylish-neclesh.jpg', 1, 2, 1234738800, 1234738800, 0),
(19, 5, 7, 'Menz toms shoe', 'Menz toms shoe', 'Menz toms shoe', '', 'Red', 699, 0, '', 'menz-toms-shoe.jpg', 1, 15, 1234738800, 1234738800, 0),
(20, 5, 7, 'Hip hop jents sandel', 'Hip hop jents sandel', 'Hip hop jents sandel', '', 'Black', 799, 0, '', 'hip-hop-jents-sandel.jpg', 1, 22, 1234738800, 1234738800, 0),
(21, 1, 8, 'Ceramic fuldani', 'Ceramic fuldani', 'Ceramic fuldani', '', 'White', 2600, 600, '', 'ceramic-fuldani.jpg', 1, 12, 1234738800, 1234738800, 0),
(22, 1, 3, 'Jack jones pant', 'Jack jones pant', 'Jack jones pant', '', 'Deep blue', 499, 0, '', 'jack-jones-pant.jpg', 1, 25, 1234738800, 1234738800, 0),
(23, 1, 3, 'Slim fit twil pant', 'Slim fit twil pant', 'Slim fit twil pant', '', 'Yellow Gra', 450, 0, '', 'slim-fit-twil-pant.jpg', 1, 30, 1234738800, 1234738800, 0),
(24, 1, 8, 'Clasic fuldani', 'Clasic fuldani', 'Clasic fuldani', '', 'Yellow', 1850, 0, '', 'clasic-fuldani.jpg', 1, 5, 1234738800, 1234738800, 0),
(25, 1, 2, 'Printed cotton maxi', 'Printed cotton maxi', 'Printed cotton maxi', '', 'printed =', 370, 0, '', 'printed-cotton-maxi.jpg', 1, 8, 1234738800, 1234738800, 0),
(26, 1, 2, 'ladies club', 'ladies club', 'ladies club', '', 'Black', 1150, 0, '', 'ladies-club.jpg', 1, 9, 1234738800, 1234738800, 0),
(27, 1, 2, 'ladies shirt', 'ladies shirt', 'ladies shirt', '', 'White', 850, 0, '', 'ladies-shirt.jpg', 1, 11, 1234738800, 1234738800, 0),
(28, 1, 2, 'ladies valvet hat', 'ladies valvet hat', 'ladies valvet hat', '', 'Red', 800, 0, '', 'ladies-valvet-hat.jpg', 1, 50, 1234738800, 1234738800, 0),
(29, 1, 2, 'ladies valvet hat', 'ladies valvet hat', 'ladies valvet hat', '', 'Red', 800, 0, '', 'ladies-valvet-hat.jpg', 1, 20, 1234738800, 1234738800, 0),
(30, 1, 2, 'korian ladies top', 'korian ladies top', 'korian ladies top', '', 'printed', 1300, 0, '', 'korian-ladies-top.jpg', 1, 12, 1234738800, 1234738800, 0),
(31, 7, 2, 'ladies long shirt', 'ladies long shirt', 'ladies long shirt', '', 'printed', 1250, 0, '', 'ladies-long-shirt.jpg', 1, 21, 1234738800, 1234738800, 0),
(32, 5, 5, 'ladies saal', 'ladies saal', 'ladies saal', '', 'Black', 650, 0, '', 'ladies-saal.jpg', 0, 15, 1234738800, 1234738800, 0),
(33, 7, 6, 'kashmiri saal', 'kashmiri saal', 'kashmiri saal', '', 'Gray', 4850, 0, '', 'kashmiri-saal.jpg', 1, 7, 1234738800, 1234738800, 0),
(34, 1, 8, 'wall sticker', 'wall sticker', 'wall sticker', '', 'Sky', 350, 0, '', 'wall-sticker.jpg', 1, 14, 1234738800, 1234738800, 0),
(35, 1, 8, 'selfy frame', 'selfy frame', 'selfy frame', '', '', 250, 0, '', 'selfy-frame.jpg', 1, 8, 1234738800, 1234738800, 0),
(36, 10, 10, 'winter saal', 'winter saal', 'winter saal', '', 'Yellow', 2800, 0, '', 'winter-saal.jpg', 1, 14, 1234738800, 1234738800, 0),
(37, 10, 10, 'winter saal 2', 'winter saal 2', 'winter saal 2', '', 'Gray', 600, 0, '', 'winter-saal-2.jpg', 1, 2, 1234738800, 1234738800, 0),
(38, 1, 2, 'ladies top', 'ladies top', 'ladies top', '', 'printed', 600, 0, '', 'ladies-top.jpg', 1, 2, 1234738800, 1234738800, 0),
(39, 5, 5, 'cotton tops', 'cotton tops', 'cotton tops', '', 'Yellow', 2180, 0, '', 'cotton-tops.jpg', 1, 8, 1234738800, 1234738800, 0),
(40, 1, 1, 'Rajguru katan', 'Rajguru katan', 'Rajguru katan', '', 'Mix', 3850, 0, '', 'rajguri-katan.jpg', 1, 10, 1266274800, 1266274800, 0),
(41, 1, 1, 'Indian Silk sari', 'Indian Silk sari', 'Indian Silk sari', '', 'Mix', 3550, 0, '', 'rajguri-katan-5.jpg', 1, 10, 1266274800, 1266274800, 0),
(42, 1, 1, 'Indian Katan', 'Indian Katan', 'Indian Katan', '', 'Mix', 3250, 0, '', 'rajguri-katan-2.jpg', 1, 15, 1266274800, 1266274800, 0),
(43, 1, 1, 'Indian Shipon sari', 'Indian Shipon sari', 'Indian Shipon sari', '', 'Mix', 3850, 0, '', 'rajguri-katan-3.jpg', 1, 12, 1266274800, 1266274800, 0),
(44, 1, 1, 'Vinoy Fashion Indian sari', 'Vinoy Fashion Indian sari', 'Vinoy Fashion Indian sari', '', 'Mix', 3150, 0, '', 'rajguri-katan-4.jpg', 1, 12, 1266274800, 1266274800, 0),
(45, 1, 1, 'Indian jorjet sari', 'Indian jorjet sari', 'Indian jorjet sari', '', 'Mix', 3550, 0, '', 'indian-jorjet.jpg', 1, 12, 1266274800, 1266274800, 0),
(46, 1, 2, 'hudeed sweter', 'hudeed sweter', 'hudeed sweter', '', 'Yellow', 899, 0, '', 'hudeed-sweter.jpg', 1, 12, 1266274800, 1266274800, 0),
(47, 1, 2, 'Jents hudi', 'Jents hudi', 'Jents hudi', '', 'Yellow', 599, 0, '', 'jents-hudi.jpg', 1, 10, 1266274800, 1266274800, 0),
(48, 1, 2, 'Jents stylish hudi', 'Jents stylish hudi', 'Jents stylish hudi', '', 'White', 599, 0, '', 'jents-stylish-hudi.jpg', 1, 10, 1266274800, 1266274800, 0),
(49, 1, 2, 'Menz hudi jacket', 'Menz hudi jacket', 'Menz hudi jacket', '', 'Blue', 599, 0, '', 'menz-hudi-jacket.jpg', 1, 18, 1266274800, 1266274800, 0),
(50, 1, 2, 'Multicolor hudi jacket', 'Multicolor hudi jacket', 'Multicolor hudi jacket', '', 'Mix', 750, 0, '', 'multicolor-jents-hudi.jpg', 1, 15, 1266274800, 1266274800, 0),
(51, 1, 3, 'Gaberdin pant', 'Gaberdin pant', 'Gaberdin pant', '', 'Deep gray', 850, 0, '', 'gaberdin-pant.jpg', 1, 15, 1266274800, 1266274800, 0),
(52, 1, 3, 'menz replica jents pant', 'menz replica jents pant', 'menz replica jents pant', '', 'Deep blue', 990, 0, '', 'menz-replica-jents-pant.jpg', 1, 10, 1266274800, 1266274800, 0),
(53, 1, 3, 'three quarter pant', 'three quarter pant', 'three quarter pant', '', 'Yellow', 550, 0, '', 'three-quarter-pant.jpg', 1, 10, 1266274800, 1266274800, 0),
(54, 1, 3, 'three quarter pant', 'three quarter pant', 'three quarter pant', '', 'Yellow', 450, 0, '', 'three-quarter-pant2.jpg', 1, 12, 1266274800, 1266274800, 0),
(55, 1, 3, 'three quarter pant', 'three quarter pant', 'three quarter pant', '', 'Yellow', 650, 0, '', 'three-quarter-trouser.jpg', 1, 12, 1266274800, 1266274800, 0),
(56, 1, 4, 'black legging', 'black legging', 'black legging', '', 'Black', 489, 0, '', 'black-legging.jpg', 1, 5, 1266274800, 1266274800, 0),
(57, 1, 4, 'Gray legging', 'Gray legging', 'Gray legging', '', 'Mix', 689, 0, '', 'can-single-buy-can-mix-wholesale-Letters-printed-lady-women-', 1, 10, 1266274800, 1266274800, 0),
(58, 1, 4, 'White legging', 'White legging', 'White legging', '', 'Mix', 720, 0, '', 'goods_00_163839.jpg', 1, 10, 1266274800, 1266274800, 0),
(59, 1, 4, 'deep green legging', 'deep green legging', 'deep green legging', '', 'Mix', 420, 0, '', 'goods_57_163839.jpg', 1, 18, 1266274800, 1266274800, 0),
(60, 1, 4, 'Long legging', 'Long legging', 'Long legging', '', 'Mix', 480, 0, '', 'jsxp6w-i.jpg', 1, 5, 1266274800, 1266274800, 0),
(61, 5, 5, 'cotton girls leggings', 'cotton girls leggings', 'cotton girls leggings', '', 'gray', 180, 0, '', 'cotton-girls-leggings.jpg', 1, 2, 1266274800, 1266274800, 0),
(62, 5, 5, 'Exclusive plazu', 'Exclusive plazu', 'Exclusive plazu', '', 'gray', 190, 0, '', 'exclusive-plazu.jpg', 1, 10, 1266274800, 1266274800, 0),
(63, 5, 5, 'ladies jeans pant combo', 'ladies jeans pant combo', 'ladies jeans pant combo', '', 'blue', 800, 0, '', 'ladies-jeans-pant-combo.jpg', 1, 15, 1266274800, 1266274800, 0),
(64, 5, 5, 'ladies three quarter', 'ladies three quarter', 'ladies three quarter', '', 'sky', 350, 0, '', 'ladies-three-quarter.jpg', 1, 15, 1266274800, 1266274800, 0),
(65, 5, 5, 'skin tite ladies denim pant', 'skin tite ladies denim pant', 'skin tite ladies denim pant', '', 'sky', 399, 0, '', 'skin-tite-ladies-denim-pant.jpg', 1, 25, 1266274800, 1266274800, 0),
(66, 1, 6, 'katan silk panjabi', 'katan silk panjabi', 'katan silk panjabi', '', 'Red', 1890, 0, '', 'katan-silk-panjabi.jpg', 1, 10, 1266274800, 1266274800, 0),
(67, 1, 6, 'Long panjabi', 'Long panjabi', 'Long panjabi', '', 'Red', 2050, 0, '', 'long-panjabi.jpg', 1, 10, 1266274800, 1266274800, 0),
(68, 2, 6, 'short panjabi', 'short panjabi', 'short panjabi', '', 'Mix', 850, 0, '', 'short-panjabi.jpg', 1, 10, 1266274800, 1266274800, 0),
(69, 2, 6, 'stylish jents panjabi', 'stylish jents panjabi', 'stylish jents panjabi', '', 'Mix', 1399, 0, '', 'stylish-jents-panjabi.jpg', 1, 20, 1266274800, 1266274800, 0),
(70, 2, 6, 'sultan indian panjabi', 'sultan indian panjabi', 'sultan indian panjabi', '', 'Black', 1550, 0, '', 'sultan-indian-panjabi.jpg', 1, 25, 1266274800, 1266274800, 0),
(71, 5, 7, 'casual outdor', 'casual outdor', 'casual outdor', '', 'Yelloo', 2390, 0, '', 'casual-outdor.jpg', 1, 5, 1266274800, 1266274800, 0),
(72, 5, 7, 'jents casual shoe', 'jents casual shoe', 'jents casual shoe', '', 'Black', 1099, 0, '', 'jents-casual-shoe.jpg', 1, 10, 1266274800, 1266274800, 0),
(73, 5, 7, 'jents casual loffer', 'jents casual loffer', 'jents casual loffer', '', 'Black', 999, 0, '', 'jents-casula-loffer.jpg', 1, 10, 1266274800, 1266274800, 0),
(74, 5, 7, 'jents loffer', 'jents loffer', 'jents loffer', '', 'red', 1450, 0, '', 'jents-loffer.jpg', 1, 20, 1266274800, 1266274800, 0),
(75, 5, 7, 'Menz toms', 'Menz toms', 'Menz toms', '', 'red', 699, 0, '', 'menz-toms.jpg', 1, 20, 1266274800, 1266274800, 0),
(76, 5, 8, 'kids mini laptop', 'kids mini laptop', 'kids mini laptop', '', 'Mix', 580, 0, '', 'kids-mini-laptop.jpg', 1, 5, 1266274800, 1266274800, 0),
(77, 1, 8, 'Rubiks', 'Rubiks', 'Rubiks', '', 'Mix', 299, 0, '', 'rubiks.jpg', 1, 10, 1266274800, 1266274800, 0),
(78, 1, 8, 'Spiderman toy', 'Spiderman toy', 'Spiderman toy', '', 'Mix', 555, 0, '', 'spiderman-toy.jpg', 1, 20, 1266274800, 1266274800, 0),
(79, 1, 8, 'talking tom cat toy', 'talking tom cat toy', 'talking tom cat toy', '', 'green', 560, 0, '', 'talking-tom-cat-toy.jpg', 1, 20, 1266274800, 1266274800, 0),
(80, 1, 8, 'Toy Helicopter', 'Toy Helicopter', 'Toy Helicopter', '', 'Yellow', 1440, 0, '', 'toy-helicopter.jpg', 1, 20, 1266274800, 1266274800, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `sub_category_name` varchar(30) NOT NULL,
  `created_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `main_category_id`, `sub_category_name`, `created_date`) VALUES
(1, 1, 'Saree', 1203116400),
(2, 1, 'Unstitched Dress', 1203116400),
(3, 1, 'Pants', 1203116400),
(4, 1, 'Pants Leggings', 1203116400),
(5, 5, 'Girl''s Clothing', 1203116400),
(6, 5, 'Boy''s Clothing', 1203116400),
(7, 5, 'Shoes', 1203116400),
(8, 5, 'Toyes', 1203116400),
(9, 6, 'Ladies Fashion', 1234738800),
(10, 7, 'Saal', 1234738800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
