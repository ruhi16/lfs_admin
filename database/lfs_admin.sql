-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 03:43 AM
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
-- Database: `lfs_admin`
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
-- Table structure for table `fee_categories`
--

CREATE TABLE `fee_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `fee_particulars`
--

CREATE TABLE `fee_particulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee_category_id` int(10) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `fee_structures`
--

CREATE TABLE `fee_structures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_category_id` int(10) UNSIGNED DEFAULT NULL,
  `fee_particular_id` int(10) UNSIGNED DEFAULT NULL,
  `myclass_id` int(10) UNSIGNED DEFAULT NULL,
  `student_social_category_id` int(10) UNSIGNED DEFAULT NULL,
  `student_category_id` int(10) UNSIGNED DEFAULT NULL,
  `amount` decimal(8,2) UNSIGNED DEFAULT NULL,
  `amount_type` enum('Yearly','Monthly','Half Yearly','Quarterly') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_emi_allowed` tinyint(1) UNSIGNED NOT NULL DEFAULT 0,
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
(5, '2024_06_22_151005_create_notices_table', 1),
(6, '2024_06_25_133932_create_roles_table', 1),
(7, '2024_08_18_131554_create_teachers_table', 1),
(8, '2024_08_19_043016_create_schools_table', 1),
(9, '2024_08_19_043104_create_sessions_table', 1),
(10, '2024_08_19_043131_create_categories_table', 1),
(11, '2024_08_19_043306_create_subjects_table', 1),
(12, '2024_08_19_043331_create_myclasses_table', 1),
(13, '2024_08_19_043359_create_studentdbs_table', 1),
(14, '2024_08_19_043410_create_studentcrs_table', 1),
(15, '2024_08_19_043447_create_exams_table', 1),
(16, '2024_08_19_043506_create_examtypes_table', 1),
(17, '2024_08_19_043523_create_exammodes_table', 1),
(18, '2024_08_19_043627_create_myclasssections_table', 1),
(19, '2024_08_19_043654_create_myclasssubjects_table', 1),
(20, '2024_08_19_043717_create_myclassteachers_table', 1),
(21, '2024_08_19_043749_create_subjectteachers_table', 1),
(22, '2024_08_19_060806_create_sections_table', 1),
(23, '2024_08_19_064941_create_gradeparticulars_table', 1),
(24, '2024_08_19_065412_create_grades_table', 1),
(25, '2024_08_19_065425_create_gradedescriptions_table', 1),
(26, '2024_08_19_065757_create_examdetails_table', 1),
(27, '2024_08_19_065933_create_marksentries_table', 1),
(28, '2024_08_19_070427_create_answerscriptdistributions_table', 1),
(29, '2024_08_19_070857_create_questionpaperliabilities_table', 1),
(30, '2024_08_19_155934_create_rooms_table', 1),
(31, '2024_08_19_160334_create_promotionalrules_table', 1),
(32, '2024_10_03_172139_create_studentvls_table', 1),
(33, '2025_02_15_172443_create_fee_categories_table', 2),
(34, '2025_02_16_064857_create_fee_particulars_table', 2),
(35, '2025_02_17_173056_create_fee_structures_table', 3),
(36, '2025_02_17_175430_create_myclasses_table', 4),
(37, '2025_02_17_175811_create_sections_table', 5),
(38, '2025_02_17_175958_create_myclass_sections_table', 5),
(39, '2025_02_17_182839_create_session_event_categories_table', 5),
(40, '2025_02_17_182941_create_session_events_table', 5),
(41, '2025_02_17_183204_create_session_event_schedules_table', 5),
(42, '2025_02_17_190028_create_studentdbs_table', 6),
(43, '2025_02_17_190306_create_studentcrs_table', 7),
(44, '2025_02_21_074837_create_ui_screens_table', 7),
(45, '2025_02_21_075635_create_ui_sections_table', 7),
(46, '2025_02_21_080816_create_ui_particulars_table', 7),
(47, '2025_02_21_085911_create_ui_screen_designs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `myclasses`
--

CREATE TABLE `myclasses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(10) UNSIGNED DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `myclasssections`
--

CREATE TABLE `myclasssections` (
  `id` int(10) UNSIGNED NOT NULL,
  `myclass_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `prev_session_pk` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `myclasssubjects`
--

CREATE TABLE `myclasssubjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `myclass_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `examtype_id` int(11) NOT NULL,
  `is_additional` int(11) NOT NULL,
  `subject_order` int(11) NOT NULL,
  `combination_no` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `prev_session_pk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `myclassteachers`
--

CREATE TABLE `myclassteachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `myclass_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `myclass_sections`
--

CREATE TABLE `myclass_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(10) UNSIGNED DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dop` date NOT NULL,
  `doe` date NOT NULL,
  `fileaddr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `desc`, `dop`, `doe`, `fileaddr`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'This is final announcement', 'etetetetetetetete', '2025-02-01', '2025-02-28', 'public/photos/Uat2P65uTaI2OUuYrR0noXOJYVC4Ab1GTMhcY10i.png', 1, '2025-02-20 10:51:22', '2025-02-26 06:58:07'),
