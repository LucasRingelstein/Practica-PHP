-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-10-2022 a las 15:49:20
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `riki`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banners`
--

CREATE TABLE `banners` (
  `id` int(50) NOT NULL,
  `cod` int(50) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `contenido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `banners`
--

INSERT INTO `banners` (`id`, `cod`, `titulo`, `contenido`) VALUES
(37, 4092, 'Prueba', 'Prueba'),
(38, 2112, 'Prueba', 'Prueba1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(50) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `comentario` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` int(50) NOT NULL,
  `cod` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL,
  `destacado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `cod`, `title`, `content`, `keywords`, `description`, `category`, `destacado`) VALUES
(5, 1966, 'dsgdgs', 'gsddsgsdg', 'sdgsdg', 'sdgsdgsdg', 'sdgsdgsdg', 1),
(6, 4401, 'gdsgds', 'gsdgsdg', 'sgdsgs', 'dgsdgsg', 'dsgsgd', 1),
(7, 7359, 'dgsdgsd', 'gsdgsdg', 'sdgsdgsdg', 'sdgsdgsdg', 'sdgsdgsdg', 1),
(8, 7383, 'sdgsdggs', 'dgsdgsd', 'gsdgsdg', 'sdgsdgsd', 'gsdgsdgdg', 0),
(9, 9743, 'fsa', 'fsafasf', 'afsa', 'sfasf', 'asfasfas', 0),
(10, 8798, 'asfasf', 'asfasf', 'asfasf', 'afasf', 'asffsafa', 0),
(11, 3743, 'asfasf', 'asfasf', 'asfasf', 'afasf', 'asffsafa', 0),
(12, 8694, 'asfasf', 'asfasf', 'asfasf', 'afasf', 'asffsafa', 0),
(13, 3313, 'asfasf', 'asfasf', 'asfasf', 'afasf', 'asffsafa', 0),
(14, 5227, 'asfasf', 'asfasf', 'asfasf', 'afasf', 'asffsafa', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `pelicula_id` int(11) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(50) NOT NULL,
  `url` text NOT NULL,
  `content` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `url`, `content`) VALUES
(78, '/images/servicios/1966-Lote46-1.png', 1966),
(79, '/images/servicios/4401-Lote47-1.png', 4401),
(80, '/images/servicios/7359-Lote51-0.png', 7359),
(81, '/images/servicios/7383-Lote 45 - 1.png', 7383),
(82, '/images/servicios/7383-Lote46-0 - copia.png', 7383),
(83, '/images/servicios/7383-Lote46-1 - copia.png', 7383),
(84, '/images/servicios/7383-Lote46-1.png', 7383),
(85, '/images/servicios/7383-Lote46-2.png', 7383),
(86, '/images/servicios/9743-Lote49-2.png', 9743),
(87, '/images/servicios/9743-Lote50-2.png', 9743),
(88, '/images/servicios/9743-Lote51-0.png', 9743),
(89, '/images/servicios/8798-Lote 45 - 1 - copia.png', 8798),
(90, '/images/servicios/8798-Lote 45 - 1.png', 8798),
(91, '/images/servicios/8798-Lote46-0 - copia.png', 8798),
(92, '/images/servicios/8798-Lote46-1 - copia.png', 8798),
(93, '/images/servicios/8798-Lote46-1.png', 8798),
(94, '/images/servicios/8798-Lote46-2.png', 8798),
(95, '/images/servicios/3743-Lote 45 - 1 - copia.png', 3743),
(96, '/images/servicios/3743-Lote 45 - 1.png', 3743),
(97, '/images/servicios/3743-Lote46-0 - copia.png', 3743),
(98, '/images/servicios/3743-Lote46-1 - copia.png', 3743),
(99, '/images/servicios/3743-Lote46-1.png', 3743),
(100, '/images/servicios/3743-Lote46-2.png', 3743),
(101, '/images/servicios/8694-Lote 45 - 1 - copia.png', 8694),
(102, '/images/servicios/8694-Lote 45 - 1.png', 8694),
(103, '/images/servicios/8694-Lote46-0 - copia.png', 8694),
(104, '/images/servicios/8694-Lote46-1 - copia.png', 8694),
(105, '/images/servicios/8694-Lote46-1.png', 8694),
(106, '/images/servicios/8694-Lote46-2.png', 8694),
(107, '/images/servicios/3313-Lote 45 - 1 - copia.png', 3313),
(108, '/images/servicios/3313-Lote 45 - 1.png', 3313),
(109, '/images/servicios/3313-Lote46-0 - copia.png', 3313),
(110, '/images/servicios/3313-Lote46-1 - copia.png', 3313),
(111, '/images/servicios/3313-Lote46-1.png', 3313),
(112, '/images/servicios/3313-Lote46-2.png', 3313),
(113, '/images/servicios/5227-Lote 45 - 1 - copia.png', 5227),
(114, '/images/servicios/5227-Lote 45 - 1.png', 5227),
(115, '/images/servicios/5227-Lote46-0 - copia.png', 5227),
(116, '/images/servicios/5227-Lote46-1 - copia.png', 5227),
(117, '/images/servicios/5227-Lote46-1.png', 5227),
(118, '/images/servicios/5227-Lote46-2.png', 5227),
(129, '/images/banners/4092-banner1.jpg', 4092),
(130, '/images/banners/2112-imagen2.jpg', 2112);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(50) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `categoria_id` int(50) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` int(100) NOT NULL,
  `clave` int(150) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cod` (`cod`);

--
-- Indices de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKimages` (`content`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
