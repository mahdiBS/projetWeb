-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 26 avr. 2019 à 16:50
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `IdCategories` int(11) NOT NULL AUTO_INCREMENT,
  `Marque` varchar(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  PRIMARY KEY (`Marque`),
  KEY `IdCategories` (`IdCategories`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`IdCategories`, `Marque`, `Type`) VALUES
(26, 'mezniiiiiiiiii', 'Femme');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `IdCommande` int(11) NOT NULL AUTO_INCREMENT,
  `IdPanier` int(11) NOT NULL,
  `NomProduit` varchar(25) NOT NULL,
  `PrixProduit` float NOT NULL,
  `Quantite` int(11) NOT NULL,
  `NomClient` varchar(25) NOT NULL,
  PRIMARY KEY (`IdCommande`),
  KEY `panier` (`IdPanier`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`IdCommande`, `IdPanier`, `NomProduit`, `PrixProduit`, `Quantite`, `NomClient`) VALUES
(32, 44, 'mahdouch', 500, 2, 'Myriam'),
(33, 43, 'mariemmm', 20, 1, 'Myriam'),
(34, 43, 'mariemmm', 20, 3, 'Myriam'),
(35, 45, 'yasmine', 45, 4, 'Myriam'),
(36, 45, 'yasmine', 45, 4, 'Myriam');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `com` text NOT NULL,
  `dat` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`nom`, `prenom`, `id`, `id_prod`, `com`, `dat`) VALUES
('hamza', 'enn', 1, 12, 'hfiehfie', '2025-04-20'),
('hamza', 'enn', 1, 13, 'fefefe', '2025-04-20'),
('hamza', 'enn', 1, 11, 'lalalal', '2025-04-20');

-- --------------------------------------------------------

--
-- Structure de la table `demandelivraison`
--

DROP TABLE IF EXISTS `demandelivraison`;
CREATE TABLE IF NOT EXISTS `demandelivraison` (
  `IdDemandeLivraison` int(11) NOT NULL AUTO_INCREMENT,
  `AdresseDemandeLivraison` varchar(25) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Prenom` varchar(25) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`IdDemandeLivraison`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `demandelivraison`
--

INSERT INTO `demandelivraison` (`IdDemandeLivraison`, `AdresseDemandeLivraison`, `Nom`, `Prenom`, `Message`) VALUES
(4, 'FI DAR AMENI', 'HAMZA', 'WMARIEM', 'yecer');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `IDevenement` int(11) NOT NULL,
  `Nomevenement` varchar(25) NOT NULL,
  `PRIXevenement` int(11) NOT NULL,
  `ADRESSEevenement` varchar(25) NOT NULL,
  `Nombresplaces` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  PRIMARY KEY (`IDevenement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`IDevenement`, `Nomevenement`, `PRIXevenement`, `ADRESSEevenement`, `Nombresplaces`, `Date`, `Heure`) VALUES
(2, 'mmm', 20, 'dddd', 19, '2019-04-30', '05:00:00'),
(987, 'hamza', 12, 'enoiurrr', 291, '2019-04-30', '12:12:00');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `IdFacture` int(12) NOT NULL AUTO_INCREMENT,
  `IdClient` int(11) NOT NULL,
  `DateFacture` date NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Prix` float NOT NULL,
  PRIMARY KEY (`IdFacture`),
  KEY `FK_PersonOrder` (`Prix`),
  KEY `FK_PersonOrde` (`Quantite`),
  KEY `facture` (`IdClient`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fidelite`
--

