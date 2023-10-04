-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 04, 2023 at 01:40 AM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `central50noida_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity_log`
--

CREATE TABLE `tbl_activity_log` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_activity_log`
--

INSERT INTO `tbl_activity_log` (`id`, `user_id`, `message`, `date`, `time`, `system_ip`) VALUES
(1, 1, 'Manage Page - (xxxx) -  Add Successfully.', '2023-09-26', 1695717484, '27.58.82.208'),
(2, 1, 'Manage Page -  - (bbbb) - Edit Successfully.', '2023-09-26', 1695717779, '27.58.82.208'),
(3, 2, 'Manage Page -  - (Floor Plan) - Edit Successfully.', '2023-09-30', 1696055989, '103.76.139.176'),
(4, 1, 'Manage Home Sec - A world of finer taste and élégante - Edit Successfully.', '2023-10-02', 1696223661, '103.81.182.186'),
(5, 1, 'Manage Menu -  - (Highlights) - Edit Successfully.', '2023-10-02', 1696225007, '27.58.82.208'),
(6, 1, 'Manage Page -  - (Highlights) - Edit Successfully.', '2023-10-02', 1696225041, '27.58.82.208'),
(7, 1, 'Manage Page -  - (Contact) - Edit Successfully.', '2023-10-02', 1696233885, '27.58.82.208'),
(8, 1, 'Manage Page -  - (Contact) - Edit Successfully.', '2023-10-02', 1696233897, '27.58.82.208'),
(9, 1, 'Super Admin Permission Set to (Activity log,Manage about us,Manage blog,Manage category,Manage field group,Manage gallery,Manage gallery floor plan,Manage home sec,Manage home sec2,Manage home sec3,Manage home sec4,Manage library,Manage menu,Manage page,Manage setting,Manage slider,Manage user type,Manage users,Profile management,) Successfully.', '2023-10-02', 1696234453, '27.58.82.208'),
(10, 1, 'Super Admin Permission Set to (Activity log,Manage about us,Manage blog,Manage category,Manage field group,Manage gallery,Manage gallery floor plan,Manage home sec,Manage home sec2,Manage home sec3,Manage home sec4,Manage library,Manage menu,Manage page,Manage setting,Manage slider,Manage social icon,Manage user type,Manage users,Profile management,) Successfully.', '2023-10-02', 1696234796, '27.58.82.208'),
(11, 1, 'Admin Permission Set to (Activity log,Manage about us,Manage blog,Manage category,Manage field group,Manage gallery,Manage gallery floor plan,Manage home sec,Manage home sec2,Manage home sec3,Manage home sec4,Manage library,Manage menu,Manage page,Manage setting,Manage slider,Manage social icon,Manage user type,Manage users,) Successfully.', '2023-10-02', 1696234807, '27.58.82.208'),
(12, 1, 'Manage Social Icon - (Facebook) -  Add Successfully.', '2023-10-02', 1696235209, '27.58.82.208'),
(13, 1, 'Manage Social Icon - (twitter) -  Add Successfully.', '2023-10-02', 1696235303, '27.58.82.208'),
(14, 1, 'Manage Social Icon - (linkedin) -  Add Successfully.', '2023-10-02', 1696235372, '27.58.82.208'),
(15, 1, 'Manage Social Icon - (instagram) -  Add Successfully.', '2023-10-02', 1696235397, '27.58.82.208'),
(16, 1, 'Manage Social Icon - (youtube) -  Add Successfully.', '2023-10-02', 1696235440, '27.58.82.208'),
(17, 1, 'Manage Social Icon - (whatsapp) -  Add Successfully.', '2023-10-02', 1696235493, '27.58.82.208'),
(18, 1, 'Manage Social Icon - (sss) -  Add Successfully.', '2023-10-02', 1696235596, '27.58.82.208'),
(19, 1, 'Manage Social Icon - Delete Successfully.', '2023-10-02', 1696235604, '27.58.82.208'),
(20, 1, 'Manage Social Icon -  - (Facebook) - Edit Successfully.', '2023-10-02', 1696235942, '27.58.82.208'),
(21, 1, 'Manage Social Icon -  - (twitter) - Edit Successfully.', '2023-10-02', 1696235953, '27.58.82.208'),
(22, 1, 'Manage Social Icon -  - (linkedin) - Edit Successfully.', '2023-10-02', 1696235961, '27.58.82.208'),
(23, 1, 'Manage Social Icon -  - (whatsapp) - Edit Successfully.', '2023-10-02', 1696236048, '27.58.82.208'),
(24, 1, 'Manage Social Icon -  - (instagram) - Edit Successfully.', '2023-10-02', 1696236057, '27.58.82.208'),
(25, 1, 'Manage Social Icon -  - (youtube) - Edit Successfully.', '2023-10-02', 1696236065, '27.58.82.208'),
(26, 1, 'Manage Page - Delete Successfully.', '2023-10-02', 1696241746, '27.58.82.208'),
(27, 1, 'Manage Page -  - (Home) - Edit Successfully.', '2023-10-02', 1696241757, '27.58.82.208'),
(28, 1, 'Manage Page -  - (About Us) - Edit Successfully.', '2023-10-02', 1696241771, '27.58.82.208'),
(29, 1, 'Manage Page -  - (Highlights) - Edit Successfully.', '2023-10-02', 1696241782, '27.58.82.208'),
(30, 1, 'Manage Page -  - (Floor Plan) - Edit Successfully.', '2023-10-02', 1696241795, '27.58.82.208'),
(31, 1, 'Manage Page -  - (Gallery) - Edit Successfully.', '2023-10-02', 1696241804, '27.58.82.208'),
(32, 1, 'Manage Page -  - (Blog) - Edit Successfully.', '2023-10-02', 1696241814, '27.58.82.208'),
(33, 1, 'Manage Page -  - (Contact) - Edit Successfully.', '2023-10-02', 1696241829, '27.58.82.208'),
(34, 1, 'Manage Page -  - (Gallery) - Edit Successfully.', '2023-10-02', 1696241862, '27.58.82.208');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL,
  `system_mac` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `join_page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `slug`, `category_id`, `date`, `time`, `system_ip`, `system_mac`, `update_date`, `update_time`, `user_id`, `status`, `join_page_id`) VALUES
