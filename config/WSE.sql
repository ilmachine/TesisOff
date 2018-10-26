-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2018 at 02:25 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WSE`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `car_id` int(11) NOT NULL,
  `car_descripcion` varchar(45) DEFAULT NULL,
  `car_fac_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`car_id`, `car_descripcion`, `car_fac_id`) VALUES
(1, 'Licenciatura en Ciencias de la Computacion', 1);

-- --------------------------------------------------------

--
-- Table structure for table `click_analisis`
--

CREATE TABLE `click_analisis` (
  `click_id` int(11) NOT NULL,
  `click_link` varchar(145) DEFAULT NULL,
  `click_clicks` int(11) DEFAULT NULL,
  `click_codf_id_doc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `codigo_fuente`
--

CREATE TABLE `codigo_fuente` (
  `codf_id_doc` int(11) NOT NULL,
  `codf_fuente` varchar(1000) DEFAULT NULL,
  `codf_fecha` date DEFAULT NULL COMMENT 'Fecha de inserción del dato'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `codigo_fuente`
--

INSERT INTO `codigo_fuente` (`codf_id_doc`, `codf_fuente`, `codf_fecha`) VALUES
(1, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(2, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(3, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(4, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(5, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(6, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(7, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(8, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(9, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(10, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(11, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(12, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(13, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(14, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(15, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(16, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(17, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(18, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(20, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(21, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(22, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(23, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(24, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(25, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(26, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(27, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(28, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(29, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(30, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(31, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(32, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(33, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(34, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(35, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(36, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(37, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(38, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(39, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(40, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(41, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(42, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(43, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(44, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(45, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(46, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(47, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(48, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(49, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(50, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(51, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(52, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(53, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(54, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(55, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(56, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(57, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(58, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(59, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(60, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(61, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(62, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(63, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(64, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(65, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(66, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(67, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(68, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(69, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(70, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(71, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(72, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(73, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(74, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(75, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(76, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(77, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(78, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(79, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(80, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(81, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(82, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(83, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(84, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(85, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(86, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(87, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(88, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(89, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(90, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(91, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(92, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(93, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(94, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(95, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(96, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16'),
(97, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/codigo_8cc.html', '2018-04-16'),
(98, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/consulta_8cpp.html', '2018-04-16'),
(99, '/home/ilmachine/Escritorio/scripts/9ArchivosPruebas/output/html/prueba_8cc.html', '2018-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `facultad`
--

CREATE TABLE `facultad` (
  `fac_id` int(11) NOT NULL,
  `fac_descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultad`
--

INSERT INTO `facultad` (`fac_id`, `fac_descripcion`) VALUES
(1, 'Facultad de Ciencias'),
(2, 'Facultad de Arquitectura'),
(3, 'Ciencia'),
(4, 'Fisica'),
(5, 'Facultad de Ciencias'),
(6, 'Facultad de Arquitectura');

-- --------------------------------------------------------

--
-- Table structure for table `fichero`
--

CREATE TABLE `fichero` (
  `fich_id` int(11) NOT NULL,
  `fich_nombre` varchar(45) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `fich_per_rut` int(11) DEFAULT NULL,
  `fich_fch_trx` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fichero`
--

INSERT INTO `fichero` (`fich_id`, `fich_nombre`, `fich_per_rut`, `fich_fch_trx`) VALUES
(3, '[ZP] CotizaciÃ³n AgroRuizTagle Completa.xlsx', 17679644, '2018-03-25 00:00:00'),
(5, 'document(1).pdf', 17679644, '2018-03-25 00:00:00'),
(6, 'Protocolo Ingreso.docx', 17679644, '2018-03-25 00:00:00'),
(7, 'Bolso para la clinica.docx', 17679644, '2018-03-25 00:00:00'),
(8, '000000191519870.pdf', 17679644, '2018-03-25 00:00:00'),
(9, 'certificado.pdf', 17679644, '2018-03-25 00:00:00'),
(10, '000000189425932.pdf', 17679644, '2018-03-25 00:00:00'),
(11, 'cte_guarda_pdf.pdf', 17679644, '2018-03-25 00:00:00'),
(12, 'recibidas.png', 17679644, '2018-03-25 00:00:00'),
(13, 'cte_guarda_pdf.pdf', 17679644, '2018-03-25 00:00:00'),
(14, 'document(1).pdf', 17679644, '2018-03-25 00:00:00'),
(15, '[ZP] CotizaciÃ³n AgroRuizTagle Completa.xlsx', 17679644, '2018-03-25 00:00:00'),
(16, 'cte_guarda_pdf.pdf', 17679644, '2018-03-25 00:00:00'),
(17, '000000191519870.pdf', 17679644, '2018-03-25 00:00:00'),
(18, 'BoletaEasy (1).pdf', 17679644, '2018-03-25 00:00:00'),
(19, '[ZP] CotizaciÃ³n AgroRuizTagle Completa.xlsx', 17679644, '2018-03-25 00:00:00'),
(20, '[ZP] CotizaciÃ³n AgroRuizTagle Completa.xlsx', 17679644, '2018-03-25 00:00:00'),
(21, '[ZP] CotizaciÃ³n AgroRuizTagle Completa.xlsx', 17679644, '2018-03-25 00:00:00'),
(22, '000000189425451.pdf', 17679644, '2018-03-25 00:00:00'),
(23, 'document(1).pdf', 17679644, '2018-03-25 00:00:00'),
(24, 'document(1).pdf', 17679644, '2018-03-26 00:00:00'),
(25, '000000189425932.pdf', 17679644, '2018-03-26 00:00:00'),
(26, 'EECCvirtual.pdf', 17679644, '2018-04-16 00:00:00'),
(27, 'certificadoConstanza.pdf', 17679644, '2018-04-28 00:00:00'),
(28, 'certificadoConstanza.pdf', 17679644, '2018-04-28 00:00:00'),
(29, 'certificadoConstanza.pdf', 17679644, '2018-04-29 00:00:00'),
(30, 'certificadoConstanza.pdf', 17679644, '2018-04-29 00:00:00'),
(31, 'certificadoConstanza.pdf', 17679644, '2018-04-29 00:00:00'),
(32, 'comprobantePago.pdf', 17679644, '2018-04-29 00:00:00'),
(33, 'carres2017010002293361.pdf', 17679644, '2018-04-29 00:00:00'),
(34, 'carres2017010002293361.pdf', 17679644, '2018-04-29 00:00:00'),
(35, 'BoletaEasy.pdf', 17679644, '2018-04-29 00:00:00'),
(36, 'cte_guarda_pdf.pdf', 17679644, '2018-04-29 11:02:09'),
(37, 'EECCvirtual.pdf', 17679644, '2018-04-29 11:03:22'),
(38, 'carres2017010002293361.pdf', 17679644, '2018-04-29 11:36:28'),
(39, 'tesisCorregida2017FINAL.pdf', 17319727, '2018-04-29 14:39:03'),
(40, 'certificadoConstanza.pdf', 17679644, '2018-04-29 18:14:20');

-- --------------------------------------------------------

--
-- Table structure for table `hist_ini_sesion`
--

CREATE TABLE `hist_ini_sesion` (
  `his_id` int(11) NOT NULL,
  `his_rut_ini` int(11) DEFAULT NULL,
  `his_fch_txr` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hist_ini_sesion`
--

INSERT INTO `hist_ini_sesion` (`his_id`, `his_rut_ini`, `his_fch_txr`) VALUES
(18, 17679644, '2018-04-29 04:06:17'),
(19, 17679644, '2018-04-29 10:39:25'),
(20, 17679644, '2018-04-29 10:44:49'),
(21, 17679644, '2018-04-29 10:55:39'),
(22, 17679644, '2018-04-29 12:45:59'),
(23, 17319727, '2018-04-29 13:44:11'),
(24, 17319727, '2018-04-29 13:44:42'),
(25, 17679644, '2018-04-29 14:13:48'),
(26, 17319727, '2018-04-29 14:16:49'),
(27, 17679644, '2018-04-29 14:27:30'),
(28, 17679644, '2018-04-29 14:29:54'),
(29, 17319727, '2018-04-29 14:31:05'),
(30, 17679644, '2018-04-29 14:32:26'),
(31, 17679644, '2018-04-29 14:37:01'),
(32, 17319727, '2018-04-29 14:37:12'),
(33, 17679644, '2018-04-29 14:37:53'),
(34, 17319727, '2018-04-29 14:38:14'),
(35, 17679644, '2018-04-29 16:56:19'),
(36, 17679644, '2018-04-29 17:01:15'),
(37, 17679644, '2018-04-29 17:15:51'),
(38, 17679644, '2018-04-29 17:52:49'),
(39, 17679644, '2018-04-29 18:13:41'),
(40, 17679644, '2018-04-29 18:17:29'),
(41, 17679644, '2018-04-29 19:50:50'),
(42, 17679644, '2018-04-29 19:52:28'),
(43, 17679644, '2018-04-30 14:33:43'),
(44, 17679644, '2018-04-30 14:34:56'),
(45, 17679644, '2018-04-30 14:54:23'),
(46, 17679644, '2018-04-30 14:56:44'),
(47, 17679644, '2018-04-30 15:13:05'),
(48, 17679644, '2018-04-30 15:22:46'),
(49, 17319727, '2018-04-30 15:23:18'),
(50, 17679644, '2018-04-30 15:24:33'),
(51, 17679644, '2018-04-30 22:00:22'),
(52, 17679644, '2018-04-30 22:13:16'),
(53, 17319727, '2018-04-30 22:16:17'),
(54, 17319727, '2018-04-30 22:16:41'),
(55, 17679644, '2018-04-30 22:20:11'),
(56, 17679644, '2018-05-01 01:33:47'),
(57, 17679644, '2018-05-01 03:40:43'),
(58, 17679644, '2018-05-01 23:25:08'),
(59, 17679644, '2018-05-01 23:32:04'),
(60, 17679644, '2018-05-01 23:32:09'),
(61, 17679644, '2018-05-01 23:45:04'),
(62, 17679644, '2018-05-01 23:48:19'),
(63, 17679644, '2018-05-02 01:18:50'),
(64, 17679644, '2018-05-02 01:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `Operaciones`
--

CREATE TABLE `Operaciones` (
  `idOperaciones` int(11) NOT NULL,
  `nombreOperacion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Operaciones`
--

INSERT INTO `Operaciones` (`idOperaciones`, `nombreOperacion`) VALUES
(1, 'Agrega Usuario'),
(2, 'Modifica Usuario'),
(3, 'Activa Usuario'),
(4, 'Desactiva Usuario'),
(5, 'Error al activar/desactivar usuario'),
(6, 'Agrega archivo zip');

-- --------------------------------------------------------

--
-- Table structure for table `persona`
--

CREATE TABLE `persona` (
  `per_rut` int(11) NOT NULL,
  `per_nombre` varchar(45) NOT NULL,
  `per_apellido_paterno` varchar(45) DEFAULT NULL,
  `per_apellido_materno` varchar(45) DEFAULT NULL,
  `per_fac_id` int(11) DEFAULT NULL,
  `per_carr_id` int(11) DEFAULT NULL,
  `per_password` varchar(45) DEFAULT NULL,
  `per_tusu_id` int(11) DEFAULT NULL,
  `per_digito_verificador` varchar(1) DEFAULT NULL,
  `per_estado` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persona`
--

INSERT INTO `persona` (`per_rut`, `per_nombre`, `per_apellido_paterno`, `per_apellido_materno`, `per_fac_id`, `per_carr_id`, `per_password`, `per_tusu_id`, `per_digito_verificador`, `per_estado`) VALUES
(17319727, 'Catalina', 'Guerino', 'Salinas', 1, 1, '1234', 1, '6', 0),
(17679644, 'Simon Andre', 'Bravo', 'Carrasco', 1, 1, '1234', 1, '8', 0),
(22222222, 'asd', 'qwweq', '12ewq', 1, 1, '123455', 2, '2', 1),
(62290692, 'Nelson', 'Bravo', 'ChacÃ³n', 1, 1, '12u3ij12o', 2, NULL, 0),
(111111111, 'simon', 'prueba', 'deprueba', NULL, NULL, '12345', NULL, NULL, 1),
(178366297, 'Claudio', 'Robles', 'Lazcano', 1, 1, '12h3i1j3', 2, NULL, 1),
(777777776, 'simon', 'bbb', 'ccc', 1, NULL, '17328', 2, NULL, 1),
(999999998, 'simon', 'pru', 'prueba', 1, 1, '6253', 2, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `RegistroOperaciones`
--

CREATE TABLE `RegistroOperaciones` (
  `idRegistroOperaciones` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `idOperaciones` int(11) DEFAULT NULL,
  `per_rut` int(11) DEFAULT NULL,
  `per_rut_modificado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RegistroOperaciones`
--

INSERT INTO `RegistroOperaciones` (`idRegistroOperaciones`, `Fecha`, `idOperaciones`, `per_rut`, `per_rut_modificado`) VALUES
(1, '2018-04-29 00:00:00', 1, 17679644, 17679644),
(2, '2018-04-29 04:24:25', 1, 17679644, NULL),
(3, '2018-05-01 02:34:25', 4, 17679644, NULL),
(4, '2018-05-01 02:35:36', 3, 17679644, NULL),
(5, '2018-05-01 02:35:43', 4, 17679644, NULL),
(6, '2018-05-01 02:35:47', 4, 17679644, NULL),
(7, '2018-05-01 23:39:02', 3, 17679644, NULL),
(8, '2018-05-01 23:42:30', 4, 17679644, NULL),
(9, '2018-05-01 23:48:24', 3, 17679644, NULL),
(10, '2018-05-01 23:48:28', 4, 17679644, NULL),
(11, '2018-05-01 23:48:39', 3, 17679644, NULL),
(12, '2018-05-01 23:48:55', 4, 17679644, NULL),
(13, '2018-05-01 23:49:21', 3, 17679644, NULL),
(14, '2018-05-01 23:49:31', 4, 17679644, NULL),
(15, '2018-05-01 23:49:37', 3, 17679644, NULL),
(16, '2018-05-01 23:53:52', 4, 17679644, NULL),
(17, '2018-05-01 23:53:55', 3, 17679644, NULL),
(18, '2018-05-01 23:53:59', 4, 17679644, NULL),
(19, '2018-05-01 23:54:00', 3, 17679644, NULL),
(20, '2018-05-02 01:13:20', 2, 17679644, NULL),
(21, '2018-05-02 01:16:00', 2, 17679644, NULL),
(22, '2018-05-02 01:16:47', 2, 17679644, NULL),
(23, '2018-05-02 01:18:58', 2, 17679644, NULL),
(24, '2018-05-02 01:20:46', 2, 17679644, NULL),
(25, '2018-05-02 01:21:25', 2, 17679644, NULL),
(26, '2018-05-02 01:22:19', 2, 17679644, NULL),
(27, '2018-05-02 01:22:30', 2, 17679644, NULL),
(28, '2018-05-02 01:23:07', 2, 17679644, NULL),
(29, '2018-05-02 01:23:38', 2, 17679644, NULL),
(30, '2018-05-02 01:24:27', 2, 17679644, NULL),
(31, '2018-05-02 01:25:19', 2, 17679644, NULL),
(32, '2018-05-02 01:25:53', 2, 17679644, NULL),
(33, '2018-05-02 02:23:36', 3, 17679644, 17319727),
(34, '2018-05-02 02:23:51', 4, 17679644, 17319727);

-- --------------------------------------------------------

--
-- Table structure for table `RegistroOperaciones_persona`
--

CREATE TABLE `RegistroOperaciones_persona` (
  `idRegistroOperaciones` int(11) NOT NULL,
  `per_rut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tusu_id` int(11) NOT NULL,
  `tusu_descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`tusu_id`, `tusu_descripcion`) VALUES
(1, 'Administrador'),
(2, 'Profesor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `fk_carrera_facultad1_idx` (`car_fac_id`);

--
-- Indexes for table `click_analisis`
--
ALTER TABLE `click_analisis`
  ADD PRIMARY KEY (`click_id`),
  ADD KEY `fk_click_analisis_1_idx` (`click_codf_id_doc`);

--
-- Indexes for table `codigo_fuente`
--
ALTER TABLE `codigo_fuente`
  ADD PRIMARY KEY (`codf_id_doc`);

--
-- Indexes for table `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `fichero`
--
ALTER TABLE `fichero`
  ADD PRIMARY KEY (`fich_id`),
  ADD KEY `fk_fichero_persona1_idx` (`fich_per_rut`);

--
-- Indexes for table `hist_ini_sesion`
--
ALTER TABLE `hist_ini_sesion`
  ADD PRIMARY KEY (`his_id`);

--
-- Indexes for table `Operaciones`
--
ALTER TABLE `Operaciones`
  ADD PRIMARY KEY (`idOperaciones`);

--
-- Indexes for table `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`per_rut`),
  ADD KEY `fk_persona_facultad1_idx` (`per_fac_id`),
  ADD KEY `fk_persona_carrera1_idx` (`per_carr_id`),
  ADD KEY `fk_persona_1_idx` (`per_tusu_id`);

--
-- Indexes for table `RegistroOperaciones`
--
ALTER TABLE `RegistroOperaciones`
  ADD PRIMARY KEY (`idRegistroOperaciones`),
  ADD KEY `fk_RegistroOperaciones_1_idx` (`idOperaciones`),
  ADD KEY `fk_RegistroOperaciones_2_idx` (`per_rut`),
  ADD KEY `PerRutIndex` (`per_rut_modificado`);

--
-- Indexes for table `RegistroOperaciones_persona`
--
ALTER TABLE `RegistroOperaciones_persona`
  ADD PRIMARY KEY (`idRegistroOperaciones`,`per_rut`),
  ADD KEY `fk_RegistroOperaciones_persona_1_idx` (`per_rut`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tusu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fichero`
--
ALTER TABLE `fichero`
  MODIFY `fich_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `hist_ini_sesion`
--
ALTER TABLE `hist_ini_sesion`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `RegistroOperaciones`
--
ALTER TABLE `RegistroOperaciones`
  MODIFY `idRegistroOperaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `fk_carrera_facultad1` FOREIGN KEY (`car_fac_id`) REFERENCES `facultad` (`fac_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `click_analisis`
--
ALTER TABLE `click_analisis`
  ADD CONSTRAINT `fk_click_analisis_1` FOREIGN KEY (`click_codf_id_doc`) REFERENCES `codigo_fuente` (`codf_id_doc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fichero`
--
ALTER TABLE `fichero`
  ADD CONSTRAINT `fk_fichero_persona1` FOREIGN KEY (`fich_per_rut`) REFERENCES `persona` (`per_rut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_1` FOREIGN KEY (`per_tusu_id`) REFERENCES `tipo_usuario` (`tusu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_carrera1` FOREIGN KEY (`per_carr_id`) REFERENCES `carrera` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_persona_facultad1` FOREIGN KEY (`per_fac_id`) REFERENCES `facultad` (`fac_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RegistroOperaciones`
--
ALTER TABLE `RegistroOperaciones`
  ADD CONSTRAINT `fk_RegistroOperaciones_1` FOREIGN KEY (`idOperaciones`) REFERENCES `Operaciones` (`idOperaciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_RegistroOperaciones_2` FOREIGN KEY (`per_rut`) REFERENCES `persona` (`per_rut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RegistroOperaciones_persona`
--
ALTER TABLE `RegistroOperaciones_persona`
  ADD CONSTRAINT `fk_RegistroOperaciones_111` FOREIGN KEY (`idRegistroOperaciones`) REFERENCES `RegistroOperaciones` (`idRegistroOperaciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_RegistroOperaciones_persona_1` FOREIGN KEY (`per_rut`) REFERENCES `persona` (`per_rut`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
