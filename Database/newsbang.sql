-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 07:21 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsbang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `ip_add` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cid`, `ip_add`, `p_id`) VALUES
(1, 38, 0, 93),
(3, 38, 0, 77),
(4, 38, 0, 80);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `city_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `user_id`, `city_title`) VALUES
(1, 22, 'Lahore'),
(2, 0, 'Okara'),
(3, 0, 'Islamabad'),
(4, 0, 'Sukker'),
(5, 0, 'Peshawar'),
(6, 0, 'Quetta'),
(7, 0, 'Multan'),
(8, 0, 'Sialkot'),
(9, 0, 'Sahiwal'),
(10, 0, 'Jacobabad'),
(11, 0, 'Hyderabad'),
(12, 0, 'Chakwal'),
(13, 0, 'DG Khan'),
(14, 22, 'Islamabad'),
(16, 23, 'Karachi'),
(17, 23, 'Rawalpindi'),
(18, 23, 'Rahim yar Khan'),
(19, 0, 'Sibbi'),
(20, 0, 'Skardu'),
(21, 0, 'Kohat'),
(22, 0, 'Hafizabad'),
(23, 0, 'Pasrur'),
(24, 0, 'Vehari'),
(25, 0, 'Jhelum'),
(26, 23, 'Sheikhupura'),
(27, 22, 'Faisalabad'),
(28, 22, 'Mardaan'),
(29, 22, 'Mianwali'),
(30, 22, 'Rajanpur'),
(31, 22, 'Sargodha'),
(42, 22, 'Gujranwalaaaaa'),
(43, 22, 'Rajana'),
(45, 0, 'dummy2');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `item_id` int(100) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `item_id`, `Date`, `name`, `email`, `comment`) VALUES
(4, 38, 89, '', 'hussain', 'abc@abc.com', 'dummy content');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `customer_id` int(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `First_name`, `Last_name`, `Email`, `customer_id`, `Message`, `user_id`) VALUES
(2, 'zain', 'zain', '', 0, 'asdasdasdasd          ', 0),
(3, 'asdas', 'asdas', '', 0, 'asdasdasdasd          ', 0),
(4, 'dummy', 'dummy', '', 0, 'asdasdasdas          ', 0),
(5, 'asd', 'asd', 'demo@eret.com', 38, 'asdasd\r\nasd\r\nasd\r\nasd\r\nasd\r\nasd          ', 38);

-- --------------------------------------------------------

--
-- Table structure for table `news_cat`
--

