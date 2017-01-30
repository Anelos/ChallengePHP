-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 30 Janvier 2017 à 22:26
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
-- Version de PHP :  7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Challenge`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `birthday` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `game` varchar(500) NOT NULL,
  `profil_image` varchar(100) DEFAULT NULL,
  `message` varchar(500) NOT NULL DEFAULT 'Pas de message',
  `newcontact` tinyint(1) NOT NULL DEFAULT '1',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `pseudo`, `first_name`, `birthday`, `email`, `game`, `profil_image`, `message`, `newcontact`, `date`) VALUES
(1, 'ljhbljhg', 'jhvgk', '23/11/2000', 'molihm.kjhg@khjg.fr', 'World of warcraft', 'profilImageID1.jpeg', 'blabla', 0, '2017-01-30 14:44:29'),
(3, 'ohuimoh', 'testmlkj', '23/11/2000', 'molihm.kjhg@khjg.fr', 'World', 'profilImageID3.jpg', 'blabla', 0, '2017-01-30 14:40:25');

-- --------------------------------------------------------

--
-- Structure de la table `graphicoptions`
--

CREATE TABLE `graphicoptions` (
  `id` int(11) NOT NULL,
  `titleColor` varchar(15) NOT NULL,
  `navbarColor` varchar(15) NOT NULL,
  `buttonColor` varchar(15) NOT NULL,
  `linkColor` varchar(15) NOT NULL,
  `titleFont` varchar(50) NOT NULL,
  `sliderArrows` tinyint(1) NOT NULL,
  `updateDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `snow` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `graphicoptions`
--

INSERT INTO `graphicoptions` (`id`, `titleColor`, `navbarColor`, `buttonColor`, `linkColor`, `titleFont`, `sliderArrows`, `updateDate`, `snow`) VALUES
(1, '117,255,166,0.6', '186,105,61,1', '182,139,100,1', '163,232,163,1', 'slabo', 1, '2017-01-29 22:03:04', 1),
(2, '117,255,166,0.6', '186,105,61,1', '182,199,174,1', '163,90,163,1', 'quicksand', 1, '2017-01-29 22:03:17', 1),
(3, '117,255,166,0.6', '186,172,166,1', '182,199,174,1', '163,90,163,1', 'quicksand', 1, '2017-01-30 09:01:50', 1),
(4, '130,138,255,1', '18,100,88,1', '182,199,174,1', '163,231,163,1', 'quicksand', 1, '2017-01-30 20:37:55', 0),
(5, '130,138,255,1', '94,100,88,1', '182,199,174,1', '163,231,163,1', 'quicksand', 1, '2017-01-30 21:23:40', 1),
(6, '200,255,100,0.6', '100,200,255,1', '182,139,100,1', '163,232,163,1', 'slabo', 1, '2017-01-29 19:24:13', 1),
(7, '200,255,100,0.6', '100,200,255,1', '182,139,100,1', '163,232,163,1', 'slabo', 1, '2017-01-29 19:30:20', 1),
(8, '200,255,100,0.6', '100,200,255,1', '182,139,100,1', '163,232,163,1', 'slabo', 1, '2017-01-29 19:50:52', 1),
(9, '200,255,100,0.6', '100,200,255,1', '182,139,100,1', '163,232,163,1', 'slabo', 1, '2017-01-29 20:55:34', 0),
(10, '200,255,100,0.6', '100,200,255,1', '182,139,100,1', '163,232,163,1', 'slabo', 1, '2017-01-29 21:12:16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `idGraph` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `idGraph`) VALUES
(1, 'Admin', 'admin', 5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `graphicoptions`
--
ALTER TABLE `graphicoptions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `graphicoptions`
--
ALTER TABLE `graphicoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
