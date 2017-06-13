-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 04:57 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `city_hostels`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_cities`
--

CREATE TABLE `enrolled_cities` (
  `cityId` int(11) NOT NULL,
  `cityName` varchar(30) NOT NULL,
  `Discription` text NOT NULL,
  `cityLat` varchar(20) NOT NULL,
  `cityLong` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled_cities`
--

INSERT INTO `enrolled_cities` (`cityId`, `cityName`, `Discription`, `cityLat`, `cityLong`) VALUES
(1, 'Bahawalnagar', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '29.9991830', '73.2588440'),
(2, 'Karachi', '\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', ' 24.8614620', ' 67.0099390'),
(3, 'Lahore', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', ' 31.5546060', ' 74.3571580'),
(4, 'Multan', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', ' 30.1983810', ' 71.4687030'),
(5, 'Rawalpindi', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '33.5983940', ' 73.0441350');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `feature_id` int(11) NOT NULL,
  `recommend` text NOT NULL,
  `free_facilities` text NOT NULL,
  `paid_facilities` text NOT NULL,
  `others` text NOT NULL,
  `offered` text NOT NULL,
  `not_allowed` text NOT NULL,
  `H_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `recommend`, `free_facilities`, `paid_facilities`, `others`, `offered`, `not_allowed`, `H_id`) VALUES
(4, 'boys', 'bath', 'internet', 'carpeted rooms', 'press', 'ammi abu', 16),
(5, 'boys, girls', 'book shelf, bed, carpetted room, bath', 'mess, net', 'internet, library, jim', 'double bed room, lounge, laundary', 'geust', 17),
(7, 'boys', 'breakfast, internet, pick and drop', 'lunch, dinner, laundary', 'clean rooms, shelf, bed, carpeted, gezzer, bus stop, masjid, market', 'songs in loud voice, voilance with other tenants', 'dec, song in loud voice, voilence with other tenants', 19);

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `H_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `cnic` varchar(30) NOT NULL,
  `H_Name` varchar(30) NOT NULL,
  `frontImage` varchar(100) NOT NULL,
  `street_address` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `Discription` varchar(2000) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`H_id`, `admin_name`, `cnic`, `H_Name`, `frontImage`, `street_address`, `city`, `state`, `Discription`, `latitude`, `longitude`, `contact`, `login_id`) VALUES
(16, 'anwar', '3110284272391', 'city hostel', '0.jpg', 'st # 4 madina road', 'bahawalnagar', 'punjab', 'this hostel is a good hostel', '29.9940168', '73.2453686', '03233929339', 9),
(17, 'ahmad khan', '3110185872391', 'new hostel', 'IMG_20150720_162004.jpg', 'main road degree clg', 'bahawalnagar', 'punjab', 'this is a new hostel for boys and girls, we have saprate apartments for boys and girls. Come and watch that we have provide good services to our customer, thanks', '\n29.9952061', '73.2675558', '03074837385', 6),
(19, 'naseem', '3110238473637', 'naseem boys hostel', 'DSCN3866.JPG', 'yaawer street near rizwan medical store', 'lahore', 'punjab', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then ', '31.5544597', '74.3351853', '03444543776', 13);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `room1` varchar(100) NOT NULL,
  `room2` varchar(100) NOT NULL,
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `H_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `room1`, `room2`, `pic1`, `pic2`, `H_id`) VALUES
(2, '1.jpg', '2.jpg', '3.jpg', '4.jpg', 16),
(3, 'IMG_20150720_162030.jpg', 'IMG_20150720_162036.jpg', 'IMG_20150720_162039.jpg', 'IMG_20150720_162055.jpg', 17),
(4, 'DSCN3843.JPG', 'DSCN3822.JPG', 'DSCN3859.JPG', 'DSCN3779.JPG', 19);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `login_id` int(11) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`login_id`, `userEmail`, `password`) VALUES
(6, 'ahkhan@gmail.com', 'asdf'),
(9, 'k.abdulhanan@yahoo.com', 'jjsk'),
(13, 'boyfb573@gmail.com', 'kkkk');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `T_Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `F_Name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `CNIC` varchar(15) NOT NULL,
  `Cell_No` varchar(13) NOT NULL,
  `job` varchar(30) NOT NULL,
  `organization` varchar(30) NOT NULL,
  `Admission_date` date NOT NULL,
  `H_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`T_Id`, `Name`, `F_Name`, `image`, `CNIC`, `Cell_No`, `job`, `organization`, `Admission_date`, `H_id`) VALUES
(1, 'irfan', 'amin', 'naseem_boys_hostel_irfan_3110238473637_2016-12-16.jpg', '3110238473637', '03327094696', 'student', 'iub', '2016-12-16', 19),
(2, 'ahmed', 'Usman', 'naseem_boys_hostel_ahmed_3110185872391_2016-12-16.jpg', '3110185872391', '03327094694', 'student', 'iub', '2016-12-16', 19);

-- --------------------------------------------------------

--
-- Table structure for table `t_relative`
--

CREATE TABLE `t_relative` (
  `tr_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `CNIC` varchar(15) NOT NULL,
  `DOM` date NOT NULL,
  `T_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrolled_cities`
--
ALTER TABLE `enrolled_cities`
  ADD PRIMARY KEY (`cityId`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`H_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`T_Id`);

--
-- Indexes for table `t_relative`
--
ALTER TABLE `t_relative`
  ADD PRIMARY KEY (`tr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrolled_cities`
--
ALTER TABLE `enrolled_cities`
  MODIFY `cityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `H_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `T_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_relative`
--
ALTER TABLE `t_relative`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
