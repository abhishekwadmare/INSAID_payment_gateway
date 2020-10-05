-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2020 at 07:00 PM
-- Server version: 5.7.31-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insaid_payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `program` varchar(255) NOT NULL,
  `course_batch` varchar(255) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `name`, `email`, `registration_date`, `program`, `course_batch`, `amount_paid`, `payment_id`, `order_id`) VALUES
(1, 'Abhishek Wadmare', 'abhishek.wadmare@yahoo.com', '2020-10-05 12:41:54', 'Global Certificate in Data Science & AI', '25_October_1005', 300000, 'pay_FlDrDhnTdl32qz', 'order_FlDquVBMxHl7bn'),
(2, 'Shreyas Ikhar', 'shreyas@gmail.com', '2020-10-05 13:27:54', 'Global Certificate in Data Science & AI', '25_October_1005', 300000, 'pay_FlEhhJPKww5IkW', 'order_FlEh6fx9CcZd4m'),
(3, 'Gautam Helange', 'gautam@hotmail.com', '2020-10-05 13:29:35', 'Certificate in Data Science Foundation', '25_October_1005', 300000, 'pay_FlEjWc8oQziEgZ', 'order_FlEj9iLF3bFjLv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
