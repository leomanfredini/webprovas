-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 10-Jun-2016 às 11:28
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `answers`
--

INSERT INTO `answers` (`id`, `description`, `is_correct`, `question_id`, `created`, `modified`) VALUES
(1, 'aaa', 1, 12, '2016-06-08 20:06:35', '2016-06-08 20:06:35'),
(2, 'Alemanha', 0, 13, '2016-06-08 20:08:19', '2016-06-08 20:08:19'),
(3, 'Brasil', 1, 13, '2016-06-08 20:08:19', '2016-06-08 20:08:19'),
(4, 'Bolivia', 0, 13, '2016-06-08 20:08:19', '2016-06-08 20:08:19'),
(5, 'Paraguai', 0, 13, '2016-06-08 20:08:19', '2016-06-08 20:08:19'),
(26, 'lwlwlw', 0, 21, '2016-06-09 21:28:03', '2016-06-09 21:28:03'),
(27, 'sss', 1, 22, '2016-06-09 21:30:22', '2016-06-09 21:30:22'),
(28, 'sss', 0, 23, '2016-06-09 21:30:45', '2016-06-09 21:30:45'),
(29, 'aqaqa', 1, 24, '2016-06-09 21:33:03', '2016-06-09 21:33:03');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

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
(43, 'Java', 19, '2016-06-08 20:10:20', '2016-06-08 20:10:20');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `questions`
--

INSERT INTO `questions` (`id`, `grade_id`, `content_id`, `user_id`, `description`, `type`, `created`, `modified`) VALUES
(1, 5, 6, 1, 'Quem descobriu o Brasil?', 'o', NULL, NULL),
(12, 7, 36, 0, 'aaa', 'o', '2016-06-08 20:06:35', '2016-06-08 20:06:35'),
(13, 13, 37, 0, 'Quem ganhou a guerra?', 'o', '2016-06-08 20:08:19', '2016-06-08 20:08:19'),
(14, 19, 43, 0, 'O que é o Java?', 'o', '2016-06-08 20:12:07', '2016-06-08 20:12:07'),
(15, 9, 38, 0, 'dddd', 'o', '2016-06-09 06:33:57', '2016-06-09 06:33:57'),
(16, 9, 38, 0, 'O que é', 'o', '2016-06-09 20:55:36', '2016-06-09 20:55:36'),
(17, 4, 25, 0, 'Teste', 'o', '2016-06-09 20:57:41', '2016-06-09 20:57:41'),
(18, 7, 36, 0, 'Teste 2', 'o', '2016-06-09 20:59:28', '2016-06-09 20:59:28'),
(19, 9, 38, 0, 'aqaqaqa', 'o', '2016-06-09 21:13:29', '2016-06-09 21:13:29'),
(20, 9, 38, 0, 'www', 'o', '2016-06-09 21:26:23', '2016-06-09 21:26:23'),
(21, 5, 30, 0, 'swswsw', 'o', '2016-06-09 21:28:03', '2016-06-09 21:28:03'),
(22, 9, 38, 0, 'sss', 'o', '2016-06-09 21:30:22', '2016-06-09 21:30:22'),
(23, 4, 25, 0, 'sss', 'o', '2016-06-09 21:30:45', '2016-06-09 21:30:45'),
(24, 19, 42, 0, 'swsws', 'd', '2016-06-09 21:33:03', '2016-06-09 21:33:03');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `grade_id`, `created`, `modified`) VALUES
(1, 'Leonardo', 'leo', '', 'admin', 5, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
