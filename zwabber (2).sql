-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 13 apr 2017 om 10:57
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `bedrijf`
--

INSERT INTO `bedrijf` (`bedrijfId`, `bedrijfNaam`, `bedrijfPlaats`, `bedrijfTelefoon`) VALUES
(2, 'ferf', 'vff', 12345),
(3, 'ja', 'nee', 134),
(4, 'trjtr', 'tfj', 23456789);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `kamer`
--

INSERT INTO `kamer` (`bedrijfId`, `kamerId`, `kamerNaam`, `kamerminpunten`, `kamerPrioriteit`, `werknemerId`) VALUES
(2, 2, 'jeo', 3, 2, 4),
(3, 3, '3', 3, 3, 3);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Gegevens worden uitgevoerd voor tabel `object`
--

INSERT INTO `object` (`kamerId`, `objectId`, `objectNaam`, `objectPunten`, `objectAantal`) VALUES
(1, 1, 'stoel', 2, 3),
(2, 2, 'isgoed', 4, 6),
(3, 3, 'sgd', 0, 0),
(3, 4, 'hfhh', 3, 4),
(3, 5, 'dgdfg', 3, 5),
(3, 6, '3r', 4, 8),
(3, 7, 'hfghfgh', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werkdagen`
--

CREATE TABLE IF NOT EXISTS `werkdagen` (
  `werkdagId` int(10) NOT NULL AUTO_INCREMENT,
  `werknemerId` int(10) NOT NULL,
  `werkdag` varchar(10) NOT NULL,
  `werkTijd` varchar(20) NOT NULL,
  PRIMARY KEY (`werkdagId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werknemer`
--

CREATE TABLE IF NOT EXISTS `werknemer` (
  `werknemerId` int(5) NOT NULL AUTO_INCREMENT,
  `werknemerGebruikersnaam` varchar(50) NOT NULL,
  `werknemerWachtwoord` varchar(50) NOT NULL,
  `werknemerNaam` varchar(50) NOT NULL,
  `werknemerPlaats` varchar(50) NOT NULL,
  `werknemerEmail` varchar(50) NOT NULL,
  `werknemerTelefoon` int(12) NOT NULL,
  `werknemerGeslacht` varchar(5) NOT NULL DEFAULT 'man',
  `Rechten` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`werknemerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `werknemer`
--

INSERT INTO `werknemer` (`werknemerId`, `werknemerGebruikersnaam`, `werknemerWachtwoord`, `werknemerNaam`, `werknemerPlaats`, `werknemerEmail`, `werknemerTelefoon`, `werknemerGeslacht`, `Rechten`) VALUES
(1, 'joey', 'joey', 'joey', 'kampen', 'joey@hotmial.com', 1234534, 'man', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
