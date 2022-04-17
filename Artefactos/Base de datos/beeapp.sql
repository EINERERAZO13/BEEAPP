-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2022 a las 04:24:39
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beeapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actualizar_informacion`
--

CREATE TABLE `actualizar_informacion` (
  `id_actualizar_informacion` int(3) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `descripcion_producto` varchar(120) NOT NULL,
  `imagen` blob DEFAULT NULL,
  `unidad_medida` varchar(60) DEFAULT NULL,
  `cantidad` varchar(90) DEFAULT NULL,
  `ubicacion` varchar(90) DEFAULT NULL,
  `categoria` varchar(60) DEFAULT NULL,
  `fecha_actualizacion` date DEFAULT NULL,
  `id_apicultor` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(6) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `rol` varchar(60) NOT NULL,
  `contactos` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `email`, `password`, `rol`, `contactos`) VALUES
(1, 'Einer Erazo', 'einererazo@gmail.com', NULL, 'programador', '3105044598'),
(2, 'Melissa Escobar', 'vivian.escobar@misena.edu.co', NULL, 'base de datos', '3167364713');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apicultor`
--

CREATE TABLE `apicultor` (
  `id` int(6) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `identidad` varchar(60) NOT NULL,
  `password` varchar(90) NOT NULL,
  `ubicacion` varchar(15) NOT NULL,
  `contactos` varchar(15) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apicultor`
--

INSERT INTO `apicultor` (`id`, `nombre`, `identidad`, `password`, `ubicacion`, `contactos`, `fecha_nacimiento`) VALUES
(1, 'Pedro Fernandez', '1061889635', '12345', 'Popayan', '2147483647', '2012-04-03'),
(2, 'Vivian Escobar', '1123456789', '12345', 'silvia', '2147483647', '0000-00-00'),
(3, 'Johan Chilito', '321456879', '12345', 'Bolivar', '2147483647', '0000-00-00'),
(4, 'Einer Erazo', '178965412', '12345', 'Almaguer', '320654987', '0000-00-00'),
(5, 'Sebastian Peña', '17821546', '12345', 'Popayan', '322514698', '0000-00-00'),
(7, 'einer erazo', '1061986056', '12345', 'popayan', '2147483647', '2022-04-11'),
(8, 'einer erazo', '1061986056', '2536', 'llacuanas', '3105044598', '2022-04-11'),
(9, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '2022-04-11'),
(10, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '0000-00-00'),
(11, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '0000-00-00'),
(12, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '2022-04-13'),
(13, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '2022-04-30'),
(14, 'vivian escobar', '2125458', '12345', 'silvia ', '312874596', '1999-11-10'),
(15, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '2022-04-11'),
(16, 'einer erazo', '2125458', '2536', 'popayan', '3105044598', '2022-04-11'),
(17, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '2022-04-11'),
(18, 'einer erazo', '1061986056', '12345', 'ALMAGUER', '3105044598', '2022-04-14'),
(19, '', '', '', '', '', '0000-00-00'),
(20, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '2022-04-16'),
(21, '', '', '', '', '', '0000-00-00'),
(22, 'einer erazo', '1061986056', '12345', 'popayan', '3105044598', '2022-04-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(6) NOT NULL,
  `nit` varchar(60) DEFAULT NULL,
  `razon_social` varchar(90) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `ubicacion` varchar(90) DEFAULT NULL,
  `contactos` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nit`, `razon_social`, `email`, `password`, `ubicacion`, `contactos`) VALUES
