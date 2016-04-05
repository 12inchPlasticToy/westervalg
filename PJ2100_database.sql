-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3307
-- Generation Time: Apr 05, 2016 at 09:08 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marcle15`
--
CREATE DATABASE IF NOT EXISTS `marcle15` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `marcle15`;

-- --------------------------------------------------------

--
-- Table structure for table `utvalg_kategori`
--

DROP TABLE IF EXISTS `utvalg_kategori`;
CREATE TABLE IF NOT EXISTS `utvalg_kategori` (
  `id_utvalg` int(11) NOT NULL DEFAULT '0',
  `id_kategori` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utvalg_kategori`
--

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
`ID` int(11) NOT NULL,
  `Kategori` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID`, `Kategori`) VALUES
(5, 'Baren'),
(4, 'Brett- og kortspill'),
(8, 'Fester'),
(9, 'Film'),
(15, 'For ansatte'),
(14, 'For studenter'),
(13, 'Friluftsliv'),
(1, 'Gaming'),
(7, 'Gründervirksomhet'),
(16, 'Improvisasjon'),
(2, 'IT'),
(11, 'Kunst'),
(3, 'Musikk'),
(10, 'Poesi'),
(18, 'Sport'),
(17, 'Teater');

-- --------------------------------------------------------

--
-- Table structure for table `utvalg`
--

DROP TABLE IF EXISTS `utvalg`;
CREATE TABLE IF NOT EXISTS `utvalg` (
`ID` int(11) NOT NULL,
  `Navn` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Beskrivelse` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Tags` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `utvalg`
--

INSERT INTO `utvalg` (`ID`, `Navn`, `Beskrivelse`, `Tags`) VALUES
(1, 'Sosialutvalget', 'Et utvalg for de som er interesserte i å skape et mer sosialt miljø på skolen. Det er vi som står for fester, filmkvelder, sommer og juleavslutninger og andre sosiale aktiviteter.', 'Fester, film, for studenter, for ansatte'),
(2, 'Prosjektutvalget for spill', 'Sitter du inne med en spillidé, og vil finne folk å lage spill med? Da er dette utvalget for deg! Prosjektutvalget for Spill har som mål å engasjere studenter til å bedrive spillutvikling utenfor klasserommet og på tvers av studieretningene på skolen.', 'Gaming, for studenter'),
(3, 'Gründerutvalget', 'Utvalget er en plattform for å lære om gründermiljøet i Oslo og Norge, møte personer som har vært gjennom det før, og bli kjent med studenter som brenner for det samme.', 'Gründervirksomhet, for studenter'),
(4, 'Kvinner i IT', 'Kvinner og IT er en forening for jenter som studerer IT på Westerdals Oslo ACT Campus Fjerdingen.', 'IT, for studenter, for ansatte'),
(5, 'Foreningen for spillkultur', 'Spill, LAN, D&D & more.', 'Gaming, brett- og kortspill, for studenter, for ansatte'),
(6, 'Musikkutvalget', 'Musikkutvalget er et utvalg for å fremme musikk og fremførelse. Vi arrangerer events for å skape glede og felleskap rundt temaet musikk, og har tidligere arrangert open jam night og quiz.', 'Musikk, for studenter, for ansatte'),
(7, 'Utviklingsutvalget', 'Utviklingsutvalget er et utvalg som tar for seg programmering og design av apper, nettsider, programmer, spill og lignende.', 'IT, for studenter'),
(8, '#fuBar', 'Studentpuben ved Westerdals.', 'Baren, fester, for studenter'),
(9, 'Netflix&Chill', 'Fredag annenhver uke samles vi i auditoriet og ser filmer på prosjektoren. Hvilken film vi ser avgjøres under avstemming når vi samles. Både nye og gamle filmer er med i avstemmingen. Velkommen til en koselig kino opplevelse med medstudenter og ansatte =)', 'Film, for studenter, for ansatte'),
(10, 'Poesiutvalget', 'Vær velkommen til poesiaften hver siste onsdag i måneden. Vi fremfører dikt og lytter til hverandres indre sjeler og kobles sammen av dyp poesi, en sann rens for hjerte og sjel. Bli med på en sjelfull aften. Velkommen skal du være.', 'Poesi, for studenter, for ansatte'),
(11, 'Bowlingutvalget', 'Etter en lang skolemåned finnes det vel ikke noe kulere å gjøre enn å bli med på en bowlingturnering! En rå gjeng treffes en gang i måneden og konkurrerer om å bli Westerdals bowling champion! Har du et skjult bowlingtalent? Ta kontakt!', 'Sport, for studenter, for ansatte'),
(12, 'Friluftsutvalget', 'Dette er et utvalg for både ansatte og studenter som er glad i skog og mark. Vi samles og går lange turer i felleskap, griller og koser oss. Superkoselig, superdigg og supergøy! Bli med :-D\r\n', 'Friluftsliv, for studenter, for ansatte'),
(13, 'Kunstutvalget', 'Er du over gjennomsnittet interessert i kunst og har en indre Picasso som skriker etter å komme ut? Vi deler tips, triks og gir hverandre råd til hvordan å komme i bedre kontakt med vår indre kunstner.', 'Kunst, for studenter, for ansatte'),
(14, 'Ansattutvalget', 'Utvalget for ansatte ved Westerdals der vi arrangerer sosiale sammenkomster utifra gruppemedlemmens ønsker. Tidligere har vi hatt Taco kvelder hos rektor og kinokvelder. Bli med på å styrke samholdet mellom ansatte!', 'For ansatte'),
(15, 'Teater og skuespill utvalget', 'Improvisasjonsaften for ren moro og sosialisering for deg som har interesse for teater og skuespill. ', 'Improvisasjon, teater, for studenter'),
(16, 'StayFit utvalget', 'En god treningsplan er bevist å ha positiv effekt på studier! Er du effektiv i gymmen, er det sannsynlig at studieinnsatsen er likedan. Så Stay Fit! Vi møtes, mingler, finner treningspartnere etter fitnessmål og deler kostholdstips og treningsråd.', 'Sport, for studenter'),
(17, 'SoulTrain utvalget', 'Digger du old school HipHop like mye som oss? Vi jammer til beats og rapper våre egne freestyle lyricser. Vi lager både egne beats i felleskap og chiller til de største HipHop sangene gjennom tidene. ', 'Musikk, improvisasjon, for studenter');

-- --------------------------------------------------------

INSERT INTO `utvalg_kategori` (`id_utvalg`, `id_kategori`) VALUES
(2, 1),
(5, 1),
(4, 2),
(7, 2),
(6, 3),
(17, 3),
(5, 4),
(8, 5),
(3, 7),
(1, 8),
(8, 8),
(1, 9),
(9, 9),
(10, 10),
(13, 11),
(12, 13),
(1, 14),
(2, 14),
(3, 14),
(4, 14),
(5, 14),
(6, 14),
(7, 14),
(8, 14),
(9, 14),
(10, 14),
(11, 14),
(12, 14),
(13, 14),
(15, 14),
(16, 14),
(17, 14),
(1, 15),
(4, 15),
(5, 15),
(6, 15),
(9, 15),
(10, 15),
(11, 15),
(12, 15),
(13, 15),
(14, 15),
(15, 16),
(17, 16),
(15, 17),
(11, 18),
(16, 18);

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
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `Navn` (`Navn`), ADD UNIQUE KEY `Logo` (`Beskrivelse`);

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
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `utvalg`
--
ALTER TABLE `utvalg`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
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
