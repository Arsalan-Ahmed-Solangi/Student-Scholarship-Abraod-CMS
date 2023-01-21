/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.24-MariaDB : Database - fyp_cms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fyp_cms` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `fyp_cms`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `location` text DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `linkedIn` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `about` */

insert  into `about`(`about_id`,`email`,`phone_no`,`whatsapp`,`location`,`facebook`,`instagram`,`linkedIn`,`website`) values 
(1,'info@iict.usindh.edu.pk','+92-(0)22-9213181-90','+92-(0)22-9213181-90','University of Sindh, Allama I.I. Kazi Campus, Jamshoro-76080, Sindh\r\n','https://www.facebook.com/usindhofficial','https://www.instagram.com/sindhuniversity/','https://www.linkedin.com/school/university-of-sindh/','https://usindh.edu.pk/');

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admins` */

insert  into `admins`(`admin_id`,`name`,`email`,`password`,`created_at`) values 
(1,'Portal Admin','admin@admin.com','12345678','2023-01-17 19:20:45'),
(6,'Ahmer Quereshi','ahmerqureshi@gmail.com','123456','2023-01-15 00:54:35'),
(7,'Daniyal Mansoor','daniyalmansoor@gmail.com','123456','2023-01-15 00:54:55'),
(8,'Ahmed Faraz','ahmedfaraz@gmail.com','123456','2023-01-15 00:55:22');

/*Table structure for table `agents` */

DROP TABLE IF EXISTS `agents`;

