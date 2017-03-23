-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 23 mrt 2017 om 15:27
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `zwabber`
--
CREATE DATABASE IF NOT EXISTS `zwabber` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `zwabber`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bedrijf`
--

CREATE TABLE IF NOT EXISTS `bedrijf` (
  `bedrijfId` int(5) NOT NULL AUTO_INCREMENT,
  `bedrijfNaam` varchar(50) NOT NULL,
  `bedrijfPlaats` varchar(50) NOT NULL,
  `bedrijfTelefoon` int(12) NOT NULL,
  PRIMARY KEY (`bedrijfId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `bedrijf`
--

INSERT INTO `bedrijf` (`bedrijfId`, `bedrijfNaam`, `bedrijfPlaats`, `bedrijfTelefoon`) VALUES
(1, 'test', 'test', 1233);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kamer`
--

CREATE TABLE IF NOT EXISTS `kamer` (
  `bedrijfId` int(5) NOT NULL,
  `kamerId` int(50) NOT NULL AUTO_INCREMENT,
  `kamerNaam` varchar(50) NOT NULL,
  `kamerminpunten` int(10) NOT NULL,
  `kamerPrioriteit` int(1) NOT NULL,
  `werknemerId` int(5) NOT NULL,
  PRIMARY KEY (`kamerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `object`
--

CREATE TABLE IF NOT EXISTS `object` (
  `kamerId` int(50) NOT NULL,
  `objectId` int(100) NOT NULL AUTO_INCREMENT,
  `objectNaam` varchar(50) NOT NULL,
  `objectPunten` int(1) NOT NULL,
  `objectAantal` int(10) NOT NULL,
  PRIMARY KEY (`objectId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werknemer`
--

CREATE TABLE IF NOT EXISTS `werknemer` (
  `werknemerId` int(5) NOT NULL AUTO_INCREMENT,
  `werknemerNaam` varchar(50) NOT NULL,
  `werknemerPlaats` varchar(50) NOT NULL,
  `werknemerEmail` varchar(50) NOT NULL,
  `werknemerTelefoon` int(12) NOT NULL,
  `werknemerGeslacht` varchar(5) NOT NULL DEFAULT 'man',
  PRIMARY KEY (`werknemerId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
