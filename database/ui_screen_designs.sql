-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2025 at 04:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afs_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ui_screen_designs`
--

CREATE TABLE `ui_screen_designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ui_screen_id` int(10) UNSIGNED DEFAULT NULL,
  `ui_section_id` int(10) UNSIGNED DEFAULT NULL,
  `ui_entity_id` int(11) NOT NULL,
  `ui_particular_id` int(10) UNSIGNED DEFAULT NULL,
  `ui_particular_detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(1500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ref_1` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ref_2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ref_3` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `by_whom` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `by_whom_desic` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` int(10) UNSIGNED DEFAULT NULL,
  `session_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `approved_by` int(10) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_finalized` tinyint(1) DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ui_screen_designs`
--

INSERT INTO `ui_screen_designs` (`id`, `name`, `description`, `ui_screen_id`, `ui_section_id`, `ui_entity_id`, `ui_particular_id`, `ui_particular_detail`, `title`, `sub_title`, `details`, `img_ref_1`, `img_ref_2`, `img_ref_3`, `by_whom`, `by_whom_desic`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Welcome Screen Design', NULL, 1, 1, 1, 1, 'Little Flower School', 'Little Flower School\r\n', 'The Best Primary <span style=\"color: #008CBA;\">English Medium</span> School For Your Child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'img/carousel-1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(5, 'Welcome Screen Design', NULL, 1, 1, 2, 1, 'Little Flower School', 'Little Flower School\r\n\r\n', 'The Best English Medium Primary School for your child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'img/carousel-2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(9, 'Welcome Screen Design', NULL, 1, 1, 3, 1, 'Little Flower School', 'Little Flower School\r\n\r\n', 'The Best English Medium Primary School for your child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'img/carousel-3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ui_screen_designs`
--
ALTER TABLE `ui_screen_designs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ui_screen_designs`
--
ALTER TABLE `ui_screen_designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
