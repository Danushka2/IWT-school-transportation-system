-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 11:22 AM
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
-- Database: `school_transport_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AID` int(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `secondname` varchar(200) NOT NULL,
  `telephone` int(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `NIC` varchar(50) NOT NULL,
  `age` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `shift` varchar(100) NOT NULL,
  `salary` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `firstname`, `secondname`, `telephone`, `address`, `NIC`, `age`, `password`, `shift`, `salary`) VALUES
(100, 'danuka', 'alwis', 772261647, '9197 Clark Drive Pueblo, CO 81001', '45623589', '31', 'danukalwis123', '6.00-15.00', '400000.00'),
(101, 'Pigman', 'Princess', 72456891, '156 North Silver St. San Diego, CA 92111', '45628888', '35', 'pigmanprincess123', '6.00-15.00', '40000.00');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `BID` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`BID`, `user_id`, `date`, `amount`, `type`) VALUES
(1000, 678, '02/05/2018', '5590.00', 'credit card'),
(1001, 526, '03/12/2018', '8000.00', 'paypal'),
(1002, 545, '14/4/2017', '9652.00', 'credit card'),
(1003, 653, '23/6/2017', '10006.00', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DID` int(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `vehicle_id` int(100) NOT NULL,
  `telephone` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `NIC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DID`, `firstname`, `secondname`, `vehicle_id`, `telephone`, `address`, `age`, `password`, `salary`, `NIC`) VALUES
(200, 'Emory', 'Trentham', 300, 772261647, '84 South Catherine Street Matawan, NJ 07747', '32', 'emorytrentham', '35000.00', 45623517),
(201, 'Lexie', 'Joseph', 301, 701234892, '863 Lilypad Road Baltimore, MD 21206', '54', 'lexiejoseph123', '35000.00', 45625017),
(202, 'Domenica', 'Ussery', 303, 762555647, '127 Newbridge St. Uniondale, NY 11553', '45', 'domenicaussery123', '40000.00', 25689157),
(203, 'Ike', 'Stephen', 305, 772261649, '9197 Clark Drive Pueblo, CO 81001', '61', 'ikestephen123', '38000.00', 159482);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `OID` int(100) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `secondname` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `owns_vehicles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`OID`, `firstname`, `secondname`, `address`, `age`, `email`, `telephone`, `password`, `owns_vehicles`) VALUES
(1, 'Danushka', 'Nuwan', '320/B,kuruppumulla rd,colombo', '20', 'dhanushkanuwan24@gmail.com', 772261647, '123456789', '309'),
(2, 'John', 'Smith', '135/N,galle rd,dehiwala', '48', 'johnsmith@gmail.com', 702546892, 'asdf12345', '308'),
(3, 'Elena', 'Pendergrass', '1450  Heavner Avenue,usa', '35', 'elenapenderagrass23@gmail.com', 772555647, 'elena12345', '399');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `PID` int(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `telephone` int(100) NOT NULL,
  `school` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `driverid` int(100) NOT NULL,
  `vehicleid` int(100) NOT NULL,
  `vehicletype` varchar(100) NOT NULL,
  `kmToSchool` int(100) NOT NULL,
  `pickuptime` varchar(100) NOT NULL,
  `startingdate` varchar(100) NOT NULL,
  `monthlyfee` varchar(100) NOT NULL,
  `ac` varchar(10) NOT NULL,
  `proPIC` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`PID`, `firstname`, `secondname`, `email`, `password`, `type`, `gender`, `age`, `telephone`, `school`, `address`, `driverid`, `vehicleid`, `vehicletype`, `kmToSchool`, `pickuptime`, `startingdate`, `monthlyfee`, `ac`, `proPIC`) VALUES
(500, 'Nuwan', 'Alwis', 'danualwis24@gmail.com', 'nuwanalwis123', 'student', 'male', '21', 717695776, 'Sumangala College', '319/B,thanthrimulla,panadura', 200, 300, 'van', 9, '6.50', '5/05/2018', '7000.00', 'yes', '3.jpg'),
(501, 'mark', 'john', 'markjohn@gmail.com', 'markjohn213', 'student', 'male', '22', 717695776, 'Royal college', '135/D, galle road, kalutara', 200, 300, 'van', 5, '07.11', '22/1/2019', '', 'yes', '4.jpg'),
(502, 'Kasun', 'Chamara', 'kasunchamara58@gmaiil.com', 'kasunchamara123', 'teacher', 'male', '14/11/2000', 712345678, 'Sumangala College', '548/Z, kandy road, malabe', 203, 301, 'van', 7, '6.55', '5/5/2015', '3850', 'yes', ''),
(503, 'dan', 'alwis', 'danalwis24@gmail.com', 'asd123', 'student', 'male', '25', 711592632, 'Royal college', '321/B,colombo', 200, 300, 'van', 11, '07.10', '06/10/2018', '6050', 'yes', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VID` int(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `registation_no` varchar(50) NOT NULL,
  `A/C` varchar(10) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `seats` int(10) NOT NULL,
  `driver_id` int(255) NOT NULL,
  `owner_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VID`, `type`, `registation_no`, `A/C`, `cost`, `seats`, `driver_id`, `owner_id`) VALUES
(300, 'van', 'as-154862', 'yes', '1500000.00', 30, 200, 15),
(301, 'bus', 'fd-45899', 'yes', '3000000.00', 50, 201, 4),
(303, 'van', 'fd-44444', 'no', '1000000.00', 40, 202, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `BID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `DID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `OID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `PID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
