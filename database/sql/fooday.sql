-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 03:22 AM
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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','PENDING','DRAFT') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PUBLISHED',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keyword`, `status`, `featured`, `created_at`, `updated_at`, `quote`) VALUES
(1, NULL, 'Xôi gấc', NULL, 'Sôi gấc là món ăn rất ngon, vừa ngon mắt, ngon miệng bởi màu sắc rực rỡ và có nhiều vitamin, vị rẻo thơm béo ngậy của sôi', '<div class=\"ingredient-list\">\r\n<div>\r\n<h2 class=\"text-cookpad-24 font-extrabold\">Nguy&ecirc;n Liệu</h2>\r\n<div class=\"ingredient-list\">\r\n<ol class=\"list-unstyled text-cookpad-18 divide-y\" dir=\"auto\" data-target=\"dir.auto\">\r\n<li id=\"ingredient_2441722\" class=\"ingredient py-1 border-quaternary border-dashed\">\r\n<div><bdi class=\"ingredient__quantity\">1 kg</bdi> gạo nếp</div>\r\n</li>\r\n<li id=\"ingredient_2441723\" class=\"ingredient py-1 border-quaternary border-dashed\">\r\n<div><bdi class=\"ingredient__quantity\">1 quả</bdi> gấc nếp</div>\r\n</li>\r\n<li id=\"ingredient_2441725\" class=\"ingredient py-1 border-quaternary border-dashed\">\r\n<div><bdi class=\"ingredient__quantity\">3 th&igrave;a c&agrave; phe muối tinh</bdi> ( hoặc đường trắng)</div>\r\n</li>\r\n<li id=\"ingredient_2442209\" class=\"ingredient py-1 border-quaternary border-dashed\">\r\n<div><bdi class=\"ingredient__quantity\">2 th&igrave;a</bdi> rượu trắng ( hoặc 2 th&igrave;a mắm cốt)</div>\r\n</li>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<section id=\"steps\" class=\"steps-container document__section bg-pure-white\">\r\n<div class=\"document__title-container\">\r\n<h2 class=\"text-cookpad-24 font-extrabold\">C&aacute;c bước</h2>\r\n</div>\r\n<ol class=\"numbered-list\" dir=\"auto\" data-target=\"dir.auto\">\r\n<li id=\"step_1271536\" class=\"step numbered-list__item\" dir=\"auto\" data-target=\"dir.auto\">\r\n<div class=\"numbered-list__contents\">\r\n<div class=\"text-cookpad-18\">\r\n<div class=\"prose\">\r\n<div data-dir-attribute=\"auto\">\r\n<p class=\"mb-2 inline\">Cho gạo v&agrave;o chậu vo sạch ng&acirc;m từ 8 đến 10 tiếng đồng hồ</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex space-x-2\"><a class=\"md:w-auto w-full\" href=\"https://cookpad.com/vn/step_attachment/images/2458582_838e2725a82cd3da\" rel=\"nofollow\" data-action=\"modal#advance\"> <img class=\"rounded-lg object-cover w-full h-full lazy-image lazy-image--loaded\" src=\"https://img-global.cpcdn.com/steps/2458582_838e2725a82cd3da/160x128cq70/xoi-gấc-recipe-step-1-photo.jpg\" alt=\"X&ocirc;i gấc bước l&agrave;m 1 h&igrave;nh\" width=\"160\" height=\"128\" data-original=\"https://img-global.cpcdn.com/steps/2458582_838e2725a82cd3da/160x128cq70/xoi-gấc-recipe-step-1-photo.jpg\" data-src=\"https://img-global.cpcdn.com/steps/2458582_838e2725a82cd3da/160x128cq70/xoi-gấc-recipe-step-1-photo.jpg\" data-srcset=\"https://img-global.cpcdn.com/steps/2458582_838e2725a82cd3da/320x256cq70/xoi-gấc-recipe-step-1-photo.jpg 2x\" data-was-processed=\"true\" /> </a></div>\r\n</div>\r\n</li>\r\n<li id=\"step_1271537\" class=\"step numbered-list__item\" dir=\"auto\" data-target=\"dir.auto\">\r\n<div class=\"numbered-list__contents\">\r\n<div class=\"text-cookpad-18\">\r\n<div class=\"prose\">\r\n<div data-dir-attribute=\"auto\">\r\n<p class=\"mb-2 inline\">Vớt gạo ra gi&aacute; sả lại bằng nước sạch, s&oacute;c gạo cho r&aacute;o nước, cho 3 th&igrave;a c&agrave; phe muối tinh trộn đều.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex space-x-2\"><a class=\"md:w-auto w-full\" href=\"https://cookpad.com/vn/step_attachment/images/2458582_4a0007c0210bcb9e\" rel=\"nofollow\" data-action=\"modal#advance\"> <img class=\"rounded-lg object-cover w-full h-full lazy-image lazy-image--loaded\" src=\"https://img-global.cpcdn.com/steps/2458582_4a0007c0210bcb9e/160x128cq70/xoi-gấc-recipe-step-2-photo.jpg\" alt=\"X&ocirc;i gấc bước l&agrave;m 2 h&igrave;nh\" width=\"160\" height=\"128\" data-original=\"https://img-global.cpcdn.com/steps/2458582_4a0007c0210bcb9e/160x128cq70/xoi-gấc-recipe-step-2-photo.jpg\" data-src=\"https://img-global.cpcdn.com/steps/2458582_4a0007c0210bcb9e/160x128cq70/xoi-gấc-recipe-step-2-photo.jpg\" data-srcset=\"https://img-global.cpcdn.com/steps/2458582_4a0007c0210bcb9e/320x256cq70/xoi-gấc-recipe-step-2-photo.jpg 2x\" data-was-processed=\"true\" /> </a></div>\r\n</div>\r\n</li>\r\n<li id=\"step_1271538\" class=\"step numbered-list__item\" dir=\"auto\" data-target=\"dir.auto\">\r\n<div class=\"numbered-list__contents\">\r\n<div class=\"text-cookpad-18\">\r\n<div class=\"prose\">\r\n<div data-dir-attribute=\"auto\">\r\n<p class=\"mb-2 inline\">Gấc bổ l&agrave;m đ&ocirc;i lấy hết nh&acirc;n gấc ra b&aacute;t t&ocirc; cho khoảng 2 th&igrave;a con rượu trắng hoặc 2 th&igrave;a con mắm ăn( mục đ&iacute;ch của việc cho th&ecirc;m rượu hoặc mắm v&agrave;o gấc đ&aacute;nh l&ecirc;n cho dậy m&agrave;u đẹp), d&ugrave;ng găng ni lon đeo v&agrave;o tay trộn b&oacute;p đều cho cho nhuyễn thịt gấc</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex space-x-2\"><a class=\"md:w-auto w-full\" href=\"https://cookpad.com/vn/step_attachment/images/2458582_609b05ca68cfc674\" rel=\"nofollow\" data-action=\"modal#advance\"> <img class=\"rounded-lg object-cover w-full h-full lazy-image lazy-image--loaded\" src=\"https://img-global.cpcdn.com/steps/2458582_609b05ca68cfc674/160x128cq70/xoi-gấc-recipe-step-3-photo.jpg\" alt=\"X&ocirc;i gấc bước l&agrave;m 3 h&igrave;nh\" width=\"160\" height=\"128\" data-original=\"https://img-global.cpcdn.com/steps/2458582_609b05ca68cfc674/160x128cq70/xoi-gấc-recipe-step-3-photo.jpg\" data-src=\"https://img-global.cpcdn.com/steps/2458582_609b05ca68cfc674/160x128cq70/xoi-gấc-recipe-step-3-photo.jpg\" data-srcset=\"https://img-global.cpcdn.com/steps/2458582_609b05ca68cfc674/320x256cq70/xoi-gấc-recipe-step-3-photo.jpg 2x\" data-was-processed=\"true\" /> </a></div>\r\n</div>\r\n</li>\r\n<li id=\"step_1271750\" class=\"step numbered-list__item\" dir=\"auto\" data-target=\"dir.auto\">\r\n<div class=\"numbered-list__contents\">\r\n<div class=\"text-cookpad-18\">\r\n<div class=\"prose\">\r\n<div data-dir-attribute=\"auto\">\r\n<p class=\"mb-2 inline\">Cho gấc v&agrave;o trộn đều với gạo, loại bỏ hạt gấc</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex space-x-2\"><a class=\"md:w-auto w-full\" href=\"https://cookpad.com/vn/step_attachment/images/2458582_b2b0cc70dce249a4\" rel=\"nofollow\" data-action=\"modal#advance\"> <img class=\"rounded-lg object-cover w-full h-full lazy-image lazy-image--loaded\" src=\"https://img-global.cpcdn.com/steps/2458582_b2b0cc70dce249a4/160x128cq70/xoi-gấc-recipe-step-4-photo.jpg\" alt=\"X&ocirc;i gấc bước l&agrave;m 4 h&igrave;nh\" width=\"160\" height=\"128\" data-original=\"https://img-global.cpcdn.com/steps/2458582_b2b0cc70dce249a4/160x128cq70/xoi-gấc-recipe-step-4-photo.jpg\" data-src=\"https://img-global.cpcdn.com/steps/2458582_b2b0cc70dce249a4/160x128cq70/xoi-gấc-recipe-step-4-photo.jpg\" data-srcset=\"https://img-global.cpcdn.com/steps/2458582_b2b0cc70dce249a4/320x256cq70/xoi-gấc-recipe-step-4-photo.jpg 2x\" data-was-processed=\"true\" /> </a></div>\r\n</div>\r\n</li>\r\n<li id=\"step_1271769\" class=\"step numbered-list__item\" dir=\"auto\" data-target=\"dir.auto\">\r\n<div class=\"numbered-list__contents\">\r\n<div class=\"text-cookpad-18\">\r\n<div class=\"prose\">\r\n<div data-dir-attribute=\"auto\">\r\n<p class=\"mb-2 inline\">Cho nước v&agrave;o nồi (cho vừa nước để s&ocirc;i lượt dưới đ&aacute;y kh&ocirc;ng bị ướt bết); đặt đế hấp v&agrave;o l&oacute;t lượt khăn bằng vải mỏng sạch c&oacute; xoa ch&uacute;t dầu hoặc mỡ, sau đ&oacute; cho gạo đ&atilde; trộn thịt gấc v&agrave;o đồ trong 25 đếm 30 ph&uacute;t mở vung cho khoảng 3 đến 4 th&igrave;a nhỏ mỡ g&agrave; ( c&oacute; thể d&ugrave;ng mỡ động vật) d&ugrave;ng đũa đảo cho đều rồi đậy vung đồ tiếp 20 đến 25 ph&uacute;t nữa l&agrave; s&ocirc;i ch&iacute;n đều. (Nếu gia đ&igrave;nh bạn muốn ăn s&ocirc;i gấc c&oacute; vị ngọt b&eacute;o, thơm ngậy th&igrave; cho th&ecirc;m đường v&agrave; &iacute;t nước cốt dừa Tuỳ vị ngọt, ngậy của mỗi gia đ&igrave;nh)</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex space-x-2\"><a class=\"md:w-auto w-full\" href=\"https://cookpad.com/vn/step_attachment/images/2458582_02781ce49fc7b46b\" rel=\"nofollow\" data-action=\"modal#advance\"> <img class=\"rounded-lg object-cover w-full h-full lazy-image lazy-image--loaded\" src=\"https://img-global.cpcdn.com/steps/2458582_02781ce49fc7b46b/160x128cq70/xoi-gấc-recipe-step-5-photo.jpg\" alt=\"X&ocirc;i gấc bước l&agrave;m 5 h&igrave;nh\" width=\"160\" height=\"128\" data-original=\"https://img-global.cpcdn.com/steps/2458582_02781ce49fc7b46b/160x128cq70/xoi-gấc-recipe-step-5-photo.jpg\" data-src=\"https://img-global.cpcdn.com/steps/2458582_02781ce49fc7b46b/160x128cq70/xoi-gấc-recipe-step-5-photo.jpg\" data-srcset=\"https://img-global.cpcdn.com/steps/2458582_02781ce49fc7b46b/320x256cq70/xoi-gấc-recipe-step-5-photo.jpg 2x\" data-was-processed=\"true\" /> </a></div>\r\n</div>\r\n</li>\r\n<li id=\"step_1271970\" class=\"step numbered-list__item\" dir=\"auto\" data-target=\"dir.auto\">\r\n<div class=\"numbered-list__contents\">\r\n<div class=\"text-cookpad-18\">\r\n<div class=\"prose\">\r\n<div data-dir-attribute=\"auto\">\r\n<p class=\"mb-2 inline\">Khi s&ocirc;i đ&atilde; ch&iacute;n bạn tắt bếp để cho nguội bớt rồi lấy 1 b&aacute;t t&ocirc; sới s&ocirc;i v&agrave;o b&aacute;t, d&ugrave;ng th&igrave;a l&egrave;n nhẹ xung quang rồi &uacute;p v&agrave;o đĩa, thế l&agrave; m&oacute;n s&ocirc;i đ&atilde; ho&agrave;n tất.</p>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex space-x-2\"><a class=\"md:w-auto w-full\" href=\"https://cookpad.com/vn/step_attachment/images/2458582_c40f7bf74a52aa95\" rel=\"nofollow\" data-action=\"modal#advance\"> <img class=\"rounded-lg object-cover w-full h-full lazy-image lazy-image--loaded\" src=\"https://img-global.cpcdn.com/steps/2458582_c40f7bf74a52aa95/160x128cq70/xoi-gấc-recipe-step-6-photo.jpg\" alt=\"X&ocirc;i gấc bước l&agrave;m 6 h&igrave;nh\" width=\"160\" height=\"128\" data-original=\"https://img-global.cpcdn.com/steps/2458582_c40f7bf74a52aa95/160x128cq70/xoi-gấc-recipe-step-6-photo.jpg\" data-src=\"https://img-global.cpcdn.com/steps/2458582_c40f7bf74a52aa95/160x128cq70/xoi-gấc-recipe-step-6-photo.jpg\" data-srcset=\"https://img-global.cpcdn.com/steps/2458582_c40f7bf74a52aa95/320x256cq70/xoi-gấc-recipe-step-6-photo.jpg 2x\" data-was-processed=\"true\" /> </a></div>\r\n</div>\r\n</li>\r\n</ol>\r\n</section>\r\n</div>\r\n</div>\r\n</div>', 'blogs\\September2020\\mH58nzbDLPF7zsWaPpQh.jpg', 'xoi-gac', NULL, NULL, 'PUBLISHED', 1, '2020-09-09 03:21:03', '2020-09-11 17:41:09', 'Mọi hạnh phúc trên đời đều bắt đầu từ một bữa ăn sáng nhàn nhã');

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(10) UNSIGNED DEFAULT NULL,
  `tag_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`id`, `blog_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) DEFAULT 1,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(2, NULL, 1, 'Xôi', 'categories\\September2020\\Z5ucxTE7LEedmVqiFKWu.jpg', 'xoi', '2020-09-07 23:18:20', '2020-09-11 02:21:19'),
(3, NULL, 1, 'Chè', 'categories\\September2020\\pSkqH61xbyeSUowFlOyR.jpg', 'che', '2020-09-07 23:41:23', '2020-09-11 02:21:07'),
(4, NULL, 1, 'Rau Câu 3D', 'categories\\September2020\\nEL6PXyEEnSqPSQjBXZf.jpg', 'rau-cau-3d', '2020-09-07 23:41:47', '2020-09-11 02:20:49');

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
(2, 1, 2, NULL, NULL),
(11, 2, 2, NULL, NULL),
(12, 2, 3, NULL, NULL),
(13, 2, 4, NULL, NULL),
(14, 3, 3, NULL, NULL),
(15, 3, 2, NULL, NULL),
(16, 3, 4, NULL, NULL),
(17, 4, 4, NULL, NULL),
(18, 4, 2, NULL, NULL),
(19, 4, 3, NULL, NULL);

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
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 0, 0, 1, 1, 1, 1, '{\"default\":1}', 3),
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
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 0, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
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
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'category_id', 'hidden', 'Category Id', 0, 0, 0, 0, 0, 0, '{}', 2),
(58, 7, 'product_name', 'text', 'Product Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'short_description', 'text_area', 'Short Description', 1, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'description', 'rich_text_box', 'Description', 1, 0, 1, 1, 1, 1, '{}', 6),
(62, 7, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(63, 7, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"product_name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(64, 7, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 9),
(65, 7, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 10),
(66, 7, 'images', 'multiple_images', 'Multi Images', 0, 0, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 11),
(67, 7, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 12),
(68, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(69, 7, 'product_belongstomany_category_relationship', 'relationship', 'Categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Category\",\"table\":\"categories\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"category_product\",\"pivot\":\"1\",\"taggable\":\"0\"}', 14),
(70, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(71, 8, 'author_id', 'text', 'Author Id', 0, 0, 0, 0, 0, 0, '{}', 2),
(72, 8, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 3),
(73, 8, 'seo_title', 'text', 'Seo Title', 0, 0, 1, 1, 1, 1, '{}', 4),
(74, 8, 'excerpt', 'text_area', 'Excerpt', 1, 1, 1, 1, 1, 1, '{}', 5),
(75, 8, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(76, 8, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(77, 8, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(78, 8, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(79, 8, 'meta_keyword', 'text_area', 'Meta Keyword', 0, 0, 1, 1, 1, 1, '{}', 10),
(80, 8, 'status', 'number', 'Status', 1, 1, 1, 1, 1, 1, '{}', 11),
(81, 8, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 12),
(82, 8, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 13),
(83, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(85, 8, 'blog_belongstomany_tag_relationship', 'relationship', 'Blog Tags', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Tag\",\"table\":\"tags\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"blog_tag\",\"pivot\":\"1\",\"taggable\":\"0\"}', 15),
(86, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(87, 9, 'parent_id', 'text', 'Parent Id', 0, 0, 0, 0, 0, 0, '{}', 2),
(88, 9, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(89, 9, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 4),
(90, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 5),
(91, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(93, 4, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 5),
(94, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(95, 10, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(96, 10, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 3),
(97, 10, 'short_description', 'text_area', 'Short Description', 1, 1, 1, 1, 1, 1, '{}', 4),
(98, 10, 'description', 'rich_text_box', 'Description', 1, 0, 1, 1, 1, 1, '{}', 5),
(99, 10, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 6),
(100, 10, 'images', 'multiple_images', 'Multiple Images', 0, 0, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(101, 10, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(102, 10, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, '{}', 9),
(103, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 10),
(104, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(107, 7, 'product_belongstomany_service_relationship', 'relationship', 'Services', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Service\",\"table\":\"services\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"product_service\",\"pivot\":\"1\",\"taggable\":\"0\"}', 15),
(108, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(109, 11, 'customer_name', 'text', 'Customer Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(110, 11, 'phone_number', 'number', 'Phone Number', 1, 1, 1, 1, 1, 1, '{}', 3),
(111, 11, 'status', 'number', 'Status', 1, 1, 1, 1, 1, 1, '{}', 4),
(112, 11, 'address', 'text', 'Address', 1, 1, 1, 1, 1, 1, '{}', 5),
(113, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(114, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(115, 11, 'order_belongstomany_product_relationship', 'relationship', 'products', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Product\",\"table\":\"products\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"product_name\",\"pivot_table\":\"order_product\",\"pivot\":\"1\",\"taggable\":\"0\"}', 8),
(116, 8, 'quote', 'text_area', 'Quote', 1, 1, 1, 1, 1, 1, '{}', 15);

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
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-09-07 23:18:15', '2020-09-07 23:18:15'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-09-07 23:18:15', '2020-09-07 23:18:15'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-09-07 23:18:15', '2020-09-07 23:18:15'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-09-07 23:18:19', '2020-09-07 23:43:21'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-09-07 23:18:20', '2020-09-08 02:25:15'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-09-07 23:18:21', '2020-09-07 23:18:21'),
(7, 'products', 'products', 'Product', 'Products', 'voyager-bag', 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-07 23:21:11', '2020-09-08 22:03:27'),
(8, 'blogs', 'blogs', 'Blog', 'Blogs', 'voyager-polaroid', 'App\\Blog', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-07 23:24:43', '2020-09-11 17:34:38'),
(9, 'tags', 'tags', 'Tag', 'Tags', 'voyager-tag', 'App\\Tag', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-07 23:29:50', '2020-09-09 03:20:03'),
(10, 'services', 'services', 'Service', 'Services', 'voyager-lab', 'App\\Service', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-08 01:24:16', '2020-09-08 03:19:25'),
(11, 'orders', 'orders', 'Order', 'Orders', NULL, 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-09-10 21:08:45', '2020-09-10 21:43:28');

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
(1, 'admin', '2020-09-07 23:18:16', '2020-09-07 23:18:16');

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
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-09-07 23:18:16', '2020-09-07 23:18:16', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 10, '2020-09-07 23:18:16', '2020-09-10 21:44:23', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 9, '2020-09-07 23:18:16', '2020-09-10 21:44:23', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 8, '2020-09-07 23:18:16', '2020-09-10 21:44:23', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 13, '2020-09-07 23:18:16', '2020-09-10 21:44:23', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-09-07 23:18:16', '2020-09-07 23:33:16', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2020-09-07 23:18:16', '2020-09-07 23:33:16', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-09-07 23:18:16', '2020-09-07 23:33:16', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-09-07 23:18:16', '2020-09-07 23:33:16', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-09-07 23:18:17', '2020-09-10 21:44:23', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 7, '2020-09-07 23:18:19', '2020-09-10 21:44:23', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 11, '2020-09-07 23:18:21', '2020-09-10 21:44:23', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 12, '2020-09-07 23:18:22', '2020-09-10 21:44:23', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2020-09-07 23:18:24', '2020-09-07 23:33:16', 'voyager.hooks', NULL),
(15, 1, 'Products', '', '_self', 'voyager-bag', '#000000', NULL, 2, '2020-09-07 23:21:11', '2020-09-08 01:32:01', 'voyager.products.index', 'null'),
(16, 1, 'Blogs', '', '_self', 'voyager-laptop', '#000000', NULL, 5, '2020-09-07 23:24:43', '2020-09-10 21:44:23', 'voyager.blogs.index', 'null'),
(17, 1, 'Tags', '', '_self', 'voyager-tag', NULL, NULL, 6, '2020-09-07 23:29:50', '2020-09-10 21:44:23', 'voyager.tags.index', NULL),
(18, 1, 'Services', '', '_self', 'voyager-lab', NULL, NULL, 4, '2020-09-08 01:24:16', '2020-09-10 21:44:23', 'voyager.services.index', NULL),
(19, 1, 'Orders', '', '_self', 'voyager-basket', '#000000', NULL, 3, '2020-09-10 21:08:45', '2020-09-10 21:44:23', 'voyager.orders.index', 'null');

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
(130, '2020_08_25_030224_create_products_table', 2),
(133, '2020_08_25_065548_create_category__products_table', 3),
(200, '2014_10_12_000000_create_users_table', 4),
(201, '2014_10_12_100000_create_password_resets_table', 4),
(202, '2016_01_01_000000_add_voyager_user_fields', 4),
(203, '2016_01_01_000000_create_data_types_table', 4),
(204, '2016_01_01_000000_create_pages_table', 4),
(205, '2016_01_01_000000_create_posts_table', 4),
(206, '2016_02_15_204651_create_categories_table', 4),
(207, '2016_05_19_173453_create_menu_table', 4),
(208, '2016_10_21_190000_create_roles_table', 4),
(209, '2016_10_21_190000_create_settings_table', 4),
(210, '2016_11_30_135954_create_permission_table', 4),
(211, '2016_11_30_141208_create_permission_role_table', 4),
(212, '2016_12_26_201236_data_types__add__server_side', 4),
(213, '2017_01_13_000000_add_route_to_menu_items_table', 4),
(214, '2017_01_14_005015_create_translations_table', 4),
(215, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 4),
(216, '2017_03_06_000000_add_controller_to_data_types_table', 4),
(217, '2017_04_11_000000_alter_post_nullable_fields_table', 4),
(218, '2017_04_21_000000_add_order_to_data_rows_table', 4),
(219, '2017_07_05_210000_add_policyname_to_data_types_table', 4),
(220, '2017_08_05_000000_add_group_to_settings_table', 4),
(221, '2017_11_26_013050_add_user_role_relationship', 4),
(222, '2017_11_26_015000_create_user_roles_table', 4),
(223, '2018_03_11_000000_add_user_settings', 4),
(224, '2018_03_14_000000_add_details_to_data_types_table', 4),
(225, '2018_03_16_000000_make_settings_value_nullable', 4),
(226, '2019_08_19_000000_create_failed_jobs_table', 4),
(227, '2020_08_21_060657_create_blogs_table', 4),
(228, '2020_08_25_082543_create_category_product', 4),
(229, '2020_08_27_021957_create_products_table', 4),
(230, '2020_09_07_024205_create_tags_table', 4),
(231, '2020_09_07_095413_create_blog_tag', 4),
(232, '2020_09_08_072623_create_services_table', 5),
(234, '2020_09_08_100236_create_product_service', 6),
(235, '2020_09_10_080004_create_orders_table', 7),
(236, '2020_09_10_081445_create_order_product_table', 7),
(237, '2020_09_11_111122_add_quote_to_blogs_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `status` enum('UNCONFIRMED','CONFIRMED','PROCESSING','DELIVERY','COMPLETE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UNCONFIRMED',
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `phone_number`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Giang', 987314609, 'COMPLETE', '123/456/789 Đường ABC', '2020-09-10 21:42:00', '2020-09-10 21:42:44');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL);

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
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-09-07 23:18:22', '2020-09-07 23:18:22');

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
(1, 'browse_admin', NULL, '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(2, 'browse_bread', NULL, '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(3, 'browse_database', NULL, '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(4, 'browse_media', NULL, '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(5, 'browse_compass', NULL, '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(6, 'browse_menus', 'menus', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(7, 'read_menus', 'menus', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(8, 'edit_menus', 'menus', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(9, 'add_menus', 'menus', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(10, 'delete_menus', 'menus', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(11, 'browse_roles', 'roles', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(12, 'read_roles', 'roles', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(13, 'edit_roles', 'roles', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(14, 'add_roles', 'roles', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(15, 'delete_roles', 'roles', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(16, 'browse_users', 'users', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(17, 'read_users', 'users', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(18, 'edit_users', 'users', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(19, 'add_users', 'users', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(20, 'delete_users', 'users', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(21, 'browse_settings', 'settings', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(22, 'read_settings', 'settings', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(23, 'edit_settings', 'settings', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(24, 'add_settings', 'settings', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(25, 'delete_settings', 'settings', '2020-09-07 23:18:17', '2020-09-07 23:18:17'),
(26, 'browse_categories', 'categories', '2020-09-07 23:18:19', '2020-09-07 23:18:19'),
(27, 'read_categories', 'categories', '2020-09-07 23:18:19', '2020-09-07 23:18:19'),
(28, 'edit_categories', 'categories', '2020-09-07 23:18:19', '2020-09-07 23:18:19'),
(29, 'add_categories', 'categories', '2020-09-07 23:18:19', '2020-09-07 23:18:19'),
(30, 'delete_categories', 'categories', '2020-09-07 23:18:20', '2020-09-07 23:18:20'),
(31, 'browse_posts', 'posts', '2020-09-07 23:18:21', '2020-09-07 23:18:21'),
(32, 'read_posts', 'posts', '2020-09-07 23:18:21', '2020-09-07 23:18:21'),
(33, 'edit_posts', 'posts', '2020-09-07 23:18:21', '2020-09-07 23:18:21'),
(34, 'add_posts', 'posts', '2020-09-07 23:18:21', '2020-09-07 23:18:21'),
(35, 'delete_posts', 'posts', '2020-09-07 23:18:21', '2020-09-07 23:18:21'),
(36, 'browse_pages', 'pages', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(37, 'read_pages', 'pages', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(38, 'edit_pages', 'pages', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(39, 'add_pages', 'pages', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(40, 'delete_pages', 'pages', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(41, 'browse_hooks', NULL, '2020-09-07 23:18:24', '2020-09-07 23:18:24'),
(42, 'browse_products', 'products', '2020-09-07 23:21:11', '2020-09-07 23:21:11'),
(43, 'read_products', 'products', '2020-09-07 23:21:11', '2020-09-07 23:21:11'),
(44, 'edit_products', 'products', '2020-09-07 23:21:11', '2020-09-07 23:21:11'),
(45, 'add_products', 'products', '2020-09-07 23:21:11', '2020-09-07 23:21:11'),
(46, 'delete_products', 'products', '2020-09-07 23:21:11', '2020-09-07 23:21:11'),
(47, 'browse_blogs', 'blogs', '2020-09-07 23:24:43', '2020-09-07 23:24:43'),
(48, 'read_blogs', 'blogs', '2020-09-07 23:24:43', '2020-09-07 23:24:43'),
(49, 'edit_blogs', 'blogs', '2020-09-07 23:24:43', '2020-09-07 23:24:43'),
(50, 'add_blogs', 'blogs', '2020-09-07 23:24:43', '2020-09-07 23:24:43'),
(51, 'delete_blogs', 'blogs', '2020-09-07 23:24:43', '2020-09-07 23:24:43'),
(52, 'browse_tags', 'tags', '2020-09-07 23:29:50', '2020-09-07 23:29:50'),
(53, 'read_tags', 'tags', '2020-09-07 23:29:50', '2020-09-07 23:29:50'),
(54, 'edit_tags', 'tags', '2020-09-07 23:29:50', '2020-09-07 23:29:50'),
(55, 'add_tags', 'tags', '2020-09-07 23:29:50', '2020-09-07 23:29:50'),
(56, 'delete_tags', 'tags', '2020-09-07 23:29:50', '2020-09-07 23:29:50'),
(57, 'browse_services', 'services', '2020-09-08 01:24:16', '2020-09-08 01:24:16'),
(58, 'read_services', 'services', '2020-09-08 01:24:16', '2020-09-08 01:24:16'),
(59, 'edit_services', 'services', '2020-09-08 01:24:16', '2020-09-08 01:24:16'),
(60, 'add_services', 'services', '2020-09-08 01:24:16', '2020-09-08 01:24:16'),
(61, 'delete_services', 'services', '2020-09-08 01:24:16', '2020-09-08 01:24:16'),
(62, 'browse_orders', 'orders', '2020-09-10 21:08:45', '2020-09-10 21:08:45'),
(63, 'read_orders', 'orders', '2020-09-10 21:08:45', '2020-09-10 21:08:45'),
(64, 'edit_orders', 'orders', '2020-09-10 21:08:45', '2020-09-10 21:08:45'),
(65, 'add_orders', 'orders', '2020-09-10 21:08:45', '2020-09-10 21:08:45'),
(66, 'delete_orders', 'orders', '2020-09-10 21:08:45', '2020-09-10 21:08:45');

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
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
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
(1, 1, 2, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-09-07 23:18:21', '2020-09-08 02:23:09'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\r\n                <h2>We can use all kinds of format!</h2>\r\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-09-07 23:18:21', '2020-09-07 23:18:21'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-09-07 23:18:21', '2020-09-07 23:18:21'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\r\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\r\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-09-07 23:18:21', '2020-09-07 23:18:21');

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
(2, NULL, 'Xôi Ép Tam Sắc', 1500, 'Xôi Ép Tam Sắc', '<p>X&ocirc;i &Eacute;p Tam Sắc</p>', 'products\\September2020\\cC5oxKU09AIGEcdqErQJ.jpg', 'xoi-ep-tam-sac', 'inStock', 1, '[\"products\\\\September2020\\\\nigbDl0nf8V3dP0VQaRQ.jpg\",\"products\\\\September2020\\\\Tm6P6gbwIt40SorT0ESu.jpg\"]', '2020-09-08 00:35:45', '2020-09-10 03:16:07'),
(3, NULL, 'Chè Sâm Bổ Lượng', 1500, 'Chè Sâm Bổ Lượng', '<p>Ch&egrave; S&acirc;m Bổ Lượng</p>', 'products\\September2020\\E51EB4JPQ8D8If2sHxyF.jpg', 'che-sam-bo-luong', 'inStock', 1, '[\"products\\\\September2020\\\\5IfDGjXfxZZYzNE3YubC.jpg\",\"products\\\\September2020\\\\bTfhmXgzNJLZagYdmRju.jpg\",\"products\\\\September2020\\\\fCnOIpZmPJk2mEN2hWB1.jpg\"]', '2020-09-11 17:57:57', '2020-09-11 17:57:57'),
(4, NULL, 'Rau Câu 3d', 1500, 'Rau Câu 3d', '<p>Rau C&acirc;u 3d</p>', 'products\\September2020\\2f1kjHLXLQhUgcqqY7I2.jpg', 'rau-cau-3d', 'inStock', 1, '[\"products\\\\September2020\\\\ZpgufTO0qGFilnxpstDx.jpg\",\"products\\\\September2020\\\\Xaqho0UCpgfyCk6WFsQw.jpg\",\"products\\\\September2020\\\\mgTw8IsusbmLo0aOhtZS.jpg\",\"products\\\\September2020\\\\z4C2BRXlCY3vR8jyGrYU.jpg\"]', '2020-09-11 18:09:58', '2020-09-11 18:09:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_service`
--

