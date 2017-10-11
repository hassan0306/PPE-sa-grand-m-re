-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 11 Octobre 2017 à 17:31
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
  `NUMAERO` int(11) NOT NULL,
  `NOMAERO` varchar(128) DEFAULT NULL,
  `PAYS` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `aeroport`
--

INSERT INTO `aeroport` (`NUMAERO`, `NOMAERO`, `PAYS`) VALUES
(1, 'Paris CGG', 'France'),
(2, 'Dakar', 'Sénégal');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `numVol` varchar(128) NOT NULL,
  `NUMRESA` int(11) NOT NULL,
  `nomClient` varchar(128) DEFAULT NULL,
  `prenomClient` varchar(128) DEFAULT NULL,
  `mail` varchar(128) NOT NULL,
  `adresse` varchar(128) NOT NULL,
  `nbPlace` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`numVol`, `NUMRESA`, `nomClient`, `prenomClient`, `mail`, `adresse`, `nbPlace`) VALUES
('AIR5007', 1, 'hjnhj', 'njn,', 'n,n,', 'n,n,', 10),
('AIR5007', 2, 'mama', 'momo', 'momo@gmail.com', 'qsdqs', 5),
('AIR5007', 3, 'Khelil', 'Hassan', 'khelilhassan2@gmail.com', '50 B rue claude decaen', 2);

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `NUMERO` varchar(128) NOT NULL,
  `depart` int(50) NOT NULL,
  `arrivee` int(50) NOT NULL,
  `DATEDEPART` date DEFAULT NULL,
  `DATEARRIVEE` date DEFAULT NULL,
  `HEUREDEPART` time DEFAULT NULL,
  `HEUREARRIVEE` time DEFAULT NULL,
  `PRIX` decimal(13,2) DEFAULT NULL,
  `PLACES` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vol`
--

INSERT INTO `vol` (`NUMERO`, `depart`, `arrivee`, `DATEDEPART`, `DATEARRIVEE`, `HEUREDEPART`, `HEUREARRIVEE`, `PRIX`, `PLACES`) VALUES
('AIR5007', 1, 2, '2011-04-22', '2011-04-22', '12:00:00', '17:00:00', '560.00', 120),
('AIR5108', 1, 2, '2011-04-23', '2011-04-23', '13:00:00', '18:20:00', '600.00', 120);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `aeroport`
--
ALTER TABLE `aeroport`
  ADD PRIMARY KEY (`NUMAERO`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`numVol`,`NUMRESA`),
  ADD KEY `I_FK_RESERVATION_VOL` (`numVol`),
  ADD KEY `NUMRESA` (`NUMRESA`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`NUMERO`),
  ADD KEY `I_FK_VOL_AEROPORT` (`depart`),
  ADD KEY `I_FK_VOL_AEROPORT1` (`arrivee`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `NUMRESA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`numVol`) REFERENCES `vol` (`NUMERO`);

--
-- Contraintes pour la table `vol`
--
ALTER TABLE `vol`
  ADD CONSTRAINT `vol_ibfk_1` FOREIGN KEY (`depart`) REFERENCES `aeroport` (`NUMAERO`),
  ADD CONSTRAINT `vol_ibfk_2` FOREIGN KEY (`arrivee`) REFERENCES `aeroport` (`NUMAERO`);