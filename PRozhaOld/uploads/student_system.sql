-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2020 at 11:09 PM
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
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assign_ID` int(11) NOT NULL,
  `assign_name` varchar(250) NOT NULL,
  `assign_teacher` int(11) NOT NULL,
  `assign_dep` int(11) NOT NULL,
  `assign_stage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assign_ID`, `assign_name`, `assign_teacher`, `assign_dep`, `assign_stage`) VALUES
(1, 'Installments and T2 Report Card Collection.pdf', 4, 2, 2),
(2, 'Kurdish.pdf', 4, 2, 2),
(3, 'iOS- How to Install Microsoft Teams.pdf', 5, 3, 4),
(4, 'SABIS Online Learning-How To Guide For Students and Parents EngArKur.pdf', 5, 3, 2),
(5, 'Kurdish.pdf', 5, 3, 2),
(6, 'New Microsoft Word Document.docx', 5, 3, 2),
(7, 'How to Earn a Reading Certificate EngARKur.pdf', 5, 3, 2),
(8, 'SABIS Online Learning-How To Guide For Students and Parents EngArKur.pdf', 5, 3, 2),
(9, 'SABIS Online Learning-How To Guide For Students and Parents EngArKur.pdf', 5, 3, 3);

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
(2, 'computer', 1),
(3, 'chemistry', 1),
(4, 'mathmatic', 1),
(5, 'Physics ', 1),
(6, 'architecture', 2),
(7, 'software', 2),
(8, 'civil', 2),
(9, 'kurdi', 3),
(10, 'arabic', 3),
(11, 'administration', 4),
(12, 'economics', 4);

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
(2, 'Engineering'),
(3, 'Education'),
(4, 'Administration and Economics '),
(5, 'law');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `mat_ID` int(11) NOT NULL,
  `mat_name` varchar(250) NOT NULL,
  `mat_teacher` int(11) NOT NULL,
  `mat_dep` int(11) NOT NULL,
  `mat_stage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`mat_ID`, `mat_name`, `mat_teacher`, `mat_dep`, `mat_stage`) VALUES
