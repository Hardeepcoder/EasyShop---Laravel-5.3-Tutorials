-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 12:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `pincode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `fullname`, `state`, `city`, `country`, `user_id`, `pincode`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 'hardeep singh', 'punjab', 'ludhiana', 'India', 2, '142026', '', '2017-02-06 11:28:38', '2017-02-06 11:28:38'),
(9, 'remani kumar', 'this time demo', 'jagraon', 'United States', 2, '234343', 'COD', '2017-02-18 12:58:20', '2017-02-18 12:58:20'),
(10, 'kaksjajksjss', 'akskajsas', 'kaksjajsj', 'United States', 4, '2332332', 'COD', '2017-04-08 00:39:18', '2017-04-08 00:39:18'),
(11, 'tsedee ', 'Umnugovi', 'uvs aimag', 'Bangladesh', 5, '1212', 'COD', '2017-04-21 09:10:54', '2017-04-21 09:10:54'),
(12, 'tsedee', 'uvs aimag', 'ulaan gom', 'Bangladesh', 5, '121212', 'COD', '2017-04-21 16:30:16', '2017-04-21 16:30:16'),
(13, 'hardeeo', 'punjab', 'Hshsbb', 'India', 2, '142026', 'paypal', '2017-04-25 09:05:48', '2017-04-25 09:05:48'),
(14, 'Joshe', 'Other', 'Barca', 'United States', 7, '4529', 'COD', '2017-05-03 17:22:22', '2017-05-03 17:22:22'),
(15, 'hardeeo', 'punjab', 'jagraon', 'Bangladesh', 2, '142026', 'COD', '2017-05-08 21:34:46', '2017-05-08 21:34:46'),
(16, 'hardeeo', 'punjab', 'jagraon', 'Bangladesh', 2, '142026', 'COD', '2017-05-08 21:35:29', '2017-05-08 21:35:29'),
(17, 'hardeeo', 'california', 'new york', 'Bangladesh', 2, '443211', 'COD', '2017-05-09 04:24:50', '2017-05-09 04:24:50'),
(18, 'hardeeo', 'punjab', 'jagraon', 'Ucrane', 2, '142026', 'COD', '2017-05-09 04:29:15', '2017-05-09 04:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `alt_images`
--

CREATE TABLE `alt_images` (
  `id` int(11) NOT NULL,
  `proId` int(11) NOT NULL,
  `alt_img` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alt_images`
--

