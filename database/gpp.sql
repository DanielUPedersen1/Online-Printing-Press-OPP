-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 12:17 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `admin_contact` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_designation` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_gender` varchar(50) NOT NULL,
  `admin_bankname` varchar(50) NOT NULL,
  `admin_ifsc` varchar(50) NOT NULL,
  `admin_accno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_address`, `admin_contact`, `admin_email`, `admin_designation`, `admin_username`, `admin_password`, `admin_gender`, `admin_bankname`, `admin_ifsc`, `admin_accno`) VALUES
(2, 'Priyanka S Ganachari', 'C/o Golsangi compound Mangalgatti plot behind Shravya Hospital,Dharwad-580008', '9731600612', 'priyankasg1998@gmail.com', 'Computer Operator', 'priyanka ', 'priyanka', 'Female', 'Canara Bank', 'CNRB0001514', '1514101051566'),
(3, 'Ruksarbanu M Patil', '#16 Opp Mosque Rounaqpur Galli Bhusappa Chowk Road Dharwad-580001', '9449962785', 'ruksarbanupatil13@gmail.com', 'Computer Operator', 'Ruksar', '112233', 'Female', 'Syndicate Bank', 'SYNB10002', '1514101011156'),
(4, 'Lokesh S  A', 'Government Printing Press Quatars Sadhanakeri Dharwad-580008', '9886192712', 'sa.lokesh.sa@gmail.com', 'Deputy Director', 'Lokesh', 'Lokesh', 'Male', 'State Bank of India', 'SBI1997', '5267518901231'),
(5, 'Umesh H M', 'Government Printing Press Quatars Sadhanakeri Road Dharwad-580008', '9538389321', 'hmumesh2013@gmail.com', 'Assistant Director ', 'Umesh', 'Umesh', 'Male', 'State Bank of India', 'SBI2013', '6754321890765');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `bill_details_id` int(11) NOT NULL,
  `govt_user_id` int(11) NOT NULL,
  `bill_details_price` varchar(50) NOT NULL,
  `bill_details_status` varchar(20) NOT NULL,
  `bill_details_date` varchar(50) NOT NULL,
  `bill_details_no` varchar(100) NOT NULL,
  `order_delivery_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_details_id`, `govt_user_id`, `bill_details_price`, `bill_details_status`, `bill_details_date`, `bill_details_no`, `order_delivery_status`) VALUES
