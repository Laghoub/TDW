-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Mars 2021 à 07:31
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `tdw`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `cycle` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `date_creation` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `nom`, `description`, `cycle`, `image`, `date_creation`) VALUES
(42, 'Data Science', 'termes généraux, la science des données est l''extraction de connaissance <b>this is bold</b>', 'Moyen', 'data.png', '2021-02-21 21:34:05'),
(50, 'La relativité générale', 'Des deux théories de la relativité découlent deux conclusions révolutionnaires qui sont toujours valables à ce jour. La première est que l’espace et le temps sont liés, on dit que le temps forme la quatrième dimension. La seconde est que l’un et l’autre sont relatifs. C’est-à-dire que l’espace et le temps ne sont pas absolus et peuvent être déformés. En ce sens, l’équation d’Einstein implique que la gravitation ne soit plus considérée comme une force s’exerçant à distance, mais comme une propriété géométrique de l’espace-temps lui-même.\n\nIl est souvent répété que cette théorie a révolutionné notre compréhension de l’univers et de la gravité. Mais cette révolution ne s’est pas arrêtée au cercle des physiciens et a donné naissance à plusieurs applications concrètes, utilisées quotidiennement.\n\n1. Le GPS\nLe GPS, ou Global Positioning System, est probablement l’application la plus connue de la relativité d’Einstein. Le GPS utilise une constellation de 32 satellites couvrant la totalité de la surface du globe. Ces satellites orbitent autour de la Terre à 20 200 kilomètres d’altitude, à une vitesse d’environ 14 000 km/h, pour calculer plusieurs centaines de millions de positions au sol chaque jour. Mais tout cela ne serait pas possible sans tenir compte des effets de la relativité.', 'Moyen', 'einstein.png', '2021-02-23 21:21:47'),
(55, 'Big data', 'L’explosion quantitative des données numériques a obligé les chercheurs à trouver de nouvelles manières de voir et d’analyser le monde. Il s’agit de découvrir de nouveaux ordres de grandeur concernant la capture, la recherche, le partage, le stockage, l’analyse et la présentation des données. Ainsi est né le « Big Data ». Il s’agit d’un concept permettant de stocker un nombre indicible d’informations sur une base numérique. Selon les archives de la bibliothèque numérique de l’Association for Computing Machinery (ou ACM) dans des articles scientifiques concernant les défis technologiques à relever pour visualiser les « grands ensembles de données », cette appellation est apparue en octobre 1997.', 'Secondaire', 'bigdata.jpg', '2021-03-13 03:15:40'),
(56, 'Relativité ', 'La relativité restreinte énonce que si un objet A d''une longueur d''un mètre', 'Primaire', 'einstein.png', '2021-03-13 08:42:46'),
(57, 'Data Science', 'un grand école il a 20 salles de classe les toilettes se situent à coté du terrain de foot mais ils sont trés propre,les salles de classes sont grandes mais les éléves se comportent comme des grand personne mais ausssi c''est normale par ce ke c''est un collége mais il y''a aussi des professeurs un peut sévaire', 'Primaire', 'data.png', '2021-03-13 08:43:18'),
(58, 'Big data', 'La Data Science est la science des données. C’est la discipline qui permet à une entreprise d’explorer et d’analyser les données brutes pour les transformer en informations précieuses permettant de résoudre les problèmes de l’entreprise. Découvrez la définition précise du terme de Data Science, ainsi qu’un aperçu des compétences nécessaires pour devenir Data Scientist.', 'Moyen', 'data.png', '2021-03-13 08:43:36'),
(59, 'La relativité générale', 'La relativité restreinte énonce que si un objet A d''une longueur d''un mètre', 'Moyen', 'einstein.png', '2021-03-13 08:43:54'),
(60, 'Data Science', 'En termes généraux, la science des données est l''extraction de connaissance', 'Secondaire', 'einstein.png', '2021-03-13 08:44:20');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `id_classe` int(10) NOT NULL,
  `niveau` int(10) NOT NULL,
  `id_cycle` int(10) NOT NULL,
  PRIMARY KEY (`id_classe`,`niveau`,`id_cycle`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `niveau`, `id_cycle`) VALUES
