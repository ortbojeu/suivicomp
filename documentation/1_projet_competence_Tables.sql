-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db647156118.db.1and1.com
-- Généré le :  Jeu 04 Mai 2017 à 14:59
-- Version du serveur :  5.5.54-0+deb7u2-log
-- Version de PHP :  5.4.45-0+deb7u8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db647156118`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

DROP TABLE IF EXISTS `annee`;
CREATE TABLE IF NOT EXISTS `annee` (
  `id_annee` int(11) NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `intitule` varchar(50) NOT NULL,
  PRIMARY KEY (`id_annee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_changement` date DEFAULT NULL,
  `id_groupe` int(11) NOT NULL,
  `users_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_appartenir_id_groupe` (`id_groupe`),
  KEY `fk_appartenir_users1_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Structure de la table `appeller`
--

DROP TABLE IF EXISTS `appeller`;
CREATE TABLE IF NOT EXISTS `appeller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact` int(11) NOT NULL,
  `users_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_appeller_id_contact` (`id_contact`),
  KEY `fk_appeller_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `auto_evaluer`
--

DROP TABLE IF EXISTS `auto_evaluer`;
CREATE TABLE IF NOT EXISTS `auto_evaluer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_autoEval` datetime DEFAULT NULL,
  `note_autoEval` int(11) DEFAULT NULL,
  `id_competence` int(11) NOT NULL,
  `users_id` int(10) NOT NULL,
  `commentaire` text NOT NULL,
  PRIMARY KEY (`id`,`id_competence`,`users_id`),
  KEY `fk_auto_evaluer_users1_idx` (`users_id`),
  KEY `FK_auto_evaluer_id_competence` (`id_competence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=148 ;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_competence`
--

DROP TABLE IF EXISTS `commentaire_competence`;
CREATE TABLE IF NOT EXISTS `commentaire_competence` (
  `commentaire` text,
  `id_commentaireCompetence` int(11) NOT NULL AUTO_INCREMENT,
  `id_competence` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_commentaireCompetence`),
  KEY `FK_commentaire_competence_id_competence` (`id_competence`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `nom_competence` varchar(100) DEFAULT NULL,
  `id_competence` int(11) NOT NULL AUTO_INCREMENT,
  `id_groupeCompetence` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_competence`),
  KEY `FK_competence_id_groupeCompetence` (`id_groupeCompetence`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `nom_contact` varchar(25) DEFAULT NULL,
  `prenom_contact` varchar(25) DEFAULT NULL,
  `adrese_contact` varchar(100) DEFAULT NULL,
  `CP_contact` varchar(6) DEFAULT NULL,
  `ville_contact` varchar(25) DEFAULT NULL,
  `telFixe_contact` varchar(10) DEFAULT NULL,
  `telMobile_contact` varchar(10) DEFAULT NULL,
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
CREATE TABLE IF NOT EXISTS `contenir` (
  `id` varchar(45) NOT NULL,
  `id_epreuve` int(11) NOT NULL,
  `id_competence` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_epreuve`,`id_competence`),
  KEY `FK_contenir_id_competence` (`id_competence`),
  KEY `FK_contenir_id_epreuve` (`id_epreuve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

DROP TABLE IF EXISTS `diplome`;
CREATE TABLE IF NOT EXISTS `diplome` (
  `id_diplome` int(11) NOT NULL AUTO_INCREMENT,
  `nom_diplome` varchar(25) DEFAULT NULL,
  `niveau_diplome` enum('Bac Professionnel','Bac Général','Bac Technologique','Bac +2','Bac +3','Bac +4','Bac +5') DEFAULT NULL,
  PRIMARY KEY (`id_diplome`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Structure de la table `epreuve`
--

DROP TABLE IF EXISTS `epreuve`;
CREATE TABLE IF NOT EXISTS `epreuve` (
  `date_epreuve` date DEFAULT NULL,
  `id_epreuve` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(10) NOT NULL,
  PRIMARY KEY (`id_epreuve`),
  KEY `fk_epreuve_users1_idx` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `evaluer_avec_epreuve`
--

DROP TABLE IF EXISTS `evaluer_avec_epreuve`;
CREATE TABLE IF NOT EXISTS `evaluer_avec_epreuve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_eval` datetime DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  `id_competence` int(11) NOT NULL,
  `id_epreuve` int(11) NOT NULL,
  `users_id_eleve` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_evaluer_avec_epreuve_id_competence` (`id_competence`),
  KEY `FK_evaluer_avec_epreuve_id_epreuve` (`id_epreuve`),
  KEY `fk_evaluer_avec_epreuve_users1_idx` (`users_id_eleve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `evaluer_simplement`
--

DROP TABLE IF EXISTS `evaluer_simplement`;
CREATE TABLE IF NOT EXISTS `evaluer_simplement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note_evaluerSimplement` int(11) DEFAULT NULL,
  `date_EvaluerSimplement` datetime DEFAULT NULL,
  `id_competence` int(11) NOT NULL,
  `users_id_prof` int(10) NOT NULL,
  `users_id_eleve` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_evaluer_simplement_id_competence` (`id_competence`),
  KEY `fk_evaluer_simplement_users1_idx` (`users_id_prof`),
  KEY `fk_evaluer_simplement_users2_idx` (`users_id_eleve`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=107 ;

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `nom_groupe` varchar(25) DEFAULT NULL,
  `id_groupe` int(11) NOT NULL AUTO_INCREMENT,
  `id_annee` int(11) DEFAULT NULL,
  `id_diplome` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_groupe`),
  KEY `FK_groupe_id_annee` (`id_annee`),
  KEY `FK_groupe_id_diplome` (`id_diplome`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `groupe_competence`
--

DROP TABLE IF EXISTS `groupe_competence`;
CREATE TABLE IF NOT EXISTS `groupe_competence` (
  `nom_groupe` varchar(150) DEFAULT NULL,
  `id_groupeCompetence` int(11) NOT NULL AUTO_INCREMENT,
  `id_matiere` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_groupeCompetence`),
  KEY `FK_groupe_competence_id_matiere` (`id_matiere`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Structure de la table `intervient`
--

DROP TABLE IF EXISTS `intervient`;
CREATE TABLE IF NOT EXISTS `intervient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_intervenant` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `users_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_intervient_id_matiere` (`id_matiere`),
  KEY `fk_intervient_users1_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `log_users`
--

DROP TABLE IF EXISTS `log_users`;
CREATE TABLE IF NOT EXISTS `log_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text_action` varchar(250) NOT NULL,
  `action` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `users_id` int(11) NOT NULL,
  `visibilite` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `nom_matiere` varchar(25) DEFAULT NULL,
  `id_matiere` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_matiere`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) CHARACTER SET utf8 NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

DROP TABLE IF EXISTS `possede`;
CREATE TABLE IF NOT EXISTS `possede` (
  `mention` varchar(25) DEFAULT NULL,
  `date_obtention` varchar(25) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_diplome` int(11) NOT NULL,
  `users_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_possede_users1_idx` (`users_id`),
  KEY `FK_possede_id_diplome` (`id_diplome`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

DROP TABLE IF EXISTS `suivre`;
CREATE TABLE IF NOT EXISTS `suivre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_groupe` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_groupe`,`id_matiere`),
  KEY `FK_suivre_id_matiere` (`id_matiere`),
  KEY `FK_suivre_id_groupe` (`id_groupe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `role` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) NOT NULL,
  `cp` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;
