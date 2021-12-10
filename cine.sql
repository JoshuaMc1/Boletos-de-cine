-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 23:35:30
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
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_ticket` int(11) NOT NULL,
  `nombre1` varchar(50) NOT NULL,
  `nombre2` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `identidad` varchar(15) NOT NULL,
  `desc_compra` int(11) NOT NULL,
  `silla` int(11) NOT NULL,
  `impuesto` decimal(10,2) NOT NULL,
  `total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_ticket`, `nombre1`, `nombre2`, `apellido`, `identidad`, `desc_compra`, `silla`, `impuesto`, `total`) VALUES
(1, 'Joshua ', 'David', 'Mclean', '1807200000854', 1, 1, '15.00', '115');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desc_compra`
--

CREATE TABLE `desc_compra` (
  `id_desc` int(11) NOT NULL,
  `pelicula` varchar(200) DEFAULT NULL,
  `pelicula2` varchar(200) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `desc_compra`
--

INSERT INTO `desc_compra` (`id_desc`, `pelicula`, `pelicula2`, `estado`) VALUES
(1, 'Black Widow', 'Terminator', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `desc_compra` (`desc_compra`);

--
-- Indices de la tabla `desc_compra`
--
ALTER TABLE `desc_compra`
  ADD PRIMARY KEY (`id_desc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `desc_compra`
--
ALTER TABLE `desc_compra`
  MODIFY `id_desc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`desc_compra`) REFERENCES `desc_compra` (`id_desc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
