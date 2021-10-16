-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 06:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jop-finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_us`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for\",\"ar\":\"\\u0647\\u0646\\u0627\\u0643 \\u062d\\u0642\\u064a\\u0642\\u0629 \\u0645\\u062b\\u0628\\u062a\\u0629 \\u0645\\u0646\\u0630 \\u0632\\u0645\\u0646 \\u0637\\u0648\\u064a\\u0644 \\u0648\\u0647\\u064a \\u0623\\u0646 \\u0627\\u0644\\u0645\\u062d\\u062a\\u0648\\u0649 \\u0627\\u0644\\u0645\\u0642\\u0631\\u0648\\u0621 \\u0644\\u0635\\u0641\\u062d\\u0629 \\u0645\\u0627 \\u0633\\u064a\\u0644\\u0647\\u064a \\u0627\\u0644\\u0642\\u0627\\u0631\\u0626 \\u0639\\u0646 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u0643\\u0644 \\u0627\\u0644\\u062e\\u0627\\u0631\\u062c\\u064a \\u0644\\u0644\\u0646\\u0635 \\u0623\\u0648 \\u0634\\u0643\\u0644 \\u062a\\u0648\\u0636\\u0639 \\u0627\\u0644\\u0641\\u0642\\u0631\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u0635\\u0641\\u062d\\u0629 \\u0627\\u0644\\u062a\\u064a \\u064a\\u0642\\u0631\\u0623\\u0647\\u0627. \\u0627\\u0644\\u0647\\u062f\\u0641 \\u0645\\u0646 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0647\\u0648 \\u0623\\u0646\\u0647 \\u064a\\u062d\\u062a\\u0648\\u064a \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0632\\u064a\\u0639 \\u0637\\u0628\\u064a\\u0639\\u064a -\\u0625\\u0644\\u0649 \\u062d\\u062f \\u0645\\u0627- \\u0644\\u0644\\u0623\\u062d\\u0631\\u0641 \\u060c \\u0628\\u062f\\u0644\\u0627\\u064b \\u0645\\u0646 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\\"\\u0647\\u0646\\u0627 \\u064a\\u0648\\u062c\\u062f \\u0645\\u062d\\u062a\\u0648\\u0649 \\u0646\\u0635\\u064a \\u060c \\u0647\\u0646\\u0627 \\u064a\\u0648\\u062c\\u062f \\u0645\\u062d\\u062a\\u0648\\u0649 \\u0646\\u0635\\u064a\\\" \\u060c \\u0645\\u0645\\u0627 \\u064a\\u062c\\u0639\\u0644\\u0647\\u0627 \\u062a\\u0628\\u062f\\u0648 \\u0648\\u0643\\u0623\\u0646\\u0647\\u0627 \\u0625\\u0646\\u062c\\u0644\\u064a\\u0632\\u064a\\u0629 \\u0642\\u0627\\u0628\\u0644\\u0629 \\u0644\\u0644\\u0642\\u0631\\u0627\\u0621\\u0629. \\u062a\\u0633\\u062a\\u062e\\u062f\\u0645 \\u0627\\u0644\\u0639\\u062f\\u064a\\u062f \\u0645\\u0646 \\u062d\\u0632\\u0645 \\u0627\\u0644\\u0646\\u0634\\u0631 \\u0627\\u0644\\u0645\\u0643\\u062a\\u0628\\u064a \\u0648\\u0645\\u062d\\u0631\\u0631\\u064a \\u0635\\u0641\\u062d\\u0627\\u062a \\u0627\\u0644\\u0648\\u064a\\u0628 \\u0627\\u0644\\u0622\\u0646 Lorem Ipsum \\u0643\\u0646\\u0635 \\u0646\\u0645\\u0648\\u0630\\u062c \\u0627\\u0641\\u062a\\u0631\\u0627\\u0636\\u064a \\u060c \\u0648\\u0628\\u062d\\u062b \\u0639\\u0646 \\u0645\\u0644\\u0641\\u0627\\u062a\"}', '1693603794.jpg', NULL, '2021-10-16 04:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `categores`
--

CREATE TABLE `categores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categores`
--

INSERT INTO `categores` (`id`, `category`, `icon`, `created_at`, `updated_at`) VALUES
(8, '{\"en\":\"Accounting\",\"ar\":\"\\u0645\\u062d\\u0627\\u0633\\u0628\\u0629\"}', 'fa-calculator', '2021-10-11 01:56:41', '2021-10-11 01:56:41'),
(10, '{\"en\":\"Medical\",\"ar\":\"\\u0637\\u0628\\u064a\"}', 'fa-notes-medical', '2021-10-11 01:59:07', '2021-10-11 01:59:07'),
(11, '{\"en\":\"IT\",\"ar\":\"\\u062a\\u0643\\u0646\\u0648\\u0644\\u0648\\u062c\\u064a\\u0629 \\u0627\\u0644\\u0645\\u0639\\u0644\\u0648\\u0645\\u0627\\u062a\"}', 'fa-wifi', '2021-10-16 13:55:38', '2021-10-16 13:55:38'),
(12, '{\"en\":\"programing\",\"ar\":\"\\u0628\\u0631\\u0645\\u062c\\u0629\"}', 'fa-laptop', '2021-10-16 13:57:13', '2021-10-16 13:57:13'),
(13, '{\"en\":\"Designer\",\"ar\":\"\\u0645\\u0635\\u0645\\u0645\"}', 'fa-pencil-ruler', '2021-10-16 13:58:08', '2021-10-16 13:58:08'),
(14, '{\"en\":\"Marketing\",\"ar\":\"\\u0645\\u0633\\u0648\\u0642\"}', 'fa-poll', '2021-10-16 13:59:42', '2021-10-16 13:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `connacts`
--

CREATE TABLE `connacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jops`
--

CREATE TABLE `jops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jop_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `jop_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categore_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jops`
--

