-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成日時: 2013 年 5 月 14 日 11:12
-- サーバのバージョン: 5.5.19
-- PHP のバージョン: 5.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `digup`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `anser`
--

CREATE TABLE IF NOT EXISTS `anser` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `questionary_id` int(11) NOT NULL COMMENT 'アンケートID',
  `question_id` int(11) NOT NULL COMMENT '質問ID',
  `count` int(11) NOT NULL DEFAULT '0' COMMENT '回答',
  `created` datetime NOT NULL,
  `modefied` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='回答テーブル' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `questionary_id` int(11) NOT NULL COMMENT 'アンケートのID',
  `detail` varchar(200) NOT NULL COMMENT '質問内容',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='アンケートの質問' AUTO_INCREMENT=41 ;

--
-- テーブルのデータのダンプ `question`
--

INSERT INTO `question` (`id`, `questionary_id`, `detail`, `created`, `modified`) VALUES
(1, 1, 'dfas', '2013-04-08 12:31:10', '2013-04-08 12:31:10'),
(2, 1, 'fdsafdsa', '2013-04-08 12:31:10', '2013-04-08 12:31:10'),
(3, 1, 'fdsafdas', '2013-04-08 12:31:10', '2013-04-08 12:31:10'),
(4, 1, 'fdsfdsafds', '2013-04-08 12:31:10', '2013-04-08 12:31:10'),
(5, 1, 'fdsafdafdsa', '2013-04-08 12:31:10', '2013-04-08 12:31:10'),
(6, 2, 'ã‚ã‚ã‚', '2013-04-08 12:36:37', '2013-04-08 12:36:37'),
(7, 2, 'ã„ã„ã„', '2013-04-08 12:36:37', '2013-04-08 12:36:37'),
(8, 2, '', '2013-04-08 12:36:37', '2013-04-08 12:36:37'),
(9, 2, '', '2013-04-08 12:36:37', '2013-04-08 12:36:37'),
(10, 2, '', '2013-04-08 12:36:37', '2013-04-08 12:36:37'),
(11, 3, 'ã‚ã‚ã‚ã‚', '2013-04-08 12:38:29', '2013-04-08 12:38:29'),
(12, 3, 'ã„ã„ã„ã„', '2013-04-08 12:38:29', '2013-04-08 12:38:29'),
(13, 3, 'ã†ã†ã†ã†', '2013-04-08 12:38:29', '2013-04-08 12:38:29'),
(14, 3, 'ãˆãˆãˆãˆ', '2013-04-08 12:38:29', '2013-04-08 12:38:29'),
(15, 3, 'ãŠãŠãŠãŠ', '2013-04-08 12:38:29', '2013-04-08 12:38:29'),
(16, 4, 'vcxvcxzvcxz', '2013-04-08 12:38:40', '2013-04-08 12:38:40'),
(17, 5, 'dsafdas', '2013-04-08 22:53:07', '2013-04-08 22:53:07'),
(18, 5, 'fdsafdsa', '2013-04-08 22:53:07', '2013-04-08 22:53:07'),
(19, 5, 'dsafdsa', '2013-04-08 22:53:07', '2013-04-08 22:53:07'),
(20, 6, 'fds', '2013-04-09 06:47:48', '2013-04-09 06:47:48'),
(21, 7, 'vcvzxc', '2013-04-09 06:54:34', '2013-04-09 06:54:34'),
(22, 7, 'vcxvcxz', '2013-04-09 06:54:34', '2013-04-09 06:54:34'),
(23, 7, 'vcxzx', '2013-04-09 06:54:34', '2013-04-09 06:54:34'),
(24, 9, 'fdsgfds', '2013-04-09 19:32:35', '2013-04-09 19:32:35'),
(25, 9, 'gfdsgfds', '2013-04-09 19:32:35', '2013-04-09 19:32:35'),
(26, 11, 'fdgfdfgds', '2013-04-09 20:04:50', '2013-04-09 20:04:50'),
(27, 11, 'gfdgfds', '2013-04-09 20:04:50', '2013-04-09 20:04:50'),
(28, 11, 'gfdgfds', '2013-04-09 20:04:50', '2013-04-09 20:04:50'),
(29, 11, 'fdgfsd', '2013-04-09 20:04:50', '2013-04-09 20:04:50'),
(30, 11, 'gfdgfdsgfsd', '2013-04-09 20:04:50', '2013-04-09 20:04:50'),
(31, 13, 'dfsafdsa', '2013-04-09 22:29:26', '2013-04-09 22:29:26'),
(32, 15, 'fdsfdsafdsa', '2013-04-09 22:34:14', '2013-04-09 22:34:14'),
(33, 16, 'fdsfdsa', '2013-04-09 22:34:28', '2013-04-09 22:34:28'),
(34, 16, 'fdsafda', '2013-04-09 22:34:28', '2013-04-09 22:34:28'),
(35, 16, 'fdsfda', '2013-04-09 22:34:28', '2013-04-09 22:34:28'),
(36, 16, 'fdsafdas', '2013-04-09 22:34:28', '2013-04-09 22:34:28'),
(37, 16, 'fdsfdfdas', '2013-04-09 22:34:28', '2013-04-09 22:34:28'),
(38, 19, 'fdsafdas', '2013-04-09 22:41:06', '2013-04-09 22:41:06'),
(39, 21, 'dsafdsa', '2013-04-16 00:01:10', '2013-04-16 00:01:10'),
(40, 24, 'fdsfdsa', '2013-04-16 00:02:14', '2013-04-16 00:02:14');

