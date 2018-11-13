-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 13 nov. 2018 à 09:32
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

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
  `client_entreprise` varchar(255) NOT NULL,
  `client_menu_famille` varchar(255) NOT NULL,
  `client_services` varchar(255) NOT NULL,
  `client_fonction_occupee` varchar(255) NOT NULL,
  `client_effectif` int(11) NOT NULL,
  `client_nom` varchar(255) NOT NULL,
  `client_prenom` varchar(255) NOT NULL,
  `client_tel` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_contrat_deb` varchar(255) NOT NULL,
  `client_contrat_fin` varchar(255) NOT NULL,
  `client_suivi` varchar(255) NOT NULL,
  `client_historique` text NOT NULL,
  `client_date` varchar(255) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`client_id`, `client_entreprise`, `client_menu_famille`, `client_services`, `client_fonction_occupee`, `client_effectif`, `client_nom`, `client_prenom`, `client_tel`, `client_email`, `client_contrat_deb`, `client_contrat_fin`, `client_suivi`, `client_historique`, `client_date`) VALUES
(1, 'Archon ', 'Banque', 'Conciergerie', 'Services Generaux', 6, 'Archisio', 'Francoise', '0142121500', 'email@gmail.com', '01/01/2014', '01/01/2016', 'En negociation', 'le 021215 a 17H36 : presentaiton amil envoyee de mail victoria suite echnge tel . le 02 12 15 : echnage call avec MME Antoine nous ayant communqiue son adresse mail . Durant cet echange Mme Antoije nous a egalement transmis recevoir regulierement des Invites etrnagers , et nous a precise qu\'a ce jour le groupe Ajjirwafa représentait 25 agences sur paris et 150 collaborateurs.Le 021215 a 16H30 : echnage call Mme Fauconnierdu service juridique nous ayant transmis 2 contacts : celui de la Direction , Mme Antoine ligne directe 0153757516 et de sservice sgeneraux 0153758131. .  le 021215: echange call avec serive sgeneraux nous disant de voir avec MME Fauconnier', '05/01/2016'),
(2, 'BNP', 'Banque', 'Accueil', 'Conseils', 21, 'Blanc', 'Pierre', '01 50 45 79 23', 'pierreb@gmail.com', '10/10/2016', '10/10/2020', 'Pas interesse', '', ''),
(3, 'Sandro Paris', 'CAC 40', 'Happiness', 'Commercial', 13, 'Baudois', 'Maryn', '01 50 31 46 44', 'marynb@gmail.com', '02/02/2015', '02/02/2018', 'En negociation', '', ''),
(4, 'Mercure', 'RELA estate', 'Cowork', 'Services generaux', 30, 'Thauvois', 'Paul', '01 22 84 44 22', 'pault@gmail.com', '01/01/2016', '01/01/2020', 'En negociation', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `employeurs`
--

DROP TABLE IF EXISTS `employeurs`;
CREATE TABLE IF NOT EXISTS `employeurs` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `n_ss` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `addresse` varchar(255) NOT NULL,
  `poste_occupee` varchar(255) NOT NULL,
  `date_entree_entreprise` date NOT NULL,
  `date_sortie_entreprise` date NOT NULL,
  `departement_ratache` varchar(255) NOT NULL,
  `access_departement` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employeurs`
--

INSERT INTO `employeurs` (`employee_id`, `nom`, `prenom`, `date_de_naissance`, `n_ss`, `email`, `telephone`, `addresse`, `poste_occupee`, `date_entree_entreprise`, `date_sortie_entreprise`, `departement_ratache`, `access_departement`, `user_id`) VALUES
(1, 'Pham ', 'Tien Quyen', '2018-01-01', '1616541216541616', 'paku2957@gmail.com', '0650255971', '08 Rue Leriche 75015 Paris', 'Developpeur', '2018-11-15', '2018-11-16', 'Informatique', 1, 1),
(2, 'Thibault', 'Thibault', '2018-11-06', '123456123465', 'thibault@gmail.com', '060605050', 'Rue thibault', 'Thibault', '2018-11-14', '2018-11-15', 'Commercial', 1, 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parteners`
--

INSERT INTO `parteners` (`partener_id`, `partener_entreprise`, `partener_activite`, `partener_departement_soucripteur`, `partener_nom`, `partener_tel`, `partener_portable`, `partener_email`, `partener_ca_rapporte`, `partener_historique`, `partener_contrat`, `partener_debut_contrat`, `partener_fin_contrat`) VALUES
(1, 'Microsoft', 'OS', 'lorem ipsum', 'Bill Gates', '(206) 709-3400', '(206) 709-3400', 'info@gatesfoundation.org', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', 'Integer laoreet faucibus libero sit amet convallis.', 'Contrat 1', '2017-10-02', '2018-11-08');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_date_inscription` date NOT NULL,
  `user_poste` varchar(255) NOT NULL,
  `user_level` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_pass`, `user_email`, `user_date_inscription`, `user_poste`, `user_level`) VALUES
(1, 'paku', 'ffbdcb6949ae829a4cf2aa836b6187a198ee9988', 'paku@gmail.com', '2018-11-05', 'Dev', 1),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', '2018-11-04', '', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
