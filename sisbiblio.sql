-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2019 a las 14:49:50
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisbiblio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `auto_id` int(11) NOT NULL,
  `auto_nombres` varchar(45) DEFAULT NULL,
  `auto_apellidos` varchar(45) DEFAULT NULL,
  `auto_biografia` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`auto_id`, `auto_nombres`, `auto_apellidos`, `auto_biografia`) VALUES
(6, 'Edward', 'Frenkel', 'Ciencia'),
(7, 'Nicolas', 'Taleb', 'matematicas'),
(8, 'Nasssim', 'Taleb', 'ciencias'),
(9, 'Joan', 'Weytand', 'matematicas'),
(10, 'Ricardo', 'Paredes Quinteros', 'Biologia'),
(11, 'Williams', 'Lopez Vega', 'Biologia'),
(12, 'Pedro', 'Quispe Rosales', 'Biologia'),
(13, 'Aldo', 'Trossero', 'Anatomia'),
(14, 'Martin ', 'Grandi', 'Anatomia'),
(15, 'Celestino F.', 'Gonzales Garcia', 'Anatomia'),
(16, 'Edmundo', 'S.Galvan', 'Anatomia'),
(17, 'Frank H.', 'Netter', 'Anatomia'),
(18, 'Leo', 'Testut', 'Anatomia'),
(19, 'Andre', 'Latarjet', 'Anatomia'),
(20, 'Eduardo ', 'Espinoza Ramos', 'Análisis Matemático'),
(21, 'Jesus Armando', 'Venero Baldeon', 'Matematicas'),
(22, 'Carlos', 'Cuauhtemoc Sanchez', 'Literatura'),
(23, 'Jose Luis', 'Mejia', 'Literatura'),
(24, 'Becca', 'Fitzpatrick', 'Literatura'),
(25, 'Yukito', 'Ayatsuji', 'Naoyuki Uchida (内田 直行 Uchida Naoyuki?, 23 de diciembre de 1960), también es conocido por su seudónimo de Yukito Ayatsuji (綾辻 行人 Ayatsuji Yukito?), es un escritor japonés de misterio y horror. Es uno de los fundadores del Honkaku Mystery Writers Club of Japan y es uno de los escritores más representativos del nuevo movimiento tradicional de escritura de misterio japonés.1​2​ Está casado con la también escritora Fuyumi Ono, una autora de fantasía y horror conocida por su serie fantástica The Twelve Kingdoms.3​'),
(26, 'Hiro', 'Kiyohara', 'Autor con nombre nativo 紘 清原, con algunas obras desarrolladas como autor completo (como Tsumitsuki y Coin Laundry no Onna, por ejemplo) y varios éxitos como dibujante.\\r\\n\\r\\nEstos son los mangas dibujados por él: Another y su continuación Another 0, la serie Bannou Kanteishi Q con todos sus derivados, Kimi ni shika Kikoenai, Kizu, Shissou Holiday, Tantei no Tantei y Tokutou Tenjouin Alpha no Nanjiken.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cate_id` int(11) NOT NULL,
  `cate_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cate_id`, `cate_nombre`) VALUES
