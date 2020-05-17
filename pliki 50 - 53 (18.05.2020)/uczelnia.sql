-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Maj 2020, 10:58
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `uczelnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rok`
--

CREATE TABLE `rok` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `kierunek` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `stopien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `rok`
--

INSERT INTO `rok` (`id`, `nazwa`, `kierunek`, `stopien`) VALUES
(1, '2018', 'Informatyka', 1),
(2, '2019', 'Matematyka', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `studenci`
--

CREATE TABLE `studenci` (
  `id` int(11) NOT NULL,
  `imie` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `id_rok_studiow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `studenci`
--

INSERT INTO `studenci` (`id`, `imie`, `nazwisko`, `email`, `id_rok_studiow`) VALUES
(2, 'Adam', 'Kowalski', 'akowalski@wp.pl', 2),
(3, 'Iwona', 'Nowa', 'imowa@wp.pl', 2),
(4, 'Adam', 'Grzyb', 'agrzyb@wp.pl', 1),
(5, 'Joanna', 'Tarcza', 'jtarcza@wp.pl', 2),
(6, 'Olga', 'Parasolka', 'oparasolka@wp.pl', 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `rok`
--
ALTER TABLE `rok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studenci`
--
ALTER TABLE `studenci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `rok`
--
ALTER TABLE `rok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `studenci`
--
ALTER TABLE `studenci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
