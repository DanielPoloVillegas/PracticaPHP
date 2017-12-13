-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- *** Autor: Daniel Polo Villegas ***
-- *** Versión del programa: 1.0 ***
-- *** Fecha de creación: 08/12/2017 ***

-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2017 a las 09:18:16
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica_php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Precio_Prod` float(10,2) NOT NULL,
  `Precio_Venta` float(10,2) NOT NULL,
  `Tipo` varchar(255) NOT NULL,
  `Porcentaje` float(10,2) NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Caracteristicas` text NOT NULL,
  `Fecha_Reg` date NOT NULL,
  `Usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anuncios`
--

INSERT INTO `anuncios` (`ID`, `Titulo`, `Precio_Prod`, `Precio_Venta`, `Tipo`, `Porcentaje`, `Categoria`, `Caracteristicas`, `Fecha_Reg`, `Usuario`) VALUES
(1, 'Casa Barata', 10.00, 30.00, 'Nuevo', 200.00, 'Inmobiliaria', 'Barata Barata', '2017-12-13', 'User1'),
(2, 'TelÃ©fono Seminuevo', 50.00, 67.72, 'Usado', 35.43, 'Telefonia', 'Ideal para jugar', '2017-12-13', 'User2'),
(3, 'Motor Roto', 1.00, 1.00, 'Defectuoso', 0.01, 'Motor', 'No funciona. Urge vender', '2017-12-13', 'User3');

--
-- Disparadores `anuncios`
--
DELIMITER $$
CREATE TRIGGER `AN_DEL` AFTER DELETE ON `anuncios` FOR EACH ROW IF OLD.Usuario = 'ADMIN' then 
INSERT INTO log VALUES (NULL, OLD.Usuario, 1, CURRENT_TIMESTAMP, 'BAJA');
ELSE
INSERT INTO log VALUES (NULL, OLD.Usuario, 0, CURRENT_TIMESTAMP, 'BAJA');
END IF
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `AN_INS` AFTER INSERT ON `anuncios` FOR EACH ROW IF NEW.Usuario = 'ADMIN' then 
INSERT INTO log VALUES (NULL, NEW.Usuario, 1, CURRENT_TIMESTAMP, 'ALTA');
ELSE
INSERT INTO log VALUES (NULL, NEW.Usuario, 0, CURRENT_TIMESTAMP, 'ALTA');
END IF
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `AN_MOD` AFTER UPDATE ON `anuncios` FOR EACH ROW IF OLD.Usuario = 'ADMIN' then 
INSERT INTO log VALUES (NULL, OLD.Usuario, 1, CURRENT_TIMESTAMP, 'MODIFICACION');
ELSE
INSERT INTO log VALUES (NULL, OLD.Usuario, 0, CURRENT_TIMESTAMP, 'MODIFICACION');
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `ID` int(11) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Perfil` int(1) NOT NULL,
  `Fecha_Hora_Actividad` datetime NOT NULL,
  `Tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `NIF` varchar(9) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Apellido1` varchar(255) NOT NULL,
  `Apellido2` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Nombre_Usuario` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Poblacion` varchar(255) NOT NULL,
  `CP` varchar(5) NOT NULL,
  `Provincia` varchar(2) NOT NULL,
  `Telefono_Fijo` varchar(9) NOT NULL,
  `Telefono_Movil` varchar(9) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Web` varchar(255) DEFAULT NULL,
  `Blog` varchar(255) DEFAULT NULL,
  `Twitter` varchar(255) DEFAULT NULL,
  `Fecha_Registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`NIF`, `Nombre`, `Apellido1`, `Apellido2`, `Password`, `Nombre_Usuario`, `Direccion`, `Poblacion`, `CP`, `Provincia`, `Telefono_Fijo`, `Telefono_Movil`, `Correo`, `Web`, `Blog`, `Twitter`, `Fecha_Registro`) VALUES
('11111111X', 'A', 'A', 'A', '381da45a960b6d7493500412006adb4c', 'User1', 'C/ alle 1B', 'Hornachuelos', '23451', '14', '957000000', '600000000', 'User1@hotmail.com', 'www.user1.es', 'BlogBlog', '', '2017-12-13'),
('22222222X', 'B', 'B', 'B', '381da45a960b6d7493500412006adb4c', 'User2', 'C/ alle 1C', 'Hornachuelos', '23451', '14', '900000000', '670000000', 'User2@hotmail.com', 'www.user2.es', 'BlogBlog2', 'twitter.com/user2', '2017-12-13'),
('33333333X', 'C', 'C', 'C', '381da45a960b6d7493500412006adb4c', 'User3', 'C/ alle 1D', 'Huelva', '21005', '21', '959000000', '695000000', 'User3@hotmail.com', 'www.user3.es', 'BlogBlog3', 'twitter.com/user3', '2017-12-13'),
('49061287X', 'Daniel', 'Polo', 'Villegas', 'bab8518a923c061567a34df0d583748a', 'ADMIN', 'C/ Falsa123', 'Huelva', '21005', '21', '959151610', '695273177', 'danipolov@gmail.com', 'www.lifo.es', 'Polarino', 'twitter.com/user1', '2017-12-13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`NIF`),
  ADD UNIQUE KEY `Usuario_Unico` (`Nombre_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
