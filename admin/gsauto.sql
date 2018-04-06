-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Jun 01, 2015 at 06:17 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `gsauto`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `a_id` int(100) NOT NULL auto_increment,
  `user_name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `img` varchar(20000) NOT NULL,
  PRIMARY KEY  (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'Admin', 'penny', 'admin.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `apply`
-- 

CREATE TABLE `apply` (
  `a_id` int(100) NOT NULL auto_increment,
  `j_id` varchar(100) NOT NULL,
  `j_name` varchar(100) NOT NULL,
  `j_email` varchar(100) NOT NULL,
  `j_add` longtext NOT NULL,
  `j_no` varchar(100) NOT NULL,
  `j_quali` varchar(100) NOT NULL,
  `j_pwc` varchar(100) NOT NULL,
  `j_exp` varchar(100) NOT NULL,
  `j_area` varchar(100) NOT NULL,
  `j_resume` longtext NOT NULL,
  PRIMARY KEY  (`a_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `apply`
-- 

INSERT INTO `apply` VALUES (1, 'Office Assistant', 'Gurnoor', 'guri@gmail.com', '123 A xyz', '987654321', 'b.com', '', '', 'accounts', 'G551W40AdmitCard.pdf');

-- --------------------------------------------------------

-- 
-- Table structure for table `contact`
-- 

