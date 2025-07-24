-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 24, 2025 lúc 05:15 PM
-- Phiên bản máy phục vụ: 10.5.25-MariaDB
-- Phiên bản PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `leminht2_trungtam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('minhtrieteras_cache_0286dd552c9bea9a69ecb3759e7b94777635514b', 'i:1;', 1751366616),
('minhtrieteras_cache_0286dd552c9bea9a69ecb3759e7b94777635514b:timer', 'i:1751366616;', 1751366616);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tin học văn phòng', 'tin-hoc-van-phong', '2025-04-09 11:49:58', '2025-04-09 11:49:58'),
(2, 'Microsoft Word', 'microsoft-word', '2025-04-09 11:50:04', '2025-04-09 11:50:04'),
(3, 'tool', 'tool', '2025-04-09 13:15:18', '2025-04-09 13:15:18'),
(4, 'ai', 'ai', '2025-04-10 04:59:22', '2025-04-10 04:59:22'),
(5, 'copilot', 'copilot', '2025-04-11 04:51:16', '2025-04-11 04:51:16'),
(6, 'microsoft365', 'microsoft365', '2025-04-11 04:51:31', '2025-04-11 04:51:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `base_fee` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tin học văn phòng', '2025-02-16 06:11:05', '2025-02-16 06:11:05'),
(2, 'Kế toán', '2025-02-16 06:11:05', '2025-02-16 06:11:05'),
(3, 'Đồ họa', '2025-02-16 06:11:05', '2025-02-16 06:11:05'),
(4, 'Vẽ kỹ thuật', '2025-02-16 06:11:05', '2025-02-16 06:11:05'),
(5, 'Lập trình', '2025-02-16 06:11:05', '2025-02-16 06:11:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `enrollments`
--

CREATE TABLE `enrollments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `enrollment_date` date DEFAULT curdate(),
  `discount_amount` decimal(10,2) DEFAULT 0.00,
  `final_amount` decimal(10,2) DEFAULT 0.00,
  `gift` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'enrolled',
  `payment_status` varchar(50) DEFAULT 'unpaid',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `jobs`
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

