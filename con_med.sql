-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2024 at 04:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `con_med`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultas`
--

CREATE TABLE `consultas` (
  `folio` int(11) NOT NULL,
  `id_medico` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `tratamiento` varchar(200) DEFAULT NULL,
  `indicaciones_generales` varchar(200) DEFAULT NULL,
  `fecha_elaboracion` date DEFAULT NULL,
  `temperatura` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultas`
--

INSERT INTO `consultas` (`folio`, `id_medico`, `id_paciente`, `tratamiento`, `indicaciones_generales`, `fecha_elaboracion`, `temperatura`) VALUES
(1, 4, 20, '1 paracetamol al día', 'No exponerse a cambios de temperaturas', '0000-00-00', 40),
(2, 4, 18, 'Dejar la escuela durante 1 año', 'Descansar', '2024-10-16', 40),
(3, 4, 20, 'Tomar agua', 'Recuperese por favor', '2024-10-16', 25),
(4, 4, 13, '', '', '2024-10-16', 0),
(5, 4, 13, '', '', '2024-10-16', 0),
(6, 4, 13, '', '', '2024-10-16', 0),
(7, 4, 13, '', '', '2024-10-16', 0),
(8, 6, 20, 'Nada en especial', 'Portese bien', '2024-10-17', 60),
(9, 6, 12, 'jlhdjobska', 'adoiasdbiusabduiasjd', '2024-10-17', 50);

-- --------------------------------------------------------

--
-- Table structure for table `doctores`
--

CREATE TABLE `doctores` (
  `id_medico` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctores`
--

INSERT INTO `doctores` (`id_medico`, `nombre`, `apellido`, `email`, `usuario`, `contraseña`) VALUES
(1, 'Angel', 'Rivera', 'angel@gmail.com', 'angelito_tilin', '12345678'),
(2, 'Vladimir', 'TORRES HERNANDEZ', 'vladimir@gmail.com', 'calzonesdefuego123', '12345678'),
(3, 'Abraham', 'Ramirez', 'ramirito@gmail.com', 'nikokawai', '12345678'),
(4, 'Carlos', 'Vargas', 'shakiro@gmail.com', 'siganviendo', '12345678'),
(5, 'Myriam', 'Pequeño', '2330006@upv.edu.mx', 'myri', 'galleta1'),
(6, 'Vladimir', 'TORRES HERNANDEZ', '2330016@upv.edu.mx', 'vladimir', '87654321');

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `sexo` varchar(20) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `peso` double DEFAULT NULL,
  `estatura` double DEFAULT NULL,
  `afeccion_cronica` varchar(80) DEFAULT NULL,
  `alergias` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre`, `apellidos`, `sexo`, `fecha_nacimiento`, `peso`, `estatura`, `afeccion_cronica`, `alergias`) VALUES
(2, 'Brandon', 'Duque', 'Hombre', '2005-11-01', 50, 150, 'Ninguna', 'Ninguna'),
(4, 'Juan', 'Torres', '', '2005-12-06', 80, 170, 'Ninguna', 'Ninguna'),
(5, 'Vladimir', 'Torres', '', '2005-12-06', 80, 170, 'Ninguna', 'Ninguna'),
(6, 'Emmanuel', 'López', '', '2005-08-15', 60, 160, 'Ninguna', 'Ninguna'),
(8, 'Ornelas', 'Ornelas', '', '0000-00-00', 50, 150, 'Las mujeres', 'Ninguna'),
(9, 'probando', 'probandone', 'Mujer', '2001-01-01', 10, 10, 'None', 'None'),
(12, 'Vladimir Prueba', 'Torres', 'Hombre', '2005-12-06', 80, 170, 'Ninguna', 'Ninguna'),
(13, 'Victor', 'Torres', 'Hombre', '2001-03-26', 50, 170, 'Ninguna', 'Ninguna'),
(18, 'Myriam', 'Pequeño', 'No Especificar', '2005-11-11', 49, 165, 'Ninguna', 'Ninguna'),
(20, 'Antonio', 'Manzano', 'Hombre', '2005-09-05', 10, 200, 'Ninguna', 'Mosquitos'),
(24, 'Diego', 'Living Rooms', 'No Especificar', '2004-02-09', 65, 176, 'None', 'La Escuela');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`folio`),
  ADD KEY `id_medico` (`id_medico`),
  ADD KEY `id_paciente` (`id_paciente`);

--
-- Indexes for table `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id_medico`);

--
-- Indexes for table `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
  MODIFY `folio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`id_medico`) REFERENCES `doctores` (`id_medico`),
  ADD CONSTRAINT `consultas_ibfk_2` FOREIGN KEY (`id_paciente`) REFERENCES `pacientes` (`id_paciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
