-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 02:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

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
  `Buying_Price` varchar(255) NOT NULL,
  `Mark` varchar(255) NOT NULL,
  `Gearbox_Type` text NOT NULL,
  `Fual_Type` text NOT NULL,
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

INSERT INTO `cars` (`Registration_Number`, `Date_Of_Purchase`, `Buying_Price`, `Mark`, `Gearbox_Type`, `Fual_Type`, `End_Of_Circulation`, `Price_Max`, `Price_Min`, `CarImage`, `Car_Color`, `Mileage`) VALUES
('f121/342/11', '2020-02-14', '270 000 DH', 'BMW', 'manual lever', 'Gasoline', '2024-02-14', '700 DH', '600 DH', 'image/kisspng-2017-bmw-m3-2018-bmw-m3-car-bmw-x6-bmw-m3-png-clipart-5a7a261ad5a4f9.1150222315179545868751.png', 'White', '1000 KM'),
('f121/342/222', '2020-04-14', '250', 'Audi_A3', 'manual lever', 'diesel', '2024-07-14', '60DH', '40', 'image/kisspng-audi-rs-6-audi-rs6-audi-a6-car-audi-5abf3cdcd2ceb1.7644250615224823968635.png', 'Red', '1000 KM'),
('f121/342/33', '2019-03-14', '250 000 DH', 'Audi', 'automatic', 'diesel', '2024-06-14', '700 DH', '600 DH', 'image/kisspng-2015-audi-s5-audi-rs5-car-2016-audi-s5-5b6897f40b7685.157663721533581300047 (1).png', 'Black', '1000 KM'),
('f121/342/34', '2020-02-14', '200 000 DH', 'Polo', 'automatic', 'diesel', '2025-02-14', '600DH', '500 DH', 'image/kisspng-car-volkswagen-polo-1-0-mpi-48kw-trendline-bmt-vol-vw-polo-5b16bb1055e220.0857038815282163363518.png', 'blue', '1000 KM'),
('f121/342/3490', '2021-07-09', '1 000 000 D', 'Mercedes-G-Class', 'automatic', 'diesel', '2024-11-14', '1 500 DH', '1 200 DH', 'image/5a2192e194e886.5754760515121497296099.png', 'Black', '1000 KM'),
('f121/342/35', '2021-02-14', '1 000 000 D', 'Mercedes-G-Class', 'automatic', 'diesel', '2021-07-15', '1 500 DH', '1 200 DH', 'image/5a34d330683f31.650681091513411376427.png', 'Black', '1000 KM'),
('f121/342/39', '2019-06-14', '250 000 DH', 'Range-Rover', 'automatic', 'diesel', '2023-02-15', '1 500 DH', '1 200 DH', 'image/kisspng-2015-land-rover-range-rover-sport-2017-land-rover-land-rover-range-rover-blue-car-5a74884e776783.7279320115175865104891.png', 'blue', '1000 KM'),
('f121/342/88', '2020-02-14', '270 000 DH', 'Mercedes-S-Class', 'automatic', 'Gasoline', '2024-06-14', '1 500 DH', '1 200 DH', 'image/kisspng-2017-mercedes-benz-s-class-convertible-car-interna-silver-mercedes-benz-s-class-cabriolet-car-5a751d08e11a44.952095491517624584922.png', 'Grise', '1000 KM');

-- --------------------------------------------------------

--
-- Table structure for table `car_drain`
--

