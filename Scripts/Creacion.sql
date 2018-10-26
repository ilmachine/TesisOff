-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: WSE
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Operaciones`
--

DROP TABLE IF EXISTS `Operaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Operaciones` (
  `idOperaciones` int(11) NOT NULL,
  `nombreOperacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idOperaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Operaciones`
--

LOCK TABLES `Operaciones` WRITE;
/*!40000 ALTER TABLE `Operaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `Operaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RegistroOperaciones`
--

DROP TABLE IF EXISTS `RegistroOperaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RegistroOperaciones` (
  `idRegistroOperaciones` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date DEFAULT NULL,
  `idOperaciones` int(11) DEFAULT NULL,
  `per_rut` int(11) DEFAULT NULL,
  PRIMARY KEY (`idRegistroOperaciones`),
  KEY `fk_RegistroOperaciones_1_idx` (`idOperaciones`),
  KEY `fk_RegistroOperaciones_2_idx` (`per_rut`),
  CONSTRAINT `fk_RegistroOperaciones_1` FOREIGN KEY (`idOperaciones`) REFERENCES `Operaciones` (`idOperaciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_RegistroOperaciones_2` FOREIGN KEY (`per_rut`) REFERENCES `persona` (`per_rut`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RegistroOperaciones`
--

LOCK TABLES `RegistroOperaciones` WRITE;
/*!40000 ALTER TABLE `RegistroOperaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `RegistroOperaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RegistroOperaciones_persona`
--

DROP TABLE IF EXISTS `RegistroOperaciones_persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RegistroOperaciones_persona` (
  `idRegistroOperaciones` int(11) NOT NULL,
  `per_rut` int(11) NOT NULL,
  PRIMARY KEY (`idRegistroOperaciones`,`per_rut`),
  KEY `fk_RegistroOperaciones_persona_1_idx` (`per_rut`),
  CONSTRAINT `fk_RegistroOperaciones_111` FOREIGN KEY (`idRegistroOperaciones`) REFERENCES `RegistroOperaciones` (`idRegistroOperaciones`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_RegistroOperaciones_persona_1` FOREIGN KEY (`per_rut`) REFERENCES `persona` (`per_rut`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RegistroOperaciones_persona`
--

LOCK TABLES `RegistroOperaciones_persona` WRITE;
/*!40000 ALTER TABLE `RegistroOperaciones_persona` DISABLE KEYS */;
/*!40000 ALTER TABLE `RegistroOperaciones_persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `car_id` int(11) NOT NULL,
  `car_descripcion` varchar(45) DEFAULT NULL,
  `car_fac_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`car_id`),
  KEY `fk_carrera_facultad1_idx` (`car_fac_id`),
  CONSTRAINT `fk_carrera_facultad1` FOREIGN KEY (`car_fac_id`) REFERENCES `facultad` (`fac_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Licenciatura en Ciencias de la Computacion',1);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `click_analisis`
--

DROP TABLE IF EXISTS `click_analisis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `click_analisis` (
  `click_id` int(11) NOT NULL,
  `click_link` varchar(145) DEFAULT NULL,
  `click_clicks` int(11) DEFAULT NULL,
  `click_codf_id_doc` int(11) DEFAULT NULL,
  PRIMARY KEY (`click_id`),
  KEY `fk_click_analisis_1_idx` (`click_codf_id_doc`),
  CONSTRAINT `fk_click_analisis_1` FOREIGN KEY (`click_codf_id_doc`) REFERENCES `codigo_fuente` (`codf_id_doc`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `click_analisis`
--

LOCK TABLES `click_analisis` WRITE;
/*!40000 ALTER TABLE `click_analisis` DISABLE KEYS */;
/*!40000 ALTER TABLE `click_analisis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `codigo_fuente`
--

DROP TABLE IF EXISTS `codigo_fuente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `codigo_fuente` (
  `codf_id_doc` int(11) NOT NULL,
  `cod_fuente` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codf_id_doc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `codigo_fuente`
--

LOCK TABLES `codigo_fuente` WRITE;
/*!40000 ALTER TABLE `codigo_fuente` DISABLE KEYS */;
/*!40000 ALTER TABLE `codigo_fuente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultad`
--

DROP TABLE IF EXISTS `facultad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `facultad` (
  `fac_id` int(11) NOT NULL,
  `fac_descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`fac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultad`
--

LOCK TABLES `facultad` WRITE;
/*!40000 ALTER TABLE `facultad` DISABLE KEYS */;
INSERT INTO `facultad` VALUES (1,'Facultad de Ciencias'),(2,'Facultad de Arquitectura'),(3,'Ciencia'),(4,'Fisica'),(5,'Facultad de Ciencias'),(6,'Facultad de Arquitectura'),(8,'Facultad de Ciencias');
/*!40000 ALTER TABLE `facultad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fichero`
--

DROP TABLE IF EXISTS `fichero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fichero` (
  `fich_id` int(11) NOT NULL,
  `fich_nombre` varchar(45) DEFAULT NULL,
  `fich_per_rut` int(11) DEFAULT NULL,
  `fich_fch_trx` date DEFAULT NULL,
  PRIMARY KEY (`fich_id`),
  KEY `fk_fichero_persona1_idx` (`fich_per_rut`),
  CONSTRAINT `fk_fichero_persona1` FOREIGN KEY (`fich_per_rut`) REFERENCES `persona` (`per_rut`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fichero`
--

LOCK TABLES `fichero` WRITE;
/*!40000 ALTER TABLE `fichero` DISABLE KEYS */;
/*!40000 ALTER TABLE `fichero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hist_ini_sesion`
--

DROP TABLE IF EXISTS `hist_ini_sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hist_ini_sesion` (
  `his_id` int(11) NOT NULL AUTO_INCREMENT,
  `his_rut_ini` int(11) DEFAULT NULL,
  `his_fch_txr` date DEFAULT NULL,
  `hist_ini_sesion_his_id` int(11) NOT NULL,
  PRIMARY KEY (`his_id`),
  KEY `fk_hist_ini_sesion_hist_ini_sesion1_idx` (`hist_ini_sesion_his_id`),
  CONSTRAINT `fk_hist_ini_sesion_hist_ini_sesion1` FOREIGN KEY (`hist_ini_sesion_his_id`) REFERENCES `hist_ini_sesion` (`his_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hist_ini_sesion`
--

LOCK TABLES `hist_ini_sesion` WRITE;
/*!40000 ALTER TABLE `hist_ini_sesion` DISABLE KEYS */;
/*!40000 ALTER TABLE `hist_ini_sesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  PRIMARY KEY (`per_rut`),
  KEY `fk_persona_facultad1_idx` (`per_fac_id`),
  KEY `fk_persona_carrera1_idx` (`per_carr_id`),
  KEY `fk_persona_1_idx` (`per_tusu_id`),
  CONSTRAINT `fk_persona_1` FOREIGN KEY (`per_tusu_id`) REFERENCES `tipo_usuario` (`tusu_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_persona_carrera1` FOREIGN KEY (`per_carr_id`) REFERENCES `carrera` (`car_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_persona_facultad1` FOREIGN KEY (`per_fac_id`) REFERENCES `facultad` (`fac_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persona`
--

LOCK TABLES `persona` WRITE;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` VALUES (17510746,'Bastian','Leal','Rojas',1,1,'aoa1599',1,'0');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_usuario`
--

DROP TABLE IF EXISTS `tipo_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_usuario` (
  `tusu_id` int(11) NOT NULL,
  `tusu_descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tusu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_usuario`
--

LOCK TABLES `tipo_usuario` WRITE;
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
INSERT INTO `tipo_usuario` VALUES (1,'Administrador'),(2,'Profesor');
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-21 17:44:32
