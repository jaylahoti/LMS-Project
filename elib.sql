-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2014 at 09:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_date` varchar(10) NOT NULL,
  `publisher_address` varchar(30) NOT NULL,
  `no_of_copy` bigint(10) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `auth0r_id` bigint(10) NOT NULL,
  `branch_id` bigint(10) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `publisher_name`, `publisher_date`, `publisher_address`, `no_of_copy`, `isbn`, `auth0r_id`, `branch_id`) VALUES
(1, 'Half Girlfriend', 'Chetan Bhagat', '11/10/2014', 'Ahmedabad', 16, 'xyz', 1, 1),
(5, 'Ramayana', 'B R Chopra', '11/05/1957', 'Mumbai', 16, 'xyz', 2, 1),
(13, 'chetan bhagat', 'iininii', '2014-12-17', 'sdkll', 1, 'ewve', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` bigint(10) NOT NULL AUTO_INCREMENT,
  `location` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `location`, `name`) VALUES
(1, 'New York', 'NY Library'),
(3, 'Pune', 'Daccan');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE IF NOT EXISTS `issue` (
  `issue_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `issue_date` date NOT NULL,
  `due_date` date NOT NULL,
  `return_date` date NOT NULL,
  `book_id` bigint(10) NOT NULL,
  `reader_id` int(20) NOT NULL,
  PRIMARY KEY (`issue_id`),
  KEY `book_id` (`book_id`),
  KEY `reader_id` (`reader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`issue_id`, `issue_date`, `due_date`, `return_date`, `book_id`, `reader_id`) VALUES
(88, '2014-11-10', '2014-11-10', '2014-12-10', 5, 39),
(89, '2014-12-10', '2014-12-20', '0000-00-00', 5, 40);

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE IF NOT EXISTS `reader` (
  `reader_id` int(20) NOT NULL AUTO_INCREMENT,
  `reader_name` varchar(20) NOT NULL,
  `reader_address` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `fine` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`reader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`reader_id`, `reader_name`, `reader_address`, `contact_no`, `fine`) VALUES
(21, 'Prithvi', 'NY                        ', 1234567, 0),
(37, 'Sohil', 'Rajkot                        ', 2147483647, 0),
(38, 'yuuy', 'ftfcf                        ', 878, 0),
(39, 'Sohil11', 'aaaa                        ', 78900987, 0),
(40, 'Shravan', 'India                        ', 2147483647, 0),
(41, 'PATEL', 'New york city                        ', 556545454, 0),
(42, 'DB', 'new Jersey', 56454545, 0),
(43, 'jay', 'Brooklyn                        ', 0, 0),
(44, 'jay', 'Brooklyn                        ', 0, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `issue_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `issue_ibfk_2` FOREIGN KEY (`reader_id`) REFERENCES `reader` (`reader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
