-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 03:31 AM
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
-- Database: `zerohungerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mapdb`
--

CREATE TABLE `mapdb` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapdb`
--

INSERT INTO `mapdb` (`name`, `email`, `subject`, `messages`) VALUES
('Azan', 'azan@ajsdask.com', 'asdasd', 'asdaklsdjasldaklsjdal'),
('Azan', 'asdkasdkasldka@gmail.com', 'askldjalkdjalksdj', 'asdaskldjaslkajskld'),
('Gamvir', 'gamvir@gmail.com', 'asdasd', 'asojdaosdaopdaps'),
('Amir', 'azanbutt@hotmail.co.uk', 'asdasd', 'asdkasd;lasd'),
('Youusaf', 'azanamir2002@outlook.com', 'lololol', 'sadaad'),
('Azan', 'brunel@gmail.com', 'Add foodbank', 'watford'),
('Azan', 'youusafbutt2002@outlook.com', 'Add foodbank', 'Add london foodbank'),
('Azan', '2156502@brunel.ac.uk', 'Add foodbank', 'Add the brunel foodbank'),
('Amir', 'azanbutt@hotmail.co.uk', 'Add foodbank', 'essex');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
