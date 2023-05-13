-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 01:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reports`
--

CREATE TABLE `admin_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_reports`
--

INSERT INTO `admin_reports` (`id`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'قام المدير المدير العام  بأضافة القسم رجالي', '2022-04-09 13:48:26', '2022-04-09 13:50:26'),
(2, 'قام المدير المدير العام  بأضافة القسم الفرعي عطور', '2022-04-09 14:20:39', '2022-04-09 14:20:39'),
(3, 'قام المدير المدير العام  بتعديل الصلاحية Super Admin', '2022-04-12 12:06:50', '2022-04-12 12:06:50'),
(4, 'قام المدير المدير العام  بتعديل الصلاحية Super Admin', '2022-04-12 23:33:35', '2022-04-12 23:33:35'),
(5, 'قام المدير المدير العام  بأضافة السمة اللون', '2022-04-12 23:35:38', '2022-04-12 23:35:38'),
(6, 'قام المدير المدير العام  بتعديل السمة اللون', '2022-04-12 23:35:49', '2022-04-12 23:35:49'),
(7, 'قام المدير المدير العام  بأضافة الخاصية s', '2022-04-12 23:40:45', '2022-04-12 23:40:45'),
(8, 'قام المدير المدير العام  بتعديل الخاصية S', '2022-04-12 23:41:00', '2022-04-12 23:41:00'),
(9, 'قام المدير المدير العام  بأضافة الخاصية M', '2022-04-12 23:41:15', '2022-04-12 23:41:15'),
(10, 'قام المدير المدير العام  بأضافة الخاصية L', '2022-04-12 23:41:36', '2022-04-12 23:41:36'),
(11, 'قام المدير المدير العام  بأضافة الخاصية XL', '2022-04-12 23:41:50', '2022-04-12 23:41:50'),
(12, 'قام المدير المدير العام  بأضافة الخاصية XXL', '2022-04-12 23:42:02', '2022-04-12 23:42:02'),
(13, 'قام المدير المدير العام  بأضافة الخاصية XXXL', '2022-04-12 23:42:13', '2022-04-12 23:42:13'),
(14, 'قام المدير المدير العام  بأضافة الخاصية أحمر', '2022-04-12 23:42:55', '2022-04-12 23:42:55'),
(15, 'قام المدير المدير العام  بأضافة الخاصية أسود', '2022-04-12 23:43:12', '2022-04-12 23:43:12'),
(16, 'قام المدير المدير العام  بأضافة الخاصية أزرق', '2022-04-12 23:43:35', '2022-04-12 23:43:35'),
(17, 'قام المدير المدير العام  بأضافة المنتج بلاك', '2022-04-13 15:29:54', '2022-04-13 15:29:54'),
(18, 'قام المدير المدير العام  بأضافة المنتج بلاك', '2022-04-13 15:40:54', '2022-04-13 15:40:54'),
(19, 'قام المدير المدير العام  بأضافة المنتج بلاك', '2022-04-13 16:05:41', '2022-04-13 16:05:41'),
(20, 'قام المدير المدير العام  بأضافة المنتج بلو 12', '2022-04-13 16:14:44', '2022-04-13 16:14:44'),
(21, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2022-04-13 16:57:11', '2022-04-13 16:57:11'),
(22, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2022-04-13 17:03:17', '2022-04-13 17:03:17'),
(23, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2022-04-13 17:03:58', '2022-04-13 17:03:58'),
(24, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2022-04-13 17:07:16', '2022-04-13 17:07:16'),
(25, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2022-04-13 17:17:18', '2022-04-13 17:17:18'),
(26, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2020-09-13 17:17:50', '2020-09-13 17:17:50'),
(27, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2020-09-13 19:00:05', '2020-09-13 19:00:05'),
(28, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2020-09-13 19:05:53', '2020-09-13 19:05:53'),
(29, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2020-09-13 19:10:39', '2020-09-13 19:10:39'),
(30, 'قام المدير المدير العام  بأضافة بنك CIB', '2020-09-16 02:01:57', '2020-09-16 02:01:57'),
(31, 'قام المدير المدير العام  بأضافة الدولة السعودية', '2020-09-16 22:37:46', '2020-09-16 22:37:46'),
(32, 'قام المدير المدير العام  بتعديل الدولة المملكة العربية السعودية', '2020-09-16 22:39:08', '2020-09-16 22:39:08'),
(33, 'قام المدير المدير العام  بأضافة الدولة مصر', '2020-09-16 22:39:54', '2020-09-16 22:39:54'),
(34, 'قام المدير المدير العام  بأضافة الدولة يييي', '2020-09-16 22:44:52', '2020-09-16 22:44:52'),
(35, 'قام المدير المدير العام  بحذف الدولة يييي', '2020-09-16 22:48:27', '2020-09-16 22:48:27'),
(36, 'قام المدير المدير العام  بتعديل الصلاحية Super Admin', '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(37, 'قام المدير المدير العام  بتحديث الإعدادات', '2020-10-02 11:54:24', '2020-10-02 11:54:24'),
(38, 'قام المدير المدير العام  بتحديث بيانات مواقع التواصل', '2020-10-02 11:55:19', '2020-10-02 11:55:19'),
(39, 'قام المدير المدير العام  بتحديث الإعدادات', '2020-10-02 11:55:41', '2020-10-02 11:55:41'),
(40, 'قام المدير المدير العام  بأضافة القسم حريمي', '2020-10-02 23:02:53', '2020-10-02 23:02:53'),
(41, 'قام المدير المدير العام  بتعديل الخاصية أحمر', '2020-10-03 14:13:41', '2020-10-03 14:13:41'),
(42, 'قام المدير المدير العام  بتعديل الخاصية أسود', '2020-10-03 14:13:50', '2020-10-03 14:13:50'),
(43, 'قام المدير المدير العام  بتعديل الخاصية أزرق', '2020-10-03 14:14:00', '2020-10-03 14:14:00'),
(44, 'قام المدير المدير العام  بأضافة القسم اطفال', '2020-10-03 15:22:31', '2020-10-03 15:22:31'),
(45, 'قام المدير المدير العام  بتحديث الإعدادات', '2020-10-03 15:30:44', '2020-10-03 15:30:44'),
(46, 'قام المدير المدير العام  بتحديث الإعدادات', '2020-10-03 15:31:11', '2020-10-03 15:31:11'),
(47, 'قام المدير المدير العام  بحذف رسالة من تواصل معنا ', '2020-10-03 16:45:37', '2020-10-03 16:45:37'),
(48, 'قام المدير المدير العام  بحذف رسالة من تواصل معنا ', '2020-10-03 16:46:13', '2020-10-03 16:46:13'),
(49, 'قام المدير المدير العام  بتعديل صفحة الشروط والاحكام', '2020-10-03 19:26:23', '2020-10-03 19:26:23'),
(50, 'قام المدير المدير العام  بتعديل صفحة المساعدة', '2020-10-03 19:26:28', '2020-10-03 19:26:28'),
(51, 'قام المدير المدير العام  بتعديل صفحة عن المتجر', '2020-10-03 19:26:32', '2020-10-03 19:26:32'),
(52, 'قام المدير المدير العام  بتعديل المنتج بلاك', '2020-10-07 01:12:22', '2020-10-07 01:12:22'),
(53, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2020-10-07 01:16:26', '2020-10-07 01:16:26'),
(54, 'قام المدير المدير العام  بتعديل المنتج بلو 12', '2020-10-07 01:16:53', '2020-10-07 01:16:53'),
(55, 'قام المدير المدير العام  بأضافة الكود test10', '2020-10-12 23:30:45', '2020-10-12 23:30:45'),
(56, 'قام المدير المدير العام  بأضافة اعلان', '2022-04-27 14:35:57', '2022-04-27 14:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `iban_number` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`id`, `title_ar`, `title_en`, `image`, `account_name`, `account_number`, `iban_number`, `created_at`, `updated_at`) VALUES
(1, 'CIB', 'CIB', '/public/images/bank_accounts/16-09-201600228916182416959.jpg', '12323253254545', '13213124141245', '5822', '2022-04-16 02:01:56', '2022-04-16 02:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `bank_transfers`
--

CREATE TABLE `bank_transfers` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_transfers`
--

