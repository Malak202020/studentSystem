-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 11:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(11) NOT NULL,
  `Add` varchar(250) NOT NULL,
  `Delet` varchar(250) NOT NULL,
  `Register` varchar(250) NOT NULL,
  `Assing_role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assingment`
--

CREATE TABLE `assingment` (
  `Assing_ID` int(11) NOT NULL,
  `Assing_Name` varchar(250) NOT NULL,
  `Assing_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assingment`
--

INSERT INTO `assingment` (`Assing_ID`, `Assing_Name`, `Assing_file`) VALUES
(1, 'Assingment', 'File'),
(2, 'Assingment', 'File');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dep_ID` int(11) NOT NULL,
  `Dep_Name` varchar(250) NOT NULL,
  `F_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dep_ID`, `Dep_Name`, `F_ID`) VALUES
(1, 'Biology', 1),
(2, 'Kurdish', 4),
(3, 'Arabic', 4),
(4, 'Computer', 1),
(5, 'Physics ', 1),
(6, '', 0),
(7, 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `F_ID` int(11) NOT NULL,
  `F_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`F_ID`, `F_Name`) VALUES
(1, 'Science'),
(6, 'Engineering'),
(7, 'Education'),
(8, 'Administration and Economics '),
(22, 'FacultyNew');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Role_ID` int(11) NOT NULL,
  `Role_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `	Stg_ID` int(11) NOT NULL,
  `Dep_Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`	Stg_ID`, `Dep_Name`) VALUES
(1, 'Science'),
(2, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `St_ID` int(11) NOT NULL,
  `StName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `View` varchar(250) NOT NULL,
  `Download` varchar(250) NOT NULL,
  `SubmitAssing` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`St_ID`, `StName`, `LastName`, `View`, `Download`, `SubmitAssing`) VALUES
(1, 'Rasan', 'Botani', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentnew`
--

CREATE TABLE `studentnew` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `User_LastName` varchar(250) NOT NULL,
  `User_Pass` varchar(10) NOT NULL,
  `User_Role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentnew`
--

INSERT INTO `studentnew` (`User_ID`, `User_Name`, `User_LastName`, `User_Pass`, `User_Role`) VALUES
(1, 'malak', 'malak', '123a', 'admin'),
(5, 'zina', 'mazin', '123b', 'admin'),
(6, 'shaxawan', 'mahmood', '123c', 'teacher'),
(7, 'fatema', 'masud', '1234', 'student'),
(8, 'kawther', 'jawhar', '12345', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `User_LastName` varchar(250) NOT NULL,
  `User_Pass` varchar(10) NOT NULL,
  `User_Role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`User_ID`, `User_Name`, `User_LastName`, `User_Pass`, `User_Role`) VALUES
(1, 'malak', 'malak', '123a', 'admin'),
(5, 'zina', 'mazin', '123b', 'admin'),
(6, 'shaxawan', 'mahmood', '123c', 'teacher'),
(7, 'fatema', 'masud', '1234', 'student'),
(8, 'kawther', 'jawhar', '12345', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `students_new`
--

CREATE TABLE `students_new` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `User_LastName` varchar(250) NOT NULL,
  `User_Pass` varchar(10) NOT NULL,
  `User_Role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_new`
--

INSERT INTO `students_new` (`User_ID`, `User_Name`, `User_LastName`, `User_Pass`, `User_Role`) VALUES
(1, 'malak', 'malak', '123a', 'admin'),
(5, 'zina', 'mazin', '123b', 'admin'),
(6, 'shaxawan', 'mahmood', '123c', 'teacher'),
(7, 'fatema', 'masud', '1234', 'student'),
(8, 'kawther', 'jawhar', '12345', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `Sub_ID` int(11) NOT NULL,
  `Sub_Name` varchar(250) NOT NULL,
  `Sub_Teacher` varchar(250) NOT NULL,
  `Sub_Dep` int(11) NOT NULL,
  `Sub_Stage` int(11) NOT NULL,
  `SubFile` varchar(250) NOT NULL,
  `Assing_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Sub_ID`, `Sub_Name`, `Sub_Teacher`, `Sub_Dep`, `Sub_Stage`, `SubFile`, `Assing_ID`) VALUES
(1, 'Programming', '4', 3, 6, '', 0),
(2, 'test', '1', 2, 6, '', 0),
(3, 'test', '6', 1, 2, '', 0),
(4, 'Yalla', '23', 3, 3, '', 0),
(5, 'Yalla', '22', 3, 3, '', 0),
(6, 'Testinggggggg', '23', 5, 3, '', 0),
(7, 'test', '22', 1, 1, '', 0),
(8, 'lo lo', '23', 3, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `T_ID` int(11) NOT NULL,
  `CreateCourse` varchar(250) NOT NULL,
  `UploadFile` varchar(250) NOT NULL,
  `CreateAssing` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `User_Name` varchar(250) NOT NULL,
  `User_LastName` varchar(250) NOT NULL,
  `User_Pass` varchar(10) NOT NULL,
  `User_Role` varchar(250) NOT NULL,
  `User_Stage` int(11) NOT NULL,
  `User_Department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Name`, `User_LastName`, `User_Pass`, `User_Role`, `User_Stage`, `User_Department`) VALUES
(1, 'malak', 'malak', '123a', 'admin', 0, 0),
(5, 'zina', 'mazin', '123b', 'admin', 0, 0),
(6, 'shaxawan', 'mahmood', '123c', 'teacher', 0, 0),
(7, 'fatema', 'masud', '1234', 'student', 1, 1),
(8, 'kawther', 'jawhar', '12345', 'student', 3, 2),
(14, 'std', 'test', '123', 'student', 0, 3),
(22, 'teacher', '123', '123', 'teacher', 4, 0),
(23, 'mamosta', 'mamosta', '1234', 'teacher', 0, 0),
(24, 'talaba', 'talaba', '46', 'student', 1, 2),
(25, 'useruser', 'lastlast', '1234', 'admin', 0, 0),
(26, 'mamosta1', 'b', 'ccc', 'teacher', 0, 0),
(27, '', '', '', '', 2, 0),
(28, 'KurdiStudent', 'Test', 'test', 'student', 3, 1),
(29, 'studentKurdi', 'studentt', '123', 'student', 2, 2),
(30, 'biologystudent', '2134234', 'abc', 'student', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `assingment`
--
ALTER TABLE `assingment`
  ADD PRIMARY KEY (`Assing_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dep_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`F_ID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Role_ID`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`	Stg_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`St_ID`);

--
-- Indexes for table `studentnew`
--
ALTER TABLE `studentnew`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `students_new`
--
ALTER TABLE `students_new`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`Sub_ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assingment`
--
ALTER TABLE `assingment`
  MODIFY `Assing_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dep_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Role_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `	Stg_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `St_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentnew`
--
ALTER TABLE `studentnew`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students_new`
--
ALTER TABLE `students_new`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Sub_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
