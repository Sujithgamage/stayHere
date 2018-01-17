-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 12:58 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stayhere`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertiesment`
--

CREATE TABLE `advertiesment` (
  `add_id` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertiesment`
--

INSERT INTO `advertiesment` (`add_id`, `image`, `name`) VALUES
('1', '10.jpg', ''),
('10', '19.jpg', ''),
('11', '20.jpg', ''),
('12', '21.jpg', ''),
('13', '22.jpg', ''),
('14', '23.jpg', ''),
('15', '10.jpg', ''),
('16', '12.jpg', ''),
('2', '11.jpg', ''),
('3', '12.jpg', ''),
('4', '13.jpg', ''),
('5', '14.jpg', ''),
('6', '15.jpg', ''),
('7', '16.jpg', ''),
('8', '17.jpg', ''),
('9', '18.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `amenity_id` varchar(100) NOT NULL,
  `facility` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amenity_id`, `facility`, `description`) VALUES
('1', 'WiFi', ''),
('2', 'Shampoo', ''),
('3', 'Essentials', ''),
('4', 'Hot Water', ''),
('5', 'TV', ''),
('6', 'Heat', ''),
('7', 'AC', ''),
('8', 'Parking', ''),
('9', 'Pool', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `nic` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `company` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `postalcode` varchar(255) NOT NULL,
  `homephone` int(10) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`nic`, `name`, `phone`, `email`, `Address`, `dateofbirth`, `company`, `city`, `district`, `postalcode`, `homephone`, `description`) VALUES
('643130175V', 'James Swoden', 715970215, 'asdf@gmail.com', 'No:212B.Backer Road,Maradana', '1964-11-08', 'Aimers pvt ltd.', 'Maradana', 'Colombo', '2345', 555729854, 'I''m a software Engineer'),
('876595236V', 'Nuwan Chathuranga', 716129898, 'nuwanchath@gmail.com', 'Elapitiwela,Ragama', '1994-11-08', 'Brandix Group', 'Ragama', 'Gampaha', '1123', 112562354, ''),
('913311570v', 'PrasannaRanasinghe', 711235360, 'prasanna@gmail.com', 'no22,Ihalabatuwaththa,Dewalegama', '1991-11-01', 'Wayamba University', 'Dewalegama', 'Kegall', '5634', 711235360, 'Student\r\n'),
('923192026v', 'KapilaJayawardhana ', 771971763, 'kapilaprasanna14@gmail.com', 'Kelaniya road, pattiwila.', '1992-11-14', 'Wkk Engineering ', 'Kelaniya ', 'Colombo', '32210', 771971763, 'Testing'),
('933130175V', 'NuwanGajanayake', 711132320, 'nu1@gmail.com', 'Samapura,Ampara', '1993-08-25', 'Wayamba University', 'Ampara', 'Ampara', '3122', 711132320, 'Additional information'),
('941180736v', 'Chandima Tennakoon', 712412076, 'Chandimacb@gmail.com', 'Maspotha', '1994-04-27', 'Cyan', 'Kurunegala', 'Kurunegala', '60816', 712412076, 'Additional information'),
('941850736V', 'Kapila Prasanna', 713528535, 'pawan@gmail.com', 'no32,Bamunakotuwa,wariyapola', '1992-11-14', 'Slimtex Apparal', 'Wariyapola', 'Kurunegala', '6743', 113652874, ''),
('942021593V', 'Chandima Bandara', 771892730, 'chandima@gmail.com', 'Kurunegala', '1994-04-27', 'Wayamba University', 'Maspotha', 'Kurunegala', '5643', 112345654, 'I''m a student'),
('942021595V', 'MethunPerera', 778788646, 'smethunperera@gmail.com', 'Kuliyapitiya', '1994-07-20', 'Wayamba University', 'Kuliyapitiya', 'Kurunegala', '11534', 778788646, 'Additional information'),
('943130175v', 'Sujith Gamage', 712652738, 'sujithgamage501@gmail.com', 'Ethiliwewa,Wellawaya', '1994-11-08', 'Wayamba University', 'Wellawaya', 'Monaragala', '3128', 555729854, 'I''m a Student'),
('953130175V', 'Thilan Jayathunga', 711132320, 'thilanjayathunga@gmail.com', 'Kelapitimulla,Hunumulla.', '1992-10-02', 'Wayamba University', 'Diulapitiya', 'Gampaha', '6543', 112564260, 'Im a student');

-- --------------------------------------------------------

