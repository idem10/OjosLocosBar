
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-08-2015 a las 18:53:22
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u160864637_bar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barra1`
--

CREATE TABLE IF NOT EXISTS `barra1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `barra1`
--

INSERT INTO `barra1` (`id`, `nombre`, `descripcion`, `precio`) VALUES
(2, 'cubeta BudLight', '8 cervezas 450ml', '80'),
(3, 'Cubeta Corona', '8 cervezas 450ml', '100'),
(4, 'cubeta coors ', '10 cervezas 450ml', '80'),
(5, 'Tarro de cerveza', 'Tarro de cerveza antes de las 9 pm', '60'),
(6, 'Cubeta victoria', '8 cervezas 450ml', '90');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE IF NOT EXISTS `bebidas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'shot', 'vaso tequilero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cervezas`
--

CREATE TABLE IF NOT EXISTS `cervezas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `cervezas`
--

INSERT INTO `cervezas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Corona', 'cerveza corona 500ml'),
(3, 'Cubeta BudLight', '8 cervezas 450ml');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ensaladas`
--

CREATE TABLE IF NOT EXISTS `ensaladas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ensaladas`
--

INSERT INTO `ensaladas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Ensalada', 'Ensalada Cesar'),
(2, 'Ensalada de pollo', 'ensalada de pollo con chipotle');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especial`
--

CREATE TABLE IF NOT EXISTS `especial` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `especial`
--

INSERT INTO `especial` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Tacos', 'Tacos de pastor'),
(2, 'Tacos de bistek', '5 tacos de bistek ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id_e` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `precio` varchar(50) NOT NULL,
  PRIMARY KEY (`id_e`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_e`, `nombre`, `descripcion`, `fecha`, `precio`) VALUES
(1, 'Tributo ', 'Mana', '23/05/2015', '30'),
(5, 'tributo', 'los beatles', '20/sep/201', 'no cover'),
(6, 'Futbol', 'Santos vs Chivas ', '21/05/2015', 'No cover');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postres`
--

CREATE TABLE IF NOT EXISTS `postres` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `postres`
--

INSERT INTO `postres` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Pay', 'Pay de queso'),
(2, 'Nieve', 'Cono de nieve');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id_r` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `quejas` varchar(500) NOT NULL,
  PRIMARY KEY (`id_r`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_r`, `nombre`, `correo`, `telefono`, `ciudad`, `estado`, `quejas`) VALUES
(10, 'hector daniel salazar rodriguez', 'dsrale@gmail.com', '8441070824', 'saltillo', 'coahuila', 'le falta eliminar y modificar los datos de la base de datos'),
(11, 'alejandra gamez de leon', 'amiga_2703@hotmail.com', '8442740015', 'saltillo', 'coahuila', 'le falta la eliminacion y modificacion de datos'),
(12, 'jose luis salazar perez', 'joseLuis@outlook.com', '8441234566', 'saltillo', 'coahuila', 'modificacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sopas`
--

CREATE TABLE IF NOT EXISTS `sopas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sopas`
--

INSERT INTO `sopas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Camaron', 'Sopa de camaron'),
(2, 'sopa', 'sopa de mariscos ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `usuario`, `password`) VALUES
(1, 'idem10', 'bcfc6336d01b73bbb837cdf0f069e241');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
