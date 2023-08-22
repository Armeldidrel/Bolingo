-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 août 2023 à 12:25
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mabd`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(5) NOT NULL,
  `user_send` int(2) DEFAULT NULL,
  `user_receive` int(2) DEFAULT NULL,
  `content_message` varchar(1500) NOT NULL,
  `day_time_message` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `user_send`, `user_receive`, `content_message`, `day_time_message`) VALUES
(1, 27, 29, 'Salut dan c\'est judivine je suis la copine de armel ', '2023-08-17 23:00:33'),
(2, 27, 30, 'bonjour comment vas tu aujourd\'hui ?', '2023-08-17 23:04:50'),
(3, 30, 27, 'Je vais bien merci et toi ?', '2023-08-17 23:05:28'),
(4, 27, 30, 'ça va merci , que fais-tu ?', '2023-08-17 23:57:18'),
(5, 30, 27, 'Rien de bon je suis juste entrein de coder un char en phph', '2023-08-17 23:57:57'),
(6, 27, 30, 'ah d\'accord c\'est tres bien je suis fiere de toi mon ami', '2023-08-18 00:00:57'),
(7, 30, 29, 'nous sommes les seul a etre connecter ', '2023-08-18 00:09:01'),
(8, 29, 30, 'oui iensur nous avons la chane \r\n', '2023-08-18 00:09:41'),
(10, 33, 30, 'bonjour', '2023-08-18 10:58:07');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(2) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `user_passWord` varchar(15) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `is_online` tinyint(1) NOT NULL,
  `Sexe` varchar(30) DEFAULT NULL,
  `Photo_prophile` varchar(255) DEFAULT 'Phot_de_profile/Default_pp.webp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `user_passWord`, `user_email`, `is_online`, `Sexe`, `Photo_prophile`) VALUES
(25, 'Gania', 'Armel', '1234', 'didre@gmail.com', 0, NULL, 'Phot_de_profile/'),
(26, 'dimitri', 'Mikila', '1234', 'didi@gmail.com', 0, NULL, 'Phot_de_profile/Default_pp.webp'),
(27, 'MASSAMBA', 'JUDIVINE ', '1234', 'jdvn@gmail.com', 0, NULL, 'Phot_de_profile/Default_pp.webp'),
(28, 'verchy', 'Oba', '1234', 'verchy@gmail.com', 0, NULL, 'Phot_de_profile/Default_pp.webp'),
(29, 'matic', 'Dan', '1234', 'matic@gmail.com', 0, NULL, 'Phot_de_profile/Default_pp.webp'),
(30, 'TESTE', 'teste', '0000', 'jenesuisplusteste@gmail.com', 0, NULL, 'Phot_de_profile/j.jpg'),
(31, 'awa', 'Niaye', '1234', 'asta@gmail.com', 0, NULL, 'Phot_de_profile/IMG-20200429-WA0018-1-1.jpg'),
(32, 'gabi', 'lynda', '1234', 'rrr@gmail.com', 0, NULL, 'Phot_de_profile/IMG-20200413-WA0034.jpg'),
(33, 'tchiongo', 'Hanara', '1234', 'hanara@gmail.com', 0, NULL, 'Phot_de_profile/');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `user_send` (`user_send`),
  ADD KEY `user_receive` (`user_receive`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_send`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`user_receive`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
