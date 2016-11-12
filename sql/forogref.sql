-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-06-2012 a las 18:32:56
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6-1+lenny3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `forogref`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_banlists`
--

CREATE TABLE IF NOT EXISTS `mlf2_banlists` (
  `name` varchar(255) NOT NULL default '',
  `list` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `mlf2_banlists`
--

INSERT INTO `mlf2_banlists` (`name`, `list`) VALUES
('user_agents', ''),
('ips', ''),
('words', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_categories`
--

CREATE TABLE IF NOT EXISTS `mlf2_categories` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `category` varchar(255) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `accession` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `mlf2_categories`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_entries`
--

CREATE TABLE IF NOT EXISTS `mlf2_entries` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `tid` int(11) NOT NULL default '0',
  `uniqid` varchar(255) NOT NULL default '',
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `last_reply` timestamp NOT NULL default '0000-00-00 00:00:00',
  `edited` timestamp NOT NULL default '0000-00-00 00:00:00',
  `edited_by` int(11) default NULL,
  `user_id` int(11) default '0',
  `name` varchar(255) NOT NULL default '',
  `subject` varchar(255) NOT NULL default '',
  `category` int(11) NOT NULL default '0',
  `email` varchar(255) NOT NULL default '',
  `hp` varchar(255) NOT NULL default '',
  `location` varchar(255) NOT NULL default '',
  `ip` varchar(128) NOT NULL default '',
  `text` text NOT NULL,
  `tags` varchar(255) NOT NULL default '',
  `show_signature` tinyint(4) default '0',
  `email_notification` tinyint(4) default '0',
  `marked` tinyint(4) default '0',
  `locked` tinyint(4) default '0',
  `sticky` tinyint(4) default '0',
  `views` int(11) default '0',
  `spam` tinyint(4) default '0',
  `spam_check_status` tinyint(4) default '0',
  `edit_key` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `tid` (`tid`),
  KEY `category` (`category`),
  KEY `pid` (`pid`),
  KEY `sticky` (`sticky`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `mlf2_entries`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_entries_cache`
--

