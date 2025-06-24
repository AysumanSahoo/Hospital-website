-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2024 at 03:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `Patient_Name` varchar(30) NOT NULL,
  `Doctor` varchar(30) NOT NULL,
  `Phone_No` varchar(30) NOT NULL,
  `Email_ID` varchar(30) NOT NULL,
  `Select_Date` date NOT NULL,
  `gender` set('Male','Female','Others') NOT NULL,
  `Select_Time` time NOT NULL,
  `prescription` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `Patient_Name`, `Doctor`, `Phone_No`, `Email_ID`, `Select_Date`, `gender`, `Select_Time`, `prescription`) VALUES
(3, 'bharti Gole', 'Dr.shivam Jain,Cardiology', '8518899689', 'bhartigole.mailbox@gmail.com', '2024-11-14', 'Female', '20:49:00', 'pcm'),
(4, 'bharti Gole', 'Dr.shivam Jain,Cardiology', '8518899689', 'bhartigole.mailbox@gmail.com', '2024-11-20', 'Female', '02:46:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
