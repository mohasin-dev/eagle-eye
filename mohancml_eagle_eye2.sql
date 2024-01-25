-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2019 at 11:36 AM
-- Server version: 10.1.37-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mohancml_eagle_eye2`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bg_image.jpg',
  `fg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_description`, `description`, `bg_image`, `fg_image`, `created_at`, `updated_at`) VALUES
(1, 'About Eagle Eye Apparelss', '<p>Short DescAbout Eagle Eye Apparelsriptionss</p>', '<p>DescriptioAbout Eagle Eye Apparelsn</p>', '1550387397.jpg', '1550387398.jpg', '2019-02-17 00:24:24', '2019-02-17 01:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple', 'aaaa', '2019-01-12 16:32:45', '2019-01-12 16:32:45'),
(2, 'Mohasin Hossain', 'mohasin-hossain', '1548001096.JPG', '2019-01-20 10:18:16', '2019-01-20 10:18:16'),
(3, 'PHPpf', 'phppf', '1548001290.jpg', '2019-01-20 10:19:51', '2019-01-20 10:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'electronics', '2019-01-12 16:33:40', '2019-01-12 16:33:40'),
(2, 'Clothing', 'clothing', '2019-01-13 05:17:26', '2019-01-13 05:17:26'),
(3, 'Shoes', 'shoes', '2019-01-13 05:17:26', '2019-01-13 05:17:26'),
(4, 'Mohasin Hossain', 'mohasin-hossain', '2019-01-20 05:16:31', '2019-01-20 05:16:31'),
(5, 'Fab fa fa-facebook-f', 'fab-fa-fa-facebook-f', '2019-02-16 20:59:58', '2019-02-16 20:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'dxampptmpphpdcd3tmp-2019-02-17-5c694797ba0ac.png', '2019-02-17 05:34:59', '2019-02-17 05:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'White', 'white', '2019-01-12 16:34:40', '2019-01-12 16:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-01-13 04:08:05', '2019-01-13 04:08:05'),
(2, 1, 0, '2019-01-13 04:08:05', '2019-01-13 04:08:05'),
(3, 22, 1, '2019-01-21 23:40:36', '2019-01-21 23:40:36'),
(4, 23, 1, '2019-01-21 23:41:17', '2019-01-21 23:41:17'),
(5, 24, 1, '2019-01-21 23:44:01', '2019-01-21 23:44:01'),
(6, 25, 1, '2019-01-22 00:08:28', '2019-01-22 00:08:28'),
(7, 26, 1, '2019-01-22 00:13:56', '2019-01-22 00:13:56'),
(8, 27, 1, '2019-01-22 00:17:35', '2019-01-22 00:17:35'),
(9, 28, 1, '2019-01-22 00:26:19', '2019-01-22 00:26:19'),
(10, 29, 1, '2019-01-22 00:42:38', '2019-01-22 00:42:38'),
(11, 30, 1, '2019-01-22 00:57:35', '2019-01-22 00:57:35'),
(12, 31, 1, '2019-01-22 01:05:50', '2019-01-22 01:05:50'),
(13, 31, 1, '2019-01-22 01:23:04', '2019-01-22 01:23:04'),
(14, 32, 1, '2019-02-16 12:54:50', '2019-02-16 12:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `font_awesomes`
--

CREATE TABLE `font_awesomes` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `font_awesomes`
--

INSERT INTO `font_awesomes` (`id`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook-f', '2019-02-16 21:02:37', '2019-02-16 21:02:37'),
(2, 'fab fa-linkedin-in', '2019-02-16 21:02:46', '2019-02-16 21:02:46'),
(4, 'fab fa-twitter', '2019-02-16 21:02:59', '2019-02-16 21:02:59'),
(5, 'fab fa-google', '2019-02-16 21:03:09', '2019-02-16 21:03:09'),
(6, 'fab fa-skype', '2019-02-16 21:03:17', '2019-02-16 21:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_12_092106_create_categories_table', 2),
(5, '2019_01_12_094423_create_brands_table', 4),
(6, '2019_01_12_094932_create_colors_table', 5),
(7, '2019_01_12_095013_create_tags_table', 5),
(8, '2019_01_12_095110_create_sizes_table', 5),
(9, '2019_01_12_095150_create_units_table', 5),
(10, '2019_01_12_100255_create_products_table', 6),
(11, '2019_01_12_114041_create_product_tag_table', 7),
(12, '2019_01_12_120133_create_product_size_table', 7),
(13, '2019_01_12_120212_create_color_product_table', 7),
(14, '2019_01_12_121035_create_productimages_table', 8),
(16, '2019_01_12_093618_create_subcategories_table', 9),
(18, '2019_02_17_023550_create_font_awesomes_table', 11),
(23, '2019_02_17_052912_create_abouts_table', 13),
(24, '2019_02_17_073427_create_testimonials_table', 14),
(25, '2019_02_17_080342_create_clients_table', 15),
(27, '2019_02_17_120422_create_why_uses_table', 16),
(28, '2019_02_17_124926_create_whies_table', 17),
(31, '2019_02_18_074008_create_sliders_table', 18),
(32, '2019_02_18_125427_create_subscribers_table', 19),
(33, '2019_02_18_125733_create_contacts_table', 19),
(34, '2019_02_17_022019_create_services_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productimages`
--

