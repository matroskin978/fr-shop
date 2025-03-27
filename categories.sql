-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MariaDB-10.1
-- Время создания: Мар 25 2025 г., 19:48
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fr_shop_loc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `parent_id`) VALUES
(1, 'Женская обувь', 'zhenskaya-obuv-1', 0),
(2, 'Мужская обувь', 'muzhskaya-obuv-2', 0),
(3, 'Женская одежда', 'zhenskaya-odezhda-3', 0),
(4, 'Мужская одежда', 'muzhskaya-odezhda-4', 0),
(5, 'Туфли', 'tufli-5', 1),
(6, 'Сапоги', 'sapogi-6', 1),
(7, 'Кроссовки', 'krossovki-7', 1),
(8, 'Босоножки', 'bosonozhki-8', 1),
(9, 'Туфли', 'tufli-9', 2),
(10, 'Сапоги', 'sapogi-10', 2),
(11, 'Кроссовки', 'krossovki-11', 2),
(12, 'Куртки', 'kurtki-12', 3),
(13, 'Шубы', 'shuby-13', 3),
(14, 'Платья', 'platya-14', 3),
(15, 'Спортивные костюмы', 'sportivnye-kostyumy-15', 3),
(16, 'Джинсы', 'dzhinsy-16', 3),
(17, 'Куртки', 'kurtki-17', 4),
(18, 'Спортивные костюмы', 'sportivnye-kostyumy-18', 4),
(19, 'Костюмы', 'kostyumy-19', 4),
(20, 'Брюки', 'bryuki-20', 4),
(21, 'Футболки', 'futbolki-21', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
