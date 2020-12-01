-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 04:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codehacking`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PHP', NULL, NULL),
(2, 'Laravel', NULL, NULL),
(3, 'Java Scripts', NULL, NULL),
(4, 'Bootstrap', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_27_104339_create_roles_table', 1),
(5, '2020_11_27_104428_create_photos_table', 1),
(8, '2020_11_30_051329_create_posts_table', 2),
(9, '2020_11_30_095241_create_categories_table', 3);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, '1606539079the-witcher-the-witcher-3-wild-hunt-video-games-rpg-portrait-hd-wallpaper-preview.jpg', '2020-11-27 23:21:19', '2020-11-27 23:21:19'),
(2, '1606543162Anim-1.jpg', '2020-11-28 00:29:22', '2020-11-28 00:29:22'),
(3, '1606545583women-face-portrait-blonde-wallpaper-preview.jpg', '2020-11-28 01:09:43', '2020-11-28 01:09:43'),
(4, '1606545601actresses-alexandra-daddario-wallpaper-preview.jpg', '2020-11-28 01:10:01', '2020-11-28 01:10:01'),
(5, '1606545663joker-black-dc-comics-batman-joaquin-phoenix-hd-wallpaper-preview.jpg', '2020-11-28 01:11:03', '2020-11-28 01:11:03'),
(6, '1606546251women-cosplay-harley-quinn-suicide-squad-wallpaper-preview.jpg', '2020-11-28 01:20:51', '2020-11-28 01:20:51'),
(7, '1606638864movie-underworld-blood-wars-kate-beckinsale-selene-underworld-wallpaper-preview.jpg', '2020-11-29 03:04:24', '2020-11-29 03:04:24'),
(8, '1606644784cyberpunk-artwork-sniper-rifle-anime-girls-wallpaper-preview.jpg', '2020-11-29 04:43:04', '2020-11-29 04:43:04'),
(9, '1606644850fantasy-girl-tifa-lockhart-final-fantasy-vii-video-game-characters-video-game-girls-hd-wallpaper-preview.jpg', '2020-11-29 04:44:10', '2020-11-29 04:44:10'),
(10, '1606646202women-blonde-portrait-blue-eyes-wallpaper-preview.jpg', '2020-11-29 05:06:42', '2020-11-29 05:06:42'),
(11, '1606720656overwatch-d-va-overwatch-liang-xing-liang-xing-wallpaper-preview.jpg', '2020-11-30 01:47:36', '2020-11-30 01:47:36'),
(12, '1606720670overwatch-d-va-overwatch-liang-xing-liang-xing-wallpaper-preview.jpg', '2020-11-30 01:47:50', '2020-11-30 01:47:50'),
(13, '1606730695assassins_creed_2016_movie_4k_8k.jpg', '2020-11-30 04:34:55', '2020-11-30 04:34:55'),
(14, '1606734168alexandra_daddario_is_wearing_transparent_light_purple_color_dress_with_smiley_face_4k_hd_celebrities.jpg', '2020-11-30 05:32:48', '2020-11-30 05:32:48'),
(15, '1606734196alexandra_daddario_is_wearing_transparent_light_purple_color_dress_with_smiley_face_4k_hd_celebrities.jpg', '2020-11-30 05:33:16', '2020-11-30 05:33:16'),
(16, '1606734270emilia_clarke_2016_photoshoot.jpg', '2020-11-30 05:34:30', '2020-11-30 05:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `photo_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `photo_id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 11, 3, NULL, 'my first post', 'i love laravle', '2020-11-30 00:38:49', '2020-11-30 00:38:49'),
(2, 1, 1, 12, 'My second', 'wowwww', '2020-11-30 01:47:50', '2020-11-30 01:47:50'),
(3, 1, 2, 13, 'LAravel is bom', 'i loe laravel', '2020-11-30 04:34:55', '2020-11-30 04:34:55'),
(4, 1, 4, 15, 'why not', 'swfewfefewf3r3w', '2020-11-30 05:33:16', '2020-11-30 05:33:16'),
(5, 1, 3, 16, 'Hello PHP', 'hello phphpph', '2020-11-30 05:34:30', '2020-11-30 05:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'administrator', NULL, NULL),
(2, 'author', NULL, NULL),
(3, 'subscriber', NULL, NULL),
(4, 'manager', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `is_active`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `photo_id`) VALUES
(1, 'Edwin Diaz', 1, 1, 'edwin@gmail.com', NULL, '$2y$10$OoFlVvVziH/4Sr3qgUtmLuvnqHhKpENAZ2q/6bkvLEyjWnt.pVvVe', NULL, '2020-11-27 05:35:59', '2020-11-28 01:13:03', '5'),
(8, 'Peter Diaz', 3, 1, 'peter@gmail.com', NULL, '$2y$10$eTgjCeUnKFKFXyYrbiRmJuVjFz0xGx1f06KRHcFHGqwyI3BF05XbO', NULL, '2020-11-27 23:21:20', '2020-11-27 23:21:20', '1'),
(10, 'Maria Zaveri', 4, 1, 'maria@gmail.com', NULL, '$2y$10$kLjU75q.yz8VLrGUIWMtJuiN4tbO2qElf.yPSCUa25fRg4IfKqTO2', NULL, '2020-11-28 00:29:22', '2020-11-29 02:41:45', '3'),
(11, 'Joseph', 3, 0, 'jose@gmail.com', NULL, '$2y$10$9oOKssAgCEKr4l4Sr9ONTeSNrNRV2QYpM8tYgUzSi3QQ.dHEXLgku', NULL, '2020-11-28 01:20:51', '2020-11-29 04:56:03', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`),
  ADD KEY `posts_category_id_index` (`category_id`),
  ADD KEY `posts_photo_id_index` (`photo_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
