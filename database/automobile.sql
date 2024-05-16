-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 04:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_heads`
--

CREATE TABLE `account_heads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_heads`
--

INSERT INTO `account_heads` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Product Purchase', 'product-purchase', 1, '2022-06-22 03:49:01', '2022-06-22 03:49:01'),
(2, 'Product Sell', 'product-sell', 1, '2020-07-28 13:09:05', '2020-07-28 13:09:05'),
(3, 'Product Return', 'product-return', 1, '2021-09-14 05:59:26', '2021-09-14 05:59:26'),
(4, 'Cash Fund', 'cash-fund', 1, '2021-08-26 17:18:26', '2021-08-26 17:18:26'),
(6, 'Transport Cost', 'transport-cost', 1, '2020-09-04 11:51:38', '2020-09-04 11:51:38'),
(7, 'House rent', 'house-rent', 1, '2021-07-02 21:26:46', '2021-07-02 21:26:46'),
(8, 'Electricity Bill', 'electricity-bill', 1, '2021-07-04 23:54:29', '2021-07-04 23:54:29'),
(9, 'Courier Charge', 'courier-charge', 1, '2021-07-04 23:55:15', '2021-07-04 23:55:15'),
(10, 'Refreshment', 'refreshment', 1, '2021-07-04 23:55:34', '2021-07-04 23:55:34'),
(11, 'Market Bill', 'market-bill', 1, '2021-07-04 23:55:44', '2021-07-04 23:55:44'),
(12, 'Purchase Materials', 'purchase-materials', 1, '2021-07-04 23:56:08', '2021-07-04 23:56:08'),
(13, 'Packaging Cost', 'packaging-cost', 1, '2021-07-11 06:08:00', '2021-07-11 06:08:00'),
(14, 'Repair Materials', 'repair-materials', 1, '2021-07-11 06:08:55', '2021-07-11 06:08:55'),
(15, 'Damage/Loss', 'damage/loss', 1, '2021-07-19 08:34:00', '2022-10-16 01:45:54'),
(16, 'Web maintenance', 'web-maintenance', 1, '2021-07-19 08:34:34', '2021-07-19 08:34:34'),
(17, 'Others', 'others', 1, '2021-08-26 17:18:26', '2021-08-26 17:18:26'),
(22, 'Order Cancel', 'order-cancel', 1, '2024-03-09 12:17:55', '2024-03-09 12:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `account_ledgers`
--

CREATE TABLE `account_ledgers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_head_id` bigint(20) UNSIGNED NOT NULL,
  `particulars` varchar(255) NOT NULL,
  `debit` double NOT NULL DEFAULT 0,
  `credit` double NOT NULL DEFAULT 0,
  `balance` double NOT NULL DEFAULT 0,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Debit, 2=>Credit',
  `order_id` bigint(20) NOT NULL DEFAULT 0,
  `product_id` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `division_name` varchar(50) DEFAULT NULL,
  `district_name` varchar(50) DEFAULT NULL,
  `upazilla_name` varchar(50) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `upazilla_id` int(11) DEFAULT NULL,
  `address` text NOT NULL,
  `is_default` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Default, 0=>Not Default',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `name`, `division_name`, `district_name`, `upazilla_name`, `division_id`, `district_id`, `upazilla_id`, `address`, `is_default`, `status`, `created_at`, `updated_at`) VALUES
(112, 1, NULL, NULL, NULL, NULL, 2, 6, 52, 'aa', 0, 1, '2022-09-07 00:18:50', '2022-11-28 08:04:06'),
(116, 1, NULL, NULL, NULL, NULL, 2, 11, 101, 'Lama', 1, 1, '2022-09-10 08:00:53', '2022-11-28 08:04:06'),
(159, 3, NULL, NULL, NULL, NULL, 1, 52, 369, 'dsd', 0, 1, '2022-12-17 02:28:11', '2022-12-17 02:28:11');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(11, 'Size', 1, 4, '2023-08-30 19:52:30', '2023-08-30 19:52:30'),
(12, 'Color', 1, 4, '2023-08-30 19:53:47', '2023-08-30 19:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_product`
--

CREATE TABLE `attribute_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(100) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `value`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(47, 11, 'S', 1, 4, '2023-08-30 19:52:58', '2023-08-30 19:52:58'),
(48, 11, 'M', 1, 4, '2023-08-30 19:53:07', '2023-08-30 19:53:07'),
(49, 11, 'L', 1, 4, '2023-08-30 19:53:26', '2023-08-30 19:53:26'),
(50, 11, 'XL', 1, 4, '2023-08-30 19:53:28', '2023-08-30 19:53:28'),
(51, 12, 'Black', 1, 4, '2023-08-30 19:53:55', '2023-08-30 19:53:55'),
(52, 12, 'White', 1, 4, '2023-08-30 19:53:59', '2023-08-30 19:53:59'),
(53, 12, 'Silver', 1, 4, '2023-08-30 19:54:03', '2023-08-30 19:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value_product_price`
--

