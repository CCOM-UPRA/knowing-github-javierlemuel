-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 09:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dragonfly_drones`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(6) NOT NULL,
  `a_lastname` varchar(15) NOT NULL,
  `a_firstname` varchar(20) NOT NULL,
  `a_email` varchar(40) NOT NULL,
  `a_password` varchar(12) NOT NULL,
  `a_phone_number` bigint(11) DEFAULT NULL,
  `a_status` varchar(8) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `a_lastname`, `a_firstname`, `a_email`, `a_password`, `a_phone_number`, `a_status`) VALUES
(6, 'Ramos', 'Natasha', 'natasha@dragonflydrones.com', 'e64b78fc3bc9', 787456789, 'active'),
(7, 'Quinones', 'Javier', 'javier@dragonflydrones.com', 'e64b78fc3bc9', 787963258, 'active'),
(8, 'Alvelo', 'Jose', 'jose@dragonflydrones.com', 'e64b78fc3bc9', 787123456, 'active'),
(9, 'Ramos', 'Chloe', 'chloe@dragonflydrones.com', 'e64b78fc3bc9', 787123987, 'active'),
(10, 'Sanchez', 'Luna', 'luna@dragonflydrones.com', 'e64b78fc3bc9', 787123654, 'active'),
(11, 'Rivera', 'Gaby', 'gabyr@dragonflydrones.com', 'e64b78fc3bc9', NULL, 'active'),
(13, 'Gomez', 'Testy', 'testy@gmail.com', '9a05009fd24f', 7871231234, 'active'),
(16, 'Michaels', 'Greg', 'greg@gmail.com', '6ab028adba22', NULL, 'active'),
(17, 'Phillips', 'Phillip', 'phillips@yahoo.com', '1d151c5b2de1', NULL, 'active'),
(18, 'Santiago', 'Riley', 'riley@dragonflydrones.com', 'a4ca1f62823d', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE `contains` (
  `contains_id` int(6) NOT NULL,
  `order_id` int(6) NOT NULL,
  `p_id` int(6) NOT NULL,
  `p_price` double(10,2) NOT NULL,
  `product_quantity` int(3) NOT NULL,
  `p_total_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contains`
--

INSERT INTO `contains` (`contains_id`, `order_id`, `p_id`, `p_price`, `product_quantity`, `p_total_price`) VALUES
(34, 25, 1, 100.00, 2, 200.00),
(35, 26, 3, 290.00, 1, 290.00),
(36, 26, 3, 290.00, 1, 290.00),
(37, 26, 3, 290.00, 1, 290.00),
(38, 26, 3, 290.00, 1, 290.00),
(39, 27, 5, 1399.00, 1, 1399.00),
(40, 28, 11, 50.00, 2, 100.00),
(41, 38, 12, 50.00, 2, 100.00),
(43, 40, 5, 1399.00, 2, 2798.00),
(44, 41, 3, 290.00, 1, 290.00),
(46, 41, 12, 50.00, 2, 100.00),
(48, 43, 12, 50.00, 1, 50.00),
(51, 46, 11, 50.00, 1, 50.00),
(53, 48, 11, 50.00, 1, 50.00),
(59, 55, 3, 290.00, 1, 290.00),
(67, 64, 3, 290.00, 4, 1160.00),
(68, 65, 11, 50.00, 1, 50.00),
(69, 65, 3, 290.00, 3, 870.00),
(70, 66, 3, 290.00, 2, 580.00),
(71, 67, 5, 1399.00, 1, 1399.00),
(72, 68, 12, 50.00, 1, 50.00),
(73, 69, 10, 700.00, 2, 1400.00),
(74, 70, 3, 290.00, 1, 290.00);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(6) NOT NULL,
  `c_first_name` varchar(15) DEFAULT NULL,
  `c_last_name` varchar(20) DEFAULT NULL,
  `address_line_1` varchar(35) DEFAULT NULL,
  `address_line_2` varchar(35) DEFAULT NULL,
  `c_city` varchar(15) DEFAULT NULL,
  `c_state` varchar(15) DEFAULT NULL,
  `c_zipcode` varchar(5) CHARACTER SET latin1 COLLATE latin1_danish_ci DEFAULT NULL,
  `c_email` varchar(40) NOT NULL,
  `c_password` varchar(12) NOT NULL,
  `c_phone_number` bigint(12) DEFAULT NULL,
  `c_card_name` varchar(50) DEFAULT NULL,
  `c_card_type` varchar(20) DEFAULT NULL,
  `c_card_number` bigint(16) DEFAULT NULL,
  `c_exp_date` date DEFAULT NULL,
  `c_status` varchar(8) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_first_name`, `c_last_name`, `address_line_1`, `address_line_2`, `c_city`, `c_state`, `c_zipcode`, `c_email`, `c_password`, `c_phone_number`, `c_card_name`, `c_card_type`, `c_card_number`, `c_exp_date`, `c_status`) VALUES
