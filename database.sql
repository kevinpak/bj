-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 mars 2020 à 00:48
-- Version du serveur :  10.2.30-MariaDB
-- Version de PHP : 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u709293494_beejee`
--

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `ideTas` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `task` text NOT NULL,
  `up` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `task`
--

INSERT INTO `task` (`ideTas`, `name`, `email`, `task`, `up`, `status`, `dateCreate`) VALUES
(1, 'test', 'test@test.com', 'test job', 0, 1, '2020-03-30 01:22:21'),
(2, 'Jean', 'Jean@test.com', 'test job2', 0, 1, '2020-03-30 01:23:53'),
(3, 'Brice', 'brice@test.com', 'test job3', 0, 1, '2020-03-30 01:24:32'),
(4, 'Delphine', 'delphine@test.com', 'test job 4', 0, 1, '2020-03-30 01:25:22');

-- --------------------------------------------------------

--
-- Structure de la table `task_update`
--

CREATE TABLE `task_update` (
  `ideTasUpd` int(11) NOT NULL,
  `ideTas` int(11) NOT NULL,
  `ideUse` int(11) NOT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ideUse` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `login` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `dateCreate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ideUse`, `name`, `login`, `password`, `status`, `dateCreate`) VALUES
(1, 'Kevinpak', 'admin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, '2020-03-28 18:20:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`ideTas`);

--
-- Index pour la table `task_update`
--
ALTER TABLE `task_update`
  ADD PRIMARY KEY (`ideTasUpd`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ideUse`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `ideTas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `task_update`
--
ALTER TABLE `task_update`
  MODIFY `ideTasUpd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ideUse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
