-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2020 at 08:54 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `department_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_setting`
--

CREATE TABLE `basic_setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `footer_logo` varchar(100) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `section_type` int(11) DEFAULT NULL,
  `slider_lower_heading` text,
  `slider_lower_paragraph` varchar(100) DEFAULT NULL,
  `info_image` varchar(100) DEFAULT NULL,
  `info_heading` varchar(100) DEFAULT NULL,
  `info_paragraph` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basic_setting`
--

INSERT INTO `basic_setting` (`id`, `logo`, `footer_logo`, `favicon`, `link`, `icon`, `section_type`, `slider_lower_heading`, `slider_lower_paragraph`, `info_image`, `info_heading`, `info_paragraph`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, '##', '<i class=\"fa fa-facebook\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-30 01:14:25', '2020-03-30 01:36:53'),
(2, NULL, NULL, NULL, '#', '<i class=\"fa fa-twitter\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-30 01:32:33', '2020-03-30 01:32:33'),
(3, NULL, NULL, NULL, '#', '<i class=\"fa fa-google-plus\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-30 01:33:27', '2020-03-30 01:33:27'),
(5, NULL, NULL, NULL, '#', '<i class=\"fa fa-linkedin\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-30 01:47:13', '2020-03-30 01:47:13'),
(6, NULL, NULL, NULL, '', '', 4, 'Making the World Since 1987', 'We provides best industry and company services', NULL, NULL, NULL, '2020-03-30 01:47:13', '2020-03-30 03:16:45'),
(7, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557363.png', 'Petrolium Refinery', 'We are providing different services in this sector to wide area of world with cleanest line of services. Customised cleaning line system.', '2020-03-30 03:36:03', '2020-03-30 03:36:03'),
(8, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557906.png', 'Power & Energy', 'Tectxon is committed to developing solutions that reduced operating costs and alignment with electronic products and instrument.', '2020-03-30 03:45:06', '2020-03-30 03:45:06'),
(9, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557955.png', 'Mechanical Works', 'We provide embedded technology with innovation and digital capabilities to transform your functions in our latest products.', '2020-03-30 03:45:55', '2020-03-30 03:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Energy', '2020-03-15 19:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `start_date`, `end_date`, `details`, `department_id`, `sub_dep_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abel Cannon', '2020-01-01 00:00:00', '2020-02-01 00:00:00', '<p><br></p><p>Excepturi sit, ipsum.sdfsf<br></p><p><br></p>', NULL, 1, 18, 1, '2020-03-23 16:42:11', '2020-03-25 01:37:54'),
(2, 'Brenden Schneider', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '<p>Testing updating</p>', 1, NULL, 1, 1, '2020-03-25 01:52:43', '2020-03-25 02:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_03_16_000131_create_departments_table', 2),
(5, '2020_03_16_000144_create_sub_departments_table', 2),
(6, '2020_03_16_043247_add_more_colum_to_subdepartment', 3),
(7, '2020_03_18_054353_add_status_to_sub_departments', 4),
(8, '2020_03_19_043017_create_user_request_table', 5),
(9, '2020_03_20_035131_create_user_categories_table', 6),
(10, '2020_03_20_215251_create_news_table', 7),
(11, '2020_03_21_025439_add_status_to_news', 8),
(13, '2020_03_23_212257_add_status_to_events', 10),
(14, '2020_03_21_194903_create_events_table', 11),
(15, '2020_03_26_064010_create_sources_table', 12),
(16, '2020_03_26_064025_create_source_logs_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `headline`, `body`, `department_id`, `sub_dep_id`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(1, '1584771616.jpeg', 'Fugiat quia omnis es', '<p>asfdsfsafdsfdd</p>', NULL, 1, 18, '2020-03-20 22:19:07', '2020-03-21 23:55:24', 1),
(3, '1584939601.jpeg', 'Aut explicabo Volup', '<p>sfsafasfas</p>', 1, NULL, 1, '2020-03-23 00:00:01', '2020-03-23 00:00:01', 1);

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
-- Table structure for table `sources`
--

CREATE TABLE `sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `name`, `sub_dep_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kennan Schultz', 1, 18, '2020-03-26 03:15:10', '2020-03-26 03:15:10'),
(2, 'Oleg Dalton', 1, 18, '2020-03-26 03:15:54', '2020-03-26 03:15:54'),
(3, 'Oleg Dalton', 1, 18, '2020-03-26 03:16:09', '2020-03-26 03:16:09'),
(4, 'Oleg Dalton', 1, 18, '2020-03-26 03:16:41', '2020-03-26 03:16:41'),
(5, 'Odysseus Schmidt', 4, 19, '2020-03-29 23:59:36', '2020-03-29 23:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `source_logs`
--

CREATE TABLE `source_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `source_logs`
--

INSERT INTO `source_logs` (`id`, `area`, `price`, `date`, `source`, `source_id`, `created_at`, `updated_at`) VALUES
(1, 'asff', '123', '2019-03-01', 'soo', NULL, '2020-03-26 03:01:48', '2020-03-26 03:01:48'),
(2, 'asff', '123', '2019-03-01', 'soo', NULL, '2020-03-26 03:15:10', '2020-03-26 03:15:10'),
(3, 'asff2', '12123', '2018-03-01', 'so2', NULL, '2020-03-26 03:15:10', '2020-03-26 03:15:10'),
(4, 'asff', '123', '2019-03-01', 'soo', 4, '2020-03-26 03:16:41', '2020-03-26 03:16:41'),
(5, 'asff2', '12123', '2018-03-01', 'so2', 4, '2020-03-26 03:16:41', '2020-03-26 03:16:41'),
(6, 'youarea', '1234', '2018-03-01', 'yoursource', 5, '2020-03-29 23:59:36', '2020-03-29 23:59:36'),
(7, 'youarea2', '1234', '2018-03-02', 'yoursource2', 5, '2020-03-29 23:59:36', '2020-03-29 23:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `sub_departments`
--

CREATE TABLE `sub_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_departments`
--

INSERT INTO `sub_departments` (`id`, `department_id`, `name`, `created_at`, `updated_at`, `website`, `address`, `telephone`, `fax`, `status`) VALUES
(1, 1, 'Sub Energy', '2020-03-15 19:00:00', '2020-03-18 01:13:15', 'https://www.google.com/', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '+921111111111', 123456789, 1),
(3, 1, 'Lesley Church', '2020-03-16 00:05:15', '2020-03-16 00:05:15', 'https://www.qonypokynyd.org.uk', 'Doloremque autem rer', '+1 (666) 743-6882', 212324142, 1),
(4, 1, 'Amber Holman', '2020-03-18 00:37:54', '2020-03-18 00:39:04', 'https://www.hirova.in', 'Velit laborum quis f', '+1 (719) 154-5448', 657465657, 1),
(5, 1, 'Kasper Mayo', '2020-03-18 00:50:27', '2020-03-18 00:50:27', 'https://www.temowazusesux.com.au', 'Facilis dolores quo', '+1 (752) 886-9501', 231231231, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `isAdmin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$x3q.9NNYqtBmi5XDHr0.Telw1m0UAIF6eUxWWPkPNvF1v5MtFAAF2', NULL, '2020-03-14 21:11:05', '2020-03-14 21:11:05'),
(18, 'Noah Vega', 'fymolu@mailinator.net', NULL, 0, '$2y$10$x3q.9NNYqtBmi5XDHr0.Telw1m0UAIF6eUxWWPkPNvF1v5MtFAAF2', NULL, '2020-03-18 23:40:24', '2020-03-18 23:40:24'),
(19, 'Deacon Rush', 'sikip@mailinator.com', NULL, 0, '$2y$10$x3q.9NNYqtBmi5XDHr0.Telw1m0UAIF6eUxWWPkPNvF1v5MtFAAF2', NULL, '2020-03-19 23:27:14', '2020-03-19 23:27:14'),
(22, 'Abraham Reilly', 'ryqoridef@mailinator.com', NULL, 0, '$2y$10$svZFXy2p1FU2bP36oPlQWu9uESJhtntKSRMjy.5EmLlSikIyTHFJC', NULL, '2020-03-29 18:53:04', '2020-03-29 18:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_categories`
--

CREATE TABLE `user_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`id`, `user_id`, `sub_dep_id`, `created_at`, `updated_at`) VALUES
(1, 18, 3, '2020-03-19 23:11:16', '2020-03-19 23:11:16'),
(2, 19, 4, '2020-03-29 23:14:52', '2020-03-29 23:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `user_id`, `sub_dep_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, 3, 1, '2020-03-18 23:40:24', '2020-03-19 23:11:16'),
(2, 19, 4, 1, '2020-03-19 23:27:14', '2020-03-29 23:14:52'),
(5, 22, 5, 0, '2020-03-29 18:53:04', '2020-03-29 18:53:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_setting`
--
ALTER TABLE `basic_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_department_id_foreign` (`department_id`),
  ADD KEY `events_sub_dep_id_foreign` (`sub_dep_id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_department_id_foreign` (`department_id`),
  ADD KEY `news_sub_dep_id_foreign` (`sub_dep_id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sources_sub_dep_id_foreign` (`sub_dep_id`),
  ADD KEY `sources_user_id_foreign` (`user_id`);

--
-- Indexes for table `source_logs`
--
ALTER TABLE `source_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `source_logs_source_id_foreign` (`source_id`);

--
-- Indexes for table `sub_departments`
--
ALTER TABLE `sub_departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_departments_department_id_foreign` (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_categories`
--
ALTER TABLE `user_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_categories_user_id_foreign` (`user_id`),
  ADD KEY `user_categories_sub_dep_id_foreign` (`sub_dep_id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_request_user_id_foreign` (`user_id`),
  ADD KEY `user_request_sub_dep_id_foreign` (`sub_dep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_setting`
--
ALTER TABLE `basic_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sources`
--
ALTER TABLE `sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `source_logs`
--
ALTER TABLE `source_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_departments`
--
ALTER TABLE `sub_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_categories`
--
ALTER TABLE `user_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `events_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `news_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sources`
--
ALTER TABLE `sources`
  ADD CONSTRAINT `sources_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `sources_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `source_logs`
--
ALTER TABLE `source_logs`
  ADD CONSTRAINT `source_logs_source_id_foreign` FOREIGN KEY (`source_id`) REFERENCES `sources` (`id`);

--
-- Constraints for table `sub_departments`
--
ALTER TABLE `sub_departments`
  ADD CONSTRAINT `sub_departments_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `user_categories`
--
ALTER TABLE `user_categories`
  ADD CONSTRAINT `user_categories_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `user_categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_request`
--
ALTER TABLE `user_request`
  ADD CONSTRAINT `user_request_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `user_request_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
