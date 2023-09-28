-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2023 a las 06:37:39
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `snb`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Entradas` ()   BEGIN
    SELECT ca.nombreCategoria,
                           ta.numeroTallas,
                           pr.idProducto,
                           pr.nombreProducto,
                           en.cantidadEntrada,
                           en.fechaEntrada
                    FROM producto pr
                    INNER JOIN categoria ca ON pr.idCategoria = ca.idCategoria
                    INNER JOIN tallas ta ON pr.idTallas = ta.idTallas
                    INNER JOIN entrada en ON pr.idProducto = en.idProducto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insumos` ()   BEGIN
    SELECT idInsumos, tipoInsumos, cantidadInsumos, fechaInsumos FROM insumos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Produccion` ()   BEGIN
    SELECT idProduccion, nombreProduccion, fechaInicio, fechaEntrega, cantidadEntrega, cantidadSolicitada, estadoProduccion FROM produccion;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(10) UNSIGNED NOT NULL,
  `nombreCategoria` varchar(20) DEFAULT NULL,
  `descCategoria` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`, `descCategoria`) VALUES
(1, 'Pantalones', 'Pantalon unisex'),
(2, 'Zapatos', 'Zapatos especializados para bikers'),
(3, 'Mochilas', 'Mochilas con diseños particulares para cualquier ocasion'),
(4, 'Medias', 'Medias con diseños para cualquier situacios'),
(5, 'Chaquetas', 'Chaquetas ideales para dias de bike');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idCiudades` int(11) NOT NULL,
  `nomCiudades` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idCiudades`, `nomCiudades`) VALUES
(1, 'Bogota'),
(2, 'Barranquilla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `idEntrada` int(10) UNSIGNED NOT NULL,
  `cantidadEntrada` int(11) DEFAULT NULL,
  `fechaEntrada` date DEFAULT NULL,
  `idProducto` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`idEntrada`, `cantidadEntrada`, `fechaEntrada`, `idProducto`) VALUES
(22, 1, '2023-09-01', 13),
(23, 10, '2023-09-19', 14),
(24, 10, '2023-09-19', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `idInsumos` int(10) UNSIGNED NOT NULL,
  `cantidadInsumos` int(11) DEFAULT NULL,
  `tipoInsumos` varchar(20) DEFAULT NULL,
  `fechaInsumos` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`idInsumos`, `cantidadInsumos`, `tipoInsumos`, `fechaInsumos`) VALUES
