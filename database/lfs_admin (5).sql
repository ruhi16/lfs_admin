-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2025 at 04:40 AM
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

--
-- Dumping data for table `fee_categories`
--

INSERT INTO `fee_categories` (`id`, `name`, `description`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Admission Fee', 'Ones in a year', 1, 1, 4, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 'Monthly Fee', 'Ones in a month', 1, 1, 4, NULL, 1, 0, NULL, NULL, NULL, NULL),
(3, 'Hostel Fee', 'Ones in a month', 1, 1, 4, NULL, 1, 0, NULL, NULL, NULL, NULL),
(4, 'Transport Fee', 'Ones in a month', 1, 1, 4, NULL, 1, 0, NULL, NULL, NULL, NULL),
(5, 'Test Fee', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2025-03-15 07:48:07', '2025-03-15 07:48:07'),
(6, 'Admission Fee 43', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2025-03-15 07:59:18', '2025-03-15 08:07:59'),
(7, 'New Time', NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, '2025-03-15 08:08:19', '2025-03-15 08:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `fee_collections`
--

CREATE TABLE `fee_collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `myclass_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `studentcr_id` int(11) NOT NULL,
  `fee_mandate_id` int(11) DEFAULT NULL,
  `total_amount` decimal(8,2) DEFAULT NULL,
  `total_discount` decimal(8,2) DEFAULT NULL,
  `paid_amount` decimal(8,2) DEFAULT NULL,
  `balance_amount` decimal(8,2) DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_part_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_finalized` tinyint(1) DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_collection_details`
--

CREATE TABLE `fee_collection_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_collection_id` int(11) NOT NULL,
  `src_table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `src_table_id` int(11) DEFAULT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `fee_particular_id` int(11) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT 0,
  `school_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_finalized` tinyint(1) DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_extras`
--

CREATE TABLE `fee_extras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `myclass_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `studentcr_id` int(11) NOT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `fee_particular_id` int(11) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT 0,
  `paid_ref_fee_collection_detail_id` int(11) DEFAULT NULL,
  `fee_mandate_id` int(11) DEFAULT NULL,
  `session_event_id` int(11) DEFAULT NULL,
  `session_event_schedule_id` int(11) DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_finalized` tinyint(1) DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_mandates`
--

CREATE TABLE `fee_mandates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(11) DEFAULT NULL,
  `myclass_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `session_event_id` int(11) DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_finalized` tinyint(1) DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_mandate_dates`
--

CREATE TABLE `fee_mandate_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_index` int(11) DEFAULT NULL,
  `fee_mandate_id` int(11) DEFAULT NULL,
  `schedule_date` date DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
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

--
-- Dumping data for table `fee_particulars`
--

INSERT INTO `fee_particulars` (`id`, `name`, `description`, `fee_category_id`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'Tuition fee', NULL, 2, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 'Electric Fee', NULL, 2, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(3, 'Donation Fee', NULL, 1, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(4, 'Room Rent', NULL, 3, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(5, 'Kitchen Charge', NULL, 3, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(6, 'Bus Charge', NULL, 4, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fee_specials`
--

CREATE TABLE `fee_specials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `myclass_id` int(11) DEFAULT NULL,
  `fee_structure_id` int(11) DEFAULT NULL,
  `fee_category_id` int(11) DEFAULT NULL,
  `fee_particular_id` int(11) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT 0,
  `school_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
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

--
-- Dumping data for table `fee_structures`
--

INSERT INTO `fee_structures` (`id`, `fee_category_id`, `fee_particular_id`, `myclass_id`, `student_social_category_id`, `student_category_id`, `amount`, `amount_type`, `is_emi_allowed`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, NULL, '200.00', NULL, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 1, 2, 1, NULL, NULL, '500.00', NULL, 0, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fee_student_records`
--

CREATE TABLE `fee_student_records` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fee_mandate_id` int(11) DEFAULT NULL,
  `fee_collection_id` int(11) DEFAULT NULL,
  `myclass_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `studentcr_id` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `received_amount` decimal(10,2) DEFAULT NULL,
  `balance_amount` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
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
(47, '2025_02_21_085911_create_ui_screen_designs_table', 7),
(48, '2025_02_17_173050_create_fee_mandates_table', 8),
(49, '2025_02_17_173054_create_fee_mandate_dates_table', 8),
(50, '2025_02_17_173058_create_fee_extras_table', 8),
(51, '2025_02_17_173060_create_fee_collections_table', 8),
(52, '2025_02_17_173065_create_fee_collection_details_table', 8),
(53, '2025_02_17_173072_create_fee_specials_table', 8),
(54, '2025_02_17_173075_create_fee_student_records_table', 8),
(55, '2025_06_06_082822_create_shop01_owners_table', 8),
(56, '2025_06_06_083156_create_shop02_categories_table', 8),
(57, '2025_06_06_083219_create_shop03_items_table', 8),
(58, '2025_06_06_083247_create_shop04_products_table', 8),
(59, '2025_06_06_084909_create_shop05_units_table', 8),
(60, '2025_06_06_084937_create_shop06_unit_refs_table', 8),
(61, '2025_06_06_084955_create_shop07_unit_ref_pts_table', 8),
(62, '2025_06_06_085100_create_shop08_purchases_table', 8),
(63, '2025_06_06_085134_create_shop09_purchase_products_table', 8),
(64, '2025_06_06_085200_create_shop10_sales_table', 8),
(65, '2025_06_06_085206_create_shop11_sale_products_table', 8),
(66, '2025_06_07_023346_create_shop12_sale_user_wishlists_table', 8);

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

--
-- Dumping data for table `myclasses`
--

INSERT INTO `myclasses` (`id`, `name`, `description`, `order_index`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'BabyLand', 'B Land', NULL, NULL, NULL, NULL, NULL, 1, 0, 'blue', NULL, NULL, NULL),
(2, 'Lower KG', 'LKG', NULL, NULL, NULL, NULL, NULL, 1, 0, 'red', NULL, NULL, NULL),
(3, 'Upper KG', 'UKG', NULL, NULL, NULL, NULL, NULL, 1, 0, 'green', NULL, NULL, NULL),
(4, 'I', 'CL 1', NULL, NULL, NULL, NULL, NULL, 1, 0, 'slate', NULL, NULL, NULL),
(5, 'II', 'CL 2', NULL, NULL, NULL, NULL, NULL, 1, 0, 'blue', NULL, NULL, NULL),
(6, 'III', 'CL 3', NULL, NULL, NULL, NULL, NULL, 1, 0, 'red', NULL, NULL, NULL),
(7, 'IV', 'CL 4', NULL, NULL, NULL, NULL, NULL, 1, 0, 'green', NULL, NULL, NULL),
(8, 'V', 'CL 5', NULL, NULL, NULL, NULL, NULL, 1, 0, 'slate', NULL, NULL, NULL);

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

--
-- Dumping data for table `myclasssections`
--

INSERT INTO `myclasssections` (`id`, `myclass_id`, `section_id`, `details`, `status`, `remark`, `session_id`, `school_id`, `prev_session_pk`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 4, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 5, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 6, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 7, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 8, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, 'Ist unit test result 2025.', 'Our Ist unit test result will be published on 10.06.2025.', '2025-05-31', '2025-06-15', 'notices//1mvL4g4hU_notices.jpg', 1, '2025-02-20 10:51:22', '2025-05-31 23:08:14'),
(2, 'Hello 2', 'Hello 2, Hello 2', '2025-02-22', '2025-02-28', 'public/photos/NLextHMCPcIWc4nkXkXbl2rMcM2E4xU2MusGkoZk.png', 0, '2025-02-20 23:14:27', '2025-02-26 02:17:48'),
(3, 'hello 3', 'helloooooooooooooo 3', '2025-02-22', '2025-02-28', 'notices//3VpV056rV_notices.jpg', 1, '2025-02-20 23:17:18', '2025-03-23 11:17:47'),
(4, 'Title', 'It is Description', '2025-02-21', '2025-02-27', 'public/photos/yU89yrMXjcXLmz6YgkVcGKihd9FWvoLhVsEfhOUS.png', 0, '2025-02-20 23:32:27', '2025-03-03 09:40:38'),
(5, 'Little Flower School1', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', '2025-02-01', '2025-02-19', 'public/photos/6JkefRH7bfbfyCRvwn3a82jkJLKiZSET0vGOGpkB.png', 0, '2025-02-22 23:09:22', '2025-03-03 09:38:35'),
(6, 'Little Flower School5', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', '2025-02-20', '2025-02-25', 'public/photos/8EDNDmiVCkdTr8MaUJkNCWIPLnDyIiaTrn7ST8gh.png', 0, '2025-02-22 23:10:41', '2025-02-26 09:06:47'),
(7, 'New 2', 'New Notice', '2025-02-26', '2025-02-28', 'notices//75oxOxj5N_notices.jpg', 1, '2025-02-26 08:37:09', '2025-03-23 11:17:31'),
(8, 'Class Starts', 'Class starts from 10.03.2025', '2025-03-01', '2025-03-29', 'notices//8x2l0Knao_notices.png', 1, '2025-03-01 10:02:44', '2025-03-23 11:50:29'),
(9, 'Admission Notice', 'Re-admission is going on from 28.02.2025 to 04.03.2025', '2025-02-25', '2025-03-22', 'notices//9zMRxMCyZ_notices.jpg', 1, '2025-03-03 10:39:40', '2025-03-23 11:22:34'),
(10, 'Book Distribution Notice', 'Book distribution from 06.03.25 to 09.03.25.\\nB.L,L.K.G,U.K.G-06.03.2025 to 07.03.2025.\\nClass I to Class V- 08.03.2025 to 09.03.2025.', '2025-03-04', '2025-03-20', 'notices/103SzlZc0h_notices.jpg', 1, '2025-03-03 21:08:58', '2025-03-23 11:49:18'),
(11, 'asda', 'sdsad', '2025-03-27', '2025-03-29', NULL, 1, '2025-03-27 01:54:07', '2025-03-27 01:54:07'),
(12, '12321', '312312', '2025-03-27', '2025-03-28', NULL, 1, '2025-03-27 01:54:57', '2025-03-27 01:54:57'),
(13, 'asdas', 'dasdasda', '2025-03-27', '2025-03-28', NULL, 1, '2025-03-27 02:06:02', '2025-03-27 02:06:02'),
(14, 'as123', 'asdsad', '2025-03-27', '2025-03-28', NULL, 1, '2025-03-27 02:32:57', '2025-03-27 02:32:57'),
(15, 'eqwe', 'qweqe', '2025-03-27', '2025-03-28', 'notices/15ImSxLitt_notices.png', 1, '2025-03-27 02:34:20', '2025-06-09 00:18:14');

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

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `session_id`, `name`, `details`, `vill`, `po`, `ps`, `pin`, `dist`, `index`, `hscode`, `disecode`, `estd`, `status`, `remark`, `created_at`, `updated_at`) VALUES
(1, 1, 'Little Flower School', 'English Medium School', 'Dayanagar Bahaliapara', 'Bhagwangola', 'Bhagwangola', '742120', 'Murshidabad', NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-23 01:11:52', '2025-02-23 01:11:52');

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

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `description`, `order_index`, `school_id`, `session_id`, `user_id`, `approved_by`, `is_active`, `is_finalized`, `status`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(2, 'B', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(3, 'C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(4, 'D', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

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
(2, 'Fee Collection', 'Monthly', NULL, 1, 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(3, 'Annual Sports', 'Yearly', NULL, 2, 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(11, 'Annual Cultural', 'Yearly', NULL, 2, 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(12, 'Tree Plantation', 'Yearly', NULL, 3, 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

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
(8, 'Fee Collection', NULL, 2, 2, 1, '2025-09-30 00:00:00', '2025-10-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(9, 'Fee Collection', NULL, 2, 2, 1, '2025-10-31 00:00:00', '2025-11-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(10, 'Fee Collection', NULL, 2, 2, 1, '2025-11-30 00:00:00', '2025-12-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(11, 'Fee Collection', NULL, 2, 2, 1, '2025-12-31 00:00:00', '2026-01-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(12, 'Fee Collection', NULL, 2, 2, 1, '2026-01-31 00:00:00', '2026-02-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL),
(13, 'Fee Collection', NULL, 2, 2, 1, '2026-02-28 00:00:00', '2026-03-07 00:00:00', 1, 1, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop01_owners`
--

CREATE TABLE `shop01_owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop02_categories`
--

CREATE TABLE `shop02_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop03_items`
--

CREATE TABLE `shop03_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop04_products`
--

CREATE TABLE `shop04_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `color_bk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_fn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_01` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_02` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_03` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_04` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double(8,2) NOT NULL DEFAULT 0.00,
  `review_count` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop05_units`
--

CREATE TABLE `shop05_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_amount` double(10,3) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop06_unit_refs`
--

CREATE TABLE `shop06_unit_refs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ref_type` enum('purchase','sale') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_sold_price` decimal(10,2) DEFAULT NULL,
  `unit_purchase_price` decimal(10,2) DEFAULT NULL,
  `prod_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop07_unit_ref_pts`
--

CREATE TABLE `shop07_unit_ref_pts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `purchase_product_id` int(11) NOT NULL,
  `sale_unit_id` int(11) DEFAULT NULL,
  `purchase_to_sale_factor` double(10,7) DEFAULT NULL,
  `sale_unit__actual_rate` double(10,7) DEFAULT NULL,
  `sale_unit_profit_percent` double(10,7) DEFAULT NULL,
  `sale_unit_profit_rate` double(10,7) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop08_purchases`
--

CREATE TABLE `shop08_purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `invoice_no` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `adjust_amount` decimal(10,2) DEFAULT NULL,
  `payable_amount` decimal(10,2) DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT 0,
  `paid_date` date DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop09_purchase_products`
--

CREATE TABLE `shop09_purchase_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purch_unit_id` int(11) NOT NULL,
  `purch_unit_rate` int(11) NOT NULL,
  `purch_unit_qty` int(11) NOT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `adjust_amount` decimal(10,2) DEFAULT NULL,
  `payable_amount` decimal(10,2) DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `is_sale_unit_defined` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop10_sales`
--

CREATE TABLE `shop10_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studentcr_id` int(11) DEFAULT NULL,
  `myclass_id` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `roll_no` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `adjust_amount` decimal(10,2) DEFAULT NULL,
  `payable_amount` decimal(10,2) DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT 0,
  `paid_date` date DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop11_sale_products`
--

CREATE TABLE `shop11_sale_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `sale_unit_id` int(11) NOT NULL,
  `sale_unit_rate` int(11) NOT NULL,
  `sale_unit_qty` int(11) NOT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `adjust_amount` decimal(10,2) DEFAULT NULL,
  `payable_amount` decimal(10,2) DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop12_sale_user_wishlists`
--

CREATE TABLE `shop12_sale_user_wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `studentcr_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `added_at` date DEFAULT NULL,
  `removed_at` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `studentcrs`
--

INSERT INTO `studentcrs` (`id`, `studentdb_id`, `session_id`, `myclass_id`, `section_id`, `roll_no`, `result`, `description`, `crstatus`, `next_class_id`, `next_section_id`, `next_session_id`, `next_studentcr_id`, `school_id`, `created_at`, `updated_at`) VALUES
(21, 21, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:17:45'),
(22, 22, 1, 1, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:18:19'),
(23, 23, 1, 1, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:19:55'),
(24, 24, 1, 1, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:20:23'),
(25, 25, 1, 1, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:21:31'),
(26, 26, 1, 1, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:23:18'),
(27, 27, 1, 1, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:23:53'),
(28, 28, 1, 1, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:24:29'),
(29, 29, 1, 1, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:24:54'),
(30, 30, 1, 1, 1, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:25:21'),
(31, 31, 1, 1, 1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:25:37'),
(32, 32, 1, 5, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-29 14:32:43'),
(33, 33, 1, 5, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(34, 34, 1, 5, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(35, 35, 1, 5, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(36, 36, 1, 5, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(37, 37, 1, 5, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(38, 38, 1, 5, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(39, 39, 1, 5, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(40, 40, 1, 5, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(41, 41, 1, 5, 1, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(42, 42, 1, 5, 1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(43, 43, 1, 5, 1, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(44, 44, 1, 5, 1, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(45, 45, 1, 5, 1, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(46, 46, 1, 6, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(47, 47, 1, 6, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(48, 48, 1, 6, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(49, 49, 1, 6, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(50, 50, 1, 6, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(51, 51, 1, 6, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(52, 52, 1, 6, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(53, 53, 1, 6, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(54, 54, 1, 7, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(55, 55, 1, 7, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(56, 56, 1, 7, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(57, 57, 1, 7, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(58, 58, 1, 7, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(59, 59, 1, 7, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(60, 60, 1, 7, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(61, 61, 1, 7, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(62, 62, 1, 7, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(63, 63, 1, 7, 1, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(64, 64, 1, 7, 1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(65, 65, 1, 7, 1, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(66, 66, 1, 7, 1, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(67, 67, 1, 8, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(68, 68, 1, 8, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(69, 69, 1, 8, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(70, 70, 1, 8, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(71, 71, 1, 8, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 17:56:00', '2025-03-11 17:56:00'),
(72, 75, 1, 2, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-29 14:28:24'),
(73, 76, 1, 2, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-29 14:28:43'),
(74, 77, 1, 2, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-29 14:29:00'),
(75, 78, 1, 2, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-29 14:29:32'),
(76, 79, 1, 2, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 14:51:02'),
(77, 80, 1, 2, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(78, 81, 1, 2, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:06:31'),
(79, 82, 1, 2, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:06:56'),
(80, 83, 1, 2, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(81, 84, 1, 2, 1, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:07:17'),
(82, 85, 1, 2, 1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:07:53'),
(83, 86, 1, 2, 1, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:08:12'),
(84, 87, 1, 2, 1, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:08:30'),
(85, 88, 1, 2, 1, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:08:45'),
(86, 89, 1, 2, 1, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:09:02'),
(87, 90, 1, 2, 1, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:09:20'),
(88, 91, 1, 2, 1, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:09:35'),
(89, 92, 1, 2, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:06:00'),
(90, 93, 1, 2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:11:40'),
(91, 94, 1, 2, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(92, 95, 1, 2, 2, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:13:15'),
(93, 96, 1, 2, 2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(94, 97, 1, 2, 2, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:16:01'),
(95, 98, 1, 2, 2, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:18:37'),
(96, 99, 1, 2, 2, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(97, 100, 1, 2, 2, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(98, 101, 1, 2, 2, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:19:19'),
(99, 102, 1, 2, 2, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(100, 103, 1, 2, 2, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:10:49'),
(101, 104, 1, 2, 2, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:11:09'),
(102, 105, 1, 2, 2, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:11:40'),
(103, 106, 1, 2, 2, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(104, 107, 1, 2, 2, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:12:07'),
(105, 108, 1, 2, 2, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:12:32'),
(106, 109, 1, 2, 2, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(107, 110, 1, 4, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:14:30'),
(108, 111, 1, 4, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:14:49'),
(109, 112, 1, 4, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:15:05'),
(110, 113, 1, 4, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:15:22'),
(111, 114, 1, 4, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:15:51'),
(112, 115, 1, 4, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:16:10'),
(113, 116, 1, 4, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:16:54'),
(114, 117, 1, 4, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:17:53'),
(115, 118, 1, 4, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:18:10'),
(116, 119, 1, 4, 1, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:18:47'),
(117, 120, 1, 4, 1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(118, 121, 1, 4, 1, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(119, 122, 1, 4, 1, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:19:17'),
(120, 123, 1, 4, 1, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:20:27'),
(121, 124, 1, 4, 1, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:21:32'),
(122, 125, 1, 4, 1, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:21:56'),
(123, 126, 1, 4, 1, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:22:20'),
(124, 127, 1, 4, 1, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:22:40'),
(125, 128, 1, 4, 1, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:22:58'),
(126, 129, 1, 4, 1, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:23:15'),
(127, 130, 1, 4, 1, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 16:23:43'),
(128, 131, 1, 3, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-30 15:23:08'),
(129, 132, 1, 3, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:00:54'),
(130, 133, 1, 3, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:01:28'),
(131, 134, 1, 3, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:02:10'),
(132, 135, 1, 3, 1, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(133, 136, 1, 3, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:03:06'),
(134, 137, 1, 3, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:03:26'),
(135, 138, 1, 3, 1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:03:50'),
(136, 139, 1, 3, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:04:15'),
(137, 140, 1, 3, 1, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:04:42'),
(138, 141, 1, 3, 1, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(139, 142, 1, 3, 1, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:05:14'),
(140, 143, 1, 3, 1, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:05:47'),
(141, 144, 1, 3, 1, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:06:12'),
(142, 145, 1, 3, 1, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(143, 146, 1, 3, 1, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:07:03'),
(144, 147, 1, 3, 1, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:23:48'),
(145, 148, 1, 3, 1, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(146, 149, 1, 3, 1, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:24:30'),
(147, 150, 1, 3, 1, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(148, 151, 1, 3, 1, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(149, 152, 1, 3, 1, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-01 03:25:25'),
(150, 153, 1, 3, 1, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(151, 154, 1, 3, 1, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(152, 155, 1, 3, 1, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(153, 156, 1, 3, 1, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(154, 157, 1, 3, 1, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(155, 158, 1, 3, 1, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(156, 159, 1, 3, 1, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(157, 160, 1, 3, 1, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(158, 161, 1, 3, 1, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(159, 162, 1, 3, 1, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-04-08 19:06:15'),
(160, 163, 1, 3, 1, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(161, 164, 1, 3, 1, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(162, 165, 1, 3, 1, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-11 10:56:00', '2025-03-11 10:56:00'),
(163, 80, 1, 1, 1, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-28 14:20:19', '2025-04-04 12:47:55'),
(164, 166, 1, 1, 1, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-29 15:02:05', '2025-03-29 15:03:04'),
(165, 167, 1, 1, 1, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-29 15:06:03', '2025-03-29 15:08:43'),
(166, 168, 1, 1, 1, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-29 15:12:39', '2025-03-29 15:13:33'),
(167, 169, 1, 7, 1, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-29 15:36:37', '2025-03-29 15:36:37'),
(168, 170, 1, 1, 1, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-29 16:22:59', '2025-03-29 16:22:59'),
(169, 80, 1, 1, 2, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-30 15:02:27', '2025-03-30 15:11:02'),
(170, 171, 1, 3, 1, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-30 16:01:49', '2025-03-30 16:01:49'),
(171, 172, 1, 3, 1, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-30 16:04:44', '2025-03-30 16:04:44'),
(172, 173, 1, 3, 1, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-30 16:08:30', '2025-03-30 16:08:30'),
(173, 174, 1, 2, 2, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-30 16:29:31', '2025-03-30 16:29:31'),
(174, 80, 1, 2, 2, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-01 15:25:14', '2025-04-01 15:25:14'),
(175, 175, 1, 8, 1, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 13:35:31', '2025-04-03 13:35:31'),
(176, 176, 1, 4, 1, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 13:41:27', '2025-04-03 13:41:27'),
(177, 177, 1, 4, 1, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 13:51:20', '2025-04-03 13:51:20'),
(178, 178, 1, 5, 1, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 14:05:21', '2025-04-03 14:05:21'),
(179, 179, 1, 5, 1, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 14:09:50', '2025-04-03 14:09:50'),
(180, 180, 1, 5, 1, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 14:15:14', '2025-04-03 14:15:14'),
(181, 181, 1, 6, 1, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 14:42:19', '2025-04-03 14:42:19'),
(182, 182, 1, 6, 1, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 14:45:59', '2025-04-03 14:45:59'),
(183, 183, 1, 7, 1, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 14:50:45', '2025-04-03 14:50:45'),
(184, 184, 1, 7, 1, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 14:56:10', '2025-04-03 14:56:10'),
(185, 185, 1, 7, 1, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 15:02:13', '2025-04-11 01:16:25'),
(186, 186, 1, 7, 1, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-03 15:07:08', '2025-04-03 15:07:08'),
(187, 187, 1, 5, 1, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-04 13:08:30', '2025-04-04 13:08:30'),
(188, 188, 1, 7, 1, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-22 08:58:10', '2025-04-22 08:58:10'),
(189, 189, 1, 1, 1, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-22 09:25:42', '2025-04-22 09:25:42'),
(190, 190, 1, 8, 1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-22 09:39:57', '2025-04-22 09:39:57'),
(191, 191, 1, 7, 1, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-04-22 09:43:15', '2025-04-22 09:43:15');

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
  `vill1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vill2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pstn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobl1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobl2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_grp` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `img_ref_profile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ref_brthcrt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_ref_adhaar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `crstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentdbs`
--

INSERT INTO `studentdbs` (`id`, `studentid`, `uuid_auto`, `admBookNo`, `admSlNo`, `admDate`, `prCls`, `prSch`, `name`, `adhaar`, `fname`, `fadhaar`, `mname`, `madhaar`, `dob`, `vill1`, `vill2`, `post`, `pstn`, `dist`, `pin`, `state`, `mobl1`, `mobl2`, `ssex`, `blood_grp`, `phch`, `relg`, `cste`, `natn`, `accNo`, `ifsc`, `micr`, `bnnm`, `brnm`, `stclass_id`, `stsection_id`, `session_id`, `school_id`, `streason`, `enclass_id`, `ensection_id`, `ensession_id`, `enreason`, `img_ref_profile`, `img_ref_brthcrt`, `img_ref_adhaar`, `user_id`, `crstatus`, `remarks`, `created_at`, `updated_at`) VALUES
(21, NULL, 'LFS202526001', 1, 1, '2025-04-04', NULL, NULL, 'Anas Aktar', '6619 4188 4097', 'Md. Aktar Ali', '', 'Umme Habiba', '', '2020-10-06', 'Barsatigola', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9614417887', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/21_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 13:51:04'),
(22, NULL, 'LFS202526002', 1, 1, '2025-03-31', NULL, NULL, 'Rehanth Rouson', '3285 4536 4084', 'Rakesh Rouson', '', 'Tania Islam', '', '2021-08-01', 'Barsatigola', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7365016889', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/22_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 01:09:44'),
(23, NULL, 'LFS202526006', 1, 1, '2025-04-01', NULL, NULL, 'MD Emon Sekh', '9642 9071 0017', 'MD Palash', '', 'Jinnatara Khatun', '', '2020-11-10', 'Mahisasthali', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '6296831029', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/23_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:04:58'),
(24, NULL, 'LFS202526003', 1, 1, '2025-04-01', NULL, NULL, 'Inaya Hoque', '0', 'Emdadul Hoque', '', 'Shikha Khatun', '', '2021-06-10', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9933455055', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/24_profile.jpg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:05:09'),
(25, NULL, 'LFS202526008', 1, 0, '2025-04-01', NULL, NULL, 'Mahir Sk', '0', 'Mamun Sk', '', 'Khusbu Parvin', '', '2020-12-23', 'Jalibagicha', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9749802876', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/25_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:04:39'),
(26, NULL, 'LFS202526007', 1, 1, '2025-04-08', NULL, NULL, 'Imrose Sk', '6482 2884 5260', 'Belal Sk ', NULL, 'Chumki Khatun', NULL, '2020-12-19', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7908266868', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/26_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 18:55:51'),
(27, NULL, 'LFS202526009', 1, 0, '2025-04-01', NULL, NULL, 'Fahmin Hoque', '7333 5333 0654', 'MD Tofijul Hoque', NULL, 'Baby Najnin', NULL, '2021-08-03', 'Kalinagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '6296936247', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/27_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:07:13'),
(28, NULL, 'LFS202526010', 1, 1, '2025-04-04', NULL, NULL, 'Dipto Saha', '7699 3641 6414', 'Dibbendu Saha', NULL, 'Suparna Saha', NULL, '2020-11-20', 'Mahisasthali', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7679143534', NULL, 'male', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/28_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 11:23:26'),
(29, NULL, 'LFS202526011', 1, 0, '2025-03-29', NULL, NULL, 'Faiz Sk', '7260 5726 3006', 'Mejarul Sk', NULL, 'Tunjila Khatun', NULL, '2021-02-05', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9933013242', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/29_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 14:24:54'),
(30, NULL, 'LFS202526004', 1, 1, '2025-04-08', NULL, NULL, 'Alija Afreen', '6899 5857 2951', 'Jamal Asif', NULL, 'Khadija Khatun', NULL, '2021-06-03', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8158800931', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/30_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 18:56:09'),
(31, NULL, 'LFS202526064', 1, 1, '2025-03-29', NULL, NULL, 'Fahim Hoque', '4294 8832 4208', 'Injamamul Hoque', NULL, 'Farida Khatun Hoque', NULL, '2020-09-23', 'Altabartala', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9414115936', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/31_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 14:25:37'),
(32, '20251111', 'LFS202223019', 2, 21, '2025-03-29', NULL, NULL, 'Aayan Abid', '2222 4444 5555', 'Milon Sk', '', 'Sabia Sultana', '', '2018-05-15', 'Dayanagar', 'aaaa', 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8945807511', NULL, 'male', 'B+', 'No', 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/32_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 16:18:53'),
(33, NULL, 'LFS202223013', 1, 1, '2025-03-29', NULL, NULL, 'Fahim Islam', '', 'Sariful Islam', NULL, 'SAHINA KHATUN', NULL, '2017-12-24', 'mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '6289034414', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/33_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 14:35:56'),
(34, NULL, 'LFS202122019', 1, 1, '2025-03-29', NULL, NULL, 'Enaya Sarkar', '', 'Eazaj Al Amin', NULL, 'SUMITA KHATUN', NULL, '2017-12-10', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9933641783', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/34_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 14:37:52'),
(35, NULL, 'LFS202223014', 1, 1, '2025-04-01', NULL, NULL, 'Faiza Aktar', '', 'Md Hasibul Hoque', NULL, 'NASRIN AKTAR', NULL, '2017-09-03', 'Dayanagar', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9775414454', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/35_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:05:12'),
(36, NULL, 'LFS202324014', 1, 1, '2025-04-01', NULL, NULL, 'Aarfa Khan', '', 'Mehedi Alam Khan', NULL, 'Rejina Khatun', NULL, '2017-09-03', 'Dayanagar', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9609272847', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/36_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:05:42'),
(37, NULL, 'LFS202223004', 1, 1, '2025-03-29', NULL, NULL, 'Sara Anjum', '', 'Saddam Hossain', NULL, 'RAHIMA BIBI', NULL, '2018-03-22', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9339230192', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/37_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 14:40:49'),
(38, NULL, 'LFS202324016', 1, 1, '2025-04-01', NULL, NULL, 'Noman Alam', '', 'Shukre Alam', NULL, 'Najnin Aktar', NULL, '2018-02-10', 'Mahesh Narayan Ganj', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9775270047', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/38_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:06:02'),
(39, NULL, 'LFS202324041', 1, 1, '2025-04-08', NULL, NULL, 'Mahir Sk', '', 'Asgar Ali', NULL, 'Sanuwara Bibi', NULL, '2017-10-03', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9547089126', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/39_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:55:16'),
(40, NULL, 'LFS202324045', 1, 1, '2025-04-08', NULL, NULL, 'Aman Hossain', '', 'Arif Hossain', NULL, 'Naseeba Bibi', NULL, '2017-12-11', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '6296230180', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/40_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:56:49'),
(41, NULL, 'LFS202324038', 1, 1, '2025-04-01', NULL, NULL, 'Asrat Safi', '', 'Md Mithun Sk', NULL, 'Hasiba Khatun', NULL, '2017-05-23', 'Hanumantnagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8116356940', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/41_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:06:55'),
(42, NULL, 'LFS202324051', 1, 1, '2025-04-01', NULL, NULL, 'Sara Hossain', '', 'Saddam Hossain', NULL, 'Semily Khatun', NULL, '2017-12-11', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '6297022098', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/42_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:07:16'),
(43, NULL, 'LFS202223017', 1, 1, '2025-04-08', NULL, NULL, 'Arbin Islam', '', 'Md Sahidul Islam', NULL, 'Poly Bibi', NULL, '2016-09-09', 'Bhabanipur', NULL, 'Krishnapur', 'Lalgola', 'Murshidabad', '742148', 'West Bengal', '9732689769', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/43_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:56:06'),
(44, NULL, 'LFS202223034', 1, 1, '2025-03-31', NULL, NULL, 'Nusrat Khatun', '', 'Motahar Hossain', NULL, 'PINKI KHATUN', NULL, '2017-12-09', 'Kantanagar', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9000260750', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/44_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 04:05:52'),
(45, NULL, 'LFS202122018', 1, 1, '2025-04-01', NULL, NULL, 'Ramisa Khatun', '', 'Halim Saikh', NULL, 'Bilkish Khatun', NULL, '2017-11-28', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8170803190', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 5, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/45_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:07:57'),
(46, NULL, 'LFS202223021', 1, 1, '2025-03-29', NULL, NULL, 'Faria Islam Mimi', '', 'Sahidul Islam', NULL, 'Habiba bibi', NULL, '2016-05-17', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7679234604', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/46_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 15:14:54'),
(47, NULL, 'LFS202122004', 1, 1, '2025-03-31', NULL, NULL, 'Saheli Sabnam', '', 'Md Mobassar Ali', NULL, 'TUHINA BIBI', NULL, '2016-08-17', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7001159758', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/47_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 04:06:36'),
(48, NULL, 'LFS202324047', 1, 1, '2025-04-01', NULL, NULL, 'Said Aktar', '', 'Mustofa Sk', NULL, 'Habiba Bibi', NULL, '2016-12-14', 'Ramnapara', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7384255801', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/48_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:09:02'),
(49, NULL, 'LFS202324053', 1, 1, '2025-03-29', NULL, NULL, 'Abdul Aziz', '', 'Milon Sekh', NULL, 'Auliya Bibi', NULL, '2015-04-11', 'kashipur', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8640080577', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/49_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 15:17:52'),
(50, NULL, 'LFS202223005', 1, 1, '2025-03-29', NULL, NULL, 'Rahida Parvin', '', 'Rasel Sk', NULL, 'Eliza Bibi', NULL, '2017-01-01', 'Kashidanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8653132689', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/50_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 15:18:31'),
(51, NULL, 'LFS202223030', 1, 1, '2025-04-08', NULL, NULL, 'Riaj Sk', '', 'Selim Sk', NULL, 'Rabia Bibi', NULL, '2017-01-20', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8972582624', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/51_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:57:27'),
(52, NULL, 'LFS202122001', 1, 1, '2025-03-29', NULL, NULL, 'Anas Hoque', '', 'Milon Sk', NULL, 'AYESHA BIBI', NULL, '2016-04-14', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9153708130', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/52_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 15:20:19'),
(53, NULL, 'LFS202324025', 1, 1, '2025-04-01', NULL, NULL, 'Sangita Mondal', '9130 6519 0199', 'Satyaban Mondal', NULL, 'July Mondal', NULL, '2017-02-07', 'Kantanagar', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7047014507', NULL, 'female', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/53_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:10:05'),
(54, NULL, 'LFS202122010', 1, 1, '2025-03-31', NULL, NULL, 'Anisha Aktar', '', 'Md Aktar Ali', NULL, 'UMME HABIBA', NULL, '2015-09-18', 'Barsatigola', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9614417887', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/54_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 04:07:21'),
(55, NULL, 'LFS201920001', 1, 1, '2025-03-29', NULL, NULL, 'Nafisa Hoque', '', 'Emdadul Hoque', NULL, 'SIKHA KHATUN', NULL, '2016-03-02', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9933455055', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/55_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 15:23:46'),
(56, NULL, 'LFS202324032', 1, 1, '2025-04-01', NULL, NULL, 'Sajeeda Noushin', '2324 3819 0834', 'Md Abul Fazal', NULL, 'Mst Sahida Begum', NULL, '2015-11-03', 'Rajanagar', NULL, 'Laskarpur', 'Lalgola', 'Murshidabad', '742148', 'West Bengal', '8016216416', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/56_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:10:54'),
(57, NULL, 'LFS202122011', 1, 1, '2025-04-04', NULL, NULL, 'Salma Aktar', '', 'Md Golam Moula', NULL, 'SINA AKTAR', NULL, '2016-06-29', 'Barsatigola', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9732999201', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/57_profile.jpg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 19:26:42'),
(58, NULL, 'LFS201920079', 1, 1, '2025-03-29', NULL, NULL, 'Fatematu Johora', '', 'Md Abdul Hamid', NULL, 'RIPA BIBI', NULL, '2015-01-15', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8343005772', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/58_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 15:27:00'),
(59, NULL, 'LFS202324059', 1, 1, '2025-04-01', NULL, NULL, 'Rafaz Ahmed', '', 'Jainuddin Ahmed', NULL, 'Rashia Khatun', NULL, '2015-05-18', 'Jalibagicha', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8101906892', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/59_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:11:14'),
(60, NULL, 'LFS202122030', 1, 1, '2025-03-29', NULL, NULL, 'Abir Ahmed', '', 'Ikhtar Ahmed', NULL, 'JESMINA KHATUN', NULL, '2015-02-18', 'Barsatigola', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9365998080', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/60_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-29 15:29:03'),
(61, NULL, 'LFS201920060', 1, 1, '2025-03-30', NULL, NULL, 'Farhan Hoque', '', 'Injamamul Hoque', NULL, 'FARIDA KHATUN HOQUE', NULL, '2015-11-08', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9614115936', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/61_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 14:34:42'),
(62, NULL, 'LFS202425006', 1, 1, '2025-04-01', NULL, NULL, 'Faiyad Abrar', '', 'Sadikul Islam', NULL, 'Tanjila Ferdousha Khanam', NULL, '2015-07-21', 'Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8670114544', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/62_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:11:40'),
(63, NULL, 'LFS202122008', 1, 1, '2025-03-30', NULL, NULL, 'Swellehin Alom Mondal', '5494 2360 1141', 'Md Mehebub Alom', NULL, 'Sumaiya Khatun', NULL, '2015-03-29', 'Habaspur Mathpara', NULL, 'Habaspur', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7384782689', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/63_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 14:36:52'),
(64, NULL, 'LFS201920069', 1, 1, '2025-04-04', NULL, NULL, 'Ayan Uman', '', 'Md Wasin Reja', NULL, 'Tuhina Parvin', NULL, '2015-06-23', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8972104504', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/64_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 13:29:45'),
(65, NULL, 'LFS201920075', 1, 1, '2025-04-01', NULL, NULL, 'Nusrat Alam', '', 'Md Jahangir Alam', NULL, 'Akhtara Bibi', NULL, '2015-10-14', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9093226997', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/65_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:12:03'),
(66, NULL, 'LFS201920083', 1, 1, '2025-03-30', NULL, NULL, 'Ridwan Hasan', '', 'Sukuruddin', NULL, 'UMME KULSUM', NULL, '2015-10-22', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8906369403', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 7, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/66_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 14:40:03'),
(67, NULL, 'LFS201920002', 1, 1, '2025-04-04', NULL, NULL, 'Atique Hossain', '', 'Md Ali Hossain', NULL, 'Rabia Khatun', NULL, '2014-10-06', 'Kantanagar', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8670015537', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 8, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/67_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 13:15:19'),
(68, NULL, 'LFS201920070', 1, 1, '2025-03-30', NULL, NULL, 'Sayan Hasan', '', 'Mehedi Hasan', NULL, 'RUMA YASMIN', NULL, '2015-04-28', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '6294267877', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 8, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/68_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 14:43:38'),
(69, NULL, 'LFS201920082', 1, 1, '2025-04-01', NULL, NULL, 'Abu Asis Amin', '', 'Abu Nasher Amin', NULL, 'ALIYA PARVIN', NULL, '2014-10-05', 'Kalinagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9733455714', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 8, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/69_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:13:15'),
(70, NULL, 'LFS202324001', 1, 1, '2025-04-01', NULL, NULL, 'Ayush Sonar', '7646 5325 9267', 'Santosh Sonar', NULL, 'Rubi Sonar', NULL, '2013-03-14', 'Mahesh Narayan Ganj', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9123675157', NULL, 'male', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 8, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/70_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:12:35'),
(71, NULL, 'LFS201920074', 1, 1, '2025-04-01', NULL, NULL, 'Fahad Mobarat', '', 'Golam Murtuza', NULL, 'MODINA BIBI', NULL, '2014-09-04', 'Kalinagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9749232425', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 8, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/71_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 15:13:34'),
(75, NULL, 'LFS202425001', 1, 1, '2025-04-01', NULL, NULL, 'Arindam Saha', '', 'SOUMEN SAHA', NULL, 'ANUSRI SAHA', NULL, '2020-09-23', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8926748931', NULL, 'male', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/75_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:08:41'),
(76, NULL, 'LFS202425004', 1, 1, '2025-03-31', NULL, NULL, 'Anik Ali', '', 'AKBAR ALI', NULL, 'SABNAM KHATUN', NULL, '2020-04-06', 'Maheshnarayanganj', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9153620634', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/76_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:51:35'),
(77, NULL, 'LFS202425003', 1, 1, '2025-03-31', NULL, NULL, 'Anish Islam', '', 'NOOR ISLAM', NULL, 'MEHERUNNESHA', NULL, '2020-04-05', 'Maheshnarayanganj', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7679404854', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/77_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:53:11'),
(78, NULL, 'LFS202425023', 1, 1, '2025-03-31', NULL, NULL, 'Priyam Poddar', '', 'PROTIM PODDAR', NULL, 'DEBIKA GHOSH PODDAR', NULL, '2021-03-28', 'Maheshnarayanganj', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8926838770', NULL, 'male', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/78_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:53:40'),
(79, NULL, 'LFS202425025', 1, 1, '2025-03-31', NULL, NULL, 'Aman Islam', '', 'MD SARIFUL ISLAM', NULL, 'RIJIA SULTANA', NULL, '2020-10-12', 'Sekhpara', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7602415384', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/79_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:54:06'),
(80, NULL, 'LFS202526040', 1, 1, '2025-04-22', NULL, NULL, 'Abdul Samir', '', 'Abdur Rakib', '', 'Ruma Khatun', NULL, '2019-10-02', 'Natunpara Kashiyadanga', '', 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8158802274', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/80_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-22 09:16:36'),
(81, NULL, 'LFS202526035', 1, 1, '2025-04-01', NULL, NULL, 'Mariyam Khatun', '3676 9415 8254', 'Saddam Sk', NULL, 'Meherunnesa Khatun', NULL, '2019-10-13', 'Altabartala', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8759176792', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/81_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:11:39'),
(82, NULL, 'LFS202526012', 1, 1, '2025-04-01', NULL, NULL, 'Suhana Aktar', '3869 4648 3708', 'Abdul Sahid', NULL, 'Rama Khatun', NULL, '2021-01-14', 'Kantanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7305204802', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/82_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:12:14'),
(83, NULL, 'LFS202526034', 1, 1, '2025-04-01', NULL, NULL, 'Nur Nabi', '7590 9250 7396', 'Sariful Sk', NULL, 'Nur Mahal', NULL, '2020-09-07', 'Kupkandhi', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9002109391 ', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/83_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:12:45'),
(84, NULL, 'LFS202526033', 1, 1, '2025-04-08', NULL, NULL, 'Arin KAYES', '5637 2493 1035', 'Imrul Kayes', NULL, 'Tarin Akther', NULL, '2021-02-04', 'N.Para Kashiadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8101088787', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/84_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 18:57:07'),
(85, NULL, 'LFS202526032', 1, 1, '2025-04-08', NULL, NULL, 'Tamanna Khatun', '', 'Lalchad Sk', NULL, 'Tahida Khatun', NULL, '2020-08-25', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7063330027', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/85_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 18:59:10'),
(86, NULL, 'LFS202526031', 1, 1, '2025-04-01', NULL, NULL, 'Rizwan Sk', '2216 6470 6333', 'Mustakim Sk', NULL, 'Rubina Khatun', NULL, '2020-09-22', 'Kashiyadanga Uttar', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8597417778', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/86_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:14:30'),
(87, NULL, 'LFS202526030', 1, 1, '2025-03-30', NULL, NULL, 'Jisan Sk', '7726 4301 8045', 'Nurul Islam', NULL, 'Late Rina Khatun', NULL, '2020-09-22', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7047686270', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/87_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:08:30'),
(88, NULL, 'LFS202526016', 1, 1, '2025-04-01', NULL, NULL, 'Sanbi Sarkar', '6490 4492 3832', 'Kiron Sarkar', NULL, 'Salma Khatun', NULL, '2020-07-28', 'Barsatigola', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9002935690', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/88_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:14:55'),
(89, NULL, 'LFS202526023', 1, 1, '2025-04-01', NULL, NULL, 'Pratiusha Pal', '4353 9068 9788', 'Pradip Kumar Pal', NULL, 'Priya Sarkar', NULL, '2020-10-29', 'Mohisastholi', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8906136882', NULL, 'female', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/89_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:15:28'),
(90, NULL, 'LFS202526024', 1, 1, '2025-04-08', NULL, NULL, 'Salma Jahan', '', 'Ayantani Sk', NULL, 'Sabna Khatun', NULL, '2020-07-05', 'Dakshin HanumantaNagar', NULL, 'B.Gola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9124005054', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/90_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:00:43'),
(91, NULL, 'LFS202526025', 1, 1, '2025-03-31', NULL, NULL, 'Salma Khatun', '', 'MD Abu Sayeed', NULL, 'Samima Khatun', NULL, '2021-01-14', 'Kashiyadanga Uttar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9563613210', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/91_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:56:57'),
(92, NULL, 'LFS202526026', 1, 1, '2025-04-01', NULL, NULL, 'Aarika', '', 'Sekender Ali Parbhej', NULL, 'Yeasmin Khatun', NULL, '2020-07-27', 'Kashiyadanga Uttar', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7029965686', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/92_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:16:27'),
(93, NULL, 'LFS202526027', 1, 1, '2025-04-08', NULL, NULL, 'Shayed Ansari', '6572 0382 8172', 'Ramiz Raja', NULL, 'Shyamali Khatun', NULL, '2020-09-29', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9432171452', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/93_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:08:08'),
(94, NULL, 'LFS202526028', 1, 1, '2025-04-22', NULL, NULL, 'Rafida Hasan', '6660 5608 1372', 'Hasan Ali', NULL, 'Rakiba Khatun', NULL, '2020-02-20', 'Hanumantanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8016875116', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/94_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-22 09:07:15'),
(95, NULL, 'LFS202526029', 1, 1, '2025-04-01', NULL, NULL, 'Ayat Zamya', '4603 7748 9484', 'MD Moin Islam', NULL, 'Rajibunnesha Khatun', NULL, '2021-05-18', 'Darakandhi', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '6297005859', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/95_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:17:46'),
(96, NULL, 'LFS202526015', 1, 1, '2025-04-04', NULL, NULL, 'Arif Sk', '3978 2415 1344', 'Samirul Sk', NULL, 'Tahamina Bibi', NULL, '2018-03-13', 'Kashipur Naharpara', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9933165420', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/96_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 12:44:18'),
(97, NULL, 'LFS202526022', 1, 1, '2025-03-30', NULL, NULL, 'Simran', '7619 2019 7174', 'Sarikul', NULL, 'Mousumi Khatun', NULL, '2020-05-16', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9933596018', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/97_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:16:01'),
(98, NULL, 'LFS202526021', 1, 1, '2025-04-04', NULL, NULL, 'Mahir Faisal', '5088 8140 0772', 'Jiarul Hoque', NULL, 'Mamotaz Begam', NULL, '2020-10-10', 'Kalinagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8159043890', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/98_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 12:39:18'),
(99, NULL, 'LFS202526014', 1, 1, '2025-04-04', NULL, NULL, 'Naznin Fatema', '', 'Mizanul Islam', NULL, 'Nurjema Khatun', NULL, '2021-01-11', 'Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8597211908', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/99_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 12:41:38'),
(100, NULL, 'LFS202526043', 1, 1, '2025-03-30', NULL, NULL, 'RAFID MEHEFUZ', '', 'ABDUR ROUF', NULL, 'SOBNAM MOSTARI', NULL, '2020-08-15', 'Kashiyadanga Uttar', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9775007525', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/100_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:18:08'),
(101, NULL, 'LFS202526020', 1, 1, '2025-03-30', NULL, NULL, 'Rahi Pal', '8305 7005 8501', 'Rintu Pal', NULL, 'Pali Singha', NULL, '2020-10-22', 'Mohisastholi', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9641878454', NULL, 'female', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/101_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:19:19'),
(102, NULL, 'LFS202526017', 1, 1, '2025-04-01', NULL, NULL, 'Ayaan Roushan', '', 'Rakesh Roushan', NULL, 'Runa Khatun', NULL, '2019-06-25', 'Mahesh Narayanganj', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7908385381', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/102_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:19:39'),
(103, NULL, 'LFS202526039', 1, 1, '2025-03-30', NULL, NULL, 'Sayed Tashfeen Imad', '', 'Sayed Abdul Hadi', NULL, 'Lucky Khatun', NULL, '2020-08-17', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', NULL, 'W.B', '00000000', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/103_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:10:49'),
(104, NULL, 'LFS202526019', 1, 1, '2025-04-01', NULL, NULL, 'Ankit Mandal', '2256 0051 0029', 'Pratap Kumar Mandal', NULL, 'Chandana Mandal', NULL, '2020-10-16', 'Chak Bhojraj', NULL, 'Krishnapur Dinurpara', 'Lalgola', 'Murshidabad', '742148', 'W.B', '9775768842', NULL, 'male', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/104_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:20:16'),
(105, NULL, 'LFS202526018', 1, 1, '2025-04-22', NULL, NULL, 'Humaira Yeasmin', '7487 4647 9404', 'Sariful Islam', NULL, 'Sabina Yeasmin', NULL, '2020-06-28', 'Barsatigola', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9002318556', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/105_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-22 09:05:07'),
(106, NULL, 'LFS202526013', 1, 1, '2025-04-08', NULL, NULL, 'Junaid Islam', '3484 1459 2135', 'Sariful Islam', NULL, 'Beauty Khatun', NULL, '2020-12-19', 'N.Para Kashiyadanga', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9932175029', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/106_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:08:52'),
(107, NULL, 'LFS202526037', 1, 1, '2025-03-30', NULL, NULL, 'Riyaz Sk', '', 'Dolon Sk', NULL, 'Sikha Khatun', NULL, '2020-02-16', 'Mahesh Narayan Ganj', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '6296198189', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/107_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:12:07'),
(108, NULL, 'LFS202526042', 1, 1, '2025-03-31', NULL, NULL, 'Afiya Arshin', '', 'Abu Hena', NULL, 'Rousanara Khatun', NULL, '2021-03-04', 'Barsatigola', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9153840282', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/108_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:58:40'),
(109, NULL, 'LFS202526038', 1, 1, '2025-03-30', NULL, NULL, 'FARIHA ISLAM', '', 'SARIFUL ISLAM', NULL, 'SAHINA KHATUN', NULL, '2021-03-10', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8536823438', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 2, 2, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/109_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:22:20'),
(110, NULL, 'LFS202324021', 1, 1, '2025-04-01', NULL, NULL, 'Nazmin Sultana', '', 'Nazir Ahmed', NULL, 'Tahamina Khatun', NULL, '2018-07-12', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9932827156', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/110_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:37:29'),
(111, NULL, 'LFS202324031', 1, 1, '2025-03-30', NULL, NULL, 'Md Nur Alom', '3036 7572 7189', 'MD Saifullah', NULL, 'Sabnur Khatun', NULL, '2018-12-22', 'Darakandhi', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9851317248', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/111_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:14:49'),
(112, NULL, 'LFS202324026', 1, 1, '2025-04-01', NULL, NULL, 'Ayan Islam', '', 'Sariful Islam', NULL, 'Shikha Khatun', NULL, '2018-03-15', 'Hanumantanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7583945418', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/112_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:38:07'),
(113, NULL, 'LFS202324055', 1, 1, '2025-04-01', NULL, NULL, 'Dishad Ahamed', '3162 3452 8551', 'Hasibul Islam', NULL, 'Behula Bibi', NULL, '2018-11-15', 'Kupkandhi', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9679050257', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/113_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:38:40'),
(114, NULL, 'LFS202324028', 1, 1, '2025-04-01', NULL, NULL, 'Ankita Mandal', '8740 6747 4420', 'Pradip Mandal', NULL, 'Shefali Mandal', NULL, '2018-09-26', 'Kantanagar', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9800490120', NULL, 'female', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/114_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:42:16'),
(115, NULL, 'LFS202324035', 1, 1, '2025-04-01', NULL, NULL, 'Fariya Khanam', '', 'Mitun Sk', NULL, 'Mastura Khatun', NULL, '2017-10-28', 'Jalibagicha', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8918968183', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/115_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:39:26'),
(116, NULL, 'LFS202324042', 1, 1, '2025-04-01', NULL, NULL, 'Minhaj Seakh', '', 'Mursalim Sk', NULL, 'Masenur Bibi', NULL, '2018-05-14', 'Kalinagar', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7029659155', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/116_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:39:49'),
(117, NULL, 'LFS202324027', 1, 1, '2025-04-08', NULL, NULL, 'Jasika Sabnam', '', 'Harejul Sk', NULL, 'Afika Khatun', NULL, '2018-07-19', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7074155153', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/117_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:54:31'),
(118, NULL, 'LFS202324037', 1, 1, '2025-04-01', NULL, NULL, 'AL Toush Abir Ali', '3350 2515 3504', 'MD Sabir Ali', NULL, 'Tripti Katun', NULL, '2018-10-21', 'Kupkandhi', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9382155223', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/118_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:42:59'),
(119, NULL, 'LFS202324034', 1, 1, '2025-04-01', NULL, NULL, 'Ayan Sk', '4234 8220 0697', 'Sofik Sk', NULL, 'Jhuma Bibi', NULL, '2018-11-24', 'Kashiadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8116708595', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/119_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:43:27'),
(120, NULL, 'LFS202425008', 1, 1, '2025-04-08', NULL, NULL, 'Jamela Khatun', '', 'Kousar Ali', NULL, 'Sabana Khatun', NULL, '2019-01-03', 'N,Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', NULL, 'West Bengal', '7001390723', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/120_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:54:02'),
(121, NULL, 'LFS202324044', 1, 1, '2025-04-04', NULL, NULL, 'Zain Ikbal', '', 'Towsif Ikbal', NULL, 'Mehen Negar Khatun', NULL, '2018-12-17', 'Barsatigola', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8906317778', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/121_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 13:09:57'),
(122, NULL, 'LFS202223023', 1, 1, '2025-03-30', NULL, NULL, 'Ayanur Rahaman', '', 'Hasibur Rahaman', NULL, 'Baby Sahanaj', NULL, '2018-06-21', 'Dayanagar', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9002583759', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/122_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:19:17'),
(123, NULL, 'LFS202324048', 1, 1, '2025-04-01', NULL, NULL, 'Saib Aktar', '', 'Mustofa Sk', NULL, 'Habiba Bibi', NULL, '2018-06-10', 'Ramnapara', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7384255801', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/123_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:56:00'),
(124, NULL, 'LFS202526057', 1, 1, '2025-03-30', NULL, NULL, 'Nourin Anjum', '', 'Md Altaf Hossain', NULL, 'Nazma Parvin', NULL, '2018-09-22', 'Hanumantanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8942027508', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/124_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:21:32'),
(125, NULL, 'LFS202526055', 1, 1, '2025-03-30', NULL, NULL, 'Yousof Sekh', '', 'Jiarul Rahaman', NULL, 'Sadika Bibi', NULL, '2018-05-02', 'Kasiadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8670010701', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/125_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:21:56'),
(126, NULL, 'LFS202526058', 1, 1, '2025-03-30', NULL, NULL, 'Mim Mahammad', '', 'Rajesh Sk', NULL, 'Tumpa Bibi', NULL, '2018-07-09', 'Kasiadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8597245267', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/126_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:22:20'),
(127, NULL, 'LFS202526059', 1, 1, '2025-04-04', NULL, NULL, 'SAMIM SEKH', '', 'RAJESH SK', NULL, 'TUMPA BIBI', NULL, '2018-07-09', 'Kasiadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8597245267', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/127_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 13:12:23'),
(128, NULL, 'LFS202526056', 1, 1, '2025-04-04', NULL, NULL, 'HASNAHENA KHATUN', '', 'HAKIM SK', NULL, 'MOYNA BIBI', NULL, '2017-10-30', 'Charabangola', NULL, 'Hanumantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '6296040421', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/128_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 13:14:04'),
(129, NULL, 'LFS202324010', 1, 1, '2025-03-30', NULL, NULL, 'SARFARAZ KARIM', '', 'MASUM KARIM', NULL, 'TAKDIRA KHATUN', NULL, '2017-06-12', 'Dayanagar', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9932008510', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/129_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:23:15'),
(130, NULL, 'LFS202324052', 1, 1, '2025-03-30', NULL, NULL, 'Ankush Mandal', '', 'Pratik Mondal', NULL, 'Dipali Mandal', NULL, '2018-10-28', 'Kantanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '6297318481', NULL, 'male', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 4, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/130_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 16:23:43'),
(131, NULL, 'LFS202425012', 1, 1, '2025-03-30', NULL, NULL, 'Sadiya Islam', '', 'Sariful Islam', NULL, 'Nasrin Sultana', NULL, '2019-08-02', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8158066697', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/131_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:23:08'),
(132, NULL, 'LFS202425060', 1, 1, '2025-03-31', NULL, NULL, 'Arnab Roy', '', 'Ashim Roy', NULL, 'Barnali Bahalia', NULL, '2019-03-28', 'Mohisastholi', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8016336728', NULL, 'male', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/132_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:00:54');
INSERT INTO `studentdbs` (`id`, `studentid`, `uuid_auto`, `admBookNo`, `admSlNo`, `admDate`, `prCls`, `prSch`, `name`, `adhaar`, `fname`, `fadhaar`, `mname`, `madhaar`, `dob`, `vill1`, `vill2`, `post`, `pstn`, `dist`, `pin`, `state`, `mobl1`, `mobl2`, `ssex`, `blood_grp`, `phch`, `relg`, `cste`, `natn`, `accNo`, `ifsc`, `micr`, `bnnm`, `brnm`, `stclass_id`, `stsection_id`, `session_id`, `school_id`, `streason`, `enclass_id`, `ensection_id`, `ensession_id`, `enreason`, `img_ref_profile`, `img_ref_brthcrt`, `img_ref_adhaar`, `user_id`, `crstatus`, `remarks`, `created_at`, `updated_at`) VALUES
(133, NULL, 'LFS202324003', 1, 1, '2025-03-31', NULL, NULL, 'Karim Sk', '', 'Kamrul Sk', NULL, 'ROKIA KHATUN', NULL, '0000-00-00', 'Mohisastholi', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7318844661', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/133_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:01:28'),
(134, NULL, 'LFS202425031', 1, 1, '2025-04-01', NULL, NULL, 'Maisha Bepary', '', 'Manik Bepary', NULL, 'Dola Bepary', NULL, '2019-11-24', 'Kalukhali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '6291196701', NULL, 'female', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/134_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:23:43'),
(135, NULL, 'LFS202526033', 1, 1, '2025-04-01', NULL, NULL, 'Fariha Khatun', '', 'Chand Mohammad', NULL, 'Fatema Khatun', NULL, '2019-07-25', 'Kupkandhi', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7384036660', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/135_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:24:09'),
(136, NULL, 'LFS202425022', 1, 1, '2025-03-31', NULL, NULL, 'Iyan Ali', '', 'Imran Ali', NULL, 'Salema Sultana', NULL, '2019-10-27', 'Mohisastholi', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8345051648', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/136_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:03:06'),
(137, NULL, 'LFS202425021', 1, 1, '2025-04-01', NULL, NULL, 'Muskan Khatun', '8134 8602 6618', 'Manowar Hossain', NULL, 'Sumita Khatun', NULL, '2019-09-12', 'Debipur', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8167057767', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/137_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:24:35'),
(138, NULL, 'LFS202425030', 1, 1, '2025-04-01', NULL, NULL, 'Abdul Rahaman', '', 'Abu Salam', NULL, 'Samima Bibi', NULL, '2018-10-22', 'Kupkandhi', NULL, 'Benipur', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8101372057', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/138_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:24:54'),
(139, NULL, 'LFS202425032', 1, 1, '2025-04-01', NULL, NULL, 'Aradhya Mondal', '', 'Rajesh Mondal', NULL, 'Shraboni Pramanik Mondal', NULL, '2019-07-16', 'Chak Bhojraj', NULL, 'Lalgola', 'Lalgola', 'Murshidabad', '742148', 'W.B', '9732390480', NULL, 'female', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/139_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:25:22'),
(140, NULL, 'LFS202425032', 1, 1, '2025-04-08', NULL, NULL, 'Tanvir Islam', '4609 7981 0229', 'Somenul Islam', NULL, 'Samima Khatun', NULL, '2019-07-03', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7699837162', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/140_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:02:33'),
(141, NULL, 'LFS202425011', 1, 1, '2025-04-08', NULL, NULL, 'Ayan Hossain', '', 'Alamgir Hossain', NULL, 'Bauti Khatun', NULL, '2019-08-02', 'N.Para Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7699944214', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/141_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:03:05'),
(142, NULL, 'LFS202425018', 1, 1, '2025-03-31', NULL, NULL, 'Md Farhan Ali Khan', '', 'Ishmail Sk', NULL, 'MURSHIDA BIBI', NULL, '2019-04-11', 'Mohisastholi', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9907156923', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/142_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:05:14'),
(143, NULL, 'LFS202425013', 1, 1, '2025-04-01', NULL, NULL, 'Sarfaraz Sk', '', 'Md Selim Sekh', NULL, 'RABIA KHATUN', NULL, '2019-08-03', 'Mohisastholi', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '8972582624', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/143_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:28:29'),
(144, NULL, 'LFS202425016', 1, 1, '2025-03-31', NULL, NULL, 'Sonal Aktar', '', 'Fazle Rabbi', NULL, 'SOMA BIBI', NULL, '2019-02-05', 'Mohisastholi', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9932886353', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/144_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:06:12'),
(145, NULL, 'LFS202324012', 1, 1, '2025-03-30', NULL, NULL, 'Sohan Ali', '', 'Ersad Ali', NULL, 'SATHI KHATUN', NULL, '2019-05-30', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9635809434', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/145_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:27:44'),
(146, NULL, 'LFS202425024', 1, 1, '2025-04-01', NULL, NULL, 'Khurshid Islam', '', 'Sariful Islam', NULL, 'Khadija Khatun', NULL, '2020-05-13', 'Mohisastholi', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9933850756', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/146_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:28:57'),
(147, NULL, 'LFS202324036', 1, 1, '2025-04-08', NULL, NULL, 'Farhad Seikh', '3750 9632 9354', 'Ripon Sk', NULL, 'Alpana Khatun', NULL, '2019-05-16', 'Char Safihazipara', NULL, 'Hanumanta Nagar', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7584923090', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/147_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:03:58'),
(148, NULL, 'LFS202425028', 1, 1, '2025-04-04', NULL, NULL, 'Inayat Hossain', '', 'Sher Shah Ali', NULL, 'Sabina Khatun', NULL, '2019-02-05', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', NULL, 'West Bengal', '9733744282', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/148_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 13:11:17'),
(149, NULL, 'LFS202425020', 1, 1, '2025-04-01', NULL, NULL, 'Rayan Shaikh', '8776 5119 6785', 'Rasel Shaikh', NULL, 'Mujima Khatun', NULL, '2019-08-20', 'Debipur', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9932838933', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/149_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:33:22'),
(150, NULL, 'LFS202425010', 1, 1, '2025-04-01', NULL, NULL, 'Romin Sk', '', 'Rajib Sk', NULL, 'Rimpa Khatun', NULL, '2019-10-19', 'Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '6294872609', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/150_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:33:49'),
(151, NULL, 'LFS202425017', 1, 1, '2025-03-30', NULL, NULL, 'Yasin Alom', '', 'Mehebub Alom', NULL, 'JOTY KHATUN', NULL, '2019-02-17', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9002135696', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/151_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:30:09'),
(152, NULL, 'LFS202425036', 1, 1, '2025-03-31', NULL, NULL, 'Kiaan Jaman', '7061 2083 7766', 'Md Kamrujjaman', NULL, 'Twin Bibi', NULL, '2019-06-21', 'Puraton Kasiadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '7405604165', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/152_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 03:25:25'),
(153, NULL, 'LFS202526053', 1, 1, '2025-03-30', NULL, NULL, 'Aayat Yasmin', '5488 8898 5517', 'Kutubuddin Sk', NULL, 'Tumpa Khatun', NULL, '2018-12-11', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7583936968', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/153_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:31:25'),
(154, NULL, 'LFS202526051', 1, 0, '2025-04-01', NULL, NULL, 'Ashwat Nayna', '5675 3703 6055', 'Washim  ', NULL, 'Nurjahan Khatun', NULL, '2019-06-24', 'Kupkandhi', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '6297223108', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/154_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:34:14'),
(155, NULL, 'LFS202526050', 1, 0, '2025-04-01', NULL, NULL, 'Yeara khatun', '', 'Yean Ali', NULL, 'Kamrunnesa Khatun', NULL, '2019-08-07', 'Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8167045448', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/155_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:34:47'),
(156, NULL, 'LFS202526049', 1, 1, '2025-03-30', NULL, NULL, 'Evana Yesmin', '6510 6169 6586', 'Benjir Hossain', NULL, 'Tohida Yeasmin', NULL, '2019-11-23', 'Barsatigola', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8944880380', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/156_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:41:53'),
(157, NULL, 'LFS202526048', 1, 1, '2025-04-01', NULL, NULL, 'MD Rahamat Hasan', '4027 2315 8968', 'MD Tofail Hasan', NULL, 'Sakina Khatun', NULL, '2018-10-20', 'Debipur', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8972118492', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, '2025-04-01 14:35:52'),
(158, NULL, 'LFS202425027', 1, 1, '2025-03-30', NULL, NULL, 'Shreya Mondal', '', 'Tata Mondal', NULL, 'Smriti Mondal', NULL, '2019-11-25', 'Kantanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7029664451', NULL, 'female', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/158_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:53:13'),
(159, NULL, 'LFS202526047', 1, 1, '2025-04-04', NULL, NULL, 'Afrin Hoque ', '6151 0001 1177', 'Enamul Hoque', NULL, 'Rubia Khatun', NULL, '2020-01-06', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7602381061', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/159_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 12:15:36'),
(160, NULL, 'LFS202526046', 1, 1, '2025-03-30', NULL, NULL, 'Rayan Sekh', '', 'MD Dablu Sk', NULL, 'Anju Manuara', NULL, '2019-12-24', 'Ruhimari', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8670205342', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/160_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:52:48'),
(161, NULL, 'LFS202526045', 1, 1, '2025-04-08', NULL, NULL, 'Nahisa Khatun', '8147 4994 3246', 'Alomgir', NULL, 'Mila Bibi', NULL, '2019-01-05', 'N.Para Kashiyadanga', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9153169266', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/161_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:04:42'),
(162, NULL, 'LFS202526044', 1, 1, '2025-04-08', NULL, NULL, 'Puspo Sonar', '2952 4304 0056', 'Sanjayram Sonar', NULL, 'Sumi Sonar', NULL, '2018-08-08', 'Debipur', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'W.B', '9800024725', NULL, 'female', NULL, NULL, 'Hindu', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/162_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:06:15'),
(163, NULL, 'LFS202425007', 1, 1, '2025-03-30', NULL, NULL, 'SANIA AFSANA', '', 'IMRAN ALI', NULL, 'SHORIFA KHATUN', NULL, '2019-10-19', 'Kantanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9932682449', NULL, 'female', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/163_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-03-30 15:55:28'),
(164, NULL, 'LFS202526054', 1, 1, '2025-04-04', NULL, NULL, 'NOORAMIN', '', 'MILAN SK', NULL, 'AULIYA BIBI', NULL, '2018-12-10', 'Kashipur', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8640080577', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/164_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-04 13:22:12'),
(165, NULL, 'LFS202526052', 1, 1, '2025-04-08', NULL, NULL, 'AHMAD HASAN', '', 'MD NUR AMIN', NULL, 'MOMINA KHATUN', NULL, '2020-11-29', 'Kashiadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7063295575', NULL, 'male', NULL, NULL, 'Muslim', 'General', 'Indian', NULL, NULL, NULL, NULL, NULL, 3, 1, 1, 1, NULL, 1, 1, 1, NULL, 'studentdb/165_profile.jpeg', NULL, NULL, 4, NULL, NULL, NULL, '2025-04-08 19:05:18'),
(166, NULL, 'LFS202526060', 1, 1, '2025-04-03', NULL, NULL, 'Fahima Aktar', NULL, 'Rajibul Hoque', NULL, 'Khadija Khatun', NULL, '2022-02-05', 'Ramnapara', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8597172324', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/166_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-03-29 15:02:05', '2025-04-03 14:06:38'),
(167, NULL, 'LFS202526005', 1, 1, '2025-03-29', NULL, NULL, 'EYANA HOSSAIN', NULL, 'ARIF HOSSAIN', NULL, 'UMMEHENA KHATUN', NULL, '2021-10-14', NULL, NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', NULL, NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/167_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-03-29 15:06:03', '2025-03-29 15:08:43'),
(168, NULL, 'LFS202526065', 1, 1, '2025-03-29', NULL, NULL, 'ANABIA HASAN', NULL, 'SUKURUDDIN', NULL, 'UMME KULSUM', NULL, '2021-02-15', 'Jalibagicha', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8906369403', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/168_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-03-29 15:12:39', '2025-03-29 15:31:03'),
(169, NULL, 'LFS202223002', 1, 1, '2025-03-31', NULL, NULL, 'IBRAHIM MEHEDI', NULL, 'MEHEDI HASAN', NULL, 'MST SUMINAZNIN', NULL, '2015-10-04', 'Kupkandhi', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9002880788', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/169_profile.jpg', NULL, NULL, 4, NULL, NULL, '2025-03-29 15:36:37', '2025-04-01 03:48:02'),
(170, NULL, 'LFS202526068', 1, 0, '2025-03-31', NULL, NULL, 'Aahan Abid', NULL, 'Milon Sk', NULL, 'Sabia Sultana', NULL, '2021-11-15', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8945807511', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/170_profile.jpg', NULL, NULL, 4, NULL, NULL, '2025-03-29 16:22:59', '2025-04-01 03:39:05'),
(171, NULL, 'LFS202425029', 1, 1, '2025-03-31', NULL, NULL, 'MD RIDAY SK', NULL, 'MD MAJARUL SK', NULL, 'AKTARUNNESHA KHATUN', NULL, '2019-12-29', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9064460398', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/171_profile.jpg', NULL, NULL, 4, NULL, NULL, '2025-03-30 16:01:49', '2025-04-01 03:35:33'),
(172, NULL, 'LFS202526067', 1, 1, '2025-03-31', NULL, NULL, 'ANIS AMAN', NULL, 'KAMRUJJAMAN', NULL, 'ARJIA KHATUN', NULL, '2019-11-30', 'Char paikmari', NULL, 'Hanumantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8116365457', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/172_profile.jpg', NULL, NULL, 4, NULL, NULL, '2025-03-30 16:04:44', '2025-04-01 03:36:05'),
(173, NULL, 'LFS202526063', 1, 1, '2025-04-04', NULL, NULL, 'MD TAMIM SK', NULL, 'MD SAMIM SK', NULL, 'MOUSUMI KHATUN', NULL, '2018-11-13', 'Char Natunpara', NULL, 'Hanumantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9874165524', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/173_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-03-30 16:08:30', '2025-04-04 11:52:26'),
(174, NULL, 'LFS202526041', 1, 1, '2025-04-04', NULL, NULL, 'MEHEK KHATUN', NULL, 'MD SAMIM SK', NULL, 'MOUSUMI KHATUN', NULL, '2021-02-16', 'Char Natunpara', NULL, 'Hanumantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9874165524', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/174_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-03-30 16:29:31', '2025-04-04 11:40:25'),
(175, NULL, 'LFS20192066', 1, 1, '2025-04-04', NULL, NULL, 'KHADIJA KHATUN', NULL, 'MD ABUL KHAYER', NULL, 'AYESHA BIBI', NULL, '2014-11-01', 'Charbalipara', NULL, 'Hanumantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9734575923', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/175_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 13:35:31', '2025-04-04 13:21:27'),
(176, NULL, 'LFS202526062', 1, 1, '2025-04-03', NULL, NULL, 'ABDUL RAHIM', NULL, 'JOBAYEL SK', NULL, 'SAGIRUN BIBI', NULL, '2018-05-10', 'RAMNA DANGAPARA', NULL, 'MAHISASTHALI', 'BHAGWANGOLA', 'MURSHIDABAD', '742135', 'West Bengal', '7585003824', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/176_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 13:41:27', '2025-04-03 14:20:48'),
(177, NULL, 'LFS202526068', 1, 1, '2025-04-04', NULL, NULL, 'MST GULAIKHA', NULL, 'MD ABDUL KHAYER', NULL, 'AYESHA BIBI', NULL, '2019-04-14', 'Charbalipara', NULL, 'Hanumantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9734575923', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 4, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/177_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 13:51:20', '2025-04-04 13:18:45'),
(178, NULL, 'LFS202526061', 1, 1, '2025-04-03', NULL, NULL, 'TANISA', NULL, 'JUBAIL SK', NULL, 'SAGIRAN BIBI', NULL, '2016-09-29', 'RAMNAPARA', NULL, 'MAHISASTHALI', 'BHAGWANGOLA', 'MURSHIDABAD', '742135', 'West Bengal', '7585003824', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/178_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 14:05:21', '2025-04-03 14:28:19'),
(179, NULL, 'LFS202324013', 1, 1, '2025-04-04', NULL, NULL, 'RIZWAN KHAN', NULL, 'WASIM AKRAM', NULL, 'SHILA BIBI', NULL, '2017-10-17', 'KASHIADANGA', NULL, 'MAHISASTHALI', 'BHAGWANGOLA', 'MURSHIDABAD', '742135', 'West Bengal', '7585885008', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/179_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 14:09:50', '2025-04-04 13:29:05'),
(180, NULL, 'LFS202425009', 1, 1, '2025-04-04', NULL, NULL, 'JUWARIYA KHATUN', NULL, 'JAHIRUL ISLAM', NULL, 'SABARUNNESHA BIBI', NULL, '2017-06-08', 'Dayanagar', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7687000815', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/180_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 14:15:14', '2025-04-04 12:58:15'),
(181, NULL, 'LFS201920038', 1, 1, '2025-04-04', NULL, NULL, 'AHIL SARKAR', NULL, 'SAHANUL ISLAM', NULL, 'NASIMA KHATUN', NULL, '2016-05-26', 'Mahisasthali', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9933956065', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/181_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 14:42:19', '2025-04-04 12:17:12'),
(182, NULL, 'LFS202122020', 1, 1, '2025-04-04', NULL, NULL, 'MD ARYAN', NULL, 'MD HAJIKUL ALAM', NULL, 'LOVELY BIBI', NULL, '2016-09-14', 'Kantanagar', NULL, 'Kantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9064180769', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/182_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 14:45:59', '2025-04-04 13:17:33'),
(183, NULL, 'LFS202526066', 1, 1, '2025-04-04', NULL, NULL, 'JINAN AMAN', NULL, 'KAMRUJJAMAN', NULL, 'ARJIA KHATUN', NULL, '2015-05-04', 'Char Paikmari', NULL, 'Hanumantanagar', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8345811656', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/183_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 14:50:45', '2025-04-04 13:25:08'),
(184, NULL, 'LFS202021026', 1, 1, '2025-04-04', NULL, NULL, 'EHAN HOQUE', NULL, 'AZMAL HOQUE', NULL, 'TAHASINA KHATUN', NULL, '2015-11-21', 'Sekherpara', NULL, 'Habaspur', 'Bhagwangola', 'Mushidabad', '742135', 'West Bengal', '7384560809', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/184_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-03 14:56:10', '2025-04-04 13:26:46'),
(185, NULL, 'LFS202324039', 1, 1, '2025-04-10', NULL, NULL, 'AZIZA SULTANA', NULL, 'MD ASADULLAH', NULL, 'SIMA BIBI', NULL, '2014-04-13', 'MADAPUR', NULL, 'BAHADURPUR', 'BHAGWANGOLA', 'MURSHIDABAD', '742135', 'West Bengal', '9641064870', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/185_profile.jpg', NULL, NULL, 4, NULL, NULL, '2025-04-03 15:02:13', '2025-04-11 01:13:01'),
(186, NULL, 'LFS201920081', 1, 1, '2025-04-11', NULL, NULL, 'ANKIT ROY', NULL, 'ASIT ROY', NULL, 'BABY ROY', NULL, '2015-04-23', 'Bahaliapara', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9933947637', NULL, 'male', NULL, NULL, 'Hindu', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/186_profile.jpg', NULL, NULL, 4, NULL, NULL, '2025-04-03 15:07:08', '2025-04-12 00:11:51'),
(187, NULL, 'LFS202324017', 1, 1, '2025-04-04', NULL, NULL, 'LIJA KHATUN', NULL, 'Attar Shah', NULL, 'Hadisha Khatun', NULL, '2017-03-20', 'Rambagh Badhpul', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7010161069', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/-1_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-04 13:08:30', '2025-04-04 13:08:30'),
(188, NULL, 'LFS202021014', 1, 1, '2025-04-22', NULL, NULL, 'Fahim Ahamed', NULL, 'Juel Hoque', NULL, 'Mosjida Bibi', NULL, '2016-03-17', 'Kupkandhi', NULL, 'Bhagwangola', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '9635205896', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/188_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-22 08:58:10', '2025-04-22 08:59:22'),
(189, NULL, 'LFS202526073', 1, 1, '2025-04-22', NULL, NULL, 'Alhaj Hoque', NULL, 'Rabiul Hoque', NULL, 'Lima Khatun', NULL, '2021-11-16', 'Kashiyadanga', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '8653856842', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/189_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-22 09:25:42', '2025-04-22 09:26:29'),
(190, NULL, 'LFS202526072', 1, 1, '2025-04-22', NULL, NULL, 'Anas Ali', NULL, 'Ramjan Ali', NULL, 'Runa Bibi', NULL, '2014-05-15', 'Naharpara', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7980812782', NULL, 'male', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/190_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-22 09:39:57', '2025-04-22 09:40:18'),
(191, NULL, 'LFS202526071', 1, 1, '2025-04-22', NULL, NULL, 'Aliya Ali', NULL, 'Ramjan Ali', NULL, 'Runa Bibi', NULL, '2015-11-13', 'Naharpara', NULL, 'Mahisasthali', 'Bhagwangola', 'Murshidabad', '742135', 'West Bengal', '7980812782', NULL, 'female', NULL, NULL, 'Muslim', 'General', NULL, NULL, NULL, NULL, NULL, NULL, 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'studentdb/191_profile.jpeg', NULL, NULL, 4, NULL, NULL, '2025-04-22 09:43:15', '2025-04-22 09:43:37');

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
(4, 'Rudra Prasan Sarkar', 'GCM', '9733812253', 'Asst. Teacher', 'Masters with B.Ed', '', '', '10', 'NA', 0, 'https://www.shutterstock.com/image-photo/businessman-glasses-showing-smile-260nw-1685161825.jpg', 'active', NULL, 4, 1, 1, '2018-03-27 06:41:08', '2024-10-03 07:06:19'),
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
(1, 'Welcome Screen Design', NULL, 1, 1, 1, 1, 'Little Flower School', 'Little Flower School new', 'The Best Primary <span style=\"color: #008CBA;\">English Medium</span> School For Your Child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'images/sGEHlj5AMZoBGBLAvK19S1eEZkiM02dgWzHtKqLM.webp', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-03-11 22:28:06'),
(5, 'Welcome Screen Design', NULL, 1, 1, 5, 1, 'Little Flower School', 'Little Flower School', 'aaa                        The Best English Medium Primary School for your child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'images/XwpdWMIK7KKcqzB5fvGHgRMUSLCQQcY2tsMZROz6.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-03-11 22:15:43'),
(9, 'Welcome Screen Design', NULL, 1, 1, 9, 1, 'Little Flower School', 'Little Flower School 3', 'The Best English Medium Primary School for your child', 'Welcome to Little Flower School, where we believe in nurturing young minds and fostering a love for learning in a vibrant and inclusive environment.', 'images/3Gq9lbmCNuLEYFlYPIAmCftynkNqVJYvzVFQLdFn.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-03-11 22:22:44'),
(27, 'Welcome Screen', NULL, 1, 3, 1, 1, 'Little Flower School', 'School Bus', 'LFS Facility Subtitle', 'Ensure safe and supportive transportation for all students', 'fa fa-bus-alt fa-3x', 'success', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-03-24 22:12:24'),
(28, 'Welcome Screen', NULL, 1, 3, 2, 1, 'Little Flower School', 'Playground', 'LFS Facility Subtitle', 'Playground is a place where children can explore, learn, and have fun in presence of teacher', 'fa fa-futbol fa-3x ', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-03-24 22:12:51'),
(29, 'Welcome Screen', NULL, 1, 3, 3, 1, 'Little Flower School', 'Healthy Canteen', 'LFS Facility Subtitle', 'A healthy canteen is a place where students can eat healthy and nutritious food', 'fa fa-home fa-3x ', 'warning', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-03-24 22:13:23'),
(30, 'Welcome Screen', NULL, 1, 3, 4, 1, 'Little Flower School', 'Positive Learning', 'LFS Facility Subtitle', 'A positive learning environment is a place where students can learn and grow in a supportive and empowering environment', 'fa fa-chalkboard-teacher fa-3x', 'info', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-03-24 22:14:50'),
(31, 'Welcome Screen Design', NULL, 1, 5, 1, 1, 'Little Flower School', 'From Principal Desk', 'LFS Facility Subtitle', '<p class=\"mb-4\">\nAs we embark on this new academic year, I want to take a moment to express my deepest\ngratitude to each and every one of you - students, parents, and faculty members. Your\n collective efforts have made our school a beacon of excellence, and I am honored to lead\n  this community.\n</p>\n<p>\n  To our students, I urge you to dream big, to strive for greatness, and to never settle for\n  mediocrity. Remember, your potential is limitless, and it is our responsibility as educators\n  to help you unlock it. Don\'t be afraid to take risks, to ask questions, and to push beyond\n  your comfort zones.\n</p>\n<p>\n  To our parents, I thank you for entrusting us with the most precious gifts you have - your\n  children. We promise to nurture, guide, and support them every step of the way, as they grow\n  into compassionate, responsible, and innovative leaders of tomorrow.\n </p>\n <p>\n  Together, let us make this year one to remember, one that will be filled with laughter,\n  learning, and limitless possibilities.\"\n </p>\n\n <p>With warm regards,</p><br />\n <p><b>Rudra Prasad Sarkar</b><br /> Principal, Little Flower School</p>', 'images/principal.jpg', 'info', NULL, 'Rudra Prasan Sarkar', 'Principal', NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2025-03-10 07:44:51');

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
(3, 'School Facility', 'School Facilities', 'ccc', 'We understand that every child is unique. Our dedicated staff is committed to providing personalized support to ensure  full potential.', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, '2025-03-05 08:46:04'),
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
(4, 'Admin', 'admin@gmail.com', '2024-09-23 20:50:02', '$2y$10$RyE2pp17XVshwHlqHzJSN.jiHAFqrX1aqIydx2zaW/7eYrdGDwoxy', NULL, 'SIX5VsNf2Fht3fA8SkdNfMhFiOCnewWIXpBFu2crOHl1ZpR3s3Mn8KZzHAsp', 4, 2, 0, 0, '2024-06-25 06:57:21', '2024-06-25 06:57:21'),
(5, 'Super Admin', 'supadmin@gmail.com', '2024-09-23 20:50:02', '$2y$10$RyE2pp17XVshwHlqHzJSN.jiHAFqrX1aqIydx2zaW/7eYrdGDwoxy', NULL, 'WMptTtuOrpyyGXf1HZAuhQfj23saCMeRZglmDZlEOfOUWoOIgwMEB2ONvtw9', 5, 1, 0, 0, '2024-06-25 06:57:21', '2024-06-25 06:57:21');

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
-- Indexes for table `fee_collections`
--
ALTER TABLE `fee_collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_collection_details`
--
ALTER TABLE `fee_collection_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_extras`
--
ALTER TABLE `fee_extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_mandates`
--
ALTER TABLE `fee_mandates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_mandate_dates`
--
ALTER TABLE `fee_mandate_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_particulars`
--
ALTER TABLE `fee_particulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_specials`
--
ALTER TABLE `fee_specials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_structures`
--
ALTER TABLE `fee_structures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_student_records`
--
ALTER TABLE `fee_student_records`
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
-- Indexes for table `shop01_owners`
--
ALTER TABLE `shop01_owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop01_owners_email_unique` (`email`);

--
-- Indexes for table `shop02_categories`
--
ALTER TABLE `shop02_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop02_categories_name_unique` (`name`),
  ADD UNIQUE KEY `shop02_categories_slug_unique` (`slug`);

--
-- Indexes for table `shop03_items`
--
ALTER TABLE `shop03_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop03_items_name_unique` (`name`),
  ADD UNIQUE KEY `shop03_items_slug_unique` (`slug`),
  ADD KEY `shop03_items_category_id_foreign` (`category_id`),
  ADD KEY `shop03_items_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `shop04_products`
--
ALTER TABLE `shop04_products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop04_products_sku_unique` (`sku`);

--
-- Indexes for table `shop05_units`
--
ALTER TABLE `shop05_units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shop05_units_name_unique` (`name`),
  ADD UNIQUE KEY `shop05_units_slug_unique` (`slug`),
  ADD UNIQUE KEY `shop05_units_unit_title_unique` (`unit_title`),
  ADD UNIQUE KEY `shop05_units_unit_code_unique` (`unit_code`),
  ADD UNIQUE KEY `shop05_units_unit_amount_unique` (`unit_amount`);

--
-- Indexes for table `shop06_unit_refs`
--
ALTER TABLE `shop06_unit_refs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop07_unit_ref_pts`
--
ALTER TABLE `shop07_unit_ref_pts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop08_purchases`
--
ALTER TABLE `shop08_purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop09_purchase_products`
--
ALTER TABLE `shop09_purchase_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop10_sales`
--
ALTER TABLE `shop10_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop11_sale_products`
--
ALTER TABLE `shop11_sale_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop12_sale_user_wishlists`
--
ALTER TABLE `shop12_sale_user_wishlists`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fee_collections`
--
ALTER TABLE `fee_collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_collection_details`
--
ALTER TABLE `fee_collection_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_extras`
--
ALTER TABLE `fee_extras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_mandates`
--
ALTER TABLE `fee_mandates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_mandate_dates`
--
ALTER TABLE `fee_mandate_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_particulars`
--
ALTER TABLE `fee_particulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fee_specials`
--
ALTER TABLE `fee_specials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_structures`
--
ALTER TABLE `fee_structures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fee_student_records`
--
ALTER TABLE `fee_student_records`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `myclasses`
--
ALTER TABLE `myclasses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `myclasssections`
--
ALTER TABLE `myclasssections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `session_events`
--
ALTER TABLE `session_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
-- AUTO_INCREMENT for table `shop01_owners`
--
ALTER TABLE `shop01_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop02_categories`
--
ALTER TABLE `shop02_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop03_items`
--
ALTER TABLE `shop03_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop04_products`
--
ALTER TABLE `shop04_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop05_units`
--
ALTER TABLE `shop05_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop06_unit_refs`
--
ALTER TABLE `shop06_unit_refs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop07_unit_ref_pts`
--
ALTER TABLE `shop07_unit_ref_pts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop08_purchases`
--
ALTER TABLE `shop08_purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop09_purchase_products`
--
ALTER TABLE `shop09_purchase_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop10_sales`
--
ALTER TABLE `shop10_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop11_sale_products`
--
ALTER TABLE `shop11_sale_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop12_sale_user_wishlists`
--
ALTER TABLE `shop12_sale_user_wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentcrs`
--
ALTER TABLE `studentcrs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `studentdbs`
--
ALTER TABLE `studentdbs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shop03_items`
--
ALTER TABLE `shop03_items`
  ADD CONSTRAINT `shop03_items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `shop02_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `shop03_items_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `shop01_owners` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
