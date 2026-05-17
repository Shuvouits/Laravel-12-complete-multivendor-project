-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2026 at 08:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multivendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `avatar`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Super Admin', 'admin@example.com', '2026-04-11 06:55:20', '$2y$12$NfihJ9TjStrtIxjoJc.04uSO1ikFU0OmmrXs8OyWKY16nB9lLqCl2', 'mbjKnoPv68izZ5nNAOkIYPX7ENUDuS8E4ayvhcRqUjcANokiIf9zbZyk5Wbu', '2026-04-11 06:55:21', '2026-04-11 06:55:21'),
(2, NULL, 'Shuvo Bhowmik', 'shuvo@example.com', NULL, '$2y$12$1xuAQejDAXiZWmXgr1VuFOj0YXFbSqKcapcCl.KNe9fpEQJaQ6DJe', 'Q4EYf5ag1xUtXYVvBj2gp0J88gPXhz3iubmW6wnEMoWkyWvnqTh3BrpI2l0Z', '2026-05-02 03:36:31', '2026-05-02 03:36:31'),
(3, NULL, 'Jhon Doe', 'jhon@example.com', NULL, '$2y$12$S61XWsgDbYGH7gRYP2KCEOrgfwsihMT9e1KBhF00irzrZTjxhUadK', 'H17DRCpyqcoFfHLn6aMQTpq5jlZPXBB0Uw137G3CA4ltm4xZFxztFcSFB3cL', '2026-05-02 03:41:15', '2026-05-02 03:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-admin@gmail.com|127.0.0.1', 'i:1;', 1777706700),
('laravel-cache-admin@gmail.com|127.0.0.1:timer', 'i:1777706700;', 1777706700),
('laravel-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:5:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"group_name\";s:1:\"d\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:17:{i:0;a:5:{s:1:\"a\";i:1;s:1:\"b\";s:14:\"KYC Management\";s:1:\"c\";s:14:\"KYC Management\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}i:1;a:5:{s:1:\"a\";i:2;s:1:\"b\";s:15:\"Role Management\";s:1:\"c\";s:17:\"Access Management\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:2;a:5:{s:1:\"a\";i:3;s:1:\"b\";s:20:\"Role User Management\";s:1:\"c\";s:17:\"Access Management\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:3;a:5:{s:1:\"a\";i:5;s:1:\"b\";s:19:\"Category Management\";s:1:\"c\";s:18:\"Product Categoires\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:4;a:5:{s:1:\"a\";i:6;s:1:\"b\";s:15:\"Tags Management\";s:1:\"c\";s:12:\"Product Tags\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:5;a:5:{s:1:\"a\";i:7;s:1:\"b\";s:16:\"Brand Management\";s:1:\"c\";s:14:\"Product Brands\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:6;a:5:{s:1:\"a\";i:8;s:1:\"b\";s:18:\"Product Management\";s:1:\"c\";s:8:\"Products\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:7;a:5:{s:1:\"a\";i:9;s:1:\"b\";s:16:\"Order Management\";s:1:\"c\";s:5:\"Order\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:8;a:5:{s:1:\"a\";i:10;s:1:\"b\";s:20:\"Ecommerce Management\";s:1:\"c\";s:9:\"Ecommerce\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:9;a:5:{s:1:\"a\";i:11;s:1:\"b\";s:18:\"Section Management\";s:1:\"c\";s:13:\"Home Sections\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:10;a:5:{s:1:\"a\";i:12;s:1:\"b\";s:21:\"Subscriber Management\";s:1:\"c\";s:11:\"Subscribers\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:11;a:5:{s:1:\"a\";i:13;s:1:\"b\";s:19:\"Withdraw Management\";s:1:\"c\";s:8:\"Withdraw\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:12;a:5:{s:1:\"a\";i:14;s:1:\"b\";s:15:\"Page Management\";s:1:\"c\";s:12:\"Page Builder\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:13;a:5:{s:1:\"a\";i:15;s:1:\"b\";s:24:\"Advertisement Management\";s:1:\"c\";s:13:\"Advertisement\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:14;a:5:{s:1:\"a\";i:16;s:1:\"b\";s:18:\"Contact Management\";s:1:\"c\";s:7:\"Contact\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:15;a:5:{s:1:\"a\";i:17;s:1:\"b\";s:15:\"Payment Setting\";s:1:\"c\";s:15:\"Payment Setting\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:16;a:5:{s:1:\"a\";i:18;s:1:\"b\";s:19:\"Settings Management\";s:1:\"c\";s:13:\"Site Settings\";s:1:\"d\";s:5:\"admin\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:9:\"Developer\";s:1:\"d\";s:5:\"admin\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:5:\"Admin\";s:1:\"d\";s:5:\"admin\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:11:\"Super Admin\";s:1:\"d\";s:5:\"admin\";}}}', 1779113022);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`, `position`, `image`, `icon`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Electronics', 'electronics', 1, 'uploads/2b59c475-bd8b-450d-b173-3148a57498c4.png', NULL, 0, 1, '2026-05-03 02:04:45', '2026-05-03 02:04:45'),
(2, 1, 'Desktop', 'desktop', 1, NULL, NULL, 0, 1, '2026-05-03 02:05:16', '2026-05-03 02:05:16'),
(3, 1, 'Laptop', 'laptop', 2, NULL, NULL, 0, 1, '2026-05-03 02:05:30', '2026-05-03 02:05:30');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `k_y_c_s`
--

CREATE TABLE `k_y_c_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `rejected_reason` text DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `full_address` varchar(255) NOT NULL,
  `document_type` enum('passport','driving_license','id_card') NOT NULL,
  `document_scan_copy` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `k_y_c_s`
