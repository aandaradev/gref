-- phpMyAdmin SQL Dump
-- version 2.11.8.1deb5+lenny1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-07-2012 a las 23:21:44
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6-1+lenny3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gref`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Asistencia`
--

CREATE TABLE IF NOT EXISTS `Asistencia` (
  `AsistenciaId` int(3) NOT NULL auto_increment,
  `CodGref` varchar(10) character set utf8 NOT NULL,
  `FechaA` date NOT NULL,
  PRIMARY KEY  (`AsistenciaId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcar la base de datos para la tabla `Asistencia`
--

INSERT INTO `Asistencia` (`AsistenciaId`, `CodGref`, `FechaA`) VALUES
(45, 'GD-000104 ', '2012-06-18'),
(44, 'GD-000404', '0000-00-00'),
(34, 'GD-000404', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AsistenciaPersonal`
--

CREATE TABLE IF NOT EXISTS `AsistenciaPersonal` (
  `Asistencia` int(3) NOT NULL auto_increment,
  `CodGref` varchar(10) character set utf8 NOT NULL,
  PRIMARY KEY  (`Asistencia`),
  KEY `CodGref` (`CodGref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `AsistenciaPersonal`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emergencia`
--

CREATE TABLE IF NOT EXISTS `emergencia` (
  `CodGref` varchar(10) character set utf8 NOT NULL,
  `Nombre` varchar(30) character set utf8 NOT NULL,
  `Direccion` varchar(60) character set utf8 NOT NULL,
  `Tlf` varchar(14) character set utf8 NOT NULL,
  PRIMARY KEY  (`CodGref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `emergencia`
--

INSERT INTO `emergencia` (`CodGref`, `Nombre`, `Direccion`, `Tlf`) VALUES
('GD-000404', 'Ninoska Gonzales Fonseca', 'Calle Principal Barrio 5 de Julio Sabana de Mendoza', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE IF NOT EXISTS `equipos` (
  `Cod_equipo` varchar(10) character set utf8 NOT NULL,
  `Descripcion` varchar(30) character set utf8 NOT NULL,
  `Cantidad` int(3) NOT NULL,
  `Estado` varchar(30) character set utf8 NOT NULL,
  PRIMARY KEY  (`Cod_equipo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`Cod_equipo`, `Descripcion`, `Cantidad`, `Estado`) VALUES
('45', 'Sleeping', 2, 'Bueno'),
('35', 'Carpa', 4, 'Regular'),
('36', 'Carpa', 2, 'Bueno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estudio`
--

CREATE TABLE IF NOT EXISTS `Estudio` (
  `CodGref` varchar(10) character set utf8 NOT NULL,
  `NombreInst` varchar(30) character set utf8 NOT NULL,
  `DireccionInst` varchar(60) character set utf8 NOT NULL,
  `TlfInst` varchar(14) character set utf8 NOT NULL,
  `Semestre` varchar(3) character set utf8 NOT NULL,
  PRIMARY KEY  (`CodGref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `Estudio`
--

INSERT INTO `Estudio` (`CodGref`, `NombreInst`, `DireccionInst`, `TlfInst`, `Semestre`) VALUES
('GD-000404', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `CodGref` varchar(10) character set utf8 NOT NULL,
  `CedId` varchar(10) character set utf8 NOT NULL,
  `Apellidos` varchar(30) character set utf8 NOT NULL,
  `Nombres` varchar(30) character set utf8 NOT NULL,
  `Direccion` varchar(60) character set utf8 NOT NULL,
  `Tlf` varchar(14) character set utf8 NOT NULL,
  `FechaNac` date NOT NULL,
  `LugarNac` varchar(60) character set utf8 NOT NULL,
  `Edad` char(3) character set utf8 NOT NULL,
  `Sexo` enum('M','F') character set utf8 NOT NULL,
  `EdoCivil` varchar(30) character set utf8 NOT NULL,
  `Ciudad` varchar(30) character set utf8 NOT NULL,
  `Ocupacion` varchar(30) character set utf8 NOT NULL,
  `GrupoSang` varchar(5) character set utf8 NOT NULL,
  `Email` varchar(30) character set utf8 NOT NULL,
  `Extension` enum('Trujillo','San Luis','La Beatriz','Boconó','Dividive') character set utf8 NOT NULL,
  `FechaIng` date NOT NULL,
  `Asociaciones` varchar(60) character set utf8 NOT NULL,
  `Motivacion` varchar(60) character set utf8 NOT NULL,
  `Area` varchar(30) character set utf8 NOT NULL,
  `DirEmergencia` varchar(60) character set utf8 NOT NULL,
  `TlfEmergencia` varchar(14) character set utf8 NOT NULL,
  `Estado` enum('Activo','Inactivo') character set utf8 NOT NULL,
  PRIMARY KEY  (`CodGref`),
  KEY `CedId` (`CedId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `personal`
--

INSERT INTO `personal` (`CodGref`, `CedId`, `Apellidos`, `Nombres`, `Direccion`, `Tlf`, `FechaNac`, `LugarNac`, `Edad`, `Sexo`, `EdoCivil`, `Ciudad`, `Ocupacion`, `GrupoSang`, `Email`, `Extension`, `FechaIng`, `Asociaciones`, `Motivacion`, `Area`, `DirEmergencia`, `TlfEmergencia`, `Estado`) VALUES
('GD-000104 ', '14928174 ', 'Therán Aguilar ', 'leonardo ', 'Calle 8 entre Avs 5 y 6 Casa 5-32 Valera ', '0271-2251118 ', '1980-09-24', 'Valera', '33', 'M', 'Soltero', 'Valera', '', '', '', '', '0000-00-00', '', '', '', '', '', 'Activo'),
('GD-000404', '16533644', 'Vargas Gomes', 'Pablo Julio', 'El Dividive Calle las rudales Casa 55', '0414-7236584', '0000-00-00', '''''', '28', '', '', 'Valera', '', '', 'cyberguenzacalvo@hotmail.com', '', '0000-00-00', '', '', '', 'El Dividive Calle las rudales Casa 55', '0416-2722335', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `radioaficionado`
--

CREATE TABLE IF NOT EXISTS `radioaficionado` (
  `CodGref` varchar(10) character set utf8 NOT NULL,
  `Radioaficionado` enum('Sí','No') character set utf8 NOT NULL,
  `Equipo` enum('Sí','No') character set utf8 NOT NULL,
  `Permiso11` varchar(30) character set utf8 NOT NULL,
  `Permiso2` varchar(30) character set utf8 NOT NULL,
  `TipoEstacion` enum('Fija','Móvil','Portátil') character set utf8 NOT NULL,
  PRIMARY KEY  (`CodGref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `radioaficionado`
--

INSERT INTO `radioaficionado` (`CodGref`, `Radioaficionado`, `Equipo`, `Permiso11`, `Permiso2`, `TipoEstacion`) VALUES
('GD-000404', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SenasF`
--

CREATE TABLE IF NOT EXISTS `SenasF` (
  `CodGref` varchar(10) character set utf8 NOT NULL,
  `Boca` varchar(30) character set utf8 NOT NULL,
  `Frente` varchar(30) character set utf8 NOT NULL,
  `Cejas` varchar(30) character set utf8 NOT NULL,
  `Labios` varchar(30) character set utf8 NOT NULL,
  `Nariz` varchar(30) character set utf8 NOT NULL,
  `Bigotes` varchar(30) character set utf8 NOT NULL,
  `Barba` varchar(30) character set utf8 NOT NULL,
  `Ojos` varchar(30) character set utf8 NOT NULL,
  `Cabello` varchar(30) character set utf8 NOT NULL,
  `Peso` varchar(30) character set utf8 NOT NULL,
  `Estatura` varchar(10) character set utf8 NOT NULL,
  `NumCalzado` int(2) NOT NULL,
  `TallaCamisa` char(5) character set utf8 NOT NULL,
  `TallaPantalon` varchar(10) character set utf8 NOT NULL,
  `TallaBraga` varchar(10) character set utf8 NOT NULL,
  `SenasParticulares` varchar(30) character set utf8 NOT NULL,
  `EnfermedadAlergia` varchar(30) character set utf8 NOT NULL,
  PRIMARY KEY  (`CodGref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `SenasF`
--

INSERT INTO `SenasF` (`CodGref`, `Boca`, `Frente`, `Cejas`, `Labios`, `Nariz`, `Bigotes`, `Barba`, `Ojos`, `Cabello`, `Peso`, `Estatura`, `NumCalzado`, `TallaCamisa`, `TallaPantalon`, `TallaBraga`, `SenasParticulares`, `EnfermedadAlergia`) VALUES
('GD-000404', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE IF NOT EXISTS `trabajo` (
  `CodGref` varchar(10) character set utf8 NOT NULL,
  `NombEmp` varchar(30) character set utf8 NOT NULL,
  `DireccionEmp` varchar(60) character set utf8 NOT NULL,
  `TlfEmp` varchar(14) character set utf8 NOT NULL,
  `Cargo` varchar(30) character set utf8 NOT NULL,
  PRIMARY KEY  (`CodGref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`CodGref`, `NombEmp`, `DireccionEmp`, `TlfEmp`, `Cargo`) VALUES
('GD-000404', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `UsuarioId` int(10) NOT NULL auto_increment,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(10) NOT NULL,
  PRIMARY KEY  (`UsuarioId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`UsuarioId`, `usuario`, `clave`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `CodGref` varchar(10) character set utf8 NOT NULL,
  `Marca` varchar(30) character set utf8 NOT NULL,
  `Modelo` varchar(30) character set utf8 NOT NULL,
  `Color` varchar(30) character set utf8 NOT NULL,
  `Capacidad` varchar(30) character set utf8 NOT NULL,
  `Serial` varchar(30) character set utf8 NOT NULL,
  `Placas` varchar(15) character set utf8 NOT NULL,
  `Ano` year(4) NOT NULL,
  `Licencia` varchar(15) character set utf8 NOT NULL,
  PRIMARY KEY  (`CodGref`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`CodGref`, `Marca`, `Modelo`, `Color`, `Capacidad`, `Serial`, `Placas`, `Ano`, `Licencia`) VALUES
('GD-000404', '', '', '', '', '', '', 0000, '');
