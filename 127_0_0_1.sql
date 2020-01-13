-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 13 2020 г., 06:37
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `karbil_db`
--
CREATE DATABASE IF NOT EXISTS `karbil_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `karbil_db`;

-- --------------------------------------------------------

--
-- Структура таблицы `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `scope` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `medal` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `achievement`
--

INSERT INTO `achievement` (`id`, `title`, `year`, `scope`, `name`, `medal`, `subject`, `teacher`, `grade`, `location`) VALUES
(1, 'Katev Bilim Olympiad (KBO)', '2015', 'Республиканская', 'Нурпеисов Олжас Сайранович', 'Бронза', 'Химия', NULL, '10', 'Казахстан'),
(2, 'Олимпиада по общеобразовательным предметам', '2016', 'Областная', 'Нурпеисов Олжас Сайранович', 'Серебро', 'Химия', NULL, '10', 'Казахстан, Караганда'),
(3, 'Олимпиада по общеобразовательным предметам', '2016', 'Республиканская', 'Нурпеисов Олжас Сайранович', 'участник', 'Химия', NULL, '10', 'Казахстан'),
(4, 'Katev Bilim Olympiad (KBO)', '2016', 'Республиканская', 'Нурпеисов Олжас Сайранович', 'Серебро', 'Химия', NULL, '10', 'Казахстан'),
(5, 'Международная олимпиада по химии имени К.Сатпаева', '2016', 'Международная', 'Нурпеисов Олжас Сайранович', 'Бронза', 'Химия', NULL, '10', 'Казахстан, Павлодар'),
(6, 'Олимпиада по общеобразовательным предметам', '2017', 'Областная', 'Нурпеисов Олжас Сайранович', 'Золото', 'Химия', NULL, '10', 'Казахстан, Караганда'),
(7, 'Олимпиада по общеобразовательным предметам', '2017', 'Республиканская', 'Нурпеисов Олжас Сайранович', 'Золото', 'Химия', NULL, '10', 'Казахстан'),
(8, 'Международная олимпиада по химии имени Бектурова', '2017', 'Международная', 'Нурпеисов Олжас Сайранович', 'Бронза', 'Химия', NULL, '10', 'Казахстан, Павлодар'),
(9, 'Международная олимпиада по химии “Tuymaada”', '2017', 'Международная', 'Нурпеисов Олжас Сайранович', 'Серебро', 'Химия', NULL, '10', NULL),
(10, 'Олимпиада по общеобразовательным предметам', '2018', 'Областная', 'Нурпеисов Олжас Сайранович', 'Золото', 'Химия', NULL, '10', 'Казахстан, Караганда'),
(11, 'Олимпиада по общеобразовательным предметам', '2018', 'Республиканская', 'Нурпеисов Олжас Сайранович', 'Золото', 'Химия', NULL, '10', 'Казахстан'),
(12, 'Международная олимпиада по химии имени Бектурова', '2018', 'Международная', 'Нурпеисов Олжас Сайранович', 'Серебро', 'Химия', NULL, '10', 'Казахстан, Павлодар'),
(13, '52 Международная Менделеевская олимпиада по химии', '2018', 'Международная', 'Нурпеисов Олжас Сайранович', 'Бронза', 'Химия', NULL, '10', 'Беларусь, Минск'),
(14, 'Олимпиада по общеобразовательным предметам', '2016', 'Областная', 'Абабаев Ерслан Еркосаевич', 'Бронза', 'Химия', NULL, '10', 'Казахстан, Караганда'),
(15, 'Katev Bilim Olympiad (KBO)', '2016', 'Республиканская', 'Абабаев Ерслан Еркосаевич', 'Золото', 'Химия', NULL, '10', 'Казахстан'),
(16, 'Международная олимпиада по химии имени К.Сатпаева', '2016', 'Международная', 'Абабаев Ерслан Еркосаевич', 'Участник', 'Химия', NULL, '10', 'Казахстан, Павлодар'),
(17, 'Интернет-олимпиада «Foxford»', '2016', 'Международная', 'Абабаев Ерслан Еркосаевич', 'Серебро', 'Химия', NULL, '10', NULL),
(18, 'Олимпиада по общеобразовательным предметам', '2017', 'Областная', 'Абабаев Ерслан Еркосаевич', 'Серебро', 'Химия', NULL, '10', 'Казахстан, Караганда'),
(19, 'Олимпиада по общеобразовательным предметам', '2017', 'Республиканская', 'Абабаев Ерслан Еркосаевич', 'Бронза', 'Химия', NULL, '10', 'Казахстан'),
(20, 'Международная олимпиада по химии имени Бектурова', '2017', 'Международная', 'Абабаев Ерслан Еркосаевич', 'Участник', 'Химия', NULL, '10', 'Казахстан, Павлодар'),
(21, 'Интернет-олимпиада «Foxford»', '2017', 'Международная', 'Абабаев Ерслан Еркосаевич', 'Бронза', 'Химия', NULL, '10', NULL),
(22, 'Международная олимпиада по химии “Tuymaada”', '2017', 'Международная', 'Абабаев Ерслан Еркосаевич', 'Бронза', 'Химия', NULL, '10', NULL),
(23, 'Олимпиада по общеобразовательным предметам', '2018', 'Областная', 'Абабаев Ерслан Еркосаевич', 'Золото', 'Химия', NULL, '10', 'Казахстан, Караганда'),
(24, 'Олимпиада по общеобразовательным предметам', '2018', 'Республиканская', 'Абабаев Ерслан Еркосаевич', 'Серебро', 'Химия', NULL, '10', 'Казахстан'),
(25, 'Международная олимпиада по химии имени Бектурова', '2018', 'Международная', 'Абабаев Ерслан Еркосаевич', 'Серебро', 'Химия', NULL, '10', 'Казахстан, Павлодар'),
(26, '52 Международная Менделеевская олимпиада по химии', '2018', 'Международная', 'Абабаев Ерслан Еркосаевич', 'Участник', 'Химия', NULL, '10', 'Беларусь, Минск'),
(27, 'Международное соревнование по компьютерным проектам \r\n(информатика) «INFOMATRIX - ASIA»', '2018', 'Международная', 'Кайсар Куанышев', 'Золото', 'Физика', NULL, NULL, 'Казахстан, Алматы'),
(28, 'Международное соревнование по компьютерным проектам \r\n(информатика) «INFOMATRIX - ASIA»', '2018', 'Международная', 'Ержуманов Ердан', 'Золото', 'Английский/География', NULL, NULL, 'Казахстан, Алматы'),
(29, 'Международное соревнование по компьютерным проектам \r\n(информатика) «INFOMATRIX - ASIA»', '2018', 'Международная', 'Смагулов Алишер', 'Золото', 'Физика', NULL, NULL, 'Казахстан, Алматы');

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `pubdate` date NOT NULL DEFAULT current_timestamp(),
  `likes` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `title`, `text`, `pubdate`, `likes`, `views`, `image`) VALUES
