-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 10:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kenshindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `character_level_up_items`
--

CREATE TABLE `character_level_up_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `materialType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rarity` smallint(6) NOT NULL,
  `obtainedFrom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `character_level_up_items`
--

INSERT INTO `character_level_up_items` (`id`, `name`, `description`, `materialType`, `rarity`, `obtainedFrom`, `imgUrl`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Slime Condensate', 'A thick coating found on slimes. Most commonly seen material in elemental workshops.', 'Character Level-Up Material', 1, 'Dropped by slimes, Stardust Exchange', 'https://res.cloudinary.com/genshin/image/upload/sprites/UI_ItemIcon_112002', NULL, NULL, NULL),
(2, 'Slime Secretions', 'Mildly purified slime secretions. Harmful to the skin. Please avoid direct exposure.', 'Character Level-Up Material', 2, 'Crafted, Dropped by Lv. 40+ slimes, Stardust Exchange', 'https://res.cloudinary.com/genshin/image/upload/sprites/UI_ItemIcon_112003', NULL, NULL, NULL),
(3, 'Slime Concentrate', 'Concentrated slime essence. When left alone, it will begin to move on its own.', 'Character Level-Up Material', 3, 'Crafted, Dropped by Lv. 60+ slimes', 'https://res.cloudinary.com/genshin/image/upload/sprites/UI_ItemIcon_112004', NULL, NULL, NULL),
(4, 'Damaged Mask', 'A broken bone mask that once belonged to some hilichurl. Now more broken than complete, it can no longer perform its primary function.', 'Character Level-Up Material', 1, 'Dropped by hilichurls, Dropped uncommonly by hilichurl archers, Dropped uncommonly by samachurls, Dropped uncommonly by mitachurls, Dropped uncommonly by lawachurls, Stardust Exchange', 'https://res.cloudinary.com/genshin/image/upload/sprites/UI_ItemIcon_112005', NULL, NULL, NULL),
(5, 'Stained Mask', 'A bone mask, covered in unidentifiable stains, that emanates a mysterious odor. Yet such is the devotion of hilichurls to masks that they will wear it nonetheless.', 'Character Level-Up Material', 2, 'Crafted, Dropped by Lv. 40+ hilichurls, Dropped uncommonly by Lv. 40+ hilichurl archers, Dropped uncommonly by Lv. 40+ samachurls, Dropped uncommonly by Lv. 40+ mitachurls, Dropped uncommonly by Lv. 40+ lawachurls, Stardust Exchange', 'https://res.cloudinary.com/genshin/image/upload/sprites/UI_ItemIcon_112006', NULL, NULL, NULL);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_11_06_035258_create_character_level_up_items_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `character_level_up_items`
--
ALTER TABLE `character_level_up_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `character_level_up_items_name_unique` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `character_level_up_items`
--
ALTER TABLE `character_level_up_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
