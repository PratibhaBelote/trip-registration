-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 03:36 PM
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
-- Database: `project4`
--

-- --------------------------------------------------------

--
-- Table structure for table `travller`
--

CREATE TABLE `travller` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `departure_date` varchar(255) NOT NULL,
  `num_of_travelers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travller`
--

INSERT INTO `travller` (`id`, `name`, `email`, `phone`, `destination`, `departure_date`, `num_of_travelers`) VALUES
(1, 'Pratibha Belote', 'pratibhabelote458@gmail.com', '09373313994', 'shimala', '03-1-2026', 2),
(5, 'NANA', 'nana@gmail.com', '9922830859', 'Himalaya', '02-02-2024', 0),
(7, 'sumit', 'ram123@gmail.com', '2356897415', 'Delhi', '06-5-2027', 3),
(8, 'Snehal Shinde', 'Snehal123@gmail.com', '1030205040', 'Chennai', '02-01-2034', 0),
(9, 'Sangita Belote', 'sangita123@gmail.com', '7057214107', 'Ujjain', '04-24-2024', 50),
(10, 'arjun', 'arjun@gmail.com', '8956547821', 'uttur', '04-02-2024', 0),
(11, 'krishna ', 'vasudev@gmail.com', '2222222222', 'dwarka', '08-7-2028', 8),
(12, 'Radha', 'radha@gmail.com', '8965741425', 'mathure', '02-04-2025', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travller`
--
ALTER TABLE `travller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travller`
--
ALTER TABLE `travller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
