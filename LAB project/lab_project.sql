-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 09:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_aboutus`
--

CREATE TABLE `add_aboutus` (
  `id` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Heading` varchar(100) NOT NULL,
  `Description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_aboutus`
--

INSERT INTO `add_aboutus` (`id`, `Date`, `Time`, `Image`, `Heading`, `Description`) VALUES
(13, '2022-06-23', '00:21', 'images/about-img-01.jpg', 'Our Lab', 'Alkhidmat is operating 119 diagnostic laboratories and collection centers all over the country.\r\n\r\nState of the Art laboratories is the tradition of AlKhidmat Foundation. AlKhidmat’s laboratories have latest and digital machinery to perform PCR, X-RAY,MRI, hepatitis, HIV and many other tests. Collection centers and instant reports with free of cost service to deserving people makes its difference. AlKhidmat Foundation have forty five (45) laboratories across Punjab with Annually ten thousand free tests for the deserving and poor patient.'),
(14, '2022-06-21', '10:25', 'images/about-img-02.jpg', 'asxasmascas', 'sdasdasd'),
(15, '2022-06-15', '02:22', 'images/about-img-03.jpg', 'gfgtrg', 'dasda');

-- --------------------------------------------------------

--
-- Table structure for table `add_address`
--

CREATE TABLE `add_address` (
  `id` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email1` varchar(100) NOT NULL,
  `Email2` varchar(100) NOT NULL,
  `Phoneno1` varchar(100) NOT NULL,
  `Phoneno2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_address`
--

INSERT INTO `add_address` (`id`, `Date`, `Time`, `Address`, `Email1`, `Email2`, `Phoneno1`, `Phoneno2`) VALUES
(2, '2021-07-22', '05:35', 'Jamia Fridia Road Sahiwal', 'Alkhidmatlab@gmail.com', 'zunair.b.ahmad@gmail.com', '03236822584', '03134220210');

-- --------------------------------------------------------

--
-- Table structure for table `add_contact`
--

CREATE TABLE `add_contact` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(100) NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  `Twitter` varchar(100) NOT NULL,
  `Instagram` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_contact`
--

INSERT INTO `add_contact` (`Name`, `Email`, `Number`, `Facebook`, `Twitter`, `Instagram`, `Date`, `Time`, `Image`, `id`) VALUES
('znznxnuiw', 'vcvxcvc@dfgdfg', '4455345435', 'zvav', 'zfvvv', 'aaaaaaaa', '2021-06-11', '10:06', 'images/Capture.PNG', 3);

-- --------------------------------------------------------

--
-- Table structure for table `add_faq,s`
--

CREATE TABLE `add_faq,s` (
  `id` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Select` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_faq,s`
--

INSERT INTO `add_faq,s` (`id`, `Question`, `Answer`, `Date`, `Description`, `Select`, `Image`) VALUES
(8, 'cmcmlc', 'jnaskncklsmckl', '2021-07-13', 'ssssssssssssssss', 'Can I have a shopping cart?', 'images/favicon.ico');

-- --------------------------------------------------------

--
-- Table structure for table `add_gallery`
--

CREATE TABLE `add_gallery` (
  `id` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_gallery`
--

INSERT INTO `add_gallery` (`id`, `Date`, `Time`, `Title`, `Image`) VALUES
(1, '2021-07-16', '23:26', 'Horiba 5 part cbc analyzer', 'images/download (4).jpg'),
(5, '2021-07-16', '23:26', 'Mindray bs240 pro Chemistry analyzer', 'images/download (1).jpg'),
(6, '2022-06-21', '12:12', 'Bs240 pro Working chamber', 'images/images (4).jpg'),
(7, '2022-06-15', '12:15', 'Bs240 pro cutives', 'images/images (5).jpg'),
(8, '2022-06-17', '12:18', 'lab microwave', 'images/download (3).jpg'),
(9, '2022-06-08', '12:19', 'Microcsope', 'images/gallery-08.jpg'),
(10, '2022-06-09', '12:18', 'Microlab 300 Chemistry analyzer', 'images/download.jpg'),
(11, '2022-06-24', '12:21', 'Centrifuge machine', 'images/download (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_report`
--

CREATE TABLE `add_report` (
  `id` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Ptname` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Labno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_report`
--

INSERT INTO `add_report` (`id`, `Date`, `Time`, `Ptname`, `Image`, `Labno`) VALUES
(1, '2021-07-14', '22:03', 'muaz', '', '122223444'),
(2, '2021-07-23', '20:34', 'zunair', 'images/2A_Finalterm.pdf', '22311');

-- --------------------------------------------------------

--
-- Table structure for table `add_services`
--

CREATE TABLE `add_services` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Catagory` varchar(1000) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_services`
--

INSERT INTO `add_services` (`id`, `Name`, `Description`, `Date`, `Time`, `Catagory`, `Type`) VALUES
(13, 'Patient Care', 'As well as Alkhidmat foundation helps the underprivileged patients. Thalessimia Major is a genetic disorder in which the patient is dependent on regular blood transfusion to live. Thalessimia major patients need blood after every 15-20 days. In Pakistan 5000 thalessimia kids are born every year..', '2022-07-01', '11:27', 'Alkhidmat Lab provides complete treatment to Thalessima patients', 'SADASDASDASD'),
(14, 'Blood Bank', 'Where blood is collected from donors, typed, separated into components, stored, and prepared for transfusion to recipients like Accident victims, people undergoing surgery and patients receiving treatment for leukemia, cancer or other diseases, such as sickle cell disease and thalassemia. Red blood cells carry oxygen, ', '2022-06-16', '11:28', 'Alkhidmat have 5 blood banks in major cities of Pakistan', 'aa'),
(15, 'Thalassemia Care', 'as well as Alkhidmat foundation helps the underprivileged patients. Thalessimia Major is a genetic disorder in which the patient is dependent on regular blood transfusion to live. Thalessimia major patients need blood after every 15-20 days. In Pakistan 5000 thalessimia kids are born every year for health of patients ', '2022-06-22', '11:28', 'Alkhidmat Lab provides complete treatment to Thalessima patients', 'aaa'),
(17, 'Hepatitis Care', 'As well as Alkhidmat foundation helps the underprivileged patients. Thalessimia Major is a genetic disorder in which the patient is dependent on regular blood transfusion to live. Thalessimia major patients need blood after every 15-20 days. In Pakistan 5000 thalessimia kids are born every year..', '2022-06-16', '11:49', '18 million people in Pakistan are infected with Hepatitis B & C', 'dfdf'),
(18, 'zazaza', 'As well as Alkhidmat foundation helps the underprivileged patients. Thalessimia Major is a genetic disorder in which the patient is dependent on regular blood transfusion to live. Thalessimia major patients need blood after every 15-20 days. In Pakistan 5000 thalessimia kids are born every year..', '2022-06-14', '11:52', '18 million people in Pakistan are infected with Hepatitis B & C', 'sfsfs');

-- --------------------------------------------------------

--
-- Table structure for table `add_slider`
--

CREATE TABLE `add_slider` (
  `id` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_slider`
--

INSERT INTO `add_slider` (`id`, `Date`, `Time`, `Image`) VALUES
(16, '2022-06-26', '10:19', 'images/blog-img-qqq.jpg'),
(17, '2022-06-15', '10:18', 'images/qqwwr.jpg'),
(18, '2022-06-07', '10:20', 'images/laboratory-g0cb823daa_1920.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_team`
--

CREATE TABLE `add_team` (
  `id` int(11) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_team`
--

INSERT INTO `add_team` (`id`, `Date`, `Time`, `Designation`, `Image`, `Name`) VALUES
(3, '2021-07-15', '22:52', 'Lab Incharge', 'images/WhatsApp Image 2022-06-11 at 10.39.08 AM.jpeg', 'Muaz Bin Ahmad'),
(4, '2021-07-22', '22:55', 'Lab Receptionist', 'images/WhatsApp Image 2022-06-11 at 10.53.07 AM.jpeg', 'Zunair Bin Ahmad'),
(5, '2021-07-19', '22:54', 'Lab Technition', 'images/WhatsApp Image 2022-06-11 at 10.43.44 AM.jpeg', 'Hamid');

-- --------------------------------------------------------

--
-- Table structure for table `add_test`
--

CREATE TABLE `add_test` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_test`
--

INSERT INTO `add_test` (`id`, `Name`, `Price`, `Date`, `Time`, `Image`) VALUES
(3, 'sugar ', '50 Rs', '2021-07-15', 'After two hours', 'images/blog-img-01.jpg'),
(4, 'cho', '100', '2021-07-12', 'After two hours', 'images/pngwing.com.png'),
(5, 'Tg', '100', '2021-07-28', 'After two hours', 'images/pngwing.com.png'),
(6, 'lft', '500', '2021-07-12', 'After two hours', 'images/pngwing.com.png'),
(7, 'rft', '200', '2021-07-20', 'After two hours', 'images/pngwing.com.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `Name`, `Email`, `Number`, `Message`) VALUES
(1, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(2, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(3, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(4, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(5, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(6, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(7, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(8, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(9, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(10, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(11, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(12, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(13, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(14, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(15, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(16, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(17, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij'),
(18, 'Tests', 'vcvxcvc@dfgdfg', '23454524', 'vvjbjhbb;ij;ij');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `name`) VALUES
(3, 'zunair.b.ahmad@gmail.com', '9bca684b0fbbfe87ab040f06beda9054', ''),
(4, 'muaz@gmail.com', 'muaz', 'Muaz Bin Ahmad'),
(5, 'zzzz@gmail.com', '02c425157ecd32f259548b33402ff6d3', 'zzzz@gmail.com'),
(6, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e', '');

-- --------------------------------------------------------

--
-- Table structure for table `privacypolicy`
--

CREATE TABLE `privacypolicy` (
  `id` int(11) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privacypolicy`
--

INSERT INTO `privacypolicy` (`id`, `Name`, `Date`, `Time`, `Image`) VALUES
(3, 'Privacy statement\r\nAs an MCL customer, the protection of your privacy is of prime importance to us. We assure our users and customers that the personal information they would share us through form filling or booking procedures and as mentioned in privacy policy shall not be disclosed and used under any circumstance except that mentioned under the head of privacy policy. However, it is to be bought to the notice that accepting the website cookies, subscribing to it or being MCL mobile app user, your data shall be liable to be used to send email, SMS and notifications to keep you updated about the services and website. A user at anytime can stop these notifications and alerts.', '2021-06-03', '00:32', 'images/logo sample.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Tests` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `Phone`, `Address`, `Tests`) VALUES
(3, 'fvdfvsdfvd', '232e32', 'dsvsfsd', 'sdfsdfd'),
(4, 'sscc', '2e12', 'sdfasdvac', 'vavav'),
(5, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(7, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(8, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(15, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(16, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(17, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(18, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(19, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(20, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(21, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(22, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(23, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(24, 'zzzz', '4345345', 'aaaaa', 'sugar'),
(25, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(26, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(27, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(28, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(29, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(30, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(31, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(32, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(33, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(34, 'zuanir bin ahmad', '999091123', 'sahiwal', 'lfts rft'),
(35, 'zunair bin ahmad', '57967899009709709', 'gulistan colony', 'jbjhbhb'),
(36, 'zunair bin ahmad', '57967899009709709', 'gulistan colony', 'jbjhbhb'),
(37, 'zunair bin ahmad', '57967899009709709', 'gulistan colony', 'jbjhbhb'),
(38, 'zunair bin ahmad', '57967899009709709', 'gulistan colony', 'jbjhbhb'),
(39, 'zunair bin ahmad', '57967899009709709', 'gulistan colony', 'jbjhbhb'),
(40, 'zunair bin ahmad', '57967899009709709', 'gulistan colony', 'jbjhbhb'),
(41, 'zunair bin ahmad', '57967899009709709', 'gulistan colony', 'jbjhbhb'),
(42, 'zunair bin ahmad', '57967899009709709', 'gulistan colony', 'jbjhbhb');

-- --------------------------------------------------------

--
-- Table structure for table `termsandcondition`
--

CREATE TABLE `termsandcondition` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `termsandcondition`
--

INSERT INTO `termsandcondition` (`id`, `Name`, `Date`, `Time`, `Image`) VALUES
(2, 'zazaza', '2021-06-24', '09:14', 'images/'),
(3, 'zzzz', '2021-06-08', '01:39', 'images/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_aboutus`
--
ALTER TABLE `add_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_address`
--
ALTER TABLE `add_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_contact`
--
ALTER TABLE `add_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_faq,s`
--
ALTER TABLE `add_faq,s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_gallery`
--
ALTER TABLE `add_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_report`
--
ALTER TABLE `add_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_services`
--
ALTER TABLE `add_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_slider`
--
ALTER TABLE `add_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_team`
--
ALTER TABLE `add_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_test`
--
ALTER TABLE `add_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacypolicy`
--
ALTER TABLE `privacypolicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termsandcondition`
--
ALTER TABLE `termsandcondition`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_aboutus`
--
ALTER TABLE `add_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `add_address`
--
ALTER TABLE `add_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_contact`
--
ALTER TABLE `add_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_faq,s`
--
ALTER TABLE `add_faq,s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_gallery`
--
ALTER TABLE `add_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_report`
--
ALTER TABLE `add_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_services`
--
ALTER TABLE `add_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `add_slider`
--
ALTER TABLE `add_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `add_team`
--
ALTER TABLE `add_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_test`
--
ALTER TABLE `add_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `privacypolicy`
--
ALTER TABLE `privacypolicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `termsandcondition`
--
ALTER TABLE `termsandcondition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
