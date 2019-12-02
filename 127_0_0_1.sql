-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2019 at 11:14 AM
-- Server version: 10.3.13-MariaDB-log
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karbil_db`
--
CREATE DATABASE IF NOT EXISTS `karbil_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `karbil_db`;

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
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
-- Dumping data for table `achievement`
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
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pubdate` date NOT NULL DEFAULT current_timestamp(),
  `likes` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`id`, `title`, `description`, `pubdate`, `likes`, `views`) VALUES
(1, 'Книги', 'Ныне мало людей уделяют время чтению. Хотя это хранилище самых разнообразных знании', '2019-11-27', 64, 119),
(2, 'Химия мұғалімі сыйлығын қабыл алды', 'Мектебіміздің химия пәнінің мұғалімі Саматов Абылай ICho-2019 Халықаралық олимпиадасында химия пәнінен үздік жетістіктерге жеткен жүлдегерлерді дайындағаны үшін Қазақстан Респуликасының тұңғыш Президенті-Елбасы Нұрсұлтан Әбішұлы Назарбаевтан «EL MAQTANYSHY» атты арнайы сыйлығын қабыл алды.', '2019-11-24', 139, 205),
(3, '\"Достық\" спартакиадасы', 'Қайырлы күн құрметті достар! Өткен аптаның демалыс күндері лицейімізде ата-аналар арасында «ДОСТЫҚ» спартакиадасы өткен болатын. Бұл жарыста ата-аналар шахматтан, теннистен және волейболдан күш сынасып, өз сыныптарының намысын қорғады. Осындай іс-шаралар жоғары деңгейде өткізілуімен тамсандырып қана қоймай, мектептегі ынтымақтастық пен бірлікті арттыратыны сөзсіз.\r\nЖарысқа қатысқан ата-аналарға ерекше алғысымызды білдіреміз!', '2019-11-18', 211, 316);

-- --------------------------------------------------------

--
-- Table structure for table `blog_content`
--

CREATE TABLE `blog_content` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_content`
--

