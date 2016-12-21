-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-05-2012 a las 18:24:14
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `floresmaquinarias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `categoria`) VALUES
(17, 'culo botella'),
(22, 'bolas'),
(23, 'culo botella'),
(24, 'culo con chota'),
(26, 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `subtitulo` varchar(250) DEFAULT NULL,
  `fecha` varchar(250) DEFAULT NULL,
  `autor` varchar(250) DEFAULT NULL,
  `fuente` varchar(250) DEFAULT NULL,
  `cuerpo` text,
  `imagen1` varchar(250) DEFAULT NULL,
  `imagen2` varchar(250) DEFAULT NULL,
  `imagen3` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `subtitulo`, `fecha`, `autor`, `fuente`, `cuerpo`, `imagen1`, `imagen2`, `imagen3`) VALUES
(7, 'not', 'dos', '13/05/2012', '', '', 'asdasd asdasd mazamzame los huevos', 'blade.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE IF NOT EXISTS `novedades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `subtitulo` varchar(250) DEFAULT NULL,
  `fecha` varchar(250) DEFAULT NULL,
  `autor` varchar(250) DEFAULT NULL,
  `fuente` varchar(250) DEFAULT NULL,
  `cuerpo` text,
  `imagen1` varchar(500) DEFAULT NULL,
  `imagen2` varchar(500) DEFAULT NULL,
  `imagen3` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `novedades`
--

INSERT INTO `novedades` (`id`, `titulo`, `subtitulo`, `fecha`, `autor`, `fuente`, `cuerpo`, `imagen1`, `imagen2`, `imagen3`) VALUES
(5, 'adasd', '', '', '', '', 'asdasd', 'lol1.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `descripcion` text,
  `categoria` varchar(250) DEFAULT NULL,
  `item` varchar(250) DEFAULT NULL,
  `marca` varchar(250) DEFAULT NULL,
  `precio` int(11) DEFAULT '0',
  `activo` varchar(2) DEFAULT 'si',
  `imagen` varchar(500) DEFAULT NULL,
  `pdf` varchar(500) DEFAULT NULL,
  `imagen2` varchar(500) DEFAULT NULL,
  `imagen3` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `categoria`, `item`, `marca`, `precio`, `activo`, `imagen`, `pdf`, `imagen2`, `imagen3`) VALUES
(38, 'asad', 'bolas', 'asd', 'amacen las viejas ', 'asdasd', 0, 'si', '36512_764422789.jpg', 'nuevohost datos de cuenta.pdf', '8527_1238746098128_1513555075_30652349_6932818_n.jpg', '16956_1312889271661_1513555075_30840890_699494_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `subtitulo` varchar(250) DEFAULT NULL,
  `fecha` varchar(250) DEFAULT NULL,
  `autor` varchar(250) DEFAULT NULL,
  `fuente` varchar(250) DEFAULT NULL,
  `cuerpo` text,
  `imagen1` varchar(250) DEFAULT NULL,
  `imagen2` varchar(250) DEFAULT NULL,
  `imagen3` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `subtitulo`, `fecha`, `autor`, `fuente`, `cuerpo`, `imagen1`, `imagen2`, `imagen3`) VALUES
(9, 'sdsadas', '', '', '', '', 'asd as das das dasd ', 'guason.jpg', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `submenu`
--

CREATE TABLE IF NOT EXISTS `submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(250) DEFAULT NULL,
  `categoria` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `submenu`
--

INSERT INTO `submenu` (`id`, `item`, `categoria`) VALUES
(28, 'ad', 'bolas'),
(27, 'culote', 'bolas'),
(24, 'con bebas', 'culo botella');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(250) DEFAULT NULL,
  `pass` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'e029bbf9d5574ee6c7cc51b9cf3efde3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `subtitulo` varchar(250) DEFAULT NULL,
  `descripcion` text,
  `video` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `videos`
--

INSERT INTO `videos` (`id`, `titulo`, `subtitulo`, `descripcion`, `video`) VALUES
(12, 'asdsa', 'asdasd', 'Inbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\nInbrese aqui el codigo del video que saco de youtube\r\n\r\n', '<object style="height: 390px; width: 640px"><param name="movie" value="http://www.youtube.com/v/wkA3kdUSMkg?version=3"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><embed src="http://www.youtube.com/v/wkA3kdUSMkg?version=3" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="640" height="360"></object>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
