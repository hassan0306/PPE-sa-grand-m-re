-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 21 Septembre 2017 à 14:46
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `airazur`
--

-- --------------------------------------------------------

--
-- Structure de la table `aeroport`
--

CREATE TABLE IF NOT EXISTS `aeroport` (
  `numAero` int(50) NOT NULL AUTO_INCREMENT,
  `nomAero` varchar(255) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`numAero`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `aeroport`
--

INSERT INTO `aeroport` (`numAero`, `nomAero`, `pays`) VALUES
(1, 'Paris CGG', 'France'),
(2, 'Dakar', 'Sénégal');

-- --------------------------------------------------------
--
-- Structure de la table `aeroport`
--

CREATE TABLE IF NOT EXISTS `aeroport2` (
  `numAeroport` int(50) NOT NULL AUTO_INCREMENT,
  `nomAeroport` varchar(255) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`numAeroport`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `aeroport2`
--

INSERT INTO `aeroport2` (`numAeroport`, `nomAeroport`, `pays`) VALUES
(1, 'Paris CGG', 'France'),
(2, 'Dakar', 'Sénégal');

-- --------------------------------------------------------
--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservvation` (
  `numResa` int(50) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(255) DEFAULT NULL,
  `prenomClient` varchar(50) DEFAULT NULL,
  `numVol` varchar(50) DEFAULT NULL,
  `nbPlace` int(5) DEFAULT NULL,
  PRIMARY KEY (`numResa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `aeroport`
--

INSERT INTO `reservation` (`numResa`, `nomClient`, `prenomClient`,`numVol`,`nbPlace`) VALUES
(1, 'Boss', 'Anne','AIR5007',3);

-- --------------------------------------------------------
--
-- Structure de la table `vol`
--

CREATE TABLE IF NOT EXISTS `vol` (
  `numero` varchar(255) NOT NULL,
  `depart` int(50) DEFAULT NULL,
  `arrivee` int(50) DEFAULT NULL,
  `dateDepart` date DEFAULT NULL,
  `heureDepart` time DEFAULT NULL,
  `dateArrivee` date DEFAULT NULL,
  `heureArrivee` time DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `places` int(4) DEFAULT NULL,
  PRIMARY KEY (`numero`),
  KEY `fk_Tab_AeroD` (`depart`),
  KEY `fk_Tab_AeroA` (`arrivee`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vol`
--

INSERT INTO `vol` (`numero`, `depart`, `arrivee`, `dateDepart`, `heureDepart`, `dateArrivee`, `heureArrivee`, `prix`, `places`) VALUES
('AIR5007', 1, 2, '2011-04-22', '12:00:00', '2011-04-22', '17:00:00', 560, 120),
('AIR5108', 1, 2, '2011-04-23', '13:00:00', '2011-04-23', '18:20:00', 600, 120);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;