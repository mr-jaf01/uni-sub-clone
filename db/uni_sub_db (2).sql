-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 24, 2022 at 04:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni_sub_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `created_date` varchar(200) NOT NULL,
  `university` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `created_date`, `university`) VALUES
(1, 'STATISTIC AND  COMPUTER SCIENCES', '01:03:08 2022-03-24', 'ABUBAKAR TAFABALEWA UNIVERSITY BAUCHI,'),
(2, 'BIOLOGY AND BIOCHEMISTRY', '01:03:35 2022-03-24', 'FEDERAL POLYTECHNIC BAUCHI'),
(3, 'STATISTIC AND  COMPUTER SCIENCES', '01:03:54 2022-03-24', 'FEDERAL POLYTECHNIC BAUCHI'),
(5, 'SOFTWARE', '04:03:00 2022-03-24', 'Harvard University');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_title` text NOT NULL,
  `course_overview` text NOT NULL,
  `course_university` text NOT NULL,
  `course_eligibility` text NOT NULL,
  `course_unit` text NOT NULL,
  `course_registration` text NOT NULL,
  `course_fee` text NOT NULL,
  `carrier` text NOT NULL,
  `course_duration` text NOT NULL,
  `degree` text NOT NULL,
  `site` text NOT NULL,
  `created_date` varchar(200) NOT NULL,
  `course_category` text NOT NULL,
  `postedby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_title`, `course_overview`, `course_university`, `course_eligibility`, `course_unit`, `course_registration`, `course_fee`, `carrier`, `course_duration`, `degree`, `site`, `created_date`, `course_category`, `postedby`) VALUES
(1, 'Mathematics & Statistics (PhD)', 'Mathematics & Statistics (PhD) is a 3-4 years PhD program taught at University of Guelph, . The program is presented in campus-based modes with full Time choices. To victoriously achieve Mathematics & Statistics (PhD) from University of Guelph you are needed to accomplish credit hours. After accomplishment of Mathematics & Statistics (PhD) you will be capable to further pursue for advance studies or start profession as Statistician, Mathematician, Analyst, Research Analyst, Data Scientist, Data Analyst.', 'University of Guelph', 'The minimum requirements for admission in Mathematics & Statistics (PhD) at University of Guelph for all applicants (Domestic or International) are:\r\n\r\nprogram specific academic requirment set by University of Guelph.\r\nEnglish Language OR any other language requirments as set by University of Guelph as pre-requiste for admission in Mathematics & Statistics (PhD).\r\nNote: Please check the university website in the link below.\r\n\r\nFor the Doctoral program, a recognized Master’s degree obtained with high academic standing is required.', 'You need to complete credit hours. Please  https://graduatestudies.uoguelph.ca/programs/math', 'You need to complete credit hours to successfully obtain this degree. Please check detail of study units at https://graduatestudies.uoguelph.ca/programs/math', 'fee structure https://graduatestudies.uoguelph.ca/programs/math', 'You can join one of the following careers:\r\n\r\nStatistician\r\nMathematician\r\nAnalyst\r\nResearch Analyst\r\nData Scientist\r\nData Analyst', '3-4 years', 'PhD', 'Campus based', '20 March, 2022', 'STATISTICS', 'ADMIN'),
(3, 'CS50s Introduction to Artificial Intelligence with Python', '      CS50â€™s Introduction to Artificial Intelligence with Python is a 7 weeks Short Course program taught at Harvard University, . The program is presented in online modes with part-time choices. To victoriously achieve CS50â€™s Introduction to Artificial Intelligence with Python from Harvard University you are needed to accomplish 0 credit hours. After accomplishment of CS50â€™s Introduction to Artificial Intelligence with Python you will be capable to further pursue for advance studies or start profession as Web Developer, Software Developer, Python Programmer, Data Scientist, Data Analyst.\r\n\r\nAI is changing how we live, work, and play. By helping new technologies like self-driving cars and endorsement systems or upgrading old ones like medical diagnostics and search engines, the requirement for skill in AI and machine learning is growing speedily. This course will help you in taking steps towards solving important global  issues and future-proofing your profession.\r\n\r\nCS50â€™s Introduction to Artificial Intelligence with Python investigates the concepts and algorithms at the basis of modern artificial intelligence, diving into the concepts that provide increment to technologies like game-playing engines, handwriting recognition, and machine translation. Through hands-on projects, pupil achieve disclosure to the theory behind graph search algorithms, categorization, enhancement, strengthen learning, and other topics in artificial intelligence and machine learning as they include them into their own Python programs. By courseâ€™s end, students rise with encounter in libraries for machine learning along with  learning of artificial intelligence rules that helps them to design intelligent systems of their own.\r\n\r\nApply now to achieve skills in one of the rapidly growing realm of computer science from the makers of one of the most well known computer science courses ever, CS50. Youâ€™ll study the conceptual frameworks that helps these new technologies while achieving practical encounters in how to administer these powerful techniques in your work. ', 'Harvard University', '      Apply now to achieve skills in one of the rapidly growing realm of computer science from the makers of one of the most well known computer science courses ever, CS50. Youâ€™ll study the conceptual frameworks that helps these new technologies while achieving practical encounters in how to administer these powerful techniques in your work.', 'What youâ€™ll learn  Graph search algorithms Reinforcement learning Machine learning Artificial intelligence principles How to design intelligent systems How to use AI in Python programs.', ' htttp://www.mcmp.philosophie.uni-muenchen.de/index.html', 'htttp://www.mcmp.philosophie.uni-muenchen.de/index.html', 'You can join one of the following careers:\r\n\r\nWeb Developer\r\nSoftware Developer\r\nPython Programmer\r\nData Scientist\r\nData Analyst', '7 WEEKS', ' Undergraduate', 'Campus based', '2022-03-24', 'SOFTWARE', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE `front` (
  `id` int(11) NOT NULL,
  `site_name` varchar(200) NOT NULL,
  `footer_name` varchar(200) NOT NULL,
  `created_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front`
--

INSERT INTO `front` (`id`, `site_name`, `footer_name`, `created_date`) VALUES
(1, 'UNI-JAF-SUB', 'mrjaf', '02:03:19 2022-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_tittle` varchar(100) NOT NULL,
  `created_date` varchar(200) NOT NULL,
  `links` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_tittle`, `created_date`, `links`) VALUES
(2, 'CONTACT US', '11:03:06 2022-03-20', 'contact'),
(3, 'DEGREE', '11:03:15 2022-03-20', 'degree'),
(4, 'PRIVACY POLICY', '11:03:52 2022-03-20', 'policy'),
(5, 'UNIVERSITIES', '11:03:22 2022-03-20', 'university');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `university_id` int(11) NOT NULL,
  `university_name` text NOT NULL,
  `university_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`university_id`, `university_name`, `university_link`) VALUES
