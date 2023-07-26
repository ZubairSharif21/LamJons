-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2023 at 07:38 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamjons`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `musical_genre` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instrument` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_services` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_level` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `first_name`, `last_name`, `email`, `musical_genre`, `instrument`, `other_services`, `skill_level`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Allistair', 'Maynard', 'lewono@mailinator.com', 'latin', 'Rhythm Guitar', 'Promoting', 'newbie', 'Architecto vel hic e', '2023-06-20 21:19:58', '2023-06-24 01:19:28'),
(3, 'Martha', 'Finley', 'naviky@mailinator.com', 'rock', 'Bass', 'Editing', 'collaborator', 'Dolore deserunt veliDolore deserunt veli', '2023-06-20 22:02:57', '2023-06-21 21:24:39'),
(5, 'Erich', 'Guzman', 'habam@mailinator.com', 'classical', 'Vocals', 'Editing', 'collaborator', 'Mollitia sunt laudan', '2023-06-20 22:30:36', '2023-06-20 22:30:36'),
(6, 'Tanisha', 'Black', 'kabytuv@mailinator.com', 'rock', 'Drums', 'Photography', 'newbie', 'Ducimus officia dig', '2023-06-21 18:11:08', '2023-06-21 18:11:08'),
(7, 'Chiquita', 'Lane', 'dadigedu@mailinator.com', 'classical', 'Vocals', 'Songwriting', 'ready', 'Aut et et aperiam si', '2023-06-21 18:27:09', '2023-06-21 18:27:09'),
(8, 'Ann', 'Peck', 'vyguho@mailinator.com', 'other', 'Lead Guitar', 'Editing', 'collaborator', 'Enim reprehenderit', '2023-06-21 21:08:26', '2023-06-21 21:08:26'),
(9, 'Tiger', 'Pierce', 'rukejudil@mailinator.com', 'electronic', 'Bass', 'Editing', 'ready', 'Anim et sequi omnis', '2023-06-21 21:08:42', '2023-06-21 21:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2023_06_20_135914_create_categories_table', 1),
(25, '2023_06_23_150828_add_new_column_user_table', 2);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `account_type`, `remember_token`, `created_at`, `updated_at`, `first_name`, `last_name`, `city`, `state`, `zip`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$zyKODOzvLzCn06GhXvLyUu02NYLlwqzgbeP4JjjkTlAKds0gNBKp.', 'admin', NULL, '2023-06-20 20:59:50', '2023-06-20 20:59:50', NULL, NULL, NULL, NULL, NULL),
(2, 'kisuwyfoh', 'varinecyb@mailinator.com', NULL, '$2y$10$OM8nI7vyRmL3.m4kJ1QwUegcuOzj8KH/zwxsWxk9oLsEUD2yA8d4.', 'user', NULL, '2023-06-21 19:38:25', '2023-06-21 19:38:25', NULL, NULL, NULL, NULL, NULL),
(3, 'jixyq', 'fyjexo@mailinator.com', NULL, '$2y$10$rhT893vN5NP5RF2lORtZA.ALy5obHOGDnwYTyequSD9WSAwh..xa2', 'user', NULL, '2023-06-21 20:22:41', '2023-06-21 20:22:41', NULL, NULL, NULL, NULL, NULL),
(4, 'Amery', 'junobug@mailinator.com', NULL, '$2y$10$6rH5cgudYuUBk1eD6pevj.uFWO88U4qNvp7rZET.h6wZ3zjAd3/Ma', 'user', NULL, '2023-06-23 22:25:48', '2023-06-23 22:25:48', NULL, 'Estrada', 'Illo amet qui disti', 'Nostrum est sunt ea', '59023'),
(5, 'Josiah', 'popuqinu@mailinator.com', NULL, '$2y$10$kpJJQwc624xyCG9iRdmJqOgOUZHFdZx5sA879N3bCsA0Dr6zt8ONK', 'user', NULL, '2023-06-23 22:27:06', '2023-06-23 22:27:06', NULL, 'Flores', 'Quia est minima dolo', 'Necessitatibus nihil', '80928'),
(6, 'Zeus', 'wovinevi@mailinator.com', NULL, '$2y$10$alhjihv7gbp4mmlrRnLmJugAAINZQ0BfL5cHEsQ1kSb1x1InI/v6K', 'user', NULL, '2023-06-23 22:27:11', '2023-06-23 22:27:11', NULL, 'Hampton', 'A sit sequi earum qu', 'Sunt qui aut in vel', '60379');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_email_unique` (`email`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
