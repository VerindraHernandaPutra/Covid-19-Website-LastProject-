-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 11:57 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hasil`
--

CREATE TABLE `data_hasil` (
  `id_hasil` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` varchar(255) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_hasil`
--

INSERT INTO `data_hasil` (`id_hasil`, `nama`, `tanggal_lahir`, `kelamin`, `hasil`) VALUES
(17, 'Verindra', '2020-04-15', 'Laki-Laki', 'Resiko'),
(18, 'Ajeng', '2020-04-09', ' perempuan', 'Sehat'),
(20, 'A', '2020-04-08', ' perempuan', 'Sehat');

-- --------------------------------------------------------

--
-- Table structure for table `data_odp`
--

CREATE TABLE `data_odp` (
  `id_odp` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `suhu` varchar(255) NOT NULL,
  `id_status` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_odp`
--

INSERT INTO `data_odp` (`id_odp`, `nama`, `alamat`, `suhu`, `id_status`) VALUES
(1, 'Verindra', 'Trenggalek', '35 C', 3);

-- --------------------------------------------------------

--
-- Table structure for table `data_register`
--

CREATE TABLE `data_register` (
  `id_register` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_register`
--

INSERT INTO `data_register` (`id_register`, `nama`, `tanggal_lahir`, `username`, `password`) VALUES
(14, 'Test', '2020-04-08', 'test', 'test'),
(15, 'Ajeng', '2020-04-10', 'ajeng', 'ajeng'),
(16, 'Ren', '2020-04-16', 'ren', 'ren');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(3) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'ODP'),
(2, 'PDP'),
(3, 'Positif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hasil`
--
ALTER TABLE `data_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `data_odp`
--
ALTER TABLE `data_odp`
  ADD PRIMARY KEY (`id_odp`),
  ADD KEY `id_status` (`id_status`);

--
-- Indexes for table `data_register`
--
ALTER TABLE `data_register`
  ADD PRIMARY KEY (`id_register`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_hasil`
--
ALTER TABLE `data_hasil`
  MODIFY `id_hasil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `data_odp`
--
ALTER TABLE `data_odp`
  MODIFY `id_odp` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `data_register`
--
ALTER TABLE `data_register`
  MODIFY `id_register` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_odp`
--
ALTER TABLE `data_odp`
  ADD CONSTRAINT `data_odp_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
