-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 01:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop`
--

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
(1, '2019_12_04_204647_create_tbl_admin_table', 1),
(2, '2019_12_06_165232_create_tbl_categorys_table', 2),
(3, '2019_12_06_165824_create_tbl_manufactures_table', 3),
(4, '2019_12_07_070437_create_tbl_manufactures_table', 4),
(5, '2019_12_07_200303_create_tbl_products_table', 5),
(6, '2019_12_14_103832_create_tbl_customer_table', 6),
(7, '2019_12_15_062000_create_tbl_shippings_table', 7),
(8, '2019_12_17_115508_create_tbl_payments_table', 8),
(9, '2019_12_17_121230_create_tbl_orders_table', 8),
(10, '2019_12_17_121334_create_tbl_order_details_table', 8),
(11, '2019_12_17_122450_create_tbl_orders_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '12345', '0182727272', NULL, NULL),
(2, 'shorif', 'shorif@gmail.com', '12345', '01727272727', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorys`
--

CREATE TABLE `tbl_categorys` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_categorys`
--

INSERT INTO `tbl_categorys` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'shoes', 'This is shoes category', 1, NULL, NULL),
(2, 'Baby Dress', 'This is Baby Dress Category.', 1, NULL, NULL),
(3, 'T shart', 'This is T shart Category', 1, NULL, NULL),
(4, 'Panjabi', 'This is Panjabi category.', 1, NULL, NULL),
(5, 'Leather Bag', 'This is Leather Bag category', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_Contract` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_Contract`, `created_at`, `updated_at`) VALUES
(1, 'Shorif', 'shorif@gmail.com', '12345', '017655655', NULL, NULL),
(2, 'Shorif', 'shorif@gmail.com', '12345', '017655655', NULL, NULL),
(3, 'Tamanna', 'tamanna@gmail.com', '12345', '0173647447', NULL, NULL),
(4, 'Al amin', 'alamin@gmail.com', '12345', '0121221288', NULL, NULL),
(5, 'Shorif', 'shorif@gmail.com', '12345', '0121221288', NULL, NULL),
(6, 'shirir', 'shorif@gmail.com', '12345', '0173647447', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufactures`
--

