-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 11 2015 г., 00:46
-- Версия сервера: 5.6.16
-- Версия PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `task_report_db1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `like_ID` int(11) NOT NULL,
  `liked_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`like_ID`, `liked_ID`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 3),
(2, 4),
(2, 5),
(3, 6),
(4, 7),
(5, 8),
(6, 9),
(7, 10),
(7, 6),
(11, 5),
(10, 7),
(8, 4),
(8, 3),
(9, 1),
(9, 7),
(9, 11),
(8, 1),
(4, 9),
(14, 15),
(15, 14),
(1, 14),
(18, 1),
(19, 2),
(20, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `grade` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`ID`, `name`, `grade`) VALUES
(1, 'Ð’Ð°ÑÑ ÐŸÑƒÐ¿ÐºÐ¸Ð½', 7),
(2, 'Ð¡Ð²ÐµÑ‚Ð° ÐŸÑƒÐ¿ÐºÐ¸Ð½Ð°', 10),
(3, 'Ð’Ð°Ð½Ñ Ð˜Ð²Ð°Ð½Ð¾Ð²', 6),
(4, 'ÐŸÐµÑ‚Ñ ÐŸÐµÑ‚Ñ€Ð¾Ð²', 11),
(5, 'Ð¡Ð¸Ð´Ð¾Ñ€ Ð¡Ð¸Ð´Ð¾Ñ€Ð¾Ð²', 4),
(6, 'Ð¤ÐµÐ´Ð¾Ñ€ Ð¤ÐµÐ´Ð¾Ñ€Ð¾Ð²', 9),
(7, 'ÐœÐ¸Ñ…Ð°Ð¸Ð» ÐœÐ¸Ñ…Ð°Ð¹Ð»Ð¾Ð²', 12),
(8, 'Ð¡ÐµÑ€Ð³ÐµÐ¹ Ð¡ÐµÑ€Ð³ÐµÐµÐ²', 8),
(9, 'Ð¡Ñ‚ÐµÐ¿Ð°Ð½ Ð¡Ñ‚ÐµÐ¿Ð°Ð½Ð¾Ð²', 9),
(10, 'Ð ÑƒÑÐ»Ð°Ð½ Ð ÑƒÑÐ»Ð°Ð½Ð¾Ð²', 11),
(11, 'ÐœÐ°Ñ€Ð¸Ð½Ð° ÐœÐ°Ñ€Ð¸Ð½Ð¾Ð²Ð°', 7),
(14, 'ÐšÑƒÐ·ÑŒÐ¼Ð° ÐšÑƒÐ·ÑŒÐ¼Ð¸Ð½', 4),
(15, 'ÐÐ½Ð´Ñ€ÐµÐ¹ ÐÐ½Ð´Ñ€ÐµÐµÐ²', 4),
(16, 'ÐœÐ¸ÑÑ‚ÐµÑ€ Ð¥', 0),
(17, 'ÐœÐ¸ÑcÐ¸Ñ Y', 0),
(18, 'Ð¡Ñ‚ÑƒÐ´ÐµÐ½Ñ‚ Ð', 0),
(19, 'Ð¡Ñ‚ÑƒÐ´ÐµÐ½Ñ‚ Ð‘', 0),
(20, 'Ð¡Ñ‚ÑƒÐ´ÐµÐ½Ñ‚ Ð¡', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
