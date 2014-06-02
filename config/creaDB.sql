-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Giu 02, 2014 alle 16:28
-- Versione del server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `nome` varchar(40) NOT NULL,
  `cognome` varchar(40) NOT NULL,
  `sesso` varchar(10) NOT NULL,
  `dataNascita` varchar(40) NOT NULL,
  `codiceFiscale` char(16) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `medico` tinyint(1) NOT NULL DEFAULT '0',
  `dirigente` tinyint(1) NOT NULL DEFAULT '0',
  `paziente` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `persona`
--

INSERT INTO `persona` (`nome`, `cognome`, `sesso`, `dataNascita`, `codiceFiscale`, `email`, `telefono`, `username`, `password`, `medico`, `dirigente`, `paziente`) VALUES
('Carlo', 'Centofanti', 'Maschio', '18/12/1991', 'cntcrl91t18a345d', 'email@mail.it', '123456789', 'Mellgood', '0000', 1, 1, 1),
('Giulio', 'Carducci', 'Maschio', '24/06/1992', 'crdgli92h24a345s', 'mailgiulio@mail.it', '1234567890', 'Splashzzzz', '0000', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
