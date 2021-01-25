-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 10:47 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `nama`, `username`, `password`, `status`) VALUES
(1, 'Hubbul Watoni', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Toni', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(3, 'Nanang', 'Nanang', 'ee11cbb19052e40b07aac0ca060c23ee', 'user'),
(4, 'Pandu', 'Pandu', 'ee11cbb19052e40b07aac0ca060c23ee', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `upload_komik`
--

CREATE TABLE IF NOT EXISTS `upload_komik` (
  `id_komik` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `cover` varchar(225) NOT NULL,
  `komik` varchar(225) NOT NULL,
  `ukuran` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_komik`
--

INSERT INTO `upload_komik` (`id_komik`, `judul`, `genre`, `cover`, `komik`, `ukuran`) VALUES
(5, 'Komik 4', 'Romance', 'komik1.jpg', 'file_5.pdf', '3341157'),
(6, 'jk', 'Humor', 'komik1.jpg', 'file_6.pdf', '4293204'),
(9, 'lkk', 'Action', 'komik1.jpg', 'file_9.pdf', '3341157');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `upload_komik`
--
ALTER TABLE `upload_komik`
  ADD PRIMARY KEY (`id_komik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `upload_komik`
--
ALTER TABLE `upload_komik`
  MODIFY `id_komik` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
