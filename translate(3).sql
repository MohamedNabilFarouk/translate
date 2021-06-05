-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2021 at 07:25 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `translate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 'cairo', '100', NULL, NULL),
(2, 'alex', '150', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documentaries`
--

CREATE TABLE `documentaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` int(11) NOT NULL,
  `appointment` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documentaries`
--

INSERT INTO `documentaries` (`id`, `name`, `email`, `phone`, `office`, `appointment`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '0123366656', 2, 3, '2021-05-09 13:32:38', '2021-05-09 13:32:38');

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `extra_copy_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `from_to`, `price`, `extra_copy_price`, `created_at`, `updated_at`) VALUES
(1, 'english - arabic', '100', '75', NULL, '2021-05-09 05:50:48'),
(2, 'english - French', '300', '250', NULL, '2021-05-06 05:19:19');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_04_11_165215_create_translates_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 2),
(5, '2021_04_14_071635_create_sliders_table', 2),
(6, '2021_04_19_064329_create_cities_table', 3),
(7, '2021_04_19_065216_create_languages_table', 4),
(8, '2021_04_25_042215_create_translated_files_table', 5),
(9, '2021_04_27_082611_create_orders_table', 5),
(10, '2021_05_06_053944_create_teams_table', 5),
(11, '2021_05_09_072814_create_offices_table', 6),
(12, '2021_05_09_073239_create_office_appointments_table', 6),
(13, '2021_05_09_130946_create_documentaries_table', 7),
(14, '2021_05_10_100804_create_translated_images_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(2) NOT NULL DEFAULT 0,
  `price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `office`, `address`, `type`, `price`, `created_at`, `updated_at`) VALUES
(2, 'Giza', '5 address', 0, NULL, '2021-05-09 06:18:13', '2021-05-09 07:50:16'),
(3, 'Cairo', NULL, 0, NULL, '2021-05-09 09:17:41', '2021-05-09 09:17:41'),
(4, 'translation test office', NULL, 1, '50', '2021-05-20 14:36:42', '2021-05-20 14:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `office_appointments`
--

CREATE TABLE `office_appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_appointments`
--

INSERT INTO `office_appointments` (`id`, `appointment`, `office_id`, `created_at`, `updated_at`) VALUES
(3, '10 Am :7 Pm', 2, '2021-05-09 08:31:54', '2021-05-09 09:15:20'),
(5, '10 am : 5pm', 3, '2021-05-09 09:18:18', '2021-05-09 09:18:18'),
(6, '1 am : 6 am', 3, '2021-05-09 09:19:58', '2021-05-09 09:19:58'),
(7, '10 pm : 1 am', 2, '2021-05-09 09:20:28', '2021-05-09 09:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_page` int(50) NOT NULL,
  `to_page` int(50) NOT NULL,
  `copy_no` int(50) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deliver_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deliver_phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pickup_office` int(11) DEFAULT NULL,
  `attach_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `file_id`, `from_page`, `to_page`, `copy_no`, `type`, `deliver_address`, `deliver_phone`, `pickup_office`, `attach_code`, `total`, `is_paid`, `created_at`, `updated_at`) VALUES
