-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 22 Mai 2018 à 09:04
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eleve`
--

-- --------------------------------------------------------

--
-- Structure de la table `infirmiers`
--

CREATE TABLE `infirmiers` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `infirmiers`
--

INSERT INTO `infirmiers` (`id`, `nom`, `prenom`, `password`) VALUES
(1, 'BYLON', 'Gaulin', 'Pa$$w0rd'),
(2, 'JOHNSON', 'Mark', 'football'),
(3, 'GRANDPRE', 'Aubin', 'pont en h'),
(4, 'GRUENEWALD', 'Tom', 'la santé par hcure'),
(5, 'KOWALSKA', 'Owana', '180289');

-- --------------------------------------------------------

--
-- Structure de la table `log`
--

CREATE TABLE `log` (
  `dateheure` datetime NOT NULL,
  `patient` int(11) NOT NULL,
  `infirmier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `log`
--

INSERT INTO `log` (`dateheure`, `patient`, `infirmier`) VALUES
('2018-05-22 10:22:59', 2, 1),
('2018-05-22 10:31:08', 2, 1),
('2018-05-22 10:44:25', 2, 1),
('2018-05-22 10:46:04', 2, 1),
('2018-05-22 10:53:55', 13, 4);

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `infirmier` int(11) NOT NULL,
  `nb1` int(11) NOT NULL,
  `nb2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `patients`
--

INSERT INTO `patients` (`id`, `nom`, `prenom`, `infirmier`, `nb1`, `nb2`) VALUES
(1, 'CASTEL', 'Jérémy', 1, 5, 2),
(2, 'BARRU', 'Killian', 1, 4, 0),
(3, 'GARNIER', 'Louis', 1, 1, 1),
(4, 'CHARLET', 'Anthony', 2, 1, 0),
(5, 'BARILLEC', 'Jan', 2, 2, 5),
(6, 'BOUE', 'Thomas', 2, 1, 1),
(7, 'HOULES', 'Matthis', 5, 1, 8),
(8, 'VAN-DER-DONKT', 'Thimothy', 5, 7, 3),
(9, 'CARON', 'Julien', 3, 5, 8),
(10, 'SHALKENS', 'Raphaël', 3, 5, 8),
(11, 'FABRE', 'Mathis', 3, 2, 2),
(12, 'COMBES', 'Justine', 5, 4, 4),
(13, 'BRESSET', 'Nicolas', 4, 4, 2),
(14, 'BISOTTO', 'Romain', 4, 4, 2),
(15, 'GIANNARELLI', 'Camille', 4, 5, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `infirmiers`
--
ALTER TABLE `infirmiers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `infirmiers`
--
ALTER TABLE `infirmiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
