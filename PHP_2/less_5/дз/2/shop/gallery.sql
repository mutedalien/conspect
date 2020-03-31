-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 18 2019 г., 22:03
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
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `order_date` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `user_login` varchar(50) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_for_one` decimal(10,0) NOT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `order_date`, `ip`, `user_login`, `product_id`, `quantity`, `price_for_one`, `total_price`) VALUES
(10, '2019/01/28 21:35', '127.0.0.1', 'qwerty', 7, 1, '450', 450),
(11, '2019/01/28 21:51', '127.0.0.1', 'qwerty2', 4, 12, '25', 300),
(12, '2019/01/28 21:52', '127.0.0.1', 'qwerty2', 13, 1, '800', 800),
(14, '2019/02/04 21:13', '127.0.0.1', 'qwerty', 2, 5, '300', 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(3, 'Children'),
(1, 'Men'),
(2, 'Women');

-- --------------------------------------------------------

--
-- Структура таблицы `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `author`, `feedback`, `product_id`) VALUES
(28, 'dsadasd', 'dasdasd', 15),
(29, 'Maria', 'asdasdasdasd', 14),
(30, 'Max', 'asdasdasdasdas', 14),
(31, 'Mary', 'dasdasdasd', 13),
(32, 'Mary', 'dasdasdasd', 13),
(33, 'Mary', 'dasdasdasd', 13),
(34, 'DASDASDAS', 'QEADADASD', 15),
(35, 'йцуйцуйц', 'уйцуйцуйцуйцу', 1),
(36, 'вапмвыпвп', 'аыываываываываываываыв', 5),
(37, 'aqwewqewqe', 'adqwedqweqweqweqweq', 19),
(38, '', '', 277),
(39, '', '', 277),
(40, '', '', 277),
(41, '', '', 277),
(42, '', '', 277);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `main_dir` varchar(250) NOT NULL,
  `main_name` varchar(100) NOT NULL,
  `mini_dir` varchar(250) DEFAULT NULL,
  `mini_name` varchar(100) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`img_id`, `main_dir`, `main_name`, `mini_dir`, `mini_name`, `file_size`, `view_count`) VALUES
