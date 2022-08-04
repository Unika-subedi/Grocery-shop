-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 06:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vegetable_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `categories_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `created_date`, `image`, `categories_description`) VALUES
(15, 'dsfghj', '2022-06-16', 'j.jpg', 'dfghjk'),
(16, 'hey there', '2022-06-18', 'result first5.jpg', 'abcde'),
(17, 'patrick', '2022-06-18', 'sample.png', 'abcde'),
(18, 'pabitra', '2022-06-18', 'pabi.jpg', 'hello pabi'),
(19, 'sanjay', '2022-06-17', 'Capture.PNG', 'ghvkbjln;m'),
(20, 'unika', '2022-06-21', '2021-10-02.png', 'gsfdhfjkglh;l.j,m');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) NOT NULL,
  `Full_Name` varchar(255) NOT NULL,
  `Phone_No` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Pay_Mode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(1, 'gjcfhgkv', '659849841984', 'xvmj', 'cash on delivery'),
(2, 'xgfchvjk.', '4554', 'nvbvgjhk', 'cash on delivery'),
(3, 'hello', '4554', 'nvbvgjhk', 'select payment'),
(4, 'hello', '4554', 'nvbvgjhk', 'cash on delivery'),
(5, 'i need her', '98411143233', 'virkot is love', 'cash on delivery'),
(6, 'paru', '67', 'virkto', 'cash on delivery'),
(7, 'paru', '67', 'virkto', 'cash on delivery'),
(8, 'paru', '67', 'virkto', 'cash on delivery'),
(9, 'ads', '123', 'asdd', 'cash on delivery'),
(10, 'ads', '123', 'asdd', 'cash on delivery'),
(11, 'sadf', '125', 'asdsf', 'cash on delivery'),
(12, 'par', '416565', 'asddfa', 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `order_id` int(100) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`order_id`, `Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES
(2, 'parbat subedi', 123456789, 'hgjvhjkl', 'cash on delivery'),
(3, 'ram hari', 31565, 'adsfgh', 'cash on delivery'),
(4, 'sharad khanel', 123456789, 'hfgbkjln', 'cash on delivery'),
(5, 'paru', 454153333, '5341 asd', 'cash on delivery'),
(6, 'nelson adhikari', 9800000000, 'chabahil dolakha', 'cash on delivery'),
(7, 'parbat subedi', 9811000000, 'tikathali lalitpur', 'cash on delivery');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prdct_id` int(255) NOT NULL,
  `prdct_name` varchar(255) NOT NULL,
  `prdct_qty` int(255) NOT NULL,
  `prdct_price` varchar(255) NOT NULL,
  `prdct_img` varchar(555) NOT NULL,
  `prdct_cat` int(255) NOT NULL,
  `prdct_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prdct_id`, `prdct_name`, `prdct_qty`, `prdct_price`, `prdct_img`, `prdct_cat`, `prdct_desc`) VALUES
(26, 'hdhd', 3, '30', '2021-09-16 (1).png', 15, 'hgjbk.n'),
(27, 'dhfjk', 231, '435', '2021-10-07.png', 15, 'hdxfgjcfhgvhb\r\n'),
(28, 'gajar', 20, '25', '2021-10-11 (1).png', 15, 'gajar ko vau badyo'),
(29, 'haluwa', 10, '50', '2021-11-24.png', 20, 'this is haluwa'),
(30, 'khursani', 2, '20', '2022-02-05.png', 16, 'ugyiuhjn;mkl'),
(31, 'Parbat Subedi', 23, '20', '', 15, 'fjykulyi'),
(32, 'Kisim Subba', 2, '100', '2021-09-18 (1).png', 15, 'hfdjkglhj'),
(33, 'Kisim Subba', 2, '100', '2021-09-18 (1).png', 15, 'hfdjkglhj');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id`, `Username`, `Password`, `user_type`) VALUES
(1, 'parbat', '1234', 'admin'),
(5, 'paru', '6ed8bd2d2040e75f5f464ac4fa09cc09', 'user'),
(9, 'nelsonn', 'b59c67bf196a4758191e42f76670ceba', 'user'),
(10, '1234', '912ec803b2ce49e4a541068d495ab570', 'user'),
(11, 'proj', 'proj', 'user'),
(13, 'answer', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(14, 'asdfg', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(15, 'parbati', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(17, 'sarishma', 'b0f50707fe13753210c7afd387bb5c12', 'user'),
(18, 'abcd', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(19, 'parbat', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES
(2, 'hdhd', 30, 1),
(2, 'Kisim Subba', 100, 1),
(3, 'hdhd', 30, 3),
(3, 'gajar', 25, 1),
(3, 'Kisim Subba', 100, 2),
(4, 'hdhd', 30, 4),
(4, 'Parbat Subedi', 20, 5),
(5, 'hdhd', 30, 2),
(5, 'haluwa', 50, 2),
(6, 'hdhd', 30, 2),
(6, 'dhfjk', 435, 0),
(7, 'hdhd', 30, 2),
(7, 'khursani', 20, 2),
(7, 'gajar', 25, 1),
(7, 'haluwa', 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prdct_id`),
  ADD KEY `prdct_cat` (`prdct_cat`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prdct_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`prdct_cat`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
