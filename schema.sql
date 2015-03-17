-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2015 at 08:44 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` tinyint(3) unsigned NOT NULL,
  `phone` tinytext NOT NULL,
  `age` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `login`, `password`, `email`, `date_added`, `date_modified`, `type`, `phone`, `age`) VALUES
(1, 'test', 'test', 'silviu.parjolea@gmail.com', '2015-03-10 01:00:00', '2015-03-10 02:00:00', 0, '0', 0),
(2, 'admin', '2a2a3054b44649ec6739b3a8377e603c3400c10fb79d8895b0cb709a943fec77', 'silviu.ps@gmail.com', '2015-03-10 00:00:00', '2015-03-10 05:00:00', 1, '0', 0),
(9, 'silviu', '4b9e6b34cac9c9a4fb616f0f8dd254bd9a6abd3b03cab0adba1b18c7471c7c06', 'silviu@smuff.ro', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '0', 0),
(10, 'test update s', '6b7c7f363e6f26037c806b834653616368f48749c81cd9b440b016a2d827b67b', 'ede@g.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '1', 0),
(11, 'test age', '6b7c7f363e6f26037c806b834653616368f48749c81cd9b440b016a2d827b67b', 'a@g.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '1', 30),
(12, 'dadad', '6b7c7f363e6f26037c806b834653616368f48749c81cd9b440b016a2d827b67b', 'sw@g.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '1', 21),
(13, 'test 4', '6b7c7f363e6f26037c806b834653616368f48749c81cd9b440b016a2d827b67b', 'ee@g.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '001-002-003-0004', 32),
(14, 'test update 5', '6b7c7f363e6f26037c806b834653616368f48749c81cd9b440b016a2d827b67b', 'dada@g.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '001-000-000-0000', 22),
(15, 'test aaa', '6b7c7f363e6f26037c806b834653616368f48749c81cd9b440b016a2d827b67b', 'dadad@g.com', '2015-03-16 12:57:38', '2015-03-16 12:57:38', 0, '001-002-003-0040', 33),
(16, 'aaaaa', '6b7c7f363e6f26037c806b834653616368f48749c81cd9b440b016a2d827b67b', 'bbbb@g.com', '2015-03-16 13:00:27', '2015-03-16 13:00:27', 0, '001-002-003-0040', 3);