INSERT INTO `alt_images` (`id`, `proId`, `alt_img`, `status`) VALUES
(1, 19, '5.jpg', 0),
(2, 19, '4.jpg', 0),
(3, 19, '3.jpg', 0),
(4, 19, '1download.jpg', 0),
(5, 19, '14917953995.jpg', 0),
(6, 26, '14917954523.jpg', 0),
(7, 26, '14917954554.jpg', 0),
(8, 26, '14917954641download.jpg', 0),
(9, 26, '14917955093.jpg', 0),
(10, 26, '14917956711download.jpg', 0),
(11, 26, '14917956772.jpg', 0),
(12, 26, '14917956805.jpg', 0),
(13, 2, '1491907409EZ TC GOLD.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total`, `created_at`, `updated_at`) VALUES
(1, 2, 'pending', '484.00', '2017-02-08 19:41:13', '2017-02-08 19:41:13'),
(2, 2, 'pending', '484.00', '2017-02-08 19:41:48', '2017-02-08 19:41:48'),
(3, 2, 'pending', '768.35', '2017-02-08 21:46:59', '2017-02-08 21:46:59'),
(4, 2, 'pending', '484.00', '2017-02-12 14:31:28', '2017-02-12 14:31:28'),
(5, 2, 'pending', '968.00', '2017-02-18 12:58:20', '2017-02-18 12:58:20'),
(6, 4, 'pending', '153.67', '2017-04-08 00:39:18', '2017-04-08 00:39:18'),
(7, 5, 'pending', '54.45', '2017-04-21 09:10:54', '2017-04-21 09:10:54'),
(8, 5, 'pending', '220.22', '2017-04-21 16:30:16', '2017-04-21 16:30:16'),
(9, 2, 'pending', '0.01', '2017-04-25 09:05:48', '2017-04-25 09:05:48'),
(10, 7, 'pending', '99.23', '2017-05-03 17:22:22', '2017-05-03 17:22:22'),
(11, 2, 'pending', '121.00', '2017-05-08 21:35:29', '2017-05-08 21:35:29'),
(12, 2, 'pending', '55.66', '2017-05-09 04:24:50', '2017-05-09 04:24:50'),
(13, 2, 'pending', '84.70', '2017-05-09 04:29:15', '2017-05-09 04:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `total` float NOT NULL,
  `products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `total`, `products_id`, `orders_id`, `tax`, `qty`) VALUES
(1, 400, 7, 2, '84.00', 1),
(2, 400, 7, 3, '133.35', 1),
(3, 235, 14, 3, '133.35', 1),
(4, 400, 7, 4, '84.00', 1),
(5, 800, 7, 5, '168.00', 2),
(6, 45, 5, 6, '26.67', 1),
(7, 82, 33, 6, '26.67', 1),
(8, 45, 4, 7, '9.45', 1),
(9, 82, 33, 8, '38.22', 1),
(10, 100, 6, 8, '38.22', 2),
(11, 0.01, 1, 9, '0.00', 1),
(12, 0.01, 1, 10, '17.22', 1),
(13, 82, 33, 10, '17.22', 1),
(14, 100, 6, 11, '21.00', 2),
(15, 46, 1, 12, '9.66', 2),
(16, 70, 6, 13, '14.70', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pro_info` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_arrival` tinyint(1) NOT NULL,
  `spl_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_code`, `pro_price`, `pro_info`, `pro_img`, `stock`, `new_arrival`, `spl_price`, `cat_id`, `created_at`, `updated_at`) VALUES
(1, 'Ziemann, Littel and Mraz', 'Hahn-Armstrong', '0.01', 'Ipsam aliquam sit reprehenderit rerum sed hic. Unde at earum cum ut aliquid. Est et est neque sunt.', 'http://lorempixel.com/300/400/cats/?83123', '7', 0, '23', 1, NULL, NULL),
(2, 'Wyman-Cronin', 'Hoppe-Hilll', '96', 'Enim dolores rem vero iure. Rerum aspernatur possimus minus harum velit at veritatis. Fuga pariatur minus distinctio explicabo harum quis. Accusantium aut hic aliquam et.', 'http://lorempixel.com/300/400/cats/?83161', '7', 0, '88', 4, NULL, NULL),
(3, 'Senger and Sons', 'Corwin Ltd', '11', 'Reprehenderit tempora consequatur et blanditiis ut unde perferendis. Voluptas animi cupiditate laudantium quod. Nemo debitis aut eos. Ut tempore dolorem repudiandae sint.', 'http://lorempixel.com/300/400/cats/?49254', '7', 0, '59', 3, NULL, NULL),
(4, 'Weissnat, Price and Mante', 'Botsford Ltd', '18', 'Molestias aut cum qui eum ut quae quasi et. Architecto et repudiandae doloribus beatae veritatis ut odio est. Repudiandae veniam beatae laborum doloremque. Amet quo dolores vel.', 'http://lorempixel.com/300/400/cats/?10657', '7', 0, '12', 2, NULL, NULL),
(5, 'Marvin-Cummings', 'Schmeler LLC', '45', 'Libero quod tempore impedit eaque sunt. Eum cumque saepe voluptatibus alias quia non porro. Sint ut aut ut perferendis excepturi.', 'http://lorempixel.com/300/400/cats/?75446', '7', 0, '58', 2, NULL, NULL),
(6, 'Conn, Bartoletti and Hagenes', 'O\'Kon-Padberg', '50', 'Qui et quibusdam quia repellat. Vitae maxime ut tenetur nostrum incidunt aperiam. Tempore doloremque optio provident non.', 'http://lorempixel.com/300/400/cats/?67463', '7', 0, '35', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_properties`
--

CREATE TABLE `products_properties` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pro_cat`
--

CREATE TABLE `pro_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pro_cat`
--

INSERT INTO `pro_cat` (`id`, `name`, `created_at`, `updated_at`, `status`) VALUES
(1, 'electronics', NULL, NULL, 0),
(2, 'automobiles', NULL, NULL, 0),
(3, 'movies', NULL, NULL, 0),
(4, 'books', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `recommends`
--

CREATE TABLE `recommends` (
  `id` int(10) UNSIGNED NOT NULL,
  `pro_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recommends`
--

INSERT INTO `recommends` (`id`, `pro_id`, `uid`, `created_at`, `updated_at`) VALUES
(1, 5, 2, '2017-03-13 11:40:50', '2017-03-13 11:40:50'),
(2, 2, 2, '2017-03-13 11:41:07', '2017-03-13 11:41:07'),
(3, 3, 2, '2017-03-13 11:41:08', '2017-03-13 11:41:08'),
(4, 7, 2, '2017-03-13 11:41:09', '2017-03-13 11:41:09'),
(5, 5, 1, '2017-03-13 11:41:39', '2017-03-13 11:41:39'),
(6, 4, 1, '2017-03-13 11:41:41', '2017-03-13 11:41:41'),
(7, 2, 1, '2017-03-13 11:41:48', '2017-03-13 11:41:48'),
(8, 8, 1, '2017-03-13 11:41:58', '2017-03-13 11:41:58'),
(9, 33, 1, '2017-03-13 11:42:01', '2017-03-13 11:42:01'),
(10, 5, 3, '2017-03-13 11:42:31', '2017-03-13 11:42:31'),
(11, 4, 3, '2017-03-13 11:42:32', '2017-03-13 11:42:32'),
(12, 6, 3, '2017-03-13 11:42:37', '2017-03-13 11:42:37'),
(13, 3, 3, '2017-03-13 11:42:48', '2017-03-13 11:42:48'),
(14, 2, 3, '2017-03-13 11:42:49', '2017-03-13 11:42:49'),
(15, 33, 3, '2017-03-13 11:44:17', '2017-03-13 11:44:17'),
(16, 33, 3, '2017-03-13 11:44:24', '2017-03-13 11:44:24'),
(17, 33, 3, '2017-03-13 11:45:08', '2017-03-13 11:45:08'),
(18, 13, 3, '2017-03-13 11:46:22', '2017-03-13 11:46:22'),
(19, 13, 3, '2017-03-13 11:46:29', '2017-03-13 11:46:29'),
(20, 33, 3, '2017-03-13 12:06:00', '2017-03-13 12:06:00'),
(21, 5, 4, '2017-04-08 00:19:44', '2017-04-08 00:19:44'),
(22, 1, 2, '2017-04-25 08:59:20', '2017-04-25 08:59:20'),
(23, 1, 2, '2017-04-25 08:59:26', '2017-04-25 08:59:26'),
(24, 1, 2, '2017-04-25 09:06:07', '2017-04-25 09:06:07'),
(25, 1, 2, '2017-04-25 09:06:11', '2017-04-25 09:06:11'),
(26, 6, 2, '2017-04-25 09:20:15', '2017-04-25 09:20:15'),
(27, 1, 2, '2017-04-25 09:20:19', '2017-04-25 09:20:19'),
(28, 1, 2, '2017-04-25 09:20:23', '2017-04-25 09:20:23'),
(29, 1, 2, '2017-04-25 09:20:27', '2017-04-25 09:20:27'),
(30, 8, 2, '2017-05-08 21:33:46', '2017-05-08 21:33:46'),
(31, 6, 2, '2017-05-09 04:28:55', '2017-05-09 04:28:55'),
(32, 6, 2, '2017-05-09 04:28:59', '2017-05-09 04:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `person_name` varchar(255) NOT NULL,
  `person_email` varchar(255) NOT NULL,
  `review_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `created_at`, `updated_at`, `person_name`, `person_email`, `review_content`) VALUES
(1, '2017-05-08 21:33:21', '2017-05-08 21:33:21', 'fvefv', 'efve@ec3fr.fvfv.com', 'efvff ee ef');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anita', 'anita@yahoo.com', '$2y$10$SKj2V9WsGGGHzYyn3L8dfudhpE9CL7PBjeA35LRWKrbXlK3SzUToG', NULL, 'MgxytSUDD0eYdrsUpKDLPUQf2opQ6SUNTVS7HTygC4BAFZO2Ghg3mX1zGRl8', '2016-11-15 08:45:26', '2017-03-13 11:42:05'),
(2, 'hardeep singh', 'hardeepphp@yahoo.com', '$2y$10$O2kdZpLW807FaFYSCHcNwuqfDzehKRlCEYCFHLJYBcOVpI4/laaqG', 1, 'Wdky0ciGs1RPTtwVKFg7LJmo48gSErVnQ0cc3NhprFsZtnqDcIbzQpHZpooV', '2017-01-25 19:50:14', '2017-03-31 08:22:37'),
(3, 'Sonam Gupta', 'sonam@yahoo.com', '$2y$10$SKj2V9WsGGGHzYyn3L8dfudhpE9CL7PBjeA35LRWKrbXlK3SzUToG', NULL, 'm1vwikSzRke7KoBKjHMPgYq4ZdfLCKfo7h7xwLNu0MMjod78aVdYnwxj0R2y', '2016-11-15 08:45:26', '2017-02-03 17:35:28'),
(4, 'alex', 'ejemplo1@gmail.com', '$2y$10$t3jIIrGV2FZrAkI/c7uJmuMJI5IeY6XlhHnvhLcvu6rqKxTmaLOgy', NULL, NULL, '2017-04-07 23:36:37', '2017-04-07 23:36:37'),
(5, 'tsedee', 'tseegii_9512@yahoo.com', '$2y$10$u5oK/KZzCksPaB4NQk6jU.SYcVOP0NGfu4jcDbwQVMPMBPVDHm06W', NULL, 'XGJfbFcnEes7OmPfsVOmWvDruhihEdxL2BU17EzwGEcSfmZq9anumYoVXAz5', '2017-04-21 07:43:03', '2017-04-21 09:11:06'),
(6, 'Imran', 'imran@gmail.com', '$2y$10$z3UnOuHHmCt7cag5uU2zxepGYY3jWNN/95VByi0LHM9RuwM/U9CbO', NULL, NULL, '2017-04-28 13:19:11', '2017-04-28 13:19:11'),
(7, 'Joshe Razier', 'nanographic.bermudez@gmail.com', '$2y$10$Wfi6wMHA9ujbK6RktBsvx.jan8RW/owfeeV1FmNk2Ay1Wc3xz72ri', NULL, NULL, '2017-05-03 17:19:00', '2017-05-03 17:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alt_images`
--
ALTER TABLE `alt_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_properties`
--
ALTER TABLE `products_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_cat`
--
ALTER TABLE `pro_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recommends`
--
ALTER TABLE `recommends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `alt_images`
--
ALTER TABLE `alt_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products_properties`
--
ALTER TABLE `products_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pro_cat`
--
ALTER TABLE `pro_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recommends`
--
ALTER TABLE `recommends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
