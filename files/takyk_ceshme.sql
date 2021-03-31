-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 12, 2020 at 11:01 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.32-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takyk_ceshme`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1471931842),
('admin', '2', 1478517997),
('admin', '5', 1571409566),
('admin', '6', 1573014830),
('admin', '7', 1573014850),
('admin', '8', 1573014865),
('admin', '9', 1573014881),
('admin', '10', 1573014919),
('admin', '11', 1573014943),
('admin', '13', 1573014985),
('admin', '14', 1573015022),
('admin', '15', 1573015045);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Administrator', NULL, NULL, 1471931740, 1591681881),
('app-frontend/site/about', 2, 'app-frontend/site/about', '', '', 1495023720, 1495023720),
('app-frontend/site/index', 2, 'app-frontend/site/index', '', '', 1478444929, 1491284051),
('guest', 1, 'guest', '', '', 1478930957, 1512808172),
('app-frontend/site/contact', 2, 'app-frontend/site/contact', '', '', 1511111559, 1511111559),
('app-backend/image/*', 2, 'app-backend/image/*', '', '', 1511899732, 1511899732),
('app-backend/category/*', 2, 'app-backend/image/*', '', '', 1511899760, 1511899760),
('app-backend/item/*', 2, 'app-backend/item/*', '', '', 1511899788, 1511899788),
('app-backend/owner-contact/*', 2, 'app-backend/owner-contact/*', '', '', 1511899825, 1511899825),
('app-backend/document/*', 2, 'app-backend/document/*', '', '', 1511988389, 1511988389),
('app-backend/banner-type/*', 2, 'app-backend/banner-type/*', '', '', 1512020018, 1512020018),
('app-frontend/item/*', 2, 'app-frontend/item/*', '', '', 1512808160, 1512808160),
('app-backend/banner/*', 2, 'app-backend/banner/*', '', '', 1514462612, 1514462612),
('app-backend/location/*', 2, 'app-backend/location/*', '', '', 1560463530, 1560463530),
('app-backend/partners/*', 2, 'app-backend/partners/*', NULL, NULL, 1591675283, 1591675283);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'app-frontend/flat-offer/add-room'),
('admin', 'app-frontend/flat-offer/create'),
('admin', 'app-frontend/flat-offer/index'),
('admin', 'app-frontend/flat-offer/update'),
('admin', 'app-frontend/flat-offer/view'),
('admin', 'app-frontend/listing/post'),
('admin', 'app-frontend/site/index'),
('admin', 'guest'),
('admin', 'indexchecker/default/searchform'),
('admin', 'main/amz-product-quality/credentials'),
('admin', 'main/amz-product-quality/index'),
('admin', 'main/amz-product/index'),
('admin', 'main/amz-product/product-keyword'),
('admin', 'main/amz-product/update'),
('admin', 'main/amz-product/update-seller-products'),
('admin', 'main/amz-product/view'),
('admin', 'seller'),
('admin', 'seller/amz-reviewer/index'),
('admin', 'seller/amz-seller-request/create'),
('admin', 'seller/amz-seller-request/index'),
('admin', 'seller/amz-seller-request/update'),
('admin', 'seller/amz-seller-request/view'),
('guest', 'app-frontend/site/about'),
('guest', 'app-frontend/site/index'),
('guest', 'main/amz-product-quality/cron-quality-monitor'),
('guest', 'main/amz-product/cron-keyword-monitor'),
('guest', 'main/amz-product/monitor-product-reviews'),
('guest', 'seller/amz-seller-monitor/cron-monitor-user-products'),
('guest', 'seller/amz-seller-monitor/cron-seller-monitor'),
('seller', 'app-frontend/site/index'),
('seller', 'guest'),
('seller', 'indexchecker/default/searchform'),
('seller', 'main/amz-ad/keyword-search'),
('seller', 'main/amz-product-quality/credentials'),
('seller', 'main/amz-product-quality/index'),
('seller', 'main/amz-product-quality/product-avg-review-keyword'),
('seller', 'main/amz-product-quality/product-important-keyword'),
('seller', 'main/amz-product/index'),
('seller', 'main/amz-product/keyword-monitor'),
('seller', 'main/amz-product/product-keyword'),
('seller', 'main/amz-product/update'),
('seller', 'main/amz-product/update-seller-products'),
('seller', 'main/amz-product/view'),
('seller', 'seller/amz-seller-monitor/create'),
('seller', 'seller/amz-seller-monitor/index'),
('seller', 'seller/amz-seller-monitor/update'),
('seller', 'seller/amz-seller-monitor/view'),
('seller', 'seller/amz-seller-request/update'),
('guest', 'app-frontend/site/contact'),
('admin', 'app-backend/image/*'),
('admin', 'app-backend/category/*'),
('admin', 'app-backend/item/*'),
('admin', 'app-backend/owner-contact/*'),
('admin', 'app-backend/document/*'),
('admin', 'app-backend/banner-type/*'),
('guest', 'app-frontend/item/*'),
('admin', 'app-backend/banner/*'),
('admin', 'app-backend/location/*');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isProductOwner', 'O:28:\"common\\rbac\\ProductOwnerRule\":3:{s:4:\"name\";s:14:\"isProductOwner\";s:9:\"createdAt\";i:1481356763;s:9:\"updatedAt\";i:1481356763;}', 1481356763, 1481356763);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `company` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `format_type` int(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_to_document`
--

