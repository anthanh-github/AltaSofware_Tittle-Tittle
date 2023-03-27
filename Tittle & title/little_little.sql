-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2023 at 08:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `little_little`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Gói gia đinh'),
(2, 'Gói trẻ em');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tittle` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `event_from_date` date NOT NULL,
  `event_to_date` date NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `description3` text NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `tittle`, `price`, `event_from_date`, `event_to_date`, `description1`, `description2`, `description3`, `image1`, `image2`, `image3`) VALUES
(1, 'Sự Kiện 1', 'Đầm Sen Park ', 25, '2023-03-08', '2023-03-30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,', 'rectangle-1@2x.png', 'rectangle-11@2x.png', 'rectangle-11@2x.png'),
(2, 'Sự Kiện 2', 'Đầm Sen Park ', 25, '2023-03-08', '2023-03-30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,', 'rectangle-1@2x.png', 'rectangle-11@2x.png', 'rectangle-11@2x.png'),
(3, 'Sự Kiện 3', 'Đầm Sen Park ', 25, '2023-03-08', '2023-03-30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,', 'rectangle-1@2x.png', 'rectangle-11@2x.png', 'rectangle-11@2x.png'),
(4, 'Sự Kiện 4', 'Đầm Sen Park ', 25, '2023-03-08', '2023-03-30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,', 'rectangle-1@2x.png', 'rectangle-11@2x.png', 'rectangle-11@2x.png');

-- --------------------------------------------------------

--
-- Table structure for table `sukien`
--

CREATE TABLE `sukien` (
  `id` int(11) NOT NULL,
  `event` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `description1` varchar(500) NOT NULL,
  `description2` varchar(500) NOT NULL,
  `description3` varchar(500) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sukien`
--

INSERT INTO `sukien` (`id`, `event`, `name`, `start_date`, `end_date`, `price`, `description1`, `description2`, `description3`, `image1`, `image2`, `image3`) VALUES
(1, 'Sự Kiện 1', 'Đầm Sen Park ', '2023-03-15', '2023-03-25', 25, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.', 'Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature.', 'rectangle-11@2x.png', 'rectangle-12@2x.png', 'rectangle-13@2x.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sukien`
--
ALTER TABLE `sukien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