CREATE TABLE `tbl_manufactures` (
  `manufacture_id` bigint(20) UNSIGNED NOT NULL,
  `manufacture_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacture_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_manufactures`
--

INSERT INTO `tbl_manufactures` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(6, 'ShoiShob', 'This Product manufacture by ShoiShob .', 1, NULL, NULL),
(7, 'apex', 'This Product manufacture by apex .', 1, NULL, NULL),
(8, 'Bata', 'This Product manufacture by Bata .', 1, NULL, NULL),
(9, 'Shikor fabric', 'This Product manufacture by Shikor fabric  .', 1, NULL, NULL),
(10, 'New Collection', 'This Product manufacture by New Collection', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 1, '3,200.00', 'pending', '2019-12-18 19:14:24', NULL),
(2, 1, 6, 2, '3,200.00', 'pending', '2019-12-18 19:14:33', NULL),
(3, 1, 7, 3, '3,200.00', 'pending', '2019-12-19 11:17:40', NULL),
(4, 1, 7, 4, '0.00', 'pending', '2019-12-19 11:19:10', NULL),
(5, 1, 7, 5, '0.00', 'pending', '2019-12-19 11:19:35', NULL),
(6, 1, 7, 6, '0.00', 'pending', '2019-12-19 11:19:54', NULL),
(7, 1, 7, 7, '0.00', 'pending', '2019-12-19 11:20:15', NULL),
(8, 1, 7, 8, '0.00', 'pending', '2019-12-19 11:20:47', NULL),
(9, 1, 7, 9, '0.00', 'pending', '2019-12-19 11:21:11', NULL),
(10, 1, 7, 10, '0.00', 'pending', '2019-12-19 11:21:28', NULL),
(11, 1, 7, 11, '0.00', 'pending', '2019-12-19 11:21:45', NULL),
(12, 1, 7, 12, '0.00', 'pending', '2019-12-19 11:22:06', NULL),
(13, 1, 7, 13, '0.00', 'pending', '2019-12-19 11:24:20', NULL),
(14, 1, 7, 14, '0.00', 'pending', '2019-12-19 11:24:48', NULL),
(15, 1, 8, 15, '3,200.00', 'pending', '2019-12-19 11:26:59', NULL),
(16, 1, 8, 16, '0.00', 'pending', '2019-12-19 11:27:44', NULL),
(17, 1, 8, 17, '0.00', 'pending', '2019-12-19 11:28:07', NULL),
(18, 1, 8, 18, '0.00', 'pending', '2019-12-19 11:28:26', NULL),
(19, 1, 8, 19, '0.00', 'pending', '2019-12-19 11:28:44', NULL),
(20, 1, 8, 20, '0.00', 'pending', '2019-12-19 11:29:02', NULL),
(21, 1, 8, 21, '0.00', 'pending', '2019-12-19 11:29:21', NULL),
(22, 1, 8, 22, '0.00', 'pending', '2019-12-19 11:29:55', NULL),
(23, 1, 8, 23, '0.00', 'pending', '2019-12-19 11:30:27', NULL),
(24, 1, 8, 24, '0.00', 'pending', '2019-12-19 11:31:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_sales_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 13, 'shoes', 3200.00, '1', NULL, NULL),
(2, 2, 13, 'shoes', 3200.00, '1', NULL, NULL),
(3, 3, 13, 'shoes', 3200.00, '1', NULL, NULL),
(4, 15, 13, 'shoes', 3200.00, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'bkash', 'pending', '2019-12-18 19:14:23', NULL),
(2, 'cart', 'pending', '2019-12-18 19:14:33', NULL),
(3, 'handcash', 'pending', '2019-12-19 11:17:40', NULL),
(4, 'handcash', 'pending', '2019-12-19 11:19:10', NULL),
(5, 'handcash', 'pending', '2019-12-19 11:19:35', NULL),
(6, 'handcash', 'pending', '2019-12-19 11:19:54', NULL),
(7, 'handcash', 'pending', '2019-12-19 11:20:15', NULL),
(8, 'handcash', 'pending', '2019-12-19 11:20:47', NULL),
(9, 'handcash', 'pending', '2019-12-19 11:21:11', NULL),
(10, 'handcash', 'pending', '2019-12-19 11:21:28', NULL),
(11, 'handcash', 'pending', '2019-12-19 11:21:45', NULL),
(12, 'handcash', 'pending', '2019-12-19 11:22:06', NULL),
(13, 'handcash', 'pending', '2019-12-19 11:24:19', NULL),
(14, 'handcash', 'pending', '2019-12-19 11:24:48', NULL),
(15, 'handcash', 'pending', '2019-12-19 11:26:59', NULL),
(16, 'handcash', 'pending', '2019-12-19 11:27:44', NULL),
(17, 'handcash', 'pending', '2019-12-19 11:28:07', NULL),
(18, 'handcash', 'pending', '2019-12-19 11:28:26', NULL),
(19, 'handcash', 'pending', '2019-12-19 11:28:43', NULL),
(20, 'handcash', 'pending', '2019-12-19 11:29:02', NULL),
(21, 'handcash', 'pending', '2019-12-19 11:29:21', NULL),
(22, 'handcash', 'pending', '2019-12-19 11:29:54', NULL),
(23, 'handcash', 'pending', '2019-12-19 11:30:27', NULL),
(24, 'handcash', 'pending', '2019-12-19 11:31:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacture_id` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `product_name`, `category_id`, `manufacture_id`, `product_image`, `product_description`, `product_price`, `product_weight`, `publication_status`, `created_at`, `updated_at`) VALUES
(10, 'la', 4, 4, 'images/1652456901867776.jpg', 'dd', 394.00, '0', 1, NULL, NULL),
(11, 'T shart', 3, 9, 'images/1652533782183141.jpg', 'This is T shart .This Product manufacture by Shikor fabric .', 200.00, '0', 1, NULL, NULL),
(12, 'T shart', 3, 6, 'images/1652533832775550.jpg', 'This is T shart .This Product manufacture by Shikor fabric .', 220.00, '0', 1, NULL, NULL),
(13, 'shoes', 1, 7, 'images/1652533973937435.jpg', 'This is Shoes .This Product manufacture by apex.', 3200.00, '0', 1, NULL, NULL),
(14, 'shoes', 1, 8, 'images/1652534039457296.jpeg', 'This is shoes .This Product manufacture byBata.', 3000.00, '0', 1, NULL, NULL),
(15, 'Panjabi', 4, 10, 'images/1652534169939839.jpg', 'This is Panjabi.This Product manufacture by New Collection.', 2000.00, '0', 1, NULL, NULL),
(16, 'Panjabi', 4, 9, 'images/1652534230626557.jpg', 'This is Panjabi.This Product manufacture by Shikor fabric .', 3200.00, '0', 1, NULL, NULL),
(17, 'Leather Bag', 5, 10, 'images/1652534339018371.jpg', 'This is Leather Bag This Product manufacture by new collection', 890.00, '0', 1, NULL, NULL),
(18, 'Leather Bag', 5, 7, 'images/1652534394051326.jpg', 'This is Bag.This Product manufacture by apex', 334.00, '0', 1, NULL, NULL),
(20, 'Baby Dress', 2, 9, 'images/1652534539375316.png', 'This is baby dress.This Product manufacture by Shikor fabric .', 450.00, '0', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shippings`
--

CREATE TABLE `tbl_shippings` (
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_Contract` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shippings`
--

INSERT INTO `tbl_shippings` (`shipping_id`, `shipping_Name`, `shipping_address`, `shipping_Contract`, `shipping_email`, `created_at`, `updated_at`) VALUES
(1, 'shorif', 'dhaka', '01929292', 's@gmail.com', NULL, NULL),
(2, 'shorif', 'dhaka', '01929292', 'jaj@gmail.com', NULL, NULL),
(3, 'shorif', 'dhaka', '01929292', 'jaj@gmail.com', NULL, NULL),
(4, 'shorif', 'dhaka', '01929292', 'jaj@gmail.com', NULL, NULL),
(5, 'Amma', 'dhanghara', '01929292', 's@gmail.com', NULL, NULL),
(6, 'shorif', 'dhaka', '01929292', 'jaj@gmail.com', NULL, NULL),
(7, 'Tamana', 'dhanghara', '01929292', 'jaj@gmail.com', NULL, NULL),
(8, 'shorif', 'Sirajgoj', '01929292', 'jaj@gmail.com', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_categorys`
--
ALTER TABLE `tbl_categorys`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufactures`
--
ALTER TABLE `tbl_manufactures`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shippings`
--
ALTER TABLE `tbl_shippings`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_categorys`
--
ALTER TABLE `tbl_categorys`
  MODIFY `category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_manufactures`
--
ALTER TABLE `tbl_manufactures`
  MODIFY `manufacture_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_shippings`
--
ALTER TABLE `tbl_shippings`
  MODIFY `shipping_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
