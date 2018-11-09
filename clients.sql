-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 07 nov. 2018 à 11:43
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
-- Base de données :  `manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_nom` varchar(255) NOT NULL,
  `client_prenom` varchar(255) NOT NULL,
  `client_tel` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_fonction_occupee` varchar(255) NOT NULL,
  `client_entreprise` varchar(255) NOT NULL,
  `client_contact_entreprise` varchar(255) NOT NULL,
  `client_historique` text NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`client_id`, `client_nom`, `client_prenom`, `client_tel`, `client_email`, `client_fonction_occupee`, `client_entreprise`, `client_contact_entreprise`, `client_historique`) VALUES
(1, 'Archisio', 'Francoise', '33 1 42 12 15 00', 'email@gmail.com', 'Services Generaux', 'Archon 6pers', 'pas interressant', 'le 021215 a 17H36 : presentaiton amil envoyee de mail victoria suite echnge tel . le 02 12 15 : echnage call avec MME Antoine nous ayant communqiue son adresse mail . Durant cet echange Mme Antoije nous a egalement transmis recevoir regulierement des Invites etrnagers , et nous a precise qu\'a ce jour le groupe Ajjirwafa représentait 25 agences sur paris et 150 collaborateurs.Le 021215 a 16H30 : echnage call Mme Fauconnierdu service juridique nous ayant transmis 2 contacts : celui de la Direction , Mme Antoine ligne directe 0153757516 et de sservice sgeneraux 0153758131. .  le 021215: echange call avec serive sgeneraux nous disant de voir avec MME Fauconnier');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
