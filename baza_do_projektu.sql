-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Lis 2019, 21:55
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza_do_projektu`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dzialy`
--

CREATE TABLE `dzialy` (
  `id_dzialu` int(11) NOT NULL,
  `nazwa_kursu` varchar(50) NOT NULL,
  `id_kursu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `jezyki`
--

CREATE TABLE `jezyki` (
  `id_jezyka` int(11) NOT NULL,
  `nazwa_jezyka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kursy`
--

CREATE TABLE `kursy` (
  `id_kursu` int(11) NOT NULL,
  `nazwa_kursu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowa`
--

CREATE TABLE `slowa` (
  `id_slowa` int(11) NOT NULL,
  `id_dzialu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tlumaczenia`
--

CREATE TABLE `tlumaczenia` (
  `id_tlumaczenia` int(11) NOT NULL,
  `id_slowa` int(11) NOT NULL,
  `id_jezyka` int(11) NOT NULL,
  `tlumaczenie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tlumaczenia_uzytkownika`
--

CREATE TABLE `tlumaczenia_uzytkownika` (
  `id_tlumaczenia` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_uzytkownika` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `haslo` varchar(50) NOT NULL,
  `administrator` bit(1) NOT NULL,
  `data_utworzenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dzialy`
--
ALTER TABLE `dzialy`
  ADD PRIMARY KEY (`id_dzialu`),
  ADD KEY `id_kursu` (`id_kursu`);

--
-- Indeksy dla tabeli `jezyki`
--
ALTER TABLE `jezyki`
  ADD PRIMARY KEY (`id_jezyka`);

--
-- Indeksy dla tabeli `kursy`
--
ALTER TABLE `kursy`
  ADD PRIMARY KEY (`id_kursu`);

--
-- Indeksy dla tabeli `slowa`
--
ALTER TABLE `slowa`
  ADD PRIMARY KEY (`id_slowa`),
  ADD KEY `id_dzialu` (`id_dzialu`);

--
-- Indeksy dla tabeli `tlumaczenia`
--
ALTER TABLE `tlumaczenia`
  ADD PRIMARY KEY (`id_tlumaczenia`),
  ADD KEY `id_slowa` (`id_slowa`),
  ADD KEY `id_jezyka` (`id_jezyka`);

--
-- Indeksy dla tabeli `tlumaczenia_uzytkownika`
--
ALTER TABLE `tlumaczenia_uzytkownika`
  ADD KEY `id_tlumaczenia` (`id_tlumaczenia`),
  ADD KEY `tlumaczenia_uzytkownika_ibfk_1` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_uzytkownika`);

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `dzialy`
--
ALTER TABLE `dzialy`
  ADD CONSTRAINT `dzialy_ibfk_1` FOREIGN KEY (`id_kursu`) REFERENCES `kursy` (`id_kursu`);

--
-- Ograniczenia dla tabeli `slowa`
--
ALTER TABLE `slowa`
  ADD CONSTRAINT `slowa_ibfk_1` FOREIGN KEY (`id_dzialu`) REFERENCES `dzialy` (`id_dzialu`);

--
-- Ograniczenia dla tabeli `tlumaczenia`
--
ALTER TABLE `tlumaczenia`
  ADD CONSTRAINT `tlumaczenia_ibfk_1` FOREIGN KEY (`id_slowa`) REFERENCES `slowa` (`id_slowa`),
  ADD CONSTRAINT `tlumaczenia_ibfk_2` FOREIGN KEY (`id_jezyka`) REFERENCES `jezyki` (`id_jezyka`);

--
-- Ograniczenia dla tabeli `tlumaczenia_uzytkownika`
--
ALTER TABLE `tlumaczenia_uzytkownika`
  ADD CONSTRAINT `tlumaczenia_uzytkownika_ibfk_1` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id_uzytkownika`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
