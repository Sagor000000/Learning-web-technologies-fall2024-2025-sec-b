-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 09:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(20) NOT NULL,
  `password` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `code` int(6) NOT NULL,
  `phone` text NOT NULL,
  `role` varchar(30) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `email`, `code`, `phone`, `role`, `address`) VALUES
('Yash', 12345, 'yash@gmail.com', 123456, '01738360522', 'Administrator', 'Banani'),
('Rohan', 12345, 'rohan@gmail.com', 654321, '01834070547', 'Controller', 'Mirpur ');

-- --------------------------------------------------------

--
-- Table structure for table `bookroom`
--

CREATE TABLE `bookroom` (
  `bid` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `bedtype` varchar(50) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookroom`
--

INSERT INTO `bookroom` (`bid`, `username`, `email`, `phone`, `bedtype`, `roomtype`, `price`) VALUES
(1, 'mr sarker', 'sarker@gmail.com', 123, 'Double', 'Single', '1500'),
(2, 'mr sarker', 'sarker@gmail.com', 34224, 'Double', 'Single', '1500'),
(3, 'mr sarker', 'sarker@gmail.com', 123, 'Double', 'Luxury', '5000');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(30) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `bed_type` varchar(30) NOT NULL,
  `room_price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_type`, `bed_type`, `room_price`) VALUES
(4, 'Single', 'Double', '1500'),
(5, 'Double', 'Single', '3000'),
(6, 'Luxury', 'Double', '5000'),
(12, 'Luxury', 'Single', '6500');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(50) NOT NULL,
  `feedback_email` varchar(50) NOT NULL,
  `booking_email` varchar(50) NOT NULL,
  `transportation_type` varchar(20) NOT NULL,
  `discounts` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `feedback_email`, `booking_email`, `transportation_type`, `discounts`) VALUES
(3, 'feedback@gmail.com', 'booking@gmail.com', 'Bus', '33%'),
(7, 'dbc@gmail.com', 'abc@gmail.com', 'Bus', '56%');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `age`, `role`) VALUES
(5, 'Rahul', 30, 'Supervisor'),
(6, 'Virat', 35, 'Manager'),
(8, 'Dhoni', 42, 'Guard'),
(9, 'Rohit', 35, 'Cleaner'),
(10, 'Sakib', 34, 'Cook'),
(17, 'Rohan', 24, 'Owner'),
(24, 'Yash ', 23, 'Supervisor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `blood_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `dob`, `phone`, `gender`, `blood_group`) VALUES
(1, 'MS Dhoni', '1234', 'dhoni@gmail.com', '2024-04-03', 1738360521, 'male', 'B-'),
(2, 'Virat Kholi', '1234', 'virat@gmail.com', '2024-04-03', 1788899845, 'male', 'A-'),
(6, 'Rohit Sharma', '1234', 'rohit@gmail.com', '2024-04-10', 1738360522, 'male', 'A+'),
(7, 'mr sarker', '123', 'sarker@gmail.com', '2024-12-29', 123, 'male', 'A+'),
(8, 'mr sarker', '1234', 'sarker@gmail.com', '2025-01-04', 1234, 'male', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookroom`
--
ALTER TABLE `bookroom`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookroom`
--
ALTER TABLE `bookroom`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
