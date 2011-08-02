-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-08-2011 a las 12:04:38
-- Versión del servidor: 5.1.54
-- Versión de PHP: 5.3.5-1ubuntu7.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `medianaranja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_answers`
--

CREATE TABLE IF NOT EXISTS `mn_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `public` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Volcar la base de datos para la tabla `mn_answers`
--

INSERT INTO `mn_answers` (`id`, `answer`, `question_id`, `public`) VALUES
(1, 'Si', 1, 1),
(2, 'No', 1, 1),
(3, 'Dispuesto a legislarlo (bajo condiciones especiales)', 1, 1),
(4, 'Sí, matrimonio', 2, 0),
(5, 'Sí, unión civil', 2, 0),
(6, 'No', 3, 1),
(7, 'Junto con AFP privada', 3, 1),
(8, 'Reforma total al sistema de AFP', 3, 0),
(9, 'Si, menos del 50%', 4, 1),
(10, 'Una parte minoritaria (5%)', 4, 0),
(11, 'No', 4, 1),
(12, 'No', 9, 0),
(13, 'Si se respetan condiciones ambientales', 9, 0),
(14, 'Nunca', 5, 0),
(15, 'Jóvenes y mujeres', 5, 0),
(16, 'Dispuesto a discutirlo', 5, 0),
(17, 'No', 10, 0),
(18, 'Dispuesto a debatirlo', 10, 0),
(19, 'Inscripción automática- Voto voluntario', 6, 0),
(23, 'Siempre', 7, 1),
(24, 'Bajo ciertas condiciones', 7, 1),
(25, 'Perfeccionarlo', 8, 1),
(26, 'Eliminarlo', 8, 1),
(27, 'Cambio por un sistema proporcional de elección', 8, 0),
(28, 'Mantenerlo', 11, 0),
(29, 'Disminuirlo', 11, 0),
(30, 'Mantenerlo', 12, 0),
(31, 'Disminuirlo', 12, 0),
(32, 'Plan nacional de capacitación para desempleados', 13, 0),
(33, 'Fortalecer seguro desempleo y creación Agencia Nacional del Empleo', 13, 0),
(34, 'Subsidio estatal para crear más empleos', 13, 0),
(35, 'Programa de subsidio a la contratación de trabajo', 13, 0),
(36, 'Que el Banco del Estado y CORFO aseguren condiciones especiales para las PYMES', 14, 0),
(37, 'Crear un Defensor del Emprendimiento y el Estatuto del Re-emprendimiento', 14, 1),
(38, 'Crear una Oficina Nacional de Emprendimiento', 14, 1),
(39, 'Medidas de protección', 15, 0),
(40, 'Inyectar más recursos', 15, 1),
(41, 'Acceso al crédito, tecnología y mercados de exportación', 15, 1),
(42, 'Aumentar gasto social en el año 2010', 16, 0),
(43, 'Tener una regla de consistencia estructural y otra de consistencia de ciclo', 16, 1),
(44, 'Perfeccionar regla de balance estructural', 16, 1),
(45, 'Más atribuciones para el Estado. Aumento estatización', 17, 0),
(46, 'Más participación del Estado. Aumento regulación', 17, 0),
(48, 'Asignaciones presupuestarias directas de matrículas y aranceles para todos los alumnos', 18, 0),
(49, 'Asegurar financiamiento para los dos quintiles más bajos en Universidades del Estado', 18, 0),
(50, 'Universalizar el crédito con aval del estado', 18, 1),
(51, 'Ampliar becas y acceso al crédito universitario', 18, 1),
(52, 'Simplificar y perfeccionar sistema de postulación de Fondos', 19, 1),
(53, 'Aumentar los Fondos Concursables', 19, 1),
(54, 'Incorporar especialistas básicos en el sistema público', 20, 0),
(55, 'Mejorar salarios de los especialistas', 20, 0),
(56, 'Mejorar los centros de atención primarias', 21, 1),
(57, 'Construcción de nuevos hospitales públicos', 21, 0),
(58, 'Construcción de nuevos hospitales públicos y consultorios', 21, 1),
(59, 'Sí, de acuerdo', 22, 0),
(60, 'Sí, para jubilados con menos recursos', 22, 0),
(61, 'Aportes para deportistas discapacitados', 23, 0),
(62, 'Leyes de apoyo e inserción laboral', 23, 1),
(63, 'Transformar FONADIS y dar apoyo técnico', 23, 1),
(64, 'Sí', 24, 0),
(65, 'No', 24, 0),
(66, 'Debe existir una nueva política de vivienda social', 25, 0),
(67, 'Mantener política de vivienda social y mejorar viviendas', 25, 1),
(68, 'Aumentar tamaño de viviendas sociales', 25, 1),
(69, 'Sí', 26, 0),
(70, 'Hay que evaluarlo nuevamente', 26, 0),
(71, 'Sí', 27, 1),
(72, 'No', 27, 1),
(73, 'Para enfermos terminales', 27, 1),
(74, 'Valorizar el trabajo doméstico no remunerado', 28, 0),
(75, 'Considerar un sistema de cuidado infantil', 28, 0),
(76, 'Implementar un subsidio para participación laboral femenina', 28, 1),
(77, 'Fomentar una jornada laboral parcial y flexible', 28, 1),
(78, 'Reformar la ley de gasto electoral vigente', 29, 0),
(79, 'Propondría un sistema de financiamiento público', 29, 0),
(80, 'Sí, auto cultivo y consumo personal', 30, 0),
(81, 'No', 30, 0),
(82, 'Dispuesto a debatirlo. Sin posición determinada', 30, 0),
(83, 'Dar beneficios portuarios', 31, 1),
(84, 'Dar salida al mar', 31, 0),
(85, 'Hay que debatirlo. No tengo una posición determinada', 31, 1),
(86, 'Hacer cambios en  la Constitución', 32, 0),
(87, 'Destinar más Recursos y atribuciones para las regiones', 32, 1),
(88, 'Elecciones ciudadanas para el Consejo Regional e Intendentes', 32, 0),
(89, 'Autonomía presupuestaria a regiones y municipios', 32, 1),
(90, 'Prevención y nueva mirada de la sociedad', 33, 0),
(91, 'Ampliar el programa Chile Crece Contigo', 33, 0),
(92, 'Sistema judicial claro y transparente', 33, 1),
(93, 'Modificar leyes', 33, 1),
(94, 'Eliminarlo', 34, 0),
(95, 'Bajarlo', 34, 0),
(96, 'Mantenerlo', 34, 0),
(97, 'Fin administración municipal. Volver a la administración del Estado', 35, 0),
(98, 'Fin administración municipal en ciertos casos', 35, 1),
(99, 'Fin administración municipal. Sistema de nuevas corporaciones de educación', 35, 1),
(100, 'manzana', 36, 1),
(101, 'platano', 36, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_cake_sessions`
--

