-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2022 at 11:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newlara`
--

-- --------------------------------------------------------

--
-- Table structure for table `car_tables`
--

CREATE TABLE `car_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suitcases` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transmition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `air_conditon` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_tables`
--

INSERT INTO `car_tables` (`id`, `name`, `model`, `doors`, `seats`, `suitcases`, `bags`, `transmition`, `air_conditon`, `image`, `class_id`, `created_at`, `updated_at`) VALUES
(1, 'VW Golf VII', 'limousine', '5', '5', '2', '2', 'Manual', 1, 'vehicle1.jpg', 3, NULL, NULL),
(2, 'Audi A1 S-LINE', 'limousine', '5', '5', '2', '2', 'Automatic', 1, 'vehicle2.jpg', 2, NULL, NULL),
(3, 'Toyota Camry', 'limousine', '4', '5', '2', '2', 'Automatic', 1, 'vehicle3.jpg', 1, NULL, NULL),
(4, 'BMW 320 ModernLine', 'limousine', '4', '5', '2', '2', 'Automatic', 1, 'vehicle4.jpg', 1, NULL, NULL),
(5, 'Merdcedes-Benz GLK', 'limousine', '4', '5', '2', '2', 'Automatic', 1, 'vehicle5.jpg', 1, NULL, NULL),
(6, 'VW Passat CC', 'limousine', '4', '5', '2', '2', 'Automatic', 1, 'vehicle6.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_tables`
--

CREATE TABLE `class_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_tables`
--

INSERT INTO `class_tables` (`id`, `class_name`, `price`, `min_age`, `created_at`, `updated_at`) VALUES
(1, 'a', '100.40', '25', NULL, NULL),
(2, 'b', '70.40', '25', NULL, NULL),
(3, 'c', '37.40', '21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_tables`
--

CREATE TABLE `customer_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_tables`
--

INSERT INTO `customer_tables` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `age`, `address`, `city`, `zip_code`, `created_at`, `updated_at`) VALUES
(3, 'asd', 'sad', 'asd@sad.aw', 'sd', '18', 'asdsdasd', 'asdsdsad', '10001', '2022-10-01 18:42:29', '2022-10-01 18:42:29'),
(4, 'ds', 'sd', 'sd@s.s', 'sd', '18', 'asdsdasd', 'asdsdsad', '10001', '2022-10-01 19:18:09', '2022-10-01 19:18:09'),
(5, 'ds', 'sd', 'sd@ss.sd', 'sd', '18', 'asdsdasd', 'asdsdsad', '10001', '2022-10-01 19:19:01', '2022-10-01 19:19:01');

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
(57, '2014_10_12_000000_create_users_table', 1),
(58, '2014_10_12_100000_create_password_resets_table', 1),
(59, '2019_08_19_000000_create_failed_jobs_table', 1),
(60, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(61, '2022_10_01_030344_create_posts_table', 1),
(62, '2022_10_01_031545_create_car_tables_table', 1),
(63, '2022_10_01_031658_create_class_tables_table', 1),
(64, '2022_10_01_031743_create_reservation_tables_table', 2),
(65, '2022_10_01_031805_create_customer_tables_table', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_tables`
--

CREATE TABLE `reservation_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `car_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `pick_up_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_off_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pick_up_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drop_off_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation_tables`
--

INSERT INTO `reservation_tables` (`id`, `car_id`, `customer_id`, `pick_up_location`, `drop_off_location`, `total_price`, `pick_up_time`, `drop_off_time`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Orlando - 2125 W Landstreet Rd', 'Orlando - 2125 W Landstreet Rd', NULL, '10/06/2022 at 12:00 AM', '10/21/2022 at 12:00 AM', '2022-10-01 19:17:11', '2022-10-01 19:17:11'),
(2, 2, 5, 'Denver - 7800 E Tufts Ave', 'Denver - 7800 E Tufts Ave', NULL, '10/20/2022 at 12:00 AM', '10/21/2022 at 12:00 AM', '2022-10-01 19:19:01', '2022-10-01 19:19:01');

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
-- Indexes for table `car_tables`
--
ALTER TABLE `car_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `class_tables`
--
ALTER TABLE `class_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_tables`
--
ALTER TABLE `customer_tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_tables_email_unique` (`email`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_tables`
--
ALTER TABLE `reservation_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `customer_id` (`customer_id`);

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
-- AUTO_INCREMENT for table `car_tables`
--
ALTER TABLE `car_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `class_tables`
--
ALTER TABLE `class_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_tables`
--
ALTER TABLE `customer_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation_tables`
--
ALTER TABLE `reservation_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_tables`
--
ALTER TABLE `car_tables`
  ADD CONSTRAINT `car_tables_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_tables` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservation_tables`
--
ALTER TABLE `reservation_tables`
  ADD CONSTRAINT `reservation_tables_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_tables` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_tables_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `car_tables` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
