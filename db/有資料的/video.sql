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
-- 資料庫： `10_lifestyle`
--

-- --------------------------------------------------------

--
-- 資料表結構 `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `video_bin_data` longblob NOT NULL,
  `video_filename` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `video_size` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `video_type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `upvideo_level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `upvideo_message` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `video`
--

INSERT INTO `video` (`id`, `user_id`, `video_name`, `video_bin_data`, `video_filename`, `video_size`, `video_type`, `upvideo_level`, `upvideo_message`) VALUES
(1, 2, 'æ¸¬è©¦å½±ç‰‡1', 0x433a5573657273757365724465736b746f7078616d7070096d70706870343731412e746d70, 'æ¸¬è©¦å½±ç‰‡1.mp4', '1540960', 'video/mp4', '1', '1');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
