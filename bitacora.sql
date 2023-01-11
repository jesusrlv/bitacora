-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-01-2023 a las 23:28:59
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bitacora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `ticket` int(11) NOT NULL,
  `datos_equipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sopletear_pc` int(11) DEFAULT NULL,
  `sopletear_fpoder` int(11) DEFAULT NULL,
  `limpiar_gab` int(11) DEFAULT NULL,
  `sopletear_tec_mouse` int(11) DEFAULT NULL,
  `limpiar_teclado_mouse` int(11) DEFAULT NULL,
  `limpiar_pantalla` int(11) DEFAULT NULL,
  `limpiar_comp_monitor` int(11) DEFAULT NULL,
  `otra` int(11) DEFAULT NULL,
  `otra_descripcion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activacion_office` int(11) DEFAULT NULL,
  `activar_so` int(11) DEFAULT NULL,
  `activar_software` int(11) DEFAULT NULL,
  `activar_software2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formateo_completo` int(11) DEFAULT NULL,
  `limpieza_virus` int(11) DEFAULT NULL,
  `otra3` int(11) DEFAULT NULL,
  `otra4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observaciones` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `realizo_mantenimiento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `solicita` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `solucionado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `fecha`, `ticket`, `datos_equipo`, `sopletear_pc`, `sopletear_fpoder`, `limpiar_gab`, `sopletear_tec_mouse`, `limpiar_teclado_mouse`, `limpiar_pantalla`, `limpiar_comp_monitor`, `otra`, `otra_descripcion`, `activacion_office`, `activar_so`, `activar_software`, `activar_software2`, `formateo_completo`, `limpieza_virus`, `otra3`, `otra4`, `observaciones`, `realizo_mantenimiento`, `solicita`, `solucionado`) VALUES
(1, '2023-01-11 15:32:07', 0, 'HP Laser Jet', 1, 1, 1, 1, 1, 1, 1, 1, 'Prueba', 1, 1, 1, 'x', 1, 1, 1, 'x', 'Prueba', 'I.C. Ana Elisa Barba Pinedo', 'TI', 0),
(2, '2023-01-11 15:32:39', 0, 'HP Laser Jet', 1, 1, 1, 1, 1, 1, 1, 1, 'Prueba', 1, 1, 1, 'x', 1, 1, 1, 'x', 'Prueba', 'I.C. Ana Elisa Barba Pinedo', 'TI', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
