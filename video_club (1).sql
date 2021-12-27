-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 06:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(2, ' . scientific'),
(9, 'drama'),
(10, 'php'),
(13, 'actionMovies'),
(14, 'dramaMovies');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `genre_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`, `genre_id`) VALUES
(4, ' . name', 2013, 2),
(6, 'coca-cola', 2021, 2),
(15, ' .  . title', 2017, 9),
(21, 'boyAnGirl', 2016, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `image`) VALUES
(1, 'DusanDule', 'admin', 'Petar', 'Petrovic', NULL),
(3, 'DuleLule', 'admin', 'Petar', 'Petrovic', NULL),
(4, 'dusan.pavlovic88@yahoo.com', 'admin', 'Petar', 'Petrovic', NULL),
(5, 'dusan.pavlovic', 'admin', 'Petar', 'Petrovic', NULL),
(6, 'dusan.pavlovic888', 'admin', 'Petar', 'Petrovic', NULL),
(8, 'dusan.pavlovic88888', 'admin', 'Petar', 'Petrovic', NULL),
(9, 'rtyreww', 'admin', 'Petar', 'Petrovic', NULL),
(10, 'qwertgfd', 'admin', 'Petar', 'Petrovic', NULL),
(11, 'MajceZmajce', 'admin', 'Petar', 'Petrovic', NULL),
(12, 'MajaMaja', 'admin', 'Petar', 'Petrovic', NULL),
(13, 'Tajna', 'admin', 'Petar', 'Petrovic', NULL),
(14, 'Vest', 'admin', 'Petar', 'Petrovic', NULL),
(15, 'Kafica', 'admin', 'Petar', 'Petrovic', NULL),
(16, 'flasica', 'admin', 'Petar', 'Petrovic', NULL),
(17, 'casica', 'admin', 'Petar', 'Petrovic', NULL),
(18, 'ploska', 'admin', 'Petar', 'Petrovic', NULL),
(19, 'solja', 'admin', 'Petar', 'Petrovic', NULL),
(21, 'piksla', 'admin', 'Petar', 'Petrovic', NULL),
(22, 'user', 'admin', 'Petar', 'Petrovic', NULL),
(25, 'Marko', 'admin', 'Petar', 'Petrovic', NULL),
(26, 'Stanko', 'admin', 'Petar', 'Petrovic', NULL),
(27, 'Stefan', 'admin', 'Petar', 'Petrovic', NULL),
(28, 'duvan', 'admin', 'Petar', 'Petrovic', NULL),
(29, 'programer', 'admin', 'Petar', 'Petrovic', NULL),
(30, 'sibica', 'admin', 'Petar', 'Petrovic', NULL),
(31, 'noname', 'admin', 'Petar', 'Petrovic', NULL),
(32, 'eminem', 'admin', 'Petar', 'Petrovic', NULL),
(34, 'Vaso', 'admin', 'Petar', 'Petrovic', NULL),
(35, 'Nestorovic', 'admin', 'Petar', 'Petrovic', NULL),
(36, 'prtiBeGee', 'admin', 'Eufrat', 'Mikri', NULL),
(37, 'eminemd12', 'password', 'Nikola', 'Lule', NULL),
(38, 'juice', 'password', 'lasko', 'Lule', NULL),
(39, 'kompjuter', 'password', 'stanko', 'stankovic', NULL),
(40, 'fofein', 'password', 'dddd', 'dddd', 'images/163476_1259625668025_3232173_n.jpg'),
(41, 'sutra', 'admin', 'ddddd', 'dddddd', 'images/76151_1599427479527_2136952_n.jpg'),
(42, 'tablica', 'admin', 'ddddd', 'dddddddd', 'images/155805_1239698249852_7652193_n.jpg'),
(43, 'biblioteka', 'admin', 'dddddd', 'dddddddd', 'images/255777_2098109976953_5608090_n.jpg'),
(44, 'slusalica', 'admin', 'Nikola', 'Lule', 'images/579140_2960534989695_114327276_n.jpg'),
(45, 'telefon', 'admin', 'Nikola', 'Lule', 'images/576179_2960929159549_2028634360_n.jpg'),
(46, 'telefoni', 'admin', 'Nikola', 'Lule', NULL),
(47, 'mobilni', 'admin', 'Zdravko', 'Lule', 'images/163476_1259625748027_1652055_n.jpg'),
(52, 'm', 'admin', '', '', NULL),
(55, 'natasa', 'admin', '', '', NULL),
(56, 'oiu', 'admin', '', '', NULL),
(59, 'poi', 'admin', '', '', NULL),
(60, 'ddd', 'admin', '', '', NULL),
(61, 'pdo', 'admin', '', '', NULL),
(63, 'mob', 'admin', '', '', NULL),
(65, 'idemoodma', 'password', 'Nikola', 'Lule', 'images/172277_1607441544261_4082028_o.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gsnre_id` (`genre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_gsnre_id` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
