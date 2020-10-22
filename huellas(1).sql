-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2020 a las 19:57:27
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `huellas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `descripcion`, `url_image`, `estado`, `orden`) VALUES
(92, 'Teddy', 'Raza pequeÃ±a\r\n15 CentÃ­metros\r\nVacunado contra la rabia', 'card1.png', 1, 1),
(94, 'Frida', 'Pitbull \r\nRaza grande', '65585092_2644808335547928_5171459405446643712_n.jpg', 1, 2),
(96, 'Horacio', 'Esterilizado', 'card2.png', 1, 3),
(97, 'Paco', 'Raza pequeÃ±a, vacunado.', 'Seguimiento.jpg', 0, 4),
(98, '', '', 'perro_china.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `form`
--

CREATE TABLE `form` (
  `id_form` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ap` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `am` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `tel` int(13) NOT NULL,
  `contacto_co` int(13) NOT NULL,
  `parent` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `dir` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `hijos` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `hijos_cant` int(3) NOT NULL,
  `mascotas` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `mascota_esp` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `mascota_cant` int(3) NOT NULL,
  `url_ine` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `razon` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `term_cond` tinyint(1) NOT NULL,
  `estatus` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `form`
--

INSERT INTO `form` (`id_form`, `id`, `id_usuario`, `titulo`, `nombre`, `ap`, `am`, `edad`, `tel`, `contacto_co`, `parent`, `dir`, `hijos`, `hijos_cant`, `mascotas`, `mascota_esp`, `mascota_cant`, `url_ine`, `razon`, `term_cond`, `estatus`) VALUES
(1, 94, 2, '', 'Ulises', 'Vega', 'GonzÃ¡lez', 21, 2147483647, 2147483647, 'Madre', 'Manuel Altamirano Lt 18', 'no', 0, 'no', '', 0, '', 'Porque quiero un nuevo compaÃ±ero.', 1, 'Aceptado'),
(2, 92, 2, '', 'Ulises', 'Vega', 'Gonzalez', 21, 2147483647, 2147483647, 'Tio', 'Manuel Altamirano ', 'no', 0, 'no', '', 0, '', '.', 1, 'Rechazado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `id_seguimiento` int(11) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `foto_seg` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `observacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estatus_seg` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`id_seguimiento`, `id_usuario`, `foto_seg`, `observacion`, `estatus_seg`) VALUES
(1, 2, 'Seguimiento.jpg', '', 'Ok!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(130) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `last_session` datetime DEFAULT NULL,
  `activacion` int(11) NOT NULL DEFAULT '0',
  `token` varchar(40) NOT NULL,
  `token_password` varchar(100) DEFAULT NULL,
  `password_request` int(11) DEFAULT '0',
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(15) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `nombre`, `correo`, `last_session`, `activacion`, `token`, `token_password`, `password_request`, `id_tipo`, `tipo`) VALUES
(1, 'Juan ', '$2y$10$ihpc7pN/lISUNYkp1vUIrecOj.aAnihp6AQfPbHT3Ut04yeRsmtXK', 'Juan', 'juan@juan.juan', '2019-11-24 11:06:21', 1, '4e827208630dbd547df556c7cd098f6e', '', 1, 1, 'Administrador'),
(2, 'Uez', '$2y$10$EppAVGO/WekSjtfc4Ex0ZupmZd9qpzHH42gO7w4yOn9QuJiIckfmC', 'Ulises', 'idknameuri@outlook.com', '2019-11-24 11:03:50', 1, 'cff170e3c0d208d460fe34ac389015ad', '', 1, 2, 'Usuario'),
(3, 'cholo', '$2y$10$ihpc7pN/lISUNYkp1vUIrecOj.aAnihp6AQfPbHT3Ut04yeRsmtXK', 'choolo', 'cholo', NULL, 1, '1', '4e827208630dbd547df556c7cd098f6e', 0, 1, 'Administrador'),
(4, 'choloez', '$2y$10$6K7DKn1ytiozid4QsRXdVOJCQ4dKwjsYzqUyPWGkAIDdVD0W78NKG', 'Cholo', 'cholo@cholo.com', '2019-10-20 22:30:01', 1, 'f2beb4a835cd90e55e104d4224049808', '', 1, 1, 'Administrador'),
(5, 'idkuri', '$2y$10$gockecexFfCNEwBFqaGESu6DxpoEri7nnIfrFUJVhU24ZiTiZkDaS', 'Ulises', 'urisesug@gmail.com', NULL, 0, 'd778dc5764c59e6b62b77cd83eed1cc5', NULL, 0, 2, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`,`id`,`id_usuario`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`id_seguimiento`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id_seguimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
