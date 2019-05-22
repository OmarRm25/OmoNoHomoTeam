-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2018 a las 01:00:01
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_usuarios`
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

--
-- Volcado de datos para la tabla `botones`
--

INSERT INTO `botones` (`ID`, `URL`, `Boton`, `Icono`, `Color`, `ColorOrder`, `Permisos`, `Descripcion`, `Comentarios`) VALUES
(1, 'c_asignaturas', 'Asignaturas', 'featured_play_list', 'green', 1, '1', 'Catalogo de asignaturas', ''),
(2, 'form_prestamo', 'Servicios', 'computer', 'blue', 2, '1', 'Formulario de Prestamos', ''),
(3, 'c_usuarios', 'Usuarios', 'people', 'green', 1, '1', 'Catalogo de Usuarios', ''),
(4, 'form_registro', 'Registrar Usuario', 'people', 'blue', 2, '2', 'Registro de Usuarios', ''),
(6, 'c_usuarios_control', 'Control de Usuarios', 'settings', 'black', 3, '2', 'editar/borrar profesores', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_asignaturas`
--

CREATE TABLE `c_asignaturas` (
  `Clave` varchar(255) NOT NULL,
  `Asignatura` varchar(255) NOT NULL,
  `Semestre` varchar(255) NOT NULL,
  `Comentarios` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `c_asignaturas`
--

INSERT INTO `c_asignaturas` (`Clave`, `Asignatura`, `Semestre`, `Comentarios`) VALUES
('0000', 'ASIGNATURA DE PRUEBA 2018', '10', 'Es una asignatura de prueba'),
('0003', 'INGENIERIA DE SOFTWARE II', 'OP', 'Ninguno'),
('0008', 'ADMINISTRACION DE SISTEMAS MULTIUSUARIOS', 'OP', 'Ninguno'),
('0009', 'ADMINISTRACION DE TECNOLOGIAS DE LA INFORMACION', 'OP', 'Ninguno'),
('0012', 'SEMINARIO DE INGENIERIA EN COMPUTACION', 'OP', 'Ninguno'),
('0013', 'TEMAS ESPECIALES DE BASES DE DATOS', 'OP', 'Ninguno'),
('0015', 'TEMAS ESPECIALES DE REDES', 'OP', 'Ninguno'),
('0019', 'ADMINISTRACION CONTABILIDAD Y COSTOS', '2', 'Ninguno'),
('0024', 'ANALISIS DE CIRCUITOS ELECTRICOS (L)', '4', 'Ninguno'),
('0043', 'BIOINGENIERIA', 'OP', 'Ninguno'),
('0062', 'ALGEBRA LINEAL', '2', 'Ninguno'),
('0063', 'CALCULO VECTORIAL', '2', 'Ninguno'),
('0071', 'ELECTRICIDAD Y MAGNETISMO (L)', '3', 'Ninguno'),
('0129', 'DINAMICA DE SISTEMAS FISICOS', '7', 'Ninguno'),
('0138', 'DISPOSITIVOS ELECTRONICOS (L)', '5', 'Ninguno'),
('0190', 'ESTRUCTURA DE DATOS', '3', 'Ninguno'),
('0232', 'INTRODUCCION A LA ECONOMIA', '3', 'Ninguno'),
('0406', 'INTELIGENCIA ARTIFICIAL', '9', 'Ninguno'),
('0434', 'COMPILADORES', '6', 'Ninguno'),
('0442', 'LENGUAJES FORMALES Y AUTOMATAS', '5', 'Ninguno'),
('0480', 'METODOS NUMERICOS', '3', 'Ninguno'),
('0633', 'PROGRAMACION DE SISTEMAS', '5', 'Ninguno'),
('0712', 'PROBABILIDAD Y ESTADISTICA', '4', 'Ninguno'),
('0789', 'SISTEMAS DE INFORMACION', '8', 'Ninguno'),
('0840', 'SISTEMAS OPERATIVOS', '6', 'Ninguno'),
('0905', 'TEMAS ESPECIALES DE COMPUTACION', 'OP', 'Ninguno'),
('1003', 'PROYECTO ESCUELA INDUSTRIA', 'OP', 'Ninguno'),
('1108', 'GEOMETRIA ANALITICA', '1', 'Ninguno'),
('1109', 'Calculo Diferencial e integral', '1', 'Ninguno'),
('1110', 'Algebra', '1', 'Ninguno'),
('1111', 'COMPUTADORAS Y PROGRAMACION', '1', 'Ninguno'),
('1112', 'INTRODUCCION A LA INGENIERIA EN COMPUTACION', '1', 'Ninguno'),
('1202', 'COMUNICACION ORAL Y ESCRITA', '2', 'Ninguno'),
('1203', 'PROGRAMACION ORIENTADA A OBJETOS', '2', 'Ninguno'),
('1303', 'ECUACIONES DIFERENCIALES', '3', 'Ninguno'),
('1401', 'ESTRUCTURAS DISCRETAS', '4', 'Ninguno'),
('1405', 'INGENIERIA ECONOMICA', '4', 'Ninguno'),
('1410', 'INVESTIGACION DE OPERACIONES Y SISTEMAS', '4', 'Ninguno'),
('1500', 'DISE?O Y ANALISIS DE ALGORITMOS', '5', 'Ninguno'),
('1600', 'INGENIERIA DE SOFTWARE I', '6', 'Ninguno'),
('1603', 'SISTEMAS DE COMUNICACIONES (L)', '6', 'Ninguno'),
('1702', 'BASES DE DATOS I', '7', 'Ninguno'),
('1704', 'REDES DE COMPUTADORAS I (L)', '7', 'Ninguno'),
('1705', 'SEGURIDAD INFORMATICA', '7', 'Ninguno'),
('1715', 'MEDICION E INSTRUMENTACION (L)', '5', 'Ninguno'),
('1720', 'DISE?O LOGICO (L)', '6', 'Ninguno'),
('1721', 'DISE?O DE SISTEMAS DIGITALES (L)', '7', 'Ninguno'),
('1800', 'MICROPROCESADORES Y MICROCONTROLADORES (L)', '8', 'Ninguno'),
('1801', 'ORGANIZACION Y ADMINISTRACION DE CENTROS DE COMPUTO', '8', 'Ninguno'),
('1802', 'SISTEMAS DE CONTROL (L)', '8', 'Ninguno'),
('1910', 'GESTION DE REDES DE COMPUTADORAS (L)', 'OP', 'Ninguno'),
('1914', 'GESTION DE REDES DE COMPUTADORAS (L)', '9', 'Ninguno'),
('1917', 'HABILIDADES DIRECTIVAS', '9', 'Ninguno'),
('2128', 'ROBOTICA', 'OP', 'Ninguno'),
('2129', 'CALIDAD', '6', 'Ninguno'),
('2138', 'SISTEMAS EXPERTOS', 'OP', 'Ninguno'),
('8702', 'LAB REDES DE COMPUTADORAS I', 'OP', 'Ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_permisos`
--

CREATE TABLE `c_permisos` (
  `ID` int(11) NOT NULL,
  `NivelPermiso` int(11) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Comentarios` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `c_permisos`
--

INSERT INTO `c_permisos` (`ID`, `NivelPermiso`, `Descripcion`, `Comentarios`) VALUES
(1, 1, 'Usuario', 'Alumnos y Profesores'),
(2, 2, 'Administrativos', 'Personal del CAE'),
(3, 3, 'Admin', 'root');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_profesores`
--

CREATE TABLE `c_profesores` (
  `NombreProfesor` varchar(255) NOT NULL,
  `NoTrabajador` int(11) NOT NULL,
  `Restriccion` int(11) NOT NULL DEFAULT '0',
  `Comentarios` varchar(255) NOT NULL,
  `Motivo` varchar(255) NOT NULL DEFAULT 'Ninguno',
  `Carrera` varchar(255) NOT NULL,
  `CorreoElectronico` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `c_profesores`
--

INSERT INTO `c_profesores` (`NombreProfesor`, `NoTrabajador`, `Restriccion`, `Comentarios`, `Motivo`, `Carrera`, `CorreoElectronico`) VALUES
('Aaron Velazco Agustin', 59631045, 0, 'Ningun Comentario', '', 'ICO', 'aaron_velazco@hotmail.com'),
('Rafel Betancourt', 98765431, 0, 'Comentario 123 ', 'Ninguno', 'ICO', 'rafael_b@hotmail.com'),
('Fernando Sánchez Beristain', 413010836, 0, 'Ningun Comentario', '', 'ICO', 'fernandoberistain2@hotmail.com'),
('Fernando Sánchez Beristain', 2147483647, 0, 'Comentario de ejemplo', 'Ninguno', 'ICO', 'fernandoberistain2@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `c_servicios`
--

CREATE TABLE `c_servicios` (
  `ID` int(11) NOT NULL,
  `Servicio` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `c_servicios`
--

INSERT INTO `c_servicios` (`ID`, `Servicio`, `Descripcion`) VALUES
(1, 'Prestamo de Proyector', 'Prestamo de Proyector'),
(2, 'Prestamo de Aula 203', 'Prestamo de aula'),
(3, 'Prestamo de Aula 204', 'Prestamo de aula');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `NoCuenta` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `Mensaje` longtext COLLATE utf8_spanish2_ci NOT NULL,
  `Estado` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `mail`
--

INSERT INTO `mail` (`ID`, `Nombre`, `Apellidos`, `Correo`, `NoCuenta`, `Mensaje`, `Estado`) VALUES
(1, 'Fernando', 'S?nchez Beristain', 'fernandoberistain2@hotmail.com', '413010836', 'Este es un mensaje de prueba', 0),
(2, 'Fernando', 'S?nchez Beristain', 'fernandoberistain2@hotmail.com', '413010836', 'Este es un mensaje de prueba', 0),
(3, 'Alberto', 'Gonzalez Ledesma', 'gonzalez_alberto@hotmail.com', '8411868-8', 'Me parece muy bueno el sistema del cae para solicitar los prestamos de los equipos de computo de la fes aragon, etc, etc.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre_usuario` text NOT NULL,
  `carrera` text NOT NULL,
  `no_cuenta` int(10) NOT NULL,
  `direcion` text NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `institucion` text,
  `email` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `FechaRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Restriccion` int(11) NOT NULL DEFAULT '0',
  `Motivo` varchar(255) NOT NULL DEFAULT 'No Restringido',
  `Permisos` int(11) NOT NULL DEFAULT '1',
  `Grado` varchar(255) NOT NULL,
  `Comentarios` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre_usuario`, `carrera`, `no_cuenta`, `direcion`, `telefono`, `institucion`, `email`, `password`, `FechaRegistro`, `Restriccion`, `Motivo`, `Permisos`, `Grado`, `Comentarios`) VALUES
('Alberto Gonzalez Ledesm', 'ICO', 8411868, 'Enrique Torres Calderon #37', '5539554880', 'UNAM FES ARAGON', 'gonzalez_alberto@hotmail.com', '123456', '2018-10-30 20:22:01', 0, 'No Restringido', 2, 'Alumno', ''),
('Fernando Sánchez Beristain', 'ICO', 413010836, 'Calle Monterrey #11 Col Jardines de Guadalupe C.P. 57140 Cd. Nezahualcoyotl Estado de México', '5539229638', 'UNAM FES ARAGON', 'fernandoberistain2@hotmail.com', '123456', '2018-10-30 20:05:40', 0, 'No Restringido', 2, 'Profesor', 'Prueba'),
('Aaron Velazco Agustin', 'ICO', 413112576, 'Nube 8 Col. La peñas', '5539229638', 'UNAM FES ARAGON', 'fernandoberistain2@hotmail.com', '123456', '2018-10-30 20:05:26', 0, 'No Restringido', 1, 'Alumno', 'Prueba'),
('David Mendoza Calette', 'ico', 1234567890, 'carmen no 186', '56406718', 'unam', 'calette50@hotmail.com', 'citlali', '2018-10-26 15:25:33', 0, 'No Restringido', 2, 'Alumno', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `botones`
--
ALTER TABLE `botones`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `c_asignaturas`
--
ALTER TABLE `c_asignaturas`
  ADD PRIMARY KEY (`Clave`);

--
-- Indices de la tabla `c_permisos`
--
ALTER TABLE `c_permisos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `c_profesores`
--
ALTER TABLE `c_profesores`
  ADD PRIMARY KEY (`NoTrabajador`);

--
-- Indices de la tabla `c_servicios`
--
ALTER TABLE `c_servicios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`no_cuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `botones`
--
ALTER TABLE `botones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `c_permisos`
--
ALTER TABLE `c_permisos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `c_servicios`
--
ALTER TABLE `c_servicios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mail`
--
ALTER TABLE `mail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
