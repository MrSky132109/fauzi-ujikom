-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2024 pada 07.36
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Novel', '2024-02-28 07:46:04', '2024-02-28 07:46:04'),
(3, 'Religi', '2024-02-28 07:46:04', '2024-02-28 07:46:04'),
(5, 'Self improvment', '2024-02-28 07:46:04', '2024-02-29 21:17:44'),
(7, 'Self 2', '2024-03-01 01:47:33', '2024-03-01 01:47:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_22_165012_create_tb_bukus_table', 1),
(6, '2024_02_28_015538_rak', 2),
(7, '2024_02_28_142822_kategori', 3),
(8, '2024_02_28_144124_kategori', 4),
(9, '2024_02_28_144455_kategori', 5),
(10, '2024_02_28_173944_create_members_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` bigint(20) UNSIGNED NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_return_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `user_id`, `buku_id`, `rent_date`, `return_date`, `actual_return_date`, `created_at`, `updated_at`) VALUES
(3, 3, 3, '2024-02-29', '2024-03-05', NULL, '2024-02-28 19:35:09', '2024-02-28 19:35:09'),
(4, 3, 4, '2024-02-29', '2024-03-05', '2024-03-01', '2024-02-28 19:35:30', '2024-03-01 21:35:31'),
(5, 3, 1, '2024-02-29', '2024-03-05', '2024-03-02', '2024-02-28 19:36:52', '2024-03-01 21:22:01'),
(6, 6, 2, '2024-02-29', '2024-03-05', '2024-03-13', '2024-02-28 19:37:45', '2024-03-01 21:19:54'),
(7, 12, 1, '2024-03-01', '2024-03-06', NULL, '2024-03-01 01:32:59', '2024-03-01 01:32:59'),
(8, 6, 3, '2024-03-01', '2024-03-06', NULL, '2024-03-01 01:36:10', '2024-03-01 01:36:10'),
(9, 11, 3, '2024-03-01', '2024-03-06', '2024-03-29', '2024-03-01 01:50:22', '2024-03-01 21:22:17'),
(10, 3, 3, '2024-03-02', '2024-03-07', NULL, '2024-03-01 20:04:56', '2024-03-01 20:04:56'),
(11, 3, 4, '2024-03-02', '2024-03-07', NULL, '2024-03-01 21:50:24', '2024-03-01 21:50:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `tahun_terbit` date DEFAULT NULL,
  `penerbit` varchar(255) NOT NULL,
  `genre` enum('horor','komedi','misteri','drama','thriller','romance','self-improvment','religi') NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `kategori_id` bigint(11) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `image`, `judul_buku`, `tahun_terbit`, `penerbit`, `genre`, `penulis`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, '2024-02-289786020324784_Hujan-Cover-Baru-2018.jpg', 'Hujan', '2021-12-26', 'Pt. Gramedia Pustaka Umum', 'romance', 'Tere Liye', 1, '2024-02-27 19:30:58', '2024-02-27 19:30:58'),
(3, '2024-02-28105261_f.jpg', 'Laut Bercerita', '2019-05-01', 'Kepustakaan Populer Gramedia', 'drama', 'Leila S. Chudori', 1, '2024-02-27 21:08:42', '2024-02-28 01:08:05'),
(4, '2024-02-28realface.jpg', 'Real Face', '2023-11-29', 'Penerbit Haru', 'thriller', 'Chinen Makoto', 1, '2024-02-28 10:06:07', '2024-02-28 10:06:07'),
(6, '2024-03-01bhLGglhg_400x400.jpg', 'TES2', '2024-03-22', 'ASDSA', 'horor', 'ASDAS', 1, '2024-03-01 03:24:15', '2024-03-01 17:42:51'),
(7, '2024-03-01pngwing.com (1).png', 'tes buku9', '2024-03-15', 'ASDASDAS', 'horor', 'ASDAS', 1, '2024-03-01 03:27:38', '2024-03-01 03:27:38'),
(8, '2024-03-02unnamed.png', 'ANIMEKU', '2024-03-15', 'APA AJA', 'thriller', 'APA AJA', 5, '2024-03-01 21:49:12', '2024-03-01 21:49:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `buku_id` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`id`, `user_id`, `buku_id`, `ulasan`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'saaassd', 2, '2024-03-28 03:03:52', '2024-03-15 03:03:52'),
(2, 3, 4, 'apapun', 2, '2024-03-01 18:55:35', '2024-03-01 18:55:35'),
(4, 3, 6, 'asdas', 4, '2024-03-01 19:09:43', '2024-03-01 19:09:43'),
(5, 3, 3, 'asdas', 3, '2024-03-01 19:10:11', '2024-03-01 19:10:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','petugas','member') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `status` enum('aktif','tidak-aktif') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `image`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '', 'uziadmin', 'fauziadmin@gmail.com', NULL, '$2y$10$7CRLV250hZIofRTcn9Cr7e2qksiX00kcb4TzbtgKWgd63jCMf.Sa6', 'admin', 'aktif', NULL, '2024-02-27 19:26:25', '2024-03-01 22:03:32'),
(2, '', 'uzipetugas', 'fauzipetugas@gmail.com', NULL, '$2y$10$PhtmEpX6gq5pj0wXLvh90O4soVXL6Y7XJMDiJS7rbJrf4Pdm1JMfS', 'petugas', 'aktif', NULL, '2024-02-27 19:26:25', '2024-03-01 22:28:33'),
(3, '', 'uzimember', 'fauzimember@gmail.com', NULL, '$2y$10$kO9IFfnKV6v5KDRRMFfzUenPbW.dF0YWtLKEEjiOZNlZ24//zZ/Q2', 'member', 'aktif', NULL, '2024-02-27 19:26:25', '2024-03-01 22:04:07'),
(5, '', 'Petugas baru', 'petugas@gmail.com', NULL, '$2y$10$PN.ewBUE2UQAwrLLjsfX..kdxxz39vhWS7Sa0D1HVhi8ZYEvHkiMu', 'petugas', 'tidak-aktif', NULL, '2024-02-27 19:42:03', '2024-03-01 22:28:54'),
(6, '', 'nalar', 'nalar@gmail.com', NULL, '$2y$10$SigtRKLHZDYl/6li1yV2Oe.lPO16TKtZ.U/mSTOIw8iItPb3qiT5G', 'member', NULL, NULL, '2024-02-27 19:42:28', '2024-02-28 01:33:35'),
(7, '', 'eza', 'eza@gmail.com', NULL, '$2y$10$/Q5aaIfe0Onn3Fn/BLXrfOcDNBW1qEATDbsctwICC/ZzPrgVe1BnK', 'petugas', NULL, NULL, '2024-02-27 19:57:08', '2024-02-28 01:24:19'),
(9, '', 'admin', 'admin@gmail.com', NULL, '$2y$10$OP9dhRmmpZtdF7kI1X.pnOKEPsvEDWyelliM2ZTvb1pxVYgTYr90m', 'admin', NULL, NULL, '2024-02-28 01:19:24', '2024-02-28 01:19:24'),
(10, '', 'Petugasdua', 'petugas2@gmail.com', NULL, '$2y$10$K4ooeHucjyIv3U54l9zZ/O6WUUWheTgHwx2JL4otYMoISmEkD3Q3O', 'petugas', NULL, NULL, '2024-02-29 21:20:21', '2024-02-29 21:20:40'),
(11, '', 'rehan', 'rehan@gmail.com', NULL, '$2y$10$tJIDLe6sP8P3V9jk77uQCu4b7iWw6vIAqFi.j7mJXVfQKZXO3A1pi', 'member', NULL, NULL, '2024-03-01 00:56:12', '2024-03-01 00:56:12'),
(12, '', 'ayu', 'ayu@gmail.com', NULL, '$2y$10$mwL6RYwAFEOXzrHwqOxfc.kvdRgyF7pH1x68k6T/r42KaLk4BNbw2', 'member', NULL, NULL, '2024-03-01 01:04:32', '2024-03-01 01:04:32'),
(13, '', 'fawaz2', 'fawaz@gmail.com', NULL, '$2y$10$Z0vUkfQYs75BBfjLgAkb8u6GAV4myoKsHfP4GK/R6OSDbPyITHCXy', 'petugas', NULL, NULL, '2024-03-01 01:46:22', '2024-03-01 01:46:53'),
(14, '', 'tes2', 'fauzias@gmail.com', NULL, '$2y$10$UJdJZiw0S0EjuPFd/.WzyOZKXr9bXYRSO1TPDjp6Onz.VMW2GsyI2', 'member', NULL, NULL, '2024-03-01 03:26:44', '2024-03-01 03:26:44'),
(16, NULL, 'tes4', 'tes4@gmail.com', NULL, '$2y$10$HTscuxs5q5PtcThN0klBx.OIGcsIewZXa.sNb48r2CKkBBmMbqSUS', 'admin', NULL, NULL, '2024-03-01 21:53:18', '2024-03-01 21:53:18');

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
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_kategori_unique` (`kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`kategori_id`);

--
-- Indeks untuk tabel `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ck` (`buku_id`),
  ADD KEY `fk2` (`user_id`);

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
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `fk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ck` FOREIGN KEY (`buku_id`) REFERENCES `tb_buku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
