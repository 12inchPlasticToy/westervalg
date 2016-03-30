-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Mar 30, 2016 at 10:50 AM
-- Server version: 5.5.41-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marcle15`
--
CREATE DATABASE IF NOT EXISTS `marcle15` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `marcle15`;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
`ID` int(11) NOT NULL,
  `Kategori` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID`, `Kategori`) VALUES
(5, 'Baren'),
(12, 'Bowling'),
(4, 'Brett- og kortspill'),
(10, 'Bøker'),
(8, 'Fester'),
(9, 'Film'),
(15, 'For ansatte'),
(14, 'For studenter'),
(1, 'Gaming'),
(7, 'Gründervirksomhet'),
(2, 'IT'),
(11, 'Kunst'),
(3, 'Musikk'),
(13, 'Utflukter'),
(6, 'Utvikling');

-- --------------------------------------------------------

--
-- Table structure for table `utvalg`
--

DROP TABLE IF EXISTS `utvalg`;
CREATE TABLE IF NOT EXISTS `utvalg` (
`ID` int(11) NOT NULL,
  `Navn` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `utvalg`
--

INSERT INTO `utvalg` (`ID`, `Navn`) VALUES
(8, '#fuBar'),
(14, 'Ansattutvalget'),
(10, 'Bokutvalget'),
(11, 'Bowlingutvalget'),
(9, 'Filmutvalget'),
(5, 'Foreningen for spillkultur'),
(3, 'Gründerutvalget'),
(13, 'Kunstutvalget'),
(4, 'Kvinner i IT'),
(6, 'Musikkutvalget'),
(2, 'Prosjektutvalget for spill'),
(1, 'Sosialutvalget'),
(12, 'Utfluktsutvalget'),
(7, 'Utviklingsutvalget');

-- --------------------------------------------------------

--
-- Table structure for table `utvalg_kategori`
--

DROP TABLE IF EXISTS `utvalg_kategori`;
CREATE TABLE IF NOT EXISTS `utvalg_kategori` (
  `id_utvalg` int(11) NOT NULL DEFAULT '0',
  `id_kategori` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utvalg_kategori`
--

INSERT INTO `utvalg_kategori` (`id_utvalg`, `id_kategori`) VALUES
(2, 1),
(5, 1),
(4, 2),
(7, 2),
(6, 3),
(12, 3),
(5, 4),
(8, 5),
(7, 6),
(3, 7),
(1, 8),
(8, 8),
(1, 9),
(9, 9),
(12, 9),
(10, 10),
(12, 11),
(13, 11),
(11, 12),
(12, 12),
(2, 13),
(4, 13),
(11, 13),
(12, 13),
(13, 13),
(14, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `Kategori` (`Kategori`);

--
-- Indexes for table `utvalg`
--
ALTER TABLE `utvalg`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `Navn` (`Navn`);

--
-- Indexes for table `utvalg_kategori`
--
ALTER TABLE `utvalg_kategori`
 ADD PRIMARY KEY (`id_utvalg`,`id_kategori`), ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `utvalg`
--
ALTER TABLE `utvalg`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `utvalg_kategori`
--
ALTER TABLE `utvalg_kategori`
ADD CONSTRAINT `utvalg_kategori_ibfk_1` FOREIGN KEY (`id_utvalg`) REFERENCES `utvalg` (`ID`),
ADD CONSTRAINT `utvalg_kategori_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;