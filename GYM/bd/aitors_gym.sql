-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2024 a las 08:46:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aitors_gym`
--
CREATE DATABASE IF NOT EXISTS `aitors_gym` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aitors_gym`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos_nutricion`
--

DROP TABLE IF EXISTS `articulos_nutricion`;
CREATE TABLE `articulos_nutricion` (
  `id_articulo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `parrafo1` text NOT NULL,
  `parrafo2` text DEFAULT NULL,
  `parrafo3` text DEFAULT NULL,
  `parrafo4` text DEFAULT NULL,
  `parrafo5` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulos_nutricion`
--

INSERT INTO `articulos_nutricion` (`id_articulo`, `titulo`, `imagen`, `parrafo1`, `parrafo2`, `parrafo3`, `parrafo4`, `parrafo5`) VALUES
(1, 'Importancia de una Dieta Balanceada', '../Img/art-1', 'Una dieta balanceada es clave para mantener un cuerpo sano y lleno de energía. Esto significa consumir alimentos en las proporciones correctas de carbohidratos, proteínas y grasas saludables, junto con vitaminas y minerales esenciales. Una dieta equilibrada no solo ayuda a mantener un peso adecuado, sino que también fortalece el sistema inmunológico y reduce el riesgo de enfermedades crónicas como diabetes y problemas cardíacos. Además, al mantener un equilibrio adecuado en la alimentación, el cuerpo obtiene todos los nutrientes necesarios para realizar funciones vitales como la regeneración celular, la producción de energía y la reparación de tejidos.', 'Las proteínas son esenciales para construir y reparar tejidos, mientras que los carbohidratos son la principal fuente de energía del cuerpo. Las grasas saludables, por su parte, son fundamentales para el funcionamiento del cerebro y la absorción de ciertas vitaminas. Es importante evitar los extremos: consumir en exceso cualquiera de estos grupos puede llevar a desequilibrios en el organismo. Por ejemplo, un exceso de carbohidratos simples puede provocar picos de azúcar en sangre, mientras que una ingesta descontrolada de grasas saturadas podría contribuir al desarrollo de enfermedades cardiovasculares.', 'Otro aspecto crucial de una dieta balanceada es el consumo de frutas y verduras, las cuales están repletas de vitaminas, minerales y antioxidantes. Estos no solo mejoran la función celular, sino que también ayudan a combatir el daño causado por los radicales libres, reduciendo así el envejecimiento prematuro y el riesgo de enfermedades. Las frutas y verduras también aportan fibra, un componente esencial para la salud digestiva y el control del apetito.', NULL, NULL),
(2, 'Beneficios de Comer Frutas y Verduras', '../Img/art-2', 'Las frutas y verduras son esenciales en una dieta saludable, ya que son fuentes ricas de vitaminas, minerales y antioxidantes. Cada fruta y verdura aporta nutrientes únicos, como la vitamina C en las naranjas, el potasio en los plátanos o el hierro en las espinacas. Estas sustancias no solo mejoran la función celular, sino que también refuerzan el sistema inmunológico, ayudando al cuerpo a combatir infecciones y enfermedades. Además, las frutas y verduras son bajas en calorías, lo que las convierte en una opción ideal para quienes desean mantener un peso saludable sin comprometer el valor nutricional de sus comidas.', 'El consumo regular de frutas y verduras está asociado con una reducción significativa del riesgo de enfermedades crónicas, como hipertensión, diabetes tipo 2 y ciertos tipos de cáncer. Esto se debe a los antioxidantes y fitoquímicos que contienen, los cuales neutralizan los radicales libres que dañan las células y pueden llevar al desarrollo de estas enfermedades. Por ejemplo, los tomates contienen licopeno, un compuesto que ayuda a prevenir el cáncer de próstata, mientras que los arándanos están cargados de antioxidantes que mejoran la salud del cerebro y el sistema cardiovascular.', 'Además de sus beneficios para la salud, las frutas y verduras son una fuente excelente de fibra dietética, que es esencial para el buen funcionamiento del sistema digestivo. La fibra promueve la regularidad intestinal y previene problemas como el estreñimiento. También ayuda a mantener la sensación de saciedad, lo que puede ser muy útil para quienes intentan controlar su peso. Los alimentos ricos en fibra también ayudan a reducir los niveles de colesterol y a estabilizar los niveles de azúcar en la sangre.', NULL, NULL),
(3, 'El Rol de las Proteínas en una Dieta Saludable', '../Img/art-3', 'Las proteínas son nutrientes esenciales para el cuerpo humano, responsables de la construcción y reparación de tejidos, así como de la producción de enzimas y hormonas vitales. Estos compuestos están formados por aminoácidos, algunos de los cuales son esenciales y deben ser obtenidos a través de la dieta, ya que el cuerpo no puede producirlos por sí mismo. Consumir suficientes proteínas es fundamental para mantener la masa muscular, especialmente en personas que realizan actividad física regular o están en procesos de recuperación tras una lesión.', 'Las fuentes de proteínas se dividen en dos categorías: animales y vegetales. Las proteínas de origen animal, como las que se encuentran en carnes, huevos y lácteos, suelen ser completas, ya que contienen todos los aminoácidos esenciales. Por otro lado, las proteínas de origen vegetal, como las legumbres, los frutos secos y los granos integrales, pueden no ser completas, pero se pueden combinar para obtener todos los nutrientes necesarios. Por ejemplo, combinar arroz y frijoles resulta en una proteína completa y balanceada.', 'Además de su papel estructural en el cuerpo, las proteínas tienen un efecto significativo en la regulación del apetito. Al ser más saciantes que los carbohidratos y las grasas, ayudan a controlar el hambre y a mantener un peso saludable. Esto es especialmente útil en dietas diseñadas para perder grasa corporal, ya que un mayor consumo de proteínas puede prevenir la pérdida de masa muscular mientras se reduce la grasa.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

DROP TABLE IF EXISTS `entrenadores`;
CREATE TABLE `entrenadores` (
  `id_entrenador` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `origen` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `altura` decimal(4,2) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `entrenadores`
--

INSERT INTO `entrenadores` (`id_entrenador`, `foto`, `nombre`, `origen`, `edad`, `altura`, `descripcion`) VALUES
(1, '../Img/E-Hombre1', 'Juan Pérez', 'Perú', 28, 1.75, 'Apasionado por el fitness'),
(2, '../Img/E-Mujer1', 'María López', 'Perú', 24, 1.65, 'Le encanta la nutrición'),
(3, '../Img/E-Mujer2', 'Johana Torres', 'Perú', 30, 1.80, 'Instructora de yoga'),
(4, '../Img/E-Hombre2', 'Julio Gonzales', 'Perú', 27, 1.60, 'Amante de los deportes extremos'),
(5, '../Img/E-Hombre3', 'Anthony Lopez', 'Perú', 25, 1.68, 'Especialista en pilates'),
(6, '../Img/E-Mujer3', 'Marta Guerrero', 'Perú', 29, 1.78, 'Futbolista profesional retirada'),
(7, '../Img/E-Mujer4', 'Ana Rivera', 'Perú', 26, 1.70, 'Fanática del atletismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresias`
--

