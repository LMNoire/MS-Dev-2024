-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 déc. 2023 à 11:53
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
-- Base de données : `tp_penality`
--

-- --------------------------------------------------------

--
-- Structure de la table `offence`
--

CREATE TABLE `offence` (
  `ID_Offence` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Libelle` varchar(50) NOT NULL,
  `Montant` float NOT NULL,
  `Date` datetime NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `ID_Users` int(11) NOT NULL,
  `Code_Infraction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `penality`
--

CREATE TABLE `penality` (
  `Code_Infraction` int(11) NOT NULL,
  `Libelle` varchar(50) NOT NULL,
  `Montant` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `penality`
--

INSERT INTO `penality` (`Code_Infraction`, `Libelle`, `Montant`) VALUES
(1, 'Petite injure', 0.1),
(2, 'Grosse injure', 0.3),
(3, 'Comportement inadapté', 0.5),
(4, 'Comportement violent', 10),
(5, 'Retard', 0.1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_Users` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Tel` varchar(15) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `cpt_denonciations` int(11) NOT NULL,
  `cpt_casier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_Users`, `Nom`, `Prenom`, `Mail`, `Tel`, `Password`, `reset_token_hash`, `reset_token_expires_at`, `cpt_denonciations`, `cpt_casier`) VALUES
(6, 'Houri', 'Messaoud', 'messaoud.houri@outlook.fr', '767200261', '$2y$10$VYUbX3n38MdTAh6Q6/GBludFsg12/EYenKYMRa2ku4B0t6yQUEbZ2', NULL, NULL, 0, 0),
(7, 'Houri', 'Messaoud', 'abdelkarim@outlook.fr', '767200261', '$2y$10$I1PP64OTYmjf9iZKJ7BQn.RH/6K/DyTZ.9k5xweDbjoC1iE36byfu', NULL, NULL, 0, 0),
(8, 'Houri', 'Karim', 'kaminomi@outlook.fr', '0665987896', '$2y$10$HqGWoaPU.lTLIionle46..7oR1RiOU7W7qqa9hyFN3UzlUIZlkVlK', NULL, NULL, 0, 0),
(9, 'Francois', 'Hugo', 'hugofrancois36@gmail.com', '0661885594', '$2y$10$WFrfBG281opPfPB58.hoQOaCsI6/PGZvYw86aNoKZcfC97fJjQtGq', NULL, NULL, 0, 0),
(10, 'Ferrah', 'Akram', 'akram36@gmail.com', '0561458796', '$2y$10$SqC9nx95Py2HP8iDaDFgH.ysEArPjnFcm7YiP9LfyardgfDNCeWzm', NULL, NULL, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `offence`
--
ALTER TABLE `offence`
  ADD PRIMARY KEY (`ID_Offence`),
  ADD KEY `Offence_Users_FK` (`ID_Users`),
  ADD KEY `Offence_Penality0_FK` (`Code_Infraction`);

--
-- Index pour la table `penality`
--
ALTER TABLE `penality`
  ADD PRIMARY KEY (`Code_Infraction`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_Users`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `offence`
--
ALTER TABLE `offence`
  MODIFY `ID_Offence` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `penality`
--
ALTER TABLE `penality`
  MODIFY `Code_Infraction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_Users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offence`
--
ALTER TABLE `offence`
  ADD CONSTRAINT `Offence_Penality0_FK` FOREIGN KEY (`Code_Infraction`) REFERENCES `penality` (`Code_Infraction`),
  ADD CONSTRAINT `Offence_Users_FK` FOREIGN KEY (`ID_Users`) REFERENCES `users` (`ID_Users`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
