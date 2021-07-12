-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 11:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_grocery_delivery_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Name`, `Email`, `Phone_Number`, `Message`) VALUES
('Resaa Kei', 'resindukavinda99@gmail.com', 714813649, 'ABCDEFG'),
('Era Rusi', 'roshanie101@gmail.com', 714813649, 'Obata sathutuida dan'),
('Resaa Kei', 'roshanie242@gmail.com', 714813649, 'ABCDEFG');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registration`
--

CREATE TABLE `customer_registration` (
  `User_ID` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_registration`
--

INSERT INTO `customer_registration` (`User_ID`, `First_Name`, `Last_Name`, `Gender`, `Date_of_Birth`, `Phone_Number`, `Address`, `Email`, `User_Name`, `Password`) VALUES
(2, 'Resi', 'Kavinda', 'Male', '2020-10-23', 771995163, '                    544444444445', 'resindukavinda99@gmail.com', 'resa', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `driver_registration`
--

CREATE TABLE `driver_registration` (
  `Driver_Name` varchar(100) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Vehicle_Type` varchar(20) NOT NULL,
  `Driver_Email` varchar(100) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Driver_Licence_Number` varchar(100) NOT NULL,
  `Vehicle_Registration_Number` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver_registration`
--

INSERT INTO `driver_registration` (`Driver_Name`, `Address`, `Vehicle_Type`, `Driver_Email`, `Phone_Number`, `Driver_Licence_Number`, `Vehicle_Registration_Number`, `Password`) VALUES
('modaya', 'mjbh', 'bike', 'it20204952@my.sliit.lk', 771995163, 'vgagvks', '6598', '123456'),
('Resi', '                    slkjihuy', 'bike', 'resindukavi99@gmail.com', 771995163, 'vgagvks', '992300728v', '19990817');

-- --------------------------------------------------------

--
-- Table structure for table `shop_registration`
--

CREATE TABLE `shop_registration` (
  `Grocery_Name` varchar(100) NOT NULL,
  `Grocery_Owners_Name` varchar(100) NOT NULL,
  `Grocery_Email` varchar(50) NOT NULL,
  `Grocery_Address` varchar(1000) NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Grocery_Registration_No` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_registration`
--

INSERT INTO `shop_registration` (`Grocery_Name`, `Grocery_Owners_Name`, `Grocery_Email`, `Grocery_Address`, `Phone_Number`, `Grocery_Registration_No`, `Password`) VALUES
('Laksala', 'saman', 'it20204952@my.sliit.lk', '77/D/1,Yakkala.', 771995163, '99956258', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `customer_registration`
--
ALTER TABLE `customer_registration`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `driver_registration`
--
ALTER TABLE `driver_registration`
  ADD PRIMARY KEY (`Vehicle_Registration_Number`);

--
-- Indexes for table `shop_registration`
--
ALTER TABLE `shop_registration`
  ADD PRIMARY KEY (`Grocery_Registration_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_registration`
--
ALTER TABLE `customer_registration`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
