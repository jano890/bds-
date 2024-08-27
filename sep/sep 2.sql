-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2024 a las 18:49:59
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura de semestre`
--

CREATE TABLE `asignatura de semestre` (
  `id_asignatura_semestre` int(11) NOT NULL,
  `id_datos_generales` int(11) NOT NULL,
  `asignatura11` varchar(50) NOT NULL,
  `num_grupos_atendidos11` varchar(3) NOT NULL,
  `num_alumnos_grupo11` varchar(3) NOT NULL,
  `asignatura21` varchar(50) NOT NULL,
  `num_grupos_atendidos21` varchar(3) NOT NULL,
  `num_alumnos_grupo21` varchar(3) NOT NULL,
  `asignatura31` varchar(50) NOT NULL,
  `num_grupos_atendidos31` varchar(3) NOT NULL,
  `num_alumnos_grupo31` varchar(3) NOT NULL,
  `asignatura12` varchar(50) NOT NULL,
  `num_grupos_atendidos12` varchar(3) NOT NULL,
  `num_alumnos_grupo12` varchar(3) NOT NULL,
  `asignatura22` varchar(50) NOT NULL,
  `num_grupos_atendidos22` varchar(3) NOT NULL,
  `num_alumnos_grupo22` varchar(3) NOT NULL,
  `asignatura32` varchar(50) NOT NULL,
  `num_grupos_atendidos32` varchar(3) NOT NULL,
  `num_alumnos_grupo32` varchar(3) NOT NULL,
  `asignatura13` varchar(50) NOT NULL,
  `num_grupos_atendidos13` varchar(3) NOT NULL,
  `num_alumnos_grupo13` varchar(3) NOT NULL,
  `asignatura23` varchar(50) NOT NULL,
  `num_grupos_atendidos23` varchar(3) NOT NULL,
  `num_alumnos_grupo23` varchar(3) NOT NULL,
  `asignatura33` varchar(50) NOT NULL,
  `num_grupos_atendidos33` varchar(3) NOT NULL,
  `num_alumnos_grupo33` varchar(3) NOT NULL,
  `asignatura14` varchar(50) NOT NULL,
  `num_grupos_atendidos14` varchar(3) NOT NULL,
  `num_alumnos_grupo14` varchar(3) NOT NULL,
  `asignatura24` varchar(50) NOT NULL,
  `num_grupos_atendidos24` varchar(3) NOT NULL,
  `num_alumnos_grupo24` varchar(3) NOT NULL,
  `asignatura34` varchar(50) NOT NULL,
  `num_grupos_atendidos34` varchar(3) NOT NULL,
  `num_alumnos_grupo34` varchar(3) NOT NULL,
  `asignatura15` varchar(50) NOT NULL,
  `num_grupos_atendidos15` varchar(3) NOT NULL,
  `num_alumnos_grupo15` varchar(3) NOT NULL,
  `asignatura25` varchar(50) NOT NULL,
  `num_grupos_atendidos25` varchar(3) NOT NULL,
  `num_alumnos_grupo25` varchar(3) NOT NULL,
  `asignatura35` varchar(50) NOT NULL,
  `num_grupos_atendidos35` varchar(3) NOT NULL,
  `num_alumnos_grupo35` varchar(3) NOT NULL,
  `asignatura16` varchar(50) NOT NULL,
  `num_grupos_atendidos16` varchar(3) NOT NULL,
  `num_alumnos_grupo16` varchar(3) NOT NULL,
  `asignatura26` varchar(50) NOT NULL,
  `num_grupos_atendidos26` varchar(3) NOT NULL,
  `num_alumnos_grupo26` varchar(3) NOT NULL,
  `asignatura36` varchar(50) NOT NULL,
  `num_grupos_atendidos36` varchar(3) NOT NULL,
  `num_alumnos_grupo36` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `fecha` varchar(10) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `ap_pad` varchar(25) NOT NULL,
  `ap_mat` varchar(25) NOT NULL,
  `curp` varchar(13) NOT NULL,
  `e_gmail` varchar(60) NOT NULL,
  `subsistema` varchar(35) NOT NULL,
  `nombre_plantel` varchar(40) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos generales`
