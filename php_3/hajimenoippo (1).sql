-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 2022-01-30 03:50:08
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
  `companyname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `u_pw` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `terms` tinyint(1) NOT NULL,
  `privacy` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `hajimenoippo_an_table`
--

INSERT INTO `hajimenoippo_an_table` (`id`, `companyname`, `name`, `department`, `mail`, `u_pw`, `terms`, `privacy`, `date`) VALUES
(2, 'testcompany2', 'testname2', '総務部', 'soumu@gmail.com', '', 1, 1, '2022-01-21 20:51:50'),
(3, 'testcompany3', 'testname3', '財務部', 'zaimu@gmail.com', '', 1, 1, '2022-01-21 20:51:50'),
(4, 'testcompany4', 'testname4', '法務部', 'houmu@gmail.com', '', 1, 1, '2022-01-21 20:51:50'),
(5, 'asdf', 'asdf', 'asdf', 'asdf', '', 0, 0, '2022-01-22 20:08:32'),
(6, 'フォーム株式会社', 'フォーム太郎', 'フォーム部', 'form1@test.jp', '', 0, 0, '2022-01-22 20:09:53'),
(7, 'aaaa', 'aaaa', 'aaaa', 'aaaa', '', 0, 0, '2022-01-22 20:46:47'),
(8, 'aaaaa', 'aaaaa', 'aaaaa', 'aaaaa', '', 0, 0, '2022-01-22 20:47:28'),
(9, 'asdf', 'asdf', 'asdf', 'asdf', '', 0, 0, '2022-01-22 20:48:58'),
(18, 'test0125', 'test0125', 'test', 'test@test.jp', 'testpw', 0, 0, '2022-01-25 23:49:52'),
(21, 'テスト(株)', '田中太郎', '経理部', 'test@test.com', 'testpw', 1, 1, '2022-01-27 09:22:14'),
(27, 'asdfasdfasdfasdasdfasdfa', 'asdsdfasdfa', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasd', 1, 1, '2022-01-28 12:12:23'),
(28, 'ログインから', 'の流れ', 'で登録', 'sita@sita.jp', 'baai', 1, 1, '2022-01-28 12:14:06'),
(29, '登録した後', 'もう一度', '登録を', 'okonatta@okonatta.jp', 'baai', 1, 1, '2022-01-28 12:14:38'),
(30, 'リロードして', '登録', '処理を', 'reroad@reroad.jp', 'baai', 1, 1, '2022-01-28 12:15:13'),
(31, 'html', 'special', 'を付けた', 'atode@atode.jp', 'jikkou', 1, 1, '2022-01-28 12:17:23'),
(32, 'koushin', 'script', 'wo', 'irete@irete.jp', 'yatta', 1, 1, '2022-01-28 12:23:48'),
(33, 'テスト(株)', '診断まで', '行くように', 'shita@shita.jp', 'ato', 1, 1, '2022-01-30 12:02:15'),
(34, 'asdf', '田中太郎', '経理部', 'test@test.com', 'baai', 1, 1, '2022-01-30 12:17:34'),
(35, 'テスト', 'テスト太郎', 'テスト部', 'test@test.com', 'testtesttest', 1, 1, '2022-01-30 12:39:55');

-- --------------------------------------------------------

--
-- テーブルの構造 `shindan_an_table`
--

CREATE TABLE `shindan_an_table` (
  `id` int(12) NOT NULL,
  `q1` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `shindan_an_table`
--

INSERT INTO `shindan_an_table` (`id`, `q1`, `q2`, `q3`, `date`) VALUES
(1, 'yes', 0, 0, '2022-01-22 21:44:49'),
(2, 'hai', 0, 0, '2022-01-23 11:27:02');

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- テーブルの AUTO_INCREMENT `shindan_an_table`
--
ALTER TABLE `shindan_an_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
