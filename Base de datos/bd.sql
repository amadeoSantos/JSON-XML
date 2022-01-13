-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2021 a las 03:31:26
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pinos`
--

CREATE TABLE `pinos` (
  `serie_pino` int(11) DEFAULT NULL,
  `nombre_comun` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_cientifico` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `especie` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `lugar_coleccion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `altura` float DEFAULT NULL,
  `grosor` float DEFAULT NULL,
  `longitud` float DEFAULT NULL,
  `diametro_copa` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pinos`
--

INSERT INTO `pinos` (`serie_pino`, `nombre_comun`, `nombre_cientifico`, `especie`, `edad`, `lugar_coleccion`, `altura`, `grosor`, `longitud`, `diametro_copa`) VALUES
(1, 'Pino azteca', 'Pinus teocote', 'Pinus teocote Schiede ex Schtldl. & Cham.', 45, 'Bosque', 15, 50, 10, 3.5),
(2, 'Pino blanco', 'Pinus chiapensis', 'P. chiapensis; (Martínez) Andresen', 30, 'Bosque', 25, 60, 20, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `contraseña` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `edad`, `sexo`, `usuario`, `contraseña`) VALUES
(1, 'Amadeo', 'Santos Vargas', 23, 'H', 'amadeo', '123'),
(2, 'Ana Celina', 'Moreno Flores ', 23, 'M', 'celina', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
