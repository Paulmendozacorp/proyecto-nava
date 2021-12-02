-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 09:51:28
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_jmas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `correoele` varchar(30) NOT NULL,
  `fechaCita` date NOT NULL,
  `telefono` int(10) NOT NULL,
  `horario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombre`, `apellido`, `correoele`, `fechaCita`, `telefono`, `horario`) VALUES
(3, 'Andres', 'Perez', 'aaaass@hallj.com', '2020-02-21', 133131, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `fechaingreso` varchar(50) NOT NULL,
  `turno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido`, `fechaNacimiento`, `direccion`, `fechaingreso`, `turno`) VALUES
(1, 'Paul', 'Mendoza', '2002-04-29', 'Los portales 45353', '2049-08-01', 'Matutino'),
(23, 'Paul', 'Mendoza', '2002-05-26', 'Misiones de creel 2321', '2020-10-23', 'Matutino'),
(24, 'Julio', 'Nataren', '2002-05-26', 'ecuatorial 8383', '2020-10-23', 'vespertino'),
(25, 'Emanuel', 'Segura', '2002-05-24', 'santa lucia 2331', '2020-10-23', 'Matutino'),
(28, 'Juan', 'Martines', '2002-05-25', 'las torres 3434', '2020-09-09', 'vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo`
--

CREATE TABLE `recibo` (
  `id_recibo` int(5) NOT NULL,
  `precio` int(8) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `numfactura` varchar(5) NOT NULL,
  `metrosCubicos` int(4) NOT NULL,
  `Giro` varchar(50) NOT NULL,
  `totalPagar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recibo`
--

INSERT INTO `recibo` (`id_recibo`, `precio`, `direccion`, `numfactura`, `metrosCubicos`, `Giro`, `totalPagar`) VALUES
(1, 500, 'Hacienda el paraiso 3332', '2142', 121, 'casa', 550),
(2, 998, 'santa lucia', '3232', 424, 'Negocio', 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` int(10) NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL,
  `Contra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `direccion`, `telefono`, `CorreoElectronico`, `Contra`) VALUES
(3, 'Alonso', 'Martinez', 'las torres 3434', 131331, 'ldlssl@lll.com', 'wttrggt'),
(4, 'Jisoo', 'Kim', 'ecuatorial', 5353353, 'jisoo@gmail.com', 'qASDFGHJ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `recibo`
--
ALTER TABLE `recibo`
  ADD PRIMARY KEY (`id_recibo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `recibo`
--
ALTER TABLE `recibo`
  MODIFY `id_recibo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
