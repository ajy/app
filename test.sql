-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2012 at 09:07 PM
-- Server version: 5.1.58
-- PHP Version: 5.3.6-13ubuntu3.3

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
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=82 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 162),
(2, 1, NULL, NULL, 'Pages', 2, 17),
(3, 2, NULL, NULL, 'display', 3, 4),
(4, 2, NULL, NULL, 'teacher', 5, 6),
(5, 2, NULL, NULL, 'add', 7, 8),
(6, 2, NULL, NULL, 'edit', 9, 10),
(7, 2, NULL, NULL, 'index', 11, 12),
(8, 2, NULL, NULL, 'view', 13, 14),
(9, 2, NULL, NULL, 'delete', 15, 16),
(10, 1, NULL, NULL, 'FormBRecords', 18, 29),
(11, 10, NULL, NULL, 'index', 19, 20),
(12, 10, NULL, NULL, 'view', 21, 22),
(13, 10, NULL, NULL, 'add', 23, 24),
(14, 10, NULL, NULL, 'edit', 25, 26),
(15, 10, NULL, NULL, 'delete', 27, 28),
(16, 1, NULL, NULL, 'FormBResults', 30, 43),
(17, 16, NULL, NULL, 'index', 31, 32),
(18, 16, NULL, NULL, 'view', 33, 34),
(19, 16, NULL, NULL, 'add', 35, 36),
(20, 16, NULL, NULL, 'edit', 37, 38),
(21, 16, NULL, NULL, 'delete', 39, 40),
(22, 16, NULL, NULL, 'result', 41, 42),
(23, 1, NULL, NULL, 'FormARecords', 44, 59),
(24, 23, NULL, NULL, 'result', 45, 46),
(25, 23, NULL, NULL, 'index', 47, 48),
(26, 23, NULL, NULL, 'view', 49, 50),
(27, 23, NULL, NULL, 'add', 51, 52),
(28, 23, NULL, NULL, 'edit', 53, 54),
(29, 23, NULL, NULL, 'delete', 55, 56),
(30, 23, NULL, NULL, 'deleteAll', 57, 58),
(31, 1, NULL, NULL, 'Groups', 60, 71),
(32, 31, NULL, NULL, 'index', 61, 62),
(33, 31, NULL, NULL, 'view', 63, 64),
(34, 31, NULL, NULL, 'add', 65, 66),
(35, 31, NULL, NULL, 'edit', 67, 68),
(36, 31, NULL, NULL, 'delete', 69, 70),
(37, 1, NULL, NULL, 'SubjectMemberships', 72, 87),
(38, 37, NULL, NULL, 'index', 73, 74),
(39, 37, NULL, NULL, 'view', 75, 76),
(40, 37, NULL, NULL, 'add', 77, 78),
(41, 37, NULL, NULL, 'edit', 79, 80),
(42, 37, NULL, NULL, 'delete', 81, 82),
(43, 37, NULL, NULL, 'deleteAll', 83, 84),
(44, 37, NULL, NULL, 'enroll', 85, 86),
(45, 1, NULL, NULL, 'Comments', 88, 107),
(46, 45, NULL, NULL, 'index', 89, 90),
(47, 45, NULL, NULL, 'view', 91, 92),
(48, 45, NULL, NULL, 'report', 93, 94),
(49, 45, NULL, NULL, 'add', 95, 96),
(50, 45, NULL, NULL, 'edit', 97, 98),
(51, 45, NULL, NULL, 'delete', 99, 100),
(52, 45, NULL, NULL, 'comments', 101, 102),
(53, 45, NULL, NULL, 'search', 103, 104),
(54, 45, NULL, NULL, 'deleteAll', 105, 106),
(55, 1, NULL, NULL, 'Subjects', 108, 129),
(56, 55, NULL, NULL, 'index', 109, 110),
(57, 55, NULL, NULL, 'view', 111, 112),
(58, 55, NULL, NULL, 'add', 113, 114),
(59, 55, NULL, NULL, 'edit', 115, 116),
(60, 55, NULL, NULL, 'delete', 117, 118),
(61, 55, NULL, NULL, 'subjects', 119, 120),
(62, 55, NULL, NULL, 'getClass', 121, 122),
(63, 55, NULL, NULL, 'getTeachers', 123, 124),
(64, 55, NULL, NULL, 'getSubjects', 125, 126),
(65, 55, NULL, NULL, 'getName', 127, 128),
(66, 1, NULL, NULL, 'Users', 130, 161),
(67, 66, NULL, NULL, 'login', 131, 132),
(68, 66, NULL, NULL, 'logout', 133, 134),
(69, 66, NULL, NULL, 'feedbackEmail', 135, 136),
(70, 66, NULL, NULL, 'changePassword', 137, 138),
(71, 66, NULL, NULL, 'resetPassword', 139, 140),
(72, 66, NULL, NULL, 'index', 141, 142),
(73, 66, NULL, NULL, 'view', 143, 144),
(74, 66, NULL, NULL, 'add', 145, 146),
(75, 66, NULL, NULL, 'edit', 147, 148),
(76, 66, NULL, NULL, 'delete', 149, 150),
(77, 66, NULL, NULL, 'promote', 151, 152),
(78, 66, NULL, NULL, 'deleteClass', 153, 154),
(79, 66, NULL, NULL, 'import', 155, 156),
(80, 66, NULL, NULL, 'getTeachers', 157, 158),
(81, 66, NULL, NULL, 'getName', 159, 160);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE ascii_bin DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=68 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, NULL, 'Group', 2, NULL, 5, 8),
(3, NULL, 'Group', 3, NULL, 9, 134),
(4, 1, 'User', 1, NULL, 2, 3),
(5, 3, 'User', 2, NULL, 10, 11),
(6, 3, 'User', 3, NULL, 12, 13),
(7, 3, 'User', 4, NULL, 14, 15),
(8, 3, 'User', 5, NULL, 16, 17),
(9, 3, 'User', 6, NULL, 18, 19),
(10, 3, 'User', 7, NULL, 20, 21),
(11, 3, 'User', 8, NULL, 22, 23),
(12, 3, 'User', 9, NULL, 24, 25),
(13, 3, 'User', 10, NULL, 26, 27),
(14, 3, 'User', 11, NULL, 28, 29),
(15, 3, 'User', 12, NULL, 30, 31),
(16, 3, 'User', 13, NULL, 32, 33),
(17, 3, 'User', 14, NULL, 34, 35),
(18, 3, 'User', 15, NULL, 36, 37),
(19, 3, 'User', 16, NULL, 38, 39),
(20, 3, 'User', 17, NULL, 40, 41),
(21, 3, 'User', 18, NULL, 42, 43),
(22, 3, 'User', 19, NULL, 44, 45),
(23, 3, 'User', 20, NULL, 46, 47),
(24, 3, 'User', 21, NULL, 48, 49),
(25, 3, 'User', 22, NULL, 50, 51),
(26, 3, 'User', 23, NULL, 52, 53),
(27, 3, 'User', 24, NULL, 54, 55),
(28, 3, 'User', 25, NULL, 56, 57),
(29, 3, 'User', 26, NULL, 58, 59),
(30, 3, 'User', 27, NULL, 60, 61),
(31, 3, 'User', 28, NULL, 62, 63),
(32, 3, 'User', 29, NULL, 64, 65),
(33, 3, 'User', 30, NULL, 66, 67),
(34, 3, 'User', 31, NULL, 68, 69),
(35, 3, 'User', 32, NULL, 70, 71),
(36, 3, 'User', 33, NULL, 72, 73),
(37, 3, 'User', 34, NULL, 74, 75),
(38, 3, 'User', 35, NULL, 76, 77),
(39, 3, 'User', 36, NULL, 78, 79),
(40, 3, 'User', 37, NULL, 80, 81),
(41, 3, 'User', 38, NULL, 82, 83),
(42, 3, 'User', 39, NULL, 84, 85),
(43, 3, 'User', 40, NULL, 86, 87),
(44, 3, 'User', 41, NULL, 88, 89),
(45, 3, 'User', 42, NULL, 90, 91),
(46, 3, 'User', 43, NULL, 92, 93),
(47, 3, 'User', 44, NULL, 94, 95),
(48, 3, 'User', 45, NULL, 96, 97),
(49, 3, 'User', 46, NULL, 98, 99),
(50, 3, 'User', 47, NULL, 100, 101),
(51, 3, 'User', 48, NULL, 102, 103),
(52, 3, 'User', 49, NULL, 104, 105),
(53, 3, 'User', 50, NULL, 106, 107),
(54, 3, 'User', 51, NULL, 108, 109),
(55, 3, 'User', 52, NULL, 110, 111),
(56, 3, 'User', 53, NULL, 112, 113),
(57, 3, 'User', 54, NULL, 114, 115),
(58, 3, 'User', 55, NULL, 116, 117),
(59, 3, 'User', 56, NULL, 118, 119),
(60, 3, 'User', 57, NULL, 120, 121),
(61, 3, 'User', 58, NULL, 122, 123),
(62, 3, 'User', 59, NULL, 124, 125),
(63, 3, 'User', 60, NULL, 126, 127),
(64, 3, 'User', 61, NULL, 128, 129),
(65, 3, 'User', 62, NULL, 130, 131),
(66, 3, 'User', 63, NULL, 132, 133),
(67, 2, 'User', 64, NULL, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) COLLATE ascii_bin NOT NULL DEFAULT '0',
  `_read` varchar(2) COLLATE ascii_bin NOT NULL DEFAULT '0',
  `_update` varchar(2) COLLATE ascii_bin NOT NULL DEFAULT '0',
  `_delete` varchar(2) COLLATE ascii_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=35 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 1, '-1', '-1', '-1', '-1'),
