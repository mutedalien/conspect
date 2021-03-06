-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 12 2019 г., 12:51
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hw6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `good_id` int(11) DEFAULT NULL,
  `sum` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT '1',
  `order_id` int(11) DEFAULT '0',
  `date_time` datetime DEFAULT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `user_id`, `good_id`, `sum`, `count`, `order_id`, `date_time`, `status_id`) VALUES
(7, 10, 2, 11241, 9, 2, '2019-09-12 02:12:20', 0),
(9, 10, 3, 19980, 20, 3, '2019-09-12 12:35:37', 2),
(10, 10, 4, 7995, 5, 3, '2019-09-12 12:35:37', 2),
(11, 10, 1, 1199, 1, 3, '2019-09-12 12:36:24', 0),
(12, 10, 6, 989, 1, 3, '2019-09-12 12:36:24', 0),
(13, 10, 7, 3398, 2, 3, '2019-09-12 12:36:24', 0),
(14, 10, 8, 1559, 1, 3, '2019-09-12 12:36:24', 0),
(15, 10, 1, 1199, 1, 3, '2019-09-12 12:38:53', 0),
(16, 10, 2, 1249, 1, 3, '2019-09-12 12:38:53', 0),
(17, 10, 3, 999, 1, 3, '2019-09-12 12:38:53', 0),
(18, 10, 4, 1599, 1, 3, '2019-09-12 12:38:53', 0),
(19, 10, 6, 1978, 2, 3, '2019-09-12 12:38:53', 0),
(20, 10, 1, 1199, 1, 4, '2019-09-12 12:40:28', 0),
(21, 10, 4, 1599, 1, 5, '2019-09-12 12:50:51', 3),
(22, 10, 3, 999, 1, 5, '2019-09-12 12:50:51', 3),
(23, 10, 2, 2498, 2, 0, '2019-09-12 12:51:04', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `param` text NOT NULL,
  `hit` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `price`, `photo`, `param`, `hit`, `discount`, `views`) VALUES
