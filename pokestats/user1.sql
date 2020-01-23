-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2020 at 03:01 PM
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
  `cameraman` int(255) NOT NULL,
  `total` bigint(40) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `admin` varchar(10) DEFAULT NULL,
  `hero` int(255) NOT NULL,
  `purifier` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `mobile`, `trainer_name`, `trainer_code`, `trainer_team`, `kanto`, `johto`, `hoenn`, `sinnoh`, `collector`, `scientist`, `backpacker`, `battle_girl`, `berry_master`, `gym_leader`, `idol`, `great_league_veteran`, `ultra_league_veteran`, `master_league_veteran`, `jogger`, `breeder`, `pikachu_fan`, `champion`, `battle_legend`, `pokemon_ranger`, `gentleman`, `pilot`, `fisherman`, `ace_trainer`, `youngster`, `cameraman`, `total`, `status`, `admin`, `hero`, `purifier`) VALUES
(2, 'saiviru', 'sai kiran', 'saiviru@live.com', 'c4ca4238a0b923820dcc509a6f75849b', '', '', 121212121212, 'Valor', 150, 97, 120, 150, 9829, 345, 6355, 2823, 1658, 18546, 13, 364, 66, 117, 1128, 372, 138, 143, 218, 801, 925, 410055, 37, 33, 8, 13, 953, 'true', 'yes', 37, 11),
(5, 'TheHumbleFool', 'TheHumbleFool', 'chillappagarishashikanth@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'true', 'no', 0, 0),
(8, 'adikar123', 'Aditya Karthik Gorrapati', 'adityakarthik7@gmail.com', '2dddfc2aeb55ff4dce82d71de30ca1db', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'true', 'no', 0, 0),
(10, 'Agsumus', 'agni gadiyaram', 'agnigadiyaram@gmail.com', '66926eefce141ef549ea36613b4187b3', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'true', 'no', 0, 0),
(12, 'trilok06', 'Trilok Kumar', 'Trilokkumar453@gmail.com', '339df1cc9397210e52e201987d4d6c32', '', '', 0, '', 151, 98, 124, 82, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 376, 'true', 'no', 0, 0),
(13, 'LexVexTheNoob', 'Avinash', 'ganapaavinash0510@gmail.com', '3fc0a7acf087f549ac2b266baf94b8b1', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'true', 'no', 0, 0),
(17, 'vishwasujit', 'Vishwasujit reddy', 'sujitlove42@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '', '', 0, '', 135, 76, 91, 52, 7255, 154, 5025, 910, 224, 4542, 0, 7, 8, 0, 459, 127, 127, 23, 28, 126, 8, 7835, 25, 41, 12, 2, 432, 'true', 'no', 0, 0),
(19, 'Gannuchanu', 'Chanikya', 'chanikya.16@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '', '', 0, '', 151, 100, 133, 97, 55502, 1259, 33280, 5513, 24643, 82145, 73, 1223, 271, 265, 5262, 2076, 709, 289, 451, 3691, 4919, 25807205, 150, 501, 108, 19, 2600, 'true', 'no', 0, 0),
(20, 'Vageesharya', 'Vageesh', 'duddlavageesh07@gmail.com', 'b33ba9301d0d9754530bcffd36c36851', '', '', 0, '', 151, 99, 130, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 390, 'true', 'no', 0, 0),
(21, 'Vageesh', 'K Rishikesh', 'kamalanathanrishikesh@gmail.com', '6c538933037a613f3b10e1f4b836d066', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'false', 'no', 0, 0),
(22, 'DrBhaNu3', 'Bhanu Prakash', 'mjinmbbs@gmail.com', '1c989241412a0ba52d904b0fb5efa66e', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'false', 'no', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
