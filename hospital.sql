-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 11:12 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` varchar(50) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `first_name`, `last_name`) VALUES
('1', 'Rezaul', 'Karim');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_name` varchar(100) NOT NULL,
  `Num_of_patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_name`, `Num_of_patient`) VALUES
('Anaesthesia', 9),
('Bloodbank', 12),
('Cancer Care', 7),
('Cardiology', 15),
('Child Development', 9),
('childcare', 9),
('Cosmetic Surgery', 11),
('critical care units', 10),
('Dental & Maxillofacial', 12),
('Dermatology', 14),
('Diabetology', 5),
('Emergency', 20),
('Endocrinology', 10),
('ENT', 20),
('Fertility center', 6),
('Gastroenterology', 4),
('General & Laparoscopic ', 7),
('Gynaecology', 13),
('Hematology', 10),
('Homeotherapy', 20),
('Lab Medicine', 12),
('Lithotripsy', 5),
('Nephrology', 1),
('Neurology', 5),
('Nutrition', 21),
('Obstetrics', 5),
('Opthalmology', 31),
('Orthopaedics', 45),
('Physical medicine', 17),
('Physiotherapy', 13),
('Psychiatry', 6),
('Radiology', 15),
('Rheumatology', 2),
('Urology', 20),
('Wellness centre', 8);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_ID` varchar(50) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `SPECIALTY` varchar(15) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `PHONE_NUMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `FIRST_NAME`, `LAST_NAME`, `SPECIALTY`, `SALARY`, `PHONE_NUMBER`) VALUES
('1', 'Shadad', 'Parvez', 'Surgeon', 10000, 2145432);

-- --------------------------------------------------------

--
-- Table structure for table `laboratorist`
--

