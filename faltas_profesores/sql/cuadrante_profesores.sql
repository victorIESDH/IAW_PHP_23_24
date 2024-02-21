-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-02-2024 a las 16:33:01
-- Versión del servidor: 8.0.34-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuadrante_profesores`
--
CREATE DATABASE IF NOT EXISTS `cuadrante_profesores` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci;
USE `cuadrante_profesores`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `FALTAS`
--
DROP TABLE IF EXISTS `FALTAS`;
CREATE TABLE `FALTAS` (
  `CODIGO` int NOT NULL,
  `PROFESOR` int DEFAULT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `FALTAS`
--

INSERT INTO `FALTAS` (`CODIGO`, `PROFESOR`, `FECHA`) VALUES
(1, 1, '2024-02-20'),
(2, 4, '2024-02-22'),
(4, 3, '2024-03-01'),
(6, 5, '2024-02-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HORARIO`
--
DROP TABLE IF EXISTS `HORARIO`;
CREATE TABLE `HORARIO` (
  `PROFESOR` int NOT NULL,
  `DIA` varchar(10) COLLATE utf8mb3_spanish_ci NOT NULL,
  `HORA` int NOT NULL,
  `GRUPO` varchar(10) COLLATE utf8mb3_spanish_ci NOT NULL,
  `AULA` varchar(20) COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `HORARIO`
--

INSERT INTO `HORARIO` (`PROFESOR`, `DIA`, `HORA`, `GRUPO`, `AULA`) VALUES
(1, 'Jueves', 1, '1 SMR', 'INF 1.9'),
(1, 'Jueves', 2, '1 SMR', 'INF 1.9'),
(1, 'Jueves', 3, '2 ASIR', 'INF 3'),
(1, 'Jueves', 4, '2 ASIR', 'INF 3'),
(1, 'Lunes', 1, '2 ASIR', 'INF 3'),
(1, 'Lunes', 2, '2 ASIR', 'INF 3'),
(1, 'Lunes', 5, '1 SMR', 'INF 1.9'),
(1, 'Lunes', 6, '1 SMR', 'INF 1.9'),
(1, 'Martes', 2, '2 ASIR', 'INF 3'),
(1, 'Martes', 5, '2 ASIR', 'INF 3'),
(1, 'Miércoles', 1, '1 SMR', 'INF 1.9'),
(1, 'Miércoles', 2, '1 SMR', 'INF 1.9'),
(1, 'Miércoles', 3, '2 ASIR', 'INF 3'),
(1, 'Miércoles', 4, '2 ASIR', 'INF 3'),
(1, 'Viernes', 2, '2 ASIR', 'INF 3'),
(1, 'Viernes', 3, '2 ASIR', 'INF 3'),
(1, 'Viernes', 4, '1 SMR', 'INF 1.9'),
(1, 'Viernes', 5, '1 SMR', 'INF 1.9'),
(5, 'Jueves', 1, '2 SMR', 'INF 2'),
(5, 'Jueves', 2, '2 SMR', 'INF 2'),
(5, 'Jueves', 3, '1 ASIR', 'INF 3'),
(5, 'Jueves', 4, '1 ASIR', 'INF 3'),
(5, 'Lunes', 5, '1 ASIR', 'INF 3'),
(5, 'Lunes', 6, '1 ASIR', 'INF 3'),
(5, 'Martes', 3, '1 ASIR', 'INF 3'),
(5, 'Martes', 4, '1 ASIR', 'INF 3'),
(5, 'Miércoles', 1, '2 ASIR', 'INF 4'),
(5, 'Miércoles', 2, '2 ASIR', 'INF 4'),
(5, 'Miércoles', 5, '1 ASIR', 'INF 3'),
(5, 'Miércoles', 6, '1 ASIR', 'INF 3'),
(5, 'Viernes', 1, '2 SMR', 'INF 2'),
(5, 'Viernes', 2, '2 SMR', 'INF 2'),
(5, 'Viernes', 4, '2 SMR', 'INF 2'),
(5, 'Viernes', 5, '1 ASIR', 'INF 3'),
(5, 'Viernes', 6, '1 ASIR', 'INF 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PROFESORES`
--
DROP TABLE IF EXISTS `PROFESORES`;
CREATE TABLE `PROFESORES` (
  `CODIGO` int NOT NULL,
  `NOMBRE` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `PROFESORES`
--

INSERT INTO `PROFESORES` (`CODIGO`, `NOMBRE`) VALUES
(1, 'Javier'),
(2, 'Víctor'),
(3, 'Jesús'),
(4, 'Álvaro'),
(5, 'Diego'),
(6, 'Mariola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--
DROP TABLE IF EXISTS `USUARIOS`;
CREATE TABLE `USUARIOS` (
  `CODIGO` int NOT NULL,
  `NOMBRE` varchar(30) COLLATE utf8mb3_spanish_ci NOT NULL,
  `PASSWORD` varchar(30) COLLATE utf8mb3_spanish_ci NOT NULL,
  `PERFIL` varchar(20) COLLATE utf8mb3_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`CODIGO`, `NOMBRE`, `PASSWORD`, `PERFIL`) VALUES
(1, 'usuario', 'usuario', 'direccion'),
(2, 'profesor', 'profesor', 'profesor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `FALTAS`
--
ALTER TABLE `FALTAS`
  ADD PRIMARY KEY (`CODIGO`),
  ADD KEY `FK_FALTA_PROF` (`PROFESOR`);

--
-- Indices de la tabla `HORARIO`
--
ALTER TABLE `HORARIO`
  ADD PRIMARY KEY (`PROFESOR`,`DIA`,`HORA`);

--
-- Indices de la tabla `PROFESORES`
--
ALTER TABLE `PROFESORES`
  ADD PRIMARY KEY (`CODIGO`);

--
-- Indices de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  ADD PRIMARY KEY (`CODIGO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `FALTAS`
--
ALTER TABLE `FALTAS`
  MODIFY `CODIGO` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `PROFESORES`
--
ALTER TABLE `PROFESORES`
  MODIFY `CODIGO` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `CODIGO` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `FALTAS`
--
ALTER TABLE `FALTAS`
  ADD CONSTRAINT `FK_FALTA_PROF` FOREIGN KEY (`PROFESOR`) REFERENCES `PROFESORES` (`CODIGO`);

--
-- Filtros para la tabla `HORARIO`
--
ALTER TABLE `HORARIO`
  ADD CONSTRAINT `FK_PROFESOR` FOREIGN KEY (`PROFESOR`) REFERENCES `PROFESORES` (`CODIGO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
