-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2022 a las 05:48:19
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca_virtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(120) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `aa_publicacion` int(12) NOT NULL,
  `identificador` varchar(25) NOT NULL,
  `especialidad` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `titulo`, `tipo`, `aa_publicacion`, `identificador`, `especialidad`) VALUES
(1, 'FUNDAMENTOS DE ADMINISTRACION FINANCIERA', 'LIBRO', 2011, '978-607-15-0927-7', 'SISTEMAS_INDUSTRIAL'),
(2, 'INTRODUCCION A LA INGENIERIA DE SISTEMAS', 'LIBRO', 2006, '956-707-82-0137-8', 'SISTEMAS'),
(3, 'LA INTELIGENCIA ARTIFICIAL Y EL GOBIERNO ELECTRÓNICO EN EL INSTITUTO DE GOBERNABILIDAD Y TECNOLOGIA', 'TESIS', 2018, '---', 'SISTEMAS'),
(4, 'PLAN DE MARKETING PARA LA LINEA DE EQUIPOS DE LIMPIEZA EN LA EMPRESA VIDAGRO S.A.C', 'TESIS', 2019, '---', 'INDUSTRIAL'),
(5, 'Lenguajes de programacion y desarrollo de competencias clave', 'REVISTA', 2020, '1607-4041', 'SISTEMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id_autor` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id_autor`, `nombre`, `apellido`) VALUES
(2, 'STANLEY', 'BLOCK'),
(3, 'DANIEL', 'SALAS ALVAREZ'),
(4, 'ROBERTO GUILLERMO', 'MUGRUZA TORRES'),
(5, 'EDINSON ERNESTO', 'ALARCON QUINTANA'),
(6, 'FRANCISCA', 'TEJERA MARTINEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor_articulo`
--

CREATE TABLE `autor_articulo` (
  `id_autor` int(11) DEFAULT NULL,
  `id_articulo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor_articulo`
--

INSERT INTO `autor_articulo` (`id_autor`, `id_articulo`) VALUES
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`username`, `password`, `tipo`, `id_usuario`) VALUES
('james', '54321', 'ADMINISTRADOR', 2),
('jeremy', '12345', 'ADMINISTRADOR', 1),
('ricardo', '8765', 'DOCENTE', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_usuario` int(11) DEFAULT NULL,
  `id_articulo` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `domicilio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_usuario`, `id_articulo`, `fecha`, `domicilio`) VALUES
(1, 1, '2022-03-30', 'jr aea av aya');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `dni` int(11) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `dni`, `direccion`, `correo`) VALUES
(1, 'jeremy', 'bustamante', 70510913, 'jiron xx av re', 'jeremy@gmail.com'),
(2, 'james', 'chambi', 9837434, 'av aya jr molina', 'james@gmail.com'),
(11, 'richard', 'rodriguez', 8346344, 'aea jiron aea', 'asdfg@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id_autor`) USING BTREE;

--
-- Indices de la tabla `autor_articulo`
--
ALTER TABLE `autor_articulo`
  ADD KEY `FK__articulo` (`id_articulo`),
  ADD KEY `FK_autor_articulo_autor` (`id_autor`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`username`),
  ADD KEY `FK_cuenta_usuario` (`id_usuario`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD KEY `FK_reserva_usuario` (`id_usuario`),
  ADD KEY `FK_reserva_articulo` (`id_articulo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `id_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autor_articulo`
--
ALTER TABLE `autor_articulo`
  ADD CONSTRAINT `FK__articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_autor_articulo_autor` FOREIGN KEY (`id_autor`) REFERENCES `autor` (`id_autor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `FK_cuenta_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_reserva_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_reserva_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
