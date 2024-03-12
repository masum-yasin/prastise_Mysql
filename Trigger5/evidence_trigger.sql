-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 03:55 AM
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
-- Database: `evidence_trigger`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `student_trigger` (IN `p_name` VARCHAR(50), IN `p_email` VARCHAR(50), IN `p_address` VARCHAR(50), IN `p_mobile` INT(11))   INSERT INTO student(Name, Email, Address, Mobile) VALUES(p_name,p_email,p_address,p_mobile)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `res_id` int(11) NOT NULL,
  `Module_Name` varchar(50) DEFAULT NULL,
  `Totalmarks` int(11) NOT NULL,
  `GPA` varchar(10) DEFAULT NULL,
  `st_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`res_id`, `Module_Name`, `Totalmarks`, `GPA`, `st_id`) VALUES
(1, 'HTML', 90, 'A+', 1),
(2, 'CCS', 70, 'A', 2),
(3, 'PHP', 60, 'A-', 3),
(4, 'React', 90, 'B', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `St_id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`St_id`, `Name`, `Email`, `Address`, `Mobile`) VALUES
(1, 'Khayrul Alam Rayan', 'rayan@gmail.com', 'Mirpur', 192036521),
(2, 'Mizanur Raham', 'mizanur@gmail.com', 'Sanarpar', 192036521),
(3, 'kamrul', 'kamrul@gmail.com', 'Paltan', 192036521),
(4, 'Ibrahim', 'Ibrahim@gmail.com', 'Malibag', 192036521),
(7, 'Md Mashum Hossin', 'masum@gmail.com', 'dddddddd', 192036254);

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `student_trigger` AFTER DELETE ON `student` FOR EACH ROW DELETE FROM result WHERE res_id=OLD.St_id
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`St_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `St_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