CREATE TABLE `laboratorist` (
  `L_ID` varchar(50) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `PHONE_NUMBER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratorist`
--

INSERT INTO `laboratorist` (`L_ID`, `FIRST_NAME`, `LAST_NAME`, `SALARY`, `PHONE_NUMBER`) VALUES
('1', 'Parvez', 'Shariar', 5500, 312126457);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `N_ID` varchar(50) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `PHONE_NUMBER` int(11) NOT NULL,
  `EXPERIENCE` varchar(20) NOT NULL,
  `WORKING_SHIFT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`N_ID`, `FIRST_NAME`, `LAST_NAME`, `SALARY`, `PHONE_NUMBER`, `EXPERIENCE`, `WORKING_SHIFT`) VALUES
('1', 'Faiza', 'Fahmida', 4000, 32134515, 'None', 9),
('10', 'Khadiza', 'Hassan', 7500, 125697458, '8months', 9),
('11', 'Lia', 'Hassan', 2500, 25975148, '1month', 5),
('12', 'Tove', 'Hossain', 9500, 13658795, '1year', 7),
('13', 'Raisa', 'Hossain', 7500, 23697458, '7months', 7),
('14', 'Raisa', 'Nushin', 6500, 452012369, '3years', 4),
('15', 'Anika', 'Hossain', 8520, 458700236, '2years', 5),
('16', 'Monika', 'Hossain', 7500, 2147483647, '1.5years', 5),
('17', 'Sasha', 'Khan', 6750, 154820365, '11months', 5),
('18', 'Anika', 'Islam', 20000, 123659875, '5years', 12),
('19', 'Aisha', 'Islam', 11000, 2147483647, '2.5years', 5),
('2', 'Salma', 'Khanum', 12000, 2147483647, '10 years', 8),
('20', 'Afra', 'Hossain', 1250, 169875362, '3years', 7),
('21', 'Naznin', 'Hossain', 6500, 189657426, '10months', 8),
('22', 'Naushin', 'Islam', 9500, 1369758, '2years', 9),
('23', 'Faiza', 'Islam', 15000, 586201458, '3.5years', 9),
('24', 'Farah', 'Huma', 11000, 520125698, '3years', 10),
('25', 'Anika', 'Hossain', 10000, 145236970, '8months', 6),
('26', 'Jainab', 'Hossain', 7520, 125697453, '5months', 4),
('27', 'Kiki', 'Islam', 9500, 136975845, '1year', 4),
('28', 'Amina', 'Faiza', 12500, 1258749369, '3years', 8),
('29', 'Sufiya', 'Kamal', 16500, 198745635, '5years', 8),
('3', 'Samaha', 'Lita', 5000, 2546985, '2 months', 6),
('30', 'Sumaiya', 'Anam', 15500, 12897563, '6years', 6),
('31', 'Fabiha', 'Hossain', 9520, 187965823, '8months', 6),
('32', 'Abinta', 'Hossain', 17500, 178569644, '3years', 9),
('33', 'Fakira', 'Hossain', 7500, 136975821, '8 months', 6),
('34', 'Samaira', 'Ibant', 8560, 236974582, '6months', 9),
('35', 'Marufa ', 'Akter', 3500, 123659756, '4months', 5),
('4', 'Yamaha', 'Lily', 15000, 45012369, '2years', 10),
('5', 'Sarah', 'Keya', 8500, 102457962, '6months', 6),
('6', 'Jobeda', 'Khan', 4500, 102145698, '9months', 5),
('7', 'Maisha', 'Khan', 10000, 125478963, '4years', 6),
('8', 'Jahan', 'Khan', 17500, 514236989, '10months', 7),
('9', 'Keya', 'Moni', 8500, 154589627, '7months', 4);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_ID` varchar(50) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `BILL` int(11) DEFAULT NULL,
  `PHONE_NUMBER` int(11) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  `DISEASE` varchar(20) NOT NULL,
  `PATIENT_TYPE` varchar(100) DEFAULT NULL,
  `CABIN_NO` varchar(100) DEFAULT NULL,
  `FROM_DATE` varchar(20) DEFAULT NULL,
  `TO_DATE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `FIRST_NAME`, `LAST_NAME`, `BILL`, `PHONE_NUMBER`, `ADDRESS`, `DISEASE`, `PATIENT_TYPE`, `CABIN_NO`, `FROM_DATE`, `TO_DATE`) VALUES
('1', 'Muktadir', 'Hasan', 5000, 32534621, 'Utarra', 'Typhoid', '1A', 'Checkup', '9-5-22', '23-8-22'),
('10', 'Faria', 'Jahan', 1256, 236587189, 'Narayanganj', 'Paediatrics', 'checkup', 'none', '14-3-22', 'none'),
('11', 'abdul', 'halim', 78599, 21556973, 'Malibagh', 'allergy', 'admit', '6C', '5-7-22', '25-7-22'),
('12', 'Maimuna', 'Yasmini', 896, 247896, 'Banasree', 'Skin problems', 'checkup', 'none', '20-4-22', 'none'),
('13', 'Tanna', 'Yana', 5487, 894359, 'Chittagong', 'Pregnant', 'checkup', '23B', '1-7-22', 'none'),
('14', 'Faiza', 'Hassan', 5987, 214369, 'Monipuri', 'Liver t', 'admit', '1A', '14-7-22', '19-9-22'),
('15', 'Famina', 'Faid', 5846, 123695277, 'Uttarar', 'kidney', 'admit', '8A', '24-7-22', '9-9-22'),
('16', 'Mukta', 'Sahana', 256300, 15897436, 'Badda Middle', 'Dengue', '7F', 'admit', '25-6-22', '12-7-22'),
('17', 'Shahnaz', 'Mehjabin', 1320, 17895436, 'Dia Bari', 'Acne', 'none', 'checkup', '5-5-20', 'none'),
('18', 'Afra', 'Anam', 4526, 19687536, 'Lalmatia A block', 'Back pain', 'none', 'checkup', '19-8-22', 'none'),
('19', 'Afran', 'Khan', 5697, 136975842, 'Cantonment', 'Watering of eye', 'none', 'checkup', '30-8-21', 'none'),
('2', 'Lionel', 'Messi', 2000, 12354789, 'Bashundhara R/A', 'Leg pain', 'checkup', 'none', '12-8-22', 'none'),
('20', 'Maruf', 'Khan', 23650, 9875693, 'Uttara', 'Gas problems', 'none', 'checkup', '4-9-22', 'none'),
('21', 'Salma', 'Khan', 4526, 159875339, 'Bashundhara R/A', 'Gas problems', 'none', 'checkup', '5-6-22', 'none'),
('22', 'Abdul', 'Khan', 10000, 12987693, 'Bashundhara R/A', 'Ankle sprain', 'none', 'checkup', '16-9-22', 'none'),
('23', 'Abdul', 'Mohammad', 7895, 197453698, 'Jigatola', 'Difficulty seeing th', 'none', 'checkup', '6-9-22', 'none'),
('24', 'Raisa', 'Huq', 500000, 36598745, 'Mirpur-12', 'Bone marrow transpla', 'ICU', 'admit', '18-3-22', '5-7-22'),
('25', 'Adiba', 'Islam', 15000, 214578963, 'Tongi road', 'Teeth removal', 'none', 'checkup', '14-3-22', 'none'),
('26', 'Faiza', 'Islam', 10000, 8749632, 'Bashundhara R/A', 'Torn ligament', 'none', 'checkup', '24-3-22', 'none'),
('27', 'Amika', 'Islam', 300000, 245879641, 'Banasree', 'eye operation', '8A', 'admit', '25-8-22', '27-8-22'),
('28', 'Muktadir', 'Islam', 20000, 254698743, 'Mohammadpur', 'arm disjoint', '5A', 'admit', '12-8-22', '27-8-22'),
('3', 'Badshah', 'Khan', 235000, 452169879, 'Badda', 'Heart pain', 'admit', '5C', '8-9-22', '28-10-22'),
('30', 'Augustine', 'Rock', 50000, 2145896325, 'Farmgate', 'broken hand', 'emergency', 'admit', '8-12-22', 'none'),
('31', 'Mahima', 'Kaiser', 53000, 256478549, 'Dhanmondi 12', 'Scalyhand', 'none', 'checkup', '9-12-22', 'none'),
('4', 'Ali', 'Habib', 200, 457962159, 'Dhanmondi', 'Bruised leg', 'checkup', 'none', '2-1-21', 'none'),
('5', 'Salman', 'Khan', 1000, 1547821, 'Mirpur', 'Fever', 'checkup', 'none', '1-4-22', 'none'),
('6', 'Salam', 'Miku', 3256, 69758425, 'Rampura', 'Heart transplant', 'admit', '55F', '2-5-22', '8-10-22'),
('7', 'Habib', 'Lipi', 752, 5428901, 'Lalmatia', 'Migrane', 'checkup', 'none', '8-4-22', 'none'),
('8', 'Selina', 'Yasmin', 2500, 2397584, 'Shantinagar', 'Liver transplant', 'admit', '1A', '4-7-22', '29-9-22'),
('9', 'Samad', 'Faruk', 14658, 251018965, 'Mohammadpur', 'Counselling', 'checkup', 'none', '24-6-22', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `R_ID` varchar(50) NOT NULL,
  `FIRST_NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `Salary` int(11) NOT NULL,
  `PHONE_NUMBER` int(11) NOT NULL,
  `DESK_NUMBER` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`R_ID`, `FIRST_NAME`, `LAST_NAME`, `Salary`, `PHONE_NUMBER`, `DESK_NUMBER`) VALUES
('1', 'Sara', 'Islam', 2000, 2341355, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_name`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `laboratorist`
--
ALTER TABLE `laboratorist`
  ADD PRIMARY KEY (`L_ID`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`N_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`R_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
