-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-02-2023 a las 23:38:53
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
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
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
  `observaciones_usr` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observaciones_tis` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `realizo_mantenimiento` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `solucionado` int(11) NOT NULL,
  `hardware` int(1) DEFAULT NULL,
  `software` int(1) DEFAULT NULL,
  `otros` int(1) DEFAULT NULL,
  `consecutivo_dia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `folio`, `fecha`, `hora`, `datos_pc`, `datos_usr`, `internet`, `inst_periferico`, `limp_equipo`, `tec_mouse`, `falla_monitor`, `otra1`, `otra1_desc`, `act_office`, `activar_so`, `actualizar_sw`, `actualizar_sw2`, `formateo_completo`, `limpieza_virus`, `instalar_sw`, `otra_sw`, `otra_sw_desc`, `escanear`, `printcolor`, `rw_cd`, `web`, `otra2`, `otra2_desc`, `observaciones_usr`, `observaciones_tis`, `realizo_mantenimiento`, `solucionado`, `hardware`, `software`, `otros`, `consecutivo_dia`) VALUES
(1, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 0, 0, 0, 0, 'XXX', 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 'dsdff', NULL, NULL, 0, NULL, NULL, NULL, 0),
(2, '5', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 1, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dsdff', NULL, NULL, 0, NULL, NULL, NULL, 0),
(3, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 1, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dsdff', NULL, NULL, 0, NULL, NULL, NULL, 0),
(4, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL, 0),
(5, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL, 0),
(6, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL, 0),
(7, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL, 0),
(8, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL, 0),
(9, '41', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL, 0),
(10, 'aopck0llm', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL, 0),
(11, 'ssobtr5c6', '2023-01-27', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL, 0),
(12, 'elecugsqn', '2023-01-27', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(13, '5ey1dz6qm', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(14, '36zsogyqw', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(15, '9t7d0b5fn', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(16, 'h4dngmzvn', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(17, 'dkj6yesln', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(18, 'hgujzxil2', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(19, 'fsgy581ld', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(20, 'zxquv0xsx', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(21, '07si76eg1', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(22, '9tzuzdetj', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(23, 'bp5iugbi8', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(24, 'a4d2kl131', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(25, '4ccfy2yq5', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(26, 'n25045cld', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(27, 'zhlfz3ntc', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(28, '33k2i9xtc', '2023-02-06', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'Solo eso', NULL, 'I.C. Ana Elisa Barba Pinedo', 2, 1, NULL, NULL, 0),
(29, 'z3lz18f8y', '2023-02-06', '00:00:00', '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(30, 'cf3qgcd9s', '2023-02-06', '18:34:19', 'MAC', 'Jesus R Date', 1, 1, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'NA', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, NULL, 1, 0),
(31, '3u5htntg4', '2023-02-08', '14:53:55', '', '', 0, 0, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL, 0),
(32, '5yxyq8cqu', '2023-02-09', '13:12:25', 'Dell', 'Ana', 1, 0, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 1, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(33, 'prya8wv19', '2023-02-10', '11:17:41', 'HP', 'Ma. de Lourdes Rodarte Díaz', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 1, 'No puedo quitar la contraseña de inicio y no me acuerdo', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 1, 0, 1, 0, 0),
(34, 'l6a267udj', '2023-02-10', '11:18:29', 'HP', 'Ma. del Refugio Robles Zamarripa', 0, 0, 0, 0, 0, 0, '0', 0, 0, 1, 'Adobe Reader', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'Convertir archivo pdf a doc', 'me urge', NULL, 'I.C. Ana Elisa Barba Pinedo', 2, 0, 1, 1, 0),
(35, '347bof3ij', '2023-02-13', '14:21:20', 'DELL', 'Griselda Galván', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 1, 0, 1, 0, '0', 'Urgente para transparencia', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 1, 0),
(36, 'n00dsgdnx', '2023-02-13', '15:17:18', 'Ensamblada', 'Dinorah', 0, 0, 0, 0, 0, 1, 'no sirve la cámara', 0, 0, 0, '0', 0, 0, 1, 0, '0', 0, 0, 0, 1, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(37, '2oplsqqqf', '2023-02-14', '12:02:25', 'HP', 'Irma Elizabeth González Lira', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 1, 'No puedo sacar reportes del sisema de asistencias', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 0, 0),
(38, 'y2ig2n7gv', '2023-02-14', '12:03:19', 'Dell', 'Verónica Acuña González', 1, 1, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 1, 0, 1, 1, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(39, 'wdc43t84k', '2023-02-15', '08:35:30', 'HP', 'Irma Elizabeth González Lira', 1, 1, 0, 0, 0, 1, 'no funciona el usb', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(40, 'xqqv5973b', '2023-02-15', '08:37:58', 'Dell', 'Jazmin Sepúlveda Álvarez', 0, 0, 0, 0, 0, 0, '0', 1, 1, 0, '0', 0, 0, 0, 0, '0', 1, 0, 0, 0, 1, '', 'No puedo hacer nada', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 1, 0),
(41, 'bw5m14c39', '2023-02-15', '09:06:42', 'Lenovo', 'Sandra Valdovinos', 0, 0, 0, 0, 0, 1, 'Cable de HDMI', 0, 0, 1, 'Adobe Reader', 0, 0, 0, 1, 'Actualizar antivirus', 0, 0, 0, 0, 1, 'Subir al drive el archivo', 'No puedo hacer nada', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(42, 'wix1zb3y4', '2023-02-15', '10:44:11', 'MAC', 'Rodolfo Leaños', 0, 0, 0, 0, 0, 1, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(43, 'nor0s44cl', '2023-02-15', '10:46:39', 'Lenovo', 'Chuchita', 0, 0, 0, 0, 0, 1, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(44, 't182fdfot', '2023-02-15', '10:47:04', 'Vaio', 'Chonita', 0, 0, 0, 0, 0, 1, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(45, '890g0xlov', '2023-02-15', '10:55:38', 'mac', 'Rodo', 0, 0, 0, 0, 1, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(46, 'aas298ueh', '2023-02-15', '10:59:17', 'HP', 'Sandra Valdovinos', 0, 0, 0, 0, 0, 1, 'Cable de HDMI', 0, 0, 1, 'Antivirus', 0, 0, 0, 1, 'No puedo sacar reportes del sisema de CI', 0, 0, 0, 1, 1, 'Subir al drive el archivo', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(47, 'xjz0bgatb', '2023-02-15', '15:14:19', 'VAIO', 'Paquito', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 0, 0),
(48, 'te1z6j54x', '2023-02-16', '11:36:59', 'MAC', 'Rodolfo', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 1, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 1, 0),
(49, 'uh9qldo1q', '2023-02-16', '11:45:41', '1', 'yo', 0, 0, 0, 0, 0, 1, '45', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, '25', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 1, 0),
(50, 'mts1p68gq', '2023-02-16', '11:58:00', 'mac', 'uriel', 0, 0, 0, 0, 0, 1, '1', 0, 0, 1, '3', 0, 0, 0, 1, '34', 0, 0, 0, 0, 1, '3', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(51, 'dzph2o2p3', '2023-02-16', '12:06:44', 'HP', 'Gustavo', 0, 0, 0, 0, 0, 1, 'h', 0, 0, 1, 'h', 0, 0, 0, 1, 's', 0, 0, 0, 0, 1, 'f', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(52, 'bksvna442', '2023-02-16', '12:19:09', 'MAC', 'Paulina González', 0, 0, 0, 0, 0, 1, 'r', 0, 0, 1, 'r', 0, 0, 0, 1, 't', 0, 0, 0, 0, 1, 'r', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(53, 'vjvm83o2n', '2023-02-17', '11:12:05', 'Acer', 'Mariana', 0, 0, 0, 0, 1, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(54, 's5bn500k2', '2023-02-17', '11:12:50', 'Asus', 'Andrea', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 1, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 1, 0),
(55, 'zqxu3nch8', '2023-02-21', '10:58:25', 'HP', 'Magdalena', 0, 1, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 1, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 1, 0),
(56, 'jfj38pwmc', '2023-02-21', '15:06:38', 'HP', 'Magdalena Molina', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(57, '1xdalc50q', '2023-02-22', '11:32:42', 'HP', 'Jesusrlv 9', 1, 1, 1, 0, 0, 0, '0', 0, 0, 0, '0', 1, 1, 0, 0, '0', 0, 0, 1, 1, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(58, 'iqoi478f7', '2023-02-22', '11:35:40', 'HP 99', 'Jesusrlv 99', 1, 1, 1, 1, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'gg', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(59, 'g6yy1qepr', '2023-02-22', '13:13:43', 'HP Laser Jet', 'Jesusrlv', 0, 1, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 1, 0, 0, '0', 0, 0, 0, 1, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, 0),
(60, 'wfu0ybjob', '2023-02-22', '13:34:48', 'MACBook', 'Anny', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'x', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(61, '6vqqkkons', '2023-02-22', '14:03:49', 'HP Laser Jet', 'Jesusrlv', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 0),
(62, 'r0il2y6yu', '2023-02-22', '14:44:41', 'HP Laser Jet', 'Jesusrlv 9', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'X', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, NULL),
(63, '0slc16awq', '2023-02-22', '14:45:10', 'HP Laser Jet', 'Jesusrlv 9', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, NULL),
(64, 'ceaudalxf', '2023-02-22', '15:11:41', 'HP', 'Jesusrlv 9', 0, 0, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dddd', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 0, NULL),
(65, 's2m7r2u7h', '2023-02-22', '15:11:42', 'HP', 'Jesusrlv 9', 0, 0, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dddd', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 0, NULL),
(66, '4m3cm5n7k', '2023-02-22', '15:11:54', 'MACBook', 'Anny', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'd', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, NULL),
(67, 'aym3ue48n', '2023-02-22', '15:13:14', 'MACBook', 'Anny', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'd', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, NULL),
(68, '5z5m2zq57', '2023-02-22', '15:16:34', 'DELL', 'Anny Barba', 0, 0, 0, 0, 0, 0, '0', 0, 1, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'Quiero un aumento', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 0, NULL),
(69, 'qeicks217', '2023-02-22', '15:16:36', 'DELL', 'Anny Barba', 0, 0, 0, 0, 0, 0, '0', 0, 1, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'Quiero un aumento', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 0, NULL),
(70, 'u3m6djpis', '2023-02-22', '16:17:56', 'HP 99', 'Anny B', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'e', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, NULL),
(71, 'so3hgeah3', '2023-02-22', '16:21:12', 'MackBook PRO', 'Ana Elisa Barba Pinedo', 1, 1, 1, 1, 1, 1, 'MackBook PRO', 1, 1, 1, 'MackBook PRO', 1, 1, 1, 1, 'MackBook PRO', 1, 1, 1, 1, 1, 'MackBook PRO', 'MackBook PRO', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1, NULL),
(72, 'e8r1o3cxx', '2023-02-22', '16:22:08', 'HP 99', 'Anny B', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'e', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, NULL),
(73, 'cl4udug9u', '2023-02-22', '16:22:25', 'HP 99', 'Anny B', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'e', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, NULL),
(74, '105bfmfaa', '2023-02-22', '16:23:04', 'MackBook PRO', 'Ana Elisa Barba Pinedo', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'MackBook PRO', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, NULL),
(75, '307mjr2q1', '2023-02-22', '16:24:20', 'HP Laser Jet', 'Jesusrlv 9', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 1, 0, '0', 'num_asignado', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 1, 1),
(76, 'fshu62byd', '2023-02-22', '16:24:36', 'DELL', 'Anny Barba', 0, 0, 0, 0, 0, 0, '0', 0, 1, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'num_asignado 2', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 0, 1),
(77, 'i9te1b0v6', '2023-02-22', '16:37:38', 'MackBook PRO', 'Ana Elisa Barba Pinedo', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'Internet', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0, 2),
(78, '1er2tzzyk', '2023-02-22', '16:37:48', 'MACBook', 'Anny B', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 1, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id` int(11) NOT NULL,
  `folio` varchar(40) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `sub_cat` int(11) NOT NULL,
  `observaciones_dti` varchar(200) NOT NULL,
  `likert` int(11) NOT NULL,
  `tipo_servicio` int(11) DEFAULT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id`, `folio`, `id_cat`, `sub_cat`, `observaciones_dti`, `likert`, `tipo_servicio`, `fecha`) VALUES
(1, 'jfj38pwmc', 1, 1, 'x', 4, NULL, '2023-02-21 16:22:13'),
(2, '1xdalc50q', 1, 1, '', 2, NULL, '2023-02-22 13:15:18'),
(3, 'jfj38pwmc', 1, 1, '', 2, NULL, '2023-02-22 13:15:38'),
(4, 'jfj38pwmc', 1, 1, 'ddd', 1, NULL, '2023-02-22 13:26:23');

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
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
