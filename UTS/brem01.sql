-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 06:01 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brem01`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `name` varchar(225) NOT NULL,
  `stok` varchar(11) NOT NULL,
  `harga` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`name`, `stok`, `harga`) VALUES
('Bram Stroberi', '50', '10.000'),
('brem original', '123', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `datapesanan`
--

CREATE TABLE `datapesanan` (
  `no_tlp` char(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kategori` varchar(25) DEFAULT NULL,
  `jumlah` varchar(50) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapesanan`
--

INSERT INTO `datapesanan` (`no_tlp`, `alamat`, `kategori`, `jumlah`, `foto`) VALUES
('08811417899', 'jl apel', 'coklat', '8', 'Screenshot (21).png'),
('08811419800', 'jl madu', 'original', '4', 'Screenshot (21).png'),
('08811419839', 'jl yoga', 'merah', '3', 'Lighthouse.jpg'),
('08811419859', 'jl madu', 'merah', '2', 'Lighthouse.jpg'),
('08811919800', 'jl apel merah', 'original', '5', 'Screenshot (21).png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`) VALUES
('admin', 'admin', 'Admin'),
('user', 'user', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `datapesanan`
--
ALTER TABLE `datapesanan`
  ADD PRIMARY KEY (`no_tlp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
