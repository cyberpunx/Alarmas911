CREATE DATABASE  IF NOT EXISTS `alarmas_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `alarmas_db`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: alarmas_db
-- ------------------------------------------------------
-- Server version	5.6.12-log

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
-- Table structure for table `tipos_sensores`
--

DROP TABLE IF EXISTS `tipos_sensores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_sensores` (
  `tipo_sensor_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Tipo_Sensores.',
  `nombre_sensor` char(128) NOT NULL COMMENT 'Nombre del Tipo de sensor. ',
  `observaciones_sensor` longtext COMMENT 'Observaciones. ',
  PRIMARY KEY (`tipo_sensor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los diferentes tipos de sensores. ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_sensores`
--

LOCK TABLES `tipos_sensores` WRITE;
/*!40000 ALTER TABLE `tipos_sensores` DISABLE KEYS */;
INSERT INTO `tipos_sensores` VALUES (1,'Movimiento',NULL),(2,'Movimiento Anti Mascotas',NULL),(3,'Aberturas',NULL);
/*!40000 ALTER TABLE `tipos_sensores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-14 13:45:40
