
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2016 a las 20:13:20
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u781448169_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comparte`
--

CREATE TABLE IF NOT EXISTS `comparte` (
  `T1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `T2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `S2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `T3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `S3` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comparte`
--

INSERT INTO `comparte` (`T1`, `T2`, `S2`, `T3`, `S3`) VALUES
('  Comparte y explora', 'Comparte tu creatividad', 'Muestra al mundo tus creaciones, estas a un click de mostrarle al mundo lo que eres capaz.', 'Explora la creatividad', 'Miles de personas han compartido sus creaciones con el mundo, obsérvalas y saca ideas para hacer tu nueva creaciones ¿que esperas? observa, comenta y puntua ya.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
  `Id` int(11) NOT NULL,
  `T1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `T2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `S1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`Id`, `T1`, `T2`, `S1`, `Email`) VALUES
(1, '  Dona y ayuda', 'Ayudar es dar felicidad', 'Contribuye con la causa', 'dd@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenidoprincipal`
--

CREATE TABLE IF NOT EXISTS `contenidoprincipal` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Frase` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `T1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `S1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `T2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `S2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Video` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Twitter` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Facebook` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Instagram` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Youtube` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contenidoprincipal`
--

INSERT INTO `contenidoprincipal` (`Id`, `Titulo`, `Frase`, `T1`, `S1`, `T2`, `S2`, `Video`, `Twitter`, `Facebook`, `Instagram`, `Youtube`) VALUES
(1, 'Los Chanchos Vuelan', 'Ideas para cambiar el mundo', 'Bienvenido a Los Chanchos Vuelan.', 'Somos un laboratorio creativo que genera soluciones innovadoras a problemas sociales y culturales usando el arte y lo digital.', 'Voluntarios', 'Únete con nosotros y se parte de nuestro equipo.', '<iframe width="1200" height="690" src="https://www.youtube.com/embed/8x0vE1t94B8" frameborder="0" allowfullscreen></iframe>', 'FACE', 'INS', 'you', 'you');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `Fondo1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Fondo2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Fondo3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Boton` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`Fondo1`, `Fondo2`, `Fondo3`, `Boton`) VALUES
('banner.jpg', '9e77b4b5a959e3f702163102e2c64a26.jpg', '11079039_974781545888116_3155052390056521009_n.jpg', 'boton.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Texto` text COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`Id`, `Nombre`, `Texto`, `Foto`) VALUES
(2, 'Manualidades', 'Talleres de plastilina.', '2.jpg'),
(3, 'Arte Digital', 'Proyectos con Scratch.', '3.jpg'),
(4, 'Creatividad', 'Creaciones con Imaginación.', '4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `super`
--

CREATE TABLE IF NOT EXISTS `super` (
  `Id` int(11) NOT NULL,
  `T1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `T2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `S1` text COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `super`
--

INSERT INTO `super` (`Id`, `T1`, `T2`, `S1`, `Foto`) VALUES
(1, 'Soy Mi Superhéroe', 'Únete a jugar la app de Soy Mi superhéroe', 'Un proyecto social en donde buscamos mostrar la realidad a través de los ojos de los niños.  Para hacerlo juntamos las ideas, juegos y personajes de los niños de la FPC que fueron creados durante nuestros talleres de stop motion y creamos un app de juegos en donde el usuario puede entrar en el mundo imaginario de estos niños y jugar para salvar una vida.  Este juego tiene como propósito sensibilizar a la sociedad sobre esta enfermedad, dar información sobre la problemática del cáncer infantil en el Perú, entretener,  recaudar fondos para el tratamiento de los niños del albergue Frieda Heller y para la continuidad de los talleres.  Con este juego queremos lograr que los usuarios sientan que jugando están ayudando a un niño y mostrar el cáncer desde una perspectiva distinta.', 'super.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Personaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Url` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Activo` int(3) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `uploads`
--

INSERT INTO `uploads` (`Id`, `Nombre`, `Email`, `Personaje`, `Url`, `Activo`) VALUES
(1, 'Mateo Guzman', 'mateo.guzmanalvarez@gmail.com', 'Mateo junior', '1.jpg', 2),
(2, 'Anonimous', 'yury34@live.com', 'Anonimous', '', 0),
(3, 'JK', 'mateo.guzmanalvarez@gmail.com', 'K', '3.jpg', 2),
(4, 'Mateo Guzman', 'mateo.guzmanalvarez@gmail.com', 'Mateo junior', '4.jpg', 2),
(5, 'yedilson andres quevedo Parrado', 'yedilsonandres@gmail.com', 'imagen', '5.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Id` int(6) unsigned zerofill NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Cargo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Cargo`, `Email`, `Usuario`, `Password`) VALUES
(000000, 'Mateo GuzmÃ¡n Alvarez', 'Programador', 'mateo.guzmanalvarez@gmail.com', 'MateoGuzmanA', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntarios`
--

CREATE TABLE IF NOT EXISTS `voluntarios` (
  `Id` int(3) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Frase` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `Foto2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `voluntarios`
--

INSERT INTO `voluntarios` (`Id`, `Nombre`, `Frase`, `Foto`, `Foto2`) VALUES
(1, 'Mateo Guzmán', 'Desarrollador de software. ', '1.jpg', '1.jpg'),
(2, 'Felipe Acosta', 'Diseñador', '2.jpg', '2.jpg'),
(3, 'yedilson Quevedo Parrado', 'Programador web.', '3.jpg', '3.jpg'),
(5, 'Vanessa Acevedo', 'Diseñadora', '5.jpg', '5.jpg'),
(6, 'Vania', 'N.', '6.jpg', '6.jpg'),
(7, 'Alejandra Chavez', 'Comunicadora', '7.jpg', '7.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
