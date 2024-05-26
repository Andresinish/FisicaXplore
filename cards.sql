-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2024 a las 04:16:58
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
-- Base de datos: `fisicaxplore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards`
--

CREATE TABLE `cards` (
  `IDCarta` int(11) NOT NULL,
  `Palabra` varchar(30) NOT NULL,
  `Definicion` text NOT NULL,
  `IDTema` int(11) NOT NULL,
  `Imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cards`
--

INSERT INTO `cards` (`IDCarta`, `Palabra`, `Definicion`, `IDTema`, `Imagen`) VALUES
(1, 'Campo electrico', 'Un objeto con  carga eléctrica establece un campo de fuerza alrededor de él; este campo de fuerza se conoce como campo eléctrico. \r\n', 1, 'campoelec.png'),
(2, 'Magnitud', 'La magnitud de un vector representa el tamaño o la intensidad del vector, cuantificando cuánto mide en términos de unidades del campo eléctrico.\r\n', 1, 'magnitud.png'),
(3, 'Direccion', 'Se refiere al ángulo que forma el vector con respecto a una referencia predefinida.\r\n', 1, 'direccion.png'),
(4, 'Punto de aplicacion', 'Es el lugar específico donde se origina el vector, es decir, el punto en el espacio desde el cual se aplica la fuerza o influencia representada por el vector.\r\n', 1, 'puntoaplicacion.png'),
(5, 'Sentido', 'Indica la orientación hacia la cual apunta la flecha del vector.\r\n', 1, 'sentido.png'),
(6, 'Dipolos electricos', 'Conjunto de dos polos eléctricos o magnéticos de igual magnitud y signo contrario, y muy próximos.\r\n', 1, 'dipoloselec.png'),
(7, 'Vector', 'Es una representación que indica la fuerza eléctrica que una carga experimentaría en un punto específico.', 1, 'vectores.png'),
(8, 'Induccion', 'Una forma de cargar un objeto es tocarlo con una barra cargada. Sin embargo, hay fuerzas eléctricas que actúan a distancia y, por lo tanto, también es posible cargar un objeto sin tocarlo. La carga de un objeto sin contacto directo se conoce como carga por inducción.', 1, 'induccion.png'),
(9, 'Corriente electrica', 'Es el flujo de carga eléctrica a través de un material conductor.', 2, 'corrientelec.png'),
(10, 'Corriente directa', 'Tipo de corriente que siempre fluye en la misma dirección.', 2, 'corrientedirec.png'),
(11, 'Corriente alterna', 'Tipo de corriente que periódicamente invierte su sentido y dirección.', 2, 'corrientealterna.png'),
(12, 'Tridasica', 'Es la forma de electricidad más comúnmente generada y es sumamente eficaz.', 2, 'tridasica.png'),
(13, 'Voltimetro', 'Dispositivo que se usa para medir el voltaje.', 2, 'voltimetro.png'),
(14, 'Amperimetro', 'Dispositivo que se usa para medir corriente.', 2, 'amperimetro.png'),
(15, 'Resistor', 'Es un dispositivo pequeño que se usa en los circuitos eléctricos para ofrecer una resistencia particular a la corriente.', 2, 'resistor.png'),
(16, 'Monofasica', 'Se obtiene tomando una sola fase de la corriente trifásica y un cable neutro.', 2, 'monofasica.png'),
(17, 'Luz', 'Es energía y el fenómeno del color es un producto de la interacción de la energía y la materia.', 3, 'luz.png'),
(18, 'Rapidez de la luz', 'Indica la cantidad de distancia que la luz recorre, por unidad de tiempo.', 3, 'rapidezluz.png'),
(19, 'Optica geomatrica', 'Se basa en el concepto de rayo luminoso como trayectoria que siguen las partículas materiales emitidas por los cuerpos luminosos sin preocuparse de estudiar cuál es la naturaleza de la luz.\r\n', 3, 'opticageo.png'),
(20, 'Optica fisica (ondulatoria)', 'Considera la luz como una radiación electromagnética visible para nuestros ojos. La óptica física estudia los fenómenos luminosos e investiga cuál es la naturaleza de la luz.\r\n', 3, 'opticafisica.png'),
(21, 'Ley de reflexion', 'Un rayo es una recta matemática trazada perpendicular a los frentes de onda de una onda luminosa. Muestra la dirección de propagación de la energía electromagnética.', 3, 'leyreflexion.png'),
(22, 'Refracción de la luz', 'Cuando un rayo de luz pasa oblicuamente a través de la frontera entre dos materiales de índices de refracción diferentes, el rayo se desvía o quiebra.', 3, 'refraccionluz.png'),
(23, 'Ley de snell', 'La forma en la que un rayo se refracta en la interfaz entre dos materiales con índices de refracción ni y nt está dada por este ley: ni Sen Θi = nt Sen Θt\r\n', 3, 'leysnell.png'),
(24, 'Indice de refraccion', 'El índice absoluto de refracción de un material se define como: n = rapidez de la luz en el vacio / rapidez de la luz en el material = c / v.\r\nPara cualquiera de los dos materiales, el índice relativo de refracción del material 1, con respecto al material 2, es: Índice relativo = n1 / n2 donde n1 y n2 son los índices de refracción absolutos de los dos materiales.\r\n', 3, 'indicerefraccion.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`IDCarta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cards`
--
ALTER TABLE `cards`
  MODIFY `IDCarta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
