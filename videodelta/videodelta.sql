-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 01, 2017 alle 15:02
-- Versione del server: 10.1.25-MariaDB
-- Versione PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videodelta`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `cartoni_animati`
--

CREATE TABLE `cartoni_animati` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `immagine` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `cartoni_animati`
--

INSERT INTO `cartoni_animati` (`id`, `nome`, `immagine`) VALUES
(1, 'Allegra\'s Window', 'allegra.png'),
(2, 'Ben & Holly\'s Little Kingdom', 'ben.png'),
(3, 'Bert & Ernie', 'bert.png'),
(4, 'Billy: un amico fantasmico', 'billy.png'),
(5, 'Elmo\'s World', 'elmo.png'),
(6, 'Gravity Falls', 'gravity.png'),
(7, 'Super Grover 2.0', 'grover.png'),
(8, 'The Gruffalo', 'gruffalo.png'),
(9, 'Sesame Street', 'sesame1.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `immagine` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `film`
--

INSERT INTO `film` (`id`, `nome`, `immagine`) VALUES
(1, 'Carriers', 'carriers.png'),
(2, 'Hats Off to Christmas!', 'hats.png'),
(3, 'Love at the Thanksgiving Day Parade', 'love.png'),
(4, 'The Makeover', 'makeover.png'),
(5, 'Puppy Love', 'puppy.png'),
(6, 'Sharknado 4: The 4th Awakens', 'shark.png'),
(7, 'Undercover Bridesmaid', 'undercover.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `proposte_collaborazione`
--

CREATE TABLE `proposte_collaborazione` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(25) NOT NULL,
  `commento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `richieste_preventivo`
--

CREATE TABLE `richieste_preventivo` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `privato_azienda` varchar(11) NOT NULL,
  `tipo_societa` varchar(25) NOT NULL,
  `lingua_originale` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `richieste_provino`
--

CREATE TABLE `richieste_provino` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cognome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `serie_tv`
--

CREATE TABLE `serie_tv` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `immagine` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `serie_tv`
--

INSERT INTO `serie_tv` (`id`, `nome`, `immagine`) VALUES
(1, 'Scandal', 'scandal.png'),
(2, 'The Borgias', 'borgia.png'),
(3, 'Law & Order', 'law.png'),
(4, 'Nip/Tuck', 'nip.png'),
(5, 'Kickin\' It', 'kickin.png'),
(6, 'Martial Law', 'martial.png'),
(7, 'Law & Order: Criminal Intent', 'order.png'),
(8, 'Total Security', 'total.png');

-- --------------------------------------------------------

--
-- Struttura della tabella `soap_opera_e_telenovele`
--

CREATE TABLE `soap_opera_e_telenovele` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `immagine` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `soap_opera_e_telenovele`
--

INSERT INTO `soap_opera_e_telenovele` (`id`, `nome`, `immagine`) VALUES
(1, 'Yo soy Betty, la fea', 'betty.png'),
(2, 'Dancin\' Days', 'dancin.png'),
(3, 'Febbre d\'Amore', 'febbre.png'),
(4, 'La Forza del Desiderio', 'forza.png'),
(5, 'Pasión Morena', 'pasion.png'),
(6, 'Tempesta d\'Amore', 'tempesta.png'),
(7, 'Terra nostra', 'terra.png'),
(8, 'Vento di Passione', 'vento.png');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `cartoni_animati`
--
ALTER TABLE `cartoni_animati`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `proposte_collaborazione`
--
ALTER TABLE `proposte_collaborazione`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `richieste_preventivo`
--
ALTER TABLE `richieste_preventivo`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `richieste_provino`
--
ALTER TABLE `richieste_provino`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `serie_tv`
--
ALTER TABLE `serie_tv`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `soap_opera_e_telenovele`
--
ALTER TABLE `soap_opera_e_telenovele`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `cartoni_animati`
--
ALTER TABLE `cartoni_animati`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT per la tabella `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT per la tabella `proposte_collaborazione`
--
ALTER TABLE `proposte_collaborazione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `richieste_preventivo`
--
ALTER TABLE `richieste_preventivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `richieste_provino`
--
ALTER TABLE `richieste_provino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `serie_tv`
--
ALTER TABLE `serie_tv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT per la tabella `soap_opera_e_telenovele`
--
ALTER TABLE `soap_opera_e_telenovele`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
