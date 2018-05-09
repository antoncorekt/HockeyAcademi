-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 03 2018 г., 20:27
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hockey_academy`
--

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

CREATE TABLE `lang` (
  `idLang` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`idLang`, `name`) VALUES
(1, 'en'),
(2, 'ru'),
(3, 'pl');

-- --------------------------------------------------------

--
-- Структура таблицы `post`
--

CREATE TABLE `post` (
  `idPost` int(10) UNSIGNED NOT NULL,
  `author` int(10) UNSIGNED NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date NOT NULL,
  `img_title` varchar(255) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post`
--

INSERT INTO `post` (`idPost`, `author`, `create_date`, `update_date`, `img_title`, `video_title`) VALUES
(1, 1, '2018-01-01', '2018-01-01', '\\..\\images\\news.png', 'https://www.youtube.com/embed/6cOoiAoa2CY'),
(2, 1, '2018-02-01', '2018-02-01', '\\..\\images\\Selects_Hockey_2_large.jpg', NULL),
(3, 1, '2018-03-30', '2018-03-30', '\\..\\images\\article3.jpg', NULL),
(4, 1, '2018-04-08', '2018-04-08', '\\..\\images\\article4.jpg', NULL),
(5, 1, '2018-04-14', '2018-04-14', '\\..\\images\\article5.jpg', NULL),
(6, 1, '2018-04-22', '2018-04-22', '\\..\\images\\article6.jpg', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `post_text`
--

CREATE TABLE `post_text` (
  `idPText` int(10) UNSIGNED NOT NULL,
  `fkPost` int(10) UNSIGNED NOT NULL,
  `fkLang` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `post_text`
--

INSERT INTO `post_text` (`idPText`, `fkPost`, `fkLang`, `title`, `tags`, `text`) VALUES
(1, 1, 2, 'Летние лагеря в Крынице-Здруй', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\ru\\file.txt'),
(2, 1, 1, 'Summer Camps in Krynica-Zdrój', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\en\\file.txt'),
(7, 1, 3, 'Lato Obóz w Krynica-Zdrój', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\pl\\file.txt'),
(8, 2, 2, 'SELECTS НАБОР В CАН-СЕБАСТЬЯН (ИСПАНИЯ)', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\ru\\file1.txt'),
(9, 2, 1, 'SELECTS ENROLMENT IN SAN SEBASTIAN(SPAIN)', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\en\\file1.txt'),
(10, 2, 3, 'SELECTS REKRUTACJA W SAN SEBASTIAN(HISZPANIA)', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\pl\\file1.txt'),
(11, 3, 1, 'Formation hockey player. Interesting Facts', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\en\\file2.txt'),
(12, 3, 2, 'Становление хоккеиста. Интересные факты', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\ru\\file2.txt'),
(13, 3, 3, 'Formacja hokeja. Interesujące fakty', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\pl\\file2.txt'),
(14, 4, 1, 'The most popular hockey players of the world', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\en\\file3.txt'),
(15, 4, 2, 'Самые популярные хоккеисты всего мира', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\ru\\file3.txt'),
(16, 4, 3, 'Najpopularniejsi hokeiści świata', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\pl\\file3.txt'),
(17, 5, 2, 'Происхождение хоккея с шайбой', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\ru\\file4.txt'),
(18, 5, 1, 'The origin of ice hockey', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\en\\file4.txt'),
(19, 5, 3, 'Pochodzenie hokeja na lodzie', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\pl\\file4.txt'),
(20, 6, 2, 'Правила игры в хоккей', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\ru\\file5.txt'),
(21, 6, 1, 'Rules of the game of hockey', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\en\\file5.txt'),
(22, 6, 3, 'Zasady gry w hokeja', NULL, 'C:\\OSPanel\\domains\\HockeyAcademi\\public\\articles\\pl\\file5.txt');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `idUser` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`idUser`, `login`, `password`, `remember_token`) VALUES
(1, 'admin', '$2y$13$NjPiT83TbVVerShtwB2x5u1q65P4P.jXM0fs.1bu2mWdMZ60XFZKK', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`idLang`);

--
-- Индексы таблицы `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `author` (`author`);

--
-- Индексы таблицы `post_text`
--
ALTER TABLE `post_text`
  ADD PRIMARY KEY (`idPText`),
  ADD KEY `fkPost` (`fkPost`),
  ADD KEY `fkLang` (`fkLang`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `lang`
--
ALTER TABLE `lang`
  MODIFY `idLang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `post`
--
ALTER TABLE `post`
  MODIFY `idPost` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `post_text`
--
ALTER TABLE `post_text`
  MODIFY `idPText` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`author`) REFERENCES `users` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `post_text`
--
ALTER TABLE `post_text`
  ADD CONSTRAINT `post_text_ibfk_1` FOREIGN KEY (`fkPost`) REFERENCES `post` (`idPost`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_text_ibfk_2` FOREIGN KEY (`fkLang`) REFERENCES `lang` (`idLang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
