-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Cze 2022, 14:45
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `smerfetki`
--

CREATE TABLE `smerfetki` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `smerfetki`
--

INSERT INTO `smerfetki` (`id`, `name`, `image`, `price`, `description`) VALUES
(20, 'Smerfetka', '20.jpg', 799.00, 'Kobieta smerf. Jej hobby to hodowla kwiatow. Nosi biala sukienke i biale pantofle. Zostala stworzona przy uzyciu magii przez Gargamela.'),
(21, 'Vexy', '21.jpg', 125.00, 'Smerf dziewczyna, ktora zostala stworzona przez Gargamela, aby zaprzyjaznila sie ze smerfami.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `smerfiatka`
--

CREATE TABLE `smerfiatka` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `smerfiatka`
--

INSERT INTO `smerfiatka` (`id`, `name`, `image`, `price`, `description`) VALUES
(19, 'Sasetka', '19.jpg', 478.99, 'Jest piegowata, mala, smerfna dziecina. Nizsza niz dorosle smerfy. Jest mila, radosna i uwielbia zabawy. Ma rude warkoczyki i rozowy stroj.'),
(18, 'Nat', '18.jpg', 289.99, 'Smerfetek, byl u Ojca Czasu, jednak pozniej zamieszkal ze Smerfetka, ktora obecnie jest jego mama. Ma slomiana czapke i chodzi boso. '),
(17, 'Gapik Smerf', '17.jpg', 225.99, 'Smerf ciagle nudzacy sie. Kiedy inne smerfy zapraszaja do zabawy on spuszcza mine i odchodzi. Zawsze robi odwrotnie niz inne smerfiki. Nosi czerwona koszulke i teniskowki.'),
(16, 'Smerfiatko', '16.jpg', 199.99, '4 lata, niemowle. Najmlodszy ze smerfow, sprawia duzo klopotow, najbardziej kocha go Smerfetka. Najczesciej opiekuje sie nim Papa Smerf lub Maruda. Smerfus posiada zdolnosci magiczne: jest odporny na wszelkie zle zaklecia, czasami potrafi cos wyczarowac.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `smerfy`
--

CREATE TABLE `smerfy` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `smerfy`
--

INSERT INTO `smerfy` (`id`, `name`, `image`, `price`, `description`) VALUES
(1, 'Papa Smerf', '1.jpg', 399.99, '542 lata, posiadajacy wielka biala broda, czerwona czapka i spodnie. Papa Smerf, jako najmadrzejszy i prawie najstarszy ze wszystkich Smerfow. Pelni funkcje przywodcy wioski.'),
(2, 'Dziadek Smerf', '2.jpg', 199.89, 'Najstarszy ze wszystkich smerfow. Byly przywodca wioski. Nosi zolte ubrania i ma dluga siwa brode.'),
(3, 'Wazniak', '3.jpg', 125.99, 'Przemadrzaly i apodyktyczny. Jako jedyny nosi okulary. Stara sie wszystkim narzucic swoje zdanie...czesto donosi na inne smerfy'),
(4, 'Lasuch', '4.jpg', 538.99, 'Zawsze wesoly lakomczuch. Czesto robi slodkie ciasta, ktore zazwyczaj sam zjade. Codziennie przygotowuje jedzenie dla Smerfow. Ma kucharska czapke i serwetke u szyi.'),
(5, 'Maruda', '5.jpg', 123.99, 'Zawsze jest do wszystkiego negatywnie ustosunkowany. Charakteryzuja go zmruzone oczy i scisniete piesci. Powiedzonko: \"Nie cierpie...\"'),
(6, 'Zgrywus', '6.jpg', 299.99, 'Uwielbia zarty i wyglupy. Jego staly dowcip to wybuchajacy prezent-niespodzianka, mimo tego inne smerfy wciaz sie na niego nabieraja (zwlaszcza Wazniak).'),
(7, 'Lalus', '7.jpg', 342.79, 'Zakochany w swojej osobie. Uwaza sie za najprzystojniejszego ze wszystkich smerfow. Nie rozstaje sie z lusterkiem, gdyz uwielbia sie ogladac. Do czapki ma przyczepiony kwiat.'),
(8, 'Pracus', '8.jpg', 234.99, 'Smerf, ktory dyryguje wszystkimi pracami w wiosce. Uwielbia robic wynalazki, ktore nie zawsze si? udaja.  Charakterystycznym znakiem s? szelki przy spodniach, daszek przy czapce i o?owek za uchem.');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Smerfetka', 'papa.jpg', 399.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `IMIE` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NAZWISKO` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PSEUDONIM` varchar(50) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  `HASLO` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ADRES` varchar(50) CHARACTER SET utf8 NOT NULL,
  `TELEFON` int(9) NOT NULL,
  `WIEK` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`IMIE`, `NAZWISKO`, `PSEUDONIM`, `EMAIL`, `HASLO`, `ADRES`, `TELEFON`, `WIEK`) VALUES
('Dawid', 'Kalinowski', 'K4', 'd.kalinowski00@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Ceglarska 14', 793005606, 21),
('P', 'P', 'P', 'P@P', '44c29edb103a2872f519ad0c9a0fdaaa', 'P', 7, 7),
('Q', 'Q', 'Q', 'Q@Q', 'f09564c9ca56850d4cd6b3319e541aee', 'Q', 4, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownicy`
--

CREATE TABLE `użytkownicy` (
  `IMIE` varchar(50) CHARACTER SET utf8 NOT NULL,
  `NAZWISKO` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PSEUDONIM` varchar(50) CHARACTER SET utf8 NOT NULL,
  `EMAIL` varchar(50) CHARACTER SET utf8 NOT NULL,
  `HASLO` varchar(25) CHARACTER SET utf8 NOT NULL,
  `ADRES` varchar(50) CHARACTER SET utf8 NOT NULL,
  `TELEFON` int(9) NOT NULL,
  `WIEK` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `użytkownicy`
--

INSERT INTO `użytkownicy` (`IMIE`, `NAZWISKO`, `PSEUDONIM`, `EMAIL`, `HASLO`, `ADRES`, `TELEFON`, `WIEK`) VALUES
('Dawid', 'Kalinowski', 'K4', 'd.kalinowski00@gmail.com', 'qwerty', 'Ceglarska', 123456789, 21);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `smerfetki`
--
ALTER TABLE `smerfetki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `smerfiatka`
--
ALTER TABLE `smerfiatka`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `smerfy`
--
ALTER TABLE `smerfy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`PSEUDONIM`,`EMAIL`,`TELEFON`);

--
-- Indeksy dla tabeli `użytkownicy`
--
ALTER TABLE `użytkownicy`
  ADD PRIMARY KEY (`PSEUDONIM`,`EMAIL`,`TELEFON`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `smerfetki`
--
ALTER TABLE `smerfetki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `smerfiatka`
--
ALTER TABLE `smerfiatka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `smerfy`
--
ALTER TABLE `smerfy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