(1, 'test billy', 'mohamednabilfarouk@gmail.com', '0123366656', '36 amr el sayed', '3', 0, 0, 2, NULL, NULL, NULL, NULL, NULL, '700', 0, '2021-05-10 11:52:16', '2021-05-10 11:52:16'),
(2, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '123456789', '22 nasr city', '1', 1, 5, 6, NULL, NULL, NULL, NULL, NULL, '2350', 0, '2021-05-10 12:51:13', '2021-05-10 12:51:13'),
(3, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '123456789', '36 amr el sayed', '1', 1, 4, 2, NULL, NULL, NULL, NULL, NULL, '700', 0, '2021-05-10 13:05:45', '2021-05-10 13:05:45'),
(4, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '01111748937', '36 amr el sayed', '1', 1, 5, 2, NULL, NULL, NULL, NULL, NULL, '750', 0, '2021-05-25 22:59:54', '2021-05-25 22:59:54'),
(5, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '01111748937', '36 amr el sayed', '1', 1, 5, 1, NULL, NULL, NULL, NULL, NULL, '375', 0, '2021-05-25 23:02:55', '2021-05-25 23:02:55'),
(6, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '01111748937', '36 amr el sayed', '1', 1, 5, 2, NULL, NULL, NULL, NULL, NULL, '750', 0, '2021-05-25 23:14:50', '2021-05-25 23:14:50'),
(7, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '01111748937', '36 amr el sayed', '1', 1, 5, 2, NULL, NULL, NULL, NULL, NULL, '750', 0, '2021-05-25 23:15:07', '2021-05-25 23:15:07'),
(8, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '01111748937', '36 amr el sayed', '1', 1, 5, 2, NULL, NULL, NULL, NULL, NULL, '750', 0, '2021-05-25 23:17:42', '2021-05-25 23:17:42'),
(9, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', '01111748937', NULL, '1', 1, 1, 1, 'pick-up', NULL, NULL, 4, NULL, '125', 0, '2021-05-26 00:27:03', '2021-05-26 00:27:03');

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Translate Your File ', '02.jpg', NULL, NULL),
(2, 'Translate Your File ', '03.jpg', NULL, NULL),
(3, '<p>translation ...</p>', '1618387676-05.jpg', '2021-04-14 06:07:56', '2021-04-14 06:07:56'),
(5, NULL, '1620285958-03.jpg', '2021-05-06 05:25:58', '2021-05-06 05:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `role`, `bio`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Nabil', '1620285165-08.jpg', 'Translator', '<p>Translator for 4 languages</p>', 'dWJOWAV0', '2021-05-06 05:12:45', '2021-05-06 05:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `translated_files`
--

CREATE TABLE `translated_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `mode` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translated_files`
--

INSERT INTO `translated_files` (`id`, `title`, `des`, `code`, `beneficiary_id`, `beneficiary_name`, `phone`, `image`, `file`, `team_id`, `lang_id`, `mode`, `created_at`, `updated_at`) VALUES
(1, 'file 100', 'des', 'bnx968DXaq', '14', 'test translate', NULL, '1620286712-09.jpg', 'test.pdf', 1, NULL, 0, '2021-05-06 05:38:45', '2021-05-10 04:20:17'),
(2, 'test online', 'online mode', 'QdXmzXup2a', '2', NULL, NULL, '1620625720-01.jpg', '1620625721-يوميات شهر 10.xlsx', 1, NULL, 0, '2021-05-10 03:48:41', '2021-05-10 03:48:41'),
(3, 'test on paper', 'on paper', 'OTQ1v0N3Zb', NULL, 'test', '0102288985', '1620625849-04.jpg', '1620625850-MV DISTRIBUTOR.pdf', 1, 1, 1, '2021-05-10 03:50:50', '2021-05-10 04:20:59'),
(6, 'test for images', 'sssss', 'FgYwXN4nKy', NULL, 'omar ahmed', '01222323266', NULL, '1620644154-Program Entries(FINAL).xlsx', 1, 1, 1, '2021-05-10 08:55:54', '2021-05-10 08:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `translated_images`
--

CREATE TABLE `translated_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translated_images`
--

INSERT INTO `translated_images` (`id`, `image`, `file_id`, `created_at`, `updated_at`) VALUES
(1, '1620644154-01.jpg', 6, '2021-05-10 08:55:55', '2021-05-10 08:55:55'),
(2, '1620644155-02.jpg', 6, '2021-05-10 08:55:55', '2021-05-10 08:55:55'),
(3, '1620644155-03.jpg', 6, '2021-05-10 08:55:55', '2021-05-10 08:55:55'),
(4, '1620644155-04.jpg', 6, '2021-05-10 08:55:56', '2021-05-10 08:55:56'),
(19, '1620726318-08.jpg', 3, '2021-05-11 07:45:18', '2021-05-11 07:45:18'),
(20, '1620726775-04.jpg', 2, '2021-05-11 07:52:56', '2021-05-11 07:52:56'),
(21, '1620726789-01.jpg', 1, '2021-05-11 07:53:10', '2021-05-11 07:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `translates`
--

CREATE TABLE `translates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deliver_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deliver_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pickup_office` int(11) DEFAULT NULL,
  `attach_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery` tinyint(2) DEFAULT 0,
  `page_no` int(11) NOT NULL,
  `copy_no` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translated` tinyint(2) NOT NULL DEFAULT 0,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translates`
--

INSERT INTO `translates` (`id`, `name`, `email`, `city`, `phone`, `language`, `type`, `deliver_address`, `deliver_phone`, `pickup_office`, `attach_code`, `file`, `beneficiary_name`, `delivery`, `page_no`, `copy_no`, `note`, `total`, `code`, `translated`, `is_paid`, `status`, `created_at`, `updated_at`) VALUES
(2, 'test', 'test@test20.com', 0, '0102258966', 0, 'english', NULL, NULL, NULL, NULL, 'test.pdf', 'omar', 0, 0, 0, NULL, '', '', 1, 0, 'Waiting', '2021-04-12 11:09:20', '2021-05-23 17:26:31'),
(4, 'billy', 'a@a.com', 0, '0123366656', 0, 'english', NULL, NULL, NULL, NULL, '1618246571-AT21OF0085-arabtech commercial offer MUST Project - rev00.pdf', 'ali', 0, 0, 0, NULL, '', '', 0, 0, NULL, '2021-04-12 14:56:11', '2021-04-12 14:56:11'),
(5, 'test', 'a@a.com', 0, '0102236625', 0, 'arabic', NULL, NULL, NULL, NULL, '1618296566-AT21OF0085-arabtech commercial offer MUST Project - rev00.pdf', 'Ahmed', 0, 0, 0, NULL, '', '', 0, 0, NULL, '2021-04-13 04:49:26', '2021-04-13 04:49:26'),
(6, 'test billy', 'mohamednabilfarouk@gmail.com', 0, '0123366656', 0, 'arabic', NULL, NULL, NULL, NULL, '1618296884-AT21OF0085-arabtech commercial offer MUST Project - rev00.pdf', 'ali', 0, 0, 0, 'test', '', '', 0, 0, NULL, '2021-04-13 04:54:44', '2021-04-13 04:54:44'),
(7, 'billy', 'mohamednabilfarouk@gmail.com', 1, '0123366656', 1, '1', NULL, NULL, NULL, NULL, '1618816844-AT21OF0085-arabtech commercial offer MUST Project - rev00.pdf', 'ali', 0, 5, 0, 'tesad', '', '', 0, 0, NULL, '2021-04-19 05:20:44', '2021-04-19 05:20:44'),
(8, 'BILLKY', 'mohamednabilfarouk@gmail.com', 1, '01022356555', 2, '1', NULL, NULL, NULL, NULL, '1618817099-AT21OF0085-arabtech commercial offer MUST Project - rev00.pdf', 'ali', 0, 2, 0, 'asdasd', '', '', 0, 0, NULL, '2021-04-19 05:24:59', '2021-04-19 05:24:59'),
(9, 'test', 'mohamednabilfarouk@gmail.com', 1, '01022356555', 2, '1', NULL, NULL, NULL, NULL, '1618817233-AT21OF0085-arabtech commercial offer MUST Project - rev00.pdf', 'ali', 1, 2, 0, 'asdasd', '', '', 0, 0, NULL, '2021-04-19 05:27:13', '2021-04-19 05:27:13'),
(10, 'test', 'mohamednabilfarouk@gmail.com', 1, '0123366656', 2, '1', NULL, NULL, NULL, NULL, '1618818034-MV DISTRIBUTOR.pdf', 'ali', 1, 2, 0, NULL, '', '', 0, 0, NULL, '2021-04-19 05:40:35', '2021-04-19 05:40:35'),
(11, 'BILLKY', 'Admin@tarnslate.com', 2, '01022356555', 1, '1', NULL, NULL, NULL, NULL, '1618818469-AT21OF0085-arabtech commercial offer MUST Project - rev00.pdf', 'ali', 0, 2, 0, NULL, '', '', 0, 0, NULL, '2021-04-19 05:47:49', '2021-04-19 05:47:49'),
(12, 'test', 'a@a.com', 1, '0102258966', 1, '1', NULL, NULL, NULL, NULL, '1618933480-AT21OF0085-arabtech commercial offer MUST Project - rev00.pdf', 'ali', 0, 2, 2, NULL, '400', '', 0, 0, NULL, '2021-04-20 13:44:40', '2021-04-20 13:44:40'),
(13, 'billy', 'mohamednabilfarouk@gmail.com', 1, '0123366656', 1, '1', NULL, NULL, NULL, NULL, '1618981166-MV DISTRIBUTOR.pdf', 'ali', 1, 2, 2, NULL, '500', '', 0, 0, NULL, '2021-04-21 02:59:26', '2021-04-21 02:59:26'),
(14, 'BILLKY', 'mohamednabilfarouk2000@gmail.com', 1, '0123366656', 1, '1', NULL, NULL, NULL, NULL, '1620286498-Program Entries(FINAL).xlsx', 'test translate', 0, 5, 2, NULL, '850', 'n6Bl2EWvpq', 1, 0, 'Translated', '2021-05-06 05:34:58', '2021-05-06 05:34:58'),
(15, 'test pay', 'billy@billy.com', 1, '0102288985', 1, NULL, NULL, NULL, NULL, NULL, '1620823215-06.jpg', 'mahmoud', 1, 2, 3, NULL, '700', '', 0, 0, NULL, '2021-05-12 10:40:15', '2021-05-12 10:40:15'),
(16, 'test pay', 'billy@billy.com', 1, '0102288985', 1, NULL, NULL, NULL, NULL, NULL, '1620823549-06.jpg', 'mahmoud', 1, 2, 2, NULL, '700', '', 0, 0, NULL, '2021-05-12 10:45:49', '2021-05-12 10:45:49'),
(17, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', 1, '0123366656', 1, NULL, NULL, NULL, NULL, NULL, '1620823586-08.jpg', 'mahmoud', 1, 2, 2, NULL, '500', '', 0, 0, NULL, '2021-05-12 10:46:26', '2021-05-12 10:46:26'),
(18, 'ahmed mohamed', 'mohamednabilfarouk@gmail.com', 2, '0102288985', 1, NULL, NULL, NULL, NULL, NULL, '1620823848-08.jpg', 'mahmoud', 1, 5, 5, NULL, '2650', '', 0, 0, NULL, '2021-05-12 10:50:48', '2021-05-12 10:50:48'),
(19, 'ahmed mohamed', 'mohamednabilfarouk@gmail.com', 2, '0102288985', 1, NULL, NULL, NULL, NULL, NULL, '1620824121-08.jpg', 'mahmoud', 1, 5, 5, NULL, '2650', '', 0, 0, NULL, '2021-05-12 10:55:21', '2021-05-12 10:55:21'),
(20, 'ahmed mohamed', 'mohamednabilfarouk@gmail.com', 2, '0102288985', 1, NULL, NULL, NULL, NULL, NULL, '1620824153-08.jpg', 'mahmoud', 1, 5, 5, NULL, '2650', '', 0, 0, 'Paid', '2021-05-12 10:55:53', '2021-05-12 10:55:53'),
(21, 'ahmed mohamed', 'mohamednabilfarouk@gmail.com', 2, '0102288985', 1, NULL, NULL, NULL, NULL, NULL, '1620824258-08.jpg', 'mahmoud', 1, 5, 5, NULL, '2650', '', 0, 0, 'Waiting', '2021-05-12 10:57:38', '2021-05-12 10:57:38'),
(22, 'test new', 'mohamednabilfarouk@gmail.com', 1, '0102288985', 1, 'deliver', '123 st nozha', '01111748937', 4, NULL, '1621481635-07.jpg', 'ahmed', 0, 5, 30, NULL, '11375', '', 0, 0, 'Translating', '2021-05-20 01:33:55', '2021-05-20 01:33:55'),
(23, 'Mohamed Nabil', 'mohamednabilfarouk@gmail.com', 1, '01111748937', 1, 'pick-up', NULL, NULL, 4, NULL, '1621536270-04.jpg', 'ahmed', 0, 1, 1, NULL, '150', '', 0, 0, 'Translated', '2021-05-20 16:44:30', '2021-05-20 16:44:30'),
(24, 'test billy', 'billy@billy.com', 2, '01111748937', 2, 'online', NULL, NULL, 0, NULL, '1621993033-03.jpg', 'ali', 0, 1, 1, NULL, '300', 'XtPSgC5NmF', 0, 0, 'Waiting', '2021-05-25 23:37:13', '2021-05-25 23:37:13'),
(25, 'Mohamed Nabil', 'admin@admin.com', 1, '0102288985', 1, 'online', NULL, NULL, NULL, NULL, '1621993312-04.jpg', 'mahmoud mohamed', 0, 1, 2, NULL, '100', 'SBWPB4cL8B', 0, 0, 'Waiting', '2021-05-25 23:41:52', '2021-05-25 23:41:52'),
(26, 'Mohamed Nabil', 'admin@admin.com', 1, '0102288985', 1, 'online', NULL, NULL, NULL, NULL, '1621993386-04.jpg', 'mahmoud mohamed', 0, 1, 2, NULL, '100', 'V31viVxNd0', 0, 0, 'Waiting', '2021-05-25 23:43:06', '2021-05-25 23:43:06');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@tarnslate.com', NULL, '$2y$10$p2tZlLUy5iwZxXmTHIkP8OxBCJQgcwt1AfB3wARRMBVh5gFSoPdx6', NULL, '2021-04-12 12:06:45', '2021-04-12 12:06:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentaries`
--
ALTER TABLE `documentaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_appointments`
--
ALTER TABLE `office_appointments`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translated_files`
--
ALTER TABLE `translated_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translated_images`
--
ALTER TABLE `translated_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translates`
--
ALTER TABLE `translates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `documentaries`
--
ALTER TABLE `documentaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `office_appointments`
--
ALTER TABLE `office_appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `translated_files`
--
ALTER TABLE `translated_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `translated_images`
--
ALTER TABLE `translated_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `translates`
--
ALTER TABLE `translates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
