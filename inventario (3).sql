-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2025 a las 15:43:11
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
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacenado`
--

CREATE TABLE `almacenado` (
  `ID_ALMACENADO` int(20) NOT NULL,
  `NOMBRE_ALMACENADO` varchar(50) NOT NULL,
  `CATEGORIA_NOMBRE` varchar(50) NOT NULL,
  `SERIAL_ALMACENADO` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL,
  `OBSERV_ALMACENADO` varchar(150) NOT NULL,
  `ESTADO` varchar(50) NOT NULL,
  `nodos` varchar(50) NOT NULL,
  `CANTIDAD_ALMACENADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `almacenado`
--

INSERT INTO `almacenado` (`ID_ALMACENADO`, `NOMBRE_ALMACENADO`, `CATEGORIA_NOMBRE`, `SERIAL_ALMACENADO`, `OBSERV_ALMACENADO`, `ESTADO`, `nodos`, `CANTIDAD_ALMACENADO`) VALUES
(101, 'Mac book', 'Almacenado', '101001130533', 'Falta cargador ', 'BUENO', 'RADIOGRAF', 1),
(102, 'Portátil Hp probook', 'Almacenado', '92171011193', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(104, 'Portátil Hp probook', 'Almacenado', '92171011263', 'Tiene maleta, sin cargador  ', 'OPTIMO', 'RADIOGRAF', 1),
(105, 'Portátil Hp probook', 'Almacenado', '92171011390', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(106, 'Parlantes', 'Almacenado', '046', ' Sin Serial – marca q-bex ', 'BUENO', 'RADIOGRAF', 1),
(107, 'Buffer Logitech', 'Almacenado', '880-000-128', ' Salida Jack 3.5 a PC - salida VGA', 'BUENO', 'RADIOGRAF', 1),
(108, 'Mezclador-consola', 'Almacenado', '086792866291', 'MODELO YAMAHA MG166CX - Con cable  de energia', 'BUENO', 'RADIOGRAF', 1),
(109, 'Trípode de micrófono PROEL', 'Almacenado', '048', 'Sin Serial', 'BUENO', 'RADIOGRAF', 1),
(110, 'Trípode de micrófono voyager lite ', 'Almacenado', '049', 'sin serial - modelo bhq8- (remendado con cinta en el soporte para micrófonos) ', 'REGULAR', 'RADIOGRAF', 1),
(111, 'Filtro anti pop proel', 'Almacenado', '050', 'Sin serial', 'BUENO', 'RADIOGRAF', 1),
(112, 'Microfono shure negro', 'Almacenado', '119217000788', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(113, 'Microfono shure ', 'Almacenado', '051', ' MODELO PG48- Sin serial', 'BUENO', 'RADIOGRAF', 2),
(114, 'Trípode de micrófono PROEL ', 'Almacenado', '940617260', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(115, 'Microfono shure ', 'Almacenado', '052', 'MODELO C606 - Sin serial', 'BUENO', 'RADIOGRAF', 2),
(116, 'Microfono mxl ', 'Almacenado', '119217009001', ' Base del micrófono - Serial 119217001572', 'BUENO', 'RADIOGRAF', 1),
(117, 'Microfono ', 'Almacenado', '053', 'Se desconoce el modelo - Sin serial - conexión por XLR (No funcional) ', 'DAÑADO', 'RADIOGRAF', 1),
(118, 'Microfono', 'Almacenado', '054', 'De escritorio conexión por Jack 3.5 - se desconoce la modelo - Sin Serial - (No funcional) ', 'DAÑADO', 'RADIOGRAF', 1),
(119, 'Microfono Boya', 'Almacenado', '6971008026276', 'Negro', 'BUENO', 'RADIOGRAF', 1),
(120, 'CASCOS O DIADEMA DE AUDIO', 'Almacenado', '055', 'MODELO SENNHEISER HD 380 PRO-convertidor Plug Jack 3.5 a 6.3-las almohadillas están desgastadas', 'OPTIMO', 'RADIOGRAF', 1),
(121, 'Lampara de entrada xlr J&R', 'Almacenado', '056', '- Sin Serial', 'BUENO', 'RADIOGRAF', 1),
(122, 'Tablet Wacom ', 'Almacenado', '101001143746', ' Lápiz-cable3a1', 'BUENO', 'RADIOGRAF', 1),
(123, 'Cargador ENERGIZER', 'Almacenado', '057', ' Color negro - Sin Serial - Slot para 4 pilas AA o AAA', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(124, 'Cargador IRONBAT', 'Almacenado', '059', '- Color Gris - Sin Serial - Slot para 4 pilas AA o AAA y 2 Slot para pila 9V', 'BUENO', 'RADIOGRAF', 1),
(125, 'Cargador SILVERPOINT', 'Almacenado', '060', 'Sin serial', 'BUENO', 'RADIOGRAF', 2),
(126, 'Pilas aa recargables', 'Almacenado', '061', 'Sin serial', 'BUENO', 'RADIOGRAF', 15),
(127, ' PILA 9V', 'Almacenado', '062', 'Sin serial', 'BUENO', 'RADIOGRAF', 2),
(128, 'TAKSTAR', 'Almacenado', '4147838124630571', '1 RECEPTOR TS-331B WIRELESS-1 TRANSMISOR TS 331B MICROPHONE-1 CABLE CONEXIÓN Plug Jack 6.3-1 MICRÓFONO DE SOLAPA Plug Jack 3.5-1 CARGADOR - Modelo FD3', 'BUENO', 'RADIOGRAF', 1),
(129, 'TASCAM', 'Almacenado', '1001103729', '1 microSD de 32GB - Adaptador de microSD  1 adaptador de señal plug Jack 3.5 a 3.5  Caja en mal estado 19217008993', 'BUENO', 'RADIOGRAF', 1),
(130, 'USB', 'Almacenado', '064', 'Sin serial-32GB', 'BUENO', 'RADIOGRAF', 1),
(131, 'MicroSD', 'Almacenado', '065', 'Sin serial-32GB', 'BUENO', 'RADIOGRAF', 2),
(132, 'Caja de luz decorativa', 'Almacenado', '066', 'Sin serial', 'BUENO', 'RADIOGRAF', 1),
(133, 'Convertidores RCA audio a Plug 6.3', 'Almacenado', '067', 'Sin serial-(Uno está desbalanceado, pendiente a informe por baja) ', 'REGULAR', 'RADIOGRAF', 2),
(134, ' Carpeta roja', 'Almacenado', '068', 'Manuales de instrucción para el mixer Yamaha y otros dispositivos', 'BUENO', 'RADIOGRAF', 1),
(135, ' CD’s', 'Almacenado', '069', 'Sin serial-sin contenido y con forros individuales ', 'OPTIMO', 'RADIOGRAF', 64),
(136, 'CD’s', 'Almacenado', '070', ' Con contenido grabado y forros individuales', 'BUENO', 'RADIOGRAF', 26),
(137, ' Cilindros con CD’s', 'Almacenado', '071', 'Sin serial-sin contenido ', 'OPTIMO', 'RADIOGRAF', 3),
(138, 'Forros para CD ', 'Almacenado', '072', 'Sin serial-vacíos', 'OPTIMO', 'RADIOGRAF', 32),
(139, 'Cajas individuales de DVD’s ', 'Almacenado', '073', 'Con sus CD’s dentro- Sin serial-(La rosa Roja, Recuerdos entre Muros, Memorias) ', 'BUENO', 'RADIOGRAF', 3),
(140, ' Bolsa con botones Radiograf', 'Almacenado', '074', 'Sin serial-  (20 botones variados de radio, espiral, femigraf, también tres  carnets de uso de red de medios, posiblemente ya no se usan)', 'OPTIMO', 'RADIOGRAF', 20),
(141, 'Bolsa con stickers radiograf', 'Almacenado', '075', 'Sin serial', 'BUENO', 'RADIOGRAF', 1),
(142, 'Caja vacía', 'Almacenado', '076', 'Pertenece a letrero luminoso de radiograf ', 'BUENO', 'RADIOGRAF', 1),
(143, 'Anuncios promocionales', 'Almacenado', '077', 'De podcast especiales de Radiograf ', 'BUENO', 'RADIOGRAF', 5),
(144, 'Multitoma', 'Almacenado', '078', 'Sin serial- 4 entradas', 'BUENO', 'RADIOGRAF', 1),
(145, 'Multitoma', 'Almacenado', '079', 'Sin serial-6 entradas', 'BUENO', 'RADIOGRAF', 2),
(146, 'Extension verde ', 'Almacenado', '080', 'Sin serial', 'BUENO', 'RADIOGRAF', 1),
(147, 'Caja boom', 'Almacenado', '100178933', 'Caja DV-Falta Cable de Power', 'BUENO', 'RADIOGRAF', 1),
(157, 'Cargador Hp', 'Almacenado', '92171011246', 'Ninguna', 'BUENO', 'BOGOGRAF', 1),
(208, 'Mouse genius', 'Almacenado', 'X6B92134709816', 'Ninguna', 'BUENO', 'FEMIGRAF', 1),
(209, 'Cables de poder ', 'Almacenado', '086', 'Sin serial- 1 en programacion', 'BUENO', 'ESPIRAL CREATIVO TV', 11),
(210, 'Cables Vga', 'Almacenado', '087', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 2),
(211, 'Cables HDMI', 'Almacenado', '088', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 2),
(212, 'Controles Lg', 'Almacenado', '089', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 2),
(213, 'Mouse Pad ', 'Almacenado', '090', 'Sin serial', 'OPTIMO', 'ESPIRAL CREATIVO TV', 2),
(214, 'Multitomas', 'Almacenado', '091', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 2),
(215, 'Cables Rca', 'Almacenado', '092', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 3),
(216, 'Guayas', 'Almacenado', '093', 'Sin serial- 1 en coworking', 'BUENO', 'ESPIRAL CREATIVO TV', 3),
(217, 'Luces Mercury', 'Almacenado', '094', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 4),
(218, 'Controles De Samasung ', 'Almacenado', '095', 'Ninguna', 'OPTIMO', 'ESPIRAL CREATIVO TV', 6),
(219, 'Memorias Usb', 'Almacenado', '096', 'Sin serial-4 en tv, 4 espiral', 'BUENO', 'ESPIRAL CREATIVO TV', 8),
(220, 'Aro De Luz  Joma', 'Almacenado', '097', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(221, 'Aroz De Luz Joma', 'Almacenado', '098', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(222, 'Caja Data Video ', 'Almacenado', '1100173376', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(223, 'Caja Porta- tubo porta jib', 'Almacenado', '92035943', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(224, 'Caja Tuffpak', 'Almacenado', '92033943', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(225, 'Cargador Hp', 'Almacenado', '92171011396', 'Esta en animacion digital ', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(226, 'Cargador Hp', 'Almacenado', '3819', 'Esta en animacion digital ', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(227, 'Cargador Hp', 'Almacenado', '92171011339', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(228, 'Cargador Lenovo ', 'Almacenado', '099', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(229, 'Cargador Mac', 'Almacenado', '100', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(230, 'Cargador Mac', 'Almacenado', '101', 'Sin serial-incompleto, fue donado a animacion digital', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(231, 'Cargador Mac', 'Almacenado', '102', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(232, 'Carro De Carga ', 'Almacenado', '103', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(233, 'Computador Lenovo', 'Almacenado', '9217109800', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(234, 'Computador Mac', 'Almacenado', '35819', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(235, 'Consola Data Video', 'Almacenado', '226059', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(236, 'Consola Live Control ', 'Almacenado', '92021694', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(237, 'Consola Panasonic', 'Almacenado', '92013419', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(238, 'Consola Panasonic', 'Almacenado', '92013418', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(239, 'Control Aligo', 'Almacenado', '104', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(240, 'Control Viweg', 'Almacenado', '105', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(241, 'Control Viweg', 'Almacenado', '106', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(242, 'Croma ', 'Almacenado', '107', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(243, 'Disco Duro Toshiba', 'Almacenado', '108', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(244, 'Equipo Panasonic  Grabacion', 'Almacenado', '100145890', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(245, 'Equipo Samsung Grabacion', 'Almacenado', 'p5876rgp400243k', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(246, 'Equipo Samsung Grabacion', 'Almacenado', 'p5876rgp400251w', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(247, 'Flash De Camara Yongnuo', 'Almacenado', '109', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(248, 'Interruptores Laneg', 'Almacenado', '110', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(249, 'Interruptores Para Luces ', 'Almacenado', '111', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(250, 'Micro Sd ', 'Almacenado', '112', 'Sin serial- no se encuentra', 'DAÑADO', 'ESPIRAL CREATIVO TV', 1),
(251, 'Mochila De Portatil', 'Almacenado', '113', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 3),
(252, 'Mouse Dell', 'Almacenado', '114', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(253, 'Mouse Genius ', 'Almacenado', 'x6a92031906074', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(254, 'Mouse Genius ', 'Almacenado', '120014', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(255, 'Mouse Hp', 'Almacenado', '115', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(256, 'Mouse Hp', 'Almacenado', '116', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(257, 'Mouse Hp', 'Almacenado', '117', 'Sin serial', 'DAÑADO', 'ESPIRAL CREATIVO TV', 1),
(258, 'Mouse Mac', 'Almacenado', '118', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(259, 'Pantalla Hp', 'Almacenado', '92171012058', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(260, 'Pantalla Hp', 'Almacenado', '12176967', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(261, 'Pantalla Hp', 'Almacenado', '92176191', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(262, 'Pantalla Hp', 'Almacenado', '92176206', 'Ninguna', 'DAÑADO', 'ESPIRAL CREATIVO TV', 1),
(263, 'Pantalla Hp', 'Almacenado', '92176200', 'Ninguna', 'DAÑADO', 'ESPIRAL CREATIVO TV', 1),
(264, 'Pantalla Hp ', 'Almacenado', '92176204', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(265, 'Pantalla Promter', 'Almacenado', '100173376', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(266, 'Pantalla Samsung', 'Almacenado', '92178154', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(267, 'Pantalla Samsung', 'Almacenado', '033MHCKG103990P', 'donado por espiral', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(268, 'Pantalla Sony', 'Almacenado', '100180314', 'Tiene un golpe', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(269, 'Portatil Antiguo Hp', 'Almacenado', '80043661753723', 'No se ha probado', 'OPTIMO', 'ESPIRAL CREATIVO TV', 1),
(270, 'Portatil Hp', 'Almacenado', '92171011370', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(271, 'Portatil Hp', 'Almacenado', '92171011333', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(272, 'Portatil Hp', 'Almacenado', '92171011436', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(273, 'Portatil mac', 'Almacenado', '101001130522', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(274, 'Portatil Mac', 'Almacenado', '101001130603', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(275, 'Reflectot Sky Led', 'Almacenado', '119', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(276, 'Reflectot Sky Led', 'Almacenado', '120', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(277, 'Tablet Wacom', 'Almacenado', '101001143744', 'lapiz, caja, cable bien', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(278, 'Tablet Wacom', 'Almacenado', '101001134594', 'Falta el adaptador de corriente, lapiz y cable bien', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(279, 'Teclado  Mac', 'Almacenado', '1001922369', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(280, 'Teclado Compumax', 'Almacenado', '01501g008977', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(281, 'Teclado Dell', 'Almacenado', '92171010696', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(282, 'Teclado Hp', 'Almacenado', '92171012069', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(283, 'Teclado Hp', 'Almacenado', '92171011861', 'Ninguna', 'DAÑADO', 'ESPIRAL CREATIVO TV', 1),
(284, 'Teclado Mac', 'Almacenado', '100196528', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(285, 'Teclado Mac', 'Almacenado', '121', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(286, 'Teclado Mac ', 'Almacenado', '122', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(287, 'Televisor Samsung', 'Almacenado', '123', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(288, 'Televisor Sonic', 'Almacenado', '124', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(289, 'Torre Hp', 'Almacenado', '125', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(290, 'Torre Hp ', 'Almacenado', '92171012064', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(291, 'Tripode Libec', 'Almacenado', '94028111', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(292, 'Tripode Libec', 'Almacenado', '92171932', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(293, 'Tripode Libec', 'Almacenado', '92171931', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(294, 'Tripode Negro', 'Almacenado', '126', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(295, 'Tripode Negro', 'Almacenado', '127', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(296, 'Tripode Rojo', 'Almacenado', '128', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(297, 'Tripode Rojo', 'Almacenado', '129', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(298, 'Fuente de poder Splitter', 'Almacenado', 'MXD-410900600', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(299, 'Adaptador de cable VGA', 'Almacenado', '130', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(300, 'Adaptador de audio VGA', 'Almacenado', '131', 'Sin serial', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(301, 'Mouse Hp', 'Almacenado', '92171011167', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(302, 'Cargador Hp', 'Almacenado', '92171011243', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(303, 'Maleta Hp ', 'Almacenado', '132', 'Sin serial', 'BUENO', 'RADIOGRAF', 1),
(304, 'Caja de mac book', 'Almacenado', '130533', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(305, 'Torre modelo z420 Hp ', 'Almacenado', '2UA4021MH8', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(306, 'Monitor hp prodisplay', 'Almacenado', '3CQ3460X8Q', 'Tiene Cable DVI- Cable de energia ', 'BUENO', 'RADIOGRAF', 1),
(307, 'Teclado asus ', 'Almacenado', 'KGUS153200561', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(308, 'Caja tableta wacom ', 'Almacenado', '143744', 'Ninguna', 'REGULAR', 'RADIOGRAF', 1),
(309, 'Micrófono de escritorio ', 'Almacenado', '133', 'Conexion por jack 3.5- se desconoce modelo', 'BUENO', 'RADIOGRAF', 1),
(310, 'Cargador de pilas beston ', 'Almacenado', '137', 'Ninguna', 'BUENO', 'RADIOGRAF', 2),
(311, 'Pro video stabilizer', 'Almacenado', '4762856250', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(312, 'Adaptador de audio ', 'Almacenado', '138', 'Sin serial', 'BUENO', 'RADIOGRAF', 5),
(313, 'Diadema vortex', 'Almacenado', '26-3039128', 'Ninguna', 'BUENO', 'RADIOGRAF', 1),
(314, 'Multitoma', 'Almacenado', '139', 'Sin serial- 8 entradas', 'BUENO', 'RADIOGRAF', 1),
(315, 'Memorias USB ', 'Almacenado', '140', 'Sin serial-64 GB', 'BUENO', 'RADIOGRAF', 1),
(316, 'Mouse Hp', 'Almacenado', '141', 'Sin serial', 'BUENO', 'RADIOGRAF', 2),
(326, 'Cargador Hp', 'Almacenado', '906329-001', 'Ninguna', 'BUENO', 'ESPIRAL CREATIVO TV', 1),
(332, 'Pc dell ', 'Almacenado', '92171010441', 'Ninguna', 'BUENO', 'PROGRAMACION', 1),
(333, 'Teclado Pc smart', 'Almacenado', 'KB-PC1401', 'Ninguna', 'BUENO', 'PROGRAMACION', 1),
(334, 'Mouse Genius ', 'Almacenado', 'X6A92031906048', 'Ninguna', 'BUENO', 'PROGRAMACION', 1),
(335, 'Pc dell ', 'Almacenado', '92171010503', 'Ninguna', 'BUENO', 'PROGRAMACION', 1),
(336, 'Teclado Dell', 'Almacenado', '148', 'Sin serial', 'BUENO', 'PROGRAMACION', 1),
(337, 'Mouse Dell', 'Almacenado', '149', 'Sin serial', 'BUENO', 'PROGRAMACION', 1),
(350, 'Portatil Hp', 'Almacenado', '92171011444', 'Con maleta- sin licencias', 'BUENO', 'JOSE OVALLE', 1),
(351, 'Cargador Hp', 'Almacenado', '1444', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(352, 'Portatil Hp', 'Almacenado', '92171011441', 'Con maleta', 'BUENO', 'JOSE OVALLE', 1),
(353, 'Mouse Dell', 'Almacenado', '150', 'Sin serial', 'BUENO', 'JOSE OVALLE', 1),
(354, 'Cargador Hp', 'Almacenado', '151', 'Sin serial', 'BUENO', 'JOSE OVALLE', 1),
(355, 'Portatil Hp', 'Almacenado', '5CPQ515CKF', 'Tiene guaya', 'BUENO', 'JOSE OVALLE', 1),
(356, 'Cargador Hp', 'Almacenado', '92171011288', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(358, 'Maleta Hp ', 'Almacenado', '1176', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(359, 'Portatil Hp', 'Almacenado', '92171011176', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(360, 'Tripode vivitar ', 'Almacenado', '152', 'Sin serial- Negro con dorado', 'BUENO', 'JOSE OVALLE', 1),
(361, 'Tripode Davis & sanford', 'Almacenado', '100189230', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(362, 'Tripode Manfrotto 190', 'Almacenado', '3163737', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(363, 'Tripode Manfrotto 190', 'Almacenado', '3161931', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(364, 'Tripode Beston 3520', 'Almacenado', '153', 'Sin serial', 'BUENO', 'JOSE OVALLE', 1),
(365, 'Camara Vixia Hf G30 Canon', 'Almacenado', '154', 'Sin serial- Caja en mal estado', 'BUENO', 'JOSE OVALLE', 1),
(366, 'Tripode de mano samsung', 'Almacenado', '155', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(367, 'Multitoma', 'Almacenado', '156', 'Sin serial-6 entradas', 'BUENO', 'JOSE OVALLE', 1),
(368, 'Tablet Wacom', 'Almacenado', '101001143757', 'lapiz, cables bien- Caja sin serial', 'BUENO', 'JOSE OVALLE', 1),
(369, 'Mac book', 'Almacenado', '10011109282', 'Sin cargador', 'DAÑADO', 'JOSE OVALLE', 1),
(370, 'Tablet Wacom', 'Almacenado', '101001143758', 'Caja:143758 lapiz y cable bien', 'BUENO', 'JOSE OVALLE', 1),
(371, 'Tablet Wacom', 'Almacenado', '101001143723', 'Sin lapiz y cables caja:143723', 'OPTIMO', 'JOSE OVALLE', 1),
(372, 'Tablet Wacom', 'Almacenado', '101001134680', 'Caja:134688- solo lapiz', 'BUENO', 'JOSE OVALLE', 1),
(373, 'Monitor Mac', 'Almacenado', '153055', 'En la parte superior izquierda hay una pequeña grieta', 'BUENO', 'FEMIGRAF', 1),
(374, 'Teclado Mac', 'Almacenado', 'DG7634307Z2GVPYAN', 'Ninguna', 'BUENO', 'FEMIGRAF', 1),
(375, 'Tableta gráfica Wacom', 'Almacenado', '0IW0171002388', 'No tiene caja café, grieta en la parte izquierda más al centro ', 'BUENO', 'FEMIGRAF', 1),
(376, 'Pantalla Samsung ', 'Almacenado', '033MHCKG103992K', 'Ninguna', 'BUENO', 'FEMIGRAF', 1),
(377, 'Mouse Hp', 'Almacenado', '157', 'Sin serial', 'BUENO', 'FEMIGRAF', 1),
(378, 'Tabeta gráfica Wacom ', 'Almacenado', 'OHW0171005066', 'Cuando quiero proyectar a algun dispositivo la pantalla se descuadra ', 'BUENO', 'FEMIGRAF', 1),
(379, 'Torre de Pc HP ', 'Almacenado', '30994396', 'Ninguna', 'BUENO', 'BOGOGRAF', 1),
(380, 'Pantalla PC HP', 'Almacenado', '92171012060', 'Toca activarle windows', 'BUENO', 'BOGOGRAF', 1),
(381, 'Mouse', 'Almacenado', '92171012068', 'Sin marca', 'BUENO', 'BOGOGRAF', 1),
(382, ' Teclado HP', 'Almacenado', '92171012073', 'Ninguna', 'BUENO', 'BOGOGRAF', 1),
(383, ' Tableta Gráfica WACOM', 'Almacenado', '101001143722', 'Ninguna', 'BUENO', 'BOGOGRAF', 1),
(384, 'caja cafe de la Tableta  Grafica ', 'Almacenado', '171002354', 'Ninguna', 'BUENO', 'BOGOGRAF', 1),
(385, 'Portatil Hp ', 'Almacenado', '92171011336', 'Cargador HP: 92171011336', 'BUENO', 'BOGOGRAF', 1),
(386, 'Maleta Hp', 'Almacenado', '159', 'Sin serial', 'BUENO', 'BOGOGRAF', 1),
(387, 'Mouse PC SMART', 'Almacenado', '160', 'Sin serial', 'BUENO', 'BOGOGRAF', 1),
(388, 'Tableta gráfica WACOM', 'Almacenado', '101001143759', 'Ninguna', 'BUENO', 'BOGOGRAF', 1),
(389, 'Portátil HP', 'Almacenado', '5CD9515DNC', 'Tiene virus, Falla a veces en el  audio externo ', 'BUENO', 'BOGOGRAF', 1),
(390, 'Cargador HP', 'Almacenado', '92171011226', 'Ninguna', 'BUENO', 'BOGOGRAF', 1),
(391, 'Maleta Hp ', 'Almacenado', '161', 'Sin serial', 'BUENO', 'BOGOGRAF', 1),
(392, 'Portatil Hp', 'Almacenado', '92171011227', ' Estuche portatil y cargador 92171011227', 'BUENO', 'BOGOGRAF', 1),
(393, 'Tableta gráfica Wacom', 'Almacenado', '101001134687', ' Lápiz cables y, caja sin serial', 'BUENO', 'BOGOGRAF', 1),
(394, 'Mouse Toshiba', 'Almacenado', '162', 'Sin serial- El scroll no sirve, a  veces se traba', 'BUENO', 'BOGOGRAF', 1),
(395, 'Portátil con estuche HP', 'Almacenado', '92171011276', 'Ninguna', 'BUENO', 'BOGOGRAF', 1),
(396, 'Tableta gráfica Wacom', 'Almacenado', '101001133721', 'lapiz cables, y caja sin serial', 'BUENO', 'BOGOGRAF', 1),
(397, 'Mouse Hp', 'Almacenado', '92171011443', 'Ninguna', 'DAÑADO', 'BOGOGRAF', 1),
(398, 'Cámara SONY', 'Almacenado', '92171012312', 'Caja,  cargador, lente, tapas.', 'BUENO', 'BOGOGRAF', 1),
(399, 'Portatil Hp', 'Almacenado', '92171011207', 'Con maleta-Cargador HP 92171011207', 'BUENO', 'INCOM', 1),
(400, 'Mouse ', 'Almacenado', '9.000.007.856', 'Sin marca', 'BUENO', 'INCOM', 1),
(401, 'Base de pies', 'Almacenado', '163', 'Sin serial', 'BUENO', 'INCOM', 1),
(402, 'MAC Computador', 'Almacenado', '153054', 'Tiene virus', 'BUENO', 'INCOM', 1),
(403, 'MAC CARGADOR ', 'Almacenado', '164', 'Sin serial', 'BUENO', 'INCOM', 1),
(404, 'Mouse HP', 'Almacenado', '165', 'Sin serial', 'BUENO', 'INCOM', 1),
(405, 'Teclado Mac ', 'Almacenado', '100196526', 'Ninguna', 'BUENO', 'INCOM', 1),
(406, 'Portatil Hp', 'Almacenado', '92171011410', 'Con maleta, mouse hp 92171011410', 'BUENO', 'INCOM', 1),
(407, 'Portatil Hp', 'Almacenado', '92171011195', 'Cargador HP 92171011195-Tiene virus', 'BUENO', 'INCOM', 1),
(408, 'Mouse Hp', 'Almacenado', '166', 'Sin serial', 'BUENO', 'INCOM', 1),
(409, 'CPU HP', 'Almacenado', '92171012061', 'Ninguna', 'BUENO', 'INCOM', 1),
(410, 'Portatil Hp', 'Almacenado', '92171012056', 'Tiene virus-con maleta', 'BUENO', 'INCOM', 1),
(411, 'Teclado Hp', 'Almacenado', '92171012067', 'Ninguna', 'BUENO', 'INCOM', 1),
(412, 'Mouse Hp', 'Almacenado', '167', 'Sin serial', 'BUENO', 'INCOM', 1),
(413, 'Tableta gráfica Wacom', 'Almacenado', '101001134593', 'con lápiz cable y, caja sin serial', 'BUENO', 'INCOM', 1),
(414, 'Portatil Hp', 'Almacenado', '92171011298', 'Con maleta- Tiene virus-Mouse HP 92171011298', 'BUENO', 'INCOM', 1),
(415, 'Tableta gráfica Wacom', 'Almacenado', '101001134591', 'Sin caja', 'BUENO', 'INCOM', 1),
(416, 'Computador Dell', 'Almacenado', '92171010608', 'No deja abrir imágenes ni videos.  No tiene suit de Office', 'BUENO', 'ANIMACIÓN 3D', 1),
(417, 'Teclado Dell', 'Almacenado', '92171010739', 'Ninguna', 'BUENO', 'ANIMACIÓN 3D', 1),
(418, 'Mouse Dell', 'Almacenado', '168', 'Sin serial', 'BUENO', 'ANIMACIÓN 3D', 1),
(419, 'Tableta gráfica Wacom', 'Almacenado', '101001143720', 'cables , cargador y lapiz', 'BUENO', 'ANIMACIÓN 3D', 1),
(420, 'Caja Tableta grafica Wacom', 'Almacenado', '171002352', 'Ninguna', 'BUENO', 'ANIMACIÓN 3D', 1),
(421, 'PORTATIL GAMER OMEN HP', 'Almacenado', '92179501', 'Se descarga muy rápido y no carga al 100', 'BUENO', 'ANIMACIÓN 3D', 1),
(422, 'Mouse Hp', 'Almacenado', '169', 'Sin serial', 'BUENO', 'ANIMACIÓN 3D', 1),
(423, 'Cargador Hp', 'Almacenado', '170', 'Sin serial', 'BUENO', 'ANIMACIÓN 3D', 1),
(424, 'PORTATIL LENOVO LEGIÓN', 'Almacenado', '92171011944', 'Prestado por Laboratorio 3D', 'BUENO', 'ANIMACIÓN 3D', 1),
(425, 'Mouse Hp', 'Almacenado', 'P/N:674316-001 ', 'Ninguna', 'BUENO', 'ANIMACIÓN 3D', 1),
(426, 'Cargador Lenovo 170W', 'Almacenado', '171', 'Sin serial (Prestado por Laboratorio 3D)', 'BUENO', 'ANIMACIÓN 3D', 1),
(427, 'Impresora Samsung', 'Almacenado', '075HBFGB0007WY', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(428, 'Scanner hp ', 'Almacenado', '3570c', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(429, 'Impresora lazer ', 'Almacenado', '001', 'Sin serial', 'DAÑADO', 'JOSE OVALLE', 1),
(430, 'Televisor Sony', 'Almacenado', '94054850', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(431, 'Televisor Lg', 'Almacenado', '92171428', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(432, 'Televisor Sony', 'Almacenado', '94054833', 'Ninguna', 'BUENO', 'JOSE OVALLE', 1),
(433, 'Diademas De Un Solo Lado', 'Almacenado', '172', 'Sin serial', 'BUENO', 'JOSE OVALLE', 5),
(434, 'Gafas Parrot', 'Almacenado', 'PI020673AA6G007245', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(435, 'Guaya', 'Almacenado', '173', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 2),
(436, 'Mouse Hp', 'Almacenado', '174', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(437, 'Mouse Dell', 'Almacenado', '92171010912', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(438, 'Mouse Lenovo', 'Almacenado', '9217109788', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(439, 'Mouse Hp ', 'Almacenado', '92171012072', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(440, 'Cabeza De Cargador ', 'Almacenado', 'Y0104N9C013127', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(441, 'Cabeza De Cargador ', 'Almacenado', 'Y0104N9C013066', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(442, 'Cargador Alcatel', 'Almacenado', '175', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(443, 'Cargador De Pila Canon', 'Almacenado', '176', 'no carga', 'DAÑADO', 'JOSE OVALLE', 1),
(444, 'Cargador De Pila Canon', 'Almacenado', '119217000445', 'NINGUNA', 'OPTIMO', 'JOSE OVALLE', 1),
(445, 'Cargador De Pila Panasonic', 'Almacenado', '177', 'Sin serial', 'OPTIMO', 'JOSE OVALLE', 1),
(446, 'Cargador De Pila Canon', 'Almacenado', '178', 'Sin serial', 'BUENO', 'JOSE OVALLE', 1),
(447, 'Cargador De Pila Mh-24', 'Almacenado', '179', 'Sin serial', 'BUENO', 'JOSE OVALLE', 1),
(448, 'Cable Adaptador De Poder', 'Almacenado', '180', 'Sin serial', 'BUENO', 'JOSE OVALLE', 1),
(449, 'Cabeza De Cargador ', 'Almacenado', 'Y073N9C018263', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(450, 'CDS', 'Almacenado', '181', 'Sin serial', 'BUENO', 'JOSE OVALLE', 12),
(451, 'Tapas De Canon', 'Almacenado', '182', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 2),
(452, 'Bolsa De Manuales De Usuario', 'Almacenado', '183', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(453, 'Monitor mac', 'Almacenado', '184', 'Sin serial', 'REGULAR', 'JOSE OVALLE', 1),
(454, 'Monitor mac', 'Almacenado', '92171967', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(455, 'Monitor mac', 'Almacenado', '185', 'Sin serial-con golpe en la parte superior ', 'DAÑADO', 'JOSE OVALLE', 1),
(456, 'Monitor mac', 'Almacenado', '92172170', 'NINGUNA', 'REGULAR', 'JOSE OVALLE', 1),
(457, 'Monitor mac', 'Almacenado', '186', 'Sin serial', 'BUENO', 'JOSE OVALLE', 1),
(458, 'Portatil Hp', 'Almacenado', '92171011359', 'NINGUNA', 'REGULAR', 'JOSE OVALLE', 1),
(459, 'Maleta hp', 'Almacenado', '92171011381', 'Sin portatil', 'BUENO', 'JOSE OVALLE', 1),
(460, 'Mouse Hp', 'Almacenado', '1396', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(461, 'Cargador Hp', 'Almacenado', '1443', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(462, 'Monitor mac', 'Almacenado', '187', 'Sin serial', 'BUENO', 'JOSE OVALLE', 1),
(463, 'Teclado mac', 'Almacenado', 'DG762730EJTGVPYAT', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(464, 'Monitor hp', 'Almacenado', '00000386', 'NINGUNA', 'REGULAR', 'JOSE OVALLE', 1),
(465, 'Pantalla samsung ', 'Almacenado', '033MHCKG103999D', 'NINGUNA', 'REGULAR', 'JOSE OVALLE', 1),
(466, 'Teclado hp', 'Almacenado', 'BDMHE0CHH5J2HF', 'NINGUNA', 'BUENO', 'JOSE OVALLE', 1),
(467, 'Teclado mac', 'Almacenado', 'DG76343080GGVPYA4', 'NINGUNA', 'REGULAR', 'JOSE OVALLE', 1),
(468, 'Macbook', 'Almacenado', '10011092282', 'NINGUNA', 'DAÑADO', 'JOSE OVALLE', 1),
(469, 'Mouse hp ', 'Almacenado', '188', 'Sin serial', 'REGULAR', 'JOSE OVALLE', 1),
(472, 'Monitor Hp', 'Almacenado', '92171011864', 'Ninguna', 'DAÑADO', 'JOSE OVALLE', 1),
(473, 'Memoria blanca', 'Almacenado', '189', 'Sin serial', 'BUENO', 'INCOM', 1),
(474, 'Bateria - cámara Canon R10', 'Almacenado', '190', 'Sin serial', 'BUENO', 'INCOM', 1),
(475, 'Baterias - cámara Canon t5', 'Almacenado', '191', 'Sin serial', 'BUENO', 'INCOM', 3),
(476, 'Cámara - Canon t5 ', 'Almacenado', '92171934', 'con caja ocupada', 'BUENO', 'INCOM', 1),
(477, 'Cámara - Canon R10 ', 'Almacenado', '92171012303', 'con caja y mismo SERIAL ', 'BUENO', 'INCOM', 1),
(478, 'Nikon', 'Almacenado', '192', 'Sin serial', 'BUENO', 'INCOM', 1),
(479, 'Memorias USB negra', 'Almacenado', '193', 'Sin serial-Con virus', 'BUENO', 'INCOM', 1),
(480, 'Memoria USB negra con rojo', 'Almacenado', '194', 'Sin serial- Con virus', 'BUENO', 'INCOM', 1),
(481, '2 Memorias KINGSTON ( CÁMARA )', 'Almacenado', '195', 'Sin serial', 'BUENO', 'INCOM', 1),
(482, 'Audifonos', 'Almacenado', '196', 'Sin serial', 'BUENO', 'INCOM', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `ID_ARTICULOS` int(20) NOT NULL,
  `REFERENCIASERIAL` varchar(50) NOT NULL,
  `NOMBRE_MARCA` varchar(50) NOT NULL,
  `CATEGORIA_NOMBRE` varchar(50) NOT NULL,
  `PLACA` varchar(10) DEFAULT NULL,
  `GUAYA` varchar(10) DEFAULT NULL,
  `MOUSE` varchar(10) DEFAULT NULL,
  `MOUSEPAD` varchar(10) DEFAULT NULL,
  `MEMORIA` varchar(10) DEFAULT NULL,
  `LAPIZ` varchar(10) DEFAULT NULL,
  `ADAPTADOR_PODER` varchar(10) DEFAULT NULL,
  `CABLE_PODER` varchar(10) DEFAULT NULL,
  `CARGADOR` varchar(10) DEFAULT NULL,
  `BATERIA` varchar(10) DEFAULT NULL,
  `ESTADO` varchar(50) NOT NULL,
  `MANT_REALIZAR` varchar(50) NOT NULL,
  `OBSERV_ESTADO` varchar(50) NOT NULL,
  `FECHA_REVISION` date DEFAULT NULL,
  `NOMBRE_ENCARGADO` varchar(50) NOT NULL,
  `ROL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cables`
--

CREATE TABLE `cables` (
  `ID_CABLE` int(20) NOT NULL,
  `TIPO_CABLE` varchar(50) NOT NULL,
  `CATEGORIA_NOMBRE` varchar(50) NOT NULL,
  `CANTIDAD` varchar(50) NOT NULL,
  `CFECHA_REVISION` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cables`
--

INSERT INTO `cables` (`ID_CABLE`, `TIPO_CABLE`, `CATEGORIA_NOMBRE`, `CANTIDAD`, `CFECHA_REVISION`) VALUES
(17, 'Cable de internet azul radio', 'Cables', '1', NULL),
(18, 'Cable de internet blanco radio', 'Cables', '2', NULL),
(24, 'Cable de poder- progrmacion', 'Cables', '1', NULL),
(23, 'Cable HDMI- programacion', 'Cables', '1', NULL),
(21, 'Cable RCA audio- radio', 'Cables', '2', NULL),
(22, 'Cable RCA video- radio', 'Cables', '1', NULL),
(19, 'Cable xlr 119217001606 radio', 'Cables', '1', NULL),
(20, 'Cable xlr- 11927001607- radio', 'Cables', '1', NULL),
(14, 'Cables xlr- Proel radio', 'Cables ', '2', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `ID_CARGO` int(20) NOT NULL,
  `CARGO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`ID_CARGO`, `CARGO`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'INSTRUCTOR'),
(3, 'APRENDIZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo2`
--

CREATE TABLE `cargo2` (
  `ID_CARGO` int(20) NOT NULL,
  `CARGO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo2`
--

INSERT INTO `cargo2` (`ID_CARGO`, `CARGO`) VALUES
(1, 'APRENDIZ'),
(2, 'INSTRUCTOR'),
(3, '-LIBRE-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_CATEGORIA` int(20) NOT NULL,
  `CATEGORIA_NOMBRE` varchar(50) NOT NULL,
  `NODO` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(50) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_CATEGORIA`, `CATEGORIA_NOMBRE`, `NODO`, `DESCRIPCION`, `CANTIDAD`) VALUES
(4, 'ALMACENADO', 'RED DE MEDIOS', 'RED DE MEDIOS', 20),
(1, 'ARTICULOS', 'RED DE MEDIOS', 'RED DE MEDIOS', 20),
(3, 'CABLES', 'RED DE MEDIOS', 'RED DE MEDIOS', 20),
(2, 'MOBILIARIO', 'RED DE MEDIOS', 'RED DE MEDIOS', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desicion`
--

CREATE TABLE `desicion` (
  `id_desicion` int(11) NOT NULL,
  `respuesta` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `desicion`
--

INSERT INTO `desicion` (`id_desicion`, `respuesta`) VALUES
(1, 'Si'),
(2, 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentotipo`
--

CREATE TABLE `documentotipo` (
  `ID` int(20) NOT NULL,
  `tipo_documento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documentotipo`
--

INSERT INTO `documentotipo` (`ID`, `tipo_documento`) VALUES
(1, 'CC. CEDULA DE CIUDADADNIA'),
(2, 'TI. TARJETA DE IDENTIDAD'),
(3, 'CE. CEDULA EXTRANJERIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encargados`
--

CREATE TABLE `encargados` (
  `ID_ENCARGADO` int(20) NOT NULL,
  `NOMBRE_ENCARGADO` varchar(50) NOT NULL,
  `ROL` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `numero_documento` varchar(20) DEFAULT NULL,
  `tipo_documento` varchar(50) DEFAULT NULL,
  `lugar_sede` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `encargados`
--

INSERT INTO `encargados` (`ID_ENCARGADO`, `NOMBRE_ENCARGADO`, `ROL`, `email`, `numero_documento`, `tipo_documento`, `lugar_sede`, `telefono`) VALUES
(20, 'Jose Florez', 'APRENDIZ', 'Jose_florez1@soy.sena.edu.co', '1006093660', 'CC. CEDULA DE CIUDADADNIA', 'Cenigraf', '3208524874'),
(21, 'Juan Palacios', 'APRENDIZ', 'juan.palacios140@soy.sena.edu.co', '1019604181', 'CC. CEDULA DE CIUDADADNIA', 'Cenigraf', '3212236630');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `ID_ESTADOS` int(20) NOT NULL,
  `ESTADOS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`ID_ESTADOS`, `ESTADOS`) VALUES
(1, 'BUENO'),
(2, 'OPTIMO'),
(3, 'DAÑADO'),
(4, 'REGULAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id_mantenimineto` int(11) NOT NULL,
  `tipo_mantenimiento` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`id_mantenimineto`, `tipo_mantenimiento`) VALUES
(1, 'PREVENTIVO'),
(2, 'CORRECTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mobiliario`
--

CREATE TABLE `mobiliario` (
  `imagen_ID` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `categoria_nombre` varchar(50) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `observaciones` varchar(100) DEFAULT NULL,
  `imagen_Img` varchar(200) DEFAULT NULL,
  `asignado_a` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mobiliario`
--

INSERT INTO `mobiliario` (`imagen_ID`, `descripcion`, `categoria_nombre`, `cantidad`, `estado`, `observaciones`, `imagen_Img`, `asignado_a`) VALUES
(60, 'Archivador metalico pequeño 1', 'Mobiliario', 1, 'BUENO', 'Ninguna', '185420.jpeg', 'JOSE OVALLE'),
(71, 'Archivador metalico pequeño 2 y 3', 'Mobiliario', 2, 'BUENO', 'Ninguna', '864344.jpeg', 'JOSE OVALLE'),
(97, 'Armario de materiales', 'Mobiliario', 1, 'BUENO', 'Ninguna', '965435.jpeg', 'JOSE OVALLE'),
(96, 'Armario metálico grande', 'Mobiliario', 1, 'BUENO', 'Ninguna', '505003.jpeg', 'JOSE OVALLE'),
(61, 'Armario pequeño puertas corredizas ', 'Mobiliario', 1, 'BUENO', 'Ninguna', '26920.jpg', 'TIENDA CENIGRAF'),
(72, 'Bases tv metalica movil 1', 'Mobiliario', 1, 'BUENO', 'Ninguna', '384241.jpeg', 'ESPIRAL CREATIVO TV'),
(73, 'Bases tv metalica movil 2', 'Mobiliario', 1, 'BUENO', 'Ninguna', '61316.jpeg', 'ESPIRAL CREATIVO TV'),
(94, 'Bases tv metalica movil 3', 'Mobiliario', 1, 'BUENO', 'Ninguna', '521351.jpeg', 'ESPIRAL CREATIVO TV'),
(68, 'Bastidores metalicos ', 'Mobiliario', 2, 'BUENO', 'Ninguna', '2998.jpeg', 'JOSE OVALLE'),
(64, 'Biblioteca madera editorial', 'Mobiliario', 1, 'BUENO', 'Ninguna', '935652.jpeg', 'JOSE OVALLE'),
(66, 'Cajon de madera', 'Mobiliario', 1, 'BUENO', 'Ninguna', '635359.jpeg', 'JOSE OVALLE'),
(59, 'Escritorio 3 puestos', 'Mobiliario', 1, 'BUENO', 'Ninguna', '546566.jpeg', 'ESPIRAL CREATIVO TV'),
(49, 'Mesa 1', 'Mobiliario', 1, 'BUENO', 'Ninguna', '244866.jpg', 'ANIMACION DIGITAL'),
(50, 'Mesa 2', 'Mobiliario', 1, 'BUENO', 'Utilería', '881922.jpg', 'JOSE OVALLE'),
(51, 'Mesa 3', 'Mobiliario', 1, 'BUENO', 'Utilería', '590526.jpg', 'JOSE OVALLE'),
(52, 'Mesa 4', 'Mobiliario', 1, 'BUENO', 'Ninguna', '291048.jpeg', 'RADIOGRAF'),
(53, 'Mesa 5', 'Mobiliario', 1, 'BUENO', 'Ninguna', '291796.jpeg', 'ESPIRAL CREATIVO TV'),
(69, 'Mesa blanca pequeña 1', 'Mobiliario', 1, 'BUENO', 'Ninguna', '511170.jpeg', 'JOSE OVALLE'),
(57, 'Mesa blanca pequeña impresora', 'Mobiliario', 1, 'BUENO', 'Ninguna', '978595.jpg', 'JOSE OVALLE'),
(62, 'Mesa cuadrada', 'Mobiliario', 1, 'BUENO', '1m x 1m', '103084.jpeg', 'JOSE OVALLE'),
(54, 'Mesa de INCOM', 'Mobiliario', 1, 'BUENO', 'Larga, blanca 3 metros, conectada', '306919.jpg', 'INCOM'),
(45, 'Mesa grande ', 'Mobiliario', 1, 'BUENO', 'Dos metros y medio', '513127.jpeg', 'TIENDA CENIGRAF'),
(46, 'Mesa hueso 1', 'Mobiliario', 1, 'BUENO', 'Dos puestos de femigraf', '450885.jpg', 'BOGOGRAF'),
(48, 'Mesa hueso 2', 'Mobiliario', 1, 'BUENO', 'Cuatro puestos ocupados por programación', '118429.jpeg', 'ANIMACIÓN 3D'),
(32, 'Mesa impresora multifuncional', 'Mobiliario', 1, 'BUENO', 'Ninguna', '415567.jpeg', 'JOSE OVALLE'),
(70, 'Mesa pequeña blanca 2', 'Mobiliario', 1, 'BUENO', 'Ninguna', '205716.jpeg', 'JOSE OVALLE'),
(56, 'Mesa realidad aumentada ', 'Mobiliario', 1, 'BUENO', 'Ninguna', '365053.jpeg', 'JOSE OVALLE'),
(55, 'Mesa vidrio', 'Mobiliario', 1, 'BUENO', 'Ninguna', '495834.jpeg', 'JOSE OVALLE'),
(65, 'Rack ', 'Mobiliario', 1, 'BUENO', 'Ninguna', '221602.jpeg', 'JOSE OVALLE'),
(77, 'Silla Tipo 1', 'Mobiliario', 3, 'OPTIMO', 'Una pertenece a Bogograf', '610283.jpeg', 'RADIOGRAF'),
(87, 'Silla tipo 10', 'Mobiliario', 3, 'OPTIMO', 'Una pertenece a espiral', '342473.jpeg', 'ANIMACIÓN 3D'),
(88, 'Silla tipo 11', 'Mobiliario', 5, 'OPTIMO', '1 en Anim3d- 1en AnimDig- 1 en Bogo', '106036.jpeg', 'INCOM'),
(89, 'Silla tipo 12', 'Mobiliario', 1, 'OPTIMO', 'Ninguna', '652713.jpeg', 'ESPIRAL CREATIVO TV'),
(90, 'Silla tipo 13', 'Mobiliario', 1, 'BUENO', 'Ninguna', '715899.jpeg', 'JOSE OVALLE'),
(78, 'Silla tipo 2', 'Mobiliario', 2, 'OPTIMO', 'Una pertenece a INCOM', '663026.jpeg', 'ESPIRAL CREATIVO TV'),
(79, 'Silla tipo 3', 'Mobiliario', 3, 'OPTIMO', 'Una pertenece a Bogograf', '279664.jpeg', 'PROGRAMACION'),
(81, 'Silla tipo 4', 'Mobiliario', 1, 'BUENO', 'Ninguna', '871263.jpeg', 'FEMIGRAF'),
(82, 'Silla tipo 5', 'Mobiliario', 3, 'OPTIMO', 'Una pertenece a femigraf', '984012.jpeg', 'INCOM'),
(83, 'Silla tipo 6', 'Mobiliario', 1, 'BUENO', 'Ninguna', '654791.jpeg', 'BOGOGRAF'),
(84, 'Silla tipo 7 ', 'Mobiliario', 1, 'OPTIMO', 'Ninguna', '38855.jpeg', 'ANIMACION DIGITAL'),
(85, 'Silla tipo 8', 'Mobiliario', 1, 'OPTIMO', 'Ninguna', '284665.jpeg', 'BOGOGRAF'),
(86, 'Silla tipo 9', 'Mobiliario', 1, 'OPTIMO', 'Ninguna', '983016.jpeg', 'ANIMACION DIGITAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nodo`
--

CREATE TABLE `nodo` (
  `id_nodo` int(11) NOT NULL,
  `nodos` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nodo`
--

INSERT INTO `nodo` (`id_nodo`, `nodos`) VALUES
(7, 'ESPIRAL CREATIVO TV'),
(8, 'ANIMACION DIGITAL'),
(9, 'ANIMACIÓN 3D'),
(10, 'RADIOGRAF'),
(11, 'PROGRAMACION'),
(13, 'INCOM'),
(14, 'FEMIGRAF'),
(15, 'JOSE OVALLE'),
(16, 'BOGOGRAF'),
(17, 'TIENDA CENIGRAF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `ID_FECHA` int(50) NOT NULL,
  `ID_ALMACENADO` int(20) NOT NULL,
  `NOMBRE_ALMACENADO` varchar(50) NOT NULL,
  `FECHA_ENTREGA` date NOT NULL,
  `ESTADO_ENTREGA` varchar(50) NOT NULL,
  `FECHA_SALIDA` date NOT NULL,
  `ESTADO_SALIDA` varchar(50) NOT NULL,
  `NOMBRE_ENCARGADO` varchar(50) DEFAULT NULL,
  `ROL` varchar(50) NOT NULL,
  `nodo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`ID_FECHA`, `ID_ALMACENADO`, `NOMBRE_ALMACENADO`, `FECHA_ENTREGA`, `ESTADO_ENTREGA`, `FECHA_SALIDA`, `ESTADO_SALIDA`, `NOMBRE_ENCARGADO`, `ROL`, `nodo`) VALUES
(4, 424, 'PORTATIL LENOVO LEGIÓN', '2025-03-27', 'BUENO', '2025-04-29', 'BUENO', 'Jose Florez', 'APRENDIZ', 'ANIMACIÓN 3D'),
(5, 228, 'Cargador Lenovo ', '2025-03-27', 'BUENO', '2025-04-29', 'BUENO', 'Jose Florez', 'APRENDIZ', 'ANIMACIÓN 3D'),
(6, 478, 'Nikon', '2025-05-06', 'En buen estado ', '2025-05-20', 'No se ha entregado ', 'Jose Florez', 'INSTRUCTOR', 'INCOM'),
(7, 262, 'Pantalla Hp', '2025-05-14', 'En buen estado, fallos en la carga', '2025-05-20', 'No se ha entregado ', 'Jose Florez', 'APRENDIZ', 'RADIOGRAF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `ID_RESPUESTA` int(11) NOT NULL,
  `BOOLEANO` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`ID_RESPUESTA`, `BOOLEANO`) VALUES
(2, 'no'),
(1, 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int(11) NOT NULL,
  `ROL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROL`, `ROL`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'INSTRUCTOR'),
(3, 'APRENDIZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `apellidoUsuario` varchar(50) NOT NULL,
  `ID_CARGO` int(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `usuarioUsuario` varchar(50) NOT NULL,
  `usuarioClave` varchar(20) NOT NULL,
  `usuarioClave2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `ID_CARGO`, `emailUsuario`, `usuarioUsuario`, `usuarioClave`, `usuarioClave2`) VALUES
(2, 'Delegado', 'Principal', 2, 'delegado@gmail.com', 'Delegado', 'delegado15', 'delegado15'),
(3, 'Aprendiz', 'Principal', 3, 'aprendiz155@gmail.com', 'Aprendiz', 'aprendiz15', 'aprendiz15'),
(32, 'Administrador', 'Principal', 1, 'admin@gmail.com', 'Administrador', 'admin15', 'admin15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almacenado`
--
ALTER TABLE `almacenado`
  ADD PRIMARY KEY (`ID_ALMACENADO`),
  ADD KEY `fk_categoria` (`CATEGORIA_NOMBRE`),
  ADD KEY `fk_estado` (`ESTADO`),
  ADD KEY `fk_nodo` (`nodos`);

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`REFERENCIASERIAL`),
  ADD KEY `fkcategorianombre` (`CATEGORIA_NOMBRE`),
  ADD KEY `fkencargado` (`NOMBRE_ENCARGADO`),
  ADD KEY `fkcargo` (`ROL`),
  ADD KEY `ID_ARTICULOS` (`ID_ARTICULOS`),
  ADD KEY `ROL` (`ROL`);

--
-- Indices de la tabla `cables`
--
ALTER TABLE `cables`
  ADD PRIMARY KEY (`TIPO_CABLE`),
  ADD UNIQUE KEY `TIPO_CABLE` (`TIPO_CABLE`),
  ADD KEY `ID_CABLE` (`ID_CABLE`),
  ADD KEY `fkcategorianombre` (`CATEGORIA_NOMBRE`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID_CARGO`);

--
-- Indices de la tabla `cargo2`
--
ALTER TABLE `cargo2`
  ADD PRIMARY KEY (`CARGO`),
  ADD KEY `fkcargo` (`ID_CARGO`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CATEGORIA_NOMBRE`),
  ADD KEY `fkcategoria` (`ID_CATEGORIA`);

--
-- Indices de la tabla `desicion`
--
ALTER TABLE `desicion`
  ADD PRIMARY KEY (`id_desicion`);

--
-- Indices de la tabla `documentotipo`
--
ALTER TABLE `documentotipo`
  ADD PRIMARY KEY (`tipo_documento`),
  ADD KEY `ID` (`ID`);

--
-- Indices de la tabla `encargados`
--
ALTER TABLE `encargados`
  ADD PRIMARY KEY (`NOMBRE_ENCARGADO`),
  ADD KEY `fkencargado` (`ID_ENCARGADO`),
  ADD KEY `tipo_documento` (`tipo_documento`),
  ADD KEY `fkrol` (`ROL`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`ESTADOS`),
  ADD KEY `ID_ESTADOS` (`ID_ESTADOS`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id_mantenimineto`);

--
-- Indices de la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
  ADD PRIMARY KEY (`descripcion`),
  ADD KEY `CATEGORIA_NOMBRE` (`categoria_nombre`),
  ADD KEY `imagen_ID` (`imagen_ID`);

--
-- Indices de la tabla `nodo`
--
ALTER TABLE `nodo`
  ADD PRIMARY KEY (`nodos`),
  ADD KEY `id_nodo` (`id_nodo`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`ID_FECHA`),
  ADD KEY `fk_prestamo_almacenado` (`ID_ALMACENADO`),
  ADD KEY `fk_prestamo_encargado` (`NOMBRE_ENCARGADO`),
  ADD KEY `FK_prestamo_nodo` (`nodo`),
  ADD KEY `FK_prestamo_rol` (`ROL`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`BOOLEANO`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ROL`),
  ADD KEY `ID_ROL` (`ID_ROL`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `emailUsuario` (`emailUsuario`),
  ADD UNIQUE KEY `usuarioUsuario` (`usuarioUsuario`),
  ADD KEY `fkidcargo` (`ID_CARGO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almacenado`
--
ALTER TABLE `almacenado`
  MODIFY `ID_ALMACENADO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=483;

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `ID_ARTICULOS` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cables`
--
ALTER TABLE `cables`
  MODIFY `ID_CABLE` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID_CARGO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cargo2`
--
ALTER TABLE `cargo2`
  MODIFY `ID_CARGO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_CATEGORIA` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `desicion`
--
ALTER TABLE `desicion`
  MODIFY `id_desicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `documentotipo`
--
ALTER TABLE `documentotipo`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `encargados`
--
ALTER TABLE `encargados`
  MODIFY `ID_ENCARGADO` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `ID_ESTADOS` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id_mantenimineto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
  MODIFY `imagen_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `nodo`
--
ALTER TABLE `nodo`
  MODIFY `id_nodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `ID_FECHA` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacenado`
--
ALTER TABLE `almacenado`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`CATEGORIA_NOMBRE`) REFERENCES `categoria` (`CATEGORIA_NOMBRE`),
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`ESTADO`) REFERENCES `estados` (`ESTADOS`),
  ADD CONSTRAINT `fk_nodo` FOREIGN KEY (`nodos`) REFERENCES `nodo` (`nodos`) ON DELETE CASCADE;

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`ROL`) REFERENCES `rol` (`ROL`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulos_ibfk_2` FOREIGN KEY (`NOMBRE_ENCARGADO`) REFERENCES `encargados` (`NOMBRE_ENCARGADO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articulos_ibfk_3` FOREIGN KEY (`CATEGORIA_NOMBRE`) REFERENCES `categoria` (`CATEGORIA_NOMBRE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cables`
--
ALTER TABLE `cables`
  ADD CONSTRAINT `cables_ibfk_1` FOREIGN KEY (`CATEGORIA_NOMBRE`) REFERENCES `categoria` (`CATEGORIA_NOMBRE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `encargados`
--
ALTER TABLE `encargados`
  ADD CONSTRAINT `encargados_ibfk_2` FOREIGN KEY (`tipo_documento`) REFERENCES `documentotipo` (`tipo_documento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `encargados_ibfk_3` FOREIGN KEY (`ROL`) REFERENCES `rol` (`ROL`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mobiliario`
--
ALTER TABLE `mobiliario`
  ADD CONSTRAINT `mobiliario_ibfk_1` FOREIGN KEY (`categoria_nombre`) REFERENCES `categoria` (`CATEGORIA_NOMBRE`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `FK_prestamo_nodo` FOREIGN KEY (`nodo`) REFERENCES `nodo` (`nodos`),
  ADD CONSTRAINT `FK_prestamo_rol` FOREIGN KEY (`ROL`) REFERENCES `rol` (`ROL`),
  ADD CONSTRAINT `fk_prestamo_almacenado` FOREIGN KEY (`ID_ALMACENADO`) REFERENCES `almacenado` (`ID_ALMACENADO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prestamo_encargado` FOREIGN KEY (`NOMBRE_ENCARGADO`) REFERENCES `encargados` (`NOMBRE_ENCARGADO`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
