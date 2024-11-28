-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 déc. 2023 à 14:10
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_cabine`
--

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE `patient` (
  `cin` int(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_nais` date NOT NULL,
  `telephone` int(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `date_rendez` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`cin`, `nom`, `prenom`, `date_nais`, `telephone`, `adresse`, `date_rendez`) VALUES
(12485637, 'Hamdi', 'ghazouani', '1985-03-15', 97814635, 'Sousse', '2023-12-18'),
(23651975, 'Ala', 'Akkari', '2001-03-25', 59782451, 'Beja', '2023-12-21'),
(15874539, 'Amira', 'Andolsi', '2003-12-04', 59741365, 'Manouba', '2023-12-25'),
(11677778, 'Maram', 'Fezzeni', '2002-01-27', 25691342, 'Tunis', '2023-12-27'),
(12364228, 'Safa', 'Meftahi', '2000-10-19', 28878467, 'Wed mlise', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
