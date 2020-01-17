SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+05:30";

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,

  `trainer_name` varchar(255) NOT NULL,
  `trainer_code` bigint(255) DEFAULT NULL,
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



ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
