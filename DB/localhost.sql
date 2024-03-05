-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2024 at 06:51 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bathpot1_lndo_allinks`
--
CREATE DATABASE IF NOT EXISTS `bathpot1_lndo_allinks` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bathpot1_lndo_allinks`;

-- --------------------------------------------------------

--
-- Table structure for table `biolinks_blocks`
--

CREATE TABLE `biolinks_blocks` (
  `biolink_block_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_id` int(11) DEFAULT NULL,
  `type` varchar(32) NOT NULL DEFAULT '',
  `location_url` varchar(512) DEFAULT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0',
  `settings` text,
  `order` int(11) NOT NULL DEFAULT '0',
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biolinks_blocks`
--

INSERT INTO `biolinks_blocks` (`biolink_block_id`, `user_id`, `link_id`, `type`, `location_url`, `clicks`, `settings`, `order`, `start_date`, `end_date`, `is_enabled`, `datetime`) VALUES
(1, 1, 1, 'heading', NULL, 0, '{\"heading_type\":\"h1\",\"text\":\"Example page\",\"text_color\":\"white\"}', 0, NULL, NULL, 1, '2021-12-20 18:05:52'),
(2, 1, 1, 'paragraph', NULL, 0, '{\"text\":\"This is an example description.\",\"text_color\":\"white\"}', 1, NULL, NULL, 1, '2021-12-20 18:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `biolinks_themes`
--

CREATE TABLE `biolinks_themes` (
  `biolink_theme_id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `last_datetime` datetime DEFAULT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `blog_post_id` bigint(20) UNSIGNED NOT NULL,
  `blog_posts_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editor` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `language` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_views` int(11) DEFAULT '0',
  `is_published` tinyint(4) DEFAULT '1',
  `datetime` datetime DEFAULT NULL,
  `last_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts_categories`
--

CREATE TABLE `blog_posts_categories` (
  `blog_posts_category_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `language` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `last_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `datum_id` bigint(20) UNSIGNED NOT NULL,
  `biolink_block_id` int(11) DEFAULT NULL,
  `link_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8mb4_unicode_ci,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `domain_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `scheme` varchar(8) NOT NULL DEFAULT '',
  `host` varchar(256) NOT NULL DEFAULT '',
  `custom_index_url` varchar(256) DEFAULT NULL,
  `custom_not_found_url` varchar(256) DEFAULT NULL,
  `type` tinyint(11) DEFAULT '1',
  `is_enabled` tinyint(4) DEFAULT '0',
  `datetime` datetime DEFAULT NULL,
  `last_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `link_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `biolink_theme_id` int(11) DEFAULT NULL,
  `biolink_id` int(11) DEFAULT NULL,
  `domain_id` int(11) DEFAULT '0',
  `pixels_ids` text,
  `type` varchar(32) NOT NULL DEFAULT '',
  `url` varchar(256) NOT NULL DEFAULT '',
  `location_url` varchar(2048) DEFAULT NULL,
  `clicks` int(11) NOT NULL DEFAULT '0',
  `settings` text,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `is_verified` tinyint(4) DEFAULT '0',
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `last_datetime` datetime DEFAULT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`link_id`, `project_id`, `user_id`, `biolink_theme_id`, `biolink_id`, `domain_id`, `pixels_ids`, `type`, `url`, `location_url`, `clicks`, `settings`, `start_date`, `end_date`, `is_verified`, `is_enabled`, `last_datetime`, `datetime`) VALUES
(1, NULL, 1, NULL, NULL, 0, '[]', 'biolink', 'example', NULL, 0, '{\"verified_location\":\"top\",\"background_type\":\"preset\",\"background\":\"six\",\"favicon\":null,\"text_color\":\"#fff\",\"display_branding\":true,\"branding\":{\"name\":\"\",\"url\":\"\"},\"seo\":{\"block\":false,\"title\":\"\",\"meta_description\":\"\",\"image\":\"\"},\"utm\":{\"medium\":\"\",\"source\":\"\"},\"font\":\"arial\",\"font_size\":16,\"password\":null,\"sensitive_content\":false,\"leap_link\":\"\"}', NULL, NULL, 1, 1, NULL, '2021-12-20 18:05:36'),
(2, NULL, 1, NULL, NULL, 0, NULL, 'biolink', 'ubtnyacfbv', NULL, 0, '{\"verified_location\":\"title\",\"favicon\":null,\"background_type\":\"color\",\"background\":\"#A7A7A7\",\"background_attachment\":\"scroll\",\"text_color\":\"white\",\"display_branding\":true,\"branding\":{\"url\":\"\",\"name\":\"\"},\"seo\":{\"block\":false,\"title\":\"\",\"meta_description\":\"\",\"meta_keywords\":\"\",\"image\":\"\"},\"utm\":{\"medium\":\"\",\"source\":\"\"},\"font\":null,\"font_size\":16,\"password\":null,\"sensitive_content\":false,\"leap_link\":null,\"custom_css\":null,\"custom_js\":null}', NULL, NULL, 0, 1, NULL, '2024-02-20 04:16:16'),
(3, NULL, 5, NULL, NULL, 0, NULL, 'biolink', '8nokflj1i5', NULL, 0, '{\"verified_location\":\"title\",\"favicon\":null,\"background_type\":\"color\",\"background\":\"#A7A7A7\",\"background_attachment\":\"scroll\",\"text_color\":\"white\",\"display_branding\":true,\"branding\":{\"url\":\"\",\"name\":\"\"},\"seo\":{\"block\":false,\"title\":\"\",\"meta_description\":\"\",\"meta_keywords\":\"\",\"image\":\"\"},\"utm\":{\"medium\":\"\",\"source\":\"\"},\"font\":null,\"font_size\":16,\"password\":null,\"sensitive_content\":false,\"leap_link\":null,\"custom_css\":null,\"custom_js\":null}', NULL, NULL, 0, 1, NULL, '2024-02-28 17:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` bigint(20) UNSIGNED NOT NULL,
  `pages_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(256) CHARACTER SET utf8mb4 DEFAULT NULL,
  `editor` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `position` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `language` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `open_in_new_tab` tinyint(4) DEFAULT '1',
  `order` int(11) DEFAULT '0',
  `total_views` int(11) DEFAULT '0',
  `is_published` tinyint(4) DEFAULT '1',
  `datetime` datetime DEFAULT NULL,
  `last_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `pages_category_id`, `url`, `title`, `description`, `keywords`, `editor`, `content`, `type`, `position`, `language`, `open_in_new_tab`, `order`, `total_views`, `is_published`, `datetime`, `last_datetime`) VALUES
