-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para marginaciones
CREATE DATABASE IF NOT EXISTS `marginaciones` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci */;
USE `marginaciones`;


-- Volcando estructura para tabla marginaciones.cargo_juridico
CREATE TABLE IF NOT EXISTS `cargo_juridico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(260) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;



-- Volcando estructura para tabla marginaciones.correcciones
CREATE TABLE IF NOT EXISTS `correcciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) DEFAULT NULL,
  `anio` varchar(100) DEFAULT NULL,
  `numlistadoori` varchar(100) DEFAULT NULL,
  `numtramites` varchar(100) DEFAULT NULL,
  `entregadoporori` varchar(100) DEFAULT NULL,
  `fechamargiori` date DEFAULT NULL,
  `recibidopordigiori` varchar(100) DEFAULT NULL,
  `fechadigiori` date DEFAULT NULL,
  `recibidoporarchiori` varchar(100) DEFAULT NULL,
  `fechaarchiori` date DEFAULT NULL,
  `horaentradamargiori` time NOT NULL,
  `horasalidamargiori` time NOT NULL,
  `horaentradadigiori` time NOT NULL,
  `horasalidadigiori` time NOT NULL,
  `horaentradaarchiori` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=877 DEFAULT CHARSET=utf8;



-- Volcando estructura para tabla marginaciones.margi
CREATE TABLE IF NOT EXISTS `margi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NMargi1` varchar(30) NOT NULL,
  `TxtMargi1` text NOT NULL,
  `AnioP` varchar(30) NOT NULL,
  `LibroP` varchar(30) NOT NULL,
  `NPartida` varchar(30) NOT NULL,
  `Iniciales1` varchar(30) NOT NULL,
  `TipoMargi` varchar(30) NOT NULL,
  `LibroO` varchar(30) NOT NULL,
  `FolioO` varchar(30) NOT NULL,
  `FechaC` varchar(30) NOT NULL,
  `TipoP` varchar(30) NOT NULL,
  `HoraC` varchar(30) NOT NULL,
  `busquedalf` varchar(30) NOT NULL,
  `lineapdf` text NOT NULL,
  `registrador` text NOT NULL,
  `nmargpdf` varchar(30) NOT NULL,
  `cargor` text NOT NULL,
  `estado` varchar(45) NOT NULL,
  `Fechae` varchar(30) NOT NULL,
  `Horae` varchar(30) NOT NULL,
  `InicialesPDF` varchar(30) NOT NULL,
  `revestado` varchar(30) DEFAULT NULL,
  `margfin` varchar(30) NOT NULL,
  `seguimientogcm` varchar(30) NOT NULL,
  `seguimientoecm` varchar(30) NOT NULL,
  `seguimientoccgcm` varchar(30) NOT NULL,
  `seguimientoccecm` varchar(30) NOT NULL,
  `fechaevento` varchar(30) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `libro_nmargi_concat` varchar(255) GENERATED ALWAYS AS (concat(`LibroO`,'--',`NMargi1`)) STORED,
  PRIMARY KEY (`id`),
  KEY `idx_busquedalf` (`busquedalf`),
  KEY `idx_txtmargi1` (`TxtMargi1`(768)),
  KEY `idx_id` (`id`),
  KEY `idx_libro_nmargi_concat` (`libro_nmargi_concat`),
  KEY `idx_libro_concat` (`libro_nmargi_concat`),
  KEY `idx_margi_libro_margi` (`LibroO`,`NMargi1`),
  FULLTEXT KEY `busquedalf` (`busquedalf`,`TxtMargi1`),
  FULLTEXT KEY `busquedalf_2` (`busquedalf`,`TxtMargi1`)
) ENGINE=InnoDB AUTO_INCREMENT=162004 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla marginaciones.municipios
CREATE TABLE IF NOT EXISTS `municipios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `municipio` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4237 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla marginaciones.notarios
CREATE TABLE IF NOT EXISTS `notarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `cargojuridico` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17148 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla marginaciones.regimenes
CREATE TABLE IF NOT EXISTS `regimenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regimen` varchar(260) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla marginaciones.tipos
CREATE TABLE IF NOT EXISTS `tipos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla marginaciones.tipo_marginacion
CREATE TABLE IF NOT EXISTS `tipo_marginacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(260) NOT NULL,
  `tipo` text NOT NULL,
  `grupo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla marginaciones.tipo_partida
CREATE TABLE IF NOT EXISTS `tipo_partida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_partida` varchar(150) NOT NULL,
  `iniciales_partida` varchar(150) NOT NULL,
  `grupo_partida` varchar(150) NOT NULL,
  `tipo_unico` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla marginaciones.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `iniciales` varchar(30) NOT NULL,
  `fechac` varchar(30) NOT NULL,
  `horac` varchar(30) NOT NULL,
  `fechae` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `idpregunta` varchar(30) NOT NULL,
  `respuesta` text NOT NULL,
  `correo` text NOT NULL,
  `horae` varchar(30) DEFAULT NULL,
  `esta_habilitado` tinyint(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8mb4;