--
-- Đang đổ dữ liệu cho bảng `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"7166b9bc-e91a-45d7-a0a2-f49afcfc8ba3\",\"displayName\":\"Filament\\\\Notifications\\\\DatabaseNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:43:\\\"Filament\\\\Notifications\\\\DatabaseNotification\\\":2:{s:4:\\\"data\\\";a:11:{s:7:\\\"actions\\\";a:0:{}s:4:\\\"body\\\";s:75:\\\"Mật khẩu tạm thời cho trungta4444mtinhocsaoviet@gmail.com: BPIcJELl\\\";s:5:\\\"color\\\";N;s:8:\\\"duration\\\";s:10:\\\"persistent\\\";s:4:\\\"icon\\\";s:29:\\\"heroicon-o-information-circle\\\";s:9:\\\"iconColor\\\";s:4:\\\"info\\\";s:6:\\\"status\\\";s:4:\\\"info\\\";s:5:\\\"title\\\";s:34:\\\"Đã tạo tài khoản User mới\\\";s:4:\\\"view\\\";s:36:\\\"filament-notifications::notification\\\";s:8:\\\"viewData\\\";a:0:{}s:6:\\\"format\\\";s:8:\\\"filament\\\";}s:2:\\\"id\\\";s:36:\\\"be49edaa-6539-42ee-a611-b15eff557979\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:8:\\\"database\\\";}}\"}}', 0, NULL, 1743593849, 1743593849);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_16_125816_create_departments_table', 2),
(5, '2025_02_16_125846_create_subjects_table', 2),
(6, '2025_02_16_133606_create_personal_infos_table', 3),
(7, '2025_02_16_140921_create_courses_table', 4),
(8, '2025_02_17_051701_create_coursesfees_table', 5),
(9, '2025_02_17_051926_create_payments_table', 6),
(10, '2025_02_22_073241_create_resource_table', 7),
(11, '2025_04_02_133024_create_enrollments_table', 8),
(12, '2025_04_02_144552_add_enrollment_details_to_courses_table', 8),
(13, '2025_04_03_124909_create_notifications_table', 9),
(14, '2025_04_04_070926_create_user_social_accounts_table', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `id` int(11) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) DEFAULT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`id`, `role_id`, `model_type`, `model_id`) VALUES
(1, 1, 'App\\Models\\User', 34),
(2, 1, 'App\\Models\\User', 43),
(3, 2, 'App\\Models\\User', 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('2015c2a7-6c25-4416-bb98-1a7a9b4eeb44', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 34, '{\"actions\":[],\"body\":\"\\u0110\\u00e3 g\\u1eedi th\\u00f4ng tin \\u0111\\u0103ng nh\\u1eadp \\u0111\\u1ebfn minhtrietofficial@gmail.com. Y\\u00eau c\\u1ea7u ng\\u01b0\\u1eddi d\\u00f9ng \\u0111\\u1ed5i m\\u1eadt kh\\u1ea9u.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"info\",\"status\":\"info\",\"title\":\"\\u0110\\u00e3 t\\u1ea1o t\\u00e0i kho\\u1ea3n User m\\u1edbi\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2025-04-04 21:10:14', '2025-04-04 21:10:14'),
('20ca4d32-33b0-48d4-973d-bd4d9f0719af', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 34, '{\"actions\":[],\"body\":\"\\u0110\\u00e3 g\\u1eedi th\\u00f4ng tin \\u0111\\u0103ng nh\\u1eadp \\u0111\\u1ebfn minhtrietofficial@gmail.com. Y\\u00eau c\\u1ea7u ng\\u01b0\\u1eddi d\\u00f9ng \\u0111\\u1ed5i m\\u1eadt kh\\u1ea9u.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"info\",\"status\":\"info\",\"title\":\"\\u0110\\u00e3 t\\u1ea1o t\\u00e0i kho\\u1ea3n User m\\u1edbi\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2025-04-04 20:11:04', '2025-04-04 20:11:04'),
('7a1740e8-f61a-40fe-b0e1-5e2a8a343199', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 34, '{\"actions\":[],\"body\":\"M\\u1eadt kh\\u1ea9u t\\u1ea1m th\\u1eddi cho lmtriet@c2pt.edu.vn: EPrrae2G. Y\\u00eau c\\u1ea7u ng\\u01b0\\u1eddi d\\u00f9ng \\u0111\\u1ed5i m\\u1eadt kh\\u1ea9u.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"info\",\"status\":\"info\",\"title\":\"\\u0110\\u00e3 t\\u1ea1o t\\u00e0i kho\\u1ea3n User\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2025-04-04 19:42:05', '2025-04-04 19:42:05'),
('b0954cbc-ffef-495b-9b1e-ed37300f4abb', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[],\"body\":\"M\\u1eadt kh\\u1ea9u t\\u1ea1m th\\u1eddi cho minhtrietoffi1cial@gmail.com: hUiBP3r5. Y\\u00eau c\\u1ea7u ng\\u01b0\\u1eddi d\\u00f9ng \\u0111\\u1ed5i m\\u1eadt kh\\u1ea9u.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"info\",\"status\":\"info\",\"title\":\"\\u0110\\u00e3 t\\u1ea1o t\\u00e0i kho\\u1ea3n User\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2025-04-03 05:50:09', '2025-04-03 05:50:09'),
('e01de5b0-8b77-4bfb-9d70-6289681a3d34', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 34, '{\"actions\":[],\"body\":\"M\\u1eadt kh\\u1ea9u t\\u1ea1m th\\u1eddi cho admin@leminhtriet.com: $2y$12$LEk9VzNUDRqqhCOyn2vEeeyn4lyspFRFym4S\\/hXmlJo\\/v4PtqA\\/eC. Y\\u00eau c\\u1ea7u ng\\u01b0\\u1eddi d\\u00f9ng \\u0111\\u1ed5i m\\u1eadt kh\\u1ea9u.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"info\",\"status\":\"info\",\"title\":\"\\u0110\\u00e3 t\\u1ea1o t\\u00e0i kho\\u1ea3n User m\\u1edbi\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2025-04-04 19:50:01', '2025-04-04 19:50:01'),
('fd43a1df-f1d2-4604-89c4-fe3d999275d1', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 34, '{\"actions\":[],\"body\":\"\\u0110\\u00e3 g\\u1eedi th\\u00f4ng tin \\u0111\\u0103ng nh\\u1eadp \\u0111\\u1ebfn minhtrietofficial@gmail.com. Y\\u00eau c\\u1ea7u ng\\u01b0\\u1eddi d\\u00f9ng \\u0111\\u1ed5i m\\u1eadt kh\\u1ea9u.\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-information-circle\",\"iconColor\":\"info\",\"status\":\"info\",\"title\":\"\\u0110\\u00e3 t\\u1ea1o t\\u00e0i kho\\u1ea3n User m\\u1edbi\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2025-04-04 21:13:41', '2025-04-04 21:13:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `enrollment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_amount` decimal(10,2) DEFAULT 0.00,
  `payment_date` date DEFAULT curdate(),
  `payment_method` varchar(50) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'create-post', 'web', '2025-04-09 08:29:31', '2025-04-09 08:29:33'),
(2, 'edit-post', 'web', '2025-04-09 08:29:34', '2025-04-09 08:29:35'),
(3, 'delete-post', 'web', '2025-04-09 08:29:36', '2025-04-09 08:29:37'),
(4, 'view-users', 'web', '2025-04-09 08:29:38', '2025-04-09 08:29:38'),
(5, 'manage-roles', 'web', '2025-04-09 08:29:39', '2025-04-09 08:29:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_infos`
--

