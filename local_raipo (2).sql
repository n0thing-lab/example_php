-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 17 2014 г., 13:57
-- Версия сервера: 5.5.36
-- Версия PHP: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `local_raipo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `time`) VALUES
(1, 'уакукука', '<p>укаукаука</p>\r\n', 1402894096);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `time`) VALUES
(2, 'Создали сайт', '<p><strong>парарарам!</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>выавыаываыва</h1>\r\n', 1402881084),
(3, 'ПиуПиу', '<p>ываываывавыа</p>\r\n', 1402881096),
(4, 'oikjhygtfr-[;plo', '<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<blockquote>\r\n<h2 style="font-style:italic;">vrcuerkejer</h2>\r\n</blockquote>\r\n', 1402893822);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`) VALUES
(1, 'Главная', '<h1>О нас</h1>\r\n\r\n<p>Полоцкое районное потребительское общество является самостоятельным хозяйствующим субъектом, обладает правами юридического лица, руководствуется в своей деятельности законодательством Республики Беларусь, постановлениями, распоряжениями правления Белкоопсоюза, облпотребсоюза и Уставом Общества. Общество на добровольной основе входит в Витебский областной союз потребительских обществ.</p>\r\n\r\n<p>Основными отраслями деятельности предприятия являются: торговля, общественное питание, заготовки, промышленность, транспорт.<br />\r\nВ зоне обслуживания проживает 26,5 тысяч человек, в том числе 24 в сельской местности. Розничная торговля и заготовительная деятельность осуществляется через 88 магазинов, расположенными по всей территории района с торговой площадью 6688 кв.м., 9 автомагазинами и 11 приемно-заготовительными пунктами.</p>\r\n\r\n<p>Распределение товара осуществляется через 1 торгово-распределительный склад общей площадью 680 кв.м. В заготовительной отрасли имеется: 1 склад &ndash; вторичного сырья общей площадью 1140 кв.м., 1 склад &ndash; кожевенного сырья общей площадью 570 кв.м. и 1 картофелехранилищее, а также квасильно-засольный и 2 грибоварочных пункта. Промышленность имеет следующие участки: убойный пункт, котельная. Отрасль общественного питания представлена 23 предприятиями, 4 магазинами, осуществляющие розничную торговлю покупными товарами и продукцией собственного производства. Кроме этого имеется кулинарный комбинат по производству кондитерских , сдобно-булочных изделий , а так же мясной и горячий цех по производству полуфабрикатов, кулинарной и обеденной продукции.</p>\r\n\r\n<p>В сельской местности расположено 76 торговых предприятий (это 86,4 % от общего количества), 9 автомагазинов обслуживает жителей 243 отдаленных и малонаселенных деревень с численностью населения 4452 человек. В райпо функционируют 5 продовольственных магазинов, 7 промышленных, 76 магазинов &laquo;Товары повседневного спроса&raquo;.</p>\r\n\r\n<p>Источники формирования товарных ресурсов:<br />\r\n&ndash; предприятия государственной промышленности, продукция которых составляет основную долю товарных ресурсов;<br />\r\nсельскохозяйственные предприятия, основную часть товарной продукции которых составляют продовольственные товары;<br />\r\nсобственные производственные предприятия потребкооперации.<br />\r\nзаготовительные предприятия системы потребительской кооперации, поставляющие в торговлю овощи, фрукты, картофель, мясопродукты, дикорастущие ягоды и грибы, яйцо и т.д.</p>\r\n\r\n<h2>Сведения о компании</h2>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="2"><strong>Контактная информация</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Контактное лицо:</td>\r\n			<td>Лена</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Сайт компании:</td>\r\n			<td><a href="http://polraipo.deal.by/" target="_blank">http://polraipo.deal.by </a></td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="2"><strong>Общая информация</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Название:</td>\r\n			<td>Полоцкое районное потребительское общество</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Адрес:</td>\r\n			<td>ул.Нижне-Покровская, 41б, г. Полоцк, 211400, Беларусь</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Телефон:</td>\r\n			<td>\r\n			<p>+375 (0214) 42-07-85, тел/факс</p>\r\n\r\n			<p>+375 (0214) 42-86-30</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Реквизиты:</td>\r\n			<td>211400, Республика Беларусь, Витебская область,<br />\r\n			г.Полоцк, ул. Нижне-Покровская, 41 б.<br />\r\n			Расчетный счет № 3015232411015<br />\r\n			Центр банковских услуг № 202<br />\r\n			ОАО &laquo;БПС-Сбербанк&raquo; г.Новополоцк, БИК 153001369</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 'Информация', '<h1>Информация для торгового реестра</h1>\r\n\r\n<p>Индивидуальный предприниматель Лена</p>\r\n\r\n<h2 style="font-style:italic;">Беларусь Витебск г. Полоцк ул.Нижне-Покровская, 41б</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Режим работы:</strong></p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px">\r\n	<tbody>\r\n		<tr>\r\n			<td>День</td>\r\n			<td>Время работы</td>\r\n			<td>Перерыв</td>\r\n		</tr>\r\n		<tr>\r\n			<td>понедельник</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>вторник</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>среда</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>четверг</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>пятница</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>суббота</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>воскресенье</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n'),
(3, 'Контакты', '<h1>Контактная информация</h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Название:</td>\r\n			<td>Полоцкое районное потребительское общество</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Контактное лицо:</td>\r\n			<td>Лена</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Адрес:</td>\r\n			<td>ул.Нижне-Покровская, 41б, г. Полоцк, 211400, Беларусь</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Телефон:</td>\r\n			<td>\r\n			<p>+375 (0214) 42-07-85, тел/факс</p>\r\n\r\n			<p>+375 (0214) 42-86-30</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Реквизиты:</td>\r\n			<td>211400, Республика Беларусь, Витебская область,<br />\r\n			г.Полоцк, ул. Нижне-Покровская, 41 б.<br />\r\n			Расчетный счет № 3015232411015<br />\r\n			Центр банковских услуг № 202<br />\r\n			ОАО &laquo;БПС-Сбербанк&raquo; г.Новополоцк, БИК 153001369</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1>&nbsp;</h1>\r\n\r\n<h1>Местоположение компании на Яндекс.Картах</h1>\r\n\r\n<p>ул.Нижне-Покровская, 41б, г. Полоцк, Витебск, 211400, Беларусь</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `admin`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