(1, 'first article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas dui id ornare arcu odio ut sem. Ut tortor pretium viverra suspendisse potenti. Mi ipsum faucibus vitae aliquet nec ullamcorper sit amet. Sed augue lacus viverra vitae congue eu consequat ac felis. Tortor posuere ac ut consequat semper viverra nam. Non arcu risus quis varius quam. Pellentesque adipiscing commodo elit at imperdiet dui. Turpis egestas pretium aenean pharetra magna ac placerat vestibulum. Etiam tempor orci eu lobortis elementum nibh. Elementum pulvinar etiam non quam lacus suspendisse. Purus in massa tempor nec feugiat nisl. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Rhoncus dolor purus non enim praesent elementum facilisis leo. Pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Malesuada fames ac turpis egestas sed tempus urna.\r\n</br></br>\r\nJusto eget magna fermentum iaculis eu non diam. Imperdiet massa tincidunt nunc pulvinar sapien. Egestas maecenas pharetra convallis posuere morbi leo urna molestie at. Orci porta non pulvinar neque laoreet suspendisse interdum consectetur libero. Sollicitudin nibh sit amet commodo nulla facilisi nullam vehicula. A diam maecenas sed enim ut sem viverra aliquet. Tellus in hac habitasse platea dictumst vestibulum rhoncus est pellentesque. Nisl purus in mollis nunc sed. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Aliquam nulla facilisi cras fermentum odio eu feugiat. Ac odio tempor orci dapibus ultrices in iaculis nunc sed.', '2019-11-27', 12, 4567, 'post1.jpg'),
(2, 'second article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquet lectus proin nibh nisl condimentum. Elit at imperdiet dui accumsan sit amet. Aliquam id diam maecenas ultricies. Lorem dolor sed viverra ipsum nunc aliquet. Gravida neque convallis a cras semper auctor neque vitae. Fermentum et sollicitudin ac orci phasellus. Nulla malesuada pellentesque elit eget gravida cum sociis. Id velit ut tortor pretium viverra suspendisse potenti nullam ac. Nibh nisl condimentum id venenatis a condimentum vitae sapien pellentesque.\r\n</br></br>\r\nDui nunc mattis enim ut tellus elementum sagittis vitae et. Tincidunt id aliquet risus feugiat in ante metus. Dolor sit amet consectetur adipiscing elit pellentesque. Convallis a cras semper auctor neque vitae tempus. Mauris sit amet massa vitae tortor condimentum. Molestie at elementum eu facilisis sed. Dictum sit amet justo donec enim diam vulputate. Sit amet aliquam id diam maecenas ultricies mi eget. Et tortor at risus viverra adipiscing at in tellus integer. Posuere morbi leo urna molestie. Habitant morbi tristique senectus et netus et malesuada fames. Malesuada fames ac turpis egestas sed.', '2019-11-24', 123, 45, 'post2.jpg'),
(3, 'third article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aliquam etiam erat velit scelerisque in dictum non consectetur. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae elementum. Semper viverra nam libero justo. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Quis hendrerit dolor magna eget est lorem. Odio tempor orci dapibus ultrices in iaculis nunc sed. Eu feugiat pretium nibh ipsum consequat nisl vel. Sociis natoque penatibus et magnis dis parturient montes. Cursus euismod quis viverra nibh cras pulvinar. Proin libero nunc consequat interdum varius sit amet mattis vulputate. Neque vitae tempus quam pellentesque nec nam aliquam sem et. Risus nec feugiat in fermentum posuere. Odio eu feugiat pretium nibh ipsum consequat nisl vel pretium. Lorem donec massa sapien faucibus. Et malesuada fames ac turpis egestas maecenas pharetra convallis. In fermentum posuere urna nec tincidunt. Vivamus arcu felis bibendum ut tristique et egestas quis ipsum. Penatibus et magnis dis parturient montes nascetur ridiculus.\r\n</br></br>\r\nLorem dolor sed viverra ipsum. Mi quis hendrerit dolor magna eget est. Egestas diam in arcu cursus euismod quis viverra nibh. In ante metus dictum at tempor. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra accumsan. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor purus. Adipiscing diam donec adipiscing tristique risus nec feugiat in fermentum. Ridiculus mus mauris vitae ultricies leo. Lectus magna fringilla urna porttitor rhoncus. Urna condimentum mattis pellentesque id nibh. Eu lobortis elementum nibh tellus molestie nunc. Tellus at urna condimentum mattis pellentesque id nibh. Nisi est sit amet facilisis magna etiam.', '2019-11-18', 1234, 456, 'post3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `pubdate` date NOT NULL DEFAULT current_timestamp(),
  `event_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id`, `title`, `text`, `image`, `pubdate`, `event_date`) VALUES