CREATE TABLE `attribute_value_product_price` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_price_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_value_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(50) NOT NULL,
  `title_bn` varchar(50) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `banner_url` varchar(255) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `description_bn` text DEFAULT NULL,
  `position` varchar(255) NOT NULL DEFAULT '1' COMMENT '1=>Home Banner, \r\n2=>Middle Banner1;\r\n3=>Middle Banner2\r\n0=>Footer Banner',
  `manufacturer` varchar(100) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `engine` varchar(100) DEFAULT NULL,
  `year_of_manufacturer` varchar(100) DEFAULT NULL,
  `fuel_type` varchar(100) DEFAULT NULL,
  `drive_train` varchar(100) DEFAULT NULL,
  `mileage` varchar(100) DEFAULT NULL,
  `body_type` varchar(100) DEFAULT NULL,
  `exterior_color` varchar(100) DEFAULT NULL,
  `transmission` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title_en`, `title_bn`, `banner_img`, `banner_url`, `description_en`, `description_bn`, `position`, `manufacturer`, `model`, `engine`, `year_of_manufacturer`, `fuel_type`, `drive_train`, `mileage`, `body_type`, `exterior_color`, `transmission`, `price`, `status`, `created_at`, `updated_at`) VALUES
(20, 'Lamborghini Urus', 'Lamborghini Urus', 'upload/banner/1799116246202861.jpg', NULL, '<p>gfd</p>', '<p>gfd</p>', '1', 'ab', NULL, 'v', 'd', 'g', 'f', 's', 'f', 'g', 'e', '2650000', 1, '2024-05-15 11:02:36', '2024-05-15 11:43:21'),
(21, 'Toyota-Axio-2018(X)', 'Toyota-Axio-2018(X)', 'upload/banner/1799192466794856.jpg', NULL, '<p><span style=\"color: rgb(65, 66, 70); font-family: Roboto, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700;\">Toyota-Axio-2018(X)</span><br></p>', '<p><span style=\"color: rgb(65, 66, 70); font-family: Roboto, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700;\">Toyota-Axio-2018(X)</span><br></p>', '1', 'a', NULL, 'b', 'c', 'e', 'f', 'g', 'h', 'i', 'd', '2860000', 1, '2024-05-16 07:14:06', '2024-05-16 07:14:06'),
(22, 'Toyota-Allion-2018(G)', 'Toyota-Allion-2018(G)', 'upload/banner/1799193121048234.jpg', NULL, '<p><br></p><div id=\"bannerR\" style=\"margin-right: -300px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CL6Np7zQkYYDFaenZgIdJqoEag\" style=\"display: inline-flex; align-items: center; justify-content: center; flex-direction: column; min-height: calc(var(--height) + var(--fsAddBuffer)); width: 300px; --height: 600px;\"></div></div><div id=\"Panes\" style=\"margin-top: 15px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: center;\"><div style=\"margin-right: 14.4px; margin-left: 28.8px; width: 436.8px; text-align: left; float: left;\"><h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; text-align: justify;\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"margin-right: 28.8px; margin-left: 14.4px; width: 436.8px; text-align: left; float: right;\"><h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div></div></div>', '<p><br></p><div id=\"bannerR\" style=\"margin-right: -300px; position: sticky; top: 20px; width: 300px; height: 10px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div align=\"center\" data-freestar-ad=\"__300x600\" id=\"lipsumcom_right_siderail\" name=\"lipsumcom_right_siderail\" data-google-query-id=\"CL6Np7zQkYYDFaenZgIdJqoEag\" style=\"display: inline-flex; align-items: center; justify-content: center; flex-direction: column; min-height: calc(var(--height) + var(--fsAddBuffer)); width: 300px; --height: 600px;\"></div></div><div id=\"Panes\" style=\"margin-top: 15px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: center;\"><div style=\"margin-right: 14.4px; margin-left: 28.8px; width: 436.8px; text-align: left; float: left;\"><h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; text-align: justify;\"><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"margin-right: 28.8px; margin-left: 14.4px; width: 436.8px; text-align: left; float: right;\"><h2 style=\"margin-bottom: 10px; font-weight: 400; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div></div></div>', '1', '32', '7', 'b', '2022', 'Petrol', 'a', 'v', 'f', 's', 'h', '2560000', 1, '2024-05-16 07:24:29', '2024-05-16 12:44:14'),
(23, 'abc', 'abc', 'upload/banner/1799212548975270.jpg', NULL, '<p>aaaaa</p>', '<p>aaaaa</p>', '1', '32', '7', 'b', '2007', 'Diesel', 'a', 'a', 'a', 'a', 'fsad', '2600000', 1, '2024-05-16 12:33:17', '2024-05-16 12:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(100) NOT NULL,
  `title_bn` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `blog_img` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `name_bn` varchar(50) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `description_en` text DEFAULT NULL,
  `description_bn` text DEFAULT NULL,
  `brand_image` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name_en`, `name_bn`, `slug`, `description_en`, `description_bn`, `brand_image`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(23, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437347157806.png', 1, 4, '2023-11-02 01:44:04', '2023-11-02 01:44:04'),
(24, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437367377888.png', 1, 4, '2023-11-02 01:44:23', '2023-11-02 01:44:23'),
(25, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437390297197.png', 1, 4, '2023-11-02 01:44:45', '2023-11-02 01:44:45'),
(26, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437408829412.png', 1, 4, '2023-11-02 01:45:03', '2023-11-02 01:45:03'),
(27, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437429211360.png', 1, 4, '2023-11-02 01:45:22', '2023-11-02 01:45:22'),
(28, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437448799245.png', 1, 4, '2023-11-02 01:45:41', '2023-11-02 01:45:41'),
(29, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437469293155.png', 1, 4, '2023-11-02 01:46:00', '2023-11-02 01:46:00'),
(30, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437495329582.png', 1, 4, '2023-11-02 01:46:25', '2023-11-02 01:46:25'),
(31, 'test', 'test', 'test', 'test', 'test', 'upload/brand/1781437512876243.png', 1, 4, '2023-11-02 01:46:42', '2023-11-02 01:46:42'),
(32, 'bmw', 'টেস্ট২', 'bmw', NULL, NULL, 'upload/brand/1791314150774311.jpg', 1, 4, '2024-02-19 02:11:38', '2024-05-16 12:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `campaings`
--

CREATE TABLE `campaings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_bn` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `campaing_image` varchar(255) DEFAULT NULL,
  `flash_start` varchar(100) DEFAULT NULL,
  `flash_end` varchar(100) DEFAULT NULL,
  `is_featured` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Featured, 0=>Not Featured	',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaings`
--

INSERT INTO `campaings` (`id`, `name_en`, `name_bn`, `slug`, `campaing_image`, `flash_start`, `flash_end`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(61, 'test2', 'টেস্ট২', 'test2', 'upload/campaing/1791584882506476.jpg', '21-02-2024 13:00:00', '22-02-2024 19:27:00', 1, 1, '2024-02-22 01:54:48', '2024-02-22 01:54:48'),
(62, 'test2', 'টেস্ট২', 'test2', 'upload/campaing/1791766920773138.jpg', '01-02-2024 14:00:00', '29-04-2024 22:00:00', 1, 1, '2024-02-24 08:08:13', '2024-04-02 08:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `campaing_products`
--

CREATE TABLE `campaing_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campaing_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `discount_price` double NOT NULL DEFAULT 0,
  `discount_type` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Flat, 2=>Percentage',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaing_products`
--

INSERT INTO `campaing_products` (`id`, `campaing_id`, `product_id`, `product_name`, `discount_price`, `discount_type`, `created_at`, `updated_at`) VALUES
(145, 61, 73, NULL, 800, 1, '2024-02-22 01:54:48', '2024-02-22 01:54:48'),
(146, 61, 71, NULL, 500, 1, '2024-02-22 01:54:48', '2024-02-22 01:54:48'),
(147, 61, 68, NULL, 500, 1, '2024-02-22 01:54:48', '2024-02-22 01:54:48'),
(150, 62, 75, NULL, 50, 1, '2024-04-02 08:10:12', '2024-04-02 08:10:12'),
(151, 62, 73, NULL, 800, 1, '2024-04-02 08:10:12', '2024-04-02 08:10:12'),
(152, 62, 72, NULL, 500, 1, '2024-04-02 08:10:12', '2024-04-02 08:10:12');

-- --------------------------------------------------------

--
-- Table structure for table `carms`
--

CREATE TABLE `carms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=> Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carms`
--

INSERT INTO `carms` (`id`, `brand_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(7, '32', 'ab', 1, '2024-05-16 11:43:20', '2024-05-16 12:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `car_models`
--

CREATE TABLE `car_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=> Active, 0=> Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `name_bn` varchar(100) DEFAULT NULL,
  `slug` varchar(100) NOT NULL,
  `description_en` text DEFAULT NULL,
  `description_bn` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `cat_banner` text DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Category, 2=>SubCategory, 3=> SubSubCategory',
  `is_featured` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Featured, 0=>Not Featured',
  `category_tab` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>Not included in the tab, 1=>Included in the tab',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_bn`, `slug`, `description_en`, `description_bn`, `image`, `icon`, `cat_banner`, `parent_id`, `type`, `is_featured`, `category_tab`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(19, 'Knife', 'ছুরি', 'Knife-1QdBq', 'This is a knife', 'This is a knife', 'upload/category/1781433642187657.jpg', 'upload/category/1699198618knife.png', 'upload/category/1699186504chef-banner.jpg', 0, 1, 1, 0, 1, 4, '2023-11-02 00:45:12', '2023-11-05 09:36:58'),
(20, 'Cutting Board', 'কাটিং বোর্ড', 'Cutting-Board-rHrTw', 'This is a cutting board', 'This is a cutting board', 'upload/category/1781433723557478.webp', 'upload/category/1699198665cutting-board.png', 'upload/category/1699187183U3_banner.jpg', 0, 1, 1, 0, 1, 4, '2023-11-02 00:46:29', '2023-11-05 09:37:45'),
(21, 'Can Opener', 'ক্যান ওপেনার', 'Can-Opener-h6mrx', 'This is a can operner', 'This is a can operner', 'upload/category/1781433825833627.jpg', 'upload/category/1699198701can-opener.png', 'upload/category/1699187538pngtree-can-opener-accessory-appliance-background-photo-image_2280968.jpg', 0, 1, 1, 0, 1, 4, '2023-11-02 00:48:06', '2023-11-05 09:38:21'),
(22, 'Measuring Cups', 'কাপ পরিমাপ', 'Measuring-Cups-8JTwo', 'This is a measuring cups', 'This is a measuring cups', 'upload/category/1781433941281417.jpeg', 'upload/category/1699198731measuring-cup.png', 'upload/category/1699189933istockphoto-512633602-612x612.jpg', 0, 1, 1, 0, 1, 4, '2023-11-02 00:49:56', '2023-11-05 09:38:51'),
(23, 'Vegetable Peeler', 'সবজির খোসা ছাড়ানো', 'Vegetable-Peeler-2utl7', 'This is a vegetable peeler', 'This is a vegetable peeler', 'upload/category/1781434036640323.jpeg', 'upload/category/1699198765peeler.png', 'upload/category/1699190012pngtree-vegetable-peeler-meal-potato-foodstuff-photo-image_6262948.jpg', 0, 1, 1, 0, 1, 4, '2023-11-02 00:51:28', '2023-11-05 09:39:25'),
(24, 'Mixing Bowls', 'মিক্সিং বোলস', 'Mixing-Bowls-2L0VH', 'This is mixing bowls', 'This is mixing bowls', 'upload/category/1781434503986361.jpg', 'upload/category/1699198808flour.png', 'upload/category/1699190069Mixing Bowls Banner.webp', 0, 1, 1, 0, 1, 4, '2023-11-02 00:58:53', '2023-11-05 09:40:08'),
(25, 'Colander', 'কোলান্ডার', 'Colander-5jqpn', 'This is colander', 'This is colander', 'upload/category/1781434572833016.jpeg', 'upload/category/1699198836colander.png', 'upload/category/1699190118shutterstock_1781025173-1.webp', 0, 1, 1, 0, 1, 4, '2023-11-02 00:59:58', '2023-11-05 09:40:36'),
(26, 'Whisk', 'ঝকঝকে', 'Whisk-bjMeW', 'This is whisk', 'This is whisk', 'upload/category/1781434650788879.jpg', 'upload/category/1699198868whisk.png', 'upload/category/1699190150pngtree-whisk-for-stirring-white-utensil-whip-photo-image_260031.jpg', 0, 1, 1, 0, 1, 4, '2023-11-02 01:01:13', '2023-11-05 09:41:08'),
(27, 'Grater', 'গ্রাটার', 'Grater-bxv1Q', 'This is a grater', 'This is a grater', 'upload/category/1781434710632834.jpg', 'upload/category/1699198900cheese-grater.png', 'upload/category/1699190189set-stainless-steel-graters-fresh-260nw-2058614708.webp', 0, 1, 1, 0, 1, 4, '2023-11-02 01:02:10', '2023-11-05 09:41:40'),
(28, 'Shears', 'কাঁচি', 'Shears-CSNhT', 'This is a shears', 'This is a shears', 'upload/category/1781434785623402.jpg', 'upload/category/1699198941shears.png', 'upload/category/1699190231dark-stag-scissors-banner.jpg', 0, 1, 1, 0, 1, 4, '2023-11-02 01:03:22', '2024-02-04 04:50:10'),
(29, 'test3', 'মনসুর', 'test3-rpwID', NULL, NULL, 'upload/category/1790055341731158.png', NULL, NULL, 21, 2, 0, 0, 1, 4, '2024-02-05 04:43:24', '2024-02-05 04:43:24'),
(30, 'test4', 'মনসুর', 'test4-L98JS', NULL, NULL, '', NULL, NULL, 21, 2, 0, 0, 1, 4, '2024-02-05 04:43:54', '2024-02-05 04:43:54'),
(31, 'spray', 'spray', 'spray-jpgfB', NULL, NULL, 'upload/category/1791223236983371.webp', NULL, NULL, 0, 1, 0, 0, 1, 4, '2024-02-18 02:06:36', '2024-02-18 02:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `Message` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `Message`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'sadekchowdhury47@gmail.com', '01799382934', 'hello', '2023-10-18 11:08:54', '2023-10-18 11:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `discount_type` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Fixed Amount, 0=>Percent',
  `discount` double(20,2) NOT NULL DEFAULT 0.00,
  `limit_per_user` double(20,2) NOT NULL DEFAULT 0.00,
  `total_use_limit` double(20,2) NOT NULL DEFAULT 0.00,
  `expire_date` date DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT 1 COMMENT '1=>All Customers, 0=>Specific Customer',
  `user_id` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `discount_type`, `discount`, `limit_per_user`, `total_use_limit`, `expire_date`, `type`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1111', 1, 20.00, 93.00, 1000.00, '2024-01-04', 1, '24', 'Hic aspernatur fugia', 1, '2022-09-11 06:50:29', '2023-11-02 05:38:05'),
(3, '2223', 1, 25.00, 25.00, 5.00, '2024-02-10', 0, '24', 'abc', 1, '2024-02-19 08:32:07', '2024-02-19 08:33:53'),
(4, '2024', 0, 10.00, 0.00, 0.00, '2024-03-29', 1, '24', 'hello', 1, '2024-02-20 01:30:35', '2024-03-09 11:16:36'),
(5, 'coupon_test', 0, 20.00, 0.00, 47.00, '2024-02-22', NULL, NULL, 'ok', 1, '2024-02-20 05:28:41', '2024-02-20 08:36:03'),
(6, 'asd', 1, 55.00, 0.00, 5545.00, '2024-05-15', NULL, NULL, 'gdsg', 1, '2024-05-16 11:08:50', '2024-05-16 11:08:50');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `division_name_bn` varchar(150) NOT NULL,
  `district_name_bn` varchar(130) NOT NULL,
  `district_name_en` text NOT NULL,
  `division_name_en` text NOT NULL,
  `division_id` varchar(210) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_name_bn`, `district_name_bn`, `district_name_en`, `division_name_en`, `division_id`, `status`) VALUES
(1, 'চট্টগ্রাম', 'কুমিল্লা', 'cumilla', 'chattogram', '2', 1),
(2, 'চট্টগ্রাম', 'ফেনী', 'feni', 'chattogram', '2', 1),
(3, 'চট্টগ্রাম', 'ব্রাহ্মণবাড়িয়া', 'brahmanbaria', 'chattogram', '2', 1),
(4, 'চট্টগ্রাম', 'রাঙ্গামাটি', 'rangamati', 'chattogram', '2', 1),
(5, 'চট্টগ্রাম', 'নোয়াখালী', 'noakhali', 'chattogram', '2', 1),
(6, 'চট্টগ্রাম', 'চাঁদপুর', 'chandpur', 'chattogram', '2', 1),
(7, 'চট্টগ্রাম', 'লক্ষ্মীপুর', 'lakshmipur', 'chattogram', '2', 1),
(8, 'চট্টগ্রাম', 'চট্টগ্রাম', 'chattogram', 'chattogram', '2', 1),
(9, 'চট্টগ্রাম', 'কক্সবাজার', 'coxsbazar', 'chattogram', '2', 1),
(10, 'চট্টগ্রাম', 'খাগড়াছড়ি', 'khagrachari', 'chattogram', '2', 1),
(11, 'চট্টগ্রাম', 'বান্দরবান', 'bandarban', 'chattogram', '2', 1),
(12, 'রাজশাহী', 'সিরাজগঞ্জ', 'sirajganj', 'rajshahi', '3', 1),
(13, 'রাজশাহী', 'পাবনা', 'pabna', 'rajshahi', '3', 1),
(14, 'রাজশাহী', 'বগুড়া', 'bogura', 'rajshahi', '3', 1),
(15, 'রাজশাহী', 'রাজশাহী', 'rajshahi', 'rajshahi', '3', 1),
(16, 'রাজশাহী', 'নাটোর', 'natore', 'rajshahi', '3', 1),
(17, 'রাজশাহী', 'জয়পুরহাট', 'jaipurhat', 'rajshahi', '3', 1),
(18, 'রাজশাহী', 'চাঁপাইনবাবগঞ্জ', 'nawabganj', 'rajshahi', '3', 1),
(19, 'রাজশাহী', 'নওগাঁ', 'naogaon', 'rajshahi', '3', 1),
(20, 'খুলনা', 'যশোর', 'jashore', 'khulna', '4', 1),
(21, 'খুলনা', 'সাতক্ষীরা', 'satkhira', 'khulna', '4', 1),
(22, 'খুলনা', 'মেহেরপুর', 'meherpur', 'khulna', '4', 1),
(23, 'খুলনা', 'নড়াইল', 'narail', 'khulna', '4', 1),
(24, 'খুলনা', 'চুয়াডাঙ্গা', 'chuadanga', 'khulna', '4', 1),
(25, 'খুলনা', 'কুষ্টিয়া', 'kushtia', 'khulna', '4', 1),
(26, 'খুলনা', 'মাগুরা', 'magura', 'khulna', '4', 1),
(27, 'খুলনা', 'খুলনা', 'khulna', 'khulna', '4', 1),
(28, 'খুলনা', 'বাগেরহাট', 'bagerhat', 'khulna', '4', 1),
(29, 'খুলনা', 'ঝিনাইদহ', 'jhenaidah', 'khulna', '4', 1),
(30, 'বরিশাল', 'বরিশাল', 'barishal', 'barishal', '5', 1),
(31, 'বরিশাল', 'ঝালকাঠি', 'jhalokati', 'barishal', '5', 1),
(32, 'বরিশাল', 'পটুয়াখালী', 'patuakhali', 'barishal', '5', 1),
(33, 'বরিশাল', 'পিরোজপুর', 'pirojpur', 'barishal', '5', 1),
(34, 'বরিশাল', 'ভোলা', 'bhola', 'barishal', '5', 1),
(35, 'বরিশাল', 'বরগুনা', 'barguna', 'barishal', '5', 1),
(36, 'সিলেট', 'সিলেট', 'sylhet', 'sylhet', '6', 1),
(37, 'সিলেট', 'মৌলভীবাজার', 'moulvibazar', 'sylhet', '6', 1),
(38, 'সিলেট', 'হবিগঞ্জ', 'habiganj', 'sylhet', '6', 1),
(39, 'সিলেট', 'সুনামগঞ্জ', 'sunamganj', 'sylhet', '6', 1),
(40, 'রংপুর', 'রংপুর', 'rangpur', 'rangpur', '7', 1),
(41, 'রংপুর', 'পঞ্চগড়', 'panchagarh', 'rangpur', '7', 1),
(42, 'রংপুর', 'দিনাজপুর', 'dinajpur', 'rangpur', '7', 1),
(43, 'রংপুর', 'লালমনিরহাট', 'lalmonirhat', 'rangpur', '7', 1),
(44, 'রংপুর', 'নীলফামারী', 'nilphamari', 'rangpur', '7', 1),
(45, 'রংপুর', 'ঠাকুরগাঁও', 'thakurgaon', 'rangpur', '7', 1),
(46, 'রংপুর', 'গাইবান্ধা', 'gaibandha', 'rangpur', '7', 1),
(47, 'রংপুর', 'কুড়িগ্রাম', 'kurigram', 'rangpur', '7', 1),
(48, 'ময়মনসিংহ', 'ময়মনসিংহ', 'mymensingh', 'mymensingh', '8', 1),
(49, 'ময়মনসিংহ', 'জামালপুর', 'jamalpur', 'mymensingh', '8', 1),
(50, 'ময়মনসিংহ', 'নেত্রকোণা', 'netrokona', 'mymensingh', '8', 1),
(51, 'ময়মনসিংহ', 'শেরপুর', 'sherpur', 'mymensingh', '8', 1),
(52, 'ঢাকা', 'ঢাকা', 'dhaka', 'dhaka', '1', 1),
(53, 'ঢাকা', 'নরসিংদী', 'narsingdi', 'dhaka', '1', 1),
(54, 'ঢাকা', 'গাজীপুর', 'gazipur', 'dhaka', '1', 1),
(55, 'ঢাকা', 'শরীয়তপুর', 'shariatpur', 'dhaka', '1', 1),
(56, 'ঢাকা', 'নারায়ণগঞ্জ', 'narayanganj', 'dhaka', '1', 1),
(57, 'ঢাকা', 'টাঙ্গাইল', 'tangail', 'dhaka', '1', 1),
(58, 'ঢাকা', 'কিশোরগঞ্জ', 'kishoreganj', 'dhaka', '1', 1),
(59, 'ঢাকা', 'মানিকগঞ্জ', 'manikganj', 'dhaka', '1', 1),
(60, 'ঢাকা', 'মুন্সিগঞ্জ', 'munshiganj', 'dhaka', '1', 1),
(61, 'ঢাকা', 'রাজবাড়ী', 'rajbari', 'dhaka', '1', 1),
(62, 'ঢাকা', 'মাদারীপুর', 'madaripur', 'dhaka', '1', 1),
(63, 'ঢাকা', 'ফরিদপুর', 'faridpur', 'dhaka', '1', 1),
(64, 'ঢাকা', 'গোপালগঞ্জ', 'gopalganj', 'dhaka', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `division_id` varchar(30) NOT NULL,
  `division_name_bn` varchar(30) NOT NULL,
  `division_name_en` text NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0:Blocked, 1:Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_id`, `division_name_bn`, `division_name_en`, `country_id`, `status`) VALUES
(1, '1', 'ঢাকা', 'dhaka', 22, 1),
(2, '2', 'চট্টগ্রাম', 'chattogram', 22, 1),
(3, '3', 'রাজশাহী', 'rajshahi', 22, 1),
(4, '4', 'খুলনা', 'khulna', 22, 1),
(5, '5', 'বরিশাল', 'barishal', 22, 1),
(6, '6', 'সিলেট', 'sylhet', 22, 1),
(7, '7', 'রংপুর', 'rangpur', 22, 1),
(8, '8', 'ময়মনসিংহ', 'mymensingh', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_products`
--

CREATE TABLE `group_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_product_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0=>Inactive, 1=>Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `group_products`
--

INSERT INTO `group_products` (`id`, `group_product_id`, `product_id`, `status`, `created_at`, `updated_at`) VALUES
(14, 71, 75, 1, '2024-02-19 02:25:41', '2024-02-19 02:25:41'),
(15, 69, 75, 1, '2024-02-19 02:25:41', '2024-02-19 02:25:41'),
(22, 80, 81, 1, '2024-03-05 09:01:22', '2024-03-05 09:01:22'),
(23, 76, 81, 1, '2024-03-05 09:01:22', '2024-03-05 09:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2022_07_24_074842_create_multi_imgs_table', 1),
(27, '2022_02_04_061801_create_product_prices_table', 6),
(28, '2022_02_04_065518_create_attribute_product_table', 6),
(29, '2022_05_20_152549_create_attribute_value_product_price_table', 6),
(47, '2022_07_23_114405_create_sliders_table', 7),
(51, '2022_07_28_064437_create_campaings_table', 7),
(53, '2022_07_31_095124_create_blogs_table', 7),
(54, '2022_08_01_045408_create_pages_table', 7),
(56, '2022_08_10_105324_create_addresses_table', 7),
(57, '2022_08_14_045916_create_settings_table', 7),
(60, '2022_08_19_201539_create_product_stocks_table', 8),
(61, '2022_09_03_062044_create_shippings_table', 9),
(62, '2022_08_14_105209_create_order_details_table', 10),
(63, '2022_09_03_055707_create_coupons_table', 11),
(65, '2022_07_30_093841_create_banners_table', 12),
(67, '2022_09_17_111303_create_campaing_products_table', 13),
(68, '2022_09_27_050816_create_subscribers_table', 14),
(69, '2022_09_28_103615_create_roles_table', 15),
(71, '2022_09_28_110124_create_staff_table', 16),
(72, '2022_07_24_111956_create_vendors_table', 17),
(73, '2022_07_19_132400_create_brands_table', 18),
(74, '2022_07_20_105632_create_categories_table', 18),
(75, '2022_07_21_140629_create_suppliers_table', 18),
(76, '2022_07_24_063334_create_products_table', 18),
(77, '2022_08_04_073752_create_attributes_table', 18),
(78, '2022_08_06_053505_create_attribute_values_table', 18),
(79, '2022_08_14_105132_create_orders_table', 18),
(80, '2022_10_16_060400_create_account_heads_table', 19),
(82, '2022_10_16_082419_create_account_ledgers_table', 20),
(84, '2022_12_31_055130_create_units_table', 21),
(85, '2023_10_18_164354_create_contacts_table', 22),
(93, '2023_10_19_110851_create_abouts_table', 23),
(94, '2024_02_05_071705_create_group_products_table', 23),
(95, '2024_02_05_071803_create_withdraw_requests_table', 23),
(96, '2024_02_05_072102_create_vendor_comissions_table', 23),
(99, '2024_02_05_110425_create_vendor_payments_table', 24),
(100, '2024_02_06_115201_create_vendor_transactions_table', 25),
(101, '2024_02_15_105554_create_user_messages_table', 26),
(102, '2024_03_11_130851_create_return_requests_table', 27),
(103, '2024_03_11_141840_create_returning_products_table', 28),
(106, '2024_05_16_164523_create_car_models_table', 29),
(107, '2024_05_16_170425_create_models_table', 30),
(108, '2024_05_16_171027_create_carms_table', 31);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `photo_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(26, 6, 'upload/products/multi-image/1739846067169394.jpg', '2022-07-30 23:48:28', NULL),
(27, 7, 'upload/products/multi-image/1739846315129171.jpg', '2022-07-30 23:52:25', NULL),
(28, 7, 'upload/products/multi-image/1739846315236232.jpg', '2022-07-30 23:52:25', NULL),
(29, 7, 'upload/products/multi-image/1739846315325319.jpg', '2022-07-30 23:52:25', NULL),
(30, 7, 'upload/products/multi-image/1739846315411765.jpg', '2022-07-30 23:52:25', NULL),
(31, 7, 'upload/products/multi-image/1739846315496734.jpg', '2022-07-30 23:52:25', NULL),
(32, 8, 'upload/products/multi-image/1739846945373381.jpg', '2022-07-31 00:02:26', NULL),
(33, 8, 'upload/products/multi-image/1739846945461252.jpg', '2022-07-31 00:02:26', NULL),
(34, 8, 'upload/products/multi-image/1739846945549516.jpg', '2022-07-31 00:02:26', NULL),
(35, 8, 'upload/products/multi-image/1739846945636549.jpg', '2022-07-31 00:02:26', NULL),
(40, 10, 'upload/products/multi-image/1740220384024841.jpg', '2022-08-04 02:58:05', NULL),
(41, 10, 'upload/products/multi-image/1740220384277271.jpg', '2022-08-04 02:58:05', NULL),
(42, 13, 'upload/products/multi-image/1742295966910363.jpg', '2022-08-27 00:48:35', NULL),
(43, 13, 'upload/products/multi-image/1742295967017138.jpg', '2022-08-27 00:48:35', NULL),
(44, 13, 'upload/products/multi-image/1742295967129486.png', '2022-08-27 00:48:35', NULL),
(45, 14, 'upload/products/multi-image/1742317545185514.jpg', '2022-08-27 06:31:34', NULL),
(46, 14, 'upload/products/multi-image/1742317545453192.jpg', '2022-08-27 06:31:34', NULL),
(47, 14, 'upload/products/multi-image/1742317545664382.jpg', '2022-08-27 06:31:34', NULL),
(49, 15, 'upload/products/multi-image/1742317808453359.jpg', '2022-08-27 06:35:45', NULL),
(50, 15, 'upload/products/multi-image/1742317808714459.jpg', '2022-08-27 06:35:45', NULL),
(51, 15, 'upload/products/multi-image/1742317808922731.jpg', '2022-08-27 06:35:45', NULL),
(52, 15, 'upload/products/multi-image/1742317809136325.jpg', '2022-08-27 06:35:45', NULL),
(53, 15, 'upload/products/multi-image/1742317809373085.jpg', '2022-08-27 06:35:45', NULL),
(54, 16, 'upload/products/multi-image/1742318129595563.jpg', '2022-08-27 06:40:51', NULL),
(55, 16, 'upload/products/multi-image/1742318129886651.jpg', '2022-08-27 06:40:51', NULL),
(56, 16, 'upload/products/multi-image/1742318129987320.jpg', '2022-08-27 06:40:51', NULL),
(57, 16, 'upload/products/multi-image/1742318130132424.png', '2022-08-27 06:40:51', NULL),
(58, 17, 'upload/products/multi-image/1742320496045439.jpg', '2022-08-27 07:18:28', NULL),
(59, 17, 'upload/products/multi-image/1742320496146899.jpg', '2022-08-27 07:18:28', NULL),
(60, 17, 'upload/products/multi-image/1742320496250664.jpg', '2022-08-27 07:18:28', NULL),
(61, 17, 'upload/products/multi-image/1742320496355090.jpg', '2022-08-27 07:18:28', NULL),
(62, 18, 'upload/products/multi-image/1742320667990183.jpg', '2022-08-27 07:21:12', NULL),
(63, 18, 'upload/products/multi-image/1742320668091389.jpg', '2022-08-27 07:21:12', NULL),
(64, 18, 'upload/products/multi-image/1742320668190326.jpg', '2022-08-27 07:21:12', NULL),
(65, 18, 'upload/products/multi-image/1742320668290266.jpg', '2022-08-27 07:21:12', NULL),
(66, 19, 'upload/products/multi-image/1742320990568427.jpg', '2022-08-27 07:26:19', NULL),
(67, 19, 'upload/products/multi-image/1742320990667661.jpg', '2022-08-27 07:26:19', NULL),
(68, 20, 'upload/products/multi-image/1742321394763321.jpg', '2022-08-27 07:32:45', NULL),
(69, 20, 'upload/products/multi-image/1742321394855141.jpg', '2022-08-27 07:32:45', NULL),
(70, 20, 'upload/products/multi-image/1742321394949763.jpg', '2022-08-27 07:32:45', NULL),
(71, 20, 'upload/products/multi-image/1742321395041602.jpg', '2022-08-27 07:32:45', NULL),
(72, 21, 'upload/products/multi-image/1742322410924504.jpg', '2022-08-27 07:48:54', NULL),
(73, 21, 'upload/products/multi-image/1742322411139578.jpg', '2022-08-27 07:48:54', NULL),
(74, 21, 'upload/products/multi-image/1742322411353836.jpg', '2022-08-27 07:48:55', NULL),
(75, 22, 'upload/products/multi-image/1742322638653428.jpg', '2022-08-27 07:52:31', NULL),
(76, 23, 'upload/products/multi-image/1742322957147844.jpg', '2022-08-27 07:57:35', NULL),
(77, 23, 'upload/products/multi-image/1742322957249716.jpg', '2022-08-27 07:57:35', NULL),
(78, 23, 'upload/products/multi-image/1742322957342972.jpg', '2022-08-27 07:57:35', NULL),
(79, 23, 'upload/products/multi-image/1742322957435041.jpg', '2022-08-27 07:57:35', NULL),
(81, 24, 'upload/products/multi-image/1742323415126547.jpg', '2022-08-27 08:04:52', NULL),
(82, 24, 'upload/products/multi-image/1742323415265148.jpg', '2022-08-27 08:04:52', NULL),
(83, 24, 'upload/products/multi-image/1742323415357422.jpg', '2022-08-27 08:04:52', NULL),
(84, 24, 'upload/products/multi-image/1742323415439626.jpg', '2022-08-27 08:04:52', NULL),
(85, 25, 'upload/products/multi-image/1742323752659292.jpg', '2022-08-27 08:10:14', NULL),
(86, 25, 'upload/products/multi-image/1742323753056581.png', '2022-08-27 08:10:14', NULL),
(88, 26, 'upload/products/multi-image/1742411315968479.jpg', '2022-08-28 07:22:00', NULL),
(89, 27, 'upload/products/multi-image/1742411449262562.jpg', '2022-08-28 07:24:08', NULL),
(91, NULL, 'upload/products/multi-image/1742480355984144.jpg', '2022-08-29 01:39:22', '2022-08-29 01:39:22'),
(92, NULL, 'upload/products/multi-image/1742480356115810.jpg', '2022-08-29 01:39:22', '2022-08-29 01:39:22'),
(93, NULL, 'upload/products/multi-image/1742480356240109.jpg', '2022-08-29 01:39:22', '2022-08-29 01:39:22'),
(94, NULL, 'upload/products/multi-image/1742480393934418.jpg', '2022-08-29 01:39:58', '2022-08-29 01:39:58'),
(95, 29, 'upload/products/multi-image/1742481808103930.jpg', '2022-08-29 02:02:27', NULL),
(96, 29, 'upload/products/multi-image/1742481808252632.jpg', '2022-08-29 02:02:27', NULL),
(97, 29, 'upload/products/multi-image/1742481808351222.jpg', '2022-08-29 02:02:27', NULL),
(98, 29, 'upload/products/multi-image/1742482178486432.jpg', '2022-08-29 02:08:20', NULL),
(102, 29, 'upload/products/multi-image/1742482350127002.jpg', '2022-08-29 02:11:04', NULL),
(103, 29, 'upload/products/multi-image/1742482350293094.jpg', '2022-08-29 02:11:04', NULL),
(104, 29, 'upload/products/multi-image/1742482350465148.jpg', '2022-08-29 02:11:04', NULL),
(106, 26, 'upload/products/multi-image/1742485985214466.jpg', '2022-08-29 03:08:50', NULL),
(107, 26, 'upload/products/multi-image/1742485985320404.jpg', '2022-08-29 03:08:51', NULL),
(169, 56, 'upload/products/multi-image/1780093829012933.jpeg', '2023-10-18 05:49:25', NULL),
(170, 56, 'upload/products/multi-image/1780093829361221.webp', '2023-10-18 05:49:26', NULL),
(171, 56, 'upload/products/multi-image/1780093830183977.webp', '2023-10-18 05:49:27', NULL),
(172, 65, 'upload/products/multi-image/1790049494295060.png', '2024-02-05 03:10:28', NULL),
(173, 65, 'upload/products/multi-image/1790049494521078.png', '2024-02-05 03:10:28', NULL),
(177, 67, 'upload/products/multi-image/1790677764852544.jpg', '2024-02-12 01:36:33', NULL),
(178, 67, 'upload/products/multi-image/1790677765012284.webp', '2024-02-12 01:36:33', NULL),
(179, 67, 'upload/products/multi-image/1790677765267618.jpg', '2024-02-12 01:36:33', NULL),
(180, 67, 'upload/products/multi-image/1790677765419006.webp', '2024-02-12 01:36:34', NULL),
(181, 68, 'upload/products/multi-image/1790677888681586.jpg', '2024-02-12 01:38:31', NULL),
(182, 68, 'upload/products/multi-image/1790677888857011.webp', '2024-02-12 01:38:31', NULL),
(183, 68, 'upload/products/multi-image/1790677889125330.jpg', '2024-02-12 01:38:32', NULL),
(184, 68, 'upload/products/multi-image/1790677889328909.webp', '2024-02-12 01:38:32', NULL),
(185, 69, 'upload/products/multi-image/1790677993586302.jpg', '2024-02-12 01:40:11', NULL),
(186, 69, 'upload/products/multi-image/1790677993729816.jpg', '2024-02-12 01:40:11', NULL),
(187, 69, 'upload/products/multi-image/1790677993874928.jpg', '2024-02-12 01:40:11', NULL),
(188, 69, 'upload/products/multi-image/1790677994020804.jpg', '2024-02-12 01:40:12', NULL),
(189, 70, 'upload/products/multi-image/1790678080683559.jpg', '2024-02-12 01:41:34', NULL),
(190, 70, 'upload/products/multi-image/1790678080794585.jpg', '2024-02-12 01:41:34', NULL),
(191, 70, 'upload/products/multi-image/1790678080906863.jpg', '2024-02-12 01:41:34', NULL),
(192, 71, 'upload/products/multi-image/1790678153144657.jpg', '2024-02-12 01:42:43', NULL),
(193, 71, 'upload/products/multi-image/1790678153264522.jpg', '2024-02-12 01:42:43', NULL),
(194, 72, 'upload/products/multi-image/1790678202633136.jpg', '2024-02-12 01:43:30', NULL),
(195, 72, 'upload/products/multi-image/1790678202787403.jpg', '2024-02-12 01:43:31', NULL),
(196, 73, 'upload/products/multi-image/1790678274296697.jpg', '2024-02-12 01:44:39', NULL),
(197, 73, 'upload/products/multi-image/1790678274419851.jpg', '2024-02-12 01:44:39', NULL),
(198, 73, 'upload/products/multi-image/1790678274537712.jpg', '2024-02-12 01:44:39', NULL),
(201, 75, 'upload/products/multi-image/1791315034311470.webp', '2024-02-19 02:25:41', NULL),
(202, 75, 'upload/products/multi-image/1791315034636175.jpg', '2024-02-19 02:25:41', NULL),
(203, 75, 'upload/products/multi-image/1791315034802290.webp', '2024-02-19 02:25:41', NULL),
(204, 76, 'upload/products/multi-image/1791607802269879.jpg', '2024-02-22 13:59:06', NULL),
(205, 76, 'upload/products/multi-image/1791607802443217.webp', '2024-02-22 13:59:06', NULL),
(206, 76, 'upload/products/multi-image/1791607802731934.jpg', '2024-02-22 13:59:06', NULL),
(209, 79, 'upload/products/multi-image/1792602220807517.jpg', '2024-03-04 13:24:57', NULL),
(210, 80, 'upload/products/multi-image/1792670666657168.webp', '2024-03-05 07:32:52', NULL),
(211, 80, 'upload/products/multi-image/1792670666893554.webp', '2024-03-05 07:32:53', NULL),
(212, 86, 'upload/products/multi-image/1794382944210542.webp', '2024-03-24 05:08:47', NULL),
(213, 86, 'upload/products/multi-image/1794382944461156.webp', '2024-03-24 05:08:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `division_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `upazilla_id` int(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `payment_method` varchar(25) NOT NULL DEFAULT 'cash',
  `payment_status` bigint(20) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>paid, 0=>Unpaid',
  `payment_details` text DEFAULT NULL,
  `shipping_charge` decimal(10,2) NOT NULL DEFAULT 0.00,
  `shipping_type` varchar(100) DEFAULT NULL,
  `shipping_name` varchar(150) DEFAULT NULL,
  `sub_total` decimal(10,2) DEFAULT 0.00,
  `grand_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `invoice_no` varchar(255) NOT NULL,
  `viewed` varchar(255) NOT NULL DEFAULT '0',
  `delivery_viewed` varchar(255) NOT NULL DEFAULT '1',
  `payment_status_viewed` varchar(255) NOT NULL DEFAULT '1',
  `commission_calculated` varchar(255) NOT NULL DEFAULT '0',
  `comment` text DEFAULT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'pending',
  `tracking_code` varchar(100) DEFAULT NULL,
  `confirmed_date` varchar(30) DEFAULT NULL,
  `processing_date` varchar(30) DEFAULT NULL,
  `picked_date` varchar(30) DEFAULT NULL,
  `shipped_date` varchar(30) DEFAULT NULL,
  `delivered_date` varchar(30) DEFAULT NULL,
  `cancel_date` varchar(30) DEFAULT NULL,
  `return_date` varchar(30) DEFAULT NULL,
  `return_reason` text DEFAULT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Not guest order, 2=>Guest Order',
  `coupon` varchar(50) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `vendor_id` bigint(20) DEFAULT 0,
  `product_name` varchar(255) DEFAULT NULL,
  `is_varient` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Varient Product, 0=>Normal Product',
  `variation` longtext DEFAULT NULL,
  `qty` varchar(100) DEFAULT NULL,
  `price` double(20,2) NOT NULL DEFAULT 0.00,
  `tax` double(20,2) NOT NULL DEFAULT 0.00,
  `return_count` int(11) NOT NULL DEFAULT 0,
  `shipping_cost` double(20,2) NOT NULL DEFAULT 0.00,
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `shipping_type` varchar(255) DEFAULT NULL,
  `pickup_point_id` int(11) DEFAULT NULL,
  `product_referral_code` varchar(255) DEFAULT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(50) DEFAULT NULL,
  `name_bn` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `description_bn` text DEFAULT NULL,
  `position` varchar(255) DEFAULT 'nav',
  `faq` text DEFAULT NULL,
  `faq_bn` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `about_bn` text DEFAULT NULL,
  `privacy` text DEFAULT NULL,
  `privacy_bn` text DEFAULT NULL,
  `terms` text DEFAULT NULL,
  `terms_bn` text DEFAULT NULL,
  `help` text DEFAULT NULL,
  `help_bn` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name_en`, `name_bn`, `title`, `slug`, `description_en`, `description_bn`, `position`, `faq`, `faq_bn`, `about`, `about_bn`, `privacy`, `privacy_bn`, `terms`, `terms_bn`, `help`, `help_bn`, `status`, `created_at`, `updated_at`) VALUES
(9, NULL, NULL, NULL, NULL, NULL, NULL, 'nav', '<p>Hello&nbsp;</p>', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" data-ved=\"2ahUKEwjntIe13tWEAxXoR2wGHTKSC1IQ3ewLegQIBRAU\" dir=\"ltr\" style=\"unicode-bidi: isolate; font-size: 28px; line-height: 32px; background-color: rgb(248, 249, 250); border-width: initial; border-style: none; padding-top: 2px; padding-right: 0.14em; padding-bottom: 2px; position: relative; margin-top: -2px; margin-bottom: -2px; resize: none; overflow: hidden; width: 270px; text-wrap: wrap; overflow-wrap: break-word; color: rgb(32, 33, 36); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><span class=\"Y2IQFc\" lang=\"bn\">হ্যালো</span></pre>', '<p>Hello</p>', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" data-ved=\"2ahUKEwjntIe13tWEAxXoR2wGHTKSC1IQ3ewLegQIBRAU\" dir=\"ltr\" style=\"font-size: 28px; unicode-bidi: isolate; margin-top: -2px; margin-bottom: -2px; overflow: hidden; padding-top: 2px; padding-right: 0.14em; padding-bottom: 2px; border-width: initial; border-style: none; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; line-height: 32px; background-color: rgb(248, 249, 250); position: relative; resize: none; width: 270px; text-wrap: wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"bn\">হ্যালো</span></pre>', '<p><span style=\"font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Hello&nbsp;</span><br></p>', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" data-ved=\"2ahUKEwjntIe13tWEAxXoR2wGHTKSC1IQ3ewLegQIBRAU\" dir=\"ltr\" style=\"font-size: 28px; unicode-bidi: isolate; margin-top: -2px; margin-bottom: -2px; overflow: hidden; padding-top: 2px; padding-right: 0.14em; padding-bottom: 2px; border-width: initial; border-style: none; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; line-height: 32px; background-color: rgb(248, 249, 250); position: relative; resize: none; width: 270px; text-wrap: wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"bn\">হ্যালো</span></pre>', '<p style=\"text-align: justify;\"><b>Eligible Items for Return:</b></p><ol><li style=\"text-align: justify;\">You may return most new, unopened items sold by [Company Name] within [Number] days of delivery for a full refund.</li><li style=\"text-align: justify;\">Items must be in their original, unopened packaging, including any manuals, warranty cards, or accessories.</li><li style=\"text-align: justify;\">Items showing signs of wear or use will not be accepted for return.</li></ol><p style=\"text-align: justify;\"><b><br></b></p><p style=\"text-align: justify;\"><b>Items Not Eligible for Return:</b></p><p style=\"text-align: justify;\">Items that are damaged or defective upon arrival must be reported within [Number] days of delivery. Please contact our customer service team for a replacement or refund.</p><p style=\"text-align: justify;\">[List any specific exclusions, e.g., downloadable products, personalized items, clearance items]</p><p style=\"text-align: justify;\"><br></p><p style=\"text-align: justify;\"><b>Return Process:</b></p><ol><li style=\"text-align: justify;\">To initiate a return, please visit our Returns Center on our website ([link to returns center]) or contact customer service at [phone number] or [email address].</li><li style=\"text-align: justify;\">You will be issued a Return Merchandise Authorization (RMA) number and instructions on how to return the item.</li><li style=\"text-align: justify;\">You are responsible for the cost of return shipping unless the item is defective or damaged upon arrival.</li><li style=\"text-align: justify;\">We recommend using a trackable shipping service for your return.</li><li style=\"text-align: justify;\">Refunds:</li><li style=\"text-align: justify;\">Once your return is received and inspected, we will send you a confirmation email.</li><li style=\"text-align: justify;\">Your refund will be processed within [Number] business days and will be issued in the original form of payment.</li><li style=\"text-align: justify;\"><br></li><li style=\"text-align: justify;\">Please note that return shipping costs will not be refunded.</li></ol><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><b>Additional Information:</b></div><div style=\"text-align: justify;\">We reserve the right to limit or refuse returns at our sole discretion. These terms and conditions are subject to change at any time without prior notice.</div><div style=\"text-align: justify;\"><br></div>', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" data-ved=\"2ahUKEwjntIe13tWEAxXoR2wGHTKSC1IQ3ewLegQIBRAU\" dir=\"ltr\" style=\"font-size: 28px; unicode-bidi: isolate; margin-top: -2px; margin-bottom: -2px; overflow: hidden; padding-top: 2px; padding-right: 0.14em; padding-bottom: 2px; border-width: initial; border-style: none; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; line-height: 32px; background-color: rgb(248, 249, 250); position: relative; resize: none; width: 270px; text-wrap: wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"bn\">হ্যালো</span></pre>', '<p><span style=\"font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Hello</span><br></p>', '<pre class=\"tw-data-text tw-text-large tw-ta\" data-placeholder=\"Translation\" id=\"tw-target-text\" data-ved=\"2ahUKEwjntIe13tWEAxXoR2wGHTKSC1IQ3ewLegQIBRAU\" dir=\"ltr\" style=\"font-size: 28px; unicode-bidi: isolate; margin-top: -2px; margin-bottom: -2px; overflow: hidden; padding-top: 2px; padding-right: 0.14em; padding-bottom: 2px; border-width: initial; border-style: none; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; line-height: 32px; background-color: rgb(248, 249, 250); position: relative; resize: none; width: 270px; text-wrap: wrap; overflow-wrap: break-word; color: rgb(32, 33, 36);\"><span class=\"Y2IQFc\" lang=\"bn\">হ্যালো</span></pre>', 1, '2024-03-02 14:00:33', '2024-03-11 05:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 'Cash', '2024-02-06 06:14:41', '2024-02-06 06:14:59'),
(2, 'Check', '2024-02-06 06:15:08', '2024-02-06 06:15:08'),
(3, 'Bkash', '2024-02-06 06:15:56', '2024-02-06 06:15:56'),
(4, 'Rocket', '2024-02-06 06:16:13', '2024-02-06 06:16:13'),
(8, 'Paypal', '2024-02-06 06:17:35', '2024-02-06 06:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=>Single Product, 2=>Group Product',
  `brand_id` int(11) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `sub_sub_category_id` int(11) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `campaing_id` int(11) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `slug` varchar(150) NOT NULL,
  `product_code` varchar(50) DEFAULT NULL,
  `unit_weight` varchar(255) DEFAULT NULL,
  `purchase_price` double NOT NULL DEFAULT 0,
  `is_wholesell` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Wholesell, 0=>Not Wholesell',
  `wholesell_price` double NOT NULL DEFAULT 0,
  `wholesell_minimum_qty` int(11) NOT NULL DEFAULT 0,
  `regular_price` double NOT NULL DEFAULT 0,
  `discount_price` double NOT NULL DEFAULT 0,
  `discount_type` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Flat, 2=>Percentage',
  `minimum_buy_qty` int(11) NOT NULL DEFAULT 1,
  `stock_qty` int(11) NOT NULL DEFAULT 0,
  `product_thumbnail` varchar(255) DEFAULT NULL,
  `short_description_en` text DEFAULT NULL,
  `short_description_bn` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `description_bn` text DEFAULT NULL,
  `attributes` varchar(255) DEFAULT NULL,
  `is_varient` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Varient, 0=>Not Varient',
  `attribute_values` varchar(255) DEFAULT NULL,
  `variations` varchar(255) DEFAULT NULL,
  `damaged_qty` int(11) NOT NULL DEFAULT 0,
  `is_featured` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Featured, 0=>Not Featured',
  `is_replaceable` tinyint(4) NOT NULL DEFAULT 0,
  `is_deals` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Deals, 0=>Not Deals',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `is_approved` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Approved, 0=>Not Approved',
  `is_digital` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Digital, 0=>Not Digital',
  `points` bigint(20) DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_type`, `brand_id`, `category_id`, `sub_category_id`, `sub_sub_category_id`, `tags`, `vendor_id`, `supplier_id`, `unit_id`, `campaing_id`, `name_en`, `name_bn`, `slug`, `product_code`, `unit_weight`, `purchase_price`, `is_wholesell`, `wholesell_price`, `wholesell_minimum_qty`, `regular_price`, `discount_price`, `discount_type`, `minimum_buy_qty`, `stock_qty`, `product_thumbnail`, `short_description_en`, `short_description_bn`, `description_en`, `description_bn`, `attributes`, `is_varient`, `attribute_values`, `variations`, `damaged_qty`, `is_featured`, `is_replaceable`, `is_deals`, `status`, `is_approved`, `is_digital`, `points`, `created_by`, `created_at`, `updated_at`) VALUES
(59, 1, NULL, 19, NULL, NULL, '', 0, 5, 0, NULL, '6 piece kitchen knife set non-stick coating stainless steel', 'রান্নাঘরের ছুরি সেট শেফ ছুরি 6 সেট', '6-piece-kitchen-knife-set-non-stick-coating-stainless-steel-pA0rD', '72979', NULL, 500, 0, 0, 10, 650, 200, 1, 1, 7, 'upload/products/thumbnails/1781438753282353.webp', NULL, NULL, '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i1.1ac821ecyea5U8\" style=\"padding-right: 24px; padding-left: 24px; font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap; height: 52px; background: rgb(250, 250, 250); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">Product details of 6 piece kitchen knife set non-stick coating stainless steel - Great Value - Great to Have</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div class=\"pdp-product-desc height-limit\" style=\"padding: 5px 14px 5px 24px; height: 780px; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Made by high-quality steel and plastic,non-toxic, eco-friendly, harmless to body.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">3 times of Heat Treatment for extraordinary strength and durability.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Non-slip comfortable grip/ Handle.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Fashionate design</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Durable use for hotels, restaurants, commercial dinner &amp; home kitchens</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">A professional kitchen knife set that includes 4 knives, 1 scissor and 1 ceramic peeler</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Includes: Chef Knife, Carving Knife, Small Knife, Peeling Knife, scissors and ceramic peeler</li></ul></div></div></div>', '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i1.1ac821ecyea5U8\" style=\"padding-right: 24px; padding-left: 24px; font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap; height: 52px; background: rgb(250, 250, 250); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">Product details of 6 piece kitchen knife set non-stick coating stainless steel - Great Value - Great to Have</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div class=\"pdp-product-desc height-limit\" style=\"padding: 5px 14px 5px 24px; height: 780px; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Made by high-quality steel and plastic,non-toxic, eco-friendly, harmless to body.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">3 times of Heat Treatment for extraordinary strength and durability.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Non-slip comfortable grip/ Handle.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Fashionate design</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Durable use for hotels, restaurants, commercial dinner &amp; home kitchens</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">A professional kitchen knife set that includes 4 knives, 1 scissor and 1 ceramic peeler</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Includes: Chef Knife, Carving Knife, Small Knife, Peeling Knife, scissors and ceramic peeler</li></ul></div></div></div>', NULL, 0, NULL, NULL, 0, 1, 0, 1, 1, 1, 1, 0, 4, '2023-11-02 02:06:25', '2024-02-20 05:42:47'),
(60, 1, 0, 19, NULL, NULL, '', 0, 5, 0, NULL, 'Vegetables Fruit Finger Protector Knife', 'সবজি ফল আঙুল অভিভাবক ছুরি', 'Vegetables-Fruit-Finger-Protector-Knife-1VlzM', '15109', NULL, 40, 0, 0, 10, 59, 30, 1, 1, 4, 'upload/products/thumbnails/1781439728047740.webp', NULL, NULL, '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i2.1965655dhaemAK\" style=\"padding-right: 24px; padding-left: 24px; font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap; height: 52px; background: rgb(250, 250, 250); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">Product details of Garden Silicone Thumb Knife Professional Picking Cutting Vegetables Fruit Finger Protector Knife</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div class=\"pdp-product-desc \" style=\"padding: 5px 14px 5px 24px; height: auto; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Blade Change Style: Non-Changeable</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Thickness:0.013in</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Customized support: OEM</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Blade Material: Stainless Steel, Stainless Steel</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Handle Material:Silicone</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Application: Multi-Functional Knife, Fruit, and vegetable picking product name: Fruit and vegetable picking</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Material:Metal+silicone</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Use: Fruits garden hand Harvesting tools color: Orange, Yellow</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Large Thumb straight knife::5.5cm height; 2.7cm width</li></ul></div><div class=\"html-content detail-content\" style=\"margin-top: 16px; padding-bottom: 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245);\"><dl><dt><br style=\"margin: 0px; padding: 0px;\">Blade Change Style: Non-Changeable</dt></dl><dl><dt>Thickness:0.013in</dt></dl><dl><dt>Customized support: OEM</dt></dl><dl><dt>Blade Material: Stainless Steel, Stainless Steel</dt></dl><dl><dt>Handle Material:Silicone</dt></dl><dl><dt>Application: Multi-Functional Knife, Fruit, and vegetable picking product name: Fruit and vegetable picking</dt></dl><dl><dt>Material:Metal+silicone</dt></dl><dl><dt>Use: Fruits garden hand Harvesting tools color: Orange, Yellow</dt></dl><dl><dt>Large Thumb straight knife::5.5cm height; 2.7cm widt</dt></dl></div></div></div>', '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i2.1965655dhaemAK\" style=\"padding-right: 24px; padding-left: 24px; font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap; height: 52px; background: rgb(250, 250, 250); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">Product details of Garden Silicone Thumb Knife Professional Picking Cutting Vegetables Fruit Finger Protector Knife</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div class=\"pdp-product-desc \" style=\"padding: 5px 14px 5px 24px; height: auto; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Blade Change Style: Non-Changeable</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Thickness:0.013in</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Customized support: OEM</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Blade Material: Stainless Steel, Stainless Steel</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Handle Material:Silicone</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Application: Multi-Functional Knife, Fruit, and vegetable picking product name: Fruit and vegetable picking</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Material:Metal+silicone</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Use: Fruits garden hand Harvesting tools color: Orange, Yellow</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Large Thumb straight knife::5.5cm height; 2.7cm width</li></ul></div><div class=\"html-content detail-content\" style=\"margin-top: 16px; padding-bottom: 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245);\"><dl><dt><br style=\"margin: 0px; padding: 0px;\">Blade Change Style: Non-Changeable</dt></dl><dl><dt>Thickness:0.013in</dt></dl><dl><dt>Customized support: OEM</dt></dl><dl><dt>Blade Material: Stainless Steel, Stainless Steel</dt></dl><dl><dt>Handle Material:Silicone</dt></dl><dl><dt>Application: Multi-Functional Knife, Fruit, and vegetable picking product name: Fruit and vegetable picking</dt></dl><dl><dt>Material:Metal+silicone</dt></dl><dl><dt>Use: Fruits garden hand Harvesting tools color: Orange, Yellow</dt></dl><dl><dt>Large Thumb straight knife::5.5cm height; 2.7cm widt</dt></dl></div></div></div>', NULL, 0, NULL, NULL, 0, 1, 0, 1, 1, 1, 1, 500, 4, '2023-11-02 02:21:55', '2023-11-06 05:25:43'),
(61, 1, 0, 20, NULL, NULL, '', 8, 5, 0, NULL, 'White Cutting Board . Board For Vegetable Cutting in kitchen', 'কাটিং বোর্ড', 'White-Cutting-Board--Board-For-Vegetable-Cutting-in-kitchen-l39qs', '31200', NULL, 60, 0, 0, 10, 80, 10, 1, 1, 7, 'upload/products/thumbnails/1781439858439685.webp', NULL, NULL, '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i1.2b7027374KyquN\" style=\"padding-right: 24px; padding-left: 24px; font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap; height: 52px; background: rgb(250, 250, 250); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">Product details of White Cutting Board . Board For Vegetable Cutting in kitchen</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div class=\"pdp-product-desc \" style=\"padding: 5px 14px 5px 24px; height: auto; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Crafted from nonporous</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Odor-resistant</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Durable polypropylene</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Dishwasher Safe</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Reversible use on both sides</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Non-Porous, non-absorbent</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Crafted from nonporous</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Odor-resistant</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Durable polypropylene</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Dishwasher Safe</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Reversible use on both sides</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Non-Porous, non-absorbent</li></ul></div></div></div>', '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i1.2b7027374KyquN\" style=\"padding-right: 24px; padding-left: 24px; font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap; height: 52px; background: rgb(250, 250, 250); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">Product details of White Cutting Board . Board For Vegetable Cutting in kitchen</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div class=\"pdp-product-desc \" style=\"padding: 5px 14px 5px 24px; height: auto; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Crafted from nonporous</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Odor-resistant</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Durable polypropylene</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Dishwasher Safe</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Reversible use on both sides</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Non-Porous, non-absorbent</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Crafted from nonporous</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Odor-resistant</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Durable polypropylene</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Dishwasher Safe</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Reversible use on both sides</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Non-Porous, non-absorbent</li></ul></div></div></div>', NULL, 0, NULL, NULL, 0, 1, 0, 1, 1, 1, 1, 30, 4, '2023-11-02 02:23:59', '2024-02-17 01:41:38'),
(62, 1, NULL, 21, NULL, NULL, '', 0, 5, 0, NULL, 'Can cutter & Bottles can opener', 'কাপ পরিমাপ', 'Can-cutter--Bottles-can-opener-JHi8J', '66549', NULL, 600, 0, 0, 20, 500, 400, 1, 1, 7, 'upload/products/thumbnails/1781440198751968.webp', NULL, NULL, '<div class=\"html-content detail-content\" style=\"margin-top: 16px; padding-bottom: 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245); font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Description<br style=\"margin: 0px; padding: 0px;\"><ol><li>Can cutter&nbsp;</li><li>Bottles opener&nbsp;</li><li>Easy to open tin can&nbsp;</li><li>Very safely cut tin can &amp; bottles can open&nbsp;</li></ol></div><div class=\"pdp-mod-specification\" style=\"margin-top: 16px; padding-bottom: 10px; border-bottom: 1px solid rgb(239, 240, 245); font-size: 14px; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><h2 class=\"pdp-mod-section-title \" style=\"font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 19px; color: rgb(33, 33, 33); letter-spacing: 0px; overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap;\">Specifications of Can cutter &amp; Bottles can opener</h2><div class=\"pdp-general-features\"><ul class=\"specification-keys\" style=\"margin-top: 16px; margin-right: -15px; margin-left: -15px; height: auto; font-size: 14px;\"><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Brand</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">No Brand</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">SKU</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">199959279_BD-1404892600</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Model</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">Cbog</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Material</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">Stainless Steel</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Can Opener Type</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">Manual</div></li></ul></div></div>', '<div class=\"html-content detail-content\" style=\"margin-top: 16px; padding-bottom: 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245); font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">Description<br style=\"margin: 0px; padding: 0px;\"><ol><li>Can cutter&nbsp;</li><li>Bottles opener&nbsp;</li><li>Easy to open tin can&nbsp;</li><li>Very safely cut tin can &amp; bottles can open&nbsp;</li></ol></div><div class=\"pdp-mod-specification\" style=\"margin-top: 16px; padding-bottom: 10px; border-bottom: 1px solid rgb(239, 240, 245); font-size: 14px; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><h2 class=\"pdp-mod-section-title \" style=\"font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 19px; color: rgb(33, 33, 33); letter-spacing: 0px; overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap;\">Specifications of Can cutter &amp; Bottles can opener</h2><div class=\"pdp-general-features\"><ul class=\"specification-keys\" style=\"margin-top: 16px; margin-right: -15px; margin-left: -15px; height: auto; font-size: 14px;\"><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Brand</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">No Brand</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">SKU</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">199959279_BD-1404892600</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Model</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">Cbog</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Material</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">Stainless Steel</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Can Opener Type</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">Manual</div></li></ul></div></div>', NULL, 0, NULL, NULL, 0, 1, 0, 1, 1, 1, 1, 0, 4, '2023-11-02 02:29:24', '2024-04-03 06:05:08'),
(63, 1, 0, 24, NULL, NULL, '', 0, 5, 0, NULL, 'Crystal Glass Firni Set 6 pics best quality', 'কাপ', 'Crystal-Glass-Firni-Set-8QBC3', '39208', NULL, 120, 0, 0, 50, 300, 50, 1, 1, 8, 'upload/products/thumbnails/1781443922390653.webp', NULL, NULL, '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i1.128f7b3bqCqLb4\" style=\"padding-right: 24px; padding-left: 24px; font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap; height: 52px; background: rgb(250, 250, 250); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">Product details of Crystal Glass Firni Set/Bati Set/Snack Bowl Set/Soup Set/Firni Bati Set-6 Pcs</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div class=\"pdp-product-desc height-limit\" style=\"padding: 5px 14px 5px 24px; height: 780px; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Sordar Enterprise</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Good Product In Low Price</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Product Name: Crystal Glass Ware/Snack Bowl Set/Soup Set/Firni Bati Set/Kacer bati set</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Surface:Lead &amp; Cadmium free glaze</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Desige: Clean dising with extra hing edge</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Cleaning:Dishwasher safe</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Application:Oven,Microwave,Freezer Usable.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Capacity: 150ml</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Contains: Bowl 6pcs</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Soup, firni, salad, curry noodles etc can be served</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Beautiful colour.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Made by GLASS</li></ul></div></div></div>', '<h2 class=\"pdp-mod-section-title outer-title\" data-spm-anchor-id=\"a2a0e.pdp.0.i1.128f7b3bqCqLb4\" style=\"padding-right: 24px; padding-left: 24px; font-weight: 500; font-family: Roboto-Medium; font-size: 16px; line-height: 52px; color: rgb(33, 33, 33); overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap; height: 52px; background: rgb(250, 250, 250); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal;\">Product details of Crystal Glass Firni Set/Bati Set/Snack Bowl Set/Soup Set/Firni Bati Set-6 Pcs</h2><div class=\"pdp-product-detail\" data-spm=\"product_detail\" style=\"position: relative; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div class=\"pdp-product-desc height-limit\" style=\"padding: 5px 14px 5px 24px; height: 780px; overflow-y: hidden;\"><div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Sordar Enterprise</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Good Product In Low Price</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Product Name: Crystal Glass Ware/Snack Bowl Set/Soup Set/Firni Bati Set/Kacer bati set</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Surface:Lead &amp; Cadmium free glaze</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Desige: Clean dising with extra hing edge</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Cleaning:Dishwasher safe</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Application:Oven,Microwave,Freezer Usable.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Capacity: 150ml</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Contains: Bowl 6pcs</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Soup, firni, salad, curry noodles etc can be served</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Beautiful colour.</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Made by GLASS</li></ul></div></div></div>', NULL, 0, NULL, NULL, 0, 1, 0, 1, 1, 1, 1, 0, 4, '2023-11-02 03:28:35', '2024-04-03 06:05:08'),
(65, 1, 28, 20, NULL, NULL, NULL, 8, 5, 4, NULL, 'wsdg', 'মনসুর', 'wsdg-PseoP', '15025', NULL, 100, 0, 12, 12, 500, 300, 1, 1, 99, 'upload/products/thumbnails/1790049494228625.jpg', NULL, NULL, '<p>12212</p>', '<p>1212</p>', NULL, 0, NULL, NULL, 0, 0, 0, 0, 1, 1, 0, 0, 4, '2024-02-05 03:10:27', '2024-02-20 08:36:03'),
(67, 1, 31, 29, NULL, NULL, NULL, 0, 5, 0, NULL, 'test2', 'test2', 'test2-JyPjN', '11403', NULL, 500, 0, 0, 0, 1000, 800, 1, 1, 9, 'upload/products/thumbnails/1790677764766379.jpg', NULL, NULL, '<p>this is a test product for customer&nbsp;</p>', '<p>this is a test product for customer&nbsp;</p>', '[]', 0, '[]', NULL, 0, 0, 0, 0, 1, 1, 0, NULL, 4, '2024-02-12 01:36:33', '2024-02-15 06:24:12'),
(68, 1, 31, 21, NULL, NULL, NULL, 0, 5, 0, NULL, 'test2', 'test2', 'test2-8KeG4', '22500', NULL, 1000, 0, 0, 0, 800, 500, 1, 1, 7, 'upload/products/thumbnails/1790677888555909.webp', NULL, NULL, '<p>this is a test product</p>', '<p>this is a test product</p>', '[]', 0, '[]', NULL, 0, 0, 0, 0, 1, 1, 0, NULL, 4, '2024-02-12 01:38:31', '2024-02-15 01:14:44'),
(69, 1, 31, 25, NULL, NULL, NULL, 0, 5, 0, NULL, 'test2', 'test2', 'test2-ea6tT', '54109', NULL, 500, 0, 0, 0, 1000, 500, 1, 1, 10, 'upload/products/thumbnails/1790677993510087.jpg', NULL, NULL, '<p>this is a test product</p>', '<p>this is a test product</p>', '[]', 0, '[]', NULL, 0, 0, 0, 0, 1, 1, 0, NULL, 4, '2024-02-12 01:40:11', '2024-02-12 01:40:12'),
(70, 1, 31, 21, NULL, NULL, NULL, 0, 5, 0, NULL, 'test2', 'test2', 'test2-dMaKs', '72888', NULL, 600, 0, 0, 0, 1200, 800, 1, 1, 10, 'upload/products/thumbnails/1790678080621764.jpg', NULL, NULL, '<p>this is a testtt product</p>', '<p>this is a testtt product</p>', '[]', 0, '[]', NULL, 0, 0, 0, 0, 1, 1, 0, NULL, 4, '2024-02-12 01:41:34', '2024-03-12 09:38:09'),
(71, 1, 31, 22, NULL, NULL, NULL, 0, 5, 0, NULL, 'test product 5', 'test product 5', 'test-product-5-lqiEU', '23633', NULL, 300, 0, 0, 0, 800, 500, 1, 1, 4, 'upload/products/thumbnails/1790678153082745.jpg', NULL, NULL, '<p>this is a test product</p>', '<p>this is a test product</p>', '[\"12\",\"11\"]', 1, '[{\"attribute_id\":\"12\",\"values\":[\"White\",\"Silver\"]},{\"attribute_id\":\"11\",\"values\":[\"M\",\"L\"]}]', NULL, 0, 0, 0, 0, 1, 1, 0, NULL, 4, '2024-02-12 01:42:43', '2024-03-13 08:03:41'),
(72, 1, 31, 24, NULL, NULL, NULL, 0, 5, 0, NULL, 'test10', 'test10', 'test10-JtQkp', '36487', NULL, 200, 0, 0, 0, 1000, 500, 1, 1, 0, 'upload/products/thumbnails/1790678202512867.webp', NULL, NULL, '<p>this is a test for a customer&nbsp;</p>', '<p>this is a test for a customer&nbsp;</p>', '[]', 0, '[]', NULL, 0, 0, 0, 0, 1, 1, 0, NULL, 4, '2024-02-12 01:43:30', '2024-03-16 09:13:19'),
(73, 1, 30, 28, NULL, NULL, NULL, 0, 0, 0, NULL, 'test160', 'test160', 'test160-RICdq', '70182', NULL, 500, 0, 0, 0, 1200, 800, 1, 1, 5, 'upload/products/thumbnails/1790678274229827.jpg', NULL, NULL, '<p>this is a test products for a customer</p>', '<p>this is a test products for a customer</p>', '[\"11\"]', 1, '[{\"attribute_id\":\"11\",\"values\":[\"M\"]}]', NULL, 0, 0, 0, 0, 1, 1, 0, 20, 4, '2024-02-12 01:44:39', '2024-04-03 06:09:15'),
(75, 2, NULL, 25, NULL, NULL, NULL, 0, 0, 0, NULL, 'Bata shoes Bd', 'টেস্ট২', 'test2-HRviq', '35675', NULL, 800, 0, 0, 0, 1800, 50, 1, 1, 42, 'upload/products/thumbnails/1791315034187169.jpg', '<p>fdgsfddsfgsdf</p>', '<p>gdsfgsfdsdf</p>', '<p>gdfsgdsfg</p>', '<p>gdfsgsdfg</p>', '[]', 0, '[]', NULL, 0, 0, 0, 0, 1, 1, 0, 2, 4, '2024-02-19 02:25:40', '2024-04-03 06:14:53'),
(76, 1, 32, 25, NULL, NULL, NULL, 8, 5, 4, NULL, 'test2', 'টেস্ট২', 'test2-74trL', '77099', '10', 1000, 0, 0, 0, 1000, 10, 1, 1, 38, 'upload/products/thumbnails/1791607801513546.webp', '<p>dgg</p>', '<p>fdd</p>', '<p>fdbdf</p>', '<p>bdf</p>', '[\"12\"]', 1, '[{\"attribute_id\":\"12\",\"values\":[\"Black\",\"White\"]}]', NULL, 0, 0, 0, 0, 1, 1, 0, 0, 4, '2024-02-22 13:59:06', '2024-03-13 06:39:44'),
(79, 1, 28, 20, NULL, NULL, NULL, 8, 0, 0, NULL, 'Lifebuoy Handwash', 'Lifebuoy Handwash', 'Lifebuoy-Handwash-NTmqd', '76104', NULL, 500, 0, 0, 0, 700, 0, 1, 10, 16, 'upload/products/thumbnails/1792602220727547.jpg', '<p>re</p>', NULL, '<p>ertyh</p>', '<p>ertyh</p>', '[\"12\",\"11\"]', 1, '[{\"attribute_id\":\"12\",\"values\":[\"White\",\"Silver\"]},{\"attribute_id\":\"11\",\"values\":[\"M\"]}]', NULL, 0, 0, 0, 0, 1, 1, 0, 0, 4, '2024-03-04 13:24:57', '2024-03-13 07:07:59');
INSERT INTO `products` (`id`, `product_type`, `brand_id`, `category_id`, `sub_category_id`, `sub_sub_category_id`, `tags`, `vendor_id`, `supplier_id`, `unit_id`, `campaing_id`, `name_en`, `name_bn`, `slug`, `product_code`, `unit_weight`, `purchase_price`, `is_wholesell`, `wholesell_price`, `wholesell_minimum_qty`, `regular_price`, `discount_price`, `discount_type`, `minimum_buy_qty`, `stock_qty`, `product_thumbnail`, `short_description_en`, `short_description_bn`, `description_en`, `description_bn`, `attributes`, `is_varient`, `attribute_values`, `variations`, `damaged_qty`, `is_featured`, `is_replaceable`, `is_deals`, `status`, `is_approved`, `is_digital`, `points`, `created_by`, `created_at`, `updated_at`) VALUES
(80, 1, 0, 30, NULL, NULL, NULL, 0, 0, 0, NULL, 'Jamdani Katan 2 Piece Unstitched Drees Women and Girl', 'জামদানি কাতান 2 পিস আনস্টিচড পোশাক মহিলা এবং মেয়েদের', 'Jamdani-Katan-2-Piece-Unstitched-Drees-Women-and-Girl-z6RNc', '71186', NULL, 500, 0, 0, 0, 975, 0, 2, 4, 0, 'upload/products/thumbnails/1792670666232311.webp', 'New Jamdani Saree for the women of all classes and ages&nbsp;', '<p><span style=\"font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">জামদানি কাতান 2 পিস আনস্টিচড পোশাক মহিলা এবং মেয়েদের</span><br></p>', '<div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.118b6f83l4tsqI\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">amdani katan 2 pis</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">jama and orna</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">unstitched</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">body free size</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">long 46</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">orna 4.5 hat</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">easy to wash</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">#dress for girls</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">#2 pice dress</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">#three piece</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">#মেয়েদের জামা</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">#থ্রি পিস কালেকশন</li></ul></div><div class=\"html-content detail-content\" style=\"margin-top: 16px; padding-bottom: 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245); font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"></div><div class=\"pdp-mod-specification\" style=\"margin-top: 16px; padding-bottom: 10px; border-bottom: 1px solid rgb(239, 240, 245); font-size: 14px; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><h2 class=\"pdp-mod-section-title \" style=\"font-weight: 500; font-family: Roboto-Medium; font-size: 14px; line-height: 19px; color: rgb(33, 33, 33); letter-spacing: 0px; overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap;\">Specifications of Jamdani Katan 2 Piece Unstitched Drees Women and Girl</h2><div class=\"pdp-general-features\"><ul class=\"specification-keys\" style=\"margin-top: 16px; margin-right: -15px; margin-left: -15px; height: auto; font-size: 14px;\"><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Brand</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">No Brand</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">SKU</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">282345658_BD-1271226946</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">Main Material</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">Katan</div></li></ul></div></div>', '<div class=\"html-content pdp-product-highlights\" style=\"padding-top: 11px; padding-bottom: 16px; word-break: break-word; border-bottom: 1px solid rgb(239, 240, 245); overflow: hidden; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><ul class=\"\" style=\"margin-block-start: 1em; font-size: 14px; overflow: hidden; columns: 2; column-gap: 32px;\"><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Jamdani Katan 2 Piece Unstitched Drees Women and Girl</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Type: Unstitched 2 piece</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Color: As like pic</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Materials : katan</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Orna</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Kameez</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">100% same as pic</li><li class=\"\" style=\"padding-left: 15px; position: relative; font-size: 14px; line-height: 18px; text-align: left; list-style: none; word-break: break-word; break-inside: avoid;\">Easy to wash</li></ul></div><div class=\"html-content detail-content\" style=\"margin-top: 16px; padding-bottom: 16px; word-break: break-word; position: relative; height: auto; line-height: 19px; overflow-y: hidden; border-bottom: 1px solid rgb(239, 240, 245); font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><div></div></div><div class=\"pdp-mod-specification\" style=\"margin-top: 16px; padding-bottom: 10px; border-bottom: 1px solid rgb(239, 240, 245); font-size: 14px; font-family: Roboto, -apple-system, BlinkMacSystemFont, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\"><h2 class=\"pdp-mod-section-title \" style=\"font-weight: 500; font-family: Roboto-Medium; font-size: 14px; line-height: 19px; color: rgb(33, 33, 33); letter-spacing: 0px; overflow: hidden; text-overflow: ellipsis; text-wrap: nowrap;\">Specifications of জামদানি কাতান 2 পিস আনস্টিচড পোশাক মহিলা এবং মেয়েদের</h2><div class=\"pdp-general-features\"><ul class=\"specification-keys\" style=\"margin-top: 16px; margin-right: -15px; margin-left: -15px; height: auto; font-size: 14px;\"><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">ব্র্যান্ড</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">No Brand</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">SKU</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">282345658_BD-1271226946</div></li><li class=\"key-li\" style=\"margin-bottom: 8px; padding-right: 15px; padding-left: 15px; display: inline-block; width: 490px; vertical-align: top; line-height: 18px;\"><span class=\"key-title\" style=\"margin-right: 18px; display: inline-block; width: 140px; vertical-align: top; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">প্রধান উপাদান</span><div class=\"html-content key-value\" style=\"word-break: break-word; display: inline-block; width: 306px;\">Katan</div></li></ul></div><div class=\"box-content\" data-spm-anchor-id=\"a2a0e.pdp.product_detail.i0.118b25b2YU348j\" style=\"margin-top: 28px;\"><span class=\"key-title\" style=\"display: table-cell; width: 140px; color: rgb(117, 117, 117); word-break: break-word; font-size: 14px;\">What’s in the box</span><div class=\"html-content box-content-html\" style=\"padding-left: 18px; word-break: break-word; display: table-cell;\">জামদানি কাতান 2 পিস আনস্টিচড পোশাক মহিলা এবং মেয়েদের</div></div></div>', '[\"12\"]', 1, '[{\"attribute_id\":\"12\",\"values\":[\"Black\",\"White\"]}]', NULL, 0, 1, 0, 0, 1, 1, 0, 100, 4, '2024-03-05 07:32:52', '2024-03-05 07:59:01'),
(81, 2, 0, 30, NULL, NULL, NULL, 0, 0, 0, NULL, 'Trendy Wear', 'ট্রেন্ডি পরিধান', 'Trendy-Wear-QD0er', '83318', NULL, 1500, 0, 0, 0, 1975, 500, 1, 4, 1, 'upload/products/thumbnails/1792672829370351.webp', '<p>This package is for the people who love to wear trendy things and love to show off.</p>', '<p>এই প্যাকেজটি সেই লোকদের জন্য যারা ট্রেন্ডি জিনিস পরতে পছন্দ করেন এবং শো অফ করতে ভালবাসেন।<br></p>', '<p><span style=\"font-family: sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400;\">This package is for the people who love to wear trendy things and love to show off.</span><br></p>', '<p>এই প্যাকেজটি সেই লোকদের জন্য যারা ট্রেন্ডি জিনিস পরতে পছন্দ করেন এবং শো অফ করতে ভালবাসেন।<br></p>', '[]', 0, '[]', NULL, 0, 0, 0, 0, 1, 1, 0, 50, 4, '2024-03-05 08:07:15', '2024-03-16 09:13:19'),
(82, 1, 0, 20, NULL, NULL, NULL, 8, 0, 0, NULL, 'mens jacket', 'mens jacket', 'mens-jacket-JbIMi', '63457', NULL, 100, 0, 0, 0, 500, 5, 2, 5, 66, 'upload/products/thumbnails/1793026525988971.jpg', '<p>Test description</p>', NULL, '<p>new test description</p>', '<p>new test description</p>', '[\"12\",\"11\"]', 1, '[{\"attribute_id\":\"12\",\"values\":[\"White\",\"Silver\"]},{\"attribute_id\":\"11\",\"values\":[\"L\"]}]', NULL, 0, 1, 1, 0, 1, 1, 0, 0, 4, '2024-03-09 05:49:06', '2024-03-17 06:32:12'),
(83, 1, 0, 30, NULL, NULL, NULL, 8, 0, 0, NULL, 'mouse', 'mouse', 'mouse-Y1vQt', '61115', NULL, 600, 0, 0, 0, 600, 0, 1, 1, 0, 'upload/products/thumbnails/1793027438960018.png', '<p>sfhghsD</p>', NULL, '<p>sdgsDG</p>', '<p>sdgsDG</p>', '[\"11\"]', 1, '[{\"attribute_id\":\"11\",\"values\":[\"L\",\"XL\"]}]', NULL, 0, 0, 0, 0, 1, 1, 0, 40, 23, '2024-03-09 06:03:37', '2024-03-12 10:30:17'),
(85, 1, 0, 30, NULL, NULL, NULL, 0, 0, 0, NULL, 'ghjkfhkkhjrtgzfhgyudfgzfsdj', 'ghjkfhkkhjrtgzfhgyudfgzfsdj', 'ghjkfhkkhjrtgzfhgyudfgzfsdj-2ES1R', '16500', NULL, 55, 0, 0, 0, 55, 0, 1, 1, 121, 'upload/products/thumbnails/1793313100326639.jpg', '<p>fnfgf</p>', NULL, '<p>dfjfg</p>', '<p>dfjfg</p>', '[]', 0, '[]', NULL, 0, 0, 0, 0, 1, 1, 0, 0, 4, '2024-03-12 09:44:05', '2024-03-16 09:13:19'),
(86, 1, 0, 20, NULL, NULL, NULL, 0, 0, 0, NULL, 'Bata Shoes', 'Bata Shoes', 'Bata-Shoes-yY4hW', '25987', NULL, 500, 0, 0, 0, 1000, 10, 1, 1, 91, 'upload/products/thumbnails/1794382943988294.jpg', '<p>This is a test description</p>', NULL, '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span><br></p>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</span><br></p>', '[\"12\",\"11\"]', 1, '[{\"attribute_id\":\"12\",\"values\":[\"Black\",\"White\"]},{\"attribute_id\":\"11\",\"values\":[\"S\",\"M\"]}]', NULL, 0, 1, 1, 0, 1, 1, 0, 0, 4, '2024-03-24 05:08:47', '2024-04-03 06:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_prices`
--

CREATE TABLE `product_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `varient` varchar(50) DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `price` double(20,2) NOT NULL DEFAULT 0.00,
  `qty` mediumint(9) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `damaged_qty` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_stocks`
--

INSERT INTO `product_stocks` (`id`, `product_id`, `varient`, `sku`, `price`, `qty`, `image`, `damaged_qty`, `created_at`, `updated_at`) VALUES
(123, 76, 'Black', 'sku-Black', 1000.00, 2, 'upload/products/variations/1791607802904342.jpg', 0, '2024-02-22 13:59:06', '2024-03-09 14:43:35'),
(124, 76, 'White', 'sku-White', 1000.00, 22, 'upload/products/variations/1791607802978332.jpg', 0, '2024-02-22 13:59:06', '2024-03-13 06:51:25'),
(138, 73, 'M', 'sku-M', 1100.00, 0, '', 0, '2024-03-04 11:59:43', '2024-04-03 06:09:15'),
(139, 71, 'White-M', 'sku-White-M', 800.00, 10, '', 0, '2024-03-04 12:00:36', '2024-03-09 11:18:30'),
(140, 71, 'White-L', 'sku-White-L', 700.00, 10, '', 0, '2024-03-04 12:00:36', '2024-03-04 12:00:36'),
(141, 71, 'Silver-M', 'sku-Silver-M', 850.00, 3, '', 0, '2024-03-04 12:00:36', '2024-03-14 05:38:55'),
(142, 71, 'Silver-L', 'sku-Silver-L', 800.00, 5, '', 0, '2024-03-04 12:00:36', '2024-03-09 07:18:20'),
(146, 79, 'White-M', 'sku-White-M', 700.00, 133, 'upload/products/variations/1792602220975251.jpg', 0, '2024-03-04 13:24:57', '2024-03-12 10:36:21'),
(147, 79, 'Silver-M', 'sku-Silver-M', 720.00, 136, 'upload/products/variations/1792602221055060.jpg', 0, '2024-03-04 13:24:57', '2024-03-13 07:57:21'),
(148, 80, 'Black', 'sku-Black', 975.00, 10, 'upload/products/variations/1792671242141657.webp', 0, '2024-03-05 07:42:01', '2024-03-05 07:42:01'),
(149, 80, 'White', 'sku-White', 980.00, 10, 'upload/products/variations/1792671242231953.webp', 0, '2024-03-05 07:42:01', '2024-03-05 07:42:01'),
(150, 82, 'White-L', 'sku-White-L', 500.00, 82, 'upload/products/variations/1793026526556324.jpg', 0, '2024-03-09 05:49:07', '2024-03-14 05:59:09'),
(151, 82, 'Silver-L', 'sku-Silver-L', 500.00, 88, 'upload/products/variations/1793026526640895.jpg', 0, '2024-03-09 05:49:07', '2024-03-17 09:05:34'),
(152, 83, 'L', 'sku-L', 600.00, 4, 'upload/products/variations/1793027476744443.jpg', 0, '2024-03-09 06:04:13', '2024-03-12 10:30:17'),
(153, 83, 'XL', 'sku-XL', 500.00, 6, 'upload/products/variations/1793027477046624.jpg', 0, '2024-03-09 06:04:13', '2024-03-09 14:15:38'),
(162, 86, 'Black-S', 'sku-Black-S', 1100.00, 10, 'upload/products/variations/1794382944762463.webp', 0, '2024-03-24 05:08:48', '2024-03-24 05:08:48'),
(163, 86, 'Black-M', 'sku-Black-M', 1200.00, 9, 'upload/products/variations/1794382944835675.webp', 0, '2024-03-24 05:08:48', '2024-04-03 06:14:53'),
(164, 86, 'White-S', 'sku-White-S', 1300.00, 2, 'upload/products/variations/1794382944903699.webp', 0, '2024-03-24 05:08:48', '2024-04-03 06:33:59'),
(165, 86, 'White-M', 'sku-White-M', 1500.00, 10, 'upload/products/variations/1794382944969150.jpg', 0, '2024-03-24 05:08:48', '2024-03-24 05:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `returning_products`
--

CREATE TABLE `returning_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_details_id` int(11) DEFAULT NULL,
  `request_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `issue` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>Pending, 1=>Replaced, 2=>Rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `returning_products`
--

INSERT INTO `returning_products` (`id`, `order_details_id`, `request_id`, `user_id`, `order_id`, `product_id`, `issue`, `qty`, `image`, `status`, `created_at`, `updated_at`) VALUES
(24, 59, NULL, 26, 31, 84, 'damaged_product', 2, 'upload/return-product/1793748334697369.jpg', 2, '2024-03-17 05:01:57', '2024-03-17 06:25:41'),
(25, 60, NULL, 26, 32, 84, 'damaged_product', 2, 'upload/return-product/1793754141224019.jpg', 1, '2024-03-17 06:34:14', '2024-03-17 06:37:45'),
(26, 61, NULL, 26, 32, 82, 'damaged_product', 5, 'upload/return-product/1793754501418097.jpg', 1, '2024-03-17 06:39:58', '2024-03-17 06:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `return_requests`
--

CREATE TABLE `return_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `comment` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>not returned, 1=>returned',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `permissions` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '[\"1\",\"2\",\"4\",\"5\",\"6\",\"8\",\"9\",\"10\",\"17\",\"18\",\"19\"]', '2022-09-28 05:05:01', '2022-10-08 07:59:44'),
(2, 'Accountant', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"13\",\"14\",\"15\",\"16\",\"17\",\"41\",\"42\",\"43\",\"44\"]', '2022-09-28 05:06:43', '2022-09-28 05:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Maxima', '2022-08-22 02:57:04', '2024-05-15 13:36:15'),
(2, 'site_logo', 'upload/setting/logo/1715774947maxima-logo.webp', '2022-08-03 12:46:20', '2024-05-15 12:09:07'),
(3, 'site_favicon', 'upload/setting/favicon/1715774947maxima-logo.webp', '2022-08-04 12:46:20', '2024-05-15 12:09:07'),
(4, 'site_footer_logo', 'upload/setting/logo/1715774947maxima-logo-inversed.webp', '2022-08-03 12:46:20', '2024-05-15 12:09:07'),
(5, 'phone', '+88 01234567890', '2022-08-04 12:47:27', '2024-03-24 05:53:46'),
(6, 'email', 'info@maxima.com', '2022-08-12 12:47:52', '2024-05-15 13:36:15'),
(7, 'business_name', 'Maxima', '2022-08-08 12:48:27', '2024-05-15 13:36:15'),
(8, 'business_address', 'Dhaka', '2022-08-04 12:48:53', '2023-08-30 13:09:20'),
(9, 'business_hours', 'Always Open', '2022-08-01 12:49:29', '2023-02-20 06:36:26'),
(10, 'copy_right', 'Copy Right ecom', '2022-08-05 12:49:58', '2024-04-20 18:01:15'),
(11, 'developed_by', 'Classic IT & Sky Mart Ltd.', '2022-08-14 12:50:24', NULL),
(12, 'developer_link', 'https://www.classicit.com.bd/', '2022-08-13 12:50:56', NULL),
(13, 'facebook_url', '#', '2022-08-18 12:51:19', '2023-08-30 13:09:20'),
(14, 'twitter_url', '#', '2022-08-17 12:51:45', '2023-08-30 13:09:20'),
(15, 'linkedin_url', '#', '2022-08-12 12:52:12', '2023-08-30 13:09:20'),
(16, 'youtube_url', '#', '2022-08-04 12:52:42', '2023-08-30 13:09:20'),
(17, 'instagram_url', '#', '2022-08-11 12:53:11', '2023-08-30 13:09:20'),
(18, 'pinterest_url', '#', '2022-08-05 12:53:45', '2023-08-30 13:09:20'),
(19, 'guest_checkout', '1', '2022-09-21 05:45:31', '2022-09-21 05:45:31'),
(20, 'otp_system', '0', '2022-09-21 05:45:31', '2022-10-24 03:27:39'),
(21, 'multi_vendor', '0', '2022-10-08 04:08:02', '2023-09-04 03:17:37'),
(22, 'short_description', NULL, NULL, '2024-02-15 02:21:59'),
(23, 'order_return_duration', '9', '2024-03-14 06:48:04', '2024-03-14 07:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Inside Dhaka, 2=>Outside Dhaka',
  `shipping_charge` double(20,2) NOT NULL DEFAULT 0.00,
  `time` varchar(50) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `name`, `type`, `shipping_charge`, `time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Redex', 1, 80.00, '45 minutes', 1, '2022-09-03 03:40:16', '2022-09-03 03:40:16'),
(2, 'Sundarban Courier', 2, 150.00, '1 day', 1, '2022-09-03 03:39:25', '2022-09-03 03:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_img` varchar(255) DEFAULT NULL,
  `title_en` varchar(50) NOT NULL,
  `title_bn` varchar(50) DEFAULT NULL,
  `slider_url` text DEFAULT NULL,
  `description_bn` text DEFAULT NULL,
  `description_en` text DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1 COMMENT '1=>header slider, 2=>middle slider',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_img`, `title_en`, `title_bn`, `slider_url`, `description_bn`, `description_en`, `slug`, `type`, `status`, `created_at`, `updated_at`) VALUES
(9, 'upload/slider/1799126721421424.png', 'Get Your Car Within Maxima Automobiles', 'Get Your Car Within Maxima Automobiles', NULL, 'Get Your Car Within Maxima Automobiles Get Your Car Within Maxima Automobiles', 'Get Your Car Within Maxima Automobiles Get Your Car Within Maxima Automobiles', 'get-your-car-within-maxima-automobiles', 1, 1, '2024-05-15 13:49:07', '2024-05-15 13:49:07'),
(10, 'upload/slider/1799126737902028.png', 'Get Your Car Within Maxima Automobiles', 'Get Your Car Within Maxima Automobiles', NULL, 'Get Your Car Within Maxima Automobiles Get Your Car Within Maxima Automobiles', 'Get Your Car Within Maxima Automobiles Get Your Car Within Maxima Automobiles', 'get-your-car-within-maxima-automobiles', 1, 1, '2024-05-15 13:49:22', '2024-05-15 13:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `sms_providers`
--

CREATE TABLE `sms_providers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `url` varchar(100) NOT NULL,
  `api_key` varchar(100) NOT NULL,
  `sender_id` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_providers`
--

INSERT INTO `sms_providers` (`id`, `name`, `status`, `url`, `api_key`, `sender_id`, `created_at`, `updated_at`) VALUES
(1, 'Classic IT', 1, 'http://sms.classicit.com.bd/smsapi', 'R6001640623a9516bf1f71.13295352', 'Classic IT', '2022-04-25 21:27:37', '2022-05-24 11:16:12');

-- --------------------------------------------------------

--
-- Table structure for table `sms_templates`
--

CREATE TABLE `sms_templates` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `body` varchar(250) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_templates`
--

INSERT INTO `sms_templates` (`id`, `name`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 'registration_verification', '[[site_name]] রেজিস্ট্রেশন ভেরিফিকেশন কোডঃ [[code]]', 1, '2022-04-25 22:02:02', '2022-04-25 22:07:22'),
(2, 'login_verification', '[[site_name]] লগিন ভেরিফিকেশন কোডঃ [[code]]', 1, '2022-04-25 22:02:46', '2022-04-25 22:07:36'),
(3, 'order_message', 'আপনার অর্ডার সম্পন্ন হয়েছে। অর্ডার  আইডিঃ [[order_code]], মূল্যঃ [[order_amount]] টাকা। - [[site_name]]', 1, '2022-04-25 22:03:12', '2022-05-24 11:38:23'),
(5, 'password_reset', 'আপনার নতুন পাসওয়ার্ডঃ [[code]]', 1, '2022-06-22 06:42:46', '2022-06-22 06:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'aghuedgdeg@hhfsdfhg', '2022-11-07 05:52:32', '2022-11-07 05:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(50) NOT NULL,
  `name_bn` varchar(50) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Featured, 0=>Not Featured',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `name_en` varchar(50) NOT NULL,
  `name_bn` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `subsubcategory_image` varchar(255) DEFAULT NULL,
  `is_feature` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=>Active, 0=>Inactive',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `phone`, `email`, `address`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(5, 'Test Supplier', '01700103040', 'testsupplier@gmail.com', 'Test supplier', 1, 4, NULL, '2024-02-04 06:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `tag_slug_en` varchar(255) DEFAULT NULL,
  `tag_slug_bn` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_bn` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `status`, `created_by`, `created_at`, `updated_at`) VALUES
(3, 'gm', 1, 4, '2023-08-30 19:54:21', '2023-08-30 19:54:21'),
(4, 'kg', 1, 4, '2023-08-30 19:54:26', '2023-08-30 19:54:26'),
(5, 'Ltr', 1, 4, '2023-08-30 19:54:42', '2023-08-30 19:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `upazillas`
--

CREATE TABLE `upazillas` (
  `id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `name_en` varchar(25) NOT NULL,
  `name_bn` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `upazillas`
--

INSERT INTO `upazillas` (`id`, `district_id`, `name_en`, `name_bn`, `url`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', 'debidwar.comilla.gov.bd'),
(2, 1, 'Barura', 'বরুড়া', 'barura.comilla.gov.bd'),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', 'brahmanpara.comilla.gov.bd'),
(4, 1, 'Chandina', 'চান্দিনা', 'chandina.comilla.gov.bd'),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', 'chauddagram.comilla.gov.bd'),
(6, 1, 'Daudkandi', 'দাউদকান্দি', 'daudkandi.comilla.gov.bd'),
(7, 1, 'Homna', 'হোমনা', 'homna.comilla.gov.bd'),
(8, 1, 'Laksam', 'লাকসাম', 'laksam.comilla.gov.bd'),
(9, 1, 'Muradnagar', 'মুরাদনগর', 'muradnagar.comilla.gov.bd'),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', 'nangalkot.comilla.gov.bd'),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', 'comillasadar.comilla.gov.bd'),
(12, 1, 'Meghna', 'মেঘনা', 'meghna.comilla.gov.bd'),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', 'monohargonj.comilla.gov.bd'),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', 'sadarsouth.comilla.gov.bd'),
(15, 1, 'Titas', 'তিতাস', 'titas.comilla.gov.bd'),
(16, 1, 'Burichang', 'বুড়িচং', 'burichang.comilla.gov.bd'),
(17, 1, 'Lalmai', 'লালমাই', 'lalmai.comilla.gov.bd'),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', 'chhagalnaiya.feni.gov.bd'),
(19, 2, 'Feni Sadar', 'ফেনী সদর', 'sadar.feni.gov.bd'),
(20, 2, 'Sonagazi', 'সোনাগাজী', 'sonagazi.feni.gov.bd'),
(21, 2, 'Fulgazi', 'ফুলগাজী', 'fulgazi.feni.gov.bd'),
(22, 2, 'Parshuram', 'পরশুরাম', 'parshuram.feni.gov.bd'),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', 'daganbhuiyan.feni.gov.bd'),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', 'sadar.brahmanbaria.gov.bd'),
(25, 3, 'Kasba', 'কসবা', 'kasba.brahmanbaria.gov.bd'),
(26, 3, 'Nasirnagar', 'নাসিরনগর', 'nasirnagar.brahmanbaria.gov.bd'),
(27, 3, 'Sarail', 'সরাইল', 'sarail.brahmanbaria.gov.bd'),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', 'ashuganj.brahmanbaria.gov.bd'),
(29, 3, 'Akhaura', 'আখাউড়া', 'akhaura.brahmanbaria.gov.bd'),
(30, 3, 'Nabinagar', 'নবীনগর', 'nabinagar.brahmanbaria.gov.bd'),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', 'bancharampur.brahmanbaria.gov.bd'),
(32, 3, 'Bijoynagar', 'বিজয়নগর', 'bijoynagar.brahmanbaria.gov.bd    '),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', 'sadar.rangamati.gov.bd'),
(34, 4, 'Kaptai', 'কাপ্তাই', 'kaptai.rangamati.gov.bd'),
(35, 4, 'Kawkhali', 'কাউখালী', 'kawkhali.rangamati.gov.bd'),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', 'baghaichari.rangamati.gov.bd'),
(37, 4, 'Barkal', 'বরকল', 'barkal.rangamati.gov.bd'),
(38, 4, 'Langadu', 'লংগদু', 'langadu.rangamati.gov.bd'),
(39, 4, 'Rajasthali', 'রাজস্থলী', 'rajasthali.rangamati.gov.bd'),
(40, 4, 'Belaichari', 'বিলাইছড়ি', 'belaichari.rangamati.gov.bd'),
(41, 4, 'Juraichari', 'জুরাছড়ি', 'juraichari.rangamati.gov.bd'),
(42, 4, 'Naniarchar', 'নানিয়ারচর', 'naniarchar.rangamati.gov.bd'),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', 'sadar.noakhali.gov.bd'),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.noakhali.gov.bd'),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', 'begumganj.noakhali.gov.bd'),
(46, 5, 'Hatia', 'হাতিয়া', 'hatia.noakhali.gov.bd'),
(47, 5, 'Subarnachar', 'সুবর্ণচর', 'subarnachar.noakhali.gov.bd'),
(48, 5, 'Kabirhat', 'কবিরহাট', 'kabirhat.noakhali.gov.bd'),
(49, 5, 'Senbug', 'সেনবাগ', 'senbug.noakhali.gov.bd'),
(50, 5, 'Chatkhil', 'চাটখিল', 'chatkhil.noakhali.gov.bd'),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', 'sonaimori.noakhali.gov.bd'),
(52, 6, 'Haimchar', 'হাইমচর', 'haimchar.chandpur.gov.bd'),
(53, 6, 'Kachua', 'কচুয়া', 'kachua.chandpur.gov.bd'),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', 'shahrasti.chandpur.gov.bd'),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', 'sadar.chandpur.gov.bd'),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', 'matlabsouth.chandpur.gov.bd'),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', 'hajiganj.chandpur.gov.bd'),
(58, 6, 'Matlab North', 'মতলব উত্তর', 'matlabnorth.chandpur.gov.bd'),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', 'faridgonj.chandpur.gov.bd'),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', 'sadar.lakshmipur.gov.bd'),
(61, 7, 'Kamalnagar', 'কমলনগর', 'kamalnagar.lakshmipur.gov.bd'),
(62, 7, 'Raipur', 'রায়পুর', 'raipur.lakshmipur.gov.bd'),
(63, 7, 'Ramgati', 'রামগতি', 'ramgati.lakshmipur.gov.bd'),
(64, 7, 'Ramganj', 'রামগঞ্জ', 'ramganj.lakshmipur.gov.bd'),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', 'rangunia.chittagong.gov.bd'),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', 'sitakunda.chittagong.gov.bd'),
(67, 8, 'Mirsharai', 'মীরসরাই', 'mirsharai.chittagong.gov.bd'),
(68, 8, 'Patiya', 'পটিয়া', 'patiya.chittagong.gov.bd'),
(69, 8, 'Sandwip', 'সন্দ্বীপ', 'sandwip.chittagong.gov.bd'),
(70, 8, 'Banshkhali', 'বাঁশখালী', 'banshkhali.chittagong.gov.bd'),
(71, 8, 'Boalkhali', 'বোয়ালখালী', 'boalkhali.chittagong.gov.bd'),
(72, 8, 'Anwara', 'আনোয়ারা', 'anwara.chittagong.gov.bd'),
(73, 8, 'Chandanaish', 'চন্দনাইশ', 'chandanaish.chittagong.gov.bd'),
(74, 8, 'Satkania', 'সাতকানিয়া', 'satkania.chittagong.gov.bd'),
(75, 8, 'Lohagara', 'লোহাগাড়া', 'lohagara.chittagong.gov.bd'),
(76, 8, 'Hathazari', 'হাটহাজারী', 'hathazari.chittagong.gov.bd'),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', 'fatikchhari.chittagong.gov.bd'),
(78, 8, 'Raozan', 'রাউজান', 'raozan.chittagong.gov.bd'),
(79, 8, 'Karnafuli', 'কর্ণফুলী', 'karnafuli.chittagong.gov.bd'),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', 'sadar.coxsbazar.gov.bd'),
(81, 9, 'Chakaria', 'চকরিয়া', 'chakaria.coxsbazar.gov.bd'),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', 'kutubdia.coxsbazar.gov.bd'),
(83, 9, 'Ukhiya', 'উখিয়া', 'ukhiya.coxsbazar.gov.bd'),
(84, 9, 'Moheshkhali', 'মহেশখালী', 'moheshkhali.coxsbazar.gov.bd'),
(85, 9, 'Pekua', 'পেকুয়া', 'pekua.coxsbazar.gov.bd'),
(86, 9, 'Ramu', 'রামু', 'ramu.coxsbazar.gov.bd'),
(87, 9, 'Teknaf', 'টেকনাফ', 'teknaf.coxsbazar.gov.bd'),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', 'sadar.khagrachhari.gov.bd'),
(89, 10, 'Dighinala', 'দিঘীনালা', 'dighinala.khagrachhari.gov.bd'),
(90, 10, 'Panchari', 'পানছড়ি', 'panchari.khagrachhari.gov.bd'),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', 'laxmichhari.khagrachhari.gov.bd'),
(92, 10, 'Mohalchari', 'মহালছড়ি', 'mohalchari.khagrachhari.gov.bd'),
(93, 10, 'Manikchari', 'মানিকছড়ি', 'manikchari.khagrachhari.gov.bd'),
(94, 10, 'Ramgarh', 'রামগড়', 'ramgarh.khagrachhari.gov.bd'),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', 'matiranga.khagrachhari.gov.bd'),
(96, 10, 'Guimara', 'গুইমারা', 'guimara.khagrachhari.gov.bd'),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', 'sadar.bandarban.gov.bd'),
(98, 11, 'Alikadam', 'আলীকদম', 'alikadam.bandarban.gov.bd'),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', 'naikhongchhari.bandarban.gov.bd'),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', 'rowangchhari.bandarban.gov.bd'),
(101, 11, 'Lama', 'লামা', 'lama.bandarban.gov.bd'),
(102, 11, 'Ruma', 'রুমা', 'ruma.bandarban.gov.bd'),
(103, 11, 'Thanchi', 'থানচি', 'thanchi.bandarban.gov.bd'),
(104, 12, 'Belkuchi', 'বেলকুচি', 'belkuchi.sirajganj.gov.bd'),
(105, 12, 'Chauhali', 'চৌহালি', 'chauhali.sirajganj.gov.bd'),
(106, 12, 'Kamarkhand', 'কামারখন্দ', 'kamarkhand.sirajganj.gov.bd'),
(107, 12, 'Kazipur', 'কাজীপুর', 'kazipur.sirajganj.gov.bd'),
(108, 12, 'Raigonj', 'রায়গঞ্জ', 'raigonj.sirajganj.gov.bd'),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', 'shahjadpur.sirajganj.gov.bd'),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', 'sirajganjsadar.sirajganj.gov.bd'),
(111, 12, 'Tarash', 'তাড়াশ', 'tarash.sirajganj.gov.bd'),
(112, 12, 'Ullapara', 'উল্লাপাড়া', 'ullapara.sirajganj.gov.bd'),
(113, 13, 'Sujanagar', 'সুজানগর', 'sujanagar.pabna.gov.bd'),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', 'ishurdi.pabna.gov.bd'),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', 'bhangura.pabna.gov.bd'),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', 'pabnasadar.pabna.gov.bd'),
(117, 13, 'Bera', 'বেড়া', 'bera.pabna.gov.bd'),
(118, 13, 'Atghoria', 'আটঘরিয়া', 'atghoria.pabna.gov.bd'),
(119, 13, 'Chatmohar', 'চাটমোহর', 'chatmohar.pabna.gov.bd'),
(120, 13, 'Santhia', 'সাঁথিয়া', 'santhia.pabna.gov.bd'),
(121, 13, 'Faridpur', 'ফরিদপুর', 'faridpur.pabna.gov.bd'),
(122, 14, 'Kahaloo', 'কাহালু', 'kahaloo.bogra.gov.bd'),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', 'sadar.bogra.gov.bd'),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', 'shariakandi.bogra.gov.bd'),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', 'shajahanpur.bogra.gov.bd'),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', 'dupchanchia.bogra.gov.bd'),
(127, 14, 'Adamdighi', 'আদমদিঘি', 'adamdighi.bogra.gov.bd'),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', 'nondigram.bogra.gov.bd'),
(129, 14, 'Sonatala', 'সোনাতলা', 'sonatala.bogra.gov.bd'),
(130, 14, 'Dhunot', 'ধুনট', 'dhunot.bogra.gov.bd'),
(131, 14, 'Gabtali', 'গাবতলী', 'gabtali.bogra.gov.bd'),
(132, 14, 'Sherpur', 'শেরপুর', 'sherpur.bogra.gov.bd'),
(133, 14, 'Shibganj', 'শিবগঞ্জ', 'shibganj.bogra.gov.bd'),
(134, 15, 'Paba', 'পবা', 'paba.rajshahi.gov.bd'),
(135, 15, 'Durgapur', 'দুর্গাপুর', 'durgapur.rajshahi.gov.bd'),
(136, 15, 'Mohonpur', 'মোহনপুর', 'mohonpur.rajshahi.gov.bd'),
(137, 15, 'Charghat', 'চারঘাট', 'charghat.rajshahi.gov.bd'),
(138, 15, 'Puthia', 'পুঠিয়া', 'puthia.rajshahi.gov.bd'),
(139, 15, 'Bagha', 'বাঘা', 'bagha.rajshahi.gov.bd'),
(140, 15, 'Godagari', 'গোদাগাড়ী', 'godagari.rajshahi.gov.bd'),
(141, 15, 'Tanore', 'তানোর', 'tanore.rajshahi.gov.bd'),
(142, 15, 'Bagmara', 'বাগমারা', 'bagmara.rajshahi.gov.bd'),
(143, 16, 'Natore Sadar', 'নাটোর সদর', 'natoresadar.natore.gov.bd'),
(144, 16, 'Singra', 'সিংড়া', 'singra.natore.gov.bd'),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', 'baraigram.natore.gov.bd'),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', 'bagatipara.natore.gov.bd'),
(147, 16, 'Lalpur', 'লালপুর', 'lalpur.natore.gov.bd'),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', 'gurudaspur.natore.gov.bd'),
(149, 16, 'Naldanga', 'নলডাঙ্গা', 'naldanga.natore.gov.bd'),
(150, 17, 'Akkelpur', 'আক্কেলপুর', 'akkelpur.joypurhat.gov.bd'),
(151, 17, 'Kalai', 'কালাই', 'kalai.joypurhat.gov.bd'),
(152, 17, 'Khetlal', 'ক্ষেতলাল', 'khetlal.joypurhat.gov.bd'),
(153, 17, 'Panchbibi', 'পাঁচবিবি', 'panchbibi.joypurhat.gov.bd'),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', 'joypurhatsadar.joypurhat.gov.bd'),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', 'chapainawabganjsadar.chapainawabganj.gov.bd'),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', 'gomostapur.chapainawabganj.gov.bd'),
(157, 18, 'Nachol', 'নাচোল', 'nachol.chapainawabganj.gov.bd'),
(158, 18, 'Bholahat', 'ভোলাহাট', 'bholahat.chapainawabganj.gov.bd'),
(159, 18, 'Shibganj', 'শিবগঞ্জ', 'shibganj.chapainawabganj.gov.bd'),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', 'mohadevpur.naogaon.gov.bd'),
(161, 19, 'Badalgachi', 'বদলগাছী', 'badalgachi.naogaon.gov.bd'),
(162, 19, 'Patnitala', 'পত্নিতলা', 'patnitala.naogaon.gov.bd'),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', 'dhamoirhat.naogaon.gov.bd'),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', 'niamatpur.naogaon.gov.bd'),
(165, 19, 'Manda', 'মান্দা', 'manda.naogaon.gov.bd'),
(166, 19, 'Atrai', 'আত্রাই', 'atrai.naogaon.gov.bd'),
(167, 19, 'Raninagar', 'রাণীনগর', 'raninagar.naogaon.gov.bd'),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', 'naogaonsadar.naogaon.gov.bd'),
(169, 19, 'Porsha', 'পোরশা', 'porsha.naogaon.gov.bd'),
(170, 19, 'Sapahar', 'সাপাহার', 'sapahar.naogaon.gov.bd'),
(171, 20, 'Manirampur', 'মণিরামপুর', 'manirampur.jessore.gov.bd'),
(172, 20, 'Abhaynagar', 'অভয়নগর', 'abhaynagar.jessore.gov.bd'),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', 'bagherpara.jessore.gov.bd'),
(174, 20, 'Chougachha', 'চৌগাছা', 'chougachha.jessore.gov.bd'),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', 'jhikargacha.jessore.gov.bd'),
(176, 20, 'Keshabpur', 'কেশবপুর', 'keshabpur.jessore.gov.bd'),
(177, 20, 'Jessore Sadar', 'যশোর সদর', 'sadar.jessore.gov.bd'),
(178, 20, 'Sharsha', 'শার্শা', 'sharsha.jessore.gov.bd'),
(179, 21, 'Assasuni', 'আশাশুনি', 'assasuni.satkhira.gov.bd'),
(180, 21, 'Debhata', 'দেবহাটা', 'debhata.satkhira.gov.bd'),
(181, 21, 'Kalaroa', 'কলারোয়া', 'kalaroa.satkhira.gov.bd'),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', 'satkhirasadar.satkhira.gov.bd'),
(183, 21, 'Shyamnagar', 'শ্যামনগর', 'shyamnagar.satkhira.gov.bd'),
(184, 21, 'Tala', 'তালা', 'tala.satkhira.gov.bd'),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', 'kaliganj.satkhira.gov.bd'),
(186, 22, 'Mujibnagar', 'মুজিবনগর', 'mujibnagar.meherpur.gov.bd'),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', 'meherpursadar.meherpur.gov.bd'),
(188, 22, 'Gangni', 'গাংনী', 'gangni.meherpur.gov.bd'),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', 'narailsadar.narail.gov.bd'),
(190, 23, 'Lohagara', 'লোহাগড়া', 'lohagara.narail.gov.bd'),
(191, 23, 'Kalia', 'কালিয়া', 'kalia.narail.gov.bd'),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', 'chuadangasadar.chuadanga.gov.bd'),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', 'alamdanga.chuadanga.gov.bd'),
(194, 24, 'Damurhuda', 'দামুড়হুদা', 'damurhuda.chuadanga.gov.bd'),
(195, 24, 'Jibannagar', 'জীবননগর', 'jibannagar.chuadanga.gov.bd'),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', 'kushtiasadar.kushtia.gov.bd'),
(197, 25, 'Kumarkhali', 'কুমারখালী', 'kumarkhali.kushtia.gov.bd'),
(198, 25, 'Khoksa', 'খোকসা', 'khoksa.kushtia.gov.bd'),
(199, 25, 'Mirpur', 'মিরপুর', 'mirpurkushtia.kushtia.gov.bd'),
(200, 25, 'Daulatpur', 'দৌলতপুর', 'daulatpur.kushtia.gov.bd'),
(201, 25, 'Bheramara', 'ভেড়ামারা', 'bheramara.kushtia.gov.bd'),
(202, 26, 'Shalikha', 'শালিখা', 'shalikha.magura.gov.bd'),
(203, 26, 'Sreepur', 'শ্রীপুর', 'sreepur.magura.gov.bd'),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', 'magurasadar.magura.gov.bd'),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', 'mohammadpur.magura.gov.bd'),
(206, 27, 'Paikgasa', 'পাইকগাছা', 'paikgasa.khulna.gov.bd'),
(207, 27, 'Fultola', 'ফুলতলা', 'fultola.khulna.gov.bd'),
(208, 27, 'Digholia', 'দিঘলিয়া', 'digholia.khulna.gov.bd'),
(209, 27, 'Rupsha', 'রূপসা', 'rupsha.khulna.gov.bd'),
(210, 27, 'Terokhada', 'তেরখাদা', 'terokhada.khulna.gov.bd'),
(211, 27, 'Dumuria', 'ডুমুরিয়া', 'dumuria.khulna.gov.bd'),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', 'botiaghata.khulna.gov.bd'),
(213, 27, 'Dakop', 'দাকোপ', 'dakop.khulna.gov.bd'),
(214, 27, 'Koyra', 'কয়রা', 'koyra.khulna.gov.bd'),
(215, 28, 'Fakirhat', 'ফকিরহাট', 'fakirhat.bagerhat.gov.bd'),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', 'sadar.bagerhat.gov.bd'),
(217, 28, 'Mollahat', 'মোল্লাহাট', 'mollahat.bagerhat.gov.bd'),
(218, 28, 'Sarankhola', 'শরণখোলা', 'sarankhola.bagerhat.gov.bd'),
(219, 28, 'Rampal', 'রামপাল', 'rampal.bagerhat.gov.bd'),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', 'morrelganj.bagerhat.gov.bd'),
(221, 28, 'Kachua', 'কচুয়া', 'kachua.bagerhat.gov.bd'),
(222, 28, 'Mongla', 'মোংলা', 'mongla.bagerhat.gov.bd'),
(223, 28, 'Chitalmari', 'চিতলমারী', 'chitalmari.bagerhat.gov.bd'),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', 'sadar.jhenaidah.gov.bd'),
(225, 29, 'Shailkupa', 'শৈলকুপা', 'shailkupa.jhenaidah.gov.bd'),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', 'harinakundu.jhenaidah.gov.bd'),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.jhenaidah.gov.bd'),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', 'kotchandpur.jhenaidah.gov.bd'),
(229, 29, 'Moheshpur', 'মহেশপুর', 'moheshpur.jhenaidah.gov.bd'),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', 'sadar.jhalakathi.gov.bd'),
(231, 30, 'Kathalia', 'কাঠালিয়া', 'kathalia.jhalakathi.gov.bd'),
(232, 30, 'Nalchity', 'নলছিটি', 'nalchity.jhalakathi.gov.bd'),
(233, 30, 'Rajapur', 'রাজাপুর', 'rajapur.jhalakathi.gov.bd'),
(234, 31, 'Bauphal', 'বাউফল', 'bauphal.patuakhali.gov.bd'),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', 'sadar.patuakhali.gov.bd'),
(236, 31, 'Dumki', 'দুমকি', 'dumki.patuakhali.gov.bd'),
(237, 31, 'Dashmina', 'দশমিনা', 'dashmina.patuakhali.gov.bd'),
(238, 31, 'Kalapara', 'কলাপাড়া', 'kalapara.patuakhali.gov.bd'),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', 'mirzaganj.patuakhali.gov.bd'),
(240, 31, 'Galachipa', 'গলাচিপা', 'galachipa.patuakhali.gov.bd'),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', 'rangabali.patuakhali.gov.bd'),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', 'sadar.pirojpur.gov.bd'),
(243, 32, 'Nazirpur', 'নাজিরপুর', 'nazirpur.pirojpur.gov.bd'),
(244, 32, 'Kawkhali', 'কাউখালী', 'kawkhali.pirojpur.gov.bd'),
(245, 32, 'Zianagar', 'জিয়ানগর', 'zianagar.pirojpur.gov.bd'),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', 'bhandaria.pirojpur.gov.bd'),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', 'mathbaria.pirojpur.gov.bd'),
(248, 32, 'Nesarabad', 'নেছারাবাদ', 'nesarabad.pirojpur.gov.bd'),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', 'barisalsadar.barisal.gov.bd'),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', 'bakerganj.barisal.gov.bd'),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', 'babuganj.barisal.gov.bd'),
(252, 33, 'Wazirpur', 'উজিরপুর', 'wazirpur.barisal.gov.bd'),
(253, 33, 'Banaripara', 'বানারীপাড়া', 'banaripara.barisal.gov.bd'),
(254, 33, 'Gournadi', 'গৌরনদী', 'gournadi.barisal.gov.bd'),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', 'agailjhara.barisal.gov.bd'),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', 'mehendiganj.barisal.gov.bd'),
(257, 33, 'Muladi', 'মুলাদী', 'muladi.barisal.gov.bd'),
(258, 33, 'Hizla', 'হিজলা', 'hizla.barisal.gov.bd'),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', 'sadar.bhola.gov.bd'),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', 'borhanuddin.bhola.gov.bd'),
(261, 34, 'Charfesson', 'চরফ্যাশন', 'charfesson.bhola.gov.bd'),
(262, 34, 'Doulatkhan', 'দৌলতখান', 'doulatkhan.bhola.gov.bd'),
(263, 34, 'Monpura', 'মনপুরা', 'monpura.bhola.gov.bd'),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', 'tazumuddin.bhola.gov.bd'),
(265, 34, 'Lalmohan', 'লালমোহন', 'lalmohan.bhola.gov.bd'),
(266, 35, 'Amtali', 'আমতলী', 'amtali.barguna.gov.bd'),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', 'sadar.barguna.gov.bd'),
(268, 35, 'Betagi', 'বেতাগী', 'betagi.barguna.gov.bd'),
(269, 35, 'Bamna', 'বামনা', 'bamna.barguna.gov.bd'),
(270, 35, 'Pathorghata', 'পাথরঘাটা', 'pathorghata.barguna.gov.bd'),
(271, 35, 'Taltali', 'তালতলি', 'taltali.barguna.gov.bd'),
(272, 36, 'Balaganj', 'বালাগঞ্জ', 'balaganj.sylhet.gov.bd'),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', 'beanibazar.sylhet.gov.bd'),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', 'bishwanath.sylhet.gov.bd'),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', 'companiganj.sylhet.gov.bd'),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', 'fenchuganj.sylhet.gov.bd'),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', 'golapganj.sylhet.gov.bd'),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', 'gowainghat.sylhet.gov.bd'),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', 'jaintiapur.sylhet.gov.bd'),
(280, 36, 'Kanaighat', 'কানাইঘাট', 'kanaighat.sylhet.gov.bd'),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', 'sylhetsadar.sylhet.gov.bd'),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', 'zakiganj.sylhet.gov.bd'),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', 'dakshinsurma.sylhet.gov.bd'),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', 'osmaninagar.sylhet.gov.bd'),
(285, 37, 'Barlekha', 'বড়লেখা', 'barlekha.moulvibazar.gov.bd'),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', 'kamolganj.moulvibazar.gov.bd'),
(287, 37, 'Kulaura', 'কুলাউড়া', 'kulaura.moulvibazar.gov.bd'),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', 'moulvibazarsadar.moulvibazar.gov.bd'),
(289, 37, 'Rajnagar', 'রাজনগর', 'rajnagar.moulvibazar.gov.bd'),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', 'sreemangal.moulvibazar.gov.bd'),
(291, 37, 'Juri', 'জুড়ী', 'juri.moulvibazar.gov.bd'),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', 'nabiganj.habiganj.gov.bd'),
(293, 38, 'Bahubal', 'বাহুবল', 'bahubal.habiganj.gov.bd'),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', 'ajmiriganj.habiganj.gov.bd'),
(295, 38, 'Baniachong', 'বানিয়াচং', 'baniachong.habiganj.gov.bd'),
(296, 38, 'Lakhai', 'লাখাই', 'lakhai.habiganj.gov.bd'),
(297, 38, 'Chunarughat', 'চুনারুঘাট', 'chunarughat.habiganj.gov.bd'),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', 'habiganjsadar.habiganj.gov.bd'),
(299, 38, 'Madhabpur', 'মাধবপুর', 'madhabpur.habiganj.gov.bd'),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', 'sadar.sunamganj.gov.bd'),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', 'southsunamganj.sunamganj.gov.bd'),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', 'bishwambarpur.sunamganj.gov.bd'),
(303, 39, 'Chhatak', 'ছাতক', 'chhatak.sunamganj.gov.bd'),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', 'jagannathpur.sunamganj.gov.bd'),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', 'dowarabazar.sunamganj.gov.bd'),
(306, 39, 'Tahirpur', 'তাহিরপুর', 'tahirpur.sunamganj.gov.bd'),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', 'dharmapasha.sunamganj.gov.bd'),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', 'jamalganj.sunamganj.gov.bd'),
(309, 39, 'Shalla', 'শাল্লা', 'shalla.sunamganj.gov.bd'),
(310, 39, 'Derai', 'দিরাই', 'derai.sunamganj.gov.bd'),
(311, 53, 'Belabo', 'বেলাবো', 'belabo.narsingdi.gov.bd'),
(312, 53, 'Monohardi', 'মনোহরদী', 'monohardi.narsingdi.gov.bd'),
(313, 53, 'Narsingdi Sadar', 'নরসিংদী সদর', 'narsingdisadar.narsingdi.gov.bd'),
(314, 53, 'Palash', 'পলাশ', 'palash.narsingdi.gov.bd'),
(315, 53, 'Raipura', 'রায়পুরা', 'raipura.narsingdi.gov.bd'),
(316, 53, 'Shibpur', 'শিবপুর', 'shibpur.narsingdi.gov.bd'),
(317, 54, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.gazipur.gov.bd'),
(318, 54, 'Kaliakair', 'কালিয়াকৈর', 'kaliakair.gazipur.gov.bd'),
(319, 54, 'Kapasia', 'কাপাসিয়া', 'kapasia.gazipur.gov.bd'),
(320, 54, 'Gazipur Sadar', 'গাজীপুর সদর', 'sadar.gazipur.gov.bd'),
(321, 54, 'Sreepur', 'শ্রীপুর', 'sreepur.gazipur.gov.bd'),
(322, 55, 'Shariatpur Sadar', 'শরিয়তপুর সদর', 'sadar.shariatpur.gov.bd'),
(323, 55, 'Naria', 'নড়িয়া', 'naria.shariatpur.gov.bd'),
(324, 55, 'Zajira', 'জাজিরা', 'zajira.shariatpur.gov.bd'),
(325, 55, 'Gosairhat', 'গোসাইরহাট', 'gosairhat.shariatpur.gov.bd'),
(326, 55, 'Bhedarganj', 'ভেদরগঞ্জ', 'bhedarganj.shariatpur.gov.bd'),
(327, 55, 'Damudya', 'ডামুড্যা', 'damudya.shariatpur.gov.bd'),
(328, 56, 'Araihazar', 'আড়াইহাজার', 'araihazar.narayanganj.gov.bd'),
(329, 56, 'Bandar', 'বন্দর', 'bandar.narayanganj.gov.bd'),
(330, 56, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', 'narayanganjsadar.narayanganj.gov.bd'),
(331, 56, 'Rupganj', 'রূপগঞ্জ', 'rupganj.narayanganj.gov.bd'),
(332, 56, 'Sonargaon', 'সোনারগাঁ', 'sonargaon.narayanganj.gov.bd'),
(333, 57, 'Basail', 'বাসাইল', 'basail.tangail.gov.bd'),
(334, 57, 'Bhuapur', 'ভুয়াপুর', 'bhuapur.tangail.gov.bd'),
(335, 57, 'Delduar', 'দেলদুয়ার', 'delduar.tangail.gov.bd'),
(336, 57, 'Ghatail', 'ঘাটাইল', 'ghatail.tangail.gov.bd'),
(337, 57, 'Gopalpur', 'গোপালপুর', 'gopalpur.tangail.gov.bd'),
(338, 57, 'Madhupur', 'মধুপুর', 'madhupur.tangail.gov.bd'),
(339, 57, 'Mirzapur', 'মির্জাপুর', 'mirzapur.tangail.gov.bd'),
(340, 57, 'Nagarpur', 'নাগরপুর', 'nagarpur.tangail.gov.bd'),
(341, 57, 'Sakhipur', 'সখিপুর', 'sakhipur.tangail.gov.bd'),
(342, 57, 'Tangail Sadar', 'টাঙ্গাইল সদর', 'tangailsadar.tangail.gov.bd'),
(343, 57, 'Kalihati', 'কালিহাতী', 'kalihati.tangail.gov.bd'),
(344, 57, 'Dhanbari', 'ধনবাড়ী', 'dhanbari.tangail.gov.bd'),
(345, 58, 'Itna', 'ইটনা', 'itna.kishoreganj.gov.bd'),
(346, 58, 'Katiadi', 'কটিয়াদী', 'katiadi.kishoreganj.gov.bd'),
(347, 58, 'Bhairab', 'ভৈরব', 'bhairab.kishoreganj.gov.bd'),
(348, 58, 'Tarail', 'তাড়াইল', 'tarail.kishoreganj.gov.bd'),
(349, 58, 'Hossainpur', 'হোসেনপুর', 'hossainpur.kishoreganj.gov.bd'),
(350, 58, 'Pakundia', 'পাকুন্দিয়া', 'pakundia.kishoreganj.gov.bd'),
(351, 58, 'Kuliarchar', 'কুলিয়ারচর', 'kuliarchar.kishoreganj.gov.bd'),
(352, 58, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', 'kishoreganjsadar.kishoreganj.gov.bd'),
(353, 58, 'Karimgonj', 'করিমগঞ্জ', 'karimgonj.kishoreganj.gov.bd'),
(354, 58, 'Bajitpur', 'বাজিতপুর', 'bajitpur.kishoreganj.gov.bd'),
(355, 58, 'Austagram', 'অষ্টগ্রাম', 'austagram.kishoreganj.gov.bd'),
(356, 58, 'Mithamoin', 'মিঠামইন', 'mithamoin.kishoreganj.gov.bd'),
(357, 58, 'Nikli', 'নিকলী', 'nikli.kishoreganj.gov.bd'),
(358, 59, 'Harirampur', 'হরিরামপুর', 'harirampur.manikganj.gov.bd'),
(359, 59, 'Saturia', 'সাটুরিয়া', 'saturia.manikganj.gov.bd'),
(360, 59, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', 'sadar.manikganj.gov.bd'),
(361, 59, 'Gior', 'ঘিওর', 'gior.manikganj.gov.bd'),
(362, 59, 'Shibaloy', 'শিবালয়', 'shibaloy.manikganj.gov.bd'),
(363, 59, 'Doulatpur', 'দৌলতপুর', 'doulatpur.manikganj.gov.bd'),
(364, 59, 'Singiar', 'সিংগাইর', 'singiar.manikganj.gov.bd'),
(365, 52, 'Savar', 'সাভার', 'savar.dhaka.gov.bd'),
(366, 52, 'Dhamrai', 'ধামরাই', 'dhamrai.dhaka.gov.bd'),
(367, 52, 'Keraniganj', 'কেরাণীগঞ্জ', 'keraniganj.dhaka.gov.bd'),
(368, 52, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dhaka.gov.bd'),
(369, 52, 'Dohar', 'দোহার', 'dohar.dhaka.gov.bd'),
(370, 60, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', 'sadar.munshiganj.gov.bd'),
(371, 60, 'Sreenagar', 'শ্রীনগর', 'sreenagar.munshiganj.gov.bd'),
(372, 60, 'Sirajdikhan', 'সিরাজদিখান', 'sirajdikhan.munshiganj.gov.bd'),
(373, 60, 'Louhajanj', 'লৌহজং', 'louhajanj.munshiganj.gov.bd'),
(374, 60, 'Gajaria', 'গজারিয়া', 'gajaria.munshiganj.gov.bd'),
(375, 60, 'Tongibari', 'টংগীবাড়ি', 'tongibari.munshiganj.gov.bd'),
(376, 61, 'Rajbari Sadar', 'রাজবাড়ী সদর', 'sadar.rajbari.gov.bd'),
(377, 61, 'Goalanda', 'গোয়ালন্দ', 'goalanda.rajbari.gov.bd'),
(378, 61, 'Pangsa', 'পাংশা', 'pangsa.rajbari.gov.bd'),
(379, 61, 'Baliakandi', 'বালিয়াকান্দি', 'baliakandi.rajbari.gov.bd'),
(380, 61, 'Kalukhali', 'কালুখালী', 'kalukhali.rajbari.gov.bd'),
(381, 62, 'Madaripur Sadar', 'মাদারীপুর সদর', 'sadar.madaripur.gov.bd'),
(382, 62, 'Shibchar', 'শিবচর', 'shibchar.madaripur.gov.bd'),
(383, 62, 'Kalkini', 'কালকিনি', 'kalkini.madaripur.gov.bd'),
(384, 62, 'Rajoir', 'রাজৈর', 'rajoir.madaripur.gov.bd'),
(385, 64, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', 'sadar.gopalganj.gov.bd'),
(386, 64, 'Kashiani', 'কাশিয়ানী', 'kashiani.gopalganj.gov.bd'),
(387, 64, 'Tungipara', 'টুংগীপাড়া', 'tungipara.gopalganj.gov.bd'),
(388, 64, 'Kotalipara', 'কোটালীপাড়া', 'kotalipara.gopalganj.gov.bd'),
(389, 64, 'Muksudpur', 'মুকসুদপুর', 'muksudpur.gopalganj.gov.bd'),
(390, 63, 'Faridpur Sadar', 'ফরিদপুর সদর', 'sadar.faridpur.gov.bd'),
(391, 63, 'Alfadanga', 'আলফাডাঙ্গা', 'alfadanga.faridpur.gov.bd'),
(392, 63, 'Boalmari', 'বোয়ালমারী', 'boalmari.faridpur.gov.bd'),
(393, 63, 'Sadarpur', 'সদরপুর', 'sadarpur.faridpur.gov.bd'),
(394, 63, 'Nagarkanda', 'নগরকান্দা', 'nagarkanda.faridpur.gov.bd'),
(395, 63, 'Bhanga', 'ভাঙ্গা', 'bhanga.faridpur.gov.bd'),
(396, 63, 'Charbhadrasan', 'চরভদ্রাসন', 'charbhadrasan.faridpur.gov.bd'),
(397, 63, 'Madhukhali', 'মধুখালী', 'madhukhali.faridpur.gov.bd'),
(398, 63, 'Saltha', 'সালথা', 'saltha.faridpur.gov.bd'),
(399, 40, 'Panchagarh Sadar', 'পঞ্চগড় সদর', 'panchagarhsadar.panchagarh.gov.bd'),
(400, 40, 'Debiganj', 'দেবীগঞ্জ', 'debiganj.panchagarh.gov.bd'),
(401, 40, 'Boda', 'বোদা', 'boda.panchagarh.gov.bd'),
(402, 40, 'Atwari', 'আটোয়ারী', 'atwari.panchagarh.gov.bd'),
(403, 40, 'Tetulia', 'তেতুলিয়া', 'tetulia.panchagarh.gov.bd'),
(404, 41, 'Nawabganj', 'নবাবগঞ্জ', 'nawabganj.dinajpur.gov.bd'),
(405, 41, 'Birganj', 'বীরগঞ্জ', 'birganj.dinajpur.gov.bd'),
(406, 41, 'Ghoraghat', 'ঘোড়াঘাট', 'ghoraghat.dinajpur.gov.bd'),
(407, 41, 'Birampur', 'বিরামপুর', 'birampur.dinajpur.gov.bd'),
(408, 41, 'Parbatipur', 'পার্বতীপুর', 'parbatipur.dinajpur.gov.bd'),
(409, 41, 'Bochaganj', 'বোচাগঞ্জ', 'bochaganj.dinajpur.gov.bd'),
(410, 41, 'Kaharol', 'কাহারোল', 'kaharol.dinajpur.gov.bd'),
(411, 41, 'Fulbari', 'ফুলবাড়ী', 'fulbari.dinajpur.gov.bd'),
(412, 41, 'Dinajpur Sadar', 'দিনাজপুর সদর', 'dinajpursadar.dinajpur.gov.bd'),
(413, 41, 'Hakimpur', 'হাকিমপুর', 'hakimpur.dinajpur.gov.bd'),
(414, 41, 'Khansama', 'খানসামা', 'khansama.dinajpur.gov.bd'),
(415, 41, 'Birol', 'বিরল', 'birol.dinajpur.gov.bd'),
(416, 41, 'Chirirbandar', 'চিরিরবন্দর', 'chirirbandar.dinajpur.gov.bd'),
(417, 42, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', 'sadar.lalmonirhat.gov.bd'),
(418, 42, 'Kaliganj', 'কালীগঞ্জ', 'kaliganj.lalmonirhat.gov.bd'),
(419, 42, 'Hatibandha', 'হাতীবান্ধা', 'hatibandha.lalmonirhat.gov.bd'),
(420, 42, 'Patgram', 'পাটগ্রাম', 'patgram.lalmonirhat.gov.bd'),
(421, 42, 'Aditmari', 'আদিতমারী', 'aditmari.lalmonirhat.gov.bd'),
(422, 43, 'Syedpur', 'সৈয়দপুর', 'syedpur.nilphamari.gov.bd'),
(423, 43, 'Domar', 'ডোমার', 'domar.nilphamari.gov.bd'),
(424, 43, 'Dimla', 'ডিমলা', 'dimla.nilphamari.gov.bd'),
(425, 43, 'Jaldhaka', 'জলঢাকা', 'jaldhaka.nilphamari.gov.bd'),
(426, 43, 'Kishorganj', 'কিশোরগঞ্জ', 'kishorganj.nilphamari.gov.bd'),
(427, 43, 'Nilphamari Sadar', 'নীলফামারী সদর', 'nilphamarisadar.nilphamari.gov.bd'),
(428, 44, 'Sadullapur', 'সাদুল্লাপুর', 'sadullapur.gaibandha.gov.bd'),
(429, 44, 'Gaibandha Sadar', 'গাইবান্ধা সদর', 'gaibandhasadar.gaibandha.gov.bd'),
(430, 44, 'Palashbari', 'পলাশবাড়ী', 'palashbari.gaibandha.gov.bd'),
(431, 44, 'Saghata', 'সাঘাটা', 'saghata.gaibandha.gov.bd'),
(432, 44, 'Gobindaganj', 'গোবিন্দগঞ্জ', 'gobindaganj.gaibandha.gov.bd'),
(433, 44, 'Sundarganj', 'সুন্দরগঞ্জ', 'sundarganj.gaibandha.gov.bd'),
(434, 44, 'Phulchari', 'ফুলছড়ি', 'phulchari.gaibandha.gov.bd'),
(435, 45, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', 'thakurgaonsadar.thakurgaon.gov.bd'),
(436, 45, 'Pirganj', 'পীরগঞ্জ', 'pirganj.thakurgaon.gov.bd'),
(437, 45, 'Ranisankail', 'রাণীশংকৈল', 'ranisankail.thakurgaon.gov.bd'),
(438, 45, 'Haripur', 'হরিপুর', 'haripur.thakurgaon.gov.bd'),
(439, 45, 'Baliadangi', 'বালিয়াডাঙ্গী', 'baliadangi.thakurgaon.gov.bd'),
(440, 46, 'Rangpur Sadar', 'রংপুর সদর', 'rangpursadar.rangpur.gov.bd'),
(441, 46, 'Gangachara', 'গংগাচড়া', 'gangachara.rangpur.gov.bd'),
(442, 46, 'Taragonj', 'তারাগঞ্জ', 'taragonj.rangpur.gov.bd'),
(443, 46, 'Badargonj', 'বদরগঞ্জ', 'badargonj.rangpur.gov.bd'),
(444, 46, 'Mithapukur', 'মিঠাপুকুর', 'mithapukur.rangpur.gov.bd'),
(445, 46, 'Pirgonj', 'পীরগঞ্জ', 'pirgonj.rangpur.gov.bd'),
(446, 46, 'Kaunia', 'কাউনিয়া', 'kaunia.rangpur.gov.bd'),
(447, 46, 'Pirgacha', 'পীরগাছা', 'pirgacha.rangpur.gov.bd'),
(448, 47, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', 'kurigramsadar.kurigram.gov.bd'),
(449, 47, 'Nageshwari', 'নাগেশ্বরী', 'nageshwari.kurigram.gov.bd'),
(450, 47, 'Bhurungamari', 'ভুরুঙ্গামারী', 'bhurungamari.kurigram.gov.bd'),
(451, 47, 'Phulbari', 'ফুলবাড়ী', 'phulbari.kurigram.gov.bd'),
(452, 47, 'Rajarhat', 'রাজারহাট', 'rajarhat.kurigram.gov.bd'),
(453, 47, 'Ulipur', 'উলিপুর', 'ulipur.kurigram.gov.bd'),
(454, 47, 'Chilmari', 'চিলমারী', 'chilmari.kurigram.gov.bd'),
(455, 47, 'Rowmari', 'রৌমারী', 'rowmari.kurigram.gov.bd'),
(456, 47, 'Charrajibpur', 'চর রাজিবপুর', 'charrajibpur.kurigram.gov.bd'),
(457, 49, 'Sherpur Sadar', 'শেরপুর সদর', 'sherpursadar.sherpur.gov.bd'),
(458, 49, 'Nalitabari', 'নালিতাবাড়ী', 'nalitabari.sherpur.gov.bd'),
(459, 49, 'Sreebordi', 'শ্রীবরদী', 'sreebordi.sherpur.gov.bd'),
(460, 49, 'Nokla', 'নকলা', 'nokla.sherpur.gov.bd'),
(461, 49, 'Jhenaigati', 'ঝিনাইগাতী', 'jhenaigati.sherpur.gov.bd'),
(462, 50, 'Fulbaria', 'ফুলবাড়ীয়া', 'fulbaria.mymensingh.gov.bd'),
(463, 50, 'Trishal', 'ত্রিশাল', 'trishal.mymensingh.gov.bd'),
(464, 50, 'Bhaluka', 'ভালুকা', 'bhaluka.mymensingh.gov.bd'),
(465, 50, 'Muktagacha', 'মুক্তাগাছা', 'muktagacha.mymensingh.gov.bd'),
(466, 50, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', 'mymensinghsadar.mymensingh.gov.bd'),
(467, 50, 'Dhobaura', 'ধোবাউড়া', 'dhobaura.mymensingh.gov.bd'),
(468, 50, 'Phulpur', 'ফুলপুর', 'phulpur.mymensingh.gov.bd'),
(469, 50, 'Haluaghat', 'হালুয়াঘাট', 'haluaghat.mymensingh.gov.bd'),
(470, 50, 'Gouripur', 'গৌরীপুর', 'gouripur.mymensingh.gov.bd'),
(471, 50, 'Gafargaon', 'গফরগাঁও', 'gafargaon.mymensingh.gov.bd'),
(472, 50, 'Iswarganj', 'ঈশ্বরগঞ্জ', 'iswarganj.mymensingh.gov.bd'),
(473, 50, 'Nandail', 'নান্দাইল', 'nandail.mymensingh.gov.bd'),
(474, 50, 'Tarakanda', 'তারাকান্দা', 'tarakanda.mymensingh.gov.bd'),
(475, 47, 'Jamalpur Sadar', 'জামালপুর সদর', 'jamalpursadar.jamalpur.gov.bd'),
(476, 47, 'Melandah', 'মেলান্দহ', 'melandah.jamalpur.gov.bd'),
(477, 47, 'Islampur', 'ইসলামপুর', 'islampur.jamalpur.gov.bd'),
(478, 47, 'Dewangonj', 'দেওয়ানগঞ্জ', 'dewangonj.jamalpur.gov.bd'),
(479, 47, 'Sarishabari', 'সরিষাবাড়ী', 'sarishabari.jamalpur.gov.bd'),
(480, 47, 'Madarganj', 'মাদারগঞ্জ', 'madarganj.jamalpur.gov.bd'),
(481, 47, 'Bokshiganj', 'বকশীগঞ্জ', 'bokshiganj.jamalpur.gov.bd'),
(482, 0, 'Barhatta', 'বারহাট্টা', 'barhatta.netrokona.gov.bd'),
(483, 0, 'Durgapur', 'দুর্গাপুর', 'durgapur.netrokona.gov.bd'),
(484, 51, 'Kendua', 'কেন্দুয়া', 'kendua.netrokona.gov.bd'),
(485, 51, 'Atpara', 'আটপাড়া', 'atpara.netrokona.gov.bd'),
(486, 51, 'Madan', 'মদন', 'madan.netrokona.gov.bd'),
(487, 51, 'Khaliajuri', 'খালিয়াজুরী', 'khaliajuri.netrokona.gov.bd'),
(488, 51, 'Kalmakanda', 'কলমাকান্দা', 'kalmakanda.netrokona.gov.bd'),
(489, 51, 'Mohongonj', 'মোহনগঞ্জ', 'mohongonj.netrokona.gov.bd'),
(490, 51, 'Purbadhala', 'পূর্বধলা', 'purbadhala.netrokona.gov.bd'),
(491, 51, 'Netrokona Sadar', 'নেত্রকোণা সদর', 'netrokonasadar.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` tinyint(3) UNSIGNED NOT NULL DEFAULT 3 COMMENT '1=>Admin, 2=>Vendor,3=>User,4=>Guest User',
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profile_image` varchar(256) DEFAULT NULL,
  `points` bigint(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `username`, `phone`, `email`, `address`, `profile_image`, `points`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, 'Guest User', 'guest-user', '01601020304', 'guestuser@gmail.com', 'Dhaka', 'upload/user/1663045118avatar5.png', NULL, NULL, '$2y$10$iy93F5hZNH/zmluBuHBm5.1.hUsNJVR5PauM4Nu4Dg0rt5dBhoODK', 1, NULL, '2022-07-30 03:25:27', '2024-02-07 00:52:10'),
(4, 1, 'Admin', 'admin', '017010407080', 'admin@gmail.com', 'Dhaka', '202208201411avatar5.png', NULL, NULL, '$2y$10$QWe/zCSh7lEyvSnf7z1j0Ol47J5eBPP81KiaK2BjLQaYKrzh3XsQm', 1, NULL, '2022-08-12 23:46:40', '2024-04-02 08:15:07'),
(23, 2, 'Test Vendor', 'Test-Vendor-YhB9T', '01900201040', 'testvendor@gmail.com', 'Dhaka', NULL, NULL, NULL, '$2y$10$idvPLWfdLMIiUEfOH96QFeSTgcDBGhza3j2pK8L1oACN3/xf9NeMS', 1, NULL, '2023-01-31 02:06:35', '2024-03-09 12:05:04'),
(24, 3, 'sunny', 'sadekchowdhury', '01799382934', 'sadek@gmail.com', NULL, NULL, 0, NULL, '$2y$10$B752HQnLWRvP9zPOk6gETOpUQfjLsCQGrhkipPyg25dhRQ0j2vLZe', 1, NULL, '2023-10-17 01:45:30', '2024-02-07 04:46:05'),
(25, 3, 'Sadek', NULL, '01620132642', 'i.ahmed0730@gmail.com', 'Dhaka', 'uploads/users/1827921300.jpg', NULL, NULL, '$2y$10$0p30SP76VnnPYlwKgMIj9uKKplvzshIdXlv8Ekx5XDW.zRdeoeR9m', 1, NULL, '2024-02-05 02:51:52', '2024-02-05 02:51:52'),
(26, 3, 'Abdul khalid Mubasshar Chawdhury', NULL, '01330170890', 's1@gmail.com', 'Dhaka', 'uploads/users/849378541.jpg', 420, NULL, '$2y$10$q8sGmsA1NkTjxrydBIy5GeHyub61SGb/8MH4ZtbxHJ6LYf.pDHHye', 1, NULL, '2024-02-05 02:55:24', '2024-03-09 09:52:25'),
(27, 3, 'Imran', 'a1', '01620132644', 'admin@yahool.com', NULL, NULL, NULL, NULL, '$2y$10$1EVqOm84bFBc2Eb.PBMXWOKhhrw/kfIy3KamKMqsOV5.8VD0SyOaO', 1, NULL, '2024-02-14 07:58:58', '2024-02-14 07:58:58'),
(28, 3, 'apon', 'apon', '01730170899', 'A@a.com', NULL, NULL, NULL, NULL, '$2y$10$bijSkCXpo8mZOTUM5VrYvuXkoRiOjn/nRX37YgHXfSYRxBPwlDRa.', 1, NULL, '2024-02-14 08:00:29', '2024-02-14 08:00:29'),
(29, 2, 'dgjh', 'dgjh-8qRPl', '01620132644', 's1678@gmail.com', 'dfh', NULL, NULL, NULL, '$2y$10$G93xSDdahuuYKZg.b8xH3OQ023Unn.VZN9dlmUFhRC1kFVNJH.FDm', 0, NULL, '2024-03-14 10:58:36', '2024-03-14 10:58:36'),
(30, 2, 'fyhkjfxd', 'jgfjgf-Jgimf', '01330174869', 'admin5686@gmail.com', 'Dhaka', NULL, NULL, NULL, '$2y$10$/O2D63P.IwjwhcTvw1y5NevNrK.L5CpxcRwO9tZ9ii734NnIvscFy', 0, NULL, '2024-03-14 11:03:46', '2024-03-14 11:03:46'),
(31, 2, 'fyhkjfxd', 'jgfjgf-t51bv', '01330174869', 'admin5456@gmail.com', 'Dhaka', NULL, NULL, NULL, '$2y$10$sHizHvYg5FkyhrHr2bVIxe02ydFqGXU30Lktu5tua2Oksr4ZA1Nce', 0, NULL, '2024-03-14 11:07:31', '2024-03-14 11:07:31'),
(32, 3, 'senchal', '1', '1', 'qjcmhbpjdh.qh@monochord.xyz', NULL, NULL, NULL, NULL, '$2y$10$YdvhxKlfLUkQAvfQeTkryuzcWDXj3qQkgLMpolgVp5xcd9YouI32y', 1, NULL, '2024-03-24 22:16:08', '2024-03-24 22:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(5, 'senchal', 'qjcmhbpjdh.qp@monochord.xyz', 'senchal fahrenkrug', 'senchal fahrenkrug', '2024-03-24 22:16:09', '2024-03-24 22:16:09'),
(6, 'Josephine Baker', 'josephine.baker@yahoo.com', 'josephine.baker@yahoo.com', 'Hi,\r\n\r\nWant thousands of clients? We have compiled a list of all consumers and business\'s across 149 countries for you.\r\n\r\nWe have a special that is running today and valid till the end of the day. Come check us out:\r\n\r\nhttps://rashop-bd.leadsmax.biz/\r\n\r\nConsumer Records: 294,582,351\r\nBusiness Records: 25,215,278\r\n\r\nSelling at $99 today only.', '2024-03-25 20:15:47', '2024-03-25 20:15:47'),
(7, 'Maynard Van De Velde', 'maynard.vandevelde@gmail.com', 'maynard.vandevelde@gmail.com', '4/15/24 is the deadline to claim the SETC for your 2020 amended tax return. Today is 3/7/2024. \r\nIndividuals can still claim their Self-Employed Tax Credit (SETC), worth up to $32,220, under the FFCRA. Here is everything you need to know.\r\nThe Self-Employed Tax Credit (SETC) refers to the sick leave and family leave tax credit provisions for self-employed individuals introduced under the FFCRA. The SETC allows qualified self-employed workers to recover up to $32,220 for 2019, 2020, and 2021.\r\nDon’t miss your COVID tax credit: \r\nCall Kerry at 480-790-9186\r\nEmail Kerry at processing@taxcreditfunder.com\r\nOr watch the explanation here: https://taxcreditfunder.com/en/', '2024-03-26 08:09:31', '2024-03-26 08:09:31'),
(8, 'Phil Stewart', 'noreplyhere@aol.com', 'noreplyhere@aol.com', 'Hey, looking to boost your ad game? Picture your message hitting website contact forms worldwide, grabbing attention from potential customers everywhere! Starting at just under a hundred bucks my budget-friendly packages are designed to make an impact. Drop me an email now to discuss how you can get more leads and sales now!\r\n\r\nPhil Stewart\r\nEmail: ts56bg@mail-to-form.xyz\r\nSkype: form-blasting', '2024-03-26 21:01:17', '2024-03-26 21:01:17'),
(9, 'krisopher', 'qtccthbjjj.qp@monochord.xyz', 'krisopher blacksher', 'krisopher blacksher', '2024-03-28 03:21:53', '2024-03-28 03:21:53'),
(10, 'Jill Dennys', 'dennys.jill91@msn.com', 'dennys.jill91@msn.com', 'We transform your 5 Star Reviews into SEO videos that rank high on Google when people search for your Online Reputation. The best part? It\'s free! Claim your free video now: http://freerepvids-learnmore.info', '2024-03-28 12:00:17', '2024-03-28 12:00:17'),
(11, 'Neville Parson', 'neville.parson@gmail.com', 'neville.parson@gmail.com', 'Are you okay running your business without much funds? This could slow down growth and delay returns on your business.\r\n\r\nNow you have the Opportunity to Fund your Busineses and Projects without stress and without the burden of repayment as our interest in first for the growth of your business and projects, and for your to arrive at your desired business goals and dreams.\r\n\r\nTake advantage of our Funding opportunity and get funded on your business and Projects within days and have an ample number of years/Loan Term Period which gives you time to grow and achieve your business goals.\r\n\r\nGive us a call on:\r\n+852 3008 8373, \r\nor write us at:\r\ninfo@capitalfund-hk.com', '2024-03-28 12:49:47', '2024-03-28 12:49:47'),
(12, 'Odell Vigil', 'vigil.odell@yahoo.com', 'vigil.odell@yahoo.com', 'Get Found On The First Page of Google in Less Than 2 weeks by Using our Priority Stealth S.E.O. Syndication Method.\r\n\r\nPay us once and you\'ll get Organic Search Engine Results using videos that will continue to drive traffic 24/7 year round!\r\n \r\nThe Benefits are incredible - since by paying us once there will be:\r\n\r\n- No Additional Ad spend needed!\r\n\r\n- No Additional Costs for Ad copy!\r\n\r\n- No Additional Costs per Clicks!\r\n\r\n- No Commercial Licensing fees ever!\r\n\r\nGet Started Today and Get Seen Tomorrow!\r\n\r\nLearn More: Reviews2Videos.com', '2024-03-29 21:27:54', '2024-03-29 21:27:54'),
(13, 'Hilton Pritt', 'hilton.pritt@hotmail.com', 'hilton.pritt@hotmail.com', 'Worried about your business cash flow and being able to make payroll? I can help, reply to me below and I\'ll show you how\r\n\r\nElizabeth Miller\r\nWorking Capital Loan Specialist\r\n295 Seven Farms Drive\r\nSuite C- 201\r\nCharleston, SC 29492\r\nwww.HelloRatesFastFunding.com\r\nelizabeth.miller@helloratesfastfunding.com', '2024-03-30 03:29:25', '2024-03-30 03:29:25'),
(14, 'Garrett Strub', 'garrett.strub@yahoo.com', 'garrett.strub@yahoo.com', 'Worried about your business cash flow and being able to make payroll? I can help, reply to me below and I\'ll show you how\r\n\r\nElizabeth Miller\r\nWorking Capital Loan Specialist\r\n295 Seven Farms Drive\r\nSuite C- 201\r\nCharleston, SC 29492\r\nwww.HelloRatesFastFunding.com\r\nelizabeth.miller@helloratesfastfunding.com', '2024-03-30 16:49:29', '2024-03-30 16:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `shop_owner_name` varchar(255) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `fb_url` varchar(100) DEFAULT NULL,
  `bank_account` varchar(80) DEFAULT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `holder_name` varchar(100) DEFAULT NULL,
  `branch_name` varchar(50) DEFAULT NULL,
  `routing_name` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `commission` varchar(50) DEFAULT NULL,
  `comission_type` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `shop_profile` varchar(255) DEFAULT NULL,
  `shop_cover` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `trade_license` varchar(255) DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 1 COMMENT '1=>Active, 0=>Inactive',
  `is_request` int(11) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `user_id`, `shop_name`, `shop_owner_name`, `slug`, `fb_url`, `bank_account`, `bank_name`, `holder_name`, `branch_name`, `routing_name`, `address`, `balance`, `commission`, `comission_type`, `description`, `shop_profile`, `shop_cover`, `nid`, `trade_license`, `status`, `is_request`, `created_by`, `created_at`, `updated_at`) VALUES
(8, 23, 'Test Vendor', NULL, 'Test-Vendor-YhB9T', NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', '0.00', '5', NULL, 'Test Vendor', 'upload/vendor/1756524595993381.jpg', 'upload/vendor/1756524597899285.jpg', '', '', 1, 0, 4, NULL, '2024-03-17 09:05:33'),
(9, 31, 'jgfjgf', 'fyhkjfxd', 'jgfjgf-t51bv', NULL, NULL, NULL, NULL, NULL, NULL, 'Dhaka', '0.00', NULL, NULL, NULL, 'upload/vendor/1793499543789396.jpg', 'upload/vendor/1793499543860339.jpg', '', '', 0, 1, 0, '2024-03-14 11:07:31', '2024-03-14 11:07:31');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_comissions`
--

CREATE TABLE `vendor_comissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `vendor_id` bigint(20) NOT NULL,
  `vendor_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `admin_commission` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payments`
--

CREATE TABLE `vendor_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `description` varchar(191) DEFAULT NULL,
  `withdrawal_request_id` int(11) DEFAULT NULL,
  `payment_date` varchar(191) NOT NULL,
  `payment_method` int(11) DEFAULT NULL,
  `month` int(11) NOT NULL,
  `year` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_transactions`
--

CREATE TABLE `vendor_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `add_amount` decimal(10,2) DEFAULT NULL,
  `deduct_amount` decimal(10,2) DEFAULT NULL,
  `invoice_no` varchar(255) DEFAULT NULL,
  `withdraw_amount` decimal(10,2) DEFAULT NULL,
  `withdraw_request_id` int(11) DEFAULT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=>add_amount, 2=>withdraw_amount, 3 => deduct_amount',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_transactions`
--

INSERT INTO `vendor_transactions` (`id`, `vendor_id`, `add_amount`, `deduct_amount`, `invoice_no`, `withdraw_amount`, `withdraw_request_id`, `month`, `year`, `status`, `created_at`, `updated_at`) VALUES
(49, 8, '5.00', NULL, '0000032', NULL, NULL, 3, 2024, 1, '2024-03-17 06:33:56', '2024-03-17 06:33:56'),
(50, 8, NULL, '5.00', '0000032', NULL, NULL, 3, 2024, 3, '2024-03-17 09:05:33', '2024-03-17 09:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_requests`
--

CREATE TABLE `withdraw_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `date` varchar(191) NOT NULL,
  `month` int(11) NOT NULL,
  `year` bigint(20) NOT NULL,
  `payment_method` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=>Pending, 1=>Approved',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_heads`
--
ALTER TABLE `account_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_ledgers`
--
ALTER TABLE `account_ledgers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_ledgers_account_head_id_foreign` (`account_head_id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_product_product_id_foreign` (`product_id`),
  ADD KEY `attribute_product_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `attribute_value_product_price`
--
ALTER TABLE `attribute_value_product_price`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_value_product_price_product_price_id_foreign` (`product_price_id`),
  ADD KEY `attribute_value_product_price_attribute_value_id_foreign` (`attribute_value_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaings`
--
ALTER TABLE `campaings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaing_products`
--
ALTER TABLE `campaing_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaing_products_campaing_id_foreign` (`campaing_id`);

--
-- Indexes for table `carms`
--
ALTER TABLE `carms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_models`
--
ALTER TABLE `car_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `group_products`
--
ALTER TABLE `group_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_prices_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_stocks_product_id_foreign` (`product_id`);

--
-- Indexes for table `returning_products`
--
ALTER TABLE `returning_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_requests`
--
ALTER TABLE `return_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `value` (`value`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staff_user_id_foreign` (`user_id`),
  ADD KEY `staff_role_id_foreign` (`role_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `suppliers_phone_unique` (`phone`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazillas`
--
ALTER TABLE `upazillas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_comissions`
--
ALTER TABLE `vendor_comissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_transactions`
--
ALTER TABLE `vendor_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_heads`
--
ALTER TABLE `account_heads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `account_ledgers`
--
ALTER TABLE `account_ledgers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `attribute_product`
--
ALTER TABLE `attribute_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `attribute_value_product_price`
--
ALTER TABLE `attribute_value_product_price`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `campaings`
--
ALTER TABLE `campaings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `campaing_products`
--
ALTER TABLE `campaing_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `carms`
--
ALTER TABLE `carms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_models`
--
ALTER TABLE `car_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_products`
--
ALTER TABLE `group_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `product_prices`
--
ALTER TABLE `product_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `returning_products`
--
ALTER TABLE `returning_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `return_requests`
--
ALTER TABLE `return_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upazillas`
--
ALTER TABLE `upazillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vendor_comissions`
--
ALTER TABLE `vendor_comissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `vendor_payments`
--
ALTER TABLE `vendor_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `vendor_transactions`
--
ALTER TABLE `vendor_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `withdraw_requests`
--
ALTER TABLE `withdraw_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_ledgers`
--
ALTER TABLE `account_ledgers`
  ADD CONSTRAINT `account_ledgers_account_head_id_foreign` FOREIGN KEY (`account_head_id`) REFERENCES `account_heads` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD CONSTRAINT `attribute_product_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_value_product_price`
--
ALTER TABLE `attribute_value_product_price`
  ADD CONSTRAINT `attribute_value_product_price_attribute_value_id_foreign` FOREIGN KEY (`attribute_value_id`) REFERENCES `attribute_values` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_value_product_price_product_price_id_foreign` FOREIGN KEY (`product_price_id`) REFERENCES `product_prices` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `campaing_products`
--
ALTER TABLE `campaing_products`
  ADD CONSTRAINT `campaing_products_campaing_id_foreign` FOREIGN KEY (`campaing_id`) REFERENCES `campaings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD CONSTRAINT `product_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD CONSTRAINT `product_stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staff_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
