-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 21 nov. 2018 à 09:14
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
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(255) NOT NULL,
  `cat_entreprise` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`, `cat_entreprise`) VALUES
(1, 'TELEPHONIE & INTERNET', 'both'),
(2, 'HEBERGEMNET WEB & BDD', 'both'),
(3, 'BANQUE ', 'horus'),
(4, 'AUTRE', 'both');

-- --------------------------------------------------------

--
-- Structure de la table `charges`
--

DROP TABLE IF EXISTS `charges`;
CREATE TABLE IF NOT EXISTS `charges` (
  `id_charge` int(11) NOT NULL AUTO_INCREMENT,
  `id_fonction` int(11) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `prestataire` varchar(255) NOT NULL,
  `cout_mois` decimal(10,2) NOT NULL,
  `cout_annee` decimal(10,2) NOT NULL,
  `taux_tva` int(11) NOT NULL,
  `tva` decimal(10,2) NOT NULL,
  `ttc` decimal(10,2) NOT NULL,
  `anniv_contrat` date NOT NULL,
  `historique` text NOT NULL,
  `contentieux` text NOT NULL,
  PRIMARY KEY (`id_charge`),
  KEY `id_fonction` (`id_fonction`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `charges`
--

INSERT INTO `charges` (`id_charge`, `id_fonction`, `entreprise`, `prestataire`, `cout_mois`, `cout_annee`, `taux_tva`, `tva`, `ttc`, `anniv_contrat`, `historique`, `contentieux`) VALUES
(1, 1, 'Horus', 'ovh', '5.99', '71.88', 20, '1.20', '7.19', '2018-11-01', 'Historique Horus: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus posuere suscipit mi id interdum. Sed vel porta lectus, vitae semper diam. Integer sit amet viverra nulla. Donec lacinia ligula vel diam tincidunt pharetra. Duis rhoncus ligula neque, posuere feugiat orci dictum rutrum. Phasellus gravida faucibus orci, et porttitor eros viverra non.', 'Contentieux Horus: Donec quam diam, finibus at tellus a, dictum euismod enim. Quisque id malesuada est. In porttitor, felis at tincidunt mattis, sapien purus ultrices ipsum, ac fermentum nunc purus quis magna.'),
(2, 4, 'Kework', 'sfr', '6.99', '83.88', 10, '0.70', '7.69', '2018-11-15', 'historique kework hahdazdnsdkjknsd ksfknsqknk sdkskd nsknqsf ksfqs fjqsk qsfksqkksqf nksfksqn skqsksqn sksn kssdnqsk nsqk skn skn sn kkndsfksdfn sfkksqnv wcnkdnf nvdnkdnn', 'contentieux kework hahdazdnsdkjknsd ksfknsqknk sdkskd nsknqsf ksfqs fjqsk qsfksqkksqf nksfksqn skqsksqn sksn kssdnqsk nsqk skn skn sn kkndsfksdfn sfkksqnv wcnkdnf nvdnkdnn'),
(3, 2, 'Horus', 'Free', '3.99', '47.88', 20, '0.80', '4.79', '2018-11-14', 'historique Free', 'contentieux Free'),
(6, 3, 'Kework', 'EDF', '3169.00', '38028.00', 20, '633.80', '3802.80', '2018-12-20', 'historique climatisation', 'contentieux climatisation');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_entreprise` varchar(255) DEFAULT NULL,
  `client_effectif` int(11) DEFAULT NULL,
  `client_menu_famille` varchar(255) DEFAULT NULL,
  `client_fonction_occupee` varchar(255) DEFAULT NULL,
  `client_nom` varchar(255) DEFAULT NULL,
  `client_prenom` varchar(255) DEFAULT NULL,
  `client_tel` varchar(255) DEFAULT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `client_suivi` varchar(255) DEFAULT NULL,
  `client_date` varchar(255) DEFAULT NULL,
  `client_historique` text,
  `client_services` varchar(255) DEFAULT NULL,
  `client_contrat_deb` varchar(255) DEFAULT NULL,
  `client_contrat_fin` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`client_id`, `client_entreprise`, `client_effectif`, `client_menu_famille`, `client_fonction_occupee`, `client_nom`, `client_prenom`, `client_tel`, `client_email`, `client_suivi`, `client_date`, `client_historique`, `client_services`, `client_contrat_deb`, `client_contrat_fin`) VALUES