(1, 1, '62068', 'Confirmed', '27-03-2018', 'GPP480126', 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `customer_bill`
--

CREATE TABLE `customer_bill` (
  `customer_bill_id` int(11) NOT NULL,
  `customer_details_id` varchar(50) NOT NULL,
  `customer_bill_date` varchar(50) NOT NULL,
  `customer_bill_status` varchar(20) NOT NULL DEFAULT '0',
  `bill_order_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_bill`
--

INSERT INTO `customer_bill` (`customer_bill_id`, `customer_details_id`, `customer_bill_date`, `customer_bill_status`, `bill_order_no`) VALUES
(1, '2', '27-03-2018', 'Confirmed', 'GPP652293');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_details_id` int(11) NOT NULL,
  `customer_details_name` varchar(50) NOT NULL,
  `customer_details_contact` varchar(50) NOT NULL,
  `customer_details_address` varchar(50) NOT NULL,
  `customer_details_email` varchar(50) NOT NULL,
  `customer_details_username` varchar(50) NOT NULL,
  `customer_details_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_details_id`, `customer_details_name`, `customer_details_contact`, `customer_details_address`, `customer_details_email`, `customer_details_username`, `customer_details_password`) VALUES
(1, 'Mukta R Sunagar', '7259518890', 'At Kittur', 'muktabayi@gmail.com', 'Mukta', 'Mukta12'),
(2, 'Priyanka Angadi', '7406985299', 'Narayanpur Dharwad', 'priyankasa@gmail.com', 'pinku', 'Pinku123'),
(3, 'Shweta M Rane', '7411287470', 'Kumareshwar Nagar Dharwad', 'shwetamr@gmai.com', 'shwetaa', 'shweta'),
(4, 'Hema Badiger', '8867416524', 'Munavalli Belguam', 'hema@gmail.com', 'pihu', 'pihu'),
(5, 'Kartik Chinagi', '8971657195', 'Hubli', 'kartik@gmail.com', 'kartik', 'kartik'),
(6, 'Likhit Hegde', '9480909754', 'Near Uday Hostel Dharwad', 'likhithegde@gmail.com', 'likhit', 'likhit'),
(7, 'Gayatri B', '9880498575', 'Madihal Dharwad', 'gayatri@gmail.com', 'gayatri', 'gayatri'),
(8, 'Abrar Patil', '9624938871', 'Bhusappa Chowk Road Dharwad-580001', 'marktwop@gmail.com', 'abrar', 'abrar'),
(9, 'Abid Ali', '9141816447', 'RamNagar Dharwad', 'abidali@gmail.com', 'abid', 'abid'),
(10, 'Shobha Elalli', '8884340050', 'Near Civil Hospital Dharwad', 'shobhaelalli@gmail.com', 'shobha', 'shobha'),
(11, 'Yashaswini Hegde', '9483363827', 'Hoysal Nagar Near Nehru Nagar Dharwad', 'yashaswini@gmail.com', 'Yashaswini', 'yashaswini'),
(12, 'Veena Mulkipatil', '9738460378', 'Shri RamNagar Dharwad', 'veena@gmail.com', 'veena', 'veena'),
(13, 'Akshata Neeralagi', '9206247798', 'Nuggikeri Dharwad', 'akshata@gmail.com', 'aksha', 'aksha'),
(14, 'Sharoon Farnadez', '9611636187', 'Bendre Nagar near Sadhankeri Dharwad', 'sharoon@gmail.com', 'sharoon', 'sharoon'),
(15, 'Vasim Doddamani', '8660936227', 'Taj Nagar Gadag', 'vasimraja@gmail.com', 'vasimraja', 'vasimraja'),
(16, 'Ruksar', '7624938871', 'Dharwad', 'ruksar@gmail.com', 'sanam', 'Ruksar13');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `customer_order_id` int(11) NOT NULL,
  `product_details_id` int(11) NOT NULL,
  `customer_details_id` int(11) NOT NULL,
  `customer_order_quantity` varchar(50) NOT NULL,
  `customer_order_price` varchar(50) NOT NULL,
  `customer_order_total` varchar(50) NOT NULL,
  `customer_order_sgst` varchar(50) NOT NULL,
  `customer_order_cgst` varchar(50) NOT NULL,
  `customer_order_finalamount` varchar(50) NOT NULL,
  `customer_order_date` varchar(50) NOT NULL,
  `customer_order_status` varchar(50) NOT NULL,
  `customer_order_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`customer_order_id`, `product_details_id`, `customer_details_id`, `customer_order_quantity`, `customer_order_price`, `customer_order_total`, `customer_order_sgst`, `customer_order_cgst`, `customer_order_finalamount`, `customer_order_date`, `customer_order_status`, `customer_order_no`) VALUES
(1, 9, 2, '101', '450', '45450', '6268.5', '6268.5', '82187', '27-03-2018', 'orderplaced', 'GPP652293'),
(2, 1, 2, '100', '242', '24200', '6268.5', '6268.5', '82187', '27-03-2018', 'orderplaced', 'GPP652293'),
(3, 28, 16, '101', '350', '35350', '', '', '', '27-03-2018', 'cartinsert', '');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `delivery_details_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `delivery_date` varchar(50) NOT NULL,
  `govt_user_id` int(11) NOT NULL,
  `labour_cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`delivery_details_id`, `employee_id`, `delivery_date`, `govt_user_id`, `labour_cost`) VALUES