(3, 2, 48, '1', '1', '1', '1'),
(4, 2, 49, '1', '1', '1', '1'),
(5, 2, 52, '1', '1', '1', '1'),
(6, 2, 24, '1', '1', '1', '1'),
(7, 2, 62, '1', '1', '1', '1'),
(8, 2, 63, '1', '1', '1', '1'),
(9, 2, 64, '1', '1', '1', '1'),
(10, 2, 65, '1', '1', '1', '1'),
(11, 2, 67, '1', '1', '1', '1'),
(12, 2, 68, '1', '1', '1', '1'),
(13, 2, 70, '1', '1', '1', '1'),
(14, 2, 75, '1', '1', '1', '1'),
(15, 2, 71, '1', '1', '1', '1'),
(16, 2, 80, '1', '1', '1', '1'),
(17, 2, 81, '1', '1', '1', '1'),
(18, 3, 1, '-1', '-1', '-1', '-1'),
(19, 3, 48, '1', '1', '1', '1'),
(20, 3, 49, '1', '1', '1', '1'),
(21, 3, 52, '1', '1', '1', '1'),
(22, 3, 27, '1', '1', '1', '1'),
(23, 3, 62, '1', '1', '1', '1'),
(24, 3, 63, '1', '1', '1', '1'),
(25, 3, 64, '1', '1', '1', '1'),
(26, 3, 65, '1', '1', '1', '1'),
(27, 3, 67, '1', '1', '1', '1'),
(28, 3, 68, '1', '1', '1', '1'),
(29, 3, 69, '1', '1', '1', '1'),
(30, 3, 70, '1', '1', '1', '1'),
(31, 3, 75, '1', '1', '1', '1'),
(32, 3, 71, '1', '1', '1', '1'),
(33, 3, 80, '1', '1', '1', '1'),
(34, 3, 81, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `subject_id` int(4) DEFAULT NULL,
  `comment` text CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `parent_id` int(3) unsigned DEFAULT NULL,
  `flagged` tinyint(4) NOT NULL DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `from` (`from`),
  KEY `to` (`to`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `form_a_records`
--

CREATE TABLE IF NOT EXISTS `form_a_records` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `student` int(11) NOT NULL,
  `teacher` int(11) NOT NULL,
  `subject_id` int(8) NOT NULL,
  `submission_number` int(4) NOT NULL DEFAULT '1',
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
  UNIQUE KEY `from` (`student`,`teacher`,`subject_id`,`submission_number`),
  KEY `teacher` (`teacher`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=8 ;

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
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE ascii_bin NOT NULL,
  `code` varchar(9) COLLATE ascii_bin NOT NULL,
  `class` char(2) COLLATE ascii_bin NOT NULL,
  `teacher1` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `code`, `class`, `teacher1`) VALUES
(1, 'Computer Networks', '09CS351', '6A', 64);

-- --------------------------------------------------------

--
-- Table structure for table `subject_memberships`
--

CREATE TABLE IF NOT EXISTS `subject_memberships` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `subject_id` int(8) NOT NULL,
  `form_a_submitted` tinyint(1) NOT NULL DEFAULT '0',
  `form_b_submitted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_id` (`student_id`,`subject_id`),
  KEY `subject_id` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=63 ;

--
-- Dumping data for table `subject_memberships`
--

INSERT INTO `subject_memberships` (`id`, `student_id`, `subject_id`, `form_a_submitted`, `form_b_submitted`) VALUES
(1, 2, 1, 0, 0),
(2, 3, 1, 0, 0),
(3, 4, 1, 0, 0),
(4, 5, 1, 0, 0),
(5, 6, 1, 0, 0),
(6, 7, 1, 0, 0),
(7, 8, 1, 0, 0),
(8, 9, 1, 0, 0),
(9, 10, 1, 0, 0),
(10, 11, 1, 0, 0),
(11, 12, 1, 0, 0),
(12, 13, 1, 0, 0),
(13, 14, 1, 0, 0),
(14, 15, 1, 0, 0),
(15, 16, 1, 0, 0),
(16, 17, 1, 0, 0),
(17, 18, 1, 0, 0),
(18, 19, 1, 0, 0),
(19, 20, 1, 0, 0),
(20, 21, 1, 0, 0),
(21, 22, 1, 0, 0),
(22, 23, 1, 0, 0),
(23, 24, 1, 0, 0),
(24, 25, 1, 0, 0),
(25, 26, 1, 0, 0),
(26, 27, 1, 0, 0),
(27, 28, 1, 0, 0),
(28, 29, 1, 0, 0),
(29, 30, 1, 0, 0),
(30, 31, 1, 0, 0),
(31, 32, 1, 0, 0),
(32, 33, 1, 0, 0),
(33, 34, 1, 0, 0),
(34, 35, 1, 0, 0),
(35, 36, 1, 0, 0),
(36, 37, 1, 0, 0),
(37, 38, 1, 0, 0),
(38, 39, 1, 0, 0),
(39, 40, 1, 0, 0),
(40, 41, 1, 0, 0),
(41, 42, 1, 0, 0),
(42, 43, 1, 0, 0),
(43, 44, 1, 0, 0),
(44, 45, 1, 0, 0),
(45, 46, 1, 0, 0),
(46, 47, 1, 0, 0),
(47, 48, 1, 0, 0),
(48, 49, 1, 0, 0),
(49, 50, 1, 0, 0),
(50, 51, 1, 0, 0),
(51, 52, 1, 0, 0),
(52, 53, 1, 0, 0),
(53, 54, 1, 0, 0),
(54, 55, 1, 0, 0),
(55, 56, 1, 0, 0),
(56, 57, 1, 0, 0),
(57, 58, 1, 0, 0),
(58, 59, 1, 0, 0),
(59, 60, 1, 0, 0),
(60, 61, 1, 0, 0),
(61, 62, 1, 0, 0),
(62, 63, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET latin1 NOT NULL,
  `name` varchar(40) CHARACTER SET latin1 NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 NOT NULL DEFAULT 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef' COMMENT ' default password is 12345',
  `group_id` int(2) NOT NULL DEFAULT '3',
  `class` char(2) CHARACTER SET latin1 NOT NULL DEFAULT '''''',
  `email` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COLLATE=ascii_bin AUTO_INCREMENT=65 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `group_id`, `class`, `email`) VALUES
(1, 'administrator', 'admin', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 1, '', 'yourmail@here.com'),
(2, '1PI09IS001', 'Abdul Hameed', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(3, '1PI09IS002', 'Abhilasha', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(4, '1PI09IS003', 'Abhishek B S', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(5, '1PI09IS004', 'Abishek Gupta', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(6, '1PI09IS005', 'Ahalya S', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(7, '1PI09IS006', 'Ajay Aamod Gavankar', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(8, '1PI09IS007', 'Ajesh Nag V', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(9, '1PI09IS008', 'Akanksha Srivastava', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(10, '1PI09IS009', 'Akarsh E S', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(11, '1PI09IS010', 'Akshay M S', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(12, '1PI09IS011', 'Amit Agarwal', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(13, '1PI09IS012', 'Amit Kumar Rathi', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(14, '1PI09IS013', 'Amulya N', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(15, '1PI09IS014', 'Ankit Kejriwal', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(16, '1PI09IS015', 'Anmol Shukla', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(17, '1PI09IS018', 'Arjun Singh', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(18, '1PI09IS019', 'Arpitha A Shetty', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(19, '1PI09IS020', 'Arun U Bharadwaj', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(20, '1PI09IS021', 'Ashwini R', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(21, '1PI09IS022', 'Awinash Agarwal', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(22, '1PI09IS023', 'B R Raveendra', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(23, '1PI09IS024', 'Bhawna Krishna', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(24, '1PI09IS025', 'Deepa R', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(25, '1PI09IS026', 'Deepika C Shet', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(26, '1PI09IS027', 'Deshdeep', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(27, '1PI09IS028', 'Devansh Rusia', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(28, '1PI09IS029', 'Durluv Beria', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(29, '1PI09IS030', 'Gaurav Kumar', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(30, '1PI09IS032', 'Gopinath T', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(31, '1PI09IS034', 'Gowtham G Nayak', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(32, '1PI09IS035', 'Greeshma N N', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(33, '1PI09IS036', 'Hemanth M', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(34, '1PI09IS037', 'Jaten Jigish Savani', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(35, '1PI09IS038', 'K Kavya', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(36, '1PI09IS040', 'Kaushik Gaurav', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(37, '1PI09IS041', 'Krishna Prasad K', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(38, '1PI09IS042', 'Kruthi C', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(39, '1PI09IS043', 'Kshitij Pant', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(40, '1PI09IS045', 'Lohith', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(41, '1PI09IS046', 'Lohith K M', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(42, '1PI09IS047', 'Madhuri Sakuja', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(43, '1PI09IS049', 'Manasa K', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(44, '1PI09IS050', 'Manjunath Y B', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(45, '1PI09IS051', 'Manvi Gupta', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(46, '1PI09IS053', 'Meghadarshini P', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(47, '1PI09IS054', 'Mehrab Khan', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(48, '1PI09IS055', 'Mohammed Farhan', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(49, '1PI09IS057', 'Digavasadum Mounika Reddy', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(50, '1PI09IS058', 'N Sharvani', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(51, '1PI09IS059', 'Namrata B Baliga', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(52, '1PI08IS027', 'Avinash P Chavan', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(53, '1PI09IS121', 'Abhishek Raj', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(54, '1PI09IS122', 'Gaurav Singh', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(55, '1PI09IS123', 'Angad R Mhapsekar', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(56, '1PI09IS124', 'Pratik Ghosh', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(57, '1PI09IS125', 'Priyesh Aditya Pathak', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(58, '1PI08IS019', 'Anusha Y', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(59, '1PI08IS031', 'Bae Jang Hoon', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(60, '1PI08IS067', 'Paran Bhojwani', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(61, '1PI08IS108', 'Sunil Sateesh Kamat', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(62, '1PI08IS113', 'Tawfiq Ahmed', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(63, 'IPI08IS001', 'Abhinav Pathak', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 3, '6A', 'yourmail@here.com'),
(64, 'teacher1', 'Dr. Ram P Rustagi', 'ed3cc06ce86ddda1e26144e9f6eaade84b464fef', 2, '', 'yourmail@here.com');

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
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_4` FOREIGN KEY (`from`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_5` FOREIGN KEY (`to`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_6` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `subject_memberships_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subject_memberships_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
