-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Iun 2018 la 17:53
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
  `user_id` int(20) UNSIGNED NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `attributes`
--

CREATE TABLE `attributes` (
  `condition_` varchar(50) NOT NULL,
  `curr_price` int(20) UNSIGNED NOT NULL,
  `next_price` int(20) UNSIGNED NOT NULL,
  `expires_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `auct_id` int(20) UNSIGNED NOT NULL,
  `prod_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `brands`
--

CREATE TABLE `brands` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `categories`
--

CREATE TABLE `categories` (
  `id` int(20) UNSIGNED NOT NULL,
  `tile` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
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
(3, 4111111111111111, 'adr', 'february', 2020, 234),
(3, 5105105105105100, 'adr', 'january', 2019, 123);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `images`
--

CREATE TABLE `images` (
  `prod_id` int(20) UNSIGNED NOT NULL,
  `image_path` varchar(50) NOT NULL,
  `id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `orders`
--

CREATE TABLE `orders` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `total` int(20) NOT NULL,
  `bill_adress` varchar(50) NOT NULL,
  `date_issued` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `order_prod`
--

CREATE TABLE `order_prod` (
  `order_id` int(20) UNSIGNED NOT NULL,
  `prod_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `products`
--

CREATE TABLE `products` (
  `id` int(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `prod_atributes`
--

CREATE TABLE `prod_atributes` (
  `prod_id` int(20) UNSIGNED NOT NULL,
  `atr_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `prod_category`
--

CREATE TABLE `prod_category` (
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
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auction_prod`
--
ALTER TABLE `auction_prod`
  ADD PRIMARY KEY (`auct_id`,`prod_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_prod`
--
ALTER TABLE `order_prod`
  ADD PRIMARY KEY (`order_id`,`prod_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prod_atributes`
--
ALTER TABLE `prod_atributes`
  ADD PRIMARY KEY (`prod_id`,`atr_id`);

--
-- Indexes for table `prod_category`
--
ALTER TABLE `prod_category`
  ADD PRIMARY KEY (`prod_id`,`cat_id`);

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
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
