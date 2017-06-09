-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июн 09 2017 г., 23:32
-- Версия сервера: 5.7.18-15-beget-5.7.18-15-2-3-log
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `clvrdgtl_neto42`
--

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--
-- Создание: Июн 07 2017 г., 21:49
-- Последнее обновление: Июн 09 2017 г., 20:32
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `user_id` tinytext NOT NULL,
  `assigned_user_id` tinytext,
  `description` text NOT NULL,
  `is_done` tinyint(4) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`id`, `user_id`, `assigned_user_id`, `description`, `is_done`, `date_added`) VALUES
(59, 'anar', 'MoreWillFollow', 'wqdasda', 1, '2017-06-09 23:21:10'),
(60, 'anarnebiyev@gmail.com', 'anarnebiyev@gmail.com', '@@@@@', 0, '2017-06-09 23:26:04'),
(61, 'anarnebiyev@gmail.com', 'anar', 'to ANAR from @', 0, '2017-06-09 23:26:13'),
(62, 'anar', 'anar', '22222', 1, '2017-06-09 23:27:04'),
(63, 'anar', 'anar', '22222', 1, '2017-06-09 23:27:29'),
(64, 'anar', 'MoreWillFollow', '22222', 0, '2017-06-09 23:27:30'),
(65, 'anar', 'anar', '22222', 1, '2017-06-09 23:27:31'),
(66, 'anar', 'anar', '22222', 1, '2017-06-09 23:27:31'),
(67, 'anar', 'MoreWillFollow', '22222', 0, '2017-06-09 23:27:32');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--
-- Создание: Июн 07 2017 г., 19:58
-- Последнее обновление: Июн 07 2017 г., 20:34
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `is_done` tinyint(4) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `is_done`, `date_added`) VALUES
(31, '1', 1, '2017-06-07 22:48:36'),
(32, '2', 0, '2017-06-07 22:48:20'),
(33, '3', 0, '2017-06-07 22:48:21'),
(34, '4', 1, '2017-06-07 22:48:33'),
(35, '5', 1, '2017-06-07 22:48:34'),
(36, '6', 0, '2017-06-07 22:48:24'),
(37, '7', 1, '2017-06-07 22:48:35'),
(40, '10', 1, '2017-06-07 22:53:00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--
-- Создание: Июн 07 2017 г., 20:30
-- Последнее обновление: Июн 09 2017 г., 20:16
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'MoreWillFollow', 'MoreWillFollow'),
(2, 'Nasty', 'Nasty'),
(3, 'Great User From Today', 'Great User From Today'),
(5, 'anarnebiyev@gmail.com', 'anarnebiyev@gmail.com'),
(6, 'anar', '7777777');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
