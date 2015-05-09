-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2015 a las 17:48:18
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alarmas_db`
--
CREATE DATABASE IF NOT EXISTS `alarmas_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `alarmas_db`;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`persona_id`, `nombre_persona`, `apellido`, `direccion`, `telefono_fijo`, `telefono_celular`, `dni`, `email`, `telefono_alt`, `usuario`, `contrasena`) VALUES
(1, 'Persona_test', 'Test', 'Calle test 1234', '555 1234', '15 12345', 12345678, 'test@test.com', '555 4321', 'testuser', 'testing'),
(2, 'Persona_test2', 'Testing', 'Calle Test 0987', '555 0987', '15 0987', 9876543, 'test2@test.com', '555 123456', 'test2', 'testing');

--
-- Volcado de datos para la tabla `tipos_cliente`
--

INSERT INTO `tipos_cliente` (`tipo_cliente_id`, `nombre_tipo_cliente`, `observaciones_tipo_cliente`) VALUES
(1, 'Default', 'Tipo de cliente por defecto.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
