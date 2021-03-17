-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2018 a las 16:18:44
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_evento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mis_eventos`
--

CREATE TABLE IF NOT EXISTS `mis_eventos` (
`id` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `inicio` datetime DEFAULT NULL,
  `fin` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mis_eventos`
--

INSERT INTO `mis_eventos` (`id`, `titulo`, `color`, `inicio`, `fin`) VALUES
(1, 'Reunion Colegio', '#0071c5', '2018-04-23 09:00:00', '2018-04-23 11:00:00'),
(2, 'Gimnasio Gym', '#40e0d0', '2018-04-13 14:00:00', '2018-04-13 17:00:00'),
(3, 'Reunion accionistas', '#FFD700', '2018-04-23 08:00:00', '2018-04-23 09:00:00'),
(4, 'Reunion acreedores', '#40e0d0', '2018-04-23 10:00:00', '2018-04-23 11:00:00'),
(5, 'Reunion con el Banco', '#0071c5', '2018-04-23 11:00:00', '2018-04-13 12:00:00'),
(6, 'Reunion con amigos', '#FFD700', '2018-04-23 13:00:00', '2018-04-23 14:00:00'),
(7, 'Reunion de trabajo', '#0071c5', '2018-04-23 14:00:00', '2018-04-23 15:00:00'),
(8, 'Reunion semanal', '#FFD700', '2018-04-23 16:00:00', '2018-04-23 17:00:00'),
(9, 'Pago de telefono', '#228B22', '2018-04-24 18:00:00', '2018-04-24 20:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mis_eventos`
--
ALTER TABLE `mis_eventos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mis_eventos`
--
ALTER TABLE `mis_eventos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