INSERT INTO `productimages` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'technical-database-engineer-2019-02-16-5c685c79ed0a6.png', 32, '2019-02-16 12:54:50', '2019-02-16 12:54:50'),
(2, 'technical-database-engineer-2019-02-16-5c685c7a6d48d.jpg', 32, '2019-02-16 12:54:50', '2019-02-16 12:54:50'),
(3, 'technical-database-engineer-2019-02-16-5c685c7a84697.jpg', 32, '2019-02-16 12:54:50', '2019-02-16 12:54:50'),
(4, 'technical-database-engineer-2019-02-16-5c685c7ac4ba4.jpg', 32, '2019-02-16 12:54:50', '2019-02-16 12:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_price` double(9,2) NOT NULL,
  `sale_price` double(9,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `is_discount` tinyint(1) NOT NULL DEFAULT '0',
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `front_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `added_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `short_description`, `description`, `purchase_price`, `sale_price`, `stock`, `is_featured`, `is_discount`, `discount_type`, `front_image`, `subcategory_id`, `brand_id`, `unit_id`, `added_by`, `created_at`, `updated_at`) VALUES
(11, 'Officiis illo nisi qui sed mollitia.', 'quo-quidem-ipsum-aut-quidem-voluptatem-porro-velit-totam', 'Ipsam et qui accusantium iste molestiae.', 'Doloribus voluptatem saepe doloremque magni saepe. Velit est et voluptate minima animi. Fuga est consequuntur excepturi temporibus.', 460066.00, 369875.00, 10, 1, 0, '0', 'e-commerce-2019-01-07-5c32ea7a3ffda.jpg', 3, 1, 1, 1, '2019-01-12 22:05:55', '2019-01-12 22:05:55'),
(16, 'Facere nobis voluptatum quo aut nobis qui voluptatem.', 'inventore-possimus-et-consequatur-alias-praesentium-laudantium', 'Molestiae et ipsa sint eum rem totam dicta eos repellat.', 'Et ut unde enim et nulla voluptates. Praesentium distinctio magnam ipsum molestiae. Omnis culpa velit nihil nesciunt ipsum veniam.', 373999.00, 204656.00, 10, 1, 0, '0', 'e-commerce-2019-01-07-5c32ea7a3ffda.jpg', 2, 1, 1, 1, '2019-01-12 22:05:55', '2019-01-12 22:05:55'),
(20, 'Est sed inventore ratione temporibus vel.', 'voluptatibus-et-modi-quidem-velit', 'Asperiores minus repellat est natus.', 'Voluptas quo sint a velit dicta cupiditate aut laborum. Ex maiores minima voluptatem quas commodi eaque fugiat labore. Laboriosam deleniti ut accusamus eveniet enim. Dicta id totam debitis natus vel.', 91377.00, 136770.00, 10, 1, 0, '0', 'e-commerce-2019-01-07-5c32ea7a3ffda.jpg', 3, 1, 1, 1, '2019-01-12 22:05:55', '2019-01-12 22:05:55'),
(21, 'Thai Soup', 'thai-soup', 'The Best Design With Advanced Technology.', '<h2>description</h2>', 455.00, 4546.00, 5435, 0, 0, '1', '1548135612.jpg', 2, 1, 1, 1, '2019-01-21 23:40:12', '2019-01-21 23:40:12'),
(22, 'Thai Soup', 'thai-soup', 'The Best Design With Advanced Technology.', '<h2>description</h2>', 455.00, 4546.00, 5435, 0, 0, '1', '1548135636.jpg', 2, 1, 1, 1, '2019-01-21 23:40:36', '2019-01-21 23:40:36'),
(23, 'Thai Soup', 'thai-soup', 'The Best Design With Advanced Technology.', '<h2>description</h2>', 455.00, 4546.00, 5435, 0, 0, '1', '1548135676.jpg', 2, 1, 1, 1, '2019-01-21 23:41:17', '2019-01-21 23:41:17'),
(24, 'Thai Soup', 'thai-soup', 'Advanced Development Ensure.', '<p>fdgdg</p>', 455.00, 546.00, 5435, 0, 0, '1', '1548135841.jpg', 2, 2, 1, 1, '2019-01-21 23:44:01', '2019-01-21 23:44:01'),
(25, 'Technical Database Engineer', 'technical-database-engineer', 'Premium wordpress theme customization based on client requirements.', '<p>fdgdfgfdg</p>', 546.00, 546546.00, 5435, 0, 0, '1', '1548137307.jpg', 2, 1, 1, 1, '2019-01-22 00:08:28', '2019-01-22 00:08:28'),
(26, 'E-commerce', 'e-commerce', 'The Best Design With Advanced Technology.', '<p>fsdfsdfdf</p>', 546.00, 4546.00, 5435, 0, 0, '1', '1548137635.jpg', 3, 1, 1, 1, '2019-01-22 00:13:55', '2019-01-22 00:13:55'),
(27, 'Thai Soup', 'thai-soup', 'The Best Design With Advanced Technology.', '<p>dsfsdf</p>', 456.00, 56.00, 45, 0, 0, '1', '1548137854.jpg', 3, 1, 1, 1, '2019-01-22 00:17:34', '2019-01-22 00:17:34'),
(28, 'Technical Database Engineer', 'technical-database-engineer', 'The Best Design With Advanced Technology.', '<p>dsfsdfsdfdf</p>', 454.00, 455.00, 5435, 0, 0, '1', 'technical-database-engineer-2019-01-22-5c46b78a7c253.jpg', 3, 1, 1, 1, '2019-01-22 00:26:18', '2019-01-22 00:26:18'),
(29, 'Technical Database Engineer', 'technical-database-engineer', 'The Best Design With Advanced Technology.', '<p>dsaaaaaaaaaaaaaaaaaa</p>', 56.00, 564.00, 5435, 0, 0, '1', 'technical-database-engineer-2019-01-22-5c46bb5de8de5.jpg', 3, 3, 1, 1, '2019-01-22 00:42:38', '2019-01-22 00:42:38'),
(30, 'sdfds', 'sdfds', 'dsfdsf', '<p>sdfdsfsdf</p>', 345.00, 453.00, 345, 0, 0, '1', 'sdfds-2019-01-22-5c46bedea830b.jpg', 2, 2, 1, 1, '2019-01-22 00:57:34', '2019-01-22 00:57:34'),
(31, 'sdfdsg', 'sdfdsg', 'gdfgfd', '<p>sdfsdfsdf</p>', 544.00, 456.00, 3435, 0, 0, '1', 'sdfdsg-2019-01-22-5c46c4d7093b1.jpg', 2, 1, 1, 1, '2019-01-22 01:05:49', '2019-01-22 01:23:03'),
(32, 'Technical Database Engineer', 'technical-database-engineer', 'Technical Database Engineer', '<p>This is description.</p>', 51515.00, 56765.00, 345, 0, 0, '1', 'technical-database-engineer-2019-02-16-5c685c78db64f.jpg', 2, 1, 1, 1, '2019-02-16 12:54:49', '2019-02-16 12:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-01-13 04:09:37', '2019-01-13 04:09:37'),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 22, 1, '2019-01-21 23:40:36', '2019-01-21 23:40:36'),
(5, 22, 2, '2019-01-21 23:40:36', '2019-01-21 23:40:36'),
(6, 22, 3, '2019-01-21 23:40:36', '2019-01-21 23:40:36'),
(7, 23, 1, '2019-01-21 23:41:17', '2019-01-21 23:41:17'),
(8, 23, 2, '2019-01-21 23:41:17', '2019-01-21 23:41:17'),
(9, 23, 3, '2019-01-21 23:41:17', '2019-01-21 23:41:17'),
(10, 24, 1, '2019-01-21 23:44:01', '2019-01-21 23:44:01'),
(11, 24, 2, '2019-01-21 23:44:01', '2019-01-21 23:44:01'),
(12, 24, 3, '2019-01-21 23:44:01', '2019-01-21 23:44:01'),
(13, 25, 1, '2019-01-22 00:08:28', '2019-01-22 00:08:28'),
(14, 25, 2, '2019-01-22 00:08:28', '2019-01-22 00:08:28'),
(15, 26, 1, '2019-01-22 00:13:56', '2019-01-22 00:13:56'),
(16, 26, 2, '2019-01-22 00:13:56', '2019-01-22 00:13:56'),
(17, 27, 2, '2019-01-22 00:17:35', '2019-01-22 00:17:35'),
(18, 28, 1, '2019-01-22 00:26:19', '2019-01-22 00:26:19'),
(19, 29, 1, '2019-01-22 00:42:38', '2019-01-22 00:42:38'),
(20, 29, 2, '2019-01-22 00:42:38', '2019-01-22 00:42:38'),
(21, 30, 1, '2019-01-22 00:57:35', '2019-01-22 00:57:35'),
(22, 30, 2, '2019-01-22 00:57:35', '2019-01-22 00:57:35'),
(23, 31, 1, '2019-01-22 01:05:50', '2019-01-22 01:05:50'),
(24, 31, 2, '2019-01-22 01:05:50', '2019-01-22 01:05:50'),
(25, 31, 1, '2019-01-22 01:23:04', '2019-01-22 01:23:04'),
(26, 31, 2, '2019-01-22 01:23:04', '2019-01-22 01:23:04'),
(27, 32, 1, '2019-02-16 12:54:51', '2019-02-16 12:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-01-13 04:09:19', '2019-01-13 04:09:19'),
(3, 22, 1, '2019-01-21 23:40:36', '2019-01-21 23:40:36'),
(4, 22, 2, '2019-01-21 23:40:36', '2019-01-21 23:40:36'),
(5, 22, 3, '2019-01-21 23:40:36', '2019-01-21 23:40:36'),
(6, 23, 1, '2019-01-21 23:41:17', '2019-01-21 23:41:17'),
(7, 23, 2, '2019-01-21 23:41:17', '2019-01-21 23:41:17'),
(8, 23, 3, '2019-01-21 23:41:17', '2019-01-21 23:41:17'),
(9, 24, 1, '2019-01-21 23:44:01', '2019-01-21 23:44:01'),
(10, 24, 2, '2019-01-21 23:44:01', '2019-01-21 23:44:01'),
(11, 24, 3, '2019-01-21 23:44:01', '2019-01-21 23:44:01'),
(12, 25, 1, '2019-01-22 00:08:28', '2019-01-22 00:08:28'),
(13, 25, 2, '2019-01-22 00:08:28', '2019-01-22 00:08:28'),
(14, 26, 2, '2019-01-22 00:13:56', '2019-01-22 00:13:56'),
(15, 26, 3, '2019-01-22 00:13:56', '2019-01-22 00:13:56'),
(16, 27, 2, '2019-01-22 00:17:35', '2019-01-22 00:17:35'),
(17, 28, 1, '2019-01-22 00:26:19', '2019-01-22 00:26:19'),
(18, 29, 1, '2019-01-22 00:42:38', '2019-01-22 00:42:38'),
(19, 29, 2, '2019-01-22 00:42:38', '2019-01-22 00:42:38'),
(20, 30, 1, '2019-01-22 00:57:35', '2019-01-22 00:57:35'),
(21, 30, 2, '2019-01-22 00:57:35', '2019-01-22 00:57:35'),
(22, 31, 1, '2019-01-22 01:05:49', '2019-01-22 01:05:49'),
(23, 31, 2, '2019-01-22 01:05:49', '2019-01-22 01:05:49'),
(24, 31, 1, '2019-01-22 01:23:03', '2019-01-22 01:23:03'),
(25, 31, 2, '2019-01-22 01:23:03', '2019-01-22 01:23:03'),
(26, 32, 2, '2019-02-16 12:54:50', '2019-02-16 12:54:50'),
(27, 32, 3, '2019-02-16 12:54:50', '2019-02-16 12:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Technical Database Engineer', 'Good Job done by MH. I\'m really happy to be a client of you.', '2019-02-20 12:50:08', '2019-02-20 12:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'M', 'm', '2019-01-12 16:35:24', '2019-01-12 16:35:24'),
(2, 'foot', 'foot', NULL, NULL),
(3, 'inchi', 'inchi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `btn_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `btn_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'E-commerce Website Developed By Laravel', '<p>E-commerce Website Developed By Laravel&nbsp;E-commerce Website Developed By Laravel&nbsp;E-commerce Website Developed By Laravel</p>', '1550494361.jpg', NULL, 0, '2019-02-18 06:41:18', '2019-02-18 06:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Shirt', 'shirt', 2, '2019-01-13 05:20:04', '2019-01-13 05:20:04'),
(3, 'Snickers', 'snickers', 3, '2019-01-13 05:20:04', '2019-01-13 05:20:04'),
(4, 'HTMLhg', 'htmlhg', 2, '2019-01-20 06:05:55', '2019-01-20 06:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'mobile', '2019-01-12 16:52:30', '2019-01-12 16:52:30'),
(2, 'aaaaaaaaaa', 'aaaaaaaa', NULL, NULL),
(3, 'aaaaaaaaaaa', 'aaaaaaaaa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opinion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `organization`, `opinion`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Mohasin Hossain', 'Web Developer', 'Intezie Limited', '<p>Very Good</p>', 'mohasin-hossain-2019-02-20-5c6da74fd9a46.jpg', '2019-02-20 13:15:28', '2019-02-20 13:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'cm', '2019-01-12 16:52:57', '2019-01-12 16:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mohasin Hossain', 'mohasin', 'admin@gmail.com', NULL, '$2y$10$6PJaSbol44QcY0zsWxEG..E3fwoDAo0oivLkFnYGFvuGHjjURZzXW', 'default.png', 'tTHS31COWEItvskSlUV4wl0AECoXzlEHLcxai7WEIDxYkT3HgZc8cRfYqy2P', '2019-01-12 16:56:18', '2019-01-12 16:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `whies`
--

CREATE TABLE `whies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whies`
--

INSERT INTO `whies` (`id`, `title`, `description`, `icon_id`, `created_at`, `updated_at`) VALUES
(1, 'Titlee', 'description', 4, '2019-02-17 09:50:22', '2019-02-17 10:40:49'),
(2, 'aaaaaaaaa', 'This is about masters.', 4, '2019-02-17 09:51:05', '2019-02-17 09:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `why_uses`
--

CREATE TABLE `why_uses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_id` int(10) UNSIGNED NOT NULL,
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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `font_awesomes`
--
ALTER TABLE `font_awesomes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productimages_product_id_foreign` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_unit_id_foreign` (`unit_id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_title_unique` (`title`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_name_unique` (`name`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whies`
--
ALTER TABLE `whies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `whies_title_unique` (`title`),
  ADD KEY `whies_icon_id_foreign` (`icon_id`);

--
-- Indexes for table `why_uses`
--
ALTER TABLE `why_uses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `why_uses_title_unique` (`title`),
  ADD KEY `why_uses_icon_id_foreign` (`icon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `color_product`
--
ALTER TABLE `color_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `font_awesomes`
--
ALTER TABLE `font_awesomes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whies`
--
ALTER TABLE `whies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_uses`
--
ALTER TABLE `why_uses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productimages`
--
ALTER TABLE `productimages`
  ADD CONSTRAINT `productimages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `whies`
--
ALTER TABLE `whies`
  ADD CONSTRAINT `whies_icon_id_foreign` FOREIGN KEY (`icon_id`) REFERENCES `font_awesomes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `why_uses`
--
ALTER TABLE `why_uses`
  ADD CONSTRAINT `why_uses_icon_id_foreign` FOREIGN KEY (`icon_id`) REFERENCES `font_awesomes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
