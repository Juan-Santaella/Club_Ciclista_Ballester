-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2021 a las 21:47:04
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ballester`
--
CREATE DATABASE IF NOT EXISTS `ballester` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `ballester`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `NUMERO_SOCIO` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `USUARIO` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CONTRASENA` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `NOMBRE` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `APELLIDOS` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CORREO_ELEC` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `TELEFONO` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ROL_USER` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'socio'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`NUMERO_SOCIO`, `USUARIO`, `CONTRASENA`, `NOMBRE`, `APELLIDOS`, `CORREO_ELEC`, `TELEFONO`, `ROL_USER`) VALUES
('1', '1', '1', '1', '1', '1@gmail.com', '1', 'socio'),
('12', '12', '12', '12', '12', '1@gmail.com', '12', 'socio'),
('15', 'Juan', '1234', 'Juan', 'Santaella', 'juan@gmail.com', '123456', 'socio'),
('2', '2', '2', '2', '2', '1@gmail.com', '2', 'socio'),
('4', '4', '4', '4', '4', '1@gmail.com', '4', 'socio'),
('45', '45', '45', '45', '45', '1@gmail.com', '45', 'socio'),
('56', '56', '56', '56', '56', '1@gmail.com', '56', 'socio'),
('8', '8', '8', '8', '8', '1@gmail.com', '8', 'socio'),
('82', '82', '82', '82', '82', '1@gmail.com', '82', 'socio'),
('89', '89', '89', '89', '89', '1@gmail.com', '89', 'socio'),
('9', '9', '9', '9', '9', '1@gmail.com', '9', 'socio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`NUMERO_SOCIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
