/*
 Navicat MySQL Data Transfer

 Source Server         : databes
 Source Server Type    : MySQL
 Source Server Version : 100140
 Source Host           : localhost:3306
 Source Schema         : thesis

 Target Server Type    : MySQL
 Target Server Version : 100140
 File Encoding         : 65001

 Date: 03/06/2019 01:38:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_account
-- ----------------------------
DROP TABLE IF EXISTS `tbl_account`;
CREATE TABLE `tbl_account`  (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cAccIdNumber` int(20) NULL DEFAULT NULL,
  `cFirstName` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cLastName` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cType` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cCourse` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cDepartment` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cYearLevel` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cEmail` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cAddress` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cAbout` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cImage` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`cId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_account
-- ----------------------------
INSERT INTO `tbl_account` VALUES (1, 15310001, 'Ian', 'Gaylon', 'user', 'BSIT', 'CCS', '4th Year', 'ian.gaylon@gmail.com', 'Olongapo City', 'May tanong ako. Ano ang pinagkaiba ng utot sa tula.\r\nWala akong kwentang tao.', '../img/4860-download.jpg');
INSERT INTO `tbl_account` VALUES (3, 15310002, 'John Arthur', 'Badiango', 'user', 'BSIT', 'CCS', '4th Year', 'arthur.badiango@gmail.com', 'Olongapo City', 'Willing akong ibigay lahat basta sa taong mahal ko <3', '');
INSERT INTO `tbl_account` VALUES (4, 15310003, 'Vincent', 'Parrenas', 'user', 'BSIT', 'CCS', '4th Year', 'vincent.parrenas@gmail.com', 'Olongapo City', 'Ako ay may LOBO, lumipad sa LANGIT, hindi ko na nakita, PUMUTOK na pala', '');
INSERT INTO `tbl_account` VALUES (5, 15310004, 'Joshua', 'Tongol', 'user', 'BSIT', 'CCS', '4th Year', 'joshua.tongol@gmail.com', 'Olongapo City', 'Wag mo ko SUBUKAN, hindi ako nagsasayang ng AMBA!!', '');
INSERT INTO `tbl_account` VALUES (6, 15310005, 'Bigbert', 'Abdon', 'user', 'BSIT', 'CCS', '4th Year', '', '', '', '');
INSERT INTO `tbl_account` VALUES (7, 15310006, 'Francis Lucky Joy', 'Esmero', 'user', 'BSIT', 'CCS', '4th Year', '', '', '', '');
INSERT INTO `tbl_account` VALUES (8, 15310007, 'Gemma', 'Tapado', 'admin', '', 'CCS', NULL, '', '', '', '');
INSERT INTO `tbl_account` VALUES (9, 15310008, 'Grace', 'Yanson', 'admin', '', 'CCS', NULL, '', '', '', '');
INSERT INTO `tbl_account` VALUES (10, 15310009, 'Christopher', 'Ramos', 'admin', '', 'CCS', NULL, '', '', '', '');
INSERT INTO `tbl_account` VALUES (11, 15310010, 'John Errol', 'Caras', 'admin', '', 'CCS', NULL, '', '', '', '');
INSERT INTO `tbl_account` VALUES (12, 15310011, 'Sanny', 'De Lara', 'admin', '', 'CCS', NULL, '', '', '', '');
INSERT INTO `tbl_account` VALUES (13, 15310012, 'Marvin', 'Guela', 'admin', '', 'CCS', NULL, '', '', '', '');
INSERT INTO `tbl_account` VALUES (14, 15310013, 'Noel', 'Yap', 'admin', '', 'CCS', NULL, '', '', '', '');

-- ----------------------------
-- Table structure for tbl_grade
-- ----------------------------
DROP TABLE IF EXISTS `tbl_grade`;
CREATE TABLE `tbl_grade`  (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cSubjectCode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cStudent` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cTime` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cType` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cDate` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cSchoolYear` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cSemester` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cGrade` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cProfessor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 81 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_grade
-- ----------------------------
INSERT INTO `tbl_grade` VALUES (65, 'BSIT20', '15310001', '17:07:11', 'Exam', '2019-06-02', '2019-2020', 'Prelim', '85', 'gaylon');
INSERT INTO `tbl_grade` VALUES (66, 'BSIT20', '15310002', '17:07:11', 'Exam', '2019-06-02', '2019-2020', 'Prelim', '85', 'gaylon');
INSERT INTO `tbl_grade` VALUES (67, 'BSIT20', '15310001', '17:39:31', 'Exam', '2019-06-02', '2019-2020', 'Prelim', '85', 'gaylon');
INSERT INTO `tbl_grade` VALUES (68, 'BSIT20', '15310002', '17:39:31', 'Exam', '2019-06-02', '2019-2020', 'Prelim', '75', 'gaylon');
INSERT INTO `tbl_grade` VALUES (69, 'BSIT20', '15310001', '17:40:30', 'Exam', '2019-06-02', '2019-2020', 'Midterm', '75', 'gaylon');
INSERT INTO `tbl_grade` VALUES (70, 'BSIT20', '15310002', '17:40:30', 'Exam', '2019-06-02', '2019-2020', 'Midterm', '75', 'gaylon');
INSERT INTO `tbl_grade` VALUES (71, 'BSIT20', '15310001', '17:40:41', 'Exam', '2019-06-02', '2019-2020', 'Finals', '24', 'gaylon');
INSERT INTO `tbl_grade` VALUES (72, 'BSIT20', '15310002', '17:40:41', 'Exam', '2019-06-02', '2019-2020', 'Finals', '62', 'gaylon');
INSERT INTO `tbl_grade` VALUES (73, 'BSIT20', '15310001', '17:40:50', 'Quiz', '2019-06-02', '2019-2020', 'Prelim', '10', 'gaylon');
INSERT INTO `tbl_grade` VALUES (74, 'BSIT20', '15310002', '17:40:50', 'Quiz', '2019-06-02', '2019-2020', 'Prelim', '75', 'gaylon');
INSERT INTO `tbl_grade` VALUES (75, 'BSIT20', '15310001', '17:41:03', 'Assignment', '2019-06-02', '2019-2020', 'Prelim', '85', 'gaylon');
INSERT INTO `tbl_grade` VALUES (76, 'BSIT20', '15310002', '17:41:03', 'Assignment', '2019-06-02', '2019-2020', 'Prelim', '24', 'gaylon');
INSERT INTO `tbl_grade` VALUES (77, 'BSIT20', '15310001', '19:07:40', 'Quiz', '2019-06-02', '2019-2020', 'Prelim', '10', 'gaylon');
INSERT INTO `tbl_grade` VALUES (78, 'BSIT20', '15310002', '19:07:40', 'Quiz', '2019-06-02', '2019-2020', 'Prelim', '186', 'gaylon');
INSERT INTO `tbl_grade` VALUES (79, 'BSIT20', '15310001', '19:07:50', 'Assignment', '2019-06-02', '2019-2020', 'Prelim', '126', 'gaylon');
INSERT INTO `tbl_grade` VALUES (80, 'BSIT20', '15310002', '19:07:50', 'Assignment', '2019-06-02', '2019-2020', 'Prelim', '126', 'gaylon');

-- ----------------------------
-- Table structure for tbl_login
-- ----------------------------
DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE `tbl_login`  (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cUsername` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cPassword` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cType` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_login
-- ----------------------------
INSERT INTO `tbl_login` VALUES (1, 'Gaylon_Ian', '15310001', 'user');
INSERT INTO `tbl_login` VALUES (3, 'Badiango_John Arthur', '15310002', 'user');
INSERT INTO `tbl_login` VALUES (4, 'Parrenas_Vincent', '15310003', 'user');
INSERT INTO `tbl_login` VALUES (5, 'Tongol_Joshua', '15310004', 'user');
INSERT INTO `tbl_login` VALUES (6, 'Abdon_Bigbert', '15310005', 'user');
INSERT INTO `tbl_login` VALUES (7, 'Esmero_Francis Lucky Joy', '15310006', 'user');
INSERT INTO `tbl_login` VALUES (8, 'Tapado_Gemma', '15310007', 'ADMIN');
INSERT INTO `tbl_login` VALUES (9, 'Yanson_Grace', '15310008', 'ADMIN');
INSERT INTO `tbl_login` VALUES (10, 'Ramos_Christopher', '15310009', 'ADMIN');
INSERT INTO `tbl_login` VALUES (11, 'Caras_John Errol', '15310010', 'ADMIN');
INSERT INTO `tbl_login` VALUES (12, 'De Lara_Sanny', '15310011', 'ADMIN');
INSERT INTO `tbl_login` VALUES (13, 'Guela_Marvin', '15310012', 'ADMIN');
INSERT INTO `tbl_login` VALUES (14, 'Yap_Noel', '15310013', 'ADMIN');

-- ----------------------------
-- Table structure for tbl_prof_subject
-- ----------------------------
DROP TABLE IF EXISTS `tbl_prof_subject`;
CREATE TABLE `tbl_prof_subject`  (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cSubjectCode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cSubjectDescription` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cTime` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cProfessor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cDay` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cSchoolYear` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cRoom` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`cId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 27 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_prof_subject
-- ----------------------------
INSERT INTO `tbl_prof_subject` VALUES (1, 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'Tapado_Gemma', 'MWF', 'First Semester', 'P209');
INSERT INTO `tbl_prof_subject` VALUES (2, 'BSIT10', 'Logic Design and Digital Computer Circuits', '1:00pm - 2:30pm', 'Ramos_Christopher', 'MTH', 'First Semester', 'P206');
INSERT INTO `tbl_prof_subject` VALUES (3, 'BSIT13', 'Computer Organization with CISCO 1', '6:30pm - 8:00pm', 'De Lara_Sanny', 'MWF', 'First Semester', 'P203');
INSERT INTO `tbl_prof_subject` VALUES (4, 'BSIT03', 'Computer Programming 2 (Core JAVA)', '5:00pm - 6:30pm', 'Guela_Marvin', 'MTH', 'First Semester', 'P210');
INSERT INTO `tbl_prof_subject` VALUES (5, 'BSIT12', 'Operating Systems and Utilities', '5:00pm - 6:30pm', 'Caras_John Errol', 'MWF', 'First Semester', 'P204');
INSERT INTO `tbl_prof_subject` VALUES (6, 'BSIT20', 'File Processing and Database Systems', '9:00am - 10:30am', 'Yap_Noel', 'MTH', 'First Semester', 'P205');
INSERT INTO `tbl_prof_subject` VALUES (7, 'BSIT18', 'Software/Productivity Tools', '10:30am-12:00pm', 'Yanson_Grace', 'MTH', 'First Semester', 'P210');
INSERT INTO `tbl_prof_subject` VALUES (8, 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'Ramos_Christopher', 'MWF', 'First Semester', 'P209');
INSERT INTO `tbl_prof_subject` VALUES (24, 'BSIT18', 'Software/Productivity Tools', '10:30am-12:00pm', 'tapado_gemma', 'MTH', 'First Semester', 'P210');
INSERT INTO `tbl_prof_subject` VALUES (25, 'MTH111', 'Modern College Algebra', '9:00am - 10:30am', 'tapado_gemma', 'MTH', 'First Semester', 'P202');

-- ----------------------------
-- Table structure for tbl_room
-- ----------------------------
DROP TABLE IF EXISTS `tbl_room`;
CREATE TABLE `tbl_room`  (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cRoomName` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_room
-- ----------------------------
INSERT INTO `tbl_room` VALUES (1, 'P201');
INSERT INTO `tbl_room` VALUES (2, 'P202');
INSERT INTO `tbl_room` VALUES (3, 'P203');
INSERT INTO `tbl_room` VALUES (4, 'P204');
INSERT INTO `tbl_room` VALUES (5, 'P205');
INSERT INTO `tbl_room` VALUES (6, 'P206');
INSERT INTO `tbl_room` VALUES (7, 'P207');
INSERT INTO `tbl_room` VALUES (8, 'P208');
INSERT INTO `tbl_room` VALUES (9, 'P209');
INSERT INTO `tbl_room` VALUES (10, 'P210');

-- ----------------------------
-- Table structure for tbl_student_subject
-- ----------------------------
DROP TABLE IF EXISTS `tbl_student_subject`;
CREATE TABLE `tbl_student_subject`  (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cAccIdNumber` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cSubjectCode` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cSubjectDescription` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cTime` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cProf` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cRoom` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cSchoolYear` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cDay` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cStatus` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`cId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_student_subject
-- ----------------------------
INSERT INTO `tbl_student_subject` VALUES (1, '15310001', 'BSIT02', 'Computer Concepts and Fundamentals', '9:00am - 10:30am', 'tapado_gemma', 'P201', 'First Semester', 'MWF', 'Active');
INSERT INTO `tbl_student_subject` VALUES (3, '15310003', 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'Tapado_Gemma', 'MWF', 'First Semester', 'P209', 'Active');
INSERT INTO `tbl_student_subject` VALUES (4, '15310004', 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'Tapado_Gemma', 'MWF', 'First Semester', 'P209', 'Active');

-- ----------------------------
-- Table structure for tbl_subject
-- ----------------------------
DROP TABLE IF EXISTS `tbl_subject`;
CREATE TABLE `tbl_subject`  (
  `cId` int(11) NOT NULL AUTO_INCREMENT,
  `cSubjectCode` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cSubjectDescription` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cTime` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cRoom` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cSchoolYear` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `cDay` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`cId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_subject
-- ----------------------------
INSERT INTO `tbl_subject` VALUES (1, 'BSIT01', 'Computer Concepts and Fundamentals', '9:00am - 10:30am', 'P201', 'First Semester', 'MWF');
INSERT INTO `tbl_subject` VALUES (2, 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'P209', 'First Semester', 'MWF');
INSERT INTO `tbl_subject` VALUES (3, 'MTH111', 'Modern College Algebra', '9:00am - 10:30am', 'P202', 'First Semester', 'MTH');
INSERT INTO `tbl_subject` VALUES (4, 'BSIT18', 'Software/Productivity Tools', '10:30am-12:00pm', 'P210', 'First Semester', 'MTH');
INSERT INTO `tbl_subject` VALUES (5, 'BSIT10', 'Logic Design and Digital Computer Circuits', '1:00pm - 2:30pm', 'P206', 'First Semester', 'MTH');
INSERT INTO `tbl_subject` VALUES (6, 'BSIT11', 'Computer Architecture w/ Assembly Language', '2:30pm - 4:00pm', 'P203', 'First Semester', 'MTH');
INSERT INTO `tbl_subject` VALUES (7, 'BSIT03', 'Computer Programming 2 (Core JAVA)', '5:00pm - 6:30pm', 'P210', 'First Semester', 'MTH');
INSERT INTO `tbl_subject` VALUES (8, 'BSIT19', 'File Organization', '1:00am - 2:30pm', 'P202', 'First Semester', 'MWF');
INSERT INTO `tbl_subject` VALUES (9, 'BSIT22', 'Introduction to Multimedia Systems', '2:30pm - 4:00pm', 'P207', 'First Semester', 'MWF');
INSERT INTO `tbl_subject` VALUES (10, 'BSIT12', 'Operating Systems and Utilities', '5:00pm - 6:30pm', 'P204', 'First Semester', 'MWF');
INSERT INTO `tbl_subject` VALUES (11, 'BSIT13', 'Computer Organization with CISCO 1', '6:30pm - 8:00pm', 'P203', 'First Semester', 'MWF');
INSERT INTO `tbl_subject` VALUES (12, 'BSIT04', 'Data Structures and Algorithms', '6:30pm - 8:00pm', 'P204', 'First Semester', 'MTH');
INSERT INTO `tbl_subject` VALUES (13, 'BSIT20', 'File Processing and Database Systems', '9:00am - 10:30am', 'P205', 'First Semester', 'MTH');
INSERT INTO `tbl_subject` VALUES (14, 'BSIT23', 'Web Design and Developments', '10:30am - 12:00pm', 'P208', 'First Semester', 'MWF');

SET FOREIGN_KEY_CHECKS = 1;
