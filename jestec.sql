-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 05:43 PM
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
  `manuscriptStatus` set('Submitted','Accepted','Rejected','RevisionRequired') NOT NULL DEFAULT 'Submitted',
  `dateSubmitted` date NOT NULL DEFAULT current_timestamp(),
  `assignedEditor` set('Editor1','Editor2','Editor3') NOT NULL,
  `assignedReviewer` set('Reviewer1','Reviewer2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manuscripts`
--

INSERT INTO `manuscripts` (`idManuscript`, `firstName`, `lastName`, `authorsEmail`, `affiliation`, `title`, `manuscriptTitle`, `abstract`, `keywords`, `track`, `manuscriptStatus`, `dateSubmitted`, `assignedEditor`, `assignedReviewer`) VALUES
(9, 'Yazid', 'Zaini', '', 'Taylors University', 'Mr.', 'Intro to JQuery', 'abstract', 'keywords', 'Computing/IT', 'Rejected', '2020-11-27', '', ''),
(10, 'Jacky', 'Yap', '', 'Taylors University', 'Mr.', 'MySQL for Dummies', 'abstract', 'keywords', 'Computing/IT', 'RevisionRequired', '2020-11-27', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `idMessage` int(11) NOT NULL,
  `sender` varchar(64) DEFAULT NULL,
  `recipient` varchar(64) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idMessage`);

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
  MODIFY `idManuscript` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `idMessage` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
