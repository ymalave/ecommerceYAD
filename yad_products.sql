-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 03:18:49
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yad_products`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `idcompra` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idproducto` int(11) NOT NULL,
  `nombreProducto` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precio` float NOT NULL,
  `disponibilidad` int(11) NOT NULL,
  `categoria` enum('Normal','Promocion') CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idproducto`, `nombreProducto`, `precio`, `disponibilidad`, `categoria`) VALUES
(1, 'Agua Potable', 0.3, 50, 'Normal'),
(2, 'Desinfectante', 1.1, 20, 'Normal'),
(3, 'Suavizante', 1.68, 25, 'Normal'),
(4, 'Cloro', 0.9, 20, 'Normal'),
(5, 'Jabón liquido', 1.3, 20, 'Normal'),
(6, 'Desengrasante', 1.4, 20, 'Normal'),
(7, 'Shampoo para vehículos', 1.3, 20, 'Normal'),
(8, 'Cera', 1.4, 20, 'Normal'),
(9, '1 Promo', 3, 20, 'Promocion'),
(10, '2 Promo', 3.5, 20, 'Promocion'),
(11, '3 Promo', 4.9, 20, 'Promocion'),
(12, 'Promo Condominio', 16, 20, 'Promocion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

CREATE TABLE `promocion` (
  `idpromocion` int(11) NOT NULL,
  `namePromo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `productos` text COLLATE utf8_spanish_ci,
  `precio` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `promocion`
--

INSERT INTO `promocion` (`idpromocion`, `namePromo`, `productos`, `precio`) VALUES
(1, '1 Promo', '1lt de Cloro, 1lt de Suavisante, 1lt de Desinfectante', 3),
(2, '2 Promo', '1lt de Cloro, 1lt de Desenfectante, 1lt de Jabón Líquido, 500ml de Desengrasante', 3.5),
(3, '3 Promo', '1lt de Cera, 1lt de Desengrasante, 2lt de Shampoo para Carros', 4.9),
(4, 'Promo Condominio', '4lt de Cera, 4lt de Cloro, 4lt de Desinfectante, 4lt de Jabón Líquido, 2lt de Desinfectante', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` bigint(20) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `rank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `userName`, `phoneNumber`, `email`, `password`, `rank`) VALUES
(10, 'Patricio', '04128593647', 'gsbjzfns@mail.net', 'a8bf1a88c45c888d37422ae5af9abac3d4621ac6', 'Costumer'),
(11, 'Commander', '04148978977', 'yjmalave06@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
(12, 'Darimel Salazar', '04147652669', 'Darimel@mail.com', 'fa42442fba58a653a245a83ff9898db1a7fa9a88', 'Costumer'),
(17, 'ambar', '04166855658', 'ambaralvarado000@gmail.com', '8c31b65bdecdc9f18b695d7318186fd1feed690d', 'Costumer'),
(18, '', '', '', '7505d64a54e061b7acd54ccd58b49dc43500b635', 'Costumer'),
(20, 'aliendresl', '04148642547', 'aliendreslennys@gmail.com', 'c810b58a3ff71589397d8ff215e02f99cbc24b70', 'Costumer');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`idcompra`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idproducto`),
  ADD UNIQUE KEY `idproducto_UNIQUE` (`idproducto`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`idpromocion`),
  ADD UNIQUE KEY `idpromocion_UNIQUE` (`idpromocion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `userName` (`userName`,`email`),
  ADD KEY `type` (`rank`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `idpromocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
