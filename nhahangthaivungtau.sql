-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2025 at 01:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhahangthaivungtau`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint UNSIGNED NOT NULL,
  `image_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` int NOT NULL DEFAULT '0',
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `image_link`, `created_at`, `updated_at`, `title`, `order_number`, `images`, `slug`, `views`) VALUES
(2, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1746537058),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1746537058;', 1746537058),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1746536662),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1746536662;', 1746536662);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `order_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Món chính', 'mon-chinh', 2, 1, '2025-05-03 05:04:47', '2025-05-03 05:08:45'),
(2, 'Món phụ', 'mon-phu', 1, 1, '2025-05-03 05:04:52', '2025-05-03 05:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `image`, `name`, `role`, `content`, `created_at`, `updated_at`) VALUES
(1, '01JTCJ664XK5YG0SS6YT5ZS67Y.png', 'ĐINH VĂN TOÀN', 'CEO', 'Mình đánh giá cao phong cách phục vụ chuyên nghiệp và chu đáo của Đảo Ngọc. Nhân viên luôn niềm nở, sẵn sàng giải đáp mọi thắc mắc của khách hàng. Mình cũng rất thích không gian nhà hàng rộng rãi, thoáng mát, tạo cảm giác thoải mái tự nhiên như ở nhà. Mình sẽ giới thiệu Đảo Ngọc cho các đối tác và bạn bè của mình. Đảo ngọc là một địa điểm đáng để trải nghiệm.', '2025-05-03 19:32:16', '2025-05-03 19:32:16'),
(2, '01JTCJ664XK5YG0SS6YT5ZS67Y.png', 'ĐINH VĂN TOÀN', 'CEO', 'Mình đánh giá cao phong cách phục vụ chuyên nghiệp và chu đáo của Đảo Ngọc. Nhân viên luôn niềm nở, sẵn sàng giải đáp mọi thắc mắc của khách hàng. Mình cũng rất thích không gian nhà hàng rộng rãi, thoáng mát, tạo cảm giác thoải mái tự nhiên như ở nhà. Mình sẽ giới thiệu Đảo Ngọc cho các đối tác và bạn bè của mình. Đảo ngọc là một địa điểm đáng để trải nghiệm.', '2025-05-03 19:32:16', '2025-05-03 19:32:16'),
(3, '01JTCJ664XK5YG0SS6YT5ZS67Y.png', 'ĐINH VĂN TOÀN', 'CEO', 'Mình đánh giá cao phong cách phục vụ chuyên nghiệp và chu đáo của Đảo Ngọc. Nhân viên luôn niềm nở, sẵn sàng giải đáp mọi thắc mắc của khách hàng. Mình cũng rất thích không gian nhà hàng rộng rãi, thoáng mát, tạo cảm giác thoải mái tự nhiên như ở nhà. Mình sẽ giới thiệu Đảo Ngọc cho các đối tác và bạn bè của mình. Đảo ngọc là một địa điểm đáng để trải nghiệm.', '2025-05-03 19:32:16', '2025-05-03 19:32:16'),
(4, '01JTCJ664XK5YG0SS6YT5ZS67Y.png', 'ĐINH VĂN TOÀN', 'CEO', 'Mình đánh giá cao phong cách phục vụ chuyên nghiệp và chu đáo của Đảo Ngọc. Nhân viên luôn niềm nở, sẵn sàng giải đáp mọi thắc mắc của khách hàng. Mình cũng rất thích không gian nhà hàng rộng rãi, thoáng mát, tạo cảm giác thoải mái tự nhiên như ở nhà. Mình sẽ giới thiệu Đảo Ngọc cho các đối tác và bạn bè của mình. Đảo ngọc là một địa điểm đáng để trải nghiệm.', '2025-05-03 19:32:16', '2025-05-03 19:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `sub_category_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order_number` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_best_seller` tinyint(1) NOT NULL DEFAULT '0',
  `best_seller_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `category_id`, `sub_category_id`, `name`, `slug`, `thumb_img`, `img`, `price`, `discount_price`, `description`, `order_number`, `status`, `is_best_seller`, `best_seller_banner`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Menu Buffet Lẩu Thái', 'menu-buffet-lau-thai', 'foods/thumb/01JTB28TSJYTS35WZX33EWYJE8.png', 'foods/01JTB28TSNP3ZB9HM3G3E3MGRK.png', '195000.00', '165000.00', '<p>test</p>', 0, 1, 1, 'foods/best_seller/01JTCGVA4TYN5KPYR459KQX31M.png', '2025-05-03 05:34:51', '2025-05-03 19:10:00'),
(3, 1, 3, 'Menu Buffet Lẩu Thái', 'menu-buffet-lau-thai1', 'foods/thumb/01JTB28TSJYTS35WZX33EWYJE8.png', 'foods/01JTB28TSNP3ZB9HM3G3E3MGRK.png', '195000.00', '165000.00', '<p>test</p>', 0, 1, 1, 'foods/best_seller/01JTCGVA4TYN5KPYR459KQX31M.png', '2025-05-03 05:34:51', '2025-05-03 19:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `link_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_bestseller` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `order_number`, `status`, `link_image`, `is_bestseller`, `created_at`, `updated_at`) VALUES
(1, 'Món đặc biệt', 'mon-dac-biet', 1, 1, '[\"01JTCG69QSN71F1TN46B7PZVSS.png\",\"01JTCG69QVMJ7YPJA25F9S6KCB.png\",\"01JTCGEN6T3NAT3HHPWC0E3AFT.png\",\"01JTCGEN6YAHR46BD254TK2TNY.png\",\"01JTCGEN6Z3C0KV3GZ596CFNJH.png\",\"01JTCGEN70TWMEJ35ENGGEFCM9.png\"]', 1, '2025-05-03 18:57:22', '2025-05-03 19:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_03_113110_add_themes_settings_to_users_table', 2),
(5, '2025_05_03_113655_create_visitors_table', 3),
(6, '2025_05_03_113658_create_online_users_table', 3),
(7, '2025_05_03_113700_create_settings_table', 4),
(8, '2025_05_03_115523_create_categories_table', 5),
(9, '2025_05_03_115537_create_sub_categories_table', 5),
(10, '2025_05_03_121312_create_food_table', 6),
(11, '2025_05_03_123052_add_discount_price_to_foods_table', 7),
(12, '2025_05_03_130042_create_reviews_table', 8),
(13, '2025_05_03_130816_create_albums_table', 9),
(14, '2025_05_03_133531_add_title_and_order_number_to_albums_table', 10),
(15, '2025_05_03_134228_create_news_table', 11),
(16, '2025_05_04_014307_create_slideshows_table', 12),
(17, '2025_05_04_015245_create_menus_table', 13),
(18, '2025_05_04_020440_add_best_seller_columns_to_foods_table', 14),
(19, '2025_05_04_022919_create_customer_feedback_table', 15),
(20, '2025_05_04_023533_create_reservations_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `thumb_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` bigint UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `desc`, `short_desc`, `thumb_img`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại ', 'am-thuc-thai-lan-da-dang-hap-dan-va-huyen-thoai', '<h2>Khám phá Đảo Ngọc - Nơi mang đến tinh hoa ẩm thực Việt</h2><p><strong>Đảo Ngọc</strong> tọa lạc tại địa chỉ <strong>89 Nguyễn Thị Búp, Quận 12</strong>, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam <strong>đậm đà hương vị</strong> và <strong>chuẩn mực phục vụ</strong>.</p><p><strong>Tại đây, bạn sẽ được:</strong></p><ul><li><strong>Thưởng thức:</strong><ul><li>Các món ăn <strong>nổi tiếng khắp Sài Gòn</strong> được chế biến từ nguyên liệu tươi ngon,<em> đảm bảo </em>vệ sinh an toàn thực phẩm.</li><li>Hương vị <strong>đậm đà, chuẩn vị Việt</strong>, mang đến cho bạn cảm giác như đang lạc bước vào thế giới ẩm thực truyền thống.</li></ul></li><li><strong>Trải nghiệm:</strong><ul><li><strong>Phong cách phục vụ chuyên nghiệp, chu đáo</strong>, mang đến cho bạn sự hài lòng tuyệt đối.</li><li><strong>Không gian ấm cúng, gần gũi</strong>, tạo cảm giác thoải mái như đang ở nhà.</li></ul></li><li><strong>Thích thú:</strong><ul><li><strong>Đa dạng các món ăn kèm</strong> được phục vụ miễn phí, cho bạn thỏa sức lựa chọn và thưởng thức.</li><li><strong>Mức giá hợp lý</strong>, phù hợp với mọi đối tượng khách hàng.</li></ul></li></ul><p><strong>Đảo Ngọc</strong> là điểm đến lý tưởng cho những ai muốn:</p><ul><li>Tìm kiếm <strong>món ngon Việt Nam</strong> đúng điệu.</li><li>Trải nghiệm <strong>phong cách phục vụ chuyên nghiệp</strong>.</li><li>Thưởng thức <strong>đa dạng các món ăn kèm</strong>.</li><li>Có những giây phút <strong>vui vẻ, thoải mái</strong> bên gia đình và bạn bè.</li></ul><p><strong>Hãy đến với Đảo Ngọc để:</strong></p><ul><li>Khám phá <strong>tinh hoa ẩm thực Việt</strong>.</li><li>Tận hưởng <strong>dịch vụ hoàn hảo</strong>.</li><li>Tạo dựng những kỷ niệm đẹp đẽ.</li></ul><p><strong>Liên hệ đặt bàn:</strong></p><ul><li><strong>Địa chỉ:</strong> 89 Nguyễn Thị Búp, Quận 12, Vietnam</li><li><strong>Điện thoại:</strong> 0918 606 032</li></ul><p><strong>Đảo Ngọc - Nơi mang đến sự hài lòng cho mọi thực khách!</strong></p><p><br></p>', 'Đảo Ngọc tọa lạc tại địa chỉ 89 Nguyễn Thị Búp, Quận 12, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam đậm đà hương vị và chuẩn mực phục vụ.', '01JTCH9KCC0P79YKCCQF7G3MD6.png', 0, '2025-05-03 19:16:39', '2025-05-03 19:16:39'),
(2, 'Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại ', 'am-thuc-1thai-lan-da-dang-hap-dan-va-huyen-thoai', '<h2>Khám phá Đảo Ngọc - Nơi mang đến tinh hoa ẩm thực Việt</h2><p><strong>Đảo Ngọc</strong> tọa lạc tại địa chỉ <strong>89 Nguyễn Thị Búp, Quận 12</strong>, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam <strong>đậm đà hương vị</strong> và <strong>chuẩn mực phục vụ</strong>.</p><p><strong>Tại đây, bạn sẽ được:</strong></p><ul><li><strong>Thưởng thức:</strong><ul><li>Các món ăn <strong>nổi tiếng khắp Sài Gòn</strong> được chế biến từ nguyên liệu tươi ngon,<em> đảm bảo </em>vệ sinh an toàn thực phẩm.</li><li>Hương vị <strong>đậm đà, chuẩn vị Việt</strong>, mang đến cho bạn cảm giác như đang lạc bước vào thế giới ẩm thực truyền thống.</li></ul></li><li><strong>Trải nghiệm:</strong><ul><li><strong>Phong cách phục vụ chuyên nghiệp, chu đáo</strong>, mang đến cho bạn sự hài lòng tuyệt đối.</li><li><strong>Không gian ấm cúng, gần gũi</strong>, tạo cảm giác thoải mái như đang ở nhà.</li></ul></li><li><strong>Thích thú:</strong><ul><li><strong>Đa dạng các món ăn kèm</strong> được phục vụ miễn phí, cho bạn thỏa sức lựa chọn và thưởng thức.</li><li><strong>Mức giá hợp lý</strong>, phù hợp với mọi đối tượng khách hàng.</li></ul></li></ul><p><strong>Đảo Ngọc</strong> là điểm đến lý tưởng cho những ai muốn:</p><ul><li>Tìm kiếm <strong>món ngon Việt Nam</strong> đúng điệu.</li><li>Trải nghiệm <strong>phong cách phục vụ chuyên nghiệp</strong>.</li><li>Thưởng thức <strong>đa dạng các món ăn kèm</strong>.</li><li>Có những giây phút <strong>vui vẻ, thoải mái</strong> bên gia đình và bạn bè.</li></ul><p><strong>Hãy đến với Đảo Ngọc để:</strong></p><ul><li>Khám phá <strong>tinh hoa ẩm thực Việt</strong>.</li><li>Tận hưởng <strong>dịch vụ hoàn hảo</strong>.</li><li>Tạo dựng những kỷ niệm đẹp đẽ.</li></ul><p><strong>Liên hệ đặt bàn:</strong></p><ul><li><strong>Địa chỉ:</strong> 89 Nguyễn Thị Búp, Quận 12, Vietnam</li><li><strong>Điện thoại:</strong> 0918 606 032</li></ul><p><strong>Đảo Ngọc - Nơi mang đến sự hài lòng cho mọi thực khách!</strong></p><p><br></p>', 'Đảo Ngọc tọa lạc tại địa chỉ 89 Nguyễn Thị Búp, Quận 12, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam đậm đà hương vị và chuẩn mực phục vụ.', '01JTCHCP1GEK9Y7YGDS02PSGFE.png', 7, '2025-05-03 19:16:39', '2025-05-05 04:10:11'),
(3, 'Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại ', 'a2m-thuc-thai-lan-da-dang-hap-dan-va-huyen-thoai', '<h2>Khám phá Đảo Ngọc - Nơi mang đến tinh hoa ẩm thực Việt</h2><p><strong>Đảo Ngọc</strong> tọa lạc tại địa chỉ <strong>89 Nguyễn Thị Búp, Quận 12</strong>, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam <strong>đậm đà hương vị</strong> và <strong>chuẩn mực phục vụ</strong>.</p><p><strong>Tại đây, bạn sẽ được:</strong></p><ul><li><strong>Thưởng thức:</strong><ul><li>Các món ăn <strong>nổi tiếng khắp Sài Gòn</strong> được chế biến từ nguyên liệu tươi ngon,<em> đảm bảo </em>vệ sinh an toàn thực phẩm.</li><li>Hương vị <strong>đậm đà, chuẩn vị Việt</strong>, mang đến cho bạn cảm giác như đang lạc bước vào thế giới ẩm thực truyền thống.</li></ul></li><li><strong>Trải nghiệm:</strong><ul><li><strong>Phong cách phục vụ chuyên nghiệp, chu đáo</strong>, mang đến cho bạn sự hài lòng tuyệt đối.</li><li><strong>Không gian ấm cúng, gần gũi</strong>, tạo cảm giác thoải mái như đang ở nhà.</li></ul></li><li><strong>Thích thú:</strong><ul><li><strong>Đa dạng các món ăn kèm</strong> được phục vụ miễn phí, cho bạn thỏa sức lựa chọn và thưởng thức.</li><li><strong>Mức giá hợp lý</strong>, phù hợp với mọi đối tượng khách hàng.</li></ul></li></ul><p><strong>Đảo Ngọc</strong> là điểm đến lý tưởng cho những ai muốn:</p><ul><li>Tìm kiếm <strong>món ngon Việt Nam</strong> đúng điệu.</li><li>Trải nghiệm <strong>phong cách phục vụ chuyên nghiệp</strong>.</li><li>Thưởng thức <strong>đa dạng các món ăn kèm</strong>.</li><li>Có những giây phút <strong>vui vẻ, thoải mái</strong> bên gia đình và bạn bè.</li></ul><p><strong>Hãy đến với Đảo Ngọc để:</strong></p><ul><li>Khám phá <strong>tinh hoa ẩm thực Việt</strong>.</li><li>Tận hưởng <strong>dịch vụ hoàn hảo</strong>.</li><li>Tạo dựng những kỷ niệm đẹp đẽ.</li></ul><p><strong>Liên hệ đặt bàn:</strong></p><ul><li><strong>Địa chỉ:</strong> 89 Nguyễn Thị Búp, Quận 12, Vietnam</li><li><strong>Điện thoại:</strong> 0918 606 032</li></ul><p><strong>Đảo Ngọc - Nơi mang đến sự hài lòng cho mọi thực khách!</strong></p><p><br></p>', 'Đảo Ngọc tọa lạc tại địa chỉ 89 Nguyễn Thị Búp, Quận 12, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam đậm đà hương vị và chuẩn mực phục vụ.', '01JTCHDVVVDM2DYTSW58J44XEW.png', 0, '2025-05-03 19:16:39', '2025-05-03 19:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `online_users`
--

CREATE TABLE `online_users` (
  `id` bigint UNSIGNED NOT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `online_users`
--

INSERT INTO `online_users` (`id`, `ip_address`, `last_activity`, `created_at`, `updated_at`) VALUES
(17, '127.0.0.1', '2025-05-06 06:49:44', '2025-05-06 06:44:35', '2025-05-06 06:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_people` int NOT NULL DEFAULT '1',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `number_of_people`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Văn A', '0977888645', 10, 'Tôi cần đặt 1 bàn cho 10 người vào 10:30 tối nay', '2025-05-03 19:46:32', '2025-05-03 19:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `video_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order_number` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `video_link`, `title`, `description`, `order_number`, `status`, `is_featured`, `created_at`, `updated_at`, `image`) VALUES
(2, 'https://youtu.be/BwVfGj5NCgs?si=qsCpRvpbTpW1xe9k', 'Lẩu thái', 'Lẩu thái video', 1, 1, 1, '2025-05-03 06:05:52', '2025-05-05 05:02:25', 'reviews/01JTG51ZD34BBAQBJ92QZC62HE.png'),
(5, 'https://youtu.be/BwVfGj5NCgs?si=qsCpRvpbTpW1xe9k', 'Lẩu thái', 'Lẩu thái video', 1, 1, 1, '2025-05-03 06:05:52', '2025-05-05 04:59:44', 'reviews/01JTG51ZD34BBAQBJ92QZC62HE.png'),
(6, 'https://youtu.be/BwVfGj5NCgs?si=qsCpRvpbTpW1xe9k', 'Lẩu thái', 'Lẩu thái video', 1, 1, 1, '2025-05-03 06:05:52', '2025-05-05 04:59:44', 'reviews/01JTG51ZD34BBAQBJ92QZC62HE.png'),
(7, 'https://youtu.be/BwVfGj5NCgs?si=qsCpRvpbTpW1xe9k', 'Lẩu thái', 'Lẩu thái video', 1, 1, 1, '2025-05-03 06:05:52', '2025-05-05 04:59:44', 'reviews/01JTG51ZD34BBAQBJ92QZC62HE.png'),
(8, 'https://youtu.be/BwVfGj5NCgs?si=qsCpRvpbTpW1xe9k', 'Lẩu thái', 'Lẩu thái video', 1, 1, 1, '2025-05-03 06:05:52', '2025-05-05 04:59:44', 'reviews/01JTG51ZD34BBAQBJ92QZC62HE.png'),
(9, 'https://youtu.be/BwVfGj5NCgs?si=qsCpRvpbTpW1xe9k', 'Lẩu thái', 'Lẩu thái video', 1, 1, 1, '2025-05-03 06:05:52', '2025-05-05 04:59:44', 'reviews/01JTG51ZD34BBAQBJ92QZC62HE.png'),
(10, 'https://youtu.be/BwVfGj5NCgs?si=qsCpRvpbTpW1xe9k', 'Lẩu thái', 'Lẩu thái video', 1, 1, 1, '2025-05-03 06:05:52', '2025-05-05 04:59:44', 'reviews/01JTG51ZD34BBAQBJ92QZC62HE.png'),
(11, 'https://youtu.be/BwVfGj5NCgs?si=qsCpRvpbTpW1xe9k', 'Lẩu thái', 'Lẩu thái video', 1, 1, 1, '2025-05-03 06:05:52', '2025-05-05 04:59:44', 'reviews/01JTG51ZD34BBAQBJ92QZC62HE.png');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('yXvPx3w2SPmWMZjLCO1o0AUe8KFFe64yjo53yKUo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36 OPR/118.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiU1FxNGZSSnhhNVVXN0JERUpMQUFvMDVJRGZtNnFTYmRlTDliZnFsaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90aW4tdHVjIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJFA2OWNTSk04WlZFWUhESFBsUXFxMi41cWQ0djU3WFh0ZUxtSWtwVFowdVEzbUxoUC5qM3N5IjtzOjg6ImZpbGFtZW50IjthOjA6e319', 1746452411),
('ZhKbhAAiMIutIg5nHqIVIkJEHDTm8REyBETgzuGg', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36 OPR/118.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiZTFnd3RXWjU1QmNGSm9WemFVYmJ4M2Vxa3V5ZFp2R1ZHR0NWT1pqSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkUDY5Y1NKTThaVkVZSERIUGxRcXEyLjVxZDR2NTdYWHRlTG1Ja3BUWjB1UTNtTGhQLmozc3kiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1746539381);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `home_title` text COLLATE utf8mb4_unicode_ci,
  `home_keyword` text COLLATE utf8mb4_unicode_ci,
  `home_description` text COLLATE utf8mb4_unicode_ci,
  `home_banner` text COLLATE utf8mb4_unicode_ci,
  `web_logo` text COLLATE utf8mb4_unicode_ci,
  `web_favicon` text COLLATE utf8mb4_unicode_ci,
  `web_name` text COLLATE utf8mb4_unicode_ci,
  `web_keyword` text COLLATE utf8mb4_unicode_ci,
  `web_address` text COLLATE utf8mb4_unicode_ci,
  `web_phone` text COLLATE utf8mb4_unicode_ci,
  `web_email` text COLLATE utf8mb4_unicode_ci,
  `web_instagram` text COLLATE utf8mb4_unicode_ci,
  `web_facebook` text COLLATE utf8mb4_unicode_ci,
  `web_youtube` text COLLATE utf8mb4_unicode_ci,
  `web_tiktok` text COLLATE utf8mb4_unicode_ci,
  `web_zalo` text COLLATE utf8mb4_unicode_ci,
  `web_map_link` text COLLATE utf8mb4_unicode_ci,
  `web_map_iframe` text COLLATE utf8mb4_unicode_ci,
  `script_footer` text COLLATE utf8mb4_unicode_ci,
  `script_header` text COLLATE utf8mb4_unicode_ci,
  `about_title` text COLLATE utf8mb4_unicode_ci,
  `about_content` longtext COLLATE utf8mb4_unicode_ci,
  `about_image` text COLLATE utf8mb4_unicode_ci,
  `created_at` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `home_title`, `home_keyword`, `home_description`, `home_banner`, `web_logo`, `web_favicon`, `web_name`, `web_keyword`, `web_address`, `web_phone`, `web_email`, `web_instagram`, `web_facebook`, `web_youtube`, `web_tiktok`, `web_zalo`, `web_map_link`, `web_map_iframe`, `script_footer`, `script_header`, `about_title`, `about_content`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'KHAY PHA THAI', 'ẩm thực Thái Lan, nhà hàng Thái Lan, Khay-Pha Thai, Koh Samui, món Thái, đồ Thái tại Việt Nam, bếp Thái truyền thống, văn hóa ẩm thực Thái, món ăn Thái Lan, nhà hàng Thái gần đây', 'Khám phá văn hóa ẩm thực Thái Lan đặc sắc tại Khay-Pha Thai – kế thừa tinh hoa từ Koh Samui với hơn 100 món ăn và tráng miệng truyền thống Thái, phục vụ người Việt mỗi ngày.\n', 'settings/01JTG93KDNH6C083BEJR3QTM52.png', 'settings/01JTJVFBT41JJ8DDNT7X3RFB0B.png', 'settings/01JTG94FM2Z1H0BC5Y7X8HRP5H.png', 'KHAY PHA THAI', 'KHAY PHA THAI', '43 Lê Phụng Hiểu , phường 8 , Bà Rịa , Vũng Tàu ', '0342097272', 'thaikhaypha@gmail.com', NULL, 'https://www.facebook.com/nhahangthaivungtau.monanthaitaivungtau', NULL, NULL, NULL, 'https://maps.app.goo.gl/qEePDcAArrzYxKA67', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.801400305833!2d107.0917817!3d10.3577589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31756f007d62c0b1%3A0x8672f7d4a7af87e4!2zS0hBWeKAolBIQSBUaMOhaQ!5e0!3m2!1svi!2s!4v1746450701194!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL, 'ẨM THỰC KHAY•PHA Thái ', '<p><strong>Được mệnh danh là “xứ sở chùa Vàng”, Thái Lan không chỉ nổi tiếng với những ngôi chùa linh thiêng mà còn hấp dẫn bởi nền văn hóa ẩm thực đặc sắc.</strong> Khay-Pha Thai ra đời như một chiếc cầu nối mang tinh hoa ẩm thực Thái đến gần hơn với thực khách Việt, đặc biệt là tại thành phố biển Vũng Tàu.</p><p>Chúng tôi kế thừa và hoàn thiện từ thương hiệu nổi tiếng <strong>Koh Samui</strong>, mang đến trải nghiệm ẩm thực Thái Lan đích thực với mô hình bếp Thái thân thiện, gần gũi. Tại Khay-Pha Thai, bạn sẽ được thưởng thức <strong>hơn 100 món ăn và tráng miệng truyền thống</strong> được chế biến chuẩn vị Thái – từ Tom Yum cay nồng, Pad Thai đậm đà cho đến xôi xoài ngọt thanh, thơm dẻo.</p><p>Với không gian ấm cúng, phong cách phục vụ chu đáo và nguyên liệu chất lượng cao, Khay-Pha Thai mong muốn trở thành điểm đến quen thuộc của những ai yêu thích hương vị Thái Lan tại Vũng Tàu.</p>', 'settings/01JTG9AQRCK5SM5S74G0TPPKSN.png', '', '2025-05-06 13:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` bigint UNSIGNED NOT NULL,
  `image_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `order_number` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slideshows`
--

INSERT INTO `slideshows` (`id`, `image_link`, `status`, `order_number`, `created_at`, `updated_at`) VALUES
(1, '01JTCFK076S7X9PX957H1ADD86.png', 1, 2, '2025-05-03 18:46:50', '2025-05-03 18:47:18'),
(2, '01JTCFK076S7X9PX957H1ADD86.png', 1, 1, '2025-05-03 18:46:50', '2025-05-03 18:47:18'),
(3, '01JTCFK076S7X9PX957H1ADD86.png', 1, 3, '2025-05-03 18:46:50', '2025-05-03 18:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` int NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `slug`, `order_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Đồ kho', 'do-kho', 3, 1, '2025-05-03 05:05:16', '2025-05-03 05:07:54'),
(2, 1, 'Khai vị', 'khai-vi', 1, 1, '2025-05-03 05:05:22', '2025-05-03 05:08:22'),
(3, 1, 'Lẩu', 'lau', 2, 1, '2025-05-03 05:05:33', '2025-05-03 05:07:54'),
(4, 2, 'Mì', 'mi', 4, 1, '2025-05-03 05:05:48', '2025-05-03 05:07:54'),
(5, 2, 'Cơm', 'com', 5, 1, '2025-05-03 05:05:54', '2025-05-03 05:07:54'),
(6, 2, 'Gỏi', 'goi', 6, 1, '2025-05-03 05:06:01', '2025-05-03 05:07:54'),
(7, 1, 'Súp', 'sup', 7, 1, '2025-05-03 05:06:07', '2025-05-03 05:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `theme` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `theme_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `theme`, `theme_color`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$P69cSJM8ZVEYHDHPlQqq2.5qd4v57XXteLmIkpTZ0uQ3mLhP.j3sy', NULL, '2025-05-03 04:29:02', '2025-05-03 04:29:02', 'default', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `count` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `date`, `count`, `created_at`, `updated_at`) VALUES
(1, '2025-05-03', 321, '2025-05-03 04:41:49', '2025-05-03 06:45:48'),
(2, '2025-05-04', 292, '2025-05-03 18:36:19', '2025-05-03 20:08:56'),
(3, '2025-05-05', 3118, '2025-05-05 03:38:06', '2025-05-05 06:40:12'),
(4, '2025-05-06', 474, '2025-05-06 05:59:03', '2025-05-06 06:49:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `foods_slug_unique` (`slug`),
  ADD KEY `foods_category_id_foreign` (`category_id`),
  ADD KEY `foods_sub_category_id_foreign` (`sub_category_id`);

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
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`);

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
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

--
-- Indexes for table `online_users`
--
ALTER TABLE `online_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `online_users_ip_address_unique` (`ip_address`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_categories_slug_unique` (`slug`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visitors_date_unique` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `online_users`
--
ALTER TABLE `online_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `foods_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