(1, 'Соревнования по баскетболу', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum odio eu feugiat pretium. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Netus et malesuada fames ac turpis. Proin libero nunc consequat interdum varius. Vitae auctor eu augue ut lectus arcu bibendum at varius. Nibh praesent tristique magna sit amet. Ultrices eros in cursus turpis massa. Enim nunc faucibus a pellentesque. Fermentum odio eu feugiat pretium nibh. Maecenas ultricies mi eget mauris. Id neque aliquam vestibulum morbi blandit. Turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet. A diam sollicitudin tempor id eu. Tristique senectus et netus et malesuada. Tristique senectus et netus et malesuada fames ac turpis. Non odio euismod lacinia at quis risus sed. Blandit libero volutpat sed cras. Lacus luctus accumsan tortor posuere.\r\n\r\nAt ultrices mi tempus imperdiet nulla. Tortor at auctor urna nunc id cursus metus. Donec adipiscing tristique risus nec feugiat in fermentum. Malesuada nunc vel risus commodo viverra maecenas. Arcu non sodales neque sodales ut etiam. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Turpis nunc eget lorem dolor. Vitae justo eget magna fermentum iaculis. In ornare quam viverra orci sagittis eu volutpat. Porttitor eget dolor morbi non arcu risus quis varius quam. Mi proin sed libero enim sed faucibus turpis in eu. Enim tortor at auctor urna nunc. Vitae tortor condimentum lacinia quis vel eros donec. Suspendisse faucibus interdum posuere lorem ipsum dolor sit.', 'basketball.jpg', '2020-01-12', '2020-01-19'),
(2, 'Соревнования по шахматам', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum odio eu feugiat pretium. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Netus et malesuada fames ac turpis. Proin libero nunc consequat interdum varius. Vitae auctor eu augue ut lectus arcu bibendum at varius. Nibh praesent tristique magna sit amet. Ultrices eros in cursus turpis massa. Enim nunc faucibus a pellentesque. Fermentum odio eu feugiat pretium nibh. Maecenas ultricies mi eget mauris. Id neque aliquam vestibulum morbi blandit. Turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet. A diam sollicitudin tempor id eu. Tristique senectus et netus et malesuada. Tristique senectus et netus et malesuada fames ac turpis. Non odio euismod lacinia at quis risus sed. Blandit libero volutpat sed cras. Lacus luctus accumsan tortor posuere.\r\n\r\nAt ultrices mi tempus imperdiet nulla. Tortor at auctor urna nunc id cursus metus. Donec adipiscing tristique risus nec feugiat in fermentum. Malesuada nunc vel risus commodo viverra maecenas. Arcu non sodales neque sodales ut etiam. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Turpis nunc eget lorem dolor. Vitae justo eget magna fermentum iaculis. In ornare quam viverra orci sagittis eu volutpat. Porttitor eget dolor morbi non arcu risus quis varius quam. Mi proin sed libero enim sed faucibus turpis in eu. Enim tortor at auctor urna nunc. Vitae tortor condimentum lacinia quis vel eros donec. Suspendisse faucibus interdum posuere lorem ipsum dolor sit.', 'chess.jpg', '2020-01-11', '2020-01-22'),
(3, 'Концерт на день независимости', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Fermentum odio eu feugiat pretium. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Netus et malesuada fames ac turpis. Proin libero nunc consequat interdum varius. Vitae auctor eu augue ut lectus arcu bibendum at varius. Nibh praesent tristique magna sit amet. Ultrices eros in cursus turpis massa. Enim nunc faucibus a pellentesque. Fermentum odio eu feugiat pretium nibh. Maecenas ultricies mi eget mauris. Id neque aliquam vestibulum morbi blandit. Turpis nunc eget lorem dolor sed viverra ipsum nunc aliquet. A diam sollicitudin tempor id eu. Tristique senectus et netus et malesuada. Tristique senectus et netus et malesuada fames ac turpis. Non odio euismod lacinia at quis risus sed. Blandit libero volutpat sed cras. Lacus luctus accumsan tortor posuere.\r\n\r\nAt ultrices mi tempus imperdiet nulla. Tortor at auctor urna nunc id cursus metus. Donec adipiscing tristique risus nec feugiat in fermentum. Malesuada nunc vel risus commodo viverra maecenas. Arcu non sodales neque sodales ut etiam. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Turpis nunc eget lorem dolor. Vitae justo eget magna fermentum iaculis. In ornare quam viverra orci sagittis eu volutpat. Porttitor eget dolor morbi non arcu risus quis varius quam. Mi proin sed libero enim sed faucibus turpis in eu. Enim tortor at auctor urna nunc. Vitae tortor condimentum lacinia quis vel eros donec. Suspendisse faucibus interdum posuere lorem ipsum dolor sit.', 'independent.jpg', '2020-01-10', '2020-01-31');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
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
-- AUTO_INCREMENT для таблицы `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
