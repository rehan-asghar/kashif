-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 07:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(4, 38, 0, 80),
(5, 1, 0, 105),
(6, 1, 0, 78),
(7, 1, 0, 104),
(8, 1, 0, 107),
(9, 40, 0, 81),
(10, 40, 0, 111),
(11, 41, 0, 77),
(12, 41, 0, 97),
(13, 1, 0, 110),
(14, 41, 0, 85),
(15, 42, 0, 109),
(16, 42, 0, 105),
(17, 42, 0, 78);

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
(42, 22, 'Gujranwala'),
(43, 22, 'Turbat');

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
(5, 41, 105, '', 'sahar7', 'saharsarwar7@gmail.com', 'nice');

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
(8, 'mehwish Amir', 'mehwish Amir', 'mehwish123@gmail.com', 41, 'i want to add some post  and news', 41),
(9, 'mehwish Amir', 'mehwish Amir', 'mehwish123@gmail.com', 41, 'Test 1', 41),
(10, 'mehwish Amir', 'mehwish Amir', 'mehwish123@gmail.com', 41, 'Test 2', 41);

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
  `news_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_cat`
--

INSERT INTO `news_cat` (`item_id`, `user_id`, `state_id`, `city_id`, `news_cate`, `news_title`, `news_img`, `news_desc`, `full_news`, `news_date`, `views`) VALUES
(74, 23, 3, 1, 1, 'PM Imran speaks to mammoth rally in Jamrud, takes digs on Zardari, Fazlur Rehman', '5c93c4cb43e62.jpg', 'JAMRUD: Prime Minister Imran Khan on Friday heavily criticised his political opponents for what he termed their efforts to hide their corruption and incompetence during a rally in Jamrud town of Khyber Agency.\r\n\r\n', 'The premier, while addressing a huge crowd of supporters, said that people like Zardari (PPP co-chairman) are claiming that they can topple the current government while Fazlur Rehman (JUI-chief) is preparing for a million march, adding that these â€œspinelessâ€ leaders canâ€™t harm the government.\r\n\r\nâ€œZardari, this government is not going anywhere, but yes, you are going to jail soon,â€ said Imran Khan while referring to former president.\r\n\r\nHe maintained that Zardari and his son, PPP-chairman Bilawal Bhutto, canâ€™t become leaders for they have no political struggle to their credit but a forged will.', '2021-04-04 19:00:00', 0),
(75, 23, 2, 3, 8, 'Ex-PM Shahid Khaqan Abbasi put on Exit Control List: sources', 'ex pm.jpg', 'ISLAMABAD: Former prime minister and Pakistan Muslim League Nawaz (PML-N) senior leader, Shahid Khaqan Abbasi, has been put on Exit Control List (ECL) which restricted him to leave the country, citing sources, ARY News reported on Friday.\n\n', 'Sources said that Shahid Khaqan Abbasiâ€™s name was included in the no-fly-list following request of the National Accountability Bureau (NAB) Rawalpindi holding investigation into Liquefied Natural Gas (LNG) contract scam case against the politician.\n\nThe move was made by the Interior Ministry after formal approval of the summary to bar movement of the former premier abroad.\n\nIt is pertinent to mention here that NAB Rawalpindi had sought inclusion of Abbasiâ€™s name on ECL in a letter sent to its headquarters in Islamabad, which formally requested Interior Ministry to take further step', '2021-04-10 19:00:00', 1),
(76, 23, 4, 10, 8, 'Zalmay Khalilzad calls on Army Chief at General Headquarters', 'Zalmay-Khalilzad-Army-Chief-750x369.jpg', 'RAWALPINDI: US Special Representative for Afghanistan Reconciliation Zalmay Khalilzad called on Chief of Army Staff (COAS) General Qamar Javed Bajwa on Friday, Inter-Services Public Relations (ISPR) said.\r\n\r\n', 'ISPR said in a statement that Zalmay Khalilzad visited General Headquarters (GHQ) and held an important meeting with the Army Chief.\r\n\r\nBoth high-ups exchanged views on matters relating to regional security and ongoing Afghanistan reconciliation process.\r\n\r\nThe US envoy acknowledged Pakistanâ€™s efforts to promote peace across the region.\r\n\r\nKhalilzad also held a meeting with Foreign Minister Shah Mehmood Qureshi earlier to brief him about progress in the Afghan peace process.', '2021-04-04 19:00:00', 0),
(77, 23, 2, 16, 7, 'Agha Ali opens up about his breakup with Sarah Khan', 'pop.jpg', 'With the end of the famous drama serial Band Khirkiyan, the real life and reel life couple of Agha Ali and Sarah Khan have parted ways.\r\n\r\nRecently, Ali appeared on a TV show and spoke about his breakup with Khan after getting engaged in 2017.', 'He says that Sarah is a fantastic girl and that he has the utmost respect for her and her work. Agha also elaborates on how their breakup affected him.\r\n\r\n“It has been the toughest for me to be honest and I could not work for months. I was isolated, I could not deal with it but then, life has to go on,” said Ali.\r\n\r\nHe credited his friends for helping and supporting him through the process. “I love my fans. They are very understanding. Close fans write very positive things and I love them.”\r\n\r\nAli also addressed internet trolls and told them to “mind your own business”. He appealed to the people to realize the effect of their words on other people. He also said that people need to realize that there is a limit to how much they comment on a celebrity’s life — they need to understand when they cross the line.\r\n\r\nThe duo was rumored to be dating and let something spill on their relationship every now and then. In fact, the real-life couple was often cast together onscreen too. The couple were cast in Band Khirkiyan and Tumhare Hain together.', '2021-04-17 12:12:08', 8),
(78, 23, 2, 10, 2, 'Sindh notifies new shop timings, closure days\r\n', 'world 1.jpg', 'Sindh\'s businesses were told on Friday to follow new operating hours, in a notification issued by the home department.\r\n\r\nAccording to the notification, businesses will now be allowed to operate from sehri, but must shut down by 6pm. They will remain closed on Saturdays and Sundays.\r\n\r\nThe province, in the last 24 hours, reported 561 new cases of coronavirus when 11,623 tests were conducted, raising the tally of total infections to 271,523. In this period, three more patients died, lifting the death toll to 4,544.\r\n\r\nThe latest number of daily cases means a positivity ratio of 4.8% on average in Sindh.', 'The decision to notify new hours comes as the country observes Ramadan while simultaneously tackling the third coronavirus wave.\r\n\r\nThe home department has also called for broader lockdowns in areas reporting more than 8% coronavirus positivity.\r\n\r\nThese, and other restrictions outlined below, will remain in effect till May 16, unless changed, and will be reviewed in a meeting of the National Command and Operations Centre on May 6, the notification said.\r\n\r\nThis Ramadan, people will not be allowed to eat out at restaurants with indoor seating. They will, however, be allowed to eat at outlets that have outdoor dining, from iftar to 11:59pm.\r\n\r\nMeanwhile, home deliveries and takeaway will be allowed till sehri.\r\n\r\nInter-city public transport is banned on Saturday and Sunday till midnight (night between April 25 and 26).\r\n\r\nAll citizens visiting any public places or private or government offices are required to wear masks.', '2021-04-23 10:19:49', 10),
(79, 23, 3, 2, 9, 'Task force formed to stop gas theft: petroleum minister', 'ghulam-sarwar-750x369.jpg', 'ISLAMABAD: Announcing to launch countrywide crackdown on those stealing gas, Federal Minister for Petroleum Ghulam Sarwar Khan on Friday formed a task force to stop gas theft, ARY News reported.\r\n\r\n', 'Regional officers will be responsible for gas theft,â€ Ghulam Sarwar Khan said in a statement.\r\n\r\nHe said the International Monetary Fund (IMF) had also expressed reservations on gas losses.\r\n\r\nThe petroleum minister said he had directed for recovery of Rs103 billion arrears from industrial sector. He said the former governments were responsible for economic crisis in the country. He said the government was not in favour of more increase on gas price.\r\n\r\nRead More: Govt optimistic about discovery of huge oil, gas reserves: Sarwar\r\n\r\nSarwar said Pakistan Peopleâ€™s Party (PPP) Chairman Bilawal Bhutto Zardariâ€™s threat of taking down the government was useless and childish.\r\n\r\nâ€œThey are crying hoarse to protect their family corruption,â€ he said.\r\n\r\nHe said every new year of the government would be better than the previous.\r\n\r\nThe minister said those who had looted the country would be seen behind the bar', '2021-04-17 08:02:14', 1),
(80, 23, 1, 3, 9, 'SSGCL board appointment raises concerns', 'sslg.jpg', 'ISLAMABAD:\r\nThe appointment of Sui Southern Gas Company Limited (SSGCL) board chairman on the board of a company owned by the Engro Group has raised grave concerns.\r\n\r\nShamshad Akhtar, who is currently on the board of SSGC, has also been appointed director on the board of Engro Fertilisers, according to a notice at the Pakistan Stock Exchange.', 'When contacted for comments, SSGC spokesperson said, “We understand that there is no direct conflict of interest (COI) emerging from this appointment, as SSGC does not have business ties with Engro Fertilisers Limited.\r\n\r\nFurther, on COI, SSGC is complying with local and international best corporate governance practices, requirements/procedures provided in Sections 205 and 207 of the Companies Act 2017, Rule 5 of the Public Sector Companies (Corporate Governance) Rules 2013, Regulation 10 of the Listed Companies (Code of Corporate Governance) Regulations 2019, which provide guidance on identification, disclosure and how to manage actual and potential COI, if such situation arises.”\r\n\r\nThe official added, “Accordingly, as per the Code of Conduct applicable on members of the board, every director is required to disclose COI on any matter, which is on the agenda of the meeting of the board or any of its committees and recuse himself from the proceedings of the meeting while that matter is being considered.”', '2021-04-16 18:47:28', 4),
(81, 23, 4, 5, 9, 'Afghan consul general visits ANP headquarters in Peshawar', 'pehawar.png', 'PESHAWAR:\r\nAfghan Consul General Najeebullah Ahmadzai on Monday visited the headquarters of Awami National Party (ANP) — Bacha Khan Markaz — in Peshawar and discussed matters of mutual interest including the Afghan peace process.', 'On behalf of the Afghan government, Najeebullah offered to construct a monument to pay homage to renowned Pashto poet Ghani Khan. “All expenses would be bear by the Afghan government,” he added.\r\n\r\nHe paid rich tribute to Bacha Khan\'s family members’ services for the \"Afghan cause and bringing the people of two countries together\".\r\n\r\nThe Afghan consul general also expressed hope that the cooperation for the welfare of the two sides would continue in future.\r\n\r\nOn the occasion ANP leader Aimal Wali Khan applauded the Afghan government\'s steps for the welfare of its masses and brining peace on Afghan soil.\r\n\r\nHe also vowed to continue efforts for peaceful Afghanistan.\r\n\r\nThe delegation-level meeting was also attended by parliamentary leader of ANP in Khyber-Pakhtunkwa Assembly Sardar Hussain Babak, Khadim Hussain, Dr Fazal ur Rahim Marwat and Samour Bilour.', '2021-04-17 11:47:22', 3),
(82, 23, 3, 6, 9, 'SC suspends BHC judgment declaring certain DHA Act clauses unconstitutional', 'quetta.jpg', 'The Supreme Court (SC) suspended on Tuesday the Balochistan High Court\'s (BHC) judgment wherein several provisions of the Defence Housing Authority (DHA) Act, 2015 were declared unconstitutional.\r\n\r\nIn a petition filed by DHA Quetta, a three-member bench of the apex court comprising Justices Umar Ata Bandial, Qazi Amin Ahmed and Mazahir Hussain Naqvi granted leave to appeal against the BHC judgment.', 'In a petition filed by DHA Quetta, a three-member bench of the apex court comprising Justices Umar Ata Bandial, Qazi Amin Ahmed and Mazahir Hussain Naqvi granted leave to appeal against the BHC judgment.\r\n\r\nA full court of the BHC comprising all its five judges had declared several provisions of the DHA Act, 2015 unconstitutional.\r\n\r\nThe high court had declared that the DHA was like a non-government agency and therefore, acquisition of property by it would violate the constitutional right to property.\r\n\r\nHe maintained that the statute merely authorised the DHA to exercise municipal functions and develop master plans in areas that had been procured, purchased, leased or acquired by it. The BHC had not appreciated this aspect of the case.\r\n\r\nDeveloping master plans for or performing municipal functions in lands that were those of the DHA was only proper and there was nothing unconstitutional about it, he argued.\r\n\r\nThe counsel submitted that the major premise of the full-court judgment was that the DHA Act 2015 was in conflict with the Land Acquisition Act.', '2021-04-16 19:00:57', 1),
(84, 23, 3, 43, 9, 'Pakistan Army develops Xinjiang style indoctrination camps in Baluchistan', 'bol.jpg', 'Taking a leaf from China\'s book, Pakistan Army develops Xinjiang style indoctrination camps in Baluchistan.\r\nThe Pakistani Army is running two indoctrination camps built on the lines of Uyghurs re-education camps of China for Baloch fighters in a bid to control the situation in its restive southwestern province of Baluchistan\r\n\r\n\r\n', 'The Pakistani Army is running two indoctrination camps built on the lines of Uyghurs re-education camps of China for Baloch fighters in a bid to control the situation in its restive southwestern province of Baluchistan.\r\n\r\n\r\n The layout of the camps closely aligns with those run by Chinese authorities in its westernmost province of Xinjiang. The main objective of these clandestine camps is psychological, social and cultural conditioning of Baloch fighters and forcefully instill \'values\' in them by \"transforming them into law-abiding\" citizens, as per a document seen by Zee Media on the camps stated.. Pakistan\'s biggest province is dealing with its local insurgency over Islamabad\'s strong hand as locals say the resources are being drained the region.\r\n\r\n', '2021-04-16 19:39:09', 1),
(85, 23, 6, 30, 9, 'Gilgit-Baltistan neglected by Imran Khan despite being a gateway to CPEC', 'gilgilt.jpg', 'While Imran Khan looks excited over China-Pakistan Economic Corridor (CPEC), Gilgit-Baltistan, also known as the Gateway to CPEC, continues to remain neglected as the Prime Minister siphoned off allotted cash and projects to other regions.\r\n', 'While the inclusion of Gilgit-Baltistan into Pakistan is illegal, the region, which is touted as the \'Gateway to CPEC\', has become the symbol of CPEC\'s \"false promises to the already neglected region\".\r\n\r\nAccording to The National Interest, while Gilgit is geographically essential to CPEC\'s success and Pakistani authorities pledged development along the highway, none materialized.\r\n\r\nSimilarly, the opportunities for education, employment and welfare that were promised under the CPEC never saw the light of the day.\r\n\r\nWhile Gilgit-Baltistan suffers, Pakistan\'s major political parties have directed most of the allotted-money and associated projects to their own favored regions in Sindh, Punjab among others. The best example of this is when Imran Khan canceled plans for Gilgit-Chitral road to favor a four-lane 50-mile highway between Chakdara to Fatehpur in Swat.\r\n\r\nAccording to The National Interest, for Gilgit-Baltistan the problem has not only been a failure to reap benefits from CPEC but also that Khan\'s desire to please China has meant a net loss. While Pakistan, at the behest of China, had canceled the licenses of local miners, the Chinese contractors displaced thousands of residents without giving them compensation.\r\n\r\nThe author has opined that Imran Khan\'s behavior towards the Gilgit-Baltistan region will affect the CPEC adversely. By siphoning off funds from the Gilgit-Chitral road, the region continues to be dependent on a single highway, which the locals can easily block to protest against the government.', '2021-04-21 07:25:28', 6),
(86, 23, 1, 3, 8, 'Azhar Ali highly rates Pakistanâ€™s chances to win WC 19', 'Azhar.jpg', 'Azhar Ali highly rates Pakistanâ€™s chances to win WC 19\r\n', 'Pakistanâ€™s regular Test batsman Azhar Ali firmly believes in Pakistanâ€™s current young squad and called them favorites to win the upcoming edition of the World Cupâ€“slated to start from May 31 in England and Wales.\r\n\r\nâ€œIt is my belief that Pakistan has a better chance to win the World Cup this time around,â€ said Azhar while talking to the renowned sports website.\r\n\r\nThe right-handed batsman said that Pakistanâ€™s convincing title victory in the Champions Trophy two years back is the reason why most of the cricket fraternity is considering them favorites to lift the coveted title on July 16.\r\n\r\nâ€œIn Champions Trophy, nobody would have thought Pakistan winning the title but now people are mentioning Pakistan as potential winners of the World Cup,â€ said Azhar who suggested the team to go with a positive mindset and try to play with their strength.\r\n\r\nAzhar, who played a crucial role with the bat in Pakistanâ€™s Champions Trophy triumph, thinks that top-order batting will play an important role for Pakistan as if their top three batsmen click on the right time then they will be on top against any opposition.\r\n\r\nâ€œPakistanâ€™s bowling attack has always provided them an edge but our batsmen need to get runs on the board for the bowlers to work with,â€ he said.\r\n\r\nThe 34-years-old Azhar is currently in England to represent Somerset in the upcoming County Championship. It is pertinent to mention here that Azhar had taken retirement from One Day and T20Is last year to put his complete focus on Test cricket.', '2021-04-04 19:00:00', 0),
(87, 23, 1, 1, 8, 'Asia Cup postponed to 2022', 'slider 6.jpg', 'The Pakistan Cricket Board (PCB) said Sunday the Asian Cricket Council (ACC) Asia Cup has been postponed to 2022. ', 'Pakistanâ€™s regular Test batsman Azhar Ali firmly believes in Pakistanâ€™s current young squad and called them favorites to win the upcoming edition of the World Cupâ€“slated to start from May 31 in England and Wales.\n\nâ€œIt is my belief that Pakistan has a better chance to win the World Cup this time around,â€ said Azhar while talking to the renowned sports website.\n\nThe right-handed batsman said that Pakistanâ€™s convincing title victory in the Champions Trophy two years back is the reason why most of the cricket fraternity is considering them favorites to lift the coveted title on July 16.\n\nâ€œIn Champions Trophy, nobody would have thought Pakistan winning the title but now people are mentioning Pakistan as potential winners of the World Cup,â€ said Azhar who suggested the team to go with a positive mindset and try to play with their strength.\n\nAzhar, who played a crucial role with the bat in Pakistanâ€™s Champions Trophy triumph, thinks that top-order batting will play an important role for Pakistan as if their top three batsmen click on the right time then they will be on top against any opposition.\n\nâ€œPakistanâ€™s bowling attack has always provided them an edge but our batsmen need to get runs on the board for the bowlers to work with,â€ he said.\n\nThe 34-years-old Azhar is currently in England to represent Somerset in the upcoming County Championship. It is pertinent to mention here that Azhar had taken retirement from One Day and T20Is last year to put his complete focus on Test cricket.', '2021-04-10 19:00:00', 0),
(89, 23, 2, 2, 7, 'PCB call 23 players for fitness test excluding Umar Akmal', 'Umar2.jpg', 'PCB call 23 players for fitness test excluding Umar Akmal\n', 'PCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\nPCB call 23 players for fitness test excluding Umar Akmal\n', '2021-04-17 12:11:46', 10),
(91, 23, 1, 3, 7, 'Saeed Ghani becomes new president of Karachi Hockey Association', 'Saeed.jpg', 'Saeed Ghani becomes new president of Karachi Hockey Association\n', 'Saeed Ghani becomes new president of Karachi Hockey Association\nSaeed Ghani becomes new president of Karachi Hockey Association\n', '2021-04-17 09:02:47', 3),
(92, 23, 1, 26, 7, 'Celebratory aerial firing in wedding event kills 10-year-old girl', 'shekio.jpg', 'SHEIKHUPURA: In a display of criminal negligence only to show off antediluvian expressions of power and dominance, the aerial firing bid to celebrate wedding ceremony on Saturday claimed a minor girl’s life, ARY News reported. \r\n', 'The Kathian Wala area of Punjab saw one minor girl shot to death as she was caught in a crossfire while wedding guests brandished their weapons and fired away.\r\n\r\nThe 10-year-old Amna Manzoor was one of the guests who breathed her last after bullet hit her turning the merry event into a calamity.\r\n\r\nPolice have lodged the complaints into the death of minor according to the available details.\r\n\r\n', '2021-04-17 09:02:49', 4),
(93, 23, 1, 17, 7, 'Close to 10% of coronavirus patients in Islamabad, Rawalpindi are children: report', 'raw.jpg', 'DHO Islamabad says at least 7,052 child patients, from newborn to 10 years of age, have been diagnosed with COVID-19. \r\nHealth Department official in Rawalpindi says nearly 2,000 children have been diagnosed with coronavirus.\r\nOfficials say deaths among children could not be attributed to coronavirus as they had co-morbidities.\r\n', 'RAWALPINDI: Close to 10% of coronavirus patients reported in Islamabad Capital Territory and Rawalpindi district are children below the age of 10 years, health department officials confirmed to The News.\r\n\r\nIslamabad‘s District Health Officer (DHO) Dr Zaeem Zia told the publication that at least 7,052 child patients, from newborn to 10 years of age, have been diagnosed with COVID-19. However, the DHO added that most of the children have recovered from the disease.\r\n\r\n“The phenomenon is not new nor has there been any significant increase in the number of child cases in the recent past,” explained Dr Zia. He added that the 10% included children who have been diagnosed with the virus since the pandemic began.', '2021-04-17 12:11:49', 2),
(94, 23, 2, 42, 7, 'CM Buzdar announces Rs8.4bn development projects in Gujranwala', 'Gujranwala-2.jpg', 'Punjab Chief Minister Usman Buzdar on Wednesday visited Gujranwala and announced new development projects worth 8.41 billion along with the establishment of a university.\r\n\r\nHe announced that 14 more projects will be started including a burn unit with an estimated cost of Rs1.92 billion. The Punjab chief minister also announced the University of Gujranwala project with sub-campuses of Punjab University and UET.', 'He also announced that a road will be constructed to link Gujranwala with Sialkot-Lahore Motorway.\r\n\r\nBriefing the media about steps for public welfare, the CM said Sahulat Bazaars will be established at the level of tehsil and food items will be provided at the rates of 2018 in Ramazan Bazaars.\r\n\r\nThe CM also inaugurated four projects of 7.84 billion at Ghakar Sports Arena. He also inaugurated Ghakar Sports Arena, Gujranwala Arts Council Auditorium, OPD unit of teaching hospital medical college Gujranwala and 62.5-acre landfill site project.\r\n\r\nThe Lahore-Sialkot Motorway will be linked with GT Road at Morr Eminabad, said Buzdar.', '2021-04-27 18:31:07', 5),
(96, 23, 1, 3, 2, 'Qibla Ayaz appointed new chairman of CII', 'world 2 .jpg', 'Qibla Ayaz has been appointed as the new chairman of  the Council of Islamic Ideology (CII), as President Arif Alvi on Friday approved the hiring of the body\'s new members.\r\n\r\n', 'ISLAMABAD: Qibla Ayaz has been appointed as the new chairman of  the Council of Islamic Ideology (CII), as President Arif Alvi on Friday approved the hiring of the body\'s new members.\r\n\r\nThe appointment of new members was approved for 12 vacant seats in the council under Article 228 of the Constitution. Dr Umair Mahmood Siddiqui from Karachi University and Pir Abul Hassan Muhammad Shah of Bhairah Sharif have been appointed as members.\r\n\r\nMuhammad Hassan Haseeb-ur-Rehman and Maulana Hamid-ul-Haq Haqqani of Darul Uloom Haqqania, Akora, Khattak, Allama Muhammad Hussain Akbar, Syed Ziaullah Shah Bukhari and Pirzada Junaid Amin have also been appointed as members.\r\n\r\nHafiz Muhammad Tahir Mahmood Ashrafi, Mufti Muhammad Zubair, Syed Muhammad Habib Irfani, and Maulana Naseem Ali Shah have also been appointed as members of the CII.\r\n', '2021-04-17 11:57:22', 2),
(97, 23, 1, 1, 2, 'PEMRA prohibits media coverage of banned TLP', 'world 3.jpg', 'Media coverage of the banned Tehreek-e-Labbaik Pakistan (TLP) was declared prohibited on Thursday by the Pakistan Electronic Media Regulatory Authority (PEMRA).\r\n\r\nPEMRA\'s notification followed one by the Ministry of Interior which declared the TLP a banned organization for engaging in acts of terrorism, and acting in a manner prejudicial to the peace and security of the country over the course of its recent three-day long nationwide protests.\r\n\r\n', 'PEMRA\'s notification followed one by the Ministry of Interior which declared the TLP a banned organization for engaging in acts of terrorism, and acting in a manner prejudicial to the peace and security of the country over the course of its recent three-day long nationwide protests.\r\n\r\n\r\n\r\nThe notice by PEMRA said that Regulation 18(h) of PEMRA (Television Broadcast Station Operation) Regulation, 2012 and Clause 16 of Electronic Media Code of Conduct, 2015 requires that programs conform to the laws of the country.\r\n\r\nThe notification issued by Pakistan Electronic Media Regulatory Authority (PEMRA) to ban coverage of the proscribed Tehreek-e-Labbaik Pakistan (TLP) by all television and radio licensees on April 15, 2021.\r\n\"Moreover, Clause 3 (3) of Electronic Media Code of Conduct, 2015 prohibits media coverage to proscribed organizations,\" it stated.\r\n\r\nPEMRA said that therefore, under powers conferred under Section 27 of PEMRA (Amendment) Act 2007, \"media coverage of Tehreek Labbaik Pakistan is banned\".\r\n\r\n\"All Satellite TV channels and FM Radios licensees are hereby required to restrain from providing any kind of media coverage to this (banned) organization,\" said the media regulatory authority.', '2021-04-17 11:58:53', 3),
(98, 23, 4, 28, 2, '‘Pakistan’s diplomacy exposed India’s fascism in Kashmir and region’', 'world 4.jpg', 'Pakistan’s active diplomacy has fully exposed the reality of India’s oppressive policies against Indian Muslims in Kashmir and in the region, said Ambassador Munir Akram on Tuesday, adding, “It’s not a pretty sight.”\r\n', 'In an interview with Pakistan Television programme, the Pakistani envoy said that people in various parts of the world, including Western countries, now recognise the nature of new India, which he said has a fascist face with an ideology of hate against Muslims as well as other minorities.\r\n\r\n“India’s attempt to depict Pakistan as a sponsor of terrorism and so forth is producing diminishing results because India’s own reality is now exposed to the world,” he added.\r\n\r\nAmbassador Akram also said that India had failed in its campaign to isolate Pakistan, a prominent member of the international community.\r\n\r\n“We are an important player in the region, within the Islamic world, within the United Nations,” he said, adding that, “Pakistan cannot be isolated.”\r\n\r\nPakistan, under the leadership of Prime Minister Imran Khan, has played an active role in exposing India’s policies in the region as well as the nature of the regime ruling the country, the Pakistani envoy said, while vowing to keep pushing for a change in New Delhi’s policies so that it accepts applying the principles of the UN Charter in its dealings with Pakistan.', '2021-04-16 21:26:17', 0),
(99, 23, 1, 17, 2, 'Army chief aspires for greater US-Pakistan relations in meeting with American envoy', 'world 5.jpg', 'US Charge d’ Affairs to Pakistan Angela Ageler (left) and Chief of Army Staff (COAS) General Qamar Javed Bajwa meet at the GHQ in Rawalpindi on April 15, 2021. — ISPR\r\n\r\nChief of Army Staff (COAS) General Qamar Javed Bajwa has hoped for greater Pakistan-US bilateral cooperation in all domains in the future in a meeting with US Charge d’ Affairs to Pakistan Angela Ageler.\r\n\r\nThe Inter-Services Public Relations, in a statement on Thursday, said during the meeting, matters of mutual interest and overall regional security situation including recent developments in the Afghan peace process were discussed.', 'The army chief welcomed US President Joe Biden’s announcement to withdraw American forces from Afghanistan by September 11, 2021, the ISPR said.\r\n\r\nGen Bajwa reiterating that a prosperous, stable, and peaceful Afghanistan is in the best interest of Pakistan in particular and the region in general, hoped for greater Pak-US bilateral cooperation in all domains in the future.\r\n\r\n\"[The] visiting dignitary appreciated Pakistan’s sincere efforts for bringing peace and stability in the region, especially the Afghan peace process, and also assured of US continued assistance for the common cause of peace in Afghanistan,\" ISPR added.\r\n\r\nEarlier in the day, the Foreign Office had said it is important the withdrawal of foreign troops from Afghanistan coincides with progress in the peace process after US President Joe Biden announced it’s \"time to end\" America’s longest war with the unconditional pulling out of troops.\r\n\r\nThe Foreign Office, in a statement, said Pakistan had been consistently supporting and facilitating the efforts for durable peace and stability in Afghanistan.\r\n\r\n\"We believe there is no military solution to the conflict in Afghanistan and a negotiated political solution through an Afghan-led and Afghan-owned process is important for lasting peace and stability in Afghanistan,\" it said.', '2021-04-17 11:57:09', 3),
(100, 23, 1, 3, 2, 'Pakistan may cut petrol prices from April 16, say sources', 'world 6.jpeg', 'OGRA has sent a summary of changes in the prices of petroleum products to the petroleum division in this regard. File photo\r\n\r\n\r\nISLAMABAD:  The Oil and Gas Regulatory Authority (OGRA) has proposed to reduce the prices of petroleum products in the country from April 16, Geo News reported on Thursday.\r\n\r\nOGRA has sent a summary of changes in the prices of petroleum products to the Petroleum Division in this regard.\r\n', 'ISLAMABAD:  The Oil and Gas Regulatory Authority (OGRA) has proposed to reduce the prices of petroleum products in the country from April 16, Geo News reported on Thursday.\r\n\r\nOGRA has sent a summary of changes in the prices of petroleum products to the Petroleum Division in this regard.\r\n\r\nThe regulatory authority has recommended a reduction in petrol and diesel prices after which petrol and diesel are likely to become cheaper by Rs2.2 per litre, the sources said.\r\n\r\nHowever, the final decision on OGRA\'s summary will be taken by the finance ministry in consultation with Prime Minister Imran Khan.\r\n', '2021-04-17 11:58:54', 3),
(101, 23, 1, 1, 2, 'In note shared by Gill, banned organization TLP\'s chief asks supporters to end protests\r\n', 'world 7.jpg', 'Supporters of the banned Tehreek-e-Labbaik Pakistan (TLP) party disperse after police fired tear gas during a protest against the arrest of their leader, in Lahore on April 13, 2021. — AFP/Arif Ali\r\n\r\n\r\nA hand-written note shared by Special Assistant to Prime Minister Imran Khan on Political Communication Shahbaz Gill on Thursday showed Chief of the banned Tehreek-e-Labbaik Pakistan (TLP) Muhammad Saad Rizvi asking his followers to immediately end all protests and road blockages and disperse peacefully.', 'Gill\'s post on Twitter, which accompanied the caption \"Hafiz Muhammad Saad Rizvi\'s latest statement\", showed the photo of a hand-written note, dated April 15 (Thursday) written purportedly by the TLP chief, who was taken into police custody four days ago.\r\n\r\n\"I, Hafiz Saad Rizvi, son of (late) Khadim Hussain Rizvi, with complete clarity of mind, and without any force, appeal to all the central leadership and workers of the Tehreek-e-Labbaik that in the interest of the nation and the public good, please do not take any illegal steps.\r\n\r\n\"All protest rallies and road blockages must immediately be brought to an end. All workers must disperse peacefully and head on to their respective homes and fully cooperate with law enforcement agencies,\" reads the statement.\r\n\r\nAccording to the notification: \"The federal government has reasonable grounds to believe that Tehreek Labbaik Pakistan is engaged in terrorism, acted in a manner prejudicial to the peace and security of the country, involved in creating anarchy in the country by intimidating the public, caused grievous bodily harm, hurt and death to the personnel of Law Enforcement Agencies and innocent by-standers, attacked civilians and officials, created wide-scale hurdles, threatened, abused and promoted hatred, vandalized and ransacked public and government properties including vehicles and caused arson, blocked essential health supplies to hospitals, and has used, threatened, coerced, intimidated, and overawed the government [and] the public and created sense of fear and insecurity in the society and the public at large.\"\r\n\r\n', '2021-04-16 21:42:11', 1),
(103, 23, 1, 1, 11, 'PCB pleads force majeure as franchises look to Lahore for PSL resumption\n', 'sport.jpg', 'PCB pleads force majeure as franchises look to Lahore for PSL resumption\n', 'PCB pleads force majeure as franchises look to Lahore for PSL resumption\n', '2021-04-15 19:00:00', 1),
(104, 23, 1, 1, 11, 'A timeline of how Covid-19 forced PSL 2021 to be suspended', '317475.4.jpg', 'A timeline of how Covid-19 forced PSL 2021 to be suspended', 'A timeline of how Covid-19 forced PSL 2021 to be suspended', '2021-04-11 17:08:15', 3),
(105, 23, 1, 1, 12, 'Saba Qamarâ€™s Latest Monochrome Photoshoot is Giving Classical Vibes', 'sabaqamarzaman_59600344_820007745053080_5036971410285242669_n.jpg', 'Saba Qamarâ€™s Latest Monochrome Photoshoot is Giving Classical Vibes', 'Saba Qamarâ€™s Latest Monochrome Photoshoot is Giving Classical Vibes', '2021-04-23 10:19:10', 6),
(106, 23, 1, 1, 13, 'The partnership between Sandvik and Cisco Systems is a match made in mining heaven, delivering produ', 'opti1_880x480-copy-214252607-rszw-90.jpg', 'The partnership between Sandvik and Cisco Systems is a match made in mining heaven, delivering productivity and safety improvements to underground mines everywhere.', 'The partnership between Sandvik and Cisco Systems is a match made in mining heaven, delivering productivity and safety improvements to underground mines everywhere.', '2021-04-17 09:02:34', 2),
(107, 23, 1, 1, 13, '5G is finally here â€“ This is what you need to know\n', 'top-image.jpg', '5G is finally here â€“ This is what you need to know\n', '5G is finally here â€“ This is what you need to know\n', '2021-04-11 15:54:37', 1),
(108, 23, 1, 1, 8, 'PM Imran Khan kicks off coronavirus vaccination drive in Pakistan', 'vacce.jpg', 'Prime Minister Imran Khan and federal minister supervising the first coronavirus shot as Pakistan kicks off its vaccination drive, on February 2, 2021', '', '2021-04-10 19:00:00', 0),
(109, 23, 1, 1, 12, '\'I had never thought about joining Pak film & drama industry\': Hira Mani', 'hira mani.jpg', 'Famous Pakistani actor Hira Mani, in an interview said that she had never thought about joining Pakistan film and drama industry.', 'Famous Pakistani actor Hira Mani, in an interview said that she had never thought about joining Pakistan film and drama industry.\n\nMoreover, the 33-year-old actress said that before joining the industry, she used to work at a beauty parlour where she was in charge of applying â€˜hennaâ€™.\n\nThe actor said that she is proud that she was associated with this work. Hira Mani said she charged Rs 1,500-2,000 on chand raats and bought bangles with that money.\n\nHira said she got designated in a Bank at a salary of Rs 12000, later on and had never thought about joining the Pakistan film and drama industry. ', '2021-04-23 09:34:53', 8),
(110, 23, 1, 3, 12, 'Ismail Faridâ€™s Eid collection surpasses par excellence', 'ismail.jpg', 'Ismail Faridï¿½s upcoming Ramadan & Eid Collection ', 'Ismail Faridï¿½s upcoming Ramadan & Eid Collection surpasses par excellence with the embodiment of ingenious aesthetics and quality. Experience brilliance this season by looking and feeling your best, while attiring yourself with Ismail Farid outfits. Visit Ismail Farid online & in stores as they launch their latest collection.', '2021-04-21 07:20:49', 5),
(111, 23, 1, 3, 12, 'Imran Abbas to host upcoming Ramadan transmission from Turkey\n', 'imran.jpg', 'Imran Abbas, the popular actor of Pakistani film and drama industry, is expected to host an upcoming Ramadan transmission from Turkey', 'Imran Abbas, the popular actor of Pakistani film and drama industry, is expected to host an upcoming Ramadan transmission from Turkey. \r\n\r\nImran Abbas is currently in Turkey, he is shooting for an approaching show which will be aired in Ramadan. Imran was seen meeting popular Turkish actors who have appeared in the dramas aired in Pakistan.\r\n\r\nAs per the shared details, Imran Abbas will host the Ramzan transmission from Turkey while Reema will host several other segments of the same show from Pakistan. ', '2021-04-21 07:27:05', 4),
(112, 23, 2, 16, 12, 'Hira Mani travels in train to reach Karachi ', 'hira-mani-travels-in-train-to-reach-karachi.jpg', 'ISLAMABAD - Hira Mani was spotted enjoying her journey to Karachi with her mother and other family members.', 'ISLAMABAD - Hira Mani was spotted enjoying her journey to Karachi with her mother and other family members.She travelled to the city of lights by train. She captioned her stories: “I’m traveling to Karachi by train after two years. I love to travel by train. I have not travelled by train since a long time, so I decided to go back to Karachi by train this time”, says Hira Mani.', '2021-04-17 12:12:27', 2),
(113, 23, 1, 8, 12, 'Mobile phones, watches showered on wedding guests in Sialkot\n', 'wedding.jpg', 'SIALKOT: The guests have been welcomed amid showers of mobile phones and watches besides receiving expensive gifts in a unique wedding ceremony held in a suburban village of Punjab’s Sialkot city', 'The family members of the bride have also given a set of unique gifts in dowry including six motorcycles, a pair of camels, cows, buffaloes, sheep, chickens, rabbits, dogs and ducks.\r\n\r\nMoreover, the wedding guests were also awarded by further gifts including Holy Quran, 350 dresses and prayer rugs from the bride side.\r\n\r\nEarlier in the day, a deputy superintendent of police (DSP) faced trouble after organising a lavish wedding reception for his son in Sindh which was also attended by Additional Inspector General (AIG).\r\n\r\nThe DSP was slapped with an asset declaration notice by the AIG after attending the event. The AIG has claimed that a police officer of DSP rank makes 1.5 lac per month in salary, the reception was too expensive for a government employee to afford.\r\n\r\nThe notice has asked the DSP in question to bring forth details of his assets within seven days of receiving it. The notice also states that in case of non-compliance on the part of the party, the matter will be forwarded to the National Accountability Bureau (NAB) for a thorough probe.', '2021-04-23 09:49:27', 3),
(114, 23, 1, 8, 12, 'Sania Mirza and Izhaan on missing Shoaib Malik amid COVID-19 crisis', 'sania-mirza-and-shoaib-malik-along-with-izhaan.jpg', 'Really looking forward to being back as a family\': Sania Mirza and Izhaan on missing Shoaib Malik amid COVID-19 crisis', 'However, when it comes to Indian tennis player Sania Mirza, she and her husband Shoaib Malik have been stranded across borders amidst the COVID-19 crisis.\r\n\r\nSania Mirza has said that she has now left the family reunion with the former Pakistan cricket team skipper to fate.\r\n\r\nWhile Sania is in Hyderabad with son Izhaan and her parents, Shoaib is in Sialkot with his mother. \r\n\r\n“It’s really not been easy staying away from my husband and for Izhaan to stay away from his father. I’m really looking forward to being back as a family again and being at the same place. We’ve left it to fate,”', '2021-04-23 09:49:32', 4),
(115, 23, 2, 4, 9, 'PM Imran to announce mega development package of Rs446b for Sindh', 'sukkhar.jpg', 'PM Imran to announce mega development package of Rs446b for Sindh\r\n\r\nThe amount would be in addition to Rs1,100 billion of Karachi package, says information minister\r\n\r\n', 'Federal Minister for Information and Broadcasting Fawad Chaudhry has said that Prime Minister Imran Khan will announce a mega development package of Rs446 billion for Sindh in Sukkur tomorrow (Friday).\r\n\r\nIn a tweet on Thursday, Fawad said that the amount would be in addition to Rs1,100 billion of the Karachi package.\r\n\r\nHe said that the next two years would be years of development as the PTI government is taking all possible steps to end the sense of deprivation among the people of Sindh.He said that the federal government would give soft loans to youth to start self-employment projects. “We want to do much more for Sindh, but the sword of the 18th Constitutional Amendment hangs over us,” the PTI leader added.\r\n\r\nHe said that although his party supports this amendment that ensures devolution of power to provinces, many people have used it for protecting their corruption.\r\n\r\nHe said that during coronavirus pandemic the federal government gave Rs60 billion to Sindh, but these funds were plundered too. He said the PPP government wants all funds for its corruption.', '2021-04-16 18:36:12', 0),
(116, 23, 2, 11, 9, 'Hyderabad Municipal Corporation unveils Rs2.92b budget ', 'hydera.jpg', 'Hyderabad Mayor Suhail Mehmood Mashhadi presented an estimated budget of Rs2.92 billion for the fiscal year 2019-20 with a surplus of Rs0.6million on Wednesday.', 'In his budget speech, the mayor explained how much the metropolitan corporation will earn (income) and spend (expenditures).\r\n\r\nHMC is one of Sindh’s three municipal corporations. The others are Larkana and Sukkur. A municipal corporation, under our current local government law, is for a city with a population from 300,000 to 3.5 million. Mayor Mashhadi is from the MQM.\r\n\r\nAccording to the budget, the HMC expects a total income of Rs2.922 billion this fiscal year.\r\n\r\nHyderabad expects to earn revenue from several sources, including Rs1.59 billion from the Sindh government under the name of Octroi and Zila tax share. “The HMC would collect different taxes, estimated at Rs130 million,” said the mayor.\r\n\r\nHyderabad can make money issuing meat, fish and chicken licenses, parking fees, the slaughter of animals, mobile phone towers.\r\n\r\nThe total revenue during this fiscal year would be Rs2.8 billion. The city earns roughly Rs25,000,000 from renting its properties.\r\n\r\nThe city will be spending on salaries and pension of staffers (Rs1.6 billion) as well.', '2021-04-17 11:47:27', 4),
(117, 23, 2, 24, 7, 'Sindh extends Covid-19 restrictions, businesses to close by 6pm', 'pop 2.jpg', 'The Sindh government has extended the coronavirus restrictions in the province till May 16, it announced Friday. \r\n\r\nThe limitations will remain in place until May 16\r\n\r\n\r\nBusiness will be allowed to remain open from Sehri to 6pm, the home department said in a notification. \r\n', 'There will be no business activity on Saturdays and Sundays, according to the notification.\r\n\r\nHowever, medical stores, clinics, hospitals, petrol stations, bakeries and milk shops have been exempted.\r\n\r\nRestaurants\r\nOpen-air eateries can serve meals from Iftar till 12am. After that, only takeaways and deliveries are permitted.\r\n\r\nBan on weddings\r\nThe provincial government has banned all indoor and outdoor weddings in the province.\r\n\r\nClosure of parks, cinemas and shrines\r\nAll parks, cinemas and shrines will remain closed. Social, political, cultural and sports events are prohibited too in the province.\r\n\r\nThe development comes at a time when the country continues to battle a raging third wave of coronavirus infections.\r\n\r\nThe virus has so far claimed 15,982 lives, while the number of total confirmed cases has crossed the 745,000 mark in Pakistan.', '2021-04-17 12:11:58', 5),
(118, 23, 1, 1, 1, 'Pakistan to get three more vaccine shipments in April, Asad Umar says', 'national.jpg', 'Head of the National Command and Operations Centre, Asad Umar, on Thursday said that three more shipments of coronavirus vaccines are inbound in April.\r\n\r\nSpeaking to Geo News, Umar said that by June, Pakistan will have enough vaccines to inoculate 15 million people.\r\n\r\nHe said in Pakistan, there are more than 25 million people that are aged 50 and above. Of these, so far, 1.8 million people have registered for a vaccine.', 'Web Desk\r\nApril 15, 2021\r\n\r\nHomeLatestPakistan\r\nPakistan to get three more vaccine shipments in April, Asad Umar says\r\n\r\nHead of the National Command and Operations Centre, Asad Umar. — Facebook/Asad Umar\r\nHead of the National Command and Operations Centre, Asad Umar, on Thursday said that three more shipments of coronavirus vaccines are inbound in April.\r\n\r\nSpeaking to Geo News, Umar said that by June, Pakistan will have enough vaccines to inoculate 15 million people.\r\n\r\nHe said in Pakistan, there are more than 25 million people that are aged 50 and above. Of these, so far, 1.8 million people have registered for a vaccine.\r\n\r\nThe NCOC chief urged all elderly citizens and health workers eligible for the vaccine to get themselves registered immediately.\r\n\r\nSpeaking of the number of vaccine doses utilised so far, Umar said that these are around 1.4 million in number.\r\n\r\nThe planning minister said about 1,065,000 people have thus far been administered a vaccine and about 350,000 people have received their second dose.\r\n\r\nUmar said that 640,000 healthcare workers have registered with NADRA\'s National Immunisation Management System (NIMS) and so far, 392,000 of them have been adminstered the vaccine.\r\n\r\n\"It is not possible to simultaneously vaccinate all registered individuals,\" said the minister.\r\n\r\nHe said Pakistan has a limited number of trained staff and vaccination centres.\r\n\r\n\"Across the world, a phased-wise approach is being taken for vaccinations,\" he added.\r\n\r\n\"The wealthiest of nations have been vaccinating their populations for months now and it may take them many more months,\" Umar said.', '2021-04-16 21:04:04', 0);

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
(41, 'Mehwish123', 'Mehwish123@gmail.com', 'abcde', '1', 'InActive', 'Mehwish Amir', '03225784965', 'pop.jpg', 'Pakistan', 'Karachi', '::1', 0),
(43, 'Admin1 ', 'newsbang@news.com', 'admin123', '0', 'Active', 'admin ', '03074869825', 'IMG_20191223_192330_704.jpg', '', '', '', 114),
(45, 'sahar7', 'saharsarwar7@gmail.com', '123456', '1', 'Active', 'sahar sarwar', '03224577895', 'IMG_20200702_230009.jpg', 'Pakistan', 'lahore', '::1', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news_cat`
--
ALTER TABLE `news_cat`
  MODIFY `item_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

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
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
