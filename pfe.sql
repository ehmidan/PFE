-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 06:20 PM
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
('f121/342/222', '2020-04-14', '250 000 DH', 'Audi_A3', 'manual lever', 'diesel', '2024-07-14', '600DH', '500 DH', 'image/kisspng-audi-rs-6-audi-rs6-audi-a6-car-audi-5abf3cdcd2ceb1.7644250615224823968635.png', 'Red', '1000 KM'),
('f121/342/32', '2019-06-14', '270 000 DH', 'BMW', 'automatic', 'diesel', '2021-07-15', '700 DH', '600 DH', 'image/kisspng-bmw-x6-car-bmw-x7-bmw-1-series-bmw-x6-png-clipart-5a777a0e376162.8385051215177794702269.png', '', '1000 KM'),
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
  `Price_Total` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `CIN` varchar(20) DEFAULT NULL,
  `Image_Client` varchar(255) DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Date_Start` date DEFAULT NULL,
  `Date_End` date DEFAULT NULL,
  `Price_Total` varchar(20) DEFAULT NULL,
  `Species` varchar(250) DEFAULT NULL,
  `Registration_Number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regester`
--

CREATE TABLE `regester` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `GroupId` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regester`
--

INSERT INTO `regester` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `confirm`, `GroupId`) VALUES
(84, 'soulayman', 'ehmidan', '07353762323', 'ehmidan.soulayman.solicode@gmail.com', '$2y$10$vjK1s3jWLzBc50ShQF5TnOA3kP7tBPW7Zi44vmxBIFyS7JBrTLymi', '$2y$10$Lfhrw4t09jHsf/Ci5MhGyepCnqCUnPcqzyYIzzv8Xi00cz4S5lc4e', 1);

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
(45, 'soulayman', 'ehmidan', '+212 62 758 4621', 'f121/342/11	', 'image/Layer 6.png', 'BMW', '2021-07-18 23:43:00', '2021-07-20 23:43:00', 'image/kisspng-2017-bmw-m3-2018-bmw-m3-car-bmw-x6-bmw-m3-png-clipart-5a7a261ad5a4f9.1150222315179545868751.png', '2000dh', 'f121/342/11'),
(46, 'soulayman', 'ehmidan', '+212 62 758 4621', 'f121/342/11	', 'image/Layer 6.png', 'BMW', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'image/kisspng-bmw-x6-car-bmw-x7-bmw-1-series-bmw-x6-png-clipart-5a777a0e376162.8385051215177794702269.png', '2000dh', 'f121/342/222'),
(47, 'soulayman', 'ehmidan', '+212 62 758 4621', 'BS2763523', 'image/SOULAYMAN.png', 'Audi_A3', '2021-07-20 16:48:00', '2021-07-24 16:48:00', 'image/kisspng-audi-rs-6-audi-rs6-audi-a6-car-audi-5abf3cdcd2ceb1.7644250615224823968635.png', '2000dh', 'f121/342/222');

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
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`),
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
-- Indexes for table `regester`
--
ALTER TABLE `regester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenditure`
--
ALTER TABLE `expenditure`
  MODIFY `Id_Expenditure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `Id_Insurance` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regester`
--
ALTER TABLE `regester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id_Res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`Registration_Number`) REFERENCES `cars` (`Registration_Number`);

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