(1, NULL, 'https://altumcode.com/', 'Software by AltumCode', '', NULL, NULL, '', 'external', 'bottom', NULL, 1, 1, 0, 1, '2024-02-20 09:43:08', '2024-02-20 09:43:08'),
(2, NULL, 'https://altumco.de/66biolinks', 'Built with 66biolinks', '', NULL, NULL, '', 'external', 'bottom', NULL, 1, 0, 0, 1, '2024-02-20 09:43:08', '2024-02-20 09:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `pages_categories`
--

CREATE TABLE `pages_categories` (
  `pages_category_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `language` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `last_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `pixels`
--

CREATE TABLE `pixels` (
  `pixel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `pixel` varchar(64) NOT NULL,
  `last_datetime` datetime DEFAULT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `plan_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(256) NOT NULL DEFAULT '',
  `monthly_price` float DEFAULT NULL,
  `annual_price` float DEFAULT NULL,
  `lifetime_price` float DEFAULT NULL,
  `trial_days` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `settings` text NOT NULL,
  `taxes_ids` text,
  `codes_ids` text,
  `color` varchar(16) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `order` int(10) UNSIGNED DEFAULT '0',
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL DEFAULT '',
  `color` varchar(16) DEFAULT '#000',
  `last_datetime` datetime DEFAULT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qr_codes`
--

CREATE TABLE `qr_codes` (
  `qr_code_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr_code_logo` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr_code` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `datetime` datetime NOT NULL,
  `last_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'main', '{\"title\":\"Your title\",\"default_language\":\"english\",\"default_theme_style\":\"light\",\"default_timezone\":\"UTC\",\"index_url\":\"\",\"terms_and_conditions_url\":\"\",\"privacy_policy_url\":\"\",\"not_found_url\":\"\",\"se_indexing\":true,\"default_results_per_page\":25,\"default_order_type\":\"DESC\",\"auto_language_detection_is_enabled\":true,\"blog_is_enabled\":true,\"logo_light\":\"\",\"logo_dark\":\"\",\"logo_email\":\"\",\"opengraph\":\"\",\"favicon\":\"\"}'),
(2, 'users', '{\"email_confirmation\":false,\"register_is_enabled\":true,\"auto_delete_inactive_users\":0,\"user_deletion_reminder\":0}'),
(3, 'ads', '{\"header\":\"\",\"footer\":\"\",\"header_biolink\":\"\",\"footer_biolink\":\"\"}'),
(4, 'captcha', '{\"type\":\"basic\",\"recaptcha_public_key\":\"\",\"recaptcha_private_key\":\"\",\"login_is_enabled\":0,\"register_is_enabled\":0,\"lost_password_is_enabled\":0,\"resend_activation_is_enabled\":0}'),
(5, 'cron', '{\"key\":\"c5fdc815ef4299629d484a0770122e8a\"}'),
(6, 'email_notifications', '{\"emails\":\"\",\"new_user\":\"0\",\"new_payment\":\"0\"}'),
(7, 'facebook', '{\"is_enabled\":\"1\",\"app_id\":\"\",\"app_secret\":\"\"}'),
(8, 'google', '{\"is_enabled\":\"1\",\"client_id\":\"\",\"client_secret\":\"\"}'),
(9, 'twitter', '{\"is_enabled\":\"0\",\"consumer_api_key\":\"\",\"consumer_api_secret\":\"\"}'),
(10, 'discord', '{\"is_enabled\":\"0\"}'),
(11, 'plan_custom', '{\"plan_id\":\"custom\",\"name\":\"Custom\",\"status\":1}'),
(12, 'plan_free', '{\"plan_id\":\"free\",\"name\":\"Free\",\"days\":null,\"status\":1,\"settings\":{\"additional_global_domains\":true,\"custom_url\":true,\"deep_links\":true,\"no_ads\":true,\"removable_branding\":true,\"custom_branding\":true,\"custom_colored_links\":true,\"statistics\":true,\"custom_backgrounds\":true,\"verified\":true,\"temporary_url_is_enabled\":true,\"seo\":true,\"utm\":true,\"socials\":true,\"fonts\":true,\"password\":true,\"sensitive_content\":true,\"leap_link\":true,\"api_is_enabled\":true,\"affiliate_is_enabled\":true,\"projects_limit\":10,\"pixels_limit\":10,\"biolinks_limit\":15,\"links_limit\":25,\"domains_limit\":1,\"enabled_biolink_blocks\":{\"link\":true,\"text\":true,\"image\":true,\"mail\":true,\"soundcloud\":true,\"spotify\":true,\"youtube\":true,\"twitch\":true,\"vimeo\":true,\"tiktok\":true,\"applemusic\":true,\"tidal\":true,\"anchor\":true,\"twitter_tweet\":true,\"instagram_media\":true,\"rss_feed\":true,\"custom_html\":true,\"vcard\":true,\"image_grid\":true,\"divider\":true}}}'),
(13, 'payment', '{\"is_enabled\":\"0\",\"type\":\"both\",\"brand_name\":\"phpBiolinks\",\"currency\":\"USD\", \"codes_is_enabled\": false}'),
(14, 'paypal', '{\"is_enabled\":\"0\",\"mode\":\"sandbox\",\"client_id\":\"\",\"secret\":\"\"}'),
(15, 'stripe', '{\"is_enabled\":\"0\",\"publishable_key\":\"\",\"secret_key\":\"\",\"webhook_secret\":\"\"}'),
(16, 'offline_payment', '{\"is_enabled\":\"0\",\"instructions\":\"Your offline payment instructions go here..\"}'),
(17, 'coinbase', '{\"is_enabled\":\"0\"}'),
(18, 'payu', '{\"is_enabled\":\"0\"}'),
(19, 'paystack', '{\"is_enabled\":\"0\"}'),
(20, 'razorpay', '{\"is_enabled\":\"0\"}'),
(21, 'mollie', '{\"is_enabled\":\"0\"}'),
(22, 'yookassa', '{\"is_enabled\":\"0\"}'),
(23, 'crypto_com', '{\"is_enabled\":\"0\"}'),
(24, 'paddle', '{\"is_enabled\":\"0\"}'),
(25, 'smtp', '{\"host\":\"\",\"from\":\"\",\"from_name\":\"\",\"encryption\":\"tls\",\"port\":\"587\",\"auth\":\"0\",\"username\":\"\",\"password\":\"\"}'),
(26, 'custom', '{\"head_js\":\"\",\"head_css\":\"\"}'),
(27, 'socials', '{\"facebook\":\"\",\"instagram\":\"\",\"twitter\":\"\",\"youtube\":\"\"}'),
(28, 'announcements', '{\"id\":\"\",\"content\":\"\",\"show_logged_in\":\"\",\"show_logged_out\":\"\"}'),
(29, 'business', '{\"invoice_is_enabled\":\"0\",\"name\":\"\",\"address\":\"\",\"city\":\"\",\"county\":\"\",\"zip\":\"\",\"country\":\"\",\"email\":\"\",\"phone\":\"\",\"tax_type\":\"\",\"tax_id\":\"\",\"custom_key_one\":\"\",\"custom_value_one\":\"\",\"custom_key_two\":\"\",\"custom_value_two\":\"\"}'),
(30, 'webhooks', '{\"user_new\": \"\", \"user_delete\": \"\"}'),
(31, 'cookie_consent', '{}'),
(32, 'links', '{\"branding\":\"by AltumCode\",\"shortener_is_enabled\":true,\"qr_codes_is_enabled\":true,\"biolinks_is_enabled\":true,\"files_is_enabled\":true,\"vcards_is_enabled\":true,\"directory_is_enabled\":true,\"directory_display\":\"verified\",\"domains_is_enabled\":true,\"main_domain_is_enabled\":true,\"blacklisted_domains\":\"\",\"blacklisted_keywords\":\"\",\"google_safe_browsing_is_enabled\":false,\"google_safe_browsing_api_key\":\"\",\"google_static_maps_is_enabled\":false,\"google_static_maps_api_key\":\"\",\"avatar_size_limit\":2,\"background_size_limit\":2,\"favicon_size_limit\":2,\"seo_image_size_limit\":2,\"thumbnail_image_size_limit\":2,\"image_size_limit\":2,\"audio_size_limit\":2,\"video_size_limit\":2,\"file_size_limit\":2,\"product_file_size_limit\":2}'),
(33, 'tools', ''),
(34, 'license', '{\"license\":\"\",\"type\":\"\"}'),
(35, 'product_info', '{\"version\":\"30.2.0\", \"code\":\"3020\"}'),
(36, 'apple', '{\"is_enabled\":\"1\",\"client_id\":\"allinks.click.app\",\"keyId\":\"GG88V296BA\",\"teamId\":\"A627NG5F3P\"}');

-- --------------------------------------------------------

--
-- Table structure for table `track_links`
--

CREATE TABLE `track_links` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_id` int(11) DEFAULT NULL,
  `biolink_block_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `country_code` varchar(8) DEFAULT NULL,
  `city_name` varchar(128) DEFAULT NULL,
  `os_name` varchar(16) DEFAULT NULL,
  `browser_name` varchar(32) DEFAULT NULL,
  `referrer_host` varchar(256) DEFAULT NULL,
  `referrer_path` varchar(1024) DEFAULT NULL,
  `device_type` varchar(16) DEFAULT NULL,
  `browser_language` varchar(16) DEFAULT NULL,
  `utm_source` varchar(128) DEFAULT NULL,
  `utm_medium` varchar(128) DEFAULT NULL,
  `utm_campaign` varchar(128) DEFAULT NULL,
  `is_unique` tinyint(4) DEFAULT '0',
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(320) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing` text COLLATE utf8mb4_unicode_ci,
  `api_key` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twofa_secret` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anti_phishing_code` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one_time_login_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pending_email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_activation_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lost_password_code` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `plan_id` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `plan_expiration_date` datetime DEFAULT NULL,
  `plan_settings` text COLLATE utf8mb4_unicode_ci,
  `plan_trial_done` tinyint(4) DEFAULT '0',
  `plan_expiry_reminder` tinyint(4) DEFAULT '0',
  `payment_subscription_id` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_processor` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_total_amount` float DEFAULT NULL,
  `payment_currency` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_key` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by_has_converted` tinyint(4) DEFAULT '0',
  `language` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT 'english',
  `timezone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT 'UTC',
  `datetime` datetime DEFAULT NULL,
  `ip` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `continent_code` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `last_user_agent` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_logins` int(11) DEFAULT '0',
  `user_deletion_reminder` tinyint(4) DEFAULT '0',
  `source` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT 'direct'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `billing`, `api_key`, `token_code`, `twofa_secret`, `anti_phishing_code`, `one_time_login_code`, `pending_email`, `email_activation_code`, `lost_password_code`, `type`, `status`, `plan_id`, `plan_expiration_date`, `plan_settings`, `plan_trial_done`, `plan_expiry_reminder`, `payment_subscription_id`, `payment_processor`, `payment_total_amount`, `payment_currency`, `referral_key`, `referred_by`, `referred_by_has_converted`, `language`, `timezone`, `datetime`, `ip`, `continent_code`, `country`, `city_name`, `last_activity`, `last_user_agent`, `total_logins`, `user_deletion_reminder`, `source`) VALUES
(1, 'admin', '$2y$10$uFNO0pQKEHSFcus1zSFlveiPCB3EvG9ZlES7XKgJFTAl5JbRGFCWy', 'AltumCode', NULL, 'a2783345194b4fab2260590a0da70679', '', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'custom', '2030-01-01 12:00:00', '{\"additional_global_domains\":true,\"custom_url\":true,\"deep_links\":true,\"no_ads\":true,\"removable_branding\":true,\"custom_branding\":true,\"custom_colored_links\":true,\"statistics\":true,\"qr_is_enabled\":true,\"custom_backgrounds\":true,\"verified\":true,\"temporary_url_is_enabled\":true,\"seo\":true,\"utm\":true,\"fonts\":true,\"password\":true,\"sensitive_content\":true,\"leap_link\":true,\"api_is_enabled\":true,\"affiliate_is_enabled\":true,\"dofollow_is_enabled\":true,\"biolink_blocks_limit\":-1,\"projects_limit\":-1,\"pixels_limit\":-1,\"biolinks_limit\":-1,\"links_limit\":-1,\"domains_limit\":-1,\"track_links_retention\":-1,\"enabled_biolink_blocks\":{\"link\":true,\"heading\":true,\"paragraph\":true,\"avatar\":true,\"image\":true,\"socials\":true,\"mail\":true,\"soundcloud\":true,\"spotify\":true,\"youtube\":true,\"twitch\":true,\"vimeo\":true,\"tiktok\":true,\"applemusic\":true,\"tidal\":true,\"anchor\":true,\"twitter_tweet\":true,\"instagram_media\":true,\"rss_feed\":true,\"custom_html\":true,\"vcard\":true,\"image_grid\":true,\"divider\":true,\"faq\":true,\"discord\":true,\"facebook\":true,\"reddit\":true,\"audio\":true,\"video\":true,\"file\":true,\"countdown\":true,\"cta\":true,\"external_item\":true,\"share\":true,\"youtube_feed\":true}}', 0, 0, NULL, NULL, NULL, NULL, '8edbeb95015ad2acf89caa8f837713e1', NULL, 0, 'english', 'UTC', '2024-02-20 09:43:07', '::1', NULL, NULL, NULL, '2024-02-20 09:43:07', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36', 1, 0, 'direct'),
(4, 'ihasthiya@outlook.com', NULL, '', '{\"type\":\"personal\",\"name\":\"\",\"address\":\"\",\"city\":\"\",\"county\":\"\",\"zip\":\"\",\"country\":\"\",\"phone\":\"\",\"tax_id\":\"\"}', 'a63168ad06eeb9f31cae5941b1510f77', NULL, NULL, NULL, NULL, NULL, NULL, '03b6b44f172ee752265826e15d01ef4a', 0, 1, 'free', '2024-02-28 17:34:49', '{\"additional_global_domains\":true,\"custom_url\":true,\"deep_links\":true,\"no_ads\":true,\"removable_branding\":true,\"custom_branding\":true,\"custom_colored_links\":true,\"statistics\":true,\"custom_backgrounds\":true,\"verified\":true,\"temporary_url_is_enabled\":true,\"seo\":true,\"utm\":true,\"socials\":true,\"fonts\":true,\"password\":true,\"sensitive_content\":true,\"leap_link\":true,\"api_is_enabled\":true,\"affiliate_is_enabled\":true,\"projects_limit\":10,\"pixels_limit\":10,\"biolinks_limit\":15,\"links_limit\":25,\"domains_limit\":1,\"enabled_biolink_blocks\":{\"link\":true,\"text\":true,\"image\":true,\"mail\":true,\"soundcloud\":true,\"spotify\":true,\"youtube\":true,\"twitch\":true,\"vimeo\":true,\"tiktok\":true,\"applemusic\":true,\"tidal\":true,\"anchor\":true,\"twitter_tweet\":true,\"instagram_media\":true,\"rss_feed\":true,\"custom_html\":true,\"vcard\":true,\"image_grid\":true,\"divider\":true}}', 0, 0, NULL, NULL, NULL, NULL, 'f2fa6fb55e5f47806c64d0a257447a83', NULL, 0, 'english', 'UTC', '2024-02-28 17:34:49', '112.134.235.55', 'AS', 'LK', 'Galle', NULL, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 1, 0, 'apple'),
(5, '25xdt9gxjf@privaterelay.appleid.com', '$2y$10$7jfb9F024fXZ/wSg9Xfh/.3tMc8MezZ7d.EsD7n0n4bvKLpVCCwxq', '', '{\"type\":\"personal\",\"name\":\"\",\"address\":\"\",\"city\":\"\",\"county\":\"\",\"zip\":\"\",\"country\":\"\",\"phone\":\"\",\"tax_id\":\"\"}', 'fd7d18ebe0c46e950135290ed2e2835e', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 'free', '2024-02-28 17:34:53', '{\"additional_global_domains\":true,\"custom_url\":true,\"deep_links\":true,\"no_ads\":true,\"removable_branding\":true,\"custom_branding\":true,\"custom_colored_links\":true,\"statistics\":true,\"custom_backgrounds\":true,\"verified\":true,\"temporary_url_is_enabled\":true,\"seo\":true,\"utm\":true,\"socials\":true,\"fonts\":true,\"password\":true,\"sensitive_content\":true,\"leap_link\":true,\"api_is_enabled\":true,\"affiliate_is_enabled\":true,\"projects_limit\":10,\"pixels_limit\":10,\"biolinks_limit\":15,\"links_limit\":25,\"domains_limit\":1,\"enabled_biolink_blocks\":{\"link\":true,\"text\":true,\"image\":true,\"mail\":true,\"soundcloud\":true,\"spotify\":true,\"youtube\":true,\"twitch\":true,\"vimeo\":true,\"tiktok\":true,\"applemusic\":true,\"tidal\":true,\"anchor\":true,\"twitter_tweet\":true,\"instagram_media\":true,\"rss_feed\":true,\"custom_html\":true,\"vcard\":true,\"image_grid\":true,\"divider\":true}}', 0, 0, NULL, NULL, NULL, NULL, 'a1c8d7a077b9e0bb1cc57f6428b0a826', NULL, 0, 'english', 'UTC', '2024-02-28 17:34:53', '90.90.93.157', 'EU', 'FR', 'Paris', '2024-02-29 02:09:22', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 6, 0, 'apple'),
(7, 'sv95hrbbw4@privaterelay.appleid.com', '$2y$10$E/prPjchm5vrfFnvmoeVcO9ke19yhq0gXiQV5B69kv03duXLl8gI.', '001466.394743f3fc42493f8b923837f47e4616.1415', '{\"type\":\"personal\",\"name\":\"\",\"address\":\"\",\"city\":\"\",\"county\":\"\",\"zip\":\"\",\"country\":\"\",\"phone\":\"\",\"tax_id\":\"\"}', 'b2a301894ee50f44e19c3e519ef7941f', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 'free', '2024-02-29 02:13:33', '{\"additional_global_domains\":true,\"custom_url\":true,\"deep_links\":true,\"no_ads\":true,\"removable_branding\":true,\"custom_branding\":true,\"custom_colored_links\":true,\"statistics\":true,\"custom_backgrounds\":true,\"verified\":true,\"temporary_url_is_enabled\":true,\"seo\":true,\"utm\":true,\"socials\":true,\"fonts\":true,\"password\":true,\"sensitive_content\":true,\"leap_link\":true,\"api_is_enabled\":true,\"affiliate_is_enabled\":true,\"projects_limit\":10,\"pixels_limit\":10,\"biolinks_limit\":15,\"links_limit\":25,\"domains_limit\":1,\"enabled_biolink_blocks\":{\"link\":true,\"text\":true,\"image\":true,\"mail\":true,\"soundcloud\":true,\"spotify\":true,\"youtube\":true,\"twitch\":true,\"vimeo\":true,\"tiktok\":true,\"applemusic\":true,\"tidal\":true,\"anchor\":true,\"twitter_tweet\":true,\"instagram_media\":true,\"rss_feed\":true,\"custom_html\":true,\"vcard\":true,\"image_grid\":true,\"divider\":true}}', 0, 0, NULL, NULL, NULL, NULL, '398db1aa6c176db5b3aab7c2f7b7b335', NULL, 0, 'english', 'UTC', '2024-02-29 02:13:33', '90.90.93.157', 'EU', 'FR', 'Paris', '2024-02-29 02:13:52', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 3, 0, 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE `users_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_type` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_name` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `continent_code` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_logs`
--

INSERT INTO `users_logs` (`id`, `user_id`, `type`, `ip`, `device_type`, `os_name`, `continent_code`, `country_code`, `city_name`, `datetime`) VALUES
(6, 4, 'register.apple.success', '112.134.235.55', 'desktop', 'OS X', 'AS', 'LK', 'Galle', '2024-02-28 17:34:49'),
(7, 5, 'register.apple.success', '87.88.183.137', 'mobile', 'iOS', 'EU', 'FR', 'Paris', '2024-02-28 17:34:53'),
(8, 5, 'reset_password.success', '87.88.183.137', 'mobile', 'iOS', 'EU', 'FR', 'Paris', '2024-02-28 17:35:10'),
(9, 5, 'login.default.success', '87.88.183.137', 'mobile', 'iOS', 'EU', 'FR', 'Paris', '2024-02-28 17:35:10'),
(10, 5, 'login.apple.success', '87.88.183.137', 'mobile', 'iOS', 'EU', 'FR', 'Paris', '2024-02-28 17:36:53'),
(11, 5, 'login.apple.success', '87.88.183.137', 'mobile', 'iOS', 'EU', 'FR', 'Paris', '2024-02-28 17:37:37'),
(26, 5, 'login.apple.success', '90.90.93.157', 'desktop', 'OS X', 'EU', 'FR', 'Paris', '2024-02-29 02:09:11'),
(27, 5, 'login.apple.success', '90.90.93.157', 'desktop', 'OS X', 'EU', 'FR', 'Paris', '2024-02-29 02:09:56'),
(30, 7, 'register.apple.success', '90.90.93.157', 'desktop', 'OS X', 'EU', 'FR', 'Paris', '2024-02-29 02:13:33'),
(32, 7, 'reset_password.success', '90.90.93.157', 'desktop', 'OS X', 'EU', 'FR', 'Paris', '2024-02-29 02:13:52'),
(33, 7, 'login.default.success', '90.90.93.157', 'desktop', 'OS X', 'EU', 'FR', 'Paris', '2024-02-29 02:13:52'),
(34, 7, 'login.apple.success', '90.90.93.157', 'desktop', 'OS X', 'EU', 'FR', 'Paris', '2024-02-29 02:14:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biolinks_blocks`
--
ALTER TABLE `biolinks_blocks`
  ADD PRIMARY KEY (`biolink_block_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `links_type_index` (`type`),
  ADD KEY `links_links_link_id_fk` (`link_id`);

--
-- Indexes for table `biolinks_themes`
--
ALTER TABLE `biolinks_themes`
  ADD PRIMARY KEY (`biolink_theme_id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`blog_post_id`),
  ADD KEY `blog_post_id_index` (`blog_post_id`),
  ADD KEY `blog_post_url_index` (`url`),
  ADD KEY `blog_posts_category_id` (`blog_posts_category_id`),
  ADD KEY `blog_posts_is_published_index` (`is_published`),
  ADD KEY `blog_posts_language_index` (`language`);

--
-- Indexes for table `blog_posts_categories`
--
ALTER TABLE `blog_posts_categories`
  ADD PRIMARY KEY (`blog_posts_category_id`),
  ADD KEY `url` (`url`),
  ADD KEY `blog_posts_categories_url_language_index` (`url`,`language`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`datum_id`),
  ADD UNIQUE KEY `datum_id` (`datum_id`),
  ADD KEY `link_id` (`link_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `biolink_block_id` (`biolink_block_id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`domain_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `host` (`host`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `url` (`url`),
  ADD KEY `links_type_index` (`type`),
  ADD KEY `links_links_link_id_fk` (`biolink_id`),
  ADD KEY `links_biolinks_themes_biolink_theme_id_fk` (`biolink_theme_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `pages_pages_category_id_index` (`pages_category_id`),
  ADD KEY `pages_url_index` (`url`),
  ADD KEY `pages_is_published_index` (`is_published`),
  ADD KEY `pages_language_index` (`language`);

--
-- Indexes for table `pages_categories`
--
ALTER TABLE `pages_categories`
  ADD PRIMARY KEY (`pages_category_id`),
  ADD KEY `url` (`url`),
  ADD KEY `pages_categories_url_language_index` (`url`,`language`);

--
-- Indexes for table `pixels`
--
ALTER TABLE `pixels`
  ADD PRIMARY KEY (`pixel_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD PRIMARY KEY (`qr_code_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `key` (`key`);

--
-- Indexes for table `track_links`
--
ALTER TABLE `track_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `link_id` (`link_id`),
  ADD KEY `track_links_date_index` (`datetime`),
  ADD KEY `track_links_project_id_index` (`project_id`),
  ADD KEY `track_links_users_user_id_fk` (`user_id`),
  ADD KEY `track_links_biolink_block_id_index` (`biolink_block_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `plan_id` (`plan_id`),
  ADD KEY `api_key` (`api_key`);

--
-- Indexes for table `users_logs`
--
ALTER TABLE `users_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_logs_user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biolinks_blocks`
--
ALTER TABLE `biolinks_blocks`
  MODIFY `biolink_block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `biolinks_themes`
--
ALTER TABLE `biolinks_themes`
  MODIFY `biolink_theme_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `blog_post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_posts_categories`
--
ALTER TABLE `blog_posts_categories`
  MODIFY `blog_posts_category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `datum_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `domain_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages_categories`
--
ALTER TABLE `pages_categories`
  MODIFY `pages_category_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pixels`
--
ALTER TABLE `pixels`
  MODIFY `pixel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `qr_codes`
--
ALTER TABLE `qr_codes`
  MODIFY `qr_code_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `track_links`
--
ALTER TABLE `track_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biolinks_blocks`
--
ALTER TABLE `biolinks_blocks`
  ADD CONSTRAINT `biolinks_blocks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biolinks_blocks_ibfk_2` FOREIGN KEY (`link_id`) REFERENCES `links` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD CONSTRAINT `blog_posts_ibfk_1` FOREIGN KEY (`blog_posts_category_id`) REFERENCES `blog_posts_categories` (`blog_posts_category_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`link_id`) REFERENCES `links` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_ibfk_4` FOREIGN KEY (`biolink_block_id`) REFERENCES `biolinks_blocks` (`biolink_block_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `domains`
--
ALTER TABLE `domains`
  ADD CONSTRAINT `domains_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_biolinks_themes_biolink_theme_id_fk` FOREIGN KEY (`biolink_theme_id`) REFERENCES `biolinks_themes` (`biolink_theme_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `links_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `links_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `links_links_link_id_fk` FOREIGN KEY (`biolink_id`) REFERENCES `links` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`pages_category_id`) REFERENCES `pages_categories` (`pages_category_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `pixels`
--
ALTER TABLE `pixels`
  ADD CONSTRAINT `pixels_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qr_codes`
--
ALTER TABLE `qr_codes`
  ADD CONSTRAINT `qr_codes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `qr_codes_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `track_links`
--
ALTER TABLE `track_links`
  ADD CONSTRAINT `track_links_ibfk_1` FOREIGN KEY (`link_id`) REFERENCES `links` (`link_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `track_links_links_project_id_fk` FOREIGN KEY (`project_id`) REFERENCES `links` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `track_links_projects_project_id_fk` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `track_links_users_user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_logs`
--
ALTER TABLE `users_logs`
  ADD CONSTRAINT `users_logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
