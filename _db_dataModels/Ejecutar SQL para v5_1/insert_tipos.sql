USE `alarmas_db`;

--
-- Dumping data for table `tipos_servicio`
--

LOCK TABLES `tipos_servicio` WRITE;
INSERT INTO `tipos_servicio` VALUES (1,'Reparaciones','Reparacion de sensores, sirenas, central, etc'),(2,'Cambio de Baterías','Cambio de baterías'),(3,'Instalación','Instalación de componentes');
UNLOCK TABLES;

--
-- Dumping data for table `tipos_sensores`
--


LOCK TABLES `tipos_sensores` WRITE;
INSERT INTO `tipos_sensores` VALUES (1,'Movimiento',NULL),(2,'Movimiento Anti Mascotas',NULL),(3,'Aberturas',NULL);
UNLOCK TABLES;

--
-- Dumping data for table `tipos_pago`
--

LOCK TABLES `tipos_pago` WRITE;
INSERT INTO `tipos_pago` VALUES (1,'Efectivo',NULL),(2,'Débito',NULL);
UNLOCK TABLES;

--
-- Dumping data for table `tipos_monitoreo`
--

LOCK TABLES `tipos_monitoreo` WRITE;
INSERT INTO `tipos_monitoreo` VALUES (1,'Sin Monitoreo',NULL),(2,'Full Monitoreo',NULL);
UNLOCK TABLES;

--
-- Dumping data for table `tipos_cliente`
--

LOCK TABLES `tipos_cliente` WRITE;
INSERT INTO `tipos_cliente` VALUES (1,'Default',NULL),(2,'Tipo de Cliente 2','Otro tipo de cliente');
UNLOCK TABLES;

--
-- Dumping data for table `tipos_baterias`
--

LOCK TABLES `tipos_baterias` WRITE;
INSERT INTO `tipos_baterias` VALUES (1,'Energizer',NULL),(2,'Eveready',NULL),(3,'Duracell',NULL);
UNLOCK TABLES;

--
-- Dumping data for table `modelos`
--

LOCK TABLES `modelos` WRITE;
INSERT INTO `modelos` VALUES (1,6,'Stratocaster',NULL,''),(2,6,'Telecaster',NULL,''),(3,6,'Jazzmaster',NULL,''),(4,7,'Les Paul',NULL,''),(5,7,'SG',NULL,''),(6,7,'Explorer',NULL,''),(7,8,'Gio',NULL,''),(8,1,'C5X',NULL,''),(9,2,'Concert Grand Model D',NULL,'');
UNLOCK TABLES;

--
-- Dumping data for table `marcas`
--

LOCK TABLES `marcas` WRITE;
INSERT INTO `marcas` VALUES (1,'YAMAHA',NULL),(2,'Steinway and Sons',NULL),(3,'KAWAI',NULL),(4,'Bechstein',NULL),(5,'Bosendorfer',NULL),(6,'Fender',NULL),(7,'Gibson',NULL),(8,'Ibanez',NULL);
UNLOCK TABLES;

--
-- Dumping data for table `barrios`
--

LOCK TABLES `barrios` WRITE;
INSERT INTO `barrios` VALUES (1,'Centro','Radio céntrico'),(2,'Melipal','Km 4'),(3,'Los Coihues',NULL),(4,'Casa de Piedra','Km 12');
UNLOCK TABLES;