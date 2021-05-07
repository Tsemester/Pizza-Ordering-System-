-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 10:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tseme`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_id` varchar(100) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `First&Last_name` text NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(28, 'Tseme ', '20.00', 'Pizza_Stock_614.jpg', 0, '0', '0'),
(29, 'Tseme ', '20.00', 'Pizza_Stock_549.jpg', 0, '0', '0'),
(30, '  ', '120.00', 'Pizza_Stock_978.jpg ', 0, '0', '0'),
(31, '  ', '120.00', 'Pizza_Stock_978.jpg ', 1, '120', '0'),
(32, 'Tseme ', '20.00', 'Pizza_Stock_549.jpg', 1, '20', '0'),
(33, 'Tseme ', '20.00', 'Pizza_Stock_614.jpg', 1, '20', '0');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `queries`, `replies`) VALUES
(2, 'can i get a refund?', 'yes, provided there is a VALID reason.'),
(3, 'can i pay online?', 'yes you can pay online.'),
(4, 'can i cancel an order?', 'yes, provided there is a valid reason.'),
(5, 'can i change my address after i have placed an order online?', 'No, you cant');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_names` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `email`, `full_names`) VALUES
(1, 'tse02398', 'e10adc3949ba59abbe56e057f20f883e', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(2, 'tse02398', 'e10adc3949ba59abbe56e057f20f883e', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(3, 'tse02398', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(4, '123', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(5, 'tse02398', '827ccb0eea8a706c4c34a16891f84e7b', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(6, 'admin ', '25f9e794323b453885f5181f1b624d0b', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(7, 'tse02398', '81dc9bdb52d04dc20036dbd8313ed055', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(8, 'tse02398', '81dc9bdb52d04dc20036dbd8313ed055', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(9, '123', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(10, 'tse02398', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(11, 'admin ', '21232f297a57a5a743894a0e4a801fc3', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(12, 'admin ', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(13, '123', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(14, '123', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(15, '123', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(16, '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme'),
(17, '123', '202cb962ac59075b964b07152d234b70', 'botlhetenasen.tseme@gmail.com', 'Botlhe Tseme');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Mixed Color', '1.jpeg', '400'),
(2, 'Dark Color', '2.jpeg', '300'),
(3, 'Red Mixed  ', '3.jpeg', '400'),
(4, 'Green Color  ', '5.jpeg', '500'),
(5, 'Blue Color', '6.jpeg', '600'),
(6, 'Dark Blue', '7.jpeg', '700'),
(7, 'Grey Color', '8.jpeg', '800');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `User_id` varchar(100) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(78, 'tseme', 'tse02398', 'dd538fca37821d3d688ddad19ee62feb'),
(82, 'Botlhe Tseme', 'admin ', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` int(10) UNSIGNED NOT NULL,
  `quantity` int(1) NOT NULL,
  `pcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `description`, `image_name`, `featured`, `active`, `price`, `category`, `quantity`, `pcode`) VALUES
(93, 'Pizza', 'Tseme ', 'Pizza_Stock_614.jpg', 'Yes', 'Yes', '20.00', 46, 0, 0),
(94, 'Pizza', 'Tseme ', 'Pizza_Stock_549.jpg', 'Yes', 'Yes', '20.00', 46, 0, 0),
(95, 'Customize ', '  ', 'Pizza_Stock_978.jpg ', 'Yes', 'Yes', '120.00', 48, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category2`
--

CREATE TABLE `tbl_category2` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category2`
--

INSERT INTO `tbl_category2` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(46, 'Pizza', 'Pizza_Category_225.jpg', 'Yes', 'Yes'),
(47, 'Drinks', 'Pizza_Category_933.jpg', 'Yes', 'Yes'),
(48, 'Customize', 'Pizza_Category_963.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `rate` varchar(255) NOT NULL,
  `recom` varchar(255) NOT NULL,
  `change` varchar(255) NOT NULL,
  `exps` varchar(255) NOT NULL,
  `had` varchar(255) NOT NULL,
  `buy` varchar(255) NOT NULL,
  `orders` varchar(255) NOT NULL,
  `sit` varchar(255) NOT NULL,
  `rec` varchar(255) NOT NULL,
  `happy` varchar(255) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `delivery_type` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_contact` varchar(50) NOT NULL,
  `customer_address` varchar(150) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `amount_paid` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `item` varchar(255) NOT NULL,
  `topping` varchar(255) NOT NULL,
  `herb` varchar(255) NOT NULL,
  `shape` varchar(255) NOT NULL,
  `crest` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `date`, `status`, `delivery_type`, `customer_name`, `customer_email`, `customer_contact`, `customer_address`, `pmode`, `amount_paid`, `username`, `item`, `topping`, `herb`, `shape`, `crest`, `size`) VALUES
(72, 'Pizza', '20.00', 1, 20, '2021-04-19 03:50:22', 'On Delivery', 'Delivery', 'Botlhe Tseme', 'botlhetenasen.tseme@gmail.com', '76272466', '76272466', '', '', 'tse02398', '', '', '', '', '', ''),
(73, 'Pizza', '20.00', 1, 20, '2021-04-19 03:52:59', 'Cancelled', 'Delivery', 'Botlhe Tseme', 'botlhetenasen.tseme@gmail.com', '76272466', '76272466', '', '', 'tse02398', '', '', '', '', '', ''),
(74, 'Pizza', '20.00', 1, 20, '2021-04-19 03:54:00', 'On Delivery', 'Delivery', 'Botlhe Tseme', 'botlhetenasen.tseme@gmail.com', '76272466', '76272466', '', '', 'tse02398', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `verification_status` int(11) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `verification_status`, `confirm_password`) VALUES
(36, 'botlhetenasen.tseme@gmail.com', 'botlhetenasen.tseme@gmail.com', 'botlhetenasen.tseme@gmail.com', '12345', 12345, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`User_name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category2`
--
ALTER TABLE `tbl_category2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tbl_category2`
--
ALTER TABLE `tbl_category2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
