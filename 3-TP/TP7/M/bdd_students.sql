-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 27 nov. 2023 à 16:24
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_students`
--

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `students`
--

INSERT INTO `students` (`ID`, `Name`, `Firstname`, `Gender`) VALUES
(1, 'COULOMBEL', 'Selim', 'M'),
(2, 'AMMAR KHODJA', 'Tina', 'F'),
(3, 'BELOT', 'Florent', 'M'),
(4, 'BOUCHARAFA', 'Abdel-Karim', 'M'),
(5, 'DECRETON', 'Jeremy', 'M'),
(6, 'GATTEPAILLE', 'Amelie', 'F'),
(7, 'HOURI', 'Messaoud', 'M'),
(8, 'ZIOUCHE', 'Lyesse', 'M'),
(9, 'LORO', 'Simon', 'M'),
(10, 'MEKENTICHI', 'Farid', 'M'),
(11, 'OULD-RABAH', 'Nacim', 'M'),
(12, 'RICHARD', 'Ricky', 'M'),
(13, 'ROHART', 'Dylan', 'M'),
(14, 'YAWADIO', 'Lorena', 'F'),
(15, 'BREUX', 'Mathilde', 'F'),
(16, 'CONNAN', 'Efflam', 'M'),
(17, '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
