-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 28, 2018 at 05:20 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.2.3-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billstation`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `name`, `created_at`, `user_id`) VALUES
(1, '05-03-2018Allegra Berg.pdf', '2018-03-05 13:08:05', 14),
(2, '05-03-2018Dalton Everett.pdf', '2018-03-05 13:15:58', 14),
(3, '07-03-2018Chester Espinoza.pdf', '2018-03-07 10:22:20', 14);

-- --------------------------------------------------------

--
-- Table structure for table `bill_product`
--

CREATE TABLE `bill_product` (
  `bill_product_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `adress`, `user_id`) VALUES
(1, 'lulu', '  54rue AZERTYUIOP 12345 QSDFGHJKL', 14),
(2, 'dodo', 'doremi', 14),
(3, 'AZERTYUIO', '54rue AZERTYUIOP 12345 QSDFGHJKL', 14),
(4, 'ljkdzzme', 'ncdlscj', 18),
(5, 'Iola Henderson', 'Amet consectetur et nisi reiciendis pariatur Nihil blanditiis non ut in aute eos excepturi ad expedita suscipit', 20),
(6, 'Bevis Fernandez', 'Cum deserunt omnis unde ipsum excepteur quibusdam mollit ratione quia laboris aliquip occaecat itaque qui', 21),
(7, 'blablabla', 'test', 14);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `designation`) VALUES
(1, 'Berry', ''),
(2, 'Berry', ''),
(3, 'Berry', ''),
(4, 'Berry', ''),
(5, 'Apple', 'Fruit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `adress` varchar(500) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `siren` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `adress`, `phone`, `siren`) VALUES
(14, 'msa@example.com', 'azerty', ' Lucy', '38 rue de la blanche 69008 LYON', '0649025463', '01344566778789'),
(15, 'tsa@example.com', '12345678', 'Maxime Chabanne', '55 rue eugÃ¨ne Martin 94120 Fontenay sous bois', '0649025463', '1234567891011'),
(16, 'max@example.com', 'AZE', 'spiderman', '38 rue de la blanche', '0649025463', '1234567890123'),
(17, 'example@example.com', 'example', NULL, NULL, NULL, NULL),
(18, 'exemple@example.com', 'exemple', ' exemple', 'AZERTYUIOP', '1234567890', '1234567890'),
(19, 'misa@example.com', 'misa', NULL, NULL, NULL, NULL),
(20, 'kobirozaw@hotmail.com', 'msa1', 'Murphy Rutledge', 'Amet omnis sunt quos et dolores', '+647-80-2431274', 'Qui itaque voluptate nesciunt voluptatum in veniam occaecat aut nobis quia'),
(21, 'gyfi@yahoo.com', 'test', 'Mari Molina', 'Sit sed irure accusamus ipsa non commodo in dolore atque qui nesciunt aperiam aut assumenda est anim praesentium', '+312-38-7344262', 'Expedita quisquam dolor sint tempor mollitia iusto perspiciatis cumque iste velit veritatis'),
(22, 'msa@example.com', 'azerty', NULL, NULL, NULL, NULL),
(23, 'msa@example.com', 'azerty', NULL, NULL, NULL, NULL),
(24, 'msa@example.com', 'azerty', NULL, NULL, NULL, NULL),
(25, 'msa@example.com', 'azerty', NULL, NULL, NULL, NULL),
(26, 'msa@example.com', 'azerty', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

CREATE TABLE `user_product` (
  `user_product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `bill_product`
--
ALTER TABLE `bill_product`
  ADD PRIMARY KEY (`bill_product_id`),
  ADD KEY `billid` (`bill_id`),
  ADD KEY `filterid` (`product_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `userid` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_product`
--
ALTER TABLE `user_product`
  ADD PRIMARY KEY (`user_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill_product`
--
ALTER TABLE `bill_product`
  MODIFY `bill_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_product`
--
ALTER TABLE `user_product`
  MODIFY `user_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `bill_product`
--
ALTER TABLE `bill_product`
  ADD CONSTRAINT `bill_product_ibfk_1` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`bill_id`),
  ADD CONSTRAINT `bill_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
