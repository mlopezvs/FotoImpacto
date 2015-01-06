-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2014 a las 11:37:17
-- Versión del servidor: 5.5.40-cll
-- Versión de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `impactoe_impactoe4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie_entrada`
--

CREATE TABLE IF NOT EXISTS `ie_entrada` (
  `id_entrada` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `titulo_id` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `id_imagen` int(11) NOT NULL,
  `fecha_registro` char(15) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '2',
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_entrada`),
  KEY `FK_ie_entrada_ie_imagenes_id_imagen` (`id_imagen`),
  KEY `FK_ie_entrada_ie_usuario_id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Volcado de datos para la tabla `ie_entrada`
--

INSERT INTO `ie_entrada` (`id_entrada`, `titulo`, `titulo_id`, `descripcion`, `id_imagen`, `fecha_registro`, `estado`, `id_usuario`) VALUES
(23, 'html5', 'html5', 'un gran aporte al desarrollo web', 65, '1414608078.1715', 1, 5),
(24, 'zorrito', 'zorrito', 'en el desierto', 66, '1414689042.3993', 1, 13),
(25, 'torta', 'torta', 'torta viajera\r\n', 67, '1414769490.7747', 1, 5),
(26, 'tormenta', 'tormenta', 'la gran foto\r\n', 68, '1414769516.5579', 1, 5),
(27, 'niÃ±os estudiando', 'nios-estudiando', 'que linda foto', 69, '1414769551.3772', 1, 5),
(28, 'diagrama de base de datos', 'diagrama-de-base-de-datos', 'esta es la estructura de impactoe\r\n', 70, '1414769803.1651', 1, 5),
(29, 'banner', 'banner', 'culto de jovenes', 71, '1414769842.4219', 1, 5),
(30, 'efectos vintage', 'efectos-vintage', 'se sobrepone a la foto y queda excelente', 72, '1414770045.5191', 1, 5),
(31, 'marcha del dolar', 'marcha-del-dolar', 'este es el banner sobre el cual se pone la ofrenda  para bethel telecomunicaciones', 73, '1414770112.4444', 1, 5),
(32, 'mapa', 'mapa', 'descripciÃ³n del mapa', 74, '1415055318.2837', 1, 5),
(33, 'horario', 'horario', 'detalle de plenarias', 75, '1415198445.083', 1, 5),
(34, 'rosa de luto', 'rosa-de-luto', 'una rosa blanca', 76, '1415203012.7968', 1, 5),
(35, 'en la redaccion de impacto', 'en-la-redaccion-de-impacto', 'Prueba de carga de fotografia', 77, '1415215813.73', 1, 5),
(36, 'Para Dios nada es Imposible', 'para-dios-nada-es-imposible', 'Estadio San Marcos', 78, '1415216560.23', 1, 14),
(37, 'Para Dios nada es Imposible', 'para-dios-nada-es-imposible', '2do DÃ­a ', 79, '1415216651.95', 1, 14),
(38, 'hno eliseo', 'hno-eliseo', 'Renderizando', 82, '1415217057.04', 1, 15),
(39, 'CONFRATERNIDAD DE DAMAS EN IQUIQUE', 'confraternidad-de-damas-en-iqu', 'hola como estas', 83, '1415217201.82', 1, 5),
(40, 'las hermanas', 'las-hermanas', 'Un break despues del almuerzo\r\n', 85, '1415218283.73', 1, 15),
(41, 'juan', 'juan', 'Descripcion', 86, '1415218393.33', 1, 15),
(42, 'Prueba', 'prueba', 'Prueba 5', 87, '1415218572.67', 1, 16),
(43, 'koi', 'koi', 'Hola', 89, '1415290842.75', 1, 18),
(44, 'yui', 'yui', 'Yui', 93, '1415293003.26', 1, 18),
(45, 'bien', 'bien', 'Grabacion', 106, '1415296040.79', 1, 18),
(46, 'hola', 'hola', 'Nombre', 109, '1415296294.58', 1, 18),
(51, 'camara', 'camara', 'esto es una camara', 122, '1415377703.53', 1, 19),
(52, 'boton', 'boton', 'el reprpductor de radio player', 123, '1415393005.05', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie_imagenes`
--

CREATE TABLE IF NOT EXISTS `ie_imagenes` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_registro` varchar(255) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL,
  `size_kb` varchar(255) DEFAULT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `fregistro` varchar(15) DEFAULT NULL,
  `url_imagen` varchar(255) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- Volcado de datos para la tabla `ie_imagenes`
--

INSERT INTO `ie_imagenes` (`id_imagen`, `nombre_registro`, `nombre_archivo`, `size_kb`, `extension`, `fregistro`, `url_imagen`, `estado`) VALUES
(1, '31678771.png', 'banner1.png', '353.037109', 'image/png', '1412628503.0387', 'ie_imagenes/31678771.png', 0),
(2, '79279785.png', 'banner_pavoreal2.png', '1960.873046', 'image/png', '1412628819.1518', 'ie_imagenes/79279785.png', 0),
(3, '60534362.jpg', '1680_1050_20100502020747162374.jpg', '121.648437', 'image/jpeg', '1412629113.1604', 'ie_imagenes/60534362.jpg', 0),
(4, '38803405.png', 'SLIDER MISIONES.png', '238.749023', 'image/png', '1412694341.5971', 'ie_imagenes/38803405.png', 0),
(5, '42582702.jpg', 'banderas.jpg', '20.9521484375', 'image/jpeg', '1412696492.4763', 'ie_imagenes/42582702.jpg', 0),
(6, '74451293.jpg', '10154292_1444793769104186_7067186362776042633_n.jpg', '115.6669921875', 'image/jpeg', '1412706004.7974', 'ie_imagenes/74451293.jpg', 0),
(7, '12535095.jpg', '10154292_1444793769104186_7067186362776042633_n.jpg', '115.6669921875', 'image/jpeg', '1412706390.0827', 'ie_imagenes/12535095.jpg', 0),
(8, '56557312.jpg', '10486846_849274288429592_867432656_n.jpg', '58.076171875', 'image/jpeg', '1412706399.1314', 'ie_imagenes/56557312.jpg', 0),
(9, '35059814.jpg', '10486846_849274288429592_867432656_n.jpg', '58.076171875', 'image/jpeg', '1412706437.9128', 'ie_imagenes/35059814.jpg', 0),
(10, '99071655.jpg', '10486846_849274288429592_867432656_n.jpg', '58.076171875', 'image/jpeg', '1412706446.67', 'ie_imagenes/99071655.jpg', 0),
(11, '35529479.jpg', '10486846_849274288429592_867432656_n.jpg', '58.076171875', 'image/jpeg', '1412706483.3907', 'ie_imagenes/35529479.jpg', 0),
(12, '71171875.jpg', '10486846_849274288429592_867432656_n.jpg', '58.076171875', 'image/jpeg', '1412706559.2078', 'ie_imagenes/71171875.jpg', 0),
(13, '49276123.jpg', '10486846_849274288429592_867432656_n.jpg', '58.076171875', 'image/jpeg', '1412706584.2247', 'ie_imagenes/49276123.jpg', 0),
(14, '51640930.jpg', '10486846_849274288429592_867432656_n.jpg', '58.076171875', 'image/jpeg', '1412706592.1075', 'ie_imagenes/51640930.jpg', 0),
(15, '10628967.jpg', 'banderas.jpg', '20.9521484375', 'image/jpeg', '1412706608.0225', 'ie_imagenes/10628967.jpg', 0),
(16, '60358581.jpg', 'banderas.jpg', '20.9521484375', 'image/jpeg', '1412706980.2381', 'ie_imagenes/60358581.jpg', 0),
(17, '33148193.jpg', '10486846_849274288429592_867432656_n.jpg', '58.076171875', 'image/jpeg', '1412707028.9205', 'ie_imagenes/33148193.jpg', 0),
(18, '30184631.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412707135.2516', 'ie_imagenes/30184631.jpg', 0),
(19, '20750122.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412707185.0729', 'ie_imagenes/20750122.jpg', 0),
(20, '51031188.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412707202.3235', 'ie_imagenes/51031188.jpg', 0),
(21, '58062438.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412707263.4242', 'ie_imagenes/58062438.jpg', 0),
(22, '57087402.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412707288.6126', 'ie_imagenes/57087402.jpg', 0),
(23, '85135498.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412707299.3746', 'ie_imagenes/85135498.jpg', 0),
(24, '54107360.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709387.1114', 'ie_imagenes/54107360.jpg', 0),
(25, '77390136.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709493.8428', 'ie_imagenes/77390136.jpg', 0),
(26, '49300842.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709657.2259', 'ie_imagenes/49300842.jpg', 0),
(27, '13493652.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709686.1342', 'ie_imagenes/13493652.jpg', 0),
(28, '56917114.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709710.8675', 'ie_imagenes/56917114.jpg', 0),
(29, '65681457.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709762.65', 'ie_imagenes/65681457.jpg', 0),
(30, '58809509.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709766.287', 'ie_imagenes/58809509.jpg', 0),
(31, '75964660.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709794.6233', 'ie_imagenes/75964660.jpg', 0),
(32, '72424316.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709931.632', 'ie_imagenes/72424316.jpg', 0),
(33, '57683410.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709944.5979', 'ie_imagenes/57683410.jpg', 0),
(34, '52572021.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709957.391', 'ie_imagenes/52572021.jpg', 0),
(35, '53742065.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709966.8043', 'ie_imagenes/53742065.jpg', 0),
(36, '66398315.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709985.7183', 'ie_imagenes/66398315.jpg', 0),
(37, '62885437.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412709989.2355', 'ie_imagenes/62885437.jpg', 0),
(38, '94825439.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412710013.0923', 'ie_imagenes/94825439.jpg', 0),
(39, '86907043.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412710041.6929', 'ie_imagenes/86907043.jpg', 0),
(40, '70529174.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1412710077.703', 'ie_imagenes/70529174.jpg', 0),
(41, '14254455.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412710135.9957', 'ie_imagenes/14254455.jpg', 0),
(42, '66618041.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412710147.852', 'ie_imagenes/66618041.jpg', 0),
(43, '32381896.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412710177.3052', 'ie_imagenes/32381896.jpg', 0),
(44, '18149108.jpg', 'un-paisaje-muy-bello-1895.jpg', '2540.634765625', 'image/jpeg', '1412710187.9696', 'ie_imagenes/18149108.jpg', 0),
(45, '39377441.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1413297646.8545', 'ie_imagenes/39377441.jpg', 0),
(46, '31695251.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1413298244.1196', 'ie_imagenes/31695251.jpg', 0),
(47, '11458435.png', 'banner_pavoreal2.png', '1960.873046875', 'image/png', '1413304537.9716', 'ie_imagenes/11458435.png', 0),
(48, '82182922.png', 'banner6.png', '263.904296875', 'image/png', '1413304626.8818', 'ie_imagenes/82182922.png', 0),
(49, '20945129.png', 'banner.png', '635.1298828125', 'image/png', '1413305567.915', 'ie_imagenes/20945129.png', 0),
(50, '99269409.png', 'ebdv1.png', '458.408203125', 'image/png', '1413305816.7099', 'ie_imagenes/99269409.png', 0),
(51, '45834655.png', 'banner(141014).png', '571.6162109375', 'image/png', '1413306101.9153', 'ie_imagenes/45834655.png', 0),
(52, '84797668.png', 'banner1.png', '353.037109375', 'image/png', '1413308647.8666', 'ie_imagenes/84797668.png', 0),
(53, '55134582.jpg', '10487729_849274895096198_879861305_n.jpg', '93.1630859375', 'image/jpeg', '1413309338.2416', 'ie_imagenes/55134582.jpg', 0),
(54, '14133605.jpg', 'cc3adculo-cromc3a1tico.jpg', '384.4443359375', 'image/jpeg', '1413309583.6051', 'ie_imagenes/14133605.jpg', 0),
(55, '19470214.jpg', '10451743_828078923880159_5788400242679328147_n.jpg', '80.375', 'image/jpeg', '1413309610.0135', 'ie_imagenes/19470214.jpg', 0),
(56, '56658935.jpg', 's_n14_208408os.jpg', '128.91796875', 'image/jpeg', '1414079204.0967', 'ie_imagenes/56658935.jpg', 0),
(57, '31588134.jpg', 'mq1.jpg', '9.224609375', 'image/jpeg', '1414185535.527', 'ie_imagenes/31588134.jpg', 0),
(58, '16418762.jpg', 'natgeo01.jpg', '60.01171875', 'image/jpeg', '1414421334.6492', 'ie_imagenes/16418762.jpg', 0),
(59, '33395385.jpg', 'natgeo01.jpg', '60.01171875', 'image/jpeg', '1414421342.193', 'ie_imagenes/33395385.jpg', 0),
(60, '43066101.jpg', 'natgeo01.jpg', '60.01171875', 'image/jpeg', '1414421632.3121', 'ie_imagenes/43066101.jpg', 0),
(61, '63401794.jpg', 'form2.jpg', '65.314453125', 'image/jpeg', '1414520675.1988', 'ie_imagenes/63401794.jpg', 0),
(62, '80274047.jpg', 'diagramadecasodeuso.jpg', '63.109375', 'image/jpeg', '1414521101.4353', 'ie_imagenes/80274047.jpg', 0),
(63, '90340270.jpg', 'diagramadecasodeuso.jpg', '63.109375', 'image/jpeg', '1414521115.7269', 'ie_imagenes/90340270.jpg', 0),
(64, '80556945.jpg', 'es_255_html5_css3_tabletas.jpg', '20.751953125', 'image/jpeg', '1414607789.5157', 'ie_imagenes/80556945.jpg', 0),
(65, '15707397.jpg', 'es_255_html5_css3_tabletas.jpg', '20.751953125', 'image/jpeg', '1414608058.0095', 'ie_imagenes/15707397.jpg', 0),
(66, '82064819.jpg', 'natgeo01.jpg', '60.01171875', 'image/jpeg', '1414689031.7953', 'ie_imagenes/82064819.jpg', 0),
(67, '86319274.jpg', 'c16d4d92bc9e67d7400d0997e57d3e9e.jpg', '1001.2763671875', 'image/jpeg', '1414769480.3069', 'ie_imagenes/86319274.jpg', 0),
(68, '42211914.jpg', 'TormentaenelCaulle.jpg', '95.685546875', 'image/jpeg', '1414769504.3222', 'ie_imagenes/42211914.jpg', 0),
(69, '22505187.jpg', 's_n21_209279tp.jpg', '134.728515625', 'image/jpeg', '1414769531.8375', 'ie_imagenes/22505187.jpg', 0),
(70, '10565795.jpg', 'bd.jpg', '151.4921875', 'image/jpeg', '1414769707.4926', 'ie_imagenes/10565795.jpg', 0),
(71, '63390808.png', 'esperanza-940x500.png', '339.572265625', 'image/png', '1414769822.1677', 'ie_imagenes/63390808.png', 0),
(72, '71160888.jpg', 'bokeh_texture_by_willawalo-d4hlkzh.jpg', '46.298828125', 'image/jpeg', '1414770023.1149', 'ie_imagenes/71160888.jpg', 0),
(73, '55988769.png', 'marcha-del-dolar.png', '450.54296875', 'image/png', '1414770064.4277', 'ie_imagenes/55988769.png', 0),
(74, '23403320.png', 'image.png', '231.0185546875', 'image/png', '1415055307.0914', 'ie_imagenes/23403320.png', 0),
(75, '57867431.jpg', 'horariocreacionismo.jpg', '121.8623046875', 'image/jpeg', '1415198431.8372', 'ie_imagenes/57867431.jpg', 0),
(76, '21431274.jpg', 'rosa.jpg', '107.5908203125', 'image/jpeg', '1415202988.4591', 'ie_imagenes/21431274.jpg', 0),
(77, '81165074.jpg', '1415215762375-1114645441.jpg', '695.196289062', 'image/jpeg', '1415215751.19', 'ie_imagenes/81165074.jpg', 0),
(78, '50912178.jpg', 'image.jpg', '77.07421875', 'image/jpeg', '1415216508.79', 'ie_imagenes/50912178.jpg', 0),
(79, '22314668.jpg', 'image.jpg', '99.1318359375', 'image/jpeg', '1415216592.91', 'ie_imagenes/22314668.jpg', 0),
(80, '66742975.jpg', 'image.jpg', '105.12890625', 'image/jpeg', '1415216944.94', 'ie_imagenes/66742975.jpg', 0),
(81, '88967352.jpg', '1415217031909624510357.jpg', '530.92578125', 'image/jpeg', '1415217011.18', 'ie_imagenes/88967352.jpg', 0),
(82, '84927059.jpg', '1415217052039-1207433687.jpg', '514.107421875', 'image/jpeg', '1415217029.23', 'ie_imagenes/84927059.jpg', 0),
(83, '45630438.jpg', '81165074.jpg', '695.196289062', 'image/jpeg', '1415217192.64', 'ie_imagenes/45630438.jpg', 0),
(84, '22545956.jpg', '1415217947376-1558971863.jpg', '685.821289062', 'image/jpeg', '1415217929.65', 'ie_imagenes/22545956.jpg', 0),
(85, '30944794.jpg', '1415218259055-1893609670.jpg', '550.295898438', 'image/jpeg', '1415218253.24', 'ie_imagenes/30944794.jpg', 0),
(86, '71090701.jpg', '14152183579401070306924.jpg', '595.627929688', 'image/jpeg', '1415218340.18', 'ie_imagenes/71090701.jpg', 0),
(87, '49675122.jpg', 'image.jpg', '78.849609375', 'image/jpeg', '1415218541.93', 'ie_imagenes/49675122.jpg', 0),
(88, '25789720.jpg', '1415290455368396371546.jpg', '755.439453125', 'image/jpeg', '1415290443.44', 'ie_imagenes/25789720.jpg', 0),
(89, '17353563.jpg', '1415290455368396371546.jpg', '755.439453125', 'image/jpeg', '1415290819.75', 'ie_imagenes/17353563.jpg', 0),
(90, '42601544.jpg', '1415292547756-1571631898.jpg', '744.598632812', 'image/jpeg', '1415292542.41', 'ie_imagenes/42601544.jpg', 0),
(91, '87944525.jpg', '1415292699320-1424527568.jpg', '733.545898438', 'image/jpeg', '1415292694.75', 'ie_imagenes/87944525.jpg', 0),
(92, '12516237.jpg', '14152927679051042838767.jpg', '603.232421875', 'image/jpeg', '1415292747.08', 'ie_imagenes/12516237.jpg', 0),
(93, '29451636.jpg', '1415292990854137720535.jpg', '663.145507812', 'image/jpeg', '1415292974.94', 'ie_imagenes/29451636.jpg', 0),
(94, '18037034.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415293145.24', 'ie_imagenes/18037034.jpg', 0),
(95, '34024861.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415293573.9', 'ie_imagenes/34024861.jpg', 0),
(96, '92419236.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415293634.97', 'ie_imagenes/92419236.jpg', 0),
(97, '75371291.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415293913.73', 'ie_imagenes/75371291.jpg', 0),
(98, '38119347.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415293983.4', 'ie_imagenes/38119347.jpg', 0),
(99, '98681109.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415294459.19', 'ie_imagenes/98681109.jpg', 0),
(100, '96079407.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415294496.7', 'ie_imagenes/96079407.jpg', 0),
(101, '54263264.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415294575.21', 'ie_imagenes/54263264.jpg', 0),
(102, '17386416.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415294725.86', 'ie_imagenes/17386416.jpg', 0),
(103, '16572174.jpg', '14152931565201410599024.jpg', '472.504882812', 'image/jpeg', '1415294753', 'ie_imagenes/16572174.jpg', 0),
(104, '59554498.jpg', '14152931565201410599024.jpg', '0', 'image/jpeg', '1415294768.8', 'ie_imagenes/59554498.jpg', 0),
(105, '45716274.jpg', '14152959449112023764109.jpg', '509.836914062', 'image/jpeg', '1415295935.13', 'ie_imagenes/45716274.jpg', 0),
(106, '73061809.jpg', '14152960056931332387036.jpg', '576.525390625', 'image/jpeg', '1415296016.97', 'ie_imagenes/73061809.jpg', 0),
(107, '43225728.jpg', '14152960056931332387036.jpg', '0', 'image/jpeg', '1415296104.94', 'ie_imagenes/43225728.jpg', 0),
(108, '30380608.jpg', '1415296160607-739023559.jpg', '595.037109375', 'image/jpeg', '1415296139.6', 'ie_imagenes/30380608.jpg', 0),
(109, '43718700.jpg', '14152962745411516314758.jpg', '631.561523438', 'image/jpeg', '1415296268.16', 'ie_imagenes/43718700.jpg', 0),
(110, '79297625.jpg', 'image.jpg', '1260.33007812', 'image/jpeg', '1415296823.64', 'ie_imagenes/79297625.jpg', 0),
(111, '73601871.jpg', 'image.jpg', '1092.21289062', 'image/jpeg', '1415296964.85', 'ie_imagenes/73601871.jpg', 0),
(112, '47646719.jpg', 'image.jpg', '1185.06347656', 'image/jpeg', '1415297019.6', 'ie_imagenes/47646719.jpg', 0),
(113, '16178622.jpg', '20140610_163443.jpg', '1794.82519531', 'image/jpeg', '1415302246.48', 'ie_imagenes/16178622.jpg', 0),
(114, '83497748.jpg', '20140610_163443.jpg', '1794.82519531', 'image/jpeg', '1415303044.67', 'ie_imagenes/83497748.jpg', 0),
(115, '64172679.jpg', '20140610_163443.jpg', '1794.82519531', 'image/jpeg', '1415303106.75', 'ie_imagenes/64172679.jpg', 0),
(116, '95194494.jpg', '20140610_163443.jpg', '1794.82519531', 'image/jpeg', '1415303304.55', 'ie_imagenes/95194494.jpg', 0),
(117, '23179073.jpg', '20140610_163443.jpg', '1794.82519531', 'image/jpeg', '1415303384.54', 'ie_imagenes/23179073.jpg', 0),
(118, '87765271.jpg', '81165074.jpg', '695.196289062', 'image/jpeg', '1415306550.47', 'ie_imagenes/87765271.jpg', 0),
(119, '20787334.jpg', '81165074.jpg', '695.196289062', 'image/jpeg', '1415306575.06', 'ie_imagenes/20787334.jpg', 0),
(120, '61627969.jpg', 'image.jpg', '1281.1640625', 'image/jpeg', '1415306781.8', 'ie_imagenes/61627969.jpg', 0),
(121, '90325018.png', 'camara.png', '159.286132812', 'image/png', '1415377365.56', 'ie_imagenes/90325018.png', 0),
(122, '76273622.png', 'camara.png', '159.286132812', 'image/png', '1415377681.08', 'ie_imagenes/76273622.png', 0),
(123, '76768600.jpg', 'reproductor4.jpg', '14.7255859375', 'image/jpeg', '1415392992.65', 'ie_imagenes/76768600.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie_megusta`
--

CREATE TABLE IF NOT EXISTS `ie_megusta` (
  `id_megusta` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT NULL,
  `id_entrada` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_megusta`),
  KEY `FK_megusta_ie_usuario_id_usuario` (`id_usuario`),
  KEY `FK_megusta_ie_entrada_id_entrada` (`id_entrada`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie_operacion`
--

CREATE TABLE IF NOT EXISTS `ie_operacion` (
  `id_operacion` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  `nombre_btn` varchar(18) NOT NULL,
  `url_operacion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_operacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `ie_operacion`
--

INSERT INTO `ie_operacion` (`id_operacion`, `descripcion`, `nombre_btn`, `url_operacion`) VALUES
(1, 'Entradas', 'menu_entrada', 'ie_ModuloAdministrador/IndexEntradas.php'),
(2, 'Usuarios', 'menu_usuario', 'ie_ModuloAdministrador/IndexUsuarios.php'),
(3, 'Registrar Entrada', 'menu_registrarentr', 'ie_ModuloAdministrador/IndexRegistrarEntrada.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie_usuario`
--

CREATE TABLE IF NOT EXISTS `ie_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) DEFAULT NULL,
  `edad` varchar(10) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `fecha_nacimiento` varchar(10) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo_usuario` int(1) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `ie_usuario`
--

INSERT INTO `ie_usuario` (`id_usuario`, `nombre`, `edad`, `genero`, `email`, `password`, `fecha_nacimiento`, `fecha_registro`, `tipo_usuario`, `estado`) VALUES
(3, 'luis burgos', '34', 'm', 'soporte_villasur@hotmail.com', '123456', '', '2014-10-21 16:13:37', 1, 1),
(5, 'JosÃ© Santos Chocano', '45', 'm', 'soporte_villasur3@hotmail.com', '123456', '', '2014-10-21 16:13:37', 0, 1),
(13, 'Miguel Grau', '2002-01-29', 'm', 'soporte_villasur2@hotmail.com', '123456', '', '2014-10-30 17:10:24', 0, 1),
(14, 'Marco Lopez', '1990-07-18', 'm', 'mlopez18073@gmail.com', '123456', '', '2014-11-05 19:35:38', 0, 1),
(15, 'jorge roberto', '1997-12-10', 'm', 'soporte_villasur4@hotmail.com', '123456', '', '2014-11-05 19:41:30', 0, 1),
(16, 'Marco lopez', '', 'm', 'marcolopez49@hotmail.com', '123456', '1984-11-05', '2014-11-05 19:48:26', 0, 1),
(17, 'Miguel Angeles', '', 'm', 'soporte_villasur5@hotmail.com', '123456', '2006-12-12', '2014-11-06 15:52:51', 0, 1),
(18, 'miguel paredes', '', 'm', 'soporte_villasur6@hotmail.com', '123456', '1980-12-30', '2014-11-06 15:58:50', 0, 1),
(19, 'Aurelio Bonaparte', '', 'm', 'soporte_villasur7@hotmail.com', '123456', '2003-02-04', '2014-11-07 16:19:22', 0, 1),
(20, '', '', 'm', 'soporte_villasur10@hotmail.com', '123456', '2006-11-28', '2014-11-07 17:26:02', 0, 1),
(21, '', '', 'm', 'soporte_villasur11@hotmail.com', '123456', '2006-12-06', '2014-11-07 17:28:15', 0, 1),
(22, '', '', 'm', 'soporte_villasur17@hotmail.com', '123456', '2006-11-29', '2014-11-07 18:08:34', 0, 1),
(23, 'Casta&ntilde;eda Gonz&aacute;lez', '', 'm', 'soporte_villasur18@hotmail.com', '123456', '2006-11-30', '2014-11-07 18:22:04', 0, 1),
(25, 'Casta&ntilde;eda Gonz&aacute;lez', '', 'm', 'soporte_villasur20@hotmail.com', '123456', '2006-12-21', '2014-11-07 18:29:00', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ie_usuario_operacion`
--

CREATE TABLE IF NOT EXISTS `ie_usuario_operacion` (
  `estado` int(1) NOT NULL DEFAULT '1',
  `id_usuario_operacion` varchar(5) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_operacion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario_operacion`),
  KEY `FK_ie_usuario_operacion_id_operacion` (`id_operacion`),
  KEY `FK_ie_usuario_operacion_id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ie_usuario_operacion`
--

INSERT INTO `ie_usuario_operacion` (`estado`, `id_usuario_operacion`, `id_usuario`, `id_operacion`) VALUES
(1, '3_1', 3, 1),
(1, '3_2', 3, 2),
(1, '3_3', 3, 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ie_entrada`
--
ALTER TABLE `ie_entrada`
  ADD CONSTRAINT `FK_ie_entrada_ie_imagenes_id_imagen` FOREIGN KEY (`id_imagen`) REFERENCES `ie_imagenes` (`id_imagen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ie_entrada_ie_usuario_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `ie_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ie_megusta`
--
ALTER TABLE `ie_megusta`
  ADD CONSTRAINT `FK_megusta_ie_entrada_id_entrada` FOREIGN KEY (`id_entrada`) REFERENCES `ie_entrada` (`id_entrada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_megusta_ie_usuario_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `ie_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ie_usuario_operacion`
--
ALTER TABLE `ie_usuario_operacion`
  ADD CONSTRAINT `FK_ie_usuario_operacion_id_operacion` FOREIGN KEY (`id_operacion`) REFERENCES `ie_operacion` (`id_operacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_ie_usuario_operacion_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `ie_usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
