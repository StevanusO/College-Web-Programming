-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 12:59 PM
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
-- Database: `pokemondb`
--

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_10_28_062404_create_pokedexs_table', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pokedexs`
--

CREATE TABLE `pokedexs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Height` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pokedexs`
--

INSERT INTO `pokedexs` (`id`, `name`, `category`, `Height`, `Weight`, `abilities`, `type1`, `type2`, `Description`, `Photo`) VALUES
(1, 'Bulbasaur', 'Seed', '2\' 04\"', '15.2', 'Overgrow', 'Grass', 'Poison', 'There is a plant seed on its back right from the day this Pokémon is born. The seed slowly grows larger. While it is young, it uses the nutrients that are stored in the seed on its back in order to grow.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png'),
(2, 'Ivysaur', 'Seed', '3\' 03\"', '28.7', 'Overgrow', 'Grass', 'Poison', 'When the bulb on its back grows large, it appears to lose the ability to stand on its hind legs. Exposure to sunlight adds to its strength. Sunlight also makes the bud on its back grow larger.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png'),
(3, 'Venusaur', 'Seed', '6\' 07\"', '220.5', 'Overgrow', 'Grass', 'Poison', 'Its plant blooms when it is absorbing solar energy. It stays on the move to seek sunlight. A bewitching aroma wafts from its flower. The fragrance becalms those engaged in a battle.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png'),
(4, 'Charmander', 'Lizard', '2\' 00\"', '18.7', 'Blaze', 'Fire', NULL, 'It has a preference for hot things. When it rains, steam is said to spout from the tip of its tail. From the time it is born, a flame burns at the tip of its tail. Its life would end if the flame were to go out.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png'),
(5, 'Charmeleon', 'Flame', '3\' 07\"', '41.9', 'Blaze', 'Fire', NULL, 'It has a barbaric nature. In battle, it whips its fiery tail around and slashes away with sharp claws. If it becomes agitated during battle, it spouts intense flames, incinerating its surroundings.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/005.png'),
(6, 'Charizard', 'Flame', '5\' 07\"', '199.5', 'Blaze', 'Fire', 'Flying', 'It spits fire that is hot enough to melt boulders. It may cause forest fires by blowing flames. Its wings can carry this Pokémon close to an altitude of 4,600 feet. It blows out fire at very high temperatures.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/006.png'),
(7, 'Squirtle', 'Tiny Turtle', '1\' 08\"', '19.8', 'Torrent', 'Water', NULL, 'When it retracts its long neck into its shell, it squirts out water with vigorous force. When it feels threatened, it draws its limbs inside its shell and sprays water from its mouth.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png'),
(8, 'Wartortle', 'Turtle', '3\' 03\"', '49.6', 'Torrent', 'Water', NULL, 'It is recognized as a symbol of longevity. If its shell has algae on it, that Wartortle is very old. It cleverly controls its furry ears and tail to maintain its balance while swimming.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/008.png'),
(9, 'Blastoise', 'Shellfish', '5\' 03\"', '188.5', 'Torrent', 'Water', NULL, 'It crushes its foe under its heavy body to cause fainting. In a pinch, it will withdraw inside its shell. The rocket cannons on its shell fire jets of water capable of punching holes through thick steel.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/009.png'),
(10, 'Caterpie', 'Worm', '1\' 00\"', '6.4', 'Shield Dust', 'Bug', NULL, 'For protection, it releases a horrible stench from the antenna on its head to drive away enemies. Its short feet are tipped with suction pads that enable it to tirelessly climb slopes and walls.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/010.png'),
(11, 'Metapod', 'Cocoon', '2\' 04\"', '21.8', 'Shed Skin', 'Bug', NULL, 'It is waiting for the moment to evolve. At this stage, it can only harden, so it remains motionless to avoid attack. Even though it is encased in a sturdy shell, the body inside is tender. It can’t withstand a harsh attack.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/011.png'),
(12, 'Butterfree', 'Butterfly', '3\' 07\"', '70.5', 'Compound Eyes', 'Bug', 'Flying', 'In battle, it flaps its wings at great speed to release highly toxic dust into the air. It collects honey every day. It rubs honey onto the hairs on its legs to carry it back to its nest.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/012.png'),
(249, 'Lugia', 'Diving', '17\' 01\"', '476.2', 'Pressure', 'Psychic', 'Flying', 'Lugia’s wings pack devastating power—a light fluttering of its wings can blow apart regular houses. As a result, this Pokémon chooses to live out of sight deep under the sea. Lugia’s wings pack devastating power—a light fluttering of its wings can blow apart regular houses. As a result, this Pokémon chooses to live out of sight deep under the sea.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/249.png'),
(643, 'Reshiram', 'Vast White', '10\' 06\"', '727.5 ', 'Turboblaze', 'Dragon', 'Fire', 'This legendary Pokémon can scorch the world with fire. It helps those who want to build a world of truth. When Reshiram’s tail flares, the heat energy moves the atmosphere and changes the world’s weather.', 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/643.png');

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
-- Indexes for dumped tables
--

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pokedexs`
--
ALTER TABLE `pokedexs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pokedexs_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pokedexs`
--
ALTER TABLE `pokedexs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=644;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
