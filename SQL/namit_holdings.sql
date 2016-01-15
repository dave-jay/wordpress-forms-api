-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2016 at 09:18 AM
-- Server version: 5.5.38
-- PHP Version: 5.4.45-1~dotdeb+6.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `namit_holdings`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='List of admin users' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `user_name`, `password`, `created_at`, `modified_at`) VALUES
(1, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-10-23 00:00:00', '2013-10-24 14:05:12');

-- --------------------------------------------------------

--
-- Table structure for table `api_push_logs`
--

CREATE TABLE IF NOT EXISTS `api_push_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payload` text NOT NULL,
  `user_ip` varchar(50) NOT NULL,
  `status` text NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `api_push_logs`
--


-- --------------------------------------------------------

--
-- Table structure for table `api_settings`
--

CREATE TABLE IF NOT EXISTS `api_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  `handshake_password` text NOT NULL,
  `date` date NOT NULL,
  `comments` text NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `api_settings`
--

INSERT INTO `api_settings` (`id`, `ip_address`, `handshake_password`, `date`, `comments`, `created_at`, `modified_at`) VALUES
(1, '234.545.234.534', '123456', '2016-01-02', 'First Ip Address', '2016-01-02 00:00:00', '2016-01-04 10:29:22'),
(2, '121.212.121.212', '123456', '2016-01-02', 'Second Ip Address', '2016-01-02 00:00:00', '2016-01-04 10:28:34'),
(5, '11.22.33.5556', '334466', '2016-01-26', 'Third Ip Address', '2016-01-02 13:44:23', '2016-01-02 16:40:52'),
(6, '253.425.325.325', '55435345345', '2016-01-21', 'FFFF', '2016-01-04 10:27:31', '2016-01-04 10:27:31');
