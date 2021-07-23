-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-05-2021 a las 21:44:14
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erpseuat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `estudianteId` varchar(100) DEFAULT NULL,
  `nombreCompletoAlumno` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `numeroTelefono` char(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `registroDate` timestamp NULL DEFAULT NULL,
  `actualizacionDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `estudianteId`, `nombreCompletoAlumno`, `email`, `numeroTelefono`, `password`, `status`, `registroDate`, `actualizacionDate`) VALUES
(1, '12563478', 'JOSE SANTIZ RUIZ', 'JOSE_SANTIZR1990@HOTMAIL.COM', '9612168345', '12345678', 1, '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(2, '98721450', 'FRANCISCO GOMEZ PEREZ', 'FRANCISCO_58@GMAIL.COM', '9613657849', '12345678', 1, '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(3, '00125478', 'VICTOR MANUEL GUZMAN MUELA', 'V.GUZMAN@GMAIL.COM', '9615468735', '12345678', 1, '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(4, '87324561', 'JORGE LOPEZ LOPEZ', 'JORGE@GMAIL.COM', '9655468347', '12345678', 0, '2017-07-04 18:36:16', '2017-07-04 18:36:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `nombreLibro` varchar(100) DEFAULT NULL,
  `catId` int(11) DEFAULT NULL,
  `autorId` int(11) DEFAULT NULL,
  `ISB` varchar(200) DEFAULT NULL,
  `registroDate` timestamp NULL DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `nombreLibro`, `catId`, `autorId`, `ISB`, `registroDate`, `updationDate`) VALUES
(1, 'ALGEBRA', 1, 1, '25SFS63A', '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(2, 'FISICA CUANTICA', 7, 3, '2655SA54', '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(3, 'TEORIA M Y MECANICA CUANTICA', 6, 2, '544D54SD', '2017-07-04 18:36:16', '2017-07-04 18:36:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_autores`
--

CREATE TABLE `libros_autores` (
  `id` int(11) NOT NULL,
  `nombreAutor` varchar(100) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros_autores`
--

INSERT INTO `libros_autores` (`id`, `nombreAutor`, `creationDate`, `updationDate`) VALUES
(1, 'AURELIO BALDOR', '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(2, 'ANNE RICE', '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(3, 'ISSAC NEWTON', '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(4, 'ALBERT EINSTEIN', '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(5, 'AMADO NERVO', '2017-07-04 18:36:16', '2017-07-04 18:36:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_categorias`
--

CREATE TABLE `libros_categorias` (
  `id` int(11) NOT NULL,
  `nombreCategoria` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  `creadoDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `actualizadoDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros_categorias`
--

INSERT INTO `libros_categorias` (`id`, `nombreCategoria`, `status`, `creadoDate`, `actualizadoDate`) VALUES
(1, 'Tecnologia', 1, '2017-07-04 18:35:25', '2017-07-06 16:00:42'),
(2, 'Ciencia', 1, '2017-07-04 18:35:39', '2017-07-08 17:13:03'),
(3, 'Administracion', 0, '2017-07-04 18:36:16', '2017-07-08 17:13:03'),
(4, 'Deporte', 1, '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(5, 'Salud', 1, '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(6, 'Historia', 0, '2017-07-04 18:36:16', '2017-07-04 18:36:16'),
(7, 'Ficcion', 0, '2017-07-04 18:36:16', '2017-07-04 18:36:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_prestamo`
--

CREATE TABLE `libros_prestamo` (
  `id` int(100) NOT NULL,
  `libroId` int(11) DEFAULT NULL,
  `alumnoId` int(11) DEFAULT NULL,
  `prestamoDate` timestamp NULL DEFAULT NULL,
  `devolucionDate` timestamp NULL DEFAULT NULL,
  `devolucionStatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libros_prestamo`
--

INSERT INTO `libros_prestamo` (`id`, `libroId`, `alumnoId`, `prestamoDate`, `devolucionDate`, `devolucionStatus`) VALUES
(1, 3, 3, '2017-07-04 18:36:16', '2017-07-04 18:36:16', 1),
(2, 1, 2, '2017-07-04 18:36:16', '2017-07-04 18:36:16', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombrerol` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `estatus` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombrerol`, `descripcion`, `estatus`) VALUES
(1, 'Administrador', 'Administrador del sistema', 1),
(2, 'Supervisor', 'Supervisor del departamento', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `edad`) VALUES
(1, 'VGuzmÃ¡n', 36),
(3, 'VÃ­ctor', 35),
(4, 'JSantiz', 34);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libros_FK` (`catId`),
  ADD KEY `libros_FK_1` (`autorId`);

--
-- Indices de la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros_categorias`
--
ALTER TABLE `libros_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros_prestamo`
--
ALTER TABLE `libros_prestamo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `libros_prestamo_FK` (`libroId`),
  ADD KEY `libros_prestamo_FK_1` (`alumnoId`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `libros_categorias`
--
ALTER TABLE `libros_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `libros_prestamo`
--
ALTER TABLE `libros_prestamo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_FK` FOREIGN KEY (`catId`) REFERENCES `libros_categorias` (`id`),
  ADD CONSTRAINT `libros_FK_1` FOREIGN KEY (`autorId`) REFERENCES `libros_autores` (`id`);

--
-- Filtros para la tabla `libros_prestamo`
--
ALTER TABLE `libros_prestamo`
  ADD CONSTRAINT `libros_prestamo_FK` FOREIGN KEY (`libroId`) REFERENCES `libros` (`id`),
  ADD CONSTRAINT `libros_prestamo_FK_1` FOREIGN KEY (`alumnoId`) REFERENCES `estudiante` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
