-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 12:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `age` int(11) NOT NULL,
  `school` text NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(30) NOT NULL,
  `fee` double NOT NULL,
  `semester` int(11) NOT NULL,
  `product` text NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `Fname`, `Lname`, `age`, `school`, `gender`, `course`, `fee`, `semester`, `product`, `quantity`, `price`, `total`) VALUES
(2, 'mambo', 'ramah', 22, 'mku', 'male', 'BIT', 3, 3, '', 0, 0, 0),
(3, 'remmy', 'malone', 23, 'mount kenya', 'male', 'BIT', 50000, 1, '', 0, 0, 0),
(4, 'remmy', 'malone', 23, 'mount kenya', 'male', 'BIT', 50000, 1, '', 0, 0, 0),
(15, 'marimar', 'hussein', 30, 'agha khan', 'female', 'BIT', 50000, 4, 'Computer', 6, 7000, 42000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
