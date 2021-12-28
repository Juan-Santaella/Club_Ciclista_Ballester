-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2021 a las 22:41:09
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socios`
--

CREATE TABLE `socios` (
  `NUMERO_SOCIO` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `USUARIO` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CONTRASENA` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `NOMBRE` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `APELLIDOS` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `CORREO_ELEC` varchar(40) COLLATE utf8mb4_spanish_ci NOT NULL,
  `TELEFONO` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ROL_USER` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `socios`
--

INSERT INTO `socios` (`NUMERO_SOCIO`, `USUARIO`, `CONTRASENA`, `NOMBRE`, `APELLIDOS`, `CORREO_ELEC`, `TELEFONO`, `ROL_USER`) VALUES
('1', 'Juan', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'Juan', 'Santaella', 'juan@gmail.com', '619619619l', 'usuario'),
('2', 'Antonio', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'Antonio', 'Sánchez', 'antonio@gmail.com', '123456789', 'administración'),
('3', 'Ana', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'Ana', 'Mesa', 'ana@gmail.com', '789456123', 'administración'),
('4', 'Sergio', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'Sergio', 'González', 'sergio@gmail.com', '123456789', 'administración'),
('5', 'Freddy', 'ba3253876aed6bc22d4a6ff53d8406c6ad864195ed144ab5c87621b6c233b548baeae6956df346ec8c17f5ea10f35ee3cbc514797ed7ddd3145464e2a0bab413', 'Freddy', 'Gonzáelez', 'freddy@gmail.com', '123456', 'usuario');

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
