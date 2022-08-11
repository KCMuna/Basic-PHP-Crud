-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 05:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `dname`
--

CREATE TABLE `dname` (
  `uid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(110) NOT NULL,
  `age` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dname`
--

INSERT INTO `dname` (`uid`, `username`, `email`, `age`, `password`, `name`) VALUES
(1, 'bibek', '', 0, '81dc9bdb52d04dc20036dbd8313ed055', 'bibek'),
(2, 'muna', '', 0, '1234', 'muna'),
(3, 'aaa', '', 0, '47bce5c74f589f4867dbd57e9ca9f808', 'aaa'),
(4, 'rrr', '', 0, 'c8ffe9a587b126f152ed3d89a146b445', 'rrr'),
(5, 'ratey', 'desabuhuj@mailinator.com', 23, '6512bd43d9caa6e02c990b0a82652dca', 'ratey'),
(6, 'Moana French', 'rapov@mailinator.com', 22, 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'James Gibbs'),
(7, 'Muna', 'kc.muna2018@gmail.com', 20, '1132cd92992a2aac9320d588b1a42830', 'Muna');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `name`, `photo`, `price`, `category`) VALUES
(6, 'Samsung Galaxy S21 Ultra', '21-03-26-015335Samsung Galaxy S21 Ultra.jpg', 1149, 'Samsung'),
(7, 'iphone 12', '21-03-26-015550iphone 12.jpg', 2200, 'Apple'),
(8, 'Motorolla Razr', '21-03-26-015736Motorolla Razr.jpg', 1199, 'Motorolla '),
(9, 'Nokia Lumia', '21-03-26-015914Nokia Lumia.jpg', 899, 'Nokia'),
(10, 'Blackberry bold ', '21-03-26-020221blackberry bold.jpg', 499, 'Blackberry '),
(11, 'W41 Pro', '21-03-26-020410W41 Pro.jpg', 367, 'LG'),
(12, 'Xperia 5 ', '21-03-26-020545Xperia 5.jpg', 598, 'Sony'),
(13, 'lenovo  k5', '21-03-26-020726lenovo  k5.jpg', 222, 'Lenovo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dname`
--
ALTER TABLE `dname`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dname`
--
ALTER TABLE `dname`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
