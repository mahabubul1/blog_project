-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 06:53 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_template`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(1) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `access_lavel` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `email_address`, `password`, `access_lavel`) VALUES
(1, 'himeduzzaman', 'himel45@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'mahabubul', 'mahabubulalam952@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'ripon ali', 'ripon@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `publication_status`) VALUES
(1, 'Html', 0),
(2, 'Css', 1),
(3, 'Java', 1),
(4, 'Php', 1),
(17, 'python', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(120) NOT NULL,
  `message_box` text NOT NULL,
  `activity_status` tinyint(4) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `first_name`, `last_name`, `email_address`, `message_box`, `activity_status`, `date`) VALUES
(7, 'Golam', 'rabbani', 'rabbani@gmail.com', 'good', 0, '2017-05-19 12:49:18'),
(6, 'Ripon', 'miah', 'ripon@gmail.com', 'this is good site', 0, '2017-05-19 12:47:47'),
(5, 'himelduzzaman', 'himel', 'mahabubublalam952@gmail.com', 'good', 1, '2017-05-19 12:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `logo_id` int(11) NOT NULL,
  `web_titile` varchar(150) NOT NULL,
  `web_slogan` varchar(256) NOT NULL,
  `logo_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`logo_id`, `web_titile`, `web_slogan`, `logo_image`, `publication_status`) VALUES
(3, 'Website Title', 'Our website description', '../assets/font_end_assets/images/livelogo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `media_id` int(11) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `googleplus` varchar(200) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`media_id`, `facebook`, `twitter`, `linkedin`, `googleplus`, `publication_status`) VALUES
(1, 'https://www.facebook.com', 'https://twitter.com', 'https://www.linkedin.com', 'https://plus.google.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `pages_id` int(11) NOT NULL,
  `pages_name` varchar(255) NOT NULL,
  `pages_discription` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`pages_id`, `pages_name`, `pages_discription`, `publication_status`) VALUES
(3, 'About ', 'About us..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.  About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.  About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.', 1),
(4, 'Technology', 'About us..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.', 1),
(5, '      Mobile', 'go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_discription` text NOT NULL,
  `post_image` text NOT NULL,
  `post_authors` varchar(50) NOT NULL,
  `post_tags` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `category_id`, `post_title`, `post_discription`, `post_image`, `post_authors`, `post_tags`, `publication_status`, `date`) VALUES
(18, 3, 'Our post title here - java', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis. ', '../assets/font_end_assets/images/java.png', 'mahabubul', 'java', 1, '2017-05-14 23:36:15'),
(19, 4, 'Our post title here -php', ' \r\n                          \r\n                          \r\n                          \r\n                          \r\n                          \r\n                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis.                                                                                                                                    ', '../assets/font_end_assets/images/php_banner.png', 'himel', 'php', 1, '2017-05-15 00:02:47'),
(20, 4, 'Our post title here -php', ' \r\n                          \r\n                          \r\n                          \r\n                          \r\n                          \r\n                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis.                                                                                                                                    ', '../assets/font_end_assets/images/php_banner_2.png', 'himel', 'php', 1, '2017-05-15 00:04:57'),
(25, 1, 'Our post title here - html', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis. ', '../assets/font_end_assets/images/html5.png', 'misba', 'html', 1, '2017-05-15 04:13:09'),
(22, 2, 'Our post title here -css', ' \r\n                          \r\n                          \r\n                          \r\n                          \r\n                          \r\n        \r\n                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis.                                    \r\n                          \r\n                          \r\n                          \r\n                          \r\n                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis.                                                                                                                                                                                                                                                  ', '../assets/font_end_assets/images/style_css45.png', 'alam', 'css', 1, '2017-05-15 00:14:14'),
(23, 17, 'Our post title here -python', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis. ', '../assets/font_end_assets/images/python.jpg', 'alam', 'python', 1, '2017-05-15 00:18:05'),
(26, 2, 'Our post title here -css', ' \r\n                          \r\n                          \r\n                          \r\n                          \r\n                          \r\n        \r\n                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis.                                    \r\n                          \r\n                          \r\n                          \r\n                          \r\n                         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vulputate efficitur justo, eget tincidunt lorem feugiat ac. Phasellus semper purus sit amet dictum sodales. Donec pharetra lacus vel lobortis gravida. Phasellus massa lectus, dapibus sit amet aliquam sed, efficitur non tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vehicula molestie ipsum et gravida. Duis in tristique ex, ac lobortis felis.                                                                                                                                                                                                                                                  ', '../assets/font_end_assets/images/style_css45.png', 'alam', 'css', 1, '2017-05-15 11:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_title`, `slider_image`, `publication_status`) VALUES
(1, 'This is slider threeTitle or Description', '../assets/font_end_assets/images/03.jpg', 1),
(2, 'This is slider Two Title or Description', '../assets/font_end_assets/images/02.jpg', 1),
(3, 'This is slider Two Title or Description', '../assets/font_end_assets/images/04.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`pages_id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
