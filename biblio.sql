-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2023 at 05:24 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `biblio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) default NULL,
  `password` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'adminLibririan@gmail.com', 'Lb2019ca');

-- --------------------------------------------------------

--
-- Table structure for table `genrelivre`
--

CREATE TABLE `genrelivre` (
  `id` int(5) NOT NULL auto_increment,
  `genre` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `genrelivre`
--

INSERT INTO `genrelivre` (`id`, `genre`) VALUES
(13, 'Théâtral'),
(14, 'fiction'),
(16, 'Nouvelle'),
(17, 'Autoubiographie');

-- --------------------------------------------------------

--
-- Table structure for table `languelivre`
--

CREATE TABLE `languelivre` (
  `id` int(5) NOT NULL auto_increment,
  `langue` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `languelivre`
--

INSERT INTO `languelivre` (`id`, `langue`) VALUES
(9, 'français'),
(10, 'Anglais'),
(11, 'Arabe');

-- --------------------------------------------------------

--
-- Table structure for table `livre`
--

CREATE TABLE `livre` (
  `num_livre` int(5) NOT NULL auto_increment,
  `nom` varchar(30) NOT NULL,
  PRIMARY KEY  (`num_livre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `livre`
--

INSERT INTO `livre` (`num_livre`, `nom`) VALUES
(17, 'Boite a mervielle'),
(20, 'Aux champs'),
(21, 'Le bourgeois gentilhomme'),
(22, 'La ficelle'),
(37, 'HTML');

-- --------------------------------------------------------

--
-- Table structure for table `locataire`
--

CREATE TABLE `locataire` (
  `Num_locataire` int(11) NOT NULL auto_increment,
  `prenom` varchar(30) NOT NULL,
  `mot_de_pass` varchar(40) NOT NULL,
  PRIMARY KEY  (`Num_locataire`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `locataire`
--

INSERT INTO `locataire` (`Num_locataire`, `prenom`, `mot_de_pass`) VALUES
(19, 'Omar', 'amrani'),
(20, 'Salma', 'ait2000'),
(36, 'Hajar', 'levi'),
(37, 'kazuha', '12345'),
(38, 'hajar', 'levi');

-- --------------------------------------------------------

--
-- Table structure for table `louer`
--

CREATE TABLE `louer` (
  `id` int(5) NOT NULL auto_increment,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `num_tele` varchar(20) NOT NULL,
  `titre_livre` varchar(30) NOT NULL,
  `genre_livre` varchar(30) NOT NULL,
  `langue_livre` varchar(30) NOT NULL,
  `auteur_livre` varchar(35) NOT NULL,
  `date_parution` date NOT NULL,
  `lieu_parution` varchar(50) NOT NULL,
  `date_location` date NOT NULL,
  `date_retour` date NOT NULL,
  `image_user` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `louer`
--

INSERT INTO `louer` (`id`, `nom`, `prenom`, `adresse`, `num_tele`, `titre_livre`, `genre_livre`, `langue_livre`, `auteur_livre`, `date_parution`, `lieu_parution`, `date_location`, `date_retour`, `image_user`) VALUES
(22, 'El amrani', 'Omar', 'salé', '06010203', 'boîte à mérvielle', 'Autoubiographie', 'Français', 'Ahmed Sefrioui  ', '1954-03-25', 'France', '2018-05-05', '2018-07-02', 'téléchargement.jpg'),
(24, 'Ait youssef', 'Salma', 'kenitra ', '0601409078', 'La ficelle', 'Théâtral', 'Français', ' Jean Anouilh', '1944-02-06', 'France', '2019-08-20', '2019-09-23', 'images.jpg'),
(40, 'samra', 'Hajar', 'salé', '0605479512', 'HTML', 'gnr2', 'Anglais', 'victor hugo', '1234-05-07', 'france', '1598-02-01', '1598-01-01', 'Bienvenue.jpg'),
(44, 'Toyama', 'kazuha', 'RUE 153 NR 204 AFCA KENITRA', '0601409071', 'Boite a mervielle', 'Autoubiographie', 'français', 'someone', '2023-03-07', 'kenitra', '2023-04-03', '2023-04-05', 'Employes-lg.png'),
(45, 'momin', 'hajar', '//////////////////', '060412192', 'Aux champs', 'Théâtral', 'Anglais', 'someone', '2023-03-01', 'kenitra', '2023-03-26', '2023-04-08', 'téléchargement.jpg');
