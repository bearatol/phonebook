-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 07 2021 г., 22:24
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phonebook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `numbers`
--

CREATE TABLE `numbers` (
  `id` int(11) NOT NULL,
  `number` varchar(25) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `numbers`
--

INSERT INTO `numbers` (`id`, `number`, `user`) VALUES
(1, '+7-(999)-123-12-34', 1),
(2, '+7-(888)-123-12-34', 1),
(3, '+7-(777)-123-12-34', 1),
(4, '+7-(661)-123-12-34', 3),
(5, '+7-(662)-123-12-34', 3),
(6, '+7-(551)-123-12-34', 2),
(27, 'test', 25),
(28, 'test111', 25),
(29, 'test111', 25),
(30, 'ew234', 26),
(31, 'ew234', 26),
(32, '32324234', 27),
(33, '1232132132', 27);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Пупкин Евгений Павлович'),
(2, 'Смольников Игорь Вяеславович'),
(3, 'Кравцова Людмила Александровна'),
(25, 'test'),
(26, 'tere'),
(27, 'tttest');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `numbers`
--
ALTER TABLE `numbers`
  ADD CONSTRAINT `numbers_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
