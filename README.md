# GestorBoletasVacaciones

# Sistema creado cuando hice mi practica profesional universitaria en la municipalidad de Canas

# Objetivo general
# Crear un sistema de gestión de las boletas de vacaciones para la Municipalidad de Cañas, aplicando todos los conocimientos adquiridos en la carrera de Tecnologías de la Información en nivel de diplomado, con el fin de facilitar a los encargados la gestión de las solicitudes.

# Definición del problema
# La Municipalidad de Cañas tiene un problema que se presenta a la hora de gestionar las solicitudes de vacaciones, dichas peticiones tienen que ser firmadas por tres personas y muchas veces se extravían con lo cual se debe realizar nuevamente el trámite por lo tanto se pierde mucho tiempo.

# Scrip base de datos

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2023 a las 19:55:32
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
-- Base de datos: `rrhh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletas_tb`
--

CREATE TABLE `boletas_tb` (
  `id` int(11) NOT NULL,
  `expediente` varchar(50) NOT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `funcionario` varchar(50) DEFAULT NULL,
  `puesto` varchar(50) DEFAULT NULL,
  `cedula` int(50) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `dias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tabla para las boletas de vacaciones';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_tb`
--

CREATE TABLE `login_tb` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tabla para las credenciales para el inicio de sesion';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_tb`
--

CREATE TABLE `personal_tb` (
  `id` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'Activo',
  `fecha_ingreso` date NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(50) NOT NULL,
  `lugar_nacimiento` varchar(50) NOT NULL,
  `cedula` int(11) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `nivel_academico` varchar(50) NOT NULL,
  `experiancia_laboral` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tabla para los datos de los empleados';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletas_tb`
--
ALTER TABLE `boletas_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `login_tb`
--
ALTER TABLE `login_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_tb`
--
ALTER TABLE `personal_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletas_tb`
--
ALTER TABLE `boletas_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login_tb`
--
ALTER TABLE `login_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_tb`
--
ALTER TABLE `personal_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