INSERT INTO `jops` (`id`, `jop_name`, `company_name`, `location`, `salary`, `jop_description`, `categore_id`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"FullStack web developer\",\"ar\":null}', 'Microsoft', '{\"en\":\"Cairo\",\"ar\":null}', 5000, '{\"en\":\"we need good developer\",\"ar\":\"\\u0646\\u062d\\u062a\\u0627\\u062c \\u0627\\u0644\\u064a \\u0645\\u0628\\u0631\\u0645\\u062c \\u0634\\u0627\\u0637\\u0631\"}', 12, '2021-10-11 02:01:25', '2021-10-16 14:13:25'),
(2, '{\"en\":\"Acounter\",\"ar\":\"\\u0645\\u062d\\u0627\\u0633\\u0628\"}', 'Microsoft', '{\"en\":\"Giza\",\"ar\":\"\\u0627\\u0644\\u062c\\u064a\\u0632\\u0629\"}', 6000, '{\"en\":\"we need good acounting\",\"ar\":\"\\u0646\\u062d\\u062a\\u0627\\u062c \\u0627\\u0644\\u064a \\u0645\\u062d\\u0627\\u0633\\u0628 \\u062c\\u064a\\u062f\"}', 8, '2021-10-16 14:02:46', '2021-10-16 14:02:46'),
(3, '{\"en\":\"network Engineering\",\"ar\":\"\\u0645\\u0647\\u0646\\u062f\\u0633 \\u0634\\u0628\\u0643\\u0627\\u062a\"}', 'Microsoft', '{\"en\":\"Helwan\",\"ar\":\"\\u062d\\u0644\\u0648\\u0627\\u0646\"}', 7000, '{\"en\":\"we need good network engineering\",\"ar\":\"\\u0646\\u062d\\u062a\\u0627\\u062c \\u0627\\u0644\\u064a \\u0645\\u0647\\u0646\\u062f\\u0633 \\u0634\\u0628\\u0643\\u0627\\u062a \\u062c\\u064a\\u062f\"}', 11, '2021-10-16 14:04:46', '2021-10-16 14:04:46');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2018_08_16_211526_create_categores_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_08_12_115914_create_connacts_table', 1),
(7, '2021_08_12_214934_create_jops_table', 1),
(8, '2021_08_13_120314_create_homes_table', 1),
(9, '2021_08_15_124811_create_profiles_table', 1),
(10, '2021_08_17_171107_create_abouts_table', 1),
(11, '2021_08_18_141843_create_teams_table', 1),
(12, '2021_08_20_003458_create_user_jop', 1),
(13, '2021_08_24_193524_create_questions_table', 1),
(14, '2021_08_30_200704_create_services_table', 1),
(15, '2021_09_12_081339_create_testemonials_table', 1);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `image`, `gender`, `status`, `education_degree`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hossam Ibrahim', '1894361585.png', 'mail', 'Single', 'bachelor', 1, '2021-10-11 01:41:49', '2021-10-11 01:41:49'),
(2, 'Microsoft', '272433494.jpg', 'mail', 'Married', 'Other', 2, '2021-10-11 01:45:36', '2021-10-11 01:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(800) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(2500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"How much pay for three month ?\",\"ar\":\"\\u0643\\u0645 \\u0623\\u062c\\u0631 \\u0644\\u0645\\u062f\\u0629 \\u062b\\u0644\\u0627\\u062b\\u0629 \\u0623\\u0634\\u0647\\u0631\\u061f\"}', '{\"en\":\"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it lo\",\"ar\":\"\\u0647\\u0646\\u0627\\u0643 \\u062d\\u0642\\u064a\\u0642\\u0629 \\u0645\\u062b\\u0628\\u062a\\u0629 \\u0645\\u0646\\u0630 \\u0632\\u0645\\u0646 \\u0637\\u0648\\u064a\\u0644 \\u0648\\u0647\\u064a \\u0623\\u0646 \\u0627\\u0644\\u0645\\u062d\\u062a\\u0648\\u0649 \\u0627\\u0644\\u0645\\u0642\\u0631\\u0648\\u0621 \\u0644\\u0635\\u0641\\u062d\\u0629 \\u0645\\u0627 \\u0633\\u064a\\u0644\\u0647\\u064a \\u0627\\u0644\\u0642\\u0627\\u0631\\u0626 \\u0639\\u0646 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u0643\\u0644 \\u0627\\u0644\\u062e\\u0627\\u0631\\u062c\\u064a \\u0644\\u0644\\u0646\\u0635 \\u0623\\u0648 \\u0634\\u0643\\u0644 \\u062a\\u0648\\u0636\\u0639 \\u0627\\u0644\\u0641\\u0642\\u0631\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u0635\\u0641\\u062d\\u0629 \\u0627\\u0644\\u062a\\u064a \\u064a\\u0642\\u0631\\u0623\\u0647\\u0627. \\u0627\\u0644\\u0647\\u062f\\u0641 \\u0645\\u0646 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0647\\u0648 \\u0623\\u0646\\u0647 \\u064a\\u062d\\u062a\\u0648\\u064a \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0632\\u064a\\u0639 \\u0637\"}', '2021-10-16 05:07:29', '2021-10-16 05:07:29'),
(2, '{\"en\":\"Do you need to register?\",\"ar\":\"\\u0647\\u0644 \\u062a\\u0631\\u064a\\u062f \\u062a\\u0633\\u062c\\u064a\\u0644\\u061f\"}', '{\"en\":\"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it\",\"ar\":\"\\u0647\\u0646\\u0627\\u0643 \\u062d\\u0642\\u064a\\u0642\\u0629 \\u0645\\u062b\\u0628\\u062a\\u0629 \\u0645\\u0646\\u0630 \\u0632\\u0645\\u0646 \\u0637\\u0648\\u064a\\u0644 \\u0648\\u0647\\u064a \\u0623\\u0646 \\u0627\\u0644\\u0645\\u062d\\u062a\\u0648\\u0649 \\u0627\\u0644\\u0645\\u0642\\u0631\\u0648\\u0621 \\u0644\\u0635\\u0641\\u062d\\u0629 \\u0645\\u0627 \\u0633\\u064a\\u0644\\u0647\\u064a \\u0627\\u0644\\u0642\\u0627\\u0631\\u0626 \\u0639\\u0646 \\u0627\\u0644\\u062a\\u0631\\u0643\\u064a\\u0632 \\u0639\\u0644\\u0649 \\u0627\\u0644\\u0634\\u0643\\u0644 \\u0627\\u0644\\u062e\\u0627\\u0631\\u062c\\u064a \\u0644\\u0644\\u0646\\u0635 \\u0623\\u0648 \\u0634\\u0643\\u0644 \\u062a\\u0648\\u0636\\u0639 \\u0627\\u0644\\u0641\\u0642\\u0631\\u0627\\u062a \\u0641\\u064a \\u0627\\u0644\\u0635\\u0641\\u062d\\u0629 \\u0627\\u0644\\u062a\\u064a \\u064a\\u0642\\u0631\\u0623\\u0647\\u0627. \\u0627\\u0644\\u0647\\u062f\\u0641 \\u0645\\u0646 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0647\\u0648 \\u0623\\u0646\\u0647 \\u064a\\u062d\\u062a\\u0648\\u064a \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0632\\u064a\\u0639 \\u0637 \\u0627\\u0633\\u062a\\u062e\\u062f\\u0627\\u0645 \\u0644\\u0648\\u0631\\u064a\\u0645 \\u0625\\u064a\\u0628\\u0633\\u0648\\u0645 \\u0647\\u0648 \\u0623\\u0646\\u0647 \\u064a\\u062d\\u062a\\u0648\\u064a \\u0639\\u0644\\u0649 \\u062a\\u0648\\u0632\\u064a\\u0639 \\u0637\"}', '2021-10-16 05:08:05', '2021-10-16 05:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `tittle`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Creative Jobs\",\"ar\":\"\\u0648\\u0638\\u0627\\u0626\\u0641 \\u0627\\u0628\\u062f\\u0627\\u0639\\u064a\\u0647\"}', 'fa-compress-arrows-alt', '{\"en\":\"Lorem insum dolor sit amit consectetu adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.\",\"ar\":\"\\u0627\\u0644\\u0623\\u0644\\u0645 \\u0646\\u0641\\u0633\\u0647 \\u0623\\u0643\\u062b\\u0631 \\u0625\\u062b\\u0627\\u0631\\u0629 \\u0644\\u0644\\u0627\\u0647\\u062a\\u0645\\u0627\\u0645. \\u0623\\u0639\\u0645\\u0649 \\u0645\\u0646 \\u0627\\u0644\\u0625\\u062f\\u0627\\u0646\\u0629 \\u060c \\u0633\\u0623\\u0634\\u0631\\u062d \\u0644\\u0623\\u0648\\u0644\\u0626\\u0643 \\u0627\\u0644\\u0630\\u064a\\u0646 \\u064a\\u0647\\u0631\\u0628\\u0648\\u0646 \\u0645\\u0646 \\u0622\\u0644\\u0627\\u0645 \\u0627\\u0644\\u062d\\u064a\\u0627\\u0629.\"}', '2021-10-11 02:12:35', '2021-10-11 02:12:35'),
(2, '{\"en\":\"Find your suitable jop\",\"ar\":\"\\u0627\\u064a\\u062c\\u0627\\u062f \\u0648\\u0638\\u0627\\u0626\\u0641\"}', 'fa-search-plus', '{\"en\":\"Lorem insum dolor sit amit consectetu adipisicing elit. Obcaecati reprehenderi explicabo quos fugit vitae dolorum.\",\"ar\":\"\\u0627\\u0644\\u0623\\u0644\\u0645 \\u0646\\u0641\\u0633\\u0647 \\u0623\\u0643\\u062b\\u0631 \\u0625\\u062b\\u0627\\u0631\\u0629 \\u0644\\u0644\\u0627\\u0647\\u062a\\u0645\\u0627\\u0645. \\u0623\\u0639\\u0645\\u0649 \\u0627\\u0644\\u0625\\u062f\\u0627\\u0646\\u0629 \\u060c \\u0633\\u0623\\u0634\\u0631\\u062d \\u0644\\u0623\\u0648\\u0644\\u0626\\u0643 \\u0627\\u0644\\u0630\\u064a\\u0646 \\u064a\\u0647\\u0631\\u0628\\u0648\\u0646 \\u0645\\u0646 \\u0622\\u0644\\u0627\\u0645 \\u0627\\u0644\\u062d\\u064a\\u0627\\u0629.\"}', '2021-10-11 02:14:19', '2021-10-11 02:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `jop`, `created_at`, `updated_at`) VALUES
(1, 'Hossam Ibrahim', '1302496307.jpg', 'Doctor', '2021-10-16 04:14:48', '2021-10-16 04:14:48'),
(2, 'Anwar', '375046895.jpg', 'Designer', '2021-10-16 04:15:21', '2021-10-16 04:15:21'),
(3, 'Saad', '1049531604.jpg', 'Developer', '2021-10-16 04:15:49', '2021-10-16 04:15:49'),
(5, 'Sami', '398330727.jpg', 'Acounting', '2021-10-16 04:16:30', '2021-10-16 04:16:30'),
(6, 'Noor', '405546629.jpg', 'IT', '2021-10-16 04:16:57', '2021-10-16 04:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `testemonials`
--

CREATE TABLE `testemonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opinion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testemonials`
--

INSERT INTO `testemonials` (`id`, `image`, `name`, `opinion`, `created_at`, `updated_at`) VALUES
(1, '1332952961.jpg', '{\"en\":\"Hossam Ibrahim\",\"ar\":\"\\u062d\\u0633\\u0627\\u0645\"}', '{\"en\":\"its very good for find jop\",\"ar\":\"\\u0647\\u0630\\u0627 \\u0645\\u0648\\u0642\\u0639 \\u062c\\u064a\\u062f \\u0644\\u0627\\u064a\\u062c\\u0627\\u062f \\u0648\\u0638\\u0627\\u0626\\u0641\"}', '2021-10-11 02:04:06', '2021-10-11 02:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hossam Ibrahim', 'hossamibrahim66666@gmail.com', 'Personal', NULL, '$2y$10$/aX97NxMwagim8amJ/RGUuAq1x42s6GoX2qTSx7JJ.jYULHWWlSfC', NULL, NULL, NULL, '2021-10-11 01:41:06', '2021-10-11 01:41:06'),
(2, 'Microsoft', 'Company@gamil.com', 'Company', NULL, '$2y$10$mENwvsaX4P1zJBc.nm9x7uMmD0lsShpabwzCH3gBsNz5c.VN3wW2K', NULL, NULL, NULL, '2021-10-11 01:42:42', '2021-10-11 01:42:42'),
(3, 'Admin', 'Admin@gmail.com', 'Personal', NULL, '$2y$10$.tPc4Nil6DVXdFK3KAeoEeYz8QTZsrF6BVOioQhZI1WbP6aRhqSk6', NULL, NULL, NULL, '2021-10-11 01:46:07', '2021-10-11 01:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_jop`
--

CREATE TABLE `user_jop` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jop_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categores`
--
ALTER TABLE `categores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categores_category_unique` (`category`),
  ADD UNIQUE KEY `categores_icon_unique` (`icon`);

--
-- Indexes for table `connacts`
--
ALTER TABLE `connacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `connacts_email_unique` (`email`),
  ADD UNIQUE KEY `connacts_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jops`
--
ALTER TABLE `jops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jops_categore_id_foreign` (`categore_id`);

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
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_user_id_unique` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_tittle_unique` (`tittle`),
  ADD UNIQUE KEY `services_icon_unique` (`icon`),
  ADD UNIQUE KEY `services_description_unique` (`description`) USING HASH;

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testemonials`
--
ALTER TABLE `testemonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_jop`
--
ALTER TABLE `user_jop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_jop_jop_id_foreign` (`jop_id`),
  ADD KEY `user_jop_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categores`
--
ALTER TABLE `categores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `connacts`
--
ALTER TABLE `connacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jops`
--
ALTER TABLE `jops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testemonials`
--
ALTER TABLE `testemonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_jop`
--
ALTER TABLE `user_jop`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jops`
--
ALTER TABLE `jops`
  ADD CONSTRAINT `jops_categore_id_foreign` FOREIGN KEY (`categore_id`) REFERENCES `categores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_jop`
--
ALTER TABLE `user_jop`
  ADD CONSTRAINT `user_jop_jop_id_foreign` FOREIGN KEY (`jop_id`) REFERENCES `jops` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_jop_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
