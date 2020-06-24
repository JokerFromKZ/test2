-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2020 г., 16:32
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `checks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id` int(10) UNSIGNED NOT NULL,
  `opt1` text NOT NULL,
  `opt2` text NOT NULL,
  `cond` text NOT NULL,
  `other` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id`, `opt1`, `opt2`, `cond`, `other`, `date`, `time`) VALUES
(3, '', '100-300 тысяч рублей в месяц', 'Услуги', '', '24.06.2020', '16:50:24'),
(2, 'Готова юридическая модель,Прописаны стандарты и бизнес-процессы', '100-300 тысяч рублей в месяц,500-1000 тысяч рублей в месяц,Более миллиона рублей в месяц', 'Услуги', '', '24.06.2020', '16:46:41'),
(4, 'Готова юридическая модель', '300-500 тысяч рублей в месяц', 'Услуги', '', '24.06.2020', '16:54:20'),
(5, 'Готова юридическая модель', '300-500 тысяч рублей в месяц', 'Другое', 'sdsdsdsd', '24.06.2020', '16:54:31');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