DROP TABLE IF EXISTS `fidelite`;
CREATE TABLE IF NOT EXISTS `fidelite` (
  `id_fd` int(11) NOT NULL AUTO_INCREMENT,
  `pt_fd` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`id_fd`),
  UNIQUE KEY `idUser` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fidelite`
--

INSERT INTO `fidelite` (`id_fd`, `pt_fd`, `date`, `description`, `idUser`) VALUES
(2, 144, '2019-04-26', 'pt fidelite', 7);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `IdLivraison` int(11) NOT NULL AUTO_INCREMENT,
  `AdresseLivraison` varchar(11) NOT NULL,
  `IdFacture` int(11) NOT NULL,
  `IdLivreur` int(11) NOT NULL,
  `message` varchar(25) NOT NULL,
  PRIMARY KEY (`IdLivraison`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`IdLivraison`, `AdresseLivraison`, `IdFacture`, `IdLivreur`, `message`) VALUES
(2, 'aa', 5, 578, 'bbbbbb'),
(3, 'rades', 2, 11, 'bb'),
(5, 'rades', 1, 122, 'aa');

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `IdLivreur` int(11) NOT NULL AUTO_INCREMENT,
  `Secteur` varchar(25) NOT NULL,
  `NomLivreur` varchar(25) NOT NULL,
  `PrenomLivreur` varchar(25) NOT NULL,
  `CIN` varchar(11) NOT NULL,
  `NumeroDeTelephone` varchar(8) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `message` varchar(25) NOT NULL,
  PRIMARY KEY (`IdLivreur`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`IdLivreur`, `Secteur`, `NomLivreur`, `PrenomLivreur`, `CIN`, `NumeroDeTelephone`, `Email`, `message`) VALUES
(9, 'rades', 'mahdiiiiiii', '123', '56897845', 'mahdi', 'mahdiiii', 'mahdiiiiiii');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `IdPanier` int(11) NOT NULL AUTO_INCREMENT,
  `Quantite` int(25) NOT NULL,
  `IdProduit` int(11) NOT NULL,
  `NomProduit` varchar(25) NOT NULL,
  `PrixProduit` float NOT NULL,
  `Image` varchar(50) NOT NULL,
  PRIMARY KEY (`IdPanier`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`IdPanier`, `Quantite`, `IdProduit`, `NomProduit`, `PrixProduit`, `Image`) VALUES
(43, 1, 27, 'mariemmm', 20, 'ba11.jpg'),
(44, 1, 26, 'mahdouch', 500, 'ch.jpg'),
(45, 1, 32, 'yasmine', 45, 'ch.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `IdProduit` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(25) NOT NULL,
  `NbStock` int(11) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `Prix` float NOT NULL,
  `Description` varchar(25) NOT NULL,
  `CategorieProduit` varchar(25) NOT NULL,
  `Image` varchar(70) NOT NULL,
  PRIMARY KEY (`IdProduit`),
  KEY `Type` (`Type`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`IdProduit`, `NomProduit`, `NbStock`, `Type`, `Prix`, `Description`, `CategorieProduit`, `Image`) VALUES
(30, 'hamza ennour', 4, 'mezniiiiiiiiii', 123, 'solde', 'Femme', 'ch2.jpg'),
(31, 'hamza sghaier', 5, 'mezniiiiiiiiii', 966, 'NON SOLDE', 'Femme', 'ch1.jpg'),
(32, 'yasmine', 1, 'mezniiiiiiiiii', 45, 'NON SOLDE', 'Femme', 'ch.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Identifiant` int(11) NOT NULL,
  `Num` int(8) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Facture` int(20) NOT NULL,
  `Dat` date NOT NULL,
  `Objet` varchar(20) NOT NULL,
  `Description` text NOT NULL,
  `Etat` int(11) NOT NULL,
  `Note` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`Nom`, `Prenom`, `Identifiant`, `Num`, `Mail`, `Facture`, `Dat`, `Objet`, `Description`, `Etat`, `Note`) VALUES
('yasmineeeee', 'mariemmmmmee', 3, 55099703, 'Hamza.Sghaier.1@esprit.tn', 123, '2022-04-20', 'ggg', ' gggg', 0, ''),
('hamza', 'enn', 1, 2134587699, 'hamza.ennour@esprit.tn', 12355, '2025-04-20', 'fzefzfr', 'fefefefe', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `solde`
--

DROP TABLE IF EXISTS `solde`;
CREATE TABLE IF NOT EXISTS `solde` (
  `IDsolde` int(11) NOT NULL,
  `Produit` int(11) NOT NULL,
  `Nouveauprix` int(11) NOT NULL,
  PRIMARY KEY (`IDsolde`),
  KEY `solde` (`Produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `solde`
--

INSERT INTO `solde` (`IDsolde`, `Produit`, `Nouveauprix`) VALUES
(123, 30, 18);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `joining_date`, `role`) VALUES
(1, 'Ahmed', 'rim.douss@esprit.tn', '123', '2016-04-12 18:57:17', 'Admin'),
(2, 'Amina', 'amina@esprit.tn', 'bbb', '2016-04-12 19:21:42', 'Client'),
(3, 'Myriam', 'Myrima.mezni@esprit.tn', 'ccc', '2019-04-16 16:03:01', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mdp`, `type`, `tel`, `mail`) VALUES
(7, 'Myriam', 'Mezn', '123', 'admin', 25252525, 'myriam.mezni@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `verifier`
--

DROP TABLE IF EXISTS `verifier`;
CREATE TABLE IF NOT EXISTS `verifier` (
  `IDevenement` varchar(20) CHARACTER SET utf8 NOT NULL,
  `IDclient` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `verifier`
--

INSERT INTO `verifier` (`IDevenement`, `IDclient`, `ID`) VALUES
('mmm', 1, 4),
('hamza', 1, 3);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `panier` FOREIGN KEY (`IdPanier`) REFERENCES `panier` (`IdPanier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture` FOREIGN KEY (`IdClient`) REFERENCES `commande` (`IdCommande`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `fidelite`
--
ALTER TABLE `fidelite`
  ADD CONSTRAINT `FD` FOREIGN KEY (`idUser`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `marque` FOREIGN KEY (`Type`) REFERENCES `categories` (`Marque`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `solde`
--
ALTER TABLE `solde`
  ADD CONSTRAINT `solde` FOREIGN KEY (`Produit`) REFERENCES `produit` (`IdProduit`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
