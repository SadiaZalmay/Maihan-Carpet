-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2019 at 06:48 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutsection1`
--

CREATE TABLE `aboutsection1` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `name` text NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutsection1`
--

INSERT INTO `aboutsection1` (`id`, `url`, `name`, `paragraph`) VALUES
(1, 'https://www.youtube.com/embed/bTDFhaP4zOw', 'About Maihan Carpet''s', ' In 2004 Maihan established their first carpet laundry company named as. (Maihan Carpet laundry). After four years, their company started selling the watani carpets in shar-e naw. And now M.Azimi , his brother M.Amen Azimi and Muhammad Sediq run both companies. These rugs (carpets) are mostly assembled in Northern Afghanistan but mainly by turkman in Aqcha , Jawzjan. The rich colors are produce by using various vegetable and other natural dyes. These carpets came into different sizes , colors and patterns. The most traditional carpets that Maihan produce is bukhara print which comes often in red background. Those carpets are being sold in the local market as well as different parts of afghanistan.');

-- --------------------------------------------------------

--
-- Table structure for table `aboutsection2`
--

CREATE TABLE `aboutsection2` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `paragraph` text NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `name2` text NOT NULL,
  `paragraph2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutsection2`
--

INSERT INTO `aboutsection2` (`id`, `heading`, `paragraph`, `image`, `name`, `name2`, `paragraph2`) VALUES
(1, 'OUR TEAM ', 'we believe that our people have been the foundation of our success.each and every person plays an important role in making sure our carpets are the best they can be.', '', '', '', ''),
(2, '', '', 'img/Upload/azim.jpeg', 'Muhammad Azim Azimi ', 'Manager', 'He is the manager and accountants of Maihan Carpets company.     '),
(3, '', '', 'img/Upload/Amin.jpeg', 'Muhammad Amin Azimi', ' Transportation', 'Transporting carpets either selling, or moving them all around Kabul. '),
(4, '', '', 'img/Upload/rasol.jpg', 'Muhammad Rasol Dawlat ', 'Restoration', 'Restoring those carpets that have stains or holes using a solution.\r\n'),
(5, '', '', 'img/Upload/Jawad.jpeg', 'Muhammad Jawad', ' Co-Partner', 'Designing and using different types of patterns and mirrors to make it look better and classic.   ');

-- --------------------------------------------------------

--
-- Table structure for table `asection`
--

