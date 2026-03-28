-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 28 mars 2026 à 17:19
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `actes`
--

-- --------------------------------------------------------

--
-- Structure de la table `declaration`
--

DROP TABLE IF EXISTS `declaration`;
CREATE TABLE IF NOT EXISTS `declaration` (
  `id_declaration` int NOT NULL AUTO_INCREMENT,
  `nom_bebe` varchar(50) NOT NULL,
  `prenom_bebe` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `heure_naissance` time NOT NULL,
  `nom_pere` varchar(50) NOT NULL,
  `prenom_pere` varchar(50) NOT NULL,
  `date_naissance_pere` date NOT NULL,
  `profession_pere` varchar(50) NOT NULL,
  `nationalite_pere` varchar(50) NOT NULL,
  `nom_mere` varchar(50) NOT NULL,
  `prenom_mere` varchar(50) NOT NULL,
  `date_naissance_mere` date NOT NULL,
  `profession_mere` varchar(50) NOT NULL,
  `nationalite_mere` varchar(50) NOT NULL,
  `filiation` varchar(50) NOT NULL,
  `declarant` varchar(50) NOT NULL,
  `lien_enfant` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `quartier` varchar(50) NOT NULL,
  `centre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_declaration`)
) ENGINE=MyISAM AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `declaration`
--

