-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2022 at 01:31 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `a3tal`
--

INSERT INTO `a3tal` (`moda_id_from_add`, `id`, `sabab`, `otl_date`, `otl_time`, `masol`, `ghiar`, `main_date`, `main_pay`, `hours`, `name`) VALUES
(NULL, 20, 'عطل فني', '2022-11-03', '18:38:00', 'ali', 'قطع', '2022-11-29', 300000, 1, 'الة 2334'),
(NULL, 21, 'اعطال فنية', '2022-11-02', '19:24:00', 'ياسر', 'قطع', '2022-11-30', 3000, 2, 'new_ala'),
(NULL, 37, 'اي حاجة', '2022-11-01', '02:29:00', 'qqq', 'قطعة', '2022-12-09', 3000, NULL, ''),
(NULL, 41, 'اي حاجة', '2022-11-02', '03:16:00', 'qqq', 'dd', '2022-11-30', 5000, NULL, 'كسارة11'),
(NULL, 46, 'dddd', '2022-11-05', '03:48:00', 'أحمد', 'قطعة1', '2022-12-09', 3000, NULL, 'دينا'),
(NULL, 45, 'اي حاجة', '2022-11-01', '03:38:00', 'eee', 'قطعة', '2022-12-09', 3000, NULL, 'سيارة ادارة11'),
(NULL, 48, 'اي حاجة', '2022-11-02', '14:41:00', 'eee', 'قطع', '2022-12-07', 1, NULL, 'باص11'),
(NULL, 50, 'اي حاجة', '2022-11-02', '14:44:00', 'qqq', 'قطعة', '2022-12-08', 90, NULL, 'سيارة ادارة11'),
(NULL, 51, 'اي حاجة', '2022-11-02', '14:54:00', 'eee', 'قطعة1', '2022-12-07', 3000, NULL, 'كسارة11'),
(NULL, 52, 'dddd', '2022-11-01', '14:56:00', 'eee', 'dd', '2022-12-07', 100000, NULL, 'مركبة2');

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
  `waseqa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shraa` date DEFAULT NULL,
  `addad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine`
--