(1, 25, 'Cordones Negros', '2023-09-01'),
(2, 30, 'Cordones Blancos', '2023-09-01'),
(3, 25, 'Cordones Cafés', '2023-09-02'),
(4, 20, 'Cordones Verdes', '2023-08-31'),
(5, 40, 'Cordones Rojos', '2023-09-02'),
(6, 30, 'Cordones Morados', '2023-09-02'),
(7, 30, 'Zuela Amarilla', '2023-09-14'),
(8, 30, 'Zuela Cafe', '2023-09-09'),
(10, 25, 'Zuela Negra', '2023-09-01'),
(20, 10, 'Engrapador', '2023-09-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(10) UNSIGNED NOT NULL,
  `fechaPedido` date DEFAULT NULL,
  `tipoPedido` varchar(11) DEFAULT NULL,
  `estadoPedido` varchar(11) DEFAULT NULL,
  `valorPedido` float DEFAULT NULL,
  `idUsuarios` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `idPermisos` int(11) NOT NULL,
  `tipoPermisos` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idPermisos`, `tipoPermisos`) VALUES
(1, 'Visualizacion'),
(2, 'Modificacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `idProduccion` int(10) UNSIGNED NOT NULL,
  `nombreProduccion` varchar(30) DEFAULT NULL,
  `idPedido` int(10) UNSIGNED DEFAULT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaEntrega` date DEFAULT NULL,
  `cantidadEntrega` int(11) DEFAULT NULL,
  `cantidadSolicitada` int(11) DEFAULT NULL,
  `estadoProduccion` varchar(20) DEFAULT NULL,
  `idProducto` int(10) UNSIGNED DEFAULT NULL,
  `idInsumos` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `produccion`
--

INSERT INTO `produccion` (`idProduccion`, `nombreProduccion`, `idPedido`, `fechaInicio`, `fechaEntrega`, `cantidadEntrega`, `cantidadSolicitada`, `estadoProduccion`, `idProducto`, `idInsumos`) VALUES
(2, 'Pantalon Zapato', NULL, '2023-09-17', '2023-09-18', 5, 5, NULL, 5, 10),
(4, 'Pantalon Zapato Negro', NULL, '2023-09-01', NULL, NULL, 20, NULL, 5, 10),
(5, 'Pantalon Condones', NULL, '2023-09-02', NULL, NULL, 10, NULL, 5, 7),
(7, 'Pantalon Cordones Rojos', NULL, '2023-09-17', '2023-09-18', 10, 10, NULL, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(10) UNSIGNED NOT NULL,
  `nombreProducto` varchar(30) DEFAULT NULL,
  `valorProducto` float DEFAULT NULL,
  `cantidadProducto` int(11) DEFAULT NULL,
  `idProveedor` int(10) UNSIGNED DEFAULT NULL,
  `idCategoria` int(10) UNSIGNED DEFAULT NULL,
  `idTallas` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `nombreProducto`, `valorProducto`, `cantidadProducto`, `idProveedor`, `idCategoria`, `idTallas`) VALUES
(5, 'Pantalon', 0, 1, NULL, NULL, NULL),
(13, 'Zapatos Terrye', NULL, 1, NULL, 2, 2),
(14, 'Pantalon Gamin', NULL, 10, NULL, 1, 4),
(15, 'Camisa con medias', 10, 10, 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `idProveedor` int(10) UNSIGNED NOT NULL,
  `nombreProveedor` varchar(20) DEFAULT NULL,
  `direccionProveedor` varchar(45) DEFAULT NULL,
  `telefonoProveedor` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`idProveedor`, `nombreProveedor`, `direccionProveedor`, `telefonoProveedor`) VALUES
(1, 'Fabrica Kennedy', 'Calle 58a ·39-9', 3194406753),
(85, 'Fabrica Zuelas', 'carrera 50 #9-8', 3214557258),
(92, 'Fabrica cordones', 'calle 34 carrera 13', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRoles` int(11) NOT NULL,
  `nombreRoles` varchar(20) DEFAULT NULL,
  `idPermisos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRoles`, `nombreRoles`, `idPermisos`) VALUES
(3, 'AdminInventario', 2),
(4, 'AdminProduccion', 2),
(7, 'AdminVentas', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `idSalida` int(10) UNSIGNED NOT NULL,
  `tipoSalida` varchar(20) DEFAULT NULL,
  `fechaSalida` date DEFAULT NULL,
  `idProducto` int(10) UNSIGNED DEFAULT NULL,
  `cantidadSalida` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `salida`
--

INSERT INTO `salida` (`idSalida`, `tipoSalida`, `fechaSalida`, `idProducto`, `cantidadSalida`) VALUES
(26, 'DEFECTO', '2023-09-19', 13, 1),
(27, 'DEFECTO', '2023-09-19', 13, 1),
(28, 'DEFECTO', '2023-09-19', 13, 1),
(29, 'DEFECTO', '2023-09-19', 13, 1),
(30, 'DEFECTO', '2023-09-19', 15, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `idTallas` int(10) UNSIGNED NOT NULL,
  `numeroTallas` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`idTallas`, `numeroTallas`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(10) UNSIGNED NOT NULL,
  `nombreUsuarios` varchar(20) DEFAULT NULL,
  `apellidoUsuarios` varchar(20) DEFAULT NULL,
  `telefonoUsuarios` int(11) DEFAULT NULL,
  `emailUsuarios` varchar(30) DEFAULT NULL,
  `direccionUsuarios` varchar(45) DEFAULT NULL,
  `idRoles` int(11) DEFAULT NULL,
  `fechaNacimientoUsuarios` date DEFAULT NULL,
  `idCiudades` int(11) DEFAULT NULL,
  `contraseñaUsuarios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `nombreUsuarios`, `apellidoUsuarios`, `telefonoUsuarios`, `emailUsuarios`, `direccionUsuarios`, `idRoles`, `fechaNacimientoUsuarios`, `idCiudades`, `contraseñaUsuarios`) VALUES
(1, 'Santiago', 'Fajardo', 311599561, 'AdminProduccion@gmail.com', 'CAlle 57a dur·92', 4, '2004-02-21', 1, 'AdmiProduccion'),
(4, 'Natalia', 'Avila', 3221122, 'AdminInventario@gmail.com', 'Calle 35a dur·92', 3, '2004-09-21', 1, 'AdminInventario'),
(5, 'Brayan ', 'Moya', 345555668, 'AdminVentas@gmail.com', 'Calle 1 Carrera 45', 7, '2004-09-10', 1, 'AdminVentas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVentas` int(30) UNSIGNED NOT NULL,
  `fechaVentas` date DEFAULT NULL,
  `precioVentas` int(30) DEFAULT NULL,
  `idPedido` int(30) UNSIGNED DEFAULT NULL,
  `idProducto` int(30) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idCiudades`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`idEntrada`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`idInsumos`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idUsuarios` (`idUsuarios`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`idPermisos`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`idProduccion`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProducto` (`idProducto`),
  ADD KEY `fk_idInsumos` (`idInsumos`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idProveedor` (`idProveedor`),
  ADD KEY `idCategoria` (`idCategoria`),
  ADD KEY `fk_producto_idTallas` (`idTallas`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRoles`),
  ADD KEY `idPermisos` (`idPermisos`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`idSalida`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`idTallas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`),
  ADD KEY `idRoles` (`idRoles`),
  ADD KEY `idCiudades` (`idCiudades`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVentas`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProducto` (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `idCiudades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `idEntrada` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `idInsumos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `idPermisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `idProduccion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `idProveedor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRoles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `idSalida` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `tallas`
--
ALTER TABLE `tallas`
  MODIFY `idTallas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVentas` int(30) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idUsuarios`) REFERENCES `usuarios` (`idUsuarios`);

--
-- Filtros para la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD CONSTRAINT `fk_idInsumos` FOREIGN KEY (`idInsumos`) REFERENCES `insumos` (`idInsumos`),
  ADD CONSTRAINT `produccion_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`),
  ADD CONSTRAINT `produccion_ibfk_3` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_producto_idTallas` FOREIGN KEY (`idTallas`) REFERENCES `tallas` (`idTallas`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`idProveedor`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`idCategoria`) REFERENCES `categoria` (`idCategoria`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`idPermisos`) REFERENCES `permisos` (`idPermisos`);

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRoles`) REFERENCES `roles` (`idRoles`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`idCiudades`) REFERENCES `ciudades` (`idCiudades`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`idPedido`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
