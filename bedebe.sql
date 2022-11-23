-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2019 at 09:26 AM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.14-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedebe`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appartment_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms_conditions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`id`, `user_id`, `user_type`, `order_id`, `display_name`, `company`, `country`, `street_address`, `appartment_address`, `city`, `postcode`, `phone`, `email`, `type`, `payment_method`, `terms_conditions`, `created_at`, `updated_at`) VALUES
(26, 35, 'buyer', 51, 'Sunil kumar', 'Mandy Web Desging', 'india', 'mohali', 'mohali', 'mohali', '16005', '5647654574', 'sunilkumar@gmail.com', 'billing', 'Orange', '1', '2019-03-30 06:16:40', '2019-03-30 06:16:40'),
(27, 35, 'buyer', 52, 'Ghjjhgj hgjh', 'hjgjh', 'jhjh', 'jhjh', 'jhjh', 'hjg', '8451', '6766757', 'sandeepbajwa620@gmail.com', 'billing', 'Money', '1', '2019-03-30 09:43:03', '2019-03-30 09:43:03'),
(28, 35, 'buyer', 53, 'Sunil kumar', 'Mandy Web Desging', 'india', 'mohali', 'mohali', 'mohali', '16005', '5647654574', 'sunilkumar@gmail.com', 'billing', 'Cash', '1', '2019-04-01 08:58:01', '2019-04-01 08:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_address`
--

CREATE TABLE `buyer_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('supplier','exporter','buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_address_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyer_address`
--

