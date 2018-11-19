-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 16 nov. 2018 à 12:01
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
-- Structure de la table `parteners`
--

DROP TABLE IF EXISTS `parteners`;
CREATE TABLE IF NOT EXISTS `parteners` (
  `partener_id` int(11) NOT NULL AUTO_INCREMENT,
  `partener_entreprise` varchar(255) NOT NULL,
  `partener_activite` varchar(255) NOT NULL,
  `partener_departement_soucripteur` varchar(255) NOT NULL,
  `partener_nom` varchar(255) NOT NULL,
  `partener_tel` varchar(255) NOT NULL,
  `partener_portable` varchar(255) NOT NULL,
  `partener_email` varchar(255) NOT NULL,
  `partener_ca_rapporte` text NOT NULL,
  `partener_historique` text NOT NULL,
  `partener_contrat` varchar(255) NOT NULL,
  `partener_debut_contrat` date NOT NULL,
  `partener_fin_contrat` date NOT NULL,
  PRIMARY KEY (`partener_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parteners`
--

INSERT INTO `parteners` (`partener_id`, `partener_entreprise`, `partener_activite`, `partener_departement_soucripteur`, `partener_nom`, `partener_tel`, `partener_portable`, `partener_email`, `partener_ca_rapporte`, `partener_historique`, `partener_contrat`, `partener_debut_contrat`, `partener_fin_contrat`) VALUES
(1, 'Microsoft', 'OS', 'lorem ipsum', 'Bill Gates', '(206) 709-3400', '(206) 709-3400', 'info@gatesfoundation.org', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', 'Integer laoreet faucibus libero sit amet convallis.', 'Contrat X', '2015-09-21', '2018-11-11'),
(2, 'Apple', 'iOs', 'lorem ipsum', 'Steve Jobes', '(206) 709-3400', '(206) 709-3400', 'info@x.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', 'Integer laoreet faucibus libero sit amet convallis.', 'Contrat Y', '2016-08-09', '2019-11-04'),
(3, 'Leo', 'Football', 'lorem ipsum', 'Lionel Messi', '(206) 709-3400', '(206) 709-3400', 'info@y.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', 'Integer laoreet faucibus libero sit amet convallis.', 'Contrat Z', '2017-12-02', '2021-11-18'),
(4, 'Cr7', 'Football', 'lorem ipsum', 'Cristiano Ronaldo', '(206) 709-3400', '(206) 709-3400', 'info@z.it', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', 'Integer laoreet faucibus libero sit amet convallis.', 'Contrat W', '2018-11-12', '2020-11-28'),
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
