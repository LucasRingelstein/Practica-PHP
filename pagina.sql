-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-09-2022 a las 21:50:52
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
-- Base de datos: `pagina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `title`, `content`, `keywords`, `description`, `category`) VALUES
(28, 'SDFAFA', 'FSAFASF', 'ASFASF', 'ASFASFAS', 'ASFASFFAS'),
(29, 'SDFAFA', 'FSAFASF', 'ASFASF', 'ASFASFAS', 'ASFASFFAS'),
(30, 'SDFAFA', 'FSAFASF', 'ASFASF', 'ASFASFAS', 'ASFASFFAS'),
(31, 'SDFAFA', 'FSAFASF', 'ASFASF', 'ASFASFAS', 'ASFASFFAS'),
(32, 'SDFAFA', 'FSAFASF', 'ASFASF', 'ASFASFAS', 'ASFASFFAS'),
(33, 'SDFAFA', 'FSAFASF', 'ASFASF', 'ASFASFAS', 'ASFASFFAS'),
(34, 'SDFAFA', 'FSAFASF', 'ASFASF', 'ASFASFAS', 'ASFASFFAS'),
(35, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(36, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(37, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(38, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(39, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(40, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(41, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(42, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(43, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(44, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(45, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(46, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(47, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(48, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(49, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(50, 'fsafsafsa', 'sfaasf', 'sfsafsa', 'fsafa', 'fassaffsa'),
(51, 'vsf', 'afafas', 'fafs', 'asfaf', 'asff'),
(52, 'vsf', 'afafas', 'fafs', 'asfaf', 'asff'),
(53, 'sfaf', 'fsafa', 'fasfas', 'fas', 'fasfa'),
(54, 'sfaf', 'fsafa', 'fasfas', 'fas', 'fasfa'),
(55, 'sfaf', 'fsafa', 'fasfas', 'fas', 'fasfa'),
(56, 'safsafas', 'fasfasf', 'fsafasfasf', 'asfa', 'sfasfasf'),
(57, 'safsafas', 'fasfasf', 'fsafasfasf', 'asfa', 'sfasfasf');

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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD KEY `content` (`content`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`content`) REFERENCES `contents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
