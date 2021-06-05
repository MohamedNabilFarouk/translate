-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 10:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `category_name` varchar(150) NOT NULL,
  `category_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `parent_id`, `category_name`, `category_image`) VALUES
(34, NULL, 'a:2:{s:2:\"ar\";s:35:\"الاجهزه الكهربائيه\";s:2:\"en\";s:16:\"Electric Machine\";}', NULL),
(36, 36, 'a:2:{s:2:\"ar\";s:10:\"شاومى\";s:2:\"en\";s:6:\"Xiaomi\";}', NULL),
(38, NULL, 'a:2:{s:2:\"ar\";s:14:\"الهواتف\";s:2:\"en\";s:7:\"Mobiles\";}', NULL),
(39, 38, 'a:2:{s:2:\"ar\";s:7:\"samsung\";s:2:\"en\";s:7:\"samsung\";}', NULL),
(40, 39, 'a:2:{s:2:\"ar\";s:3:\"a70\";s:2:\"en\";s:3:\"a70\";}', NULL),
(41, 38, 'a:2:{s:2:\"ar\";s:5:\"nokia\";s:2:\"en\";s:5:\"nokia\";}', NULL),
(42, 41, 'a:2:{s:2:\"ar\";s:4:\"n200\";s:2:\"en\";s:4:\"n200\";}', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_tint` varchar(50) NOT NULL,
  `color_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`, `color_tint`, `color_code`) VALUES
