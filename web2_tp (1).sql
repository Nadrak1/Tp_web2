-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 02:52 PM
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
(7, 'Sport', 'PS4');

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
(11, 'usuario', 'tomascarachioli@gmail.com', '$2y$10$sWWS5kWr2kSV.ZU0p1yz/eo8w3JHNuJpcWUdn09X8KfagD.c0OEta'),
(12, 'usuario', 'das@s', '$2y$10$tEDP04TByt4wgv4DnukyieekG7Z/0ACy1RXytFBjd0yF6IBsuwtma'),
(13, 'usuario', 'nose@nose', '$2y$10$brTSxfB9pXNGDtZrWvk6uudtqq5QfpqMTeBxup5aj6QAeYVOg7fje'),
(14, 'usuario', 'das@das', '$2y$10$TdS2AW68kmhuNUtoAyeW2OY5NUqQdUbeSMihq206EwyKsV1h5wose');

-- --------------------------------------------------------

--
-- Table structure for table `videogame`
--

CREATE TABLE `videogame` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `price` float NOT NULL,
  `id_category_fk` int(11) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videogame`
--

INSERT INTO `videogame` (`id`, `name`, `price`, `id_category_fk`, `imagen`) VALUES
(1, '	Far Cry 3', 300, 1, 'imgs/634de1cebf44a.jpg'),
(2, 'FIFA 22', 7855, 2, 'imgs/634de1febebf8.jpg'),
(4, 'NBA 2K23', 7000, 2, 'imgs/634de31e6a1e9.jpg'),
(7, 'Five Nights at Freddy\'s', 990.56, 3, NULL),
(9, 'League of Legends', 0, 4, NULL),
(11, 'Brawl Stars', 0, 4, NULL),
(17, 'Call Of Duty (Black ops)', 789, 1, 'imgs/634ec2ce8c3c3.jpg'),
(18, 'ssd', 22, 1, 'imgs/634ec342dbb50.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `videogame`
--
ALTER TABLE `videogame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
