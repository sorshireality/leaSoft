-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Окт 06 2019 г., 15:22
-- Версия сервера: 5.7.27-0ubuntu0.18.04.1
-- Версия PHP: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `munchkin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notations_table`
--

CREATE TABLE `notations_table` (
  `id` int(11) NOT NULL,
  `notate` varchar(1000) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `notations_table`
--

INSERT INTO `notations_table` (`id`, `notate`, `author`) VALUES
(1, 'Yo how are you', 'Alexandr Tiutiunnyk'),
(2, 'Im fine thank you', 'Jurii Haritonov'),
(13, 'Delete me', 'Barak Obama'),
(14, 'Make homework', 'Barak Obama'),
(15, 'Make homework', 'Barak Obama');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notations_table`
--
ALTER TABLE `notations_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `notations_table`
--
ALTER TABLE `notations_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
