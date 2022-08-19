
--
-- Database: `autosugg`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(240) NOT NULL,
  `name` varchar(240) NOT NULL
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(1, 'Hi'),
(2, 'what is your name?'),
(3, 'what is your website?'),
(4, 'what your website for?'),
(5, 'your hobby?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
