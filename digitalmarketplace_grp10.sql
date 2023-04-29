-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 11:13 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalmarketplace_grp10`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `code`, `name`, `description`, `weight`, `category`, `price`, `image`) VALUES
(1, 'A123456', 'Italian Hoodie', 'This Syinix Soundbar will offer an incredible listening experience', '2kg', 'Clothes/Men', 27.00, './assets/images/clothes/2.jpg'),
(2, 'D425436', 'Italian Jacket', 'You will not only watch the sport at your convenience', '4kg', 'Clothes/Men', 200.00, './assets/images/clothes/jacket-1.jpg'),
(3, 'D412676', 'Ladies Check Top', 'It is part of our Everyday range of simple and reliable PCs.', '2kg', 'Clothes/Women', 45.00, './assets/images/clothes/clothe 1.png'),
(4, 'D422436', 'Nike Male Short ', 'Provides the most intuitive game play experience with pleasure.', '2kg', 'Clothes/Men', 16.00, './assets/images/clothes/shorts-2.jpg'),
(5, 'D412436', 'Red Dinner Top', 'The headphones offer not only sleek style with a slim profile.', '0.4 kg', 'Clothes/Women', 22.00, './assets/images/clothes/clothe 2.png'),
(6, 'D412467', 'Men Casual Wear', 'It can get rid of up to 35dB noise for a quiet listening experience.', '1 kg', 'Clothes/Men', 25.00, './assets/images/clothes/Men Casual Wear.png'),
(7, 'D432467', 'Ladies Summer Top', 'This cute projector can be placed at any place. ', '1.0 kg', 'Clothes/Women', 16.00, './assets/images/clothes/clothes-2.jpg'),
(8, 'D412436', 'Bluetooth for Cars', 'Bluetooth transmitter sends the music of mobile phones.', '0.3 kg', 'Clothes/Women', 16.85, './assets/images/clothes/jacket-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`id`, `code`, `name`, `description`, `weight`, `category`, `price`, `image`, `discount`, `created_at`) VALUES
(1, 'A123456', 'Syinix SB580 Sound Bar', 'This Syinix Soundbar will offer an incredible listening experience', '5kg', 'Electronics/Syinix', '180.85', './assets/images/Electronics/elec1.jpg', NULL, '2023-04-02 04:01:12'),
(2, 'A125436', 'Asano Smart Android Tv', 'You will not only watch the sport at your convenience', '4kg', 'Electronics/Asano', '190.85', './assets/images/Electronics/elec2.jpg', NULL, '2023-04-02 04:01:12'),
(3, 'A112676', 'Lenovo IdeaPad 3', 'It is part of our Everyday range of simple and reliable PCs.', '2kg', 'Electronic/Lenovo', '380.00', './assets/images/Electronics/elec11.jpg', NULL, '2023-04-02 04:01:12'),
(4, 'A222436', 'UCOM Game Controllers', 'Provides the most intuitive game play experience with pleasure.', '2kg', 'Electronic/UCOM', '16.00', './assets/images/Electronics/elec4.jpg', NULL, '2023-04-02 04:01:12'),
(5, 'A112436', 'Wireless Headset', 'The headphones offer not only sleek style with a slim profile.', '0.4 kg', 'Electronics/P47', '18.00', './assets/images/Electronics/elec5.jpg', NULL, '2023-04-02 05:54:04'),
(6, 'A112467', 'Oraimo FreePods Pro', 'It can get rid of up to 35dB noise for a quiet listening experience.', '0.33 kg', 'Electronics/Oraimo', '19.00', './assets/images/Electronics/elec6.jpg', NULL, '2023-04-02 05:54:04'),
(7, 'A132467', 'Mini Portable Projector', 'This cute projector can be placed at any place. ', '1.0 kg', 'Electronic/A2000', '160.85', './assets/images/Electronics/elec7.jpg', NULL, '2023-04-02 05:54:04'),
(8, 'A212436', 'Bluetooth for Cars', 'Bluetooth transmitter sends the music of mobile phones.', '0.3 kg', 'Electronic/Samsung', '16.85', './assets/images/Electronics/elec9.jpg', NULL, '2023-04-02 05:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`, `discount`, `created_at`) VALUES
(1, 'Running Sneaker Shoes', 'Summer Shoe', '18.00', './assets/images/Shoes/product-1.jpg', NULL, '2023-04-01 12:58:50'),
(2, 'Ladies Check Top', 'Clothing', '19.00', './assets/images/clothes/clothe 1.png', NULL, '2023-04-01 12:58:50'),
(3, 'Syinix SB580 Sound Bar', 'Electronics', '25.00', './assets/images/Electronics/elec1.jpg', NULL, '2023-04-01 12:58:50'),
(4, 'Asano Smart Android Tv', 'Electronic', '170.85', './assets/images/Electronics/elec2.jpg', '200.21', '2023-04-01 12:58:50'),
(5, 'Leather Mens Slipper', 'Summer Shoe', '40.00', './assets/images/Shoes/product-2.jpg', NULL, '2023-04-01 16:14:46'),
(6, 'No Back Dinner Wear', 'Clothing', '55.00', './assets/images/clothes/clothe 2.png', NULL, '2023-04-01 16:14:46'),
(7, 'Sweet Cardigan', 'Clothing', '12.00', './assets/images/clothes/2.jpg', NULL, '2023-04-01 16:14:46'),
(8, 'Simple Fabric Shoe', 'Summer Shoe', '100.85', './assets/images/Shoes/product-3.jpg', NULL, '2023-04-01 16:14:46'),
(9, 'Lenovo IdeaPad 3', 'Electronics', '380.00', './assets/images/Electronics/elec11.jpg', NULL, '2023-04-01 16:14:46'),
(10, 'UCOM Game Controller', 'Electronics', '19.00', './assets/images/Electronics/elec4.jpg', NULL, '2023-04-01 16:14:46'),
(11, 'Jeans Jacket', 'Clothing', '160.85', './assets/images/clothes/jacket-1.jpg', NULL, '2023-04-01 16:14:46'),
(12, 'Air Jordan 7 Retro', 'Summer Shoe', '170.00', './assets/images/Shoes/product-4.jpg', NULL, '2023-04-01 16:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `code`, `name`, `description`, `weight`, `category`, `price`, `image`) VALUES
(1, 'C323456', 'Running Sneaker Shoes', 'Step into summer with our breezy and perfect sandals.', '5kg', 'Summer Shoes/Men', 180.85, './assets/images/Shoes/product-1.jpg'),
(2, 'C325436', 'Leather Mens Slipper', 'Stay cool in the heat with our sneakers.', '4kg', 'Summer Shoes/Men', 200.00, './assets/images/Shoes/product-2.jpg'),
(3, 'C312676', 'Simple Fabric Shoe', 'Make a statement with our vibrant Shoes.', '3kg', 'Summer Shoes/Men & Women', 300.00, './assets/images/Shoes/product-3.jpg'),
(4, 'C312436', 'Air Jordan 7 Retro ', 'Get ready for adventure with our shoes', '2kg', 'Summer Shoes/Men', 160.00, './assets/images/Shoes/product-4.jpg'),
(5, 'C312436', 'Nike Air Max 270 SE', 'Sizzle in the sun with our chic and trendy mules.', '4 kg', 'Summer Shoes/Men & Women', 180.00, './assets/images/Shoes/product-5.jpg'),
(6, 'C312467', 'Adidas Sneakers Shoes', 'Feel the freedom of barefoot walking with our minimalist.', '2.3 kg', 'Summer Shoes/Women', 110.00, './assets/images/Shoes/product-6.jpg'),
(7, 'C332467', 'Nike Basketball shoes', 'Elevate your summer wardrobe with our stylish wedges. ', '2.0 kg', 'Summer Shoes/Men', 160.00, './assets/images/Shoes/product-7.jpg'),
(8, 'A212436', 'Simple Fabric Shoe', 'Stay comfortable all day long with our loafers.', '3.3 kg', 'Summer Shoes/Men', 16.85, './assets/images/Shoes/product-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `special`
--

INSERT INTO `special` (`id`, `name`, `category`, `price`, `image`, `discount`, `created_at`) VALUES
(1, 'Nike Air Max 270 SE', 'Summer Shoe', '180.85', './assets/images/Shoes/product-5.jpg', NULL, '2023-04-01 12:58:50'),
(2, 'Brand Jackson Jacket', 'Clothing', '190.00', './assets/images/clothes/jacket-4.jpg', NULL, '2023-04-01 12:58:50'),
(3, 'Wireless Headset', 'Electronics', '16.85', './assets/images/Electronics/elec5.jpg', NULL, '2023-04-01 12:58:50'),
(4, 'Adidas Sneakers Shoes', 'Summer Shoe / Men', '170.00', './assets/images/Shoes/product-6.jpg', NULL, '2023-04-01 12:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics`
--
ALTER TABLE `electronics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `electronics`
--
ALTER TABLE `electronics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
