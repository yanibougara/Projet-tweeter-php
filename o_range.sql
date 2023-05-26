-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 26 mai 2023 à 17:21
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
-- Base de données : `o'range`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `auteur` varchar(300) NOT NULL,
  `titre` varchar(111) NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `tag` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `auteur`, `titre`, `contenu`, `date`, `image`, `tag`) VALUES
(275, '86', 'tous assemblé', 'les secrets de la politique sont sur notre site ', '2023-05-24 14:21:03', 'imagepost/Capture d’écran 2023-05-24 à 14.18.39.png', 'politique'),
(276, '86', 'L\'emploi.', 'trouver un travail devient compliqué', '2023-05-24 14:23:13', 'imagepost/Capture d’écran 2023-05-24 à 14.22.17.png', 'emploi'),
(277, '86', 'workHard', 'Découvre nos méthodes de travail sur notre page', '2023-05-24 14:25:47', 'imagepost/Capture d’écran 2023-05-24 à 14.25.01.png', 'travail'),
(290, '86', 'Actu Foot', 'Ce soir c\'est Nice-Bordeaux!', '2023-05-26 09:21:33', 'imagepost/football.png', 'football'),
(291, '86', 'Urgence de Paris', 'Les médecins sont débordés aujourd\'hui..', '2023-05-26 09:23:19', 'imagepost/santé.png', 'sante'),
(292, '86', 'Nature02', 'Découverte d\'un pont dans une foret de L\'Aisne.', '2023-05-26 09:25:08', 'imagepost/Capture d’écran 2023-05-24 à 14.05.09.png', 'nature'),
(293, '85', 'playDay', 'Vous serez surpris par le nouveau Marvel Spiderman 2', '2023-05-26 09:26:48', 'imagepost/Capture d’écran 2023-05-24 à 13.53.48.png', 'jeuxvideo'),
(294, '85', 'Techno_IA', 'Je pense que bientot les robots nous remplaceront..', '2023-05-26 09:28:49', 'imagepost/Capture d’écran 2023-05-24 à 14.11.36.png', 'technologie'),
(295, '86', 'Ton actu du jour.', 'Election du nouveau maire de Paris ce weekend', '2023-05-26 09:32:04', 'imagepost/Capture d’écran 2023-05-24 à 13.58.09.png', 'actualite'),
(296, '86', 'WorldNews', 'Le concert de ton artiste préféré en tournée mondiale!!', '2023-05-26 09:34:14', 'imagepost/Capture d’écran 2023-05-20 à 13.59.09.png', 'monde');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_username` text NOT NULL,
  `user_email` text NOT NULL,
  `user_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_email`, `user_pass`) VALUES
(82, 'yani', 'yani@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$eDYuQS50Tk1JL3I5NVE4cg$tSCSt1T39fEqq/i7woDOGKHVRLkFb2ruzIDOS6Qw3rE'),
(83, 'yaya', 'yaya@free.fr', '$argon2id$v=19$m=65536,t=4,p=1$dUNuZ3l1YkJlUFh0ZDAwOA$2Ib/BZvunYbdun+sNxUINH07UBSmRMm5Py0zS6RLoxQ'),
(84, 'neil', 'neil@free.fr', '$argon2id$v=19$m=65536,t=4,p=1$RXl5WkJlNWh6ajJaR01tNA$TjfoPJJR2dSUtHhVGo5l8W20Uu9pYjZEW7g2qNJB0A0'),
(85, 'louca', 'louca@free.fr', '$argon2id$v=19$m=65536,t=4,p=1$UjBVTTZSTFBVZFdhQWpzOA$ZnK/Fg8+M9IcM0VgfKH3lVyfMtJC4AVc2KbtIUEbW94'),
(86, 'yani92', 'yani@free.fr', '$argon2id$v=19$m=65536,t=4,p=1$bkZMaEZhZDZIb3JTeS5HUA$EOcasqTu0d9nzdNPPVE8ATVwQR/uadkPILBnnqzudz4'),
(87, 'neil', 'neil@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$S3pMeDJ6V0J0Skx2Sk90MA$nI+oMEXnN5KfzlnWxpzVye/0UHowa2JH9QjhfVWnOPE'),
(88, 'louca', 'louca@free.fr', '$argon2id$v=19$m=65536,t=4,p=1$bDNuNUZKVFYwVlVMY25leQ$MfIYGFt9hYW1UO61GkPGRH5lIcjlpwBOFEbpUN3a4lc'),
(89, 'yani', 'multigamerz03@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$SDZ3SlRsc0YxMUNZLlo3Qw$twffa6Y0F5wCzZ5R+AP9UgDCbGLZ6LVOiZ+AfrbFVaA'),
(90, 'yani', 'multigamerz03@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ZHVEMnFXTmU0TzFzNzhzLw$b/r7M/D+37D9En/wTHod8S7zvDTaXQskvY4G6gs5y2A'),
(91, 'yanixxxx', 'multigamerz03@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ekNGeGFUdURCWVlhMS5PRQ$9O4XYNpc15FsZBul0c/F1fbcT7mn/rbVgVHJFMmsBG8');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
