-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 04:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jestec`
--

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `title` int(11) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manuscripts`
--

CREATE TABLE `manuscripts` (
  `idManuscript` int(11) NOT NULL,
  `firstName` tinytext NOT NULL,
  `lastName` tinytext NOT NULL,
  `authorsEmail` tinytext NOT NULL,
  `affiliation` tinytext NOT NULL,
  `title` tinytext NOT NULL,
  `manuscriptTitle` tinytext NOT NULL,
  `abstract` longtext NOT NULL,
  `keywords` varchar(64) NOT NULL,
  `track` set('Engineering','Science','Computing/IT') NOT NULL,
  `manuscriptStatus` set('Submitted','Accepted','Declined','RevisionRequired') NOT NULL,
  `dateSubmitted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manuscripts`
--

INSERT INTO `manuscripts` (`idManuscript`, `firstName`, `lastName`, `authorsEmail`, `affiliation`, `title`, `manuscriptTitle`, `abstract`, `keywords`, `track`, `manuscriptStatus`, `dateSubmitted`) VALUES
(8, 'Fauzi', 'Lee', '', 'Taylors University', 'Mr.', 'Bootstrap 101', 'abstract', 'keywords', 'Computing/IT', 'Submitted', '2020-11-27'),
(9, 'Yazid', 'Zaini', '', 'Taylors University', 'Mr.', 'Intro to JQuery', 'abstract', 'keywords', 'Computing/IT', 'Submitted', '2020-11-27'),
(10, 'Jacky', 'Yap', '', 'Taylors University', 'Mr.', 'MySQL for Dummies', 'abstract', 'keywords', 'Computing/IT', 'Submitted', '2020-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `usersUid` tinytext NOT NULL,
  `usersEmail` tinytext NOT NULL,
  `usersPwd` longtext NOT NULL,
  `token` varchar(20) DEFAULT NULL,
  `tokenExpire` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manuscripts`
--
ALTER TABLE `manuscripts`
  ADD PRIMARY KEY (`idManuscript`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manuscripts`
--
ALTER TABLE `manuscripts`
  MODIFY `idManuscript` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
