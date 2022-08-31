-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 29 août 2022 à 10:09
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'e9c135d566c55ac85595b8b0d503b116');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `cour_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `contenue` longtext NOT NULL,
  `dttm` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`cour_id`, `title`, `image`, `contenue`, `dttm`, `user_id`) VALUES
(11, 'Developer training: Learn how to code in Python, Java, PHP and more at your own pace1', '16617389271661167125Logo.png', 'If you\'ve always thought that learning to code was beyond you, check out the affordable Complete 2021 Superstar Backend Developer Bundle, which can train you in some of the most popular programming languages. No experience is required, and you can learn at your own pace in the convenience of your home. \r\n\r\nYou can start with HTML5 CSS3 JQUERY Single-Page Website Project from Scratch to build your own website. Then move on to Java Basics: Learn To Code The Right Way and Functional Programming in JavaScript to gain expertise in one of the most common programming languages.\r\n\r\nThe Ruby on Rails for Web Development class is a fast and easy way to learn this popular way of coding. The Introduction to Ruby Programming course will teach you this easy and fun language. Learn another crowd favorite with Master the Fundamentals of Python and Python Programming For Everyone.                   \r\n\r\nNow you can move on to learning PHP skills, which are always in very high demand. A fast and easy way to begin would be with the PHP Programming For Everyone class. Then dive deeper with PHP Development & Predefined Variables, AJAX Connection to MySQL PHP API, and JSON AJAX Data Transfer to MySQL Database Using PHP.\r\n\r\nStart training for a high-demand position in the tech industry today by taking advantage of the 98% discount off the usual $2,587 price of The Complete 2021 Superstar Backend Developer Bundle, and buy it today for only $39.99.', '2022-08-29 03:08:47', 0),
(12, 'Comparing Careers in Tech: Coding vs. Programmingaaa', '16617389451661167799Logo2.png', 'In the early days of computing, programmer and coder referred to the same job: someone who could command a computer to do things. However, the business world has redefined the two fields, separating programmers and coders. Both are necessary in any company interested in application development, and businesses that maintain custom-coded apps are key employers. So, where does the split of coding vs. programming stem from?\r\n\r\nProgrammers discussing code.\r\n\r\nWhat Is Coding?\r\nCoding is the art of writing computer code that will compile and run to produce a desired output if given a valid input. Coders might be involved in directly using computer languages but might also use other structures, such as HTML or CSS. They put code into compilers and are responsible for producing scripts that can perform a given task.\r\n\r\nCoders usually know a number of different languages and can port code between them. A coder can recode an innovation developed in an uncommon or outdated language into something that can be added to contemporary languages. Since application development usually depends heavily on reusable code, this skill is priceless to the industry. Additionally, knowing many different languages allows a coder to see flaws in a particular language and determine how to make a process more efficien', '2022-08-29 03:09:05', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `role`) VALUES
(4, 'eyaaa', 'qsdaz', 'User'),
(5, 'abdou', 'ben othemn', 'admin'),
(6, 'aze', 'aze', 'Admin'),
(7, 'aziz', 'naes', 'Admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`cour_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `cour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
