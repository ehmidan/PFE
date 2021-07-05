-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 05:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `Registration_Number` varchar(20) NOT NULL,
  `Date_Of_Purchase` date DEFAULT NULL,
  `Buying_Price` varchar(11) DEFAULT NULL,
  `Mark` varchar(20) DEFAULT NULL,
  `End_Of_Circulation` date DEFAULT NULL,
  `Price_Max` varchar(20) DEFAULT NULL,
  `Price_Min` varchar(20) DEFAULT NULL,
  `CarImage` varchar(250) DEFAULT NULL,
  `Car_Color` char(20) DEFAULT NULL,
  `Mileage` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`Registration_Number`, `Date_Of_Purchase`, `Buying_Price`, `Mark`, `End_Of_Circulation`, `Price_Max`, `Price_Min`, `CarImage`, `Car_Color`, `Mileage`) VALUES
('A40/000/13445', '2015-12-06', ' 120 000 DH', 'DACIA', '2020-12-06', '300 DH', '250 DH', 'https://o.remove.bg/downloads/73661427-d8af-4859-b25d-a3c02a66d781/trzV2YbyLO3hCmEH9WlhfXwE8bKcun-removebg-preview.png', 'Blue', '12 000KM'),
('f121/342/34', '2016-02-18', ' 120 000 DH', 'ford', '2021-02-18', '300 DH', '250 DH', 'https://o.remove.bg/downloads/2ee47c92-1534-48b8-90c9-fccd405f5400/kisspng-2014-ford-fiesta-2018-ford-fiesta-car-2014-ford-fo-fiesta-5abe3bd724c821.0099872615224165991507-removebg-preview.png', 'White', '12 000KM'),
('G12/33546', '2015-03-11', ' 120 000 DH', 'DACIA', '2020-03-11', '300 DH', '250 DH', 'https://o.remove.bg/downloads/2ac3c4e1-28cf-44c2-9d05-b55a0917f157/png-clipart-automobile-dacia-car-dacia-logan-renault-car-compact-car-car-removebg-preview.png', 'Red', '1 000KM'),
('xx0127346', '2017-04-05', ' 120 000 DH', 'ford', '2022-04-05', '300 DH', '250 DH', 'https://o.remove.bg/downloads/82703e23-bc46-426f-ac3e-08b24a55ae9c/16-165833_2017-ford-fiesta-hatchback-alfa-romeo-stelvio-2018-removebg-preview.png', 'black', '1 000KM');

-- --------------------------------------------------------

--
-- Table structure for table `car_drain`
--

CREATE TABLE `car_drain` (
  `Id_Drain` int(11) NOT NULL,
  `Date_Of_Operation` date DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Price_Total` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `Id_Expenditure` int(11) NOT NULL,
  `Details` varchar(250) DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Price_Total` varchar(20) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `Id_Insurance` int(11) NOT NULL,
  `Date_Of_Operation` date DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Date_Start` date DEFAULT NULL,
  `Date_End` date DEFAULT NULL,
  `Price_Total` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Id_Res` int(11) NOT NULL,
  `First_Name` char(20) DEFAULT NULL,
  `Last_Name` char(20) DEFAULT NULL,
  `Phone` int(20) DEFAULT NULL,
  `CIN` varchar(20) DEFAULT NULL,
  `Mark` char(20) DEFAULT NULL,
  `Date_Start` datetime DEFAULT NULL,
  `Date_End` datetime DEFAULT NULL,
  `Car_Image` varchar(250) DEFAULT NULL,
  `Price_Total` varchar(250) DEFAULT NULL,
  `Rigestration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Id_Res`, `First_Name`, `Last_Name`, `Phone`, `CIN`, `Mark`, `Date_Start`, `Date_End`, `Car_Image`, `Price_Total`, `Rigestration_Number`) VALUES
(1, 'abderahman', 'zahmidi', 633997891, 'KB543365', 'DACIA', '2021-07-29 12:43:00', '2021-07-30 12:43:00', 'https://o.remove.bg/downloads/73661427-d8af-4859-b25d-a3c02a66d781/trzV2YbyLO3hCmEH9WlhfXwE8bKcun-removebg-preview.png', '1000DH', 'A40/000/13445');

-- --------------------------------------------------------

--
-- Table structure for table `visit_tech`
--

CREATE TABLE `visit_tech` (
  `Id_Visit` int(11) NOT NULL,
  `Date_Of_Operation` date DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Price_Total` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`Registration_Number`);

--
-- Indexes for table `car_drain`
--
ALTER TABLE `car_drain`
  ADD PRIMARY KEY (`Id_Drain`),
  ADD KEY `Registration_Number` (`Registration_Number`);

--
-- Indexes for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD PRIMARY KEY (`Id_Expenditure`),
  ADD KEY `Registration_Number` (`Registration_Number`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`Id_Insurance`),
  ADD KEY `Registration_Number` (`Registration_Number`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id_Res`),
  ADD KEY `Rigestration_Number` (`Rigestration_Number`);

--
-- Indexes for table `visit_tech`
--
ALTER TABLE `visit_tech`
  ADD PRIMARY KEY (`Id_Visit`),
  ADD KEY `Registration_Number` (`Registration_Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_drain`
--
ALTER TABLE `car_drain`
  MODIFY `Id_Drain` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `Id_Expenditure` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `Id_Insurance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id_Res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visit_tech`
--
ALTER TABLE `visit_tech`
  MODIFY `Id_Visit` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car_drain`
--
ALTER TABLE `car_drain`
  ADD CONSTRAINT `car_drain_ibfk_1` FOREIGN KEY (`Registration_Number`) REFERENCES `cars` (`Registration_Number`);

--
-- Constraints for table `expenditure`
--
ALTER TABLE `expenditure`
  ADD CONSTRAINT `expenditure_ibfk_1` FOREIGN KEY (`Registration_Number`) REFERENCES `cars` (`Registration_Number`);

--
-- Constraints for table `insurance`
--
ALTER TABLE `insurance`
  ADD CONSTRAINT `insurance_ibfk_1` FOREIGN KEY (`Registration_Number`) REFERENCES `cars` (`Registration_Number`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`Rigestration_Number`) REFERENCES `cars` (`Registration_Number`);

--
-- Constraints for table `visit_tech`
--
ALTER TABLE `visit_tech`
  ADD CONSTRAINT `visit_tech_ibfk_1` FOREIGN KEY (`Registration_Number`) REFERENCES `cars` (`Registration_Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
