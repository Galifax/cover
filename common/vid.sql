-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Сер 04 2017 р., 11:29
-- Версія сервера: 5.7.16
-- Версія PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `video`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'Рок'),
(2, 0, 'Джасс'),
(3, 0, 'Рок-рол'),
(4, 0, 'Полька');

-- --------------------------------------------------------

--
-- Структура таблиці `comments`
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
-- Дамп даних таблиці `comments`
--

INSERT INTO `comments` (`id`, `parent_id`, `video_id`, `profile_id`, `content`, `date`) VALUES
(1, 0, 3, 1, 'Шикарный ковер', '2017-07-14 00:00:00'),
(2, 0, 3, 1, 'Ковер бесподобен', '2017-07-15 00:00:00'),
(3, 0, 3, 1, 'Лучший ковер', '2017-07-16 00:00:00'),
(4, 0, 3, 1, 'Да да да', '2017-07-17 00:00:00'),
(5, 1, 3, 1, 'Галифак Бог', '2017-07-27 00:00:00'),
(6, 1, 3, 2, 'ыаыаыа', '2017-07-17 13:11:22'),
(7, 1, 3, 2, 'sfsf', '2017-07-21 20:49:06'),
(8, 1, 3, 2, 'God', '2017-07-21 20:49:15'),
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
(19, 9, 2, 2, 'sfsf', '2017-07-22 12:57:04'),
(21, 0, 7, 2, 'Существуют две основные трактовки понятия «текст»: «имманентная» (расширенная, философски нагруженная) и «репрезентативная» (более частная). Имманентный подход подразумевает отношение к тексту как к автономной реальности, нацеленность на выявление его внутренней структуры. Репрезентативный — рассмотрение текста как особой формы представления знаний о внешней тексту действительности.\n\nВ лингвистике термин текст используется в широком значении, включая и образцы устной речи. Восприятие текста изучается в рамках лингвистики текста и психолингвистики. Так, например, И. Р. Гальперин определяет текст следующим образом: «это письменное сообщение, объективированное в виде письменного документа, состоящее из ряда высказываний, объединённых разными типами лексической, грамматической и логической связи, имеющее определённый ', '2017-07-27 18:57:00'),
(23, 0, 7, 2, 'Существуют две основные трактовки понятия «текст»: «имманентная» (расширенная, философски нагруженная) и «репрезентативная» (более частная). Имманентный подход подразумевает отношение к тексту как к автономной реальности, нацеленность на выявление его внутренней структуры. Репрезентативный — рассмотрение текста как особой формы представления знаний о внешней тексту действительности.\n\nВ лингвистике термин текст используется в широком значении, включая и образцы устной речи. Восприятие текста изучается в рамках лингвистики текста и психолингвистики. Так, например, И. Р. Гальперин определяет текст следующим образом: «это письменное сообщение, объективированное в виде письменного документа, состоящее из ряда высказываний, объединённых разными типами лексической, грамматической и логической связи, имеющее определённый моральный характер, прагматическую установку и ', '2017-07-27 18:57:15'),
(24, 0, 7, 2, 'Существуют две основные трактовки понятия «текст»: «имманентная» (расширенная, философски нагруженная) и «репрезентативная» (более частная). Имманентный подход подразумевает отношение к тексту как к автономной реальности, нацеленность на выявление его внутренней структуры. Репрезентативный — рассмотрение текста как особой формы представления знаний о внешней тексту действительности.\n\nВ лингвистике термин текст используется в широком значении, включая и образцы устной речи. Восприятие текста изучается в рамках лингвистики текста и психолингвистики. Так, например, И. Р. Гальперин определяет текст следующим образом: «это письменное сообщение, объективированное в виде письменного документа, состоящее из ряда высказываний, объединённых разными типами лексической, грамматической и логической связи, имеющее определённый моральный характер, прагматическую установку и соответственно литературно обработанное»[1].', '2017-07-27 19:51:13'),
(25, 0, 8, 2, 'fhfsh', '2017-07-27 20:00:21'),
(26, 25, 8, 2, 'dddd', '2017-07-27 20:00:35'),
(27, 25, 8, 2, 'fsfsf', '2017-07-27 20:33:47'),
(28, 0, 8, 2, 'sfsf', '2017-07-27 21:04:19'),
(29, 0, 27, 1, 'fdsfdsa', '2017-07-29 13:02:25'),
(30, 29, 27, 1, 'fdsfdsaasdfsadf', '2017-07-29 13:02:28'),
(31, 0, 30, 1, '123421', '2017-08-03 14:09:12'),
(32, 0, 30, 1, 'rwe', '2017-08-03 14:13:22'),
(33, 0, 30, 1, '1111111', '2017-08-03 14:13:25');

-- --------------------------------------------------------

--
-- Структура таблиці `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `favorites`
--

INSERT INTO `favorites` (`id`, `profile_id`, `video_id`) VALUES
(8, 2, 4),
(16, 2, 1),
(28, 2, 2),
(35, 2, 8),
(36, 1, 9),
(61, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблиці `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `default` smallint(6) NOT NULL DEFAULT '0',
  `date_update` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `lang`
--

INSERT INTO `lang` (`id`, `url`, `local`, `name`, `default`, `date_update`, `date_create`) VALUES
(1, 'en', 'en-EN', 'English', 0, 1501340566, 1501340566),
(2, 'ua', 'en-UA', 'Українська', 0, 1501340566, 1501340566),
(3, 'ru', 'ru-RU', 'Русский', 1, 1501340566, 1501340566);

