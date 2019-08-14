-- phpMyAdmin SQL Dump
-- version 
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2019 at 11:51 AM
-- Server version: 5.7.23-percona-sure1-log
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asianhighway_7mj`
--

-- --------------------------------------------------------

--
-- Table structure for table `ut_continents`
--

CREATE TABLE `ut_continents` (
  `continent_id` tinyint(2) NOT NULL,
  `continent_name` varchar(20) NOT NULL,
  `continent_image` varchar(50) NOT NULL,
  `active_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ut_continents`
--

INSERT INTO `ut_continents` (`continent_id`, `continent_name`, `continent_image`, `active_status`) VALUES
(1, 'Pan America', '', '1'),
(2, 'Asia', '', '1'),
(3, 'Africa', '', '1'),
(4, 'Australia', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ut_countries`
--

CREATE TABLE `ut_countries` (
  `country_id` tinyint(3) NOT NULL,
  `continent_id` tinyint(2) NOT NULL,
  `country_name` varchar(30) NOT NULL,
  `country_image` varchar(50) NOT NULL,
  `country_playlist` varchar(70) NOT NULL,
  `active_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ut_countries`
--

INSERT INTO `ut_countries` (`country_id`, `continent_id`, `country_name`, `country_image`, `country_playlist`, `active_status`) VALUES
(1, 2, 'Afghanistan', 'Afghanistan.png', 'PLq22jnbWJNQ7vHC3kaeGQb-tIKcl_O1Vq', '1'),
(2, 2, 'Armenia', 'Armenia.png', 'PLq22jnbWJNQ4Ir6QWtRjvXjeb3PBS7J81', '1'),
(3, 2, 'Azerbaijan', 'Azerbaijan.png', 'PLq22jnbWJNQ6lrAtg83NzsW8RSEUAAlQf', '1'),
(4, 2, 'Bangladesh', 'Bangladesh.png', 'PLq22jnbWJNQ7aWAY3ocq2spC2xJGRnfU7', '1'),
(5, 2, 'Bhutan', 'Buthan.png', 'PLq22jnbWJNQ53YWk3P5u5JsPdwaUMVgHu', '1'),
(6, 2, 'Cambodia', 'CAMBODIA.png', 'PLq22jnbWJNQ5_KUxnCcd75vE9T82-bZJO', '1'),
(7, 2, 'China', 'China.png', 'PLq22jnbWJNQ6aK1I62qz13xPOtt2-W-kR', '1'),
(8, 2, 'Georgia', 'GEORGIA.png', 'PLq22jnbWJNQ4hq1_eKmJhaITCOt63tfzw', '1'),
(9, 2, 'India', 'INDIA.png', 'PLq22jnbWJNQ7eKm1VId2jTVh8C-NcvdbW', '1'),
(10, 2, 'Indonesia', 'INDONESIA.png', 'PLq22jnbWJNQ4jiYCk7QEOFu2t6tfQnjJR', '1'),
(11, 2, 'Iran', 'IRAN.png', 'PLq22jnbWJNQ7wCW6aU1NACKxWnY5KJajV', '1'),
(12, 2, 'Japan', 'JAPAN.png', 'PLq22jnbWJNQ4Q9fNd7kYr2J45T7j4HFHO', '1'),
(13, 2, 'Kazakhstan', 'KAZAKHSTAN.png', 'PLq22jnbWJNQ4ceML4RXsDBARv3IlLJZ4B', '1'),
(14, 2, 'Korea,South', 'KOREA SOUTH.png', 'PLq22jnbWJNQ462NiLXhScgJpctXLqLbF1', '1'),
(15, 2, 'Kyrgyzstan', 'KYRGYZSTAN.png', 'PLq22jnbWJNQ7EcE6BtdyvVqGBNa-UHJ5j', '1'),
(16, 2, 'Laos', 'LAOS.png', 'PLq22jnbWJNQ4jHiPNFq3f98YgI9f_udYg', '1'),
(17, 2, 'Malaysia', 'MALAYSIA.png', 'PLq22jnbWJNQ5weMBxW2QqUnahUvqmgWAd', '1'),
(18, 2, 'Mongolia', 'MONGOLIA.png', 'PLq22jnbWJNQ7u3hSDFZbNKsgm5avkvqkO', '1'),
(19, 2, 'Myanmar', 'BURMA.png', 'PLq22jnbWJNQ6gQb74M3RWAcVWBXuX-flE', '1'),
(20, 2, 'Nepal', 'NEPAL.png', 'PLq22jnbWJNQ5u-wtXoNowLfb6luTPPd7A', '1'),
(21, 2, 'North Korea', 'NORTH KOREA.png', 'PLq22jnbWJNQ4ikJ8zZfULUz8g1DJI2lZu', '1'),
(22, 2, 'Pakistan', 'PAKISTAN.png', 'PLq22jnbWJNQ6nyul-HT_86iSpkZ-leezC', '1'),
(23, 2, 'Philippines', 'PHILIPPINES.png', 'PLq22jnbWJNQ6TZt40yT-78qiU0UicbKvN', '1'),
(24, 2, 'Russia', 'RUSSIA.png', 'PLq22jnbWJNQ7H1NireSY92ws0PpnZSIF8', '1'),
(25, 2, 'Singapore', 'SINGAPORE.png', 'PLq22jnbWJNQ6Plprokz9oYFvKiU4OYIYG', '1'),
(26, 2, 'Sri Lanka', 'SRI LANKA.png', 'PLq22jnbWJNQ6WE0Hl3fyRTRWOSwr-E3_B', '1'),
(27, 2, 'Tajakistan', 'TAJIKISTAN.png', 'PLq22jnbWJNQ73uAuBBWSLaMuQWeFKR2Ja', '1'),
(28, 2, 'Thailand', 'THAILAND.png', 'PLq22jnbWJNQ6IppASuuFFhjF2zy_77bWs', '1'),
(29, 2, 'Turkey', 'TURKEY.png', 'PLq22jnbWJNQ5gtbzAPxVEGMLEeqYUNP3z', '1'),
(30, 2, 'Turkmenistan', 'TURKMANISTAN.png', 'PLq22jnbWJNQ71FjZzvO0o2-dm-unX8ErY', '1'),
(31, 2, 'Uzbekistan', 'UZBEKISTAN.png', 'PLq22jnbWJNQ7zr1__xI4VkYsxm2RES0-q', '1'),
(32, 2, 'VietNam', 'VIETNAM.png', 'PLq22jnbWJNQ6-D6X5RRdM0mETOPhDH2bZ', '1'),
(33, 3, 'Algeria', 'ALGERIA.png', 'PLxG1N7Iwqj3MoVAQu0piuYTQ1voSmPcq1', '1'),
(34, 3, 'Angola', 'Angola.png', 'PLxG1N7Iwqj3NvJ5EOUu3jHD8zhykLKzGg', '1'),
(35, 3, 'Benin', 'BENIN.png', 'PLxG1N7Iwqj3OStXech12jho9hLTIwv2ve', '1'),
(36, 3, 'botswana', 'BOTSWANA.png', 'PLxG1N7Iwqj3MRDZyYio_l-34VIxmmlg3l', '1'),
(37, 3, 'Burkina Fasso', 'BURKINA-FASSO.png', 'PLxG1N7Iwqj3Odikm3D9gAbgvalY_8t_Nj', '1'),
(38, 3, 'Central African Republic', 'C.A.R.png', 'PLxG1N7Iwqj3M_ilCSh0D0y9ILHaTfV0Ei', '1'),
(39, 3, 'Cameroon', 'CAMEROON.png', 'PLxG1N7Iwqj3M2VZSf3wttdTuWUhInpBMx', '1'),
(40, 3, 'Chad', 'Chad.png', 'PLxG1N7Iwqj3O29wbFEBe9QFamb3oArOfc', '1'),
(41, 3, 'Democratic Country of Congo', 'CONGO DEMOCRATIC REPUBLIC.png', 'PLxG1N7Iwqj3MoEn-NEno9GSlhVcakmCJV', '1'),
(42, 3, 'Djibouti', 'Djibouti.png', 'PLxG1N7Iwqj3MwaHX5K6DqgmTb23qO66W6', '1'),
(43, 3, 'Egypt', 'EGYPT.png', 'PLxG1N7Iwqj3PmQsW3aEjQlOwDrOONQBf8', '1'),
(44, 3, 'Ethiopia', 'Ethopia.png', 'PLxG1N7Iwqj3MvdXvGh5DEUeEKV1LtFmbA', '1'),
(45, 3, 'Gabon', 'Gabon.png', 'PLxG1N7Iwqj3PA1QH0V2cj6MbpY1OcdbUV', '1'),
(46, 3, 'Gambia', 'GAMBIA.png', 'PLxG1N7Iwqj3OfgS0DOzhQJFQMLAv9LvH4', '1'),
(47, 3, 'Ghana', 'GHANA.png', 'PLxG1N7Iwqj3P1M21BpqNGJPhEgb9YEWl3', '1'),
(48, 3, 'Guinea', 'GUINEA.png', 'PLxG1N7Iwqj3O85tqt3aXv2ze-wy-sDHT9', '1'),
(49, 3, 'Guinea - Bissau', 'GUINEA-BISSAU.png', 'PLxG1N7Iwqj3NNeFV9Uec3YUXybvYL1OEr', '1'),
(50, 3, 'Cote D’Ivoire', 'IVORY COAST.png', 'PLxG1N7Iwqj3NKsARCeme695Vq6y48ryeQ', '1'),
(51, 3, 'Kenya', 'KENYA.png', 'PLxG1N7Iwqj3ND-VfxTGSBc5_s-zEUdVyF', '1'),
(52, 3, 'Liberia', 'LIBERIA.png', 'PLxG1N7Iwqj3MEmGmeM_aZ_AgFkak7kkt4', '1'),
(53, 3, 'Libya', 'LIBYA.png', 'PLxG1N7Iwqj3NOnkMQkw-xrFeiOg0MRpJi', '1'),
(54, 3, 'Mali', 'MALI.png', 'PLxG1N7Iwqj3NO47gNCzT6wnhEfyxuy31n', '1'),
(55, 3, 'Mauritania', 'MAURITANIA.png', 'PLxG1N7Iwqj3MQ6dblXMVRhoEHAT4bpFNN', '1'),
(56, 3, 'Morocco', 'MOROCCO.png', 'PLxG1N7Iwqj3OViqfaegyiuQbHKdtTVlwA', '1'),
(57, 3, 'Mozambique', 'MOZAMBIQUE.png', 'PLxG1N7Iwqj3PYlQ3gByQzxcHCPKzgxC_U', '1'),
(58, 3, 'Namibia', 'NAMIBIA.png', 'PLxG1N7Iwqj3PY1ONbFcK8uozwFRgG5PB_', '1'),
(59, 3, 'Niger', 'NIGER.png', 'PLxG1N7Iwqj3PFJ87U3FlLIE3ZCezKrjHh', '1'),
(60, 3, 'Nigeria', 'NIGERIA.png', 'PLxG1N7Iwqj3N_HsdXk9g7RJU4F5eFPK9P', '1'),
(61, 3, 'Senegal', 'SENEGAL.png', 'PLxG1N7Iwqj3N4I14uPtYg8RKLmcMtUeom', '1'),
(62, 3, 'Sierra Leone', 'SIERRA LEONE.png', 'PLxG1N7Iwqj3P21--empjGUD4MrfEedXBb', '1'),
(63, 3, 'South Africa', 'SOUTH AFRICA.png', 'PLxG1N7Iwqj3N9-w_0JNCRhWYYKNPLnopT', '1'),
(64, 3, 'Sudan', 'SUDAN.png', 'PLxG1N7Iwqj3M2bhuxuUYTswuCtBlFpEUn', '1'),
(65, 3, 'Tanzania', 'TANZANIA.png', 'PLxG1N7Iwqj3MCgaOemLk_8RFDNrVe0_2g', '1'),
(66, 3, 'Togo', 'Togo.png', '', '1'),
(67, 3, 'Tunisia', 'TUNISIA.png', 'PLxG1N7Iwqj3Pz1WFLSPLTIPRrbKRd61Fn', '1'),
(68, 3, 'Uganda', 'UGANDA.png', 'PLxG1N7Iwqj3MOoOZw3Jbf6B7d43o9Zr2l', '1'),
(69, 3, 'Western Sahara', 'Western Sahara.png', 'PLxG1N7Iwqj3N00IvEQELt8gJebOJmap_6', '1'),
(70, 3, 'Zambia', 'ZAMBIA.png', 'PLxG1N7Iwqj3O6fqiPGQsn892XResHUOiG', '1'),
(71, 3, 'Zimbabwe', 'ZIMBABWE.png', 'PLxG1N7Iwqj3NW0woDFCPi7Mu9d48DCgiF', '1'),
(72, 4, 'New South Wales', 'New South Wales.png', 'PLqWpKaCJCBmrLC6-zBH5MmokgPiGQHXpq', '1'),
(73, 4, 'Northern Territory', 'Northern Territory.png', 'PLqWpKaCJCBmrczQGjWXBb6YubSBNHws8s', '1'),
(74, 4, 'Queensland', 'Queensland.png', 'PLqWpKaCJCBmoT4wCREq3ZCfTS4O8hDlIY', '1'),
(75, 4, 'South Australia', 'South Australia.png', 'PLqWpKaCJCBmoztpi-ym1_eqfFQ3Ke_GJz', '1'),
(76, 4, 'Tasmania', 'Tasmania.png', '', '1'),
(77, 4, 'Victoria', 'Victoria.png\"', 'PLqWpKaCJCBmrAmct9xt-q9LYaHza3pKpU', '1'),
(78, 4, 'Western Australia', 'Western Australia.png', 'PLqWpKaCJCBmpLRr4gAFCJgTOh-d9mQXKG', '1'),
(79, 2, 'Taiwan', 'taiwanmap.png', 'PLq22jnbWJNQ5FnHZxF5dyb544RKdJlNdC', '1'),
(80, 1, 'Saskatchewan', '120.jpg', '', '1'),
(81, 1, 'South Dakota', '119.jpg', '', '1'),
(82, 1, '', '', '', '1'),
(83, 1, 'Texas', '118.jpg', '', '1'),
(84, 1, 'Wyoming', '117.jpg', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ut_country_highways`
--

CREATE TABLE `ut_country_highways` (
  `country_id` tinyint(3) NOT NULL,
  `highway_id` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ut_country_highways`
--

INSERT INTO `ut_country_highways` (`country_id`, `highway_id`) VALUES
(33, 1),
(43, 1),
(53, 1),
(55, 1),
(56, 1),
(61, 1),
(67, 1),
(69, 1),
(33, 2),
(59, 2),
(60, 2),
(34, 3),
(39, 3),
(41, 3),
(40, 3),
(45, 3),
(53, 3),
(58, 3),
(63, 3),
(36, 4),
(43, 4),
(44, 4),
(51, 4),
(63, 4),
(64, 4),
(65, 4),
(70, 4),
(71, 4),
(39, 5),
(54, 5),
(59, 5),
(60, 5),
(61, 5),
(37, 5),
(40, 6),
(42, 6),
(44, 6),
(64, 6),
(46, 7),
(47, 7),
(48, 7),
(50, 7),
(52, 7),
(60, 7),
(61, 7),
(62, 7),
(66, 7),
(49, 7),
(38, 8),
(39, 8),
(51, 8),
(60, 8),
(68, 8),
(41, 8),
(34, 9),
(57, 9),
(70, 9),
(71, 9),
(41, 9),
(34, 9),
(57, 9),
(70, 9),
(71, 9),
(41, 9);

-- --------------------------------------------------------

--
-- Table structure for table `ut_highways`
--

CREATE TABLE `ut_highways` (
  `highway_id` tinyint(4) NOT NULL,
  `highway_name` varchar(50) NOT NULL,
  `active_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ut_highways`
--

INSERT INTO `ut_highways` (`highway_id`, `highway_name`, `active_status`) VALUES
(1, 'Cairo-Dakar', '1'),
(2, 'Algiers-Lagos', '1'),
(3, 'Tripoli-Windhoek-(Capetown)', '1'),
(4, 'Cairo-Gaborone-(Capetown)', '1'),
(5, 'Dakar-Ndjamena', '1'),
(6, 'Ndjamena-Djibouti', '1'),
(7, 'Dakar-Lagos', '1'),
(8, 'Lagos-Mombasa', '1'),
(9, 'Beira-Lobito', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ut_continents`
--
ALTER TABLE `ut_continents`
  ADD PRIMARY KEY (`continent_id`);

--
-- Indexes for table `ut_countries`
--
ALTER TABLE `ut_countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `ut_highways`
--
ALTER TABLE `ut_highways`
  ADD PRIMARY KEY (`highway_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ut_continents`
--
ALTER TABLE `ut_continents`
  MODIFY `continent_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ut_countries`
--
ALTER TABLE `ut_countries`
  MODIFY `country_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `ut_highways`
--
ALTER TABLE `ut_highways`
  MODIFY `highway_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
