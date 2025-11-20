<?php

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `age` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `email`, `age`) VALUES
(1, 'Ana', 'Santos', 'ana@test.com', 20),
(2, 'Mark', 'Reyes', 'mark@test.com', 22),
(3, 'Liza', 'Cruz', 'liza@test.com', 19),
(9, 'Jon', 'Baratheon', 'jon@gmail.com', 0),
(10, 'Jon', 'Baratheon', 'jonjon@gmail.com', 0),
(11, 'Igritt', 'Baratheon', NULL, 0);


ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

?>