-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Novembre 2017 à 21:55
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mycart`
--
CREATE DATABASE IF NOT EXISTS `mycart` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mycart`;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `quantity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'chaussette rouge', 'une superbe chaussette à accrocher sur la cheminée', 9, 10, '2017-11-01 17:30:20', '2017-11-08 09:29:58', NULL),
(2, 'guirlande électrique', 'une superbe guirlande électrique pour illuminer son sapin', 49, 20, '2017-11-01 18:16:50', '2017-11-08 09:30:56', NULL),
(3, 'papier cadeau', 'un superbe papier pour emballer vos cadeaux de noël', 9, 50, '2017-11-01 18:18:14', '2017-11-08 09:30:56', NULL),
(4, 'ruban de couleur', 'un superbe ruban coloré pour décorer vos paquets cadeaux', 9, 40, '2017-11-01 18:19:54', '2017-11-08 09:30:56', NULL),
(5, 'lait de poule', 'un lait de poule dosé juste comme il faut pour picoler discrètement pendant le réveillon', 19, 100, '2017-11-08 15:43:07', '2017-11-08 15:43:07', NULL);

-- --------------------------------------------------------

--
-- Index pour les tables exportées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
