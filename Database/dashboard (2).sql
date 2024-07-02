-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 07:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(100) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(23, 'Sophia Amoruso'),
(33, 'Gary Vaynerchuk'),
(34, 'Thomas W. Phelan Ph.D.'),
(35, 'Skylar Sorren'),
(36, 'Trevor Noah'),
(37, 'Nicholas Sparks'),
(38, 'Eâˆ’Cookbooks'),
(39, 'Richard Walton'),
(41, 'Andrea Portes'),
(42, 'Nalini Singh'),
(43, 'Anand Neelakantan'),
(44, 'Rainbow Rowell'),
(45, 'His Divine Grace A. C. Bhaktivedanta Swami Prabhupada'),
(46, 'David Holmes'),
(47, 'BrenÃ© Brown'),
(48, 'RACHEL BRIDGE'),
(49, 'gfgj');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) UNSIGNED NOT NULL,
  `categories` int(11) DEFAULT NULL,
  `subcategories` int(11) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `publishers` int(11) NOT NULL,
  `coverImage` varchar(1000) NOT NULL,
  `ebookUpload` varbinary(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=visible,1=hidden'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `categories`, `subcategories`, `title`, `publishers`, `coverImage`, `ebookUpload`, `description`, `status`) VALUES
(127, 1, 19, '#GIRLBOSS', 24, 'assets/uploads/books/1716382623.png', 0x6173736574732f75706c6f6164732f7064662f313731363338323632332e706466, 'In the New York Times bestseller that the Washington Post called â€œLean In for misfits,â€ Sophia Amoruso shares how she went from dumpster diving to founding one of the fastest-growing retailers in the world. Amoruso spent her teens hitchhiking, committing petty theft, and scrounging in dumpsters for leftover bagels.', 0),
(128, 1, 20, '1-2-3 MAGIC', 81, 'assets/uploads/books/1716382921.jpg', 0x6173736574732f75706c6f6164732f7064662f313731363338323932312e706466, 'Designed to help parents to take charge of their home, offers tips on how to recognize six types of testing and manipulating behavior and how to constructively handle misbehavior at home and in public.', 0),
(129, 13, 23, '1001 QUOTES AND SAYINGS', 82, 'assets/uploads/books/1716383236.png', 0x6173736574732f75706c6f6164732f7064662f313731363338333233362e706466, '\"1001 Quotes and Sayings\" is a captivating compilation of timeless wisdom, offering a diverse collection of thought-provoking quotes from various authors, philosophers, and notable figures throughout history. This book serves as a source of inspiration and reflection, providing concise insights into life\'s complexities and universal truths in just a few words.', 0),
(130, 1, 18, 'A BORN CRIME', 83, 'assets/uploads/books/1716383686.jpg', 0x6173736574732f75706c6f6164732f7064662f313731363338333638362e706466, 'Trevor Noah\'s book \"Born a Crime\" falls under the category of memoir or autobiography. It is a personal account of his life experiences, including his childhood growing up as a mixed-race child during apartheid in South Africa, and his journey to becoming a successful comedian and television host.', 0),
(131, 14, 27, 'A WALK TO REMEMBER', 84, 'assets/uploads/books/1716384149.png', 0x6173736574732f75706c6f6164732f7064662f313731363338343134392e706466, 'When I was seventeen, my life changed forever. I know that there are people who wonder about me when I say this. They look at me strangely as if trying to fathom what could have happened back then, though I seldom bother to explain. Because I\'ve lived here for most of my life, I don\'t feel that I have to unless it\'s on my terms, and that would take more time than most people are willing to give me.', 0),
(132, 15, 28, 'A TASTE OF CHINA', 85, 'assets/uploads/books/1716384396.png', 0x6173736574732f75706c6f6164732f7064662f313731363338343339362e706466, 'A Taste of China\' combines a lively and informative narrative with authentic recipes from Hom\'s travels within mainland China. His journey takes him from the private homes of family and friends, through the food stalls in bustling urban markets, to the local restaurants and tea houses. Ken travelled to almost every region of China and in this book presents a sense of the history, culture and lives of the Chinese people.', 0),
(133, 16, 29, 'ADVANCED ENGLISH C.A.E', 86, 'assets/uploads/books/1716385068.png', 0x6173736574732f75706c6f6164732f7064662f313731363338353036382e706466, 'A new brain-imager has pinpointed an area deep in the left frontal half of the brain used to process language. Dr. Julie Fiez, who first reported the work, believes brain imagers will one day help to show the cause of problems like dyslexia and determine strategies to overcome language in difficulties.', 0),
(134, 1, 20, 'ANATOMY OF A MISFIT', 87, 'assets/uploads/books/1716733674.png', 0x6173736574732f75706c6f6164732f7064662f313731363733333637342e706466, 'Itâ€™s rare that a book can be as funny and absolutely delightful as it is moving and thought provoking, and Anatomy of a Misfit is both.â€ â€”Lauren Oliver, author of Before I Fall. Anika Dragomir is the third-most-popular girl at Pound High School. But inside, she knows sheâ€™s a freak; she canâ€™t stop thinking about former loner Logan McDonough, who showed up on the first day of tenth grade hotter, bolder, and more mysterious than ever.', 0),
(135, 1, 19, 'ANGELS\' BLOOD', 88, 'assets/uploads/books/1716733959.png', 0x6173736574732f75706c6f6164732f7064662f313731363733333935392e706466, 'Vampire hunter Elena Deveraux knows sheâ€™s the bestâ€”but she doesnâ€™t know if sheâ€™s good enough for this job. Hired by the dangerously beautiful Archangel Raphael, a being so lethal that no mortal wants his attention, only one thing is clearâ€”failure is not an optionâ€¦even if the task is impossible.', 0),
(136, 14, 26, 'ASURA-TALE OF THE VANQUISHED', 89, 'assets/uploads/books/1716734230.jpg', 0x6173736574732f75706c6f6164732f7064662f313731363733343233302e706466, 'The book \"ASURA TALE OF THE VANQUISHED: The Story of Ravana and His People\" is a work of fantasy fiction that explores the mythology of the Hindu religion. It is a retelling of the ancient Indian epic, the Ramayana, from the perspective of the villainous Ravana, who is often portrayed as a demon or Asura.', 0),
(137, 1, 18, 'Rainbow Rowell', 87, 'assets/uploads/books/1716734500.png', 0x6173736574732f75706c6f6164732f7064662f313731363733343530302e706466, 'Would it kill you to get here before noon? Iâ€™m sitting here among the shards of my life as I know it, and you ...if I know you, you just woke up. Youâ€™re probably eating oatmeal and watching Sally Jessy Raphael. E-mail me when you get in, before you do anything else. Donâ€™t even read the comics.', 0),
(139, 13, 23, 'BEYOND BIRTH AND DEATH', 90, 'assets/uploads/books/1716734995.jpg', 0x6173736574732f75706c6f6164732f7064662f313731363733343939352e706466, 'Is there life after death? Follow the soul\'s journey through this universe and beyond. The past decade has seen an increase in the number of people who believe in reincarnation. This small but powerful book answers questions like \r\n\r\nâ€¢ Who am I? \r\n\r\nâ€¢ What happens after death? \r\n\r\nâ€¢ What\'s it like to reincarnate in one body after another? \r\n\r\nâ€¢ Is it possible to break the cycle of samsara, of repeated birth and death? \r\n\r\nâ€¢ Is there an eternal place where my soul can live?', 0),
(140, 17, 34, 'COMMUNICATION THEORY', 91, 'assets/uploads/books/1716735648.png', 0x6173736574732f75706c6f6164732f7064662f313731363733353634382e706466, 'The cluster of texts which came out over the last decade dealing with computer-mediated communication (CMC), virtual reality, and cyberspace has significantly established new theoretical domains of research which have been accepted across a range of disciplines.', 0),
(141, 1, 20, 'DARING GREATLY', 92, 'assets/uploads/books/1716735981.png', 0x6173736574732f75706c6f6164732f7064662f313731363733353938312e706466, 'The first time I read this quote, I thought, This is vulnerability. Everything Iâ€™ve learned from over a decade of research on vulnerability has taught me this exact lesson. Vulnerability is not knowing victory or defeat, itâ€™s understanding the necessity of both; itâ€™s engaging. Itâ€™s being all in. Vulnerability is not weakness, and the uncertainty, risk, and emotional exposure we face every day are not optional. Our only choice is a question of engagement. Our willingness to own and engage with our vulnerability determines the depth of our courage and the clarity of our purpose; the level to which we protect ourselves from being vulnerable is a measure of our fear and disconnection.', 0),
(142, 1, 18, 'HOW I MADE IT', 93, 'assets/uploads/books/1716736523.png', 0x6173736574732f75706c6f6164732f7064662f313731363733363532332e706466, 'A lot has changed since I wrote the original hardback version of this book five years ago. In that time entrepreneurship has enjoyed an extraordinary rise in visibility and popularity, thanks in part to television programmes such as\r\nDragonsâ€™ Den and The Apprentice. A government initiative has even introduced enterprise education into secondary schools.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `books_author`
--

CREATE TABLE `books_author` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `books_author`
--

INSERT INTO `books_author` (`id`, `book_id`, `author_id`) VALUES
(1, 91, 7),
(2, 91, 8),
(3, 92, 7),
(4, 92, 8),
(5, 93, 7),
(6, 93, 8),
(7, 94, 7),
(8, 94, 20),
(9, 95, 7),
(10, 95, 8),
(11, 96, 7),
(12, 96, 8),
(13, 96, 16),
(14, 97, 7),
(15, 97, 8),
(16, 98, 7),
(17, 98, 8),
(18, 99, 7),
(19, 99, 8),
(20, 100, 23),
(21, 103, 7),
(22, 103, 8),
(23, 103, 23),
(24, 103, 29),
(25, 104, 7),
(26, 105, 7),
(27, 105, 8),
(28, 106, 8),
(29, 106, 20),
(30, 107, 7),
(31, 107, 8),
(32, 108, 7),
(33, 108, 8),
(34, 109, 8),
(35, 109, 8),
(36, 110, 7),
(37, 110, 21),
(38, 111, 7),
(39, 111, 8),
(40, 113, 7),
(41, 113, 8),
(42, 114, 7),
(43, 114, 8),
(44, 115, 7),
(45, 115, 22),
(46, 116, 8),
(47, 116, 21),
(48, 117, 7),
(49, 117, 8),
(50, 117, 16),
(51, 118, 8),
(52, 118, 20),
(53, 119, 7),
(54, 119, 8),
(55, 120, 8),
(56, 120, 8),
(57, 121, 32),
(58, 121, 7),
(59, 122, 23),
(60, 123, 23),
(61, 124, 33),
(62, 125, 33),
(63, 126, 23),
(64, 127, 23),
(65, 128, 34),
(66, 129, 35),
(67, 130, 36),
(68, 131, 37),
(69, 132, 38),
(70, 133, 39),
(71, 134, 41),
(72, 135, 42),
(73, 136, 43),
(74, 137, 44),
(75, 138, 45),
(76, 139, 45),
(77, 140, 46),
(78, 141, 47),
(79, 142, 48);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `description`) VALUES
(1, 'Non Fiction', NULL),
(12, 'Bussiness', 'Bussiness books'),
(13, 'General', 'General Knowledge'),
(14, 'Fiction', 'Fiction'),
(15, 'Food', 'Receipes'),
(16, 'English', 'Grammer Practices Book'),
(17, 'Computer', 'Technology related books');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL COMMENT 'Publisher,General,Student,Institute,Teacher,Parent',
  `message` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `role`, `message`, `created_at`) VALUES
