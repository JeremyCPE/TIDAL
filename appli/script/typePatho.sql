-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 04 Octobre 2019 à 08:09
-- Version du serveur :  5.6.37
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp`
--

-- --------------------------------------------------------

--
-- Structure de la table `typePatho`
--

CREATE TABLE IF NOT EXISTS `typePatho` (
  `type` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'code du type de la pathologie',
  `nom` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'nom du type de la pathologie'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typePatho`
--

INSERT INTO `typePatho` (`type`, `nom`) VALUES
('me', 'Méridien externe'),
('mi', 'Méridien externe'),
('tf', 'Zang/Fu'),
('l', 'Voie luo'),
('j', 'Jin jing'),
('mv', 'Merveilleux vaisseau');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
