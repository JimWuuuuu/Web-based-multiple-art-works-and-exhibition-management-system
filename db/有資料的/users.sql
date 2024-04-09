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
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `admin_sex` varchar(255) DEFAULT NULL,
  `admin_age` varchar(255) DEFAULT NULL,
  `admin_FID` varchar(255) DEFAULT NULL,
  `admin_date` varchar(255) DEFAULT NULL,
  `admin_phone` varchar(255) DEFAULT NULL,
  `admin_adress` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 資料表的匯出資料 `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `level`, `avatar`, `admin_sex`, `admin_age`, `admin_FID`, `admin_date`, `admin_phone`, `admin_adress`, `admin_email`) VALUES
(1, 'admin304u', 'lab304u', 'æœƒå“¡å¸³è™Ÿ1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'admin304', 'lab304', 'ç®¡ç†å“¡å¸³è™Ÿ1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