(12, 'a:2:{s:2:\"ar\";s:8:\"ابيض\";s:2:\"en\";s:5:\"white\";}', '#ffffff', 'MF7wfNvVaU9iWkaJ'),
(13, 'a:2:{s:2:\"ar\";s:8:\"اسود\";s:2:\"en\";s:5:\"Black\";}', '#000000', 'cGBuMqWj98DlrldH'),
(14, 'a:2:{s:2:\"ar\";s:8:\"اصفر\";s:2:\"en\";s:6:\"Yellow\";}', '#ffff00', 'fthXp82ZTuiLBeL8'),
(15, 'a:2:{s:2:\"ar\";s:8:\"اخضر\";s:2:\"en\";s:5:\"Green\";}', '#00ff00', 'eFm7nQVPIozPBHIM');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `des` text DEFAULT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `des`, `price`, `created_at`, `updated_at`) VALUES
(1, 'package 1', 'des of package 1', 300, '2021-01-07 22:56:45', '2021-01-07 22:56:45'),
(2, 'package 2', 'des of packa 2', 200, '2021-01-07 22:56:45', '2021-01-07 22:56:45'),
(3, 'a:2:{s:2:\"ar\";s:4:\"test\";s:2:\"en\";s:11:\"testtsttsts\";}', 'a:2:{s:2:\"ar\";s:12:\"تفاصيل\";s:2:\"en\";s:34:\"asdasd a sdas d asd asd as das das\";}', 500, '2021-01-07 21:35:16', '2021-01-07 21:35:16'),
(4, 'a:2:{s:2:\"ar\";s:4:\"test\";s:2:\"en\";s:11:\"testtsttsts\";}', 'a:2:{s:2:\"ar\";s:12:\"تفاصيل\";s:2:\"en\";s:34:\"asdasd a sdas d asd asd as das das\";}', 500, '2021-01-07 21:39:51', '2021-01-07 21:39:51'),
(5, 'a:2:{s:2:\"ar\";s:9:\"asdasdasd\";s:2:\"en\";s:9:\"asdasdasd\";}', 'a:2:{s:2:\"ar\";s:8:\"asdasdas\";s:2:\"en\";s:9:\"asdasdasd\";}', 900, '2021-01-07 21:42:55', '2021-01-07 21:42:55'),
(6, 'a:2:{s:2:\"ar\";s:9:\"asdasdasd\";s:2:\"en\";s:9:\"asdasdasd\";}', 'a:2:{s:2:\"ar\";s:8:\"asdasdas\";s:2:\"en\";s:9:\"asdasdasd\";}', 900, '2021-01-07 21:43:24', '2021-01-07 21:43:24'),
(7, 'a:2:{s:2:\"ar\";s:9:\"asdasdasd\";s:2:\"en\";s:9:\"asdasdasd\";}', 'a:2:{s:2:\"ar\";s:8:\"asdasdas\";s:2:\"en\";s:9:\"asdasdasd\";}', 900, '2021-01-07 21:44:53', '2021-01-07 21:44:53'),
(8, 'a:2:{s:2:\"ar\";s:9:\"asdasdasd\";s:2:\"en\";s:9:\"asdasdasd\";}', 'a:2:{s:2:\"ar\";s:8:\"asdasdas\";s:2:\"en\";s:9:\"asdasdasd\";}', 900, '2021-01-07 21:49:21', '2021-01-07 21:49:21'),
(9, 'a:2:{s:2:\"ar\";s:5:\"aaaaa\";s:2:\"en\";s:5:\"aaaaa\";}', 'a:2:{s:2:\"ar\";s:5:\"aaaaa\";s:2:\"en\";s:4:\"aaaa\";}', 1000, '2021-01-07 21:50:44', '2021-01-07 21:50:44'),
(10, 'a:2:{s:2:\"ar\";s:8:\"etsttasd\";s:2:\"en\";s:7:\"asdasda\";}', 'a:2:{s:2:\"ar\";s:9:\"asdasdasd\";s:2:\"en\";s:12:\"asdasdasdasd\";}', 200, '2021-01-07 21:52:48', '2021-01-07 21:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `packages_products`
--

CREATE TABLE `packages_products` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages_products`
--

INSERT INTO `packages_products` (`id`, `package_id`, `product_id`) VALUES
(1, 1, 38),
(2, 1, 37),
(3, 8, 27),
(4, 9, 28),
(5, 10, 25),
(6, 10, 26),
(7, 10, 27);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(500) NOT NULL,
  `product_short_details` mediumtext NOT NULL,
  `product_long_details` mediumtext NOT NULL,
  `product_properties` varchar(500) NOT NULL,
  `product_price_before_discount` varchar(11) NOT NULL,
  `product_price_after_discount` varchar(11) DEFAULT NULL,
  `dimensions_for_shipping` varchar(255) NOT NULL,
  `weight_for_shipping` varchar(255) NOT NULL,
  `weight_type` tinyint(4) NOT NULL,
  `meta_tag` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_order` int(11) DEFAULT NULL,
  `product_add_date` date NOT NULL,
  `home` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_short_details`, `product_long_details`, `product_properties`, `product_price_before_discount`, `product_price_after_discount`, `dimensions_for_shipping`, `weight_for_shipping`, `weight_type`, `meta_tag`, `category_id`, `store_id`, `product_quantity`, `product_order`, `product_add_date`, `home`) VALUES
(25, 'a:2:{s:2:\"en\";s:15:\"Washing Machine\";s:2:\"ar\";s:23:\"غساله كريازى\";}', 'a:2:{s:2:\"en\";s:153:\"<p style=\"text-align: left;\">Test short description Test short description Test short description Test short description Test short description&nbsp;</p>\";s:2:\"ar\";s:99:\"<p>اختبار وصف قصير اختبار وصف قصير اختبار وصف قصير&nbsp;</p>\";}', 'a:2:{s:2:\"en\";s:262:\"<p style=\"text-align: left;\">&nbsp;Test long description&nbsp; Test long description&nbsp; Test long description&nbsp; Test long description&nbsp; Test long description&nbsp; Test long description&nbsp; Test long description&nbsp; Test long description&nbsp;</p>\";s:2:\"ar\";s:360:\"<p>اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل&nbsp;</p>\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"MF7wfNvVaU9iWkaJ\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"46480085641_1583113969.png\";}}}}}}', '3000', NULL, '50 * 100 سم', '15', 3, 'اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج', 34, 2, 15, 0, '2020-01-25', '0'),
(26, 'a:2:{s:2:\"en\";s:14:\"Fridge Toshipa\";s:2:\"ar\";s:23:\"ثلاجه توشيبا\";}', 'a:2:{s:2:\"en\";s:153:\"<p style=\"text-align: left;\">Test Short description Test Short description Test Short description Test Short description Test Short description&nbsp;</p>\";s:2:\"ar\";s:186:\"<p>اختبار وصف صغير اختبار وصف صغير اختبار وصف صغير اختبار وصف صغير اختبار وصف صغير اختبار وصف صغير&nbsp;</p>\";}', 'a:2:{s:2:\"en\";s:452:\"<p>Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description Test long description&nbsp;</p>\";s:2:\"ar\";s:447:\"<p>اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل&nbsp;</p>\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:27:\"43307706165_1581199082.jpeg\";}}}}}}', '10000', '90', '25 * 35 * 150', '15', 3, 'اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج', 34, 1, 9, 3, '2020-02-05', '0'),
(27, 'a:2:{s:2:\"en\";s:13:\"Xiaomi Mobile\";s:2:\"ar\";s:23:\"موبايل شاومى\";}', 'a:2:{s:2:\"en\";s:153:\"<p style=\"text-align: left;\">Test short description Test short description Test short description Test short description Test short description&nbsp;</p>\";s:2:\"ar\";s:186:\"<p>اختبار وصف قصير اختبار وصف قصير اختبار وصف قصير اختبار وصف قصير اختبار وصف قصير اختبار وصف قصير&nbsp;</p>\";}', 'a:2:{s:2:\"en\";s:232:\"<p>Test long Description Test long Description Test long Description Test long Description Test long Description Test long Description Test long Description Test long Description Test long Description Test long Description&nbsp;</p>\";s:2:\"ar\";s:360:\"<p>اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل اختبار وصف طويل&nbsp;</p>\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:2:{i:0;s:26:\"49746566633_1581289796.jpg\";i:1;s:26:\"57000753982_1581289833.jpg\";}}}}}}', '1000', '950', '15 * 20 * 100', '15', 1, 'اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج اختبار ميتا تاج', 38, 1, 13, 2, '2020-02-10', '0'),
(28, 'a:2:{s:2:\"en\";s:8:\"asdadasd\";s:2:\"ar\";s:9:\"sadasdasd\";}', 'a:2:{s:2:\"en\";s:23:\"sssssssssssssssssssssss\";s:2:\"ar\";s:37:\"asdasdasdasssssssssssssssssssssssssss\";}', 'a:2:{s:2:\"en\";s:61:\"sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\";s:2:\"ar\";s:70:\"ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"efVmoLzD5H6MyFXQ\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '10', '3', '30*30', '20', 2, 'asdasd', 39, 1, 3, NULL, '2020-11-10', NULL),
(29, 'a:2:{s:2:\"en\";s:9:\"asdasdads\";s:2:\"ar\";s:6:\"asdasd\";}', 'a:2:{s:2:\"en\";s:40:\"asdasdasdasdasdasdasdasdasdasdsadadsadas\";s:2:\"ar\";s:44:\"adasdasdasdsadasdsadsadasasdasdasdasdasdasda\";}', 'a:2:{s:2:\"en\";s:102:\"sadasdasdasdasd asd asd asd asd asd asd asd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";s:2:\"ar\";s:102:\"sadasdasdasdasd asd asd asd asd asd asd asd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '20', '60', '20*30', '50', 1, 'asdasdasd', 41, 1, 2, NULL, '2020-11-10', NULL),
(30, 'a:2:{s:2:\"en\";s:9:\"asdasdads\";s:2:\"ar\";s:6:\"asdasd\";}', 'a:2:{s:2:\"en\";s:40:\"asdasdasdasdasdasdasdasdasdasdsadadsadas\";s:2:\"ar\";s:44:\"adasdasdasdsadasdsadsadasasdasdasdasdasdasda\";}', 'a:2:{s:2:\"en\";s:102:\"sadasdasdasdasd asd asd asd asd asd asd asd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";s:2:\"ar\";s:102:\"sadasdasdasdasd asd asd asd asd asd asd asd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '20', '60', '20*30', '50', 1, 'asdasdasd', 41, 1, 2, NULL, '2020-11-10', NULL),
(31, 'a:2:{s:2:\"en\";s:9:\"asdasdads\";s:2:\"ar\";s:6:\"asdasd\";}', 'a:2:{s:2:\"en\";s:40:\"asdasdasdasdasdasdasdasdasdasdsadadsadas\";s:2:\"ar\";s:44:\"adasdasdasdsadasdsadsadasasdasdasdasdasdasda\";}', 'a:2:{s:2:\"en\";s:117:\"sadasdasdasdasd asd asd asd asd asd asd asd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a dasdasdasdasdasda a\";s:2:\"ar\";s:114:\"sadasdasdasdasd asd asd asd asd asd asd asasdasdasdasdd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '20', '60', '20*30', '50', 1, 'asdasdasd', 41, 1, 2, NULL, '2020-11-10', NULL),
(32, 'a:2:{s:2:\"en\";s:9:\"asdasdads\";s:2:\"ar\";s:6:\"asdasd\";}', 'a:2:{s:2:\"en\";s:40:\"asdasdasdasdasdasdasdasdasdasdsadadsadas\";s:2:\"ar\";s:44:\"adasdasdasdsadasdsadsadasasdasdasdasdasdasda\";}', 'a:2:{s:2:\"en\";s:117:\"sadasdasdasdasd asd asd asd asd asd asd asd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a dasdasdasdasdasda a\";s:2:\"ar\";s:114:\"sadasdasdasdasd asd asd asd asd asd asd asasdasdasdasdd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '20', '60', '20*30', '50', 1, 'asdasdasd', 41, 1, 2, NULL, '2020-11-10', NULL),
(33, 'a:2:{s:2:\"en\";s:11:\"asdasdassad\";s:2:\"ar\";s:10:\"sadasasasd\";}', 'a:2:{s:2:\"en\";s:32:\"asdas1d2as1d5as1d51asd15a15a15sd\";s:2:\"ar\";s:33:\"asdasdasdasdasd14as1d12asd12as12d\";}', 'a:2:{s:2:\"en\";s:114:\"sadasdasdasdasd asd asd asd asd asd asd asasdasdasdasdd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";s:2:\"ar\";s:114:\"sadasdasdasdasd asd asd asd asd asd asd asasdasdasdasdd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '50', '150', '20*20', '30', 2, 'asdasdasd', 39, 1, 30, NULL, '2020-11-10', NULL),
(34, 'a:2:{s:2:\"en\";s:9:\"asdasdasd\";s:2:\"ar\";s:9:\"asdasdasd\";}', 'a:2:{s:2:\"en\";s:33:\"asdasdasdasdasdasdasdasdasdasdasd\";s:2:\"ar\";s:33:\"asdasdasdasdasdasdasdasdasdasdasd\";}', 'a:2:{s:2:\"en\";s:114:\"sadasdasdasdasd asd asd asd asd asd asd asasdasdasdasdd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";s:2:\"ar\";s:114:\"sadasdasdasdasd asd asd asd asd asd asd asasdasdasdasdd asd asd ad asd adasd ada ad ad ad ad ad asd asd ada a da a\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"23656807228_1583601132.jpg\";}}}}}}', '300', '150', '20*30', '20', 2, 'asdasdasdasd', 38, 1, 3, NULL, '2020-11-10', NULL),
(35, 'a:2:{s:2:\"en\";s:9:\"asdasdasd\";s:2:\"ar\";s:6:\"sadasd\";}', 'a:2:{s:2:\"en\";s:28:\"asasdasdasdasdasdadasdasdasd\";s:2:\"ar\";s:32:\"aaaadasdasdasdasdaadsasdasdasdas\";}', 'a:2:{s:2:\"en\";s:88:\"asdas 1d2as1d 1as32 d1as32 d1as32d1 3a21sd a1sd3 12as321d 3a21sd a1s2d 231as d1a3s 21d32\";s:2:\"ar\";s:100:\"asdasdasdasdsadsadaasasdas 1as1d a1 a1sd as dasd as1d a1s2d a1s2d1 asd as1d 2asd 12as1d  as1d2as1 da\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '20', '6', '30*30', '20', 2, 'asdasdasdasdasd', 41, 1, 300, NULL, '2020-11-10', NULL),
(36, 'a:2:{s:2:\"en\";s:8:\"asasssad\";s:2:\"ar\";s:6:\"aasasd\";}', 'a:2:{s:2:\"en\";s:33:\"as dasd asd asd asd asd aas d asd\";s:2:\"ar\";s:30:\"asdasdasdasdasd asdasdaasd asd\";}', 'a:2:{s:2:\"en\";s:109:\"asdassasdas dasd1a5sd1as5d 1a5s1d 2as1d23a1sd 1a21ds 2as12d 1a2s1d 2a1sd2a1s 52das5 da5s1 da1sd 1asd1 2asda2s\";s:2:\"ar\";s:109:\"asdassasdas dasd1a5sd1as5d 1a5s1d 2as1d23a1sd 1a21ds 2as12d 1a2s1d 2a1sd2a1s 52das5 da5s1 da1sd 1asd1 2asda2s\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"efVmoLzD5H6MyFXQ\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '20000', '10000', '20*20', '30', 1, 'sssadasd', 38, 1, 5, NULL, '2020-11-10', NULL),
(37, 'a:2:{s:2:\"en\";s:8:\"asdasasd\";s:2:\"ar\";s:9:\"asdasdasd\";}', 'a:2:{s:2:\"en\";s:29:\"asdasdasdasdasdasdasdasdasdsa\";s:2:\"ar\";s:31:\"sadasdasdasdasdasasdasdasdasasd\";}', 'a:2:{s:2:\"en\";s:109:\"as12d2as1d2as1d 21as2d 1as2 d1as2 das2d asd21asd 12as1d 2as2d 0asd as1d2 as2d asd 2as 12d1as32d1 2as1d 2a1s d\";s:2:\"ar\";s:99:\"as12d1as2d1a2sd1a2s 2a1s da21s d2as1d as21d 2as1d 21asd 21as12d a2s1d 2a1sd 2as1d a2s1 d2as1d 2as1d\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"23656807228_1583601132.jpg\";}}}}}}', '300', '210', '30*30', '30', 1, 'ss', 38, 1, 33, NULL, '2020-11-10', NULL),
(38, 'a:2:{s:2:\"en\";s:9:\"asdasdasd\";s:2:\"ar\";s:9:\"asdasdasd\";}', 'a:2:{s:2:\"en\";s:24:\"as1da1sd1asd1asd1as1das1\";s:2:\"ar\";s:22:\"as1d1asd1as1da1sd1as1d\";}', 'a:2:{s:2:\"en\";s:82:\"asd asd0 as2d0 2asd 02as0d 2as0d 2as0d 2a0s d2a0s d20a2s d2as d20as20 d2as0d 2as d\";s:2:\"ar\";s:93:\"asdasdasdasdasd0asd0a2sd1as52d0 a02ds 0a2sd0 2asd0 a2s0d 2as0d 2a0sd 02asd 02as0d 2a0s2 d2asd\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"22296682915_1583601132.jpg\";}}}}}}', '1000', '500', '30*30', '20', 2, 'ss', 41, 2, 300, NULL, '2020-11-10', 'slide_3'),
(39, 'a:2:{s:2:\"en\";s:12:\"asdasdsaddsa\";s:2:\"ar\";s:11:\"sadasdsadas\";}', 'a:2:{s:2:\"en\";s:62:\"asd adas das15das15d 1as5d 1as1d 5as1d as1d 5as1d5 a1s5d 5as d\";s:2:\"ar\";s:68:\"adasda a sdas das das dasd asd as dasd asd asd a das dasd asd asd as\";}', 'a:2:{s:2:\"en\";s:105:\"as4d5as4d5as4d5as4d as5as4d5a s45das 45as4d 5as4 das4d5sa 4d5asd5 4as5d4as5d 45as4d 5as4d5 as5d a1s2d12as\";s:2:\"ar\";s:105:\"as4d5as4d5as4d5as4d as5as4d5a s45das 45as4d 5as4 das4d5sa 4d5asd5 4as5d4as5d 45as4d 5as4d5 as5d a1s2d12as\";}', 'a:1:{s:6:\"colors\";a:1:{s:16:\"eFm7nQVPIozPBHIM\";a:1:{s:5:\"sizes\";a:1:{s:16:\"9pDp4x1v0jrc4YQ9\";a:1:{s:6:\"medias\";a:1:{i:0;s:26:\"23656807228_1583601132.jpg\";}}}}}}', '300', '150', '30*50', '50', 2, 'sssss2', 38, 1, 10, NULL, '2020-11-11', 'slide_2');

-- --------------------------------------------------------

--
-- Table structure for table `products_medias`
--

CREATE TABLE `products_medias` (
  `media_id` int(11) NOT NULL,
  `media_name` varchar(50) NOT NULL COMMENT 'media file name',
  `media_shop_owner` int(11) NOT NULL COMMENT 'shop that upload this media file',
  `media_date` date NOT NULL COMMENT 'date of upload this media file'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_medias`
--

INSERT INTO `products_medias` (`media_id`, `media_name`, `media_shop_owner`, `media_date`) VALUES
(64, '92173612700_1580938637.jpg', 1, '2020-02-05'),
(107, '43307706165_1581199082.jpeg', 1, '2020-02-08'),
(108, '49746566633_1581289796.jpg', 1, '2020-02-09'),
(109, '57000753982_1581289833.jpg', 1, '2020-02-09'),
(113, '46480085641_1583113969.png', 1, '2020-03-02'),
(114, '23656807228_1583601132.jpg', 1, '2020-03-07'),
(115, '22296682915_1583601132.jpg', 1, '2020-03-07'),
(116, '17537842218_1602009677.jpg', 1, '2020-10-06'),
(117, '97708826885_1605028503.png', 1, '2020-11-10'),
(118, '68165970580_1605031000.png', 1, '2020-11-10'),
(119, '35133541568_1605031248.png', 1, '2020-11-10'),
(120, '81122243122_1605031477.png', 1, '2020-11-10'),
(121, '93960089505_1605031786.png', 1, '2020-11-10'),
(122, '50367532974_1605032055.png', 1, '2020-11-10'),
(123, '56165489008_1605032223.png', 1, '2020-11-10'),
(124, '10255326888_1605032579.png', 1, '2020-11-10'),
(125, '9514176176_1605032811.png', 1, '2020-11-10'),
(126, '2396705916_1605033239.png', 1, '2020-11-10'),
(127, '74809731026_1605033448.png', 1, '2020-11-10'),
(128, '51312551298_1605134968.png', 1, '2020-11-11'),
(129, '81806867829_1605135284.png', 1, '2020-11-11'),
(130, '79965373191_1605135296.png', 1, '2020-11-11'),
(131, '57864283974_1605135724.png', 1, '2020-11-11'),
(132, '46354962189_1609798776.jpg', 1, '2021-01-04'),
(133, '19803615788_1609798927.jpg', 1, '2021-01-04'),
(134, '59392632670_1609799142.jpg', 1, '2021-01-04');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`) VALUES
(1, 'a:2:{s:2:\"ar\";s:6:\"asdasd\";s:2:\"en\";s:6:\"asdasd\";}', 'a:2:{s:2:\"ar\";s:9:\"asdasdasd\";s:2:\"en\";s:9:\"asdasdasd\";}', 'item_XXL_25914704_47021952.jpg'),
(2, 'a:2:{s:2:\"ar\";s:6:\"asdasd\";s:2:\"en\";s:6:\"asdasd\";}', 'a:2:{s:2:\"ar\";s:9:\"asdasdasd\";s:2:\"en\";s:9:\"asdasdasd\";}', 'item_XXL_25914704_47021952.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL,
  `size_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`size_id`, `size_name`, `size_code`) VALUES
(12, 'a:2:{s:2:\"ar\";s:8:\"صغير\";s:2:\"en\";s:2:\"Sm\";}', 'GmPYLpPptlH1DTTv'),
(13, 'a:2:{s:2:\"ar\";s:10:\"متوسط\";s:2:\"en\";s:2:\"Md\";}', 'efVmoLzD5H6MyFXQ'),
(14, 'a:2:{s:2:\"ar\";s:8:\"كبير\";s:2:\"en\";s:2:\"Lg\";}', '9pDp4x1v0jrc4YQ9');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(1, 'front_layout/images/b1.jpg'),
(2, 'front_layout/images/b2.jpg'),
(3, 'front_layout/images/b3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `category_parent` (`parent_id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages_products`
--
ALTER TABLE `packages_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id_01` (`category_id`);

--
-- Indexes for table `products_medias`
--
ALTER TABLE `products_medias`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages_products`
--
ALTER TABLE `packages_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products_medias`
--
ALTER TABLE `products_medias`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `category_parent` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id_01` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
