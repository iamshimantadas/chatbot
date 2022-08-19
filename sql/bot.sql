
--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `enrollno` bigint(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `passd` varchar(240) NOT NULL,
  `date` date NOT NULL
);

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`enrollno`, `email`, `passd`, `date`) VALUES
(1, 'demo@gmail.com', 'demo123', '2022-08-19');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` bigint(240) NOT NULL,
  `queries` varchar(240) NOT NULL,
  `replies` varchar(240) NOT NULL
);

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hi', 'Hello sir/mam!<br>How can I help You?'),
(2, 'what is your name?', 'My name is Shimanta Das'),
(3, 'what is your website?', 'my website is<br>microcodes.in'),
(4, 'what your website for?', 'Our website helps to learn programming languages,<br>php projects,many gallery images and so on.'),
(5, 'your hobby?', 'I love coding!!<br>I love to build problem solving products which can helps another.');

-- --------------------------------------------------------

--
-- Table structure for table `chathistory`
--

CREATE TABLE `chathistory` (
  `enrollno` bigint(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `date` date NOT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`enrollno`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chathistory`
--
ALTER TABLE `chathistory`
  ADD PRIMARY KEY (`enrollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `enrollno` bigint(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` bigint(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chathistory`
--
ALTER TABLE `chathistory`
  MODIFY `enrollno` bigint(240) NOT NULL AUTO_INCREMENT;