(1, 'ABUBAKAR TAFABALEWA UNIVERSITY BAUCHI,', 'atbu.edu.ng'),
(2, 'ABUBAKAR TAFABALEWA UNIVERSITY BAUCHI,', 'atbu.edu.ng'),
(3, 'FEDERAL POLYTECHNIC BAUCHI', 'fptb.edu.ng'),
(4, 'FEDERAL POLYTECHNIC BAUCHI', 'fptb.edu.ng'),
(5, 'ABUBAKAR TAFABALEWA UNIVERSITY BAUCHI,', 'atbu.edu.ng'),
(6, 'FEDERAL POLYTECHNIC BAUCHI', 'fptb.edu.ng'),
(7, 'ABUBAKAR TAFABALEWA UNIVERSITY BAUCHI,', 'atbu.edu.ng'),
(8, 'FEDERAL POLYTECHNIC BAUCHI', 'fptb.edu.ng'),
(9, 'ABUBAKAR TAFABALEWA UNIVERSITY BAUCHI,', 'atbu.edu.ng'),
(10, 'FEDERAL POLYTECHNIC BAUCHI', 'fptb.edu.ng'),
(13, 'Harvard University', 'htttp://www.mcmp.philosophie.uni-muenchen.de/index.html');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `urs_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`urs_id`, `name`, `email`, `password`) VALUES
(1, 'MR JAF', 'me@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `front`
--
ALTER TABLE `front`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`urs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `front`
--
ALTER TABLE `front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `university_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `urs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
