-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-02-2023 a las 23:25:16
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
  `otros` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`id`, `folio`, `fecha`, `hora`, `datos_pc`, `datos_usr`, `internet`, `inst_periferico`, `limp_equipo`, `tec_mouse`, `falla_monitor`, `otra1`, `otra1_desc`, `act_office`, `activar_so`, `actualizar_sw`, `actualizar_sw2`, `formateo_completo`, `limpieza_virus`, `instalar_sw`, `otra_sw`, `otra_sw_desc`, `escanear`, `printcolor`, `rw_cd`, `web`, `otra2`, `otra2_desc`, `observaciones_usr`, `observaciones_tis`, `realizo_mantenimiento`, `solucionado`, `hardware`, `software`, `otros`) VALUES
(1, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 0, 0, 0, 0, 'XXX', 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 'dsdff', NULL, NULL, 0, NULL, NULL, NULL),
(2, '5', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 1, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dsdff', NULL, NULL, 0, NULL, NULL, NULL),
(3, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 1, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dsdff', NULL, NULL, 0, NULL, NULL, NULL),
(4, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL),
(5, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL),
(6, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL),
(7, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL),
(8, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL),
(9, '41', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL),
(10, 'aopck0llm', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL),
(11, 'ssobtr5c6', '2023-01-27', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0, NULL, NULL, NULL),
(12, 'elecugsqn', '2023-01-27', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(13, '5ey1dz6qm', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(14, '36zsogyqw', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(15, '9t7d0b5fn', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(16, 'h4dngmzvn', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(17, 'dkj6yesln', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(18, 'hgujzxil2', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(19, 'fsgy581ld', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(20, 'zxquv0xsx', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(21, '07si76eg1', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(22, '9tzuzdetj', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(23, 'bp5iugbi8', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(24, 'a4d2kl131', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(25, '4ccfy2yq5', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(26, 'n25045cld', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(27, 'zhlfz3ntc', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(28, '33k2i9xtc', '2023-02-06', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'Solo eso', NULL, 'I.C. Ana Elisa Barba Pinedo', 2, 1, NULL, NULL),
(29, 'z3lz18f8y', '2023-02-06', '00:00:00', '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(30, 'cf3qgcd9s', '2023-02-06', '18:34:19', 'MAC', 'Jesus R Date', 1, 1, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'NA', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, NULL, 1),
(31, '3u5htntg4', '2023-02-08', '14:53:55', '', '', 0, 0, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, NULL, NULL, NULL),
(32, '5yxyq8cqu', '2023-02-09', '13:12:25', 'Dell', 'Ana', 1, 0, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 1, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(33, 'prya8wv19', '2023-02-10', '11:17:41', 'HP', 'Ma. de Lourdes Rodarte Díaz', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 1, 'No puedo quitar la contraseña de inicio y no me acuerdo', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 1, 0, 1, 0),
(34, 'l6a267udj', '2023-02-10', '11:18:29', 'HP', 'Ma. del Refugio Robles Zamarripa', 0, 0, 0, 0, 0, 0, '0', 0, 0, 1, 'Adobe Reader', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'Convertir archivo pdf a doc', 'me urge', NULL, 'I.C. Ana Elisa Barba Pinedo', 2, 0, 1, 1),
(35, '347bof3ij', '2023-02-13', '14:21:20', 'DELL', 'Griselda Galván', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 1, 0, 1, 0, '0', 'Urgente para transparencia', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 1),
(36, 'n00dsgdnx', '2023-02-13', '15:17:18', 'Ensamblada', 'Dinorah', 0, 0, 0, 0, 0, 1, 'no sirve la cámara', 0, 0, 0, '0', 0, 0, 1, 0, '0', 0, 0, 0, 1, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(37, '2oplsqqqf', '2023-02-14', '12:02:25', 'HP', 'Irma Elizabeth González Lira', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 1, 'No puedo sacar reportes del sisema de asistencias', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 0),
(38, 'y2ig2n7gv', '2023-02-14', '12:03:19', 'Dell', 'Verónica Acuña González', 1, 1, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 1, 0, 1, 1, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(39, 'wdc43t84k', '2023-02-15', '08:35:30', 'HP', 'Irma Elizabeth González Lira', 1, 1, 0, 0, 0, 1, 'no funciona el usb', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0),
(40, 'xqqv5973b', '2023-02-15', '08:37:58', 'Dell', 'Jazmin Sepúlveda Álvarez', 0, 0, 0, 0, 0, 0, '0', 1, 1, 0, '0', 0, 0, 0, 0, '0', 1, 0, 0, 0, 1, '', 'No puedo hacer nada', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 1, 1),
(41, 'bw5m14c39', '2023-02-15', '09:06:42', 'Lenovo', 'Sandra Valdovinos', 0, 0, 0, 0, 0, 1, 'Cable de HDMI', 0, 0, 1, 'Adobe Reader', 0, 0, 0, 1, 'Actualizar antivirus', 0, 0, 0, 0, 1, 'Subir al drive el archivo', 'No puedo hacer nada', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(42, 'wix1zb3y4', '2023-02-15', '10:44:11', 'MAC', 'Rodolfo Leaños', 0, 0, 0, 0, 0, 1, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0),
(43, 'nor0s44cl', '2023-02-15', '10:46:39', 'Lenovo', 'Chuchita', 0, 0, 0, 0, 0, 1, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0),
(44, 't182fdfot', '2023-02-15', '10:47:04', 'Vaio', 'Chonita', 0, 0, 0, 0, 0, 1, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0),
(45, '890g0xlov', '2023-02-15', '10:55:38', 'mac', 'Rodo', 0, 0, 0, 0, 1, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0),
(46, 'aas298ueh', '2023-02-15', '10:59:17', 'HP', 'Sandra Valdovinos', 0, 0, 0, 0, 0, 1, 'Cable de HDMI', 0, 0, 1, 'Antivirus', 0, 0, 0, 1, 'No puedo sacar reportes del sisema de CI', 0, 0, 0, 1, 1, 'Subir al drive el archivo', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(47, 'xjz0bgatb', '2023-02-15', '15:14:19', 'VAIO', 'Paquito', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 0),
(48, 'te1z6j54x', '2023-02-16', '11:36:59', 'MAC', 'Rodolfo', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 1, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 1),
(49, 'uh9qldo1q', '2023-02-16', '11:45:41', '1', 'yo', 0, 0, 0, 0, 0, 1, '45', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, '25', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 1),
(50, 'mts1p68gq', '2023-02-16', '11:58:00', 'mac', 'uriel', 0, 0, 0, 0, 0, 1, '1', 0, 0, 1, '3', 0, 0, 0, 1, '34', 0, 0, 0, 0, 1, '3', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(51, 'dzph2o2p3', '2023-02-16', '12:06:44', 'HP', 'Gustavo', 0, 0, 0, 0, 0, 1, 'h', 0, 0, 1, 'h', 0, 0, 0, 1, 's', 0, 0, 0, 0, 1, 'f', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(52, 'bksvna442', '2023-02-16', '12:19:09', 'MAC', 'Paulina González', 0, 0, 0, 0, 0, 1, 'r', 0, 0, 1, 'r', 0, 0, 0, 1, 't', 0, 0, 0, 0, 1, 'r', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 1, 1),
(53, 'vjvm83o2n', '2023-02-17', '11:12:05', 'Acer', 'Mariana', 0, 0, 0, 0, 1, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0),
(54, 's5bn500k2', '2023-02-17', '11:12:50', 'Asus', 'Andrea', 0, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 1, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 0, 0, 1),
(55, 'zqxu3nch8', '2023-02-21', '10:58:25', 'HP', 'Magdalena', 0, 1, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 1, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 1),
(56, 'jfj38pwmc', '2023-02-21', '15:06:38', 'HP', 'Magdalena Molina', 1, 0, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0, 1, 0, 0);

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
(1, 'jfj38pwmc', 1, 1, 'x', 4, NULL, '2023-02-21 16:22:13');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
