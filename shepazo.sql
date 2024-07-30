-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 01:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shepazo`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_categories`
--

CREATE TABLE `add_categories` (
  `id` int(11) NOT NULL,
  `categories_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_categories`
--

INSERT INTO `add_categories` (`id`, `categories_name`) VALUES
(10, 'Sport Wear'),
(11, 'Fitness Wear'),
(14, 'Casual Wear'),
(15, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `uk_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `uk_category_id`) VALUES
(14, 'Uniform', 10),
(15, 'Uniform Game', 11);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_art` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_art`, `product_image`, `category_id`) VALUES
(39, 'shepazo', 'Art# SIS-1001', 'picture/img 1.jpg', 14),
(40, 'shepazo', 'Art# SIS-1002', 'picture/img 2.jpg', 14),
(41, 'shepazo', 'Art# SIS-1003', 'picture/img 3.jpg', 14),
(42, 'shepazo', 'Art# SIS-1004', 'picture/img 4.jpg', 14),
(43, 'shepazo', 'Art# SIS-1005', 'picture/img 1.jpg', 14),
(44, 'shepazo', 'Art# SIS-1006', 'picture/img 2.jpg', 14),
(45, 'shepazo', 'Art# SIS-1007', 'picture/img 3.jpg', 14),
(46, 'shepazo', 'Art# SIS-1008', 'picture/img 4.jpg', 14),
(47, 'shepazo', 'Art# SIS-1009', 'picture/img 1.jpg', 14),
(48, 'shepazo', 'Art# SIS-2001', 'picture/p9.png', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'ad', '786381');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_categories`
--
ALTER TABLE `add_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_categories`
--
ALTER TABLE `add_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
