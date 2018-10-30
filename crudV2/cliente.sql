CREATE DATABASE clientesdb;

USE clientesdb;


CREATE TABLE `cliente` (
  `Id_Cliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Telf` int(10) NOT NULL,
  PRIMARY KEY (`Id_Cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

INSERT INTO `cliente` (`Id_Cliente`, `Nombre`, `Email`, `Telf`) VALUES
(1, 'Pedro', 'pedro@gmail.com', 672209777),
(2, 'María', 'mar10@gmail.com', 666239582),
(3, 'Ana', 'anyta@gmail.com', 639129399),
(4, 'Lorena', 'lore24@gmail.com', 666382908),
(5, 'Pablo', 'pablito_chiquito@gmail.com', 675301998),
(6, 'Francisco', 'fran@gmail.com', 666345754);