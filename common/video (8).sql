-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 23 2017 г., 14:45
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `video`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`) VALUES
(3, 0, 'Рок'),
(4, 0, 'Джасс'),
(5, 0, 'Рок-рол'),
(6, 0, 'Полька');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `video_id`, `profile_id`, `content`, `date`) VALUES
(1, 0, 1, 1, 'Шикарный ковер', '2017-07-14 00:00:00'),
(2, 0, 1, 1, 'Ковер бесподобен', '2017-07-15 00:00:00'),
(3, 0, 1, 1, 'Лучший ковер', '2017-07-16 00:00:00'),
(4, 0, 1, 1, 'Да да да', '2017-07-17 00:00:00'),
(5, 1, 1, 1, 'Галифак Бог', '2017-07-27 00:00:00'),
(6, 1, 1, 2, 'ыаыаыа', '2017-07-17 13:11:22'),
(7, 1, 1, 2, 'sfsf', '2017-07-21 20:49:06'),
(8, 1, 1, 2, 'God', '2017-07-21 20:49:15'),
(9, 0, 2, 2, 'Смурфы супер', '2017-07-22 12:09:32'),
(10, 9, 2, 2, 'Смурфы супер пупер', '2017-07-22 12:11:10'),
(11, 9, 2, 2, 'дуберпупер', '2017-07-22 12:11:24'),
(12, 9, 2, 2, 'ахахлаймахалай\r\n', '2017-07-22 12:16:45'),
(13, 9, 2, 2, 'Помогите', '2017-07-22 12:20:35'),
(14, 9, 2, 2, 'фффф', '2017-07-22 12:25:58'),
(15, 0, 2, 2, 'Лалала', '2017-07-22 12:26:11'),
(16, 9, 2, 2, 'Лалалав', '2017-07-22 12:26:22'),
(17, 9, 2, 2, 'Смурфы супер пуперв', '2017-07-22 12:28:31'),
(18, 9, 2, 2, 'Смурфы супер пупервввввв', '2017-07-22 12:28:42'),
(19, 9, 2, 2, 'sfsf', '2017-07-22 12:57:04');

-- --------------------------------------------------------

--
-- Структура таблицы `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `favorites`
--

INSERT INTO `favorites` (`id`, `profile_id`, `video_id`) VALUES
(8, 2, 4),
(10, 2, 3),
(16, 2, 1),
(28, 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id`, `profile_id`, `video_id`) VALUES
(1, 1, 1),
(7, 2, 1),
(12, 2, 2),
(13, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1499683713),
('m130524_201442_init', 1499683716);

-- --------------------------------------------------------

--
-- Структура таблицы `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `favorites` varchar(255) NOT NULL,
  `about_myself` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `date_registerated` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `nickname`, `name`, `surname`, `floor`, `country`, `avatar`, `favorites`, `about_myself`, `contact`, `date_registerated`) VALUES
(1, 1, 'Galifax', 'Андрей', 'Середюк', '', '0000-00-00', '', '0', '', '0', '2017-07-11 21:00:00'),
(2, 2, 'АС', 'Андрей', 'Сисёмка', 'Мужской', 'Украина', '/img/img-logo.jpg', 'Limp Bizkit, Bring Me The Horizon, Accept\r\n\r\n', 'Господи, какой человечище\r\n', '0931178544\r\n', '2017-07-30 21:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'agalio94', 'xcvuDfB8766n_WMprf83TtCj4A6azHtZ', '$2y$13$Me2rfy5JREI4spefUzjWQO27J2yWNHjDPmuDZHhTFUVMxC5pInMaa', NULL, 'galifax94@gmail.com', 10, 1499865374, 1499865374),
(2, 'zACz', 'Bl5bLFRd_z8TV9YGG_lAegj1R8MyA0kD', '$2y$13$fV4KtTQwnmju5AoDOtclH.HOaT9OcJDt8B.txJXC9OjVRKqHhI7Cq', NULL, 'AC95UA@gmail.com', 10, 1500041496, 1500041496),
(3, 'AC', 'Qbuh9qO2VzzQ07u2sUCuNCzpxrtlNoGq', '$2y$13$FmrwKvYhIaNdVAt44M5ydO3PRxqQFznOWGCGOkV7CrF4D5QONHAHW', NULL, 'zACz95UA@gmail.com', 10, 1500299040, 1500299040);

-- --------------------------------------------------------

--
-- Структура таблицы `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `src` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `video`
--

INSERT INTO `video` (`id`, `profile_id`, `src`, `name`, `description`, `date`) VALUES
(2, 1, 'uploads/1.mp4', 'Смурфы 1 сезон 5 серия', '2222', '2017-07-01'),
(3, 2, 'uploads/1.mp4', 'Смурфы 2 сезон 11 серия', 'qweqwqeq', '2017-07-03'),
(5, 1, 'uploads/1.mp4', 'Смурфы 3 сезон 1 серия', 'way way', '2017-07-02'),
(6, 1, 'uploads/1.mp4', 'Смурфы 6 сезон 8 серия', 'adad', '2017-07-04'),
(7, 2, 'uploads/1.mp4', 'Смурфы 7 сезон 7 серия', 'adad', '2017-07-05'),
(8, 2, 'uploads/1.mp4', 'Смурфы 8 сезон 6 серия', 'adad', '2017-07-07'),
(9, 2, 'uploads/1.mp4', 'Смурфы 9 сезон 9 серия', 'adad', '2017-07-06'),
(10, 2, 'uploads/1.mp4', 'Смурфы 10 сезон 5 серия', 'adad', '2017-07-08'),
(11, 2, 'uploads/1.mp4', 'Смурфы 11 сезон 11 серия', 'adad', '2017-07-09'),
(12, 1, 'uploads/1.mp4', 'Смурфы 12 сезон 12 серия', 'adad', '2017-07-11'),
(15, 1, 'uploads/1.mp4', 'Смурфы 15 сезон 15 серия', 'adad', '2017-07-10');

-- --------------------------------------------------------

--
-- Структура таблицы `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `view`
--

INSERT INTO `view` (`id`, `video_id`, `views`) VALUES
(1, 1, 118),
(2, 2, 10),
(3, 3, 17),
(4, 4, 54),
(5, 5, 118),
(6, 6, 10),
(7, 7, 17),
(8, 8, 54),
(9, 9, 118),
(10, 10, 10),
(11, 11, 17);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_id` (`video_id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Индексы таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Индексы таблицы `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `profile_id_2` (`profile_id`);

--
-- Индексы таблицы `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_id` (`video_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

--
-- Ограничения внешнего ключа таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

--
-- Ограничения внешнего ключа таблицы `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`profile_id`) REFERENCES `profile` (`id`);

--
-- Ограничения внешнего ключа таблицы `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
