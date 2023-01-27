-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2023 a las 10:05:38
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `folio` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `datos_pc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datos_usr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `internet` int(11) DEFAULT NULL,
  `inst_periferico` int(11) DEFAULT NULL,
  `limp_equipo` int(11) DEFAULT NULL,
  `tec_mouse` int(11) DEFAULT NULL,
  `falla_monitor` int(11) DEFAULT NULL,
  `otra1` int(11) DEFAULT NULL,
  `otra1_desc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `act_office` int(11) DEFAULT NULL,
  `activar_so` int(11) DEFAULT NULL,
  `actualizar_sw` int(11) DEFAULT NULL,
  `actualizar_sw2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formateo_completo` int(11) DEFAULT NULL,
  `limpieza_virus` int(11) DEFAULT NULL,
  `instalar_sw` int(11) DEFAULT NULL,
  `otra_sw` int(11) DEFAULT NULL,
  `otra_sw_desc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `escanear` int(11) DEFAULT NULL,
  `printcolor` int(11) DEFAULT NULL,
  `rw_cd` int(11) DEFAULT NULL,
  `web` int(11) DEFAULT NULL,
  `otra2` int(11) DEFAULT NULL,
  `otra2_desc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observaciones` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `realizo_mantenimiento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `solucionado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