(275, 'img/featured', 'featured-1.jpg', 'img/featured/minimized', 'featured-1.jpg', 14239, 2),
(276, 'img/featured', 'featured-10.jpg', 'img/featured/minimized', 'featured-10.jpg', 34877, 1),
(277, 'img/featured', 'featured-11.jpg', 'img/featured/minimized', 'featured-11.jpg', 28991, 0),
(278, 'img/featured', 'featured-12.jpg', 'img/featured/minimized', 'featured-12.jpg', 5202, 4),
(279, 'img/featured', 'featured-2.jpg', 'img/featured/minimized', 'featured-2.jpg', 9911, 1),
(280, 'img/featured', 'featured-3.jpg', 'img/featured/minimized', 'featured-3.jpg', 32552, 4),
(281, 'img/featured', 'featured-4.jpg', 'img/featured/minimized', 'featured-4.jpg', 13347, 0),
(282, 'img/featured', 'featured-5.jpg', 'img/featured/minimized', 'featured-5.jpg', 13712, 0),
(283, 'img/featured', 'featured-6.jpg', 'img/featured/minimized', 'featured-6.jpg', 10232, 3),
(284, 'img/featured', 'featured-7.jpg', 'img/featured/minimized', 'featured-7.jpg', 9925, 0),
(285, 'img/featured', 'featured-8.jpg', 'img/featured/minimized', 'featured-8.jpg', 8546, 5),
(286, 'img/featured', 'featured-9.jpg', 'img/featured/minimized', 'featured-9.jpg', 31229, 1),
(289, '../public/img/uploaded_images', 'adv-slider.jpg', '../public/img/uploaded_images/minimized', 'adv-slider.jpg', 97018, 36),
(290, '../public/img/uploaded_images', 'promo-1.jpg', '../public/img/uploaded_images/minimized', 'promo-1.jpg', 48150, 35),
(292, '../public/img/uploaded_images', 'Slider-1.jpg', '../public/img/uploaded_images/minimized', 'Slider-1.jpg', 60666, 23),
(294, '../public/img/uploaded_images', 'promo-4.jpg', '../public/img/uploaded_images/minimized', 'promo-4.jpg', 22236, 1),
(296, '../public/img/uploaded_images', 'promo-3.jpg', '../public/img/uploaded_images/minimized', 'promo-3.jpg', 15585, 2),
(297, '../public/img/uploaded_images', 'single-page-slider.jpg', '../public/img/uploaded_images/minimized', 'single-page-slider.jpg', 21720, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `img_id` int(11) NOT NULL,
  `view_count` int(11) DEFAULT '0',
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `price`, `img_id`, `view_count`, `category`) VALUES
(1, 'Product1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 100, 275, 22, 1),
(2, 'Product2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 300, 276, 12, 2),
(3, 'Product3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 200, 277, 4, 2),
(4, 'Product4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 25, 278, 6, 2),
(5, 'Product5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 250, 279, 16, 2),
(6, 'Product6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 400, 280, 3, 1),
(7, 'Product7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 450, 281, 2, 2),
(8, 'Product8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 500, 282, 0, 2),
(9, 'Product9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 570, 283, 6, 1),
(10, 'Product10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 430, 284, 0, 1),
(11, 'Product11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 480, 285, 5, 1),
(12, 'Product12', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 700, 286, 1, 2),
(13, 'Product13', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 800, 289, 41, 2),
(14, 'Product14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 900, 290, 40, 1),
(15, 'Product15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 850, 292, 47, 1),
(16, 'Product16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 710, 294, 7, 3),
(17, 'Product17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 140, 296, 9, 2),
(18, 'Product18', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vestibulum eros non elit semper lobortis. Vivamus faucibus mattis mauris, ut convallis nibh fermentum eget. Aenean id varius velit, vel iaculis.', 370, 297, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `big_path` varchar(250) NOT NULL,
  `small_path` varchar(250) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_data`
--

INSERT INTO `user_data` (`id`, `user_first_name`, `user_last_name`, `login`, `password`) VALUES
(1, 'Валерий', 'М', 'qwerty', '12345'),
(2, 'fghfgh', 'fhfhfgh', 'fhfghfgh', '123'),
(4, 'dsfsdf', 'fsdfsf', 'fsdfdsf', '1'),
(6, '12qweq', 'eqweq', 'eqweqw', '1'),
(7, 'Валерий', 'К', 'qwerty2', '12345'),
(8, 'ewqeqwe', 'eqweqwe', 'eqweqwe', '123'),
(9, 'уцйцуй', 'уйцуйцу', 'цйуйцу', '123'),
(10, 'Маша', 'Дуда', 'masya', '12345'),
(11, 'Валерий', 'K', 'admin', 'qwerty');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cart_id_uindex` (`id`),
  ADD UNIQUE KEY `cart_product_id_uindex` (`product_id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_id_uindex` (`id`),
  ADD UNIQUE KEY `category_cat_name_uindex` (`cat_name`);

--
-- Индексы таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feedbacks_id_uindex` (`id`),
  ADD KEY `feedbacks_images_id_fk` (`product_id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`),
  ADD UNIQUE KEY `images_id_uindex` (`img_id`),
  ADD UNIQUE KEY `images_main_dir_main_name_uindex` (`main_dir`,`main_name`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_id_uindex` (`id`),
  ADD KEY `products_images_id_fk` (`img_id`),
  ADD KEY `products_category_id_fk` (`category`);

--
-- Индексы таблицы `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `test_id_uindex` (`id`);

--
-- Индексы таблицы `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_data_id_uindex` (`id`),
  ADD UNIQUE KEY `user_data_login_uindex` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_fk` FOREIGN KEY (`category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `products_images_id_fk` FOREIGN KEY (`img_id`) REFERENCES `images` (`img_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
