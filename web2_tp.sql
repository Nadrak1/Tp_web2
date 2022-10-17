-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 07:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2_tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `genre` varchar(300) NOT NULL,
  `gameplay` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `genre`, `gameplay`) VALUES
(1, 'Shooter', 'Multi Plataform'),
(2, 'Sport', 'Multi Plataform'),
(3, 'Horror', 'Multi Plataform'),
(4, 'Multiplayer online battle arena', 'Multi Plataform'),
(6, 'Sport', 'PC'),
(7, 'Sport', 'XBOX');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `rol` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `rol`, `email`, `password`) VALUES
(3, 'admin', 'nicourdu@gmail.com', '$2y$10$ZtXhPOyJy5.eefvWMISTuOszdx7ZhnbVMcjMGwlSxbfQZFi.HNdIu'),
(6, 'admin', 'iaraminos03@gmail.com', '$2y$10$8dCgGUy76zmnbVH3kFzLe.79qzKO6acvuEpZNTwuHaM9Q61ISi3r6'),
(7, 'usuario', 'juanmanuelurd@hotmail.com', '$2y$10$a1KLxxkJrMxwz4G2tGBxNO8mGI58PqmQnxf0/jfXx6uXiq5Lge1sm'),
(8, 'usuario', 'nacho10@gmail.com', '$2y$10$TfpVG6LxiOWFDDaR8YproefsLk5PmQaIGBfNlxB9dvL1aTS.mFSm6'),
(9, '', 'tomascarachioli@gmail.com', '$2y$10$J6a4WXnLL1Ia3DGckN9LQud33PbnGvc.pwhKzZf.6YnllT7wK8yBG');

-- --------------------------------------------------------

--
-- Table structure for table `videogame`
--

CREATE TABLE `videogame` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` float NOT NULL,
  `id_category_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videogame`
--

INSERT INTO `videogame` (`id`, `name`, `price`, `id_category_fk`) VALUES
(1, 'Far Cry 3', 300, 1),
(2, 'FIFA 22', 7855, 2),
(4, 'NBA 2K23', 7000, 2),
(7, 'Five Nights at Freddy\'s', 990.56, 3),
(9, 'League of Legends', 0, 4),
(11, 'Brawl Stars', 0, 4),
(14, 'Counter Strike', 0, 1),
(15, 'TUDODICO', 1212, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogame`
--
ALTER TABLE `videogame`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_videogame` (`id_category_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videogame`
--
ALTER TABLE `videogame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `videogame`
--
ALTER TABLE `videogame`
  ADD CONSTRAINT `fk_category_videogame` FOREIGN KEY (`id_category_fk`) REFERENCES `category` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
