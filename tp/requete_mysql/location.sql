-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : jeu. 10 oct. 2024 à 11:40
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE `agence` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agence`
--

INSERT INTO `agence` (`id`, `titre`, `adresse`, `ville`, `cp`, `description`, `photo`) VALUES
(1, 'Top Garage', 'rue des moutons', 'Paris', 75000, 'Voitures d\'occasion - Top Garage', 'https://www.top-garage.fr/app/uploads/Fotolia_140634336_L-1900x1265.jpg'),
(2, 'Audi', '4 rue de la brochette', 'Nanterre', 92000, 'Tout le stock de voiture occasion en vente par le garage AUDI', 'https://medias.caravenue.com/publicar/medias/import_2125/20240918/10e6/4407_1.jpg?fit=crop&w=522&h=392');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `id_user_id` int(11) DEFAULT NULL,
  `id_vehicule_id` int(11) DEFAULT NULL,
  `id_agence_id` int(11) DEFAULT NULL,
  `date_heure_depart` datetime NOT NULL,
  `date_heure_fin` datetime NOT NULL,
  `prix_total` int(11) NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221020084253', '2024-05-25 09:06:50', 35),
('DoctrineMigrations\\Version20221021132111', '2024-05-25 09:06:50', 20),
('DoctrineMigrations\\Version20221021161253', '2024-05-25 09:06:50', 34),
('DoctrineMigrations\\Version20221024093700', '2024-05-25 09:06:51', 8),
('DoctrineMigrations\\Version20221024112442', '2024-05-25 09:06:51', 8),
('DoctrineMigrations\\Version20221024113438', '2024-05-25 09:06:51', 6),
('DoctrineMigrations\\Version20230213175250', '2024-05-25 09:06:51', 6);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civilite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `mdp`, `nom`, `prenom`, `email`, `civilite`, `statut`, `date_enregistrement`) VALUES
(1, 'Francis', 'yeah', 'otarius', 'GOA', 'ff@hotmail.com', 'h', 'true', '2024-10-09 23:05:55'),
(2, 'Francis', 'yeah', 'otarius', 'GOA', 'ff@hotmail.com', 'h', 'true', '2024-10-09 23:05:55');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `agence_id` int(11) DEFAULT NULL,
  `marque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix_journalier` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `agence_id`, `marque`, `modele`, `description`, `photo`, `prix_journalier`, `titre`) VALUES
(1, 2, 'Audi', 'RIVIERA TECHNIC', 'Voitures neuves et d\'occasion\r\n', 'https://s3.stampyt.io/prod/customer/media/2108bf28-27a2-4aa8-b898-e6453a82aed1/4475d71e-d6eb-482d-a1ab-f3b1c7d0fbe1.jpg', 489, 'Audi Mougins '),
(3, 1, 'Bugatti', 'Bugatti W16', 'The ultimate roadster', 'https://newsroom.cdn.bugatti-media.com/a32c5a46-eb09-4a6f-ac28-35622dde9d4d/xl', 100000000, 'Bugatti W16 Mistral');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67D79F37AE5` (`id_user_id`),
  ADD KEY `IDX_6EEAA67D5258F8E6` (`id_vehicule_id`),
  ADD KEY `IDX_6EEAA67D57108F2A` (`id_agence_id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_292FFF1DD725330D` (`agence_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `FK_292FFF1DD725330D` FOREIGN KEY (`agence_id`) REFERENCES `agence` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