CREATE TABLE `news_cat` (
  `item_id` int(100) NOT NULL,
  `user_id` int(255) NOT NULL,
  `state_id` int(255) NOT NULL,
  `city_id` int(255) NOT NULL,
  `news_cate` int(255) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_img` varchar(255) NOT NULL,
  `news_desc` longtext NOT NULL,
  `full_news` longtext NOT NULL,
  `news_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_cat`
--

INSERT INTO `news_cat` (`item_id`, `user_id`, `state_id`, `city_id`, `news_cate`, `news_title`, `news_img`, `news_desc`, `full_news`, `news_date`, `views`) VALUES
(74, 23, 3, 1, 1, 'PM Imran speaks to mammoth rally in Jamrud, takes digs on Zardari, Fazlur Rehman', '5c93c4cb43e62.jpg', 'JAMRUD: Prime Minister Imran Khan on Friday heavily criticised his political opponents for what he termed their efforts to hide their corruption and incompetence during a rally in Jamrud town of Khyber Agency.\r\n\r\n', 'The premier, while addressing a huge crowd of supporters, said that people like Zardari (PPP co-chairman) are claiming that they can topple the current government while Fazlur Rehman (JUI-chief) is preparing for a million march, adding that these â€œspinelessâ€ leaders canâ€™t harm the government.\r\n\r\nâ€œZardari, this government is not going anywhere, but yes, you are going to jail soon,â€ said Imran Khan while referring to former president.\r\n\r\nHe maintained that Zardari and his son, PPP-chairman Bilawal Bhutto, canâ€™t become leaders for they have no political struggle to their credit but a forged will.', '2021-04-04 19:00:00', 0),
(75, 23, 2, 1, 8, 'Ex-PM Shahid Khaqan Abbasi put on Exit Control List: sources', '440143_2087247_Imran-Khan_updates.jpg', 'ISLAMABAD: Former prime minister and Pakistan Muslim League Nawaz (PML-N) senior leader, Shahid Khaqan Abbasi, has been put on Exit Control List (ECL) which restricted him to leave the country, citing sources, ARY News reported on Friday.\r\n\r\n', 'Sources said that Shahid Khaqan Abbasiâ€™s name was included in the no-fly-list following request of the National Accountability Bureau (NAB) Rawalpindi holding investigation into Liquefied Natural Gas (LNG) contract scam case against the politician.\r\n\r\nThe move was made by the Interior Ministry after formal approval of the summary to bar movement of the former premier abroad.\r\n\r\nIt is pertinent to mention here that NAB Rawalpindi had sought inclusion of Abbasiâ€™s name on ECL in a letter sent to its headquarters in Islamabad, which formally requested Interior Ministry to take further step', '2021-03-10 14:36:51', 1),
(76, 23, 4, 10, 8, 'Zalmay Khalilzad calls on Army Chief at General Headquarters', 'Zalmay-Khalilzad-Army-Chief-750x369.jpg', 'RAWALPINDI: US Special Representative for Afghanistan Reconciliation Zalmay Khalilzad called on Chief of Army Staff (COAS) General Qamar Javed Bajwa on Friday, Inter-Services Public Relations (ISPR) said.\r\n\r\n', 'ISPR said in a statement that Zalmay Khalilzad visited General Headquarters (GHQ) and held an important meeting with the Army Chief.\r\n\r\nBoth high-ups exchanged views on matters relating to regional security and ongoing Afghanistan reconciliation process.\r\n\r\nThe US envoy acknowledged Pakistanâ€™s efforts to promote peace across the region.\r\n\r\nKhalilzad also held a meeting with Foreign Minister Shah Mehmood Qureshi earlier to brief him about progress in the Afghan peace process.', '2021-04-04 19:00:00', 0),
(77, 23, 2, 1, 7, 'Accountability, politics should be kept separated: Nadeem Afzal Chan', 'Nadeem-Afzal-Chan-750x369.jpg', 'ISLAMABAD: Spokesperson to the Prime Minister, Nadeem Afzal Chan, on Friday urged that accountability and politics should run separately, ARY News reported.\r\n\r\n', 'In his latest statement, Chan said that the nation was in favour of accountability of powerful personalities.\r\n\r\nThe official said that Hamza Shehbaz should appear before the National Accountability Bureau (NAB) himself if summoned by the institution.\r\n\r\nChan slammed the opposition leaders, saying that they only praised the system when given relief, otherwise they always found faults in it after any action being carried out against them.\r\n\r\nThe former rulers should remember the fact that they cannot run their politics without the institutions, he added.\r\nIn his latest statement, Chan said that the nation was in favour of accountability of powerful personalities.\r\n\r\nThe official said that Hamza Shehbaz should appear before the National Accountability Bureau (NAB) himself if summoned by the institution.\r\n\r\nChan slammed the opposition leaders, saying that they only praised the system when given relief, otherwise they always found faults in it after any action being carried out against them.\r\n\r\nThe former rulers should remember the fact that they cannot run their politics without the institutions, he added', '2021-03-10 14:47:18', 2),
(78, 23, 2, 10, 2, 'PM Imran mainstreamed people of tribal areas: Fawad Chaudhry', 'fawad-ch-1-750x369.jpg', 'ISLAMABAD: Federal Minister for Information and Broadcasting Fawad Chaudhry on Friday said Prime Minister Imran Khan mainstreamed people of tribal areas, ARY News reported.\r\n\r\n', 'He said only that leader could do this who talked about love instead of hatred and who make reconcile relations between people rather than breaking relations.\r\n\r\nOn March 27, Khyber Pakhtunkhuwa Chief Minister Mehmood Khan had termed mainstreaming of tribal districts a major challenge for the provincial government.\r\n\r\nMehmood Khan had urged the opposition to point out their mistakes so as the government could ensure good governance.\r\nHe said only that leader could do this who talked about love instead of hatred and who make reconcile relations between people rather than breaking relations.\r\n\r\nOn March 27, Khyber Pakhtunkhuwa Chief Minister Mehmood Khan had termed mainstreaming of tribal districts a major challenge for the provincial government.\r\n\r\nMehmood Khan had urged the opposition to point out their mistakes so as the government could ensure good governance.\r\n\r\nHe said only that leader could do this who talked about love instead of hatred and who make reconcile relations between people rather than breaking relations.\r\n\r\nOn March 27, Khyber Pakhtunkhuwa Chief Minister Mehmood Khan had termed mainstreaming of tribal districts a major challenge for the provincial government.\r\n\r\nMehmood Khan had urged the opposition to point out their mistakes so as the government could ensure good governance.\r\n', '2021-03-10 18:17:47', 1),
(79, 23, 3, 2, 9, 'Task force formed to stop gas theft: petroleum minister', 'ghulam-sarwar-750x369.jpg', 'ISLAMABAD: Announcing to launch countrywide crackdown on those stealing gas, Federal Minister for Petroleum Ghulam Sarwar Khan on Friday formed a task force to stop gas theft, ARY News reported.\r\n\r\n', 'Regional officers will be responsible for gas theft,â€ Ghulam Sarwar Khan said in a statement.\r\n\r\nHe said the International Monetary Fund (IMF) had also expressed reservations on gas losses.\r\n\r\nThe petroleum minister said he had directed for recovery of Rs103 billion arrears from industrial sector. He said the former governments were responsible for economic crisis in the country. He said the government was not in favour of more increase on gas price.\r\n\r\nRead More: Govt optimistic about discovery of huge oil, gas reserves: Sarwar\r\n\r\nSarwar said Pakistan Peopleâ€™s Party (PPP) Chairman Bilawal Bhutto Zardariâ€™s threat of taking down the government was useless and childish.\r\n\r\nâ€œThey are crying hoarse to protect their family corruption,â€ he said.\r\n\r\nHe said every new year of the government would be better than the previous.\r\n\r\nThe minister said those who had looted the country would be seen behind the bar', '2021-04-04 19:00:00', 0),
(80, 23, 3, 2, 9, 'Task force formed to stop gas theft: petroleum minister', 'ghulam-sarwar-750x369.jpg', 'ISLAMABAD: Announcing to launch countrywide crackdown on those stealing gas, Federal Minister for Petroleum Ghulam Sarwar Khan on Friday formed a task force to stop gas theft, ARY News reported.\r\n\r\n', 'Regional officers will be responsible for gas theft,â€ Ghulam Sarwar Khan said in a statement.\r\n\r\nHe said the International Monetary Fund (IMF) had also expressed reservations on gas losses.\r\n\r\nThe petroleum minister said he had directed for recovery of Rs103 billion arrears from industrial sector. He said the former governments were responsible for economic crisis in the country. He said the government was not in favour of more increase on gas price.\r\n\r\nRead More: Govt optimistic about discovery of huge oil, gas reserves: Sarwar\r\n\r\nSarwar said Pakistan Peopleâ€™s Party (PPP) Chairman Bilawal Bhutto Zardariâ€™s threat of taking down the government was useless and childish.\r\n\r\nâ€œThey are crying hoarse to protect their family corruption,â€ he said.\r\n\r\nHe said every new year of the government would be better than the previous.\r\n\r\nThe minister said those who had looted the country would be seen behind the bar', '2021-04-04 19:00:00', 0),
(81, 23, 3, 2, 9, 'Task force formed to stop gas theft: petroleum minister', 'ghulam-sarwar-750x369.jpg', 'ISLAMABAD: Announcing to launch countrywide crackdown on those stealing gas, Federal Minister for Petroleum Ghulam Sarwar Khan on Friday formed a task force to stop gas theft, ARY News reported.\r\n\r\n', 'Regional officers will be responsible for gas theft,â€ Ghulam Sarwar Khan said in a statement.\r\n\r\nHe said the International Monetary Fund (IMF) had also expressed reservations on gas losses.\r\n\r\nThe petroleum minister said he had directed for recovery of Rs103 billion arrears from industrial sector. He said the former governments were responsible for economic crisis in the country. He said the government was not in favour of more increase on gas price.\r\n\r\nRead More: Govt optimistic about discovery of huge oil, gas reserves: Sarwar\r\n\r\nSarwar said Pakistan Peopleâ€™s Party (PPP) Chairman Bilawal Bhutto Zardariâ€™s threat of taking down the government was useless and childish.\r\n\r\nâ€œThey are crying hoarse to protect their family corruption,â€ he said.\r\n\r\nHe said every new year of the government would be better than the previous.\r\n\r\nThe minister said those who had looted the country would be seen behind the bar', '2021-04-04 19:00:00', 0),
(82, 23, 3, 2, 9, 'Task force formed to stop gas theft: petroleum minister', 'ghulam-sarwar-750x369.jpg', 'ISLAMABAD: Announcing to launch countrywide crackdown on those stealing gas, Federal Minister for Petroleum Ghulam Sarwar Khan on Friday formed a task force to stop gas theft, ARY News reported.\r\n\r\n', 'Regional officers will be responsible for gas theft,â€ Ghulam Sarwar Khan said in a statement.\r\n\r\nHe said the International Monetary Fund (IMF) had also expressed reservations on gas losses.\r\n\r\nThe petroleum minister said he had directed for recovery of Rs103 billion arrears from industrial sector. He said the former governments were responsible for economic crisis in the country. He said the government was not in favour of more increase on gas price.\r\n\r\nRead More: Govt optimistic about discovery of huge oil, gas reserves: Sarwar\r\n\r\nSarwar said Pakistan Peopleâ€™s Party (PPP) Chairman Bilawal Bhutto Zardariâ€™s threat of taking down the government was useless and childish.\r\n\r\nâ€œThey are crying hoarse to protect their family corruption,â€ he said.\r\n\r\nHe said every new year of the government would be better than the previous.\r\n\r\nThe minister said those who had looted the country would be seen behind the bar', '2021-03-10 18:18:03', 1),
(83, 23, 3, 2, 9, 'Task force formed to stop gas theft: petroleum minister', 'ghulam-sarwar-750x369.jpg', 'ISLAMABAD: Announcing to launch countrywide crackdown on those stealing gas, Federal Minister for Petroleum Ghulam Sarwar Khan on Friday formed a task force to stop gas theft, ARY News reported.\r\n\r\n', 'Regional officers will be responsible for gas theft,â€ Ghulam Sarwar Khan said in a statement.\r\n\r\nHe said the International Monetary Fund (IMF) had also expressed reservations on gas losses.\r\n\r\nThe petroleum minister said he had directed for recovery of Rs103 billion arrears from industrial sector. He said the former governments were responsible for economic crisis in the country. He said the government was not in favour of more increase on gas price.\r\n\r\nRead More: Govt optimistic about discovery of huge oil, gas reserves: Sarwar\r\n\r\nSarwar said Pakistan Peopleâ€™s Party (PPP) Chairman Bilawal Bhutto Zardariâ€™s threat of taking down the government was useless and childish.\r\n\r\nâ€œThey are crying hoarse to protect their family corruption,â€ he said.\r\n\r\nHe said every new year of the government would be better than the previous.\r\n\r\nThe minister said those who had looted the country would be seen behind the bar', '2021-04-04 19:00:00', 0),
(84, 23, 3, 2, 9, 'Task force formed to stop gas theft: petroleum minister', 'ghulam-sarwar-750x369.jpg', 'ISLAMABAD: Announcing to launch countrywide crackdown on those stealing gas, Federal Minister for Petroleum Ghulam Sarwar Khan on Friday formed a task force to stop gas theft, ARY News reported.\r\n\r\n', 'Regional officers will be responsible for gas theft,â€ Ghulam Sarwar Khan said in a statement.\r\n\r\nHe said the International Monetary Fund (IMF) had also expressed reservations on gas losses.\r\n\r\nThe petroleum minister said he had directed for recovery of Rs103 billion arrears from industrial sector. He said the former governments were responsible for economic crisis in the country. He said the government was not in favour of more increase on gas price.\r\n\r\nRead More: Govt optimistic about discovery of huge oil, gas reserves: Sarwar\r\n\r\nSarwar said Pakistan Peopleâ€™s Party (PPP) Chairman Bilawal Bhutto Zardariâ€™s threat of taking down the government was useless and childish.\r\n\r\nâ€œThey are crying hoarse to protect their family corruption,â€ he said.\r\n\r\nHe said every new year of the government would be better than the previous.\r\n\r\nThe minister said those who had looted the country would be seen behind the bar', '2021-04-04 19:00:00', 0),
(85, 23, 3, 2, 9, 'Task force formed to stop gas theft: petroleum minister', 'ghulam-sarwar-750x369.jpg', 'ISLAMABAD: Announcing to launch countrywide crackdown on those stealing gas, Federal Minister for Petroleum Ghulam Sarwar Khan on Friday formed a task force to stop gas theft, ARY News reported.\r\n\r\n', 'Regional officers will be responsible for gas theft,â€ Ghulam Sarwar Khan said in a statement.\r\n\r\nHe said the International Monetary Fund (IMF) had also expressed reservations on gas losses.\r\n\r\nThe petroleum minister said he had directed for recovery of Rs103 billion arrears from industrial sector. He said the former governments were responsible for economic crisis in the country. He said the government was not in favour of more increase on gas price.\r\n\r\nRead More: Govt optimistic about discovery of huge oil, gas reserves: Sarwar\r\n\r\nSarwar said Pakistan Peopleâ€™s Party (PPP) Chairman Bilawal Bhutto Zardariâ€™s threat of taking down the government was useless and childish.\r\n\r\nâ€œThey are crying hoarse to protect their family corruption,â€ he said.\r\n\r\nHe said every new year of the government would be better than the previous.\r\n\r\nThe minister said those who had looted the country would be seen behind the bar', '2021-03-10 14:37:03', 1),
(86, 23, 1, 3, 8, 'Azhar Ali highly rates Pakistanâ€™s chances to win WC 19', 'Azhar.jpg', 'Azhar Ali highly rates Pakistanâ€™s chances to win WC 19\r\n', 'Pakistanâ€™s regular Test batsman Azhar Ali firmly believes in Pakistanâ€™s current young squad and called them favorites to win the upcoming edition of the World Cupâ€“slated to start from May 31 in England and Wales.\r\n\r\nâ€œIt is my belief that Pakistan has a better chance to win the World Cup this time around,â€ said Azhar while talking to the renowned sports website.\r\n\r\nThe right-handed batsman said that Pakistanâ€™s convincing title victory in the Champions Trophy two years back is the reason why most of the cricket fraternity is considering them favorites to lift the coveted title on July 16.\r\n\r\nâ€œIn Champions Trophy, nobody would have thought Pakistan winning the title but now people are mentioning Pakistan as potential winners of the World Cup,â€ said Azhar who suggested the team to go with a positive mindset and try to play with their strength.\r\n\r\nAzhar, who played a crucial role with the bat in Pakistanâ€™s Champions Trophy triumph, thinks that top-order batting will play an important role for Pakistan as if their top three batsmen click on the right time then they will be on top against any opposition.\r\n\r\nâ€œPakistanâ€™s bowling attack has always provided them an edge but our batsmen need to get runs on the board for the bowlers to work with,â€ he said.\r\n\r\nThe 34-years-old Azhar is currently in England to represent Somerset in the upcoming County Championship. It is pertinent to mention here that Azhar had taken retirement from One Day and T20Is last year to put his complete focus on Test cricket.', '2021-04-04 19:00:00', 0),
(87, 23, 1, 3, 8, 'Azhar Ali highly rates Pakistanâ€™s chances to win WC 19', 'Azhar.jpg', 'Azhar Ali highly rates Pakistanâ€™s chances to win WC 19\r\n', 'Pakistanâ€™s regular Test batsman Azhar Ali firmly believes in Pakistanâ€™s current young squad and called them favorites to win the upcoming edition of the World Cupâ€“slated to start from May 31 in England and Wales.\r\n\r\nâ€œIt is my belief that Pakistan has a better chance to win the World Cup this time around,â€ said Azhar while talking to the renowned sports website.\r\n\r\nThe right-handed batsman said that Pakistanâ€™s convincing title victory in the Champions Trophy two years back is the reason why most of the cricket fraternity is considering them favorites to lift the coveted title on July 16.\r\n\r\nâ€œIn Champions Trophy, nobody would have thought Pakistan winning the title but now people are mentioning Pakistan as potential winners of the World Cup,â€ said Azhar who suggested the team to go with a positive mindset and try to play with their strength.\r\n\r\nAzhar, who played a crucial role with the bat in Pakistanâ€™s Champions Trophy triumph, thinks that top-order batting will play an important role for Pakistan as if their top three batsmen click on the right time then they will be on top against any opposition.\r\n\r\nâ€œPakistanâ€™s bowling attack has always provided them an edge but our batsmen need to get runs on the board for the bowlers to work with,â€ he said.\r\n\r\nThe 34-years-old Azhar is currently in England to represent Somerset in the upcoming County Championship. It is pertinent to mention here that Azhar had taken retirement from One Day and T20Is last year to put his complete focus on Test cricket.', '2021-04-04 19:00:00', 0),
(89, 23, 2, 2, 7, 'PCB call 23 players for fitness test excluding Umar Akmal', 'Umar2.jpg', 'PCB call 23 players for fitness test excluding Umar Akmal\r\n', 'PCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\nPCB call 23 players for fitness test excluding Umar Akmal\r\n', '2021-03-10 17:56:40', 8),
(91, 23, 3, 3, 7, 'Saeed Ghani becomes new president of Karachi Hockey Association', 'Saeed.jpg', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\n', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\nSaeed Ghani becomes new president of Karachi Hockey Association\r\n', '2021-03-10 14:36:07', 2),
(92, 23, 3, 3, 7, 'Saeed Ghani becomes new president of Karachi Hockey Association', 'Saeed.jpg', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\n', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\nSaeed Ghani becomes new president of Karachi Hockey Association\r\n', '2021-04-04 19:00:00', 0),
(93, 23, 3, 3, 7, 'Saeed Ghani becomes new president of Karachi Hockey Association', 'Saeed.jpg', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\n', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\nSaeed Ghani becomes new president of Karachi Hockey Association\r\n', '2021-04-04 19:00:00', 0),
(94, 23, 3, 3, 7, 'Saeed Ghani becomes new president of Karachi Hockey Association', 'Saeed.jpg', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\n', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\nSaeed Ghani becomes new president of Karachi Hockey Association\r\n', '2021-04-04 19:00:00', 0),
(95, 23, 3, 3, 7, 'Saeed Ghani becomes new president of Karachi Hockey Association', 'Saeed.jpg', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\n', 'Saeed Ghani becomes new president of Karachi Hockey Association\r\nSaeed Ghani becomes new president of Karachi Hockey Association\r\n', '2021-04-04 19:00:00', 0),
(96, 23, 2, 11, 2, 'Occupied Kashmir: Jamia Masjid sealed; Mirwaiz put under house arrest', 'Mirwaiz-Umar-Farooq-750x369.jpg', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', '2021-04-04 19:00:00', 0),
(97, 23, 2, 11, 2, 'Occupied Kashmir: Jamia Masjid sealed; Mirwaiz put under house arrest', 'Mirwaiz-Umar-Farooq-750x369.jpg', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', '2021-04-04 19:00:00', 0),
(98, 23, 2, 11, 2, 'Occupied Kashmir: Jamia Masjid sealed; Mirwaiz put under house arrest', 'Mirwaiz-Umar-Farooq-750x369.jpg', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', '2021-04-04 19:00:00', 0),
(99, 23, 2, 11, 2, 'Occupied Kashmir: Jamia Masjid sealed; Mirwaiz put under house arrest', 'Mirwaiz-Umar-Farooq-750x369.jpg', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', '2021-04-04 19:00:00', 0),
(100, 23, 2, 11, 2, 'Occupied Kashmir: Jamia Masjid sealed; Mirwaiz put under house arrest', 'Mirwaiz-Umar-Farooq-750x369.jpg', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', '2021-04-04 19:00:00', 0),
(101, 23, 2, 11, 2, 'Occupied Kashmir: Jamia Masjid sealed; Mirwaiz put under house arrest', 'Mirwaiz-Umar-Farooq-750x369.jpg', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', 'SRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\nSRINAGAR: The Indian authorities on Friday sealed historic Jamia Masjid of occupied Kashmir and placed the Chairman of Hurriyat forum, Mirwaiz Umar Farooq, under house arrest.\r\n\r\n', '2021-04-04 19:00:00', 0),
(103, 23, 1, 1, 11, 'PCB pleads force majeure as franchises look to Lahore for PSL resumption\n', '317475.4.jpg', 'PCB pleads force majeure as franchises look to Lahore for PSL resumption\n', 'PCB pleads force majeure as franchises look to Lahore for PSL resumption\n', '2021-03-10 18:18:11', 1),
(104, 23, 1, 1, 11, 'A timeline of how Covid-19 forced PSL 2021 to be suspended', '317475.4.jpg', 'A timeline of how Covid-19 forced PSL 2021 to be suspended', 'A timeline of how Covid-19 forced PSL 2021 to be suspended', '2021-03-09 19:00:00', 0),
(105, 23, 1, 1, 12, 'Saba Qamarâ€™s Latest Monochrome Photoshoot is Giving Classical Vibes', 'sabaqamarzaman_59600344_820007745053080_5036971410285242669_n.jpg', 'Saba Qamarâ€™s Latest Monochrome Photoshoot is Giving Classical Vibes', 'Saba Qamarâ€™s Latest Monochrome Photoshoot is Giving Classical Vibes', '2021-03-10 18:18:25', 1),
(106, 23, 1, 1, 13, 'The partnership between Sandvik and Cisco Systems is a match made in mining heaven, delivering produ', 'opti1_880x480-copy-214252607-rszw-90.jpg', 'The partnership between Sandvik and Cisco Systems is a match made in mining heaven, delivering productivity and safety improvements to underground mines everywhere.', 'The partnership between Sandvik and Cisco Systems is a match made in mining heaven, delivering productivity and safety improvements to underground mines everywhere.', '2021-03-10 18:18:35', 1),
(107, 23, 1, 1, 13, '5G is finally here â€“ This is what you need to know\n', 'top-image.jpg', '5G is finally here â€“ This is what you need to know\n', '5G is finally here â€“ This is what you need to know\n', '2021-03-09 19:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `cate_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `cate_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`cate_id`, `user_id`, `cate_title`) VALUES
(1, 23, 'National'),
(2, 23, 'World'),
(3, 23, 'Pakistan'),
(4, 23, 'CPEC'),
(5, 24, 'Panama'),
(6, 23, 'Elections'),
(7, 24, 'Popular'),
(8, 24, 'Slider'),
(9, 23, 'Business'),
(10, 23, 'Nature'),
(11, 0, 'Sports'),
(12, 0, 'Entertainment'),
(13, 0, 'Technology');

-- --------------------------------------------------------

--
-- Table structure for table `state_news_cat`
--

CREATE TABLE `state_news_cat` (
  `state_news_id` int(255) NOT NULL,
  `state_news_item` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_news_cat`
--

INSERT INTO `state_news_cat` (`state_news_id`, `state_news_item`) VALUES
(1, 'Punjab'),
(2, 'SIndh'),
(3, 'Baluchistan'),
(4, 'KPK'),
(6, 'Gilgit Baltistan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `mob` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_presence` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `pass`, `user_type`, `Status`, `fullname`, `mob`, `user_image`, `country`, `city`, `user_ip`, `user_presence`) VALUES
(23, 'Admin', 'demo@demo.com', 'demo', '0', 'Active', 'Admin', '030023232323', '', '', '', '', 89),
(38, 'hussain10', 'hussain@hussain.com', 'aaasss', '1', 'Active', 'Hussain', '0101010', 'Capture2.PNG', 'Pakistan', 'lahore', '::1', 1010106);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_id` (`item_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `news_cat`
--
ALTER TABLE `news_cat`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `state_id` (`state_id`),
  ADD KEY `news_cate` (`news_cate`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`cate_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `state_news_cat`
--
ALTER TABLE `state_news_cat`
  ADD PRIMARY KEY (`state_news_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_cat`
--
ALTER TABLE `news_cat`
  MODIFY `item_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `cate_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `state_news_cat`
--
ALTER TABLE `state_news_cat`
  MODIFY `state_news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
