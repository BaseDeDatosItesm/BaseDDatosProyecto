-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 30, 2018 at 06:03 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemainv`
--

-- --------------------------------------------------------

--
-- Table structure for table `articulo`
--

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE IF NOT EXISTS `articulo` (
  `SKU_Articulo` varchar(9) NOT NULL,
  `Costo` int(15) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `Tipo_Medición` varchar(15) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Cnt_max` varchar(10) DEFAULT NULL,
  `Cnt_min` varchar(10) DEFAULT NULL,
  `Punt_Reorden` varchar(15) NOT NULL,
  `qty_actual` int(5) UNSIGNED NOT NULL,
  `categoria` varchar(20) NOT NULL,
  PRIMARY KEY (`SKU_Articulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articulo`
--

INSERT INTO `articulo` (`SKU_Articulo`, `Costo`, `descripcion`, `Tipo_Medición`, `Nombre`, `Cnt_max`, `Cnt_min`, `Punt_Reorden`, `qty_actual`, `categoria`) VALUES
('123', 20, 'Martillo marca Wilson con Cuña', 'pieza(s)', 'Martillo ', '6', '2', '5', 6, 'Material Mecanico'),
('134', 500, 'Taladro Marca Truper 30W', 'pieza(s)', 'Taladro Mediano', '10', '3', '6', 0, 'Material Electrico'),
('777', 2, 'Tornillo cruz de 3/4 de pulgada', 'pieza(s)', 'Tornillo cruz', '100', '20', '30', 25, 'Tornilleria'),
('887', 200, 'Pintura Impermeabilizante Comex para tejados', 'pieza(s)', 'Impermeabilizante', '6', '1', '3', 0, 'Solventes y Pinturas');

-- --------------------------------------------------------

--
-- Table structure for table `gestion_artículos`
--

DROP TABLE IF EXISTS `gestion_artículos`;
CREATE TABLE IF NOT EXISTS `gestion_artículos` (
  `SKU_ARTICULO` varchar(9) NOT NULL,
  `CANTIDAD` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movimiento`
--

DROP TABLE IF EXISTS `movimiento`;
CREATE TABLE IF NOT EXISTS `movimiento` (
  `Clave_Mov` int(9) NOT NULL AUTO_INCREMENT,
  `Categoria_Mov` varchar(15) NOT NULL,
  `Hora_Mov` time NOT NULL,
  `Fecha_Mov` date NOT NULL,
  `Tipo_Mov` varchar(20) NOT NULL,
  `ID_User` int(9) NOT NULL,
  `ID_Proyecto` varchar(9) DEFAULT NULL,
  `SKU` char(3) NOT NULL,
  PRIMARY KEY (`Clave_Mov`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movimiento`
--

INSERT INTO `movimiento` (`Clave_Mov`, `Categoria_Mov`, `Hora_Mov`, `Fecha_Mov`, `Tipo_Mov`, `ID_User`, `ID_Proyecto`, `SKU`) VALUES
(1, 'Compra', '20:53:00', '2018-04-25', 'Entrada', 1503, '', ''),
(3, 'Prestamo', '21:30:00', '2018-04-25', 'Salida', 1503, '', ''),
(4, 'Prestamo', '21:30:00', '2018-04-25', 'Salida', 1503, '', ''),
(5, 'Prestamo', '21:30:00', '2018-04-25', 'Salida', 1503, '', ''),
(6, 'Prestamo', '21:30:00', '2018-04-25', 'Salida', 1503, '', ''),
(7, 'Prestamo', '21:30:00', '2018-04-25', 'Salida', 1503, '', ''),
(8, 'Prestamo', '21:30:00', '2018-04-25', 'Salida', 1503, '', ''),
(9, 'Prestamo', '21:30:00', '2018-04-25', 'Salida', 1503, '', ''),
(10, 'Prestamo', '21:30:00', '2018-04-25', 'Entrada', 1503, '', ''),
(11, 'Compra', '15:51:00', '2018-04-26', 'Entrada', 1503, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `Codigo` varchar(9) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Direccion_Sucursal` text NOT NULL,
  `E-Mail` text NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`Codigo`, `Nombre`, `Direccion_Sucursal`, `E-Mail`) VALUES
('123456789', 'Comex S.A. de C.V.', 'Altamira 304, Centro Tampico', 'comex@gmail.com'),
('987654321', 'Truper Group', 'Obregon 103 Obrera Tampico', 'trupergp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

DROP TABLE IF EXISTS `proyecto`;
CREATE TABLE IF NOT EXISTS `proyecto` (
  `ID_Proyecto` varchar(9) NOT NULL,
  `ID_Manager` int(9) NOT NULL,
  `Descripción` text,
  `Nombre` varchar(30) NOT NULL,
  `Fecha_Inicio` date NOT NULL,
  PRIMARY KEY (`ID_Proyecto`),
  UNIQUE KEY `ID_Manager` (`ID_Manager`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyecto`
--

INSERT INTO `proyecto` (`ID_Proyecto`, `ID_Manager`, `Descripción`, `Nombre`, `Fecha_Inicio`) VALUES
('0502', 706, 'Reorganizar ciertos estantes y repisas', 'Reordenado de Almacen', '2018-04-27'),
('7700', 1503, 'Renovar la sala principal del almacen', 'Renovacion de vestibulo', '2018-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `telefono_proveedor`
--

DROP TABLE IF EXISTS `telefono_proveedor`;
CREATE TABLE IF NOT EXISTS `telefono_proveedor` (
  `ID_PROVEDOR` varchar(9) NOT NULL,
  `TEL_PRINCIPAL` varchar(10) DEFAULT NULL,
  `TEL_SUCURSAL` varchar(10) DEFAULT NULL,
  `TEL_CASA` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_PROVEDOR`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID` varchar(9) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `E-Mail` varchar(30) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`ID`, `Nombre`, `Apellido`, `Contraseña`, `Sexo`, `E-Mail`, `Fecha_Nac`) VALUES
('0706', 'Rodrigo', 'Rivera', 'ct156', 'M', 'r.rivera@hotmail.com', '2018-09-10'),
('1398', 'Orianna', 'Virgen', 'pelu15', 'F', 'orianna.vm@hotmail.com', '1998-04-13'),
('1503', 'Eduardo', 'Giadans', '123giadans', 'M', 'giadans@hotmail.com', '1998-03-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
