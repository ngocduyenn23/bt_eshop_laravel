-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2023 at 11:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop_laravel`
--
CREATE DATABASE IF NOT EXISTS `eshop_laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `eshop_laravel`;

-- --------------------------------------------------------

--
-- Table structure for table `danh_mucs`
--

CREATE TABLE `danh_mucs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_danh_muc` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danh_mucs`
--

INSERT INTO `danh_mucs` (`id`, `ten_danh_muc`, `created_at`, `updated_at`) VALUES
(73, 'adass', '2023-05-28 13:53:48', '2023-05-28 13:53:48'),
(76, 'laptop2', '2023-05-28 14:08:22', '2023-05-28 14:08:22'),
(77, 'laptop3', '2023-05-28 14:08:29', '2023-05-28 14:08:29'),
(81, 'laptop', '2023-05-28 14:15:08', '2023-05-28 14:15:08'),
(82, '11111', '2023-05-28 14:15:14', '2023-05-28 14:15:14'),
(83, '2222', '2023-05-28 14:15:23', '2023-05-28 14:15:23'),
(84, '3333444', '2023-05-28 14:23:33', '2023-05-28 14:23:33'),
(85, '555555', '2023-05-28 14:23:47', '2023-05-28 14:23:47'),
(86, '123456', '2023-05-28 14:23:53', '2023-05-28 14:23:53'),
(87, 'laptop..', '2023-06-04 11:38:39', '2023-06-04 11:38:39'),
(88, 'laptop..', '2023-06-04 11:38:39', '2023-06-04 11:38:39'),
(89, 'laptop..', '2023-06-04 11:38:40', '2023-06-04 11:38:40'),
(90, 'laptop3', '2023-06-07 12:37:12', '2023-06-07 12:37:12'),
(91, 'assdd', '2023-08-04 02:28:51', '2023-08-04 02:28:51');

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
(20, '2023_05_10_143040_create_danh_mucs_table', 1),
(21, '2023_05_10_145618_create_san_phams_table', 1),
(22, '2014_10_12_000000_create_users_table', 2),
(23, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(24, '2019_08_19_000000_create_failed_jobs_table', 2),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(26, '2023_07_31_000333_create_san_phamss_table', 3),
(27, '2023_07_31_000418_create_danh_mucss_table', 3);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `san_phams`
--

CREATE TABLE `san_phams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `san_pham` varchar(200) DEFAULT NULL,
  `gia` decimal(20,0) DEFAULT NULL,
  `chi_tiet` text DEFAULT NULL,
  `anh_bia` varchar(500) DEFAULT NULL,
  `id_nguoi_tao` bigint(20) DEFAULT NULL,
  `id_danh_muc` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `san_phams`
--

INSERT INTO `san_phams` (`id`, `san_pham`, `gia`, `chi_tiet`, `anh_bia`, `id_nguoi_tao`, `id_danh_muc`, `created_at`, `updated_at`) VALUES
(7, '123457', '356000', 'tự kiểm duyệt', '/files/5gfMwxHhqWsFOz4zs7D9W2fACVjIcJXRNvObqaVk.webp', NULL, 73, '2023-08-03 09:11:39', '2023-08-03 09:11:39'),
(8, 'Thức ăn cao cấp', '356', 'tự kiểm duyệt', '/files/7zy0C63EtpYbZPwdgvGmbkDKfUVNcRtNgkBzVWTQ.webp', NULL, 73, '2023-08-03 10:37:54', '2023-08-03 10:37:54'),
(9, 'Thức ăn cao cấp(2)', '200', 'tự kiểm duyệt', '/files/QPaIyaGSyiB8qfRg9U5J5N1rRZP2fiQYYQN9wx0p.webp', NULL, 73, '2023-08-03 10:41:36', '2023-08-03 10:41:36'),
(10, 'Thức ăn cao cấp(3)', '111', 'tự kiểm duyệt', '/files/2eEZrFIW6G0JFJcYmrbJQmPUQs1leFsBjoYerJ0x.webp', NULL, 73, '2023-08-03 10:48:28', '2023-08-03 10:48:28'),
(11, 'Thức ăn cao cấp(4)', '222', 'tự kiểm duyệt', '/files/0j1QP0GhHDplyOuG46ihpZrqKgVRhGo8MiyJMF6x.webp', NULL, 73, '2023-08-03 11:08:30', '2023-08-03 11:08:30'),
(12, 'Thuc an', '222', 'aaa', '/files/wzNK6FOP0gkDu0mr6bmX1aVYgnf6TRTmFUoI4xbG.webp', NULL, NULL, '2023-08-03 11:13:20', '2023-08-03 11:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ngọc Duyên', 'hien28072019@gmail.com', NULL, '$2y$10$6iLnO.reZPPg0rsGQRTsBeM3cqFqV6g/gAUrPeSSr4VqSVEXwPrCa', NULL, '2023-08-03 06:08:04', '2023-08-03 06:08:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danh_mucs`
--
ALTER TABLE `danh_mucs`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_san_pham_id_nguoi_tao` (`id_nguoi_tao`),
  ADD KEY `idx_san_pham_id_danh_muc` (`id_danh_muc`);

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
-- AUTO_INCREMENT for table `danh_mucs`
--
ALTER TABLE `danh_mucs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
