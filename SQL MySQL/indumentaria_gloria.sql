-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2025 a las 23:40:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `indumentaria_gloria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uniformes`
--

CREATE TABLE `uniformes` (
  `id_uniforme` int(11) NOT NULL,
  `imagen_uniforme` varchar(200) DEFAULT NULL,
  `nombre_uniforme` varchar(200) NOT NULL,
  `precio` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `uniformes`
--

INSERT INTO `uniformes` (`id_uniforme`, `imagen_uniforme`, `nombre_uniforme`, `precio`) VALUES
(1, 'chomba_blanca.png', 'Chomba Blanca', 20000),
(2, 'remera.png', 'Remera Blanca', 20000),
(3, 'camisa_blanca.png', 'Camisa Blanca', 25000),
(4, 'campera.png', 'Campera Azul', 25000),
(5, 'pantalon_negro.png', 'Pantalon Negro', 30000),
(6, 'pantalon_deportivo.jpg', 'Pantalon Frisa Deportivo', 25000),
(7, 'falda_escolar.jpg', 'Falda Escolar', 10000),
(8, 'cinto_negro.jpg', 'Cinto Negro', 10000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `uniformes`
--
ALTER TABLE `uniformes`
  ADD PRIMARY KEY (`id_uniforme`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `uniformes`
--
ALTER TABLE `uniformes`
  MODIFY `id_uniforme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