INSERT INTO `bank_transfers` (`id`, `bank_name`, `account_name`, `account_number`, `amount`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'saib', 'ali', '12546848945644', '500', '/public/none.png', '2', '2022-04-16 02:04:54', '2022-04-16 02:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `group_property_id` int(11) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `hex` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `delivery` double DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `service_id`, `group_id`, `group_property_id`, `size`, `color`, `hex`, `user_id`, `count`, `total`, `delivery`, `created_at`, `updated_at`) VALUES
(21, 11, 51, NULL, 'S', 'Blue', '#0000ff', 1, 1, 1200, 100, '2022-04-16 15:19:29', '2022-04-16 18:13:39'),
(22, 10, 43, NULL, 'S', 'Red', '#ff0000', 1, 1, 1000, 0, '2022-04-16 15:19:46', '2022-04-16 18:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `title`, `message`, `seen`, `created_at`, `updated_at`) VALUES
(1, 'omina', 'omnia@info.com', NULL, NULL, 'شكوى ', 1, '2022-04-16 01:48:34', '2022-04-03 16:44:21'),
(4, 'omnnia', 'omnnia67@gmail.com', NULL, NULL, 'test', 1, '2022-04-23 16:46:59', '2022-04-23 16:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title_ar`, `title_en`, `code`, `currency`, `created_at`, `updated_at`) VALUES
(1, ' السعودية', 'Saudi arabic', 966, 'SAR', '2022-04-16 22:37:46', '2022-04-16 22:39:08'),
(2, 'مصر', 'Egypt', 20, 'EG', '2022-04-16 22:39:53', '2022-04-16 22:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(10) UNSIGNED NOT NULL,
  `device_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_lists`
--

CREATE TABLE `mail_lists` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mail_lists`
--

INSERT INTO `mail_lists` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'omnnia67@gmail.com', '2022-04-23 15:18:57', '2022-04-23 15:18:57'),
(2, 'omnnia672@gmail.com', '2022-04-03 15:20:12', '2022-04-03 15:20:12'),
(3, 'omnia@info.com', '2022-04-03 15:20:54', '2022-04-03 15:20:54'),
(4, 'admin@info.com', '2022-04-03 15:21:33', '2022-04-03 15:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_03_23_092946_entrust_setup_tables', 1),
(2, '2022_04_12_000900_create_countries_table', 1),
(3, '2022_04_12_000910_create_cities_table', 1),
(4, '2014_10_12_000920_create_neighborhoods_table', 1),
(5, '2014_10_12_001000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2020_02_10_095308_create_settings_table', 1),
(8, '2020_02_10_101746_create_socials_table', 1),
(9, '2020_02_10_145823_create_admin_reports_table', 1),
(10, '2020_03_04_152050_create_sections_table', 1),
(11, '2020_03_04_152053_create_services_table', 1),
(12, '2020_03_08_105457_create_contacts_table', 1),
(13, '2020_03_08_154000_create_pages_table', 1),
(14, '2020_03_20_005614_create_devices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `neighborhoods`
--

CREATE TABLE `neighborhoods` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message_ar` varchar(255) DEFAULT NULL,
  `message_en` varchar(255) DEFAULT NULL,
  `seen` tinyint(4) DEFAULT 0,
  `type` varchar(50) DEFAULT NULL COMMENT 'notify , order',
  `order_id` int(11) DEFAULT NULL,
  `order_status` varchar(100) DEFAULT NULL COMMENT 'new , agree , refused , in_way , finish',
  `to_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `promo_id` int(11) DEFAULT NULL,
  `promo_discount` varchar(100) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `first_street` varchar(255) DEFAULT NULL,
  `second_street` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `sub_total` double DEFAULT 0,
  `discount` double DEFAULT 0,
  `value_added` double DEFAULT 0,
  `delivery` double DEFAULT 0,
  `total` double DEFAULT 0,
  `payment_done` tinyint(4) DEFAULT 1,
  `payment_method` varchar(100) DEFAULT 'cash' COMMENT 'cash,transfer,online',
  `status` varchar(100) DEFAULT 'new',
  `admin_seen` tinyint(4) DEFAULT 1,
  `user_seen` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `address_id`, `promo_id`, `promo_discount`, `country_id`, `city`, `first_street`, `second_street`, `first_name`, `last_name`, `phone`, `email`, `notes`, `sub_total`, `discount`, `value_added`, `delivery`, `total`, `payment_done`, `payment_method`, `status`, `admin_seen`, `user_seen`, `created_at`, `updated_at`) VALUES
(2, 1, 1, NULL, '0', 1, 'alex', 'elmandara', '12 street', 'test', 'user', '9661232325522', 'lo@gmail.com', NULL, 2000, 0, 0, 0, 2000, 1, 'cash', 'new', 1, 1, '2022-04-17 00:47:50', '2022-04-17 00:47:50'),
(6, 1, 4, NULL, '0', 2, 'alex', 'bitach', 'الشقة رقم 5', 'Delta', NULL, '01248954896', 'admin@info.com', NULL, 6600, 0, 0, 100, 6700, 1, 'online', 'new', 1, 1, '2022-04-16 18:07:18', '2022-04-16 18:07:18'),
(7, 1, 3, 1, '10', 2, 'القاهرة', 'شارع النخلة', 'الشقة رقم 5', 'امنية احمد', NULL, '920115929', 'ahmed@info.com', NULL, 2200, 220, 0, 100, 2080, 1, 'cash', 'new', 1, 1, '2022-04-16 18:17:04', '2022-04-16 18:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `service_title_ar` varchar(255) DEFAULT NULL,
  `service_title_en` varchar(255) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `hex` varchar(255) DEFAULT NULL,
  `count` int(11) DEFAULT 1,
  `total` double DEFAULT 0,
  `delivery` double DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `service_id`, `service_title_ar`, `service_title_en`, `group_id`, `size`, `color`, `hex`, `count`, `total`, `delivery`, `created_at`, `updated_at`) VALUES
(2, 2, 10, 'بلاك', 'Black', 17, 'M', 'Black', NULL, 2, 2000, 0, '2022-04-17 00:47:50', '2022-04-17 00:47:50'),
(5, 6, 11, 'بلو 12', 'Blue 12', 51, 'S', 'Blue', '#0000ff', 3, 3600, 100, '2022-04-16 18:07:19', '2022-04-16 18:07:19'),
(6, 6, 10, 'بلاك', 'Black', 43, 'S', 'Red', '#ff0000', 3, 3000, 0, '2022-04-16 18:07:19', '2022-04-16 18:07:19'),
(7, 7, 11, 'بلو 12', 'Blue 12', 51, 'S', 'Blue', '#0000ff', 1, 1200, 100, '2022-04-16 18:17:04', '2022-04-16 18:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'عن المتجر', 'About us', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.', '2022-04-12 12:05:50', '2022-04-03 19:26:32'),
(2, 'الشروط والاحكام', 'Terms & Conditions', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.', '2022-04-12 12:05:50', '2022-04-03 19:26:23'),
(3, 'المساعدة', 'help', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.', '2022-04-03 19:26:28', '2022-04-03 19:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `role_id`, `created_at`, `updated_at`) VALUES
(191, 'settings', 'settings', 'settings', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(192, 'updatesetting', 'updatesetting', 'updatesetting', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(193, 'updatesocial', 'updatesocial', 'updatesocial', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(194, 'updatelocation', 'updatelocation', 'updatelocation', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(195, 'updateseo', 'updateseo', 'updateseo', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(196, 'permissions', 'permissions', 'permissions', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(197, 'addpagepermission', 'addpagepermission', 'addpagepermission', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(198, 'addpermission', 'addpermission', 'addpermission', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(199, 'editpagepermission', 'editpagepermission', 'editpagepermission', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(200, 'updatepermission', 'updatepermission', 'updatepermission', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(201, 'deletepermission', 'deletepermission', 'deletepermission', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(202, 'admins', 'admins', 'admins', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(203, 'addadmin', 'addadmin', 'addadmin', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(204, 'updateadmin', 'updateadmin', 'updateadmin', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(205, 'deleteadmin', 'deleteadmin', 'deleteadmin', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(206, 'deleteadmins', 'deleteadmins', 'deleteadmins', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(207, 'users', 'users', 'users', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(208, 'adduser', 'adduser', 'adduser', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(209, 'updateuser', 'updateuser', 'updateuser', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(210, 'sendnotifyuser', 'sendnotifyuser', 'sendnotifyuser', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(211, 'deleteuser', 'deleteuser', 'deleteuser', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(212, 'deleteusers', 'deleteusers', 'deleteusers', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(213, 'changestatususer', 'changestatususer', 'changestatususer', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(214, 'pages', 'pages', 'pages', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(215, 'addpage', 'addpage', 'addpage', 1, '2022-04-17 01:03:40', '2022-04-17 01:03:40'),
(216, 'updatepage', 'updatepage', 'updatepage', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(217, 'deletepage', 'deletepage', 'deletepage', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(218, 'deletepages', 'deletepages', 'deletepages', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(219, 'propertys', 'propertys', 'propertys', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(220, 'addproperty', 'addproperty', 'addproperty', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(221, 'updateproperty', 'updateproperty', 'updateproperty', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(222, 'deleteproperty', 'deleteproperty', 'deleteproperty', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(223, 'deletepropertys', 'deletepropertys', 'deletepropertys', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(224, 'property_items', 'property_items', 'property_items', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(225, 'addproperty_item', 'addproperty_item', 'addproperty_item', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(226, 'updateproperty_item', 'updateproperty_item', 'updateproperty_item', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(227, 'deleteproperty_item', 'deleteproperty_item', 'deleteproperty_item', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(228, 'deleteproperty_items', 'deleteproperty_items', 'deleteproperty_items', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(229, 'sections', 'sections', 'sections', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(230, 'addsection', 'addsection', 'addsection', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(231, 'updatesection', 'updatesection', 'updatesection', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(232, 'deletesection', 'deletesection', 'deletesection', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(233, 'deletesections', 'deletesections', 'deletesections', 1, '2020-09-17 01:03:40', '2020-09-17 01:03:40'),
(234, 'sub_sections', 'sub_sections', 'sub_sections', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(235, 'addsub_section', 'addsub_section', 'addsub_section', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(236, 'updatesub_section', 'updatesub_section', 'updatesub_section', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(237, 'deletesub_section', 'deletesub_section', 'deletesub_section', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(238, 'deletesub_sections', 'deletesub_sections', 'deletesub_sections', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(239, 'services', 'services', 'services', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(240, 'newservice', 'newservice', 'newservice', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(241, 'addservice', 'addservice', 'addservice', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(242, 'editservice', 'editservice', 'editservice', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(243, 'updateservice', 'updateservice', 'updateservice', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(244, 'deleteservice', 'deleteservice', 'deleteservice', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(245, 'deleteservices', 'deleteservices', 'deleteservices', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(246, 'orders', 'orders', 'orders', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(247, 'showorder', 'showorder', 'showorder', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(248, 'changeorder', 'changeorder', 'changeorder', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(249, 'countrys', 'countrys', 'countrys', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(250, 'addcountry', 'addcountry', 'addcountry', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(251, 'updatecountry', 'updatecountry', 'updatecountry', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(252, 'deletecountry', 'deletecountry', 'deletecountry', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(253, 'deletecountrys', 'deletecountrys', 'deletecountrys', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(254, 'sliders', 'sliders', 'sliders', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(255, 'addslider', 'addslider', 'addslider', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(256, 'updateslider', 'updateslider', 'updateslider', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(257, 'deleteslider', 'deleteslider', 'deleteslider', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(258, 'deletesliders', 'deletesliders', 'deletesliders', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(259, 'promo_codes', 'promo_codes', 'promo_codes', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(260, 'addpromo_code', 'addpromo_code', 'addpromo_code', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(261, 'updatepromo_code', 'updatepromo_code', 'updatepromo_code', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(262, 'deletepromo_code', 'deletepromo_code', 'deletepromo_code', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(263, 'deletepromo_codes', 'deletepromo_codes', 'deletepromo_codes', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(264, 'bank_accounts', 'bank_accounts', 'bank_accounts', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(265, 'addbank_account', 'addbank_account', 'addbank_account', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(266, 'updatebank_account', 'updatebank_account', 'updatebank_account', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(267, 'deletebank_account', 'deletebank_account', 'deletebank_account', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(268, 'deletebank_accounts', 'deletebank_accounts', 'deletebank_accounts', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(269, 'bank_transfers', 'bank_transfers', 'bank_transfers', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(270, 'deletebank_transfer', 'deletebank_transfer', 'deletebank_transfer', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(271, 'deletebank_transfers', 'deletebank_transfers', 'deletebank_transfers', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(272, 'contacts', 'contacts', 'contacts', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(273, 'deletecontact', 'deletecontact', 'deletecontact', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(274, 'deletecontacts', 'deletecontacts', 'deletecontacts', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(275, 'adminReports', 'adminReports', 'adminReports', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(276, 'deleteadminReport', 'deleteadminReport', 'deleteadminReport', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41'),
(277, 'deleteadminReports', 'deleteadminReports', 'deleteadminReports', 1, '2020-09-17 01:03:41', '2020-09-17 01:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promo_codes`
--

CREATE TABLE `promo_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL COMMENT 'nullable , invalid',
  `type` varchar(100) DEFAULT NULL COMMENT 'all , one_use , more_use',
  `used_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo_codes`
--

INSERT INTO `promo_codes` (`id`, `code`, `discount`, `status`, `type`, `used_by`, `created_at`, `updated_at`) VALUES
(1, 'test10', '10', NULL, 'all', NULL, '2022-04-22 23:30:45', '2022-04-22 23:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(1, 'الحجم', 'size', '2022-04-22 09:40:22', '2022-04-22 09:40:22'),
(2, 'اللون', 'color', '2022-04-22 23:35:38', '2022-04-22 23:35:38');

-- --------------------------------------------------------

--
-- Table structure for table `property_items`
--

CREATE TABLE `property_items` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_items`
--

INSERT INTO `property_items` (`id`, `title_ar`, `title_en`, `color`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 'S', 'S', NULL, 1, '2022-04-22 23:40:45', '2022-04-22 23:40:45'),
(2, 'M', 'M', NULL, 1, '2022-04-22 23:41:15', '2022-04-22 23:41:15'),
(3, 'L', 'L', NULL, 1, '2022-04-22 23:41:36', '2022-04-22 23:41:36'),
(4, 'XL', 'XL', NULL, 1, '2022-04-22 23:41:50', '2022-04-22 23:41:50'),
(5, 'XXL', 'XXL', NULL, 1, '2022-04-22 23:42:02', '2022-04-22 23:42:02'),
(6, 'XXXL', 'XXXL', NULL, 1, '2022-04-22 23:42:13', '2022-04-22 23:42:13'),
(7, 'أحمر', 'Red', '#ff0000', 2, '2022-04-22 23:42:54', '2022-04-23 14:13:41'),
(8, 'أسود', 'Black', '#000000', 2, '2022-04-22 23:43:12', '2022-04-23 14:13:50'),
(9, 'أزرق', 'Blue', '#0000ff', 2, '2022-04-02 23:43:35', '2022-04-23 14:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(1, 'مقاس صغير', 'Small', '2022-04-12 10:11:27', '2022-04-12 10:11:27'),
(2, 'مقاس مناسب', 'True to size', '2022-04-12 10:11:27', '2022-04-12 10:11:27'),
(3, 'مقاس كبير', 'Large', '2022-04-12 10:11:27', '2022-04-12 10:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Super Admin', 'Super Admin', '2022-04-24 15:45:25', '2022-04-24 15:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `title_ar`, `title_en`, `short_desc_ar`, `short_desc_en`, `desc_ar`, `desc_en`, `image`, `created_at`, `updated_at`) VALUES
(1, 'رجالي', 'Male', NULL, NULL, NULL, NULL, '/public/images/sections/09-09-201599666506535837111.png', '2022-04-19 13:48:26', '2022-04-19 13:48:26'),
(2, 'حريمي', 'Women', NULL, NULL, NULL, NULL, '/public/images/sections/03-10-2016016869731475479118.jpg', '2022-04-12 23:02:53', '2022-04-22 23:02:53'),
(3, 'اطفال', 'Kids', NULL, NULL, NULL, NULL, '/public/images/sections/03-10-2016017457511465005999.jpg', '2022-04-23 15:22:31', '2022-04-23 15:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` double DEFAULT 0,
  `delivery` double DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_section_id` int(11) DEFAULT NULL,
  `special` int(11) DEFAULT 0,
  `salled_count` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `short_desc_ar`, `short_desc_en`, `desc_ar`, `desc_en`, `amount`, `price`, `delivery`, `image`, `section_id`, `sub_section_id`, `special`, `salled_count`, `created_at`, `updated_at`) VALUES
(10, 'بلاك', 'Black', 'بلاك اقوى العطور واكثرها ثباتا', 'Black is the strongest and most stable perfume', 'بلاك اقوى العطور واكثرها ثباتا , بلاك اقوى العطور واكثرها ثباتا .', 'Black is the strongest and most stable perfume , Black is the strongest and most stable perfume .', NULL, 1000, 0, NULL, 1, 1, 0, 0, '2022-04-13 16:05:41', '2022-04-17 01:12:22'),
(11, 'بلو 12', 'Blue 12', 'بلو 12 اقوى العطور واكثرها ثباتا', 'Blue 12 is the strongest and most stable perfume', 'بلو 12 اقوى العطور واكثرها ثباتا', 'Blue 12 is the strongest and most stable perfume', NULL, 1200, 100, NULL, 1, 1, 0, 0, '2022-04-13 16:14:44', '2022-04-13 16:14:44');

-- --------------------------------------------------------

--
-- Table structure for table `service_groups`
--

CREATE TABLE `service_groups` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` double DEFAULT 0,
  `buy_count` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_groups`
--

INSERT INTO `service_groups` (`id`, `service_id`, `amount`, `price`, `buy_count`, `created_at`, `updated_at`) VALUES
(40, 10, 10, 1000, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(41, 10, 5, 1000, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(42, 10, 7, 1000, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(43, 10, 5, 1000, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(44, 10, 1, 1000, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(45, 10, 3, 1000, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(49, 11, 11, 1200, NULL, '2022-04-17 01:16:52', '2022-04-17 01:16:52'),
(50, 11, 2, 1200, NULL, '2022-04-17 01:16:52', '2022-04-17 01:16:52'),
(51, 11, 5, 1200, NULL, '2022-04-17 01:16:53', '2022-04-17 01:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `service_group_properties`
--

CREATE TABLE `service_group_properties` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `property_item_id` int(11) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_group_properties`
--

INSERT INTO `service_group_properties` (`id`, `service_id`, `group_id`, `property_id`, `property_item_id`, `value`, `created_at`, `updated_at`) VALUES
(64, 10, 40, 1, 5, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(65, 10, 40, 2, 9, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(66, 10, 41, 1, 2, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(67, 10, 41, 2, 8, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(68, 10, 42, 1, 2, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(69, 10, 42, 2, 9, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(70, 10, 43, 1, 1, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(71, 10, 43, 2, 7, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(72, 10, 44, 1, 1, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(73, 10, 44, 2, 8, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(74, 10, 45, 1, 1, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(75, 10, 45, 2, 9, NULL, '2022-04-17 01:12:22', '2022-04-17 01:12:22'),
(82, 11, 49, 1, 3, NULL, '2022-04-17 01:16:52', '2022-04-17 01:16:52'),
(83, 11, 49, 2, 7, NULL, '2022-04-17 01:16:52', '2022-04-17 01:16:52'),
(84, 11, 50, 1, 1, NULL, '2022-04-17 01:16:53', '2022-04-17 01:16:53'),
(85, 11, 50, 2, 7, NULL, '2022-04-17 01:16:53', '2022-04-17 01:16:53'),
(86, 11, 51, 1, 1, NULL, '2022-04-17 01:16:53', '2022-04-17 01:16:53'),
(87, 11, 51, 2, 9, NULL, '2022-04-17 01:16:53', '2022-04-17 01:16:53');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `service_id`, `image`, `created_at`, `updated_at`) VALUES
(10, 10, '/public/images/services/13-09-2016000203411945801535.jpg', '2022-04-13 16:05:41', '2022-04-13 16:05:41'),
(11, 11, '/public/images/services/13-09-201600020884908121831.jpg', '2022-04-13 16:14:44', '2022-04-13 16:14:44'),
(16, 11, '/public/images/services/07-10-2016020406121097442393.jpg', '2022-04-17 01:16:52', '2022-04-17 01:16:52'),
(17, 11, '/public/images/services/07-10-2016020406121120858136.jpg', '2022-04-17 01:16:52', '2022-04-17 01:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_likes`
--

CREATE TABLE `service_likes` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_likes`
--

INSERT INTO `service_likes` (`id`, `service_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 10, 1, '2022-04-16 01:47:29', '2022-04-16 01:47:29'),
(10, 10, 10, '2022-04-17 01:06:02', '2022-04-17 01:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_reviews`
--

CREATE TABLE `service_reviews` (
  `id` int(11) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `review_id` int(11) DEFAULT NULL,
  `review_title` varchar(255) DEFAULT NULL,
  `rate` double DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_reviews`
--

INSERT INTO `service_reviews` (`id`, `service_id`, `user_id`, `review_id`, `review_title`, `rate`, `created_at`, `updated_at`) VALUES
(1, 10, 1, 1, NULL, 5, '2022-04-15 03:25:36', '2022-04-15 03:25:36'),
(2, 10, 1, 1, NULL, 5, '2022-04-16 01:47:13', '2022-04-16 01:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'ecommerce', '2022-04-24 15:45:25', '2022-04-24 15:45:25'),
(2, 'site_logo', '/public/site_logo.png', '2022-04-24 15:45:25', '2022-04-24 15:45:25'),
(3, 'email', 'example@example.com', '2022-04-12 12:04:14', '2022-04-03 15:30:44'),
(4, 'phone', '0123456789', '2022-04-12 12:04:14', '2022-04-03 15:30:44'),
(5, 'facebook', 'www.facebook.com', '2022-04-12 12:04:14', '2022-04-02 11:55:19'),
(6, 'twitter', 'www.twitter.com', '2022-04-12 12:04:14', '2022-04-02 11:55:19'),
(7, 'instagram', NULL, '2022-04-12 12:04:14', '2022-04-12 12:04:14'),
(8, 'snapchat', NULL, '2022-04-12 12:04:14', '2022-04-12 12:04:14'),
(9, 'lat', NULL, '2022-04-12 12:04:14', '2022-04-12 12:04:14'),
(10, 'lng', NULL, '2022-04-12 12:04:14', '2022-04-12 12:04:14'),
(11, 'description', NULL, '2022-04-12 12:04:14', '2022-04-12 12:04:14'),
(12, 'key_words', NULL, '2022-04-12 12:04:14', '2022-04-12 12:04:14'),
(13, 'logo', '/public/images/setting/02-10-2016016469411151253398.png', '2020-09-29 00:01:54', '2020-10-02 11:55:41'),
(14, 'site_desc', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa modi voluptatibus tenetur quam vitae similique, aliquid blanditiis eaque assumenda.', '2022-04-29 00:18:20', '2022-04-03 15:31:11'),
(15, 'google', 'www.google.com', '2022-03-29 00:18:20', '2022-04-02 11:55:19'),
(16, 'behance', 'www.behance.com', '2022-04-29 00:18:20', '2022-04-02 11:55:19'),
(17, 'address', '13 street name , city name , country name', '2022-04-03 15:29:50', '2022-04-03 15:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `url`, `desc_ar`, `desc_en`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, '/public/images/sliders/27-04-221651077357146595554.png', '2022-04-27 14:35:57', '2022-04-27 14:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_sections`
--

CREATE TABLE `sub_sections` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `short_desc_ar` text DEFAULT NULL,
  `short_desc_en` text DEFAULT NULL,
  `desc_ar` text DEFAULT NULL,
  `desc_en` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `section_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sections`
--

INSERT INTO `sub_sections` (`id`, `title_ar`, `title_en`, `short_desc_ar`, `short_desc_en`, `desc_ar`, `desc_en`, `image`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'عطور', 'Perfumes', NULL, NULL, NULL, NULL, '/public/images/sections/09-09-2015996684391728013839.jpg', 1, '2022-04-19 14:20:39', '2022-04-19 14:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `blocked` tinyint(1) DEFAULT 0,
  `compelete` tinyint(1) DEFAULT 1,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lng` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neighborhood_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_code`, `phone`, `email`, `code`, `user_type`, `active`, `blocked`, `compelete`, `avatar`, `lat`, `lng`, `address`, `lang`, `country_id`, `city_id`, `neighborhood_id`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'المدير العام', NULL, NULL, '0541867992', 'admin@info.com', NULL, 'admin', 1, 0, NULL, '/public/user.png', NULL, NULL, 'egypt', 'ar', NULL, NULL, NULL, 1, NULL, '$2y$10$TK1cM0Xf2lD.0y5gsPFbQOhnV3iVyvUNpMfz.a6nBEm8oFXvQzzE2', NULL, '2022-04-24 15:45:25', '2022-04-24 15:45:25'),
(2, 'mony', NULL, '20', '012057785458', 'lovedayar91@gmail.com', '1234', 'client', 1, 0, NULL, '/public/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$TK1cM0Xf2lD.0y5gsPFbQOhnV3iVyvUNpMfz.a6nBEm8oFXvQzzE2', NULL, '2022-04-13 09:47:36', '2022-04-13 19:17:30'),
(10, 'nabil', 'mahmoud', NULL, '0102526452', 'nabil101@info.com', '1234', NULL, 1, 0, 1, '/public/images/users/08-10-201602188596374419721.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$TK1cM0Xf2lD.0y5gsPFbQOhnV3iVyvUNpMfz.a6nBEm8oFXvQzzE2', NULL, '2022-04-13 17:13:06', '2022-04-18 18:30:12'),
(11, 'omnia', NULL, '20', '01025082821', 'omnia67@gmail.com', '1234', 'client', 1, 0, NULL, '/public/user.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$TK1cM0Xf2lD.0y5gsPFbQOhnV3iVyvUNpMfz.a6nBEm8oFXvQzzE2', NULL, '2022-04-12 09:47:36', '2022-04-13 19:17:30');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `country_id` int(11) UNSIGNED DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `first_street` varchar(255) DEFAULT NULL,
  `second_street` varchar(255) DEFAULT NULL,
  `phone_code` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `first_name`, `last_name`, `country_id`, `city`, `first_street`, `second_street`, `phone_code`, `phone`, `email`, `notes`, `created_at`, `updated_at`) VALUES
(3, 1, 'omnia', NULL, 2, 'alex', 'mandara', '5th ', '02', '01025082821', 'omnia@info.com', NULL, '2022-04-18 17:32:16', '2022-04-18 17:32:16'),
(4, 1, 'Delta', NULL, 2, 'cairo', 'mohandseen', '6th malek', '02', '01205729272', 'admin@info.com', NULL, '2022-04-18 17:56:22', '2022-04-18 17:56:22'),
(5, 1, 'Delta2', 'second', 2, 'cairo', 'ma3adi', 'thakanat 55', '02', '012544694', 'admin@info.com', NULL, '2022-04-18 17:56:38', '2022-04-18 17:57:53'),
(7, 10, 'nabil', 'mahmoud', 2, 'cairo', 'st', 'sec st', '02', '0123456789', 'nabil@info.com', NULL, '2022-04-18 18:31:22', '2022-04-18 18:31:22'),
(8, 1, 'test', 'user', 2, 'alex', 'alex', '12 street', '02', '0123654789', 'lo@gmail.com', NULL, '2022-04-12 23:46:34', '2022-04-12 23:46:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reports`
--
ALTER TABLE `admin_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_transfers`
--
ALTER TABLE `bank_transfers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `devices_user_id_foreign` (`user_id`);

--
-- Indexes for table `mail_lists`
--
ALTER TABLE `mail_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `neighborhoods_country_id_foreign` (`country_id`),
  ADD KEY `neighborhoods_city_id_foreign` (`city_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_items`
--
ALTER TABLE `property_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_section_id_foreign` (`section_id`),
  ADD KEY `sub_section_id` (`sub_section_id`);

--
-- Indexes for table `service_groups`
--
ALTER TABLE `service_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `service_group_properties`
--
ALTER TABLE `service_group_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `property_item_id` (`property_item_id`),
  ADD KEY `service_group_properties_ibfk_2` (`property_id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `service_likes`
--
ALTER TABLE `service_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `service_reviews`
--
ALTER TABLE `service_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_id` (`review_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sections`
--
ALTER TABLE `sub_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `section_id` (`section_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `country_id` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reports`
--
ALTER TABLE `admin_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_transfers`
--
ALTER TABLE `bank_transfers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_lists`
--
ALTER TABLE `mail_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `neighborhoods`
--
ALTER TABLE `neighborhoods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT for table `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_items`
--
ALTER TABLE `property_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service_groups`
--
ALTER TABLE `service_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `service_group_properties`
--
ALTER TABLE `service_group_properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_likes`
--
ALTER TABLE `service_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_reviews`
--
ALTER TABLE `service_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sections`
--
ALTER TABLE `sub_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `service_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `carts_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `devices`
--
ALTER TABLE `devices`
  ADD CONSTRAINT `devices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD CONSTRAINT `neighborhoods_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `neighborhoods_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `property_items`
--
ALTER TABLE `property_items`
  ADD CONSTRAINT `property_items_ibfk_1` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`sub_section_id`) REFERENCES `sub_sections` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `services_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `service_groups`
--
ALTER TABLE `service_groups`
  ADD CONSTRAINT `service_groups_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `service_group_properties`
--
ALTER TABLE `service_group_properties`
  ADD CONSTRAINT `service_group_properties_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `service_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_group_properties_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_group_properties_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_group_properties_ibfk_4` FOREIGN KEY (`property_item_id`) REFERENCES `property_items` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `service_images`
--
ALTER TABLE `service_images`
  ADD CONSTRAINT `service_images_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `service_likes`
--
ALTER TABLE `service_likes`
  ADD CONSTRAINT `service_likes_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `service_reviews`
--
ALTER TABLE `service_reviews`
  ADD CONSTRAINT `service_reviews_ibfk_1` FOREIGN KEY (`review_id`) REFERENCES `reviews` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_reviews_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sub_sections`
--
ALTER TABLE `sub_sections`
  ADD CONSTRAINT `sub_sections_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_addresses_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
