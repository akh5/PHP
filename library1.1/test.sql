-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020-03-07 20:34:59
-- 服务器版本： 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `books`
--

CREATE TABLE `books` (
  `Number` int(4) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `BorrowingState` varchar(255) NOT NULL DEFAULT '可借',
  `SurplusQuantity` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`Number`, `BookName`, `Category`, `BorrowingState`, `SurplusQuantity`) VALUES
(1, '狂人日记', 'country', '可借', '6'),
(2, '飞鸟集', 'foreign', '可借', '9'),
(3, '白夜行', 'novel', '可借', '3'),
(4, '名侦探柯南', 'comic', '可借', '3'),
(5, '红楼梦', 'country', '可借', '2'),
(6, '三个火枪手', 'foreign', '可借', '6'),
(7, '巴黎圣母院', 'foreign', '可借', '15'),
(8, 'JAVA从入门到入土', 'since', '可借', '4'),
(9, '挪威的森林', 'novel', '可借', '6'),
(10, '灌篮高手', 'comic', '可借', '2'),
(11, '西游记', 'country', '可借', '3'),
(12, '数据结构', 'since', '可借', '2');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `account` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`account`, `password`) VALUES
('test', '123'),
('abc', '123'),
('a', 'a'),
('testuser', '1231'),
('testuser2', '1231'),
('testuser3', '1231'),
('abcdef', '123'),
('zhangsan', '12345'),
('fdsa', 'as');

-- --------------------------------------------------------

--
-- 表的结构 `userbook`
--

CREATE TABLE `userbook` (
  `user` varchar(255) NOT NULL,
  `BookName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `userbook`
--

INSERT INTO `userbook` (`user`, `BookName`) VALUES
('abc', '狂人日记'),
('abc', '红楼梦');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
