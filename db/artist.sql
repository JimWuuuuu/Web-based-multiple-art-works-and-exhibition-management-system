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
-- 資料表結構 `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(4) UNSIGNED NOT NULL,
  `artist_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `artist_pic` longblob NOT NULL,
  `artist_link_web` varchar(25) CHARACTER SET utf8 DEFAULT NULL,
  `artist_link_ig` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `artist_link_fb` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `artist_link_twi` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `art_filename` varchar(50) CHARACTER SET utf8 NOT NULL,
  `art_filesize` varchar(50) CHARACTER SET utf8 NOT NULL,
  `art_pictype` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
