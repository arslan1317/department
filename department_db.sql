-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 02:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `slider_lower_heading` text DEFAULT NULL,
  `slider_lower_paragraph` varchar(100) DEFAULT NULL,
  `info_image` varchar(100) DEFAULT NULL,
  `info_heading` varchar(100) DEFAULT NULL,
  `info_paragraph` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `footer_text` varchar(200) DEFAULT NULL,
  `copyright` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basic_setting`
--

INSERT INTO `basic_setting` (`id`, `logo`, `footer_logo`, `favicon`, `link`, `icon`, `section_type`, `slider_lower_heading`, `slider_lower_paragraph`, `info_image`, `info_heading`, `info_paragraph`, `created_at`, `updated_at`, `phone`, `email`, `address`, `footer_text`, `copyright`) VALUES
(1, NULL, NULL, NULL, '##', '<i class=\"fa fa-facebook\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-30 01:14:25', '2020-03-30 01:36:53', NULL, NULL, NULL, NULL, ''),
(2, NULL, NULL, NULL, '#', '<i class=\"fa fa-twitter\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-30 01:32:33', '2020-03-30 01:32:33', NULL, NULL, NULL, NULL, ''),
(3, NULL, NULL, NULL, '#', '<i class=\"fa fa-google-plus\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-30 01:33:27', '2020-03-30 01:33:27', NULL, NULL, NULL, NULL, ''),
(5, NULL, NULL, NULL, '#', '<i class=\"fa fa-linkedin\"></i>', 2, NULL, NULL, NULL, NULL, NULL, '2020-03-30 01:47:13', '2020-03-30 01:47:13', NULL, NULL, NULL, NULL, ''),
(6, NULL, NULL, NULL, '', '', 4, 'Making the World Since 1986', 'We provides best industry and company services', NULL, NULL, NULL, '2020-03-30 01:47:13', '2020-05-17 17:49:47', NULL, NULL, NULL, NULL, ''),
(7, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557363.png', 'Petrolium Refinery', 'We are providing different services in this sector to wide area of world with cleanest line of services. Customised cleaning line system.', '2020-03-30 03:36:03', '2020-03-30 03:36:03', NULL, NULL, NULL, NULL, ''),
(8, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557906.png', 'Power & Energy', 'Tectxon is committed to developing solutions that reduced operating costs and alignment with electronic products and instrument.', '2020-03-30 03:45:06', '2020-03-30 03:45:06', NULL, NULL, NULL, NULL, ''),
(9, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, '1585557955.png', 'Mechanical Works', 'We provide embedded technology with innovation and digital capabilities to transform your functions in our latest products.', '2020-03-30 03:45:55', '2020-03-30 03:45:55', NULL, NULL, NULL, NULL, ''),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-17 18:14:12', '2020-05-17 18:14:12', '03471670249', 'arslan@gmail.com', 'dskfsjaf', 'abc124', 'abc1234');

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
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `start_date`, `end_date`, `details`, `department_id`, `sub_dep_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Abel Cannon', '2020-01-01 00:00:00', '2020-02-01 00:00:00', '<p><br></p><p>Excepturi sit, ipsum.sdfsf<br></p><p><br></p>', NULL, 1, 18, 1, '2020-03-23 16:42:11', '2020-03-25 01:37:54'),
(2, 'Brenden Schneider', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '<p>Testing updating</p>', 1, NULL, 1, 1, '2020-03-25 01:52:43', '2020-03-25 02:06:53'),
(3, 'Brenden Schneider', '2020-08-01 00:00:00', '2020-08-31 00:00:00', '<p>Testing updating</p>', 1, NULL, 1, 1, '2020-03-25 01:52:43', '2020-03-25 02:06:53');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_dep_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `headline`, `body`, `department_id`, `sub_dep_id`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(1, '1584771616.jpeg', 'Fugiat quia omnis es', '<p>asfdsfsafdsfdd</p>', NULL, 1, 18, '2020-03-20 17:19:07', '2020-03-21 18:55:24', 1),
(2, '1584939601.jpeg', 'Aut explicabo Volup', '<p>sfsafasfas</p>', 1, NULL, 1, '2020-03-22 14:00:01', '2020-03-22 14:00:01', 1),
(3, '1584939601.jpeg', 'Aut explicabo Volup', '<p>sfsafasfas</p>', 1, NULL, 1, '2020-03-22 19:00:01', '2020-03-22 19:00:01', 1),
(10, '1589672067.jpeg', 'Oil market is re-balancing, but path to ‘next normal’ not a straight line, says energy CEO', '<div class=\"group\" style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 1.66; margin-bottom: 30px; margin-left: calc((((100% - 180px) / 7) * 1 + 30px) * 1); -webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: auto; max-width: 100%;\"><p style=\"position: relative; padding-right: 20px;\">Oil markets are re-balancing after a collapse in demand following the&nbsp;<a href=\"https://www.cnbc.com/coronavirus/\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">coronavirus</a>&nbsp;outbreak&nbsp;but the pathway to “the next normal” is still very uncertain, the&nbsp;CEO of Abu Dhabi’s National Oil Company (ADNOC) said Thursday.</p><p style=\"position: relative; padding-right: 20px;\">“There are good signs that the market has tightened in recent weeks and the OPEC++ agreement, voluntary cuts outside of OPEC and the production&nbsp;shut-ins&nbsp;are working together to start to rebalance the market,” UAE Minister of State and ADNOC Group CEO Dr Sultan Al Jaber said,&nbsp;alluding to a group of countries that includes OPEC members and other systemically important producers such as Russia.</p><div class=\"BoxInline-container  \" style=\"max-width: 300px; margin: 0px;\"><div id=\"BoxInline-ArticleBody-5\" class=\"BoxInline-container\" data-module=\"mps-slot\" style=\"max-width: 300px; margin: 0px;\"></div></div><p style=\"position: relative; padding-right: 20px;\">“As economies begin to open up, demand will follow, but the path to the next normal will not be a straight line,” he added. Al Jaber was speaking to Helima Croft, Managing Director and Global Head of Commodity Strategy at RBC Capital Markets, in a recorded interview via Linkedin on Thursday.</p><p style=\"position: relative; padding-right: 20px;\">The coronavirus pandemic has dealt a severe blow to economic activity around the globe and sent oil prices tumbling by over 50% so far this year. While OPEC and its oil-producing allies finalized a&nbsp;<a href=\"https://www.cnbc.com/2020/04/12/opec-and-allies-finalize-record-oil-production-cut-after-days-of-discussion.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">historic agreement</a>&nbsp;last month to cut production by 9.7 million barrels per day beginning May 1, some experts reckon that the reduction in supply won’t be enough to offset the diminution in demand.</p><p style=\"position: relative; padding-right: 20px;\">ADNOC is a critically important OPEC member producer. The company achieved sustainable production of 4 million barrels of oil per day in April but scaled back output in line with the recent OPEC+ agreement.</p><p style=\"position: relative; padding-right: 20px;\">The OPEC group next meets&nbsp;on June 10&nbsp;to discuss the state of the market and the progress of the output agreement.</p></div><h2 class=\"ArticleBody-subtitle\" style=\"font-weight: 700; color: rgb(23, 23, 23); font-size: 24px; line-height: 23px; margin-bottom: 20px; margin-left: 105.703px; -webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: auto; max-width: 100%; padding: 0px 0px 0px 3px; font-family: &quot;Proxima Nova&quot;, Helvetica, Arial, sans-serif;\">Green shoots are emerging in the oil market</h2><div class=\"group\" style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 1.66; margin-bottom: 30px; margin-left: calc((((100% - 180px) / 7) * 1 + 30px) * 1); -webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: auto; max-width: 100%;\"><p style=\"position: relative; padding-right: 20px;\">Oil prices have been lifted this week by more signs that oil output is falling among OPEC and other major producers, and a gradual recovery in demand is underway.&nbsp;</p><div class=\"MidResponsive-midResponsiveContainer\"><div id=\"MidResponsive-1\" class=\"\" data-module=\"mps-slot\" style=\"position: sticky; margin: 0px auto;\"></div></div><p style=\"position: relative; padding-right: 20px;\">“We are seeing massive cuts in output from countries outside the OPEC+ agreement and faster than expected,” the International Energy Agency said in a report on Thursday. The report also said “the gradual relaxation of restrictions on movement is helping demand.”</p><p style=\"position: relative; padding-right: 20px;\">But the outlook remains cautious, with experts at the IEA questioning “whether governments can ease the lockdown measures without sparking a resurgence of Covid-19 outbreaks,” and “whether a high level of compliance with the OPEC+ agreement will be achieved and maintained by all the major parties.”</p></div><h2 class=\"ArticleBody-subtitle\" style=\"font-weight: 700; color: rgb(23, 23, 23); font-size: 24px; line-height: 23px; margin-bottom: 20px; margin-left: 105.703px; -webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: auto; max-width: 100%; padding: 0px 0px 0px 3px; font-family: &quot;Proxima Nova&quot;, Helvetica, Arial, sans-serif;\">Economic flame out forces ADNOC to focus on costs</h2><div class=\"group\" style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 1.66; margin-bottom: 30px; margin-left: calc((((100% - 180px) / 7) * 1 + 30px) * 1); -webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: auto; max-width: 100%;\"><p style=\"position: relative; padding-right: 20px;\">The economic impact of the pandemic has reverberated across the word. The oil industry in particular has been hurt badly as transportation has ground to a halt due to millions of employees staying at home, denting demand for energy in the process.</p><p style=\"position: relative; padding-right: 20px;\">“We are in uncharted territory,” Al Jaber said, referring to the global economic&nbsp;collapse caused by the coronavirus pandemic. “We have never before experienced a time when the level of economic activity has dropped off this far and this fast.”</p><p style=\"position: relative; padding-right: 20px;\">“Right now, no one is in a position to predict exactly what a recovery could potentially look like,” Al Jaber said. “Most economists agree that a recovery would be more U shaped than V shaped,” he added.</p><p style=\"position: relative; padding-right: 20px;\">Al Jaber also said ADNOC is in a stronger and better position to manage current market dynamics than before, having undergone significant transformation in recent years to reduce costs.</p><p style=\"position: relative; padding-right: 20px;\">“We have been laser focused on being one of the lowest cost producers in the world, and this has given us the flexibility and resilience that we need at times like these,” Al Jaber said.</p><p style=\"position: relative; padding-right: 20px;\">“In this environment, we are continuing to work even harder to preserve our resources, drive more efficiency, optimize, and maximize our profitability,” he added.&nbsp;</p></div>', NULL, 3, 18, '2020-05-16 13:34:27', '2020-05-16 19:55:58', 1),
(11, '1589672145.jpeg', 'A resurgence of coronavirus cases will have ‘major consequences’ for the oil market, IEA warns', '<div class=\"group\" style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 1.66; margin-bottom: 30px; margin-left: calc((((100% - 180px) / 7) * 1 + 30px) * 1); -webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: auto; max-width: 100%;\"><p style=\"position: relative; padding-right: 20px;\">The International Energy Agency (IEA) said on Thursday that market forces had “demonstrated their power” on the supply side of the oil market in recent weeks, but concerns remain over the potential for a second wave of Covid-19 infections.</p><p style=\"position: relative; padding-right: 20px;\">International benchmark&nbsp;<a href=\"https://www.cnbc.com/quotes/?symbol=@LCO.1\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">Brent</a>&nbsp;crude traded at $29.72 a barrel on Thursday morning, up around 1.8%, while&nbsp;<a href=\"https://www.cnbc.com/quotes/?symbol=@CL.1\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">U.S. West Texas Intermediate</a>&nbsp;stood at $25.84, more than 2% higher.</p><div class=\"BoxInline-container  \" style=\"max-width: 300px; margin: 0px;\"><div id=\"BoxInline-ArticleBody-5\" class=\"BoxInline-container\" data-module=\"mps-slot\" style=\"max-width: 300px; margin: 0px;\"></div></div><p style=\"position: relative; padding-right: 20px;\">It comes after what the IEA Executive Director Fatih Birol described as “Black April,” when the price of U.S. crude futures tumbled to around negative $40 a barrel.</p><p style=\"position: relative; padding-right: 20px;\">Since then, the outlook has somewhat improved in energy markets and oil prices have rebounded from their April lows.</p><p style=\"position: relative; padding-right: 20px;\">“Oil production is reacting in a big way to market forces and economic activity is beginning a gradual-but-fragile recovery,” the IEA said. “However, major uncertainties remain.”</p><p style=\"position: relative; padding-right: 20px;\">“The biggest is whether governments can ease the lockdown measures without sparking a resurgence of Covid-19 outbreaks,” the Paris-based energy agency added.</p><p style=\"position: relative; padding-right: 20px;\">Another risk, the group said, was whether oil producers&nbsp;<a href=\"https://www.cnbc.com/id/10000937\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">OPEC</a>&nbsp;and its non-OPEC allies, sometimes referred to as OPEC+, would achieve a high level of compliance with its agreed output cuts.</p><div class=\"MidResponsive-midResponsiveContainer\"><div id=\"MidResponsive-8\" class=\"\" data-module=\"mps-slot\" style=\"position: sticky; margin: 0px auto;\"></div></div><p style=\"position: relative; padding-right: 20px;\">“These are big questions — and the answers we get in the coming weeks will have major consequences for the oil market,” the IEA said.</p></div><h2 class=\"ArticleBody-subtitle\" style=\"font-weight: 700; color: rgb(23, 23, 23); font-size: 24px; line-height: 23px; margin-bottom: 20px; margin-left: 105.703px; -webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: auto; max-width: 100%; padding: 0px 0px 0px 3px; font-family: &quot;Proxima Nova&quot;, Helvetica, Arial, sans-serif;\">Demand forecast</h2><div class=\"group\" style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; line-height: 1.66; margin-bottom: 30px; margin-left: calc((((100% - 180px) / 7) * 1 + 30px) * 1); -webkit-box-flex: 0; flex-grow: 0; flex-shrink: 0; min-width: auto; max-width: 100%;\"><p style=\"position: relative; padding-right: 20px;\">In its closely-watched monthly report, the IEA’s outlook for oil demand showed a fall of 8.6 million barrels per day (b/d) to 91.2 million b/d this year. That’s&nbsp;0.7 million b/d more than the group anticipated in its previous report.</p><p style=\"position: relative; padding-right: 20px;\">This projected fall of oil consumption would be the biggest demand drop in history, the IEA said.</p><p style=\"position: relative; padding-right: 20px;\">On the supply side, it expected a “spectacular” fall of 12 million b/d this month, falling to a nine-year low of 88 million b/d.</p><p style=\"position: relative; padding-right: 20px;\">It comes after OPEC+ agreed to curb production by a record 9.7 million b/d in May and June. OPEC kingpin Saudi Arabia has since said it plans to cut output by an additional 1 million b/d to 7.5 million b/d in June.</p></div>', NULL, 3, 18, '2020-05-16 13:35:45', '2020-05-16 13:35:45', 0),
(12, '1589672205.jpeg', '‘Clean energy’ job losses in the U.S. continue to climb as the coronavirus hits the sector hard', '<p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The U.S. “clean energy” sector was hit by 447,208 new unemployment filings last month, according to new analysis of Department of Labor data.&nbsp;</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Published on Wednesday, the analysis — released by Environmental Entrepreneurs, the American Council on Renewable Energy, E4TheFuture, and BW Research Partnership — paints a stark picture for the industry and reflects the significant impact that the coronavirus pandemic is having on the overall U.S. economy.</p><div class=\"BoxInline-container  \" style=\"max-width: 300px; margin: 0px;\"><div id=\"BoxInline-ArticleBody-6\" class=\"BoxInline-container\" data-module=\"mps-slot\" style=\"max-width: 300px; margin: 0px;\"></div></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Clean energy job losses in April were far greater than March, when 147,139 claims were made. Total claims for March and April amount to 594,347, or 17.8% of the sector’s workforce.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">For the purposes of the analysis, the term “clean energy” encompasses a range of areas: energy efficiency; renewables; grid and storage; and “clean” vehicles and fuels.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Overall, April saw a little over 310,000 people working in energy efficiency file for unemployment, while there were 71,835 job losses in renewables. California was the worst hit state, losing 77,860 clean energy jobs last month.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Looking ahead, the report forecasts more job losses unless the U.S. administration and Congress “take quick and substantive action to support the clean energy industry and its workers.”</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">If no action is taken, it’s projected that 850,000 people in the sector will have filed for unemployment by June 30.</p><div class=\"MidResponsive-midResponsiveContainer\"><div id=\"MidResponsive-8\" class=\"\" data-module=\"mps-slot\" style=\"position: sticky; margin: 0px auto;\"></div></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">“The economic data from April shows that the job losses from the COVID-19 pandemic are worse than expected,” Phil Jordan, vice president and principal at BW Research Partnership, said in a statement.<br><br>“Unemployment claims increased dramatically across many key segments of the clean energy sector, such as construction and manufacturing,” Jordan added. “And the data does not suggest that we have yet to hit the bottom.”</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Around the world, firms working in sectors such as renewable energy are having to adapt to the new challenges posed by Covid-19.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Last week,&nbsp;<a href=\"https://www.cnbc.com/quotes/?symbol=NDX1-DE\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">Nordex</a>&nbsp;became the latest wind turbine manufacturer to&nbsp;<a href=\"https://www.cnbc.com/2020/05/06/coronavirus-continues-to-impact-wind-energy-nordex-withdraws-guidance.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">withdraw guidance for the 2020 financial year.</a></p><p><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">In April, Danish business&nbsp;<a href=\"https://www.cnbc.com/quotes/?symbol=VWS-DK\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">Vestas</a>&nbsp;suspended guidance for 2020, with the Aarhus-headquartered firm noting that the global spread of Covid-19 and national measures taken to contain it had&nbsp;<a href=\"https://www.cnbc.com/2020/04/07/amid-disruptions-from-coronavirus-vestas-suspends-guidance-for-2020.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">caused disruptions to installations, manufacturing and its supply chain.</a></p>', NULL, 3, 18, '2020-05-16 13:36:45', '2020-05-16 13:36:45', 0),
(13, '1589672298.jpeg', 'Oil jumps 6%, posts third week of gains amid signs of demand pickup', '<p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Oil prices rose on Friday, posting their third week of gains, as data showed demand for crude picking up in China after the easing of curbs to stem the coronavirus outbreak, boosting hopes that the global supply overhang may start to fade.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"><a href=\"https://www.cnbc.com/quotes/?symbol=@LCO.1\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">Brent crude</a>&nbsp;was up $1.14, or 3.66%, to trade at $32.27 per barrel, while&nbsp;<a href=\"https://www.cnbc.com/quotes/?symbol=@CL.1\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">West Texas Intermediate settled</a>&nbsp;up 5.9% to trade at $29.52 per barrel, having jumped 9% in the previous session.</p><div class=\"BoxInline-container  \" style=\"max-width: 300px; margin: 0px;\"><div id=\"BoxInline-ArticleBody-5\" class=\"BoxInline-container\" data-module=\"mps-slot\" style=\"max-width: 300px; margin: 0px;\"></div></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Amid supply cuts by the Organization of the Petroleum Exporting Countries (OPEC) and other major producers, bright spots are also emerging on the demand side. Data released on Friday showed China’s daily crude oil use rebounded in April as refineries ramped up operations.&nbsp;</p><div class=\"teads-adCall\" style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px;\"></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Still the market mood remains far from euphoric, with the coronavirus pandemic far from over and new clusters emerging in some countries where lockdowns have been eased.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">“The fundamentals in the market are clearly improving,” ING Research analysts said in a note. “But we still believe that in the near term, the upside is limited given that we are still in a surplus environment ... There is plenty of inventory for the market to digest.”</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">There is optimism that stockpiles may be on the wane.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The International Energy Agency said it expects crude inventories to fall by about 5.5 million barrels per day (bpd) in the second half of this year.</p><div class=\"MidResponsive-midResponsiveContainer\"><div id=\"MidResponsive-8\" class=\"\" data-module=\"mps-slot\" style=\"position: sticky; margin: 0px auto;\"></div></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Meanwhile U.S. crude inventories fell for the first time in 15 weeks, the Energy Information Administration said on Wednesday.&nbsp;</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Output cuts will boost the trend towards lower inventories, but U.S. crude is unlikely to see strong gains.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">“WTI crude will struggle to break above the $30 level until both the economic outlook improves for the U.S. and some of the downside risks ease,” said Edward Moya, senior market analyst at OANDA.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">On the production side, OPEC and associated producers&nbsp;— collectively known as OPEC+&nbsp;— had already agreed to cut output by a record of nearly 10 million bpd before Saudi Arabia this week extended its planned reductions for June, pledging to lower supply by nearly 5 million bpd.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Saudi Aramco, the world’s largest oil exporter, reduced the volume of crude it will supply to at least three buyers in Asia by as much as 30% for June, three sources with knowledge of the matter told Reuters on Thursday.</p><p><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">OPEC+ now wants to extend overall production cuts beyond May and June when the group next meets, sources told Reuters earlier this week.</p>', NULL, 3, 18, '2020-05-16 13:38:18', '2020-05-16 13:38:18', 0),
(14, '1589672402.jpeg', 'An archipelago in the Atlantic wants to add tidal power to its energy mix by using kite-like tech', '<p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Situated in the wilds of the northeast Atlantic between Iceland and Scotland, the Faroe Islands are peaceful, remote and beautiful.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The archipelago is also the site of a trial that, using tidal “kite” technology, could radically alter its energy mix and, in the long run, make it greener.</p><div class=\"BoxInline-container  \" style=\"max-width: 300px; margin: 0px;\"><div id=\"BoxInline-ArticleBody-6\" class=\"BoxInline-container\" data-module=\"mps-slot\" style=\"max-width: 300px; margin: 0px;\"></div></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">At the beginning of April, Swedish firm Minesto announced that, together with the Faroese utility SEV, it had been granted the necessary permits and consents to install two grid-connected tidal kite systems in the Vestmannasund strait, which is located in the northwest of the Faroe Islands. SEV is the Faroe Islands’ main energy provider.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Minesto’s technology takes the concept of flying a kite and transfers it to the ocean to produce electricity. It does this by harnessing underwater current, which creates a hydrodynamic lift force on the system’s wings, pushing it upward.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">An onboard control system and rudder steer the “kite” in a figure-of-eight trajectory. As it moves, water flows through the turbine, producing electricity.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">In a statement issued to CNBC, Martin Edlund, Minesto’s CEO, said that the company’s technology was scalable and catered to various energy needs, “from smaller-scale electrification of remote users to utility-scale power production.”<br><br>“There is an urgent need around the world to find ways of generating predictable clean energy at a cost-competitive level,” he added. &nbsp;</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">In February, Minesto and SEV signed a power purchase agreement (PPA) that covers the installation of the two 100 kilowatt systems in the Vestmannasund strait. The PPA amounts to a total installed capacity of 2.2 megawatts and covers the installation of a utility-scale system further down the line.&nbsp;It is hoped that the tidal-kite technology will be launched in the Faroe Islands this summer.</p><div class=\"MidResponsive-midResponsiveContainer\"><div id=\"MidResponsive-8\" class=\"\" data-module=\"mps-slot\" style=\"position: sticky; margin: 0px auto;\"></div></div><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The tidal power trial should be placed within the context of SEV’s overarching goal to be a “100% green energy producer” by the year 2030.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">In addition to its ocean-based scheme, the utility is also looking to develop and expand a number of renewable energy technologies, including solar and wind power.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">At the present time, some work needs to be done to move the sources of Faroese electricity production away from fossil fuels.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">According to SEV’s annual report, thermal power had a 60% share of total electricity production in 2019, with hydropower and wind power taking a 27% and 13% share respectively. In fact, 2019 saw electricity production from sustainable sources fall to 156.1 gigawatt hours (GWh) compared to 171.9 GWh in 2018.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">On the subject of tidal energy, Hákun Djurhuus, the CEO of SEV, explained to CNBC via email that it had “been on our agenda for years.”</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">“Due to its predictable characteristics it fits very well into the Faroese energy mix, which will be 100% sustainable in 2030,” Djurhuus added.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">“If tidal energy becomes a technically and economically viable option, our preliminary estimate is that it can account for approximately 30-40% of the total generation in 2030.”</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">The Faroe Islands are not the only archipelago where tidal power is being developed.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Orkney, which is located in waters off the north coast of Scotland, is home to the European Marine Energy Centre. EMEC, as it’s known, acts as a hub for wave and tidal energy developers to test and assess their technologies in the open sea.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">If all goes to plan the center — which has received funding from a range of institutions, including the Scottish and U.K. governments and European Union — will soon be the site of a significant milestone for one tidal energy company.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">At the end of March, it was announced that Orbital Marine Power had signed up for a second berth at the center, a development that will enable it to&nbsp;<a href=\"https://www.cnbc.com/2020/04/15/in-waters-north-of-scotland-a-firm-wants-to-set-up-a-tidal-power-farm.html\" style=\"color: rgb(32, 119, 182); text-decoration-line: underline; cursor: pointer;\">eventually launch a 4 megawatt (MW) floating tidal turbine farm.</a></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Overall, energy derived from the ocean has a long way to go before it becomes mainstream.</p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">Last year, just 1.52 MW of tidal stream capacity was added in Europe, according to Ocean Energy Europe. For wave energy, additions were 0.6 MW.</p><p><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span><span style=\"font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\"></span></p><p style=\"position: relative; padding-right: 20px; font-family: Lyon, Helvetica, Arial, sans-serif; font-size: 18px; letter-spacing: normal;\">To put these numbers into some sort of perspective, figures from WindEurope show that European countries installed just over 3.6 GW of offshore wind capacity in 2019.</p>', NULL, 3, 18, '2020-05-16 13:40:02', '2020-05-16 13:40:02', 0),
(15, '1589678038.jpeg', 'Karachi witnesses worst Eid sale season in due to COVID-19', '<p>The year 2020 has seen the worst Eid sale season in the history of Pakistan due to the COVID-19 pandemic. All Karachi Tajir Ittehad Chairman Atiq Mir thinks trading in the city this Eidul Fitr will barely cross the mark of Rs10 billion<br><br>Mir told The News that due to the economic slowdown last year, Karachi saw a sale of hardly Rs35 billion. However, he believes that the losses this year will be unprecedented.<br><br><img data-filename=\"v2.jpg\" style=\"width: 675.328px;\" src=\"http://127.0.0.1:8000/images/5ec08fd6e6e36.jpeg\"><p><br></p><p>He pointed out that some 40 major shopping malls of the city are being kept closed because they are centrally air-conditioned. &acirc;&#128;&#156;The novel coronavirus can spread quickly in centrally air-conditioned places.&acirc;&#128;&#157;<br></p></p>\n', 1, NULL, 1, '2020-04-30 20:13:59', '2020-05-16 20:13:59', 1);

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
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_departments`
--

INSERT INTO `sub_departments` (`id`, `department_id`, `name`, `created_at`, `updated_at`, `website`, `address`, `telephone`, `fax`, `status`) VALUES
(1, 1, 'Sub Energy', '2020-03-15 19:00:00', '2020-03-18 01:13:15', 'https://www.google.com/', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '+921111111111', 123456789, 1),
(3, 1, 'Lesley Church', '2020-03-16 00:05:15', '2020-03-16 00:05:15', 'https://www.qonypokynyd.org.uk', 'Doloremque autem rer', '+1 (666) 743-6882', 212324142, 1),
(4, 1, 'Amber Holman', '2020-03-18 00:37:54', '2020-03-18 00:39:04', 'https://www.hirova.in', 'Velit laborum quis f', '+1 (719) 154-5448', 657465657, 1),
(5, 1, 'Kasper Mayo', '2020-03-18 00:50:27', '2020-03-18 00:50:27', 'https://www.temowazusesux.com.au', 'Facilis dolores quo', '+1 (752) 886-9501', 231231231, 1);

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
(18, 'Noah Vega', 'fymolu@mailinator.net', NULL, 0, '$2y$10$x3q.9NNYqtBmi5XDHr0.Telw1m0UAIF6eUxWWPkPNvF1v5MtFAAF2', NULL, '2020-03-18 23:40:24', '2020-03-18 23:40:24'),
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
  `status` tinyint(1) NOT NULL DEFAULT 0,
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sources`
--
ALTER TABLE `sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `source_logs`
--
ALTER TABLE `source_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sub_departments`
--
ALTER TABLE `sub_departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_categories`
--
ALTER TABLE `user_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_request`
--
ALTER TABLE `user_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `events_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `news_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sources`
--
ALTER TABLE `sources`
  ADD CONSTRAINT `sources_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `sources_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `source_logs`
--
ALTER TABLE `source_logs`
  ADD CONSTRAINT `source_logs_source_id_foreign` FOREIGN KEY (`source_id`) REFERENCES `sources` (`id`);

--
-- Constraints for table `sub_departments`
--
ALTER TABLE `sub_departments`
  ADD CONSTRAINT `sub_departments_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `user_categories`
--
ALTER TABLE `user_categories`
  ADD CONSTRAINT `user_categories_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `user_categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_request`
--
ALTER TABLE `user_request`
  ADD CONSTRAINT `user_request_sub_dep_id_foreign` FOREIGN KEY (`sub_dep_id`) REFERENCES `sub_departments` (`id`),
  ADD CONSTRAINT `user_request_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
