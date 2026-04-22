-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2022 at 10:34 PM
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
-- Database: `raco_workshop`
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
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `a3tal`
--

INSERT INTO `a3tal` (`moda_id_from_add`, `id`, `sabab`, `otl_date`, `otl_time`, `masol`, `ghiar`, `main_date`, `main_pay`, `hours`, `name`) VALUES
(NULL, 64, 'dddd', '2022-12-13', '00:22:00', 'qqq', 'قطعة1', '2023-01-05', 100000, NULL, 'Dina'),
(NULL, 61, 'عطل فني', '2022-12-05', '21:28:00', 'أحمد', 'قطعة', '2023-01-04', 3000, NULL, 'مركبة111'),
(NULL, 63, 'ss', '2022-12-07', '00:22:00', 'ss', 'قطعة', '2023-01-06', 5000, NULL, 'Dina');

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
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine`
--

INSERT INTO `add_new_machine` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x656d6f6a695f75323639392e706e67, 'new ew ', 33, '2022-12-05', '2022-12-05', '2022-12-05', 'iiiiii', '2022-12-05', 'iiii', 2, 'معطلة', 'new', 30, '2022-12-05', 90, NULL, NULL, NULL),
(0x65646172612e706e67, 'قلابة11', 123, '2022-11-30', '2022-11-10', '2022-11-22', 'مم', '2022-12-06', 'أحمد', 2, 'قيد التشغيل', 'قلابة', 41, '2022-11-29', 5000, NULL, NULL, NULL),
(0x71616c6c61622e6a7067, 'قلابة2', 22, '2022-11-23', '2022-11-16', '2022-11-23', 'yyy', '2022-12-08', 'ttttt', 1, 'معطلة', 'قلابة2', 40, '2022-11-23', 100000, NULL, NULL, NULL),
(0x6d64616b68612e706e67, 'دينا', 0, '2022-11-22', '2022-11-16', '2022-11-30', 'loc', '2022-12-06', 'أحمد', 1, 'قيد التشغيل', 'ديانا', 42, '2022-11-24', 5000, NULL, NULL, NULL),
(0x6b73736172612e706e67, 'كسارة1', 123, '2022-11-08', '2022-11-15', '2022-11-29', 'loc', '2022-11-01', 'dina', 2, 'معطلة', 'كسارة1', 43, '2022-11-21', 6000, NULL, NULL, NULL),
(0x6372616e652e504e47, 'كرين1', 12, '2022-11-24', '2022-11-16', '2022-11-10', 'loc', '2022-12-07', 'oooooo', 1, 'قيد التشغيل', 'كرين2', 45, '2022-12-01', 3000, NULL, NULL, NULL),
(0x6372616e652e504e47, 'كرين2', 333, '2022-12-08', '2022-11-24', '2022-11-17', 'loc', '2022-12-07', 'uuu', 2, 'قيد التشغيل', 'كرين2', 46, '2022-11-29', 4444, NULL, NULL, NULL),
(0x656d6f6a695f75323639392e706e67, 'مركبة1', 222, '2022-11-22', '2022-12-07', '2022-11-24', 'صصص', '2022-11-22', 'iiii', 22, 'قيد التشغيل', 'مركبة1', 48, '2022-11-30', 123, NULL, NULL, NULL),
(0x656d6f6a695f75323639392e706e67, 'مركبة2', 333, '2022-11-30', '2022-11-30', '2022-11-22', 'loc', '2022-11-28', 'أحمد', 2, 'قيد التشغيل', 'مركبة2', 49, '2022-11-01', 1400, NULL, NULL, NULL),
(0x6275732e706e67, 'باص1', 123, '2022-11-30', '2022-11-17', '2022-11-23', 'ww', '2022-12-06', 'eee', 1, 'قيد التشغيل', 'باص1', 50, '2022-11-17', 1400, NULL, NULL, NULL),
(0x6275732e706e67, 'باص2', 222, '2022-11-29', '2022-11-23', '2022-11-23', 'rrrrr', '2022-12-07', 'oooooo', 2, 'قيد التشغيل', 'باص2', 51, '2022-11-15', 3000, NULL, NULL, NULL),
(0x6d61726b6261742e504e47, 'سيارة ادارة1', 12, '2022-11-24', '2022-11-16', '2022-04-24', 'iiiiii', '2022-12-09', 'أحمد', 1, 'قيد التشغيل', 'سيارة ادارة1', 52, '2022-11-23', 88, NULL, NULL, NULL),
(0x6d61726b6261742e504e47, 'سيارة ادارة2', 333, '2022-11-30', '2022-11-17', '2022-11-10', 'www', '2022-12-07', 'أحمد', 1, 'قيد التشغيل', 'سيارة ادارة2', 53, '2022-12-08', 22222, NULL, NULL, NULL),
(0x656d6f6a695f75323639392e706e67, 'مركبة2', 333, '2022-11-22', '2022-11-29', '2022-11-01', 'iiiiii', '2022-12-06', 'أحمد', 12, 'قيد التشغيل', 'dd', 54, '2022-11-01', 1400, NULL, NULL, NULL),
(0x6372616e652e504e47, 'new qlab', 333, '2022-11-30', '2022-11-23', '2022-11-16', 'loc', '2022-12-06', 'أحمد', 7, 'قيد التشغيل', 'new', 55, '2022-11-02', 1400, NULL, NULL, NULL),
(0x6372616e652e504e47, 'new qlab', 333, '2022-11-30', '2022-11-23', '2022-11-16', 'loc', '2022-12-06', 'أحمد', 7, 'قيد التشغيل', 'new', 56, '2022-11-02', 1400, NULL, NULL, NULL),
(0x626c6f67332e706e67, 'Dina', 333, '2022-11-30', '2022-12-01', '2022-12-01', 'yyy', '2022-12-07', 'أحمد', 4, 'معطلة', 'dd', 57, '2022-12-07', 100000, NULL, NULL, NULL),
(0x626c6f67332e706e67, 'Dina', 333, '2022-11-30', '2022-12-01', '2022-12-01', 'yyy', '2022-12-07', 'أحمد', 4, 'معطلة', 'dd', 58, '2022-12-07', 100000, 'y56', '2022-12-27', 'tyytyt'),
(0x6275732e706e67, 'قلابة55', 777, '2022-12-08', '2022-12-08', '2022-11-01', 'www', '2022-12-08', 'ttttt', 2, 'قيد التشغيل', 'dd', 59, '2022-12-07', 1400, 't55', '2022-12-27', 'yy65'),
(0x6372616e652e504e47, 'قلابة 123', 333, '2022-11-30', '2022-12-07', '2022-11-17', 'ww', '2022-12-07', 'oooooo', 2, 'قيد التشغيل', 'تتت', 60, '2022-11-30', 90, '7788', '2022-11-23', '99خخ'),
(0x6d64616b68612e706e67, 'مضخة1', 333, '2022-12-06', '2022-11-22', '2022-11-30', 'iiiiii', '2022-12-04', 'iiii', 2, 'قيد التشغيل', 'مضخة', 61, '2022-11-01', 1400, '7788', '2022-12-06', '99خخ'),
(0x656d6f6a695f75323639392e706e67, 'newest', 22, '2022-11-28', '2022-11-28', '2022-12-08', 'rrrrr', '2022-11-28', 'oooooo', 12, 'قيد التشغيل', 'add', 62, '2022-12-07', 333, '7788', '2022-12-06', 'ن788'),
(0x6372616e652e504e47, 'newest قلابة', 333, '2022-11-28', '2022-11-28', '2022-11-28', 'www', '2022-12-06', 'ttttt', 2, 'قيد التشغيل', 'dd', 63, '2022-11-28', 3000, '7788', '2022-11-09', 'ن788'),
(0x71616c6c61622e6a7067, 'قلابة33', 123, '2022-12-07', '2022-11-30', '2022-12-07', 'loc', '2022-11-02', 'iiii', 2, 'معطلة', 'قلابة33', 64, '2022-11-30', 100000, '7788', '2022-12-08', 'ن788'),
(0x65646172612e706e67, 'primaSoft', 777, '2022-12-07', '2022-12-01', '2022-12-06', 'ww', '2022-12-07', 'ttttt', 2, 'معطلة', 'dd', 65, '2022-12-07', 5000, '7788', '2022-12-05', 'هعه9'),
(0x61626f75745f696d672e706e67, 'primaSoft1', 12, '2022-12-29', '2022-12-30', '2023-01-04', 'rrrrr', '2022-12-30', 'أحمد', 2, 'قيد التشغيل', 'dd', 66, '2022-12-23', 2000, '887', '2022-12-29', '987'),
(0x6372616e652e504e47, 'test', 333, '2022-12-20', '2023-01-04', '2023-01-03', 'yyy', '2023-01-03', 'oooooo', 1, 'قيد التشغيل', 'dd', 68, '2023-01-04', 100000, 'uyuy', '2023-01-04', 'ن788'),
(0x626c6f67322e706e67, 'test markba', 333, '2023-01-05', '2022-12-29', '2023-01-05', 'www', '2023-01-04', 'أحمد', 2, 'قيد التشغيل', 'dd', 69, '2022-12-20', 5000, '565rf', '2023-01-05', 'gfrtr5'),
(0x6d64616b68612e706e67, 'مضخة1', 333, '2023-01-02', '2023-01-03', '2023-01-05', 'loc', '2023-01-01', 'أحمد', 2, 'قيد التشغيل', 'new', 70, '2023-01-05', 90, 'kkkkkk8', '2023-01-04', 'gfrtr5'),
(0x6d64616b68612e706e67, 'مضخة2', 222, '2023-01-04', '2022-11-28', '2022-12-07', 'ww', '2023-01-05', 'iiii', 2, 'معطلة', 'new', 71, '2022-12-14', 90, NULL, NULL, NULL);

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
(0x6275732e706e67, 'باص11', 123, '2022-11-30', '2022-11-17', '2022-11-23', 'ww', '2022-12-06', 'eee', 1, 'معطلة', 'باص1', 1, '2022-11-17', 1400, '565rf', '2022-12-28', 'gfrtr5');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_diana`
--

