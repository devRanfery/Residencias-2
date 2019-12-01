-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-12-2019 a las 22:03:14
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TecResidencias`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `buscar_residencias` ()  SELECT * FROM Residencias ORDER BY id_alumno$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarAdmin` (IN `id_admin` INT(11), IN `ad_nombre` VARCHAR(250), IN `ad_ap_paterno` VARCHAR(250), IN `ad_ap_materno` VARCHAR(250), IN `telefono` VARCHAR(12), IN `ad_usuario` VARCHAR(250), IN `contrasena` VARCHAR(250))  BEGIN
insert into Administradores (id_admin, ad_nombre, ad_ap_paterno, ad_ap_materno, telefono, ad_usuario, contrasena)
values(id_admin ,ad_nombre, ad_ap_paterno, ad_ap_materno, telefono, ad_usuario, contrasena);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Administradores`
--

CREATE TABLE `Administradores` (
  `id_admin` int(11) NOT NULL,
  `ad_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ad_ap_paterno` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ad_ap_materno` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `ad_usuario` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Administradores`
--

INSERT INTO `Administradores` (`id_admin`, `ad_nombre`, `ad_ap_paterno`, `ad_ap_materno`, `telefono`, `ad_usuario`, `contrasena`) VALUES
(4, 'Norberto', 'Hernandez', 'Reyes', '7821398221', 'Admin', '$2y$10$CMz/GR/B3VxwaXvmuujQme.k/u4rPeFUfrEdkiD/8HGLSftYJjiIy'),
(5, 'Jesus Ranfery', 'Alvarez', 'Tabal', '2291870114', 'Ranfery01', '$2y$10$dtRktFxQLVQyWYYc49fy6OiSkdubess6.xA1glI3kJKphBrACPxTS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alumno`
--

CREATE TABLE `Alumno` (
  `id_alumno` int(50) NOT NULL,
  `a_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `a_ape_paterno` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `a_ape_materno` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `carrera` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `grupo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `a_telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `a_correo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Alumno`
--

INSERT INTO `Alumno` (`id_alumno`, `a_nombre`, `a_ape_paterno`, `a_ape_materno`, `carrera`, `grado`, `grupo`, `a_telefono`, `a_correo`, `contrasena`) VALUES
(1760382, 'Norberto', 'Hernandez', 'Reyes', 'Sistemas Computacionales ', '7', 'B', '7821247688', 'norberto@gmail.com', '$2y$10$SlkRgCrOB76dweNEz2AG.eDETm4kSKdJYOqxOFpmK66jbJOkfQHXG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Docente`
--

CREATE TABLE `Docente` (
  `id_docente` int(11) NOT NULL,
  `d_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `d_ap_paterno` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `d_ap_materno` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `d_correo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `d_telefono` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Docente`
--

INSERT INTO `Docente` (`id_docente`, `d_nombre`, `d_ap_paterno`, `d_ap_materno`, `d_correo`, `d_telefono`, `contrasena`) VALUES
(1665051, 'Alma Lilia', 'Alarcon', 'Vazquez', 'Almita@gmail.com', '2291870113', '$2y$10$J8r0Qyk8A1YIZaYj3As06.q3iItSTkyeWq9xPnGHf35tCzprFK5z.'),
(1667071, 'Juan de Dios', 'Pantoja', 'Hernandez', 'Pantojo@gmail.com', '2291875644', '$2y$10$yQCp6s1E6PGz/KKurpG2oeN8WpKUERJHq4viZh5kDYGiyHfrw/8YC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Residencias`
--

CREATE TABLE `Residencias` (
  `id_residencias` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL,
  `nombre_proyecto` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `correo_empresa` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Residencias`
--

INSERT INTO `Residencias` (`id_residencias`, `id_alumno`, `id_docente`, `nombre_proyecto`, `empresa`, `correo_empresa`, `ciudad`, `telefono`) VALUES
(3, 1760382, 1665051, 'Web Services', 'KPZ', 'kpz@gmail.com', 'Poza Rica', '7821247688');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Administradores`
--
ALTER TABLE `Administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `Docente`
--
ALTER TABLE `Docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `Residencias`
--
ALTER TABLE `Residencias`
  ADD PRIMARY KEY (`id_residencias`),
  ADD KEY `id_alumno` (`id_alumno`),
  ADD KEY `id_docente` (`id_docente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Administradores`
--
ALTER TABLE `Administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Alumno`
--
ALTER TABLE `Alumno`
  MODIFY `id_alumno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1760383;

--
-- AUTO_INCREMENT de la tabla `Docente`
--
ALTER TABLE `Docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1667072;

--
-- AUTO_INCREMENT de la tabla `Residencias`
--
ALTER TABLE `Residencias`
  MODIFY `id_residencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Residencias`
--
ALTER TABLE `Residencias`
  ADD CONSTRAINT `Residencias_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `Alumno` (`id_alumno`),
  ADD CONSTRAINT `Residencias_ibfk_2` FOREIGN KEY (`id_docente`) REFERENCES `Docente` (`id_docente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
