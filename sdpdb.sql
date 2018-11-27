-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 02:08 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_phone` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_id`, `product_name`, `product_price`, `product_quantity`, `product_description`, `product_image`) VALUES
(1, 'Rockets Girls LIGHT Album', '150.00', 15, 'Rockets Girls latest album after they have to start their career as a group of superstar after the competition of Produce 101    ', ''),
(2, 'Girl Generation HOLIDAY Album', '255.00', 10, 'Holiday Night is the sixth Korean-language studio album and ninth overall by South Korean girl group Girls\' Generation. It was released digitally on August 4 and physically on August 7, 2017 by S.M. Entertainment to commemorate the group\'s tenth anniversary since their debut in 2007. Lee Soo-man, founder of S.M. Entertainment, served as the album\'s executive producer.\r\n', '2a'),
(3, 'Joker XUE - Gentleman Album', '50.00', 10, 'In 2006, Xue released his eponymous debut album, in which the song "Serious Snow" was a hit in China. The album has sold more than five hundred million copies in China and became one of the best selling debut album in China. In 2007, Xue released his second album, How Are You?, which has sold more than one hundred and fifty thousand copies during the initial week of release. In 2008, Xue released his third album, Deep in Love with You.', '3a\r\n'),
(4, 'LAY - Namanana Album', '55.00', 10, 'In August 2014, Lay joined his first variety show, Star Chef as a cast member.[22] In April 2015, SM Entertainment announced that a personal studio had been established for Lay\'s activities in China.[23] In May 2015, he became a regular cast member of the Chinese reality television show Go Fighting!.[24] Lay subsequently starred in the second,[25] third,[26] and fourth season of Go Fighting,[27] which led to increased recognition for him in China.[28]', '4a'),
(5, 'BTM -WINGS', '120.00', 10, 'Wings is the second Korean studio album (fourth overall) by South Korean boy band BTS. The album was released on October 10, 2016 by Big Hit Entertainment. It is available in four versions and contains fifteen tracks, with "Blood Sweat & Tears" as its lead single.[1] Heavily influenced by Hermann Hesse\'s coming of age novel, Demian, the concept album thematically deals with temptation and growth.', '5a'),
(6, 'EXO - Exact Album', '25.00', 10, 'Exo is the first studio album of Chicago-based electronic duo Gatekeeper, consisting of musicians Aaron David Ross and Matthew Arkell. It was released on July 17, 2012, on the label Hippos in Tanks. The EBM, IDM and acid techno album departs from the synth-heavy style of Gatekeeper\'s past releases, in that most of the melodies are performed by a sampler with a sound palette of high-definition Hollywood film sound effects.', '6a');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `trust` varchar(500) NOT NULL DEFAULT 'Trusted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `name`, `phone`, `email`, `password`, `address`, `trust`) VALUES
(1, 'no', '127798044', 'jfleezf@outlook.com', '$2y$10$7WOgcVc3CZ4H3f5itImy7ucg9/gVhOrQibMdS5NbWR0/xYcnqtA8.', 'Vista Komanwel A, A2-5-2, 57000 Bukit Jalil, Kuala Lumpur', 'Trusted'),
(3, 'sunny', '127798044', 'hanikwonsone@gmail.com', '$2y$10$3S6wY7F2M34LQ6fz0WGbOujkt2Tx6ATGd7b.5F7dbRuXh4TVUxdRS', 'Vista Komanwel A, A2-5-2, 57000 Bukit Jalil, Kuala Lumpur', 'Trusted'),
(5, 'zzn', '0172845323', 'zzn@outlook.com', '$2y$10$bslRe0GpYx047lWmf3L22ubfBlE22GTadi2MKIobQbp7o.uOLbvQa', '15, Jalan B/H9, Taman Banang Height, 83000 Batu Pahat, Johor', 'Trusted'),
(8, 'Tiew Cheng Mun', '0172845323', 'ahmun0223@outlook.com', '$2y$10$qikmcmVwPDdTGykcxELzH.hI88fkLOzfpng0vIzF6HPup2RuF4Xm2', 'Vista Komanwel A, A2-5-2, 57000, Bukit Jalil, Kuala Lumpur', 'Trusted');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `payment_method` varchar(500) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders_details`
--

CREATE TABLE `orders_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useful`
--

CREATE TABLE `useful` (
  `feedback_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `member_rating` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD UNIQUE KEY `product_id` (`product_id`,`member_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `useful`
--
ALTER TABLE `useful`
  ADD UNIQUE KEY `feedback_id` (`feedback_id`,`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`ID`);

--
-- Constraints for table `orders_details`
--
ALTER TABLE `orders_details`
  ADD CONSTRAINT `orders_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`product_id`),
  ADD CONSTRAINT `orders_details_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`product_id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
