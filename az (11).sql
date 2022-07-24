-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 11:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `az`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_img` varchar(2555) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `username`, `password`, `user_img`, `status`) VALUES
(1, 'AntickZONE', 'admin123', 'admin123', 'https://res.cloudinary.com/antickzone/image/upload/v1656785927/logo_ztmvyo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `happy_customers`
--

CREATE TABLE `happy_customers` (
  `id` int(11) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `happy_customers`
--

INSERT INTO `happy_customers` (`id`, `product_img`, `product_title`, `rate`, `review`, `status`) VALUES
(1, 'https://res.cloudinary.com/antickzone/image/upload/v1656516563/happy-customers-1_ah207e.png', '@thj.scrunchies', '5', 'We\'re so happy with the product. The color is also pretty and good quality', 1),
(2, 'https://res.cloudinary.com/antickzone/image/upload/v1656516563/happy-customers-2_y9serx.png', 'Drishti Pinjani', '5', 'I finally attached it, and I cannot express how much i love this one, thankyou so so much!\r\nWorth the price this was!', 1),
(3, 'https://res.cloudinary.com/antickzone/image/upload/v1656516564/happy-customers-3_ussutq.png', 'Sonika Jain', '5', 'Its superb. Thank you for the neon light', 1),
(4, 'https://res.cloudinary.com/antickzone/image/upload/v1656516566/happy-customers-4_e1um2m.png', 'Sanjoy Das', '5', 'Thanks! We liked it very much!', 1),
(5, 'https://res.cloudinary.com/antickzone/image/upload/v1656516573/happy-customers-5_wyuuct.png', 'Bopanna KN', '5', 'Just wanted to say thank you for the lovely neon sign you got done. This is going to my hometown home which is among the woods and this sign would give me all the bliss I need. It\'s wonderful!!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `cust_name`, `username`, `phone`, `email`, `password`, `status`) VALUES
(1, 'Priyanka', 'Priyanka1374', '8527308050', 'singhal8522@gmail.com', '123@456', 1),
(2, 'Manit', 'Manit1608', '9810620649', 'manitsinghal04@gmail.com', 'manit@1234', 1),
(4, 'Ayansh', 'Ayansh1239', '9810159309', 'manitsteel@gmail.com', '1234', 1),
(5, 'Anaya', 'Anaya1257', '8527525619', 'devansh0117@gmail.com', '1234', 1),
(6, 'dev', 'dev4946', '8527308060', 'dev0117@gmail.com', 'dev', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_img` varchar(2555) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_desc` varchar(2555) NOT NULL,
  `size_width` varchar(255) NOT NULL,
  `size_height` varchar(255) NOT NULL,
  `pr_quality` varchar(255) DEFAULT NULL,
  `product_video` varchar(500) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_title`, `product_img`, `product_slug`, `price`, `product_desc`, `size_width`, `size_height`, `pr_quality`, `product_video`, `status`) VALUES
