-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 09:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(20) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `room_id` varchar(255) NOT NULL,
  `checkin_date` varchar(255) NOT NULL,
  `checkout_date` varchar(255) NOT NULL,
  `total_adults` varchar(255) NOT NULL,
  `total_children` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `customer_id`, `room_id`, `checkin_date`, `checkout_date`, `total_adults`, `total_children`, `ref`, `created_at`, `updated_at`, `price`) VALUES
(12, 1, '14', '2024-02-11', '2024-02-12', '5', '1', 'Customer', '2024-02-11 01:48:47', '2024-02-11 01:48:47', '444');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `email`, `password`, `mobile`, `address`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '123', 'test', '2024-02-03 23:33:39', '2024-02-03 23:33:39'),
(2, 'kang', 'kang@gmail.com', 'af13c68d557406c432b162e9de183a2643f8073f', '1234', 'kang', '2024-02-04 00:23:30', '2024-02-04 00:23:30');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `title`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'department1666asdasd', 'department199asd', '2024-02-03 20:29:03', '2024-02-04 00:58:30'),
(2, 'test233', 'test233', '2024-02-04 00:05:01', '2024-02-04 00:05:01'),
(3, 'depart 3', 'deast', '2024-02-04 00:20:26', '2024-02-04 00:20:26'),
(4, 'ttttt', 'tttt', '2024-02-04 00:20:48', '2024-02-04 00:20:48'),
(5, 'test', 'test', '2024-02-04 00:41:59', '2024-02-04 00:41:59'),
(6, 'asd', 'asd', '2024-02-04 00:42:30', '2024-02-04 00:42:30'),
(7, 'ghj', 'ghj', '2024-02-04 00:53:37', '2024-02-04 00:53:37');

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
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `roomtype_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `title`, `roomtype_id`, `created_at`, `updated_at`) VALUES
(5, 'A101', '12', '2024-02-10 21:33:12', '2024-02-10 21:33:12'),
(6, 'A102', '12', '2024-02-10 21:34:01', '2024-02-10 21:34:08'),
(7, 'B101', '13', '2024-02-10 21:34:22', '2024-02-10 21:34:22'),
(8, 'B102', '13', '2024-02-10 21:34:30', '2024-02-10 21:34:30'),
(9, 'C101', '14', '2024-02-10 21:34:38', '2024-02-10 21:34:38'),
(10, 'C102', '14', '2024-02-10 21:34:45', '2024-02-10 21:34:45'),
(11, 'D101', '15', '2024-02-10 21:34:53', '2024-02-10 21:34:53'),
(12, 'D102', '15', '2024-02-10 21:35:00', '2024-02-10 21:35:00'),
(13, 'E101', '16', '2024-02-10 21:35:05', '2024-02-10 21:35:05'),
(14, 'E102', '16', '2024-02-10 21:35:11', '2024-02-10 21:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`id`, `title`, `detail`, `price`, `created_at`, `updated_at`) VALUES
(12, 'test1', 'test', '333', '2024-02-10 21:10:15', '2024-02-10 21:32:08'),
(13, 'test2', 'test', '333', '2024-02-10 21:13:08', '2024-02-10 21:32:17'),
(14, 'test3', 'test', '333', '2024-02-10 21:13:17', '2024-02-10 21:32:26'),
(15, 'test4', 'test', '44', '2024-02-10 21:13:36', '2024-02-10 21:32:33'),
(16, 'test5', 'test', '444', '2024-02-10 21:15:28', '2024-02-10 21:32:41'),
(22, 'img', 'img', '50', '2024-02-10 21:53:56', '2024-02-10 21:53:56'),
(23, 'img', 'img', '50', '2024-02-10 21:55:08', '2024-02-10 21:55:08'),
(24, 'img', 'img', '50', '2024-02-10 21:57:52', '2024-02-10 21:57:52'),
(25, 'img', 'img', '50', '2024-02-10 21:58:43', '2024-02-10 21:58:43'),
(26, 'img2', 'img', '2000', '2024-02-10 22:11:57', '2024-02-10 22:11:57'),
(27, 'test', 'test', '35', '2024-02-11 01:49:38', '2024-02-11 01:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `roomtypeimages`
--

CREATE TABLE `roomtypeimages` (
  `id` int(20) NOT NULL,
  `roomtype_id` int(11) NOT NULL,
  `img_src` text NOT NULL,
  `img_alt` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomtypeimages`