--
-- Table structure for table `customerbooking`
--

CREATE TABLE `customerbooking` (
  `house_id` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `numofrooms` int(11) NOT NULL,
  `Indate` date NOT NULL,
  `outdate` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerbooking`
--

INSERT INTO `customerbooking` (`house_id`, `nic`, `numofrooms`, `Indate`, `outdate`, `status`) VALUES
('2', '941180736v', 1, '2018-01-06', '2018-01-09', 'Confirm'),
('2', '943130175v', 1, '2018-01-04', '2018-01-08', 'Confirm'),
('7', '923192026v', 1, '2018-01-12', '2018-01-15', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `customer_host`
--

CREATE TABLE `customer_host` (
  `nic` varchar(20) NOT NULL,
  `house_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_host`
--

INSERT INTO `customer_host` (`nic`, `house_id`) VALUES
('643130175V', '1'),
('643130175V', '10'),
('876595236V', '12'),
('876595236V', '2'),
('913311570v', '3'),
('933130175V', '4'),
('941850736V', '5'),
('941850736V', '9'),
('942021593V', '11'),
('942021595V', '8'),
('943130175v', '13'),
('943130175v', '14'),
('943130175v', '7'),
('953130175V', '6');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `house_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `offer` varchar(100) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `num_of_beds` int(11) NOT NULL,
  `num_of_bathrooms` int(11) NOT NULL,
  `price` double NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`house_id`, `title`, `offer`, `bedrooms`, `num_of_beds`, `num_of_bathrooms`, `price`, `address`, `district`, `category_id`) VALUES
('1', 'Spicy House', 'Full House', 4, 1, 1, 100, 'no.22.street', 'Colombo', '4'),
('10', 'Jayathunge', 'Full House', 4, 4, 2, 20000, 'No 23, minuwangoda', 'Gampaha', '2'),
('11', 'KingSide', 'Full House', 2, 2, 1, 2500, 'Browns Beach,Negombo', 'Gampaha', '8'),
('12', 'WildAsia', 'Full House', 2, 2, 1, 3000, 'Elapitiwela,Ragama', 'Gampaha', '6'),
('13', 'Ancient Walawwa ', 'Full House', 4, 2, 4, 7800, 'Kuliyapitiya', 'Kurunegala', '3'),
('14', 'Asdf', 'Not Full', 0, 0, 0, 500, 'Kanadulla', 'Matara', '6'),
('2', 'Ozone House', 'Not all', 2, 2, 2, 500, 'Ethiliwewa,Wellawaya', 'Monaragala', '2'),
('3', 'The Vila Green Inn', 'Not All', 3, 3, 3, 1500, 'Ethgala,Katana,Negombo', 'Gampaha', '5'),
('4', 'Saranga House', '', 1, 1, 1, 2000, 'Hunumulla,Diulapitiya', 'Gampaha', '4'),
('5', 'Nadun House', 'Whole', 3, 3, 1, 2000, 'Chawakachcheri,Jafna', 'Jafna', '4'),
('6', 'Blushepere', '', 5, 5, 3, 2000, 'N0-36,samapura,Ampara', 'Ampara', '1'),
('7', 'Sandu Lagoon', '', 2, 2, 1, 2500, 'No12,Hanhamunawa,Maspotha', 'Kurunegala', '6'),
('8', 'Turkey House', '', 1, 1, 1, 1200, 'Inginiyagala road,Samapura', 'Ampara', '4'),
('9', 'IslandWide', 'Full House', 4, 4, 2, 5000, 'D.S gama,Ethiliwewa', 'Monaragala', '3');

-- --------------------------------------------------------

--
-- Table structure for table `housecategory`
--

