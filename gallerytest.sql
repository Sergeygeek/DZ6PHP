-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 09 2018 г., 07:19
-- Версия сервера: 5.7.23
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
-- База данных: `gallerytest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(3) NOT NULL,
  `id_image` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `feedback` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `id_image`, `name`, `feedback`) VALUES
(1, 2, 'Sergey', 'Cegth'),
(2, 2, 'Sergey', 'kldfghlahgojelgodhjfgojaldfjngbohjeargdfjgbl;aerjgo'),
(3, 3, 'Антон', 'Здравствуйте, я Антон'),
(4, 4, 'Димон', 'Здравствуйте, я Димон');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alt` varchar(50) NOT NULL,
  `minSrc` varchar(50) NOT NULL,
  `fullSrc` varchar(50) NOT NULL,
  `count` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `alt`, `minSrc`, `fullSrc`, `count`) VALUES
(1, 'img1', 'Картинка1', 'images/min/1.jpg', 'images/max/1.jpg', 11),
(2, 'img2', 'Картинка2', 'images/min/2.jpg', 'images/max/2.jpg', 11),
(3, 'img3', 'Картинка3', 'images/min/3.jpg', 'images/max/3.jpg', 7),
(4, 'img4', 'Картинка4', 'images/min/4.jpg', 'images/max/4.jpg', 6);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