INSERT INTO `add_new_machine_diana` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x626c6f67332e706e67, 'Dina', 333, '2022-11-28', '2022-12-01', '2022-12-01', 'yyy', '2022-12-07', 'أحمد', 9, 'معطلة', 'ddff', 2, '2022-12-07', 100000, 'jhjh', '2022-12-28', 'jhjhj'),
(0x6372616e652e504e47, 'test', 333, '2022-12-20', '2023-01-04', '2023-01-03', 'yyy', '2023-01-03', 'oooooo', 1, 'قيد التشغيل', 'dd', 4, '2023-01-04', 100000, 'uyuy', '2023-01-04', 'ن788');

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
(0x6d61726b6261742e504e47, 'سيارة ادارة11', 12, '2022-11-24', '2022-11-16', '2022-04-24', 'iiiiii', '2022-12-09', 'أحمد', 1, 'قيد التشغيل', 'سيارة ادارة1', 41, '2022-11-23', 88, 'hyy', '2022-12-28', 'jyy'),
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
(0x6b73736172612e706e67, 'كسارة11', 123, '2022-11-08', '2022-11-15', '2022-11-29', 'loc', '2022-11-01', 'dina', 2, 'معطلة', 'كسارة1', 1, '2022-11-21', 6000, 'ii8', '2022-12-22', 'ii8');

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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_mdakhat`
--

INSERT INTO `add_new_machine_mdakhat` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x6d64616b68612e706e67, 'مضخة1', 333, '2023-01-02', '2023-01-03', '2023-01-05', 'loc', '2023-01-01', 'أحمد', 2, 'قيد التشغيل', 'new', 5, '2023-01-05', 90, 'kkkkkk8', '2023-01-04', 'gfrtr5'),
(0x6d64616b68612e706e67, 'مضخة2', 222, '2023-01-04', '2022-11-28', '2022-12-07', 'ww', '2023-01-05', 'iiii', 2, 'معطلة', 'new', 6, '2022-12-14', 90, NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_mrkabat`
--

