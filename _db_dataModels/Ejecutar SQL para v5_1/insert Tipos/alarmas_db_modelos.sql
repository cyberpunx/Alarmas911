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
-- Table structure for table `modelos`
--

DROP TABLE IF EXISTS `modelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos` (
  `id_modelo` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `marcas_id_marca` int(11) unsigned NOT NULL,
  `nombre_modelo` char(128) NOT NULL,
  `observaciones_modelo` longtext,
  `discriminante` char(128) NOT NULL,
  PRIMARY KEY (`id_modelo`),
  KEY `Modelos_FKIndex1` (`marcas_id_marca`),
  KEY `Modelos_nombre` (`nombre_modelo`),
  CONSTRAINT `fk_{233C974E-7211-4331-95CB-4835BD0F888B}` FOREIGN KEY (`marcas_id_marca`) REFERENCES `marcas` (`id_marca`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos`
--

LOCK TABLES `modelos` WRITE;
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
INSERT INTO `modelos` VALUES (1,6,'Stratocaster',NULL,''),(2,6,'Telecaster',NULL,''),(3,6,'Jazzmaster',NULL,''),(4,7,'Les Paul',NULL,''),(5,7,'SG',NULL,''),(6,7,'Explorer',NULL,''),(7,8,'Gio',NULL,''),(8,1,'C5X',NULL,''),(9,2,'Concert Grand Model D',NULL,'');
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-14 13:45:39
