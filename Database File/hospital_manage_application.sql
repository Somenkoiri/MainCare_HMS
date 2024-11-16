-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 08:23 AM
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
-- Database: `hospital_manage_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_pass`
--

CREATE TABLE `admin_login_pass` (
  `id` int(3) NOT NULL,
  `user_email` varchar(205) NOT NULL,
  `user_password` varchar(240) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login_pass`
--

INSERT INTO `admin_login_pass` (`id`, `user_email`, `user_password`, `Date`) VALUES
(1, 'somen@gmail.com', '123', '2024-10-03 16:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_db`
--

CREATE TABLE `appointment_db` (
  `id` int(3) NOT NULL,
  `Patient_Name` varchar(205) NOT NULL,
  `Department` varchar(240) NOT NULL,
  `Doctor_Name` varchar(270) NOT NULL,
  `Patient_Address` varchar(400) NOT NULL,
  `Appointment_Date` varchar(40) NOT NULL,
  `Appointment_Time` varchar(60) NOT NULL,
  `Patient_Email` varchar(200) NOT NULL,
  `Patient_Phone` int(20) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `u_gender` varchar(200) NOT NULL,
  `u_Status` varchar(205) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_db`
--

INSERT INTO `appointment_db` (`id`, `Patient_Name`, `Department`, `Doctor_Name`, `Patient_Address`, `Appointment_Date`, `Appointment_Time`, `Patient_Email`, `Patient_Phone`, `Date`, `u_gender`, `u_Status`) VALUES
(5, 'Bunny Kumar', 'cardiology', 'Ram', 'HO-SUKHMANI ORAON KANKE (CT)', '2005-02-05', '20:30', 'bunny@gmail.com', 21021020, '2024-10-05 23:31:13', 'male', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_db`
--

CREATE TABLE `doctor_db` (
  `id` int(3) NOT NULL,
  `pic_user` varchar(800) NOT NULL,
  `doc_name` varchar(240) NOT NULL,
  `doc_email` varchar(270) NOT NULL,
  `doc_dob` varchar(40) NOT NULL,
  `doc_gender` varchar(60) NOT NULL,
  `doc_address` text NOT NULL,
  `doc_phone` int(20) NOT NULL,
  `department` varchar(400) NOT NULL,
  `D_room` varchar(400) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_db`
--

INSERT INTO `doctor_db` (`id`, `pic_user`, `doc_name`, `doc_email`, `doc_dob`, `doc_gender`, `doc_address`, `doc_phone`, `department`, `D_room`, `Date`) VALUES
(12020202, 'imge/pic.png', 'Sk_Somen_koiri', 'sk@gamil.com', '2006-01-07', 'Male', 'HO-SUKHMANI ORAON KANKE (CT)', 12345678, 'Cardiology', 'C-2', '2024-10-05 23:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `employee_db`
--

CREATE TABLE `employee_db` (
  `id` int(3) NOT NULL,
  `Employee_Name` varchar(205) NOT NULL,
  `Gender_user` varchar(240) NOT NULL,
  `Email_user` varchar(270) NOT NULL,
  `Contact_user` int(40) NOT NULL,
  `Join_Date` varchar(280) NOT NULL,
  `Role_user` varchar(200) NOT NULL,
  `Salary_user` int(100) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_db`
--

INSERT INTO `employee_db` (`id`, `Employee_Name`, `Gender_user`, `Email_user`, `Contact_user`, `Join_Date`, `Role_user`, `Salary_user`, `Date`) VALUES
(4, 'Somen', 'Male', 'sk@gmail.com', 21020120, '2024-10-05', 'Worker', 2000, '2024-10-05 23:33:53'),
(5, 'Rk', 'Male', 'rk@gmail.com', 21020120, '2020-12-20', 'Worker', 4000, '2024-10-05 23:42:41');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_db`
--

CREATE TABLE `medicine_db` (
  `id` int(3) NOT NULL,
  `Medicine_Name` varchar(205) NOT NULL,
  `Purchase_Date` varchar(240) NOT NULL,
  `Expiration_Date` varchar(270) NOT NULL,
  `Expiration_End` varchar(259) NOT NULL,
  `Price_user` int(60) NOT NULL,
  `Quantity_user` int(60) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicine_db`
--

INSERT INTO `medicine_db` (`id`, `Medicine_Name`, `Purchase_Date`, `Expiration_Date`, `Expiration_End`, `Price_user`, `Quantity_user`, `Date`) VALUES
(2, 'P-500', '2005-02-20', '2025-02-20', '2528-06-02', 800, 20, '2024-10-05 23:44:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_pass`
--
ALTER TABLE `admin_login_pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_db`
--
ALTER TABLE `appointment_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_db`
--
ALTER TABLE `doctor_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_db`
--
ALTER TABLE `employee_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_db`
--
ALTER TABLE `medicine_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_pass`
--
ALTER TABLE `admin_login_pass`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_db`
--
ALTER TABLE `appointment_db`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_db`
--
ALTER TABLE `doctor_db`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12020204;

--
-- AUTO_INCREMENT for table `employee_db`
--
ALTER TABLE `employee_db`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicine_db`
--
ALTER TABLE `medicine_db`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
