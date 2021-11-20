-- --------------------------------------------------------

--
-- Table structure for table `users`
--



CREATE TABLE `phasion` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
)

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`,) VALUES
(1, 'michael@gmail.com', '6a204bd89f3c8348afd5c77c717a097a'),
(2, 'kwame@gmail.com', '6a204bd89f3c8348afd5c77c717a097a'),
(3, 'dickson@gmail.com', '6a204bd89f3c8348afd5c77c717a097a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practical_upload_table`
--
ALTER TABLE `practical_upload_table`
  ADD PRIMARY KEY (`Lab_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `practical_upload_table`
--
ALTER TABLE `practical_upload_table`
  MODIFY `Lab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
