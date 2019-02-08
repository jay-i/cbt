-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `cpiworld` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cpiworld`;

DROP TABLE IF EXISTS `choices`;
CREATE TABLE `choices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_number` int(11) DEFAULT NULL,
  `is_correct` tinyint(4) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `question_number` (`question_number`),
  CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_number`) REFERENCES `choices` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1,	1,	0,	'Clement Paul Innocent'),
(2,	1,	0,	'Central Paging Index'),
(3,	1,	0,	'Clement Private Incorporation'),
(4,	1,	1,	'Clement Paul Igbo'),
(5,	2,	1,	'2016'),
(6,	2,	0,	'2015'),
(7,	2,	0,	'2017'),
(8,	2,	0,	'2014'),
(9,	3,	0,	'4'),
(10,	3,	0,	'1'),
(11,	3,	1,	'3'),
(12,	3,	0,	'5'),
(13,	4,	1,	'5'),
(14,	4,	0,	'3'),
(15,	4,	0,	'7'),
(16,	4,	0,	'6'),
(17,	5,	0,	'1'),
(18,	5,	1,	'4'),
(19,	5,	0,	'2'),
(20,	5,	0,	'8'),
(21,	6,	0,	'Mark Zukerberg'),
(22,	6,	1,	'Bill Gates'),
(23,	6,	0,	'Paul Allen'),
(24,	6,	0,	'Michael Jackson');

DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1,	'What does CPI stands for?'),
(2,	'What year was Cpiworld System Service established?'),
(3,	'How many professional staff has Cpiworld System Service'),
(4,	'How many Courses are offered Cpiworld System Service'),
(5,	'How many sections of training does the company offer'),
(6,	'Who is the owner of Microsoft company');

-- 2019-02-06 13:21:00
