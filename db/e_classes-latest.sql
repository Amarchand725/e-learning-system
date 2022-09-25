-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 08:22 PM
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
-- Database: `e_class`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `created_by`, `title`, `description`, `attachment`, `extension`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 11, 'Blogging Courses, Training, Classes & Tutorials Online', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '25-09-2022-171132.jpg', 'jpg', 1, NULL, '2022-09-25 12:11:32', '2022-09-25 12:11:32'),
(2, 11, 'Blogging & Content Writing Masterclass', '<p>Lorem Ipsumis simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '25-09-2022-171213.jpg', 'jpg', 1, NULL, '2022-09-25 12:12:13', '2022-09-25 12:12:13'),
(3, 11, 'Blogging Masterclass', '<p>Lorem Ipsum&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '25-09-2022-171250.jpg', 'jpg', 1, NULL, '2022-09-25 12:12:50', '2022-09-25 12:12:50'),
(4, 11, 'Build a Successful Creative Blog', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '25-09-2022-171335.jpg', 'jpg', 0, NULL, '2022-09-25 12:13:35', '2022-09-25 12:13:35'),
(5, 11, 'Built to Blog', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '25-09-2022-171417.jpg', 'jpg', 1, NULL, '2022-09-25 12:14:17', '2022-09-25 12:14:17'),
(6, 11, 'Blogging for Your Business', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '25-09-2022-171531.jpg', 'jpg', 1, NULL, '2022-09-25 12:15:31', '2022-09-25 12:15:31');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `description`, `icon`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Development', 'Lorem ipsum', '<i class=\"fa fa-connectdevelop\"></i>', 1, NULL, '2022-09-23 13:08:27', '2022-09-23 13:08:27'),
(2, NULL, 'Health & Fitness', 'Lorem ipsum', '<i class=\"fa fa-heartbeat\"></i>', 1, NULL, '2022-09-23 13:09:20', '2022-09-23 13:09:20'),
(3, NULL, 'Lifestyle', 'Lorem ipsum', '<i class=\"fa fa-yelp\"></i>', 1, NULL, '2022-09-23 13:15:11', '2022-09-23 13:15:11'),
(4, NULL, 'Music', 'Lorem ipsum', '<i class=\"fa fa-music\"></i>', 1, NULL, '2022-09-23 13:15:40', '2022-09-23 13:15:40'),
(5, NULL, 'Design', 'Lorem ipsum', '<i class=\"fa fa-slideshare\"></i>', 1, NULL, '2022-09-23 13:16:46', '2022-09-23 13:16:46'),
(6, NULL, 'Photography', 'Lorem ipsum', '<i class=\"fa fa-file-photo-o\"></i>', 1, NULL, '2022-09-23 13:17:24', '2022-09-23 13:17:24'),
(7, 1, 'Web Development', 'lorem ipsum', '<i class=\"fa fa-codepen rgt-20\"></i>', 1, NULL, '2022-09-23 14:07:56', '2022-09-23 14:07:56'),
(8, 7, 'All Web Devlopment', 'All Web Devlopment', '<i class=\"fa fa-language rgt-20\"></i>', 1, NULL, '2022-09-23 14:31:09', '2022-09-23 14:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `created_by`, `title`, `slug`, `price`, `sale_price`, `short_description`, `requirements`, `full_description`, `is_featured`, `thumbnail`, `video`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 11, 'Travel Hacking -Smart & Fun Travel', 'travel-hacking-smart-fun-travel', '2.00', '1.00', '60+ World Travel Tips: Cheap Travel. Fear of Flying. Travel Motivation & Safety. Negotiation. Social Success Abroad.', '<ul>\r\n	<li>Find the approaches to kill dejection and dread of voyaging and plan your movement for an astonishing travel encounters at a reasonable expense. The course will tell you the best way to deal with your cash and deal with your consumption effectively so you are never stuck anyplace with no cash during movement.</li>\r\n</ul>', '<p>At that point the course will cover how to discover nearby gatherings to hang out, neighborhood occasions to go to anyplace on the planet, how to meet different explorers simply like you, how to go to astonishing occasions that will transform yourself at a reasonable cost anyplace on the planet. Figure out how to get 100% confided in nearby astounding independently directed visits that you can do without anyone else in any piece of the world, stunning ventures applications to use to grow your voyaging experience, how to discover explicit concentrated data on neighborhood mystery occasions, and how to discover astonishing free nature areas around the globe to unwind in. We at that point proceed onward to the tips on the most proficient method to make durable fellowships with different voyagers. Likewise, something that many individuals don&#39;t consider is dating while at the same time voyaging. Well here in this course, we will cover the most ideal approaches to date while voyaging. You will find the probably the best dating applications. We need you can concentrate on movement first and dating second.</p>', NULL, '25-09-2022-114104.jpg', NULL, 1, NULL, '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(2, 11, 'The Nail Art Tutorial - Modern Nail Designs', 'the-nail-art-tutorial-modern-nail-designs', '1000', '400', 'Learn by creating amazing nail designs, create gorgeous GEL manicures and start your own nail business from home.', '<ul>\r\n	<li>In this course I will utilize stepping pack, acrylic hues, gel painting, hued gels and that&#39;s just the beginning. Subsequent to taking an interest in this course you will be capable, contingent upon the ability and expertise of every one, to make uncommon nail structures, to create and improve your aptitudes . Much obliged to you for your time and I trust this course will support you and fulfill e&nbsp;very one of your interests.</li>\r\n</ul>', '<p>This course incorporates an assortment of data to assist you with staying aware of nail workmanship news. At this course are welcome the two novices and propelled, the vital fixings are just the energy and the longing to learn. I will present and I will clarify in detail the materials we will brighten with, yet in addition all the important strides to finish the nail structure. In this course I will utilize stepping pack, acrylic hues, gel painting, hued gels and that&#39;s just the beginning. Subsequent to taking an interest in this course you will be capable, contingent upon the ability and expertise of every one, to make uncommon nail structures, to create and improve your aptitudes . Much obliged to you for your time and I trust this course will support you and fulfill every one of your interests.</p>', NULL, '25-09-2022-125129.jpg', NULL, 1, NULL, '2022-09-25 07:51:29', '2022-09-25 07:51:29'),
(5, 11, 'Hair styling- The Ultimate Hair Course', 'hair-styling-the-ultimate-hair-course', '1200', '500', 'You won\'t visit a hairdresser again! Cut, dye and style your hair yourself at home.', '<ul>\r\n	<li>Next, how about we talk about the apparatuses and the correct temperature to make solid twists. We are completing with a hair obsession. A large number of brands and varnishes. Be that as it may, many don&#39;t hold hair and make dust. Subsequently, the styling is messy.</li>\r\n</ul>', '<p>Voluminous, solid twists without backcombing/prodding or pleating, even the biggest length. Is it accurate to say that you are longing for radiant twists and a huge volume? However, your customers fear prodding or pleating... I know it all about twists. What&#39;s more, in this exercise I sincerely share every one of the privileged insights. You even didn&#39;t feel that everything is so straightforward. Anybody with any degree of preparing can ace the abilities. I will tell about hair arrangement. This is the most significant advance. Skirting this specific advance, you are committing a gross error.</p>', NULL, '25-09-2022-143913.jpg', NULL, 1, NULL, '2022-09-25 09:39:13', '2022-09-25 09:39:13'),
(6, 11, 'Art & Science of Drawing- Ultimate Drawing Course', 'art-science-of-drawing-ultimate-drawing-course', '1000', '600', 'A comprehensive video and ebook course designed for people wanting to learn the core concepts of drawing.', '<p>This top of the line course is currently far and away superior with new substance as of late included just as improved picture and sound. This refreshed adaptation of the course currently incorporates long stretches of reward drawing exhibits that will tell you the best way to apply your new attracting abilities to a wide scope of topic including botanicals and feathered creatures. There&#39;s even a&nbsp;prologue to essential figure drawing.</p>', '<p>The Art and Science of Drawing is an exceptional program that will show you how to draw each day in turn. The program is straightforward, every day you&#39;ll watch one video exercise that will present a fundamental drawing ability, and afterward do the prescribed practice. The Art and Science of Drawing is flooding with ground-breaking bits of knowledge into the drawing procedure and offers the absolute most clear, most open drawing guidance accessible. A large number of the apparatuses and strategies you&#39;ll learn here are once in a while observed outside of private workmanship institutes. This course is enthusiastically suggested for anybody keen on painting too. Most ace painters concur that drawing is a key and fundamental expertise for all painters. Essential SKILLS is the ideal introduction for anybody needing to figure out how to draw. The abilities you&#39;ll learn here will significantly improve your specialty and configuration regardless of what medium you work in.</p>', NULL, '25-09-2022-144244.jpg', NULL, 1, NULL, '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(7, 11, 'Guitar System - Ultimate Masterclass', 'guitar-system-ultimate-masterclass', '800', '400', 'Beginner guitar lessons. Go from knowing nothing about the guitar and learn to play songs everbody loves in just weeks', '<ul>\r\n	<li>Each tune exercise accompanies a play-along highlight, so after you&#39;re finished learning the melody, I play it with you at a moderate and agreeable rhythm, and you&#39;ll generally have a simple time placing it into viable use. The course additionally accompanies a 42-page picture harmony book, so you&#39;ll have a simple time tracking with every one of the exercises.</li>\r\n</ul>', '<p>Envision whenever somebody requests that you get the guitar at a family assembling and NOW you can play melodies everybody knows and appreciates easily and certainty. You&#39;ll be the star at the gathering and everybody will adore you for it! After you join this course, you won&#39;t have to envision any longer. I make you stride by-step and note-by-note through every one of the components expected to make this a reality in an exceptionally short measure of time!!!</p>', NULL, '25-09-2022-144450.jpg', NULL, 1, NULL, '2022-09-25 09:44:50', '2022-09-25 09:44:50'),
(8, 11, 'SQL: Learn SQL for data analysis', 'sql-learn-sql-for-data-analysis', '1000', '500', 'Step by Step SQL with MySQL Database for Beginners, Non-Techs, newbs - Quick way to learn SQL using MySQL Database', '<p>You needn&#39;t bother with long stretches of talks to learn SQL and MySQL, that is actually how I moved toward this course. I blended the data so it is snappy and straightforward. In this course I have rearranged the procedure without getting into all the perplexing specialized stand up so anyone can learn SQL. This course is intended to make each progression straightforward. I utilized similar t&nbsp;echniques that I use to show business experts and advertising investigators in my very own gathering.</p>', '<p>This is a novice level course. On the off chance that you have earlier information on SQL than this course may fill in as boost yet won&#39;t show you many propelled ideas. Why you ought to gain from me? I have been in Digital Marketing and Analytics for more than 15 years. I have prepared individuals from various foundations and have changed over them into high performing Digital Marketers and Analysts. I comprehend both the innovation and promoting side of business. I have managed numerous investigation advancements path before Google Tag chief existed and know the inward working of Digital Analytics. Likewise, I have created different course and showed understudies from everywhere throughout the world. I am online educator for University of British Columbia (Canada), University of Washington (USA), Bellevue College (USA) and Digital Analytics Association.</p>', NULL, '25-09-2022-144657.jpg', NULL, 1, NULL, '2022-09-25 09:46:57', '2022-09-25 09:46:57'),
(9, 11, 'The Mordern JavaScript - The Complete Guide', 'the-mordern-javascript-the-complete-guide', '1000', '800', 'Modern JavaScript from the beginning - all the way up to JS expert level! THE must-have JavaScript resource in 2020.', '<p>This is the most far reaching and present day course you can discover on JavaScript - it depends on all my JavaScript information AND educating experience. It&#39;s both a total guide, beginning with the center essentials of the language, just as a broad reference of the JavaScript language and condition, guaranteeing that the two newcomers just as experienced JavaScript designers get a great deal out&nbsp;of this course!</p>', '<p>It&#39;s an enormous course since it&#39;s stuffed with significant information and supportive substance. From the center nuts and bolts, over cutting edge ideas and JavaScript strengths, as far as possible up to master points like execution enhancement and testing - this course has everything. My objective was to make your go-to asset for the JavaScript language, which you can use for learning it as well as an asset you can return to and look into significant themes. The course depends on my experience as a long haul JavaScript engineer just as an instructor with in excess of 1,000,000 understudies on Udemy just as on my YouTube channel Academind. It&#39;s stuffed with models, demos, ventures, assignments, tests and obviously recordings - all with the objective of giving you the most ideal method for learning JavaScript.</p>', NULL, '25-09-2022-144841.jpg', NULL, 1, NULL, '2022-09-25 09:48:41', '2022-09-25 09:48:41'),
(10, 11, 'The Complete Web Developer Bootcamp', 'the-complete-web-developer-bootcamp', '1500', '800', 'The only course you need to learn web development - HTML, CSS, JS, Node, and More!', '<ul>\r\n	<li>94% of my in-person bootcamp understudies proceed to land full-time engineer positions. The vast majority of them are finished apprentices when I start working with them. The past 2 bootcamp programs that I showed cost $14,000 and $21,000. This course is similarly as extensive however with spic and span content at a small amount of the cost.</li>\r\n</ul>', '<p>This is the main complete tenderfoot full-stack designer course that spreads NodeJS. We assemble 13+ activities, including a monstrous generation application called YelpCamp. No other course strolls you through the formation of such a generous application. The course is continually refreshed with new substance, ventures, and modules. Consider it a membership to a ceaseless inventory of designer preparing. You find a good pace hound Rusty! At the point when you&#39;re figuring out how to program you frequently need to forfeit learning the energizing and current advances for the &quot;apprentice amicable&quot; classes. With this course, you outwit the two universes. This is a course intended for the total tenderfoot, yet it covers the absolute generally energizing and important themes in the business.</p>', NULL, '25-09-2022-145027.jpg', NULL, 1, NULL, '2022-09-25 09:50:27', '2022-09-25 09:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `course_includes`
--

CREATE TABLE `course_includes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_includes`
--

INSERT INTO `course_includes` (`id`, `course_id`, `icon`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, '<i class=\"fa fa-bullhorn\"></i>', 'Anytime, Anywhere', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(2, 1, '<i class=\"fa fa-bandcamp\"></i>', 'on-demand video', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(3, 1, '<i class=\"fa fa-bullseye\"></i>', 'Full lifetime access', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(4, 2, '<i class=\"fa fa-university\" aria-hidden=\"true\"></i>', 'Anytime, Anywhere', '2022-09-25 07:51:29', '2022-09-25 07:51:29'),
(5, 2, '<i class=\"fa fa-building-o\"></i>', 'Downloadable resources', '2022-09-25 07:51:29', '2022-09-25 07:51:29'),
(6, 2, '<i class=\"fa fa-bolt\"></i>', 'Full lifetime access', '2022-09-25 07:51:29', '2022-09-25 07:51:29'),
(7, 2, '<i class=\"fa fa-adjust\"></i>', 'Access on mobile and TV', '2022-09-25 07:51:29', '2022-09-25 07:51:29'),
(15, 5, '<i class=\"fa fa-braille\"></i>', 'On-demand video', '2022-09-25 09:39:13', '2022-09-25 09:39:13'),
(16, 5, '<i class=\"fa fa-buysellads\"></i>', 'Full lifetime access', '2022-09-25 09:39:13', '2022-09-25 09:39:13'),
(17, 5, '<i class=\"fa fa-crosshairs\"></i>', 'Access on mobile and TV', '2022-09-25 09:39:13', '2022-09-25 09:39:13'),
(18, 6, '<i class=\"fa fa-bullhorn\"></i>', 'Anytime, Anywhere', '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(19, 6, '<i class=\"fa fa-anchor\"></i>', 'Full lifetime access', '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(20, 6, '<i class=\"fa fa-book\"></i>', 'Access on mobile and TV', '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(21, 7, '<i class=\"fa fa-thermometer-full\" aria-hidden=\"true\"></i>', 'Anytime, Anywhere', '2022-09-25 09:44:50', '2022-09-25 09:44:50'),
(22, 8, '<i class=\"fa fa-thermometer-full\" aria-hidden=\"true\"></i>', 'Anytime, Anywhere', '2022-09-25 09:46:57', '2022-09-25 09:46:57'),
(23, 9, '<i class=\"fa fa-thermometer-full\" aria-hidden=\"true\"></i>', 'Anytime, Anywhere', '2022-09-25 09:48:41', '2022-09-25 09:48:41'),
(24, 10, '<i class=\"fa fa-thermometer-full\" aria-hidden=\"true\"></i>', 'On-demand video', '2022-09-25 09:50:27', '2022-09-25 09:50:27');

-- --------------------------------------------------------

--
-- Table structure for table `course_tags`
--

CREATE TABLE `course_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_tags`
--

INSERT INTO `course_tags` (`id`, `course_id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(2, 2, 'trending,onsale', '2022-09-25 07:51:29', '2022-09-25 07:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `counter` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `image`, `title`, `counter`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '24-09-2022-063553.png', 'Skilliful Instructor', 78, 'Start learning from experienced instructors', 1, NULL, '2022-09-24 01:35:53', '2022-09-24 01:45:27'),
(2, '24-09-2022-064729.png', 'Happy Student', 16, 'Enrolled in our classes and improved their skills.', 1, NULL, '2022-09-24 01:47:29', '2022-09-24 01:47:29'),
(3, '24-09-2022-064813.png', 'Live Classes', 20, 'Improve your skills using live knowledge flow.', 1, NULL, '2022-09-24 01:48:13', '2022-09-24 01:48:13'),
(4, '24-09-2022-064842.png', 'Video', 98, 'Learn without any geographical & time limitations.', 1, NULL, '2022-09-24 01:48:42', '2022-09-24 01:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `learnings`
--

CREATE TABLE `learnings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learnings`
--

INSERT INTO `learnings` (`id`, `icon`, `label`, `message`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"fa fa-anchor\"></i>', 'Learn Anytime, Anywhere', 'Online Courses for Creative', 1, NULL, '2022-09-23 15:24:14', '2022-09-23 15:24:14'),
(2, '<i class=\"fa fa-magic\"></i>', 'Beacome a researcher', 'Improve Your Skills Online', 1, NULL, '2022-09-23 15:25:32', '2022-09-23 15:25:32'),
(3, '<i class=\"fa fa-graduation-cap\"></i>', 'Most Popular Courses', 'Learn on your schedule', 1, NULL, '2022-09-23 15:26:03', '2022-09-23 15:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_of` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_of`, `parent_id`, `menu`, `icon`, `label`, `url`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'admin', NULL, 'Page', '<i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>', 'Settings', 'admin/page', 1, NULL, '2022-05-28 05:52:24', '2022-05-28 08:23:44'),
(3, 'admin', NULL, 'Role', '<i class=\"fa fa-random\" aria-hidden=\"true\"></i>', 'Roles', 'admin/role', 1, NULL, '2022-05-28 05:52:56', '2022-05-28 08:10:57'),
(4, 'admin', NULL, 'Menu', '<i class=\"fa fa-tasks\" aria-hidden=\"true\"></i>', 'Menus', 'admin/menu', 1, NULL, '2022-05-28 06:58:49', '2022-05-28 08:07:58'),
(42, 'admin', NULL, 'slider', '<i class=\"fa fa-sliders\" aria-hidden=\"true\"></i>', 'Slider', 'admin/slider', 1, NULL, NULL, NULL),
(43, 'admin', NULL, 'category', '<i class=\"fa fa-transgender-alt\" aria-hidden=\"true\"></i>', 'All Categories', 'admin/category', 1, NULL, NULL, NULL),
(46, 'admin', NULL, 'learning', '<i class=\"fa fa-meetup\" aria-hidden=\"true\"></i>', 'Learning Labels', 'admin/learning', 1, NULL, NULL, NULL),
(48, 'admin', NULL, 'fact', '<i class=\"fa fa-free-code-camp\" aria-hidden=\"true\"></i>', 'All Facts', 'admin/fact', 1, NULL, NULL, NULL),
(52, 'admin', NULL, 'course', '<i class=\"fa fa-snowflake-o\" aria-hidden=\"true\"></i>', 'All Courses', 'admin/course', 1, NULL, NULL, NULL),
(54, 'admin', NULL, 'blog', '<i class=\"fa fa-clipboard\" aria-hidden=\"true\"></i>', 'All Blogs', 'admin/blog', 1, NULL, NULL, NULL),
(57, 'admin', NULL, 'trustcompany', '<i class=\"fa fa-building\" aria-hidden=\"true\"></i>', 'All Trusted Companies', 'admin/trustcompany', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_14_084656_create_pages_table', 1),
(6, '2022_03_14_143426_create_page_settings_table', 1),
(7, '2022_05_14_165852_create_permission_tables', 1),
(8, '2022_05_14_193534_create_menus_table', 1),
(9, '2022_09_23_020938_create_sliders_table', 2),
(10, '2022_09_23_055619_create_categories_table', 3),
(11, '2022_09_23_081845_create_learnings_table', 4),
(13, '2022_09_24_062614_create_facts_table', 5),
(16, '2022_09_24_095433_create_what_learns_table', 7),
(17, '2022_09_24_095928_create_course_includes_table', 8),
(18, '2022_09_24_100237_create_course_tags_table', 9),
(19, '2022_09_24_080939_create_courses_table', 10),
(20, '2022_09_25_112114_create_user_profiles_table', 11),
(22, '2022_09_25_043046_create_blogs_table', 12),
(26, '2022_09_25_060110_create_trustcompanies_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 11);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_settings`
--

CREATE TABLE `page_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'Admin', 'Admin', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `created_by`, `title`, `sub_title`, `description`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 11, 'Learn Any Time', 'Learn Whatever, Whenever, However', 'Online Classes', '23-09-2022-173850.jpg', 1, NULL, '2022-09-23 12:38:50', '2022-09-23 12:38:50'),
(2, 11, 'Learn Smart Online', 'Become a better researcher', 'Online Classes', '23-09-2022-173949.jpg', 1, NULL, '2022-09-23 12:39:49', '2022-09-23 12:39:49'),
(3, 11, 'Online Courses', 'Explore a variety of fresh topics', 'Search online, Explore online', '23-09-2022-174122.jpg', 1, NULL, '2022-09-23 12:41:22', '2022-09-23 12:41:33');

-- --------------------------------------------------------

--
-- Table structure for table `trustcompanies`
--

CREATE TABLE `trustcompanies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trustcompanies`
--

INSERT INTO `trustcompanies` (`id`, `name`, `description`, `logo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Iris Barrera', 'Distinctio Quam nat', '25-09-2022-181504.jpg', 1, NULL, '2022-09-25 13:15:04', '2022-09-25 13:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Johanna Lesch', 'ispinka@example.net', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'E1ap7PivXk', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(2, 'Sydney Beatty', 'cpaucek@example.net', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'gnpmCwVlId', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(3, 'Kayden Reichert', 'coy22@example.net', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3G22wV7cDi', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(4, 'Mrs. Emilia Mraz DVM', 'rbruen@example.org', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8SX7ikTwKo', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(5, 'Kailyn Rosenbaum', 'zella.heaney@example.net', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fe2Qbs4KLQ', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(6, 'Mr. Jameson Ziemann', 'bailee56@example.net', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LSeqlMf74W', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(7, 'Prof. Albina Sporer PhD', 'roberts.jan@example.com', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9wY1PaM2zm', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(8, 'Alvena Hand PhD', 'dena.cormier@example.org', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'TsZMBoKZrG', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(9, 'Eldon Lakin', 'xweimann@example.com', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Ko5kCiIMVn', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(10, 'Emma Hagenes', 'vmiller@example.org', '2022-09-23 09:04:12', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'npNt1VgRNv', '2022-09-23 09:04:12', '2022-09-23 09:04:12'),
(11, 'Admin', 'admin@gmail.com', NULL, '$2y$10$qyWbBZDGI/2z6iYevWZqzOczsUscw6aZI5S.Fb5i3gG0NgTnINnku', NULL, '2022-09-23 09:04:12', '2022-09-23 09:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linked_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `what_learns`
--

CREATE TABLE `what_learns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `what_learns`
--

INSERT INTO `what_learns` (`id`, `course_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 'Locating the perfect dates to travel for the cheapest price.', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(2, 1, 'Locating the perfect dates to travel for the cheapest price.', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(3, 1, 'Learn the tricks of travel and finding discount places to stay.', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(4, 1, 'How to travel light', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(5, 1, 'How to finance your trips', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(6, 1, 'How to locate & book cheap flights', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(7, 1, 'How to communicate if you don\'t speak the native language in a country.', '2022-09-25 06:41:04', '2022-09-25 06:41:04'),
(8, 2, 'You\'ll be able to draw onto your clients nails some sophisticated', '2022-09-25 07:51:29', '2022-09-25 07:51:29'),
(9, 2, 'You\'ll have a different perspective about designing nails', '2022-09-25 07:51:29', '2022-09-25 07:51:29'),
(10, 2, 'Practice to be able to reach', '2022-09-25 07:51:29', '2022-09-25 07:51:29'),
(19, 5, 'Curl your hair', '2022-09-25 09:39:13', '2022-09-25 09:39:13'),
(20, 5, 'Straighten your hai', '2022-09-25 09:39:13', '2022-09-25 09:39:13'),
(21, 5, 'Cut your own hair', '2022-09-25 09:39:13', '2022-09-25 09:39:13'),
(22, 5, 'Dye your own hair naturally at hom', '2022-09-25 09:39:13', '2022-09-25 09:39:13'),
(23, 6, 'Draw the human face', '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(24, 6, 'Draw perspective drawings', '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(25, 6, 'Drawing Fundamentals', '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(26, 6, 'Character design', '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(27, 6, 'How to create concept art', '2022-09-25 09:42:44', '2022-09-25 09:42:44'),
(28, 7, 'Spend less time fighting with the DAW and more time focusing on the music.', '2022-09-25 09:44:50', '2022-09-25 09:44:50'),
(29, 7, 'Discover the quickest and easiest ways to write music in Logic Pro.', '2022-09-25 09:44:50', '2022-09-25 09:44:50'),
(30, 7, 'Professional by following my step-by-step mixing system using stock plugins.', '2022-09-25 09:44:50', '2022-09-25 09:44:50'),
(31, 8, 'Be comfortable putting SQL and PostgreSQL on their resume', '2022-09-25 09:46:57', '2022-09-25 09:46:57'),
(32, 8, 'Use SQL to perform data analysis', '2022-09-25 09:46:57', '2022-09-25 09:46:57'),
(33, 8, 'Be confident while working with constraints and relating data tables', '2022-09-25 09:46:57', '2022-09-25 09:46:57'),
(34, 8, 'Tons of exercises that will solidify your knowledge', '2022-09-25 09:46:57', '2022-09-25 09:46:57'),
(35, 9, 'Get friendly and fast support in the course Q&A', '2022-09-25 09:48:41', '2022-09-25 09:48:41'),
(36, 9, 'What\'s new in ES6: arrow functions, classes, default and rest parameters, etc.', '2022-09-25 09:48:41', '2022-09-25 09:48:41'),
(37, 9, 'Organize and structure your code using JavaScript patterns like modules', '2022-09-25 09:48:41', '2022-09-25 09:48:41'),
(38, 9, 'Get friendly and fast support in the course Q&A', '2022-09-25 09:48:41', '2022-09-25 09:48:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_includes`
--
ALTER TABLE `course_includes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_tags`
--
ALTER TABLE `course_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `learnings`
--
ALTER TABLE `learnings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_settings`
--
ALTER TABLE `page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trustcompanies`
--
ALTER TABLE `trustcompanies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what_learns`
--
ALTER TABLE `what_learns`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_includes`
--
ALTER TABLE `course_includes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `course_tags`
--
ALTER TABLE `course_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learnings`
--
ALTER TABLE `learnings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_settings`
--
ALTER TABLE `page_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trustcompanies`
--
ALTER TABLE `trustcompanies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `what_learns`
--
ALTER TABLE `what_learns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
