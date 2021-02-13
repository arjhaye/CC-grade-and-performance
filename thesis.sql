-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 09:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `cId` int(11) NOT NULL,
  `cAccIdNumber` int(20) DEFAULT NULL,
  `cFirstName` varchar(20) DEFAULT NULL,
  `cLastName` varchar(20) DEFAULT NULL,
  `cType` varchar(15) DEFAULT NULL,
  `cCourse` varchar(255) NOT NULL,
  `cDepartment` varchar(10) DEFAULT NULL,
  `cYearLevel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`cId`, `cAccIdNumber`, `cFirstName`, `cLastName`, `cType`, `cCourse`, `cDepartment`, `cYearLevel`) VALUES
(1, 15310001, 'Ian', 'Gaylon', 'user', 'BSIT', 'CCS', '4th Year'),
(3, 15310002, 'John Arthur', 'Badiango', 'user', 'BSIT', 'CCS', '4th Year'),
(4, 15310003, 'Vincent', 'Parrenas', 'user', 'BSIT', 'CCS', '4th Year'),
(5, 15310004, 'Joshua', 'Tongol', 'user', 'BSIT', 'CCS', '4th Year'),
(6, 15310005, 'Bigbert', 'Abdon', 'user', 'BSIT', 'CCS', '4th Year'),
(7, 15310006, 'Francis Lucky Joy', 'Esmero', 'user', 'BSIT', 'CCS', '4th Year'),
(8, 15310007, 'Gemma', 'Tapado', 'admin', '', 'CCS', NULL),
(9, 15310008, 'Grace', 'Yanson', 'admin', '', 'CCS', NULL),
(10, 15310009, 'Christopher', 'Ramos', 'admin', '', 'CCS', NULL),
(11, 15310010, 'John Errol', 'Caras', 'admin', '', 'CCS', NULL),
(12, 15310011, 'Sanny', 'De Lara', 'admin', '', 'CCS', NULL),
(13, 15310012, 'Marvin', 'Guela', 'admin', '', 'CCS', NULL),
(14, 15310013, 'Noel', 'Yap', 'admin', '', 'CCS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `cId` int(11) NOT NULL,
  `cProfessor` varchar(20) DEFAULT NULL,
  `cRoom` varchar(10) DEFAULT NULL,
  `cTime` varchar(20) DEFAULT NULL,
  `cGradeIdNumber` int(11) DEFAULT NULL,
  `cSubjectCode` varchar(10) DEFAULT NULL,
  `cGradeType` varchar(20) DEFAULT NULL,
  `cActivityType` varchar(20) DEFAULT NULL,
  `cGrade` int(5) DEFAULT NULL,
  `cTotalGrade` int(5) DEFAULT NULL,
  `cSchoolYear` varchar(20) DEFAULT NULL,
  `cSemester` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `cId` int(11) NOT NULL,
  `cUsername` varchar(255) DEFAULT NULL,
  `cPassword` varchar(255) DEFAULT NULL,
  `cType` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`cId`, `cUsername`, `cPassword`, `cType`) VALUES
(1, 'Gaylon', '15310001', 'user'),
(3, 'John Arthur', '15310002', 'user'),
(4, 'Vincent', '15310003', 'user'),
(5, 'Joshua', '15310004', 'user'),
(6, 'Bigbert', '15310005', 'user'),
(7, 'Francis Lucky Joy', '15310006', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prof_subject`
--

CREATE TABLE `tbl_prof_subject` (
  `cId` int(11) NOT NULL,
  `cSubjectCode` varchar(255) NOT NULL,
  `cSubjectDescription` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `cProfessor` varchar(255) NOT NULL,
  `cDay` varchar(255) NOT NULL,
  `cSchoolYear` varchar(255) NOT NULL,
  `cRoom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prof_subject`
--

INSERT INTO `tbl_prof_subject` (`cId`, `cSubjectCode`, `cSubjectDescription`, `cTime`, `cProfessor`, `cDay`, `cSchoolYear`, `cRoom`) VALUES
(1, 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'Tapado', 'MWF', 'First Semester', 'P209'),
(2, 'BSIT10', 'Logic Design and Digital Computer Circuits', '1:00pm - 2:30pm', 'Ramos', 'MTH', 'First Semester', 'P206'),
(3, 'BSIT13', 'Computer Organization with CISCO 1', '6:30pm - 8:00pm', 'De Lara', 'MWF', 'First Semester', 'P203'),
(4, 'BSIT03', 'Computer Programming 2 (Core JAVA)', '5:00pm - 6:30pm', 'Guela', 'MTH', 'First Semester', 'P210'),
(5, 'BSIT12', 'Operating Systems and Utilities', '5:00pm - 6:30pm', 'Caras', 'MWF', 'First Semester', 'P204'),
(6, 'BSIT20', 'File Processing and Database Systems', '9:00am - 10:30am', 'Yap', 'MTH', 'First Semester', 'P205'),
(7, 'BSIT18', 'Software/Productivity Tools', '10:30am-12:00pm', 'Yanson', 'MTH', 'First Semester', 'P210'),
(8, 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'Ramos', 'MWF', 'First Semester', 'P209'),
(17, 'BSIT23', 'Web Design and Developments', '10:30am - 12:00pm', 'gaylon', 'MWF', 'First Semester', 'P208'),
(18, 'BSIT20', 'File Processing and Database Systems', '9:00am - 10:30am', 'gaylon', 'MTH', 'First Semester', 'P205'),
(19, 'BSIT03', 'Computer Programming 2 (Core JAVA)', '5:00pm - 6:30pm', 'gaylon', 'MTH', 'First Semester', 'P210'),
(20, 'BSIT18', 'Software/Productivity Tools', '10:30am-12:00pm', 'gaylon', 'MTH', 'First Semester', 'P210');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `cId` int(11) NOT NULL,
  `cRoomName` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`cId`, `cRoomName`) VALUES
