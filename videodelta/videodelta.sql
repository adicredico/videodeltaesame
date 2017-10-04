-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 03, 2017 alle 20:55
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
-- Struttura della tabella `prodotti`
--

CREATE TABLE `prodotti` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `immagine` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`id`, `nome`, `immagine`, `categoria`) VALUES
(1, 'Allegra\'s Window', 'allegra.png', 'Cartoni animati'),
(2, 'Ben & Holly\'s Little Kingdom', 'ben.png', 'Cartoni animati'),
(3, 'Bert & Ernie', 'bert.png', 'Cartoni animati'),
(4, 'Billy: un amico fantasmico', 'billy.png', 'Cartoni animati'),
(5, 'Elmo\'s World', 'elmo.png', 'Cartoni animati'),
(6, 'Gravity Falls', 'gravity.png', 'Cartoni animati'),
(7, 'Super Grover 2.0', 'grover.png', 'Cartoni animati'),
(8, 'The Gruffalo', 'gruffalo.png', 'Cartoni animati'),
(9, 'Sesame Street', 'sesame1.png', 'Cartoni animati'),
(16, 'Carriers', 'carriers.png', 'Film'),
(17, 'Hats Off to Christmas!', 'hats.png', 'Film'),
(18, 'Love at the Thanksgiving Day Parade', 'love.png', 'Film'),
(19, 'The Makeover', 'makeover.png', 'Film'),
(20, 'Puppy Love', 'puppy.png', 'Film'),
(21, 'Sharknado 4: The 4th Awakens', 'shark.png', 'Film'),
(22, 'Undercover Bridesmaid', 'undercover.png', 'Film'),
(23, 'Scandal', 'scandal.png', 'Serie tv'),
(24, 'The Borgias', 'borgia.png', 'Serie tv'),
(25, 'Law & Order', 'law.png', 'Serie tv'),
(26, 'Nip/Tuck', 'nip.png', 'Serie tv'),
(27, 'Kickin\' It', 'kickin.png', 'Serie tv'),
(28, 'Martial Law', 'martial.png', 'Serie tv'),
(29, 'Law & Order: Criminal Intent', 'order.png', 'Serie tv'),
(30, 'Total Security', 'total.png', 'Serie tv'),
(38, 'Yo soy Betty, la fea', 'betty.png', 'Soap opera e telenovele'),
(39, 'Dancin\' Days', 'dancin.png', 'Soap opera e telenovele'),
(40, 'Febbre d\'Amore', 'febbre.png', 'Soap opera e telenovele'),
(41, 'La Forza del Desiderio', 'forza.png', 'Soap opera e telenovele'),
(42, 'Pasión Morena', 'pasion.png', 'Soap opera e telenovele'),
(43, 'Tempesta d\'Amore', 'tempesta.png', 'Soap opera e telenovele'),
(44, 'Terra nostra', 'terra.png', 'Soap opera e telenovele'),
(45, 'Vento di Passione', 'vento.png', 'Soap opera e telenovele');

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

--
-- Dump dei dati per la tabella `richieste_preventivo`
--

INSERT INTO `richieste_preventivo` (`id`, `nome`, `cognome`, `privato_azienda`, `tipo_societa`, `lingua_originale`, `email`, `telefono`) VALUES
(1, 'Mario', 'Rossi', 'Azienda', '', '', 'mario.rossi@gmail.com', '5555555555'),
(2, 'Giovanni', 'Verdi', 'Privato', '', '', 'giovanni.verdi@gmail.com', '5555555555');

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

--
-- Dump dei dati per la tabella `richieste_provino`
--

INSERT INTO `richieste_provino` (`id`, `nome`, `cognome`, `email`, `telefono`) VALUES
(1, 'Giovanni', 'Verdi', 'giovanni.verdi@gmail.com', '5555555555'),
(2, 'Mario', 'Rossi', 'mario.rossi@gmail.com', '5555555555');

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
-- Indici per le tabelle `prodotti`
--
ALTER TABLE `prodotti`
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
-- AUTO_INCREMENT per la tabella `prodotti`
--
ALTER TABLE `prodotti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT per la tabella `proposte_collaborazione`
--
ALTER TABLE `proposte_collaborazione`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `richieste_preventivo`
--
ALTER TABLE `richieste_preventivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT per la tabella `richieste_provino`
--
ALTER TABLE `richieste_provino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