INSERT INTO `declaration` (`id_declaration`, `nom_bebe`, `prenom_bebe`, `sexe`, `date_naissance`, `heure_naissance`, `nom_pere`, `prenom_pere`, `date_naissance_pere`, `profession_pere`, `nationalite_pere`, `nom_mere`, `prenom_mere`, `date_naissance_mere`, `profession_mere`, `nationalite_mere`, `filiation`, `declarant`, `lien_enfant`, `adresse`, `ville`, `quartier`, `centre`) VALUES
(66, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(63, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(64, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(65, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(60, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(61, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(62, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(57, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(58, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(59, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(56, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(55, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(54, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(53, 'diallo', 'mariame', 'M', '1000-01-19', '11:11:00', 'OJIGHY', 'GUGYF', '1000-01-30', 'JUGE', 'GUINNEENE', 'diallo', 'ramatoulaye', '2006-02-20', 'FEMME AU FOYER', 'femme foiye', 'MARIE', 'MARIAMA DIALLO', 'dixinn', 'liberte', 'conakry', 'THROYE', 'MACIRE'),
(51, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(52, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(47, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(48, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(49, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(50, 'sylla', 'nana', 'F', '2010-10-10', '10:00:00', 'sylla', 'amara', '1090-01-10', 'foctionaire', 'guinneen', 'diallo', 'mariame', '1920-02-20', 'femme foiye', 'GUINNEENNE', 'MARIE', 'oumou', 'tante', 'THAROYE', 'DAKAR', 'THAROYE', 'MACIRE'),
(46, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(45, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(44, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(42, 'diallo', 'mariame', 'F', '1000-01-19', '00:00:00', 'OJIGHY', 'GUGYF', '1000-01-30', 'JUGE', 'GUINNEENE', 'diallo', 'ramatoulaye', '2006-02-20', 'FEMME AU FOYER', 'femme foiye', 'MARIE', 'MARIAMA DIALLO', 'dixinn', 'liberte', 'conakry', 'THROYE', 'MACIRE'),
(41, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(40, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(29, 'diallo', 'mariame', 'F', '1999-01-01', '00:00:00', 'diallo', 'mariame', '2000-11-11', 'UDTT', 'GUINNEENE', 'diallo', 'mariame', '1999-11-11', 'FEMME AU FOYER', 'gienneenne', 'MARIE', 'liberte', 'LA MERE', 'liberte', 'conakry', 'THROYE', 'MACIRE'),
(30, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(32, 'diallo', 'mariame', 'F', '1999-01-01', '10:00:00', 'diallo', 'mariame', '2000-11-11', 'UDTT', 'GUINNEENE', 'diallo', 'sdd', '1999-11-11', 'FEMME AU FOYER', 'gienneenne', 'MARIE', 'liberte', 'LA MERE', 'liberte', 'conakry', 'THROYE', 'MACIRE'),
(34, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(35, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(36, '', '', 'M', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(37, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(38, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(39, 'diallo', 'mariame', 'F', '1000-01-19', '03:00:00', 'OJIGHY', 'GUGYF', '1000-01-30', 'JUGE', 'GUINNEENE', 'diallo', 'mariame', '0000-00-00', 'FEMME AU FOYER', 'femme foiye', 'MARIE', 'MARIAMA DIALLO', 'dixinn', 'liberte', 'conakry', 'THROYE', 'MACIRE'),
(67, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(68, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(69, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(70, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(71, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(72, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(73, 'diallo', 'mariame', 'M', '1000-01-19', '00:00:00', 'OJIGHY', 'GUGYF', '1000-01-30', 'JUGE', 'GUINNEENE', 'diallo', 'ramatoulaye', '2006-02-20', 'FEMME AU FOYER', 'femme foiye', 'MARIE', 'MARIAMA DIALLO', 'dixinn', 'liberte', 'conakry', 'THROYE', 'MACIRE'),
(74, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(75, 'diallo', 'mariame', 'M', '1000-01-19', '00:00:00', 'OJIGHY', 'GUGYF', '1000-01-30', 'JUGE', 'GUINNEENE', 'diallo', 'ramatoulaye', '2006-02-20', 'FEMME AU FOYER', 'femme foiye', 'MARIE', 'MARIAMA DIALLO', 'dixinn', 'liberte', 'conakry', 'THROYE', 'MACIRE'),
(76, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(77, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(78, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(79, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(80, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(81, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(82, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(83, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(84, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(85, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(86, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(87, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(88, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(89, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(90, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(91, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(92, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(93, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(94, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(95, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(96, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(97, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(98, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(99, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(100, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(101, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(102, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(103, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(104, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(105, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(106, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(107, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(108, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(109, 'diallo', 'mariame', 'F', '1999-05-31', '12:00:00', 'DIALLO', 'hf', '2000-11-11', 'foctionaire', 'guinneen', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(110, 'oumoud', 'diaalo', 'F', '1111-11-11', '11:11:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(111, 'oumoud', 'diaalo', 'F', '1111-11-11', '11:11:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(112, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(113, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(114, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(115, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(116, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(117, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(118, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(119, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(120, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(121, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(122, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(123, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(124, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(125, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(126, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(127, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(128, 'oumoud', 'diaalo', 'M', '1111-11-11', '11:01:00', 'ddalaba', 'qwww', '1111-11-11', 'ssss', 'GUINNEENE', 'diallo', 'mariame', '2008-01-20', 'FEMME AU FOYER', 'gienneenne', 'oumou', 'MARIAMA DIALLO', 'pere', 'liberte', 'conakry', 'THAROYE', 'CTY'),
(129, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(130, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(131, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(132, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(133, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', ''),
(134, '', '', '', '0000-00-00', '00:00:00', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id_demande` int NOT NULL AUTO_INCREMENT,
  `id_declaration` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `nom_pere` varchar(50) NOT NULL,
  `prenom_pere` varchar(50) NOT NULL,
  `nom_mere` varchar(50) NOT NULL,
  `prenom_mere` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_demande` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `statut` enum('en ettente','valide','rejetée') NOT NULL DEFAULT 'en ettente',
  PRIMARY KEY (`id_demande`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`id_demande`, `id_declaration`, `nom`, `prenom`, `sexe`, `telephone`, `date_naissance`, `nom_pere`, `prenom_pere`, `nom_mere`, `prenom_mere`, `email`, `date_demande`, `statut`) VALUES
(21, 0, 'dallo', 'mariame', 'M', '789690557', '2000-06-02', 'diallo', 'mariame', 'OJIGHY', 'OJIGHY', 'diallooumou627@icloud.com', '2026-03-23 20:11:04', 'rejetée'),
(24, 53, 'diallo', 'mariame', 'M', '789690557', '1000-01-19', 'OJIGHY', 'GUGYF', 'diallo', 'ramatoulaye', 'diallooumou627@icloud.com', '2026-03-25 22:09:02', ''),
(18, 0, '', '', 'M', '', '0000-00-00', '', '', '', '', '', '2026-03-23 19:46:52', 'en ettente'),
(25, 53, 'diallo ', 'mariame', 'M', '789690557', '1000-01-19', 'OJIGHY', 'GUGYF', 'diallo', 'Ramatoulaye', 'diallooumou627@icloud.com', '2026-03-25 22:21:18', ''),
(22, 39, 'diallo', 'mariame', 'F', '789690557', '1000-01-19', 'OJIGHY', 'GUGYF', 'diallo', 'mariame', 'diallooumou627@icloud.com', '2026-03-23 20:40:21', ''),
(23, 42, 'diallo', 'mariame', 'F', '765268994', '1000-01-19', 'OJIGHY', 'GUGYF', 'diallo', 'Ramatoulaye', 'diallooumou627@icloud.com', '2026-03-23 21:59:07', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