(1, 'XPS NP1245', 1199, 'img/photo_1.jpg', '', 0, 0, 51),
(2, 'HP HPNP732', 1249, 'img/photo_2.jpg', '', 1, 0, 129),
(3, 'HP HPNP792', 999, 'img/photo_3.jpg', '', 0, 0, 34),
(4, 'VARTRA 898564', 1599, 'img/photo_4.jpg', '', 0, 0, 0),
(5, 'LENOVO AX987RT', 1329, 'img/photo_5.jpg', '', 0, 0, 0),
(6, 'HP NP789HP', 989, 'img/photo_6.jpg', '', 0, 0, 0),
(7, 'MICROSOFT TAB4 PRO', 1699, 'img/photo_7.jpg', '', 0, 10, 0),
(8, 'HP NP733HP', 1559, 'img/photo_8.jpg', '', 0, 0, 0),
(9, 'LENOVO AX633RT', 1199, 'img/photo_9.jpg', '', 0, 0, 0),
(10, 'ASER 4562', 1999, 'img/photo_10.jpg', '', 0, 20, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES
(6, 'aidar', 'admin', 'f0d587897834a73c4ca8290d3b13742781dc9bdb52d04dc20036dbd8313ed055'),
(9, 'anna', 'anna_dev', '31e2eebacaa0ba9aafa510ff83e9f07a0e24d68405126293b3272084492872f7'),
(10, 'anna', 'anna', '31e2eebacaa0ba9aafa510ff83e9f07aa70f9e38ff015afaa9ab0aacabee2e13');

-- --------------------------------------------------------

--
-- Структура таблицы `views_log`
--

CREATE TABLE `views_log` (
  `id` int(11) NOT NULL,
  `view_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `views_log`
--

INSERT INTO `views_log` (`id`, `view_date`, `user_id`, `good_id`) VALUES
(1, '2019-09-11', 10, 1),
(2, '2019-09-11', 10, 1),
(3, '2019-09-11', 10, 1),
(4, '2019-09-11', 10, 1),
(5, '2019-09-11', 10, 1),
(6, '2019-09-11', 10, 1),
(7, '2019-09-11', 10, 1),
(8, '2019-09-11', 10, 1),
(9, '2019-09-11', 10, 1),
(10, '2019-09-11', 10, 1),
(11, '2019-09-11', 10, 1),
(12, '2019-09-11', 10, 1),
(13, '2019-09-11', 10, 1),
(14, '2019-09-11', 10, 1),
(15, '2019-09-11', 10, 1),
(16, '2019-09-11', 10, 1),
(17, '2019-09-11', 10, 1),
(18, '2019-09-11', 10, 1),
(19, '2019-09-11', 10, 1),
(20, '2019-09-11', 10, 1),
(21, '2019-09-11', 10, 1),
(22, '2019-09-11', 10, 1),
(23, '2019-09-11', 10, 1),
(24, '2019-09-11', 10, 1),
(25, '2019-09-11', 10, 1),
(26, '2019-09-11', 10, 1),
(27, '2019-09-11', 10, 1),
(28, '2019-09-11', 10, 1),
(29, '2019-09-11', 10, 1),
(30, '2019-09-11', 10, 1),
(31, '2019-09-11', 10, 1),
(32, '2019-09-11', 10, 1),
(33, '2019-09-12', 10, 1),
(34, '2019-09-12', 10, 1),
(35, '2019-09-12', 10, 1),
(36, '2019-09-12', 10, 1),
(37, '2019-09-12', 10, 1),
(38, '2019-09-12', 10, 1),
(39, '2019-09-12', 10, 1),
(40, '2019-09-12', 10, 1),
(41, '2019-09-12', 10, 1),
(42, '2019-09-12', 10, 1),
(43, '2019-09-12', 10, 1),
(44, '2019-09-12', 10, 1),
(45, '2019-09-12', 10, 1),
(46, '2019-09-12', 10, 1),
(47, '2019-09-12', 10, 1),
(48, '2019-09-12', 10, 1),
(49, '2019-09-12', 10, 1),
(50, '2019-09-12', 10, 1),
(51, '2019-09-12', 10, 1),
(52, '2019-09-12', 10, 2),
(53, '2019-09-12', 10, 2),
(54, '2019-09-12', 10, 2),
(55, '2019-09-12', 10, 2),
(56, '2019-09-12', 10, 2),
(57, '2019-09-12', 10, 2),
(58, '2019-09-12', 10, 2),
(59, '2019-09-12', 10, 2),
(60, '2019-09-12', 10, 2),
(61, '2019-09-12', 10, 2),
(62, '2019-09-12', 10, 2),
(63, '2019-09-12', 10, 2),
(64, '2019-09-12', 10, 2),
(65, '2019-09-12', 10, 2),
(66, '2019-09-12', 10, 2),
(67, '2019-09-12', 10, 2),
(68, '2019-09-12', 10, 2),
(69, '2019-09-12', 10, 2),
(70, '2019-09-12', 10, 2),
(71, '2019-09-12', 10, 2),
(72, '2019-09-12', 10, 2),
(73, '2019-09-12', 10, 2),
(74, '2019-09-12', 10, 2),
(75, '2019-09-12', 10, 2),
(76, '2019-09-12', 10, 2),
(77, '2019-09-12', 10, 2),
(78, '2019-09-12', 10, 2),
(79, '2019-09-12', 10, 2),
(80, '2019-09-12', 10, 2),
(81, '2019-09-12', 10, 2),
(82, '2019-09-12', 10, 2),
(83, '2019-09-12', 10, 2),
(84, '2019-09-12', 10, 2),
(85, '2019-09-12', 10, 2),
(86, '2019-09-12', 10, 2),
(87, '2019-09-12', 10, 2),
(88, '2019-09-12', 10, 2),
(89, '2019-09-12', 10, 2),
(90, '2019-09-12', 10, 2),
(91, '2019-09-12', 10, 2),
(92, '2019-09-12', 10, 2),
(93, '2019-09-12', 10, 2),
(94, '2019-09-12', 10, 2),
(95, '2019-09-12', 10, 2),
(96, '2019-09-12', 10, 2),
(97, '2019-09-12', 10, 2),
(98, '2019-09-12', 10, 2),
(99, '2019-09-12', 10, 2),
(100, '2019-09-12', 10, 2),
(101, '2019-09-12', 10, 2),
(102, '2019-09-12', 10, 2),
(103, '2019-09-12', 10, 2),
(104, '2019-09-12', 10, 2),
(105, '2019-09-12', 10, 2),
(106, '2019-09-12', 10, 2),
(107, '2019-09-12', 10, 2),
(108, '2019-09-12', 10, 2),
(109, '2019-09-12', 10, 2),
(110, '2019-09-12', 10, 2),
(111, '2019-09-12', 10, 2),
(112, '2019-09-12', 10, 2),
(113, '2019-09-12', 10, 2),
(114, '2019-09-12', 10, 2),
(115, '2019-09-12', 10, 2),
(116, '2019-09-12', 10, 2),
(117, '2019-09-12', 10, 2),
(118, '2019-09-12', 10, 2),
(119, '2019-09-12', 10, 2),
(120, '2019-09-12', 10, 2),
(121, '2019-09-12', 10, 2),
(122, '2019-09-12', 10, 2),
(123, '2019-09-12', 10, 2),
(124, '2019-09-12', 10, 2),
(125, '2019-09-12', 10, 2),
(126, '2019-09-12', 10, 2),
(127, '2019-09-12', 10, 2),
(128, '2019-09-12', 10, 2),
(129, '2019-09-12', 10, 2),
(130, '2019-09-12', 10, 2),
(131, '2019-09-12', 10, 2),
(132, '2019-09-12', 10, 2),
(133, '2019-09-12', 10, 2),
(134, '2019-09-12', 10, 2),
(135, '2019-09-12', 10, 2),
(136, '2019-09-12', 10, 2),
(137, '2019-09-12', 10, 2),
(138, '2019-09-12', 10, 2),
(139, '2019-09-12', 10, 2),
(140, '2019-09-12', 10, 2),
(141, '2019-09-12', 10, 2),
(142, '2019-09-12', 10, 2),
(143, '2019-09-12', 10, 2),
(144, '2019-09-12', 10, 2),
(145, '2019-09-12', 10, 2),
(146, '2019-09-12', 10, 2),
(147, '2019-09-12', 10, 2),
(148, '2019-09-12', 10, 2),
(149, '2019-09-12', 10, 2),
(150, '2019-09-12', 10, 2),
(151, '2019-09-12', 10, 2),
(152, '2019-09-12', 10, 2),
(153, '2019-09-12', 10, 2),
(154, '2019-09-12', 10, 2),
(155, '2019-09-12', 10, 2),
(156, '2019-09-12', 10, 2),
(157, '2019-09-12', 10, 2),
(158, '2019-09-12', 10, 2),
(159, '2019-09-12', 10, 2),
(160, '2019-09-12', 10, 2),
(161, '2019-09-12', 10, 2),
(162, '2019-09-12', 10, 2),
(163, '2019-09-12', 10, 2),
(164, '2019-09-12', 10, 2),
(165, '2019-09-12', 10, 2),
(166, '2019-09-12', 10, 2),
(167, '2019-09-12', 10, 2),
(168, '2019-09-12', 10, 2),
(169, '2019-09-12', 10, 2),
(170, '2019-09-12', 10, 2),
(171, '2019-09-12', 10, 2),
(172, '2019-09-12', 10, 2),
(173, '2019-09-12', 10, 2),
(174, '2019-09-12', 10, 2),
(175, '2019-09-12', 10, 2),
(176, '2019-09-12', 10, 2),
(177, '2019-09-12', 10, 2),
(178, '2019-09-12', 10, 2),
(179, '2019-09-12', 10, 2),
(180, '2019-09-12', 10, 2),
(181, '2019-09-12', 10, 3),
(182, '2019-09-12', 10, 3),
(183, '2019-09-12', 10, 3),
(184, '2019-09-12', 10, 3),
(185, '2019-09-12', 10, 3),
(186, '2019-09-12', 10, 3),
(187, '2019-09-12', 10, 3),
(188, '2019-09-12', 10, 3),
(189, '2019-09-12', 10, 3),
(190, '2019-09-12', 10, 3),
(191, '2019-09-12', 10, 3),
(192, '2019-09-12', 10, 3),
(193, '2019-09-12', 10, 3),
(194, '2019-09-12', 10, 3),
(195, '2019-09-12', 10, 3),
(196, '2019-09-12', 10, 3),
(197, '2019-09-12', 10, 3),
(198, '2019-09-12', 10, 3),
(199, '2019-09-12', 10, 3),
(200, '2019-09-12', 10, 3),
(201, '2019-09-12', 10, 3),
(202, '2019-09-12', 10, 3),
(203, '2019-09-12', 10, 3),
(204, '2019-09-12', 10, 3),
(205, '2019-09-12', 10, 3),
(206, '2019-09-12', 10, 3),
(207, '2019-09-12', 10, 3),
(208, '2019-09-12', 10, 3),
(209, '2019-09-12', 10, 3),
(210, '2019-09-12', 10, 3),
(211, '2019-09-12', 10, 3),
(212, '2019-09-12', 10, 3),
(213, '2019-09-12', 10, 3),
(214, '2019-09-12', 10, 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `views_log`
--
ALTER TABLE `views_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `views_log`
--
ALTER TABLE `views_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
