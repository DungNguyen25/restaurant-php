-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 10:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id_cart` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id_cart`, `user_name`, `pid`, `name_product`, `price`, `quantity`, `image`) VALUES
(72, 'dungnguyen25', 0, 'Green tea made of stone', 5, 1, 'stone-tea.png'),
(73, 'dungnguyen25', 0, 'Cold green tea', 5, 1, 'frappucino-tea-ice.png'),
(74, 'dungnguyen25', 0, 'asda111', 123, 1, 'iphone14-4.png'),
(75, 'dungnguyen25', 0, 'asda111', 123, 1, 'iphone14-4.png'),
(76, 'dungnguyen25', 0, 'Green tea made of stone', 5, 1, 'stone-tea.png'),
(77, 'dungnguyen25', 0, 'Green tea made of stone', 5, 1, 'stone-tea.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(6, 'Hot green tea'),
(7, 'Frappuccino Blended Green Tea'),
(8, 'Cold green tea'),
(9, 'Green tea made of stone');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `id_product` int(11) NOT NULL,
  `date_comment` date NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `user_name`, `content`, `id_product`, `date_comment`, `image`) VALUES
(131, 'dungnguyen25', 'asdasd', 6, '2022-10-25', '271870050_767312068005562_1617852816645108846_n.jpg'),
(132, 'dungnguyen25', 'asdasd', 7, '2022-10-25', '271870050_767312068005562_1617852816645108846_n.jpg'),
(136, 'dungnguyen25', 'asdasd', 6, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(137, 'dungnguyen25', 'asdasdasdasd', 10, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(138, 'dungnguyen25', 'asdasdasd', 10, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(139, 'dungnguyen25', 'asdasd', 10, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(140, 'dungnguyen25', 'asdasd', 10, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(141, 'dungnguyen25', 'asdasd', 12, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(142, 'dungnguyen25', 'asdasd', 12, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(143, 'dungnguyen25', 'asdasd', 12, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(144, 'dungnguyen25', 'asdasdasd', 12, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg'),
(145, 'dungnguyen25', 'asdasd', 12, '2022-10-29', '271870050_767312068005562_1617852816645108846_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` date NOT NULL DEFAULT current_timestamp(),
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `user_name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(9, 'dungnguyen25', '0909230920', 'nqd251003@gmail.com', 'paytm', '30 Dam Thanh 7, Hoa Hiep Name, Lien Chieu, Da Nang', 'Cold green tea (5 x 1) - Green tea made of stone (5 x 1) - Cold green tea (5 x 1) - ', 15, '2022-10-24', 'pending'),
(10, 'dungnguyen25', '0909230920', 'nqd251003@gmail.com', 'credit card', '30 Dam Thanh 7, Hoa Hiep Name, Lien Chieu, Da Nang', 'Cold green tea (5 x 1) - Green tea made of stone (5 x 1) - Cold green tea (5 x 1) - ', 15, '2022-10-24', 'pending'),
(11, 'dungnguyen25', '0909230920', 'nqd251003@gmail.com', 'cash on delivery', '30 Dam Thanh 7, Hoa Hiep Name, Lien Chieu, Da Nang', 'Cold green tea (5 x 1) - Green tea made of stone (5 x 1) - Cold green tea (5 x 1) - ', 15, '2022-10-24', 'pending'),
(12, 'dungnguyen25', '0909230920', 'nqd251003@gmail.com', 'credit card', '30 Dam Thanh 7, Hoa Hiep Name, Lien Chieu, Da Nang', 'Cold green tea (5 x 0) - Cold green tea (5 x 0) - Cold green tea (5 x 0) - ', 0, '2022-10-25', 'pending'),
(13, 'dungnguyen25', '0909230920', 'nqd251003@gmail.com', 'cash on delivery', '30 Dam Thanh 7, Hoa Hiep Name, Lien Chieu, Da Nang', 'Cold green tea (5 x 2) - Cold green tea (5 x 1) - ', 15, '2022-10-25', 'pending'),
(14, 'dungnguyen25', '0909230920', 'nqd251003@gmail.com', 'credit card', '30 Dam Thanh 7, Hoa Hiep Name, Lien Chieu, Da Nang', 'Cold green tea (5 x 2) - Cold green tea (5 x 1) - ', 15, '2022-10-26', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(100) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `name_category` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL,
  `date_added` date DEFAULT NULL,
  `describe` varchar(2000) NOT NULL,
  `special` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `name_category`, `price`, `image`, `discount`, `date_added`, `describe`, `special`, `view`) VALUES
(6, 'Cold green tea', 'Cold green tea', '5', 'frappucino-tea-ice.png', 0, NULL, '', 0, 0),
(10, 'Green tea made of stone', 'Cold green tea', '5', 'stone-tea.png', 0, NULL, '', 0, 0),
(13, 'asda111', 'Hot green tea', '123', 'iphone14-4.png', 0, NULL, '', 0, 0),
(14, 'asjgd', 'Frappuccino Blended Green Tea', '11111', 'hot-tea-immersion.png', 0, NULL, '', 0, 0),
(15, '99JJJ', 'Hot green tea', '123123', 'hot-tea-heard.png', 0, NULL, '', 0, 0),
(16, 'sdjfhkj', 'Frappuccino Blended Green Tea', '123123', 'hot-tea-immersion.png', 0, NULL, '', 0, 0),
(17, 'kjasdjk', 'Frappuccino Blended Green Tea', '111', 'restaurant.jpg', 0, NULL, '', 0, 0),
(18, 'askjdhk', 'Frappuccino Blended Green Tea', '111', 'composition-two-mugs-with-asian-tea.jpg', 0, NULL, '', 0, 0),
(19, 'kjhja', 'Cold green tea', '111', 'background-index.jpg', 0, NULL, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(100) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `part` varchar(1) NOT NULL,
  `activating` varchar(1) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `email`, `number`, `password`, `address`, `part`, `activating`, `image`) VALUES
(9, 'dungnguyen25', 'nqd251003@gmail.com', '0934907430', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '30 Dam Thanh 7, Hoa Hiep Name, Lien Chieu, Da Nang', '1', '0', '271870050_767312068005562_1617852816645108846_n.jpg'),
(10, 'quochuy', 'jdquochuy19102003@gmail.com', '981723987', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '', '0', '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cart` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
