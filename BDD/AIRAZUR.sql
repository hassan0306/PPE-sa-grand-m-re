-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Jeu 28 Septembre 2017 à 09:52
-- Version du serveur :  5.6.34
-- Version de PHP :  7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `AIRAZUR`
--

-- --------------------------------------------------------

--
-- Structure de la table `aeroport`
--

CREATE TABLE `aeroport` (
  `id` int(11) NOT NULL,
  `nomAeroport` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `aeroport`
--

INSERT INTO `aeroport` (`id`, `nomAeroport`) VALUES
(1, 'Paris CDG-France'),
(2, 'Dakar-Sénégal'),
(3, 'Marrakech-Maroc'),
(4, 'Alger-Algérie');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `adresse` varchar(60) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `nombreVoyageur` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`nom`, `prenom`, `adresse`, `mail`, `nombreVoyageur`) VALUES
('Sartori', 'Sebastien', '15 Rue Du Bac', 'sebsarto@gmail.com', 15);

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `numVols` varchar(40) NOT NULL,
  `dateDepart` datetime DEFAULT NULL,
  `dateArrivee` datetime DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `numAeroportDepart` int(11) DEFAULT NULL,
  `numAeroportArrivee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vol`
--

INSERT INTO `vol` (`numVols`, `dateDepart`, `dateArrivee`, `prix`, `place`, `numAeroportDepart`, `numAeroportArrivee`) VALUES
('AIR5007', '2011-04-22 12:00:00', '2011-04-22 17:00:00', 560, 120, 1, 2),
('AIR5108', '2011-04-23 13:00:00', '2011-04-23 18:20:00', 600, 120, 1, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `aeroport`
--
ALTER TABLE `aeroport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`numVols`),
  ADD KEY `numAeroportDepart` (`numAeroportDepart`),
  ADD KEY `numAeroportArrivee` (`numAeroportArrivee`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `vol`
--
ALTER TABLE `vol`
  ADD CONSTRAINT `vol_ibfk_1` FOREIGN KEY (`numAeroportDepart`) REFERENCES `aeroport` (`id`),
  ADD CONSTRAINT `vol_ibfk_2` FOREIGN KEY (`numAeroportArrivee`) REFERENCES `aeroport` (`id`);