(1, 'Kurdish.pdf', 4, 2, 2),
(2, 'iOS- How to Install Microsoft Teams.pdf', 4, 2, 2),
(4, 'How to Earn a Reading Certificate EngARKur.pdf', 4, 2, 2),
(5, 'SABIS KG Online Learning-How To Guide For Students and Parents.pdf', 0, 2, 2),
(6, 'ڕێزمان و خوێندنەوەی کوردی4280318413184369260.pdf', 4, 2, 2),
(7, 'SABIS KG Online Learning-How To Guide For Students and Parents.pdf', 4, 2, 2),
(8, 'iOS- How to Install Microsoft Teams.pdf', 5, 3, 3),
(9, 'Installments and T2 Report Card Collection.pdf', 5, 3, 3),
(10, 'Kurdish.pdf', 5, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `old_assignment`
--

CREATE TABLE `old_assignment` (
  `Assing_ID` int(11) NOT NULL,
  `Assing_Name` varchar(250) NOT NULL,
  `Assing_file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_assignment`
--

INSERT INTO `old_assignment` (`Assing_ID`, `Assing_Name`, `Assing_file`) VALUES
(1, 'Assingment', 'File'),
(2, 'Assingment', 'File');

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
(1, 'managment information syatem', '6', 7, 4, '', 0),
(2, 'operating system', '4', 2, 2, '', 0),
(3, 'image processing', '3', 1, 2, '', 0),
(4, 'coding&cryptography', '5', 3, 3, '', 0),
(5, 'design &analysis algorithm', '5', 3, 3, '', 0),
(6, 'artifical intelligent', '8', 5, 3, '', 0),
(7, 'data communication', '3', 1, 1, '', 0),
(9, 'inorganic chemistry', '5', 3, 1, '', 0),
(10, 'analaytical chemistry', '5', 3, 2, '', 0),
(11, 'quantum chemistry', '5', 3, 3, '', 0),
(12, 'biochemistry', '5', 3, 4, '', 0),
(13, 'kurdology', '7', 4, 2, '', 0),
(14, 'english', '8', 5, 3, '', 0),
(15, 'calculus', '3', 6, 4, '', 0),
(17, 'programming', '6', 7, 1, '', 0),
(19, 'mezhu', '7', 9, 2, '', 0),
(26, 'management', '9', 11, 3, '', 0);

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
(1, 'malak', 'kamaran', '123a', 'admin', 0, 0),
(2, 'zina', 'mazin', '123b', 'admin', 0, 0),
(3, 'shaxawan', 'mahmood', '123c', 'teacher', 0, 0),
(4, 'lana', 'latef', '123d', 'teacher', 0, 1),
(5, 'taban', 'fuad', '1234', 'teacher', 0, 2),
(6, 'nawroz', 'nuraden', '12345', 'teacher', 0, 3),
(7, 'kanar', 'yasen', 'kjh', 'teacher', 0, 0),
(8, 'sanhareb', 'istefan', 'kjhh', 'teacher', 0, 0),
(9, 'amar', 'umar', 'kgk', 'teacher', 0, 2),
(10, 'fatema', 'masud', 'mfjd', 'student', 4, 2),
(11, 'kawther', 'jawar', 'ccc', 'student', 4, 2),
(13, 'sara', 'safar', 'test', 'student', 3, 2),
(14, 'nergz', 'aziz', 'kel', 'student', 3, 3),
(15, 'saya', 'ahmed', 'lun', 'student', 2, 3),
(16, 'ala', 'ali', 'cds5', 'student', 2, 4),
(17, 'helen', 'masud', 'kkf', 'student', 1, 5),
(18, 'noor', 'hisam', 'rfg', 'student', 1, 6),
(19, 'aya', 'ali', '123', 'student', 2, 2),
(20, 'hawraz', 'sarkawt', 'gdgk', 'student', 3, 8),
(21, 'omar', 'kamaran', 'tttd', 'student', 4, 9),
(22, 'kale', 'fatih', 'kskks', 'student', 1, 9),
(23, 'nawroz', 'kamaran', 'kskks', 'student', 2, 9),
(24, 'harez', 'ali', 'nsns', 'student', 3, 9),
(25, 'ahmed', 'nawzad', 'ksks', 'student', 3, 10),
(26, 'muad ', 'nazim', 'dds', 'student', 4, 11),
(27, 'murad', 'ali', 'ksd', 'student', 3, 11),
(28, 'amer', 'kawa', 'jdjdj', 'student', 1, 12),
(29, 'amer', 'ali', 'jdjd', 'student', 3, 12),
(30, 'meer', 'kamaran', 'kekd', 'student', 3, 3),
(31, 'ela', 'kawa', 'lse', 'student', 4, 4),
(32, 'amena', 'salih', 'lsw', 'teacher', 0, 1),
(33, 'payam', 'azad', 'ccc', 'student', 1, 6),
(34, 'nasren', 'azad', 'eef', 'teacher', 0, 5),
(35, 'ali', 'kamaran', 'dfs', 'None', 0, 6),
(36, 'kawa', 'majed', 'ddd', 'teacher', 0, 7),
(37, 'marden', 'muhammed', 'ksk', 'teacher', 0, 8),
(38, 'muahmmed', 'ali', 'mdd', 'teacher', 0, 10),
(39, 'lass', 'ali', 'ee', 'teacher', 0, 11),
(40, 'zin', 'mahmmud', 'ere', 'teacher', 0, 12),
(42, 'helen', 'ahmed', 'ff', 'teacher', 0, 12),
(43, 'helen', 'ali', 'kk', 'teacher', 0, 1),
(44, 'snur', 'kamaran', 'lll', 'student', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assign_ID`);

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
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`mat_ID`);

--
-- Indexes for table `old_assignment`
--
ALTER TABLE `old_assignment`
  ADD PRIMARY KEY (`Assing_ID`);

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
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assign_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dep_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `F_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `mat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `old_assignment`
--
ALTER TABLE `old_assignment`
  MODIFY `Assing_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `Sub_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
