

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `categoryId` int DEFAULT NULL,
  `content` text,
  `publishDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `categoryId`, `content`, `publishDate`) VALUES
(1, 'Nepal records seven new Covid cases on Thursday By THT Online Published: 03:17 pm Apr 07, 2022', 4, 'KATHMANDU, APRIL 07 The national active Covid-19 caseload has reached 747 on Thursday as seven people tested positive for the infection in past 24 hours. The latest reported number of infections carried the nationwide tally to 978,545 while the death toll remains at 11,951 with no fatalities recorded today. Meanwhile, the total coronavirus recoveries stand at 965,847 with 25 discharges logged today. As per the latest data provided by the health ministry, a total of 4,668 tests were conducted in the last 24 hours of which 2,819 were PCR tests while 1,849 were antigen tests. With this, a total of 5,569,233 PCR tests have been carried out till date.', '2022-09-24 01:42:31'),
(8, 'Queen\'s funeral: Policing an \'enormous success\', says police chief Published 17 hours ago', 2, 'Policing of the Queen\'s funeral and the period of national mourning was \"an enormous success\", the officer in charge has said.\r\n\r\nThe day of the funeral itself was the Met Police\'s largest-ever operation.\r\n\r\nCode named Operation London Bridge, it involved officers from across the UK supporting events in London, Windsor, Norfolk and Scotland.\r\n\r\nGold commander, Chief Constable Lucy D\'Orsi, praised officers and thanked the public for their support.', '2022-09-25 02:49:54'),
(9, 'Nepal lose to Bangladesh 3-1 in the final of SAFF Women\'s Championship By THT Online Published: 09:16 pm Sep 19, 2022', 3, 'KATHMANDU, SEPTEMBER 19\r\nNepal slumped to 3-1 defeat at the hands of Bangladesh in the final of SAFF Women Championship in Kathmandu, on Monday.Samsunahar opened the scoring for Bangladesh in the 13th minute and Shrimoti Krishnarani Sarkar doubled the tally in the 41st minute to take 2-0 lead in the first half. In the second half, Nepal came out all guns blazing and attacking midfielder Anita Basnet reduced the arrears in the 71st minute to make it 2-1.However, Bangladeshi defenders thwarted Nepal\'s move with ease and created their own chance to score their third goal, to put the game to bed.', '2022-09-25 02:54:32'),
(10, 'Labour conference: Sir Keir Starmer backs net zero electricity to boost growth By Brian Wheeler BBC News', 2, 'Labour has set out plans to make the UK the first major economy in the world to generate all of its electricity without using fossil fuels.\r\n\r\nSir Keir Starmer says achieving zero carbon energy by 2030 will be a key priority if he wins the next election.\r\n\r\nThe Labour leader claims it will boost economic growth, create more than 200,000 jobs and and cut energy bills for good.\r\n\r\nThe government has already committed to zero carbon electricity by 2035.\r\n\r\nBut that pledge was made before the global spike in energy prices.\r\n\r\nNew prime minister Liz Truss has promised more renewable energy, as part of a plan to make the UK a net exporter of energy by 2040, ending the country\'s dependence on foreign supplies.', '2022-09-25 02:56:18'),
(11, 'Joe Joyce v Joseph Parker: Briton\'s granite chin sees him through to 11th-round knockout By Coral Barry BBC Sport at AO Arena in Manchester', 3, 'Britain\'s Joe Joyce walked through the best New Zealander Joseph Parker had to offer to knock out his rival in the 11th round of a thrilling fight in Manchester.\r\n\r\nThe heavyweights went toe-to-toe in a back and forth contest before a stunning left hook landed flush on the chin of Parker.\r\n\r\nJoyce claimed the WBO interim heavyweight title with the biggest win of his career and now has his eyes set on challenging heavyweight champion Oleksandr Usyk in 2023.\r\n\r\nThe Briton\'s step up in class had been debated after 14 pro fights against lower-level opponents. He turned 37 this week having only turned pro when he was 31 after a late start to his amateur career.', '2022-09-25 02:57:44'),
(13, 'The Maine lake full of sunken steamboats', 5, 'Steamboats were once a glamorous means of transport for tourists summering at Moosehead Lake – but when the era faded, ship owners sank the once-beloved vessels.\r\n\"A hundred years ago there were dozens of these things cruising around here,\" said a man who\'d suddenly appeared next to me at the dock as I watched the approaching steamboat. He\'d startled me out of my reverie, my gaze caught somewhere between the shimmer that dances across Moosehead Lake and the seaplanes taking off toward Mount Katahdin.\r\n\r\nI grew up in the US state of Maine at a smaller lake not far from here, and I spent many summers taking day trips to Moosehead Lake with my family. But this was the first time I boarded the historical Steamboat Katahdin, the last of a once-numerous fleet that used to ferry hordes of well-dressed elites from nearby train depots to the area\'s luxury resorts for their summer holidays. ', '2022-09-25 03:01:29'),
(14, 'Mbappe and Giroud shine as France beat Austria 2-0 By Reuters Published: 09:08 pm Sep 23, 2022', 3, 'PARIS, SEPTEMBER 23\r\nFrance kept their hopes of staying in the top tier of the Nations League alive as goals by Kylian Mbappe and Olivier Giroud secured a 2-0 home victory over Austria on Thursday.Mbappe produced a stunning strike before the 35-year-old Giroud sealed the win with a header to become the oldest player to score a goal for France. The world champions, who travel to Denmark on Sunday, climbed to third in Group 1 with five points from as many games.', '2022-09-25 03:06:18'),
(15, 'Putin mobilises more troops for Ukraine, accuses West of \'nuclear blackmail\' By Reuters Published: 07:53 pm Sep 21, 2022', 2, 'LONDON, SEPTEMBER 21\r\nRussian President Vladimir Putin on Wednesday called up 300,000 reservists to fight in Ukraine and said Moscow would respond with the might of all its vast arsenal if the West pursued what he called its \"nuclear blackmail\" over the conflict there.It was Russia\'s first such mobilisation since World War Two and signified a major escalation of the war, now in its seventh month. It followed recent setbacks for Russian forces, who have been driven from areas they had captured in northeast Ukraine in a Ukrainian counter-offensive this month and are bogged down in the south.', '2022-09-25 03:07:50'),
(16, 'Brochs: The mysterious circular symbols of Scotland', 5, 'Hundreds of these ancient stone structures dot the Scottish Highlands, but the true purpose of brochs continues to baffle experts.\r\n\r\nTravel north through Scotland\'s deep glens, its mist and mountains and its velvety moorland and you\'ll eventually see them: crumbling stone towers rising against the Highland peaks like ancient crag-top castles. These mysterious Iron Age monuments are known as brochs and they exist nowhere else but here. Yet, while these circular dry-walled structures are as symbolic a feature as any in the Scottish Highlands, their purpose remains unknown', '2022-09-25 03:09:47'),
(17, 'Apple debuts iPhone 14 Pro and iPhone 14 Pro Max', 1, 'Featuring the Always-On display, the first-ever 48MP camera on iPhone, Crash Detection, Emergency SOS via satellite, and an innovative new way to receive notifications and activities with the Dynamic Island\r\n', '2022-09-25 04:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'technology'),
(3, 'Sports'),
(4, 'Covid-19'),
(5, 'travel');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `comment` text,
  `user` int DEFAULT NULL,
  `article` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `user`, `article`) VALUES
(1, 'wow, thats noice', 1, 9),
(2, 'LOLOLO', 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(36) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `isAdmin`) VALUES
(1, 'admin', 'a@admin.c', 'adminpassword', 1),
(2, 'bishesh', 'bisheshbasnet@yahoo.com', 'bishesh', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

