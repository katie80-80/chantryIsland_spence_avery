-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 27, 2017 at 10:52 AM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_chantryGallery
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_photos
--

CREATE TABLE tbl_photos (
  photos_id tinyint(3) UNSIGNED NOT NULL,
  photos_title varchar(20) NOT NULL,
  photos_th varchar(33) NOT NULL,
  photo_img varchar(30) NOT NULL,
  photo_decs varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table tbl_photos
--

INSERT INTO tbl_photos (photos_id, photos_title, photos_th, photo_img, photo_decs) VALUES
(1, 'arealIsland2', 'TH_arealIsland2.png', 'arealIsland2.png', 'Areal View Of Chantry Island'),
(2, 'arealMainland', 'TH_arealMainland.png', 'arealMainland.png', 'Areal view of Southampton Ontario'),
(3, 'bed1', 'TH_bed1.png', 'bed1.png', 'A bed in the recreated lightkeeper\'s cottage.'),
(4, 'arealIsland3', 'TH_arealIsland3.png', 'arealIsland3.png', 'Areal view of Chantry Island.'),
(5, 'bed2', 'TH_bed2.png', 'bed2.png', 'A bed in the recreated lightkeeper\'s cottage.'),
(6, 'eggs', 'TH_eggs.png', 'eggs.png', 'Eggs in a nest found on Chantry Island. '),
(7, 'diningRoom', 'TH_diningRoom.png', 'diningRoom.png', 'The dinning room in the recreated lightkeeper\'s cottage.'),
(8, 'egrit', 'TH_egrit.png', 'egrit.png', 'A nest of Egrets.'),
(9, 'lilBird', 'TH_lilBird.png', 'lilBird.png', 'Newly hatched baby bird. '),
(10, 'peerless', 'TH_peerless.png', 'peerless.png', 'The Peerless II'),
(11, 'arealIsland1', 'TH_arealIsland1.png', 'arealIsland1.png', 'Areal view of Chantry Island'),
(12, 'lighthouseCabin1', 'TH_lighthouseCabin1.png', 'lighthouseCabin1.png', 'Chantry Island lighthouse and lightkeeper\'s cottage.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_photos
--
ALTER TABLE tbl_photos
  ADD PRIMARY KEY (photos_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_photos
--
ALTER TABLE tbl_photos
  MODIFY photos_id tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
