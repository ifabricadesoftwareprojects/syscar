-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Ago-2017 às 16:58
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syscar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio`
--

CREATE TABLE `anuncio` (
  `idanuncio` int(11) NOT NULL,
  `dataanuncio` date DEFAULT NULL,
  `dataexpiracao` date DEFAULT NULL,
  `statusanuncio` varchar(20) DEFAULT NULL,
  `descricaoanuncio` varchar(500) DEFAULT NULL,
  `km` int(11) DEFAULT NULL,
  `anofab` int(11) DEFAULT NULL,
  `anomodelo` int(11) DEFAULT NULL,
  `aceitatrocal` varchar(45) DEFAULT NULL,
  `unicodono` varchar(45) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `versao_idversao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio_opcional`
--

CREATE TABLE `anuncio_opcional` (
  `anuncio_idanuncio` int(11) NOT NULL,
  `opcional_idopcional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `concessionaria`
--

CREATE TABLE `concessionaria` (
  `usuario_idusuario` int(11) NOT NULL,
  `cnpj` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

CREATE TABLE `foto` (
  `idfoto` int(11) NOT NULL,
  `caminhofoto` varchar(150) DEFAULT NULL,
  `anuncio_idanuncio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nomemarca` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `marca`
--

INSERT INTO `marca` (`idmarca`, `nomemarca`) VALUES
(1, 'CHEVROLET'),
(2, 'VOLKSWAGEN'),
(3, 'FIAT'),
(4, 'MERCEDES-BENZ'),
(5, 'CITROEN'),
(6, 'CHANA'),
(7, 'HONDA'),
(8, 'SUBARU'),
(10, 'FERRARI'),
(11, 'BUGATTI'),
(12, 'LAMBORGHINI'),
(13, 'FORD'),
(14, 'HYUNDAI'),
(15, 'JAC'),
(16, 'KIA'),
(17, 'GURGEL'),
(18, 'DODGE'),
(19, 'CHRYSLER'),
(20, 'BENTLEY'),
(21, 'SSANGYONG'),
(22, 'PEUGEOT'),
(23, 'TOYOTA'),
(24, 'RENAULT'),
(25, 'ACURA'),
(26, 'ADAMO'),
(27, 'AGRALE'),
(28, 'ALFA ROMEO'),
(29, 'AMERICAR'),
(31, 'ASTON MARTIN'),
(32, 'AUDI'),
(34, 'BEACH'),
(35, 'BIANCO'),
(36, 'BMW'),
(37, 'BORGWARD'),
(38, 'BRILLIANCE'),
(41, 'BUICK'),
(42, 'CBT'),
(43, 'NISSAN'),
(44, 'CHAMONIX'),
(46, 'CHEDA'),
(47, 'CHERY'),
(48, 'CORD'),
(49, 'COYOTE'),
(50, 'CROSS LANDER'),
(51, 'DAEWOO'),
(52, 'DAIHATSU'),
(53, 'VOLVO'),
(54, 'DE SOTO'),
(55, 'DETOMAZO'),
(56, 'DELOREAN'),
(57, 'DKW-VEMAG'),
(59, 'SUZUKI'),
(60, 'EAGLE'),
(61, 'EFFA'),
(63, 'ENGESA'),
(64, 'ENVEMO'),
(65, 'FARUS'),
(66, 'FERCAR'),
(68, 'FNM'),
(69, 'PONTIAC'),
(70, 'PORSCHE'),
(72, 'GEO'),
(74, 'GRANCAR'),
(75, 'GREAT WALL'),
(76, 'HAFEI'),
(78, 'HOFSTETTER'),
(79, 'HUDSON'),
(80, 'HUMMER'),
(82, 'INFINITI'),
(83, 'INTERNATIONAL'),
(86, 'JAGUAR'),
(87, 'JEEP'),
(88, 'JINBEI'),
(89, 'JPX'),
(90, 'KAISER'),
(91, 'KOENIGSEGG'),
(92, 'LAUTOMOBILE'),
(93, 'LAUTOCRAFT'),
(94, 'LADA'),
(95, 'LANCIA'),
(96, 'LAND ROVER'),
(97, 'LEXUS'),
(98, 'LIFAN'),
(99, 'LINCOLN'),
(100, 'LOBINI'),
(101, 'LOTUS'),
(102, 'MAHINDRA'),
(104, 'MASERATI'),
(106, 'MATRA'),
(107, 'MAYBACH'),
(108, 'MAZDA'),
(109, 'MENON'),
(110, 'MERCURY'),
(111, 'MITSUBISHI'),
(112, 'MG'),
(113, 'MINI'),
(114, 'MIURA'),
(115, 'MORRIS'),
(116, 'MP LAFER'),
(117, 'MPLM'),
(118, 'NEWTRACK'),
(119, 'NISSIN'),
(120, 'OLDSMOBILE'),
(121, 'PAG'),
(122, 'PAGANI'),
(123, 'PLYMOUTH'),
(124, 'PUMA'),
(125, 'RENO'),
(126, 'REVA-I'),
(127, 'ROLLS-ROYCE'),
(129, 'ROMI'),
(130, 'SEAT'),
(131, 'UTILITARIOS AGRICOLAS'),
(132, 'SHINERAY'),
(137, 'SAAB'),
(139, 'SHORT'),
(141, 'SIMCA'),
(142, 'SMART'),
(143, 'SPYKER'),
(144, 'STANDARD'),
(145, 'STUDEBAKER'),
(146, 'TAC'),
(147, 'TANGER'),
(148, 'TRIUMPH'),
(149, 'TROLLER'),
(150, 'UNIMOG'),
(154, 'WIESMANN'),
(155, 'CADILLAC'),
(156, 'AM GEN'),
(157, 'BUGGY'),
(158, 'WILLYS OVERLAND'),
(161, 'KASEA'),
(162, 'SATURN'),
(163, 'SWELL MINI'),
(175, 'SKODA'),
(239, 'KARMANN GHIA'),
(254, 'KART'),
(258, 'HANOMAG'),
(261, 'OUTROS'),
(265, 'HILLMAN'),
(288, 'HRG'),
(295, 'GAIOLA'),
(338, 'TATA'),
(341, 'DITALLY'),
(345, 'RELY'),
(346, 'MCLAREN'),
(534, 'GEELY');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `nomemodelo` varchar(45) DEFAULT NULL,
  `marca_idmarca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`idmodelo`, `nomemodelo`, `marca_idmarca`) VALUES
(1, 'INTEGRA', 25),
(2, 'LEGEND', 25),
(3, 'NSX', 25),
(4, 'MARRUA', 27),
(5, '145', 28),
(6, '147', 28),
(7, '155', 28),
(8, '156', 28),
(9, '164', 28),
(10, '166', 28),
(11, '2300', 28),
(12, 'SPIDER', 28),
(13, 'HUMMER', 156),
(14, 'AM-825', 16),
(15, 'HI-TOPIC', 16),
(16, 'ROCSTA', 16),
(17, 'TOPIC', 16),
(18, 'TOWNER', 16),
(19, '100', 32),
(20, '80', 32),
(21, 'A1', 32),
(22, 'A3', 32),
(23, 'A4 SEDAN', 32),
(24, 'A5 COUPE', 32),
(25, 'A6 SEDAN', 32),
(26, 'A7', 32),
(27, 'A8', 32),
(30, 'Q3', 32),
(31, 'Q5', 32),
(32, 'Q7', 32),
(33, 'R8', 32),
(34, 'RS3', 32),
(35, 'RS4', 32),
(36, 'RS5', 32),
(37, 'RS6', 32),
(38, 'S3', 32),
(39, 'S4 SEDAN', 32),
(40, 'S6 SEDAN', 32),
(41, 'S8', 32),
(42, 'TT', 32),
(43, 'TTS', 32),
(86, 'BUGGY', 157),
(87, 'DEVILLE', 155),
(88, 'ELDORADO', 155),
(89, 'SEVILLE', 155),
(90, 'JAVALI', 42),
(92, 'MINI STAR FAMILY', 6),
(93, 'MINI STAR UTILITY', 6),
(95, 'CIELO', 47),
(96, 'FACE', 47),
(97, 'QQ', 47),
(98, 'S-18', 47),
(99, 'TIGGO', 47),
(100, '300C', 19),
(101, 'CARAVAN', 19),
(102, 'CIRRUS', 19),
(103, 'GRAN CARAVAN', 19),
(104, 'LE BARON', 19),
(105, 'NEON', 19),
(106, 'PT CRUISER', 19),
(107, 'SEBRING', 19),
(108, 'STRATUS', 19),
(109, 'TOWN E COUNTRY', 19),
(110, 'VISION', 19),
(111, 'AIRCROSS', 5),
(112, 'AX', 5),
(113, 'BERLINGO', 5),
(114, 'BX', 5),
(115, 'C3', 5),
(116, 'C4', 5),
(117, 'C5', 5),
(118, 'C6', 5),
(119, 'C8', 5),
(120, 'DS3', 5),
(121, 'EVASION', 5),
(122, 'JUMPER', 5),
(123, 'XANTIA', 5),
(124, 'XM', 5),
(125, 'XSARA', 5),
(126, 'ZX', 5),
(127, 'CL-244', 50),
(128, 'CL-330', 50),
(129, 'ESPERO', 51),
(130, 'LANOS', 51),
(131, 'LEGANZA', 51),
(132, 'NUBIRA', 51),
(133, 'PRINCE', 51),
(134, 'RACER', 51),
(135, 'SUPER SALON', 51),
(136, 'TICO', 51),
(137, 'APPLAUSE', 52),
(138, 'CHARADE', 52),
(139, 'CUORE', 52),
(140, 'FEROZA', 52),
(141, 'GRAN MOVE', 52),
(142, 'MOVE VAN', 52),
(143, 'TERIOS', 52),
(144, 'AVENGER', 18),
(145, 'DAKOTA', 18),
(146, 'JOURNEY', 18),
(147, 'RAM', 18),
(148, 'STEALTH', 18),
(151, 'M-100', 61),
(152, 'PLUTUS', 61),
(153, 'START', 61),
(155, 'ULC', 61),
(158, 'ENGESA', 63),
(159, 'CAMPER', 64),
(160, 'MASTER', 64),
(161, '348', 10),
(162, '355', 10),
(163, '360', 10),
(164, '456', 10),
(165, '550', 10),
(166, '575M', 10),
(167, '612', 10),
(168, 'CALIFORNIA', 10),
(169, 'F430', 10),
(170, 'F599', 10),
(171, '147', 3),
(174, '500', 3),
(175, 'BRAVA', 3),
(176, 'BRAVO', 3),
(178, 'COUPE', 3),
(179, 'DOBLO', 3),
(180, 'DUCATO CARGO', 3),
(181, 'DUNA', 3),
(182, 'ELBA', 3),
(183, 'FIORINO', 3),
(184, 'FREEMONT', 3),
(185, 'GRAND SIENA', 3),
(186, 'IDEA', 3),
(187, 'LINEA', 3),
(188, 'MAREA', 3),
(189, 'OGGI', 3),
(190, 'PALIO', 3),
(191, 'PANORAMA', 3),
(192, 'PREMIO', 3),
(193, 'PUNTO', 3),
(194, 'SIENA', 3),
(195, 'STILO', 3),
(196, 'STRADA', 3),
(197, 'TEMPRA', 3),
(198, 'TIPO', 3),
(199, 'UNO', 3),
(201, 'AEROSTAR', 13),
(202, 'ASPIRE', 13),
(203, 'BELINA', 13),
(204, 'CLUB WAGON', 13),
(205, 'CONTOUR', 13),
(206, 'CORCEL II', 13),
(207, 'COURIER', 13),
(208, 'CROWN VICTORIA', 13),
(209, 'DEL REY', 13),
(210, 'ECOSPORT', 13),
(211, 'EDGE', 13),
(212, 'ESCORT', 13),
(213, 'EXPEDITION', 13),
(214, 'EXPLORER', 13),
(215, 'F-100', 13),
(216, 'F-1000', 13),
(217, 'F-150', 13),
(218, 'F-250', 13),
(219, 'FIESTA', 13),
(220, 'FOCUS', 13),
(221, 'FURGLAINE', 13),
(222, 'FUSION', 13),
(223, 'IBIZA', 13),
(224, 'KA', 13),
(225, 'MONDEO', 13),
(226, 'MUSTANG', 13),
(227, 'PAMPA', 13),
(228, 'PROBE', 13),
(229, 'RANGER', 13),
(230, 'VERSAILLES ROYALE', 13),
(231, 'TAURUS', 13),
(232, 'THUNDERBIRD', 13),
(233, 'TRANSIT', 13),
(234, 'VERONA', 13),
(235, 'VERSAILLES', 13),
(236, 'WINDSTAR', 13),
(238, 'A-10', 1),
(239, 'A-20', 1),
(240, 'AGILE', 1),
(241, 'ASTRA', 1),
(242, 'BLAZER', 1),
(243, 'BONANZA', 1),
(245, 'C-10', 1),
(246, 'C-20', 1),
(247, 'CALIBRA', 1),
(248, 'CAMARO', 1),
(249, 'CAPRICE', 1),
(250, 'CAPTIVA', 1),
(251, 'CARAVAN', 1),
(252, 'CAVALIER', 1),
(253, 'CELTA', 1),
(255, 'CHEVY', 1),
(256, 'CHEYNNE', 1),
(258, 'COBALT', 1),
(259, 'CORSA', 1),
(262, 'CORVETTE', 1),
(263, 'CRUZE', 1),
(264, 'D-10', 1),
(265, 'D-20', 1),
(266, 'IPANEMA', 1),
(267, 'KADETT', 1),
(268, 'LUMINA', 1),
(269, 'MALIBU', 1),
(271, 'MERIVA', 1),
(272, 'MONTANA', 1),
(274, 'OMEGA', 1),
(275, 'OPALA', 1),
(276, 'PRISMA', 1),
(277, 'S10', 1),
(280, 'SILVERADO', 1),
(281, 'SONIC', 1),
(282, 'SONOMA', 1),
(283, 'SPACEVAN', 1),
(284, 'SS10', 1),
(285, 'SUBURBAN', 1),
(287, 'SYCLONE', 1),
(288, 'TIGRA', 1),
(289, 'TRACKER', 1),
(290, 'TRAFIC', 1),
(291, 'VECTRA', 1),
(292, 'VERANEIO', 1),
(293, 'ZAFIRA', 1),
(294, 'HOVER', 75),
(295, 'BR-800', 17),
(296, 'CARAJAS', 17),
(297, 'TOCANTINS', 17),
(298, 'XAVANTE', 17),
(299, 'VIP', 17),
(300, 'TOWNER', 76),
(301, 'ACCORD', 7),
(302, 'CITY', 7),
(303, 'CIVIC', 7),
(304, 'CR-V', 7),
(305, 'FIT', 7),
(306, 'ODYSSEY', 7),
(307, 'PASSPORT', 7),
(308, 'PRELUDE', 7),
(309, 'ACCENT', 14),
(310, 'ATOS', 14),
(311, 'AZERA', 14),
(312, 'COUPE', 14),
(314, 'ELANTRA', 14),
(315, 'EXCEL', 14),
(316, 'GALLOPER', 14),
(317, 'GENESIS', 14),
(318, 'H1', 14),
(319, 'H100', 14),
(321, 'I30', 14),
(323, 'IX35', 14),
(324, 'MATRIX', 14),
(325, 'PORTER', 14),
(326, 'SANTA FE', 14),
(327, 'SCOUPE', 14),
(328, 'SONATA', 14),
(329, 'TERRACAN', 14),
(330, 'TRAJET', 14),
(331, 'TUCSON', 14),
(332, 'VELOSTER', 14),
(333, 'VERACRUZ', 14),
(337, 'J3', 15),
(338, 'J5', 15),
(339, 'J6', 15),
(340, 'DAIMLER', 86),
(341, 'S-TYPE', 86),
(342, 'X-TYPE', 86),
(345, 'MODELOS XJ', 86),
(352, 'MODELOS XK', 86),
(354, 'CHEROKEE', 87),
(355, 'COMMANDER', 87),
(356, 'COMPASS', 87),
(357, 'GRAND CHEROKEE', 87),
(358, 'WRANGLER', 87),
(359, 'TOPIC VAN', 88),
(360, 'JIPE MONTEZ', 89),
(361, 'PICAPE MONTEZ', 89),
(362, 'BESTA', 16),
(363, 'BONGO', 16),
(364, 'CADENZA', 16),
(365, 'CARENS', 16),
(366, 'CARNIVAL', 16),
(367, 'CERATO', 16),
(368, 'CERES', 16),
(369, 'CLARUS', 16),
(370, 'MAGENTIS', 16),
(371, 'MOHAVE', 16),
(372, 'OPIRUS', 16),
(373, 'OPTIMA', 16),
(374, 'PICANTO', 16),
(375, 'SEPHIA', 16),
(376, 'SHUMA', 16),
(377, 'SORENTO', 16),
(378, 'SOUL', 16),
(379, 'SPORTAGE', 16),
(380, 'LAIKA', 94),
(381, 'NIVA', 94),
(382, 'SAMARA', 94),
(383, 'GALLARDO', 12),
(384, 'MURCIELAGO', 12),
(385, 'DEFENDER', 96),
(386, 'DISCOVERY', 96),
(389, 'FREELANDER', 96),
(391, 'NEW RANGE', 96),
(392, 'RANGE ROVER', 96),
(393, 'ES', 97),
(396, 'GS', 97),
(397, 'IS-300', 97),
(398, 'LS', 97),
(400, 'RX', 97),
(402, 'SC', 97),
(403, '320', 98),
(404, '620', 98),
(405, 'H1', 100),
(406, 'ELAN', 101),
(407, 'ESPRIT', 101),
(408, 'SCORPIO', 102),
(409, '222', 104),
(410, '228', 104),
(411, '3200', 104),
(412, '430', 104),
(413, 'COUPE', 104),
(414, 'GHIBLI', 104),
(415, 'GRANCABRIO', 104),
(416, 'GRANSPORT', 104),
(417, 'GRANTURISMO', 104),
(418, 'QUATTROPORTE', 104),
(419, 'SHAMAL', 104),
(420, 'SPIDER', 104),
(422, 'PICK-UP', 106),
(423, '323', 108),
(424, '626', 108),
(425, '929', 108),
(426, 'B-2500', 108),
(427, 'B2200', 108),
(428, 'MILLENIA', 108),
(429, 'MPV', 108),
(430, 'MX-3', 108),
(431, 'MX-5', 108),
(432, 'NAVAJO', 108),
(433, 'PROTEGE', 108),
(434, 'RX', 108),
(467, 'CLASSE A', 4),
(468, 'CLASSE B', 4),
(469, 'CLASSE R', 4),
(498, 'CLASSE GLK', 4),
(531, 'SPRINTER', 4),
(532, 'MYSTIQUE', 110),
(533, 'SABLE', 110),
(534, '550', 112),
(535, 'MG6', 112),
(536, 'COOPER', 113),
(537, 'ONE', 113),
(538, '3000', 111),
(539, 'AIRTREK', 111),
(540, 'ASX', 111),
(541, 'COLT', 111),
(542, 'DIAMANT', 111),
(543, 'ECLIPSE', 111),
(544, 'EXPO', 111),
(545, 'GALANT', 111),
(546, 'GRANDIS', 111),
(547, 'L200', 111),
(548, 'L300', 111),
(549, 'LANCER', 111),
(550, 'MIRAGE', 111),
(551, 'MONTERO', 111),
(552, 'OUTLANDER', 111),
(553, 'PAJERO', 111),
(554, 'SPACE WAGON', 111),
(555, 'BG-TRUCK', 114),
(556, '350Z', 43),
(557, 'ALTIMA', 43),
(558, 'AX', 43),
(559, 'D-21', 43),
(560, 'FRONTIER', 43),
(562, 'KING-CAB', 43),
(563, 'LIVINA', 43),
(564, 'MARCH', 43),
(565, 'MAXIMA', 43),
(567, 'MURANO', 43),
(568, 'NX', 43),
(569, 'PATHFINDER', 43),
(571, 'PRIMERA', 43),
(572, 'QUEST', 43),
(573, 'SENTRA', 43),
(574, 'STANZA', 43),
(575, '180SX', 43),
(576, 'TERRANO', 43),
(577, 'TIIDA', 43),
(578, 'VERSA', 43),
(579, 'X-TRAIL', 43),
(580, 'XTERRA', 43),
(581, 'ZX', 43),
(582, '106', 22),
(583, '205', 22),
(584, '206', 22),
(585, '207', 22),
(586, '3008', 22),
(587, '306', 22),
(588, '307', 22),
(589, '308', 22),
(590, '405', 22),
(591, '406', 22),
(592, '407', 22),
(593, '408', 22),
(594, '504', 22),
(595, '505', 22),
(596, '508', 22),
(597, '605', 22),
(598, '607', 22),
(599, '806', 22),
(600, '807', 22),
(601, 'BOXER', 22),
(602, 'HOGGAR', 22),
(603, 'PARTNER', 22),
(604, 'RCZ', 22),
(605, 'GRAN VOYAGER', 123),
(606, 'SUNDANCE', 123),
(607, 'TRANS-AM', 69),
(608, 'TRANS-SPORT', 69),
(609, '911', 70),
(612, 'BOXSTER', 70),
(613, 'CAYENNE', 70),
(614, 'CAYMAN', 70),
(615, 'PANAMERA', 70),
(617, '21 SEDAN', 24),
(618, 'CLIO', 24),
(619, 'DUSTER', 24),
(620, 'EXPRESS', 24),
(621, 'FLUENCE', 24),
(622, 'KANGOO', 24),
(623, 'LAGUNA', 24),
(624, 'LOGAN', 24),
(625, 'MASTER', 24),
(626, 'MEGANE', 24),
(627, 'SAFRANE', 24),
(628, 'SANDERO', 24),
(629, 'SCENIC', 24),
(630, 'SYMBOL', 24),
(631, 'TRAFIC', 24),
(632, 'TWINGO', 24),
(634, '9000', 137),
(635, 'SL-2', 162),
(636, 'CORDOBA', 130),
(637, 'IBIZA', 130),
(638, 'INCA', 130),
(641, 'FORTWO', 142),
(642, 'ACTYON SPORTS', 21),
(643, 'CHAIRMAN', 21),
(644, 'ISTANA', 21),
(645, 'KORANDO', 21),
(646, 'KYRON', 21),
(647, 'MUSSO', 21),
(648, 'REXTON', 21),
(649, 'FORESTER', 8),
(650, 'IMPREZA', 8),
(651, 'LEGACY', 8),
(652, 'OUTBACK', 8),
(653, 'SVX', 8),
(654, 'TRIBECA', 8),
(655, 'VIVIO', 8),
(656, 'BALENO', 59),
(657, 'GRAND VITARA', 59),
(658, 'IGNIS', 59),
(660, 'JIMNY', 59),
(662, 'SUPER CARRY', 59),
(663, 'SWIFT', 59),
(664, 'SX4', 59),
(665, 'VITARA', 59),
(666, 'WAGON R', 59),
(667, 'STARK', 146),
(668, 'AVALON', 23),
(669, 'BANDEIRANTE', 23),
(670, 'CAMRY', 23),
(671, 'CELICA', 23),
(672, 'COROLLA', 23),
(673, 'CORONA', 23),
(674, 'HILUX', 23),
(675, 'LAND CRUISER', 23),
(676, 'MR-2', 23),
(677, 'PASEO', 23),
(678, 'PREVIA', 23),
(679, 'RAV4', 23),
(680, 'SUPRA', 23),
(682, 'PANTANAL', 149),
(684, 'T-4', 149),
(685, '400 SERIES', 53),
(687, '850', 53),
(688, '900 SERIES', 53),
(700, 'AMAROK', 2),
(701, 'APOLLO', 2),
(702, 'BORA', 2),
(703, 'CARAVELLE', 2),
(704, 'CORRADO', 2),
(706, 'EOS', 2),
(707, 'EUROVAN', 2),
(708, 'FOX', 2),
(709, 'FUSCA', 2),
(710, 'GOL', 2),
(711, 'GOLF', 2),
(713, 'JETTA', 2),
(714, 'KOMBI', 2),
(715, 'LOGUS', 2),
(717, 'PARATI', 2),
(718, 'PASSAT', 2),
(719, 'POINTER', 2),
(720, 'POLO', 2),
(722, 'SANTANA', 2),
(723, 'SAVEIRO', 2),
(725, 'SPACEFOX', 2),
(726, 'TIGUAN', 2),
(727, 'TOUAREG', 2),
(729, 'VOYAGE', 2),
(732, 'ZDX', 25),
(737, '140', 3),
(755, 'BRASILIA', 2),
(756, 'BRASILVAN', 13),
(775, 'CORCEL', 13),
(803, 'PALIO WEEKEND', 3),
(806, 'FOCUS SEDAN', 13),
(807, 'FIESTA SEDAN', 13),
(808, 'FIESTA TRAIL', 13),
(810, '207 SW', 22),
(811, 'ESCORT SW', 13),
(812, '307 SEDAN', 22),
(813, '307 SW', 22),
(815, 'C4 PALLAS', 5),
(816, 'C4 PICASSO', 5),
(817, 'C4 VTR', 5),
(818, 'CLIO SEDAN', 24),
(819, 'COROLLA FIELDER', 23),
(824, 'HILUX SW4', 23),
(825, 'MEGANE GRAND TOUR', 24),
(827, 'SANDERO STEPWAY', 24),
(829, 'XSARA PICASSO', 5),
(1360, 'COLHEITADEIRA', 131),
(1361, 'PICKUP F75', 158),
(1362, 'X12', 17),
(1365, 'BEL AIR', 1),
(1366, 'RX', 36),
(1369, 'C-14', 1),
(1370, 'SRX4', 155),
(1372, 'C-15', 1),
(1373, 'BRASIL', 1),
(1377, 'POLARA', 18),
(1380, '600', 3),
(1382, 'F-01', 13),
(1383, 'FALCON', 13),
(1384, 'GALAXIE', 13),
(1386, 'MAVERICK', 13),
(1387, 'MODELO A', 13),
(1388, 'NEW FIESTA', 13),
(1389, 'LINHA FX', 82),
(1391, 'GTS', 124),
(1392, 'H3', 80),
(1394, 'PRIME', 14),
(1395, 'TIBURON', 14),
(1397, 'JEEP', 87),
(1398, 'CJ5', 87),
(1399, 'TC', 239),
(1404, 'CLASSE CLC', 4),
(1405, 'CLASSE CLS', 4),
(1408, 'MONTEREY', 110),
(1411, 'TOPSPORT', 114),
(1412, 'TARGA', 114),
(1414, 'X8', 114),
(1415, '370Z', 43),
(1418, 'GTB', 124),
(1419, 'GTC', 124),
(1420, 'GTE', 124),
(1421, 'AUSTIN', 115),
(1423, '7TL', 24),
(1424, '19', 24),
(1426, 'CONVERS?VEL', 175),
(1427, 'SUPERMINI', 17),
(1428, 'TL', 2),
(1429, 'TOPOLINO', 3),
(1430, 'SR5', 23),
(1431, 'VITZ', 23),
(1432, 'VARIANT', 2),
(1454, 'CANDANGO', 57),
(1460, 'SP2', 2),
(1466, 'RECORB', 258),
(1467, 'POLAUTO', 2),
(1508, 'GORDINI', 24),
(1509, 'MINX', 265),
(1971, 'ETIOS', 23),
(1972, 'ONIX', 1),
(1973, 'HB20', 14),
(1975, '330', 36),
(1976, '520', 36),
(1978, '730', 36),
(1980, 'M1', 36),
(1982, 'SERIE Z', 36),
(1983, 'CLASSE SLK', 4),
(1984, 'CLASSE C', 4),
(1985, 'CLASSE E', 4),
(1986, 'CLASSE CL', 4),
(1987, 'CLASSE CLK', 4),
(1988, 'CLASSE S', 4),
(1989, 'CLASSE SL', 4),
(1990, 'CLASSE SLS', 4),
(1991, 'CLASSE G', 4),
(1992, 'CLASSE GL', 4),
(1993, 'CLASSE M', 4),
(2032, '1500', 288),
(2061, 'EQUUS', 14),
(2067, '350 GT', 12),
(2068, '400 GT', 12),
(2069, 'MIURA', 12),
(2070, 'ISLERO', 12),
(2071, 'ESPADA', 12),
(2072, 'COUNTACH', 12),
(2073, 'DIABLO', 12),
(2074, 'ZAGATO', 12),
(2075, 'ALAR', 12),
(2076, 'LM002', 12),
(2077, 'REVENTON', 12),
(2078, 'ANKONIAN', 12),
(2080, 'AVENTADOR', 12),
(2081, 'SESTO ELEMENTO', 12),
(2082, 'J3 TURIN', 15),
(2083, 'J2', 15),
(2084, 'SANDERO GT', 24),
(2087, 'SPIN', 1),
(2088, 'TRAILBLAZER', 1),
(2097, 'C3 PICASSO', 5),
(2098, 'GRAND C4 PICASSO', 5),
(2099, 'JUMPER MINIBUS', 5),
(2100, 'JUMPER VETRATO', 5),
(2101, '207 SEDAN', 22),
(2102, '207 QUIKSILVER', 22),
(2103, '207 ESCAPADE', 22),
(2104, '308 CC', 22),
(2105, 'BOXER PASSAGEIRO', 22),
(2106, 'NEW FIESTA SEDAN', 13),
(2108, 'TRANSIT PASSAGEIRO', 13),
(2109, 'TRANSIT CHASSI', 13),
(2110, 'A4 AVANT', 32),
(2111, 'S4 AVANT', 32),
(2112, 'A5 SPORTBACK', 32),
(2113, 'A5 CABRIOLET', 32),
(2114, 'S5 COUPE', 32),
(2115, 'S5 SPORTBACK', 32),
(2116, 'S5 CABRIOLET', 32),
(2117, 'A6 AVANT', 32),
(2118, 'A6 ALLROAD', 32),
(2119, 'S6 AVANT', 32),
(2120, 'S7', 32),
(2121, 'TT ROADSTER', 32),
(2122, 'TT RS', 32),
(2123, 'TT RS ROADSTER', 32),
(2124, 'TTS ROADSTER', 32),
(2125, 'R8 SPYDER', 32),
(2126, 'R8 GT', 32),
(2127, 'R8 GT SPYDER', 32),
(2129, 'F12', 10),
(2130, '458 SPIDER', 10),
(2131, '458 ITALIA', 10),
(2132, 'FF', 10),
(2133, '599', 10),
(2134, 'SA', 10),
(2135, 'CHALLENGE', 10),
(2136, 'SUPERAMERICA', 10),
(2137, 'F430 SPIDER', 10),
(2138, '430', 10),
(2139, '612 SESSANTA', 10),
(2140, '599 GTB', 10),
(2141, 'SCUDERIA SPIDER', 10),
(2142, '512', 10),
(2143, '456 GT', 10),
(2144, '348 GTS', 10),
(2145, '348 SPIDER', 10),
(2146, 'F355', 10),
(2147, 'F355 SPIDER', 10),
(2148, 'F50', 10),
(2149, '355 SPIDER', 10),
(2150, '360 MODENA', 10),
(2151, 'PAJERO FULL', 111),
(2152, 'PAJERO DAKAR', 111),
(2153, 'PAJERO TR4', 111),
(2154, 'LANCER SPORTBACK', 111),
(2155, 'LANCER EVOLUTION', 111),
(2156, 'L200 TRITON SAVANA', 111),
(2157, 'L200 TRITON', 111),
(2159, 'LIVINA X-GEAR', 43),
(2160, 'GRAND LIVINA', 43),
(2161, 'NEW ACTYON SPORTS', 21),
(2162, 'PRIUS', 23),
(2163, 'SPORT', 114),
(2164, 'MTS', 114),
(2165, 'SPIDER', 114),
(2166, 'KABRIO', 114),
(2167, 'SAGA', 114),
(2168, 'SAGA II', 114),
(2169, '787', 114),
(2170, 'X11', 114),
(2171, 'GAIOLA', 295),
(2175, 'NITRO', 18),
(2176, 'CHALLENGER', 18),
(2177, 'DART', 18),
(2178, 'LE BARON', 18),
(2179, 'CORDOBA', 18),
(2180, 'CHARGER', 18),
(2181, 'WINDSOR', 19),
(2183, 'CROSSFIRE', 19),
(2184, 'CORDOBA', 19),
(2185, 'ESCALADE', 155),
(2186, 'RIVIERA', 41),
(2187, 'COUPE', 41),
(2188, 'CENTURY', 41),
(2189, 'APOLLO', 41),
(2190, 'CENTURION', 41),
(2191, 'EIGHT', 41),
(2192, 'ELECTRA', 41),
(2193, 'ESTATE WAGON', 41),
(2194, 'GRAN SPORT', 41),
(2195, 'GSX', 41),
(2196, 'INVICTA', 41),
(2197, 'LESABRE', 41),
(2198, 'LIMITED', 41),
(2199, 'PARK AVENUE', 41),
(2200, 'RAINIER', 41),
(2201, 'REATTA', 41),
(2202, 'REGAL', 41),
(2203, 'RENDEZVOUS', 41),
(2204, 'ROADMASTER', 41),
(2205, 'ROYAUM', 41),
(2206, 'SKYHAWK', 41),
(2207, 'SKYLARK', 41),
(2208, 'SOMERSET', 41),
(2209, 'SPECIAL', 41),
(2210, 'SPORT WAGON', 41),
(2211, 'SUPER', 41),
(2212, 'TERRAZA', 41),
(2213, 'WILDCAT', 41),
(2214, 'LACROSSE', 41),
(2215, 'ENCLAVE', 41),
(2217, 'GL8', 41),
(2218, 'HRV', 41),
(2219, 'LUCERNE', 41),
(2230, 'SIERRA', 13),
(2231, 'BROUGHAM', 51),
(2232, 'CHAIRMAN', 51),
(2233, 'DAMAS', 51),
(2234, 'GENTRA', 51),
(2235, 'MAEPSY', 51),
(2236, 'ISTANA', 51),
(2237, 'KALOS', 51),
(2238, 'KORANDO', 51),
(2239, 'LACETTI', 51),
(2240, 'LEMANS', 51),
(2242, 'MATIZ', 51),
(2243, 'MUSSO', 51),
(2244, 'NEXIA', 51),
(2245, 'REZZO', 51),
(2246, 'ROYALE PRINCE', 51),
(2247, 'ROYALE SALON', 51),
(2248, 'STATESMAN', 51),
(2249, 'TOSCA', 51),
(2250, 'WINSTORM', 51),
(2252, 'RURAL', 158),
(2253, 'D100', 18),
(2259, '170', 4),
(2261, 'CUSTOM ROYAL', 18),
(2262, 'CLUB COUPE', 1),
(2263, 'MAGNUM', 18),
(2264, 'GMC 100', 1),
(2265, 'SOLSTICE', 69),
(2266, 'ITAMARATY', 158),
(2267, 'MARK V', 86),
(2268, 'GT', 124),
(2269, 'CHAMPION', 145),
(2270, 'BALILLA', 3),
(2271, 'INTERLAGOS', 158),
(2272, 'X15', 17),
(2273, 'F-85', 13),
(2274, 'SPEEDSTER 356', 70),
(2275, 'TOPIC FURGAO', 88),
(2276, 'TOPIC ESCOLAR', 88),
(2279, '300D', 4),
(2280, 'CLASSE TE', 4),
(2283, 'T-100', 23),
(2294, 'MEGANE SEDAN', 24),
(2295, 'A4 CABRIOLET', 32),
(2298, 'LINHA G', 82),
(2299, 'LINHA G COUPE', 82),
(2300, 'LINHA G CONVERSIVEL', 82),
(2301, 'LINHA M', 82),
(2302, 'LINHA EX', 82),
(2303, 'LINHA JX', 82),
(2304, 'LINHA QX', 82),
(2305, 'MODELOS XF', 86),
(2306, 'F-TYPE', 86),
(2307, 'MARK VII', 86),
(2308, 'MARK VIII', 86),
(2309, 'MARK IX', 86),
(2310, 'MARK X', 86),
(2311, 'E-TYPE', 86),
(2312, 'C-TYPE', 86),
(2313, 'D-TYPE', 86),
(2314, 'MARK I', 86),
(2315, 'MARK II', 86),
(2346, 'GT4R', 124),
(2347, 'SPYDER', 124),
(2348, 'GTI', 124),
(2349, 'AM1', 124),
(2350, 'AM2', 124),
(2351, 'AM3', 124),
(2352, 'AM4', 124),
(2353, 'AMV', 124),
(2377, 'ACTY', 7),
(2378, 'AIRWAVE', 7),
(2379, 'ASCOT', 7),
(2380, 'BALLADE', 7),
(2381, 'BEAT', 7),
(2382, 'CR-X', 7),
(2383, 'CONCERTO', 7),
(2384, 'CR-Z', 7),
(2385, 'DOMANI', 7),
(2386, 'EDIX', 7),
(2387, 'ELEMENT', 7),
(2388, 'EV PLUS', 7),
(2389, 'FCX', 7),
(2390, 'FR-V', 7),
(2392, 'HR-V', 7),
(2393, 'HSC', 7),
(2394, 'INSIGHT', 7),
(2396, 'TL', 25),
(2397, 'LIFE DUNK', 7),
(2398, 'LOGO', 7),
(2399, 'MOBILIO', 7),
(2400, 'MDX', 25),
(2401, 'ORTHIA', 7),
(2402, 'PARTNER VAN', 7),
(2403, 'PILOT', 7),
(2404, 'RIDGELINE', 7),
(2405, 'S2000', 7),
(2406, 'S600', 7),
(2407, 'S500', 7),
(2408, 'S800', 7),
(2409, 'STEPWGN', 7),
(2410, 'STREAM', 7),
(2411, 'THATS', 7),
(2412, 'VAMOZ', 7),
(2413, 'Z', 7),
(2414, 'ZEST', 7),
(2441, 'AERIO', 59),
(2442, 'ALTO', 59),
(2443, 'APV', 59),
(2444, 'KEI', 59),
(2445, 'LAPIN', 59),
(2446, 'MR WAGON', 59),
(2447, 'XL-7', 59),
(2448, 'VERONA', 59),
(2477, 'JEEP CJ', 158),
(2479, '306 CABRIOLET', 22),
(2484, 'BELCAR', 57),
(2485, 'M715', 90),
(2492, '407 SW', 22),
(2493, '307 CC', 22),
(2499, 'STYLELINE', 1),
(2500, 'ANGLIA', 13),
(2508, 'GT2', 26),
(2509, 'YUKON', 1),
(2510, 'SPORTSMAN', 54),
(2514, '21 NEVADA', 24),
(2515, 'VEYRON', 11),
(2516, 'ENZO', 10),
(2517, '306 SW', 22),
(2528, 'TI 80', 28),
(2532, 'SPYDER 550', 70),
(2533, '380 GTB', 10),
(2534, 'T-5', 149),
(2536, 'KINGSWAY', 18),
(2537, 'SSR', 1),
(2540, 'IMPALA', 1),
(2541, '208', 22),
(2542, 'GRAND BLAZER', 1),
(2555, '100 SERIES', 53),
(2558, '200 SERIES', 53),
(2559, '300 SERIES', 53),
(2561, '66', 53),
(2562, '700 SERIES', 53),
(2563, 'AMAZON', 53),
(2564, 'C303', 53),
(2566, 'DUETT', 53),
(2567, 'L3314', 53),
(2568, 'OV 4', 53),
(2569, 'P1800', 53),
(2570, 'SUGGA', 53),
(2571, 'TT', 13),
(2572, 'ONCE', 5),
(2573, 'DE LUXE', 13),
(2574, 'CUSTOM', 13),
(2575, 'T-BUCKET', 13),
(2576, 'G15', 17),
(2588, 'PAJERO FULL 3D', 111),
(2589, 'PAJERO SPORT', 111),
(2590, '120 CABRIO', 36),
(2591, '320 TOURING', 36),
(2592, '330 CABRIO', 36),
(2593, 'SERIE 5 TOURING', 36),
(2594, 'SERIE 6 CABRIO', 36),
(2595, 'SERIE M CONVERSIVEL', 36),
(2596, 'M5 TOURING', 36),
(2597, 'SERIE Z ROADSTER', 36),
(2599, 'KA SPORT', 13),
(2600, 'CC', 2),
(2605, 'CERATO KOUP', 16),
(2607, 'ASTRO', 1),
(2608, 'COROLLA XRS', 23),
(2609, 'ETIOS SEDAN', 23),
(2611, 'FREESTYLE', 13),
(2612, 'COUGAR', 110),
(2615, 'XUV 500', 102),
(2618, 'XYLO', 102),
(2619, 'BOLERO', 102),
(2620, 'THAR', 102),
(2621, 'AXE', 102),
(2622, 'LEGEND', 102),
(2623, 'CJ3', 87),
(2624, 'ARMADA', 102),
(2625, 'CHASSI', 102),
(2626, 'SCORPIO PICK-UP', 102),
(2627, 'STAR TRUCK', 6),
(2628, 'STAR', 6),
(2629, 'STAR VAN CARGO', 6),
(2630, 'STAR VAN PASSAGEIROS', 6),
(2632, 'ALVORADA', 141),
(2633, 'CHAMBORD', 141),
(2637, 'PROFISSIONAL', 141),
(2639, 'VEDETTE', 141),
(2640, 'ARONDE', 141),
(2641, '1200S', 141),
(2642, '1000', 141),
(2645, 'HB20X', 14),
(2646, 'HB20S', 14),
(2648, 'MONZA', 1),
(2649, 'CHEVETTE', 1),
(2650, 'X60', 98),
(2651, 'TRAX', 1),
(2652, '118', 36),
(2653, '120', 36),
(2654, '130', 36),
(2655, 'BAVARIA', 36),
(2656, 'C-2800', 36),
(2657, '318', 36),
(2658, '320', 36),
(2659, '318 CABRIO', 36),
(2660, '325 CABRIO', 36),
(2661, '530', 36),
(2662, '540', 36),
(2663, '550', 36),
(2664, '740', 36),
(2665, '750', 36),
(2666, '760', 36),
(2675, 'MATRIX 4X4', 341),
(2694, 'A7', 132),
(2695, 'A9', 132),
(2696, 'A9 CARGO', 132),
(2697, 'T20', 132),
(2698, 'T20 BAU', 132),
(2699, 'T22', 132),
(2704, 'SUPER 90 COUPE', 64),
(2705, 'X20', 17),
(2706, 'ITAIPU', 17),
(2707, 'G800', 17),
(2708, 'XEF', 17),
(2709, 'MOTOMACHINE', 17),
(2710, 'BUGATO', 17),
(2711, 'QT', 17),
(2716, 'CAICARA', 57),
(2717, 'CARCARA', 57),
(2718, 'FISSORE', 57),
(2719, 'MALZONI', 57),
(2720, 'VEMAGUET', 57),
(2727, 'C4 LOUNGE', 5),
(2728, 'CX-7', 108),
(2729, 'TR', 147),
(2730, 'LUCENA', 147),
(2731, 'SEVETSE', 147),
(2732, 'RAGGE', 147),
(2733, 'C70', 53),
(2734, 'C30', 53),
(2735, '544', 53),
(2736, 'S40', 53),
(2737, 'S60', 53),
(2738, 'S70', 53),
(2739, 'S80', 53),
(2740, 'V40', 53),
(2741, 'V50', 53),
(2742, 'V60', 53),
(2743, 'V70', 53),
(2744, 'S90', 53),
(2745, 'XC60', 53),
(2746, 'XC70', 53),
(2747, 'XC90', 53),
(2748, 'P1900', 53),
(2749, 'PV36', 53),
(2750, 'PV444', 53),
(2751, 'PV544', 53),
(2752, 'PV51', 53),
(2753, 'PV654', 53),
(2754, 'C50', 53),
(2755, '190', 4),
(2756, 'CLASSE CLA', 4),
(2757, 'CLASSE V', 4),
(2758, 'VANEO', 4),
(2759, 'CITAN', 4),
(2760, 'VARIO', 4),
(2761, 'CLASSE S CLASSICO', 4),
(2809, 'J3S', 15),
(2810, 'PICK-UP', 345),
(2811, 'VAN', 345),
(2823, 'C3 SOLARIS', 5),
(2824, 'C3 XTR', 5),
(2825, 'C4 SOLARIS', 5),
(2826, 'C5 BREAK/TOURER', 5),
(2827, 'XSARA BREAK', 5),
(2828, 'XSARA VTS', 5),
(2829, 'XANTIA BREAK', 5),
(2830, 'XM BREAK', 5),
(2831, 'C15', 5),
(2832, 'NEMO', 5),
(2833, 'VISA', 5),
(2834, 'C1', 5),
(2835, 'C2', 5),
(2836, 'C3 PLURIEL', 5),
(2837, 'DS4', 5),
(2838, 'DS5', 5),
(2839, 'JUMPY', 5),
(2840, 'C-CROSSER', 5),
(2841, 'C35', 5),
(2842, 'C25', 5),
(2843, 'CX', 5),
(2844, 'CX BREAK', 5),
(2845, 'AXEL', 5),
(2846, 'DYANE', 5),
(2847, 'GS/GSA', 5),
(2848, 'GS/GSA BREAK', 5),
(2849, 'MEHARI', 5),
(2850, 'SAXO', 5),
(2851, 'SM', 5),
(2852, 'ELYSEE', 5),
(2853, 'MASTER MINIBUS', 24),
(2854, 'CELER', 47),
(2855, 'CELER SEDAN', 47),
(2856, 'CIELO SEDAN', 47),
(2857, 'A1 SPORTBACK', 32),
(2858, 'A1 QUATTRO', 32),
(2859, 'A3 SPORTBACK', 32),
(2860, 'RS4 AVANT', 32),
(2861, 'A8L W12', 32),
(2862, 'R8 V10', 32),
(2863, 'RANGER CD', 13),
(2864, 'T140', 15),
(2865, 'X1', 36),
(2866, 'X3', 36),
(2867, 'X5', 36),
(2868, 'X6', 36),
(2869, '840', 36),
(2870, '850', 36),
(2871, '645', 36),
(2872, '650', 36),
(2874, 'FIT TWIST', 7),
(2876, 'MP4', 346),
(2877, 'F1', 346),
(2878, 'MONDEO SW', 13),
(2879, 'ESCORT SEDAN', 13),
(2880, 'ESCORT CONVERSIVEL', 13),
(2881, 'MX-6', 108),
(2884, 'CORISCO', 1),
(2885, 'CHEVELLE', 1),
(2886, 'EXCURSION', 13),
(2887, 'TOURAN', 2),
(2890, 'F-10000', 13),
(2891, 'HOGGAR ESCAPADE', 22),
(2901, 'PHAETON', 13),
(2913, 'TRANSPORTER', 2),
(2914, 'GRAND BESTA', 16),
(2915, '200SX', 43),
(2916, '240SX', 43),
(2921, '300M', 19),
(2922, '300C TOURING', 19),
(2928, 'TORINO', 13),
(2931, 'VENTURE', 1),
(2932, 'FLEETLINE', 1),
(2933, 'FLEETMASTER', 1),
(2934, 'DELUXE', 1),
(2936, 'ESCORT XR3', 13),
(2937, 'MASTER', 1),
(2938, 'TORONADO', 120),
(2939, 'SIX', 120),
(2940, 'EIGHT', 120),
(2941, 'DELUXE', 120),
(2942, 'SERIES 60', 120),
(2943, 'SERIES 70', 120),
(2944, 'SERIES 80', 120),
(2945, 'SERIES 90', 120),
(2946, 'STARFIRE', 120),
(2947, '442', 120),
(2948, 'CUTLASS', 120),
(2949, 'CUTLASS SUPREME', 120),
(2950, 'CUTLASS SALON', 120),
(2951, 'CUTLASS CALAIS', 120),
(2952, 'CUTLASS CIERA', 120),
(2953, 'CUSTOM CRUISER', 120),
(2954, 'VISTA CRUISER', 120),
(2955, 'F-85', 120),
(2957, 'FIRENZA', 120),
(2958, 'ACHIEVA', 120),
(2959, 'ALERO', 120),
(2960, 'AURORA', 120),
(2961, 'BRAVADA', 120),
(2962, 'INTRIGUE', 120),
(2963, 'SILHOUETTE', 120),
(2972, 'SUPERBIRD', 123),
(2973, 'FURY', 123),
(2974, 'SPECIAL', 123),
(2975, 'PROWLER', 123),
(2976, 'TRAIL DUSTER', 123),
(2977, 'VOYAGER', 123),
(2978, 'SCAMP', 123),
(2979, 'ARROW', 123),
(2980, 'PT50', 123),
(2981, 'PT57', 123),
(2982, 'PT81', 123),
(2983, 'PT105', 123),
(2984, 'PT125', 123),
(2985, 'EXPRESS', 123),
(2986, 'VOYAGER EXPRESSO', 123),
(2987, 'NEON', 123),
(2988, 'LASER', 123),
(2989, 'CARAVELLE', 123),
(2990, 'STATION WAGON', 123),
(2991, 'MODEL Q', 123),
(2992, 'MODEL P6', 123),
(2993, 'DB9 COUPE', 31),
(2994, 'DB9 VOLANTE', 31),
(2995, 'VIRAGE COUPE', 31),
(2996, 'RAPIDE S', 31),
(2997, 'V12 VANTAGE', 31),
(2998, 'V8 VANTAGE COUPE', 31),
(2999, 'V8 VANTAGE ROADSTER', 31),
(3000, 'V8 VANTAGE S COUPE', 31),
(3001, 'V8 VANTAGE S ROADSTER', 31),
(3002, 'VANQUISH COUPE', 31),
(3003, 'VANQUISH VOLANTE', 31),
(3004, 'V12 ZAGATO', 31),
(3005, 'DB5', 31),
(3007, 'DBS', 31),
(3008, 'DBS VOLANTE', 31),
(3009, 'CYGNET', 31),
(3010, 'ONE-77', 31),
(3011, 'DBR9', 31),
(3013, 'M3', 36),
(3014, 'M5', 36),
(3015, 'M6', 36),
(3016, 'X6 M', 36),
(3017, 'CABRIO', 113),
(3018, 'COUPE', 113),
(3019, 'ROADSTER', 113),
(3020, 'COUNTRYMAN', 113),
(3021, 'PACEMAN', 113),
(3022, 'JOHN COOPER WORKS', 113),
(3023, 'ZONDA', 122),
(3024, 'NEW XV', 8),
(3025, 'IMPREZA WRX HATCH', 8),
(3026, 'IMPREZA WRX STI HATCH', 8),
(3027, 'IMPREZA WRX STI SEDAN', 8),
(3028, 'IMPREZA WRX SEDAN', 8),
(3030, 'ETIOS CROSS', 23),
(3031, 'HURACAN', 12),
(3032, 'UP', 2),
(4964, 'FORTWO CABRIO', 142),
(4969, 'GT', 26),
(4970, 'GTL', 26),
(4971, 'GTM', 26),
(4972, 'C2', 26),
(4973, 'CRX', 26),
(4974, 'AC 2000', 26),
(4975, 'AVIATOR', 99),
(4976, 'BLACKWOOD', 99),
(4977, 'CAPRI', 99),
(4978, 'CONTINENTAL', 99),
(4979, 'LS', 99),
(4980, 'MARK', 99),
(4981, 'MARK LT', 99),
(4982, 'MKR', 99),
(4983, 'MKS', 99),
(4984, 'MKX', 99),
(4985, 'MKZ', 99),
(4986, 'NAVIGATOR', 99),
(4987, 'PREMIERE', 99),
(4988, 'TOWN CAR', 99),
(4989, 'VERSAILLES', 99),
(4990, 'ZEPHYR', 99),
(4991, 'CLASSIC', 1),
(4992, 'ACTYON', 21),
(5003, 'MARAJO', 1),
(5004, 'SUPREMA', 1),
(5005, 'NEW BEETLE', 2),
(5006, 'QUANTUM', 2),
(5007, 'CROSSFOX', 2),
(5008, 'MILLE', 3),
(5009, 'GC2', 534),
(5010, 'EC7', 534),
(5011, '530', 98),
(5012, 'MOBI', 3),
(5013, 'TORO', 3),
(5014, 'RENEGADE', 87),
(5015, 'DUSTER OROCH', 24),
(5016, 'SANDERO RS', 24),
(5017, 'HB20R', 14),
(5018, 'GRAND SANTA FE', 14),
(5019, 'GOLF VARIANT', 2),
(5020, 'SPACE CROSS', 2),
(5021, '2008', 22),
(5022, 'QUORIS', 16),
(5023, 'GRAND CARNIVAL', 16),
(5024, 'T8', 15),
(5025, 'T6', 15),
(5026, 'T5', 15),
(5027, 'KA SEDAN', 13),
(5028, 'FOCUS FASTBACK', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opcional`
--

CREATE TABLE `opcional` (
  `idopcional` int(11) NOT NULL,
  `descricaoopcional` varchar(45) DEFAULT NULL,
  `modelo_idmodelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  `perfil` varchar(20) DEFAULT NULL,
  `token` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `email`, `senha`, `perfil`, `token`) VALUES
(1, 'Administrador', 'admin@admin.com', '25f9e794323b453885f5181f1b624d0b', NULL, '0d45f69f1184866f4b9e7c4ff310a0b3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `versao`
--

CREATE TABLE `versao` (
  `idversao` int(11) NOT NULL,
  `descricaoversao` varchar(75) DEFAULT NULL,
  `motor` char(5) DEFAULT NULL,
  `combustivel` varchar(20) DEFAULT NULL,
  `portas` char(2) DEFAULT NULL,
  `cambio` varchar(20) DEFAULT NULL,
  `modelo_idmodelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`idanuncio`),
  ADD KEY `fk_anuncio_usuario1_idx` (`usuario_idusuario`),
  ADD KEY `fk_anuncio_versao1` (`versao_idversao`);

--
-- Indexes for table `anuncio_opcional`
--
ALTER TABLE `anuncio_opcional`
  ADD PRIMARY KEY (`anuncio_idanuncio`,`opcional_idopcional`),
  ADD KEY `fk_anuncio_has_opcional_opcional1` (`opcional_idopcional`),
  ADD KEY `fk_anuncio_has_opcional_anuncio1` (`anuncio_idanuncio`);

--
-- Indexes for table `concessionaria`
--
ALTER TABLE `concessionaria`
  ADD PRIMARY KEY (`usuario_idusuario`),
  ADD KEY `fk_concessionaria_usuario1_idx` (`usuario_idusuario`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`idfoto`),
  ADD KEY `fk_fotos_anuncio1_idx` (`anuncio_idanuncio`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idmodelo`),
  ADD KEY `fk_modelo_marca_idx` (`marca_idmarca`);

--
-- Indexes for table `opcional`
--
ALTER TABLE `opcional`
  ADD PRIMARY KEY (`idopcional`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indexes for table `versao`
--
ALTER TABLE `versao`
  ADD PRIMARY KEY (`idversao`),
  ADD KEY `fk_versao_modelo1_idx` (`modelo_idmodelo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `idanuncio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `idfoto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;
--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idmodelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5029;
--
-- AUTO_INCREMENT for table `opcional`
--
ALTER TABLE `opcional`
  MODIFY `idopcional` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `versao`
--
ALTER TABLE `versao`
  MODIFY `idversao` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `fk_anuncio_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anuncio_versao1` FOREIGN KEY (`versao_idversao`) REFERENCES `versao` (`idversao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `anuncio_opcional`
--
ALTER TABLE `anuncio_opcional`
  ADD CONSTRAINT `fk_anuncio_has_opcional_anuncio1` FOREIGN KEY (`anuncio_idanuncio`) REFERENCES `anuncio` (`idanuncio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_anuncio_has_opcional_opcional1` FOREIGN KEY (`opcional_idopcional`) REFERENCES `opcional` (`idopcional`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `concessionaria`
--
ALTER TABLE `concessionaria`
  ADD CONSTRAINT `fk_concessionaria_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_fotos_anuncio1` FOREIGN KEY (`anuncio_idanuncio`) REFERENCES `anuncio` (`idanuncio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_modelo_marca` FOREIGN KEY (`marca_idmarca`) REFERENCES `marca` (`idmarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `versao`
--
ALTER TABLE `versao`
  ADD CONSTRAINT `fk_versao_modelo1` FOREIGN KEY (`modelo_idmodelo`) REFERENCES `modelo` (`idmodelo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
