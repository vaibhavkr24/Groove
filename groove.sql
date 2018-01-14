-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 05:52 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groove`
--

-- --------------------------------------------------------

--
-- Table structure for table `liked_album`
--

CREATE TABLE `liked_album` (
  `album_id` varchar(255) NOT NULL,
  `alb_name` varchar(255) NOT NULL,
  `art_name` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liked_album`
--

INSERT INTO `liked_album` (`album_id`, `alb_name`, `art_name`, `uid`) VALUES
('2026126', 'Believe', 'Cher', 1);

-- --------------------------------------------------------

--
-- Table structure for table `liked_artist`
--

CREATE TABLE `liked_artist` (
  `artist_id` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liked_artist`
--

INSERT INTO `liked_artist` (`artist_id`, `name`, `uid`) VALUES
('bfcc6d75-a6a5-4bc6-8282-47aec8531818', 'Cher', 1),
('79239441-bfd5-4981-a70c-55c3f15c1287', 'Madonna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `liked_song`
--

CREATE TABLE `liked_song` (
  `song_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `art_name` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `liked_song`
--

INSERT INTO `liked_song` (`song_id`, `name`, `art_name`, `uid`) VALUES
('23cb7c26-f9da-484b-b15d-3543418bf27b', 'Beautiful', 'Cher', 1),
('a71ccaa5-41e8-4dac-b316-df05a0c5f2e4', 'Galaxia', 'Madonna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `played`
--

CREATE TABLE `played` (
  `uid` int(11) NOT NULL,
  `song_id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `played`
--

INSERT INTO `played` (`uid`, `song_id`, `song_name`) VALUES
(1, 123, 'Strong Enough'),
(0, 0, ''),
(0, 0, ''),
(0, 0, ''),
(0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_song`
--

CREATE TABLE `playlist_song` (
  `pid` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist_song`
--

INSERT INTO `playlist_song` (`pid`, `song_name`) VALUES
(1, 'Can''t Take My Eyes Off You');

-- --------------------------------------------------------

--
-- Table structure for table `playlist_user`
--

CREATE TABLE `playlist_user` (
  `p_id` int(11) NOT NULL,
  `playlist_name` varchar(255) NOT NULL,
  `created at` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist_user`
--

INSERT INTO `playlist_user` (`p_id`, `playlist_name`, `created at`, `uid`) VALUES
(1, 'play_Song', '2017-10-10 17:09:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `u_id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `played` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`u_id`, `song_name`, `played`) VALUES
(1, 'Treat you better', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `uid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `reg_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`uid`, `name`, `email`, `password`, `reg_time`) VALUES
(2, 'ARJITA CHAURASIA', 'arjitachaurasia@gmail.com', '5620df149ab4e5d7308c88759fe59c85', '2017-10-07 14:45:01'),
(3, 'manu paliwal', 'mamta111097@gmail.com', 'd381b8521f5082e654b845a7c02be48f', '2017-10-07 16:15:00'),
(6, 'shivani gupta', 'shivisharma4705@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2017-10-09 11:42:21'),
(8, '121', 'arjitachaurasi3a@gmail.com', 'ea1f2cf9b9d51b5bad44b74e5b21f1d5', '2017-10-10 23:36:03'),
(11, '563@', 'arjitachaurasi3a@gmail.com', '5620df149ab4e5d7308c88759fe59c85', '2017-10-11 07:27:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liked_song`
--
ALTER TABLE `liked_song`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `playlist_user`
--
ALTER TABLE `playlist_user`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playlist_user`
--
ALTER TABLE `playlist_user`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