(1, 'Custom Neon Light Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1656516557/best-products-1_a6kkcq.png', 'Custom_Neon_Light_Sign', '2499', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4.5', '2.5', NULL, NULL, 1),
(2, 'THUNDERBOLT Neon LED Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1656516557/best-products-2_uzxmw1.png', 'Thunderbolt_neon_led_sign', '1499', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2', '3', NULL, NULL, 1),
(3, 'Good Vibes Only Neon Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1656516182/best-products-5_vlf0fx.png', 'Good_Vibes_Only_Neon_Sign', '2399', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4', '2.5', NULL, NULL, 1),
(4, 'Personalised 3D Photo Acrylic LED Lamp', 'https://res.cloudinary.com/antickzone/image/upload/v1656516557/best-products-6_ufihv2.png', 'Photo_Acrylic_Led_Lamp', '2199', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4', '5', NULL, NULL, 1),
(5, '\"Good Vibes Only\" Neon Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1656516557/best-products-7_xyl07t.png', 'Good_Vibes_Only_Neon_Sign', '2000', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4', '1', NULL, NULL, 1),
(6, 'It Was All A Dream Neon Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1656516557/best-products-3_bnoipj.png', 'Dream_neon_sign', '4184', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4', '1.5', NULL, NULL, 0),
(7, 'BREATHE Neon LED Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1656516558/best-products-8_egh4c3.png', 'Breathe_neon_led_sign', '3713', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4', '2', NULL, NULL, 1),
(8, 'It\'s A Pretty Raj Life', 'https://res.cloudinary.com/antickzone/image/upload/v1656516559/explore-1_be3y6k.png', 'Pretty_Raj_Life', '2499', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '5', '2', NULL, NULL, 1),
(9, 'Happily Ever After', 'https://res.cloudinary.com/antickzone/image/upload/v1656516559/explore-2_locnax.png', 'Happily_ever_after', '2690', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4', '1.5', NULL, NULL, 1),
(10, 'Good Vibes Only', 'https://res.cloudinary.com/antickzone/image/upload/v1656516559/explore-3_ka8hgu.png', 'Good_Vibes_Only', '2179', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '5', '2', NULL, NULL, 1),
(11, 'Better Together Neon Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1656516561/explore-4_pefueq.png', 'Better_Together', '2789', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '6', '2.5', NULL, NULL, 1),
(12, 'Waffle Some Waffles Led Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1656516567/explore-5_x0mieo.png', 'Waffle_Some_Waffles', '3899', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '10', '4', NULL, NULL, 1),
(13, 'Good Vibes Only LED', 'https://res.cloudinary.com/antickzone/image/upload/v1657393308/good_vibes_only_2_ruyrl7.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393307/good_vibes_only_uggent.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393307/good_vibes_only_1_jvtvcx.jpg', 'Good_Vibes_Only_Led', '2179', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4', '2.5', NULL, NULL, 1),
(14, 'FLAMINGO Neon LED Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1657393386/FLAMINGO_Neon_LED_Sign_2_i0bt36.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393386/FLAMINGO_Neon_LED_Sign_zqjftl.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393385/FLAMINGO_Neon_LED_Sign_3_svjnzv.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393385/FLAMINGO_Neon_LED_Sign_1_owaw8m.jpg', 'Flamingo_Neon_Sign', '3219', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '3', '8', NULL, NULL, 1),
(15, 'PAPER PLANE Mini Neon LED Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1657393472/PAPER_PLANE_Mini_Neon_LED_Sign_1_dxvmpl.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393453/PAPER_PLANE_Mini_Neon_LED_Sign_fwpgzs.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393510/PAPER_PLANE_Mini_Neon_LED_Sign_2_baj0xj.jpg', 'Paper_Plane_Led_Sign', '1349', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4', '3', NULL, NULL, 1),
(16, 'Cloud Mini Neon Led Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1657393602/Cloud_Mini_Neon_Led_Sign_mhmwqw.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393602/Cloud_Mini_Neon_Led_Sign_1_sxvkh7.jpg', 'Cloud_mini_sign', '2599', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '6', '4', NULL, NULL, 1),
(17, 'Let\'s Party Neon Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1657393642/Let_s_Party_Neon_Sign_3_x98xo4.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393642/Let_s_Party_Neon_Sign_2_nbswyh.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393643/Let_s_Party_Neon_Sign_1_ozxy8a.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657393666/Let_s_Party_Neon_Sign_o8dhza.jpg', 'Lets_Party_Neon_Sign', '2499', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2', '1', NULL, NULL, 1),
(18, 'Wild and Free Neon Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1657394122/Wild_and_Free_Neon_Sign_zlxrpy.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657394122/Wild_and_Free_Neon_Sign_zlxrpy.jpg', 'Wild_And_Free_Neon_Sign', '5625', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '3', '1.5', NULL, NULL, 1),
(19, 'Wings Neon Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1657394166/Wings_Neon_Sign_3_v0xgdf.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657394202/Wings_Neon_Sign_2_nwjrat.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657394167/Wings_Neon_Sign_pxam0g.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657394168/Wings_Neon_Sign_1_o3sjpg.jpg', 'Wings_Neon_Sign', '3750', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2', '1.5', NULL, NULL, 1),
(20, 'Cest La Vie Neon Sign', 'https://res.cloudinary.com/antickzone/image/upload/v1657394292/Cest_La_Vie_Neon_Sign_1_hwmknj.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657394302/Cest_La_Vie_Neon_Sign_2_vcorw4.jpg, https://res.cloudinary.com/antickzone/image/upload/v1657394319/Cest_La_Vie_Neon_Sign_pht1yr.jpg', 'Cest_La_Vie_Neon_Sign', '3749', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '3', '1', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(2555) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(2555) NOT NULL,
  `twitter` varchar(2555) NOT NULL,
  `instagram` varchar(2555) NOT NULL,
  `map` varchar(2555) NOT NULL,
  `whatsapp_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone`, `email`, `address`, `facebook`, `twitter`, `instagram`, `map`, `whatsapp_no`) VALUES
(1, 'https://res.cloudinary.com/antickzone/image/upload/v1656785927/logo_ztmvyo.png', '919873906502', 'antickzone@gmail.com', 'M-125, Sector-12, Pratap Vihar Ghaziabad 201009', 'https://www.facebook.com/AntickZone-102520775853717', '', 'https://www.instagram.com/antickzone/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7002.958854854706!2d77.41019769348526!3d28.645360244998912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf02bc0971b6b%3A0x9288b77dfc0ec1e8!2sSector%2012%2C%20Pratap%20Vihar%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201009!5e0!3m2!1sen!2sin!4v1656615287474!5m2!1sen!2sin\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '+911203180706');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`id`, `category`, `title`, `slug`, `status`) VALUES
(1, 'Events', 'Birthday', 'Birthday', 1),
(2, 'Events', 'Weddings', 'Weddings', 1),
(3, 'Events', 'Baby Shower', 'Baby_Shower', 1),
(4, 'Events', 'Anniversary', 'Anniversary', 1),
(5, 'Events', 'Party', 'Party', 1),
(6, 'Home', 'Living Room', 'Living_Room', 1),
(7, 'Home', 'Dining Room', 'Dining_Room', 1),
(8, 'Home', 'Bed Room', 'Bed_Room', 1),
(9, 'Home', 'Kids Room', 'Kids_Room', 1),
(10, 'Home', 'Gaming Room', 'Gaming_Room', 1),
(11, 'Places', 'Office', 'Office', 1),
(12, 'Places', 'Gym', 'Gym', 1),
(13, 'Places', 'Cafe', 'Cafe', 1),
(14, 'Places', 'Restaurant', 'Restaurant', 1),
(16, 'Places', 'Salon', 'Salon', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_images`
--

CREATE TABLE `shop_images` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `image` varchar(2555) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2555) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size_width` varchar(255) NOT NULL,
  `size_height` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_images`
--

INSERT INTO `shop_images` (`id`, `shop_id`, `image`, `title`, `description`, `price`, `size_width`, `size_height`, `status`) VALUES
(1, 1, 'https://res.cloudinary.com/antickzone/image/upload/v1657362514/shop%20collection%20images/2.5x1.5ft_3999_tgrfhg.jpg', 'Happy Birthday Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '3999', '2.5', '1.5', 1),
(2, 1, 'https://res.cloudinary.com/antickzone/image/upload/v1657362474/shop%20collection%20images/2x2ft_5450_llmgha.jpg', 'Wishing Happy Birthday Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '5450', '2', '2', 1),
(3, 1, 'https://res.cloudinary.com/antickzone/image/upload/v1657362491/shop%20collection%20images/1x3_3750_vlpouv.jpg', 'Happy Birthday Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '3750', '3', '1', 1),
(4, 1, 'https://res.cloudinary.com/antickzone/image/upload/v1657362474/shop%20collection%20images/2.5x1.5ft_4449_k9wfqy.jpg', 'Happy Birthday Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4449', '2.5', '1.5', 1),
(5, 2, 'https://res.cloudinary.com/antickzone/image/upload/v1657365730/shop%20collection%20images/2x2ft_4999_xv0v0h.jpg', 'Better Together Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4999', '2', '2', 1),
(6, 2, 'https://res.cloudinary.com/antickzone/image/upload/v1657365788/shop%20collection%20images/1x3ft_3750_tjwtf5.jpg', 'Happily Ever after Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '3750', '1', '3', 1),
(7, 2, 'https://res.cloudinary.com/antickzone/image/upload/v1657365813/shop%20collection%20images/1.5x2_4849_amnclj.jpg', 'Happily Ever after Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4849', '1.5', '2', 1),
(8, 2, 'https://res.cloudinary.com/antickzone/image/upload/v1657365767/shop%20collection%20images/1.5x2_4249_eseoud.jpg', 'Wedding Ring Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4249', '1.5', '2', 1),
(9, 3, 'https://res.cloudinary.com/antickzone/image/upload/v1657362062/shop%20collection%20images/0.5x1.5ft_1449_fodcyp.png', 'Oh Baby Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1250', '1.5', '0.5', 1),
(10, 3, 'https://res.cloudinary.com/antickzone/image/upload/v1657362061/shop%20collection%20images/1449_dyzgbe.jpg', 'Baby Nipple Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1449', '0.5', '1.5', 1),
(11, 3, 'https://res.cloudinary.com/antickzone/image/upload/v1657362112/shop%20collection%20images/baby_shower_3_jr7eek.jpg', 'Oh Baby Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '5675', '3', '1.5', 1),
(12, 3, 'https://res.cloudinary.com/antickzone/image/upload/v1657362062/shop%20collection%20images/1.5x1.5_3750_atc2tu.jpg', 'Baby Trolley Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '3750', '1.5', '1.5', 1),
(13, 4, 'https://res.cloudinary.com/antickzone/image/upload/v1657361783/shop%20collection%20images/1.5x3_ft_5625_jg8lbu.jpg', 'Happy Anniversary Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '5625', '3', '1.5', 1),
(14, 4, 'https://res.cloudinary.com/antickzone/image/upload/v1657361785/shop%20collection%20images/1.5x3ft_5625_wjv3v8.jpg', 'Mr. and Mrs. Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '5625', '3', '1.5', 1),
(15, 4, 'https://res.cloudinary.com/antickzone/image/upload/v1656516603/anniversary_4__elqe1s.jpg', 'Happy Anniversary Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1250', '1', '1', 1),
(16, 5, 'https://res.cloudinary.com/antickzone/image/upload/v1657364740/shop%20collection%20images/part_1__ltxpqc.jpg', 'Let\'s Party Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2450', '1', '1', 1),
(17, 5, 'https://res.cloudinary.com/antickzone/image/upload/v1657364763/shop%20collection%20images/1.5x2ft_4150_qxrocr.jpg', 'Party Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4150', '1.5', '2', 1),
(18, 5, 'https://res.cloudinary.com/antickzone/image/upload/v1657364667/shop%20collection%20images/party_3__tlonnu.jpg', 'Tropical Party Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2450', '1', '1', 1),
(19, 5, 'https://res.cloudinary.com/antickzone/image/upload/v1657364646/shop%20collection%20images/party_4__nywsge.jpg', 'Night Party Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2450', '1', '1', 1),
(20, 7, 'https://res.cloudinary.com/antickzone/image/upload/v1657363170/shop%20collection%20images/2x1.5_3750_tlx8ad.jpg', 'I love you so much Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '3750', '2', '1.5', 1),
(21, 7, 'https://res.cloudinary.com/antickzone/image/upload/v1657363016/shop%20collection%20images/2x2_ft_4950_xy2jw0.jpg', 'Welcome to the MadHouse', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4950', '2', '2', 1),
(22, 7, 'https://res.cloudinary.com/antickzone/image/upload/v1657363128/shop%20collection%20images/dinning3_efqsry.jpg', 'If there is something', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1450', '1', '1', 1),
(23, 7, 'https://res.cloudinary.com/antickzone/image/upload/v1657363271/shop%20collection%20images/1x2ft_2449_cwemmi.jpg', 'This is our Happy Place Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2449', '1', '2', 1),
(24, 8, 'https://res.cloudinary.com/antickzone/image/upload/v1657362268/shop%20collection%20images/2x3.5ft_8750_mg55fq.jpg', 'It was all a dream Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '8750', '2', '3.5', 1),
(25, 8, 'https://res.cloudinary.com/antickzone/image/upload/v1657362303/shop%20collection%20images/1x4ft_4999_bridtb.png', 'It was all a dream Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4999', '4', '1', 1),
(26, 8, 'https://res.cloudinary.com/antickzone/image/upload/v1657362249/shop%20collection%20images/1.5x4ft_7500_iutzvp.jpg', 'This is where the magic happens', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '7500', '1.5', '4', 1),
(27, 8, 'https://res.cloudinary.com/antickzone/image/upload/v1657362290/shop%20collection%20images/1x1ft_1449_wfjqoi.jpg', 'Moon Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1450', '1', '1', 1),
(28, 8, 'https://res.cloudinary.com/antickzone/image/upload/v1657362249/shop%20collection%20images/1x3.5_4375_ausumb.jpg', 'On The Moon Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4375', '3.5', '1', 1),
(29, 9, 'https://res.cloudinary.com/antickzone/image/upload/v1657364107/shop%20collection%20images/1x1ft_1349_dizngg.jpg', 'Boys Only Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1349', '1', '1', 1),
(30, 9, 'https://res.cloudinary.com/antickzone/image/upload/v1657364212/shop%20collection%20images/2x1ft_2449_b2blwq.jpg', 'Rock On Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2449', '2', '1', 1),
(31, 9, 'https://res.cloudinary.com/antickzone/image/upload/v1657364170/shop%20collection%20images/1.5x1.5_2812_s5ad0s.jpg', 'Heart and Stars Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2812', '1.5', '1.5', 1),
(32, 9, 'https://res.cloudinary.com/antickzone/image/upload/v1657364107/shop%20collection%20images/Robot-Colorful-Neon-Sign_hmladm.jpg', 'Colorful Robot Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2499', '1', '2', 1),
(33, 10, 'https://res.cloudinary.com/antickzone/image/upload/v1657363441/shop%20collection%20images/1x1_ft_1449_qymnrf.jpg', 'Gaming Remote Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1449', '1', '1', 1),
(34, 10, 'https://res.cloudinary.com/antickzone/image/upload/v1657363442/shop%20collection%20images/game2_mgft1q.jpg', 'Gaming Setup neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1450', '1', '1', 1),
(35, 10, 'https://res.cloudinary.com/antickzone/image/upload/v1657363441/shop%20collection%20images/3x1.5_5625_bibalz.jpg', 'Gaming Zone Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '5625', '3', '1.5', 1),
(36, 10, 'https://res.cloudinary.com/antickzone/image/upload/v1657363503/shop%20collection%20images/game4_ymbeat.jpg', 'Gaming Room Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1450', '1', '1', 1),
(37, 11, 'https://res.cloudinary.com/antickzone/image/upload/v1657364486/shop%20collection%20images/1.5x1_ft_1875_rarwe0.jpg', 'Office Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1875', '1.5', '1', 1),
(38, 11, 'https://res.cloudinary.com/antickzone/image/upload/v1657364504/shop%20collection%20images/office2_ja8okm.jpg', 'Office Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2450', '1', '1', 1),
(39, 11, 'https://res.cloudinary.com/antickzone/image/upload/v1657364469/shop%20collection%20images/2x1ft_2950_sppr1n.jpg', 'Office Chair Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2950', '2', '1', 1),
(40, 11, 'https://res.cloudinary.com/antickzone/image/upload/v1657364428/shop%20collection%20images/office4_jpbwxp.jpg', 'Office Accessories Signs', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2450', '1', '1', 1),
(41, 12, 'https://res.cloudinary.com/antickzone/image/upload/v1657363866/shop%20collection%20images/2x1_2449_q3jwut.jpg', 'Gym Dumble Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2449', '2', '1', 1),
(42, 12, 'https://res.cloudinary.com/antickzone/image/upload/v1657363848/shop%20collection%20images/2x2ft_4999_npqzwd.jpg', 'Gym Club Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4999', '2', '2', 1),
(43, 12, 'https://res.cloudinary.com/antickzone/image/upload/v1657363885/shop%20collection%20images/1.5x2_2950_fmpgkp.jpg', 'Fitness Club Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2950', '1.5', '2', 1),
(44, 12, 'https://res.cloudinary.com/antickzone/image/upload/v1657363812/shop%20collection%20images/2.5x2_6250_kzc4t9.jpg', 'Fitness Club Neon Sign 2', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '6250', '2.5', '2', 1),
(45, 12, 'https://res.cloudinary.com/antickzone/image/upload/v1657363907/shop%20collection%20images/1.5x2_2950_vcvllb.jpg', 'Gym LED Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2950', '1.5', '2', 1),
(46, 13, 'https://res.cloudinary.com/antickzone/image/upload/v1657362650/shop%20collection%20images/1.5x0.5ft_1875_vcw6gj.jpg', 'Coffee Cafe Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1875', '1.5', '0.5', 1),
(47, 13, 'https://res.cloudinary.com/antickzone/image/upload/v1657362683/shop%20collection%20images/1x1ft_1449_xnfk34.jpg', 'Cafe 24 HRS Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1449', '1', '1', 1),
(48, 13, 'https://res.cloudinary.com/antickzone/image/upload/v1657362652/shop%20collection%20images/0.5x0.5ft_1349_elyvnu.jpg', 'Coffee Cup Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1349', '0.5', '0.5', 1),
(49, 13, 'https://res.cloudinary.com/antickzone/image/upload/v1657362708/shop%20collection%20images/1x0.5ft_1345_tiyx33.jpg', 'Cafe LED Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1345', '1', '0.5', 1),
(50, 14, 'https://res.cloudinary.com/antickzone/image/upload/v1657364971/shop%20collection%20images/2x2ft_5450_pvi3bl.jpg', 'Restaurant Food & Drink', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '5450', '2', '2', 1),
(51, 14, 'https://res.cloudinary.com/antickzone/image/upload/v1657365347/shop%20collection%20images/Group_1_hsbgyj.png', 'Restaurant Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2450', '3', '1', 1),
(52, 14, 'https://res.cloudinary.com/antickzone/image/upload/v1657364986/shop%20collection%20images/rest3_wqunrz.jpg', 'Restaurant Food Menu Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2450', '1', '1', 1),
(53, 14, 'https://res.cloudinary.com/antickzone/image/upload/v1657364921/shop%20collection%20images/1.5x6ft_1449_npf5aq.jpg', 'Restaurant Let\'s Eat Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '1449', '1.5', '6', 1),
(54, 16, 'https://res.cloudinary.com/antickzone/image/upload/v1657365571/shop%20collection%20images/1.5x3_6075_pl2w1d.jpg', 'Hair Salon With Logo Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '6075', '1.5', '3', 1),
(55, 16, 'https://res.cloudinary.com/antickzone/image/upload/v1657365538/shop%20collection%20images/2.5x1.5_4690_ns2uam.jpg', 'Salon Woman Drawing', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4690', '2.5', '1.5', 1),
(56, 16, 'https://res.cloudinary.com/antickzone/image/upload/v1657365537/shop%20collection%20images/1.5x1ft_2075_eqdohv.jpg', 'Hair Salon Blower Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2075', '1.5', '1', 1),
(57, 16, 'https://res.cloudinary.com/antickzone/image/upload/v1657365537/shop%20collection%20images/1x2_2449_fwytbs.jpg', 'Beauty Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2449', '1', '2', 1),
(58, 4, 'https://res.cloudinary.com/antickzone/image/upload/v1657361957/shop%20collection%20images/2x3ft_7500_ddme19.jpg', 'Happy Anniversary Designer', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '7500', '3', '2', 1),
(59, 4, 'https://res.cloudinary.com/antickzone/image/upload/v1657361936/shop%20collection%20images/anniversary_1__ckrnyj.jpg', 'Happy Anniversary Designer', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.	', '7500', '3', '2', 1),
(60, 6, 'https://res.cloudinary.com/antickzone/image/upload/v1657394415/Chill-Neon-Sign-Led-Light-3-430x430_yxuwqg.jpg', 'Chill LED Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '2499', '2', '1', 1),
(61, 6, 'https://res.cloudinary.com/antickzone/image/upload/v1657394415/butterfly_euaibf.jpg', 'Butterfly Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4999', '2', '2', 1),
(62, 6, 'https://res.cloudinary.com/antickzone/image/upload/v1657394511/love_soaelq.jpg', 'Love Heart Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '4999', '2', '2', 1),
(63, 6, 'https://res.cloudinary.com/antickzone/image/upload/v1657394436/new_york_city_tmlaa5.jpg', 'New York City Neon Sign', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '8750', '3.5', '2', 1),
(64, 6, 'https://res.cloudinary.com/antickzone/image/upload/v1657394474/say_yes_to_new_n29pit.jpg', 'Say yes to new adventures', 'AntickZONE Neon Signs can be in multiple sizes, can last 50,000+ hours, custom made with quality Neon LED Lights. Choose from a wide range of colors like Red, Pink, Blue, Ice Blue, Orange, White, Warm White, Purple, Yellow! Customise Neon Signs with your name, word, letter, logo or quote. Install it on a wall of bedroom, balcony, hall, terrace, office space or workspace.', '7499', '3', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_enquiry`
--

CREATE TABLE `user_enquiry` (
  `id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `thumbnail`, `video_link`, `status`) VALUES
(1, 'https://res.cloudinary.com/antickzone/image/upload/v1656679698/thumbnail_1_a6frgx.png', 'https://www.youtube.com/watch?v=8YtjMsyQqZ0', 1),
(2, 'https://res.cloudinary.com/antickzone/image/upload/v1656679700/thumbnail_2_dgjdza.png', 'https://www.youtube.com/watch?v=8YtjMsyQqZ0', 1),
(3, 'https://res.cloudinary.com/antickzone/image/upload/v1656679697/thumbnail_3_oojeii.png', 'https://www.youtube.com/watch?v=8YtjMsyQqZ0', 1),
(4, 'https://res.cloudinary.com/antickzone/image/upload/v1656679697/thumbnail_4_mic1wk.png', 'https://www.youtube.com/watch?v=8YtjMsyQqZ0', 1),
(5, 'https://res.cloudinary.com/antickzone/image/upload/v1656679698/thumbnail_5_nfudem.png', 'https://www.youtube.com/watch?v=8YtjMsyQqZ0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `happy_customers`
--
ALTER TABLE `happy_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_images`
--
ALTER TABLE `shop_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `user_enquiry`
--
ALTER TABLE `user_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `happy_customers`
--
ALTER TABLE `happy_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `shop_images`
--
ALTER TABLE `shop_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `user_enquiry`
--
ALTER TABLE `user_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `shop_images`
--
ALTER TABLE `shop_images`
  ADD CONSTRAINT `shop_images_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
