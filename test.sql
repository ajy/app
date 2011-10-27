-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2011 at 03:40 PM
-- Server version: 5.1.58
-- PHP Version: 5.3.6-13ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(3) unsigned NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `subject_code` varchar(9) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `comment` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `parent_id` int(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

-- --------------------------------------------------------

--
-- Table structure for table `form_a_records`
--

CREATE TABLE IF NOT EXISTS `form_a_records` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `student` int(11) NOT NULL,
  `teacher` int(11) NOT NULL,
  `subject_id` int(2) NOT NULL,
  `q1` tinyint(4) NOT NULL,
  `q2` tinyint(4) NOT NULL,
  `q3` tinyint(4) NOT NULL,
  `q4` tinyint(4) NOT NULL,
  `q5` tinyint(4) NOT NULL,
  `q6` tinyint(4) NOT NULL,
  `q7` tinyint(4) NOT NULL,
  `q8` tinyint(4) NOT NULL,
  `q9` tinyint(4) NOT NULL,
  `q10` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `from` (`student`,`teacher`,`subject_id`),
  KEY `teacher` (`teacher`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `form_a_records`
--

INSERT INTO `form_a_records` (`id`, `student`, `teacher`, `subject_id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(1, 2, 3, 1, 7, 7, 8, 6, 9, 10, 6, 10, 6, 9),
(2, 4, 3, 1, 10, 6, 7, 8, 9, 10, 8, 8, 9, 7);

-- --------------------------------------------------------

--
-- Table structure for table `form_b_records`
--

CREATE TABLE IF NOT EXISTS `form_b_records` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `student` int(11) NOT NULL,
  `teacher` int(11) NOT NULL,
  `subject_code` int(2) NOT NULL,
  `q1` tinyint(1) NOT NULL,
  `q2` tinyint(1) NOT NULL,
  `q3` tinyint(1) NOT NULL,
  `q4` tinyint(1) NOT NULL,
  `q5` tinyint(1) NOT NULL,
  `q6` tinyint(1) NOT NULL,
  `q7` tinyint(1) NOT NULL,
  `q8` tinyint(1) NOT NULL,
  `q9` tinyint(1) NOT NULL,
  `q10` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `for` (`student`,`teacher`,`subject_code`),
  KEY `teacher` (`teacher`),
  KEY `subject_code` (`subject_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `form_b_records`
--

INSERT INTO `form_b_records` (`id`, `student`, `teacher`, `subject_code`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`) VALUES
(5, 2, 3, 1, 1, 1, 0, 1, 0, 1, 0, 1, 0, 1),
(6, 4, 3, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `form_b_results`
--
CREATE TABLE IF NOT EXISTS `form_b_results` (
`teacher` int(11)
,`subject_code` int(2)
,`percentage_q1` decimal(32,4)
,`percentage_q2` decimal(32,4)
,`percentage_q3` decimal(32,4)
,`percentage_q4` decimal(32,4)
,`percentage_q5` decimal(32,4)
,`percentage_q6` decimal(32,4)
,`percentage_q7` decimal(32,4)
,`percentage_q8` decimal(32,4)
,`percentage_q9` decimal(32,4)
,`percentage_q10` decimal(32,4)
);
-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'Teacher'),
(3, 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE ascii_bin NOT NULL,
  `code` varchar(9) COLLATE ascii_bin NOT NULL,
  `class` char(2) COLLATE ascii_bin NOT NULL,
  `teacher1` int(11) NOT NULL,
  `teacher2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `code`, `class`, `teacher1`, `teacher2`) VALUES
(1, 'Test Subject', '09CS333', '2A', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subject_memberships`
--

CREATE TABLE IF NOT EXISTS `subject_memberships` (
  `id` int(15) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(2) NOT NULL,
  `form_a_submitted` tinyint(1) NOT NULL DEFAULT '0',
  `form_b_submitted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`,`subject_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin;

--
-- Dumping data for table `subject_memberships`
--

INSERT INTO `subject_memberships` (`id`, `student_id`, `subject_id`, `form_a_submitted`, `form_b_submitted`) VALUES
(1, 2, 1, 0, 0),
(2, 4, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET latin1 NOT NULL,
  `name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 NOT NULL,
  `group_id` int(2) NOT NULL,
  `class` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `group_id`, `class`, `email`) VALUES
(1, 'administrator', 'a', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 1, NULL, 'ajygvnkr@gmail.com'),
(2, '1PI09IS001', 'aa', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '2A', 'ajygvnkr@gmail.com'),
(3, 'teacher', 'b', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 2, NULL, 'ajygvnkr@gmail.com'),
(4, '1PI09IS002', 'bb', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '2A', 'ajygvnkr@gmail.com');

-- --------------------------------------------------------

--
-- Structure for view `form_b_results`
--
DROP TABLE IF EXISTS `form_b_results`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `form_b_results` AS select `form_b_records`.`teacher` AS `teacher`,`form_b_records`.`subject_code` AS `subject_code`,((sum(`form_b_records`.`q1`) / count(`form_b_records`.`q1`)) * 100) AS `percentage_q1`,((sum(`form_b_records`.`q2`) / count(`form_b_records`.`q2`)) * 100) AS `percentage_q2`,((sum(`form_b_records`.`q3`) / count(`form_b_records`.`q3`)) * 100) AS `percentage_q3`,((sum(`form_b_records`.`q4`) / count(`form_b_records`.`q4`)) * 100) AS `percentage_q4`,((sum(`form_b_records`.`q5`) / count(`form_b_records`.`q5`)) * 100) AS `percentage_q5`,((sum(`form_b_records`.`q6`) / count(`form_b_records`.`q6`)) * 100) AS `percentage_q6`,((sum(`form_b_records`.`q7`) / count(`form_b_records`.`q7`)) * 100) AS `percentage_q7`,((sum(`form_b_records`.`q8`) / count(`form_b_records`.`q8`)) * 100) AS `percentage_q8`,((sum(`form_b_records`.`q9`) / count(`form_b_records`.`q9`)) * 100) AS `percentage_q9`,((sum(`form_b_records`.`q10`) / count(`form_b_records`.`q10`)) * 100) AS `percentage_q10` from `form_b_records` group by `form_b_records`.`subject_code`;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_a_records`
--
ALTER TABLE `form_a_records`
  ADD CONSTRAINT `form_a_records_ibfk_1` FOREIGN KEY (`student`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `form_a_records_ibfk_2` FOREIGN KEY (`teacher`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `form_a_records_ibfk_3` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `form_b_records`
--
ALTER TABLE `form_b_records`
  ADD CONSTRAINT `form_b_records_ibfk_1` FOREIGN KEY (`student`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `form_b_records_ibfk_2` FOREIGN KEY (`teacher`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `form_b_records_ibfk_3` FOREIGN KEY (`subject_code`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subject_memberships`
--
ALTER TABLE `subject_memberships`
  ADD CONSTRAINT `subject_memberships_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
