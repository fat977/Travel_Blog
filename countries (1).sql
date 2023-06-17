-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 06:49 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estore`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan', 1, NULL, NULL),
(2, 'AL', 'Albania', 1, NULL, NULL),
(3, 'DZ', 'Algeria', 1, NULL, NULL),
(4, 'DS', 'American Samoa', 1, NULL, NULL),
(5, 'AD', 'Andorra', 1, NULL, NULL),
(6, 'AO', 'Angola', 1, NULL, NULL),
(7, 'AI', 'Anguilla', 1, NULL, NULL),
(8, 'AQ', 'Antarctica', 1, NULL, NULL),
(9, 'AG', 'Antigua and Barbuda', 1, NULL, NULL),
(10, 'AR', 'Argentina', 1, NULL, NULL),
(11, 'AM', 'Armenia', 1, NULL, NULL),
(12, 'AW', 'Aruba', 1, NULL, NULL),
(13, 'AU', 'Australia', 1, NULL, NULL),
(14, 'AT', 'Austria', 1, NULL, NULL),
(15, 'AZ', 'Azerbaijan', 1, NULL, NULL),
(16, 'BS', 'Bahamas', 1, NULL, NULL),
(17, 'BH', 'Bahrain', 1, NULL, NULL),
(18, 'BD', 'Bangladesh', 1, NULL, NULL),
(19, 'BB', 'Barbados', 1, NULL, NULL),
(20, 'BY', 'Belarus', 1, NULL, NULL),
(21, 'BE', 'Belgium', 1, NULL, NULL),
(22, 'BZ', 'Belize', 1, NULL, NULL),
(23, 'BJ', 'Benin', 1, NULL, NULL),
(24, 'BM', 'Bermuda', 1, NULL, NULL),
(25, 'BT', 'Bhutan', 1, NULL, NULL),
(26, 'BO', 'Bolivia', 1, NULL, NULL),
(27, 'BA', 'Bosnia and Herzegovina', 1, NULL, NULL),
(28, 'BW', 'Botswana', 1, NULL, NULL),
(29, 'BV', 'Bouvet Island', 1, NULL, NULL),
(30, 'BR', 'Brazil', 1, NULL, NULL),
(31, 'IO', 'British Indian Ocean Territory', 1, NULL, NULL),
(32, 'BN', 'Brunei Darussalam', 1, NULL, NULL),
(33, 'BG', 'Bulgaria', 1, NULL, NULL),
(34, 'BF', 'Burkina Faso', 1, NULL, NULL),
(35, 'BI', 'Burundi', 1, NULL, NULL),
(36, 'KH', 'Cambodia', 1, NULL, NULL),
(37, 'CM', 'Cameroon', 1, NULL, NULL),
(38, 'CA', 'Canada', 1, NULL, NULL),
(39, 'CV', 'Cape Verde', 1, NULL, NULL),
(40, 'KY', 'Cayman Islands', 1, NULL, NULL),
(41, 'CF', 'Central African Republic', 1, NULL, NULL),
(42, 'TD', 'Chad', 1, NULL, NULL),
(43, 'CL', 'Chile', 1, NULL, NULL),
(44, 'CN', 'China', 1, NULL, NULL),
(45, 'CX', 'Christmas Island', 1, NULL, NULL),
(46, 'CC', 'Cocos (Keeling) Islands', 1, NULL, NULL),
(47, 'CO', 'Colombia', 1, NULL, NULL),
(48, 'KM', 'Comoros', 1, NULL, NULL),
(49, 'CD', 'Democratic Republic of the Congo', 1, NULL, NULL),
(50, 'CG', 'Republic of Congo', 1, NULL, NULL),
(51, 'CK', 'Cook Islands', 1, NULL, NULL),
(52, 'CR', 'Costa Rica', 1, NULL, NULL),
(53, 'HR', 'Croatia (Hrvatska)', 1, NULL, NULL),
(54, 'CU', 'Cuba', 1, NULL, NULL),
(55, 'CY', 'Cyprus', 1, NULL, NULL),
(56, 'CZ', 'Czech Republic', 1, NULL, NULL),
(57, 'DK', 'Denmark', 1, NULL, NULL),
(58, 'DJ', 'Djibouti', 1, NULL, NULL),
(59, 'DM', 'Dominica', 1, NULL, NULL),
(60, 'DO', 'Dominican Republic', 1, NULL, NULL),
(61, 'TP', 'East Timor', 1, NULL, NULL),
(62, 'EC', 'Ecuador', 1, NULL, NULL),
(63, 'EG', 'Egypt', 1, NULL, NULL),
(64, 'SV', 'El Salvador', 1, NULL, NULL),
(65, 'GQ', 'Equatorial Guinea', 1, NULL, NULL),
(66, 'ER', 'Eritrea', 1, NULL, NULL),
(67, 'EE', 'Estonia', 1, NULL, NULL),
(68, 'ET', 'Ethiopia', 1, NULL, NULL),
(69, 'FK', 'Falkland Islands (Malvinas)', 1, NULL, NULL),
(70, 'FO', 'Faroe Islands', 1, NULL, NULL),
(71, 'FJ', 'Fiji', 1, NULL, NULL),
(72, 'FI', 'Finland', 1, NULL, NULL),
(73, 'FR', 'France', 1, NULL, NULL),
(74, 'FX', 'France, Metropolitan', 1, NULL, NULL),
(75, 'GF', 'French Guiana', 1, NULL, NULL),
(76, 'PF', 'French Polynesia', 1, NULL, NULL),
(77, 'TF', 'French Southern Territories', 1, NULL, NULL),
(78, 'GA', 'Gabon', 1, NULL, NULL),
(79, 'GM', 'Gambia', 1, NULL, NULL),
(80, 'GE', 'Georgia', 1, NULL, NULL),
(81, 'DE', 'Germany', 1, NULL, NULL),
(82, 'GH', 'Ghana', 1, NULL, NULL),
(83, 'GI', 'Gibraltar', 1, NULL, NULL),
(84, 'GK', 'Guernsey', 1, NULL, NULL),
(85, 'GR', 'Greece', 1, NULL, NULL),
(86, 'GL', 'Greenland', 1, NULL, NULL),
(87, 'GD', 'Grenada', 1, NULL, NULL),
(88, 'GP', 'Guadeloupe', 1, NULL, NULL),
(89, 'GU', 'Guam', 1, NULL, NULL),
(90, 'GT', 'Guatemala', 1, NULL, NULL),
(91, 'GN', 'Guinea', 1, NULL, NULL),
(92, 'GW', 'Guinea-Bissau', 1, NULL, NULL),
(93, 'GY', 'Guyana', 1, NULL, NULL),
(94, 'HT', 'Haiti', 1, NULL, NULL),
(95, 'HM', 'Heard and Mc Donald Islands', 1, NULL, NULL),
(96, 'HN', 'Honduras', 1, NULL, NULL),
(97, 'HK', 'Hong Kong', 1, NULL, NULL),
(98, 'HU', 'Hungary', 1, NULL, NULL),
(99, 'IS', 'Iceland', 1, NULL, NULL),
(100, 'IN', 'India', 1, NULL, NULL),
(101, 'IM', 'Isle of Man', 1, NULL, NULL),
(102, 'ID', 'Indonesia', 1, NULL, NULL),
(103, 'IR', 'Iran (Islamic Republic of)', 1, NULL, NULL),
(104, 'IQ', 'Iraq', 1, NULL, NULL),
(105, 'IE', 'Ireland', 1, NULL, NULL),
(106, 'IL', 'Israel', 1, NULL, NULL),
(107, 'IT', 'Italy', 1, NULL, NULL),
(108, 'CI', 'Ivory Coast', 1, NULL, NULL),
(109, 'JE', 'Jersey', 1, NULL, NULL),
(110, 'JM', 'Jamaica', 1, NULL, NULL),
(111, 'JP', 'Japan', 1, NULL, NULL),
(112, 'JO', 'Jordan', 1, NULL, NULL),
(113, 'KZ', 'Kazakhstan', 1, NULL, NULL),
(114, 'KE', 'Kenya', 1, NULL, NULL),
(115, 'KI', 'Kiribati', 1, NULL, NULL),
(116, 'KP', 'Korea, Democratic People\'s Republic of', 1, NULL, NULL),
(117, 'KR', 'Korea, Republic of', 1, NULL, NULL),
(118, 'XK', 'Kosovo', 1, NULL, NULL),
(119, 'KW', 'Kuwait', 1, NULL, NULL),
(120, 'KG', 'Kyrgyzstan', 1, NULL, NULL),
(121, 'LA', 'Lao People\'s Democratic Republic', 1, NULL, NULL),
(122, 'LV', 'Latvia', 1, NULL, NULL),
(123, 'LB', 'Lebanon', 1, NULL, NULL),
(124, 'LS', 'Lesotho', 1, NULL, NULL),
(125, 'LR', 'Liberia', 1, NULL, NULL),
(126, 'LY', 'Libyan Arab Jamahiriya', 1, NULL, NULL),
(127, 'LI', 'Liechtenstein', 1, NULL, NULL),
(128, 'LT', 'Lithuania', 1, NULL, NULL),
(129, 'LU', 'Luxembourg', 1, NULL, NULL),
(130, 'MO', 'Macau', 1, NULL, NULL),
(131, 'MK', 'North Macedonia', 1, NULL, NULL),
(132, 'MG', 'Madagascar', 1, NULL, NULL),
(133, 'MW', 'Malawi', 1, NULL, NULL),
(134, 'MY', 'Malaysia', 1, NULL, NULL),
(135, 'MV', 'Maldives', 1, NULL, NULL),
(136, 'ML', 'Mali', 1, NULL, NULL),
(137, 'MT', 'Malta', 1, NULL, NULL),
(138, 'MH', 'Marshall Islands', 1, NULL, NULL),
(139, 'MQ', 'Martinique', 1, NULL, NULL),
(140, 'MR', 'Mauritania', 1, NULL, NULL),
(141, 'MU', 'Mauritius', 1, NULL, NULL),
(142, 'TY', 'Mayotte', 1, NULL, NULL),
(143, 'MX', 'Mexico', 1, NULL, NULL),
(144, 'FM', 'Micronesia, Federated States of', 1, NULL, NULL),
(145, 'MD', 'Moldova, Republic of', 1, NULL, NULL),
(146, 'MC', 'Monaco', 1, NULL, NULL),
(147, 'MN', 'Mongolia', 1, NULL, NULL),
(148, 'ME', 'Montenegro', 1, NULL, NULL),
(149, 'MS', 'Montserrat', 1, NULL, NULL),
(150, 'MA', 'Morocco', 1, NULL, NULL),
(151, 'MZ', 'Mozambique', 1, NULL, NULL),
(152, 'MM', 'Myanmar', 1, NULL, NULL),
(153, 'NA', 'Namibia', 1, NULL, NULL),
(154, 'NR', 'Nauru', 1, NULL, NULL),
(155, 'NP', 'Nepal', 1, NULL, NULL),
(156, 'NL', 'Netherlands', 1, NULL, NULL),
(157, 'AN', 'Netherlands Antilles', 1, NULL, NULL),
(158, 'NC', 'New Caledonia', 1, NULL, NULL),
(159, 'NZ', 'New Zealand', 1, NULL, NULL),
(160, 'NI', 'Nicaragua', 1, NULL, NULL),
(161, 'NE', 'Niger', 1, NULL, NULL),
(162, 'NG', 'Nigeria', 1, NULL, NULL),
(163, 'NU', 'Niue', 1, NULL, NULL),
(164, 'NF', 'Norfolk Island', 1, NULL, NULL),
(165, 'MP', 'Northern Mariana Islands', 1, NULL, NULL),
(166, 'NO', 'Norway', 1, NULL, NULL),
(167, 'OM', 'Oman', 1, NULL, NULL),
(168, 'PK', 'Pakistan', 1, NULL, NULL),
(169, 'PW', 'Palau', 1, NULL, NULL),
(170, 'PS', 'Palestine', 1, NULL, NULL),
(171, 'PA', 'Panama', 1, NULL, NULL),
(172, 'PG', 'Papua New Guinea', 1, NULL, NULL),
(173, 'PY', 'Paraguay', 1, NULL, NULL),
(174, 'PE', 'Peru', 1, NULL, NULL),
(175, 'PH', 'Philippines', 1, NULL, NULL),
(176, 'PN', 'Pitcairn', 1, NULL, NULL),
(177, 'PL', 'Poland', 1, NULL, NULL),
(178, 'PT', 'Portugal', 1, NULL, NULL),
(179, 'PR', 'Puerto Rico', 1, NULL, NULL),
(180, 'QA', 'Qatar', 1, NULL, NULL),
(181, 'RE', 'Reunion', 1, NULL, NULL),
(182, 'RO', 'Romania', 1, NULL, NULL),
(183, 'RU', 'Russian Federation', 1, NULL, NULL),
(184, 'RW', 'Rwanda', 1, NULL, NULL),
(185, 'KN', 'Saint Kitts and Nevis', 1, NULL, NULL),
(186, 'LC', 'Saint Lucia', 1, NULL, NULL),
(187, 'VC', 'Saint Vincent and the Grenadines', 1, NULL, NULL),
(188, 'WS', 'Samoa', 1, NULL, NULL),
(189, 'SM', 'San Marino', 1, NULL, NULL),
(190, 'ST', 'Sao Tome and Principe', 1, NULL, NULL),
(191, 'SA', 'Saudi Arabia', 1, NULL, NULL),
(192, 'SN', 'Senegal', 1, NULL, NULL),
(193, 'RS', 'Serbia', 1, NULL, NULL),
(194, 'SC', 'Seychelles', 1, NULL, NULL),
(195, 'SL', 'Sierra Leone', 1, NULL, NULL),
(196, 'SG', 'Singapore', 1, NULL, NULL),
(197, 'SK', 'Slovakia', 1, NULL, NULL),
(198, 'SI', 'Slovenia', 1, NULL, NULL),
(199, 'SB', 'Solomon Islands', 1, NULL, NULL),
(200, 'SO', 'Somalia', 1, NULL, NULL),
(201, 'ZA', 'South Africa', 1, NULL, NULL),
(202, 'GS', 'South Georgia South Sandwich Islands', 1, NULL, NULL),
(203, 'SS', 'South Sudan', 1, NULL, NULL),
(204, 'ES', 'Spain', 1, NULL, NULL),
(205, 'LK', 'Sri Lanka', 1, NULL, NULL),
(206, 'SH', 'St. Helena', 1, NULL, NULL),
(207, 'PM', 'St. Pierre and Miquelon', 1, NULL, NULL),
(208, 'SD', 'Sudan', 1, NULL, NULL),
(209, 'SR', 'Suriname', 1, NULL, NULL),
(210, 'SJ', 'Svalbard and Jan Mayen Islands', 1, NULL, NULL),
(211, 'SZ', 'Eswatini', 1, NULL, NULL),
(212, 'SE', 'Sweden', 1, NULL, NULL),
(213, 'CH', 'Switzerland', 1, NULL, NULL),
(214, 'SY', 'Syrian Arab Republic', 1, NULL, NULL),
(215, 'TW', 'Taiwan', 1, NULL, NULL),
(216, 'TJ', 'Tajikistan', 1, NULL, NULL),
(217, 'TZ', 'Tanzania, United Republic of', 1, NULL, NULL),
(218, 'TH', 'Thailand', 1, NULL, NULL),
(219, 'TG', 'Togo', 1, NULL, NULL),
(220, 'TK', 'Tokelau', 1, NULL, NULL),
(221, 'TO', 'Tonga', 1, NULL, NULL),
(222, 'TT', 'Trinidad and Tobago', 1, NULL, NULL),
(223, 'TN', 'Tunisia', 1, NULL, NULL),
(224, 'TR', 'Turkey', 1, NULL, NULL),
(225, 'TM', 'Turkmenistan', 1, NULL, NULL),
(226, 'TC', 'Turks and Caicos Islands', 1, NULL, NULL),
(227, 'TV', 'Tuvalu', 1, NULL, NULL),
(228, 'UG', 'Uganda', 1, NULL, NULL),
(229, 'UA', 'Ukraine', 1, NULL, NULL),
(230, 'AE', 'United Arab Emirates', 1, NULL, NULL),
(231, 'GB', 'United Kingdom', 1, NULL, NULL),
(232, 'US', 'United States', 1, NULL, NULL),
(233, 'UM', 'United States minor outlying islands', 1, NULL, NULL),
(234, 'UY', 'Uruguay', 1, NULL, NULL),
(235, 'UZ', 'Uzbekistan', 1, NULL, NULL),
(236, 'VU', 'Vanuatu', 1, NULL, NULL),
(237, 'VA', 'Vatican City State', 1, NULL, NULL),
(238, 'VE', 'Venezuela', 1, NULL, NULL),
(239, 'VN', 'Vietnam', 1, NULL, NULL),
(240, 'VG', 'Virgin Islands (British)', 1, NULL, NULL),
(241, 'VI', 'Virgin Islands (U.S.)', 1, NULL, NULL),
(242, 'WF', 'Wallis and Futuna Islands', 1, NULL, NULL),
(243, 'EH', 'Western Sahara', 1, NULL, NULL),
(244, 'YE', 'Yemen', 1, NULL, NULL),
(245, 'ZM', 'Zambia', 1, NULL, NULL),
(246, 'ZW', 'Zimbabwe', 1, NULL, NULL),
(247, '', '', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