--

CREATE TABLE `datos generales` (
  `id_datos_generales` int(11) NOT NULL,
  `estatus` varchar(35) NOT NULL,
  `ap_pad` varchar(25) NOT NULL,
  `ap_mat` varchar(25) NOT NULL,
  `nom1` varchar(25) NOT NULL,
  `nom2` varchar(25) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fecha_nacimiento` varchar(11) NOT NULL,
  `curp` varchar(18) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `telefono_local` varchar(10) NOT NULL,
  `telefono_cel` varchar(10) NOT NULL,
  `edo_nacimiento` varchar(40) NOT NULL,
  `e_mail` varchar(60) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `edo_civil` varchar(12) NOT NULL,
  `tiene_computadora` varchar(2) NOT NULL,
  `tiene_internet` varchar(2) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `num_ext` varchar(3) NOT NULL,
  `num_int` varchar(3) NOT NULL,
  `localidad_residencia` varchar(50) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `municipio_residencia` varchar(50) NOT NULL,
  `estado_residencia` varchar(50) NOT NULL,
  `comentario_domicilio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diplomado profordems`
--

CREATE TABLE `diplomado profordems` (
  `id_diplomado_profordems` int(11) NOT NULL,
  `id_datos_generales` int(11) NOT NULL,
  `institucion_diplomado_dir` varchar(10) NOT NULL,
  `generacion_diplomado_dir` varchar(11) NOT NULL,
  `diplomado_acreditado_dir` varchar(11) NOT NULL,
  `certificado_diplomado_dir` varchar(12)  NOT NULL,
  `institucion_diplomado_docente` varchar(10) NOT NULL,
  `generacio_diplomado_docente` varchar(11)  NOT NULL,
  `diplomado_acreditacion_docente` varchar(11) NOT NULL,
  `certificado_diplomado_docente` varchar(12) NOT NULL,
  `institucion_diplomado_carrera_concluida` varchar(10) NOT NULL,
  `generacion_diplomado_carrera_concluida` varchar(11) NOT NULL,
  `diplomado_acreditado_carrera_concluida` varchar(11) NOT NULL,
  `certificado_diplomado_carrera_concluido` varchar(12) NOT NULL,
  `institucion_diploma_carra_trunca` varchar(10) NOT NULL,
  `generacion_diplomado_carrera_trunca` varchar(11) NOT NULL,
  `diplomado_acreditado_carrera_trunca` varchar(11) NOT NULL,
  `certificado_diplomado_carrera_trunca` varchar(12) NULL,
  `institucion_diplomado_bachillerato` varchar(10) NOT NULL,
  `generacion_diplomado_bachillerato` varchar(11) NOT NULL,
  `diplomado_acreditado_bachillerato` varchar(11) NOT NULL,
  `certificado_diplomado_bachillerato` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios_realizados`
--

CREATE TABLE `estudios_realizados` (
  `id_estudios_realizados` int(11) NOT NULL,
  `id_datos_generales` int(11) NOT NULL,
  `grado_obtenido_bachillerato` varchar(30) NOT NULL,
  `estudios_realizados_bachillerato` varchar(30) NOT NULL,
  `campo_disciplinar_bachillerato` varchar(30) NOT NULL,
  `institucion_bachillerato` varchar(30) NOT NULL,
  `grado_obtenido_licenciatura` varchar(30) NOT NULL,
  `estudios_realizados_licenciatura` varchar(30) NOT NULL,
  `campo_diciplinar_licenciatura` varchar(30) NOT NULL,
  `institucion_licenciatura` varchar(30) NOT NULL,
  `grado_obtenido_maestria` varchar(30) NOT NULL,
  `estudios_realizados_maestria` varchar(30) NOT NULL,
  `campo_diciplinar_maestria` varchar(30) NOT NULL,
  `institucion_maestria` varchar(30) NOT NULL,
  `grado_obtenido_doctorado` varchar(30) NOT NULL,
  `estudios_relizados_doctorado` varchar(30) NOT NULL,
  `campo_diciplinar_doctoraddo` varchar(30) NOT NULL,
  `institucion_doctorado` varchar(30) NOT NULL,
  `comicionado_sabatico_de` varchar(10) NOT NULL,
  `comicionado_sabatico_a` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia laboral`
--

CREATE TABLE `experiencia laboral` (
  `id_experincia_laboral` int(11) NOT NULL,
  `id_datos_generales` int(11) NOT NULL,
  `nom_institucion_laboral` varchar(50) NOT NULL,
  `puesto_laboral` varchar(50) NOT NULL,
  `años_laboral` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id_idioma` int(11) NOT NULL,
  `id_datos_generales` int(11) NOT NULL,
  `lengua_materna` varchar(50) NOT NULL,
  `idioma1` varchar(50) NOT NULL,
  `lectura1` varchar(50) NOT NULL,
  `escritura1` varchar(50) NOT NULL,
  `hablado1` varchar(50) NOT NULL,
  `idioma2` varchar(50) NOT NULL,
  `lectura2` varchar(50) NOT NULL,
  `escritura2` varchar(50) NOT NULL,
  `hablado2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otra institucion`
--

CREATE TABLE `otra institucion` (
  `id_otra_institucion` int(11) NOT NULL,
  `id_datos_generales` int(11) NOT NULL,
  `institucion_otra_ins` varchar(50) NOT NULL,
  `nivel_educativo_otra_ins` varchar(50) NOT NULL,
  `subsistema_otra_ins` varchar(25) NOT NULL,
  `tipo_sostenimiento_otra_ins` varchar(50) NOT NULL,
  `asignatura_otra_ins` varchar(50) NOT NULL,
  `horas_impartidas_otras_ins` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantel_adscripcion`
--

CREATE TABLE `plantel_adscripcion` (
  `id_datos_adscrip` int(11) NOT NULL,
  `id_datos_generales` int(11) NOT NULL,
  `subsistema` varchar(25) NOT NULL,
  `tipo_sostenimiento` varchar(10) NOT NULL,
  `nombre_plantel` varchar(30) NOT NULL,
  `clave_plantel` varchar(20) NOT NULL,
  `cargo_ocupacion` varchar(40) NOT NULL,
  `fecha_captura` varchar(10) NOT NULL,
  `antiguaedad_años` varchar(3) NOT NULL,
  `antiguedad_meses` varchar(2) NOT NULL,
  `hrs_frente_grupo` varchar(3) NOT NULL,
  `tipo_contratacion` varchar(30) NOT NULL,
  `calle _plantel` varchar(40) NOT NULL,
  `num_plantel` varchar(4) NOT NULL,
  `colonia_plantel` varchar(40) NOT NULL,
  `municipio_plantel` varchar(40) NOT NULL,
  `cp_plantel` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` int(60) NOT NULL,
  `dependencia` int(40) NOT NULL,
  `e_mail` varchar(60) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `ususario` int(15) NOT NULL,
  `contraseña` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `datos generales`
--
ALTER TABLE `datos generales`
  ADD PRIMARY KEY (`id_datos_generales`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id_idioma`);

--
-- Indices de la tabla `otra institucion`
--
ALTER TABLE `otra institucion`
  ADD PRIMARY KEY (`id_otra_institucion`);

--
-- Indices de la tabla `plantel_adscripcion`
--
ALTER TABLE `plantel_adscripcion`
  ADD PRIMARY KEY (`id_datos_adscrip`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
