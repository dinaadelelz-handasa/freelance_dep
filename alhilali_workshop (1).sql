-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 20, 2022 at 04:43 AM
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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `a3tal`
--

INSERT INTO `a3tal` (`new_status_mo3tla`, `moda_id_from_add`, `id`, `sabab`, `otl_date`, `otl_time`, `masol`, `ghiar`, `main_date`, `main_pay`, `hours`, `name`) VALUES
('معطلة', NULL, 29, 'اي حاجة', '2022-11-02', '05:37:00', 'qqq', 'ddd', '2022-12-07', 5000, NULL, 'new'),
('معطلة', NULL, 20, 'عطل فني', '2022-11-03', '18:38:00', 'ali', 'قطع', '2022-11-29', 300000, 1, 'الة 2334'),
('معطلة', NULL, 21, 'اعطال فنية', '2022-11-02', '19:24:00', 'ياسر', 'قطع', '2022-11-30', 3000, 2, 'new_ala'),
('معطلة', NULL, 22, 'عطل فني', '2022-11-09', '22:44:00', 'ياسر', 'يييي', '2022-11-30', 3999, NULL, 'الة50000000');

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
  `hours` int(100) DEFAULT NULL,
  `m_status` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `m_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_date` date DEFAULT NULL,
  `main_pay` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine`
--

INSERT INTO `add_new_machine` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`) VALUES
(0x656d6f6a695f75323639392e706e67, 'new ew ', 33, '2022-12-05', '2022-12-05', '2022-12-05', 'iiiiii', '2022-12-05', 'iiii', 2, 'قيد التشغيل', 'new', 30, '2022-12-05', 90),
(0x656d6f6a695f75323639392e706e67, 'new33', 333, '2022-11-28', '2022-11-22', '2022-11-23', 'rrrrr', '2022-12-05', 'oooooo', 2, 'قيد التشغيل', 'new11', 31, '2022-12-07', 90);

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
  `otl_date` date DEFAULT NULL,
  `otl_time` time DEFAULT NULL,
  `sabab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `esla7`
--

INSERT INTO `esla7` (`name`, `ghiar`, `main_date`, `main_pay`, `id`, `otl_date`, `otl_time`, `sabab`) VALUES
('الة50000000', 'يييي', '2022-11-30', 3999, 26, '2022-11-09', '22:44:00', ' عطل فني'),
('hihih', 'hhghjg', '2022-11-24', 499, 18, '2022-11-24', '00:00:00', 'jjjjj'),
('new_ala', 'قطع', '2022-11-30', 3000, 29, '2022-11-02', '19:24:00', ' اعطال فنية');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`) VALUES
(2, 'cc', '231'),
(7, 'mohamed', 'mohamed123'),
(4, 'eee', '231'),
(5, 'ahmed', 'ahmed123'),
(6, 'ss', 'ssss'),
(8, 'js', 'js');

-- --------------------------------------------------------

--
-- Table structure for table `user_emp`
--

DROP TABLE IF EXISTS `user_emp`;
CREATE TABLE IF NOT EXISTS `user_emp` (
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_emp`
--

INSERT INTO `user_emp` (`username`, `password`, `id`) VALUES
('emp', 'emp1', 2),
('ali', 'ali123', 5),
('ss', 'sss', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
