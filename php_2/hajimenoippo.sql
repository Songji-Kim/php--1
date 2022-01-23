-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2022-01-23 01:02:22
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `hajimenoippo`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `hajimenoippo_an_table`
--

CREATE TABLE `hajimenoippo_an_table` (
  `id` int(12) NOT NULL,
  `companyname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `terms` tinyint(1) NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `hajimenoippo_an_table`
--

INSERT INTO `hajimenoippo_an_table` (`id`, `companyname`, `name`, `department`, `mail`, `terms`, `privacy`, `date`) VALUES
(1, 'testcompany', 'testname', '経理部', 'test@gmail.com', 1, 1, '2022-01-21 20:51:50'),
(2, 'testcompany2', 'testname2', '総務部', 'soumu@gmail.com', 1, 1, '2022-01-21 20:51:50'),
(3, 'testcompany3', 'testname3', '財務部', 'zaimu@gmail.com', 1, 1, '2022-01-21 20:51:50'),
(4, 'testcompany4', 'testname4', '法務部', 'houmu@gmail.com', 1, 1, '2022-01-21 20:51:50'),
(5, 'asdf', 'asdf', 'asdf', 'asdf', 0, 0, '2022-01-22 20:08:32'),
(6, 'フォーム株式会社', 'フォーム太郎', 'フォーム部', 'form1@test.jp', 0, 0, '2022-01-22 20:09:53'),
(7, 'aaaa', 'aaaa', 'aaaa', 'aaaa', 0, 0, '2022-01-22 20:46:47'),
(8, 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', 0, 0, '2022-01-22 20:47:28'),
(9, 'asdf', 'asdf', 'asdf', 'asdf', 0, 0, '2022-01-22 20:48:58'),
(10, 'asdf', 'asdf', 'asdf', 'asdf', 0, 0, '2022-01-22 20:57:45'),
(11, 'aaaaaa', 'aaaaaa', 'aaaaa', 'aaaaa', 0, 0, '2022-01-22 20:58:18'),
(12, 'asdf', 'asdf', 'asdf', 'asdf', 0, 0, '2022-01-22 21:10:36'),
(13, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', 0, 0, '2022-01-22 21:47:25');

-- --------------------------------------------------------

--
-- テーブルの構造 `shindan_an_table`
--

CREATE TABLE `shindan_an_table` (
  `id` int(12) NOT NULL,
  `q1` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `shindan_an_table`
--

INSERT INTO `shindan_an_table` (`id`, `q1`, `date`) VALUES
(1, 'yes', '2022-01-22 21:44:49');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `hajimenoippo_an_table`
--
ALTER TABLE `hajimenoippo_an_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `shindan_an_table`
--
ALTER TABLE `shindan_an_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `hajimenoippo_an_table`
--
ALTER TABLE `hajimenoippo_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- テーブルの AUTO_INCREMENT `shindan_an_table`
--
ALTER TABLE `shindan_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
