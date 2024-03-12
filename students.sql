-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2023 at 12:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idb_bisew_wdpf55`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `dob` date NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Batch` varchar(20) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `hobbies` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `Gender`, `dob`, `Email`, `Batch`, `Address`, `hobbies`) VALUES
(5, 'Khayrul alam rayan', 'Male', '2023-08-10', 'rayan@gamil.com', 'JAVA_50', 'Motijheel', ''),
(6, 'Alluaddhin', 'Male', '2023-08-24', 'rayan@gmail.com', 'JAVA_50', 'Bashundara', 'Music'),
(8, 'mizzan', 'Male', '2023-08-26', 'm@gmail.com', 'JAVA_50', 'Bashundara', 'Batminton'),
(9, 'Sultana Nadia', 'Female', '2023-08-24', 'nadia@gmail.com', '.NET_55', 'kawran Bazer', 'Tenis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
