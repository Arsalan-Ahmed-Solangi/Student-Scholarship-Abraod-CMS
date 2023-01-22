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
(2,'Ahmer Quereshi','ahmerqureshi@gmail.com','123456','2023-01-22 11:14:45'),
(3,'Daniyal Mansoor','daniyalmansoor@gmail.com','123456','2023-01-22 11:15:28'),
(4,'Ahmed Faraz','ahmedfaraz@gmail.com','123456','2023-01-22 11:15:23');

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
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`agent_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `agents` */

insert  into `agents`(`agent_id`,`name`,`email`,`password`,`phone_no`,`cnic`,`gender`,`profile`,`created_at`,`status`) values 
(4,'Aisha Khan','aishakhan@gmail.com','12345678','03000000000','41504-0213141-9','Female','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-15 01:00:55',1),
(5,'Agent Amjad','agentamjad@gmail.com','123456','03000000000','41504-0213141-0','Male','../uploads/agent/16737265202023-01-14.jpg','2023-01-15 01:02:00',1),
(6,'John Wich','johnwick@gmail.com','123456','03000000000','40000-0213141-9','Male','../uploads/agent/16737265662023-01-14.jpg','2023-01-15 01:02:46',1),
(7,'Bilal Ahmed','bilalahmed@gmail.com','12345678','03000000000','40000-0213141-8','Male','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-22 11:18:35',1),
(8,'Shabaz Pathan','shabazpathan@gmail.com','123456','03000000000','40000-0413141-8','Male','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-22 11:19:10',1),
(9,'DaniyalMansoor','daniyalmansoor@gmail.com','123456','03000000000','40000-0445141-8','Male','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-22 11:19:40',1),
(10,'Khalil Rehman','khalil@gmail.com','123456','03000000000','40000-0445155-8','Male','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-22 11:20:12',1),
(11,'Sara Khan','sarakhan@gmail.com','123456','03000000000','40000-0443355-8','Female','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-22 11:20:51',1),
(12,'Rabia Baloch','rabia@gmail.com','123456','03000000000','40000-0243355-8','Female','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-22 11:21:19',1),
(13,'Hira Faisal','hirafaisal@gmail.com','123456','03000000000','40012-0243355-8','Female','../../agent/uploads/agent/16737741982023-01-15.jpg','2023-01-22 11:22:17',1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `chatting` */

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `chattingstudents` */

insert  into `chattingstudents`(`chatting_id`,`message`,`agent_id`,`student_id`,`message_by`,`message_to`,`created_at`) values 
(1,'Hello',0,1,'Student',NULL,'2023-01-22 14:46:27'),
(2,'sadasd',0,1,'Student',NULL,'2023-01-22 14:47:06'),
(3,'asd',2,1,'Student',NULL,'2023-01-22 14:48:34');

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
) ENGINE=InnoDB AUTO_INCREMENT=128 DEFAULT CHARSET=utf8mb4;

/*Data for the table `languages` */

insert  into `languages`(`lang_id`,`lang_name`) values 
(1,'Afrikaans'),
(2,'Albanian'),
(3,'Arabic'),
(4,'Armenian'),
(5,'Basque'),
(6,'Bengali'),
(7,'Bulgarian'),
(8,'Catalan'),
(9,'Cambodian'),
(10,'Chinese (Mandarin)'),
(11,'Croatian'),
(12,'Czech'),
(13,'Danish'),
(14,'Dutch'),
(15,'English'),
(16,'Estonian'),
(17,'Fiji'),
(18,'Finnish'),
(19,'French'),
(20,'Georgian'),
(21,'German'),
(22,'Greek'),
(23,'Gujarati'),
(24,'Hebrew'),
(25,'Hindi'),
(26,'Hungarian'),
(27,'Icelandic'),
(28,'Indonesian'),
(29,'Irish'),
(30,'Italian'),
(31,'Japanese'),
(32,'Javanese'),
(33,'Korean'),
(34,'Latin'),
(35,'Latvian'),
(36,'Lithuanian'),
(37,'Macedonian'),
(38,'Malay'),
(39,'Malayalam'),
(40,'Maltese'),
(41,'Maori'),
(42,'Marathi'),
(43,'Mongolian'),
(44,'Nepali'),
(45,'Norwegian'),
(46,'Persian'),
(47,'Polish'),
(48,'Portuguese'),
(49,'Punjabi'),
(50,'Quechua'),
(51,'Romanian'),
(52,'Russian'),
(53,'Samoan'),
(54,'Serbian'),
(55,'Slovak'),
(56,'Slovenian'),
(57,'Spanish'),
(58,'Swahili'),
(59,'Swedish'),
(60,'Tamil'),
(61,'Tatar'),
(62,'Telugu'),
(63,'Thai'),
(64,'Tibetan'),
(65,'Tonga'),
(66,'Turkish'),
(67,'Ukrainian'),
(68,'Urdu'),
(69,'Uzbek'),
(70,'Vietnamese'),
(71,'Welsh'),
(72,'Xhosa');

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
  CONSTRAINT `scholarships_ibfk_2` FOREIGN KEY (`degree_id`) REFERENCES `degrees` (`degree_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `scholarships` */

