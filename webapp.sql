-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2020 a las 06:26:46
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_usuario`
--

CREATE TABLE `log_usuario` (
  `nom_usuario` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `url` text COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `log_usuario`
--

INSERT INTO `log_usuario` (`nom_usuario`, `fecha`, `url`) VALUES
('claudio@correo.cl', '2020-10-14 19:40:12', '/webapp/inicio'),
('claudio@correo.cl', '2020-10-14 19:40:25', '/webapp/inicio'),
('claudio@correo.cl', '2020-10-14 19:40:27', '/webapp/index.php?action=nosotros'),
('claudio@correo.cl', '2020-10-14 19:40:28', '/webapp/index.php?action=servicios'),
('claudio@correo.cl', '2020-10-14 19:40:29', '/webapp/index.php?action=productos'),
('claudio@correo.cl', '2020-10-14 19:40:33', '/webapp/index.php?action=contacto'),
('claudio@correo.cl', '2020-10-14 19:40:34', '/webapp/index.php?action=productos'),
('claudio@correo.cl', '2020-10-14 19:40:35', '/webapp/index.php?action=servicios'),
('claudio@correo.cl', '2020-10-14 19:40:36', '/webapp/index.php?action=nosotros'),
('claudio@correo.cl', '2020-10-14 19:40:36', '/webapp/index.php?action=inicio'),
('javiera@correo.cl', '2020-10-14 19:41:16', '/webapp/inicio'),
('javiera@correo.cl', '2020-10-14 19:41:19', '/webapp/index.php?action=nosotros'),
('javiera@correo.cl', '2020-10-14 19:41:20', '/webapp/index.php?action=servicios'),
('javiera@correo.cl', '2020-10-14 19:41:21', '/webapp/index.php?action=productos'),
('javiera@correo.cl', '2020-10-14 19:41:23', '/webapp/index.php?action=contacto'),
('javiera@correo.cl', '2020-10-14 19:41:25', '/webapp/index.php?action=servicios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `password` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombres`, `apellidos`, `rol`) VALUES
(1, 'claudio@correo.cl', '202cb962ac59075b964b07152d234b70', 'Claudio Andres', 'Pinto Caceres', 0),
(2, 'juan@correo.cl', 'e10adc3949ba59abbe56e057f20f883e', 'Juan Pedro', 'Perez Soto', 1),
(3, 'javiera@correo.cl', 'fcea920f7412b5da7be0cf42b8c93759', 'Javiera Antonia', 'Reinoso Aravena', 2),
(4, 'daniela@correo.cl', 'fcea920f7412b5da7be0cf42b8c93759', 'Daniela Soledad', 'Sepulveda Arancibia', 2),
(5, 'rguineoa@gmail.com', '202cb962ac59075b964b07152d234b70', 'Roberto Andres', 'Guineo Avendaño', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
