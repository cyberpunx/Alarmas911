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
-- Table structure for table `tipos_baterias`
--

DROP TABLE IF EXISTS `tipos_baterias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_baterias` (
  `tipo_bateria_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Tipos_Baterias.',
  `nombre` char(128) NOT NULL COMMENT 'nombre del tipo de bateria.',
  `observaciones` longtext COMMENT 'Observaciones sobre el tipo de baterias.',
  PRIMARY KEY (`tipo_bateria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los diferentes tipos de baterias. ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_baterias`
--

LOCK TABLES `tipos_baterias` WRITE;
/*!40000 ALTER TABLE `tipos_baterias` DISABLE KEYS */;
INSERT INTO `tipos_baterias` VALUES (1,'Energizer',NULL),(2,'Eveready',NULL),(3,'Duracell',NULL);
/*!40000 ALTER TABLE `tipos_baterias` ENABLE KEYS */;
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
