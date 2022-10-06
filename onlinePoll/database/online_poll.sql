-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2022 at 06:17 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_lists`
--

CREATE TABLE `answer_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `questionId` int(11) NOT NULL,
  `optionId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer_lists`
--

INSERT INTO `answer_lists` (`id`, `userId`, `questionId`, `optionId`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 1, 1, 3, '2022-10-10 00:09:10', '2022-10-10 00:09:10', NULL),
(11, 1, 3, 10, '2022-10-10 00:09:13', '2022-10-10 00:09:13', NULL),
(12, 1, 2, 7, '2022-10-10 00:09:17', '2022-10-10 00:09:17', NULL),
(13, 1, 4, 16, '2022-10-10 00:09:22', '2022-10-10 00:09:22', NULL),
(14, 2, 1, 3, '2022-10-10 00:12:57', '2022-10-10 00:12:57', NULL),
(15, 2, 2, 7, '2022-10-10 00:13:00', '2022-10-10 00:13:00', NULL),
(16, 2, 4, 14, '2022-10-10 00:13:02', '2022-10-10 00:13:02', NULL),
(17, 2, 3, 10, '2022-10-10 00:13:05', '2022-10-10 00:13:05', NULL),
(18, 2, 5, 19, '2022-10-10 00:13:08', '2022-10-10 00:13:08', NULL),
(19, 2, 6, 22, '2022-10-10 00:13:11', '2022-10-10 00:13:11', NULL),
(20, 2, 7, 28, '2022-10-10 00:13:17', '2022-10-10 00:13:17', NULL),
(21, 2, 8, 31, '2022-10-10 00:13:21', '2022-10-10 00:13:21', NULL),
(22, 1, 5, 19, '2022-10-10 00:13:39', '2022-10-10 00:13:39', NULL),
(23, 1, 6, 22, '2022-10-10 00:13:42', '2022-10-10 00:13:42', NULL),
(24, 1, 7, 27, '2022-10-10 00:13:44', '2022-10-10 00:13:44', NULL),
(25, 1, 8, 32, '2022-10-10 00:13:47', '2022-10-10 00:13:47', NULL),
(26, 3, 1, 1, '2022-10-10 00:14:00', '2022-10-10 00:14:00', NULL),
(27, 3, 2, 7, '2022-10-10 00:14:02', '2022-10-10 00:14:02', NULL),
(28, 3, 3, 10, '2022-10-10 00:14:04', '2022-10-10 00:14:04', NULL),
(29, 3, 5, 18, '2022-10-10 00:14:07', '2022-10-10 00:14:07', NULL),
(30, 3, 4, 15, '2022-10-10 00:14:09', '2022-10-10 00:14:09', NULL),
(31, 3, 6, 23, '2022-10-10 00:14:11', '2022-10-10 00:14:11', NULL),
(32, 3, 7, 27, '2022-10-10 00:14:13', '2022-10-10 00:14:13', NULL),
(33, 3, 8, 31, '2022-10-10 00:14:16', '2022-10-10 00:14:16', NULL),
(34, 4, 1, 2, '2022-10-10 00:14:30', '2022-10-10 00:14:30', NULL),
(35, 4, 3, 10, '2022-10-10 00:14:32', '2022-10-10 00:14:32', NULL),
(36, 4, 2, 8, '2022-10-10 00:14:34', '2022-10-10 00:14:34', NULL),
(37, 4, 4, 14, '2022-10-10 00:14:37', '2022-10-10 00:14:37', NULL),
(38, 4, 6, 22, '2022-10-10 00:14:39', '2022-10-10 00:14:39', NULL),
(39, 4, 5, 19, '2022-10-10 00:14:43', '2022-10-10 00:14:43', NULL),
(40, 4, 7, 27, '2022-10-10 00:14:46', '2022-10-10 00:14:46', NULL),
(41, 4, 8, 31, '2022-10-10 00:14:48', '2022-10-10 00:14:48', NULL),
(42, 5, 1, 4, '2022-10-10 00:14:58', '2022-10-10 00:14:58', NULL),
(43, 5, 2, 8, '2022-10-10 00:15:00', '2022-10-10 00:15:00', NULL),
(44, 5, 3, 11, '2022-10-10 00:15:02', '2022-10-10 00:15:02', NULL),
(45, 5, 4, 15, '2022-10-10 00:15:05', '2022-10-10 00:15:05', NULL),
(46, 5, 5, 19, '2022-10-10 00:15:07', '2022-10-10 00:15:07', NULL),
(47, 5, 6, 23, '2022-10-10 00:15:10', '2022-10-10 00:15:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_06_143108_create_question_lists_table', 1),
(6, '2022_10_06_143132_create_option_lists_table', 1),
(7, '2022_10_06_143157_create_answer_lists_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `option_lists`
--

CREATE TABLE `option_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questionId` int(11) NOT NULL,
  `option` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0' COMMENT '0=false, 1=true',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `option_lists`
--

INSERT INTO `option_lists` (`id`, `questionId`, `option`, `answer`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '700', '0', '2022-10-09 23:38:59', '2022-10-09 23:38:59', NULL),
(2, 1, '666', '1', '2022-10-09 23:38:59', '2022-10-09 23:38:59', NULL),
(3, 1, '10', '0', '2022-10-09 23:38:59', '2022-10-09 23:38:59', NULL),
(4, 1, '100', '0', '2022-10-09 23:38:59', '2022-10-09 23:38:59', NULL),
(5, 2, '375', '1', '2022-10-09 23:39:27', '2022-10-09 23:39:27', NULL),
(6, 2, '57', '0', '2022-10-09 23:39:27', '2022-10-09 23:39:27', NULL),
(7, 2, '376', '0', '2022-10-09 23:39:27', '2022-10-09 23:39:27', NULL),
(8, 2, '970', '0', '2022-10-09 23:39:27', '2022-10-09 23:39:27', NULL),
(9, 3, '2500', '0', '2022-10-09 23:40:04', '2022-10-09 23:40:04', NULL),
(10, 3, '505', '0', '2022-10-09 23:40:04', '2022-10-09 23:40:04', NULL),
(11, 3, '500', '0', '2022-10-09 23:40:04', '2022-10-09 23:40:04', NULL),
(12, 3, 'None of these', '1', '2022-10-09 23:40:04', '2022-10-09 23:40:04', NULL),
(13, 4, '9', '1', '2022-10-09 23:40:31', '2022-10-09 23:40:31', NULL),
(14, 4, '10', '0', '2022-10-09 23:40:31', '2022-10-09 23:40:31', NULL),
(15, 4, '900', '0', '2022-10-09 23:40:31', '2022-10-09 23:40:31', NULL),
(16, 4, '1', '0', '2022-10-09 23:40:31', '2022-10-09 23:40:31', NULL),
(17, 5, '0', '0', '2022-10-09 23:40:55', '2022-10-09 23:40:55', NULL),
(18, 5, '32', '0', '2022-10-09 23:40:55', '2022-10-09 23:40:55', NULL),
(19, 5, '56', '0', '2022-10-09 23:40:55', '2022-10-09 23:40:55', NULL),
(20, 5, '46', '1', '2022-10-09 23:40:55', '2022-10-09 23:40:55', NULL),
(21, 6, '216', '1', '2022-10-09 23:44:00', '2022-10-09 23:44:00', NULL),
(22, 6, '7230', '0', '2022-10-09 23:44:00', '2022-10-09 23:44:00', NULL),
(23, 6, '106', '0', '2022-10-09 23:44:00', '2022-10-09 23:44:00', NULL),
(24, 6, '372', '0', '2022-10-09 23:44:00', '2022-10-09 23:44:00', NULL),
(25, 7, '105', '0', '2022-10-09 23:44:43', '2022-10-09 23:44:43', NULL),
(26, 7, '176', '1', '2022-10-09 23:44:43', '2022-10-09 23:44:43', NULL),
(27, 7, '26', '0', '2022-10-09 23:44:43', '2022-10-09 23:44:43', NULL),
(28, 7, '16', '0', '2022-10-09 23:44:43', '2022-10-09 23:44:43', NULL),
(29, 8, '25', '1', '2022-10-09 23:45:10', '2022-10-09 23:45:10', NULL),
(30, 8, '6', '0', '2022-10-09 23:45:10', '2022-10-09 23:45:10', NULL),
(31, 8, '28', '0', '2022-10-09 23:45:10', '2022-10-09 23:45:10', NULL),
(32, 8, '7', '0', '2022-10-09 23:45:10', '2022-10-09 23:45:10', NULL),
(33, 9, '11', '0', '2022-10-09 23:45:34', '2022-10-09 23:45:34', NULL),
(34, 9, '16', '0', '2022-10-09 23:45:34', '2022-10-09 23:45:34', NULL),
(35, 9, '14', '0', '2022-10-09 23:45:34', '2022-10-09 23:45:34', NULL),
(36, 9, '15', '0', '2022-10-09 23:45:34', '2022-10-09 23:45:34', NULL),
(37, 10, '2', '0', '2022-10-09 23:46:03', '2022-10-09 23:46:03', NULL),
(38, 10, '5', '0', '2022-10-09 23:46:03', '2022-10-09 23:46:03', NULL),
(39, 10, '0', '0', '2022-10-09 23:46:03', '2022-10-09 23:46:03', NULL),
(40, 10, 'None of these', '0', '2022-10-09 23:46:03', '2022-10-09 23:46:03', NULL),
(41, 11, '23', '0', '2022-10-09 23:48:29', '2022-10-09 23:48:29', NULL),
(42, 11, '61', '0', '2022-10-09 23:48:29', '2022-10-09 23:48:29', NULL),
(43, 11, '0', '0', '2022-10-09 23:48:29', '2022-10-09 23:48:29', NULL),
(44, 11, '42', '0', '2022-10-09 23:48:29', '2022-10-09 23:48:29', NULL),
(45, 12, '€', '0', '2022-10-09 23:49:08', '2022-10-09 23:49:08', NULL),
(46, 12, 'π', '0', '2022-10-09 23:49:08', '2022-10-09 23:49:08', NULL),
(47, 12, 'Ω', '0', '2022-10-09 23:49:08', '2022-10-09 23:49:08', NULL),
(48, 12, '∞', '0', '2022-10-09 23:49:08', '2022-10-09 23:49:08', NULL),
(49, 13, '36, 29, 21, 12, 7', '0', '2022-10-09 23:49:48', '2022-10-09 23:49:48', NULL),
(50, 13, '36, 29, 7, 21, 12', '0', '2022-10-09 23:49:48', '2022-10-09 23:49:48', NULL),
(51, 13, '7, 12, 21, 29, 36', '0', '2022-10-09 23:49:48', '2022-10-09 23:49:48', NULL),
(52, 13, 'None of these', '0', '2022-10-09 23:49:48', '2022-10-09 23:49:48', NULL),
(53, 14, '10', '0', '2022-10-09 23:50:06', '2022-10-09 23:50:06', NULL),
(54, 14, '90', '0', '2022-10-09 23:50:06', '2022-10-09 23:50:06', NULL),
(55, 14, '11', '0', '2022-10-09 23:50:06', '2022-10-09 23:50:06', NULL),
(56, 14, '99', '0', '2022-10-09 23:50:06', '2022-10-09 23:50:06', NULL),
(57, 15, '71', '0', '2022-10-09 23:50:33', '2022-10-09 23:50:33', NULL),
(58, 15, '109', '0', '2022-10-09 23:50:33', '2022-10-09 23:50:33', NULL),
(59, 15, '89', '0', '2022-10-09 23:50:33', '2022-10-09 23:50:33', NULL),
(60, 15, 'None of these', '0', '2022-10-09 23:50:33', '2022-10-09 23:50:33', NULL),
(61, 16, '1', '0', '2022-10-09 23:51:19', '2022-10-09 23:51:19', NULL),
(62, 16, '3', '0', '2022-10-09 23:51:19', '2022-10-09 23:51:19', NULL),
(63, 16, '7', '0', '2022-10-09 23:51:19', '2022-10-09 23:51:19', NULL),
(64, 16, 'None of these', '0', '2022-10-09 23:51:19', '2022-10-09 23:51:19', NULL),
(65, 17, '55', '0', '2022-10-09 23:54:51', '2022-10-09 23:54:51', NULL),
(66, 17, '192', '0', '2022-10-09 23:54:51', '2022-10-09 23:54:51', NULL),
(67, 17, '17', '0', '2022-10-09 23:54:51', '2022-10-09 23:54:51', NULL),
(68, 17, '66', '0', '2022-10-09 23:54:51', '2022-10-09 23:54:51', NULL),
(69, 18, '100', '0', '2022-10-09 23:55:13', '2022-10-09 23:55:13', NULL),
(70, 18, '999', '0', '2022-10-09 23:55:13', '2022-10-09 23:55:13', NULL),
(71, 18, '111', '0', '2022-10-09 23:55:13', '2022-10-09 23:55:13', NULL),
(72, 18, '101', '0', '2022-10-09 23:55:13', '2022-10-09 23:55:13', NULL),
(73, 19, '103', '0', '2022-10-09 23:55:39', '2022-10-09 23:55:39', NULL),
(74, 19, '261', '0', '2022-10-09 23:55:39', '2022-10-09 23:55:39', NULL),
(75, 19, '87', '0', '2022-10-09 23:55:39', '2022-10-09 23:55:39', NULL),
(76, 19, '119', '0', '2022-10-09 23:55:39', '2022-10-09 23:55:39', NULL),
(77, 20, '1', '0', '2022-10-09 23:56:08', '2022-10-09 23:56:08', NULL),
(78, 20, '1000', '0', '2022-10-09 23:56:08', '2022-10-09 23:56:08', NULL),
(79, 20, '0', '0', '2022-10-09 23:56:08', '2022-10-09 23:56:08', NULL),
(80, 20, 'None of these', '0', '2022-10-09 23:56:08', '2022-10-09 23:56:08', NULL);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_lists`
--

CREATE TABLE `question_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `question` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_lists`
--

INSERT INTO `question_lists` (`id`, `userId`, `question`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Find the sum of 111 + 222 + 333', '2022-10-09 23:38:59', '2022-10-09 23:38:59', NULL),
(2, 1, 'Subtract 457 from 832', '2022-10-09 23:39:27', '2022-10-09 23:39:27', NULL),
(3, 1, '50 times 5 is equal to', '2022-10-09 23:40:04', '2022-10-09 23:40:04', NULL),
(4, 1, '90 ÷ 10', '2022-10-09 23:40:31', '2022-10-09 23:40:31', NULL),
(5, 2, 'Simplify: 26 + 32 - 12', '2022-10-09 23:40:55', '2022-10-09 23:40:55', NULL),
(6, 2, 'Find the product of 72 × 3', '2022-10-09 23:44:00', '2022-10-09 23:44:00', NULL),
(7, 2, 'Solve : 200 – (96 ÷ 4)', '2022-10-09 23:44:43', '2022-10-09 23:44:43', NULL),
(8, 2, 'Solve : 24 + 4 ÷ 4', '2022-10-09 23:45:10', '2022-10-09 23:45:10', NULL),
(9, 3, 'Simplify : 3 + 6 x (5 + 4) ÷ 3 - 7', '2022-10-09 23:45:34', '2022-10-09 23:45:34', NULL),
(10, 3, 'Simplify :150 ÷ (6 + 3 x 8) - 5', '2022-10-09 23:46:03', '2022-10-09 23:46:03', NULL),
(11, 3, '19 + ……. = 42', '2022-10-09 23:48:29', '2022-10-09 23:48:29', NULL),
(12, 3, 'What is the symbol of pi?', '2022-10-09 23:49:08', '2022-10-09 23:49:08', NULL),
(13, 4, 'Arrange the numbers in ascending order: 36, 12, 29, 21, 7.', '2022-10-09 23:49:48', '2022-10-09 23:49:48', NULL),
(14, 4, 'What is the greatest two digit number?', '2022-10-09 23:50:06', '2022-10-09 23:50:06', NULL),
(15, 4, 'How much is 90 – 19?', '2022-10-09 23:50:33', '2022-10-09 23:50:33', NULL),
(16, 4, '20 is divisible by ……… .', '2022-10-09 23:51:19', '2022-10-09 23:51:19', NULL),
(17, 5, 'Find the value of x; if x = (2 × 3) + 11.', '2022-10-09 23:54:51', '2022-10-09 23:54:51', NULL),
(18, 5, 'What is the smallest three digit number?', '2022-10-09 23:55:13', '2022-10-09 23:55:13', NULL),
(19, 5, 'How much is 190 – 87 + 16?', '2022-10-09 23:55:39', '2022-10-09 23:55:39', NULL),
(20, 5, 'What is 1000 × 1 equal to?', '2022-10-09 23:56:08', '2022-10-09 23:56:08', NULL);

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
(1, 'User', 'user@gmail.com', NULL, '$2y$10$znGKqHJ8AZbbEAiyR900BuSnReC2sSWkMj1ScAAq9YvEfa9KJRDNq', NULL, '2022-10-09 23:34:30', '2022-10-09 23:34:30'),
(2, 'User2', 'user2@gmail.com', NULL, '$2y$10$CVNAkCUT2gRa5hu1vZV.VeU036OuY68yJXbFyzy1NzWGoX2mRBkoC', NULL, '2022-10-09 23:35:20', '2022-10-09 23:35:20'),
(3, 'User3', 'user3@gmail.com', NULL, '$2y$10$6.cYxwX/j793zo3ExN1t8OI80aIJtLSlo3w3zJywdwq/vnLVwfeFC', NULL, '2022-10-09 23:35:39', '2022-10-09 23:35:39'),
(4, 'User4', 'user4@gmail.com', NULL, '$2y$10$zVbc61LWO/2AS8kQzQUUquQktcDJOb9BHNK3xso8B69hFgrdPf6/q', NULL, '2022-10-09 23:36:03', '2022-10-09 23:36:03'),
(5, 'User5', 'user5@gmail.com', NULL, '$2y$10$Sebp4VaKzmMvaHvZq6Gl9..cCtfTg3P3ri3Ncv86D2bPWLG411akC', NULL, '2022-10-09 23:36:33', '2022-10-09 23:36:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_lists`
--
ALTER TABLE `answer_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option_lists`
--
ALTER TABLE `option_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `question_lists`
--
ALTER TABLE `question_lists`
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
-- AUTO_INCREMENT for table `answer_lists`
--
ALTER TABLE `answer_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `option_lists`
--
ALTER TABLE `option_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_lists`
--
ALTER TABLE `question_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