CREATE TABLE `agents` (
  `agent_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `cnic` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 0,
  PRIMARY KEY (`agent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `agents` */

insert  into `agents`(`agent_id`,`name`,`email`,`password`,`phone_no`,`cnic`,`gender`,`profile`,`created_at`,`status`) values 
(4,'Aisha Khan','aishakhan@gmail.com','12345678','03000000000','41504-0213141-9','Female','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-15 01:00:55',1),
(5,'Agent Amjad','agentamjad@gmail.com','123456','03000000000','41504-0213141-0','Male','../uploads/agent/16737265202023-01-14.jpg','2023-01-15 01:02:00',1),
(6,'John Wich','johnwick@gmail.com','123456','03000000000','40000-0213141-9','Male','../uploads/agent/16737265662023-01-14.jpg','2023-01-15 01:02:46',1);

/*Table structure for table `chatting` */

DROP TABLE IF EXISTS `chatting`;

CREATE TABLE `chatting` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `message_by` varchar(11) DEFAULT 'admin',
  `message_to` int(11) DEFAULT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chatting` */

insert  into `chatting`(`chat_id`,`message`,`admin_id`,`agent_id`,`created_at`,`message_by`,`message_to`) values 
(1,'sadsadsad',1,5,'2023-01-15 13:35:03','Admin',NULL),
(2,'Hi From Agent',1,5,'2023-01-15 13:36:43','Agent',NULL),
(3,'asdasd',1,5,'2023-01-15 13:39:08','Admin',NULL),
(4,'asdsad',1,5,'2023-01-15 13:41:26','Admin',NULL),
(5,'hi',1,5,'2023-01-15 13:41:40','Admin',NULL),
(6,'Hi',1,5,'2023-01-15 13:42:44','Admin',NULL),
(7,'adsad',1,5,'2023-01-15 13:43:27','Admin',NULL),
(8,'asdsadsadcadc',1,5,'2023-01-15 13:43:38','Admin',NULL),
(9,'asd',1,5,'2023-01-15 13:43:53','Admin',NULL),
(10,'Cha hal ahe',1,4,'2023-01-15 13:45:13','Agent',NULL),
(11,'Khair hae',1,4,'2023-01-15 13:47:00','Admin',NULL),
(12,'Hi John Wick',1,6,'2023-01-15 13:48:26','Admin',NULL),
(13,'cfhcj',1,4,'2023-01-15 17:10:01','Admin',NULL),
(14,'asdsa',1,4,'2023-01-16 17:18:30','Agent',NULL),
(15,'Hi Ahmed',4,4,'2023-01-21 13:46:40','Agent',NULL),
(16,'hi',6,4,'2023-01-21 13:47:36','Agent',NULL),
(17,'Hi',1,4,'2023-01-21 13:49:01','Agent',NULL),
(18,'He',4,4,'2023-01-21 13:52:12','Agent',NULL);

/*Table structure for table `chattingstudents` */

DROP TABLE IF EXISTS `chattingstudents`;

CREATE TABLE `chattingstudents` (
  `chatting_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `message_by` varchar(11) DEFAULT NULL,
  `message_to` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`chatting_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chattingstudents` */

insert  into `chattingstudents`(`chatting_id`,`message`,`agent_id`,`student_id`,`message_by`,`message_to`,`created_at`) values 
(1,'asdsadd',4,4,'Student',NULL,'2023-01-21 13:43:24'),
(2,'HJi',4,4,'Student',NULL,'2023-01-21 13:45:52'),
(3,'asdas',4,4,'Agent',NULL,'2023-01-21 13:54:00'),
(4,'How are you ?',4,4,'Agent',NULL,'2023-01-21 13:54:11'),
(5,'Im fine and you ',4,4,'Student',NULL,'2023-01-21 13:54:42'),
(6,'Hello',5,4,'Student',NULL,'2023-01-21 15:15:31'),
(7,'im fine',5,4,'Agent',NULL,'2023-01-21 15:16:40');

/*Table structure for table `degrees` */

DROP TABLE IF EXISTS `degrees`;

CREATE TABLE `degrees` (
  `degree_id` int(11) NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`degree_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `degrees` */

insert  into `degrees`(`degree_id`,`degree_name`) values 
(3,'Bachelors'),
(4,'Associate'),
(5,'Matric'),
(6,'O Level'),
(7,'A Level'),
(8,'Intermediate'),
(9,'Masters'),
(10,'M Phill'),
(11,'P.hd'),
(12,'BS ');

/*Table structure for table `education` */

DROP TABLE IF EXISTS `education`;

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `degree_id` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `institute_name` text DEFAULT NULL,
  `passing_year` varchar(50) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`education_id`),
  KEY `degree_id` (`degree_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `education_ibfk_1` FOREIGN KEY (`degree_id`) REFERENCES `degrees` (`degree_id`),
  CONSTRAINT `education_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `education` */

insert  into `education`(`education_id`,`student_id`,`degree_id`,`city`,`institute_name`,`passing_year`,`remarks`,`created_at`) values 
(2,4,5,'Hyderabad','Public School Hyderabad','2014','Matric from Public School Hyderabad A Grade ','2023-01-15 01:08:02'),
(3,4,8,'Hyderabad ','Preston Boys College','2016','Passing Intermediate from Preston Boys College GOR Colony Hyderabad - B Grade ','2023-01-15 01:08:58'),
(4,4,3,'Jamshoro','University of Sindh','2023','Done Software Engineering from 2k19-2k23 and the CGPA is 3.0','2023-01-15 01:09:49'),
(5,4,10,'Hyderabad','adasd','2022','sdasdasdsad','2023-01-21 14:14:20');

/*Table structure for table `enquires` */

DROP TABLE IF EXISTS `enquires`;

CREATE TABLE `enquires` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`enquiry_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `enquires` */

insert  into `enquires`(`enquiry_id`,`name`,`email`,`subject`,`message`,`created_at`) values 
(1,'John Wick','johnwick12@gmail.com','Usage of Portal','Hello I have some issue, can you briefly define how to use this portal ','2023-01-15 00:49:38'),
(2,'Aleeza Khan','aleezakhan@gmail.com','What is a good Enquiry question?','An enquiry question should be clear and simple to understand. It should give students a real sense of what they will be exploring and finding out about on their journey through the enquiry of learning','2023-01-15 00:50:14'),
(3,'Ahmed','ahmed785@gmail.com','What is a good Enquiry question?','An enquiry question should be clear and simple to understand. It should give students a real sense of what they will be exploring and finding out about on their journey through the enquiry of learning','2023-01-15 00:50:16'),
(4,'Faizan','faizan@gmail.com','What is a good Enquiry question?','An enquiry question should be clear and simple to understand. It should give students a real sense of what they will be exploring and finding out about on their journey through the enquiry of learning','2023-01-15 00:50:17');

/*Table structure for table `languages` */

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `languages` */

insert  into `languages`(`lang_id`,`lang_name`) values 
(3,'English'),
(4,'Chinese '),
(5,'Arabic'),
(6,'Urdu'),
(7,'Sindhi'),
(8,'German'),
(9,'French'),
(10,'Hindi');

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_details` text DEFAULT NULL,
  `send_by` int(11) DEFAULT NULL,
  `sent_to` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `messages` */

/*Table structure for table `scholarships` */

DROP TABLE IF EXISTS `scholarships`;

CREATE TABLE `scholarships` (
  `scholarship_id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `degree_id` int(11) DEFAULT NULL,
  `institute_name` varchar(100) DEFAULT NULL,
  `ilets_score` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `minimum_cgpa` varchar(50) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `language` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `iframe` text DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `link` text DEFAULT NULL,
  PRIMARY KEY (`scholarship_id`),
  KEY `agent_id` (`agent_id`),
  KEY `degree_id` (`degree_id`),
  KEY `language` (`language`),
  CONSTRAINT `scholarships_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`agent_id`),
  CONSTRAINT `scholarships_ibfk_2` FOREIGN KEY (`degree_id`) REFERENCES `degrees` (`degree_id`),
  CONSTRAINT `scholarships_ibfk_3` FOREIGN KEY (`language`) REFERENCES `languages` (`lang_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `scholarships` */

insert  into `scholarships`(`scholarship_id`,`agent_id`,`qualification`,`degree_id`,`institute_name`,`ilets_score`,`country`,`city`,`minimum_cgpa`,`details`,`deadline`,`duration`,`language`,`image`,`created_at`,`iframe`,`logo`,`price`,`link`) values 
(3,4,'Software Engineering',9,'Mehran University of Engineering and Technology','7.0','Pakistan','Khairpur','2.5','Financial assistance & scholarships are available for study at Undergraduate level in all disciplines at HEC selected public sector Pakistani universities and degree awarding institutions.\r\nStudents need to compete for securing admission at the participating institution as per admission policy of the institution and be enrolled in Undergraduate (4 years) programs.\r\nStudents in financial need who are already enrolled in participating institutions are also eligible to apply.\r\nThe eligibility of a candidate is linked to his/her financial needs as assessed by the Institutional Scholarship Award Committee. The financial background of the family of the applicant will be kept in view in this regard.\r\nThe number of slots will be decided by the universities.\r\nFunding for slots will continue for the complete duration of the program. In case any students drop out, they will be replaced by other candidates on the waiting list.\r\nAll disciplines will be kept open. The selected university will decide whether to include or exclude any discipline keeping in view its grant, program cost, and number of allocated slots, etc.\r\nIn the case of Medicine, Pharm-D and other five year programs, funding will be made available for the complete program.\r\nConsidering the allocated grant, the university may adjust the total number of scholarships to an extent in order to cover the tuition fees.\r\nIn addition to the tuition fee, every grantee will be paid Rs.6000/- stipend per month for the complete program.\r\nThose students who secure admission on self-finance are not eligible for HEC Need-Based Scholarship Program','2023-01-31','24',3,'../uploads/scholarships/167377732915-01-2023.jpg','2023-01-15 15:08:49',NULL,'../uploads/scholarships/16737773292023-01-15.jpg',NULL,NULL);

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cnic` varchar(50) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `ilets_score` varchar(50) DEFAULT NULL,
  `cgpa` varchar(50) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `price` varchar(50) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `students` */

insert  into `students`(`student_id`,`name`,`surname`,`email`,`password`,`cnic`,`gender`,`dob`,`phone`,`address`,`ilets_score`,`cgpa`,`religion`,`profile`,`status`,`created_at`,`price`,`link`) values 
(4,'Ahmed','Pathan','ahmedkhan@gmail.com','ahed12','41504-0213000-0','Male','1998-01-08','03000000000','Hyderabad Qasimabad Near Ali Palace Banquet','6.0','3.0',NULL,'../../admin/uploads/students/16742921262023-01-21.jpg',1,'2023-01-21 15:11:53',NULL,NULL),
(17,'',NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'2023-01-21 15:13:27',NULL,NULL);

/*Table structure for table `universities` */

DROP TABLE IF EXISTS `universities`;

CREATE TABLE `universities` (
  `university_id` int(11) NOT NULL AUTO_INCREMENT,
  `university_name` varchar(100) DEFAULT NULL,
  `university_image` varchar(200) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `university_details` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`university_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `universities` */

insert  into `universities`(`university_id`,`university_name`,`university_image`,`country`,`city`,`address`,`university_details`,`link`,`created_at`) values 
(2,'Mehran University of Engineering and Technology ','../uploads/universities/167375460915-01-2023.jpg','Pakistan','Jamshoro','Mehran University of Engineering and Technology, Indus Hwy, Jamshoro, Sindh 76062',' MUET is a distinctive, pioneering and connected university that shapes the future through educating and empowering people to meet the real challenges of tomorrow. MUET offers undergraduate, postgraduate, and doctoral programs in various engineering, science, management, and technology fields. MUET is ranked among the top ten institutions of higher engineering learning in Pakistan by HEC. Mehran UET has the honor of being the first public sector university in the country to have successfully obtained the ISO 9000 certification. ','https://www.muet.edu.pk/','2023-01-15 08:50:09'),
(3,'University of Sindh','../uploads/universities/167377707115-01-2023.jpg','Pakistan','Jamshoro','University of Sindh,\r\nAllama I.I. Kazi Campus,\r\nJamshoro-76080, Sindh, Pakistan.\r\nTel.No.+92-22-9213-181 (90) Ten Lines\r\nEmail: info@usindh.edu.pk','The University of Sindh, the oldest University of the country, was constituted under the University of Sindh Act. No. XVII of 1947 passed by the Legislative Assembly of Sindh. The Act was subsequently revised and modified in 1961 and later. The Act of 1972 under which the University is presently functioning provided for greater autonomy and representation of teachers.','https://usindh.edu.pk/','2023-01-15 15:04:31'),
(4,'National University of Sciences and Technology karachi','../uploads/universities/167377719015-01-2023.jpg','Pakistan','Karachi',' V3QQ+RP3, PNEC Road, PNS Jauhar Karsaz Faisal Cantonment, Karachi, Karachi City, Sindh','The Pakistan Navy Engineering College, also called PNS Jauhar, is a military college operated by the Pakistan Navy. Located in Karachi, Sindh, Pakistan, it is also a constituent college of the National University of Sciences and Technology, Pakistan','https://nust.edu.pk/','2023-01-15 15:06:30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
