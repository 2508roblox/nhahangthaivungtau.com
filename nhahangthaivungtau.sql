-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2025 at 02:52 AM
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
(2, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0),
(9, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0),
(10, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0),
(11, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0),
(12, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0),
(13, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0),
(14, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0),
(15, 'albums_image_link/01JTG3HK42JCS4BFCMSMAX5NY5.jpg', NULL, '2025-05-05 04:33:19', 'Không gian nhà hàng', 1, '[\"albums_images\\/01JTG3HK474QVVP92JEN0TX0V4.jpg\",\"albums_images\\/01JTG3HK49M722X6W039DGNFD9.jpg\",\"albums_images\\/01JTG3HK4BW090C71KN6YRQJX6.jpg\",\"albums_images\\/01JTG3HK4DAM63C5KTCH2P4B3V.jpg\",\"albums_images\\/01JTG3HK4FTVNAKP8WWW9V9M5Y.jpg\",\"albums_images\\/01JTG3HK4JW5TM5AQ3TG3MKGZ5.jpg\",\"albums_images\\/01JTG3HK4MSM5BPZSDV22ZBX79.jpg\",\"albums_images\\/01JTG3HK4QE2NYGZ6NQ6B4W9PT.jpg\",\"albums_images\\/01JTG3HK4SK3F42CZQF70R6PT8.jpg\",\"albums_images\\/01JTG3HK4VA61CSKZGS6NGWTTR.jpg\"]', 'khong-gian-nha-hang', 0);

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
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab', 'i:4;', 1746843988),
('laravel_cache_356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1746843988;', 1746843988);

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
(14, 'Món khai vị', 'mon-khai-vi', 0, 1, '2025-05-08 19:55:51', '2025-05-08 19:55:51'),
(15, 'Món chính', 'mon-chinh', 0, 1, '2025-05-08 19:55:54', '2025-05-08 19:55:54'),
(16, 'Món hải sản', 'mon-hai-san', 0, 1, '2025-05-08 19:55:57', '2025-05-08 19:55:57'),
(17, 'Món chay', 'mon-chay', 0, 1, '2025-05-08 19:56:00', '2025-05-08 19:56:00'),
(18, 'Món tráng miệng', 'mon-trang-mieng', 0, 1, '2025-05-08 19:56:03', '2025-05-08 19:56:03');

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
(8, 16, 13, 'Gỏi cá hồi mắm Thái', 'goi-ca-hoi-mam-thai', 'foods/thumb/01JTSFY6M6YM3RPNRPFFBBXB6A.jpg', 'foods/01JTSFY6M80XNPHMD4RHW8BP79.jpg', '259000.00', '259000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:03:05', '2025-05-08 20:03:05'),
(9, 16, NULL, 'HẢI SẢN SỐT THÁI', 'hai-san-sot-thai', 'foods/thumb/01JTSFZRVP5M7JD13QQVYPME6Z.jpg', 'foods/01JTSFZRVRX2A9T2QJ3A398GBC.jpg', '280000.00', '280000.00', '<p>Spicy Thai Seafood Mango Salad</p><p><br><br></p>', 0, 1, 0, NULL, '2025-05-08 20:03:56', '2025-05-08 20:03:56'),
(10, 14, 8, 'GỎI ĐU ĐỦ TÔM KHÔ & BA KHÍA', 'goi-du-du-tom-kho-ba-khia', 'foods/thumb/01JTSG0K6QKPY9JG168VF6MK48.jpg', 'foods/01JTSG0K6SRVG2Z14GFJCHP4MR.jpg', '113000.00', '113000.00', '<p>Papaya Salad with Dried Shrimp and salted Sesarmid Crab</p><p><br><br></p>', 0, 1, 0, NULL, '2025-05-08 20:04:23', '2025-05-08 20:04:23'),
(11, 14, 8, 'GỎI TÔM SỐNG VỚI SỐT ỚT CHANH', 'goi-tom-song-voi-sot-ot-chanh', 'foods/thumb/01JTSG1614GFFV2VYHTWYSHRGZ.jpg', 'foods/01JTSG1616N5XDFHG1C96CV789.jpg', '211000.00', '211000.00', '<p>Raw Prawn Salad with Lime &amp; Chilli Sauce</p><p><br><br></p>', 0, 1, 0, NULL, '2025-05-08 20:04:42', '2025-05-08 20:04:42'),
(12, 18, NULL, 'GỎI XOÀI XANH VỚI CÁ TRÊ CHIÊN GIÒN', 'goi-xoai-xanh-voi-ca-tre-chien-gion', 'foods/thumb/01JTSG1STMZ0T60T2GDYDJZTQT.jpg', 'foods/01JTSG1STPQV5HYEWJ1XYSYZSX.jpg', '173000.00', '173000.00', '<p>Green Mango Salad with Deep Fried Catfish</p><p><br><br></p>', 0, 1, 0, NULL, '2025-05-08 20:05:03', '2025-05-08 20:05:03'),
(13, 14, 8, 'GỎI ĐU ĐỦ VỚI TÔM KHÔ TRỨNG MUỐI', 'goi-du-du-voi-tom-kho-trung-muoi', 'foods/thumb/01JTSG2K4QNTRBT0GMEN5RYGSZ.jpg', 'foods/01JTSG2K4TVVVMGD9J0DHRKK33.jpg', '81000.00', '81000.00', '<p>Green Papaya Salad with Dried Shrimp &amp; Salted Egg</p><p><br><br></p>', 0, 1, 0, NULL, '2025-05-08 20:05:28', '2025-05-08 20:05:28'),
(14, 14, 8, 'GỎI MIẾN HẢI SẢN', 'goi-mien-hai-san', 'foods/thumb/01JTSG38PN9Q0Q8R9D8KZKCA4Y.jpg', 'foods/01JTSG38PQJKRZXW4NFTV3Z18A.jpg', '135000.00', '135000.00', '<p>Vermicelli Seafood Salad</p><p><br><br></p>', 0, 1, 0, NULL, '2025-05-08 20:05:51', '2025-05-08 20:05:51'),
(15, 15, NULL, 'CHÂN GÀ RÚT XƯƠNG SỐT THÁI', 'chan-ga-rut-xuong-sot-thai', 'foods/thumb/01JTSG3Z56KT699RF1AR2K5VPR.jpg', 'foods/01JTSG3Z59SV4J3CSK283EK9D3.jpg', '120000.00', '120000.00', '<p>Thai style Boneless chicken feet</p><p><br><br></p>', 0, 1, 0, NULL, '2025-05-08 20:06:14', '2025-05-08 20:06:14'),
(16, 17, NULL, 'Mooping Viên', 'mooping-vien', 'foods/thumb/01JTSG4ZZ6D9FA9Y2BV0HZ1EKA.jpg', 'foods/01JTSG4ZZB2V1WRYZ4QMTZE3V8.jpg', '99000.00', '99000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:06:47', '2025-05-08 20:06:47'),
(17, 17, NULL, 'Mooping miếng', 'mooping-mieng', 'foods/thumb/01JTSG5CDFRJGA0ZRV50GAE5BN.jpg', 'foods/01JTSG5CDHZBVW7VSMVQGMT3Y5.jpg', '99000.00', '99000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:07:00', '2025-05-08 20:07:00'),
(18, 15, NULL, 'HEO HONG Ủ SẢ', 'heo-hong-u-sa', 'foods/thumb/01JTSG5XTED1CX3287B9PYS125.jpg', 'foods/01JTSG5XTHGYDQMVRCJ9SYW2MF.jpg', '139000.00', '139000.00', '<p>Deep fried pork with lemongrass</p><p><br><br></p>', 0, 1, 0, NULL, '2025-05-08 20:07:18', '2025-05-08 20:07:18'),
(19, 18, NULL, 'Thịt viên', 'thit-vien', 'foods/thumb/01JTSG79JVFW11BP01WZTB1TBM.jpg', 'foods/01JTSG79JXC01KZ0NKBDQQ1JAR.jpg', '27000.00', '27000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:08:03', '2025-05-08 20:08:03'),
(20, 18, NULL, 'Chả cá viên (3 viên)', 'cha-ca-vien-3-vien', 'foods/thumb/01JTSG7XKKTBBKRSR3MGP1MF67.jpg', 'foods/01JTSG7XKNE6E61ET3SAF07GPM.jpg', '27000.00', '27000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:08:23', '2025-05-08 20:08:23'),
(22, 18, NULL, 'Chả cá viên (3 viên)', '1', 'foods/thumb/01JTSG7XKKTBBKRSR3MGP1MF67.jpg', 'foods/01JTSG7XKNE6E61ET3SAF07GPM.jpg', '27000.00', '27000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:08:23', '2025-05-08 20:08:23'),
(23, 18, NULL, 'Chả cá viên (3 viên)', '12', 'foods/thumb/01JTSG7XKKTBBKRSR3MGP1MF67.jpg', 'foods/01JTSG7XKNE6E61ET3SAF07GPM.jpg', '27000.00', '27000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:08:23', '2025-05-08 20:08:23'),
(24, 18, NULL, 'Chả cá viên (3 viên)', '123', 'foods/thumb/01JTSG7XKKTBBKRSR3MGP1MF67.jpg', 'foods/01JTSG7XKNE6E61ET3SAF07GPM.jpg', '27000.00', '27000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:08:23', '2025-05-08 20:08:23'),
(25, 18, NULL, 'Chả cá viên (3 viên)', '1234', 'foods/thumb/01JTSG7XKKTBBKRSR3MGP1MF67.jpg', 'foods/01JTSG7XKNE6E61ET3SAF07GPM.jpg', '27000.00', '27000.00', NULL, 0, 1, 0, NULL, '2025-05-08 20:08:23', '2025-05-08 20:08:23');

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
  `link_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `is_bestseller` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `order_number`, `status`, `link_image`, `is_bestseller`, `created_at`, `updated_at`) VALUES
(4, 'Món đặc biệt', 'mon-dac-biet11123123', 0, 1, '[\"menu\\/01JTW065XDFP77HA2KCPAN5X6H.jpg\",\"menu\\/01JTW065XGKM9PWJ88525VAQJ8.jpg\",\"menu\\/01JTW06J1AK79X9YFZGTSR9H7H.jpg\",\"menu\\/01JTW072ERA2E5887HP538BS0S.jpg\"]', 1, '2025-05-09 17:30:32', '2025-05-09 19:26:01');

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
(1, 'Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại ', 'am-thuc-thai-lan-da-dang-hap-dan-va-huyen-thoai', '<h2>Khám phá Đảo Ngọc - Nơi mang đến tinh hoa ẩm thực Việt</h2><p><strong>Đảo Ngọc</strong> tọa lạc tại địa chỉ <strong>89 Nguyễn Thị Búp, Quận 12</strong>, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam <strong>đậm đà hương vị</strong> và <strong>chuẩn mực phục vụ</strong>.</p><p><strong>Tại đây, bạn sẽ được:</strong></p><ul><li><strong>Thưởng thức:</strong><ul><li>Các món ăn <strong>nổi tiếng khắp Sài Gòn</strong> được chế biến từ nguyên liệu tươi ngon,<em> đảm bảo </em>vệ sinh an toàn thực phẩm.</li><li>Hương vị <strong>đậm đà, chuẩn vị Việt</strong>, mang đến cho bạn cảm giác như đang lạc bước vào thế giới ẩm thực truyền thống.</li></ul></li><li><strong>Trải nghiệm:</strong><ul><li><strong>Phong cách phục vụ chuyên nghiệp, chu đáo</strong>, mang đến cho bạn sự hài lòng tuyệt đối.</li><li><strong>Không gian ấm cúng, gần gũi</strong>, tạo cảm giác thoải mái như đang ở nhà.</li></ul></li><li><strong>Thích thú:</strong><ul><li><strong>Đa dạng các món ăn kèm</strong> được phục vụ miễn phí, cho bạn thỏa sức lựa chọn và thưởng thức.</li><li><strong>Mức giá hợp lý</strong>, phù hợp với mọi đối tượng khách hàng.</li></ul></li></ul><p><strong>Đảo Ngọc</strong> là điểm đến lý tưởng cho những ai muốn:</p><ul><li>Tìm kiếm <strong>món ngon Việt Nam</strong> đúng điệu.</li><li>Trải nghiệm <strong>phong cách phục vụ chuyên nghiệp</strong>.</li><li>Thưởng thức <strong>đa dạng các món ăn kèm</strong>.</li><li>Có những giây phút <strong>vui vẻ, thoải mái</strong> bên gia đình và bạn bè.</li></ul><p><strong>Hãy đến với Đảo Ngọc để:</strong></p><ul><li>Khám phá <strong>tinh hoa ẩm thực Việt</strong>.</li><li>Tận hưởng <strong>dịch vụ hoàn hảo</strong>.</li><li>Tạo dựng những kỷ niệm đẹp đẽ.</li></ul><p><strong>Liên hệ đặt bàn:</strong></p><ul><li><strong>Địa chỉ:</strong> 89 Nguyễn Thị Búp, Quận 12, Vietnam</li><li><strong>Điện thoại:</strong> 0918 606 032</li></ul><p><strong>Đảo Ngọc - Nơi mang đến sự hài lòng cho mọi thực khách!</strong></p><p><br></p>', 'Đảo Ngọc tọa lạc tại địa chỉ 89 Nguyễn Thị Búp, Quận 12, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam đậm đà hương vị và chuẩn mực phục vụ.', '01JTCH9KCC0P79YKCCQF7G3MD6.png', 5, '2025-05-03 19:16:39', '2025-05-09 16:16:01'),
(2, 'Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại ', 'am-thuc-1thai-lan-da-dang-hap-dan-va-huyen-thoai', '<h2>Khám phá Đảo Ngọc - Nơi mang đến tinh hoa ẩm thực Việt</h2><p><strong>Đảo Ngọc</strong> tọa lạc tại địa chỉ <strong>89 Nguyễn Thị Búp, Quận 12</strong>, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam <strong>đậm đà hương vị</strong> và <strong>chuẩn mực phục vụ</strong>.</p><p><strong>Tại đây, bạn sẽ được:</strong></p><ul><li><strong>Thưởng thức:</strong><ul><li>Các món ăn <strong>nổi tiếng khắp Sài Gòn</strong> được chế biến từ nguyên liệu tươi ngon,<em> đảm bảo </em>vệ sinh an toàn thực phẩm.</li><li>Hương vị <strong>đậm đà, chuẩn vị Việt</strong>, mang đến cho bạn cảm giác như đang lạc bước vào thế giới ẩm thực truyền thống.</li></ul></li><li><strong>Trải nghiệm:</strong><ul><li><strong>Phong cách phục vụ chuyên nghiệp, chu đáo</strong>, mang đến cho bạn sự hài lòng tuyệt đối.</li><li><strong>Không gian ấm cúng, gần gũi</strong>, tạo cảm giác thoải mái như đang ở nhà.</li></ul></li><li><strong>Thích thú:</strong><ul><li><strong>Đa dạng các món ăn kèm</strong> được phục vụ miễn phí, cho bạn thỏa sức lựa chọn và thưởng thức.</li><li><strong>Mức giá hợp lý</strong>, phù hợp với mọi đối tượng khách hàng.</li></ul></li></ul><p><strong>Đảo Ngọc</strong> là điểm đến lý tưởng cho những ai muốn:</p><ul><li>Tìm kiếm <strong>món ngon Việt Nam</strong> đúng điệu.</li><li>Trải nghiệm <strong>phong cách phục vụ chuyên nghiệp</strong>.</li><li>Thưởng thức <strong>đa dạng các món ăn kèm</strong>.</li><li>Có những giây phút <strong>vui vẻ, thoải mái</strong> bên gia đình và bạn bè.</li></ul><p><strong>Hãy đến với Đảo Ngọc để:</strong></p><ul><li>Khám phá <strong>tinh hoa ẩm thực Việt</strong>.</li><li>Tận hưởng <strong>dịch vụ hoàn hảo</strong>.</li><li>Tạo dựng những kỷ niệm đẹp đẽ.</li></ul><p><strong>Liên hệ đặt bàn:</strong></p><ul><li><strong>Địa chỉ:</strong> 89 Nguyễn Thị Búp, Quận 12, Vietnam</li><li><strong>Điện thoại:</strong> 0918 606 032</li></ul><p><strong>Đảo Ngọc - Nơi mang đến sự hài lòng cho mọi thực khách!</strong></p><p><br></p>', 'Đảo Ngọc tọa lạc tại địa chỉ 89 Nguyễn Thị Búp, Quận 12, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam đậm đà hương vị và chuẩn mực phục vụ.', '01JTCHCP1GEK9Y7YGDS02PSGFE.png', 10, '2025-05-03 19:16:39', '2025-05-09 16:49:34'),
(3, 'Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại ', 'a2m-thuc-thai-lan-da-dang-hap-dan-va-huyen-thoai', '<h2>Khám phá Đảo Ngọc - Nơi mang đến tinh hoa ẩm thực Việt</h2><p><strong>Đảo Ngọc</strong> tọa lạc tại địa chỉ <strong>89 Nguyễn Thị Búp, Quận 12</strong>, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam <strong>đậm đà hương vị</strong> và <strong>chuẩn mực phục vụ</strong>.</p><p><strong>Tại đây, bạn sẽ được:</strong></p><ul><li><strong>Thưởng thức:</strong><ul><li>Các món ăn <strong>nổi tiếng khắp Sài Gòn</strong> được chế biến từ nguyên liệu tươi ngon,<em> đảm bảo </em>vệ sinh an toàn thực phẩm.</li><li>Hương vị <strong>đậm đà, chuẩn vị Việt</strong>, mang đến cho bạn cảm giác như đang lạc bước vào thế giới ẩm thực truyền thống.</li></ul></li><li><strong>Trải nghiệm:</strong><ul><li><strong>Phong cách phục vụ chuyên nghiệp, chu đáo</strong>, mang đến cho bạn sự hài lòng tuyệt đối.</li><li><strong>Không gian ấm cúng, gần gũi</strong>, tạo cảm giác thoải mái như đang ở nhà.</li></ul></li><li><strong>Thích thú:</strong><ul><li><strong>Đa dạng các món ăn kèm</strong> được phục vụ miễn phí, cho bạn thỏa sức lựa chọn và thưởng thức.</li><li><strong>Mức giá hợp lý</strong>, phù hợp với mọi đối tượng khách hàng.</li></ul></li></ul><p><strong>Đảo Ngọc</strong> là điểm đến lý tưởng cho những ai muốn:</p><ul><li>Tìm kiếm <strong>món ngon Việt Nam</strong> đúng điệu.</li><li>Trải nghiệm <strong>phong cách phục vụ chuyên nghiệp</strong>.</li><li>Thưởng thức <strong>đa dạng các món ăn kèm</strong>.</li><li>Có những giây phút <strong>vui vẻ, thoải mái</strong> bên gia đình và bạn bè.</li></ul><p><strong>Hãy đến với Đảo Ngọc để:</strong></p><ul><li>Khám phá <strong>tinh hoa ẩm thực Việt</strong>.</li><li>Tận hưởng <strong>dịch vụ hoàn hảo</strong>.</li><li>Tạo dựng những kỷ niệm đẹp đẽ.</li></ul><p><strong>Liên hệ đặt bàn:</strong></p><ul><li><strong>Địa chỉ:</strong> 89 Nguyễn Thị Búp, Quận 12, Vietnam</li><li><strong>Điện thoại:</strong> 0918 606 032</li></ul><p><strong>Đảo Ngọc - Nơi mang đến sự hài lòng cho mọi thực khách!</strong></p><p><br></p>', 'Đảo Ngọc tọa lạc tại địa chỉ 89 Nguyễn Thị Búp, Quận 12, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam đậm đà hương vị và chuẩn mực phục vụ.', '01JTCHDVVVDM2DYTSW58J44XEW.png', 3, '2025-05-03 19:16:39', '2025-05-09 16:18:12'),
(4, 'Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại ', '1', '<h2>Khám phá Đảo Ngọc - Nơi mang đến tinh hoa ẩm thực Việt</h2><p><strong>Đảo Ngọc</strong> tọa lạc tại địa chỉ <strong>89 Nguyễn Thị Búp, Quận 12</strong>, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam <strong>đậm đà hương vị</strong> và <strong>chuẩn mực phục vụ</strong>.</p><p><strong>Tại đây, bạn sẽ được:</strong></p><ul><li><strong>Thưởng thức:</strong><ul><li>Các món ăn <strong>nổi tiếng khắp Sài Gòn</strong> được chế biến từ nguyên liệu tươi ngon,<em> đảm bảo </em>vệ sinh an toàn thực phẩm.</li><li>Hương vị <strong>đậm đà, chuẩn vị Việt</strong>, mang đến cho bạn cảm giác như đang lạc bước vào thế giới ẩm thực truyền thống.</li></ul></li><li><strong>Trải nghiệm:</strong><ul><li><strong>Phong cách phục vụ chuyên nghiệp, chu đáo</strong>, mang đến cho bạn sự hài lòng tuyệt đối.</li><li><strong>Không gian ấm cúng, gần gũi</strong>, tạo cảm giác thoải mái như đang ở nhà.</li></ul></li><li><strong>Thích thú:</strong><ul><li><strong>Đa dạng các món ăn kèm</strong> được phục vụ miễn phí, cho bạn thỏa sức lựa chọn và thưởng thức.</li><li><strong>Mức giá hợp lý</strong>, phù hợp với mọi đối tượng khách hàng.</li></ul></li></ul><p><strong>Đảo Ngọc</strong> là điểm đến lý tưởng cho những ai muốn:</p><ul><li>Tìm kiếm <strong>món ngon Việt Nam</strong> đúng điệu.</li><li>Trải nghiệm <strong>phong cách phục vụ chuyên nghiệp</strong>.</li><li>Thưởng thức <strong>đa dạng các món ăn kèm</strong>.</li><li>Có những giây phút <strong>vui vẻ, thoải mái</strong> bên gia đình và bạn bè.</li></ul><p><strong>Hãy đến với Đảo Ngọc để:</strong></p><ul><li>Khám phá <strong>tinh hoa ẩm thực Việt</strong>.</li><li>Tận hưởng <strong>dịch vụ hoàn hảo</strong>.</li><li>Tạo dựng những kỷ niệm đẹp đẽ.</li></ul><p><strong>Liên hệ đặt bàn:</strong></p><ul><li><strong>Địa chỉ:</strong> 89 Nguyễn Thị Búp, Quận 12, Vietnam</li><li><strong>Điện thoại:</strong> 0918 606 032</li></ul><p><strong>Đảo Ngọc - Nơi mang đến sự hài lòng cho mọi thực khách!</strong></p><p><br></p>', 'Đảo Ngọc tọa lạc tại địa chỉ 89 Nguyễn Thị Búp, Quận 12, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam đậm đà hương vị và chuẩn mực phục vụ.', '01JTCH9KCC0P79YKCCQF7G3MD6.png', 5, '2025-05-03 19:16:39', '2025-05-09 16:16:01'),
(5, 'Ẩm thực Thái Lan đa dạng, hấp dẫn và huyền thoại ', '1213', '<h2>Khám phá Đảo Ngọc - Nơi mang đến tinh hoa ẩm thực Việt</h2><p><strong>Đảo Ngọc</strong> tọa lạc tại địa chỉ <strong>89 Nguyễn Thị Búp, Quận 12</strong>, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam <strong>đậm đà hương vị</strong> và <strong>chuẩn mực phục vụ</strong>.</p><p><strong>Tại đây, bạn sẽ được:</strong></p><ul><li><strong>Thưởng thức:</strong><ul><li>Các món ăn <strong>nổi tiếng khắp Sài Gòn</strong> được chế biến từ nguyên liệu tươi ngon,<em> đảm bảo </em>vệ sinh an toàn thực phẩm.</li><li>Hương vị <strong>đậm đà, chuẩn vị Việt</strong>, mang đến cho bạn cảm giác như đang lạc bước vào thế giới ẩm thực truyền thống.</li></ul></li><li><strong>Trải nghiệm:</strong><ul><li><strong>Phong cách phục vụ chuyên nghiệp, chu đáo</strong>, mang đến cho bạn sự hài lòng tuyệt đối.</li><li><strong>Không gian ấm cúng, gần gũi</strong>, tạo cảm giác thoải mái như đang ở nhà.</li></ul></li><li><strong>Thích thú:</strong><ul><li><strong>Đa dạng các món ăn kèm</strong> được phục vụ miễn phí, cho bạn thỏa sức lựa chọn và thưởng thức.</li><li><strong>Mức giá hợp lý</strong>, phù hợp với mọi đối tượng khách hàng.</li></ul></li></ul><p><strong>Đảo Ngọc</strong> là điểm đến lý tưởng cho những ai muốn:</p><ul><li>Tìm kiếm <strong>món ngon Việt Nam</strong> đúng điệu.</li><li>Trải nghiệm <strong>phong cách phục vụ chuyên nghiệp</strong>.</li><li>Thưởng thức <strong>đa dạng các món ăn kèm</strong>.</li><li>Có những giây phút <strong>vui vẻ, thoải mái</strong> bên gia đình và bạn bè.</li></ul><p><strong>Hãy đến với Đảo Ngọc để:</strong></p><ul><li>Khám phá <strong>tinh hoa ẩm thực Việt</strong>.</li><li>Tận hưởng <strong>dịch vụ hoàn hảo</strong>.</li><li>Tạo dựng những kỷ niệm đẹp đẽ.</li></ul><p><strong>Liên hệ đặt bàn:</strong></p><ul><li><strong>Địa chỉ:</strong> 89 Nguyễn Thị Búp, Quận 12, Vietnam</li><li><strong>Điện thoại:</strong> 0918 606 032</li></ul><p><strong>Đảo Ngọc - Nơi mang đến sự hài lòng cho mọi thực khách!</strong></p><p><br></p>', 'Đảo Ngọc tọa lạc tại địa chỉ 89 Nguyễn Thị Búp, Quận 12, hứa hẹn mang đến cho bạn trải nghiệm ẩm thực Việt Nam đậm đà hương vị và chuẩn mực phục vụ.', '01JTCH9KCC0P79YKCCQF7G3MD6.png', 5, '2025-05-03 19:16:39', '2025-05-09 16:16:01');

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
(45, '127.0.0.1', '2025-05-09 19:52:04', '2025-05-09 19:17:17', '2025-05-09 19:52:04');

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
('fx56eRGcFuKy7ANIIa7HAtjE3zVuDm3hkw9plqXX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36 OPR/118.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicENXMTJQbk10WmxqeHEyUWkyS0hWTVdkRnBNWHd2ZGE1YW5iZ05ibSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1746838125),
('VmXVHEaYJ3tI3S00wrduyHRGfdT8LY1FSDXcyTzP', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36 OPR/118.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiSThBR3c2Z1lFRWxoQ0xXeGFISGYwMWo4eThiQ0hjRHI2UldscFdrNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkUDY5Y1NKTThaVkVZSERIUGxRcXEyLjVxZDR2NTdYWHRlTG1Ja3BUWjB1UTNtTGhQLmozc3kiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1746845524),
('vtFD5vpPpxu3bTnBAkTsDp3t1PcoNW6vfk5GjHkp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36 OPR/118.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmNvNDh4UVlDQktPZWs1UWNZMW55TnhDUVlUVlh3WnlUYjgyZXJvMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1746837556);

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
  `updated_at` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_1` text COLLATE utf8mb4_unicode_ci,
  `album_2` text COLLATE utf8mb4_unicode_ci,
  `album_3` text COLLATE utf8mb4_unicode_ci,
  `album_4` text COLLATE utf8mb4_unicode_ci,
  `album_5` text COLLATE utf8mb4_unicode_ci,
  `best_sellers` text COLLATE utf8mb4_unicode_ci,
  `banner_seller` text COLLATE utf8mb4_unicode_ci,
  `link_seller` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `home_title`, `home_keyword`, `home_description`, `home_banner`, `web_logo`, `web_favicon`, `web_name`, `web_keyword`, `web_address`, `web_phone`, `web_email`, `web_instagram`, `web_facebook`, `web_youtube`, `web_tiktok`, `web_zalo`, `web_map_link`, `web_map_iframe`, `script_footer`, `script_header`, `about_title`, `about_content`, `about_image`, `created_at`, `updated_at`, `album_1`, `album_2`, `album_3`, `album_4`, `album_5`, `best_sellers`, `banner_seller`, `link_seller`) VALUES