(1, 'P201'),
(2, 'P202'),
(3, 'P203'),
(4, 'P204'),
(5, 'P205'),
(6, 'P206'),
(7, 'P207'),
(8, 'P208'),
(9, 'P209'),
(10, 'P210');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_subject`
--

CREATE TABLE `tbl_student_subject` (
  `cId` int(11) NOT NULL,
  `cAccIdNumber` varchar(255) NOT NULL,
  `cSubjectCode` varchar(255) NOT NULL,
  `cSubjectDescription` varchar(255) NOT NULL,
  `cTime` varchar(255) NOT NULL,
  `cProf` varchar(255) NOT NULL,
  `cRoom` varchar(255) NOT NULL,
  `cSchoolYear` varchar(255) NOT NULL,
  `cDay` varchar(255) NOT NULL,
  `cStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_subject`
--

INSERT INTO `tbl_student_subject` (`cId`, `cAccIdNumber`, `cSubjectCode`, `cSubjectDescription`, `cTime`, `cProf`, `cRoom`, `cSchoolYear`, `cDay`, `cStatus`) VALUES
(1, '15310001', 'BSIT08', 'asd', '90909', 'Gaylon', 'P201', 'haha', 'haha', 'Inactive'),
(2, '15310001', 'BSIT10', 'asd', 'asd', 'asdas', 'asd', 'asd', 'asd', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `cId` int(11) NOT NULL,
  `cSubjectCode` varchar(10) DEFAULT NULL,
  `cSubjectDescription` varchar(255) DEFAULT NULL,
  `cTime` varchar(255) DEFAULT NULL,
  `cRoom` varchar(255) NOT NULL,
  `cSchoolYear` varchar(255) DEFAULT NULL,
  `cDay` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`cId`, `cSubjectCode`, `cSubjectDescription`, `cTime`, `cRoom`, `cSchoolYear`, `cDay`) VALUES
(1, 'BSIT01', 'Computer Concepts and Fundamentals ', '9:00am - 10:30am', 'P201', 'First Semester', 'MWF'),
(2, 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'P209', 'First Semester', 'MWF'),
(3, 'MTH111', 'Modern College Algebra', '9:00am - 10:30am', 'P202', 'First Semester', 'MTH'),
(4, 'BSIT18', 'Software/Productivity Tools', '10:30am-12:00pm', 'P210', 'First Semester', 'MTH'),
(5, 'BSIT10', 'Logic Design and Digital Computer Circuits', '1:00pm - 2:30pm', 'P206', 'First Semester', 'MTH'),
(6, 'BSIT11', 'Computer Architecture w/ Assembly Language', '2:30pm - 4:00pm', 'P203', 'First Semester', 'MTH'),
(7, 'BSIT03', 'Computer Programming 2 (Core JAVA)', '5:00pm - 6:30pm', 'P210', 'First Semester', 'MTH'),
(8, 'BSIT19', 'File Organization', '1:00am - 2:30pm', 'P202', 'First Semester', 'MWF'),
(9, 'BSIT22', 'Introduction to Multimedia Systems', '2:30pm - 4:00pm', 'P207', 'First Semester', 'MWF'),
(10, 'BSIT12', 'Operating Systems and Utilities', '5:00pm - 6:30pm', 'P204', 'First Semester', 'MWF'),
(11, 'BSIT13', 'Computer Organization with CISCO 1', '6:30pm - 8:00pm', 'P203', 'First Semester', 'MWF'),
(12, 'BSIT04', 'Data Structures and Algorithms', '6:30pm - 8:00pm', 'P204', 'First Semester', 'MTH'),
(13, 'BSIT20', 'File Processing and Database Systems', '9:00am - 10:30am', 'P205', 'First Semester', 'MTH'),
(14, 'BSIT23', 'Web Design and Developments', '10:30am - 12:00pm', 'P208', 'First Semester', 'MWF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `tbl_prof_subject`
--
ALTER TABLE `tbl_prof_subject`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `tbl_student_subject`
--
ALTER TABLE `tbl_student_subject`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`cId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_prof_subject`
--
ALTER TABLE `tbl_prof_subject`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_student_subject`
--
ALTER TABLE `tbl_student_subject`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
