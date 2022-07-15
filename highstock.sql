-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 01 mai 2018 à 19:47
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
-- Base de données :  `highstock`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'Rana', 'Rana'),
(3, 'Iheb', 'Iheb');

-- --------------------------------------------------------

--
-- Structure de la table `cmdvalide`
--

DROP TABLE IF EXISTS `cmdvalide`;
CREATE TABLE IF NOT EXISTS `cmdvalide` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `numCom` varchar(20) NOT NULL,
  `nomProd` varchar(20) NOT NULL,
  `qte` int(10) NOT NULL,
  `numTelClient` varchar(13) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `valide` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `numCom` varchar(20) NOT NULL,
  `nomProd` varchar(20) NOT NULL,
  `qte` int(3) NOT NULL,
  `numTelClient` varchar(13) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `valider` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adresse` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `listproduits`
--

DROP TABLE IF EXISTS `listproduits`;
CREATE TABLE IF NOT EXISTS `listproduits` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `titre` varchar(20) NOT NULL,
  `desc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `listproduits`
--

INSERT INTO `listproduits` (`id`, `titre`, `desc`) VALUES
(1, 'Commercial', 'Le Lorem Ipsum est simplement du faux texte employé dans la com'),
(2, 'Hydrolique', 'Le Lorem Ipsum est simplement du faux texte employé dans la com'),
(3, 'Indistruel', 'Le Lorem Ipsum est simplement du faux texte employé dans la com'),
(4, 'Accessoires', 'Le Lorem Ipsum est simplement du faux texte employé dans la com'),
(5, 'Inox', 'Le Lorem Ipsum est simplement du faux texte employé dans la com');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nomProd` varchar(20) CHARACTER SET latin1 NOT NULL,
  `desprod` text CHARACTER SET latin1 NOT NULL,
  `specification` text CHARACTER SET latin1 NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nomProd`, `desprod`, `specification`, `image`) VALUES
(4, 'Bouchon', 'A PoingnÃ©e et ChaÃ®ne', 'Le Lorem Ipsum est simplement du faux texte employés dans la composition et la mise en page avant impression. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.', ''),
(5, 'Bouchon', 'A PoingnÃ©e et ChaÃ®ne', 'Le Lorem Ipsum est simplement du faux texte employés dans la composition et la mise en page avant impression. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.', ''),
(6, 'Demi-Boitier', 'Camlock Femelle', 'Le Lorem Ipsum est simplement du faux texte employés dans la composition et la mise en page avant impression. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.', ''),
(7, 'Demi-Boitier', 'Camlock Femelle', 'Le Lorem Ipsum est simplement du faux texte employés dans la composition et la mise en page avant impression. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.', ''),
(8, 'Demi-Boitier', 'Camlock Femelle', 'Le Lorem Ipsum est simplement du faux texte employés dans la composition et la mise en page avant impression. Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.', ''),
(9, 'Demis-boitier', 'Camlock Femelle', 'Le Lorem Ipsum est simplement du faux texte employ', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
