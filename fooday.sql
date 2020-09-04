-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 04:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooday`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mete_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','PENDING','DRAFT') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `mete_keyword`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, NULL, 'How To Cook The Spicy Chinese Noodle For Cold Weather', NULL, 'How To Cook The Spicy Chinese Noodle For Cold Weather', '<p>How To Cook The Spicy Chinese Noodle For Cold Weather</p>', 'blogs\\August2020\\nBOWWqfGgvrVemyGv3Y0.png', 'How To Cook The Spicy Chinese Noodle For Cold Weather', 'eee', 'eeee', 'PUBLISHED', 1, NULL, '2020-08-31 00:21:09'),
(2, NULL, 'Miss', NULL, 'Qui et dolor ea natus quia. Dolor sed eos nam totam. Cumque eligendi quia et voluptatibus voluptas.', '<p>Voluptatibus dolor nobis placeat fugiat. Explicabo nobis nisi deserunt sint voluptas odio quibusdam. Vero quis enim et quia.</p>', 'blogs\\August2020\\5A3SQNXPTUTgskbDocD0.jpg', 'Assumenda est voluptatum nostrum dolores repellendus quia enim. Et sunt deserunt deserunt modi. Asperiores sapiente dolor itaque rerum.', NULL, NULL, 'PUBLISHED', 1, NULL, '2020-08-31 00:06:58'),
(3, NULL, 'Prof.', NULL, 'Animi rerum ipsam deleniti aperiam nostrum odit. A dolorem praesentium reprehenderit tempore voluptate. Sequi vel est porro.', '<p>Eos est quisquam et illo. Eos dignissimos quidem aut. Natus dignissimos et odit et. Est recusandae fuga magnam et sit quas enim nulla. Est cum qui minus voluptatem dignissimos et cumque.</p>', 'blogs\\August2020\\JJQUpQb4qRGQ1yNkQr8z.png', 'Deserunt veritatis tempore repellat consequuntur assumenda architecto corporis. Qui architecto ducimus explicabo est suscipit et. Et quas explicabo adipisci consequatur amet praesentium officiis.', NULL, NULL, 'PUBLISHED', 1, NULL, '2020-08-31 00:07:36'),
(5, NULL, 'Dr.', NULL, 'Aut maiores eius velit nemo suscipit incidunt sit. Autem quia nobis aliquid non. Ducimus placeat corporis molestiae molestiae modi blanditiis nam. Molestiae at dolor doloribus et voluptatum qui.', '<p>Facilis culpa cumque sit sapiente facilis ut. Et officia est dolorum. Mollitia doloribus numquam non libero saepe ullam voluptatem. Officiis perferendis modi vel aspernatur modi eum neque fugiat.</p>', 'blogs\\August2020\\sN8YqyfOMLXMppoN5i0d.png', 'Sit velit minus magnam. Repudiandae cumque qui similique et facere et. Maiores quis omnis maiores vel. Exercitationem praesentium a omnis id quia iusto voluptas.', NULL, NULL, 'PUBLISHED', 0, NULL, '2020-08-31 00:07:59'),
(8, NULL, 'Mr.', NULL, 'Non recusandae minus dicta totam magni reiciendis. Rerum doloribus in nesciunt deleniti repellat cupiditate. In at fugiat ex ullam hic. Laudantium libero autem facere et sint.', '<p>Nulla voluptate eligendi rerum. Eius eveniet omnis temporibus molestiae quis. Omnis dolore omnis vel impedit temporibus. Asperiores totam iste autem iste deleniti.</p>', 'blogs\\August2020\\qNEiFrGWrqmSW5vX2QRm.png', 'Eaque ducimus quos quidem eum. Voluptatem possimus dolorem id maxime minima. Sunt mollitia illum magni accusamus.', NULL, NULL, 'PUBLISHED', 1, NULL, '2020-08-31 00:08:58'),
(9, NULL, 'Miss', NULL, 'Enim aut molestiae aut et labore cum placeat. Corrupti ut ex nam. Corporis voluptate laboriosam natus beatae ipsam qui.', '<p>Nobis illo non nulla consequatur consequatur tenetur nesciunt. Nulla dolorum adipisci vel nihil eum. Nesciunt alias non modi eius aut enim.</p>', 'blogs\\August2020\\DKcTm9PC1eHEvpfBVf6M.jpg', 'Enim quasi sit eum. Ab dolor amet voluptatem a officia praesentium. Et alias possimus non nam.', NULL, NULL, 'PUBLISHED', 1, NULL, '2020-08-31 00:09:21'),
(10, NULL, 'Mr.', NULL, 'Sint doloremque qui beatae magnam qui tenetur. Aut fuga doloribus voluptatem iure. Quae et id id in. Sit ut totam et sed.', '<p>Aliquid nihil soluta autem est. Dolorem sint et consequatur impedit ut qui. Nostrum soluta quaerat eos rerum blanditiis soluta. Deleniti neque consequatur rem eveniet.</p>', 'blogs\\August2020\\3KNO16Zx61T443mPYfHq.png', 'Vero dolor possimus omnis fugiat ea hic. Fugit id corrupti tempora minima velit. Quas consequatur rem iure dicta voluptatum quas. Qui repudiandae aliquid magnam esse ullam nihil eum.', NULL, NULL, 'PUBLISHED', 0, NULL, '2020-08-31 00:09:31'),
(11, NULL, 'Miss', NULL, 'Doloremque quibusdam labore natus dolor dignissimos. Molestiae et quas quaerat cumque rerum quo. Itaque quibusdam fugit dolorem et.', '<p>Placeat voluptatem dolor et qui. Voluptatem et et unde perspiciatis culpa ut itaque. Sit laborum autem voluptas est aspernatur vel minima. Et beatae minima et in quidem pariatur.</p>', 'blogs\\August2020\\RrQpcXrdpYK23WtBsbtG.jpg', 'Sit deserunt aliquid incidunt consequatur. Maxime omnis voluptates ut qui. Eaque eum quis aut ullam modi a. Voluptate rem est autem inventore ut.', NULL, NULL, 'PUBLISHED', 1, NULL, '2020-08-31 00:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Main Menu', 'main-menu', '2020-08-25 00:06:50', '2020-08-25 00:38:41'),
(2, NULL, 1, 'Seafood', 'seafood', '2020-08-25 00:06:50', '2020-08-25 00:39:51'),
(3, NULL, 1, 'Grill', 'grill', '2020-08-25 01:43:45', '2020-08-25 01:46:45'),
(4, NULL, 1, 'Meat', 'meat', '2020-08-25 01:44:06', '2020-08-25 01:46:17'),
(5, NULL, 1, 'Steam', 'steam', '2020-08-30 20:30:50', '2020-08-30 20:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(7, 2, 1, NULL, NULL),
(8, 2, 3, NULL, NULL),
(9, 3, 2, NULL, NULL),
(10, 4, 1, NULL, NULL),
(11, 4, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 1, 1, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 0, 0, 0, 0, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 0, 0, 0, 0, 0, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'number', 'Status', 1, 1, 1, 1, 1, 1, '{}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'hidden', 'Id', 1, 0, 1, 0, 0, 0, '{}', 1),
(57, 7, 'product_name', 'text', 'Product Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(58, 7, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 4),
(59, 7, 'short_description', 'text_area', 'Short Description', 1, 1, 1, 1, 1, 1, '{}', 5),
(60, 7, 'description', 'rich_text_box', 'Description', 1, 0, 1, 1, 1, 1, '{\"tinymceOptions\":{\"name\":\"n1ed\"}}', 6),
(61, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(62, 7, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"product_name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 9),
(63, 7, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"inStock\",\"options\":{\"inStock\":\"C\\u00f2n M\\u00f3n\",\"outStock\":\"H\\u1ebft M\\u00f3n\"}}', 10),
(64, 7, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 13),
(65, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(66, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(67, 8, 'author_id', 'text', 'Author Id', 0, 0, 1, 1, 0, 1, '{}', 2),
(68, 8, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(69, 8, 'seo_title', 'text', 'Seo Title', 0, 0, 1, 1, 1, 1, '{}', 4),
(70, 8, 'excerpt', 'text_area', 'Excerpt', 1, 1, 1, 1, 1, 1, '{}', 5),
(71, 8, 'body', 'rich_text_box', 'Body', 1, 1, 1, 1, 1, 1, '{}', 6),
(72, 8, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(73, 8, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 9),
(74, 8, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 10),
(75, 8, 'mete_keyword', 'text_area', 'Mete Keyword', 0, 0, 1, 1, 1, 1, '{}', 11),
(76, 8, 'status', 'number', 'Status', 1, 1, 1, 1, 1, 1, '{}', 8),
(77, 8, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 12),
(78, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 13),
(79, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(88, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(89, 13, 'product_id', 'text', 'Product Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(90, 13, 'category_id', 'text', 'Category Id', 1, 1, 1, 1, 1, 1, '{}', 3),
(91, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 4),
(92, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(103, 7, 'category_id', 'hidden', 'Category Id', 0, 0, 0, 1, 1, 1, '{}', 2),
(105, 7, 'featured', 'checkbox', 'Featured', 1, 0, 1, 1, 1, 1, '{\"checked\":true}', 12),
(106, 7, 'images', 'multiple_images', 'Images', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 8),
(107, 7, 'product_hasmany_category_relationship', 'relationship', 'Category', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category_product\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-08-25 00:06:45', '2020-08-25 00:06:45'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-08-25 00:06:46', '2020-08-25 00:06:46'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-08-25 00:06:46', '2020-08-25 00:06:46'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-08-25 00:06:49', '2020-08-30 20:30:25'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-08-25 00:06:50', '2020-08-26 21:54:42'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-08-25 00:06:51', '2020-08-25 00:06:51'),
(7, 'products', 'products', 'Product', 'Products', 'voyager-bag', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-25 00:10:28', '2020-08-31 02:33:26'),
(8, 'blogs', 'blogs', 'Blog', 'Blogs', NULL, 'App\\Blog', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-25 00:25:20', '2020-08-27 22:41:01'),
(13, 'category_product', 'category-product', 'Category Product', 'Category Product', NULL, 'App\\Category_Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-08-25 01:32:14', '2020-08-26 21:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-08-25 00:06:46', '2020-08-25 00:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-08-25 00:06:47', '2020-08-25 00:06:47', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 8, '2020-08-25 00:06:47', '2020-08-30 20:28:18', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 7, '2020-08-25 00:06:47', '2020-08-30 20:28:18', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 6, '2020-08-25 00:06:47', '2020-08-30 20:28:18', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2020-08-25 00:06:47', '2020-08-30 20:28:18', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-08-25 00:06:47', '2020-08-30 20:28:05', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-08-25 00:06:47', '2020-08-30 20:28:05', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-08-25 00:06:47', '2020-08-30 20:28:05', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-08-25 00:06:47', '2020-08-30 20:28:05', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 12, '2020-08-25 00:06:47', '2020-08-30 20:28:18', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 4, '2020-08-25 00:06:49', '2020-08-30 20:28:13', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 9, '2020-08-25 00:06:50', '2020-08-30 20:28:18', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 10, '2020-08-25 00:06:51', '2020-08-30 20:28:18', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-08-25 00:06:53', '2020-08-30 20:28:05', 'voyager.hooks', NULL),
(15, 1, 'Products', '', '_self', 'voyager-bag', NULL, NULL, 3, '2020-08-25 00:10:28', '2020-08-30 20:32:42', 'voyager.products.index', NULL),
(16, 1, 'Blogs', '', '_self', 'voyager-polaroid', '#000000', NULL, 2, '2020-08-25 00:25:20', '2020-08-30 20:32:42', 'voyager.blogs.index', 'null'),
(20, 1, 'Category Products', '', '_self', 'voyager-documentation', '#000000', NULL, 5, '2020-08-25 01:32:14', '2020-08-30 20:32:31', 'voyager.category-product.index', 'null');

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
(72, '2020_08_25_065029_create_category__products_table', 1),
(102, '2014_10_12_000000_create_users_table', 2),
(103, '2014_10_12_100000_create_password_resets_table', 2),
(104, '2016_01_01_000000_add_voyager_user_fields', 2),
(105, '2016_01_01_000000_create_data_types_table', 2),
(106, '2016_01_01_000000_create_pages_table', 2),
(107, '2016_01_01_000000_create_posts_table', 2),
(108, '2016_02_15_204651_create_categories_table', 2),
(109, '2016_05_19_173453_create_menu_table', 2),
(110, '2016_10_21_190000_create_roles_table', 2),
(111, '2016_10_21_190000_create_settings_table', 2),
(112, '2016_11_30_135954_create_permission_table', 2),
(113, '2016_11_30_141208_create_permission_role_table', 2),
(114, '2016_12_26_201236_data_types__add__server_side', 2),
(115, '2017_01_13_000000_add_route_to_menu_items_table', 2),
(116, '2017_01_14_005015_create_translations_table', 2),
(117, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 2),
(118, '2017_03_06_000000_add_controller_to_data_types_table', 2),
(119, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(120, '2017_04_21_000000_add_order_to_data_rows_table', 2),
(121, '2017_07_05_210000_add_policyname_to_data_types_table', 2),
(122, '2017_08_05_000000_add_group_to_settings_table', 2),
(123, '2017_11_26_013050_add_user_role_relationship', 2),
(124, '2017_11_26_015000_create_user_roles_table', 2),
(125, '2018_03_11_000000_add_user_settings', 2),
(126, '2018_03_14_000000_add_details_to_data_types_table', 2),
(127, '2018_03_16_000000_make_settings_value_nullable', 2),
(128, '2019_08_19_000000_create_failed_jobs_table', 2),
(129, '2020_08_21_060657_create_blogs_table', 2),
(130, '2020_08_25_030224_create_products_table', 2),
(133, '2020_08_25_065548_create_category__products_table', 3),
(150, '2020_08_25_082543_create_category_product', 4),
(151, '2020_08_27_021957_create_products_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-08-25 00:06:51', '2020-08-25 00:06:51');

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(2, 'browse_bread', NULL, '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(3, 'browse_database', NULL, '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(4, 'browse_media', NULL, '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(5, 'browse_compass', NULL, '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(6, 'browse_menus', 'menus', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(7, 'read_menus', 'menus', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(8, 'edit_menus', 'menus', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(9, 'add_menus', 'menus', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(10, 'delete_menus', 'menus', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(11, 'browse_roles', 'roles', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(12, 'read_roles', 'roles', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(13, 'edit_roles', 'roles', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(14, 'add_roles', 'roles', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(15, 'delete_roles', 'roles', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(16, 'browse_users', 'users', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(17, 'read_users', 'users', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(18, 'edit_users', 'users', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(19, 'add_users', 'users', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(20, 'delete_users', 'users', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(21, 'browse_settings', 'settings', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(22, 'read_settings', 'settings', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(23, 'edit_settings', 'settings', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(24, 'add_settings', 'settings', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(25, 'delete_settings', 'settings', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(26, 'browse_categories', 'categories', '2020-08-25 00:06:49', '2020-08-25 00:06:49'),
(27, 'read_categories', 'categories', '2020-08-25 00:06:49', '2020-08-25 00:06:49'),
(28, 'edit_categories', 'categories', '2020-08-25 00:06:49', '2020-08-25 00:06:49'),
(29, 'add_categories', 'categories', '2020-08-25 00:06:49', '2020-08-25 00:06:49'),
(30, 'delete_categories', 'categories', '2020-08-25 00:06:49', '2020-08-25 00:06:49'),
(31, 'browse_posts', 'posts', '2020-08-25 00:06:50', '2020-08-25 00:06:50'),
(32, 'read_posts', 'posts', '2020-08-25 00:06:50', '2020-08-25 00:06:50'),
(33, 'edit_posts', 'posts', '2020-08-25 00:06:50', '2020-08-25 00:06:50'),
(34, 'add_posts', 'posts', '2020-08-25 00:06:50', '2020-08-25 00:06:50'),
(35, 'delete_posts', 'posts', '2020-08-25 00:06:50', '2020-08-25 00:06:50'),
(36, 'browse_pages', 'pages', '2020-08-25 00:06:51', '2020-08-25 00:06:51'),
(37, 'read_pages', 'pages', '2020-08-25 00:06:51', '2020-08-25 00:06:51'),
(38, 'edit_pages', 'pages', '2020-08-25 00:06:51', '2020-08-25 00:06:51'),
(39, 'add_pages', 'pages', '2020-08-25 00:06:51', '2020-08-25 00:06:51'),
(40, 'delete_pages', 'pages', '2020-08-25 00:06:51', '2020-08-25 00:06:51'),
(41, 'browse_hooks', NULL, '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(42, 'browse_products', 'products', '2020-08-25 00:10:28', '2020-08-25 00:10:28'),
(43, 'read_products', 'products', '2020-08-25 00:10:28', '2020-08-25 00:10:28'),
(44, 'edit_products', 'products', '2020-08-25 00:10:28', '2020-08-25 00:10:28'),
(45, 'add_products', 'products', '2020-08-25 00:10:28', '2020-08-25 00:10:28'),
(46, 'delete_products', 'products', '2020-08-25 00:10:28', '2020-08-25 00:10:28'),
(47, 'browse_blogs', 'blogs', '2020-08-25 00:25:20', '2020-08-25 00:25:20'),
(48, 'read_blogs', 'blogs', '2020-08-25 00:25:20', '2020-08-25 00:25:20'),
(49, 'edit_blogs', 'blogs', '2020-08-25 00:25:20', '2020-08-25 00:25:20'),
(50, 'add_blogs', 'blogs', '2020-08-25 00:25:20', '2020-08-25 00:25:20'),
(51, 'delete_blogs', 'blogs', '2020-08-25 00:25:20', '2020-08-25 00:25:20'),
(62, 'browse_category_product', 'category_product', '2020-08-25 01:32:14', '2020-08-25 01:32:14'),
(63, 'read_category_product', 'category_product', '2020-08-25 01:32:14', '2020-08-25 01:32:14'),
(64, 'edit_category_product', 'category_product', '2020-08-25 01:32:14', '2020-08-25 01:32:14'),
(65, 'add_category_product', 'category_product', '2020-08-25 01:32:14', '2020-08-25 01:32:14'),
(66, 'delete_category_product', 'category_product', '2020-08-25 01:32:14', '2020-08-25 01:32:14');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-08-25 00:06:50', '2020-08-25 00:06:50'),
(2, 1, 1, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\r\n<h2>We can use all kinds of format!</h2>\r\n<p>And include a bunch of other stuff.</p>', 'posts\\August2020\\ULRn0nD3zNBNfGddnJ2F.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-08-25 00:06:51', '2020-08-27 22:29:52'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-08-25 00:06:51', '2020-08-25 00:06:51'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\r\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\r\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-08-25 00:06:51', '2020-08-25 00:06:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('outStock','inStock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inStock',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `price`, `short_description`, `description`, `image`, `slug`, `status`, `featured`, `images`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Lobster Parsley Plate Lemons', 100, 'Lobster Parsley Plate Lemons', '<p>qqqqqqqqqqqqqqqqqqqqqqqqqqqq</p>\r\n<p><strong><img src=\"http://localhost/FoodKhang/public/storage/products/August2020/2608.jpg\" alt=\"\" width=\"250\" height=\"131\" /></strong><img src=\"http://localhost/FoodKhang/public/storage/products/August2020/Screenshot (2)_LI.jpg\" alt=\"\" width=\"187\" height=\"131\" /></p>', 'products\\August2020\\LUfJscXrxtc3x5YJd2Yu.png', 'lobster-parsley-plate-lemons', 'inStock', 1, '[\"products\\\\August2020\\\\V9OPUE0bcOG5zR6sy9NW.jpg\",\"products\\\\August2020\\\\MRc4GOwvTS0Otiz4awig.png\",\"products\\\\August2020\\\\mPkOzvQXxaqdhfSX3NV2.png\"]', '2020-08-30 20:18:06', '2020-08-31 02:35:40'),
(2, NULL, 'Fried Chicken', 150, 'Fried Chicken', '<p>Fried Chicken</p>', 'products\\August2020\\FjkjmZWTLsJHihXIMxCC.png', 'fried-chicken', 'inStock', 1, '[\"products\\\\August2020\\\\j3sqTJ8X3z6NUwuDnh8w.png\",\"products\\\\August2020\\\\MAlV5IIvTSEGEuoqZe7h.jpg\",\"products\\\\August2020\\\\yKfpBFusfrXbqcXSLiKy.png\"]', '2020-08-31 00:50:37', '2020-08-31 00:50:37'),
(3, 2, 'Calamari', 50, 'Calamari', '<p>Calamari</p>', 'products\\August2020\\Pna2ULMCLB5mqbOa4g8F.png', 'calamari', 'inStock', 1, '[\"products\\\\August2020\\\\qN3aKHsUL2YwmuFvgTJJ.jpg\",\"products\\\\August2020\\\\mH7Vq6IiL6mRiMmhucWl.jpg\",\"products\\\\August2020\\\\Bj2xTRc6rjXJhMt0f90X.jpg\"]', '2020-08-31 00:55:45', '2020-08-31 00:55:45'),
(4, NULL, 'Steak With Potato grill', 500, 'Steak With Potato grill', '<p>Steak With Potato grill</p>', NULL, 'steak-with-potato-grill', 'inStock', 1, NULL, '2020-08-31 00:58:46', '2020-08-31 01:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-08-25 00:06:47', '2020-08-25 00:06:47'),
(2, 'user', 'Normal User', '2020-08-25 00:06:47', '2020-08-25 00:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-08-25 00:06:52', '2020-08-25 00:06:52'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-08-25 00:06:53', '2020-08-25 00:06:53'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-08-25 00:06:53', '2020-08-25 00:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$F0xH8ESvy5yF/X83RQCvqObpCS6kG863C05sMC2B.LPn2eV1EkiH2', 'KaiBbJgXd3QvhjoNU8f7z4sKWcxKNsGEBBoJ6ukyb4iTfv0WOXgxhWCGbsYW', NULL, '2020-08-25 00:06:50', '2020-08-25 00:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
