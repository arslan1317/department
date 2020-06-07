-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 07, 2020 at 11:23 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `department_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_setting`
--

CREATE TABLE `basic_setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `footer_logo` varchar(100) DEFAULT NULL,
  `favicon` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `section_type` int(11) DEFAULT NULL,
  `slider_lower_heading` text,
  `slider_lower_paragraph` varchar(100) DEFAULT NULL,
  `info_image` varchar(100) DEFAULT NULL,
  `info_heading` varchar(100) DEFAULT NULL,
  `info_paragraph` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `footer_text` text,
  `copyright` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basic_setting`
--

INSERT INTO `basic_setting` (`id`, `logo`, `footer_logo`, `favicon`, `link`, `icon`, `section_type`, `slider_lower_heading`, `slider_lower_paragraph`, `info_image`, `info_heading`, `info_paragraph`, `created_at`, `updated_at`, `phone`, `email`, `address`, `footer_text`, `copyright`) VALUES
(1, NULL, NULL, NULL, '##', '<i class=\"fa fa-facebook\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-29 20:14:25', '2020-03-29 20:36:53', NULL, NULL, NULL, NULL, ''),
(2, NULL, NULL, NULL, '#', '<i class=\"fa fa-twitter\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-29 20:32:33', '2020-03-29 20:32:33', NULL, NULL, NULL, NULL, ''),
(3, NULL, NULL, NULL, '#', '<i class=\"fa fa-google-plus\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-29 20:33:27', '2020-03-29 20:33:27', NULL, NULL, NULL, NULL, ''),
(5, NULL, NULL, NULL, '#', '<i class=\"fa fa-linkedin\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-29 20:47:13', '2020-03-29 20:47:13', NULL, NULL, NULL, NULL, ''),
(6, NULL, NULL, NULL, '', '', 4, 'Making the World Since 1986', 'We provides best industry and company services', NULL, NULL, NULL, '2020-03-29 20:47:13', '2020-05-17 12:49:47', NULL, NULL, NULL, NULL, ''),
(7, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557363.png', 'Petrolium Refinery', 'We are providing different services in this sector to wide area of world with cleanest line of services. Customised cleaning line system.', '2020-03-29 22:36:03', '2020-03-29 22:36:03', NULL, NULL, NULL, NULL, ''),
(8, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557906.png', 'Power & Energy', 'Tectxon is committed to developing solutions that reduced operating costs and alignment with electronic products and instrument.', '2020-03-29 22:45:06', '2020-03-29 22:45:06', NULL, NULL, NULL, NULL, ''),
(9, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557955.png', 'Mechanical Works', 'We provide embedded technology with innovation and digital capabilities to transform your functions in our latest products.', '2020-03-29 22:45:55', '2020-03-29 22:45:55', NULL, NULL, NULL, NULL, ''),
(10, '1591528461.png', '1590306650.png', '1591527681.png', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2020-05-17 13:14:12', '2020-06-07 06:14:21', '021-99207134/32/33', 'info@example.com', 'Evanto HQ 24 Fifth st., Los Angeles, USA', 'Department has very good strength in innovative technology and tools with over 35 years of experience. We makes long-term investments goal in global companies in different sectors, mainly in Europe and other countries.', 'Copyright © 2019 Tectxon. All rights reserved.');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Energy', '2020-03-15 19:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `start_date`, `end_date`, `details`, `department_id`, `sub_dep_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abel Cannon', '2020-01-01 00:00:00', '2020-02-01 00:00:00', '<p><br></p><p>Excepturi sit, ipsum.sdfsf<br></p><p><br></p>', NULL, 1, 18, 1, '2020-03-23 16:42:11', '2020-03-25 01:37:54'),
(2, 'Brenden Schneider', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '<p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">Any small business owner can access the&nbsp;<a href=\"https://www.standforsmall.com/\" target=\"_blank\" style=\"color: rgb(4, 119, 201); cursor: pointer;\">Stand for Small</a>&nbsp;site for free and explore dozens of resources among five categories:</p><ol style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 1.2em; list-style: none; counter-reset: select-counter 0; font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px;\"><li style=\"margin: 0px 50px 1em 0px; padding: 0px; list-style: none; display: block; color: rgb(62, 72, 85);\">Make my expenses more manageable</li><li style=\"margin: 0px 50px 1em 0px; padding: 0px; list-style: none; display: block; color: rgb(62, 72, 85);\">Get my shipping and deliveries back on track</li><li style=\"margin: 0px 50px 1em 0px; padding: 0px; list-style: none; display: block; color: rgb(62, 72, 85);\">Help my team succeed</li><li style=\"margin: 0px 50px 1em 0px; padding: 0px; list-style: none; display: block; color: rgb(62, 72, 85);\">Make my business stronger online</li><li style=\"margin: 0px 50px 1em 0px; padding: 0px; list-style: none; display: block; color: rgb(62, 72, 85);\">Get advice and tools for adapting my business</li></ol><p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">Some of the offers are only available for first time customers, while others are available to any small business owner during coronavirus, whether you have an Amex card or not.</p><div class=\"MidResponsive-midResponsiveContainer\"><div id=\"MidResponsive-3\" class=\"\" data-module=\"mps-slot\" style=\"position: sticky; margin: 0px auto;\"><div id=\"mps-getad-midresponsive\" class=\"mps-wrapper\" data-mps-fill-slot=\"mps-getad-midresponsive\" style=\"margin-bottom: 40px; text-align: center;\"></div></div></div><p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">For example, Adobe is offering free Adobe Acrobat web-based PDF services and an extended 90-day free trial to Adobe Sign. Plus you can receive a two-month free trial of the design app Adobe Spark.</p><p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">Additionally, Dell has gathered expert guidance and tips on enabling remote workforces and staying productive. The company is also offering additional discounts on select PCs, servers, electronics and accessories. (Keep in mind, terms apply to all offers.)</p><p><span style=\"font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\"></span></p><p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">During the coming weeks, the Stand for Small coalition will continue to add more partners, experiences and services throughout the year, making it a go-to resource for small businesses.</p><p><br></p>', 1, NULL, 1, 1, '2020-03-25 01:52:43', '2020-05-19 03:36:56'),
(4, 'Coal Event', '2020-05-19 00:00:00', '2020-05-20 00:00:00', '<p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">Small businesses are some of the hardest hit during the ongoing coronavirus pandemic due to state-required closures and social distancing. As a result, many small business owners are struggling to make ends meet and are looking for resources to help them through these uncertain times.<p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">While some business owners were able to receive loans from the $349 billion Paycheck Protection Program, it ran out within weeks, leaving many in limbo. Whether you received a loan or not, you can still consider the&nbsp;<a href=\"https://www.cnbc.com/select/what-is-credit-card-forbearance/\" style=\"color: rgb(4, 119, 201); cursor: pointer;\">forbearance programs</a>&nbsp;provided by credit card lenders that may include waived&nbsp;<a href=\"https://www.cnbc.com/select/credit-card-late-fees-may-rise-in-2020/\" style=\"color: rgb(4, 119, 201); cursor: pointer;\">late fees</a>,&nbsp;<a href=\"https://www.cnbc.com/select/when-to-ask-for-a-credit-limit-increase/\" style=\"color: rgb(4, 119, 201); cursor: pointer;\">credit limit increases</a>&nbsp;and the ability to pause payments.</p><p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">Yet these programs mostly offer temporary monetary support. There&acirc;&#128;&#153;s little guidance and very few resources to assist business owners who are looking to reduce expenses or manage remote employees.</p><p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">That&acirc;&#128;&#153;s where the new coalition, &acirc;&#128;&#156;<a href=\"https://www.standforsmall.com/\" target=\"_blank\" style=\"color: rgb(4, 119, 201); cursor: pointer;\">Stand for Small</a>,&acirc;&#128;&#157; from American Express and over 40 partner companies, including Amazon, Google, Facebook, Microsoft, Verizon and IBM, comes in. Stand for Small aims to provide small business owners support through various offers, tools and expertise, as they navigate the effects of the coronavirus.</p><p style=\"position: relative; padding-right: 0px; margin-bottom: 16px; color: rgb(62, 72, 85); font-family: Lato, Helvetica, Arial, sans-serif; font-size: 17px; letter-spacing: normal;\">Below,&nbsp;<a href=\"https://www.cnbc.com/select/\" style=\"color: rgb(4, 119, 201); cursor: pointer;\">CNBC Select</a>&nbsp;reviews how Stand for Small can help your business and shares the benefits of having a small business credit card.</p></p>\n', 1, NULL, 1, 1, '2020-05-19 03:33:39', '2020-05-19 03:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_03_16_000131_create_departments_table', 2),
(5, '2020_03_16_000144_create_sub_departments_table', 2),
(6, '2020_03_16_043247_add_more_colum_to_subdepartment', 3),
(7, '2020_03_18_054353_add_status_to_sub_departments', 4),
(8, '2020_03_19_043017_create_user_request_table', 5),
(9, '2020_03_20_035131_create_user_categories_table', 6),
(10, '2020_03_20_215251_create_news_table', 7),
(11, '2020_03_21_025439_add_status_to_news', 8),
(13, '2020_03_23_212257_add_status_to_events', 10),
(14, '2020_03_21_194903_create_events_table', 11),
(15, '2020_03_26_064010_create_sources_table', 12),
(16, '2020_03_26_064025_create_source_logs_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `headline`, `body`, `author`, `department_id`, `sub_dep_id`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(3, '1584939601.jpeg', 'Aut explicabo Volup', '<p>sfsafasfas</p>', NULL, 1, NULL, 1, '2020-03-22 19:00:01', '2020-03-22 19:00:01', 1),
(13, '1589672298.jpeg', 'Oil jumps 6%, posts third week of gains amid signs of demand pickup', '<p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Oil prices rose on Friday, posting their third week of gains, as data showed demand for crude picking up in China after the easing of curbs to stem the coronavirus outbreak, boosting hopes that the global supply overhang may start to fade.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"><a href=\"https://www.cnbc.com/quotes/?symbol=@LCO.1\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">Brent crude</a>&nbsp;was up $1.14, or 3.66%, to trade at $32.27 per barrel, while&nbsp;<a href=\"https://www.cnbc.com/quotes/?symbol=@CL.1\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">West Texas Intermediate settled</a>&nbsp;up 5.9% to trade at $29.52 per barrel, having jumped 9% in the previous session.</p><div class=\"BoxInline-container  \" style=\"max-width: 300px; margin: 0px;\"><div id=\"BoxInline-ArticleBody-5\" class=\"BoxInline-container\" data-module=\"mps-slot\" style=\"max-width: 300px; margin: 0px;\"></div></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Amid supply cuts by the Organization of the Petroleum Exporting Countries (OPEC) and other major producers, bright spots are also emerging on the demand side. Data released on Friday showed China’s daily crude oil use rebounded in April as refineries ramped up operations.&nbsp;</p><div class=\"teads-adCall\" style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\"></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Still the market mood remains far from euphoric, with the coronavirus pandemic far from over and new clusters emerging in some countries where lockdowns have been eased.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">“The fundamentals in the market are clearly improving,” ING Research analysts said in a note. “But we still believe that in the near term, the upside is limited given that we are still in a surplus environment ... There is plenty of inventory for the market to digest.”</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">There is optimism that stockpiles may be on the wane.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The International Energy Agency said it expects crude inventories to fall by about 5.5 million barrels per day (bpd) in the second half of this year.</p><div class=\"MidResponsive-midResponsiveContainer\"><div id=\"MidResponsive-8\" class=\"\" data-module=\"mps-slot\" style=\"position: sticky; margin: 0px auto;\"></div></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Meanwhile U.S. crude inventories fell for the first time in 15 weeks, the Energy Information Administration said on Wednesday.&nbsp;</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Output cuts will boost the trend towards lower inventories, but U.S. crude is unlikely to see strong gains.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">“WTI crude will struggle to break above the $30 level until both the economic outlook improves for the U.S. and some of the downside risks ease,” said Edward Moya, senior market analyst at OANDA.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">On the production side, OPEC and associated producers&nbsp;— collectively known as OPEC+&nbsp;— had already agreed to cut output by a record of nearly 10 million bpd before Saudi Arabia this week extended its planned reductions for June, pledging to lower supply by nearly 5 million bpd.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Saudi Aramco, the world’s largest oil exporter, reduced the volume of crude it will supply to at least three buyers in Asia by as much as 30% for June, three sources with knowledge of the matter told Reuters on Thursday.</p><p><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">OPEC+ now wants to extend overall production cuts beyond May and June when the group next meets, sources told Reuters earlier this week.</p>', NULL, NULL, 3, 18, '2020-05-16 13:38:18', '2020-05-16 13:38:18', 0),
(15, '1589678038.jpeg', 'Karachi witnesses worst Eid sale season in due to COVID-19', '<p>The year 2020 has seen the worst Eid sale season in the history of Pakistan due to the COVID-19 pandemic. All Karachi Tajir Ittehad Chairman Atiq Mir thinks trading in the city this Eidul Fitr will barely cross the mark of Rs10 billion<br><br>Mir told The News that due to the economic slowdown last year, Karachi saw a sale of hardly Rs35 billion. However, he believes that the losses this year will be unprecedented.<br><br><img data-filename=\"v2.jpg\" style=\"width: 675.328px;\" src=\"http://127.0.0.1:8000/images/5ec08fd6e6e36.jpeg\"><p><br></p><p>He pointed out that some 40 major shopping malls of the city are being kept closed because they are centrally air-conditioned. &acirc;&#128;&#156;The novel coronavirus can spread quickly in centrally air-conditioned places.&acirc;&#128;&#157;<br></p></p>\n', NULL, 1, NULL, 1, '2020-04-30 20:13:59', '2020-05-16 20:13:59', 1),
(16, '1589858236.jpeg', 'Traders feared June oil futures would go negative, instead they expire Tuesday possibly above $30', '<p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The fortunes of the oil market have turned around dramatically in the past month.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">This time last month, investors were watching the futures market in disbelief. The May contract for West Texas Intermediate oil was set to expire, and prices did the unthinkable&nbsp;â€”&nbsp;<a href=\"https://www.cnbc.com/2020/04/20/this-oil-price-crash-isnt-as-bad-as-it-seems-heres-why.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">&nbsp;they&nbsp;plunged 300% in one day,</a>&nbsp;deep into negative territory. In the spot market all across North America, prices also turned negative, meaning people literally couldnâ€™t even give oil away.</p><p><br></p><div class=\"BoxInline-container  \" style=\"max-width: 300px; margin: 0px;\"><div id=\"BoxInline-ArticleBody-5\" class=\"BoxInline-container\" data-module=\"mps-slot\" style=\"max-width: 300px; margin: 0px;\"></div></div><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></p><p><br></p><div class=\"InlineImage-imageEmbed noBkg\" id=\"ArticleBody-InlineImage-undefined\" data-test=\"InlineImage\" style=\"margin-bottom: 30px;\"><div class=\"InlineImage-wrapper InlineImage-wrapperNoCaption\" style=\"-webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: 100%; max-width: 100%; border-bottom: none; padding-bottom: 15px;\"><div class=\"InlineImage-imagePlaceholder\" style=\"width: 610px; position: relative; background: rgb(215, 225, 228); margin-bottom: 15px; padding-bottom: 0px;\"><div role=\"button\" tabindex=\"-1\"><img src=\"https://fm-static.cnbc.com/awsmedia/chart/2020/05/18/@CL.1_chart%20(1).1589815615096.jpeg?\" class=\"\" style=\"display: block; width: 610px;\"></div></div><div><div class=\"InlineImage-imageEmbedCaption\" style=\"font-weight: 600; color: rgb(23, 23, 23); font-size: 12px; line-height: 1.5; margin-bottom: 5px; padding: 0px;\"></div><div class=\"InlineImage-imageEmbedCredit\" style=\"color: rgb(116, 116, 116); font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 12px; font-style: italic; padding: 0px;\"></div></div></div></div><p><br></p><p></p><p><br></p><div class=\"teads-adCall\" style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\"></div><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">There were&nbsp;<a href=\"https://www.cnbc.com/2020/04/21/oil-traders-have-never-seen-insane-market-like-this-before-fear-more-declines-to-negative-prices.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">dire forecasts of much more pain ahead,</a>&nbsp;and a recurrence of the wild trading was feared for the June contract.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">But now the outlook is much improved, as the June contract is set to expire Tuesday. The world has changed, and the ugly crisis created by both oversupply and a sudden lack of demand is beginning to reverse.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">â€œWe think fundamental right steps have been taken to get us on sounder footing,â€ said Helima Croft, head of global commodities strategy at RBC. Croft said the â€œgreen shoots of recovery in place,â€ as Chinese and U.S. demand are improving, and OPEC plus ended its feuding and agreed to sharply cut output.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">China has been buying more oil, and its demand is clearly strengthening.&nbsp;U.S. drivers are getting back into their cars as coronavirus shutdown restrictions lift. On the supply side,&nbsp;Saudi Arabia last week added another 1 million barrels a day cut of its own to the OPEC plus deal for a 9.7 million barrel reduction, and Americaâ€™s oil industry has cut its production quickly and sharply.</p><p><br></p><div class=\"MidResponsive-midResponsiveContainer\"><div id=\"MidResponsive-8\" class=\"\" data-module=\"mps-slot\" style=\"position: sticky; margin: 0px auto;\"><div id=\"div-gpt-midresponsive-2010957688\" class=\"mps-slot\" data-mps-slot=\"midresponsive\" data-mps-loadset=\"0\" style=\"margin-bottom: 40px; text-align: center;\"></div></div></div><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"><a href=\"https://www.cnbc.com/2020/05/18/oil-news-crude-wti-brnet-prices-today.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">Oil prices jumped sharply Monday</a>, rising on the positive developments and a rally in risk markets sparked by Fed Chairman Jerome Powellâ€™s comments that the Fed will can do more to support markets and the economy.&nbsp;<a href=\"https://www.cnbc.com/quotes/?symbol=@CL.1\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">WTI futures for June</a>&nbsp;were up 7.4% at $31.62 per barrel in afternoon trading.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Now, the demand side of the market and the supply side are improving in tandem, to reduce the oil glut that was close to filling all available storage facilities, including ships at sea. The fact that the world was running out of places to store oil in April was behind the sharp drop in the futures contract. Investors were unable or unwilling to take delivery of oil, and there were also investors who became trapped in the trade as the selling spiraled. Interactive Brokers took a $109.3 million hit to cover its customersâ€™&nbsp; losses.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Oil is now trading above $30 for the first time since March 17, and RBOB gasoline futures have risen above $1 per gallon for the first time since March 13. The strong move higher in the June contract is also forcing some investors to cover short positions, adding to the rise.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The&nbsp;<a href=\"https://www.cnbc.com/quotes/?symbol=USO\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">United States Oil Fund</a>&nbsp;ETF, based on futures contracts, was up more than 8% Monday. Some investors initially blamed USO for causing the market disruption last month, but the fund had already rolled out of the May contract before the market began to crater. A popular oil play for retail investors, USO has since&nbsp;<a href=\"https://www.cnbc.com/2020/04/27/oil-etf-uso-dumps-plunging-june-oil-contract-as-cramer-says-hedge-funds-are-going-for-the-kill.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">restructured its holdings to distribute them more evenly across later dated contracts</a>, rather than holding them in the front month.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">As the June contract gets set to expire, the landscape has changed dramatically for the U.S. oil industry. U.S. production was at a record high in March, and has cut back by 1.5 million barrels a day in just about six weeks, to 11.6 million barrels a day, according to the Energy Information Administrationâ€™s latest weekly data. Analysts expect production could be down by another 500,000 to 1 million barrels soon.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">â€œItâ€™s just a massive response by the U.S. industry,â€ said John Kilduff, partner with Again Capital.&nbsp;â€œThis is a remarkable plunge in activity. ... Itâ€™s pretty clear the U.S. is now the swing producer.â€</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Baker Hughes reported that another 34 oil rigs went out of service last week, leaving just 258 active oil rigs, about a third of the rig count last year.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">â€œStorage at Cushing actually fell last week. That was the whole mechanism last month that drove the negative pricing,â€ said Kilduff. â€œThere were barrels to take in and no place to put them.â€ Cushing, Oklahoma is the storage hub for WTI, so the market watches storage levels there closely.&nbsp;</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">â€œThe pace was such that it would have been topped out by the end of June,â€ Kilduff said, but that seems to have reversed.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Traders said oil prices were also lifted Monday by a report from Genscape that showed another big drop in Cushing storage levels. Government data on the latest storage levels will be released Wednesday.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The weekly U.S. government data shows implied demand for gasoline was also up sharply, with demand at 7.4 million barrels a day, from the early April trough of 5.1 million barrels a day. Normal demand for this time of year is about 9.5 million barrels a day, and it peaks ahead of the July 4 holiday. Analysts said the government data overstates retail demand, which is more like 6.5 million barrels a day in mid-May.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Analysts say demand has improved and as of last week,&nbsp;<a href=\"https://www.cnbc.com/2020/05/13/gasoline-demand-improves-as-states-reopen-and-drivers-hit-the-road-but-its-still-down-30percent.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">it was off by about 30% from normal levels,</a>&nbsp;much better than the approximately 50% drop in demand in early April. U.S. gasoline demand is key because it is typically equal to about 10% of global oil demand.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Francisco Blanch, head of global commodities and derivatives at Bank of America, said he expects the rally to continue for now, but prices will not go that much higher. â€œThis is a recovery that has a pretty low ceiling. My sense is that if prices approach $40 a barrel, then production will come back pretty quickly,â€ he said.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Oil prices were also helped Thursday by a news report that Chinese demand has returned to levels near where it was before the lockdown there.</p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">RBC has been tracking Chinese data, including on airline flights, and it expects demand will recover an average 9% this quarter, 17% in the third quarter and 25% in the fourth quarter from the lows seen during the first quarter.</p><p><br></p><p><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span></p><p><br></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Croft expects the recovery in China to be the quickest, relative to other global regions.</p><p><br></p><p></p><p><br></p>', NULL, 1, NULL, 1, '2020-05-19 03:17:16', '2020-05-19 03:18:44', 1),
(18, '1589900699.jpeg', 'EIA Predicts A Record Drop In U.S. Shale Oil Production', '<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>Crude oil production in the seven major US shale basins will fall by a record 197,000 barrels per day next month, the&nbsp;<a href=\"https://www.eia.gov/petroleum/drilling/#tabs-summary-2\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 0, 238); text-decoration-line: underline;\">Energy Information Administration</a>&nbsp;reported on Monday.<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>Production in the seven most prolific shale basins in the United States is expected to fall to 7.822 million bpd, the EIA said, down from 8.019 million bpd this month. It will be a record monthly loss.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>The largest drop on the list for crude oil and condensate production is in the Permian, which is expected to fall by 87,000 bpd to 4.290 million bpd. The next largest basin, the Eagle Ford, is expected to fall by 36,000 bpd in June, to 1.174 million bpd.</p><div class=\"video_location\" style=\'margin: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline;\'></div><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>There are losses expected in all seven basins on the EIA&acirc;&#128;&#153;s list.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>Gas production is expected to see across-the-board losses, too, with the EIA predicting a loss of 779 million cubic feet per day. For gas production, the EIA is expecting that Anadarko will see the largest drop of 244 million cubic feet per day to 6,486 million. The next largest loss in June will come from the Permian, with a loss of 210 million cubic feet per day.&nbsp;&nbsp;</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>The anticipated losses in production both this month and next are not surprising, although they are significant. Oil producers across the globe have cut production both as a market strategy and as a natural consequence of the low oil prices and shrinking storage capacity for crude oil.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>Oil prices ticked up on Monday on positive developments on a possible coronavirus vaccine, as China&acirc;&#128;&#153;s demand for crude is looking up, and as the EIA predicted even greater production losses next month after the United States has already seen its crude production fall by more than 1 million barrels per day.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>WTI was trading up 11.59% on the day at 4:30 pm EDT, at&nbsp;<a href=\"https://oilprice.com/oil-price-charts/45\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 0, 238); text-decoration-line: underline;\">$32.84.</a></p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>By Julianne Geiger for Oilprice.com</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'><strong>More Top Reads From Oilprice.com:</strong></p><ul style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 36px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; list-style: none;\'><li style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(128, 0, 0);\"><strong><a href=\"https://oilprice.com/Energy/Crude-Oil/Could-This-Become-The-Worlds-Newest-Oil-Exporter.html\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: inherit; text-decoration-line: underline;\">Could This Become The World&acirc;&#128;&#153;s Newest Oil Exporter?</a><br></strong></span></li><li style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(128, 0, 0);\"><strong><a href=\"https://oilprice.com/Energy/Oil-Prices/Oil-Jumps-11-On-Signs-Of-Demand-Recovery.html\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: inherit; text-decoration-line: underline;\">Oil Jumps 11% On Signs Of Demand Recovery</a><br></strong></span></li><li style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline;\"><strong><span style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(128, 0, 0);\"><a href=\"https://oilprice.com/Energy/Crude-Oil/US-Fracking-Activity-To-Hit-Rock-Bottom-In-May.html\" target=\"_blank\" rel=\"noopener\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: inherit; text-decoration-line: underline;\">U.S. Fracking Activity To Hit Rock Bottom In May</a></span></strong></li></ul></p>\n', NULL, NULL, 3, 18, '2020-05-19 15:04:59', '2020-05-19 15:04:59', 0),
(19, '1589900791.jpeg', 'Venezuela Could Lose Its Most-Prized Oil Asset Citgo', '<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>The U.S. Supreme Court justices&nbsp;<a href=\"https://www.law360.com/internationalarbitration/articles/1274504/breaking-justices-won-t-review-crystallex-1-2b-award-fight\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 0, 238); text-decoration-line: underline;\">declined</a>&nbsp;on Monday to review a federal court&acirc;&#128;&#153;s ruling that had allowed Canadian miner Crystallex to take over shares of U.S. refiner Citgo in compensation for US$1.4 billion for the expropriation of assets in Venezuela.&nbsp;&nbsp;<p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>U.S. refiner Citgo is the crown jewel in the holdings of Venezuela&acirc;&#128;&#153;s state oil firm PDVSA, but the rejection of the Supreme Court to hear Venezuela&acirc;&#128;&#153;s arguments for appeal of the previous ruling could mean that Venezuela is now even closer to losing control over Citgo than before, according to&nbsp;<a href=\"https://www.bnnbloomberg.ca/venezuela-rejected-by-u-s-supreme-court-in-citgo-stake-clash-1.1437826\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 0, 238); text-decoration-line: underline;\">Bloomberg</a>.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>Citgo Petroleum Corp is one of the largest oil refineries in the United States. Its current operations are managed by two dueling boards of directors&acirc;&#128;&#148;one appointed by Nicolas Maduro and one appointed by Juan Guaid&Atilde;&sup3;&acirc;&#128;&#148;the opposition leader recognized as the legitimate president by the U.S. and 50 other countries &acirc;&#128;&#147; and both are digging in over the power struggle for Venezuela&acirc;&#128;&#153;s U.S.-based refinery that rakes in&nbsp;<a href=\"https://oilprice.com/Latest-Energy-News/World-News/US-Court-to-Decide-Fate-Of-Venezuelas-Citgo-Refinery.html\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 0, 238); text-decoration-line: underline;\">US$30 billion</a>&nbsp;in revenue.&nbsp;</p><div class=\"video_location\" style=\'margin: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline;\'></div><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>In the summer of 2019, a U.S. federal appeals court&nbsp;<a href=\"https://oilprice.com/Latest-Energy-News/World-News/Citgo-Ownership-Hangs-in-Balance-After-PDVSA-Loses-Court-Battle.html\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 0, 238); text-decoration-line: underline;\">rejected PDVSA&acirc;&#128;&#153;s appeal</a>&nbsp;to knock down an earlier court order that allowed Crystallex to take over Citgo shares in compensation for US$1.4 billion for the expropriation of assets in Venezuela.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>Venezuela has long argued that Citgo should be immune from the billions in debt that Venezuela has accrued on the grounds that they are two separate entities, but U.S. courts disagree, ruling that PDVSA and Citgo&acirc;&#128;&#153;s U.S.-based parent company PDV Holding did not show adequate separation from the Venezuelan government, which has accrued billions in debt with multiple parties.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>The Republic of Venezuela had appealed at the U.S. Supreme Court the Third Circuit court&acirc;&#128;&#153;s decision from last year to allow Crystallex to claim its compensation, saying that the seizing of Citgo shares would be a conflict under federal sovereign immunity law.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>Still, Crystallex would&nbsp;<a href=\"https://oilprice.com/Latest-Energy-News/World-News/Crystallex-May-Need-US-Sanction-Waiver-To-Take-Over-Citgo-Shares.html\" style=\"margin: 0px; padding: 0px; border: 0px; font-weight: inherit; font-style: inherit; font-family: inherit; vertical-align: baseline; color: rgb(0, 0, 238); text-decoration-line: underline;\">need a U.S. sanctions waiver</a>&nbsp;to execute its claim, an adviser for Juan Guaid&Atilde;&sup3; told Reuters last year after the court allowed it to proceed with claiming its compensation award.</p><p style=\'margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; font-size: 16px; font-family: \"Open Sans\", sans-serif; vertical-align: baseline; line-height: 1.5; letter-spacing: normal;\'>By Tsvetana Paraskova for Oilprice.com</p></p>\n', NULL, NULL, 3, 18, '2020-05-19 15:06:31', '2020-05-19 15:06:31', 0),
(20, '1589901278.jpeg', 'Natural Gas Price Fundamental Weekly Forecast – Global Demand is on Track to Drop by a Record 5% in 2020', '<p><span style=\"color: rgb(51, 51, 51); font-family: Georgia; font-size: 16px; letter-spacing: normal;\">With that being the case, I do believe that we are trying to form a longer-term bottom, lease for the next few months. That does not mean that is going to be easy but ultimately this is a market that I believe will continue to chop around in general, showing signs of volatility from dusk till Dawn. Ultimately though, I do like the idea of buying short-term pullbacks, but I am not foolish enough to simply &acirc;&#128;&#156;buy-and-hold.&acirc;&#128;&#157; This is a market that has a lot of work to do, but as we start to look towards the idea of the economy reopening and of course the massive amounts of bankruptcies that could come into play when it comes to this sector, it could continue to bring in a little bit of positivity in a market that so desperately needs it.</span><br></p>\n', NULL, NULL, 4, 19, '2020-05-19 15:14:38', '2020-05-19 15:14:38', 0);
INSERT INTO `news` (`id`, `image`, `headline`, `body`, `author`, `department_id`, `sub_dep_id`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(21, '1590129961.jpeg', 'Global Oil and Other Liquid Fuels Production Update', '<ul style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 1.5em; padding: 0px; vertical-align: baseline; list-style: square; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px;\'><li style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\">Global&nbsp;<em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\">conventional</em>&nbsp;crude oil + condensate production (C+C) attained a value of 73 million barrels per day (Mbpd) in May 2005. Since then conventional C+C has been bumping along a jagged plateau with the all time high of 73.3 reached in July 2008, immediately prior to the Chinese Olympic Games and the financial crash. It seems possible that the peak in global conventional oil production is behind us (Figure 1).</li><li style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\">All of the growth in global liquid fuels has come from non-conventional sources, shale oil and tar sands, that currently are only produced in N America, and from &acirc;&#128;&#156;other liquids&acirc;&#128;&#157; such as biofuel and natural gas liquids. These liquids are inferior to conventional crude oil in a number of ways such as 1) requiring the use of more energy in their production, 2) &nbsp;being less energy dense and 3) not usable as liquid transport fuel.</li><p align=\"center\" style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><a href=\"http://www.euanmearns.com/wp-content/uploads/2014/10/global_C-C_jun14.png\" target=\"_blank\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: rgb(116, 51, 153);\"><img src=\"http://www.euanmearns.com/wp-content/uploads/2014/10/global_C-C_jun14.png\" alt=\"\" width=\"80%\" style=\"background: transparent; border-width: initial; border-color: initial; border-image: initial; margin: 0px; padding: 0px; vertical-align: baseline;\"></a></p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Figure 1</strong>&nbsp;Conventional crude oil + condensate production has been on an undulating plateau just over 73 million barrels per day (Mbpd) since May 2005, that is for almost 10 years and despite record high oil prices! As the remainder of this post will show all of the growth in global liquid fuel supply has come from unconventional and low grade sources of supply. The periodic dips in C+C production reflect OPEC production cuts designed to support the oil price. The fact that OPEC has not cut production when faced with current price weakness has resulted in the recent oil price decline. Note that chart is not zero scaled in order to amplify details. Click chart for large version.</em></p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><span id=\"more-5211\" style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"></span></p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'>In the good old days, oil was oil. But now oil comes in many different flavours making the analysis of production trends more challenging. As it turns out, this also casts some light on the concept and timing of Peak Oil. Oil is now categorised as conventional crude and condensate (C+C), light tight oil (LTO or shale oil), syncrude (tar sands), natural gas liquids (NGL), biofuels and refinery gains (see Glossary at end of article for definitions). The energy content and ERoEI (energy return on energy invested) of all these categories varies significantly and lumping them all together as &acirc;&#128;&#156;global liquid fuel&acirc;&#128;&#157; obscures the underlying C+C&nbsp;production trends. Stripping out the chaff from the wheat shows that the all time high conventional C+C production peak occurred just before the Chinese Olympic Games in July 2008 when 73.26 million barrels per day was produced.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'>Figure 2 shows&nbsp;the big picture where&nbsp;total global liquid fuel continues to rise. The plateau that many felt may have been reached in 2004-2008 has been swept away by subsequent increases liquid hydrocarbon production. &nbsp;The 73 million bpd plateau in Figure 1 is converted to 92 million bpd by the addition of syncrude, shale oil, natural gas liquids, processing gains and biofuels that now amount to some 19 million bpd, 21% of the global total.</p><p align=\"center\" style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><a href=\"http://www.euanmearns.com/wp-content/uploads/2014/11/world_total_liquids-jun14.png\" target=\"_blank\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: rgb(116, 51, 153);\"><img src=\"http://www.euanmearns.com/wp-content/uploads/2014/11/world_total_liquids-jun14.png\" alt=\"\" width=\"80%\" style=\"background: transparent; border-width: initial; border-color: initial; border-image: initial; margin: 0px; padding: 0px; vertical-align: baseline;\"></a></p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Figure 2</strong>&nbsp;World total liquid fuel production. Conventional crude oil and condensate in blue. Since 2005 all of the significant growth in liquid fuels production has come from unconventional and low grade liquid fuel sources (Figure 3).&nbsp;</em></p><p align=\"center\" style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><a href=\"http://www.euanmearns.com/wp-content/uploads/2014/11/global_liquids_exC-C.png\" target=\"_blank\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: rgb(116, 51, 153);\"><img src=\"http://www.euanmearns.com/wp-content/uploads/2014/11/global_liquids_exC-C.png\" alt=\"\" width=\"80%\" style=\"background: transparent; border-width: initial; border-color: initial; border-image: initial; margin: 0px; padding: 0px; vertical-align: baseline;\"></a></p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Figure 3</strong>&nbsp;Non-conventional C+C and other liquids production. 50% of the total is from natural gas liquids. These will continue to grow in lock step with natural gas production. Only a small portion of NGL is used in transport fuel, the remainder used for heating and petrochemicals feedstock (Figure 4). Individually, shale oil, syncrude and biofuels are not that significant, but collectively they add significantly to global liquid fuel the vast majority being produced in North America.</em></p><p align=\"center\" style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><a href=\"http://www.euanmearns.com/wp-content/uploads/2014/11/NGLtable.png\" target=\"_blank\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; color: rgb(116, 51, 153);\"><img src=\"http://www.euanmearns.com/wp-content/uploads/2014/11/NGLtable.png\" alt=\"\" width=\"80%\" style=\"background: transparent; border-width: initial; border-color: initial; border-image: initial; margin: 0px; padding: 0px; vertical-align: baseline;\"></a></p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Figure 4</strong>&nbsp;The uses of natural gas liquids according to the EIA. Some NGL is used in transportation, but much goes to other uses such as petrochemicals and heating.</em></p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'>The OECD economies and global economy remain stuck in the mud. Economic growth requires access to growing supplies of cheap energy, especially oil. Since May 2005, conventional supplies of crude oil stopped growing and energy prices have remained high, in part due to persistent high prices for fossil fuels and in part due to international energy policies that mandate use of new renewable energy sources that are expensive and disruptive.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'>The recent fall in the oil price, taken as good news by politicians and the public, may actually result in greater constraint on future supplies. The world may yet learn that having ample supplies of expensive oil is better than inadequate supplies of cheap oil.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'>The extent to which a peak in conventional oil production is responsible for economic malaise and widespread global unrest remains to be assessed. It is a complex picture of debt, geopolitics, economics, geology and technology. Only time will tell.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal; text-align: center;\'>_______________________________________________</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><b style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\">Glossary of terms</b></p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Conventional Crude Oil and Condensate</strong></em>&nbsp;is the black stuff that normally flows from sub-surface reservoirs to the surface under natural buoyancy pressure. This is the stuff that flows out of the North Sea, Middle East, Texas and Nigeria. It is not always black and there is a continuum towards very light and gassy oil that is called condensate that is a clear amber coloured liquid, like gasoline, when it comes out of the ground.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Light tight oil or shale oil</strong></em>&nbsp;is very similar to the light and gassy conventional crude oil apart from it occurs in rocks that lack the permeability to allow it to flow to surface under its own steam. To exploit these resources it is therefore necessary to artificially create permeability through fracking the rocks. This creates permeable fracture networks allowing the liquids to flow to well bore and then to surface.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Syncrude and tar sands</strong></em>&nbsp;are ultra heavy oil deposits found mainly in Alberta, Canada, but also in Venezuela. They are developed through either a mining process or through a process called steam assisted gravity drainage where steam is pumped underground to make the viscous liquids flow. The bitumen produced requires &acirc;&#128;&#156;upgrading&acirc;&#128;&#157; to synthetic crude oil by the addition of hydrogen.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Biofuels</strong></em>&nbsp;come in three&nbsp;main varieties. Sugar cane&nbsp;ethanol from Brazil, corn ethanol mainly from N America and biodiesel produced from crops like rape in Europe. Temperate latitude biofuels tend to have ERoEI around 1 where &nbsp;the main energy inputs are natural gas (ammonia fertiliser), diesel and electricity. Temperate biofuels therefore do not actually represent energy production but rather energy conversion of methane+diesel+electricity+land/soil+water to make a liquid fuel.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Natural gas liquids</strong></em>&nbsp;are C1 to C5 gaseous hydrocarbons produced with natural gas (C1 &acirc;&#128;&#147; methane). These condense in sub-sea pipelines or are recovered in natural gas processing plants. In general, NGL has been increasing in lock step with global gas production. Their inclusion with liquid fuel production is questionable. Their use is detailed in Figure 4.</p><p style=\'background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; border: 0px; margin-right: 0px; margin-bottom: 24px; margin-left: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51); font-family: Georgia, \"Bitstream Charter\", serif; font-size: 16px; letter-spacing: normal;\'><em style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\"><strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline; font-weight: bold;\">Refinery gains</strong></em>&nbsp;are a correction applied to account for volumetric expansion of liquids during the refining process. Refinery gains have been increasing since the global crude supply has been marching towards increasingly heavy grades of crude oil. If production was measured by mass (i.e. tonnes) then refinery gains would be reduced.</p></ul>\n', NULL, NULL, 3, 18, '2020-05-22 06:46:01', '2020-05-22 06:46:01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(100) NOT NULL,
  `banner_image` varchar(100) DEFAULT NULL,
  `heading` varchar(100) DEFAULT NULL,
  `details` longtext,
  `jobtitle` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `gallery` varchar(100) DEFAULT NULL,
  `caption` varchar(100) DEFAULT NULL,
  `tendorno` text,
  `advertised_date` varchar(100) DEFAULT NULL,
  `closing_date` varchar(100) DEFAULT NULL,
  `section_type` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `banner_image`, `heading`, `details`, `jobtitle`, `level`, `duration`, `title`, `gallery`, `caption`, `tendorno`, `advertised_date`, `closing_date`, `section_type`, `created_at`, `updated_at`) VALUES
(1, NULL, 'About Us', 'asfsfasf', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(2, NULL, 'Our Projects', 'asfsfasf', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL),
(3, NULL, 'Awards & Achievements', 'asfsfasf', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 'Energy Secretary', NULL, NULL, NULL, NULL, NULL, 9, '2020-06-07 04:00:18', '2020-06-07 04:00:18'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 'Energy Secretary', '1591521039.jpeg', 'WhatsApp Image 2018-11-28 at 1.05.17 PM', NULL, NULL, NULL, 5, '2020-06-07 04:10:39', '2020-06-07 05:32:19'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 'Energy Secretary', '1591522022.jpeg', 'WhatsApp Image 2018-11-28 at 1.05.17 PM (2)', NULL, NULL, NULL, 5, '2020-06-07 04:27:02', '2020-06-07 04:27:02'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 'Village Electrification', NULL, NULL, NULL, NULL, NULL, 9, '2020-06-07 04:27:27', '2020-06-07 04:27:27'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, 'Village Electrification', '1591522099.jpeg', NULL, NULL, NULL, NULL, 5, '2020-06-07 04:28:19', '2020-06-07 04:28:19'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, 'STDC', NULL, NULL, NULL, NULL, NULL, 9, '2020-06-07 04:28:49', '2020-06-07 04:28:49'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, 'STDC', '1591526047.jpeg', NULL, NULL, NULL, NULL, 5, '2020-06-07 04:29:26', '2020-06-07 05:34:07'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, 'SLMC', NULL, NULL, NULL, NULL, NULL, 9, '2020-06-07 04:29:46', '2020-06-07 04:29:46'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, 'SLMC', '1591522225.jpeg', NULL, NULL, NULL, NULL, 5, '2020-06-07 04:30:25', '2020-06-07 04:30:25'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, 'Inspectorate of Coal Mines', NULL, NULL, NULL, NULL, NULL, 9, '2020-06-07 04:30:54', '2020-06-07 04:30:54'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, 'Inspectorate of Coal Mines', '1591522308.jpeg', NULL, NULL, NULL, NULL, 5, '2020-06-07 04:31:48', '2020-06-07 04:31:48');

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
-- Table structure for table `sources`
--

CREATE TABLE `sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sources`
--

INSERT INTO `sources` (`id`, `name`, `sub_dep_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Kennan Schultz', 1, 18, '2020-03-26 03:15:10', '2020-03-26 03:15:10'),
(2, 'Oleg Dalton', 1, 18, '2020-03-26 03:15:54', '2020-03-26 03:15:54'),
(3, 'Oleg Dalton', 1, 18, '2020-03-26 03:16:09', '2020-03-26 03:16:09'),
(4, 'Oleg Dalton', 1, 18, '2020-03-26 03:16:41', '2020-03-26 03:16:41'),
(5, 'Odysseus Schmidt', 4, 19, '2020-03-29 23:59:36', '2020-03-29 23:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `source_logs`
--

CREATE TABLE `source_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `source_logs`
--

INSERT INTO `source_logs` (`id`, `area`, `price`, `date`, `source`, `source_id`, `created_at`, `updated_at`) VALUES
(1, 'asff', '123', '2019-03-01', 'soo', NULL, '2020-03-26 03:01:48', '2020-03-26 03:01:48'),
(2, 'asff', '123', '2019-03-01', 'soo', NULL, '2020-03-26 03:15:10', '2020-03-26 03:15:10'),
(3, 'asff2', '300', '2018-03-01', 'so2', NULL, '2020-03-26 03:15:10', '2020-03-26 03:15:10'),
(4, 'asff', '123', '2019-03-01', 'soo', 4, '2020-03-26 03:16:41', '2020-03-26 03:16:41'),
(5, 'asff2', '300', '2018-03-01', 'so2', 4, '2020-03-26 03:16:41', '2020-03-26 03:16:41'),
(6, 'youarea', '1234', '2018-03-01', 'yoursource', 5, '2020-03-29 23:59:36', '2020-03-29 23:59:36'),
(7, 'youarea2', '1234', '2018-03-02', 'yoursource2', 5, '2020-03-29 23:59:36', '2020-03-29 23:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `sub_departments`
--

CREATE TABLE `sub_departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_departments`
--

INSERT INTO `sub_departments` (`id`, `department_id`, `name`, `created_at`, `updated_at`, `website`, `address`, `telephone`, `fax`, `status`) VALUES
(1, 1, 'Electricity', '2020-03-15 19:00:00', '2020-05-19 06:36:25', 'https://www.google.com/', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '+921111111111', 123456789, 1),
(3, 1, 'Oil and other liquids', '2020-03-16 00:05:15', '2020-05-19 06:36:08', 'https://www.qonypokynyd.org.uk', 'Doloremque autem rer', '+1 (666) 743-6882', 212324142, 1),
(4, 1, 'Natural Gas', '2020-03-18 00:37:54', '2020-05-19 06:35:51', 'https://www.hirova.in', 'Velit laborum quis f', '+1 (719) 154-5448', 657465657, 1),
(5, 1, 'Coal', '2020-03-18 00:50:27', '2020-05-19 06:35:38', 'https://www.temowazusesux.com.au', 'Facilis dolores quo', '+1 (752) 886-9501', 231231231, 1),
(6, 1, 'Nuclear and Uranium', '2020-05-19 06:38:15', '2020-05-19 06:38:41', 'https://www.jujynuheheled.cm', 'Aut nemo provident', '+1 (147) 109-9645', 1259596263, 1),
(7, 1, 'Dempo', '2020-06-04 05:55:54', '2020-06-04 05:58:02', 'www.ke.com', 'Karachi Pakistan', '+1 (147) 109-9645', 1259596263, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `isAdmin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$x3q.9NNYqtBmi5XDHr0.Telw1m0UAIF6eUxWWPkPNvF1v5MtFAAF2', NULL, '2020-03-14 21:11:05', '2020-03-14 21:11:05'),
(18, 'John Morris', 'fymolu@mailinator.net', NULL, 0, '$2y$10$x3q.9NNYqtBmi5XDHr0.Telw1m0UAIF6eUxWWPkPNvF1v5MtFAAF2', NULL, '2020-03-18 23:40:24', '2020-05-22 06:47:20'),
(19, 'Deacon Rush', 'sikip@mailinator.com', NULL, 0, '$2y$10$x3q.9NNYqtBmi5XDHr0.Telw1m0UAIF6eUxWWPkPNvF1v5MtFAAF2', NULL, '2020-03-19 23:27:14', '2020-03-19 23:27:14'),
(22, 'Abraham Reilly', 'ryqoridef@mailinator.com', NULL, 0, '$2y$10$svZFXy2p1FU2bP36oPlQWu9uESJhtntKSRMjy.5EmLlSikIyTHFJC', NULL, '2020-03-29 18:53:04', '2020-03-29 18:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_categories`
--

CREATE TABLE `user_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`id`, `user_id`, `sub_dep_id`, `created_at`, `updated_at`) VALUES
(1, 18, 3, '2020-03-19 23:11:16', '2020-03-19 23:11:16'),
(2, 19, 4, '2020-03-29 23:14:52', '2020-03-29 23:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_request`
--

CREATE TABLE `user_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_request`
--

INSERT INTO `user_request` (`id`, `user_id`, `sub_dep_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 18, 3, 1, '2020-03-18 23:40:24', '2020-03-19 23:11:16'),
(2, 19, 4, 1, '2020-03-19 23:27:14', '2020-03-29 23:14:52'),
(5, 22, 5, 0, '2020-03-29 18:53:04', '2020-03-29 18:53:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_setting`
--
ALTER TABLE `basic_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_department_id_foreign` (`department_id`),
  ADD KEY `events_sub_dep_id_foreign` (`sub_dep_id`),
  ADD KEY `events_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_department_id_foreign` (`department_id`),
  ADD KEY `news_sub_dep_id_foreign` (`sub_dep_id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `sources`
--
ALTER TABLE `sources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sources_sub_dep_id_foreign` (`sub_dep_id`),
  ADD KEY `sources_user_id_foreign` (`user_id`);

--
-- Indexes for table `source_logs`
--
ALTER TABLE `source_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `source_logs_source_id_foreign` (`source_id`);

--
-- Indexes for table `sub_departments`
--
ALTER TABLE `sub_departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_departments_department_id_foreign` (`department_id`);

--
-- Indexes for table `user_categories`
--
ALTER TABLE `user_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_categories_user_id_foreign` (`user_id`),
  ADD KEY `user_categories_sub_dep_id_foreign` (`sub_dep_id`);

--
-- Indexes for table `user_request`
--
ALTER TABLE `user_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_request_user_id_foreign` (`user_id`),
  ADD KEY `user_request_sub_dep_id_foreign` (`sub_dep_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_setting`
--
ALTER TABLE `basic_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_departments`
--
ALTER TABLE `sub_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
