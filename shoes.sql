-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2024 at 02:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `type` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `file_name`, `name`, `brand`, `price`, `type`, `p_type`, `model`) VALUES
(1, 'Air Jordan 1 Low Black Grape.png', 'Air Jordan 1 Low Black Grape', 'NIKE', 4300.00, 'Men\'s Shoes', 'Shoes', 'Air Jordan 1 Low'),
(2, 'Air Jordan 1 Low Royal Toe.png', 'Air Jordan 1 Low Royal Toe', 'NIKE', 4300.00, 'Men\'s Shoes', 'Shoes', 'Air Jordan 1 Low'),
(3, 'Air Jordan 1 Mid Green Glow.png', 'Air Jordan 1 Mid Green Glow', 'NIKE', 4900.00, 'Men\'s Shoes', 'Shoes', 'Air Jordan 1 Mid'),
(4, 'Air Jordan 1 Mid Chicago.png', 'Air Jordan 1 Mid Chicago', 'NIKE', 4900.00, 'Men\'s Shoes', 'Shoes', 'Air Jordan 1 Mid'),
(5, 'Air Force 1 \'07 \'Light Armoury Blue\'.png', 'Air Force 1 \'07 Light Armoury Blue\'', 'NIKE', 5200.00, 'Men\'s Shoes', 'Shoes', 'Air Force 1'),
(6, 'Air Jordan 1 Mid SE Pine Green.png', 'Air Jordan 1 Mid SE Pine Green', 'NIKE', 4200.00, 'Men\'s Shoes', 'Shoes', 'Air Jordan 1 Mid'),
(7, 'Dunk Low Grey Fog.png', 'Dunk Low Grey Fog', 'NIKE', 3700.00, 'Women\'s Shoes', 'Shoes', 'Dunk Low'),
(8, 'Dunk Low Black.png', 'Dunk Low Black', 'NIKE', 3700.00, 'Women\'s Shoes', 'Shoes', 'Dunk Low'),
(9, 'Campus 00s Core Black Cloud White.png', 'Campus 00s Core Black Cloud White', 'ADIDAS', 3800.00, 'Women\'s Shoes', 'Shoes', 'Campus 00s'),
(10, 'Samba Core Black Cream White.png', 'Samba Core Black Cream White', 'ADIDAS', 3800.00, 'Men\'s Shoes', 'Shoes', 'Samba'),
(11, 'Samba Dark Brown Cream White.png', 'Samba Dark Brown Cream White', 'ADIDAS', 3800.00, 'Women\'s Shoes', 'Shoes', 'Samba'),
(12, 'Samba OG Cloud White Bold Gold.png', 'Samba OG Cloud White Bold Gold', 'ADIDAS', 3800.00, 'Women\' Shoes', 'Shoes', 'Samba OG'),
(13, 'Samba OG Cloud White Collegiate Burgundy.png', 'Samba OG Cloud White Collegiate Burgundy', 'ADIDAS', 3800.00, 'Women\' Shoes', 'Shoes', 'Samba OG'),
(14, 'Samba OG Collegiate Green Gum.png', 'Samba OG Collegiate Green Gum', 'ADIDAS', 3800.00, 'Men\'s Shoes', 'Shoes', 'Samba OG'),
(15, 'Samba OG Core White Halo Blue.png', 'Samba OG Core White Halo Blue', 'ADIDAS', 3800.00, 'Men\'s Shoes', 'Shoes', 'Samba OG'),
(16, 'Samba OG White Green.png', 'Samba OG White Green', 'ADIDAS', 3800.00, 'Men\'s Shoes', 'Shoes', 'Samba OG'),
(17, 'Campus 00s Dark Green.jpg', 'Campus 00s Dark Green', 'ADIDAS', 3800.00, 'Men\'s Shoes', 'Shoes', 'Campus 00s'),
(18, 'Samba Blue Rush Cream White.jpg', 'Samba Blue Rush Cream White', 'ADIDAS', 3800.00, 'Men\'s Shoes', 'Shoes', 'Samba'),
(19, 'Chuck 70 Hi Parchment.jpg', 'Chuck 70 Hi Parchment', 'CONVERSE', 3000.00, 'Men\'s Shoes', 'Shoes', 'Chuck 70 Hi'),
(20, 'Converse x A-Cold-Wall Geo Forma Boot Onyx.jpg', 'Geo Forma Boot Onyx', 'CONVERSE', 6200.00, 'Women\'s Shoes', 'Shoes', 'Geo Forma Boot'),
(21, 'Converse x Fear of God Essentials Chuck 70 Hi Natural 2020.jpg', 'Converse x Fear of God Essentials Chuck 70 Hi Natural 2020', 'CONVERSE', 4300.00, 'Men\'s Shoes', 'Shoes', 'Chuck 70 Hi'),
(22, 'Converse x Play Comme des Garcons Chuck 70 Hi Multi Heart Egret.jpg', 'Chuck 70 Hi Multi Heart Egret', 'CONVERSE', 5600.00, 'Men\'s Shoes', 'Shoes', 'Chuck 70 Hi'),
(23, 'Converse x Play Comme des Garcons Chuck 70 Ox Black.jpg', 'Chuck 70 Ox Black', 'CONVERSE', 5600.00, 'Women\'s Shoes', 'Shoes', 'Chuck 70'),
(24, 'Converse x Play Comme des Garcons Chuck 70 Ox Multi Heart Egret.jpg', 'Chuck 70 Ox Multi Heart Egret', 'CONVERSE', 5600.00, 'Women\'s Shoes', 'Shoes', 'Chuck 70'),
(25, 'Converse x Play Comme des Garcons Chuck 70 Ox Steel Gray.jpg', 'Chuck 70 Ox Steel Gray', 'CONVERSE', 5600.00, 'Women\'s Shoes', 'Shoes', 'Chuck 70'),
(26, 'Converse x Play Comme des Garcons Chuck 70 Ox White.jpg', 'Chuck 70 Ox White', 'CONVERSE', 5600.00, 'Women\'s Shoes', 'Shoes', 'Chuck 70'),
(27, 'Converse x Stussy One Star Ox Black.jpg', 'One Star Ox Black', 'CONVERSE', 8400.00, 'Men\'s Shoes', 'Shoes', 'One Star'),
(28, 'Run Star Motion High Black.jpg', 'High Black', 'CONVERSE', 3700.00, 'Unisex Shoes', 'Shoes', 'Run Star Motion'),
(29, 'Run Star Motion Ox Foundational Black.jpg', 'Ox Foundational Black', 'CONVERSE', 4600.00, 'Unisex Shoes', 'Shoes', 'Run Star Motion'),
(30, 'Run Star Motion Ox Foundational White.jpg', 'Ox Foundational White', 'CONVERSE', 4600.00, 'Unisex Shoes', 'Shoes', 'Run Star Motion'),
(31, 'adidas_Adilenium_Oversized_Short_Sleeve_Jersey_Black.png', 'Adilenium Oversized Short Sleeve Jersey Black', 'ADIDAS', 2900.00, 'Men\'s Clothing', 'Clothing', 'Jersey'),
(32, 'adidas_DIY_Jacket_Black_White__W.png', 'DIY Jacket Black White', 'ADIDAS', 1350.00, 'Women\'s Jacket', 'Clothing', 'DIY Jacket'),
(33, 'adidas_Korn_Graphic_Tee_Carbon.png', 'Korn Graphic Tee Carbon', 'ADIDAS', 2400.00, 'Men\'s Clothing', 'Clothing', 'Graphic Tee'),
(34, 'adidas_Originals_Fur_Jacket_TR.png', 'Originals Fur Jacket', 'ADIDAS', 9000.00, 'Men\'s Jacket', 'Clothing', 'Originals Jacket'),
(35, 'adidas_Sweater_Black__W.png', 'Sweater Black', 'ADIDAS', 4300.00, 'Women\'s Sweater', 'Clothing', 'Sweater'),
(36, 'adidas_Y-3_Real_Madrid_Collared_Jacket_Black.png', 'Y-3 Real Madrid Collared Jacket', 'ADIDAS', 24000.00, 'Men\'s Jacket', 'Clothing', 'Real Madrid Jacket'),
(37, 'adidas_Y-3_Real_Madrid_Travel_Coach_Jacket_Black.png', 'Y-3 Real Madrid Travel Coach Jacket', 'ADIDAS', 12500.00, 'Men\'s Jacket', 'Clothing', 'Real Madrid Jacket'),
(38, 'adidas_Y-3_Real_Madrid_Travel_Track_Top_Black.png', 'Y-3 Real Madrid Travel Track Top ', 'ADIDAS', 10500.00, 'Men\'s Jacket', 'Clothing', 'Real Madrid Jacket'),
(39, 'Converse x Ader Error Shapes Shorts \'Black\'.jpg', 'Shorts', 'CONVERSE', 2590.00, 'Unisex Clothing', 'Clothing', 'Shorts'),
(40, 'Converse x Fragment Hoodie White.png', 'Hoodie White', 'CONVERSE', 1100.00, 'Unisex Clothing', 'Clothing', 'Hoodie White'),
(41, 'Converse x Patta Four Leaf Clover Utility Fleece Hoodie Black.jpg', 'Utility Fleece Hoodie', 'CONVERSE', 4290.00, 'Unisex Clothing', 'Clothing', 'Hoodie Black'),
(42, 'Converse_Fragment_T-Shirt_Corydalis_Blue.png', 'T-Shirt Corydalis Blue', 'CONVERSE', 1290.00, 'Unisex Clothing', 'Clothing', 'T-Shirt Blue'),
(43, 'Converse_Fragment_T-Shirt_White.png', 'T-Shirt White', 'CONVERSE', 1290.00, 'Unisex Clothing', 'Clothing', 'T-Shirt White'),
(44, 'Converse_Fragment_Varsity_Jacket_Aquarius.png', 'Varsity Jacket Aquarius', 'CONVERSE', 7590.00, 'Unisex Clothing', 'Clothing', 'Jacket Aquarius'),
(45, 'converse-x-ader-error-shapes-tee-whitecloud-1.jpg', 'T-Shirt White Cloud', 'CONVERSE', 2090.00, 'Unisex Clothing', 'Clothing', 'T-Shirt White Cloud'),
(46, 'Nike_Big_Swoosh_Full_Zip_Jacket_Hot_Curry.png', 'Big Swoosh Full Zip Jacket Hot Curry', 'NIKE', 3900.00, 'Men\'s Clothing', 'Clothing', 'Big Swoosh Full Zip Jacket'),
(47, 'Nike_Big_Swoosh_Full_Zip_Jacket_Light_Soft_Pink_Pink_Oxford.png', 'Big Swoosh Full Zip Jacket Light Soft Pink', 'NIKE', 3900.00, 'Men\'s Clothing', 'Clothing', 'Big Swoosh Full Zip Jacket'),
(48, 'Nike_Big_Swoosh_Reversible_Boa_Jacket__Asia_Sizing__Gorge_Green.png', 'Big Swoosh Full Zip Jacket Gorge Green ', 'NIKE', 3900.00, 'Men\'s Clothing', 'Clothing', 'Big Swoosh Full Zip Jacket'),
(49, 'Nike_Big_Swoosh_Woven_Statement_Jacket_Black__Asia_Sizing.png', 'Big Swoosh Full Zip Jacket Black', 'NIKE', 3900.00, 'Men\'s Clothing', 'Clothing', 'Big Swoosh Full Zip Jacket'),
(50, 'Nike_Kobe_Mamba_Mentality_Los_Angeles_Lakers_City_Edition_Swingman_Jersey_Black__FW23.png', 'Kobe Mamba Mentality Los Angeles Jersey', 'NIKE', 4500.00, 'Men\'s Clothing', 'Clothing', 'Kobe Mamba Jersey'),
(51, 'Nike_Sportswear_Big_Swoosh_Reversible_Boa_Jacket__Asia_Sizing__Soft_Pink_Black.png', 'Big Swoosh Full Zip Jacket Pink Black', 'NIKE', 3900.00, 'Men\'s Clothing', 'Clothing', 'Big Swoosh Full Zip Jacket'),
(52, 'Nike_x_Ambush_Football_Jacket.png', 'Football Jacket', 'NIKE', 6700.00, 'Women\'s Clothing', 'Clothing', 'Jacket'),
(53, 'Nike_x_Stussy_Long-Sleeve_Top_Black.png', 'Long-Sleeve Top Black', 'NIKE', 3500.00, 'Men\'s Clothing', 'Clothing', 'Long-Sleeve Top'),
(54, 'nike-big-swoosh-reversible-boa-jacket--asia-sizing--hemp-white-1.png', 'Big Swoosh Full Zip Jacket Hemp-White', 'NIKE', 3900.00, 'Men\'s Clothing', 'Clothing', 'Big Swoosh Full Zip Jacket'),
(55, 'Nike Women\'s x Off-White NRG X Cross Bib \'Black\'.jpg', 'XCross Bib Black', 'NIKE', 7000.00, 'Women\'s Clothing', 'Clothing', 'XCross Bib'),
(56, 'Nike x Sacai Women\'s Parka Black.jpg', 'Sacai Black', 'NIKE', 10800.00, 'Women\'s Clothing', 'Clothing', 'Sacai Parka '),
(57, 'Nike x Sacai Women\'s Parka Pure Platinum.jpg', 'Sacai Platinum', 'NIKE', 10800.00, 'Women\'s Clothing', 'Clothing', 'Sacai Parka '),
(58, 'Nike_NSW_Faux_Fur_Jacket_Black__Asia_Sizing___W.png', 'Faux Fur Jacket Black', 'NIKE', 5600.00, 'Women\'s Clothing', 'Clothing', 'Faux Fur Jacket'),
(59, 'Nike_x_Ambush_Womens_Lux_Bra.png', 'Lux Bra', 'NIKE', 2800.00, 'Women\'s Clothing', 'Clothing', 'Lux Bra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