INSERT INTO `add_new_machine_mrkabat` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x656d6f6a695f75323639392e706e67, 'مركبة111', 222, '2022-11-22', '2022-12-07', '2022-11-24', 'صصص', '2022-11-22', 'iiii', 22, 'معطلة', 'مركبة1', 1, '2022-11-30', 123, 'ww12', '2022-12-27', '987'),
(0x656d6f6a695f75323639392e706e67, 'مركبة2', 333, '2022-11-22', '2022-11-29', '2022-11-01', 'iiiiii', '2022-12-06', 'أحمد', 12, 'قيد التشغيل', 'dd', 2, '2022-11-01', 1400, NULL, NULL, NULL),
(0x626c6f67322e706e67, 'test markba', 333, '2023-01-05', '2022-12-29', '2023-01-05', 'www', '2023-01-04', 'أحمد', 2, 'قيد التشغيل', 'dd', 3, '2022-12-20', 5000, '565rf', '2023-01-05', 'gfrtr5');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `add_new_machine_qlabat`
--

INSERT INTO `add_new_machine_qlabat` (`m_img`, `m_name`, `m_number`, `rokhsa_date`, `tameen_date`, `fahs_date`, `m_work_loc`, `rec_date`, `masol_name`, `hours`, `m_status`, `m_type`, `id`, `main_date`, `main_pay`, `waseqa`, `shraa`, `addad`) VALUES
(0x656d6f6a695f75323639392e706e67, 'قلابة44', 333, '2022-11-23', '2022-11-30', '2022-12-08', 'rrrrr', '2022-12-06', 'iiii', 1, 'قيد التشغيل', 'قلابة44', 4, '2022-12-07', 3000, '8787م', '2022-12-07', 'ن788'),
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
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `esla7`
--

