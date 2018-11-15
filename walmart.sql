-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 06:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dat` varchar(255) NOT NULL,
  `tim` varchar(255) NOT NULL,
  `descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `name`, `dat`, `tim`, `descrip`) VALUES
(1, 'meet ', '2018-11-09', '01:00', 'Meet and greet.'),
(2, 'Teams Registration, Breakfast & Setup Troubleshooting', '2018-11-11', '13:32', 'In this 1 hour, the participants will first have to register themselves, have their breakfast and get a place alloted.'),
(3, 'Guidelines,Rules,Judgement Criteria', '2018-11-13', '02:14', 'After registration & breakfast, the participants will be given a brief description about the rules, deadlines and the winning criteria.'),
(4, 'Result', '2018-11-10', '13:02', 'No. I dont. '),
(5, 'joel', '2018-11-17', '12:34', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE `judges` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desig` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`id`, `name`, `desig`, `image`, `comp`) VALUES
(1, 'blah', 'blah', 'j1.jpg', 'blah');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desig` varchar(255) NOT NULL,
  `comp` varchar(255) NOT NULL,
  `pos` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `name`, `desig`, `comp`, `pos`, `imgpath`) VALUES
(7, 'Mark Zuckerberg', 'CEO', 'FACEBOOK', 'Mentor', 'mark.jpg'),
(8, 'Victoria Bekham', 'FASHION HEAD', 'BEKHAM', 'Mentor', 'victoria.jpg'),
(9, 'Tim Cook', 'Apple CEO', 'APPLE', '', 'tim.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prizes`
--

CREATE TABLE `prizes` (
  `id` int(10) NOT NULL,
  `descrip` text NOT NULL,
  `imgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prizes`
--

INSERT INTO `prizes` (`id`, `descrip`, `imgpath`) VALUES
(1, 'win 20 Rs.', '14-watercolor-painting-nature.preview.jpg'),
(2, 'whatever', 'p1.jpg'),
(3, 'yeah yeah', 'p2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `descrip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `category`, `descrip`) VALUES
(1, 'Data Science', 'ML and python'),
(2, 'Cyber Security', 'Even for those acquiring companies that intend to scrutinize data security issues as part of the M&A due diligence process, often the lawyers conducting such diligence do not adequately understand the current cybersecurity threat landscape or donâ€™t understand the particular risks associated with the target company. More often than not, the lawyers ask a battery of routine, privacy-related questions of a company even when that company does not collect or handle consumer personal data.');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `id` int(10) NOT NULL,
  `qto` varchar(255) NOT NULL,
  `qfrom` varchar(255) NOT NULL,
  `sub` text NOT NULL,
  `qsn` text NOT NULL,
  `ans` text NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `faq` int(2) NOT NULL DEFAULT '0',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `qto`, `qfrom`, `sub`, `qsn`, `ans`, `name`, `email`, `faq`, `datetime`) VALUES
(1, '', 'ADMIN', '', '', 'answered', '', '', 1, '2018-11-11 07:33:17'),
(2, 'Ragi', 'ADMIN', 'Hi', 'heloo\r\n', 'Hey there zain ulla.', 'Ragi', 'ragibhatt@gmail.com', 1, '2018-11-11 07:35:35'),
(3, 'Rasheed', 'ADMIN', 'Hieyyy', 'You are pretty. oh thanks.', 'I know', 'Rasheed', 'rasheedulla97@gmail.com', 1, '2018-11-11 09:23:58'),
(4, 'Rasheed', 'ADMIN', 'Hieyyy', 'You are pretty. oh thanks.', 'you are smnart zayn . okay smart but,', 'Rasheed', 'rasheedulla97@gmail.com', 1, '2018-11-11 10:17:02'),
(5, 'Rasheed', 'ADMIN', 'what', 'wtf', 'ok', 'Rasheed', 'rasheedulla97@gmail.com', 1, '2018-11-11 10:19:40'),
(6, 'Rasheed', 'ADMIN', 'what', 'wtf', 'yeha yeabkjasnoj', 'Rasheed', 'rasheedulla97@gmail.com', 1, '2018-11-11 10:47:04'),
(7, 'Joel', 'ADMIN', 'Hey', 'I have a doubt.', 'Yup tell me ', 'Joel', 'rasheedulla97@gmail.com', 0, '2018-11-13 13:29:09'),
(8, 'Joel', 'ADMIN', 'Hey', 'I have a doubt.', '', 'Joel', 'rasheedulla97@gmail.com', 0, '2018-11-13 13:29:36'),
(9, 'Joel', 'ADMIN', 'Hey', 'I have a doubt.', '', 'Joel', 'rasheedulla97@gmail.com', 0, '2018-11-13 13:30:16'),
(10, 'Joel', 'ADMIN', 'Hey', 'I have a doubt.', '', 'Joel', 'rasheedulla97@gmail.com', 0, '2018-11-13 13:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `rsvp`
--

CREATE TABLE `rsvp` (
  `id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `describes` varchar(50) NOT NULL,
  `m1_name` varchar(50) NOT NULL,
  `m1_email` varchar(50) NOT NULL,
  `m1_contact` varchar(50) NOT NULL,
  `m2_name` varchar(50) NOT NULL,
  `m2_email` varchar(50) NOT NULL,
  `m2_contact` varchar(50) NOT NULL,
  `m3_name` varchar(50) NOT NULL,
  `m3_email` varchar(50) NOT NULL,
  `m3_contact` varchar(50) NOT NULL,
  `m4_name` varchar(50) NOT NULL,
  `m4_email` varchar(20) NOT NULL,
  `m4_contact` varchar(10) NOT NULL,
  `datime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rsvp`
--

INSERT INTO `rsvp` (`id`, `team_name`, `describes`, `m1_name`, `m1_email`, `m1_contact`, `m2_name`, `m2_email`, `m2_contact`, `m3_name`, `m3_email`, `m3_contact`, `m4_name`, `m4_email`, `m4_contact`, `datime`) VALUES
(1, 'StarMAnxhester', 'Students', 'Ragi Bhatt', 'ragibhatt@xyz.com', '8495000424', 'xain', 'rasheedulla97@gmail.com', '9066231881', 'Sanjana', 'sanju@sanju.com', '9964808104', 'Suahs', 'suahs@fametronix.com', '9742851417', '0000-00-00 00:00:00'),
(2, 'Chelsea', 'Professionals', 'Suraj', 'suraj@fametronix.com', '99089890809', '', '', '', '', '', '', '', '', '', '2018-11-12 04:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `id` int(10) NOT NULL,
  `rules` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `rules`) VALUES
(1, 'Be Happy'),
(2, 'Fresh Code â€“ We all start coding at the same time. Itâ€™s cool to work on designs beforehand, digital mockups, open source frameworks, and anything else available to everyone, but keep things within fair limits.'),
(3, 'Code Review â€“ Winning teams may be subject to a code-review at some point following the event or immediately before winning. This is to ensure that all code used is in fact fresh.'),
(4, 'Team Size â€“ No more than four people.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `sponser`
--

CREATE TABLE `sponser` (
  `id` int(11) NOT NULL,
  `s_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `s_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponser`
--

INSERT INTO `sponser` (`id`, `s_id`, `name`, `contact`, `email`, `s_image`) VALUES
(7, 'S002', 'Sanjana G', '1231275887', 'sanju@sanju.com', 'sparkle.jpg'),
(8, 'S003', 'Deeraj ', '121212', 'yup@xyz.com', 'pink.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prizes`
--
ALTER TABLE `prizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rsvp`
--
ALTER TABLE `rsvp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponser`
--
ALTER TABLE `sponser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `prizes`
--
ALTER TABLE `prizes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rsvp`
--
ALTER TABLE `rsvp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponser`
--
ALTER TABLE `sponser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