CREATE TABLE `product_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `service_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_service`
--

INSERT INTO `product_service` (`id`, `product_id`, `service_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 3, NULL, NULL),
(5, 2, 4, NULL, NULL),
(6, 2, 5, NULL, NULL),
(7, 3, 5, NULL, NULL),
(8, 3, 1, NULL, NULL),
(9, 3, 2, NULL, NULL),
(10, 3, 3, NULL, NULL),
(11, 3, 4, NULL, NULL),
(12, 4, 1, NULL, NULL),
(13, 4, 2, NULL, NULL),
(14, 4, 3, NULL, NULL),
(15, 4, 4, NULL, NULL),
(16, 4, 5, NULL, NULL);

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
(1, 'admin', 'Administrator', '2020-09-07 23:17:05', '2020-09-07 23:17:05'),
(2, 'user', 'Normal User', '2020-09-07 23:18:17', '2020-09-07 23:18:17');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `short_description`, `description`, `image`, `images`, `slug`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'CÚNG Thôi Nôi Bé Trai', 1500, 'Xôi Ép Tam Sắc', '<p>X&ocirc;i &Eacute;p Tam Sắc</p>', 'services\\September2020\\1hqltfac3Rl76yuSFkF3.jpg', '[\"services\\\\September2020\\\\HZkU2kXY0RN65VjwAAN3.jpg\",\"services\\\\September2020\\\\zfObYavjFkEUxiZsJNHO.jpg\",\"services\\\\September2020\\\\3gcWnSPPpi2j8NVVFlAH.jpg\",\"services\\\\September2020\\\\KL7YtiuyHB9GC7CtEYq7.jpg\"]', 'cung-thoi-noi-be-trai', 1, '2020-09-08 02:31:51', '2020-09-11 02:17:40'),
(2, 'Cúng Khai Trương', 1500, 'BÀN CÚNG KHAI TRƯƠNG', '<p>B&Agrave;N C&Uacute;NG KHAI TRƯƠNG</p>', 'services\\September2020\\n06KC3Hi49i5rWsOCeFy.jpg', '[\"services\\\\September2020\\\\6DnhXSKRO51NrprDae0l.jpg\",\"services\\\\September2020\\\\2mMMeZHrgm47KyxWsxGY.jpg\",\"services\\\\September2020\\\\lYKeGkvQwK4LA5PLMXAw.jpg\",\"services\\\\September2020\\\\GOef1cVlEfK1dw1sU45G.jpg\"]', 'cung-khai-truong', 1, '2020-09-08 03:18:45', '2020-09-11 02:16:43'),
(3, 'Cúng Động Thổ', 1500, 'Cúng Động Thổ', '<p>C&uacute;ng Động Thổ</p>', 'services\\September2020\\i4X8tJaE2oqAHTo4sozL.jpg', '[\"services\\\\September2020\\\\sz1qmH9Olx5PPsJK25Go.jpg\",\"services\\\\September2020\\\\i2EYLAUy5ePCR2qbJb6w.jpg\",\"services\\\\September2020\\\\wPBMWoLSOvvIj7AFaNNw.jpg\",\"services\\\\September2020\\\\gvD8p2lD71kTB9xQ8dIH.jpg\"]', 'cung-dong-tho', 1, '2020-09-11 02:13:49', '2020-09-11 02:13:49'),
(4, 'Cúng Nhập Trạch', 1500, 'Cúng Nhập Trạch', '<p>C&uacute;ng Nhập Trạch</p>', 'services\\September2020\\i8YisaKMcC2y1EaayehZ.jpg', '[\"services\\\\September2020\\\\5Z4NA6TEkVsYC2c4tCGn.jpg\",\"services\\\\September2020\\\\bA9IYsQ9m6vzwVpg0WGm.jpg\",\"services\\\\September2020\\\\7tGV1s6CqfwNQ5XQ0yzS.jpg\",\"services\\\\September2020\\\\ow6aSRTdnGL72bSQvLEQ.jpg\"]', 'cung-nhap-trach', 1, '2020-09-11 02:15:08', '2020-09-11 02:15:08'),
(5, 'Cúng Thôi Nôi Bé Gái', 1500, 'CÚNG Thôi Nôi Bé Gái', '<p>C&Uacute;NG Th&ocirc;i N&ocirc;i B&eacute; G&aacute;i</p>', 'services\\September2020\\VZ7es2vVGxxohKTKMkiv.jpg', '[\"services\\\\September2020\\\\EcY1fyOjIaJ6ttwzUR7S.jpg\",\"services\\\\September2020\\\\9ml9USWJCIg4IZQSdVhd.jpg\",\"services\\\\September2020\\\\gNFKgh2Z2fbw4GjNbQGj.jpg\",\"services\\\\September2020\\\\2ofEJ40WZQUnQoGMIUiX.jpg\"]', 'cung-thoi-noi-be-gai', 1, '2020-09-11 02:18:55', '2020-09-11 18:21:08');

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
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 8, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.site_phone', 'Site Phone', '0936 156 349', NULL, 'text', 4, 'Site'),
(12, 'site.site_address', 'Site Address', '86A Đường 30/4 ,phường Phú Hoà,Thủ Dầu Một,Bình Dương', NULL, 'text', 7, 'Site'),
(13, 'site.site_phone2', 'Site Phone 2', '0936 667 668', NULL, 'text', 6, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `parent_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Món Xôi', 'mon-xoi', '2020-09-09 03:19:20', '2020-09-11 04:02:20'),
(2, NULL, 'Món Chè', 'mon-che', '2020-09-09 03:19:31', '2020-09-11 04:02:32'),
(3, NULL, 'Rau Câu 3D', 'rau-cau-3d', '2020-09-09 03:20:13', '2020-09-11 04:02:46');

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
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-09-07 23:18:22', '2020-09-07 23:18:22'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-09-07 23:18:23', '2020-09-07 23:18:23'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-09-07 23:18:23', '2020-09-07 23:18:23');

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
(1, 1, 'admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$SIMmfsJpWBZERqm2v5M8LuiOtkwOiae5idxy29qFClnnyPDTHInNi', NULL, NULL, '2020-09-07 23:17:05', '2020-09-07 23:17:06');

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
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
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
-- Indexes for table `product_service`
--
ALTER TABLE `product_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_name_unique` (`name`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `product_service`
--
ALTER TABLE `product_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
