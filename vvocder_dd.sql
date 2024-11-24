-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2024 at 12:51 AM
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
-- Database: `vvocder_dd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admanusers`
--

CREATE TABLE `admanusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_games`
--

CREATE TABLE `admin_games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_name` varchar(191) NOT NULL,
  `game_file_path` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_videos`
--

CREATE TABLE `admin_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_name` varchar(191) NOT NULL,
  `video_file` varchar(500) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_videos`
--

INSERT INTO `admin_videos` (`id`, `video_name`, `video_file`, `description`, `created_at`, `updated_at`) VALUES
(7, 'اداب المسجد', '/storage/videos/Uh87Y42vl79KIRmmjo4gyaEx0l4b6FxbZBLwhBMV.mp4', 'حضور المسجد من غير استعجال، وانتظار الصلاة واستغلال الوقت ما بيت الأذان والإقامة بذكر الله وأداء النوافل، قال -تعالى-: (وَسَارِعُوا إِلَىٰ مَغْفِرَةٍ مِّن رَّبِّكُمْ). حضور القلب والخشوع أثناء الصلاة والقراءة بتدبر، والتفكر في جميع أفعال الصلاة لكي تكون الصلاة صحيحة.', '2024-04-03 18:16:44', '2024-04-04 16:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `appoiiiiiiiiiintments`
--

CREATE TABLE `appoiiiiiiiiiintments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `dddr_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoiiiiiiiiiintments`
--

INSERT INTO `appoiiiiiiiiiintments` (`id`, `user_id`, `dddr_id`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 9, 4, '2024-04-22', '05:06:00', '2024-04-24 22:06:16', '2024-04-24 22:06:16'),
(2, 9, 4, '2024-04-15', '06:08:00', '2024-04-24 22:08:11', '2024-04-24 22:08:11'),
(3, 9, 4, '2024-04-21', '06:08:00', '2024-04-24 22:08:31', '2024-04-24 22:08:31'),
(4, 9, 4, '2024-04-21', '06:11:00', '2024-04-24 22:11:51', '2024-04-24 22:11:51'),
(5, 9, 4, '2024-04-21', '06:12:00', '2024-04-24 22:12:13', '2024-04-24 22:12:13'),
(6, 9, 4, '2024-04-28', '06:14:00', '2024-04-24 22:15:01', '2024-04-24 22:15:01'),
(7, 9, 4, '2024-04-21', '07:15:00', '2024-04-24 22:15:11', '2024-04-24 22:15:11'),
(8, 9, 4, '2024-04-07', '11:16:00', '2024-04-24 22:16:54', '2024-04-24 22:16:54'),
(9, 9, 1, '2024-05-05', '07:17:00', '2024-04-24 22:17:58', '2024-04-24 22:17:58'),
(10, 9, 2, '2024-03-31', '04:13:00', '2024-04-24 22:19:07', '2024-04-24 22:19:07'),
(11, 9, 1, '2024-04-14', '06:27:00', '2024-04-24 22:28:00', '2024-04-24 22:28:00'),
(12, 8, 1, '2024-04-21', '06:30:00', '2024-04-24 22:30:24', '2024-04-24 22:30:24'),
(13, 10, 1, '2024-04-21', '05:31:00', '2024-04-24 22:31:33', '2024-04-24 22:31:33'),
(14, 10, 1, '2024-04-28', '07:34:00', '2024-04-24 22:34:49', '2024-04-24 22:34:49'),
(15, 10, 1, '2024-04-14', '07:34:00', '2024-04-24 22:35:00', '2024-04-24 22:35:00'),
(16, 9, 1, '2024-05-19', '18:55:00', '2024-04-24 22:44:39', '2024-04-24 22:44:39'),
(17, 9, 4, '2025-06-12', '12:00:00', '2024-04-24 22:47:02', '2024-04-24 22:47:02'),
(18, 9, 2, '2024-04-22', '17:00:00', '2024-04-25 04:15:25', '2024-04-25 04:15:25'),
(19, 9, 5, '2024-04-07', '16:00:00', '2024-04-25 04:17:50', '2024-04-25 04:17:50'),
(20, 9, 5, '2024-04-21', '17:00:00', '2024-04-25 04:18:00', '2024-04-25 04:18:00'),
(21, 9, 4, '2024-04-14', '17:00:00', '2024-04-25 11:38:07', '2024-04-25 11:38:07'),
(22, 9, 5, '2024-04-30', '12:00:00', '2024-04-26 13:01:38', '2024-04-26 13:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `child_mcards`
--

CREATE TABLE `child_mcards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mood_card_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_mcards`
--

INSERT INTO `child_mcards` (`id`, `user_id`, `mood_card_id`, `created_at`, `updated_at`) VALUES
(10, 2, 6, '2024-04-03 22:07:23', '2024-04-03 22:07:23'),
(14, 8, 5, '2024-04-21 10:12:35', '2024-04-21 10:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `control_image_userpro`
--

CREATE TABLE `control_image_userpro` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_userpro` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `control_image_userpro`
--

INSERT INTO `control_image_userpro` (`id`, `image_userpro`, `created_at`, `updated_at`) VALUES
(1, '/storage/imagesuserpro/slRQYZ4w55GB2sbKHnOC4f1OeLxSPZD4lZRriKBn.png', '2024-04-27 18:31:02', '2024-04-27 18:31:02'),
(2, '/storage/imagesuserpro/urcO3zbvWmnwNGmru5O1M02yEKvMOzfg6wKNvJ0f.png', '2024-04-27 18:31:41', '2024-04-27 18:31:41');

-- --------------------------------------------------------

--
-- Table structure for table `control_video`
--

CREATE TABLE `control_video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cvideo_name` varchar(191) NOT NULL,
  `cvideo_file` varchar(500) NOT NULL,
  `cdescription` text DEFAULT NULL,
  `cvideo_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `control_video`
--

INSERT INTO `control_video` (`id`, `cvideo_name`, `cvideo_file`, `cdescription`, `cvideo_time`, `created_at`, `updated_at`) VALUES
(2, 'محمد', '/storage/videos/OMf8oai880hQXFCYbRTj8CCbcbed05TXCGRPma5Z.mp4', 'محمد', '00:02:35', '2024-04-21 03:00:57', '2024-04-21 03:27:46'),
(4, 'علي علي', '/storage/videos/huRg2XcRICtubLm9ZMUkG7edgcsIPCDobzn5YDBC.mp4', 'علي', '00:02:25', '2024-04-27 15:09:19', '2024-04-27 15:09:19'),
(5, 'قصة زيد وافعاله اليوميه', '/storage/videos/u5MdMaKkQPDE3PfDANYh5sGE98tfjBnt9qEWwto0.mp4', 'ما وراء الظلال: التغلب على العقبات الداخلية\r\nمرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل. مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.', '00:02:25', '2024-04-27 15:13:23', '2024-04-27 15:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `d_id` bigint(20) UNSIGNED NOT NULL,
  `d_name` varchar(191) NOT NULL,
  `d_email` varchar(191) NOT NULL,
  `d_password` varchar(191) NOT NULL,
  `d_phone` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`d_id`, `d_name`, `d_email`, `d_password`, `d_phone`, `created_at`, `updated_at`) VALUES
(1, 'احمد علي', 'aha@2005.com', '123456789', '01254789632', '2024-04-03 01:23:07', '2024-04-03 01:23:07'),
(2, 'محمد علي', 'moail@com', '$2y$12$tuQymghkiCLwTwqtESt7kOsZou8I0lkjSu8c9xPd8eROoM7LyCDuK', '01258745963', '2024-04-03 01:27:06', '2024-04-03 01:27:06'),
(4, 'خالد عبد الرؤف', 'yyttrree@gamile.com', '$2y$12$eV0sy45kqhgff4FIrv3bvuUDvQvzO11bhvd99bsuT9j/6M8ePdWQ.', '01145963258', '2024-04-03 01:40:57', '2024-04-03 01:40:57'),
(5, 'mohammed rrttee', 'mohatttffddg2002@gamile.com', '$2y$12$qLSy7kHCzf/I/ARQQ.VRauyOml9MOVEhTNKVvtg4W3lwNTHuuOvAS', '01587964223', '2024-04-03 14:00:46', '2024-04-03 14:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) NOT NULL,
  `levels` int(11) NOT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_game_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `image_path`, `created_at`, `updated_at`) VALUES
(6, 9, 'http://localhost:8000/storage/imagesuserpro/urcO3zbvWmnwNGmru5O1M02yEKvMOzfg6wKNvJ0f.png', '2024-04-27 20:09:54', '2024-04-27 20:09:54'),
(7, 9, 'http://localhost:8000/storage/imagesuserpro/slRQYZ4w55GB2sbKHnOC4f1OeLxSPZD4lZRriKBn.png', '2024-04-27 20:11:16', '2024-04-27 20:11:16'),
(8, 9, 'http://localhost:8000/storage/imagesuserpro/urcO3zbvWmnwNGmru5O1M02yEKvMOzfg6wKNvJ0f.png', '2024-04-27 20:11:48', '2024-04-27 20:11:48'),
(9, 9, 'http://localhost:8000/storage/imagesuserpro/slRQYZ4w55GB2sbKHnOC4f1OeLxSPZD4lZRriKBn.png', '2024-04-27 20:29:20', '2024-04-27 20:29:20'),
(10, 9, 'http://localhost:8000/storage/imagesuserpro/urcO3zbvWmnwNGmru5O1M02yEKvMOzfg6wKNvJ0f.png', '2024-04-27 20:29:34', '2024-04-27 20:29:34'),
(11, 9, 'http://localhost:8000/storage/imagesuserpro/slRQYZ4w55GB2sbKHnOC4f1OeLxSPZD4lZRriKBn.png', '2024-04-27 20:33:02', '2024-04-27 20:33:02'),
(12, 9, 'http://localhost:8000/storage/imagesuserpro/urcO3zbvWmnwNGmru5O1M02yEKvMOzfg6wKNvJ0f.png', '2024-04-27 20:33:20', '2024-04-27 20:33:20'),
(13, 9, 'http://localhost:8000/storage/imagesuserpro/slRQYZ4w55GB2sbKHnOC4f1OeLxSPZD4lZRriKBn.png', '2024-04-27 21:03:47', '2024-04-27 21:03:47'),
(14, 9, 'http://localhost:8000/storage/imagesuserpro/urcO3zbvWmnwNGmru5O1M02yEKvMOzfg6wKNvJ0f.png', '2024-04-27 21:07:47', '2024-04-27 21:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_17_170244_create_admanusers_table', 1),
(6, '2024_03_16_051629_create_doctors_table', 1),
(7, '2024_03_16_052135_create_tasks_table', 1),
(8, '2024_03_16_054551_create_mood_card_table', 1),
(9, '2024_03_16_054807_create_child_mcards_table', 1),
(10, '2024_04_01_211153_create_admin_videos_table', 2),
(11, '2024_04_01_211335_create_videos_table', 2),
(12, '2024_04_01_215425_create_admin_games_table', 3),
(13, '2024_04_01_215439_create_games_table', 3),
(14, '2024_04_02_233757_create_video_views_table', 4),
(15, '2024_04_21_030233_create_control_video_table', 5),
(16, '2024_04_21_043138_create_octtyydvideos_table', 6),
(17, '2024_04_24_025234_create_appoiiiiiiiiiintments_table', 7),
(18, '2024_04_25_023536_create_images_table', 8),
(19, '2024_04_27_210651_create_control_image_userpro_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mood_card`
--

CREATE TABLE `mood_card` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mood` varchar(191) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mood_card`
--

INSERT INTO `mood_card` (`id`, `mood`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(5, 'مذعور', '/storage/images/xSvLqiTfMjAPE0hYEwB0v93ZETTrln2It0h1lplg.jpg', 'مذعور', '2024-04-03 22:01:32', '2024-04-03 22:01:32'),
(6, 'مشمئز', '/storage/images/tdruUCuQYpMp2sSvNeZlaMYfsR4S7MiSFtWRjbE6.jpg', 'مشمئز', '2024-04-03 22:02:09', '2024-04-03 22:02:09'),
(7, 'غضبان', '/storage/images/zfFIiVxqdiLt9WPajXilzqPXzUxYRNhwDiMwBrik.jpg', 'غضبان', '2024-04-03 22:02:34', '2024-04-03 22:02:34'),
(8, 'متوتر', '/storage/images/EJzOgi9l5gqNesNgELqBXKShbOqda9HLOHM3YrX4.jpg', 'متوتر', '2024-04-03 22:02:55', '2024-04-03 22:02:55'),
(14, 'متحير', '/storage/images/9hV06H3g0j2reFE6lp7Ark3h6YikZqB09AmLuphx.jpg', 'متحير', '2024-04-04 18:14:14', '2024-04-04 18:14:14'),
(15, 'متحمس', '/storage/images/LwPkGUkHtE7OJHcfO8va1ZL5YdwwzrD0mn3awxTA.jpg', 'متحمس', '2024-04-04 18:14:40', '2024-04-04 18:14:40'),
(16, 'خجول', '/storage/images/QpEWPAD2p9EdQFhNzF7jaSuSvLDstMhzAxqIrdAF.jpg', 'خجول', '2024-04-04 18:15:04', '2024-04-04 18:15:04'),
(18, 'سعيد', '/storage/images/6HhXp12haPEFpauevhxoI2FhODb05Ir4qgoU2lzG.jpg', 'سعيد', '2024-04-04 18:17:21', '2024-04-04 18:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `ocdvideos`
--

CREATE TABLE `ocdvideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `control_video_id` bigint(20) UNSIGNED NOT NULL,
  `oovideo_time` time NOT NULL,
  `video_completed` enum('مكتمل','غير مكتمل') NOT NULL DEFAULT 'غير مكتمل',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `octtyydvideos`
--

CREATE TABLE `octtyydvideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `control_video_id` bigint(20) UNSIGNED NOT NULL,
  `oovideo_time` time NOT NULL,
  `vvvideo_completed` enum('مكتمل','غير مكتمل') NOT NULL DEFAULT 'غير مكتمل',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `octtyydvideos`
--

INSERT INTO `octtyydvideos` (`id`, `user_id`, `control_video_id`, `oovideo_time`, `vvvideo_completed`, `created_at`, `updated_at`) VALUES
(4, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 03:12:49', '2024-04-22 03:12:49'),
(5, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 03:13:23', '2024-04-22 03:13:23'),
(6, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 03:22:18', '2024-04-22 03:22:18'),
(7, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 03:27:24', '2024-04-22 03:27:24'),
(8, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 03:36:38', '2024-04-22 03:36:38'),
(9, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 03:57:25', '2024-04-22 03:57:25'),
(10, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 04:03:39', '2024-04-22 04:03:39'),
(11, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 04:08:14', '2024-04-22 04:08:14'),
(12, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 04:32:03', '2024-04-22 04:32:03'),
(13, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 04:32:23', '2024-04-22 04:32:23'),
(14, 8, 2, '00:02:35', 'مكتمل', '2024-04-22 04:34:25', '2024-04-22 04:34:25'),
(15, 8, 2, '00:01:29', 'غير مكتمل', '2024-04-22 04:39:06', '2024-04-22 04:39:06'),
(19, 8, 2, '00:02:07', 'غير مكتمل', '2024-04-22 05:55:57', '2024-04-22 05:55:57'),
(21, 8, 2, '00:01:42', 'غير مكتمل', '2024-04-22 09:46:13', '2024-04-22 09:46:13'),
(22, 8, 2, '00:02:02', 'غير مكتمل', '2024-04-23 01:13:56', '2024-04-23 01:13:56'),
(23, 8, 2, '00:02:35', 'مكتمل', '2024-04-23 01:35:36', '2024-04-23 01:35:36'),
(24, 8, 2, '00:02:35', 'مكتمل', '2024-04-23 01:38:40', '2024-04-23 01:38:40'),
(25, 8, 2, '00:01:44', 'غير مكتمل', '2024-04-23 03:28:03', '2024-04-23 03:28:03'),
(26, 8, 2, '00:00:38', 'غير مكتمل', '2024-04-23 03:29:39', '2024-04-23 03:29:39'),
(27, 8, 2, '00:01:57', 'غير مكتمل', '2024-04-23 03:35:17', '2024-04-23 03:35:17'),
(29, 8, 2, '00:00:18', 'غير مكتمل', '2024-04-23 03:50:01', '2024-04-23 03:50:01'),
(30, 8, 2, '00:01:10', 'غير مكتمل', '2024-04-23 03:58:07', '2024-04-23 03:58:07'),
(31, 8, 2, '00:02:35', 'مكتمل', '2024-04-23 03:58:31', '2024-04-23 03:58:31'),
(33, 9, 2, '00:02:07', 'غير مكتمل', '2024-04-23 19:05:10', '2024-04-23 19:05:10'),
(34, 9, 2, '00:02:35', 'مكتمل', '2024-04-23 19:07:35', '2024-04-23 19:07:35'),
(41, 9, 2, '00:01:43', 'غير مكتمل', '2024-04-23 22:25:23', '2024-04-23 22:25:23'),
(42, 9, 2, '00:02:35', 'مكتمل', '2024-04-23 22:29:28', '2024-04-23 22:29:28'),
(44, 9, 2, '00:00:56', 'غير مكتمل', '2024-04-23 23:07:54', '2024-04-23 23:07:54'),
(45, 9, 2, '00:02:34', 'غير مكتمل', '2024-04-23 23:08:36', '2024-04-23 23:08:36'),
(46, 9, 2, '00:00:02', 'غير مكتمل', '2024-04-23 23:09:04', '2024-04-23 23:09:04'),
(47, 9, 2, '00:01:21', 'غير مكتمل', '2024-04-24 19:56:46', '2024-04-24 19:56:46'),
(48, 9, 2, '00:02:35', 'مكتمل', '2024-04-24 19:59:42', '2024-04-24 19:59:42'),
(49, 9, 2, '00:01:14', 'غير مكتمل', '2024-04-24 23:32:23', '2024-04-24 23:32:23'),
(50, 9, 2, '00:01:48', 'غير مكتمل', '2024-04-25 00:18:00', '2024-04-25 00:18:00'),
(51, 9, 2, '00:02:35', 'مكتمل', '2024-04-25 00:18:05', '2024-04-25 00:18:05'),
(52, 9, 2, '00:01:36', 'غير مكتمل', '2024-04-25 00:20:31', '2024-04-25 00:20:31'),
(53, 9, 2, '00:02:35', 'مكتمل', '2024-04-25 00:20:44', '2024-04-25 00:20:44'),
(54, 9, 2, '00:01:57', 'غير مكتمل', '2024-04-25 03:59:16', '2024-04-25 03:59:16'),
(55, 9, 2, '00:02:35', 'مكتمل', '2024-04-25 11:37:40', '2024-04-25 11:37:40'),
(56, 9, 2, '00:01:18', 'غير مكتمل', '2024-04-26 13:01:22', '2024-04-26 13:01:22'),
(57, 9, 2, '00:02:35', 'مكتمل', '2024-04-26 17:12:13', '2024-04-26 17:12:13'),
(58, 9, 2, '00:02:31', 'غير مكتمل', '2024-04-27 13:14:44', '2024-04-27 13:14:44'),
(59, 9, 2, '00:02:35', 'مكتمل', '2024-04-27 13:14:56', '2024-04-27 13:14:56'),
(60, 9, 2, '00:02:31', 'غير مكتمل', '2024-04-27 14:03:20', '2024-04-27 14:03:20'),
(61, 9, 2, '00:02:35', 'مكتمل', '2024-04-27 14:03:32', '2024-04-27 14:03:32'),
(62, 9, 2, '00:01:13', 'غير مكتمل', '2024-04-27 14:12:23', '2024-04-27 14:12:23'),
(63, 9, 2, '00:02:35', 'مكتمل', '2024-04-27 14:12:34', '2024-04-27 14:12:34'),
(64, 9, 5, '00:02:16', 'غير مكتمل', '2024-04-27 15:17:12', '2024-04-27 15:17:12'),
(65, 9, 5, '00:02:01', 'غير مكتمل', '2024-04-27 15:17:33', '2024-04-27 15:17:33'),
(66, 9, 4, '00:02:25', 'مكتمل', '2024-04-27 15:25:32', '2024-04-27 15:25:32'),
(67, 9, 5, '00:00:01', 'غير مكتمل', '2024-04-27 16:28:23', '2024-04-27 16:28:23'),
(68, 9, 5, '00:02:25', 'مكتمل', '2024-04-27 21:02:16', '2024-04-27 21:02:16'),
(69, 9, 5, '00:01:31', 'غير مكتمل', '2024-04-27 21:06:18', '2024-04-27 21:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `t_id` bigint(20) UNSIGNED NOT NULL,
  `t_insert_text` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`t_id`, `t_insert_text`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'اذهب الي المسجد', 1, '2024-04-01 19:08:08', '2024-04-01 19:08:08'),
(2, 'ادخل المسجد', 2, '2024-04-01 20:13:02', '2024-04-01 20:13:02'),
(3, 'اذهب الي المدرسه', 8, '2024-04-20 08:40:22', '2024-04-20 08:40:22'),
(4, 'اذهب الي المسجد', 7, '2024-04-20 08:42:06', '2024-04-20 08:42:06'),
(5, 'ادخل المسجد', 7, '2024-04-20 09:00:42', '2024-04-20 09:00:42'),
(6, 'ادخل المسجد', 7, '2024-04-21 03:39:00', '2024-04-21 03:39:00'),
(7, 'اذهب الي المدرسه', 7, '2024-04-21 03:39:45', '2024-04-21 03:39:45'),
(8, 'عبده خالدااااااا', 7, '2024-04-21 03:40:36', '2024-04-21 03:40:36'),
(9, 'محمد', 8, '2024-04-22 01:17:18', '2024-04-22 01:17:18'),
(10, 'فارس', 8, '2024-04-22 08:47:22', '2024-04-22 08:47:22'),
(11, 'محمد', 8, '2024-04-23 00:33:56', '2024-04-23 00:33:56'),
(12, 'اذهب الي المسجد', 8, '2024-04-23 02:03:01', '2024-04-23 02:03:01'),
(13, 'محمد', 9, '2024-04-23 19:02:26', '2024-04-23 19:02:26'),
(14, 'ادخل المسجد', 10, '2024-04-23 23:30:44', '2024-04-23 23:30:44'),
(15, 'الضيافه', 9, '2024-04-25 11:36:37', '2024-04-25 11:36:37'),
(16, 'ادخل المسجد', 9, '2024-04-27 12:24:34', '2024-04-27 12:24:34'),
(17, 'محمد', 9, '2024-04-27 12:25:15', '2024-04-27 12:25:15'),
(18, 'الفديو', 9, '2024-04-27 16:54:02', '2024-04-27 16:54:02'),
(19, 'ذاكر اليوم', 9, '2024-04-27 21:03:22', '2024-04-27 21:03:22'),
(20, 'احفظ قران اليوم', 9, '2024-04-27 21:07:27', '2024-04-27 21:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `Age` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `Age`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'محمد الدسوقي', '7', '01258749635', 'moha@klhilhih', NULL, '$2y$12$QinOEaJL94Xt6kCCz8uwkeo7EmcYuQwViqEeSAVsJQB/I1sOS1Xd6', NULL, '2024-04-01 19:07:38', '2024-04-01 19:07:38'),
(2, 'هاله محمد احمد', '12', '01254796325', 'yyyyyyyy@fff.com', NULL, '$2y$12$Ldxso14D1CSfql8JDhm6Qeul3TthfX9znABvZemFoo5Y5lQVf4py6', NULL, '2024-04-01 20:11:37', '2024-04-01 20:11:37'),
(3, 'محمد احمد محمد', '9', '01258749654', 'ddffy2005ff@gamile.com', NULL, '$2y$12$M5pGhZYgXYmUznsugc0aWeWwUlV4MBwhWheW1AujH.dcZO8jQ5id.', NULL, '2024-04-03 01:51:13', '2024-04-03 01:51:13'),
(4, 'عبده خالد', '4', '01478536987', 'abido2002@gamile.com', NULL, '$2y$12$ozBOHTJhIhfnUB8nPC/VqeYp1aXhChLKyprbFr3cap7fwZ0tbMywe', NULL, '2024-04-03 14:03:42', '2024-04-03 14:03:42'),
(5, 'عبد العزيز خالد دسوقي', '9', '01254789543', 'abdo2002@gmail.com', NULL, '$2y$12$yTMKsRlVY1r9kPg3kZPzduBCPGxohpnnL4P4CZRP5Be89AdL5zaK2', NULL, '2024-04-20 07:19:15', '2024-04-20 07:19:15'),
(6, 'محمد خطاب', '9', '01254789584', 'mohek2002@gmail.com', NULL, '$2y$12$EgfYNCxLBtZIhLNILo5Hh.6NuT7ovy9q.FWl7YTUezInHpeP.ZcXy', NULL, '2024-04-20 07:23:49', '2024-04-20 07:23:49'),
(7, 'محمد علي', '9', '01254789654', 'moheww2002@gmail.com', NULL, '$2y$12$Qv/0QtVH3u4cH11.O2YEE.J9ZuUnMtZyYJB4hiFOnSjnKS2BT9t2C', NULL, '2024-04-20 07:40:53', '2024-04-20 07:40:53'),
(8, 'الدسوقي الدسوقي', '12', '00587463398', 'ddess200555@gmail.com', NULL, '$2y$12$dfMVQkbY3Zdk3pfu5xnxs.I3vU63JwsCeksuTQqsgmKL3Zvp..1J6', NULL, '2024-04-20 08:26:41', '2024-04-20 08:26:41'),
(9, 'admen', '8', '01555634478', 'admen2004@gmail.com', NULL, '$2y$12$xK1ADwSjjF5KjmNnn.8UReEmewLM0BqkC8/Cd6ll9/mKed4Iw8Vdq', NULL, '2024-04-23 19:01:43', '2024-04-23 19:01:43'),
(10, 'rtethb', '12', '01444778569', 'rtethb200874@gmail.com', NULL, '$2y$12$2PZvxRDJuHMWRzB.yVpG8.UZz51mvTvMCyJsYW12vtiTjNGJU0Vj2', NULL, '2024-04-23 23:30:17', '2024-04-23 23:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `duration_minutes` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 1,
  `start_time` timestamp NULL DEFAULT NULL,
  `watch_duration` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_video_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_views`
--

CREATE TABLE `video_views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `admin_video_id` bigint(20) UNSIGNED NOT NULL,
  `views_count` int(11) NOT NULL DEFAULT 0,
  `watch_duration` int(11) NOT NULL DEFAULT 0,
  `video_status` enum('completed','paused') NOT NULL DEFAULT 'paused',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_views`
--

INSERT INTO `video_views` (`id`, `user_id`, `admin_video_id`, `views_count`, `watch_duration`, `video_status`, `created_at`, `updated_at`) VALUES
(14, 2, 7, 3, 2, 'paused', '2024-04-03 18:40:33', '2024-04-03 18:40:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admanusers`
--
ALTER TABLE `admanusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admanusers_email_unique` (`email`);

--
-- Indexes for table `admin_games`
--
ALTER TABLE `admin_games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_videos`
--
ALTER TABLE `admin_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoiiiiiiiiiintments`
--
ALTER TABLE `appoiiiiiiiiiintments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appoiiiiiiiiiintments_user_id_foreign` (`user_id`),
  ADD KEY `appoiiiiiiiiiintments_dddr_id_foreign` (`dddr_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`);

--
-- Indexes for table `child_mcards`
--
ALTER TABLE `child_mcards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_mcards_user_id_foreign` (`user_id`),
  ADD KEY `child_mcards_mood_card_id_foreign` (`mood_card_id`);

--
-- Indexes for table `control_image_userpro`
--
ALTER TABLE `control_image_userpro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control_video`
--
ALTER TABLE `control_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `doctors_d_email_unique` (`d_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_user_id_foreign` (`user_id`),
  ADD KEY `games_admin_game_id_foreign` (`admin_game_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mood_card`
--
ALTER TABLE `mood_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocdvideos`
--
ALTER TABLE `ocdvideos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ocdvideos_user_id_foreign` (`user_id`);

--
-- Indexes for table `octtyydvideos`
--
ALTER TABLE `octtyydvideos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `octtyydvideos_user_id_foreign` (`user_id`),
  ADD KEY `octtyydvideos_control_video_id_foreign` (`control_video_id`);

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
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_user_id_foreign` (`user_id`),
  ADD KEY `videos_admin_video_id_foreign` (`admin_video_id`);

--
-- Indexes for table `video_views`
--
ALTER TABLE `video_views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_views_user_id_foreign` (`user_id`),
  ADD KEY `video_views_admin_video_id_foreign` (`admin_video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admanusers`
--
ALTER TABLE `admanusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_games`
--
ALTER TABLE `admin_games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_videos`
--
ALTER TABLE `admin_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appoiiiiiiiiiintments`
--
ALTER TABLE `appoiiiiiiiiiintments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `child_mcards`
--
ALTER TABLE `child_mcards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `control_image_userpro`
--
ALTER TABLE `control_image_userpro`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `control_video`
--
ALTER TABLE `control_video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `d_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `mood_card`
--
ALTER TABLE `mood_card`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ocdvideos`
--
ALTER TABLE `ocdvideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `octtyydvideos`
--
ALTER TABLE `octtyydvideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `t_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_views`
--
ALTER TABLE `video_views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoiiiiiiiiiintments`
--
ALTER TABLE `appoiiiiiiiiiintments`
  ADD CONSTRAINT `appoiiiiiiiiiintments_dddr_id_foreign` FOREIGN KEY (`dddr_id`) REFERENCES `doctors` (`d_id`),
  ADD CONSTRAINT `appoiiiiiiiiiintments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `child_mcards`
--
ALTER TABLE `child_mcards`
  ADD CONSTRAINT `child_mcards_mood_card_id_foreign` FOREIGN KEY (`mood_card_id`) REFERENCES `mood_card` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `child_mcards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_admin_game_id_foreign` FOREIGN KEY (`admin_game_id`) REFERENCES `admin_games` (`id`),
  ADD CONSTRAINT `games_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ocdvideos`
--
ALTER TABLE `ocdvideos`
  ADD CONSTRAINT `ocdvideos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `octtyydvideos`
--
ALTER TABLE `octtyydvideos`
  ADD CONSTRAINT `octtyydvideos_control_video_id_foreign` FOREIGN KEY (`control_video_id`) REFERENCES `control_video` (`id`),
  ADD CONSTRAINT `octtyydvideos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_admin_video_id_foreign` FOREIGN KEY (`admin_video_id`) REFERENCES `admin_videos` (`id`),
  ADD CONSTRAINT `videos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `video_views`
--
ALTER TABLE `video_views`
  ADD CONSTRAINT `video_views_admin_video_id_foreign` FOREIGN KEY (`admin_video_id`) REFERENCES `admin_videos` (`id`),
  ADD CONSTRAINT `video_views_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