INSERT INTO `add_new_machine` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x626c6f67332e706e67, 'قلابة1212', 777, '2022-11-28', '2022-12-01', '2022-11-16', '', '2022-11-22', 'uuuuuuuuuuuuuu', 1, 'قيد التشغيل', 'قلابة 1', 39, '2022-12-01', 100000, NULL, NULL, NULL),
(0x626c6f67312e706e67, 'ddddddddddd', 333, '2022-11-22', '2022-11-24', '2022-11-16', 'yyy', '2022-11-29', 'oooooo', 1, 'قيد التشغيل', 'new', 35, '2022-11-17', 1400, NULL, NULL, NULL),
(0x656d6f6a695f75323639392e706e67, 'new ew ', 33, '2022-12-05', '2022-12-05', '2022-12-05', 'iiiiii', '2022-12-05', 'iiii', 2, 'قيد التشغيل', 'new', 30, '2022-12-05', 90, NULL, NULL, NULL),
(0x65646172612e706e67, 'قلابة11', 123, '2022-11-30', '2022-11-10', '2022-11-22', 'مم', '2022-12-06', 'أحمد', 2, 'قيد التشغيل', 'قلابة', 41, '2022-11-29', 5000, NULL, NULL, NULL),
(0x71616c6c61622e6a7067, 'قلابة2', 22, '2022-11-23', '2022-11-16', '2022-11-23', 'yyy', '2022-12-08', 'ttttt', 1, 'قيد التشغيل', 'قلابة2', 40, '2022-11-23', 100000, NULL, NULL, NULL),
(0x6d64616b68612e706e67, 'دينا', 0, '2022-11-22', '2022-11-16', '2022-11-30', 'loc', '2022-12-06', 'أحمد', 1, 'معطلة', 'ديانا', 42, '2022-11-24', 5000, NULL, NULL, NULL),
(0x6b73736172612e706e67, 'كسارة1', 123, '2022-11-08', '2022-11-15', '2022-11-29', 'loc', '2022-11-01', 'dina', 2, 'قيد التشغيل', 'كسارة1', 43, '2022-11-21', 6000, NULL, NULL, NULL),
(0x6b73736172612e706e67, 'كسارة2', 11, '2022-12-01', '2022-11-23', '2022-11-09', 'rrrrr', '2022-12-05', 'أحمد', 2, 'معطلة', 'كسارة2', 44, '2022-12-04', 5000, NULL, NULL, NULL),
(0x6372616e652e504e47, 'كرين1', 12, '2022-11-24', '2022-11-16', '2022-11-10', 'loc', '2022-12-07', 'oooooo', 1, 'قيد التشغيل', 'كرين2', 45, '2022-12-01', 3000, NULL, NULL, NULL),
(0x6372616e652e504e47, 'كرين2', 333, '2022-12-08', '2022-11-24', '2022-11-17', 'loc', '2022-12-07', 'uuu', 2, 'قيد التشغيل', 'كرين2', 46, '2022-11-29', 4444, NULL, NULL, NULL),
(0x656d6f6a695f75323639392e706e67, 'مركبة1', 222, '2022-11-22', '2022-12-07', '2022-11-24', 'صصص', '2022-11-22', 'iiii', 22, 'قيد التشغيل', 'مركبة1', 48, '2022-11-30', 123, NULL, NULL, NULL),
(0x656d6f6a695f75323639392e706e67, 'مركبة2', 333, '2022-11-30', '2022-11-30', '2022-11-22', 'loc', '2022-11-28', 'أحمد', 2, 'معطلة', 'مركبة2', 49, '2022-11-01', 1400, NULL, NULL, NULL),
(0x6275732e706e67, 'باص1', 123, '2022-11-30', '2022-11-17', '2022-11-23', 'ww', '2022-12-06', 'eee', 1, 'قيد التشغيل', 'باص1', 50, '2022-11-17', 1400, NULL, NULL, NULL),
(0x6275732e706e67, 'باص2', 222, '2022-11-29', '2022-11-23', '2022-11-23', 'rrrrr', '2022-12-07', 'oooooo', 2, 'قيد التشغيل', 'باص2', 51, '2022-11-15', 3000, NULL, NULL, NULL),
(0x6d61726b6261742e504e47, 'سيارة ادارة1', 12, '2022-11-24', '2022-11-16', '2022-04-24', 'iiiiii', '2022-12-09', 'أحمد', 1, 'قيد التشغيل', 'سيارة ادارة1', 52, '2022-11-23', 88, NULL, NULL, NULL),
(0x6d61726b6261742e504e47, 'سيارة ادارة2', 333, '2022-11-30', '2022-11-17', '2022-11-10', 'www', '2022-12-07', 'أحمد', 1, 'قيد التشغيل', 'سيارة ادارة2', 53, '2022-12-08', 22222, NULL, NULL, NULL),
(0x656d6f6a695f75323639392e706e67, 'مركبة2', 333, '2022-11-22', '2022-11-29', '2022-11-01', 'iiiiii', '2022-12-06', 'أحمد', 12, 'معطلة', 'dd', 54, '2022-11-01', 1400, NULL, NULL, NULL),
(0x6372616e652e504e47, 'new qlab', 333, '2022-11-30', '2022-11-23', '2022-11-16', 'loc', '2022-12-06', 'أحمد', 7, 'قيد التشغيل', 'new', 55, '2022-11-02', 1400, NULL, NULL, NULL),
(0x6372616e652e504e47, 'new qlab', 333, '2022-11-30', '2022-11-23', '2022-11-16', 'loc', '2022-12-06', 'أحمد', 7, 'قيد التشغيل', 'new', 56, '2022-11-02', 1400, NULL, NULL, NULL),
(0x626c6f67332e706e67, 'Dina', 333, '2022-11-30', '2022-12-01', '2022-12-01', 'yyy', '2022-12-07', 'أحمد', 4, 'معطلة', 'dd', 57, '2022-12-07', 100000, NULL, NULL, NULL),
(0x626c6f67332e706e67, 'Dina', 333, '2022-11-30', '2022-12-01', '2022-12-01', 'yyy', '2022-12-07', 'أحمد', 4, 'معطلة', 'dd', 58, '2022-12-07', 100000, NULL, NULL, NULL),
(0x6275732e706e67, 'قلابة55', 777, '2022-12-08', '2022-12-08', '2022-11-01', 'www', '2022-12-08', 'ttttt', 2, 'قيد التشغيل', 'dd', 59, '2022-12-07', 1400, '88ع', '2022-12-08', 'هعه9'),
(0x6372616e652e504e47, 'قلابة 123', 333, '2022-11-30', '2022-12-07', '2022-11-17', 'ww', '2022-12-07', 'oooooo', 2, 'قيد التشغيل', 'تتت', 60, '2022-11-30', 90, '7788', '2022-11-23', '99خخ'),
(0x6d64616b68612e706e67, 'مضخة1', 333, '2022-12-06', '2022-11-22', '2022-11-30', 'iiiiii', '2022-12-04', 'iiii', 2, 'قيد التشغيل', 'مضخة', 61, '2022-11-01', 1400, '7788', '2022-12-06', '99خخ'),
(0x656d6f6a695f75323639392e706e67, 'newest', 22, '2022-11-28', '2022-11-28', '2022-12-08', 'rrrrr', '2022-11-28', 'oooooo', 12, 'قيد التشغيل', 'add', 62, '2022-12-07', 333, '7788', '2022-12-06', 'ن788'),
(0x6372616e652e504e47, 'newest قلابة', 333, '2022-11-28', '2022-11-28', '2022-11-28', 'www', '2022-12-06', 'ttttt', 2, 'قيد التشغيل', 'dd', 63, '2022-11-28', 3000, '7788', '2022-11-09', 'ن788'),
(0x71616c6c61622e6a7067, 'قلابة33', 123, '2022-12-07', '2022-11-30', '2022-12-07', 'loc', '2022-11-02', 'iiii', 2, 'قيد التشغيل', 'قلابة33', 64, '2022-11-30', 100000, '7788', '2022-12-08', 'ن788'),
(0x65646172612e706e67, 'primaSoft', 777, '2022-12-07', '2022-12-01', '2022-12-06', 'ww', '2022-12-07', 'ttttt', 2, 'قيد التشغيل', 'dd', 65, '2022-12-07', 5000, '7788', '2022-12-05', 'هعه9');

