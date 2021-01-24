-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 17, 2020 at 06:15 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pelnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(70) NOT NULL,
  `business_name` varchar(70) NOT NULL,
  `business_category` varchar(50) NOT NULL,
  `business_address` varchar(100) NOT NULL,
  `state` varchar(30) NOT NULL,
  `preferred_plan` varchar(30) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `business_name`, `business_category`, `business_address`, `state`, `preferred_plan`, `phone_number`, `email`, `website`) VALUES
(1, 'James Babalola', 'The Code Ville', 'Limited Liability Company', '35, Olowu Street, Ikeja', 'Akwa-Ibom', 'Intermediate', '07039069923', 'info@thecodecenter.org', ''),
(2, 'Biola Sobams', 'The Network Group', 'Private Liability Company', '3, Pebble Street, Computer Village', 'Adamawa', 'Premium', '08023239809', '', ''),
(3, 'Biola Sobanjo', 'Sobanjo Technologies', 'Limited Liability Company', '35, Lawson Street, Ikeja, Lagos', 'Adamawa', 'Intermediate', '08039067211', '', 'www.sobanjotechnologies.com'),
(4, 'Biodun Babalola', 'Double B International', 'Limited Liability Company', 'Awolowo Road, Ikeja.', 'Akwa-Ibom', 'Premium', '09023238721', '', ''),
(5, 'Shotolu paul', 'Pelnet Technologies', 'Limited Liability Company', 'Ikorodu, Lagos', 'Edo', 'Intermediate', '08028277295', '', 'www/pelnet.com.ng');
