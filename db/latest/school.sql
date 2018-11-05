-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 02:56 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_prev_exp_modal`
--

CREATE TABLE `emp_prev_exp_modal` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_prev_exp_modal`
--

INSERT INTO `emp_prev_exp_modal` (`id`, `title`) VALUES
(1, 'Employee Previous Experience Information');

-- --------------------------------------------------------

--
-- Table structure for table `hr_job_app_img`
--

CREATE TABLE `hr_job_app_img` (
  `id` int(11) NOT NULL,
  `job_app_id` int(255) NOT NULL,
  `photo` varchar(2000) NOT NULL,
  `signature` varchar(2000) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_job_app_img`
--

INSERT INTO `hr_job_app_img` (`id`, `job_app_id`, `photo`, `signature`, `status`) VALUES
(1, 1, 'Desert.jpg', 'Tulips.jpg', 1),
(2, 1, 'Desert.jpg', 'Penguins.jpg', 1),
(3, 1, 'Desert.jpg', 'Hydrangeas.jpg', 1),
(4, 39, 'Chrysanthemum.jpg', 'Koala.jpg', 1),
(5, 44, 'Chrysanthemum.jpg', '', 1),
(6, 46, '', '', 1),
(7, 48, 'Penguins.jpg', '', 1),
(8, 51, '27000384428.jpeg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_circular`
--

CREATE TABLE `job_circular` (
  `id` int(11) NOT NULL,
  `job` varchar(255) NOT NULL,
  `vacancy` varchar(255) NOT NULL,
  `job_context` varchar(255) NOT NULL,
  `job_des_resp` varchar(255) NOT NULL,
  `job_nature` varchar(255) NOT NULL,
  `edu_req` varchar(255) NOT NULL,
  `exp_req` varchar(255) NOT NULL,
  `job_req` varchar(255) NOT NULL,
  `job_loca` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `validation` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_circular`
--

INSERT INTO `job_circular` (`id`, `job`, `vacancy`, `job_context`, `job_des_resp`, `job_nature`, `edu_req`, `exp_req`, `job_req`, `job_loca`, `salary`, `validation`, `others`, `status`) VALUES
(5, 'Officer', '5', 'Any other jobs as per management\'s requirement.', 'Able to develop software by using: ASP.Net, Java Script, MVC 5, DXTML', 'Full Time', 'Masters in CSC', 'At least 1 Years', 'Software Development in ASP.Net and report development in RDLC', 'Dhaka', '25000-35000', 'June 30, 2017', 'Medical allowance', 1);

-- --------------------------------------------------------

--
-- Table structure for table `modal`
--

CREATE TABLE `modal` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modal`
--

INSERT INTO `modal` (`id`, `title`) VALUES
(1, 'Modal Header');

-- --------------------------------------------------------

--
-- Table structure for table `school_acc_cashbook`
--

CREATE TABLE `school_acc_cashbook` (
  `id` int(11) NOT NULL,
  `date` varchar(55) DEFAULT NULL,
  `description` varchar(55) DEFAULT NULL,
  `reference` varchar(55) DEFAULT NULL,
  `ammount` int(11) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_acc_cashbook`
--

INSERT INTO `school_acc_cashbook` (`id`, `date`, `description`, `reference`, `ammount`, `type`, `status`) VALUES
(1, '23/06/16', 'transport', 'bypion', 500, 'Select type', 1),
(2, '12/4/17', 'dfgsdgd', 'sdfgsdg', 234, 'Credit', 1),
(7, '12/4/17', 'dsfgsyttryhrtfh', 'cvbcxfgertreter', 7545, 'Debit', 1),
(8, '23/07/17', 'sadfsfgghgh', 'hgfhjfg', 1500, 'Debit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_acc_ledger`
--

CREATE TABLE `school_acc_ledger` (
  `id` int(11) NOT NULL,
  `dates` varchar(155) DEFAULT NULL,
  `description` varchar(155) DEFAULT NULL,
  `referance` varchar(155) DEFAULT NULL,
  `debit` int(11) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_acc_ledger`
--

INSERT INTO `school_acc_ledger` (`id`, `dates`, `description`, `referance`, `debit`, `credit`, `status`) VALUES
(1, '25/07/17', 'transports', 'bypion', 0, 670, 1),
(3, '2017-07-20', ' xc z', 'dsfsdfs', 122, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_acc_trailbalance`
--

CREATE TABLE `school_acc_trailbalance` (
  `id` int(11) NOT NULL,
  `serialno` varchar(55) DEFAULT NULL,
  `description` varchar(55) DEFAULT NULL,
  `reference` varchar(55) DEFAULT NULL,
  `debitamm` int(11) DEFAULT NULL,
  `creditam` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_acc_trailbalance`
--

INSERT INTO `school_acc_trailbalance` (`id`, `serialno`, `description`, `reference`, `debitamm`, `creditam`, `status`) VALUES
(1, '1', 'revenu', 'income', 0, 500, 1),
(2, '2', 'dfgdfg', 'gfdhgdfgh', 500, 0, 1),
(5, '8', 'fgthfghfghfgh', 'rtyrtyrty', 342, 0, 1),
(8, '', 'aaa', 'aaa', 0, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_employee_leave`
--

CREATE TABLE `school_employee_leave` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `approved_status` varchar(255) NOT NULL,
  `total_leave` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_employee_leave`
--

INSERT INTO `school_employee_leave` (`id`, `employee_id`, `leave_type`, `leave_from`, `leave_to`, `approved_status`, `total_leave`, `status`) VALUES
(4, 7, 'general', '2017-07-01', '2017-07-08', 'pending', 0, 1),
(5, 8, 'casuel', '2017-07-01', '2017-07-15', 'pending', 0, 1),
(6, 9, 'suck', '2017-07-13', '2017-07-11', 'active', 0, 1),
(7, 9, 'casuel', '2017-08-01', '2017-08-03', 'pending', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_designation`
--

CREATE TABLE `school_emp_designation` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_designation`
--

INSERT INTO `school_emp_designation` (`id`, `emp_id`, `designation`, `status`) VALUES
(12, 9, 'principal', '1'),
(13, 8, 'Vice-principal', '1'),
(15, 10, 'General Teacher', '1'),
(16, 7, 'Accountant', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_edu_info`
--

CREATE TABLE `school_emp_edu_info` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `education_type` varchar(255) NOT NULL,
  `passing_year` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_edu_info`
--

INSERT INTO `school_emp_edu_info` (`id`, `employee_id`, `education_type`, `passing_year`, `result`, `institute`, `status`) VALUES
(1, '7', 'MSC', '2010', '1st', 'hgfuh', 1),
(4, '8', 'MSC', '2002', '3rd', 'gfdhfg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_edu_info_modal`
--

CREATE TABLE `school_emp_edu_info_modal` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_edu_info_modal`
--

INSERT INTO `school_emp_edu_info_modal` (`id`, `title`) VALUES
(1, 'Employee Education Information');

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_personal_info`
--

CREATE TABLE `school_emp_personal_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `parmanent_address` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_personal_info`
--

INSERT INTO `school_emp_personal_info` (`id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `religion`, `sex`, `parmanent_address`, `present_address`, `national_id`, `email`, `contact`, `status`) VALUES
(7, 'gfhghgdh', 'dfhdfhgd', 'fghjfd', '1999-07-12', 'buddho', 'female', 'hjfffffffffffff', 'ghddddddddddddddddd', '23454344655', 'sajibdsafgjhk@ghj', '332542', '1'),
(8, 'gfhghgdh', 'dfhdfhgd', 'fghjfd', '1999-07-12', 'buddho', 'female', 'hjfffffffffffff', 'ghddddddddddddddddd', '23454344655', 'sajibdsafgjhk@ghj', '332542', '1'),
(9, 'gfhghgdh', 'dfhdfhgd', 'fghjfd', '1999-07-12', 'buddho', 'female', 'hjfffffffffffff', 'ghddddddddddddddddd', '23454344655', 'sajibdsafgjhk@ghj', '332542', '1'),
(10, 'gfhghgdh', 'dfhdfhgd', 'fghjfd', '1999-07-12', 'buddho', 'female', 'hjfffffffffffff', 'ghddddddddddddddddd', '23454344655', 'sajibdsafgjhk@ghj', '332542', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_prev_exp`
--

CREATE TABLE `school_emp_prev_exp` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `institute_name` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL,
  `resignation_date` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `reason` varchar(600) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `reference_contact` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_prev_exp`
--

INSERT INTO `school_emp_prev_exp` (`id`, `employee_id`, `institute_name`, `joining_date`, `resignation_date`, `salary`, `reason`, `reference`, `reference_contact`, `status`) VALUES
(1, '7', 'ct', '2017-07-07', '2017-07-07', 500000, 'Dhaka', 'kasem', '25222222222', 1),
(7, '8', 'dhaka', '2017-07-12', '2017-07-13', 4444, 'ghfgfdh', 'hsg', '5654500', 1),
(9, '9', 'khulna', '2017-07-07', '2017-07-19', 5234, 'rewtfgsd', 'grfefsdgf', '324254345233', 1),
(14, '10', 'dhgf', '2017-07-05', '2017-07-24', 5000, 'jdhgf', 'hjugkjh', '5432132432', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_reference_info`
--

CREATE TABLE `school_emp_reference_info` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_reference_info`
--

INSERT INTO `school_emp_reference_info` (`id`, `employee_id`, `name`, `designation`, `address`, `email`, `contact`, `status`) VALUES
(2, '7', 'liton', 'ceo', 'dhaka', 'liton@gmail.com', '67436', 1),
(5, '8', 'kashem', 'wd', 'gfdyujgfkjhbkj', 'fdg@gfd.hgf', '453543', 1),
(12, '10', 'liton', 'ceo', 'htruyhdu', 'liton@gmail.com', '453543', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_salary_info`
--

CREATE TABLE `school_emp_salary_info` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `house_rent` varchar(255) NOT NULL,
  `convince` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `provident_fund` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_salary_info`
--

INSERT INTO `school_emp_salary_info` (`id`, `designation`, `basic_salary`, `house_rent`, `convince`, `medical`, `provident_fund`, `status`) VALUES
(57, 'principal', '50000', '2%', '2%', '2%', '1%', 1),
(58, 'Vice-principal', '2222', '2%', '3%', '4%', '5%', 1),
(59, 'General Teacher', '15000', '5%', '3%', '5%', '5%', 1),
(60, 'Accountant', '20000', '5%', '5%', '5%', '5%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_emp_salary_status`
--

CREATE TABLE `school_emp_salary_status` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(69) NOT NULL,
  `basic_salary` varchar(255) NOT NULL,
  `house_rent` varchar(255) NOT NULL,
  `convince` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `provident_fund` varchar(255) NOT NULL,
  `gross` varchar(255) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL,
  `action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_emp_salary_status`
--

INSERT INTO `school_emp_salary_status` (`id`, `employee_id`, `basic_salary`, `house_rent`, `convince`, `medical`, `provident_fund`, `gross`, `month`, `year`, `status`, `action`) VALUES
(1, '9', '50000', '1000', '1000', '1000', '500', '53500', 'August', '17', '', '1'),
(2, '8', '2222', '44.44', '66.66', '88.88', '111.1', '2533.08', 'August', '17', 'on', '1'),
(3, '10', '15000', '750', '450', '750', '750', '17700', 'August', '17', 'on', '1'),
(4, '7', '20000', '1000', '1000', '1000', '1000', '24000', 'August', '17', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_font_logo`
--

CREATE TABLE `school_font_logo` (
  `id` int(11) NOT NULL,
  `school_name_first` varchar(255) NOT NULL,
  `school_name_last` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_font_logo`
--

INSERT INTO `school_font_logo` (`id`, `school_name_first`, `school_name_last`, `status`) VALUES
(1, 'Willam', 'School & College', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_font_menu`
--

CREATE TABLE `school_font_menu` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `menu_one` varchar(255) NOT NULL,
  `menu_two` varchar(255) NOT NULL,
  `menu_three` varchar(255) NOT NULL,
  `menu_four` varchar(255) NOT NULL,
  `menu_five` varchar(255) NOT NULL,
  `dropdown` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_font_menu`
--

INSERT INTO `school_font_menu` (`id`, `link`, `menu_one`, `menu_two`, `menu_three`, `menu_four`, `menu_five`, `dropdown`, `status`) VALUES
(1, '#', 'Home', 'Enquery', 'History', 'About', 'Message', 'Message', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_footer_bottom`
--

CREATE TABLE `school_footer_bottom` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_footer_bottom`
--

INSERT INTO `school_footer_bottom` (`id`, `author`, `link`, `status`) VALUES
(1, 'rosh 2018', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_front_footer`
--

CREATE TABLE `school_front_footer` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_front_footer`
--

INSERT INTO `school_front_footer` (`id`, `title`, `link`, `content`, `status`) VALUES
(1, 'Get in touch with us', '#', 'Rasel company Inc Madhubag,</br> Dhaka 01717910297</br> rasel910@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_front_footer_last_part`
--

CREATE TABLE `school_front_footer_last_part` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `link` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_front_footer_last_part`
--

INSERT INTO `school_front_footer_last_part` (`id`, `post_title`, `post`, `link`, `status`) VALUES
(1, 'Latest posts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque et pulvinar enim. Quisque at tempor ligulaNatus error sit voluptatem accusantium doloremque', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_front_footer_middle_part`
--

CREATE TABLE `school_front_footer_middle_part` (
  `id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `page_release` varchar(255) NOT NULL,
  `page_term` varchar(255) NOT NULL,
  `page_policy` varchar(255) NOT NULL,
  `page_career` varchar(255) NOT NULL,
  `page_contact` varchar(255) NOT NULL,
  `link1` text NOT NULL,
  `link2` text NOT NULL,
  `link3` text NOT NULL,
  `link4` text NOT NULL,
  `link5` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_front_footer_middle_part`
--

INSERT INTO `school_front_footer_middle_part` (`id`, `page`, `page_release`, `page_term`, `page_policy`, `page_career`, `page_contact`, `link1`, `link2`, `link3`, `link4`, `link5`, `status`) VALUES
(1, 'Pages', 'Press release', 'Terms and conditions', 'Privacy policy', 'Career center', 'Contact us', '#', '#', '#', '#', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_front_menu`
--

CREATE TABLE `school_front_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_front_menu`
--

INSERT INTO `school_front_menu` (`id`, `menu`, `link`, `type`, `status`) VALUES
(1, 'Career', '../hrs/hr_job_circular_all.php', 'fontend', 1),
(8, 'Contact', 'http://www.google.com', 'fontend', 1),
(9, 'Login', 'login.php', 'fontend', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_front_tech_des`
--

CREATE TABLE `school_front_tech_des` (
  `id` int(11) NOT NULL,
  `tech_id` int(11) NOT NULL,
  `tech_desc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_front_tech_des`
--

INSERT INTO `school_front_tech_des` (`id`, `tech_id`, `tech_desc`) VALUES
(0, 1, 'Lorem imsum dolar set ameat cosider is simplly duammy text'),
(0, 2, 'Lorem imsum dolar set ameat cosider is simplly duammy text'),
(0, 3, 'Lorem imsum dolar set ameat cosider is simplly duammy text'),
(0, 4, 'Lorem imsum dolar set ameat cosider is simplly duammy text');

-- --------------------------------------------------------

--
-- Table structure for table `school_front_tech_img`
--

CREATE TABLE `school_front_tech_img` (
  `id` int(11) NOT NULL,
  `img_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_front_tech_img`
--

INSERT INTO `school_front_tech_img` (`id`, `img_name`) VALUES
(0, '7.jpg'),
(0, '9.jpg'),
(0, '6.jpg'),
(0, '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `school_front_tech_title`
--

CREATE TABLE `school_front_tech_title` (
  `id` int(11) NOT NULL,
  `tech_id` int(11) NOT NULL,
  `tech_title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_front_tech_title`
--

INSERT INTO `school_front_tech_title` (`id`, `tech_id`, `tech_title`) VALUES
(0, 1, 'Raymond Greek'),
(0, 2, 'Deo Shibli'),
(0, 3, 'Robert Alex'),
(0, 4, 'Maria Deo');

-- --------------------------------------------------------

--
-- Table structure for table `school_job_app_edu`
--

CREATE TABLE `school_job_app_edu` (
  `id` int(11) NOT NULL,
  `job_app_id` varchar(255) NOT NULL,
  `ssc_equivalent` varchar(255) NOT NULL,
  `ssc_passing_year` varchar(255) NOT NULL,
  `ssc_subject_group` varchar(255) NOT NULL,
  `ssc_result_cgpa_gpa` varchar(255) NOT NULL,
  `ssc_school_college_institute` varchar(255) NOT NULL,
  `ssc_board` varchar(255) NOT NULL,
  `hsc_equivalent` varchar(255) NOT NULL,
  `hsc_passing_year` varchar(255) NOT NULL,
  `hsc_subject_group` varchar(255) NOT NULL,
  `hsc_result_cgpa_gpa` varchar(255) NOT NULL,
  `hsc_school_college_institute` varchar(255) NOT NULL,
  `hsc_board` varchar(255) NOT NULL,
  `graduate` varchar(255) NOT NULL,
  `graduate_passing_year` varchar(255) NOT NULL,
  `graduate_subject_group` varchar(255) NOT NULL,
  `graduate_result_cgpa_gpa` varchar(255) NOT NULL,
  `graduate_school_college_institute` varchar(255) NOT NULL,
  `graduate_board_university` varchar(255) NOT NULL,
  `post_graduate` varchar(255) NOT NULL,
  `post_graduate_passing_year` varchar(255) NOT NULL,
  `post_graduate_subject_group` varchar(255) NOT NULL,
  `post_graduate_result_cgpa_gpa` varchar(255) NOT NULL,
  `post_graduate_school_college_institute` varchar(255) NOT NULL,
  `post_graduate_board_university` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_job_app_edu`
--

INSERT INTO `school_job_app_edu` (`id`, `job_app_id`, `ssc_equivalent`, `ssc_passing_year`, `ssc_subject_group`, `ssc_result_cgpa_gpa`, `ssc_school_college_institute`, `ssc_board`, `hsc_equivalent`, `hsc_passing_year`, `hsc_subject_group`, `hsc_result_cgpa_gpa`, `hsc_school_college_institute`, `hsc_board`, `graduate`, `graduate_passing_year`, `graduate_subject_group`, `graduate_result_cgpa_gpa`, `graduate_school_college_institute`, `graduate_board_university`, `post_graduate`, `post_graduate_passing_year`, `post_graduate_subject_group`, `post_graduate_result_cgpa_gpa`, `post_graduate_school_college_institute`, `post_graduate_board_university`, `status`) VALUES
(1, '1', 'ssc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(3, '1', 'Dakhil', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(4, '38', '', '', '', '', '', '', 'Alim', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(5, '39', '\r\n        \r\n        \r\n        \r\n        \r\n        SSC        \r\n                \r\n                \r\n                \r\n                \r\n        ', '\r\n                \r\n                2010        \r\n                \r\n        ', '\r\n                \r\n                \r\n                \r\n                        \r\n        \r\n                \r\n        \r\n                \r\n        \r\n                \r\n        \r\n        ', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '', '', '\r\n\r\n\r\n\r\nA Level\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n2012\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '', '', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n        \r\n\r\n        \r\n\r\n        \r\n\r\n        \r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '', '', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '', '', 1),
(6, '50', 'SSC', '2010', 'Science', 'First', 'sdsd', 'ssd', '\r\n\r\n', '\r\n\r\n\r\n', '\r\n\r\n', '\r\n\r\n', '', '', '\r\n\r\n\r\n', '\r\n\r\n        \r\n', '\r\n\r\n\r\n', '\r\n\r\n', '', '', '\r\n\r\n\r\n', '\r\n\r\n', '\r\n\r\n\r\n', '\r\n\r\n', '', '', 1),
(8, '51', 'SSC', '2010', 'Science', 'First', 'dsad', 'asda', 'Alim', '2012', 'Commerce', 'First', 'sada', 'asda', 'BBA', '2012', 'English', 'Division', 'asdsad', 'asda', '\r\n\r\n\r\n', '\r\n\r\n', '\r\n\r\n\r\n', '\r\n\r\n', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_job_app_pr`
--

CREATE TABLE `school_job_app_pr` (
  `id` int(11) NOT NULL,
  `job_app_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `child_of_freedom_fighter` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `postal_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `home_district` varchar(255) NOT NULL,
  `home_upazila` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_job_app_pr`
--

INSERT INTO `school_job_app_pr` (`id`, `job_app_id`, `name`, `father_name`, `mother_name`, `child_of_freedom_fighter`, `birthdate`, `height`, `weight`, `postal_address`, `permanent_address`, `contact`, `email`, `home_district`, `home_upazila`, `status`) VALUES
(1, 0, 'sds', 'sdsd', 'sds', 'Yes', 'sadsad', 'asd', 'asd', '        asda', '    dsad    ', 'sdad', 'asa1@yahoo.com', 'Gazipur', 'sas', 1),
(2, 0, 'sds', 'sdsd', 'sds', 'Yes', 'sadsad', 'asd', 'asd', '        asda', '    dsad    ', 'sdad', 'asa1@yahoo.com', 'Gazipur', 'sas', 1),
(3, 0, 'aaaa', 'sdsd', 'dsd', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(4, 0, 'aaaa', 'sdsd', 'dsd', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(5, 0, 'asdsad', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(6, 0, 'asdsad', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(7, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(8, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(9, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(10, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(11, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(12, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(13, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(14, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(15, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(16, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(17, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(18, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(19, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(20, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(21, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(22, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(23, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(24, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(25, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(26, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(27, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(28, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(29, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(30, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(31, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(32, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(33, 0, 'ss', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(34, 0, 'fff', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(35, 0, 'fdf', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(36, 0, 'gfh', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(37, 0, 'gfh', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(38, 0, 'zzzz', '', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(39, 0, 'massa          ', 'kada          ', 'fgf', 'Yes', 'fgf', 'fgfh', 'fghf', '        ', '        ', 'gfhfgh', 'ah.shumon.bd@gmail.com', '', 'gh', 1),
(40, 0, ' rru', ' ', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(41, 0, ' masssssa', ' passsssa', '', ' ', '', '', '', '        ', '        ', '', '', '', '', 1),
(42, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(43, 0, ' ', ' ', '', '', '', '', '', '        ', '        ', '', '', '', '', 1),
(44, 0, ' kash', ' kosh', 'mosh', 'Yes', '4545', '565', '565', '        erte', '        ert', 'ert', 'ete@dfd.fghgh', 'Gazipur', 'rtet', 1),
(45, 0, ' ', ' ', '', '', '', '', '', '        ', '        ', '', '', '', '', 1),
(46, 0, ' ', ' ', '', '', '', '', '', '        ', '        ', '', '', '', '', 1),
(47, 0, ' ', ' ', '', '', '', '', '', '        ', '        ', '', '', '', '', 1),
(48, 0, ' abul kalam', ' abdul ronok jaaddar', 'ms. maleka', '', '', '', '', '        ', '        ', '', '', '', '', 1),
(49, 0, '7', ' Guru Kashem', 'Guru Mollika', 'Yes', '', '', '', '        ', '        ', '', '', '', '', 1),
(50, 7, ' aaaa', ' bbbb', 'bbbb', 'Yes', '', '', '', '        ', '        ', '', '', '', '', 1),
(51, 7, ' aaaa', ' bbbb', 'bbbb', 'Yes', '', '', '', '        ', '        ', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_job_app_userinfo`
--

CREATE TABLE `school_job_app_userinfo` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `job_app_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_job_app_userinfo`
--

INSERT INTO `school_job_app_userinfo` (`id`, `username`, `password`, `job_app_id`) VALUES
(1, 'aa', 'bb', 39),
(2, 'sss', 'hhh', 39),
(3, 'aa', 'bb', 5),
(4, 'aa', 'bb', 7),
(5, 'kobita', '123', 46),
(6, 'kobita', '123', 46),
(7, 'kobita', '123', 46),
(8, 'kobita', '123', 46),
(9, 'maleka', '123456', 48),
(10, 'jjj', 'jjj', 51);

-- --------------------------------------------------------

--
-- Table structure for table `school_job_circular_create_acc`
--

CREATE TABLE `school_job_circular_create_acc` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_job_circular_create_acc`
--

INSERT INTO `school_job_circular_create_acc` (`id`, `firstname`, `lastname`, `gender`, `mobile`, `email`, `catagory`, `username`, `password`, `confirm_password`, `status`) VALUES
(1, 'Masum', 'Shah', 'Male', '01827176564', 'shah.masum2@hotmail.com', 'Accounting', 'masum', '222', '222', 1),
(2, 'Masum', 'Shah', '', '01827176564', 'shah.masum2@hotmail.com', '', 'masum', 'sm27176564', 'sm27176564', 1),
(3, 'Sujon', 'Sarif', '', '01716545845', 'sujon@gmail.com', 'IT', 'sujon', '11111', '11111', 1),
(4, 'Sujon', 'Sarif', 'Male', '01716545845', 'sultana.putul2011@yahoo.com', 'Accounting', 'admin', '11111', '1111', 1),
(5, 'Rasel', 'Mahmud', 'Male', '01716545845', 'lila@gmail.com', 'Bank', 'admin', '11111', '11111', 1),
(6, 'das', 'asda', 'Female', 'adsa', 'jata@gmail.com', 'Bank', 'aaa', 'aaa', 'aaa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_job_circular_info`
--

CREATE TABLE `school_job_circular_info` (
  `id` int(11) NOT NULL,
  `job` varchar(255) NOT NULL,
  `vacancy` varchar(255) NOT NULL,
  `job_context` varchar(255) NOT NULL,
  `job_des_resp` varchar(255) NOT NULL,
  `job_nature` varchar(255) NOT NULL,
  `edu_req` varchar(255) NOT NULL,
  `exp_req` varchar(255) NOT NULL,
  `job_req` varchar(255) NOT NULL,
  `job_loca` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `validation` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_job_circular_info`
--

INSERT INTO `school_job_circular_info` (`id`, `job`, `vacancy`, `job_context`, `job_des_resp`, `job_nature`, `edu_req`, `exp_req`, `job_req`, `job_loca`, `salary`, `validation`, `others`, `status`) VALUES
(5, 'Officer', '5', 'Any other jobs as per management\'s requirement.', 'Able to develop software by using: ASP.Net, Java Script, MVC 5, DXTML', 'Full Time', 'Masters in CSC', 'At least 1 Years', 'Software Development in ASP.Net and report development in RDLC', 'Dhaka', '25000-35000', 'June 30, 2017', 'Medical allowance', 1),
(7, 'Jr./ Programmer', '2', '', 'Able to develop software by using: ASP.Net, Java Script, MVC 5, DXTML. Reporting development in RDLC & Database SQL 2014.', 'Full Time', 'B. Sc. in Computer Science & Engineering or Equivalen', '1 to 3 year(s)', 'ASP.Net and report development in RDLC ASP.Net and report development in ', 'Sylhet', '45000-70000', '15 June, 2017', 'Festival Bonus', 1),
(8, 'Teacher', '15', '', '', '', '', '', '', '', '', '', '', 1),
(9, 'Accountant', '', '', '', '', '', '', '', '', '', '', '', 1),
(10, 'Programmer', '', '', '', '', '', '', '', '', '', '', '', 1),
(11, 'Accountant', '15', 'Masum', 'Consulting student', 'Full Time', '', '', '', '', '', '', '', 1),
(12, 'Accountant', '15', 'Masum', 'Consulting student', 'Full Time', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_library_book_issue`
--

CREATE TABLE `school_library_book_issue` (
  `id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `submission_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_library_book_issue`
--

INSERT INTO `school_library_book_issue` (`id`, `book_id`, `member_id`, `issue_date`, `submission_date`) VALUES
(1, 1, 2, '2017-07-16', '2017-07-30'),
(3, 5, 214748, '2017-07-17', '2017-07-31'),
(4, 6, 4, '2017-07-17', '2017-07-28'),
(7, 5, 2, '2017-07-16', '2017-07-21'),
(9, 1, 2, '2017-07-07', '2017-07-19');

-- --------------------------------------------------------

--
-- Table structure for table `school_library_book_list`
--

CREATE TABLE `school_library_book_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `self_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_library_book_list`
--

INSERT INTO `school_library_book_list` (`id`, `book_name`, `author_name`, `isbn`, `category`, `self_no`) VALUES
(1, 'manobjomin', 'Shirshendu Mukhopadhyay', '12b54689', 'fictional book', 'b23c4'),
(3, 'mon kada', 'nisad kamal', '5451212541', 'Fictional Book', '222');

-- --------------------------------------------------------

--
-- Table structure for table `school_library_member_list`
--

CREATE TABLE `school_library_member_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type_of_member` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_library_member_list`
--

INSERT INTO `school_library_member_list` (`id`, `name`, `type_of_member`, `email`, `contact`) VALUES
(1, 'kabir', 'teacher', 'kabir@gmail.com', '23/4, rampura, dhaka'),
(2, 'simu', 'student', 'simuerabba@yahoo.com', '465/8, zigatola , dhaka'),
(4, 'Motir Maa', 'Stuff', 'motirmaa@gmail.com', 'Hajipara, dhaka'),
(6, 'sakim', 'Teacher', 'dil@gmail.com', 'Faridpur');

-- --------------------------------------------------------

--
-- Table structure for table `school_login`
--

CREATE TABLE `school_login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_login`
--

INSERT INTO `school_login` (`id`, `username`, `password`, `type`, `status`) VALUES
(1, 'kobita', '123', 'job applicant', 1),
(2, 'kobita1', '123', 'job applicant', 1),
(3, 'kobita2', '123', 'job applicant', 1),
(4, 'maleka', '123456', 'job applicant', 1),
(5, 'jjj', 'jjj', 'job applicant', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_online_exam_login_reg`
--

CREATE TABLE `school_online_exam_login_reg` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `approval_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_online_exam_login_reg`
--

INSERT INTO `school_online_exam_login_reg` (`id`, `student_id`, `username`, `password`, `approval_status`) VALUES
(3, '1207516', 'shohag', 'e10adc3949ba59abbe56e057f20f883e', 'Pending'),
(4, '120745', 'Sujon', 'e10adc3949ba59abbe56e057f20f883e', 'Pending'),
(6, '1', 'modon', '123456', 'Pending'),
(7, '1207', 'shohag2', 'e10adc3949ba59abbe56e057f20f883e', 'Pending'),
(15, '1204', 'shohag', 'e10adc3949ba59abbe56e057f20f883e', 'Pending'),
(16, '420', 'shohag', 'e10adc3949ba59abbe56e057f20f883e', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `school_online_mcq_class`
--

CREATE TABLE `school_online_mcq_class` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_online_mcq_class`
--

INSERT INTO `school_online_mcq_class` (`sub_id`, `sub_name`) VALUES
(1, 'Six'),
(2, 'Seven'),
(3, 'Eight'),
(4, 'Nine'),
(5, 'Ten');

-- --------------------------------------------------------

--
-- Table structure for table `school_online_mcq_details_result`
--

CREATE TABLE `school_online_mcq_details_result` (
  `id` int(11) NOT NULL,
  `exam_id` varchar(100) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `correct_ans` varchar(100) NOT NULL,
  `wrong_ans` varchar(100) NOT NULL,
  `not_ans` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `full_marks` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` int(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_online_mcq_details_result`
--

INSERT INTO `school_online_mcq_details_result` (`id`, `exam_id`, `student_id`, `correct_ans`, `wrong_ans`, `not_ans`, `total`, `full_marks`, `date`, `class`, `subject`, `status`) VALUES
(27, '8132', '1207516', '0', '3', '1', '0', '50', 'date(\"Y/m/d\")', 'Ten', 'Computer', 1),
(28, '1506', '1207516', '1', '1', '3', '1', '50', 'date(\"Y/m/d\")', 'Ten', 'Math', 1),
(29, '29744', '1207516', '0', '0', '4', '0', '50', 'date(\"Y/m/d\")', 'Ten', 'Computer', 1),
(30, '14315', '1207516', '1', '0', '4', '1', '50', '2017/07/22', 'Ten', 'Math', 1),
(31, '6472', '1207516', '1', '1', '2', '1', '50', '2017/07/22', 'Ten', 'Computer', 1),
(32, '404', '420', '2', '1', '1', '2', '50', '2017/08/09', '', 'Computer', 1),
(33, '16734', '1207', '2', '3', '0', '2', '50', '2017/08/10', '', 'Math', 1),
(34, '23883', '', '0', '0', '4', '0', '50', '2017/08/10', '', 'Computer', 1),
(35, '17192', '', '0', '0', '4', '0', '50', '2017/08/10', '', 'Computer', 1),
(36, '15833', '', '1', '1', '0', '1', '50', '2017/08/11', '', 'Math', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_online_mcq_que`
--

CREATE TABLE `school_online_mcq_que` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_online_mcq_que`
--

INSERT INTO `school_online_mcq_que` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(16, 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2),
(17, 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3),
(18, 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1),
(19, 8, 'Which of the follwing contexts are available in the add watch window?', 'Project', 'Module', 'Procedure', 'All', 4),
(20, 12, 'Which window will allow you to halt the execution of your code when a variable changes?', 'The call stack window', 'The immedite window', 'The locals window', 'The watch window', 4),
(22, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(23, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(24, 9, 'What function does the TabStop property on a command button perform?', 'It determines whether the button can get the focus', 'If set to False it disables the Tabindex property.', 'It determines the order in which the button will receive the focus', 'It determines if the access key swquence can be used', 1),
(25, 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4),
(26, 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3),
(27, 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4),
(28, 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3),
(29, 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2),
(30, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 2),
(31, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_online_mcq_result`
--

CREATE TABLE `school_online_mcq_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_online_mcq_result`
--

INSERT INTO `school_online_mcq_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('raj', 8, '0000-00-00', 3),
('raj', 9, '0000-00-00', 3),
('raj', 8, '0000-00-00', 1),
('ashish', 10, '0000-00-00', 3),
('ashish', 9, '0000-00-00', 2),
('ashish', 10, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('ankur', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 1),
('raj', 9, '0000-00-00', 2),
('raj', 8, '0000-00-00', 0),
('raj', 10, '0000-00-00', 2),
('raj', 8, '0000-00-00', 3),
('raj', 8, '0000-00-00', 2),
('raj', 8, '0000-00-00', 1),
('raj', 8, '0000-00-00', 3),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 1),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 4),
('raj', 8, '0000-00-00', 2),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 2),
('raj', 11, '0000-00-00', 0),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('raj', 8, '0000-00-00', 2),
('raj', 10, '0000-00-00', 1),
('', 9, '0000-00-00', 0),
('raj', 11, '0000-00-00', 0),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 3),
('raj', 9, '0000-00-00', 1),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 4),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 3),
('raj', 8, '0000-00-00', 2),
('raj', 8, '0000-00-00', 1),
('raj', 11, '0000-00-00', 0),
('raj', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 3),
('raj', 8, '0000-00-00', 2),
('raj', 8, '0000-00-00', 2),
('raj', 9, '0000-00-00', 0),
('raj', 9, '0000-00-00', 1),
('raj', 8, '0000-00-00', 2),
('raj', 8, '0000-00-00', 2),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 3),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 2),
('', 10, '0000-00-00', 2),
('', 9, '0000-00-00', 0),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 1),
('', 9, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 2),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 2),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 1),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 11, '0000-00-00', 1),
('', 10, '0000-00-00', 2),
('', 11, '0000-00-00', 0),
('', 10, '0000-00-00', 4),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 2),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 1),
('', 9, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 11, '0000-00-00', 1),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 9, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 9, '0000-00-00', 0),
('', 9, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 9, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 11, '0000-00-00', 2),
('', 8, '0000-00-00', 3),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 3),
('', 9, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 0),
('', 11, '0000-00-00', 2),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 1),
('', 11, '0000-00-00', 0),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 11, '0000-00-00', 1),
('', 9, '0000-00-00', 0),
('', 10, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 9, '0000-00-00', 0),
('', 10, '0000-00-00', 2),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 1),
('', 9, '0000-00-00', 0),
('', 10, '0000-00-00', 2),
('', 9, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 10, '0000-00-00', 2),
('', 8, '0000-00-00', 0),
('', 10, '0000-00-00', 4),
('', 10, '0000-00-00', 2),
('', 10, '0000-00-00', 3),
('', 8, '0000-00-00', 0),
('', 10, '0000-00-00', 4),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 10, '0000-00-00', 1),
('', 8, '0000-00-00', 0),
('', 10, '0000-00-00', 1),
('', 8, '0000-00-00', 1),
('', 8, '0000-00-00', 2),
('', 10, '0000-00-00', 2),
('', 8, '0000-00-00', 0),
('', 8, '0000-00-00', 0),
('', 10, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_online_mcq_student_ans`
--

CREATE TABLE `school_online_mcq_student_ans` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school_online_mcq_sub`
--

CREATE TABLE `school_online_mcq_sub` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_online_mcq_sub`
--

INSERT INTO `school_online_mcq_sub` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(8, 1, 'English', '3'),
(9, 1, 'Computer', '5'),
(10, 2, 'Math', '5'),
(11, 4, 'English', '5');

-- --------------------------------------------------------

--
-- Table structure for table `school_requirement`
--

CREATE TABLE `school_requirement` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_requirement`
--

INSERT INTO `school_requirement` (`id`, `email`, `type`, `date`, `description`, `status`) VALUES
(2, 'arman@gmail.com', 'Student', '12', 'Mouse dose not workproperly', 1),
(3, 'mehedidc2', 'Student', '2017-07-11', 't566', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_slide_show`
--

CREATE TABLE `school_slide_show` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_slide_show`
--

INSERT INTO `school_slide_show` (`id`, `pic`, `status`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 1),
(3, '3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_std_fee`
--

CREATE TABLE `school_std_fee` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_std_fee`
--

INSERT INTO `school_std_fee` (`id`, `student_id`, `type`, `amount`, `date`, `status`) VALUES
(4, 3, 'Admission', '4000', '2017-07-18', 1),
(5, 4, 'Exam', '600', '2017-07-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_student_parents_info`
--

CREATE TABLE `school_student_parents_info` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `monthly_income` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_student_parents_info`
--

INSERT INTO `school_student_parents_info` (`id`, `student_id`, `father_name`, `mother_name`, `contact`, `email`, `address`, `profession`, `monthly_income`, `status`) VALUES
(1, 9, 'ggggggggggggg', 'dsss', '12121212', 'ajj@gmail.com', 'cvcvcv', 'dfdfdfdfd', '525252', 1),
(2, 10, 'fgfgf', 'fgfgf', '1212121212', 'fgff@gfg.hf', 'hfghfh', 'fghfghfg', 'fghfghfg', 1),
(4, 11, 'aaa', 'sssdd', '54554', 'ah.shumon.bd@gmail.com', 'jjjjj', 'kkkkk', 'kkkkk', 1),
(22, 11, 'sss', 'sss', '0', 'sdfsadf@gmail.com', 'ssss', 'ss', '223232', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_student_personal_info`
--

CREATE TABLE `school_student_personal_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `class` int(50) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_student_personal_info`
--

INSERT INTO `school_student_personal_info` (`id`, `name`, `date_of_birth`, `photo`, `class`, `shift`, `status`) VALUES
(9, 'munni', '01/02/2009', '6b653d7baa64fe38e5aad94d95824acb.jpg', 2, 'morning', 1),
(10, 'prerona', '01/02/2009', '6b653d7baa64fe38e5aad94d95824acb.jpg', 3, 'day', 1),
(11, 'rekha', '10/12/2006', 'download (1).jpg', 3, 'day', 1),
(12, 'sridevi', '10/12/2006', 'download.jpg', 2, 'morning', 1),
(13, 'suchitra', '11/12/12', 'images.jpg', 3, 'morning', 1),
(14, 'dfdf', '112', 'AAmKfuK.jpg', 3, 'day', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_student_prev_education_info`
--

CREATE TABLE `school_student_prev_education_info` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `previous_school` varchar(255) NOT NULL,
  `reason_to_change_school` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_student_prev_education_info`
--

INSERT INTO `school_student_prev_education_info` (`id`, `student_id`, `previous_school`, `reason_to_change_school`, `status`) VALUES
(1, '9', 'vnc', 'bfsbcxvx', 1),
(3, '10', 'bxsbc', 'hgfjhbkj', 1),
(4, '11', 'nhhgnm', 'vbcmb ,m', 1),
(5, '12', 'gfdsagdf', 'gfkjhbkjhg,jfhg', 1),
(6, '10', 'ee', 'ere', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_stu_prev_edu_modal`
--

CREATE TABLE `school_stu_prev_edu_modal` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_stu_prev_edu_modal`
--

INSERT INTO `school_stu_prev_edu_modal` (`id`, `title`) VALUES
(1, 'Educational Information');

-- --------------------------------------------------------

--
-- Table structure for table `school_subject_heading`
--

CREATE TABLE `school_subject_heading` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_subject_heading`
--

INSERT INTO `school_subject_heading` (`id`, `course`, `details`, `status`) VALUES
(1, 'COURSE', 'DETAILS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_subject_info`
--

CREATE TABLE `school_subject_info` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `subject4` varchar(255) NOT NULL,
  `subject5` varchar(255) NOT NULL,
  `subject6` varchar(255) NOT NULL,
  `subject7` varchar(255) NOT NULL,
  `subject8` varchar(255) NOT NULL,
  `subject9` varchar(255) NOT NULL,
  `subject10` varchar(255) NOT NULL,
  `subject11` varchar(255) NOT NULL,
  `subject12` varchar(255) NOT NULL,
  `subject13` varchar(255) NOT NULL,
  `subject14` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_subject_info`
--

INSERT INTO `school_subject_info` (`id`, `class`, `subject`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `subject9`, `subject10`, `subject11`, `subject12`, `subject13`, `subject14`, `status`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(2, '', '$subject', '$subject1', '$subject2', '$subject3', '$subject4', '$subject5', '$subject6', '$subject7', '$subject8', '$subject9', '$subject10 ', '$subject11', '$subject12', '$subject13', '$subject14', 1),
(3, '$class', '$subject', '$subject1', '$subject2', '$subject3', '$subject4', '$subject5', '$subject6', '$subject7', '$subject8', '$subject9', '$subject10 ', '$subject11', '$subject12', '$subject13', '$subject14', 1),
(4, 'two', 'Bangla', 'Bangla', 'Bangla', 'Bangla', 'Bangla', 'Bangla', 'Bangla', 'Bangla', 'Bangla', 'Bangla', 'Bangla ', 'Bangla', 'Bangla', 'Bangla', 'Bangla', 1),
(5, 'two', 'vbn', 'vbnv', 'gffg', 'df', 'xdf', 'xcv', 'v', 'df', 'xc', 'xc', 'bftg ', 'rer', 'xcf', 'sedf', 'rewrt', 1),
(6, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(7, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
(8, 'one', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', 1),
(9, 'one', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', 1),
(10, 'one', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', 1),
(11, 'one', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', 1),
(12, 'one', 'dsds', 'sdsds', 'sds', '', '', '', '', '', '', '', ' ', '', '', '', '', 1),
(13, 'one', 'assa', 'dfdf', 'ghhg', 'gjyt', '', '', '', '', '', '', ' ', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_subject_name`
--

CREATE TABLE `school_subject_name` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_icon` varchar(255) NOT NULL,
  `subject_des` varchar(255) NOT NULL,
  `learn_more` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_subject_name`
--

INSERT INTO `school_subject_name` (`id`, `subject_name`, `subject_icon`, `subject_des`, `learn_more`, `status`) VALUES
(1, 'Accounting', 'fa fa-book', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(2, 'English', 'fa fa-pagelines fa-3x', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(3, 'Bangla', 'fa fa-pagelines fa-3x', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(4, 'Commerce', 'fa fa-pagelines fa-3x', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(5, 'Islamic Studies', 'fa fa-book', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(6, 'Math', 'fa fa-pagelines fa-3x', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(8, 'Commerce', 'fa fa-pagelines fa-3x', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(9, 'Commerce', 'fa fa-pagelines fa-3x', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(10, 'Commerce', 'fa fa-pagelines fa-3x', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1),
(11, 'Commerce', 'fa fa-pagelines fa-3x', 'Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.', 'Learn more', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_teacher_education_info`
--

CREATE TABLE `school_teacher_education_info` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `education_type` varchar(255) DEFAULT NULL,
  `passing_year` int(25) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_teacher_education_info`
--

INSERT INTO `school_teacher_education_info` (`id`, `teacher_id`, `education_type`, `passing_year`, `result`, `institute`, `status`) VALUES
(1, 7, 'CEC', 2000, '1st', 'Naogaon Govt College', 1),
(2, 8, 'M.ED', 2007, '3rd', 'Naogaon Govt College', 1),
(7, 17, 'MBA', 2017, '1st', 'Pabna adwoad college', 1),
(11, 9, 'MSC', 2001, '2nd', 'Dhaka University', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_teacher_heading`
--

CREATE TABLE `school_teacher_heading` (
  `id` int(11) NOT NULL,
  `tec_heading_first` varchar(255) NOT NULL,
  `tec_heading_second` varchar(255) NOT NULL,
  `tec_desc` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_teacher_heading`
--

INSERT INTO `school_teacher_heading` (`id`, `tec_heading_first`, `tec_heading_second`, `tec_desc`, `status`) VALUES
(1, 'College', 'Teachers', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_teacher_personal_info`
--

CREATE TABLE `school_teacher_personal_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `parmanent_address` varchar(255) NOT NULL,
  `present_address` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_teacher_personal_info`
--

INSERT INTO `school_teacher_personal_info` (`id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `religion`, `sex`, `parmanent_address`, `present_address`, `national_id`, `email`, `contact`, `status`) VALUES
(7, 'gfhghgdh', 'dfhdfhgd', 'fghjfd', '1999-07-12', 'buddho', 'female', 'hjfffffffffffff', 'ghddddddddddddddddd', '23454344655', 'sajibdsafgjhk@ghj', '332542', '1'),
(8, 'gfhghgdh', 'dfhdfhgd', 'fghjfd', '1999-07-12', 'buddho', 'female', 'hjfffffffffffff', 'ghddddddddddddddddd', '23454344655', 'sajibdsafgjhk@ghj', '332542', '1'),
(9, 'gfhghgdh', 'dfhdfhgd', 'fghjfd', '1999-07-12', 'buddho', 'female', 'hjfffffffffffff', 'ghddddddddddddddddd', '23454344655', 'sajibdsafgjhk@ghj', '332542', '1'),
(17, 'shakim', 'samad', 'jarina', '2017-07-13', 'muslim', 'on', 'naogaon', 'dhaka', '12345', 'shakim707@gmail.com', '01758211494', '1'),
(18, 'Md shakim hossain', 'samad', 'jarina', '2017-06-04', 'muslim', 'on', 'Dhaka', 'Naogaon', '123456789', 'shakim707@gmail.com', '01516726277', '1'),
(19, 'MD Shariful Islam ', 'MD. Majhar Islam ', 'Most. Shana Akther', '2017-07-12', 'muslim', 'on', 'Pabna Sader, Pabna.', 'Dhanmondi Jigatola, Dhaka. ', '789632145', 'shakim707@gmail.com', '15968', '1');

-- --------------------------------------------------------

--
-- Table structure for table `school_tec_section`
--

CREATE TABLE `school_tec_section` (
  `id` int(11) NOT NULL,
  `image_link` text NOT NULL,
  `tec_name` varchar(255) NOT NULL,
  `tec_desc` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_tec_section`
--

INSERT INTO `school_tec_section` (`id`, `image_link`, `tec_name`, `tec_desc`, `status`) VALUES
(1, '7.jpg', 'RAYMOND GREEK', 'Lorem imsum dolar set ameat cosider is simplly duammy text.', 1),
(2, '9.jpg', 'Deo Shibli', 'Lorem imsum dolar set ameat cosider is simplly duammy text.', 1),
(3, '6.jpg', 'Robert Alex', 'Lorem imsum dolar set ameat cosider is simplly duammy text.', 1),
(4, '8.jpg', 'MARIA DEO', 'Lorem imsum dolar set ameat cosider is simplly duammy text', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_prev_exp_modal`
--
ALTER TABLE `emp_prev_exp_modal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_job_app_img`
--
ALTER TABLE `hr_job_app_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_circular`
--
ALTER TABLE `job_circular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_acc_cashbook`
--
ALTER TABLE `school_acc_cashbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_acc_ledger`
--
ALTER TABLE `school_acc_ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_acc_trailbalance`
--
ALTER TABLE `school_acc_trailbalance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_employee_leave`
--
ALTER TABLE `school_employee_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_designation`
--
ALTER TABLE `school_emp_designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_edu_info`
--
ALTER TABLE `school_emp_edu_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_edu_info_modal`
--
ALTER TABLE `school_emp_edu_info_modal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_personal_info`
--
ALTER TABLE `school_emp_personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_prev_exp`
--
ALTER TABLE `school_emp_prev_exp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_reference_info`
--
ALTER TABLE `school_emp_reference_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_salary_info`
--
ALTER TABLE `school_emp_salary_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_emp_salary_status`
--
ALTER TABLE `school_emp_salary_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_font_logo`
--
ALTER TABLE `school_font_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_font_menu`
--
ALTER TABLE `school_font_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_footer_bottom`
--
ALTER TABLE `school_footer_bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_front_footer`
--
ALTER TABLE `school_front_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_front_footer_last_part`
--
ALTER TABLE `school_front_footer_last_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_front_footer_middle_part`
--
ALTER TABLE `school_front_footer_middle_part`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_front_menu`
--
ALTER TABLE `school_front_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_job_app_edu`
--
ALTER TABLE `school_job_app_edu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_job_app_pr`
--
ALTER TABLE `school_job_app_pr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_job_app_userinfo`
--
ALTER TABLE `school_job_app_userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_job_circular_create_acc`
--
ALTER TABLE `school_job_circular_create_acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_job_circular_info`
--
ALTER TABLE `school_job_circular_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_library_book_issue`
--
ALTER TABLE `school_library_book_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_library_book_list`
--
ALTER TABLE `school_library_book_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_library_member_list`
--
ALTER TABLE `school_library_member_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_login`
--
ALTER TABLE `school_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_online_exam_login_reg`
--
ALTER TABLE `school_online_exam_login_reg`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `school_online_mcq_class`
--
ALTER TABLE `school_online_mcq_class`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `school_online_mcq_details_result`
--
ALTER TABLE `school_online_mcq_details_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_online_mcq_que`
--
ALTER TABLE `school_online_mcq_que`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `school_online_mcq_sub`
--
ALTER TABLE `school_online_mcq_sub`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `school_requirement`
--
ALTER TABLE `school_requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_slide_show`
--
ALTER TABLE `school_slide_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_std_fee`
--
ALTER TABLE `school_std_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_student_parents_info`
--
ALTER TABLE `school_student_parents_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_student_personal_info`
--
ALTER TABLE `school_student_personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_student_prev_education_info`
--
ALTER TABLE `school_student_prev_education_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_stu_prev_edu_modal`
--
ALTER TABLE `school_stu_prev_edu_modal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_subject_heading`
--
ALTER TABLE `school_subject_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_subject_info`
--
ALTER TABLE `school_subject_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_subject_name`
--
ALTER TABLE `school_subject_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_teacher_education_info`
--
ALTER TABLE `school_teacher_education_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_teacher_heading`
--
ALTER TABLE `school_teacher_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_teacher_personal_info`
--
ALTER TABLE `school_teacher_personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_tec_section`
--
ALTER TABLE `school_tec_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_prev_exp_modal`
--
ALTER TABLE `emp_prev_exp_modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hr_job_app_img`
--
ALTER TABLE `hr_job_app_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `job_circular`
--
ALTER TABLE `job_circular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `modal`
--
ALTER TABLE `modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_acc_cashbook`
--
ALTER TABLE `school_acc_cashbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `school_acc_ledger`
--
ALTER TABLE `school_acc_ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `school_acc_trailbalance`
--
ALTER TABLE `school_acc_trailbalance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `school_employee_leave`
--
ALTER TABLE `school_employee_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `school_emp_designation`
--
ALTER TABLE `school_emp_designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `school_emp_edu_info`
--
ALTER TABLE `school_emp_edu_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `school_emp_edu_info_modal`
--
ALTER TABLE `school_emp_edu_info_modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_emp_personal_info`
--
ALTER TABLE `school_emp_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `school_emp_prev_exp`
--
ALTER TABLE `school_emp_prev_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `school_emp_reference_info`
--
ALTER TABLE `school_emp_reference_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `school_emp_salary_info`
--
ALTER TABLE `school_emp_salary_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `school_emp_salary_status`
--
ALTER TABLE `school_emp_salary_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `school_font_logo`
--
ALTER TABLE `school_font_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_font_menu`
--
ALTER TABLE `school_font_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_footer_bottom`
--
ALTER TABLE `school_footer_bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_front_footer`
--
ALTER TABLE `school_front_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_front_footer_last_part`
--
ALTER TABLE `school_front_footer_last_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_front_footer_middle_part`
--
ALTER TABLE `school_front_footer_middle_part`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_front_menu`
--
ALTER TABLE `school_front_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `school_job_app_edu`
--
ALTER TABLE `school_job_app_edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `school_job_app_pr`
--
ALTER TABLE `school_job_app_pr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `school_job_app_userinfo`
--
ALTER TABLE `school_job_app_userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `school_job_circular_create_acc`
--
ALTER TABLE `school_job_circular_create_acc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `school_job_circular_info`
--
ALTER TABLE `school_job_circular_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `school_library_book_issue`
--
ALTER TABLE `school_library_book_issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `school_library_book_list`
--
ALTER TABLE `school_library_book_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `school_library_member_list`
--
ALTER TABLE `school_library_member_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `school_login`
--
ALTER TABLE `school_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `school_online_exam_login_reg`
--
ALTER TABLE `school_online_exam_login_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `school_online_mcq_class`
--
ALTER TABLE `school_online_mcq_class`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `school_online_mcq_details_result`
--
ALTER TABLE `school_online_mcq_details_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `school_online_mcq_que`
--
ALTER TABLE `school_online_mcq_que`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `school_online_mcq_sub`
--
ALTER TABLE `school_online_mcq_sub`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `school_requirement`
--
ALTER TABLE `school_requirement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `school_slide_show`
--
ALTER TABLE `school_slide_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `school_std_fee`
--
ALTER TABLE `school_std_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `school_student_parents_info`
--
ALTER TABLE `school_student_parents_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `school_student_personal_info`
--
ALTER TABLE `school_student_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `school_student_prev_education_info`
--
ALTER TABLE `school_student_prev_education_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `school_stu_prev_edu_modal`
--
ALTER TABLE `school_stu_prev_edu_modal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_subject_heading`
--
ALTER TABLE `school_subject_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_subject_info`
--
ALTER TABLE `school_subject_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `school_subject_name`
--
ALTER TABLE `school_subject_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `school_teacher_education_info`
--
ALTER TABLE `school_teacher_education_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `school_teacher_heading`
--
ALTER TABLE `school_teacher_heading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_teacher_personal_info`
--
ALTER TABLE `school_teacher_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `school_tec_section`
--
ALTER TABLE `school_tec_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
