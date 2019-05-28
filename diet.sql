-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2019 at 12:24 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghazala`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `nm` varchar(300) NOT NULL,
  `img` varchar(50) NOT NULL,
  `des` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `nm`, `img`, `des`) VALUES
(1, 'How many meals are important in a day......', 'b1.jpg', 'This is the question that seems to come on our minds when we head to start a healthy diet plan. The answer here could be 3 meals or 5 meals or more than 5 meals in a day. There is no right or wrong answer to this question; as all our body\'s needs are different and also our body\'s reaction to hunger differs. However, both our body and mind need a continuous supply of energy and nutrients through the day to help us keep moving. So, our main concern should be having a well-planned balanced meal providing us with optimum  energy supply through the day.</br>Studies have shown that having less than three meals in a day can affect your body\'s efficiency and can also lead to many nutritional deficiencies. Moreover, when the people who eat less than three meals in a day sit down to eat or have a snack, they end up eating more of fatty and high calorie foods compared to those who eat regular meals. This kind of over indulgence can have many wrong effects on your body like unhealthy weight gain, hormonal changes, digestion issues etc. It also tends to bring down  body\'s metabolism. If your job keeps you busy and you end up being without food for long hours, it is advisable to have a healthy breakfast before you leave for work. This way, your body has enough resources to keep you going for some time till you don\'t replenish your resources. Also don\'t forget to keep some healthy snacks handy.'),
(2, 'Plant or Animal Protein Which One Is Better ?\r\n', 'plant.jpg', 'The nutrient protein is an extremely important part of our diet\r\nAmino acids are the building blocks of protein\r\nAnimal proteins have more nutritional content than plant protein\r\nThe nutrient protein is an extremely important part of our diet. Proteins are made up of amino acids and they exist throughout the body, in muscles, bones, skin and hair. They are beneficial for the growth and development and help to build, repair and maintain the body\'s structures. Most importantly, it helps in building muscles, repairing tissues and promotes fullness. Broadly speaking there are two types of protein: animal based proteins and plant-based proteins.</br>\r\nPlant and animal proteins differ according to their amino acid contents. Amino acids are the building blocks of protein. When the body digests the proteins in food, it breaks them down into amino acids. Foods derived from plant are not the complete sources of protein, as they do not contain all nine essential amino acids. Most plant proteins are incomplete, which means that they do not contain one of the essential amino acids. For the growth and development of the body all the essential amino acids are needed. Even high protein plant sources like legumes, beans and nuts lack one or more essential amino acids. However, some plant-based foods, such as quinoa and buckwheat, are complete sources of protein. Therefore, it becomes important for vegetarians and vegans to mix their protein sources to ensure that they are getting all of the essential amino acids'),
(3, 'TIP For Healthy 2019</br>', 'tip.jpg', 'Eating right food in the correct quantity is essential for a healthy living. Each nutrient performs specific functions for overall well being. Due to our busy lifestyle, we neglect our body needs as our focus has moved from healthy eating to convenience eating. The processed foods are not only high in fat and preservatives, but also nutrient deficient. The result is nutrition deficiency, weight gain, diabetes, hypertension, heart disease, etc.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `user_password`, `Full_Name`) VALUES
(1, 'tabish', '113', 'Tabish Adnan');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `nm` varchar(300) NOT NULL,
  `price` varchar(100) NOT NULL,
  `des` varchar(3000) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nm`, `price`, `des`, `img`) VALUES
(1, 'Call Consult ', '200', 'You get calls from dietitian side and suggest you according to your requirement', 'p.jpg'),
(2, '15 days plan ', '450', 'You get calls from dietitian side once in a weak and give you a 15 day diet plan', 'p.jpg'),
(3, '30 days plan ', '600', 'You get calls from dietitian side once in a weak and give you a 30 day diet plan', 'p.jpg'),
(4, '60 days plan ', '750', 'You get calls from dietitian side once in a weak and give you a 60 day diet plan', 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `nm` varchar(50) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `em` varchar(100) NOT NULL,
  `no` varchar(50) NOT NULL,
  `med` varchar(20) NOT NULL,
  `allergies` varchar(20) NOT NULL,
  `des` varchar(3000) NOT NULL,
  `adds` varchar(1000) NOT NULL,
  `occu` varchar(300) NOT NULL,
  `gen` varchar(50) NOT NULL,
  `pnm` varchar(500) NOT NULL,
  `pri` varchar(100) NOT NULL,
  `dt` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `nm`, `dob`, `weight`, `height`, `em`, `no`, `med`, `allergies`, `des`, `adds`, `occu`, `gen`, `pnm`, `pri`, `dt`, `status`, `payment`) VALUES
(7, 'TABISH ADNAN', '04-04-94', '87kg', '5 ft 7 inc', 'tabishadnan9@gmail.com', '7549006979', 'Yes', 'No', 'Hello am tabish adnan i want to reduce my weight my curent weight is 87kg .I want to reduce 15kg what i do', 'SHOP NO 606, 6TH FLOOR,', 'Software / IT Professional', 'Male', 'Call Consult ', '200', '02-02-19 16:30:25', '', 'Due'),
(8, 'TABISH ADNAN', '04-04-94', '87kg', '5 ft 7 inc', 'tabishadnan9@gmail.com', '7549006979', 'Yes', 'No', 'Hello am tabish adnan i want to reduce my weight my curent weight is 87kg .I want to reduce 15kg what i do', 'SHOP NO 606, 6TH FLOOR,', 'Software / IT Professional', 'Male', 'Call Consult ', '200', '03-02-19 00:01:22', 'pending', 'Due');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
