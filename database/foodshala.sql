-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 10:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prefer_food_type` varchar(255) NOT NULL,
  `user_prefer` varchar(255) NOT NULL,
  `user_location` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `user_id`, `prefer_food_type`, `user_prefer`, `user_location`, `created_at`) VALUES
(3, 22, 'veg', '', '', '2021-01-07 10:39:55');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `id` int(11) NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `order_by_customers_user_id` varchar(255) NOT NULL,
  `order_to_restaurants_user_id` varchar(255) NOT NULL,
  `order_restaurants_food_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `restaurant_rating` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`id`, `order_number`, `order_by_customers_user_id`, `order_to_restaurants_user_id`, `order_restaurants_food_id`, `quantity`, `status`, `restaurant_rating`, `created_at`) VALUES
(15, '119', '22', '25', '19', '1', 0, '', '2021-01-07 16:38:17'),
(19, '118', '22', '24', '18', '2', 0, '', '2021-01-07 16:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_location` varchar(255) NOT NULL,
  `restaurant_mobile` varchar(255) NOT NULL,
  `restaurant_rating` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `user_id`, `restaurant_name`, `restaurant_location`, `restaurant_mobile`, `restaurant_rating`, `created_at`) VALUES
(2, '23', 'Punjabi Tadka', 'Delhi', '7991377996', '', '2021-01-07 10:42:00'),
(3, '24', 'Hayate', 'Delhi', '7991377996', '', '2021-01-07 12:47:02'),
(4, '25', 'Renaissance', 'Delhi', '7991377996', '', '2021-01-07 12:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants_dish`
--

CREATE TABLE `restaurants_dish` (
  `id` int(11) NOT NULL,
  `restaurant_user_id` varchar(255) NOT NULL,
  `dish_name` varchar(255) NOT NULL,
  `dish_description` varchar(255) NOT NULL,
  `dish_price` varchar(255) NOT NULL,
  `today_discount_percentage` varchar(255) NOT NULL,
  `dish_food_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants_dish`
--

INSERT INTO `restaurants_dish` (`id`, `restaurant_user_id`, `dish_name`, `dish_description`, `dish_price`, `today_discount_percentage`, `dish_food_type`, `created_at`) VALUES
(3, '23', 'Shahi Paneer', 'Delicious Shahi Paneer', '150', '', 'veg', '2021-01-07 10:48:07'),
(7, '23', 'Desserts', 'Tasty Desserts', '100', '', 'desserts', '2021-01-07 10:51:54'),
(9, '23', 'Roti', 'Garma Garm Roti', '100', '', 'veg', '2021-01-07 10:52:21'),
(10, '23', 'Malai Kofta', 'Delicious Malai Kofta', '1000', '', 'veg', '2021-01-07 10:52:37'),
(11, '23', 'Naan', 'Tandoori Naan', '100', '', 'veg', '2021-01-07 10:52:54'),
(12, '23', 'Chicken', 'Delicious Chicken', '150', '', 'non_veg', '2021-01-07 10:53:11'),
(13, '23', 'Biryani', 'Delicious Biryani', '1000', '', 'non_veg', '2021-01-07 10:53:30'),
(14, '23', 'Dum Biryani', 'Delicious Dum Biryani', '500', '', 'non_veg', '2021-01-07 10:53:47'),
(15, '23', 'drinks', 'Healthy Drinks', '150', '', 'drinks', '2021-01-07 10:54:00'),
(17, '24', 'Chicken', 'Delicious Chicken', '100', '', 'non_veg', '2021-01-07 12:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_id`, `role_name`) VALUES
(1, '1', 'Restaurants'),
(2, '2', 'Customers');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_role` varchar(3) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_mobile`, `user_password`, `user_role`, `created_at`) VALUES
(25, 'restaurants2@gmail.c', 'restaurants2@gmail.com', '09802378295', 'e10adc3949ba59abbe56e057f20f883e', '1', '2021-01-07 12:49:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants_dish`
--
ALTER TABLE `restaurants_dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurants_dish`
--
ALTER TABLE `restaurants_dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
