-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2021 a las 16:38:31
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `art_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_referencia` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_nom` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_cantidad` decimal(18,2) NOT NULL,
  `art_pcosto` decimal(18,2) NOT NULL,
  `art_pventa` decimal(18,2) NOT NULL,
  `art_pventa2` decimal(18,2) NOT NULL,
  `art_pventa3` decimal(18,2) NOT NULL,
  `art_acentamiento` tinyint(1) NOT NULL,
  `art_cod` int(11) NOT NULL,
  `usu_creo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `usu_mod` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_fecha_mod` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`art_id`, `art_referencia`, `art_nom`, `art_cantidad`, `art_pcosto`, `art_pventa`, `art_pventa2`, `art_pventa3`, `art_acentamiento`, `art_cod`, `usu_creo`, `usu_fecha_creado`, `usu_mod`, `usu_fecha_mod`) VALUES
('1', 'tejas naranjas', 'tejas naranjas', '363.00', '3000.00', '4000.00', '5000.00', '6000.00', 0, 0, 'daniel parra', '2020-12-03 15:38:05', 'daniel', '15-12-2020 15:42:57'),
('105', 'sm900gris', 'cemento gris', '500.00', '8000.00', '15000.00', '17000.00', '20000.00', 0, 0, 'daniel parra', '2020-12-01 16:19:17', 'daniel parra', '03-12-2020 10:38:35'),
('11', 'm80', 'cemento blanco', '430.00', '6000.00', '7000.00', '8000.00', '9000.00', 0, 0, 'daniel parra', '2020-12-03 17:41:12', '', ''),
('20', 'empa783', 'ampaques plasticos', '428.00', '500.00', '800.00', '1000.00', '1200.00', 0, 0, 'daniel parra', '2020-12-03 15:37:26', '', ''),
('245', 'tjer564', 'tejas amarillas', '392.00', '2000.00', '4000.00', '5000.00', '6000.00', 0, 0, 'daniel', '2020-11-20 21:31:34', 'daniel parra', '03-12-2020 10:39:11'),
('4', 'pegamento x22', 'pegamento extremo', '500.00', '3500.00', '4500.00', '5500.00', '6500.00', 0, 0, 'daniel parra', '2020-12-03 17:29:59', '', ''),
('485', 'sierratx94', 'sierra de corte', '453.00', '6000.00', '4000.00', '5000.00', '6000.00', 0, 0, '', '0000-00-00 00:00:00', 'daniel parra', '03-12-2020 10:38:54'),
('5', 'pintura w32', 'pintura brillante', '470.00', '4000.00', '6000.00', '8000.00', '10000.00', 0, 0, 'daniel parra', '2020-12-03 17:30:48', '', ''),
('5151', 'paletas de colores', 'paletas de colores', '39.00', '1500.00', '2500.00', '3000.00', '3500.00', 0, 0, 'daniel', '2021-01-08 16:59:06', '', ''),
('523', 'clavosx40', 'clavo de  enchape', '478.00', '2000.00', '3000.00', '0.00', '0.00', 0, 0, '', '0000-00-00 00:00:00', 'daniel parra', '03-12-2020 10:38:26'),
('6', 'cinta65r', 'cinta industrial', '490.00', '3000.00', '4000.00', '5000.00', '6000.00', 0, 0, 'daniel parra', '2020-12-03 17:34:20', '', ''),
('7', 'x32', 'canaleta mediana', '480.00', '4500.00', '5000.00', '5500.00', '6000.00', 0, 0, 'daniel parra', '2020-12-03 17:34:55', '', ''),
('8', 'x30', 'canaleta grande', '476.00', '5000.00', '6000.00', '7000.00', '8000.00', 0, 0, 'daniel parra', '2020-12-03 17:35:25', '', ''),
('88', 'cintan54', ' cinta aislante', '448.00', '2000.00', '4000.00', '5000.00', '6000.00', 0, 0, 'daniel parra', '2020-12-03 15:35:10', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_temp`
--

CREATE TABLE `articulos_temp` (
  `art_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_referencia` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_nom` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_cantidad` float(18,2) NOT NULL,
  `art_pcosto` float(18,2) NOT NULL,
  `art_pventa` float(18,2) NOT NULL,
  `art_pventa2` float(18,2) NOT NULL,
  `art_pventa3` float(18,2) NOT NULL,
  `art_acentamiento` tinyint(1) NOT NULL,
  `identificacion_usu` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_temp2`
--

CREATE TABLE `articulos_temp2` (
  `art_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_referencia` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_nom` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_cantidad` float(18,2) NOT NULL,
  `art_pcosto` float(18,2) NOT NULL,
  `art_pventa` float(18,2) NOT NULL,
  `art_pventa2` float(18,2) NOT NULL,
  `art_pventa3` float(18,2) NOT NULL,
  `art_acentamiento` tinyint(1) NOT NULL,
  `art_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos_temp2`
--

INSERT INTO `articulos_temp2` (`art_id`, `art_referencia`, `art_nom`, `art_cantidad`, `art_pcosto`, `art_pventa`, `art_pventa2`, `art_pventa3`, `art_acentamiento`, `art_cod`) VALUES
('1', 'tejas naranjas', 'tejas naranjas', 503.00, 3000.00, 4000.00, 5000.00, 6000.00, 0, 1),
('105', 'sm900gris', 'cemento gris', 500.00, 8000.00, 15000.00, 17000.00, 20000.00, 0, 2),
('11', 'm80', 'cemento blanco', 502.00, 6000.00, 7000.00, 8000.00, 9000.00, 0, 3),
('20', 'empa783', 'ampaques plasticos', 476.00, 500.00, 800.00, 1000.00, 1200.00, 0, 4),
('245', 'tjer564', 'tejas amarillas', 480.00, 2000.00, 4000.00, 5000.00, 6000.00, 0, 5),
('4', 'pegamento x22', 'pegamento extremo', 500.00, 3500.00, 4500.00, 5500.00, 6500.00, 0, 6),
('485', 'sierratx94', 'sierra de corte', 469.00, 6000.00, 4000.00, 5000.00, 6000.00, 0, 7),
('5', 'pintura w32', 'pintura brillante', 500.00, 4000.00, 6000.00, 8000.00, 10000.00, 0, 8),
('5151', 'paletas de colores', 'paletas de colores', 100.00, 1500.00, 2500.00, 3000.00, 3500.00, 0, 9),
('523', 'clavosx40', 'clavo de  enchape', 478.00, 2000.00, 3000.00, 0.00, 0.00, 0, 10),
('6', 'cinta65r', 'cinta industrial', 490.00, 3000.00, 4000.00, 5000.00, 6000.00, 0, 11),
('7', 'x32', 'canaleta mediana', 480.00, 4500.00, 5000.00, 5500.00, 6000.00, 0, 12),
('8', 'x30', 'canaleta grande', 491.00, 5000.00, 6000.00, 7000.00, 8000.00, 0, 13),
('88', 'cintan54', ' cinta aislante', 482.00, 2000.00, 4000.00, 5000.00, 6000.00, 0, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_temp3`
--

CREATE TABLE `articulos_temp3` (
  `art_id` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_referencia` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_nom` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `art_cantidad` float(18,2) NOT NULL,
  `art_pcosto` float(18,2) NOT NULL,
  `art_pventa` float(18,2) NOT NULL,
  `art_pventa2` float(18,2) NOT NULL,
  `art_pventa3` float(18,2) NOT NULL,
  `art_acentamiento` tinyint(1) NOT NULL,
  `identificacion_usu` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cl_id` int(11) NOT NULL,
  `cl_nit` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_dv` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_ciiu` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_razon` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_otro` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_cont` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_dir` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_ciud` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_email` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_norete` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_grancon` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_rteiva` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_plazo` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `cl_creo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_fecha_mod` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_mod` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cl_id`, `cl_nit`, `cl_dv`, `cl_ciiu`, `cl_razon`, `cl_tel`, `cl_otro`, `cl_cont`, `cl_dir`, `cl_ciud`, `cl_email`, `cl_norete`, `cl_grancon`, `cl_rteiva`, `cl_plazo`, `cl_fecha_creado`, `cl_creo`, `cl_fecha_mod`, `cl_mod`) VALUES
(17, '70562321', '80', '7744', 'coronavirusletal', '6532652', '31152426500', '23255262', 'calle50', 'bogota', 'coronaleta4@hotmail.com', 'no', 'si', 'no', '80', '2020-11-11 13:51:21', 'daniel', '15-12-2020 10:13:14', 'daniel parra'),
(21, '3568954', '80', '7744', 'REMATESjr', '22221512', '865956', '23255262', 'itagui call54sur', 'armenia', 'rmates43@hotmail.com', 'si', 'no', 'no', '90', '2020-11-12 15:17:12', 'daniel', '01-12-2020 10:59:00', 'daniel parra'),
(24, '98624564', '7', '1', 'OSCAR CORREA', '3152927474', '454545', 'PEPITO', 'CALLE 22', 'MEDELLIN', 'O_CORREA7@HOTMAIL.COM', 'si', 'no', 'no', '30', '2020-11-19 14:50:44', 'daniel', '', ''),
(25, '45621356', '2', '5', 'softawre s.a', '7856595', '541254523', '3015623562', 'cra32-784b43', 'medelliin', 'software89@hotmail.com', 'si', 'no', 'no', '90', '2020-11-20 20:09:12', 'daniel', '', ''),
(28, '8956854', '80', '7744', 'argos', '8956585', '30552426145', '5485623', 'cra31 sur', 'medellin', 'argos7@hotmail.com', 'no', 'si', 'no', '80', '2020-12-15 15:08:16', 'daniel parra', '15-12-2020 10:08:52', 'daniel parra'),
(30, '356299885', '80', '7744', 'panelas', '5662244', '3061145588', '2506688', 'cll45', 'medellin', 'panelas56@hotmail.com', 'no', 'si', 'no', '80', '2020-12-15 15:08:16', 'daniel parra', '15-12-2020 10:08:52', 'daniel parra'),
(31, '45454545', '', '', 'RODRIGO PEREZ PEREZ', '25265241', '315252525255', 'oscar', 'calle 22', 'medellin', 'o_correa7@hotmail.com', 'si', 'no', 'no', '30', '2021-01-08 16:53:14', 'daniel', '08-01-2021 11:54:36', 'daniel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_temp`
--

CREATE TABLE `clientes_temp` (
  `cl_id` int(11) NOT NULL,
  `cl_nit` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_dv` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_ciiu` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_razon` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_otro` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_cont` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_dir` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_ciud` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_email` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_norete` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_grancon` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_rteiva` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_plazo` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `cl_creo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_fecha_mod` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `cl_mod` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes_temp`
--

INSERT INTO `clientes_temp` (`cl_id`, `cl_nit`, `cl_dv`, `cl_ciiu`, `cl_razon`, `cl_tel`, `cl_otro`, `cl_cont`, `cl_dir`, `cl_ciud`, `cl_email`, `cl_norete`, `cl_grancon`, `cl_rteiva`, `cl_plazo`, `cl_fecha_creado`, `cl_creo`, `cl_fecha_mod`, `cl_mod`) VALUES
(1, '70562321', '80', '7744', 'coronavirusletal', '6532652', '31152426500', '23255262', 'calle50', 'bogota', 'coronaleta4@hotmail.com', 'no', 'si', 'no', '80', '2021-01-08 16:54:38', 'daniel', '', ''),
(2, '3568954', '80', '7744', 'REMATESjr', '22221512', '865956', '23255262', 'itagui call54sur', 'armenia', 'rmates43@hotmail.com', 'si', 'no', 'no', '90', '2021-01-08 16:54:38', 'daniel', '', ''),
(3, '98624564', '7', '1', 'OSCAR CORREA', '3152927474', '454545', 'PEPITO', 'CALLE 22', 'MEDELLIN', 'O_CORREA7@HOTMAIL.COM', 'si', 'no', 'no', '30', '2021-01-08 16:54:38', 'daniel', '', ''),
(4, '45621356', '2', '5', 'softawre s.a', '7856595', '541254523', '3015623562', 'cra32-784b43', 'medelliin', 'software89@hotmail.com', 'si', 'no', 'no', '90', '2021-01-08 16:54:38', 'daniel', '', ''),
(5, '8956854', '80', '7744', 'argos', '8956585', '30552426145', '5485623', 'cra31 sur', 'medellin', 'argos7@hotmail.com', 'no', 'si', 'no', '80', '2021-01-08 16:54:38', 'daniel', '', ''),
(6, '356299885', '80', '7744', 'panelas', '5662244', '3061145588', '2506688', 'cll45', 'medellin', 'panelas56@hotmail.com', 'no', 'si', 'no', '80', '2021-01-08 16:54:38', 'daniel', '', ''),
(7, '45454545', '', '', 'RODRIGO PEREZ PEREZ', '25265241', '315252525255', 'oscar', 'calle 22', 'medellin', 'o_correa7@hotmail.com', 'si', 'no', 'no', '30', '2021-01-08 16:54:38', 'daniel', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `cod_detalle_comp` int(20) NOT NULL,
  `cod_articulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_articulo` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `valorve_articulo` float(18,2) NOT NULL,
  `canti_articulo` int(10) NOT NULL,
  `subtotal_articulo` float(18,2) NOT NULL,
  `num_comp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallecompra`
--

INSERT INTO `detallecompra` (`cod_detalle_comp`, `cod_articulo`, `nom_articulo`, `valorve_articulo`, `canti_articulo`, `subtotal_articulo`, `num_comp`) VALUES
(5, '485', 'sierra de corte', 4000.00, 2, 8000.00, 3),
(6, '105', 'cemento gris', 15000.00, 2, 30000.00, 4),
(7, '3', 'pala grande', 6000.00, 2, 12000.00, 4),
(8, '11', 'cemento blanco', 7000.00, 2, 14000.00, 5),
(9, '105', 'cemento gris', 15000.00, 2, 30000.00, 6),
(10, '1', 'alambre de cobre', 4000.00, 3, 12000.00, 7),
(11, '11', 'cemento blanco', 7000.00, 2, 14000.00, 7),
(12, '11', 'cemento blanco', 7000.00, 3, 21000.00, 3),
(13, '1', 'tejas naranjas', 4000.00, 2, 8000.00, 8),
(14, '2', 'clavo dentado', 2000.00, 2, 4000.00, 8),
(15, '3', 'pala grande', 6000.00, 2, 12000.00, 8),
(16, '2', 'clavo dentado', 2000.00, 2, 4000.00, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra_temp`
--

CREATE TABLE `detallecompra_temp` (
  `cod_detalle_comp` int(20) NOT NULL,
  `cod_articulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_articulo` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `valorve_articulo` float(18,2) NOT NULL,
  `canti_articulo` int(10) NOT NULL,
  `subtotal_articulo` float(18,2) NOT NULL,
  `num_comp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallecompra_temp`
--

INSERT INTO `detallecompra_temp` (`cod_detalle_comp`, `cod_articulo`, `nom_articulo`, `valorve_articulo`, `canti_articulo`, `subtotal_articulo`, `num_comp`) VALUES
(40, '105', 'cemento gris', 15000.00, 2, 30000.00, 4),
(41, '3', 'pala grande', 6000.00, 2, 12000.00, 4),
(44, '105', 'cemento gris', 15000.00, 2, 30000.00, 6),
(47, '11', 'cemento blanco', 7000.00, 2, 14000.00, 5),
(48, '485', 'sierra de corte', 4000.00, 2, 8000.00, 3),
(49, '11', 'cemento blanco', 7000.00, 3, 21000.00, 3),
(51, '1', 'alambre de cobre', 4000.00, 3, 12000.00, 7),
(52, '11', 'cemento blanco', 7000.00, 2, 14000.00, 7),
(53, '2', 'clavo dentado', 2000.00, 2, 4000.00, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `cod_detalle_fact` int(20) NOT NULL,
  `cod_articulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_articulo` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `valorve_articulo` float(18,2) NOT NULL,
  `canti_articulo` int(10) NOT NULL,
  `subtotal_articulo` float(18,2) NOT NULL,
  `num_fact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`cod_detalle_fact`, `cod_articulo`, `nom_articulo`, `valorve_articulo`, `canti_articulo`, `subtotal_articulo`, `num_fact`) VALUES
(1, '1', 'alambre de cobre', 3000.00, 6, 18000.00, 1),
(2, '105', 'cemento gris', 12000.00, 3, 36000.00, 1),
(3, '1', 'alambre de cobre', 4842.12, 2, 9684.24, 2),
(4, '3', 'pala grande', 6000.00, 1, 6000.00, 2),
(5, '1', 'alambre de cobre', 4842.12, 3, 14526.36, 3),
(6, '10', 'bulto de cemento  gris', 9000.00, 3, 27000.00, 3),
(7, '3', 'pala grande', 6000.00, 7, 42000.00, 3),
(8, '485', 'sierra de corte', 4000.00, 8, 32000.00, 3),
(9, '11', 'cemento blanco', 7000.00, 2, 14000.00, 4),
(10, '10', 'bulto de cemento  gris', 9000.00, 1, 9000.00, 5),
(11, '11', 'cemento blanco', 7000.00, 2, 14000.00, 5),
(12, '10', 'bulto de cemento  gris', 9000.00, 2, 18000.00, 6),
(13, '11', 'cemento blanco', 7000.00, 2, 14000.00, 6),
(14, '11', 'cemento blanco', 7000.00, 3, 21000.00, 7),
(15, '1', 'tejas naranjas', 4000.00, 387, 1548000.00, 8),
(16, '2', 'clavo dentado', 2000.00, 3, 6000.00, 8),
(17, '4', 'pegamento extremo', 4500.00, 3, 13500.00, 8),
(18, '105', 'cemento gris', 15000.00, 1, 15000.00, 9),
(19, '4', 'pegamento extremo', 4500.00, 4, 18000.00, 10),
(20, '8', 'canaleta grande', 6000.00, 2, 12000.00, 10),
(21, '1', 'tejas naranjas', 4000.00, 2, 8000.00, 10),
(22, '7', 'canaleta mediana', 5000.00, 4, 20000.00, 10),
(23, '10', 'bulto de cemento  gris', 9000.00, 1, 9000.00, 10),
(24, '1', 'tejas naranjas', 4000.00, 2, 8000.00, 11),
(25, '2', 'clavo dentado', 2000.00, 2, 4000.00, 11),
(26, '3', 'pala grande', 6000.00, 2, 12000.00, 11),
(27, '11', 'cemento blanco', 7000.00, 10, 70000.00, 12),
(28, '245', 'tejas amarillas', 4000.00, 10, 40000.00, 12),
(29, '1', 'tejas naranjas', 4000.00, 40, 160000.00, 12),
(30, '5151', 'paletas de colores', 2500.00, 15, 37500.00, 12),
(31, '88', ' cinta aislante', 4000.00, 4, 16000.00, 12),
(32, '8', 'canaleta grande', 6000.00, 3, 18000.00, 12),
(33, '485', 'sierra de corte', 4000.00, 4, 16000.00, 12),
(34, '5', 'pintura brillante', 6000.00, 10, 60000.00, 12),
(35, '245', 'tejas amarillas', 4000.00, 24, 96000.00, 13),
(36, '20', 'ampaques plasticos', 800.00, 24, 19200.00, 13),
(37, '1', 'tejas naranjas', 4000.00, 10, 40000.00, 13),
(38, '5151', 'paletas de colores', 2500.00, 8, 20000.00, 13),
(39, '88', ' cinta aislante', 4000.00, 10, 40000.00, 13),
(40, '11', 'cemento blanco', 7000.00, 16, 112000.00, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura_temp`
--

CREATE TABLE `detallefactura_temp` (
  `cod_detalle_fact` int(20) NOT NULL,
  `cod_articulo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_articulo` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `valorve_articulo` float(18,2) NOT NULL,
  `canti_articulo` int(10) NOT NULL,
  `subtotal_articulo` float(18,2) NOT NULL,
  `num_fact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallefactura_temp`
--

INSERT INTO `detallefactura_temp` (`cod_detalle_fact`, `cod_articulo`, `nom_articulo`, `valorve_articulo`, `canti_articulo`, `subtotal_articulo`, `num_fact`) VALUES
(6, '11', 'cemento blanco', 7000.00, 3, 21000.00, 7),
(11, '1', 'alambre de cobre', 4842.12, 2, 9684.24, 2),
(12, '3', 'pala grande', 6000.00, 1, 6000.00, 2),
(29, '1', 'alambre de cobre', 3000.00, 6, 18000.00, 1),
(30, '105', 'cemento gris', 12000.00, 3, 36000.00, 1),
(40, '11', 'cemento blanco', 7000.00, 2, 14000.00, 4),
(41, '10', 'bulto de cemento  gris', 9000.00, 1, 9000.00, 5),
(42, '11', 'cemento blanco', 7000.00, 2, 14000.00, 5),
(43, '10', 'bulto de cemento  gris', 9000.00, 2, 18000.00, 6),
(44, '11', 'cemento blanco', 7000.00, 2, 14000.00, 6),
(45, '1', 'tejas naranjas', 4000.00, 387, 1548000.00, 8),
(46, '2', 'clavo dentado', 2000.00, 3, 6000.00, 8),
(47, '4', 'pegamento extremo', 4500.00, 3, 13500.00, 8),
(48, '105', 'cemento gris', 15000.00, 1, 15000.00, 9),
(49, '4', 'pegamento extremo', 4500.00, 4, 18000.00, 10),
(50, '8', 'canaleta grande', 6000.00, 2, 12000.00, 10),
(51, '1', 'tejas naranjas', 4000.00, 2, 8000.00, 10),
(52, '7', 'canaleta mediana', 5000.00, 4, 20000.00, 10),
(53, '10', 'bulto de cemento  gris', 9000.00, 1, 9000.00, 10),
(58, '1', 'alambre de cobre', 4842.12, 3, 14526.36, 3),
(59, '10', 'bulto de cemento  gris', 9000.00, 3, 27000.00, 3),
(60, '3', 'pala grande', 6000.00, 7, 42000.00, 3),
(61, '485', 'sierra de corte', 4000.00, 8, 32000.00, 3),
(78, '11', 'cemento blanco', 7000.00, 10, 70000.00, 12),
(79, '245', 'tejas amarillas', 4000.00, 10, 40000.00, 12),
(80, '1', 'tejas naranjas', 4000.00, 40, 160000.00, 12),
(81, '5151', 'paletas de colores', 2500.00, 15, 37500.00, 12),
(82, '88', ' cinta aislante', 4000.00, 4, 16000.00, 12),
(83, '8', 'canaleta grande', 6000.00, 3, 18000.00, 12),
(84, '485', 'sierra de corte', 4000.00, 4, 16000.00, 12),
(85, '5', 'pintura brillante', 6000.00, 10, 60000.00, 12),
(92, '245', 'tejas amarillas', 4000.00, 24, 96000.00, 13),
(93, '20', 'ampaques plasticos', 800.00, 24, 19200.00, 13),
(94, '1', 'tejas naranjas', 4000.00, 10, 40000.00, 13),
(95, '5151', 'paletas de colores', 2500.00, 8, 20000.00, 13),
(96, '88', ' cinta aislante', 4000.00, 10, 40000.00, 13),
(97, '11', 'cemento blanco', 7000.00, 16, 112000.00, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezadocompra`
--

CREATE TABLE `encabezadocompra` (
  `cod_enca_comp` int(11) NOT NULL,
  `nit_enca_cl` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_enca_cl` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha_enca_comp` date NOT NULL,
  `nom_enca_vendedor` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `num_enca_comp` int(10) NOT NULL,
  `subtota_enca` float(18,2) NOT NULL,
  `total_enca` float(18,2) NOT NULL,
  `forma_pago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encabezadocompra`
--

INSERT INTO `encabezadocompra` (`cod_enca_comp`, `nit_enca_cl`, `nom_enca_cl`, `fecha_enca_comp`, `nom_enca_vendedor`, `num_enca_comp`, `subtota_enca`, `total_enca`, `forma_pago`) VALUES
(3, '98624564', 'OSCAR CORREA', '2020-12-07', 'daniel', 3, 29000.00, 29000.00, 'Credito'),
(4, '3568954', 'REMATESjr', '2020-12-07', 'daniel', 4, 42000.00, 42000.00, 'Credito'),
(5, '70562321', 'coronalvirus', '2020-12-07', 'daniel parra', 5, 0.00, 0.00, 'Contado'),
(6, '98624564', 'OSCAR CORREA', '2020-12-07', 'daniel', 6, 30000.00, 30000.00, 'Credito'),
(7, '70562321', 'coronalvirus', '2020-12-10', 'daniel', 7, 30000.00, 30000.00, 'Credito'),
(8, '98624564', 'OSCAR CORREA', '2021-01-06', 'daniel', 8, 24.00, 24.00, 'Credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encabezadofactura`
--

CREATE TABLE `encabezadofactura` (
  `cod_enca_fact` int(11) NOT NULL,
  `nit_enca_cl` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_enca_cl` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fecha_enca_fact` date NOT NULL,
  `nom_enca_vendedor` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `num_enca_fact` int(10) NOT NULL,
  `subtota_enca` decimal(18,2) NOT NULL,
  `total_enca` decimal(18,2) NOT NULL,
  `forma_pago` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `encabezadofactura`
--

INSERT INTO `encabezadofactura` (`cod_enca_fact`, `nit_enca_cl`, `nom_enca_cl`, `fecha_enca_fact`, `nom_enca_vendedor`, `num_enca_fact`, `subtota_enca`, `total_enca`, `forma_pago`) VALUES
(1, '70562321', 'coronalvirus', '2020-12-10', 'daniel', 1, '54000.00', '54000.00', 'Credito'),
(2, '45621356', 'softawre s.a', '2020-12-10', 'daniel parra', 2, '15.68', '15.68', 'Credito'),
(3, '98624564', 'OSCAR CORREA', '2020-12-10', 'daniel', 3, '115526.36', '115526.36', 'Credito'),
(4, '70562321', 'coronalvirus', '2020-12-10', 'daniel parra', 4, '14.00', '14.00', 'Credito'),
(5, '98624564', 'OSCAR CORREA', '2020-12-10', 'daniel parra', 5, '23.00', '23.00', 'Credito'),
(6, '98624564', 'OSCAR CORREA', '2020-12-10', 'daniel parra', 6, '32.00', '32.00', 'Credito'),
(7, '70562321', 'coronalvirus', '2020-12-14', 'daniel parra', 7, '21.00', '21.00', 'Credito'),
(8, '3568954', 'REMATESjr', '2020-12-16', 'daniel', 8, '1.57', '1.57', 'Credito'),
(9, '98624564', 'OSCAR CORREA', '2020-12-21', 'daniel', 9, '15.00', '15.00', 'Credito'),
(10, '3568954', 'REMATESjr', '2021-01-05', 'daniel', 10, '67000.00', '67000.00', 'Credito'),
(11, '3568954', 'REMATESjr', '2021-01-06', 'daniel', 11, '24.00', '24.00', 'Credito'),
(12, '98624564', 'OSCAR CORREA', '2021-01-08', 'daniel', 12, '417500.00', '417500.00', 'Credito'),
(13, '98624564', 'OSCAR CORREA', '2021-01-15', 'daniel', 13, '327200.00', '327200.00', 'Credito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturarb`
--

CREATE TABLE `facturarb` (
  `nfact` int(30) NOT NULL,
  `valor` decimal(18,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `facturarb`
--

INSERT INTO `facturarb` (`nfact`, `valor`) VALUES
(3, '115526.360'),
(5, '23.000'),
(6, '32.000'),
(9, '15.000'),
(12, '417500.000'),
(13, '327200.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `mod_codigo` int(11) NOT NULL,
  `mod_nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mod_url` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `mod_estado` int(11) NOT NULL,
  `mod_codigo_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`mod_codigo`, `mod_nombre`, `mod_url`, `mod_estado`, `mod_codigo_padre`) VALUES
(1, 'Employees', '', 1, 0),
(2, 'Admin', '', 1, 0),
(3, 'Cartera', '', 1, 0),
(4, 'Facturacion', '', 1, 0),
(5, 'Logistica', '', 1, 0),
(6, 'Inventario', '', 1, 0),
(7, 'Admin Home', '', 1, 0),
(8, 'Clientes', '', 1, 0),
(9, 'Prod', '', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulosxrol`
--

CREATE TABLE `modulosxrol` (
  `mod_codigo` int(11) NOT NULL,
  `rol_codigo` int(11) NOT NULL,
  `mxr_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulosxrol`
--

INSERT INTO `modulosxrol` (`mod_codigo`, `rol_codigo`, `mxr_codigo`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(3, 2, 7),
(4, 3, 8),
(5, 4, 9),
(6, 5, 10),
(7, 1, 11),
(7, 2, 12),
(7, 3, 13),
(7, 4, 14),
(7, 5, 15),
(1, 6, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `pv_id` int(11) NOT NULL,
  `pv_nit` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_dv` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_ciiu` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_razon` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_otro` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_cont` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_dir` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_ciud` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_email` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_norete` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_grancon` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_rteiva` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_plazo` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `pv_creo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_fecha_mod` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_mod` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`pv_id`, `pv_nit`, `pv_dv`, `pv_ciiu`, `pv_razon`, `pv_tel`, `pv_otro`, `pv_cont`, `pv_dir`, `pv_ciud`, `pv_email`, `pv_norete`, `pv_grancon`, `pv_rteiva`, `pv_plazo`, `pv_fecha_creado`, `pv_creo`, `pv_fecha_mod`, `pv_mod`) VALUES
(1, '85254', '5', '6', 'plasticos express s.a', '3562459689', '8542635', '56285545', 'cra30 n70-43', 'tulua', 'plaexpr-4@hotmail.com', 'si', 'no', 'no', '90', '2020-11-20 13:49:31', 'daniel', '15-12-2020 12:44:54', 'daniel'),
(2, '90085562542', '1', '6', 'ladrillaje s.a', '458596856', '3004442255', '4565526582', 'cll 87 n54-11', 'cartagena', 'ladril34@hotmail.com', 'no', 'si', 'no', '90', '2020-11-20 13:53:11', 'daniel', '15-12-2020 12:45:23', 'daniel'),
(5, '9856232152', '2', '8', 'estampacionlocal', '562356232', '3005231256', '789565235', 'calle 90 n54-11', 'cali', 'esta55@hotmail.com', 'no', 'si', 'si', '90', '2020-12-01 16:04:38', 'daniel parra', '', ''),
(6, '856256232', '1', '2', 'clavitos s.a', '895622', '3005231252', '635265325', 'cll65 n43-23', 'bogota', 'clavos76@hotmail.com', 'si', 'no', 'no', '80', '2020-12-15 14:31:36', 'daniel parra', '', ''),
(7, '89562', '5', '6', 'puertasyventanas', '3005623562', '8542635', '56285545', 'cra67g n67-3', 'pereira', 'puertayv6@hotmail.com', 'no', 'si', 'no', '80', '2020-12-15 17:47:43', 'daniel', '', ''),
(8, '8225', '5', '6', 'rejashierro s.a', '306235262', '8542635', '56285545', 'circula56 g n67-3', 'choco', 'rejaskd9@hotmail.com', 'si', 'si', 'no', '80', '2020-12-15 17:50:48', 'daniel', '', ''),
(9, '785734', '5', '6', 'llandasyriness.a', '301235625', '8542635', '56285545', 'cll89-45-32', 'medellin', 'llantas56@hotmail.com', 'si', 'no', 'no', '90', '2020-12-15 17:52:57', 'daniel', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores_temp`
--

CREATE TABLE `proveedores_temp` (
  `pv_id` int(11) NOT NULL,
  `pv_nit` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_dv` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_ciiu` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_razon` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_otro` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_cont` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_dir` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_ciud` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_email` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_norete` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_grancon` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_rteiva` varchar(5) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_plazo` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `pv_creo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_fecha_mod` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pv_mod` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores_temp`
--

INSERT INTO `proveedores_temp` (`pv_id`, `pv_nit`, `pv_dv`, `pv_ciiu`, `pv_razon`, `pv_tel`, `pv_otro`, `pv_cont`, `pv_dir`, `pv_ciud`, `pv_email`, `pv_norete`, `pv_grancon`, `pv_rteiva`, `pv_plazo`, `pv_fecha_creado`, `pv_creo`, `pv_fecha_mod`, `pv_mod`) VALUES
(1, '85254', '5', '6', 'plasticos express s.a', '3562459689', '8542635', '56285545', 'cra30 n70-43', 'tulua', 'plaexpr-4@hotmail.com', 'si', 'no', 'no', '90', '2020-12-15 17:53:00', 'daniel', '', ''),
(2, '90085562542', '1', '6', 'ladrillaje s.a', '458596856', '3004442255', '4565526582', 'cll 87 n54-11', 'cartagena', 'ladril34@hotmail.com', 'no', 'si', 'no', '90', '2020-12-15 17:53:00', 'daniel', '', ''),
(3, '9856232152', '2', '8', 'estampacionlocal', '562356232', '3005231256', '789565235', 'calle 90 n54-11', 'cali', 'esta55@hotmail.com', 'no', 'si', 'si', '90', '2020-12-15 17:53:00', 'daniel', '', ''),
(4, '856256232', '1', '2', 'clavitos s.a', '895622', '3005231252', '635265325', 'cll65 n43-23', 'bogota', 'clavos76@hotmail.com', 'si', 'no', 'no', '80', '2020-12-15 17:53:00', 'daniel', '', ''),
(5, '89562', '5', '6', 'puertasyventanas', '3005623562', '8542635', '56285545', 'cra67g n67-3', 'pereira', 'puertayv6@hotmail.com', 'no', 'si', 'no', '80', '2020-12-15 17:53:00', 'daniel', '', ''),
(6, '8225', '5', '6', 'rejashierro s.a', '306235262', '8542635', '56285545', 'circula56 g n67-3', 'choco', 'rejaskd9@hotmail.com', 'si', 'si', 'no', '80', '2020-12-15 17:53:00', 'daniel', '', ''),
(7, '785734', '5', '6', 'llandasyriness.a', '301235625', '8542635', '56285545', 'cll89-45-32', 'medellin', 'llantas56@hotmail.com', 'si', 'no', 'no', '90', '2020-12-15 17:53:00', 'daniel', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reciboapagar`
--

CREATE TABLE `reciboapagar` (
  `cod_recipago` int(11) NOT NULL,
  `num_factrb` int(15) NOT NULL,
  `concepto_factrb` varchar(30) NOT NULL,
  `valor_factrb` decimal(18,3) NOT NULL,
  `averias_factrb` decimal(18,3) NOT NULL,
  `descu_factrb` decimal(18,3) NOT NULL,
  `cance_factrb` decimal(18,3) NOT NULL,
  `flete_factrb` decimal(18,3) NOT NULL,
  `sobra_factrb` decimal(18,3) NOT NULL,
  `saldar_factrb` decimal(18,3) NOT NULL,
  `nom_vende_factrb` varchar(40) NOT NULL,
  `fechacrea_factrb` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reciboapagar_temp`
--

CREATE TABLE `reciboapagar_temp` (
  `cod_recipago` int(11) NOT NULL,
  `num_factrb` int(15) NOT NULL,
  `concepto_factrb` varchar(30) NOT NULL,
  `valor_factrb` decimal(18,3) NOT NULL,
  `averias_factrb` decimal(18,3) NOT NULL,
  `descu_factrb` decimal(18,3) NOT NULL,
  `cance_factrb` decimal(18,3) NOT NULL,
  `flete_factrb` decimal(18,3) NOT NULL,
  `sobra_factrb` decimal(18,3) NOT NULL,
  `saldar_factrb` decimal(18,3) NOT NULL,
  `nom_vende_factrb` varchar(40) NOT NULL,
  `fechacrea_factrb` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_codigo` int(11) NOT NULL,
  `rol_descripcion` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rol_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_codigo`, `rol_descripcion`, `rol_estado`) VALUES
(1, 'Administrador', 1),
(2, 'Cartera', 1),
(3, 'Facturacion', 1),
(4, 'Logistica', 1),
(5, 'Inventario', 1),
(6, 'Vendedor', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_codigo` int(11) NOT NULL,
  `usu_identificacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `usu_nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `usu_apellidos` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `usu_login` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_passwd` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rol_codigo` int(11) DEFAULT NULL,
  `usu_estado` int(10) DEFAULT NULL,
  `usu_mail` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `usu_fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `usu_creo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_fecha_mod` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_mod` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `permiso_anular` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_codigo`, `usu_identificacion`, `usu_nombre`, `usu_apellidos`, `usu_login`, `usu_passwd`, `rol_codigo`, `usu_estado`, `usu_mail`, `usu_fecha_creado`, `usu_creo`, `usu_fecha_mod`, `usu_mod`, `permiso_anular`) VALUES
(1, '11111', 'daniel', 'parra', 'admin', '54321', 1, 1, ' danielparrapizarro88@hotmail.com', '2020-12-15 17:24:30', 'daniel', '', '', 1),
(2, '22222', 'viviana', 'urrego', 'vivi', '12345', 1, 1, 'vivi76@hotmail.com', '2020-10-04 17:49:25', 'daniel', '', '', 0),
(3, '33333', 'oscar', 'correa', 'os20', '12345', 1, 1, 'os33@gmail.com', '2020-10-07 17:50:26', 'daniel', '', '', 0),
(4, '44444', 'david', 'cardona', 'davic', '12345', 1, 1, 'davic56@hotmail.com', '2020-10-19 19:36:33', 'daniel', '', '', 0),
(7, '55555', 'juliana', 'mejia', 'juli', '123', 1, 1, 'juli8@hotmail.com', '2020-12-15 15:43:23', 'daniel parra', '', '', 0),
(8, '99999', 'ronaldo', 'nasairo', 'roni', '12345', 1, 1, 'roni67@hotmail.com', '2020-12-15 16:41:04', 'daniel parra', '', '', 1),
(11, '11111', 'lorenzo', 'gomez', 'lore', '12345', 1, 1, 'lore44@hotmail.com', '2020-12-15 17:54:19', 'daniel', '', '', 0),
(12, '863214', 'javier', 'perez', 'javi', '12345', 1, 1, 'javi77@hotmail.com', '2020-12-15 18:02:46', 'daniel', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_temp`
--

CREATE TABLE `usuarios_temp` (
  `usu_codigo` int(11) NOT NULL,
  `usu_identificacion` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `usu_nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `usu_apellidos` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `usu_login` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_passwd` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rol_codigo` int(11) DEFAULT NULL,
  `usu_estado` int(10) DEFAULT NULL,
  `usu_mail` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `usu_fecha_creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `usu_creo` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_fecha_mod` varchar(25) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `usu_mod` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `permiso_anular` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_temp`
--

INSERT INTO `usuarios_temp` (`usu_codigo`, `usu_identificacion`, `usu_nombre`, `usu_apellidos`, `usu_login`, `usu_passwd`, `rol_codigo`, `usu_estado`, `usu_mail`, `usu_fecha_creado`, `usu_creo`, `usu_fecha_mod`, `usu_mod`, `permiso_anular`) VALUES
(1, '11111', 'daniel', 'parra', 'admin', '123', 1, 1, ' danielparrapizarro88@hotmail.com', '2020-12-15 18:12:29', '', '', '', 1),
(2, '22222', 'viviana', 'urrego', 'vivi', '12345', 1, 1, 'vivi76@hotmail.com', '2020-12-15 18:12:29', '', '', '', 0),
(3, '33333', 'oscar', 'correa', 'os20', '12345', 1, 1, 'os33@gmail.com', '2020-12-15 18:12:29', '', '', '', 0),
(4, '44444', 'david', 'cardona', 'davic', '12345', 1, 1, 'davic56@hotmail.com', '2020-12-15 18:12:29', '', '', '', 0),
(5, '55555', 'juliana', 'mejia', 'juli', '123', 1, 1, 'juli8@hotmail.com', '2020-12-15 18:12:29', '', '', '', 0),
(6, '99999', 'ronaldo', 'nasairo', 'roni', '12345', 1, 1, 'roni67@hotmail.com', '2020-12-15 18:12:29', '', '', '', 1),
(7, '11111', 'lorenzo', 'gomez', 'lore', '12345', 1, 1, 'lore44@hotmail.com', '2020-12-15 18:12:29', '', '', '', 0),
(8, '863214', 'javier', 'perez', 'javi', '12345', 1, 1, 'javi77@hotmail.com', '2020-12-15 18:12:29', '', '', '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`art_id`);

--
-- Indices de la tabla `articulos_temp2`
--
ALTER TABLE `articulos_temp2`
  ADD PRIMARY KEY (`art_cod`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indices de la tabla `clientes_temp`
--
ALTER TABLE `clientes_temp`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`cod_detalle_comp`);

--
-- Indices de la tabla `detallecompra_temp`
--
ALTER TABLE `detallecompra_temp`
  ADD PRIMARY KEY (`cod_detalle_comp`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`cod_detalle_fact`);

--
-- Indices de la tabla `detallefactura_temp`
--
ALTER TABLE `detallefactura_temp`
  ADD PRIMARY KEY (`cod_detalle_fact`);

--
-- Indices de la tabla `encabezadocompra`
--
ALTER TABLE `encabezadocompra`
  ADD PRIMARY KEY (`cod_enca_comp`);

--
-- Indices de la tabla `encabezadofactura`
--
ALTER TABLE `encabezadofactura`
  ADD PRIMARY KEY (`cod_enca_fact`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`mod_codigo`);

--
-- Indices de la tabla `modulosxrol`
--
ALTER TABLE `modulosxrol`
  ADD PRIMARY KEY (`mxr_codigo`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`pv_id`);

--
-- Indices de la tabla `proveedores_temp`
--
ALTER TABLE `proveedores_temp`
  ADD PRIMARY KEY (`pv_id`);

--
-- Indices de la tabla `reciboapagar`
--
ALTER TABLE `reciboapagar`
  ADD PRIMARY KEY (`cod_recipago`);

--
-- Indices de la tabla `reciboapagar_temp`
--
ALTER TABLE `reciboapagar_temp`
  ADD PRIMARY KEY (`cod_recipago`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- Indices de la tabla `usuarios_temp`
--
ALTER TABLE `usuarios_temp`
  ADD PRIMARY KEY (`usu_codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos_temp2`
--
ALTER TABLE `articulos_temp2`
  MODIFY `art_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `clientes_temp`
--
ALTER TABLE `clientes_temp`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `cod_detalle_comp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `detallecompra_temp`
--
ALTER TABLE `detallecompra_temp`
  MODIFY `cod_detalle_comp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `cod_detalle_fact` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `detallefactura_temp`
--
ALTER TABLE `detallefactura_temp`
  MODIFY `cod_detalle_fact` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `encabezadocompra`
--
ALTER TABLE `encabezadocompra`
  MODIFY `cod_enca_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `encabezadofactura`
--
ALTER TABLE `encabezadofactura`
  MODIFY `cod_enca_fact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `mod_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `modulosxrol`
--
ALTER TABLE `modulosxrol`
  MODIFY `mxr_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `pv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proveedores_temp`
--
ALTER TABLE `proveedores_temp`
  MODIFY `pv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `reciboapagar`
--
ALTER TABLE `reciboapagar`
  MODIFY `cod_recipago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reciboapagar_temp`
--
ALTER TABLE `reciboapagar_temp`
  MODIFY `cod_recipago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios_temp`
--
ALTER TABLE `usuarios_temp`
  MODIFY `usu_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