CREATE TABLE `asection` (
  `Id` int(11) NOT NULL,
  `Img` varchar(350) NOT NULL,
  `Heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asection`
--

INSERT INTO `asection` (`Id`, `Img`, `Heading`) VALUES
(1, 'img/Upload/b.gif', 'About');

-- --------------------------------------------------------

--
-- Table structure for table `bsection`
--

CREATE TABLE `bsection` (
  `Id` int(11) NOT NULL,
  `Img` varchar(350) NOT NULL,
  `Heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsection`
--

INSERT INTO `bsection` (`Id`, `Img`, `Heading`) VALUES
(2, 'img/Upload/c.gif', 'Pattern');

-- --------------------------------------------------------

--
-- Table structure for table `consection1`
--

CREATE TABLE `consection1` (
  `Id` int(200) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Email` text NOT NULL,
  `Subject` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consection1`
--

INSERT INTO `consection1` (`Id`, `Firstname`, `Lastname`, `Email`, `Subject`, `Message`) VALUES
(5, 'Tehmina', 'Kakar', 'Tehmina_kakar@yahoo.com', 'order', 'i want to order!'),
(7, 'Tehmina', 'Kakar', 'Tehmina_kakar@yahoo.com', 'kg', 'kg'),
(8, 'Tehmina', 'Kakar', 'Tehmina_kakar@yahoo.com', 'kg', 'kg'),
(9, 'Tehmina', 'Kakar', 'Tehmina_kakar@yahoo.com', 'kg', 'kg'),
(10, 'Tehmina', 'Kakar', 'Tehmina_kakar@yahoo.com', 'werd', 'kearh'),
(11, 'Tehmina', 'Kakar', 'Tehmina_kakar@yahoo.com', 'werd', 'ksehdf sdifh'),
(12, 'Tehmina', 'Kakar', 'Tehmina_kakar@yahoo.com', 'wirdo', 'kasdh skadh ksadh'),
(13, 'amina', 'Kakar', 'Tehmina_kakar@yahoo.com', 'jag', 'ajkgs');

-- --------------------------------------------------------

--
-- Table structure for table `csection`
--

CREATE TABLE `csection` (
  `Id` int(11) NOT NULL,
  `Img` varchar(350) NOT NULL,
  `Heading` text NOT NULL,
  `Paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csection`
--

INSERT INTO `csection` (`Id`, `Img`, `Heading`, `Paragraph`) VALUES
(1, 'img/Upload/contact.jpg', 'CONTACT US', ' Contact');

-- --------------------------------------------------------

--
-- Table structure for table `footerabout`
--

CREATE TABLE `footerabout` (
  `id` int(120) NOT NULL,
  `name` text NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footerabout`
--

INSERT INTO `footerabout` (`id`, `name`, `paragraph`) VALUES
(5, 'ABOUT MAIHAN CARPET', 'In 2004 Maihan established their first carpet laundry company named as. (Maihan Carpet laundry). After four years, their company started selling the watani carpets in shar-e naw. ');

-- --------------------------------------------------------

--
-- Table structure for table `footercontact`
--

CREATE TABLE `footercontact` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `paragraph` text NOT NULL,
  `number1` text NOT NULL,
  `number2` text NOT NULL,
  `email` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footercontact`
--

INSERT INTO `footercontact` (`id`, `heading`, `paragraph`, `number1`, `number2`, `email`, `location`) VALUES
(7, 'Contact Info', '#111 ,Shams Market Chicken Street, <br>Shahr-e Naw', '+93 81488867', '+93 799663280', 'MaihanCarpet@gmail.com', 'MaihanCarpet.com');

-- --------------------------------------------------------

--
-- Table structure for table `footerinfo`
--

CREATE TABLE `footerinfo` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footerinfo`
--

INSERT INTO `footerinfo` (`id`, `heading`, `name`) VALUES
(8, 'Information', ''),
(9, '', 'Home'),
(10, '', 'Gallery'),
(11, '', 'About'),
(12, '', 'Pattern'),
(13, '', 'Services'),
(14, '', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `footerinsta`
--

CREATE TABLE `footerinsta` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footerinsta`
--

INSERT INTO `footerinsta` (`id`, `icon`, `name`, `image`) VALUES
(1, 'icon-instagram', 'Instagram', 'img/Upload/'),
(2, '', '', 'img/Upload/insta1.jpg'),
(3, '', '', 'img/Upload/insta2.jpg'),
(4, '', '', 'img/Upload/insta3.jpg'),
(5, '', '', 'img/Upload/insta4.jpg'),
(6, '', '', 'img/Upload/insta5.jpg'),
(7, '', '', 'img/Upload/insta6.jpg'),
(8, '', '', 'img/Upload/insta7.jpg'),
(9, '', '', 'img/Upload/insta8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `footermap`
--

CREATE TABLE `footermap` (
  `id` int(11) NOT NULL,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footermap`
--

INSERT INTO `footermap` (`id`, `map`) VALUES
(2, 'https://maps.google.com/maps?q=Javed%20Carpets%2C%20Chicken%20Street%2CKabul%2CAfghanistan&t=&z=13&ie=UTF8&iwloc=&output=embed ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `paragraph` text NOT NULL,
  `image` text NOT NULL,
  `price` text NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `paragraph`, `image`, `price`, `flag`) VALUES
(1, 'GALLERY', 'We have the finest collection of oriental carpets, turkman carpets, antique carpets and modern carpets.', 'img/Upload/gallery1.jpeg', '300$', 1),
(2, '', '', 'img/Upload/gallery13.jpeg', '200$', 1),
(3, '', '', 'img/Upload/gallery12.jpeg', '400$', 1),
(4, '', '', 'img/Upload/gallery10.jpg', '300$', 2),
(5, '', '', 'img/Upload/gallery8.jpeg', '300$', 2),
(6, '', '', 'img/Upload/gallery40.jpeg', '300$', 2),
(7, '', '', 'img/Upload/gallery21.jpg', '300$', 3),
(8, '', '', 'img/Upload/gallery22.jpg', '300$', 3),
(9, '', '', 'img/Upload/gallery24.jpg', '300$', 3),
(10, '', '', 'img/Upload/gallery37.jpeg', '300$', 4),
(11, '', '', 'img/Upload/gallery39.jpeg', '300$', 4),
(12, '', '', 'img/Upload/gallery17.jpeg', '300$', 4),
(13, '', '', 'img/Upload/gallery2.jpeg', '300$', 1),
(14, '', '', 'img/Upload/gallery3.jpeg', '560 $', 1),
(15, '', '', 'img/Upload/gallery35.jpeg', '750$', 1),
(16, '', '', 'img/Upload/gallery11.jpeg', '160$', 2),
(17, '', '', 'img/Upload/IMG-20191103-WA0015.jpg', '320$', 2),
(18, '', '', 'img/Upload/img.jpg', '600$', 2),
(19, '', '', 'img/Upload/gallery25.jpg', '230$', 3),
(20, '', '', 'img/Upload/gallery24.jpg', '240$', 3),
(21, '', '', 'img/Upload/gallery41.jpg', '190$', 3),
(22, '', '', 'img/Upload/gallery6.jpg', '730$', 4),
(23, '', '', 'img/Upload/gallery.jpg', '100$', 4),
(24, '', '', 'img/Upload/gallery14.jpeg', '150$', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gallery1`
--

CREATE TABLE `gallery1` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `paragraph` text NOT NULL,
  `image` text NOT NULL,
  `price` text NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery1`
--

INSERT INTO `gallery1` (`id`, `name`, `paragraph`, `image`, `price`, `flag`) VALUES
(1, 'GALLERY', 'We have the finest collection of oriental carpets, turkman carpets, antique carpets and modern carpets.', 'img/Upload/gallery2.jpeg', '300$', 1),
(2, '', '', 'img/Upload/gallery3.jpeg', '560$', 1),
(3, '', '', 'img/Upload/gallery35.jpeg', '750$', 1),
(4, '', '', 'img/Upload/gallery11.jpeg', '160$', 2),
(5, '', '', 'img/Upload/IMG-20191103-WA0015.jpg', '320$', 2),
(6, '', '', 'img/Upload/img.jpg', '600$', 2),
(7, '', '', 'img/Upload/gallery25.jpg', '230$', 3),
(8, '', '', 'img/Upload/gallery24.jpg', '240$', 3),
(9, '', '', 'img/Upload/IMG-20191103-WA0018.jpg', '90$', 3),
(10, '', '', 'img/Upload/gallery6.jpg', '730$', 4),
(11, '', '', 'img/Upload/gallery.jpg', '100$', 4),
(12, '', '', 'img/Upload/gallery14.jpeg', '50$', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gsection`
--

CREATE TABLE `gsection` (
  `Id` int(11) NOT NULL,
  `Img` varchar(350) NOT NULL,
  `Heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gsection`
--

INSERT INTO `gsection` (`Id`, `Img`, `Heading`) VALUES
(1, 'img/Upload/d.giff.gif', 'Gallery');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(30) NOT NULL,
  `image` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `image`) VALUES
(6, 'img/Upload/logo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `hpattern`
--

CREATE TABLE `hpattern` (
  `id` int(11) NOT NULL,
  `name1` text NOT NULL,
  `paragraph1` text NOT NULL,
  `image` text NOT NULL,
  `name2` text NOT NULL,
  `paragraph2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hpattern`
--

INSERT INTO `hpattern` (`id`, `name1`, `paragraph1`, `image`, `name2`, `paragraph2`) VALUES
(3, 'PATTERN', 'traditional regional guls are very intricate as you can see from the side of the flag.these guls would often make up a pattern on thye carpet.', 'img/Upload/', '', ''),
(4, '', '', 'img/Upload/mari.jpeg', 'marie gul', ' rare pieces in turkman''s collection is a marie-gul, which turkmans attributed to the yomuds.and it producfed on 17 century.'),
(5, '', '', 'img/Upload/ghabse.jpg', 'ghabse', ' the ghabse pattern of torbo, in my opinion, is one of the most uniques patterns and represents by image of the "tree of life".'),
(6, '', '', 'img/Upload/tegher.jpg', 'tegher', ' look at the black protrusions from the inner design..the three black things are 3 cotton flowers and the horse headis at the top.'),
(7, '', '', 'img/Upload/chobrang.jpeg', 'chob rang ', 'this style of carpet was appropriately named chob range and refers to traditional weddings of the bride to her new homeland.'),
(8, '', '', 'img/Upload/ellephant.jpg', 'ahar gu', 'l this style is defined by an infinite repeat of small patterns, with alternating rows of octagones and staggered rows of dimonds.'),
(9, '', '', 'img/Upload/pattern.jpg', 'gelim', ' in this patttern the background is the texture of the carpet (sufi) and its motifs are the perfect knot.');

-- --------------------------------------------------------

--
-- Table structure for table `hsection`
--

CREATE TABLE `hsection` (
  `Id` int(11) NOT NULL,
  `Img` varchar(350) NOT NULL,
  `Heading` text NOT NULL,
  `Paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsection`
--

INSERT INTO `hsection` (`Id`, `Img`, `Heading`, `Paragraph`) VALUES
(1, 'img/Upload/gallery11.jpeg', 'Maihan Carpet', 'View Gallery');

-- --------------------------------------------------------

--
-- Table structure for table `hsection1`
--

CREATE TABLE `hsection1` (
  `Id` int(40) NOT NULL,
  `Img` text NOT NULL,
  `Heading` varchar(30) NOT NULL,
  `Paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsection1`
--

INSERT INTO `hsection1` (`Id`, `Img`, `Heading`, `Paragraph`) VALUES
(14, 'img/Upload/', 'Services', 'The main services provided by Maihan Carpets are following,'),
(15, 'img/Upload/dyeing.png', 'DYEING', 'When the yarn for a carpet is spun, the next phase is to color it. This is a complicated process which demands knowledge and accuracy to achieve good results. For the more exclusive carpets, the yarns are used solely coloured with natural dyes.'),
(16, 'img/Upload/restoration.jpg', 'Restoration', 'A well-made vintage hand-knotted carpet can last for generations and often becomes more beautiful as the years go by. This is largely thanks to careful selection of the materials used combined with precision craftsmanship. These carpets contains mixture of natural dyes.'),
(17, 'img/Upload/posttreatment1.jpg', 'POST TREATMENT', 'When the carpet is woven there are four more steps before it is put up for sale. These four steps are not as time-consuming as the weaving but nevertheless as important in order to get a good result.  Polishing - The pile is cut to the intended length of the carpets. '),
(18, 'img/Upload/decoration.jpg', 'Decoration Pieces', 'We make the decoration pieces from old carpets. Most of these decoration pieces hanged on walls of afghan houses. These pieces are also being gifted to brides to their new house.'),
(19, 'img/Upload/size.jpg', 'SHAPES AND SIZES', 'The special thing about handmade carpets are, besides their beauty we also provide variety of patterns, colours and styles, but also provide wide range of sizes.'),
(20, 'img/Upload/design.jpg', 'DESIGN', 'When speaking about patterns and carpet manufacturing these are often divided into three categories; curvilinear, geometric and figural patterns. There are many frequent named patterns.');

-- --------------------------------------------------------

--
-- Table structure for table `hsection2`
--

CREATE TABLE `hsection2` (
  `id` int(11) NOT NULL,
  `image` varchar(350) NOT NULL,
  `name` text NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hsection2`
--

INSERT INTO `hsection2` (`id`, `image`, `name`, `paragraph`) VALUES
(2, 'img/Upload/image.jpeg', 'About Maihan Carpet', 'In 2004 Maihan established their first carpet laundry company named as. (Maihan Carpet laundry). After four years, their company started selling the watani carpets in shar-e naw. And now M.Azimi , his brother M.Amen Azimi and Muhammad Sediq run both companies. These rugs (carpets) are mostly assembled in Northern Afghanistan but mainly by turkman in Aqcha , Jawzjan. The rich colors are produce by using various vegetable and other natural dyes. These carpets came into different sizes , colors and patterns. The most traditional carpets that Maihan produce is bukhara print which comes often in red background. Those carpets are being sold in the local market as well as different parts of afghanistan.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Username`, `Email`, `Password`) VALUES
(1, 'Maihan Carpet', 'carpetmaihan@gmail.com', 'maihan');

-- --------------------------------------------------------

--
-- Table structure for table `ssection`
--

CREATE TABLE `ssection` (
  `Id` int(11) NOT NULL,
  `Img` varchar(350) NOT NULL,
  `Heading` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssection`
--

INSERT INTO `ssection` (`Id`, `Img`, `Heading`) VALUES
(1, 'img/Upload/VID-20191106-WA0024.gif', 'Services');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutsection1`
--
ALTER TABLE `aboutsection1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutsection2`
--
ALTER TABLE `aboutsection2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asection`
--
ALTER TABLE `asection`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bsection`
--
ALTER TABLE `bsection`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `consection1`
--
ALTER TABLE `consection1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `csection`
--
ALTER TABLE `csection`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `footerabout`
--
ALTER TABLE `footerabout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footercontact`
--
ALTER TABLE `footercontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footerinfo`
--
ALTER TABLE `footerinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footerinsta`
--
ALTER TABLE `footerinsta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footermap`
--
ALTER TABLE `footermap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery1`
--
ALTER TABLE `gallery1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gsection`
--
ALTER TABLE `gsection`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hpattern`
--
ALTER TABLE `hpattern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hsection`
--
ALTER TABLE `hsection`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hsection1`
--
ALTER TABLE `hsection1`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `hsection2`
--
ALTER TABLE `hsection2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ssection`
--
ALTER TABLE `ssection`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutsection1`
--
ALTER TABLE `aboutsection1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aboutsection2`
--
ALTER TABLE `aboutsection2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `asection`
--
ALTER TABLE `asection`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bsection`
--
ALTER TABLE `bsection`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `consection1`
--
ALTER TABLE `consection1`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `csection`
--
ALTER TABLE `csection`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `footerabout`
--
ALTER TABLE `footerabout`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `footercontact`
--
ALTER TABLE `footercontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `footerinfo`
--
ALTER TABLE `footerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `footerinsta`
--
ALTER TABLE `footerinsta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `footermap`
--
ALTER TABLE `footermap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `gallery1`
--
ALTER TABLE `gallery1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `gsection`
--
ALTER TABLE `gsection`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hpattern`
--
ALTER TABLE `hpattern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `hsection`
--
ALTER TABLE `hsection`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hsection1`
--
ALTER TABLE `hsection1`
  MODIFY `Id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `hsection2`
--
ALTER TABLE `hsection2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ssection`
--
ALTER TABLE `ssection`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