(1, 1, 1),
(1, 2, 1),
(2, 1, 1),
(2, 2, 1),
(3, 1, 1),
(4, 1, 1),
(1, 1, 2),
(1, 2, 2),
(2, 1, 2),
(2, 2, 2),
(1, 1, 3),
(1, 2, 3),
(1, 3, 3),
(2, 1, 3),
(2, 2, 3),
(7, 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `adr` varchar(256) NOT NULL,
  `fax` varchar(256) NOT NULL,
  `tel` varchar(256) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`adr`, `fax`, `tel`, `mail`, `id`) VALUES
(' Embley Park, West Wellow, Romsey SO51 6ZE, Royaume-Uni', '+(021) 43 30 04', '+(213) 555 43 30 04', 'EmbleyparkSchool@gmail.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `cycle`
--

CREATE TABLE IF NOT EXISTS `cycle` (
  `id_cycle` int(10) NOT NULL,
  `nom` varchar(256) NOT NULL,
  PRIMARY KEY (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cycle`
--

INSERT INTO `cycle` (`id_cycle`, `nom`) VALUES
(1, 'Primaire'),
(2, 'Moyen'),
(3, 'Secondaire');

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

CREATE TABLE IF NOT EXISTS `emploi` (
  `classe_id` varchar(256) NOT NULL,
  `id_jour` int(10) NOT NULL,
  `hor1` varchar(256) NOT NULL,
  `hor2` varchar(256) NOT NULL,
  `hor3` varchar(256) NOT NULL,
  `hor4` varchar(256) NOT NULL,
  `hor5` varchar(256) NOT NULL,
  `hor6` varchar(256) NOT NULL,
  `hor7` varchar(256) NOT NULL,
  PRIMARY KEY (`classe_id`,`id_jour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `emploi`
--

INSERT INTO `emploi` (`classe_id`, `id_jour`, `hor1`, `hor2`, `hor3`, `hor4`, `hor5`, `hor6`, `hor7`) VALUES
('1M1', 1, 'Math', 'Math', 'Science', 'Français', 'Physique', 'Histoire', 'Sport'),
('1M1', 2, 'Math', 'Math', 'Science', 'Français', 'Physique', 'Histoire', 'Sport'),
('1M2', 1, 'Science', 'Physique', 'Science', 'Français', 'Français', 'Histoire', 'Sport'),
('1M2', 2, 'Physique', 'Anglais', 'Science', 'Français', 'Physique', 'Arabe', 'Sport'),
('1P1', 1, 'Anglais', 'Anglais', 'Math', 'Math', 'Français', 'Histoire', 'Sport'),
('1P1', 2, 'Math', 'Math', 'Science', 'Français', 'Français', 'Arabe', 'Sport'),
('1P1', 3, 'Education', 'Math', 'Math', 'Français', 'Français', 'Histoire', 'Sport'),
('1P1', 4, 'Physique', 'Français', 'Arabe', 'Anglais', 'Math', 'Physique', 'Musique'),
('1P2', 1, 'Math', 'Math', 'Arabe', 'Français', 'Français', 'Histoire', 'Sport'),
('1P2', 2, 'Science', 'Math', 'Arabe', 'Français', 'Physique', 'Physique', 'Sport'),
('1P3', 1, 'Physique', 'Physique', 'Science', 'Science', 'Math', 'Arabe', 'Sport'),
('1S1', 1, 'Math', 'Math', 'Arabe', 'Français', 'Physique', 'Histoire', 'Sport'),
('2M1', 1, 'Education', 'Anglais', 'Arabe', 'Français', 'Musique  ', 'Arabe', 'Sport'),
('2M1', 2, 'Education', 'Anglais', 'Science', 'Science', 'Musique  ', 'Histoire', 'Sport'),
('2M2', 1, 'Dessin', 'Math', 'Math', 'Français', 'Physique', 'Arabe', 'Sport'),
('2M2', 2, 'Anglais', 'Anglais', 'Français', 'Math', 'Physique', 'Histoire', 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE IF NOT EXISTS `enseignant` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(256) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `tel1` varchar(256) NOT NULL,
  `tel2` varchar(256) NOT NULL,
  `tel3` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `matiere` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `login`, `mdp`, `nom`, `prenom`, `adresse`, `tel1`, `tel2`, `tel3`, `email`, `matiere`) VALUES
(4, 'b_chergou', 'azerty', 'chergou ', 'Badretammam', 'Harrache', '0555433004', '0555433004', '0555433004', 'b_chergou@esi.dz', 'Algo'),
(6, 'h_mokkedem', 'mkdm', 'Mokeddem', 'Hakim', 'Alger', '0555433004', '0555433004', '0534526353', 'h_mokeddem@esi.dz', 'OGL'),
(7, 'm_koudil', 'azerty', 'Koudil', 'Mouloud', 'Hydra', '0555433004', '0555433004', '0534526353', 'm_koudil@esi.dz', 'Archi'),
(8, 'h_dellys', 'azerty', 'Dellys', 'Hachemi', 'Alger', '0555433004', '0534534353', '0555433004', 'h_dellys@esi.dz', 'TDW'),
(9, 'l_hamdad', 'azerty', 'Hamdad', 'Leila', 'Alger', '0555433004', '0534534353', '0555433004', 'l_hamdad@esi.dz', 'ANAD'),
(10, 's_hassini', 'azerty', 'Hassini', 'Sabrina', 'Alger', '0555433004', '0555433004', '0555433004', 's_hassini@esi.dz', 'IHM');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE IF NOT EXISTS `etudiants` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(256) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `tel1` varchar(256) NOT NULL,
  `tel2` varchar(256) NOT NULL,
  `tel3` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `classe` varchar(256) NOT NULL,
  `login_p` varchar(256) NOT NULL,
  PRIMARY KEY (`id`,`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `login`, `mdp`, `nom`, `prenom`, `date_naissance`, `adresse`, `tel1`, `tel2`, `tel3`, `email`, `classe`, `login_p`) VALUES
(4, 'hn_laghoub', 'azerty', 'LAGHOUB', 'Nassim', '0000-00-00', 'Alger', '0555433004', '0555433004', '0534526353', 'hn_laghoub@esi.dz', '1P1', 'hk_laghoub'),
(6, 'hm_assenine', 'azerty', 'Assenine', 'Sami', '1999-01-06', 'Blida', '0555433004', '0534534353', '0555433004', 'hm_assenine@esi.dz', '1P2', 'hk_laghoub');

-- --------------------------------------------------------

--
-- Structure de la table `gestens`
--

CREATE TABLE IF NOT EXISTS `gestens` (
  `login` varchar(256) NOT NULL,
  `classe` varchar(256) NOT NULL,
  `id_jour` varchar(256) NOT NULL,
  `horaire` varchar(256) NOT NULL,
  PRIMARY KEY (`classe`,`id_jour`,`horaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `gestens`
--

INSERT INTO `gestens` (`login`, `classe`, `id_jour`, `horaire`) VALUES
('b_chergou', '1M1', 'Lundi', '10h-11h'),
('m_koudil', '1M2', 'Jeudi', '8h-9h'),
('h_mokkedem', '1P1', 'Dimanche', '11h-12h'),
('b_chergou', '1P1', 'Dimanche', '8h-9h'),
('b_chergou', '1P2', 'Dimanche', '9h-10h'),
('l_hamdad', '1P3', 'Dimanche', '8h-9h'),
('h_mokkedem', '1S1', 'Lundi', '8h-9h'),
('b_chergou', '1S1', 'Mardi', '13h-14h'),
('b_chergou', '1S2', 'Mardi', '15h-16h'),
('h_dellys', '2M1', 'Dimanche', '8h-9h'),
('l_hamdad', '2M1', 'Lundi', '13h-14h'),
('s_hassini', '2M1', 'Mercredi', '10h-11h'),
('m_koudil', '2M2', 'Mardi', '8h-9h'),
('h_mokkedem', '2P1', 'Lundi', '11h-12h'),
('m_koudil', '2P2', 'Dimanche', '15h-16h'),
('s_hassini', '2S1', 'Dimanche', '13h-14h'),
('s_hassini', '2S1', 'Mardi', '14h-15h'),
('l_hamdad', '2S1', 'Mercredi', '11h-12h'),
('h_dellys', '2S2', 'Dimanche', '9h-10h'),
('b_chergou', '2S2', 'Jeudi', '9h-10h'),
('l_hamdad', '2S2', 'Mardi', '15h-16h'),
('s_hassini', '2S2', 'Mercredi', '13h-14h'),
('l_hamdad', '2S2', 'Mercredi', '14h-15h'),
('h_dellys', '3S1', 'Jeudi', '10h-11h'),
('m_koudil', '3S1', 'Mardi', '13h-14h'),
('h_mokkedem', '3S1', 'Mardi', '9h-10h'),
('h_dellys', '3S7', 'Mercredi', '13h-14h');

-- --------------------------------------------------------

--
-- Structure de la table `heuresreception`
--

CREATE TABLE IF NOT EXISTS `heuresreception` (
  `login` varchar(256) NOT NULL,
  `id_jour` varchar(256) NOT NULL,
  `heure` time(6) NOT NULL,
  PRIMARY KEY (`id_jour`,`heure`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `heuresreception`
--

INSERT INTO `heuresreception` (`login`, `id_jour`, `heure`) VALUES
('b_chergou', 'Dimanche', '13:00:00.000000'),
('m_koudil', 'Dimanche', '14:00:00.000000'),
('h_dellys', 'Jeudi', '08:00:00.000000'),
('b_chergou', 'Jeudi', '10:00:00.000000'),
('s_hassini', 'Jeudi', '12:30:00.000000'),
('h_dellys', 'Mardi', '13:00:00.000000'),
('h_mokkedem', 'Mardi', '15:00:00.000000'),
('l_hamdad', 'Mercredi', '12:00:00.000000');

-- --------------------------------------------------------

--
-- Structure de la table `jours`
--

CREATE TABLE IF NOT EXISTS `jours` (
  `id_jour` int(10) NOT NULL,
  `jour` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jour`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jours`
--

INSERT INTO `jours` (`id_jour`, `jour`) VALUES
(1, 'Dimanche'),
(2, 'Lundi'),
(3, 'Mardi'),
(4, 'Mercredi'),
(5, 'Jeudi');

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE IF NOT EXISTS `notes` (
  `login` varchar(256) NOT NULL,
  `matiere` varchar(256) NOT NULL,
  `ci` varchar(256) NOT NULL,
  `cc` varchar(256) NOT NULL,
  `cf` varchar(256) NOT NULL,
  `remarque` varchar(256) NOT NULL,
  PRIMARY KEY (`login`,`matiere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`login`, `matiere`, `ci`, `cc`, `cf`, `remarque`) VALUES
('hm_assenine', 'Anglais', '10', '5', '4', 'Insuffisant'),
('hm_assenine', 'Arabe', '10', '3', '4', 'Mal travail'),
('hm_assenine', 'Français', '9', '8', '6', 'Insuffisant'),
('hm_assenine', 'Math', '9', '10', '8', 'Mal travail'),
('hm_assenine', 'Physique', '10', '10', '10', 'Passable'),
('hm_assenine', 'Science', '10', '9', '8', 'insuffisant'),
('hm_assenine', 'Sport', '11', '11', '12', 'Passable'),
('hn_laghoub', 'Anglais', '12', '11', '9', 'Passable'),
('hn_laghoub', 'Arabe', '14', '15', '18', 'Bien'),
('hn_laghoub', 'Français', '17', '18', '19', 'Excellent'),
('hn_laghoub', 'Math', '15', '16', '18', 'Bien'),
('hn_laghoub', 'Physique', '16', '17', '18', 'Excellent'),
('hn_laghoub', 'Science', '13', '15', '13', 'A.bien'),
('hn_laghoub', 'Sport', '15', '16', '15', 'Bien');

-- --------------------------------------------------------

--
-- Structure de la table `parents`
--

CREATE TABLE IF NOT EXISTS `parents` (
  `login` varchar(256) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenomp` varchar(256) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `tel1` varchar(256) NOT NULL,
  `tel2` varchar(256) NOT NULL,
  `tel3` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `parents`
--

INSERT INTO `parents` (`login`, `mdp`, `nom`, `prenomp`, `date_naissance`, `adresse`, `tel1`, `tel2`, `tel3`, `email`) VALUES
('hk_laghoub', 'azerty', 'Laghoub', 'Karim', '1972-01-06', 'Alger', '0555433004', '0555433004', '0534526353', 'karimlaghoub@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE IF NOT EXISTS `presentation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `presentation`
--

INSERT INTO `presentation` (`id`, `titre`, `description`, `image`) VALUES
(2, 'Mon école', 'Mon école s’appelle Michel de Montaigne. La cour est très grande. Dans la cour, il y a des arbres, deux marelles, un terrain de jardinage et un terrain de foot. Dans l’école, il y a 6 classes. Dans ma classe, il y a 15 élèves (7 CP et 8 CE1). Il y a aussi les clés. Il y a 5 clés. Si je ne travaille pas, je perds la clé du travail. Au coin lecture, on fait le centième jour. Le centième jour, c’est quand on attend le centième jour d’école.\nLudivine\n\nMon école s’appelle école Michel de Montaigne.', 'school2.jpg'),
(3, 'Mon école', 'un grand école il a 20 salles de classe les toilettes se situent à coté du terrain de foot mais ils sont trés propre,les salles de classes sont grandes mais les éléves se comportent comme des grand personne mais ausssi c''est normale par ce ke c''est un collége mais il y''a aussi des professeurs un peut sévaire', 'school3.jpg'),
(4, 'Mon école', 'un grand école il a 20 salles de classe les toilettes se situent à coté du terrain de foot mais ils sont trés propre,les salles de classes sont grandes mais les éléves se comportent comme des grand personne mais ausssi c''est normale par ce ke c''est un collége mais il y''a aussi des professeurs un peut sévaire', 'school3.jpg'),
(5, 'my school', 'En termes généraux, la science des données est l''extraction de connaissance', 'contact.png');

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE IF NOT EXISTS `repas` (
  `id` int(10) NOT NULL,
  `plat_principale` varchar(256) NOT NULL,
  `plat_secondaire` varchar(256) NOT NULL,
  `dessert` varchar(256) NOT NULL,
  `boisson` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `repas`
--

INSERT INTO `repas` (`id`, `plat_principale`, `plat_secondaire`, `dessert`, `boisson`) VALUES
(1, 'Carbonnade', 'Crème de panais', 'Pomme', 'hhjbhjb'),
(2, 'Carbonnade', 'Crème de panais', 'Pomme', 'CocaCola'),
(3, 'Carbonnade', 'Crème de panais', 'Pomme', 'CocaCola');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `tel1` varchar(256) NOT NULL,
  `tel2` varchar(256) NOT NULL,
  `tel3` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  PRIMARY KEY (`id`,`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `mdp`, `nom`, `prenom`, `adresse`, `tel1`, `tel2`, `tel3`, `email`) VALUES
(4, 'admin', 'admin', 'Laghoub', 'Karim', 'Alger', '0555433004', '0555433004', '0534526353', 'karimlaghoub@gmail.com'),
(6, 'rf_frada', 'bsjbcsj', 'Kamel', 'Frada', 'Alger', '0555433004', '0555433004', '0534526353', 'kf_frada@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