INSERT INTO `blog_content` (`id`, `text`, `article_id`) VALUES
(1, 'Чтение расширяет кругозор. Книги — это кладезь самых разнообразных знаний. Читая, мы начинаем лучше понимать этот мир, людей, события. Саморазвитие и самосовершенствование, история и фантастика, фэнтези и приключения, детективы и юмористические рассказы — друзья, жанров книг огромное количество, и практически в каждом из этих жанров можно найти что-то полезное для себя. Дерзайте!', 1),
(2, 'Чтение развивает воображение. Книги позволяют нам оказаться в другом мире или задуматься о том, о чём раньше не думали. Мы заполняем наше воображение тем, о чём пишет автор, визуализируя происходящее в книге. Благодаря регулярному чтению у нас развивается весьма богатое воображение: представить можно что угодно и как угодно. И такая возможность весьма кстати, ведь это значительно повышает уровень креативности и развивает нестандартное мышление.', 1),
(3, 'Чтение помогает общаться с людьми. Регулярно читающий человек не только грамотен, но и обладает хорошо прокаченными речевыми навыками, позволяющими ему чётко, красиво и доступно излагать свои мысли. Читая книги, вы становитесь интересным собеседником. Особенно сильное впечатление вы можете произвести на тех людей, которые мало читают.', 1),
(4, 'Чтение делает нас умнее. Чтение развивает мышление: читая книги, мы активно думаем, чтобы понять тут или иную идею произведения. Как вы знаете, уважаемые читатели СиЗОЖа, то, что не используется — атрофируется (за ненадобностью). И наоборот: то, что постоянно используется, в итоге растёт, становится больше, развивается. Именно поэтому при регулярном напряжении мозга чтением книг мы становимся умнее и образованнее.', 1),
(5, 'Чтение развивает память. Слежение за ключевыми мыслями и (или) сюжетной линией книги приводит к улучшению памяти. Опять всё просто: память используется — память прокачивается.', 1),
(6, 'Чтение делает нас моложе. Давно доказано, молодость тела зависит от молодости мозга. Другими словами, если мозг дряхлый, то и тело будет ему соответствовать. А так как при чтении книг мы активно используем и развиваем наш мозг, то и на общем состоянии организма это сказывается только положительно. Читайте и молодейте, друзья!', 1),
(7, 'Чтение улучшает концентрацию. Польза чтения состоит и в том, что во время этого процесса мы концентрируемся на содержании произведения. Сейчас всё больше людей испытывают проблемы с концентрацией, поэтому навык концентрации во время чтения книги окажется весьма полезным.', 1),
(8, 'Чтение увеличивает словарный запас. Ну здесь всё понятно — читая, вы зачастую сталкиваетесь со словами, которые не используете в повседневной речи. Регулярно читая, вы сильно пополняете свой словарный запас. Это, в свою очередь, исключает ситуации, когда вы не можете выразить свои мысли. Больше никаких «Эээээ…», «Блин, забыл, как оно…» — теперь вам будем гораздо легче подбирать нужные слова благодаря богатому словарному запасу.', 1),
(9, 'Чтение делает нас увереннее. Теперь в общении мы можем продемонстрировать глубокое знание предмета, свою образованность, эрудицию в самых разных областях. Благодаря этому мы невольно начинаем вести себя более уверенно и собранно. Кроме того, признание окружающими наших познаний положительно сказывается на самооценке.', 1),
(10, 'Чтение помогает отдохнуть. Техносфера загоняет людей в постоянный стресс, когда даже дома, после работы, человек остаётся напряжён. Чтение книг — это отличный способ расслабиться и хорошо провести время. Более того, чтение книг является замечательным отдыхом. После достойной книжки вы обязательно испытаете душевный подъём и получите пищу для ума.', 1),
(11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sollicitudin sapien quis ornare efficitur. Quisque a aliquam quam. Aliquam eu bibendum risus. Pellentesque consequat erat vel lectus commodo, ornare consequat neque volutpat. Nunc elementum iaculis libero. Aliquam erat volutpat. Fusce eu mollis neque.', 2),
(12, 'Phasellus molestie, mauris vitae facilisis volutpat, massa augue sollicitudin felis, ac congue enim augue vel velit. Donec mattis mattis magna at lobortis. Duis ornare dolor et dignissim dignissim. Donec dictum tellus vitae quam mattis faucibus. Nullam gravida mollis erat vestibulum sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur scelerisque sem sed felis tincidunt, ut accumsan enim pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur vitae nisl lobortis, varius nisl dignissim, placerat nibh. Sed consequat risus eu pretium varius. Maecenas sed lacinia tellus, eget fermentum diam. Aenean sit amet gravida tortor. Phasellus sit amet nisi ut leo euismod euismod. Phasellus lacinia rutrum mattis. Duis et metus ex.', 2),
(13, 'Nunc non est massa. Integer elementum felis quis lacus vestibulum, eu volutpat augue pharetra. In hac habitasse platea dictumst. Vestibulum ex augue, imperdiet consequat dignissim sed, elementum ut tellus. Donec tincidunt ultricies mauris, quis ullamcorper mi accumsan id. Donec et mauris libero. Fusce lacinia turpis sem, vitae gravida sapien fringilla sit amet.', 3),
(14, 'Sed vel ipsum ac urna rutrum accumsan sit amet vel ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas at urna vulputate mi efficitur fringilla. Interdum et malesuada fames ac ante ipsum primis in faucibus. In euismod, libero et tincidunt ultrices, leo felis interdum dolor, et placerat nisl felis quis ipsum. Integer diam erat, ornare eget accumsan et, maximus quis velit. Quisque euismod nisl vel tincidunt tincidunt. Nunc venenatis turpis id nisl lobortis tristique. Sed sit amet urna nec augue ultrices malesuada. Mauris finibus, nisi eget malesuada dapibus, orci turpis ultrices magna, nec pretium neque purus non nulla. Etiam ante tellus, ultricies a accumsan sit amet, viverra quis eros. Vestibulum vulputate mauris et sapien malesuada, non semper felis iaculis. Donec euismod ut augue ac accumsan. Curabitur id est vitae nulla ultricies tempus. Fusce ut ultrices elit.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_content`
--
ALTER TABLE `blog_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_content`
--
ALTER TABLE `blog_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
