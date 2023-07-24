-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lip 2023, 22:17
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cooking_book`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `acc_creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `acc_creation_date`, `email`) VALUES
(70, 'admin', '$2y$10$0jps/4f9rkU2SKphJ4CIOOEZdrSI8gWCfFFroHt9nCuOd2QDqRDTG', '2023-07-19 02:45:20', 'admin@gmail.com'),
(71, 'kacper', '$2y$10$QfLFS1LP6nwyk6TLARpTg.MLXO5rFNQQ7KZZM.ckC4bg2zADe8R22', '2023-07-19 22:22:03', 'dusza-kacper@wp.pl'),
(96, 'test1', '$2y$10$.VYfiWqWTUsnqPBHZOACZ.ljpJ4nP9Ot3sz.Oowvr7nT.UQ1KIEEW', '2023-07-23 01:26:28', 'test123@gmail.com'),
(97, 'test2', '$2y$10$JVgSzwTPQ9ZKnEwCp.p6K.WzGXAuyclFnTDpdQ5h2mYTtrDmbdFRW', '2023-07-23 02:12:08', 'test2@gmail.com'),
(98, 'test3', '$2y$10$.rSeu8gSatX1SLG6vRhOV.4kS2zKpE86uYINIX0gZfyN9iA0CQCI.', '2023-07-23 15:58:12', 'przykladmail@gmail.com'),
(100, 'testy_sanitize', '$2y$10$MR6DVsJYTRwM1iE2vAxK/usVbBqH5gkotvdivckQHoYmO.Jd2NB9q', '2023-07-23 16:05:52', 'kacper@wp.pl'),
(101, 'egz', '$2y$10$kSoAKQXbTr.JZJoEJvEw4uSk6DspfyGKf9RCZr2bnnPHsJN5k.SV2', '2023-07-23 22:28:45', 'egz@wp.pl'),
(102, 'test10', '$2y$10$CHh7zvXRAyOr6k6Lt8JI.eg.o/ik1xKUAgX0oFAGxKwwS9icMkRCu', '2023-07-24 22:13:09', 'test10@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
