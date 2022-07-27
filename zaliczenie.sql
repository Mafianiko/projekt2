-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Lip 2022, 21:34
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zaliczenie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `filmy_id` int(50) NOT NULL,
  `gatunki_id2` int(50) NOT NULL,
  `rezyserzy_id2` int(50) NOT NULL,
  `tytul` text COLLATE utf8_polish_ci NOT NULL,
  `rok_id2` int(50) NOT NULL,
  `ocena` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `klient_id2` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`filmy_id`, `gatunki_id2`, `rezyserzy_id2`, `tytul`, `rok_id2`, `ocena`, `klient_id2`) VALUES
(1, 2, 2, 'Drive my car', 2, '9', 1),
(2, 1, 2, 'Slender Man', 4, '3', 1),
(3, 1, 4, 'Aquaman\r\n', 5, '10', 4),
(4, 4, 4, 'Anon', 4, '6', 5),
(5, 4, 4, 'Każdego dnia', 1, '7', 2),
(6, 3, 3, 'Mamma Mia: Here We Go Again!', 5, '8', 1),
(7, 2, 1, 'Rzeka', 3, '7', 1),
(8, 2, 1, 'Podpalaczka', 2, '4', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gatunki`
--

CREATE TABLE `gatunki` (
  `gatunki_id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `gatunki`
--

INSERT INTO `gatunki` (`gatunki_id`, `nazwa`) VALUES
(1, 'horror'),
(2, 'fantasy'),
(3, 'komedia'),
(4, 'dokumentalny'),
(5, 'przygodowy'),
(6, 'historyczny');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `klient_id` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `telefon` varchar(150) COLLATE utf8_polish_ci NOT NULL,
  `zainteresowania` text COLLATE utf8_polish_ci NOT NULL,
  `sposob_id2` int(11) NOT NULL,
  `pozyczone_id2` int(11) NOT NULL,
  `wykupione_id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klient`
--

INSERT INTO `klient` (`klient_id`, `imie`, `nazwisko`, `email`, `telefon`, `zainteresowania`, `sposob_id2`, `pozyczone_id2`, `wykupione_id2`) VALUES
(1, 'Bartosz', 'Lisowski', 'bartosz.lisowski@gmail.com', '534344343', 'Filmy, sport i programowanie', 1, 3, 4),
(2, 'Anna', 'Malta', 'anna.malta@gmail.com', '434321111', 'Komedia', 3, 5, 2),
(3, 'Szymon', 'Krolik', 'szymonkrolik3243@gmail.com', '543432311', 'zadne', 4, 2, 5),
(4, 'Ola', 'Kowalska', 'olakolwak31@gmail.com', '42334786', 'Sport, komedie, horror oraz praca', 2, 1, 6),
(5, 'Filip', 'Drukarka', 'filipo31@gmail.com', '467425909', 'plywanie', 1, 6, 6),
(6, 'Martyna', 'Woda', 'woda352@gmail.com', '537899975', 'karmienie kota', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pozyczone_filmy`
--

CREATE TABLE `pozyczone_filmy` (
  `pozyczone_id` int(11) NOT NULL,
  `film` text COLLATE utf8_polish_ci NOT NULL,
  `czas` varchar(150) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pozyczone_filmy`
--

INSERT INTO `pozyczone_filmy` (`pozyczone_id`, `film`, `czas`) VALUES
(1, 'Spider Man 2', '10.02.2023'),
(2, 'Star Wars 6', '10.04.2050'),
(3, 'Podpalaczka', '10.08.2023'),
(4, 'Sonic 2', '08.05.2025'),
(5, 'Rzeka', '06.02.2027'),
(6, 'Iron-Man', '26.12.2030');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezyserzy`
--

CREATE TABLE `rezyserzy` (
  `rezyserzy_id` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rezyserzy`
--

INSERT INTO `rezyserzy` (`rezyserzy_id`, `imie`, `nazwisko`) VALUES
(1, 'Quentin', 'Tarantino'),
(2, 'Stanley', 'Kubrick'),
(3, 'Sergio', 'Leone'),
(4, 'Martin', 'Scorsese'),
(5, 'Akira', 'Kurosawa'),
(6, 'Peter', 'Jackson');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rok`
--

CREATE TABLE `rok` (
  `rok_id` int(50) NOT NULL,
  `rok` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rok`
--

INSERT INTO `rok` (`rok_id`, `rok`) VALUES
(1, '2000'),
(2, '2001'),
(3, '2002'),
(4, '2004'),
(5, '2005');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sposob_platnosci`
--

CREATE TABLE `sposob_platnosci` (
  `sposob_id` int(50) NOT NULL,
  `nazwa_sposob` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `sposob_platnosci`
--

INSERT INTO `sposob_platnosci` (`sposob_id`, `nazwa_sposob`) VALUES
(1, 'przelew bankowy'),
(2, 'blik'),
(3, 'szybki przelew'),
(4, 'karta'),
(5, 'sms');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wykupione_filmy`
--

CREATE TABLE `wykupione_filmy` (
  `wykupione_Id` int(11) NOT NULL,
  `film` text COLLATE utf8_polish_ci NOT NULL,
  `czas` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wykupione_filmy`
--

INSERT INTO `wykupione_filmy` (`wykupione_Id`, `film`, `czas`) VALUES
(1, 'Drive my car', '01.01.2100'),
(2, 'Break', '01.01.2100'),
(4, 'Mamma Mia: Here We Go Again!\r\n', '01.01.2100'),
(5, 'Każdego dnia\r\n', '01.01.2100'),
(6, 'Slender Man\r\n', '01.01.2100'),
(7, 'Aquaman\r\n', '01.01.2100'),
(8, 'Alfa\r\n', '01.01.2100'),
(9, 'Anon', '01.01.2100');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`filmy_id`);

--
-- Indeksy dla tabeli `gatunki`
--
ALTER TABLE `gatunki`
  ADD PRIMARY KEY (`gatunki_id`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`klient_id`);

--
-- Indeksy dla tabeli `pozyczone_filmy`
--
ALTER TABLE `pozyczone_filmy`
  ADD PRIMARY KEY (`pozyczone_id`);

--
-- Indeksy dla tabeli `rezyserzy`
--
ALTER TABLE `rezyserzy`
  ADD PRIMARY KEY (`rezyserzy_id`);

--
-- Indeksy dla tabeli `rok`
--
ALTER TABLE `rok`
  ADD PRIMARY KEY (`rok_id`);

--
-- Indeksy dla tabeli `sposob_platnosci`
--
ALTER TABLE `sposob_platnosci`
  ADD PRIMARY KEY (`sposob_id`);

--
-- Indeksy dla tabeli `wykupione_filmy`
--
ALTER TABLE `wykupione_filmy`
  ADD PRIMARY KEY (`wykupione_Id`);

--
-- AUTO_INCREMENT dla tabel zrzutów
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `filmy_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `gatunki`
--
ALTER TABLE `gatunki`
  MODIFY `gatunki_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `klient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `pozyczone_filmy`
--
ALTER TABLE `pozyczone_filmy`
  MODIFY `pozyczone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `rezyserzy`
--
ALTER TABLE `rezyserzy`
  MODIFY `rezyserzy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `rok`
--
ALTER TABLE `rok`
  MODIFY `rok_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `sposob_platnosci`
--
ALTER TABLE `sposob_platnosci`
  MODIFY `sposob_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `wykupione_filmy`
--
ALTER TABLE `wykupione_filmy`
  MODIFY `wykupione_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
