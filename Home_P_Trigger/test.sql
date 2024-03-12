-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 09:12 AM
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
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_company_info` (IN `P_company` VARCHAR(50), IN `P_address` VARCHAR(100), IN `P_phone` VARCHAR(20))   INSERT INTO manufacturer(Company_name,Address,Contract) VALUES(P_company,P_address,P_phone)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `M_id` int(11) NOT NULL,
  `Company_name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contract` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`M_id`, `Company_name`, `Address`, `Contract`) VALUES
(7, 'samsung', 'faridpur', 'sjlsjjsposj'),
(10, 'city', 'bokshibazer', '01985214736'),
(12, 'Nasless', 'Malibag', '01985214736'),
(13, 'Boombee', 'Kakril', '01985214736'),
(15, 'Squre', 'Dhanmondi', '01985214736'),
(16, 'Bashundara', 'ddddd', '23652148'),
(17, 'Akij', 'dkdkdkdk', '54875213'),
(18, 'Navana', 'KawranBazer', '02136547896');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `after_delete_manufacture` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM products WHERE M_id=OLD.M_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `manufacturer_info`
-- (See below for the actual view)
--
CREATE TABLE `manufacturer_info` (
`M_id` int(11)
,`Company_name` varchar(100)
,`Address` varchar(100)
,`Contract` varchar(50)
,`P_id` int(11)
,`P_name` varchar(100)
,`P_price` int(5)
);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_id` int(11) NOT NULL,
  `P_name` varchar(100) NOT NULL,
  `P_price` int(5) NOT NULL,
  `M_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_id`, `P_name`, `P_price`, `M_id`) VALUES
(12, 'Ricecooker', 256000, 7),
(16, 'Suger', 150, 10),
(18, 'chinegura', 230, 12),
(19, 'Biscute', 500, 13);

-- --------------------------------------------------------

--
-- Structure for view `manufacturer_info`
--
DROP TABLE IF EXISTS `manufacturer_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `manufacturer_info`  AS SELECT `manufacturer`.`M_id` AS `M_id`, `manufacturer`.`Company_name` AS `Company_name`, `manufacturer`.`Address` AS `Address`, `manufacturer`.`Contract` AS `Contract`, `products`.`P_id` AS `P_id`, `products`.`P_name` AS `P_name`, `products`.`P_price` AS `P_price` FROM (`manufacturer` join `products`) WHERE `manufacturer`.`M_id` = `products`.`M_id``M_id`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`M_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `M_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
