-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 03:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `economic-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(6, 'Customer One', '09777777777', 'Yangon', '2021-11-08 04:08:08', '2021-11-08 04:08:08'),
(7, 'Customer Two', '09777777777', 'Yangon', '2021-11-10 02:16:49', '2021-11-10 02:16:49');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_02_031902_create_products_table', 2),
(6, '2021_11_04_034248_create_services_table', 3),
(7, '2021_11_06_225552_create_customers_table', 4),
(8, '2021_11_06_225947_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `image`, `title`, `quantity`, `price`, `customer_id`, `created_at`, `updated_at`) VALUES
(6, '519305717laptop.jpg', 'Dell I5', 1, 1100000, 6, '2021-11-08 04:08:08', '2021-11-08 04:08:08'),
(7, '1691402956laptop.jpg', 'Lenovo', 1, 1200000, 6, '2021-11-08 04:08:08', '2021-11-08 04:08:08'),
(8, '1198117424images (3).jfif', 'Dell I3', 1, 800000, 7, '2021-11-10 02:16:49', '2021-11-10 02:16:49'),
(9, '1125170395images (12).jfif', 'Dell I5', 1, 1100000, 7, '2021-11-10 02:16:49', '2021-11-10 02:16:49');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Dell I3', 'Dell I3 10th Generation', '1198117424images (3).jfif', 800000, '2021-11-04 01:18:52', '2021-11-08 11:33:17'),
(2, 'Dell I5', 'Dell I5 10th generation', '1125170395images (12).jfif', 1100000, '2021-11-04 10:38:07', '2021-11-08 11:37:11'),
(4, 'Lenovo', 'Lenovo I5 10th Generation', '1130748672images (1).jfif', 1200000, '2021-11-05 04:16:59', '2021-11-08 11:34:40'),
(5, 'Lenovo I5', 'Lenovo I5 10th Generation', '1524562508download.jfif', 1200000, '2021-11-06 00:06:48', '2021-11-08 11:35:07'),
(6, 'Acer I3', 'Acer I3 10th Generation', '590878145images (5).jfif', 900000, '2021-11-06 00:07:24', '2021-11-08 11:35:39'),
(7, 'Acer I5', 'Acer I5 10th Generation', '671034566laptop.jpg', 1200000, '2021-11-06 00:08:05', '2021-11-06 00:08:05'),
(8, 'HP I3', 'HP I3 10th Generation', '713824419images (12).jfif', 900000, '2021-11-06 00:08:41', '2021-11-08 11:36:22'),
(9, 'HP I5', 'HP I5 10th Generation', '1764886529images (14).jfif', 1200000, '2021-11-06 00:09:22', '2021-11-08 11:36:40'),
(10, 'HP I5', 'HP I5 7th Generation', '716557940images (13).jfif', 900000, '2021-11-08 11:40:56', '2021-11-08 11:40:56'),
(11, 'HP I5', 'HP I5 7th Generation', '1102817100images (13).jfif', 800000, '2021-11-08 11:41:36', '2021-11-08 11:41:36'),
(12, 'Dell I5', 'Dell I5 10th Generation', '597523479images (2).jfif', 1200000, '2021-11-10 02:26:19', '2021-11-10 02:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Digital Marketing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra sapien nibh. Nulla facilisi. Maecenas luctus enim orci, ac pellentesque nisi cursus ac. Maecenas id velit ac libero facilisis bibendum. Proin id neque erat. Vivamus nisi massa, sodales ac luctus quis, maximus et mauris.', '1960918732digital.jpg', '2021-11-06 01:22:18', '2021-11-06 01:22:18'),
(5, 'Android Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra sapien nibh. Nulla facilisi. Maecenas luctus enim orci, ac pellentesque nisi cursus ac. Maecenas id velit ac libero facilisis bibendum. Proin id neque erat. Vivamus nisi massa, sodales ac luctus quis, maximus et mauris.', '604244914android3.jpg', '2021-11-06 01:22:44', '2021-11-06 01:22:44'),
(6, 'Web Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pharetra sapien nibh. Nulla facilisi. Maecenas luctus enim orci, ac pellentesque nisi cursus ac. Maecenas id velit ac libero facilisis bibendum. Proin id neque erat. Vivamus nisi massa, sodales ac luctus quis, maximus et mauris.', '1572570040web.jpg', '2021-11-06 01:23:06', '2021-11-06 01:23:06');

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
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ko Ko', 'koko@gmail.com', NULL, '$2y$10$YfrL/kZvHaPC9EOA8ecMH..oYz3u.43c20S3NxPO8uE5e7yr7Trl.', '1315448025testimonials-1.jpg', NULL, '2021-11-02 00:18:31', '2021-11-05 11:16:37'),
(5, 'Aung Aung', 'aungaung@gmail.com', NULL, '$2y$10$.5tYe9ntZ0TZV19xp7YEouKpZsgttyGih1ivnlgxHpUb4usRpZv0q', '395386399testimonials-4.jpg', NULL, '2021-11-05 09:59:25', '2021-11-05 09:59:25'),
(6, 'admin', 'admin@gmail.com', NULL, '$2y$10$DtYv0eq8CBzlwjqgjCmGTubqumCn8W/SpNJMO17/kfqr11JpySkv6', '598102700testimonials-3.jpg', NULL, '2021-11-08 11:43:05', '2021-11-08 11:43:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