(1, 'Archon ', 6, 'Banque', 'Services Generaux', 'Archisio', 'Francoise', '0142121500', 'email@gmail.com', 'En negociation', '05/01/2016', 'le 021215 a 17H36 : presentaiton amil envoyee de mail victoria suite echnge tel . le 02 12 15 : echnage call avec MME Antoine nous ayant communqiue son adresse mail . Durant cet echange Mme Antoije nous a egalement transmis recevoir regulierement des Invites etrnagers , et nous a precise qu\'a ce jour le groupe Ajjirwafa représentait 25 agences sur paris et 150 collaborateurs.Le 021215 a 16H30 : echnage call Mme Fauconnierdu service juridique nous ayant transmis 2 contacts : celui de la Direction , Mme Antoine ligne directe 0153757516 et de sservice sgeneraux 0153758131. .  le 021215: echange call avec serive sgeneraux nous disant de voir avec MME Fauconnier', 'Conciergerie', '01/01/2014', '01/01/2016'),
(2, 'BNP', 21, 'Banque', 'Conseils', 'Blanc', 'Pierre', '01 50 45 79 23', 'pierreb@gmail.com', 'Pas interesse', '', '', 'Accueil', '10/10/2016', '10/10/2020'),
(3, 'Sandro Paris', 13, 'CAC 40', 'Commercial', 'Baudois', 'Maryn', '01 50 31 46 44', 'marynb@gmail.com', 'En negociation', '', '', 'Happiness', '02/02/2015', '02/02/2018'),
(4, 'Mercure', 30, 'RELA estate', 'Services generaux', 'Thauvois', 'Paul', '01 22 84 44 22', 'pault@gmail.com', 'En negociation', '', '', 'Cowork', '01/01/2016', '01/01/2020');

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
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employeurs`
--

INSERT INTO `employeurs` (`employee_id`, `nom`, `prenom`, `date_de_naissance`, `n_ss`, `email`, `telephone`, `addresse`, `poste_occupee`, `date_entree_entreprise`, `date_sortie_entreprise`, `departement_ratache`, `access_departement`, `user_id`) VALUES
(1, 'Pham ', 'Tien Quyen', '2018-01-01', '1616541216541616', 'paku2957@gmail.com', '0650255971', '08 Rue Leriche 75015 Paris', 'Developpeur', '2018-11-15', '2018-11-16', 'Informatique', 1, 1),
(29, 'qsdfqsdf', 'qsdf', '2018-11-23', 'qdsfqs', 'fsqdf', 'qsdf', 'qsdf', 'sdqf', '2018-11-11', '2018-11-10', 'sqdfqds', 0, 99999),
(26, 'qsfdqsdf', 'qsdfsqdf', '2018-11-26', 'qsdfqsdf', 'sqdfsqdf', 'sqdfq', 'qsdfqsdf', 'qsdfqsdf', '2018-11-20', '2018-11-07', '', 0, NULL),
(27, 'sqdfsqd', 'qfqsdf', '2018-11-07', 'qsdfqsd', 'qsdfqsdf', 'ddgssdg', 'sdfqsffsqd', 'sdfqsdf', '2018-11-19', '2018-11-19', 'fsqdfqsd', 0, NULL),
(25, 'qsdfqsdf', 'qsdfsqdf', '2018-11-04', '3243242', 'fsqdfsqd', 'qsdfqsdf', 'qsdfqsd', 'sqdfqsdf', '2018-11-05', '2018-11-06', 'qsdfsqdf', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fonctions`
--

DROP TABLE IF EXISTS `fonctions`;
CREATE TABLE IF NOT EXISTS `fonctions` (
  `id_fonction` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `nom_fonction` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fonction`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fonctions`
--

INSERT INTO `fonctions` (`id_fonction`, `id_categorie`, `nom_fonction`) VALUES
(1, 1, 'Location tel'),
(2, 1, 'Telephone portable'),
(3, 4, 'Climatisation'),
(4, 2, 'Site kework'),
(5, 2, 'Site Horus'),
(6, 3, 'Fonction banque');

-- --------------------------------------------------------

--
-- Structure de la table `parteners`
--

DROP TABLE IF EXISTS `parteners`;
CREATE TABLE IF NOT EXISTS `parteners` (
  `partener_id` int(11) NOT NULL AUTO_INCREMENT,
  `partener_entreprise` varchar(255) DEFAULT NULL,
  `partener_activite` varchar(255) DEFAULT NULL,
  `partener_departement_soucripteur` varchar(255) DEFAULT NULL,
  `partener_nom` varchar(255) DEFAULT NULL,
  `partener_tel` varchar(255) DEFAULT NULL,
  `partener_portable` varchar(255) DEFAULT NULL,
  `partener_email` varchar(255) DEFAULT NULL,
  `partener_ca_rapporte` text,
  `partener_date` date DEFAULT NULL,
  `partener_historique` varchar(255) DEFAULT 'Aucune historique',
  `partener_contrat` varchar(255) DEFAULT NULL,
  `partener_debut_contrat` date DEFAULT NULL,
  `partener_fin_contrat` date DEFAULT NULL,
  PRIMARY KEY (`partener_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parteners`
--

INSERT INTO `parteners` (`partener_id`, `partener_entreprise`, `partener_activite`, `partener_departement_soucripteur`, `partener_nom`, `partener_tel`, `partener_portable`, `partener_email`, `partener_ca_rapporte`, `partener_date`, `partener_historique`, `partener_contrat`, `partener_debut_contrat`, `partener_fin_contrat`) VALUES
(3, 'Leo', 'Football', 'lorem ipsum', 'Lionel Messi', '(206) 709-3400', '(206) 709-3400', 'info@y.fr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', NULL, 'Integer laoreet faucibus libero sit amet convallis.', 'Contrat Z', '2017-12-02', '2021-11-18'),
(1, 'Microsoft', 'OS', 'lorem ipsum', 'Bill Gates', '(206) 709-3400', '(206) 709-3400', 'info@gatesfoundation.org', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', NULL, 'Integer laoreet faucibus libero sit amet convallis.', 'Contrat X', '2015-09-21', '2018-11-11'),
(2, 'Apple', 'iOs', 'lorem ipsum', 'Steve Jobes', '(206) 709-3400', '(206) 709-3400', 'info@x.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...', NULL, 'Integer laoreet faucibus libero sit amet convallis.', 'Contrat Y', '2016-08-09', '2019-11-04');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_pass`, `user_email`, `user_date_inscription`, `user_poste`, `user_level`) VALUES
(1, 'paku', 'ffbdcb6949ae829a4cf2aa836b6187a198ee9988', 'paku@gmail.com', '2018-11-05', 'Dev', 1),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@gmail.com', '2018-11-04', '', 1),
(3, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@gmail.com', '2018-11-13', 'Informatique', 0),
(4, 'test2', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test2@gmail.com', '2018-11-13', 'DÃ©veloppement commercial', 0),
(5, 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'a.aza@gmail.com', '2018-11-21', 'Informatique', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
