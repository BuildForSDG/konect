-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 10:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3
-- CREATE DATABASE IF NOT EXISTS konect;

-- use konect;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konect`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `price` int(255) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residential_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usersi`
--

CREATE TABLE `usersi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `residential_address` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `role` varchar(10) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersi`
--

INSERT INTO `usersi` (`id`, `name`, `email`, `password`, `residential_address`, `state`, `gender`, `role`, `is_verified`, `date_of_birth`, `created_at`, `update_at`) VALUES
(1, 'vjhv', 'hgfhg@g.co', 'ghcchg', 'jfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjfyjfuyjgiukgbkjhbkjbkhjf', 'kjggk', 'female', 'farmer', 0, '2-may-1999', '2020-05-06 17:33:45', '0000-00-00 00:00:00'),
(2, 'name', 'email@h.com', 'd41d8cd98f00b204e9800998ecf8427e', 'state', 'address', '', 'Farmer', 0, '', '2020-05-06 20:21:42', '0000-00-00 00:00:00'),
(3, 'name', 'email@h.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'state', 'address', '', 'Farmer', 0, '', '2020-05-06 20:22:08', '0000-00-00 00:00:00'),
(4, 'name', 'email@h.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'state', 'address', '', 'Farmer', 0, '', '2020-05-06 20:25:42', '0000-00-00 00:00:00'),
(5, 'name', 'email@h.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'state', 'address', '', 'Farmer', 0, '', '2020-05-06 20:25:47', '0000-00-00 00:00:00'),
(6, 'name', 'email@h.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'state', 'address', '', 'Farmer', 0, '', '2020-05-06 20:25:48', '0000-00-00 00:00:00'),
(7, 'name', 'email@h.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'state', 'address', '', 'Farmer', 0, '', '2020-05-06 20:25:49', '0000-00-00 00:00:00'),
(8, 'name', 'email@h.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'state', 'address', '', 'Farmer', 0, '', '2020-05-06 20:25:49', '0000-00-00 00:00:00'),
(9, 'hjhv', 'vjhv@b.com', '9475a9b51a1c6aca237ace734b2db734', 'vjhv', 'hjvjhvjh', '', 'Buyyer', 0, '', '2020-05-07 09:31:11', '0000-00-00 00:00:00'),
(10, 'hvhj', 'jhhvjh@g.com', '84cd5a402a29dedec243da86e410193c', 'hvhjv', 'hjvhv', '', 'Buyyer', 0, '', '2020-05-07 09:45:27', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usersi`
--
ALTER TABLE `usersi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usersi`
--
ALTER TABLE `usersi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
