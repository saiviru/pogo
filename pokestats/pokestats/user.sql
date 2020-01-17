-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 05:56 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `trainer_name` varchar(255) NOT NULL,
  `trainer_code` bigint(255) NOT NULL,
  `trainer_team` varchar(10) NOT NULL,
  `kanto` int(255) NOT NULL,
  `johto` int(255) NOT NULL,
  `hoenn` int(255) NOT NULL,
  `sinnoh` int(255) NOT NULL,
  `collector` int(255) NOT NULL,
  `scientist` int(255) NOT NULL,
  `backpacker` int(255) NOT NULL,
  `battle_girl` int(255) NOT NULL,
  `berry_master` int(255) NOT NULL,
  `gym_leader` int(255) NOT NULL,
  `idol` int(255) NOT NULL,
  `great_league_veteran` int(255) NOT NULL,
  `ultra_league_veteran` int(255) NOT NULL,
  `master_league_veteran` int(255) NOT NULL,
  `jogger` int(255) NOT NULL,
  `breeder` int(255) NOT NULL,
  `pikachu_fan` int(255) NOT NULL,
  `champion` int(255) NOT NULL,
  `battle_legend` int(255) NOT NULL,
  `pokemon_ranger` int(255) NOT NULL,
  `gentleman` int(255) NOT NULL,
  `pilot` bigint(20) NOT NULL,
  `fisherman` int(255) NOT NULL,
  `ace_trainer` int(255) NOT NULL,
  `youngster` int(255) NOT NULL,
  `cameraman` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