(12, 'Kartik Dhote', 'kartikdhote999@gmail.com', '9834663692', 'Student', 'I found issue to download a book', '2024-05-27 10:36:27'),
(13, 'Kartik Dhote', 'kartikdhote999@gmail.com', '9834663692', 'Student', 'tessting', '2024-06-11 15:21:53'),
(14, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', '1212', '2024-06-13 16:06:28'),
(15, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', 'ws', '2024-06-13 16:06:53'),
(16, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'General', 'nnm', '2024-06-13 16:24:23'),
(17, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', 'nk', '2024-06-14 14:02:15'),
(18, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', 'qww', '2024-06-14 14:04:04'),
(19, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', 'nv', '2024-06-14 14:11:18'),
(20, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', '123', '2024-06-14 15:20:01'),
(21, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', 'zx', '2024-06-14 15:27:08'),
(22, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', 'zx', '2024-06-14 15:27:14'),
(23, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', 'zx', '2024-06-14 15:27:19'),
(24, 'Kartik Dhote', 'kartikdhote999@gmail.com', '9834663692', 'Publisher', 'ad', '2024-06-14 15:42:28'),
(25, 'Kartik Dhote', 'kartikdhote999@gmail.com', '9834663692', 'Publisher', 'ds', '2024-06-14 15:44:48'),
(26, 'Kartik Dhote', 'dewanshi.dhote.mca@ghrietn.raisoni.net', '9834663692', 'Publisher', 'wew', '2024-06-14 15:54:26'),
(27, 'Kartik Dhote', 'kartikdhote999@gmail.com', '9834663692', 'Publisher', 'nmnk', '2024-06-18 14:38:21'),
(28, 'Priyanka', 'priyanka8.indiaactive@gmail.com', '9834663692', 'Publisher', 'hello', '2024-06-18 15:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(225) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name`) VALUES
(24, 'Penguin Random House'),
(80, 'HarperCollins e-book'),
(81, 'Sourcebooks, Inc.'),
(82, 'Soaring Incorporated'),
(83, 'Penguin Random House LLC'),
(84, 'Sphere'),
(85, 'VJJE Publishing Co.'),
(86, 'Pearson Education Ltd'),
(87, 'ebook'),
(88, 'Berkley Publications'),
(89, 'PLATINUM PRESS'),
(90, 'The Bhaktivedanta Book Trust'),
(91, 'SAGE Publications'),
(92, 'Gotham Books'),
(93, 'KoganPage');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_id` text NOT NULL,
  `otp` varchar(6) DEFAULT NULL,
  `otp_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `mobile`, `email`, `password`, `created_at`, `payment_id`, `otp`, `otp_expiry`) VALUES
(15, 'Pari', 'B', '9898989898', 'p@gmail.com', '$2y$10$.HgpsiRpBWB2MDhvqeyoYOdC02VpaBxnCQU0Qm6EdQpgv3giIbdai', '2024-06-12 12:22:55', 'pay_OLl0VzMrBTsKCY', NULL, NULL),
(19, 'Kartik', 'Dhote', '9834663692', 'kartikdhote999@gmail.com', '$2y$10$JjhkS7RwPNZ2JCOB2MIyu.Ws8qDQSDdOmKjkpRBmPjHs5keTpi1ca', '2024-06-14 16:14:50', 'pay_OMc1kNlPJ2Cuov', NULL, '2024-06-17 12:19:36'),
(21, 'Kartik', 'Dhote', '9834663692', 'kartikdhote199@gmail.com', '$2y$10$d5gSSUIylawFVwXyIo8Zc.a9F7mUk7J7hb3ZFegIGWtmuleG5R6/a', '2024-06-17 14:14:20', 'pay_ONlZpzxMBQdDuj', NULL, NULL),
(22, 'Dewanshi', 'Dhote', '9834663692', 'dewanshi2019@gmail.com', '$2y$10$OEA6.qrqC2HUNK05EEM34ur6CHxRozYQbHGPqV0xb42jDbFz9sDg2', '2024-06-18 14:32:18', 'pay_OOAPoo31AoDlcn', NULL, NULL),
(23, 'Priyanka', 'Bakre', '9834663692', 'priyanka8.indiaactive@gmail.com', '$2y$10$q4xgVw7TG.eZJYLfMShbxud5vW8ebI1TaOUNIjdhjEDq2gMUjiC3W', '2024-06-18 15:04:19', 'pay_OOAxWLAXYy7XDB', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `subcatname` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcatname`, `category_id`) VALUES
(18, 'Biographies and Memoirs', 1),
(19, 'Self-Help', 1),
(20, 'Philosophy', 1),
(21, 'Spirituality', 1),
(22, 'Bussiness', 12),
(23, 'Quotes', 13),
(24, 'Romance', 14),
(25, 'Science Fiction', 14),
(26, 'Mystery', 14),
(27, 'Fantasy', 14),
(28, 'Receipes', 15),
(29, 'Grammar', 16),
(30, 'Artificial Intelligence', 17),
(31, 'Computer Modelling', 17),
(32, 'Database Storage', 17),
(33, 'Data Structure', 17),
(34, 'Technology', 17);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(25) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_ban` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=unban,1=ban',
  `role` varchar(100) NOT NULL COMMENT 'admin, user',
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `password`, `is_ban`, `role`, `created_at`) VALUES
(1, 'Dewanshi', '2233445566', 'dewa@12gmail.com', '123', 0, 'admin', '2024-03-21'),
(2, 'Kartik', '7766554498', 'kartikdhote@gmail.com', '1234', 1, 'admin', '2024-03-22'),
(14, 'Heena', '888479835', 'heena@gmail.com', '1233', 1, 'user', '2024-03-27'),
(16, 'dummy', '67870', 'kartikdhote999@gmail.com', '7y97', 1, 'admin', '2024-04-04'),
(17, 'Sonali', '286277295476', 'sonali@123', '1233', 0, 'user', '2024-05-07'),
(18, 'Mukesh', '98989898', 'mukesh12@gmail.com', '1234', 0, 'admin', '2024-05-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books_author`
--
ALTER TABLE `books_author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `books_author`
--
ALTER TABLE `books_author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(225) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
