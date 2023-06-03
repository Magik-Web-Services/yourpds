-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2023 at 08:34 AM
-- Server version: 10.4.28-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebalafpv_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `yourpds_data`
--

CREATE TABLE `yourpds_data` (
  `sno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `generation` varchar(255) NOT NULL,
  `model_number` varchar(255) NOT NULL,
  `yourpds` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `yourpds_data`
--

INSERT INTO `yourpds_data` (`sno`, `name`, `model`, `generation`, `model_number`, `yourpds`) VALUES
(1, 'ipad', 'ipad', '10th gen', 'A2601', 'Selected'),
(2, 'ipad', 'ipad', '10th gen', 'A2602', 'Selected'),
(3, 'ipad', 'ipad', '10th gen', 'A2696', ''),
(4, 'ipad', 'ipad', '10th gen', 'A2757', ''),
(5, 'ipad', 'ipad', '10th gen', 'A2777', ''),
(6, 'ipad', 'ipad', '9th gen', 'A2567', 'Selected'),
(7, 'ipad', 'ipad', '9th gen', 'A2568', 'Selected'),
(8, 'ipad', 'ipad', '9th gen', 'A2602', ''),
(9, 'ipad', 'ipad', '9th gen', 'A2604', ''),
(10, 'ipad', 'ipad', '9th gen', 'A2603', ''),
(11, 'ipad', 'ipad', '9th gen', 'A2605', ''),
(12, 'ipad', 'ipad', '8th gen', 'A2270', 'Selected'),
(13, 'ipad', 'ipad', '8th gen', 'A2270', 'Selected'),
(14, 'ipad', 'ipad', '8th gen', 'A2428', 'Selected'),
(15, 'ipad', 'ipad', '8th gen', 'A2429', 'Selected'),
(16, 'ipad', 'ipad', '8th gen', 'A2430', 'Selected'),
(17, 'ipad', 'ipad', '7th gen', 'A2197', 'Selected'),
(18, 'ipad', 'ipad', '7th gen', 'A2200', 'Selected'),
(19, 'ipad', 'ipad', '7th gen', 'A2198', 'Selected'),
(20, 'ipad', 'ipad', '6th gen', 'A1893', 'Selected'),
(21, 'ipad', 'ipad', '6th gen', 'A1954', 'Selected'),
(22, 'ipad', 'ipad', '5th gen', 'A1822', 'Selected'),
(23, 'ipad', 'ipad', '5th gen', 'A1823', 'Selected'),
(24, 'ipad', 'ipad', '4th gen', 'A1458', 'Selected'),
(25, 'ipad', 'ipad', '4th gen', 'A1459', 'Selected'),
(26, 'ipad', 'ipad', '4th gen', 'A1460', 'Selected'),
(27, 'ipad', 'ipad', '3rd gen', 'A1416', 'Selected'),
(28, 'ipad', 'ipad', '3rd gen', 'A1430', 'Selected'),
(29, 'ipad', 'ipad', '3rd gen', 'A1403', 'Selected'),
(30, 'ipad', 'ipad', '2nd gen', 'A1395', 'Selected'),
(31, 'ipad', 'ipad', '2nd gen', 'A1396', 'Selected'),
(32, 'ipad', 'ipad', '2rd gen', 'A1397', 'Selected'),
(33, 'ipad', 'ipad', '1st gen', 'A1219', 'Selected'),
(34, 'ipad', 'ipad', '1st gen', 'A1337', 'Selected'),
(35, 'ipad', 'mini', '6nd gen', 'A2567', ''),
(36, 'ipad', 'mini', '6th gen', 'A2568', ''),
(37, 'ipad', 'mini', '6th gen', 'A2569', ''),
(38, 'ipad', 'mini', '5th gen', 'A2133', 'Selected'),
(39, 'ipad', 'mini', '5th gen', 'A2126', 'Selected'),
(40, 'ipad', 'mini', '5th gen', 'A2125', 'Selected'),
(41, 'ipad', 'mini', '5th gen', 'A2124', 'Selected'),
(42, 'ipad', 'mini', '4th gen', 'A1538', 'Selected'),
(43, 'ipad', 'mini', '4th gen', 'A1550', 'Selected'),
(44, 'ipad', 'mini', '3rd gen', 'A1599', 'Selected'),
(45, 'ipad', 'mini', '3rd gen', 'A1600', 'Selected'),
(46, 'ipad', 'mini', '2nd gen', 'A1489', 'Selected'),
(47, 'ipad', 'mini', '2nd gen', 'A1490', 'Selected'),
(48, 'ipad', 'mini', '2nd gen', 'A1491', 'Selected'),
(49, 'ipad', 'mini', '1st gen', 'A1432', 'Selected'),
(50, 'ipad', 'mini', '1st gen', 'A1454', 'Selected'),
(51, 'ipad', 'mini', '1st gen', 'A1455', 'Selected'),
(52, 'ipad', 'air', '5th gen', 'A2588', ''),
(53, 'ipad', 'air', '5th gen', 'A2589', ''),
(54, 'ipad', 'air', '5th gen', 'A2591', ''),
(55, 'ipad', 'air', '4th gen', 'A2072', 'Selected'),
(56, 'ipad', 'air', '4th gen', 'A2316', 'Selected'),
(57, 'ipad', 'air', '4th gen', 'A2324', 'Selected'),
(58, 'ipad', 'air', '4th gen', 'A2325', 'Selected'),
(59, 'ipad', 'air', '3rd gen', 'A2152', 'Selected'),
(60, 'ipad', 'air', '3rd gen', 'A2123', 'Selected'),
(61, 'ipad', 'air', '3rd gen', 'A2153', 'Selected'),
(62, 'ipad', 'air', '3rd gen', 'A2154', 'Selected'),
(63, 'ipad', 'air', '2nd gen', 'A1566', 'Selected'),
(64, 'ipad', 'air', '2nd gen', 'A1567', 'Selected'),
(65, 'ipad', 'air', '1st gen', 'A1474', ''),
(66, 'ipad', 'air', '1st gen', 'A1475', ''),
(67, 'ipad', 'air', '1st gen', 'A1476', ''),
(68, 'ipad', 'pro 12.9', '6th gen', 'A2436', ''),
(69, 'ipad', 'pro 12.9', '6th gen', 'A2764', ''),
(70, 'ipad', 'pro 12.9', '6th gen', 'A2437', ''),
(71, 'ipad', 'pro 12.9', '6th gen', 'A2766', ''),
(72, 'ipad', 'pro 12.9', '5th gen', 'A2378', ''),
(73, 'ipad', 'pro 12.9', '5th gen', 'A2461', ''),
(74, 'ipad', 'pro 12.9', '5th gen', 'A2379', ''),
(75, 'ipad', 'pro 12.9', '5th gen', 'A2362', ''),
(76, 'ipad', 'pro 12.9', '4th gen', 'A2229', 'Selected'),
(77, 'ipad', 'pro 12.9', '4th gen', 'A2069', 'Selected'),
(78, 'ipad', 'pro 12.9', '4th gen', 'A2232', 'Selected'),
(79, 'ipad', 'pro 12.9', '4th gen', 'A2233', 'Selected'),
(80, 'ipad', 'pro 12.9', '3rd gen', 'A1876', 'Selected'),
(81, 'ipad', 'pro 12.9', '3rd gen', 'A2014', 'Selected'),
(82, 'ipad', 'pro 12.9', '3rd gen', 'A1895', 'Selected'),
(83, 'ipad', 'pro 12.9', '3rd gen', 'A1983', 'Selected'),
(84, 'ipad', 'pro 12.9', '2nd gen', 'A1670', 'Selected'),
(85, 'ipad', 'pro 12.9', '2nd gen', 'A1671', 'Selected'),
(86, 'ipad', 'pro 12.9', '2nd gen', 'A1821', 'Selected'),
(87, 'ipad', 'pro 12.9', '1st gen', 'A1584', 'Selected'),
(88, 'ipad', 'pro 12.9', '1st gen', 'A165', 'Selected'),
(89, 'ipad', 'pro 12.9', '1nd gen', 'A1652', ''),
(90, 'ipad', 'pro 11', '4th gen', 'A2759', ''),
(91, 'ipad', 'pro 11', '4th gen', 'A2435', ''),
(92, 'ipad', 'pro 11', '4th gen', 'A2761', ''),
(93, 'ipad', 'pro 11', '4th gen', 'A2762', ''),
(94, 'ipad', 'pro 11', '3rd gen', 'A2377', 'Selected'),
(95, 'ipad', 'pro 11', '3rd gen', 'A2459', 'Selected'),
(96, 'ipad', 'pro 11', '3rd gen', 'A2460', 'Selected'),
(97, 'ipad', 'pro 11', '3rd gen', 'A2301', 'Selected'),
(98, 'ipad', 'pro 11', '2nd gen', 'A2228', 'Selected'),
(99, 'ipad', 'pro 11', '2nd gen', 'A2068', 'Selected'),
(100, 'ipad', 'pro 11', '2nd gen', 'A2230', 'Selected'),
(101, 'ipad', 'pro 11', '2nd gen', 'A2231', 'Selected'),
(102, 'ipad', 'pro 11', '1st gen', 'A1980', 'Selected'),
(103, 'ipad', 'pro 11', '1st gen', 'A2013', 'Selected'),
(104, 'ipad', 'pro 11', '1st gen', 'A1934', 'Selected'),
(105, 'ipad', 'pro 11', '1st gen', 'A1979', 'Selected'),
(106, 'ipad', 'pro 10.5', '', 'A1701', 'Selected'),
(107, 'ipad', 'pro 10.5', '', 'A1709', 'Selected'),
(108, 'ipad', 'pro 10.5', '', 'A1852', ''),
(109, 'ipad', 'pro 9.7', '', 'A1673', 'Selected'),
(110, 'ipad', 'pro 9.7', '', 'A1674', 'Selected'),
(111, 'ipad', 'pro 9.7', '', 'A1675', 'Selected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yourpds_data`
--
ALTER TABLE `yourpds_data`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yourpds_data`
--
ALTER TABLE `yourpds_data`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