(1, 'Ingeniería'),
(2, 'Biomédicas'),
(3, 'Sociales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar`
--

CREATE TABLE `ejemplar` (
  `ejem_id` int(11) NOT NULL,
  `ejem_titulo` varchar(150) DEFAULT NULL,
  `ejem_editorial` varchar(45) DEFAULT NULL,
  `ejem_paginas` int(11) DEFAULT NULL,
  `ejem_isbn` varchar(20) DEFAULT NULL,
  `ejem_idioma` varchar(45) DEFAULT NULL,
  `ejem_portada` varchar(45) DEFAULT NULL,
  `ejem_digital` varchar(45) DEFAULT NULL,
  `ejem_audio` varchar(45) DEFAULT NULL,
  `ejem_resumen` varchar(255) DEFAULT NULL,
  `ejem_tipo_id` int(11) DEFAULT NULL,
  `ejem_cate_id` int(11) DEFAULT NULL,
  `ejem_valoracion` tinyint(1) DEFAULT NULL,
  `ejem_anio` int(11) DEFAULT NULL,
  `ejem_nprestamos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplar`
--

INSERT INTO `ejemplar` (`ejem_id`, `ejem_titulo`, `ejem_editorial`, `ejem_paginas`, `ejem_isbn`, `ejem_idioma`, `ejem_portada`, `ejem_digital`, `ejem_audio`, `ejem_resumen`, `ejem_tipo_id`, `ejem_cate_id`, `ejem_valoracion`, `ejem_anio`, `ejem_nprestamos`) VALUES
(1, 'Amor y Matematicas', NULL, 340, '986540000', 'ingles y español', 'portada.jpg', NULL, NULL, 'si no eres matematico este libro te hara desearlas ', 1, 1, NULL, 2001, NULL),
(4, 'Matematicas', NULL, 340, '986540000', 'español y ingles', 'portada.jpg', NULL, NULL, 'la historia', 1, 1, NULL, 2012, NULL),
(5, 'Amor', NULL, 340, '986540000', 'español y ingles', 'dora.jpg', NULL, NULL, 'la historia', 1, 1, NULL, 2012, NULL),
(6, 'Amor ', NULL, 340, '986540000', 'español y ingles', 'dora.jpg', NULL, NULL, 'nose', 1, 1, NULL, 2012, NULL),
(7, 'Atlas de Anatomia Humana', NULL, 565, '978-84-458-2607-2', 'español', 'netter.jpg', NULL, NULL, 'NETTER, ATLAS DE ANATOMÍA MÉDICA 7ma EDICIÓN Nueva edición del atlas de anatomía humana concebido desde una perspectiva clínica gracias a las incomparables ilustraciones Netter y “estilo Netter\" de la mano del magnífico ilustrador, Carlos Machado. La obra', 1, 2, NULL, 2014, NULL),
(8, 'Analisis Matematico', NULL, 779, '978-612-4160-05-9', 'español', 'espinoza.jpg', NULL, NULL, 'En la presente obra intitulada \"Análisis Matemático I para estudiantes de Ciencias e Ingeniería\" en su sexta edición, hemos aprovechado de las numerosas y valiosos comentarios y sugerencias de mis colegas que laboran en las diversas universidades de la ca', 1, 1, NULL, 2012, NULL),
(9, 'Compendio de Anatomia Descriptiva', NULL, 769, '84-345-1149-5', 'español', 'testut.jpg', NULL, NULL, 'No es este libro un tratado didáctico, sino, como indica su titulo, un simple resumen, lo mas sucinto posible, de las nociones de anatomía descriptiva que constituye la materia del primer examen del doctorado de Francia.', 1, 2, NULL, 1984, NULL),
(10, 'Los ojos de mi princesa 2', NULL, 223, '475-854-5243-459', 'español', 'los_ojos_de_mi_princesa.jpg', NULL, NULL, 'Es una de las más bellas historias de amor de la literatura actual, nos envuelve en la trama tanto, que terminamos formando parte de los protagonistas.  José Carlos, un joven estudiante, halla en la figura de Sheccid el motivo para superar sus propias lim', 1, 3, NULL, 2012, NULL),
(11, 'Claudia, cuídate cuando estés conmigo', NULL, 192, '978-603-4016-06-4', 'español', 'claudia-cuidate-cuando-estes-conmigo.jpg', NULL, NULL, 'Jota es un estudiante del último año de secundaria que junto a sus amigos y compañeros vive una serie de aventuras. Jota se ha ganado el apodo de “bebe” debido a que es menor y de contextura muy delgada. Esto le disgusta mucho, pero puede sobrellevarlo. J', 1, 3, NULL, 2007, NULL),
(12, 'Hush, Hush', NULL, 299, '978985255445', 'español', 'hush,_hush.jpg', NULL, NULL, 'Un juramento sagrado, un ángel caído, un amor prohibido. Nora Grey es responsable y lista y nada inclinada a la temeridad. Su primer error fue enamorarse de Patch. Patch tiene un pasado que podría llamarse cualquier cosa excepto inofensivo. Lo mejor que h', 1, 3, NULL, 2009, NULL),
(13, 'Biologia Anatomia', NULL, 457, '978-612-307-385-5', 'español', 'biologia-lumbreras.gif', NULL, NULL, 'Nueva edición actualizada que contiene 12 capítulos los cuales han sido desarrollados en relación con los temas que se solicitan en el examen de admisión.  El desarrollo del contenido teórico se muestra apoyado por imágenes y organizadores visuales con la', 1, 2, NULL, 2015, NULL),
(14, 'Another', NULL, 139, '978-0-316-24591-3', 'japones', 'another.jpg', NULL, NULL, 'En 1972, Misaki, un popular estudiante de la clase 3-3 de la Yomiyama North Middle School, murió repentinamente a mitad de curso. Impactados por la pérdida, sus compañeros y profesores siguieron actuando como si estuviera vivo. Tal es así que incluso pudo', 1, 3, NULL, 2012, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_autor`
--

CREATE TABLE `ejemplar_autor` (
  `rela_auto_id` int(11) NOT NULL,
  `rela_ejem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplar_autor`
--

INSERT INTO `ejemplar_autor` (`rela_auto_id`, `rela_ejem_id`) VALUES
(6, 1),
(6, 4),
(7, 4),
(7, 6),
(8, 6),
(10, 13),
(11, 13),
(12, 13),
(17, 7),
(18, 9),
(19, 9),
(20, 8),
(22, 10),
(23, 11),
(24, 12),
(25, 14),
(26, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_tipo`
--

CREATE TABLE `ejemplar_tipo` (
  `tipo_id` int(11) NOT NULL,
  `tipo_nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ejemplar_tipo`
--

INSERT INTO `ejemplar_tipo` (`tipo_id`, `tipo_nombre`) VALUES
(1, 'Libro'),
(2, 'Revistas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

CREATE TABLE `favorito` (
  `favo_usua_id` int(11) NOT NULL,
  `favo_ejem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `histo_id` int(11) NOT NULL,
  `histo_usua_id` int(11) DEFAULT NULL,
  `histo_termino` varchar(45) DEFAULT NULL,
  `histo_fechareg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticion`
--

CREATE TABLE `peticion` (
  `peti_id` int(11) NOT NULL,
  `peti_ejem_id` int(11) DEFAULT NULL,
  `peti_dias` int(11) DEFAULT NULL,
  `peti_usua_id` int(11) DEFAULT NULL,
  `peti_fechareg` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `peticion`
--

INSERT INTO `peticion` (`peti_id`, `peti_ejem_id`, `peti_dias`, `peti_usua_id`, `peti_fechareg`) VALUES
(4, 1, NULL, 6, '2019-12-18 08:20:51'),
(5, 1, NULL, 6, '2019-12-18 08:20:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `pres_id` int(11) NOT NULL,
  `pres_usua_id` int(11) DEFAULT NULL,
  `pres_ejem_id` int(11) DEFAULT NULL,
  `pres_fechareg` datetime DEFAULT NULL,
  `pres_dias` int(11) DEFAULT NULL,
  `pres_fechaprestamo` date DEFAULT NULL,
  `pres_fechadevolucion` date DEFAULT NULL,
  `pres_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usua_id` int(11) NOT NULL,
  `usua_login` varchar(45) DEFAULT NULL,
  `usua_password` varchar(45) DEFAULT NULL,
  `usua_codigo` int(11) DEFAULT NULL,
  `usua_nombres` varchar(45) DEFAULT NULL,
  `usua_apellidos` varchar(45) DEFAULT NULL,
  `usua_direccion` varchar(150) DEFAULT NULL,
  `usua_email` varchar(70) DEFAULT NULL,
  `usua_telefono` varchar(20) DEFAULT NULL,
  `usua_esadmin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usua_id`, `usua_login`, `usua_password`, `usua_codigo`, `usua_nombres`, `usua_apellidos`, `usua_direccion`, `usua_email`, `usua_telefono`, `usua_esadmin`) VALUES
(3, NULL, '81dc9bdb52d04dc20036dbd8313ed055', 980, 'admin', 'star', '123', 'admin@admin.com', '9324234', 1),
(6, NULL, '81dc9bdb52d04dc20036dbd8313ed055', 185393, 'serena', 'star', 'jr.234', 'usuario@usuario.com', '98765674', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indices de la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD PRIMARY KEY (`ejem_id`),
  ADD KEY `fk_ejemplar_ejemplar_tipo_idx` (`ejem_tipo_id`),
  ADD KEY `fk_ejemplar_categoria1_idx` (`ejem_cate_id`);

--
-- Indices de la tabla `ejemplar_autor`
--
ALTER TABLE `ejemplar_autor`
  ADD PRIMARY KEY (`rela_auto_id`,`rela_ejem_id`),
  ADD KEY `fk_ejemplar_autor_ejemplar1_idx` (`rela_ejem_id`);

--
-- Indices de la tabla `ejemplar_tipo`
--
ALTER TABLE `ejemplar_tipo`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Indices de la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD PRIMARY KEY (`favo_usua_id`,`favo_ejem_id`),
  ADD KEY `fk_favorito_ejemplar1_idx` (`favo_ejem_id`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`histo_id`),
  ADD KEY `fk_historial_usuario1_idx` (`histo_usua_id`);

--
-- Indices de la tabla `peticion`
--
ALTER TABLE `peticion`
  ADD PRIMARY KEY (`peti_id`),
  ADD KEY `fk_peticion_ejemplar1_idx` (`peti_ejem_id`),
  ADD KEY `fk_peticion_usuario1_idx` (`peti_usua_id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`pres_id`),
  ADD KEY `fk_prestamo_usuario1_idx` (`pres_usua_id`),
  ADD KEY `fk_prestamo_ejemplar1_idx` (`pres_ejem_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usua_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  MODIFY `ejem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `ejemplar_tipo`
--
ALTER TABLE `ejemplar_tipo`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `peticion`
--
ALTER TABLE `peticion`
  MODIFY `peti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `pres_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usua_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD CONSTRAINT `fk_ejemplar_categoria1` FOREIGN KEY (`ejem_cate_id`) REFERENCES `categoria` (`cate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejemplar_ejemplar_tipo` FOREIGN KEY (`ejem_tipo_id`) REFERENCES `ejemplar_tipo` (`tipo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejemplar_autor`
--
ALTER TABLE `ejemplar_autor`
  ADD CONSTRAINT `fk_ejemplar_autor_autor1` FOREIGN KEY (`rela_auto_id`) REFERENCES `autor` (`auto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejemplar_autor_ejemplar1` FOREIGN KEY (`rela_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `fk_favorito_ejemplar1` FOREIGN KEY (`favo_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favorito_usuario1` FOREIGN KEY (`favo_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_historial_usuario1` FOREIGN KEY (`histo_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peticion`
--
ALTER TABLE `peticion`
  ADD CONSTRAINT `fk_peticion_ejemplar1` FOREIGN KEY (`peti_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_usuario1` FOREIGN KEY (`peti_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_prestamo_ejemplar1` FOREIGN KEY (`pres_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestamo_usuario1` FOREIGN KEY (`pres_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