insert  into `scholarships`(`scholarship_id`,`agent_id`,`qualification`,`degree_id`,`institute_name`,`ilets_score`,`country`,`city`,`minimum_cgpa`,`details`,`deadline`,`duration`,`language`,`image`,`created_at`,`iframe`,`logo`,`price`,`link`) values 
(1,4,'Software Engineering',3,'Open University Malaysia','7.4','Malaysia','Kuala Lampur','3.0',NULL,'2023-01-31','48',15,'https://www.gstatic.com/ui/v1/menu/device_default_thumbnail2.png','2023-01-22 15:08:00',NULL,'https://www.gstatic.com/ui/v1/menu/device_default_','2000000','http://www.oum.edu.my/'),
(2,5,'Electronics',3,'Open University of Catalonia','9.0','Spain','Barcelona','3.0',NULL,'2023-02-22','48',15,'https://www.gstatic.com/ui/v1/menu/dark_thumbnail2.png','2023-01-22 15:08:01',NULL,'https://www.gstatic.com/ui/v1/menu/dark_thumbnail2','150000','http://www.uoc.edu/portal/en/'),
(3,5,'Information Technology',3,'Open University of China [formally China Central Radio and TV University (CCRTVU) and local radio an','5.0','China','Beijing','3.0',NULL,'2023-02-13','48',15,'https://www.gstatic.com/ui/v1/menu/light_thumbnail2.png','2023-01-22 15:08:03',NULL,'https://www.gstatic.com/ui/v1/menu/light_thumbnail','200000','http://en.ouchn.edu.cn/'),
(4,6,'Information Technology',9,'Open University of Cyprus','6.0','Cyprus','Latsia, Nicosia','3.0',NULL,'2023-01-30','48',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTum5L4kFStZ-DcGG3m_ZBEd6La_YSO660kkg2bX1jBnvk7','2023-01-22 15:08:05',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','180000','https://www.ouc.ac.cy/index.php/en/'),
(5,7,'Electronics',9,'Open University of Guangdong','5.5','China','Guangzhou City','3.0',NULL,'2023-01-27','48',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScuLP7c64qZskK37Wi6C1elXpoj1zvGkxA5cuYygjma4Nt','2023-01-22 15:08:06',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','550000','http://www.gdrtvu.edu.cn/'),
(6,8,'Software Engineering',9,'Open University of Hong Kong','7.8','China','Hong Kong','2.5',NULL,'2023-03-01','24',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmjHOnydPt2t0zRDga4sUyuDTwWxYkdO3dMUk5Bj7FfXxr','2023-01-22 15:08:07',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','350000','http://www.ouhk.edu.hk/wcsprd/Satellite?pagename=OUHK/tcSingPage&lang=eng'),
(7,9,'Information Technology',10,NULL,'8.8',NULL,NULL,'3.0',NULL,'2023-02-22','24',15,NULL,'2023-01-22 15:08:09',NULL,NULL,'1100000',NULL),
(8,4,'Software Engineering',10,'Open University of Japan','8.0','Japan','Chiba','2.5',NULL,'2023-01-24','24',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlpDz68oyYmcw1W911YbeQccRhfZdZfd6stRdLikn9DYmI','2023-01-22 15:08:11',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','750000','http://www.ouj.ac.jp/eng/'),
(9,5,'English',3,'Open University of Kaohsiung','9.0','Taiwan','Kaohsiung City','2.0',NULL,'2023-02-07','24',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShinZmvE_oRBMi9K6hfibf_MZ1XnJfSXWwhqrOlcFek6Jp','2023-01-22 15:08:12',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','130000','http://www.ouk.edu.tw/english/index.aspx'),
(10,6,'Electronics',9,'Open University of Mauritius','4.0','Mauritius','Moka','2.5',NULL,'2023-01-28','24',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSQE_HJaqHz3DVQoWVle201CI70iWEhiwoJYKTTTmU2QWK','2023-01-22 15:08:14',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','400000','http://www.open.ac.mu/'),
(11,7,'Mathematics',5,'Open University of Sri Lanka','6.9','Sri Lanka','Nawala, Nugegoda','2.0',NULL,'2023-02-03','36',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX_PV9WjGHsycU0OdkCCfg09CgqEQLHD-e46xNISXsaAyY','2023-01-22 15:08:15',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','120000','https://ou.ac.lk/'),
(12,8,'English',9,'Open University of Sudan','7.0','Sudan','','2.5',NULL,'2023-01-28','24',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQD4_W1Qtt1VPF40oEEbvXJKLnxBdNoKWeR5m5IUEizMmVl','2023-01-22 15:08:18',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','660000',''),
(13,10,'Mathematics',3,'Open University of Tanzania','9.0','Tanzania','Dar es Salaam','2.0',NULL,'2023-02-17','36',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSJKo5zgdyY5lWNmxKKh81VwSlHF4vrw2xxUdHgPYP66gd','2023-01-22 15:08:20',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','150000','https://www.out.ac.tz/'),
(14,5,'Mathematics',3,'Pandit Sundarlal Sharma (Open) University','9.0','India','Bilaspur, Himachal Pradesh','2.9',NULL,'2023-03-16','36',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKkn5RXmtxURfWtYf3f2L-dq2g-flrGR9tWYhevAFnP8CO','2023-01-22 15:08:22',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','150000','http://pssou.ac.in/'),
(15,6,'Computer Science',3,'Payame Noor University','9.0','Iran','Tehran','2.0',NULL,'2023-01-31','12',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG8_Zf5AT5wu9ltAMfQqCU-1HVH0Nr3HXD6bHUtfYsc9Es','2023-01-22 15:08:23',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','150000','http://en.pnu.ac.ir/Portal/Home/'),
(16,7,'Pharmacy',3,'Polytechnic University of the Philippines Open University','7.7','Philippines','Manila','2.4',NULL,'2023-01-31','60',15,'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaaCBXxOzH5ShryR8DOT6YMCDVgmi_pIJfLhuYvOkBUAaU','2023-01-22 15:08:26',NULL,'https://encrypted-tbn0.gstatic.com/images?q=tbn:AN','150000','https://www.pup.edu.ph/ous/');