CREATE TABLE `contact` (
  `c_id` int(100) NOT NULL auto_increment,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `c_subject` longtext NOT NULL,
  PRIMARY KEY  (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `contact`
-- 

INSERT INTO `contact` VALUES (1, 'peeru', 'cju@dcn.kj', '324135245', ' dijf jnq2jev  yg huba  gqh aug');

-- --------------------------------------------------------

-- 
-- Table structure for table `downloads`
-- 

CREATE TABLE `downloads` (
  `d_id` int(100) NOT NULL auto_increment,
  `d_name` longtext NOT NULL,
  PRIMARY KEY  (`d_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `downloads`
-- 

INSERT INTO `downloads` VALUES (1, 'New MRP Effective from 01 Mar 2014 (From Page 1 to Page 25).pdf');
INSERT INTO `downloads` VALUES (2, 'New MRP Effective from 01 Mar 2014 (From Page 26 to Page 41).pdf');
INSERT INTO `downloads` VALUES (3, 'New MRP Effective from 01 Mar 2014 (From Page 42 to Page 58).pdf');
INSERT INTO `downloads` VALUES (4, 'New Launch - Ad Blue.pdf');
INSERT INTO `downloads` VALUES (5, 'GS Auto Product Brochure.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `gallery`
-- 

CREATE TABLE `gallery` (
  `g_id` int(100) NOT NULL auto_increment,
  `g_img` longtext NOT NULL,
  `g_desc` longtext NOT NULL,
  PRIMARY KEY  (`g_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `gallery`
-- 

INSERT INTO `gallery` VALUES (1, 'image 2.jpg', 'GS - AAPEX 2011');
INSERT INTO `gallery` VALUES (2, 'image 1.jpg', 'GS-Kaizen Event by Tata Motors Ltd. ');
INSERT INTO `gallery` VALUES (3, 'image 3.jpg', 'Gift Distributed to Mechanics');
INSERT INTO `gallery` VALUES (4, 'certificate_of_approval.jpg', 'Certificate of approval');
INSERT INTO `gallery` VALUES (5, 'q3.jpg', 'Dedication of work done');
INSERT INTO `gallery` VALUES (6, 'manufacturing_facility.jpg', 'Manufacturing facilities');

-- --------------------------------------------------------

-- 
-- Table structure for table `job`
-- 

CREATE TABLE `job` (
  `j_id` int(100) NOT NULL auto_increment,
  `position` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `vacancy` varchar(100) NOT NULL,
  `desc_value` varchar(2000) NOT NULL,
  `lst_date` date NOT NULL,
  `resp` longtext NOT NULL,
  `requirements` varchar(100) NOT NULL,
  PRIMARY KEY  (`j_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `job`
-- 

INSERT INTO `job` VALUES (1, 'Office Assistant', 'GS Auto Ltd Registered Office in Ludhiana', '2015-05-30', '1', 'This position requires a significant level of General Proficiency in Office tools, processes, protocols and procedures.', '2015-06-30', 'Should have proficiency in spoken and written Hindi,English and local language. Should have working knowledge of Personal Computer and a variety of Office Software Applications including Microsoft Word, Excel, Excess and Power Point Should have basic understanding of Office Functions', 'Graduate in Arts/Commerce');
INSERT INTO `job` VALUES (2, 'Manager Sales - OEM', 'Ludhiana', '2015-05-30', '1', 'Responsible for OEM Sales and Business Development .', '2015-07-15', 'New Business Development, Customer Relationship, Customer Outstanding Management,', 'MBA, BTech / BE Mechanical');

-- --------------------------------------------------------

-- 
-- Table structure for table `messages`
-- 

CREATE TABLE `messages` (
  `msg_id` int(100) NOT NULL auto_increment,
  `user_id` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL,
  PRIMARY KEY  (`msg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `messages`
-- 

INSERT INTO `messages` VALUES (1, 'Admin', 'hello');
INSERT INTO `messages` VALUES (2, 'Admin', 'ji');
INSERT INTO `messages` VALUES (3, 'Admin', 'ji');
INSERT INTO `messages` VALUES (4, 'Admin', 'hello');
INSERT INTO `messages` VALUES (5, 'Admin', 'qwer');
INSERT INTO `messages` VALUES (6, 'giggs@g.com', 'gr');
INSERT INTO `messages` VALUES (7, 'giggs@g.com', 'what is the cost of casting product');
INSERT INTO `messages` VALUES (8, 'Admin', '@giggle it ****');
INSERT INTO `messages` VALUES (9, 'penny@yah.com', 'if i place an order of 200 casting product, in how much time will it be delivered?');
INSERT INTO `messages` VALUES (10, 'Admin', '@penny in 2 months');
INSERT INTO `messages` VALUES (11, 'giggs@g.com', 'hr 22 kidaaaa');
INSERT INTO `messages` VALUES (12, 'Admin', '@giggle mast beer tu ds ki haal chal');
INSERT INTO `messages` VALUES (13, 'giggs@g.com', 'main v kaim');
INSERT INTO `messages` VALUES (14, 'Admin', 'acha ji');

-- --------------------------------------------------------

-- 
-- Table structure for table `product_item`
-- 

CREATE TABLE `product_item` (
  `item_id` int(100) NOT NULL auto_increment,
  `p_id` varchar(100) NOT NULL,
  `desc_id` varchar(100) NOT NULL,
  `item_value` varchar(20000) NOT NULL,
  PRIMARY KEY  (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

-- 
-- Dumping data for table `product_item`
-- 

INSERT INTO `product_item` VALUES (1, '1', '1', 'Flat,Half-Round,Full-round,Half-Round with Forged - Section, Full - Round with Forged - Section,Flat with Forged - Section .');
INSERT INTO `product_item` VALUES (2, '1', '2', 'Min. - 40 mm Max.-650 mm ,Dia - Min.-7mm Max.-30 mm, centre distance between stems - Min.-24 mm Max. - 130 mm');
INSERT INTO `product_item` VALUES (3, '1', '3', 'Metric ,UNF/UNC or BSF/BSW Thread Length - Max upto 200 mm, Rolled threads.Thread Pitch - 1 mm To 3 mm');
INSERT INTO `product_item` VALUES (4, '1', '4', 'M.S,SAE - 1015 ,EN-8,CK-45,SAE - 1541,41Cr4,SAE - 4140,Strength - 5.6 , 8.8,10.9');
INSERT INTO `product_item` VALUES (5, '1', '5', 'Phosphating , Zinc Plating(Yellow, Blue & Green) Powder Coating (Black & red)');
INSERT INTO `product_item` VALUES (6, '1', '6', 'Cold $ Hot both facilities are available');
INSERT INTO `product_item` VALUES (7, '2', '1', 'Round Head with Slots & Milled Head Hot and Cold both Head forming facilities are available.');
INSERT INTO `product_item` VALUES (8, '2', '2', 'Min. - 75 mm Max.-450 mm');
INSERT INTO `product_item` VALUES (9, '2', '7', 'Min.-8 mm Max.-18 mm');
INSERT INTO `product_item` VALUES (10, '2', '3', 'Metric,UNF/UNC or BSF/BSW, CUT & Rolled threads');
INSERT INTO `product_item` VALUES (11, '2', '4', 'thread length - Max. 75% of Total length');
INSERT INTO `product_item` VALUES (12, '2', '5', 'Mild Steel,8.8 Grade,10.9 Grade(H.T. Materials are Hardened & tempered) Phosphating,Auto-Black & Zinc Plating Passivated.');
INSERT INTO `product_item` VALUES (13, '3', '1', 'Round-head, Milled Head, D-type Head, Centre Head');
INSERT INTO `product_item` VALUES (14, '3', '2', 'Min.-30mm Max.-180 mm');
INSERT INTO `product_item` VALUES (15, '3', '13', 'Min. -10 mm Max. - 40 mm');
INSERT INTO `product_item` VALUES (16, '3', '14', 'Min. -15 mm Max. - 50 mm');
INSERT INTO `product_item` VALUES (17, '3', '3', 'Metric, UNF / UNC or BSF / BSW, Pitch - 1.0, 1.25, 1.50, 2.0, 2.5, 3.0');
INSERT INTO `product_item` VALUES (18, '3', '4', 'M.S., EN-8, SAE-1541, 41Cr4, SAE-4140');
INSERT INTO `product_item` VALUES (19, '3', '17', '5.6, 8.8,10.9 grade');
INSERT INTO `product_item` VALUES (20, '3', '5', 'Phosphating, Auto-Black & ZInc-PlatIng with White, Yellow & Green Passivated');
INSERT INTO `product_item` VALUES (21, '4', '1', 'Hex (Heavy & Small), Conical, Nylock, Castle, Flange, Cut-Nut');
INSERT INTO `product_item` VALUES (22, '4', '18', 'Max - 50 mm');
INSERT INTO `product_item` VALUES (23, '4', '3', 'Metric, UNF/UNC or BSF/BSW,Thread Pitch, 1, 1.25, 1.5, 1,75, 2,2.25, 3 in metric series');
INSERT INTO `product_item` VALUES (24, '4', '4', 'Mild Steel, Low Carbon Steel, EN-8, EN-15, EN-18');
INSERT INTO `product_item` VALUES (25, '4', '8', 'Hardened & Tempered (Medium Carbon & Alloy Steel)');
INSERT INTO `product_item` VALUES (26, '4', '5', 'Phosphating, Auto-Black & Zinc Zinc Plating. (With Yellow / White Passivation');
INSERT INTO `product_item` VALUES (27, '5', '1', 'Plain, Grooved');
INSERT INTO `product_item` VALUES (28, '5', '2', '25 mm To 100 mm');
INSERT INTO `product_item` VALUES (29, '5', '15', 'Max. 55 mm');
INSERT INTO `product_item` VALUES (30, '5', '16', '15 mm');
INSERT INTO `product_item` VALUES (31, '5', '4', 'Al - Bronze (Self lubricated) / Zinc Bronze / Manganese Bronze');
INSERT INTO `product_item` VALUES (32, '5', '12', 'Ground');
INSERT INTO `product_item` VALUES (33, '6', '1', 'Hanger Shackles / Brackets, Threaded Ring, Compressor Mounting/Brackets, Other Cast - Components');
INSERT INTO `product_item` VALUES (34, '6', '19', 'Min.-lKg., 50 Gm. Max. - 25Kg.');
INSERT INTO `product_item` VALUES (35, '6', '4', 'SG Iron Grade 500/7, 450/10 as per IS 1865 / FCD 45/GGG50');
INSERT INTO `product_item` VALUES (36, '6', '5', 'Electroplated & Powder Coating (Black, Red & Grey)');

-- --------------------------------------------------------

-- 
-- Table structure for table `product_master`
-- 

CREATE TABLE `product_master` (
  `p_id` int(100) NOT NULL auto_increment,
  `p_name` varchar(100) NOT NULL,
  `p_title` varchar(1000) NOT NULL,
  `img1` varchar(2000) NOT NULL,
  `img2` varchar(2000) NOT NULL,
  `img3` varchar(2000) NOT NULL,
  `img4` varchar(2000) NOT NULL,
  `img5` varchar(2000) NOT NULL,
  PRIMARY KEY  (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

-- 
-- Dumping data for table `product_master`
-- 

INSERT INTO `product_master` VALUES (1, 'U-Bolts', 'On the strength of its expertise in the development and manufacture of components G.S. has explored new horizon to provide a diverse range of Machined, Forged, Casted components and Sub Assemblies.', 'ubolts2.jpg', 'ubolts2.jpg', 'ubolts2.jpg', 'ubolts2.jpg', 'ubolts2.jpg');
INSERT INTO `product_master` VALUES (2, 'Center Bolt', '', 'centerbolts2.jpg', 'centerbolts2.jpg', 'centerbolts2.jpg', 'centerbolts2.jpg', 'centerbolts2.jpg');
INSERT INTO `product_master` VALUES (3, 'Hub Bolt', 'Forged Parts are Wheel Bolts, Spindle Damper, Shock Absorber Pins High Nuts, Castle Nuts, Hex Nuts, Flange Nuts, Washer Type Nuts, Misc. Nuts', 'hubbolt2.jpg', 'hub_bolt.jpg', 'eyebolt.jpg', 'shaft_bolt.jpg', 'center_head_bolt.jpg');
INSERT INTO `product_master` VALUES (4, 'Nuts', '', 'plain_nut.jpg', 'castlenut.jpg', 'wheelnut.jpg', 'hubnut.jpg', 'checknut.jpg');
INSERT INTO `product_master` VALUES (5, 'Bushes', '', 'kingpinbush.jpg', 'springpinbush.jpg', 'vehiclebushes2.jpg', 'springpinbush.jpg', 'kingpinbush.jpg');
INSERT INTO `product_master` VALUES (6, 'Casting Product', '', 'castings.jpg', 'cast_components.jpg', 'cast_components2.jpg', 'bracket.jpg', 'shackle.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `prod_desc_master`
-- 

CREATE TABLE `prod_desc_master` (
  `desc_id` int(100) NOT NULL auto_increment,
  `p_id` varchar(100) NOT NULL,
  `desc_item` varchar(100) NOT NULL,
  PRIMARY KEY  (`desc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

-- 
-- Dumping data for table `prod_desc_master`
-- 

INSERT INTO `prod_desc_master` VALUES (1, '', 'Item');
INSERT INTO `prod_desc_master` VALUES (2, '', 'Stem Length');
INSERT INTO `prod_desc_master` VALUES (3, '', 'Thread');
INSERT INTO `prod_desc_master` VALUES (4, '', 'Material');
INSERT INTO `prod_desc_master` VALUES (5, '', 'Surface Treatment');
INSERT INTO `prod_desc_master` VALUES (6, '', 'Bending');
INSERT INTO `prod_desc_master` VALUES (7, '', 'Dia');
INSERT INTO `prod_desc_master` VALUES (8, '', 'Heat Treatment');
INSERT INTO `prod_desc_master` VALUES (9, '', 'Hardness Surface');
INSERT INTO `prod_desc_master` VALUES (10, '', 'Case depth');
INSERT INTO `prod_desc_master` VALUES (11, '', 'Design');
INSERT INTO `prod_desc_master` VALUES (12, '', 'Finish');
INSERT INTO `prod_desc_master` VALUES (13, '', 'Dia Body');
INSERT INTO `prod_desc_master` VALUES (14, '', 'Dia Head');
INSERT INTO `prod_desc_master` VALUES (15, '', 'Dia outer');
INSERT INTO `prod_desc_master` VALUES (16, '', 'Dia inner');
INSERT INTO `prod_desc_master` VALUES (17, '', 'Strength');
INSERT INTO `prod_desc_master` VALUES (18, '', 'Across Flat');
INSERT INTO `prod_desc_master` VALUES (19, '', 'Weight-range');
INSERT INTO `prod_desc_master` VALUES (20, '', 'Code no.');
INSERT INTO `prod_desc_master` VALUES (21, '', 'Axle capacity');
INSERT INTO `prod_desc_master` VALUES (22, '', 'Total length');
INSERT INTO `prod_desc_master` VALUES (23, '', 'Beam size');
INSERT INTO `prod_desc_master` VALUES (24, '', 'Beam thickness');
INSERT INTO `prod_desc_master` VALUES (25, '', 'Spindle Nut Thread');
INSERT INTO `prod_desc_master` VALUES (26, '', 'Spindle bearing');
INSERT INTO `prod_desc_master` VALUES (27, '', 'Spindle');
INSERT INTO `prod_desc_master` VALUES (28, '', 'Assy. part');
INSERT INTO `prod_desc_master` VALUES (29, '', 'Per/pcs. kg.');
INSERT INTO `prod_desc_master` VALUES (30, '', 'Casted wt. in kgs');
INSERT INTO `prod_desc_master` VALUES (31, '', 'Fabricated Wt. in kgs');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `u_id` int(100) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `img` varchar(20000) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY  (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES (1, 'Manpreet', 'Kaur', '', '24 B ldh', 'manu@yah.com', '987654321', '');
INSERT INTO `user` VALUES (2, 'Penny', 'Marwa', 'a2.png', '117 a mh', 'penny@yah.com', '987654321', 'penny');
INSERT INTO `user` VALUES (3, 'giggle', 'dev', 'a3.png', '47 48 B BRS nagar,ldh', 'giggs@g.com', '00000000000', 'guggu');
INSERT INTO `user` VALUES (4, 'simran', 'kaur', 'a1.png', '567 d ldh', 'sim@yah.com', '8765494637', 'simuu');
INSERT INTO `user` VALUES (5, '', '', 'about.jpg', '', '', '', '');
