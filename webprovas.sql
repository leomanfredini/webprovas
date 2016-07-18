-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Jul-2016 às 20:49
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=166 ;

--
-- Extraindo dados da tabela `answers`
--

INSERT INTO `answers` (`id`, `description`, `is_correct`, `question_id`, `created`, `modified`) VALUES
(2, 'Alemanha', 0, 13, '2016-06-08 20:08:19', '2016-07-06 17:11:15'),
(3, 'Brasil', 0, 13, '2016-06-08 20:08:19', '2016-07-06 17:11:15'),
(4, 'Bolivia', 0, 13, '2016-06-08 20:08:19', '2016-07-06 17:11:15'),
(5, 'Paraguai', 1, 13, '2016-06-08 20:08:19', '2016-07-06 17:11:15'),
(26, 'lwlwlw', 0, 21, '2016-06-09 21:28:03', '2016-06-09 21:28:03'),
(27, 'sss', 1, 22, '2016-06-09 21:30:22', '2016-06-16 23:02:53'),
(28, 'sss', 1, 23, '2016-06-09 21:30:45', '2016-06-18 01:12:13'),
(29, 'aqaqa', 1, 24, '2016-06-09 21:33:03', '2016-07-16 09:22:39'),
(30, '01', 0, 25, '2016-06-11 10:19:34', '2016-06-11 10:19:34'),
(31, '02', 0, 25, '2016-06-11 10:19:34', '2016-06-11 10:19:34'),
(32, '03', 1, 25, '2016-06-11 10:19:34', '2016-06-11 10:19:34'),
(33, '04', 0, 25, '2016-06-11 10:19:34', '2016-06-11 10:19:34'),
(35, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1, 27, '2016-06-11 22:54:17', '2016-07-04 19:06:04'),
(41, 'será', 0, 28, '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(42, 'é', 0, 28, '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(43, 'fui', 0, 28, '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(44, 'serei', 1, 28, '2016-06-16 22:05:20', '2016-06-16 22:06:11'),
(45, 'aaa', 0, 22, '2016-06-16 23:02:53', '2016-06-16 23:02:53'),
(46, 'xxx', 0, 22, '2016-06-16 23:02:53', '2016-06-16 23:02:53'),
(47, 'eee', 0, 22, '2016-06-16 23:02:53', '2016-06-16 23:02:53'),
(48, 'Não sei', 0, 16, '2016-06-16 23:27:04', '2016-07-04 19:05:06'),
(49, 'Não lembro', 0, 16, '2016-06-16 23:27:04', '2016-07-04 19:05:06'),
(50, 'Nunca vi', 1, 16, '2016-06-16 23:27:04', '2016-07-04 19:05:06'),
(51, 'Vai saber!!!', 0, 16, '2016-06-16 23:27:04', '2016-07-04 19:05:06'),
(52, 'Pero Vaz de Caminha', 0, 1, '2016-06-16 23:32:51', '2016-07-17 19:13:18'),
(53, 'Cristóvão Colombo', 0, 1, '2016-06-16 23:32:51', '2016-07-17 19:13:18'),
(54, 'Pedro Álvares Cabral', 1, 1, '2016-06-16 23:32:51', '2016-07-17 19:13:18'),
(55, 'Zumbi dos Palmares', 0, 1, '2016-06-16 23:32:51', '2016-07-17 19:13:18'),
(56, '', 0, 23, '2016-06-18 01:12:13', '2016-06-18 01:12:13'),
(57, '', 0, 23, '2016-06-18 01:12:14', '2016-06-18 01:12:14'),
(58, '', 0, 23, '2016-06-18 01:12:14', '2016-06-18 01:12:14'),
(59, 'imports', 0, 29, '2016-06-19 19:11:06', '2016-06-19 19:12:19'),
(60, 'extends', 0, 29, '2016-06-19 19:11:07', '2016-06-19 19:12:19'),
(61, 'inherits', 0, 29, '2016-06-19 19:11:07', '2016-06-19 19:12:19'),
(62, 'subclass', 0, 29, '2016-06-19 19:11:07', '2016-06-19 19:12:19'),
(63, 'superclasse', 1, 29, '2016-06-19 19:11:07', '2016-06-19 19:12:19'),
(64, 'Tiradentes', 0, 1, '2016-06-20 20:16:11', '2016-07-17 19:13:18'),
(65, 'H2O', 1, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(66, 'Nc', 0, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(67, 'H', 0, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(68, 'Be', 0, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(69, 'Ni', 0, 30, '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(70, '1km', 0, 31, '2016-06-24 21:06:36', '2016-07-02 17:09:53'),
(71, '10km', 0, 31, '2016-06-24 21:06:36', '2016-07-02 17:09:53'),
(72, '1000km', 1, 31, '2016-06-24 21:06:36', '2016-07-02 17:09:53'),
(73, '10000km', 0, 31, '2016-06-24 21:06:36', '2016-07-02 17:09:53'),
(74, '11000km', 0, 31, '2016-06-24 21:06:36', '2016-07-02 17:09:53'),
(75, 'b3', 1, 32, '2016-06-24 21:17:06', '2016-06-24 21:33:51'),
(76, '-b +-(b² - 4ac) / 2a', 1, 33, '2016-06-24 21:35:32', '2016-07-17 19:00:42'),
(77, '(c² - 4ab)', 0, 33, '2016-06-24 21:35:32', '2016-07-17 19:00:42'),
(78, '(b³ - 4ac)', 0, 33, '2016-06-24 21:35:32', '2016-07-17 19:00:42'),
(79, '(b² + 4ac)', 0, 33, '2016-06-24 21:35:32', '2016-07-17 19:00:42'),
(80, '(b² * 4ac)', 0, 33, '2016-06-24 21:35:32', '2016-07-17 19:00:42'),
(81, 'kdkdkd', 1, 34, '2016-06-24 21:42:16', '2016-06-24 21:42:16'),
(82, 'Uma linguagem de programação', 1, 14, '2016-06-29 17:56:14', '2016-07-17 18:51:20'),
(83, 'Uma marca de roupas', 0, 14, '2016-06-29 17:56:14', '2016-07-17 18:51:20'),
(84, 'Uma cafeteria', 0, 14, '2016-06-29 17:56:14', '2016-07-17 18:51:20'),
(85, 'Um país', 0, 14, '2016-06-29 17:56:14', '2016-07-17 18:51:20'),
(86, 'N/A', 0, 14, '2016-06-29 17:56:14', '2016-07-17 18:51:20'),
(87, 'Portugal', 0, 13, '2016-07-02 08:37:18', '2016-07-06 17:11:15'),
(88, '1', 1, 34, '2016-07-04 18:31:28', '2016-07-04 18:31:28'),
(89, '2', 0, 34, '2016-07-04 18:31:28', '2016-07-04 18:31:28'),
(90, '3', 0, 34, '2016-07-04 18:31:28', '2016-07-04 18:31:28'),
(91, '4', 0, 34, '2016-07-04 18:31:28', '2016-07-04 18:31:28'),
(92, '5', 0, 34, '2016-07-04 18:31:28', '2016-07-04 18:31:28'),
(93, '1', 1, 35, '2016-07-04 18:33:20', '2016-07-04 18:33:20'),
(94, '2', 0, 35, '2016-07-04 18:33:20', '2016-07-04 18:33:20'),
(95, '3', 0, 35, '2016-07-04 18:33:20', '2016-07-04 18:33:20'),
(96, '4', 0, 35, '2016-07-04 18:33:20', '2016-07-04 18:33:20'),
(97, '5', 0, 35, '2016-07-04 18:33:20', '2016-07-04 18:33:20'),
(98, '1', 0, 36, '2016-07-04 18:34:22', '2016-07-17 12:37:04'),
(99, '2', 1, 36, '2016-07-04 18:34:22', '2016-07-17 12:37:04'),
(100, '3', 0, 36, '2016-07-04 18:34:22', '2016-07-17 12:37:04'),
(101, '4', 0, 36, '2016-07-04 18:34:22', '2016-07-17 12:37:04'),
(102, '5', 0, 36, '2016-07-04 18:34:22', '2016-07-17 12:37:04'),
(103, '1', 1, 37, '2016-07-04 18:35:10', '2016-07-04 18:35:47'),
(104, '2', 1, 37, '2016-07-04 18:35:10', '2016-07-04 18:35:47'),
(105, '3', 0, 37, '2016-07-04 18:35:10', '2016-07-04 18:35:47'),
(106, '4', 0, 37, '2016-07-04 18:35:10', '2016-07-04 18:35:47'),
(107, '5', 0, 37, '2016-07-04 18:35:10', '2016-07-04 18:35:47'),
(108, '0', 1, 38, '2016-07-04 18:36:19', '2016-07-04 18:51:37'),
(109, '2', 1, 38, '2016-07-04 18:36:19', '2016-07-04 18:51:37'),
(110, '3', 1, 38, '2016-07-04 18:36:19', '2016-07-04 18:51:37'),
(111, '4', 1, 38, '2016-07-04 18:36:19', '2016-07-04 18:51:37'),
(112, '5', 1, 38, '2016-07-04 18:36:19', '2016-07-04 18:51:37'),
(113, '1', 1, 39, '2016-07-04 18:57:02', '2016-07-04 18:58:07'),
(114, '2', 0, 39, '2016-07-04 18:57:02', '2016-07-04 18:58:07'),
(115, '3', 0, 39, '2016-07-04 18:57:02', '2016-07-04 18:58:07'),
(116, '4', 0, 39, '2016-07-04 18:57:02', '2016-07-04 18:58:07'),
(117, '5', 0, 39, '2016-07-04 18:57:02', '2016-07-04 18:58:07'),
(118, '1', 1, 40, '2016-07-04 19:00:25', '2016-07-04 19:00:25'),
(119, '2', 0, 40, '2016-07-04 19:00:25', '2016-07-04 19:00:25'),
(120, '3', 0, 40, '2016-07-04 19:00:25', '2016-07-04 19:00:25'),
(121, '4', 0, 40, '2016-07-04 19:00:25', '2016-07-04 19:00:25'),
(122, '5', 0, 40, '2016-07-04 19:00:25', '2016-07-04 19:00:25'),
(123, '', 0, 20, '2016-07-04 19:03:13', '2016-07-04 19:03:13'),
(124, '', 0, 20, '2016-07-04 19:03:13', '2016-07-04 19:03:13'),
(125, '', 0, 20, '2016-07-04 19:03:13', '2016-07-04 19:03:13'),
(126, '', 1, 20, '2016-07-04 19:03:13', '2016-07-04 19:03:13'),
(127, '', 0, 20, '2016-07-04 19:03:13', '2016-07-04 19:03:13'),
(128, 'kkk', 0, 16, '2016-07-04 19:05:06', '2016-07-04 19:05:06'),
(129, 'da vassalagem', 0, 41, '2016-07-17 18:47:26', '2016-07-17 18:47:26'),
(130, 'do colonato', 0, 41, '2016-07-17 18:47:26', '2016-07-17 18:47:26'),
(131, 'do comitaus', 0, 41, '2016-07-17 18:47:26', '2016-07-17 18:47:26'),
(132, 'da servidão', 1, 41, '2016-07-17 18:47:26', '2016-07-17 18:47:26'),
(133, 'da guilda', 0, 41, '2016-07-17 18:47:26', '2016-07-17 18:47:26'),
(134, 'Statement e ResultSet', 0, 42, '2016-07-17 19:16:10', '2016-07-17 19:16:10'),
(135, 'PreparedStatement e RecordSet', 0, 42, '2016-07-17 19:16:10', '2016-07-17 19:16:10'),
(136, 'Statement e RecordSet', 1, 42, '2016-07-17 19:16:10', '2016-07-17 19:16:10'),
(137, 'PreparedStatement e ResultSet', 0, 42, '2016-07-17 19:16:10', '2016-07-17 19:16:10'),
(138, 'PrepareStatement e executeQuery', 0, 42, '2016-07-17 19:16:10', '2016-07-17 19:16:10'),
(139, 'Boolean, NULL e Array', 0, 43, '2016-07-17 19:43:28', '2016-07-17 19:43:28'),
(140, 'Integer, Float e String', 1, 43, '2016-07-17 19:43:28', '2016-07-17 19:43:28'),
(141, 'Float, String e Object', 0, 43, '2016-07-17 19:43:28', '2016-07-17 19:43:28'),
(142, 'String, Boolean e Array', 0, 43, '2016-07-17 19:43:28', '2016-07-17 19:43:28'),
(143, 'Array, Recurso e NULL', 0, 43, '2016-07-17 19:43:28', '2016-07-17 19:43:28'),
(144, 'ab', 0, 44, '2016-07-17 19:45:42', '2016-07-17 19:45:42'),
(145, '0 + a', 0, 44, '2016-07-17 19:45:42', '2016-07-17 19:45:42'),
(146, '0', 1, 44, '2016-07-17 19:45:42', '2016-07-17 19:45:42'),
(147, '1', 0, 44, '2016-07-17 19:45:42', '2016-07-17 19:45:42'),
(148, 'nenhuma das alternativas anteriores', 0, 44, '2016-07-17 19:45:42', '2016-07-17 19:45:42'),
(149, 'a) A Primeira Guerra Mundial foi consequência direta das disputas imperialistas entre as potências industriais europeias por territórios na África e na Ásia.\r\n\r\nb) O regime czarista da Rússia já enfrentava severas críticas da burguesia liberal e de grupos políticos como os Bolcheviques e os Mencheviques. Durante o conflito, o país participou integrando a Tríplice Entente. No entanto, as derrotas para a Alemanha em decorrência da precariedade do exército russo, precipitaram as lutas internas que culminaram com a Revolução Bolchevique em outubro de 1917e consequente implantação do regime socialista. ', 1, 45, '2016-07-17 19:57:49', '2016-07-17 19:57:49'),
(150, '“Marquei umas alternativas esdrúxulas, que nada tinham a ver”.', 0, 46, '2016-07-17 20:42:51', '2016-07-17 20:42:51'),
(151, '“Os acontecimentos da sua infância a marcaram até os doze anos”.', 0, 46, '2016-07-17 20:42:51', '2016-07-17 20:42:51'),
(152, '“Dia desses resolvi fazer um teste proposto por um site da internet”.', 0, 46, '2016-07-17 20:42:51', '2016-07-17 20:42:51'),
(153, '“Respondi a todas as perguntas e o resultado foi o seguinte”.', 0, 46, '2016-07-17 20:42:51', '2016-07-17 20:42:51'),
(154, '“Fiquei radiante: eu havia realizado uma consulta paranormal com o pai da psicanálise”. ', 1, 46, '2016-07-17 20:42:51', '2016-07-17 20:42:51'),
(155, 'Trata-se de uma cena em que figuras humanas interagem com as coisas.', 1, 47, '2016-07-17 20:44:41', '2016-07-17 20:44:41'),
(156, 'O emprego exclusivo do tempo presente do Indicativo faz a cena parecer descrita no momento em que tudo acontece.', 0, 47, '2016-07-17 20:44:41', '2016-07-17 20:44:41'),
(157, 'A chegada repetida dos eflúvios está reforçada pelo paralelismo sintático.', 0, 47, '2016-07-17 20:44:41', '2016-07-17 20:44:41'),
(158, 'Os eflúvios da noite convocados estão especificados do verso 3 ao 8.', 0, 47, '2016-07-17 20:44:41', '2016-07-17 20:44:41'),
(159, 'O último verso consuma a convocação.', 0, 47, '2016-07-17 20:44:41', '2016-07-17 20:44:41'),
(160, 'V – F – F – V – V', 0, 48, '2016-07-17 20:46:27', '2016-07-17 20:46:27'),
(161, 'V – V – F – V – V', 1, 48, '2016-07-17 20:46:27', '2016-07-17 20:46:27'),
(162, 'F – V – V – F – F', 0, 48, '2016-07-17 20:46:27', '2016-07-17 20:46:27'),
(163, 'F – F – V – F – F', 0, 48, '2016-07-17 20:46:27', '2016-07-17 20:46:27'),
(164, 'V – V – F – V – F', 0, 48, '2016-07-17 20:46:27', '2016-07-17 20:46:27'),
(165, 'Não aceite um produto inferior no lugar de um superior.\r\nNão se deixe enganar por produtos falsificados', 1, 49, '2016-07-17 20:47:25', '2016-07-17 20:47:25');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Extraindo dados da tabela `contents`
--

INSERT INTO `contents` (`id`, `name`, `grade_id`, `created`, `modified`) VALUES
(6, 'Verbos', 5, NULL, '2016-07-16 16:51:06'),
(25, 'Ficção', 4, '2016-06-01 19:35:04', '2016-06-01 19:35:04'),
(27, 'Substantivos', 5, '2016-06-02 18:48:48', '2016-06-02 18:48:48'),
(30, 'Redação', 5, '2016-06-02 19:48:59', '2016-06-02 19:48:59'),
(35, 'Pronomes', 5, '2016-06-05 17:12:13', '2016-06-05 17:12:13'),
(36, 'Bacias Hidrográficas', 7, '2016-06-05 17:12:44', '2016-06-05 17:12:44'),
(37, '2ª Guerra Mundial', 13, '2016-06-05 17:13:06', '2016-06-05 17:54:30'),
(39, 'Política', 7, '2016-06-06 17:29:16', '2016-06-06 17:29:22'),
(40, 'Polinômios', 6, '2016-06-07 18:29:54', '2016-06-07 18:29:54'),
(41, 'Báskara', 6, '2016-06-07 18:30:14', '2016-06-07 18:30:14'),
(42, 'Frameworks', 19, '2016-06-08 20:10:00', '2016-06-08 20:10:00'),
(43, 'Java', 19, '2016-06-08 20:10:20', '2016-06-08 20:10:20'),
(44, 'Espanhol', 11, '2016-06-16 23:23:24', '2016-06-16 23:23:24'),
(45, 'Tabela Periódica', 10, '2016-06-16 23:24:03', '2016-06-16 23:24:03'),
(46, 'História do Brasil', 13, '2016-06-16 23:34:23', '2016-06-16 23:34:23'),
(47, 'Javascript', 19, '2016-07-13 19:52:42', '2016-07-13 19:52:42'),
(48, 'Feudalismo', 13, '2016-07-17 18:43:13', '2016-07-17 18:43:13'),
(49, 'PHP', 19, '2016-07-17 19:21:07', '2016-07-17 19:21:07'),
(50, 'Python', 19, '2016-07-17 19:21:25', '2016-07-17 19:21:25'),
(51, '1ª Guerra Mundial', 13, '2016-07-17 19:52:27', '2016-07-17 19:52:27'),
(52, 'Interpretação de Texto', 5, '2016-07-17 20:39:18', '2016-07-17 20:39:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `class` varchar(200) NOT NULL,
  `questions_selected` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `exams`
--

INSERT INTO `exams` (`id`, `title`, `description`, `class`, `questions_selected`, `date`, `user_id`, `created`, `modified`) VALUES
(25, 'Teste Final', 'Teste final de conhecimentos gerais', '111-A', '44 43 31 45', '2016-07-30', 4, '2016-07-17 20:03:17', '2016-07-17 20:03:17');

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
(11, 'Língua Estrangeira', '2016-06-02 19:05:02', '2016-06-23 22:35:25'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Extraindo dados da tabela `questions`
--

INSERT INTO `questions` (`id`, `grade_id`, `content_id`, `user_id`, `description`, `type`, `created`, `modified`) VALUES
(1, 13, 46, 4, 'Quem descobriu o Brasil?', 'o', NULL, '2016-07-17 19:13:18'),
(13, 13, 37, 4, 'Quem venceu a 2 guerra?', 'o', '2016-06-08 20:08:19', '2016-07-06 17:11:15'),
(14, 19, 43, 4, 'O que é Java?', 'o', '2016-06-08 20:12:07', '2016-07-17 18:51:20'),
(29, 19, 43, 4, 'Na linguagem de programação Java, para indicar que uma classe A é derivada de B, utiliza-se, na declaração de A, o modificador: ', 'o', '2016-06-19 19:11:06', '2016-06-19 19:12:19'),
(30, 10, 45, 4, 'Qual é a fórmula da água?', 'o', '2016-06-20 20:17:58', '2016-06-20 20:17:58'),
(31, 7, 36, 4, 'Qual a extensão do Rio Amazonas?', 'o', '2016-06-24 21:06:36', '2016-07-02 17:09:53'),
(33, 6, 41, 4, 'Qual a fórmula de baskara?', 'o', '2016-06-24 21:35:32', '2016-07-17 19:00:42'),
(41, 13, 48, 4, '“A instituição das corveias variava de acordo com os domínios senhoriais, e, no interior de cada um, de acordo com o estatuto jurídico dos camponeses, ou de seus mansos [parcelas de terra].”\r\n(Marc Bloch. Os caracteres originais da França rural, 1952.)\r\n\r\nEsta frase sobre o feudalismo trata:', 'o', '2016-07-17 18:47:26', '2016-07-17 18:47:26'),
(42, 19, 43, 4, 'Considere as linhas a seguir em uma classe Java.\r\na = con.prepareStatement("select * from cliente where id = ? ");\r\na.setInt(1, id);\r\nb = a.executeQuery();\r\n\r\nUm Analista de Sistemas pode concluir corretamente que os objetos a e b são, respectivamente, dos tipos de interface:', 'o', '2016-07-17 19:16:10', '2016-07-17 19:16:10'),
(43, 19, 49, 4, 'Assinale a alternativa que representa tipos de variáveis escalares em PHP:', 'o', '2016-07-17 19:43:28', '2016-07-17 19:43:28'),
(44, 19, 49, 4, 'De acordo com o trecho de código escrito na linguagem PHP:\r\n\r\n   $b = 0; \r\n   $a = $b + "a";\r\n\r\nO conteúdo da variável $a será: ', 'o', '2016-07-17 19:45:42', '2016-07-17 19:45:42'),
(45, 13, 51, 4, 'A Primeira Guerra Mundial, (1914-1918), foi o primeiro conjunto de acontecimentos que abalou seriamente o domínio colonial e a existência de impérios europeus no século XX. Tendo por base o texto, explique:\r\n\r\na) A associação entre o colonialismo europeu e a Primeira Guerra.\r\nb) A relação entre a Primeira Guerra e a destruição do Império Russo. ', 'd', '2016-07-17 19:57:49', '2016-07-17 19:57:49'),
(46, 5, 52, 16, '(ENEM 2010)\r\n\r\nTestes\r\n\r\nDia desses resolvi fazer um teste proposto por um site da internet. O nome do teste era tentador: “O que Freud diria de você”. Uau. Respondi a todas as perguntas e o resultado foi o seguinte: “Os acontecimentos da sua infância a marcaram até os doze anos, depois disso você buscou conhecimento intelectual para seu amadurecimento”. Perfeito! Foi exatamente o que aconteceu comigo. Fiquei radiante: eu havia realizado uma consulta paranormal com o pai da psicanálise, e ele acertou na mosca. Estava com tempo sobrando, e curiosidade é algo que não me falta, então resolvi voltar ao teste e responder tudo diferente do que havia respondido antes. Marquei umas alternativas esdrúxulas, que nada tinham a ver com minha personalidade. E fui conferir o resultado, que dizia o seguinte: “Os acontecimentos da sua infância a marcaram até os 12 anos, depois disso você buscou conhecimento intelectual para seu amadurecimento”.\r\n\r\nMEDEIROS, M. Doidas e santas. Porto Alegre, 2008 (adaptado).\r\n\r\nQuanto às influências que a internet pode exercer sobre os usuários, a autora expressa uma reação irônica no trecho:\r\n', 'o', '2016-07-17 20:42:51', '2016-07-17 20:42:51'),
(47, 5, 52, 16, '(MACKENZIE – Modelo ENEM)\r\n\r\nCOPO D’ÁGUA NO SERENO\r\nO copo no peitoril\r\nconvoca os eflúvios da noite.\r\nVem o frio nevoso\r\nda serra.\r\nVêm os perfumes brandos\r\ndo mato dormindo.\r\nVem o gosto delicado\r\nda brisa.\r\nE pousam na água.\r\n\r\nCarlos Drummond de Andrade\r\n\r\nAssinale a alternativa INCORRETA.', 'o', '2016-07-17 20:44:41', '2016-07-17 20:44:41'),
(48, 5, 6, 16, '(CPCAR) Escreva (V) para as afirmativas verdadeiras e (F) para as falsas e, em seguida, assinale a alternativa com a sequência correta.\r\n(_____) No modo indicativo, o pretérito imperfeito expressa ação passada que se prolonga, o pretérito mais-que-perfeito expressa fato passado anterior a outro que também já é passado, e o pretérito perfeito expressa ações já concluídas.\r\n(_____) No período: “Não deixais para amanhã o que podeis fazer hoje.”, os verbos estão, respectivamente, nos modos imperativo e indicativo.\r\n(_____) Na frase: “O diretor aborrecia-se sem razão.”, o verbo está na voz passiva.\r\n(_____) Em “Precisa-se de candidatos aplicados.”, tem-se voz ativa.\r\n(_____) Em “Não te destruas com álcool, fumo e demais drogas.”, constata-se voz reflexiva.\r\n', 'o', '2016-07-17 20:46:27', '2016-07-17 20:46:27'),
(49, 5, 52, 16, '(UNICAMP) A propaganda abaixo explora a expressão idiomática não leve gato por lebre para construir a imagem de seu produto:\r\n\r\nNÃO LEVE GATO POR LEBRE\r\nSÓ BOM BRIL É BOM BRIL\r\n\r\nExplique a expressão idiomática por meio de duas paráfrases. \r\n', 'd', '2016-07-17 20:47:25', '2016-07-17 20:47:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `grade_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_grade` (`grade_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`, `grade_id`, `created`, `modified`) VALUES
(1, 'Administrador', 'admin', '$2a$10$knG/iwwKNZZUl3/8Um4qa.7nyTE4oOtoHfu1jNRb8s1T8iTe6RLkK', 'admin', 19, '2016-07-16 20:45:51', '2016-07-16 20:46:47'),
(4, 'Leonardo Manfredini', 'leonardo', '$2a$10$VPu4Ef0FcI/Mti04MbVXO.xWeyN1W.qeTxme0KuB8O7wKEfmMuGMS', 'user', 19, '2016-06-19 23:39:01', '2016-07-17 19:30:54'),
(16, 'Kamila Girardi', 'kami', '$2a$10$IHRvb8LbLH27QfZonW9B9OV5dtFFlIKvS18/Xs0/LXGF3ZUt6vpBC', 'user', 5, '2016-07-17 20:36:27', '2016-07-17 20:36:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
