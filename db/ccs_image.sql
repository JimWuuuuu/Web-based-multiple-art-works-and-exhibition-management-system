-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 10.1.24-MariaDB
-- PHP 版本： 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test_db`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ccs_image`
--

CREATE TABLE `ccs_image` (
  `id` int(4) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `piece_name` varchar(50) DEFAULT NULL,
  `description` mediumtext,
  `piece_class` text,
  `bin_data` longblob,
  `filename` varchar(50) DEFAULT NULL,
  `filesize` varchar(50) DEFAULT NULL,
  `filetype` varchar(50) DEFAULT NULL,
  `upimage_level` varchar(50) NOT NULL,
  `upimage_message` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `ccs_image`
--
ALTER TABLE `ccs_image`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `ccs_image`
--
ALTER TABLE `ccs_image`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
