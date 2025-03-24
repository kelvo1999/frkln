-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2025 at 09:40 AM
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
-- Database: `agmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ID` int(10) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Education` mediumtext DEFAULT NULL,
  `Award` mediumtext DEFAULT NULL,
  `Profilepic` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `ID` int(10) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Education` mediumtext DEFAULT NULL,
  `Award` mediumtext DEFAULT NULL,
  `Profilepic` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`ID`, `Name`, `MobileNumber`, `Email`, `Education`, `Award`, `Profilepic`, `CreationDate`) VALUES
(1, 'Mohan Das', 7987987987, 'mohan@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in drawing and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ecebbecf28c2692aeb021597fbddb174.jpg', '2022-12-21 10:31:25'),
(2, 'Dev', 3287987987, 'dev@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 10:31:25'),
(3, 'Kanha', 9687987987, 'kanha@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 10:31:25'),
(4, 'Abir Rajwansh', 5687987987, 'abir@gmail.com', 'Completed his fine arts from klijfine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 10:31:25'),
(5, 'Krisna Dutt', 9187987987, 'krish@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 10:31:25'),
(6, 'Kajol Mannati', 8187987987, 'kajol@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 10:31:25'),
(7, 'Meera Singh', 2987987987, 'meera@gmail.com', 'Fine Arts in Painting from College of Art, New Delhi in 2012,\r\nSpecialized in printmaking and ceramic.', 'award-winning artist, and has received a scholarship from the Ministry of Culture, Government of India in 2014 as well as the Jean-Claude Reynal Scholarship (France) in 2019.\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 10:31:25'),
(8, 'Narayan Das', 9987987987, 'narayan@gmail.com', 'Completed his fine arts from hjai fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Young Artist Award in 2009, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 10:31:25'),
(11, 'Hope Wawuda', 791600506, 'hope@wawuda.com', 'Art and Design ', 'Bsc Art and Desin', '003162f6a5e01b63df4a93241076d64e.jpg', '2025-02-10 19:06:36'),
(0, 'Click Bait', 125469857, 'click@bait.com', 'A bachelors degree in marketing', 'Graduate', 'afbba823125a264290029f5b571c75c5.jpg', '2025-03-20 11:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(45) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 987654331, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-12-29 06:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `tblartist`
--

CREATE TABLE `tblartist` (
  `ID` int(10) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Education` mediumtext DEFAULT NULL,
  `Award` mediumtext DEFAULT NULL,
  `Profilepic` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblartist`
--

INSERT INTO `tblartist` (`ID`, `Name`, `MobileNumber`, `Email`, `Education`, `Award`, `Profilepic`, `CreationDate`) VALUES
(1, 'Mohan Das', 7987987987, 'mohan@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in drawing and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ecebbecf28c2692aeb021597fbddb174.jpg', '2022-12-21 13:31:25'),
(2, 'Dev', 3287987987, 'dev@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 13:31:25'),
(3, 'Kanha', 9687987987, 'kanha@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 13:31:25'),
(4, 'Abir Rajwansh', 5687987987, 'abir@gmail.com', 'Completed his fine arts from klijfine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 13:31:25'),
(5, 'Krisna Dutt', 9187987987, 'krish@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 13:31:25'),
(6, 'Kajol Mannati', 8187987987, 'kajol@gmail.com', 'Completed his fine arts from kg fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Hugo Boss Prize in 2019, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 13:31:25'),
(7, 'Meera Singh', 2987987987, 'meera@gmail.com', 'Fine Arts in Painting from College of Art, New Delhi in 2012,\r\nSpecialized in printmaking and ceramic.', 'award-winning artist, and has received a scholarship from the Ministry of Culture, Government of India in 2014 as well as the Jean-Claude Reynal Scholarship (France) in 2019.\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 13:31:25'),
(8, 'Narayan Das', 9987987987, 'narayan@gmail.com', 'Completed his fine arts from hjai fine arts college.\r\nSpecialized in painting and ceramic.', 'Winner of Young Artist Award in 2009, MacArthur Fellowship\r\n', 'ad04ad2d96ae326a9ca9de47d9e2fc74.jpg', '2022-12-21 13:31:25'),
(11, 'Hope Wawuda', 791600506, 'hope@wawuda.com', 'Art and Design ', 'Bsc Art and Desin', '003162f6a5e01b63df4a93241076d64e.jpg', '2025-02-10 22:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblartmedium`
--

CREATE TABLE `tblartmedium` (
  `ID` int(5) NOT NULL,
  `ArtMedium` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblartmedium`
--

INSERT INTO `tblartmedium` (`ID`, `ArtMedium`, `CreationDate`) VALUES
(1, 'Wood and Bronze', '2022-12-22 04:57:04'),
(2, 'Acrylic on canvas', '2022-12-22 04:57:34'),
(3, 'Resin', '2022-12-22 04:58:00'),
(4, 'Mixed Media', '2022-12-22 06:09:12'),
(5, 'Bronze', '2022-12-22 06:09:35'),
(6, 'Fibre', '2022-12-22 06:09:53'),
(7, 'Steel', '2022-12-22 06:10:16'),
(8, 'Metal', '2022-12-22 06:10:35'),
(9, 'Oil on Canvas', '2022-12-22 06:11:31'),
(10, 'Oil on Linen', '2022-12-22 06:12:12'),
(11, 'Acrylics on paper', '2022-12-22 06:13:11'),
(12, 'Hand-painted on particle wood/MDF', '2022-12-22 06:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblartproduct`
--

CREATE TABLE `tblartproduct` (
  `ID` int(5) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Dimension` varchar(250) DEFAULT NULL,
  `Orientation` varchar(100) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `Artist` int(5) DEFAULT NULL,
  `ArtType` int(5) DEFAULT NULL,
  `ArtMedium` int(5) DEFAULT NULL,
  `SellingPricing` decimal(10,0) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `Image1` varchar(250) DEFAULT NULL,
  `Image2` varchar(250) DEFAULT NULL,
  `Image3` varchar(250) DEFAULT NULL,
  `Image4` varchar(250) DEFAULT NULL,
  `RefNum` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblartproduct`
--

INSERT INTO `tblartproduct` (`ID`, `Title`, `Dimension`, `Orientation`, `Size`, `Artist`, `ArtType`, `ArtMedium`, `SellingPricing`, `Description`, `Image`, `Image1`, `Image2`, `Image3`, `Image4`, `RefNum`, `CreationDate`) VALUES
(2, 'Radhe Krishna Painting', '56x56', 'Landscape', 'Medium', 1, 4, 9, 200, 'It is a painting of Radha Krishna.\r\nIt is a painting of Radha Krishna.\r\nIt is a painting of Radha Krishna.It is a painting of Radha Krishna.\r\nIt is a painting of Radha Krishna.It is a painting of Radha Krishna.It is a painting of Radha Krishna.', 'c565ad988a4c6fc0a9f429af43c47cce1671771454.jpg', '48424793dc9ea732f6118d4ba4326509.jpg', '', '', '', 586429003, '2022-12-23 04:57:34'),
(3, 'Shiv Tandav Painting', '100X50 inches', 'Potrait', 'Large', 6, 4, 10, 350, 'It is a painting of shiv tandav.\r\nIt is a painting of shiv tandav.\r\nIt is a painting of shiv tandav.It is a painting of shiv tandav.It is a painting of shiv tandav.It is a painting of shiv tandav.It is a painting of shiv tandav.\r\nIt is a painting of shiv tandav.It is a painting of shiv tandav.', 'cd235e034297cda7b6f935dbd4881a2f1671771582.jpg', 'cd235e034297cda7b6f935dbd4881a2f1671771582.jpg', '', '', '', 686429002, '2022-12-23 04:59:42'),
(4, 'Stutue of Afel Tower', '45 inches tall', 'Landscape', 'Medium', 7, 1, 8, 500, 'It is a stute of afel tower which is made up of metal,It is a stute of afel tower which is made up of metal,It is a stute of afel tower which is made up of metal,It is a stute of afel tower which is made up of metal,It is a stute of afel tower which is made up of metal,It is a stute of afel tower which is made up of metal,It is a stute of afel tower which is made up of metal,', '508652faabdd333b34a0ce4a1dd443411671771753.jpg', '', '', '', '', 686429003, '2022-12-23 05:02:33'),
(5, 'HKjhkj', '100x200', 'Landscape', 'Large', 7, 3, 9, 200, 'gjhgj', '7d108db512f6a6a929cd0d0ad3b593e81671772410.jpg', '', '', '', '', 586429004, '2022-12-23 05:13:30'),
(6, 'Sunset', '1600x967', 'Landscape', 'Medium', 11, 2, 12, 1500, 'As the sun dips below the horizon, the lake basin glows with the last embers of daylight, casting long, golden streaks across the still waters. Shadows of towering reeds dance gently in the evening breeze, their reflections rippling like whispers of forgotten stories. A lone heron stands at the water’s edge, its silhouette blending into the deepening hues of indigo and amber. The sky, a masterpiece of fading fire and encroaching twilight, mirrors itself in the glassy lake, blurring the boundary between earth and sky. In this fleeting moment, time seems to hold its breath, embracing the quiet mystery of dusk before night claims the world.', '31a7a8d47c9dd48dd416b0db626925f01739225552.jpg', 'Serigraphs.jpg', '', '', '', 568088975, '2025-02-10 22:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblarttype`
--

CREATE TABLE `tblarttype` (
  `ID` int(5) NOT NULL,
  `ArtType` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblarttype`
--

INSERT INTO `tblarttype` (`ID`, `ArtType`, `CreationDate`) VALUES
(1, 'Sculptures / Woodworking', '2022-12-21 14:21:13'),
(2, 'Serigraphs', '2022-12-21 14:24:46'),
(4, 'Painting/ Drawing', '2022-12-21 14:25:31'),
(5, 'Street Art', '2022-12-21 14:26:06'),
(7, 'Conceptual art/ Illustration', '2022-12-21 14:26:45'),
(12, 'Doodling/ Mandala', '2025-03-19 13:52:33'),
(14, 'Photography', '2025-03-19 13:55:08'),
(15, 'Glass Art', '2025-03-19 13:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblblog`
--

CREATE TABLE `tblblog` (
  `ID` int(5) NOT NULL,
  `Type` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblblog`
--

INSERT INTO `tblblog` (`ID`, `Type`, `CreationDate`) VALUES
(1, 'Poems', '2025-03-21 08:21:13'),
(2, 'Stories', '2025-03-21 08:24:46'),
(3, 'Words to Think About', '2025-03-21 08:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblblogmaterial`
--

CREATE TABLE `tblblogmaterial` (
  `ID` int(5) NOT NULL,
  `Material` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblblogmaterial`
--

INSERT INTO `tblblogmaterial` (`ID`, `Material`, `CreationDate`) VALUES
(1, 'Love', '2025-03-19 08:08:22'),
(2, 'War', '2025-03-19 08:08:22'),
(3, 'Romance', '2025-03-19 08:08:22'),
(4, 'Politics', '2025-03-19 08:08:22'),
(5, 'Religion', '2025-03-19 08:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblblogproduct`
--

CREATE TABLE `tblblogproduct` (
  `ID` int(5) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Dimension` varchar(250) DEFAULT NULL,
  `Orientation` varchar(100) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `Artist` varchar(255) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `ArtMedium` varchar(255) DEFAULT NULL,
  `SellingPricing` decimal(10,0) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `Image1` varchar(250) DEFAULT NULL,
  `Image2` varchar(250) DEFAULT NULL,
  `Image3` varchar(250) DEFAULT NULL,
  `Image4` varchar(250) DEFAULT NULL,
  `RefNum` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `ID` int(10) NOT NULL,
  `EnquiryNumber` varchar(10) NOT NULL,
  `Artpdid` int(9) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Message` varchar(250) DEFAULT NULL,
  `EnquiryDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(10) DEFAULT NULL,
  `AdminRemark` varchar(200) NOT NULL,
  `AdminRemarkdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`ID`, `EnquiryNumber`, `Artpdid`, `FullName`, `Email`, `MobileNumber`, `Message`, `EnquiryDate`, `Status`, `AdminRemark`, `AdminRemarkdate`) VALUES
(1, '230873611', 4, 'Anuj kumar', 'ak@test.com', 1234567890, 'This is for testing Purpose.', '2023-01-02 18:16:47', 'Answer', 'test purpose', '2023-01-01 18:30:00'),
(2, '227883179', 5, 'Amit Kumar', 'amitk55@test.com', 1234434321, 'I want this painting', '2023-01-02 18:42:42', 'Answer', 'testing purpose', '2023-01-02 18:43:16'),
(3, '963238481', 4, 'Hello ', 'hello@world.com', 200014578, 'Interested in this.', '2025-02-10 22:38:54', NULL, '', NULL),
(4, '964829141', 2, 'Kelvin', 'kelvoshisanya@gmail.com', 145236598, 'Hello, can i get more info on this particular piece, am placing an order on.', '2025-02-21 00:17:45', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblfashion`
--

CREATE TABLE `tblfashion` (
  `ID` int(5) NOT NULL,
  `Type` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfashion`
--

INSERT INTO `tblfashion` (`ID`, `Type`, `CreationDate`) VALUES
(1, 'T-Shirts', '2022-12-21 11:21:13'),
(2, 'Hoodies', '2022-12-21 11:24:46'),
(3, 'Flannels', '2022-12-21 11:25:00'),
(4, 'Jackets', '2022-12-21 11:25:31'),
(5, 'Trench Coats', '2022-12-21 11:26:06'),
(6, 'Shoes ', '2022-12-21 11:26:29'),
(7, 'Socks ', '2022-12-21 11:26:29'),
(8, 'Trousers', '2022-12-21 11:26:45'),
(0, 'Sweatpants', '2025-03-20 07:29:34'),
(0, 'Camera', '2025-03-20 11:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `tblfashionenquiry`
--

CREATE TABLE `tblfashionenquiry` (
  `ID` int(10) NOT NULL,
  `EnquiryNumber` varchar(10) NOT NULL,
  `Artpdid` int(9) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `Size` varchar(255) NOT NULL,
  `Orders` int(10) NOT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Message` varchar(250) DEFAULT NULL,
  `EnquiryDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(10) DEFAULT NULL,
  `AdminRemark` varchar(200) NOT NULL,
  `AdminRemarkdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfashionenquiry`
--

INSERT INTO `tblfashionenquiry` (`ID`, `EnquiryNumber`, `Artpdid`, `FullName`, `Size`, `Orders`, `Email`, `MobileNumber`, `Message`, `EnquiryDate`, `Status`, `AdminRemark`, `AdminRemarkdate`) VALUES
(0, '882239381', 14, 'Cleophas Malala', 'Large', 5, 'cleo@malala.com', 758462515, 'Please i want the blue and red ones', '2025-03-20 13:16:58', 'Answer', 'Packaged for delivery', '2025-03-21 13:03:31'),
(0, '679035060', 14, 'Cleo Malala', 'Large', 5, 'cleo@malala.com', 125487896, 'Yeap', '2025-03-20 13:18:37', 'Answer', 'Packaged for delivery', '2025-03-21 13:03:31'),
(0, '767202686', 14, 'Frank', 'Large', 5, 'frank@frank.com', 125487956, 'PLease deliver', '2025-03-20 13:51:21', 'Answer', 'Packaged for delivery', '2025-03-21 13:03:31'),
(0, '705762499', 14, 'Kelvin', 'Large', 2, 'kelvoshisanya@gmail.com', 145236589, 'OrderOrderOrderOrderOrderOrder\r\n', '2025-03-21 13:11:38', NULL, '', NULL),
(0, '533949296', 15, 'Collins', 'Large', 5, 'collins@koech', 125485645, 'orderorderorderorderorderorderorderorder', '2025-03-21 13:47:47', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblfashionmaterial`
--

CREATE TABLE `tblfashionmaterial` (
  `ID` int(5) NOT NULL,
  `Material` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfashionmaterial`
--

INSERT INTO `tblfashionmaterial` (`ID`, `Material`, `CreationDate`) VALUES
(1, 'Fine Linen', '2025-03-19 11:08:22'),
(2, 'Cashmere wool', '2025-03-19 11:08:22'),
(3, 'Cotton', '2025-03-19 11:08:22'),
(4, 'Cellulosic fibres/viscose', '2025-03-19 11:08:22'),
(5, 'Wool', '2025-03-19 11:08:22'),
(6, 'Hemp', '2025-03-19 11:08:22'),
(7, 'Ramie', '2025-03-19 11:08:22'),
(8, 'Silk', '2025-03-19 11:08:22'),
(9, 'Leather', '2025-03-19 11:08:22'),
(10, 'Down for down-filled parkas', '2025-03-19 11:08:22'),
(11, 'Fur', '2025-03-19 11:08:22'),
(12, 'Beads', '2025-03-20 11:54:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblfashionproduct`
--

CREATE TABLE `tblfashionproduct` (
  `ID` int(5) NOT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Dimension` varchar(250) DEFAULT NULL,
  `Orientation` varchar(100) DEFAULT NULL,
  `Size` varchar(100) DEFAULT NULL,
  `Designer` varchar(255) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `ArtMedium` varchar(255) DEFAULT NULL,
  `SellingPricing` decimal(10,0) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Image` varchar(250) DEFAULT NULL,
  `Image1` varchar(250) DEFAULT NULL,
  `Image2` varchar(250) DEFAULT NULL,
  `Image3` varchar(250) DEFAULT NULL,
  `Image4` varchar(250) DEFAULT NULL,
  `RefNum` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfashionproduct`
--

INSERT INTO `tblfashionproduct` (`ID`, `Title`, `Dimension`, `Orientation`, `Size`, `Designer`, `Type`, `ArtMedium`, `SellingPricing`, `Description`, `Image`, `Image1`, `Image2`, `Image3`, `Image4`, `RefNum`, `CreationDate`) VALUES
(14, 'Classic Cotton T-Shirt', 'All Fit Sizes available', 'Unisex', 'Large', '11', '1', '3', 1500, 'Welcome to drip world', 'afbba823125a264290029f5b571c75c51742475837.jpg', '', '', '', '', 264151985, '2025-03-20 13:03:57'),
(15, 'Pretty Dress', 'Classy, Sexy', 'Female', 'Large', '0', '0', '1', 500, 'Let the feminine in you shout out', 'b48cf4aa4b861353111a9303b3b5a6e31742477073.jpg', '', '', '', '', 332504013, '2025-03-20 13:24:33'),
(16, 'Jack&Jones Hoodie', 'Wooosshhhh', 'Unisex', 'Large', '11', '2', '5', 1500, 'Kick the cold with style', 'a58a4fc611108b424637f1702c4e683f1742477308.png', '', '', '', '', 144338609, '2025-03-20 13:28:28'),
(17, 'Flannel', 'Wooshhhh', 'Unisex', 'Large', '11', '3', '', 700, 'Hot for sweater cold for shirt? Rock in these.', '1fe91ff7b726d88c2172ab05a1090b131742477503.jpg', '', '', '', '', 881517991, '2025-03-20 13:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` longtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '<div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\">At <b>FRNKL</b>, we are a vibrant hub that celebrates <i><b>creativity, expression, </b>and<b> the power of art</b></i> to connect, inspire, and uplift communities. Our organization proudly manages a diverse range of initiatives, including an <b><i>art gallery, a donations program, a talent showcase</i></b></span></font><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">&nbsp;</span><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\"><b><i>and a blog</i></b> dedicated to <i><b>poetry and storytelling</b></i>. Each of these elements contributes to our mission of fostering an inclusive and supportive environment for emerging and established artists, writers, and performers.</span></font></div><div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></div><div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\">Our gallery is a platform for visual artists to display their work and connect with an appreciative audience. We curate exhibitions that highlight both local and global talent, showcasing a wide array of mediums, styles, and voices. The gallery serves as a space where creativity meets community, providing artists with the opportunity to engage with visitors, share their stories, and inspire conversation.</span></font></div><div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></div><div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\">We believe in the power of giving. The donations program supports the arts by providing funding and resources to emerging artists, community projects, and creative initiatives. Contributions from individuals and organizations allow us to continue to grow our programs and extend our impact, helping to nurture the next generation of creative talent.</span></font></div><div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\">Our talent program is designed to give individuals in various fields—whether it\'s visual arts, music, dance, or performance—the opportunity to showcase their skills. Through workshops, performances, and collaborations, we aim to empower individuals to hone their craft, build confidence, and find their voice in the creative world.</span></font></div><div style=\"text-align: center;\"><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\"><br></span></div><div style=\"text-align: center;\"><span style=\"font-size: 16px; color: rgb(32, 33, 36); font-family: arial, sans-serif;\">For our blog, it\'s a space for writers of all backgrounds to share their poetry, short stories, and creative prose. Through our blog, we encourage literary exploration, providing a platform for voices that reflect a wide range of experiences and perspectives. Whether you\'re a seasoned writer or someone just beginning to explore the world of storytelling, our blog is an open and supportive space for you to express yourself.</span></div><div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></div><div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\">At <b>FRNKL</b>, we are dedicated to <i><b>nurturing talent, fostering artistic growth, and promoting the arts</b></i> in all its forms.&nbsp;</span></font></div><div style=\"text-align: center;\"><font color=\"#202124\" face=\"arial, sans-serif\"><span style=\"font-size: 16px;\">Join us on our journey as we continue to create opportunities for artistic expression, cultural exchange, and community engagement.</span></font></div>', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', 'Thika_RD,Nairobi,Kenya', 'info@gmail.com', 1234567890, NULL, '10:30 am to 5:30 pm'),
(3, 'fashion', 'Fashion', '<span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">Fashion in its sense&nbsp;</span><b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">an exhibition space to display all your fashion and style</b><span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">. Here you will find different forms of fashion and style of your liking</span><br>', NULL, NULL, NULL, ''),
(4, 'blog', 'Blog', '<span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">An art gallery is&nbsp;</span>\r\n<b style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">an exhibition space to display and sell artworks</b>\r\n<span style=\"color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\">. As a result, the art gallery is a commercial enterprise working with a portfolio of artists. The gallery acts as the dealer representing, supporting, and distributing the artworks by the artists in question.</span><br>', NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblartist`
--
ALTER TABLE `tblartist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblartmedium`
--
ALTER TABLE `tblartmedium`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblartproduct`
--
ALTER TABLE `tblartproduct`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblarttype`
--
ALTER TABLE `tblarttype`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CardId` (`Artpdid`);

--
-- Indexes for table `tblfashionmaterial`
--
ALTER TABLE `tblfashionmaterial`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfashionproduct`
--
ALTER TABLE `tblfashionproduct`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
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
-- AUTO_INCREMENT for table `tblartist`
--
ALTER TABLE `tblartist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblartmedium`
--
ALTER TABLE `tblartmedium`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblartproduct`
--
ALTER TABLE `tblartproduct`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblarttype`
--
ALTER TABLE `tblarttype`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblfashionmaterial`
--
ALTER TABLE `tblfashionmaterial`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblfashionproduct`
--
ALTER TABLE `tblfashionproduct`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
