-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2017 at 07:54 AM
-- Server version: 5.5.49-log
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `insert_food`
--

CREATE TABLE IF NOT EXISTS `insert_food` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert_food`
--

INSERT INTO `insert_food` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`) VALUES
(14, 'Hamburger', 'Beef/Ch', '7.00', '2017-07-06', '2017-08-10'),
(15, 'Salad', 'Fresh Vegetable', '5.00', '2017-07-06', '2017-07-06'),
(16, 'Drink', 'Coca Cola', '1.00', '2017-07-06', '2017-07-06'),
(17, 'Deserts', 'ice_chocolate', '3.00', '2017-07-06', '2017-07-06'),
(18, 'ooo', 'jj', '90', '2017-07-15', '2017-07-15'),
(19, 'Salad', 'ddd', '21', '2017-08-04', '2017-08-04');

-- --------------------------------------------------------

--
-- Table structure for table `menu_pages`
--

CREATE TABLE IF NOT EXISTS `menu_pages` (
  `id` int(20) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_description` varchar(100) NOT NULL,
  `food_prices` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_pages`
--

INSERT INTO `menu_pages` (`id`, `food_name`, `food_description`, `food_prices`) VALUES
(1, 'Tuna Salad', 'Lettuce / Tomatoes / Tuna / Grain toast', '$25.00'),
(2, 'Roast Beef & Cheddar', 'Cheddar cheese / Lettuce / Roast beef / Sesame bread', '$23.90'),
(3, 'Chicken Pesto', 'All-natural chicken / Tomatoes / Arugula / Baguette', '$15.90  Order'),
(4, 'Manhattan', 'Thinly sliced pastrami / Melted swiss cheese / Lettuce', '$15.90'),
(5, 'Turkey Avocado', 'Smoked turkey breast / Bacon / Lettuce / Toast', '$7.90'),
(6, 'Summer Love', 'Roasted turkey / Red pepper / Fresh avocado', '$7.90'),
(7, 'Tomato Mozarella', 'Roasted red peppers / Arugula / Basil / Baguette', '$23.90'),
(8, 'Chicken Ranch', 'Chicken breast / Melted cheese / Ranch dressing', '$23.90');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_06_30_090314_insert_food', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mao Chenda', 'mao.chenda60@gmail.com', '$2y$10$a6r1vPiyv9xa3YG5J/Y3we5VwLmBs/1/CVL3huPbEcsjuPt162Hki', 'XbhIXGjWSDPeS6bLvwhQeHXy74hMD38oa8mtcFYjA4ToRuMyuURaGL3UaDH5', '2017-06-23 07:48:27', '2017-07-04 21:33:41'),
(2, 'Chea Panha', 'chea.panha@gmail.com', '$2y$10$eFEaKpV.PcNtbCUQfQ5FX.TF7MDL9D/IMvuf1VqCp9wc5.hga9noK', 'pR41NzK8juG3LJCB0PCesnE4Pad5cCDWLJDjUsfqHJgFIphh2N2cnIRwpF6H', '2017-06-23 07:52:15', '2017-06-23 07:52:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insert_food`
--
ALTER TABLE `insert_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_pages`
--
ALTER TABLE `menu_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insert_food`
--
ALTER TABLE `insert_food`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `menu_pages`
--
ALTER TABLE `menu_pages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