-- --------------------------------------------------------

--
-- Структура таблиці `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `likes`
--

INSERT INTO `likes` (`id`, `profile_id`, `video_id`) VALUES
(18, 2, 1),
(26, 2, 2),
(27, 2, 3),
(28, 2, 4),
(29, 2, 5),
(30, 2, 6),
(31, 2, 7),
(32, 2, 8),
(33, 2, 9),
(34, 2, 10),
(36, 2, 12),
(37, 2, 13),
(38, 2, 14),
(39, 2, 15),
(40, 2, 15),
(43, 2, 11),
(47, 1, 27),
(55, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблиці `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1499683713),
('m130524_201442_init', 1499683716);

-- --------------------------------------------------------

--
-- Структура таблиці `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `favorites` varchar(255) DEFAULT NULL,
  `about_myself` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `date_registerated` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `profile`
--

INSERT INTO `profile` (`id`, `nickname`, `name`, `surname`, `floor`, `country`, `avatar`, `favorites`, `about_myself`, `contact`, `date_registerated`) VALUES
(1, 'Galifax', 'Андрей', 'Середюк', 'Мужской', '0000-00-00', '', '0', 'выавыфафывафыв', '0', '2017-07-11 21:00:00'),
(2, 'АС', 'Андрей', 'Сисёмка', 'Мужской', 'Украина', '/avatars/sgs.png', 'Limp Bizkit, Bring Me The Horizon, Accept', 'Господи, какой человечище', '093117822', '2017-07-30 21:00:00'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-31 14:02:23');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
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
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'agalio94', 'xcvuDfB8766n_WMprf83TtCj4A6azHtZ', '$2y$13$Me2rfy5JREI4spefUzjWQO27J2yWNHjDPmuDZHhTFUVMxC5pInMaa', NULL, 'galifax94@gmail.com', 10, 1499865374, 1499865374),
(2, 'zACz', 'Bl5bLFRd_z8TV9YGG_lAegj1R8MyA0kD', '$2y$13$fV4KtTQwnmju5AoDOtclH.HOaT9OcJDt8B.txJXC9OjVRKqHhI7Cq', NULL, 'AC95UA@gmail.com', 10, 1500041496, 1500041496),
(3, 'AC', 'Qbuh9qO2VzzQ07u2sUCuNCzpxrtlNoGq', '$2y$13$FmrwKvYhIaNdVAt44M5ydO3PRxqQFznOWGCGOkV7CrF4D5QONHAHW', NULL, 'zACz95UA@gmail.com', 10, 1500299040, 1500299040),
(6, 'admin', 't36FapQJXaKVeHRGb992myRRGINjT8qz', '$2y$13$5qs7/AszXTvEVsbnmVVjEO2vC1NEvly2nMzRddQ0qszbH4uQVYHKm', NULL, 'admin@admin.com', 10, 1501509743, 1501509743);

-- --------------------------------------------------------

--
-- Структура таблиці `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `src` varchar(55) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `video`
--

INSERT INTO `video` (`id`, `profile_id`, `src`, `name`, `description`, `date`, `category_id`, `views`) VALUES
(3, 1, 'uploads/1.mp4', 'Смурфы 2 сезон 11 серия', 'qweqwqeq', '2017-07-06', 1, 0),
(5, 1, 'uploads/1.mp4', 'Смурфы 3 сезон 1 серия', 'way way', '2017-07-02', 1, 0),
(6, 1, 'uploads/1.mp4', 'Смурфы 6 сезон 8 серия', 'adad', '2017-07-04', 2, 0),
(8, 2, 'uploads/1.mp4', 'Смурфы 8 сезон 12 серия', 'adad', '2017-07-07', 3, 0),
(9, 2, 'uploads/1.mp4', 'Смурфы 9 сезон 9 серия', 'adad', '2017-07-06', 4, 0),
(10, 2, 'uploads/1.mp4', 'Смурфы 10 сезон 5 серия', 'adad', '2017-07-08', 4, 0),
(11, 2, 'uploads/1.mp4', 'Смурфы 11 сезон 11 серия', 'adad', '2017-07-09', 3, 0),
(12, 2, 'uploads/1.mp4', 'Смурфы 12 сезон 12 серия', 'adad', '2017-07-11', 2, 0),
(25, 1, 'uploads/1.mp4', 'Смурфы 1 сезон 5 серия', '2222', '2017-07-06', 1, 0),
(28, 1, '/img/video/2.jpg', 'fasf', 'sdfsadfasdf', '2017-07-29', 2, 0),
(30, 1, '/img/1/consultation.png', 'fasdfds', 'sdfadsfad', '2017-07-29', 1, 0),
(35, 1, '/img/cda02423d397905ff8e5.jpg', 'asfdasfas', 'asdfsafsad', '2017-07-29', 1, 0),
(36, 1, '/img/860882907310ba934f24.jpg', 'фыаывафв', 'афвыафыафвы', '2017-07-29', 2, 6);

-- --------------------------------------------------------

--
-- Структура таблиці `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `view`
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
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Індекси таблиці `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_id` (`video_id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Індекси таблиці `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Індекси таблиці `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `video_id` (`video_id`);

--
-- Індекси таблиці `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Індекси таблиці `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Індекси таблиці `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_id` (`profile_id`),
  ADD KEY `profile_id_2` (`profile_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Індекси таблиці `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_id` (`video_id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT для таблиці `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT для таблиці `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблиці `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT для таблиці `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
