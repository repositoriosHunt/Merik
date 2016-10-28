-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2016 a las 21:28:28
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `merik`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_home`
--

CREATE TABLE IF NOT EXISTS `imagenes_home` (
  `id` int(10) unsigned NOT NULL,
  `posicion` int(11) DEFAULT '0',
  `imagen` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `imagen_mobile` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `text_alt` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `titulo` varchar(400) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_home`
--

INSERT INTO `imagenes_home` (`id`, `posicion`, `imagen`, `imagen_mobile`, `text_alt`, `titulo`) VALUES
(1, 1, 'img/nino.jpg', 'img/nino-mobile.jpg', 'image01', 'Bienvenido en automático'),
(2, 2, 'img/esposa.jpg', 'img/esposa-mobile.jpg', 'image01', 'Bienvenido en automático'),
(3, 3, 'img/residencial.jpg', 'img/residencial-mobile.jpg', 'image02', 'Brindamos seguridad a lo que más quieres'),
(4, 4, 'img/residencial2.jpg', 'img/residencial2-mobile.jpg', 'image03', 'Abrimos la puerta a la comodidad de tu casa'),
(5, 5, 'img/autotransportes.jpg', 'img/autotransportes-mobile.jpg', 'image04', 'Proporcionamos seguridad en la transportación y conservación de tu carga'),
(6, 6, 'img/industrial.jpg', 'img/industrial-mobile.jpg', 'image05', 'Eficientamos la logística de carga y descarga para la nave industrial');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes_home`
--
ALTER TABLE `imagenes_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes_home`
--
ALTER TABLE `imagenes_home`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
