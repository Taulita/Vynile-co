-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Jeu 07 Août 2014 à 21:29
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `vinyle-co`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(134) NOT NULL,
  `name` varchar(134) NOT NULL,
  `firstname` varchar(132) NOT NULL,
  `password` varchar(32) NOT NULL,
  `birthdate` date NOT NULL,
  `address` varchar(132) NOT NULL,
  `codePostal` varchar(5) NOT NULL,
  `ville` varchar(132) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `t_user`
--

INSERT INTO `t_user` (`id`, `email`, `name`, `firstname`, `password`, `birthdate`, `address`, `codePostal`, `ville`, `admin`) VALUES
(1, 'admin@admin.fr', 'Admin', '', '121542046ad3fb8d3f163d2987a92e02', '0000-00-00', '', '', '', 1),
(2, 'taulita82@gmail.com', 'Taulita', '', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00', '', '', '', 0),
(3, 'john@mac.fr', 'John', '', '6531401f9a6807306651b87e44c05751', '0000-00-00', '', '', '', 0);
