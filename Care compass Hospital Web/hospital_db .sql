-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2025 at 06:39 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `reg_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `doctor`, `appointment_date`, `appointment_time`, `reg_date`) VALUES
(9, 'Namindu Dinu', 'namindu2@gmail.com', '0778905432', 'Dr. Buddhika', '2025-02-28', '07:24:00', NULL),
(15, 'Namindu Dinu', 'namindu3@gmail.com', '0778905432', 'Dr. Ashani', '2025-02-26', '16:16:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialty`, `email`, `phone`) VALUES
(18, 'Dr. Buddhika', 'Pediatrician', 'DrBuddhika@gmail.com', '0774444711'),
(19, 'Dr. Ashani', 'Neurologist', 'Ashani@gmail.com', '071856211');

-- --------------------------------------------------------

--
-- Table structure for table `patient_feedback`
--

DROP TABLE IF EXISTS `patient_feedback`;
CREATE TABLE IF NOT EXISTS `patient_feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_namef` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `rating` int NOT NULL,
  `feedback` text NOT NULL,
  `submission_datef` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient_feedback`
--

INSERT INTO `patient_feedback` (`id`, `patient_namef`, `rating`, `feedback`, `submission_datef`) VALUES
(5, 'Namindu Dinu', 4, 'Good Service!', '2025-02-23 08:43:13'),
(6, 'Namindu Dinu', 5, 'Friendly Staff and Good Service', '2025-02-25 07:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `patient_queries`
--

DROP TABLE IF EXISTS `patient_queries`;
CREATE TABLE IF NOT EXISTS `patient_queries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `query_type` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `submission_date` datetime NOT NULL,
  `status` enum('pending','in_progress','resolved') DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patient_queries`
--

INSERT INTO `patient_queries` (`id`, `patient_name`, `email`, `query_type`, `message`, `submission_date`, `status`) VALUES
(8, 'namindu dinu de silva', 'namindu33@gmail.com', 'medical_tests', 'How do I prepare for my medical test?', '2025-02-25 07:42:47', 'pending'),
(9, 'Daham Pabasara', 'Daham@gmail.com', 'other', 'Can I access my results online?', '2025-02-25 07:44:06', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int NOT NULL AUTO_INCREMENT,
  `s_name` varchar(100) NOT NULL,
  `s_position` varchar(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `s_phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `s_email` (`s_email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `s_name`, `s_position`, `s_email`, `s_phone`) VALUES
(7, 'Daham', 'IT Support', 'Daham@gmail.com', '0715558882'),
(8, 'Dishal', 'Medical Record Clerk', 'Dishal@gmail.com', '0778523697');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` enum('admin','staff','patient') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(7, 'Namindu', 'namindup@gmail.com', '$2y$10$bspz1IZpZUcUfLy.Lv2kfO4yikCuNBxkRCQnNrLv2N1txxkqPk2kG', 'patient'),
(6, 'Namindu', 'naminduS@gmail.com', '$2y$10$EQwCq1kBAhPllqApWOsZnOzqURe4xcw9Ha.TFjy9QRls5JxZsCGgC', 'staff'),
(5, 'Namindu', 'NaminduA@gmail.com', '$2y$10$nm1TZNdROUe2dXyRh3wK4ejv2KsEluJeaa/Nxh57fNUcBB5utDgRi', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
