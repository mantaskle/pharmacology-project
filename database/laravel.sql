-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2019 at 09:57 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

DROP TABLE IF EXISTS `medications`;
CREATE TABLE IF NOT EXISTS `medications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_limit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pain_level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosage_instructions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `name`, `daily_limit`, `pain_level`, `dosage_instructions`, `created_at`, `updated_at`) VALUES
(1, 'Morfinas', '120 mg', '0-10', 'ABC', '2019-04-07 21:00:00', '2019-04-14 21:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(40, '2019_03_26_192224_add_admin_to_users_table', 1),
(41, '2019_03_28_160447_create_medications_table', 2),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(38, '2014_10_12_000000_create_users_table', 1),
(42, '2019_04_15_073913_create_pacients_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pacients`
--

DROP TABLE IF EXISTS `pacients`;
CREATE TABLE IF NOT EXISTS `pacients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `condition` int(11) NOT NULL,
  `treatment_done` tinyint(1) NOT NULL DEFAULT '0',
  `additional_information` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pacients`
--

INSERT INTO `pacients` (`id`, `name`, `surname`, `age`, `height`, `weight`, `condition`, `treatment_done`, `additional_information`, `created_at`, `updated_at`) VALUES
(1, 'Jonas', 'Jonaitis', 64, 182, 77, 3, 0, 'Pirmas gydymas morfinu.', '2019-04-15 06:55:14', '2019-04-15 06:55:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `approved_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`, `approved_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2019-03-26 20:01:57', '$2y$10$7xhqOtrY4AKOK4VIXGl0g.yalsZgCF/c.dgm.9//lRDJRpwzC31vi', 'RSSVCxxjwNt9TrYQRktegacyQNZcVeKE1DDeV0kJzmulrDdL8LRmnIzUATk1', '2019-03-26 18:01:57', '2019-03-26 18:01:57', 1, '2019-03-26 18:01:57'),
(15, 'notauth', 'not@mail.com', NULL, '$2y$10$nVtb5u1bF92jR9xfCKhfqOKTJzvjJvVXPbNMFzOl6CaiVKFzQr5yO', NULL, '2019-04-15 03:07:55', '2019-04-15 03:07:55', 0, NULL),
(14, 'testinis', 'egle@mail.com', NULL, '$2y$10$9pOVmEPcWsX0aywtjrkgAOAqxkC9sD.j9BuDlhqD4SJM9EVQ9Htyy', NULL, '2019-04-15 03:01:05', '2019-04-15 03:01:46', 0, '2019-04-15 03:01:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
