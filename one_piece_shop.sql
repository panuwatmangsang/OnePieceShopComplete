-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 07:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `one_piece_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories_products`
--

CREATE TABLE `accessories_products` (
  `accessories_id` int(10) UNSIGNED NOT NULL,
  `accessories_imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessories_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accessories_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories_products`
--

INSERT INTO `accessories_products` (`accessories_id`, `accessories_imagePath`, `accessories_title`, `accessories_price`, `created_at`, `updated_at`) VALUES
(1, '/images/accessories/accessories8.jpg', 'Hancock Earrings', 140, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(2, '/images/accessories/accessories3.jpg', 'Zoro Sword', 125, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(3, '/images/accessories/accessories9.jpg', 'Bangle', 130, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(4, '/images/accessories/accessories1.jpg', 'Necklace', 150, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(5, '/images/accessories/accessories2.jpg', 'Luffy Hat', 140, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(6, '/images/accessories/accessories4.jpeg', 'Zoro Sword', 125, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(7, '/images/accessories/accessories5.jpg', 'Zoro Sword', 130, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(8, '/images/accessories/accessories6.jpg', 'Chopper', 150, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(9, '/images/accessories/accessories7.jpg', 'Ace Hat', 140, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(10, '/images/accessories/accessories12.jpg', 'One Piece Ring', 125, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(11, '/images/accessories/accessories10.jpg', 'One Piece Ring', 125, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(12, '/images/accessories/accessories11.jpg', 'One Piece Ring', 125, '2020-10-24 02:17:51', '2020-10-24 02:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `cloth_products`
--

CREATE TABLE `cloth_products` (
  `cloth_id` int(10) UNSIGNED NOT NULL,
  `cloth_imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cloth_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cloth_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cloth_products`
--

INSERT INTO `cloth_products` (`cloth_id`, `cloth_imagePath`, `cloth_title`, `cloth_price`, `created_at`, `updated_at`) VALUES
(1, '/images/shirt-shorts/shirt10.jpg', 'Luffy Shirt', 200, '2020-10-24 02:17:49', '2020-10-24 02:17:49'),
(2, '/images/shirt-shorts/shirt4.jpg', 'Luffy Shirt', 199, '2020-10-24 02:17:50', '2020-10-24 02:17:50'),
(3, '/images/shirt-shorts/shirt1.jpg', 'One Piece Shirt', 250, '2020-10-24 02:17:50', '2020-10-24 02:17:50'),
(4, '/images/shirt-shorts/shirt2.jpg', 'One Piece Shirt', 199, '2020-10-24 02:17:50', '2020-10-24 02:17:50'),
(5, '/images/shirt-shorts/shirt3.jpg', 'Law Shirt', 200, '2020-10-24 02:17:50', '2020-10-24 02:17:50'),
(6, '/images/shirt-shorts/shirt5.jpg', 'One Piece Shirt', 199, '2020-10-24 02:17:50', '2020-10-24 02:17:50'),
(7, '/images/shirt-shorts/shirt6.jpg', 'Luffy Shirt', 200, '2020-10-24 02:17:50', '2020-10-24 02:17:50'),
(8, '/images/shirt-shorts/shirt7.jpg', 'Luffy Shirt', 199, '2020-10-24 02:17:50', '2020-10-24 02:17:50'),
(9, '/images/shirt-shorts/shirt8.jpg', 'One Piece Shirt', 200, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(10, '/images/shirt-shorts/shirt9.jpg', 'Nami Shirt', 199, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(11, '/images/shirt-shorts/shirt11.jpg', 'Luffy Shirt', 200, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(12, '/images/shirt-shorts/shirt12.jpg', 'Luffy Shirt', 199, '2020-10-24 02:17:51', '2020-10-24 02:17:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2020_10_24_050420_create_model_products_table', 1),
(7, '2020_10_24_052814_create_poster_products_table', 2),
(8, '2020_10_24_055442_create_cloth_products_table', 3),
(9, '2020_10_24_055521_create_accessories_products_table', 3),
(10, '2020_10_24_055547_create_sundry_products_table', 3),
(11, '2020_10_24_092259_create_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_products`
--

CREATE TABLE `model_products` (
  `model_id` int(10) UNSIGNED NOT NULL,
  `product_type_id` int(10) DEFAULT NULL,
  `model_imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_products`
--

INSERT INTO `model_products` (`model_id`, `product_type_id`, `model_imagePath`, `model_title`, `model_price`, `created_at`, `updated_at`) VALUES
(1, 1, '/images/model/kaido/kaido.jpg', 'Kaido2', 6505, '2020-10-24 02:17:47', '2020-10-24 02:17:47'),
(2, 1, '/images/model/jinbe/jinbe.jpg', 'Jinbe', 1300, '2020-10-24 02:17:47', '2020-10-24 02:17:47'),
(3, 1, '/images/model/luffy3/luffy31.jpg', 'Monkey D Luffy', 900, '2020-10-24 02:17:47', '2020-10-24 02:17:47'),
(4, 1, '/images/model/solo/solo.jpg', 'Roronoa Zoro', 450, '2020-10-24 02:17:47', '2020-10-24 02:17:47'),
(5, 1, '/images/model/mulgo/mulgo.jpg', 'Marco', 400, '2020-10-24 02:17:47', '2020-10-24 02:17:47'),
(6, 1, '/images/model/luffy-catacuri/luffy-catacuri.jpg', 'Charlotte Katakuri', 1250, '2020-10-24 02:17:47', '2020-10-24 02:17:47'),
(7, 1, '/images/model/frankky/frankky.jpg', 'Frankky', 450, '2020-10-24 02:17:47', '2020-10-24 02:17:47'),
(8, 1, '/images/model/hancock/hancock.jpg', 'Boa Hancock', 550, '2020-10-24 02:17:47', '2020-10-24 02:17:47'),
(9, 1, '/images/model/hancock-ship/hancock-ship.jpg', 'Hancock Ship', 300, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(10, 1, '/images/model/luffy/luffy.jpg', 'Monkey D Luffy', 500, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(11, 1, '/images/model/luffy2/luffy21.jpg', 'Monkey D Luffy', 490, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(12, 1, '/images/model/mini-luffy/mini-luffy.jpg', 'Mini Luffy', 440, '2020-10-24 02:17:48', '2020-10-24 02:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `poster_products`
--

CREATE TABLE `poster_products` (
  `poster_id` int(10) UNSIGNED NOT NULL,
  `poster_imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `poster_products`
--

INSERT INTO `poster_products` (`poster_id`, `poster_imagePath`, `poster_title`, `poster_price`, `created_at`, `updated_at`) VALUES
(1, '/images/poster/poster3.jpg', 'Monkey D Dragon', 450, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(2, '/images/poster/poster9.jpg', 'Shank Coos', 440, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(3, '/images/poster/poster1.jpg', 'God Usopp', 300, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(4, '/images/poster/poster2.jpg', 'Charlotte Katakuri', 440, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(5, '/images/poster/poster4.jpg', 'Charlotte Linlin', 450, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(6, '/images/poster/poster5.jpg', 'Edward Newgate', 440, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(7, '/images/poster/poster6.jpg', 'Mani', 450, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(8, '/images/poster/poster7.jpg', 'Franky', 440, '2020-10-24 02:17:48', '2020-10-24 02:17:48'),
(9, '/images/poster/poster8.jpg', 'Brook', 440, '2020-10-24 02:17:49', '2020-10-24 02:17:49'),
(10, '/images/poster/poster10.jpg', 'Gold D Roger', 440, '2020-10-24 02:17:49', '2020-10-24 02:17:49'),
(11, '/images/poster/poster11.jpg', 'Monkey D Luffy', 440, '2020-10-24 02:17:49', '2020-10-24 02:17:49'),
(12, '/images/poster/poster12.jpg', 'Roronoa Zoro', 440, '2020-10-24 02:17:49', '2020-10-24 02:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_type_id` int(10) NOT NULL,
  `product_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_type_name`) VALUES
(1, 'models'),
(2, 'poster_images'),
(3, 'clothes'),
(4, 'accessories'),
(5, 'sundry');

-- --------------------------------------------------------

--
-- Table structure for table `sundry_products`
--

CREATE TABLE `sundry_products` (
  `sundry_id` int(10) UNSIGNED NOT NULL,
  `sundry_imagePath` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sundry_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sundry_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sundry_products`
--

INSERT INTO `sundry_products` (`sundry_id`, `sundry_imagePath`, `sundry_title`, `sundry_price`, `created_at`, `updated_at`) VALUES
(1, '/images/sundry/bepo3/bepo31.jpg', 'ฺBepo', 250, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(2, '/images/sundry/bepo/bepo.jpg', 'Bepo', 200, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(3, '/images/sundry/bepo2/bepo21.jpg', 'ฺBepo', 300, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(4, '/images/sundry/glass-water/glass-water4.jpg', 'One Piece Water Glass', 230, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(5, '/images/sundry/luffy-small/luffy-small2.jpg', 'Mini Luffy', 200, '2020-10-24 02:17:51', '2020-10-24 02:17:51'),
(6, '/images/sundry/sundry1.jpg', 'Luffy Water Glass', 100, '2020-10-24 02:17:52', '2020-10-24 02:17:52'),
(7, '/images/sundry/sundry3.jpg', 'Luffy Mattress set', 400, '2020-10-24 02:17:52', '2020-10-24 02:17:52'),
(8, '/images/sundry/sundry4.jpg', 'Luffy Mattress set', 350, '2020-10-24 02:17:52', '2020-10-24 02:17:52'),
(9, '/images/sundry/sundry5.jpeg', 'Luffy Doll', 250, '2020-10-24 02:17:52', '2020-10-24 02:17:52'),
(10, '/images/sundry/sundry6.jpg', 'Chopper Doll', 250, '2020-10-24 02:17:52', '2020-10-24 02:17:52'),
(11, '/images/sundry/sundry7.jpg', 'One Piece Doll', 300, '2020-10-24 02:17:52', '2020-10-24 02:17:52'),
(12, '/images/sundry/sundry8.jpg', 'Chopper Doll', 250, '2020-10-24 02:17:52', '2020-10-24 02:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'nuttor', 'panuwatmangsang@gmail.com', '$2y$10$nVyMb0.Vk4WdEavEVsWRQucsaXrFrM8.KotW9.8en5degKA7GiVHm', '2020-10-24 23:32:05', '2020-10-24 23:32:05'),
(2, 'nuttor2', 'test@gmail.com', '$2y$10$qsoTT/NXxUNGVKyM6HhtHOF.rRRp8cAs9bN8TVfjcgy/aMd50xAp.', '2020-10-25 01:43:14', '2020-10-25 01:43:14'),
(3, 'nuttor2', 'dggg@gg.com', '$2y$10$UuWHqAmKZNTEql798SU1qepuUTD3.L/SQIoFUMNrB.B6If8FNqJJ6', '2020-10-25 08:57:52', '2020-10-25 08:57:52'),
(4, 'nuttor3', 'wtp09389@wtp.ac.th', '$2y$10$iItQwDi6009UCaElFoGoF.3VJjZd/1lKK4aSYw7zR3CfqIYjgmDWG', '2020-10-25 09:33:05', '2020-10-25 09:33:05'),
(5, 'nuttor3', 'don_51120@hotmail.com', '$2y$10$jxViHqs3PcDectBuou8.iuw48xy3hbCFOyHzOr89X1UXS6qtapeBe', '2020-10-28 00:17:28', '2020-10-28 00:17:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories_products`
--
ALTER TABLE `accessories_products`
  ADD PRIMARY KEY (`accessories_id`);

--
-- Indexes for table `cloth_products`
--
ALTER TABLE `cloth_products`
  ADD PRIMARY KEY (`cloth_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_products`
--
ALTER TABLE `model_products`
  ADD PRIMARY KEY (`model_id`),
  ADD KEY `product_type_id` (`product_type_id`);

--
-- Indexes for table `poster_products`
--
ALTER TABLE `poster_products`
  ADD PRIMARY KEY (`poster_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `sundry_products`
--
ALTER TABLE `sundry_products`
  ADD PRIMARY KEY (`sundry_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories_products`
--
ALTER TABLE `accessories_products`
  MODIFY `accessories_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cloth_products`
--
ALTER TABLE `cloth_products`
  MODIFY `cloth_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `model_products`
--
ALTER TABLE `model_products`
  MODIFY `model_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `poster_products`
--
ALTER TABLE `poster_products`
  MODIFY `poster_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `product_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sundry_products`
--
ALTER TABLE `sundry_products`
  MODIFY `sundry_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
