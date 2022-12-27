-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 01:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `activationdate` date NOT NULL,
  `duedate` int(11) NOT NULL,
  `duebalance` int(11) NOT NULL,
  `otc` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `password`, `fullname`, `nid`, `dob`, `address`, `email`, `cell`, `package`, `activationdate`, `duedate`, `duebalance`, `otc`, `status`) VALUES
('C006', 'Sanjida', '1831038642', 'Sanjida Islam', '19972911094000197', '2022-12-23', 'Bashundhara RA, Block F road 20 House 637-638 Flat D1 ', 'sanjida.islam20@northsouth.edu', '01310458645', '4', '2022-12-23', 15, 8, 0, 1),
('C018', 'Mominul', '786786', 'Mominul Islam', '456 456 7890', '1997-12-21', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mominulislam1997@yahoo.com', '+8801743487211', '5', '2022-12-26', 15, 0, 804, 1),
('C019', 'Saifan', '12345', 'Saifan Aijaz', '456 456 7890', '2000-01-01', 'Tolar bag, Mirpur-1, Dhaka.', 'saifan.aijaz15@yahoo.com', '01531556582', '1', '2022-12-26', 15, 0, 500, 1),
('C020', 'Nehal ', '12334', 'Nehal Mahmud', '456 456 7890', '1998-01-03', 'Dhaka, Bangladesh.', 'nehal.ahmed@gamail.com', '0177778700', '2', '2022-12-02', 10, 0, 804, 1),
('C021', 'Mamun', '12345', 'Mamun Sali', '456 456 7890', '1995-06-09', 'Dhaka, Bangladesh.', 'mamum.sali@outlook.com', '+8801743487211', '1', '2022-06-06', 15, 0, 804, 1),
('C022', 'Naim', '12345', 'Naim Rahman', '456 456 7890', '1999-12-21', 'Mirpur, Dhaka.', 'rahamannaim@yahoo.com', '+8801743716523', '4', '2022-12-17', 15, 0, 804, 1),
('C023', 'Adam', '12345', 'Adam Wills', '456 456 7890', '1995-01-01', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'adam.wills@yahoo.com', '+8801743487212', '5', '2022-12-26', 15, 0, 804, 1),
('C024', 'Nafiz', '12345', 'Nafiz Rahman', '456 456 7890', '2022-12-13', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'rahman.nafiz5@yahoo.com', '+8801743487213', '2', '2022-12-01', 15, 0, 500, 1),
('C025', 'Zaman', '12345', 'Zaman Islam', '456 456 7890', '1991-02-09', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'zaman1991@yahoo.com', '+8801715099865', '4', '2022-12-24', 15, 0, 804, 1),
('C026', 'Rakesh', '76850', 'Rakesh Kundu', '456 456 7890', '1995-09-18', 'Dhaka, Bangladesh.', 'rakesh.kumdu@hotmail.com', '015123097652', '3', '2022-01-05', 15, 0, 804, 1),
('C027', 'Piyas', '76857', 'Piyas haque', '456 456 7890', '1999-09-05', 'Dhaka, Bangladesh.', 'piyas99@iutlook.com', '01945665309', '4', '2022-12-17', 15, 0, 804, 1),
('C028', 'Shanti', '12345', 'Shanti Islam ', '456 456 7890', '1997-12-21', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'shantiislam15@yahoo.com', '+8801743487211', '3', '2022-12-12', 15, 0, 804, 1),
('C029', 'Esrat', '12345', 'Esrat Jahan', '456 456 7890', '1999-12-02', 'Dhaka, Bangladesh.', 'esratjahan@gmail.com', '01345678912', '2', '2022-12-26', 15, 0, 804, 1),
('C030', 'alim', '12345', 'alim amin', '456 456 7890', '1996-10-10', 'Dhanmondi, Dhaka.', 'alim@yahoo.com', '01678340198', '4', '2022-12-15', 15, 0, 804, 1),
('C031', 'sadik', '12345', 'sadik islam ', '456 456 7890', '1999-08-04', 'Mirpur, Dhaka.', 'sadikislam1999@yahoo.com', '01378364750', '4', '2022-12-02', 15, 0, 804, 1),
('C032', 'James', '12345', 'James Smith', '999 653 9876', '1981-02-01', 'Dhaka.', 'james.smith@outlook.com', '01976524321', '5', '2022-12-10', 15, 0, 804, 1),
('C033', 'Mary', '12345', 'Mary Wright', '456 456 7890', '1998-03-04', 'Dhaka, Bangladesh.', 'wright.mary@yahoo.com', '01478656091', '4', '2022-12-24', 15, 0, 500, 1),
('C034', 'islam', '12378', 'Islam Abdullah', '177 777 9087', '2000-02-11', 'Mirpur, Dhaka.', 'mrislam@yahoo.com', '01876464762', '4', '2022-12-02', 15, 0, 500, 1),
('C035', 'kabila', '1234467', 'kabila islam', '456 456 7890', '1999-12-21', 'Uttara, Dhaka', 'kabila.islam1999@yahoo.com', '01763567098', '5', '2022-12-12', 15, 0, 804, 1),
('C036', 'sakib ', '12346', 'Sakib Khan', '456 456 7890', '1991-01-01', 'Gulshan, Dhaka', 'sakib.khan@hotmail.com', '01999999123', '6', '2022-12-19', 15, 0, 804, 1),
('C037', 'reza', '123678', 'Reza Ahmed', '456 456 7890', '1994-05-05', 'Mirpur, Dhaka.', 'rezaahmed3758@gmail.com', '01986579361', '2', '2022-03-09', 15, 0, 804, 1),
('C038', 'mominulislam1997', '676756', 'Mominul Islam', '177 787 1233', '1997-12-12', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mominulislam15@yahoo.com', '+8801743487211', '5', '2022-12-25', 15, 0, 804, 1),
('C039', 'sopon', '67890', 'Sopon Akon', '177 787 1233', '1991-08-05', 'Mirpur, Dhaka.', 'sopon.ahmed@yahoo.com', '01898765709', '5', '2022-12-01', 15, 0, 804, 1),
('C040', 'apon', '67854', 'Apon Ahmed ', '177 787 1233', '1996-09-07', 'Badda, Dhaka.', 'apon.01@yahoo.com', '01598734097', '4', '2022-12-10', 15, 0, 804, 1),
('C041', 'masud', '67845', 'Masud Rana', '177 787 1233', '1987-03-29', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'masudrana1987@yahoo.com', '+8801748923683', '3', '2022-12-23', 15, 0, 804, 1),
('C042', 'halim', '78906', 'Halim Kundu', '199 123 0987', '0000-00-00', 'Dhaka, Bangladesh.', 'kundu.halim@yahoo.com', '01674657463', '5', '2022-12-10', 15, 0, 804, 1),
('C043', 'pliton ', '34534', 'Pliton B', '177 787 1233', '1977-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'pliton.b@yahoo.com', '+8801749363874', '5', '2022-12-21', 15, 0, 804, 1),
('C044', 'ahmed', '56789', 'Ahmed Alom', '177 787 1233', '1999-07-08', 'Kakrail, Dhaka', 'ahmed.alom@gmail.com', '01895635471', '3', '2022-12-08', 15, 0, 500, 1),
('C045', 'sojol', '67868', 'Sojol Ahmed', '199 877 0953', '1987-03-05', 'Mirpur, Dhaka.', 'sojol.ahmed@yahoo.com', '01896524381', '4', '2022-12-02', 15, 0, 804, 1),
('C046', 'Nabila ', '56789', 'Nabila Khan ', '456 456 7890', '1999-09-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'nabila15@yahoo.com', '+8801743487211', '3', '2022-12-15', 15, 0, 500, 1),
('C047', 'Naim ', '79845', 'Naim Babu', '177 787 1233', '1999-04-09', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'naim.babu@yahoo.com', '+8801704618572', '4', '2022-12-01', 15, 0, 500, 1),
('C048', 'Imran', '12345', 'Imran Ahmed', '177 787 1233', '2000-08-09', 'Mirpur, Dhaka.', 'imran.ahmed@yahoo.com', '01897547621', '5', '2022-12-08', 15, 0, 804, 1),
('C049', 'habil', '68754', 'Habil Ahmed ', '177 787 1233', '1998-09-28', 'Mirpur, Dhaka.', 'habil.ahmed@outlook.com', '01876451099', '5', '2022-12-27', 15, 0, 804, 1),
('C050', 'babu', '78596', 'Babu Alom', '456 456 7890', '2009-02-04', 'Mirpur, Dhaka.', 'alom.babu@gmail.com', '01976489631', '4', '2022-12-01', 15, 0, 500, 1),
('C051', 'depik', '09876', 'Depik Anne', '456 456 7890', '1999-02-03', 'Mirpur, Dhaka.', 'depik.anne1999@yahoo.com', '01976309875', '5', '2022-12-07', 15, 0, 804, 1),
('C052', 'alom', '09876', 'Alom Abir', '177 787 1233', '2004-09-18', 'Mirpur, Dhaka.', 'alom.abir@hotmail.com', '01973948712', '4', '2022-12-24', 15, 0, 804, 1),
('C053', 'abul', '34589', 'Abul Alim ', '275 923 2348', '1999-04-03', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'abulalim15@yahoo.com', '+8801743487211', '4', '2022-12-09', 15, 0, 500, 1),
('C054', 'tarek', '38247', 'Tarek Ahmed', '234 987 2345', '1999-03-07', 'Uttara, Dhaha', 'tarek.ahmed@yahoo.com', '01834659870', '6', '2022-12-10', 15, 0, 804, 1),
('C055', 'Orpa', '098234', 'Orpa Mominul', '234 985 2093', '1999-05-07', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'orpa.mominul@yahoo.com', '+8801723409863', '6', '2022-12-02', 15, 0, 804, 1),
('C056', 'Arif ', '23784', 'Arif Babu ', '345 987 2345', '2000-07-23', 'Mirpur, Dhaka.', 'arifbabu@yahoo.com', '01967398432', '3', '2022-12-10', 15, 0, 500, 1),
('C057', 'rahman', '23780', 'Rahman Abdur ', '234 985 2093', '1991-02-03', 'Dhaka, Bangladesh.', 'rahman.abdur@yahoo.com', '01912349846', '5', '2022-12-23', 15, 0, 804, 1),
('C058', 'kanti', '43564', 'Kanti Abir ', '234 985 2093', '2009-04-30', 'Dhaka, Bangladesh.', 'kanti@yahoo.com', '01239087643', '5', '2022-12-21', 15, 0, 804, 1),
('C059', 'rob', '56789', 'Rob Olson', '177 787 1233', '1991-02-03', 'Uttara, Dhaka', 'olson.rob@yahoo.com', '019874567219', '5', '2022-12-17', 15, 0, 804, 1),
('C060', 'nigar ', '23467', 'Sumi Nigar ', '456 456 7890', '1999-03-04', 'Dhaka, Bangladesh.', 'nigar.sumi@yahoo.com', '01973609832', '5', '2022-12-17', 15, 0, 804, 1),
('C061', 'pori', '68498', 'Pori Moni', '9784 0928 234', '1987-03-02', 'Dhaka, Bangladesh.', 'pori.moni@yahoo.com', '0198712812', '6', '2022-12-15', 15, 0, 804, 1),
('C062', 'jack ', '23484', 'Jack Youngg', '234 565 3453 ', '2005-04-23', 'Mirpur, Dhaka.', 'jackyoungg@yahoo.com', '01937423932', '5', '2022-12-16', 15, 426, 0, 1),
('C063', 'Sirgel', '98345', 'Sirgel Alim', '324 348 2342', '1990-03-04', 'Uttara, Dhaka', 'sirgel@yahoo.com', '012978439', '5', '2022-12-22', 15, 0, 804, 1),
('C064', 'Mahi', '09234', 'Mahi Islam ', '234 569 9874', '2008-09-07', 'Uttara, Dhaka', 'mahi.islam@yahoo.com', '0173219083', '6', '2022-12-10', 15, 0, 804, 1),
('C065', 'Naimur', '09347', 'Naimur Rahman ', '177 787 1233', '1999-03-05', 'Uttara, Dhaka', 'naim.rahman@yahoo.com', '+8801743487211', '4', '2022-12-08', 15, 0, 804, 1),
('C066', 'mehedi', '12345', 'Mehedi Ahsan ', '345 655 3244', '0000-00-00', 'Dhaka, Bangladesh.', 'mehediahsan@yahoo.com', '01987567242', '4', '2022-12-17', 15, 0, 804, 1),
('C067', 'Ahsan', '23475', 'Ahsan Haque ', '345 986 2345', '1998-03-04', 'Uttara, Dhaka', 'ahsan@yahoo.com', '01298234874', '4', '2022-12-22', 15, 0, 804, 1),
('C068', 'Kim', '29348', 'Kim kardesian ', '324 9067 234', '0000-00-00', 'Uttara, Dhaka', 'kim@outlook.com', '0192346983476', '3', '2022-12-23', 15, 0, 804, 1),
('C069', 'jung', '23456', 'Jung Kook', '0934 2098 2394', '1989-03-23', 'Uttara, Dhaka', 'kook.jung@hotmail.com', '01903254356', '3', '2022-12-15', 15, 0, 804, 1),
('C070', 'Gozal ', '23475', 'Gozal Goz', '234 985 2093', '1999-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'gozal5@yahoo.com', '+8801743487211', '4', '2022-12-01', 15, 0, 804, 1),
('C071', 'firuz ', '23456', 'Firuz Abur', '234 453 5693', '1974-04-05', 'Dhaka, Bangladesh.', 'firuz@yahoo.com', '017345823433', '3', '2022-12-17', 15, 0, 804, 1),
('C072', 'badrul ', '234985', 'Badrul Huzur', '177 787 1233', '1983-03-20', 'Dhaka, Bangladesh.', 'badrul15@yahoo.com', '+880174343094', '4', '2022-12-22', 15, 0, 804, 1),
('C073', 'Mim ', '239487', 'Mim Sharma', '3456 2334 9834', '1995-02-09', 'Dhaka, Bangladesh.', 'mim@gmail.com', '01284723409', '5', '2022-12-16', 15, 0, 804, 1),
('C074', 'mokhles ', '23473', 'Mokhles Rahman', '3245 3245 4235', '1996-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mokhles15@yahoo.com', '+880123985324', '4', '2022-12-17', 15, 0, 804, 1),
('C075', 'sonia', '23475', 'Sonia ', '5213 2346 2346', '1987-03-04', 'Dhaka, Bangladesh.', 'sonia@yahoo.com', '0129834532', '4', '2022-12-10', 15, 0, 804, 1),
('C076', 'adiba ', '23-06', 'Adiba Mim', '234 985 2093', '1976-03-04', 'Uttara, Dhaka', 'adiba@yahoo.com', '01973458723', '4', '2022-12-17', 15, 0, 804, 1),
('C077', 'sakira', '23498', 'Sakira Sakira ', '234 985 2093', '2000-12-14', 'Uttara, Dhaka', 'sakira@hotmail.com', '0192234234', '5', '2022-12-24', 15, 0, 804, 1),
('C078', 'Jennifer ', '23450', 'Jennifer Lawrence ', '348 6745 2304', '1999-12-15', 'Uttara, Dhaka', 'jennifer@yahoo.com', '01234723421', '3', '2022-12-21', 15, 0, 804, 1),
('C079', 'Zalim', '29784', 'Zalim Raeess', '234 985 2093', '2000-08-09', 'Uttara, Dhaka', 'zalim@yahoo.com', '+8801743487211', '5', '2022-12-30', 15, 0, 804, 1),
('C080', 'gauri ', '98053', 'Gauri Khan ', '1990234908234788', '1975-02-09', 'Uttara, Dhaka', 'gauri.gold@gmail.com', '0128475453', '4', '2022-12-02', 15, 0, 804, 1),
('C081', 'abraham ', '87523', 'Abraham Khan ', '10923492372340324', '2022-12-24', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'abraham@yahoo.com', '+8801743487211', '4', '2022-12-10', 15, 0, 804, 1),
('C082', 'habu ', '95875', 'habu Haque ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'habu.highq@gmail.com', '01889234844', '5', '2022-12-24', 15, 0, 804, 1),
('C083', 'Yesmin', '09842', 'Yesmin Yesi', '3245 3245 4235', '1900-08-07', 'Uttara, Dhaka', 'yashmin@gmail.com', '0198364634', '5', '2022-12-31', 15, 0, 804, 1),
('C084', 'shanto', '234879', 'Shanto Ahmed', '234 985 2093', '1999-06-08', 'Uttara, Dhaka', 'shantoslam15@yahoo.com', '+8801743487211', '5', '2022-12-03', 15, 0, 500, 1),
('C085', 'rohit ', '92348', 'Rohit Shetty ', '3245 3245 4235', '0000-00-00', 'Uttara, Dhaka', 'rohit@yahoo.com', '01435732542', '6', '2022-12-14', 15, 0, 804, 1),
('C086', 'Vishal', '78965', 'Vishal Sheykhar', '177 787 1233', '2009-07-08', 'Uttara, Dhaka', 'vishan.vibe@gmail.com', '01983648237', '6', '2022-12-22', 15, 0, 500, 1),
('C087', 'Ayesha ', '23480', 'Ayesha Mano', '3245 3245 4235', '2000-02-03', 'Uttara, Dhaka', 'ayesha@yahoo.com', '01948473933', '5', '2022-12-17', 15, 0, 804, 1),
('C088', 'pratik ', '23049', 'Pratik Pallo', '234 985 2093', '1985-02-03', 'Dhaka, Bangladesh.', 'pratik@gmail.com', '0198348293', '4', '2022-12-24', 15, 0, 804, 1),
('C089', 'karine ', '09342', 'Karina Kaisar ', '234 985 2093', '0000-00-00', 'Uttara, Dhaka', 'karina@yahoo.com', '0192484372', '4', '2022-12-09', 15, 0, 804, 1),
('C090', 'clinto', '398234', 'Clinto Skoda', '234 985 2093', '0000-00-00', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'clinto15@yahoo.com', '+880174348756', '4', '2022-12-25', 15, 0, 804, 1),
('C091', 'evan', '23948', 'Tanvir Evan ', '234 985 2093', '1999-04-05', 'Uttara, Dhaka', 'evan@gmail.com', '0124823482', '4', '2022-12-03', 15, 0, 804, 1),
('C092', 'laila', 'w2354', 'Laila Alim', '3249 8645 0239', '1994-03-20', 'Dhaka, Bangladesh.', 'alim.laila@yahoo.com', '0192374749', '4', '2022-12-24', 15, 0, 804, 1),
('C093', 'raina', '340985', 'Raina Sekhar ', '177 787 1233', '1993-03-09', 'Dhaka, Bangladesh.', 'raina@gmail.com', '0129372349', '3', '2022-12-17', 15, 0, 804, 1),
('C094', 'koli', '09842', 'Koli Funky', '234 985 2093', '1999-04-03', 'Uttara, Dhaka', 'koli@gmail.com', '01219347555', '5', '2022-12-06', 15, 0, 804, 1),
('C095', 'rabun', '98733', 'Rabun Mawla', '3245 3245 4235', '2008-05-06', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'rabun@yahoo.com', '+8801743487211', '4', '2022-12-13', 15, 0, 804, 1),
('C096', 'Mawla ', '394578', 'Mawla Abdul Haque ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'mawla.dhaka@gmail.com', '01823483434', '5', '2022-12-20', 15, 0, 804, 1),
('C097', 'Rahman ', '78564', 'Rahman Abdullah ', '3245 3245 4235', '1998-07-06', 'Uttara, Dhaka', 'rahman.nafiz5@yahoo.com', '+8801743487211', '4', '2022-12-23', 15, 0, 804, 1),
('C098', 'alom', '39845', 'Alom Haque ', '234 985 2093', '0000-00-00', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'alom@yahoo.com', '+880174234235', '5', '2022-12-24', 15, 0, 804, 1),
('C099', 'Naim', '04563', 'Naim Rahman', '456 456 7890', '2008-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'naim.rahman@yahoo.com', '+880174343567', '4', '2022-12-24', 15, 0, 804, 1),
('C100', 'arjit', '90834', 'Arjit Mandu', '275 923 2348', '0000-00-00', 'Uttara, Dhaka', 'arjit@yahoo.com', '+88017092385', '5', '2022-12-14', 15, 0, 804, 1),
('C101', 'sofia', '23984', 'Sofia Ali ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'sofialae@yahoo.com', '01844839389', '5', '2022-12-14', 15, 0, 804, 1),
('C102', 'esu ', 'i-234', 'Esu Islam ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'esu@yahoo.com', '+88017494564', '4', '2022-12-04', 15, 0, 804, 1),
('C103', 'Abrud', '089234', 'Abrub Rob ', '3245 3245 4235', '0000-00-00', 'Uttara, Dhaka', 'abraham@yahoo.com', '014890349', '5', '2022-12-06', 15, 0, 804, 1),
('C104', 'abdur ', '93454`', 'Abdur Rahman ', '234 985 2093', '1985-03-04', 'Dhaka, Bangladesh.', 'abraham@yahoo.com', '012545876', '4', '2022-12-22', 15, 0, 804, 1),
('C111', 'Mominull', '786786', 'Mominul Islam', '456 456 7890', '1997-12-21', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mominulislam1997@yahoo.com', '+8801743487211', '5', '2022-12-26', 15, 0, 804, 1),
('C112', 'Saifann', '12345', 'Saifan Aijaz', '456 456 7890', '2000-01-01', 'Tolar bag, Mirpur-1, Dhaka.', 'saifan.aijaz15@yahoo.com', '01531556582', '1', '2022-12-26', 15, 0, 500, 1),
('C113', 'Nehall', '12334', 'Nehal Mahmud', '456 456 7890', '1998-01-03', 'Dhaka, Bangladesh.', 'nehal.ahmed@gamail.com', '0177778700', '2', '2022-12-02', 10, 0, 804, 1),
('C114', 'Mamunn', '12345', 'Mamun Sali', '456 456 7890', '1995-06-09', 'Dhaka, Bangladesh.', 'mamum.sali@outlook.com', '+8801743487211', '1', '2022-06-06', 15, 0, 804, 1),
('C115', 'Naimn', '12345', 'Naim Rahman', '456 456 7890', '1999-12-21', 'Mirpur, Dhaka.', 'rahamannaim@yahoo.com', '+8801743716523', '4', '2022-12-17', 15, 0, 804, 1),
('C116', 'Adama', '12345', 'Adam Wills', '456 456 7890', '1995-01-01', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'adam.wills@yahoo.com', '+8801743487212', '5', '2022-12-26', 15, 0, 804, 1),
('C117', 'Nafiza', '12345', 'Nafiz Rahman', '456 456 7890', '2022-12-13', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'rahman.nafiz5@yahoo.com', '+8801743487213', '2', '2022-12-01', 15, 0, 500, 1),
('C118', 'Zamana', '12345', 'Zaman Islam', '456 456 7890', '1991-02-09', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'zaman1991@yahoo.com', '+8801715099865', '4', '2022-12-24', 15, 0, 804, 1),
('C119', 'Rakesha', '76850', 'Rakesh Kundu', '456 456 7890', '1995-09-18', 'Dhaka, Bangladesh.', 'rakesh.kumdu@hotmail.com', '015123097652', '3', '2022-01-05', 15, 0, 804, 1),
('C120', 'Piyasa', '76857', 'Piyas haque', '456 456 7890', '1999-09-05', 'Dhaka, Bangladesh.', 'piyas99@iutlook.com', '01945665309', '4', '2022-12-17', 15, 0, 804, 1),
('C121', 'Shantia', '12345', 'Shanti Islam ', '456 456 7890', '1997-12-21', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'shantiislam15@yahoo.com', '+8801743487211', '3', '2022-12-12', 15, 0, 804, 1),
('C122', 'Esrata', '12345', 'Esrat Jahan', '456 456 7890', '1999-12-02', 'Dhaka, Bangladesh.', 'esratjahan@gmail.com', '01345678912', '2', '2022-12-26', 15, 0, 804, 1),
('C123', 'alima', '12345', 'alim amin', '456 456 7890', '1996-10-10', 'Dhanmondi, Dhaka.', 'alim@yahoo.com', '01678340198', '4', '2022-12-15', 15, 0, 804, 1),
('C124', 'sadika', '12345', 'sadik islam ', '456 456 7890', '1999-08-04', 'Mirpur, Dhaka.', 'sadikislam1999@yahoo.com', '01378364750', '4', '2022-12-02', 15, 0, 804, 1),
('C125', 'Jamesa', '12345', 'James Smith', '999 653 9876', '1981-02-01', 'Dhaka.', 'james.smith@outlook.com', '01976524321', '5', '2022-12-10', 15, 0, 804, 1),
('C126', 'Marya', '12345', 'Mary Wright', '456 456 7890', '1998-03-04', 'Dhaka, Bangladesh.', 'wright.mary@yahoo.com', '01478656091', '4', '2022-12-24', 15, 0, 500, 1),
('C127', 'islama', '12378', 'Islam Abdullah', '177 777 9087', '2000-02-11', 'Mirpur, Dhaka.', 'mrislam@yahoo.com', '01876464762', '4', '2022-12-02', 15, 0, 500, 1),
('C128', 'kabilaa', '1234467', 'kabila islam', '456 456 7890', '1999-12-21', 'Uttara, Dhaka', 'kabila.islam1999@yahoo.com', '01763567098', '5', '2022-12-12', 15, 0, 804, 1),
('C129', 'sakiba', '12346', 'Sakib Khan', '456 456 7890', '1991-01-01', 'Gulshan, Dhaka', 'sakib.khan@hotmail.com', '01999999123', '6', '2022-12-19', 15, 0, 804, 1),
('C130', 'rezaa', '123678', 'Reza Ahmed', '456 456 7890', '1994-05-05', 'Mirpur, Dhaka.', 'rezaahmed3758@gmail.com', '01986579361', '2', '2022-03-09', 15, 0, 804, 1),
('C131', 'mominulislam1997a', '676756', 'Mominul Islam', '177 787 1233', '1997-12-12', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mominulislam15@yahoo.com', '+8801743487211', '5', '2022-12-25', 15, 0, 804, 1),
('C132', 'sopona', '67890', 'Sopon Akon', '177 787 1233', '1991-08-05', 'Mirpur, Dhaka.', 'sopon.ahmed@yahoo.com', '01898765709', '5', '2022-12-01', 15, 0, 804, 1),
('C133', 'apona', '67854', 'Apon Ahmed ', '177 787 1233', '1996-09-07', 'Badda, Dhaka.', 'apon.01@yahoo.com', '01598734097', '4', '2022-12-10', 15, 0, 804, 1),
('C134', 'masuda', '67845', 'Masud Rana', '177 787 1233', '1987-03-29', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'masudrana1987@yahoo.com', '+8801748923683', '3', '2022-12-23', 15, 0, 804, 1),
('C135', 'halima', '78906', 'Halim Kundu', '199 123 0987', '0000-00-00', 'Dhaka, Bangladesh.', 'kundu.halim@yahoo.com', '01674657463', '5', '2022-12-10', 15, 0, 804, 1),
('C136', 'plitona', '34534', 'Pliton B', '177 787 1233', '1977-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'pliton.b@yahoo.com', '+8801749363874', '5', '2022-12-21', 15, 0, 804, 1),
('C137', 'ahmeda', '56789', 'Ahmed Alom', '177 787 1233', '1999-07-08', 'Kakrail, Dhaka', 'ahmed.alom@gmail.com', '01895635471', '3', '2022-12-08', 15, 0, 500, 1),
('C138', 'sojola', '67868', 'Sojol Ahmed', '199 877 0953', '1987-03-05', 'Mirpur, Dhaka.', 'sojol.ahmed@yahoo.com', '01896524381', '4', '2022-12-02', 15, 0, 804, 1),
('C139', 'Nabilaa', '56789', 'Nabila Khan ', '456 456 7890', '1999-09-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'nabila15@yahoo.com', '+8801743487211', '3', '2022-12-15', 15, 0, 500, 1),
('C140', 'Naima', '79845', 'Naim Babu', '177 787 1233', '1999-04-09', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'naim.babu@yahoo.com', '+8801704618572', '4', '2022-12-01', 15, 0, 500, 1),
('C141', 'Imrana', '12345', 'Imran Ahmed', '177 787 1233', '2000-08-09', 'Mirpur, Dhaka.', 'imran.ahmed@yahoo.com', '01897547621', '5', '2022-12-08', 15, 0, 804, 1),
('C142', 'habila', '68754', 'Habil Ahmed ', '177 787 1233', '1998-09-28', 'Mirpur, Dhaka.', 'habil.ahmed@outlook.com', '01876451099', '5', '2022-12-27', 15, 0, 804, 1),
('C143', 'babua', '78596', 'Babu Alom', '456 456 7890', '2009-02-04', 'Mirpur, Dhaka.', 'alom.babu@gmail.com', '01976489631', '4', '2022-12-01', 15, 0, 500, 1),
('C144', 'depika', '09876', 'Depik Anne', '456 456 7890', '1999-02-03', 'Mirpur, Dhaka.', 'depik.anne1999@yahoo.com', '01976309875', '5', '2022-12-07', 15, 0, 804, 1),
('C145', 'aloma', '09876', 'Alom Abir', '177 787 1233', '2004-09-18', 'Mirpur, Dhaka.', 'alom.abir@hotmail.com', '01973948712', '4', '2022-12-24', 15, 0, 804, 1),
('C146', 'abula', '34589', 'Abul Alim ', '275 923 2348', '1999-04-03', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'abulalim15@yahoo.com', '+8801743487211', '4', '2022-12-09', 15, 0, 500, 1),
('C147', 'tareak', '38247', 'Tarek Ahmed', '234 987 2345', '1999-03-07', 'Uttara, Dhaha', 'tarek.ahmed@yahoo.com', '01834659870', '6', '2022-12-10', 15, 0, 804, 1),
('C148', 'Orpaa', '098234', 'Orpa Mominul', '234 985 2093', '1999-05-07', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'orpa.mominul@yahoo.com', '+8801723409863', '6', '2022-12-02', 15, 0, 804, 1),
('C149', 'Ariaf ', '23784', 'Arif Babu ', '345 987 2345', '2000-07-23', 'Mirpur, Dhaka.', 'arifbabu@yahoo.com', '01967398432', '3', '2022-12-10', 15, 0, 500, 1),
('C150', 'rahaman', '23780', 'Rahman Abdur ', '234 985 2093', '1991-02-03', 'Dhaka, Bangladesh.', 'rahman.abdur@yahoo.com', '01912349846', '5', '2022-12-23', 15, 0, 804, 1),
('C151', 'kanati', '43564', 'Kanti Abir ', '234 985 2093', '2009-04-30', 'Dhaka, Bangladesh.', 'kanti@yahoo.com', '01239087643', '5', '2022-12-21', 15, 0, 804, 1),
('C152', 'roba', '56789', 'Rob Olson', '177 787 1233', '1991-02-03', 'Uttara, Dhaka', 'olson.rob@yahoo.com', '019874567219', '5', '2022-12-17', 15, 0, 804, 1),
('C153', 'nigaar ', '23467', 'Sumi Nigar ', '456 456 7890', '1999-03-04', 'Dhaka, Bangladesh.', 'nigar.sumi@yahoo.com', '01973609832', '5', '2022-12-17', 15, 0, 804, 1),
('C154', 'poari', '68498', 'Pori Moni', '9784 0928 234', '1987-03-02', 'Dhaka, Bangladesh.', 'pori.moni@yahoo.com', '0198712812', '6', '2022-12-15', 15, 0, 804, 1),
('C155', 'jaack ', '23484', 'Jack Youngg', '234 565 3453 ', '2005-04-23', 'Mirpur, Dhaka.', 'jackyoungg@yahoo.com', '01937423932', '5', '2022-12-16', 15, 426, 0, 1),
('C156', 'Siragel', '98345', 'Sirgel Alim', '324 348 2342', '1990-03-04', 'Uttara, Dhaka', 'sirgel@yahoo.com', '012978439', '5', '2022-12-22', 15, 0, 804, 1),
('C157', 'Mahai', '09234', 'Mahi Islam ', '234 569 9874', '2008-09-07', 'Uttara, Dhaka', 'mahi.islam@yahoo.com', '0173219083', '6', '2022-12-10', 15, 0, 804, 1),
('C158', 'Naaimur', '09347', 'Naimur Rahman ', '177 787 1233', '1999-03-05', 'Uttara, Dhaka', 'naim.rahman@yahoo.com', '+8801743487211', '4', '2022-12-08', 15, 0, 804, 1),
('C159', 'meahedi', '12345', 'Mehedi Ahsan ', '345 655 3244', '0000-00-00', 'Dhaka, Bangladesh.', 'mehediahsan@yahoo.com', '01987567242', '4', '2022-12-17', 15, 0, 804, 1),
('C160', 'Ahasan', '23475', 'Ahsan Haque ', '345 986 2345', '1998-03-04', 'Uttara, Dhaka', 'ahsan@yahoo.com', '01298234874', '4', '2022-12-22', 15, 0, 804, 1),
('C161', 'Kima', '29348', 'Kim kardesian ', '324 9067 234', '0000-00-00', 'Uttara, Dhaka', 'kim@outlook.com', '0192346983476', '3', '2022-12-23', 15, 0, 804, 1),
('C162', 'juang', '23456', 'Jung Kook', '0934 2098 2394', '1989-03-23', 'Uttara, Dhaka', 'kook.jung@hotmail.com', '01903254356', '3', '2022-12-15', 15, 0, 804, 1),
('C163', 'Gaozal ', '23475', 'Gozal Goz', '234 985 2093', '1999-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'gozal5@yahoo.com', '+8801743487211', '4', '2022-12-01', 15, 0, 804, 1),
('C164', 'firauz ', '23456', 'Firuz Abur', '234 453 5693', '1974-04-05', 'Dhaka, Bangladesh.', 'firuz@yahoo.com', '017345823433', '3', '2022-12-17', 15, 0, 804, 1),
('C165', 'badarul ', '234985', 'Badrul Huzur', '177 787 1233', '1983-03-20', 'Dhaka, Bangladesh.', 'badrul15@yahoo.com', '+880174343094', '4', '2022-12-22', 15, 0, 804, 1),
('C166', 'Mimaa ', '239487', 'Mim Sharma', '3456 2334 9834', '1995-02-09', 'Dhaka, Bangladesh.', 'mim@gmail.com', '01284723409', '5', '2022-12-16', 15, 0, 804, 1),
('C167', 'mokahles ', '23473', 'Mokhles Rahman', '3245 3245 4235', '1996-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mokhles15@yahoo.com', '+880123985324', '4', '2022-12-17', 15, 0, 804, 1),
('C168', 'soania', '23475', 'Sonia ', '5213 2346 2346', '1987-03-04', 'Dhaka, Bangladesh.', 'sonia@yahoo.com', '0129834532', '4', '2022-12-10', 15, 0, 804, 1),
('C169', 'adaiba ', '23-06', 'Adiba Mim', '234 985 2093', '1976-03-04', 'Uttara, Dhaka', 'adiba@yahoo.com', '01973458723', '4', '2022-12-17', 15, 0, 804, 1),
('C170', 'sakaira', '23498', 'Sakira Sakira ', '234 985 2093', '2000-12-14', 'Uttara, Dhaka', 'sakira@hotmail.com', '0192234234', '5', '2022-12-24', 15, 0, 804, 1),
('C171', 'Jenanifer ', '23450', 'Jennifer Lawrence ', '348 6745 2304', '1999-12-15', 'Uttara, Dhaka', 'jennifer@yahoo.com', '01234723421', '3', '2022-12-21', 15, 0, 804, 1),
('C172', 'Zalaim', '29784', 'Zalim Raeess', '234 985 2093', '2000-08-09', 'Uttara, Dhaka', 'zalim@yahoo.com', '+8801743487211', '5', '2022-12-30', 15, 0, 804, 1),
('C173', 'gaauri ', '98053', 'Gauri Khan ', '1990234908234788', '1975-02-09', 'Uttara, Dhaka', 'gauri.gold@gmail.com', '0128475453', '4', '2022-12-02', 15, 0, 804, 1),
('C174', 'abraaham ', '87523', 'Abraham Khan ', '10923492372340324', '2022-12-24', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'abraham@yahoo.com', '+8801743487211', '4', '2022-12-10', 15, 0, 804, 1),
('C175', 'habau', '95875', 'habu Haque ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'habu.highq@gmail.com', '01889234844', '5', '2022-12-24', 15, 0, 804, 1),
('C176', 'Yesaamin', '09842', 'Yesmin Yesi', '3245 3245 4235', '1900-08-07', 'Uttara, Dhaka', 'yashmin@gmail.com', '0198364634', '5', '2022-12-31', 15, 0, 804, 1),
('C177', 'shaanto', '234879', 'Shanto Ahmed', '234 985 2093', '1999-06-08', 'Uttara, Dhaka', 'shantoslam15@yahoo.com', '+8801743487211', '5', '2022-12-03', 15, 0, 500, 1),
('C178', 'rohait ', '92348', 'Rohit Shetty ', '3245 3245 4235', '0000-00-00', 'Uttara, Dhaka', 'rohit@yahoo.com', '01435732542', '6', '2022-12-14', 15, 0, 804, 1),
('C179', 'Visahal', '78965', 'Vishal Sheykhar', '177 787 1233', '2009-07-08', 'Uttara, Dhaka', 'vishan.vibe@gmail.com', '01983648237', '6', '2022-12-22', 15, 0, 500, 1),
('C180', 'Ayaesha ', '23480', 'Ayesha Mano', '3245 3245 4235', '2000-02-03', 'Uttara, Dhaka', 'ayesha@yahoo.com', '01948473933', '5', '2022-12-17', 15, 0, 804, 1),
('C181', 'praatik ', '23049', 'Pratik Pallo', '234 985 2093', '1985-02-03', 'Dhaka, Bangladesh.', 'pratik@gmail.com', '0198348293', '4', '2022-12-24', 15, 0, 804, 1),
('C182', 'kaarine ', '09342', 'Karina Kaisar ', '234 985 2093', '0000-00-00', 'Uttara, Dhaka', 'karina@yahoo.com', '0192484372', '4', '2022-12-09', 15, 0, 804, 1),
('C183', 'clianto', '398234', 'Clinto Skoda', '234 985 2093', '0000-00-00', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'clinto15@yahoo.com', '+880174348756', '4', '2022-12-25', 15, 0, 804, 1),
('C184', 'evaan', '23948', 'Tanvir Evan ', '234 985 2093', '1999-04-05', 'Uttara, Dhaka', 'evan@gmail.com', '0124823482', '4', '2022-12-03', 15, 0, 804, 1),
('C185', 'laaila', 'w2354', 'Laila Alim', '3249 8645 0239', '1994-03-20', 'Dhaka, Bangladesh.', 'alim.laila@yahoo.com', '0192374749', '4', '2022-12-24', 15, 0, 804, 1),
('C186', 'raaina', '340985', 'Raina Sekhar ', '177 787 1233', '1993-03-09', 'Dhaka, Bangladesh.', 'raina@gmail.com', '0129372349', '3', '2022-12-17', 15, 0, 804, 1),
('C187', 'koali', '09842', 'Koli Funky', '234 985 2093', '1999-04-03', 'Uttara, Dhaka', 'koli@gmail.com', '01219347555', '5', '2022-12-06', 15, 0, 804, 1),
('C188', 'rabaun', '98733', 'Rabun Mawla', '3245 3245 4235', '2008-05-06', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'rabun@yahoo.com', '+8801743487211', '4', '2022-12-13', 15, 0, 804, 1),
('C189', 'Mawala ', '394578', 'Mawla Abdul Haque ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'mawla.dhaka@gmail.com', '01823483434', '5', '2022-12-20', 15, 0, 804, 1),
('C190', 'Rahmaan ', '78564', 'Rahman Abdullah ', '3245 3245 4235', '1998-07-06', 'Uttara, Dhaka', 'rahman.nafiz5@yahoo.com', '+8801743487211', '4', '2022-12-23', 15, 0, 804, 1),
('C191', 'aloam', '39845', 'Alom Haque ', '234 985 2093', '0000-00-00', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'alom@yahoo.com', '+880174234235', '5', '2022-12-24', 15, 0, 804, 1),
('C192', 'Naiam', '04563', 'Naim Rahman', '456 456 7890', '2008-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'naim.rahman@yahoo.com', '+880174343567', '4', '2022-12-24', 15, 0, 804, 1),
('C193', 'arjait', '90834', 'Arjit Mandu', '275 923 2348', '0000-00-00', 'Uttara, Dhaka', 'arjit@yahoo.com', '+88017092385', '5', '2022-12-14', 15, 0, 804, 1),
('C194', 'sofaia', '23984', 'Sofia Ali ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'sofialae@yahoo.com', '01844839389', '5', '2022-12-14', 15, 0, 804, 1),
('C195', 'esaau', 'i-234', 'Esu Islam ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'esu@yahoo.com', '+88017494564', '4', '2022-12-04', 15, 0, 804, 1),
('C196', 'Abraud', '089234', 'Abrub Rob ', '3245 3245 4235', '0000-00-00', 'Uttara, Dhaka', 'abraham@yahoo.com', '014890349', '5', '2022-12-06', 15, 0, 804, 1),
('C197', 'abdaaaur ', '93454`', 'Abdur Rahman ', '234 985 2093', '1985-03-04', 'Dhaka, Bangladesh.', 'abraham@yahoo.com', '012545876', '4', '2022-12-22', 15, 0, 804, 1),
('C198', 'Momissssssnull', '786786', 'Mominul Islam', '456 456 7890', '1997-12-21', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mominulislam1997@yahoo.com', '+8801743487211', '5', '2022-12-26', 15, 0, 804, 1),
('C199', 'Saifsssann', '12345', 'Saifan Aijaz', '456 456 7890', '2000-01-01', 'Tolar bag, Mirpur-1, Dhaka.', 'saifan.aijaz15@yahoo.com', '01531556582', '1', '2022-12-26', 15, 0, 500, 1),
('C200', 'Nessshall', '12334', 'Nehal Mahmud', '456 456 7890', '1998-01-03', 'Dhaka, Bangladesh.', 'nehal.ahmed@gamail.com', '0177778700', '2', '2022-12-02', 10, 0, 804, 1),
('C201', 'Masssmunn', '12345', 'Mamun Sali', '456 456 7890', '1995-06-09', 'Dhaka, Bangladesh.', 'mamum.sali@outlook.com', '+8801743487211', '1', '2022-06-06', 15, 0, 804, 1),
('C202', 'Nassimn', '12345', 'Naim Rahman', '456 456 7890', '1999-12-21', 'Mirpur, Dhaka.', 'rahamannaim@yahoo.com', '+8801743716523', '4', '2022-12-17', 15, 0, 804, 1),
('C203', 'Adsssama', '12345', 'Adam Wills', '456 456 7890', '1995-01-01', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'adam.wills@yahoo.com', '+8801743487212', '5', '2022-12-26', 15, 0, 804, 1),
('C204', 'Nasssfiza', '12345', 'Nafiz Rahman', '456 456 7890', '2022-12-13', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'rahman.nafiz5@yahoo.com', '+8801743487213', '2', '2022-12-01', 15, 0, 500, 1),
('C205', 'Zasssmana', '12345', 'Zaman Islam', '456 456 7890', '1991-02-09', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'zaman1991@yahoo.com', '+8801715099865', '4', '2022-12-24', 15, 0, 804, 1),
('C206', 'Rasskesha', '76850', 'Rakesh Kundu', '456 456 7890', '1995-09-18', 'Dhaka, Bangladesh.', 'rakesh.kumdu@hotmail.com', '015123097652', '3', '2022-01-05', 15, 0, 804, 1),
('C207', 'Piysssasa', '76857', 'Piyas haque', '456 456 7890', '1999-09-05', 'Dhaka, Bangladesh.', 'piyas99@iutlook.com', '01945665309', '4', '2022-12-17', 15, 0, 804, 1),
('C208', 'Shansstia', '12345', 'Shanti Islam ', '456 456 7890', '1997-12-21', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'shantiislam15@yahoo.com', '+8801743487211', '3', '2022-12-12', 15, 0, 804, 1),
('C209', 'Esrsssata', '12345', 'Esrat Jahan', '456 456 7890', '1999-12-02', 'Dhaka, Bangladesh.', 'esratjahan@gmail.com', '01345678912', '2', '2022-12-26', 15, 0, 804, 1),
('C210', 'alisssma', '12345', 'alim amin', '456 456 7890', '1996-10-10', 'Dhanmondi, Dhaka.', 'alim@yahoo.com', '01678340198', '4', '2022-12-15', 15, 0, 804, 1),
('C211', 'sasssdika', '12345', 'sadik islam ', '456 456 7890', '1999-08-04', 'Mirpur, Dhaka.', 'sadikislam1999@yahoo.com', '01378364750', '4', '2022-12-02', 15, 0, 804, 1),
('C212', 'Jssssmesa', '12345', 'James Smith', '999 653 9876', '1981-02-01', 'Dhaka.', 'james.smith@outlook.com', '01976524321', '5', '2022-12-10', 15, 0, 804, 1),
('C213', 'Massssrya', '12345', 'Mary Wright', '456 456 7890', '1998-03-04', 'Dhaka, Bangladesh.', 'wright.mary@yahoo.com', '01478656091', '4', '2022-12-24', 15, 0, 500, 1),
('C214', 'islsssama', '12378', 'Islam Abdullah', '177 777 9087', '2000-02-11', 'Mirpur, Dhaka.', 'mrislam@yahoo.com', '01876464762', '4', '2022-12-02', 15, 0, 500, 1),
('C215', 'kabsssilaa', '1234467', 'kabila islam', '456 456 7890', '1999-12-21', 'Uttara, Dhaka', 'kabila.islam1999@yahoo.com', '01763567098', '5', '2022-12-12', 15, 0, 804, 1),
('C216', 'saksssiba', '12346', 'Sakib Khan', '456 456 7890', '1991-01-01', 'Gulshan, Dhaka', 'sakib.khan@hotmail.com', '01999999123', '6', '2022-12-19', 15, 0, 804, 1),
('C217', 'ressszaa', '123678', 'Reza Ahmed', '456 456 7890', '1994-05-05', 'Mirpur, Dhaka.', 'rezaahmed3758@gmail.com', '01986579361', '2', '2022-03-09', 15, 0, 804, 1),
('C218', 'mominssulislam1997a', '676756', 'Mominul Islam', '177 787 1233', '1997-12-12', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mominulislam15@yahoo.com', '+8801743487211', '5', '2022-12-25', 15, 0, 804, 1),
('C219', 'sopsssona', '67890', 'Sopon Akon', '177 787 1233', '1991-08-05', 'Mirpur, Dhaka.', 'sopon.ahmed@yahoo.com', '01898765709', '5', '2022-12-01', 15, 0, 804, 1),
('C220', 'aposssna', '67854', 'Apon Ahmed ', '177 787 1233', '1996-09-07', 'Badda, Dhaka.', 'apon.01@yahoo.com', '01598734097', '4', '2022-12-10', 15, 0, 804, 1),
('C221', 'masusssda', '67845', 'Masud Rana', '177 787 1233', '1987-03-29', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'masudrana1987@yahoo.com', '+8801748923683', '3', '2022-12-23', 15, 0, 804, 1),
('C222', 'halisssma', '78906', 'Halim Kundu', '199 123 0987', '0000-00-00', 'Dhaka, Bangladesh.', 'kundu.halim@yahoo.com', '01674657463', '5', '2022-12-10', 15, 0, 804, 1),
('C223', 'plissstona', '34534', 'Pliton B', '177 787 1233', '1977-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'pliton.b@yahoo.com', '+8801749363874', '5', '2022-12-21', 15, 0, 804, 1),
('C224', 'ahmssseda', '56789', 'Ahmed Alom', '177 787 1233', '1999-07-08', 'Kakrail, Dhaka', 'ahmed.alom@gmail.com', '01895635471', '3', '2022-12-08', 15, 0, 500, 1),
('C225', 'sojsssola', '67868', 'Sojol Ahmed', '199 877 0953', '1987-03-05', 'Mirpur, Dhaka.', 'sojol.ahmed@yahoo.com', '01896524381', '4', '2022-12-02', 15, 0, 804, 1),
('C226', 'Nabissslaa', '56789', 'Nabila Khan ', '456 456 7890', '1999-09-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'nabila15@yahoo.com', '+8801743487211', '3', '2022-12-15', 15, 0, 500, 1),
('C227', 'Nasssima', '79845', 'Naim Babu', '177 787 1233', '1999-04-09', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'naim.babu@yahoo.com', '+8801704618572', '4', '2022-12-01', 15, 0, 500, 1),
('C228', 'Imrsssana', '12345', 'Imran Ahmed', '177 787 1233', '2000-08-09', 'Mirpur, Dhaka.', 'imran.ahmed@yahoo.com', '01897547621', '5', '2022-12-08', 15, 0, 804, 1),
('C229', 'habisssla', '68754', 'Habil Ahmed ', '177 787 1233', '1998-09-28', 'Mirpur, Dhaka.', 'habil.ahmed@outlook.com', '01876451099', '5', '2022-12-27', 15, 0, 804, 1),
('C230', 'babsssua', '78596', 'Babu Alom', '456 456 7890', '2009-02-04', 'Mirpur, Dhaka.', 'alom.babu@gmail.com', '01976489631', '4', '2022-12-01', 15, 0, 500, 1),
('C231', 'depssika', '09876', 'Depik Anne', '456 456 7890', '1999-02-03', 'Mirpur, Dhaka.', 'depik.anne1999@yahoo.com', '01976309875', '5', '2022-12-07', 15, 0, 804, 1),
('C232', 'alossma', '09876', 'Alom Abir', '177 787 1233', '2004-09-18', 'Mirpur, Dhaka.', 'alom.abir@hotmail.com', '01973948712', '4', '2022-12-24', 15, 0, 804, 1),
('C233', 'abssula', '34589', 'Abul Alim ', '275 923 2348', '1999-04-03', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'abulalim15@yahoo.com', '+8801743487211', '4', '2022-12-09', 15, 0, 500, 1),
('C234', 'tarseak', '38247', 'Tarek Ahmed', '234 987 2345', '1999-03-07', 'Uttara, Dhaha', 'tarek.ahmed@yahoo.com', '01834659870', '6', '2022-12-10', 15, 0, 804, 1),
('C235', 'Orpsssaa', '098234', 'Orpa Mominul', '234 985 2093', '1999-05-07', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'orpa.mominul@yahoo.com', '+8801723409863', '6', '2022-12-02', 15, 0, 804, 1),
('C236', 'Arsssiaf ', '23784', 'Arif Babu ', '345 987 2345', '2000-07-23', 'Mirpur, Dhaka.', 'arifbabu@yahoo.com', '01967398432', '3', '2022-12-10', 15, 0, 500, 1),
('C237', 'rahsssaman', '23780', 'Rahman Abdur ', '234 985 2093', '1991-02-03', 'Dhaka, Bangladesh.', 'rahman.abdur@yahoo.com', '01912349846', '5', '2022-12-23', 15, 0, 804, 1),
('C238', 'kanssati', '43564', 'Kanti Abir ', '234 985 2093', '2009-04-30', 'Dhaka, Bangladesh.', 'kanti@yahoo.com', '01239087643', '5', '2022-12-21', 15, 0, 804, 1),
('C239', 'rossba', '56789', 'Rob Olson', '177 787 1233', '1991-02-03', 'Uttara, Dhaka', 'olson.rob@yahoo.com', '019874567219', '5', '2022-12-17', 15, 0, 804, 1),
('C240', 'nigasssar ', '23467', 'Sumi Nigar ', '456 456 7890', '1999-03-04', 'Dhaka, Bangladesh.', 'nigar.sumi@yahoo.com', '01973609832', '5', '2022-12-17', 15, 0, 804, 1),
('C241', 'posasri', '68498', 'Pori Moni', '9784 0928 234', '1987-03-02', 'Dhaka, Bangladesh.', 'pori.moni@yahoo.com', '0198712812', '6', '2022-12-15', 15, 0, 804, 1),
('C242', 'jasssack ', '23484', 'Jack Youngg', '234 565 3453 ', '2005-04-23', 'Mirpur, Dhaka.', 'jackyoungg@yahoo.com', '01937423932', '5', '2022-12-16', 15, 426, 0, 1),
('C243', 'Sisssragel', '98345', 'Sirgel Alim', '324 348 2342', '1990-03-04', 'Uttara, Dhaka', 'sirgel@yahoo.com', '012978439', '5', '2022-12-22', 15, 0, 804, 1),
('C244', 'Mahsssai', '09234', 'Mahi Islam ', '234 569 9874', '2008-09-07', 'Uttara, Dhaka', 'mahi.islam@yahoo.com', '0173219083', '6', '2022-12-10', 15, 0, 804, 1),
('C245', 'Nasssaimur', '09347', 'Naimur Rahman ', '177 787 1233', '1999-03-05', 'Uttara, Dhaka', 'naim.rahman@yahoo.com', '+8801743487211', '4', '2022-12-08', 15, 0, 804, 1),
('C246', 'measssshedi', '12345', 'Mehedi Ahsan ', '345 655 3244', '0000-00-00', 'Dhaka, Bangladesh.', 'mehediahsan@yahoo.com', '01987567242', '4', '2022-12-17', 15, 0, 804, 1),
('C247', 'Ahassssan', '23475', 'Ahsan Haque ', '345 986 2345', '1998-03-04', 'Uttara, Dhaka', 'ahsan@yahoo.com', '01298234874', '4', '2022-12-22', 15, 0, 804, 1),
('C248', 'Kimsssa', '29348', 'Kim kardesian ', '324 9067 234', '0000-00-00', 'Uttara, Dhaka', 'kim@outlook.com', '0192346983476', '3', '2022-12-23', 15, 0, 804, 1),
('C249', 'juasssng', '23456', 'Jung Kook', '0934 2098 2394', '1989-03-23', 'Uttara, Dhaka', 'kook.jung@hotmail.com', '01903254356', '3', '2022-12-15', 15, 0, 804, 1),
('C250', 'Gaossszal ', '23475', 'Gozal Goz', '234 985 2093', '1999-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'gozal5@yahoo.com', '+8801743487211', '4', '2022-12-01', 15, 0, 804, 1),
('C251', 'firausssz ', '23456', 'Firuz Abur', '234 453 5693', '1974-04-05', 'Dhaka, Bangladesh.', 'firuz@yahoo.com', '017345823433', '3', '2022-12-17', 15, 0, 804, 1),
('C252', 'badasssrul ', '234985', 'Badrul Huzur', '177 787 1233', '1983-03-20', 'Dhaka, Bangladesh.', 'badrul15@yahoo.com', '+880174343094', '4', '2022-12-22', 15, 0, 804, 1),
('C253', 'Mimsssaa ', '239487', 'Mim Sharma', '3456 2334 9834', '1995-02-09', 'Dhaka, Bangladesh.', 'mim@gmail.com', '01284723409', '5', '2022-12-16', 15, 0, 804, 1),
('C254', 'moksssahles ', '23473', 'Mokhles Rahman', '3245 3245 4235', '1996-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'mokhles15@yahoo.com', '+880123985324', '4', '2022-12-17', 15, 0, 804, 1),
('C255', 'sosssania', '23475', 'Sonia ', '5213 2346 2346', '1987-03-04', 'Dhaka, Bangladesh.', 'sonia@yahoo.com', '0129834532', '4', '2022-12-10', 15, 0, 804, 1),
('C256', 'adasssiba ', '23-06', 'Adiba Mim', '234 985 2093', '1976-03-04', 'Uttara, Dhaka', 'adiba@yahoo.com', '01973458723', '4', '2022-12-17', 15, 0, 804, 1),
('C257', 'saksssssaira', '23498', 'Sakira Sakira ', '234 985 2093', '2000-12-14', 'Uttara, Dhaka', 'sakira@hotmail.com', '0192234234', '5', '2022-12-24', 15, 0, 804, 1),
('C258', 'Jenasssnifer ', '23450', 'Jennifer Lawrence ', '348 6745 2304', '1999-12-15', 'Uttara, Dhaka', 'jennifer@yahoo.com', '01234723421', '3', '2022-12-21', 15, 0, 804, 1),
('C259', 'Zalasssim', '29784', 'Zalim Raeess', '234 985 2093', '2000-08-09', 'Uttara, Dhaka', 'zalim@yahoo.com', '+8801743487211', '5', '2022-12-30', 15, 0, 804, 1),
('C260', 'gaausssri ', '98053', 'Gauri Khan ', '1990234908234788', '1975-02-09', 'Uttara, Dhaka', 'gauri.gold@gmail.com', '0128475453', '4', '2022-12-02', 15, 0, 804, 1),
('C261', 'abrssssaaham ', '87523', 'Abraham Khan ', '10923492372340324', '2022-12-24', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'abraham@yahoo.com', '+8801743487211', '4', '2022-12-10', 15, 0, 804, 1),
('C262', 'habasssu', '95875', 'habu Haque ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'habu.highq@gmail.com', '01889234844', '5', '2022-12-24', 15, 0, 804, 1),
('C263', 'Yessssaamin', '09842', 'Yesmin Yesi', '3245 3245 4235', '1900-08-07', 'Uttara, Dhaka', 'yashmin@gmail.com', '0198364634', '5', '2022-12-31', 15, 0, 804, 1),
('C264', 'shaassssnto', '234879', 'Shanto Ahmed', '234 985 2093', '1999-06-08', 'Uttara, Dhaka', 'shantoslam15@yahoo.com', '+8801743487211', '5', '2022-12-03', 15, 0, 500, 1),
('C265', 'rohassssit ', '92348', 'Rohit Shetty ', '3245 3245 4235', '0000-00-00', 'Uttara, Dhaka', 'rohit@yahoo.com', '01435732542', '6', '2022-12-14', 15, 0, 804, 1),
('C266', 'Visassshal', '78965', 'Vishal Sheykhar', '177 787 1233', '2009-07-08', 'Uttara, Dhaka', 'vishan.vibe@gmail.com', '01983648237', '6', '2022-12-22', 15, 0, 500, 1),
('C267', 'Ayaesssssha ', '23480', 'Ayesha Mano', '3245 3245 4235', '2000-02-03', 'Uttara, Dhaka', 'ayesha@yahoo.com', '01948473933', '5', '2022-12-17', 15, 0, 804, 1),
('C268', 'praasssstik ', '23049', 'Pratik Pallo', '234 985 2093', '1985-02-03', 'Dhaka, Bangladesh.', 'pratik@gmail.com', '0198348293', '4', '2022-12-24', 15, 0, 804, 1),
('C269', 'kaarsssine ', '09342', 'Karina Kaisar ', '234 985 2093', '0000-00-00', 'Uttara, Dhaka', 'karina@yahoo.com', '0192484372', '4', '2022-12-09', 15, 0, 804, 1),
('C270', 'cliassssnto', '398234', 'Clinto Skoda', '234 985 2093', '0000-00-00', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'clinto15@yahoo.com', '+880174348756', '4', '2022-12-25', 15, 0, 804, 1),
('C271', 'evaasssn', '23948', 'Tanvir Evan ', '234 985 2093', '1999-04-05', 'Uttara, Dhaka', 'evan@gmail.com', '0124823482', '4', '2022-12-03', 15, 0, 804, 1),
('C272', 'laassssila', 'w2354', 'Laila Alim', '3249 8645 0239', '1994-03-20', 'Dhaka, Bangladesh.', 'alim.laila@yahoo.com', '0192374749', '4', '2022-12-24', 15, 0, 804, 1),
('C273', 'raassssina', '340985', 'Raina Sekhar ', '177 787 1233', '1993-03-09', 'Dhaka, Bangladesh.', 'raina@gmail.com', '0129372349', '3', '2022-12-17', 15, 0, 804, 1),
('C274', 'koassssli', '09842', 'Koli Funky', '234 985 2093', '1999-04-03', 'Uttara, Dhaka', 'koli@gmail.com', '01219347555', '5', '2022-12-06', 15, 0, 804, 1),
('C275', 'rabausssn', '98733', 'Rabun Mawla', '3245 3245 4235', '2008-05-06', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'rabun@yahoo.com', '+8801743487211', '4', '2022-12-13', 15, 0, 804, 1),
('C276', 'Mawalssssa ', '394578', 'Mawla Abdul Haque ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'mawla.dhaka@gmail.com', '01823483434', '5', '2022-12-20', 15, 0, 804, 1),
('C277', 'Rahmsaan ', '78564', 'Rahman Abdullah ', '3245 3245 4235', '1998-07-06', 'Uttara, Dhaka', 'rahman.nafiz5@yahoo.com', '+8801743487211', '4', '2022-12-23', 15, 0, 804, 1),
('C278', 'alosssam', '39845', 'Alom Haque ', '234 985 2093', '0000-00-00', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'alom@yahoo.com', '+880174234235', '5', '2022-12-24', 15, 0, 804, 1),
('C279', 'Naisssam', '04563', 'Naim Rahman', '456 456 7890', '2008-03-04', 'House # 2/A, Road #4, Block # E, Palashpur, Kadamtoli, Shonir-Akhra, Jatrabari, Dhaka.', 'naim.rahman@yahoo.com', '+880174343567', '4', '2022-12-24', 15, 0, 804, 1),
('C280', 'arssssjait', '90834', 'Arjit Mandu', '275 923 2348', '0000-00-00', 'Uttara, Dhaka', 'arjit@yahoo.com', '+88017092385', '5', '2022-12-14', 15, 0, 804, 1),
('C281', 'sofasssssia', '23984', 'Sofia Ali ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'sofialae@yahoo.com', '01844839389', '5', '2022-12-14', 15, 0, 804, 1),
('C282', 'esasssau', 'i-234', 'Esu Islam ', '234 985 2093', '0000-00-00', 'Dhaka, Bangladesh.', 'esu@yahoo.com', '+88017494564', '4', '2022-12-04', 15, 0, 804, 1),
('C283', 'Abrsssaud', '089234', 'Abrub Rob ', '3245 3245 4235', '0000-00-00', 'Uttara, Dhaka', 'abraham@yahoo.com', '014890349', '5', '2022-12-06', 15, 0, 804, 1),
('C284', 'abdssssaaaur ', '93454`', 'Abdur Rahman ', '234 985 2093', '1985-03-04', 'Dhaka, Bangladesh.', 'abraham@yahoo.com', '012545876', '4', '2022-12-22', 15, 0, 804, 1);

--
-- Triggers `client`
--
DELIMITER $$
CREATE TRIGGER `C_ID` BEFORE INSERT ON `client` FOR EACH ROW BEGIN
  INSERT INTO Customer_seq VALUES (NULL);
  SET NEW.id = CONCAT('C', LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_seq`
--

CREATE TABLE `customer_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_seq`
--

INSERT INTO `customer_seq` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(76),
(77),
(78),
(79),
(80),
(81),
(82),
(83),
(84),
(85),
(86),
(87),
(88),
(89),
(90),
(91),
(92),
(93),
(94),
(95),
(96),
(97),
(98),
(99),
(100),
(101),
(102),
(103),
(104),
(105),
(106),
(107),
(108),
(109),
(110),
(111),
(112),
(113),
(114),
(115),
(116),
(117),
(118),
(119),
(120),
(121),
(122),
(123),
(124),
(125),
(126),
(127),
(128),
(129),
(130),
(131),
(132),
(133),
(134),
(135),
(136),
(137),
(138),
(139),
(140),
(141),
(142),
(143),
(144),
(145),
(146),
(147),
(148),
(149),
(150),
(151),
(152),
(153),
(154),
(155),
(156),
(157),
(158),
(159),
(160),
(161),
(162),
(163),
(164),
(165),
(166),
(167),
(168),
(169),
(170),
(171),
(172),
(173),
(174),
(175),
(176),
(177),
(178),
(179),
(180),
(181),
(182),
(183),
(184),
(185),
(186),
(187),
(188),
(189),
(190),
(191),
(192),
(193),
(194),
(195),
(196),
(197),
(198),
(199),
(200),
(201),
(202),
(203),
(204),
(205),
(206),
(207),
(208),
(209),
(210),
(211),
(212),
(213),
(214),
(215),
(216),
(217),
(218),
(219),
(220),
(221),
(222),
(223),
(224),
(225),
(226),
(227),
(228),
(229),
(230),
(231),
(232),
(233),
(234),
(235),
(236),
(237),
(238),
(239),
(240),
(241),
(242),
(243),
(244),
(245),
(246),
(247),
(248),
(249),
(250),
(251),
(252),
(253),
(254),
(255),
(256),
(257),
(258),
(259),
(260),
(261),
(262),
(263),
(264),
(265),
(266),
(267),
(268),
(269),
(270),
(271),
(272),
(273),
(274),
(275),
(276),
(277),
(278),
(279),
(280),
(281),
(282),
(283),
(284);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `amt` int(11) NOT NULL,
  `by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `finalinvoice`
--

CREATE TABLE `finalinvoice` (
  `invnumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `duedate` date NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `totalamount` varchar(255) NOT NULL,
  `vatamount` varchar(255) NOT NULL,
  `totaldue` varchar(255) NOT NULL,
  `totalpaid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finalinvoice`
--

INSERT INTO `finalinvoice` (`invnumber`, `username`, `date`, `duedate`, `subtotal`, `totalamount`, `vatamount`, `totaldue`, `totalpaid`) VALUES
('INV_0035', 'Rajib', '0000-00-00', '0000-00-00', '370440', '370440 BDT', '0', '', ''),
('INV_0036', 'Rajib', '2022-12-01', '2022-12-31', '590500', '590500 BDT', '0', '', ''),
('INV_0037', 'Asad', '0000-00-00', '0000-00-00', '871000', '871000 BDT', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invnumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `item` varchar(255) NOT NULL,
  `itemqty` varchar(255) NOT NULL,
  `itemprice` varchar(255) NOT NULL,
  `totalamount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invnumber`, `username`, `startdate`, `enddate`, `item`, `itemqty`, `itemprice`, `totalamount`) VALUES
(57, 'INV_0035', 'Rajib', '2022-12-01', '2022-12-31', 'IIG', '980', '378', '370440'),
(58, 'INV_0035', 'Rajib', '0000-00-00', '0000-00-00', 'IIG', '', '', ''),
(59, 'INV_0036', 'Rajib', '2023-01-01', '2023-01-31', 'IIG', '1200', '350', '420000'),
(62, 'INV_0036', 'Rajib', '2022-12-01', '2022-12-31', 'BDIX', '200', '35', '7000'),
(63, 'INV_0037', 'Asad', '2022-12-01', '2022-12-31', 'GGC', '3000', '35', '105000'),
(64, 'INV_0037', 'Asad', '2022-12-01', '2022-12-31', 'FNA', '2300', '50', '115000'),
(66, 'INV_0037', 'Asad', '2022-12-01', '2022-12-31', 'IIG', '1800', '350', '630000');

--
-- Triggers `invoice`
--
DELIMITER $$
CREATE TRIGGER `UpdateTotalBill Amount` AFTER INSERT ON `invoice` FOR EACH ROW BEGIN
  UPDATE `reseller` SET `totalbill` = (SELECT SUM(totalamount) from   invoice,reseller WHERE invoice.username=reseller.username);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UpdateTotalBill Amount After Delete` AFTER DELETE ON `invoice` FOR EACH ROW BEGIN
  UPDATE `reseller` SET `totalbill` = (SELECT SUM(totalamount) from   invoice,reseller WHERE invoice.username=reseller.username);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UpdateTotalBill Amount After Update` AFTER UPDATE ON `invoice` FOR EACH ROW BEGIN
  UPDATE `reseller` SET `totalbill` = (SELECT SUM(totalamount) from   invoice,reseller WHERE invoice.username=reseller.username);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_seq`
--

CREATE TABLE `invoice_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_seq`
--

INSERT INTO `invoice_seq` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `name`, `speed`, `rate`) VALUES
(1, '6 Mbps', '6', '525'),
(2, '10 Mbps', '10', '700'),
(3, '15 Mbps', '15', '840'),
(4, '25 Mbps', '25', '1050'),
(5, '30 Mbps', '30', '1260'),
(6, '50 Mbps', '50', '1575'),
(8, '100 Mbps', '100', '4200'),
(9, '110 Mbps', '110', '4500');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`) VALUES
(1, 'IIG'),
(2, 'GGC'),
(3, 'FNA'),
(4, 'BDIX'),
(5, 'NTTN');

-- --------------------------------------------------------

--
-- Table structure for table `reseller`
--

CREATE TABLE `reseller` (
  `id` varchar(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `cell` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `totalbill` varchar(255) DEFAULT NULL,
  `totalpaid` varchar(255) DEFAULT NULL,
  `totaldue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reseller`
--

INSERT INTO `reseller` (`id`, `username`, `password`, `name`, `nid`, `dob`, `cell`, `email`, `address`, `totalbill`, `totalpaid`, `totaldue`) VALUES
('R016', 'Asad', '12345', 'Asaduzzaman', '198', '1988-09-05', '0177777777777', 'aknetworksbd@gmail.com', 'Madaripur,Kalkini', '1647440', NULL, NULL),
('R105', 'Rajib', '786786', 'Rajib Khan', '', '0000-00-00', '', '', '', '1647440', NULL, NULL),
('R106', 'ahad', '786786', 'Ahad', '', '0000-00-00', '', '', '', '1647440', NULL, NULL),
('R107', 'mithil', '786786', 'Mithil', '', '0000-00-00', '', '', '', '1647440', NULL, NULL),
('R108', 'Kanak', '12345', 'Kanak', '', '0000-00-00', '', '', '', '1647440', NULL, NULL),
('R109', 'Sojol', '45678', 'Sojol', '', '0000-00-00', '', '', '', '1647440', NULL, NULL),
('R110', 'Istiq', '786786', '', '', '0000-00-00', '', '', '', '1647440', NULL, NULL);

--
-- Triggers `reseller`
--
DELIMITER $$
CREATE TRIGGER `R_ID` BEFORE INSERT ON `reseller` FOR EACH ROW BEGIN
  INSERT INTO Customer_seq VALUES (NULL);
  SET NEW.id = CONCAT('R', LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `id` int(11) NOT NULL,
  `invnumber` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `receivedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`id`, `invnumber`, `date`, `amount`, `receivedby`) VALUES
(1, 'INV_0018', '2022-12-24', '50000', 'admin'),
(4, 'INV_0018', '2022-12-24', '500000', 'shanto'),
(5, 'INV_0018', '2022-12-24', '100000', 'shanto'),
(6, 'INV_0018', '2022-12-24', '40000', 'shanto'),
(7, 'INV_0018', '2022-12-24', '50000', 'shanto');

--
-- Triggers `transection`
--
DELIMITER $$
CREATE TRIGGER `UpdateTotalPaid` AFTER INSERT ON `transection` FOR EACH ROW BEGIN

UPDATE `reseller` SET `totalpaid` = (SELECT SUM(amount) from   transection,reseller WHERE reseller.username in (SELECT i.username FROM transection t,invoice i GROUP BY t.invnumber=i.invnumber));

UPDATE `reseller` SET `totaldue` = (SELECT SUM(totalbill-totalpaid) FROM reseller) WHERE reseller.id;

END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UpdateTotalPaid-DELETE` AFTER DELETE ON `transection` FOR EACH ROW BEGIN
UPDATE `reseller` SET `totalpaid` = (SELECT SUM(amount) from   transection,reseller WHERE reseller.username in (SELECT i.username FROM transection t,invoice i GROUP BY t.invnumber=i.invnumber));
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `UpdateTotalPaid-UPDATE` AFTER UPDATE ON `transection` FOR EACH ROW BEGIN
UPDATE `reseller` SET `totalpaid` = (SELECT SUM(amount) from   transection,reseller WHERE reseller.username in (SELECT i.username FROM transection t,invoice i GROUP BY t.invnumber=i.invnumber));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cell` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `name`, `email`, `cell`, `type`) VALUES
('A011', 'Sanjida', '786786', 'Sanjida Islamm', 'sanjida.islam20@northsouth.edu', '01310458645', 'admin'),
('A013', 'admin', '786786', '', '', '', 'admin'),
('A014', 'Shanto', '786786', 'Wahiduzzaman Shanto', 'aknetworks2015@gmail.com', '01754092905', 'admin'),
('A015', 'Mominul', '123456', 'Mominul Islam', '', '', 'admin');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `A_ID` BEFORE INSERT ON `user` FOR EACH ROW BEGIN
  INSERT INTO Customer_seq VALUES (NULL);
  SET NEW.uid = CONCAT('A', LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `customer_seq`
--
ALTER TABLE `customer_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalinvoice`
--
ALTER TABLE `finalinvoice`
  ADD PRIMARY KEY (`invnumber`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_seq`
--
ALTER TABLE `invoice_seq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reseller`
--
ALTER TABLE `reseller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_seq`
--
ALTER TABLE `customer_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `invoice_seq`
--
ALTER TABLE `invoice_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