/*Table structure for table `studentchat` */

DROP TABLE IF EXISTS `studentchat`;

CREATE TABLE `studentchat` (
  `studentChat` int(11) NOT NULL AUTO_INCREMENT,
  `message` text DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `student` int(11) DEFAULT NULL,
  `message_by` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`studentChat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `studentchat` */

insert  into `studentchat`(`studentChat`,`message`,`student_id`,`student`,`message_by`,`created_at`) values 
(1,'asdsad',1,2,'Ahmed','2023-01-22 14:50:03');

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
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

/*Data for the table `students` */

insert  into `students`(`student_id`,`name`,`surname`,`email`,`password`,`cnic`,`gender`,`dob`,`phone`,`address`,`ilets_score`,`cgpa`,`religion`,`profile`,`status`,`created_at`) values 
(1,'Ahmed','Memon','ahmedmemon@gmail.com','123455','41500-00909098','Male','11-07-2001','03043059147','Sindh University Society Phase 2 ','8.0','2.8','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:46:47'),
(2,'Saim','Rajput','saim@gmail.com','123455','41500-00909098','Male','21-07-2000','03000000001','Hyderabad Qasimabad','6.4','3.4','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07'),
(3,'Aisha ','Mangi','aisha@gmail.com','123455','41100-00909098','Female','25-05-1997','03000000001','Karachi DHA',NULL,'3.0','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07'),
(20,'Mehwish','Solangi','mehwish@gmail.com','123455','41200-00909098','Female','02-04-1998','03000000001','Karachi Sohrab GOth',NULL,'2.3','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07'),
(21,'Adeeb ','Qambrani','adeeb@gmail.com','123455','41300-00909098','Male','21-12-1996','03000000001','Hirabad Hyderabad','7.6','3.8','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07'),
(22,'Faizan','Baloch','faizan@gmail.com','123456','41400-00909098','Male','01-04-1998','03000000001','Jamshoro Phatak ',NULL,'39','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07'),
(23,'kamran','jamali','kamran@gmail.com','123456','41600-00909098','Male','15-11-2002','03000000001','Jamshoro Mehran Society Near ByPass',NULL,'3.0','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07'),
(24,'Sami','Pathan','samipathan@gmail.com','123456','41700-00909098','Male','28-02-1998','03000000001','Jamshoro Colony Near Karachi Mori','8.0','3.15','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07'),
(25,'Ahmer','Qureshi','ahmer@gmail.com','123456','41800-00909098','Male','2-01-1998','03000000001','Hussainabad Hyderabad',NULL,'2.79','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07'),
(26,'Afsana','Sheikh','afsana@gmail.com','123456','41900-00909098','Female','6-08-1998','03000000001','Lahore Bahria Town',NULL,'3.6','Islam','../uploads/students/16743700072023-01-22.jpg',1,'2023-01-22 11:48:07');

/*Table structure for table `universities` */

DROP TABLE IF EXISTS `universities`;

CREATE TABLE `universities` (
  `university_id` int(11) NOT NULL AUTO_INCREMENT,
  `university_name` varchar(100) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `university_image` varchar(200) DEFAULT '1',
  `university_details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`university_id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4;

/*Data for the table `universities` */

insert  into `universities`(`university_id`,`university_name`,`link`,`address`,`city`,`country`,`university_image`,`university_details`,`created_at`) values 
(2,'Mehran University of Engineering and Technology ','https://www.muet.edu.pk/','Mehran University of Engineering and Technology, Indus Hwy, Jamshoro, Sindh 76062','Jamshoro','Pakistan','https://cdn.britannica.com/85/13085-050-C2E88389/Corpus-Christi-College-University-of-Cambridge-England.jpg',' MUET is a distinctive, pioneering and connected university that shapes the future through educating and empowering people to meet the real challenges of tomorrow. MUET offers undergraduate, postgraduate, and doctoral programs in various engineering, science, management, and technology fields. MUET is ranked among the top ten institutions of higher engineering learning in Pakistan by HEC. Mehran UET has the honor of being the first public sector university in the country to have successfully obtained the ISO 9000 certification. ','2023-01-15 08:50:09'),
(3,'University of Sindh','https://usindh.edu.pk/','University of Sindh,\r\nAllama I.I. Kazi Campus,\r\nJamshoro-76080, Sindh, Pakistan.\r\nTel.No.+92-22-9213-181 (90) Ten Lines\r\nEmail: info@usindh.edu.pk','Jamshoro','Pakistan','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTirQUyzx3vSs5vcsRvd_tW2si8cwU0pqft8A&usqp=CAU','The University of Sindh, the oldest University of the country, was constituted under the University of Sindh Act. No. XVII of 1947 passed by the Legislative Assembly of Sindh. The Act was subsequently revised and modified in 1961 and later. The Act of 1972 under which the University is presently functioning provided for greater autonomy and representation of teachers.','2023-01-15 15:04:31'),
(4,'National University of Sciences and Technology karachi','https://nust.edu.pk/',' V3QQ+RP3, PNEC Road, PNS Jauhar Karsaz Faisal Cantonment, Karachi, Karachi City, Sindh','Karachi','Pakistan','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPlxZ5zafIKP2L7ZAr501rAWCb3O6gH6qsjA&usqp=CAU','The Pakistan Navy Engineering College, also called PNS Jauhar, is a military college operated by the Pakistan Navy. Located in Karachi, Sindh, Pakistan, it is also a constituent college of the National University of Sciences and Technology, Pakistan','2023-01-15 15:06:30'),
(5,'Al-Quds Open University','','Irsal Street, Kanan Bld, 4th Floor, P.O. Box 1804','Ramallah','Occupied Palestinian Territories','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBQVFBgUFRUYGBgaGh0bGxsaGhwaGhshGh8cGh0bIhshJC0kHyEqIRoaJTcmKi4xNDQ0GyM6PzozPi0zNDEBCwsLEA8QHxISHTMqIyEzMzMzMzEzMzMzMzMzMzMzMzMzMzMzMzMzMzMzM',NULL,'2023-01-22 13:54:39'),
(6,'Allama Iqbal Open University','https://www.aiou.edu.pk/','Directorate of Students Advisory & Counselling Services, Gateway Block, Ground Floor, Allama Iqbal Open University, Sector H-8','Islamabad','Pakistan','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgWFRYZGRgaHBgaGhwcHBwjHRohGhwaGhweGiEcIy4lHB4sHxkcJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHzQhJCs0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0N',NULL,'2023-01-22 13:54:39'),
(7,'Anadolu Universitesi Yunus Emre','https://www.anadolu.edu.tr/en','Anadolu Universitesi Yunus Emre Kampusu','Tepebasi','Turkey','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYYGRgaHBweHBwcGhwdHhweJxocHh4aHBwcJS4lHh8rIR4YJjgmKy8xNTU1HCQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJSw0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0N',NULL,'2023-01-22 13:54:39'),
(8,'Arab Open University','http://www.arabou.edu.kw/','Ardiya Industrial Area, Al-Safat 13033, P.O. Box 3322','Farwanya','Kuwait','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGBxQTExYUFBQYFhYZGSAaGhoaGhoiIhwgHR0cHB0cHx0hHysiIh0qHRwhIzQjKCwuMTIxHyI3PDcvOyswMS4BCwsLDw4PHRERHS4oIigwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMjAwM',NULL,'2023-01-22 13:54:39'),
(9,'Asia eUniversity (AeU)','https://aeu.edu.my/','Wisma Subang Jaya, No.106, Jalan SS 15/4, 47500 Subang Jaya, Selangor','','Malaysia','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGBxQTExYUFBMYGBYZGhoaFhoaGSAdHRoaGhwaGhoaHCAdICsiIB8rHxoWIzQkKCwuMTExHyE3PDcwOyswMS4BCwsLDw4PHRERHTAoISkwMDAyMDAyMDAyMDIwMDEwMjAwMDAwMDAwMDAwM',NULL,'2023-01-22 13:54:39'),
(10,'Athabasca University','http://www.athabascau.ca/','1 University Drive','Athabasca','Canada','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUTFBcUFRUYGBcZGh4eHBoaGRwhIh0aIyQaISAjIyIgICwjISArIB0aJDYkKi0vMzMzGSI4PjgyPSwyMy8BCwsLDw4PHhISHjQqIyk0MjI0NDIyMjI6MjI0MjQyNDIyNDIyMjIyMjIyM',NULL,'2023-01-22 13:54:39'),
(11,'Bangladesh Open University','https://www.bouresult.info/','Bangladesh Open University, Board Bazar','Gazipur','Bangladesh','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUUFBcUFBQXFxcXGBcXGhcXFxcXFxoYFxcbGBgXGBgbICwkGx0pIBcYJTYlKS4wMzMzGyI5PjkyPSwyMzABCwsLEA4QHhISHjIpIikwNDIyMjIyMjIyMjA0MjIyMjIyMjIyMjIyMjIyM',NULL,'2023-01-22 13:54:39'),
(12,'Beijing Open University','http://www.bjou.edu.cn/','No. 4, Zaojun Temple, Haidian District','Beijing','China','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyc8lQwDfQYS8YP8MhMJdU93Xvz62Ojc_GiA&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(13,'Botswana Open University','http://www.bou.ac.bw/','Garamotlhose Junction, Western Bye-Pass, Block 6, Plot 39972','Gaborone','Botswana','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBMVExcVExMYFxcZGxcaGhoYGBoaGxwjGRcaGRoaGh8dHyslGiAoHRsZJDYkKCwxMjIyGSE3PDcyOysxNC4BCwsLDw4PHRERHTMpIyg5MzEzLjszLjExMTEuMTE0LjMuMzExMTMxMTEyM',NULL,'2023-01-22 13:54:39'),
(14,'Centre national d’enseignement à distance','http://www.cned.fr/','University in Chasseneuil-du-Poitou','Vienne','France','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGBxMUExYUExMYFhYZGh8aGhoZGh8cHxkbHBoaHBkbGhogHysjHBwoIRgZIzQjKCwuMTExGiE3PDcvOywwMS4BCwsLDw4PHRERHTApIigwMDAwMDIwMDAwMDAwMDAwMDAwMDAwMDAwMDAwM',NULL,'2023-01-22 13:54:39'),
(15,'Dr. Babasaheb Ambedkar Open University','http://baou.edu.in/','\'Jyotirmay\' Parisar, Opp. Shri Balaji Temple, Sarkhej-Gandhinagar Highway, Chharodi','Ahmedabad','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQX18Rr_O3Y_iMA_uwoYAVllci-yF5L-mZNA&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(16,'Dr. Babasaheb Ambedkar Open University','https://baou.edu.in//','Prof. G. Ram Reddy Marg, Road No. 46, Jubilee Hills, Masthan Nagar, CBI Colony, Jubilee Hills','Hyderabad','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4J6ZBRpBZaZyXtEZdVdzKxtezDZF6NiEGCg&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(17,'Fern Universitat in Hagen','https://www.fernuni-hagen.de/english/','FernUniversität in Hagen, Universitätsstraße 47','Hagen','Germany','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUUFBcUFRUYFxcYGhcaGxgbFxsbGhoXGxcYGhoXFxobISwkGx4pIBsbJTYmKS4wMzMzGiI5PjkyPSwyMzABCwsLEA4QHhISHjIpIio4NDQ0NDI1MjAyMjI0NDI0MjQyNDI2MjIyMjI0M',NULL,'2023-01-22 13:54:39'),
(18,'Global Open University','https://nagaland.net.in/','The Global Open University, Sodzulhou Village, P.O. - ARTC, NH-39','Dimapur','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQgDwo58XHY68uPYzEU_Mhpmc99gGuSQuWtQ&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(19,'Hanoi Open University','http://en.hou.edu.vn/','B101 Nguyen Hien, Hai Ba Trung Dist','Ha Noi','Vietnam','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5VQEVYYlPNafkyLstKjklzXeArSMte6yE4g&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(20,'Hellenic Open University','https://www.eap.gr/en/','Parodos Aristotelous 18','Patra','Greece','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQTExYUFBQWFxYYGRcZFxkYFhkXGhsZGBcYGBgYGRkbHishGRwmHhYZIjQjJistMDMwGiA1OjUuOSovMC0BCgoKDw4PHBERHDEoISgvLy8xLzQvMC8vMS8vMS0vLy8vNC8vOS8vLy8vM',NULL,'2023-01-22 13:54:39'),
(21,'Ho Chi Minh City Open University','http://en.ou.edu.vn/','Open University Ho Chi Minh City, 97 Vo Van Tan Street','Ho Chi Minh City','Vietnam','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQUEhYUFBQXFxYYGR4ZGRkZGSAeHhsdGx4gIB8hIB4fICkhGx8mISEbIjIiJiosLy8vHiA1OjUuOSsuLywBCgoKDg0OHBAQHC4mISYuMTAuLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uL',NULL,'2023-01-22 13:54:39'),
(22,'Indira Gandhi National Open University','http://www.ignou.ac.in/','Maidan Garhi','New Delhi','India','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcVFRUYGBcZGhocGxkaGhodIB0gHBwZGiAaGSAaICwjHCEoIRwZJDUlKC4vMjQyGiI4PTgwPCwxMi8BCwsLDw4PHRERHTMoIygxMTE0MTE0MTExMzExMTExMTEzMTExMTExMTExM',NULL,'2023-01-22 13:54:39'),
(23,'Interamerican Open University','https://www.uai.edu.ar/','Chacabuco 90 6° Floor. C1069AAB','Buenos Aires City','Argentina','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAlTecWJw7WhsfTkycEgiZ7J25IQklFx1bWw&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(24,'International Telematic University UNINETTUNO','https://www.uninettunouniversity.net/en/universita.aspx','Corso Vittorio Emanuele II','Rome','Italy','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhYZGRgaGhoaGhwcGhwcGhoaHBgaGhwcGh4cIS4lHB4rIRkaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHjQrJCs0NDQ0NDQ0NDQ0NDQ0NjY0NDQ0NDQ0NDQ0NDQ0N',NULL,'2023-01-22 13:54:39'),
(25,'Jiangsu Open University','https://eng.ujs.edu.cn/index.jsp','399 Jiangdong N Rd, Gulou Qu','Nanjing Shi','China','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRt2H2eFiVz2UOlKqgza7fOBUvrNHi9r2E0yg&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(26,'Karnataka State Open University','https://ksoumysuru.ac.in/','Mukhtagangotri','Mysuru','India','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFRUZGBgaGRoZGBoYGhwaGR4cHRgcGhwYHBgcIS4lHB4rIRwYJjgnLC8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHjQsJSs0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0N',NULL,'2023-01-22 13:54:39'),
(27,'Korea National Open University','https://engknou.knou.ac.kr/engknou/index.do?epTicket=LOG','86 Daehak-ro, Ihwa-dong, Jongno-gu','Seoul','South Korea','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGBxQUExYUFBQYGBYYGh8bGhoaGyEfHxwcJCIcIRwgHyAfHyskIR8oIyQhIzQkKC0uMTExHyE3PDcwOyswMi4BCwsLDw4PHBERHTAoIigwMDIwMDAwMDAwMjAwMDAwMjAwMDAwMDAwMDAwM',NULL,'2023-01-22 13:54:39'),
(28,'Krishna Kanta Handiqui State Open University','http://www.kkhsou.in/web/','Patagon, Rani','Guwahati','India','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUUFBgVFRQYGRgaGxsaGxsZGhsaGh8bHBobHRobGxsdIS0kHx0qIRodJjclKi4zNDQ0GiM6PzozPi0zNDEBCwsLEA8QHxISHzMqJCozNTMzPjMxMzMzMzMzMzMzMzMzMzM1MzMzMzMzM',NULL,'2023-01-22 13:54:39'),
(29,'Madhya Pradesh Bhoj Open University','http://www.bhojvirtualuniversity.com/','Kolar Road, Near Swarn Jayanti Park, \nChuna Bhatti','Bhopal','India','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBgVFRUZGRgaGyEfHBsbGyEdIh0dHxsaHR0dGhsdIS0kIh0qIhwaKDclKi4xNDQ0GiM6PzozPi0zNDEBCwsLEA8QHxISHzMqISozMzMzMzMzMzM1MzMzMzMzMzMzMzMzMzMzMzMzM',NULL,'2023-01-22 13:54:39'),
(30,'Nalanda Open University','http://www.nalandaopenuniversity.com/','Nalanada Open University, 2nd/3rd Floor, Biscomaun Bhawan, Gandhi Maidan','Patna','India','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhITExIVEhUVFRUYFRYVFRUVFRcXFRUWFhUVFRUYHSggGBolHRUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGi0dHx8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tL',NULL,'2023-01-22 13:54:39'),
(31,'National Open University of Nigeria','https://nou.edu.ng/','National Open University of Nigeria, University Village, Plot 91, Cadastral Zone, Nnamdi Azikiwe Expressway, Jabi','Abuja','Nigeria','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsqfALUOwT28083CK78_4b0FNqq53_hYstIg&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(32,'National Open University of Taipei','http://www106.nou.edu.tw/~eng/index.html','No. 172, Zhongzheng Rd.','New Taipei','Taiwan','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6U5nni4lt33JohJeWStHJTRtLciSwb21OiQ&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(33,'Netaji Subhas Open University','http://www.wbnsou.ac.in/index.shtml','DD-26, Sector-I, Salt Lake City, Kolkata - 700 064','Salt Lake City','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGb085QqQkX9UkSzZI2QAbHnFDV-QFIujfBQ&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(34,'Netaji Subhas Open University','http://www.wbnsou.ac.in/','Netaji Subhas Open University, DD-26, Sector-I','Salt Lake City, Kolkata','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQh2ScQiyvyIG6CbIfZYfItrXa1o8FCeduvjg&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(35,'Open Orthodox University','','Open Orthodox University, 704 N. King Street, Suite 500, P.O. Box 1031','Wilmington','United States','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPWD8OASzPjW8sAotgWRPTdXPOZVYDeTWP1g&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(36,'Open Polytechnic of New Zealand','https://www.openpolytechnic.ac.nz/','Central Office, 3 Cleary Street, Lower Hutt','Wellington','New Zealand','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhUYGRgaGhwaGhocHB0aGB0cHBoZGhkaHBocIy4lHCMrHxwYJzgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8QHxISHzQrJSs0NDQ0OjQ0NDQ0NDQ0NDU0NjQ0NDQ0NDQ0NDY0N',NULL,'2023-01-22 13:54:39'),
(37,'Open Universiteit','https://www.ou.nl/','Open University, PO Box 2960','Heerlen','','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0ZnSk-LjO1b96J-9a0aYWsxxhDMvo2TorKA&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(38,'Open University','http://www.open.ac.uk/','The Open University, Walton Hall','Milton Keynes','United Kingdom','https://cdn.britannica.com/85/13085-050-C2E88389/Corpus-Christi-College-University-of-Cambridge-England.jpg',NULL,'2023-01-22 13:54:39'),
(39,'Open University Malaysia','http://www.oum.edu.my/','Jalan Tun Ismail,50480 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur','Kuala Lampur','Malaysia','https://www.gstatic.com/ui/v1/menu/device_default_thumbnail2.png',NULL,'2023-01-22 13:54:39'),
(40,'Open University of Catalonia','http://www.uoc.edu/portal/en/','Rambla del Poblenou, 156','Barcelona','Spain','https://www.gstatic.com/ui/v1/menu/dark_thumbnail2.png',NULL,'2023-01-22 13:54:39'),
(41,'Open University of China [formally China Central Radio and TV University (CCRTVU) and local radio an','http://en.ouchn.edu.cn/','Open University of China, 75 Fuxing Road','Beijing','China','https://www.gstatic.com/ui/v1/menu/light_thumbnail2.png',NULL,'2023-01-22 13:54:39'),
(42,'Open University of Cyprus','https://www.ouc.ac.cy/index.php/en/','Main OUC Building, 33, Giannou Kranidioti Ave.','Latsia, Nicosia','Cyprus','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTum5L4kFStZ-DcGG3m_ZBEd6La_YSO660kkg2bX1jBnvk7MFGtdCN37WI&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(43,'Open University of Guangdong','http://www.gdrtvu.edu.cn/','Guangdong Open University,Np. 1 Xiantang West Road','Guangzhou City','China','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScuLP7c64qZskK37Wi6C1elXpoj1zvGkxA5cuYygjma4NthfUBcQMFe40&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(44,'Open University of Hong Kong','http://www.ouhk.edu.hk/wcsprd/Satellite?pagename=OUHK/tcSingPage&lang=eng','','Hong Kong','China','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmjHOnydPt2t0zRDga4sUyuDTwWxYkdO3dMUk5Bj7FfXxr9O6Pl5mwFxc&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(45,'Open University of Israel','http://www.openu.ac.il/en/pages/default.aspx','The Open University of Israel, 1 University Road, P.O. Box 808','Ra\'anana','Israel','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuJBLNGDjwI87BEH-8PMs8vI6xOtlOfYWjJDlGhwfmSmUNdFJq-6DJGRo&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(46,'Open University of Japan','http://www.ouj.ac.jp/eng/','Open University of Japan, 2-11 Wakaba, Mihama-ku','Chiba','Japan','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlpDz68oyYmcw1W911YbeQccRhfZdZfd6stRdLikn9DYmIPUB7Y5BrMAY&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(47,'Open University of Kaohsiung','http://www.ouk.edu.tw/english/index.aspx','Open University of Kaohsiung, No. 436, Daye North Rd.','Kaohsiung City','Taiwan','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShinZmvE_oRBMi9K6hfibf_MZ1XnJfSXWwhqrOlcFek6Jpqhv-f5xrhr0&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(48,'Open University of Mauritius','http://www.open.ac.mu/','Louis Pasteur Street, Forest Side','Moka','Mauritius','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSQE_HJaqHz3DVQoWVle201CI70iWEhiwoJYKTTTmU2QWKfNTgQe9ViYc&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(49,'Open University of Sri Lanka','https://ou.ac.lk/','The Open University of Sri Lanka, P.O. Box 21','Nawala, Nugegoda','Sri Lanka','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRX_PV9WjGHsycU0OdkCCfg09CgqEQLHD-e46xNISXsaAyYZiLFTEyjxBY&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(50,'Open University of Sudan','','Obaid Khatim Avenue, Arkweet, OUS','','Sudan','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQD4_W1Qtt1VPF40oEEbvXJKLnxBdNoKWeR5m5IUEizMmVlLxOy-6Ap7YA&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(51,'Open University of Tanzania','https://www.out.ac.tz/','Open University of Tanzania, P.O. Box 23409','Dar es Salaam','Tanzania','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSJKo5zgdyY5lWNmxKKh81VwSlHF4vrw2xxUdHgPYP66gdAADQfUx-xI4&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(52,'Pandit Sundarlal Sharma (Open) University','http://pssou.ac.in/','Bilaspur Koni-Birkona Marg, Gram Post-Birkona','Bilaspur, Himachal Pradesh','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQKkn5RXmtxURfWtYf3f2L-dq2g-flrGR9tWYhevAFnP8COu7atXyP89VY&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(53,'Payame Noor University','http://en.pnu.ac.ir/Portal/Home/','Payame Noor University, POB 19395-4697','Tehran','Iran','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG8_Zf5AT5wu9ltAMfQqCU-1HVH0Nr3HXD6bHUtfYsc9Es1kOia7I1s4A&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(54,'Polytechnic University of the Philippines Open University','https://www.pup.edu.ph/ous/','Second Floor South Wing Executive Offices, Main Building, A. Mabini Campus, Anonas Street, Sta. Mesa','Manila','Philippines','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaaCBXxOzH5ShryR8DOT6YMCDVgmi_pIJfLhuYvOkBUAaUYoLGxrrIL44&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(55,'Shanghai Open University','http://iie.sou.edu.cn/','Shanghai Open University, 288 Guoshun Road','Shanghai','China','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSEv3ZVoO0UFvJHrPUf2shLQdDa35iQ97gbqAkCLicBnO5eFTehdjM2L0E&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(56,'Sukhothai Thammathirat Open University','http://www.stou.ac.th/Eng/','Sukhothai Thammathirat Open University, Muang Thong Thani, Chaengwattana Rd., Bangpood','Pak Kret','Thailand','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkJ-i2gPAaw_9WfVgTTeLAadBM3orXbbHTlocUG39uGdPA-HQs4_hWKTM&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(57,'Tamil Nadu Open University','http://www.tnou.ac.in/','Tamil Nadu Open University, No. 577, Anna Salai, Saidapet','Chennai','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo2OVckhzrHBwOmjAbsC62OvOiUxGv61yyr492MHhQMnEZszgvWD8UIMw&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(58,'Thompson Rivers University, Open Learning','https://www.tru.ca/','Thompson Rivers University, 805 TRU Way','Kamloops','Canada','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIdl9dEdBzd4WfcIEr6hnIIcNmzTEtOG1j4qFh7sc_pJXizNCO_Yvatrc&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(59,'U.P. Rajarshi Tandon Open University, Allahabad','http://www.uprtou.ac.in/','U.P. Rajarshi Tandon Open University, Shantipuram Awas Yojna, Sector-F, Phaphamau','Allahabad','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMzTw6oZcl7oQQXOQSRnF1gC1w8_N614B7ognQlPq7LsalIoqPIAS5LoA&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(60,'Universidad Estatal a Distancia - UNED','https://www.uned.ac.cr/','Calle Faustino Montes de Oca','Mercedes','Costa Rica','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(61,'Universidad Nacional Abierta','https://www.unad.edu.co/','National Open University, Headquarters, Av. Los Calvani, No. 18, San Bernardino','Caracas','Venezuela','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(62,'Universidad Nacional Abierta y a Distancia','https://www.unad.edu.co/','Universidad Nacional Abierta y a Distancia, National headquarters José Celestino Mutis, Calle 14 Sur #14-23','Bogota','Colombia','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(63,'Universidad Nacional de Educacion a Distancia (UNED)','http://portal.uned.es/','Calle de Bravo Murillo, 38','Madrid','Spain','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(64,'Universidade Aberta','http://portal.uab.pt/en/conhecer-a-uab/','Universidade Aberta (Headquarters), Palacio Ceia, Rua da Escola Politécnicam No. 141-147','Lisbon','Portugal','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(65,'Universitas Terbuka (Indonesia Open University)','http://www.ut.ac.id/en','Universitas Terbuka, Up. Hallo-UT, Jalan Cabe Raya, Pondok Cabe, Pamulang','Tangerang Selatan','Indonesia','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(66,'Université TÉLUQ','https://www.teluq.ca/site/en/','455, rue du Parvis','Québec','Canada','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(67,'University of South Africa (UNISA)','http://www.unisa.ac.za/sites/corporate/default','University of South Africa, P.O. Box 392','','South Africa','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(68,'University of the City of Manila, Open University','https://plm.edu.ph/','Pamantasan ng Lungsod ng Maynila, Gen. Luna cor. Muralla St., Intramuros','Manila','Philippines','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(69,'University of the Philippines Open University','http://www.upou.edu.ph/','3/F UPOU Main Building, UP Open University','Los Banos','Philippines','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(70,'Uttarakhand Open University','http://uou.ac.in/','UCF Sadan, Vishnu Vihar, Deepnagar Road, Near Prasar Bharti Kendra, Ajabpurkalan','Haldwani (Nainital)','India','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(71,'Vardhman Mahaveer Open University, Kota','https://www.vmou.ac.in/','Vardhman Mahaveer Open University, Kota, Rawatbahata Road','Kota','India','data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N',NULL,'2023-01-22 13:54:39'),
(72,'Venkateshwara Open University','http://www.vou.ac.in/','Venkateshwara Open University, Lekhi Village, Distt. Papum Pare','Naharlagun','India','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQFWJ3aJwYZLXJ95qJKkwyRxAMScSeWmAw_y3JV4-21NXKzlfxJ-0q&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(73,'Wawasan Open University','http://www.wou.edu.my/','Wawasan Open University, 54, Jalan Sultan Ahmad Shah','George Town','Malaysia','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqCTlpImWYpSPXVuvcmS9Torf4hE05vSDWSX1-8beM6Mj6VJ9TKAyx&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(74,'Yangon University of Distance Education','http://www.yude.edu.mm/public/','Yangon University of Distance Education, No. 47 (A), Inya Road Kamayut Township','Yangon','Myanmar','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl5hyk4_8_wUBxCIZ89LYmdV4rKWv-Y_PDAOagGTXSsUNSW5oVWPwH&usqp=CAU',NULL,'2023-01-22 13:54:39'),
(75,'Yashwantrao Chavan Maharashtra Open University','http://ycmou.digitaluniversity.ac/default.aspx','Y.C.M. Open University, Head Office, Dnyangangotri, Near Gangapur Damn','Nashik','India','https://fonts.gstatic.com/s/i/productlogos/lens_camera/v1/192px.svg',NULL,'2023-01-22 13:54:39'),
(76,'Yunnan Open University','http://university.cuecc.com/school/index?id=711','Yunnan Open University, No. 113 Xuefu Road','Kunming','China','https://encrypted-tbn2.gstatic.com/faviconV2?url=https://scicu.org&client=VFE&size=16&type=FAVICON&fallback_opts=TYPE,SIZE,URL&nfrp=2',NULL,'2023-01-22 13:54:39'),
(77,'Zambian Open University','http://zaou.ac.zm/','Zambian Open University, New Foundland Campus, Unity Road, off Mumbwa Road, P.O. Box 31925','Lusaka','Zambia','https://encrypted-tbn2.gstatic.com/faviconV2?url=https://telegraph.co.uk&client=VFE&size=16&type=FAVICON&fallback_opts=TYPE,SIZE,URL&nfrp=2',NULL,'2023-01-22 13:54:39'),
(78,'Zimbabwe Open University','https://zou.ac.zw/','Zimbabwe Open University, Virtual Campus, National Centre, 4th Floor, Corner House, Corner Samora Machal and Leopold Takawira Street','Harare','Zimbabwe','https://encrypted-tbn2.gstatic.com/faviconV2?url=https://sendmybag.com&client=VFE&size=16&type=FAVICON&fallback_opts=TYPE,SIZE,URL&nfrp=2',NULL,'2023-01-22 13:54:39');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