(1, 'Gallery', 'Gallery', 0, '2023-09-22', 1695371947, '103.76.139.176', '', '2023-09-22', 1695371947, 2, 1, 2),
(2, 'Contruction Update', 'Contruction Update', 0, '2023-09-22', 1695372001, '103.76.139.176', '', '2023-09-22', 1695372001, 2, 1, 2),
(3, 'Brand', 'Brand', 0, '2023-09-22', 1695372029, '103.76.139.176', '', '2023-09-22', 1695372029, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_field_data`
--

CREATE TABLE `tbl_field_data` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL,
  `system_mac` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_field_data`
--

INSERT INTO `tbl_field_data` (`id`, `title`, `field_name`, `date`, `time`, `system_ip`, `system_mac`, `update_date`, `update_time`, `user_id`, `page_id`) VALUES
(1, 'Central 50', 'site_title', '2023-09-24', 1695545823, '27.58.82.208', '', '2023-09-24', 1695545823, 1, 0),
(2, 'ENCIRCLED BY A WORLD OF AMAZEMENT', 'site_tagline', '2023-09-24', 1695545823, '27.58.82.208', '', '2023-09-24', 1695545823, 1, 0),
(3, 'central50noida', 'system_theme', '2023-09-26', 1695716885, '27.58.82.208', '', '2023-09-26', 1695716885, 1, 0),
(9, 'CENTRAL 50 NOIDA', 'home_page_title', '2023-09-22', 1695376551, '120.89.73.94', '', '2023-09-22', 1695376551, 1, 0),
(10, 'Visit one of our agency locations or contact us today', 'contact_label1', '2023-09-22', 1695377334, '120.89.73.94', '', '2023-09-22', 1695377334, 1, 0),
(11, ' <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>\r\n <span> CENTRAL MARKET <br>Plot No C 1,  Sector -120, Noida, Uttar Pradesh - 201301</span><br><br>\r\n<i class=\"glyphicon glyphicon-envelope\"></i> <span><a href=\"mailto:contact@centralmarketnoida.com\">contact@centralmarketnoida.com</a></span><br><br>\r\n<i class=\"glyphicon glyphicon-earphone\"></i> <span>+91-9953361111</span>', 'contact_label2', '2023-09-22', 1695374564, '120.89.73.211', '', '2023-09-22', 1695374564, 1, 0),
(12, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56074.379447186315!2d77.36683552348623!3d28.550276657134855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef73d004916d%3A0x72d1af7057267ab3!2sCentral%20Market!5e0!3m2!1sen!2sin!4v1689423368952!5m2!1sen!2sin\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'contact_label3', '2023-09-22', 1695374564, '120.89.73.211', '', '2023-09-22', 1695374564, 1, 0),
(13, 'CENTRAL MARKET\r\nPlot No 4, Block A,  Sector -50, Noida, Uttar Pradesh - 201301', 'contact_address', '2023-09-22', 1695377334, '120.89.73.94', '', '2023-09-22', 1695377334, 1, 0),
(14, 'contact@centralmarketnoida.com', 'contact_email', '2023-09-22', 1695377334, '120.89.73.94', '', '2023-09-22', 1695377334, 1, 0),
(15, '+91-9953361111', 'contact_phone', '2023-09-22', 1695377334, '120.89.73.94', '', '2023-09-22', 1695377334, 1, 0),
(16, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56074.379447186315!2d77.36683552348623!3d28.550276657134855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef73d004916d%3A0x72d1af7057267ab3!2sCentral%20Market!5e0!3m2!1sen!2sin!4v1689423368952!5m2!1sen!2sin\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'contact_map', '2023-09-22', 1695377334, '120.89.73.94', '', '2023-09-22', 1695377334, 1, 0),
(17, '46', 'home_page_video', '2023-09-22', 1695376551, '120.89.73.94', '', '2023-09-22', 1695376551, 1, 0),
(18, 'FAIRFOX ITINFRA - EON \'EYE OF NOIDA\' : Phase-1 RERA Regd. No.: UPRERAPRJ211016, Phase-2 RERA Regd. No.: UPRERAPRJ716606, Phase-3 RERA Regd. No.: UPRERAPRJ882013| www.up-rera.in<br><br>\r\n\r\n.Disclosure: The images, appearances, colours, etc. given herein are mere artistic impression for representation purposes only and do not constitute an offer, an invitation to offer and/or commitment of any nature between the promoter and the recipient. The data/information herein is intended to give a general understanding of the subject matter and is subject to change without any prior notice. Readers are therefore requested to verify all details, including area, amenities, services, terms of sale and payment schedule and other relevant terms independently with the promoter prior to arriving at any decision of buying any plot in the said project, the binding offering shall be governed by the terms and conditions of the Agreement for sale only. In no event will the Promoter be liable for any claim made by the reader including seeking any cancellation and/or withdrawal for any of the inaccuracies in the information provided in the advertisement, though all the efforts have been made to ensure accuracy. We also do not hold any responsibility for any information provided by any broker/channel partner/property dealer or made available on any website/email communication other than official website/email/correspondences. [ 1 sq.mt. = 10.764 sq.ft, 1 sq. mt. = 1.196 sq.yd ] *T&C Apply', 'contact_disclosure', '2023-09-22', 1695377334, '120.89.73.94', '', '2023-09-22', 1695377334, 1, 0),
(19, '18', 'blog_page_number', '2023-09-22', 1695388136, '27.58.82.208', '', '2023-09-22', 1695388136, 1, 0),
(20, '10', 'blog_page_number', '2023-09-22', 1695386352, '27.58.82.208', '', '2023-09-22', 1695386352, 1, 0),
(27, 'hello g', 'home_page_title', '2023-09-23', 1695458131, '27.58.82.208', '', '2023-09-23', 1695458131, 1, 9),
(28, 'xxx', 'home_page_title', '2023-09-23', 1695458243, '27.58.82.208', '', '2023-09-23', 1695458243, 1, 8),
(31, 'CRC 01', 'home_page_title', '2023-09-23', 1695459881, '27.58.82.208', '', '2023-09-23', 1695459881, 1, 13),
(32, 'CRC 02', 'home_page_title', '2023-09-23', 1695458569, '27.58.82.208', '', '2023-09-23', 1695458569, 1, 12),
(33, 'asdfasfasfsaf', 'contact_address', '2023-09-23', 1695459881, '27.58.82.208', '', '2023-09-23', 1695459881, 1, 13),
(34, 'Visit one of our agency locations or contact us today', 'contact_label1', '2023-10-02', 1696241829, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 9),
(35, 'CENTRAL 50 Plot No 4, Block A, Sector -50, Noida, Uttar Pradesh - 201301', 'contact_address', '2023-10-02', 1696241829, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 9),
(36, 'contact@central50noida.com', 'contact_email', '2023-10-02', 1696241829, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 9),
(37, '+91-9953361111', 'contact_phone', '2023-10-02', 1696241829, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 9),
(38, ' ', 'contact_map', '2023-10-02', 1696241829, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 9),
(39, 'CENTRAL 50 | RERA No: UPRERAPRJ101301 | For reference visit www.up-rera.in\r\n\r\n.Disclosure: The images, appearances, colours, etc. given herein are mere artistic impression for representation purposes only and do not constitute an offer, an invitation to offer and/or commitment of any nature between the promoter and the recipient. The data/information herein is intended to give a general understanding of the subject matter and is subject to change without any prior notice. Readers are therefore requested to verify all details, including area, amenities, services, terms of sale and payment schedule and other relevant terms independently with the promoter prior to arriving at any decision of buying any plot in the said project, the binding offering shall be governed by the terms and conditions of the Agreement for sale only. In no event will the Promoter be liable for any claim made by the reader including seeking any cancellation and/or withdrawal for any of the inaccuracies in the information provided in the advertisement, though all the efforts have been made to ensure accuracy. We also do not hold any responsibility for any information provided by any broker/channel partner/property dealer or made available on any website/email communication other than official website/email/correspondences. [ 1 sq.mt. = 10.764 sq.ft, 1 sq. mt. = 1.196 sq.yd ] *T&C Apply', 'contact_disclosure', '2023-10-02', 1696241829, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 9),
(51, 'CENTRAL 50 NOIDA', 'home_page_title', '2023-10-02', 1696241757, '27.58.82.208', '', '2023-10-02', 1696241757, 1, 1),
(52, '14', 'image_site_logo', '2023-09-24', 1695545823, '27.58.82.208', '', '2023-09-24', 1695545823, 1, 0),
(53, '14', 'mobile_image_site_logo', '2023-09-24', 1695545823, '27.58.82.208', '', '2023-09-24', 1695545823, 1, 0),
(54, '14', 'image_site_favicon', '2023-09-24', 1695545823, '27.58.82.208', '', '2023-09-24', 1695545823, 1, 0),
(55, 'HIGH IN-DEMAND ZONE', 'home_page_label01', '2023-10-02', 1696241757, '27.58.82.208', '', '2023-10-02', 1696241757, 1, 1),
(56, 'CONTRARY TO POPULAR BELIEF, LOREM IPSUM IS NOT SIMPLY RANDOM TEXT. IT HAS ROOTS IN A PIECE OF CLASSICAL LATIN LITERATURE FROM 45 BC, MAKING IT OVER 2000 YEARS OLD.', 'home_page_label02', '2023-10-02', 1696241757, '27.58.82.208', '', '2023-10-02', 1696241757, 1, 1),
(57, '19', 'why_do_you_choose_image', '2023-10-02', 1696241757, '27.58.82.208', '', '2023-10-02', 1696241757, 1, 1),
(58, 'OUR AWESOME WORKS', 'home_page_label03', '2023-10-02', 1696241757, '27.58.82.208', '', '2023-10-02', 1696241757, 1, 1),
(59, 'Central 50 Noida is ideal place for your brand with all amenities if you want to make a good commercial investment in Noida. \r\n', 'home_page_label04', '2023-10-02', 1696241757, '27.58.82.208', '', '2023-10-02', 1696241757, 1, 1),
(60, 'info@central50noida.com', 'contact_email2', '2023-10-02', 1696241829, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 9),
(61, '919953361111', 'contact_whatsapp_no', '2023-10-02', 1696241829, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_field_group`
--

CREATE TABLE `tbl_field_group` (
  `id` int(11) NOT NULL,
  `field_label` varchar(255) NOT NULL,
  `field_name` varchar(255) NOT NULL,
  `group_type_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL,
  `system_mac` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `required` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_field_group`
--

INSERT INTO `tbl_field_group` (`id`, `field_label`, `field_name`, `group_type_id`, `date`, `time`, `system_ip`, `system_mac`, `update_date`, `update_time`, `user_id`, `status`, `required`) VALUES
(1, 'Home Page Title', 'home_page_title', 1, '2023-09-24', 1695540026, '27.58.82.208', '', '2023-09-24', 1695540026, 1, 1, 1),
(2, 'Contact Label1', 'contact_label1', 2, '2023-09-24', 1695523974, '27.58.82.208', '', '2023-09-24', 1695523974, 1, 1, 1),
(3, 'Contact Address', 'contact_address', 2, '2023-09-24', 1695523989, '27.58.82.208', '', '2023-09-24', 1695523989, 1, 1, 1),
(4, 'Contact email', 'contact_email', 1, '2023-09-24', 1695524015, '27.58.82.208', '', '2023-09-24', 1695524015, 1, 1, 1),
(5, 'contact phone', 'contact_phone', 1, '2023-09-24', 1695524032, '27.58.82.208', '', '2023-09-24', 1695524032, 1, 1, 1),
(6, 'Contact map', 'contact_map', 2, '2023-09-24', 1695524047, '27.58.82.208', '', '2023-09-24', 1695524047, 1, 1, 1),
(7, 'Home page video', 'home_page_video', 3, '2023-09-24', 1695524071, '27.58.82.208', '', '2023-09-24', 1695524071, 1, 1, 0),
(8, 'Contact Disclosure', 'contact_disclosure', 2, '2023-09-24', 1695524091, '27.58.82.208', '', '2023-09-24', 1695524091, 1, 1, 1),
(10, 'Home page label01', 'home_page_label01', 1, '2023-09-25', 1695624383, '27.58.82.208', '', '2023-09-25', 1695624383, 1, 1, 1),
(11, 'Home page label02', 'home_page_label02', 2, '2023-09-25', 1695625547, '27.58.82.208', '', '2023-09-25', 1695625547, 1, 1, 1),
(12, 'why do you choose Image', 'why_do_you_choose_image', 3, '2023-09-25', 1695624690, '27.58.82.208', '', '2023-09-25', 1695624690, 1, 1, 1),
(13, 'Home page label03', 'home_page_label03', 1, '2023-09-25', 1695625502, '27.58.82.208', '', '2023-09-25', 1695625502, 1, 1, 1),
(14, 'Home page label04', 'home_page_label04', 2, '2023-09-25', 1695625534, '27.58.82.208', '', '2023-09-25', 1695625534, 1, 1, 1),
(15, 'Contact email2', 'contact_email2', 1, '2023-09-25', 1695627154, '27.58.82.208', '', '2023-09-25', 1695627154, 1, 1, 1),
(16, 'Contact whatsapp No', 'contact_whatsapp_no', 1, '2023-09-25', 1695635110, '27.58.82.208', '', '2023-09-25', 1695635110, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_field_group_set`
--

CREATE TABLE `tbl_field_group_set` (
  `id` int(11) NOT NULL,
  `page_type` varchar(255) NOT NULL,
  `child_page` varchar(255) NOT NULL,
  `page_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL,
  `system_mac` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_field_group_set`
--

INSERT INTO `tbl_field_group_set` (`id`, `page_type`, `child_page`, `page_id`, `group_id`, `date`, `time`, `system_ip`, `system_mac`, `update_date`, `update_time`, `user_id`, `status`) VALUES
(5, 'page', '', 9, 2, '2023-09-23', 1695456380, '27.58.82.208', '', '2023-09-23', 1695456380, 1, 0),
(9, 'page', '', 0, 9, '2023-09-23', 1695458043, '27.58.82.208', '', '2023-09-23', 1695458043, 1, 0),
(13, 'page', '', 9, 3, '2023-09-24', 1695523989, '27.58.82.208', '', '2023-09-24', 1695523989, 1, 0),
(14, 'page', '', 9, 4, '2023-09-24', 1695524015, '27.58.82.208', '', '2023-09-24', 1695524015, 1, 0),
(15, 'page', '', 9, 5, '2023-09-24', 1695524032, '27.58.82.208', '', '2023-09-24', 1695524032, 1, 0),
(16, 'page', '', 9, 6, '2023-09-24', 1695524047, '27.58.82.208', '', '2023-09-24', 1695524047, 1, 0),
(17, 'page', '', 1, 7, '2023-09-24', 1695524071, '27.58.82.208', '', '2023-09-24', 1695524071, 1, 0),
(18, 'page', '', 9, 8, '2023-09-24', 1695524091, '27.58.82.208', '', '2023-09-24', 1695524091, 1, 0),
(19, 'page', '', 1, 1, '2023-09-24', 1695540026, '27.58.82.208', '', '2023-09-24', 1695540026, 1, 0),
(20, 'page', '', 1, 10, '2023-09-25', 1695624383, '27.58.82.208', '', '2023-09-25', 1695624383, 1, 0),
(21, 'page', '', 1, 11, '2023-09-25', 1695624416, '27.58.82.208', '', '2023-09-25', 1695624416, 1, 0),
(22, 'page', '', 1, 12, '2023-09-25', 1695624690, '27.58.82.208', '', '2023-09-25', 1695624690, 1, 0),
(23, 'page', '', 1, 13, '2023-09-25', 1695625502, '27.58.82.208', '', '2023-09-25', 1695625502, 1, 0),
(24, 'page', '', 1, 14, '2023-09-25', 1695625534, '27.58.82.208', '', '2023-09-25', 1695625534, 1, 0),
(25, 'page', '', 9, 15, '2023-09-25', 1695627154, '27.58.82.208', '', '2023-09-25', 1695627154, 1, 0),
(26, 'page', '', 9, 16, '2023-09-25', 1695635110, '27.58.82.208', '', '2023-09-25', 1695635110, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_field_group_type`
--

CREATE TABLE `tbl_field_group_type` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_field_group_type`
--

INSERT INTO `tbl_field_group_type` (`id`, `title`) VALUES
(1, 'text'),
(2, 'textarea'),
(3, 'image');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_library`
--

CREATE TABLE `tbl_library` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL,
  `system_mac` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_library`
--

INSERT INTO `tbl_library` (`id`, `title`, `image`, `date`, `time`, `system_ip`, `system_mac`, `update_date`, `update_time`, `user_id`, `status`) VALUES
(1, 'slider1', '1.png', '2023-09-24', 1695540665, '27.58.82.208', '', '2023-09-24', 1695540665, 1, 1),
(2, 'slider2', '2.png', '2023-09-24', 1695540707, '27.58.82.208', '', '2023-09-24', 1695540707, 1, 1),
(3, 'slider3', '3.png', '2023-09-24', 1695540725, '27.58.82.208', '', '2023-09-24', 1695540725, 1, 1),
(4, 'slider4', '4.png', '2023-09-24', 1695540743, '27.58.82.208', '', '2023-09-24', 1695540743, 1, 1),
(5, 'floor plan1', '11.png', '2023-09-24', 1695540895, '27.58.82.208', '', '2023-09-24', 1695540895, 1, 1),
(6, 'floor plan2', '21.png', '2023-09-24', 1695540922, '27.58.82.208', '', '2023-09-24', 1695540922, 1, 1),
(7, 'floor plan3', '31.png', '2023-09-24', 1695540939, '27.58.82.208', '', '2023-09-24', 1695540939, 1, 1),
(8, 'floor plan4', '41.png', '2023-09-24', 1695540963, '27.58.82.208', '', '2023-09-24', 1695540963, 1, 1),
(9, 'floor plan5', '5.png', '2023-09-24', 1695540990, '27.58.82.208', '', '2023-09-24', 1695540990, 1, 1),
(10, 'blog banner', 'banner-inner.jpg', '2023-09-24', 1695541417, '27.58.82.208', '', '2023-09-24', 1695541417, 1, 1),
(11, 'Blog1', 'Adset4.png', '2023-09-24', 1695541531, '27.58.82.208', '', '2023-09-24', 1695541531, 1, 1),
(12, 'Kapil Profile', '292271211_1690568511320645_7780021635068013555_n.jpg', '2023-09-24', 1695541817, '27.58.82.208', '', '2023-09-24', 1695541817, 1, 1),
(13, 'Contact Us Banner', 'Contact-us-banner.jpg', '2023-09-24', 1695542030, '27.58.82.208', '', '2023-09-24', 1695542030, 1, 1),
(14, 'Logo', 'logo.png', '2023-09-24', 1695545555, '27.58.82.208', '', '2023-09-24', 1695545555, 1, 1),
(15, '1.png', '12.png', '2023-09-25', 1695614663, '27.58.82.208', '', '2023-09-25', 1695614663, 1, 1),
(16, '4.png', '42.png', '2023-09-25', 1695614985, '27.58.82.208', '', '2023-09-25', 1695614985, 1, 1),
(17, '3.png', '32.png', '2023-09-25', 1695615089, '27.58.82.208', '', '2023-09-25', 1695615089, 1, 1),
(18, '4.png', '43.png', '2023-09-25', 1695615179, '27.58.82.208', '', '2023-09-25', 1695615179, 1, 1),
(19, '1.png', '13.png', '2023-09-25', 1695615501, '27.58.82.208', '', '2023-09-25', 1695615501, 1, 1),
(20, '2.png', '22.png', '2023-09-25', 1695615762, '27.58.82.208', '', '2023-09-25', 1695615762, 1, 1),
(22, '1.png', '14.png', '2023-09-25', 1695622939, '103.76.139.176', '', '2023-09-25', 1695622939, 2, 1),
(23, '2.png', '23.png', '2023-09-25', 1695622971, '103.76.139.176', '', '2023-09-25', 1695622971, 2, 1),
(24, '3.png', '33.png', '2023-09-25', 1695623005, '103.76.139.176', '', '2023-09-25', 1695623005, 2, 1),
(25, '4.png', '44.png', '2023-09-25', 1695623028, '103.76.139.176', '', '2023-09-25', 1695623028, 2, 1),
(26, 'WhatsApp Image 2023-09-09 at 10.37.54 (1).jpeg', 'WhatsApp_Image_2023-09-09_at_10.37.54_(1).jpeg', '2023-09-25', 1695626600, '103.76.139.176', '', '2023-09-25', 1695626600, 2, 1),
(27, 'WhatsApp Image 2023-09-09 at 10.37.54 (1).jpeg', 'WhatsApp_Image_2023-09-09_at_10.37.54_(1)1.jpeg', '2023-09-25', 1695626604, '103.76.139.176', '', '2023-09-25', 1695626604, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `page_type` varchar(255) NOT NULL,
  `child_page` varchar(255) NOT NULL,
  `page_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sorting_order` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL,
  `system_mac` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `title`, `page_type`, `child_page`, `page_id`, `menu_id`, `sorting_order`, `date`, `time`, `system_ip`, `system_mac`, `update_date`, `update_time`, `user_id`, `status`, `url`) VALUES
(1, 'Home', 'page', '', 1, 0, 1, '2023-09-22', 1695358144, '120.89.73.131', '', '2023-09-22', 1695358144, 1, 1, ''),
(4, 'About Us', 'blog', 'about_us', 0, 0, 2, '2023-09-23', 1695445136, '120.89.73.234', '', '2023-09-23', 1695445136, 1, 1, ''),
(5, 'Highlights', 'page', '', 5, 0, 3, '2023-10-02', 1696225007, '27.58.82.208', '', '2023-10-02', 1696225007, 1, 1, ''),
(6, 'Floor Plan', 'page', '', 6, 0, 4, '2023-09-22', 1695368046, '120.89.73.211', '', '2023-09-22', 1695368046, 1, 1, ''),
(7, 'Gallery', 'page', '', 7, 0, 5, '2023-09-22', 1695368058, '120.89.73.211', '', '2023-09-22', 1695368058, 1, 1, ''),
(8, 'Blog', 'blog', '', 0, 0, 6, '2023-09-24', 1695549251, '27.58.82.208', '', '2023-09-24', 1695549251, 1, 1, ''),
(9, 'Contact', 'page', '', 9, 0, 7, '2023-09-22', 1695368092, '120.89.73.211', '', '2023-09-22', 1695368092, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `excerpt` text NOT NULL,
  `image` int(11) NOT NULL,
  `mobile_image` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL,
  `system_mac` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `options_id` int(11) NOT NULL,
  `link_page` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `child_page` varchar(255) NOT NULL,
  `page_type` varchar(255) NOT NULL,
  `sorting_order` int(11) NOT NULL,
  `join_page_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `title`, `description`, `excerpt`, `image`, `mobile_image`, `date`, `time`, `system_ip`, `system_mac`, `update_date`, `update_time`, `user_id`, `status`, `url`, `options_id`, `link_page`, `category_id`, `child_page`, `page_type`, `sorting_order`, `join_page_id`) VALUES
(1, 'Home', '', '', 0, 0, '2023-09-23', 1695435219, '27.58.82.208', '', '2023-10-02', 1696241757, 1, 1, 'home', 0, '', '', '', 'page', 0, 0),
(4, 'About Us', '<p><br></p>', '', 10, 0, '2023-09-23', 1695436673, '27.58.82.208', '', '2023-10-02', 1696241771, 1, 1, 'about-us', 0, 'about_us', '', '', 'page', 0, 14),
(5, 'Highlights', '', '', 10, 0, '2023-09-22', 1695367949, '27.58.82.208', '', '2023-10-02', 1696241782, 1, 1, 'home/#highlights', 0, '', '', '', 'page', 0, 0),
(6, 'Floor Plan', '<p>Four periphery plazas with smartly designed drop-off and outdoor, multi-use paved and semi-green zones are designated to separate stages. One central, 42-meter-wide green avenue, runs across the entire development lined by a variety of outlets. <br><br></p>', '', 1, 15, '2023-09-22', 1695372626, '27.58.82.208', '', '2023-10-02', 1696241795, 1, 1, 'floor-plan', 0, 'floor-plan', '', '', 'page', 0, 0),
(7, 'Gallery', '', '', 0, 0, '2023-09-22', 1695367967, '27.58.82.208', '', '2023-10-02', 1696241862, 1, 1, 'home#gallery', 0, '', '', '', 'page', 0, 0),
(8, 'Blog', '', '', 10, 43, '2023-09-22', 1695375260, '27.58.82.208', '', '2023-10-02', 1696241814, 1, 1, 'blog', 0, 'blog', '', '', 'page', 0, 6),
(9, 'Contact', '', '', 13, 0, '2023-09-22', 1695377334, '27.58.82.208', '', '2023-10-02', 1696241829, 1, 1, 'contact-us', 0, 'contact-us', '', '', 'page', 0, 0),
(12, 'COMPANY', '<p>Westway is a real estate developer envisioning a niche marketplace for itself that will reflect excellent planning, unique engineering and total prowess. We understand that real estate customers don’t just buy a product but invest in a future that will gain them a sense of great security and a feeling of meeting their dreams. We work tirelessly to meet their expectations and are dedicated to delivering projects that stand beyond the contract fulfilling a promise of entrustment. Our team consists of architects, engineers, contractors, and many more skilled professionals who collaborate with their hearts to create something exceptionally potential and benchmark-worthy.  In order to meet a world standard, we incorporate cutting-edge technologies and A-grade materials ensuring a quality that will rise above the competition. Central 50 like our, just concluded successful commercial venture Central Market, is in all comparison a smartly designed high-grade Highstreet project with seamless features and amenities setting a tremendous benchmark in the marketplace.</p><p>Customer satisfaction is our motto and to achieve high levels of customer satisfaction we have an in house team of architects, subcontractors and vendors. Moreover, our ethical business processes and timely execution of our tasks makes us a trustworthy and dependable name in the Indian real estate industry.</p><p>Believers in Karma, we focus putting in our honest and sincere efforts in everything we do. We trust that if the input is meticulous and truthful, the results are automatic.</p>', '', 10, 0, '2023-09-23', 1695442257, '103.76.139.176', '', '2023-09-25', 1695623987, 2, 1, 'COMPANY', 0, '', '', 'about_us', 'blog', 0, 0),
(13, 'CRC', '<p>Westway is conscious of the impact we have in ways that enhance society, staff well-being and the environment. With our keen sense of community welfare, we have participated in numerous charity sport events, donating all proceeds to charity.<br></p>', '', 10, 0, '2023-09-23', 1695443406, '103.76.139.176', '', '2023-09-25', 1695624677, 2, 1, 'CRC', 0, '', '', 'about_us', 'blog', 1, 0),
(29, 'slider1', '', '', 1, 0, '2023-09-24', 1695540764, '27.58.82.208', '', '2023-09-24', 1695540764, 1, 1, '', 0, '', '', 'slider', 'gallery', 1, 0),
(30, 'slider2', '', '', 2, 0, '2023-09-24', 1695540786, '27.58.82.208', '', '2023-09-24', 1695540786, 1, 1, '', 0, '', '', 'slider', 'gallery', 2, 0),
(31, 'slider3', '', '', 3, 0, '2023-09-24', 1695540799, '27.58.82.208', '', '2023-09-24', 1695540799, 1, 1, '', 0, '', '', 'slider', 'gallery', 3, 0),
(32, 'slider4', '', '', 4, 0, '2023-09-24', 1695540813, '27.58.82.208', '', '2023-09-24', 1695540813, 1, 1, '', 0, '', '', 'slider', 'gallery', 4, 0),
(33, 'Floor Plan1', '', '', 5, 0, '2023-09-24', 1695541192, '152.58.72.176', '', '2023-09-24', 1695541192, 1, 1, '', 0, '', '', 'gallery_floor_plan', 'gallery', 1, 0),
(34, 'Floor Plan2', '', '', 6, 0, '2023-09-24', 1695541214, '152.58.72.176', '', '2023-09-24', 1695541214, 1, 1, '', 0, '', '', 'gallery_floor_plan', 'gallery', 2, 0),
(35, 'Floor Plan3', '', '', 7, 0, '2023-09-24', 1695541248, '152.58.72.176', '', '2023-09-24', 1695541248, 1, 1, '', 0, '', '', 'gallery_floor_plan', 'gallery', 3, 0),
(36, 'Floor Plan4', '', '', 8, 0, '2023-09-24', 1695541264, '152.58.72.176', '', '2023-09-24', 1695541264, 1, 1, '', 0, '', '', 'gallery_floor_plan', 'gallery', 4, 0),
(37, 'Floor Plan5', '', '', 9, 0, '2023-09-24', 1695541306, '152.58.72.176', '', '2023-09-24', 1695541306, 1, 1, '', 0, '', '', 'gallery_floor_plan', 'gallery', 5, 0),
(38, 'Blog1', '', '', 11, 0, '2023-09-24', 1695541562, '27.58.82.208', '', '2023-09-24', 1695541687, 1, 1, 'Blog1', 0, '', '', '', 'blog', 1, 0),
(39, 'A world of finer taste and élégante', '<p>Affluence is embedded in every inch of Central 50, located at Noida Sector 50. It consists of world-class brands along with cafes, restaurants, and entertainment zones echoing grandeur. Experience indulgence coursing through your blood here with the taste of pure extravaganza.<br></p>', '', 22, 0, '2023-09-25', 1695622092, '103.81.182.186', '', '2023-10-02', 1696223661, 1, 1, 'A-world-of-finer-taste-and-C3A9lC3A9gante', 0, '', '', 'home_sec', 'blog', 2, 0),
(40, 'Central 50', '<p><font color=\"#333333\">Central 50 is located at sector 50 is having modern retail shops and retail spaces that are developed considering the modern high street concept. These shops are an essential part of social and commercial activities. The objective of the high street market is to provide essential goods and services to the local community. These shops and retail spaces offer varied goods and services, making them an integral part of the town.</font><br></p>', '', 0, 0, '2023-09-25', 1695622387, '27.58.82.208', '', '2023-09-25', 1695623539, 1, 1, 'Central-50', 0, '', '', 'home_sec2', 'blog', 0, 0),
(41, 'Company', '<p>Westway is a real estate developer envisioning a niche marketplace for itself that will reflect excellent planning, unique engineering and total prowess. We understand that real estate customers don’t just buy a product but invest in a future that will gain them a sense of great security and a feeling of meeting their dreams. We work tirelessly to meet their expectations and are dedicated to delivering projects that stand beyond the contract fulfilling a promise of entrustment. Our team consists of architects, engineers, contractors, and many more skilled professionals who collaborate with their hearts to create something exceptionally potential and benchmark-worthy.&nbsp; In order to meet a world standard, we incorporate cutting-edge technologies and A-grade materials ensuring a quality that will rise above the competition. Central 50 like our, just concluded successful commercial venture Central Market, is in all comparison a smartly designed high-grade Highstreet project with seamless features and amenities setting a tremendous benchmark in the marketplace.<br></p>', '', 0, 0, '2023-09-25', 1695622407, '27.58.82.208', '', '2023-09-25', 1695623528, 1, 1, 'Company', 0, '', '', 'home_sec2', 'blog', 0, 0),
(42, 'Mission & Vision', '<p style=\"margin-bottom: 12px; padding: 0px; list-style: none; text-align: justify; font-family: \" open=\"\" sans\";=\"\" width:=\"\" 1022.8px;=\"\" line-height:=\"\" 26px;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" font-size:=\"\" 16px;\"=\"\">\"To be the Best real estate Construction Company renowned for transparency, trust, quality, commitment and prudent business policies”</p><p style=\"margin-bottom: 12px; padding: 0px; list-style: none; text-align: justify; font-family: \" open=\"\" sans\";=\"\" width:=\"\" 1022.8px;=\"\" line-height:=\"\" 26px;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" font-size:=\"\" 16px;\"=\"\"><br></p><p style=\"margin-bottom: 12px; padding: 0px; list-style: none; text-align: justify; font-family: \" open=\"\" sans\";=\"\" width:=\"\" 1022.8px;=\"\" line-height:=\"\" 26px;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" font-size:=\"\" 16px;\"=\"\"><br></p><p style=\"margin-bottom: 12px; padding: 0px; list-style: none; text-align: justify; font-family: \" open=\"\" sans\";=\"\" width:=\"\" 1022.8px;=\"\" line-height:=\"\" 26px;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" font-size:=\"\" 16px;\"=\"\">Our vision statement can be encapsulated in our corporate philosophy and motto of `building a Heaven on Earth’. To envision, design and construct the most magnificent landmarks and edifices; to contribute tangibly in regional and national development by way of key infrastructure projects, and to protect and preserve the environment we live in.</p>', '', 0, 0, '2023-09-25', 1695622419, '27.58.82.208', '', '2023-09-25', 1695623519, 1, 1, 'Mission-and-Vision', 0, '', '', 'home_sec2', 'blog', 0, 0),
(43, 'Unfold an eloquent Highstreet Experience.', '<p>Central 50 is crafted with customized design and layouts to highlight your retail experience with the utmost clarity and impeccable visibility for your brand. Unravelling an enhanced experience with composed exploration for visitors that meet their desire for a simple and sorted shopping experience.<br></p>', '', 23, 0, '2023-09-25', 1695622539, '103.76.139.176', '', '2023-09-25', 1695622979, 2, 1, 'active-bg-white', 0, '', '', 'home_sec', 'blog', 0, 0),
(44, 'A Palais of Ecstatic Hangouts', '<p>Central 50 offers a splendid mix of shops, cafes, restaurants and amusement centers to hang out with friends and family that cater to a gratifying experience for the visitors. Spread in a strategic layout, it harbours a mixed sense of euphoria and ecstasy evoking peerless juxtaposition of unhindered joviality<br></p>', '', 25, 0, '2023-09-25', 1695622609, '103.76.139.176', '', '2023-09-25', 1695623033, 2, 1, 'A-Palais-of-ecstatic-hangouts', 0, '', '', 'home_sec', 'blog', 0, 0),
(45, ' The nucleus of an emerging locale', '<p>Noida Sector 50, is a rapidly forming point of focus due to its many perks. Highrise residential and alluring commercial developments have marked it as a high-catchment area. Proximity to the metro station, and a well-laid network of roadways connecting to all around Delhi NCR.<br></p>', '', 24, 0, '2023-09-25', 1695622686, '103.76.139.176', '', '2023-09-25', 1695623010, 2, 1, 'The-nucleus-of-an-emerging-locale', 0, '', '', 'home_sec', 'blog', 0, 0),
(49, '08', '<p>Minutes drive from Noida</p><p>Sector 50 Metro</p>', '', 0, 0, '2023-09-25', 1695623935, '103.76.139.176', '', '2023-09-25', 1695624155, 2, 1, 'xxx04', 0, '', '', 'home_sec3', 'blog', 0, 0),
(50, '12', '<p>Minutes drive from</p><p>Noida Golf Course</p>', '', 0, 0, '2023-09-25', 1695623945, '103.76.139.176', '', '2023-09-25', 1695624126, 2, 1, 'xxx05', 0, '', '', 'home_sec3', 'blog', 0, 0),
(51, '02', '<p>Minutes drive from</p><p>Residential Complexes</p>', '', 0, 0, '2023-09-25', 1695623952, '103.76.139.176', '', '2023-09-25', 1695624068, 2, 1, 'xxx06', 0, '', '', 'home_sec3', 'blog', 0, 0),
(52, '16', '<p>Minutes drive from</p><p>Noida Sector 18</p>', '', 0, 0, '2023-09-25', 1695624177, '103.76.139.176', '', '2023-09-25', 1695624180, 2, 1, '16', 0, '', '', 'home_sec3', 'blog', 0, 0),
(53, '12', '<p>Minutes drive from</p><p>Kailash Hospital</p>', '', 0, 0, '2023-09-25', 1695624212, '103.76.139.176', '', '2023-09-25', 1695624214, 2, 1, '12', 0, '', '', 'home_sec3', 'blog', 0, 0),
(54, '16', '<p>Minutes&nbsp; drive from</p><p>FNG Expressway</p>', '', 0, 0, '2023-09-25', 1695624289, '103.76.139.176', '', '2023-09-25', 1695624289, 2, 1, '16x', 0, '', '', 'home_sec3', 'blog', 0, 0),
(55, 'What is the company name of Central 50?', '<p>Under the aegis of Westway, Central 50 is a benchmark in commercial and retail development, a one of its kind project located at Sector 50, Noida.</p>', '', 0, 0, '2023-09-25', 1695625002, '103.76.139.176', '', '2023-09-25', 1695625312, 2, 1, 'q1', 0, '', '', 'home_sec4', 'blog', 0, 0),
(57, 'How to reach Central 50 by Metro?', '<p>By metro: Central 50 is located near the Noida City Centre metro station, which is on the Blue Line of the Delhi metro. The mall is easily accessible by metro and provides a convenient option for visitors.</p><div><br></div>', '', 0, 0, '2023-09-25', 1695625332, '103.76.139.176', '', '2023-09-25', 1695625332, 2, 1, 'How-to-reach-Central-50-by-Metro', 0, '', '', 'home_sec4', 'blog', 0, 0),
(58, 'Is Central 50 good investment?', '<p>Central 50 is ideal for you if you want to make a good commercial investment in Noida. It is one of the largest of its kind in the North and has very good connectivity to Delhi too. The last time I looked at the project I noticed a few good brand have already signed up with them.</p><div><br></div>', '', 0, 0, '2023-09-25', 1695625344, '103.76.139.176', '', '2023-09-25', 1695625344, 2, 1, 'Is-Central-50-good-investment', 0, '', '', 'home_sec4', 'blog', 0, 0),
(59, 'Which metro station is closest to Central 50?', '<p>The closest stations to Spectrum Metro are: Noida Sector 50 is 1122 meters away, 15 min walk. Noida Sector 34 is 2657 meters away, 34 min walk.</p>', '', 0, 0, '2023-09-25', 1695625358, '103.76.139.176', '', '2023-09-25', 1695625358, 2, 1, 'Which-metro-station-is-closest-to-Central-50', 0, '', '', 'home_sec4', 'blog', 0, 0),
(60, 'Cetral 50', '<p>Central 50</p>', '', 15, 0, '2023-09-25', 1695626108, '103.76.139.176', '', '2023-09-25', 1695626456, 2, 1, '', 0, '', '', '', 'gallery', 0, 0),
(61, 'Central 50', '<p>Central 50<br></p>', '', 17, 0, '2023-09-25', 1695626484, '103.76.139.176', '', '2023-09-25', 1695626484, 2, 1, '', 0, '', '', '', 'gallery', 0, 0),
(62, 'Central 50', '<p>Central 50<br></p>', '', 16, 0, '2023-09-25', 1695626537, '103.76.139.176', '', '2023-09-25', 1695626537, 2, 1, '', 0, '', '', '', 'gallery', 0, 0),
(63, 'Central 50', '<p>Central 50<br></p>', '', 20, 0, '2023-09-25', 1695626566, '103.76.139.176', '', '2023-09-25', 1695626566, 2, 1, '', 0, '', '', '', 'gallery', 0, 0),
(64, 'Central 50', '<p>Central 50<br></p>', '', 26, 0, '2023-09-25', 1695626613, '103.76.139.176', '', '2023-09-25', 1695626613, 2, 1, '', 0, '', '', '', 'gallery', 0, 0),
(66, 'Facebook', '<i class=\'fa fa-facebook\' aria-hidden=\'true\'></i>', '', 0, 0, '2023-10-02', 1696235209, '27.58.82.208', '', '2023-10-02', 1696235942, 1, 1, '#', 0, '', '', '', 'social_icon', 1, 0),
(67, 'twitter', '<i class=\'fa fa-twitter\' aria-hidden=\'true\'></i>', '', 0, 0, '2023-10-02', 1696235303, '27.58.82.208', '', '2023-10-02', 1696235953, 1, 1, 'twitter', 0, '', '', '', 'social_icon', 2, 0),
(68, 'linkedin', '<i class=\'fa fa-linkedin\' aria-hidden=\'true\'></i>', '', 0, 0, '2023-10-02', 1696235372, '27.58.82.208', '', '2023-10-02', 1696235961, 1, 1, 'linkedin', 0, '', '', '', 'social_icon', 3, 0),
(69, 'instagram', '<i class=\'fa fa-instagram\' aria-hidden=\'true\'></i>', '', 0, 0, '2023-10-02', 1696235397, '27.58.82.208', '', '2023-10-02', 1696236057, 1, 1, 'instagram', 0, '', '', '', 'social_icon', 5, 0),
(70, 'youtube', '<i class=\'fa fa-youtube-play\' aria-hidden=\'true\'></i>', '', 0, 0, '2023-10-02', 1696235440, '27.58.82.208', '', '2023-10-02', 1696236065, 1, 1, 'youtube', 0, '', '', '', 'social_icon', 4, 0),
(71, 'whatsapp', '<i class=\'fa fa-whatsapp\' aria-hidden=\'true\'></i>', '', 0, 0, '2023-10-02', 1696235493, '27.58.82.208', '', '2023-10-02', 1696236048, 1, 1, 'whatsapp', 0, '', '', '', 'social_icon', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission_page`
--

CREATE TABLE `tbl_permission_page` (
  `id` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `page_type` text NOT NULL,
  `sorting_order` int(11) NOT NULL,
  `fafa_icon` text NOT NULL,
  `menu_id` int(11) NOT NULL,
  `page_setting` int(11) NOT NULL,
  `page_theme` int(11) NOT NULL,
  `page_add` int(11) NOT NULL,
  `page_view` int(11) NOT NULL,
  `join_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission_page`
--

INSERT INTO `tbl_permission_page` (`id`, `page_title`, `page_type`, `sorting_order`, `fafa_icon`, `menu_id`, `page_setting`, `page_theme`, `page_add`, `page_view`, `join_page`) VALUES
(1, 'Profile Management', 'profile_management', 200, 'PGkgY2xhc3M9ImZhIGZhLXBpZS1jaGFydCIgYXJpYS1oaWRkZW49InRydWUiPjwvaT4=', 0, 0, 0, 0, 0, 0),
(2, 'Manage Menu', 'manage_menu', 2, 'PGkgY2xhc3M9ImZhIGZhLWJhcnMiIGFyaWEtaGlkZGVuPSJ0cnVlIj48L2k+', 0, 0, 0, 0, 0, 0),
(3, 'Manage Page', 'manage_page', 1, 'PGkgY2xhc3M9ImZhIGZhLWZpbGVzLW8iIGFyaWEtaGlkZGVuPSJ0cnVlIj48L2k+', 0, 0, 0, 0, 0, 0),
(4, 'Manage Library', 'manage_library', 196, 'PGkgY2xhc3M9ImZhIGZhLXBpY3R1cmUtbyIgYXJpYS1oaWRkZW49InRydWUiPjwvaT4=', 0, 0, 0, 1, 1, 0),
(5, 'Manage Field Group', 'manage_field_group', 195, 'PGkgY2xhc3M9ImZhIGZhLXB1enpsZS1waWVjZSIgYXJpYS1oaWRkZW49InRydWUiPjwvaT4=', 0, 0, 0, 0, 0, 0),
(6, 'Manage Blog', 'manage_blog', 4, 'PGkgY2xhc3M9ImZhIGZhLXRodW1iLXRhY2siIGFyaWEtaGlkZGVuPSJ0cnVlIj48L2k+', 0, 1, 0, 1, 1, 1),
(7, 'Manage Category', 'manage_category', 3, 'PGkgY2xhc3M9ImZhIGZhLXNub3dmbGFrZS1vIiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPg==', 0, 0, 0, 0, 0, 0),
(9, 'Manage Gallery', 'manage_gallery', 6, 'PGkgY2xhc3M9ImZhIGZhLWNhbWVyYSIgYXJpYS1oaWRkZW49InRydWUiPjwvaT4=', 0, 1, 0, 1, 1, 1),
(10, 'Manage Slider', 'manage_slider', 5, 'PGkgY2xhc3M9ImZhIGZhLXNsaWRlcnMiIGFyaWEtaGlkZGVuPSJ0cnVlIj48L2k+', 9, 1, 0, 1, 1, 0),
(11, 'Manage Users', 'manage_users', 198, 'PGkgY2xhc3M9ImZhIGZhLXVzZXIiIGFyaWEtaGlkZGVuPSJ0cnVlIj48L2k+', 0, 0, 0, 0, 0, 0),
(12, 'Manage User Type', 'manage_user_type', 197, 'PGkgY2xhc3M9ImZhIGZhLXVzZXItc2VjcmV0IiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPg==', 0, 0, 0, 0, 0, 0),
(13, 'Manage Setting', 'manage_setting', 199, 'PGkgY2xhc3M9ImZhIGZhLWNvZ3MiIGFyaWEtaGlkZGVuPSJ0cnVlIj48L2k+', 0, 1, 1, 0, 0, 0),
(14, 'Manage About Us', 'manage_about_us', 4, 'PGkgY2xhc3M9ImZhIGZhLW5ld3NwYXBlci1vIiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPg==', 6, 1, 0, 1, 1, 0),
(15, 'Manage Home Sec', 'manage_home_sec', 4, 'PGkgY2xhc3M9ImZhIGZhLW5ld3NwYXBlci1vIiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPg==', 6, 1, 0, 1, 1, 0),
(16, 'Manage Gallery Floor Plan', 'manage_gallery_floor_plan', 6, 'PGkgY2xhc3M9ImZhIGZhLWNhbWVyYSIgYXJpYS1oaWRkZW49InRydWUiPjwvaT4=', 9, 1, 0, 1, 1, 0),
(17, 'Manage Home Sec2', 'manage_home_sec2', 4, 'PGkgY2xhc3M9ImZhIGZhLW5ld3NwYXBlci1vIiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPg==', 6, 1, 0, 1, 1, 0),
(18, 'Manage Home Sec3', 'manage_home_sec3', 4, 'PGkgY2xhc3M9ImZhIGZhLW5ld3NwYXBlci1vIiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPg==', 6, 1, 0, 1, 1, 0),
(19, 'Manage Home Sec4', 'manage_home_sec4', 4, 'PGkgY2xhc3M9ImZhIGZhLW5ld3NwYXBlci1vIiBhcmlhLWhpZGRlbj0idHJ1ZSI+PC9pPg==', 6, 1, 0, 1, 1, 0),
(22, 'Activity Log', 'activity_log', 0, '', 0, 0, 0, 0, 0, 0),
(23, 'Manage Social Icon', 'manage_social_icon', 0, '', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission_settings`
--

CREATE TABLE `tbl_permission_settings` (
  `id` int(11) NOT NULL,
  `user_type` text NOT NULL,
  `page_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permission_settings`
--

INSERT INTO `tbl_permission_settings` (`id`, `user_type`, `page_type`) VALUES
(372, 'Super_Admin', 'activity_log'),
(373, 'Super_Admin', 'manage_about_us'),
(374, 'Super_Admin', 'manage_blog'),
(375, 'Super_Admin', 'manage_category'),
(376, 'Super_Admin', 'manage_field_group'),
(377, 'Super_Admin', 'manage_gallery'),
(378, 'Super_Admin', 'manage_gallery_floor_plan'),
(379, 'Super_Admin', 'manage_home_sec'),
(380, 'Super_Admin', 'manage_home_sec2'),
(381, 'Super_Admin', 'manage_home_sec3'),
(382, 'Super_Admin', 'manage_home_sec4'),
(383, 'Super_Admin', 'manage_library'),
(384, 'Super_Admin', 'manage_menu'),
(385, 'Super_Admin', 'manage_page'),
(386, 'Super_Admin', 'manage_setting'),
(387, 'Super_Admin', 'manage_slider'),
(388, 'Super_Admin', 'manage_social_icon'),
(389, 'Super_Admin', 'manage_user_type'),
(390, 'Super_Admin', 'manage_users'),
(391, 'Super_Admin', 'profile_management'),
(392, 'Admin', 'activity_log'),
(393, 'Admin', 'manage_about_us'),
(394, 'Admin', 'manage_blog'),
(395, 'Admin', 'manage_category'),
(396, 'Admin', 'manage_field_group'),
(397, 'Admin', 'manage_gallery'),
(398, 'Admin', 'manage_gallery_floor_plan'),
(399, 'Admin', 'manage_home_sec'),
(400, 'Admin', 'manage_home_sec2'),
(401, 'Admin', 'manage_home_sec3'),
(402, 'Admin', 'manage_home_sec4'),
(403, 'Admin', 'manage_library'),
(404, 'Admin', 'manage_menu'),
(405, 'Admin', 'manage_page'),
(406, 'Admin', 'manage_setting'),
(407, 'Admin', 'manage_slider'),
(408, 'Admin', 'manage_social_icon'),
(409, 'Admin', 'manage_user_type'),
(410, 'Admin', 'manage_users');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_routes`
--

CREATE TABLE `tbl_routes` (
  `id` int(11) NOT NULL,
  `route` varchar(255) NOT NULL,
  `controller` varchar(255) NOT NULL,
  `created` varchar(255) NOT NULL,
  `updated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_routes`
--

INSERT INTO `tbl_routes` (`id`, `route`, `controller`, `created`, `updated`) VALUES
(1, 'About-Us/(:any)', 'home/blog/$1', '', ''),
(2, 'Blog/(:any)', 'home/blog/$1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mobile_image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `system_ip` varchar(30) NOT NULL,
  `system_mac` varchar(30) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `page_type` varchar(100) NOT NULL,
  `category_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `image`, `mobile_image`, `date`, `time`, `system_ip`, `system_mac`, `update_date`, `update_time`, `user_id`, `status`, `url`, `page_type`, `category_id`) VALUES
(2, 'Central 50', '12', '22', '2023-09-22', 1695369470, '103.76.139.176', '', '2023-09-22', 1695369470, 2, 1, '', '', ''),
(3, 'Central 50', '14', '15', '2023-09-22', 1695369273, '103.76.139.176', '', '2023-09-22', 1695369273, 2, 1, '', '', ''),
(4, 'Central 50', '16', '17', '2023-09-22', 1695369308, '103.76.139.176', '', '2023-09-22', 1695369308, 2, 1, '', '', ''),
(5, 'Central 50', '18', '19', '2023-09-22', 1695369516, '103.76.139.176', '', '2023-09-22', 1695369516, 2, 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `image` text NOT NULL,
  `user_type` text NOT NULL,
  `login_time` int(11) NOT NULL,
  `updateme` int(11) NOT NULL,
  `last_login_time` int(11) NOT NULL,
  `mobile_no` text NOT NULL,
  `whats_app` text NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `system_ip` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `username`, `password`, `image`, `user_type`, `login_time`, `updateme`, `last_login_time`, `mobile_no`, `whats_app`, `date`, `time`, `update_date`, `update_time`, `system_ip`, `user_id`, `status`) VALUES
(1, 'Kapil Sharama', 'kapil707sharma@gmail.com', 'kapil707', '44209a6a592dea91bcf7d4dd53e47a5a', '12', 'Super_Admin', 1696241732, 0, 1696233865, '', '', '2023-09-26', 1695708530, '2023-09-26', 1695708530, '27.58.82.208', 1, 1),
(2, 'rohit', 'rohitverma.delhi1993@gmail.com', '', '44209a6a592dea91bcf7d4dd53e47a5a', '', 'Admin', 1696055947, 1, 1696055472, '', '', '2023-09-26', 1695708530, '2023-09-26', 1695708530, '27.58.82.208', 1, 1),
(6, 'xxx', 'xxx@gmailc.om', '', '9606e211a824d4b7f2064e95aaf51ea1', '', 'Admin', 0, 1, 0, '', '', '2023-09-26', 1695708530, '2023-09-26', 1695708530, '27.58.82.208', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_type`
--

CREATE TABLE `tbl_user_type` (
  `id` int(11) NOT NULL,
  `user_title` text NOT NULL,
  `user_type` text NOT NULL,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `update_date` date NOT NULL,
  `update_time` int(11) NOT NULL,
  `system_ip` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_type`
--

INSERT INTO `tbl_user_type` (`id`, `user_title`, `user_type`, `date`, `time`, `update_date`, `update_time`, `system_ip`, `user_id`, `status`) VALUES
(1, 'Super Admin', 'Super_Admin', '2023-09-26', 1695708287, '2023-09-26', 1695708287, '27.58.82.208', 1, 1),
(2, 'Admin', 'Admin', '2023-09-26', 1695708287, '2023-09-26', 1695708287, '27.58.82.208', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website`
--

CREATE TABLE `tbl_website` (
  `id` int(11) NOT NULL,
  `mydata` text NOT NULL,
  `page_type` text NOT NULL,
  `update_time` text NOT NULL,
  `update_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_website`
--

INSERT INTO `tbl_website` (`id`, `mydata`, `page_type`, `update_time`, `update_date`) VALUES
(1, 'New About us', 'title', '1681542117', '2023-04-15'),
(2, 'Untitled_design(2).png', 'logo', '1681367659', '2023-04-13'),
(3, 'Real Estate Web Portal', 'title2', '1657262713', '2022-07-08'),
(4, '<p>CENTRAL MARKET NOIDA,\r\n<br>Plot C -1, Sector 120, NOIDA, UP - 201301</p>\r\n<!--\r\n<p>For Channel Partner Inquiry :\r\n<br>Phone: <a href=\'tel:+91-78278 82153\'> +91-78278 82153</a> </p>\r\n<p >For Leasing Inquiry :\r\n<br>Phone: <a href=\'tel:78278 82153\'>+91-78278 82153</a>\r\n<br>Mail:\r\n <a href=\'mailto:info@fairfoxitinfra.com\'>info@fairfoxitinfra.com</a> </p>\r\n---!>', 'footeraddress', '1688632103', '2023-07-06'),
(5, '+91 9953361111', 'topphone', '1682775672', '2023-04-29'),
(6, 'contact@centralmarketnoida.com', 'topemail', '1682774674', '2023-04-29'),
(7, 'Find the ideal retail locations for your brand at Central Market Noida Call Now to Get The Best Deal! Flexible Payment Plans. Pre Leased Options.', 'meta_discription', '1690358958', '2023-07-26'),
(8, 'Central Market, Central Market Noida, CM 120, CM 120 Noida, High Street Retail Shops, Hypermarket Noida, Hing End Shopping, shopping mall, Shopping Centre, Central Market Sector 120 Noida. ', 'meta_keywords', '1682843819', '2023-04-30'),
(9, 'Central Market  | Central Market 120 Noida', 'meta_title', '1685171337', '2023-05-27'),
(10, 'https://www.facebook.com/centralmarketnoida', 'facebook', '1682840842', '2023-04-30'),
(11, 'https://twitter.com/CM120Noida', 'twitter', '1682840882', '2023-04-30'),
(12, '7827882153', 'whatsapp', '1657620249', '2022-07-12'),
(13, 'https://www.linkedin.com/company/centralmarketnoida/', 'linkedin', '1682840849', '2023-04-30'),
(14, '<div style=\'color:white;text-align:justify;\'><b style=\'color:white;\'> Disclaimer : </b> The images, appearances, colours, etc. given herein are mere artistic impression for representation purposes only and do not constitute an offer, an invitation to offer and/or commitment of any nature between the promoter and the recipient. The data/information herein is intended to give a general understanding of the subject matter and is subject to change without any prior notice. Readers are therefore requested to verify all details, including area, amenities, services, terms of sale and payment schedule and other relevant terms independently with the promoter prior to arriving at any decision of buying any plot in the said project, the binding offering shall be governed by the terms and conditions of the Agreement for sale only. In no event will the Promoter be liable for any claim made by the reader including seeking any cancellation and/or withdrawal for any of the inaccuracies in the information provided in the advertisement, though all the efforts have been made to ensure accuracy. We also do not hold any responsibility for any information provided by any broker/channel partner/property dealer or made available on any website/email communication other than official website/email/correspondences. [ 1 sq.mt. = 10.764 sq.ft, 1 sq. mt. = 1.196 sq.yd ]   <br><br>\r\n\r\n<center>RERA No. UPRERAPRJ101301 | For reference visit:<a href=\'https://www.up-rera.in/\'> www.up-rera.in</a </center></div>', 'footercopyright', '1682920663', '2023-05-01'),
(15, '+91 9953361111', 'footerphone', '1682775344', '2023-04-29'),
(16, 'contact@centralmarketnoida.com', 'footeremail', '1682671499', '2023-04-28'),
(17, ' ', 'footeraddress1', '1658215032', '2022-07-19'),
(18, 'Untitled_design_3_-removebg-preview(2).png', 'logo2', '1681368969', '2023-04-13'),
(19, 'Central-Market-Logo.png', 'icon', '1682840827', '2023-04-30'),
(20, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56074.379447186315!2d77.36683552348623!3d28.550276657134855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef73d004916d%3A0x72d1af7057267ab3!2sCentral%20Market!5e0!3m2!1sen!2sin!4v1689423368952!5m2!1sen!2sin\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'map', '1689423492', '2023-07-15'),
(21, 'Noida.png', 'blog_banner', '1676892269', '2023-02-20'),
(22, 'Contact-us-banner.jpg', 'contact_us_banner', '1658818624', '2022-07-26'),
(23, 'fashion_sale_(1).png', 'media_banner', '1677164969', '2023-02-23'),
(24, 'Career-Banner2.jpg', 'career_banner', '1658821731', '2022-07-26'),
(25, 'Untitled_design_(30).png', 'career_hiring_banner', '1661501780', '2022-08-26'),
(26, 'Central_Market_Logo_Final_ctc-1(1)2.png', 'logo3', '1683356233', '2023-05-06'),
(27, 'banner-inner1.jpg', 'features_banner', '1659596003', '2022-08-04'),
(28, '<p>It is single commercial opportunity surrounded by more than 8 lakh population for an assured foot fall, Fairfox EON offers a business-friendly environment. Be it your requirement for a retail, office space or serviced apartments, it offers a complete package of an excellent location and best of its amenities. </p>', 'features', '1667307106', '2022-11-01'),
(29, 'banner-inner4.jpg', 'construction1_banner', '1659694420', '2022-08-05'),
(30, 'banner-inner5.jpg', 'construction2_banner', '1659694434', '2022-08-05'),
(31, 'https://www.youtube.com/@CentralMarketMall', 'youtube', '1682841540', '2023-04-30'),
(32, ' xyz', 'job_description', '1661499745', '2022-08-26'),
(33, 'banner-inner6.jpg', 'floor_plan_banner', '1659959416', '2022-08-08'),
(34, 'Company Walkthrough', 'home_page_video_title', '1674919742', '2023-01-28'),
(35, 'https://www.youtube.com/watch?v=OhD6w8NU_Rs', 'home_page_video_url', '1674919938', '2023-01-28'),
(36, 'https://www.instagram.com/centralmarketnoida/', 'googleplus', '1683355326', '2023-05-06'),
(37, '9953361111', 'whatsappno', '1682774789', '2023-04-29'),
(38, 'rohitverma.delhi1993@gmail.com', 'email_for_lead', '1682772823', '2023-04-29'),
(39, 'Untitled_design(2)1.png', 'logo4', '1681369031', '2023-04-13'),
(40, '2.jpeg', 'popup', '1682673740', '2023-04-28'),
(41, '0', 'popupstatus', '1660812490', '2022-08-18'),
(42, 'con_banner.jpeg', 'construction_banner', '1675067145', '2023-01-30'),
(43, '22.png', 'site_plan_banner', '1660911134', '2022-08-19'),
(44, 'fairfox eon brochure-compressed.pdf', 'ebrochure', '1660984123', '2022-08-20'),
(45, '1', 'ebrochurestatus', '1660984036', '2022-08-20'),
(46, 'sanjuv63@gmail.com', 'email_for_career_lead', '1677743696', '2023-03-02'),
(47, '<meta name=\"google-site-verification\" content=\"6pxmE7W1JPqJ4McE-0iCrPUgw5AWNaUeSLV1Ve1fTso\" />\r\n\r\n\r\n<!-- Google tag (gtag.js) -->\r\n<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-KX3TE3FJBJ\"></script>\r\n<script>\r\n  window.dataLayer = window.dataLayer || [];\r\n  function gtag(){dataLayer.push(arguments);}\r\n  gtag(\'js\', new Date());\r\n\r\n  gtag(\'config\', \'G-KX3TE3FJBJ\');\r\n</script>\r\n\r\n', 'google_code', '1682842916', '2023-04-30'),
(48, 'Coming Soon', 'company_text', '1675319897', '2023-02-02'),
(49, 'project_9.jpg', 'company_hiring_banner', '1675239306', '2023-02-01'),
(50, '1.jpeg', 'company_banner', '1683021520', '2023-05-02'),
(51, '<h4>Address</h4>\r\n<p>Sector 120, Noida</p>\r\n<ul>\r\n	<li>Easy access to Delhi, Noida, Greater Noida, Ghaziabad and Faridabad</li>\r\n	<li>Well connected to New Delhi, Airport & Railway Station via the DND flyway</li>\r\n	<li>10* minutes from DND flyway</li>\r\n	<li>10* minutes from sector 37, metro station</li>\r\n	<li>10* minutes from sector 18, Noida</li>\r\n	<li>5* minutes from Mahamaya flyover</li>\r\n	<li>Proximity to FNG Expressway and proposed ISBT</li>\r\n</ul>', 'company_location_text', '1675419308', '2023-02-03'),
(52, 'project_91.jpg', 'company_location_photo', '1675419072', '2023-02-03'),
(53, 'Contact-us-banner1.jpg', 'contact_us_banner_mobile', '1682924788', '2023-05-01'),
(54, 'https://www.instagram.com/centralmarketnoida/', 'instagram', '1683355357', '2023-05-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activity_log`
--
ALTER TABLE `tbl_activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_field_data`
--
ALTER TABLE `tbl_field_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_field_group`
--
ALTER TABLE `tbl_field_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_field_group_set`
--
ALTER TABLE `tbl_field_group_set`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_field_group_type`
--
ALTER TABLE `tbl_field_group_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_library`
--
ALTER TABLE `tbl_library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission_page`
--
ALTER TABLE `tbl_permission_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_permission_settings`
--
ALTER TABLE `tbl_permission_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_routes`
--
ALTER TABLE `tbl_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activity_log`
--
ALTER TABLE `tbl_activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_field_data`
--
ALTER TABLE `tbl_field_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_field_group`
--
ALTER TABLE `tbl_field_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_field_group_set`
--
ALTER TABLE `tbl_field_group_set`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_field_group_type`
--
ALTER TABLE `tbl_field_group_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_library`
--
ALTER TABLE `tbl_library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_permission_page`
--
ALTER TABLE `tbl_permission_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_permission_settings`
--
ALTER TABLE `tbl_permission_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=411;

--
-- AUTO_INCREMENT for table `tbl_routes`
--
ALTER TABLE `tbl_routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_type`
--
ALTER TABLE `tbl_user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_website`
--
ALTER TABLE `tbl_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
