-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 28 2023 г., 15:39
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `examdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `finish_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name`, `finish_date`) VALUES
(20, 'Проект 1', '2025-10-23'),
(22, 'Проект 2', '2024-05-07'),
(24, 'Проект 3', '2026-01-14');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_birth` date NOT NULL,
  `post` varchar(50) NOT NULL DEFAULT 'Нет',
  `current_project` varchar(50) NOT NULL DEFAULT 'Нет',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `date_birth`, `post`, `current_project`) VALUES
(28, 'Сергей', 'Королёв', '1991-11-07', 'Backend-разработчик', 'Проект 1'),
(29, 'Карим', 'Кумбасар', '1985-06-16', 'Backend-разработчик', 'Проект 1'),
(31, 'Александр', 'Белов', '1995-05-29', 'Тимлид', 'Проект 1'),
(32, 'Вероника', 'Кузнецова', '2000-02-01', 'Дизайнер', 'Проект 2'),
(33, 'Константин', 'Колесников', '1979-08-05', 'Тестировщик', 'Проект 2'),
(34, 'Григорий', 'Зайцев', '1985-05-11', 'Backend-разработчик', 'Проект 2'),
(35, 'Евгений', 'Стрелков', '1990-03-03', 'Frontend-разработчик', 'Проект 3'),
(36, 'Юлия', 'Андреева', '1989-09-19', 'Продакт-менеджер', 'Проект 3'),
(37, 'София', 'Волкова', '1997-12-25', 'HR-менеджер', 'Нет');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