-- --------------------------------------------------------

--
-- テーブルの構造 `questionary`
--

CREATE TABLE IF NOT EXISTS `questionary` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `detail` varchar(500) NOT NULL COMMENT 'アンケートの内容',
  `type` varchar(1) NOT NULL COMMENT '複数回答、1 = 有り、0 = 無し',
  `period` smallint(6) NOT NULL COMMENT 'アンケートの期間',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='アンケート' AUTO_INCREMENT=25 ;

--
-- テーブルのデータのダンプ `questionary`
--

INSERT INTO `questionary` (`id`, `detail`, `type`, `period`, `created`, `modified`) VALUES
(1, 'fdfas', '1', 1, '2013-04-08 12:31:10', '2013-04-08 12:31:10'),
(2, 'ã¦ã™ã¨', '1', 4, '2013-04-08 12:36:37', '2013-04-08 12:36:37'),
(3, 'ã¦ã™ã¨', '1', 5, '2013-04-08 12:38:29', '2013-04-08 12:38:29'),
(4, 'vcvcxzcvx', '1', 1, '2013-04-08 12:38:40', '2013-04-08 12:38:40'),
(5, 'dfafdsafdsa', '1', 5, '2013-04-08 22:53:07', '2013-04-08 22:53:07'),
(6, 'fdafdsa', '1', 1, '2013-04-09 06:47:48', '2013-04-09 06:47:48'),
(7, 'fcvvcxz', '1', 1, '2013-04-09 06:54:34', '2013-04-09 06:54:34'),
(8, 'vcvczcxz', '1', 1, '2013-04-09 19:24:16', '2013-04-09 19:24:16'),
(9, 'cvfdgfds', '1', 1, '2013-04-09 19:32:35', '2013-04-09 19:32:35'),
(10, '', '1', 1, '2013-04-09 19:58:14', '2013-04-09 19:58:14'),
(11, 'fddafda', '1', 1, '2013-04-09 20:04:50', '2013-04-09 20:04:50'),
(12, 'fdsfdsa', '1', 1, '2013-04-09 22:29:17', '2013-04-09 22:29:17'),
(13, 'fdsfgdafda', '1', 1, '2013-04-09 22:29:26', '2013-04-09 22:29:26'),
(14, 'fgdsafgda', '1', 1, '2013-04-09 22:34:04', '2013-04-09 22:34:04'),
(15, 'fdsafdsfdsa', '1', 1, '2013-04-09 22:34:14', '2013-04-09 22:34:14'),
(16, 'fdsfdsafds', '1', 1, '2013-04-09 22:34:28', '2013-04-09 22:34:28'),
(17, 'fdsfdsafdsa', '1', 1, '2013-04-09 22:39:21', '2013-04-09 22:39:21'),
(18, 'dsfdsafda', '1', 1, '2013-04-09 22:40:55', '2013-04-09 22:40:55'),
(19, 'fdsafdfdsafda', '1', 1, '2013-04-09 22:41:06', '2013-04-09 22:41:06'),
(20, '', '1', 1, '2013-04-16 00:01:01', '2013-04-16 00:01:01'),
(21, 'fdsafdsa', '1', 1, '2013-04-16 00:01:10', '2013-04-16 00:01:10'),
(22, 'fdsfdsafdsa', '1', 1, '2013-04-16 00:01:16', '2013-04-16 00:01:16'),
(23, 'dasfdas', '1', 1, '2013-04-16 00:02:08', '2013-04-16 00:02:08'),
(24, 'fdsfds', '1', 1, '2013-04-16 00:02:14', '2013-04-16 00:02:14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
