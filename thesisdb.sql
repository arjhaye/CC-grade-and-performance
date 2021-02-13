CREATE TABLE `tbl_account` (
	`cId` int NOT NULL AUTO_INCREMENT,
	`cAccIdNumber` int(20),
	`cFirstName` varchar(20),
	`cLastName` varchar(20),
	`cType` varchar(15),
	`cCourse` varchar(15),
	`cDepartment` varchar(10),
	`cYearLevel` varchar(10),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_grade` (
	`cId` int NOT NULL AUTO_INCREMENT,
	`cProfessor` varchar(20),
	`cRoom` varchar(10),
	`cTime` varchar(20),
	`cGradeIdNumber` int,
	`cSubjectCode` varchar(10),
	`cGradeType` varchar(20),
	`cActivityType` varchar(20),
	`cGrade` int(5),
	`cTotalGrade` int(5),
	`cSchoolYear` varchar(20),
	`cSemester` varchar(20),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_subject` (
	`cId` int NOT NULL AUTO_INCREMENT,
	`cSubjectCode` varchar(10),
	`cSubjectDescription` varchar(255),
	`cTime` varchar(255),
	`cSchoolYear` varchar(255),
	`cDay` varchar(255),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_room` (
	`cId` int NOT NULL ,
	`cRoomName` varchar(10),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_login` (
	`cId` INT NOT NULL AUTO_INCREMENT,
	`cUsername` varchar(255),
	`cPassword` varchar(255),
	`cType` varchar(255),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_faculty` (
	`cId` INT NOT NULL AUTO_INCREMENT,
	`cFirstname` varchar(255),
	`cLastname` varchar(255),
	`cDepartment` varchar(255),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_student` (
	`cId` INT NOT NULL AUTO_INCREMENT,
	`cFirstame` varchar(255),
	`cLastname` varchar(255),
	`cDepartment` varchar(255),
	`cCourse` varchar(255),
	`cYear` varchar(255),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_account` (
	`cId` int NOT NULL AUTO_INCREMENT,
	`cAccIdNumber` int(20),
	`cFirstName` varchar(20),
	`cLastName` varchar(20),
	`cType` varchar(15),
	`cDepartment` varchar(10),
	`cYearLevel` varchar(10),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_grade` (
	`cId` int NOT NULL AUTO_INCREMENT,
	`cProfessor` varchar(20),
	`cRoom` varchar(10),
	`cTime` varchar(20),
	`cGradeIdNumber` int,
	`cSubjectCode` varchar(10),
	`cGradeType` varchar(20),
	`cActivityType` varchar(20),
	`cGrade` int(5),
	`cTotalGrade` int(5),
	`cSchoolYear` varchar(20),
	`cSemester` varchar(20),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_subject` (
	`cId` int NOT NULL AUTO_INCREMENT,
	`cSubjectCode` varchar(10),
	`cSubjectDescription` varchar(255),
	`cTime` varchar(255),
	`cSchoolYear` varchar(255),
	`cDay` varchar(255),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_room` (
	`cId` int NOT NULL ,
	`cRoomName` varchar(10),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_login` (
	`cId` INT NOT NULL AUTO_INCREMENT,
	`cUsername` varchar(255),
	`cPassword` varchar(255),
	`cStatus` varchar(255),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_faculty` (
	`cId` INT NOT NULL AUTO_INCREMENT,
	`cFirstname` varchar(255),
	`cLastname` varchar(255),
	`cDepartment` varchar(255),
	PRIMARY KEY (`cId`)
);

CREATE TABLE `tbl_student` (
	`cId` INT NOT NULL AUTO_INCREMENT,
	`cFirstame` varchar(255),
	`cLastname` varchar(255),
	`cDepartment` varchar(255),
	`cCourse` varchar(255),
	`cYear` varchar(255),
	PRIMARY KEY (`cId`)
);


-- BSIT14 Data Communication and Networking
-- MGT221:Human Resource Management
-- BPO311:Strategic Management

-- BSIT17 Information Resource Management
-- BSIT09:Open Source Application and Management
-- BSIT05 Object-Oriented Programming
-- BSIT24 Systems Analysis and Design
-- CSC02 CISCO 2
-- BSIT21:Advanced Database Management System
-- BSIT26:Principles of Electronic Commerce
-- MTH315 Statistics and Probability
-- BSIT06 Structure of Programming Languages

-- BSIT29 Internship/OJT/Practicum, Seminars and Field Trips
-- CSC03 CISCO 3 (Optional)
-- BSIT25:Introduction to Software Engineering
-- BSIT30 Methods of Research and Writings
-- BSIT07 Network Administration
-- BSIT08 TQM for Information Systems Management
-- BSIT35 Capstone Project
-- CSC04 CISCO 4

-- INSERT INTO `tbl_subject` (`cId`, `cSubjectCode`, `cSubjectDescription`, `cTime`, `cSchoolYear`, `cDay`) VALUES (NULL, 'BSIT02', 'Computer Programming 1 (Turbo C/C++)', '10:30am - 12:00pm', 'First Semester', 'MWF'),(NULL, 'MTH111', 'Modern College Algebra', '9:00am - 10:30am', 'First Semester', 'MTH'),(NULL, 'BSIT18', 'Software/Productivity Tools', '10:30am-12:00pm', 'First Semester', 'MTH'),(NULL, 'BSIT10', 'Logic Design and Digital Computer Circuits', '1:00pm - 2:30pm', 'First Semester', 'MTH'),(NULL, 'BSIT11', 'Computer Architecture w/ Assembly Language', '2:30pm - 4:00pm', 'First Semester', 'MTH'),(NULL, 'BSIT03', 'Computer Programming 2 (Core JAVA)', '5:00pm - 6:30pm', 'First Semester', 'MTH'),(NULL, 'BSIT19', 'File Organization', '1:00am - 2:30pm', 'First Semester', 'MWF'),(NULL, 'BSIT22', 'Introduction to Multimedia Systems', '2:30pm - 4:00pm', 'First Semester', 'MWF'),(NULL, 'BSIT12', 'Operating Systems and Utilities', '5:00pm - 6:30pm', 'First Semester', 'MWF'),(NULL, 'BSIT13', 'Computer Organization with CISCO 1', '6:30pm - 8:00pm', 'First Semester', 'MWF'),(NULL, 'BSIT04', 'Data Structures and Algorithms', '6:30pm - 8:00pm', 'First Semester', 'MTH'),(NULL, 'BSIT20', 'File Processing and Database Systems', '9:00am - 10:30am', 'First Semester', 'MTH'),(NULL, 'BSIT23', 'Web Design and Developments', '10:30am - 12:00pm', 'First Semester', 'MWF');