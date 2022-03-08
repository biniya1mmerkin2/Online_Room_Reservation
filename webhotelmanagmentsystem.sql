-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 03:21 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webhotelmanagmentsystem`
-- admin username: admin
-- admin password: admin
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodationtable`
--

CREATE TABLE `accomodationtable` (
  `id` int(11) NOT NULL,
  `accomodation` varchar(25) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accomodationtable`
--

INSERT INTO `accomodationtable` (`id`, `accomodation`, `description`) VALUES
(1, 'Hope Standard', 'with full package'),
(2, 'Country Standard ', 'with full package'),
(5, 'International Standard', 'with full package');

-- --------------------------------------------------------

--
-- Table structure for table `guestinfo`
--

CREATE TABLE `guestinfo` (
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guestinfo`
--

INSERT INTO `guestinfo` (`fname`, `lname`, `email`, `phone`, `username`, `password`, `status`) VALUES
('Adminstration', 'admin', 'admin@gmail.com', 'null', 'admin', '$2y$10$txWHqK3IS3Z/Vhbbquf8J.SPxryBDjxyPxAHq/Rs9tvvck/Ho0Vq6', 'admin'),
('Benja', 'Mark', 'biniyammerkin30@gmail.com', 'null', 'Benja', '$2y$10$TO2H7UuCs6CCNIquUd7w9.Bhiicmrd50dDG12yFIxqdhgsApagofm', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `uniquecode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblroom`
--

CREATE TABLE `tblroom` (
  `id` int(11) NOT NULL,
  `roomname` varchar(255) NOT NULL,
  `accomodation` varchar(255) NOT NULL,
  `numberofperson` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblroom`
--

INSERT INTO `tblroom` (`id`, `roomname`, `accomodation`, `numberofperson`, `price`, `image`) VALUES
(31, 'RH 1', 'Hope Standardwith full package', 1, 450, 'view.jfif'),
(32, 'RH 2', 'Hope Standardwith full package', 2, 1000, 'twin.jfif'),
(33, 'RH 3', 'Hope Standardwith full package', 5, 1500, 'fam.jfif'),
(34, 'RT 1', 'Country Standard with full package', 1, 500, 'twin1.jfif'),
(35, 'RT 2', 'Country Standard with full package', 2, 500, 'view.jfif'),
(36, 'RT 3', 'Country Standard with full package', 5, 1500, 'family.jfif'),
(37, 'RF 1', 'International Standardwith full package', 1, 1000, 'single.jfif'),
(39, 'RF 2', 'International Standardwith full package', 2, 700, 'single1.jfif'),
(40, 'RF 3', 'International Standardwith full package', 5, 1500, 'single.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `accomodation` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'pending',
  `identify` int(11) NOT NULL DEFAULT 0,
  `user` varchar(57) NOT NULL,
  `roomname` varchar(25) NOT NULL,
  `transactiondate` datetime NOT NULL DEFAULT current_timestamp(),
  `numberofdays` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `checkin`, `checkout`, `accomodation`, `Status`, `identify`, `user`, `roomname`, `transactiondate`, `numberofdays`, `price`) VALUES
(33, '2022-02-15', '2022-02-15', 'King Standard max of 72 hr', 'CheckedIn', 1, 'biniyam', 'Mechot', '2022-02-15 02:16:20', '', ''),
(35, '2022-02-16', '2022-02-16', 'Standard Twin max of 12 hr', 'confirmed', 1, 'biniyam', 'Win1', '2022-02-15 04:42:53', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accomodationtable`
--
ALTER TABLE `accomodationtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestinfo`
--
ALTER TABLE `guestinfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblroom`
--
ALTER TABLE `tblroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accomodationtable`
--
ALTER TABLE `accomodationtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tblroom`
--
ALTER TABLE `tblroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
