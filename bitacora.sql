-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 10:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitacora`
--

-- --------------------------------------------------------

--
-- Table structure for table `bitacora`
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
  `solucionado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bitacora`
--

INSERT INTO `bitacora` (`id`, `folio`, `fecha`, `hora`, `datos_pc`, `datos_usr`, `internet`, `inst_periferico`, `limp_equipo`, `tec_mouse`, `falla_monitor`, `otra1`, `otra1_desc`, `act_office`, `activar_so`, `actualizar_sw`, `actualizar_sw2`, `formateo_completo`, `limpieza_virus`, `instalar_sw`, `otra_sw`, `otra_sw_desc`, `escanear`, `printcolor`, `rw_cd`, `web`, `otra2`, `otra2_desc`, `observaciones_usr`, `observaciones_tis`, `realizo_mantenimiento`, `solucionado`) VALUES
(1, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 0, 0, 0, 0, 'XXX', 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', 'dsdff', NULL, NULL, 0),
(2, '5', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 1, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dsdff', NULL, NULL, 0),
(3, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 0, 0, 1, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'dsdff', NULL, NULL, 0),
(4, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0),
(5, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0),
(6, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0),
(7, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0),
(8, '0', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0),
(9, '41', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0),
(10, 'aopck0llm', '0000-00-00', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0),
(11, 'ssobtr5c6', '2023-01-27', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, NULL, 0),
(12, 'elecugsqn', '2023-01-27', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'ddd', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(13, '5ey1dz6qm', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(14, '36zsogyqw', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(15, '9t7d0b5fn', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(16, 'h4dngmzvn', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(17, 'dkj6yesln', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(18, 'hgujzxil2', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(19, 'fsgy581ld', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(20, 'zxquv0xsx', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(21, '07si76eg1', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(22, '9tzuzdetj', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(23, 'bp5iugbi8', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(24, 'a4d2kl131', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(25, '4ccfy2yq5', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(26, 'n25045cld', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(27, 'zhlfz3ntc', '2023-01-27', '00:00:00', 'MAC', 'Jesus', 1, 1, 0, 0, 0, 0, '', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 1, 'dddd', 'dsdsds', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(28, '33k2i9xtc', '2023-02-06', '00:00:00', 'MAC', 'Jesus R', 1, 0, 0, 1, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'Solo eso', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(29, 'z3lz18f8y', '2023-02-06', '00:00:00', '', '', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', 0, 0, 0, 0, '', 0, 0, 0, 0, 0, '', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(30, 'cf3qgcd9s', '2023-02-06', '18:34:19', 'MAC', 'Jesus R Date', 1, 1, 0, 0, 0, 0, '0', 0, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', 'NA', NULL, 'I.C. Ana Elisa Barba Pinedo', 0),
(31, '3u5htntg4', '2023-02-08', '14:53:55', '', '', 0, 0, 0, 0, 0, 0, '0', 1, 0, 0, '0', 0, 0, 0, 0, '0', 0, 0, 0, 0, 0, '0', '', NULL, 'I.C. Ana Elisa Barba Pinedo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
