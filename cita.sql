-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2021 a las 21:59:01
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbpeluqueria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id` int(11) NOT NULL,
  `Nombre del cliente` varchar(150) NOT NULL,
  `Fecha de la cita` varchar(50) NOT NULL,
  `Hora de la cita` varchar(50) NOT NULL,
  `Telefono del cliente` varchar(70) NOT NULL,
  `Servicio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id`, `Nombre del cliente`, `Fecha de la cita`, `Hora de la cita`, `Telefono del cliente`, `Servicio`) VALUES
(2, 'Bruno', '20/12/2021', '3:30PM', '6568749423', 'Corte de cabello para caballero'),
(3, 'Manuel Arturo', '12/01/2022', '1:00PM', '6568495374', 'Corte de cabello para caballero'),
(4, 'José Miguel', '15/12/2021', '1:15PM', '6564738753', 'Corte de cabello para caballero'),
(5, 'Jonathan', '30/11/2021', '5:09PM', '6568470954', 'Corte de cabello para caballero'),
(6, 'Felipe', '30/11/2021', '2:00PM', '6568739743', 'Corte de cabello para caballero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
