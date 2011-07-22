-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-07-2011 a las 11:50:57
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

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
(99, 'Fin administración municipal. Sistema de nuevas corporaciones de educación', 35, 1);

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
  `name` varchar(255) NOT NULL,
  `imagepath` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `mn_candidates`
--

INSERT INTO `mn_candidates` (`id`, `name`, `imagepath`) VALUES
(1, 'Jorge Arrate', 'http://www.votainteligente.cl/medianaranja/images/arrate.jpg'),
(2, 'Sebastián Piñera', 'http://www.votainteligente.cl/medianaranja/images/pinera.jpg'),
(3, 'Eduardo Frei', 'http://www.votainteligente.cl/medianaranja/images/frei.jpg'),
(4, 'Marco Enriquez-Ominami', 'http://www.votainteligente.cl/medianaranja/images/ominami.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_categories`
--

CREATE TABLE IF NOT EXISTS `mn_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `mn_categories`
--

INSERT INTO `mn_categories` (`id`, `name`, `order`) VALUES
(1, 'Temas valóricos', 1),
(2, 'Economía y trabajo', 2),
(3, 'Educación', 3),
(4, 'Sistema político', 4),
(5, 'Otros', 10),
(6, 'Educación y Cultura', 5),
(7, 'Salud', 6),
(8, 'Seguridad ciudadana', 7),
(9, 'Vivienda', 8),
(10, 'Energías', 9);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `mn_people`
--

INSERT INTO `mn_people` (`id`, `idfacebook`, `session_key`, `candidate_id`, `date`, `confirmsCandidate`) VALUES
(10, '560973905', '', 1, '2011-07-22 10:59:24', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

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
(21, 1, 11, 0.1, '2011-07-22 10:59:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_questions`
--

CREATE TABLE IF NOT EXISTS `mn_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sour` tinyint(1) NOT NULL,
  `public` tinyint(1) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Volcar la base de datos para la tabla `mn_questions`
--

INSERT INTO `mn_questions` (`id`, `question`, `category_id`, `sour`, `public`, `order`) VALUES
(1, '¿Estas de acuerdo con legalizar el aborto?', 1, 1, 1, 1),
(2, '¿Estás de acuerdo con legalizar el matrimonio homosexual?', 1, 1, 0, 2),
(3, '¿Aprobaría la creación de una AFP Estatal?', 2, 1, 1, 8),
(4, '¿Estás de acuerdo con privatizar Codelco?', 2, 0, 1, 10),
(5, '¿Estás de acuerdo con la flexibilidad laboral?', 2, 1, 0, 9),
(6, '¿Cómo debiera ser el sistema de inscripción electoral en Chile?', 4, 1, 0, 4),
(7, '¿Estás de acuerdo con la inclusión en el sistema electoral de los chilenos residentes en países extranjeros?', 4, 0, 1, 3),
(8, '¿Qué harías con el sistema binominal?', 4, 0, 1, 2),
(9, '¿Apoyas la construcción de las represas hidroeléctricas en Aysén?', 10, 1, 0, 2),
(10, '¿Apoyas la utilización de energía nuclear como una de las fuentes de abastecimiento energético para Chile?', 10, 1, 0, 1),
(11, '¿Qué harías con el impuesto específico a los combustibles?', 2, 0, 0, 7),
(12, '¿Que harías con el valor del IVA?', 2, 0, 0, 1),
(13, '¿Con qué medidas estás más de acuerdo para combatir el desempleo?', 2, 0, 0, 2),
(14, '¿Qué propones para fortalecer las PYMES?', 2, 0, 1, 3),
(15, '¿Qué medida sugieres para fomentar la agricultura?', 2, 0, 1, 4),
(16, '¿Con cuál de estas medidas estás más de acuerdo en base a la regla de superávit fiscal?', 2, 0, 1, 5),
(17, 'De acuerdo al rol que cumple actualmente el Estado en Chile. ¿Qué propones?', 4, 0, 0, 1),
(18, '¿Qué propuesta apoyas para el sistema de Becas y Créditos en la Educación Superior?', 6, 0, 1, 3),
(19, '¿Qué propones para el sistema de Fondos Concursables de Cultura?', 6, 0, 1, 4),
(20, '¿Qué medida propones, entre otras, para mejorar el servicio de atención primaria en la salud pública?', 7, 0, 0, 3),
(21, 'En relación a la infraestructura de salud del país. ¿Qué sugieres?', 7, 0, 1, 2),
(22, '¿Estás de acuerdo con la eliminación del 7% de las cotizaciones de salud para las personas jubiladas?', 7, 0, 0, 1),
(23, '¿Qué propuesta consideras más relevante para las personas que tienen discapacidad física? ', 7, 0, 1, 4),
(24, '¿Estás de acuerdo con el aumento en la dotación de carabineros en el país?', 8, 0, 0, 2),
(25, '¿Con qué propuesta estás más de acuerdo en materia de viviendas sociales?', 9, 0, 1, 1),
(26, '¿Estás de acuerdo con la construcción del puente sobre el canal de Chacao?', 5, 0, 0, 4),
(27, '¿Estás de acuerdo con el indulto presidencial?', 1, 1, 1, 3),
(28, '¿Cómo contribuirías a asegurar la participación laboral femenina?', 2, 1, 1, 6),
(29, '¿Qué harías para regular el financiamiento de las campañas políticas?', 4, 1, 0, 5),
(30, '¿Estás de acuerdo con la legalización de la marihuana?', 5, 1, 0, 1),
(31, '¿Qué propones para la situación limítrofe con Bolivia, en torno a una salida al mar?', 5, 1, 1, 2),
(32, '¿Cuál de estas alternativas refleja tus ideas para descentralizar las tareas en el país?', 5, 1, 1, 3),
(33, '¿Qué  sugieres para eliminar la “puerta giratoria” de la delincuencia?', 8, 1, 1, 1),
(34, '¿Qué medida propones para el impuesto a los libros?', 6, 1, 0, 1),
(35, '¿Qué medidas tomarías respecto a la administración de la educación pública de nuestro país?', 6, 1, 1, 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

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
(10, 10, 1, 14.583333);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

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
(80, 10, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mn_users`
--

CREATE TABLE IF NOT EXISTS `mn_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `last_login` datetime DEFAULT '0000-00-00 00:00:00',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `mn_users`
--

INSERT INTO `mn_users` (`id`, `username`, `password`, `last_login`, `created`, `modified`) VALUES
(5, 'falvarez', '612b143c091857daec94f802223db814', '2011-07-07 17:17:02', '2011-07-07 16:39:55', '2011-07-07 17:17:03'),
(3, 'admin', 'ad2af8aa45f2913c2725a583334b3da6', '2011-07-20 18:51:31', '2011-07-07 16:38:00', '2011-07-20 18:51:31');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

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
(140, 1, 1, 2, 0.1);
