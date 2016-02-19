-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2016 a las 23:56:08
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alarmas_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accesorios`
--

CREATE TABLE IF NOT EXISTS `accesorios` (
  `accesorio_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Accesorios. ',
  `modelos_modelo_id` int(11) unsigned DEFAULT NULL,
  `baterias_bateria_id` int(11) unsigned DEFAULT NULL COMMENT 'Fk que hace referencia a la tabla Baterias.',
  `sistema_alarmas_sistema_alarma_id` int(11) unsigned NOT NULL COMMENT 'Fk que hace referencia a la tabla Sistema_Alarmas.',
  `nombre_accesorio` char(128) NOT NULL COMMENT 'Nombre del accesorio. Clave candidata. ',
  `observaciones_accesorio` longtext COMMENT 'Observaciones. ',
  PRIMARY KEY (`accesorio_id`),
  KEY `Accesorios_FKIndex1` (`sistema_alarmas_sistema_alarma_id`),
  KEY `Accesorios_FKIndex2` (`baterias_bateria_id`),
  KEY `Accesorios_FKIndex3` (`modelos_modelo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `accesorios`
--

INSERT INTO `accesorios` (`accesorio_id`, `modelos_modelo_id`, `baterias_bateria_id`, `sistema_alarmas_sistema_alarma_id`, `nombre_accesorio`, `observaciones_accesorio`) VALUES
(13, 8, NULL, 17, 'Sirena PowerNoise', ''),
(14, 12, NULL, 21, 'Alarma Silenciosa', ''),
(15, 9, NULL, 21, 'Sirena LowNoise', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activerecordlog`
--

CREATE TABLE IF NOT EXISTS `activerecordlog` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) DEFAULT NULL,
  `action` varchar(20) DEFAULT NULL,
  `model` varchar(45) DEFAULT NULL,
  `idModel` int(10) unsigned DEFAULT NULL,
  `field` varchar(45) DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userid` varchar(45) DEFAULT NULL,
  `oldValue` varchar(20) DEFAULT NULL,
  `newValue` varchar(20) DEFAULT NULL,
  `url` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=292 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE IF NOT EXISTS `barrios` (
  `barrio_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Barrio. ',
  `nombre_barrio` char(128) NOT NULL COMMENT 'Nombre del Barrio. Clave candidata',
  `observaciones_barrio` longtext COMMENT 'Observaciones. ',
  PRIMARY KEY (`barrio_id`),
  UNIQUE KEY `nombre_barrio_UNIQUE` (`nombre_barrio`),
  KEY `Barrios_nombre` (`nombre_barrio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los barrios.' AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`barrio_id`, `nombre_barrio`, `observaciones_barrio`) VALUES
(1, 'Centro', 'Radio céntrico'),
(2, 'Melipal', 'Km 4'),
(3, 'Los Coihues', NULL),
(4, 'Casa de Piedra', 'Km 12'),
(5, 'Frutillar', ''),
(6, '400 Viviendas', ''),
(7, 'Virgen Misionera', ''),
(8, 'Pinar de Festa', ''),
(10, 'Malvinas', ''),
(11, 'Omega', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baterias`
--

CREATE TABLE IF NOT EXISTS `baterias` (
  `bateria_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Baterias',
  `sistema_alarmas_sistema_alarma_id` int(11) unsigned NOT NULL,
  `modelos_modelo_id` int(11) unsigned NOT NULL,
  `tipos_baterias_tipo_bateria_id` int(11) unsigned NOT NULL COMMENT 'Fk que hace referencia a la tabla Tipos_Baterias',
  `observaciones_bateria` char(128) DEFAULT NULL COMMENT 'Observaciones sobre la Bateria.',
  `vida_util` int(11) unsigned DEFAULT NULL COMMENT 'Vida Util de la bateria, descripta en meses',
  `fecha_alta` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  PRIMARY KEY (`bateria_id`),
  KEY `Baterias_FKIndex1` (`tipos_baterias_tipo_bateria_id`),
  KEY `Baterias_FKIndex2` (`modelos_modelo_id`),
  KEY `Baterias_FKIndex3` (`sistema_alarmas_sistema_alarma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe a las Baterias. ' AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `baterias`
--

INSERT INTO `baterias` (`bateria_id`, `sistema_alarmas_sistema_alarma_id`, `modelos_modelo_id`, `tipos_baterias_tipo_bateria_id`, `observaciones_bateria`, `vida_util`, `fecha_alta`, `fecha_baja`) VALUES
(13, 17, 11, 1, 'Bateria Primaria', 2, '2015-11-03', NULL),
(14, 17, 18, 1, 'Bateria Secundaria', 2, '2015-12-01', NULL),
(15, 18, 23, 3, '', 1, '2015-10-07', NULL),
(16, 21, 22, 2, '', 1, '2015-10-06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ordenes_servicio`
--

CREATE TABLE IF NOT EXISTS `detalle_ordenes_servicio` (
  `detalle_orden_servicio_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla ',
  `ordenes_servicio_orden_servicio_id` int(11) unsigned NOT NULL,
  `tipos_servicio_tipo_servicio_id` int(11) unsigned NOT NULL,
  `descripcion_detalle_orden_servicio` char(128) DEFAULT NULL COMMENT 'descripcion del trabajo a realizar. ',
  PRIMARY KEY (`detalle_orden_servicio_id`),
  KEY `Detalle_Ordenes_Servicio_FKIndex1` (`tipos_servicio_tipo_servicio_id`),
  KEY `Detalle_Ordenes_Servicio_FKIndex2` (`ordenes_servicio_orden_servicio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=66 ;

--
-- Volcado de datos para la tabla `detalle_ordenes_servicio`
--

INSERT INTO `detalle_ordenes_servicio` (`detalle_orden_servicio_id`, `ordenes_servicio_orden_servicio_id`, `tipos_servicio_tipo_servicio_id`, `descripcion_detalle_orden_servicio`) VALUES
(55, 49, 3, 'Sistema alarma'),
(56, 49, 3, 'Sirena'),
(57, 49, 3, 'Panel'),
(61, 51, 1, 'cambio sensor humo'),
(62, 52, 3, 'Instalacion Completa'),
(63, 52, 6, 'Accesorios'),
(64, 54, 6, 'Sirena'),
(65, 56, 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `marca_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_marca` char(128) DEFAULT NULL COMMENT 'Nombre de la Marca. Clave candidata. ',
  `observaciones_marca` longtext,
  PRIMARY KEY (`marca_id`),
  UNIQUE KEY `nombre_marca_UNIQUE` (`nombre_marca`),
  KEY `Marcas_nombre` (`nombre_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`marca_id`, `nombre_marca`, `observaciones_marca`) VALUES
(1, 'General Electric', NULL),
(2, 'x28', ''),
(3, 'DSC', ''),
(4, 'Pironix', NULL),
(5, 'Bosch', ''),
(6, 'Macrotel', NULL),
(7, 'Sentinel', NULL),
(8, 'Ozom', NULL),
(9, 'Lynx Security', ''),
(10, 'Mc Garcia', ''),
(11, 'Yuasa', ''),
(12, 'RistTone', 'Marca importante de baterias de gel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE IF NOT EXISTS `modelos` (
  `modelo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `marcas_marca_id` int(11) unsigned NOT NULL,
  `nombre_modelo` char(128) NOT NULL COMMENT 'Nombre del modelo de un componente. Clave candidata. ',
  `observaciones_modelo` longtext,
  `discriminante` char(128) NOT NULL,
  PRIMARY KEY (`modelo_id`),
  KEY `Modelos_FKIndex1` (`marcas_marca_id`),
  KEY `Modelos_nombre` (`nombre_modelo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`modelo_id`, `marcas_marca_id`, `nombre_modelo`, `observaciones_modelo`, `discriminante`) VALUES
(2, 1, 'Cgg5', '', 'SEN'),
(3, 6, 'Vx402', 'Movimiento exterior infrarojo', 'SEN'),
(4, 7, 'GSM 99 ZONAS', '', 'PAN'),
(5, 2, 'Lc-1000', 'Exterior Anti Mascotas', 'SEN'),
(6, 2, 'Lc-1012', 'Magnetico', 'SEN'),
(7, 8, 'Smoke Detector', '', 'SEN'),
(8, 1, 'Power Noise', 'Sirena Grado 1', 'ACC'),
(9, 2, 'Sirena x28s01', 'Sirena Grado 2', 'ACC'),
(10, 7, 'Gsm-m', 'Modem de discado Gsm', 'ACC'),
(11, 11, 'K-800', 'Baterias 12v', 'BAT'),
(12, 2, 'Model 1098', 'Studio Upright', 'ACC'),
(13, 6, 'RG', '', 'PAN'),
(14, 3, 'Iceman', '', 'PAN'),
(15, 1, 'GC2 Grand Piano', '', 'SIA'),
(16, 4, 'B 228', '', 'SIA'),
(17, 5, 'Model 120 CL', '', 'SIA'),
(18, 11, 'Horizon', '', 'BAT'),
(19, 2, 'Voyager', '', 'SIA'),
(20, 2, 'Vision', '', 'SIA'),
(21, 12, 'Session', '', 'BAT'),
(22, 11, 'Scimitar', '', 'BAT'),
(23, 11, 'Amir', '', 'BAT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes_servicio`
--

CREATE TABLE IF NOT EXISTS `ordenes_servicio` (
  `orden_servicio_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de las Ordenes de Servicio. ',
  `fecha_emision` date NOT NULL COMMENT 'Fecha en la que se emite la Orden de Servicio.',
  `fecha_cierre` date DEFAULT NULL COMMENT 'Fecha en que la orden de Servicio se realizo. ',
  `importe` float DEFAULT NULL COMMENT 'importe.',
  `observaciones_orden_servicio` text COMMENT 'Anotaciones u observaciones que tienen que ver con la orden de servicio. ',
  `vencimiento_orden` date DEFAULT NULL COMMENT 'fecha de vencimiento de la orden -  limite para el pago del servicio. ',
  `prioridad` int(11) unsigned DEFAULT NULL COMMENT 'Prioridad de la orden de servicio. ',
  `sistema_alarmas_sistema_alarma_id` int(11) unsigned NOT NULL,
  `usuarios_usuario_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`orden_servicio_id`),
  KEY `Ordenes_Servicio_FKIndex2` (`sistema_alarmas_sistema_alarma_id`),
  KEY `fk_ordenes_servicio_usuarios1_idx` (`usuarios_usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que representa las ordenes de servicio que se realizan. \nLas mismas estan relacionadas con los tipos de servicio que provee la empresa. \n' AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `ordenes_servicio`
--

INSERT INTO `ordenes_servicio` (`orden_servicio_id`, `fecha_emision`, `fecha_cierre`, `importe`, `observaciones_orden_servicio`, `vencimiento_orden`, `prioridad`, `sistema_alarmas_sistema_alarma_id`, `usuarios_usuario_id`) VALUES
(49, '2015-12-01', '2015-12-10', 23999, 'Instalacion Sistema de Alarma', '2016-02-02', 1, 17, 103),
(51, '2016-01-06', '2016-02-07', 300, '', '2016-01-06', 0, 17, 93),
(52, '2015-11-04', '2015-12-01', 9000, '', '2015-11-06', 0, 18, 14),
(54, '2016-02-18', NULL, 1500, '', '2016-02-19', 0, 17, 93),
(56, '2016-02-19', NULL, 5600, '', '2016-02-20', 0, 20, 93);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
  `pago_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de  de la tabla Pagos. ',
  `usuarios_usuario_id` int(11) unsigned NOT NULL,
  `importe` float NOT NULL COMMENT 'Importe. ',
  `ordenes_servicio_orden_servicio_id` int(11) unsigned DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `tipos_pago_tipo_pago_id` int(11) unsigned DEFAULT NULL COMMENT 'Fk que hace referencia a la tabla Tipos_Pago',
  `informacion_pago` char(128) DEFAULT NULL COMMENT 'Utilizado para cargar informacion en un pago. Por ejemplo: El numero de factura que se pago. ',
  PRIMARY KEY (`pago_id`),
  KEY `Pagos_FKIndex1` (`tipos_pago_tipo_pago_id`),
  KEY `Pagos_FKIndex2` (`ordenes_servicio_orden_servicio_id`),
  KEY `fk_pagos_usuarios1_idx` (`usuarios_usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`pago_id`, `usuarios_usuario_id`, `importe`, `ordenes_servicio_orden_servicio_id`, `fecha`, `tipos_pago_tipo_pago_id`, `informacion_pago`) VALUES
(30, 8, 18000, NULL, '2016-01-13', 3, 'Cheque nro: 09311'),
(31, 15, 2300, NULL, '2016-02-19', 1, 'Pago anticipado por Instalacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paneles`
--

CREATE TABLE IF NOT EXISTS `paneles` (
  `panel_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Paneles',
  `baterias_bateria_id` int(11) unsigned DEFAULT NULL COMMENT 'Fk que hace referencia a la tabla Baterias',
  `modelos_modelo_id` int(11) unsigned DEFAULT NULL,
  `sistema_alarmas_sistema_alarma_id` int(11) unsigned NOT NULL COMMENT 'FK que hace referencia a la tabla Sistema_Alarmas.',
  `nombre_panel` char(128) NOT NULL,
  `observaciones_panel` longtext COMMENT 'Observaciones',
  PRIMARY KEY (`panel_id`),
  KEY `Paneles_FKIndex1` (`sistema_alarmas_sistema_alarma_id`),
  KEY `Paneles_FKIndex2` (`baterias_bateria_id`),
  KEY `Paneles_FKIndex3` (`modelos_modelo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los paneles de las alarmas. ' AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `paneles`
--

INSERT INTO `paneles` (`panel_id`, `baterias_bateria_id`, `modelos_modelo_id`, `sistema_alarmas_sistema_alarma_id`, `nombre_panel`, `observaciones_panel`) VALUES
(12, NULL, 4, 17, 'Panel Trasero', ''),
(13, NULL, 13, 18, 'Panel entrada', ''),
(14, NULL, 14, 18, 'Panel_Habitacion', ''),
(15, NULL, 14, 21, 'Panel entrada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sensores`
--

CREATE TABLE IF NOT EXISTS `sensores` (
  `sensor_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Sensores.',
  `baterias_bateria_id` int(11) unsigned DEFAULT NULL COMMENT 'Fk que hace referencia a la tabla Baterias',
  `tipos_sensores_tipo_sensor_id` int(11) unsigned NOT NULL COMMENT 'Fk que hace referencia a la tabla Tipo_Sensores. ',
  `modelos_modelo_id` int(11) unsigned DEFAULT NULL COMMENT 'Fk que hace referencia a la tabla modelos. ',
  `zonas_zona_id` int(11) unsigned NOT NULL COMMENT 'Fk que hace referencia a la tabla Zonas.',
  PRIMARY KEY (`sensor_id`),
  KEY `Sensores_FKIndex1` (`zonas_zona_id`),
  KEY `Sensores_FKIndex2` (`tipos_sensores_tipo_sensor_id`),
  KEY `Sensores_FKIndex3` (`baterias_bateria_id`),
  KEY `Sensores_FKIndex4` (`modelos_modelo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los sensores. ' AUTO_INCREMENT=52 ;

--
-- Volcado de datos para la tabla `sensores`
--

INSERT INTO `sensores` (`sensor_id`, `baterias_bateria_id`, `tipos_sensores_tipo_sensor_id`, `modelos_modelo_id`, `zonas_zona_id`) VALUES
(42, NULL, 3, 5, 107),
(43, NULL, 4, 6, 107),
(44, NULL, 1, 6, 107),
(45, NULL, 10, 7, 108),
(46, NULL, 8, 3, 109),
(47, NULL, 1, 6, 110),
(49, NULL, 1, 2, 113),
(50, NULL, 11, 5, 113),
(51, NULL, 10, 7, 114);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema_alarmas`
--

CREATE TABLE IF NOT EXISTS `sistema_alarmas` (
  `sistema_alarma_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Sistema_Alarmas',
  `nombre_sistema_alarma` char(128) NOT NULL COMMENT 'Describe el nombre que posee el sistema de alarmas. Necesario para poder diferenciarlos en algunos aspectos',
  `observaciones_sistema_alarma` char(128) DEFAULT NULL COMMENT 'Observaciones, Informacion agregada.',
  `direccion_sistema_alarma` char(128) NOT NULL,
  `activo_sistema_alarma` tinyint(4) NOT NULL DEFAULT '1',
  `barrios_barrio_id` int(11) unsigned NOT NULL COMMENT 'FK que hace referencia a Barrios',
  `tipos_monitoreo_tipo_monitoreo_id` int(11) unsigned NOT NULL COMMENT 'FK que hace referencia a Tipos_Monitoreo',
  `modelos_modelo_id` int(11) unsigned NOT NULL,
  `usuarios_usuario_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`sistema_alarma_id`),
  UNIQUE KEY `nombre_sistema_alarma_UNIQUE` (`nombre_sistema_alarma`),
  KEY `Sistema_Alarmas_FKIndex2` (`tipos_monitoreo_tipo_monitoreo_id`),
  KEY `Sistema_Alarmas_FKIndex5` (`barrios_barrio_id`),
  KEY `Sistema_Alarmas_FKIndex6` (`modelos_modelo_id`),
  KEY `Sistema_Alarmas_nombre_sistema_alarmas` (`nombre_sistema_alarma`),
  KEY `fk_sistema_alarmas_personas1_idx` (`usuarios_usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Sistemas de alarmas. \nSe refiere a la central de alarmas, al controlador. Un sistema de alarmas esta formado por mas componentes. ' AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `sistema_alarmas`
--

INSERT INTO `sistema_alarmas` (`sistema_alarma_id`, `nombre_sistema_alarma`, `observaciones_sistema_alarma`, `direccion_sistema_alarma`, `activo_sistema_alarma`, `barrios_barrio_id`, `tipos_monitoreo_tipo_monitoreo_id`, `modelos_modelo_id`, `usuarios_usuario_id`) VALUES
(17, 'OSDE Sistema 1', '', 'España 22', 1, 1, 2, 16, 8),
(18, 'Gloria Fox sistema casa', '', 'El mirador 80', 1, 1, 1, 19, 7),
(19, 'Gallardo sistema Casa', '', 'Lonquimay 111', 1, 2, 2, 19, 5),
(20, 'Goodwin Casa', '', 'Tupungato 124', 1, 2, 3, 19, 3),
(21, 'Morel-Negocio', '', 'Fenix 200', 1, 8, 2, 17, 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_baterias`
--

CREATE TABLE IF NOT EXISTS `tipos_baterias` (
  `tipo_bateria_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Tipos_Baterias.',
  `nombre` char(128) NOT NULL COMMENT 'nombre del tipo de bateria.',
  `observaciones` longtext COMMENT 'Observaciones sobre el tipo de baterias.',
  PRIMARY KEY (`tipo_bateria_id`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los diferentes tipos de baterias. ' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipos_baterias`
--

INSERT INTO `tipos_baterias` (`tipo_bateria_id`, `nombre`, `observaciones`) VALUES
(1, 'Gel', 'Si esta batería se rompe, no hay posibilidad de derrame de líquido.'),
(2, 'Agm', 'se pueden instalar “echadas” o de costado y no habrá filtración.'),
(3, 'Plomo', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_cliente`
--

CREATE TABLE IF NOT EXISTS `tipos_cliente` (
  `tipo_cliente_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Tipos_Cliente. ',
  `nombre_tipo_cliente` char(128) NOT NULL COMMENT 'Nombre del tipo de Cliente. ',
  `observaciones_tipo_cliente` longtext COMMENT 'Observaciones.',
  PRIMARY KEY (`tipo_cliente_id`),
  UNIQUE KEY `nombre_tipo_cliente_UNIQUE` (`nombre_tipo_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipos_cliente`
--

INSERT INTO `tipos_cliente` (`tipo_cliente_id`, `nombre_tipo_cliente`, `observaciones_tipo_cliente`) VALUES
(1, 'Default', NULL),
(4, 'Ex - Cliente', ''),
(5, 'Empleado', ''),
(6, 'Inactivo', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_monitoreo`
--

CREATE TABLE IF NOT EXISTS `tipos_monitoreo` (
  `tipo_monitoreo_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Tipos_Monitoreo',
  `nombre_tipo_monitoreo` char(128) NOT NULL COMMENT 'Nombre del tipo de monitoreo. ',
  `valor` int(11) unsigned DEFAULT NULL COMMENT 'Valor monetario del servicio. ',
  PRIMARY KEY (`tipo_monitoreo_id`),
  UNIQUE KEY `nombre_tipo_monitoreo_UNIQUE` (`nombre_tipo_monitoreo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que representa los tipos de monitoreo que provee la empresa. ' AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tipos_monitoreo`
--

INSERT INTO `tipos_monitoreo` (`tipo_monitoreo_id`, `nombre_tipo_monitoreo`, `valor`) VALUES
(1, 'Sin Monitoreo', 0),
(2, 'Full Monitoreo', 500),
(3, 'Monitoreo externo', 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_pago`
--

CREATE TABLE IF NOT EXISTS `tipos_pago` (
  `tipo_pago_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'identificador de la tabla Tipos_Pago.',
  `nombre_tipo_pago` char(128) NOT NULL COMMENT 'Nombre del tipo de pago. ',
  `observaciones_tipo_pago` longtext COMMENT 'Observaciones. ',
  PRIMARY KEY (`tipo_pago_id`),
  UNIQUE KEY `nombre_tipo_pago_UNIQUE` (`nombre_tipo_pago`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los diferentes tipos de pago.' AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tipos_pago`
--

INSERT INTO `tipos_pago` (`tipo_pago_id`, `nombre_tipo_pago`, `observaciones_tipo_pago`) VALUES
(1, 'Efectivo', NULL),
(2, 'Débito', NULL),
(3, 'Cheque', ''),
(4, 'Tarjeta Crédito - Mastercard', ''),
(5, 'Tarjeta Crédito - Naranja', ''),
(6, 'Tarjeta Crédito', ''),
(7, 'Transferencia', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_sensores`
--

CREATE TABLE IF NOT EXISTS `tipos_sensores` (
  `tipo_sensor_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Tipo_Sensores.',
  `nombre_sensor` char(128) NOT NULL COMMENT 'Nombre del Tipo de sensor. ',
  `observaciones_sensor` longtext COMMENT 'Observaciones. ',
  PRIMARY KEY (`tipo_sensor_id`),
  UNIQUE KEY `nombre_sensor_UNIQUE` (`nombre_sensor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los diferentes tipos de sensores. ' AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tipos_sensores`
--

INSERT INTO `tipos_sensores` (`tipo_sensor_id`, `nombre_sensor`, `observaciones_sensor`) VALUES
(1, 'Movimiento', NULL),
(2, 'Movimiento Anti Mascotas', NULL),
(3, 'Puerta - Abertura', ''),
(4, 'Ventana - Abertura', ''),
(5, 'Barrera', ''),
(6, 'Magnético - Abertura', ''),
(7, 'Movimiento - Inalámbrico', ''),
(8, 'Movimiento - Infrarrojo', ''),
(9, 'Barrera - Infrarrojo', ''),
(10, 'Sensor de Humo', ''),
(11, 'Sensor Rotura', ''),
(12, 'Movimiento cosmico', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_servicio`
--

CREATE TABLE IF NOT EXISTS `tipos_servicio` (
  `tipo_servicio_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Tipos_Servicio',
  `nombre_tipo_servicio` char(128) NOT NULL COMMENT 'Nombre del Servicio. ',
  `observaciones_tipo_servicio` longtext COMMENT 'Observaciones.',
  PRIMARY KEY (`tipo_servicio_id`),
  UNIQUE KEY `nombre_tipo_servicio_UNIQUE` (`nombre_tipo_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 COMMENT='Tabla que describe los tipos de servicio que provee la empresa. ' AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipos_servicio`
--

INSERT INTO `tipos_servicio` (`tipo_servicio_id`, `nombre_tipo_servicio`, `observaciones_tipo_servicio`) VALUES
(1, 'Reparaciones', 'Reparacion de sensores, sirenas, central, etc'),
(2, 'Cambio de Baterías', 'Cambio de baterías'),
(3, 'Instalación', 'Instalación de componentes'),
(4, 'Cobro Monitoreo', ''),
(5, 'Otro (especificar)', ''),
(6, 'Venta', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla Personas',
  `nombre` char(128) DEFAULT NULL COMMENT 'Nombre de la persona.',
  `apellido` char(128) NOT NULL COMMENT 'Apellido de la persona.',
  `email` char(128) NOT NULL COMMENT 'Email de la persona',
  `password` char(128) NOT NULL,
  `direccion` char(128) DEFAULT NULL COMMENT 'Direccion de la persona.',
  `dni` int(11) unsigned NOT NULL COMMENT 'Documento Nacional de Identidad',
  `telefono_celular` char(128) DEFAULT NULL COMMENT 'Telefono Celular',
  `telefono_fijo` char(128) DEFAULT NULL COMMENT 'Telefono Fijo',
  `telefono_alt` char(128) DEFAULT NULL COMMENT 'Telefono Alternativo de la Persona',
  `rol` char(128) NOT NULL,
  `comentarios` text,
  `empleado_funcion` char(128) DEFAULT NULL,
  `empleado_temporal` tinyint(1) DEFAULT NULL,
  `empleado_activo` tinyint(1) DEFAULT NULL,
  `cliente_direccion_cobro` char(128) DEFAULT NULL,
  `cliente_sistema_secundario_id` int(11) DEFAULT NULL,
  `cliente_factura` char(128) DEFAULT NULL,
  `cliente_razon_social` char(128) DEFAULT NULL,
  `cliente_cuit` int(11) DEFAULT NULL,
  `tipos_cliente_tipo_cliente_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `dni_UNIQUE` (`dni`),
  KEY `Personas_apellido` (`apellido`),
  KEY `Personas_dni` (`dni`),
  KEY `Personas_nombre` (`nombre`),
  KEY `fk_personas_tipos_cliente1_idx` (`tipos_cliente_tipo_cliente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=104 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `nombre`, `apellido`, `email`, `password`, `direccion`, `dni`, `telefono_celular`, `telefono_fijo`, `telefono_alt`, `rol`, `comentarios`, `empleado_funcion`, `empleado_temporal`, `empleado_activo`, `cliente_direccion_cobro`, `cliente_sistema_secundario_id`, `cliente_factura`, `cliente_razon_social`, `cliente_cuit`, `tipos_cliente_tipo_cliente_id`) VALUES
(1, '', 'admin', 'admin', 'admin', '', 123, '', '', '', 'ADMINISTRADOR', NULL, '', 0, 0, '', NULL, '', '', NULL, 1),
(3, 'Emerson', 'Goodwin', 'emerson@alarmas911.com', 'test', 'P.Moreno 1492', 13465112, '294 707989', '294 444123', '4581459', 'CLIENTE', NULL, '', 0, 0, 'P.Moreno 1492', 624, 'A', 'Good S.A', 7017042, 1),
(4, 'Viviana', 'Ramirez', 'ramirez.viviana@alarmas911.com', 'test', 'Rivadavia 1370', 83454649, '294 4703374', '294 460064', '', 'CLIENTE', NULL, '', 0, 0, 'Rivadavia 1370', 82, 'C', '', 18443133, 1),
(5, 'Carlos', 'Gallardo', 'gallardo@alarmas911.com', 'test', 'P.Moreno 3336', 28336062, '294 4630621', '294 430716', '', 'CLIENTE', NULL, NULL, NULL, NULL, 'P.Moreno 3336', 595, 'A', 'La Ferreteria', 54608663, 1),
(6, 'Diego', 'Flores', 'diego.flores@alarmas911l.com', 'test', 'Avda. San Martin 480', 10093954, '294 4774137', '294 482244', '', 'CLIENTE', NULL, '', 0, 0, 'Avda. San martin 490	', 307, 'C', '', 0, 6),
(7, 'Gloria', 'Fox', 'fox.gloria@alarmas911.com', 'test', 'El mirador 80', 32535267, '294 4292391', '294 473026', '', 'CLIENTE', NULL, NULL, NULL, NULL, 'El mirador 80', 827, 'A', 'Cerveceria La Cerveza', 42508716, 1),
(8, '', 'OSDE', 'osde.bariloche@alarmas911.com', 'test', 'España', 11239113, '294 4449613', '294 437108', '', 'CLIENTE', NULL, '', 0, 0, 'España', 310, 'A', 'OSDE', 11239113, 1),
(9, 'Juan', 'Larrosa', 'larrosa.juan@alarmas911.com', 'test', 'Tromen 44', 80198045, '294 4617493', '294 426682', '', 'CLIENTE', NULL, NULL, NULL, NULL, 'Mitre 233', 62, 'C', '', 0, 1),
(10, 'Martinez', 'Paola', 'martinez.paola@alarmas911.com', 'test', 'Pintores Argentinos 234', 11241015, '294 4029755', '294 442217', '', 'CLIENTE', NULL, NULL, NULL, NULL, 'Pintores Argentinos 234', 197, 'C', '', 0, 1),
(11, 'Carlos', 'Morel', 'morel@alarmas911.com', 'test', 'Fenix 200', 89560972, '294 4681497', '294 488302', '', 'CLIENTE', NULL, NULL, NULL, NULL, 'Fenix 200', 602, 'A', 'Morel', 13989670, 1),
(12, 'Gisela', 'Owens', 'owens.gisela', 'test', 'Lonquimay', 44602591, '294 4682129', '294 420962', '', 'CLIENTE', NULL, NULL, NULL, NULL, '6351 At St.', 537, 'C', '', 0, 1),
(13, 'Esteban', 'San Martin', 'est.sanmartin@alarmas911.com', 'test', 'Tupungato 422', 55908474, '294 4476581', '294 462484', '', 'CLIENTE', NULL, NULL, NULL, NULL, 'Tupungato 433', 846, 'B', '', 0, 1),
(14, 'Omar', 'Morales', 'morales@alarmas911.com', 'test', 'Enflein 400', 65483635, '294 4063240', '294 486545', '', 'CLIENTE', NULL, 'Instalador', 0, 1, '', 0, '', '', 0, 5),
(15, 'Stewie', 'Griffith', 'stewie@alarmas911.com', 'test', 'Mitre 544', 11059319, '294 4302757', '294 448789', '', 'CLIENTE', NULL, NULL, NULL, NULL, '', 691, 'A', 'Nike', 64663826, 1),
(75, 'Ines', 'Rosas', 'ines.rosas@alarmas911.com', 'test', 'Cerro otto', 61844180, '294 4916840', '294 455229', '', 'CLIENTE', NULL, NULL, NULL, NULL, 'Cerro Otto 111', 396, 'C', '', 0, 1),
(93, 'Maris', 'Maldonado', 'maldonado@alarmas911.com', 'test', 'Avda.Los Pioneros S/N', 34437061, '294 4572162', '294 412535', '', 'CLIENTE', NULL, 'Reparaciones', 0, 1, 'Avda.Los Pioneros S/N', 0, '', '', 0, 5),
(103, 'Juan', 'Balcone', 'balcone@alarmas911.com', 'test', 'Av.San Martin 1061', 31943123, '4325435', '345345345', '', 'CLIENTE', NULL, 'Instalador', 1, 1, 'Av.San Martin 1061', NULL, '', '', NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE IF NOT EXISTS `zonas` (
  `zona_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'identificador de la tabla Zonas.',
  `sistema_alarmas_sistema_alarma_id` int(11) unsigned NOT NULL COMMENT 'Fk que hace referencia a la tabla Sistema_Alarmas',
  `nombre_zona` char(128) NOT NULL COMMENT 'Nombre de la zona.',
  `observaciones_zona` longtext COMMENT 'Observaciones',
  PRIMARY KEY (`zona_id`),
  KEY `Zonas_FKIndex1` (`sistema_alarmas_sistema_alarma_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 PACK_KEYS=0 AUTO_INCREMENT=118 ;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`zona_id`, `sistema_alarmas_sistema_alarma_id`, `nombre_zona`, `observaciones_zona`) VALUES
(107, 17, 'Entrada', ''),
(108, 17, 'Despacho', ''),
(109, 17, 'Patio Trasero', ''),
(110, 18, 'Entrada', ''),
(111, 18, 'Comedor', ''),
(112, 18, 'Baño', ''),
(113, 21, 'Baño', ''),
(114, 21, 'Cocina', ''),
(115, 21, 'Living/Comedor', ''),
(116, 21, 'Garage', ''),
(117, 21, 'Entrada', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accesorios`
--
ALTER TABLE `accesorios`
  ADD CONSTRAINT `fk_{E24A1639-8C2D-42F8-917F-355F7B3F1406}` FOREIGN KEY (`sistema_alarmas_sistema_alarma_id`) REFERENCES `sistema_alarmas` (`sistema_alarma_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{E50A7048-9220-48C2-AB8C-35576BC1ADFF}` FOREIGN KEY (`modelos_modelo_id`) REFERENCES `modelos` (`modelo_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `baterias`
--
ALTER TABLE `baterias`
  ADD CONSTRAINT `fk_{39A4FA76-68F7-450E-B7FD-F56E019667F2}` FOREIGN KEY (`tipos_baterias_tipo_bateria_id`) REFERENCES `tipos_baterias` (`tipo_bateria_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{3A7156BF-5444-4B6D-9C3A-4DC65F450E48}` FOREIGN KEY (`modelos_modelo_id`) REFERENCES `modelos` (`modelo_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{FBFF92E3-E8AB-451E-8169-33390C4291A5}` FOREIGN KEY (`sistema_alarmas_sistema_alarma_id`) REFERENCES `sistema_alarmas` (`sistema_alarma_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_ordenes_servicio`
--
ALTER TABLE `detalle_ordenes_servicio`
  ADD CONSTRAINT `fk_{5305367F-D8FA-492E-AE1A-E67E196BE98A}` FOREIGN KEY (`tipos_servicio_tipo_servicio_id`) REFERENCES `tipos_servicio` (`tipo_servicio_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{A42B40C4-0678-4F85-A4E6-4CEB459073A8}` FOREIGN KEY (`ordenes_servicio_orden_servicio_id`) REFERENCES `ordenes_servicio` (`orden_servicio_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `fk_{233C974E-7211-4331-95CB-4835BD0F888B}` FOREIGN KEY (`marcas_marca_id`) REFERENCES `marcas` (`marca_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ordenes_servicio`
--
ALTER TABLE `ordenes_servicio`
  ADD CONSTRAINT `fk_ordenes_servicio_usuarios1` FOREIGN KEY (`usuarios_usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{8B252882-5D05-4531-A949-308E456558D4}` FOREIGN KEY (`sistema_alarmas_sistema_alarma_id`) REFERENCES `sistema_alarmas` (`sistema_alarma_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `fk_pagos_usuarios1` FOREIGN KEY (`usuarios_usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{A3ABD81F-10DC-42BA-BA9A-C82DD8A7D021}` FOREIGN KEY (`tipos_pago_tipo_pago_id`) REFERENCES `tipos_pago` (`tipo_pago_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `paneles`
--
ALTER TABLE `paneles`
  ADD CONSTRAINT `fk_{9806A91B-9A58-4B98-9604-905C9FE0F735}` FOREIGN KEY (`baterias_bateria_id`) REFERENCES `baterias` (`bateria_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{981BB41E-5AAB-46D5-B3BE-C0BB8750BAE7}` FOREIGN KEY (`modelos_modelo_id`) REFERENCES `modelos` (`modelo_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{E7F0B3C2-40DB-4BBA-9DB1-19BED8B10D7C}` FOREIGN KEY (`sistema_alarmas_sistema_alarma_id`) REFERENCES `sistema_alarmas` (`sistema_alarma_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sensores`
--
ALTER TABLE `sensores`
  ADD CONSTRAINT `fk_{066B2417-C731-4057-8852-7153B47A2296}` FOREIGN KEY (`tipos_sensores_tipo_sensor_id`) REFERENCES `tipos_sensores` (`tipo_sensor_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{A75BC219-0BF5-4D24-BE33-0F7DAFAF7105}` FOREIGN KEY (`zonas_zona_id`) REFERENCES `zonas` (`zona_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{E8D7DF2B-5F1A-4FDA-B784-FA3E302A950E}` FOREIGN KEY (`modelos_modelo_id`) REFERENCES `modelos` (`modelo_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sistema_alarmas`
--
ALTER TABLE `sistema_alarmas`
  ADD CONSTRAINT `fk_sistema_alarmas_usuarios` FOREIGN KEY (`usuarios_usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{50921D8E-B05E-479E-827C-FE12A375116A}` FOREIGN KEY (`barrios_barrio_id`) REFERENCES `barrios` (`barrio_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{897F8BA1-E539-4AC2-AC75-7BBB3C0483AB}` FOREIGN KEY (`modelos_modelo_id`) REFERENCES `modelos` (`modelo_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_{D8EAB0A6-4E62-4BE9-89C5-DC6EB1C23939}` FOREIGN KEY (`tipos_monitoreo_tipo_monitoreo_id`) REFERENCES `tipos_monitoreo` (`tipo_monitoreo_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_personas_tipos_cliente1` FOREIGN KEY (`tipos_cliente_tipo_cliente_id`) REFERENCES `tipos_cliente` (`tipo_cliente_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD CONSTRAINT `fk_{6A5C68BC-5DF6-4117-9CA7-5FE7994CF0EC}` FOREIGN KEY (`sistema_alarmas_sistema_alarma_id`) REFERENCES `sistema_alarmas` (`sistema_alarma_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