(1, 'KHAY PHA THAI', 'ẩm thực Thái Lan, nhà hàng Thái Lan, Khay-Pha Thai, Koh Samui, món Thái, đồ Thái tại Việt Nam, bếp Thái truyền thống, văn hóa ẩm thực Thái, món ăn Thái Lan, nhà hàng Thái gần đây', 'Khám phá văn hóa ẩm thực Thái Lan đặc sắc tại Khay-Pha Thai – kế thừa tinh hoa từ Koh Samui với hơn 100 món ăn và tráng miệng truyền thống Thái, phục vụ người Việt mỗi ngày.\n', 'settings/01JTG93KDNH6C083BEJR3QTM52.png', 'settings/01JTJVFBT41JJ8DDNT7X3RFB0B.png', 'settings/01JTG94FM2Z1H0BC5Y7X8HRP5H.png', 'KHAY PHA THAI', 'KHAY PHA THAI', '43 Lê Phụng Hiểu , phường 8 , Bà Rịa , Vũng Tàu ', '0342097272', 'thaikhaypha@gmail.com', 'Instagram ', 'https://www.facebook.com/nhahangthaivungtau.monanthaitaivungtau', 'YouTube ', 'TikTok ', 'Zalo ', 'https://maps.app.goo.gl/qEePDcAArrzYxKA67', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.801400305833!2d107.0917817!3d10.3577589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31756f007d62c0b1%3A0x8672f7d4a7af87e4!2zS0hBWeKAolBIQSBUaMOhaQ!5e0!3m2!1svi!2s!4v1746450701194!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, NULL, 'ẨM THỰC KHAY•PHA Thái ', '<p><strong>Được mệnh danh là “xứ sở chùa Vàng”, Thái Lan không chỉ nổi tiếng với những ngôi chùa linh thiêng mà còn hấp dẫn bởi nền văn hóa ẩm thực đặc sắc.</strong> Khay-Pha Thai ra đời như một chiếc cầu nối mang tinh hoa ẩm thực Thái đến gần hơn với thực khách Việt, đặc biệt là tại thành phố biển Vũng Tàu.</p><p>Chúng tôi kế thừa và hoàn thiện từ thương hiệu nổi tiếng <strong>Koh Samui</strong>, mang đến trải nghiệm ẩm thực Thái Lan đích thực với mô hình bếp Thái thân thiện, gần gũi. Tại Khay-Pha Thai, bạn sẽ được thưởng thức <strong>hơn 100 món ăn và tráng miệng truyền thống</strong> được chế biến chuẩn vị Thái – từ Tom Yum cay nồng, Pad Thai đậm đà cho đến xôi xoài ngọt thanh, thơm dẻo.</p><p>Với không gian ấm cúng, phong cách phục vụ chu đáo và nguyên liệu chất lượng cao, Khay-Pha Thai mong muốn trở thành điểm đến quen thuộc của những ai yêu thích hương vị Thái Lan tại Vũng Tàu.</p>', 'settings/01JTG9AQRCK5SM5S74G0TPPKSN.png', '', '2025-05-09 13:36:45', 'settings/01JTNERFJVEJ5Y0JEWTA1ZVMBK.png', 'settings/01JTNES0YG160Z42ASQZGQ9YS6.png', 'settings/01JTNETDMJZXWQG8Z14Z2GWJH1.png', 'settings/01JTNETDMMSQBD6HN14XSV8N3K.png', 'settings/01JTNETDMP9A8JS1ARPDFGM63B.png', '[{\"image\":\"best_sellers\\/01JTTM36CAVDQPFDYGVYR6KHQM.png\",\"name\":\"Menu Buffet L\\u1ea9u Th\\u00e1i 229k\",\"price\":\"1229k\",\"link\":\"\\/mon-an\\/goi-ca-hoi-mam-thai\"},{\"image\":\"best_sellers\\/01JTTM36CF248PR1FV0R4ZZ5GY.png\",\"name\":\"Menu Buffet L\\u1ea9u Th\\u00e1i 229k\",\"price\":\"229k\",\"link\":\"\\/mon-an\\/goi-ca-hoi-mam-thai\"}]', 'settings/01JTTKYNY69DWWMM2R6Y1PMR7T.png', '/mon-an/goi-ca-hoi-mam-thai');

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
(8, 14, 'Gỏi ', 'goi', 0, 1, '2025-05-08 19:56:24', '2025-05-08 19:56:24'),
(9, 14, 'Súp ', 'sup', 0, 1, '2025-05-08 19:56:31', '2025-05-08 19:56:31'),
(10, 15, 'Cơm ', 'com', 0, 1, '2025-05-08 19:56:37', '2025-05-08 19:56:37'),
(11, 15, 'Mì ', 'mi', 0, 1, '2025-05-08 19:56:43', '2025-05-08 19:56:43'),
(12, 16, 'Tôm ', 'tom', 0, 1, '2025-05-08 19:56:52', '2025-05-08 19:56:52'),
(13, 16, 'Cá ', 'ca', 0, 1, '2025-05-08 19:56:57', '2025-05-08 19:56:57'),
(14, 17, 'Đậu hủ', 'dau-hu', 0, 1, '2025-05-08 19:57:05', '2025-05-08 19:57:05'),
(15, 17, 'Cà ri', 'ca-ri', 0, 1, '2025-05-08 19:57:11', '2025-05-08 19:57:11'),
(16, 18, 'Kem ', 'kem', 0, 1, '2025-05-08 19:57:24', '2025-05-08 19:57:24');

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
(4, '2025-05-06', 493, '2025-05-06 05:59:03', '2025-05-06 06:53:23'),
(5, '2025-05-07', 1167, '2025-05-06 19:16:37', '2025-05-07 16:57:06'),
(6, '2025-05-08', 74, '2025-05-07 18:24:15', '2025-05-08 04:22:03'),
(7, '2025-05-09', 1246, '2025-05-08 19:28:04', '2025-05-09 16:59:34'),
(8, '2025-05-10', 486, '2025-05-09 17:09:17', '2025-05-09 19:52:04');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `online_users`
--
ALTER TABLE `online_users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
