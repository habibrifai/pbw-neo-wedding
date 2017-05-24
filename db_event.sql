-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 01:41 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_event`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `no` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`no`, `judul`, `isi`, `tgl_update`) VALUES
(1, 'hahaha', 'hahaha', '2017-05-20 10:44:42'),
(2, 'asd', 'skajdl\r\n', '2017-05-21 08:47:14'),
(3, 'asdj', 'ldkajslkd', '2017-05-21 08:47:19'),
(4, 'askldj', 'slkajdlk', '2017-05-21 08:47:23'),
(5, 'asdjh', 'sjkahdk', '2017-05-21 08:47:27'),
(6, 'asdh', 'dskjahdk', '2017-05-21 08:47:31'),
(7, 'asdjkh', 'dsjkhdkj', '2017-05-21 08:47:35'),
(8, 'asdh', 'dhajkshd', '2017-05-21 08:47:38'),
(9, 'asdkjh', 'dhsakjdh', '2017-05-21 08:47:43'),
(10, 'askdh', 'dkasjdhk', '2017-05-21 08:47:47'),
(11, 'saldkj', 'lkdlld', '2017-05-21 08:47:53');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `no` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`no`, `judul`, `keterangan`, `gambar`, `tgl_update`) VALUES
(39, 'Wedding Galuh & Ardi', '-', 'dfbbee781ca89970888305c1f54fa45b.jpg', '2017-05-21 10:50:50'),
(40, 'Wedding Galuh & Ardi', '-', '1cf3a3bb934bce948664c3c8be45665b.jpg', '2017-05-21 10:51:02'),
(41, 'Wedding Galuh & Ardi', '-', '170016339ac002a92f45fff17970a1d8.jpg', '2017-05-21 10:51:12'),
(42, 'Wedding Galuh & Ardi', '-', '53fdaa6c298b50852a95e14874d6312d.jpg', '2017-05-21 10:51:18'),
(43, 'Wedding Galuh & Ardi', '-', '938acd5dfed0e42deb9480ccb293a9e2.jpg', '2017-05-21 10:51:28'),
(44, 'Wedding Galuh & Ardi', '-', '25679b3616903a8dc408d5872ef49dbf.jpg', '2017-05-21 10:51:38'),
(45, 'Wedding Galuh & Ardi', '-', 'd85c83aab378ba6c5218b747557fb3b7.jpg', '2017-05-21 10:51:49'),
(46, 'Wedding Galuh & Ardi', '-', '145f1f71f4902cf1587b693f49f2563c.jpg', '2017-05-21 10:51:57'),
(47, 'Wedding Galuh & Ardi', '-', '62baaf9614d0d75ac73c59f018a2373a.jpg', '2017-05-21 10:52:06'),
(48, 'Wedding Galuh & Ardi', '-', 'b098ea2163255cc5e83040453427d354.jpg', '2017-05-21 10:52:17'),
(49, 'Wedding Galuh & Ardi', '-', '1e619dbdfa8da05894312339f4a3f1ed.jpg', '2017-05-21 10:52:25'),
(50, 'Wedding Galuh & Ardi', '-', 'c7a24ee45aba095419d5762c080e3954.jpg', '2017-05-21 10:52:33'),
(51, 'Wedding Galuh & Ardi', '-', 'c2e145649538cc7bdee62f83b33882b5.jpg', '2017-05-21 10:52:40'),
(52, 'Wedding Galuh & Ardi', '-', '49cd7443c8784ef003736bcd01166078.jpg', '2017-05-21 10:52:48'),
(53, 'Wedding Ferdi & Asri', '-', '40a76596d212a9821cd24febe7efa6f8.jpg', '2017-05-21 11:01:04'),
(54, 'Wedding Ferdi & Asri', '-', '5dfc5b227e8a395626ff179d90b1d7ea.JPG', '2017-05-21 11:11:28'),
(55, 'Wedding Ferdi & Asri', '-', '36427d3cf51996ca08bcdbaf3e5041d3.JPG', '2017-05-21 11:12:47'),
(56, 'Wedding Ferdi & Asri', '-', '2985f16852d26bc9b37972271bb40e84.JPG', '2017-05-21 11:12:56'),
(57, 'Wedding Ferdi & Asri', '-', 'a2e3d8b4299dc81283a92b8449d6a515.JPG', '2017-05-21 11:13:04'),
(58, 'Wedding Ferdi & Asri', '-', '55154abb7422c9d90a81d48a34672d11.JPG', '2017-05-21 11:13:12'),
(59, 'Wedding Ferdi & Asri', '-', '5e2dd62978b64a43424c0fd4e1f57859.JPG', '2017-05-21 11:13:24'),
(60, 'Wedding Ferdi & Asri', '-', 'a666b0e4d01724755ea341cbc8a7ab93.jpg', '2017-05-21 11:13:32'),
(61, 'Wedding Ferdi & Asri', '-', 'a8cd0862d938a8251f12c989e475006c.jpg', '2017-05-21 11:13:40'),
(62, 'Wedding Ferdi & Asri', '-', '69668191da75819daaffc3ee64f15c77.JPG', '2017-05-21 11:13:48'),
(63, 'Wedding Ferdi & Asri', '-', '49ec9a4fe07f5cdca32be72853419bb0.JPG', '2017-05-21 11:13:56'),
(64, 'Wedding Ferdi & Asri', '-', '7a655debf7ddcb8461242ec246e326bb.JPG', '2017-05-21 11:14:04'),
(65, 'Wedding Ferdi & Asri', '-', '7c6bd7fc2e9b200423bb64a2abc08a83.JPG', '2017-05-21 11:14:13'),
(66, 'Wedding Ferdi & Asri', '-', '02c59ec4a9c9ec92fca44b4376e3cffc.JPG', '2017-05-21 11:14:21'),
(70, 'Wedding Ferdi & Asri', '-', 'edd250bb9efbdaba596c6e98e9968a3a.JPG', '2017-05-21 11:17:05'),
(71, 'Wedding Ferdi & Asri', '-', '9ca33376f0222df053f3518524230819.JPG', '2017-05-21 11:17:12'),
(72, 'Wedding Ferdi & Asri', '-', 'e9fddc1a846f65a7006ecb9df3ba9033.JPG', '2017-05-21 11:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`no`, `nama`, `email`, `tanggal`, `pesan`) VALUES
(1, 'habib', 'habib@gmail.com', '2017-05-18 03:38:39', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `last_login`) VALUES
(1, 'habib', '1fe59ec1ca3804afdb887bd3f0d7e75f', 'admin@admin.com', '2017-05-21 11:40:33'),
(2, 'rendra', '1fe59ec1ca3804afdb887bd3f0d7e75f', 'admin1@admin.com', '2017-05-16 04:17:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
