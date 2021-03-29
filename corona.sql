-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2021 at 04:31 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dream. Create. Deliver', 'm54q076abr1yBJl7G7ob8mMEXrdKfRAdEhC0t38W.jpeg', 'Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. \r\nDelightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate', NULL, '2020-04-02 10:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$YfRTuUHvKSfFyxtjO4CKMuSitF5mdVt7Fm//K1zBS48b/Uq4065q.', NULL, '2020-04-04 14:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Time to enhance your web presence!', 'rLzviU4hc9wVRhW2GwZFnLsFyNE9LNIKXtzIONoq.jpeg', NULL, '2020-04-08 12:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Blogs', 'rd60B5bOBq8earzMHjXDO00yZ6l8e7ZARJcw0U4u.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro laudantium sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', NULL, '2020-04-03 12:09:16'),
(2, 'Darulaman Palace', 'CKOQ0ECKxSzFCfjZyUmalA02JdGMbgkmu7mr6cNb.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2020-04-03 12:19:39', '2020-04-03 12:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

DROP TABLE IF EXISTS `businesses`;
CREATE TABLE IF NOT EXISTS `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `title`, `image`, `relation`, `created_at`, `updated_at`) VALUES
(1, 'Important', 'lkj', 'lkj', NULL, '2020-04-11 15:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fname`, `lname`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Atal', 'Atal', 'atal@gmail.com', '+93 787 87 93 84', 'My MEssage goest her . My MEssage goest her . My MEssage goest her . My MEssage goest her . My MEssage goest her . My MEssage goest her . ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

DROP TABLE IF EXISTS `counters`;
CREATE TABLE IF NOT EXISTS `counters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `c1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `c1`, `v1`, `c2`, `v2`, `c3`, `v3`, `c4`, `v4`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Masks Donated', '4300', 'Patients Cured', '400', 'Ventilators Made', '500', 'Products Sold', '1000', '0OWKgIdrE4xdT5z1M5LVa9IOZYPZQz5ZjIHpnZxE.jpeg', NULL, '2020-04-04 13:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

DROP TABLE IF EXISTS `icons`;
CREATE TABLE IF NOT EXISTS `icons` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `title`, `description`, `image`, `link`, `created_at`, `updated_at`) VALUES
(2, 'PRODUCTS', 'Auersla, conse ctetur adipis icing lorem ipsum dolor sit amet', 'UZ3uMZtAIPJ6K7DSbNkNqvGFgV129lTTH1a775lE.png', 'https://www.facebook.com/dd', '2020-04-08 11:47:03', '2020-04-08 11:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `wwa` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `email`, `phone`, `address`, `fb`, `tw`, `ig`, `vision`, `mission`, `wwa`, `created_at`, `updated_at`) VALUES
(1, 'info@ncg.af', '+93 798 79 70 20', 'Shahre Naw, Kabul, Afghanistan', 'https://www.facebook.com/10Binary', 'https://www.twitter.com/aryanetict/', 'https://www.ig.com/ShakibMaqsood', 'Corona Does not exist', 'End Corona', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magnaal qua. Ut enim ad minim veniam, quis nostrud exercitation ulla mco laboris nisi ut aliquip ex ea commodo consequat.\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culp a qui officia deserunt mollit anim id est laborum. Sed ut per spiciatis unde omnis iste natus error sit voluptatem accusan tium doloremque laudantium, totam rem aperiam, eaque ip', NULL, '2020-04-04 11:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

DROP TABLE IF EXISTS `logos`;
CREATE TABLE IF NOT EXISTS `logos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(5, '7jJl61NBTz6WEcPKFfyTBBOAp36WxpPmEEMrQ3bu.jpeg', '2020-04-11 15:10:51', '2020-04-11 15:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_01_144142_create_admins_table', 1),
(25, '2020_04_01_151116_create_sliders_table', 18),
(6, '2020_04_01_195612_create_infos_table', 3),
(7, '2020_04_01_201632_create_abouts_table', 4),
(8, '2020_04_01_203849_create_product_categories_table', 5),
(10, '2020_04_01_212048_create_products_table', 6),
(11, '2020_04_01_232131_create_services_table', 7),
(12, '2020_04_01_235527_create_blogs_table', 8),
(13, '2020_04_02_001044_create_contacts_table', 9),
(27, '2020_04_02_133643_create_businesses_table', 20),
(17, '2020_04_04_163256_create_counters_table', 11),
(18, '2020_04_04_175408_create_options_table', 12),
(19, '2020_04_04_175424_create_option_items_table', 12),
(20, '2020_04_08_155828_create_icons_table', 13),
(21, '2020_04_08_162521_create_banners_table', 14),
(22, '2020_04_08_164436_create_pages_table', 15),
(23, '2020_04_08_171232_create_teams_table', 16),
(24, '2020_04_08_175651_create_page_banners_table', 17),
(26, '2020_04_11_192425_create_logos_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option`, `created_at`, `updated_at`) VALUES
(2, 'What to do?', '2020-04-04 13:45:22', '2020-04-04 14:12:10'),
(3, 'What not to do?', '2020-04-04 14:12:21', '2020-04-04 14:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `option_items`
--

DROP TABLE IF EXISTS `option_items`;
CREATE TABLE IF NOT EXISTS `option_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `item` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `option_items`
--

INSERT INTO `option_items` (`id`, `item`, `option_id`, `created_at`, `updated_at`) VALUES
(2, 'Eat a lot of Vitamin C', 2, '2020-04-04 14:13:15', '2020-04-04 14:13:15'),
(3, 'Always Use Mask', 2, '2020-04-04 14:13:31', '2020-04-04 14:13:31'),
(4, 'Wash Your Hands Frequently', 2, '2020-04-04 14:13:48', '2020-04-04 14:13:48'),
(7, 'Don\'t shake hands with others', 3, '2020-04-04 14:17:02', '2020-04-04 14:17:02'),
(8, 'Don\'t go out', 3, '2020-04-04 14:17:12', '2020-04-04 14:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `privacy` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `privacy`, `terms`, `created_at`, `updated_at`) VALUES
(1, '<p>chekcs</p>', '<p>laskdfjalsd</p>\r\n<p>11</p>', NULL, '2020-04-08 12:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `page_banners`
--

DROP TABLE IF EXISTS `page_banners`;
CREATE TABLE IF NOT EXISTS `page_banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_banners`
--

INSERT INTO `page_banners` (`id`, `product`, `service`, `business`, `about`, `created_at`, `updated_at`) VALUES
(1, 'RZ1vMpwm0eya8Ve0jJrKPNs8mF22voPCUdonrehM.jpeg', 'LQGo7QjgDQCPtgs6ScfNK2l06gMLu3NwP9fftdeF.jpeg', 'tLeIZ5JSwBA1kvFYwZbruADSNXqEG4v1aTOkCnS8.jpeg', 'Of927XfJnUlZMYuKks0cs3dUVTPkgMU8yhoRDgTB.jpeg', NULL, '2020-04-09 14:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image`, `price`, `product_category_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'N95', 'plbRQKKyzEAxfdRLJ6jOq18OqUdPwwKfH9YzYW4H.jpeg', '459', 2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-01 17:46:16', '2020-04-04 12:00:25'),
(2, 'Alchohol', 'iK1VxG6Ex4IldLaouh83YST1hMEO2mMnc12vej3j.jpeg', '900', 3, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-01 17:46:42', '2020-04-03 14:33:54'),
(6, 'Surgical', 'C1NsFcGZmY1OrFdryj1Lc8GGitNxESQJRAab7XF1.jpeg', '20', 2, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2020-04-03 14:20:10', '2020-04-03 14:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Masks', 'tKeVCrnF1Al1iC8DPtQgshdl2Ljjop8iONM3EB96.jpeg', '2020-04-01 17:20:14', '2020-04-01 17:20:14'),
(3, 'Sanitizers', 'pOcJMDN3qyVlURQ5Z8ALblYWcpeE1r3wkL5USdzj.jpeg', '2020-04-01 17:29:04', '2020-04-01 17:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Services', 'AAllu1y47kxQnRzMWZzeX3tTfF77RIGXZGqmRYZ1.jpeg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro laudantium sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>', NULL, '2020-04-03 09:55:40'),
(3, 'Heading Sout', 'btkkqpRt47NTSl4bxVT5ZCwT9KvwbDlscN4jvgoT.jpeg', 'This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum, This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum, This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum. This is Photoshop\'s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Auctor, nisi elit consequat ipsum,', '2020-04-03 10:06:18', '2020-04-03 10:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `created_at`, `updated_at`) VALUES
(1, 'Nomad Concepts Group', 'Covid 19 Supply and Response', NULL, '2020-04-09 15:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Shapour Khan', 'CEO - NCG-Response', 'igsjCdBKHuxfUeEr3DxRaivRo2l7KDoaE12v9RnD.jpeg', '2020-04-09 12:41:41', '2020-04-09 12:41:41'),
(3, 'Zaheer Asifi', 'CFO - NCG-Response', 'oHWBWlEG72IgiWnDa1ZyXxzB2DpC039bKzhiG4q0.jpeg', '2020-04-09 12:44:40', '2020-04-09 12:44:40'),
(4, 'Hamid Raufi', 'CTO NCG-Response', 'VxaucwjF9iURQQAGRrHHDu1MeilcklqV4pOb8NrB.jpeg', '2020-04-09 12:45:12', '2020-04-09 12:45:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
