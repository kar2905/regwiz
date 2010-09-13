-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2010 at 12:50 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techtatva`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `CID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `Delegate`
--

CREATE TABLE IF NOT EXISTS `Delegate` (
  `DelNo` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `ContactNo` int(11) NOT NULL,
  `RegdNo` varchar(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `College` varchar(100) NOT NULL,
  PRIMARY KEY (`DelNo`),
  UNIQUE KEY `RegdNo` (`RegdNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `Event`
--

CREATE TABLE IF NOT EXISTS `Event` (
  `EID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `CID` int(11) NOT NULL,
  `Min` int(11) NOT NULL,
  `Max` int(11) NOT NULL,
  PRIMARY KEY (`EID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `Event_Del`
--

CREATE TABLE IF NOT EXISTS `Event_Del` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `EID` int(11) NOT NULL,
  `DelNo` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `Event_Team`
--

CREATE TABLE IF NOT EXISTS `Event_Team` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `EID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Team`
--

CREATE TABLE IF NOT EXISTS `Team` (
  `TID` int(11) NOT NULL AUTO_INCREMENT,
  `DelNo` varchar(20) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
