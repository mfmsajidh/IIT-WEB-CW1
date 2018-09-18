-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 10:58 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_hut`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ContactId` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `Message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ContactId`, `Name`, `Email`, `Message`) VALUES
(2, 'Sajidh Farook', 'mfmsajidh@gmail.com', 'my name is Khan'),
(3, 'Sajidh Farook', 'mfmsajidh@gmail.com', 'SO nice');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(5) NOT NULL,
  `fullName` varchar(25) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `contactNo` varchar(12) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `fullName`, `gender`, `username`, `email`, `password`, `contactNo`, `address`) VALUES
(419, 'Rahal Gunawardaana', 'male', 'Rahal', 'Rahal@gmail.com', '123iit', '+94717890397', 'Colombo'),
(632, 'Sajidh Farook', 'Male', 'mfmsajidh', 'mfmsajidh@gmail.com', 'sajidh123', '+94771656701', 'Colombo 9'),
(851, 'Punsisi', 'female', 'sisi', 'punsisik@gmail.com', 'sisi321', '+94778232810', 'blah blah');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieId` int(11) NOT NULL,
  `movieName` varchar(45) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `actor` varchar(20) DEFAULT NULL,
  `actress` varchar(20) DEFAULT NULL,
  `Image` varchar(500) NOT NULL,
  `btn_status` varchar(15) DEFAULT NULL,
  `customerId` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieId`, `movieName`, `status`, `actor`, `actress`, `Image`, `btn_status`, `customerId`) VALUES
(1, 'Rio 2', 'Borrowed', 'Jesse Eisenberg', 'Anne Hathway', 'Images/Background/Rio 2.jpg', 'Inform Me', 632),
(2, 'Pacific Rim Uprising', 'Borrowed', 'John Boyega', 'Rinko Kikuchi', 'Images/Background/Pacific Rim.jpg', 'Inform Me', 632),
(3, 'Justice League', 'Borrowed', 'Ben Affleck', 'Gal Gadot', 'Images/Background/Justice League.jpg', 'Inform Me', 632),
(4, 'Warcraft: The Beginning', 'Available', 'Travis Fimmel', 'Paula Patton', 'Images/Background/Warcraft.jpg', 'Reserve Now', NULL),
(5, 'Dawn of The Planet of The Apes', 'Available', 'Andy Serkis', 'Keri Russell', 'Images/Background/Dawn of The Planet of The Apes.jpg', 'Reserve Now', NULL),
(6, 'Skyfall 007', 'Borrowed', 'Daniel Craig', 'Berenice Marlohe', 'Images/Background/Skyfall 007.jpg', 'Inform Me', 632),
(7, 'Assassin\'s Creed', 'Borrowed', 'Michael Fassbender', 'Marion Cotillard', 'Images/Background/Assassins Creed.jpg', 'Inform Me', 851),
(8, 'Hobbit: An Unexpected Journey', 'Borrowed', 'Martin Freeman', 'Cate Blanchett', 'Images/Background/Hobbit.jpg', 'Inform Me', 632),
(9, 'The Foreigner', 'Borrowed', 'Jackie Chan', 'Katie Leung', 'Images/Background/Foreigner.jpg', 'Inform Me', 419),
(10, 'Happy New Year', 'Available', 'Shahrukh Khan', 'Deepika Padukone', 'Images/Background/Happy New Year.jpg', 'Reserve Now', NULL),
(11, 'The Martian', 'Available', 'Matt Damon', 'Jessica Chastain', 'Images/Background/Martian.jpg', 'Reserve Now', NULL),
(12, 'Alien', 'Available', 'Michael Fassbender', 'Katherine Waterston', 'Images/Background/Alien.jpg', 'Reserve Now', NULL),
(13, 'Venom', 'Available', 'Tom Hardy', 'Michelle Williams', 'Images/Background/Venom.jpg', 'Reserve Now', NULL),
(14, 'Tomb Raider', 'Available', 'Daniel Wu', 'Alicia Vikander', 'Images/Background/Tomb Raider.jpg', 'Reserve Now', NULL),
(15, 'Dracula', '', 'Luke Evans', 'Sarah Gadon', 'Images/Background/Dracula.jpg', 'Reserve Now', NULL),
(16, 'Mission Impossible 6 Fallout', 'Available', 'Tom Cruise', 'Rebecca Ferguson', 'Images/Background/MI6.jpg', 'Reserve Now', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieId`),
  ADD KEY `fk_custID_movie` (`customerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `fk_custID_movie` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