DROP TABLE IF EXISTS `membresias`;
CREATE TABLE `membresias` (
  `id_membresia` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `costo` decimal(10,2) NOT NULL,
  `duracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_contratados`
--

DROP TABLE IF EXISTS `servicios_contratados`;
CREATE TABLE `servicios_contratados` (
  `id_servicio` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_membresia` int(11) NOT NULL,
  `fecha_adquisicion` date NOT NULL,
  `id_entrenador` int(11) DEFAULT NULL,
  `fecha_contrato` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombres`, `correo`, `fecha_nacimiento`, `password`) VALUES
(1, 'Ilder', 'Guevara Heredia', 'awdawd@gmail', '2000-12-12', '$2y$10$6maZLEu9AFrdBluzrSCW9OKnRzBqojFSZvALc6oBIDmG9Sm28XDC.'),
(2, 'Redli', 'Guevara Heredia', 'a1233d@gmail', '2003-12-12', '$2y$10$otS83PX5jilLE6cLh0RbW.QU5r7kIjHuhWJm5ZzpijRRa0VCQ8F72'),
(3, 'YOEL', 'awdawd', 'a1awdawd233d@gmail', '2000-12-12', '$2y$10$wSaEZ9yei8TFl4SFcftNVe20J7MJ0kfAA300QFJZnOK8EkJoMpfsa'),
(4, 'Ana', 'Guevara Heredia', 'wdawdaw@jajdaw.com', '2000-12-12', '$2y$10$h4/xsd/lRUi2VBbJNkwct./bP/5QSfblJQM.JohgsDFuHS8fXv8WO'),
(5, 'Octavio', 'Guevara Heredia', '12313123@hagdawd.com', '2000-02-11', '$2y$10$AHxNFfIBH6tOwuoaP9rV8uwJ9dTYOorRKj3IhJCHvUI6OpCoMfSBq'),
(6, 'User', 'Guevara Heredia', 'awdaxzcxcwd@gmail', '2000-12-12', '$2y$10$odFKB9jHaCPqsnh0wSY1ZuajgneV1EQ2Wi/2WChhLxPJhOg1SqCAa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos_nutricion`
--
ALTER TABLE `articulos_nutricion`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`id_entrenador`);

--
-- Indices de la tabla `membresias`
--
ALTER TABLE `membresias`
  ADD PRIMARY KEY (`id_membresia`);

--
-- Indices de la tabla `servicios_contratados`
--
ALTER TABLE `servicios_contratados`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_membresia` (`id_membresia`),
  ADD KEY `id_entrenador` (`id_entrenador`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos_nutricion`
--
ALTER TABLE `articulos_nutricion`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  MODIFY `id_entrenador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `membresias`
--
ALTER TABLE `membresias`
  MODIFY `id_membresia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios_contratados`
--
ALTER TABLE `servicios_contratados`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `servicios_contratados`
--
ALTER TABLE `servicios_contratados`
  ADD CONSTRAINT `servicios_contratados_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `servicios_contratados_ibfk_2` FOREIGN KEY (`id_membresia`) REFERENCES `membresias` (`id_membresia`) ON DELETE CASCADE,
  ADD CONSTRAINT `servicios_contratados_ibfk_3` FOREIGN KEY (`id_entrenador`) REFERENCES `entrenadores` (`id_entrenador`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
