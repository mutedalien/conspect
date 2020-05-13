-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 15 2018 г., 11:33
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`brand_id`, `name`) VALUES
(1, 'apple'),
(2, 'asus'),
(3, 'dell'),
(4, 'ericsson'),
(5, 'fly'),
(6, 'htc'),
(7, 'huawei'),
(8, 'lenovo'),
(9, 'lg'),
(10, 'meizu'),
(11, 'nokia'),
(12, 'samsung');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(255) NOT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `brand_id`) VALUES
(1, 'iPhone 5S', 24277, 1),
(2, 'iPhone 6', 15539, 1),
(3, 'IPhone 6 Plus', 17896, 1),
(4, 'iPhone 6S', 16987, 1),
(5, 'iPhone 6S Plus', 21947, 1),
(6, 'IPhone 7', 5729, 1),
(7, 'IPhone 7 Plus', 28799, 1),
(8, 'iPhone SE', 3637, 1),
(9, 'ZenFone 5', 11897, 2),
(10, 'ZenFone 5 Lite', 19085, 2),
(11, 'ZenFone 6', 14896, 2),
(12, 'ZenFone C ZC451CG', 26005, 2),
(13, 'ZenFone Go', 20562, 2),
(14, 'ZenFone Go ZC500TG', 4219, 2),
(15, 'ZenFone Selfie ZD551KL', 11814, 2),
(16, 'ZenFone Zoom', 5152, 2),
(17, 'Streak 5', 27392, 3),
(18, 'Venue', 9175, 3),
(19, 'R520', 21361, 4),
(20, 'R600', 12373, 4),
(21, 'SH888', 20781, 4),
(22, 'T10S', 6752, 4),
(23, 'T18s', 27155, 4),
(24, 'T20s', 8780, 4),
(25, 'T28s', 15550, 4),
(26, 'T29', 21372, 4),
(27, 'T39', 25806, 4),
(28, 'T65', 10445, 4),
(29, 'T66', 20283, 4),
(30, 'T68', 24239, 4),
(31, 'TH688', 16264, 4),
(32, 'Turbo IQ285', 26122, 5),
(33, 'V09', 10331, 5),
(34, 'V100', 15245, 5),
(35, 'V107', 13582, 5),
(36, 'V150', 21774, 5),
(37, 'V25', 8779, 5),
(38, 'V40', 16965, 5),
(39, 'V60', 5472, 5),
(40, 'W1', 9240, 5),
(41, 'Z300', 24133, 5),
(42, 'Touch Viva', 17564, 6),
(43, 'Touch2', 20528, 6),
(44, 'TyTN', 22715, 6),
(45, 'TyTN II', 6689, 6),
(46, 'TyTN Pro', 25347, 6),
(47, 'Velocity4G', 28563, 6),
(48, 'Wildfire', 23057, 6),
(49, 'Wildfire S', 8514, 6),
(50, 'Windows Phone 8s', 25714, 6),
(51, 'Windows Phone 8x', 20741, 6),
(52, 'u1280', 28038, 7),
(53, 'U7520', 28927, 7),
(54, 'U8110', 26409, 7),
(55, 'U8230', 17362, 7),
(56, 'U8500', 21255, 7),
(57, 'Vision U8850', 14976, 7),
(58, 'Y3 U03', 8154, 7),
(59, 'Y5C', 12448, 7),
(60, 'Y6', 17013, 7),
(61, 'S820', 5407, 8),
(62, 'S930', 3700, 8),
(63, 'Sisley S90', 5829, 8),
(64, 'Vibe P1', 20356, 8),
(65, 'Vibe P1m', 16067, 8),
(66, 'Vibe S1', 23486, 8),
(67, 'Vibe Shot', 17818, 8),
(68, 'Vibe X2 Pro', 24802, 8),
(69, 'Vibe Z', 9157, 8),
(70, 'Vibe Z2', 19911, 8),
(71, 'VX8500', 13904, 9),
(72, 'VX9800', 23829, 9),
(73, 'W3000', 29167, 9),
(74, 'W510', 12278, 9),
(75, 'W5300', 8708, 9),
(76, 'W7000', 15206, 9),
(77, 'W7020', 9599, 9),
(78, 'Wine Smart H410', 21501, 9),
(79, 'X Power K220DS', 11825, 9),
(80, 'Zero H650K', 23451, 9),
(81, 'M8', 6128, 10),
(82, 'M9', 18780, 10),
(83, 'Metal', 8112, 10),
(84, 'MX', 21528, 10),
(85, 'MX2', 22739, 10),
(86, 'MX3', 5140, 10),
(87, 'MX4 Pro', 25093, 10),
(88, 'MX4 Ubuntu Edition', 4479, 10),
(89, 'MX5', 4953, 10),
(90, 'PRO 5', 5048, 10),
(91, 'Pro 6', 21451, 10),
(92, 'U10', 6967, 10),
(93, 'U20', 29397, 10),
(94, 'X2-00', 19494, 11),
(95, 'X2-01', 5220, 11),
(96, 'X2-02', 21752, 11),
(97, 'X2-05', 14633, 11),
(98, 'X3', 28629, 11),
(99, 'X3-02', 13037, 11),
(100, 'X6', 8195, 11),
(101, 'X7', 27367, 11),
(102, 'XL Dual sim', 15012, 11),
(103, 'Z105', 25229, 12),
(104, 'Z130', 5338, 12),
(105, 'Z140', 3007, 12),
(106, 'Z150', 22709, 12),
(107, 'Z350', 26872, 12),
(108, 'Z400', 19898, 12),
(109, 'Z500', 18833, 12),
(110, 'Z510', 9822, 12),
(111, 'Z540', 24467, 12),
(112, 'Z550', 16198, 12),
(113, 'Z700', 5982, 12),
(114, 'Z710', 20295, 12);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
