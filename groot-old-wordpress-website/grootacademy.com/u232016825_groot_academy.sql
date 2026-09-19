-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://wwwmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2023 at 01:31 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u232016825_groot_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `phone_number` varchar(55) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meta_description`
--

CREATE TABLE `meta_description` (
  `id` int(11) NOT NULL,
  `page_name` varchar(155) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL DEFAULT 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography',
  `auther` varchar(255) NOT NULL DEFAULT 'Groot Academy, Groot Software, Groot Enterprise'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `meta_description`
--

INSERT INTO `meta_description` (`id`, `page_name`, `title`, `description`, `keywords`, `auther`) VALUES
(1, 'index', 'Welcome to Groot Academy', 'Best skill-oriented IT training Institute\nGain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(2, 'about-us', 'Know More about Groot Academy, Groot Software And Groot Enterprise', 'Best skill-oriented IT training Institute Gain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(3, 'Become_Software_Engineer_After_10th', 'Become Software Engineer After 10th - Guide For Aspirants', 'Planning to be a Software Engineer in future? Here\'s a guide that shows the complete route to success in becoming software engineer after 10th.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(4, 'Become_Software_Engineer_After_12th', 'Become Software Engineer After 12th - Guide For Aspirants', 'Planning to be a Software Engineer in future? Here\'s a guide that shows the complete route to success for becoming software engineer after 12th (all streams).', '', 'Groot Academy, Groot Software, Groot Enterprise'),
(5, 'blog-details', 'Best skill-oriented IT training Institute Gain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Best skill-oriented IT training Institute Gain the programming knowledge in your favorite technology under the mentorship of industry-experts', '', 'Groot Academy, Groot Software, Groot Enterprise'),
(6, 'Blogs_by_Groot_Academy', 'Best skill-oriented IT training Institute\nGain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Best skill-oriented IT training Institute\nGain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Blogs_by_Groot_Academy', 'Groot Academy, Groot Software, Groot Enterprise'),
(7, 'contact-us', 'Best skill-oriented IT training Institute\nGain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Best skill-oriented IT training Institute Gain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(8, 'course_advance_java', 'Best skill-oriented IT training Institute Gain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Groot Academy is one of the Best Java programming institute in Jaipur for beginners with industry expert mentors and job-oriented teaching program.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(9, 'course_Back_End_Development_with_Java', 'Expert Back-end development Training Institute in Jaipur', 'Groot Academy is one of the Best Back-end development training institute in Jaipur with expert mentors and a skill-oriented training program for beginners', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(10, 'course_Back_End_Development_with_Node_JS', 'Expert NodeJs Programmer Training Institute in Jaipur', 'Groot Academy is one of the Best AngularJS training institutes in Jaipur with skilled professional mentors and a job-oriented training program for beginners.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(11, 'course_Back_End_Development_With_PHP', 'Learn Web Development in PHP with industrial Expert', 'Groot Academy having 5years+ experience training professional.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(12, 'course_CC++', 'Best C++ Programming Training Institute in Jaipur\r\n', 'Groot Academy is one of the Best C++ Programming Training Institute in Jaipur with industry expert mentors and skill-oriented training program for beginners.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(13, 'course_core_java', 'Learn Java programming from industrial experts that are having 10+ years\' experience. ', 'Best skill-oriented IT training Institute Gain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(14, 'course_Data_Structure_and_algorithms', 'Best Data Structures and Algorithms Training in Jaipur\r\n', 'Groot Academy is one of the Best skill-oriented Data Structures and Algorithms training Institute in Jaipur for beginners with industry expert mentors.\r\n', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(15, 'course_Front_End_Development_Angular_JS', 'Best AngularJS Training Institute in Jaipur\r\n', 'Groot Academy is one of the Best AngularJS training institutes in Jaipur with skilled professional mentors and a job-oriented training program for beginners.\r\n', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(16, 'course_Front_End_Development_React_JS', 'Learn Front End Developemnt with ReactJS in jaipur', 'Groot Academy is one of the Best Front-End Development Training institute in Jaipur for beginners with industry expert mentors and job-oriented training module.\r\n', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(17, 'course_Full_Stack_Development', 'Best Full Stack Web Development Training institute in Jaipur', 'Groot Academy is one of the Best Full Stack Web Development institute in Jaipur for beginners with industry expert mentors and job-oriented training module.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(18, 'course_Spring_Boot', 'Learn Microservice development in Spring Boot', 'We are having 10+ years industrial expert, who can boost your career in microservice architecture design with Spring Boot.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(19, 'course_Spring_Framework', 'Best Java and Spring Framework training institute in Jaipur.', 'Groot Academy is one of the Best Spring Framework and Java programming institute in Jaipur for beginners with industry expert mentors and job-oriented teaching program.\r\n', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(20, 'course_Spring_MVC', 'Learn Spring MVC Development from industrial Experts.', 'Groot Academy is one of the Best Spring MVC and Java programming institute in Jaipur for beginners with industry expert mentors and job-oriented teaching program.\r\n', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(21, 'Courses_By_Groot_Academy', 'All Courses of Groot Academy', 'We have multiple courses like :- Web Developemnt, Front End Development, Backend Development with NodeJS, Backend Development with PHP and Java. Our flagship course is Full Stack Development. ', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(22, 'enroll', 'Get Admission into Groot Academy.', 'Get Admission into Groot Academy.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(23, 'Frequently_Asked_Questions', 'Here are all Frequently Asked Questions from the students. Feel Free to ask anything else in the contact form and you call and WhatsApp us.', 'Best skill-oriented IT training Institute Gain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(24, 'Our_Internship_Programmes', 'Programming Internship | Internship in Coding |\r\nInternship in Software Development | in Jaipur ', 'Are you looking for a job or skill-oriented internship program in Jaipur? Groot Academy has training and internship in all programming languages. Check now.', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise'),
(25, 'Privacy_Policy_For_Groot_Academy', 'This is privacy policy for Groot Academy.', 'Best skill-oriented IT training Institute Gain the programming knowledge in your favorite technology under the mentorship of industry-experts', 'Learn Java, Best It training institute in jaipur, How to learn Software Development Computer Programming and Coding, Learn Software Development, Learn Object-Oriented Design (OOD), Learn Software Testing and Debugging Encryption and cryptography', 'Groot Academy, Groot Software, Groot Enterprise');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_description`
--
ALTER TABLE `meta_description`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meta_description`
--
ALTER TABLE `meta_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
