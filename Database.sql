-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 09:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journey_junction`
--

-- --------------------------------------------------------

--
-- Table structure for table `adventure`
--

CREATE TABLE `adventure` (
  `Sno` int(2) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Images` text NOT NULL,
  `Visibility` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adventure`
--

INSERT INTO `adventure` (`Sno`, `Title`, `Images`, `Visibility`) VALUES
(1, 'Hot Air Balloon', 'Hot Air Balloon.jpg', 1),
(2, 'Ropeway Ride', 'Ropway Ride.jpg', 1),
(3, 'Night Camping', 'Night Camping.jpg', 1),
(4, 'Para Gliding', 'Paragliding.jpg', 1),
(5, 'Horse Riding', 'Horse Riding.jpg', 1),
(6, 'Camel Riding', 'Camel Riding.webp', 1),
(7, 'Boating', 'Boating.jpg', 1),
(8, 'Hot Air Balloon', 'Hot Air Ride.png', 1),
(9, 'Flying Fox', 'Flying Fox.jpg', 1),
(10, 'Water Park', 'Water Park.webp', 1),
(12, 'Wild life Sanctuary', 'Wild life senctury.jpg', 1),
(13, 'Camel Riding', 'Camel Riding_j.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `Sno` int(2) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Visibility` int(1) NOT NULL,
  `Images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`Sno`, `Title`, `Visibility`, `Images`) VALUES
(1, 'City Palace', 1, 'City Palace.jpg'),
(2, 'Lake Pichola', 1, 'Lake Pichola.jpg'),
(3, 'Fateh Sagar Lake', 1, 'Fateh Sagar Lake.jpg'),
(4, 'Saheliyon ki Bari', 1, 'Saheliyon ki Bari.jpeg'),
(5, 'Rajsamand Lake', 1, 'Rajsamand Lake.jpg'),
(6, 'Lake Palace', 1, 'Lake Palace.jpg'),
(7, 'The Clock Tower', 1, 'Clock Tower.jpg'),
(8, 'Mehrangarh Fort', 1, 'Mehrangarh Fort.webp'),
(9, 'Jaswant Thada', 1, 'Jaswant Thada.jpg'),
(10, 'Toorji ki Jhalra', 1, 'Toorji ki Jhalra.jpg'),
(11, 'Ummed Palace', 1, 'Ummed Palace.jpg'),
(12, 'Mandore', 1, 'Mandore.jpg'),
(13, 'Jaipur', 1, 'Hawa Mahal.webp'),
(14, 'Jodhpur', 1, 'Jodhpur.jpg'),
(15, 'Ajmer', 1, 'Pushkar.jpg'),
(16, 'Udaipur', 1, 'Udaipur.jpg'),
(17, 'Barmer', 1, 'Barmer.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Sno` int(2) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Price` varchar(5) NOT NULL,
  `Description` text NOT NULL,
  `Visibility` int(1) NOT NULL,
  `Images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Sno`, `Title`, `Price`, `Description`, `Visibility`, `Images`) VALUES
(1, 'Dal Bati', '100', 'Daal Baati is an Indian dish of daal and baati. It is popular in Madhya Pradesh, Rajasthan, Maharashtra’s Khandesh and Vidarbha region, Gujarat, and Uttar Pradesh.', 1, 'Dal Baati.webp'),
(2, 'Mawa Kachori', '50', 'Another form of Kachori in Jodhpur is the Mawa Kachori, invented by the late Rawat Deora. It is a sweet dish dipped in sugar syrup.', 1, 'Mawa Kachori.jpg'),
(3, 'Mirchi Bada', '20', 'Mirchi bada is a spicy Indian snack consisting of chili and potato or cauliflower stuffing battered and fried, served hot with tomato sauce or occasionally with mint and tamarind chutney. Banana pepper is used for making mirchi bada.', 1, 'Mirchi Bada.webp'),
(4, 'Ghevar', '600', 'Ghevar or Ghewar is a Rajasthani cuisine disc-shaped sweet made from ghee, flour, and sugar syrup. It is traditionally associated with the month of Shravan and the Teej and Raksha Bandhan festivals.', 1, 'Ghevar.webp'),
(5, 'Bajra Laddoo', '450', 'Churma Ladu: Churma Ladu is a traditional and popular sweet from India. Made from coarse wheat flour, sugar, and ghee, it has a unique and delicious texture.', 1, 'CHURMALADU.webp');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `Sno` int(11) NOT NULL,
  `Cityname` varchar(50) NOT NULL,
  `Nick_Name` varchar(150) NOT NULL,
  `ImageBack` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`Sno`, `Cityname`, `Nick_Name`, `ImageBack`) VALUES
(1, 'UDAIPUR', 'The City of Lakes', 'Udaipur.jpg'),
(3, 'JODHPUR', 'The Blue City', 'Jodhpur.jpg'),
(4, 'Rajasthan', 'RANG RANGEELA', 'Rajasthan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `Sno` int(2) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Images` text NOT NULL,
  `Price` varchar(25) NOT NULL,
  `Rating` varchar(10) NOT NULL,
  `Visibility` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`Sno`, `Title`, `Images`, `Price`, `Rating`, `Visibility`) VALUES
(1, 'Hill Top Palace', 'Hotel Hill Top.jpg', '16550', '4.1', 1),
(2, 'Ram Pratap Palace', 'Ram Pratap Hotel.jpg', '3700', '4.0', 1),
(3, 'Hotel Trident', 'Hotel Trident.jpg', '12700', '4.5', 1),
(4, 'Hotel Boutique', 'Hotel Boutique.jpg', '3300', '4.4', 1),
(5, 'Hotel Lakend', 'Hotel Lakend.jpg', '7700', '4.4', 1),
(6, 'Jagat Niwas Palace', 'Jagat Niwas Palace.jpg', '7800', '4.3', 1),
(7, 'Hotel Raddison', 'Hotel Raddison.jpg', '7800', '4.6', 1),
(8, 'Hotel Kanha', 'Hotel Kanha.jpg', '1300', '4.9', 1),
(9, 'Krishna Prakash Haveli', 'Krishna Prakash Haveli.jpg', '1600', '4.2', 1),
(10, 'Ratan Vilas', 'Ratan Vilas.jpg', '5000', '4.6', 1),
(11, 'Ranbanka Palace', 'Ranbaka Palace.jpg', '4300', '4.2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Sno` int(1) NOT NULL,
  `Uid` varchar(50) NOT NULL,
  `Upass` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Sno`, `Uid`, `Upass`) VALUES
(1, 'Ram', 321);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adventure`
--
ALTER TABLE `adventure`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adventure`
--
ALTER TABLE `adventure`
  MODIFY `Sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `Sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `Sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Sno` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
