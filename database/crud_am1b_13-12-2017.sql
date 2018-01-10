-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 13 dec 2017 om 15:18
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1b_2017_blok2_crud`
--
CREATE DATABASE IF NOT EXISTS `am1b_2017_blok2_crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1b_2017_blok2_crud`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(100) NOT NULL,
  `tussenvoegsel` varchar(20) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  `leeftijd` tinyint(3) unsigned NOT NULL,
  `schoenmaat` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `leeftijd`, `schoenmaat`) VALUES
(60, 'Arjan', 'd''n', 'Ruijter', 49, 45),
(62, 'Leo', 'van ''t', 'Veld', 51, 44),
(69, 'Rene', 'van ''t', 'Veld', 45, 44),
(70, 'Rene', 'van ''t', 'Veld', 51, 44),
(71, 'C''mon', 'van ''t', 'Lam', 44, 34);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