CREATE TABLE `car_drain` (
  `Id_Drain` int(11) NOT NULL,
  `Date_Of_Operation` date DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Company_Phone` varchar(255) NOT NULL,
  `Price_Total` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_drain`
--

INSERT INTO `car_drain` (`Id_Drain`, `Date_Of_Operation`, `Company_Name`, `Company_Phone`, `Price_Total`, `Species`, `Registration_Number`) VALUES
(1, '2021-07-21', 'nejma', '023537657645', '2000dh', 'qq', 'f121/342/33');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE `expenditure` (
  `Id_Expenditure` int(11) NOT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Company_Phone` varchar(20) NOT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL,
  `Mark` varchar(20) NOT NULL,
  `Image_Car` varchar(255) NOT NULL,
  `Price` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `Id_Insurance` int(11) NOT NULL,
  `Date_Of_Operation` date DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Company_Phone` varchar(255) NOT NULL,
  `Date_Start` date DEFAULT NULL,
  `Date_End` date DEFAULT NULL,
  `Price_Total` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`Id_Insurance`, `Date_Of_Operation`, `Company_Name`, `Company_Phone`, `Date_Start`, `Date_End`, `Price_Total`, `Species`, `Registration_Number`) VALUES
(1, '2021-07-18', 'nejma', '023537657645', '2021-07-26', '2021-07-24', '2000dh', 'qq', 'f121/342/33'),
(2, '2021-07-18', 'nejma', '023537657645', '2021-07-19', '2021-07-22', '2000dh', 'qq', 'f121/342/222'),
(3, '2021-07-29', 'qq', '023537657645', '2021-07-27', '2021-07-29', '20dh', 'qq', 'f121/342/222'),
(4, '2021-07-29', 'qq', 'qq', '2021-07-26', '2021-07-27', '20dh', 'qq', 'f121/342/222'),
(5, '2021-07-30', 'qq', 'qq', '2021-07-29', '2021-07-27', '2000dh', 'qq', 'f121/342/222');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Id_Res` int(11) NOT NULL,
  `First_Name` char(20) DEFAULT NULL,
  `Last_Name` char(20) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `CIN` varchar(20) DEFAULT NULL,
  `Image_Client` varchar(255) NOT NULL,
  `Mark` varchar(20) DEFAULT NULL,
  `Date_Start` datetime DEFAULT NULL,
  `Date_End` datetime DEFAULT NULL,
  `Car_Image` varchar(250) DEFAULT NULL,
  `Price_Total` varchar(250) DEFAULT NULL,
  `Rigestration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Id_Res`, `First_Name`, `Last_Name`, `Phone`, `CIN`, `Image_Client`, `Mark`, `Date_Start`, `Date_End`, `Car_Image`, `Price_Total`, `Rigestration_Number`) VALUES
(52, 'soulayman', 'ehmidan', '+212 62 758 4621', 'BS2763523', 'image/SOULAYMAN.png', 'Audi_A3', '2021-07-26 19:40:00', '2021-07-30 19:40:00', 'image/kisspng-audi-rs-6-audi-rs6-audi-a6-car-audi-5abf3cdcd2ceb1.7644250615224823968635.png', '2000dh', 'f121/342/222'),
(55, 'soulayman', 'ehmidan', '+212 62 758 4621', 'BS2763523', 'image/SOULAYMAN.png', 'Polo', '2021-07-29 12:21:00', '2021-07-31 12:21:00', 'image/kisspng-car-volkswagen-polo-1-0-mpi-48kw-trendline-bmt-vol-vw-polo-5b16bb1055e220.0857038815282163363518.png', '600', 'f121/342/11');

-- --------------------------------------------------------

--
-- Table structure for table `visit_tech`
--

CREATE TABLE `visit_tech` (
  `Id_Visit` int(11) NOT NULL,
  `Date_Of_Operation` date DEFAULT NULL,
  `Company_Name` varchar(20) DEFAULT NULL,
  `Company_Phone` varchar(255) NOT NULL,
  `Price_Total` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visit_tech`
--

INSERT INTO `visit_tech` (`Id_Visit`, `Date_Of_Operation`, `Company_Name`, `Company_Phone`, `Price_Total`, `Species`, `Registration_Number`) VALUES
(1, '2021-07-26', 'nejma', '023537657645', '2000dh', 'qq', 'f121/342/34');

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
  MODIFY `Id_Drain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `Id_Expenditure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `Id_Insurance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id_Res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `visit_tech`
--
ALTER TABLE `visit_tech`
  MODIFY `Id_Visit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  ADD CONSTRAINT `expenditure_ibfk_1` FOREIGN KEY (`Registration_Number`) REFERENCES `cars` (`Registration_Number`) ON DELETE CASCADE ON UPDATE CASCADE;

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