(1, 6, '2018-03-16', 1, '100');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_fullname` varchar(50) NOT NULL,
  `employee_designation` varchar(50) NOT NULL,
  `employee_gender` varchar(50) NOT NULL,
  `employee_age` varchar(50) NOT NULL,
  `employee_contact` varchar(50) NOT NULL,
  `employee_bankname` varchar(50) NOT NULL,
  `employee_ifsc` varchar(50) NOT NULL,
  `employee_accno` varchar(50) NOT NULL,
  `employee_salary` varchar(50) NOT NULL,
  `employee_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_fullname`, `employee_designation`, `employee_gender`, `employee_age`, `employee_contact`, `employee_bankname`, `employee_ifsc`, `employee_accno`, `employee_salary`, `employee_address`) VALUES
(6, 'Vasant Huded', 'Second Division Assistant', 'Male', '35', '7760616593', 'State Bank of India', 'SBI2014', '1324354657687', '20000', 'Garag\r\n'),
(7, 'Basavarajappa Sugreddi', 'Superintendent', 'Male', '40', '9844645102', 'State Bank of India', 'SBI2015', '54637281920132', '30000', 'Government Printing Press Quatars Sadhanakeri Road'),
(8, 'Prashant Kumar Shantigeri', 'Junior Proof Reader', 'Male', '30', '7760248945', 'State Bank of India', 'SBI2016', '1423567890987', '20000', 'Government Printing Press Quatars Sadhankeri Road '),
(9, 'Ravi Manik', 'Second Division Assistant', 'Male', '28', '9945702476', 'State Bank of India', 'SBI1123', '0987654432123', '25000', 'Government Printing Press Quatars  Sadhankeri Road'),
(10, 'Sumangala Malakasamudra', 'First Division Assistant', 'Female', '30', '7337724698', 'State Bank of India', 'SBI2017', '3214567890977', '30000', 'Government Printing Press Quatars Sadhankeri Road '),
(11, 'Annapurna S Salimath', 'Cost Account', 'Female', '45', '7337878360', 'State Bank of India', 'SBI2018', '1290345678234', '32000', 'Government Printing Press Quarters  Sadhanakeri Ro'),
(16, 'Mahadevi P Mysore', 'Superintendent', 'Female', '45', '8792451664', 'State Bank of India', 'SBI234', '7658905432123', '40000', 'Rani Channamma Nagar Dharwad'),
(17, 'Anusuya P Melyanavar', 'First Division Assistant', 'Female', '50', '7411826900', 'State Bank of India', 'SBI1432', '5098764321234', '30000', 'Government Printing Press Quarters Sadhanakeri Roa'),
(18, 'Pushpa V Shivangoudar', 'Second Division Assistant', 'Female', '45', '9880367984', 'State Bank of India', 'SBI6789', '4098765321239', '20000', 'Goudar Oni 1st main 3rd cross Kelgeri Dharwad'),
(19, 'Jesudas Amaravati', 'First Division Assistant', 'Male', '32', '9880986624', 'State Bank of India', 'SBI9876', '2134567890987', '30000', '#24 Mission Compound near NTTF Dharwad'),
(20, 'Mahendra Indaragi', 'Senior Offset Printer', 'Male', '48', '7795012811', 'State Bank of India', 'SBI3456', '3124567890876', '35000', '5th cross plot no 26 Vijay Nagar behind HP gas go '),
(21, 'Shankar R Bandiwaddar', 'Senior Plate maker', 'Male', '40', '7829266873', 'State Bank of India', 'SBI2890', '3987654210987', '32000', 'Gulganjikppa Dharwad'),
(22, 'Prakash Y Chalawadi', 'Foreman', 'Male', '45', '9902669834', 'State Bank of India', 'SBI7654', '9876543210987', '30000', 'Ayodhya Nagar Old Hubli'),
(23, 'Vijay Kumar Kannur', 'Senior Binder', 'Male', '49', '9449074845', 'State Bank of India', 'SBI1078', '4512367890987', '35000', 'Mangalgatti Plot behind Jambagi Hospital Sadhanker'),
(24, 'Shambhu Abbigeri', 'Assistant Machine Minder', 'Male', '45', '9880991115', 'State Bank of India', 'SBI8976', '1078654329876', '30000', 'Belguam Galli Hubli'),
(25, 'Ganesh Ballur', 'Supervisor', 'Male', '38', '9916488767', 'State Bank of India', 'SBI5342', '5312467890876', '45000', 'Government printing Press Quarters  Sadhanakeri Ro');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_name` varchar(50) NOT NULL,
  `feedback_subject` varchar(50) NOT NULL,
  `feedback_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_name`, `feedback_subject`, `feedback_description`) VALUES