INSERT INTO `esla7` (`name`, `ghiar`, `main_date`, `main_pay`, `id`, `otl_date`, `otl_time`, `sabab`) VALUES
('باص11', 'قطع', '2022-12-07', 1, 58, '2022-11-02', '14:41:00', ' اي حاجة');

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
  `esla7_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `esla7_tam`
--

INSERT INTO `esla7_tam` (`name`, `ghiar`, `main_date`, `main_pay`, `id`, `otl_date`, `otl_time`, `sabab`, `esla7_date`) VALUES
('primaSoft', 'قطعة', NULL, NULL, 13, '2022-12-07', NULL, ' hhhhhhhhhhh', '2022-12-01'),
('test', 'قطع', NULL, NULL, 14, '2022-12-14', NULL, ' dddd', '2022-12-01'),
('مضخة1', 'ddd', NULL, NULL, 15, '2022-12-07', NULL, ' dddd', '2022-12-01'),
('كسارة11', 'lll', NULL, NULL, 16, '2022-11-30', NULL, ' dddd', '2022-12-01');

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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`) VALUES
(7, 'mohamed', 'mohamed123'),
(4, 'eee', '231'),
(5, 'ahmed', 'ahmed123'),
(6, 'ss', 'ssss'),
(8, 'js', 'js'),
(9, 'dina', 'dina123');

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
('ali', 'ali123', 5),
('ss', 'sss', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
