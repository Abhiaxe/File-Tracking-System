-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2018 at 06:55 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(42) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ans_id`, `ques_id`, `emp_id`, `answer`, `date`) VALUES
(1, 1, 1, 'GGL-Green Gas Limited', '2018-07-25'),
(2, 2, 1, 'admin can close a file', '2018-07-25'),
(3, 3, 1, 'By working in a efficient way!', '2018-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(42) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `department` varchar(20) NOT NULL,
  `dor` varchar(20) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `name`, `fname`, `gender`, `email`, `password`, `mobile`, `dob`, `address`, `department`, `dor`) VALUES
(1, 'Abhishek Pandey', 'Anil Pandey', 'male', 'ap@gmail.com', '12365', '9621888798', '1997-02-10', 'gkp', 'Accounts', '2018-07-21'),
(2, 'Animesh Pandey', 'Anil Pandey', 'male', 'animesh@gmail.com', '123456', '9621888027', '2001-03-27', 'padri bazar gkp', 'HR', '2018-07-21'),
(3, 'Shobhit Pandey', '', 'male', 'shobhit@gmail.com', '2345', '7852365241', '1995-03-27', 'rustampur, gkp', 'Accounts', '2018-07-21'),
(4, 'vikas pandey', 'V.K Pandey', 'male', 'vk@gmail.com', '321', '852369562', '1997-08-08', 'Khaghanchi,Gkp', 'IT', '2018-07-21'),
(5, 'Shikha', 'V.K Pandey', 'female', 'shikha@gmail.com', '456123', '745896321', '1997-08-30', 'Mohdipur,Gkp', 'Marketing', '2018-07-21'),
(6, 'anshu pandey', 'anil pandey', 'male', 'app@gmail.com', '12345', '7652021809', '1997-01-10', 'gkp', 'Marketing', '2018-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_initiate`
--

CREATE TABLE IF NOT EXISTS `tbl_initiate` (
  `initiate_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_reference_no` varchar(30) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `route` varchar(15) NOT NULL,
  `file_status` varchar(15) NOT NULL,
  `send_to` int(30) NOT NULL,
  `send_from` varchar(20) NOT NULL,
  `remark` varchar(120) NOT NULL,
  `date_in` varchar(20) NOT NULL,
  PRIMARY KEY (`initiate_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_initiate`
--

INSERT INTO `tbl_initiate` (`initiate_id`, `file_reference_no`, `file_name`, `subject`, `route`, `file_status`, `send_to`, `send_from`, `remark`, `date_in`) VALUES
(1, '001', 'First', 'GGL', 'Normal', 'Pending_File', 2, '1', 'build it', '2018-07-24'),
(2, '002', 'second', 'marketing', 'Normal', 'Pending_File', 3, '1', 'complete it', '2018-07-24'),
(3, '003', 'third', 'sales', 'Green_Line', 'Pending_File', 1, '3', 'build it', '2018-07-24'),
(4, '004', 'fourth', 'HR', 'Normal', 'Pending_File', 2, '3', 'process it', '2018-07-24'),
(5, '005', 'fifth', 'ggl2', 'Normal', 'Pending_File', 1, '2', 'market it', '2018-07-24'),
(6, '006', 'six', 'Process', 'Normal', 'Pending_File', 3, '2', 'process file', '2018-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE IF NOT EXISTS `tbl_ques` (
  `ques_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`ques_id`, `emp_id`, `question`, `date`) VALUES
(1, 1, 'what is full form of GGL?', '2018-07-25'),
(2, 1, 'who can close a file?', '2018-07-25'),
(3, 1, 'How GGL can get more accomplishment?', '2018-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfer`
--

CREATE TABLE IF NOT EXISTS `tbl_transfer` (
  `transfer_id` int(11) NOT NULL AUTO_INCREMENT,
  `initiate_id` int(11) NOT NULL,
  `file_reference_no` varchar(30) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `route` varchar(30) NOT NULL,
  `file_status` varchar(30) NOT NULL,
  `send_to` int(11) NOT NULL,
  `send_from` int(11) NOT NULL,
  `remark` varchar(120) NOT NULL,
  `date_in` varchar(10) NOT NULL,
  PRIMARY KEY (`transfer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_transfer`
--

INSERT INTO `tbl_transfer` (`transfer_id`, `initiate_id`, `file_reference_no`, `file_name`, `subject`, `route`, `file_status`, `send_to`, `send_from`, `remark`, `date_in`) VALUES
(1, 1, '001', 'First', 'GGL', 'Normal', 'Pending_File', 3, 2, 'moved', '2018-07-24'),
(2, 2, '002', 'second', 'marketing', 'Normal', 'Completed_File', 1, 3, 'moved to u', '2018-07-25'),
(3, 3, '003', 'third', 'sales', 'Green_Line', 'Pending_File', 1, 3, 'build it', '2018-07-24'),
(5, 5, '005', 'fifth', 'ggl2', 'Normal', 'Pending_File', 1, 2, 'market it', '2018-07-24'),
(6, 6, '006', 'six', 'Process', 'Normal', 'Pending_File', 3, 2, 'process file', '2018-07-24');
