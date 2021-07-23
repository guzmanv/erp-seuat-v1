-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para erpseuat
CREATE DATABASE IF NOT EXISTS `erpseuat` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `erpseuat`;

-- Volcando estructura para tabla erpseuat.modulo
CREATE TABLE IF NOT EXISTS `modulo` (
  `idmodulo` bigint(20) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idmodulo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla erpseuat.modulo: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` (`idmodulo`, `titulo`, `descripcion`, `status`) VALUES
	(1, 'Dashboard', 'Dashboard', 1),
	(2, 'Usuarios', 'Usuarios del sistema', 1);
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;

-- Volcando estructura para tabla erpseuat.permisos
CREATE TABLE IF NOT EXISTS `permisos` (
  `idpermiso` bigint(20) NOT NULL AUTO_INCREMENT,
  `rolid` bigint(20) NOT NULL,
  `moduloid` bigint(20) NOT NULL,
  `r` int(11) NOT NULL DEFAULT '0',
  `w` int(11) NOT NULL DEFAULT '0',
  `u` int(11) NOT NULL DEFAULT '0',
  `d` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idpermiso`),
  KEY `rolid` (`rolid`),
  KEY `moduloid` (`moduloid`),
  CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`moduloid`) REFERENCES `modulo` (`idmodulo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla erpseuat.permisos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `permisos` DISABLE KEYS */;
INSERT INTO `permisos` (`idpermiso`, `rolid`, `moduloid`, `r`, `w`, `u`, `d`) VALUES
	(1, 1, 1, 1, 1, 1, 1),
	(2, 1, 2, 1, 1, 1, 1);
/*!40000 ALTER TABLE `permisos` ENABLE KEYS */;

-- Volcando estructura para tabla erpseuat.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `idpersona` bigint(20) NOT NULL AUTO_INCREMENT,
  `identificacion` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombres` varchar(80) COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `email_user` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `password` varchar(75) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombrefiscal` varchar(80) COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccionfiscal` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `rolid` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idpersona`),
  KEY `rolid` (`rolid`),
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rolid`) REFERENCES `rol` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla erpseuat.persona: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`idpersona`, `identificacion`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `nit`, `nombrefiscal`, `direccionfiscal`, `token`, `rolid`, `datecreated`, `status`) VALUES
	(1, '24091989', 'Abel', 'OSH', 24091989, 'info@abelosh.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'CF', 'Abel Osh', 'Ciudad de Guatemala', '', 1, '2020-10-03 02:28:53', 1),
	(2, '15932020', 'Carlos Enrrique', 'OSH', 78451210, 'carlos@info.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', '', '', '', '', 2, '2020-10-03 02:31:07', 1);
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Volcando estructura para tabla erpseuat.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `estatus` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- Volcando datos para la tabla erpseuat.rol: ~67 rows (aproximadamente)
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`id`, `nombrerol`, `descripcion`, `estatus`) VALUES
	(1, 'Administrador', 'Acceso a todo el sistema 	', 1),
	(2, 'Supervisores', 'Supervisores', 1),
	(3, 'se', 'df', 0),
	(4, 'f', 'g', 0),
	(5, 'fdfg', 'g', 0),
	(6, 'asdfsdf', 'sadfdsafds', 0),
	(7, 'dsf', 'dsgf', 0),
	(8, 'dsgds', 'gdsgfdsfg', 0),
	(9, 'fgdh', 'dfgh', 1),
	(10, 'awe', 'ert', 1),
	(11, 'hjj', 'jj', 1),
	(12, '345345', '35345', 1),
	(13, '777', '777', 1),
	(14, '888', '88', 1),
	(15, 'ghffgj', 'gfjgfhj', 1),
	(16, 'ghfjghfj', 'gfjghfj', 1),
	(17, 'José© Santiz Ruiz', 'Desarrollador móvil', 1),
	(18, 'francisco', 'sadf', 1),
	(19, 'w', 'w', 1),
	(20, 'd', 'd', 1),
	(21, '2 José Santíz Ruíz', 'Cnati', 1),
	(22, 'sdf', 'asdf', 1),
	(23, 'dd', 'd', 1),
	(24, 'dddre', 'd', 1),
	(25, 's', 's', 1),
	(26, 'ddf', 'f', 1),
	(27, 'dfsg', 'dsfg', 1),
	(28, 'xdf', 'xcf', 1),
	(29, 'dsgfadsf', 'asdf', 1),
	(30, 'd4', 'gfdfsg', 1),
	(31, 'tyy', 'y', 1),
	(32, 'sdfgd', 'sgdsgf', 1),
	(33, 'asdfae', 'asdf', 1),
	(34, '123123123123', 'dfgh', 2),
	(35, 'fgdh7', 'dfgh', 2),
	(36, 'fgdh4', 'dfgh', 2),
	(37, 'fgdh445', 'dfgh', 2),
	(38, '123123123123a', 'dfgh', 2),
	(39, 'dfg', 'fg', 1),
	(40, '123123123123af', 'dfgh', 2),
	(41, '456', '456', 1),
	(42, '123123123123af7', 'dfgh', 2),
	(43, '123123123123af7&', 'dfgh', 2),
	(44, 'ddd', 'd', 2),
	(45, 'dddr', 'd', 2),
	(46, 'fgdhd', 'dfgh', 1),
	(47, 'fgdhdd', 'dfgh', 1),
	(48, 'fgdhs', 'dfgh', 1),
	(49, 'fgdhs57', 'dfgh', 1),
	(50, 'fgdhe', 'dfgh', 1),
	(51, 'asdf', 'sadfs', 0),
	(52, 'fgdh9', 'dfgh', 1),
	(53, 'fgdh10', 'dfgh', 1),
	(54, 'fgdh99', 'dfgh', 1),
	(55, 'fgdhy', 'dfgh', 1),
	(56, 'Eliminar registro', 'Registro de prueba', 1),
	(57, 'Pech', 'dfgh', 2),
	(58, 'dr', 'd3', 1),
	(59, 'yui', 'yu', 1),
	(60, 'dfghdfgh', 'dfghdgfh', 1),
	(61, 'dsfg', 'dsfgdfsg', 1),
	(62, 'asdfasdf', 'asdf', 1),
	(63, 'asdf3', 'asdf', 1),
	(64, '909090', '909090', 1),
	(65, 'jossssssssssssssssssssssss', 'jj', 1),
	(66, 'asdfa', 'asdf', 1),
	(67, 'Tio Chantí', 'ej.', 1);
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Volcando estructura para tabla erpseuat.t_categoria_servicios
CREATE TABLE IF NOT EXISTS `t_categoria_servicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla erpseuat.t_categoria_servicios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `t_categoria_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_categoria_servicios` ENABLE KEYS */;

-- Volcando estructura para tabla erpseuat.t_servicios
CREATE TABLE IF NOT EXISTS `t_servicios` (
  `id` int(11) DEFAULT NULL,
  `codigo_servicio` int(11) DEFAULT NULL,
  `nombre_servicio` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_unidad_medida` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unit_compra` int(11) DEFAULT NULL,
  `precio_unit_venta` int(11) DEFAULT NULL,
  `precio_unit_mayoreo` int(11) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `cantidad_minima_inv` int(11) DEFAULT NULL,
  `codigo_barras` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla erpseuat.t_servicios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `t_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_servicios` ENABLE KEYS */;

-- Volcando estructura para tabla erpseuat.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla erpseuat.usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `nombre`, `edad`) VALUES
	(1, 'VGuzmÃ¡n', 36),
	(3, 'VÃ­ctor', 35),
	(4, 'JSantiz', 34);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