INSERT INTO `buyer_address` (`id`, `user_id`, `user_type`, `name`, `surname`, `address_line1`, `address_line2`, `phone`, `post_code`, `address_type`, `shop_address_type`, `created_at`, `updated_at`) VALUES
(1, 35, 'buyer', 'Sunil', 'kumar', 'mohali testing', 'mohali2 k', '999445465', '124544', 'madagascar', 'bedebeShop', '2019-03-27 10:36:00', '2019-03-27 10:36:00'),
(2, 35, 'buyer', 'Ayush', 'Kumar', 'mohalighgfhgfh', 'mohali2', '9994454656', '1245', 'invoicing', 'bedebeShop', '2019-03-27 11:09:12', '2019-03-27 11:09:12'),
(9, 35, 'buyer', 'HP', 'kumar', 'retret', 'mohali2 testing', '999445465', '1245', 'invoicing', 'bedebeShop', '2019-04-01 08:55:11', '2019-04-01 08:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_infos`
--

CREATE TABLE `buyer_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms_conditions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newsletters` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyer_infos`
--

INSERT INTO `buyer_infos` (`id`, `user_id`, `user_type`, `address_line1`, `address_line2`, `phone`, `region`, `city`, `terms_conditions`, `newsletters`, `created_at`, `updated_at`) VALUES
(7, 35, 'buyer', 'mohali', 'mohali', '5647654574', 'hindu', 'mohali', '1', '1', '2019-03-25 04:37:13', '2019-03-25 04:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_invoices`
--

CREATE TABLE `buyer_invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('supplier','exporter','buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms_conditions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyer_invoices`
--

INSERT INTO `buyer_invoices` (`id`, `user_id`, `user_type`, `name`, `invoice_no`, `quantity`, `amount`, `currency`, `invoice_type`, `invoice_status`, `payment_method`, `terms_conditions`, `created_at`, `updated_at`) VALUES
(2, 35, 'buyer', 'Sunil kumar', '156488897', '2', '200', '$', 'directShop', 'pending', 'Cash', '1', '2019-04-11 07:50:41', '2019-04-11 07:50:41');

-- --------------------------------------------------------

--
-- Table structure for table `default_delivery_address`
--

CREATE TABLE `default_delivery_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `default_delivery_address`
--

INSERT INTO `default_delivery_address` (`id`, `country_name`, `country_flag`, `address1`, `code`, `address2`, `address3`, `post_code`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'France', 'france.png', 'GALARDI France PARIS SARL', 'BI  000000', 'SAINT LARDE', 'FOSSES SAINT WITZ', '95470', '33134722584', NULL, NULL),
(2, 'Italy', 'italy.png', 'CENTRAL CARGO SRL', 'BI 000000', 'VIA DI GONFIENTI, 4/2', 'PRATO ITALY', '59100', '+390558710295', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `export_infos`
--

CREATE TABLE `export_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('supplier','exporter') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms_conditions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `newsletters` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `export_infos`
--

INSERT INTO `export_infos` (`id`, `user_id`, `user_type`, `address_line1`, `address_line2`, `phone`, `region`, `city`, `terms_conditions`, `newsletters`, `created_at`, `updated_at`) VALUES
(2, 42, 'supplier', 'supplier', 'supplier', 'supplier', 'supplier', 'supplier', '1', '1', '2019-04-02 09:20:33', '2019-04-02 09:20:33');

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
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_02_26_044604_add_coloumn_to_users_table', 3),
(14, '2019_03_06_085800_create_orders_table', 5),
(15, '2019_03_06_123119_create_order_items_table', 6),
(16, '2019_03_08_063654_create_billing_details_table', 7),
(17, '2019_03_08_124805_add_order_item_qty_to_order_items_table', 8),
(19, '2019_03_13_120223_create_default_delivery_address_table', 9),
(23, '2019_03_15_073326_create_buyer_infos_table', 10),
(24, '2019_03_19_110226_create_users_delivery_address_table', 11),
(25, '2019_03_19_121744_create_user_default_addresses_table', 12),
(27, '2019_02_20_124204_create_products_table', 13),
(28, '2019_03_25_041727_add_columns_to_products_table', 13),
(29, '2019_03_27_073808_create_buyer_address_table', 14),
(30, '2019_03_27_092048_add_postcode_to_buyer_address_table', 15),
(36, '2019_03_28_042031_create_invoices_table', 16),
(38, '2019_03_28_055148_add_address_type_to_buyer_address_table', 17),
(39, '2019_03_29_115939_add_terms_payment_methode_to_billing_billing_details_table', 18),
(42, '2019_03_30_055716_add_product_id_to_order_items_table', 19),
(43, '2019_04_02_060918_create_export_infos_table', 20),
(45, '2019_04_11_074354_add_mayment_method_to_buyer_invoices_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_type`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(51, 35, 'buyer', '3102', 'Pending', '2019-03-30 06:16:40', '2019-03-30 06:16:40'),
(52, 35, 'buyer', '1223', 'Pending', '2019-03-30 09:43:03', '2019-03-30 09:43:03'),
(53, 35, 'buyer', '1373', 'Pending', '2019-04-01 08:58:01', '2019-04-01 08:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_item_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_items_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_item_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `user_id`, `user_type`, `order_id`, `product_id`, `order_item_name`, `order_items_qty`, `order_item_price`, `created_at`, `updated_at`) VALUES
(109, 35, 'buyer', 51, 7, 'Product one', '2', '567', '2019-03-30 06:16:40', '2019-03-30 06:16:40'),
(110, 35, 'buyer', 51, 6, 'retret', '3', '656', '2019-03-30 06:16:40', '2019-03-30 06:16:40'),
(111, 35, 'buyer', 52, 6, 'retret', '1', '656', '2019-03-30 09:43:03', '2019-03-30 09:43:03'),
(112, 35, 'buyer', 52, 7, 'Product one', '1', '567', '2019-03-30 09:43:03', '2019-03-30 09:43:03'),
(113, 35, 'buyer', 53, 8, 'this is my testing product5 testt', '1', '150', '2019-04-01 08:58:01', '2019-04-01 08:58:01'),
(114, 35, 'buyer', 53, 7, 'Product one', '1', '567', '2019-04-01 08:58:01', '2019-04-01 08:58:01'),
(115, 35, 'buyer', 53, 6, 'retret', '1', '656', '2019-04-01 08:58:01', '2019-04-01 08:58:01');

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
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('admin','supplier','exporter','buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `user_type`, `sku`, `name`, `price`, `description`, `website_link`, `product_img`, `reference`, `color`, `size`, `created_at`, `updated_at`) VALUES
(6, 35, 'buyer', 'rtretret', 'retret', '656', 'ytr yhrtytrbyt', 'http://157.230.149.187/bedebe/buyer/create-product', 'img_1553862934.jpg', 'tryrty', 'black', '20.55', '2019-03-29 12:35:34', '2019-03-29 12:35:34'),
(7, 35, 'buyer', '545v654645f5', 'Product one', '567', 'hfgh h hgfgf hgf g', 'http://157.230.149.187/bedebe/buyer/create-product', 'product-default.jpg', 'test new', 'black', '20.55', '2019-03-30 04:25:41', '2019-03-30 04:25:41'),
(8, 35, 'buyer', '1003678678', 'this is my testing product5 testt', '150', 'its my testing description', 'http://157.230.149.187/bedebe/buyer/create-product', 'img_1554108974.jpg', 'test new', 'black', '20.55', '2019-04-01 08:56:14', '2019-04-01 08:56:34'),
(11, 7, 'supplier', '100676767', 'Sunil kumar', '12', 'tesing', 'http://157.230.149.187/bedebe/buyer/create-product', 'product-default.jpg', 'test new', 'black', '20.55', '2019-04-05 07:03:09', '2019-04-05 07:03:09'),
(12, 7, 'supplier', '5645646', 'sunil test product', '56', 'fgfdgdfg fdg', 'http://157.230.149.187/bedebe/buyer/create-product', 'product-default.jpg', 'test new', 'black', '5.2', '2019-04-05 07:16:44', '2019-04-05 11:04:51'),
(13, 8, 'exporter', '654654', 'expoter product testing', '56', '5tryrtb tr ytr ty yt', 'http://157.230.149.187/bedebe/buyer/create-product', 'product-default.jpg', 'test new', 'black', '20.55', '2019-04-05 10:10:31', '2019-04-05 10:10:31'),
(14, 8, 'exporter', '456456', 'expoter product testing44', '56', 'ghf hhgfh g', 'http://157.230.149.187/bedebe/buyer/create-product', 'img_1554459129.jpg', 'test new', 'black', '20.55', '2019-04-05 10:12:09', '2019-04-05 11:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_user.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` enum('admin','supplier','exporter','buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `remember_token`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Sunil kumar', 'default_user.png', 'sunilkapoor244.mandyweb@gmail.com', '$2y$10$h5ow1UeNYC3nO8qFF0Nh7enlMFwuvUSqN7nYe67TV09VAU3pzoREi', 'd96w0xEua5UZuqe0vHCJwji88e3HVz2p2bj1NfUhVTVjjTFJYa217QITKAOm', 'admin', '2019-02-11 12:29:33', '2019-02-11 12:29:33'),
(2, 'Sunil kumar', 'default_user.png', 'sunilkapoor244.mandyweb@gmail.com1', '$2y$10$3njULjVcEqqJjzlDIcQ2Renuv59evizz3HJetNXUxbe6Cp.pg/6tO', 'qir1IJZS3tF9ycv4J4dQ5FuDlf93uu824SoG6PMBu4ZDMmUzzwnuxOKkb6d9', 'supplier', '2019-02-11 12:30:41', '2019-02-11 12:30:41'),
(3, 'Sunil kumar', 'default_user.png', 'sunilkapoor244.mandyweb@gmail.com2', '$2y$10$Bzwth8rBLN..2kGq3kQWr.w8mXLi4w.LzcU5pxMCpCOy13llDPoq.', 'VhAwTlxLzdIRNwG7iCljJ0EM1QRHdjEPhGsOd84GNnAenupcVcLHpVjMD0bx', 'exporter', '2019-02-11 12:31:05', '2019-02-11 12:31:05'),
(5, 'Sunil kumar', 'default_user.png', 'fdsfdsfsdf@gmail.com', '$2y$10$MqZyvJhQWjYxuQqsOLHyRO5xCPORWcon5wWRUAbhrnas.8wI9vCCC', 'JhNdTKVXLbCvgJ2jn63rTrEnEtzOkwEJeKZF1dIX9Tbi5BDSO37DqV33GEEU', 'exporter', '2019-02-13 09:39:21', '2019-02-13 09:39:21'),
(6, 'Sunil kumar', 'default_user.png', 'sunilkapoor244@gmial.com', '$2y$10$8TsfJ2bPND6Z6WtX4VnllO/3auXN92iT7DKFQknKiuUUXDYomHU26', 'nsCBJ6CfTdHVfFo5zuuOfH5PAR9gSwHey9Il0h62AtlYi37uriDHQenKmu2T', 'admin', '2019-02-13 09:58:04', '2019-02-13 09:58:04'),
(7, 'Sunil kumar', 'default_user.png', 'sunilkapoor2441.mandyweb@gmail.com', '$2y$10$qipMxyaZaCLgXO9OGkjoI.dX0MPNAyV1prZFAcR5dAsXduu6m1ZOu', 'c2ufQs0AjZuLPdtg9PkCQ62HWTys9K91vjkuu87IunyZ1KQjQpluTk2efbsO', 'supplier', '2019-02-14 11:58:14', '2019-02-14 11:58:14'),
(8, 'Sunil kumar', 'default_user.png', 'sunilkapoor2442.mandyweb@gmail.com', '$2y$10$W34e7L4Nnpx8TC2oX4EqHOYaJLQWX08EaChxkzbXyCla709i2c77q', 'gH4a5vs06cdaQHUZ0npNvKc8el785dxiId7qkTCfaFtyQqO9JXlQiBpekhre', 'exporter', '2019-02-14 11:58:54', '2019-02-14 11:58:54'),
(11, 'Sunil kumar', 'default_user.png', 'sunilkapoor2445.mandyweb@gmail.com', '$2y$10$Yvk0TBsQGmEPELZcDSPkXeNkKgNK0IQlwQpevlay2GVnsBvyaDH..', '5hrr3JCvYCV7lqoAX1oYSYXzNbgDLDXizSD5N7sbFjHhHTxDtnnDdGltlhai', 'exporter', '2019-02-14 12:26:20', '2019-02-14 12:26:20'),
(35, 'Sunil Kumar', 'default_user.png', 'sunilkapoor2444.mandyweb@gmail.com', '$2y$10$/VFDQLeci2CGwQao15yFNeA.ozhwNEx5IECcIWelr9KUrVyZ8n9F6', 'XQQG4yLELhowsscXSRAG7in7tEjWIbycBKAORFmc', 'buyer', '2019-03-25 04:37:13', '2019-03-25 04:37:13'),
(42, 'Sunil', 'default_user.png', 'pardghip.gpcoders@gmail.com', '$2y$10$E8qJD7tHC0olAHvASuEog.WixTaIYMVLtzdcDiQtx9HiBo4241Rsi', NULL, 'supplier', '2019-04-02 09:20:33', '2019-04-02 09:20:33'),
(43, 'Sunil', 'default_user.png', 'adminkhk@admin.com', '$2y$10$gnR270Y5izNM0NWVNZPpf.FWeJ1.cUHeE/b1Jl5ZAdJBSGh2FG5IS', 'F8hncbSdb4zwU8eEABIwwJzcZ2XwdBvJkw7w8b62vgNduQVLEQLh5v3AHQdh', 'supplier', '2019-04-02 09:21:32', '2019-04-02 09:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `users_delivery_address`
--

CREATE TABLE `users_delivery_address` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` enum('supplier','exporter','buyer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_delivery_address`
--

INSERT INTO `users_delivery_address` (`id`, `user_id`, `user_type`, `address_id`, `created_at`, `updated_at`) VALUES
(4, 35, 'buyer', '1', '2019-03-25 04:37:13', '2019-03-25 04:37:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billing_details_user_id_foreign` (`user_id`),
  ADD KEY `billing_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `buyer_address`
--
ALTER TABLE `buyer_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_address_user_id_foreign` (`user_id`);

--
-- Indexes for table `buyer_infos`
--
ALTER TABLE `buyer_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `buyer_invoices`
--
ALTER TABLE `buyer_invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buyer_invoices_user_id_foreign` (`user_id`);

--
-- Indexes for table `default_delivery_address`
--
ALTER TABLE `default_delivery_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `export_infos`
--
ALTER TABLE `export_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `export_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_items_user_id_foreign` (`user_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_delivery_address`
--
ALTER TABLE `users_delivery_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_delivery_address_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `buyer_address`
--
ALTER TABLE `buyer_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `buyer_infos`
--
ALTER TABLE `buyer_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `buyer_invoices`
--
ALTER TABLE `buyer_invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `default_delivery_address`
--
ALTER TABLE `default_delivery_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `export_infos`
--
ALTER TABLE `export_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `users_delivery_address`
--
ALTER TABLE `users_delivery_address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD CONSTRAINT `billing_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `billing_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `buyer_address`
--
ALTER TABLE `buyer_address`
  ADD CONSTRAINT `buyer_address_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `buyer_infos`
--
ALTER TABLE `buyer_infos`
  ADD CONSTRAINT `buyer_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `buyer_invoices`
--
ALTER TABLE `buyer_invoices`
  ADD CONSTRAINT `buyer_invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `export_infos`
--
ALTER TABLE `export_infos`
  ADD CONSTRAINT `export_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_delivery_address`
--
ALTER TABLE `users_delivery_address`
  ADD CONSTRAINT `users_delivery_address_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
