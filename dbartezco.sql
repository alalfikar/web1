-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 12:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbartezco`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmanga`
--

CREATE TABLE `addmanga` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `cover` varchar(500) NOT NULL,
  `genre` varchar(500) NOT NULL,
  `d` text NOT NULL,
  `tanggal_tambah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmanga`
--

INSERT INTO `addmanga` (`id`, `judul`, `cover`, `genre`, `d`, `tanggal_tambah`) VALUES
(7, 'Tokyo Ghoul:re', 'tky1.jpg', 'Supernatural, Action, Romance, Seinen, Psychological, Drama, Mystery, Horror, Mature, Tragedy', 'Two years have passed since the CCG\'s raid on Anteiku. Although the atmosphere in Tokyo has changed drastically due to the increased influence of the CCG, ghouls continue to pose a problem as they have begun taking caution, especially the terrorist organization Aogiri Tree, who acknowledge the CCG\'s growing threat to their existence.\r\n\r\nThe creation of a special team, known as the Quinx Squad, may provide the CCG with the push they need to exterminate Tokyo\'s unwanted residents. As humans who have undergone surgery in order to make use of the special abilities of ghouls, they participate in operations to eradicate the dangerous creatures. The leader of this group, Haise Sasaki, is a half-ghoul, half-human who has been trained by famed special class investigator, Kishou Arima. However, there\'s more to this young man than meets the eye, as unknown memories claw at his mind, slowly reminding him of the person he used to be.', '2018-11-27 02:50:22'),
(8, 'Fate/stay night', 'fate1.jpg', 'Supernatural, Action, Romance, Fantasy, Shounen', 'The story takes place in an ordinary Japanese town, Fuyuki City. Hidden from society, there has been a deadly war going on in this town. Seven sorcerers known as \"Masters\" summon a powerful familiar called \"Servants\" and they all fight each other till the last one. The last one is said to attain the Holy Grail which will grant them a wish. Only a few knows when this War started and what the Holy Grail is, but the war was about to begin again this year.\r\n\r\nThe main character is Emiya Shirou, who lost his parents in a fire and was adopted by a man who called himself a sorcerer. Admiring his step father, he has been training himself to be a sorcerer. However, he had no talent and he could barely use one type of sorcery. His step father has already passed away, and today he\'s a sorcerer without any skills or knowledge. He is involved in the War of the Holy Grail when he accidentally summons Saber, who is said to be the strongest servant of all...', '2018-11-27 02:51:06'),
(9, 'The Story of a Girl with Sanpaku Eyes', '0109GA.5BmHK59J.jpg', 'Comedy, Romance, School Life, Shoujo, Slice of Life', 'Sanpaku (??) is a Japanese term meaning \"three whites\". It is generally referred to in English as \"sanpaku eyes\" and refers to eyes in which the white space above or below the iris is visible.', '2018-06-04 23:12:24'),
(10, 'One Punch-Man', 'opm1.jpg', 'Supernatural, Action, Comedy, Seinen, Drama, Sci-Fi, Slice of Life, Parody, Super Power', '“I’m just an average guy who serves as an average hero.”\r\n\r\nIn a world of superheroes and villains, Saitama appears to be a plain man -- from his lifeless expression to his sluggish personality, nothing stands out. But once danger strikes, he’s an insanely powerful superhero that can take down villains with a single punch! Although his strength keeps the city safe, Saitama can’t help but grow bored with how easily his opponents are defeated.\r\n\r\nOne day, his path crosses with the young cyborg, Genos, who wishes to be Saitama’s disciple. Thus a new chapter in Saitama’s life unfolds, opening up this action-packed seinen comedy of an average-looking man craving excitement and popularity in his “hobby” of being a superhero!', '2018-11-27 02:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(8) NOT NULL,
  `tanggal_register` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `username`, `email`, `password`, `tanggal_register`) VALUES
(17, 'Achmad Nur Alfikar', 'acselax', 'acselaxkazami@gmail.com', 'admin', '2018-06-05 00:00:00'),
(18, 'Achmad Nur Alfikar', 'achmad', 'akaachmad41@gmail.com', 'qwerty', '2018-11-26 00:00:00'),
(21, 'Achmad Nur Alfikar', 'achmad', 'acselaxkazami@gmail.com', 'qweqwe', '2018-11-27 00:00:00'),
(22, 'Pak Dadan', 'Dadanj', 'dadan@gmail.com', '12345', '2018-11-27 14:30:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmanga`
--
ALTER TABLE `addmanga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmanga`
--
ALTER TABLE `addmanga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
