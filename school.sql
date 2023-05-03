-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 03 2023 г., 17:02
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `school`
--

-- --------------------------------------------------------

--
-- Структура таблицы `app`
--

CREATE TABLE `app` (
  `id_add` int(11) NOT NULL,
  `name_z` varchar(15) NOT NULL,
  `family` varchar(15) NOT NULL,
  `email` varchar(24) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `support`
--

CREATE TABLE `support` (
  `id_req` int(11) NOT NULL,
  `name_s` varchar(15) NOT NULL,
  `family` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `problem` varchar(40) NOT NULL,
  `status_req` varchar(20) NOT NULL DEFAULT 'На рассмотрении'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `support`
--

INSERT INTO `support` (`id_req`, `name_s`, `family`, `email`, `phone`, `problem`, `status_req`) VALUES
(1, 'Денис', 'Чикликчи', 'denis.vin228@gmail.com', '+79081398774', 'Упал со стула', 'Отклонено'),
(2, 'Денис', 'Чикликчи', 'denis.vin228@gmail.com', '+79081398774', 'Упал со стула', 'Отклонено'),
(3, 'Денис', 'Чикликчи', 'denis.vin228@gmail.com', '+79081398774', 'Упал со стула', 'Решено');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `login` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `perm` varchar(11) NOT NULL DEFAULT 'user',
  `email` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `name`, `login`, `password`, `perm`, `email`) VALUES
(1, 'vova', 'vova', 'vovka', 'user', ''),
(2, 'denis', 'den', 'denden', 'admin', ''),
(3, 'geg', 'geg', '12345', 'user', 'denis.vinchester228@gmai');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id_add`);

--
-- Индексы таблицы `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id_req`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `app`
--
ALTER TABLE `app`
  MODIFY `id_add` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `support`
--
ALTER TABLE `support`
  MODIFY `id_req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
