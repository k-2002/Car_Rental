-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 12:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(100) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(3, 'kiran', '111'),
(4, 'mahavir', 'm001');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(100) NOT NULL,
  `bookingno` bigint(12) DEFAULT NULL,
  `vehicleid` int(11) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `pickdate` varchar(20) NOT NULL,
  `dropdate` varchar(20) NOT NULL,
  `picktime` varchar(20) NOT NULL,
  `droptime` varchar(20) NOT NULL,
  `adharcard` varchar(350) NOT NULL,
  `driving_licence` varchar(350) NOT NULL,
  `vtitle` varchar(50) NOT NULL,
  `vhimage` varchar(100) NOT NULL,
  `vprice` int(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `LastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(30) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand_name`, `creationdate`) VALUES
(1, 'BMW', '2023-01-18 13:51:57'),
(4, 'KIA', '2023-01-23 13:35:49'),
(6, 'TOYOTA', '2023-01-23 13:36:27'),
(7, 'MAHINDRA', '2023-01-25 16:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `c_id` int(11) NOT NULL,
  `car_name` varchar(20) NOT NULL,
  `Brand` varchar(30) DEFAULT NULL,
  `price_day` int(20) NOT NULL,
  `fuel_type` varchar(20) NOT NULL,
  `seats` int(10) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `milage` int(20) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `luggage` int(10) NOT NULL,
  `aircondition` int(10) NOT NULL,
  `audio_input` int(10) NOT NULL,
  `car_kit` int(10) NOT NULL,
  `child_seat` int(10) NOT NULL,
  `bluethooth` int(10) NOT NULL,
  `music` int(10) NOT NULL,
  `powerdoorlocks` int(10) NOT NULL,
  `seat_belt` int(2) NOT NULL,
  `onboard_computer` int(10) NOT NULL,
  `remote_lock` int(10) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`c_id`, `car_name`, `Brand`, `price_day`, `fuel_type`, `seats`, `image1`, `image2`, `image3`, `image4`, `milage`, `transmission`, `luggage`, `aircondition`, `audio_input`, `car_kit`, `child_seat`, `bluethooth`, `music`, `powerdoorlocks`, `seat_belt`, `onboard_computer`, `remote_lock`, `description`) VALUES
(1, 'BALENO 2022', 'Maruti Suzuki', 2000, 'Desal', 5, 'dist/images/baleno1.jpg', 'dist/images/baleno_steering.jpg', 'dist/images/baleno_seats.jpg', 'dist/images/', 15, 'Manual', 4, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, ''),
(2, 'i20 2020', 'Hyundai', 1500, 'Desal', 4, 'dist/images/i20.jpg', 'dist/images/i20_seats.jpg', 'dist/images/i20_back.jpg', 'dist/images/', 15, 'Manual', 4, 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, ''),
(3, 'THAR 2020', 'Mahindra', 2500, 'Desal', 4, 'dist/images/thar.jpg', 'dist/images/thar_staring.jpeg', 'dist/images/Thar_back.jpg', 'dist/images/', 5, 'Manual', 4, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, ''),
(4, 'TIAGO 2021', 'TATA', 2000, 'Petrol', 4, 'dist/images/tiago.jpg', 'dist/images/tiago_3.jpg', 'dist/images/tiago2.jpeg', 'dist/images/tiago_4.jpg', 10, 'Manual', 2, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, ''),
(5, 'SWIFT 20022', 'Maruti Suzuki', 2200, 'Petrol', 4, 'dist/images/swift.jpg', 'dist/images/swift_2.jpg', 'dist/images/swift_3.jpg', 'dist/images/', 15, 'Manual', 4, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, ''),
(6, 'NEXON 2022', 'TATA', 2300, 'Desal', 4, 'dist/images/nexon.jpg', 'dist/images/nexon_2.jpg', 'dist/images/nexon_3.jpg', 'dist/images/nexon_4.jpg', 10, 'Manual', 4, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, ''),
(7, 'KIA 2020', 'Hyundia', 2000, 'Desal', 4, 'dist/images/kia.jpg', 'dist/images/kia_2.jpeg', 'dist/images/kia_3.jpg', 'dist/images/', 15, 'Manual', 2, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, ''),
(8, 'INNOVA  2020', 'Toyota', 2000, 'Desal', 4, 'dist/images/enova.jpg', 'dist/images/enova_2.jpg', 'dist/images/enova_3.jpg', 'dist/images/', 12, 'Manual', 6, 0, 1, 0, 1, 1, 0, 1, 0, 0, 0, ''),
(9, 'TOOFAN 2019', 'Force', 1500, 'Petrol', 8, 'dist/images/force.jpg', 'dist/images/force_2.jpg', 'dist/images/force_3.jpg', 'dist/images/', 20, 'Manual', 4, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, ''),
(10, 'ETIOS 2018', 'Toyota', 1500, 'Desal', 4, 'dist/images/etios.jpg', 'dist/images/etios_3.jpg', 'dist/images/etios_2.jpg', 'dist/images/', 15, 'Manual', 2, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, ''),
(11, 'ECO 2022', 'Maruti Suzuki', 2000, 'Petrol', 8, 'dist/images/eco.jpg', 'dist/images/eco_2.jpg', 'dist/images/echo_3.jpg', 'dist/images/', 20, 'Manual', 4, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'viren', 'viren05@gmail.com', 'add cars', 'add more cars like mustange,ferari etc...\r\nthank you..'),
(2, 'pushpa', 'pushpa01@gmail.com', 'thank you .', 'thank you .....');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mo` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `mo`, `email`, `password`, `c_password`) VALUES
(31, 'sunny', 1234567890, 's@gmail.com', '1', '1'),
(32, 'otis', 4586932170, 'o@gmail.com', '145', '145'),
(37, 'Mahavir', 9499761910, 'devlukmahavir@gmail.com', '143', '143');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