(2, 'Hello 2', 'Hello 2, Hello 2', '2025-02-22', '2025-02-28', 'public/photos/NLextHMCPcIWc4nkXkXbl2rMcM2E4xU2MusGkoZk.png', 0, '2025-02-20 23:14:27', '2025-02-26 02:17:48'),
(3, 'hello 3', 'helloooooooooooooo 3', '2025-02-22', '2025-02-28', 'public/photos/JvZbbwWEk9Yy4V1cNCJadZn4u7be8N8Q13Y1eFnV.png', 1, '2025-02-20 23:17:18', '2025-02-26 02:18:43'),
(4, 'Title', 'It is Description', '2025-02-21', '2025-02-27', 'upload/notices/1740114147.jpg', 0, '2025-02-20 23:32:27', '2025-02-20 23:32:27'),
(5, 'Little Flower School1', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', '2025-02-01', '2025-02-19', 'upload/notices/1740285562.jpg', 1, '2025-02-22 23:09:22', '2025-02-22 23:09:22'),
(6, 'Little Flower School5', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', '2025-02-20', '2025-02-25', 'public/photos/8EDNDmiVCkdTr8MaUJkNCWIPLnDyIiaTrn7ST8gh.png', 0, '2025-02-22 23:10:41', '2025-02-26 09:06:47'),
(7, 'New 2', 'New Notice', '2025-02-26', '2025-02-28', 'public/photos/gVMOPDRHcTiVSz22KPyRoVnePSGz1broxZogI6mY.png', 1, '2025-02-26 08:37:09', '2025-02-26 09:06:27');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'User', 'Students', NULL, NULL),
(2, 'Sub Admin', 'Teacher', NULL, NULL),
(3, 'Office Staff', 'Clerk', NULL, NULL),
(4, 'Admin', 'Principal', NULL, NULL),
(5, 'Super Admin', 'Management', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `po` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hscode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disecode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(10) UNSIGNED DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stdate` date NOT NULL,
  `entdate` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_session_id` int(11) DEFAULT NULL,
  `next_session_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `details`, `stdate`, `entdate`, `status`, `remark`, `prev_session_id`, `next_session_id`, `school_id`, `created_at`, `updated_at`) VALUES
(1, '2025-26', 'Current Session', '2025-03-01', '2026-02-28', 'Active', NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `session_events`
--

CREATE TABLE `session_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(10) UNSIGNED DEFAULT NULL,
  `session_event_category_id` int(10) UNSIGNED DEFAULT NULL,
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
-- Dumping data for table `session_events`
--

INSERT INTO `session_events` (`id`, `name`, `description`, `order_index`, `session_event_category_id`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Admission', 'Yearly', NULL, 1, 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 'Fee Collection', 'Monthly', NULL, 1, 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `session_event_categories`
--

CREATE TABLE `session_event_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(10) UNSIGNED DEFAULT NULL,
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
-- Dumping data for table `session_event_categories`
--

INSERT INTO `session_event_categories` (`id`, `name`, `description`, `order_index`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Finance', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 'Academic', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(3, 'Social', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `session_event_schedules`
--

CREATE TABLE `session_event_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(10) UNSIGNED DEFAULT NULL,
  `session_event_id` int(10) UNSIGNED DEFAULT NULL,
  `session_event_category_id` int(10) UNSIGNED DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
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
-- Dumping data for table `session_event_schedules`
--

INSERT INTO `session_event_schedules` (`id`, `name`, `description`, `order_index`, `session_event_id`, `session_event_category_id`, `start_date`, `end_date`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Admission', NULL, 1, 1, 1, '2025-02-25 00:00:00', '2025-03-25 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 'Fee Collection', NULL, 2, 2, 1, '2025-03-31 00:00:00', '2025-04-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(3, 'Fee Collection', NULL, 2, 2, 1, '2025-04-30 00:00:00', '2025-05-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(4, 'Fee Collection', NULL, 2, 2, 1, '2025-05-31 00:00:00', '2025-06-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(5, 'Fee Collection', NULL, 2, 2, 1, '2025-06-30 00:00:00', '2025-07-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(6, 'Fee Collection', NULL, 2, 2, 1, '2025-07-31 00:00:00', '2025-08-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(7, 'Fee Collection', NULL, 2, 2, 1, '2025-08-31 00:00:00', '2025-09-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(8, 'Fee Collection', NULL, 2, 2, 1, '0000-00-00 00:00:00', '2025-10-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(9, 'Fee Collection', NULL, 2, 2, 1, '2025-10-31 00:00:00', '2025-11-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(10, 'Fee Collection', NULL, 2, 2, 1, '0000-00-00 00:00:00', '2025-12-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(11, 'Fee Collection', NULL, 2, 2, 1, '2025-12-31 00:00:00', '2026-01-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(12, 'Fee Collection', NULL, 2, 2, 1, '2026-01-31 00:00:00', '2026-02-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(13, 'Fee Collection', NULL, 2, 2, 1, '2026-02-28 00:00:00', '2026-03-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studentcrs`
--

CREATE TABLE `studentcrs` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentdb_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `myclass_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_class_id` int(11) DEFAULT NULL,
  `next_section_id` int(11) DEFAULT NULL,
  `next_session_id` int(11) DEFAULT NULL,
  `next_studentcr_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentdbs`
--

CREATE TABLE `studentdbs` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid_auto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admBookNo` int(10) UNSIGNED DEFAULT NULL,
  `admSlNo` int(10) UNSIGNED DEFAULT NULL,
  `admDate` date DEFAULT NULL,
  `prCls` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prSch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adhaar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fadhaar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `madhaar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `vill` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pstn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `natn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `micr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bnnm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brnm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stclass_id` int(11) DEFAULT NULL,
  `stsection_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `streason` int(11) DEFAULT NULL,
  `enclass_id` int(11) DEFAULT NULL,
  `ensection_id` int(11) DEFAULT NULL,
  `ensession_id` int(11) DEFAULT NULL,
  `enreason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `crstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `examtype_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjectteachers`
--

CREATE TABLE `subjectteachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `prev_session_pk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hqual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `train_qual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_qual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_subject_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_session_pk` int(11) DEFAULT NULL,
  `img_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `nickName`, `mobno`, `desig`, `hqual`, `train_qual`, `extra_qual`, `main_subject_id`, `notes`, `prev_session_pk`, `img_ref`, `status`, `remark`, `user_id`, `session_id`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'Md Abdur Rouf', 'AR', '9735771008', 'HM/TIC', 'Masters with B.Ed', '', '', '17', 'NA', 0, 'https://images.pexels.com/photos/26793962/pexels-photo-26793962/free-photo-of-lying-shiba-inu-dog.png?auto=compress&cs=tinysrgb&w=600&lazy=load\" alt=\"\" class=\"absolute inset-0 w-full h-full object-cover', 'active', NULL, 1, 1, 1, '2018-03-22 03:04:13', '2024-08-21 15:43:50'),
(2, 'Rafina Yeasmin', 'RY', NULL, 'AHM', 'Masters with B.Ed', '', '', '2', 'NA', 0, 'https://a.storyblok.com/f/191576/1200x800/a3640fdc4c/profile_picture_maker_before.webp', 'active', NULL, 2, 1, 1, '2018-03-22 03:04:42', '2023-09-10 21:59:44'),
(3, 'Narayan Barman', 'NB', '9732530964', 'Asst. Teacher', 'Masters with B.Ed', '', '', '5', 'NA', 0, 'https://www.shutterstock.com/image-photo/head-shot-portrait-close-smiling-260nw-1714666150.jpg', 'active', NULL, 3, 1, 1, '2018-03-22 03:05:26', '2018-08-04 20:01:08'),
(4, 'Ganesh Chandra Mondal', 'GCM', '9733812253', 'Asst. Teacher', 'Masters with B.Ed', '', '', '10', 'NA', 0, 'https://www.shutterstock.com/image-photo/businessman-glasses-showing-smile-260nw-1685161825.jpg', 'active', NULL, 4, 1, 1, '2018-03-27 06:41:08', '2024-10-03 07:06:19'),
(39, 'Navid Anjum', 'NA', '9733812253', 'Asst. Teacher', 'Masters with B.Ed', '', '', '10', 'NA', 0, 'https://www.shutterstock.com/image-photo/businessman-glasses-showing-smile-260nw-1685161825.jpg', 'active', NULL, 4, 1, 1, '2018-03-27 06:41:08', '2024-10-03 07:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `ui_particulars`
--

CREATE TABLE `ui_particulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `particular_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(10) UNSIGNED DEFAULT NULL,
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
-- Dumping data for table `ui_particulars`
--

INSERT INTO `ui_particulars` (`id`, `name`, `description`, `particular_type`, `order_index`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Title', 'Title of the Section', 'Text & Should be 5 words logn', 1, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 'Sub Title', 'Title of the Section', 'Text & Should be 5 words logn', 1, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(3, 'Description', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(4, 'Objective', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(5, 'Image Reference 01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(6, 'Image Reference 02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(7, 'Image Reference 03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(8, 'By Whome', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(9, 'By Whome Designation\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ui_screens`
--

CREATE TABLE `ui_screens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Dumping data for table `ui_screens`
--

INSERT INTO `ui_screens` (`id`, `name`, `description`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Welcome Screen', 'Welcomes you', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

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
  `by_whom_desig` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `ui_screen_designs` (`id`, `name`, `description`, `ui_screen_id`, `ui_section_id`, `ui_entity_id`, `ui_particular_id`, `ui_particular_detail`, `title`, `sub_title`, `details`, `img_ref_1`, `img_ref_2`, `img_ref_3`, `by_whom`, `by_whom_desig`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Welcome Screen', NULL, 1, 1, 1, 1, 'Little Flower School', 'Little Flower School updated', 'The Best Primary <span style=\"color: #008CBA;\">English Medium</span> School For Your Child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'img/carousel-1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-02-23 07:23:28'),
(5, 'Welcome Screen', NULL, 1, 1, 2, 1, 'Little Flower School', 'Little Flower School', 'aaa                        The Best English Medium Primary School for your child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'img/carousel-2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-02-24 14:54:46'),
(9, 'Welcome Screen', NULL, 1, 1, 3, 1, 'Little Flower School', 'Little Flower School 3', 'The Best English Medium Primary School for your child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'img/carousel-3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-02-24 14:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `ui_sections`
--

CREATE TABLE `ui_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(10) UNSIGNED DEFAULT NULL,
  `parent_ui_screen_id` int(10) UNSIGNED DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ui_screen_id` int(10) UNSIGNED DEFAULT NULL,
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
-- Dumping data for table `ui_sections`
--

INSERT INTO `ui_sections` (`id`, `name`, `title`, `subtitle`, `description`, `order_index`, `parent_ui_screen_id`, `route`, `icon`, `ui_screen_id`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Caraosel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 'Notice Board', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(3, 'School Facility', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(4, 'Student Activity', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(5, 'Principal Desk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(6, 'School Classes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(7, 'School Teachers', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(8, 'Respected Gurdians', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(9, 'Contact Us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(10, 'About Us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(11, 'Make Appointment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 0,
  `teacher_id` int(11) NOT NULL DEFAULT 0,
  `studentdb_id` int(11) NOT NULL DEFAULT 0,
  `is_requested` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `google_id`, `remember_token`, `role_id`, `teacher_id`, `studentdb_id`, `is_requested`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', '2024-09-03 20:50:23', '$2y$10$4I/GqH1X6xaHOsaz6IaFSOQWGD1Z3rdIR9SVmFgcV43Y4UNqwaSuq', NULL, NULL, 1, 5, 0, 0, '2024-06-25 06:55:42', '2024-09-18 23:20:37'),
(2, 'Sub Admin', 'subadmin@gmail.com', '2024-09-22 20:50:18', '$2y$10$xWBR2C70wr16W8fafFcJyubTs67NqEhWLKGjeycBmuONYzegtw59e', NULL, NULL, 2, 4, 0, 0, '2024-06-25 06:56:13', '2024-06-25 06:56:13'),
(3, 'Office Staff', 'office@gmail.com', '2024-09-12 08:27:29', '$2y$10$Q/4X2YbvQ7YYrCNFaEKpxuX4ONaflkCJQYc0JgH75C3c4MrnXsPiq', NULL, '5usAMiOUDBeBXpsy9QBsZSEpNN6SlfiSgDTzyztjznaDpnku6K5f3IqyDs7X', 3, 3, 0, 0, '2024-06-25 06:56:49', '2024-09-12 15:03:25'),
(4, 'Admin', 'admin@gmail.com', '2024-09-23 20:50:02', '$2y$10$RyE2pp17XVshwHlqHzJSN.jiHAFqrX1aqIydx2zaW/7eYrdGDwoxy', NULL, 'mTkBImgWoXNCkHwt3L79ZHLOLG5K00oCJvTo21RicyxkUjPxgSh7mVYDsss6', 4, 2, 0, 0, '2024-06-25 06:57:21', '2024-06-25 06:57:21'),
(5, 'Super Admin', 'supadmin2@gmail.com', '2024-09-23 20:50:02', '$2y$10$RyE2pp17XVshwHlqHzJSN.jiHAFqrX1aqIydx2zaW/7eYrdGDwoxy', NULL, 'mTkBImgWoXNCkHwt3L79ZHLOLG5K00oCJvTo21RicyxkUjPxgSh7mVYDsss6', 5, 1, 0, 0, '2024-06-25 06:57:21', '2024-06-25 06:57:21');

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
-- Indexes for table `fee_categories`
--
ALTER TABLE `fee_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_particulars`
--
ALTER TABLE `fee_particulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_structures`
--
ALTER TABLE `fee_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myclasses`
--
ALTER TABLE `myclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myclasssections`
--
ALTER TABLE `myclasssections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myclasssubjects`
--
ALTER TABLE `myclasssubjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myclassteachers`
--
ALTER TABLE `myclassteachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myclass_sections`
--
ALTER TABLE `myclass_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_events`
--
ALTER TABLE `session_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_event_categories`
--
ALTER TABLE `session_event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_event_schedules`
--
ALTER TABLE `session_event_schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentcrs`
--
ALTER TABLE `studentcrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdbs`
--
ALTER TABLE `studentdbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectteachers`
--
ALTER TABLE `subjectteachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_particulars`
--
ALTER TABLE `ui_particulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_screens`
--
ALTER TABLE `ui_screens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_screen_designs`
--
ALTER TABLE `ui_screen_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_sections`
--
ALTER TABLE `ui_sections`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_categories`
--
ALTER TABLE `fee_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_particulars`
--
ALTER TABLE `fee_particulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_structures`
--
ALTER TABLE `fee_structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `myclasses`
--
ALTER TABLE `myclasses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myclasssections`
--
ALTER TABLE `myclasssections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myclasssubjects`
--
ALTER TABLE `myclasssubjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myclassteachers`
--
ALTER TABLE `myclassteachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myclass_sections`
--
ALTER TABLE `myclass_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session_events`
--
ALTER TABLE `session_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session_event_categories`
--
ALTER TABLE `session_event_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `session_event_schedules`
--
ALTER TABLE `session_event_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `studentcrs`
--
ALTER TABLE `studentcrs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentdbs`
--
ALTER TABLE `studentdbs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjectteachers`
--
ALTER TABLE `subjectteachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `ui_particulars`
--
ALTER TABLE `ui_particulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ui_screens`
--
ALTER TABLE `ui_screens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ui_screen_designs`
--
ALTER TABLE `ui_screen_designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ui_sections`
--
ALTER TABLE `ui_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
