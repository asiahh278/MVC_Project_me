-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2023 pada 06.22
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `end_mvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_25_045059_create_motors_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `motors`
--

CREATE TABLE `motors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `motors`
--

INSERT INTO `motors` (`id`, `foto`, `title`, `created_at`, `updated_at`) VALUES
(1, 'B_3218_IDN', 'Honda Beat 2017', NULL, NULL),
(2, 'B_7863_UIN', 'Yamaha Nmax 2017', '2023-04-02 06:58:33', '2023-04-02 06:58:33'),
(3, 'B_8974_OI', 'Honda Beat 2017', '2023-04-02 01:20:41', '2023-04-02 01:20:41'),
(4, 'B_8879_NR', 'Yamaha Nmax 2018', '2023-04-02 01:23:16', '2023-04-02 01:23:16'),
(5, 'BE_6729_WOY', 'Honda PCX 2023', '2023-04-02 01:24:18', '2023-04-02 01:24:18'),
(8, 'B_88769_AN', 'Yamaha Lexi 2020', '2023-04-02 01:30:26', '2023-04-02 01:30:26'),
(9, 'BE_6847_USB', 'Honda Genio 2019', '2023-04-02 01:51:03', '2023-04-02 01:51:03'),
(10, 'BE_6847_USB', 'Honda Genio 2019', '2023-04-02 01:51:09', '2023-04-02 01:51:09'),
(11, 'B_9874_JOY', 'Honda Beat CBS 2018', '2023-04-02 01:52:44', '2023-04-02 01:52:44'),
(13, 'B_8849_HI', 'Honda Vario 110 2017', '2023-04-02 02:14:34', '2023-04-02 02:14:34'),
(17, 'B_9579_NR', 'Honda Lexi 2019', '2023-04-02 02:21:40', '2023-04-02 02:21:40'),
(18, 'B_9579_NR', 'Honda Lexi 2019', '2023-04-02 02:22:39', '2023-04-02 02:22:39'),
(19, 'B_9579_NR', 'Honda Lexi 2019', '2023-04-02 02:23:29', '2023-04-02 02:23:29'),
(20, 'B_3974_OI', 'Yamaha Lexi 2023', '2023-04-02 16:50:28', '2023-04-02 16:50:28'),
(21, 'B_7865_KIO', 'test', '2023-04-02 18:14:18', '2023-04-02 18:14:18'),
(22, 'BE_6729_WA', 'coba', '2023-04-04 16:42:41', '2023-04-04 16:42:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kita Shinsuke', 'kitashinsuke@gmail.com', 'isAuthor', NULL, '$2y$10$3VIdeXPkBxj.KIgMJ4p/Seh3X9nH7ckElmpk6CcmGE5zp3IXp.XFi', NULL, NULL, NULL, NULL, '2023-03-28 18:35:03', '2023-03-28 18:35:03'),
(2, 'William Minerva', 'williamminerva@gmail.com', NULL, NULL, '$2y$10$UPEUXNJV.j/5BILeDBNlBOH48gUUj5LufxWog4.8stS.BXlYiCMJO', NULL, NULL, NULL, NULL, '2023-03-29 23:18:21', '2023-03-29 23:18:21'),
(3, 'Vladilena Millize', 'vladilenamillize@gmail.com', NULL, NULL, '$2y$10$DTlmtx83DBBn5aS1oTczyu95vFrTVpQslstYByJWecEwJHw3zAUrW', NULL, NULL, NULL, NULL, '2023-03-29 23:24:36', '2023-03-29 23:24:36'),
(4, 'Oikawa Tooru', 'oikawatooru@gmail.com', NULL, NULL, '$2y$10$ha0VQ8FgiMo67NpM1CbN9uyjB0BQNveBcaSQxucppKVgyFjEo4n2K', NULL, NULL, NULL, NULL, '2023-03-30 19:19:38', '2023-03-30 19:19:38'),
(5, 'Zen Wistaria', 'zenwistaria@gmail.com', NULL, NULL, '$2y$10$pknywvhlec1Ke4Cm5q5Ime8MM5VaSSQIfJJHUArluITtCQd2wIOG2', NULL, NULL, NULL, NULL, '2023-03-30 20:51:19', '2023-03-30 20:51:19'),
(6, 'Kaguya Shiro', 'kaguyashiro@gmail.com', NULL, NULL, '$2y$10$RAxSLGFa3iBr6ScNsFQx6.t4L7.MUEbmmvmjYpjQ/K60m.kPLy30m', NULL, NULL, NULL, NULL, '2023-04-02 16:38:47', '2023-04-02 16:38:47'),
(8, 'Roronoa Zoro', 'roronoazoro@gmail.com', NULL, NULL, '$2y$10$J8qQIigD04K9uD8v4.j.YeTOo7FHc24s.HdwARxpA.hLWfndeKstG', NULL, NULL, NULL, NULL, '2023-04-02 17:34:48', '2023-04-02 17:34:48'),
(9, 'Akabane Karma', 'akabanekarma@gmail.com', NULL, NULL, '$2y$10$E0tVeV4yOK0kHkGSV14Jp.Dg7rl3XO0uiXXZocvUSgcNKH0Fo2cIS', NULL, NULL, NULL, NULL, '2023-04-02 17:47:40', '2023-04-02 17:47:40'),
(10, 'rpl10', 'rpl10@gmail.com', NULL, NULL, '$2y$10$ZWNCLcFHvk5uqKhoXyJDpeP4pipCVqQEr0borWINWD48ODPydABU.', NULL, NULL, NULL, NULL, '2023-04-02 18:13:13', '2023-04-02 18:13:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `motors`
--
ALTER TABLE `motors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
