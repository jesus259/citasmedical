-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-06-2026 a las 03:47:10
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atendidas`
--

CREATE TABLE `atendidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ci` int(30) NOT NULL,
  `especialidad` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `doctor` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `fechareg` date NOT NULL,
  `clasificacion` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `atendidas`
--

INSERT INTO `atendidas` (`id`, `nombre`, `ci`, `especialidad`, `doctor`, `fechareg`, `clasificacion`, `localidad`) VALUES
(14, 'JESUS RONDON', 28599731, 'medicina-general', 'jesus', '2024-02-02', 'AFILIADO', 'AV BOLIVAR LOCAL NOÂ° S/N CENTRO PUNTA DE MATA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ccitas`
--

CREATE TABLE `ccitas` (
  `id` int(100) NOT NULL,
  `name` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `ci` int(30) NOT NULL,
  `localidad` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `atencion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `consulta` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechac` date NOT NULL,
  `fechareg` date DEFAULT NULL,
  `doctor` text COLLATE utf8_spanish_ci NOT NULL,
  `clasificacion` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ccitas`
--

INSERT INTO `ccitas` (`id`, `name`, `ci`, `localidad`, `atencion`, `email`, `telefono`, `consulta`, `fechac`, `fechareg`, `doctor`, `clasificacion`) VALUES
(14, 'JESUS RONDON', 28599731, 'AV BOLIVAR LOCAL NOÂ° S/N CENTRO PUNTA DE MATA', 'CONSULTA', 'example@gmail.com', '04127102830', 'medicina-general', '2024-02-02', '2024-02-02', 'jesus', 'AFILIADO'),
(16, 'JESUS RONDON', 28599731, 'AV BOLIVAR LOCAL NOÂ° S/N CENTRO PUNTA DE MATA', 'CONSULTA', 'gamezdominguezsantiago@gmail.com', '04127102830', 'medicina-general', '2024-02-03', '2024-02-02', 'jesus', 'AFILIADO'),
(17, 'JESUS', 111222333, 'AV BOLIVAR LOCAL NOÂ° S/N CENTRO PUNTA DE MATA', 'CHEQUEO MEDICO', 'example@gmail.com', '04127102830', 'medicina-general', '2024-02-29', '2024-02-28', 'jesus', 'COMUNIDAD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id` int(20) NOT NULL,
  `id_cita` int(10) NOT NULL,
  `ci` int(20) NOT NULL,
  `consulta` varchar(100) NOT NULL,
  `recetario` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id`, `id_cita`, `ci`, `consulta`, `recetario`, `fecha`) VALUES
(5, 14, 28599731, 'INFECCION RESPIRATORIA', 'ANTIBIOTICO', '2024-02-02'),
(6, 17, 111222333, 'SANO', 'V', '2024-02-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `id` int(11) NOT NULL,
  `esp` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `cont` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contador`
--

INSERT INTO `contador` (`id`, `esp`, `cont`) VALUES
(1, 'rayos x', 0),
(2, 'ecografia', 0),
(3, 'ginecologia', 0),
(4, 'odontologia', 0),
(5, 'medicina-general', 3),
(6, 'psicologo', 0),
(7, 'laboratorio', 0),
(8, 'fisiatria', 0),
(9, 'pediatra', 0),
(10, 'cardiologia', 0),
(11, 'nutricionista', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `id` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `atiende` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `horario` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `dias` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`id`, `cedula`, `nombre`, `apellido`, `atiende`, `horario`, `dias`) VALUES
(1, 28599731, 'jesus', 'rodriguez', 'medicina-general', '7:00/13:00', 'martes/jueves');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(10) NOT NULL,
  `esp` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `esp`) VALUES
(1, 'rayos x'),
(2, 'fisiatria'),
(3, 'psicologia'),
(4, 'ginecologia'),
(5, 'pediatria'),
(6, 'cardiologia'),
(7, 'odontologia'),
(8, 'laboratorio'),
(9, 'medicina-general'),
(10, 'ecografia'),
(11, 'nutricionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `asignacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `password`, `nombre`, `asignacion`, `rol`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'administrador', 'Administrador', 1),
(6, 'admin2', '9d24de3ac7b5fbbe776a6d90fe25a7e3c74a29cc', 'Operador', 'operador', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atendidas`
--
ALTER TABLE `atendidas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `ccitas`
--
ALTER TABLE `ccitas`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `ccitas` ADD FULLTEXT KEY `consulta` (`consulta`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atendidas`
--
ALTER TABLE `atendidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ccitas`
--
ALTER TABLE `ccitas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `contador`
--
ALTER TABLE `contador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
