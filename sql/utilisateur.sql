-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 oct. 2017 à 12:50
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp3`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_UTILISATEUR` int(10) NOT NULL AUTO_INCREMENT,
  `nom_UTILISATEUR` varchar(25) NOT NULL,
  `email_UTILISATEUR` varchar(100) NOT NULL,
  `password_UTILISATEUR` varchar(150) NOT NULL,
  `naissance_UTILISATEUR` date NOT NULL,
  `sexe_UTILISATEUR` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_UTILISATEUR`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_UTILISATEUR`, `nom_UTILISATEUR`, `email_UTILISATEUR`, `password_UTILISATEUR`, `naissance_UTILISATEUR`, `sexe_UTILISATEUR`) VALUES
(1, 'dfdfdgdgd', 'jabrane.pro@gmail.com', 'vvsvsvsv', '2017-10-10', NULL),
(2, 'amel', 'amel.pro@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '1983-06-22', NULL),
(3, 'arwa', 'asma.pro@gmail.com', 'f154741a35945197bff1fb166f00cffd', '1986-03-03', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
