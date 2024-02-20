-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-02-2024 a las 11:25:41
-- Versión del servidor: 10.8.8-MariaDB-1:10.8.8+maria~ubu2204
-- Versión de PHP: 8.2.12

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
  `CODIGO` int(3) NOT NULL,
  `PROFESOR` int(3) DEFAULT NULL,
  `FECHA` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `HORARIO`
--

DROP TABLE IF EXISTS `HORARIO`;
CREATE TABLE `HORARIO` (
  `PROFESOR` int(3) NOT NULL,
  `DIA` varchar(10) NOT NULL,
  `HORA` int(1) NOT NULL,
  `GRUPO` varchar(10) NOT NULL,
  `AULA` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PROFESORES`
--

DROP TABLE IF EXISTS `PROFESORES`;
CREATE TABLE `PROFESORES` (
  `CODIGO` int(3) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIOS`
--

DROP TABLE IF EXISTS `USUARIOS`;
CREATE TABLE `USUARIOS` (
  `CODIGO` int(3) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `PERFIL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `USUARIOS`
--

INSERT INTO `USUARIOS` (`CODIGO`, `NOMBRE`, `PASSWORD`, `PERFIL`) VALUES
(1, 'usuario', 'usuario', 'director');

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
  MODIFY `CODIGO` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PROFESORES`
--
ALTER TABLE `PROFESORES`
  MODIFY `CODIGO` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `USUARIOS`
--
ALTER TABLE `USUARIOS`
  MODIFY `CODIGO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
