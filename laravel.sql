-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 04:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campos`
--

CREATE TABLE `campos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_evento` date NOT NULL,
  `nome_instituicao` varchar(255) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `tempo_total` int(11) NOT NULL,
  `pagamento` decimal(10,2) NOT NULL,
  `observacao` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campos`
--

INSERT INTO `campos` (`id`, `data_evento`, `nome_instituicao`, `hora_inicio`, `hora_fim`, `tempo_total`, `pagamento`, `observacao`, `created_at`, `updated_at`) VALUES
(3, '2026-05-18', 'unilicungo', '02:56:00', '06:00:00', 3, 920.00, 'tudo andar', '2024-05-17 06:50:54', '2024-05-19 01:38:11'),
(5, '2024-05-20', 'HCB', '05:00:00', '07:00:00', 2, 600.00, 'fghhahh', '2024-05-19 00:13:38', '2024-05-19 00:13:38'),
(6, '2024-06-16', 'unilicungo', '08:00:00', '10:30:00', 3, 750.00, 'tudo', '2024-06-10 10:07:45', '2024-06-10 10:07:45');

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
-- Table structure for table `ginasios`
--

CREATE TABLE `ginasios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entidade` varchar(255) NOT NULL,
  `nome_instituicao` varchar(255) DEFAULT NULL,
  `nome_ocupante` varchar(255) NOT NULL,
  `tipo_evento` varchar(255) NOT NULL,
  `data_evento` date NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `responsavel` varchar(255) DEFAULT NULL,
  `pagamento` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ginasios`
--

INSERT INTO `ginasios` (`id`, `entidade`, `nome_instituicao`, `nome_ocupante`, `tipo_evento`, `data_evento`, `hora_inicio`, `hora_fim`, `contacto`, `responsavel`, `pagamento`, `created_at`, `updated_at`) VALUES
(3, 'Instituição', 'unilicungo', 'hg', 'palestra', '2024-05-29', '08:58:00', '19:57:00', '566443', 'chirico', 50000.00, '2024-05-19 00:53:02', '2024-06-06 11:23:03'),
(5, 'Escola', 'Escola sansao mutemba', 'luis comodo', 'graduacao', '2024-06-13', '08:00:00', '14:30:00', '8766565544', 'dra rita', 50000.00, '2024-06-06 11:19:45', '2024-06-06 11:40:54');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_16_200953_create_campos_table', 1),
(5, '2024_05_17_090752_create_ginasio_table', 2),
(6, '2024_05_17_113200_create_ginasio_table', 3),
(7, '2024_05_17_183550_create_reservas_table', 4),
(8, '2024_05_19_005328_add_tempo_total_and_pagamento_to_campos_table', 5),
(9, '2024_05_19_005654_add_tempo_total_and_pagamento_to_campos_table', 6),
(10, '2024_05_19_013918_add_pagamento_to_ginasios_table', 7),
(11, '2024_05_19_100357_create_receitas_table', 8),
(12, '2024_05_19_210705_create_receitas_table', 9),
(13, '2024_05_19_222443_add_saidas_and_valor_existente_to_receitas_table', 10),
(14, '2024_06_10_202701_create_usuarios_table', 11);

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
-- Table structure for table `receitas`
--

CREATE TABLE `receitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mes` varchar(255) NOT NULL,
  `reserva` decimal(10,2) NOT NULL DEFAULT 0.00,
  `ginasio` decimal(10,2) NOT NULL DEFAULT 0.00,
  `campo` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `saidas` decimal(10,2) NOT NULL DEFAULT 0.00,
  `valor_existente` decimal(10,2) GENERATED ALWAYS AS (`reserva` + `ginasio` + `campo` - `saidas`) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receitas`
--

INSERT INTO `receitas` (`id`, `mes`, `reserva`, `ginasio`, `campo`, `created_at`, `updated_at`, `saidas`) VALUES
(1, '2024-05', 109700.00, 50000.00, 600.00, '2024-05-19 20:12:21', '2024-05-19 22:01:33', 50000.00),
(2, '2026-05', 0.00, 0.00, 920.00, '2024-05-19 20:12:21', '2024-06-06 11:34:01', 0.00),
(3, '2024-06', 23800.00, 500000.00, 0.00, '2024-06-06 11:31:36', '2024-06-06 11:34:01', 10000.00);

-- --------------------------------------------------------

--
-- Table structure for table `reservas`
--

CREATE TABLE `reservas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_ocupante` varchar(255) NOT NULL,
  `casa_a_ocupar` varchar(255) NOT NULL,
  `data_entrada` date NOT NULL,
  `data_saida` date NOT NULL,
  `numero_dias` int(11) NOT NULL,
  `valor_total` decimal(10,2) NOT NULL,
  `pagamento` varchar(255) NOT NULL DEFAULT 'Pendente',
  `contacto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservas`
--

INSERT INTO `reservas` (`id`, `nome_ocupante`, `casa_a_ocupar`, `data_entrada`, `data_saida`, `numero_dias`, `valor_total`, `pagamento`, `contacto`, `created_at`, `updated_at`) VALUES
(1, 'hemidio chirico', 'Suite', '2024-05-18', '2024-06-05', 18, 108000.00, 'pago', '566443', '2024-05-17 20:08:56', '2024-05-18 19:03:09'),
(2, 'hemidio', 'Casa de Hospede', '2024-05-18', '2024-05-19', 1, 1700.00, 'pago', '566443', '2024-05-18 19:23:26', '2024-05-19 22:00:32'),
(3, 'luis comodo', 'Suite', '2024-06-13', '2024-06-27', 14, 23800.00, 'pago', '8766565544', '2024-06-06 11:24:58', '2024-06-06 11:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7CPn0HNXUt5p44nXMf8ak8sc0i66t0du18kWNGLr', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieFEybnVUWGhKMmZPVVhwbFZDMTJvTnpqcVJPZXRDYVQyN3g0Z1ExbyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXNpZGVuY2lhL3JlbGF0b3Jpby9wZGY/ZGF0YT0mcGFnYW1lbnRvPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1718061261);

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
(1, 'chirico', 'chirico@gmail.com', NULL, '$2y$12$HjxAWVu5tNaKKke894q0wu5jDZrY6jEFuPoxkdmtvlLaejGRcI3UG', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `created_at`, `updated_at`) VALUES
(1, 'chirico', 'chirico@gmail.com', '$2y$12$HjxAWVu5tNaKKke894q0wu5jDZrY6jEFuPoxkdmtvlLaejGRcI3UG', NULL, NULL),
(2, 'chirico', 'admin@mail.com', '$2y$12$.jwrNC/qeKUMyE./KHE/zOEkIcpXObBgnsAiSXyTYguAmwSX0qWJa', '2024-06-10 20:46:40', '2024-06-10 20:46:40'),
(3, 'admin2', 'a@gmail.com', '$2y$12$hmnLBX1BbcvVAx8WZ.rZvO/bJvVxx1CE9UTjIsA7ac3SqI.d4NJmy', '2024-06-10 20:51:13', '2024-06-10 20:51:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `campos`
--
ALTER TABLE `campos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `ginasios`
--
ALTER TABLE `ginasios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuarios_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campos`
--
ALTER TABLE `campos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ginasios`
--
ALTER TABLE `ginasios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
