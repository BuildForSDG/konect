-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 12:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

CREATE DATABASE IF NOT EXISTS farmkonect;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmmkonect`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `user_id` int(50) NOT NULL,
  `productId` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `productId`, `status`, `msg`, `created_at`, `updated_at`) VALUES
(1, 12, 1, 1, 'Hi this product is very goood', '2020-06-08 08:36:37', '0000-00-00 00:00:00'),
(2, 12, 1, 1, 'It is really awesome product', '2020-06-08 08:36:37', '0000-00-00 00:00:00'),
(4, 11, 2, 1, 'This product is qualitative, This product is qualitative.', '2020-06-08 08:37:57', '0000-00-00 00:00:00'),
(5, 10, 1, 1, 'Hi this product is very goood, i like it :)', '2020-06-08 08:36:37', '0000-00-00 00:00:00'),
(8, 12, 1, 1, 'Hello guys this product is coool', '2020-06-08 09:34:53', '0000-00-00 00:00:00'),
(9, 43, 2, 1, 'This is awesome product', '2020-06-09 17:54:22', '0000-00-00 00:00:00'),
(10, 45, 4, 1, 'Its awseom product', '2020-06-09 18:48:56', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `user_id` int(50) NOT NULL,
  `msg` text NOT NULL,
  `notification_status` varchar(100) NOT NULL,
  `notification_type` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_id` int(50) NOT NULL,
  `product` varchar(255) NOT NULL,
  `order_code` varchar(50) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `shipping_location` text NOT NULL,
  `is_paid` tinyint(1) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product`, `order_code`, `order_status`, `price`, `shipping_location`, `is_paid`, `date_order`) VALUES
(2, 12, '', '4534rg', 'pending', 345, 'gdfgdgdf', 0, '2020-06-09 14:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `userid` bigint(50) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_key` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `location` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `userid`, `owner`, `phone`, `name`, `description`, `img_key`, `price`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 'Aminu Muhammed', '07084060020', 'Vegetables', 'it&#039;s a good product you&#039;ll like it', '8fnpiV2Wxco17tvnh5', 2000, 'Kantagora, garin dan Daho, ng.', 1, '2020-06-08 06:57:40', '0000-00-00 00:00:00'),
(2, 12, 'John Due', '98753567886', 'Okros', 'It&#039;s is good product you&#039;ll really like it.', 'oD286h95yqMxiRmm7G', 2678, 'Earth', 1, '2020-06-08 06:56:57', '0000-00-00 00:00:00'),
(4, 11, 'jgjhb', '9876545678', 'hvjhbhj', 'hjbjhbhbhj', 'vn1HayytwCNY4ibkjl', 789, 'bjkbkj', 1, '2020-06-09 08:10:47', '0000-00-00 00:00:00'),
(5, 11, 'Nzami mnhvf', '897654678', 'Gari', 'ifhsjkfk', 'e64srn5UoxXRjVEg78', 344, 'mnfmf', 1, '2020-06-09 18:50:46', '2020-06-09 20:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_img`
--

CREATE TABLE `product_img` (
  `id` int(11) NOT NULL,
  `img_Url` varchar(255) NOT NULL,
  `unique_Key` varchar(255) NOT NULL,
  `date_upload` datetime NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_img`
--

INSERT INTO `product_img` (`id`, `img_Url`, `unique_Key`, `date_upload`, `status`) VALUES
(1, 'product-YrpgMzIpxkjyan6ixNfk.jpeg', '8fnpiV2Wxco17tvnh5', '2020-06-08 07:52:20', '1'),
(2, 'product-6mtMfHIXBYvg8FVzGufk.jpeg', '8fnpiV2Wxco17tvnh5', '2020-06-08 07:52:20', '1'),
(3, 'product-VUszn3nOddEv6Rov7Sfk.jpeg', '8fnpiV2Wxco17tvnh5', '2020-06-08 07:52:20', '1'),
(4, 'product-kxlZ4oGUVyv0dpSgf6fk.jpeg', '8fnpiV2Wxco17tvnh5', '2020-06-08 07:52:20', '1'),
(5, 'product-SikQ1pueXHYmDdcbxyfk.jpeg', '8fnpiV2Wxco17tvnh5', '2020-06-08 07:52:20', '1'),
(6, 'product-FMh3SxXfkvBTHiyr83fk.jpeg', '8fnpiV2Wxco17tvnh5', '2020-06-08 07:52:20', '1'),
(7, 'product-rxvBXo7gKSHwtvnQxLfk.jpeg', 'oD286h95yqMxiRmm7G', '2020-06-08 07:56:57', '1'),
(8, 'product-mWgOxNnc9gDiz5akApfk.jpeg', 'oD286h95yqMxiRmm7G', '2020-06-08 07:56:57', '1'),
(9, 'product-ViHSypIkYiCdvK9Nskfk.jpeg', 'oD286h95yqMxiRmm7G', '2020-06-08 07:56:57', '1'),
(10, 'product-58KQdzsVcpx33If9qDfk.jpeg', 'oD286h95yqMxiRmm7G', '2020-06-08 07:56:57', '1'),
(11, 'product-cMPEl1db5thBGYyh7ofk.jpeg', 'oD286h95yqMxiRmm7G', '2020-06-08 07:56:57', '1'),
(12, 'product-KjuquEb8mz5Fceg2pvfk.jpeg', 'oD286h95yqMxiRmm7G', '2020-06-08 07:56:57', '1'),
(13, 'product-ziF91IxgdvVXMb0cp2fk.jpeg', 'A0j3yhY6CsHqg6ymbn', '2020-06-09 08:58:59', '1'),
(14, 'product-Wikc4C9mwhuBH5g2urfk.jpeg', 'A0j3yhY6CsHqg6ymbn', '2020-06-09 08:58:59', '1'),
(15, 'product-FpDBvgo9CibfdJnM7xfk.jpeg', 'A0j3yhY6CsHqg6ymbn', '2020-06-09 08:58:59', '1'),
(16, 'product-Su1XuGVWoMD3ayTtjgfk.jpeg', 'A0j3yhY6CsHqg6ymbn', '2020-06-09 08:58:59', '1'),
(17, 'product-dJNyLX4itxSBR3CmqTfk.jpeg', 'A0j3yhY6CsHqg6ymbn', '2020-06-09 08:58:59', '1'),
(18, 'product-v4FVsng6Ngptm3il0Cfk.jpeg', 'A0j3yhY6CsHqg6ymbn', '2020-06-09 08:58:59', '1'),
(19, 'product-TmGajcOmrigbUIEW7Xfk.jpeg', 'A0j3yhY6CsHqg6ymbn', '2020-06-09 08:58:59', '1'),
(20, 'product-RekaysnK3YhObzB6Pkfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(21, 'product-Oeh39x4hKaAGyiCV2nfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(22, 'product-qeIavsub1H5ZTREWmifk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(23, 'product-JvQANedgVX586tSqDjfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(24, 'product-hW5R7uiwoqNnBuSoprfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(25, 'product-ZTLzn3Jux7wup5gvxnfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(26, 'product-QgSvhDaR4jWpLvy2Bifk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(27, 'product-ABj4fHsouQvbKDlnySfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(28, 'product-xsOiBNvy4gjL9mlnnKfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(29, 'product-yk2KnbI7jpg05ndCiwfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(30, 'product-vfvKXVsdr0AdWnDhqmfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(31, 'product-z3QwEdYRoTjm25i47gfk.jpeg', 'vn1HayytwCNY4ibkjl', '2020-06-09 09:10:47', '1'),
(32, 'product-ziRslw5BmGvtiaoMYdfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(33, 'product-47EeCag5bpnXFMjnxmfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(34, 'product-206qdCY1jv5yruZ3nBfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(35, 'product-fyO5FWBYoavLdJeownfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(36, 'product-MUonyr5jxxvkkDenAofk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(37, 'product-hMO9A2yQYTCaGULmHnfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(38, 'product-nZErtXdnPnx9mjH2upfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(39, 'product-Uc6Bz353dTboeiyGDWfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(40, 'product-VAUg8gdBxHhIQ6yl3qfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(41, 'product-ji5gmeQ7WdscNyiIbafk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(42, 'product-jka4G6YUVglxPdJDfxfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(43, 'product-aAn5yFv8JbhBCnDujqfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(44, 'product-MpuopE2zCvjQVjAsdhfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(45, 'product-dR3jygN3OojXHCpFkQfk.jpeg', 'e64srn5UoxXRjVEg78', '2020-06-09 18:56:47', '1'),
(46, 'product-f9i8zjBdq6gYxvGvP2fk.jpeg', 'V6j0cy7FpivKld1JmC', '2020-06-09 19:50:18', '1'),
(47, 'product-rkdmKQgeMvlbAyjjoRfk.jpeg', 'V6j0cy7FpivKld1JmC', '2020-06-09 19:50:18', '1'),
(48, 'product-6lpm5v5iJaeoHhMuFdfk.jpeg', 'V6j0cy7FpivKld1JmC', '2020-06-09 19:50:18', '1'),
(49, 'product-2njrTptj3wRbIhugkafk.jpeg', 'V6j0cy7FpivKld1JmC', '2020-06-09 19:50:18', '1'),
(50, 'product-30y4A65snJ8dLOgkQcfk.jpeg', 'V6j0cy7FpivKld1JmC', '2020-06-09 19:50:18', '1'),
(51, 'product-uhWveZQ4inIygqynTAfk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(52, 'product-E6v8nyphBshu0cbMp3fk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(53, 'product-mtSIQyp1CjOjzhe3wafk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(54, 'product-5LqmRhGQgTCPNdUFwVfk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(55, 'product-jKwj4uxoJ3bx8cNM7Zfk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(56, 'product-zYBJc6tVLINXo3QuhCfk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(57, 'product-5iZHcxP3Tnyp7XwLojfk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(58, 'product-tsehmvCdnBvnErjz2hfk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(59, 'product-OFy5vgmnxVmajnN0Rzfk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1'),
(60, 'product-paVb5mKEA1yvLjY4lpfk.jpeg', 'ru569Hf88XEcDhwnyO', '2020-06-10 05:19:46', '1');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'Kano'),
(2, 'Abuja'),
(3, 'Lagos'),
(4, 'Bauchi'),
(5, 'Jigawa'),
(6, 'Katsina'),
(7, 'Borno'),
(8, 'Abia'),
(9, 'Adamawa'),
(10, 'Gombe'),
(11, 'Kaduna'),
(12, 'Kogi'),
(13, 'Kwara'),
(14, 'Nassarawa'),
(15, 'Niger'),
(16, 'Ondo'),
(17, 'River'),
(18, 'Sokoto'),
(19, 'Taraba'),
(20, 'Zamfara'),
(21, 'Enugu'),
(22, 'Akwa-ibom'),
(23, 'Anambra'),
(24, 'Bayelsa'),
(25, 'Benue');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `email`, `password`) VALUES
(0, 'amb@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `state` varchar(100) NOT NULL,
  `residential_address` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `password`, `gender`, `state`, `residential_address`, `img`, `role`, `vkey`, `is_verified`, `created_at`, `updated_at`) VALUES
(3, 'abba', 'aka', 'aka@gmail.com', '56789', 'e10adc3949ba59abbe56e057f20f883e', 'm', 'Abia', 'hotoro', '', 'Agent', '', 1, '2020-06-09 16:04:52', '2020-06-09 18:04:05'),
(6, 'hhh', 'hhh', 'hhh@g.co', '', '310dcbbf4cce62f762a2aaa148d556bd', '', 'Choose...', '', '', 'user', '', 0, '2020-05-29 08:05:08', '0000-00-00 00:00:00'),
(9, 'jvgjvgh', 'gv', 'hgvhgvgh@f.co', '', '9cf259ed4c92e7595b0b02d063ccbda8', 'm', 'Choose...', 'hjgjhh', '', 'user', '', 0, '2020-05-31 17:14:55', '0000-00-00 00:00:00'),
(10, 'Aminu', 'Muhammed', 'kano@gj.co', '3333333', 'e10adc3949ba59abbe56e057f20f883e', 'f', 'Abia', '', '', 'User', '', 0, '2020-06-09 18:21:30', '2020-06-09 09:29:04'),
(11, 'Abba gent', 'Kawudee', 'agent@gmail.com', '43232223', 'e10adc3949ba59abbe56e057f20f883e', 'f', 'blg', 'bauchi, dm, ng', 'user_egv5CoTduO_11.jpeg', 'Agent', '', 1, '2020-06-09 18:27:25', '2020-06-09 20:27:02'),
(12, 'AMB Adminn', 'Konectt', 'amb@gmail.com', '34567899', 'e10adc3949ba59abbe56e057f20f883e', 'f', 'hjy', 'hghjh', 'user_t0UyxkhJTW_1.jpeg', 'Admin', '', 1, '2020-06-09 17:32:02', '2020-06-09 19:32:00'),
(13, 'g', 'hj', 'g@d.c', '', 'e34a8899ef6468b74f8a1048419ccc8b', '', 'Choose...', '', '', 'user', '', 0, '2020-06-01 20:01:07', '0000-00-00 00:00:00'),
(14, 'ghcg', 'fgh', 'fgh@fg', '', '1b2b4c6643b5c96a07abdf16fb2220fe', 'm', 'Choose...', 'hgj', '', 'User', '', 0, '2020-06-01 20:12:04', '0000-00-00 00:00:00'),
(15, 'hgg', 'gfc', 'gh@f.co', '', '2ab4f27ab1ffdcdad8ed21a965ca62ad', '', 'Choose...', '', '', 'User', '', 0, '2020-06-01 20:18:04', '0000-00-00 00:00:00'),
(16, 'hg', 'fg', 'gh@gh.com', '', 'bc6c6ccb2ce1f0fc4849a2abbf0cc33d', 'f', 'kano', 'jhghj', '', 'User', '', 0, '2020-06-01 20:37:43', '0000-00-00 00:00:00'),
(17, 'hfcfchgf', 'ghchgc', 'gch@gv.co', '', '4a5b47e079da271df772b75bb8e5164d', 'm', 'kano', 'jhj', '', 'User', '', 0, '2020-06-02 14:42:28', '0000-00-00 00:00:00'),
(18, 'Aminu bbagwai', 'killo', 'sg@v.com', '567890', '9f9a79e9846431d5bae46c012046b7f7', 'm', 'bauchi', 'sdffdcd', '', 'kano', '', 1, '2020-06-08 16:19:32', '0000-00-00 00:00:00'),
(19, 'Auwal sani', 'vvvx', 'zxc@df.com', '345678', '5bd2026f128662763c532f2f4b6f2476', 'f', 'kano', 'hggh', '', 'User', '', 0, '2020-06-08 16:48:11', '0000-00-00 00:00:00'),
(40, 'jkbkjbjk', 'jbkbkj', 'bjk@hkbkh.xxxxxx', '939393399', '', 'm', 'Bayelsa', 'hjbhjb', '', 'Agent', '', 0, '2020-06-09 15:53:27', '0000-00-00 00:00:00'),
(41, 'nkjlnjklnj', 'jjhnknkj', 'jbkbjk@Jbkj.v', '78899889', '', 'm', 'Kaduna', 'hgghj', '', 'Agent', '', 0, '2020-06-09 15:56:34', '0000-00-00 00:00:00'),
(45, 'Aminu', 'Muhammed', 'bulangu@studentpartner.com', '34567', 'e10adc3949ba59abbe56e057f20f883e', 'm', 'Akwa-ibom', 'ghfgghgh', 'user_dfWaPMsovD_45.jpeg', 'User', 'n6NbkoJ3Edv8MGp7YupLDWiQjxuCFIKj2POtRhni', 1, '2020-06-09 18:48:19', '2020-06-09 20:48:01'),
(46, 'gdghdgdhg', 'fgch', 'cgdf@fgc', '345678', '', 'm', 'Abia', 'jhgh', '', 'User', '', 1, '2020-06-09 18:53:14', '2020-06-09 20:53:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_code` (`order_code`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img`
--
ALTER TABLE `product_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
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
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_img`
--
ALTER TABLE `product_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