(6, 'Javier', 'Quinones', 'Vista Azul', 'Calle 11 L15', 'Arecibo', 'PR', '00612', 'javier@gmail.com', '1234', 7975977369, 'Javier Quinones', 'Discover', 1234123412341234, '2022-05-03', 'active'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'javi@upr.edu', 'd404559f602e', NULL, NULL, NULL, NULL, NULL, 'active'),
(12, 'Terry', 'Diaz', NULL, NULL, NULL, NULL, NULL, 'terry@gmail.com', 'bf400c2a1cbc', NULL, NULL, NULL, NULL, NULL, 'active'),
(14, 'Natasha', 'Ramos', NULL, NULL, NULL, NULL, NULL, 'naty@gmail.com', 'd0def6de5d21', NULL, NULL, NULL, NULL, NULL, 'active'),
(15, 'Hiya', 'Piya', NULL, NULL, NULL, NULL, NULL, 'hiya@gmail.com', '7e524f927d14', NULL, NULL, NULL, NULL, NULL, 'inactive'),
(17, 'Milena', 'Gonzales', 'Urb Victor Rojas', 'Calle 20 R2', 'Arecibo', 'Puerto Rico', '00615', 'milena@gmail.com', 'cf01c506ccb9', 7871231234, 'Milena Gonzales', 'Visa', 1234123456785678, '2023-04-01', 'active'),
(18, 'Miley', 'Cyrus', 'Address1', 'Address2', 'City', 'State', '00610', 'miley@gmail.com', 'b18ec525c1a6', 7871231234, 'Card Name', 'Type', 12341224, '2020-10-10', 'active'),
(20, 'Testy', 'Gomez', NULL, NULL, NULL, NULL, '00510', 'testy2@gmail.com', 'd3a9554af432', 7871231234, NULL, NULL, NULL, NULL, 'active'),
(21, 'Milanie', 'Terrance', NULL, NULL, NULL, NULL, NULL, 'milanie@gmail.com', '4aa28137e9bd', NULL, NULL, NULL, NULL, NULL, 'active'),
(22, 'John', 'Johnson', 'address1', 'address2', 'Arecibo', 'PR', '00612', 'john@gmail.com', '3c5485351936', 7871234657, 'John Johnson', 'Discover', 1234567812345678, '2020-07-01', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(6) NOT NULL,
  `c_id` int(6) NOT NULL,
  `tracking_number` varchar(22) DEFAULT NULL,
  `transaction_number` varchar(16) DEFAULT NULL,
  `order_date` date NOT NULL,
  `ship_date` date DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `total_price` double(10,2) NOT NULL,
  `order_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `c_id`, `tracking_number`, `transaction_number`, `order_date`, `ship_date`, `arrival_date`, `total_price`, `order_status`) VALUES
(25, 6, '2147483647', '4267932279629660', '2022-05-14', '2022-05-14', '2022-05-18', 200.00, 'shipped'),
(26, 6, '9400100056135803614681', '7992574443336945', '2022-05-07', '2022-05-14', '2022-05-18', 300.00, 'shipped'),
(27, 6, '9400100086004177652790', '0770266796517837', '2022-05-07', '2022-05-08', '2022-05-12', 200.00, 'arrived'),
(28, 17, '9400100070929917606135', '7517191326659440', '2022-05-14', '2022-05-15', '2022-05-19', 290.00, 'shipped'),
(38, 6, '9400100049516474249298', '8704174960992406', '2022-05-07', '2022-05-08', '2022-05-12', 100.00, 'arrived'),
(40, 6, '9400100023044933953228', '2234675673477043', '2022-05-07', '2022-05-08', '2022-05-12', 2798.00, 'arrived'),
(41, 6, '9400100099001498866243', '8810009219783709', '2022-05-07', '2022-05-08', '2022-05-12', 1789.00, 'arrived'),
(42, 6, '9400100041620500699723', '1374516419406608', '2022-05-07', '2022-05-08', '2022-05-12', 100.00, 'arrived'),
(43, 6, '9400100008224903666248', '6032243152514259', '2022-05-07', '2022-05-08', '2022-05-12', 50.00, 'arrived'),
(46, 17, '9400100016160459206864', '4268984898282880', '2022-05-09', '2022-05-10', '2022-05-14', 100.00, 'arrived'),
(48, 17, '9400100037591792065588', '2752853988556280', '2022-05-09', '2022-05-10', '2022-05-14', 50.00, 'arrived'),
(55, 18, '9400100014598763186807', '3723713411323267', '2022-05-09', '2022-05-10', '2022-05-14', 290.00, 'arrived'),
(64, 18, '9400100072673304017390', '9998982322272077', '2022-05-09', '2022-05-10', '2022-05-14', 1160.00, 'arrived'),
(65, 17, '9400100042605482134760', '1576569200390641', '2022-05-10', '2022-05-11', '2022-05-15', 920.00, 'arrived'),
(66, 17, '9400100066205106083590', '6666785815713123', '2022-05-14', '2022-05-15', '2022-05-19', 580.00, 'shipped'),
(67, 22, '9400100099186706021812', '8837139558877917', '2022-05-14', '2022-05-15', '2022-05-19', 1399.00, 'shipped'),
(68, 22, '9400100095270270846507', '7886331846061011', '2022-05-14', '2022-05-15', '2022-05-19', 50.00, 'shipped'),
(69, 17, '9400100069971474390727', '6447338116106409', '2022-05-14', '2022-05-15', '2022-05-19', 1400.00, 'shipped'),
(70, 17, '9400100064208438904448', '6140386810433100', '2022-05-14', '2022-05-15', '2022-05-19', 290.00, 'shipped');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(6) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_brand` varchar(20) NOT NULL,
  `p_desc` varchar(255) DEFAULT NULL,
  `p_wifi` varchar(3) NOT NULL,
  `p_video_res` varchar(5) NOT NULL,
  `p_role` varchar(11) NOT NULL,
  `p_provider` varchar(20) NOT NULL,
  `p_img` varchar(50) NOT NULL,
  `stock` int(3) NOT NULL,
  `p_cost` double(6,2) NOT NULL,
  `p_price` double(6,2) NOT NULL,
  `p_status` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_brand`, `p_desc`, `p_wifi`, `p_video_res`, `p_role`, `p_provider`, `p_img`, `stock`, `p_cost`, `p_price`, `p_status`) VALUES
(1, 'Tello Drone', 'DJI', NULL, 'Yes', '720p', 'Education', 'FlySafe CR', 'dji_tello.jpg', 15, 89.00, 89.00, 'active'),
(3, 'Bebop 2', 'Parrot', 'The BeBop Drone 2 is a Wi-Fi-based, mobile device-operated RC quadcopter capable of capturing 1080p aerial video and taking 4096 x 3072 resolution still photos.', 'Yes', '1080p', 'Enterprise', 'Tech Union', 'parrot_bebop_2.jpg', 3, 270.00, 290.00, 'active'),
(4, 'F11 Pro', 'Ruko', NULL, 'Yes', '4k', 'Enterprise', 'Ruko', 'ruko_f11_pro.jpg', 10, 399.00, 350.00, 'active'),
(5, 'Premium X Star', 'Autel Robotics', NULL, 'Yes', '4k', 'Enterprise', 'Autel', 'autel_robotics_dron_premium_x_star.jpg', 35, 1399.00, 1399.00, 'active'),
(6, 'Evo Quadcopter II', 'Autel Robotics', NULL, 'Yes', '720p', 'Enterprise', 'Autel', 'autel_robotics_evo_quadcopter_ii.png', 30, 3000.00, 2500.00, 'active'),
(10, 'Zino pro', 'HUBSAN', NULL, 'Yes', '720p', 'Enterprise', 'Hubsan', 'hubsan_zino_pro.jpg', 18, 750.00, 700.00, 'active'),
(11, 'Mavic Mini', 'DJI', NULL, 'Yes', '480p', 'Education', 'Digital Village', 'dji_mavic_mini.jpg', 22, 50.00, 50.00, 'active'),
(12, 'X8C vENTURE', 'SYMA', NULL, 'Yes', '1080p', 'Enterprise', 'Syma', 'syma_x8c_venture.jpg', 11, 101.13, 24.50, 'active'),
(16, 'Phantom 4 Pro', 'DJI', NULL, 'Yes', '4k', 'Enterprise', 'Camrise', 'dji_phantom_4_pro.jpg', 5, 150.00, 200.00, 'active'),
(32, 'Disco FPV', 'Parrot', '', 'Yes', '1080p', 'Enterprise', 'Parrot', 'Disco FPV1.jpeg', 40, 1299.00, 1100.00, 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contains`
--
ALTER TABLE `contains`
  ADD PRIMARY KEY (`contains_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `tracking_number` (`tracking_number`),
  ADD UNIQUE KEY `transaction_id` (`transaction_number`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contains`
--
ALTER TABLE `contains`
  MODIFY `contains_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contains`
--
ALTER TABLE `contains`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `p_id` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `c_id` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
