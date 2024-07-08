-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2020 at 04:42 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odrsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(100) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 7898799798, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-06-29 15:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `ID` int(10) NOT NULL,
  `ClassName` varchar(200) DEFAULT NULL,
  `DanceImage` varchar(200) DEFAULT NULL,
  `ClassDesc` mediumtext DEFAULT NULL,
  `Cost` decimal(10,2) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`ID`, `ClassName`, `DanceImage`, `ClassDesc`, `Cost`, `CreationDate`) VALUES
(1, 'Bharatanatyam', '8638c668450989a51a0067ec89a727921593506008.jpg', 'Barathanatyam is a classical dance from the South Indian state of Tamil Nadu, practiced predominantly in modern times by women.', '200.00', '2020-06-29 23:30:00'),
(2, 'Kathakali', '40b30e58bfcd8c6f2be370574bf150991593506080.jpg', ' This classical dance form is another \"story play\" genre of art, but one distinguished by its elaborately colorful make-up, costumes and face masks wearing actor-dancers, who have traditionally been all males', '999.99', '2020-06-30 06:05:42'),
(3, 'Contemporary dance', 'b4f6ed6ef065dd035aba9687d06a58521593506238.jpg', 'Contemporary dance is a genre of dance performance that developed during the mid-twentieth century and has since grown to become one of the dominant genres for formally trained dancers throughout the world, with particularly strong popularity in the U.S. and Europe. Although originally informed by and borrowing from classical, modern, and jazz styles, it has come to incorporate elements from many styles of dance. Due to its technical similarities, it is often perceived to be closely related to modern dance, ballet, and other classical concert dance styles.', '12000.00', '2020-06-30 06:07:59'),
(4, 'Kathak', 'de4c72b577554ce1f0d8eaf0d3cf3df51593497423.jpg', 'Kathak is traditionally attributed to the traveling bards of ancient northern India, known as Kathakas or storytellers.[59] The term Kathak is derived from the Vedic Sanskrit word Katha meaning \"story\", and kathaka in Sanskrit means \"he who tells a story\", or \"to do with stories\".[59][60] Kathak evolved during the Bhakti movement, particularly by incorporating childhood and amorous stories of Hindu god Krishna, as well as independently in the courts of north Indian kingdoms.', '12000.00', '2020-06-30 06:10:23'),
(5, 'Jazz Dance', '4da8e86c9572da2e82decf1bd47bb1d21593506267.jpg', 'Jazz dance is a performance dance technique and style that first emerged in the United States in the early twentieth century. Jazz dance may refer to vernacular jazz or to Broadway or theatrical jazz. Both genres build on African American vernacular styles of dancing that emerged with jazz music.', '13000.00', '2020-06-30 06:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `ID` int(10) NOT NULL,
  `InvoiceID` int(10) DEFAULT NULL,
  `PaymentMode` varchar(50) DEFAULT NULL,
  `AmountPay` decimal(10,2) DEFAULT NULL,
  `PaymentDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`ID`, `InvoiceID`, `PaymentMode`, `AmountPay`, `PaymentDate`) VALUES
(1, 769427401, 'Cash', '500.00', '2020-07-01 15:11:50'),
(2, 769427401, 'Cash', '500.00', '2020-07-01 15:43:51'),
(3, 139460760, 'Cheque', '7000.00', '2020-07-03 05:50:40'),
(4, 139460760, 'Cash', '5000.00', '2020-07-03 05:51:33'),
(5, 839525032, 'Cash', '13000.00', '2020-07-18 13:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '                                                <blockquote style=\"margin: 0 0 0 40px; border: none; padding: 0px;\"><div style=\"text-align: center;\"><font color=\"#ff0000\">With an aim to provide quality dance training and making dance available to all, ODRS dance classes run throughout the year at multiple locations for students from ages four to eighty-four providing them with training in various dance styles by Shiamakï¿½s expert faculty. The classes give them an opportunity to learn dance, express themselves creatively, and perform on stage. Classes are available for children (4 to 6 years), juniors (7 to 11 years), and adults (12 years onwards). Test data<br></font></div></blockquote><div><br></div>', NULL, NULL, NULL, NULL),
(2, 'contactus', 'Contact Us', '                                890, Sector 62, Gyan Sarovar, GAIL Ghaziabad(Delhi/NCR)', 'info@gmail.com', 7896541287, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblregistration`
--

CREATE TABLE `tblregistration` (
  `ID` int(10) NOT NULL,
  `RegistrationNumber` int(10) DEFAULT NULL,
  `ClassID` int(5) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `TelephoneNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Gender` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(200) DEFAULT NULL,
  `Remark` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistration`
--

INSERT INTO `tblregistration` (`ID`, `RegistrationNumber`, `ClassID`, `Name`, `TelephoneNumber`, `Email`, `Gender`, `Message`, `RegDate`, `Status`, `Remark`, `UpdationDate`) VALUES
(1, 769427401, 2, 'Ankita', 4987979879, 'ankita@gmail.com', 'Male', 'dfdsf', '2020-07-01 07:44:13', 'Selected', 'Selected', '2020-07-01 11:26:01'),
(2, 855046913, 3, 'Rajesh Kimar', 7987547978, 'raj@gmail.com', 'Male', 'I want to join classes in between july to august', '2020-07-01 10:27:51', 'Rejected', 'Not Selected', '2020-07-03 05:39:27'),
(3, 139460760, 3, 'Test', 9798779878, 'test@gmail.com', 'Female', 'Text Sample', '2020-07-03 05:32:29', 'Selected', 'Text Sample', '2020-07-03 05:37:14'),
(4, 839525032, 5, 'Anuj kumat', 1234567890, 'test@gmail.com', 'Male', 'This is for testing.', '2020-07-18 13:33:06', 'Selected', 'Selected', '2020-07-18 13:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblteachers`
--

CREATE TABLE `tblteachers` (
  `ID` int(10) NOT NULL,
  `Classid` int(5) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `ProfilePic` varchar(200) DEFAULT NULL,
  `JoiningDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblteachers`
--

INSERT INTO `tblteachers` (`ID`, `Classid`, `Name`, `MobileNumber`, `Email`, `ProfilePic`, `JoiningDate`) VALUES
(1, 1, 'Manika Chauhan', 7998798789, 'manika@gmail.com', 'afadf1ddb224aef8a213e08e5cd728c01593518855.jpg', '2020-06-29 21:30:00'),
(2, 2, 'Sanjana Mishra', 8979798797, 'sanju@gmail.com', '42d38fdff39b0a3a1fa757ed574b2f681593499270.jpg', '2020-06-30 06:41:10'),
(3, 3, 'Terrace Junction', 3695465465, 'teerace@gmail.com', '9add5f4446bcaaed1f9e62ea6169b40a1593499319.jpg', '2020-06-30 06:41:59'),
(4, 4, 'Harish Singh', 7746546546, 'harish@gmail.com', '2daf67952bdf6f4da479079e12d128121593499368.jpg', '2020-06-30 06:42:48'),
(5, 5, 'Mennu Verma', 6454654564, 'verma@gmail.com', 'de4c72b577554ce1f0d8eaf0d3cf3df51593499408.jpg', '2020-06-30 06:43:28'),
(6, 3, 'Radhika Misra', 7465498797, 'radhika@gmail.com', 'bcc5667786d6bd1b25e7c4d8a42e85501593499480.jpg', '2020-06-30 06:44:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblregistration`
--
ALTER TABLE `tblregistration`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RegistrationNumber` (`RegistrationNumber`);

--
-- Indexes for table `tblteachers`
--
ALTER TABLE `tblteachers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblregistration`
--
ALTER TABLE `tblregistration`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblteachers`
--
ALTER TABLE `tblteachers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
