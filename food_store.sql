-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2021 at 01:27 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `login` varchar(150) COLLATE utf8_bin NOT NULL,
  `password` varchar(150) COLLATE utf8_bin NOT NULL,
  `name` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `login`, `password`, `name`) VALUES
(6, 'tarek', '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq', 'tarek'),
(7, 'admin', '$2y$10$uXm/N8J5AngWHSSlwOH1EOuG4iYl9SxfZJvXvq8.coj7bbCikmPw.', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `image` varchar(150) COLLATE utf8_bin NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`) VALUES
(14, 'Soft drinks', '1472736910ban_image.jpg', 'Juices, carbonated drinks, tea.'),
(15, 'Alcohol', '1472737256alcohol.jpg', 'Wine, whiskey, beer.'),
(16, 'Soups', '1472737743img_soups.jpg', 'Hot and cold soups.\r\n\r\n'),
(17, 'Pizzas\r\n\r\n', '14727633116-pizza_pepperoni_main_6.png', 'Pizzas for every taste.');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `image` varchar(200) COLLATE utf8_bin NOT NULL,
  `description` mediumtext COLLATE utf8_bin NOT NULL,
  `price` double NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `name`, `image`, `description`, `price`, `category_id`) VALUES
(14, 'Pirin region', '1472738274img_pirinsko.jpg', 'beer - 500 ml.', 450, 15),
(15, 'Zagorka', '1472738428img_zagorka.jpg', 'Beer - 500 ml.', 540, 15),
(16, 'Tuborg', '1472738532img_tuborg.jpg', 'Beer - 500 ml.', 300, 15),
(17, 'Coke', '1472738929img_coca-cola.jpg', '500 ml, glass bottle', 150, 14),
(18, 'Tarator', '1472739526img_tarator.jpg', 'Cold soup', 100, 16),
(19, 'Chicken soup', '1472739721img_chicken-soup.jpg', 'Warm chicken soup with fresh parsley.\r\n\r\n', 250, 16),
(20, 'Tripe soup', '1472739937img_shkembe-chorba.png', 'Chinese tripe soup with fresh coconut milk.', 410, 16),
(21, 'Red wine', '1472741216img_red-wine.jpg', 'Red Melnik wine 750ml.', 2500, 15),
(22, 'White wine', '1472741471img_shardone.jpg', 'Chardonnay 750ml.', 2000, 15),
(23, 'abc', '1620516248rice_with_chicken.jpeg', 'there is no description', 350, 16);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `price` double NOT NULL,
  `adress` mediumtext COLLATE utf8_bin NOT NULL,
  `datetime` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `price`, `adress`, `datetime`, `status`) VALUES
(14, 'Jack', '0894613123', 94, 'abc, d-block, xyz', '2020-09-01 07:55:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_foods`
--

CREATE TABLE `orders_foods` (
  `id` int(11) NOT NULL,
  `food_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders_foods`
--

INSERT INTO `orders_foods` (`id`, `food_id`, `order_id`, `price`, `quantity`) VALUES
(30, 15, 14, 2, 1),
(31, 16, 14, 15, 5),
(32, 22, 14, 60, 3),
(33, 20, 14, 8, 2),
(34, 18, 14, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `reservation_date` datetime NOT NULL,
  `people_number` int(11) NOT NULL,
  `phone` varchar(100) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `reservation_date`, `people_number`, `phone`, `status`) VALUES
(6, 'Tarek', 'Tarek', '2020-09-23 13:55:00', 4, '012542150', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_foods`
--
ALTER TABLE `orders_foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders_foods`
--
ALTER TABLE `orders_foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders_foods`
--
ALTER TABLE `orders_foods`
  ADD CONSTRAINT `orders_foods_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_foods_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `foods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
