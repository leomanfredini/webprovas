-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 23-Jun-2016 às 21:54
-- Versão do servidor: 5.5.49-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `provafacil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `question_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_question` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=70 ;

--
-- Extraindo dados da tabela `answers`
--

INSERT INTO `answers` (`id`, `description`, `is_correct`, `question_id`, `created`, `modified`) VALUES
(2, 'Alemanha', 0, 13, '2016-06-08 20:08:19', '2016-06-18 08:47:44'),
(3, 'Brasil', 1, 13, '2016-06-08 20:08:19', '2016-06-18 08:47:44'),
(4, 'Bolivia', 1, 13, '2016-06-08 20:08:19', '2016-06-18 08:47:44'),
(5, 'Paraguaii', 0, 13, '2016-06-08 20:08:19', '2016-06-18 08:47:44'),
(26, 'lwlwlw', 0, 21, '2016-06-09 21:28:03', '2016-06-09 21:28:03'),
(27, 'sss', 1, 22, '2016-06-09 21:30:22', '2016-06-16 23:02:53'),
(28, 'sss', 1, 23, '2016-06-09 21:30:45', '2016-06-18 01:12:13'),
(29, 'aqaqa', 1, 24, '2016-06-09 21:33:03', '2016-06-09 21:33:03'),
(30, '01', 0, 25, '2016-06-11 10:19:34', '2016-06-11 10:19:34'),
(31, '02', 0, 25, '2016-06-11 10:19:34', '2016-06-11 10:19:34'),
(32, '03', 1, 25, '2016-06-11 10:19:34', '2016-06-11 10:19:34'),
(33, '04', 0, 25, '2016-06-11 10:19:34', '2016-06-11 10:19:34'),
(35, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, 27, '2016-06-11 22:54:17', '2016-06-22 19:56:39'),
(41, 'será', 0, 28, '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(42, 'é', 0, 28, '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(43, 'fui', 0, 28, '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(44, 'serei', 1, 28, '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(45, 'aaa', 0, 22, '2016-06-16 23:02:53', '2016-06-16 23:02:53'),
(46, 'xxx', 0, 22, '2016-06-16 23:02:53', '2016-06-16 23:02:53'),
(47, 'eee', 0, 22, '2016-06-16 23:02:53', '2016-06-16 23:02:53'),
(48, 'Não sei', 1, 16, '2016-06-16 23:27:04', '2016-06-16 23:27:04'),
(49, 'Não lembro', 0, 16, '2016-06-16 23:27:04', '2016-06-16 23:27:04'),
(50, 'Nunca vi', 0, 16, '2016-06-16 23:27:04', '2016-06-16 23:27:04'),
(51, 'Vai saber!!!', 0, 16, '2016-06-16 23:27:04', '2016-06-16 23:27:04'),
(52, 'Pero Vaz de Caminha', 0, 1, '2016-06-16 23:32:51', '2016-06-20 20:16:11'),
(53, 'Cristóvão Colombo', 0, 1, '2016-06-16 23:32:51', '2016-06-20 20:16:11'),
(54, 'Pedro Álvares Cabral', 1, 1, '2016-06-16 23:32:51', '2016-06-20 20:16:11'),
(55, 'Zumbi dos Palmares', 0, 1, '2016-06-16 23:32:51', '2016-06-20 20:16:11'),
(56, '', 0, 23, '2016-06-18 01:12:13', '2016-06-18 01:12:13'),
(57, '', 0, 23, '2016-06-18 01:12:14', '2016-06-18 01:12:14'),
(58, '', 0, 23, '2016-06-18 01:12:14', '2016-06-18 01:12:14'),
(59, 'imports', 0, 29, '2016-06-19 19:11:06', '2016-06-19 19:12:19'),
(60, 'extends', 0, 29, '2016-06-19 19:11:07', '2016-06-19 19:12:19'),
(61, 'inherits', 0, 29, '2016-06-19 19:11:07', '2016-06-19 19:12:19'),
(62, 'subclass', 0, 29, '2016-06-19 19:11:07', '2016-06-19 19:12:19'),
(63, 'superclasse', 1, 29, '2016-06-19 19:11:07', '2016-06-19 19:12:19'),
(64, 'Tiradentes', 0, 1, '2016-06-20 20:16:11', '2016-06-20 20:16:11'),
(65, 'H2O', 1, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(66, 'Nc', 0, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(67, 'H', 0, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(68, 'Be', 0, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(69, 'Ni', 0, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`) VALUES
(27, 0, 1, 24, 'Main Menu'),
(28, 27, 2, 9, 'Web Development'),
(29, 27, 10, 15, 'Web Design'),
(30, 28, 5, 6, 'Zend'),
(31, 27, 16, 23, 'Cooking'),
(32, 31, 19, 20, 'Cuisines'),
(33, 31, 21, 22, 'Snaks'),
(34, 28, 3, 4, 'PHP'),
(36, 31, 17, 18, 'Beverages'),
(37, 29, 11, 12, 'Photoshop'),
(38, 29, 13, 14, 'Flash'),
(39, 28, 7, 8, 'cakePHP'),
(40, NULL, 25, 26, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `grade_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_grade` (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Extraindo dados da tabela `contents`
--

INSERT INTO `contents` (`id`, `name`, `grade_id`, `created`, `modified`) VALUES
(6, 'Verbos', 5, NULL, '2016-06-05 17:00:17'),
(25, 'Ficção', 4, '2016-06-01 19:35:04', '2016-06-01 19:35:04'),
(27, 'Substantivos', 5, '2016-06-02 18:48:48', '2016-06-02 18:48:48'),
(30, 'Redação', 5, '2016-06-02 19:48:59', '2016-06-02 19:48:59'),
(35, 'Pronomes', 5, '2016-06-05 17:12:13', '2016-06-05 17:12:13'),
(36, 'Bacias Hidrográficas', 7, '2016-06-05 17:12:44', '2016-06-05 17:12:44'),
(37, '2ª Guerra Mundial', 13, '2016-06-05 17:13:06', '2016-06-05 17:54:30'),
(38, 'Lei de Newton', 9, '2016-06-05 17:57:30', '2016-06-05 17:57:30'),
(39, 'Política', 7, '2016-06-06 17:29:16', '2016-06-06 17:29:22'),
(40, 'Polinômios', 6, '2016-06-07 18:29:54', '2016-06-07 18:29:54'),
(41, 'Báskara', 6, '2016-06-07 18:30:14', '2016-06-07 18:30:14'),
(42, 'Frameworks', 19, '2016-06-08 20:10:00', '2016-06-08 20:10:00'),
(43, 'Java', 19, '2016-06-08 20:10:20', '2016-06-08 20:10:20'),
(44, 'Espanhol', 11, '2016-06-16 23:23:24', '2016-06-16 23:23:24'),
(45, 'Tabela Periódica', 10, '2016-06-16 23:24:03', '2016-06-16 23:24:03'),
(46, 'História do Brasil', 13, '2016-06-16 23:34:23', '2016-06-16 23:34:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `grades`
--

INSERT INTO `grades` (`id`, `name`, `created`, `modified`) VALUES
(4, 'Literatura Brasileira', '2016-05-28 11:01:44', '2016-05-28 11:01:44'),
(5, 'Língua Portuguesa', '2016-05-28 11:02:30', '2016-05-28 11:02:30'),
(6, 'Matemática', '2016-05-28 11:02:41', '2016-05-28 11:02:41'),
(7, 'Geografia', '2016-05-28 12:18:49', '2016-05-28 12:18:49'),
(9, 'Física', '2016-05-31 00:39:28', '2016-05-31 00:39:28'),
(10, 'Química', '2016-05-31 12:56:59', '2016-05-31 12:56:59'),
(11, 'Língua Estangeira', '2016-06-02 19:05:02', '2016-06-02 19:05:02'),
(13, 'História', '2016-06-05 17:54:18', '2016-06-05 17:54:18'),
(19, 'Programação', '2016-06-08 20:09:36', '2016-06-08 20:09:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `grade_id` int(10) unsigned NOT NULL,
  `content_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `description` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Extraindo dados da tabela `questions`
--

INSERT INTO `questions` (`id`, `grade_id`, `content_id`, `user_id`, `description`, `type`, `created`, `modified`) VALUES
(1, 13, 46, 4, 'Quem descobriu o Brasil?', 'o', NULL, '2016-06-20 20:16:11'),
(13, 13, 37, 4, 'Quem venceu a 2 guerra?', 'o', '2016-06-08 20:08:19', '2016-06-18 08:47:43'),
(14, 19, 43, 4, 'O que é o Java?', 'o', '2016-06-08 20:12:07', '2016-06-08 20:12:07'),
(16, 9, 38, 4, 'Qual é a lei de Newton?', 'o', '2016-06-09 20:55:36', '2016-06-16 23:27:04'),
(17, 4, 25, 4, 'Teste', 'o', '2016-06-09 20:57:41', '2016-06-09 20:57:41'),
(18, 7, 36, 4, 'Teste 2', 'o', '2016-06-09 20:59:28', '2016-06-09 20:59:28'),
(19, 9, 38, 4, 'aqaqaqa', 'o', '2016-06-09 21:13:29', '2016-06-09 21:13:29'),
(20, 9, 38, 4, 'www', 'o', '2016-06-09 21:26:23', '2016-06-09 21:26:23'),
(21, 5, 30, 4, 'swswsw', 'o', '2016-06-09 21:28:03', '2016-06-09 21:28:03'),
(22, 9, 38, 4, 'sss', 'o', '2016-06-09 21:30:22', '2016-06-16 23:02:53'),
(23, 4, 25, 5, 'sss', 'o', '2016-06-09 21:30:45', '2016-06-18 01:12:13'),
(24, 19, 42, 5, 'swsws', 'd', '2016-06-09 21:33:03', '2016-06-09 21:33:03'),
(25, 9, 38, 5, 'aqaqaq', 'o', '2016-06-11 10:19:34', '2016-06-16 21:32:28'),
(27, 5, 30, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'd', '2016-06-11 22:54:17', '2016-06-22 19:56:39'),
(28, 5, 6, 5, 'Verbo ser', 'o', '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(29, 19, 43, 5, 'Na linguagem de programação Java, para indicar que uma classe A é derivada de B, utiliza-se, na declaração de A, o modificador: ', 'o', '2016-06-19 19:11:06', '2016-06-19 19:12:19'),
(30, 10, 45, 0, 'Qual é a fórmula da água?', 'o', '2016-06-20 20:17:58', '2016-06-20 20:17:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `grade_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_grade` (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `grade_id`, `created`, `modified`) VALUES
(3, 'Pedro Silva', 'pedro', '$2a$10$F6kgdkTIAnDy4xKS28XBe.Wos2VeRleYftwZZDOkxTTgbGANdEUZi', 'user', 5, '2016-06-19 23:28:11', '2016-06-19 23:28:11'),
(4, 'Leonardo Manfredini', 'leo', '$2a$10$VPu4Ef0FcI/Mti04MbVXO.xWeyN1W.qeTxme0KuB8O7wKEfmMuGMS', 'admin', 19, '2016-06-19 23:39:01', '2016-06-19 23:39:01'),
(5, 'Kamila Girardi', 'kami', '$2a$10$qKh9pNsc2yyalT8DKsjFauYKAyfg.pSSYdbRkOZk9rLtwhzH0cNUG', 'user', 5, '2016-06-19 23:47:29', '2016-06-19 23:47:29'),
(7, 'Edegar Rodrigues', 'edegar', '$2a$10$WN4gicJsNVt1wh5XR2BoduCSLsvUFDqiNhr8Cllpd4LuQtAZWiIzm', 'admin', 6, '2016-06-20 00:06:31', '2016-06-20 00:06:31'),
(8, 'Maria da Silva', 'maria', '$2a$10$n0sFw8Z4nYfwH9u0c6OaJeSACjcA4wo4jfV0LIYp/GGpXbgIUzo9G', 'user', 4, '2016-06-20 20:14:38', '2016-06-20 20:14:38');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