CREATE TABLE `personal_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `identitynumber` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `placeofbirth` varchar(255) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT 'other',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `personal_infos`
--

INSERT INTO `personal_infos` (`id`, `user_id`, `name`, `identitynumber`, `phone`, `address`, `dateofbirth`, `placeofbirth`, `gender`, `created_at`, `updated_at`) VALUES
(5, 34, 'Lê Minh Anh', '080201002222', '0946426666', NULL, '2001-01-18', 'Tỉnh Long An', 'female', '2025-04-03 05:50:09', '2025-04-04 19:13:42'),
(7, 36, 'Nguyễn Thị A', '035302886234', '0841126666', 'Bắc Bling', '2002-01-01', 'Tỉnh Hà Nam', 'female', '2025-04-04 19:50:01', '2025-04-04 19:50:01'),
(14, 43, 'Lê Minh Triết', '080201001111', '0946426116', NULL, '2001-09-08', 'Tỉnh Long An', 'male', '2025-04-04 21:13:36', '2025-04-09 09:05:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `featured_image`, `published_at`, `created_at`, `updated_at`, `is_active`) VALUES
(1, '10 Thủ thuật Word giúp bạn tăng tốc soạn thảo văn bản', '10-thu-thuat-word-giup-ban-tang-toc-soan-thao-van-ban', '<p>Microsoft Word là công cụ không thể thiếu trong công việc văn phòng hàng ngày. Tuy nhiên, không phải ai cũng biết cách tận dụng tối đa các tính năng của Word để tăng tốc độ soạn thảo. Bài viết này sẽ giới thiệu 10 thủ thuật đơn giản nhưng vô cùng hữu ích, giúp bạn tiết kiệm thời gian và nâng cao hiệu quả công việc.</p><ol><li><strong>Sử dụng phím tắt:</strong><ul><li>Ctrl + C: Sao chép</li><li>Ctrl + V: Dán</li><li>Ctrl + Z: Hoàn tác</li><li>Ctrl + S: Lưu</li><li>Ctrl + Enter: Ngắt trang</li></ul></li><li><strong>Tạo style (kiểu định dạng):</strong><ul><li>Giúp định dạng văn bản nhanh chóng và đồng nhất.</li><li>Tạo mục lục tự động dễ dàng.</li></ul></li><li><strong>Sử dụng tính năng AutoCorrect:</strong><ul><li>Tự động sửa lỗi chính tả và gõ tắt.</li></ul></li><li><strong>Tạo Quick Parts (phần nhanh):</strong><ul><li>Lưu trữ các đoạn văn bản hoặc hình ảnh thường dùng.</li></ul></li><li><strong>Sử dụng tính năng Find and Replace (tìm kiếm và thay thế):</strong><ul><li>Thay đổi hàng loạt nội dung trong văn bản.</li></ul></li><li><strong>Sử dụng tính năng Mail Merge (trộn thư):</strong><ul><li>Tạo hàng loạt thư hoặc nhãn thư.</li></ul></li><li><strong>Sử dụng tính năng Table of Contents (mục lục tự động):</strong><ul><li>Tạo mục lục tự động từ các heading.</li></ul></li><li><strong>Sử dụng tính năng Track Changes (theo dõi thay đổi):</strong><ul><li>Theo dõi và quản lý các thay đổi trong văn bản khi làm việc nhóm.</li></ul></li><li><strong>Sử dụng tính năng Comments (bình luận):</strong><ul><li>Ghi chú và trao đổi ý kiến trực tiếp trên văn bản.</li></ul></li><li><strong>Sử dụng tính năng Templates (mẫu):</strong><ul><li>Sử dụng các mẫu văn bản có sẵn để tiết kiệm thời gian.</li></ul></li></ol><p><strong>Kết luận:</strong></p><p>Với 10 thủ thuật trên, bạn sẽ có thể tăng tốc độ soạn thảo văn bản và nâng cao hiệu quả công việc của mình. Hãy thử áp dụng ngay hôm nay!</p>', 'post-images/01JRD86ABSSQW3VRHQ4P5Q8GWN.png', '2025-04-10 13:01:54', '2025-04-09 11:51:20', '2025-04-10 13:01:54', 0),
(2, 'Cách tắt tường lửa trên Windows 11', 'cach-tat-tuong-lua-tren-windows-11', '<h2><strong>Cách tắt chế độ tường lửa trong Win 11</strong></h2><p>Bước 1: Chọn Windows &gt; Nhập vào thanh tìm kiếm Windows Defender Firewall &gt; Chọn Open.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:400,&quot;url&quot;:&quot;https://ipl.com.vn/uploads/images/cach-tat-tuong-lua-win-11-4.jpg&quot;,&quot;width&quot;:600}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://ipl.com.vn/uploads/images/cach-tat-tuong-lua-win-11-4.jpg\" width=\"600\" height=\"400\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><p>Bước 2: Chọn Turn Windows Defender Firewall on or off.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:400,&quot;url&quot;:&quot;https://ipl.com.vn/uploads/images/cach-tat-tuong-lua-win-11-5.jpg&quot;,&quot;width&quot;:600}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://ipl.com.vn/uploads/images/cach-tat-tuong-lua-win-11-5.jpg\" width=\"600\" height=\"400\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><p>Bước 3: Tại đây, bạn dễ dàng lựa chọn tắt hay bật chế độ tường lửa Windows 11.</p><ul><li>Turn on Windows Defender Firewall: Bật tường lửa trên Windows 11.</li><li>Turn off Windows Defender Firewall: Tắt tường lửa trên Windows 11.</li></ul><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:400,&quot;url&quot;:&quot;https://ipl.com.vn/uploads/images/cach-tat-tuong-lua-win-11-6.jpg&quot;,&quot;width&quot;:600}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://ipl.com.vn/uploads/images/cach-tat-tuong-lua-win-11-6.jpg\" width=\"600\" height=\"400\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><p>Tùy vào nhu cầu sử dụng, bạn có thể lựa chọn chế độ phù hợp cho thiết bị của mình.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:400,&quot;url&quot;:&quot;https://ipl.com.vn/uploads/images/cach-tat-tuong-lua-win-11-7.jpg&quot;,&quot;width&quot;:600}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://ipl.com.vn/uploads/images/cach-tat-tuong-lua-win-11-7.jpg\" width=\"600\" height=\"400\"><figcaption class=\"attachment__caption\"></figcaption></figure></p><p>Bước 4: Chọn OK để hoàn tất thay đổi.</p><p>Như vậy, bạn đã dễ dàng tắt đi chế độ tường lửa trên thiết bị của mình. Tuy nhiên, I.P.L khuyên bạn đừng nên tắt chế độ tường lửa này đi vì đây là tính năng giúp bảo vệ thiết bị của bạn tránh khỏi những cuộc tấn công mạng không đáng có. Từ đó, <a href=\"https://ipl.com.vn/dich-vu/dich-vu-it-doanh-nghiep\"><strong>hệ thống an ninh mạng</strong><span style=\"text-decoration: underline;\">&nbsp;</span></a>của bạn sẽ được bảo vệ an toàn dù không quá tuyệt đối những phần nào giúp bạn khỏi những sự cố không đáng có.&nbsp;</p><p>Chúc bạn thực hiện thành công!</p><p><br></p>', 'post-images/01JRJC7ACR1S7SY0VBG3K0D734.jpg', '2025-04-11 12:12:04', '2025-04-09 13:16:40', '2025-04-11 05:12:04', 1),
(3, 'Active Office', 'active-office', '<p>B1: Bật thanh tìm kiếm: Windows + S</p><p>B2: Nhập PowerShell</p><p>B3: Chuột phải vào PowerShell và chọn Open With Administrator</p><p>B4: Copy: <strong><em>irm https://get.activated.win | iex</em></strong></p><p>B5: Vào cửa sổ PowerShell và dán vào</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;image.png&quot;,&quot;filesize&quot;:26173,&quot;height&quot;:642,&quot;href&quot;:&quot;http://localhost/storage/zONtlMQG5yIxHCWjeW599fQDndb6YCgmBK9NzDX2.png&quot;,&quot;url&quot;:&quot;http://localhost/storage/zONtlMQG5yIxHCWjeW599fQDndb6YCgmBK9NzDX2.png&quot;,&quot;width&quot;:611}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://localhost/storage/zONtlMQG5yIxHCWjeW599fQDndb6YCgmBK9NzDX2.png\"><img src=\"http://localhost/storage/zONtlMQG5yIxHCWjeW599fQDndb6YCgmBK9NzDX2.png\" width=\"611\" height=\"642\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">image.png</span> <span class=\"attachment__size\">25.56 KB</span></figcaption></a></figure></p><p>Sau đó gõ số 2 nếu muốn Active Office, hoặc số 1 nếu Active Windows</p>', 'post-images/01JXCVKRJ7DENCB22MQCV40HVE.jpg', '2025-06-10 12:04:03', '2025-04-09 13:25:53', '2025-06-10 05:04:03', 1),
(4, 'Chuyên nghiệp hóa việc làm slide', 'chuyen-nghiep-hoa-viec-lam-slide', '<pre>&lt;iframe src=\"https://iridescent-lungfish-83e.notion.site/ebd/1b640b4ce551802fa1f7e19330a00362\" width=\"100%\" height=\"600\" frameborder=\"0\" allowfullscreen&gt;&lt;/iframe&gt;</pre>', 'post-images/01JXCVTD892JGXKDC9J1QQ0VF1.jpg', '2025-06-10 12:07:41', '2025-04-10 04:33:31', '2025-06-10 05:07:41', 1),
(5, 'AI for Meeting Note', 'ai-for-meeting-note', '<pre>&lt;iframe src=\"https://iridescent-lungfish-83e.notion.site/ebd/1b340b4ce551800398c5c22ab5ab5f0a\" width=\"100%\" height=\"600\" frameborder=\"0\" allowfullscreen&gt; &lt;/iframe&gt;</pre>', 'post-images/01JRFT7HP9CYAZYZV00R7GJNFY.jpg', '2025-04-12 14:40:47', '2025-04-10 04:58:51', '2025-04-12 07:40:47', 1),
(6, 'Tối ưu hóa kết quả với cấu trúc Promt chuẩn', 'toi-uu-hoa-ket-qua-voi-cau-truc-promt-chuan', '<pre>&lt;iframe src=\"https://iridescent-lungfish-83e.notion.site/ebd/1d340b4ce55180afa050d78715fab9c9\" width=\"100%\" height=\"600\" frameborder=\"0\" allowfullscreen&gt;&lt;/iframe&gt;</pre>', NULL, '2025-04-12 15:54:18', '2025-04-12 08:49:59', '2025-04-12 08:54:18', 0),
(7, 'Đặt lịch học với Minh Triết', 'dat-lich-hoc-voi-minh-triet', '<p>&lt;iframe src=\"https://calendar.google.com/calendar/appointments/schedules/AcZssZ1IBcQOunErCs-s-ZDkuhAiPxgmOe-_M4WR6PvK1XxnJ7pvAj53AsDTkVVpDTbhoxqcTAYVzo6N?gv=true\" style=\"border: 0\" width=\"100%\" height=\"600\" frameborder=\"0\"&gt;&lt;/iframe&gt;<br><br></p>', 'post-images/01JX2R463H57R10ZRFW6KAPHWY.jpg', '2025-06-10 16:34:33', '2025-06-06 06:43:47', '2025-06-10 09:34:33', 0),
(8, 'Đánh giá chất lượng khóa học AI', 'danh-gia-chat-luong-khoa-hoc-ai', '<pre>&lt;iframe src=\"https://docs.google.com/forms/d/e/1FAIpQLSdZf1A3sB_TGXJ6xIPD4PWX3ccl940_yxQMffjDuEq2SYlQUA/viewform?embedded=true\" width=\"900\" height=\"1285\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\"&gt;Đang tải…&lt;/iframe&gt;</pre>', 'post-images/01JZ0KSC97T41K44MTMY2Q8B4C.jpg', '2025-06-30 14:27:49', '2025-06-30 07:23:08', '2025-06-30 07:27:49', 1),
(9, 'Kiểm tra cuối khóa Khóa học AI', 'kiem-tra-cuoi-khoa-khoa-hoc-ai', '<pre>&lt;div&gt;\n&lt;a href=\"https://docs.google.com/document/d/1aB6_nrMOKi591bzgcSxrceKCEKshQh7OU5OnMEKh_aQ/edit?usp=sharing\" target=\"_blank\" style=\"display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-align: center; text-decoration: none; border-radius: 5px; font-size: 16px; cursor: pointer;\"&gt;\n    Đề bài\n&lt;/a&gt;\n&lt;/div&gt;&lt;div&gt;\n&lt;a href=\"https://forms.gle/c3pqJi7zpSZPhzrC9\" target=\"_blank\" style=\"display: inline-block; padding: 10px 20px; background-color: #1a0a41; color: white; text-align: center; text-decoration: none; border-radius: 5px; font-size: 16px; cursor: pointer;\"&gt;\n    Nộp bài\n&lt;/a&gt;&lt;/div&gt;</pre>', 'post-images/01JZ2S9VWT6434GKVBSHJFTRZR.png', '2025-07-01 10:53:35', '2025-07-01 03:42:43', '2025-07-01 03:55:54', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_categories`
--