--

INSERT INTO `k_y_c_s` (`id`, `user_id`, `status`, `rejected_reason`, `verified_at`, `full_name`, `date_of_birth`, `gender`, `full_address`, `document_type`, `document_scan_copy`, `created_at`, `updated_at`) VALUES
(1, 4, 'pending', NULL, NULL, 'Shuvo Bhowmik', '2026-04-17', 'male', 'Hasnabad, Dhaka, Bangladesh', 'id_card', 'uploads/89591694-e93f-4eb5-9e38-bf48c7564a70.png', '2026-04-10 22:18:33', '2026-04-11 06:21:10'),
(2, 3, 'pending', NULL, NULL, 'Michel Vendort', '2026-04-21', 'male', 'Hasnabad, Dhaka, Bangladesh', 'id_card', 'uploads/5e83d379-0a44-41ba-aefe-0c930c461038.png', '2026-04-11 06:25:02', '2026-04-11 06:25:02');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_04_02_165036_create_admins_table', 1),
(5, '2026_04_11_033816_create_k_y_c_s_table', 2),
(6, '2026_04_13_113404_create_stores_table', 3),
(7, '2026_04_14_063324_create_permission_tables', 4),
(8, '2026_05_03_032936_create_settings_table', 5),
(9, '2026_05_03_073726_create_categories_table', 6),
(10, '2026_05_06_080404_create_tags_table', 7),
(11, '2026_05_10_135930_create_brands_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 2),
(2, 'App\\Models\\Admin', 1),
(2, 'App\\Models\\Admin', 2),
(2, 'App\\Models\\Admin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `group_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'KYC Management', 'KYC Management', 'admin', '2025-06-23 21:54:55', '2025-06-23 21:54:55'),
(2, 'Role Management', 'Access Management', 'admin', '2025-06-23 22:12:51', '2025-06-23 22:12:51'),
(3, 'Role User Management', 'Access Management', 'admin', '2025-06-23 22:13:05', '2025-06-23 22:13:05'),
(5, 'Category Management', 'Product Categoires', 'admin', '2025-06-30 03:43:43', '2025-06-30 03:43:43'),
(6, 'Tags Management', 'Product Tags', 'admin', '2025-06-30 03:44:13', '2025-06-30 03:44:13'),
(7, 'Brand Management', 'Product Brands', 'admin', '2025-06-30 05:21:22', '2025-06-30 05:21:22'),
(8, 'Product Management', 'Products', 'admin', '2025-07-20 00:47:31', '2025-07-20 00:47:31'),
(9, 'Order Management', 'Order', 'admin', '2025-09-01 03:38:54', '2025-09-01 03:38:54'),
(10, 'Ecommerce Management', 'Ecommerce', 'admin', '2025-09-01 03:42:59', '2025-09-01 03:42:59'),
(11, 'Section Management', 'Home Sections', 'admin', '2025-09-01 03:48:55', '2025-09-01 03:48:55'),
(12, 'Subscriber Management', 'Subscribers', 'admin', '2025-09-01 04:48:30', '2025-09-01 04:48:30'),
(13, 'Withdraw Management', 'Withdraw', 'admin', '2025-09-01 04:50:41', '2025-09-01 04:50:41'),
(14, 'Page Management', 'Page Builder', 'admin', '2025-09-01 04:52:48', '2025-09-01 04:52:48'),
(15, 'Advertisement Management', 'Advertisement', 'admin', '2025-09-01 04:54:32', '2025-09-01 04:54:32'),
(16, 'Contact Management', 'Contact', 'admin', '2025-09-01 04:56:12', '2025-09-01 04:56:12'),
(17, 'Payment Setting', 'Payment Setting', 'admin', '2025-09-01 04:58:41', '2025-09-01 04:58:41'),
(18, 'Settings Management', 'Site Settings', 'admin', '2025-09-01 05:00:32', '2025-09-01 05:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Developer', 'admin', '2026-05-02 03:23:25', '2026-05-02 03:23:25'),
(2, 'Admin', 'admin', '2026-05-02 03:30:18', '2026-05-02 03:30:18'),
(3, 'Super Admin', 'admin', '2026-05-02 03:38:26', '2026-05-02 03:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 3),
(3, 2),
(3, 3),
(5, 2),
(5, 3),
(6, 2),
(6, 3),
(7, 2),
(7, 3),
(8, 2),
(8, 3),
(9, 2),
(9, 3),
(10, 2),
(10, 3),
(11, 2),
(11, 3),
(12, 2),
(12, 3),
(13, 2),
(13, 3),
(14, 2),
(14, 3),
(15, 2),
(15, 3),
(16, 2),
(16, 3),
(17, 2),
(17, 3),
(18, 2),
(18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bZsCK6SEUiYK1vwdacMw5lbaWkHHQQjN0mObvl5Q', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSXI5VzI5S0ppWTlFcTNFUTdwVXhVMmw3OGJpYm0yTGZkNUtJRnUxSiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czozNDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluL2JyYW5kcyI7czo1OiJyb3V0ZSI7czoxODoiYWRtaW4uYnJhbmRzLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1779029330),
('eK01L8SlbXEBQZp6pUPtsmMkMArtygkt2afYAcPl', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiR2psZ0ZCUnVLckxHMDI1eU16Ykdkb3hYcDl4TjA0d0w3Tnc2ZnJoSSI7czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTg6ImZsYXNoZXI6OmVudmVsb3BlcyI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9icmFuZHMiO3M6NToicm91dGUiO3M6MTg6ImFkbWluLmJyYW5kcy5pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1779031000);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'ShopX', '2025-08-06 00:44:32', '2025-08-06 00:44:32'),
(2, 'site_email', 'shopx@gmail.com', '2025-08-06 00:44:32', '2025-08-06 00:44:32'),
(3, 'site_phone', '000000000', '2025-08-06 00:44:32', '2025-08-06 00:44:32'),
(4, 'site_currency', 'USD', '2025-08-06 00:44:32', '2025-08-06 00:44:32'),
(5, 'site_currency_icon', '$', '2025-08-06 00:44:32', '2025-08-06 00:44:32'),
(6, 'paypal_status', 'active', '2025-08-06 04:00:41', '2025-08-06 22:51:07'),
(7, 'paypal_mode', 'sandbox', '2025-08-06 04:00:41', '2025-08-06 04:00:41'),
(8, 'paypal_currency', 'USD', '2025-08-06 04:00:41', '2025-08-06 22:52:46'),
(9, 'paypal_rate', '1', '2025-08-06 04:00:41', '2025-08-06 22:51:14'),
(10, 'paypal_client_id', 'ARw4_uzFSzVuCeTiayoejYcCIbaU0mN0U6v_wt0B2kF1iyXNmwgp2EMO0s-IWsUhaORyrRz92vKOyLv9', '2025-08-06 04:00:41', '2025-08-06 05:07:27'),
(11, 'paypal_secret', 'ECHNB7A_Udnbgg8MeXuy5JF8JoOWcScKPHhucryjqudiHuY5NznHCdwT9FdzFIvjrvIno-ju3Hx54PWT', '2025-08-06 04:00:41', '2025-08-06 05:07:27'),
(12, 'stripe_status', 'active', '2025-08-10 01:48:26', '2025-08-10 01:48:26'),
(13, 'stripe_mode', 'sandbox', '2025-08-10 01:48:26', '2025-08-10 01:48:26'),
(14, 'stripe_currency', 'USD', '2025-08-10 01:48:26', '2025-08-10 01:48:26'),
(15, 'stripe_rate', '1', '2025-08-10 01:48:26', '2025-08-10 01:48:26'),
(16, 'stripe_client_id', 'pk_test_51MwNFdKW5d0gpOwDt4kj2AWwubKMI8bzSHHjNenilgX91YyHB3O3tB3yD5do2dAl8qpUCFWM6wuMqQeg12ZMnQv600sfwl8Hoq', '2025-08-10 01:48:26', '2025-08-10 03:45:57'),
(17, 'stripe_secret', 'sk_test_51MwNFdKW5d0gpOwDnak9F1qPBvErrGAOHAMdWQ4wHaaWhRDhOtFRw80i8XgiOnDW0ChbYt2yhKdZbR3llR9IkStD00IEVi0Q9z', '2025-08-10 01:48:26', '2025-08-10 03:45:57'),
(18, 'razorpay_status', 'active', '2025-08-10 21:58:59', '2025-08-10 21:58:59'),
(19, 'razorpay_currency', 'INR', '2025-08-10 21:58:59', '2025-08-10 21:58:59'),
(20, 'razorpay_rate', '87.52', '2025-08-10 21:58:59', '2025-08-10 22:49:24'),
(21, 'razorpay_client_id', 'rzp_test_cvrsy43xvBZfDT', '2025-08-10 21:58:59', '2025-08-10 22:43:04'),
(22, 'razorpay_secret', 'c9AmI4C5vOfSWmZehhlns5df', '2025-08-10 21:58:59', '2025-08-10 22:43:04'),
(23, 'admin_commission', '15', '2025-08-11 03:45:44', '2025-08-11 03:45:44'),
(24, 'site_short_description', 'Awesome eCommerce store website template', '2025-08-27 00:22:09', '2025-08-27 00:23:29'),
(25, 'site_address', '233 North Michigan Avenue, Suite 1800, Chicago, IL 60601', '2025-08-27 00:22:09', '2025-08-27 00:23:29'),
(26, 'site_copyright', '2025, ShopX - HTML Ecommerce Template', '2025-08-27 00:22:09', '2025-08-27 00:23:29'),
(27, 'site_hours', '10:00 - 18:00, Mon - Sat', '2025-08-27 00:22:09', '2025-08-27 00:23:29'),
(28, 'site_logo', 'uploads/62466f62-c50d-40f0-a19f-48f8e085ff22.svg', '2025-08-27 01:30:25', '2026-05-02 22:52:19'),
(29, 'site_favicon', 'uploads/284fc8b9-2fc1-4487-bc2c-57509a7a4ce0.svg', '2025-08-27 01:30:25', '2026-05-02 22:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `seller_id`, `logo`, `banner`, `name`, `phone`, `email`, `address`, `short_description`, `long_description`, `created_at`, `updated_at`) VALUES
(1, 3, 'uploads/47f2129a-c51d-487c-90f8-8763c32653d9.jpg', 'uploads/49a2a3f6-4c1d-46f0-a1f6-a5d70509ea60.jpg', 'ShopX', '01751720590', 'suvisree66@gmail.com', 'Hasnabad, Dhaka', 'Demo  Description', '<p>Long Description</p>', '2026-04-13 23:42:25', '2026-04-13 23:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(3, 'Most Popular', 'most-popular', 1, '2026-05-06 02:50:20', '2026-05-06 02:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('user','vendor') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Vendor', 'vendor@example.com', NULL, '$2y$12$txDZp36CbJ8GjAOqzK2YHeOe6cpsXF5w9.RNAMOiFPke1MKclw/H.', 'vendor', 'UIH6YfP7XCc4k6zSqinavhLVGcPwLmrBVUlD340Yc9DTiVL5X9074UPnWYKh', '2026-04-10 06:32:52', '2026-04-10 06:32:52'),
(4, NULL, 'User', 'user@example.com', NULL, '$2y$12$dDjBq7OH1PCcHPyBybsjw.k02tBKVYIjV8/oYv4lxWXTkXIeZLbna', 'user', NULL, '2026-04-10 21:57:23', '2026-04-10 21:57:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_index` (`parent_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `k_y_c_s`
--
ALTER TABLE `k_y_c_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `k_y_c_s_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_seller_id_foreign` (`seller_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `k_y_c_s`
--
ALTER TABLE `k_y_c_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `k_y_c_s`
--
ALTER TABLE `k_y_c_s`
  ADD CONSTRAINT `k_y_c_s_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
