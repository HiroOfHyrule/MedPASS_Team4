-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2018 at 03:27 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrative_staff`
--

DROP TABLE IF EXISTS `administrative_staff`;
CREATE TABLE IF NOT EXISTS `administrative_staff` (
  `Employee_ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Admin_Position` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Employee_ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrative_staff`
--

INSERT INTO `administrative_staff` (`Employee_ID`, `FName`, `LName`, `Email`, `Phone`, `Admin_Position`, `Username`, `PASSWORD`) VALUES
(1, 'Professor', 'Oak', 'oak@pokemon.org', '4037653666', 'Admin', 'ProfOak', '$2y$10$CBN2TzpESj5kAyoYbARkMO70YmxN72cclh7CxDF7TkYaCVZW3IlEy'),
(2, 'Giovanni', 'BossMan', 'teamrocket@rocket.ca', '4031112222', 'Boss', 'giovanni', '$2y$10$WIp5iORWkWf7ZlkDJl1/muyVU6tMcGIP2bPDF3hxltf3P69vu0FPW');

-- --------------------------------------------------------

--
-- Table structure for table `affects`
--

DROP TABLE IF EXISTS `affects`;
CREATE TABLE IF NOT EXISTS `affects` (
  `PID` int(255) UNSIGNED NOT NULL,
  `Illness_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`PID`,`Illness_Name`),
  KEY `Illness_Name` (`Illness_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `affects`
--

INSERT INTO `affects` (`PID`, `Illness_Name`) VALUES
(1, 'Depression');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `App_No` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `PID` int(255) UNSIGNED NOT NULL,
  `Prac_ID` int(255) UNSIGNED NOT NULL,
  PRIMARY KEY (`App_No`),
  KEY `PID` (`PID`),
  KEY `Prac_ID` (`Prac_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`App_No`, `Date`, `Time`, `PID`, `Prac_ID`) VALUES
(1, '2018-04-23', '10:00:00', 1, 3),
(2, '2018-04-19', '11:00:00', 1, 3),
(3, '2018-04-26', '10:00:00', 1, 3),
(4, '2018-04-20', '12:00:00', 1, 4),
(5, '2018-04-19', '12:00:00', 1, 4),
(6, '2018-04-19', '13:00:00', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `assistance_equipment`
--

DROP TABLE IF EXISTS `assistance_equipment`;
CREATE TABLE IF NOT EXISTS `assistance_equipment` (
  `Equip_ID` int(255) UNSIGNED NOT NULL,
  `Equipment_Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Num_In_Stock` int(100) UNSIGNED NOT NULL,
  `Cost_Per_Month` int(50) UNSIGNED NOT NULL,
  PRIMARY KEY (`Equip_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assistance_equipment`
--

INSERT INTO `assistance_equipment` (`Equip_ID`, `Equipment_Type`, `Num_In_Stock`, `Cost_Per_Month`) VALUES
(13, 'Wheel Chair', 4, 50),
(55, 'Weights', 1031, 4),
(65, 'Sling', 52, 1),
(88, 'Rocks', 1, 23),
(101, 'Crutches', 5, 2),
(1337, 'Knee Brace', 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `have_access`
--

DROP TABLE IF EXISTS `have_access`;
CREATE TABLE IF NOT EXISTS `have_access` (
  `Prac_ID` int(255) UNSIGNED NOT NULL,
  `MR_No` int(255) UNSIGNED NOT NULL,
  `PID` int(255) UNSIGNED NOT NULL,
  PRIMARY KEY (`Prac_ID`,`PID`,`MR_No`),
  KEY `PID` (`PID`,`MR_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `have_access`
--

INSERT INTO `have_access` (`Prac_ID`, `MR_No`, `PID`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `illness`
--

DROP TABLE IF EXISTS `illness`;
CREATE TABLE IF NOT EXISTS `illness` (
  `Illness_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Symptom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`Illness_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `illness`
--

INSERT INTO `illness` (`Illness_Name`, `Cause`, `Symptom`) VALUES
('Alzheimers', 'Old Age', 'Forgetfulness'),
('Depression', 'Rejection', 'Sad');

-- --------------------------------------------------------

--
-- Table structure for table `manages`
--

DROP TABLE IF EXISTS `manages`;
CREATE TABLE IF NOT EXISTS `manages` (
  `Manager_ID` int(255) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `MP_ID` int(255) UNSIGNED NOT NULL,
  PRIMARY KEY (`Manager_ID`,`Date`,`Time`,`MP_ID`),
  KEY `Date` (`Date`,`Time`,`MP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manages`
--

INSERT INTO `manages` (`Manager_ID`, `Date`, `Time`, `MP_ID`) VALUES
(1, '2018-04-23', '10:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `medical_practitioner`
--

DROP TABLE IF EXISTS `medical_practitioner`;
CREATE TABLE IF NOT EXISTS `medical_practitioner` (
  `Employee_ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Reg_No` int(255) UNSIGNED NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Employee_ID`),
  UNIQUE KEY `Reg_No` (`Reg_No`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_practitioner`
--

INSERT INTO `medical_practitioner` (`Employee_ID`, `FName`, `LName`, `Specialization`, `Phone`, `Address`, `Email`, `Reg_No`, `Username`, `PASSWORD`) VALUES
(3, 'Ash', 'Ketchum', 'Physio', '5557452248', 'Pallet Town', 'catchEmAll@yahoo.com', 123, 'ashRocks', '$2y$10$nIClLln0HfQbSFpsCzfZrOp76KX/b3oNLkWoHRyQFWEcd1wWFv9VW'),
(4, 'Joy', 'San', 'Nurse', '4036841478', 'Viridian City', 'pokecenter@world.edu', 50, 'nurseJoy', '$2y$10$WyfcMBxdVkxssNrLZUTTAOdtTbM6w5.wFem.UfLIbQvhoaefoolQO');

-- --------------------------------------------------------

--
-- Table structure for table `medical_record`
--

DROP TABLE IF EXISTS `medical_record`;
CREATE TABLE IF NOT EXISTS `medical_record` (
  `PID` int(255) UNSIGNED NOT NULL,
  `MR_No` int(255) UNSIGNED NOT NULL,
  `Illness_History` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Treatment_History` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Family_Med_History` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Medical_Allergies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`PID`,`MR_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medical_record`
--

INSERT INTO `medical_record` (`PID`, `MR_No`, `Illness_History`, `Treatment_History`, `Family_Med_History`, `Medical_Allergies`, `Notes`) VALUES
(1, 1, 'Depression', 'Gym, Healthy eating', 'Advil Abuse', 'Grass', 'Infatuation with the Nurse');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `Patient_ID` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `FName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `Sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Patient_ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_ID`, `FName`, `LName`, `DOB`, `Sex`, `Phone`, `Address`, `Email`, `Username`, `PASSWORD`) VALUES
(1, 'Brock', 'TestMan', '1990-04-11', 'M', '1112223333', 'Pewter City, Kanto', 'onyxRules@hotmail.com', 'brockOnyx', '$2y$10$sWw27z6Md1LsGISDxijV4OYpZavNve/f96QVEPx5Synuz8T1ap8GO'),
(8, 'Alex', 'Schijns', '1990-02-16', 'M', '4032352692', '96 Simcoe Close S.W.', 'random@email.com', 'alex99', '$2y$10$tOB48A5M/nFxkYxA59qXyuODER.826nD3JGYR20U9sexfhrRd4KPe');

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

DROP TABLE IF EXISTS `rents`;
CREATE TABLE IF NOT EXISTS `rents` (
  `PID` int(255) UNSIGNED NOT NULL,
  `Equip_ID` int(255) UNSIGNED NOT NULL,
  `Prac_ID` int(255) UNSIGNED NOT NULL,
  `Start_Date` date NOT NULL,
  `Return_Date` date NOT NULL,
  PRIMARY KEY (`PID`,`Equip_ID`,`Prac_ID`),
  KEY `Equip_ID` (`Equip_ID`),
  KEY `Prac_ID` (`Prac_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`PID`, `Equip_ID`, `Prac_ID`, `Start_Date`, `Return_Date`) VALUES
(1, 88, 3, '2018-04-10', '2018-05-10'),
(8, 1337, 3, '2018-03-24', '2018-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Employee_ID` int(255) UNSIGNED NOT NULL,
  `App_No` int(255) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`Date`,`Time`,`Employee_ID`),
  KEY `Employee_ID` (`Employee_ID`),
  KEY `App_No` (`App_No`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Date`, `Time`, `Employee_ID`, `App_No`) VALUES
('2018-04-19', '10:00:00', 3, NULL),
('2018-04-20', '10:00:00', 3, NULL),
('2018-04-20', '11:00:00', 3, NULL),
('2018-04-20', '13:00:00', 4, NULL),
('2018-04-23', '11:00:00', 3, NULL),
('2018-04-23', '12:00:00', 4, NULL),
('2018-04-23', '13:00:00', 4, NULL),
('2018-04-24', '10:00:00', 3, NULL),
('2018-04-24', '11:00:00', 3, NULL),
('2018-04-24', '12:00:00', 4, NULL),
('2018-04-24', '13:00:00', 4, NULL),
('2018-04-25', '10:00:00', 3, NULL),
('2018-04-25', '11:00:00', 3, NULL),
('2018-04-25', '12:00:00', 4, NULL),
('2018-04-25', '13:00:00', 4, NULL),
('2018-04-26', '11:00:00', 3, NULL),
('2018-04-26', '12:00:00', 4, NULL),
('2018-04-26', '13:00:00', 4, NULL),
('2018-04-23', '10:00:00', 3, 1),
('2018-04-19', '11:00:00', 3, 2),
('2018-04-26', '10:00:00', 3, 3),
('2018-04-20', '12:00:00', 4, 4),
('2018-04-19', '12:00:00', 4, 5),
('2018-04-19', '13:00:00', 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `treating`
--

DROP TABLE IF EXISTS `treating`;
CREATE TABLE IF NOT EXISTS `treating` (
  `PID` int(255) UNSIGNED NOT NULL,
  `PR_ID` int(255) UNSIGNED NOT NULL,
  `treatmentName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatmentNote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`PID`,`PR_ID`,`treatmentName`) USING BTREE,
  KEY `PR_ID` (`PR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `treating`
--

INSERT INTO `treating` (`PID`, `PR_ID`, `treatmentName`, `treatmentNote`) VALUES
(1, 3, 'Exercise', ''),
(1, 3, 'Socialization', 'Brock should interact with people other than Officer Jenny');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `affects`
--
ALTER TABLE `affects`
  ADD CONSTRAINT `affects_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `affects_ibfk_2` FOREIGN KEY (`Illness_Name`) REFERENCES `illness` (`Illness_Name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`Prac_ID`) REFERENCES `medical_practitioner` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `have_access`
--
ALTER TABLE `have_access`
  ADD CONSTRAINT `have_access_ibfk_1` FOREIGN KEY (`Prac_ID`) REFERENCES `medical_practitioner` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `have_access_ibfk_2` FOREIGN KEY (`PID`,`MR_No`) REFERENCES `medical_record` (`PID`, `MR_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manages`
--
ALTER TABLE `manages`
  ADD CONSTRAINT `manages_ibfk_1` FOREIGN KEY (`Manager_ID`) REFERENCES `administrative_staff` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manages_ibfk_2` FOREIGN KEY (`Date`,`Time`,`MP_ID`) REFERENCES `schedule` (`Date`, `Time`, `Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_record`
--
ALTER TABLE `medical_record`
  ADD CONSTRAINT `medical_record_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rents_ibfk_2` FOREIGN KEY (`Equip_ID`) REFERENCES `assistance_equipment` (`Equip_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rents_ibfk_3` FOREIGN KEY (`Prac_ID`) REFERENCES `medical_practitioner` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`Employee_ID`) REFERENCES `medical_practitioner` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`App_No`) REFERENCES `appointment` (`App_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treating`
--
ALTER TABLE `treating`
  ADD CONSTRAINT `treating_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `treating_ibfk_2` FOREIGN KEY (`PR_ID`) REFERENCES `medical_practitioner` (`Employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