--

INSERT INTO `roomtypeimages` (`id`, `roomtype_id`, `img_src`, `img_alt`, `created_at`, `updated_at`) VALUES
(2, 26, 'public/imgs/96B77iJr0SDzTJ2vHK67pmohzneHN0xAYYdcYfQM.jpg', 'img2', '2024-02-10 22:11:57', '2024-02-10 22:11:57'),
(19, 26, 'public/imgs/nJQz2VSkqwuY7lAOMlfGIh6D2dE1u4QsBnGmR8Tz.jpg', 'img2', '2024-02-11 00:20:10', '2024-02-11 00:20:10'),
(20, 25, 'public/imgs/EgckwEnAzYxJsmFoI2WEboeoo9JkdgO4ndVXZdjs.jpg', 'img', '2024-02-11 00:43:51', '2024-02-11 00:43:51'),
(21, 27, 'public/imgs/id88rlMVL80CHeAqZAnS1JASJ2giIEgL8dtr547w.jpg', 'test', '2024-02-11 01:49:38', '2024-02-11 01:49:38'),
(22, 27, 'public/imgs/amm9XVQRApNSPLy9RW2qKggDRtnUpviT4ZAnSsBM.jpg', 'test', '2024-02-11 01:49:38', '2024-02-11 01:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `salary_amt` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `full_name`, `salary_amt`, `created_at`, `updated_at`, `department_id`) VALUES
(1, 'test', '3000', '2024-01-27 23:38:30', '2024-02-03 20:58:16', 1),
(12, '456', '456', '2024-02-04 00:11:29', '2024-02-04 00:12:25', 1),
(13, 'asd', '20', '2024-02-04 00:20:00', '2024-02-04 00:20:40', 3),
(14, 'test', '4', '2024-02-04 00:51:14', '2024-02-04 00:51:14', 1),
(15, 'dfg', '4', '2024-02-04 00:51:57', '2024-02-04 00:51:57', 1),
(16, 'test', '4', '2024-02-04 00:52:31', '2024-02-04 00:52:31', 1),
(17, 'asd', '123', '2024-02-04 00:59:16', '2024-02-04 00:59:16', 5),
(18, 'asd', '123', '2024-02-04 01:02:43', '2024-02-04 01:02:43', 3),
(19, 'asd', '123', '2024-02-04 01:02:58', '2024-02-04 01:02:58', 3),
(20, 'asd', '435', '2024-02-04 01:03:05', '2024-02-04 01:03:05', 6),
(21, 'asd', '435', '2024-02-04 01:03:31', '2024-02-04 01:03:31', 6),
(22, 'qwe', '333', '2024-02-04 01:03:37', '2024-02-04 01:03:37', 2),
(23, 'qwe', '333', '2024-02-04 01:03:58', '2024-02-04 01:03:58', 2),
(24, 'qwe', '666', '2024-02-04 01:04:06', '2024-02-04 01:04:06', 3),
(25, 'qwe', '666', '2024-02-04 01:06:56', '2024-02-04 01:06:56', 3),
(26, 'asd', '33', '2024-02-04 01:07:09', '2024-02-04 01:07:09', 5),
(27, '777', '777', '2024-02-04 01:07:28', '2024-02-04 01:07:28', 4);

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
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
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomtypeimages`
--
ALTER TABLE `roomtypeimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `roomtypeimages`
--
ALTER TABLE `roomtypeimages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
