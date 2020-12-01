-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2020 a las 20:30:16
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ajax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `APELLIDOS` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `SEXO` varchar(1) COLLATE latin1_spanish_ci NOT NULL,
  `FECHA_NACIMIENTO` date NOT NULL,
  `ESTADO_CIVIL` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `NOMBRE`, `APELLIDOS`, `SEXO`, `FECHA_NACIMIENTO`, `ESTADO_CIVIL`) VALUES
(1, 'Marco Elio', 'Garcia Gomariz', 'N', '2018-02-25', 1),
(2, 'David', 'Garcia Gomariz', 'H', '1992-04-30', 2),
(14, 'Ayla', 'Cromañon', 'M', '1970-01-01', 1),
(11, 'Emmett Lathrop', 'Brown', 'H', '1914-06-14', 1),
(10, 'Martin Seamus', 'McFly', 'H', '1970-01-01', 1),
(12, 'Jennifer Jane', 'Parker', 'M', '1970-01-01', 1),
(13, 'Adso', 'Von Melk', 'H', '1311-11-11', 1),
(19, 'Arya', 'Stark', 'M', '0289-04-15', 1),
(20, 'Maria Salomea', 'Sklodowska', 'M', '1867-11-07', 2),
(21, 'Jeanne', 'd\'Arc', 'M', '1412-01-06', 1),
(22, 'Dolores', 'Ibárruri Gómez', 'M', '2018-02-25', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
