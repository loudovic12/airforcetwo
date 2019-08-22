-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 mai 2019 à 20:58
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tour2controle`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_vol` int(11) NOT NULL,
  `num_carte` int(11) NOT NULL,
  `codesecu` int(11) NOT NULL,
  `expi` varchar(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_vol` (`id_vol`),
  KEY `id_user` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `achat`
--

INSERT INTO `achat` (`id`, `id_user`, `id_vol`, `num_carte`, `codesecu`, `expi`) VALUES
(66, 23, 2, 54654, 456, '04/12'),
(64, 23, 2, 5343354, 456, '04/12'),
(63, 23, 3, 684346543, 365, '22/06'),
(65, 23, 2, 453516, 456, '04/12');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `fidelite` int(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `nom`, `prenom`, `phone`, `adresse`, `pays`, `email`, `mdp`, `fidelite`) VALUES
(22, 'Rex-Harrison', 'Loudovic', 764411457, 'Rue Sedae', 'France', 'loudovic@mail.fr', '9c7b4f08e5843bc68e917bdfe94c0405', 4382457),
(23, 'Hebert', 'Margaux', 147896526, 'Rue Jeab', 'France', 'margaux@mail.fr', 'e99a18c428cb38d5f260853678922e03', 7866024);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_vol` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_vol` (`id_vol`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_user`, `id_vol`) VALUES
(22, 23, 2),
(19, 23, 3),
(23, 23, 4);

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

DROP TABLE IF EXISTS `vol`;
CREATE TABLE IF NOT EXISTS `vol` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomav` varchar(50) COLLATE utf8_bin NOT NULL,
  `numav` varchar(50) COLLATE utf8_bin NOT NULL,
  `ville_dep` varchar(50) COLLATE utf8_bin NOT NULL,
  `ville_arr` varchar(50) COLLATE utf8_bin NOT NULL,
  `date_dep` date NOT NULL,
  `date_arr` date NOT NULL,
  `h_dep` varchar(50) COLLATE utf8_bin NOT NULL,
  `h_arr` varchar(50) COLLATE utf8_bin NOT NULL,
  `prix` int(20) NOT NULL,
  `img` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`id`, `nomav`, `numav`, `ville_dep`, `ville_arr`, `date_dep`, `date_arr`, `h_dep`, `h_arr`, `prix`, `img`) VALUES
(1, 'Air France', 'FR 1580', 'Paris', 'Londres', '2019-04-15', '2019-04-15', '08:00 AM', '10:00 AM', 150, 'londres.jpg'),
(2, 'British Airways', 'LD 5368', 'Londres', 'Paris', '2019-04-16', '2019-04-16', '01:00 PM', '03:00 PM', 178, 'paris.jpg'),
(3, 'Ryanair', 'ES 9586', 'Madrid', 'Barcelone', '2019-04-17', '2019-04-17', '10:00 AM', '01:00 PM', 85, 'barcelone.jpg'),
(4, 'Qatar Airways', 'LK 5986', 'Paris', 'Colombo', '2019-04-16', '2019-04-16', '06:00 AM', '09:00 PM', 350, 'colombo.jpg'),
(5, 'Delta', 'LA 9863', 'Miami', 'Los Angeles', '2019-04-17', '2019-04-17', '01:00 PM', '06:00 PM', 125, 'losangeles.jpg'),
(6, 'China Southern Airlines', 'CH 1263', 'Marseille', 'Guangzhou', '2019-04-17', '2019-04-17', '05:00 AM', '06:00 PM', 600, 'guangzhou.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