CREATE TABLE IF NOT EXISTS `mlf2_entries_cache` (
  `cache_id` int(11) NOT NULL,
  `cache_text` mediumtext NOT NULL,
  PRIMARY KEY  (`cache_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `mlf2_entries_cache`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_logincontrol`
--

CREATE TABLE IF NOT EXISTS `mlf2_logincontrol` (
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `ip` varchar(255) NOT NULL default '',
  `logins` int(11) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `mlf2_logincontrol`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_pages`
--

CREATE TABLE IF NOT EXISTS `mlf2_pages` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL default '',
  `content` text NOT NULL,
  `menu_linkname` varchar(255) NOT NULL default '',
  `access` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `mlf2_pages`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_settings`
--

CREATE TABLE IF NOT EXISTS `mlf2_settings` (
  `name` varchar(255) NOT NULL default '',
  `value` varchar(255) NOT NULL default ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `mlf2_settings`
--

INSERT INTO `mlf2_settings` (`name`, `value`) VALUES
('forum_name', 'Foro del Grupo FENIX '),
('forum_description', 'yet another little forum'),
('forum_email', 'fenixvalera@hotmail.com'),
('forum_address', 'http://localhost/gref/forum/'),
('home_linkaddress', '../'),
('home_linkname', ''),
('language_file', 'spanish.lang'),
('theme', 'default'),
('access_for_users_only', '0'),
('entries_by_users_only', '0'),
('register_mode', '0'),
('default_email_contact', '0'),
('user_area_public', '0'),
('rss_feed', '1'),
('rss_feed_max_items', '20'),
('session_prefix', 'mlf2_'),
('default_view', '0'),
('remember_userdata', '1'),
('remember_last_visit', '1'),
('empty_postings_possible', '0'),
('email_notification_unregistered', '0'),
('user_edit', '1'),
('user_edit_if_no_replies', '0'),
('show_if_edited', '1'),
('dont_reg_edit_by_admin', '0'),
('dont_reg_edit_by_mod', '0'),
('edit_min_time_period', '5'),
('edit_max_time_period', '60'),
('edit_delay', '3'),
('bbcode', '1'),
('bbcode_img', '1'),
('bbcode_color', '1'),
('bbcode_size', '1'),
('bbcode_code', '0'),
('bbcode_tex', '0'),
('bbcode_flash', '0'),
('flash_default_width', '425'),
('flash_default_height', '344'),
('upload_images', '2'),
('smilies', '1'),
('autolink', '1'),
('count_views', '1'),
('autologin', '1'),
('threads_per_page', '30'),
('search_results_per_page', '20'),
('name_maxlength', '70'),
('name_word_maxlength', '30'),
('email_maxlength', '70'),
('hp_maxlength', '70'),
('location_maxlength', '40'),
('location_word_maxlength', '30'),
('subject_maxlength', '60'),
('subject_word_maxlength', '30'),
('text_maxlength', '5000'),
('profile_maxlength', '5000'),
('signature_maxlength', '255'),
('text_word_maxlength', '90'),
('email_subject_maxlength', '100'),
('email_text_maxlength', '10000'),
('quote_symbol', '>'),
('count_users_online', '10'),
('last_reply_link', '0'),
('time_difference', '0'),
('time_zone', 'America/Caracas'),
('auto_lock_old_threads', '0'),
('upload_max_img_size', '60'),
('upload_max_img_width', '600'),
('upload_max_img_height', '600'),
('mail_parameter', ''),
('forum_enabled', '1'),
('forum_readonly', '0'),
('forum_disabled_message', ''),
('page_browse_range', '10'),
('page_browse_show_last', '0'),
('deep_reply', '15'),
('very_deep_reply', '30'),
('users_per_page', '20'),
('username_maxlength', '40'),
('bad_behavior', '1'),
('akismet_entry_check', '0'),
('akismet_mail_check', '0'),
('akismet_key', ''),
('akismet_check_registered', '0'),
('tags', '1'),
('tag_cloud', '0'),
('tag_cloud_day_period', '30'),
('tag_cloud_scale_min', '0'),
('tag_cloud_scale_max', '6'),
('latest_postings', '0'),
('terms_of_use_agreement', '0'),
('terms_of_use_url', ''),
('syntax_highlighter', '0'),
('save_spam', '1'),
('auto_delete_spam', '168'),
('auto_lock', '0'),
('temp_block_ip_after_repeated_failed_logins', '1'),
('flood_prevention_minutes', '2'),
('fold_threads', '0'),
('avatars', '2'),
('avatar_max_filesize', '20'),
('avatar_max_width', '80'),
('avatar_max_height', '80'),
('captcha_posting', '0'),
('captcha_email', '0'),
('captcha_register', '0'),
('min_pw_length', '8'),
('cookie_validity_days', '30'),
('access_permission_checks', '0'),
('daily_actions_time', '3:30'),
('next_daily_actions', '1339920000'),
('auto_lock_old_threads', '0'),
('max_read_items', '200'),
('delete_ips', '0'),
('last_changes', '1339879488'),
('ajax_preview', '1'),
('version', '2.3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_smilies`
--

CREATE TABLE IF NOT EXISTS `mlf2_smilies` (
  `id` int(11) NOT NULL auto_increment,
  `order_id` int(11) NOT NULL default '0',
  `file` varchar(100) NOT NULL default '',
  `code_1` varchar(50) NOT NULL default '',
  `code_2` varchar(50) NOT NULL default '',
  `code_3` varchar(50) NOT NULL default '',
  `code_4` varchar(50) NOT NULL default '',
  `code_5` varchar(50) NOT NULL default '',
  `title` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `mlf2_smilies`
--

INSERT INTO `mlf2_smilies` (`id`, `order_id`, `file`, `code_1`, `code_2`, `code_3`, `code_4`, `code_5`, `title`) VALUES
(1, 1, 'smile.png', ':-)', '', '', '', '', ''),
(2, 2, 'wink.png', ';-)', '', '', '', '', ''),
(3, 3, 'tongue.png', ':-P', '', '', '', '', ''),
(4, 4, 'biggrin.png', ':-D', '', '', '', '', ''),
(5, 5, 'neutral.png', ':-|', '', '', '', '', ''),
(6, 6, 'frown.png', ':-(', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_userdata`
--

CREATE TABLE IF NOT EXISTS `mlf2_userdata` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_type` tinyint(4) NOT NULL default '0',
  `user_name` varchar(255) NOT NULL default '',
  `user_real_name` varchar(255) NOT NULL default '',
  `gender` tinyint(4) NOT NULL default '0',
  `birthday` date NOT NULL default '0000-00-00',
  `user_pw` varchar(255) NOT NULL default '',
  `user_email` varchar(255) NOT NULL default '',
  `email_contact` tinyint(4) default '0',
  `user_hp` varchar(255) NOT NULL default '',
  `user_location` varchar(255) NOT NULL default '',
  `signature` varchar(255) NOT NULL default '',
  `profile` text NOT NULL,
  `logins` int(11) NOT NULL default '0',
  `last_login` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `last_logout` timestamp NOT NULL default '0000-00-00 00:00:00',
  `user_ip` varchar(128) NOT NULL default '',
  `registered` timestamp NOT NULL default '0000-00-00 00:00:00',
  `category_selection` varchar(255) default NULL,
  `thread_order` tinyint(4) NOT NULL default '0',
  `user_view` tinyint(4) NOT NULL default '0',
  `sidebar` tinyint(4) NOT NULL default '1',
  `fold_threads` tinyint(4) NOT NULL default '0',
  `thread_display` tinyint(4) NOT NULL default '0',
  `new_posting_notification` tinyint(4) default '0',
  `new_user_notification` tinyint(4) default '0',
  `user_lock` tinyint(4) default '0',
  `auto_login_code` varchar(50) NOT NULL default '',
  `pwf_code` varchar(50) NOT NULL,
  `activate_code` varchar(50) NOT NULL default '',
  `language` varchar(255) NOT NULL default '',
  `time_zone` varchar(255) NOT NULL default '',
  `time_difference` smallint(4) default '0',
  `theme` varchar(255) NOT NULL default '',
  `entries_read` text NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `mlf2_userdata`
--

INSERT INTO `mlf2_userdata` (`user_id`, `user_type`, `user_name`, `user_real_name`, `gender`, `birthday`, `user_pw`, `user_email`, `email_contact`, `user_hp`, `user_location`, `signature`, `profile`, `logins`, `last_login`, `last_logout`, `user_ip`, `registered`, `category_selection`, `thread_order`, `user_view`, `sidebar`, `fold_threads`, `thread_display`, `new_posting_notification`, `new_user_notification`, `user_lock`, `auto_login_code`, `pwf_code`, `activate_code`, `language`, `time_zone`, `time_difference`, `theme`, `entries_read`) VALUES
(1, 2, 'admin', '', 0, '0000-00-00', 'c45aa888acb35029b43df82040f77b1dfa377cb0ae07548e20', 'fenixvalera@hotmail.com', 1, '', '', '', '', 2, '2012-06-16 16:11:59', '2012-06-16 16:22:06', '127.0.0.1', '2012-06-16 16:07:25', NULL, 0, 0, 1, 0, 0, 0, 0, 0, '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_userdata_cache`
--

CREATE TABLE IF NOT EXISTS `mlf2_userdata_cache` (
  `cache_id` int(11) NOT NULL,
  `cache_signature` text NOT NULL,
  `cache_profile` text NOT NULL,
  PRIMARY KEY  (`cache_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `mlf2_userdata_cache`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mlf2_useronline`
--

CREATE TABLE IF NOT EXISTS `mlf2_useronline` (
  `ip` char(15) NOT NULL default '',
  `time` int(14) NOT NULL default '0',
  `user_id` int(11) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `mlf2_useronline`
--

INSERT INTO `mlf2_useronline` (`ip`, `time`, `user_id`) VALUES
('127.0.0.1', 1339886426, 0);
