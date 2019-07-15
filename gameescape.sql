-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2019 at 02:55 PM
-- Server version: 8.0.16
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameescape`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_games`
--

CREATE TABLE `data_games` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `minAge` int(2) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `video` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `players` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_date`) VALUES
(5, 'Tim', 'timvaneert@upcmail.nl', '494502d096e760d6e793b79697f9fa80', '2019-06-26'),
(6, 'Raaf', 'raaf@gmail.com', 'e106a0941e89c0a5867db46ba9d9e6da', '2019-06-26'),
(11, 'MisterSirr', 'eduardwille1@gmail.com', 'eafa980aa97f95d8b9fc358f28c3307d', '2019-06-28'),
(12, 'sneakygamer', 'vletter123@gmail.com', '7cfb7ba6e255d164d0328c8a0b53fe5f', '2019-06-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_games`
--
ALTER TABLE `data_games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_games`
--
ALTER TABLE `data_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
