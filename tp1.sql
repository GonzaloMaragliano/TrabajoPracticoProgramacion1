-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2022 a las 22:35:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tp1`
--
CREATE DATABASE IF NOT EXISTS `tp1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tp1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `nro_factura` int(10) UNSIGNED NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `fecha_facturacion` date NOT NULL,
  `fecha_carga` date NOT NULL,
  `bultos` int(11) NOT NULL,
  `observacion` varchar(300) DEFAULT NULL,
  `usuario_alta` int(10) UNSIGNED NOT NULL,
  `usuario_baja` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`nro_factura`, `cliente`, `fecha_facturacion`, `fecha_carga`, `bultos`, `observacion`, `usuario_alta`, `usuario_baja`) VALUES
(4545, 'Hola', '2022-10-10', '2022-10-09', 5, '0', 5, 5),
(7474, 'Gonzalo', '2022-10-20', '2022-10-20', 4, 'hola', 5, 5),
(213213123, 'Martin', '2022-10-09', '2022-10-09', 2, '0', 5, NULL),
(1234526462, 'Martin', '2022-10-09', '2022-10-09', 2, '0', 5, NULL),
(2131312312, 'Martin', '2022-10-09', '2022-10-09', 2, '0', 5, NULL),
(4294967295, 'Martin', '2022-10-09', '2022-10-09', 2, '0', 5, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`) VALUES
(5, 'Fran', '$2y$10$uFrIHJYA5YtuRD1zPmNbt.rTO53s76Ti4DjBJYITJP/u852m9h52K'),
(8, 'Prueba', '$2y$10$2QLxUhr7F7nx.k7X79Yi/.tjle5Tf.ppc0hXskQMMHwR14S.dUL3O');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`nro_factura`),
  ADD KEY `usuario_alta` (`usuario_alta`),
  ADD KEY `usuario_baja` (`usuario_baja`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`usuario_alta`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`usuario_baja`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
