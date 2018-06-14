-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Iun 2018 la 16:31
-- Versiune server: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auctiox_db`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `addresses`
--

CREATE TABLE `addresses` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `name`, `phone_no`, `address`, `city`, `county`, `country`) VALUES
(1, 5, 'Adrian Tiron', '0752374303', 'M-sal C-tin Prezan, Bl102, ScA, Ap9, Et2', 'Vaslui', 'Vaslui', 'Romania'),
(3, 3, 'Dorin Haloca', '0720542823', 'Str. Trandafirilor 10,bl. 201,et.3,ap.21', 'Barlad', 'Vaslui', 'Romania');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `auctions`
--

CREATE TABLE `auctions` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `auction_prod`
--

CREATE TABLE `auction_prod` (
  `id` int(20) UNSIGNED NOT NULL,
  `auct_id` int(20) UNSIGNED NOT NULL,
  `prod_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `categories`
--

CREATE TABLE `categories` (
  `id` int(20) UNSIGNED NOT NULL,
  `parentCategoryId` int(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `cookies`
--

CREATE TABLE `cookies` (
  `id` int(20) NOT NULL,
  `value` varchar(50) NOT NULL,
  `user_id` int(20) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `creditcards`
--

CREATE TABLE `creditcards` (
  `user_id` int(20) UNSIGNED NOT NULL,
  `number` bigint(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `exp_month` varchar(20) NOT NULL,
  `exp_year` int(4) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `creditcards`
--

INSERT INTO `creditcards` (`user_id`, `number`, `name`, `exp_month`, `exp_year`, `cvv`) VALUES
(3, 4012888888881881, 'Tiron', 'april', 2027, 125),
(3, 5105105105105100, 'adr', 'january', 2019, 123);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `orders`
--

CREATE TABLE `orders` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `bill_address` varchar(50) NOT NULL,
  `date_issued` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `order_prod`
--

CREATE TABLE `order_prod` (
  `id` int(20) UNSIGNED NOT NULL,
  `order_id` int(20) UNSIGNED NOT NULL,
  `prod_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `products`
--

CREATE TABLE `products` (
  `id` int(20) UNSIGNED NOT NULL,
  `sellerId` int(20) NOT NULL,
  `winnerId` int(20) UNSIGNED DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `keywords` varchar(255) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `curr_price` int(20) UNSIGNED NOT NULL,
  `next_price` int(20) UNSIGNED NOT NULL,
  `expires_on` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `products`
--

INSERT INTO `products` (`id`, `sellerId`, `winnerId`, `title`, `description`, `keywords`, `condition`, `brand`, `country`, `curr_price`, `next_price`, `expires_on`, `image`, `is_active`) VALUES
(1, 3, NULL, 'Speakers', 'Blasting speakers, almost newly bought...', 'audio device', 'Good', 'Shure', 'United States', 200, 220, '2018-06-17', 'speakers.jpg', 1),
(4, 3, NULL, 'Handbag', 'Luxurious handbag with lots of space', 'accessory', 'Like New', 'Gucci', 'United Kingdom', 5001, 5066, '2018-06-24', 'bag.jpg', 1),
(5, 5, 3, 'Speakers2', 'Very hi-tech system with lots of bass', 'audio device', 'Acceptable', 'Shure', 'United States', 300, 400, '2018-05-23', 'speakers2.jpg', 0),
(6, 5, 3, 'Flashlight', 'Our Ultrafire T6 50000 lm 5-Mode Waterproof Lotus ', 'device light flashlight', 'Good', 'Ultrafire', 'United Kingdom', 100, 110, '2018-03-28', 'flashlight1.jpg', 0),
(7, 5, NULL, 'Flashlight', 'Our Ultrafire T6 50000 lm 5-Mode Waterproof Lotus Head LED Flashlight Suit Black is a cost-effective trade-off. Its most outstanding feature should be the variable focus, so you can adjust it to meet your demand. Also, with a strap, it is convenient to carry. Most all, this flashlight is ideal for mountain climbing, camping, hiking, forest exploring, caves exploring; Also widely used at home like repairing or finding small things.', 'device light flashlight', 'Good', 'Ultrafire', 'United Kingdom', 100, 130, '2018-07-28', 'flashlight2.jpg', 1),
(8, 3, 5, 'Book', 'How to kill a mockinbird', 'book read', 'Bad', 'No brand', 'Romania', 200, 205, '2018-01-12', 'book1.jpg', 0),
(9, 3, 5, 'Vase', 'Very fragile and ancient vase, please treat with care', 'vase porcelain greece', 'Acceptable', 'Unknown', 'Greece', 900, 1000, '2017-07-28', 'vase1.jpg', 0),
(10, 5, NULL, 'Knife', 'Beautifully engraved piece of art', 'knife art framed', 'Good', 'Unknown', 'Congo', 100, 150, '2018-07-28', 'knife1.jpg', 1),
(11, 5, 3, 'Painting', 'Red Moon, Miniature Night Sky Oil', 'painting art', 'Acceptable', 'Unknown', 'France', 4000, 4500, '2018-05-11', 'painting1.jpg', 0),
(12, 5, 3, 'Painting', '\"DREAM GARDEN\" by Marina Petro', 'painting art', 'Acceptable', 'Unknown', 'France', 5000, 5500, '2018-05-10', 'painting2.jpg', 0),
(13, 3, 5, 'Bracelet', 'It has diamonds and is made of gold', 'jewelry bracelet gold', 'Like New', 'Merraeni', 'Italy', 4010, 4020, '2018-04-30', 'bracelet1.jpg', 0),
(14, 3, 5, 'Pen', 'Sentimental value, it was given by my grandfather in the war', 'pen', 'Broken', 'Harry Dillings', 'Romania', 10, 15, '2018-02-20', 'pen1.jpg', 0);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `prod_category`
--

CREATE TABLE `prod_category` (
  `id` int(20) UNSIGNED NOT NULL,
  `prod_id` int(20) UNSIGNED NOT NULL,
  `cat_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `passw` varchar(50) NOT NULL,
  `type` char(1) NOT NULL,
  `date_created` date NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'resources/images/userphotos/3.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `dob`, `passw`, `type`, `date_created`, `image`) VALUES
(3, 'adrian', 'tiron', 'tda_mda@yahoo.com', '1998-01-08', '8c4205ec33d8f6caeaaaa0c10a14138c', '1', '2018-06-06', 'resources/images/userphotos/3.jpg'),
(5, 'adrian', 'tiron', 'adrian@yahoo.com', '1998-01-08', '8c4205ec33d8f6caeaaaa0c10a14138c', '1', '2018-06-06', 'resources/images/userphotos/3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auction_prod`
--
ALTER TABLE `auction_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`value`),
  ADD KEY `value_2` (`value`);

--
-- Indexes for table `creditcards`
--
ALTER TABLE `creditcards`
  ADD PRIMARY KEY (`number`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_prod`
--
ALTER TABLE `order_prod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_category`
--
ALTER TABLE `prod_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auction_prod`
--
ALTER TABLE `auction_prod`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_prod`
--
ALTER TABLE `order_prod`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `prod_category`
--
ALTER TABLE `prod_category`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
