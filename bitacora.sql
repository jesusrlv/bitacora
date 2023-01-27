-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2023 a las 19:42:04
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
  `folio` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
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

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `folio`, `fecha`, `datos_pc`, `datos_usr`, `internet`, `inst_periferico`, `limp_equipo`, `tec_mouse`, `falla_monitor`, `otra1`, `otra1_desc`, `act_office`, `activar_so`, `actualizar_sw`, `actualizar_sw2`, `formateo_completo`, `limpieza_virus`, `instalar_sw`, `otra_sw`, `otra_sw_desc`, `escanear`, `printcolor`, `rw_cd`, `web`, `otra2`, `otra2_desc`, `observaciones`, `realizo_mantenimiento`, `solucionado`) VALUES
(1, '0', '0000-00-00 00:00:00', 'MAC', 'Jesus', 0, 0, 0, 0, 0, 0, 'XXX', 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 'dsdff', NULL, 0),
(2, '5', '0000-00-00 00:00:00', 'MAC', 'Jesus', 0, 0, 1, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dsdff', NULL, 0),
(3, '0', '0000-00-00 00:00:00', 'MAC', 'Jesus', 0, 0, 1, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dsdff', NULL, 0),
(4, '0', '0000-00-00 00:00:00', 'MAC', 'Jesus', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 0),
(5, '0', '0000-00-00 00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 0),
(6, '0', '0000-00-00 00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 0),
(7, '0', '0000-00-00 00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 0),
(8, '0', '0000-00-00 00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 0),
(9, '41', '0000-00-00 00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 0),
(10, 'aopck0llm', '0000-00-00 00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 0),
(11, 'ssobtr5c6', '2023-01-27 03:23:56', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 0),
(12, 'elecugsqn', '2023-01-27 03:25:36', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', 'I.C. Ana Elisa Barba Pinedo', 0),
(13, '5ey1dz6qm', '2023-01-27 03:25:55', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(14, '36zsogyqw', '2023-01-27 03:26:34', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(15, '9t7d0b5fn', '2023-01-27 03:28:51', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(16, 'h4dngmzvn', '2023-01-27 03:29:13', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(17, 'dkj6yesln', '2023-01-27 03:29:39', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(18, 'hgujzxil2', '2023-01-27 03:30:32', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(19, 'fsgy581ld', '2023-01-27 03:30:50', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(20, 'zxquv0xsx', '2023-01-27 03:33:26', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(21, '07si76eg1', '2023-01-27 03:33:30', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(22, '9tzuzdetj', '2023-01-27 03:34:49', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(23, 'bp5iugbi8', '2023-01-27 03:36:48', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(24, 'a4d2kl131', '2023-01-27 03:36:58', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(25, '4ccfy2yq5', '2023-01-27 03:38:43', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(26, 'n25045cld', '2023-01-27 03:39:22', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(27, 'zhlfz3ntc', '2023-01-27 03:39:43', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', 'I.C. Ana Elisa Barba Pinedo', 0),
(28, 't5lrm58h2', '2023-01-27 12:34:53', 'HP Laser Jet', 'Jesusrlv', 1, 0, 1, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 1, 0, '0', 0, 0, 0, 0, 1, 'w', 'ww', 'I.C. Ana Elisa Barba Pinedo', 0),
(29, 'w2s5cdjto', '2023-01-27 12:36:08', 'HP Laser Jet', 'Jesusrlv', 1, 0, 1, 1, 0, 0, '0', 0, 0, 0, '0', 0, 0, 1, 0, '0', 0, 0, 0, 0, 1, 'w', 'ww', 'I.C. Ana Elisa Barba Pinedo', 0),
(30, 'io9qbf2vd', '2023-01-27 12:37:15', 'HP Laser Jet', 'Jesusrlv', 1, 0, 1, 1, 0, 0, '0', 0, 0, 0, '0', 0, 0, 1, 0, '0', 0, 0, 0, 0, 1, 'w', 'ww', 'I.C. Ana Elisa Barba Pinedo', 0),
(31, 'ogovhtncg', '2023-01-27 12:38:55', 'HP Laser Jet', 'Jesusrlv', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 1, 0, '0', 0, 0, 0, 1, 0, '0', 'ZX', 'I.C. Ana Elisa Barba Pinedo', 0),
(32, 'aaq3jq42c', '2023-01-27 12:41:39', 'HP Laser Jet', 'Jesusrlv 9', 1, 1, 1, 1, 1, 1, 'D', 1, 1, 1, 'D', 1, 1, 1, 1, 'D', 1, 1, 1, 1, 1, 'D', '', 'I.C. Ana Elisa Barba Pinedo', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
