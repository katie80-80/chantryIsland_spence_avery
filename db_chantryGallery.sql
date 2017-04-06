-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 06, 2017 at 07:25 AM
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
-- Table structure for table tbl_copy
--

CREATE TABLE tbl_copy (
  copy_id smallint(4) UNSIGNED NOT NULL,
  copy_page varchar(11) NOT NULL,
  copy_content varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table tbl_copy
--

INSERT INTO tbl_copy (copy_id, copy_page, copy_content) VALUES
(2, 'home', '68 acres'),
(3, 'tours', '30'),
(4, 'tours', 'Enjoy a 2 hour stroll back in time and see the Light Keeper\'s Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds. The tour is much like a medium hike and requires a degree of physical fitness and mobility. Although can enjoy the tour without climbing the 106 steps in the Lighthouse tower, if you do reach the light room, you will always remember the view.'),
(5, 'volunteers', '125'),
(6, 'volunteers', '12000'),
(7, 'home', 'The Marine Heritage Society is a not-for-profit group of volunteers whose objective is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavours. The Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service among other projects.');

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
(1, 'arealIsland2', 'TH_arealIsland2.png', 'arealIslandA.png', 'Areal View Of Chantry Island'),
(2, 'arealMainland', 'TH_arealMainland.png', 'arealMainland.png', 'Areal view of Southampton Ontario'),
(3, 'bed1', 'TH_bed1.png', 'bed1.png', 'A bed in the recreated lightkeeper\'s cottage.'),
(4, 'arealIsland3', 'TH_arealIsland3.png', 'arealIsland3.png', 'Areal view of Chantry Island.'),
(5, 'bed2', 'TH_bed2.png', 'bed2.png', 'A bed in the recreated lightkeeper\'s cottage.'),
(6, 'eggs', 'TH_eggs.png', 'eggs.png', 'Eggs in a nest found on Chantry Island. '),
(7, 'diningRoom', 'TH_diningRoom.png', 'diningRoomB.png', 'The dinning room in the recreated lightkeeper\'s cottage.'),
(8, 'egrit', 'TH_egrit.png', 'egrit.png', 'A nest of Egrets.'),
(9, 'lilBird', 'TH_lilBird.png', 'lilBird.png', 'Newly hatched baby bird. '),
(10, 'peerless', 'TH_peerless.png', 'peerlessB.png', 'The Peerless II'),
(11, 'arealIsland1', 'TH_arealIsland1.png', 'arealIsland1.png', 'Areal view of Chantry Island'),
(12, 'lighthouseCabin1', 'TH_lighthouseCabin1.png', 'lighthouseCabinA.png', 'Chantry Island lighthouse and lightkeeper\'s cottage.');

-- --------------------------------------------------------

--
-- Table structure for table tbl_user
--

CREATE TABLE tbl_user (
  user_id smallint(4) UNSIGNED NOT NULL,
  user_fname varchar(50) NOT NULL,
  user_lname varchar(50) NOT NULL,
  user_name varchar(50) NOT NULL,
  user_pass varchar(50) NOT NULL,
  user_level varchar(25) NOT NULL,
  user_ip varchar(100) NOT NULL,
  user_logDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  user_logAttempts tinyint(1) NOT NULL,
  user_lockoutDate timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  user_email varchar(50) NOT NULL,
  user_edit varchar(3) NOT NULL,
  user_createDate datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table tbl_user
--

INSERT INTO tbl_user (user_id, user_fname, user_lname, user_name, user_pass, user_level, user_ip, user_logDate, user_logAttempts, user_lockoutDate, user_email, user_edit, user_createDate) VALUES
(1, 'Kate', 'Spence', 'kspence', '5678', '1', '1', '2017-04-06 11:20:12', 0, '0000-00-00 00:00:00', 'katespence57@gmail.com', 'yes', '2017-03-24 00:00:00'),
(2, 'Lauren', 'Avery', 'lavery', '4321', '1', '2', '2017-03-25 06:21:01', 0, '0000-00-00 00:00:00', 'lauren.averyy@gmail.com', '', '2017-03-24 00:00:00'),
(4, 'FirstName', 'LastName', 'chantryadmin', 'blueheron', '2', '4', '2017-04-06 11:24:56', 0, '0000-00-00 00:00:00', 'katespence57@gmail.com', 'yes', '2017-04-06 07:24:01');

-- --------------------------------------------------------

--
-- Table structure for table tbl_volunteers
--

CREATE TABLE tbl_volunteers (
  volunteers_id smallint(4) UNSIGNED NOT NULL,
  volunteers_name varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table tbl_volunteers
--

INSERT INTO tbl_volunteers (volunteers_id, volunteers_name) VALUES
(1, 'Don Nicholson-Chairman'),
(2, 'Pat O\'Connor-Vice Chairman'),
(3, 'John Rigby-Treasurer'),
(4, 'Stan Young-Secretary'),
(5, 'Rick Smith-Former Chairman'),
(6, 'Ali Kelly'),
(7, 'Jane Kramer'),
(8, 'Vicki Tomori'),
(9, 'Dan Holmes'),
(10, 'Ed Braun'),
(11, 'John Willetts'),
(12, 'Peter Williamson-Observer'),
(13, 'Dave Wenn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_copy
--
ALTER TABLE tbl_copy
  ADD PRIMARY KEY (copy_id);

--
-- Indexes for table tbl_photos
--
ALTER TABLE tbl_photos
  ADD PRIMARY KEY (photos_id);

--
-- Indexes for table tbl_user
--
ALTER TABLE tbl_user
  ADD PRIMARY KEY (user_id);

--
-- Indexes for table tbl_volunteers
--
ALTER TABLE tbl_volunteers
  ADD PRIMARY KEY (volunteers_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_copy
--
ALTER TABLE tbl_copy
  MODIFY copy_id smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_photos
--
ALTER TABLE tbl_photos
  MODIFY photos_id tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_user
--
ALTER TABLE tbl_user
  MODIFY user_id smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_volunteers
--
ALTER TABLE tbl_volunteers
  MODIFY volunteers_id smallint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