CREATE TABLE `post_categories` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `post_categories`
--

INSERT INTO `post_categories` (`post_id`, `category_id`) VALUES
(1, 2),
(2, 3),
(3, 3),
(5, 4),
(6, 4),
(7, 4),
(8, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(1, 5),
(2, 6),
(3, 6),
(5, 7),
(6, 7),
(7, 7),
(8, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `resources`
--

CREATE TABLE `resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appname` varchar(255) NOT NULL,
  `version` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `logo_url` varchar(255) DEFAULT NULL,
  `link_truycap` varchar(255) NOT NULL,
  `ten_hanhdong` varchar(255) NOT NULL,
  `trangthai_link` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `resources`
--

INSERT INTO `resources` (`id`, `appname`, `version`, `category`, `description`, `logo_url`, `link_truycap`, `ten_hanhdong`, `trangthai_link`, `created_at`, `updated_at`) VALUES
(1, 'Microsoft Office', '2016', 'Office', NULL, 'https://download.logo.wine/logo/Microsoft_Office_2016/Microsoft_Office_2016-Logo.wine.png', 'https://officecdn.microsoft.com/db/39168d7e-077b-48e7-872c-b232c3e72675/media/en-us/ProfessionalRetail.img', 'Truy cập', 1, '2025-02-22 00:39:44', '2025-02-22 00:39:44'),
(3, 'Microsoft Office', '2019', 'Office', NULL, 'https://img.icons8.com/color/48/microsoft-office-2019.png\n', 'https://officecdn.microsoft.com/db/492350f6-3a01-4f97-b9c0-c7c6ddf67d60/media/en-us/ProPlus2019Retail.img', 'Truy cập', 1, '2025-02-22 00:49:49', '2025-02-22 00:49:49'),
(4, 'Microsoft Office', '365', 'Office', NULL, 'https://img.icons8.com/fluency/48/microsoft-365.png\n', 'https://officecdn.microsoft.com/db/492350f6-3a01-4f97-b9c0-c7c6ddf67d60/media/en-us/O365ProPlusRetail.img', 'Truy cập', 1, '2025-02-22 00:50:33', '2025-02-22 00:50:33'),
(5, 'Autodesk Autocad', '2022', 'Vẽ kỹ thuật', NULL, 'https://seeklogo.com/images/A/autocad-logo-69326D7728-seeklogo.com.png', 'https://drive.google.com/file/d/1OBDh4t4jyzes96qoN...', 'Truy cập', 1, '2025-02-22 00:51:45', '2025-02-22 00:51:45'),
(6, 'Autodesk Autocad', '2024', 'Vẽ kỹ thuật', NULL, 'https://seeklogo.com/images/A/autocad-logo-69326D7728-seeklogo.com.png', 'https://drive.google.com/file/d/188Wek7iE7NcsFdEpmfSjntnrj0cLPuoc/view?usp=drive_link', 'Truy cập', 1, '2025-02-22 00:52:08', '2025-02-22 00:52:08'),
(7, 'SketchUp', '2023', 'Vẽ kỹ thuật', NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhLxz8tGb35HBcaa_0fyrkNZK_Sr43xyPK5A&s', 'https://www.mediafire.com/file/jz0swz7qi9ynm0e/Sketchup_2023.rar/file', 'Truy cập', 1, '2025-02-22 00:53:40', '2025-04-09 09:17:13'),
(8, 'Windows 11 Cursor', '1.0', 'Khác', NULL, 'https://img.icons8.com/pulsar-color/48/cursor-in-window.png\n', 'https://drive.google.com/drive/folders/1TcHbsi3eYXO52uON4wMPPkYBZ7Wxd7Fj?usp=drive_link', 'Truy cập', 1, '2025-02-22 00:53:54', '2025-02-22 00:53:54'),
(9, 'Adobe Photoshop', '2023', 'Đồ hoạ', NULL, 'https://img.icons8.com/color/48/adobe-photoshop--v1.png\n', 'https://drive.google.com/file/d/1Qai1oojam8oWzHjSCUQv2aAtVuywFFla/view?usp=drive_link', 'Truy cập', 1, '2025-02-22 01:05:35', '2025-02-22 01:05:35'),
(10, 'Adobe Illustrator', '2023', 'Đồ hoạ', NULL, 'https://img.icons8.com/color/48/adobe-illustrator--v1.png', 'https://drive.google.com/file/d/1L6cHeclUiGU_6D721xNhoEvGZMCQlDSY/view?usp=drive_link', 'Truy cập', 1, '2025-02-22 01:05:49', '2025-02-22 01:05:49'),
(11, 'Microsoft Visio', '2019', 'Workspace', NULL, 'https://img.icons8.com/color/48/microsoft-visio-2019.png\n', 'https://officecdn.microsoft.com/db/492350f6-3a01-4f97-b9c0-c7c6ddf67d60/media/en-us/VisioPro2019Retail.img', 'Truy cập', 1, '2025-02-22 01:06:05', '2025-02-22 01:06:05'),
(12, 'Microsoft Project', '2021', 'Workspace', NULL, 'https://img.icons8.com/color/48/microsoft-project-2019.png\n', 'https://officecdn.microsoft.com/db/492350f6-3a01-4f97-b9c0-c7c6ddf67d60/media/en-us/ProjectPro2021Retail.img', 'Truy cập', 1, '2025-02-22 01:06:16', '2025-02-22 01:06:16'),
(13, 'CorelDraw', '25.0.0.230', 'Đồ hoạ', NULL, 'https://img.icons8.com/fluency/48/coreldraw-2021.png\n', 'https://drive.google.com/file/d/1fj2hgB9_qOqxGA1koXXwA-9DgVyheBuN/view?usp=drive_link', 'Truy cập', 1, '2025-02-22 01:06:31', '2025-02-22 01:06:31'),
(14, 'Adobe Photoshop', '2025', 'Đồ hoạ', NULL, 'https://img.icons8.com/color/48/adobe-photoshop--v1.png\n', 'https://drive.google.com/file/d/1bJTe6IihIekotrusXK9AeOjsEBfYZRAa/view?usp=drive_link', 'Truy cập', 1, '2025-02-22 01:06:44', '2025-02-22 01:06:44'),
(16, 'IC3', 'Sparks GS6', 'Office', NULL, 'https://edusa.vn/wp-content/uploads/2023/10/IC3-GS6-logo.webp', 'https://drive.google.com/drive/folders/1LF4WasmlqyK8Jy90j8szKBxG0xhkpMqb?usp=drive_link', 'Truy cập', 1, '2025-02-22 01:07:15', '2025-02-22 01:07:15'),
(17, 'Revit', '2024', 'Vẽ kỹ thuật', NULL, 'https://dohoasaigon.com/wp-content/uploads/2025/03/revit-2024.png', 'https://drive.google.com/file/d/1a4DIL60GFHun1qxkHVKaE00zYM5jjAvh/view?usp=drive_link', 'Truy cập', 1, '2025-02-22 01:07:26', '2025-02-22 01:07:26'),
(18, 'FastStone Capture', '10.6', 'Ứng dụng', NULL, 'https://e1.pngegg.com/pngimages/631/913/png-clipart-faststone-capture-256-icon-thumbnail.png', 'https://drive.google.com/file/d/1AJN_JHLBqYaxXQFDhXbhhqKPzbX1NjIy/view?usp=drive_link', 'Truy cập', 1, '2025-02-22 01:07:36', '2025-02-22 01:07:36'),
(19, 'Adobe Illustrator', '2025', 'Đồ hoạ', NULL, 'https://img.icons8.com/color/48/adobe-illustrator--v1.png\n', 'https://drive.google.com/file/d/1QgUqwbV2VRptmXw8x5ovRHbcPm2RkMx6/view?usp=drive_link', 'Truy cập', 1, '2025-02-22 01:07:59', '2025-02-22 01:07:59'),
(23, 'Lộ Trình Bán Hàng Online Từ A-Z', '1.0', 'Khác', NULL, NULL, 'https://g.co/gemini/share/c77d1fef9edb', 'Truy cập', 0, '2025-06-10 02:45:07', '2025-06-10 02:45:07'),
(24, 'In file 1606', '16/06', 'Khác', NULL, NULL, 'https://1drv.ms/w/c/153acc83a6bf415a/EThbe8a0dBpMp5SMggqpenABlg30M9w4TIlRH5DQqfVktw?e=vY0bQ3', 'Mở file', 0, '2025-06-16 00:26:30', '2025-06-16 00:26:30'),
(25, 'Hướng dẫn cài đặt Misa', 'SME 2023', 'Hướng dẫn', NULL, 'https://play-lh.googleusercontent.com/eZSTPFaVLBBhrS0wW-u7L8E8XlscgDiULgsbZLnAkfAb35B3yOxaky1to-mRcg8umWGE', 'https://1drv.ms/w/c/153acc83a6bf415a/EVpBv6aDzDoggBVXrQAAAAABZetK_U9uMDFXS8fcj324WQ?e=CBmjDD', 'Xem hướng dẫn', 1, '2025-06-26 05:13:03', '2025-06-26 05:13:03'),
(26, 'Bài tập AI', 'Session3', 'Khác', NULL, NULL, 'https://drive.google.com/drive/folders/1luV1HwCcimY1ZUVOP2NOsddN1XzqMmks?usp=sharing', 'Truy cập', 0, '2025-06-29 00:47:20', '2025-06-29 00:47:20'),
(27, 'Bài tập Python', '1', 'Khác', NULL, 'https://img.icons8.com/nolan/64/python.png\n', 'https://docs.google.com/spreadsheets/d/1Wo0uv5prOKfbax2ys1PNx4ywUMgfINin/edit?gid=1893140299#gid=1893140299', 'Truy cập', 1, '2025-07-05 05:32:46', '2025-07-05 05:32:46'),
(28, 'Tài liệu Luyện thi MOS', '2019', 'Khác', NULL, 'https://bizweb.dktcdn.net/thumb/grande/100/527/543/products/wordimage.png?v=1727967405943', 'https://drive.google.com/drive/folders/1QjYAnLBGfOOGqieFoOUOcaZB9AOgWVJr', 'Truy cập', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2025-04-09 13:43:46', '2025-04-09 13:43:47'),
(2, 'student', 'web', '2025-04-09 13:43:48', '2025-04-09 13:43:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
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
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5frbz8wygHsG0Z0mrQmUtyLkg7JFt4PpHKEOI6Us', 1, '192.168.1.22', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTUtKVWt0Y1Q5SVlQY25SNGxwelFRNFNsS05kQ1BlUWUyNTdMazNVSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xOTIuMTY4LjEuMjo4MDAwL2FkbWluL3JlZ2lzdGVyLWNvdXJzZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRKWHEuL3RKOW1qRXRIUkphbUxKUWZ1SWNUMDYvTUd0RUhneVZSZS5TV3lBdU5UeVV0TXFSRyI7czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1743607231),
('bEtrfdKZGqEhUkhyAxPQSzTHKpaideAi8s3krZxs', NULL, '109.205.213.198', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.85 Safari/537.36 Edg/90.0.818.46', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTExVdElhVjlncjk1bk9YMmttaWhlb2FWbmtBSTZuNmNpSUl4ZHZUNiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1743610490),
('I5KY3ohVjuAmXJX6momGgDudAEy0KQr7gVibP3Dm', NULL, '179.43.175.246', 'Hello World/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieWtkMjZHeWo2MFVLa2JJUnZJNkNWSGx1VVcyWHYyZU9SVG9iQmloRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly8xNC4xODYuODQuMzY6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743609254),
('KozTdvjF7nQD6G8N93S8hzSf3CtvKNXz7IiZEEoM', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiNk1rbEFTV0tIY25RZzNRTHRpSU0xQXhrS01YVG15R0lvNGxLdzJzayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9yZWdpc3Rlci1jb3Vyc2UiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEpYcS4vdEo5bWpFdEhSSmFtTEpRZnVJY1QwNi9NR3RFSGd5VlJlLlNXeUF1TlR5VXRNcVJHIjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1743612251),
('mRPTE953F7BTzBUsu9f7RrskVwZpBOg0eVNPu5nn', NULL, '114.35.42.104', 'curl/7.88.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXdwcEpxUHZPZk4wMW5SOVJKRzA5ZWFVeDB0T3ZZTm9pQnBZamRwdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly8xNC4xODYuODQuMzY6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1743610056);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` decimal(10,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `department_id`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Microsoft Word 365 Basic', 1, '900000.00', '2025-04-03 01:18:47', '2025-04-03 01:18:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Thủ thuật Word', 'thu-thuat-word', '2025-04-09 11:49:08', '2025-04-09 11:49:08'),
(2, 'Mẹo Word', 'meo-word', '2025-04-09 11:49:31', '2025-04-09 11:49:31'),
(3, 'Soạn thảo văn bản', 'soan-thao-van-ban', '2025-04-09 11:49:35', '2025-04-09 11:49:35'),
(4, 'Tin học văn phòng cơ bản', 'tin-hoc-van-phong-co-ban', '2025-04-09 11:49:37', '2025-04-09 11:49:37'),
(5, 'Tăng tốc Word', 'tang-toc-word', '2025-04-09 11:49:40', '2025-04-09 11:49:40'),
(6, 'tool', 'tool', '2025-04-09 13:15:09', '2025-04-09 13:15:09'),
(7, 'ai', 'ai', '2025-04-10 04:59:29', '2025-04-10 04:59:29'),
(8, 'microsoft365', 'microsoft365', '2025-04-11 04:51:47', '2025-04-11 04:51:47'),
(9, 'copilot', 'copilot', '2025-04-11 04:51:56', '2025-04-11 04:51:56'),
(10, 'office', 'office', '2025-04-11 04:52:05', '2025-04-11 04:52:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(34, 'leminhtrietofficial@gmail.com', NULL, '$2y$12$j6nkNZNoJAGzL.IoPyaLeepYh2kO7pZZXFz7KGW5Jk1j45X/5b0Ve', 'HzhGJW4HHdH0A2zLDwbWvnar6qTXw7q0HGAUOWsuUU9aU1zgo61bZOOaw2LV', '2025-04-03 05:50:09', '2025-04-04 21:56:49'),
(36, 'admin@leminhtriet.com', NULL, '$2y$12$6U3WE7/wbj8YwN5iqXzKne6ocZgkHGehEpdxqx1IJbb74N/M9BWHy', NULL, '2025-04-04 19:50:01', '2025-04-04 19:50:01'),
(43, 'minhtrietofficial@gmail.com', NULL, '$2y$12$QBtTLx2bsk0.Ql.xFOXkie/FIeoo.OdUp0r0Pmxe9b7N.1mwvbWDO', 'qHtjS2MlEMoVzK7K4ApeKUeBYg9suoyuZSNNWuZOYN8YP7atIf4aPA6gWiAQ', '2025-04-04 21:13:36', '2025-04-04 22:30:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_social_accounts`
--

CREATE TABLE `user_social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider` varchar(255) NOT NULL,
  `provider_user_id` varchar(255) NOT NULL,
  `provider_token` text DEFAULT NULL,
  `provider_refresh_token` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departments_name_unique` (`name`);

--
-- Chỉ mục cho bảng `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_foreign` (`model_id`);

--
-- Chỉ mục cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_has_roles_model_id_foreign` (`model_id`);

--
-- Chỉ mục cho bảng `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrollment_id` (`enrollment_id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `personal_infos`
--
ALTER TABLE `personal_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identitynumber` (`identitynumber`),
  ADD KEY `personal_infos_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Chỉ mục cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`post_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`post_id`,`tag_id`),
  ADD KEY `tag_id` (`tag_id`);

--
-- Chỉ mục cho bảng `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_social_accounts`
--
ALTER TABLE `user_social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_social_accounts_provider_provider_user_id_unique` (`provider`,`provider_user_id`),
  ADD KEY `user_social_accounts_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `personal_infos`
--
ALTER TABLE `personal_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `resources`
--
ALTER TABLE `resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `user_social_accounts`
--
ALTER TABLE `user_social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Các ràng buộc cho bảng `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`enrollment_id`) REFERENCES `enrollments` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `personal_infos`
--
ALTER TABLE `personal_infos`
  ADD CONSTRAINT `personal_infos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `personal_infos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `post_categories`
--
ALTER TABLE `post_categories`
  ADD CONSTRAINT `post_categories_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `user_social_accounts`
--
ALTER TABLE `user_social_accounts`
  ADD CONSTRAINT `user_social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