-- --------------------------------------------------------

--
-- Table structure for table `add_new_machine_bus`
--

DROP TABLE IF EXISTS `add_new_machine_bus`;
CREATE TABLE IF NOT EXISTS `add_new_machine_bus` (
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
  `waseqa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shraa` date DEFAULT NULL,
  `addad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_bus`
--

INSERT INTO `add_new_machine_bus` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x6275732e706e67, 'باص11', 123, '2022-11-30', '2022-11-17', '2022-11-23', 'ww', '2022-12-06', 'eee', 1, 'معطلة', 'باص1', 1, '2022-11-17', 1400, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `add_new_machine_diana`
--

DROP TABLE IF EXISTS `add_new_machine_diana`;
CREATE TABLE IF NOT EXISTS `add_new_machine_diana` (
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
  `waseqa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shraa` date DEFAULT NULL,
  `addad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_diana`
--

INSERT INTO `add_new_machine_diana` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x626c6f67332e706e67, 'Dina', 333, '2022-11-28', '2022-12-01', '2022-12-01', 'yyy', '2022-12-07', 'أحمد', 4, 'قيد التشغيل', 'ddff', 2, '2022-12-07', 100000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `add_new_machine_edara`
--

DROP TABLE IF EXISTS `add_new_machine_edara`;
CREATE TABLE IF NOT EXISTS `add_new_machine_edara` (
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
  `waseqa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shraa` date DEFAULT NULL,
  `addad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_edara`
--

INSERT INTO `add_new_machine_edara` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x6d61726b6261742e504e47, 'سيارة ادارة11', 12, '2022-11-24', '2022-11-16', '2022-04-24', 'iiiiii', '2022-12-09', 'أحمد', 1, 'معطلة', 'سيارة ادارة1', 41, '2022-11-23', 88, NULL, NULL, NULL),
(0x6d61726b6261742e504e47, 'سيارة ادارة2', 333, '2022-11-30', '2022-11-17', '2022-11-10', 'www', '2022-12-07', 'أحمد', 1, 'قيد التشغيل', 'سيارة ادارة2', 42, '2022-12-08', 22222, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `add_new_machine_ksarat`
--

DROP TABLE IF EXISTS `add_new_machine_ksarat`;
CREATE TABLE IF NOT EXISTS `add_new_machine_ksarat` (
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
  `waseqa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shraa` date DEFAULT NULL,
  `addad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_ksarat`
--

INSERT INTO `add_new_machine_ksarat` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x6b73736172612e706e67, 'كسارة11', 123, '2022-11-08', '2022-11-15', '2022-11-29', 'loc', '2022-11-01', 'dina', 2, 'معطلة', 'كسارة1', 1, '2022-11-21', 6000, NULL, NULL, NULL),
(0x6b73736172612e706e67, 'كسارة2', 11, '2022-12-01', '2022-11-23', '2022-11-09', 'rrrrr', '2022-12-05', 'أحمد', 2, 'معطلة', 'كسارة2', 2, '2022-12-04', 5000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `add_new_machine_mdakhat`
--

DROP TABLE IF EXISTS `add_new_machine_mdakhat`;
CREATE TABLE IF NOT EXISTS `add_new_machine_mdakhat` (
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
  `waseqa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shraa` date DEFAULT NULL,
  `addad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_mdakhat`
--

INSERT INTO `add_new_machine_mdakhat` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x6d64616b68612e706e67, 'مضخة1', 333, '2022-12-06', '2022-11-22', '2022-11-30', 'iiiiii', '2022-12-04', 'iiii', 2, 'قيد التشغيل', 'مضخة', 4, '2022-11-01', 1400, '7788', '2022-12-06', '99خخ');

-- --------------------------------------------------------

--
-- Table structure for table `add_new_machine_mrkabat`
--

DROP TABLE IF EXISTS `add_new_machine_mrkabat`;
CREATE TABLE IF NOT EXISTS `add_new_machine_mrkabat` (
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
  `waseqa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shraa` date DEFAULT NULL,
  `addad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_mrkabat`
--

INSERT INTO `add_new_machine_mrkabat` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x656d6f6a695f75323639392e706e67, 'مركبة111', 222, '2022-11-22', '2022-12-07', '2022-11-24', 'صصص', '2022-11-22', 'iiii', 22, 'قيد التشغيل', 'مركبة1', 1, '2022-11-30', 123, NULL, NULL, NULL),
(0x656d6f6a695f75323639392e706e67, 'مركبة2', 333, '2022-11-22', '2022-11-29', '2022-11-01', 'iiiiii', '2022-12-06', 'أحمد', 12, 'معطلة', 'dd', 2, '2022-11-01', 1400, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `add_new_machine_qlabat`
--

DROP TABLE IF EXISTS `add_new_machine_qlabat`;
CREATE TABLE IF NOT EXISTS `add_new_machine_qlabat` (
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
  `waseqa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shraa` date DEFAULT NULL,
  `addad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_qlabat`
--

INSERT INTO `add_new_machine_qlabat` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x65646172612e706e67, 'primaSoft', 777, '2022-12-07', '2022-12-01', '2022-12-06', 'ww', '2022-12-07', 'ttttt', 2, 'قيد التشغيل', 'dd', 10, '2022-12-07', 5000, '7788', '2022-12-05', 'هعه9'),
(0x656d6f6a695f75323639392e706e67, 'قلابة44', 333, '2022-11-23', '2022-11-30', '2022-12-08', 'rrrrr', '2022-12-06', 'iiii', 1, 'قيد التشغيل', 'قلابة44', 4, '2022-12-07', 3000, '8787م', '2022-12-07', 'ن788'),
(0x71616c6c61622e6a7067, 'قلابة33', 123, '2022-12-07', '2022-11-30', '2022-12-07', 'loc', '2022-11-02', 'iiii', 2, 'قيد التشغيل', 'قلابة33', 9, '2022-11-30', 100000, '7788', '2022-12-08', 'ن788'),
(0x6275732e706e67, 'قلابة55', 777, '2022-12-08', '2022-12-08', '2022-11-01', 'www', '2022-12-08', 'ttttt', 2, 'قيد التشغيل', 'dd', 6, '2022-12-07', 1400, '88ع', '2022-12-08', 'هعه9');

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
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `esla7`
--

INSERT INTO `esla7` (`name`, `ghiar`, `main_date`, `main_pay`, `id`, `otl_date`, `otl_time`, `sabab`) VALUES
('سيارة ادارة11', 'قطعة', '2022-12-09', 3000, 46, '2022-11-01', '03:38:00', ' اي حاجة'),
('new_ala', 'قطع', '2022-11-30', 3000, 29, '2022-11-02', '19:24:00', ' اعطال فنية'),
('دينا', 'قطعة1', '2022-12-09', 3000, 47, '2022-11-05', '03:48:00', ' dddd');

-- --------------------------------------------------------

--
-- Table structure for table `esla7_tam`
--

DROP TABLE IF EXISTS `esla7_tam`;
CREATE TABLE IF NOT EXISTS `esla7_tam` (
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghiar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `main_date` date DEFAULT NULL,
  `main_pay` float DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `otl_date` date DEFAULT NULL,
  `otl_time` time DEFAULT NULL,
  `sabab` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
