-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 14 fév. 2023 à 23:01
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `securiteprojet`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password_hash` varchar(64) NOT NULL,
  `salt` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password_hash`, `salt`) VALUES
(1, 'ghgh', '$2y$12$CjfjKE5hw7SyXKeGh3/JouhSlN8QuM0j45XJZ8zylpvcvA3cOPFiC', '6b1f354ea8507ff37d4ddfd60b7a5aca'),
(2, 'amal', '$2y$12$iB3uPgfYjeTGmVSUgQlpV.I7uFXnubU0wUCVev6fAeMiBqNBK65x6', '2c4040869096588ef7d863e679c2d28b'),
(3, 'lulu', '$2y$12$YPZOrbyrIsZEyoOJY5KSHe2l0cZqxrFlsXaXUWogSTnsiFhpgiSJC', 'c07774ccf066da7169867329b09845e1'),
(5, 'fgff', '$2y$10$wIsswyyc00uUv80H.ade.eLsq8qgGKhlGzpG/ZLdx5re86Vho8F6a', '169066561763ead309b2fa30.28998557'),
(6, 'test', '$2y$10$wuFmgoIejkk8rC..I2PDY.J/Njp9MWCgrIuwRdXH4/xqoHLk69TDK', '83340988663ead6c7ea1c47.20612008'),
(7, 'lili', '$2y$10$Weri23RQQM0/vuvQG8pj2.C9ZOGU2mIuZix6YnoUycHEB2BfhQGMi', '61718504363ebf243cf7d39.15548648');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