CREATE TABLE `housecategory` (
  `category_id` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housecategory`
--

INSERT INTO `housecategory` (`category_id`, `type`, `description`) VALUES
('1', 'PenthHouse', ''),
('2', 'Guest House', ''),
('3', 'Vacation Home', ''),
('4', 'House', ''),
('5', 'Vila', ''),
('6', 'Tree House', ''),
('7', 'Light House', ''),
('8', 'Boat House', '');

-- --------------------------------------------------------

--
-- Table structure for table `houseimage`
--

CREATE TABLE `houseimage` (
  `image_id` varchar(100) NOT NULL,
  `imageref` varchar(255) NOT NULL,
  `house_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houseimage`
--

INSERT INTO `houseimage` (`image_id`, `imageref`, `house_id`) VALUES
('1', '19.jpg', '1'),
('10', '34.jpg', '10'),
('11', 'Beach.jpg', '11'),
('12', '28.jpg', '12'),
('13', '19.jpg', '13'),
('14', '', '14'),
('2', '17.jpg', '2'),
('3', '28.jpg', '3'),
('4', '20.jpg', '4'),
('5', '32.jpg', '5'),
('6', '28.jpg', '6'),
('7', '34.jpg', '7'),
('8', '33.jpg', '8'),
('9', 'asdf.jpg', '9');

-- --------------------------------------------------------

--
-- Table structure for table `houserating`
--

CREATE TABLE `houserating` (
  `house_id` varchar(100) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `ratings` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `house_amenity`
--

CREATE TABLE `house_amenity` (
  `house_id` varchar(100) NOT NULL,
  `amenity_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house_amenity`
--

INSERT INTO `house_amenity` (`house_id`, `amenity_id`) VALUES
('1', '3'),
('1', '7'),
('10', '1'),
('10', '3'),
('10', '4'),
('10', '5'),
('10', '6'),
('10', '7'),
('10', '8'),
('10', '9'),
('11', '1'),
('11', '3'),
('11', '4'),
('11', '5'),
('11', '6'),
('11', '7'),
('11', '8'),
('11', '9'),
('12', '1'),
('12', '3'),
('12', '4'),
('12', '5'),
('12', '6'),
('12', '7'),
('12', '8'),
('12', '9'),
('13', '1'),
('13', '3'),
('13', '4'),
('13', '5'),
('13', '6'),
('13', '7'),
('13', '8'),
('13', '9'),
('14', '1'),
('14', '3'),
('14', '7'),
('14', '8'),
('9', '1'),
('9', '3'),
('9', '4'),
('9', '5'),
('9', '6'),
('9', '7'),
('9', '8'),
('9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nic` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nic`, `password`) VALUES
('643130175V', 'asdf1234'),
('876595236V', 'asdf1234'),
('913311570v', 'asdf1234'),
('923192026v', 'kapila'),
('933130175V', 'asdf1234'),
('941180736v', 'cc1234'),
('941850736V', 'asdf1234'),
('942021593V', 'asdf1234'),
('942021595V', '0778788646'),
('943130175v', 'asdf'),
('953130175V', 'asdf1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertiesment`
--
ALTER TABLE `advertiesment`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`amenity_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `customerbooking`
--
ALTER TABLE `customerbooking`
  ADD PRIMARY KEY (`house_id`,`nic`,`numofrooms`,`Indate`,`outdate`),
  ADD KEY `nic` (`nic`);

--
-- Indexes for table `customer_host`
--
ALTER TABLE `customer_host`
  ADD PRIMARY KEY (`nic`,`house_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `housecategory`
--
ALTER TABLE `housecategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `houseimage`
--
ALTER TABLE `houseimage`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `houserating`
--
ALTER TABLE `houserating`
  ADD KEY `house_id` (`house_id`),
  ADD KEY `nic` (`nic`);

--
-- Indexes for table `house_amenity`
--
ALTER TABLE `house_amenity`
  ADD PRIMARY KEY (`house_id`,`amenity_id`),
  ADD KEY `amenity_id` (`amenity_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`nic`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `login` (`nic`);

--
-- Constraints for table `customerbooking`
--
ALTER TABLE `customerbooking`
  ADD CONSTRAINT `customerbooking_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`),
  ADD CONSTRAINT `customerbooking_ibfk_2` FOREIGN KEY (`nic`) REFERENCES `customer` (`nic`);

--
-- Constraints for table `customer_host`
--
ALTER TABLE `customer_host`
  ADD CONSTRAINT `customer_host_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `login` (`nic`),
  ADD CONSTRAINT `customer_host_ibfk_2` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`);

--
-- Constraints for table `houseimage`
--
ALTER TABLE `houseimage`
  ADD CONSTRAINT `houseimage_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`);

--
-- Constraints for table `houserating`
--
ALTER TABLE `houserating`
  ADD CONSTRAINT `houserating_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`),
  ADD CONSTRAINT `houserating_ibfk_2` FOREIGN KEY (`nic`) REFERENCES `customer` (`nic`);

--
-- Constraints for table `house_amenity`
--
ALTER TABLE `house_amenity`
  ADD CONSTRAINT `house_amenity_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`),
  ADD CONSTRAINT `house_amenity_ibfk_2` FOREIGN KEY (`amenity_id`) REFERENCES `amenities` (`amenity_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