CREATE TABLE IF NOT EXISTS `mn_cake_sessions` (
  `id` varchar(255) NOT NULL DEFAULT '',
  `data` text,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `mn_cake_sessions`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_candidates`
--

CREATE TABLE IF NOT EXISTS `mn_candidates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `imagepath` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcar la base de datos para la tabla `mn_candidates`
--

INSERT INTO `mn_candidates` (`id`, `slug`, `name`, `imagepath`) VALUES
(1, 'jorge-arrate', 'Jorge Arrate', 'http://www.votainteligente.cl/medianaranja/images/arrate.jpg'),
(2, 'sebastian-pinera', 'Sebastián Piñera', 'http://www.votainteligente.cl/medianaranja/images/pinera.jpg'),
(3, 'eduardo-frei', 'Eduardo Frei', 'http://www.votainteligente.cl/medianaranja/images/frei.jpg'),
(4, 'marco-enriquez-ominami', 'Marco Enriquez-Ominami', 'http://www.votainteligente.cl/medianaranja/images/ominami.jpg'),
(12, 'perico-los-palotes', 'perico los palotes', 'http://4.bp.blogspot.com/-9MFHtS57cRw/TcITV-tOk0I/AAAAAAAAAA0/KDGeJlF_YKk/s1600/perico.jpg'),
(13, 'lf-aaen-colita-de-chancho', 'lf Ááéñ~colita de chancho', 'http://1.bp.blogspot.com/-Y10l-YqE_9s/TVk__CnNZGI/AAAAAAAAAI8/eh9BoFXXPFs/s1600/chancho.jpg'),
(14, 'otro-candidato', 'Otro candidato', 'http://www.theclinic.cl/wp-content/uploads/2011/07/Huelga-Escondida.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_candidate_links`
--

CREATE TABLE IF NOT EXISTS `mn_candidate_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_profile_id` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `mn_candidate_links`
--

INSERT INTO `mn_candidate_links` (`id`, `candidate_profile_id`, `description`, `link`) VALUES
(1, 1, 'Página principal', 'www.arrate.cl'),
(2, 3, 'la página', 'www.shansho.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_candidate_parties`
--

CREATE TABLE IF NOT EXISTS `mn_candidate_parties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_profile_id` int(11) NOT NULL,
  `starting_year` int(11) DEFAULT NULL,
  `ending_year` int(11) DEFAULT NULL,
  `party` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `mn_candidate_parties`
--

INSERT INTO `mn_candidate_parties` (`id`, `candidate_profile_id`, `starting_year`, `ending_year`, `party`) VALUES
(1, 1, 1963, 2009, 'Partido Socialista'),
(2, 3, 1994, 1999, 'Partido porcino'),
(3, 1, 2000, 2011, 'Partido Porcino Popular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_candidate_political_experiences`
--

CREATE TABLE IF NOT EXISTS `mn_candidate_political_experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_profile_id` int(11) DEFAULT NULL,
  `starting_year` int(11) DEFAULT NULL,
  `ending_year` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `mn_candidate_political_experiences`
--

INSERT INTO `mn_candidate_political_experiences` (`id`, `candidate_profile_id`, `starting_year`, `ending_year`, `position`, `type`) VALUES
(1, 1, 1975, 1977, 'Secretario de relaciones internacionales del Partido Socialista', 0),
(2, 1, 1972, 1973, 'Ministro de minería interina', 1),
(3, 3, 2010, 2011, 'Jefe del partido', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_candidate_profiles`
--

CREATE TABLE IF NOT EXISTS `mn_candidate_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth` date DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `sons` int(11) DEFAULT NULL,
  `marital_status` varchar(255) NOT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `highschool` varchar(255) DEFAULT NULL,
  `current_party` varchar(255) NOT NULL,
  `current_party_starting_year` int(11) NOT NULL,
  `assets` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `mn_candidate_profiles`
--

INSERT INTO `mn_candidate_profiles` (`id`, `candidate_id`, `name`, `birth`, `profession`, `sons`, `marital_status`, `religion`, `twitter`, `facebook`, `highschool`, `current_party`, `current_party_starting_year`, `assets`, `created`, `modified`) VALUES
(1, 1, 'Perfil de Jorge Arrate', '2031-05-01', 'Abogado', 2, 'Casado con Diamela Eltit', '--', 'www.twitter.com/jarrate', 'www.facebook.com/jarrate', 'Saint Paul/Mackay/Instituto Nacional', 'Socialistas allendistas', 2009, 'Esperando respuesta', '2011-07-26 13:04:11', '2011-07-26 15:33:53'),
(2, 2, 'Perfil de Sebastián Piñera', '2011-07-26', 'asdfasdf', 0, 'asdfasdf', 'sdfasdf', 'asdasd', 'asdasd', 'asdasdasd', '', 0, 'dfgsdfgsdfg', '2011-07-26 17:20:08', '2011-07-26 17:20:08'),
(3, 13, 'Perfil de lf Ááéñ~colita de chancho', '1992-07-26', 'chancho', 19, 'soltero sin compromiso y en busca del verdadero amor (podrías ser tú)', 'pastafarian', 'www.twitter.com/shansho', 'www.facebook.com/shansho', 'The shansho''s Colita High school', '', 0, 'Esperando para que la envíe', '2011-07-26 17:43:44', '2011-08-01 13:20:27'),
(4, 14, 'Perfil de Otro candidato', '1995-07-26', '5674567', 0, 'soltero sin compromiso', '3453', 'www.twitter.com/jarrate', 'www.facebook.com/shansho', 'Saint Paul/Mackay/Instituto Nacional', '', 0, 'fghjfghj', '2011-07-26 18:14:33', '2011-07-26 18:14:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_candidate_university_studies`
--

CREATE TABLE IF NOT EXISTS `mn_candidate_university_studies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_profile_id` int(11) DEFAULT NULL,
  `career` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `ending_year` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `mn_candidate_university_studies`
--

INSERT INTO `mn_candidate_university_studies` (`id`, `candidate_profile_id`, `career`, `university`, `ending_year`) VALUES
(1, 1, 'Derecho', 'Universidad de Chile', 1964),
(2, 1, 'PhD (c) en economía/Master of arts en economía', 'Hardvard', 1967);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_candidate_work_experiences`
--

CREATE TABLE IF NOT EXISTS `mn_candidate_work_experiences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_profile_id` int(11) NOT NULL,
  `starting_year` int(11) NOT NULL,
  `ending_year` int(11) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `mn_candidate_work_experiences`
--

INSERT INTO `mn_candidate_work_experiences` (`id`, `candidate_profile_id`, `starting_year`, `ending_year`, `position`, `company`) VALUES
(1, 1, 0, 1970, 'Director', 'Empresa editora ZigZag'),
(2, 3, 0, 1998, 'Carnicero', 'Matadero los shanshos ricos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_categories`
--

CREATE TABLE IF NOT EXISTS `mn_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `mn_categories`
--

INSERT INTO `mn_categories` (`id`, `slug`, `name`, `order`) VALUES
(1, 'temas-valoricos', 'Temas valóricos', 1),
(2, 'economia-y-trabajo', 'Economía y trabajo', 2),
(3, 'educacion', 'Educación', 3),
(4, 'sistema-politico', 'Sistema político', 4),
(5, 'otros', 'Otros', 10),
(6, 'educacion-y-cultura', 'Educación y Cultura', 5),
(7, 'salud', 'Salud', 6),
(8, 'seguridad-ciudadana', 'Seguridad ciudadana', 7),
(9, 'vivienda', 'Vivienda', 8),
(10, 'energias', 'Energías', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_people`
--

CREATE TABLE IF NOT EXISTS `mn_people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idfacebook` varchar(255) NOT NULL,
  `session_key` varchar(255) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `confirmsCandidate` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `mn_people`
--

INSERT INTO `mn_people` (`id`, `idfacebook`, `session_key`, `candidate_id`, `date`, `confirmsCandidate`) VALUES
(1, '560973905', '', 1, '2011-07-29 14:11:09', 1),
(2, '560973905', '', 1, '2011-07-29 18:19:06', NULL),
(3, '560973905', '', 2, '2011-07-29 18:23:52', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_person_answers`
--

CREATE TABLE IF NOT EXISTS `mn_person_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `result_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `importance` float NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=139 ;

--
-- Volcar la base de datos para la tabla `mn_person_answers`
--

INSERT INTO `mn_person_answers` (`id`, `result_id`, `answer_id`, `importance`, `created`) VALUES
(1, 1, 1, 0.1, '2011-07-13 16:49:06'),
(2, 1, 1, 0.1, '2011-07-13 16:51:57'),
(3, 1, 1, 0.1, '2011-07-13 16:54:17'),
(4, 1, 1, 0.1, '2011-07-14 12:37:51'),
(5, 1, 73, 0.1, '2011-07-14 12:37:51'),
(6, 1, 1, 0.1, '2011-07-14 12:43:59'),
(7, 1, 72, 0.1, '2011-07-14 12:43:59'),
(8, 1, 1, 0.1, '2011-07-20 09:56:39'),
(9, 1, 72, 0.1, '2011-07-20 09:56:39'),
(10, 1, 11, 0.1, '2011-07-20 09:56:39'),
(11, 1, 1, 0.1, '2011-07-20 11:00:01'),
(12, 1, 72, 0.1, '2011-07-20 11:00:01'),
(13, 1, 1, 0.1, '2011-07-22 10:44:14'),
(14, 1, 72, 0.1, '2011-07-22 10:44:14'),
(15, 1, 40, 0.1, '2011-07-22 10:44:14'),
(16, 1, 1, 0.1, '2011-07-22 10:55:28'),
(17, 1, 72, 0.1, '2011-07-22 10:55:28'),
(18, 1, 11, 0.1, '2011-07-22 10:55:28'),
(19, 1, 1, 0.1, '2011-07-22 10:59:24'),
(20, 1, 72, 0.1, '2011-07-22 10:59:24'),
(21, 1, 11, 0.1, '2011-07-22 10:59:24'),
(22, 1, 1, 0.1, '2011-07-22 17:02:29'),
(23, 1, 72, 0.1, '2011-07-22 17:02:29'),
(24, 1, 1, 0.1, '2011-07-25 11:18:48'),
(25, 1, 72, 0.1, '2011-07-25 11:18:48'),
(26, 1, 1, 0.1, '2011-07-25 11:19:58'),
(27, 1, 72, 0.1, '2011-07-25 11:19:58'),
(28, 1, 1, 0.1, '2011-07-25 11:22:35'),
(29, 1, 72, 0.1, '2011-07-25 11:22:35'),
(30, 1, 1, 0.1, '2011-07-25 11:30:57'),
(31, 1, 72, 0.1, '2011-07-25 11:30:57'),
(32, 1, 1, 0.1, '2011-07-25 11:34:31'),
(33, 1, 72, 0.1, '2011-07-25 11:34:31'),
(34, 1, 1, 0.1, '2011-07-25 11:41:59'),
(35, 1, 72, 0.1, '2011-07-25 11:41:59'),
(36, 1, 1, 0.1, '2011-07-25 11:42:33'),
(37, 1, 72, 0.1, '2011-07-25 11:42:33'),
(38, 1, 1, 0.1, '2011-07-25 11:44:44'),
(39, 1, 72, 0.1, '2011-07-25 11:44:44'),
(40, 1, 1, 0.1, '2011-07-25 11:50:21'),
(41, 1, 72, 0.1, '2011-07-25 11:50:21'),
(42, 1, 1, 0.1, '2011-07-25 11:53:59'),
(43, 1, 72, 0.1, '2011-07-25 11:53:59'),
(44, 1, 1, 0.1, '2011-07-25 11:54:53'),
(45, 1, 72, 0.1, '2011-07-25 11:54:53'),
(46, 1, 1, 0.1, '2011-07-25 12:04:26'),
(47, 1, 72, 0.1, '2011-07-25 12:04:26'),
(48, 1, 1, 0.1, '2011-07-25 12:41:44'),
(49, 1, 1, 0.1, '2011-07-25 12:42:27'),
(50, 1, 1, 0.1, '2011-07-25 12:43:56'),
(51, 1, 1, 0.1, '2011-07-25 12:44:47'),
(52, 1, 1, 0.1, '2011-07-25 12:57:47'),
(53, 1, 1, 0.1, '2011-07-25 13:06:19'),
(54, 1, 1, 0.1, '2011-07-25 13:07:35'),
(55, 1, 1, 0.1, '2011-07-25 13:21:56'),
(56, 1, 1, 0.1, '2011-07-25 14:50:13'),
(57, 0, 0, 0, '2011-07-25 14:53:31'),
(58, 1, 1, 0.1, '2011-07-25 15:13:12'),
(59, 1, 1, 0.1, '2011-07-25 15:15:06'),
(60, 1, 1, 0.1, '2011-07-25 15:17:50'),
(61, 1, 1, 0.1, '2011-07-25 15:22:43'),
(62, 1, 1, 0.1, '2011-07-25 15:33:00'),
(63, 1, 11, 0.1, '2011-07-25 15:34:53'),
(64, 0, 0, 0, '2011-07-25 15:37:51'),
(65, 0, 0, 0, '2011-07-25 15:43:23'),
(66, 0, 0, 0, '2011-07-25 15:44:58'),
(67, 0, 0, 0, '2011-07-25 15:45:40'),
(68, 0, 0, 0, '2011-07-25 15:47:41'),
(69, 0, 0, 0, '2011-07-26 11:20:11'),
(70, 0, 0, 0, '2011-07-26 11:21:20'),
(71, 0, 0, 0, '2011-07-26 11:22:25'),
(72, 0, 0, 0, '2011-07-26 11:25:51'),
(73, 0, 0, 0, '2011-07-26 11:28:50'),
(74, 0, 0, 0, '2011-07-26 11:29:43'),
(75, 0, 0, 0, '2011-07-26 11:31:37'),
(76, 0, 0, 0, '2011-07-26 11:34:57'),
(77, 1, 1, 0.1, '2011-07-26 17:02:04'),
(78, 0, 0, 0, '2011-07-26 17:52:41'),
(79, 1, 1, 0.1, '2011-07-29 14:11:09'),
(80, 1, 72, 0.1, '2011-07-29 14:11:09'),
(81, 1, 36, 0.1, '2011-07-29 14:11:09'),
(82, 1, 39, 0.1, '2011-07-29 14:11:09'),
(83, 1, 42, 0.1, '2011-07-29 14:11:09'),
(84, 1, 74, 0.1, '2011-07-29 14:11:09'),
(85, 1, 8, 0.1, '2011-07-29 14:11:09'),
(86, 1, 11, 0.1, '2011-07-29 14:11:09'),
(87, 1, 27, 0.1, '2011-07-29 14:11:09'),
(88, 1, 23, 0.1, '2011-07-29 14:11:09'),
(89, 1, 97, 0.1, '2011-07-29 14:11:09'),
(90, 1, 48, 0.1, '2011-07-29 14:11:09'),
(91, 1, 52, 0.1, '2011-07-29 14:11:09'),
(92, 1, 58, 0.1, '2011-07-29 14:11:09'),
(93, 1, 63, 0.1, '2011-07-29 14:11:09'),
(94, 1, 90, 0.1, '2011-07-29 14:11:09'),
(95, 1, 66, 0.1, '2011-07-29 14:11:09'),
(96, 1, 100, 0.1, '2011-07-29 14:11:09'),
(97, 1, 84, 0.1, '2011-07-29 14:11:09'),
(98, 1, 86, 0.1, '2011-07-29 14:11:09'),
(99, 1, 1, 0.1, '2011-07-29 18:19:07'),
(100, 1, 71, 0.1, '2011-07-29 18:19:07'),
(101, 1, 37, 0.1, '2011-07-29 18:19:07'),
(102, 1, 40, 0.1, '2011-07-29 18:19:07'),
(103, 1, 43, 0.1, '2011-07-29 18:19:07'),
(104, 1, 77, 0.1, '2011-07-29 18:19:07'),
(105, 1, 7, 0.1, '2011-07-29 18:19:07'),
(106, 1, 10, 0.1, '2011-07-29 18:19:07'),
(107, 1, 27, 0.1, '2011-07-29 18:19:07'),
(108, 1, 24, 0.1, '2011-07-29 18:19:07'),
(109, 1, 99, 0.1, '2011-07-29 18:19:07'),
(110, 1, 50, 0.1, '2011-07-29 18:19:07'),
(111, 1, 52, 0.1, '2011-07-29 18:19:07'),
(112, 1, 58, 0.1, '2011-07-29 18:19:07'),
(113, 1, 63, 0.1, '2011-07-29 18:19:07'),
(114, 1, 91, 0.1, '2011-07-29 18:19:07'),
(115, 1, 66, 0.1, '2011-07-29 18:19:07'),
(116, 1, 101, 0.1, '2011-07-29 18:19:07'),
(117, 1, 83, 0.1, '2011-07-29 18:19:07'),
(118, 1, 86, 0.1, '2011-07-29 18:19:07'),
(119, 1, 2, 0.1, '2011-07-29 18:23:52'),
(120, 1, 72, 0.1, '2011-07-29 18:23:52'),
(121, 1, 37, 0.1, '2011-07-29 18:23:52'),
(122, 1, 39, 0.1, '2011-07-29 18:23:52'),
(123, 1, 42, 0.1, '2011-07-29 18:23:52'),
(124, 1, 74, 0.1, '2011-07-29 18:23:52'),
(125, 1, 8, 0.1, '2011-07-29 18:23:52'),
(126, 1, 11, 0.1, '2011-07-29 18:23:52'),
(127, 1, 27, 0.1, '2011-07-29 18:23:52'),
(128, 1, 23, 0.1, '2011-07-29 18:23:52'),
(129, 1, 99, 0.1, '2011-07-29 18:23:52'),
(130, 1, 51, 0.1, '2011-07-29 18:23:52'),
(131, 1, 53, 0.1, '2011-07-29 18:23:52'),
(132, 1, 58, 0.1, '2011-07-29 18:23:52'),
(133, 1, 63, 0.1, '2011-07-29 18:23:52'),
(134, 1, 93, 0.1, '2011-07-29 18:23:52'),
(135, 1, 68, 0.1, '2011-07-29 18:23:52'),
(136, 1, 101, 0.1, '2011-07-29 18:23:52'),
(137, 1, 85, 0.1, '2011-07-29 18:23:52'),
(138, 1, 86, 0.1, '2011-07-29 18:23:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_questions`
--

CREATE TABLE IF NOT EXISTS `mn_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `explanation` text NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sour` tinyint(1) NOT NULL,
  `public` tinyint(1) NOT NULL,
  `included_in_media_naranja` tinyint(4) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Volcar la base de datos para la tabla `mn_questions`
--

INSERT INTO `mn_questions` (`id`, `question`, `explanation`, `short_description`, `category_id`, `sour`, `public`, `included_in_media_naranja`, `order`) VALUES
(1, '¿Estas de acuerdo con legalizar el aborto?', 'El aborto blablablabla', 'Legalizar aborto', 1, 1, 1, 1, 1),
(2, '¿Estás de acuerdo con legalizar el matrimonio homosexual?', 'El matrimonio es blabalbla', 'Matrimonio homosexual', 1, 1, 0, 1, 2),
(3, '¿Aprobaría la creación de una AFP Estatal?', 'El sistema de AFP', 'AFP estatal', 2, 1, 1, 1, 8),
(4, '¿Estás de acuerdo con privatizar Codelco?', '', '0', 2, 0, 1, 1, 10),
(5, '¿Estás de acuerdo con la flexibilidad laboral?', '', '0', 2, 1, 0, 1, 9),
(6, '¿Cómo debiera ser el sistema de inscripción electoral en Chile?', '', '0', 4, 1, 0, 1, 4),
(7, '¿Estás de acuerdo con la inclusión en el sistema electoral de los chilenos residentes en países extranjeros?', '', '0', 4, 0, 1, 1, 3),
(8, '¿Qué harías con el sistema binominal?', '', '0', 4, 0, 1, 1, 2),
(9, '¿Apoyas la construcción de las represas hidroeléctricas en Aysén?', '', '0', 10, 1, 0, 1, 2),
(10, '¿Apoyas la utilización de energía nuclear como una de las fuentes de abastecimiento energético para Chile?', '', '0', 10, 1, 0, 1, 1),
(11, '¿Qué harías con el impuesto específico a los combustibles?', '', '0', 2, 0, 0, 1, 7),
(12, '¿Que harías con el valor del IVA?', '', '0', 2, 0, 0, 1, 1),
(13, '¿Con qué medidas estás más de acuerdo para combatir el desempleo?', '', '0', 2, 0, 0, 1, 2),
(14, '¿Qué propones para fortalecer las PYMES?', '', '0', 2, 0, 1, 1, 3),
(15, '¿Qué medida sugieres para fomentar la agricultura?', '', '0', 2, 0, 1, 1, 4),
(16, '¿Con cuál de estas medidas estás más de acuerdo en base a la regla de superávit fiscal?', '', '0', 2, 0, 1, 1, 5),
(17, 'De acuerdo al rol que cumple actualmente el Estado en Chile. ¿Qué propones?', '', '0', 4, 0, 0, 1, 1),
(18, '¿Qué propuesta apoyas para el sistema de Becas y Créditos en la Educación Superior?', '', '0', 6, 0, 1, 1, 3),
(19, '¿Qué propones para el sistema de Fondos Concursables de Cultura?', '', '0', 6, 0, 1, 1, 4),
(20, '¿Qué medida propones, entre otras, para mejorar el servicio de atención primaria en la salud pública?', '', '0', 7, 0, 0, 1, 3),
(21, 'En relación a la infraestructura de salud del país. ¿Qué sugieres?', '', '0', 7, 0, 1, 1, 2),
(22, '¿Estás de acuerdo con la eliminación del 7% de las cotizaciones de salud para las personas jubiladas?', '', '0', 7, 0, 0, 1, 1),
(23, '¿Qué propuesta consideras más relevante para las personas que tienen discapacidad física? ', '', '0', 7, 0, 1, 1, 4),
(24, '¿Estás de acuerdo con el aumento en la dotación de carabineros en el país?', '', '0', 8, 0, 0, 1, 2),
(25, '¿Con qué propuesta estás más de acuerdo en materia de viviendas sociales?', '', '0', 9, 0, 1, 1, 1),
(26, '¿Estás de acuerdo con la construcción del puente sobre el canal de Chacao?', '', '0', 5, 0, 0, 1, 4),
(27, '¿Estás de acuerdo con el indulto presidencial?', '', '0', 1, 1, 1, 1, 3),
(28, '¿Cómo contribuirías a asegurar la participación laboral femenina?', '', '0', 2, 1, 1, 1, 6),
(29, '¿Qué harías para regular el financiamiento de las campañas políticas?', '', '0', 4, 1, 0, 1, 5),
(30, '¿Estás de acuerdo con la legalización de la marihuana?', '', '0', 5, 1, 0, 1, 1),
(31, '¿Qué propones para la situación limítrofe con Bolivia, en torno a una salida al mar?', '', '0', 5, 1, 1, 1, 2),
(32, '¿Cuál de estas alternativas refleja tus ideas para descentralizar las tareas en el país?', '', '0', 5, 1, 1, 1, 3),
(33, '¿Qué  sugieres para eliminar la “puerta giratoria” de la delincuencia?', '', '0', 8, 1, 1, 1, 1),
(34, '¿Qué medida propones para el impuesto a los libros?', '', '0', 6, 1, 0, 1, 1),
(35, '¿Qué medidas tomarías respecto a la administración de la educación pública de nuestro país?', '', '0', 6, 1, 1, 1, 2),
(36, '¿cual es tu fruta favorita???', '', '0', 5, 1, 1, 1, 0),
(37, '¿Cual es tu color favorito?', 'el color es la forma como repesentamos la frecuencia de la onda de luz reflejada sobre una superficie', 'Color favorito', 1, 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_results`
--

CREATE TABLE IF NOT EXISTS `mn_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `result` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Volcar la base de datos para la tabla `mn_results`
--

INSERT INTO `mn_results` (`id`, `person_id`, `candidate_id`, `result`) VALUES
(1, 1, 1, 6.25),
(2, 2, 1, 6.25),
(3, 3, 1, 6.25),
(4, 4, 4, 6.25),
(5, 5, 1, 12.5),
(6, 6, 1, 14.583333),
(7, 7, 1, 12.5),
(8, 8, 4, 14.583333),
(9, 9, 1, 14.583333),
(10, 10, 1, 14.583333),
(11, 11, 1, 12.5),
(12, 12, 1, 12.5),
(13, 13, 1, 12.5),
(14, 14, 1, 12.5),
(15, 15, 1, 12.5),
(16, 16, 1, 12.5),
(17, 17, 1, 12.5),
(18, 18, 1, 12.5),
(19, 19, 1, 12.5),
(20, 20, 1, 12.5),
(21, 21, 1, 12.5),
(22, 22, 1, 12.5),
(23, 23, 1, 12.5),
(24, 24, 1, 6.25),
(25, 25, 1, 6.25),
(26, 26, 1, 6.25),
(27, 27, 1, 6.25),
(28, 28, 1, 6.25),
(29, 29, 1, 6.25),
(30, 30, 1, 6.25),
(31, 31, 1, 6.25),
(32, 32, 1, 6.25),
(33, 33, 4, 0),
(34, 34, 1, 6.25),
(35, 35, 1, 6.25),
(36, 0, 1, 6.25),
(37, 36, 1, 6.25),
(38, 37, 1, 6.25),
(39, 38, 3, 2.083333),
(40, 39, 4, 0),
(41, 40, 4, 0),
(42, 41, 4, 0),
(43, 42, 4, 0),
(44, 43, 4, 0),
(45, 44, 1, 0),
(46, 45, 4, 0),
(47, 46, 4, 0),
(48, 47, 4, 0),
(49, 48, 4, 0),
(50, 49, 4, 0),
(51, 50, 4, 0),
(52, 51, 4, 0),
(53, 52, 4, 6.25),
(54, 53, 12, 0),
(55, 1, 1, 77.083333),
(56, 2, 1, 31.25),
(57, 3, 2, 54.166667);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_result_details`
--

CREATE TABLE IF NOT EXISTS `mn_result_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `result_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `result` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=457 ;

--
-- Volcar la base de datos para la tabla `mn_result_details`
--

INSERT INTO `mn_result_details` (`id`, `result_id`, `category_id`, `result`) VALUES
(1, 1, 1, 50),
(2, 1, 2, 0),
(3, 1, 4, 0),
(4, 1, 5, 0),
(5, 1, 6, 0),
(6, 1, 7, 0),
(7, 1, 8, 0),
(8, 1, 9, 0),
(9, 2, 1, 50),
(10, 2, 2, 0),
(11, 2, 4, 0),
(12, 2, 5, 0),
(13, 2, 6, 0),
(14, 2, 7, 0),
(15, 2, 8, 0),
(16, 2, 9, 0),
(17, 3, 1, 50),
(18, 3, 2, 0),
(19, 3, 4, 0),
(20, 3, 5, 0),
(21, 3, 6, 0),
(22, 3, 7, 0),
(23, 3, 8, 0),
(24, 3, 9, 0),
(25, 4, 1, 50),
(26, 4, 2, 0),
(27, 4, 4, 0),
(28, 4, 6, 0),
(29, 4, 7, 0),
(30, 4, 8, 0),
(31, 4, 9, 0),
(32, 4, 5, 0),
(33, 5, 1, 100),
(34, 5, 2, 0),
(35, 5, 4, 0),
(36, 5, 6, 0),
(37, 5, 7, 0),
(38, 5, 8, 0),
(39, 5, 9, 0),
(40, 5, 5, 0),
(41, 6, 1, 100),
(42, 6, 2, 16.666667),
(43, 6, 4, 0),
(44, 6, 6, 0),
(45, 6, 7, 0),
(46, 6, 8, 0),
(47, 6, 9, 0),
(48, 6, 5, 0),
(49, 7, 1, 100),
(50, 7, 2, 0),
(51, 7, 4, 0),
(52, 7, 6, 0),
(53, 7, 7, 0),
(54, 7, 8, 0),
(55, 7, 9, 0),
(56, 7, 5, 0),
(57, 8, 1, 100),
(58, 8, 2, 16.666667),
(59, 8, 4, 0),
(60, 8, 6, 0),
(61, 8, 7, 0),
(62, 8, 8, 0),
(63, 8, 9, 0),
(64, 8, 5, 0),
(65, 9, 1, 100),
(66, 9, 2, 16.666667),
(67, 9, 4, 0),
(68, 9, 6, 0),
(69, 9, 7, 0),
(70, 9, 8, 0),
(71, 9, 9, 0),
(72, 9, 5, 0),
(73, 10, 1, 100),
(74, 10, 2, 16.666667),
(75, 10, 4, 0),
(76, 10, 6, 0),
(77, 10, 7, 0),
(78, 10, 8, 0),
(79, 10, 9, 0),
(80, 10, 5, 0),
(81, 11, 1, 100),
(82, 11, 2, 0),
(83, 11, 4, 0),
(84, 11, 6, 0),
(85, 11, 7, 0),
(86, 11, 8, 0),
(87, 11, 9, 0),
(88, 11, 5, 0),
(89, 12, 1, 100),
(90, 12, 2, 0),
(91, 12, 4, 0),
(92, 12, 6, 0),
(93, 12, 7, 0),
(94, 12, 8, 0),
(95, 12, 9, 0),
(96, 12, 5, 0),
(97, 13, 1, 100),
(98, 13, 2, 0),
(99, 13, 4, 0),
(100, 13, 6, 0),
(101, 13, 7, 0),
(102, 13, 8, 0),
(103, 13, 9, 0),
(104, 13, 5, 0),
(105, 14, 1, 100),
(106, 14, 2, 0),
(107, 14, 4, 0),
(108, 14, 6, 0),
(109, 14, 7, 0),
(110, 14, 8, 0),
(111, 14, 9, 0),
(112, 14, 5, 0),
(113, 15, 1, 100),
(114, 15, 2, 0),
(115, 15, 4, 0),
(116, 15, 6, 0),
(117, 15, 7, 0),
(118, 15, 8, 0),
(119, 15, 9, 0),
(120, 15, 5, 0),
(121, 16, 1, 100),
(122, 16, 2, 0),
(123, 16, 4, 0),
(124, 16, 6, 0),
(125, 16, 7, 0),
(126, 16, 8, 0),
(127, 16, 9, 0),
(128, 16, 5, 0),
(129, 17, 1, 100),
(130, 17, 2, 0),
(131, 17, 4, 0),
(132, 17, 6, 0),
(133, 17, 7, 0),
(134, 17, 8, 0),
(135, 17, 9, 0),
(136, 17, 5, 0),
(137, 18, 1, 100),
(138, 18, 2, 0),
(139, 18, 4, 0),
(140, 18, 6, 0),
(141, 18, 7, 0),
(142, 18, 8, 0),
(143, 18, 9, 0),
(144, 18, 5, 0),
(145, 19, 1, 100),
(146, 19, 2, 0),
(147, 19, 4, 0),
(148, 19, 6, 0),
(149, 19, 7, 0),
(150, 19, 8, 0),
(151, 19, 9, 0),
(152, 19, 5, 0),
(153, 20, 1, 100),
(154, 20, 2, 0),
(155, 20, 4, 0),
(156, 20, 6, 0),
(157, 20, 7, 0),
(158, 20, 8, 0),
(159, 20, 9, 0),
(160, 20, 5, 0),
(161, 21, 1, 100),
(162, 21, 2, 0),
(163, 21, 4, 0),
(164, 21, 6, 0),
(165, 21, 7, 0),
(166, 21, 8, 0),
(167, 21, 9, 0),
(168, 21, 5, 0),
(169, 22, 1, 100),
(170, 22, 2, 0),
(171, 22, 4, 0),
(172, 22, 6, 0),
(173, 22, 7, 0),
(174, 22, 8, 0),
(175, 22, 9, 0),
(176, 22, 5, 0),
(177, 23, 1, 100),
(178, 23, 2, 0),
(179, 23, 4, 0),
(180, 23, 6, 0),
(181, 23, 7, 0),
(182, 23, 8, 0),
(183, 23, 9, 0),
(184, 23, 5, 0),
(185, 24, 1, 50),
(186, 24, 2, 0),
(187, 24, 4, 0),
(188, 24, 6, 0),
(189, 24, 7, 0),
(190, 24, 8, 0),
(191, 24, 9, 0),
(192, 24, 5, 0),
(193, 25, 1, 50),
(194, 25, 2, 0),
(195, 25, 4, 0),
(196, 25, 6, 0),
(197, 25, 7, 0),
(198, 25, 8, 0),
(199, 25, 9, 0),
(200, 25, 5, 0),
(201, 26, 1, 50),
(202, 26, 2, 0),
(203, 26, 4, 0),
(204, 26, 6, 0),
(205, 26, 7, 0),
(206, 26, 8, 0),
(207, 26, 9, 0),
(208, 26, 5, 0),
(209, 27, 1, 50),
(210, 27, 2, 0),
(211, 27, 4, 0),
(212, 27, 6, 0),
(213, 27, 7, 0),
(214, 27, 8, 0),
(215, 27, 9, 0),
(216, 27, 5, 0),
(217, 28, 1, 50),
(218, 28, 2, 0),
(219, 28, 4, 0),
(220, 28, 6, 0),
(221, 28, 7, 0),
(222, 28, 8, 0),
(223, 28, 9, 0),
(224, 28, 5, 0),
(225, 29, 1, 50),
(226, 29, 2, 0),
(227, 29, 4, 0),
(228, 29, 6, 0),
(229, 29, 7, 0),
(230, 29, 8, 0),
(231, 29, 9, 0),
(232, 29, 5, 0),
(233, 30, 1, 50),
(234, 30, 2, 0),
(235, 30, 4, 0),
(236, 30, 6, 0),
(237, 30, 7, 0),
(238, 30, 8, 0),
(239, 30, 9, 0),
(240, 30, 5, 0),
(241, 31, 1, 50),
(242, 31, 2, 0),
(243, 31, 4, 0),
(244, 31, 6, 0),
(245, 31, 7, 0),
(246, 31, 8, 0),
(247, 31, 9, 0),
(248, 31, 5, 0),
(249, 32, 1, 50),
(250, 32, 2, 0),
(251, 32, 4, 0),
(252, 32, 6, 0),
(253, 32, 7, 0),
(254, 32, 8, 0),
(255, 32, 9, 0),
(256, 32, 5, 0),
(257, 33, 1, 0),
(258, 33, 2, 0),
(259, 33, 4, 0),
(260, 33, 6, 0),
(261, 33, 7, 0),
(262, 33, 8, 0),
(263, 33, 9, 0),
(264, 33, 5, 0),
(265, 34, 1, 50),
(266, 34, 2, 0),
(267, 34, 4, 0),
(268, 34, 6, 0),
(269, 34, 7, 0),
(270, 34, 8, 0),
(271, 34, 9, 0),
(272, 34, 5, 0),
(273, 35, 1, 50),
(274, 35, 2, 0),
(275, 35, 4, 0),
(276, 35, 6, 0),
(277, 35, 7, 0),
(278, 35, 8, 0),
(279, 35, 9, 0),
(280, 35, 5, 0),
(281, 36, 1, 50),
(282, 36, 2, 0),
(283, 36, 4, 0),
(284, 36, 6, 0),
(285, 36, 7, 0),
(286, 36, 8, 0),
(287, 36, 9, 0),
(288, 36, 5, 0),
(289, 37, 1, 50),
(290, 37, 2, 0),
(291, 37, 4, 0),
(292, 37, 6, 0),
(293, 37, 7, 0),
(294, 37, 8, 0),
(295, 37, 9, 0),
(296, 37, 5, 0),
(297, 38, 1, 50),
(298, 38, 2, 0),
(299, 38, 4, 0),
(300, 38, 6, 0),
(301, 38, 7, 0),
(302, 38, 8, 0),
(303, 38, 9, 0),
(304, 38, 5, 0),
(305, 39, 1, 0),
(306, 39, 2, 16.666667),
(307, 39, 4, 0),
(308, 39, 6, 0),
(309, 39, 7, 0),
(310, 39, 8, 0),
(311, 39, 9, 0),
(312, 39, 5, 0),
(313, 40, 1, 0),
(314, 40, 2, 0),
(315, 40, 4, 0),
(316, 40, 6, 0),
(317, 40, 7, 0),
(318, 40, 8, 0),
(319, 40, 9, 0),
(320, 40, 5, 0),
(321, 41, 1, 0),
(322, 41, 2, 0),
(323, 41, 4, 0),
(324, 41, 6, 0),
(325, 41, 7, 0),
(326, 41, 8, 0),
(327, 41, 9, 0),
(328, 41, 5, 0),
(329, 42, 1, 0),
(330, 42, 2, 0),
(331, 42, 4, 0),
(332, 42, 6, 0),
(333, 42, 7, 0),
(334, 42, 8, 0),
(335, 42, 9, 0),
(336, 42, 5, 0),
(337, 43, 1, 0),
(338, 43, 2, 0),
(339, 43, 4, 0),
(340, 43, 6, 0),
(341, 43, 7, 0),
(342, 43, 8, 0),
(343, 43, 9, 0),
(344, 43, 5, 0),
(345, 44, 1, 0),
(346, 44, 2, 0),
(347, 44, 4, 0),
(348, 44, 6, 0),
(349, 44, 7, 0),
(350, 44, 8, 0),
(351, 44, 9, 0),
(352, 44, 5, 0),
(353, 45, 1, 0),
(354, 45, 2, 0),
(355, 45, 4, 0),
(356, 45, 6, 0),
(357, 45, 7, 0),
(358, 45, 8, 0),
(359, 45, 9, 0),
(360, 45, 5, 0),
(361, 46, 1, 0),
(362, 46, 2, 0),
(363, 46, 4, 0),
(364, 46, 6, 0),
(365, 46, 7, 0),
(366, 46, 8, 0),
(367, 46, 9, 0),
(368, 46, 5, 0),
(369, 47, 1, 0),
(370, 47, 2, 0),
(371, 47, 4, 0),
(372, 47, 6, 0),
(373, 47, 7, 0),
(374, 47, 8, 0),
(375, 47, 9, 0),
(376, 47, 5, 0),
(377, 48, 1, 0),
(378, 48, 2, 0),
(379, 48, 4, 0),
(380, 48, 6, 0),
(381, 48, 7, 0),
(382, 48, 8, 0),
(383, 48, 9, 0),
(384, 48, 5, 0),
(385, 49, 1, 0),
(386, 49, 2, 0),
(387, 49, 4, 0),
(388, 49, 6, 0),
(389, 49, 7, 0),
(390, 49, 8, 0),
(391, 49, 9, 0),
(392, 49, 5, 0),
(393, 50, 1, 0),
(394, 50, 2, 0),
(395, 50, 4, 0),
(396, 50, 6, 0),
(397, 50, 7, 0),
(398, 50, 8, 0),
(399, 50, 9, 0),
(400, 50, 5, 0),
(401, 51, 1, 0),
(402, 51, 2, 0),
(403, 51, 4, 0),
(404, 51, 6, 0),
(405, 51, 7, 0),
(406, 51, 8, 0),
(407, 51, 9, 0),
(408, 51, 5, 0),
(409, 52, 1, 0),
(410, 52, 2, 0),
(411, 52, 4, 0),
(412, 52, 6, 0),
(413, 52, 7, 0),
(414, 52, 8, 0),
(415, 52, 9, 0),
(416, 52, 5, 0),
(417, 53, 1, 50),
(418, 53, 2, 0),
(419, 53, 4, 0),
(420, 53, 6, 0),
(421, 53, 7, 0),
(422, 53, 8, 0),
(423, 53, 9, 0),
(424, 53, 5, 0),
(425, 54, 1, 0),
(426, 54, 2, 0),
(427, 54, 4, 0),
(428, 54, 6, 0),
(429, 54, 7, 0),
(430, 54, 8, 0),
(431, 54, 9, 0),
(432, 54, 5, 0),
(433, 55, 1, 66.666667),
(434, 55, 2, 83.333333),
(435, 55, 4, 100),
(436, 55, 6, 100),
(437, 55, 7, 0),
(438, 55, 8, 100),
(439, 55, 9, 100),
(440, 55, 5, 66.666667),
(441, 56, 1, 33.333333),
(442, 56, 2, 0),
(443, 56, 4, 50),
(444, 56, 6, 33.333333),
(445, 56, 7, 0),
(446, 56, 8, 0),
(447, 56, 9, 100),
(448, 56, 5, 33.333333),
(449, 57, 1, 33.333333),
(450, 57, 2, 0),
(451, 57, 4, 0),
(452, 57, 6, 100),
(453, 57, 7, 100),
(454, 57, 8, 100),
(455, 57, 9, 100),
(456, 57, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_source_of_answers`
--

CREATE TABLE IF NOT EXISTS `mn_source_of_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weight_id` int(11) NOT NULL,
  `sentence` text,
  `media_name` varchar(1024) DEFAULT NULL,
  `link` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `mn_source_of_answers`
--

INSERT INTO `mn_source_of_answers` (`id`, `weight_id`, `sentence`, `media_name`, `link`) VALUES
(1, 1, 'yo si blablablabla', 'la época', 'http://www.laepoca.cl/la-noticia-importante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_users`
--

CREATE TABLE IF NOT EXISTS `mn_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `admin` tinyint(4) NOT NULL,
  `last_login` datetime DEFAULT '0000-00-00 00:00:00',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `mn_users`
--

INSERT INTO `mn_users` (`id`, `username`, `password`, `admin`, `last_login`, `created`, `modified`) VALUES
(5, 'falvarez', '612b143c091857daec94f802223db814', 0, '2011-07-26 18:11:29', '2011-07-07 16:39:55', '2011-07-26 18:11:29'),
(3, 'admin', 'ad2af8aa45f2913c2725a583334b3da6', 1, '2011-08-01 18:10:41', '2011-07-07 16:38:00', '2011-08-01 18:10:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_weights`
--

CREATE TABLE IF NOT EXISTS `mn_weights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `weighting` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Volcar la base de datos para la tabla `mn_weights`
--

INSERT INTO `mn_weights` (`id`, `question_id`, `candidate_id`, `answer_id`, `weighting`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 2, 1),
(3, 1, 3, 3, 1),
(4, 1, 4, 1, 1),
(5, 2, 1, 4, 1),
(6, 2, 2, 5, 1),
(7, 2, 3, 4, 1),
(8, 2, 4, 5, 1),
(9, 3, 1, 8, 1),
(10, 3, 2, 6, 1),
(11, 3, 3, 7, 1),
(12, 3, 4, 7, 1),
(13, 4, 1, 11, 1),
(14, 4, 2, 9, 1),
(15, 4, 3, 11, 1),
(16, 4, 4, 10, 1),
(17, 5, 1, 14, 1),
(18, 5, 2, 15, 1),
(19, 5, 3, 16, 1),
(20, 5, 4, 16, 1),
(21, 6, 1, 19, 1),
(22, 6, 2, 19, 1),
(23, 6, 3, 19, 1),
(24, 6, 4, 19, 1),
(25, 7, 1, 23, 1),
(26, 7, 2, 24, 1),
(27, 7, 3, 23, 1),
(28, 7, 4, 23, 1),
(29, 8, 1, 27, 1),
(30, 8, 2, 25, 1),
(31, 8, 3, 26, 1),
(32, 8, 4, 26, 1),
(33, 9, 1, 12, 1),
(34, 9, 2, 13, 1),
(35, 9, 3, 13, 1),
(36, 9, 4, 12, 1),
(37, 10, 1, 17, 1),
(38, 10, 2, 18, 1),
(39, 10, 3, 18, 1),
(40, 10, 4, 18, 1),
(41, 11, 1, 28, 1),
(42, 11, 2, 29, 1),
(43, 11, 3, 29, 1),
(44, 11, 4, 29, 1),
(45, 12, 1, 31, 1),
(46, 12, 2, 30, 1),
(47, 12, 3, 30, 1),
(48, 12, 4, 31, 1),
(49, 13, 1, 32, 1),
(50, 13, 2, 35, 1),
(51, 13, 3, 34, 1),
(52, 13, 4, 33, 1),
(53, 14, 1, 36, 1),
(54, 14, 2, 38, 1),
(55, 14, 3, 37, 1),
(56, 14, 4, 36, 1),
(57, 15, 1, 39, 1),
(58, 15, 2, 41, 1),
(59, 15, 3, 40, 1),
(60, 15, 4, 40, 1),
(61, 16, 2, 44, 1),
(62, 16, 3, 43, 1),
(63, 16, 4, 42, 1),
(64, 17, 1, 45, 1),
(65, 17, 2, 46, 1),
(66, 17, 3, 46, 1),
(67, 17, 4, 46, 1),
(68, 18, 1, 48, 1),
(69, 18, 2, 51, 1),
(70, 18, 3, 50, 1),
(71, 18, 4, 49, 1),
(72, 19, 1, 52, 1),
(73, 19, 2, 53, 1),
(74, 19, 3, 52, 1),
(75, 19, 4, 53, 1),
(76, 20, 1, 55, 1),
(77, 20, 2, 54, 1),
(78, 20, 3, 54, 1),
(79, 20, 4, 54, 1),
(80, 21, 1, 56, 1),
(81, 21, 2, 58, 1),
(82, 21, 3, 56, 1),
(83, 21, 4, 57, 1),
(84, 22, 1, 59, 1),
(85, 22, 2, 60, 1),
(86, 22, 3, 60, 1),
(87, 22, 4, 60, 1),
(88, 23, 1, 61, 1),
(89, 23, 2, 63, 1),
(90, 23, 3, 62, 1),
(91, 23, 4, 62, 1),
(92, 24, 1, 65, 1),
(93, 24, 2, 64, 1),
(94, 24, 3, 64, 1),
(95, 24, 4, 64, 1),
(96, 25, 1, 66, 1),
(97, 25, 2, 68, 1),
(98, 25, 3, 67, 1),
(99, 25, 4, 68, 1),
(100, 26, 1, 69, 1),
(101, 26, 2, 70, 1),
(102, 26, 3, 70, 1),
(103, 26, 4, 70, 1),
(104, 27, 1, 72, 1),
(105, 27, 2, 73, 1),
(106, 27, 3, 71, 1),
(107, 27, 4, 72, 1),
(108, 28, 1, 74, 1),
(109, 28, 2, 77, 1),
(110, 28, 3, 76, 1),
(111, 28, 4, 75, 1),
(112, 29, 1, 78, 1),
(113, 29, 2, 78, 1),
(114, 29, 3, 78, 1),
(115, 29, 4, 79, 1),
(116, 30, 1, 80, 1),
(117, 30, 2, 81, 1),
(118, 30, 3, 81, 1),
(119, 30, 4, 82, 1),
(120, 31, 1, 84, 1),
(121, 31, 2, 83, 1),
(122, 31, 3, 85, 1),
(123, 31, 4, 84, 1),
(124, 32, 1, 86, 1),
(125, 32, 2, 87, 1),
(126, 32, 3, 89, 1),
(127, 32, 4, 88, 1),
(128, 33, 1, 90, 1),
(129, 33, 2, 93, 1),
(130, 33, 3, 92, 1),
(131, 33, 4, 91, 1),
(132, 34, 1, 94, 1),
(133, 34, 2, 94, 1),
(134, 34, 3, 96, 1),
(135, 34, 4, 95, 1),
(136, 35, 1, 97, 1),
(137, 35, 2, 99, 1),
(138, 35, 3, 98, 1),
(139, 35, 4, 97, 1),
(140, 1, 1, 2, 0.1),
(141, 36, 13, 100, 1),
(142, 36, 14, 101, 1);
