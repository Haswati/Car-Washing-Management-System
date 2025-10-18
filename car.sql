-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 05:45 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `order_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cid`, `pid`, `order_time`) VALUES
(1, 1, 4, '1726643376'),
(2, 1, 3, '1726643539'),
(3, 2, 3, '1726644164'),
(4, 3, 5, '1727499549'),
(5, 3, 5, '1727634747'),
(6, 3, 5, '1727634761'),
(7, 3, 7, '1727634767');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`) VALUES
(7, 'Interior'),
(10, 'Engine'),
(11, 'Film'),
(12, 'Detailing');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `cname`, `pname`, `price`, `description`, `image`) VALUES
(5, 'Engine', 'Engine Repair', 10000, 'Hebby engine', '1727499538th.jpeg'),
(6, 'Interior', 'Interior Decoration', 5000, 'Try it', '1727499613th (1).jpeg'),
(7, 'Film', 'PPF Protection', 2000, 'Safe your car', '1727499666car-protection-film-min.jpg'),
(8, 'Detailing', 'Full Detailing', 4500, 'Save your car', '1727499724car-detailing-guide.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone_no`) VALUES
(1, 'jack', '12345', 'jack@gmail.com', '877098'),
(2, 'jhon', '12345', 'jhon@gmail.com', '06798'),
(3, 'kunu', '12345', 'shreejanimanna03@gmail.com', '455656565656'),
(4, 'kkjfj', '123345', 'shreejanimanna@gmail.com', '4566222'),
(5, 'shreejanimanna03@gmail.com', '4555', 'abcd@gmail.com', '4556'),
(6, 'shreejani manna', '12345', 'shreejanimanna@gmail.com', '4556'),
(7, 'shreejani manna', '12345', 'shreejanimanna@gmail.com', '4556'),
(8, 'shreejani manna', '223644', 'shreejanimanna@gmail.com', '123456'),
(9, 'shreejanimanna03@gmail.com', '123456', 'abc@gmail.com', '4556'),
(10, 'shreejani manna', '123', 'shreejanimanna@gmail.com', '4556'),
(11, 'shreejani manna', '123', 'shreejanimanna@gmail.com', '123'),
(12, 'shreejani manna', '123456', 'shreejanimanna@gmail.com', 'fgg'),
(13, 'shreejani manna', '123456', 'shreejanimanna@gmail.com', '4556'),
(14, 'shreejani manna', '12345', 'shreejanimanna@gmail.com', '8956423156'),
(15, 'shreejani manna', '1234', 'abc@gmail.com', '12345678987424416856'),
(16, 'shreejani manna', '12345', 'shreejanimanna@gmail.com', '12345678987424416856'),
(17, 'shreejani manna', '12345', 'shreejanimanna@gmail.com', ''),
(18, 'shreejani manna', '1234', 'abc@gmail.com', '124567896'),
(19, 'shreejani manna', '12345', 'abc@gmail.com', '1234567898'),
(20, 'shreejani manna', '12345', 'abc@gmail.com', '895642356'),
(21, 'shreejani manna', '12345', 'shreejanimanna@gmail.com', '2315467894');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