(1, 'pp', 'pppp', 'pp'),
(2, 'kkk', 'kkkk', 'kkkk');

-- --------------------------------------------------------

--
-- Table structure for table `form_details`
--

CREATE TABLE `form_details` (
  `form_details_id` int(11) NOT NULL,
  `form_details_name` varchar(50) NOT NULL,
  `form_details_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_details`
--

INSERT INTO `form_details` (`form_details_id`, `form_details_name`, `form_details_code`) VALUES
(1, 'Police Department Crime Report', '9'),
(2, 'Police Department Crime Register', '20'),
(3, 'Police Department Inspectors interview book', '21'),
(4, 'Police Department Inspectors diary', '23'),
(5, 'Police Department Out Post diary', '27'),
(6, 'Police Department Sentry Book', '45'),
(7, 'Karnataka State Police Department Form', '10'),
(8, 'Police Department Savings Account Card Form', '60'),
(9, 'Police Department Business Register', '71'),
(10, 'Police Officers are Leaving from the Station', '81'),
(11, 'Government Property List Present in Police Station', '83'),
(12, 'Police Department Letter book', '84'),
(13, 'Police Department Bill letter', '89'),
(14, 'Police Department Case diary', '138'),
(15, 'Police Department Criminal Search book', '132'),
(16, 'Police Department Postmortem Request letter', '146 1'),
(17, 'Police Department Postmortem Report letter', '146 2'),
(18, 'Bond Paper and Bail Paper Given in front of the Ma', '89 B'),
(19, 'Police Department', '105'),
(20, 'Police Department Duty Queue List', '106'),
(21, 'Police Department sending own property list to mag', '131'),
(22, 'RTO Renewal form', '25'),
(23, 'RTO Driving licence', '4'),
(25, ' Showing Present Status of Unnatural and Unexpecte', '143'),
(26, 'Acquiring Properties from the Police Form', '132 A'),
(27, 'Police Department Initial EnquiryLetter', '89 A'),
(28, 'Police Department Forensic Report Form', '153'),
(29, 'RTO Temporary Permit Licence', '46'),
(30, 'RTO Permit application form', '36'),
(31, 'RTO Learners  licence', '3'),
(32, 'RTO Renewal of driving licence form', 'R9'),
(33, 'RTO Learners licence renewal form', '2'),
(34, 'Book', 'book1'),
(35, 'Stationary ', 'stationary 1'),
(36, 'RTO Intimation of Change of Address Recorded in th', '33'),
(37, 'Doctors Certificate for Conductor form', '13'),
(39, 'Temporary Permission Form', '38'),
(40, 'Drivers Behavior Letter', '9A'),
(41, 'Security Bond Letter', '57   2');

-- --------------------------------------------------------

--
-- Table structure for table `govt_user`
--

CREATE TABLE `govt_user` (
  `govt_user_id` int(11) NOT NULL,
  `govt_type` varchar(50) NOT NULL,
  `govt_user_name` varchar(50) NOT NULL,
  `govt_user_address` varchar(50) NOT NULL,
  `govt_user_contact` varchar(50) NOT NULL,
  `govt_user_email` varchar(50) NOT NULL,
  `govt_user_designation` varchar(50) NOT NULL,
  `govt_user_landline` varchar(50) NOT NULL,
  `govt_user_username` varchar(50) NOT NULL,
  `govt_user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `govt_user`
--

INSERT INTO `govt_user` (`govt_user_id`, `govt_type`, `govt_user_name`, `govt_user_address`, `govt_user_contact`, `govt_user_email`, `govt_user_designation`, `govt_user_landline`, `govt_user_username`, `govt_user_password`) VALUES
(1, 'kp', 'kp', 'kp', '9019837348', 'kp@gmail.com', 'kp', 'ppp', 'tinku', 'Tinku123');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(50) NOT NULL,
  `login_password` varchar(50) NOT NULL,
  `login_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_password`, `login_type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'pinku', 'Pinku123', 'customer'),
(3, 'tinku', 'Tinku123', 'govtuser'),
(4, 'sanam', 'Ruksar13', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `product_details_id` int(11) NOT NULL,
  `govt_user_id` int(11) NOT NULL,
  `order_details_quantity` varchar(50) NOT NULL,
  `order_details_quality` varchar(50) NOT NULL,
  `order_details_price` varchar(50) NOT NULL,
  `order_details_total` varchar(50) NOT NULL,
  `order_details_sgst` varchar(50) NOT NULL,
  `order_details_cgst` varchar(50) NOT NULL,
  `order_details_finalamount` varchar(50) NOT NULL,
  `order_details_reqdate` varchar(50) NOT NULL,
  `order_details_date` varchar(50) NOT NULL,
  `order_details_status` varchar(50) NOT NULL,
  `order_details_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `product_details_id`, `govt_user_id`, `order_details_quantity`, `order_details_quality`, `order_details_price`, `order_details_total`, `order_details_sgst`, `order_details_cgst`, `order_details_finalamount`, `order_details_reqdate`, `order_details_date`, `order_details_status`, `order_details_no`) VALUES
(1, 1, 1, '100', '', '242', '24200', '4734', '4734', '62068', '', '27-03-2018', 'orderplaced', 'GPP480126'),
(2, 54, 1, '100', '', '5', '500', '4734', '4734', '62068', '', '27-03-2018', 'orderplaced', 'GPP480126'),
(4, 30, 1, '100', '', '279', '27900', '4734', '4734', '62068', '', '27-03-2018', 'orderplaced', 'GPP480126');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` int(11) NOT NULL,
  `product_category_name` varchar(50) NOT NULL,
  `product_category_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_description`) VALUES
(1, 'Forms', 'The Forms are related to Government offices like P'),
(2, 'Books', 'The Book category having several book like Gazette'),
(3, 'Stationary', 'The Stationary product include all type of station');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_details_id` int(11) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `form_details_id` int(11) NOT NULL,
  `product_details_name` varchar(50) NOT NULL,
  `product_details_quantity` varchar(50) NOT NULL,
  `product_details_description` varchar(100) NOT NULL,
  `product_details_price` varchar(50) NOT NULL,
  `product_details_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_details_id`, `product_category_id`, `form_details_id`, `product_details_name`, `product_details_quantity`, `product_details_description`, `product_details_price`, `product_details_image`) VALUES
(1, 2, 34, 'Bijapur Gazetteer', '1', 'Bijapur  Editor James M. Campbell, Gazetteer of India Government of Karnataka. Edition is in Kannada', '242', 'IMG_20180307_005603_138.jpg'),
(2, 2, 34, 'Bijapur Gazetteer', '1', 'Bijapur  Editor James M. Campbell, Gazetteer of India Government of Karnataka. Edition is in English', '330', 'IMG_20180307_005711_114.jpg'),
(3, 2, 34, 'Kanara Gazetteer ', '1', 'Editor James M. Campbell', '250', 'IMG_20180307_005840_73.jpg'),
(4, 2, 34, 'South Canara', '1', 'Edited by John Sturrock (Vol. I) and Harold A Stuart (vol.II) ', '450', 'IMG_20180307_005917_98.jpg'),
(5, 2, 34, 'Kolar District Gazetteer', '1', 'Government of India, Karnataka State Gazetteer book English. ', '700', 'IMG_20180307_005951_134.jpg'),
(6, 2, 34, 'Karnataka State Gazetteer  ', '1', 'Part  1 Karnataka State Gazetteer ', '55', 'IMG_20180307_010020_110.jpg'),
(7, 2, 34, 'Jewels of Administration Princely Mysore State', '1', 'Chief Editor Neela Manjunath K.A.S Karnataka Gazetteer.', '440', 'IMG_20180307_010055_71.jpg'),
(8, 2, 34, 'Glimpses of Karnataka', '1', 'Chief Editor S Anees Siraj Karnataka Gazetteer Department Bengaluru.', '300', 'IMG_20180307_010125_66.jpg'),
(9, 2, 34, 'A Journey From Madras through the countries of Mys', '1', 'Through the countries of Mysore Canara and Malabar Dr. Francis Buchanan.', '450', 'IMG_20180307_010205_99.jpg'),
(10, 2, 34, 'Mandy District Gazetteer ', '1', 'Karnataka Gazetteer Department Mandya.', '700', 'IMG_20180307_012135_115.jpg'),
(11, 2, 34, 'Mysore and Coorg vol III', '1', 'Editor Benjamin Lewis Rice Gazetteer Of Karnataka version is English.', '290', 'IMG_20180307_010311_77.jpg'),
(12, 2, 34, ' Mandya District Kannada', '1', 'Karnataka Gazetteer Department Mandya English.', '700', 'IMG_20180307_010344_107.jpg'),
(13, 2, 34, 'Economic Survey of Karnataka', '1', 'Department of planning, Programmer Monitoring and Statistics Government  of Karnataka.', '250', 'IMG_20180307_010746_99.jpg'),
(14, 2, 34, 'Dakshina Kannada  District Gazetteer book ', '1', 'chief editor S. Anees Siraj, KAS.', '880', 'IMG_20180307_012148_94.jpg'),
(15, 2, 34, 'Dakshina Kannada  District Gazetteer book ', '1', 'Karnataka Gazetteer Department Kannada.', '290', 'IMG_20180307_010945_109.jpg'),
(16, 2, 34, 'The Karnataka Code Karnataka Acts ', '1', 'It contains Un-repealed Karnataka Acts from 1995 up to Act  33 of 2001 as amended up to 1-04-2012.', '390', 'IMG_20180307_011055_131.jpg'),
(17, 2, 34, 'Bidar Gazetteer ', '1', 'Provincial Series Hyderabad State Bidar in English version.', '300', 'IMG_20180307_011131_130.jpg'),
(18, 2, 34, 'Gulbarga District Gazetteer book ', '1', 'Government of India gazetteer book in Kannada version.', '200', 'IMG_20180307_011210_131.jpg'),
(19, 2, 34, 'Budget book', '1', 'Budget 2017-18', '150', 'IMG_20180307_011239_120.jpg'),
(20, 2, 34, 'Raichur  Gazetteer ', '1', 'Provincial Series Hyderabad State Bidar in English version.', '450', 'IMG_20180307_012203_88.jpg'),
(22, 2, 34, 'Bijapur District Gazetteer book', '1', 'Karnataka Gazetteer Department Bagalkot District Included.', '460', 'IMG_20180307_011415_70.jpg'),
(23, 2, 34, 'Hunusuru Taluku Gazetteer ', '1', 'Hunusuru Taluku Gazetteer Government of India, Government of Karnataka and it is Kannada version.', '120', 'IMG_20180307_011438_74.jpg'),
(24, 2, 34, 'Hand Book of Karnataka ', '1', 'Karnataka Gazetteer Department.', '650', 'IMG_20180307_012819_109.jpg'),
(26, 2, 34, 'Diary ', '1', 'Government of Karnataka Providing the diary.', '50', 'IMG_20180307_012209_143.jpg'),
(27, 2, 34, 'Shimoga Gazetteer', '1', 'Government of Karnataka Providing the gazetteer in English veersion.', '250', 'IMG_20180307_011801_111.jpg'),
(28, 2, 34, 'Dharwad Gazetteer ', '1', 'Information about Dharwad , and their Education etc. In English version.', '350', 'IMG_20180307_012823_105.jpg'),
(29, 2, 34, 'Dharwad Gazetteer ', '1', 'Information about Dharwad , and their Education etc. In Kannada version.', '175', 'IMG_20180307_011915_139.jpg'),
(30, 3, 35, 'White paper', '500', 'A3 paper', '279', 's1.jpg'),
(31, 3, 35, 'Duplicating paper', '500', 'A4 Paper', '437', 's2.jpg'),
(32, 3, 35, 'xerox paper ', '500', 'A4  size paper', '185', 'download.jpg'),
(33, 3, 35, 'xerox paper ', '500', 'F S  size paper', '228', 'xerox paper fs.JPG'),
(34, 3, 35, 'xerox paper ', '500', 'A3  size paper', '390', 'a3 xerox.jpg'),
(35, 3, 35, 'Needle', '1', 'Thin, Thick Needle', '2', 'needle.jpg'),
(36, 3, 35, 'White tape skin', '1', 'White Tape Skin ', '9', 's10.jpg'),
(37, 3, 35, 'Gum Tap', '1', 'Gum Tap color Brown ', '25', 'gum tape1.jpg'),
(38, 3, 35, 'Green Color Pencil', '1', 'Thick Color Pencil', '6', 's17.jpg'),
(39, 3, 35, 'Candles', '1', 'White Color Candles', '9', 'canndle.jpg'),
(40, 3, 35, 'Color Pencil', '1', 'Good Pencil', '5', 's14.jpg'),
(41, 3, 35, 'Cotton tags', '1', 'Thick cotton tags', '1', 's19.jpg'),
(42, 3, 35, 'Short Hand Book', '1', 'Good Quality Paper ', '13', 's22.jpg'),
(43, 3, 35, 'Pad ink bottles', '1', 'Good Quality ink pad', '18', 's24.jpg'),
(44, 3, 35, 'self ink pad', '1', 'Good Quality ink ', '18', 's25.jpg'),
(45, 3, 35, 'Gum Bottles ', '1', 'Good Quality Gum, Thickness of Gum is good.', '12', 's26.jpg'),
(46, 3, 35, 'Round pins', '50', 'Good Quality', '14', 's29.jpg'),
(47, 3, 35, 'File board', '1', 'Good Quality Thickness is Good', '18', 'images.jpg'),
(48, 3, 35, 'Scissor', '1', 'Good Quality Thickness is Good', '29', 'sisser.jpg'),
(49, 3, 35, 'Single Hole Punch Machine', '1', 'Good Quality.', '49', 's0.jpg'),
(51, 3, 35, 'Double Hole Punch Machine', '1', 'Good Quality.', '47', 'punch.jpg'),
(52, 3, 35, 'Highlighter Pen', '1', 'Good Quality Color proof.', '20', 'download (3).jpg'),
(53, 3, 35, 'Fevi Stick Bottle', '1', 'Good Quality.', '25', 'fevi.jpg'),
(54, 1, 31, 'RTO Learners licence', '1', 'Related to RTO Department.', '5', 'IMG_20180305_174248_92.jpg'),
(55, 2, 34, 'Chamarajnagar District Gazetteer book', '1', 'Chamarajnagar District related all information is given in this book in Kannada version.', '700', 'IMG_20180314_010021_80.jpg'),
(56, 2, 34, 'Bangalore Gazetteer book', '1', 'Bangalore Related all type information  is given in this book. Not only place also include Tourist p', '100', 'IMG_20180314_010022_131.jpg'),
(57, 2, 34, 'Karnatak Arthik Sameeksha  book', '1', 'Karnatak Arthik Sameeksha  book 2017-18 include education in Karnataka it is available in both Kanna', '650', 'IMG_20180314_010024_140.jpg'),
(58, 1, 2, 'Karnataka State Police Department Form', '1', 'Karnataka State Police Department Form', '5', '10.jpg'),
(61, 1, 30, 'RTO Permit application form', '1', 'RTO Permit application form', '5', '36.jpg'),
(62, 1, 0, 'Temporary Permission Form', '1', '	Temporary Permission Form', '9', '38.jpg'),
(65, 1, 6, 'Police Department Sentry Book', '1', 'Police Department Sentry Book', '5', '45.jpg'),
(66, 1, 8, 'Police Department Savings Account Card Form', '1', 'Police Department Savings Account Card Form', '6', '60.jpg'),
(67, 1, 36, 'RTO Intimation of Change of Address Recorded', '1', 'RTO Intimation of Change of Address Recorded', '6', '33.jpg'),
(68, 1, 0, 'Police Department Letter book', '1', 'Police Department Letter book', '7', '84.jpg'),
(69, 1, 12, 'Police Department Letter book', '1', 'Police Department Letter book', '7', '84.jpg'),
(70, 1, 29, 'RTO Permit application form', '1', 'RTO Permit application form', '6', '36.jpg'),
(71, 1, 27, 'Police Department Initial Enquiry Letter', '1', 'Police Department Initial Enquiry Letter', '3', '89 a.jpg'),
(72, 1, 18, 'Bond Paper and Bail Paper Given in front of the Ma', '1', 'Bond Paper and Bail Paper Given in front of the Magistrate', '2', '89 b.jpg'),
(73, 1, 13, 'Police Department Bill letter', '1', 'Police Department Bill letter', '5', '89.jpg'),
(74, 1, 20, 'Police Department Duty Queue List', '1', 'Police Department Duty Queue List', '5', '106.jpg'),
(75, 1, 15, 'Police Department Criminal Search book', '1', 'Police Department Criminal Search book', '5', '132.jpg'),
(76, 1, 14, 'Police Department Case diary', '1', 'Police Department Case diary, use to enter the details of case, which case is arrival in office.', '5', '138.jpg'),
(77, 1, 16, 'Police Department Postmortem Request letter', '1', 'Police Department Postmortem Request letter. This letter is used by postmortem of the died body.', '5', '146 2.jpg'),
(78, 1, 33, 'RTO Learners licence renewal form', '1', 'RTO Learners licence renewal form used by the Learners, it is provided in RTO office.', '8', 'Untitled.jpg'),
(79, 1, 28, 'Police Department Forensic Report Form', '1', 'Police Department Forensic Report Form', '12', '153.jpg'),
(80, 1, 31, 'RTO Learners licence', '1', 'RTO Learners licence', '8', '3.jpg'),
(81, 1, 19, 'Police Department Criminal register table form ', '1', 'Police Department Criminal register table form. used to register the details of kedi or criminal.', '5', '105.jpg'),
(82, 1, 21, 'Police Department sending own property list to mag', '1', 'Police Department sending own property list to magistrate  office to register form', '5', '131.jpg'),
(83, 1, 22, 'RTO Renewal form ', '1', 'RTO Renewal form', '9', '25.jpg'),
(84, 1, 9, 'Police Department Business Register', '1', 'Police Department Business Register form', '15', '711.jpg'),
(85, 1, 11, 'Government Property List Present in Police Station', '1', 'Government Property List Present in Police Station', '4', '831.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`bill_details_id`);

--
-- Indexes for table `customer_bill`
--
ALTER TABLE `customer_bill`
  ADD PRIMARY KEY (`customer_bill_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_details_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`customer_order_id`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`delivery_details_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `form_details`
--
ALTER TABLE `form_details`
  ADD PRIMARY KEY (`form_details_id`);

--
-- Indexes for table `govt_user`
--
ALTER TABLE `govt_user`
  ADD PRIMARY KEY (`govt_user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `bill_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_bill`
--
ALTER TABLE `customer_bill`
  MODIFY `customer_bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `customer_order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `delivery_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form_details`
--
ALTER TABLE `form_details`
  MODIFY `form_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `govt_user`
--
ALTER TABLE `govt_user`
  MODIFY `govt_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
