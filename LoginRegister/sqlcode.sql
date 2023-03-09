CREATE TABLE `users` (
  `id` int(100) AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(100) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;