(1, '10611234', 'conecquidad', 'conecquidad@gmail.com', '12345', 'llacuanas', '2147483647'),
(2, '10611234', 'conecquidad', 'einererazo@gmail.com', '12345', 'llacuanas', '3105044598'),
(3, '', '', '', '', '', ''),
(4, '1061989056', 'corporacion ccemmled', 'einererazo@gmail.com', '12345', 'llacuanas', '3105044598'),
(5, '1061989056', 'conecquidad', 'einererazo@gmail.com', '12345', 'popayan', '3105044598');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos_informativos`
--

CREATE TABLE `modulos_informativos` (
  `id_modulo_informativo` int(6) NOT NULL,
  `informacion_multimedia` blob DEFAULT NULL,
  `contactos_emergencia` int(250) DEFAULT NULL,
  `tips` varchar(500) DEFAULT NULL,
  `datos_curiosos` varchar(500) DEFAULT NULL,
  `juegos` varchar(500) DEFAULT NULL,
  `id_administrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id_ofertas` int(6) NOT NULL,
  `nombre_oferta` varchar(60) NOT NULL,
  `cantidad` int(6) NOT NULL,
  `descripcion` varchar(120) NOT NULL,
  `id_empresa` int(6) NOT NULL,
  `id_persona` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(6) NOT NULL,
  `nombre` varchar(90) DEFAULT NULL,
  `identidad` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `contactos` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nombre`, `identidad`, `email`, `password`, `contactos`) VALUES
(1, 'einer erazo', '1061986056', 'einererazo@gmail.com', '12345', '3105044598'),
(2, NULL, '1061986056', 'einererazo@gmail.com', '12345', '3105044598'),
(3, NULL, '1061986056', 'einererazo@gmail.com', '12345', '3105044598'),
(4, 'EINER ARMANDO ERAZO ROMERO', '1061986056', 'einererazo@gmail.com', '12345', '3105044598'),
(5, 'EINER ARMANDO ERAZO ROMERO', '1061986056', 'einererazo@gmail.com', '12345', '3105044598');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_productos`
--

CREATE TABLE `registro_productos` (
  `id_registro_producto` int(3) NOT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `imagen` blob NOT NULL,
  `unidad_medida` varchar(60) DEFAULT NULL,
  `cantidad` varchar(90) DEFAULT NULL,
  `categoria_producto` varchar(60) DEFAULT NULL,
  `descripcion` varchar(250) NOT NULL,
  `id_apicultor` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actualizar_informacion`
--
ALTER TABLE `actualizar_informacion`
  ADD PRIMARY KEY (`id_actualizar_informacion`),
  ADD KEY `id_APICULTOR` (`id_apicultor`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `apicultor`
--
ALTER TABLE `apicultor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulos_informativos`
--
ALTER TABLE `modulos_informativos`
  ADD PRIMARY KEY (`id_modulo_informativo`),
  ADD KEY `id_ADMINISTRATIVO` (`id_administrador`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id_ofertas`),
  ADD KEY `id_empresa` (`id_empresa`,`id_persona`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_productos`
--
ALTER TABLE `registro_productos`
  ADD PRIMARY KEY (`id_registro_producto`),
  ADD KEY `id_APICULTOR` (`id_apicultor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actualizar_informacion`
--
ALTER TABLE `actualizar_informacion`
  MODIFY `id_actualizar_informacion` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `apicultor`
--
ALTER TABLE `apicultor`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `modulos_informativos`
--
ALTER TABLE `modulos_informativos`
  MODIFY `id_modulo_informativo` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `id_ofertas` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registro_productos`
--
ALTER TABLE `registro_productos`
  MODIFY `id_registro_producto` int(3) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actualizar_informacion`
--
ALTER TABLE `actualizar_informacion`
  ADD CONSTRAINT `actualizar_informacion_ibfk_1` FOREIGN KEY (`id_apicultor`) REFERENCES `apicultor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actualizar_informacion_ibfk_2` FOREIGN KEY (`id_apicultor`) REFERENCES `apicultor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `modulos_informativos`
--
ALTER TABLE `modulos_informativos`
  ADD CONSTRAINT `modulos_informativos_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertas_ibfk_2` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `registro_productos`
--
ALTER TABLE `registro_productos`
  ADD CONSTRAINT `registro_productos_ibfk_1` FOREIGN KEY (`id_apicultor`) REFERENCES `apicultor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registro_productos_ibfk_2` FOREIGN KEY (`id_apicultor`) REFERENCES `apicultor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
