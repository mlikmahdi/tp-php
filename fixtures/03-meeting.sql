SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `communities`;
CREATE TABLE `communities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `communities` (`id`, `name`) VALUES
(1,	'PHP'),
(2,	'Symfony'),
(3,	'HTML'),
(4,	'CSS');

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `desc` mediumtext NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `community_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `community_id` (`community_id`),
  CONSTRAINT `meeting_ibfk_1` FOREIGN KEY (`community_id`) REFERENCES `communities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `meeting` (`id`, `title`, `desc`, `start_date`, `end_date`, `community_id`) VALUES
(1,	'PHP',	'Lorem ipsum Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris',	'2017-12-01 00:00:00',	'2017-12-02 00:00:00',	1),
(2,	'Symfony',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris',	'2018-01-01 00:00:00',	'2018-01-01 00:00:00',	2),
(3,	'Why HTML',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris',	'2017-12-15 00:00:00',	'2017-12-17 00:00:00',	3),
(4,	'Why CSS ?',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris',	'2018-01-10 00:00:00',	'2018-01-10 00:00:00',	4);

DROP TABLE IF EXISTS `participe`;
CREATE TABLE `participe` (
  `id_meeting` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  KEY `id_meeting` (`id_meeting`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `participe_ibfk_1` FOREIGN KEY (`id_meeting`) REFERENCES `meeting` (`id`),
  CONSTRAINT `participe_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `participe` (`id_meeting`, `id_user`, `status`) VALUES
(2,	1,	0),
(2,	2,	1),
(2,	3,	0),
(4,	3,	1),
(4,	4,	1),
(4,	1,	0),
(4,	2,	0);

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `name`) VALUES
(1,	'John doe'),
(2,	'Thomas Dutrion'),
(3,	'Mahdi M\'LIK'),
(4,	'Cyrille GRANDVAL'),
(5,	'Bill GATES');