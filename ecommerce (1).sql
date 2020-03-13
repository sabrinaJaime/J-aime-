-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2020 a las 22:55:55
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` float NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `enlace` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`, `enlace`) VALUES
(1, 'Cocina 1', 505.5, 'CSS/Imagenes/cocina1.JPG', 'productos/bonappetit.html'),
(2, 'Cocina 2', 650, 'CSS/Imagenes/cocina2.JPG', 'productos/receta.html'),
(3, 'Cocina 4', 600, 'CSS/Imagenes/cocina4.JPG', 'productos/condimentos.html'),
(4, 'Cocina 5', 700, 'CSS/Imagenes/cocina5.JPG', 'productos/cocina5.html'),
(5, 'Cocina 6', 550.65, 'CSS/Imagenes/cocina6.JPG', 'productos/elartedecocinar.html'),
(6, 'Cocina 3', 650, 'CSS/Imagenes/coina3.JPG', 'productos/cocina.html'),
(7, 'Frases 1', 675, 'CSS/Imagenes/frases1.JPG', 'productos/frases01.html'),
(8, 'Infantil 4', 550.65, 'CSS/Imagenes/infantil4.JPG', 'productos/infantil02.html'),
(9, 'Musica 3', 455, 'CSS/Imagenes/musica3.JPG', 'productos/guitarra1.html'),
(10, 'Musica 5', 550.65, 'CSS/Imagenes/musica5.JPG', 'productos/guitarra1.html'),
(11, 'Zen 3', 715, 'CSS/Imagenes/zen3.JPG', 'enlances/frases01.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(6) NOT NULL,
  `nombre` varchar(130) NOT NULL,
  `email` varchar(130) NOT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `nombre`, `email`, `password`) VALUES
(15, 'Mijael Volker', 'mijael_volker@hotmail.com', '$2y$10$VMKkMrabQ97D36AUoz5Z6e5qbndu60Q3HfKPNB35kCHvaKPFkGt0a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
