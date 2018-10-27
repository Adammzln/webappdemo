-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2015 at 05:12 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emnc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ar_details`
--

CREATE TABLE IF NOT EXISTS `ar_details` (
  `ar_id` int(10) NOT NULL AUTO_INCREMENT,
  `ar_image` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`ar_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ar_details`
--

INSERT INTO `ar_details` (`ar_id`, `ar_image`, `username`) VALUES
(3, 'images/ar iium 2014 small.png', 'uthm');

-- --------------------------------------------------------

--
-- Table structure for table `asa_details`
--

CREATE TABLE IF NOT EXISTS `asa_details` (
  `asa_id` int(10) NOT NULL AUTO_INCREMENT,
  `asa_image` varchar(100) NOT NULL,
  PRIMARY KEY (`asa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `asa_details`
--

INSERT INTO `asa_details` (`asa_id`, `asa_image`) VALUES
(11, 'images/unnamed.png');

-- --------------------------------------------------------

--
-- Table structure for table `atsa_details`
--

CREATE TABLE IF NOT EXISTS `atsa_details` (
  `username` varchar(20) NOT NULL,
  `fa_id` int(10) NOT NULL AUTO_INCREMENT,
  `fa_fullname` varchar(50) NOT NULL,
  `fa_position` varchar(20) NOT NULL,
  `fa_title` varchar(20) NOT NULL,
  `fa_gender` varchar(6) NOT NULL,
  `fa_contact_no` varchar(20) NOT NULL,
  `fa_email` varchar(40) NOT NULL,
  PRIMARY KEY (`fa_id`),
  UNIQUE KEY `fa_id` (`fa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `atsa_details`
--

INSERT INTO `atsa_details` (`username`, `fa_id`, `fa_fullname`, `fa_position`, `fa_title`, `fa_gender`, `fa_contact_no`, `fa_email`) VALUES
('uthm', 1, 'Wan Fauziah Binti Wan Yusoff', 'Primary Advisor', 'Dr', 'Male', '017-33115678', 'fauziah@uthm.edu.my'),
('uthm', 2, 'Ismail', 'Co-Advisor', 'Mr', 'Female', 'dd', 'ismail@uthm.edu.my');

-- --------------------------------------------------------

--
-- Table structure for table `atss_details`
--

CREATE TABLE IF NOT EXISTS `atss_details` (
  `username` varchar(20) NOT NULL,
  `student_id` int(10) NOT NULL AUTO_INCREMENT,
  `s_fullname` varchar(50) NOT NULL,
  `s_academic_year` varchar(10) NOT NULL,
  `s_degree` varchar(10) NOT NULL,
  `s_study_field` varchar(40) NOT NULL,
  `s_gender` varchar(6) NOT NULL,
  `s_graduation_year` varchar(5) NOT NULL,
  `s_email` varchar(40) NOT NULL,
  `s_hour` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_id` (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `atss_details`
--

INSERT INTO `atss_details` (`username`, `student_id`, `s_fullname`, `s_academic_year`, `s_degree`, `s_study_field`, `s_gender`, `s_graduation_year`, `s_email`, `s_hour`) VALUES
('uthm', 9, 'Seah Choon Sen', '3rd year', 'Bachelor''s', 'Computer/Information Sciences', 'Male', '2016', 'sean@gmail.com', '80'),
('uthm', 10, 'Jeffrey Mark', '2nd year', 'Bachelor''s', 'Electrical Engineering', 'Male', '2017', 'jeffrey@gmail.com', '60'),
('uthm', 11, 'Ahmad Najmi Bin Amerhaider Nuar', '3rd year', 'Bachelor''s', 'Computer/Information Sciences', 'Male', '2016', 'najmi@gmail.com', '80'),
('uthm', 12, 'Uzair Halim', '3rd year', 'Bachelor''s', 'Entrepreneurship', 'Male', '2016', 'spec@gmail.com', '60'),
('uthm', 13, 'Lee Sarah', '3rd year', 'Bachelor''s', 'Business Administration', 'Female', '2017', 'sarah@gmail.com', '60');

-- --------------------------------------------------------

--
-- Table structure for table `attendees_details`
--

CREATE TABLE IF NOT EXISTS `attendees_details` (
  `username` varchar(10) NOT NULL,
  `name` char(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tshirt_size` varchar(5) NOT NULL,
  `attendees_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`attendees_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `attendees_details`
--

INSERT INTO `attendees_details` (`username`, `name`, `position`, `contact_no`, `email`, `tshirt_size`, `attendees_id`) VALUES
('uthm', 'Seah Choon Sen', 'Supporter', '016-4145774', 'xun_0927@hotmail.com', '', 41),
('uthm', 'Seah Choon Sen', 'Presenter', '0124145776', 'sean0927@hotmail.com', 's', 40),
('uthm', 'Ahmad Najmi', 'Leader', '0164445566', 'ahmad@gmail.com', 'L', 39),
('uthm', 'Azam', 'Supporter', '015-3578369', 'zamzam@hotmail.com', 's', 36),
('uthm', 'Aiman', 'Supporter', '013-4674386', 'mr.right@hotmail.com', 'S', 35),
('uthm', 'Jeffrey Mark', 'Supporter', '014-3366850', 'martell@hotmail.com', 'XL', 34);

-- --------------------------------------------------------

--
-- Table structure for table `bst_details`
--

CREATE TABLE IF NOT EXISTS `bst_details` (
  `file` varchar(100) NOT NULL,
  `bst_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`bst_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `bst_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `ec`
--

CREATE TABLE IF NOT EXISTS `ec` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ec`
--

INSERT INTO `ec` (`id`, `username`, `password`, `position`) VALUES
(1, 'sean', '123456', 'event committee');

-- --------------------------------------------------------

--
-- Table structure for table `judges_details`
--

CREATE TABLE IF NOT EXISTS `judges_details` (
  `judges_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `company` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `job_title` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`judges_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `judges_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `other_details`
--

CREATE TABLE IF NOT EXISTS `other_details` (
  `other_id` int(10) NOT NULL AUTO_INCREMENT,
  `category` char(15) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`other_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `other_details`
--

INSERT INTO `other_details` (`other_id`, `category`, `title`, `description`) VALUES
(6, 'event', '  Cocktail & Networking Reception', 'This session is exclusive for Enactus teams to mingle and network with EMF Board of Trustees, corporate people and judges of EMNC, kindly see the attached updated schedule of events. Currently is limited to 5 pax per team however if there are additional space for more students, we will inform you. Kindly provide me their names and phone number. They must be registered students.\r\n(Deadline July 30 2015)'),
(7, 'event', 'Talent Matching Session', 'This exclusive event is open to all final year, graduating, internship looking students and alumni who wish to have a face-to-face opportunity with possible companies looking to hire Enactus students as interns or as full time employee. List of companies tentative to be involved are CIMB, KPMG, Westports Malaysia, Media Prima Berhad, Pfizer Malaysia, Fuji Xerox, Graduan, TalentCorp, Teach For Malaysia, Halliburton, Nestlé, Tesco, DRB Hicom, Iskandar Malaysi, Hershey’s Malaysia, Maxis, Astro, Maybank, Axiata Group, GE Malaysia, Petronas, Shell Malaysia and IBM Malaysia.\r\n(Deadline July 25 2015)');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `payment_id` int(10) NOT NULL AUTO_INCREMENT,
  `payment_image` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `payment_image`, `username`) VALUES
(3, 'images/Capture.PNG.png', 'uthm');

-- --------------------------------------------------------

--
-- Table structure for table `pvf_details`
--

CREATE TABLE IF NOT EXISTS `pvf_details` (
  `pvf_id` int(10) NOT NULL AUTO_INCREMENT,
  `pvf_file` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`pvf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pvf_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `sl_details`
--

CREATE TABLE IF NOT EXISTS `sl_details` (
  `sl_id` int(10) NOT NULL AUTO_INCREMENT,
  `university` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `c_president` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `directory` longtext NOT NULL,
  PRIMARY KEY (`sl_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sl_details`
--

INSERT INTO `sl_details` (`sl_id`, `university`, `username`, `password`, `email`, `c_president`, `contact`, `date`, `directory`) VALUES
(9, 'University of Tun Hussein Onn Malaysia', 'uthm', 'e10adc3949ba59abbe56e057f20f883e', 'enactus.uthm@gmail.com', 'Seah Choon Sen', '0125517279', '2015-05-27', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tds_details`
--

CREATE TABLE IF NOT EXISTS `tds_details` (
  `username` varchar(20) NOT NULL,
  `tds_id` int(10) NOT NULL AUTO_INCREMENT,
  `name_sub` varchar(50) NOT NULL,
  `position` varchar(20) NOT NULL,
  `credit_course` varchar(5) NOT NULL,
  `partner` varchar(50) NOT NULL,
  `int_support` varchar(20) NOT NULL,
  `bab` varchar(20) NOT NULL,
  `non_bab` varchar(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `gran` varchar(20) NOT NULL,
  `donation` varchar(20) NOT NULL,
  `facebook` varchar(80) NOT NULL,
  `twitter` varchar(80) NOT NULL,
  `youtube` varchar(80) NOT NULL,
  `linked` varchar(80) NOT NULL,
  `website` varchar(80) NOT NULL,
  `other` varchar(80) NOT NULL,
  `hours_involvement` varchar(20) NOT NULL,
  `media_impression` varchar(20) NOT NULL,
  PRIMARY KEY (`tds_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tds_details`
--

INSERT INTO `tds_details` (`username`, `tds_id`, `name_sub`, `position`, `credit_course`, `partner`, `int_support`, `bab`, `non_bab`, `activity`, `gran`, `donation`, `facebook`, `twitter`, `youtube`, `linked`, `website`, `other`, `hours_involvement`, `media_impression`) VALUES
('uthm', 1, 'jeffrey', 'advisor', 'yes', '4', '2000', '0', '0', '4000', '0', '200', 'https://www.facebook.com/', '-', '-', '-', '-', '-', '50', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
