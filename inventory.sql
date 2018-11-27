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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
