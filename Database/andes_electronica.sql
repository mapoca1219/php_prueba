-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2020 a las 02:44:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `andes_electronica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `ciudad`) VALUES
(1, 'BARRANQUILLA'),
(2, 'CARTAGENA'),
(3, 'SOLEDAD'),
(4, 'BUCARAMANGA'),
(5, 'SANTA MARTA'),
(6, 'VILLAVICENCIO'),
(7, 'SOACHA'),
(8, 'PEREIRA'),
(9, 'BELLO'),
(10, 'VALLEDUPAR'),
(11, 'PASTO'),
(12, 'MANIZALES'),
(13, 'BUENAVENTURA'),
(14, 'NEIVA'),
(15, 'BARRANCABERMEJA'),
(16, 'PALMIRA'),
(17, 'ARMENIA'),
(18, 'SINCELEJO'),
(19, 'ITAGUI'),
(20, 'FLORIDABLANCA'),
(21, 'RIOHACHA'),
(22, 'ENVIGADO'),
(23, 'DOSQUEBRADAS'),
(24, 'TUNJA'),
(25, 'FLORENCIA'),
(26, 'URIBIA'),
(27, 'IPIALES'),
(28, 'TURBO'),
(29, 'MAICAO'),
(30, 'PIEDECUESTA'),
(31, 'YOPAL'),
(32, 'CARTAGO'),
(33, 'PITALITO'),
(34, 'CAUCASIA'),
(35, 'MALAMBO'),
(36, 'RIONEGRO'),
(37, 'LORICA'),
(38, 'JAMUNDI'),
(39, 'GUADALAJARA DE BUGA'),
(40, 'YUMBO'),
(41, 'SOGAMOSO'),
(42, 'DUITAMA'),
(43, 'GIRARDOT'),
(44, 'BOGOTA DC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `genero`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo_producto` varchar(50) NOT NULL,
  `nombre_producto` varchar(50) NOT NULL,
  `marca_producto` varchar(50) NOT NULL,
  `precio_compra` varchar(50) NOT NULL,
  `cantidad_compra` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo_producto`, `nombre_producto`, `marca_producto`, `precio_compra`, `cantidad_compra`, `id_usuario`) VALUES
(3, '9876', 'lenovo c200', 'lenovo', '45000', '2', 1),
(4, '45654', 'samsung a10', 'samsung', '450000', '34', 1),
(7, '324342', 'computador', 'hp', '3500000', '5', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombres`, `apellidos`, `correo`, `contrasena`, `telefono`, `direccion`, `fecha_nacimiento`, `id_genero`, `id_rol`, `id_ciudad`) VALUES
(1, 'Juan', 'Ordoñez', 'email@correo.com', '123', '6466576565', 'cra 34', '2020-10-13', 1, 1, 44),
(2, 'pepe', 'gonzales', 'pepe@correo.com', '123', '231312', 'calle 45', '2020-10-27', 1, 2, 43);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_producto_usuario` (`id_usuario`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_genero` (`id_genero`),
  ADD KEY `fk_usuario_rol` (`id_rol`),
  ADD KEY `fk_usuario_ciudad` (`id_ciudad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id`),
  ADD CONSTRAINT `fk_usuario_genero` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id`),
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
