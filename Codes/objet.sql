-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 17 déc. 2020 à 20:20
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `findmomo`
--

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `nom` varchar(40) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `niveau de zoom` float NOT NULL,
  `indice` text NOT NULL,
  `id` int(10) NOT NULL,
  `type` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `taillex` int(11) NOT NULL,
  `tailley` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `objet`
--

INSERT INTO `objet` (`nom`, `latitude`, `longitude`, `niveau de zoom`, `indice`, `id`, `type`, `image`, `taillex`, `tailley`) VALUES
('saumon', 59.9119, 10.7462, 8, 'Ceci devrait permettre de nourrir l\'ours qui détient un précieux indice', 1, 'objet débloquant', 'images/saumon.png', 38, 19),
('code', 63.4305, 10.3951, 8, 'Le code est 7342', 2, 'objet débloquant', 'images/code.png', 28, 28),
('feu', 60.393, 5.32415, 8, 'Ceci devrait permettre de libérer Momo !', 3, 'objet débloquant', 'images/feu.png', 38, 38),
('momo', 69.7233, 30.0311, 8, 'Bravo ! Vous avez sauvé Momo !', 4, 'objet bloqué', 'images/momo.png', 28, 28),
('maison du pêcheur', 60.393, 5.32415, 8, 'Entrez le code :', 5, 'objet bloqué', 'images/maison.png', 38, 38),
('igloo', 69.7212, 30.0324, 8, 'Momo est enfermée dans cet igloo ! A vous de la libérer', 6, 'objet bloqué', 'images/igloo.png', 48, 28),
('Tibo Petsen et Lora Weksen', 59.9122, 10.7464, 8, '\"Voici du saumon\"', 7, 'personnage', 'images/trolls.png', 19, 38),
('ours', 63.4308, 10.3951, 8, '\"Nourrissez-moi !\"', 8, 'personnage', 'images/ours.png', 35, 20);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `objet`
--
ALTER TABLE `objet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
