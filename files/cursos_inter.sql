-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2019 a las 07:44:23
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
  `URL` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `Boton` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `Icono` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `ColorOrder` int(11) NOT NULL,
  `Permisos` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_general_ci NOT NULL,
  `Comentarios` varchar(255) COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `botones`
--

INSERT INTO `botones` (`ID`, `URL`, `Boton`, `Icono`, `Color`, `ColorOrder`, `Permisos`, `Descripcion`, `Comentarios`) VALUES
(0, 'form_cursos', 'Añadir Cursos', 'people', 'green', 1, '1', 'Catalogo de Usuarios', ''),
(1, 'c_cursos', 'Consultar Cursos', 'featured_play_list', 'green', 1, '0', 'Catalogo de Cursos', ''),
(2, 'form_inscripcion', 'Inscribir Cursos', 'computer', 'blue', 2, '0', 'Formulario de Inscripción', ''),
(6, 'c_usuarios_control', 'Control de Usuarios', 'settings', 'black', 3, '1', 'Editado y borrado de usuarios', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idCursos` int(10) UNSIGNED NOT NULL,
  `Nombre_curso` varchar(45) NOT NULL,
  `Carrera` varchar(45) NOT NULL,
  `Cupo` tinyint(2) UNSIGNED NOT NULL,
  `Salon` varchar(20) NOT NULL,
  `Horario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idCursos`, `Nombre_curso`, `Carrera`, `Cupo`, `Salon`, `Horario`) VALUES
(1, 'Derechos Humanos', 'Derecho', 30, 'A8021', '12:00-15:00'),
(2, 'Programacion phyton 3', 'Ingenieria en Computacion', 25, 'A204', '9:00-13:00'),
(3, 'Curso básico de Alemán', 'Idiomas', 30, 'Duacyd sala 8', '2:30-5:30'),
(4, 'Gestión de proyectos con Github', 'Ingenieria en Computacion', 20, 'A203', '12:15-14:15'),
(5, 'Manejo de Office 2016', 'Derecho', 30, 'Cloud', '1:30-15:30'),
(6, 'Como redactar documentos', 'Todas', 60, 'Fundación UNAM', '10:00-12:00'),
(7, 'Autocad', 'Arquitectura', 25, 'Centro de cómputo', '16:00-19:00'),
(8, 'Administracion de empresas', 'Relaciones Internacionales', 20, 'A613', '9:45-12:45'),
(9, 'Planeacion rural', 'Planificacion para el Desarrollo Agropecuario', 20, 'Invernadero', '9:00-12:00'),
(10, 'Metodología Ágil (Scrum)', 'Ingenieria en Computacion', 15, 'A504', '2:15-6:15');

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
  `Nombre` varchar(45) NOT NULL,
  `Ap_pat` varchar(15) NOT NULL,
  `Ap_mat` varchar(15) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Passwd` varchar(8) NOT NULL,
  `Admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registro_user`
--

INSERT INTO `registro_user` (`Num_cuenta`, `Nombre`, `Ap_pat`, `Ap_mat`, `Correo`, `Passwd`, `Admin`) VALUES
(1234, 'Yii', 'Ha', 'a', 'correo@correo.com', '4321', 0),
(4321, 'Ha', 'Yii', '', 'correin@correo.com', '1234', 1),
(416007154, "Hector Omar", "Rementeria", "Morales", "omoelnohomo@admin.unam.com", Homo1234, 1),
(312192378, "Victor Manuel", "Frias", "Chagoya", "victorlg@admin.unam.com", LGisus1234, 1),
(313075513, "Mario Alberto", "Barrera", "Gonzalez", "mariomary@admin.unam.com", MarioB1234, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `botones`
--
ALTER TABLE `botones`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `botones`
--
ALTER TABLE `botones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
