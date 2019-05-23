-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2019 a las 08:57:28
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursos_inter`
--
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botones`
--
CREATE TABLE `botones` (
  `ID` int(11) NOT NULL,
  `URL` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Boton` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Icono` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `ColorOrder` int(11) NOT NULL,
  `Permisos` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Comentarios` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
-- --------------------------------------------------------
-- Volcado de datos para la tabla `botones`
--

INSERT INTO `botones` (`ID`, `URL`, `Boton`, `Icono`, `Color`, `ColorOrder`, `Permisos`, `Descripcion`, `Comentarios`) VALUES
(1, 'c_cursos', 'Consultar cursos', 'featured_play_list', 'green', 1, '1', 'Catalogo de cursos', ''),
(2, 'c_usuarios', 'Usuarios', 'people', 'green', 1, '2', 'Catalogo de Usuarios', ''),
(3, 'form_registro', 'Registrar Usuario', 'people', 'blue', 2, '1', 'Registro de Usuarios', ''),
(4, 'c_usuarios_control', 'Control de Usuarios', 'settings', 'black', 3, '2', 'editar/borrar usuarios', '');

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idCursos` int(10) UNSIGNED NOT NULL,
  `Nombre_curso` varchar(45) NOT NULL,
  `Carrera` varchar(45) NOT NULL,
  `Cupo` tinyint(2) UNSIGNED NOT NULL,
  `Salon` varchar(6) NOT NULL,
  `Horario` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_inscritos`
--

CREATE TABLE `cursos_inscritos` (
  `Registro_user_Num_cuenta` int(10) UNSIGNED NOT NULL,
  `Cursos_idCursos` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_user`
--

CREATE TABLE `registro_user` (
  `Num_cuenta` int(10) UNSIGNED NOT NULL,
  `Nombre(s)` varchar(45) NOT NULL,
  `Ap_pat` varchar(15) NOT NULL,
  `Ap_mat` varchar(15) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `passwd` varchar(8) NOT NULL,
  `Admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_user`
--

INSERT INTO `registro_user` (`Num_cuenta`, `Nombre(s)`, `Ap_pat`, `Ap_mat`, `correo`, `passwd`, `Admin`) VALUES
(1234, 'Yii', 'Ha', 'a', 'correo@correo.com', '4321', 0),
(4321, 'Ha', 'Yii', '', 'correin@correo.com', '1234', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idCursos`);

--
-- Indices de la tabla `cursos_inscritos`
--
ALTER TABLE `cursos_inscritos`
  ADD PRIMARY KEY (`Registro_user_Num_cuenta`,`Cursos_idCursos`),
  ADD KEY `fk_Registro_user_has_Cursos_Cursos1_idx` (`Cursos_idCursos`),
  ADD KEY `fk_Registro_user_has_Cursos_Registro_user_idx` (`Registro_user_Num_cuenta`);

--
-- Indices de la tabla `registro_user`
--
ALTER TABLE `registro_user`
  ADD PRIMARY KEY (`Num_cuenta`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos_inscritos`
--
ALTER TABLE `cursos_inscritos`
  ADD CONSTRAINT `fk_Registro_user_has_Cursos_Cursos1` FOREIGN KEY (`Cursos_idCursos`) REFERENCES `cursos` (`idCursos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Registro_user_has_Cursos_Registro_user` FOREIGN KEY (`Registro_user_Num_cuenta`) REFERENCES `registro_user` (`Num_cuenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
