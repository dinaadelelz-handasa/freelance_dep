-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2022 at 03:39 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alhilali_workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `a3tal`
--

DROP TABLE IF EXISTS `a3tal`;
CREATE TABLE IF NOT EXISTS `a3tal` (
  `new_status_mo3tla` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moda_id_from_add` int(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sabab` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otl_date` date DEFAULT NULL,
  `otl_time` time DEFAULT NULL,
  `masol` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghiar` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_date` date DEFAULT NULL,
  `main_pay` int(11) DEFAULT NULL,
  `hours` int(100) DEFAULT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `a3tal`
--

INSERT INTO `a3tal` (`new_status_mo3tla`, `moda_id_from_add`, `id`, `sabab`, `otl_date`, `otl_time`, `masol`, `ghiar`, `main_date`, `main_pay`, `hours`, `name`) VALUES
('معطلة', NULL, 18, 'عطل فني', '2022-11-23', '23:22:00', 'محمد', 'قطعة1', '2022-11-24', 200, 2, 'الة701'),
('معطلة', NULL, 19, 'عطل فني', '2022-10-31', '17:31:00', 'محمد', 'قطعة1', '2022-11-30', 5000, 2, 'الة701');

-- --------------------------------------------------------

--
-- Table structure for table `add_new_machine`
--

DROP TABLE IF EXISTS `add_new_machine`;
CREATE TABLE IF NOT EXISTS `add_new_machine` (
  `m_img` longblob,
  `m_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_number` int(100) DEFAULT NULL,
  `rokhsa_date` date DEFAULT NULL,
  `tameen_date` date DEFAULT NULL,
  `fahs_date` date DEFAULT NULL,
  `m_work_loc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rec_date` date DEFAULT NULL,
  `masol_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_date` date DEFAULT NULL,
  `main_pay` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine`
--

INSERT INTO `add_new_machine` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`) VALUES
(0x656d6f6a695f75323639392e706e67, 'الة701', 129, '2022-11-22', '2022-11-16', '2022-11-30', 'جدة', '2022-11-29', 'أحمد محمد', 'قيد التشغيل', 'e123', 20, '2022-11-16', 2000),
(0x62616e6e6572312e6a7067, 'الة 2334', 231, '2022-11-24', '2022-11-17', '2022-11-03', 'الرياض', '2022-11-29', 'هلال', 'معطلة', 'ww123', 21, '2022-11-03', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `esla7`
--

DROP TABLE IF EXISTS `esla7`;
CREATE TABLE IF NOT EXISTS `esla7` (
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghiar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_date` date DEFAULT NULL,
  `main_pay` float DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `esla7`
--

INSERT INTO `esla7` (`name`, `ghiar`, `main_date`, `main_pay`, `id`) VALUES
('الة701', 'قطعة1', '2022-11-24', 200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

DROP TABLE IF EXISTS `user_admin`;
CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`) VALUES
(1, 'dd', 'ff'),
(2, 'cc', '231'),
(3, 'ddd', ''),
(4, 'eee', '231');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
