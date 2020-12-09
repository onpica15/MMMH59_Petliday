-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 12 月 09 日 03:35
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `petliday`
--

-- --------------------------------------------------------

--
-- 資料表結構 `member_avatar`
--

CREATE TABLE `member_avatar` (
  `sid` int(11) NOT NULL,
  `id` varchar(255) DEFAULT NULL,
  `profile_image` mediumtext DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member_avatar`
--

INSERT INTO `member_avatar` (`sid`, `id`, `profile_image`, `email`, `password`, `mobile`, `birthday`, `name`, `address`) VALUES
(1, 'boy123', NULL, 'boy123@petliday.com', 'test123', '908512320', '1995-12-05', '柯基裘', '台北市信義區大榮星街195巷28號10樓'),
(2, 'girl456', NULL, 'girl456@petliday.com', 'test456', '998513275', '1963-09-10', '戴啵啵', '花蓮縣花蓮市國盛三街233號8樓'),
(3, 'pity0507', NULL, 'pity0507@petliday.com', 'test789', '905289518', '1982-06-08', '黎筱霈', '台南市東區弘勤路2段33弄2號5樓');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member_avatar`
--
ALTER TABLE `member_avatar`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_avatar`
--
ALTER TABLE `member_avatar`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