CREATE TABLE `tbl_banner_to_document` (
  `id` int(11) NOT NULL,
  `banner_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner_type`
--

CREATE TABLE `tbl_banner_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `is_mobile_enabled` tinyint(1) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `url_prefix` varchar(255) DEFAULT NULL,
  `related_category_id` int(5) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `top` tinyint(1) DEFAULT NULL,
  `sort_order` int(3) DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `url_prefix`, `related_category_id`, `parent_id`, `code`, `top`, `sort_order`, `status`, `date_created`, `date_modified`, `edited_username`, `create_username`) VALUES
(1, 'item', NULL, NULL, 'services', 0, NULL, 1, '2020-07-20 22:21:24', '2020-07-20 22:21:24', NULL, NULL),
(2, 'item', NULL, NULL, 'our_works', 0, NULL, 1, '2020-07-20 12:48:32', '2020-07-20 12:48:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_field`
--

CREATE TABLE `tbl_category_field` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `target_model` varchar(255) DEFAULT NULL,
  `field_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_field_lang`
--

CREATE TABLE `tbl_category_field_lang` (
  `id` int(11) NOT NULL,
  `category_field_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `field_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_lang`
--

CREATE TABLE `tbl_category_lang` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_lang`
--

INSERT INTO `tbl_category_lang` (`id`, `category_id`, `language`, `name`, `description`, `alias`, `meta_description`, `meta_keyword`) VALUES
(1, 1, 'tk', 'Hyzmatlar', 'Hyzmatlar', 'hyzmatlar', 'hyzmatlar', 'hyzmatlar'),
(2, 2, 'tk', 'Bizin işlerimiz', 'Bizin işlerimiz', 'bizin-ishlerimiz', 'Bizin işlerimiz', 'Bizin işlerimiz'),
(3, 2, 'ru', 'Наши работы', 'Наши работы', 'nashi-raboty', 'Наши работы', 'Наши работы'),
(4, 2, 'en', 'Our wokrs', 'Our wokrs', 'our-works', 'Our wokrs', 'Our wokrs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_to_document`
--

CREATE TABLE `tbl_category_to_document` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category_to_document`
--

INSERT INTO `tbl_category_to_document` (`id`, `category_id`, `document_id`) VALUES
(1, 1, 0),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `comment` text,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `like_count` int(11) DEFAULT '0',
  `dislike_count` int(11) DEFAULT '0',
  `related_to` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip_added` varchar(15) DEFAULT NULL,
  `ip_modified` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_competition`
--

CREATE TABLE `tbl_competition` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `content_item_id` int(11) DEFAULT NULL,
  `season_id` int(11) DEFAULT NULL,
  `is_team` tinyint(1) NOT NULL,
  `gender` int(2) DEFAULT NULL,
  `is_international` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_competition_group`
--

CREATE TABLE `tbl_competition_group` (
  `id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_competition_phase`
--

CREATE TABLE `tbl_competition_phase` (
  `id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `type` int(2) DEFAULT NULL COMMENT 'event type example: playoff,league',
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_competition_to_document`
--

CREATE TABLE `tbl_competition_to_document` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_competition_to_participant`
--

CREATE TABLE `tbl_competition_to_participant` (
  `id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `type` int(3) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL COMMENT 'sport_type'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_competition_to_tag`
--

CREATE TABLE `tbl_competition_to_tag` (
  `competition_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_competition_to_team`
--

CREATE TABLE `tbl_competition_to_team` (
  `id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL COMMENT 'sport_type'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `federation_id` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `org_filename` varchar(255) DEFAULT NULL,
  `size` decimal(15,2) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `cropped_path` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `video_document_id` int(11) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_document`
--

INSERT INTO `tbl_document` (`id`, `filename`, `org_filename`, `size`, `path`, `cropped_path`, `type`, `video_document_id`, `code`) VALUES
(1, 'efce34caafae372109235102e83c728a.png', 'speed_opti.png', '3408.00', 'item/efce34caafae372109235102e83c728a.png', NULL, 'image/png', NULL, NULL),
(2, 'e464e2953a8a6a31bba4f5b530f8e452.jpeg', 'marketing.jpeg', '7620.00', 'item/e464e2953a8a6a31bba4f5b530f8e452.jpeg', NULL, 'image/jpeg', NULL, NULL),
(3, '17e078d0dd10d4eb37d3189e2cbc01fa.png', 'seo.png', '6793.00', 'item/17e078d0dd10d4eb37d3189e2cbc01fa.png', NULL, 'image/png', NULL, NULL),
(4, 'de70aec2151c0b81a32d820f08107f0f.jpeg', 'marketing.jpeg', '7620.00', 'item/de70aec2151c0b81a32d820f08107f0f.jpeg', NULL, 'image/jpeg', NULL, NULL),
(5, '0676e9dcda598258491dfb2a0cf980aa.png', 'content_marketing.png', '3236.00', 'item/0676e9dcda598258491dfb2a0cf980aa.png', NULL, 'image/png', NULL, NULL),
(6, '077aea3e710a55810e2a5cc7fafc48fc.png', 'ozisim.com.png', '1534612.00', 'item/077aea3e710a55810e2a5cc7fafc48fc.png', NULL, 'image/png', NULL, NULL),
(8, '57222288e7a3d2ab4d777b7ff850950c.png', 'turkmenteatr.png', '281539.00', 'item/57222288e7a3d2ab4d777b7ff850950c.png', NULL, 'image/png', NULL, NULL),
(9, '7baa29bc45453473f55e99cd52c5ee4b.png', 'awtoulag.png', '230164.00', 'item/7baa29bc45453473f55e99cd52c5ee4b.png', NULL, 'image/png', NULL, NULL),
(10, 'e088e1a5fece93861bae52bb6522041a.jpg', 'begleryoly.jpg', '78757.00', 'item/e088e1a5fece93861bae52bb6522041a.jpg', NULL, 'image/jpeg', NULL, NULL),
(11, '6b8c68a14f95829d6d1e3b4891ffd56a.jpg', 'tmtextile.jpg', '74903.00', 'item/6b8c68a14f95829d6d1e3b4891ffd56a.jpg', NULL, 'image/jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_document_lang`
--

CREATE TABLE `tbl_document_lang` (
  `id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dynamic_fields`
--

CREATE TABLE `tbl_dynamic_fields` (
  `model` varchar(255) NOT NULL COMMENT 'Model name',
  `model_id` int(11) NOT NULL COMMENT 'Model primary key',
  `field` varchar(255) NOT NULL COMMENT 'Field name',
  `value` text COMMENT 'Field Value'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `competition_id` int(11) NOT NULL,
  `competition_group_id` int(11) DEFAULT NULL,
  `competition_phase_id` int(11) DEFAULT NULL,
  `season_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'sport_type',
  `start_time` datetime NOT NULL,
  `parent_id` int(11) DEFAULT NULL COMMENT 'for playoff type events',
  `type` int(2) DEFAULT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_to_participant`
--

CREATE TABLE `tbl_event_to_participant` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `type` int(3) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `score_for` int(11) DEFAULT NULL,
  `score_against` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `result_state` int(2) DEFAULT NULL,
  `category_id` int(11) NOT NULL COMMENT 'sport_type'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_to_team`
--

CREATE TABLE `tbl_event_to_team` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `competition_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `score_for` int(11) DEFAULT NULL,
  `score_against` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `result_state` int(2) DEFAULT NULL,
  `category_id` int(11) NOT NULL COMMENT 'sport_type'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_federation`
--

CREATE TABLE `tbl_federation` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `visited_count` int(11) DEFAULT '0',
  `sort_order` int(3) DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_federation_lang`
--

CREATE TABLE `tbl_federation_lang` (
  `id` int(11) NOT NULL,
  `federation_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `content` text,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_federation_to_category`
--

CREATE TABLE `tbl_federation_to_category` (
  `id` int(11) NOT NULL,
  `federation_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_federation_to_document`
--

CREATE TABLE `tbl_federation_to_document` (
  `id` int(11) NOT NULL,
  `federation_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `size` int(11) DEFAULT '1',
  `link` varchar(255) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_lang`
--

CREATE TABLE `tbl_image_lang` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_to_document`
--

CREATE TABLE `tbl_image_to_document` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_video_to_document`
--

CREATE TABLE `tbl_image_video_to_document` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `category_id` int(5) NOT NULL,
  `parent_category_id` int(11) DEFAULT NULL,
  `visited_count` int(11) DEFAULT '0',
  `sort_order` int(3) DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `is_main` tinyint(1) DEFAULT '0',
  `is_menu` tinyint(1) DEFAULT '0',
  `type` int(11) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`id`, `alias`, `category_id`, `parent_category_id`, `visited_count`, `sort_order`, `status`, `is_main`, `is_menu`, `type`, `author`, `location`, `edited_username`, `create_username`, `date_created`, `date_modified`) VALUES
(1793, NULL, 1, NULL, 0, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 12:22:00', '2020-07-20 12:22:00'),
(1794, NULL, 1, NULL, 1, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 17:22:31', '2020-07-20 17:22:31'),
(1795, NULL, 1, NULL, 1, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 12:23:08', '2020-07-20 12:23:08'),
(1796, NULL, 1, NULL, 0, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 12:23:50', '2020-07-20 12:23:50'),
(1797, NULL, 2, NULL, 0, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 13:02:25', '2020-07-20 13:02:25'),
(1802, NULL, 2, NULL, 0, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 13:03:12', '2020-07-20 13:03:12'),
(1803, NULL, 2, NULL, 0, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 13:03:46', '2020-07-20 13:03:46'),
(1804, NULL, 2, NULL, 0, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 13:04:07', '2020-07-20 13:04:07'),
(1805, NULL, 2, NULL, 0, 0, 1, 0, 0, 2, NULL, NULL, NULL, NULL, '2020-07-20 13:04:29', '2020-07-20 13:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_lang`
--

CREATE TABLE `tbl_item_lang` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_item_lang`
--

INSERT INTO `tbl_item_lang` (`id`, `item_id`, `language`, `title`, `description`, `content`) VALUES
(1, 1793, 'tk', 'Speed Optimization', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', ''),
(2, 1794, 'tk', 'Marketing Analysis', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', ''),
(3, 1795, 'tk', 'SEO and Backlinks', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', ''),
(4, 1796, 'tk', 'Content Marketing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', ''),
(5, 1797, 'tk', 'ozisim.com', 'ozisim.com', ''),
(10, 1802, 'tk', 'Turkmen teatrlar', 'Turkmen teatrlar', ''),
(11, 1803, 'tk', 'Awto ulag', 'Awto ulag', '<p>Awto ulag</p>\r\n'),
(12, 1804, 'tk', 'Begler yoly', 'Begler yoly', '<p>Begler yoly</p>\r\n'),
(13, 1805, 'tk', 'Turkmen textile', 'Turkmen textile', '<p>Turkmen textile</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_to_comment`
--

CREATE TABLE `tbl_item_to_comment` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_to_document`
--

CREATE TABLE `tbl_item_to_document` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_item_to_document`
--

INSERT INTO `tbl_item_to_document` (`id`, `item_id`, `document_id`) VALUES
(1, 1793, 1),
(2, 1795, 3),
(3, 1794, 4),
(4, 1796, 5),
(5, 1797, 6),
(6, 1798, 7),
(7, 1799, 7),
(8, 1800, 7),
(9, 1801, 7),
(10, 1802, 8),
(11, 1803, 9),
(12, 1804, 10),
(13, 1805, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_to_tag`
--

CREATE TABLE `tbl_item_to_tag` (
  `item_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `id` int(11) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `category_id` int(5) NOT NULL,
  `parent_category_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `visited_count` int(11) DEFAULT '0',
  `sort_order` int(3) DEFAULT '0',
  `status` tinyint(1) NOT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location_lang`
--

CREATE TABLE `tbl_location_lang` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location_to_document`
--

CREATE TABLE `tbl_location_to_document` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `item_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_item`
--

CREATE TABLE `tbl_menu_item` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,5) DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_item_to_document`
--

CREATE TABLE `tbl_menu_item_to_document` (
  `id` int(11) NOT NULL,
  `menu_item_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_to_document`
--

CREATE TABLE `tbl_menu_to_document` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_merchant`
--

CREATE TABLE `tbl_merchant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `latest_order_number` bigint(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_owner_contact`
--

CREATE TABLE `tbl_owner_contact` (
  `id` int(11) NOT NULL,
  `my_title` varchar(255) DEFAULT NULL,
  `my_description` text,
  `my_email` varchar(255) DEFAULT NULL,
  `my_phone` varchar(255) DEFAULT NULL,
  `my_address` varchar(255) DEFAULT NULL,
  `my_latitude` decimal(10,7) DEFAULT NULL,
  `my_longitude` decimal(10,7) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participant`
--

CREATE TABLE `tbl_participant` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `gender` int(2) NOT NULL,
  `birthdate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participant_to_document`
--

CREATE TABLE `tbl_participant_to_document` (
  `id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participant_type`
--

CREATE TABLE `tbl_participant_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `description` text,
  `merchant_order_number` varchar(255) DEFAULT NULL,
  `merchant_success_url` text,
  `merchant_failure_url` text,
  `submitted_order_number` varchar(255) DEFAULT NULL,
  `response_order_id` varchar(255) DEFAULT NULL,
  `response_form_url` text,
  `response_error_code` varchar(255) DEFAULT NULL,
  `status_response_json` text,
  `amount` decimal(10,3) NOT NULL,
  `currency_code` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_finished` datetime DEFAULT NULL,
  `date_merchant_alerted` datetime DEFAULT NULL,
  `edited_username` varchar(255) DEFAULT NULL,
  `create_username` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `payment_type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_type`
--

CREATE TABLE `tbl_payment_type` (
  `id` int(11) NOT NULL,
  `code` varchar(25) NOT NULL,
  `status` int(5) DEFAULT '0',
  `type` int(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_type_lang`
--

CREATE TABLE `tbl_payment_type_lang` (
  `id` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_point`
--

CREATE TABLE `tbl_point` (
  `id` int(11) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_point_lang`
--

CREATE TABLE `tbl_point_lang` (
  `id` int(11) NOT NULL,
  `point_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_route`
--

CREATE TABLE `tbl_route` (
  `id` int(11) NOT NULL,
  `route_no` int(11) NOT NULL,
  `from_point_id` int(11) NOT NULL,
  `to_point_id` int(11) NOT NULL,
  `length` decimal(10,3) NOT NULL,
  `cycle_min` int(11) NOT NULL,
  `planned_period_min` int(11) NOT NULL,
  `price` decimal(10,3) DEFAULT NULL,
  `region` int(5) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `waypoints` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_season`
--

CREATE TABLE `tbl_season` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `competition_id` int(11) NOT NULL COMMENT 'sport_type',
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seat`
--

CREATE TABLE `tbl_seat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `label_x` varchar(25) DEFAULT NULL,
  `label_y` varchar(25) DEFAULT NULL,
  `seat_group_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seat_group`
--

CREATE TABLE `tbl_seat_group` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `default_price` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seat_group_lang`
--

CREATE TABLE `tbl_seat_group_lang` (
  `id` int(11) NOT NULL,
  `seat_group_id` int(11) NOT NULL,
  `language` varchar(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `is_serialized` tinyint(1) NOT NULL DEFAULT '0',
  `type` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_show`
--

CREATE TABLE `tbl_show` (
  `id` int(11) NOT NULL,
  `content_item_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `duration_min` int(5) DEFAULT NULL,
  `latest_event_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `frequency` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL COMMENT 'sport_type',
  `content_item_id` int(11) DEFAULT NULL,
  `gender` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_to_participant`
--

CREATE TABLE `tbl_team_to_participant` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `type` int(3) NOT NULL,
  `status` int(3) DEFAULT NULL,
  `date_joined` datetime DEFAULT NULL,
  `date_leaved` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_to_tag`
--

CREATE TABLE `tbl_team_to_tag` (
  `team_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticket`
--

CREATE TABLE `tbl_ticket` (
  `id` int(11) NOT NULL,
  `unique_code` varchar(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(5) DEFAULT '0',
  `email_alerted_date` datetime DEFAULT NULL,
  `pdf_path` varchar(255) DEFAULT NULL,
  `qr_code_path` varchar(255) DEFAULT NULL,
  `date_approved` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `total_price` decimal(15,2) DEFAULT NULL,
  `total_discount` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(1, 'lzYGHsFb1e6M54rr4QgdhcitRH4TrNk9', 1471929324, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  `last_login_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`) VALUES
(1, 'batya224', 'batya224@mail.ru', '$2y$10$.8QtXdLiwcbduwyaT/BhWOupJRC66T3S5m.x9Mq7FWd6ntEKylQhq', 'UfX52KTSHBhkpZu1cbLNb-VyEttazrEe', 1471929324, '', 0, '::1', 1471929324, 1471929324, 1, 1595227259),
(2, 'tester', 'batya224@gmail.com', '$2y$10$8x5rVQL4l2ZsrO1QDzjx5.35NfM6x7L2rzUTDKm3HykXxw7FrV28e', 'vOTo5NrkhLWncKQNsA5OEi4dZS5bW5Y6', 1522599773, '', 0, '::1', 1522599773, 1522599773, 0, 0),
(3, 'tester2', 'ttt@mail.ru', '$2y$10$Ka6SBFQKUEybVS9KO6vUj.8GcA.SbsxZYIHW7RWzvzBgIAdvGT9sC', 'LPdbJBPgqllcEq86AKUi8wdGRgTQndaR', 1522600244, '', 0, '::1', 1522600244, 1522600244, 0, 0),
(5, 'hojaberdi', 'hojaberdi@gmail.com', '$2y$10$J7Uh5ZItvcfZDltVLHauduSHik68LFO5RrDbJpv4kHCAAnU3LCmIO', 'DWVSSgPH9V4lR4ZVXjjbdpZML2OvR_gu', 1571409547, '', 0, '185.69.185.118', 1571409547, 1571409547, 0, 1589860078),
(6, 'sport_1', 'test@mail.ru', '$2y$10$9mZfl4JW9T8E7ISaex4XTOEMoTGjruKbSpWq1H5zGV24I9Rdk3zX6', '1WoTl23qhWBjdh9mgENNRhoXqGDsAEtP', 1573014802, '', 0, '95.85.97.227', 1573014802, 1573014802, 0, 1578650586),
(7, 'sport_2', 'test2@mail.ru', '$2y$10$oDX.MFpXq3h5/dQ9fSOJ/uAo6i4P2hagVuoiT1rUFn0iVzcQq4pK2', 'wQXF1R42LQJHppxGkecQMmb4NNi7ll5E', 1573014844, '', 0, '95.85.97.227', 1573014844, 1573014844, 0, 0),
(8, 'sport_3', 'test3@mail.ru', '$2y$10$DAJuJVdcBPUhSgKOIEDmwuN2qJjLAIMBw0j4RcfV1hsGQGVRJqsge', 'C_Le8--9JoAHnwHkaL5EhjUqyqw5qor5', 1573014861, '', 0, '95.85.97.227', 1573014861, 1573014861, 0, 0),
(9, 'sport_4', 'test4@mail.ru', '$2y$10$tIgQwj2aDVrKasdYATTjeO7P06O//q60jX0UayBvynSQ0Xyg8oQqa', 'Uxiziy9yfijJH-o-FN-DqJqBNXXgOP6K', 1573014876, '', 0, '95.85.97.227', 1573014876, 1573014876, 0, 0),
(10, 'youth_1', 'youth@mail.ru', '$2y$10$MqswpbJFUHcWToZme.76Cu4ebaycR1uxl.78ownmY5I/reZrz/Tc.', 'HNzy2gP4gUnjYwGW_YavWIlN2bROZzDf', 1573014912, '', 0, '95.85.97.227', 1573014912, 1573014912, 0, 0),
(11, 'youth_2', 'youth2@mail.ru', '$2y$10$jopbhAH/6qzgJ.9wwz1UHO86YT.dyvNONCYDkuSs6jI4Y9DLUzXHO', 'qACA9fLoGF_rE4apOMl06MfK3L5EBg7x', 1573014940, '', 0, '95.85.97.227', 1573014940, 1573014940, 0, 0),
(12, 'youth_3', 'youth3@mail.ru', '$2y$10$jLgcW4V.9j/aiBjv6d1cbOhUYdimnWUwVll6ZzZdfsJTH2iWnjXI6', 'of1Zv7P99WQpA-fhsXAjgiyZp0m4cMz5', 1573014959, '', 0, '95.85.97.227', 1573014959, 1573014959, 0, 0),
(14, 'school_1', 'school@mail.ru', '$2y$10$n/ycRTQ9sDxFBoRTCW6.B.AoAUZPoXx.FxTv6rrse/Yz0Ivh9Tpfq', 'IosB2XESt0yFIm5wNdrf2kcUsMetO8Jz', 1573015018, '', 0, '95.85.97.227', 1573015018, 1573015018, 0, 0),
(15, 'school_2', 'school2@mail.ru', '$2y$10$oPwAXXEfrB.HFIufBRayXuCcN32qKDoAzNXpyKA3L0Bp8fH.edDya', '9GbSYORb-VGrM4oK9ut2g3_RbcMhCKMM', 1573015041, '', 0, '95.85.97.227', 1573015041, 1573015041, 0, 0),
(16, 'sport_5', 'test5@mail.ru', '$2y$10$xWQxU2.XKq/9idTgmfxO7ODOIMcrtMu6H48rI1uRwMWNWqwcRR1d6', '7HrFhONSYZaK0XJrmCJ6iMXvjTRWzvhL', 1573015307, '', 0, '95.85.97.227', 1573015307, 1573015307, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner_to_document`
--
ALTER TABLE `tbl_banner_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner_type`
--
ALTER TABLE `tbl_banner_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category_field`
--
ALTER TABLE `tbl_category_field`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`category_id`);

--
-- Indexes for table `tbl_category_field_lang`
--
ALTER TABLE `tbl_category_field_lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category_lang`
--
ALTER TABLE `tbl_category_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`category_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_category_to_document`
--
ALTER TABLE `tbl_category_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_competition`
--
ALTER TABLE `tbl_competition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_competition_group`
--
ALTER TABLE `tbl_competition_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_competition_phase`
--
ALTER TABLE `tbl_competition_phase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_competition_to_document`
--
ALTER TABLE `tbl_competition_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_competition_to_participant`
--
ALTER TABLE `tbl_competition_to_participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_competition_to_tag`
--
ALTER TABLE `tbl_competition_to_tag`
  ADD PRIMARY KEY (`competition_id`,`tag_id`);

--
-- Indexes for table `tbl_competition_to_team`
--
ALTER TABLE `tbl_competition_to_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_document_lang`
--
ALTER TABLE `tbl_document_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`document_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_dynamic_fields`
--
ALTER TABLE `tbl_dynamic_fields`
  ADD PRIMARY KEY (`model`,`model_id`,`field`),
  ADD KEY `ix_dynamic_fields_model_id` (`model`,`model_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event_to_participant`
--
ALTER TABLE `tbl_event_to_participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event_to_team`
--
ALTER TABLE `tbl_event_to_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_federation`
--
ALTER TABLE `tbl_federation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `primary_status` (`status`,`id`),
  ADD UNIQUE KEY `primary_sort_order` (`id`,`sort_order`),
  ADD KEY `date_added` (`date_created`),
  ADD KEY `sort_order` (`sort_order`),
  ADD KEY `status_photor_category` (`status`,`date_created`);

--
-- Indexes for table `tbl_federation_lang`
--
ALTER TABLE `tbl_federation_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`federation_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_federation_to_category`
--
ALTER TABLE `tbl_federation_to_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_federation_to_document`
--
ALTER TABLE `tbl_federation_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image_lang`
--
ALTER TABLE `tbl_image_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`image_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_image_to_document`
--
ALTER TABLE `tbl_image_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image_video_to_document`
--
ALTER TABLE `tbl_image_video_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `primary_status` (`status`,`id`),
  ADD UNIQUE KEY `primary_sort_order` (`id`,`sort_order`),
  ADD KEY `date_added` (`date_created`),
  ADD KEY `sort_order` (`sort_order`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `status_photor_category` (`status`,`category_id`,`date_created`);

--
-- Indexes for table `tbl_item_lang`
--
ALTER TABLE `tbl_item_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_item_to_comment`
--
ALTER TABLE `tbl_item_to_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item_to_document`
--
ALTER TABLE `tbl_item_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item_to_tag`
--
ALTER TABLE `tbl_item_to_tag`
  ADD PRIMARY KEY (`item_id`,`tag_id`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `primary_status` (`status`,`id`),
  ADD UNIQUE KEY `primary_sort_order` (`id`,`sort_order`),
  ADD KEY `date_added` (`date_created`),
  ADD KEY `sort_order` (`sort_order`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `status_photor_category` (`status`,`category_id`,`date_created`);

--
-- Indexes for table `tbl_location_lang`
--
ALTER TABLE `tbl_location_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`location_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_location_to_document`
--
ALTER TABLE `tbl_location_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu_item`
--
ALTER TABLE `tbl_menu_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu_item_to_document`
--
ALTER TABLE `tbl_menu_item_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu_to_document`
--
ALTER TABLE `tbl_menu_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_merchant`
--
ALTER TABLE `tbl_merchant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_owner_contact`
--
ALTER TABLE `tbl_owner_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_participant`
--
ALTER TABLE `tbl_participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_participant_to_document`
--
ALTER TABLE `tbl_participant_to_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_participant_type`
--
ALTER TABLE `tbl_participant_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment_type`
--
ALTER TABLE `tbl_payment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment_type_lang`
--
ALTER TABLE `tbl_payment_type_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`payment_type_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_point`
--
ALTER TABLE `tbl_point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_point_lang`
--
ALTER TABLE `tbl_point_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`point_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_route`
--
ALTER TABLE `tbl_route`
  ADD PRIMARY KEY (`id`),
  ADD KEY `point_id_index` (`from_point_id`,`to_point_id`);

--
-- Indexes for table `tbl_season`
--
ALTER TABLE `tbl_season`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seat`
--
ALTER TABLE `tbl_seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seat_group`
--
ALTER TABLE `tbl_seat_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_seat_group_lang`
--
ALTER TABLE `tbl_seat_group_lang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`seat_group_id`),
  ADD KEY `language` (`language`);

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_show`
--
ALTER TABLE `tbl_show`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_item_id` (`content_item_id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team_to_participant`
--
ALTER TABLE `tbl_team_to_participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_team_to_tag`
--
ALTER TABLE `tbl_team_to_tag`
  ADD PRIMARY KEY (`team_id`,`tag_id`);

--
-- Indexes for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_email` (`email`),
  ADD UNIQUE KEY `user_unique_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_banner_to_document`
--
ALTER TABLE `tbl_banner_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_banner_type`
--
ALTER TABLE `tbl_banner_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category_field`
--
ALTER TABLE `tbl_category_field`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category_field_lang`
--
ALTER TABLE `tbl_category_field_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_category_lang`
--
ALTER TABLE `tbl_category_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_category_to_document`
--
ALTER TABLE `tbl_category_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_competition`
--
ALTER TABLE `tbl_competition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_competition_group`
--
ALTER TABLE `tbl_competition_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_competition_phase`
--
ALTER TABLE `tbl_competition_phase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_competition_to_document`
--
ALTER TABLE `tbl_competition_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_competition_to_participant`
--
ALTER TABLE `tbl_competition_to_participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_competition_to_team`
--
ALTER TABLE `tbl_competition_to_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_document_lang`
--
ALTER TABLE `tbl_document_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_event_to_participant`
--
ALTER TABLE `tbl_event_to_participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_event_to_team`
--
ALTER TABLE `tbl_event_to_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_federation`
--
ALTER TABLE `tbl_federation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_federation_lang`
--
ALTER TABLE `tbl_federation_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_federation_to_category`
--
ALTER TABLE `tbl_federation_to_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_federation_to_document`
--
ALTER TABLE `tbl_federation_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_image_lang`
--
ALTER TABLE `tbl_image_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_image_to_document`
--
ALTER TABLE `tbl_image_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_image_video_to_document`
--
ALTER TABLE `tbl_image_video_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1806;
--
-- AUTO_INCREMENT for table `tbl_item_lang`
--
ALTER TABLE `tbl_item_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_item_to_comment`
--
ALTER TABLE `tbl_item_to_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_item_to_document`
--
ALTER TABLE `tbl_item_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_location_lang`
--
ALTER TABLE `tbl_location_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_location_to_document`
--
ALTER TABLE `tbl_location_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_menu_item`
--
ALTER TABLE `tbl_menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_menu_item_to_document`
--
ALTER TABLE `tbl_menu_item_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_menu_to_document`
--
ALTER TABLE `tbl_menu_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_merchant`
--
ALTER TABLE `tbl_merchant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_owner_contact`
--
ALTER TABLE `tbl_owner_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_participant`
--
ALTER TABLE `tbl_participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_participant_to_document`
--
ALTER TABLE `tbl_participant_to_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_participant_type`
--
ALTER TABLE `tbl_participant_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_payment_type`
--
ALTER TABLE `tbl_payment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_payment_type_lang`
--
ALTER TABLE `tbl_payment_type_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_point`
--
ALTER TABLE `tbl_point`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_point_lang`
--
ALTER TABLE `tbl_point_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_route`
--
ALTER TABLE `tbl_route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_season`
--
ALTER TABLE `tbl_season`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_seat`
--
ALTER TABLE `tbl_seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_seat_group`
--
ALTER TABLE `tbl_seat_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_seat_group_lang`
--
ALTER TABLE `tbl_seat_group_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_show`
--
ALTER TABLE `tbl_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_team_to_participant`
--
ALTER TABLE `tbl_team_to_participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ticket`
--
ALTER TABLE `tbl_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_item_lang`
--
ALTER TABLE `tbl_item_lang`
  ADD CONSTRAINT `item_lang_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `tbl_item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
