-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2016 a las 05:57:15
-- Versión del servidor: 5.7.11
-- Versión de PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `materiales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permanentes`
--

CREATE TABLE `permanentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `disponible_s` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permanentes`
--

INSERT INTO `permanentes` (`id`, `nombre`, `cantidad`, `disponible_s`) VALUES
(1, 'inyectadoras 40cc', 5, 5),
(2, 'batas', 5, 5),
(3, 'ds', 22, 22),
(4, 'qq', 3, 3),
(5, 'sss', 2, 2),
(6, 'qqqq', 333, 333);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `cedula` varchar(9) COLLATE utf16_unicode_ci NOT NULL,
  `nombre` varchar(14) COLLATE utf16_unicode_ci NOT NULL,
  `apellido` varchar(14) COLLATE utf16_unicode_ci NOT NULL,
  `usuario` varchar(17) COLLATE utf16_unicode_ci NOT NULL,
  `pass` varchar(70) COLLATE utf16_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `cedula`, `nombre`, `apellido`, `usuario`, `pass`, `tipo`) VALUES
(1, '22540732', 'Israel', 'Silva', 'administrador', 'e1fc1b881f7ca748bcb5e89a233a0106', 0),
(2, '25001397', 'Heidy', 'Mora', 'Morita', 'e1fc1b881f7ca748bcb5e89a233a0106', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permanentes`
--
ALTER TABLE `permanentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permanentes`
--
ALTER TABLE `permanentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
