-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 05:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `avaters`
--

CREATE TABLE `avaters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaters_IMG` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AttDate` date NOT NULL,
  `AttTime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `avaters`
--

INSERT INTO `avaters` (`id`, `name`, `avaters_IMG`, `AttDate`, `AttTime`, `created_at`, `updated_at`) VALUES
(10, 'Manager5', 'star5.jpg', '2021-01-18', '16:01:52', NULL, NULL),
(11, 'Employee4', 'star4.jpg', '2021-01-17', '16:01:52', NULL, NULL),
(20, 'Manager1', '6005e5f669ef4.jpg', '2021-01-18', '19:47:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#a64eef',
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendars`
--

INSERT INTO `calendars` (`id`, `employee_id`, `title`, `color`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 2, 'All Day Event', '#e826d8', '2021-01-01 00:00:00', '2021-01-01 23:59:00', '2021-01-16 23:51:45', '2021-01-16 23:51:45'),
(2, 1, 'Long Event', '#a64eef', '2021-01-07 00:00:00', '2021-01-09 23:59:00', '2021-01-16 23:54:43', '2021-01-16 23:56:54'),
(3, 2, 'Repeating Event', '#a64eef', '2021-01-09 16:00:00', '2021-01-09 22:00:00', '2021-01-16 23:55:53', '2021-01-16 23:56:14'),
(4, 3, 'Conference', '#b15fdd', '2021-01-16 00:00:00', '2021-01-17 23:58:00', '2021-01-17 00:03:33', '2021-01-17 00:05:46'),
(5, 4, 'Repeating Event', '#a64eef', '2021-01-16 16:00:00', '2021-01-16 22:00:00', '2021-01-17 00:06:35', '2021-01-17 00:06:35'),
(6, 6, 'Meeting', '#a64eef', '2021-01-17 10:30:00', '2021-01-17 12:30:00', '2021-01-17 00:07:15', '2021-01-17 00:07:15'),
(7, 7, 'Lunch', '#a64eef', '2021-01-17 13:00:00', '2021-01-17 14:30:00', '2021-01-17 00:07:51', '2021-01-17 00:07:51'),
(8, 7, 'Conference Call', '#a64eef', '2021-01-17 15:00:00', '2021-01-17 16:00:00', '2021-01-17 00:08:41', '2021-01-17 00:08:41'),
(9, 8, 'Party', '#a64eef', '2021-01-17 17:00:00', '2021-01-17 18:30:00', '2021-01-17 00:09:52', '2021-01-17 00:09:52'),
(10, 9, 'Meeting', '#a64eef', '2021-01-17 19:00:00', '2021-01-17 21:30:00', '2021-01-17 00:10:32', '2021-01-17 00:10:32'),
(11, 2, 'vghgvg', '#a64eef', '2021-01-20 16:40:00', '2021-01-23 16:40:00', '2021-01-17 00:40:47', '2021-01-17 00:42:27'),
(12, 7, 'Conference', '#b15fdd', '2021-01-16 00:00:00', '2021-01-17 23:58:00', '2021-01-17 00:03:33', '2021-01-17 00:05:46'),
(13, 3, 'Repeating Event', '#a64eef', '2021-01-16 16:00:00', '2021-01-16 22:00:00', '2021-01-17 00:06:35', '2021-01-17 00:06:35'),
(14, 1, 'Meeting', '#a64eef', '2021-01-20 14:10:00', '2021-01-20 18:11:00', '2021-01-17 22:11:09', '2021-01-18 05:29:57'),
(15, 1, 'Meeting', '#a64eef', '2021-01-19 22:29:00', '2021-01-21 22:29:00', '2021-01-18 05:29:37', '2021-01-18 05:29:37'),
(16, 1, 'Lunch', '#a64eef', '2021-01-21 04:40:00', '2021-01-22 03:41:00', '2021-01-18 11:41:07', '2021-01-18 11:41:07');

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
(1, 'Marketing Department', '2020-12-12 06:42:28', '2020-12-12 06:42:28'),
(2, 'Software Engineering Department', '2020-12-12 06:22:16', '2020-12-12 06:43:09'),
(3, 'Marketing Department', '2020-12-12 06:21:54', '2020-12-12 06:37:38'),
(4, 'Finance Department', '2020-12-12 06:42:45', '2020-12-12 06:42:45'),
(5, 'Human Resource Department', '2020-12-12 06:42:45', '2020-12-12 06:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `to_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmailSender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email_MSG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_current` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `to_email`, `form_email`, `Email_title`, `EmailSender`, `Email_MSG`, `Email_file`, `date_current`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Employee2@Employee2.com', 'Human Resource Department', 'Training Plan', 'Human Resource Department', 'You Plan has be Seleted. Pls Do the Plan.🤗', '', '2021-01-17', '2021-01-16 12:00:12', '2021-01-16 12:00:12', NULL),
(2, 'Employee2@Employee2.com', 'Human Resource Department', 'Topic Score', 'Human Resource Department', 'You Score is 100/100. Keep it. “Don’t Let Yesterday Take Up Too Much of Today.” – Will Rogers ', '', '2021-01-17', '2021-01-16 12:05:11', '2021-01-16 12:05:11', NULL),
(3, 'Employee5@Employee5.com', 'Human Resourse Department', 'Default Email', 'Human Resourse Department', 'Welcome to The Company. Any Question can ask anyone.', 'unnamed.gif', '2021-01-17', '2021-01-17 01:45:00', '2021-01-17 01:45:00', NULL),
(4, 'Employee1@Employee1.com', 'Human Resourse Department', 'Default Email', 'Human Resourse Department', 'Welcome to The Company. Any Question can ask anyone.', 'unnamed.gif', '2021-01-17', '2021-01-17 01:45:00', '2021-01-17 01:45:00', NULL),
(5, 'Employee6@Employee6.com', 'Human Resourse Department', 'Default Email', 'Human Resourse Department', 'Welcome to The Company. Any Question can ask anyone.', 'unnamed.gif', '2021-01-18', '2021-01-17 22:04:53', '2021-01-17 22:04:53', NULL),
(6, 'Employee2@Employee2.com', 'Human Resourse Department', 'Default Email', 'Human Resourse Department', 'Welcome to The Company. Any Question can ask anyone.', 'unnamed.gif', '2021-01-17', '2021-01-17 01:45:00', '2021-01-17 01:45:00', NULL),
(7, 'Employee6@Employee6.com', 'Human Resourse Department', 'Default Email', 'Human Resourse Department', 'Welcome to The Company. Any Question can ask anyone.', 'unnamed.gif', '2021-01-18', '2021-01-18 05:23:48', '2021-01-18 05:23:48', NULL),
(9, 'Employee6@Employee6.com', 'Human Resource Department', 'Topic Score', 'Human Resource Department', 'You Score is 60/100. Keep it. “Don’t Let Yesterday Take Up Too Much of Today.” – Will Rogers ', '', '2021-01-18', '2021-01-18 05:38:56', '2021-01-18 05:38:56', NULL),
(10, 'Employee6@Employee6.com', 'Human Resourse Department', 'Default Email', 'Human Resourse Department', 'Welcome to The Company. Any Question can ask anyone.', 'unnamed.gif', '2021-01-19', '2021-01-18 11:37:08', '2021-01-18 11:37:08', NULL),
(11, 'Employee6@Employee6.com', 'Human Resource Department', 'Training Plan', 'Human Resource Department', 'You Plan has be Seleted. Pls Do the Plan.🤗', '', '2021-01-19', '2021-01-18 11:45:30', '2021-01-18 11:45:30', NULL),
(12, 'Employee6@Employee6.com', 'Human Resource Department', 'Topic Score', 'Human Resource Department', 'You Score is 50/100. Keep it. “Don’t Let Yesterday Take Up Too Much of Today.” – Will Rogers ', '', '2021-01-19', '2021-01-18 11:47:21', '2021-01-18 11:47:21', NULL),
(13, NULL, 'Human Resourse Department', 'Leave Application', 'Human Resourse Department', 'Your Leave already Approved.🙂', '', '2021-01-19', '2021-01-18 11:49:33', '2021-01-18 11:49:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evalustion_answers`
--

CREATE TABLE `evalustion_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `question1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questionNum` int(11) NOT NULL,
  `totalscore` int(11) DEFAULT NULL,
  `evaluation_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evalustion_answers`
--

INSERT INTO `evalustion_answers` (`id`, `employee_name`, `employee_id`, `question1`, `question2`, `question3`, `question4`, `questionNum`, `totalscore`, `evaluation_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Employee2', 8, 'Marriage leave, maternity leave and funeral leave', 'Greater than: Penalty above 300 yuan (depending on the actual situation)', 'NO', 'YES', 2, 100, 1, 1, '2021-01-16 12:04:23', '2021-01-16 12:05:11'),
(2, 'Employee6', 13, 'qwer', 'qwer', 'qwer', 'qwer', 2, 60, 4, 1, '2021-01-18 05:37:30', '2021-01-18 05:38:56'),
(3, 'Employee6', 14, 'qwer', 'qwer', 'YES', 'NO', 2, 50, 5, 1, '2021-01-18 11:46:30', '2021-01-18 11:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `is_approved` int(11) DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `gender`, `age`, `email`, `phone`, `position`, `is_approved`, `file`, `letter`, `created_at`, `updated_at`) VALUES
(106, 'Colleen Warren', 'Male', 23, 'colleen.warren@noemail.com', '03037654321', 2, NULL, 'tutorial.pdf', NULL, '2020-12-14 16:09:31', '2020-12-14 16:09:31'),
(107, 'Norbert H. Powell', 'Male', 36, 'norbert_powell@xyz.com', '03004567891', 4, 3, 'tutorial.pdf', NULL, '2020-12-14 16:10:45', '2020-12-15 01:20:12'),
(108, 'Brian V. Dexter', 'Female', 28, 'brian_dexter@xyz.com', '03023325698', 5, NULL, 'tutorial.pdf', NULL, '2020-12-14 16:11:27', '2020-12-14 16:11:27'),
(110, 'Robert Cavanaugh', 'Male', 25, 'robert_cavanaugh@xyz.com', '03067654321', 3, 2, 'tutorial.pdf', NULL, '2020-12-14 16:12:10', '2020-12-15 01:15:42'),
(117, 'Ali', 'Male', 25, 'Ali@ali.com', '012-9652684', 4, 5, 'CV JZ.pdf', 'qwer', '2021-01-18 11:35:29', '2021-01-18 11:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `job_apps`
--

CREATE TABLE `job_apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` int(11) NOT NULL,
  `types` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JobCPeople` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_apps`
--

INSERT INTO `job_apps` (`id`, `name`, `location`, `types`, `description`, `department`, `JobCPeople`, `created_at`, `updated_at`) VALUES
(2, 'Customer Engineer (Data Management)', 1, 4, 'NULL', '5', 2, '2020-12-13 20:53:17', '2021-01-18 11:05:27'),
(3, 'Compensation and Benefits Supervisor', 2, 1, 'NULL', '5', 1, '2020-12-13 20:54:18', '2021-01-18 05:20:44'),
(4, 'Finance Project Manager (PMO)', 2, 1, 'NULL', '4', 1, '2020-12-13 20:54:35', '2021-01-18 11:35:29'),
(5, 'Senior Software Engineer - Data Management', 4, 3, 'NULL', '5', 2, '2020-12-13 20:54:56', '2021-01-18 11:06:40'),
(6, 'Human Resource Employee', 2, 3, 'Human Resource Department', '5', 5, '2020-12-13 21:59:26', '2021-01-18 11:40:04'),
(11, 'Employee', 2, 3, 'QWER', '2', 5, '2021-01-18 11:39:47', '2021-01-18 11:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `job_hirings`
--

CREATE TABLE `job_hirings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_hirings`
--

INSERT INTO `job_hirings` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rejected', '2020-12-12 06:42:28', '2020-12-12 06:42:28'),
(2, 'Applied', '2020-12-12 06:22:16', '2020-12-12 06:43:09'),
(3, 'Phone interview', '2020-12-12 06:21:54', '2020-12-12 06:37:38'),
(4, 'Schedule Interview', '2020-12-12 06:42:45', '2020-12-12 06:42:45'),
(5, 'Skype Interview', '2020-12-12 06:42:56', '2020-12-12 06:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `job_locations`
--

CREATE TABLE `job_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_locations`
--

INSERT INTO `job_locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Muar', '2020-12-12 06:42:28', '2020-12-12 06:42:28'),
(2, 'Johor', '2020-12-12 06:22:16', '2020-12-12 06:43:09'),
(3, 'Kedah', '2020-12-12 06:21:54', '2020-12-12 06:37:38'),
(4, 'KL', '2020-12-12 06:42:45', '2020-12-12 06:42:45'),
(5, 'PJ', '2020-12-12 06:42:56', '2020-12-12 06:42:56'),
(9, 'JB', '2021-01-18 11:40:26', '2021-01-18 11:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Part Time', '2020-12-12 06:42:28', '2020-12-12 06:42:28'),
(2, 'Remote', '2020-12-12 06:22:16', '2020-12-12 06:43:09'),
(3, 'Intern', '2020-12-12 06:21:54', '2020-12-12 06:37:38'),
(4, 'Full Time', '2020-12-12 06:42:45', '2020-12-12 06:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `days` bigint(20) NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employee_email`, `employee_name`, `leave_type`, `date_from`, `date_to`, `days`, `reason`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'Manager5@Manager5.com', 'Manager5', 'Parental Leave', '2021-01-19', '2021-01-23', 4, 'qqq', NULL, '2021-01-18 05:46:32', '2021-01-18 05:46:32'),
(2, 'Employee1@Employee1.com', 'Employee1', 'Parental Leave', '2021-01-20', '2021-01-23', 3, 'QWER', NULL, '2021-01-18 05:57:40', '2021-01-18 05:57:40'),
(3, 'Manager1@Manager1.com', 'Manager1', 'Parental Leave', '2021-01-20', '2021-01-23', 3, 'qwer', 1, '2021-01-18 11:49:02', '2021-01-18 11:49:33');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2020_02_13_000001_create_permissions_table', 1),
(8, '2020_02_13_000002_create_roles_table', 1),
(9, '2020_02_13_000003_create_users_table', 1),
(10, '2020_02_13_000006_create_permission_role_pivot_table', 1),
(11, '2020_02_13_000007_create_role_user_pivot_table', 1),
(12, '2020_10_22_070454_create_emails_table', 1),
(13, '2020_11_25_024330_create_salaries_table', 1),
(14, '2020_11_25_110026_create_leaves_table', 1),
(15, '2020_12_01_165307_create_calenders_table', 1),
(16, '2020_12_12_195226_create_departments_table', 1),
(17, '2020_12_13_042136_create_job_apps_table', 1),
(18, '2020_12_13_042250_create_job_locations_table', 1),
(19, '2020_12_13_042322_create_job_types_table', 1),
(20, '2020_12_13_042340_create_job_hirings_table', 1),
(21, '2020_12_13_042511_create_jobs_table', 1),
(22, '2020_12_13_163248_create_avaters_table', 1),
(23, '2020_12_16_165807_create_todolists_table', 1),
(24, '2020_12_29_160135_create_projects_table', 1),
(25, '2020_12_29_160357_create_project_tasks_table', 1),
(26, '2020_12_31_072852_create_project_evaluations_table', 1),
(27, '2021_01_15_153631_create_evalustion_answers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'event_create', NULL, NULL, NULL),
(17, 'event_edit', NULL, NULL, NULL),
(18, 'event_show', NULL, NULL, NULL),
(19, 'event_delete', NULL, NULL, NULL),
(20, 'event_access', NULL, NULL, NULL),
(21, 'project_status', NULL, NULL, NULL),
(22, 'project_create', NULL, NULL, NULL),
(23, 'user_access', NULL, NULL, NULL),
(24, 'campany_controller', NULL, NULL, NULL),
(25, 'project_manager', NULL, NULL, NULL),
(26, 'project_employee', NULL, NULL, NULL),
(27, 'manager_calendar', NULL, NULL, NULL),
(28, 'employee_calendar', NULL, NULL, NULL),
(29, 'salary_employee', NULL, NULL, NULL),
(30, 'Apply_leave_Manager', NULL, NULL, NULL),
(31, 'Apply_leave_Employee', NULL, NULL, NULL),
(32, 'project_items', NULL, NULL, NULL),
(33, 'project_evaluation', NULL, NULL, NULL),
(34, 'employee_training', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 23),
(1, 24),
(1, 29),
(1, 33),
(2, 22),
(2, 25),
(2, 27),
(2, 32),
(1, 30),
(3, 26),
(3, 31),
(3, 32),
(3, 34),
(1, 27),
(3, 27),
(2, 31);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Start_date` date NOT NULL,
  `End_date` date NOT NULL,
  `Leader_id` int(11) NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NumberofMember` int(11) NOT NULL DEFAULT 0,
  `Status2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `Name`, `Start_date`, `End_date`, `Leader_id`, `Description`, `NumberofMember`, `Status2`, `created_at`, `updated_at`) VALUES
(1, 'Project AA', '2021-01-24', '2021-01-30', 2, 'Project For the Company AA. Do A Java Project. for the Ordering System. After Finish project, Write a Report for this project.', 3, NULL, '2021-01-16 11:16:38', '2021-01-16 11:32:03'),
(2, 'Project BB', '2021-01-31', '2021-02-06', 3, 'Project For the Company AA. Do A Laravel Project. for the School Management System. After Finish project, Write a Report for this project.', 8, NULL, '2021-01-16 11:35:53', '2021-01-16 11:40:37'),
(3, 'Project CC', '2021-02-01', '2021-02-06', 2, 'Java Project', 8, NULL, '2021-01-18 05:31:19', '2021-01-18 11:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `project_evaluations`
--

CREATE TABLE `project_evaluations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(11) NOT NULL,
  `tasks_id` int(11) NOT NULL,
  `Knowledge` int(11) NOT NULL,
  `Quality` int(11) NOT NULL,
  `Productivity` int(11) NOT NULL,
  `Dependability` int(11) NOT NULL,
  `Attendance` int(11) NOT NULL,
  `Relations` int(11) NOT NULL,
  `Commitment` int(11) NOT NULL,
  `Supervisory` int(11) NOT NULL,
  `Appraisal` int(11) NOT NULL,
  `TotalScore` int(11) NOT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrainPlan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TotalScore2` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_evaluations`
--

INSERT INTO `project_evaluations` (`id`, `employee_name`, `project_id`, `tasks_id`, `Knowledge`, `Quality`, `Productivity`, `Dependability`, `Attendance`, `Relations`, `Commitment`, `Supervisory`, `Appraisal`, `TotalScore`, `feedback`, `TrainPlan`, `deadline`, `status`, `TotalScore2`, `created_at`, `updated_at`) VALUES
(1, 'Employee2', 1, 2, 100, 60, 100, 60, 80, 60, 100, 60, 80, 67, NULL, '9', '2021-02-13', '1', 100, '2021-01-16 11:56:16', '2021-01-16 12:05:11'),
(2, 'Employee4', 2, 3, 100, 100, 100, 100, 100, 100, 100, 100, 100, 89, NULL, NULL, NULL, NULL, NULL, '2021-01-16 11:56:56', '2021-01-16 11:56:56'),
(3, 'Employee1', 1, 1, 100, 60, 60, 100, 60, 80, 60, 100, 80, 67, NULL, NULL, NULL, NULL, NULL, '2021-01-17 22:15:26', '2021-01-17 22:15:26'),
(4, 'Employee6', 3, 6, 100, 100, 60, 60, 100, 100, 60, 60, 100, 71, NULL, '7', '2021-02-05', '1', 60, '2021-01-18 05:34:44', '2021-01-18 05:38:56'),
(5, 'Employee6', 3, 7, 100, 60, 60, 80, 20, 100, 100, 60, 100, 64, NULL, '6', '2021-02-05', '1', 50, '2021-01-18 11:44:30', '2021-01-18 11:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `project_tasks`
--

CREATE TABLE `project_tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Project_id` int(11) NOT NULL,
  `User_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Leader_id` int(11) DEFAULT NULL,
  `Start_date` date NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Status2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_tasks`
--

INSERT INTO `project_tasks` (`id`, `name`, `Project_id`, `User_id`, `Leader_id`, `Start_date`, `Description`, `Status`, `Status2`, `created_at`, `updated_at`) VALUES
(1, 'Java Coding Part', 1, 'Employee1', 2, '2021-01-25', 'Create two abstract Class named Customer and Manager. Then, Create a subclass named Member and a subclass named NonMember. Last One is the RentDetail Class. Combine all the class and finish the Project.', '50', '1', '2021-01-16 11:28:24', '2021-01-17 22:15:26'),
(2, 'Write the Closing report', 1, 'Employee2', 2, '2021-01-28', 'Write the Closing report. Including the diagram and conclusion.', '100', '1', '2021-01-16 11:30:07', '2021-01-16 11:56:16'),
(3, 'Coding Part (Controller)', 2, 'Employee4', 3, '2021-01-31', 'All the Controller for the system. And cooperate the blade php control.', '100', '1', '2021-01-16 11:37:04', '2021-01-16 11:56:56'),
(4, 'Coding Part (blade php)', 2, 'Employee3', 3, '2021-01-31', 'All the blade php for the system. And cooperate the controller control and the JavaScript.', '100', NULL, '2021-01-16 11:38:32', '2021-01-16 11:40:09'),
(5, 'Write the Closing report', 2, 'Employee4', 3, '2021-02-04', 'Write the Closing report. Including the diagram and conclusion.', '50', NULL, '2021-01-16 11:38:59', '2021-01-16 11:40:49'),
(6, 'QQQ', 3, 'Employee6', 2, '2021-02-02', 'qwer', '50', '1', '2021-01-18 05:31:36', '2021-01-18 05:34:44'),
(7, 'REpoert', 3, 'Employee6', 2, '2021-02-03', 'asdf', '100', '1', '2021-01-18 11:42:10', '2021-01-18 11:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HR Admin', NULL, NULL, NULL),
(2, 'Manager', NULL, NULL, NULL),
(3, 'Employee', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(14, 3);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `Salary_amount` bigint(20) NOT NULL,
  `tax` int(11) NOT NULL DEFAULT 6,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `employee_id`, `Salary_amount`, `tax`, `created_at`, `updated_at`) VALUES
(1, 1, 2000, 6, '2020-12-15 01:18:21', '2020-12-15 01:18:21'),
(2, 2, 1200, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(3, 3, 1300, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(4, 4, 1400, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(5, 5, 1500, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(6, 6, 1200, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(7, 7, 1700, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(8, 8, 1900, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(9, 9, 2000, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(10, 10, 3000, 6, '2020-12-15 01:56:13', '2020-12-15 01:56:13'),
(11, 11, 1200, 6, '2021-01-17 01:45:00', '2021-01-17 01:45:00'),
(12, 12, 1200, 6, '2021-01-17 22:04:53', '2021-01-17 22:04:53'),
(13, 13, 1200, 6, '2021-01-18 05:23:48', '2021-01-18 05:23:48'),
(14, 12, 1200, 6, '2021-01-18 11:37:08', '2021-01-18 11:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `todolists`
--

CREATE TABLE `todolists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_delete` int(11) DEFAULT NULL,
  `CurrentDate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todolists`
--

INSERT INTO `todolists` (`id`, `description`, `user_id`, `is_delete`, `CurrentDate`, `created_at`, `updated_at`) VALUES
(1, 'Meeting', 1, 1, '2021-01-16', '2021-01-17 22:03:18', '2021-01-17 22:03:34'),
(2, 'Lunch', 1, 1, '2021-01-15', '2021-01-18 05:13:06', '2021-01-18 05:13:20'),
(3, 'Lunch for manager', 1, 3, '2021-01-18', '2021-01-18 05:13:06', '2021-01-18 05:21:33'),
(4, 'meeting for manager', 1, 1, '2021-01-18', '2021-01-18 05:13:06', '2021-01-18 05:13:20'),
(5, 'meeting', 1, 1, '2021-01-18', '2021-01-18 05:21:26', '2021-01-18 05:21:37'),
(6, 'meeting', 1, NULL, '2021-01-18', '2021-01-18 11:35:59', '2021-01-18 11:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` int(11) NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Avater` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `position`, `project_id`, `department`, `phoneNumber`, `Avater`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'HR Admin', 'admin@admin.com', 'Admin', NULL, 2, '0115654631', 'HR Admin.jpg', '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, '2020-12-15 01:17:55', NULL),
(2, 'Manager1', 'Manager1@Manager1.com', 'Manager', NULL, 3, '0115654631', 'default.jpg', '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, NULL),
(3, 'Manager2', 'Manager2@Manager2.com', 'Manager', NULL, 2, '0115654631', 'Manager2.jpg', '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, NULL),
(4, 'Manager3', 'Manager3@Manager3.com', 'Manager', NULL, 4, '0115654631', 'Manager3.jpg', '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, NULL),
(5, 'Manager4', 'Manager4@Manager4.com', 'Manager', NULL, 5, '0115654631', 'Manager4.jpg', '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, NULL),
(6, 'Manager5', 'Manager5@Manager5.com', 'Manager', NULL, 1, '0115654631', 'Manager5.jpg', '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, NULL, NULL),
(7, 'Employee1', 'Employee1@Employee1.com', 'Employee', '1', 2, '0115654631', 'Employee1.jpg', '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei', NULL, '2021-01-16 11:30:39', NULL),
(8, 'Employee2', 'Employee2@Employee2.com', 'Employee', '1', 5, '012-8596215', 'Employee2.jpg', '$2y$10$NKGwjSeSJjvHQrfsYWVvu.5WWHCGfhUhDE3uGV8rUf/0fNG5ALFZe', '2020-12-15 02:01:40', '2021-01-16 11:32:03', NULL),
(9, 'Employee3', 'Employee3@Employee3.com', 'Employee', '2', 3, '012-8596215', 'Employee3.jpg', '$2y$10$NKGwjSeSJjvHQrfsYWVvu.5WWHCGfhUhDE3uGV8rUf/0fNG5ALFZe', '2020-12-15 02:01:40', '2021-01-16 11:39:47', NULL),
(10, 'Employee4', 'Employee4@Employee4.com', 'Employee', '2', 1, '012-8596215', 'Employee4.jpg', '$2y$10$NKGwjSeSJjvHQrfsYWVvu.5WWHCGfhUhDE3uGV8rUf/0fNG5ALFZe', '2020-12-15 02:01:40', '2021-01-16 11:40:37', NULL),
(11, 'Employee5', 'Employee5@Employee5.com', 'Employee', NULL, 3, '012-8596324', 'default.jpg', '$2y$10$dYoypTmZvziAMOhc/XxFP.aXhd6kNzUWqf8aKfvOLjttdtEcWVQx2', '2021-01-17 01:45:01', '2021-01-17 01:45:01', NULL),
(14, 'Employee6', 'Employee6@Employee6.com', 'Employee', '3', 2, '012-9652384', 'default.jpg', '$2y$10$9iKVsW4NVYshA7QxmrpLv.vJAFaoUacjn/g8gxKGQJ/0f/C0bh0.C', '2021-01-18 11:37:08', '2021-01-18 11:43:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaters`
--
ALTER TABLE `avaters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evalustion_answers`
--
ALTER TABLE `evalustion_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_apps`
--
ALTER TABLE `job_apps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_hirings`
--
ALTER TABLE `job_hirings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_locations`
--
ALTER TABLE `job_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_1001475` (`role_id`),
  ADD KEY `permission_id_fk_1001475` (`permission_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_evaluations`
--
ALTER TABLE `project_evaluations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tasks`
--
ALTER TABLE `project_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_1001484` (`user_id`),
  ADD KEY `role_id_fk_1001484` (`role_id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todolists`
--
ALTER TABLE `todolists`
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
-- AUTO_INCREMENT for table `avaters`
--
ALTER TABLE `avaters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `evalustion_answers`
--
ALTER TABLE `evalustion_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `job_apps`
--
ALTER TABLE `job_apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job_hirings`
--
ALTER TABLE `job_hirings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_locations`
--
ALTER TABLE `job_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_evaluations`
--
ALTER TABLE `project_evaluations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_tasks`
--
ALTER TABLE `project_tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `todolists`
--
ALTER TABLE `todolists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_1001475` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_1001475` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_1001484` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_1001484` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
